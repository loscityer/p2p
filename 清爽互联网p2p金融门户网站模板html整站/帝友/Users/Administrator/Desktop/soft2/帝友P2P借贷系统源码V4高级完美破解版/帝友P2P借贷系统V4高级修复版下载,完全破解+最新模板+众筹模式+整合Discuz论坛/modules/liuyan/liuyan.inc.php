<?php
if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���
include_once("liuyan.class.php");

if ($_G['user_id']==""){

	$msg = array("�㻹û�е�¼�����ȵ�¼","��Ա��¼","index.php?user&q=action/login");
}
if ($_U['query_type']=="add"){
	if ($_SESSION['valicode'] != $_POST['valicode']){
		$msg = array("��֤�벻��ȷ");
	}else{
		$var = array("title","name","email","tel","fax","company","address","type","status","content");
		$data = post_var($var);
		$data['user_id'] = $_G['user_id'];
		$_G['upimg']['file'] = "litpic";
		$pic_result = $upload->upfile($_G['upimg']);
		if ($pic_result!=""){
			$data['litpic'] = $pic_result;
		}
		$result = liuyanClass::Add($data);
		if ($result !== true){
			$msg = array($result);
		}else{
			$_SESSION['valicode'] = "";
			
			$msg = array("�����ɹ�","","/tiwen/index.html");
			
		}
	}

}elseif ($_U['query_type']=="help"){
	$var = array("name","email","phone","content");
	$data = post_var($var);
	$email_info['user_id'] = $result;
	$email_info['email'] = "10596944@qq.com";
	$email_info['title'] = "�û�����";
	$email_info["msg"] = "������{$data['name']}<br>���䣺{$data['email']}<br>�绰��{$data['phone']}<br>���ݣ�{$data['content']}<br>";
	$result = usersClass::SendEmail($email_info);
	$msg = array("�����ɹ�","","/help/index.html");
}

$template = "user_msg.html";
?>
