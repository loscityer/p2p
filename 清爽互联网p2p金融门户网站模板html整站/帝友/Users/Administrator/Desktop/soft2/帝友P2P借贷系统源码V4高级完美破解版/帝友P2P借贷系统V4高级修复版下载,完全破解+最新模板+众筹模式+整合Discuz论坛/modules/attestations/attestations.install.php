<?
/******************************
 * $File: attestations.install.php
 * $Description: ֤�����ϰ�װ��Ϣ
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

$sql = "

CREATE TABLE IF NOT EXISTS `{attestations}` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `upfiles_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(2) NOT NULL COMMENT '״̬',
  `credit` int(11) NOT NULL COMMENT '����',
  `addtime` varchar(30) NOT NULL,
  `addip` varchar(30) NOT NULL,
  `verify_time` varchar(30) NOT NULL,
  `verify_userid` int(11) NOT NULL,
  `verify_remark` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  key `user_id` (`user_id`)
) ENGINE=MyISAM   ;


CREATE TABLE IF NOT EXISTS `{attestations_type}` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL COMMENT '����',
  `nid` varchar(100) NOT NULL COMMENT '��ʶ��',
  `order` int(11) NOT NULL COMMENT '����',
  `credit` int(11) NOT NULL COMMENT '������',
  `validity` int(11) NOT NULL COMMENT '��Ч��',
  `remark` varchar(200) NOT NULL COMMENT '���',
  `addtime` varchar(30) NOT NULL,
  `addip` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  key `{nid}`(`nid`)
) ENGINE=MyISAM ;
";

$mysql->db_querys($sql);
