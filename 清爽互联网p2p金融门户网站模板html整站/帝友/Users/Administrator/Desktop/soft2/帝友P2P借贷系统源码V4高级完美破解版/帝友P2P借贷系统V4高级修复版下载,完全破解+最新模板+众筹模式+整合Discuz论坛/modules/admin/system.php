<?php
/******************************
 * $File:system.php
 * $Description: ϵͳ���ù����ļ�
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���
require_once('admin.class.php');


/**
 * ϵͳ����
**/
if ($_A['query_class'] == "info"){
	check_rank("system_info");//���Ȩ��
	//�������Ա������¼
	$admin_log["user_id"] = $_G['user_id'];
	$admin_log["code"] = "system";
	$admin_log["type"] = empty($_REQUEST['code'])?"system":$_REQUEST['code'];
	$admin_log["operating"] = $_A['query_type'];
	
	//ϵͳ����
	if (isset($_POST['con_webopen'])){
		$var = array("con_webopen","con_closemsg","con_webname","con_weburl","con_webpath","con_houtai","con_logo","con_keywords","con_description","con_beian","con_template","con_tongji");
		$data = post_var($var);
		$result = adminClass::UpdateSystem($data);
		$msg = array($MsgInfo["admin_info_success"]);
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  $data;
		usersClass::AddAdminLog($admin_log);
	}
	
	elseif ($_A['query_type'] == "new" || $_A['query_type'] == "edit"){
		if (isset($_POST['name'])){
			$var = array("name","nid","status","type_id","type","style");
			$data = post_var($var);
			$data['class'] = "add";
			if ($_A['query_type'] == "edit"){
				$data['id'] = $_REQUEST['id'];
				$data['class'] = "update";
			}
			if ($data['type']==0 || $data['type']==3){
				$data['value'] = $_POST['value1'];
			}else{
				$data['value'] = $_POST['value2'];
			}
			$result = adminClass::ActionSystem($data);
			if ($result>0){
				$msg = array("�����ɹ�","",$_A['query_url']."&type_id={$_REQUEST['type_id']}");
			}else{
				$msg = array($MsgInfo[$result],"",$_A['query_url']."&type_id={$_REQUEST['type_id']}");
			}
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
		}elseif($_A['query_type'] == "edit"){
			$data['id'] = $_REQUEST['id'];
			$data['class'] = "view";
			$data['style'] = "1";
			$result = adminClass::ActionSystem($data);
			if ($result['status']==0){
				$msg = array("�˲��������޸�");
			}else{
				$_A['system_result'] = $result;
			}
		}
	}
	
	elseif ($_A['query_type'] == "type"){
		if (isset($_POST['name'])){
			$var = array("name","nid","status","code");
			$data = post_var($var);
			if ($_REQUEST['action']==""){
				$result = adminClass::AddSystemType($data);
			}else{
				$data['id'] = $_REQUEST['id'];
				$result = adminClass::UpdateSystemType($data);
			}
			if ($result>0){
				$msg = array("�����ɹ�","",$_A['query_url_all']);
			}else{
				$msg = array($MsgInfo[$result]);
			}
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
		}elseif($_REQUEST['action'] == "edit"){
			$data['id'] = $_REQUEST['id'];
			$result = adminClass::GetSystemTypeOne($data);
			$_A['system_result'] = $result;
			
		}elseif($_REQUEST['action'] == "del"){
			$data['id'] = $_REQUEST['id'];
			$result = adminClass::DeleteSystemType($data);
			if ($result >0 ){
				$msg = array("ɾ���ɹ�","",$_A['query_url_all']);
			}else{
				$msg = array($MsgInfo[$result]);
			}
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
			
		}
	}
	elseif ($_A['query_type'] == "action"){
		$data['value'] = $_POST['value'];
		$data['name'] = $_POST['name'];
		$data['class'] = "action";
		$result = adminClass::ActionSystem($data);
		if ($result>0){
			$msg = array("�޸ĳɹ�");
		}else{
			$_A['system_result'] = $result;
		}
	
	}
	elseif ($_A['query_type'] == "del"){
		$data['id'] = $_REQUEST['id'];
		$data['class'] = "del";
		$result = adminClass::ActionSystem($data);
		if ($result >0 ){
			$msg = array("ɾ���ɹ�","",$_A['query_url']."&code={$_REQUEST['code']}");
		}else{
			$msg = array($MsgInfo[$result]);
		}
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  $data;
		usersClass::AddAdminLog($admin_log);
	}
	
	
}


