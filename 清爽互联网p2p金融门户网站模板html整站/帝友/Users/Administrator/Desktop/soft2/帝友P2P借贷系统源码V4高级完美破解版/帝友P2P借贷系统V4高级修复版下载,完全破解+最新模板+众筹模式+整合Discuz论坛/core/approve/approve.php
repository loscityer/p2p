<?php
/******************************
 * $File: approve.php
 * $Description: ��֤��̨�����ļ�
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

require_once("approve.class.php");


$_A['list_purview']["approve"]["name"] = "��֤����";
$_A['list_purview']["approve"]["result"]["approv_realname"] = array("name"=>"ʵ����֤","url"=>"code/approve/realname");
//$_A['list_purview']["approve"]["result"]["approv_edu"] = array("name"=>"ѧ����֤","url"=>"code/approve/edu");
$_A['list_purview']["approve"]["result"]["approv_sms"] = array("name"=>"�ֻ���֤","url"=>"code/approve/sms");
$_A['list_purview']["approve"]["result"]["approv_video"] = array("name"=>"��Ƶ��֤","url"=>"code/approve/video");
$_A['list_purview']["approve"]["result"]["approv_flow"] = array("name"=>"��ת��֤","url"=>"code/approve/flow");
// <!--��ת�� 2-->��ת��֤
/**
 * ʵ����֤
**/

if ($_A['query_type'] == "realname" ){
	if ($_POST['type']=="user_id"){
		$var = array("username","user_id","email");
		$data = post_var($var);
		$data["limit"] = "all";
		$result = approveClass::GetUserid($data);
		if ($result>0){
			echo "<script>location.href='{$_A['query_url_all']}&user_id={$result}'</script>";
		}else{
			$msg = array($MsgInfo[$result],"",$_A['query_url_all']);
		}
	}
	
	
	elseif (isset($_POST['realname'])){
		$msg = check_valicode();
		if ($msg==""){
			$var = array("realname","card_id","user_id","sex");
			$data = post_var($var);
			$_G['upimg']['code'] = "approve";
			$_G['upimg']['type'] = "realname";
			$_G['upimg']['user_id'] = $data["user_id"];
			$_G['upimg']['article_id'] = $data["user_id"];
			
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
		
			$result = approveClass::UpdateRealname($data);
			if ($result>0){
				$msg = array($MsgInfo["approve_realname_update_success"],"",$_A['query_url_all']);
			}else{
				$msg = array($MsgInfo[$result]);
			}
			$admin_log["operating"] = "update";
			
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "approve";
			$admin_log["type"] = "realname";
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
		}
	}
	
	
	elseif ($_REQUEST['user_id']!=""){
		$data["user_id"] = $_REQUEST['user_id'];
		$result = approveClass::GetRealnameOne($data);
		if (is_array($result)){
			$_A["approve_result"] = $result;
		}else{
			$msg = array($MsgInfo[$result],"",$_A['query_url_all']);
		}
	}
	
	elseif($_REQUEST['examine']!=""){
		if ($_POST['status']!=""){
			$msg = check_valicode();
			if ($msg==""){
				$var = array("verify_remark","status");
				$data = post_var($var);
				$data['user_id'] = $_REQUEST['examine'];
				$data['verify_userid'] = $_G['user_id'];
				$result = approveClass::CheckRealname($data);
				
				if ($result>0){
					$msg = array("�����ɹ�","",$_A['query_url_all']);
				}else{
					$msg = array($MsgInfo[$result]);
				}
				//�������Ա������¼
				$admin_log["user_id"] = $_G['user_id'];
				$admin_log["code"] = "approve";
				$admin_log["type"] = "realname";
				$admin_log["operating"] = "check";
				$admin_log["article_id"] = $result>0?$result:0;
				$admin_log["result"] = $result>0?1:0;
				$admin_log["content"] =  $msg[0];
				$admin_log["data"] =  $data;
				usersClass::AddAdminLog($admin_log);
			}
		}else{
			$data["user_id"] = $_REQUEST['examine'];
			$result = approveClass::GetRealnameOne($data);
			if (is_array($result)){
				$_A["approve_result"] = $result;
			}else{
				$msg = array($MsgInfo[$result],"",$_A['query_url_all']);
			}
		}
	}
	
	elseif($_REQUEST['id5']!=""){
		if ($_POST['verify_remark']!=""){
			$msg = check_valicode();
			if ($msg==""){
			
				$data['verify_id5_remark'] =$_POST['verify_remark'];
				$data['user_id'] = $_REQUEST['id5'];
				$data['verify_id5_userid'] = $_G['user_id'];
				if ($_G['system']['con_id5_status']==0){
					$result = "approve_realname_id5_close";
				}else{
					$result = approveClass::CheckRealnameId5($data);
				}
				if ($result>0){
					usersClass::UpdateUsersInfo(array("user_id"=>$data['user_id'],"realname_status"=>1));
					$msg = array("�����ɹ�","",$_A['query_url_all']);
				}else{
					$msg = array($MsgInfo[$result]);
				}
				//�������Ա������¼
				$admin_log["user_id"] = $_G['user_id'];
				$admin_log["code"] = "approve";
				$admin_log["type"] = "realname";
				$admin_log["operating"] = "checkid5";
				$admin_log["article_id"] = $result>0?$result:0;
				$admin_log["result"] = $result>0?1:0;
				$admin_log["content"] =  $msg[0];
				$admin_log["data"] =  $data;
				usersClass::AddAdminLog($admin_log);
			}
		}		
	}
}


