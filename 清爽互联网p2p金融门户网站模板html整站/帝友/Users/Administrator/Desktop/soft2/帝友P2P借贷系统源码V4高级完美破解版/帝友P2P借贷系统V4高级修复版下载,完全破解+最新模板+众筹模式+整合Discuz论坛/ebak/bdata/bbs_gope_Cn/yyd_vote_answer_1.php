<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_vote_answer`;");
E_C("CREATE TABLE `yyd_vote_answer` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `vote_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `status` int(2) NOT NULL COMMENT '??',
  `answer_status` int(2) NOT NULL COMMENT '????????',
  `order` int(11) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `addtime` varchar(50) NOT NULL,
  `addip` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=86 DEFAULT CHARSET=gbk");
E_D("replace into `yyd_vote_answer` values('9','3','����','A','1','0','0','','','');");
E_D("replace into `yyd_vote_answer` values('10','3','����','B','1','0','0','','','');");
E_D("replace into `yyd_vote_answer` values('11','3','�ı�','C','1','1','0','','','');");
E_D("replace into `yyd_vote_answer` values('12','3','�屶','D','1','0','0','','','');");
E_D("replace into `yyd_vote_answer` values('13','4','ע��','A','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('14','4','�ֻ���','B','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('15','4','�˻���ֵ','C','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('16','4','Ͷ��','D','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('17','5','��ͨ��Ա','A','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('18','5','VIP��Ա','B','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('19','5','�߼�VIP��Ա','C','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('20','5','�׽��Ա','D','1','0','10','','','');");
E_D("replace into `yyd_vote_answer` values('21','6','���ý���','A','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('22','6','��վ������','B','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('23','6','���ٽ���','C','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('24','6','ծȨת�ñ�','D','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('25','7','��ͨ��Ա','A','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('26','7','VIP��Ա','B','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('27','7','�߼�VIP��Ա','C','1','0','10','','','');");
E_D("replace into `yyd_vote_answer` values('28','7','�׽��Ա','D','1','0','10','','','');");
E_D("replace into `yyd_vote_answer` values('29','8','20Ԫ','A','1','0','0','','','');");
E_D("replace into `yyd_vote_answer` values('30','8','50Ԫ','B','1','1','0','','','');");
E_D("replace into `yyd_vote_answer` values('31','8','80Ԫ','C','1','0','0','','','');");
E_D("replace into `yyd_vote_answer` values('32','8','100Ԫ','D','1','0','0','','','');");
E_D("replace into `yyd_vote_answer` values('33','9','��','A','1','0','0','','','');");
E_D("replace into `yyd_vote_answer` values('34','9','��','B','1','1','0','','','');");
E_D("replace into `yyd_vote_answer` values('35','10','��ѳ�ֵ','A','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('36','10','���ս����ȵ渶','B','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('37','10','�����ϻ�Ϣ����','C','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('38','10','��Ҷһ���Ʒ','D','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('39','11','50%','A','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('40','11','70%','B','1','0','10','','','');");
E_D("replace into `yyd_vote_answer` values('41','11','80%','C','1','0','10','','','');");
E_D("replace into `yyd_vote_answer` values('42','11','100%','D','1','0','10','','','');");
E_D("replace into `yyd_vote_answer` values('43','12','30-33��','A','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('44','12','30-35��','B','1','0','10','','','');");
E_D("replace into `yyd_vote_answer` values('45','12','30-38��','C','1','0','10','','','');");
E_D("replace into `yyd_vote_answer` values('46','12','30-40��','D','1','0','10','','','');");
E_D("replace into `yyd_vote_answer` values('47','1','18�������Ͼ߱���ȫ������Ϊ����','A','1','1','0','','','');");
E_D("replace into `yyd_vote_answer` values('48','1','18-65��','B','1','0','0','','','');");
E_D("replace into `yyd_vote_answer` values('49','1','20-60��','C','1','0','0','','','');");
E_D("replace into `yyd_vote_answer` values('50','1','20-65��','D','1','0','0','','','');");
E_D("replace into `yyd_vote_answer` values('51','2','���ý��','A','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('52','2','��վ�������','B','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('53','2','���ٽ��','C','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('54','2','��Ѻ���','D','1','0','10','','','');");
E_D("replace into `yyd_vote_answer` values('55','13','�����3,000-500,000','A','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('56','13','�����2,000-300,000','B','1','0','10','','','');");
E_D("replace into `yyd_vote_answer` values('57','13','�����3,000-300,000','C','1','0','10','','','');");
E_D("replace into `yyd_vote_answer` values('58','13','�����2,000-500,000','D','1','0','10','','','');");
E_D("replace into `yyd_vote_answer` values('59','14','1-12����','A','1','0','0','','','');");
E_D("replace into `yyd_vote_answer` values('60','14','1-15����','B','1','0','0','','','');");
E_D("replace into `yyd_vote_answer` values('61','14','1-18����','C','1','1','0','','','');");
E_D("replace into `yyd_vote_answer` values('62','14','1-24����','D','1','0','0','','','');");
E_D("replace into `yyd_vote_answer` values('63','15','AA-HR 7��','A','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('64','15','A-E 5��','B','1','0','10','','','');");
E_D("replace into `yyd_vote_answer` values('65','15','A-F 6��','C','1','0','10','','','');");
E_D("replace into `yyd_vote_answer` values('66','15','A-D 4��','D','1','0','10','','','');");
E_D("replace into `yyd_vote_answer` values('67','16','�Ը��͵ĳɱ���ý��','A','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('68','16','��ø��߶��','B','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('69','16','����Ͷ���˵�����','C','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('70','16','�����׻�ý��','D','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('71','17','�ϴ������֤������','A','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('72','17','ȷ���ϴ����ϵ���ʵ��','B','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('73','17','��ʱ����','C','1','1','10','','','');");
E_D("replace into `yyd_vote_answer` values('74','17','�����շѻ�Ա','D','1','0','10','','','');");
E_D("replace into `yyd_vote_answer` values('75','18','�ɽ�Ӷ��','A','1','1','0','','','');");
E_D("replace into `yyd_vote_answer` values('76','18','�����õȼ���ȡ�ķ��ս�','B','1','1','0','','','');");
E_D("replace into `yyd_vote_answer` values('77','18','�˻������','C','1','0','0','','','');");
E_D("replace into `yyd_vote_answer` values('78','18','VIP��Ա��','D','1','1','0','','','');");
E_D("replace into `yyd_vote_answer` values('79','19','0.2%','A','1','0','0','','','');");
E_D("replace into `yyd_vote_answer` values('80','19','0.3%','B','1','1','0','','','');");
E_D("replace into `yyd_vote_answer` values('81','19','0.4%','C','1','0','0','','','');");
E_D("replace into `yyd_vote_answer` values('82','19','0.5%','D','1','0','0','','','');");
E_D("replace into `yyd_vote_answer` values('83','20','������','A','1','0','10','','','');");
E_D("replace into `yyd_vote_answer` values('84','20','���ԣ����������������������޵�1/2������ȡʣ�౾��1%�ķ�Ϣ','B','1','1','10','','','');");

require("../../inc/footer.php");
?>