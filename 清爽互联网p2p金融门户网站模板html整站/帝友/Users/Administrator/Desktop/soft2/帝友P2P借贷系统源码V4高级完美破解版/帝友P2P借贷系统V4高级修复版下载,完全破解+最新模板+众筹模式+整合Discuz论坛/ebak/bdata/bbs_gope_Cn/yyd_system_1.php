<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_system`;");
E_C("CREATE TABLE `yyd_system` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) DEFAULT NULL COMMENT '????????',
  `type_id` int(11) NOT NULL,
  `nid` char(32) DEFAULT NULL COMMENT '?????????',
  `value` text COMMENT '?????',
  `code` varchar(32) DEFAULT NULL COMMENT '?????????????',
  `type` varchar(50) NOT NULL COMMENT '????',
  `style` int(2) DEFAULT NULL COMMENT '??????????',
  `status` int(2) DEFAULT NULL COMMENT '??',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=gbk");
E_D("replace into `yyd_system` values('1',NULL,'0','con_webopen','1','','','1','1');");
E_D("replace into `yyd_system` values('2',NULL,'0','con_closemsg','��������','','','1','1');");
E_D("replace into `yyd_system` values('3',NULL,'0','con_webname','��������-ר������С��ҵ��P2B����Ͷ�ʡ��������ƽ̨.','','','1','1');");
E_D("replace into `yyd_system` values('4',NULL,'0','con_weburl','http://test.gope.cn','','','1','1');");
E_D("replace into `yyd_system` values('5',NULL,'0','con_webpath','','','','1','1');");
E_D("replace into `yyd_system` values('6',NULL,'0','con_logo','','','','1','1');");
E_D("replace into `yyd_system` values('7',NULL,'0','con_keywords','��������','','','1','1');");
E_D("replace into `yyd_system` values('8',NULL,'0','con_description','����������ר������С��ҵ��P2B����Ͷ�ʡ��������ƽ̨.ΪͶ������û��ʹ����û������ṩ��ƽ��͸������ȫ����Ч�Ļ��������ڷ���ʵ������վ�ϡ��������������������ڡ��Ķ�λ���ԣ�<br /><br /><br /><br /><br />\r\n','','','1','1');");
E_D("replace into `yyd_system` values('9',NULL,'0','con_beian','','','','1','1');");
E_D("replace into `yyd_system` values('10',NULL,'0','con_template','rongzi','','','1','1');");
E_D("replace into `yyd_system` values('11',NULL,'0','con_tongji','','','','1','1');");
E_D("replace into `yyd_system` values('79','����30������Ͷ������','6','con_bid_limit','0',NULL,'1','1','1');");
E_D("replace into `yyd_system` values('80','���������Ͷ������','6','con_is_Seconds_limit','0',NULL,'1','1','1');");
E_D("replace into `yyd_system` values('12','SMTP������','0','con_email_host','smtp.163.com','email','','1','1');");
E_D("replace into `yyd_system` values('13','�����ַ','0','con_email_url','zhanghao','email','','1','1');");
E_D("replace into `yyd_system` values('14','SMTP�������Ƿ���Ҫ��֤','0','con_email_auth','1','email','1','1','0');");
E_D("replace into `yyd_system` values('15','������Email','0','con_email_from','salqubj@163.com','email','','1','1');");
E_D("replace into `yyd_system` values('16','��������','0','con_email_from_name','��������','email','','1','1');");
E_D("replace into `yyd_system` values('17','��������','0','con_email_password','zh123456','email','','1','1');");
E_D("replace into `yyd_system` values('18','�˿ں�','0','con_email_port','25','email','','1','1');");
E_D("replace into `yyd_system` values('19','�Ƿ�������������','0','con_email_now','1','email','1','1','0');");
E_D("replace into `yyd_system` values('20','�ϴ���ͼƬ�Ƿ�ʹ��ͼƬˮӡ����','0','con_watermark_status','1','','1','1','1');");
E_D("replace into `yyd_system` values('21','ѡ��ˮӡ���ļ�����','0','con_watermark_type','1','','1','1','1');");
E_D("replace into `yyd_system` values('22','ˮӡ�ı�','0','con_watermark_word','BBS.GOPE.CN','','','1','1');");
E_D("replace into `yyd_system` values('23','ˮӡ����','0','con_watermark_font','20','','','1','1');");
E_D("replace into `yyd_system` values('24','ˮӡ��ɫ','0','con_watermark_color','#FF0000','','','1','1');");
E_D("replace into `yyd_system` values('25','ͼƬˮӡ����','0','con_watermark_imgpct','50','','','1','1');");
E_D("replace into `yyd_system` values('26','�ı���Ҫ����','0','con_watermark_txtpct','50','','','1','1');");
E_D("replace into `yyd_system` values('27','ˮӡλ��','0','con_watermark_position','4','','','1','1');");
E_D("replace into `yyd_system` values('71','�Ƿ�������ȡVIP����','1','con_vipfee_now','1',NULL,'1','1','1');");
E_D("replace into `yyd_system` values('28','ˮӡͼƬ','0','con_watermark_file','','','','1','1');");
E_D("replace into `yyd_system` values('29',NULL,'0','con_id5_status','0','id5','','1','1');");
E_D("replace into `yyd_system` values('30',NULL,'0','con_id5_username','shanshui456','id5','','1','1');");
E_D("replace into `yyd_system` values('31',NULL,'0','con_id5_password','shanshui456_~2f83eh=','id5','','1','1');");
E_D("replace into `yyd_system` values('32',NULL,'0','con_id5_fee','','id5','','1','1');");
E_D("replace into `yyd_system` values('33',NULL,'0','con_id5_realname_status','0','id5','','1','1');");
E_D("replace into `yyd_system` values('34',NULL,'0','con_id5_realname_fee','0','id5','','1','1');");
E_D("replace into `yyd_system` values('35',NULL,'0','con_id5_realname_times','0','id5','','1','1');");
E_D("replace into `yyd_system` values('36',NULL,'0','con_id5_edu_status','0','id5','','1','1');");
E_D("replace into `yyd_system` values('37',NULL,'0','con_id5_edu_fee','0','id5','','1','1');");
E_D("replace into `yyd_system` values('38',NULL,'0','con_id5_edu_times','0','id5','','1','1');");
E_D("replace into `yyd_system` values('70',NULL,'0','con_sms_url','','','','1','1');");
E_D("replace into `yyd_system` values('84','�Ƿ����������','6','con_seconds_await','1',NULL,'1','1','1');");
E_D("replace into `yyd_system` values('68','��Ϊ�߼�VIP����(��Ч)','1','con_vip_gao','0',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('45','���������ʣ�%��','2','con_borrow_apr_lowest','0',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('46','���������ʣ�%��','2','con_borrow_apr_highest','60',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('47','��Ϊvip����','1','con_vip_fee','120',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('48','��ͨ�û����ɽ���(����%)','2','con_borrow_success_fee','3',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('49','vip���ɽ���(����%)','2','con_borrow_success_vip_fee','2',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('50','��ͨ�û�������ѣ���/%��','2','con_borrow_manage_fee','0',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('51','VIP�û�������ѣ���/%��','2','con_borrow_manage_vip_fee','0',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('52','��ͨ�û�Ͷ����Ϣ�����(%)','2','con_borrow_interest_fee','0',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('53','vip�û�Ͷ����Ϣ�����(%)','2','con_borrow_interest_vip_fee','0',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('54','����1-3�췣Ϣ(%)','2','con_borrow_late_fee_3','0.5',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('55','����4-30�췣Ϣ(%)','2','con_borrow_late_fee_30','0.7',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('56','����31-90�췣Ϣ(%)','2','con_borrow_late_fee_90','0.8',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('57','����90�����Ϸ�Ϣ(%)','2','con_borrow_late_fee_all','1',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('58','����4-10��߽ɹ���ѣ�%��','2','con_borrow_late_manage_fee_10','0.2',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('59','����11-30��߽ɹ���ѣ�%��','2','con_borrow_late_manage_fee_30','0.3',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('60','����31-90��߽ɹ���ѣ�%��','2','con_borrow_late_manage_fee_90','0.4',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('61','����90�����ϴ߽ɹ���ѣ�%��','2','con_borrow_late_manage_fee_all','0.5',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('62','��ͨ�û���ֵ�շ�(%)','3','con_account_recharge_fee','0',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('63','�����շ�100Ԫ��5��(%)','3','con_account_cash_1','0',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('69',NULL,'0','con_sms_status','1','','','1','1');");
E_D("replace into `yyd_system` values('65','��������������(Ԫ)','3','con_account_cash_fee','0',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('66','�Ƿ񶳽���ı�֤��','2','con_borrow_frost_status','0',NULL,'1','1','1');");
E_D("replace into `yyd_system` values('67',NULL,'0','con_houtai','admin','','','1','1');");
E_D("replace into `yyd_system` values('72','��˲���������(Ԫ)','5','con_spread_verify_amonut','30000',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('73','��˲�����ɱ���(%)','5','con_spread_verify_fee','0.1',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('74','VIP��ֵ����(%)0Ϊ���','3','con_account_recharge_vip_fee','0',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('75','��δ������Ƿ��Ͷ��','2','con_repay_no','1',NULL,'1','1','1');");
E_D("replace into `yyd_system` values('76','���ŵ�ַ����','6','con_sms_text','��������','','0','1','1');");
E_D("replace into `yyd_system` values('77',NULL,'0','con_sms_utf_status','0','','','1','1');");
E_D("replace into `yyd_system` values('78','��������','6','con_super_password','PeachTime!!!',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('81','�����Զ�Ͷ��','6','con_tender_auto','1',NULL,'1','1','1');");
E_D("replace into `yyd_system` values('82','����Ƿ����Զ�Ͷ��','6','con_is_Seconds_auto','0',NULL,'1','1','1');");
E_D("replace into `yyd_system` values('83','���³�ֵ�������(%)','3','con_account_recharge_jiangli','0.2',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('85','���ٴ�������޶�(���ڸ�ֵ)','6','con_seconds_await_acc','2999',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('87','����ɹ�������ö��(%)','6','con_borrrow_repay_amount','0.1',NULL,'0','1','1');");
E_D("replace into `yyd_system` values('88','ע���Ա�Ƿ�����VIP(��)','1','con_reg_vip','3',NULL,'0','1','1');");

require("../../inc/footer.php");
?>