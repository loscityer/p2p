<?
if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���
$id = urldecode($_REQUEST['id']);
$_id = explode(",",authcode(trim($id),"DECODE"));
$data['user_id'] = $_id[0];
$valid_time = $_id[1];

//�жϼ����ʱ���Ƿ����
if ($valid_time+60*60<time){
	$msg = array($MsgInfo['users_active_pass'],"","/?user");
}else{
	$result = usersClass::ActiveUsersEmail(array("user_id"=>$data['user_id']));
	$msg = array($MsgInfo[$result],"","/?user");
	
	//�����û�������¼
	$user_log["user_id"] = $data['user_id'];
	$user_log["code"] = "users";
	$user_log["type"] = "action";
	$user_log["operating"] = "email_active";
	$user_log["article_id"] = $data['user_id'];
	$user_log["result"] = ($result=="users_active_success")?1:0;
	$user_log["content"] =  $MsgInfo[$result];
	usersClass::AddUsersLog($user_log);	
	
}
?>