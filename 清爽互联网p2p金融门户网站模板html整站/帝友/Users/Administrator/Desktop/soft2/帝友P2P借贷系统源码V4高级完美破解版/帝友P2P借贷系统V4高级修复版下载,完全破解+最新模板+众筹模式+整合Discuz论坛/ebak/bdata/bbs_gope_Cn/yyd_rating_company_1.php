<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_rating_company`;");
E_C("CREATE TABLE `yyd_rating_company` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '???????',
  `status` int(2) NOT NULL COMMENT '?????0????????��?1????????2???��???',
  `name` varchar(100) NOT NULL COMMENT '???????',
  `tel` varchar(100) NOT NULL COMMENT '?��',
  `address` varchar(200) NOT NULL COMMENT '??????',
  `license_num` varchar(30) NOT NULL COMMENT '????',
  `tax_num_guo` varchar(30) NOT NULL COMMENT '?????(???)',
  `tax_num_di` varchar(30) NOT NULL COMMENT '?????(???)',
  `rent_time` varchar(30) NOT NULL COMMENT '????',
  `rent_money` varchar(30) NOT NULL COMMENT '????',
  `hangye` varchar(30) NOT NULL,
  `people` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `verify_userid` int(11) NOT NULL,
  `verify_remark` varchar(200) NOT NULL,
  `verify_time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=gbk COMMENT='?????'");
E_D("replace into `yyd_rating_company` values('12','1934','1','�����Ƽ����޹�˾','','XB3232323232','XB3232323232','XB3232323232','XB3232323232','XB3232323232','XB3232323232','XB3232323232','XB3232323232','XB3232323232','0','','');");
E_D("replace into `yyd_rating_company` values('13','1942','1','ľ��','','001','xxxoo0011','','1244','12','1200','���ز�','20','2009','0','','');");
E_D("replace into `yyd_rating_company` values('14','1956','1','��ݸ�й�����Ӱ�Ӵ�ý���޹�˾','','��ݸ����ɽ�����������B69','��ICP��12057651��','��ICP��12057651��','2010��','5��','10��','Ӱ��ҵ','200��','2010��','0','','');");

require("../../inc/footer.php");
?>