/**
 * �û���Ϣ�������޸�
**/
elseif ($_A['query_class'] == "watermark"){
	check_rank("system_watermark");//���Ȩ��
	if (isset($_POST['con_watermark_status'])){
		$var = array("con_watermark_status","con_watermark_type","con_watermark_word","con_watermark_font","con_watermark_color","con_watermark_imgpct","con_watermark_txtpct","con_watermark_position");
		$data = post_var($var);
		if ($_FILES["con_watermark_file"]['size']>0) {
			$_G['upimg']['file'] = "con_watermark_file";
			$_G['upimg']['mask_status'] = 0;
			$_G['upimg']['code'] = "system";
			$_G['upimg']['type'] = "watermark";
			$_G['upimg']['user_id'] = $_G['user_id'];
			$_G['upimg']['article_id'] = "0";
			$pic_result = $upload->upfile($_G['upimg']);
			$data["con_watermark_file"] = $pic_result[0]['upfiles_id'];
		}
		
		$result = adminClass::UpdateSystem($data);
		$msg = array($MsgInfo["admin_info_success"],"",$_A['query_url_all']);
	}else{
		if ($_G['system']['con_watermark_file']!=""){
			$result = $upload->GetOne(array("id"=>$_G['system']['con_watermark_file']));
			$_A['con_watermark_file'] = $result['fileurl'];
			
		
		}
	}
}

/**
 * �û���Ϣ�������޸�
**/
if ($_A['query_class'] == "email"){

	check_rank("system_email");//���Ȩ��
	//��������
	if (isset($_POST['con_email_host'])){
		$var = array("con_email_host","con_email_url","con_email_auth","con_email_from","con_email_from_name","con_email_password","con_email_port","con_email_now");
		$data = post_var($var);
		$data['code'] = "email";
		$result = adminClass::UpdateSystem($data);
		
		if ($_POST['con_email_check']==1){
			//���ע��ɹ��������������ȷ��
			$email_info['email_info'] = $data;
			$email_info['user_id'] = 0;
			$email_info['port'] = $data['con_email_port'];
			$email_info['send_email'] = $data['con_email_url'];
			$email_info['email'] = $data['con_email_url'];
			$email_info['title'] = "��������ȷ��";
			$email_info['msg'] = "������յ��˴��ʼ���˵�����������Ѿ����óɹ�";
			$email_info['type'] = "set";
			$result = usersClass::SendEmail($email_info);
		
		}else{
			$result = true;
		}
		
		//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "system";
		$admin_log["type"] = "email";
		$admin_log["operating"] = "set";
		$admin_log["article_id"] = 0;
		$admin_log["result"] = $result;
		
		if ($result==true){
			if ($_POST['con_email_check']==1){
				$msg = array($MsgInfo["admin_email_success_check"]);
			}else{
				$msg = array($MsgInfo["admin_email_success"]);
			}
		}else{
			$msg = array($MsgInfo["admin_email_false"]);
		}
		
		$admin_log["content"] = $msg[0];
		usersClass::AddAdminLog($admin_log);
	}
	
	//�����¼id������Ϣ
	elseif($_REQUEST['id']!=""){
		$result = usersClass::GetUsersEmailLog(array("id"=>$_REQUEST['id']));
		echo $result['msg'];
		exit;
	}else{
		$result = adminClass::GetSystem($data);
		$_A["system_result"] = $result;
	}
}


/**
 * ��ջ���
**/
elseif ($_A['query_class']== "clearcache"){
	check_rank("system_clearcache");//���Ȩ��
	if ($_A['query_type']=="do"){
		DelFile("data/compile");
		$msg = array($MsgInfo["admin_clearcache_success"]);
	}
}




