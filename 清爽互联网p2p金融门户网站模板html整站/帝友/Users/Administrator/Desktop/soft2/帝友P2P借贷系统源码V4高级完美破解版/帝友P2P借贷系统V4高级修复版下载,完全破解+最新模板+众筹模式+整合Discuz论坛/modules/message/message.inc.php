<?php
if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

include_once("message.class.php");

$_U['epage'] = 20;


if ($_U['query_type'] == "list"){	
	if ($_REQUEST['del']!=""){
		$data['id'] = array($_REQUEST['del']);
		$data['user_id'] = $_G['user_id'];
		$result = messageClass::DeleteMessageReceive($data);
		if ($result>0){
			$msg = array($MsgInfo["message_delete_success"],"",$_U['query_url']);
		}else{
			$msg = array($MsgInfo[$result]);
		}
	}elseif (isset($_POST['type'])){
		if ($_POST['type']=="delete"){
			$data['id'] = $_POST['id'];
			$data['user_id'] = $_G['user_id'];
			
			$result = messageClass::DeleteMessageReceive($data);
			if ($result>0){
				$msg = array($MsgInfo["message_delete_success"],"",$_U['query_url']);
			}else{
				$msg = array($MsgInfo[$result]);
			}
		
		}elseif ($_POST['type']=="yes" || $_POST['type']=="no"){
			$data['id'] = $_POST['id'];
			$data['user_id'] = $_G['user_id'];
			$data['status'] = ($_POST['type']=="yes")?1:0;
			$result = messageClass::ActionMessageReceive($data);
			if ($result>0){
				$msg = array($MsgInfo["message_action_success"],"",$_U['query_url']);
			}else{
				$msg = array($MsgInfo[$result]);
			}
		}
	}
}


elseif($_U['query_type'] == "sent"){
	if(isset($_POST['contents'])){
		$msg = check_valicode();
		if ($msg==""){
			$var = array("receive_user","contents","name","status");
			$data = post_var($var);
			$data['user_id'] = $_G['user_id'];
			$data['type'] = "user";  
			$result = messageClass::AddMessage($data);
			if ($result>0){
				$msg = array($MsgInfo["message_send_success"],"",$_U['query_url']);
			}else{
				$msg = array($MsgInfo[$result]);
			}
		}
	}
}	

//�鿴���ظ�
elseif ($_U['query_type'] == "view"){	
	if (isset($_POST['contents'])){
		$_data['id'] = $_POST['id'];
		$_data['user_id'] = $_G['user_id'];
		$result = messageClass::GetMessageReceiveOne($_data);
		$data = post_var(array("contents"));
		$data['name'] = "Re:".$result['name'];
		$data['contents'] .= "<br>------------------ ԭʼ��Ϣ ------------------<br>".$result['contents'];
		$data['user_id'] = $_G['user_id'];
		$data['type'] = "user";  
		$data['receive_user'] = $_POST['receive_user']; 
		$data['status'] = 0; 
		$result = messageClass::AddMessage($data);
		if ($result>0){
			$msg = array($MsgInfo["message_send_success"],"",$_U['query_url']);
		}else{
			$msg = array($MsgInfo[$result]);
		}
	}else{
		$data['user_id'] = $_G['user_id'];
		$data['id'] = $_REQUEST['id'];
		$data['status'] = 1;
		$result = messageClass::GetMessageReceiveOne($data);
		if (is_array($result)){
			$_U['message_result'] = $result;
		}else{
			$msg = array($MsgInfo[$result],"",$_U['query_url']);
		}
	}
}

//�鿴���ظ�
elseif ($_U['query_type'] == "viewed"){	
	$data['user_id'] = $_G['user_id'];
	$data['id'] = $_REQUEST['id'];
	$result = messageClass::GetMessageOne($data);
	if (is_array($result)){
		$_U['message_result'] = $result;
	}else{
		$msg = array($MsgInfo[$result],"",$_U['query_url']);
	}
}

elseif ($_U['query_type'] == "send"){	
	if ($_POST['type']=="deled"){
		$data['id'] = $_POST['id'];
		$data['user_id'] = $_G['user_id'];
		$result = messageClass::DeleteMessage($data);
		if ($result>0){
			$msg = array($MsgInfo["message_delete_success"],"",$_U['query_url']."/send");
		}else{
			$msg = array($MsgInfo[$result]);
		}
	}
}
elseif ($_U['query_type'] == "deled"){	
	if (isset($_REQUEST['id']) ){
		$data['id'] = $_REQUEST['id'];
		$data['user_id'] = $_G['user_id'];
		$result = messageClass::DeleteMessage($data);
		if ($result>0){
			$msg = array($MsgInfo["message_action_success"],"",$_U['query_url']."/send");
		}else{
			$msg = array($MsgInfo[$result]);
		}
	}else{
		$msg = array("��ѡ���ٽ��в���");
	}
}

$template = "user_message.html";
?>
