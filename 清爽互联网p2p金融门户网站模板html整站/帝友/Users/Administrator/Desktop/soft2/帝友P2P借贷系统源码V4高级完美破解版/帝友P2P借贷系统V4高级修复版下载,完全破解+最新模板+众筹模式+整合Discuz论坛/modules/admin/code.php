<?php
/******************************
 * $File:code.php
 * $Description: ģ������ļ�
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

//��ǰģ�����Ϣ
$code = $_A['query_class'] ;
if ($code==""){
	$msg = array("��������");
}else{
	if (file_exists("modules/$code/$code.php")){
		$_A['module_other_status'] = adminClass::GetModuleStatus(array("nid"=>$code));
		require_once("modules/$code/$code.php");
		$_A['module_other_result'] = $_A['list_purview'][$code]["result"];
		
		$magic->assign("_A",$_A);
		$template_tpl= "{$code}.tpl";//����������ģ���ֱ�Ӷ�ȡģ�����ڵ���Ӧģ��
		$magic->assign("template_dir","modules/{$code}/");
		$magic->assign("module_tpl",$template_tpl);
		$magic->assign("MsgInfo",$MsgInfo);
		$template = "admin_code.html";
	}else{
		$msg = array("{$code}ģ�鲻����");
	}
}
			
?>