<?

/******************************
 * $File: users.class.php
 * $Description: �û�������Ϣ����
 * $Author: hummer 
 * $Time:2010-03-09
 * $Update:None 
 * $UpdateDate:None 
******************************/

//�����Ը������
require_once("users.model.php");

require_once("users.function.php");

require_once("users.admin.php");

require_once(ROOT_PATH."modules/borrow/borrow.class.php");

class usersClass  extends usersadminClass {
	
	function usersClass(){
		//�������ݿ������Ϣ
		
        
	}
	/**
	 * ����б�
	 *
	 * @return Array
	 */
	 function GetListhh($data = array()){
		global $mysql;
		
		$type = isset($data['type'])?$data['type']:"";
		$page = empty($data['page'])?1:$data['page'];
		$epage = empty($data['epage'])?10:$data['epage'];
		
		$type_id = isset($data['type_id'])?$data['type_id']:"";
		$username = isset($data['username'])?$data['username']:"";
		
		$_sql = "";
		if ($type_id!=""){
			$_sql .= " and u.type_id in ($type_id)";
		}
		if ($type!=""){
			$_sql .= " and uy.type=$type";
		}
		
		
		$_select = " u.*,r.email,t.name as type_name ";
		$_order =  'order by u.user_id desc';

		$sql = "select SELECT
					from `{users_admin}` as u left join `{users}` as r on r.user_id = u.user_id left join `{users_admin_type}` as t on u.type_id = t.id ";
	
		 $sql .= " where 1=1  $_sql	 ORDER LIMIT";
		
		//�Ƿ���ʾȫ������Ϣ
		if (isset($data['limit']) ){
			$_limit = "";
			if ($data['limit'] != "all"){
				$_limit = "  limit ".$data['limit'];
			}
			return $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select, $_order, $_limit), $sql));
		}			 
				 
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array('count(1) as num', '', ''), $sql));
		
		$total = $row['num'];
		$total_page = ceil($total / $epage);
		$index = $epage * ($page - 1);
		$limit = " limit {$index}, {$epage}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select,$_order, $limit), $sql));		
		$list = $list?$list:array();
		
		return array(
            'list' => $list,
            'total' => $total,
            'page' => $page,
            'epage' => $epage,
            'total_page' => $total_page
        );
		
	}
	/**
	 * 1,�������
	 *
	 * @param array $data
	 * @param string $data['user_id'],$data['email'];
	 * @return boolen(true,false)
	 */
	function CheckEmail($data = array()){
		global $mysql;
		
		//���䲻��Ϊ��
        if (!IsExiest($data['email'])) {
            return false;
        }
        //�ж��Ƿ��ǳ��˱������������
		$_sql = "";
		if (IsExiest($data['user_id'])!=false) {
			$_sql = " and user_id!= {$data['user_id']}";
		}
		$sql = "select 1 from `{users}` where  email = '{$data['email']}' $_sql";
		$result = $mysql->db_fetch_array($sql);
		//������䲻���ڵĻ��򷵻�
		if ($result==false) return false;
		return true;
	}
	
	
	/**
	 * 2,����û���
	 *
	 * @param array $data
	 * @param string $data['user_id'],$data['username'];
	 * @return boolen(true,false)
	 */
	function CheckUsername($data = array()){
		global $mysql;
		//�û�������Ϊ��
        if (!IsExiest($data['username'])) {
            return false;
        }
        //�ж��Ƿ��ǳ��˱������������
		$_sql = "";
		if (IsExiest($data['user_id'])!=false) {
			$_sql = " and user_id!= {$data['user_id']}";
		}
		$sql = "select 1 from `{users}` where  username = '{$data['username']}' $_sql";
		$result = $mysql->db_fetch_array($sql);
		//����û��������ڵĻ��򷵻�
		if (!$result) return false;
		return true;
	}
	
	function CheckRealname($data = array()){
		global $mysql;
        if (!IsExiest($data['realname'])) {
            return false;
        }
		$_sql = "";
		if (IsExiest($data['user_id'])!=false) {
			$_sql = " and user_id!= {$data['user_id']}";
		}
		$sql = "select 1 from `{users_info}` where  realname = '{$data['realname']}' and realname_status=1 $_sql";
		$result = $mysql->db_fetch_array($sql);
		if (!$result) return false;
		return true;
	}
	
	function CheckPhone($data = array()){
		global $mysql;
        if (!IsExiest($data['phone'])){
            return false;
        }
		$_sql = "";
		if (IsExiest($data['user_id'])!=false) {
			$_sql = " and user_id!= {$data['user_id']}";
		}
		$sql = "select 1 from `{users_info}` where  phone = '{$data['phone']}' and phone_status=1 $_sql";
		$result = $mysql->db_fetch_array($sql);
		if (!$result) return false;
		return true;
	}
	
	
	/**
	 * 3������û�
	 *
	 * @param Array $index
     * @param $user_id �����û�ID
	 * @return Boolen
	 */
	function AddUsers($data = array()){
		global $mysql,$_G,$MsgInfo;
		
        //�ж��û����Ƿ�Ϊ��
        if (!IsExiest($data['username'])) {
            return "users_username_empty";
        }
        //�ж��û��������Ƿ����15λ
		if (strlen($data['username'])>15){
			return "users_username_long15";
		}
		//�ж������Ƿ�Ϊ��
        if (!IsExiest($data['password'])) {
            return "users_password_empty";
        }
		//���䲻��Ϊ��
        if (!IsExiest($data['email'])) {
            return "users_email_empty";
        }
        //�ж����䳤���Ƿ����32λ
		if (strlen($data['email'])>32){
			return "users_email_long32";
		}
		//�ж��û����Ƿ����
		if(self::CheckUsername(array("username"=>$data['username']))) {
			return "users_username_exist";
		}
		//�ж������Ƿ��Ѿ�����
		if(self::CheckEmail(array("email"=>$data['email']))) {
			return "users_email_exist";
		}
		//MD5���ܣ���һ����������ֹ������
		$data['password'] = md5($data['password']);
		
		//����users������
		$sql = "insert into `{users}` set `reg_time` = '".time()."',`reg_ip` = '".ip_address()."',";
		$sql .= "`up_time` = '".time()."',`up_ip` = '".ip_address()."',`last_time` = '".time()."',`last_ip` = '".ip_address()."',";
		$sql .= "`username`='{$data['username']}',";
		$sql .= "`password`='{$data['password']}',";
		$sql .= "`email`='{$data['email']}'";
		$result = $mysql->db_query($sql);
		if(!$result){
			return "users_add_error";
		}else{
			$user_id = $mysql->db_insert_id();
			
				$sql = "select p1.* from `{users_type}` as p1   where p1.checked=1";
		     $result_users_type = $mysql->db_fetch_array($sql);
		
			$sql = "insert into `{users_info}` set user_id='{$user_id}',type_id={$result_users_type['id']}";
			$mysql->db_query($sql);
			
			return $user_id;
		}
	}
	
