<?

/******************************
 * $File: borrow.remind.php
 * $Description: ������ѹ���
******************************/

require_once(ROOT_PATH."core/config.inc.php");
require_once(ROOT_PATH."modules/remind/remind.class.php");
require_once(ROOT_PATH."modules/sms/sms.class.php");
class borrowRemindClass  {
	
	function RepayLate($data){
		global $mysql;
		$sql ="select p1.*,p2.phone,p2.email,p3.borrow_name from {borrow_repay} as p1,{borrow} as p3,{user} as p2 where p1.borrow_nid = p3.borrow_nid and p2.user_id=p1.user_id and p1.repay_status=1 and p1.repay_time<".time()."";
		$result= $mysql->db_fetch_arrays($sql);
		foreach ($result as $key => $value){
			$content = "�������ѣ���Ľ����⣩���������벻Ҫ����Ӵ,��ǰ����н���";
			$resms['user_id'] = $value['user_id'];
			$resms['phone'] = $value['phone'];
			$resms['content'] =  $content;
			$resms['type'] =  "repay_late";
			smsClass::SendSMS($resms);
			
			$relog['user_id'] = $value['user_id'];
			$relog['type'] = "sms";
			$relog['style'] = "repay_late";
			$relog['content']= $content;
			$relog['contract'] = $value['phone'];
			$relog['status'] = 0;
			remindClass::AddLog($relog);
		}
	}

}



?>