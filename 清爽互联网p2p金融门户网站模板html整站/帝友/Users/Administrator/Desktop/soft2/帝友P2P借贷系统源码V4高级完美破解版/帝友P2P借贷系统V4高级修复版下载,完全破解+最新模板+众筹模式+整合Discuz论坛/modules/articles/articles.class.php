<?
/******************************
 * $File: article.class.php
 * $Description: �������ݿ⴦���ļ�
******************************/


require_once("articles.model.php");

$articles_flag = array("index"=>"��ҳ","ding"=>"�ö�","tuijian"=>"�Ƽ�");

class articlesClass{
	

	/**
	 * 1,��������б�
	 *
	 * @return Array
	 */
	 /**
	 * $data = array("user_id"=>"�û�id","username"=>"�û���");
	 * @return Array
	 */
	function GetList($data = array()){
		global $mysql;
		
		$_sql = "where 1=1 ";	
		
		//�ж��û�id
		if (IsExiest($data['user_id']) != false){
			$_sql .= " and p1.user_id = {$data['user_id']}";
		}
		
		//�ѵ��û���
		if (IsExiest($data['username']) != false){
			$_sql .= " and p2.username like '%{$data['username']}%'";
		}
		
		//�ѵ��û���
		if (IsExiest($data['name']) != false){
			$_sql .= " and p1.`name` like '%".urldecode($data['name'])."%'";
		}
		
		//�ж��û�id
		if (IsExiest($data['public']) != false){
			$_sql .= " and p1.public = {$data['public']}";
		}
		
		//�ж��û�id
		if (IsExiest($data['type_pid']) != false){
			$_asql = "select id from `{articles_type}` where pid='{$data['type_pid']}'";
			$result = $mysql->db_fetch_arrays($_asql);
			if ($result!=false){
				$_sql .= " and (  FIND_IN_SET('{$data['type_pid']}',p1.type_id) ";
				foreach ($result as  $key => $value){
					$_sql .= "  or FIND_IN_SET('{$value['id']}',p1.type_id) ";
				}
				$_sql .= " )";
			}
		}
		
		//�ж��û�id
		if (IsExiest($data['type_nid']) != false){
			$_asql = "select id from `{articles_type}` where nid='{$data['type_nid']}'";
			$result = $mysql->db_fetch_array($_asql);
			if ($result!=false){
				$_sql .= "  and FIND_IN_SET('{$result['id']}',p1.type_id) ";
				
			}
		}
		
		//�ѵ��û���
		if (IsExiest($data['type_id']) != false){
			$_sql .= " and FIND_IN_SET('{$data['type_id']}',p1.type_id)";
		}
		//�ѵ��û���
		if (IsExiest($data['site_id']) != false){
			$sql = "select `value`,nid from `{site}` where id='{$data['site_id']}'";
			$result = $mysql->db_fetch_array($sql);
			$site_nid = $result['nid'];
			if ($result!=false){
				$_sql .= " and FIND_IN_SET('{$result['value']}',p1.type_id)";
			}
		}elseif (IsExiest($data['site_nid']) != false){
			$sql = "select `value`,nid from `{site}` where nid='{$data['site_nid']}'";
			$result = $mysql->db_fetch_array($sql);
			$site_nid = $result['nid'];
			if ($result!=false){
				$_sql .= " and FIND_IN_SET('{$result['value']}',p1.type_id)";
			}
		}
		
		$_order = " order by p1.order desc,p1.id desc ";
		if (IsExiest($data['order']) != false){
			if ($data['order'] == "id_desc"){
				$_order = " order by p1.id desc ";
			}elseif ($data['order'] == "id_asc"){
				$_order = " order by p1.id asc ";
			}elseif ($data['order'] == "order_desc"){
				$_order = " order by p1.`order` desc ,p1.id desc";
			}elseif ($data['order'] == "order_asc"){
				$_order = " order by p1.`order` asc,p1.id desc";
			}
		}
		
		$_select = " p1.*,p0.name as type_name,p2.username,p3.fileurl";
		$sql = "select SELECT from `{articles}` as p1 
				  left join {articles_type} as p0 on p1.type_id=p0.id
				  left join {users} as p2 on p1.user_id=p2.user_id
				 left join {users_upfiles} as p3 on p1.litpic=p3.id
				 SQL ORDER LIMIT
				";
		
		//�Ƿ���ʾȫ������Ϣ
		if (IsExiest($data['limit'])!=false){
			if ($data['limit'] != "all"){ $_limit = "  limit ".$data['limit']; }
			$result =  $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $sql));
			if ($site_nid!=""){
				foreach ($result as $key =>$value){
					$result[$key]["site_nid"] = $site_nid;
				}
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
		$_limit = " limit ".($data['epage'] * ($data['page'] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'site_nid' => $site_nid,'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		
		return $result;
	}
	
	
	/**
	 * 2�������̳�б�
	 * $data = array("user_id"=>"�û�id","username"=>"�û���");
	 * @return Array
	 */
	 function GetbbsList($data = array()){
	global $mysql;
		
		$_sql = "where 1=1 and displayorder != 1 ";	
	
	   if (IsExiest($data['type_id']) != false){
			$_sql .= " and fid ='{$data['type_id']}' ";
		}
		 if (IsExiest($data['flager']) != false){
			$_sql .= " and digest>0 ";
		}
		$_select = " p1.*";
		$sql = "select SELECT from pre_forum_thread as p1  SQL ORDER LIMIT ";
		
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
	 * 2�������������б�
	 * $data = array("user_id"=>"�û�id","username"=>"�û���");
	 * @return Array
	 */
	function GetTypeList($data = array()){
		global $mysql;
		
		$_sql = "where 1=1 ";	
		//�ж��û�id
		if (IsExiest($data['pid']) != false){
			$_sql .= " and p1.pid = {$data['pid']}";
		}
		if (IsExiest($data['type_id']) != false){
			$_sql .= " and p1.id in({$data['type_id']})";
		}
		$_order = " order by p1.order desc ,p1.id asc ";
		
		
		$_select = " p1.*";
		$sql = "select SELECT from `{articles_type}` as p1  SQL ORDER LIMIT ";
		
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
	 * 3,�����������
	 *
	 * @param Array $data = array("name"=>"����","nid"=>"����","contents"=>"����","order"=>"����")
	 * @return Boolen
	 */
	function AddType($data = array()){
		global $mysql;
		if (!IsExiest($data['name'])) return "articls_type_name_empty";
		if (!IsExiest($data['nid'])) return "articls_type_nid_empty";
		$sql = "select 1 from `{articles_type}` where nid='{$data['nid']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "articles_type_nid_exiest";
		$sql = "insert into `{articles_type}` set ";
		$_sql = array();
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
    	$id = $mysql->db_insert_id();
		
		return $id;
	}
	
	
	/**
	 * 4,���ͷ���˵�
	 *
	 * @param Array $data = array("name"=>"����","nid"=>"����","contents"=>"����","order"=>"����")
	 * @return Boolen
	 */
	function GetTypeMenu($data = array()){
		$result = self::GetTypeList(array("limit"=>"all"));
		$_result = array();
		$var = "&nbsp;&nbsp;&nbsp;&nbsp;";
		$type_var="��";
		
		foreach ($result as  $key => $value){
			$site_result[$value['id']] = $value;
			$_res_pid[$value['pid']][] = $value['id'];
		}
		if (IsExiest($data['lgnore'])!=false){
			unset($_res_pid[$data['lgnore']]);
		}
		if (count($_res_pid)>0){
			foreach ($_res_pid[0] as $key => $value){
				$_result[$value] = $site_result[$value];
				$_result[$value]['_name'] = $_result[$value]['name'];
				$_result[$value]['type_name'] = $_result[$value]['name'];
				
				$_site_data['site_result'] = $site_result;
				$_site_data['result'] = $_res_pid;
				$_site_data['_result'] = $_res_pid[$value];
				$_site_data['var'] = $var;
				$_site_data['type_var'] = $type_var;
				$_result = $_result +  self::_GetTypeMenu($_site_data);
			}
		}
		if (IsExiest($data['lgnore'])!=false){
			unset($_result[$data['lgnore']]);
		}
		return $_result;
	}
	function _GetTypeMenu($_site_data){
		$var = "&nbsp;&nbsp;&nbsp;&nbsp;";
		$type_var="��";
		$_var = $_site_data["var"];
		$_type_var = $_site_data["type_var"];
		$_result = array();
		if (isset($_site_data['_result']) && $_site_data['_result']!=""){
			foreach ($_site_data['_result'] as $key => $value){
				$_result[$value] = $_site_data["site_result"][$value];
				$_result[$value]['_name'] = $_var.$_result[$value]['name'];
				$_result[$value]['type_name'] = $_type_var.$_result[$value]['name'];
					
				$_site_data['_result'] = $_site_data["result"][$value];
				$_site_data['var'] = $_site_data['var'].$var;
				$_site_data['type_var'] = $_site_data['type_var'].$type_var;
				$_result = $_result +  self::_GetTypeMenu($_site_data);
			}
		}
		return $_result;
	}
	
	/**
	 * 5,��õ�������
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	public static function GetTypeOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "articls_type_id_empty";
		$sql = "select * from `{articles_type}` where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "article_type_empty";
		return $result;
	}
	
	
	/**
	 * 6,�޸�����
	 *
	 * @param Array $data = array("id"=>"ID","name"=>"����","nid"=>"����","contents"=>"����","order"=>"����")
	 * @return Boolen
	 */
	function UpdateType($data = array()){
		global $mysql;
		if (!IsExiest($data['name'])) return "articls_type_name_empty";
		if (!IsExiest($data['nid'])) return "articls_type_nid_empty";
		$sql = "select 1 from `{articles_type}` where nid='{$data['nid']}' and id!='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "articles_type_nid_exiest";
		$sql = "update `{articles_type}` set ";
		$_sql = array();
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql)." where id='{$data['id']}'");
    	
		
		return $data['id'];
	}
	
	/**
	 * 7,ɾ������
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function DelType($data = array()){
		global $mysql;
		
		//�ж��Ƿ����
		$sql = "select 1 from `{articles_type}` where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "articles_type_not_exiest";
		
		//�ж��Ƿ�������
		$sql = "select 1 from `{articles_type}` where pid='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "articles_type_del_pid_exiest";
		
		
		//�ж��Ƿ����
		$sql = "select 1 from `{articles}` where FIND_IN_SET('{$data['id']}',type_id)";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "articles_type_del_article_exiest";
		
		$sql = "delete from `{articles_type}`  where id='{$data['id']}'";
    	$mysql -> db_query($sql);
		
		return $data['id'];
	}
	
	/**
	 * 8,�������
	 *
	 * @param Array $result
	 * @return Boolen
	 */
	function Add($data){
		global $mysql;
		
		if (IsExiest($data['img_error'])) return $data['img_error'];
        if (!IsExiest($data['name'])) return "articles_name_empty";
        if (!IsExiest($data['type_id'])) return "articles_type_id_empty";
		if ($data['public']==3 && !IsExiest($data['password'])){
			return "articles_password_empty";
		}
		$sql = "insert into `{articles}` set `addtime` = '".time()."',`addip` = '".ip_address()."',update_time='".time()."',update_ip='".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
        $mysql->db_query($sql);
    	$id = $mysql->db_insert_id();
		
		return $id;
	}
	
	/**
	 * 9,�޸�����
	 *
	 * @param Array $result
	 * @return Boolen
	 */
	function Update($data){
		global $mysql;
		if (!IsExiest($data['id'])) return "articles_id_empty";
        if (!IsExiest($data['name'])) return "articles_name_empty";
        if (!IsExiest($data['type_id'])) return "articles_type_id_empty";
		if ($data['public']==3 && !IsExiest($data['password'])){
			return "articles_password_empty";
		}
		$sql = "select user_id from `{articles}` where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		$user_id = $result['user_id'];
		if ($data['user_id']!="" && $data['user_id']!=$user_id){
			return "articles_error";
		}
		$sql = "update `{articles}` set update_time='".time()."',update_ip='".ip_address()."',";
		$_sql = "";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql)." where id='{$data['id']}'");
		
		
		return $data['id'];
	}
	/**
	 * 9,�޸�����
	 *
	 * @param Array $data = array("type"=>"","id"=>"");
	 * @return Boolen
	 */
	function Action($data){
		global $mysql;
		if (count($data['id'])<=0) return 1;
		if ($data['type']=='order'){
			foreach ($data['id'] as $key => $value){
				$sql = "update `{articles}` set `order`='{$data['order'][$key]}' where id='{$value}'";
				$mysql->db_query($sql);
			}
		}elseif ($data['type']=='del'){
			if (count($data['aid'])>0) {
				foreach ($data['aid'] as $key => $value){
					$sql = "delete from `{articles}` where id='{$value}'";
					$mysql->db_query($sql);
				}
			}
		}
		return 1;
	
	}
	/**
	 * 10,�鿴����
	 *
	 * @param Array $data
	 * @return Array
	 */
	public static function GetOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "articles_id_empty";
		if ($data['hits_status']==1){
			$sql ="update `{articles}` set hits =hits+1 where id={$data['id']}";
			$mysql->db_query($sql);
		}
		$_sql = " where p1.id={$data['id']}";
		if ($data['user_id']!=""){
			$_sql .= " and p1.user_id='{$data['user_id']}'";
		}
		$sql = "select p1.*,p2.username,p3.fileurl from `{articles}` as p1 
				left join `{users}` as p2 on p2.user_id=p1.user_id 
				left join `{users_upfiles}` as p3 on p3.id=p1.litpic 
				{$_sql}";
		$result = $mysql->db_fetch_array($sql);
		