/**
 * id5����
**/



elseif ($_A['query_type'] == "realname_id5set"){
	
	
}





/**
 * �ֻ�����
**/

elseif ($_A['query_type'] == "sms"  ){
	if (isset($_POST['phone'])){
		$msg = check_valicode();
		if ($msg==""){
			$var = array("username","phone");
			$data = post_var($var);
			if ($_POST['id']!=""){
				$data['id'] = $_POST['id'];
				$result = approveClass::UpdateSms($data);
				if ($result>0){
					$msg = array($MsgInfo["approve_sms_update_success"],"",$_A['query_url_all']);
				}else{
					$msg = array($MsgInfo[$result],"",$_A['query_url_all']);
				}
				$admin_log["operating"] = "update";
			}else{
				$result = approveClass::AddSms($data);
				if ($result>0){
					$msg = array($MsgInfo["approve_sms_add_success"],"",$_A['query_url_all']);
				}else{
					$msg = array($MsgInfo[$result],"",$_A['query_url_all']);
				}
				$admin_log["operating"] = "add";
			}
			
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "approve";
			$admin_log["type"] = "sms";
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
		}
	}elseif ($_REQUEST['edit']!=""){
		$data['id'] = $_REQUEST['edit'];
		$result = approveClass::GetSmsOne($data);
		if (is_array($result)){
			$_A["approve_result"] = $result;
		}else{
			$msg = array($MsgInfo[$result]);
		}
	
	}elseif($_REQUEST['examine']!=""){
		if ($_POST['status']!=""){
			$var = array("verify_remark","status","credit");
			$data = post_var($var);
			$data['id'] = $_REQUEST['examine'];
			$data['verify_userid'] = $_G['user_id'];
			$result = approveClass::CheckSms($data);
			
			if ($result>0){
				$msg = array($MsgInfo["approve_sms_check_success"],"",$_A['query_url_all']);
			}else{
				$msg = array($MsgInfo[$result]);
			}
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "approve";
			$admin_log["type"] = "sms";
			$admin_log["operating"] = "check";
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
		}else{
			$data['id'] = $_REQUEST['examine'];
			$result = approveClass::GetSmsOne($data);
			if (is_array($result)){
				$_A["approve_result"] = $result;
			}else{
				$msg = array($MsgInfo[$result]);
			}
		}
	}
}

