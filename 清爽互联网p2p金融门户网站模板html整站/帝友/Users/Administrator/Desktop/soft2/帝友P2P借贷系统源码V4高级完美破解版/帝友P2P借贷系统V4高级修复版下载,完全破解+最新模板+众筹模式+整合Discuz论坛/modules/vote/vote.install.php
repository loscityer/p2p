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

CREATE TABLE IF NOT EXISTS `{vote}` (
 `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `status` int(2) NOT NULL COMMENT '״̬',
  `input` varchar(100) NOT NULL COMMENT '������',
  `type_id` varchar(30) NOT NULL COMMENT '��������',
  `remark` varchar(200) NOT NULL,
  `order` int(11) NOT NULL,
  `answer` int(11) NOT NULL,
  `addtime` varchar(50) NOT NULL,
  `addip` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;


CREATE TABLE IF NOT EXISTS `{vote_answer}` (
 `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `vote_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `status` int(2) NOT NULL COMMENT '״̬',
  `answer_status` int(2) NOT NULL COMMENT '�Ƿ��Ǵ�',
  `order` int(11) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `addtime` varchar(50) NOT NULL,
  `addip` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM ;

CREATE TABLE IF NOT EXISTS `{vote_type}` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `status` int(2) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `order` int(11) NOT NULL,
  `addtime` varchar(50) NOT NULL,
  `addip` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM ;

";

$mysql->db_querys($sql);
