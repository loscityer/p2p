<?
/******************************
 * $File: comments.class.php
 * $Description: ���۹���
 * $Author: hummer 
 * $Time:2010-03-09
 * $Update:None 
 * $UpdateDate:None 
******************************/
//�����Ը������
require_once("comments.model.php");

class commentsClass{

	
	/**
	 * 1,�������
	 *
	 * @param array $data =array("name"=>"����");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function AddComments($data = array()){
		global $mysql,$_G;
		 //�ж������Ƿ����
        if (!IsExiest($data['contents'])) {
            return "comments_contents_empty";
        }
		
		 //�ж��û��Ƿ����
        if (!IsExiest($data['user_id'])) {
            return "comments_user_id_empty";
        }
		
		$sql = "select username,reg_time from `{users}` where user_id='{$data['user_id']}'";
		$user_result = $mysql->db_fetch_array($sql);
		if ($user_result==false) return "comments_user_id_empty";
		
		
		//�ж��Ƿ��ע����û�
		if ($_G['system']['con_comments_status']==0){
			//return "comments_status_close";
		}
		
		//�ж��Ƿ��ע����û�
		if ($_G['system']['con_comments_time']>0){
			if ($user_result['reg_time']<time()-$_G['system']['con_comments_time']*60 ){
				return "comments_time_close";
			}
		}
		
		//�ж��Ƿ��ǽ�ֹ���û�
		if ($_G['system']['con_comments_users']!=""){
			$comments_users = explode("|",$_G['system']['con_comments_users']);
			if (in_array($user_result['username'],$comments_users)){
				return "comments_users_close";
			}
		}
		
		if ($data['site_id']!=""){
			$sql = "select type,value,nid from `{site}` where id='{$data['site_id']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result['type']=="page"){
				$data['article_id'] = $result['value'];
				$data['code'] = 'articles';
				$data['type'] = 'page';
			}elseif ($result['type']=="article"){;
				$data['code'] = 'articles';
				$data['type'] = 'article';
			}elseif ($result['type']=="code"){;
				$data['code'] = $result['value'];
				$data['type'] = $result['nid'];
			}
		}
		
		$sql = "insert into `{comments}` set addtime='".time()."',addip='".ip_address()."',";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
    	return $mysql->db_insert_id();
	}
	
	
	/**
	 * 3,��������
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function ActionComments($data = array()){
		global $mysql;
		
		if (!IsExiest($data['id'])) return "comment_id_empty";
		if ($data['type'] == "delete"){
			$sql = "delete from `{comments}`  where id in ({$data['id']}) or pid in ({$data['id']}) or reply_id in ({$data['id']})";
			$mysql -> db_query($sql);
		}elseif ($data['type'] == "yes"){
			$sql = "update `{comments}`  set status=1 where id in ({$data['id']}) ";
			$mysql -> db_query($sql);
		}elseif ($data['type'] == "no"){
			$sql = "update `{comments}`  set status=2 where id in ({$data['id']}) ";
			$mysql -> db_query($sql);
		}
		return $data['id'];
	}
	
	
	
	
	/**
	 * 5,�������б�
	 *
	 * @return Array
	 */
	function GetCommentsList($data = array()){
		global $mysql;
		
		$_sql = " where 1=1 ";
		if (IsExiest($data['username'])!=""){
			$_sql .= " and  p2.username like '%{$data['username']}%' ";
		}
		
		$_select = " p1.*,p2.username";
		$_order = " order by p1.status asc,p1.id desc";
		$sql = "select SELECT from `{comments}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id  SQL ORDER LIMIT";
		
		//�Ƿ���ʾȫ������Ϣ
		if (IsExiest($data['limit'])!=false){
			if ($data['limit'] != "all"){ $_limit = "  limit ".$data['limit']; }
			$result = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $sql));
			foreach ($result as $key => $value){
				$result[$key]["contents"] =  preg_replace('[\[\:([0-9]+)*\:\]]',"<img src=/data/images/face/$1.gif>", $value["contents"]);
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
			$list[$key]["contents"] =  preg_replace('[\[\:([0-9]+)*\:\]]',"<img src=/data/images/face/$1.gif>", $value["contents"]);
		}
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
	}
	
	
	
	/**
	 * 6,������ĵ�����¼
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetCommentsOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "comments_id_empty";
		
		$sql = "select p1.*,p2.username from `{comments}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id   where p1.id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "comments_empty";
		$result["contents"] =  preg_replace('[\[\:([0-9]+)*\:\]]',"<img src=/data/images/face/$1.gif>", $result["contents"]);
		return $result;
	}
	
	
	/**
	 * 5,��������б�
	 *
	 * @return Array
	 */
	function GetCommentsSiteList($data = array()){
		global $mysql;
		
		$_sql = " where 1=1 ";
		
		if (isset($data['siteid']) && $data['siteid']!=""){
			$sql = "select * from `{site}` where id='{$data['siteid']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result['type']=="page"){
				$_sql .= " and p1.code='articles' and p1.type='page' and p1.article_id='{$result['value']}'";
			}elseif ($result['type']=="article"){
				$_sql .= " and p1.code='articles' and p1.type='article' and p1.article_id='{$data['article_id']}'";
			}elseif ($result['type']=="code"){
				$_sql .= " and p1.code='{$result['value']}' and p1.type='{$result['nid']}' and p1.article_id='{$data['article_id']}'";
			}
		}
		
		if (isset($data['articles_id']) && $data['articles_id']!=""){
			$_sql .= " and p1.articles_id='{$data['articles_id']}'";
		}
		if (isset($data['status']) && ($data['status']!="" || $data['status']=="0")){
			$_sql .= " and p1.status='{$data['status']}'";
		}
		
		$_select = " p1.*,p2.username";
		$_order = " order by p1.id asc";
		$sql = "select SELECT from `{comments}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id SQL ORDER LIMIT";
	
		//�Ƿ���ʾȫ������Ϣ
		if (IsExiest($data['limit'])!=false){
			if ($data['limit'] != "all"){ $_limit = "  limit ".$data['limit']; }
			$result =  $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $sql));
			
			foreach ($result as $key => $value){
				$result[$key]["contents"] =  preg_replace('[\[\:([0-9]+)*\:\]]',"<img src=/data/images/face/$1.gif>", $value["contents"]);				
			}
			$_result = array();
			foreach ($result as $key => $value){
				if ($value['pid']==0){
					$_result[$value['id']]['value'] = $value;
				}
			}
			foreach ($result as $key => $value){
				if ($value['pid']>0){
					$_result[$value['pid']]['result'][] = $value;
				}
			}
			
			return array("result"=>$_result,"num"=>count($result));
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
			$_cid[] = $value['id'];
		}
		$_list = array();
		if (count($_users)>0){
			$_users = join(',',$_users);
			$sql = "select p1.*,p2.username from `{comments}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id where tid in ({$_cid})";
			$result = $mysql->db_fetch_arrays($sql);
			$__list = array();
			foreach ($result as $_key => $_value){
				$__list[$_value['tid']][$_value['id']] = $_value;
			}
			foreach ($list as $key => $value){
				$_list[$key] = $value;
				$_list[$key]['sub_result'] = $__list[$value['id']];
				
			}
		}else{
			$_list = $list;
		}
		//�������յĽ��
		$result = array('list' =>$_list,'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		
		return $result;
	}
	
	

}
?>