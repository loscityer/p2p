<?php
/******************************
 * $File: index.php
 * $Description: ��̨�����ļ�
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

//�����̨�Ĺ�ͬ���ñ���
$_A = array();
//���

//�û�ģ����Ϣ
require_once(ROOT_PATH.'modules/users/users.class.php');//������Ϣ����
$users = new usersClass();

//�����̨�ĵ�ַ,ϵͳ����
$db_config['con_admin_tpl'] = isset($db_config['con_admin_tpl'])?$db_config['con_admin_tpl']:"";
if ($db_config['con_admin_tpl']!=""){
	$_A['tpldir'] = "themes/".$db_config['admintpl'];
}else{
	$_A['tpldir'] = "themes/youyidai_admin";
}
$magic->template_dir = $_A['tpldir'];

//��̨�Ĺ����ַ
$admin_url = "?".$_G['query_site'];
$_A['admin_url'] = $admin_url;

//�Ե�ַ�����й���
$q = empty($_REQUEST['q'])?"":$_REQUEST['q'];//��ȡ����
$_q = explode("/",$q);
$_A['query'] = $q;
$_A['query_sort'] = empty($_q[0])?"main":$_q[0];
$_A['query_class'] = empty($_q[1])?"list":$_q[1];
$_A['query_type'] = empty($_q[2])?"list":$_q[2];
$_A['query_url'] = $_A['admin_url']."&q={$_A['query_sort']}/{$_A['query_class']}";
$_A['query_url_all'] = $_A['admin_url']."&q={$q}";

//ģ�飬��ҳ��ÿҳ��ʾ����
$_A['page'] = empty($_REQUEST['page'])?"1":$_REQUEST['page'];//��ҳ
$_A['epage'] = empty($_REQUEST['epage'])?"20":$_REQUEST['epage'];//��ҳ��ÿһҳ

//��̨�û���¼id
$_G["user_id"] = GetCookies(array('session_id' => "dwcms_admin_userid"));
if ($_G["user_id"]!=""){
	$_A["user_result"] = usersClass::GetUsers(array("user_id"=>$_G["user_id"]));
	$_A["admin_result"] = usersClass::GetUsersAdminOne(array("user_id"=>$_G["user_id"]));
	
	if ($_A["admin_result"]["type_id"]==1){
		$_A["admin_module"] = array("site","articles","attestations","credit","users","borrow","account","approve","ratting","system");
	}else{
		$_A["admin_module"] = explode(",",$_A["admin_result"]['module']);
	}
	$_A["admin_module_purview"] = adminClass::GetModuleAdmin(array("user_id"=>$_G["user_id"]));
	$display = "";
	foreach ($_A["admin_module_purview"]['all'] as $key => $value){
		$display .= ",'{$key}' : {'{$key}' : {";
		$_display = array();
		if ($value['result']!=false){
			foreach ($value['result'] as $_key => $_value){
				if ($_A["admin_module_purview"]["purview"]==""){
					$_display[] =	"'{$_key}' : ['{$_value['name']}','".$_A['admin_url']."&q={$_value['url']}']";
				}else{
					if(in_array($_key,$_A["admin_module_purview"]["purview"])){
						$_display[] =	"'{$_key}' : ['{$_value['name']}','".$_A['admin_url']."&q={$_value['url']}']";
					}
				}
			}
			$display .=	join(",",$_display);
		}
		$display .=	"}}\n\n";
	}
	$_A["admin_module_left"] = $display;
	$display = array();
	if ($_A["admin_module_purview"]['other']!=""){
		foreach ($_A["admin_module_purview"]['other'] as $key => $value){
			$display[]  .=	"'{$key}' : ['{$value['name']}','".$_A['admin_url']."&q=code/{$key}']";
		}
	}
	$_A["admin_module_other"] = join(",",$display);
	
	$_A["admin_module_top"] =$_A["admin_module_purview"]["top"];
	$_A["admin_module_all"] =$_A["admin_module_purview"]["all"];
}	

//�û���¼
if ($_A['query_sort']=='login' ){
	require_once('login.php');//
}

/* �û��˳� */
else if ($_A['query_sort']=='logout'){
	DelCookies(array('session_id' => "dwcms_admin_userid"));
	header("location:".$_A['admin_url']);
}

elseif ($_A['query_sort'] == "plugins" ){
	$magic->assign("_A",$_A);
	$magic->assign("_G",$_G);
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
//�ж��û��Ƿ��¼
elseif ($_G['user_id']!=""){
	
	$magic->assign("_G",$_G);

	/* ģ����� */
	 if ($_A['query_sort']=='module'){
		require_once('module.php');//
	}
	
	/* վ����� */
	else if ($_A['query_sort']=='site'){
		require_once('site.php');//
	}
	
	/* ϵͳ������Ϣ */
	else if ($_A['query_sort']=='system'){
		require_once('system.php');//
	}
	
	
	/* ����ģ��Ĺ��� */
	else if ($_A['query_sort']=='code'){
		require_once('code.php');//
	}
	/* Ĭ��Ϊ��̨��ҳ */
	else{
		$template = "admin_main.html";
	}
}


else{
	$template = "admin_login.html";
}

//�������ļ�
if (isset($msg) && $msg!="") {
	$_msg = $msg[0];
	$content = empty($msg[1])?"������һҳ":$msg[1];
	$url = empty($msg[2])?"-1":$msg[2];
	$http_referer = empty($_SERVER['HTTP_REFERER'])?"":$_SERVER['HTTP_REFERER'];
	if ($http_referer == "" && $url == ""){ $url = "/";}
	if ($url == "-1") $url = "";
	elseif ($url == "" ) $url = $http_referer;
	
	$_A['showmsg'] = array('msg'=>$_msg,"url"=>$url,"content"=>$content);
	$template = "admin_msg.html";
	
}


//��̨ģ������Ĳ��������еĻ�������ȫ������Ӧ�õ������������ȥ
$magic->assign("_A",$_A);


$magic->display($template);
exit;	
?>