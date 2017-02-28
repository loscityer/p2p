<?
/******************************
 * $File: areas.php
 * $Description: ��������
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

require_once("areas.class.php");

$_A['list_purview']["areas"]["name"] = "��������";
$_A['list_purview']["areas"]["result"]["areas_list"] = array("name"=>"��������","url"=>"code/areas/list");

/**
 * �������Ϊ�յĻ�����ʾ���е��ļ��б�
**/

if ($_A['query_type'] == "list" || $_REQUEST['action'] == "edit" || $_REQUEST['action'] == "new"){
	
	check_rank("areas_list");//���Ȩ��
	
	if (isset($_POST['name']) && $_POST['name']!=""){
		$var = array("name","pid","nid","order","province","city","status","letter");
		$data = post_var($var);
		if ($_REQUEST['action'] == "edit"){
			$data['id'] = $_POST['id'];
			$result = areasClass::Update($data);
		}else{
			$result = areasClass::Add($data);
		}
		if ($result >0){
			if ($_REQUEST['action'] == "edit"){
			$msg = array($MsgInfo["areas_update_success"],"","{$_A['query_url']}/{$_A['query_type']}&id={$_REQUEST['id']}");
			}else{
				if ($_A['query_type']=="area"){
					$msg = array($MsgInfo["areas_add_success"],"","{$_A['query_url']}/{$_A['query_type']}&id={$_REQUEST['new_id']}");
				}else{
					$msg = array($MsgInfo["areas_add_success"],"","{$_A['query_url']}/{$_A['query_type']}&id={$_REQUEST['id']}");
				}
			}
		}else{
			$msg = array($MsgInfo[$result]);
		}
		
		//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "areas";
		$admin_log["type"] = $_A['query_type'];
		$admin_log["operating"] = $_REQUEST['action'];
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  join(",",$data);
		usersClass::AddAdminLog($admin_log);
	}else{
		if ($_REQUEST['action'] == "edit"){
			$data['id'] = $_REQUEST['edit_id'];
			$_A['area_result'] = areasClass::GetOne($data);
		}elseif ($_REQUEST['action'] == "new"){
		
			$data['id'] = $_REQUEST['new_id'];
			$_A['area_results'] = areasClass::GetOne($data);
		}

	}
}


/**
 * ɾ��
**/
elseif ($_REQUEST['action'] == "del"){
	
	check_rank("areas_list");//���Ȩ��
	$data['id'] = $_REQUEST['del_id'];
	$result = areasClass::Delete($data);
	if ($result >0){
		$msg = array($MsgInfo["areas_del_success"],"","{$_A['query_url_all']}&id={$_REQUEST['id']}");
	}else{
		$msg = array($MsgInfo[$result]);
	}
	
	//�������Ա������¼
	$admin_log["user_id"] = $_G['user_id'];
	$admin_log["code"] = "areas";
	$admin_log["type"] = $_A['query_type'];
	$admin_log["operating"] = 'del';
	$admin_log["article_id"] = $result>0?$result:0;
	$admin_log["result"] = $result>0?1:0;
	$admin_log["content"] =  $msg[0];
	$admin_log["data"] =  join(",",$data);
	usersClass::AddAdminLog($admin_log);
}
/**
 * �޸�����
**/
elseif ($_A['query_type'] == "action"){
	
	check_rank("areas_list");//���Ȩ��
	$data = array("id"=>$_POST['id'],"order"=>$_POST['order']);
	$result = areasClass::Action($data);
	if ($result >0){
		$msg = array($MsgInfo["areas_action_success"]);
	}else{
		$msg = array($MsgInfo[$result]);
	}
	
	//�������Ա������¼
	$admin_log["user_id"] = $_G['user_id'];
	$admin_log["code"] = "areas";
	$admin_log["type"] = $_POST['query_type'];
	$admin_log["operating"] = 'action';
	$admin_log["article_id"] = $result>0?$result:0;
	$admin_log["result"] = $result>0?1:0;
	$admin_log["content"] =  $msg[0];
	$admin_log["data"] =  join(",",$data);
	usersClass::AddAdminLog($admin_log);
}


?>