//���ŷ��ͼ�¼
elseif ($_A['query_type'] == "sms_log"){

	if ($_POST['contents']!=""){
		$msg = check_valicode();
		if ($msg==""){
			$var = array("contents","status","username","phone","user_id1","user_id2");
			$data = post_var($var);
			$data['type'] = "system";
			$result = approveClass::AddSmslogGroup($data);
			
			if ($result>0){
				$msg = array($MsgInfo["approve_sms_send_group_success"],"",$_A['query_url_all']);
			}else{
				$msg = array($MsgInfo[$result]);
			}
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "approve";
			$admin_log["type"] = "sms";
			$admin_log["operating"] = "send_group";
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
		}
	}elseif ($_REQUEST['view']!=""){
		$data['id'] = $_REQUEST['view'];
		$result = approveClass::GetSmslogOne($data);
		if (is_array($result)){
			$_A["approve_result"] = $result;
		}else{
			$msg = array($MsgInfo[$result]);
		}
	}

}

elseif ($_A['query_type'] == "sms_set"){
	//ϵͳ����
	if (isset($_POST['con_sms_status'])){
		$var = array("con_sms_status","con_sms_url","con_sms_text","con_sms_utf_status");
		$data = post_var($var);
		$result = adminClass::UpdateSystem($data);
		$msg = array($MsgInfo["admin_info_success"]);
		//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "system";
		$admin_log["type"] = "sms";
		$admin_log["operating"] = "set";
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  $data;
		usersClass::AddAdminLog($admin_log);
	}
	
}


/**
 * id5��֤�б�
**/

