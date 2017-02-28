<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_linkages_type`;");
E_C("CREATE TABLE `yyd_linkages_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '????????',
  `nid` varchar(50) DEFAULT NULL COMMENT '????????',
  `code` varchar(50) NOT NULL COMMENT '???????',
  `order` int(11) NOT NULL COMMENT '????',
  PRIMARY KEY (`id`),
  KEY `nid` (`nid`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=gbk");
E_D("replace into `yyd_linkages_type` values('1','��ֵ����','account_recharge_type','account','10');");
E_D("replace into `yyd_linkages_type` values('2','��ֵ״̬','account_recharge_status','account','10');");
E_D("replace into `yyd_linkages_type` values('3','�ʽ�����','account_type','account','10');");
E_D("replace into `yyd_linkages_type` values('4','�����˻�״̬','account_bank_status','account','10');");
E_D("replace into `yyd_linkages_type` values('5','���״̬','borrow_status','borrow','10');");
E_D("replace into `yyd_linkages_type` values('6','�������','borrow_type','borrow','10');");
E_D("replace into `yyd_linkages_type` values('7','�������','borrow_flag','borrow','10');");
E_D("replace into `yyd_linkages_type` values('8','������','borrow_query_type','borrow','10');");
E_D("replace into `yyd_linkages_type` values('9','���ʽ','borrow_style','borrow','10');");
E_D("replace into `yyd_linkages_type` values('10','�����;','borrow_use','borrow','10');");
E_D("replace into `yyd_linkages_type` values('11','�������','borrow_period','borrow','10');");
E_D("replace into `yyd_linkages_type` values('12','Ͷ������޶�','borrow_tender_account_min','borrow','10');");
E_D("replace into `yyd_linkages_type` values('13','Ͷ������޶�','borrow_tender_account_max','borrow','10');");
E_D("replace into `yyd_linkages_type` values('14','�����ֱ�','borrow_cash_status','borrow','10');");
E_D("replace into `yyd_linkages_type` values('15','�Ƿ񲿷ֽ��','borrow_part_status','borrow','10');");
E_D("replace into `yyd_linkages_type` values('16','��ʾ����','borrow_view_type','borrow','10');");
E_D("replace into `yyd_linkages_type` values('17','��������','borrow_award_status','borrow','10');");
E_D("replace into `yyd_linkages_type` values('18','�����˵���״̬','borrow_vouch_user_status','borrow','10');");
E_D("replace into `yyd_linkages_type` values('19','��������״̬','borrow_vouch_award_status','borrow','10');");
E_D("replace into `yyd_linkages_type` values('20','Ͷ��״̬','borrow_tender_verify_status','borrow','10');");
E_D("replace into `yyd_linkages_type` values('21','�Ƿ��Զ�Ͷ��','borrow_tender_auto_status','borrow','10');");
E_D("replace into `yyd_linkages_type` values('22','Ͷ��״̬','borrow_tender_status','borrow','10');");
E_D("replace into `yyd_linkages_type` values('23','ѧУ����','rating_school','rating','10');");
E_D("replace into `yyd_linkages_type` values('24','ѧ������','rating_education','rating','10');");
E_D("replace into `yyd_linkages_type` values('25','��֤״̬','rating_approve_status','rating','10');");
E_D("replace into `yyd_linkages_type` values('26','��֤״̬','approve_status','approve','10');");
E_D("replace into `yyd_linkages_type` values('27','���ŷ���״̬','approve_sms_status','approve','10');");
E_D("replace into `yyd_linkages_type` values('28','���ŷ�������','approve_sms_type','approve','10');");
E_D("replace into `yyd_linkages_type` values('29','����״��','rating_marry','rating','10');");
E_D("replace into `yyd_linkages_type` values('30','�Ա�','rating_sex','rating','10');");
E_D("replace into `yyd_linkages_type` values('31','����','rating_children','rating','10');");
E_D("replace into `yyd_linkages_type` values('32','������','rating_income','rating','10');");
E_D("replace into `yyd_linkages_type` values('33','���','rating_dignity','rating','10');");
E_D("replace into `yyd_linkages_type` values('34','�Ƿ񹺳�','rating_car','rating','10');");
E_D("replace into `yyd_linkages_type` values('35','��ϵ','rating_relation','rating','10');");
E_D("replace into `yyd_linkages_type` values('36','��������','rating_workyear','rating','10');");
E_D("replace into `yyd_linkages_type` values('37','��ծ����','rating_assetstype','rating','10');");
E_D("replace into `yyd_linkages_type` values('38','�ʽ�����','rating_use_type','rating','10');");
E_D("replace into `yyd_linkages_type` values('39','֧������','rating_payment','rating','10');");
E_D("replace into `yyd_linkages_type` values('40','ס������','rating_house','rating','10');");
E_D("replace into `yyd_linkages_type` values('41','��������','rating_revenue','rating','10');");
E_D("replace into `yyd_linkages_type` values('42','��������','rating_finance','rating','10');");
E_D("replace into `yyd_linkages_type` values('43','��Чʱ��','borrow_valid_time','borrow','10');");
E_D("replace into `yyd_linkages_type` values('44','����','account_bank','account','10');");
E_D("replace into `yyd_linkages_type` values('45','��������','liuyan_type','system','10');");
E_D("replace into `yyd_linkages_type` values('46','id5��֤״̬','approve_cardid_status','approve','10');");
E_D("replace into `yyd_linkages_type` values('47','�����','borrow_account','system','10');");
E_D("replace into `yyd_linkages_type` values('48','�ٱ�����','rebut_type','system','10');");
E_D("replace into `yyd_linkages_type` values('49','���״̬','borrow_type_nid','system','10');");
E_D("replace into `yyd_linkages_type` values('50','��������','friends_type','system','10');");
E_D("replace into `yyd_linkages_type` values('51','�·�','spread_month','system','10');");
E_D("replace into `yyd_linkages_type` values('52','��վ�渶�������','account_web_type','system','10');");
E_D("replace into `yyd_linkages_type` values('53','��վ�ʽ�����','account_web_fee','system','10');");
E_D("replace into `yyd_linkages_type` values('54','���ֳɹ�','cash_success','system','10');");
E_D("replace into `yyd_linkages_type` values('55','���ճ�����','fengxianchi_type','system','10');");
E_D("replace into `yyd_linkages_type` values('56','����޶�','second_limit_money','system','10');");
E_D("replace into `yyd_linkages_type` values('57','������','borrow_object','system','10');");
E_D("replace into `yyd_linkages_type` values('58','�ڳ���Ŀ���','raise_type','system','10');");

require("../../inc/footer.php");
?>