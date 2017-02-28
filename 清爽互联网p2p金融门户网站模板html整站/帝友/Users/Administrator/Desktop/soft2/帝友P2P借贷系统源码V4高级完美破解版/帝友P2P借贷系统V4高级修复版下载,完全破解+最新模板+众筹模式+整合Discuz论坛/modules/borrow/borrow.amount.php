<?
/*
1,�û�����ҳ�棬��Ҫ��ȡ���еĶ�ȣ�������borrow.class.php function GetUserLog

2,�û����� -�������ҳ��
*/

$borrow_amount_type = array("borrow"=>"�����","vouch_borrow"=>"���������","vouch_tender"=>"����Ͷ�ʶ��");

require_once(ROOT_PATH."modules/borrow/borrow.auto.php");
class amountClass  extends autoClass {


	
	//��Ӷ�ȵļ�¼��borrow_amount_log��
	//user_id �û�id
	//type ���������� 
	//amount_type ��ȵ����� ��credit ���ö��  borrow_vouch �����  tender Ͷ�ʶ��
	//account  ��Ȳ����Ľ��
	//account_all �ܵĶ��
	//account_use ���ö��
	//account_nouse �����ö��
	//remark ��ȵļ�¼
	function  AddAmountLog($data){
		global $mysql;
		 //�ж��û��Ƿ����
        if (!IsExiest($data['user_id'])) {
            return "amount_user_id_empty";
        }
		$sql = "select 1 from `{borrow_amount_log}` where nid='{$data['nid']}' ";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false){
			//�����ȼ�¼
			$sql = "insert into `{borrow_amount_log}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
			foreach($data as $key => $value){
				$sql .= ",`$key` = '$value'";
			}
			$mysql->db_query($sql);
		}
		
