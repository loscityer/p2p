<?php
require_once 'comment.class.php';
if (isset($_POST['valicode']) && $_POST['valicode']!=$_SESSION['valicode']){
//if (1!=1){
		$msg = array("��֤�����","",$_U['query_url']."/".$_U['query_type']);
}else{
	$_SESSION['valicode'] = "";
	if ($_U['query_type'] == "AddReplay"){
		if(!isset($_REQUEST['huodong_id'])){
			echo "������";
			exit;
		}else{
		$data=array();
		$data['comment_id'] = $_REQUEST['id'];
		$data['huodong_id'] = $_REQUEST['huodong_id'];
		$data['user_id'] = $_REQUEST['user_id'];
		$data['contents'] = urldecode($_REQUEST['replay_contents']);
		$data['status'] = 2;
		$result=commentClass::AddReplay($data);
			if($result !== true){
				echo "�ظ�ʧ��";
			}else{
				echo "�ظ��ɹ�";
			}
		}
	}

elseif ($_U['query_type'] == "add"){	
		$data=array();
		$data['article_id'] = $_REQUEST['article_id'];
		$data['user_id'] = $_REQUEST['user_id'];
		$data['contents'] = urldecode($_REQUEST['contents']);
		$data['pid'] = $_REQUEST['pid'];
		$data['sid'] = $_REQUEST['sid'];
		$data['code'] = $_REQUEST['code'];
		$data['status'] = 1;
		$data['reply_userid'] = $_REQUEST['reply_userid'];
		$result=commentClass::AddComment($data);
		if($result>0){
			echo $result;
		}else{
			echo -1;
		}
		exit;
	}	
	
//����
elseif ($_U['query_type'] == "AddCom"){
		if(!isset($_REQUEST['article_id'])){
			echo "������";
			exit;
		}else{
		$data=array();
		$data['article_id'] = $_REQUEST['article_id'];
		$data['user_id'] = $_REQUEST['user_id'];
		$data['contents'] = urldecode($_REQUEST['contents']);
		$data['status'] = 1;
		$data['pid'] = 0;
		$data['code'] = $_REQUEST['code'];
		$result=commentClass::AddRe($data);
			if($result !== true){
				echo "����ʧ��";
			}else{
				echo "���۳ɹ�";
			}
		}
	}

	
elseif ($_U['query_type'] == "new"){
	$data=array();
	$data['user_id'] = $_G['user_id'];
	$data['contents'] = iconv("UTF-8", "GBK", $_POST['contents']);
	$data['article_id'] = $_POST['article_id'];
	$data['code'] = "borrow";
	$result=commentClass::AddLy($data);
	if($result>0){
		echo "���۳ɹ�";
	}else{
		echo "����ʧ��";
	}
		exit;

	
}
	
	elseif ($_U['query_type'] == "del_tip"){
		echo "<br><br>�Ƿ�ɾ����������<br><br><a href='/?user&q=code/comment/del_yes&user_id=".$_REQUEST['user_id']."&id=".$_REQUEST['id']."'>ȷ��ɾ��</a>";
		
		exit;
	
	}
	
	elseif ($_U['query_type'] == "del_yes"){
		$data['id'] = $_REQUEST['id'];
		$result = commentClass::GetOne($data);
		if ($result['reply_userid']!=$_G['user_id']){
			$msg = array("��û��Ȩ��ɾ��������");
		}else{
			$result=commentClass::Delete($data);
			if($result>0){
				$msg = array("ɾ���ɹ�");
			}else{
				$msg = array("ɾ��ʧ�ܣ��������Ա��ϵ");
			}
		}
	}
	
	elseif ($_U['query_type'] == "del"){
		$data['id'] = $_POST['id'];
		$result=commentClass::Delete($data);
		if($result>0){
			echo true;
		}else{
			echo false;
		}
	}
	
	elseif ($_U['query_type'] == "reply_tip"){
		echo "<br><br><form action='/?user&q=code/comment/reply_new&repay_userid=".$_REQUEST['repay_userid']."&pid=".$_REQUEST['pid']."&sid=".$_REQUEST['sid']."&code=".$_REQUEST['code']."' method='post'>";
		echo "<textarea rows='5' cols='50' name='contents'></textarea><br><br>";
		echo "<input type='submit' value='�ύ�ظ�'>";
		echo "</form>";
		exit;
	
	}
	
	
	elseif ($_U['query_type'] == "reply_new"){
		$data=array();
		$data['article_id'] = $_G['user_id'];
		$data['user_id'] = $_G['user_id'];
		$data['contents'] = urldecode($_POST['contents']);
		$data['pid'] = $_REQUEST['pid'];
		$data['sid'] = $_REQUEST['sid'];
		$data['code'] = $_REQUEST['code'];
		$data['status'] = 1;
		$data['reply_userid'] = $_REQUEST['reply_userid'];
		$result=commentClass::AddComment($data);
		if($result>0){
			$msg = array("�ظ��ɹ�");
		}else{
			$msg = array("�ظ�ʧ�ܣ��������Ա��ϵ");
		}
	
	}
	
}
?>
