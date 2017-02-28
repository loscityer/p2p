-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- ����: localhost
-- ��������: 2012 �� 02 �� 01 �� 14:23
-- �������汾: 5.1.59
-- PHP �汾: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ���ݿ�: `zaixiandai`
--

-- --------------------------------------------------------

--
-- ��Ľṹ `dw_rating_assets`
--

CREATE TABLE IF NOT EXISTS `dw_rating_assets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `assetstype` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `account` varchar(30) NOT NULL,
  `other` text NOT NULL,
  `verify_remark` varchar(200) NOT NULL,
  `verify_userid` int(11) NOT NULL,
  `verify_time` varchar(50) NOT NULL,
  `addtime` varchar(50) NOT NULL,
  `addip` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- ��Ľṹ `dw_rating_company`
--

CREATE TABLE IF NOT EXISTS `dw_rating_company` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '�����û�',
  `status` int(2) NOT NULL COMMENT '��֤��0��ʾ����У�1��ʾͨ����2��ʾδͨ��',
  `name` varchar(100) NOT NULL COMMENT '��˾����',
  `type` varchar(100) NOT NULL COMMENT '��˾����',
  `industry` varchar(100) NOT NULL COMMENT '������ҵ',
  `office` varchar(100) NOT NULL COMMENT '����ְλ',
  `rank` varchar(100) NOT NULL COMMENT '��������',
  `worktime1` varchar(100) NOT NULL COMMENT '����ʼʱ��',
  `worktime2` varchar(100) NOT NULL COMMENT '�������ʱ��',
  `workyear` varchar(100) NOT NULL COMMENT '��������',
  `provename` varchar(30) NOT NULL COMMENT '֤��������',
  `provetel` varchar(30) NOT NULL COMMENT '֤���˵绰',
  `tel` varchar(100) NOT NULL COMMENT '�绰',
  `address` varchar(200) NOT NULL COMMENT '��˾��ַ',
  `weburl` varchar(100) NOT NULL COMMENT '��ַ',
  `remark` varchar(200) NOT NULL COMMENT '��ע',
  `verify_userid` int(11) NOT NULL,
  `verify_remark` varchar(200) NOT NULL,
  `verify_time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk COMMENT='Ŀǰ���ڹ�˾������' AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- ��Ľṹ `dw_rating_contact`
--

CREATE TABLE IF NOT EXISTS `dw_rating_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `linkman2` varchar(30) NOT NULL COMMENT '��ϵ��2',
  `relation2` varchar(30) NOT NULL COMMENT '��ϵ��2��ϵ',
  `phone2` varchar(30) NOT NULL COMMENT '��ϵ��2�ֻ�',
  `linkman3` varchar(30) NOT NULL COMMENT '��ϵ��3',
  `relation3` varchar(30) NOT NULL COMMENT '��ϵ��3��ϵ',
  `phone3` varchar(30) NOT NULL COMMENT '��ϵ��3�ֻ�',
  `qq` varchar(30) NOT NULL,
  `wangwang` varchar(30) NOT NULL,
  `msn` varchar(30) NOT NULL,
  `other` varchar(30) NOT NULL COMMENT '������ϵ��ʽ',
  `verify_userid` int(11) NOT NULL,
  `verify_remark` varchar(200) NOT NULL,
  `verify_time` varchar(50) NOT NULL,
  `addtime` varchar(30) NOT NULL,
  `addip` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- ��Ľṹ `dw_rating_educations`
--

CREATE TABLE IF NOT EXISTS `dw_rating_educations` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '�����û�',
  `status` int(2) NOT NULL COMMENT '��֤��0��ʾ����У�1��ʾͨ����2��ʾδͨ��',
  `name` varchar(100) NOT NULL COMMENT 'ѧУ����',
  `degree` varchar(100) NOT NULL COMMENT 'ѧ��',
  `in_year` varchar(100) NOT NULL COMMENT '��ѧʱ��',
  `professional` varchar(100) NOT NULL COMMENT 'רҵ',
  `verify_userid` int(11) NOT NULL COMMENT '����û�id',
  `verify_remark` varchar(200) NOT NULL COMMENT '��˱�ע',
  `verify_time` varchar(50) NOT NULL COMMENT '���ʱ��',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk COMMENT='��������' AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- ��Ľṹ `dw_rating_finance`
--

CREATE TABLE IF NOT EXISTS `dw_rating_finance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `type` int(11) NOT NULL,
  `use_type` int(2) NOT NULL COMMENT '1Ϊ���룬2Ϊ֧��',
  `account` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `other` varchar(200) NOT NULL,
  `verify_userid` int(11) NOT NULL,
  `verify_time` varchar(50) NOT NULL,
  `verify_remark` varchar(200) NOT NULL,
  `addtime` varchar(50) NOT NULL,
  `addip` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- ��Ľṹ `dw_rating_houses`