elseif ($_A['query_type'] == "edu" ){
if ($_POST['type']=="user_id"){
		$var = array("username","user_id","email");
		$data = post_var($var);
		$data["limit"] = "all";
		$result = approveClass::GetUserid($data);
		if ($result>0){
			echo "<script>location.href='{$_A['query_url_all']}&user_id={$result}'</script>";
		}else{
			$msg = array($MsgInfo[$result],"",$_A['query_url_all']);
		}
	}
	
	
	elseif (isset($_POST['graduate'])){
		$msg = check_valicode();
		if ($msg==""){
			$var = array("user_id","graduate","speciality","degree","enrol_date","graduate_date");
			$data = post_var($var);
			$_G['upimg']['code'] = "approve";
			$_G['upimg']['type'] = "edu";
			$_G['upimg']['user_id'] = $data["user_id"];
			$_G['upimg']['article_id'] = $data["user_id"];
			
			$_G['upimg']['file'] = "edu_pic";
			$pic_result = $upload->upfile($_G['upimg']);
			if ($pic_result!=false){
				$data["edu_pic"] = $pic_result["upfiles_id"];
			}
			
			$result = approveClass::UpdateEdu($data);
			if ($result>0){
				$msg = array($MsgInfo["approve_edu_update_success"],"",$_A['query_url_all']);
			}else{
				$msg = array($MsgInfo[$result]);
			}
			$admin_log["operating"] = "update";
			
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "approve";
			$admin_log["type"] = "edu";
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
		}
	}
	
	
	elseif ($_REQUEST['user_id']!=""){
		$data["user_id"] = $_REQUEST['user_id'];
		$result = approveClass::GetEduOne($data);
		if (is_array($result)){
			$_A["approve_result"] = $result;
		}else{
			$msg = array($MsgInfo[$result],"",$_A['query_url_all']);
		}
	}
	
	elseif($_REQUEST['examine']!=""){
		if ($_POST['status']!=""){
			$msg = check_valicode();
			if ($msg==""){
				$var = array("verify_remark","status");
				$data = post_var($var);
				$data['user_id'] = $_REQUEST['examine'];
				$data['verify_userid'] = $_G['user_id'];
				$result = approveClass::CheckEdu($data);
				
				if ($result>0){
					$msg = array("�����ɹ�","",$_A['query_url_all']);
				}else{
					$msg = array($MsgInfo[$result]);
				}
				//�������Ա������¼
				$admin_log["user_id"] = $_G['user_id'];
				$admin_log["code"] = "approve";
				$admin_log["type"] = "edu";
				$admin_log["operating"] = "check";
				$admin_log["article_id"] = $result>0?$result:0;
				$admin_log["result"] = $result>0?1:0;
				$admin_log["content"] =  $msg[0];
				$admin_log["data"] =  $data;
				usersClass::AddAdminLog($admin_log);
			}
		}else{
			$data["user_id"] = $_REQUEST['examine'];
			$result = approveClass::GetEduOne($data);
			if (is_array($result)){
				$_A["approve_result"] = $result;
			}else{
				$msg = array($MsgInfo[$result],"",$_A['query_url_all']);
			}
		}
	}
	
	elseif($_REQUEST['id5']!=""){
		if ($_POST['verify_remark']!=""){
			$msg = check_valicode();
			if ($msg==""){
			
				$data['verify_id5_remark'] =$_POST['verify_remark'];
				$data['user_id'] = $_REQUEST['id5'];
				$data['verify_id5_userid'] = $_G['user_id'];
				if ($_G['system']['con_id5_edu_status']==0){
					$result = "approve_edu_id5_close";
				}else{
					$result = approveClass::CheckEduId5($data);
				}
				if ($result>0){
					usersClass::UpdateUsersInfo(array("user_id"=>$data['user_id'],"education_status"=>1));
					$msg = array("�����ɹ�","",$_A['query_url_all']);
				}else{
					$msg = array($MsgInfo[$result]);
				}
				//�������Ա������¼
				$admin_log["user_id"] = $_G['user_id'];
				$admin_log["code"] = "approve";
				$admin_log["type"] = "edu";
				$admin_log["operating"] = "checkid5";
				$admin_log["article_id"] = $result>0?$result:0;
				$admin_log["result"] = $result>0?1:0;
				$admin_log["content"] =  $msg[0];
				$admin_log["data"] =  $data;
				usersClass::AddAdminLog($admin_log);
			}
		}		
	}

}
elseif ($_A['query_type'] == "edu_id5" ){


}
elseif ($_A['query_type'] == "edu_set" ){
//ϵͳ����
	if (isset($_POST['con_id5_edu_status'])){
		$var = array("con_id5_edu_status","con_id5_edu_fee");
		$data = post_var($var);
		$data['code'] = "id5";
		$result = adminClass::UpdateSystem($data);
		$msg = array($MsgInfo["admin_info_success"]);
		//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "system";
		$admin_log["type"] = "approve";
		$admin_log["operating"] = "edu";
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  $data;
		usersClass::AddAdminLog($admin_log);
	}

}


//��ת��֤

elseif ($_A['query_type'] == "flow" ){
	if ($_POST['type']=="user_id"){
		$var = array("username","user_id","email");
		$data = post_var($var);
		$data["limit"] = "all";
		$result = approveClass::GetUserid($data);
		if ($result>0){
			echo "<script>location.href='{$_A['query_url_all']}&user_id={$result}'</script>";
		}else{
			$msg = array($MsgInfo[$result],"",$_A['query_url_all']);
		}
	}
	elseif (isset($_POST['remark'])){
		$msg = check_valicode();
		if ($msg==""){
			$var = array("user_id","remark");
			$data = post_var($var);
			$result = approveClass::UpdateFlow($data);
			if ($result>0){
				$msg = array("�޸ĳɹ�","",$_A['query_url_all']);
			}else{
				$msg = array($MsgInfo[$result]);
			}
			$admin_log["operating"] = "update";
			
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "approve";
			$admin_log["type"] = "flow";
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
		}
	}
	
	
	elseif ($_REQUEST['user_id']!=""){
		$data["user_id"] = $_REQUEST['user_id'];
		$result = approveClass::GetFlowOne($data);
		if (is_array($result)){
			$_A["approve_result"] = $result;
		}else{
			$msg = array("ID����","",$_A['query_url_all']);
		}
	}
	
	elseif($_REQUEST['examine']!=""){
		if ($_POST['status']!=""){
			$msg = check_valicode();
			if ($msg==""){
				$var = array("verify_remark","status");
				$data = post_var($var);
				$data['user_id'] = $_REQUEST['examine'];
				$data['verify_userid'] = $_G['user_id'];
				$result = approveClass::CheckFlow($data);
				
				if ($result>0){
					$msg = array("�����ɹ�","",$_A['query_url_all']);
				}else{
					$msg = array($MsgInfo[$result]);
				}
				//�������Ա������¼
				$admin_log["user_id"] = $_G['user_id'];
				$admin_log["code"] = "approve";
				$admin_log["type"] = "flow";
				$admin_log["operating"] = "check";
				$admin_log["article_id"] = $result>0?$result:0;
				$admin_log["result"] = $result>0?1:0;
				$admin_log["content"] =  $msg[0];
				$admin_log["data"] =  $data;
				usersClass::AddAdminLog($admin_log);
			}
		}else{
			$data["user_id"] = $_REQUEST['examine'];
			$result = approveClass::GetFlowOne($data);
			if (is_array($result)){
				$_A["approve_result"] = $result;
			}else{
				$msg = array($MsgInfo[$result],"",$_A['query_url_all']);
			}
		}
	}
}
/**
 * id5��֤�б�
**/

