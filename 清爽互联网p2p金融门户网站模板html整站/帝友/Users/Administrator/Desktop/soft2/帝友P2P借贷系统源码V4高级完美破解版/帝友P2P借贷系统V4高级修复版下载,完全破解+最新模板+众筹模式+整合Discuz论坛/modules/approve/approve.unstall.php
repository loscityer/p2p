<?php
/******************************
 * $File: admin.module.php
 * $Description: ģ���ദ��
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

//adminClass::SaveModules(array("nid"=>"group","table"=>"group"));
//adminClass::SaveModules(array("nid"=>"group","table"=>"group_type"));

$sql = "DROP TABLE `{vote}`, `{yyd_approve}`, `{yyd_approve_edu}`, `{yyd_approve_edu_id5}`, `{yyd_approve_id5}`, `{yyd_approve_realname}`, `{yyd_approve_sms}`, `{yyd_approve_smslog}`, `{yyd_approve_video}`;";
$mysql->db_querys($sql);

?>