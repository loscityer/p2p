<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_attestations`;");
E_C("CREATE TABLE `yyd_attestations` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `upfiles_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(2) NOT NULL COMMENT '??',
  `credit` int(11) NOT NULL COMMENT '????',
  `addtime` varchar(30) NOT NULL,
  `addip` varchar(30) NOT NULL,
  `verify_time` varchar(30) NOT NULL,
  `verify_userid` int(11) NOT NULL,
  `verify_remark` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1047 DEFAULT CHARSET=gbk");
E_D("replace into `yyd_attestations` values('1015','1934','3574','25','0','0','5','1387431411','124.156.66.44','','0','');");
E_D("replace into `yyd_attestations` values('1016','1938','3575','5','0','0','5','1387448496','124.156.66.44','','0','');");
E_D("replace into `yyd_attestations` values('1017','1942','3576','5','0','1','5','1387531374','171.216.224.66','1387531503','0','�����');");
E_D("replace into `yyd_attestations` values('1018','1942','3577','2','0','1','10','1387531389','171.216.224.66','1387531497','0','�����');");
E_D("replace into `yyd_attestations` values('1019','1942','3578','3','0','1','5','1387531409','171.216.224.66','1387531490','0','�����');");
E_D("replace into `yyd_attestations` values('1020','1942','3579','17','0','1','10','1387531424','171.216.224.66','1387531481','0','�����');");
E_D("replace into `yyd_attestations` values('1021','1942','3580','18','0','1','15','1387531438','171.216.224.66','1387531476','0','�����');");
E_D("replace into `yyd_attestations` values('1022','1942','3581','4','0','1','5','1387531452','171.216.224.66','1387531465','0','�����');");
E_D("replace into `yyd_attestations` values('1023','1934','3591','5','0','1','5','1390036748','124.156.66.241','1390036818','0','�����');");
E_D("replace into `yyd_attestations` values('1024','1934','3592','2','0','1','10','1390036755','124.156.66.241','1390036814','0','�����');");
E_D("replace into `yyd_attestations` values('1025','1934','3593','3','0','1','5','1390036762','124.156.66.241','1390036811','0','�����');");
E_D("replace into `yyd_attestations` values('1026','1934','3594','17','0','1','10','1390036772','124.156.66.241','1390036807','0','�����');");
E_D("replace into `yyd_attestations` values('1027','1934','3595','18','0','1','15','1390036779','124.156.66.241','1390036803','0','�����');");
E_D("replace into `yyd_attestations` values('1028','1934','3596','4','0','1','5','1390036785','124.156.66.241','1390036798','0','�����');");
E_D("replace into `yyd_attestations` values('1029','1946','3598','5','0','1','5','1392128284','113.87.124.251','1392129202','0','�����');");
E_D("replace into `yyd_attestations` values('1030','1946','3602','2','0','1','10','1393344378','14.127.24.153','1393345076','0','�����');");
E_D("replace into `yyd_attestations` values('1031','1946','3603','3','0','1','5','1393344708','14.127.24.153','1393345069','0','�����');");
E_D("replace into `yyd_attestations` values('1032','1946','3604','17','0','1','10','1393344930','14.127.24.153','1393345058','0','�����');");
E_D("replace into `yyd_attestations` values('1033','1946','3605','18','0','1','15','1393344970','14.127.24.153','1393345049','0','�����');");
E_D("replace into `yyd_attestations` values('1034','1946','3606','4','0','1','5','1393345014','14.127.24.153','1393345038','0','�����');");
E_D("replace into `yyd_attestations` values('1035','1956','3607','5','0','1','5','1393346651','14.127.24.153','1393346738','0','�����');");
E_D("replace into `yyd_attestations` values('1036','1956','3608','2','0','1','10','1393346672','14.127.24.153','1393346782','0','�����');");
E_D("replace into `yyd_attestations` values('1037','1956','3609','3','0','1','5','1393346683','14.127.24.153','1393346767','0','�����');");
E_D("replace into `yyd_attestations` values('1038','1956','3610','17','0','1','10','1393346695','14.127.24.153','1393346758','0','�����');");
E_D("replace into `yyd_attestations` values('1039','1956','3611','18','0','1','15','1393346710','14.127.24.153','1393346751','0','�����');");
E_D("replace into `yyd_attestations` values('1040','1956','3612','4','0','1','5','1393346726','14.127.24.153','1393723751','0','�����');");
E_D("replace into `yyd_attestations` values('1041','1983','3639','5','0','1','5','1399717126','124.207.38.24','1399717283','0','�����');");
E_D("replace into `yyd_attestations` values('1042','1983','3640','2','0','1','10','1399717139','124.207.38.24','1399717274','0','�����');");
E_D("replace into `yyd_attestations` values('1043','1983','3641','3','0','1','5','1399717155','124.207.38.24','1399717265','0','�����');");
E_D("replace into `yyd_attestations` values('1044','1983','3642','17','0','1','10','1399717172','124.207.38.24','1399717256','0','�����');");
E_D("replace into `yyd_attestations` values('1045','1983','3643','18','0','1','15','1399717185','124.207.38.24','1399717248','0','�����');");
E_D("replace into `yyd_attestations` values('1046','1983','3644','4','0','1','5','1399717212','124.207.38.24','1399717232','0','�����');");

require("../../inc/footer.php");
?>