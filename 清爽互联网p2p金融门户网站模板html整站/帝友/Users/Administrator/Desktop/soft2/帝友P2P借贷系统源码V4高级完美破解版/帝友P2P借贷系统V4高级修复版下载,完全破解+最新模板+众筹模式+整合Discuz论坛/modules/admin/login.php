<?php
/******************************
 * $File:login.php
 * $Description: �����̨��½����
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

if (isset($_POST['username'])){
	if (!IsExiest($_POST['username'])){
		$login_msg = $MsgInfo["users_username_empty"];
	}else{
		if (!isset($_POST['valicode']) || ($_POST['valicode']=="" || $_POST['valicode']!=$_SESSION['valicode'])){
			$login_msg = $MsgInfo["users_valicode_error"];
		}else{
			
			//�û���¼
			$data['username'] = $_POST['username'];
			$data['password'] = $_POST['password'];
			$result = $users->AdminLogin($data);
			if (!is_array($result)){
				$login_msg = $MsgInfo[$result];
			}else{
				$data['user_id'] = $result['user_id'];
				$data['session_id'] = "dwcms_admin_userid";
				SetCookies($data);
				
				if (isset($_SESSION['referer_url']) && $_SESSION['referer_url']!=""){
					$referer_url = $_SESSION['referer_url'];
					$_SESSION['referer_url'] = "";
					header("location:".$referer_url);
				}else{
					header("location:".$_A['admin_url']);
				}
			}
		}
	}
}
$magic->assign("login_msg",$login_msg);
$template = "admin_login.html";
?>