		if ($result==false) return "articles_not_exiest";
		return $result;
	}
	
	
	
	/**
	 * 11��ɾ������
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	public static function Delete($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "articles_id_empty";
		$id = $data['id'];
		if (!is_array($id)){
			$id = array($id);
		}
		$sql = "delete from `{articles}`  where id in (".join(",",$id).")";
		$mysql->db_query($sql);
		
		//ɾ�����ּ�¼
		$credit_log['code'] = "articles";
		$credit_log['type'] = "article";
		$credit_log['article_id'] = $data['id'];
		creditClass::DeleteCreditLog($credit_log);
		return  $data['id'];
	}
	
	
		
	/**
	 * 11���������
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	public static function Verify($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "articles_id_empty";
		$id = $data['id'];
		$sql = "select user_id,name from `{articles}` where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return  "";
		$user_id =$result['user_id'];
		if ($result['status']==1) return "articles_verify_yes";
		$sql = "update `{articles}` set status='{$data['status']}',verify_time='".time()."',verify_remark='{$data['verify_remark']}',verify_userid='{$data['verify_userid']}'  where id={$id}";
		$mysql->db_query($sql);
		
		if($data['status']==1){
			$credit_log['user_id'] = $user_id;
			$credit_log['nid'] = "articles_add";
			$credit_log['code'] = "articles";
			$credit_log['type'] = "add";
			$credit_log['addtime'] = time();
			$credit_log['article_id'] = $data['id'];
			$credit_log['remark'] =  "����[{$result['name']}]�ɹ�";;
			creditClass::ActionCreditLog($credit_log);
			
			//�����û�������¼
			$user_log["user_id"] = 	$user_id;
			$user_log["code"] = "articles";
			$user_log["type"] = "article";
			$user_log["operating"] = "add";
			$user_log["article_id"] = $data['id'];
			$user_log["result"] = 1;
			$user_log["content"] =  "������[{$result['name']}]";;
			usersClass::AddUsersLog($user_log);	
		}
		return  $data['id'];
	}
	
		/**
	 * 10,�鿴����
	 *
	 * @param Array $data
	 * @return Array
	 */
	public static function GetArticlesSide($data = array()){
		global $mysql;
		if ($data['site_nid']!=""){
			$sql = "select value from `{site}` where nid='{$data['site_nid']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result==false) return "";
			$data['type_id'] = $result['value'];
		}
		$_result = array("nid"=>$data['site_nid']);
		if ($data['type_id']!=""){
			$sql = "select id,name  from`{articles}` where type_id='{$data['type_id']}' and id>{$data['id']} and status='{$data['status']}' order by id asc";
			$result = $mysql->db_fetch_array($sql);
			$_result["down_id"] = $result['id'];
			$_result["down_name"] = $result['name'];
			$sql = "select id,name  from`{articles}` where type_id='{$data['type_id']}' and status='{$data['status']}' and id<{$data['id']} order by id desc";
			$result = $mysql->db_fetch_array($sql);
			$_result["up_id"] = $result['id'];
			$_result["up_name"] = $result['name'];
		
		}
		return $_result;
	}
	
	/**
	 * 12,���ҳ��
	 *
	 * @param Array $result
	 * @return Boolen
	 */
	function AddPage($data){
		global $mysql;
		
        if (!IsExiest($data['name'])) return "articles_page_name_empty";
        if (!IsExiest($data['nid'])) return "articles_page_nid_empty";
		if ($data['public']==3 && !IsExiest($data['password'])){
			return "articles_page_password_empty";
		}
		$sql = "select 1 from `{articles_pages}` where nid='{$data['nid']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "articles_page_nid_exiest";
		
		$sql = "insert into `{articles_pages}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
        $mysql->db_query($sql);
    	$id = $mysql->db_insert_id();
		return $id;
	}
	
	/**
	 * 13,�޸�ҳ��
	 *
	 * @param Array $result
	 * @return Boolen
	 */
	function UpdatePage($data){
		global $mysql;
		if (!IsExiest($data['id'])) return "articles_page_id_empty";
        if (!IsExiest($data['name'])) return "articles_page_name_empty";
		if ($data['public']==3 && !IsExiest($data['password'])){
			return "articles_page_password_empty";
		}
		
		$sql = "select 1 from `{articles_pages}` where nid='{$data['nid']}' and id!='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "articles_page_nid_exiest";
		
		$sql = "update `{articles_pages}` set ";
		$_sql = "";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql)." where id='{$data['id']}'");
    	
		return $data['id'];
	}
	
	/**
	 * 14,�鿴ҳ��
	 *
	 * @param Array $data
	 * @return Array
	 */
	public static function GetPageOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "articles_page_id_empty";
		$sql = "select p1.*,p2.username from `{articles_pages}` as p1 
				left join `{users}` as p2 on p2.user_id=p1.user_id 
				where p1.id={$data['id']}";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "articles_page_not_exiest";
		return $result;
	}
	
	/**
	 * 15����ȡҳ���б�
	 *
	 * $data = array("user_id"=>"�û�id","username"=>"�û���");
	 * @return Array
	 */
	function GetPageList($data = array()){
		global $mysql;
		
		$_sql = "where 1=1 ";	
		
		$_order = " order by p1.order desc ,p1.id asc ";
		
		
		$_select = " p1.*,p2.username";
		$sql = "select SELECT from `{articles_pages}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id  SQL ORDER LIMIT ";
		
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
	 * 16,ҳ��˵�
	 *
	 * @param Array $data = array("name"=>"����","nid"=>"����","contents"=>"����","order"=>"����")
	 * @return Boolen
	 */
	function GetPageMenu($data = array()){
		global $mysql;
		$_select = " p1.*,p2.username";
		$sql = "select $_select from `{articles_pages}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id";
		$result = $mysql->db_fetch_arrays($sql);
		$var = "&nbsp;&nbsp;&nbsp;&nbsp;";
		$type_var="��";
		
		foreach ($result as  $key => $value){
			$_res[$value['id']]['pid'] = $value['pid'];
			if ($value['pid']==0){
				$_result[$value['id']] = $value;
				$_result[$value['id']]['_name'] = $value['name'];
				$_result[$value['id']]['type_name'] = $value['name'];
				$_result[$value['id']]['var'] = "";
				$_result1 = self::_GetPageMenu($result,$value['id'],$var,$type_var);
				$_result = array_merge($_result,$_result1);
			}
		}
		return $_result;
	}
	function _GetPageMenu($result,$pid,$var,$type_var){
		$_result = array();
		$_var = "&nbsp;&nbsp;&nbsp;&nbsp;";
		$_type_var="��";
		foreach ($result as  $key => $value){
			if ($value['pid'] == $pid){
				if ($opid==""){
					$_result[$value['id']] = $value;
					$_result[$value['id']]['_name'] = $var.$value['name'];
					$_result[$value['id']]['type_name'] = $type_var.$value['name'];
					$_result[$value['id']]['var'] = $var.$_var;	
					$_result1 = self::_GetPageMenu($result,$value['id'],$var.$_var,$type_var.$_type_var);
					$_result = array_merge($_result,$_result1);
				}else{
					$_result[$value['id']] = $value;
					$_result[$value['id']]['_name'] = $var.$value['name'];
					$_result[$value['id']]['type_name'] = $type_var.$value['name'];
					$_result[$value['id']]['var'] = $var.$_var;	
					$_result1 = self::_GetPageMenu($result,$value['id'],$var.$_var,$type_var.$_type_var);
					$_result = array_merge($_result,$_result1);
				}
			}
		}
		return $_result;
	}
	
	
	
	/**
	 * 17,ɾ��ҳ��
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function DeletePage($data = array()){
		global $mysql;
		
		//�ж��Ƿ����
		$sql = "select 1 from `{articles_pages}` where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "articles_page_not_exiest";
		
		//�ж��Ƿ�������
		$sql = "select 1 from `{articles_pages}` where pid='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "articles_page_del_pid_exiest";
		
		$sql = "delete from `{articles_pages}`  where id='{$data['id']}'";
    	$mysql -> db_query($sql);
		
		return $data['id'];
	}
	
}
?>