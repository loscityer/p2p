<?
if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���
$q = !isset($_REQUEST['q'])?"":$_REQUEST['q'];
$file = ROOT_PATH."/plugins/html/".$q.".inc.php";
if (file_exists($file)){
	include_once ($file);exit;
}

?>