--

CREATE TABLE IF NOT EXISTS `dw_rating_houses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '�����û�',
  `status` int(2) NOT NULL COMMENT '��֤��0��ʾ����У�1��ʾͨ����2��ʾδͨ��',
  `name` varchar(100) NOT NULL COMMENT '��˾����',
  `address` varchar(250) NOT NULL COMMENT '���ڵ�',
  `areas` varchar(200) NOT NULL COMMENT '�������',
  `in_year` varchar(100) NOT NULL COMMENT '�������',
  `repay` varchar(100) NOT NULL COMMENT '����״��',
  `holder1` varchar(100) NOT NULL COMMENT '����Ȩ1',
  `right1` varchar(100) NOT NULL COMMENT '�ݶ�1',
  `holder2` varchar(100) NOT NULL COMMENT '����Ȩ2',
  `right2` varchar(100) NOT NULL COMMENT '�ݶ�2',
  `load_year` varchar(100) NOT NULL COMMENT '��������',
  `repay_month` varchar(100) NOT NULL COMMENT 'ÿ�»���',
  `balance` varchar(100) NOT NULL COMMENT '������',
  `bank` varchar(100) NOT NULL COMMENT '����',
  `verify_userid` int(11) NOT NULL,
  `verify_remark` varchar(200) NOT NULL,
  `verify_time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk COMMENT='��������' AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- ��Ľṹ `dw_rating_info`
--

CREATE TABLE IF NOT EXISTS `dw_rating_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `sex` int(2) NOT NULL,
  `marry` int(2) NOT NULL,
  `children` int(2) NOT NULL,
  `income` int(2) NOT NULL,
  `dignity` int(2) NOT NULL COMMENT '���',
  `remark` text NOT NULL COMMENT '���Ҽ��',
  `edu` int(11) NOT NULL,
  `house` int(11) NOT NULL,
  `province` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `is_car` int(2) NOT NULL,
  `address` varchar(200) NOT NULL COMMENT '�־�ס��ַ',
  `phone` varchar(30) NOT NULL,
  `verify_userid` int(11) NOT NULL,
  `verify_time` varchar(50) NOT NULL,
  `verify_remark` varchar(200) NOT NULL,
  `addtime` varchar(50) NOT NULL,
  `addip` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- ��Ľṹ `dw_rating_jobs`
--

CREATE TABLE IF NOT EXISTS `dw_rating_jobs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '�����û�',
  `status` int(2) NOT NULL COMMENT '��֤��0��ʾ����У�1��ʾͨ����2��ʾδͨ��',
  `name` varchar(100) NOT NULL COMMENT '��˾����',
  `department` varchar(50) NOT NULL COMMENT '����',
  `office` varchar(200) NOT NULL COMMENT 'ְλ',
  `in_year` varchar(100) NOT NULL COMMENT '��ѧʱ��',
  `prover` varchar(100) NOT NULL COMMENT '֤����',
  `prover_tel` varchar(100) NOT NULL COMMENT '֤���˵绰',
  `verify_userid` int(11) NOT NULL,
  `verify_remark` varchar(200) NOT NULL,
  `verify_time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk COMMENT='��������' AUTO_INCREMENT=5 ;
