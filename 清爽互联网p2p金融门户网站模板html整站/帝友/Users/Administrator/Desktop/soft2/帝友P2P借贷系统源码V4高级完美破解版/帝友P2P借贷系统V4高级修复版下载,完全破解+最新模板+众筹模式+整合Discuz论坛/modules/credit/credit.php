<?
/******************************
 * $File: credit.php
 * $Description: ���ֺ�̨�����ļ�
 * $Author: hummer 
 * $Time:2010-08-09
 * $Update:None 
 * $UpdateDate:None 
 * Copyright(c) 2013 by jichu.com. All rights reserved
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

$_A['list_purview']["credit"]["name"] = "���ֹ���";
$_A['list_purview']["credit"]["result"]["credit_list"] = array("name"=>"�û�����","url"=>"code/credit/list");
$_A['list_purview']["credit"]["result"]["credit_log"] = array("name"=>"���ּ�¼","url"=>"code/credit/log");
$_A['list_purview']["credit"]["result"]["credit_rank"] = array("name"=>"���ֵȼ�","url"=>"code/credit/rank");
$_A['list_purview']["credit"]["result"]["credit_type"] = array("name"=>"��������","url"=>"code/credit/type");
$_A['list_purview']["credit"]["result"]["credit_class"] = array("name"=>"���ַ���","url"=>"code/credit/class");
	
require_once("credit.class.php");

if ($_A['query_type'] == "list"){
check_rank("credit_list");//���Ȩ��

}
elseif ($_A['query_type'] == "log"){
	check_rank("credit_log");//���Ȩ��
	if($_REQUEST['examine']!=""){
		if ($_POST['credit']!=""){
			$var = array("credit","user_id");
			$data = post_var($var);
			$data['id'] = $_REQUEST['examine'];
			$result = creditClass::UpdateCredit($data);
			
			if ($result>0){
				$msg = array("�����ɹ�","",$_A['query_url_all']);
			}else{
				$msg = array($MsgInfo[$result]);
			}
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "credit";
			$admin_log["type"] = "credit";
			$admin_log["operating"] = "update";
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
		}else{
			$data['id'] = $_REQUEST['examine'];
			$result = creditClass::GetLogOne($data);
			if (is_array($result)){
				$_A["credit_result"] = $result;
			}else{
				$msg = array($MsgInfo[$result]);
			}
		}
	}
}



/**
 * ���ַ���
**/

elseif ($_A['query_type'] == "class" ){
	check_rank("credit_class");//���Ȩ��
	if (isset($_POST['name'])){
	
		$var = array("name","nid");
		$data = post_var($var);
		if ($_POST['id']!=""){
			$data['id'] = $_POST['id'];
			$result = creditClass::UpdateClass($data);
			if ($result>0){
				$msg = array($MsgInfo["credit_class_update_success"],"",$_A['query_url_all']);
			}else{
				$msg = array($MsgInfo[$result]);
			}
			$admin_log["operating"] = "update";
		}else{
			$result = creditClass::AddClass($data);
			if ($result>0){
				$msg = array($MsgInfo["credit_class_add_success"],"",$_A['query_url_all']);
			}else{
				$msg = array($MsgInfo[$result]);
			}
			$admin_log["operating"] = "add";
		}
		
		//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "credit";
		$admin_log["type"] = "class";
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  $data;
		usersClass::AddAdminLog($admin_log);
		
	}elseif ($_REQUEST['edit']!=""){
		$data['id'] = $_REQUEST['edit'];
		$result = creditClass::GetClassOne($data);
		if (is_array($result)){
			$_A["credit_result"] = $result;
		}else{
			$msg = array($MsgInfo[$result]);
		}
	
	}elseif($_REQUEST['del']!=""){
		$data['id'] = $_REQUEST['del'];
		$result = creditClass::DeleteClass($data);
		if ($result>0){
			$msg = array($MsgInfo["credit_class_del_success"],"",$_A['query_url_all']);
		}else{
			$msg = array($MsgInfo[$result]);
		}
		
		//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "credit";
		$admin_log["type"] = "class";
		$admin_log["operating"] = "del";
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  $data;
		usersClass::AddAdminLog($admin_log);
	}
}