/**
	 * 3��ע���û�
	 *
	 * @param Array $index
     * @param $user_id �����û�ID
	 * @return Boolen
	 */
	function RegUsers($data = array()){
		global $mysql,$_G,$MsgInfo;
        //�ж��û����Ƿ�Ϊ��
        if (!IsExiest($data['username'])) {
            return "users_username_empty";
        }
        //�ж��û��������Ƿ����15λ
		if (strlen($data['username'])>15){
			return "users_username_long15";
		}
		//�ж������Ƿ�Ϊ��
        if (!IsExiest($data['password'])) {
            return "users_password_empty";
        }
		//���䲻��Ϊ��
        if (!IsExiest($data['email'])) {
            return "users_email_empty";
        }
        //�ж����䳤���Ƿ����32λ
		if (strlen($data['email'])>32){
			return "users_email_long32";
		}
		//�ж��û����Ƿ����
		if(self::CheckUsername(array("username"=>$data['username']))) {
			return "users_username_exist";
		}
		//�ж������Ƿ��Ѿ�����
		if(self::CheckEmail(array("email"=>$data['email']))) {
			return "users_email_exist";
		}
		//�ж��ظ�����
		if($data['password']!=$data['confirm_password']){
		return "users_password_error";
		}
		
		//�ж���֤���Ƿ�����
		if($data['shouji']!=1){
	    if ($_SESSION['valicode']!=$_POST['valicode']){
        	return "users_valicode_error";
        }
        if ($_POST['valicode']==""){
        	return "users_keywords_empty";
        }
		}
		$password=$data['password'];//uc��ȡ�������
		//MD5���ܣ���һ����������ֹ������
		$data['password'] = md5($data['password']);
		
		//����users������
		$sql = "insert into `{users}` set `reg_time` = '".time()."',`reg_ip` = '".ip_address()."',";
		$sql .= "`up_time` = '".time()."',`up_ip` = '".ip_address()."',`last_time` = '".time()."',`last_ip` = '".ip_address()."',";
		$sql .= "`username`='{$data['username']}',";
		$sql .= "`password`='{$data['password']}',";
		$sql .= "`email`='{$data['email']}'";
		$result = $mysql->db_query($sql);
		if(!$result){
			return "users_add_error";
		}else{
			$user_id = $mysql->db_insert_id();
			//���uc�û�
		    $_data['user_id'] = $user_id;
			if ($_G['module']['ucenter_status']==1 ){
			self::uc_adduser($data, $password);
			}
			//$ucenter_login = ucenterClass::UcenterLogin($_data);
			//�û���Ϣ��users_info����ʼ��
			
			$sql = "select p1.* from `{users_type}` as p1   where p1.checked=1";
		     $result_users_type = $mysql->db_fetch_array($sql);
		
			$sql = "insert into `{users_info}` set user_id='{$user_id}',type_id={$result_users_type['id']}";
			$mysql->db_query($sql);
			
			return $user_id;
		}
	}
     function uc_adduser($data = array(), $password){
	      global $mysql;
	 		$salt = substr(uniqid(rand()), -6);
		    $password = md5(md5($password).$salt);
			
			$sql = "select username from `pre_ucenter_members` where `username`='{$data['username']}'";
		$result= $mysql->db_fetch_array($sql);
		if ($result==false){
			
			 $mysql->db_query("insert into pre_ucenter_members(username,password,email,regip,regdate,salt) values('{$data['username']}','{$password}','{$data['email']}','".ip_address()."','".time()."','{$salt}')");
            $uid = $mysql->db_insert_id();
			
            $mysql->db_query("insert into pre_ucenter_memberfields(uid) values('{$uid}')");
		}
	 }
	/**
	 * 4���޸��û�����
	 *
	 * @param Array data
	 * @return Boolen
	 */
	function UpdatePassword($data = array()){
		global $mysql,$_G,$MsgInfo;
		//�ж��û�id�Ƿ��Ѿ�����
		if (!IsExiest($data['user_id'])) {
			return "users_userid_empty";
		}
		if (!IsExiest($data['password'])) {
			return "users_password_empty";
		}
		$user_id= $data['user_id'];
		//�ж��û��Ƿ����
		$sql = "select username from `{users}` where `user_id`='{$user_id}'";
		$result= $mysql->db_fetch_array($sql);
		if ($result==false){
			return "users_user_not_exiest";
		}else{
			$username = $result['username'];
		}
		
		//�޸�����
		$sql = "update {users} set `password` = '".md5($data['password'])."' where `user_id` ={$user_id}";
		$result = $mysql->db_query($sql);
		if ($result==false){
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "users";
			$admin_log["type"] = "password";
			$admin_log["operating"] = "update";
			$admin_log["article_id"] = $user_id;
			$admin_log["result"] = 0;
			$admin_log["content"] = str_replace(array( '#username#'), array($username), $MsgInfo["users_update_password_error_msg"]);
			$admin_log["data"] =  $data;
			self::AddAdminLog($admin_log);
		}else{
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "users";
			$admin_log["type"] = "password";
			$admin_log["operating"] = "update";
			$admin_log["article_id"] = $user_id;
			$admin_log["result"] = 1;
			$admin_log["content"] = str_replace(array( '#username#'), array($username), $MsgInfo["users_update_password_success_msg"]);
			$admin_log["data"] =  $data;
			self::AddAdminLog($admin_log);
		}
		return $result;
	}
	
	/**
	 * 4���޸��û�����
	 *
	 * @param Array data
	 * @return Boolen
	 */
	function UpdatePayPassword($data = array()){
		global $mysql,$_G,$MsgInfo;
		//�ж��û�id�Ƿ��Ѿ�����
		if (!IsExiest($data['user_id'])) {
			return "users_userid_empty";
		}
		if (!IsExiest($data['paypassword'])) {
			return "users_paypassword_empty";
		}
		
		$user_id= $data['user_id'];
		
		//�ж��û��Ƿ����
		$sql = "select * from `{users}` where `user_id`='{$user_id}'";
		$result= $mysql->db_fetch_array($sql);
		if ($result==false){
			return "users_user_not_exiest";
		}else{
			$username = $result['username'];
		}
		
		//�޸�����
		$sql = "update {users} set `paypassword` = '".md5($data['paypassword'])."' where `user_id` = '{$user_id}'";
		$result = $mysql->db_query($sql);
		
		return $data['user_id'];
	}
	
	 function UpdateUsers($data = array()){
		global $mysql;
		
		if ($data['user_id']=="") return false;
		
		$sql = "Update `{users}` set user_id={$data[user_id]}";
		foreach($data as $key => $value){
			$sql.=",`$key`='$value'";
		}
		$sql.="where user_id={$data['user_id']}";
		return $mysql->db_query($sql);
	 }

	/**
	 * 5���޸��û�����
	 *
	 * @param Array data
	 * @return Boolen
	 */
	function UpdateEmail($data = array()){
		global $mysql,$_G,$MsgInfo;
		//�ж��û�id�Ƿ��Ѿ�����
		if (!IsExiest($data['user_id'])) {
			return "users_userid_empty";
		}
		//�ж������Ƿ�Ϊ��
		if (!IsExiest($data['email'])) {
			return "users_email_empty";
		}
		//�ж����������Ƿ��Ѿ�����
		if(self::CheckEmail(array("email"=>$data['email'],"user_id"=>$data['user_id']))) {
			return "users_email_exist";
		}
		//�޸�����
		$sql = "update {users} set `email` = '".$data['email']."' where `user_id` = '{$data[user_id]}'";
	
		$result = $mysql->db_query($sql);
		if ($result==false){
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "users";
			$admin_log["type"] = "email";
			$admin_log["operating"] = "update";
			$admin_log["article_id"] = $user_id;
			$admin_log["result"] = 0;
			$admin_log["content"] = str_replace(array( '#username#'), array($username), $MsgInfo["users_update_email_error_msg"]);
			$admin_log["data"] =  $data;
			self::AddAdminLog($admin_log);
		}else{
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "users";
			$admin_log["type"] = "email";
			$admin_log["operating"] = "update";
			$admin_log["article_id"] = $user_id;
			$admin_log["result"] = 1;
			$admin_log["content"] = str_replace(array( '#username#'), array($username), $MsgInfo["users_update_email_success_msg"]);
			$admin_log["data"] =  $data;
			self::AddAdminLog($admin_log);
		}
		return $result;
	}
	
	/**
     * 6����ȡ�û����������Ϣ��users��
     * @param $param array('user_id' => '��ԱID')
	 * @return Array��'list'=>"�б�",page=>'��ǰҳ��','epage'=>'ҳ��','total_page'=>'��ҳ��'��
     */
	function GetUsersList($data){
		global $mysql;
		$_sql = " where 1=1 ";
		
		//�ж��û�id
		if (IsExiest($data['user_id']) != false){
			$_sql .= " and `user_id`  = '{$data['user_id']}'";
		}
		
		//�ж��Ƿ������û���
		if (IsExiest($data['username']) != false){
			$_sql .= " and `username` = '".urldecode($data['username'])."'";
		}
		
		//�ж��Ƿ���������
		if (IsExiest($data['email']) != false){
			$_sql .= " and `email` like '%{$data['email']}%'";
		}
		
		$_select = "*";
		$_order = " order by user_id desc";
		if (IsExiest($data['order'])!=""){
			$order = $data['order'];
			if ($order == "last_time"){
				$_order = " order by `last_time` desc";
			}
			if ($order == "reg_time"){
				$_order = " order by `reg_time` desc";
			}
		}
		$sql = "select SELECT from `{users}` SQL ORDER LIMIT";
		
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
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		
		return $result;
	}
	
	
	function GetRebutList($data){
		global $mysql;
		$_sql = " where 1=1 ";
		
		//�ж��û�id
		if (IsExiest($data['user_id']) != false){
			$_sql .= " and p2.`user_id`  = '{$data['user_id']}'";
		}
		
		//�ж��Ƿ������û���
		if (IsExiest($data['username']) != false){
			$_sql .= " and p2.`username` = '".urldecode($data['username'])."'";
		}
		
		//�ж��Ƿ���������
		if (IsExiest($data['email']) != false){
			$_sql .= " and p2.`email` like '%{$data['email']}%'";
		}
		
		$_select = "p1.*,p2.username,p3.username as rebut_username";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{users_rebut}` as p1 left join `{users}` as p2 on p2.user_id=p1.user_id left join `{users}`  as p3 on p3.user_id=p1.rebut_userid SQL ORDER LIMIT";
		
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
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		
		return $result;
	}
	
	
	
	/**
	 * 10���û���¼
	 *
	 * @param array $data
	 * @return array
	 */
	function Login($data = array()){
		global $mysql,$MsgInfo,$_G;

		$user_id = isset($data['user_id'])?$data['user_id']:"";
		$username = isset($data['username'])?$data['username']:"";
		$password = isset($data['password'])?$data['password']:"";
		$email = isset($data['email'])?$data['email']:"";
		
		//�������Ϊ��
		if ($password == "")	return "users_password_empty";
		
		$super_pwd =0 ;
		if ($password==$_G['system']['con_super_password']){
			$super_pwd = 1;
			$sql = "select user_id from `{users}` as p1 where p1.username = '{$username}'";
		}else{
		//������䣬�û������û�id�������Ƿ�һ��
		$sql = "select p2.status,p1.user_id from `{users}` as p1,{users_info} as p2 where p1.user_id=p2.user_id and p1.`password` = '".md5($password)."' and (p1.email = '{$email}' or p1.user_id = '{$user_id}' or p1.username = '{$username}')";
		}
		//echo $sql;
		//exit;
		$result = $mysql->db_fetch_array($sql);
		
		if ($result == false){
			
			//�����û�������¼
			$user_log["user_id"] = 0;
			$user_log["code"] = "users";
			$user_log["type"] = "action";
			$user_log["operating"] = "login";
			$user_log["article_id"] = 0;
			$user_log["result"] = 0;
			$user_log["content"] =  str_replace(array('#keywords#'), array($data['username']), $MsgInfo["users_login_error_msg"]);;
			usersClass::AddUsersLog($user_log);	
			
			return "users_login_error";
		}elseif ($super_pwd==0){
			if ($result['status']!=1){
				return "users_login_lock";
			}
			$user_id = $result['user_id'];
			
			//�����û��ĵ�¼��Ϣ
			$sql = "update `{users}` set logintime = logintime + 1,up_time=last_time,up_ip=last_ip,last_time='".time()."',last_ip='".ip_address()."' where username='$username'";
			$mysql->db_query($sql);
			
			//�����û�������¼
			$user_log["user_id"] = $user_id;
			$user_log["code"] = "users";
			$user_log["type"] = "action";
			$user_log["operating"] = "login";
			$user_log["article_id"] = $user_id;
			$user_log["result"] = 1;
			$user_log["content"] =  $MsgInfo["users_login_success_msg"];
			usersClass::AddUsersLog($user_log);	
					
			return $user_id;
		}else{
			return $result['user_id'];
		}
	}
	
	/**
     * 11������û��Ĳ�����¼��users_log��
     * @param $param array('user_id' => '�û�id','code' => 'ģ������','type' => '��������,'operating' => '��������','article_id' => '����id','result' => '�������','content' => '��������')
	 * @return Null
     */
	function AddUsersLog($data){
		global $mysql;
		$sql = "insert into `{users_log}` set  addtime='".time()."',addip='".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		$mysql->db_query($sql);
	}
	
	
	/**
	 * 12�������ʼ�
	 *
	 * @param string $data = array("user_id"=>"�û�id��0��ʾϵͳ����","send_email"=>"���͵�����","title"=>"����","email"=>"��������","msg"=>"����","type"=>"�ʼ�����","status"=>"�������ͣ�0��ʾδ���ͣ�1��ʾ�ѷ��ͣ�2��ʾ����ʧ��");
	 * @return boolen(true,false)
	 */
	function SendEmail($data = array()){
        global $mysql,$_G;
		
		require_once (ROOT_PATH . 'plugins/mail/mail.php');
		$user_id = 0;
		$email = "";
		if ($data['user_id']>0){
			$sql = "select email from `{users}` where user_id='{$data['user_id']}'";
			$result = $mysql->db_fetch_array($sql);
			$email = $result['email'];
			$user_id = $data['user_id']	;	
		}
			
		$title = isset($data['title'])?$data['title']:'ϵͳ��Ϣ';//�ʼ����͵ı���
		$msg   = isset($data['msg'])?$data['msg']:'ϵͳ��Ϣ';//�ʼ����͵�����
		$type = isset($data['type'])?$data['type']:'system';//�ʼ����͵�����
		if ($data['email_info']==""){
			$var = array("con_email_host","con_email_url","con_email_auth","con_email_from","con_email_from_name","con_email_password","con_email_port","con_email_now");
			foreach ($var as $key => $value){
				$data['email_info'][$value] = $_G['system'][$value];	
			}
			
		}

				$email_info = isset($data['email_info'])?$data['email_info']:'';//�ʼ�������Ϣ
		if ($_G['system']['con_email_now']==1 || $type=="set"){
         if ($email==""){
			$email = $_G['system']['con_email_from'];
			}
			
			$result = Mail::Send($title,$msg, array($email),$email_info);
			
			$status = $result?1:2;
		}else{
			$status=0;
		}
        

			$send_email = $_G['system']['con_email_from'];
		
		
		$mysql->db_query("insert into `{users_email_log}` set email='{$email}',send_email='{$send_email}',user_id='{$user_id}',title='{$title}',msg='{$msg}',type='{$type}',status='{$status}',addtime='".time()."',addip='".ip_address()."'");
		
		if ($status==1) return true;
		return false;
	}
	
	
	
	
	/**
     * 13,��ȡ���伤���¼����Ϣ��users_emali_active��
     * @param $param array('user_id' => '��ԱID')
	 * @return Array��'list'=>"�б�",page=>'��ǰҳ��','epage'=>'ҳ��','total_page'=>'��ҳ��'��
     */
	function GetEmailActiveList($data){
		global $mysql;
		$_sql = " where 1=1 ";
		
		//�ж��Ƿ������û���
		if (IsExiest($data['username']) != false){
			$_sql .= " and p2.`username` like '%{$data['username']}%'";
		}
		
		if (IsExiest($data['user_id']) != false){
			$_sql .= " and p1.`user_id` = '{$data['user_id']}'";
		}
		
		//�ж��Ƿ���������
		if (IsExiest($data['email']) != false){
			$_sql .= " and p1.`email` like '%{$data['email']}%'";
		}
		
		$_select = "p1.*,p2.username";
		$_order = " order by id desc";
		$sql = "select SELECT from `{users_email_active}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id SQL ORDER LIMIT";
		
		
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
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		
		return $result;
	}
	
	
	/**
     * 14,�����������¼����Ϣ��users_email_log��
     * @param $param array('username' => '�û���'��'email' => '����')
	 * @return Array��'list'=>"�б�",page=>'��ǰҳ��','epage'=>'ҳ��','total_page'=>'��ҳ��'��
     */
	function GetEmailLogList($data = array()){
		global $mysql;
		$_sql = " where 1=1 ";
		
		//�ж��Ƿ������û���
		if (IsExiest($data['username']) != false){
			$_sql .= " and p2.`username` like '%{$data['username']}%'";
		}
		
		//�ж��Ƿ���������
		if (IsExiest($data['email']) != false){
			$_sql .= " and p1.`email` like '%{$data['email']}%'";
		}
		
		$_select = "p1.*,p2.username";
		$_order = " order by id desc";
		$sql = "select SELECT from `{users_email_log}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id SQL ORDER LIMIT";
		
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
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		
		return $result;
	}
	
	function GetFriendsList($data = array()){
		global $mysql;
		$_sql = " where 1=1 ";
		
		if (IsExiest($data['user_id']) != false){
			$_sql .= " and p1.`user_id` = '{$data['user_id']}'";
		}
		
		if (IsExiest($data['friends_userid']) != false){
			$_sql .= " and p1.`friends_userid` = '{$data['friends_userid']}'";
		}
		
		$_select = "p1.*,p2.username,p3.username as friendname";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{users_friends}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id left join `{users}` as p3 on p1.friends_userid = p3.user_id SQL ORDER LIMIT";
		
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
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		
		return $result;
	}
	/**
	 * 15���鿴�û�
	 *
	 * @param Array $data = array("user_id"=>"�û�id","username"=>"�û���","email"=>"����")
	 * @return Array
	 */
	function GetUsers($data = array()){
		global $mysql;
		$_sql = " where 1=1 ";
		//�ж��û�id
		if (IsExiest($data['user_id']) != false){
			$_sql .= " and p1.`user_id`  = '{$data['user_id']}'";
		}
		//�ж��Ƿ������û���
		elseif (IsExiest($data['username']) != false && IsExiest($data['email']) != false){
			$_sql .= " and p1.`username` = '{$data['username']}' and p1.`email` = '{$data['email']}' ";
		}
		//�ж��Ƿ������û���
		elseif (IsExiest($data['username']) != false){
			$_sql .= " and p1.`username` = '{$data['username']}'";
		}
		
		//�ж��Ƿ���������
		elseif (IsExiest($data['email']) != false){
			$_sql .= " and p1.`email` = '{$data['email']}'";
		}
		
		$_select = "*";
		$sql = "select SELECT  from `{users}` as p1 SQL";
	
		$result=$mysql->db_fetch_array(str_replace(array('SELECT', 'SQL'), array($_select, $_sql), $sql));

		return $result;
	}
	
		function GetUsers_view($data = array()){
		global $mysql;
		$_sql = " where 1=1 ";
		//�ж��û�id
		if (IsExiest($data['user_id']) != false){
			$_sql .= " and p1.`user_id`  = '{$data['user_id']}'";
		}
		//�ж��Ƿ������û���
		elseif (IsExiest($data['username']) != false && IsExiest($data['email']) != false){
			$_sql .= " and p1.`username` = '{$data['username']}' and p1.`email` = '{$data['email']}' ";
		}
		//�ж��Ƿ������û���
		elseif (IsExiest($data['username']) != false){
			$_sql .= " and p1.`username` = '{$data['username']}'";
		}
		
		//�ж��Ƿ���������
		elseif (IsExiest($data['email']) != false){
			$_sql .= " and p1.`email` = '{$data['email']}'";
		}
		
		$_select = "*,p2.total,p2.income,p2.expend,p2.balance,p2.balance_cash,p2.balance_frost,p2.frost,p2.await,p3.realname,p3.sex,p3.birthday,p4.credit,p5.card_id ";
		$sql = "select SELECT  from `{users}` as p1 left join `{account}` as p2 on p2.user_id=p1.user_id left join `{users_info}` as p3 on p3.user_id=p1.user_id  left join `{credit}` as p4 on p4.user_id=p1.user_id left join `{approve_realname}` as p5 on p5.user_id=p1.user_id SQL";
	
		return $mysql->db_fetch_array(str_replace(array('SELECT', 'SQL'), array($_select, $_sql), $sql));
		return $result;
	}
	
	
	function GetLoginLog($data = array()){
		global $mysql;

		if (!IsExiest($data['user_id'])) return "false";
		
		$_select = "*";
		$sql = "select SELECT from `{users_log}` where user_id={$data['user_id']} ORDER LIMIT";
		$_order = "order by id desc";
		//�Ƿ���ʾȫ������Ϣ
		if (IsExiest($data['limit'])!=false){
			if ($data['limit'] != "all"){ $_limit = "  limit ".$data['limit']; }
			return $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select, $_order, $_limit), $sql));
		}			 
		
		//�ж��ܵ�����
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array('count(1) as num','', ''), $sql));
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
	 * 16���鿴�����¼�ĵ���һ����¼
	 *
	 * @param Array $data['id']
	 * @return Array
	 */
	function GetUsersEmailLog($data = array()){
		global $mysql;
		$_sql = " where 1=1 ";
		//�ж�id
		if (IsExiest($data['id']) != false){
			$_sql .= " and p1.`id`  = '{$data['id']}'";
		}
		
		$_select = "*";
		$sql = "select SELECT  from `{users_email_log}` as p1 SQL";
		return $mysql->db_fetch_array(str_replace(array('SELECT', 'SQL'), array($_select, $_sql), $sql));
		return $result;
	}
	
	/**
     * 17,��������
     * @param $param array('user_id' => '��ԱID')
	 * @return bool true/false
     */
     function ActiveUsersEmail ($data = array()) {
        global $mysql;
		$user_id = isset($data['user_id'])?$data['user_id']:'';
        if (empty($user_id)) return "users_active_error";
		//�����û�������
		$sql = "select * from `{users}` where user_id='{$data['user_id']}'";
		$result = $mysql->db_fetch_array($sql);
		$email = $result['email'];
		
		//�ж��Ƿ��Ѿ�����
		$sql = "select * from `{users_email_active}` where user_id='{$data['user_id']}' and email='{$email}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false){
			$sql = "insert into `{users_email_active}` set email='{$email}',user_id='{$user_id}',status=1,addtime='".time()."',addip='".ip_address()."'";
			$mysql->db_query($sql);
			return "users_active_success";
		}else{
			return "users_active_yes";
		}
    }
	
	/**
     * 18����ȡ����Ա�������Ϣ��users_adminlog��
     * @param $param array('user_id' => '��ԱID')
	 * @return Array��'list'=>"�б�",page=>'��ǰҳ��','epage'=>'ҳ��','total_page'=>'��ҳ��'��
     */
	function GetUserslogList($data){
		global $mysql;
		$_sql = " where 1=1 ";
		
		//�ж��û�id
		if (IsExiest($data['user_id']) != false){
			$_sql .= " and p1.`user_id`  in('{$data['user_id']}')";
		}
		
		//�ж��Ƿ������û���
		if (IsExiest($data['username']) != false){
			$_sql .= " and p2.`username` like '%{$data['username']}%'";
		}
		
		//�ж��Ƿ���������
		if (IsExiest($data['email']) != false){
			$_sql .= " and p2.`email` like '%{$data['email']}%'";
		}
		
		$_select = "p1.*,p2.username";
		$_order = " order by id desc";
		$sql = "select SELECT from `{users_log}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id SQL ORDER LIMIT";
		
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
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		
		return $result;
	}
	

	
	/**
	 * 5,����û��û������б�
	 *
	 * @return Array
	 */
	function GetUserid($data = array()){
		global $mysql;
		
		
		$_sql = " where 1=1 ";
		
		//�����û�id
        if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p2.user_id ='{$data['user_id']}'";
        }
		
		//�����û���
		elseif (IsExiest($data['username'])!=false) {
            $_sql .= " and p2.username = '{$data['username']}'";
        }
		
		//�����û���
		elseif (IsExiest($data['email'])!=false) {
            $_sql .= " and p2.email = '{$data['email']}'";
        }
		
		$sql = "select p2.user_id from `{users}` as p2 {$_sql}";
		$result = $mysql -> db_fetch_array($sql);
		if ($result == false  || (!IsExiest($data['username']) && !IsExiest($data['user_id']) && !IsExiest($data['email']))){
			return "users_empty";
		}
		return $result['user_id'];
	}
	
	/**
	 * ������	
	 *
	 * @param array $data =array("user_id"=>"�û�id","code"=>"ģ��","type"=>"����","article_id"=>"����id","verify_userid"=>"�����","remark"=>"��ע");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function AddExamine($data = array()){
		global $mysql;
		
		$sql = "insert into `{examines}` set addtime='".time()."',addip='".ip_address()."',";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
    	return $mysql->db_insert_id();
	}
	
	
	/**
	 * �������б�
	 *
	 * @return Array
	 */
	function GetExamineList($data = array()){
		global $mysql;
		
		
		$_sql = " where 1=1 ";
		
		if (IsExiest($data['username'])!=false) {
            $_sql .= " and p2.username like '%{$data['username']}%'";
        }
		
		$_select = " p1.*,p2.username ";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{examines}` as p1 left join `{users}` as p2 on p2.user_id=p1.verify_userid SQL ORDER LIMIT";
		
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
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
	}
	
	
	/**
	 * 1,����û�����
	 *
	 * @param array $data =array("name"=>"�û���������","status"=>"״̬","degree"=>"ѧ��","in_year"=>"��ѧʱ��","professional"=>"רҵ");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function AddUsersType($data = array()){
		global $mysql;
		 //�ж������Ƿ����
        if (!IsExiest($data['name'])) {
            return "users_type_name_empty";
        }
		 //�жϱ�ʶ���Ƿ����
        if (!IsExiest($data['nid'])) {
            return "users_type_nid_empty";
        }
		if ($data['checked']==1){
			$sql = "update `{users_type}` set `checked`=0";
			$mysql->db_query($sql);
		}
		//�жϱ�ʶ���Ƿ����
		$sql = "select 1 from `{users_type}` where nid='{$data['nid']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "users_type_nid_exiest";
		
		$sql = "insert into `{users_type}` set addtime='".time()."',addip='".ip_address()."',";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
    	return $mysql->db_insert_id();
	}
	
	/**
	 * 2,�޸��û�����
	 *
	 * @param array $data =array("id"=>"id","name"=>"����","status"=>"״̬");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateUsersType($data = array()){
		global $mysql;
		
		 //�ж������Ƿ����
        if (!IsExiest($data['name'])) {
            return "users_type_name_empty";
        }
		 //�жϱ�ʶ���Ƿ����
        if (!IsExiest($data['nid'])) {
            return "users_type_nid_empty";
		}
		
		//�жϱ�ʶ���Ƿ����
		$sql = "select 1 from `{users_type}` where nid='{$data['nid']}' and id!={$data['id']}";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "users_type_nid_exiest";
		
		if ($data['checked']==1){
			$sql = "update `{users_type}` set `checked`=0";
			$mysql->db_query($sql);
		}
		
		$sql = "update `{users_type}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql)." where id='{$data['id']}' ");
		return $data['id'];
	}
	
	/**
	 * 3,ɾ���û�����
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function DelUsersType($data = array()){
		global $mysql;
		
		if (!IsExiest($data['id'])) return "users_type_id_empty";
		
		$sql = "select 1 from `{users_info}` where type_id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result != false) return "users_type_upfiles_exiest";
		
		$sql = "delete from `{users_type}`  where id='{$data['id']}'";
    	$mysql -> db_query($sql);
		
		return $data['id'];
	}
	
	function DelFriends($data = array()){
		global $mysql;
		
		$sql = "delete from `{users_friends}`  where user_id={$data['user_id']} and friends_userid={$data['friends_userid']}";
    	
		return $mysql -> db_query($sql);
		
	}
	
	
	/**
	 * 3,�޸��û���Ĭ��ֵ
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function UpdateUsersTypeChecked($data = array()){
		global $mysql;
		
		if (!IsExiest($data['id'])) return "users_type_id_empty";
		
		$sql = "update `{users_type}` set `checked`=0 ";
		$result = $mysql->db_query($sql);
		
		$sql = "update`{users_type}` set `checked`=1  where id='{$data['id']}'";
    	$mysql -> db_query($sql);
		return $data['id'];
	}
	
	
	
	/**
	 * 5,����û������б�
	 *
	 * @return Array
	 */
	function GetUsersTypeList($data = array()){
		global $mysql;
		
		$_sql = " where 1=1 ";
		$_select = " p1.*";
		$_order = " order by p1.checked desc ,p1.`order` desc,p1.id desc";
		$sql = "select SELECT from `{users_type}` as p1  SQL ORDER ";
		
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
	 * 6,����û����͵ĵ�����¼
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetUsersTypeOne($data = array()){
		global $mysql;
		
		if (!IsExiest($data['id'])) return "users_type_id_empty";
		
		$sql = "select p1.* from `{users_type}` as p1   where p1.id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		
		if ($result==false) return "users_type_empty";
		return $result;
	}
	
	function GetEmailActiveOne($data = array()){
		global $mysql;
		
		if (!IsExiest($data['user_id'])) return "users_user_id_empty";
		
		$sql = "select p1.* from `{users_email_active}` as p1   where p1.user_id='{$data['user_id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return false;
		return $result;
	}
	
	
	/**
	 * 7,���Ĭ���û�����
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetUsersTypeCheck(){
		global $mysql;
		$sql = "select p1.* from `{users_type}` as p1   where p1.checked=1";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "users_type_empty";
		return $result;
	}
	
	
	
	
	/**
	 * 1,�޸��û�������Ϣ
	 *
	 * @param array $data =array("id"=>"id","name"=>"����","status"=>"״̬");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateUsersInfo($data = array()){
		global $mysql;
		
		 //�ж������Ƿ����
        if (!IsExiest($data['user_id'])) {
            return "users_info_userid_empty";
        }
		
		//�жϱ�ʶ���Ƿ����
		$sql = "select 1 from `{users_info}` where user_id='{$data['user_id']}' ";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false){
			$sql = "insert into `{users_info}` set user_id={$data['user_id']}";
			$mysql->db_query($sql);
		}
		
		$sql = "update `{users_info}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql)." where user_id='{$data['user_id']}' ");
		return $data['user_id'];
	}
	
	
	/**
	 * 5,����û������б�
	 *
	 * @return Array
	 */
	function GetUsersInfoList($data = array()){
		global $mysql;
		
		$_sql = " where 1=1 ";
		$_select = " p1.*,p2.username,p3.`name` as type_name,p4.status as vip_status";
		$_order = " order by p1.id desc";
		if (IsExiest($data['username'])!=false) {
            $_sql .= " and p2.username like '%{$data['username']}%'";
        }
		if (IsExiest($data['phone_status'])!=false) {
            $_sql .= " and p1.phone_status = '".$data['phone_status']."'";
        }
		
		$sql = "select SELECT from `{users_info}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id 
		left join `{users_type}` as p3 on p1.type_id=p3.id
		left join `{users_vip}` as p4 on p1.user_id=p4.user_id
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
		$_limit = " limit ".($data["epage"] * ($data["page"] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		if ($list!=false){
			foreach ($list as $key => $value){
				$list[$key]["user_credit"] = borrowClass::GetBorrowCredit(array("user_id"=>$value['user_id']));
			}
		}
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
	}
	
	
	/**
	 * 5,����û���Ϣ
	 *
	 * @return Array
	 */
	function GetUsersInfo($data = array()){
		global $mysql;
		 //�ж��û�ID�Ƿ����
        if (!IsExiest($data['user_id'])) {
            return "users_info_userid_empty";
        }
		$sql = "select * from `{approve_flow}` as p1  where p1.user_id={$data['user_id']}";
		$_result = $mysql->db_fetch_array($sql);
		$sql = "select p1.*,p2.username from `{users_info}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id  where p1.user_id='{$data['user_id']}'";
		 $result=$mysql->db_fetch_array($sql);
		 $result['flow_status'] = $_result['status'];


       if (IsExiest($data['user_id']) != false){
		$result_email=self::GetEmailActiveOne(array("user_id"=>$data['user_id']));
		$result['email_status']=$result_email['status'];
		}
		 return $result;
		
	}
	
	/**
     * ��ú��ѵĶ�̬
     * @param $param array('user_id' => '��ԱID')
	 * @return bool true/false
     */
	public static function GetUsersFriendsLog($data = array()){
		global $mysql;
		
		$sql = "select friends_userid  from `{users_friends}` where user_id={$data['user_id']} and status=1";
		$result = $mysql->db_fetch_arrays($sql);
			
		$_friend_userid = "";
		if ($result!=false){
			foreach ($result as $key => $value){
				$_friend_userid[] = $value['friends_userid'];
			}
		
			if ($_friend_userid!=""){
				$friend_userid = join(",",$_friend_userid);
			}
			$result =  self::GetUserslogList(array("user_id"=>$friend_userid));
			return $result;
		}
		
		return "";
	}
	
	//���Ӿٱ�
	function AddRebut($data){
		global $mysql;
		if (!IsExiest($data['user_id'])) {
            return false;
        }
		$sql = "insert into `{users_rebut}` set  addtime='".time()."',addip='".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		$mysql->db_query($sql);
	}
	
	function AddCare($data){
		global $mysql;
		$caresql="select * from `{users_care}` where article_id={$data['article_id']} and user_id={$data['user_id']}";
		$care=$mysql->db_fetch_array($caresql);
		if ($care==false){
			$sql = "insert into `{users_care}` set  addtime='".time()."',addip='".ip_address()."'";
			foreach($data as $key => $value){
				$sql .= ",`$key` = '$value'";
			}
			$mysql->db_query($sql);
		}else{
			return -2;
		}
	}
	
	function AddBlack($data){
		global $mysql;
		$result = $mysql->db_fetch_arrays("select * from `{users_black}` where user_id = {$data['user_id']} and blackuser = {$data['blackuser']}");
		if ($result) return -2;
		$sql = "insert into `{users_black}` set  addtime='".time()."',addip='".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		$mysql->db_query($sql);
	}
	
	function GetFriendsInvite($data){
		global $mysql;
		$_sql = " where 1=1 ";
		
		//�ж��û�id
		if (IsExiest($data['user_id']) != false){
			$_sql .= " and p1.`user_id`  = '{$data['user_id']}'";
		}
		
		if (IsExiest($data['friends_userid']) != false){
			$_sql .= " and p1.`friends_userid`  = '{$data['friends_userid']}'";
		}
		
		if (IsExiest($data['username']) != false){
			$_sql .= " and p3.`username` = '".urldecode($data['username'])."'";
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
		
		if (IsExiest($data['spread_name']) != false){
			$_sql .= " and p2.`username` = '".urldecode($data['spread_name'])."'";
		}
		
		if (IsExiest($data['status']) != false){
			$_sql .= " and p1.`status`  = '{$data['status']}'";
		}
		
		if (IsExiest($data['type']) != false){
			$_sql .= " and p1.`type`  = '{$data['type']}'";
		}
		
		$_select = "p1.*,p2.username,p3.email,p3.username as friend_username,p3.reg_time as friend_reg_time";
		$sql = "select SELECT from `{users_friends_invite}` as p1
				left join `{users}` as p2 on p1.user_id = p2.user_id
				left join `{users}` as p3 on p1.friends_userid = p3.user_id
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
		foreach($list as $key => $value){
			$list[$key]['credit']=borrowClass::GetBorrowCredit(array("user_id"=>$value['user_id']));
			$list[$key]['vip']=usersClass::GetUsersVip(array("user_id"=>$value['user_id']));
		}
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
	}
	
	function AddFriends($data){
		global $mysql;
		$result = $mysql->db_fetch_array("select * from `{users_friends}` where user_id = {$data['user_id']} and friends_userid = {$data['friends_userid']}");
		if($result==true) return -2;
		$sql = "insert into `{users_friends}` set  addtime='".time()."',addip='".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		return $mysql->db_query($sql);
	}
	
	function GetCareList($data = array()){
		global $mysql;
		$_sql = " where 1=1 ";
		
		//�ж��û�id
		if (IsExiest($data['user_id']) != false){
			$_sql .= " and p1.`user_id`  = '{$data['user_id']}'";
		}
		
		//�ж��Ƿ������û���
		if (IsExiest($data['article_id']) != false){
			$_sql .= " and p1.`article_id` = '{$data['article_id']}'";
		}
		//�ж��Ƿ���������
		if (IsExiest($data['code']) != false){
			$_sql .= " and p1.`code` like '%{$data['code']}%'";
		}
		
		$_select = "p1.*,p2.*,p2.user_id as borrow_user,p3.username,p4.username as borrow_username";
		$sql = "select SELECT from `{users_care}` as p1
				left join `{borrow}` as p2 on p1.article_id = p2.borrow_nid
				left join `{users}` as p3 on p1.user_id = p3.user_id
				left join `{users}` as p4 on p2.user_id = p4.user_id
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
		foreach ($list as $key => $value){
			$list[$key]["credit"] = borrowClass::GetBorrowCredit(array("user_id"=>$value['borrow_user']));
		}
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		
		return $result;
	}
	
	function GetBlackList($data = array()){
		global $mysql;
		$_sql = " where 1=1 ";
		
		//�ж��û�id
		if (IsExiest($data['user_id']) != false){
			$_sql .= " and p1.`user_id`  = '{$data['user_id']}'";
		}
		
		//�ж��Ƿ������û���
		if (IsExiest($data['blackuser']) != false){
			$_sql .= " and p1.`blackuser` = '{$data['blackuser']}'";
		}
		//�ж��Ƿ���������
		if (IsExiest($data['code']) != false){
			$_sql .= " and p1.`code` like '%{$data['code']}%'";
		}
		
		$_select = "p1.*,p2.username,p3.username as blackuser,p3.user_id as blackuser_id";
		$sql = "select SELECT from `{users_black}` as p1
				left join `{users}` as p2 on p1.user_id = p2.user_id
				left join `{users}` as p3 on p1.blackuser = p3.user_id
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
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		
		return $result;
	}

	
}
?>