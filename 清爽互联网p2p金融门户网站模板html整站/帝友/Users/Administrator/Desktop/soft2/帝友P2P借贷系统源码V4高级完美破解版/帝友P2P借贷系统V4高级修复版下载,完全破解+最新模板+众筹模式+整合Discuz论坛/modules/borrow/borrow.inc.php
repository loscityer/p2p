<?
/******************************
 * $File: borrow.inc.php
 * $Description: ����û����Ĵ����ļ�
 * $Author: hummer 
 * $Time:2010-08-09
 * $Update:None 
 * $UpdateDate:None 
 * Copyright(c) 2013 by jichu.com. All rights reserved
******************************/

if (!defined('ROOT_PATH'))  die('���ܷ���');//��ֱֹ�ӷ���

include_once("borrow.class.php");
include_once("borrow.auto.php");
//�������Ӻ��޸�
if ($_U['query_type'] == "add" || $_U['query_type'] == "update"){	
	$msg = check_valicode();
	if ($msg!=""){
		$msg = array("��֤�����");
	}elseif (!isset($_POST['name'])){
		$msg = array($MsgInfo["borrow_name_empty"]);
	}elseif (!isset($_POST['borrow_apr']) && intval($_POST['borrow_apr'])==0){
		$msg = array('������ʱ������0');
	}elseif($_POST['borrow_style']==1 && $_POST['borrow_period']%3!=0){
		$msg = array($MsgInfo["borrow_period_season_error"]);
	}elseif($_POST['borrow_type']==4 && $_POST['borrow_style']!=2){
		$msg = array("��ת��Ļ��ʽ���뵽�ڻ�����Ϣ");
	}elseif($_POST['borrow_period']<1 && $_POST['borrow_style']!=2){
		$msg = array("���Ļ��ʽ���뵽�ڻ�����Ϣ");
	}elseif($_POST['borrow_period']>1 && $_POST['borrow_style']==2){
		$msg = array("��������������ֲ������ڻ�����Ϣ");
	}elseif($_POST['borrow_type']==4 && $_POST['is_Seconds']==1){
		$msg = array("��ת�겻�������");
	}elseif($_POST['isDXB']==1 && $_POST['pwd']==''){
		//�����
		$msg = array("��ѡ���˶���꣬����д��������룡");	
	}else{		
		$var = array("name","borrow_use","borrow_period","borrow_style","account","borrow_apr","borrow_contents","group_status","group_id","is_Seconds","second_limit_money","isDXB","pwd","borrow_valid_time","award_status","award_scale","award_account","borrow_object");
		
		$data = post_var($var);
		$data['open_account'] = 1;
		$data['open_borrow'] = 1;
		$data['open_credit'] = 1;
		$data['borrow_account_wait'] = $data['account'];
		$data['vouch_account'] = $data['account'];
		$data['vouch_account_wait'] = $data['account'];
		
		if ($data['isDXB']==''){$data['isDXB']=0;}
		//���ɽ�������ˮ
		$sql="select max(id) as maxid from `{borrow}`";
		$nid=$mysql->db_fetch_array($sql);
		if ($nid['maxid']==""){
			$today = date("Ym");
			$data["borrow_nid"]=$today."00001";
		}else{
			$sql="select borrow_nid from `{borrow}` where id={$nid['maxid']}";
			$borrow_nid=$mysql->db_fetch_array($sql);
			$today = date("Ym");
			$pid = str_replace($today,'',$borrow_nid['borrow_nid']);
			if (strlen($pid)==strlen($borrow_nid['borrow_nid'])){
				$data["borrow_nid"]=$today."00001";
			}else{
				$pid = $today.str_pad($pid,5,"0",STR_PAD_LEFT);
				$data["borrow_nid"]=$pid+1;
			}
		}
		if ($_POST['submit']=="����ݸ�"){
			$data['status'] = -1;
		}else{
			$data['status'] =0;
		}
		if ($_G['system']['con_borrow_not_check']==1){
			$data['status'] = 1;
		}	
		if ($_POST['borrow_type']==2){
			$data['borrow_type'] = "vouch";
			$data['vouchstatus'] = 1;
		}elseif ($_POST['borrow_type']==3){
			$data['borrow_type'] = "fast";
			$data['fast_status'] = 1;
		}// <!--��ת�� 2-->
		elseif ($_POST['borrow_type']==4){
			$data['borrow_type'] = "flow";
			$data['is_flow'] = 1;
		}elseif ($_POST['borrow_type']==5){
			$data['borrow_type'] = "jin";
			$data['is_jin'] = 1;
		}else{
			$data['borrow_type'] = "credit";
		}
		if ($data['is_flow']==''){$data['is_flow']=0;}

		if ($data["award_status"]==0){
			$data["award_false"] = 0;
		}
		if ($_POST['is_Seconds']==1){
		$duserpp = borrowClass::Aduserpp($_G['user_id']);
		}
		$data['user_id'] = $_G['user_id'];
		if ($_U['query_type'] == "add"){
			if (isset($_POST['type']) && $_POST['type']=="tiyan"){
				$data['borrow_style'] = 5;
				$data['borrow_apr'] = 20;
				$result = borrowClass::AddBorrowTiyan($data);
			}elseif (isset($_POST['type']) && $_POST['type']=="vouch"){
				$result = borrowClass::AddBorrowVouch($data);
			}else{
	
				$result = borrowClass::Add($data);
			}
			//�������˶�ȵ�
		}else{
			$data['borrow_nid'] = $_POST['id'];
			$data['user_id'] = $_G['user_id'];
			$result = borrowClass::Update($data);
		}
		$_SESSION['valicode'] = "";
		if ($result>0){
			$msg = array($MsgInfo["borrow_success_msg"],"","/index.php?user&q=code/borrow/publish");
		}else{
			$msg = array($MsgInfo[$result]);
		}
		
	}
	
}



