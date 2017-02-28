<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ims_modules`;");
E_C("CREATE TABLE `ims_modules` (
  `mid` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL COMMENT '标识',
  `type` varchar(20) NOT NULL DEFAULT '' COMMENT '类型',
  `title` varchar(100) NOT NULL COMMENT '名称',
  `version` varchar(10) NOT NULL DEFAULT '' COMMENT '版本',
  `ability` varchar(500) NOT NULL COMMENT '功能描述',
  `description` varchar(1000) NOT NULL COMMENT '介绍',
  `author` varchar(50) NOT NULL COMMENT '作者',
  `url` varchar(255) NOT NULL COMMENT '发布页面',
  `settings` tinyint(1) NOT NULL DEFAULT '0' COMMENT '扩展设置项',
  `subscribes` varchar(500) NOT NULL DEFAULT '' COMMENT '订阅的消息类型',
  `handles` varchar(500) NOT NULL DEFAULT '' COMMENT '能够直接处理的消息类型',
  `isrulefields` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否有规则嵌入项',
  `issystem` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否是系统模块',
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ims_modules` values('1','basic','','基本文字回复','1.0','和您进行简单对话','一问一答得简单对话. 当访客的对话语句中包含指定关键字, 或对话语句完全等于特定关键字, 或符合某些特定的格式时. 系统自动应答设定好的回复内容.','WeEngine Team','http://www.we7.cc/','0','','','1','1');");
E_D("replace into `ims_modules` values('2','news','','基本混合图文回复','1.0','为你提供生动的图文资讯','一问一答得简单对话, 但是回复内容包括图片文字等更生动的媒体内容. 当访客的对话语句中包含指定关键字, 或对话语句完全等于特定关键字, 或符合某些特定的格式时. 系统自动应答设定好的图文回复内容.','WeEngine Team','http://www.we7.cc/','0','','','1','1');");
E_D("replace into `ims_modules` values('3','music','','基本语音回复','1.0','提供语音、音乐等音频类回复','在回复规则中可选择具有语音、音乐等音频类的回复内容，并根据用户所设置的特定关键字精准的返回给粉丝，实现一问一答得简单对话。','WeEngine Team','http://www.we7.cc/','0','','','1','1');");
E_D("replace into `ims_modules` values('4','userapi','','自定义接口回复','1.1','更方便的第三方接口设置','自定义接口又称第三方接口，可以让开发者更方便的接入微动力系统，高效的与微信公众平台进行对接整合。','WeEngine Team','http://www.we7.cc/','0','','','1','1');");
E_D("replace into `ims_modules` values('5','fans','customer','粉丝管理','1.1','关注的粉丝管理','','WeEngine Team','http://bbs.we7.cc/forum.php?mod=forumdisplay&fid=36&filter=typeid&typeid=1','0','a:8:{i:0;s:4:\"text\";i:1;s:5:\"image\";i:2;s:5:\"voice\";i:3;s:5:\"video\";i:4;s:8:\"location\";i:5;s:4:\"link\";i:6;s:9:\"subscribe\";i:7;s:11:\"unsubscribe\";}','a:0:{}','0','1');");
E_D("replace into `ims_modules` values('6','member','customer','微会员','1.2','会员管理','会员管理','WeEngine Team','','0','a:0:{}','','0','1');");

require("../../inc/footer.php");
?>