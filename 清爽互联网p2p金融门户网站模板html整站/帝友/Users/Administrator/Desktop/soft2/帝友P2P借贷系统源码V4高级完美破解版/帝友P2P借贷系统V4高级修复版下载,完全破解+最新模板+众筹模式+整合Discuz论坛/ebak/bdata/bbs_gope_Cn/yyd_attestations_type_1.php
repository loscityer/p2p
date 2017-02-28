<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_attestations_type`;");
E_C("CREATE TABLE `yyd_attestations_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL COMMENT '????',
  `nid` varchar(100) NOT NULL COMMENT '?????',
  `order` int(11) NOT NULL COMMENT '????',
  `credit` int(11) NOT NULL COMMENT '????????',
  `remark` varchar(200) NOT NULL COMMENT '????',
  `validity` int(11) NOT NULL,
  `addtime` varchar(30) NOT NULL,
  `addip` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=gbk");
E_D("replace into `yyd_attestations_type` values('1','������֤','credit','10','10','','0','1376101802','121.207.162.61');");
E_D("replace into `yyd_attestations_type` values('2','������֤','work','10','10','','12','1376101802','121.207.162.61');");
E_D("replace into `yyd_attestations_type` values('3','������֤','income','10','5','','12','1376101802','121.207.162.61');");
E_D("replace into `yyd_attestations_type` values('4','��ס��֤','live','10','5','','12','1376101802','121.207.162.61');");
E_D("replace into `yyd_attestations_type` values('5','������֤','hukou','10','5','','0','1376101802','121.207.162.61');");
E_D("replace into `yyd_attestations_type` values('6','����ŵ����֤','chengnuo','10','10','','0','1376101802','121.207.162.61');");
E_D("replace into `yyd_attestations_type` values('7','��������¼','linkman','10','5','','0','1376101802','121.207.162.61');");
E_D("replace into `yyd_attestations_type` values('8','�����֤','marry','10','5','','0','1376101802','121.207.162.61');");
E_D("replace into `yyd_attestations_type` values('9','�̻���֤','guohua','10','5','','0','1376101802','121.207.162.61');");
E_D("replace into `yyd_attestations_type` values('10','������֤','house','10','15','','0','1376101802','121.207.162.61');");
E_D("replace into `yyd_attestations_type` values('11','������֤','car','10','5','','0','1376101802','121.207.162.61');");
E_D("replace into `yyd_attestations_type` values('12','�ֳ���֤','spot','10','10','','0','1376101802','121.207.162.61');");
E_D("replace into `yyd_attestations_type` values('24','�����ŵ��','hkxys','10','10','','0','1376101802','121.207.167.90');");
E_D("replace into `yyd_attestations_type` values('19','����ְ��','professional','10','5','','0','1376101802','127.0.0.1');");
E_D("replace into `yyd_attestations_type` values('18','�������ñ���','bank_report','10','15','','6','1376101802','127.0.0.1');");
E_D("replace into `yyd_attestations_type` values('17','��6���������ʽ���ˮ','bank_six','10','10','','6','1376101802','127.0.0.1');");
E_D("replace into `yyd_attestations_type` values('20','ֱϵ������֤','kinsfolk','10','10','','0','1376101802','127.0.0.1');");
E_D("replace into `yyd_attestations_type` values('25','΢��/QQ��֤','weibo','10','5','','0','1376101802','27.154.167.198');");
E_D("replace into `yyd_attestations_type` values('22','�����м�ֵ��֤','other','10','10','','0','1376101802','127.0.0.1');");

require("../../inc/footer.php");
?>