//������
elseif ($_U['query_type'] == "add_borrow" ){
       $var = array("user_id","borrow_period","borrow_style","account","borrow_type","borrow_use","b_enterprise","b_regist","b_legal","b_card","b_tel","b_phone","b_agent","b_address");
     $data = post_var($var);
	   if($data['user_id']=='' || $data['user_id']=='0')
	    {
	 	$msg = array('���ȵ�¼��',"","/index.php?user&q=login");
		}/*elseif($data['account']=='' || $data['account']==0 || $data['account']%100 !=0){
		$msg = array('�������100�ı�����',"","/index.php");
		}*/else{
		
		$result_users = usersClass::GetUsersInfo(array("user_id"=>$data['user_id']));
		   if($result_users['phone_status']==1){
		   $result = borrowClass::Add_shenqing($data);
		   }else{
		   $msg = array('���Ƚ����ֻ���֤',"","/?user&q=code/approve/phone_status");
		   }
		}
		if ($result>0){
			$msg = array('����ɹ�����ȴ��ͷ���Ա����ȡ����ϵ��',"","/?user&q=code/borrow/shenqing");
		}else{
			$msg = array('��������ʧ�ܣ�����ͷ���ϵ');
		}

}

//����ĳ���

elseif ($_U['query_type'] == "cancel"){
	$data['borrow_nid'] = $_REQUEST['borrow_nid'];
	$data['user_id'] = $_G['user_id'];
	$result = borrowClass::GetOne($data);//��ȡ����ĵ�����Ϣ
	
	//��������ȴ���70
	if ($result['borrow_account_scale']==100){
		$msg = array($MsgInfo["borrow_scale100_not_cancel"]);
	}else{
		$result = borrowClass::Cancel($data);
		if ($result>0){
			$msg = array($MsgInfo["borrow_cancel_success"],"","index.php?user&q=code/borrow/publish");
		}elseif (IsExiest($MsgInfo[$result])!=""){
			$msg = array($MsgInfo[$result]);
		}else{
			$msg = array("����ʧ�ܣ��������Ա��ϵ");
		}	
	}	
}


//����ĳ���

elseif ($_U['query_type'] == "user_cancel"){
	echo "<br>���������볷�������ɣ�<br><form method='post' action='index.php?user&q=code/borrow/cancel&id=".$_REQUEST['borrow_nid']."'>";
	echo "<br><textarea cols='35' rows='4' name='cancel_remark'></textarea><br><br>";
	echo "<input type='submit' value='���볷��'><input type=hidden name='nid' ></form>";
	exit;
	
}

//����ĵ渶

elseif ($_U['query_type'] == "vouch_dianfu"){
	$data['id'] = $_REQUEST['id'];
	$data['user_id'] = $_G['user_id'];
	$result = borrowClass::VouchDianfu($data);
	if ($result===true){
		$msg = array($MsgInfo["vouch_late_repay"],"","index.php?user&q=code/borrow/tender_vouch_late");
	}else{
		$msg = array($MsgInfo[$result]);
	}
}
//ɾ��
elseif ($_U['query_type'] == "del"){
	$data['id'] = $_REQUEST['id'];
	$data['user_id'] = $_G['user_id'];
	$data['status'] = -1;
	$result = borrowClass::Delete($data);
	if ($result==false){
		$msg = array($result);
	}else{
		$msg = array("�б�ɾ���ɹ�!","","?user&q=code/borrow/unpublish");
	}
}

