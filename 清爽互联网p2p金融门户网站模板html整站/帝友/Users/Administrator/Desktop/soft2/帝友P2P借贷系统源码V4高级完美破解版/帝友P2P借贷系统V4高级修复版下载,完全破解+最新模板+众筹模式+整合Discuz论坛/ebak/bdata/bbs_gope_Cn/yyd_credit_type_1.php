<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_credit_type`;");
E_C("CREATE TABLE `yyd_credit_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '????????',
  `nid` varchar(50) DEFAULT NULL COMMENT '???????',
  `code` varchar(50) NOT NULL COMMENT '???',
  `status` int(2) NOT NULL COMMENT '??',
  `class_id` varchar(50) NOT NULL COMMENT '????',
  `value` int(11) DEFAULT '0' COMMENT '???????',
  `cycle` tinyint(1) DEFAULT '2' COMMENT '?????????1:???,2:???,3:????????,4:????',
  `award_times` tinyint(4) DEFAULT NULL COMMENT '????????,0:????',
  `interval` int(11) DEFAULT '1' COMMENT '???????????��????',
  `remark` varchar(256) DEFAULT NULL COMMENT '???',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_ct_nid` (`nid`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=gbk COMMENT='????????'");
E_D("replace into `yyd_credit_type` values('1','ʵ����֤','realname','payment','1','6','5','1','1','0','');");
E_D("replace into `yyd_credit_type` values('2','�ֻ���֤','phone','payment','1','6','2','1','1','0','');");
E_D("replace into `yyd_credit_type` values('3','ѧ����֤','education','payment','1','6','2','1','1','60','');");
E_D("replace into `yyd_credit_type` values('4','��Ƶ��֤','video','payment','1','6','3','1','1','0','');");
E_D("replace into `yyd_credit_type` values('36','VIP��ֵ��ҳ��','vip_gold','payment','1','4','-20','3',NULL,'525600',NULL);");
E_D("replace into `yyd_credit_type` values('33','���Ƹ�����Ϣ','info_credit','credit','1','6','2','1','1','60','');");
E_D("replace into `yyd_credit_type` values('7','����ɹ�','borrow_success','borrow','1','3','1','4','1','0','');");
E_D("replace into `yyd_credit_type` values('8','�ٻ���','borrow_repay_slow','borrow','1','3','-100','4','1','60','');");
E_D("replace into `yyd_credit_type` values('9','һ�����ڻ���','borrow_repay_late_common','borrow','1','3','-200','4','1','60','');");
E_D("replace into `yyd_credit_type` values('10','�������ڻ���','borrow_repay_late_serious','borrow','1','3','-300','4','1','60','');");
E_D("replace into `yyd_credit_type` values('11','�������ڻ���','borrow_repay_late_spite','links','1','6','-400','4','1','60','');");
E_D("replace into `yyd_credit_type` values('13','�յ�������Ϣ','tender_repay_time','borrow','1','4','0','4','1','60','');");
E_D("replace into `yyd_credit_type` values('14','Ͷ����ǰ����','tender_repay_advance','links','1','4','0','4','1','60','');");
E_D("replace into `yyd_credit_type` values('15','��ʱ����','tender_repay_ontime','borrow','1','4','0','4','1','60','');");
E_D("replace into `yyd_credit_type` values('34','������Ϣ','work_credit','credit','1','6','3','1','1','60','');");
E_D("replace into `yyd_credit_type` values('35','�Ʋ���Ϣ','finance_credit','credit','1','6','5','1','1','60','');");
E_D("replace into `yyd_credit_type` values('26','����ѧϰ����','borrow_study','borrow','1','6','5','1','1','0','');");
E_D("replace into `yyd_credit_type` values('29','��Աע��','reg','payment','1','4','30','1','1','0','');");
E_D("replace into `yyd_credit_type` values('30','����ע��','invite','payment','1','4','10','4','0','0','');");
E_D("replace into `yyd_credit_type` values('31','������Ͷ��ɹ�','tender_invite','borrow','1','4','1','4','0','0','');");
E_D("replace into `yyd_credit_type` values('37','��Ҫ��ϵ����Ϣ','contact_credit','credit','1','6','5','1','1','60','');");

require("../../inc/footer.php");
?>