<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_forum_bbcode`;");
E_C("CREATE TABLE `pre_forum_bbcode` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `available` tinyint(1) NOT NULL DEFAULT '0',
  `tag` varchar(100) NOT NULL DEFAULT '',
  `icon` varchar(255) NOT NULL,
  `replacement` text NOT NULL,
  `example` varchar(255) NOT NULL DEFAULT '',
  `explanation` text NOT NULL,
  `params` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `prompt` text NOT NULL,
  `nest` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `displayorder` tinyint(3) NOT NULL DEFAULT '0',
  `perm` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `pre_forum_bbcode` values('1','0','fly','bb_fly.gif','<marquee width=\"90%\" scrollamount=\"3\">{1}</marquee>','[fly]This is sample text[/fly]','ʹ���ݺ�����������Ч������ HTML �� marquee ��ǩ��ע�⣺���Ч��ֻ�� Internet Explorer ���������Ч��','1','�����������ʾ������:','1','19','1	2	3	12	13	14	15	16	17	18	19');");
E_D("replace into `pre_forum_bbcode` values('2','1','qq','bb_qq.gif','<a href=\"http://wpa.qq.com/msgrd?V=1&Uin={1}&amp;Site=[Discuz!]&amp;Menu=yes\" target=\"_blank\"><img src=\"http://wpa.qq.com/pa?p=1:{1}:1\" border=\"0\"></a>','[qq]688888[/qq]','��ʾ QQ ����״̬�������ͼ����Ժ�������������','1','��������ʾ����״̬ QQ ����:','1','21','1	2	3	12	13	14	15	16	17	18	19');");
E_D("replace into `pre_forum_bbcode` values('3','0','sup','bb_sup.gif','<sup>{1}</sup>','X[sup]2[/sup]','�ϱ�','1','�������ϱ����֣�','1','22','1	2	3	12	13	14	15	16	17	18	19');");
E_D("replace into `pre_forum_bbcode` values('4','0','sub','bb_sub.gif','<sub>{1}</sub>','X[sub]2[/sub]','�±�','1','�������±����֣�','1','23','1	2	3	12	13	14	15	16	17	18	19');");

require("../../inc/footer.php");
?>