//�û�Ͷ��
elseif ($_U['query_type'] == "tender"){
	if ($msg=check_valicode()!=""){
		$msg = array("��֤�벻��ȷ");
	}else{
		include_once(ROOT_PATH."modules/account/account.class.php");
		
	       $borrow_result = borrowClass::GetOne(array("borrow_nid"=>$_POST['borrow_nid']));
		
		if ($_G['user_result']['islock']==1){
			$msg = array("���˺��Ѿ������������ܽ���Ͷ�꣬�������Ա��ϵ");
		}elseif (md5($_POST['paypassword'])!=$_G['user_result']['paypassword']){
			$msg = array("֧���������벻��ȷ");
		}elseif ($_POST['dxbPWD']!=$borrow_result['pwd'] && $borrow_result['isDXB']==1){
			$msg = array("��������벻��ȷ");
		}elseif ($_POST['money']%50!=0 || $_POST['money']==0 || $_POST['money']==''){ 
			$msg = array("Ͷ�ʽ�������50�ı�����");
			}elseif ($_POST['Second_limit_money']<$_POST['money'] &&  $_POST['Second_limit_money']!=0 && time()-$borrow_result['verify_time']<=1800){ //&& $_POST['is_Seconds']==1
			$msg = array("��Ͷ�ʽ��������������ȣ�");
			}else{
			//��������ӽ�ȥ
			$_tender['borrow_nid'] = $_POST['borrow_nid'];
			$_tender['user_id'] = $_G['user_id'];
			$_tender['account'] = $_POST['money'];
			$_tender['contents'] = $_POST['contents'];
			
			if($borrow_result['is_flow']==1){
			$_tender['flow_count'] = $_POST['flow_count'];
			}
			
			$_tender['status'] = 0;
			$_tender['nid'] = "tender_".$data['user_id'].time().rand(10,99);//������
			$result = borrowClass::AddTender($_tender);
			
			if($borrow_result['is_flow']==1 && $result>0){
				$sql = "update `{borrow_tender}` set status=1 where id={$result}";
				$mysql->db_query($sql);
				
				$sql = "select * from `{borrow_tender}` where id={$result}";
				$tender_result = $mysql->db_fetch_array($sql);
				
				$tender_userid=$_tender['user_id'];
				$borrow_nid=$_tender['borrow_nid'];
				$tender_id=$result;
				$tender_account =$tender_result['account'];
				$flow_count=$_tender['flow_count'];
				$borrow_userid=$borrow_result['user_id'];
				$account=$tender_result['account'];
				$borrow_url = "<a href=/invest/a{$borrow_result['borrow_nid']}.html target=_blank>{$borrow_result['name']}</a>";
				
				
					

				
				//���Ͷ�ʵ��տ��¼
				$_equal["account"] = $tender_account;
				$_equal["period"] = $borrow_result["borrow_period"];
				$_equal["apr"] = $borrow_result["borrow_apr"];
				$_equal["style"] = 2;
				$_equal["type"] = "";
				$equal_result = EqualInterest($_equal);
				
				foreach ($equal_result as $period_key => $value){
					$repay_month_account = $value['account_all'];
					
									$sql = "select 1 from `{borrow_repay}` where user_id='{$borrow_userid}' and repay_period='0' and borrow_nid='{$borrow_nid}'";
				$result = $mysql->db_fetch_array($sql);
				
				if ($result==false){
					$sql = "insert into `{borrow_repay}` set `addtime` = '".time()."',";
					$sql .= "`addip` = '".ip_address()."',user_id='{$borrow_userid}',status=1,`borrow_nid`='{$borrow_nid}',`repay_period`='0',";
					$sql .= "`repay_time`='{$value['repay_time']}',`repay_account`='{$value['account_all']}',";
					$sql .= "`repay_interest`='{$value['account_interest']}',`repay_capital`='{$value['account_capital']}'";
					$mysql ->db_query($sql);
				}else{
					$sql = "update `{borrow_repay}` set `addtime` = '".time()."',";
					$sql .= "`addip` = '".ip_address()."',user_id='{$borrow_userid}',status=1,`borrow_nid`='{$borrow_nid}',`repay_period`='0',";
					$sql .= "`repay_time`='{$value['repay_time']}',`repay_account`=`repay_account`+'{$value['account_all']}',";
					$sql .= "`repay_interest`=`repay_interest`+'{$value['account_interest']}',`repay_capital`=`repay_capital`+'{$value['account_capital']}'";
					$sql .= " where user_id='{$borrow_userid}' and repay_period='0' and borrow_nid='{$borrow_nid}'";
					$mysql ->db_query($sql);
				}
					
				//��ֹ�ظ���ӻ�����Ϣ
					$sql = "select 1 from `{borrow_recover}` where user_id='{$tender_userid}' and borrow_nid='{$borrow_nid}' and recover_period='$period_key' and tender_id='{$tender_id}'";
					$result = $mysql->db_fetch_array($sql);
					if ($result==false){
						
						$sql = "insert into `{borrow_recover}` set `addtime` = '".time()."',";
						$sql .= "`addip` = '".ip_address()."',user_id='{$tender_userid}',status=1,`borrow_nid`='{$borrow_nid}',`borrow_userid`='{$borrow_userid}',`tender_id`='{$tender_id}',`recover_period`='{$period_key}',";
						$sql .= "`recover_time`='{$value['repay_time']}',`recover_account`='{$value['account_all']}',";
						$sql .= "`recover_interest`='{$value['account_interest']}',`recover_capital`='{$value['account_capital']}'";
						$mysql ->db_query($sql);
						
					}else{
						$sql = "update `{borrow_recover}` set `addtime` = '".time()."',";
						$sql .= "`addip` = '".ip_address()."',user_id='{$tender_userid}',status=1,`borrow_nid`='{$borrow_nid}',`borrow_userid`='{$borrow_userid}',`tender_id`='{$tender_id}',`recover_period`='{$period_key}',";
						$sql .= "`recover_time`='{$value['repay_time']}',`recover_account`='{$value['account_all']}',";
						$sql .= "`recover_interest`='{$value['account_interest']}',`recover_capital`='{$value['account_capital']}'";
						$sql .= " where user_id='{$tender_userid}' and recover_period='{$period_key}' and borrow_nid='{$borrow_nid}' and tender_id='{$tender_id}'";
						$mysql ->db_query($sql);
					}
					
					
				}
				
				$recover_times = count($equal_result);
				//���岽,����Ͷ�ʱ����Ϣ
				$_equal["type"] = "all";
				$equal_result = EqualInterest($_equal);
				$recover_all = $equal_result['account_total'];
				$recover_interest_all = $equal_result['interest_total'];
				$recover_capital_all = $equal_result['capital_total'];
				$sql = "update `{borrow_tender}` set recover_account_all='{$equal_result['account_total']}',recover_account_interest='{$equal_result['interest_total']}',recover_account_wait='{$equal_result['account_total']}',recover_account_interest_wait='{$equal_result['interest_total']}',recover_account_capital_wait='{$equal_result['capital_total']}'  where id='{$tender_id}'";
				$mysql->db_query($sql);
				
					$sql = "update `{borrow}` set repay_account_all=repay_account_all+'{$equal_result['account_total']}',repay_account_interest=repay_account_interest+'{$equal_result['interest_total']}',repay_account_capital=repay_account_capital+'{$equal_result['capital_total']}',repay_account_wait=repay_account_wait+'{$equal_result['account_total']}',repay_account_interest_wait=repay_account_interest_wait+'{$equal_result['interest_total']}',repay_account_capital_wait=repay_account_capital_wait+'{$equal_result['capital_total']}',flow_money=flow_money+'{$tender_account}',flow_count=flow_count+'{$flow_count}' where borrow_nid='{$borrow_nid}'";
			$mysql->db_query($sql);
				
				
							//������,�۳�Ͷ���˵��ʽ�
				$log_info["user_id"] = $tender_userid;//�����û�id
				$log_info["nid"] = "tender_success_".$borrow_nid.$tender_userid.$tender_id.$period_key;//������
				$log_info["money"] = $tender_account;//�������
				$log_info["income"] = 0;//����
				$log_info["expend"] = $tender_account;//֧��
				$log_info["balance_cash"] = 0;//�����ֽ��
				$log_info["balance_frost"] = 0;//�������ֽ��
				$log_info["frost"] = -$tender_account;//������
				$log_info["await"] = 0;//���ս��
				$log_info["type"] = "tender_success";//����
				$log_info["to_userid"] = $borrow_userid;//����˭
				$log_info["remark"] = "Ͷ��[{$borrow_url}]�ɹ�Ͷ�ʽ��۳�";
				accountClass::AddLog($log_info);
				
				//���߲�,��Ӵ��յĽ��
				$log_info["user_id"] = $tender_userid;//�����û�id
				$log_info["nid"] = "tender_success_frost_".$borrow_nid.$tender_userid.$tender_id.$period_key;//������
				$log_info["money"] = $recover_all;//�������
				$log_info["income"] = 0;//����
				$log_info["expend"] = 0;//֧��
				$log_info["balance_cash"] = 0;//�����ֽ��
				$log_info["balance_frost"] = 0;//�������ֽ��
				$log_info["frost"] = 0;//������
				$log_info["await"] = $recover_all;//���ս��
				$log_info["type"] = "tender_success_frost";//����
				$log_info["to_userid"] = $borrow_userid;//����˭
				$log_info["remark"] =  "Ͷ��[{$borrow_url}]�ɹ����ս������";
				accountClass::AddLog($log_info);
				

				//�����û�������¼
				$user_log["user_id"] = $tender_userid;
				$user_log["code"] = "tender";
				$user_log["type"] = "tender_success";
				$user_log["operating"] = "tender";
				$user_log["article_id"] = $tender_userid;
				$user_log["result"] = 1;
				$user_log["content"] = "Ͷ����ת�꣺[{$borrow_url}]�ɹ�";
				usersClass::AddUsersLog($user_log);	
				
				//��������ý��������б�ɹ�������ʧ��Ҳ����
		     if ($borrow_result['award_status']!=0){
		          //Ͷ�꽱���۳������ӡ�
					if ($borrow_result['award_status']==1){
						$money = round(($tender_account/$borrow_result['account'])*$borrow_result['award_account'],2);
					}elseif ($borrow_result['award_status']==2){
						$money = round((($borrow_result['award_scale']/100)*$tender_account),2);
					}
					
				
					$log_info["user_id"] = $tender_userid;//�����û�id
					$log_info["nid"] = "tender_award_add_".$tender_userid."_".$tender_id.$borrow_nid;//������
					$log_info["money"] = $money;//�������
					$log_info["income"] = $money;//����
					$log_info["expend"] = 0;//֧��
					$log_info["balance_cash"] = $money;//�����ֽ��
					$log_info["balance_frost"] = 0;//�������ֽ��
					$log_info["frost"] = 0;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "tender_award_add";//����
					$log_info["to_userid"] = 0;//����˭
					$log_info["remark"] =  "���[{$borrow_url}]�Ľ���";
					accountClass::AddLog($log_info);
		      }
				
				//����ͳ����Ϣ
				borrowClass::UpdateBorrowCount(array("user_id"=>$tender_userid,"tender_times"=>1,"tender_account"=>$tender_account,"tender_success_times"=>1,"tender_success_account"=>$tender_account,"tender_recover_account"=>$recover_all,"tender_recover_wait"=>$recover_all,"tender_capital_account"=>$recover_capital_all,"tender_capital_wait"=>$recover_capital_all,"tender_interest_account"=>$recover_interest_all,"tender_interest_wait"=>$recover_interest_all,"tender_recover_times"=>$recover_times,"tender_recover_times_wait"=>$recover_times));
				
				
				

				
			}
			if($borrow_result['is_flow']==1){
			
			$url="success&type=wait";
			}else{
			$url="gettender";
			}
			if ($result>0){
				$msg = array("Ͷ��ɹ�","","/index.php?user&q=code/borrow/".$url);
			}elseif (IsExiest($MsgInfo[$result])!=""){
				$msg = array($MsgInfo[$result],"","/index.php?user&q=code/borrow/".$url);
			}else{
				$msg = array($result,"","/index.php?user&q=code/borrow/".$url);
			}	
		}
	}
}



