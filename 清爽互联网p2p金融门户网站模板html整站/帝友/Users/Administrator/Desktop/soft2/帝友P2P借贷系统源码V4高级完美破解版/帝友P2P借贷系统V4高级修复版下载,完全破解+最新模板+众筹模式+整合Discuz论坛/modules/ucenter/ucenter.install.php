<?
/******************************
 * $File: ucenter.install.php
 * $Description: �����ļ�
 * $Author: hummer 
 * $Time:2010-03-09
 * $Vesion:1.0
 * $Update:None 
 * $UpdateDate:None 
 * Copyright(c) 2013 by jichu.com. All rights reserved
 ******************************/
if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

$sql = "
DROP TABLE IF EXISTS `{ucenter}`;
CREATE TABLE IF NOT EXISTS `{ucenter}` (
	`user_id` INT NOT NULL,
	`uc_user_id` INT NOT NULL,
  PRIMARY KEY (`user_id`)) ENGINE=MyISAM;

CREATE TABLE `{ucenter_set}` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(50) NOT NULL,
  `value` varchar(200) NOT NULL,
  PRIMARY KEY (`id`));
";
$mysql->db_querys($sql);
