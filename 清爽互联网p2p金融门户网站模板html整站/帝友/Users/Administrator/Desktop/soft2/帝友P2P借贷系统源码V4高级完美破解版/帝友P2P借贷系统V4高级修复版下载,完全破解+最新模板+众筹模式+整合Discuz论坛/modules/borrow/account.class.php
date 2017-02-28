<?
/******************************
 * $File: account.class.php
 * $Description: �ʽ����ļ�
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

require_once("account.model.php");
require_once(ROOT_PATH."modules/credit/credit.class.php");

class accountClass{
	
	/**
	 * �ʽ������б�
	 *
	 * @return Array
	 */
	function GetList($data = array()){
		global $mysql;
		
		$_sql = "where 1=1 ";	
			 
		//�����û�id
		if (IsExiest($data['user_id'])!=false) {
			$_sql .= " and p1.user_id = '{$data['user_id']}'";
		}else{
			$_sql .= " and p1.user_id !=0";
		}
		
		//�����û���
		if (IsExiest($data['username'])!=false) {
			$_sql .= " and p2.username = '{$data['username']}'";
		}
		
		$_select = "p1.*,p2.username";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from {account} as p1 
				 left join {users} as p2 on p1.user_id=p2.user_id
				SQL ORDER LIMIT";
		
		//��������
		if (IsExiest($data['excel'])=="true"){
			
		} 
		//�Ƿ���ʾȫ������Ϣ
		elseif (IsExiest($data['limit'])!=false){
			if ($data['limit'] != "all"){ $_limit = "  limit ".$data['limit']; }
			return $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $sql));
		}			 
		
		//�ж��ܵ�����
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array('count(1) as num', $_sql,'', ''), $sql));
		$total = intval($row['num']);
		
		//��ҳ���ؽ��
		$data['page'] = !IsExiest($data['page'])?1:$data['page'];
		$data['epage'] = !IsExiest($data['epage'])?10:$data['epage'];
		$total_page = ceil($total / $data['epage']);
		$_limit = " limit ".($data['epage'] * ($data['page'] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		
		return $result;
	}
	
	
	/**
	 * �ʽ��¼�б�
	 *
	 * @return Array
	 */
	function GetLogList($data = array()){
		global $mysql;
		
		$_sql = "where 1=1 ";	
			 
		//�����û�id
		if (IsExiest($data['user_id'])!=false) {
			$_sql .= " and p1.user_id = '{$data['user_id']}'";
		}elseif ($data['user_id']=="" && $data['type']!=2){
			$_sql .= " and p1.user_id !=0";
		}
		
		//�����û���
		if (IsExiest($data['username'])!=false) {
			$_sql .= " and p2.username = '".urldecode($data['username'])."'";
		}
		
		if (IsExiest($data['type'])!=false) {
			$type = ($data['type']=="request")?$_REQUEST['type']:$data['type'];
			if ($type==3){
				$_sql .= " and p1.type = 'tender_spread' or p1.type = 'borrow_spread'";
			}elseif ($type==2){
				$_sql .= " and p1.type = 'repay_late_web' or p1.type = 'web_repay' or p1.type like '%fengxianchi%'";
			}else{
				$_sql .= " and p1.type = '{$type}'";
			}
		}
		
		if (IsExiest($data['nid'])!=false) {
			$_sql .= " and p1.nid = '{$data['nid']}'";
		}
		
		if (IsExiest($data['dotime1']) != false){
			$dotime1 = ($data['dotime1']=="request")?$_REQUEST['dotime1']:$data['dotime1'];
			if ($dotime1!=""){
				$_sql .= " and p1.addtime > ".get_mktime($dotime1);
			}
		}
		
		if (IsExiest($data['dotime2'])!=false){
			$dotime2 = ($data['dotime2']=="request")?$_REQUEST['dotime2']:$data['dotime2'];
			if ($dotime2!=""){
				$_sql .= " and p1.addtime < ".get_mktime($dotime2);
			}
		}
		$_select = "p1.*,p2.username";
		$_order = " order by p1.id desc ";
		$sql = "select SELECT from {account_log} as p1 
				 left join {users} as p2 on p1.user_id=p2.user_id
				SQL ORDER LIMIT";
		
		//��������
		if (IsExiest($data['excel'])=="true"){
			
		} 
		//�Ƿ���ʾȫ������Ϣ
		elseif (IsExiest($data['limit'])!=false){
			if ($data['limit'] != "all"){ $_limit = "  limit ".$data['limit']; }
			return $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $sql));
		}			 
		
		//�ж��ܵ�����
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array('count(1) as num', $_sql,'', ''), $sql));
		$total = intval($row['num']);
		
		//��ҳ���ؽ��
		$data['page'] = !IsExiest($data['page'])?1:$data['page'];
		$data['epage'] = !IsExiest($data['epage'])?10:$data['epage'];
		$total_page = ceil($total / $data['epage']);
		$_limit = " limit ".($data['epage'] * ($data['page'] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		$sql="select sum(p1.money) as all_money from `{account_log}` as p1 left join {users} as p2 on p1.user_id=p2.user_id $_sql";
		$all_money=$mysql->db_fetch_array($sql);
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page,'all_money'=>$all_money['all_money']);
		
		return $result;
	}
	
	
	/**
	 * ��ȡ��վ�ʽ��¼
	 *
	 * @return Array
	 */
	function GetWebList($data = array()){
		global $mysql;
		
		$_sql = "where 1=1 ";	
			 
		//�����û�id
		if (IsExiest($data['user_id'])!=false) {
			$_sql .= " and p1.user_id = '{$data['user_id']}'";
		}
		
		if (IsExiest($data['type'])!=false) {
			$_sql .= " and p1.type = '{$data['type']}'";
		}
		
		if (IsExiest($data['dotime1']) != false){
			$dotime1 = ($data['dotime1']=="request")?$_REQUEST['dotime1']:$data['dotime1'];
			if ($dotime1!=""){
				$_sql .= " and p1.addtime > ".get_mktime($dotime1);
			}
		}
		
		if (IsExiest($data['dotime2'])!=false){
			$dotime2 = ($data['dotime2']=="request")?$_REQUEST['dotime2']:$data['dotime2'];
			if ($dotime2!=""){
				$_sql .= " and p1.addtime < ".get_mktime($dotime2);
			}
		}
		
		$_select = "p1.*,p2.username";
		$_order = " order by p1.addtime desc ";
		$sql = "select SELECT from {account_web} as p1 
				 left join {users} as p2 on p1.user_id=p2.user_id
				SQL ORDER LIMIT";
		
		//�Ƿ���ʾȫ������Ϣ
		if (IsExiest($data['limit'])!=false){
			if ($data['limit'] != "all"){ $_limit = "  limit ".$data['limit']; }
			return $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $sql));
		}			 
		
		//�ж��ܵ�����
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array('count(1) as num', $_sql,'', ''), $sql));
		$total = intval($row['num']);
		
		//��ҳ���ؽ��
		$data['page'] = !IsExiest($data['page'])?1:$data['page'];
		$data['epage'] = !IsExiest($data['epage'])?10:$data['epage'];
		$total_page = ceil($total / $data['epage']);
		$_limit = " limit ".($data['epage'] * ($data['page'] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		$sql="select sum(p1.money) as all_money from `{account_web}` as p1 left join {users} as p2 on p1.user_id=p2.user_id $_sql";
		$all_money=$mysql->db_fetch_array($sql);
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page,'all_money'=>round($all_money['all_money'],2));
		
		return $result;
	}
	
	/**
	 * ��վ�����б�
	 *
	 * @return Array
	 */
	function GetBalanceList($data = array()){
		global $mysql;
		
		$_sql = "where 1=1 ";	
			 
		//�����û�id
		if (IsExiest($data['user_id'])!=false) {
			$_sql .= " and p1.user_id = '{$data['user_id']}'";
		}
		
		//�����û���
		if (IsExiest($data['username'])!=false) {
			$_sql .= " and p1.remark like '%{$data['username']}%'";
		}
		
		//�ж����ʱ�俪ʼ
		if (IsExiest($data['dotime1']) != false){
			$dotime1 = ($data['dotime1']=="request")?$_REQUEST['dotime1']:$data['dotime1'];
			if ($dotime1!=""){
				$_sql .= " and p1.addtime > ".get_mktime($dotime1);
			}
		}
		
		//�ж����ʱ�����
		if (IsExiest($data['dotime2'])!=false){
			$dotime2 = ($data['dotime2']=="request")?$_REQUEST['dotime2']:$data['dotime2'];
			if ($dotime2!=""){
				$_sql .= " and p1.addtime < ".get_mktime($dotime2);
			}
		}
		
		if (IsExiest($data['type'])!=false) {
			$_sql .= " and p1.type = '{$data['type']}'";
		}else{
			$_sql .= " and (type='borrow_success_manage' or type='borrow_success_account'  or type='borrow_change_sell_fee' or type='vip_success' or type='recharge_fee' or type='cash_fee' or type='late_repay_web' or type='borrow_change_buy_fee' or type='advance_web' or type='web_daicha' or type='web_tender_late_repay_yes')";
		}
		
		$_select = "p1.*,p2.username";
		$_order = " order by p1.addtime desc ";
		$sql = "select SELECT from {account_balance} as p1 
				 left join {users} as p2 on p1.user_id=p2.user_id
				SQL ORDER LIMIT";
		
		//��������
		if (IsExiest($data['excel'])=="true"){
			
		} 
		//�Ƿ���ʾȫ������Ϣ
		elseif (IsExiest($data['limit'])!=false){
			if ($data['limit'] != "all"){ $_limit = "  limit ".$data['limit']; }
			return $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $sql));
		}			 
		
		//�ж��ܵ�����
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array('count(1) as num', $_sql,'', ''), $sql));
		$total = intval($row['num']);
		
		//��ҳ���ؽ��
		$data['page'] = !IsExiest($data['page'])?1:$data['page'];
		$data['epage'] = !IsExiest($data['epage'])?10:$data['epage'];
		$total_page = ceil($total / $data['epage']);
		$_limit = " limit ".($data['epage'] * ($data['page'] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�����ÿ����0.1Ԫ
		$sql = "select count(1) as gongyijin from `{account_balance}` where type='borrow_success_manage'";
		$money=$mysql->db_fetch_array($sql);
		$gongyijin=$money['gongyijin']/10;
		if (IsExiest($data['type'])!=false) {
			$_sql1= " and type = '{$data['type']}'";
		}else{
			$_sql1= " and (type='borrow_success_manage' or type='borrow_success_account'  or type='borrow_change_sell_fee' or type='vip_success' or type='recharge_fee' or type='cash_fee' or type='late_repay_web' or type='borrow_change_buy_fee' or type='advance_web' or type='web_daicha' or type='web_tender_late_repay_yes')";
		}
		$sql = "select sum(money) as chengjiaofei from `{account_balance}` where 1=1 $_sql1";
		$money=$mysql->db_fetch_array($sql);
		$chengjiaofei=$money['chengjiaofei'];
		foreach ($list as $key => $value){
			if ($value['type']=="borrow_success_manage" || $value['type']=="borrow_success_account" || $value['type']=="borrow_change_sell_fee" || $value['type']=="vip_success" || $value['type']=="recharge_fee" || $value['type']=="cash_fee" || $value['type']=="borrow_repay_late" || $value['type']=="borrow_change_buy_fee" || $value['type']=="advance_web" || $value['type']=="web_daicha" || $value['type']=="web_tender_late_repay_yes"){
				$table[$key]['id']=$value['id'];
				$table[$key]['total']=$value['total'];
				$table[$key]['money']=$value['money'];
				$table[$key]['balance']=$value['balance'];
				$table[$key]['type']=$value['type'];
				$table[$key]['income']=$value['income'];
				$table[$key]['expend']=$value['expend'];
				$table[$key]['username']=$value['username'];
				$table[$key]['remark']=$value['remark'];
				$table[$key]['addtime']=$value['addtime'];
				$table[$key]['addip']=$value['addip'];
			}
		}
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page,'gongyijin'=>$gongyijin,'chengjiaofei'=>$chengjiaofei,'table'=>$table);
		
		return $result;
		
	}
	
	
	/**
	 * �û������б�
	 *
	 * @return Array
	 */
	function GetUsersList($data = array()){
		global $mysql;
		
		$_sql = "where 1=1 ";	
			 
		//�����û�id
		if (IsExiest($data['user_id'])!=false) {
			$_sql .= " and p1.user_id = '{$data['user_id']}'";
		}else{
			$_sql .= " and p1.user_id !=0";
		}
		
		if (IsExiest($data['type'])!=false) {
			$_sql .= " and p1.type = '{$data['type']}'";
		}
		
		//�����û���
		if (IsExiest($data['username'])!=false) {
			$_sql .= " and p2.username like '%{$data['username']}%'";
		}
		
		//�ж����ʱ�俪ʼ
		if (IsExiest($data['dotime1']) != false){
			$dotime1 = ($data['dotime1']=="request")?$_REQUEST['dotime1']:$data['dotime1'];
			if ($dotime1!=""){
				$_sql .= " and p1.addtime > ".get_mktime($dotime1);
			}
		}
		
		//�ж����ʱ�����
		if (IsExiest($data['dotime2'])!=false){
			$dotime2 = ($data['dotime2']=="request")?$_REQUEST['dotime2']:$data['dotime2'];
			if ($dotime2!=""){
				$_sql .= " and p1.addtime < ".get_mktime($dotime2);
			}
		}
		
		$_select = "p1.*,p2.username,p3.await as account_await";
		$_order = " order by p1.id desc ";
		$sql = "select SELECT from {account_users} as p1 
				 left join {users} as p2 on p1.user_id=p2.user_id
				 left join {account} as p3 on p1.user_id=p3.user_id
				SQL ORDER LIMIT";
		
		//��������
		if (IsExiest($data['excel'])=="true"){
			
		} 
		//�Ƿ���ʾȫ������Ϣ
		elseif (IsExiest($data['limit'])!=false){
			if ($data['limit'] != "all"){ $_limit = "  limit ".$data['limit']; }
			return $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $sql));
		}			 
		
		//�ж��ܵ�����
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array('count(1) as num', $_sql,'', ''), $sql));
		$total = intval($row['num']);
		
		//��ҳ���ؽ��
		$data['page'] = !IsExiest($data['page'])?1:$data['page'];
		$data['epage'] = !IsExiest($data['epage'])?10:$data['epage'];
		$total_page = ceil($total / $data['epage']);
		$_limit = " limit ".($data['epage'] * ($data['page'] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		
		return $result;
		
	}
	
	/**
	 * ��ȡ�����б�
	 *
	 * @return Array
	 */
	function GetCashList($data = array()){
		global $mysql;
		
		$_sql = "where 1=1 ";	
			 
		//�����û�id
		if (IsExiest($data['user_id'])!=false) {
			$_sql .= " and p1.user_id = '{$data['user_id']}'";
		}
		
		//�����û���
		if (IsExiest($data['username'])!=false) {
			$_sql .= " and p2.username like '%{$data['username']}%'";
		}
		
		//����״̬
		if (IsExiest($data['status'])!=false || $data['status']=="0") {
			$_sql .= " and p1.status = '{$data['status']}'";
		}
		
		if (IsExiest($data['dotime1']) != false){
			$dotime1 = ($data['dotime1']=="request")?$_REQUEST['dotime1']:$data['dotime1'];
			if ($dotime1!=""){
				$_sql .= " and p1.addtime > ".get_mktime($dotime1);
			}
		}
		
		//�ж����ʱ�����
		if (IsExiest($data['dotime2'])!=false){
			$dotime2 = ($data['dotime2']=="request")?$_REQUEST['dotime2']:$data['dotime2'];
			if ($dotime2!=""){
				$_sql .= " and p1.addtime < ".get_mktime($dotime2);
			}
		}
		
		$_select = "p1.*,p2.username,p3.realname,p4.name as bank_name";
		$_order = " order by p1.addtime desc ";
		$sql = "select SELECT from {account_cash} as p1 
				 left join {users} as p2 on p1.user_id=p2.user_id
				 left join {account_bank} p4 on p1.bank=p4.id
				 left join {users_info} as p3 on p1.user_id=p3.user_id
				SQL ORDER LIMIT";
		
		//��������
		if (IsExiest($data['excel'])=="true"){
			
		} 
		//�Ƿ���ʾȫ������Ϣ
		elseif (IsExiest($data['limit'])!=false){
			if ($data['limit'] != "all"){ $_limit = "  limit ".$data['limit']; }
			return $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $sql));
		}			 
		
		//�ж��ܵ�����
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array('count(1) as num', $_sql,'', ''), $sql));
		$total = intval($row['num']);
		
		//��ҳ���ؽ��
		$data['page'] = !IsExiest($data['page'])?1:$data['page'];
		$data['epage'] = !IsExiest($data['epage'])?10:$data['epage'];
		$total_page = ceil($total / $data['epage']);
		$_limit = " limit ".($data['epage'] * ($data['page'] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		$all_charge="select sum(total) as all_total,sum(fee) as all_fee from {account_cash} as p1 
				 left join {users} as p2 on p1.user_id=p2.user_id $_sql";
		$charge=$mysql->db_fetch_array($all_charge);
		$all_total=$charge['all_total'];
		$all_fee=$charge['all_fee'];
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page,'all_total' => $all_total,'all_fee' => $all_fee);
		
		return $result;
		
	}
	
	/**
	 * �����˻��б�
	 *
	 * @return Array
	 */
	function GetBankList($data = array()){
		global $mysql;
		
		$_sql = "where 1=1 ";	
			 
		//�����û�id
		if (IsExiest($data['keywords'])!=false) {
			$_sql .= " and p1.`name` like '%{$data['keywords']}%'";
		}
		
		$_select = "p1.*";
		$_order = " order by p1.addtime desc ";
		$sql = "select SELECT from {account_bank} as p1 
				SQL ORDER LIMIT";
		
		//��������
		if (IsExiest($data['excel'])=="true"){
			
		} 
		//�Ƿ���ʾȫ������Ϣ
		elseif (IsExiest($data['limit'])!=false){
			if ($data['limit'] != "all"){ $_limit = "  limit ".$data['limit']; }
			return $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $sql));
		}			 
		
		//�ж��ܵ�����
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array('count(1) as num', $_sql,'', ''), $sql));
		$total = intval($row['num']);
		
		//��ҳ���ؽ��
		$data['page'] = !IsExiest($data['page'])?1:$data['page'];
		$data['epage'] = !IsExiest($data['epage'])?10:$data['epage'];
		$total_page = ceil($total / $data['epage']);
		$_limit = " limit ".($data['epage'] * ($data['page'] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		
		return $result;
		
	}
	
	/**
	 * �����˻��б�
	 *
	 * @return Array
	 */
	function GetUsersBankList($data = array()){
		global $mysql;
		
		$_sql = "where 1=1 ";
		
		if (IsExiest($data['user_id'])!=false) {
			$_sql .= " and p1.user_id = '{$data['user_id']}'";
		}
		
		$_order = " order by p1.id desc";
		$_select = "p1.*,p2.username,p3.realname,p4.name as bank_name";
		$sql = "select SELECT from `{account_users_bank}` as p1
		 left join `{users}` as p2 on p1.user_id=p2.user_id 
		 left join `{account_bank}` as p4 on p1.bank=p4.id 
		 left join `{approve_realname}` as p3 on p1.user_id=p3.user_id SQL ORDER LIMIT";
		
		//��������
		if (IsExiest($data['excel'])=="true"){
			
		} 
		//�Ƿ���ʾȫ������Ϣ
		elseif (IsExiest($data['limit'])!=false){
			if ($data['limit'] != "all"){ $_limit = "  limit ".$data['limit']; }
			return $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $sql));
		}			 
		
		//�ж��ܵ�����
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array('count(1) as num', $_sql,'', ''), $sql));
		$total = intval($row['num']);
		
		//��ҳ���ؽ��
		$data['page'] = !IsExiest($data['page'])?1:$data['page'];
		$data['epage'] = !IsExiest($data['epage'])?10:$data['epage'];
		$total_page = ceil($total / $data['epage']);
		$_limit = " limit ".($data['epage'] * ($data['page'] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		
		return $result;
		
	}
	
	
	/**
	 * 1,��ȡ��ֵ�б�
	 *
	 * @param Array $data = arrray("user_id"=>"�û�id","status"=>"��ֵ״̬","username"=>"�û���","email"=>"����")
	 * @return Boolen
	 */
	function GetRechargeList($data = array()){
		global $mysql;
		
		$_sql = "where 1=1 ";
		
		//�����û�id
		if (IsExiest($data['user_id'])!=false) {
			$_sql .= " and p1.user_id = '{$data['user_id']}'";
		}
		
		//������״̬
		if (IsExiest($data['status'])!=false || $data['status']=="0") {
			$_sql .= " and p1.status = '{$data['status']}'";
		}
		
		//�����û���
		if (IsExiest($data['username'])!=false) {
			$_sql .= " and p2.username = '{$data['username']}'";
		}
		
		if (IsExiest($data['dotime1']) != false){
			$dotime1 = ($data['dotime1']=="request")?$_REQUEST['dotime1']:$data['dotime1'];
			if ($dotime1!=""){
				$_sql .= " and p1.addtime > ".get_mktime($dotime1);
			}
		}
		
		//�ж����ʱ�����
		if (IsExiest($data['dotime2'])!=false){
			$dotime2 = ($data['dotime2']=="request")?$_REQUEST['dotime2']:$data['dotime2'];
			if ($dotime2!=""){
				$_sql .= " and p1.addtime < ".get_mktime($dotime2);
			}
		}
		
		
		$_select = "p1.*,p2.username,p3.name as payment_name";
		if (IsExiest($data['order'])!=false) {
			if ($data['order']=="addtime_down"){
				$_order = " order by p1.addtime desc";
			}else{
				$_order = " order by p1.addtime asc";
			}
		}else{
			$_order = " order by p1.status asc,p1.addtime desc";
		}
		$sql = "select SELECT from {account_recharge} as p1 
				 left join {users} as p2 on p1.user_id=p2.user_id
				 left join {payment} as p3 on p1.payment=p3.id
				SQL ORDER LIMIT";	
		
		//��������
		if (IsExiest($data['excel'])=="true"){
			$result= $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select,  '  order by p1.addtime desc,id desc', ""), $sql));
			$title = array("����","֧����ʽ","��ֵ���","��ֵʱ��","��ע","״̬","����ע");
			$linkage_result = $_G['linkage'];
			foreach ($result as $key => $value){
				if ($value['type']==1) {
					$value['type']="���ϳ�ֵ";
				}else{
					$value['type']="���³�ֵ";
				}
				if ($value['status']==0){ $value['status']="�����"; }elseif ($value['status']==1){$value['status']="��ֵ�ɹ�";}elseif ($value['status']==2){$value['status']="��ֵʧ��";}
				$_data[$key] = array($value['type'],$value['payment_name'],$value['money'],date("Y-m-d",$value['addtime']),$value['remark'],$value['remark'],$value['status'],$value['verify_remark']);
			}
			exportData(date("Y-m-d",time())."��ֵ��¼����",$title,$_data);
			exit;
		} 
		//�Ƿ���ʾȫ������Ϣ
		elseif (IsExiest($data['limit'])!=false){
			if ($data['limit'] != "all"){ $_limit = "  limit ".$data['limit']; }
			return $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $sql));
		}			 
		
		//�ж��ܵ�����
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array('count(1) as num', $_sql,'', ''), $sql));
		$total = intval($row['num']);
		
		//��ҳ���ؽ��
		$data['page'] = !IsExiest($data['page'])?1:$data['page'];
		$data['epage'] = !IsExiest($data['epage'])?10:$data['epage'];
		$total_page = ceil($total / $data['epage']);
		$_limit = " limit ".($data['epage'] * ($data['page'] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		$all_charge="select sum(money) as all_balance,sum(fee) as all_fee from {account_recharge} as p1 
				 left join {users} as p2 on p1.user_id=p2.user_id $_sql";
		$charge=$mysql->db_fetch_array($all_charge);
		$all_balance=$charge['all_balance'];
		$all_fee=$charge['all_fee'];
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page,'all_fee' => $all_fee,'all_balance' => $all_balance);
		
		return $result;
	}
	
	
	/**
	 * �鿴
	 *
	 * @param Array $data
	 * @return Array
	 */
	public static function GetRecharge($data = array()){
		global $mysql;
		$_sql = "where 1=1 ";
			 
		if (IsExiest($data['id'])!=false) {
			$_sql .= " and p1.id = {$data['id']}";
		} 
		
		if (IsExiest($data['user_id'])!=false) {
			$_sql .= " and p2.user_id = {$data['user_id']}";
		}
		
		if (IsExiest($data['nid'])!=false) {
			$_sql .= " and p1.nid = {$data['nid']}";
		}
		$_select = "p1.*,p2.username,p2.email,p3.name as payment_name,p4.username as verify_username";
		$sql = "select $_select from `{account_recharge}` as p1 
				 left join `{users}` as p2 on p1.user_id=p2.user_id
				 left join `{payment}` as p3 on p1.payment = p3.id
				 left join `{users}` as p4 on p1.verify_userid=p4.user_id
				$_sql";
		$result = $mysql->db_fetch_array($sql);
		
		return $result;
			
	}
	
	/**
	 * ��ӳ�ֵ��¼
	 *
	 * @param Array $data = array("user_id"=>"�û�id","status"=>"״̬","money"=>"�������","remark"=>"��ע","type"=>"��ֵ����","payment"=>"��ֵ��ʽ","fee"=>"����","nid"=>"������");
	 * @return Boolen
	 */
	function AddRecharge($data = array()){
		global $mysql;
        
		//�ж��û�id�Ƿ����
		if (!IsExiest($data['user_id'])) {
			return "account_user_id_empty";
		}
       
		$sql = "insert into `{account_recharge}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		$result =  $mysql->db_query($sql);
		
		return $result;
	}
	
	
	/**
	 * ��ֵ���
	 *
	 * @param Array $data =array("nid"=>"������","verify_remark"=>"��˱�ע","status"=>"���״̬")
	 * @return Boolen
	 */
	function VerifyRecharge($data = array()){
		global $mysql,$MsgInfo;
		
		//�ж϶������Ƿ����
		if (!IsExiest($data['nid'])) {
			return "account_nid_empty";
		}
		
		
		$sql = "select p1.*,p2.username,p3.name as payment_name from `{account_recharge}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id left join `{payment}` as p3 on p1.payment=p3.id where p1.`nid`='{$data['nid']}'";
		$result = $mysql->db_fetch_array($sql);
		
		$recharge_userid = $result['user_id'];//��ֵ�û�id
		$recharge_balance = $result['balance'];//���
		$recharge_money = $result['money'];//���
		$recharge_fee = $result['fee'];//���
		$username = $result['username'];//�û���
		$payment = $result['payment_name'];//�û���
		$id = $result['id'];
		//�ж϶������Ƿ����
		if ($result==false) return "account_recharge_not_exiest";
		
		//�ж��Ƿ��Ѿ����
		if ($result['status']!=0) return "account_recharge_yes_verify";
		
		$sql = "select count(1) as num from `{account_recharge}` where `nid`='{$data['nid']}'";
		$result = $mysql->db_fetch_array($sql);
		//�ж϶������Ƿ�����
		if ($result['num']>1) return "account_recharge_nid_error";
		
		$sql = "update `{account_recharge}` set status='{$data['status']}',verify_time='".time()."',verify_userid='".$data['verify_userid']."',verify_remark='".$data['verify_remark']."' where nid = '{$data['nid']}'";
        $mysql->db_query($sql);
		
		if ($data['status']==1){
			
			$log_info["user_id"] = $recharge_userid;//�����û�id
			$log_info["nid"] = $data['nid'];//������
			$log_info["money"] = $recharge_money;//�������
			$log_info["income"] = $recharge_money;//����
			$log_info["expend"] = 0;//֧��
			$log_info["balance"] = $recharge_money;//�����ֽ��
			$log_info["balance_cash"] = $recharge_money;//�����ֽ��
			$log_info["balance_frost"] = 0;//�������ֽ��
			$log_info["frost"] = 0;//������
			$log_info["await"] = 0;//���ս��
			$log_info["type"] = "recharge";//����
			$log_info["to_userid"] = 0;//����˭
			$log_info["remark"] = "ͨ��{$payment}��ֵ��{$recharge_money}Ԫ";//��ע
			$result = self::AddLog($log_info);
			
			//�����û�������¼
			$user_log["user_id"] = $recharge_userid;
			$user_log["code"] = "account";
			$user_log["type"] = "recharge";
			$user_log["operating"] = "success";
			$user_log["article_id"] = $data['nid'];
			$user_log["result"] = 1;
			$user_log["content"] =  str_replace(array('#keywords#'), array($username), $MsgInfo["account_recharge_userlog_success"].$log_info["remark"] );
			usersClass::AddUsersLog($user_log);	
			
			$log_info["user_id"] = $recharge_userid;//�����û�id
			$log_info["nid"] = "recharge_fee_".$data['nid'];//������
			$log_info["money"] = $recharge_fee;//�������
			$log_info["income"] = 0;//����
			$log_info["expend"] = $recharge_fee;//֧��
			$log_info["balance"] = -$recharge_fee;//�����ֽ��
			$log_info["balance_cash"] = -$recharge_fee;//�����ֽ��
			$log_info["balance_frost"] = 0;//�������ֽ��
			$log_info["frost"] = 0;//������
			$log_info["await"] = 0;//���ս��
			$log_info["type"] = "recharge_fee";//����
			$log_info["to_userid"] = 0;//����˭
			$log_info["remark"] = "ͨ��{$payment}��ֵ�۳�������{$recharge_fee}Ԫ";//��ע
			$result = self::AddLog($log_info);
			
			$UsersVip=usersClass::GetUsersVip(array("user_id"=>$recharge_userid));
			if ($UsersVip['status']==1){
				$fee=0.6-$_G['system']['con_account_recharge_vip_fee'];
				$web['money']=$recharge_money/100*$fee;
			}else{
				$fee=0.6-$_G['system']['con_account_recharge_fee'];
				$web['money']=$recharge_money/100*$fee;
			}
			$web['user_id']=$recharge_userid;
			$web['nid']="web_recharge_fee_".$recharge_userid."_".time();
			$web['type']="web_recharge_fee";
			$web['remark']="�û���ֵ{$recharge_money}����վ�渶{$web['money']}";
			self::AddAccountWeb($web);
		}
		
		
		return $id;
	}
	
	
	/**
	 * ��ֵ���
	 *
	 * @param Array $data =array("nid"=>"������","verify_remark"=>"��˱�ע","status"=>"���״̬")
	 * @return Boolen
	 */
	function AddLog($data = array()){
		global $mysql;
		
		//��һ������ѯ�Ƿ����ʽ��¼
		$sql = "select * from `{account_log}` where `nid` = '{$data['nid']}'";
		$result = $mysql -> db_fetch_array($sql);
		if ($result['nid']!="") return "account_log_nid_exiest";
		
		//�ڶ�������ѯԭ�������ʽ�
		$sql = "select * from `{account}` where user_id='{$data['user_id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false){
			$sql = "insert into `{account}` set user_id='{$data['user_id']}',total=0";
			$mysql->db_query($sql);
			$sql = "select * from `{account}` where user_id='{$data['user_id']}'";
			$result = $mysql->db_fetch_array($sql);
		}
		
		//�������������û��Ĳ����¼
		$sql = "insert into `{account_log}` set ";
		
		$sql .= "nid='{$data['nid']}',";
		$sql .= "user_id='{$data['user_id']}',";
		$sql .= "type='{$data['type']}',";
		$sql .= "money='{$data['money']}',";
		$sql .= "remark='{$data['remark']}',";
		$sql .= "to_userid='{$data['to_userid']}',";
		
		$sql .= "balance_cash_new='{$data['balance_cash']}',";
		$sql .= "balance_cash_old='{$result['balance_cash']}',";
		$sql .= "balance_cash=balance_cash_new+balance_cash_old,";
		
		$sql .= "balance_frost_new='{$data['balance_frost']}',";
		$sql .= "balance_frost_old='{$result['balance_frost']}',";
		$sql .= "balance_frost=balance_frost_new+balance_frost_old,";
		
		$sql .= "balance_new=balance_cash_new+balance_frost_new,";
		$sql .= "balance_old='{$result['balance']}',";
		$sql .= "balance=balance_new+balance_old,";
		
		$sql .= "income_new='{$data['income']}',";
		$sql .= "income_old='{$result['income']}',";
		$sql .= "income=income_new+income_old,";
		
		$sql .= "expend_new='{$data['expend']}',";
		$sql .= "expend_old='{$result['expend']}',";
		$sql .= "expend=expend_new+expend_old,";
		
		$sql .= "frost_new='{$data['frost']}',";
		$sql .= "frost_old='{$result['frost']}',";
		$sql .= "frost=frost_new+frost_old,";
		
		$sql .= "await_new='{$data['await']}',";
		$sql .= "await_old='{$result['await']}',";
		$sql .= "await=await_new+await_old,";
		
		$sql .= "total_old='{$result['total']}',";
		$sql .= "total=balance+frost+await,";
		$sql .=" `addtime` = '".time()."',`addip` = '".ip_address()."'";
		$mysql->db_query($sql);
		$id = $mysql->db_insert_id();
		
		$sql = "select * from `{account_log}` where user_id='{$data['user_id']}' and id='{$id}'";
		$result = $mysql->db_fetch_array($sql);
		
		//���Ĳ��������û���
		$sql = "update `{account}` set income={$result['income']},expend='{$result['expend']}',";
		$sql .= "balance_cash={$result['balance_cash']},balance_frost={$result['balance_frost']},";
		$sql .= "frost={$result['frost']},";
		$sql .= "await={$result['await']},";
		$sql .= "balance={$result['balance']},";
		$sql .= "total={$result['total']}";
		$sql .=" where user_id='{$data['user_id']}'";
		$mysql->db_query($sql);
		
		//��������������վ���ܷ���
		$sql = "select * from `{account_balance}` where `nid` = '{$data['nid']}'";
		$result = $mysql -> db_fetch_array($sql);
		if ($result==false){
			//������վ�Ĳ����
			$sql = "select * from `{account_balance}` order by id desc";
			$result = $mysql -> db_fetch_array($sql);
			if ($result==false){
				$result['total'] = 0;
				$result['balance'] = 0;
			}
			$total = $result['total'] + $data['income'] + $data['expend'];
			$sql = "insert into `{account_balance}` set total='{$total}',balance={$result['balance']}+".$data['income']."-".$data['expend'].",income='{$data['income']}',expend='{$data['expend']}',type='{$data['type']}',`money`='{$data['money']}',user_id='{$data['user_id']}',nid='{$data['nid']}',remark='{$data['remark']}', `addtime` = '".time()."',`addip` = '".ip_address()."'";
			$mysql->db_query($sql);
		}
		
		//�������������û����ܷ���
		$sql = "select * from `{account_users}` where `nid` = '{$data['nid']}'";
		$result = $mysql -> db_fetch_array($sql);
		if ($result==false){
			//�����û��Ĳ����
			$sql = "select * from `{account_users}` where user_id='{$data['user_id']}' order by id desc ";
			$result = $mysql -> db_fetch_array($sql);
			if ($result==false){
				$result['total'] = 0;
				$result['balance'] = 0;
			}
			$total = $result['total'] + $data['income'] + $data['expend'];
			$sql = "insert into `{account_users}` set total='{$total}',balance={$result['balance']}+".$data['income']."-".$data['expend'].",income='{$data['income']}',expend='{$data['expend']}',type='{$data['type']}',`money`='{$data['money']}',user_id='{$data['user_id']}',nid='{$data['nid']}',remark='{$data['remark']}', `addtime` = '".time()."',`addip` = '".ip_address()."',await='{$data['await']}',frost='{$data['frost']}'";
			$mysql->db_query($sql);
		}
		
		
		
		return $data['nid'];
		
	}
	
	/**
	 * �������
	 *
	 * @param Array $data =array("name"=>"����","nid"=>"��ʶ��","litpic"=>"����ͼ","cash_money"=>"���ֽ��","reach_day"=>"����ʱ��")
	 * @return Boolen
	 */
	function AddBank($data = array()){
		global $mysql;
		//�ж������Ƿ����
		if (!IsExiest($data['name'])) {
			return "account_bank_name_empty";
		}
		
		//�жϱ�ʶ���Ƿ����
		if (!IsExiest($data['nid'])) {
			return "account_bank_nid_empty";
		}
		
		$sql = "insert into `{account_bank}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		$mysql->db_query($sql);
		return $mysql->db_insert_id();
	
	}
	
	
	/**
	 * ����û�����
	 *
	 * @param Array $data =array("name"=>"����","nid"=>"��ʶ��","litpic"=>"����ͼ","cash_money"=>"���ֽ��","reach_day"=>"����ʱ��")
	 * @return Boolen
	 */
	function AddUsersBank($data = array()){
		global $mysql;
		//�ж������Ƿ����
		
		$sql = "insert into `{account_users_bank}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		
		$mysql->db_query($sql);
		return $mysql->db_insert_id();
		
	}
	
	function AddAccountWeb($data = array()){
		global $mysql;
		//�ж������Ƿ����
		
		$sql = "insert into `{account_web}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		
		$mysql->db_query($sql);
		return $mysql->db_insert_id();
		
	}
	
	
	/**
	 * �޸�����
	 *
	 * @param Array $data =array("name"=>"����","nid"=>"��ʶ��","litpic"=>"����ͼ","cash_money"=>"���ֽ��","reach_day"=>"����ʱ��")
	 * @return Boolen
	 */
	function UpdateBank($data = array()){
		global $mysql;
		
		//�ж�id�Ƿ����
		if (!IsExiest($data['id'])) {
			return "account_bank_id_empty";
		}
		
		//�ж������Ƿ����
		if (!IsExiest($data['name'])) {
			return "account_bank_name_empty";
		}
		
		//�жϱ�ʶ���Ƿ����
		if (!IsExiest($data['nid'])) {
			return "account_bank_nid_empty";
		}
		
		$sql = "update `{account_bank}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
		$sql .= join(",",$_sql)." where id='{$data['id']}'";
		$mysql->db_query($sql);
		return $data['id'];
	
	}

	
	/**
	 * �����û�������Ϣ
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function UpdateUsersBank($data = array()){
		global $mysql;
		
		//�ж�id�Ƿ����
		if (!IsExiest($data['user_id'])) {
			return "account_bank_userid_empty";
		}
		self::GetUsersBankOne(array("user_id"=>$data['user_id']));
		
		$sql = "update `{account_users_bank}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
		$sql .= join(",",$_sql)." where user_id='{$data['user_id']}'";
		$mysql->db_query($sql);
		return $data['user_id'];
	
	}
	
	/**
	 * ��ȡ�û��ʽ���Ϣ
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function GetOne($data = array()){
		global $mysql;
		$_sql = "where 1=1 ";
			 
		if (IsExiest($data['user_id'])!=false) {
			$_sql .= " and p1.user_id = {$data['user_id']}";
		}
		
		$_select = "p1.*";
		$sql = "select $_select from `{account}` as p1 $_sql";
		$result = $mysql->db_fetch_array($sql);
		
		return $result;
	}
	
	
	/**
	 * �޸�����
	 *
	 * @param Array $data =array("name"=>"����","nid"=>"��ʶ��","litpic"=>"����ͼ","cash_money"=>"���ֽ��","reach_day"=>"����ʱ��")
	 * @return Boolen
	 */
	function DeleteBank($data = array()){
		global $mysql;
		
		//�ж�id�Ƿ����
		if (!IsExiest($data['id'])) {
			return "account_bank_id_empty";
		}
		
		$sql = "delete from `{account_bank}`  where id='{$data['id']}'";
		$mysql->db_query($sql);
		return $data['id'];
	
	}
	
	function DeleteUserBank($data = array()){
		global $mysql;
		
		//�ж�id�Ƿ����
		if (!IsExiest($data['id'])) {
			return "account_bank_id_empty";
		}
		
		$sql = "delete from `{account_users_bank}`  where id='{$data['id']}'";
		$mysql->db_query($sql);
		return $data['id'];
	
	}
	
	
	
	function GetUsersBankOne($data = array()){
		global $mysql;
		$_sql = "where 1=1 ";
			 
		//�ж�id�Ƿ����
		if (!IsExiest($data['user_id'])) {
			return "account_bank_userid_empty";
		}
		
		if (IsExiest($data['user_id'])!=false) {
			$_sql .= " and p1.user_id = '{$data['user_id']}'";
		}
		
		$_select = "p1.*,p2.username,p2.paypassword,p3.realname,p4.name as bank_name,p5.total,p5.balance,p5.balance_cash";
		$sql = "select $_select from `{account_users_bank}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id 
		left join `{account_bank}` as p4 on p1.bank=p4.id 
		left join `{account}` as p5 on p1.user_id=p5.user_id 
		left join `{approve_realname}` as p3 on p1.user_id=p3.user_id $_sql";
		$result = $mysql->db_fetch_array($sql);
		/*if ($result==false){
			$sql = "insert into `{account_users_bank}` set user_id={$data['user_id']}";
			$mysql->db_query($sql);
		}*/
		return $result;
	}
	
	function GetAccountUsers($data = array()){
		global $mysql;
		$_sql = "where 1=1 ";
			 
		//�ж�id�Ƿ����
		if (!IsExiest($data['user_id'])) {
			return "account_bank_userid_empty";
		}
		
		if (IsExiest($data['user_id'])!=false) {
			$_sql .= " and p1.user_id = '{$data['user_id']}'";
		}
		
		$_select = "p1.*";
		$sql = "select $_select from `{account}` as p1 $_sql";
		$result = $mysql->db_fetch_array($sql);
		
		return $result;
	}
	
	
	//��ȡ������Ϣ
	function GetCashOne($data = array()){
		global $mysql;
		$_sql = "where 1=1 ";
			 
		if (IsExiest($data['id'])!=false) {
			$_sql .= " and p1.id = {$data['id']}";
		} 
		
		if (IsExiest($data['user_id'])!=false) {
			$_sql .= " and p1.user_id = {$data['user_id']}";
		} 
		
		$_select = "p1.*,p2.username,p2.paypassword,p3.realname,p4.name as bank_name";
		$sql = "select $_select from `{account_cash}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id 
		left join `{account_bank}` as p4 on p1.bank=p4.id 
		left join `{approve_realname}` as p3 on p1.user_id=p3.user_id $_sql";
		$result = $mysql->db_fetch_array($sql);
		
		return $result;
	}
	
	
	function AddCash($data = array()){
		global $mysql,$_G;
		
		//�ж��û��Ƿ�
		if (!IsExiest($data['user_id'])) {
			return "account_bank_user_id_empty";
		}
		
		$sql = "select balance,balance_cash from `{account}` where user_id='{$data['user_id']}'";
		$result = $mysql->db_fetch_array($sql);
		if (IsExiest($_G['system']['con_account_balance_cash_status']) == 1){
			if ($result['balance_cash']<$data['total']){
				return "account_cash_max_errot";
			}
		}else{
			if ($result['balance']<$data['total']){
				return "account_cash_max_errot";
			}
		}
		
		$sql = "insert into `{account_cash}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		$mysql->db_query($sql);
		$id = $mysql->db_insert_id();
		$log_info["user_id"] = $data['user_id'];//�����û�id
		$log_info["nid"] = $data['nid'];//������
		$log_info["money"] = $data['total'];//�������
		$log_info["income"] = 0;//����
		$log_info["expend"] = 0;//֧��
		$log_info["balance_cash"] = -$data['total'];//�����ֽ��
		$log_info["balance_frost"] = 0;//�������ֽ��
		$log_info["frost"] = $data['total'];//������
		$log_info["await"] = 0;//���ս��
		$log_info["type"] = "cash";//����
		$log_info["to_userid"] = 0;//����˭
		$log_info["remark"] = "��������{$data['total']}Ԫ";//��ע
		$result = self::AddLog($log_info);
		
		//�����û�������¼
		$user_log["user_id"] = $data['user_id'];
		$user_log["code"] = "account";
		$user_log["type"] = "cash";
		$user_log["operating"] = "require";
		$user_log["article_id"] = $id;
		$user_log["result"] = 1;
		$user_log["content"] =  $log_info["remark"];
		usersClass::AddUsersLog($user_log);	
		return $id;
	}
	
	/**
	 * ��ֵ���
	 *
	 * @param Array $data =array("nid"=>"������","verify_remark"=>"��˱�ע","status"=>"���״̬")
	 * @return Boolen
	 */
	function VerifyCash($data = array()){
		global $mysql,$MsgInfo;
		
		//�ж϶������Ƿ����
		if (!IsExiest($data['id'])) {
			return "account_cash_id_empty";
		}
		
		$sql = "select p1.* from `{account_cash}` as p1  where p1.`id`='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		
		//�ж϶������Ƿ����
		if ($result==false) return "account_cash_not_exiest";
		
		//�ж��Ƿ��Ѿ����
		if ($result['status']!=0) return "account_cash_yes_verify";
	
		$sql = "update `{account_cash}` set status='{$data['status']}',verify_time='".time()."',verify_userid='".$data['verify_userid']."',verify_remark='".$data['verify_remark']."' where id = '{$data['id']}'";
       $mysql->db_query($sql);
		
		$user_id = $result['user_id'];
		$cash_account = $result['total'];
		$cash_fee = $result['fee'];
		$nid = "cash_".$_G['user_id'].time().rand(100,999).$data['status'];
		if ($data['status']==1){
			
			$log_info["user_id"] = $user_id;//�����û�id
			$log_info["nid"] = $nid;//������
			$log_info["money"] = $cash_account;//�������
			$log_info["income"] = 0;//����
			$log_info["expend"] = $cash_account;//֧��
			$log_info["balance"] = 0;//�����ֽ��
			$log_info["balance_cash"] = 0;//�����ֽ��
			$log_info["balance_frost"] = 0;//�������ֽ��
			$log_info["frost"] = -$cash_account;//������
			$log_info["await"] = 0;//���ս��
			$log_info["type"] = "cash_success";//����
			$log_info["to_userid"] = 0;//����˭
			$log_info["remark"] = "���ֳɹ�{$cash_account}Ԫ";//��ע
			$result = self::AddLog($log_info);
			
			$log_info["user_id"] = $user_id;//�����û�id
			$log_info["nid"] = "cash_fee_".$nid;//������
			$log_info["money"] = $cash_fee;//�������
			$log_info["income"] = 0;//����
			$log_info["expend"] = $cash_fee;//֧��
			$log_info["balance"] = -$cash_fee;//�����ֽ��
			$log_info["balance_cash"] = -$cash_fee;//�����ֽ��
			$log_info["balance_frost"] = 0;//�������ֽ��
			$log_info["frost"] = 0;//������
			$log_info["await"] = 0;//���ս��
			$log_info["type"] = "cash_fee";//����
			$log_info["to_userid"] = 0;//����˭
			$log_info["remark"] = "���ֳɹ��۳�������{$cash_fee}Ԫ";//��ע
			$result = self::AddLog($log_info);
			
			$web['money']=$cash_fee;
			$web['user_id']=$user_id;
			$web['nid']="web_cash_fee_".$user_id."_".time();
			$web['type']="web_cash_fee";
			$web['remark']="�û�����{$cash_account}����վ�渶{$cash_fee}";
			self::AddAccountWeb($web);
			
			//�����û�������¼
			$user_log["user_id"] = $recharge_userid;
			$user_log["code"] = "account";
			$user_log["type"] = "cash";
			$user_log["operating"] = "success";
			$user_log["article_id"] = $data['id'];
			$user_log["result"] = 1;
			$user_log["content"] =  $log_info["remark"];
			usersClass::AddUsersLog($user_log);	
		}elseif ($data['status']==2){
			$log_info["user_id"] = $user_id;//�����û�id
			$log_info["nid"] = $nid;//������
			$log_info["money"] = $cash_account;//�������
			$log_info["income"] = 0;//����
			$log_info["expend"] = 0;//֧��
			$log_info["balance_cash"] = $cash_account;//�����ֽ��
			$log_info["balance_frost"] = 0;//�������ֽ��
			$log_info["frost"] = -$cash_account;//������
			$log_info["await"] = 0;//���ս��
			$log_info["type"] = "cash_false";//����
			$log_info["to_userid"] = 0;//����˭
			$log_info["remark"] = "����{$cash_account}Ԫ����ʧ��";//��ע
			$result = self::AddLog($log_info);
			
			//�����û�������¼
			$user_log["user_id"] = $recharge_userid;
			$user_log["code"] = "account";
			$user_log["type"] = "cash";
			$user_log["operating"] = "false";
			$user_log["article_id"] = $data['id'];
			$user_log["result"] = 1;
			$user_log["content"] =  $log_info["remark"];
			usersClass::AddUsersLog($user_log);	
		}
		return $data['id'];
	}
	
	function GetBank($data = array()){
		global $mysql;
		$_sql = "where 1=1 ";
			 
		if (IsExiest($data['id'])!=false) {
			$_sql .= " and p1.id = {$data['id']}";
		} 
		
		$_select = "p1.*";
		$sql = "select $_select from `{account_bank}` as p1 $_sql";
		$result = $mysql->db_fetch_array($sql);
		
		return $result;
	}
	
	
	
	function GetAccount($data = array()){
		global $mysql;
		
		//�ж��û�id�Ƿ����
		if (!IsExiest($data['user_id'])) {
			return "account_user_id_empty";
		}
		$_select = "p1.*";
		$sql = "select $_select from `{account}` as p1 where p1.user_id='{$data['user_id']}'";
		$result = $mysql->db_fetch_array($sql);
		
		return $result;
	}
	
	
	
	//���߳�ֵ�������ݴ���
	function  OnlineReturn ($data = array()){
	
		global $mysql;
		$trade_no = $data['trade_no'];
		
		$rechage_result = self::GetRechargeOne(array("trade_no"=>$trade_no));
		if($rechage_result['status']==0 && $rechage_result!=false){
			$sql = "select * from `{account_log}` where user_id={$rechage_result['user_id']} and trade_no='{$rechage_result['trade_no']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result=="" || $result==false){
				$user_id = str_replace($rechage_result['addtime'],"",$trade_no);
				$user_id = substr($user_id,0,strlen($user_id)-1); 
				
				
				$log_info["user_id"] = $user_id;//�����û�id
				$log_info["nid"] = "online_recharge_".$user_id."_".time();//������
				$log_info["money"] = $rechage_result['money'];//�������
				$log_info["income"] = $rechage_result['money'];//����
				$log_info["expend"] = 0;//֧��
				$log_info["balance_cash"] = 0;//�����ֽ��
				$log_info["balance_frost"] = $rechage_result['money'];//�������ֽ��
				$log_info["frost"] = 0;//������
				$log_info["await"] = 0;//���ս��
				$log_info["type"] = "online_recharge";//����
				$log_info["to_userid"] = 0;//����˭
				$log_info["remark"] = "���߳�ֵ";//��ע
				$result = self::AddLog($log_info);
				
				$credit_log['user_id'] = $user_id;
				$credit_log['nid'] = "online_recharge";
				$credit_log['code'] = "account";
				$credit_log['type'] = "recharge_approve";
				$credit_log['addtime'] = time();
				$credit_log['article_id'] =$result['id'];
				$credit_log['remark'] = "�û����߳�ֵ���õĻ���";
				creditClass::ActionCreditLog($credit_log);
				
				
				$rec['id'] = $rechage_result['id'];
				$rec['return'] = serialize($_REQUEST);
				$rec['status'] = 1;
				$rec['verify_userid'] = 0;
				$rec['verify_time'] = time();
				$rec['verify_remark'] = "�ɹ���ֵ";
				
				self::UpdateRecharge($rec);
			}
		}
		return true;
	}
	
}
?>