/**
 * ���ݿⱸ�ݺͻ�ԭ
**/
elseif ($_A['query_class']== "dbbackup"){
	
	check_rank("system_dbbackup");//���Ȩ��
	$_A['list_title'] = "���ݿⱸ�ݻ�ԭ";
	$_A['list_menu'] = "<a href='{$_A['admin_url']}&q=system/dbbackup/back'>���ݱ���</a> - <a href='{$_A['admin_url']}&q=system/dbbackup/revert'>���ݻ�ԭ</a> ";
	$filedir = "data/dbbackup";
	
	//���ݿ�ı���
	if ($_A['query_type'] == "back"){
		if (isset($_POST['name'])){
			$table = $_POST['name'];
			$size = $_POST['size'];
			if ($table==""){
				$msg = array("��ѡ�����б���");
			}else if ($size<50 || $size >2000){
				$msg = array("<font color=red>���ݴ�С������50k��2000k֮��</font>");
			}else{
				/*
				 *ɾ���ļ�������ݲ����´����ļ�
				*/
				del_file($filedir);
				mk_dir($filedir);
				$_SESSION['dbbackup']['table'] = $table;
				$_SESSION['dbbackup']['size'] = $size;
				
				$data['table'] = $_SESSION['dbbackup']['table'];
				$data['size'] = $_SESSION['dbbackup']['size'];
				$data['tid'] = isset($_REQUEST['tid'])?$_REQUEST['tid']:0;
				$data['limit'] = isset($_REQUEST['limit'])?$_REQUEST['limit']:0;
				$data['filedir'] = $filedir;
				$data['table_page'] = isset($_REQUEST['table_page'])?$_REQUEST['table_page']:0;
				$result = adminClass::BackupTables($data);
				if ($result!=""){
					echo "���ڱ��ݣ�".$data['table'][$data['tid']]."���� �� ��{$data['limit']}�� �����ݣ��벻Ҫ�ر������������";
					$url = $_A['query_url']."/back&tid={$result['tid']}&limit={$result['limit']}&table_page={$result['table_page']}";
					echo "<script>location.href='{$url}';</script>";
					exit;
				}else{
					include_once(ROOT_PATH."core/pclzip.class.php");
					$archive = new PclZip('dbback.zip');
					$v_list = $archive->create('data/dbbackup');
					if ($v_list == 0) {
						die("Error : ".$archive->errorInfo(true));
					}
					$msg = array("���ݳɹ�");
				}
			}
		}elseif (isset($_REQUEST['tid'])){
			$data['table'] = $_SESSION['dbbackup']['table'];
			$data['size'] = $_SESSION['dbbackup']['size'];
			$data['tid'] = isset($_REQUEST['tid'])?$_REQUEST['tid']:0;
			$data['limit'] = isset($_REQUEST['limit'])?$_REQUEST['limit']:0;
			$data['filedir'] = $filedir;
			$data['table_page'] = isset($_REQUEST['table_page'])?$_REQUEST['table_page']:0;
			$result = adminClass::BackupTables($data);
			if ($result!=""){
				echo "���ڱ��ݣ�".$data['table'][$data['tid']]."���� �� ��{$data['limit']}�� �����ݣ��벻Ҫ�ر������������";
				$url = $_A['query_url']."/back&tid={$result['tid']}&limit={$result['limit']}&table_page={$result['table_page']}";
				echo "<script>location.href='{$url}';</script>";
				exit;
			}else{
				include_once(ROOT_PATH."core/pclzip.class.php");
				$archive = new PclZip(ROOT_PATH.'data/dbbackup/dbbackup.zip');
				$v_list = $archive->create('data/dbbackup');
				if ($v_list == 0) {
					die("Error : ".$archive->errorInfo(true));
				}

				$msg = array("���ݳɹ�","",$_A['query_url']."/back");
			}
		}else{
		
			$_result = adminClass::GetSystemTables();
			$magic->assign("result",$_result);
		
			
		}
	}
	else if($_A['query_type']=="show"){
		$table =$_REQUEST['table'];
		$sql = "show create table $table";
		$result = $mysql->db_fetch_array($sql);
		echo $result['Create Table'];
		exit;
	}elseif ($_A['query_type'] == "revert"){
		if (isset($_REQUEST['nameid'])){
			$data['nameid'] = $_REQUEST['nameid'];
			$data['filedir'] = $filedir;
			$data['table'] = $_SESSION['dbbackup']['vtable'];
			$result = adminClass::RevertTables($data);
			if ($result!=""){
				$nameid= $data['nameid']+1;
				echo "���ڻ�ԭ��".$result."���� ���ݣ��벻Ҫ�ر������������";
				$url = $_A['query_url']."/revert&nameid={$nameid}";
				echo "<script>location.href='{$url}';</script>";
				exit;
			}else{
				if($_SESSION['dbbackup']['delfile']!=""){
					del_dir($data['filedir']);
				}
				$msg = array("��ԭ�ɹ�","",$_A['query_url']."/revert");
			}
		
		}elseif (isset($_POST['name'])){
			$show =!isset($_POST['show'])?"":$_POST['show'];
			$_SESSION['dbbackup']['delfile'] = !isset($_POST['delfile'])?"":$_POST['delfile'];
			$_SESSION['dbbackup']['vtable'] = !isset($_POST['name'])?"":$_POST['name'];
			if ( file_exists(ROOT_PATH.$filedir."/show_table.sql")){
				$sql = file_get_contents(ROOT_PATH.$filedir."/show_table.sql");
				$_sql = explode("\r\n",$sql);
				foreach ($_sql as $val){
					if ($val!=""){
						
						$mysql->db_query($val);
					}
				}
			}
			
			
			$url = $_A['query_url']."/revert&nameid=0";
			echo "<script>location.href='{$url}';</script>";
			exit;
				
			
			$msg = array("��ԭ�ɹ�");
		}else{
			$result = get_file($filedir,"file");
			$magic->assign("result",$result);
		}
	}elseif ($_A['query_type'] == "revertok"){
		$show =!isset($_REQUEST['show'])?"":$_REQUEST['show'];
		$delfile = !isset($_REQUEST['delfile'])?"":$_REQUEST['delfile'];
		$table = !isset($_REQUEST['name'])?"":$_REQUEST['name'];
		if ($table!=""){
			if (file_exists($filedir."/show_table.sql")){
				$sql = file_get_contents($filedir."/show_table.sql");
				$_sql = explode("\r\n",$sql);
				foreach ($_sql as $val){
					if ($val!=""){
						$mysql->db_query($val,"true");
					}
				}
			}
			
			foreach($table as $key => $value){
				if ($value!="show_table.sql"){
					$sql = file_get_contents($filedir."/".$value);
					$_sql = explode("\r\n",$sql);
					foreach ($_sql as $val){
						if ($val!=""){
							$mysql->db_query($val,"true");
						}
					}
				}
			}
			if($delfile!=""){
				del_dir($filedir);
			}
			$msg = array("��ԭ�ɹ�");
		}else{
			$msg = array("��ѡ��Ҫ��ԭ���ֶ�");
		}
		
	}
	if ( !isset ($msg) || $msg==""){
		$template_tpl = "admin_dbbackup.html";
	}
}


