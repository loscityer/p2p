

CREATE TABLE IF NOT EXISTS `dw_credit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '��ԱID',
  `credits` longtext NOT NULL COMMENT '�ܻ���',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- ��Ľṹ `dw_credit_class`
--

CREATE TABLE IF NOT EXISTS `dw_credit_class` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- ��Ľṹ `dw_credit_log`
--

CREATE TABLE IF NOT EXISTS `dw_credit_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `article_id` int(11) NOT NULL,
  `nid` varchar(200) NOT NULL,
  `value` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `addtime` varchar(50) NOT NULL,
  `update_time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- ��Ľṹ `dw_credit_rank`
--

CREATE TABLE IF NOT EXISTS `dw_credit_rank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '�ȼ�����',
  `nid` varchar(100) NOT NULL COMMENT '����',
  `rank` varchar(50) DEFAULT '0' COMMENT '�ȼ�',
  `class_id` int(11) NOT NULL COMMENT '���ַ���',
  `point1` int(11) DEFAULT '0' COMMENT '��ʼ��ֵ',
  `point2` int(11) DEFAULT '0' COMMENT '����ֵ',
  `pic` varchar(100) DEFAULT NULL COMMENT 'ͼƬ',
  `remark` varchar(256) DEFAULT NULL COMMENT '��ע',
  `addtime` int(11) DEFAULT NULL COMMENT '���ʱ��',
  `addip` varchar(30) DEFAULT NULL COMMENT '���IP',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk COMMENT='��Ա������־' AUTO_INCREMENT=36 ;

-- --------------------------------------------------------

--
-- ��Ľṹ `dw_credit_type`
--

CREATE TABLE IF NOT EXISTS `dw_credit_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '��������',
  `nid` varchar(50) DEFAULT NULL COMMENT '���ִ���',
  `code` varchar(50) NOT NULL COMMENT 'ģ��',
  `status` int(2) NOT NULL COMMENT '״̬',
  `class_id` varchar(50) NOT NULL COMMENT '����',
  `value` int(11) DEFAULT '0' COMMENT '������ֵ',
  `cycle` tinyint(1) DEFAULT '2' COMMENT '�������ڣ�1:һ��,2:ÿ��,3:�������,4:����',
  `award_times` tinyint(4) DEFAULT NULL COMMENT '��������,0:����',
  `interval` int(11) DEFAULT '1' COMMENT 'ʱ��������λ����',
  `remark` varchar(256) DEFAULT NULL COMMENT '��ע',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_ct_nid` (`nid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk COMMENT='��������' AUTO_INCREMENT=27 ;