//������Ͷ��
elseif ($_U['query_type'] == "vouch"){
	$msg = "";
	if ($_SESSION['valicode']!=$_POST['valicode']){
		$msg = array("��֤�����");
	}else{
		$borrow_result = borrowClass::GetOne(array("borrow_nid"=>$_POST['borrow_nid']));//��ȡ����ĵ�����Ϣ
		$vouch_account = $_POST['money'];
		if ($borrow_result['vouch_account_wait']<$vouch_account){
			$account_money = $borrow_result['vouch_account_wait'];
		}else{
			$account_money = $vouch_account;
		}
		if ($vouch_account<0){
			$msg = array("��������ȷ�Ľ��");
		}elseif ($borrow_result["borrow_nid"]!=$_POST['borrow_nid']){
			$msg = array("����������������Ҳ���");
		}elseif ($_G['user_result']['islock']==1){
			$msg = array("���˺��Ѿ������������ܽ��е������������Ա��ϵ");
		}elseif (!is_array($borrow_result)){
			$msg = array($borrow_result);
		}elseif ($borrow_result['vouch_account']==$borrow_result['vouch_account_yes']){
			$msg = array("�˵����굣����������������ٵ���");
		}elseif ($borrow_result['verify_time'] == "" || $borrow_result['status'] != 1){
			$msg = array("�˱���δͨ�����");
		}elseif ($borrow_result['verify_time'] + $borrow_result['borrow_valid_time']>time()){
			$msg = array("�˱��ѹ���");
		}elseif (md5($_POST['paypassword'])!=$_G['user_result']['paypassword']){
			$msg = array("֧���������벻��ȷ");
		}else{
			//��ȡͶ�ʵĵ������
			$amount_result =  borrowClass::GetAmountUsers(array("user_id"=>$_G['user_id']));
			
			if ($amount_result['vouch_tender_use']<$account_money){
				$msg = array("���ĵ�������");
			}else{
				
				//�ж��Ƿ��ǵ�����
				if ($borrow_result['vouch_users']!=""){
					$_vouch_user = explode("|",$borrow_result['vouch_users']);
					if (!in_array($_G['user_result']['username'],$_vouch_user)){
						$msg = array("�˵������Ѿ�ָ���˵����ˣ��㲻�Ǵ˵����ˣ����ܽ��е���");
					}
				}
				if ($msg==""){
					$data['borrow_nid'] = $_POST['borrow_nid'];
					$data['account_vouch'] = $vouch_account;
					$data['account'] = $account_money;
					$data['user_id'] = $_G['user_id'];
					$data['award_scale'] = $borrow_result['vouch_award_scale'];
					$data['award_account'] = round($data['award_scale']*0.01*$account_money,2);
					$data['contents'] = $_POST['contents'];
					$data['status'] = 0;
					$result = borrowClass::AddVouch($data);//��ӵ�����
					if ($result>0){
						$msg = array("�����ɹ�","","/index.php?user&q=code/borrow/tender_vouch");
						$_SESSION['valicode'] = "";
					}else{
						$msg = array($MsgInfo[$result]);
					}
				}
			}
		}
	}
}


