<?

/******************************
 * $File: rating.class.php
 * $Description: ����ϵͳ
 * $Author: hummer 
 * $Time:2010-03-09
 * $Update:None 
 * $UpdateDate:None 
******************************/

//�����Ը������
require_once("rating.model.php");
require_once(ROOT_PATH."modules/credit/credit.class.php");

class ratingClass {
	
	function ratingClass(){
		//�������ݿ������Ϣ
		
        
	}
	
	/**
	 * 1,���ѧ��
	 *
	 * @param array $data =array("name"=>"����","status"=>"״̬","degree"=>"ѧ��","in_year"=>"��ѧʱ��","professional"=>"רҵ");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function AddEducations($data = array()){
		global $mysql;
		 //�ж������Ƿ����
        if (!IsExiest($data['name'])) {
            return "rating_educations_name_empty";
        }
		
		//�ж��û������û�id�������һ��
		if (!IsExiest($data['username']) && !IsExiest($data['user_id'])) {
			return "rating_educations_user_must_one";
		}
		
		//����û����ڣ��ж��û��Ƿ����
		if (IsExiest($data['username'])!=false){
			$sql = "select user_id from `{users}` where username ='{$data['username']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result==false) return "rating_educations_username_not_exiest";
			$data['user_id'] = $result['user_id'];
			unset($data['username']);
		}
		
		//�ж��û�ѧ�������Ƿ����10��
		$sql = "select count(1) as num  from `{rating_educations}` where user_id='{$data['user_id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result['num']>10){
			return "rating_educations_num_not_10";
		}
		
		$sql = "insert into `{rating_educations}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
    	return $mysql->db_insert_id();
	}
	
	/**
	 * �޸�ѧ��
	 *
	 * @param array $data 
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateHouse($data = array()){
		global $mysql;
		
		//����id
		if (!IsExiest($data['id'])) return "rating_house_id_empty";
		
		//�ж��û������û�id�������һ��
		if (!IsExiest($data['username']) && !IsExiest($data['user_id'])) {
			return "rating_house_user_must_one";
		}
		
		//����û����ڣ��ж��û��Ƿ����
		if (IsExiest($data['username'])!=false){
			$sql = "select user_id from `{users}` where username ='{$data['username']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result==false) return "rating_house_username_not_exiest";
			$data['user_id'] = $result['user_id'];
			unset($data['username']);
		}
		
		$sql = "update `{rating_houses}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql)." where id='{$data['id']}'");
		return $data['id'];
	}
	
	/**
	 * 2,�޸�ѧ��
	 *
	 * @param array $data =array("id"=>"ѧ��id","name"=>"����","status"=>"״̬","degree"=>"ѧ��","in_year"=>"��ѧʱ��","professional"=>"רҵ");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateEducations($data = array()){
		global $mysql;
		
		//ѧ��id
		if (!IsExiest($data['id'])) return "rating_educations_id_empty";
		
         //�ж������Ƿ����
        if (!IsExiest($data['name'])) {
            return "rating_educations_name_empty";
        }
		
		//�ж��û������û�id�������һ��
		if (!IsExiest($data['username']) && !IsExiest($data['user_id'])) {
			return "rating_educations_user_must_one";
		}
		
		//����û����ڣ��ж��û��Ƿ����
		if (IsExiest($data['username'])!=false){
			$sql = "select user_id from `{users}` where username ='{$data['username']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result==false) return "rating_educations_username_not_exiest";
			$data['user_id'] = $result['user_id'];
			unset($data['username']);
		}
		
		$sql = "update `{rating_educations}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql)." where id='{$data['id']}'");
		return $data['id'];
	}
	
	/**
	 * 3,ɾ��ѧ��
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function DelEducations($data = array()){
		global $mysql;
		
		if (!IsExiest($data['id'])) return "rating_educations_id_empty";
		
		$sql = "delete from `{rating_educations}`  where id='{$data['id']}'";
    	$mysql -> db_query($sql);
		
		return $data['id'];
	}
	
	
	/**
	 *4,���ѧ��
	 *
	 * @param Array $data = array("id"=>"");
	 * @return id
	 */
	 function CheckEducations($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "rating_educations_id_empty";
		$sql = "select p1.*,p2.username from `{rating_educations}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "rating_educations_empty";
		$sql = "update `{rating_educations}` set verify_userid='{$data['verify_userid']}',verify_remark='{$data['verify_remark']}', verify_time='".time()."',status='{$data['status']}' where id='{$data['id']}'";
		$mysql->db_query($sql);
		
		//������˼�¼
		$_data["user_id"] = $result["user_id"];
		$_data["result"] = $data["status"];
		$_data["code"] = "rating";
		$_data["type"] = "educations";
		$_data["article_id"] = $data["id"];
		$_data["verify_userid"] = $data["verify_userid"];
		$_data["remark"] = $data["verify_remark"];
		usersClass::AddExamine($_data);
		return $data['id'];
	}
	