/**
 * ��������
**/

elseif ($_A['query_type'] == "type" ){
	check_rank("credit_type");//���Ȩ��
	if (isset($_POST['name'])){
	
		$var = array("nid","name","value","cycle","code","class_id","award_times","status","interval","remark");
		$data = post_var($var);
		if ($_POST['id']!=""){
			$data['id'] = $_POST['id'];
			$result = creditClass::UpdateType($data);
			if ($result>0){
				$msg = array($MsgInfo["credit_type_update_success"],"",$_A['query_url_all']);
			}else{
				$msg = array($MsgInfo[$result]);
			}
			$admin_log["operating"] = "update";
		}else{
			$result = creditClass::AddType($data);
			if ($result>0){
				$msg = array($MsgInfo["credit_type_add_success"],"",$_A['query_url_all']);
			}else{
				$msg = array($MsgInfo[$result]);
			}
			$admin_log["operating"] = "add";
		}
		
		//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "credit";
		$admin_log["type"] = "type";
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  $data;
		usersClass::AddAdminLog($admin_log);
	}elseif ($_REQUEST['edit']!=""){
		$data['id'] = $_REQUEST['edit'];
		$result = creditClass::GetTypeOne($data);
		if (is_array($result)){
			$_A["credit_type_result"] = $result;
		}else{
			$msg = array($MsgInfo[$result]);
		}
	
	}elseif($_REQUEST['del']!=""){
		$data['id'] = $_REQUEST['del'];
		$result = creditClass::DeleteType($data);
		if ($result>0){
			$msg = array($MsgInfo["credit_type_del_success"],"",$_A['query_url_all']);
		}else{
			$msg = array($MsgInfo[$result]);
		}
		
		//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "credit";
		$admin_log["type"] = "type";
		$admin_log["operating"] = "del";
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  $data;
		usersClass::AddAdminLog($admin_log);
	}
}


/**
 * ��������
**/

elseif ($_A['query_type'] == "rank" ){
	check_rank("credit_rank");//���Ȩ��
	if (isset($_POST['name'])){
			$var = array("nid","name","rank","point1","point2","pic","remark","class_id");
			$data = post_var($var);
			if ($_POST['id']!=""){
				$data['id'] = $_POST['id'];
				$result = creditClass::UpdateRank($data);
				if ($result>0){
					$msg = array($MsgInfo["credit_rank_update_success"],"",$_A['query_url_all']);
				}else{
					$msg = array($MsgInfo[$result]);
				}
				$admin_log["operating"] = "update";
			}else{
				$result = creditClass::AddRank($data);
				if ($result>0){
					$msg = array($MsgInfo["credit_rank_add_success"],"",$_A['query_url_all']);
				}else{
					$msg = array($MsgInfo[$result]);
				}
				$admin_log["operating"] = "add";
			}
			
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "credit";
			$admin_log["type"] = "rank";
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
		
	}elseif ($_REQUEST['edit']!=""){
		$data['id'] = $_REQUEST['edit'];
		$result = creditClass::GetRankOne($data);
		if (is_array($result)){
			$_A["credit_rank_result"] = $result;
		}else{
			$msg = array($MsgInfo[$result]);
		}
	
	}elseif($_REQUEST['del']!=""){
		$data['id'] = $_REQUEST['del'];
		$result = creditClass::DeleteRank($data);
		if ($result>0){
			$msg = array($MsgInfo["credit_rank_del_success"],"",$_A['query_url_all']);
		}else{
			$msg = array($MsgInfo[$result]);
		}
		
		//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "credit";
		$admin_log["type"] = "rank";
		$admin_log["operating"] = "del";
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  $data;
		usersClass::AddAdminLog($admin_log);
	}
}

?>