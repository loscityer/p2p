<?php
/******************************
 * $File: group.class.php
 * $Description: Ȧ�ӹ���
 * $Author: hummer 
 * $Time:2011-08-09
 * $Update:None 
 * $UpdateDate:None 
 * Copyright(c) 2013 by jichu.com. All rights reserved
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

require_once("group.model.php");

class groupClass {
	
	/**
	 * 1,Ȧ������
	 *
	 * @param array $data =array("name"=>"����","status"=>"״̬");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function AddGroupType($data = array()){
		global $mysql;
		 //�ж������Ƿ����
        if (!IsExiest($data['name'])) {
            return "group_type_name_empty";
        }
		 //�жϱ�ʶ���Ƿ����
        if (!IsExiest($data['nid'])) {
            return "group_type_nid_empty";
        }
		//�жϱ�ʶ���Ƿ����
		$sql = "select 1 from `{group_type}` where nid='{$data['nid']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "group_type_nid_exiest";
		
		$sql = "insert into `{group_type}` set addtime='".time()."',addip='".ip_address()."',";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
    	return $mysql->db_insert_id();
	}
	
	/**
	 * 2,�޸�Ȧ������
	 *
	 * @param array $data =array("id"=>"id","name"=>"����","status"=>"״̬");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateGroupType($data = array()){
		global $mysql;
		
		 //�ж������Ƿ����
        if (!IsExiest($data['name'])) {
            return "group_type_name_empty";
        }
		 //�жϱ�ʶ���Ƿ����
        if (!IsExiest($data['nid'])) {
            return "group_type_nid_empty";
		}
		
		//�жϱ�ʶ���Ƿ����
		$sql = "select 1 from `{group_type}` where nid='{$data['nid']}' and id!={$data['id']}";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "group_type_nid_exiest";
		
		$sql = "update `{group_type}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql)." where id='{$data['id']}' ");
		return $data['id'];
	}
	
	/**
	 * 3,ɾ��Ȧ������
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function DeleteGroupType($data = array()){
		global $mysql;
		
		if (!IsExiest($data['id'])) return "group_type_id_empty";
		
		$sql = "select 1 from `{group}` where type_id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result != false) return "group_type_group_exiest";
		
		$sql = "delete from `{group_type}`  where id='{$data['id']}'";
    	$mysql -> db_query($sql);
		
		return $data['id'];
	}
	
	
	
	
	/**
	 * 5,���Ȧ���б�
	 *
	 * @return Array
	 */
	function GetGroupTypeList($data = array()){
		global $mysql;
		
		$_sql = " where 1=1 ";
		$_select = " p1.*";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{group_type}` as p1  SQL ORDER LIMIT";
		
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
	 * 6,���Ȧ�ӵĵ�����¼
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetGroupTypeOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "group_type_id_empty";
		
		$sql = "select p1.* from `{group_type}` as p1   where p1.id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		
		if ($result==false) return "group_type_empty";
		return $result;
	}
	
	
	
	/**
	 * 1,����Ȧ��
	 *
	 * @param array $data =array("name"=>"����","status"=>"״̬");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function AddGroup($data = array()){
		global $mysql,$_G,$upload;
		 //�ж������Ƿ����
        if (!IsExiest($data['name'])) {
            return "group_name_empty";
        }
		
		//�ж�����
        if (!IsExiest($data['type_id'])) {
            return "group_type_id_empty";
        }
		
		if (isset($data['username']) && $data['username']!=""){
			$sql = "select user_id from `{users}` where username='{$data['username']}'";
			$result = $mysql->db_fetch_array($sql);
			
			if ($result==false) return "group_username_empty";
			unset($data['username']);
			$data['user_id'] = $result['user_id'];
		}
		
			
		//�ж��û�
        if (!IsExiest($data['user_id'])) {
            return "group_user_id_empty";
        }
		//���˴�����Ȧ�Ӳ��ܶ���10��
		$sql = "select count(1) as num from `{group}` where user_id='{$data['user_id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result['num']>10) return "group_more_10";
		
		$sql = "insert into `{group}` set addtime='".time()."',addip='".ip_address()."',";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
    	$id = $mysql->db_insert_id();
		
		$_G['upimg']['file'] = "pic";
		$_G['upimg']['mask_status']=0;
		$_G['upimg']['code'] = "group";
		$_G['upimg']['type'] = "group";
		$_G['upimg']['user_id'] = $data["user_id"];
		$_G['upimg']['article_id'] = $id;
		$pic_result = $upload->upfile($_G['upimg']);
		if ($pic_result!=""){
			$sql = "update `{group}` set litpic ='{$pic_result[0]['upfiles_id']}'  where id={$id}";
			$mysql->db_query($sql);
		}
		return $id;
	}
	
	/**
	 * 2,�޸�Ȧ��
	 *
	 * @param array $data =array("id"=>"id","name"=>"����","status"=>"״̬");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateGroup($data = array()){
		global $mysql,$_G,$upload;
		
		 //�ж������Ƿ����
        if (!IsExiest($data['name'])) {
            return "group_name_empty";
        }
		//�ж��û�
        if (!IsExiest($data['user_id'])) {
            return "group_user_id_empty";
        }
		
		//�ж�����
        if (!IsExiest($data['type_id'])) {
            return "group_type_id_empty";
        }
		
		$sql = "update `{group}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql)." where user_id='{$data['user_id']}' and id='{$data['id']}' ");
		
		$_G['upimg']['file'] = "pic";
		$_G['upimg']['mask_status']=0;
		$_G['upimg']['code'] = "group";
		$_G['upimg']['type'] = "group";
		$_G['upimg']['user_id'] = $data["user_id"];
		$_G['upimg']['article_id'] = $id;
		$pic_result = $upload->upfile($_G['upimg']);
		if ($pic_result!=""){
			$_data['user_id'] = $data['user_id'];
			$_data['id'] = $data['litpic'];
			$upload->Delete($_data);
			$sql = "update `{group}` set litpic ={$pic_result[0]['upfiles_id']}  where id={$data['id']}";
			$mysql->db_query($sql);
		}
		
		return $data['id'];
	}
	
	/**
	 * 3,ɾ��Ȧ������
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function DeleteGroup($data = array()){
		global $mysql,$upload;
		
		if (!IsExiest($data['id'])) return "group_type_id_empty";
		if ($data['admin']!=1){
			$sql = "select 1 from `{group_articles}` where group_id='{$data['id']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result != false) return "group_articles_exiest";
			
			$sql = "select user_id,litpic from `{group}` where user_id='{$data['user_id']}' && id='{$data['id']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result==false) return "group_empty";
			$_data['user_id'] = $result['user_id'];
			$_data['id'] = $result['litpic'];
			$upload->Delete($_data);
			
			$sql = "delete from `{group}`  where user_id='{$data['user_id']}' && id='{$data['id']}'";
			$mysql -> db_query($sql);
		}else{
			$sql = "delete from `{group_articles}`  where group_id='{$data['id']}'";
			$result = $mysql->db_query($sql);
			
			$sql = "select user_id,litpic from `{group}` where id='{$data['id']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result==false) return "group_empty";
			$_data['user_id'] = $result['user_id'];
			$_data['id'] = $result['litpic'];
			$upload->Delete($_data);
			
			$sql = "delete from `{group}`  where id='{$data['id']}'";
			$mysql -> db_query($sql);
		}
		
		return $data['id'];
	}
	
	
	
	
	/**
	 * 5,���Ȧ���б�
	 *
	 * @return Array
	 */
	function GetGroupList($data = array()){
		global $mysql,$_G;
		
		$_sql = " where 1=1 ";
		if ((isset($data['status']) && $data['status']!="") || $data['status']=="0"){
			$_sql .= " and p1.status={$data['status']}";
		}
		
		if (isset($data['username']) && $data['username']!=""){
			$_sql .= " and p3.username like '%{$data['username']}%' ";
		}
		if (isset($data['nid']) && $data['nid']!=""){
			if ($data['nid']=="my"){
				$data['my_userid'] = $_G['user_id'];
			}else{
				$_sql .= " and p2.nid = '{$data['nid']}' ";
				$sql = "select name from `{group_type}` where nid='{$data['nid']}'";
				$result = $mysql->db_fetch_array($sql);
				$type_name = $result['name'];
			}
		}
		
		if (isset($data['my_userid']) && $data['my_userid']!=""){
			$_sql .= " and p1.id in (select group_id from `{group_member}` where user_id='{$data['my_userid']}' and status=1)";
		}
		$_select = " p1.*,p2.name as type_name,p3.username,p4.fileurl as litpic_url";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{group}` as p1 left join `{group_type}` as p2 on p1.type_id=p2.id left join `{users_upfiles}` as p4 on p1.litpic=p4.id left join `{users}` as p3 on p1.user_id=p3.user_id  SQL ORDER ";
		
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
		
		foreach($list as $key => $value){
			$sql="select count(1) as num from `{group_articles}` where group_id={$value['id']}";
			$_result=$mysql->db_fetch_array($sql);
			$list[$key]['articles_count']=$_result['num'];
		}
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'type_name' => $type_name,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
	}
	
	
	
	/**
	 * 6,���Ȧ�ӵĵ�����¼
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetGroupOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "group_id_empty";
		$_select = " p1.*,p2.name as type_name,p3.username,p4.fileurl as litpic_url";
		
		$sql = "select {$_select} from `{group}` as p1 left join `{group_type}` as p2 on p1.type_id=p2.id left join `{users_upfiles}` as p4 on p1.litpic=p4.id left join `{users}` as p3 on p1.user_id=p3.user_id  where p1.id='{$data['id']}'";
		
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "group_empty";
		return $result;
	}
	
	
	/**
	 * 7,���Ȧ��
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function VerifyGroup($data = array()){
		global $mysql;
		
		if (!IsExiest($data['id'])) return "group_id_empty";
		$sql = "select p1.*,p2.username from `{group}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "group_empty";
		$sql = "update `{group}` set verify_time='".time()."',verify_userid='{$data['verify_userid']}',verify_remark='{$data['verify_remark']}',status={$data['status']} where  id='{$data['id']}' ";
		$mysql->db_query($sql);
		$_sql = "insert into `{group_member}` set user_id='{$result['user_id']}',group_id='{$result['id']}',remark='Ȧ��',status=1,admin_status=2";
		$mysql->db_query($_sql);
		
		//������˼�¼
		$_data["user_id"] = $result["user_id"];
		$_data["result"] = $data["status"];
		$_data["code"] = "group";
		$_data["type"] = "group";
		$_data["article_id"] = $data["id"];
		$_data["verify_userid"] = $data["verify_userid"];
		$_data["remark"] = $data["verify_remark"];
		usersClass::AddExamine($_data);
		return $data['id'];
	}
	
	/**
	 * 8,���Ȧ�ӷ����б�
	 *
	 * @return Array
	 */
	function GetGroupLists($data = array()){
		global $mysql;
		
		$_sql = " where 1=1 ";
		if ((isset($data['status']) && $data['status']!="") || $data['status']=="0"){
			$_sql .= " and p1.status={$data['status']}";
		}
		
		if (isset($data['username']) && $data['username']!=""){
			$_sql .= " and p3.username like '%{$data['username']}%' ";
		}
		
		if (isset($data['public']) && $data['public']!=""){
			$_sql .= " and p1.public={$data['public']}";
		}
		
		
		if (isset($data['username']) && $data['username']!=""){
			$_sql .= " and p3.username like '%{$data['username']}%' ";
		}
		
		$type_result = self::GetGroupTypeList(array("limit"=>"all"));
		foreach ($type_result as $key => $value){
			$_select = " p1.*,p2.name as type_name,p3.username,p4.fileurl as litpic_url";
			$_order = " order by p1.id desc";
			$sql = "select SELECT from `{group}` as p1 left join `{group_type}` as p2 on p1.type_id=p2.id left join `{users_upfiles}` as p4 on p1.litpic=p4.id left join `{users}` as p3 on p1.user_id=p3.user_id  SQL and p1.type_id={$value['id']} ORDER LIMIT";
		
			if ($data['limit'] != "all"){ $_limit = "  limit ".$data['limit']; }
			$type_result[$key]['list'] = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $sql));
			foreach($type_result[$key]['list'] as $k => $v){
				$sql="select count(1) as num from `{group_articles}` where group_id={$v['id']}";
				$_result=$mysql->db_fetch_array($sql);
				$type_result[$key]['list'][$k]['articles_count']=$_result['num'];
			}
		}			 
		
		return $type_result;
	}
	
	
	
	/**
	 * 9,���Ȧ�ӵ������Ϣ
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetGroupOnes($data = array()){
		global $mysql,$_G;
		if (!IsExiest($data['article_id'])) return "group_id_empty";
		$result = self::GetGroupOne(array("id"=>$data['article_id']));
		$_manager = $result['manager'];
		if ($_manager!=""){
			$sql = "select username,user_id from `{users}` where user_id in ($_manager)";
			$result['manager_result'] = $mysql->db_fetch_arrays($sql);
		}
		$rank_result = self::CheckGroupRank(array("user_id"=>$_G['user_id'],"group_id"=>$data['article_id']));
		$result['member_status'] = $rank_result;
		$result['member_result'] = self::GetGroupMemberOne(array("id"=>$data['article_id']));
		return $result;
	}
	
	/**
	 * 10,�޸�Ȧ�ӵ�ͳ��
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	function UpdateGroupCount($data){
		global $mysql;
		if ($data['group_id']=="") return "";
		$sql = "select count(1) as num from `{group_member}` where status=1 and group_id='{$data['group_id']}'";
		$result_member = $mysql->db_fetch_array($sql);
		$sql = "select count(1) as num from `{group_articles}` where status=1 and group_id='{$data['group_id']}'";
		$result_articles = $mysql->db_fetch_array($sql);
		$sql = "select count(1) as num from `{group_comments}` where status=1 and group_id='{$data['group_id']}'";
		$result_comments = $mysql->db_fetch_array($sql);
		$sql = "select user_id,admin_status from `{group_member}` where status=1 and group_id='{$data['group_id']}'";
		$result = $mysql->db_fetch_arrays($sql);
		$_result = array();
		$_result_admin = array();
		foreach ($result as $key => $value){
			$_result[] = $value['user_id'];
			if ($value['admin_status']==1){
					$_result_admin[] = $value['user_id'];
			}
		}
		$_users = join(",",$_result);
		$_manager = join(",",$_result_admin);
		$sql = "update `{group}` set member_count='{$result_member['num']}',articles_count='{$result_member['num']}',comment_count='{$result_comments['num']}',users='{$_users}',manager='{$_manager}' where  id='{$data['group_id']}'";
	 	$mysql->db_query($sql);
		
		//������������е����º�����
	
	}
	/**
	 * 0,�ж�Ȩ��
	 *
	 * @param array $data =array("group_id"=>"����","user_id"=>"�û�","articles_id"=>"����","comments_id"=>"����");
	 * @param string $data;
	 * @return boolen(true,false)
	 * 3,��ʾȦ����ӵ����ߵȼ���2����ʾ����Ա�ȼ�,1����ʾȦ�ӳ�Ա��0��ʾ��Ȧ�ӳ�Ա
	 */
	function CheckGroupRank($data){
		global $mysql;
		if (isset($data['group_id']) && $data['group_id']!=""){
			$sql = "select user_id from `{group}` where id='{$data['group_id']}' " ;
			$result = $mysql->db_fetch_array($sql);	
			if ($data['user_id']==$result['user_id']) {
				return 3;
			}
		
			$sql = "select admin_status from `{group_member}` where user_id='{$data['user_id']}' and group_id='{$data['group_id']}' and status=1";
			$result = $mysql->db_fetch_array($sql);
			if ($result!=false ){
				if ($result['admin_status']==1){
					return 2;
				}else{
					return 1;
				}
			}else{
				return 0;
			}
		}
		
		
	}
	
	
	
	/**
	 * 1,����Ȧ������
	 *
	 * @param array $data =array("name"=>"����","status"=>"״̬");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function AddGroupArticles($data = array()){
		global $mysql;
		 //�ж������Ƿ����
        if (!IsExiest($data['name'])) {
            return "group_articles_name_empty";
        }
		
		if (isset($data['username']) && $data['username']!=""){
			$sql = "select user_id from `{users}` where username='{$data['username']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result==false) return "group_username_empty";
			unset($data['username']);
			$data['user_id'] = $result['user_id'];
		}
		
		
		//�ж��û�
        if (!IsExiest($data['user_id'])) {
            return "group_articles_user_id_empty";
        }
		
		
		$sql = "insert into `{group_articles}` set addtime='".time()."',addip='".ip_address()."',";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
    	$id = $mysql->db_insert_id();
		
		return $id;
	}
	
	/**
	 * 2,�޸�Ȧ������
	 *
	 * @param array $data =array("id"=>"id","name"=>"����","status"=>"״̬");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateGroupArticles($data = array()){
		global $mysql;
		
		 //�ж������Ƿ����
        if (!IsExiest($data['id'])) {
            return "group_articles_name_empty";
        }
		
		$sql = "select group_id from `{group_articles}` where id={$data['id']}";
		$result=$mysql->db_fetch_array($sql);
		
		$sql = "update `{group_articles}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql)." where id='{$data['id']}' ");
		
		return $result['group_id'];
	}
	
	/**
	 * 3,ɾ��Ȧ������
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function DeleteGroupArticles($data = array()){
		global $mysql,$upload;
		
		if (!IsExiest($data['id'])) return "group_articles_id_empty";
		
		$sql = "select 1 from `{group_articles}` where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result== false) return "group_articles_empty";
		
		$sql = "delete from `{group_articles}`  where id='{$data['id']}'";
    	$mysql -> db_query($sql);
		
		return $data['id'];
	}
	
	
	
	
	/**
	 * 5,���Ȧ���б�
	 *
	 * @return Array
	 */
	function GetGroupArticlesList($data = array()){
		global $mysql;
		
		$_sql = " where 1=1 ";
		if ((isset($data['status']) && $data['status']!="") || $data['status']=="0"){
			$_sql .= " and p1.status={$data['status']}";
		}
		
		if (isset($data['group_id']) && $data['group_id']!=""){
			$_sql .= " and p1.group_id='{$data['group_id']}'";
		}
		
		if (isset($data['username']) && $data['username']!=""){
			$_sql .= " and p2.username like '%{$data['username']}%' ";
		}
		$_select = " p1.*,p2.username,p3.name as group_name";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{group_articles}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id left join `{group}` as p3 on p1.group_id=p3.id  SQL ORDER LIMIT";
		
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
		foreach ($list as $key => $value){
				$list[$key]["contents"] =  preg_replace('[\[\:([0-9]+)*\:\]]',"<img src=/data/images/face/$1.gif>", $value["contents"]);
			}
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
	}
	
	
	
	/**
	 * 6,���Ȧ�ӵĵ�����¼
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetGroupArticlesOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "group_articles_id_empty";
		$_select = " p1.*,p2.username,p3.name as group_name";
		
		$sql = "select {$_select} from `{group_articles}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id  left join `{group}` as p3 on p1.group_id=p3.id  where p1.id='{$data['id']}'";
		
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "group_articles_empty";
		$result["contents"] =  preg_replace('[\[\:([0-9]+)*\:\]]',"<img src=/data/images/face/$1.gif>", $result["contents"]);
		return $result;
	}
	
	
	/**
	 * 7,���Ȧ�ӵĵ�����¼
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetGroupArticlesOnes($data = array()){
		global $mysql,$_G;
		if (!IsExiest($data['id'])) return "group_articles_id_empty";
		$_select = " p1.*,p2.username,p3.name as group_name";
		
		$sql = "select {$_select} from `{group_articles}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id  left join `{group}` as p3 on p1.group_id=p3.id  where p1.id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "group_articles_empty";
		//�ж��Ƿ���Ȧ���������
		$rank_result = self::CheckGroupRank(array("user_id"=>$_G['user_id'],"group_id"=>$data['group_id']));
		$result['member_status'] = $rank_result;
		
		
		
		return $result;
	}
	
	
		
	/**
	 * 1,���Ȧ�ӳ�Ա
	 *
	 * @param array $data =array("name"=>"����","status"=>"״̬");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function AddGroupMember($data = array()){
		global $mysql;
		 //�ж������Ƿ����
        if (!IsExiest($data['user_id'])) {
            return "group_member_userid_empty";
        }
		 //�жϱ�ʶ���Ƿ����
        if (!IsExiest($data['group_id'])) {
            return "group_member_groupid_empty";
        }
		$sql = "select user_id from `{group}` where id='{$data['group_id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result['user_id']==$data['user_id']){
			return "group_member_owner_not_join";	
		}
		//�жϱ�ʶ���Ƿ����
		$sql = "select status,id from `{group_member}` where user_id='{$data['user_id']}' and  group_id='{$data['group_id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false){
			if ($result['status']==1) return "group_member_yes_group";
			if ($result['status']==0) return "group_member_wait_group";
			$sql = "update `{group_member}` set remark='{$data['remark']}',update_time='".time()."',update_ip='".ip_address()."',times = times+1,status=0 where user_id='{$data['user_id']}' and  group_id='{$data['group_id']}'";
			$mysql->db_query($sql);
			return $result['id'];
		}
		
		$sql = "insert into `{group_member}` set addtime='".time()."',addip='".ip_address()."',times = 1,";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
		$mysql->db_query($sql.join(",",$_sql));
    	return $mysql->db_insert_id();
	}
	
	/**
	 * 2,�޸�Ȧ�ӳ�Ա
	 *
	 * @param array $data =array("id"=>"id","name"=>"����","status"=>"״̬");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateGroupMember($data = array()){
		global $mysql;
		
		 //�ж������Ƿ����
		//�жϱ�ʶ���Ƿ����
        if (!IsExiest($data['group_id'])) {
            return "group_member_groupid_empty";
        }
		//�жϱ�ʶ���Ƿ����
        if (!IsExiest($data['user_id'])) {
            return "group_member_userid_empty";
        }
		$sql = "update `{group_member}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
		$sql = $sql.join(",",$_sql)." where user_id='{$data['user_id']}' and group_id='{$data['group_id']}'   ";
        $mysql->db_query($sql);
		
		
		
		$sql = "update `{group_articles}` set status='{$data['status']}' where user_id='{$data['user_id']}' and group_id='{$data['group_id']}'";
	 	$mysql->db_query($sql);
		
		$sql = "update `{group_comments}` set status='{$data['status']}' where user_id='{$data['user_id']}' and group_id='{$data['group_id']}'";
	 	$mysql->db_query($sql);
		
		self::UpdateGroupCount(array("group_id"=>$data['group_id']));
		return $data['user_id'];
	}
	
	/**
	 * 3,���Ȧ�ӳ�Ա�б�
	 *
	 * @return Array
	 */
	function GetGroupMemberList($data = array()){
		global $mysql;
		
		$_sql = " where 1=1 ";
		if ((isset($data['status']) && $data['status']!="") || $data['status']=="0"){
			$_sql .= " and p1.status={$data['status']}";
		}
		
		if (isset($data['group_id']) && $data['group_id']!=""){
			if ($data['group_id']=="all"){
				$_sql .= " and p1.group_id in (select group_id from `{group_member}` where user_id='{$data['my_userid']}')";
			}else{
				$_sql .= " and p1.group_id='{$data['group_id']}'";
			}
		}
		
		if (isset($data['username']) && $data['username']!=""){
			$_sql .= " and p2.username like '%{$data['username']}%' ";
		}
		
		$_select = " p1.*,p2.username,p3.name as group_name,p4.name as user_typename";
		$_order = " order by p1.status asc,p1.id desc";
		$sql = "select SELECT from `{group_member}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id left join `{users_info}` as p5 on p5.user_id=p1.user_id left join `{users_type}` as p4 on p5.type_id=p4.id left join `{group}` as p3 on p1.group_id=p3.id  SQL ORDER LIMIT";
		
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
	 * 4,���Ȧ�ӳ�Ա�ĵ�����Ϣ
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetGroupMemberOne($data = array()){
		global $mysql;
		$_sql = " where 1=1 ";
		if (isset($data['id']) && $data['id']!=""){
			$_sql .= " and p1.id={$data['id']}";
		}
		if (isset($data['group_id']) && $data['group_id']!=""){
			$_sql .= " and p1.group_id={$data['group_id']}";
		}
		if (isset($data['user_id']) && $data['user_id']!=""){
			$_sql .= " and p1.user_id={$data['user_id']}";
		}
		if (isset($data['status']) && $data['status']!=""){
			$_sql .= " and p1.status={$data['status']}";
		}
		$_select = " p1.*,p2.username,p3.name as group_name";
		
		$sql = "select {$_select} from `{group_member}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id  left join `{group}` as p3 on p1.group_id=p3.id  $_sql";
		
		$result = $mysql->db_fetch_array($sql);
		
		if ($result==false) return "group_member_empty";
		return $result;
	}
	
	/*
	 * 5,���Ȧ�ӳ�Ա����Ϣ
	 *
	 * @param Array $data = array("group_id"=>"Ⱥ��","type"=>"�������","user_id"=>"������","verify_remark"=>"��˱�ע","verify_userid"=>"�����");
	 * @return Array
	 */
	 function VerifyGroupMember($data = array()){
		global $mysql;
		if (!IsExiest($data['group_id'])) return "group_id_empty";
		$sql = "select user_id,manager from `{group}` where id='{$data['group_id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "group_empty";
		//�ж��Ƿ��ǹ���Ա�ſ��Խ������
		$_manager = array();
		if ($result['manager']!=""){
			$_manager = explode(",",$result['manager']);
		}
		if ($data['verify_userid']!=$result['user_id'] && !in_array($data['verify_userid'],$_manager)){
			return "group_member_check_admin_no";
		
		}
		
		$_log['user_id'] = $data['verify_userid'];
		$_log['verify_remark'] = $data['verify_remark'];
		$_log['group_id'] = $data['group_id'];
		$_log['type'] = "member_verify";
		$_log['to_userid'] = $data['user_id'];
		if (!is_array($data['user_id'])){
			if ($data['type']=="yes"){
				$sql = "update `{group_member}` set verify_userid='{$data['verify_userid']}', verify_time='".time()."',verify_remark='{$data['verify_remark']}',status=1 where group_id='{$data['group_id']}' and user_id='{$data['user_id']}'";
				$mysql->db_query($sql);
				$_log['result'] = "yes";
				$_log['remark'] = "ͨ�����";
			}elseif ($data['type']=="no"){
				$sql = "update `{group_member}` set verify_userid='{$data['verify_userid']}', verify_time='".time()."',verify_remark='{$data['verify_remark']}',status=2 where group_id='{$data['group_id']}' and user_id='{$data['user_id']}'";
				$mysql->db_query($sql);
				$_log['result'] = "no";
				$_log['remark'] = "ͨ�������";
			}elseif ($data['type']=="admin_yes"){
				$sql = "update `{group_member}` set admin_status=1 where group_id='{$data['group_id']}' and user_id='{$data['user_id']}'";
				$mysql->db_query($sql);
				$_log['result'] = "admin_yes";
				$_log['remark'] = "��Ϊ����Ա";
			}elseif ($data['type']=="admin_no"){
				$sql = "update `{group_member}` set admin_status=0 where group_id='{$data['group_id']}' and user_id='{$data['user_id']}'";
				$mysql->db_query($sql);
				$_log['result'] = "admin_no";
				$_log['remark'] = "ȡ������Ա";
			}elseif ($data['type']=="out"){
				$sql = "delete  from `{group_member}` where group_id='{$data['group_id']}' and user_id='{$data['user_id']}'";
				$mysql->db_query($sql);
				$_log['result'] = "admin";
				$_log['remark'] = "�߳�Ȧ��";
			}
			self::AddGroupLog($_log);
		}else{
			foreach($data['user_id'] as $key => $value){
				$sql = "update `{group_member}` set verify_userid='{$data['verify_userid']}', verify_time='".time()."',verify_remark='{$data['verify_remark']}',status=1 where group_id='{$data['group_id']}' and user_id='{$value}'";
				$mysql->db_query($sql);
				$_log['result'] = "yes";
				$_log['remark'] = "ͨ�����";
				self::AddGroupLog($_log);
			}
		}
		$sql = "select user_id,admin_status from `{group_member}` where group_id='{$data['group_id']}' and status=1";
		$result = $mysql->db_fetch_arrays($sql);
		$_result = array();
		$_result_admin = array();
		foreach ($result as $key => $value){
			$_result[] = $value['user_id'];	
			if ($value['admin_status']=="1"){
				$_result_admin[] = $value['user_id'];	
			}
		}
		$sql = "update `{group}` set member_count='".count($_result)."',users='".(join(",",$_result))."',manager='".(join(",",$_result_admin))."' where id='{$data['group_id']}'";
		$mysql->db_query($sql);
		
		return $data['user_id'];
	}
	
	/*
	 * 6,�رճ�Ա
	 *
	 * @param Array $data = array("group_id"=>"Ⱥ��","type"=>"�������","user_id"=>"������","verify_remark"=>"��˱�ע","verify_userid"=>"�����");
	 * @return Array
	 */
	 function CloseGroupMember($data){
	 	global $mysql;
		$sql = "select 1 from `{group_member}` where user_id='{$data['user_id']}' and group_id='{$data['group_id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result ==false) return "group_member_empty";
		
		$sql = "update `{group_member}` set status=3 where user_id='{$data['user_id']}' and group_id='{$data['group_id']}'";
	 	$mysql->db_query($sql);
		
		
		$sql = "update `{group_articles}` set status=3 where user_id='{$data['user_id']}' and group_id='{$data['group_id']}'";
	 	$mysql->db_query($sql);
		
		
		$sql = "update `{group_comments}` set status=3 where user_id='{$data['user_id']}' and group_id='{$data['group_id']}'";
	 	$mysql->db_query($sql);
		
		self::UpdateGroupCount(array("group_id"=>$data['group_id']));
		return 1;
	 }
	
	
	/*
	 * 7,�˳�Ȧ��
	 *
	 * @param Array $data = array("group_id"=>"Ⱥ��","type"=>"�������","user_id"=>"������","verify_remark"=>"��˱�ע","verify_userid"=>"�����");
	 * @return Array
	 */
	 function ExitGroupMember($data){
	 	global $mysql;
		$sql = "select 1 from `{group_member}` where user_id='{$data['user_id']}' and group_id='{$data['group_id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result ==false) return "group_member_empty";
		
		$sql = "update `{group_member}` set status=4 where user_id='{$data['user_id']}' and group_id='{$data['group_id']}'";
	 	$mysql->db_query($sql);
		
		
		$sql = "update `{group_articles}` set status=4 where user_id='{$data['user_id']}' and group_id='{$data['group_id']}'";
	 	$mysql->db_query($sql);
		
		
		$sql = "update `{group_comments}` set status=4 where user_id='{$data['user_id']}' and group_id='{$data['group_id']}'";
	 	$mysql->db_query($sql);
		
		self::UpdateGroupCount(array("group_id"=>$data['group_id']));
		return 1;
	 }
	
	/**
	 * 1,Ȧ������
	 *
	 * @param array $data =array("name"=>"����","status"=>"״̬");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function AddGroupComments($data = array()){
		global $mysql;
		 //�ж������Ƿ����
        if (!IsExiest($data['user_id'])) {
            return "group_comments_user_id_empty";
        }
		//�жϱ�ʶ���Ƿ����
        if (!IsExiest($data['group_id'])) {
            return "group_comments_group_id_empty";
        }
		//�жϱ�ʶ���Ƿ����
        if (!IsExiest($data['articles_id'])) {
            return "group_comments_articles_id_empty";
        }
		//�жϱ�ʶ���Ƿ����
        if (!IsExiest($data['contents'])) {
            return "group_comments_contents_empty";
        }
		
		$sql = "insert into `{group_comments}` set addtime='".time()."',addip='".ip_address()."',";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
    	$result = $mysql->db_insert_id();
		if ($result>0){
			$sql = "update `{group_articles}` set comment_count=comment_count+1,comment_time='".time()."' where id='{$data['articles_id']}' ";
			$mysql->db_query($sql);
		}
		return $result;
	}
	
	/**
	 * 2,�޸�Ȧ������
	 *
	 * @param array $data =array("id"=>"id","name"=>"����","status"=>"״̬");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateGroupComments($data = array()){
		global $mysql;
		
		 //�ж������Ƿ����
		//�жϱ�ʶ���Ƿ����
        if (!IsExiest($data['group_id'])) {
            return "group_comments_group_id_empty";
        }
		//�жϱ�ʶ���Ƿ����
        if (!IsExiest($data['articles_id'])) {
            return "group_comments_articles_id_empty";
        }
		//�жϱ�ʶ���Ƿ����
        if (!IsExiest($data['contents'])) {
            return "group_comments_contents_empty";
        }
		
		$sql = "update `{group_comments}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
		$sql = $sql.join(",",$_sql)." where id='{$data['id']}' and group_id='{$data['group_id']}'  and articles_id='{$data['articles_id']}' ";
        $mysql->db_query($sql);
		return $data['id'];
	}
	
	/**
	 * 3,ɾ��Ȧ������
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function DeleteGroupComments($data = array()){
		global $mysql;
		
		 //�ж������Ƿ����
        if (!IsExiest($data['id'])) {
            return "group_comments_id_empty";
        }
		//�жϱ�ʶ���Ƿ����
        if (!IsExiest($data['group_id'])) {
            return "group_comments_group_id_empty";
        }
		
		//�жϱ�ʶ���Ƿ����
        if (!IsExiest($data['articles_id'])) {
            return "group_comments_articles_id_empty";
        }
		
		$sql = "delete from `{group_comments}` where id='{$data['id']}' and group_id='{$data['group_id']}'";
    	$mysql -> db_query($sql);
		
		$sql = "select addtime from `{group_articles}` where group_id='{$data['group_id']}' and id='{$data['articles_id']}'";
		$result = $mysql->db_fetch_array($sql);
		
		$sql = "update `{group_articles}` set comment_count=comment_count-1,comment_time='{$result['addtime']}' where id ='{$data['articles_id']}'";
		$mysql->db_query($sql);
		return $data['id'];
	}
	
	
	
	
	/**
	 * 5,���Ȧ�������б�
	 *
	 * @return Array
	 */
	function GetGroupCommentsList($data = array()){
		global $mysql;
		
		$_sql = " where p1.pid=0 ";
		if (isset($data['articles_id']) && $data['articles_id']!=""){
			$_sql .= " and p1.articles_id='{$data['articles_id']}'";
		}
		if (isset($data['status']) && ($data['status']!="" || $data['status']=="0")){
			$_sql .= " and p1.status='{$data['status']}'";
		}
		if ($data['type']=="all"){
			$_select = " p1.*,p2.username,p3.name as group_name ,p4.name as articles_name";
			$_order = " order by p1.status asc,p1.id desc";
			$sql = "select SELECT from `{group_comments}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id left join `{group}` as p3 on p1.group_id=p3.id left join `{group_articles}` as p4 on p1.articles_id= p4.id SQL ORDER LIMIT";
		}else{
			$_select = " p1.*,p2.username";
			$_order = " order by p1.status asc,p1.id desc";
			$sql = "select SELECT from `{group_comments}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id  SQL ORDER LIMIT";
		}
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
		$list =  $list?$list:array();
		$_users = array();
		foreach ($list as $key => $value){
			$_users[] = $value['id'];
		}
		$_list = array();
		if (count($_users)>0){
			$_users = join(',',$_users);
			$sql = "select p1.*,p2.username from `{group_comments}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id where tid in ({$_users})";
			$result = $mysql->db_fetch_arrays($sql);
			$__list = array();
			foreach ($result as $_key => $_value){
				$__list[$_value['tid']][$_value['id']] = $_value;
			}
			foreach ($list as $key => $value){
				$_list[$key] = $value;
				$_list[$key]['sub_result'] = $__list[$value['id']];
				$_list[$key]["contents"] =  preg_replace('[\[\:([0-9]+)*\:\]]',"<img src=/data/images/face/$1.gif>", $value["contents"]);	
				
			}
		}else{
			$_list = $list;
		}
		//�������յĽ��
		$result = array('list' =>$_list,'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		
		return $result;
	}
	
	
	
	/**
	 * 6,���Ȧ�����۵ĵ�����¼
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetGroupCommentsOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "group_comments_id_empty";
		
		$sql = "select p1.* from `{group_comments}` as p1   where p1.id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		
		if ($result==false) return "group_comments_empty";
		return $result;
	}
	
	
	
	
	/**
	 * 7,���Ȧ�����۵ĵ�����¼
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetGroupCommentsOnes($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "group_comments_id_empty";
		
		$_select = " p1.*,p2.username,p3.name as group_name ,p4.name as articles_name";
			$sql = "select {$_select} from `{group_comments}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id left join `{group}` as p3 on p1.group_id=p3.id left join `{group_articles}` as p4 on p1.articles_id= p4.id where p1.id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		
		if ($result==false) return "group_comments_empty";
		return $result;
	}
	
	
	
	/*
	 * 1,��Ӹ��ּ�¼
	 *
	 * @param Array $data = array("group_id"=>"Ⱥ��","type"=>"�������","user_id"=>"������","verify_remark"=>"��˱�ע","verify_userid"=>"�����");
	 * @return Array
	 */
	 function AddGroupLog($data = array()){
		global $mysql;
		
		$sql = "insert into `{group_log}` set addtime='".time()."',addip='".ip_address()."',";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
		$mysql->db_query($sql.join(",",$_sql));
    	return $mysql->db_insert_id();
	}
	
	
}
?>
