<?php
if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

require_once(ROOT_PATH."modules/account/account.class.php");
require_once(ROOT_PATH."modules/credit/credit.class.php");
//VIP����
if ($_U['query_type'] == "applyvip"){
	if (isset($_POST['vip_type'])){
		if (md5($_POST['paypassword'])!=$_G['user_result']['paypassword']){
			$msg = array("֧���������벻��ȷ");
		}
		$data['vip_type'] = $_POST['vip_type'];
		$data['gold_status'] = $_POST['gold_status'];
		$data['user_id'] = $_G['user_id'];
		$data['remark'] = 0;
		$data['kefu_userid'] = 0;
		if ($data['gold_status']==1){
			if ($data['vip_type']==1){
				$data['money'] = $_G['system']['con_vip_fee']-20;
			}else{
				$data['money'] = $_G['system']['con_vip_gao']-20;
			}
		}else{
			if ($data['vip_type']==1){
				$data['money'] = $_G['system']['con_vip_fee'];
			}else{
				$data['money'] = $_G['system']['con_vip_gao'];
			}
		}
		$account=accountClass::GetOne(array("user_id"=>$data['user_id']));
		if ($account['balance']<$data['money']){
			$msg = array("���㣬��������VIP��");
		}
		
	    if($msg==""){
		$result = usersClass::UsersVipApply($data);
		if ($result===true){
			if ($_G['system']['con_vipfee_now']==1){
				$vip["user_id"] = $data['user_id'];
				$vip["nid"] = "vip_success_".$data['user_id'].time();
				if ($data['gold_status']==1){
					if ($data['vip_type']==1){
						$vip['money'] = $_G['system']['con_vip_fee']-20;
					}else{
						$vip['money'] = $_G['system']['con_vip_gao']-20;
					}
				$credit_log['user_id'] = $data['user_id'];
				$credit_log['nid'] = "vip_gold";
				$credit_log['code'] = "payment";
				$credit_log['type'] = "vip_gold";
				$credit_log['addtime'] = time();
				$credit_log['article_id'] = $data['user_id'];
				$credit_log['remark'] = "����Vip��ֽ�ҿ۳�";
				creditClass::ActionCreditLog($credit_log);
				}else{
					if ($data['vip_type']==1){
						$vip['money'] = $_G['system']['con_vip_fee'];
					}else{
						$vip['money'] = $_G['system']['con_vip_gao'];
					}
				}
				$vip["income"] = 0;
				$vip["expend"] = $vip["money"];
				$vip["balance"] = -$vip["money"];
				$vip["balance_cash"] = -$vip["money"];
				$vip["balance_frost"] = 0;
				$vip["frost"] = 0;
				$vip["await"] = 0;
				$vip["type"] = "vip_success";
				$vip["to_userid"] = 0;
				$vip["remark"] =  "ͨ��Vip���";
				accountClass::AddLog($vip);
				
				$user_log["user_id"] = $data['user_id'];
				$user_log["code"] = "account";
				$user_log["type"] = "vip_success";
				$user_log["operating"] = "account";
				$user_log["article_id"] = $data['user_id'];
				$user_log["result"] = 1;
				if ($data['vip_type']==1){
					$user_log["content"] = "�����ΪVIP��Ա�ɹ�,[<a href=/vip_xieyi/index.html target=_blank>����˴�</a>]�鿴Э����";
				}else{
					$user_log["content"] = "�����Ϊ�߼�VIP��Ա�ɹ�,[<a href=/hvip_xieyi/index.html target=_blank>����˴�</a>]�鿴Э����";
				}
				usersClass::AddUsersLog($user_log);
			}
			$_result=usersClass::GetFriendsInvite(array("friends_userid"=>$data['user_id']));
			if ($_result['list'][0]['user_id']>0){
				$credit_invite['user_id'] = $_result['list'][0]['user_id'];
				$credit_invite['nid'] = "invite";
				$credit_invite['code'] = "payment";
				$credit_invite['type'] = "invite";
				$credit_invite['addtime'] = time();
				$credit_invite['article_id'] =  $_result['list'][0]['user_id'];
				$credit_invite['remark'] = "�����˳�ΪVip��ý��";
				creditClass::ActionCreditLog($credit_invite);
			}
			$msg = array("Vip����ɹ�","","/vip/index.html");
		}else{
			$msg = array($MsgInfo[$result],"","/vip/index.html");
		}
		}	
	}
}

