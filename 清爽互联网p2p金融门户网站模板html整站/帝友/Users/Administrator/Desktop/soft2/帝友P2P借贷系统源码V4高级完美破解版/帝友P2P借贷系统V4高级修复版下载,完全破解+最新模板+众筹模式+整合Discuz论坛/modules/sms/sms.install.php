<?
/******************************
 * $File: remind.install.php
 * $Description: ����ģ�鰲װ�ļ�
 * $Author: ahui 
 * $Time:2010-06-06
 * $Update:Ahui
 * $UpdateDate:2012-06-10  
 * Copyright(c) 2010 - 2012 by deayou.com. All rights reserved
******************************/
if (!defined('ROOT_PATH'))  die('���ܷ���');//��ֱֹ�ӷ���

$sql = "
DROP TABLE IF EXISTS `{sms_type}` ,`{sms_log}`;
CREATE TABLE `{sms_type}` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typename` text NOT NULL COMMENT '������',
  `nid` char(50) NULL COMMENT '���ͱ�ʶ��',
  `bz` varchar(100) DEFAULT NULL COMMENT '����',
  `status` int(1) NOT NULL COMMENT '�Ƿ��� 0�ر� 1����',
  `type_content` longtext NOT NULL COMMENT '����ģ��',
  `advance_time` int(50) NOT NULL COMMENT '��ǰ����ʱ�� 0-9 ���ִ�����ǰ���� 0��ʱ����',
  `addip` char(50) NOT NULL COMMENT '���ip',
  `addtime` int(11) NOT NULL COMMENT '���ʱ��',
  `updateip` char(50) NOT NULL COMMENT '�޸�ʱip',
  `updatetime` int(11) NOT NULL COMMENT '�޸�ʱ��',
  PRIMARY KEY (`id`,`nid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;


";
$mysql->db_querys($sql);
