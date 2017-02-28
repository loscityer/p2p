<?php
/******************************
 * $File: admin.install.php
 * $Description: ����װ�ļ�
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���
$sql = "

CREATE TABLE IF NOT EXISTS `{system}` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) DEFAULT NULL COMMENT '��������',
  `type_id`int(11) DEFAULT 0 COMMENT '��������',
  `nid` char(32) DEFAULT NULL COMMENT '������ʶ��',
  `value` text COMMENT '����ֵ',
  `code` varchar(32) DEFAULT NULL COMMENT '����������ģ��',
  `type` varchar(50) NOT NULL COMMENT '����',
  `style` int(2) DEFAULT NULL COMMENT '����ֵ����ʽ',
  `status` int(2) DEFAULT NULL COMMENT '״̬',
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `user_id` (`nid`)
) ENGINE=MyISAM   ;


INSERT INTO `{system}` (`name`, `nid`, `value`, `code`, `type`, `style`, `status`) VALUES
('�ر�վ�㣨����̨ʹ�ã�', 'con_webopen', '1', 'system', '', 1, 1),
('��վ�ر���Ϣ', 'con_closemsg', '', 'system', '', 1, 1),
('��վ����', 'con_webname', '�װ��', 'system', '', 1, 1),
('��վ��ַ', 'con_weburl', 'www.bkbank.com.cn', 'system', '', 1, 1),
('��վ·��', 'con_webpath', '', 'system', '', 1, 1),
( '��վlogo', 'con_logo', '', 'system', '', 1, 1),
('��վ�ؼ���', 'con_keywords', '�װ��', 'system', '', 1, 1),
('��վ����', 'con_description', '', 'system', '', 1, 1),
('��վģ��', 'con_template', '', 'system', '', 1, 1),
('��վ������', 'con_beian', '', 'system', '', 1, 1),
('��վͳ��', 'con_tongji', '', 'system', '', 1, 1),
('��վ��̨��ַ', 'con_houtai', '', 'system', '', 1, 1),
('�ʼ�������', 'con_email_host', '', 'email', '', 1, 1),
('�ʼ��˿�', 'con_email_port', '', 'email', '', 1, 1),
('�ʼ����Ϸ���', 'con_email_now', '0', 'email', '', 1, 1),
('�����Ƿ���֤', 'con_email_auth', '', 'email', '', 1, 1),
('�����ַ', 'con_email_url', '', 'email', '', 1, 1),
('�����ʼ�', 'con_email_from', '', 'email', '', 1, 1),
('�����ʼ�����', 'con_email_from_name', '', 'email', '', 1, 1),
('��������', 'con_email_password', '', 'email', '', 1, 1),
('�Ƿ�ʹ��ͼƬˮӡ����', 'con_watermark_status', '0', 'watermark', '', 1, 1),
('ˮӡ���ļ�����', 'con_watermark_type', '0', 'watermark', '', 1, 1),
('ˮӡ����', 'con_watermark_word', 'actoreasy.com', 'watermark', '', 1, 1),
('ˮӡͼƬ�ļ���', 'con_watermark_file', '', 'watermark', '', 1, 1),
('ˮӡͼƬ���������С', 'con_watermark_font', '12', 'watermark', '', 1, 1),
('ˮӡͼƬ������ɫ', 'con_watermark_color', '#FF00003', 'watermark', '', 1, 1),
('���ͼƬˮӡ����������', 'con_watermark_imgpct', '100', 'watermark', '', 1, 1),
('�������ˮӡ����������', 'con_watermark_txtpct', '100', 'watermark', '', 1, 1),
('ˮӡλ��', 'con_watermark_position', '3', 'watermark', '', 1, 1),
('���ŵ�ַ', 'con_sms_url', '', 'sms', '1', 1, 0),
('����״̬', 'con_sms_status', '0', 'sms', '0', 1, 1),
('id5״̬', 'con_id5_status', '0', 'id5', '', 1, 1),
('id5�û���', 'con_id5_username', '', 'id5', '', 1, 1),
('id5����','con_id5_password', '', 'id5', '', 1, 1),
('id5����','con_id5_fee', '', '', '', 1, 1),
('id5ʵ��״̬','con_id5_realname_status', '0', 'id5', '', 1, 1),
('id5ʵ������','con_id5_realname_fee', '', 'id5', '', 1, 1),
('id5ʵ�������շ�','con_id5_realname_times', '', 'id5', '', 1, 1),
('id5ѧ����֤','con_id5_edu_status', '0', 'id5', '', 1, 1),
('id5ѧ������','con_id5_edu_fee', '', 'id5', '', 1, 1),
('id5ѧ������','con_id5_edu_times', '', 'id5', '', 1, 1);


CREATE TABLE IF NOT EXISTS `{system_type}` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `addtime` varchar(50) NOT NULL,
  `addip` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `nid` (`nid`),
  KEY `code` (`code`),
  KEY `code_nid` (`code`,`nid`)
) ENGINE=MyISAM ;


CREATE TABLE IF NOT EXISTS `{site}` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `menu_id` int(11) DEFAULT NULL COMMENT '�˵�id',
  `status` int(2) NOT NULL COMMENT '״̬',
  `name` varchar(255) DEFAULT NULL COMMENT 'վ������',
  `nid` varchar(50) DEFAULT NULL COMMENT 'վ�����',
  `pid` int(2) DEFAULT '0' COMMENT '����',
  `type` varchar(100) NOT NULL COMMENT 'վ������',
  `order` int(11) NOT NULL,
  `value` varchar(255) DEFAULT NULL COMMENT 'ֵ',
  `remark` varchar(250) NOT NULL COMMENT '��ע',
  `litpic` varchar(50) DEFAULT NULL,
  `index_tpl` varchar(250) DEFAULT NULL,
  `list_tpl` varchar(250) DEFAULT NULL,
  `content_tpl` varchar(250) DEFAULT NULL,
  `keywords` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `menu_id` (`menu_id`),
  KEY `nid` (`nid`),
  KEY `pid` (`pid`),
  KEY `menuid_nid` (`nid`,`menu_id`)
) ENGINE=MyISAM ;


CREATE TABLE IF NOT EXISTS `{site_menu}` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL COMMENT '�˵�����',
  `nid` varchar(100) NOT NULL COMMENT '��ʶ��',
  `contents` varchar(250) NOT NULL COMMENT '���',
  `order` int(11) NOT NULL COMMENT '����',
  `checked` int(2) NOT NULL COMMENT '�Ƿ�Ĭ��',
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `nid` (`nid`)
) ENGINE=MyISAM ;


INSERT INTO `{site_menu}` ( `name`, `nid`, `contents`, `order`, `checked`) VALUES
('�˵�', 'actoreasy', 'ϵͳĬ�ϲ˵�', 10, 0);



CREATE TABLE IF NOT EXISTS `{modules}` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nid` varchar(50) DEFAULT NULL COMMENT '��ʶ��',
  `name` varchar(50) DEFAULT NULL,
  `nickname` varchar(50) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `default_field` varchar(200) DEFAULT NULL,
  `content` text,
  `version` varchar(10) DEFAULT NULL,
  `version_new` varchar(100) NOT NULL,
  `author` varchar(50) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `update` longtext NOT NULL,
  `status` int(1) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `fields` int(2) DEFAULT NULL,
  `purview` text,
  `remark` text,
  `issent` int(2) DEFAULT NULL,
  `title_name` varchar(100) DEFAULT NULL,
  `onlyone` int(2) DEFAULT NULL,
  `index_tpl` varchar(50) DEFAULT NULL,
  `list_tpl` varchar(50) DEFAULT NULL,
  `content_tpl` varchar(50) DEFAULT NULL,
  `search_tpl` varchar(100) DEFAULT NULL,
  `article_status` int(2) DEFAULT NULL,
  `visit_type` int(2) DEFAULT NULL,
  `addtime` varchar(50) DEFAULT NULL,
  `addip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `nid` (`nid`)
) ENGINE=MyISAM;

";
$mysql->db_querys($sql);
?>
