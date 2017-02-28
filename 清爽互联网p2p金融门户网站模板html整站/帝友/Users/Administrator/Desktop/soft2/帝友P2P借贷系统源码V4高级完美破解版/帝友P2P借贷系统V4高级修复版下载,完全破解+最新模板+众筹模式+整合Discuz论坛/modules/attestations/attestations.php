<?php
/******************************
 * $File: attestations.php
 * $Description: ֤������
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

$_A['list_purview']["attestations"]["name"] = "�������";
/* ����֤���������� hummer modify 201309081320
$_A['list_purview']["attestations"]["result"]["attestations_list"] = array("name"=>"֤����������","url"=>"code/attestations/list");
*/
$_A['list_purview']["attestations"]["result"]["attestations_upload"] = array("name"=>"�������","url"=>"code/attestations/upload");
$_A['list_purview']["attestations"]["result"]["attestations_uploads"] = array("name"=>"�����ϴ�","url"=>"code/attestations/uploads");

require_once("attestations.class.php");


/**
 * �������Ϊ�յĻ�����ʾ���е��ļ��б�
**/
/**
 * ѧ��
**/

if ($_A['query_type'] == "list" ){
	if (isset($_POST['name'])){
			$var = array("name","nid","remark","credit","order","validity");
			$data = post_var($var);
			if ($_POST['id']!=""){
				$data['id'] = $_POST['id'];
				$result = attestationsClass::UpdateAttestationsType($data);
				if ($result>0){
					$msg = array($MsgInfo["attestations_type_update_success"],"",$_A['query_url_all']);
				}else{
					$msg = array($MsgInfo[$result]);
				}
				$admin_log["operating"] = "update";
			}else{
				$result = attestationsClass::AddAttestationsType($data);
				if ($result>0){
					$msg = array($MsgInfo["attestations_type_add_success"],"",$_A['query_url_all']);
				}else{
					$msg = array($MsgInfo[$result]);
				}
				$admin_log["operating"] = "add";
			}
			
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "attestations";
			$admin_log["type"] = "type";
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
	
	}elseif ($_REQUEST['edit']!=""){
		$data['id'] = $_REQUEST['edit'];
		$result = attestationsClass::GetAttestationsTypeOne($data);
		if (is_array($result)){
			$_A["attestations_type_result"] = $result;
		}else{
			$msg = array($MsgInfo[$result]);
		}
	
	}elseif($_REQUEST['del']!=""){
		$data['id'] = $_REQUEST['del'];
		$result = attestationsClass::DelAttestationsType($data);
		if ($result>0){
			$msg = array($MsgInfo["attestations_type_del_success"],"",$_A['query_url_all']);
		}else{
			$msg = array($MsgInfo[$result]);
		}
		
		//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "attestations";
		$admin_log["type"] = "type";
		$admin_log["operating"] = "del";
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  $data;
		usersClass::AddAdminLog($admin_log);
	}
	
}