elseif ($_A['query_type'] == "video" ){
	if ($_POST['type']=="user_id"){
		$var = array("username","user_id","email");
		$data = post_var($var);
		$data["limit"] = "all";
		$result = approveClass::GetUserid($data);
		if ($result>0){
			echo "<script>location.href='{$_A['query_url_all']}&user_id={$result}'</script>";
		}else{
			$msg = array($MsgInfo[$result],"",$_A['query_url_all']);
		}
	}
	
	
	elseif (isset($_POST['remark'])){
		$msg = check_valicode();
		if ($msg==""){
			$var = array("user_id","remark");
			$data = post_var($var);
			$result = approveClass::UpdateVideo($data);
			if ($result>0){
				$msg = array($MsgInfo["approve_video_update_success"],"",$_A['query_url_all']);
			}else{
				$msg = array($MsgInfo[$result]);
			}
			$admin_log["operating"] = "update";
			
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "approve";
			$admin_log["type"] = "video";
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
		}
	}
	
	
	elseif ($_REQUEST['user_id']!=""){
		$data["user_id"] = $_REQUEST['user_id'];
		$result = approveClass::GetVideoOne($data);
		if (is_array($result)){
			$_A["approve_result"] = $result;
		}else{
			$msg = array($MsgInfo[$result],"",$_A['query_url_all']);
		}
	}
	
	elseif($_REQUEST['examine']!=""){
		if ($_POST['status']!=""){
			$msg = check_valicode();
			if ($msg==""){
				$var = array("verify_remark","status");
				$data = post_var($var);
				$data['user_id'] = $_REQUEST['examine'];
				$data['verify_userid'] = $_G['user_id'];
				$result = approveClass::CheckVideo($data);
				
				if ($result>0){
					$msg = array("�����ɹ�","",$_A['query_url_all']);
				}else{
					$msg = array($MsgInfo[$result]);
				}
				//�������Ա������¼
				$admin_log["user_id"] = $_G['user_id'];
				$admin_log["code"] = "approve";
				$admin_log["type"] = "video";
				$admin_log["operating"] = "check";
				$admin_log["article_id"] = $result>0?$result:0;
				$admin_log["result"] = $result>0?1:0;
				$admin_log["content"] =  $msg[0];
				$admin_log["data"] =  $data;
				usersClass::AddAdminLog($admin_log);
			}
		}else{
			$data["user_id"] = $_REQUEST['examine'];
			$result = approveClass::GetVideoOne($data);
			if (is_array($result)){
				$_A["approve_result"] = $result;
			}else{
				$msg = array($MsgInfo[$result],"",$_A['query_url_all']);
			}
		}
	}

}

?>