//�鿴Ͷ��
elseif ($_U['query_type'] == "repayment_view"){
	$data['borrow_nid'] = $_REQUEST['borrow_nid'];
	if ($data['borrow_nid']==""){
		$msg = array("������������");
	}
	$data['user_id'] = $_G['user_id'];
	$result =  borrowClass::GetOne($data);//��ȡ��ǰ�û������
	if ($result==false){
		$msg = array("���Ĳ�������");
	}else{
		$_U['borrow_result'] = $result;
	}
}

//����
elseif ($_U['query_type'] == "repay"){
	if ($_REQUEST['id']!=""){

		$data['borrow_nid'] = $_REQUEST['borrow_nid'];
		$data['id'] = $_REQUEST['id'];
		$data['user_id'] = $_G['user_id'];
		$result =  borrowClass::BorrowRepay($data);//��ȡ��ǰ�û������
		if ($result>0){
			$msg = array("����ɹ�","","/index.php?user&q=code/borrow/repayment_view&borrow_nid=".$_REQUEST['borrow_nid']);
		}else{
			$msg = array($MsgInfo[$result]);
		}
	}else{
		$data['borrow_nid'] = $_REQUEST['borrow_nid'];
		$data['user_id'] = $_G['user_id'];
		$result =  borrowClass::BorrowAdvanceRepay($data);//��ǰ����
		if ($result>0){
			$msg = array("����ɹ�","","/index.php?user&q=code/borrow/repayment_view&borrow_nid=".$_REQUEST['borrow_nid']);
		}else{
			$msg = array($MsgInfo[$result]);
		}
	}
}
//����
elseif ($_U['query_type'] == "amount"){
	if (isset($_POST['amount_account']) && $_POST['amount_account']>0){
		$var = array("amount_account","content","amount_type","remark");
		$data = post_var($var);
		$data['user_id'] = $_G['user_id'];
		$result = borrowClass::GetAmountApplyOne(array("user_id"=>$data['user_id'],"amount_type"=>$data['amount_type']));
		
		if ($result!=false && $result['addtime']+60*60*24*30 >time() && $result['status']==0){
			$msg = array("���Ѿ��ύ�����룬��ȴ����");
		}elseif ($result!=false && $result['verify_time']+60*60*24*30 >time()){
			$msg = array("��һ���º�������");
		}else{
			$data['status'] = 0;
			$data['oprate'] = "add";
			$result = borrowClass::AddAmountApply($data);
			if ($result>0){
				$msg = array("����ɹ�����ȴ�����Ա���","",$_A['query_url_all']);
			}else{
				$msg = array($MsgInfo[$result]);
			}
		}
	}
	
	$result =  borrowClass::GetBorrowVip(array("user_id"=>$_G['user_id']));
}
elseif ($_U['query_type'] == "auto_new"){
	if ($_REQUEST['id']!=""){
		$data['user_id'] = $_G['user_id'];
		$data['id'] = $_REQUEST['id'];
		$_U['auto_result'] = borrowClass::GetAutoOne($data);
	}

}
//�Զ�Ͷ�����
elseif ($_U['query_type'] == "auto_add"){
	$var = array("status","tender_type","tender_account","tender_scale","order","account_min","first_date","last_date","account_min_status","date_status","account_use_status","account_use","video_status","realname_status","phone_status","my_friend","not_black","late_status","late_times","dianfu_status","dianfu_times","black_status","black_user","black_times","not_late_black","borrow_credit_status","borrow_credit_first","borrow_credit_last","tender_credit_status","tender_credit_first","tender_credit_last","user_rank","first_credit","last_credit","webpay_statis","webpay_times","borrow_style","timelimit_status","timelimit_month_first","timelimit_month_last","timelimit_day_first","timelimit_day_last","apr_status","apr_first","apr_last","award_status","award_first","award_last","vouch_status","tuijian_status");
	$data = post_var($var);
	$data['user_id'] = $_G['user_id'];
	if ($data['tender_type']==2 && ($data['tender_scale']<1 || $data['tender_scale']>20)){
		$msg = array("������Ͷ���������С��1%����20%");
	}elseif ($data['tender_account']%100!=0){
	$msg = array("Ͷ���������100�ı�����");
	}else{
		if (IsExiest($_POST['id']!="")){
			$data['id'] = $_POST['id'];
			$result = borrowClass::UpdateAuto($data);
			$msg = array("�Զ�Ͷ����Ϣ�޸ĳɹ�","","/index.php?user&q=code/borrow/auto");
		}else{
			$result = autoClass::AddAuto($data);
			if ($result == -2){
				$msg = array("�����ֻ�ܷ��������Զ�Ͷ����Ϣ");
			}elseif ($result==-1){
				$msg = array("��Ĳ��������벻Ҫ�Ҳ���");
			}else{
				$msg = array("�Զ�Ͷ����Ϣ��ӳɹ�","","/index.php?user&q=code/borrow/auto");
				
			}
		}
	}
}