/**
 * վ����Ϣ
**/
elseif ($_A['query_class'] == "password"){
	if ($_POST['user_id']!=""){
		$data['user_id'] = $_POST['user_id'];
		$msg = "";
		if ($_POST['password']!=""){
			if($_POST['password'] != $_POST['password1']){
				$msg = array($MsgInfo['users_password_error']);
			}else{
				$data['password'] = $_POST['password'];
				$result = usersClass::UpdatePassword($data);
				if ($result>0){
				
				}else{
					$msg = array($MsgInfo[$result]);
				}
			}
		}
		
		if ($msg=="" && $_POST['paypassword']!=""){
			if($_POST['paypassword'] != $_POST['paypassword1']){
				$msg = array($MsgInfo['users_password_error']);
			}else{
				$data['paypassword'] = $_POST['paypassword'];
				$result = usersClass::UpdatePayPassword($data);
				if ($result>0){
				
				}else{
					$msg = array($MsgInfo[$result]);
				}
			}
		}
		
		if ($msg==""){
			if( $_POST['adminpassword']!="" && $_POST['adminpassword'] != $_POST['adminpassword1']){
				$msg = array($MsgInfo['users_password_error']);
			}else{
				if ($_POST['adminpassword']!=""){
				$data['password'] = $_POST['adminpassword'];
				}
				$data['adminname'] = $_POST['adminname'];
				$data['qq'] = $_POST['qq'];
				$data['province'] = $_POST['province'];
				$data['city'] = $_POST['city'];
				
				$result = usersClass::UpdateUsersAdmin($data);
				if ($result>0){
				
				}else{
					$msg = array($MsgInfo[$result]);
				}
			}
		}
		if ($msg=="" ){
			$msg = array("�����ɹ�");
			
		}
		//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "users";
		$admin_log["type"] = "edit";
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  $data;
		usersClass::AddAdminLog($admin_log);
	}else{
		$_A['users_result'] = usersClass::GetUsers(array("user_id"=>$_G['user_id']));
		$_A['admin_result'] = usersClass::GetUsersAdminOne(array("user_id"=>$_G['user_id']));
	}
}


