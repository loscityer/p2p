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

CREATE TABLE IF NOT EXISTS `yyd_message` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '�����û�',
  `type` varchar(100) NOT NULL COMMENT '��������',
  `status` int(11) NOT NULL COMMENT '״̬',
  `receive_value` longtext NOT NULL COMMENT '����id',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '����',
  `contents` text NOT NULL COMMENT '����',
  `addtime` varchar(50) NOT NULL DEFAULT '',
  `addip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM ;

CREATE TABLE IF NOT EXISTS `yyd_message_receive` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '������',
  `status` int(11) NOT NULL COMMENT '״̬',
  `send_id` int(11) NOT NULL,
  `send_userid` int(11) NOT NULL DEFAULT '0' COMMENT '�����û�',
  `type` varchar(50) NOT NULL COMMENT '����',
  `receive_id` longtext NOT NULL COMMENT '�������û�id',
  `receive_yes` longtext NOT NULL COMMENT '�ѽ���id',
  `receive_value` longtext NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '����',
  `contents` text NOT NULL COMMENT '����',
  `addtime` varchar(50) NOT NULL DEFAULT '',
  `addip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM ;
";

$mysql->db_querys($sql);
