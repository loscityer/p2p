<?
if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

if(isset($_POST['email'])){
	$getpwd_msg = "";
	$var = array("email","username","valicode");
	$data = post_var($var);
	if ($data['email']==""){
		$getpwd_msg = "�����ַ����Ϊ��";
	    echo "<script>alert('{$getpwd_msg}');location.href='/'</script>";
	}elseif ($data['username']==""){
		$getpwd_msg = "�û�������Ϊ��";
		echo "<script>alert('{$getpwd_msg}');location.href='/'</script>";
//	}elseif ($data['valicode']==""){
//		$getpwd_msg = "��֤�벻��Ϊ��";
//	}elseif ($data['valicode']!=$_SESSION['valicode']){
//		$getpwd_msg = "��֤�벻��ȷ";
	}else{

		$result = usersClass::GetUsers($data);
		if ($result==false){
			$getpwd_msg = "���䣬�û�����Ӧ����ȷ";
			echo "<script>alert('{$getpwd_msg}');location.href='/'</script>";
		}else{
		
			$data['user_id'] = $result['user_id'];
			$data['email'] = $result['email'];
			$data['username'] = $result['username'];
			$data['webname'] = $_G['system']['con_webname'];
			$data['title'] = "��������ȷ����";
			$data['msg'] = GetpwdMsg($data);
			$data['type'] = "reg";
			if (isset($_SESSION['sendemail_time']) && $_SESSION['sendemail_time']+60*2>time()){
				$getpwd_msg =  "��2���Ӻ��ٴ�����";
			}else{
				$result = usersClass::SendEmail($data);
				if ($result) {
				
					$_SESSION['sendemail_time'] = time();
					$getpwd_msg =  "��Ϣ�ѷ��͵�{$data['email']}����ע�������������ʼ�";
					
					echo "<script>alert('{$getpwd_msg}');location.href='/';</script>";
					
				}
				else{
					$getpwd_msg =  "����ʧ�ܣ��������Ա��ϵ";
					echo "<script>alert('{$getpwd_msg}');location.href='/';</script>";
				}
			}
		}
	}
	$_U['getpwd_msg'] = $getpwd_msg;
}
$title = 'ȡ������';
$template = 'user_getpwd.html';
?>