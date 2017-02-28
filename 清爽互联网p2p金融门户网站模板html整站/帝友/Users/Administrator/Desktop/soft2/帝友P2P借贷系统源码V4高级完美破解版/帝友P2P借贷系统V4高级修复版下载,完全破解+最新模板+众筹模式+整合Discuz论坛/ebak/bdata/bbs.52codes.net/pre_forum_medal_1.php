<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_forum_medal`;");
E_C("CREATE TABLE `pre_forum_medal` (
  `medalid` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `available` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `displayorder` tinyint(3) NOT NULL DEFAULT '0',
  `description` varchar(255) NOT NULL,
  `expiration` smallint(6) unsigned NOT NULL DEFAULT '0',
  `permission` mediumtext NOT NULL,
  `credit` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `price` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`medalid`),
  KEY `displayorder` (`displayorder`),
  KEY `available` (`available`,`displayorder`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk");
E_D("replace into `pre_forum_medal` values('1','�������','0','medal1.gif','0','0','ע���˺ź���������Ļ�Ա','0','','0','0');");
E_D("replace into `pre_forum_medal` values('2','��Ծ��Ա','0','medal2.gif','0','0','����������໰������ۣ��������ݽ�������','0','','0','0');");
E_D("replace into `pre_forum_medal` values('3','���Ļ�Ա','0','medal3.gif','0','0','��������������Ա����','0','','0','0');");
E_D("replace into `pre_forum_medal` values('4','�ƹ����','0','medal4.gif','0','0','����������վ��Ϊ��վ��������ע���Ա','0','','0','0');");
E_D("replace into `pre_forum_medal` values('5','��������','0','medal5.gif','0','0','����������վ��Ϊ��վ����������û�������','0','','0','0');");
E_D("replace into `pre_forum_medal` values('6','��ˮ֮��','0','medal6.gif','0','0','��������̳�������ҷ������ϴ�','0','','0','0');");
E_D("replace into `pre_forum_medal` values('7','ͻ������','0','medal7.gif','0','0','���ڶ���̳�ķ��ٶ�����Ŭ��������������������','0','','0','0');");
E_D("replace into `pre_forum_medal` values('8','�������','0','medal8.gif','0','0','��Ծ�Ҿ���ְ�صİ���','0','','0','0');");
E_D("replace into `pre_forum_medal` values('9','��������','0','medal9.gif','0','0','����Ϊ��̳����ͻ������Ŀǰ����ְ�İ���','0','','0','0');");
E_D("replace into `pre_forum_medal` values('10','��̳Ԫ��','0','medal10.gif','0','0','Ϊ��̳����ͻ�����׵Ļ�Ա','0','','0','0');");

require("../../inc/footer.php");
?>