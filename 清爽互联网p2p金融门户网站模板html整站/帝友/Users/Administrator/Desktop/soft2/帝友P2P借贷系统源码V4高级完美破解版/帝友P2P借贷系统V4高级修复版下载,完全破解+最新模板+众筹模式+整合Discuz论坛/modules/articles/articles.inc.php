<?
/******************************
 * $File: articles.inc.php
 * $Description: ���¹�������
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

require_once("articles.class.php");

//�������Ӻ��޸�
if ($_U['query_type'] == "new" || $_U['query_type'] == "edit"){	
	if($_POST['name']!=""){
		$msg = check_valicode();
		if ($msg!=""){
		}elseif (!isset($_POST['name']) || $_POST['name']==""){
			$msg = array($MsgInfo["articles_name_empty"]);
		}elseif (!isset($_POST['contents']) || $_POST['contents']==""){
			$msg = array($MsgInfo["articles_contents_empty"]);
		
		}else{		
			$var = array("name","type_id","contents");
			$data = post_var($var);
			$data['user_id'] = $_G["user_id"];
			$data['status'] = 3;
			if ($_POST['id']!=""){
				$data['id'] = $_POST['id'];
				$result = articlesClass::Update($data);
			}else{
				$result = articlesClass::Add($data);
			}
			if ($result>0){
				$msg = array($MsgInfo["articles_action_success"],"","/index.php?user&q=code/articles/list");
			}else{
				$msg = array($MsgInfo[$result]);
			}
			
		}
	}elseif($_REQUEST['id']!=""){
		$data['user_id'] = $_G["user_id"];
		$data['id'] = $_REQUEST['id'];
		$_U["articles_result"] = articlesClass::GetOne($data);
		if (!is_array($_U["articles_result"])){
			$msg = array($MsgInfo[$_U["articles_result"]]);
		}if ($_U["articles_result"]["status"]==1){
			$msg = array($MsgInfo["articles_yes_not"]);
		}
		
	}
}

//����ĳ���

elseif ($_U['query_type'] == "list"){
	
}
//����ĳ���

elseif ($_U['query_type'] == "del"){
	$data['user_id'] = $_G["user_id"];
	$data['id'] = $_REQUEST['id'];
	$_U["articles_result"] = articlesClass::GetOne($data);
	if (!is_array($_U["articles_result"])){
		$msg = array($MsgInfo[$_U["articles_result"]]);
	}elseif ($_U["articles_result"]["status"]==1){
		$msg = array($MsgInfo["articles_yes_not"]);
	}else{
		$result = articlesClass::Delete($data);
		if ($result>0){
			$msg = array($MsgInfo["articles_del_success"]);
		}
	}
}

$template = "users_articles.html";
?>
