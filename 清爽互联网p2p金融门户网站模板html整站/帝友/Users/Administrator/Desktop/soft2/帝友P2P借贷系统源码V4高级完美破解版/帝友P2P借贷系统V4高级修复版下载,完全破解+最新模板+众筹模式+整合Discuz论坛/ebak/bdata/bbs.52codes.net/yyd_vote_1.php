<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_vote`;");
E_C("CREATE TABLE `yyd_vote` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `status` int(2) NOT NULL COMMENT '??',
  `input` varchar(100) NOT NULL COMMENT '??????',
  `type_id` varchar(30) NOT NULL COMMENT '????????',
  `remark` varchar(200) NOT NULL,
  `order` int(11) NOT NULL,
  `answer` int(11) NOT NULL,
  `addtime` varchar(50) NOT NULL,
  `addip` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=gbk");
E_D("replace into `yyd_vote` values('1','0','�������Ҫ��������䣿','1','radio','2','','10','0','1376101802','121.207.163.15');");
E_D("replace into `yyd_vote` values('2','0','�������Щ���','0','checked','2','','10','0','1376101802','121.207.163.15');");
E_D("replace into `yyd_vote` values('3','0','���ݹ��ҷ��ɣ������������ֻҪ����������ͬ�ڴ������ʵļ������ܵ����ɱ�����','1','radio','1','','10','0','1376101802','27.154.84.209');");
E_D("replace into `yyd_vote` values('4','0','Ͷ�������ߵ�����ƽ̨����Ͷ�ʱ��뾭����Щ���ڣ�','1','checked','2','','10','0','1376101802','27.154.84.209');");
E_D("replace into `yyd_vote` values('5','0','Ͷ���˷�Ϊ�ļ����ȼ���','1','checked','1','','10','0','1376101802','27.154.84.209');");
E_D("replace into `yyd_vote` values('6','0','������Ҫ���ļ��ࣿ','0','checked','2','','10','0','1376101802','27.154.84.209');");
E_D("replace into `yyd_vote` values('7','0','���ߵ����ñ�͵�Ѻ���ֻ꣬����ĸ��ȼ��Ļ�Ա���ţ�','0','checked','2','','10','0','1376101802','27.154.84.209');");
E_D("replace into `yyd_vote` values('8','0','Ͷ����ÿ��Ͷ�����Ͷ���Ƕ��٣�','1','radio','1','','10','0','1376101802','27.154.84.209');");
E_D("replace into `yyd_vote` values('9','0','�ǲ�������Ͷ���˵ı������ܱ����ϼƻ���','0','radio','2','','10','0','1376101802','27.154.84.209');");
E_D("replace into `yyd_vote` values('10','0','VIP��������ϼ����Ͷ����ͬ��ͨͶ������ȣ�������Щ���ߣ�','0','checked','2','','10','0','1376101802','27.154.84.209');");
E_D("replace into `yyd_vote` values('11','0','��ͨͶ�������ܶ��ٱ����ı����ϣ�','0','radio','2','','10','0','1376101802','27.154.84.209');");
E_D("replace into `yyd_vote` values('12','0','����˵��ڽ�����ڶ��������վ�Ի�Ա������Ӧ�����ı���渶��','0','radio','2','','10','0','1376101802','27.154.84.209');");
E_D("replace into `yyd_vote` values('13','0','����˵����ý���ȣ�','1','radio','2','','10','0','1376101802','27.154.84.209');");
E_D("replace into `yyd_vote` values('14','0','�������ޣ�','1','radio','2','','10','0','1376101802','27.154.84.209');");
E_D("replace into `yyd_vote` values('15','0','�������ޣ������õȼ��Ӹߵ�����λ��֣�','1','radio','2','','10','0','1376101802','27.154.84.209');");
E_D("replace into `yyd_vote` values('16','0','�ϸߵ����õȼ�����ʲô���ã�','1','checked','2','','10','0','1376101802','27.154.84.209');");
E_D("replace into `yyd_vote` values('17','0','���������õȼ���','1','checked','2','','10','0','1376101802','27.154.84.209');");
E_D("replace into `yyd_vote` values('18','0','���ķ����շ�����Щ��','0','checked','2','','10','0','1376101802','27.154.84.209');");
E_D("replace into `yyd_vote` values('19','0','���ݽ������ޣ�ÿ����ȡ����Ķ�����Ϊ����ѣ�','0','radio','2','','10','0','1376101802','27.154.84.209');");
E_D("replace into `yyd_vote` values('20','0','������ǰ������','1','radio','2','','10','0','1376101802','27.154.84.209');");

require("../../inc/footer.php");
?>