<?php
/******************************
 * $File: module.php
 * $Description: ģ��������Ϣ
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

check_rank("system_module");//���Ȩ��

if($_A['query_type']=="update"){
	$data['nid'] = $_REQUEST['nid'];
	$result = adminClass::UpdateModuleSystem($data);
	$msg = array("ϵͳģ����³ɹ�","",$_A['query_url']);

}

elseif($_A['query_type']=="install" || $_A['query_type']=="edit"){
	if (IsExiest($_POST['nid'])!=false){
		$var = array("name","nickname","nid","date","status","order","default_field","description","index_tpl","list_tpl","content_tpl","version","author","type");
		$data = post_var($var);
		
		if ($_A['query_type'] == "edit"){
			$result = moduleClass::UpdateModule($data);;
			if ($result>0){
				$msg = array("ģ���޸ĳɹ�","",$_A['query_url']);
			}else{
				$msg = array($MsgInfo[$result],"",$_A['query_url']);
			}
			$admin_log["operating"] = "update";
		}else{
			$data['version_new'] = $data['version'];
			$result = moduleClass::AddModule($data);
			if ($result>0){
				$msg = array("ģ�鰲װ�ɹ�","",$_A['query_url']);
			}else{
				$msg = array($MsgInfo[$result],"",$_A['query_url']);
			}
			$admin_log["operating"] = "add";
		}
		//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "system";
		$admin_log["type"] = "module";
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  $data;
		usersClass::AddAdminLog($admin_log);
	}else{
		$data['nid'] = $_REQUEST['nid'];
		$result = adminClass::GetModule($data);
		
		if (is_array($result)){
			$_A['module_result'] = $result;
		}else{
			$msg = array($MsgInfo[$result]);;
		}
	}

}

elseif($_A['query_type']=="delete"){
	$data['nid'] = $_REQUEST['nid'];
	$result = adminClass::DeleteModule($data);
	if ($result >0 ){
		$msg = array("ϵͳģ����ж��","",$_A['query_url']);
	}else{
		$msg = array($MsgInfo[$result]);;
	}
}

elseif($_A['query_type']=="action"){
	$data['id'] = $_POST['id'];
	$data['order'] = $_POST['order'];
	$data['status'] = $_POST['status'];
	$result = adminClass::ActionModule($data);
	if ($result >0 ){
		$msg = array("�޸ĳɹ�","",$_A['query_url']);
	}else{
		$msg = array($MsgInfo[$result]);;
	}
}
$template = "admin_module.html";
?>