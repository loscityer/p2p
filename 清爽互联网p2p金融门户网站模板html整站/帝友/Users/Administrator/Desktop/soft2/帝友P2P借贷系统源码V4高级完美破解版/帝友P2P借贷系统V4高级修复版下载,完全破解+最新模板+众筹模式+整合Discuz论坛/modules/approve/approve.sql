
CREATE TABLE IF NOT EXISTS `dw_linkages` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL COMMENT '����',
  `nid` varchar(50) NOT NULL COMMENT '��ʶ��',
  `value` text NOT NULL COMMENT 'ֵ',
  `status` smallint(2) unsigned DEFAULT '0' COMMENT '״̬',
  `order` smallint(6) DEFAULT '0' COMMENT '����',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `dw_linkages_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '��������',
  `nid` varchar(50) DEFAULT NULL COMMENT '���ͱ�ʾ��',
  `code` varchar(50) NOT NULL COMMENT '����ģ��',
  `order` int(11) NOT NULL COMMENT '����',
  PRIMARY KEY (`id`),
  KEY `nid` (`nid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;