elseif ($_U['query_type'] == "protection"){
	if ((isset($_POST['type']) && $_POST['type'] == 1)){
		if (  $_G['user_result']['answer']=="" || $_POST['answer'] == $_G['user_result']['answer']){
			$_U['answer_type'] = 2;
		}else{
			$msg = array("����𰸲���ȷ","",$url);
		}
	}elseif (isset($_POST['type']) && $_POST['type'] == 2){
		$var = array("question","answer");
		$data = post_var($var);
		if ($data['answer']==""){
			$msg = array("����𰸲���Ϊ��","",$url);	
		}else{
			$data['user_id'] = $_G['user_id'];
			$result = usersClass::UpdateUsers($data);
			if ($result == false){
				$msg = array($result);	
			}else{
				$msg = array("���뱣���޸ĳɹ�","",$url);	
			}
		}
	}
}


//������������
elseif ($_U['query_type'] == "paypwd"){
	if (isset($_POST['oldpassword'])){
		if ($_G['user_result']['paypassword'] == "" && md5($_POST['oldpassword']) !=$_G['user_result']['password']){
			$msg = array("���벻��ȷ�����������ĵ�¼����","",$url);	
		}elseif ($_G['user_result']['paypassword'] != "" && md5($_POST['oldpassword']) != $_G['user_result']['paypassword']){
			$msg = array("���벻��ȷ�����������ľɽ�������","",$url);	
		}else{
			$data['user_id'] = $_G['user_id'];
			$data['paypassword'] = $_POST['newpassword'];
			$result = usersClass::UpdatePayPassword($data);
			if ($result>0){
				$msg = array("���������޸ĳɹ�","","index.php?user&q=code/users/paypwd");
			}else{
				$msg = array($MsgInfo[$result]);
			}
		}
	}		
}

//������������
elseif ($_U['query_type'] == "getpaypwd"){
	if(isset($_REQUEST['id']) && $_REQUEST['id']!=""){
		if (isset($_POST['paypwd']) && $_POST['paypwd']!=""){
			if ($_POST['paypwd']==""){
				$msg = array("���벻��Ϊ��","",$url);
			}elseif ($_POST['paypwd']!=$_POST['paypwd1']){
				$msg = array("�������벻һ��","",$url);
			}else{
				$data['user_id'] = $_G['user_id'];
				$data['paypassword'] = $_POST['paypwd'];
				$result = usersClass::UpdatePayPassword($data);
				$msg = array("���������޸ĳɹ�","","/?user&q=code/users/paypwd");
			}
		}else{
			$id = urldecode($_REQUEST['id']);
			$_id = explode(",",authcode(trim($id),"DECODE"));
			$data['user_id'] = $_id[0];
			if ($_id[1]+60*60<time()){
				$msg = array("��Ϣ�ѹ��ڣ����������롣");
			}elseif ($data['user_id']!=$_G['user_id']){
				$msg = array("����Ϣ���������Ϣ���벻Ҫ�Ҳ���");
			}
			
		}
	}elseif (isset($_POST['valicode'])){
		$data['user_id'] = $_G['user_id'];
		$data['username'] = $_G['user_result']['username'];
		$data['email'] = $_G['user_result']['email'];
		$data['webname'] = $_G['system']['con_webname'];
		$data['title'] = "��������ȡ��";
		$data['key'] = "getPayPwd";
		$data['query_url'] = "code/user/getpaypwd";
		$data['msg'] = GetPaypwdMsg($data);
		$data['type'] = "getpaypwd";
		$result = usersClass::SendEmail($data);
		$msg = array("��Ϣ�ѷ��͵��������䣬��ע�����");
	}
}

