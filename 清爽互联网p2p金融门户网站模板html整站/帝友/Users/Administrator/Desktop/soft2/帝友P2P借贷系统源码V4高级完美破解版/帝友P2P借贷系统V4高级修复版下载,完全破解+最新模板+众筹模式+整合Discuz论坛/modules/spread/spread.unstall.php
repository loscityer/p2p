<?php
/******************************
 * $File: admin.module.php
 * $Description: ģ���ദ��
 * $Author: hummer 
 * $Time:2011-11-09
 * $Update:None 
 * $UpdateDate:None 
 * Copyright(c) 2013 by jichu.com. All rights reserved
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

$sql = "DROP TABLE `{spread_user}`, `{spread_setting}`;";
$mysql->db_querys($sql);
