<?
if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

//����û���Ϣ��
require_once(ROOT_PATH."/modules/users/users.class.php");

$_U = array();//�û��Ĺ�ͬ���ñ���

//�û�����ģ�����������
$magic->left_tag = "{";
$magic->right_tag = "}";
//$magic->force_compile = true;
$temlate_dir = "themes/{$_G['system']['con_template']}_member";
$magic->template_dir = $temlate_dir;
$magic->assign("tpldir",$temlate_dir);


//�û����ĵĹ����ַ
$member_url = "/?".$_G['query_site'];
$_U['member_url'] = $member_url;

//ģ�飬��ҳ��ÿҳ��ʾ����


//�Ե�ַ�����й���
$q = empty($_REQUEST['q'])?"":urldecode($_REQUEST['q']);//��ȡ����
$_q = explode("/",$q);
$_U['query'] = $q;
$_U['query_sort'] = empty($_q[0])?"main":$_q[0];
$_U['query_class'] = empty($_q[1])?"list":$_q[1];
$_U['query_type'] = empty($_q[2])?"list":$_q[2];
$_U['query_url'] = $_U['member_url']."&q={$_U['query_sort']}/{$_U['query_class']}";

// ��¼ҳ��
if ($_U['query_sort'] == 'login'){
	require_once("login.php");
}

elseif ($_U['query_class'] == 'updatepwd'){
	$updatepwd_msg = "";
	if(isset($_REQUEST['id'])){
		$id = urldecode($_REQUEST['id']);
		$data = explode(",",authcode(trim($id),"DECODE"));
		$user_id = $data[0];
		$start_time = $data[1];
		if ($user_id==""){
			$updatepwd_msg = "���Ĳ������������Ҳ���";
		}elseif (time()>$start_time+10*60){
			$updatepwd_msg = "�������Ѿ����ڣ�����������";
		}else{
			$result = usersClass::GetUsers(array("user_id"=>$user_id));
			if ($result == false){
				$updatepwd_msg = "���Ĳ������������Ҳ���";
			}else{
				$_U['user_result'] =  $result;
			}
		}
	}else{
		$updatepwd_msg = "���Ĳ������������Ҳ���";
	}
	//$updatepwd_msg = "";
	if(isset($_POST['password']) && $updatepwd_msg=="" ){
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		if ($password==""){
			$update_msg = "�����벻��Ϊ��";
		}elseif ( strlen($password)<6 || strlen($password)>15){
			$update_msg = "����ĳ�����6��15λ֮��";
		}elseif ($password != $confirm_password){
			$update_msg = "�������벻һ��";
		}else{
			$index['user_id'] = $user_id;
			$index['password'] = $password;
			$result = usersClass::UpdatePassword($index);
			
			
			
			if ($result==false){
				$update_msg = "���Ĳ������������Ҳ���";
			}else{
			
			     if ($_G['module']['ucenter_status']==1 ){
		                  $result_user = $mysql->db_fetch_array("select email,username from {users} where user_id='".$user_id."'");
						 
						$_data['email'] = $result_user['email'];
					$_data['username'] = $result_user['username'];
					$_data['ignoreoldpw'] = '1';
					$_data['newpassword'] = $_POST['password'];
					 ucenterClass::UcenterPwd($_data);
						
				      }
				$updatepwd_msg = "�����޸ĳɹ���";
			}
		}
	}
	
	$_U['update_msg'] = $update_msg;
	$_U['updatepwd_msg'] = $updatepwd_msg;
	$template = 'user_updatepwd.html';
}

// �˳�ҳ��
elseif ($_U['query_sort'] == 'logout'){
	include_once("logout.php");
}
	
// ȡ������
elseif ($_U['query_sort'] == 'getpwd'){
	include_once("getpwd.php");
}
	
// ע��
elseif ($_U['query_sort'] == 'reg'){
	include_once("reg.php");
}
// ����
elseif ($_U['query_sort'] == 'active'){
	include_once("active.php");
}
#Ҫ�����ע��	
elseif ($_U['query_sort'] == "reginvite"){	
	$_user_id = Url2Key($_REQUEST['u'],"reg_invite");
	$_SESSION['reginvite_user_id'] = $_user_id[1];
	header('location:/?user&q=reg');
}
// ����û����Ƿ�ע��
elseif ($_U['query_sort'] == 'check_username'){
	$result = usersClass::CheckUsername(array("username"=>$_REQUEST['username']));
	if ($result == false){
		echo 1;exit;
	}else{
		echo "0";exit;
	}
}

# ��������Ƿ�ע��
elseif ($_U['query_sort'] == 'check_email'){
	$result = usersClass::GetUsers(array("email"=>urldecode($_REQUEST['email'])));
	if ($result == ""){
		echo "1";
	}else{
		echo "0";
	}
}


elseif ($_U['query_sort'] == "plugins" ){
	$magic->assign("_U",$_U);
	$_ac = !isset($_REQUEST['ac'])?"html":$_REQUEST['ac'];
	if ($_ac=="html"){
		$_p = !isset($_REQUEST['p'])?"":$_REQUEST['p'];
		$file = ROOT_PATH."plugins/html/{$_p}.inc.php";
	}else{
		$file = ROOT_PATH."plugins/{$_ac}/{$_ac}.php";
	}
	if (file_exists($file)){
		include_once ($file);exit;
	}
}


// �ж��Ƿ��¼
elseif ($_G['user_id'] == ""){
	header('location:/?user&q=logout');
}


// �û����Ĵ���
elseif ($_U['query_sort'] == 'code'){
	
	if (is_file(ROOT_PATH."/modules/{$_U['query_class']}/{$_U['query_class']}.inc.php")){
		include(ROOT_PATH."/modules/{$_U['query_class']}/{$_U['query_class']}.inc.php");
	}else{
		$msg = array("���������������Ҳ���");
	}
}

//�û�����
else{
	$template = "user_main.html";
}





//ϵͳ��Ϣ�����ļ�
if (isset($msg) && $msg!="") {
	$_msg = $msg[0];
	$content = empty($msg[1])?"������һҳ":$msg[1];
	$url = empty($msg[2])?"-1":$msg[2];
	$http_referer = empty($_SERVER['HTTP_REFERER'])?"":$_SERVER['HTTP_REFERER'];
	if ($http_referer == "" && $url == ""){ $url = "/";}
	if ($url == "-1") $url = "";
	elseif ($url == "" ) $url = $http_referer;
	$_U['showmsg'] = array('msg'=>$_msg,"url"=>$url,"content"=>$content);
	$template = "user_msg.html";
}


$magic->assign("_U",$_U);

$magic->display($template);
exit;	
?>