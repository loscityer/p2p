<?
/******************************
 * $File: account.inc.php
 * $Description: �ʽ��û������ļ�
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

include_once("account.class.php");
include_once("account.count.php");
if ($_U['query_type']=="bank"){
	if (IsExiest($_POST['account'])!=false){
		$var = array("province","city","account","bank","branch");
		$data = post_var($var);
		$data['user_id'] = $_G['user_id'];
		$result = accountClass::UpdateUsersBank($data);
		if ($result>0){
			$msg = array("�ʽ��˻��޸ĳɹ�","",$_U['query_url_all']);
		}else{
			$msg = array($MsgInfo[$result],"",$_U['query_url_all']);
		}
	}else{
		$result = accountClass::GetUsersBankOne(array("user_id"=>$_G['user_id']));
		if (is_array($result)){
			$_U['account_bank_result'] = $result;
		}else{
		$sql = "insert into `{account_users_bank}` set user_id='".$_G['user_id']."'";
			$mysql->db_query($sql);
			//$msg = array($MsgInfo[$result],"",$_U['query_url_all']);
		}
	}
}

elseif ($_U['query_type']=="recharge_new"){
	require_once(ROOT_PATH."modules/payment/payment.class.php");
	if (isset($_POST['money'])){
		$msg = check_valicode();
		if ($msg==""){
			$var = array("money","type","remark");
			$data = post_var($var);
			$data['user_id'] = $_G['user_id'];
			$data['status'] = 0;
			
			if (!is_numeric($data['money'])){
				$msg = array("�����д����","",$_U['query_url']."/".$_U['query_type']);
			}
			if ($msg==""){
				$url = "";
				if ($data['type']==1){
					$data['payment'] = $_POST['payment1'];
					$data['remark'] = $_POST['payname'.$_POST['payment1']]."���߳�ֵ";
					$result=usersClass::GetUsersVip(array("user_id"=>$data['user_id']));
					if ($result['status']==1){
						$data['fee']=$_G['system']['con_account_recharge_vip_fee']/100*$data['money'];
					}else{
						$data['fee']=$_G['system']['con_account_recharge_fee']/100*$data['money'];
					}
					
						$data['balance'] = $data['money'] - $data['fee'];
					/*$money1 = isset($_G['system']['con_recharge_max_account'])?$_G['system']['con_recharge_max_account']:5000;
					if ($data['money'] >= $money1 ){
						$fee1 = isset($_G['system']['con_recharge_max_fee'])?$_G['system']['con_recharge_max_fee']:50;
						$data['fee'] = $fee1;
					}else{
						$fee2 = isset($_G['system']['con_recharge_fee'])?$_G['system']['con_recharge_fee']:0.01;
						$data['fee'] = $data['money']*$fee2;
					}*/
				}else{
					$data['payment'] = $_POST['payment2'];
					$data['fee'] = $_G['system']['con_account_recharge_jiangli']/100*$data['money'];
						$data['balance'] = $data['money'] + $data['fee'];
				}
			
				
				$data['nid'] = str_pad(rand(1000,9999)."00504".$_G['user_id'].rand(1000,9999),16,"0",STR_PAD_RIGHT);
				if ($data['type']==2){
				$data['status'] = 0;
				}else{
				$data['status'] = 2;
				}
				$result = accountClass::AddRecharge($data);
					$data['trade_no'] = $data['nid'];
				
				if ($data['type']==1){
					$data['subject'] = "�˺ų�ֵ";
//					$data['bankCode'] = $_POST['bankCode'];
					//$data['subject'] = $_G['system']['con_webname']."�˺ų�ֵ";
					$data['body'] = "�˺ų�ֵ";
					$url = paymentClass::ToSubmit($data);
				}
				if ($result!=true){
					$msg = array($result,"",$_U['query_url']."/".$_U['query_type']);
				}else{
					if ($url!=""){
						header("Location: {$url}");
						exit;
					$msg = array("��վ����ת��֧����վ<br>���û��Ӧ�����������֧����վ�ӿ�","֧����վ",$url);
					}else{
					$msg = array("���Ѿ��ɹ��ύ�˳�ֵ����ȴ�����Ա����ˡ�","",$_U['query_url']."/".$_U['query_type']);
					}
				}
			}else{
				$msg = array("�����д����","",$_U['query_url']."/".$_U['query_type']);
			
			}
		}
	}else{
		$_U['account_payment_list'] = paymentClass::GetList(array("status"=>1));
	}
}


