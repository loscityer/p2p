<?
/******************************
 * $File: attestations.unstall.php
 * $Description: ж��
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

$sql = "DROP TABLE `{attestations}`, `{attestations_type}`;";
$mysql->db_querys($sql);

?>