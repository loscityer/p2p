<?
if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

if (isset($_POST['password'])){
	$login_msg = "";
	$_url = $_POST['url'];
	$_url_login = '/?user&q=login';
	if($_url==1){
	$_url = '/';
	}
	//�жϵ�¼�Ļ�����Ϣ
	if (isset($_POST['valicode']) && $_POST['valicode'] =="" ){
		$msg = array($MsgInfo["users_valicode_empty"],"",$_url_login);
	}elseif (isset($_POST['valicode']) && $_POST['valicode']!=$_SESSION['valicode']){
		$msg = array($MsgInfo["users_valicode_error"],"",$_url_login);
	}elseif ($_POST['keywords']==""){
		$msg = array($MsgInfo["users_keywords_empty"],"",$_url_login);
	}elseif ($_POST['password']==""){
		$msg = array($MsgInfo["users_password_empty"],"",$_url_login);
	}else{
		
		//�û���¼
		if(!isset($data['user_id']) || $data['user_id']==""){
			$data['user_id'] = $_POST['keywords'];
		}
		$data['email'] =$_POST['keywords'];
		$data['username'] = $_POST['keywords'];
		$data['password'] = $_POST['password'];
		$result = usersClass::Login($data);
		
		if ($result>0){
			//����cookie
			$data['user_id'] = $result;
			$data['cookie_status'] = $_G['system']['con_cookie_status'];
			
			
			//ucenter��¼
			$ucenter_login = "";
			if ($_G['module']['ucenter_status']==1){
				$user_result = usersClass::GetUsers(array("user_id"=>$data['user_id']));
				$_data['username'] = $data['username'];
				$_data['password'] = $data['password'];
				$_data['user_id'] = $data['user_id'];
				$_data['email'] = $user_result['email'];
				$ucenter_login = ucenterClass::UcenterLogin($_data);
				if ($ucenter_login==""){
					$msg = array("��̳ͬ��ʧ�ܣ��������Ա��ϵ");
				}else{
					
					SetCookies($data);
					$_SESSION['dw_username'] = $_data['username'];
					$msg = array($MsgInfo["users_login_success"],"",$_url);
				}
				
			}else{
				/*echo "<script>alert({$result})</script>";*/
				DelCookies($data);
				SetCookies($data);
				if ($_POST['url'] == 1){
				$msg = array($MsgInfo["users_login_success"],"",'/');
				}
				else{
				$msg = array($MsgInfo["users_login_success"],"",$_url);
				}
			}
			
		}else{
			$msg = array($MsgInfo[$result]);
		}
		
		
	}
}
$template = 'user_login.html';
?>