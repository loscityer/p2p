<?
/******************************
 * $File: comment.php
 * $Description: ���۹���
 * $Author: hummer 
 * $Time:2011-08-09
 * $Update:None 
 * $UpdateDate:None 
 * Copyright(c) 2013 by jichu.com. All rights reserved
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

check_rank("comment_list");//���Ȩ��

require_once ('comment.class.php');


$_A['list_purview']["comment"]["name"] = "���۹���";
$_A['list_purview']["comment"]["result"]["comment_list"] = array("name"=>"���۹���","url"=>"code/comment/list");


if ($_A['query_type'] == "list"){
	//�޸�״̬
	if (isset($_REQUEST['id']) && isset($_REQUEST['status'])){
		$sql = "update {comment} set status='".$_REQUEST['status']."' where id = ".$_REQUEST['id'];
		$mysql->db_query($sql);
	}

	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	$result = commentClass::GetList($data);
	
	if (is_array($result)){
		$pages->set_data($result);
		$_A['comment_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	
	}else{
		$msg = array($result);
	}
}


/**
 * ���
**/
elseif ($_A['query_type'] == "new"  || $_A['query_type'] == "edit" || $_A['query_type'] == "view" ){
	
	$_A['list_title'] = "���۹���";
	if (isset($_POST['site_id'])){
		$var = array('user_id','module_code', 'article_id','comment');
		$data = post_var($var);
		
		if ($_A['query_type'] == "edit"){
			$data['id'] = $_REQUEST['id'];
			$result = commentClass::Update($data);
		}
		
		if ($result !== true){
			$msg = array($result);
		}else{
			$msg = array("�����ɹ�");
		}
		$user->add_log($_log,$result);//��¼����
	}
	
	elseif ($_A['query_type'] == "edit" || $_A['query_type'] == "view" ){
		$data['id'] = $_REQUEST['id'];
		$data['code'] = $_REQUEST['module_code'];
		$result = commentClass::GetOne($data);
		if (is_array($result)){
			$_A['comment_result'] = $result;
			
		}else{
			$msg = array($result);
		}
		
	}
	
}			

	
/**
 * ɾ��
**/
elseif ($_A['query_type'] == "del"){
	$data['id'] = $_REQUEST['id'];
	$result = commentClass::Delete($data);
	if ($result !== true){
		$msg = array($result);
	}else{
		$msg = array("ɾ���ɹ�");
	}
	$user->add_log($_log,$result);//��¼����
}


?>