//�Զ�Ͷ��ɾ��
elseif ($_U['query_type'] == "auto_del"){
	
	$data['user_id'] = $_G['user_id'];
	$data["id"] = $_REQUEST['id'];
	$result = borrowClass::DelAuto($data);
	if ($result!=1){
		$msg = array("��Ĳ��������벻Ҫ�Ҳ���");
	}else{
		$msg = array("�Զ�Ͷ����Ϣɾ���ɹ�","","/index.php?user&q=code/borrow/auto");
		
	}
}


//����ע���
elseif ($_U['query_type'] == "add_care"){
	
	$data['user_id'] = $_G['user_id'];
	$data["article_id"] = $_REQUEST['article_id'];
	$data["code"] = $_REQUEST['code'];
	$result = usersClass::AddCare($data);
	if ($result == -2){
		$msg = array("���Ѿ���ע�˴˱꣬�����ظ�����");
	}elseif ($result==-1){
		$msg = array("��Ĳ��������벻Ҫ�Ҳ���");
	}else{
		$msg = array("�����ע�ɹ�","","/watchlist/index.html");
		
	}
}

//���������
elseif ($_U['query_type'] == "add_black"){
	
	$data['user_id'] = $_G['user_id'];
	$data["blackuser"] = $_REQUEST['user_id'];
	$data["code"] = borrow;
	$result = usersClass::AddBlack($data);
	if ($result == -2){
		$msg = array("���Ѿ���������˺������������ظ�����");
	}elseif ($result==-1){
		$msg = array("��Ĳ��������벻Ҫ�Ҳ���");
	}else{
		$msg = array("����������ɹ�","","/watchlist/index.html");
		
	}
}