	/**
	 * 5,���ѧ���б�
	 *
	 * @return Array
	 */
	function GetEducationsList($data = array()){
		global $mysql;
		
		
		$_sql = " where 1=1 ";
		//�ж����������Ƿ����
        if (IsExiest($data['nid'])!=false) {
            $_sql .= " and p1.nid ='{$data['nid']}'";
        }
		
		if (IsExiest($data['name'])!=false) {
            $_sql .= " and p1.name like '%{$data['name']}%'";
        }
		
		$_select = " p1.*,p2.username ";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{rating_educations}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id SQL ORDER ";
		
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
		$_limit = " limit ".($epage * ($page - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
	}
	
	
	
	/**
	 * 6,���ѧ���ĵ�����¼
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetEducationsOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "rating_educations_id_empty";
		$sql = "select p1.*,p2.username from `{rating_educations}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "rating_educations_empty";
		return $result;
	}
	
	
	/**
	 * ��ӹ�������
	 *
	 * @param array $data =array("name"=>"����","status"=>"״̬","degree"=>"ѧ��","in_year"=>"��ѧʱ��","professional"=>"רҵ");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function AddJob($data = array()){
		global $mysql;
		 //�ж������Ƿ����
        if (!IsExiest($data['name'])) {
            return "rating_job_name_empty";
        }
		
		//�ж��û������û�id�������һ��
		if (!IsExiest($data['username']) && !IsExiest($data['user_id'])) {
			return "rating_job_user_must_one";
		}
		
		//����û����ڣ��ж��û��Ƿ����
		if (IsExiest($data['username'])!=false){
			$sql = "select user_id from `{users}` where username ='{$data['username']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result==false) return "rating_job_username_not_exiest";
			$data['user_id'] = $result['user_id'];
			unset($data['username']);
		}
		
		$sql = "insert into `{rating_job}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
    	return $mysql->db_insert_id();
	}
	
	/**
	 * ����ʲ�״��
	 *
	 * @param array $data =array("name"=>"����","status"=>"״̬","degree"=>"ѧ��","in_year"=>"��ѧʱ��","professional"=>"רҵ");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function AddAssets($data = array()){
		global $mysql;
		 //�ж������Ƿ����
        if (!IsExiest($data['name'])) {
            return "rating_assets_name_empty";
        }
		
		//�ж��û������û�id�������һ��
		if (!IsExiest($data['username']) && !IsExiest($data['user_id'])) {
			return "rating_assets_user_must_one";
		}
		
		//����û����ڣ��ж��û��Ƿ����
		if (IsExiest($data['username'])!=false){
			$sql = "select user_id from `{users}` where username ='{$data['username']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result==false) return "rating_assets_username_not_exiest";
			$data['user_id'] = $result['user_id'];
			unset($data['username']);
		}
		
		$sql = "insert into `{rating_assets}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
    	return $mysql->db_insert_id();
	}
	
	/**
	 * ��Ӳ���״��
	 *
	 * @param array $data =array("name"=>"����","status"=>"״̬","degree"=>"ѧ��","in_year"=>"��ѧʱ��","professional"=>"רҵ");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function AddFinance($data = array()){
		global $mysql;
		 //�ж������Ƿ����
        if (!IsExiest($data['name'])) {
            return "rating_finance_name_empty";
        }
		
		//�ж��û������û�id�������һ��
		if (!IsExiest($data['username']) && !IsExiest($data['user_id'])) {
			return "rating_finance_user_must_one";
		}
		
		//����û����ڣ��ж��û��Ƿ����
		if (IsExiest($data['username'])!=false){
			$sql = "select user_id from `{users}` where username ='{$data['username']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result==false) return "rating_finance_username_not_exiest";
			$data['user_id'] = $result['user_id'];
			unset($data['username']);
		}
		
		$sql = "insert into `{rating_finance}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
		
		$csql="select * from `{credit_log}` where user_id={$data['user_id']} and type='finance_credit'";
		$res=$mysql->db_fetch_array($csql);
		if ($res==false){
			$credit_log['user_id'] = $data['user_id'];
			$credit_log['nid'] = "finance_credit";
			$credit_log['code'] = "approve";
			$credit_log['type'] = "finance_credit";
			$credit_log['addtime'] = time();
			$credit_log['article_id'] =$data['user_id'];
			$credit_log['remark'] = "��д������Ϣ��õĻ���";
			creditClass::ActionCreditLog($credit_log);
		}
    	return $mysql->db_insert_id();
	}
	
	/**
	 * ��Ӹ�������
	 *
	 * @param array $data
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function AddInfo($data = array()){
		global $mysql;
		
		//�ж��û������û�id�������һ��
		if (!IsExiest($data['username']) && !IsExiest($data['user_id'])) {
			return "rating_info_user_must_one";
		}
		
		//����û����ڣ��ж��û��Ƿ����
		if (IsExiest($data['username'])!=false){
			$sql = "select user_id from `{users}` where username ='{$data['username']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result==false) return "rating_info_username_not_exiest";
			$data['user_id'] = $result['user_id'];
			unset($data['username']);
		}
		
		$sql = "insert into `{rating_info}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
    	return $mysql->db_insert_id();
	}
	
	/**
	 * ��ӷ�������
	 *
	 * @param array $data
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function AddHouse($data = array()){
		global $mysql;
		
		//�ж��û������û�id�������һ��
		if (!IsExiest($data['username']) && !IsExiest($data['user_id'])) {
			return "rating_house_user_must_one";
		}
		
		//����û����ڣ��ж��û��Ƿ����
		if (IsExiest($data['username'])!=false){
			$sql = "select user_id from `{users}` where username ='{$data['username']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result==false) return "rating_house_username_not_exiest";
			$data['user_id'] = $result['user_id'];
			unset($data['username']);
		}
		
		$sql = "insert into `{rating_houses}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
    	return $mysql->db_insert_id();
	}
	
	/**
	 * ��ӹ�����λ����
	 *
	 * @param array $data
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function AddCompany($data = array()){
		global $mysql;
		
		//�ж��û������û�id�������һ��
		if (!IsExiest($data['username']) && !IsExiest($data['user_id'])) {
			return "rating_company_user_must_one";
		}
		
		//����û����ڣ��ж��û��Ƿ����
		if (IsExiest($data['username'])!=false){
			$sql = "select user_id from `{users}` where username ='{$data['username']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result==false) return "rating_company_username_not_exiest";
			$data['user_id'] = $result['user_id'];
			unset($data['username']);
		}
		
		$sql = "insert into `{rating_company}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
    	return $mysql->db_insert_id();
	}
	
	/**
	 * �����ϵ��ʽ
	 *
	 * @param array $data
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function AddContact($data = array()){
		global $mysql;
		
		//�ж��û������û�id�������һ��
		if (!IsExiest($data['username']) && !IsExiest($data['user_id'])) {
			return "rating_contact_user_must_one";
		}
		
		//����û����ڣ��ж��û��Ƿ����
		if (IsExiest($data['username'])!=false){
			$sql = "select user_id from `{users}` where username ='{$data['username']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result==false) return "rating_contact_username_not_exiest";
			$data['user_id'] = $result['user_id'];
			unset($data['username']);
		}
		
		$sql = "insert into `{rating_contact}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
    	return $mysql->db_insert_id();
	}
	
	/**
	 * �޸�ѧ��
	 *
	 * @param array $data =array("name"=>"����","status"=>"״̬","degree"=>"ѧ��","in_year"=>"��ѧʱ��","professional"=>"רҵ");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateJob($data = array()){
		global $mysql;
		
		$_sql = "where 1=1";
		if (IsExiest($data['id'])!=false) {
            $_sql .= " and id = '{$data['id']}'";
        }
		if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and user_id = '{$data['user_id']}'";
        }
		
		$sql = "update `{rating_job}` set ";
		foreach($data as $key => $value){
			$sql1[] = "`$key` = '$value'";
		}
        return $mysql->db_query($sql.join(",",$sql1)." $_sql");
	}
	
	function UpdateAssets($data = array()){
		global $mysql;
		$_sql = "where 1=1";
		if (IsExiest($data['id'])!=false) {
            $_sql .= " and id = '{$data['id']}'";
        }
		if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and user_id = '{$data['user_id']}'";
        }
		
		$sql = "update `{rating_assets}` set ";
		foreach($data as $key => $value){
			$sql1[] = "`$key` = '$value'";
		}
        return $mysql->db_query($sql.join(",",$sql1)." $_sql");
	}
	
	/**
	 * �޸ĸ�������
	 *
	 * @param array $data
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateInfo($data = array()){
		global $mysql;
		$_sql = "where 1=1";
		if (IsExiest($data['id'])!=false) {
            $_sql .= " and id = '{$data['id']}'";
        }
		if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and user_id = '{$data['user_id']}'";
        }
		
		$sql = "update `{rating_info}` set ";
		foreach($data as $key => $value){
			$sql1[] = "`$key` = '$value'";
		}
        return $mysql->db_query($sql.join(",",$sql1)." $_sql");
	}
	
	/**
	 * �޸Ĳ���״��
	 *
	 * @param array $data
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateFinance($data = array()){
		global $mysql;
		$_sql = "where 1=1";
		if (IsExiest($data['id'])!=false) {
            $_sql .= " and id = '{$data['id']}'";
        }
		if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and user_id = '{$data['user_id']}'";
        }
		
		$sql = "update `{rating_finance}` set ";
		foreach($data as $key => $value){
			$sql1[] = "`$key` = '$value'";
		}
        return $mysql->db_query($sql.join(",",$sql1)." $_sql");
	}
	
	/**
	 * ������ϵ��ʽ
	 *
	 * @param array $data
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateContact($data = array()){
		global $mysql;
		$_sql = "where 1=1";
		if (IsExiest($data['id'])!=false) {
            $_sql .= " and id = '{$data['id']}'";
        }
		if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and user_id = '{$data['user_id']}'";
        }
		
		$sql = "update `{rating_contact}` set ";
		foreach($data as $key => $value){
			$sql1[] = "`$key` = '$value'";
		}
        return $mysql->db_query($sql.join(",",$sql1)." $_sql");
	}
	
	/**
	 * �޸Ĺ�����λ
	 *
	 * @param array $data =array("name"=>"����","status"=>"״̬","degree"=>"ѧ��","in_year"=>"��ѧʱ��","professional"=>"רҵ");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateCompany($data = array()){
		global $mysql;
		$_sql = "where 1=1";
		if (IsExiest($data['id'])!=false) {
            $_sql .= " and id = '{$data['id']}'";
        }
		if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and user_id = '{$data['user_id']}'";
        }
		
		$sql = "update `{rating_company}` set ";
		foreach($data as $key => $value){
			$sql1[] = "`$key` = '$value'";
		}
        return $mysql->db_query($sql.join(",",$sql1)." $_sql");
	}
	
	/**
	 * 7,ɾ��ѧ��
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function DelJob($data = array()){
		global $mysql;
		
		if (!IsExiest($data['id'])) return "rating_job_id_empty";
		
		$sql = "delete from `{rating_job}`  where id='{$data['id']}'";
    	$mysql -> db_query($sql);
		
		return $data['id'];
	}
	
	/**
	 * ɾ����������
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function DelInfo($data = array()){
		global $mysql;
		
		if (!IsExiest($data['id'])) return "rating_info_id_empty";
		
		$sql = "delete from `{rating_info}`  where id='{$data['id']}'";
    	$mysql -> db_query($sql);
		
		return $data['id'];
	}
	/**
	 * ɾ����������
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function DelAssets($data = array()){
		global $mysql;
		
		if (!IsExiest($data['id'])) return "rating_assets_id_empty";
		
		$sql = "delete from `{rating_assets}`  where id='{$data['id']}'";
    	$mysql -> db_query($sql);
		
		return $data['id'];
	}
	
		/**
	 * ɾ������״��
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function DelFinance($data = array()){
		global $mysql;
		
		if (!IsExiest($data['id'])) return "rating_finance_id_empty";
		
		$sql = "delete from `{rating_finance}`  where id='{$data['id']}'";
    	$mysql -> db_query($sql);
		
		return $data['id'];
	}
	
	
	/**
	 * ɾ��������λ����
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function DelCompany($data = array()){
		global $mysql;
		
		if (!IsExiest($data['id'])) return "rating_company_id_empty";
		
		$sql = "delete from `{rating_company}`  where id='{$data['id']}'";
    	$mysql -> db_query($sql);
		
		return $data['id'];
	}
	
	/**
	 * ɾ����ϵ��ʽ
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function DelContact($data = array()){
		global $mysql;
		
		if (!IsExiest($data['id'])) return "rating_contact_id_empty";
		
		$sql = "delete from `{rating_contact}`  where id='{$data['id']}'";
    	$mysql -> db_query($sql);
		
		return $data['id'];
	}
	
	/**
	 * 5,���ѧ��
	 *
	 * @param Array $data = array("id"=>"");
	 * @return id
	 */
	 function CheckJobOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "rating_job_id_empty";
		$sql = "select p1.*,p2.username from `{rating_job}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "rating_job_empty";
		$sql = "update `{rating_job}` set verify_userid='{$data['verify_userid']}',verify_remark='{$data['verify_remark']}', verify_time='".time()."',status='{$data['status']}' where id='{$data['id']}'";
		$mysql->db_query($sql);
		
		//������˼�¼
		$_data["user_id"] = $result["user_id"];
		$_data["result"] = $data["status"];
		$_data["code"] = "rating";
		$_data["type"] = "job";
		$_data["article_id"] = $data["id"];
		$_data["verify_userid"] = $data["verify_userid"];
		$_data["remark"] = $data["verify_remark"];
		usersClass::AddExamine($_data);
		return $data['id'];
	}
	
	/**
	 * ����ʲ�״��
	 *
	 * @param Array $data = array("id"=>"");
	 * @return id
	 */
	 function CheckAssetsOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "rating_assets_id_empty";
		$sql = "select p1.*,p2.username from `{rating_assets}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "rating_assets_empty";
		$sql = "update `{rating_assets}` set verify_userid='{$data['verify_userid']}',verify_remark='{$data['verify_remark']}', verify_time='".time()."',status='{$data['status']}' where id='{$data['id']}'";
		$mysql->db_query($sql);
		
		//������˼�¼
		$_data["user_id"] = $result["user_id"];
		$_data["result"] = $data["status"];
		$_data["code"] = "rating";
		$_data["type"] = "assets";
		$_data["article_id"] = $data["id"];
		$_data["verify_userid"] = $data["verify_userid"];
		$_data["remark"] = $data["verify_remark"];
		usersClass::AddExamine($_data);
		return $data['id'];
	}
	