elseif ($_A['query_type'] == "upload" ){
	$_A["attestations_result"] = "";
	if ($_POST['type']=="user_id"){
		$var = array("username","user_id","email");
		$data = post_var($var);
		$data["limit"] = "all";
		$result = attestationsClass::GetAttestationsUserid($data);
		if ($result>0){
			echo "<script>location.href='{$_A['query_url_all']}&user_id={$result}'</script>";
		}else{
			$msg = array($MsgInfo[$result],"",$_A['query_url_all']);
		}
	}
	
	elseif ($_REQUEST['check']!=""){
		if ($_POST['id']!=""){
			$data['id'] = $_POST['id'];
			$data['credit'] = $_POST['credit'];
			$data['status'] = $_POST['status'];
			$data['type_id'] = $_REQUEST['check'];
			$data['verify_remark'] = $_REQUEST['verify_remark'];
			$data['verify_userid'] = $_G['user_id'];
			$result = attestationsClass::CheckCreditAttestations($data);
			if ($result>0){
				$msg = array($MsgInfo["attestations_upfiles_check_success"]);
			}else{
				$msg = array($MsgInfo[$result]);
			}
			$_data['user_id'] =$_POST['user_id'];
			$_data['type_id'] = $data['type_id'];
			$_data['status'] = $_POST['type_status'];
			$_data['credit'] =  array_sum($data['credit']);
			attestationsClass::ActionAttestationsUser($_data);
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "attestations";
			$admin_log["type"] = "upfiles";
			$admin_log["operating"] = "check";
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
		}else{
			$_A['attestations_credit_all'] = attestationsClass::GetAttestationsCredit(array("user_id"=>$_REQUEST['user_id'],"type_id"=>$_REQUEST['check']));
			$_A['attestations_type_result'] = attestationsClass::GetAttestationsTypeOne(array("id"=>$_REQUEST['check']));
			
		}
	}elseif ($_REQUEST['edit']!=""){
		
		if ($_POST['id']==""){
			$data['id'] = $_REQUEST['edit'];
			$result = attestationsClass::GetAttestationsOne($data);
			if (is_array($result)){
				$_A["attestations_result"] = $result;
			}else{
				$msg = array($MsgInfo[$result]);
			}
		}else{
			$var = array("id","user_id","name","order","contents","upfiles_id","type_id");
			$data = post_var($var);
			$result = attestationsClass::UpdateAttestations($data);
			if ($result>0){
				$msg = array($MsgInfo["attestations_upfiles_update_success"]);
			}else{
				$msg = array($MsgInfo[$result]);
			}
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "attestations";
			$admin_log["type"] = "upfiles";
			$admin_log["operating"] = "update";
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
		}
	}
	elseif ($_POST['user_id']!=""){
		$var = array("user_id","type_id");
		$data = post_var($var);
		$data["order"] = 10;
		$_G['upimg']['file'] = "pic";
		$_G['upimg']['code'] = "attestations";
		$_G['upimg']['type'] = "album";
		$_G['upimg']['user_id'] = $data["user_id"];
		$_G['upimg']['article_id'] = $data["attestations_id"];
		$data["pic_result"] = $upload->upfile($_G['upimg']);
		$result = attestationsClass::AddAttestations($data);
		
		if ($result>0){
			$msg = array($MsgInfo["attestations_upfiles_add_success"],"",$_A['query_url_all']);
		}else{
			$msg = array($MsgInfo[$result]);
		}
		//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "attestations";
		$admin_log["type"] = "upfiles";
		$admin_log["operating"] = "add";
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  $data;
		usersClass::AddAdminLog($admin_log);
	}
	
	elseif ($_REQUEST['del']!=""){
		$data['id'] = $_REQUEST['del'];
		$data['user_id'] = $_REQUEST['user_id'];
		$result = attestationsClass::DelAttestations($data);
		if ($result>0){
			$msg = array($MsgInfo["attestations_upfiles_delete_success"],"",$_A['query_url_all']);
		}else{
			$msg = array($MsgInfo[$result]);
		}
	
	}
	
	elseif($_REQUEST['examine']!=""){
		if ($_POST['status']!=""){
			$var = array("verify_remark","status");
			$data = post_var($var);
			$data['id'] = $_REQUEST['examine'];
			$data['verify_userid'] = $_G['user_id'];
			$result = attestationsClass::CheckAttestations($data);
			
			if ($result>0){
				$msg = array("�����ɹ�","",$_A['query_url_all']);
			}else{
				$msg = array($MsgInfo[$result]);
			}
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "attestations";
			$admin_log["type"] = "attestation";
			$admin_log["operating"] = "check";
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
		}
	}
}

elseif ($_A['query_type'] == "uploads" ){
	
	if ($_POST['type']=="user_id"){
		$var = array("username","user_id","email");
		$data = post_var($var);
		$result = attestationsClass::GetAttestationsUserid($data);
		if ($result>0){
			echo "<script>location.href='{$_A['query_url_all']}&user_id={$result}'</script>";
		}else{
			$msg = array($MsgInfo[$result],"",$_A['query_url_all']);
		}
	}elseif ($_REQUEST['user_id']!=""){
		$data['user_id'] = $_REQUEST['user_id'];
		$_A['user_result'] = usersClass::GetUsers($data);
		if ($_A['user_result']==false){
			$msg = array($MsgInfo["attestations_uploads_user_not_exiest"],"",$_A['query_url_all']);
		}
	}
}
?>