//����עɾ��
elseif ($_U['query_type'] == "del_care"){
	
	$data['user_id'] = $_G['user_id'];
	$data["article_id"] = $_REQUEST['article_id'];
	$data["code"] ="borrow";
	$result = userClass::DelCare($data);
	if ($result!=1){
		$msg = array("��Ĳ��������벻Ҫ�Ҳ���");
	}else{
		$msg = array("��ע�Ľ��ɾ���ɹ�","","/index.php?user&q=code/borrow/care");
		
	}
}


//����עɾ��
elseif ($_U['query_type'] == "tender_comment"){
	if ($_REQUEST['id']!=""){
		require_once(ROOT_PATH."modules/comment/comment.class.php");
		if ($_POST['reply_remark']==""){
			$_comment["code"] = "borrow";
			$_comment["id"] = $_REQUEST["id"];
			$_comment["article_userid"] = $_G["user_id"];
			$_U['comment_result'] = commentClass::GetOne($_comment);
			
			if ($_U['comment_result']=="") {
				$msg = array("�벻Ҫ�Ҳ���");
			}
		}else{
			if ($_G["user_id"]!=$_POST["article_userid"]){
				$msg = array("�벻Ҫ�Ҳ���");
			}else{
				$_comment["id"] = $_REQUEST["id"];
				$_comment["code"] = "borrow";
				$_comment["reply_userid"] = $_G["user_id"];
				$_comment["article_userid"] = $_POST["article_userid"];
				$_comment["reply_remark"] = $_POST['reply_remark'];
				commentClass::ReplyComment($_comment);
				$msg = array("�ظ��ɹ�","","/?user&q=code/borrow/tender_comment");
			}
		}
	}
}