elseif ($_U['query_type'] == "list"){
	$data['user_id'] = $_G["user_id"];
	$result = accountCountClass::GetRechargeCount($data);
	$_U['recharge']['online'] = $result['recharge_all_up'];
	$_U['recharge']['downline'] = $result['recharge_all_down'];
	$_U['recharge']['all'] = $result['recharge_all'];
	$_result = accountCountClass::GetCashCount($data);
	$_U['cash']['all'] = $_result['0']['account'];
}
elseif ($_U['query_type'] == "web"){
	$data['user_id'] = $_POST["user_id"];
	$log_info["user_id"] = $data['user_id'];//�����û�id
	$log_info["nid"] = "web_daicha_".$data['user_id'].time();//������
	$log_info["money"] = 30;//�������
	$log_info["income"] = 0;//����
	$log_info["expend"] = 30;//֧��
	$log_info["balance_cash"] = -30;//�����ֽ��
	$log_info["balance_frost"] = 0;//�������ֽ��
	$log_info["frost"] = 0;//������
	$log_info["await"] = 0;//���ս��
	$log_info["type"] = "web_daicha";//����
	$log_info["to_userid"] = 0;//����˭
	$log_info["remark"] =  "������վ����ɹ����ۿ�30Ԫ��";
	accountClass::AddLog($log_info);
	usersClass::UpdateUsersInfo(array("user_id"=>$data['user_id'],"web_status"=>1));
}
elseif ($_U['query_type'] == "cash"){
	$data['user_id'] = $_G["user_id"];
	$_result = accountCountClass::GetCashCount($data);
	$_U['cash']['all'] = $_result['0']['account'];
	$_U['cash']['credited_all'] = $_result['0']['credited_all'];
	$_U['cash']['fee_all'] = $_result['0']['fee_all'];
}
elseif ($_U['query_type'] == "recharge"){
	$data['user_id'] = $_G["user_id"];
	$result = accountCountClass::GetRechargeCount($data);
	$_U['recharge']['online'] = $result['recharge_all_up'];
	$_U['recharge']['downline'] = $result['recharge_all_down'];
	$_U['recharge']['all'] = $result['recharge_all'];
}
elseif ($_U['query_type'] == "cash_new"){	
	
	
	$data['user_id'] = $_G["user_id"];
	
		$_result_jin = accountClass::Getborrowjin($data);
		$_U['result_jin']=$_result_jin['account'];

		
		if(isset($_POST['money'])){
			$msg = check_valicode();
			
			//if(isset($_POST['code_yz'])){
		$code_yz=$_POST['code_yz'];
		
		if(empty($code_yz)){
	    $msg = array("����д�ֻ���֤��");
		}else{
		$sql = "select code,id from `{approve_smslog}` where user_id='{$data['user_id']}' and type='smstixian' and code_status=0 ORDER BY `id` DESC LIMIT 0 , 1";
		   $code = $mysql->db_fetch_array($sql);
		   if($code_yz!=$code['code']){
		  $msg = array("�ֻ���֤�����");
		   }
		}
		//}
			if ($msg!=""){
				
			}elseif ($_G["user_result"]['paypassword']!=md5($_POST['paypassword'])){
				$msg = array("����������д����");
			}elseif (!is_numeric($_POST['money'])){
				$msg = array("�����д����");
			}elseif ($_POST['money']<0){
				$msg = array("������Ϊ����");	
			}else{
				$data['status'] = 0;
				$data['total'] = $_POST['money']+$_G['system']['con_account_cash_1']*$data['account']*0.01;
				$data['account'] = $_POST['money'];
				$data['bank'] = $_POST['bank'];
				$data['bank_id'] = $_POST['bank_id'];
				$data['nid'] = "cash_".$_G['user_id'].time().rand(100,999);
				$data['fee'] = $_G['system']['con_account_cash_1']*$data['account']*0.01;
				$data['credited'] = $data['total']-$data['fee'];
				$result = accountClass::AddCash($data);
				if ($result>0){
				$mysql->db_fetch_array("update `{approve_smslog}` set code_status=1,code_time='".time()."' where id='".$code['id']."' ");
					$msg = array("�������������Ѿ��ɹ��ύ������������Ԥ��24Сʱ����","","/?user&q=code/account/log");
				}else{
					$msg = array($MsgInfo[$result],"","/?user&q=code/account/cash_new");
				}
			}
		}
}
$template = "user_account.html";
?>
