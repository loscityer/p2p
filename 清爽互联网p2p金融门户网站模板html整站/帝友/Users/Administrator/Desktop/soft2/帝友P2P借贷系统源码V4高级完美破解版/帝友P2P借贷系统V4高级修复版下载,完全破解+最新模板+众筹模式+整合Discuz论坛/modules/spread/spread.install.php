<?
/******************************
 * $File: group.install.php
 * $Description: Ⱥ��
 * $Author: hummer 
 * $Time:2012-03-09
 * $Vesion:1.0
 * $Update:None 
 * $UpdateDate:None 
 * Copyright(c) 2013 by jichu.com. All rights reserved
 ******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

$sql = "

CREATE TABLE IF NOT EXISTS `yyd_spread_user` (
`id` INT( 11 ) NOT NULL AUTO_INCREMENT ,
`user_id` INT( 11 ) NOT NULL COMMENT  '�ƹ���',
`spread_userid` INT( 11 ) NOT NULL COMMENT  '�ƹ�ͻ�',
`type` INT( 2 ) NOT NULL COMMENT  '1Ͷ��2���3����',
`addtime` VARCHAR( 30 ) NOT NULL ,
`addip` VARCHAR( 30 ) NOT NULL ,
PRIMARY KEY (  `id` )
) ENGINE = MYISAM ;


CREATE TABLE IF NOT EXISTS `yyd_spread_setting` (
`id` INT( 11 ) NOT NULL ,
`admin_userid` INT( 11 ) NOT NULL COMMENT  '��������Ա',
`type` INT( 2 ) NOT NULL COMMENT  '1Ͷ��2���3���4����',
`month` INT( 2 ) NOT NULL COMMENT  '�·�',
`task` INT( 11 ) NOT NULL COMMENT  '�����',
`task_fee` DECIMAL( 2, 2 ) NOT NULL COMMENT  '�������',
`task_first` INT( 11 ) NOT NULL COMMENT  '��ʼֵ',
`task_last` INT( 11 ) NOT NULL COMMENT  '������ֵ',
`addtime` VARCHAR( 30 ) NOT NULL ,
`addip` VARCHAR( 30 ) NOT NULL
) ENGINE = MYISAM ;
";

$mysql->db_querys($sql);