//������վ�Ľ��
elseif ($_U['query_type'] == "otherloan_new"){
	if ($_REQUEST['id']!=""){
		if ($_POST['agency']!=""){
			$var = array("agency","username","url","amount_credit","amount_vouch","repay_nouse","repay_month","remark");
			$data = post_var($var);
			$data["user_id"] = $_G["user_id"];
			$data["id"] = $_REQUEST["id"];
			if ($data["agency"]==""){
				$msg = array("��֯�������Ʋ���Ϊ��","","");
			}else{
				$result = borrowClass::UpdateOtherloan($data);
				if ($result===true){
					$msg = array("�޸ĳɹ�","","/?user&q=code/borrow/otherloan");
				}else{
					$msg = array("�޸�ʧ��","","/?user&q=code/borrow/otherloan");
				
				}
			}
		}else{
			$data["user_id"] = $_G["user_id"];
			$data["id"] = $_REQUEST["id"];
			$_U["otherloan_result"] = borrowClass::GetOtherloanOne($data);
			if ($_U["otherloan_result"]==""){
				$msg = array("�벻Ҫ�Ҳ���");
			}
		
		}
	}else{
		if ($_POST['agency']!=""){
			$var = array("agency","username","url","amount_credit","amount_vouch","repay_nouse","repay_month","remark");
			$data = post_var($var);
			$data["user_id"] = $_G["user_id"];
			if ($data["agency"]==""){
				$msg = array("��֯�������Ʋ���Ϊ��","","");
			}else{
				$result = borrowClass::AddOtherloan($data);
				if ($result===true){
					$msg = array("��ӳɹ�","","/?user&q=code/borrow/otherloan");
				}else{
					$msg = array("���ʧ��","","/?user&q=code/borrow/otherloan");
				
				}
			}
		}
	}
}

//�������ɾ��
elseif ($_U['query_type'] == "otherloan_del"){
	
	$data['user_id'] = $_G['user_id'];
	$data["id"] = $_REQUEST['id'];
	$result = borrowClass::DelOtherloan($data);
	if ($result!=1){
		$msg = array("��Ĳ��������벻Ҫ�Ҳ���");
	}else{
		$msg = array("ɾ���ɹ�","","/index.php?user&q=code/borrow/otherloan");
		
	}
}
elseif ($_U['query_type'] == "raise"){

	if ($_POST['buy_id']!=""){
	if ($_POST['paypassword']!=""){
		$data['user_id'] = $_G['user_id'];
		$data['id'] = $_REQUEST['buy_id'];
		$data['paypassword'] = $_POST['paypassword'];
		$data['message'] = $_POST['message'];
		$data['account'] = intval($_POST['account']);
		$result = borrowClass::BuyRaise($data);
		if ($result>0){
			$msg = array($MsgInfo["borrow_raise_buy_success"],"","/?user&q=code/borrow/zhongchou");
		}elseif (IsExiest($MsgInfo[$result])!=""){
			$msg = array($MsgInfo[$result]);
		}else{
			$msg = array("����ʧ�ܣ��������Ա��ϵ");
		}	
	 }else
	 {
	 $msg = array("֧�����벻��Ϊ��!");
	 }
   }

   if ($msg == ""){
	$temlate_dir = "themes/{$_G['system']['con_template']}_member";
	$magic->template_dir = $temlate_dir;
	$template = "borrow_raise.html";
   }
}
//�������ɾ��
elseif ($_U['query_type'] == "change"){
	require_once('borrow.change.inc.php');
}
if ($template==""){
	$template = "user_borrow.html";
}
?>