<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_common_cron`;");
E_C("CREATE TABLE `pre_common_cron` (
  `cronid` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `available` tinyint(1) NOT NULL DEFAULT '0',
  `type` enum('user','system') NOT NULL DEFAULT 'user',
  `name` char(50) NOT NULL DEFAULT '',
  `filename` char(50) NOT NULL DEFAULT '',
  `lastrun` int(10) unsigned NOT NULL DEFAULT '0',
  `nextrun` int(10) unsigned NOT NULL DEFAULT '0',
  `weekday` tinyint(1) NOT NULL DEFAULT '0',
  `day` tinyint(2) NOT NULL DEFAULT '0',
  `hour` tinyint(2) NOT NULL DEFAULT '0',
  `minute` char(36) NOT NULL DEFAULT '',
  PRIMARY KEY (`cronid`),
  KEY `nextrun` (`available`,`nextrun`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=gbk");
E_D("replace into `pre_common_cron` values('1','1','system','清空今日发帖数','cron_todaypost_daily.php','1411173960','1411228800','-1','-1','0','0');");
E_D("replace into `pre_common_cron` values('2','1','system','清空本月在线时间','cron_onlinetime_monthly.php','1409738908','1412092800','-1','1','0','0');");
E_D("replace into `pre_common_cron` values('3','1','system','每日数据清理','cron_cleanup_daily.php','1409742540','1409779800','-1','-1','5','30');");
E_D("replace into `pre_common_cron` values('5','1','system','每日公告清理','cron_announcement_daily.php','1411173963','1411228800','-1','-1','0','0');");
E_D("replace into `pre_common_cron` values('6','1','system','限时操作清理','cron_threadexpiry_hourly.php','1411173957','1411174800','-1','-1','-1','0');");
E_D("replace into `pre_common_cron` values('7','1','system','论坛推广清理','cron_promotion_hourly.php','1411173970','1411228800','-1','-1','0','00');");
E_D("replace into `pre_common_cron` values('8','1','system','每月主题清理','cron_cleanup_monthly.php','1409738908','1412114400','-1','1','6','00');");
E_D("replace into `pre_common_cron` values('9','1','system','道具自动补货','cron_magic_daily.php','1411173986','1411228800','-1','-1','0','0');");
E_D("replace into `pre_common_cron` values('10','1','system','每日验证问答更新','cron_secqaa_daily.php','1409742565','1409781600','-1','-1','6','0');");
E_D("replace into `pre_common_cron` values('11','1','system','每日标签更新','cron_tag_daily.php','1409742562','1409760000','-1','-1','0','0');");
E_D("replace into `pre_common_cron` values('12','1','system','每日勋章更新','cron_medal_daily.php','1409742564','1409760000','-1','-1','0','0');");
E_D("replace into `pre_common_cron` values('13','1','system','清理过期动态','cron_cleanfeed.php','1409742564','1409760000','-1','-1','0','0');");
E_D("replace into `pre_common_cron` values('14','1','system','每日获取安全补丁','cron_checkpatch_daily.php','1409740808','1409768520','-1','-1','2','22');");
E_D("replace into `pre_common_cron` values('15','1','system','定时发布主题','cron_publish_halfhourly.php','1411173954','1411174800','-1','-1','-1','0	30');");
E_D("replace into `pre_common_cron` values('16','1','system','每周广播归档','cron_follow_daily.php','1409738913','1409767200','-1','-1','2','0');");
E_D("replace into `pre_common_cron` values('17','1','system','更新每日查看数','cron_todayviews_daily.php','1409740808','1409770800','-1','-1','3','0	5	10	15	20	25	30	35	40	45	50	55');");
E_D("replace into `pre_common_cron` values('18','0','system','每日用户表优化','cron_member_optimize_daily.php','0','1365570219','-1','-1','2','0	5	10	15	20	25	30	35	40	45	50	55');");
E_D("replace into `pre_common_cron` values('19','1','user','','cron_security_daily.php','1409738915','1409767200','-1','-1','2','0');");

require("../../inc/footer.php");
?>