<?php
/******************************
 * $File: approve.inc.php
 * $Description: ��֤�û����Ĺ���
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

require_once("approve.class.php");
require_once(ROOT_PATH."/modules/account/account.class.php");

if ($_U['query_type']=="realname"){
	if (isset($_POST['realname'])){
		$Info=usersClass::GetUsersInfo(array("user_id"=>$_G['user_id']));
		$account=accountClass::GetOne(array("user_id"=>$_G['user_id']));
		
		$type = array("image/jpeg","image/gif","image/pjpeg");
		$type1 = $_FILES["card_pic1"]["type"];
		$type2 = $_FILES["card_pic2"]["type"];
		$fee=isset($_G['system']['con_id5_realname_fee'])?$_G['system']['con_id5_realname_fee']:0;
		$times=isset($_G['system']['con_id5_realname_times'])?$_G['system']['con_id5_realname_times']:0;
		
		if ($account['balance']<$fee && $Info['realname_times']>$times  && $fee!=0){
			$msg = array("��������".$fee."Ԫ�����Ƚ��г�ֵ��");
		}elseif((!in_array($type1, $type) && $type1!='') || (!in_array($type2, $type) && $type2!='')){			
			$msg = array("�ϴ�ͼƬ�ĸ�ʽӦΪjpg.gif");	
		}elseif($_FILES["card_pic1"]["size"]>524288 || $_FILES["card_pic2"]["size"]>524288){			
			$msg = array("ͼƬ��С���ܳ���512KB");
		}else{
		$var = array("realname","sex","card_id");
		$data = post_var($var);
		$data['user_id'] = $_G['user_id'];
		
		$data['status'] = 0;
		
			$_G['upimg']['code'] = "approve";
			$_G['upimg']['type'] = "realname";
			$_G['upimg']['user_id'] = $_G["user_id"];
			$_G['upimg']['article_id'] = $_G["user_id"];
			
			$_G['upimg']['file'] = "card_pic1";
			$pic_result = $upload->upfile($_G['upimg']);
			if ($pic_result!=false){
				$data["card_pic1"] = $pic_result[0]["upfiles_id"];
			}
			
			$_G['upimg']['file'] = "card_pic2";
			$pic_result = $upload->upfile($_G['upimg']);
			if ($pic_result!=false){
				$data["card_pic2"] = $pic_result[0]["upfiles_id"];
			}
			if($msg==""){
			$result = approveClass::UpdateRealname($data);
			if ($result>0){
				if($Info['realname_times']>$times){
					$log_info["user_id"] = $data['user_id'];//�����û�id
					$log_info["nid"] = "realname_fee_".$data['user_id'].time();//������
					$log_info["money"] = $fee;//�������
					$log_info["income"] = 0;//����
					$log_info["expend"] = $log_info["money"];//֧��
					$log_info["balance_cash"] = -$log_info["money"];//�����ֽ��
					$log_info["balance_frost"] =0;//�������ֽ��
					$log_info["frost"] = 0;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "realname_fee";//����
					$log_info["to_userid"] = $data['user_id'];//����˭
					$log_info["remark"] = "ʵ����֤����{$times}�Σ��շ�{$fee}Ԫ";
					$result = accountClass::AddLog($log_info);
				}
				usersClass::UpdateUsersInfo(array("user_id"=>$data['user_id'],"realname_times"=>$Info['realname_times']+1));
				$msg = array("������֤��ӳɹ�����ȴ�����Ա���","",$url);	
			}else{
				$msg = array($MsgInfo[$result]);
			}
			}
		}
	}else{
		$_U['realname_result'] = approveClass::GetRealnameOne(array("user_id"=>$_G['user_id']));
		
	}
}
elseif ($_U['query_type']=="edu_status"){
	if (isset($_POST['graduate']) && $_POST['graduate']!=""){
		$Info=usersClass::GetUsersInfo(array("user_id"=>$_G['user_id']));
		$account=accountClass::GetOne(array("user_id"=>$_G['user_id']));
		$var = array("user_id","graduate","speciality","degree","enrol_date","graduate_date");
			$data = post_var($var);
			$data["user_id"] = $_G['user_id'];
		/*if ($_G['system']['con_id5_edu_status']==1 && $_G['system']['con_id5_status']==1){
			$data['type']="edu";
			$result=id5Class::CheckId5Edu($data);
			if($result==3){
				$msg = array("ѧ����֤�ɹ���","","/borrow_video/index.html");
			}else{
				$msg = array("ѧ����֤ʧ�ܡ�","","/borrow_edu/index.html");
			}
		}else{*/
			$_G['upimg']['code'] = "approve";
			$_G['upimg']['type'] = "edu";
			$_G['upimg']['user_id'] = $data["user_id"];
			$_G['upimg']['article_id'] = $data["user_id"];
			
			$_G['upimg']['file'] = "edu_pic";
			$pic_result = $upload->upfile($_G['upimg']);
			if ($pic_result!=false){
				$data["edu_pic"] = $pic_result[0]["upfiles_id"];
			}
			$result = approveClass::UpdateEdu($data);
			if ($result>0){
				$Info=usersClass::GetUsersInfo(array("user_id"=>$data['user_id']));
				if($Info['edu_times']>0){
					$log_info["user_id"] = $data['user_id'];//�����û�id
					$log_info["nid"] = "edu_fee_".$data['user_id'].time();//������
					$log_info["money"] = 5;//�������
					$log_info["income"] = 0;//����
					$log_info["expend"] = $log_info["money"];//֧��
					$log_info["balance_cash"] = -$log_info["money"];//�����ֽ��
					$log_info["balance_frost"] =0;//�������ֽ��
					$log_info["frost"] = 0;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "edu_fee";//����
					$log_info["to_userid"] = $data['user_id'];//����˭
					$log_info["remark"] = "ѧ����֤����1�Σ��շ�5Ԫ";
					$result = accountClass::AddLog($log_info);
				}
				usersClass::UpdateUsersInfo(array("user_id"=>$data['user_id'],"edu_times"=>$Info['edu_times']+1));
				$msg = array("ѧ����֤��ӳɹ�����ȴ�����Ա���","","/borrow_video/index.html");	
			}else{
				$msg = array($MsgInfo[$result],"","/borrow_edu/index.html");
			}
		//}
	}else{
		$_U['edu_result'] = approveClass::GetEduOne(array("user_id"=>$_G['user_id']));
		
	}
}

	// <!--��ת�� 2-->��ת��֤
	elseif ($_U['query_type'] == "flow_status"){
	
		if (isset($_POST['submit']) && $_POST['submit']!="" ){
			
			$data['user_id'] = $_G['user_id'];
			$data['status'] = 0;
			
			$result = approveClass::UpdateFlow($data);
			if ($result == false){
				$msg = array($result);	
			}else{
				$msg = array("������ת��֤�����ɹ�����ȴ��ͷ���Ա������ϵ","","index.php?user&q=code/approve/flow_status");	
			}
		}else{
		$data['user_id'] = $_G['user_id'];
		$_U['flow_result'] = approveClass::GetFlowOne($data);
	   }
	}
	
