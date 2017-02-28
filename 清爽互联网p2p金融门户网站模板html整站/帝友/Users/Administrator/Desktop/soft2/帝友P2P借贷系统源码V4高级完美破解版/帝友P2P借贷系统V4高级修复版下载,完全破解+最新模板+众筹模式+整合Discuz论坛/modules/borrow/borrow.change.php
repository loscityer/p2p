<?php
require_once(ROOT_PATH."modules/account/account.class.php");
require_once(ROOT_PATH."modules/remind/remind.class.php");
require_once(ROOT_PATH."modules/borrow/borrow.class.php");

$MsgInfo["borrow_change_action_error"] = "���Ĳ��������벻Ҫ�Ҳ���";
$MsgInfo["borrow_change_account_not_numeric"] = "ת�ý�����������";
$MsgInfo["borrow_change_account_most"] = "ת�ý���С��0";
$MsgInfo["borrow_change_action_success"] = "ת����Ϣ�����ɹ�";
$MsgInfo["borrow_change_status_yes"] = "����Ϣ�Ѿ�ת�ã���ȴ�����Ա���";
$MsgInfo["borrow_change_paypassword_error"] = "֧�����벻��ȷ";
$MsgInfo["borrow_change_wait_account_error"] = "ת�ý��ܴ��ڴ��ս��";
$MsgInfo["borrow_change_cancel_success"] = "ծȨת�ó����ɹ�";
$MsgInfo["borrow_change_web_success"] = "ծȨת�óɹ�����ȴ�����Ա���";
$MsgInfo["borrow_change_cancel_error"] = "ծȨת�ó���ʧ�ܣ��벻Ҫ�Ҳ���";
$MsgInfo["borrow_change_not_self"] = "���ܹ����Լ���ծȨ";
$MsgInfo["borrow_change_account_error"] = "��Ŀ��ý���";
$MsgInfo["borrow_change_buy_error"] = "ծȨ����ʧ��";
$MsgInfo["borrow_change_buy_success"] = "ծȨ����ɹ�";
$MsgInfo["borrow_change_verify_error"] = "ծȨ��˳ɹ�";
$MsgInfo["borrow_change_verify_success"] = "��վ��˳ɹ�";
class borrowChangeClass{
	function GetChangeList($data){
		global $mysql;		
		$_sql = " where 1=1";
		if ($data['user_id']!=""){
			$_sql .= " and p0.user_id='{$data['user_id']}'";	
		}
		if ($data['buy_userid']!="" || $data['buy_userid']=="0"){
			$_sql .= " and p0.buy_userid='{$data['buy_userid']}'";	
		}
		if ($data['id']!=""){
			$_sql .= " and p0.id='{$data['id']}'";	
		}
		if ($data['change_status']!="" || $data['change_status']=="0"){
			$_sql .= " and p1.change_status='{$data['change_status']}'";	
		}
		if ($data['status']!="" || $data['status']=="0"){
			$_sql .= " and p0.status in ({$data['status']})";	
		}
		
		if ($data['web']!=""){
			$_sql .= " and p0.web_status=2";	
		}
		
		if (IsExiest($data['borrow_type']) != false){
			if ($data['borrow_type']=="credit"){
				$_sql .= " and p3.`vouchstatus`!=1 and `fast_status`!=1";
			}elseif($data['borrow_type']=="vouch"){
				$_sql .= " and p3.`vouchstatus`=1";
			}elseif($data['borrow_type']=="fast"){
				$_sql .= " and p3.`fast_status`=1";
			}
		}
		
		if (IsExiest($data['dotime1']) != false){
			$dotime1 = ($data['dotime1']=="request")?$_REQUEST['dotime1']:$data['dotime1'];
			if ($dotime1!=""){
				$_sql .= " and p0.addtime > ".get_mktime($dotime1);
			}
		}
		
		//�ж����ʱ�����
		if (IsExiest($data['dotime2'])!=false){
			$dotime2 = ($data['dotime2']=="request")?$_REQUEST['dotime2']:$data['dotime2'];
			if ($dotime2!=""){
				$_sql .= " and p0.addtime < ".get_mktime($dotime2);
			}
		}
		
		if (IsExiest($data['account_status']!="")){
			if ($data['account_status']==1){
				$_sql .= " and p1.recover_account_capital_wait >= 2000 and p1.recover_account_capital_wait <= 5000";
			}elseif($data['account_status']==2){
				$_sql .= " and p1.recover_account_capital_wait >= 5000 and p1.recover_account_capital_wait <= 10000";
			}elseif($data['account_status']==3){
				$_sql .= " and p1.recover_account_capital_wait >= 10000 and p1.recover_account_capital_wait <= 30000";
			}elseif($data['account_status']==4){
				$_sql .= " and p1.recover_account_capital_wait >= 30000 and p1.recover_account_capital_wait <= 50000";
			}elseif($data['account_status']==5){
				$_sql .= " and p1.recover_account_capital_wait >= 50000";
			}
		}
			
		if (IsExiest($data['borrow_name']) != false){
			$_sql .= " and p3.`name` like '%".urldecode($data['borrow_name'])."%'";
		}
		$_select = "p0.*,p0.web_account as web_buy,p1.recover_times,p1.id as tid,p1.recover_account_wait,p1.recover_account_capital_wait,p1.user_id as tuser,p1.recover_account_interest_wait,p2.username,p3.name as borrow_name,p3.borrow_period,p3.borrow_apr,p3.borrow_nid,p4.username as buy_username";
		$_order = " order by p0.id desc";
		if (IsExiest($data['apr'])!=""){
			if ($data['apr']=="apr_up"){
				$_order.=",p3.`borrow_apr` desc";
			}elseif ($data['apr']=="apr_down"){
				$_order.=",p3.`borrow_apr` asc";
			}
		}
		if (IsExiest($data['order'])!=""){
			$order = $data['order'];
			if ($order == "time_up"){
				$_order = "order by p0.id asc";
			}
			if ($order == "status"){
				$_order = "order by p0.status desc,p0.id desc";
			}
		}
		$sql = "select SELECT from  `{borrow_change}` as p0 left join`{borrow_tender}` as p1  on p0.tender_id=p1.id  left join `{users}` as p2 on p1.user_id=p2.user_id left join `{borrow}` as p3 on p1.borrow_nid=p3.borrow_nid  left join `{users}` as p4 on p0.buy_userid=p4.user_id   SQL ORDER LIMIT";
		
		//�Ƿ���ʾȫ������Ϣ
		if ( IsExiest($data['limit'])!= false){
			if ($data['limit'] != "all" ){ $_limit = "  limit ".$data['limit']; }
			$result = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $sql));
			foreach ($result as $key => $value){
				$result[$key]['wait_times'] = $value['borrow_period'] - $value['recover_times'];
				$list[$key]['web_account'] = round($value['recover_account_wait']*0.7,2);
			}
			return $result;
		}
		
		//�ж��ܵ�����
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array('count(1) as num', $_sql,'', ''), $sql));
		$total = intval($row['num']);
		
		//��ҳ���ؽ��
		$data['page'] = !IsExiest($data['page'])?1:$data['page'];
		$data['epage'] = !IsExiest($data['epage'])?10:$data['epage'];
		$total_page = ceil($total / $data['epage']);
		$_limit = " limit ".($data["epage"] * ($data["page"] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		foreach ($list as $key => $value){
			$list[$key]["credit"] = borrowClass::GetBorrowCredit(array("user_id"=>$value['user_id']));
			$recoversql="select count(1) as num from `{borrow_repay}` where borrow_nid={$value['borrow_nid']} and (repay_status=1 or repay_web=1)";
			$recoverresult=$mysql->db_fetch_array($recoversql);
			$list[$key]['wait_times'] = $value['borrow_period'] - $recoverresult['num'];
			$list[$key]['web_account'] = round($value['recover_account_wait']*0.7,2);
			$list[$key]['buyaccount'] = round($value['account']*2,2);
			$chsql="select status,buy_time,web_time from `{borrow_change}` where tender_id={$value['tid']}";
			$chresult=$mysql->db_fetch_array($chsql);
			if ($chresult['status']==1){
				$recsql="select count(1) as count_all,sum(recover_account_yes) as recover_account_yes_all,sum(recover_account) as recover_account_all from `{borrow_recover}` where user_id={$value['tuser']} and borrow_nid={$value['borrow_nid']} and (recover_yestime>{$chresult['buy_time']} or recover_yestime is NULL) and tender_id={$value['tid']}";
				$recresult=$mysql->db_fetch_array($recsql);
				$list[$key]["recover_account_waits"]= $recresult['recover_account_all']-$recresult['recover_account_yes_all'];
				$list[$key]["recover_account_all"] = $recresult['recover_account_all'];
				$list[$key]["recover_account_yes"] = $recresult['recover_account_yes_all'];
				$list[$key]["count_all"] = $recresult['count_all'];
			}
			$recsql="select sum(p1.recover_account) as all_account from `{borrow_recover}` as p1 left join `{borrow_tender}` as p2 on p1.tender_id=p2.id where p1.borrow_nid={$value['borrow_nid']} and p2.change_status=1 and p2.change_userid=0 and p1.recover_web=1";
			$recre=$mysql->db_fetch_array($recsql);
			if ($chresult['buy_time']!=""){
				$list[$key]["recover_web_account"]=$recre['all_account'];
				$_sql="select sum(recover_capital) as capital_yes from `{borrow_recover}` where tender_id={$value['tender_id']} and recover_yestime>{$chresult['buy_time']} and advance_status=1";
				$capital=$mysql->db_fetch_array($_sql);
				$list[$key]["capital_no"]=$capital['capital_yes']/100;
				$sql="select sum(recover_interest) as interest_yes from `{borrow_recover}` where tender_id={$value['tender_id']} and recover_yestime>{$chresult['buy_time']} and advance_status=1";
				$interest=$mysql->db_fetch_array($sql);
				$list[$key]["interest_no"]=$interest['interest_yes'];
				$_recsql="select count(1) as num from `{borrow_recover}` where user_id={$value['tuser']} and (recover_yestime>{$chresult['buy_time']} or recover_yestime is NULL) and tender_id={$value['tid']} and (recover_status=1 or recover_web=1)";
				$_recresult=$mysql->db_fetch_array($_recsql);
				$list[$key]["yes_times"] = $_recresult['num'];
			}
		}
		foreach ($list as $key =>$value){
			$all+=$value['recover_account_all'];
			$repay+=$value['recover_account_yes'];
			$wait+=$value['recover_account_wait'];
			$wait_times+=$value['wait_times'];
			$yes_times+=$value['yes_times'];
			$count_all+=$value['count_all'];
			$recover_account_capital_wait+=$value['recover_account_capital_wait'];
			$recover_account_interest_wait+=$value['recover_account_interest_wait'];
			if ($value['web_status']==2){
				$account+=$value['web_buy'];
				$list[$key]["jingzhuan"]=round($list[$key]["recover_account_all"]-$value['web_buy']-$list[$key]["interest_no"],2);
			}else{
				$account+=$value['account'];
				$list[$key]["jingzhuan"]=$list[$key]["recover_account_all"]-$value['account'];
			}
			$shouyi+=$list[$key]["jingzhuan"];
			if ($value['status']==1 && $value['web_status']==2){
				$change_account+=$value['web_buy'];
			}elseif ($value['status']==1 && $value['web_status']!=2){
				$change_account+=$value['account'];
			}elseif ($value['status']==4){
				$change_account+=$value['web_account'];
			}
		}
		$lost=round($account-$recover_account_capital_wait-$recover_account_interest_wait,2);
		$jingzhuan=round($all-$account,2);
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'type_name' => $type_name,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page,'recover_account_capital_wait'=>$recover_account_capital_wait,'recover_account_interest_wait'=>$recover_account_interest_wait,'account'=>$account,'lost'=>$lost,'jingzhuan'=>$jingzhuan,'all'=>$all,'count_all'=>$count_all,'wait'=>$wait,'repay'=>$repay,'shouyi'=>$shouyi,'wait_times'=>$wait_times,'yes_times'=>$yes_times,'change_account'=>$change_account);
		return $result;
	}
	
	//���ծȨת��
	function ActionChange($data){
		global $mysql;
		$sql = "select * from `{borrow_tender}` where user_id='{$data['user_id']}' and id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "borrow_change_action_error";
		if (!is_numeric($data['account'])) return "borrow_change_account_not_numeric";
		if ($result['recover_account_wait']<$data['account']) return "borrow_change_wait_account_error";
		if ($data['account']<=0) return "borrow_change_account_most";
		if ($result['change_status'] ==1) return "borrow_change_status_yes";
		$sql = "select 1 from `{users}` where user_id='{$data['user_id']}' and paypassword='".md5($data['paypassword'])."'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "borrow_change_paypassword_error";
		$sql = "update `{borrow_tender}` set change_status=2 where id='{$data['id']}'";
		$mysql->db_query($sql);
		$sql = "insert into `{borrow_change}` set user_id='{$data['user_id']}',tender_id='{$data['id']}',status=2,account='{$data['account']}',remark='{$data['remark']}',valid_day='{$data['valid_day']}',addtime='".time()."',addip='".ip_address()."'";
		$mysql->db_query($sql);
		return $mysql->db_insert_id();
	}
	
	//���ծȨת��
	function CancelChange($data){
		global $mysql;
		//�ж��Ƿ����û���
		$sql = "select * from `{borrow_change}` where user_id='{$data['user_id']}' and id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "borrow_change_cancel_error";
		
		if ($result['status']!=2) return "borrow_change_cancel_error";
		
		//�ж�֧�������Ƿ���ȷ
		$sql = "select 1 from `{users}` where user_id='{$data['user_id']}' and paypassword='".md5($data['paypassword'])."'";
		$_result = $mysql->db_fetch_array($sql);
		if ($_result==false) return "borrow_change_paypassword_error";
		
		$sql = "update `{borrow_tender}` set change_status=5 where id='{$result['tender_id']}'";
		$mysql->db_query($sql);
		
		$sql = "update `{borrow_change}` set status=5,cancel_status=1,cancel_remark='{$data['cancel_remark']}',cancel_time='".time()."' where id='{$data['id']}'";
		$mysql->db_query($sql);
		return $data['id'];
	}
	
	//ת�ø���վ
	function WebChange($data){
		global $mysql;
		//�ж��Ƿ����û���
		$sql = "select * from `{borrow_change}` where user_id='{$data['user_id']}' and id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "borrow_change_cancel_error";
		
		if ($result['status']!=2) return "borrow_change_cancel_error";
		
		//�ж�֧�������Ƿ���ȷ
		$sql = "select 1 from `{users}` where user_id='{$data['user_id']}' and paypassword='".md5($data['paypassword'])."'";
		$_result = $mysql->db_fetch_array($sql);
		if ($_result==false) return "borrow_change_paypassword_error";
		
		$sql = "update `{borrow_tender}` set change_status=4 where id='{$result['tender_id']}'";
		$mysql->db_query($sql);
		
		$sql = "update `{borrow_change}` set status=4,web_status=2,web_time='".time()."' where id='{$data['id']}'";
		$mysql->db_query($sql);
		return $data['id'];
	}
	
	
	
	//����ծȨ
	function BuyChange($data){
		global $mysql;
		//�ж��Ƿ����û���
		$sql = "select * from `{borrow_change}` where  id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		
		if ($result==false) return "borrow_change_buy_error";
		
		if ($result['status']!=2) return "borrow_change_buy_error";
		if ($result['user_id']==$data['user_id']) return "borrow_change_not_self";
		
		
		$sql = "select p1.*,p2.name,p2.user_id as borrowuser from `{borrow_tender}` as p1 left join `{borrow}` as p2 on p2.borrow_nid=p1.borrow_nid where p1.id='{$result['tender_id']}'";
		$tender_result = $mysql->db_fetch_array($sql);
		$repaysql="select count(1) as no_repay_times from `{borrow_repay}` where borrow_nid={$tender_result['borrow_nid']} and repay_status=0";
		$repay_result = $mysql->db_fetch_array($repaysql);
		$change_fee = round($tender_result['recover_account_interest_wait']*0.05,2);//�������
		$result['borrow_name']="<a href=/invest/a{$tender_result['borrow_nid']}.html>{$tender_result['name']}</a>";
		//�ж�֧�������Ƿ���ȷ
		$sql = "select 1 from `{users}` where user_id='{$data['user_id']}' and paypassword='".md5($data['paypassword'])."'";
		$_result = $mysql->db_fetch_array($sql);
		if ($_result==false) return "borrow_change_paypassword_error";
		
		//�жϿ��ý���Ƿ���ڹ�����
		//
		$sql = "select * from `{account}` where user_id='{$data['user_id']}'";
		$account_result = $mysql->db_fetch_array($sql);
		if ($account_result['balance']<$result['account']+$change_fee) return "borrow_change_account_error";
		
		$sql = "update `{borrow_tender}` set change_status=1,change_userid='{$data['user_id']}' where id='{$result['tender_id']}'";
		$mysql->db_query($sql);
		
		
		$nidsql="select max(change_nid) as maxnid from `{borrow_change}`";
		$nid=$mysql->db_fetch_array($nidsql);
		if ($nid['maxnid']==""){
			$today = date("Ym");
			$data["change_nid"]=$today."00001";
		}else{
			$today = date("Ym");
			$pid = str_replace($today,'',$nid['maxnid']);
			if (strlen($pid)==strlen($nid['maxnid'])){
				$data["change_nid"]=$today."00001";
			}else{
				$pid = $today.str_pad($pid,5,"0",STR_PAD_LEFT);
				$data["change_nid"]=$pid+1;
			}
		}
		$sql = "update `{borrow_change}` set status=1,buy_userid='{$data['user_id']}',change_nid='{$data['change_nid']}',buy_time='".time()."' where id='{$data['id']}'";
		$mysql->db_query($sql);
		
		$borrowuser=self::GetUsers(array("user_id"=>$tender_result['borrowuser']));
		$selluser=self::GetUsers(array("user_id"=>$result['user_id']));
		$buyuser=self::GetUsers(array("user_id"=>$data['user_id']));
		
		
		$remind['nid'] = "borrow_change_yes";
		$remind['receive_userid'] = $tender_result['borrowuser'];
		$remind['code'] = "borrow";
		$remind['article_id'] =$tender_result['borrow_nid'];
		$remind['title'] = "{$tender_result['name']}ծȨ��ת��";
		$remind['content'] = "�����Ľ���[{$result['borrow_name']}]��{$selluser['username']}�����е�ծȨ����".date("Y-m-d",time())."ת�ø�{$buyuser['username']}";
		remindClass::sendRemind($remind);
		
		//���ӳ���ծȨ�ĳɹ����
		$account = $result['account'];
		$log_info["user_id"] = $result['user_id'];//�����û�id
		$log_info["nid"] = "borrow_change_sell_".$result['user_id']."_".$result['tender_id'];//������
		$log_info["money"] = $account;//�������
		$log_info["income"] = $account;//����
		$log_info["expend"] = 0;//֧��
		$log_info["balance_cash"] = $account;//�����ֽ��
		$log_info["balance_frost"] = 0;//�������ֽ��
		$log_info["frost"] = 0;//������
		$log_info["await"] = -$tender_result['recover_account_wait'];//���ս��
		$log_info["type"] = "borrow_change_sell";//����
		$log_info["to_userid"] = $data['user_id'];//����˭
		$log_info["remark"] =  "�ɹ�����[{$result['borrow_name']}]ծȨ�Ľ��";
		accountClass::AddLog($log_info);
		
		borrowClass::UpdateBorrowCount(array("user_id"=>$result['user_id'],"tender_recover_times_wait"=>-$repay_result['no_repay_times'],"tender_recover_wait"=>-$tender_result['recover_account_wait']));
		
		$user_log["user_id"] = $result['user_id'];
		$user_log["code"] = "borrow";
		$user_log["type"] = "borrow_change";
		$user_log["operating"] = "borrow";
		$user_log["article_id"] = $result['user_id'];
		$user_log["result"] = 1;
		$user_log["content"] = "�ɹ�����[{$result['borrow_name']}]ծȨ�Ľ��,[<a href=/debt_protocol/a{$data['id']}.html target=_blank>����˴�</a>]�鿴Э����";
		self::AddUsersLog($user_log);	
		
		$log_info["user_id"] = $data['user_id'];//�����û�id
		$log_info["nid"] = "borrow_change_buy_".$data['user_id']."_".$result['tender_id'];//������
		$log_info["money"] = $account;//�������
		$log_info["income"] = 0;//����
		$log_info["expend"] = $account;//֧��
		$log_info["balance_cash"] = -$account;//�����ֽ��
		$log_info["balance_frost"] = 0;//�������ֽ��
		$log_info["frost"] = 0;//������
		$log_info["await"] = $tender_result['recover_account_wait'];//���ս��
		$log_info["type"] = "borrow_change_buy";//����
		$log_info["to_userid"] = $result['user_id'];//����˭
		$log_info["remark"] =  "�ɹ�����[{$result['borrow_name']}]ծȨ�����������";
		accountClass::AddLog($log_info);
		
		/*
		borrowClass::UpdateBorrowCount(array("user_id"=>$data['user_id'],"tender_recover_times_wait"=>$repay_result['no_repay_times'],"tender_recover_wait"=>$tender_result['recover_account_wait']));
		*/
		
		$user_log["user_id"] = $data['user_id'];
		$user_log["code"] = "borrow";
		$user_log["type"] = "borrow_change";
		$user_log["operating"] = "borrow";
		$user_log["article_id"] = $data['user_id'];
		$user_log["result"] = 1;
		$user_log["content"] = "�ɹ�����[{$result['borrow_name']}]ծȨ�Ľ��,[<a href=/debt_protocol/a{$data['id']}.html target=_blank>����˴�</a>]�鿴Э����";
		self::AddUsersLog($user_log);
		
		//�۳������
		$log_info["user_id"] = $data['user_id'];//�����û�id
		$log_info["nid"] = "borrow_change_buy_fee_".$data['user_id']."_".$result['tender_id'];//������
		$log_info["money"] = $change_fee;//�������
		$log_info["income"] = 0;//����
		$log_info["expend"] = $change_fee;//֧��
		$log_info["balance_cash"] = -$change_fee;//�����ֽ��
		$log_info["balance_frost"] = 0;//�������ֽ��
		$log_info["frost"] = 0;//������
		$log_info["await"] = 0;//���ս��
		$log_info["type"] = "borrow_change_buy_fee";//����
		$log_info["to_userid"] = 0;//����˭
		$log_info["remark"] =  "�۳�����[{$result['borrow_name']}]ծȨ��������";
		accountClass::AddLog($log_info);
		
		
		//�۳������
		$log_info["user_id"] = $result['user_id'];//�����û�id
		$log_info["nid"] = "borrow_change_sell_fee_".$result['user_id']."_".$result['tender_id'];//������
		$log_info["money"] = $change_fee;//�������
		$log_info["income"] = 0;//����
		$log_info["expend"] = $change_fee;//֧��
		$log_info["balance_cash"] = -$change_fee;//�����ֽ��
		$log_info["balance_frost"] = 0;//�������ֽ��
		$log_info["frost"] = 0;//������
		$log_info["await"] = 0;//���ս��
		$log_info["type"] = "borrow_change_sell_fee";//����
		$log_info["to_userid"] = 0;//����˭
		$log_info["remark"] =  "�۳�����[{$result['borrow_name']}]ծȨ��������";
		accountClass::AddLog($log_info);
			
		return $data['id'];
	}
	
	
	function GetChangeOne($data){
		global $mysql;		
		$_sql = " where 1=1";
		if ($data['user_id']!=""){
			$_sql .= " and p0.user_id='{$data['user_id']}'";	
		}
		if ($data['buy_userid']!="" || $data['buy_userid']=="0"){
			$_sql .= " and p0.buy_userid='{$data['buy_userid']}'";	
		}
		if ($data['change_status']!="" || $data['change_status']=="0"){
			$_sql .= " and p1.change_status='{$data['change_status']}'";	
		}
		if ($data['id']!=""){
			$_sql .= " and p0.id='{$data['id']}'";	
		}
		if ($data['status']!="" || $data['status']=="0"){
			$_sql .= " and p0.status in ({$data['status']})";	
		}
		
		if (IsExiest($data['borrow_type']) != false){
			if ($data['borrow_type']=="credit"){
				$_sql .= " and p3.`vouchstatus`!=1 and `fast_status`!=1";
			}elseif($data['borrow_type']=="vouch"){
				$_sql .= " and p3.`vouchstatus`=1";
			}elseif($data['borrow_type']=="fast"){
				$_sql .= " and p3.`fast_status`=1";
			}
		}
		
		if (IsExiest($data['account_status']!="")){
			if ($data['account_status']==1){
				$_sql .= " and p1.recover_account_capital_wait >= 2000 and p1.recover_account_capital_wait <= 5000";
			}elseif($data['account_status']==2){
				$_sql .= " and p1.recover_account_capital_wait >= 5000 and p1.recover_account_capital_wait <= 10000";
			}elseif($data['account_status']==3){
				$_sql .= " and p1.recover_account_capital_wait >= 10000 and p1.recover_account_capital_wait <= 30000";
			}elseif($data['account_status']==4){
				$_sql .= " and p1.recover_account_capital_wait >= 30000 and p1.recover_account_capital_wait <= 50000";
			}elseif($data['account_status']==5){
				$_sql .= " and p1.recover_account_capital_wait >= 50000";
			}
		}
			
		if (IsExiest($data['borrow_name']) != false){
			$_sql .= " and p3.`name` like '%".urldecode($data['borrow_name'])."%'";
		}
		$_select = "p0.*,p1.recover_times,p1.recover_account_wait,p1.recover_account_capital_wait,p1.recover_account_interest_wait,p2.username,p3.name as borrow_name,p3.borrow_period,p3.borrow_apr,p3.borrow_nid,p4.username as change_username";
		$_order = " order by p1.id desc";
		if (IsExiest($data['order'])!=""){
			$order = $data['order'];
			if ($order == "time_up"){
				$_order = "order by p1.id asc";
			}
		}
		if (IsExiest($data['apr'])!=""){
			if ($data['apr']=="apr_up"){
				$_order.=",p3.`borrow_apr` desc";
			}elseif ($data['apr']=="apr_down"){
				$_order.=",p3.`borrow_apr` asc";
			}
		}
		$sql = "select $_select from  `{borrow_change}` as p0 left join`{borrow_tender}` as p1  on p0.tender_id=p1.id  left join `{users}` as p2 on p1.user_id=p2.user_id left join `{borrow}` as p3 on p1.borrow_nid=p3.borrow_nid  left join `{users}` as p4 on p1.change_userid=p4.user_id $_sql $_order ";
		$result=$mysql->db_fetch_array($sql);
		return $result;
	}
	
	function UpdateBorrowCount($data = array()){
		global $mysql;
		if ($data['user_id']=="") return "";
		$user_id =$data['user_id'];
		$result = $mysql->db_fetch_array("select 1 from `{borrow_count}` where user_id='{$data['user_id']}'");
		if ($result==false){
			$sql= "insert into `{borrow_count}` set user_id='{$data['user_id']}'";
			$mysql->db_query($sql);
			
		}
		$sql = "update `{borrow_count}` set user_id='{$data['user_id']}'";
		unset ($data['user_id']);
		foreach ($data as $key => $value){
			$sql .= ",`{$key}`=`{$key}`+{$value}";
		}
		$sql .= " where user_id='{$user_id}'";
		$mysql->db_query($sql);
		return "";		
	}
	
	function AddUsersLog($data){
		global $mysql;
		$sql = "insert into `{users_log}` set  addtime='".time()."',addip='".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		$mysql->db_query($sql);
	}
	
	function GetUsers($data = array()){
		global $mysql;
		$_sql = " where 1=1 ";
		//�ж��û�id
		if (IsExiest($data['user_id']) != false){
			$_sql .= " and p1.`user_id`  = '{$data['user_id']}'";
		}
		
		//�ж��Ƿ������û���
		elseif (IsExiest($data['username']) != false){
			$_sql .= " and p1.`username` like '%{$data['username']}%'";
		}
		
		//�ж��Ƿ���������
		elseif (IsExiest($data['email']) != false){
			$_sql .= " and p1.`email` like '%{$data['email']}%'";
		}
		
		$_select = "*";
		$sql = "select SELECT  from `{users}` as p1 SQL";
		return $mysql->db_fetch_array(str_replace(array('SELECT', 'SQL'), array($_select, $_sql), $sql));
		return $result;
	}
	
	//���ծȨ
	function WebVerifyChange($data){
		global $mysql;
		//�ж��Ƿ����û���
		$sql = "select * from `{borrow_change}` where  id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		
		if ($result==false) return "borrow_change_verify_error";
		
		if ($result['status']!=4) return "borrow_change_verify_error";
		
		
		$sql = "select p1.*,p2.name,p2.user_id as borrowuser from `{borrow_tender}` as p1 left join `{borrow}` as p2 on p2.borrow_nid=p1.borrow_nid where p1.id='{$result['tender_id']}'";
		$tender_result = $mysql->db_fetch_array($sql);
		$repaysql="select count(1) as no_repay_times from `{borrow_repay}` where borrow_nid={$tender_result['borrow_nid']} and repay_status=0";
		$repay_result = $mysql->db_fetch_array($repaysql);
		$change_fee = round($tender_result['recover_account_interest_wait']*0.05,2);//�������
		
		$result['borrow_name']="<a href=/invest/a{$tender_result['borrow_nid']}.html>{$tender_result['name']}</a>";
		
		
		if ($data['status']==1){
			$status=1;
		}else{
			$status=6;
		}
		$sql = "update `{borrow_tender}` set change_status={$status},change_userid='{$data['user_id']}' where id='{$result['tender_id']}'";
		$mysql->db_query($sql);
		
		$sql = "update `{borrow_change}` set status={$status},buy_userid='{$data['user_id']}',buy_time='".time()."' where id='{$data['id']}'";
		$mysql->db_query($sql);
		
		if ($status==1){
		
		$nidsql="select max(change_nid) as maxnid from `{borrow_change}`";
		$nid=$mysql->db_fetch_array($nidsql);
		if ($nid['maxnid']==""){
			$today = date("Ym");
			$data["change_nid"]=$today."00001";
		}else{
			$today = date("Ym");
			$pid = str_replace($today,'',$nid['maxnid']);
			if (strlen($pid)==strlen($nid['maxnid'])){
				$data["change_nid"]=$today."00001";
			}else{
				$pid = $today.str_pad($pid,5,"0",STR_PAD_LEFT);
				$data["change_nid"]=$pid+1;
			}
		}
		//���ӳ���ծȨ�ĳɹ����
		$account = round($tender_result['recover_account_wait']*0.7,2);//�������
		$log_info["user_id"] = $result['user_id'];//�����û�id
		$log_info["nid"] = "borrow_change_sell_".$result['user_id']."_".$result['tender_id'];//������
		$log_info["money"] = $account;//�������
		$log_info["income"] = $account;//����
		$log_info["expend"] = 0;//֧��
		$log_info["balance"] = $account;//�����ֽ��
		$log_info["balance_cash"] = $account;//�����ֽ��
		$log_info["balance_frost"] = 0;//�������ֽ��
		$log_info["frost"] = 0;//������
		$log_info["await"] = -$tender_result['recover_account_wait'];//���ս��
		$log_info["type"] = "borrow_change_sell";//����
		$log_info["to_userid"] = 0;//����˭
		$log_info["remark"] =  "�ɹ�����[{$result['borrow_name']}]ծȨ�Ľ��";
		accountClass::AddLog($log_info);
		
		self::UpdateBorrowCount(array("user_id"=>$result['user_id'],"tender_recover_times_wait"=>-$repay_result['no_repay_times'],"tender_recover_wait"=>-$tender_result['recover_account_wait']));
		
		$sql = "update `{borrow_change}` set web_account={$account},change_nid='{$data['change_nid']}' where id='{$data['id']}'";
		$mysql->db_query($sql);
		
		//�۳������
		$log_info["user_id"] = $result['user_id'];//�����û�id
		$log_info["nid"] = "borrow_change_sell_fee_".$result['user_id']."_".$result['tender_id'];//������
		$log_info["money"] = $change_fee;//�������
		$log_info["income"] = 0;//����
		$log_info["expend"] = $change_fee;//֧��
		$log_info["balance"] = -$change_fee;//�����ֽ��
		$log_info["balance_cash"] = -$change_fee;//�����ֽ��
		$log_info["balance_frost"] = 0;//�������ֽ��
		$log_info["frost"] = 0;//������
		$log_info["await"] = 0;//���ս��
		$log_info["type"] = "borrow_change_sell_fee";//����
		$log_info["to_userid"] = 0;//����˭
		$log_info["remark"] =  "�۳�����[{$result['borrow_name']}]ծȨ��������";
		accountClass::AddLog($log_info);
		
		$user_log["user_id"] = $result['user_id'];
		$user_log["code"] = "borrow";
		$user_log["type"] = "borrow_change";
		$user_log["operating"] = "borrow";
		$user_log["article_id"] = $result['user_id'];
		$user_log["result"] = 1;
		$user_log["content"] = "�ɹ�����[{$result['borrow_name']}]ծȨ�Ľ��,[<a href=/debt_protocol/a{$data['id']}.html target=_blank>����˴�</a>]�鿴Э����";
		self::AddUsersLog($user_log);	
		
		$borrowuser=self::GetUsers(array("user_id"=>$tender_result['borrowuser']));
		$selluser=self::GetUsers(array("user_id"=>$result['user_id']));
		
		
		$remind['nid'] = "borrow_change_yes";
		$remind['receive_userid'] = $tender_result['borrowuser'];
		$remind['code'] = "borrow";
		$remind['article_id'] =$tender_result['borrow_nid'];
		$remind['title'] = "{$tender_result['name']}ծȨ��ת��";
		$remind['content'] = "�����Ľ���[{$result['borrow_name']}]��{$selluser['username']}�����е�ծȨ����".date("Y-m-d",time())."ת�ø���վ";
		remindClass::sendRemind($remind);
		}
		return $data['id'];
	}
	
	function AddAdminLog($data){
		global $mysql;
		$data["data"] = serialize($data["data"]);
		$sql = "insert into `{users_adminlog}` set  addtime='".time()."',addip='".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		$mysql->db_query($sql);
	}
}

if ($_REQUEST['change_check']!=""){
	if (isset($_POST['remark']) && $_POST['remark']!=""){
		$msg = check_valicode();
		if ($msg==""){
			$var = array("status","remark");
			$data = post_var($var);
			$data['id'] = $_REQUEST['change_check'];
			$result = borrowChangeClass::WebVerifyChange($data);
			if ($result>0){
				$msg = array($MsgInfo["borrow_change_verify_success"],"",$_A['query_url_all']);
			}else{
				$msg = array($MsgInfo[$result]);
			}
			
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "borrow";
			$admin_log["type"] = "change";
			$admin_log["operating"] = "verify";
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			borrowChangeClass::AddAdminLog($admin_log);
		}
	}
}
?>