/**
 * վ����Ϣ
**/
elseif ($_A['query_class'] == "index"){
	$php_info["phpv"] = phpversion();
	$php_info["sp_os"] = strtolower(isset($_ENV['OS']) ? $_ENV['OS'] : @getenv('OS'));
	$php_info["sp_server"] = $_SERVER["SERVER_SOFTWARE"];
	$php_info["sp_host"] = (empty($_SERVER["REMOTE_ADDR"]) ? $_SERVER["REMOTE_HOST"] : $_SERVER["REMOTE_ADDR"]);
	$php_info["sp_name"] = $_SERVER["SERVER_NAME"];
	$php_info["sp_max_execution_time"] = ini_get('max_execution_time');
	$php_info["sp_allow_reference"] = (ini_get('allow_call_time_pass_reference') ? '<font color=green>[��]On</font>' : '<font color=red>[��]Off</font>');
	$php_info["sp_allow_url_fopen"] = (ini_get('allow_url_fopen') ? '<font color=green>[��]On</font>' : '<font color=red>[��]Off</font>');
	$php_info["sp_safe_mode"] = (ini_get('safe_mode') ? '<font color=red>[��]On</font>' : '<font color=green>[��]Off</font>');
	$php_info["sp_mysql"] = (function_exists('mysql_connect') ? '<font color=green>[��]On</font>' : '<font color=red>[��]Off</font>');
	$_A['php_info'] = $php_info;
	$template = "admin_index.html";
}


/**
 * վ����Ϣ
**/
elseif ($_A['query_class'] == "site"){
	
	require_once("site.php");
}


/**
 * վ����Ϣ
**/
elseif ($_A['query_class'] == "module"){
	require_once("module.php");
}

/**
 * ID5��Ϣ
**/
elseif ($_A['query_class'] == "id5"){
	check_rank("system_id5");//���Ȩ��
	if (isset($_POST['con_id5_status'])){
		$var = array("con_id5_status","con_id5_username","con_id5_password","con_id5_fee","con_id5_realname_status","con_id5_realname_fee","con_id5_realname_times","con_id5_edu_status","con_id5_edu_fee","con_id5_edu_times");
		$data = post_var($var);
		$data['code'] = "id5";
		$result = adminClass::UpdateSystem($data);
		$msg = array($MsgInfo["admin_info_success"]);
		//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "system";
		$admin_log["type"] = "id5";
		$admin_log["operating"] = "set";
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  $data;
		usersClass::AddAdminLog($admin_log);
	}
	
	$template_tpl = "admin_id5.html";
}


$magic->assign("html_template","admin_".(empty($_A['query_class'])?'user':$_A['query_class']).".html");
$magic->assign("MsgInfo",$MsgInfo);
$template = "admin_system.html";
?>