		/**
	 * ��˲���״��
	 *
	 * @param Array $data = array("id"=>"");
	 * @return id
	 */
	 function CheckFinanceOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "rating_finance_id_empty";
		$sql = "select p1.*,p2.username from `{rating_finance}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "rating_finance_empty";
		$sql = "update `{rating_finance}` set verify_userid='{$data['verify_userid']}',verify_remark='{$data['verify_remark']}', verify_time='".time()."',status='{$data['status']}' where id='{$data['id']}'";
		$mysql->db_query($sql);
		
		//������˼�¼
		$_data["user_id"] = $result["user_id"];
		$_data["result"] = $data["status"];
		$_data["code"] = "rating";
		$_data["type"] = "finance";
		$_data["article_id"] = $data["id"];
		$_data["verify_userid"] = $data["verify_userid"];
		$_data["remark"] = $data["verify_remark"];
		usersClass::AddExamine($_data);
		return $data['id'];
	}
	
	/**
	 * ��˸�������
	 *
	 * @param Array $data = array("id"=>"");
	 * @return id
	 */
	 function CheckInfoOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "rating_info_id_empty";
		$sql = "select p1.*,p2.username from `{rating_info}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "rating_info_empty";
		$sql = "update `{rating_info}` set verify_userid='{$data['verify_userid']}',verify_remark='{$data['verify_remark']}', verify_time='".time()."',status='{$data['status']}' where id='{$data['id']}'";
		$mysql->db_query($sql);
		
		//������˼�¼
		$_data["user_id"] = $result["user_id"];
		$_data["result"] = $data["status"];
		$_data["code"] = "rating";
		$_data["type"] = "info";
		$_data["article_id"] = $data["id"];
		$_data["verify_userid"] = $data["verify_userid"];
		$_data["remark"] = $data["verify_remark"];
		usersClass::AddExamine($_data);
		return $data['id'];
	}
	
	/**
	 * 5,��˹�����λ����
	 *
	 * @param Array $data = array("id"=>"");
	 * @return id
	 */
	 function CheckCompanyOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "rating_company_id_empty";
		$sql = "select p1.*,p2.username from `{rating_company}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "rating_company_empty";
		$sql = "update `{rating_company}` set verify_userid='{$data['verify_userid']}',verify_remark='{$data['verify_remark']}', verify_time='".time()."',status='{$data['status']}' where id='{$data['id']}'";
		$mysql->db_query($sql);
		
		//������˼�¼
		$_data["user_id"] = $result["user_id"];
		$_data["result"] = $data["status"];
		$_data["code"] = "rating";
		$_data["type"] = "company";
		$_data["article_id"] = $data["id"];
		$_data["verify_userid"] = $data["verify_userid"];
		$_data["remark"] = $data["verify_remark"];
		usersClass::AddExamine($_data);
		return $data['id'];
	}
	
	/**
	 * ��ò˵��б�
	 *
	 * @return Array
	 */
	function GetJobList($data = array()){
		global $mysql;
		
		
		$_sql = " where 1=1 ";
		//�ж����������Ƿ����
        if (IsExiest($data['nid'])!=false) {
            $_sql .= " and p1.nid ='{$data['nid']}'";
        }
		
		if (IsExiest($data['name'])!=false) {
            $_sql .= " and p1.name like '%{$data['name']}%'";
        }
		
		$_select = " p1.*,p2.username ";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{rating_job}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id SQL ORDER ";
		
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
		$_limit = " limit ".($epage * ($page - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
	}
	/****
		�ʲ�״���б�
	****/
	function GetAssetsList($data = array()){
		global $mysql;
		
		
		$_sql = " where 1=1 ";
		//�ж����������Ƿ����
        if (IsExiest($data['nid'])!=false) {
            $_sql .= " and p1.nid ='{$data['nid']}'";
        }
		
		if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p1.user_id ='{$data['user_id']}'";
        }
		
		if (IsExiest($data['name'])!=false) {
            $_sql .= " and p1.name like '%{$data['name']}%'";
        }
		
		$_select = " p1.*,p2.username ";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{rating_assets}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id SQL ORDER ";
		
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
		$_limit = " limit ".($epage * ($page - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
	}
	
	
	/****
		����״���б�
	****/
	function GetFinanceList($data = array()){
		global $mysql;
		
		
		$_sql = " where 1=1 ";
		//�ж����������Ƿ����
        if (IsExiest($data['nid'])!=false) {
            $_sql .= " and p1.nid ='{$data['nid']}'";
        }
		
		if (IsExiest($data['use_type'])!=false) {
            $_sql .= " and p1.use_type ='{$data['use_type']}'";
        }
		
		if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p1.user_id ={$data['user_id']}";
        }
		
		if (IsExiest($data['name'])!=false) {
            $_sql .= " and p1.name like '%{$data['name']}%'";
        }
		
		$_select = " p1.*,p2.username ";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{rating_finance}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id SQL ORDER ";
		
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
		$_limit = " limit ".($epage * ($page - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
	}
	
	
	function GetInfoList($data = array()){
		global $mysql;
		
		
		$_sql = " where 1=1 ";
		//�ж����������Ƿ����
        if (IsExiest($data['nid'])!=false) {
            $_sql .= " and p1.nid ='{$data['nid']}'";
        }
		
		if (IsExiest($data['name'])!=false) {
            $_sql .= " and p1.name like '%{$data['name']}%'";
        }
		
		$_select = " p1.*,p2.username ";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{rating_info}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id SQL ORDER ";
		
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
		$_limit = " limit ".($epage * ($page - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
	}
	
	/**
	 * 5,��ù����ĵ�����¼
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetJobOne($data = array()){
		global $mysql;
		$_sql = "where 1=1";
		if (IsExiest($data['id'])!=false) {
            $_sql .= " and p1.id = '{$data['id']}'";
        }
		if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p1.user_id = '{$data['user_id']}'";
        }
		$sql = "select p1.*,p2.username from `{rating_job}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id  $_sql";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "rating_job_empty";
		return $result;
	}
	
	/**
	 * ��ø������ϵ�����¼
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	
	 function GetInfoOne($data = array()){
		global $mysql;
		$_sql = "where 1=1";
		if (IsExiest($data['id'])!=false) {
            $_sql .= " and p1.id = '{$data['id']}'";
        }
		if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p1.user_id = '{$data['user_id']}'";
        }
		$sql = "select p1.*,p2.username from `{rating_info}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id $_sql";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "rating_info_empty";
		return $result;
	}
	
	/**
	 * ����ʲ�״��������¼
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetAssetsOne($data = array()){
		global $mysql;
		$_sql = "where 1=1";
		if (IsExiest($data['id'])!=false) {
            $_sql .= " and p1.id = '{$data['id']}'";
        }
		if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p1.user_id = '{$data['user_id']}'";
        }
		$sql = "select p1.*,p2.username from `{rating_assets}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id $_sql";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "rating_assets_empty";
		return $result;
	}
	
	/**
	 * ��ò˵��б�
	 *
	 * @return Array
	 */
	function GetCompanyList($data = array()){
		global $mysql;
		
		
		$_sql = " where 1=1 ";
		//�ж����������Ƿ����
        if (IsExiest($data['nid'])!=false) {
            $_sql .= " and p1.nid ='{$data['nid']}'";
        }
		
		if (IsExiest($data['name'])!=false) {
            $_sql .= " and p1.name like '%{$data['name']}%'";
        }
		
		$_select = " p1.*,p2.username ";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{rating_company}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id SQL ORDER ";
		
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
		$_limit = " limit ".($epage * ($page - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
	}
	
	/**
	 * 5,��ù�����λ�ĵ�����¼
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetCompanyOne($data = array()){
		global $mysql;
		$_sql = "where 1=1";
		if (IsExiest($data['id'])!=false) {
            $_sql .= " and p1.id = '{$data['id']}'";
        }
		if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p1.user_id = '{$data['user_id']}'";
        }
		$sql = "select p1.*,p2.username from `{rating_company}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id  $_sql";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "rating_company_empty";
		return $result;
	}
	
	/**
	 * ��ӷ�������
	 *
	 * @param array $data =array("name"=>"����","status"=>"״̬","degree"=>"ѧ��","in_year"=>"��ѧʱ��","professional"=>"רҵ");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function ACtionHouse($data = array()){
		global $mysql;
		
		
		//�ж��û������û�id�������һ��
		if (!IsExiest($data['username']) && !IsExiest($data['user_id'])) {
			return "rating_house_user_must_one";
		}
		
		//����û����ڣ��ж��û��Ƿ����
		if (IsExiest($data['username'])!=false){
			$sql = "select user_id from `{users}` where username ='{$data['username']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result==false) return "rating_house_username_not_exiest";
			$data['user_id'] = $result['user_id'];
			unset($data['username']);
		}
		
		//�ж��û�ѧ�������Ƿ����10��
		$sql = "select count(1) as num  from `{rating_houses}` where user_id='{$data['user_id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result['num']>0){
			$sql = "update `{rating_houses}` set ";
			foreach($data as $key => $value){
				$_sql[] = "`$key` = '$value'";
			}
			$mysql->db_query($sql.join(",",$_sql)." where user_id='{$data['user_id']}'");
			return $data['id'];
		}else{
			$sql = "insert into `{rating_house}` set ";
			foreach($data as $key => $value){
				$_sql[] = "`$key` = '$value'";
			}
			$mysql->db_query($sql.join(",",$_sql));
			return $mysql->db_insert_id();
		}
	}
	
	
	
	/**
	 * ���ѧ��
	 *
	 * @param Array $data = array("id"=>"");
	 * @return id
	 */
	 function CheckHouseOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "rating_house_id_empty";
		$sql = "select p1.*,p2.username from `{rating_houses}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "rating_job_empty";
		$sql = "update `{rating_houses}` set verify_userid='{$data['verify_userid']}',verify_remark='{$data['verify_remark']}', verify_time='".time()."',status='{$data['status']}' where id='{$data['id']}'";
		$mysql->db_query($sql);
		
		//������˼�¼
		$_data["user_id"] = $result["user_id"];
		$_data["result"] = $data["status"];
		$_data["code"] = "rating";
		$_data["type"] = "house";
		$_data["article_id"] = $data["id"];
		$_data["verify_userid"] = $data["verify_userid"];
		$_data["remark"] = $data["verify_remark"];
		usersClass::AddExamine($_data);
		return $data['id'];
	}
	
	/**
	 * �����ϵ��ʽ
	 *
	 * @param Array $data = array("id"=>"");
	 * @return id
	 */
	 function CheckContactOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "rating_contact_id_empty";
		$sql = "select p1.*,p2.username from `{rating_contact}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "rating_contact_empty";
		$sql = "update `{rating_contact}` set verify_userid='{$data['verify_userid']}',verify_remark='{$data['verify_remark']}', verify_time='".time()."',status='{$data['status']}' where id='{$data['id']}'";
		$mysql->db_query($sql);
		
		//������˼�¼
		$_data["user_id"] = $result["user_id"];
		$_data["result"] = $data["status"];
		$_data["code"] = "rating";
		$_data["type"] = "contact";
		$_data["article_id"] = $data["id"];
		$_data["verify_userid"] = $data["verify_userid"];
		$_data["remark"] = $data["verify_remark"];
		usersClass::AddExamine($_data);
		return $data['id'];
	}
	
	/**
	 * ��ò˵��б�
	 *
	 * @return Array
	 */
	function GetHouseList($data = array()){
		global $mysql;
		
		
		$_sql = " where 1=1 ";
		//�ж����������Ƿ����
        if (IsExiest($data['nid'])!=false) {
            $_sql .= " and p1.nid ='{$data['nid']}'";
        }
		
		if (IsExiest($data['name'])!=false) {
            $_sql .= " and p1.name like '%{$data['name']}%'";
        }
		
		$_select = " p1.*,p2.username ";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{rating_houses}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id SQL ORDER ";
		
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
		$_limit = " limit ".($epage * ($page - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
	}
	
	
	/**
	 * ��ò˵��б�
	 *
	 * @return Array
	 */
	function GetContactList($data = array()){
		global $mysql;
		
		
		$_sql = " where 1=1 ";
		//�ж����������Ƿ����
        if (IsExiest($data['nid'])!=false) {
            $_sql .= " and p1.nid ='{$data['nid']}'";
        }
		
		if (IsExiest($data['name'])!=false) {
            $_sql .= " and p1.name like '%{$data['name']}%'";
        }
		
		$_select = " p1.*,p2.username ";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{rating_contact}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id SQL ORDER ";
		
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
		$_limit = " limit ".($epage * ($page - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
	}
	
	/**
	 * �����ϵ��ʽ�ĵ�����¼
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetContactOne($data = array()){
		global $mysql;
		$_sql = "where 1=1";
		if (IsExiest($data['id'])!=false) {
            $_sql .= " and p1.id = '{$data['id']}'";
        }
		if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p1.user_id = '{$data['user_id']}'";
        }
		$sql = "select p1.*,p2.username from `{rating_contact}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id  $_sql";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) {
			$sql = "insert into `{rating_contact}` set user_id='{$data['user_id']}'";
			$mysql->db_query($sql);
			self::GetHouseOne($data);
		}
		return $result;
	}
	
	
	/**
	 * 5,��ù����ĵ�����¼
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetHouseOne($data = array()){
		global $mysql;
		$_sql = "where 1=1";
		if (IsExiest($data['id'])!=false) {
            $_sql .= " and p1.id = '{$data['id']}'";
        }
		if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p1.user_id = '{$data['user_id']}'";
        }
		$sql = "select p1.*,p2.username from `{rating_houses}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id where p1.user_id='{$data['user_id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) {
			$sql = "insert into `{rating_houses}` set user_id='{$data['user_id']}'";
			$mysql->db_query($sql);
			self::GetHouseOne($data);
		}
		return $result;
	}
	
	/**
	 * ��ò���״��������¼
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetFinanceOne($data = array()){
		global $mysql;
		$_sql = "where 1=1";
		if (IsExiest($data['id'])!=false) {
            $_sql .= " and p1.id = '{$data['id']}'";
        }
		if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p1.user_id = '{$data['user_id']}'";
        }
		if (IsExiest($data['use_type'])!=false) {
            $_sql .= " and p1.use_type = '{$data['use_type']}'";
        }
		if (IsExiest($data['status'])!=false) {
            $_sql .= " and p1.status = '{$data['status']}'";
        }
		$sql = "select p1.*,p2.username from `{rating_finance}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id $_sql";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) {
			$sql = "insert into `{rating_finance}` set user_id='{$data['user_id']}'";
			$mysql->db_query($sql);
			self::GetHouseOne($data);
		}
		return $result;
	}
	
	
}
?>