<?php
/******************************
 * $File: common.inc.php
 * $Description: ͨ�õ����ݿ��ļ�
 * $�ᰮԴ�� �� bbs.52codes.net
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

$db_config['host']     = 'localhost';      //���ݿ�����	
$db_config['user']     = 'root';      //���ݿ��û���	
$db_config['pwd']      = '123';  //���ݿ��û�����	
$db_config['name']     = 'we71';      //���ݿ���
$db_config['port']     = '';      //�˿�		
$db_config['prefix']   = 'yyd_'; //CMS����ǰ׺	
$db_config['language'] = 'gbk'; //���ݿ��ַ��� gbk,latin1,utf8,utf8..

//����excel��ʽ��
function exportData($filename,$title,$data){
	header("Content-type: application/vnd.ms-excel");
	header("Content-disposition: attachment; filename="  . $filename . ".xls");
	if (is_array($title)){
		foreach ($title as $key => $value){
			echo $value."\t";
		}
	}
	echo "\n";
	if (is_array($data)){
		foreach ($data as $key => $value){
			foreach ($value as $_key => $_value){
				echo $_value."\t";
			}
			echo "\n";
		}
	}
}


 if(is_file($_SERVER['DOCUMENT_ROOT'].'/360safe/360webscan.php')){
    require_once($_SERVER['DOCUMENT_ROOT'].'/360safe/360webscan.php');
} // ע���ļ�·��


function modifier($fun,$value,$arr=""){
	global $_G;
	require_once(ROOT_PATH."plugins/magic/modifier.".$fun.".php");
	$_fun = "magic_modifier_".$fun;
	return $_fun($value,$arr,array("_G"=>$_G));
}	
?>