		if(strpos("borrrow",$data['amount_type'])>0){
		$data['amount_type']="borrow";
		}
		$usename = $data['amount_type']."_use";
		$reducename = $data['amount_type']."_reduce";
		$type=$data['amount_type'];
		$account = $data['account'];
		if ($data['oprate']=="reduce"){
			$sql = "update `{borrow_amount}` set `{$usename}`={$usename}-$account,`{$reducename}`={$reducename}+$account where user_id='{$data['user_id']}'";
			$mysql->db_query($sql);
		}else{
			$sql = "update `{borrow_amount}` set `{$usename}`={$usename}+$account,`{$reducename}`={$reducename}-$account where user_id='{$data['user_id']}'";
			$mysql->db_query($sql);
		}
    	return $data['user_id'];
	}
	
	/**
	 * 4,��ö�ȼ�¼�б�
	 *
	 * @return Array
	 */
	function GetAmountLogList($data = array()){
		global $mysql;
		
		$_sql = " where 1=1 ";
		
		//�����û�id
        if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p1.user_id ='{$data['user_id']}'";
        }
		
		//�����û���
		if (IsExiest($data['username'])!=false) {
            $_sql .= " and p2.username like '%{$data['username']}%'";
        }
		
		//��������
		if (IsExiest($data['amount_type'])!=false) {
            $_sql .= " and p1.amount_type = '{$data['amount_type']}'";
        }
		
		//��������
		if (IsExiest($data['type'])!=false) {
            $_sql .= " and p1.type = '{$data['type']}'";
        }
		
		$_select = " p1.*,p2.username";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{borrow_amount_log}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id SQL ORDER ";
		
		//�Ƿ���ʾȫ������Ϣ
		if (IsExiest($data['limit'])!=false){
			if ($data['limit'] != "all"){ $_limit = "  limit ".$data['limit']; }
			return $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $sql));
		}			 
		
		//�ж��ܵ�����
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array('count(1) as num', $_sql,'', ''), $sql));
		$total = intval($row['num']);
		
		$num_sql = "select p1.oprate,sum(p1.account) as num from `{borrow_amount_log}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id SQL group by p1.oprate ";
		$num_result =$mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $num_sql));
		$_num_result = array();
		if ($num_result!=false){
			foreach ($num_result as $key => $value){
				$_num_result[$value['oprate']] = $value['num'];
			}
		}
		//��ҳ���ؽ��
		$data['page'] = !IsExiest($data['page'])?1:$data['page'];
		$data['epage'] = !IsExiest($data['epage'])?10:$data['epage'];
		$total_page = ceil($total / $data['epage']);
		$_limit = " limit ".($data["epage"] * ($data["page"] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page,"oprate_add"=>$_num_result['add'],"oprate_reduce"=>$_num_result['reduce']);
		return $result;
	}
	
	
	 /**
	 * ����û��Ķ�����루borrow_amount_apply��
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function AddAmountApply($data = array()){
		global $mysql;
       //�ж��û��Ƿ����
        if (!IsExiest($data['user_id'])) {
            return "amount_user_id_empty";
        }
		$sql = "select 1 from `{borrow_amount}` where user_id='{$data['user_id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false){
			$sql = "insert into `{borrow_amount}` set user_id='{$data['user_id']}'";
			$mysql->db_query($sql);
		}
		$data['nid'] = "apply".$user_id.time().rand(10,99);
		$sql = "insert into `{borrow_amount_apply}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
        return $mysql->db_query($sql);
	}
	
	//����û��������¼��borrow_amount_apply��
	//id id 
	//user_id �û�id 
	function GetAmountApplyOne($data){
		global $mysql;
		$sql = " where 1=1 ";
		if (IsExiest($data['user_id'])!=false) {
			$sql .= " and p1.user_id={$data['user_id']}  ";
		}
		if (IsExiest($data['id'])!=false) {
			$sql .= " and p1.id={$data['id']} ";
		}
		if (IsExiest($data['amount_type'])!=false) {
			$sql .= " and p1.amount_type='{$data['amount_type']}' ";
		}
		$sql = "select p1.*,p2.username from `{borrow_amount_apply}` as  p1 left join `{users}` as p2 on p1.user_id=p2.user_id " . $sql ." order by p1.id desc";
		$result = $mysql ->db_fetch_array($sql);
		return $result;
	}
	
	/**
	 * �б�
	 *
	 * @return Array
	 */
	function GetAmountList($data = array()){
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
		$sql = "select SELECT from {borrow_amount} as p1 
				left join {users} as p2 on p1.user_id=p2.user_id
				$_sql ORDER LIMIT";
				 
				 
		//�Ƿ���ʾȫ������Ϣ
		if (isset($data['limit']) ){
			$_limit = "";
			if ($data['limit'] != "all"){
				$_limit = "  limit ".$data['limit'];
			}
			return $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select, $_order, $_limit), $sql));
		}	
		
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array('count(1) as num', '', ''), $sql));
		
		$total = intval($row['num']);
		
		//��ҳ���ؽ��
		$data['page'] = !IsExiest($data['page'])?1:$data['page'];
		$data['epage'] = !IsExiest($data['epage'])?10:$data['epage'];
		$total_page = ceil($total / $data['epage']);
		$_limit = " limit ".($data["epage"] * ($data["page"] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		if  ($list!=false){
			foreach ($list as $key => $value){
				$list[$key] = self::GetAmountUsers(array("user_id"=>$value['user_id'],"amount_result"=>$value));
				$list[$key]['username'] = $value['username'];
			}
		}
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
		
	}
	
	
	
	function CheckAmountApply($data){
		global $mysql,$_G;
		
		 //�ж�ID�Ƿ����
        if (!IsExiest($data['id'])) {
            return "amount_apply_id_empty";
        } 
		
		$result = self::GetAmountApplyOne(array("id"=>$data['id']));//��ȡ��ȵ���Ϣ�����Ƿ��Ѿ�������
	
		if ($result['status']!=0){
			return "amount_apply_check_yes";
		}
		$amount_type = $result['amount_type'];
		$user_id = $data['user_id'];
		if ($data['status']==1){
			//��Ӷ�ȼ�¼
			$_data["user_id"] = $result['user_id'];
			$_data["amount_type"] = $result['amount_type'];
			$_data["type"] = "apply";
			$_data["oprate"] = $result['oprate'];
			$_data["nid"] = $result['nid'];
			$_data["account"] = $data['account'];
			$_data["remark"] = "���������ͨ��";//type ���������� 
			self::AddAmountLog($_data);
			if ($result['oprate']=="reduce"){
				$sql = "update `{borrow_amount}` set `{$amount_type}`={$amount_type}-{$data['account']} where user_id='{$result['user_id']}'";
				$mysql->db_query($sql);
			}else{
				$sql = "update `{borrow_amount}` set `{$amount_type}`={$amount_type}+{$data['account']} where user_id='{$result['user_id']}'";
				$mysql->db_query($sql);
			}
		}else{
			$data['account'] = 0;
		}
		
		//������Ϣ
		$sql = "update `{borrow_amount_apply}` set status={$data['status']},verify_time='".time()."',verify_user=".$_G['user_id'].",verify_remark='{$data['verify_remark']}',account='{$data['account']}' where id = {$data['id']}";
		$mysql ->db_query($sql);
		
		/*$sql = "select oprate,sum(account) as num from `{borrow_amount_log}` where amount_type='{$amount_type}' and user_id='{$user_id}' group by oprate";
		$result = $mysql->db_fetch_arrays($sql);
		if ($result!=false){
			$_result = array();
			foreach ($result as $key => $value){
				$_result[$amount_type."_".$value['oprate']] = $value['num'];
			}
			$_result[$amount_type] = $_result[$amount_type."_add"] - $_result[$amount_type."_reduce"];
			$sql = "update `{borrow_amount}` set `{$amount_type}`='{$_result[$amount_type]}',`{$amount_type}_add`='".$_result[$amount_type."_add"]."',`{$amount_type}_reduce`='".$_result[$amount_type."_reduce"]."'";
			$mysql->db_query($sql." where user_id='{$user_id}'");
		}*/
		return $data['id'];
	
	}
	
	
	/**
	 * �б�
	 *
	 * @return Array
	 */
	function GetAmountApplyList($data = array()){
		global $mysql;
		$_sql = "where 1=1 ";		 
		
		if (IsExiest($data['status'])!=false) {
			$_sql .= " and p1.status = {$data['status']}";
		}
		if (IsExiest($data['user_id'])!=false) {
			$_sql .= " and p1.user_id = {$data['user_id']}";
		}
		if (IsExiest($data['username'])!=false) {
			$_sql .= " and p2.username like '%{$data['username']}%' ";
		}
		if (IsExiest($data['type'])!=false) {
			$_sql .= " and p1.type like '%{$data['type']}%' ";
		}
		$_order = " order by p1.id desc";
		$_select = 'p1.*,p2.username';
		$sql = "select SELECT from {borrow_amount_apply} as p1 
				left join {users} as p2 on p1.user_id=p2.user_id
				$_sql ORDER LIMIT";
				 
		//�Ƿ���ʾȫ������Ϣ
		if (isset($data['limit']) ){
			$_limit = "";
			if ($data['limit'] != "all"){
				$_limit = "  limit ".$data['limit'];
			}
			return $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select, $_order, $_limit), $sql));
		}	
		
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array('count(1) as num', '', ''), $sql));
		
		$total = intval($row['num']);
		
		//��ҳ���ؽ��
		$data['page'] = !IsExiest($data['page'])?1:$data['page'];
		$data['epage'] = !IsExiest($data['epage'])?10:$data['epage'];
		$total_page = ceil($total / $data['epage']);
		$_limit = " limit ".($data["epage"] * ($data["page"] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
		
	}
	
	
	/**
	 * 1,��Ӷ��
	 *
	 * @param array $data =array("name"=>"�������","nid"=>"��ʶ��","default"=>"Ĭ�ϱ�ʶ��","credit_nid"=>"��������",""=>"��ע");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function AddAmountType($data = array()){
		global $mysql;
		 //�ж������Ƿ����
        if (!IsExiest($data['name'])) {
            return "amount_type_name_empty";
        } 
		
		//�ж������Ƿ����
        if (!IsExiest($data['nid'])) {
            return "amount_type_nid_empty";
        }
		
		//����û����ڣ��ж��û��Ƿ����
		if (IsExiest($data['username'])!=false){
			$sql = "select user_id from `{borrow_amount_type}` where nid ='{$data['nid']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result!=false) return "amount_type_nid_exiest";
		}
		
		
		$sql = "insert into `{borrow_amount_type}` set addtime='".time()."',addip='".ip_address()."',updatetime='".time()."',updateip='".ip_address()."',";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
    	return $mysql->db_insert_id();
	}
	
	/**
	 * 2,�޸Ķ��
	 *
	 * @param array $data =array("id"=>"id","name"=>"����","status"=>"״̬");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateAmountType($data = array()){
		global $mysql;
		
		 //�ж������Ƿ����
        if (!IsExiest($data['name'])) {
            return "amount_type_name_empty";
        } 
		
		//�ж������Ƿ����
        if (!IsExiest($data['nid'])) {
            return "amount_type_nid_empty";
        }
		
		//����û����ڣ��ж��û��Ƿ����
		if (IsExiest($data['username'])!=false){
			$sql = "select user_id from `{borrow_amount_type}` where nid ='{$data['nid']}' and id!='{$data['id']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result!=false) return "amount_type_nid_exiest";
		}
		
		$sql = "update `{borrow_amount_type}` set updatetime='".time()."',updateip='".ip_address()."',";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql)." where id='{$data['id']}' ");
		return $data['id'];
	}
	
	/**
	 * 3,ɾ�����
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function DelAmountType($data = array()){
		global $mysql;
		
		if (!IsExiest($data['id'])) return "amount_type_id_empty";
		
		$sql = "delete from `{borrow_amount_type}`  where id='{$data['id']}'";
    	$mysql -> db_query($sql);
		
		return $data['id'];
	}
	
	
	
	/**
	 * 4,��ö���б�
	 *
	 * @return Array
	 */
	function GetAmountTypeList($data = array()){
		global $mysql;
		
		$_sql = " where 1=1 ";
		
		//�����û�id
        if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p1.user_id ='{$data['user_id']}'";
        }
		
		//�����û���
		if (IsExiest($data['username'])!=false) {
            $_sql .= " and p2.username like '%{$data['username']}%'";
        }
		
		$_select = " p1.*,p2.name as credit_name ";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{borrow_amount_type}` as p1 left join `{credit_class}` as p2 on p1.credit_nid=p2.nid SQL ORDER ";
		
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
		$_limit = " limit ".($data["epage"] * ($data["page"] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
	}
	
	
	
	/**
	 * 6,��ö�ȵĵ�����¼
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetAmountTypeOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "amount_type_id_empty";
		$sql = "select p1.* from `{borrow_amount_type}` as p1  where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "amount_type_empty";
		return $result;
	}
	
	
	/**
	 * 7,����û��Ķ��
	 *
	 * @param Array $data = array("user_id"=>"");
	 * @return Array
	 */
	 function GetAmountUsers($data = array()){
		global $mysql;
		if (!IsExiest($data['user_id'])) return "amount_user_id_empty";
		//$borrow_first = 2000;//��Աע���ʼ���
		$borrow_first = 0;//��Աע���ʼ���,��2000��Ϊ0,hummer modify 201309060008
		
		if (isset($data['amount_result']) && $data['amount_result']!=""){
			$result = $data['amount_result'];
		}else{
			$sql = "select p1.* from `{borrow_amount}` as p1  where p1.user_id='{$data['user_id']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result==false) {
				$sql = "insert into `{borrow_amount}` set user_id='{$data['user_id']}'";
				$mysql->db_query($sql);
				$sql = "select p1.* from `{borrow_amount}` as p1  where p1.user_id='{$data['user_id']}'";
				$result = $mysql->db_fetch_array($sql);
			}
		}
		
		//��ȡ�û��ܻ��֣�(�ܻ���-60)*100Ϊ���Ӷ��
		$_result = borrowClass::GetBorrowCredit(array("user_id"=>$data['user_id']));
		//echo "<script>alert('".$_result['approve_credit']."');</ script>";
		//$borrow_credit = ($_result['approve_credit'])*100+$_result['borrow_credit'];
		$borrow_credit = ($_result['approve_credit'])*0+$_result['borrow_credit'];//��ԭ����100Ԫÿ1�֣���Ϊ0Ԫÿ1��,hummer modify 201309060011
		//echo "<script>alert('0 ".$_result['credit_total']."');</ script>";
		//echo "<script>alert('1 ".$borrow_credit."');</ script>";
		//echo "<script>alert('2 ".$result['borrow']."');</ script>";
		$_data["borrow_amount"] = $borrow_first+$borrow_credit+$result['borrow'];
		$_data["borrow_amount_use"] = intval($borrow_first+$borrow_credit+$result['borrow_use']);
		$_data["borrow_amount_nouse"] =intval($_data["borrow_amount"] -$_data["borrow_amount_use"]);
		
		return $_data;
	}
}
?>