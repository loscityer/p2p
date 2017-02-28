<?php
/******************************
 * $File:site.php
 * $Description: վ�㴦���ļ�
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

/**
 *  1�����е�վ��
**/
if ($_A['query_type'] == "list"){
	check_rank("site_list");//���Ȩ��
	
	if ($_POST['id']!=""){
		$data['id'] = $_POST['id'];
		$data['order'] = $_POST['order'];
		$result = adminClass::ActionSite($data);
		$msg = array("�����ɹ�");
	}
}


/**
 *  2��վ�������Ĳ˵��������������վ��
**/
elseif ($_A['query_type'] == "menu" ){
	check_rank("site_menu");//���Ȩ��
	if (isset($_POST['name'])){
		$msg = check_valicode();
		if ($msg==""){
			$var = array("name","nid","order","checked","contents");
			$data = post_var($var);
			if ($_POST['id']!=""){
				$data['id'] = $_POST['id'];
				$result = adminClass::UpdateSiteMenu($data);
				if ($result>0){
					$msg = array($MsgInfo["admin_site_menu_update_success"],"",$_A['query_url_all']);
				}else{
					$msg = array($MsgInfo[$result]);
				}
				$admin_log["operating"] = "update";
			}else{
				$result = adminClass::AddSiteMenu($data);
				if ($result>0){
					$msg = array($MsgInfo["admin_site_menu_add_success"],"",$_A['query_url_all']);
				}else{
					$msg = array($MsgInfo[$result]);
				}
				$admin_log["operating"] = "add";
			}
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "admin";
			$admin_log["type"] = "site_menu";
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
		}
	}elseif ($_REQUEST['edit']!=""){
		$data['id'] = $_REQUEST['edit'];
		$result = adminClass::GetSiteMenuOne($data);
		if (is_array($result)){
			$_A["site_menu_result"] = $result;
		}else{
			$msg = array($MsgInfo[$result]);
		}
		
	}elseif ($_REQUEST['checked']!=""){
		$data['id'] = $_REQUEST['checked'];
		$result = adminClass::UpdateSiteMenuChecked($data);
	
	}elseif($_REQUEST['del']!=""){
		$data['id'] = $_REQUEST['del'];
		$result = adminClass::DelSiteMenu($data);
		if ($result>0){
			$msg = array($MsgInfo["admin_site_menu_del_success"],"",$_A['query_url_all']);
		}else{
			$msg = array($MsgInfo[$result]);
		}
		
		//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "admin";
		$admin_log["type"] = "site_menu";
		$admin_log["operating"] = "del";
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  $data;
		usersClass::AddAdminLog($admin_log);
	}
}

/**
 * 3,���վ��
**/
elseif ($_A['query_type'] == "new"){
	check_rank("site_new");//���Ȩ��
	if (isset($_POST['name']) && $_POST['name']!=""){
	
		$var = array("name","status","nid","pid","remark","value","type","menu_id","order","index_tpl","list_tpl","content_tpl","keywords","description");
		$data = post_var($var);
		if ($_POST['id']!=""){
			$data['id'] = $_POST['id'];
			$result = adminClass::UpdateSite($data);
			if ($result>0){
				$msg = array($MsgInfo["admin_site_update_success"],"",$_A['query_url_all']."&action=".$_REQUEST['action']."&menu_id={$data['menu_id']}");
			}else{
				$msg = array($MsgInfo[$result]);
			}
			$admin_log["operating"] = "update";
		}else{
			$result = adminClass::AddSite($data);
			if ($result>0){
				$msg = array($MsgInfo["admin_site_add_success"],"",$_A['query_url_all']."&action=".$_REQUEST['action']."&menu_id={$data['menu_id']}");
			}else{
				$msg = array($MsgInfo[$result]);
			}
			$admin_log["operating"] = "add";
		}
		//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "admin";
		$admin_log["type"] = "site";
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  $data;
		usersClass::AddAdminLog($admin_log);
	}elseif(isset($_REQUEST['edit']) && $_REQUEST['edit']!=""){
		$data['id'] = $_REQUEST['edit'];
		$result = adminClass::GetSiteOne($data);
		if (!is_array($result)){
			$msg = array($MsgInfo[$result]);
		}else{
			$_A['site_result'] = $result;
		}
	}elseif(isset($_REQUEST['del']) && $_REQUEST['del']!=""){
		$data['id'] = $_REQUEST['del'];
		$result = adminClass::DelSite($data);
		if ($result>0){
			$msg = array($MsgInfo["admin_site_del_success"],"",$_A['query_url']."/list&menu_id=".$_REQUEST['menu_id']);
		}else{
			$msg = array($MsgInfo[$result]);
		}
		
		//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "admin";
		$admin_log["type"] = "site";
		$admin_log["operating"] = "del";
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  $data;
		usersClass::AddAdminLog($admin_log);
	}
}


//��ֹ�Ҳ���
else{
	$msg = array("���������벻Ҫ�Ҳ���");
}

//վ���̨����ģ��
$template = "admin_site.html";
?>