elseif ($_U['query_type']=="video_status"){
	if(isset($_POST['submit'])){
		$data['status'] = 0;
		$data['user_id'] = $_G['user_id'];
		$result = approveClass::UpdateVideo($data);
		if ($result==true){
			$msg = array("�ύ����ɹ�","","index.php?user&q=code/approve/video_status");
		}else{
			$msg = array($reuslt);
		}
	}else{
		$data['user_id'] = $_G['user_id'];
		$_U['video_result'] = approveClass::GetVideoOne($data);
	}
}
elseif ($_U['query_type']=="phone_yz"){

if ($_SESSION['smscode_time']+60>time() && $_SESSION['smscode_phone']==$_POST['phone'])
		{
			$msg = array("���1���Ӻ�������");
		}else{
			$data['phone'] = $_POST['phone'];
			$data['user_id'] = $_G['user_id'];
			
				$data['status'] = 1;
				$data['user_id'] = $_G['user_id'];
				$data['type'] = "smstixian";
				$data['code'] = rand(100000,999999);
				$data['contents'] = "��֤��:".$data['code']."�������ڽ������ֲ������벻Ҫ����֤��й¶���κ��ˡ���������Ͷ��";
				$result = approveClass::SendSMS($data);
				$_SESSION['smscode_time'] = time();
				$_SESSION['smscode_othertime'] = $_SESSION['smscode_time']-time();
				$_SESSION['smscode_phone'] = $data['phone'];
		    if ($result>0){
				$msg = array(1);
			}else{
				$msg = array('��֤���ŷ���ʧ�ܣ�����ϵ�ͷ���');
			}
			
		}
		if ($_REQUEST['style']=="ajax"){
			echo $msg[0];
			exit;
		}

		
}
elseif ($_U['query_type']=="phone_status"){

	if(isset($_POST['sms_code'])){
		$data['code'] = $_POST['sms_code'];
		$data['phone'] = $_POST['phone_new'];
		$data['type'] = "smscode";
		$data['user_id'] = $_G['user_id'];
		$result = approveClass::CheckSmsCode($data);
	
		if ($_REQUEST['style']=="ajax"){
				if ($_POST['realname']){
			if ($result>0){
			$sql="update `{users_info}` set `tender_status`=1 where `user_id` = {$data['user_id']}";
			$mysql->db_query($sql);
				$msg = array("��֤�ɹ�","","/tender_finsh/index.html");
				return 	$_G['real_name'] = $realname;
			}elseif ($MsgInfo[$result]!=""){
				$msg = array($MsgInfo[$result],"","/tender_info/index.html");
			}else{
				$msg = array("��֤�����","","/tender_info/index.html");
			}
		   }else{
			if ($result>0){
			$sql="update `{users_info}` set `tender_status`=1 where `user_id` = {$data['user_id']}";
			$mysql->db_query($sql);
				$msg = array("��֤�ɹ�","","/tender_info/index.html");
			}elseif ($MsgInfo[$result]!=""){
				$msg = array($MsgInfo[$result],"","/tender_info/index.html");
			}else{
				$msg = array("��֤�����","","/tender_info/index.html");
			}
		   }
			echo $msg[0];
			exit;
		}else{
				
		if ($_POST['realname']){
			if ($result>0){
			$sql="update `{users_info}` set `tender_status`=1 where `user_id` = {$data['user_id']}";
			$mysql->db_query($sql);
				$msg = array("��֤�ɹ�","","/tender_study/index.html");
			}elseif ($MsgInfo[$result]!=""){
				$msg = array($MsgInfo[$result],"","/tender_study/index.html");
			}else{
				$msg = array("��֤�����","","/tender_study/index.html");
			}
		}else{
			if ($result>0){
			$sql="update `{users_info}` set `tender_status`=1 where `user_id` = {$data['user_id']}";
			$mysql->db_query($sql);
				$msg = array("��֤�ɹ�","","/borrow_phone/index.html");
			}elseif ($MsgInfo[$result]!=""){
				$msg = array($MsgInfo[$result],"","/borrow_phone/index.html");
			}else{
				$msg = array("��֤�����","","/borrow_phone/index.html");
			}
		}
		}
	}elseif(isset($_REQUEST['phone'])){
	

	
		if ($_SESSION['smscode_time']+60>time() && $_SESSION['smscode_phone']==$_POST['phone'])
		{
			$msg = array("���1���Ӻ�������");
		}else{
		
		

			$data['phone'] = $_REQUEST['phone'];
			$data['user_id'] = $_G['user_id'];
			//�������  hummer create 201309082032
		    // $ka=fopen("2.txt","a+");
		    // fwrite($ka,$data['phone']);
		    // fclose($ka);			
			
			$result = approveClass::AddSms($data);
			if ($result>0){
				$data['status'] = 1;
				$data['user_id'] = $_G['user_id'];
				$data['type'] = "smscode";
				$data['code'] = rand(100000,999999);
				$data['contents'] = "�����ֻ���֤��Ϊ:".$data['code']."���벻Ҫ����֤��й¶���κ��ˡ���������Ͷ��";
			
				$result = approveClass::SendSMS($data);
				$_SESSION['smscode_time'] = time();
				$_SESSION['smscode_othertime'] = $_SESSION['smscode_time']-time();
				$_SESSION['smscode_phone'] = $data['phone'];
				if ($_REQUEST['style']=="ajax"){
			    $msg = array(1);
				}
			}else{
				$msg = array($MsgInfo[$result]);
			}
			
		}
		if ($_REQUEST['style']=="ajax"){
			echo $msg[0];
			exit;
		}
	}
	elseif(isset($_REQUEST['new_phone'])){
	
         
	
		if ($_SESSION['smscode_time']+60>time() && $_SESSION['smscode_phone']==$_G['user_info']['phone'])
		{
			$msg = array("���1���Ӻ�������");
		}else{
		
		

			$data['phone'] = $_REQUEST['new_phone'];
			$data['user_id'] = $_G['user_id'];		
	
			
			$result = approveClass::AddSms($data);
			if ($result>0){
				$data['status'] = 1;
				$data['user_id'] = $_G['user_id'];
				$data['type'] = "smscode";
				$data['code'] = rand(100000,999999);
				$data['contents'] = "�������޸���֤�ֻ�����֤��Ϊ:".$data['code']."���벻Ҫ����֤��й¶���κ��ˡ���������Ͷ��";
			    $data['phone'] = $_G['user_info']['phone'];
				$result = approveClass::SendSMS($data);
				$_SESSION['smscode_time'] = time();
				$_SESSION['smscode_othertime'] = $_SESSION['smscode_time']-time();
				$_SESSION['smscode_phone'] = $data['phone'];
		
			    $msg = array(1);
				
			}else{
				$msg = array($MsgInfo[$result]);
			}
			
		}
		
			echo $msg[0];
			exit;
		
	}
	elseif($_REQUEST['style']=="cancel"){
		if ($_SESSION['smscancel_time']+60*2>time())
		{
		
		}else{
			
			$data['status'] = 1;
			$data['user_id'] = $_G['user_id'];
			$data['type'] = "smscancel";
			$data['code'] = rand(100000,999999);
			$data['contents'] = "������֤��Ϊ:".$data['code']."���벻Ҫ����֤��й¶���κ��ˡ���������Ͷ��";
			$result = approveClass::SendSMS($data);
			$_SESSION['smscancel_time'] = time();
		}
	}else{
		$data['user_id'] = $_G['user_id'];
		$_U['phone_result'] = approveClass::GetSmsOne($data);
	}
}


