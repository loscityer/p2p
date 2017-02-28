<?
/*
1,�Զ�Ͷ�깦�ܱ�

2,tende���һ��aotu_status
*/
require_once("borrow.change.php");
require_once("borrow.class.php");
class autoClass extends borrowChangeClass{

	//�����û��Ķ����Ϣ��user_auto��
	//user_id �û�id 
	function  GetAutoOne($data){
		global $mysql;
		$user_id = $data['user_id'];
		if (IsExiest($data['user_id'])=="" || IsExiest($data['id'])=="") return -1;//����û������ڣ��򷵻�
		$sql = "select * from `{borrow_auto}` where user_id='{$data['user_id']}' and id='{$data['id']}'";
        return $mysql->db_fetch_array($sql);
	}
	
	//�����û��Ķ����Ϣ��user_auto��
	//user_id �û�id 
	function  UpdateAuto($data=array()){
		global $mysql;
		$user_id = $data['user_id'];
		if (IsExiest($user_id)=="" || IsExiest($data['id'])=="") return -1;//����û������ڣ��򷵻�
		
		$sql = "update `{borrow_auto}` set updatetime='".time()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		$sql .= " where user_id = {$user_id} and id='{$data['id']}'";
        return $mysql->db_query($sql);
	}
	
	
	
	//����û��Ķ����Ϣ��user_auto��
	//user_id �û�id 
	function  AddAuto($data=array()){
		global $mysql,$_G;
		$user_id = $data["user_id"];
		if (!isset($user_id)) return -1;//����û������ڣ��򷵻�
		$sql = "select count(*) as num from `{borrow_auto}` where user_id={$user_id}";
		$result = $mysql ->db_fetch_array($sql);
		if ($result["num"] >= 3){
			return -2;
		}else{
			$sql = "insert into `{borrow_auto}` set  updatetime='".time()."' ";
			if(is_array($data)){
				foreach($data as $key => $value){
					$sql .= ",`$key` = '$value'";
				}
			}
			$result = $mysql->db_query($sql);
			if ($result){
				return 1;
			}else{
				return -1;
			}
		}
	}
	
	
	
