<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_common_nav`;");
E_C("CREATE TABLE `pre_common_nav` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `identifier` varchar(255) NOT NULL,
  `target` tinyint(1) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `available` tinyint(1) NOT NULL DEFAULT '0',
  `displayorder` tinyint(3) NOT NULL,
  `highlight` tinyint(1) NOT NULL DEFAULT '0',
  `level` tinyint(1) NOT NULL DEFAULT '0',
  `subtype` tinyint(1) NOT NULL DEFAULT '0',
  `subcols` tinyint(1) NOT NULL DEFAULT '0',
  `icon` varchar(255) NOT NULL,
  `subname` varchar(255) NOT NULL,
  `suburl` varchar(255) NOT NULL,
  `navtype` tinyint(1) NOT NULL DEFAULT '0',
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `navtype` (`navtype`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=gbk");
E_D("replace into `pre_common_nav` values('1','0','�Ż�','Portal','portal.php','1','0','0','-1','1','0','0','0','0','','','','0','');");
E_D("replace into `pre_common_nav` values('2','0','��̳','BBS','forum.php','2','0','0','1','2','0','0','0','0','','','','0','');");
E_D("replace into `pre_common_nav` values('3','0','Ⱥ��','Group','group.php','3','0','0','-1','7','0','0','0','0','','','','0','');");
E_D("replace into `pre_common_nav` values('4','0','��̬','Space','home.php','4','0','0','-1','8','0','0','0','0','','','','0','');");
E_D("replace into `pre_common_nav` values('5','0','��Ϸ','Manyou','userapp.php','5','0','0','1','6','0','0','0','0','','','','0','');");
E_D("replace into `pre_common_nav` values('6','0','���','Plugin','#','6','0','0','1','9','0','0','0','0','','','','0','');");
E_D("replace into `pre_common_nav` values('7','0','����','Help','misc.php?mod=faq','7','0','0','0','10','0','0','0','0','','','','0','');");
E_D("replace into `pre_common_nav` values('8','0','���а�','Ranklist','misc.php?mod=ranklist','8','0','0','-1','16','0','0','0','0','','','','0','');");
E_D("replace into `pre_common_nav` values('9','0','�㲥','Follow','home.php?mod=follow','9','0','0','-1','5','0','0','0','0','','','','0','');");
E_D("replace into `pre_common_nav` values('10','0','����','Guide','forum.php?mod=guide','10','0','0','-1','3','0','0','0','0','','','','0','');");
E_D("replace into `pre_common_nav` values('11','0','����','Collection','forum.php?mod=collection','11','0','0','-1','11','0','0','0','0','','','','0','');");
E_D("replace into `pre_common_nav` values('12','0','��־','Blog','home.php?mod=space&do=blog','12','0','0','-1','12','0','0','0','0','','','','0','');");
E_D("replace into `pre_common_nav` values('13','0','���','Album','home.php?mod=space&do=album','13','0','0','-1','13','0','0','0','0','','','','0','');");
E_D("replace into `pre_common_nav` values('14','0','����','Share','home.php?mod=space&do=share','14','0','0','-1','14','0','0','0','0','','','','0','');");
E_D("replace into `pre_common_nav` values('15','0','��¼','Doing','home.php?mod=space&do=doing','15','0','0','-1','15','0','0','0','0','','','','0','');");
E_D("replace into `pre_common_nav` values('16','0','վ��ͳ��','','misc.php?mod=stat','stat','0','0','1','1','0','0','0','0','','','','1','');");
E_D("replace into `pre_common_nav` values('17','0','�ٱ�','','#','report','0','0','1','2','0','0','0','0','','','','1','');");
E_D("replace into `pre_common_nav` values('18','0','Archiver','','archiver/','archiver','0','0','1','3','0','0','0','0','','','','1','');");
E_D("replace into `pre_common_nav` values('19','0','�ֻ���','','forum.php?mobile=yes','mobile','0','0','1','3','0','0','0','0','','','','1','');");
E_D("replace into `pre_common_nav` values('20','0','��־','','home.php?mod=space&do=blog','blog','0','0','-1','2','0','0','0','0','{STATICURL}image/feed/blog.gif','����','home.php?mod=spacecp&ac=blog','2','');");
E_D("replace into `pre_common_nav` values('21','0','���','','home.php?mod=space&do=album','album','0','0','-1','3','0','0','0','0','{STATICURL}image/feed/album.gif','�ϴ�','home.php?mod=spacecp&ac=upload','2','');");
E_D("replace into `pre_common_nav` values('22','0','����','','home.php?mod=space&do=share','share','0','0','-1','4','0','0','0','0','{STATICURL}image/feed/share.gif','���','home.php?mod=spacecp&ac=share','2','');");
E_D("replace into `pre_common_nav` values('23','0','��¼','','home.php?mod=space&do=doing','doing','0','0','-1','5','0','0','0','0','{STATICURL}image/feed/doing.gif','','','2','');");
E_D("replace into `pre_common_nav` values('24','0','�㲥','','home.php?mod=follow','follow','0','0','-1','6','0','0','0','0','{STATICURL}image/feed/follow.gif','','','2','');");
E_D("replace into `pre_common_nav` values('25','0','{userpanelarea1}','','','','0','0','1','7','0','0','0','0','','','','2','');");
E_D("replace into `pre_common_nav` values('26','0','{hr}','','','','0','1','1','8','0','0','0','0','','','','2','');");
E_D("replace into `pre_common_nav` values('27','0','{userpanelarea2}','','','','0','0','1','9','0','0','0','0','','','','2','');");
E_D("replace into `pre_common_nav` values('28','0','����','','home.php?mod=space&do=friend','friend','0','0','1','1','0','0','0','0','{STATICURL}image/feed/friend_b.png','','','3','');");
E_D("replace into `pre_common_nav` values('29','0','����','','forum.php?mod=guide&view=my','thread','0','0','1','2','0','0','0','0','{STATICURL}image/feed/thread_b.png','','','3','');");
E_D("replace into `pre_common_nav` values('30','0','�ղ�','','home.php?mod=space&do=favorite&view=me','favorite','0','0','1','3','0','0','0','0','{STATICURL}image/feed/favorite_b.png','','','3','');");
E_D("replace into `pre_common_nav` values('31','0','����','','home.php?mod=magic','magic','0','0','1','4','0','0','0','0','{STATICURL}image/feed/magic_b.png','','','3','');");
E_D("replace into `pre_common_nav` values('32','0','ѫ��','','home.php?mod=medal','medal','0','0','1','5','0','0','0','0','{STATICURL}image/feed/medal_b.png','','','3','');");
E_D("replace into `pre_common_nav` values('33','0','����','','home.php?mod=task','task','0','0','1','6','0','0','0','0','{STATICURL}image/feed/task_b.png','','','3','');");
E_D("replace into `pre_common_nav` values('34','0','����','','forum.php?mod=collection&op=my','collection','0','0','-1','7','0','0','0','0','{STATICURL}image/feed/collection_b.png','','','3','');");
E_D("replace into `pre_common_nav` values('35','0','��̬','','home.php','feed','0','0','-1','8','0','0','0','0','{STATICURL}image/feed/feed_b.png','','','3','');");
E_D("replace into `pre_common_nav` values('36','0','��־','','home.php?mod=space&do=blog','blog','0','0','-1','9','0','0','0','0','{STATICURL}image/feed/blog_b.png','','','3','');");
E_D("replace into `pre_common_nav` values('37','0','���','','home.php?mod=space&do=album','album','0','0','-1','10','0','0','0','0','{STATICURL}image/feed/album_b.png','','','3','');");
E_D("replace into `pre_common_nav` values('38','0','����','','home.php?mod=space&do=share','share','0','0','-1','11','0','0','0','0','{STATICURL}image/feed/share_b.png','','','3','');");
E_D("replace into `pre_common_nav` values('39','0','��¼','','home.php?mod=space&do=doing','doing','0','0','-1','12','0','0','0','0','{STATICURL}image/feed/doing_b.png','','','3','');");
E_D("replace into `pre_common_nav` values('40','0','���԰�','','home.php?mod=space&do=wall','wall','0','0','-1','13','0','0','0','0','{STATICURL}image/feed/wall_b.png','','','3','');");
E_D("replace into `pre_common_nav` values('41','0','�㲥','','home.php?mod=follow','follow','0','0','-1','14','0','0','0','0','{STATICURL}image/feed/follow_b.png','','','3','');");
E_D("replace into `pre_common_nav` values('42','0','Ⱥ��','','group.php','group','0','0','-1','15','0','0','0','0','{STATICURL}image/feed/group_b.png','','','3','');");
E_D("replace into `pre_common_nav` values('43','0','�Ż�','','portal.php','portal','0','0','-1','16','0','0','0','0','{STATICURL}image/feed/portal_b.png','','','3','');");
E_D("replace into `pre_common_nav` values('44','0','����','','forum.php?mod=guide','guide','0','0','-1','17','0','0','0','0','{STATICURL}image/feed/guide_b.png','','','3','');");
E_D("replace into `pre_common_nav` values('45','0','���а�','','misc.php?mod=ranklist','ranklist','0','0','-1','18','0','0','0','0','{STATICURL}image/feed/ranklist_b.png','','','3','');");
E_D("replace into `pre_common_nav` values('46','0','��Ϊ��ҳ','','#','sethomepage','0','0','1','1','0','0','0','0','','','','4','');");
E_D("replace into `pre_common_nav` values('47','0','�ղر�վ','','#','setfavorite','0','0','1','2','0','0','0','0','','','','4','');");
E_D("replace into `pre_common_nav` values('48','0','��ҳ','home','/','','0','1','1','1','0','0','1','0','','','','0','');");
E_D("replace into `pre_common_nav` values('49','0','Ͷ�����','','/invest/index.html','','0','1','1','4','0','0','0','0','','','','0','');");
E_D("replace into `pre_common_nav` values('50','0','�������','','/borrow/index.html','','0','1','1','3','0','0','0','0','','','','0','');");
E_D("replace into `pre_common_nav` values('51','0','�ʺ�����','','/?user','','0','1','1','5','0','0','0','0','','','','0','');");
E_D("replace into `pre_common_nav` values('52','0','�ͷ�����','','/kefu/index.html','','0','1','1','6','0','0','0','0','','','','0','');");
E_D("replace into `pre_common_nav` values('53','0','���¹���','','/bbs/forum.php?mod=forumdisplay&fid=37','','0','1','1','8','0','0','0','0','','','','0','');");
E_D("replace into `pre_common_nav` values('54','0','ҵ������','','/bbs/forum.php?mod=forumdisplay&fid=42','','0','1','0','8','0','0','0','0','','','','0','');");

require("../../inc/footer.php");
?>