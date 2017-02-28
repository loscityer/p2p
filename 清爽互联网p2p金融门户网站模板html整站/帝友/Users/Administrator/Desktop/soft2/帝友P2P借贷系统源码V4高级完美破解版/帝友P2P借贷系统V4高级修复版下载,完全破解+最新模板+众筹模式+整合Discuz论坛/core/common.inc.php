<?php
/******************************
 * $File: common.inc.php
 * $Description: 通用的数据库文件
 * $吾爱源码 ： bbs.52codes.net
******************************/

if (!defined('ROOT_PATH'))  /*die('不能访问')*/echo "<script>window.location.href='/404.htm';</script>";//防止直接访问

$db_config['host']     = 'localhost';      //数据库主机	
$db_config['user']     = 'root';      //数据库用户名	
$db_config['pwd']      = '123';  //数据库用户密码	
$db_config['name']     = 'we71';      //数据库名
$db_config['port']     = '';      //端口		
$db_config['prefix']   = 'yyd_'; //CMS表名前缀	
$db_config['language'] = 'gbk'; //数据库字符集 gbk,latin1,utf8,utf8..

//导出excel格式表
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
} // 注意文件路径


function modifier($fun,$value,$arr=""){
	global $_G;
	require_once(ROOT_PATH."plugins/magic/modifier.".$fun.".php");
	$_fun = "magic_modifier_".$fun;
	return $_fun($value,$arr,array("_G"=>$_G));
}	
?>
