<?php
/******************************
 * $File: sms.inc.php
 * $Description: ���Ѻ�̨�����ļ�
 * $Author: ahui 
 * $Time:2010-06-06
 * $Update:Ahui
 * $UpdateDate:2012-06-10  
 * Copyright(c) 2010 - 2012 by deayou.com. All rights reserved
******************************/

if (!defined('ROOT_PATH'))  die('���ܷ���');//��ֱֹ�ӷ���

require_once("sms.class.php");

$url = $_U['query_url']."/{$_U['query_type']}";
if ($_U['query_type'] == "list"){	
	$_result = "";
	if (isset($_POST['type']) && $_POST['type']==1){
		foreach ($_POST as $key => $value){
			$_message = explode("message_",$key);
			if ($_message[0] == ""){
				$_result[$_message[1]]['message'] = $_POST[$key];
			}
			$_email = explode("email_",$key);
			if ($_email[0] == ""){
				$_result[$_email[1]]['email'] = $_POST[$key];
			}
			$_phone = explode("phone_",$key);
			if ($_phone[0] == ""){
				$_result[$_phone[1]]['phone'] = $_POST[$key];
			}
			
		}
		if ($_result!=""){
			$data['sms'] = serialize($_result);
		}else{
			$data['sms'] = "";
		}
		$data['user_id'] = $_G['user_id'];
		$result = smsClass::ActionsmsUser($data);
		if ($result!==true){
			$msg = array($result,"",$_U['query_url']);
		}else{
			$msg = array("�޸ĳɹ�");
		}
	}else{
		$data['user_id'] = $_G['user_id'];
		$result = smsClass::GetLists($data);
		if ($result!="" && is_array($result)){
			$_U['sms_list'] = $result;
		}else{
			$msg = array($result,"",$_U['query_url']);
		}
	}
	
}else{
	$msg = array("���Ĳ�������","",$url);
}

$template = "user_sms.html";
?>