//��¼��������
elseif ($_U['query_type'] == "userpwd"){
	if (isset($_POST['oldpassword'])){
		if (md5($_POST['oldpassword']) != $_G['user_result']['password']){
			$msg = array("���벻��ȷ�����������ľ�����","",$url);	
		}else{
	
			$data['user_id'] = $_G['user_id'];
			$data['password'] = $_POST['newpassword'];
			$result = usersClass::UpdatePassword($data);
			if ($result == false){
				$msg = array($result);	
			}else{
				if ($_G['module']['ucenter_status']==1 ){
		
					$_data['email'] = $_G['user_result']['email'];
					$_data['username'] = $_G['user_result']['username'];
					$_data['oldpassword'] = $_POST['oldpassword'];
					$_data['newpassword'] = $_POST['newpassword'];
					ucenterClass::UcenterPwd($_data);
							
				}
				$msg = array("��¼�����޸ĳɹ�","",$url);	
			}
		}
	}
}

//�ٱ�
elseif ($_U['query_type'] == "addrebut"){
	if (isset($_POST['contents'])){
		$data['type_id'] = $_POST['type_id'];
		$data['contents'] = nl2br($_POST['contents']);
		$data['rebut_userid'] = $_POST['rebut_userid'];
		$data['user_id'] = $_G['user_id'];
		$result = usersClass::AddRebut($data);
		if ($result==false){
			$msg = array($result,"","");	
		}else{
			$msg = array("��л��ľٱ������ǽ���һʱ����������","","");	
		}
	}else{
		$result = usersClass::GetUsers(array("username"=>urldecode($_REQUEST['username'])));
		
		if ($result==false){
			echo "<script>alert('�Ҳ������û����벻Ҫ�Ҳ���');location.href='/index.php?user'</script>";
			exit;
		}elseif ($result['user_id']==$_G['user_id']){
			echo "<script>alert('���ܾٱ��Լ�');</script>";
			exit;
		}else{
			echo "<div style='line-height:30px; text-align:left'>* ��վ�������������͹۵ط�ӳ������������ʵ���,�Թ�ͬά��һ�����ź͹�ƽ�Ľ��������<form method='post' action='/?user&q=code/users/addrebut'>";
			echo "<div align='left'>&nbsp;&nbsp;&nbsp;��Ҫ�ٱ����û���{$_REQUEST['username']}<input type='hidden' name='rebut_userid' value='{$result['user_id']}'></div>";
			echo "<div align='left'>&nbsp;&nbsp;&nbsp;���ͣ�<select name='type_id'>";
			foreach ($_G["_linkages"]['rebut_type'] as $key => $value){
				echo "<option value='{$value['value']}'>{$value['name']}</option>";
			}
			echo "</select></div><div align='left'>&nbsp;&nbsp;&nbsp;���ݣ�<textarea rows='2' cols='20' name='contents'></textarea></div>";
			echo "<div align='left'>&nbsp;&nbsp;&nbsp;<input type='submit' value='ȷ ��'></div>";
			echo "</form></div>";
			exit;
		}
	}
}

//�������
elseif ($_U['query_type'] == "reginvite"){
	$_U['user_inviteid'] =  Key2Url($_G['user_id'],"reg_invite");
}
elseif ($_U['query_type'] == "checkrealname"){
	$data['realname'] = iconv("UTF-8", "GBK", $_GET['realname']);
	$data['user_id'] = $_G['user_id'];
	$result = usersClass::CheckRealname($data);
	echo $result;exit;
}
elseif ($_U['query_type'] == "checkphone"){
	$data['phone'] = $_GET['phone'];
	$data['user_id'] = $_G['user_id'];
	$result = usersClass::CheckPhone($data);
	echo $result;exit;
}
	
$template = "users_info.html";
?>