	/**
	 * �б�
	 *
	 * @return Array
	 */
	function GetAutoList($data = array()){
		global $mysql;
		
		$page = empty($data['page'])?1:$data['page'];
		$epage = empty($data['epage'])?10:$data['epage'];
		
		$_sql = "where 1=1 ";		 
		
		if (isset($data['status']) && $data['status']!=""){
			$_sql .= " and p1.status = {$data['status']}";
		}
		if (isset($data['user_id']) && $data['user_id']!=""){
			$_sql .= " and p1.user_id = {$data['user_id']}";
		}
		if (isset($data['username']) && $data['username']!=""){
			$_sql .= " and p2.username like '%{$data['username']}%' ";
		}
		if (isset($data['type']) && $data['type']!=""){
			$_sql .= " and p1.type like '%{$data['type']}%' ";
		}
		$_select = 'p1.*,p2.username';
		$sql = "select SELECT from {borrow_auto} as p1 
				left join {users} as p2 on p1.user_id=p2.user_id
				$_sql ORDER LIMIT";
				 
		//�Ƿ���ʾȫ������Ϣ
		if (isset($data['limit']) ){
			$_limit = "";
			if ($data['limit'] != "all"){
				$_limit = "  limit ".$data['limit'];
			}
			$result =  $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select,  'order by p1.`order` desc,p1.id desc', $_limit), $sql));
			
		return $result;
		}	
		
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array('count(1) as num', '', ''), $sql));
		
		$total = $row['num'];
		$total_page = ceil($total / $epage);
		$index = $epage * ($page - 1);
		$limit = " limit {$index}, {$epage}";
		
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select, 'order by p1.id desc', $limit), $sql));		
		$list = $list?$list:array();
		return array(
            'list' => $list,
            'total' => $total,
            'page' => $page,
            'epage' => $epage,
            'total_page' => $total_page
        );
		
	}
	
	
	function DelAuto($data){
		global $mysql;
		if ($data["id"]=="" || $data["user_id"]==""){ return -1;}
		$sql = "delete from `{borrow_auto}` where user_id={$data['user_id']} and id={$data['id']}";
		$result = $mysql->db_query($sql);
		if ($result) return 1;
		return -2;
	}
	
	
	
	function AutoTender($data){
		global $mysql;
		$borrow_nid = $data["borrow_nid"];
		if (IsExiest($borrow_nid)==""){
			return "borrow_nid_empty";
		}
		$_return = array();
		$sql = "select p1.* from `{borrow}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id where p1.borrow_nid='{$borrow_nid}' ";
		$borrow_result = $mysql->db_fetch_array($sql);
		$credit=borrowClass::GetBorrowCredit(array("user_id"=>$borrow_result['user_id']));
		
		$sql = "select p1.* from `{borrow_auto}` as p1 where p1.status=1 and user_id!='{$borrow_result['user_id']}' ORDER BY rand() ";
		$result = $mysql->db_fetch_arrays($sql);
		foreach ($result as $key => $value){
			$vip=usersClass::GetUsersVip(array("user_id"=>$value['user_id']));
			$tender_status = 1;
			$tender_account = $value['tender_account'];
			//���С�ڱ�ĵ���СͶ������Ͷ,�Ұ����Ͷ���ʱ��
			if ($value['tender_type']==1 && $value['tender_account']<$borrow_result["tender_account_min"]){
				$tender_status = 0;
			}
			//���������ĵ����Ͷ�������Ա�ĵ������Ϊ׼��
			if ($value['tender_type']==1 && $value['tender_account']>$borrow_result["tender_account_max"]){
				$value['tender_account'] = $borrow_result["tender_account_max"];
			}
			
			/*
			//��Ͷ������ڱ�Ľ���20%ʱ���򰴴˱�������Ͷ�ꡣ 
			if ($value['tender_account']>round($borrow_result["account"]*0.02,2)){
				$value['tender_type']=2;
			}
			*/
			
			if($value['tender_type']==2){
				$value['tender_account'] = round($borrow_result["account"]*0.01*$value['tender_scale'],2);
				//��������Ͷ��ʱ���������趨�ı�����ý������50Ԫʱ����50Ԫ����Ͷ��
				if ($value['tender_account']<50){
					$tender_account = 50;
				}else{
					$tender_account = $value['tender_account'];
				}
			}
			
			/*
			//�ж��Ƿ������Ƶ��֤
			if ($value['video_status']==1 && $borrow_result["video_status"]!=1){
				$tender_status = 0;
			}
			
			//�ж��Ƿ����ʵ����֤
			if ($value['realname_status']==1 && $borrow_result["real_status"]!=1){
				$tender_status = 0;
			}
			
			//�ж��Ƿ�����ֻ���֤
			if ($value['phone_status']==1 && $borrow_result["phone_status"]!=1){
				$tender_status = 0;
			}
			*/
			
			//�ж����ҵĺ���
			if ($value['my_friend']==1){
				$_sql = "select * from `{users_friends}` where user_id='{$borrow_result['user_id']}' and friends_userid='{$value['user_id']}'";
				$_result = $mysql->db_fetch_array($_sql);
				if ($_result==false){
					$tender_status = 0;
				}
			}	
			
			/*
			//�жϲ����ҵĺ�����
			if ($value['not_black']==1 ){
				$_sql = "select 1 from `{users_black}` where user_id='{$borrow_result['user_id']}' and black_userid='{$value['user_id']}' and status=1";
				$_result = $mysql->db_fetch_array($sql);
				if ($_result!=false){
					$tender_status = 0;
				}
			}	
			*/
			
			//���ڴ���
			if ($value['late_status']==1 ){
				$_sql = "select count(1) as num from `{borrow_repay}` where user_id='{$value['user_id']}' and repay_yestime < ".time();
				$_result = $mysql->db_fetch_array($sql);
				if ($_result['num']>=$value['late_times']){
					$tender_status = 0;
				}
			}	
			
			
			//�渶����
			if ($value['dianfu_status']==1 ){
				$_sql = "select count(1) as num from `{borrow_repay}` where user_id='{$value['user_id']}' and repay_web=1";
				$_result = $mysql->db_fetch_array($sql);
				if ($_result['num']>=$value['dianfu_times']){
					$tender_status = 0;
				}
			}
			
			//������վ������
			if ($value['not_late_black']==1 ){
				$late_day = 60*60*30*24 + time();
				$_sql = "select count(1) as num from `{borrow_repay}` where user_id='{$value['user_id']}' and repay_status=0 and repay_yestime < ".$late_day;
				$_result = $mysql->db_fetch_array($sql);
				if ($_result['num']>0){
					$tender_status = 0;
				}
			}
						
			//���û���
			if ($value['borrow_credit_status']==1 ){
				if ($value['borrow_credit_first']!="" && $value['borrow_credit_first']>$credit['approve_credit']){
					$tender_status = 0;
				}
				if ($value['borrow_credit_last']!="" && $value['borrow_credit_last']<$credit['approve_credit']){
					$tender_status = 0;
				}
			}
			
			//���ʽ
			if($value['borrow_style_status']==1 && $value['borrow_style']!=$borrow_result['borrow_style']){
				$tender_status = 0;
			}
			
			//�������
			if($value['timelimit_status']==1 && ($value['timelimit_month_first']>$borrow_result['borrow_period'] || $value['timelimit_month_last']<$borrow_result['borrow_period'])){
				$tender_status = 0;
			}
			
			//������
			if($value['apr_status']==1 && ($value['apr_first']>$borrow_result['borrow_apr'] || $value['apr_last']<$borrow_result['borrow_apr'])){
				$tender_status = 0;
			}
			
			//����
			if($value['award_status']==1 ){
				if ($borrow_result['award_status']==0){
					$tender_status = 0;
				}elseif ($borrow_result['award_status']==1){
					$award_scale = round($borrow_result['award_account']/$borrow_result['account'],2);
					if ($award_scale<$value['award_first'] || $award_scale>$value['award_last'] ){
						$tender_status = 0;
					}
				}elseif ($borrow_result['award_status']==2){
					if ($borrow_result['award_scale']<$value['award_first'] || $borrow_result['award_scale']>$value['award_last'] ){
						$tender_status = 0;
					}
				}
			}
			
			//����Ϊ������
			if($value['vouch_status']==1 && $borrow_result['vouchstatus']!=1){
				$tender_status=0;			
			}
			
			//����Ϊ�Ƽ���
			if($value['tuijian_status']==1 && $borrow_result['fast_status']!=1){
				$tender_status=0;			
			}
			
			if($vip['status']!=1 && $borrow_result['vouchstatus']==1){
				$tender_status=0;			
			}
			
			if($vip['status']!=1 && $borrow_result['fast_status']==1){
				$tender_status=0;			
			}
			
			if ($tender_status==1){
				$_return[$value['user_id']] = $tender_account;
			}
			
		}
		return $_return;
	
	}
}
?>