//������֤
elseif ($_U['query_type'] == "email_status"){
	$_U['site_name'] = "������֤";
	if (isset($_POST['email']) && $_POST['email']!="" ){
		$data['user_id'] = $_G['user_id'];
		$data['email'] = $_POST['email'];
	
		$result = usersClass::CheckEmail($data);
	
		if ($result==false){
		
			$result = usersClass::UpdateEmail($data);
			
			if ($result == false){
				$msg = array($result);	
			}else{
				$data['username'] = $_G['user_result']['username'];
				$data['webname'] = $_G['system']['con_webname'];
				$data['title'] = "ע���ʼ�ȷ��";
				$data['msg'] = RegEmailMsg($data);
				$data['type'] = "reg";
				if (isset($_SESSION['sendemail_time']) && $_SESSION['sendemail_time']+60*2>time()){
					$msg = array("��2���Ӻ��ٴ�����","",$url);
				}else{
					$result = usersClass::SendEmail($data);
					if ($result==true) {
						$_SESSION['sendemail_time'] = time();
						$msg = array("������Ϣ�Ѿ����͵��������䣬��ע����ա�","",$url);
					}
					else{
						$msg = array("����ʧ�ܣ��������Ա��ϵ��","",$url);
					}
				}
			}
		}else{
			$msg = array("��������д�������Ѿ�����","",$url);	
		}
	}
}
$template = "user_approve.html";
?>