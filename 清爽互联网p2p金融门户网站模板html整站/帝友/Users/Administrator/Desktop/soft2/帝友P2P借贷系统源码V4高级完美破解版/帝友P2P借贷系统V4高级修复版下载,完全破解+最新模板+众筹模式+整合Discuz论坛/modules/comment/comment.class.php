<?php
/**
 * ����
 *
 * @author TissotCai
 */
class commentClass {


    const NOT_EXISTS_USER   = '�û�������';
    const NOT_EXISTS_MODULE = 'ģ�鲻����';
    
    /**
     * ��������
     * @param $user_id ��ԱID
     * @param $module_code ģ��
     * @param $article_id ����ID
     * @param $comment ����
     */
    public static function AddComment($data = array()) {
        global $mysql, $_G;
        
		$sql = "insert into `{comment}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
        $mysql->db_query($sql);
		 return $mysql->db_insert_id();
    }
	
	function AddLy($data = array()) {
        global $mysql, $_G;
        
		$sql = "insert into `{comment}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
        $mysql->db_query($sql);
		return $mysql->db_insert_id();
    }

    /**
     * ��ȡ�����б�
     * @param $module ģ��
     * @param $article_id ����ID
     * @param $statu ״̬
     * @param $page ҳ��
     * @param $page_size ÿҳ��¼��
     */
    public static function GetList ($data = array()) {
        global $mysql;
		$page = empty($data['page'])?1:$data['page'];
		$epage = empty($data['epage'])?10:$data['epage'];
		$_sql = "where 1=1 ";//ֱ�Ӷ����µ�����
		
		//�ж�ģ��
        if(IsExiest($data['code'])!=""){
			$_sql .= " and  c.code = '{$data['code']}' "; 
		}
		
		//�ж�����id
        if(IsExiest($data['article_id'])!=""){
			$_sql .= " and  c.article_id in ('{$data['article_id']}') "; 
		}
		
		//�ж�����״̬
        if(IsExiest($data['status'])!=""){
			$_sql .= " and  c.status = '{$data['status']}' "; 
		}
		//�ж�������
        if(IsExiest($data['user_id'])!=""){
			$_sql .= " and  c.user_id = '{$data['user_id']}' "; 
		}
		
		if(IsExiest($data['reply_userid'])!=""){
			$_sql .= " and  c.user_id = '{$data['user_id']}' "; 
		}
		
		$_select = "c.*, u.username";
		 $sql = "select SELECT from {comment} as c
                    left join {users} as u on c.user_id = u.user_id {$_sql} ";
		$__sql = "";
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
	 * �鿴
	 *
	 * @param Array $data
	 * @return Array
	 */
	public static function GetOne($data = array()){
		global $mysql;
		$_sql = " where 1=1 ";
		
        if(IsExiest($data['id'])!=""){
			$_sql .= " and  c.id = '{$data['id']}' "; 
		}
		if(IsExiest($data['code'])!=""){
			$_sql .= " and  c.code = '{$data['code']}' "; 
		}
        if(IsExiest($data['article_id'])!=""){
			$_sql .= " and  c.article_id in ('{$data['article_id']}') "; 
		}
        if(IsExiest($data['status'])!=""){
			$_sql .= " and  c.status = '{$data['status']}' "; 
		}
        if(IsExiest($data['user_id'])!=""){
			$_sql .= " and  c.user_id = '{$data['user_id']}' "; 
		}
		
        if(IsExiest($data['article_userid'])!=""){
			$_sql .= " and  c.article_userid = '{$data['article_userid']}' "; 
		}
		
		$sql = "select m.name as module_name,u.username ,c.* from {comment} c 
				left join {user} u on c.user_id = u.user_id 
				left join {module} m on c.code = m.code 
				{$_sql}";
		$result =  $mysql->db_fetch_array($sql);
				if ($result!=false){
			$result["comment"] =  preg_replace('[\[\:([0-9]+)*\:\]]',"<img src=/data/images/face/$1.gif>", $result["comment"]);
		}
		return $result;
	}
	
	
	
	/**
	 * �޸�
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function Update($data = array()){
		global $mysql;
		$id = $data['id'];
        if ($data['id'] == "") {
            return self::ERROR;
        }
		
		$_sql = "";
		$sql = "update `{comment}` set ";
		foreach($data as $key => $value){
			$_sql[] .= "`$key` = '$value'";
		}
		$sql .= join(",",$_sql)." where id = '$id'";
        return $mysql->db_query($sql);
	}
	
	/**
	 * ɾ��
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	public static function Delete($data = array()){
		global $mysql;
		$id = $data['id'];
		if (!is_array($id)){
			$id = array($id);
		}
		$sql = "delete from {comment}  where id in (".join(",",$id).")";
		return $mysql->db_query($sql);
	}
	
	
    /**
     * ɾ������
     * @param $id ����ID
     */
    public static function DeleteComment ($id) {
        global $mysql;

        $mysql->db_query("delete from {comment} where id={$id}");

        return true;
    }

    /**
     * �޸�����״̬
     * @param $id ����ID
     */
    public static function ChangeCommentStatus ($id) {
        global $mysql;

        $mysql->db_query("update {comment} set status=1-status where id={$id}");

        return true;
    }

	/**
	 * ��ȡ���۵�������
	 * @param $id ����ID
	 */
	public static function GetSubComment ($id) {
		global $mysql;

		$sql = "select c.*, u.username,u.realname,u.litpic, m.name as module_name from {comment} c
                    left join {user} u on c.user_id = u.user_id
                    left join {module} m on c.module_code=m.code where c.pid={$id}";
		
		$rows = $mysql->db_fetch_arrays($sql);
		foreach ($rows as $key => $row) {
			$row['sub'] = self::GetSubComment($row['id']);
			$rows[$key] = $row;
		}

		return $rows;
	}
	
	 public static function ReplyComment ($data = array()) {
        global $mysql, $_G;
		$_sql = "";
		
		
		$sql = "update `{comment}` set reply_status=1,`reply_time` = '".time()."',`reply_userid` = '{$data['reply_userid']}',`reply_remark` = '{$data['reply_remark']}' where article_userid = {$data['article_userid']} and id={$data['id']}";
        return $mysql->db_query($sql);
    }
	
	function AddRe($data = array()){
		global $mysql;
		$sql = "insert into `{comment}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		$result=$mysql->db_query($sql);
		return $result;
	}
	
		// ���ӻظ�
	function AddReplay($data = array()){
		global $mysql;
		$sql = "insert into `{comment}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		$result=$mysql->db_query($sql);
		return $result;
	}
}
?>
