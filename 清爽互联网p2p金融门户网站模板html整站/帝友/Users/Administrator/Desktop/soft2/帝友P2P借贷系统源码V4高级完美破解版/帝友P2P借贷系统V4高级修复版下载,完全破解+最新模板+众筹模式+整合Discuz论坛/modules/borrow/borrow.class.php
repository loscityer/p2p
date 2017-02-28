<?
/******************************
 * $File: borrow.class.php
 * $Description: ������ļ�
 * $Author: hummer 
 * $Time:2010-08-09
 * $Update:None 
 * $UpdateDate:None 
 * Copyright(c) 2013 by jichu.com. All rights reserved
******************************/

if (!defined('ROOT_PATH'))  die('���ܷ���');//��ֱֹ�ӷ���

require_once(ROOT_PATH."modules/account/account.class.php");
require_once(ROOT_PATH."modules/credit/credit.class.php");
require_once(ROOT_PATH."modules/remind/remind.class.php");
require_once(ROOT_PATH."modules/borrow/borrow.model.php");
require_once(ROOT_PATH."modules/borrow/borrow.amount.php");
require_once(ROOT_PATH."modules/borrow/borrow.calculate.php");
require_once(ROOT_PATH."modules/group/group.class.php");
require_once(ROOT_PATH."modules/users/users.class.php");

class borrowClass extends amountClass {

//�޸ĳ������20130925

	function Getborrow_count_List($data = array()){
		global $mysql,$_G;
		if(isset($data['limit']) && $data['limit']>0)
		{
		$limit="limit ".$data['limit'];
		}
        
		$sql = "select p1.tender_success_account,p2.username  from `{borrow_count}` as p1 left join `{users}` as p2 on p2.user_id =p1.user_id  where 1=1 order by p1.tender_success_account desc $limit ";
		
		$_list = $mysql->db_fetch_arrays($sql);

		return $_list;
	
	}
	
	function Getborrow_count_List_interest($data = array()){
		global $mysql,$_G;
		if(isset($data['limit']) && $data['limit']>0)
		{
		$limit="limit ".$data['limit'];
		}
        
		
			//$sql = "select (p1.tender_interest_yes + ifnull((SELECT sum( money) AS num FROM `{account_log}` WHERE user_id = p1.user_id AND `type` = 'tender_award_add' ),0) ) as tender_interest_yes_g , p2.username  from `{borrow_count}` as p1 left join `{users}` as p2 on p2.user_id =p1.user_id  where 1=1 order by tender_interest_yes_g desc $limit ";
		
		$sql = "SELECT (n.tender_interest_yes + ifnull((SELECT sum(money) AS num FROM `{account_log}` WHERE user_id = n.user_id AND `type` = 'tender_award_add'),0)  ) AS tender_interest_yes_g,n.username FROM (SELECT t.tender_interest_yes,t.user_id,u.username FROM `{borrow_count}` t ,`{users}` u where t.user_id=u.user_id) AS n ORDER BY tender_interest_yes_g DESC $limit ";

		$_list = $mysql->db_fetch_arrays($sql);

		return $_list;
	
	}
	
	function Getuser_zong($data=array()){
		global $mysql;
		//ƽ̨ע��ͻ�
		$sql = "select count(*) as num from `{users}`";
		$result = $mysql->db_fetch_array($sql);
		$_result['user_num'] = $result['num'];
		//�ɹ�����ܶ�
		$sql = "select sum(account) as sum from `{borrow}`  where status=3 and is_flow!=1";
		$result = $mysql->db_fetch_array($sql);
		$borrow_all=$result['sum'];
		$sql = "select sum(borrow_account_yes) as sum from `{borrow}`  where is_flow=1";
		$result = $mysql->db_fetch_array($sql);
		$borrow_all+=$result['sum'];
		
		$_result['borrow_all'] = number_format($borrow_all);
		$_result['borrow_all_arr'] = str_split($_result['borrow_all']);//���ַָ��������
		
		//��Ա������
		

		$latesql="select sum(p2.late_interest) as all_late_interest from `{borrow_tender}` as p1 , `{borrow_recover}` as p2  where p1.change_status=0 or  p1.change_status=1";
		$late=$mysql->db_fetch_array($latesql);

		$_result['all_late_interest']=$late['all_late_interest'];//��׬��Ϣ
		
		$sql = " SELECT sum( money ) AS num FROM `{account_log}` WHERE  `type` = 'tender_award_add' ";
		$result = $mysql->db_fetch_array($sql);
		$_result['award_add'] = $result['num'];//����
		
         $sql = "select sum(repay_account_interest_yes) as sum from `{borrow}` ";
		$result = $mysql->db_fetch_array($sql);
		$_result['repay_account_interest_yes']=$result['sum'];//�ѻ���Ϣ
		
	    $_result['Total_revenue']=$_result['repay_account_interest_yes']+$_result['award_add']+$_result['all_late_interest'];//������
		$_result['Total_revenue'] = number_format($_result['Total_revenue']);
		$_result['Total_revenue_arr'] = str_split($_result['Total_revenue']);//���ַָ��������
		
		//�ɹ�������
		$sql = "select count(account) as num from `{borrow}` where (status=3 or is_flow=1)";
		$result = $mysql->db_fetch_array($sql);
		$_result['borrow_yestimes'] = $result['num'];
		$_result['borrow_yestimes_arr'] = str_split($_result['borrow_yestimes']);
		//����ѻ��ܶ�
		$sql = "select sum(repay_account_yes) as num from `{borrow}` where 1=1";
		$result = $mysql->db_fetch_array($sql);
		$_result['borrow_repay_account_yes'] = $result['num'];
		//���ڱ���
		$sql = "select count(*) as num from `{borrow_repay}` where repay_status =0 and repay_time<'".time()."' group by borrow_nid ";
		$result = $mysql->db_fetch_array($sql);
		 $_result['borrow_repay_late'] = $result['num'];
		
		
		//php��ȡ���տ�ʼʱ����ͽ���ʱ���
 
         $beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
 
         $endToday=mktime(0,0,0,date('m'),date('d')+1,date('Y'))-1;
 
        //php��ȡ������ʼʱ����ͽ���ʱ���
 
         $beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
 
         $endYesterday=mktime(0,0,0,date('m'),date('d'),date('Y'))-1;
		 
		         //php��ȡ��������ʼʱ����ͽ���ʱ���
 
         $beginAfterthreeday=mktime(0,0,0,date('m'),date('d'),date('Y'));
 
         $endAfterthreeday=mktime(0,0,0,date('m'),date('d')+1,date('Y'))-1;

		 
		//���ճɽ���
	    $sql = "select sum(account) as num from `{borrow_tender}` where addtime>=$beginYesterday and  addtime<= $endYesterday";
		$result = $mysql->db_fetch_array($sql);
		$_result['borrow_Yesterday_num'] = $result['num'];
		
		//�����ѳɽ���
	    $sql = "select sum(account) as num from `{borrow_tender}` where addtime>=$beginToday and  addtime<= $endToday";
		$result = $mysql->db_fetch_array($sql);
		$_result['borrow_Today_num'] = $result['num'];
		
		//���ջ����ܶ�
	    $sql = "select sum(repay_account-repay_account_yes) as num  from `{borrow_repay}` where repay_status=0 and repay_time>=$beginToday and  repay_time<= $endToday  ";
		$result = $mysql->db_fetch_array($sql);
		$_result['borrow_Today_repay_num'] = $result['num'];
		 
		 	//����������ܶ�
	    $sql = "select sum(repay_account-repay_account_yes) as num  from `{borrow_repay}` where repay_status=0 and repay_time>=$beginAfterthreeday and  repay_time<= $endAfterthreeday  ";
		$result = $mysql->db_fetch_array($sql);
		$_result['borrow_Today_Afterthree_num'] = $result['num'];
		 
		//�������
	    $sql = "select count(*) as num from `{borrow}` where 1=1 group by user_id ";
		$result = $mysql->db_fetch_array($sql);
		 $_result['borrow_user_num'] = $result['num'];
		 
		 
		 //δ����//�����ܶ�
		$sql = "select sum(repay_account-repay_account_yes) as num from `{borrow_repay}` where repay_status=0 ";
		$result = $mysql->db_fetch_array($sql);
		$_result['borrow_repay_late_not'] = $result['num'];
		
		//��������ܶ�
		$sql = "select sum(repay_account) as num from `{borrow_repay}` where repay_status =0 and repay_time<'".time()."'";
		$result = $mysql->db_fetch_array($sql);
		$_result['borrow_repay_account_late'] = $result['num'];
		//���������վ�ѵ渶
		$sql = "select sum(money) as num from `{account_web}` where type  ='web_repay' ";
		$result = $mysql->db_fetch_array($sql);
		$_result['borrow_repay_late_web'] = $result['num'];
		
		return $_result;
		
	}
	
   	function Aduserpp($user_id){
		global $mysql,$_G;
		
		$sql = "update `{users}` set second_status=second_status+1 ";
        $mysql->db_query($sql." where user_id=$user_id");
		return true;	
		
	}	
	/**
	 * 0,�û���ӻ����Ľ����Ϣ
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function Add($data = array()){
		global $mysql,$_G;

             //�ж��û�����Ƿ�С���������Ϣ
				if($data['is_Seconds']==1){
			$account_result =  accountClass::GetAccountUsers(array("user_id"=>$data['user_id']));//��ȡ��ǰ�û������
			
			$moeSeconds=round(($data['account']/100*$data['borrow_apr'])/12,2);
			if ($account_result['balance']<$moeSeconds){
				return "borrow_Seconds_no";
			}
			
			   
			}
	
	$flow_result=self::GetFlowOne_h(array("user_id"=>$data['user_id']));
	//�ж��Ƿ������ת��֤
	if ($flow_result['status']!=1 && $data['is_flow']==1){
				 return "borrow_flow_status";
	}
		
		//�ж��û��Ƿ����
        if (!IsExiest($data['user_id'])) {
            return "borrow_user_id_empty";
        } 
		//�жϱ����Ƿ����
        if (!IsExiest($data['name'])) {
            return "borrow_name_empty";
        }
		//�жϽ���Ƿ����
        if (!IsExiest($data['account'])) {
            return "borrow_account_empty";
        } 
		
		//�ж��Ƿ������ý����
		if($data['borrow_type']=="jin"){
		   if($data['account']>$account_result['total']){
			  return "borrow_account_jin_credituse";
		   }
		}else{
		  $result = self::GetAmountUsers(array("user_id"=>$data["user_id"]));
		  if ($data['account']>$result['borrow_amount']){
			return "borrow_account_over_credituse";
		  }	
		}
		//�ж��Ƿ���δ��˵ı�
		$sql = "select count(1) as num from `{borrow}` where user_id={$data['user_id']} and status=0";
		$result = $mysql->db_fetch_array($sql);
		if ($result["num"]>0){
			return "borrow_is_exist";
		}
		
		//�ж��Ƿ��������Ͷ���
		$max = isset($_G['system']['con_borrow_maxaccount'])?$_G['system']['con_borrow_maxaccount']:"2000000";//����Ͷ�ʶ��
		if($data['account'] > $max){
			return  "borrow_account_over_max";
		}
		
		//�ж��Ƿ������С��Ͷ�ʶ�
		$min = isset($_G['system']['con_borrow_minaccount'])?$_G['system']['con_borrow_minaccount']:"100";//��С��Ͷ�ʶ��
		if($data['account'] < $min){
			return  "borrow_account_over_min";
		}
		
		//�ж������Ƿ����
		 if (!IsExiest($data['borrow_apr'])) {
			return "borrow_apr_empty";
		}
   
		$apr = isset($_G['system']['con_borrow_apr_highest'])?$_G['system']['con_borrow_apr_highest']:"22.18";
		if ($data['borrow_apr']>$apr){
			return "borrow_apr_over_max";
		}
		
		$sql = "insert into `{borrow}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
        $mysql->db_query($sql);
		
		if($data['is_Seconds']==1){
				$log_info["user_id"] = $data["user_id"];//�����û�id
					$log_info["nid"] = "borrow_success_manage_".time()."_".$mysql->db_insert_id();//������
					$log_info["money"] = $moeSeconds;//�������
					$log_info["income"] = 0;//����
					$log_info["expend"] = 0;//֧��
					$log_info["balance_cash"] = -$moeSeconds;//�����ֽ��
					$log_info["balance_frost"] = 0;//�������ֽ��
					$log_info["frost"] = $moeSeconds;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "fengxianchi_borrow";//����
					$log_info["to_userid"] = 0;//����˭
					$log_info["remark"] =  "�������ʱԤ�ȵ渶��Ϣ{$moeSeconds}Ԫ��";
					accountClass::AddLog($log_info);
		            }
		return $mysql->db_insert_id();	
		
	}
	
	/**
	 * 0.1,�û���ӻ����Ľ����Ϣ
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function AddBorrowTiyan($data = array()){
		global $mysql,$_G;
		
		//�ж��û��Ƿ����
        if (!IsExiest($data['user_id'])) {
            return "borrow_user_id_empty";
        } 
		//�жϱ����Ƿ����
        if (!IsExiest($data['name'])) {
            return "borrow_name_empty";
        }
		
		$data['account'] = 100;
		$data['borrow_period'] = 1;
		$data['borrow_valid_time'] = 1;
		$data['tiyan_status'] = 1;
		
		//�ж��Ƿ��н���
		$sql = "select count(1) as num from `{borrow}` where user_id={$data['user_id']} ";
		$result = $mysql->db_fetch_array($sql);
		if ($result["num"]>0){
			return "borrow_tiyan_not_public";
		}
		
		$sql = "insert into `{borrow}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
         $mysql->db_query($sql);
		return $mysql->db_insert_id();	
	}
	
	/**
	 * 0.2,�û������Ϣ
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function AddBorrowVouch($data = array()){
		global $mysql,$_G;
		
		//�ж��û��Ƿ����
        if (!IsExiest($data['user_id'])) {
            return "borrow_user_id_empty";
        } 
		//�жϱ����Ƿ����
        if (!IsExiest($data['name'])) {
            return "borrow_name_empty";
        }
		//�жϽ���Ƿ����
        if (!IsExiest($data['account'])) {
            return "borrow_account_empty";
        } 
		$data['vouch_status']  = 1;
		//�ж��Ƿ������ý����
		$result = self::GetAmountUsers(array("user_id"=>$data["user_id"]));
		if ($data['account']>$result['vouch_borrow_use']){
			return "borrow_account_over_vouchuse";
		}
		
		//�ж��Ƿ���δ��˵ı�
		$sql = "select count(1) as num from `{borrow}` where user_id={$data['user_id']} and status=0";
		$result = $mysql->db_fetch_array($sql);
		if ($result["num"]>0){
			return "borrow_is_exist";
		}
		
		//�ж��Ƿ��������Ͷ���
		$max = isset($_G['system']['con_borrow_maxaccount'])?$_G['system']['con_borrow_maxaccount']:"50000";//����Ͷ�ʶ��
		if($data['account'] > $max){
			return  "borrow_account_over_max";
		}
		
		//�ж��Ƿ������С��Ͷ�ʶ�
		$min = isset($_G['system']['con_borrow_minaccount'])?$_G['system']['con_borrow_minaccount']:"500";//��С��Ͷ�ʶ��
		if($data['account'] < $min){
			return  "borrow_account_over_min";
		}
		
		//�ж������Ƿ����
		 if (!IsExiest($data['borrow_apr'])) {
			return "borrow_apr_empty";
		}
		$apr = isset($_G['system']['con_borrow_apr_highest'])?$_G['system']['con_borrow_apr_highest']:"22.18";
		if ($data['borrow_apr']>$apr){
			return "borrow_apr_over_max";
		}
		
		$sql = "insert into `{borrow}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
        $mysql->db_query($sql);
		$id = $mysql->db_insert_id();
		return $id;
	}
	
	/**
	 * 1,�б�
	 * $data = array("user_id"=>"�û�id","username"=>"�û���","borrow_name"=>"�������","borrow_nid"=>"��ʶ��","query_type"=>"�������","dotime1"=>"����ʱ��1","dotime2"=>"����ʱ��2");
	 * @return Array
	 */
	function GetList($data = array()){

		global $mysql;
		
		$_sql = "where 1=1 ";	
		
		//�ж��û�id
		if (IsExiest($data['user_id']) != false){
			$_sql .= " and p1.user_id = {$data['user_id']}";
		}
	
		
		if(isset($data['is_flow']) && $data['is_flow']==1){
			$_sql .= " and p1.is_flow = '{$data['is_flow']}' ";
		}elseif($data['is_flow']!=2){
		    $_sql .= " and p1.is_flow = '0'";	
	   
		}
	
		
		//�ѵ��û���
		if (IsExiest($data['username']) != false){
			$_sql .= " and p2.username like '%{$data['username']}%'";
		}
	
		//�����������
		if (IsExiest($data['borrow_name']) != false){
			$_sql .= " and p1.`name` like '%".urldecode($data['borrow_name'])."%'";
		}

		//�����������
		if (IsExiest($data['borrow_nid']) != false){
			$_sql .= " and p1.`borrow_nid` = '{$data['borrow_nid']}'";
		}
		
		if (IsExiest($data['borrow_type']) != false){
			if ($data['borrow_type']=="credit"){
				$_sql .= " and p1.`vouchstatus`!=1 and `fast_status`!=1 and `is_flow`!=1 and `is_jin`!=1";
			}elseif($data['borrow_type']=="vouch"){
				$_sql .= " and p1.`vouchstatus`=1";
			}elseif($data['borrow_type']=="fast"){
				$_sql .= " and p1.`fast_status`=1";
			}elseif($data['borrow_type']=="flow"){
				$_sql .= " and p1.`is_flow`=1";
			}elseif($data['borrow_type']=="jin"){
				$_sql .= " and p1.`is_jin`=1";
			}
		}
		
		//�ж�����
		if (IsExiest($data['query_type'])!=false){
			$type = $data['query_type'];
			//�ȴ����
			if ($type=="wait"){
				$_sql .= " and p1.status=0";
			}
			//�ɹ����
			elseif ($type=="success"){
				$_sql .= " and p1.status=1";
			}
			elseif ($type=="invest"){
				$_sql .= " and p1.status=1 and p1.verify_time >".time()." - p1.borrow_valid_time*60*60*24 and p1.account>p1.borrow_account_yes";
			}
			elseif ($type=="vouch"){
				$_sql .= " and p1.vouchstatus=1 and p1.verify_time >".time()." - p1.borrow_valid_time*60*60*24 and p1.status=1";
			}
			//����ʧ��
			elseif ($type=="false"){
				$_sql .= " and p1.status=2";
			}
			//��������
			elseif ($type=="full_check"){
				$_sql .= " and p1.status=1 and p1.account=p1.borrow_account_yes ";
			}
			
			//������˳ɹ�
			elseif ($type=="full_success"){
				$_sql .= " and  p1.status=3";
			}
			
			elseif ($type=="repay_yes"){
				$_sql .= " and (p1.status=3 or p1.is_flow=1) and p1.repay_account_wait='0.00'";
			}
			
			elseif ($type=="repay_no"){
				$_sql .= " and (p1.status=3 or p1.is_flow=1) and p1.repay_account_wait!='0.00'";
			}
			//�������ʧ��
			elseif ($type=="full_false"){
				$_sql .= " and p1.status=4";
			}
			//�û�����
			elseif ($type=="flow_stop"){
				$_sql .= " and p1.status!=5 ";
			}
			
			
			//���ڽ���
			elseif ($type=="tender_now"){
				$_sql .= " and ((p1.status=3 and p1.repay_account_wait!='0.00') or (p1.status=1 and p1.borrow_valid_time*60*60*24 + p1.verify_time >= ".time()."))";
			}

			//����
			elseif ($type=="first" && $data['is_flow']!=1){
				if (IsExiest($data['status'])==""){
					$_sql .= " and p1.status = 0 ";
				}elseif($data['status']==1){
					$_sql .= " and p1.status=1 and p1.borrow_account_yes!=p1.account and p1.borrow_valid_time*60*60*24 + p1.verify_time >=".time();
				}elseif($data['status']==5){
					$_sql .= " and p1.status = 5 ";
				}elseif($data['status']==6){
					$data['status'] = 1;
					$_sql .= " and  p1.borrow_valid_time*60*60*24 + p1.verify_time <".time();
				}else{
					$_sql .= " and p1.status in (0,1,2) ";
				}
			}
			//����
			elseif ($type=="full"){
				if ($data['type']=="repay"){
					$_sql .= " and p1.status = 3 and repay_account_wait>0";
				}elseif ($data['type']=="repayyes"){
					$_sql .= " and p1.status = 3 and repay_account_wait=0";
				}elseif (IsExiest($data['status'])==""){
					$_sql .= " and p1.status = 1 and  p1.borrow_account_yes=p1.account ";
				}elseif (IsExiest($data['status'])!=""){
					$_sql .= " and p1.status = {$data['status']} ";
				}
			
			}
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
		
		//�жϽ��״̬
		if (IsExiest($data['status'])!=""){
			if ($data['status']==-1){
				$_sql .= " and p1.status = 1 and p1.borrow_valid_time*60*60*24 + p1.verify_time <".time();
			}else{
			   if($data['is_flow']==2){
			   $_sql .= " and (p1.status in ({$data['status']}) or p1.is_flow=1)";
			   }else{
				$_sql .= " and p1.status in ({$data['status']})";
			   }
			}
		}
		
		//�ж��Ƿ�����
		if (IsExiest($data['late_display'])==1 ){
			$_sql .= " and p1.verify_time >".time()." - p1.borrow_valid_time*60*60*24";
		}
		
		//�ж��Ƿ񵣱����
		if (IsExiest($data['vouch_status'])!=""){
			$_sql .= " and p1.vouch_status in ({$data['vouch_status']})";
		}
		
		
		//�ж��������
		if (IsExiest($data['tiyan_status'])!=""){
			$_sql .= " and p1.tiyan_status in ({$data['tiyan_status']})";
		}
		
		//�������
		if (IsExiest($data['borrow_period'])!=""){
		
			if ($data['borrow_period']=="1"){
				$_sql .= " and p1.borrow_period <= 3";
			}elseif ($data['borrow_period']=="2"){
				$_sql .= " and p1.borrow_period >= 3 and p1.borrow_period <= 6";
			}elseif ($data['borrow_period']=="3"){
				$_sql .= " and p1.borrow_period >= 6 and p1.borrow_period <= 12";
			}elseif ($data['borrow_period']=="4"){
				$_sql .= " and p1.borrow_period >= 12 ";
			}
			
		}
		
		//������
		if (IsExiest($data['flag'])!=""){
			$_sql .= " and p1.flag = {$data['flag']}";
		}
		
		//Ȧ�ӽ��
		if (IsExiest($data['group_id'])!=""){
			if($data['group_id']!="all"){ 
				$_sql .= " and p1.group_status=1 and p1.group_id = {$data['group_id']}";
			}else{ 
				$_sql .= " and p1.group_status=1 and p1.group_id in (select group_id from `{group_member}` where user_id='{$data['my_userid']}')";
			}
		}
		
		//�����;
		if (IsExiest($data['borrow_use']) !=""){
			$_sql .= " and p1.borrow_use in ('{$data['borrow_use']}')";
		}
		
		//����û�����
		if (IsExiest($data['borrow_usertype']) !=""){
			$_sql .= " and p1.borrow_usertype = '{$data['borrow_usertype']}'";
		}
		
		//�Ƿ���
		if (IsExiest($data['award_status'])!=""){
			if($data['award_status']==1){
			$_sql .= " and p1.award_status >0";
			}else{
			$_sql .= " and p1.award_status = 0";
			}
		}
	
		//���
		if (IsExiest($data['borrow_style']) && $data['borrow_style']!='all' ){
			$_sql .= " and p1.borrow_style in ({$data['borrow_style']})";
		}
		
		
		if (IsExiest($data['account_status']!="")){
			if ($data['account_status']==1){
				$_sql .= " and p1.account < 50000 ";
			}elseif($data['account_status']==2){
				$_sql .= " and p1.account >= 50000 and p1.account <= 100000";
			}elseif($data['account_status']==3){
				$_sql .= " and p1.account >= 100000 and p1.account <= 500000";
			}elseif($data['account_status']==4){
				$_sql .= " and p1.account >= 500000";
			}
		}
		
		//����
		$_order = " order by p1.`fast_status` desc,p1.`vouchstatus` desc,p1.`id` desc";
		if (IsExiest($data['order'])!=""){
			$order = $data['order'];
			if ($order == "account_up"){
				$_order = " order by p1.`account` desc ";
			}else if ($order == "account_down"){
				$_order = " order by p1.`account` asc";
			}
			if ($order == "credit_up"){
				$_order = " order by p3.`credit` desc,p1.id desc ";
			}else if ($order == "credit_down"){
				$_order = " order by p3.`credit` asc,p1.id desc ";
			}
			if ($order == "apr_up"){
				$_order = " order by p1.`borrow_apr` desc,p1.id desc ";
			}else if ($order == "apr_down"){
				$_order = " order by p1.`borrow_apr` asc,p1.id desc ";
			}
			if ($order == "jindu_up"){
				$_order = " order by p1.`borrow_account_scale` desc,p1.id desc ";
				
			}else if ($order == "jindu_down"){
				$_order = " order by p1.`borrow_account_scale` asc,p1.id desc ";
			}
			
			if ($order == "period_up"){
				$_order = " order by p1.`borrow_period` desc,p1.id desc ";
				
			}else if ($order == "period_down"){
				$_order = " order by p1.`borrow_period` asc,p1.id desc ";
			}
			
			if ($order == "flag"){
				$_order = " order by p1.vouch_status desc,p1.`flag` desc,p1.id desc ";
			}
			if ($order == "index"){
				$_order = " order by p1.`borrow_account_scale` asc,p1.`recommend` desc,p1.`flag` desc,p1.id desc ";
			}
		}
		
		
		if ($data['jine']==1){
			$_order = " order by p1.`account` desc";
		}
		if ($data['jine']==2){
			$_order = " order by p1.`account` asc";
		}
			if ($data['jine']==3){
			$_order = " order by p3.`credit` asc";
		}
		if ($data['jine']==4){
			$_order = " order by p3.`credit` desc";
		}
				if ($data['jine']==5){
			$_order = " order by p1.`borrow_end_time` asc";
		}
		if ($data['jine']==6){
			$_order = " order by p1.`borrow_end_time` desc";
		}
		
					if ($data['jine']==7){
			$_order = " order by p1.`borrow_account_scale` asc";
		}
		if ($data['jine']==8){
			$_order = " order by p1.`borrow_account_scale` desc";
		}
	
		$_select = "(100-p1.borrow_account_scale) as borrow_account_scale_sy,(245*p1.borrow_account_scale/100) as borrow_account_scale_width, p1.*,p2.username,p3.credits";
		$sql = "select SELECT from `{borrow}` as p1 
				 left join {users} as p2 on p1.user_id=p2.user_id
				 left join {credit} as p3 on p1.user_id=p3.user_id
				 SQL ORDER LIMIT
				";
		//echo $_sql;
		//�Ƿ���ʾȫ������Ϣ
		if (IsExiest($data['limit'])!=false){
			if ($data['limit'] != "all"){ $_limit = "  limit ".$data['limit']; }
			 $list =$mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $sql));
			
				foreach ($list as $key => $value){
					$list[$key]["credit"] = self::GetBorrowCredit(array("user_id"=>$value['user_id']));
				}
			return	 $list;
				
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
		$result['borrow_end_status'] = 0;
		if ($result['status']==1 && $result['borrow_end_time']<time()){
			$result['borrow_end_status'] = 1;
		}
		
		foreach ($list as $key => $value){
			
			
			$borrow_end_status = 0;
			if ($value['status']==1 && $value['borrow_end_time']<time()){
				$borrow_end_status = 1;
			}
			
			if ($value['status']==0){
				if ($borrow_end_status==1){
					$borrow_type_nid = "valid_yes";
				}else{
					$borrow_type_nid = "check_wait";
				}
			}elseif ($value['status']==2){
				$borrow_type_nid = "verify_false";
			}elseif ($value['status']==3){
				if ($value['repay_account_wait']==0){
					$borrow_type_nid = "repay_yes";
				}else{
					$borrow_type_nid = "repay_now";
				}
			}elseif ($value['status']==4){
				$borrow_type_nid = "reverify_false";
			}elseif ($value['status']==5){
				$borrow_type_nid = "cancel";
			}elseif ($value['status']==1){
				if ($value['vouch_status']==1 && $value['vouch_account_wait']!=0){
					$borrow_type_nid = "vouch_now";
				}else{
					if ($value['borrow_account_wait']==0){
						$borrow_type_nid = "reverify";
					}else{
						$borrow_type_nid = "tender_now";
					}
				}
			}

		
			$list[$key]["borrow_type_nid"] = $borrow_type_nid;
			$list[$key]["borrow_end_status"] = $borrow_end_status;
			$list[$key]["borrow_valid_end_time"] = $value["borrow_valid_time"]*60*60*24+$value['verify_time'];
			$list[$key]["credit"] = self::GetBorrowCredit(array("user_id"=>$value['user_id']));

			if ($value['group_id']!=""){
				$list[$key]["group"] = groupClass::GetGroupOne(array("id"=>$value['group_id']));
			}
			$latesql="select sum(late_interest) as all_interest from `{borrow_repay}` where borrow_nid={$value['borrow_nid']}";
			$late=$mysql->db_fetch_array($latesql);
			$list[$key]['late_interest'] = $late['all_interest'];
		}
		
		$sql="select SELECT from `{borrow}` as p1 left join {users} as p2 on p1.user_id=p2.user_id left join {credit} as p3 on p1.user_id=p3.user_id $_sql";
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page,'jine' => $data['jine']);
		return $result;
	}
	
	/**
	 * 2,�鿴����
	 *
	 * @param Array $data
	 * @return Array
	 */
	 	public static function GetSecond($data = array()){
		global $mysql;
				$sql = "select * from `{borrow_tender}` where user_id='{$data['user_id']}' AND borrow_nid='{$data['borrow_nid']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return 0;
		return 1;
		
		}
	 
	 
	public static function GetOne($data = array()){
		global $mysql;
		$_sql = "where 1=1 ";
		if (IsExiest($data['user_id'])!=""){
			$_sql .= " and  p1.user_id = '{$data['user_id']}' ";
		}
		if (IsExiest($data['id'])!=""){
			$_sql .= " and  p1.id = '{$data['id']}' ";
		}
		if (IsExiest($data['borrow_nid'])!=""){
			$_sql .= " and  p1.borrow_nid = '{$data['borrow_nid']}' ";
		}
		$sql = "select p1.* ,p2.username,p3.username as verify_username,(p1.borrow_success_time+(p1.borrow_period*24*60*60*30)) as r_time_h from `{borrow}` as p1 
				  left join `{users}` as p2 on p1.user_id=p2.user_id 
				  left join `{users}` as p3 on p1.verify_userid = p3.user_id 
				  $_sql
				";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "borrow_not_exiest";
		return $result;
	}
	
	
	
	/**
	 * 2.1,�鿴�������飬�õ�detailҳ����
	 *
	 * @param Array $data
	 * @return Array
	 */
	public static function GetDetail($data = array()){
		global $mysql;
		$_sql = "where 1=1 ";
		if (IsExiest($data['user_id'])!=""){
			$_sql .= " and  p1.user_id = '{$data['user_id']}' ";
		}
		if (IsExiest($data['id'])!=""){
			$_sql .= " and  p1.id = '{$data['id']}' ";
		}
		if (IsExiest($data['borrow_nid'])!=""){
			$_sql .= " and  p1.borrow_nid = '{$data['borrow_nid']}' ";
		}
		if (IsExiest($data['hits'])!=""){
			$hsql="update `{borrow}` set hits=hits+1 where borrow_nid={$data['borrow_nid']}";
			$mysql->db_query($hsql);
		}
		$_result = array();
		//��ȡ�����Ϣ
		$sql = "select p1.* ,p2.* from `{borrow}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id  $_sql ";
		$result = $mysql->db_fetch_array($sql);
		$result['borrow_end_status'] = 0;
		if ($result['borrow_end_time']<time()){
			$result['borrow_end_status'] = 1;
		}
	
		$result['borrow_other_time'] = $result['borrow_end_time']-time();
		//��ӻ�����Ϣ��ʼ
		
		//����ÿ�»�����
		$_equal["account"] = $result["account"];
		$_equal["period"] = $result["borrow_period"];
		$_equal["apr"] = $result["borrow_apr"];
		$_equal["style"] = $result["borrow_style"];
		$_equal["type"] = "all";
		$equal_result = EqualInterest($_equal);
		$result["borrow_repay_month_account"] = $equal_result['repay_month'];
		$result["acount_all"] = $equal_result['account_total'];
		$_equal["account"] = "100";
		$equal_result = EqualInterest($_equal);
		$result["borrow_100_interest"] = $equal_result['interest_total'];
		//check_wait = �����
		//verify_false = ���ʧ��
		//repay_now = ������
		//repay_yes = �ѻ���
		//reverify_false = ����ʧ��
		//cancel = ����
		//vouch_now = ���ϵ���
		//valid_yes = �ѵ���
		//reverify = ������
		//tender_now = ����Ͷ��
		if ($result['status']==0){
			if ($result['borrow_end_status']==1){
				$borrow_type_nid = "valid_yes";
			}else{
				$borrow_type_nid = "check_wait";
			}
		}elseif ($result['status']==2){
			$borrow_type_nid = "verify_false";
		}elseif ($result['status']==3){
			if ($result['repay_account_wait']==0.00){
				$borrow_type_nid = "repay_yes";
			}else{
				$borrow_type_nid = "repay_now";
			}
		}elseif ($result['status']==4){
			$borrow_type_nid = "reverify_false";
		}elseif ($result['status']==5){
			$borrow_type_nid = "cancel";
		}elseif ($result['status']==1){
			if ($result['vouch_status']==1 && $result['vouch_account_wait']!=0){
				$borrow_type_nid = "vouch_now";
			}else{
				if ($result['borrow_account_wait']==0){
					$borrow_type_nid = "reverify";
				}else{
					$borrow_type_nid = "tender_now";
				}
			}
		}
		$result['borrow_type_nid'] = $borrow_type_nid;
		$user_id = $result['user_id'];
		$_result['borrow'] = $result;
		
		//��ȡ�û�������Ϣ
		$sql = "select * from `{users_info}` where user_id='{$user_id}'";
		$_result['user_info'] = $mysql->db_fetch_array($sql);
		
		
		//��ȡ�û���������
		$sql = "select * from `{rating_info}` where user_id='{$user_id}'";
		$_result['rating_info'] = $mysql->db_fetch_array($sql);
		
		//��ȡ���ͳ��
		$_result['borrow_count'] = self::GetBorrowCount(array("user_id"=>$user_id));
		
		//�û�����
		$_user_id = array("user_id"=>$user_id);
		$_result['borrow_credit'] = self::GetBorrowCredit($_user_id);
		
		return $_result;
	}
	
	
	/**
	 * 3��������
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function Verify($data = array()){
		global $mysql,$MsgInfo,$_G;
		$sql = "select borrow_nid,status,`name`,borrow_valid_time,user_id,is_Seconds,borrow_apr,account,is_flow from `{borrow}` where borrow_nid='{$data['borrow_nid']}'";
		$result = $mysql->db_fetch_array($sql);
		
		//�жϽ����Ƿ����
		if ($result==false){
			return "borrow_not_exiest";
		}else{
			$borrow_url = "<a href=/invest/a{$result['borrow_nid']}.html target=_blank>{$result['name']}</a>";
		}
		
		
		
		//�жϽ���Ƿ��Ѿ�ͨ������Ҳֻ��״̬0�ſ��Խ��г���
		if($result['status']!=0){
			return "borrow_verify_error";
		}
		
		//����ͳ����Ϣ
		self::UpdateBorrowCount(array("user_id"=>$result['user_id'],"borrow_times"=>1));
		
		
		if($data['status']==1){
			$status=1;
		}else{
		
					//��귵��
		//echo $result['is_Seconds'];
			if($result['is_Seconds']==1){
		$log_info["user_id"] = $result['user_id'];//�����û�id
		$moeSeconds=round(($result['account']/100*$result['borrow_apr'])/12,2);
					$log_info["nid"] = "borrow_success_manage_".time()."_".$mysql->db_insert_id();//������
					$log_info["money"] = 0;//�������
					$log_info["income"] = 0;//����
					$log_info["expend"] = 0;//֧��
					$log_info["balance_cash"] = +$moeSeconds;//�����ֽ��
					$log_info["balance_frost"] = 0;//�������ֽ��
					$log_info["frost"] = -$moeSeconds;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "fengxianchi_borrow";//����
					$log_info["to_userid"] = 0;//����˭
					$log_info["remark"] =  "������ʧ�ܣ��������ʱԤ�ȵ渶��Ϣ{$moeSeconds}Ԫ��";
					accountClass::AddLog($log_info);
		}
		
			$status = 2;
			$remind['nid'] = "verify_false";
			$remind['receive_userid'] = $result['user_id'];
			$remind['article_id'] = $result['borrow_nid'];
			$remind['code'] = "borrow";
			$remind['title'] = "����ʧ��";
			$remind['content'] = "���Ľ���[{$borrow_url}]��".date("Y-m-d",time())."����ʧ�ܡ�";
			remindClass::sendRemind($remind);
			$result = self::GetTenderList(array("borrow_nid"=>$result['borrow_nid'],"limit"=>"all"));
			foreach ($result as $key => $value){
				$remind['nid'] = "tender_false";
				$remind['code'] = "borrow";
				$remind['article_id'] = $value['id'];
				$remind['receive_userid'] = $value['user_id'];
				$remind['title'] = "����ʧ��";
				$remind['content'] = "����Ͷ��[{$borrow_url}]��".date("Y-m-d",time())."����ʧ�ܡ�";
			}
		}
		
		$borrow_end_time = $result['borrow_valid_time']*60*60*24+time();
		
		//�޸���Ӧ����Ϣ
		$sql = "update `{borrow}` set verify_time='".time()."',verify_userid='{$_G['user_id']}',verify_remark='{$data['verify_remark']}',recommend='{$data['recommend']}',borrow_end_time='{$borrow_end_time}',status={$status},borrow_status='{$data['status']}' where  borrow_nid='{$data['borrow_nid']}' ";
		$mysql->db_query($sql);
		
		
		//������ͨ����������û�������¼
		if ($data['status']==1){
			$user_log["user_id"] = $_G['user_id'];
			$user_log["code"] = "borrow";
			$user_log["type"] = "borrow";
			$user_log["operating"] = "verify";
			$user_log["article_id"] = $data['borrow_nid'];
			$user_log["result"] = $result>0?1:0;
			$user_log["content"] =  str_replace(array('#borrow_url#'), array($borrow_url), $MsgInfo["borrow_verify_user_msg"]);
			usersClass::AddUsersLog($user_log);	
		}
		
		//�Զ�Ͷ�����
		$res =autoClass::AutoTender(array("borrow_nid"=>$result['borrow_nid']));
		//��겻����Ͷ�꣬1==2 �ر��Զ�Ͷ��
		if ($res != false && $result['is_flow']!=1 && ($result['is_Seconds']!=1 || $_G['system']['con_is_Seconds_auto']==1) && 1==$_G['system']['con_tender_auto']){
			foreach ($res as  $key => $value){
				$_tender['borrow_nid'] = $result['borrow_nid'];
				$_tender['user_id'] = $key;
				$_tender['account'] = $value;
				$_tender['contents'] = "�Զ�Ͷ��";
				$_tender['status'] = 0;
				$_tender['auto_status'] = 1;
				$_tender['nid'] = "tender_".$key.time().rand(10,99);//������
				$_result = self::AddTender($_tender);
				$sql = "insert into `{borrow_autolog}` set borrow_nid='{$result['borrow_nid']}',user_id='{$key}',account='{$value}',remark='{$_result}',addtime='".time()."',addip='".ip_address()."'";
				$mysql->db_query($sql);
				$user_log["user_id"] = $_tender['user_id'];
				$user_log["code"] = "tender";
				$user_log["type"] = "tender";
				$user_log["operating"] = "auto_tender";
				$user_log["article_id"] = $_tender['user_id'];
				$user_log["result"] = 1;
				$user_log["content"] = date("Y-m-d H:i:s")."�Զ�Ͷ��[{$borrow_url}]�ɹ�,���Ϊ{$_tender['account']}";
				usersClass::AddUsersLog($user_log);	
			}
		}
        return $data['borrow_nid'];
	}
	
	/**
	 * 5��Ͷ���б�
	 *
	 * @return Array
	 */
	function GetTenderList($data = array()){
		global $mysql;
		
		$_sql = "where 1=1 ";	
		
		//�ж��û�id
		if (IsExiest($data['user_id']) != false){
			$_sql .= " and p1.user_id = {$data['user_id']}";
		}
		
		//�жϽ���û�
		if (IsExiest($data['borrow_userid']) != false){
			$_sql .= " and p3.user_id = {$data['borrow_userid']}";
		}
		
		//�ѵ��û���
		if (IsExiest($data['username']) != false){
			$_sql .= " and p2.username like '%{$data['username']}%'";
		}
		
		//�����������
		if (IsExiest($data['borrow_status']) != false){
			$_sql .= " and p3.`status` = '{$data['borrow_status']}'";
		}
		
		if ($data['change_status']!=""){
			$_sql .= " and p1.`change_status` = '{$data['change_status']}'";
		}
		//�����������
		if (IsExiest($data['borrow_name']) != false){
			$_sql .= " and p3.`name` like '%".urldecode($data['borrow_name'])."%'";
		}
		//�����������
		if (IsExiest($data['borrow_nid']) != false){
			$_sql .= " and p3.`borrow_nid` = '{$data['borrow_nid']}'";
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
		
		//�жϽ��״̬
		if (IsExiest($data['status'])!=""){
			$_sql .= " and p1.status in ({$data['status']})";
		}
		//�ж��Ƿ񵣱����
		if (IsExiest($data['vouch_status'])!=""){
			$_sql .= " and p3.vouch_status in ({$data['vouch_status']})";
		}
		
		//�������
		if (IsExiest($data['borrow_period'])!=""){
			$_sql .= " and p3.borrow_period = {$data['borrow_period']}";
		}
		
		//������
		if (IsExiest($data['flag'])!=""){
			$_sql .= " and p3.flag = {$data['flag']}";
		}
		
		//�����;
		if (IsExiest($data['borrow_use']) !=""){
			$_sql .= " and p3.borrow_use in ({$data['borrow_use']})";
		}
		
		//����û�����
		if (IsExiest($data['borrow_usertype']) !=""){
			$_sql .= " and p3.borrow_usertype = '{$data['borrow_usertype']}'";
		}
		
		
		//���
		if (IsExiest($data['borrow_style']) ){
			$_sql .= " and p3.borrow_style in ({$data['borrow_style']})";
		}
		
		//���Ȩ��
		if (IsExiest($data['account1'])!=""){
			$_sql .= " and p1.account >= {$data['account1']}";
		}
		if (IsExiest($data['account2'])!=""){
			$_sql .= " and p1.account <= {$data['account2']}";
		}
		
		//����
		$_order = " order by p1.id desc ";
	
		$_select = " p1.*,p2.username,p3.name as borrow_name,p3.account as borrow_account,p4.username as borrow_username,p3.repay_account_wait as borrow_account_wait_all,p3.repay_last_time,p3.repay_account_interest_wait as borrow_interest_wait_all,p4.user_id as borrow_userid,p3.borrow_apr,p3.borrow_period,p3.borrow_account_scale,p5.credits";
		$sql = "select SELECT from `{borrow_tender}` as p1 
				 left join `{users}` as p2 on p1.user_id=p2.user_id
				 left join `{borrow}` as p3 on p1.borrow_nid=p3.borrow_nid
				 left join `{users}` as p4 on p4.user_id=p3.user_id
				 left join `{credit}` as p5 on p5.user_id=p3.user_id
				 left join `{borrow_change}` as p6 on p1.id=p6.tender_id
				 SQL ORDER LIMIT
				";
		//�Ƿ���ʾȫ������Ϣ
		if (IsExiest($data['limit'])!=false){
			if ($data['limit'] != "all"){ $_limit = "  limit ".$data['limit']; }
			return $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $sql));
		}			 
		
		//�ж��ܵ�����
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array('count(1) as num', $_sql,'', ''), $sql));
		$total = intval($row['num']);
		$account_tender=0;
		$recover_account_interest=0;
		//��ҳ���ؽ��
		$data['page'] = !IsExiest($data['page'])?1:$data['page'];
		$data['epage'] = !IsExiest($data['epage'])?10:$data['epage'];
		
		$total_page = ceil($total / $data['epage']);
		$_limit = " limit ".($data['epage'] * ($data['page'] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		foreach ($list as $key => $value){
		
		
		        $account_tender=$account_tender+$value['account_tender'];
				$recover_account_interest=$recover_account_interest+$value['recover_account_interest'];
			$repaysql="select * from `{borrow_repay}` where repay_time<".time()." and repay_status=0 and borrow_nid={$value['borrow_nid']}";
			$repayresult=$mysql->db_fetch_array($repaysql);
			if ($repayresult==true){
				$list[$key]['change_no']=1;
			}
			$latesql="select sum(late_interest) as all_interest from `{borrow_repay}` where borrow_nid={$value['borrow_nid']}";
			$late=$mysql->db_fetch_array($latesql);
			$list[$key]['late_interest'] = $late['all_interest'];
			$list[$key]["credit"] = self::GetBorrowCredit(array("user_id"=>$value['user_id']));
			$recoversql="select count(1) as num from `{borrow_repay}` where borrow_nid={$value['borrow_nid']} and (repay_status=1 or repay_web=1)";
			$recoverresult=$mysql->db_fetch_array($recoversql);
			$list[$key]['norepay_num'] = $value['borrow_period'] - $recoverresult['num'];
			$list[$key]['repay_num'] = $recoverresult['num'];
			 //$list[$key]['username'] = mb_substr($value['username'], 0, 1, 'gb2312')."***";
			$chsql="select status,buy_time from `{borrow_change}` where tender_id={$value['id']}";
			$chresult=$mysql->db_fetch_array($chsql);
			if ($chresult['status']==1){
				$recsql="select count(1) as count_all,
				sum(recover_account_yes) as recover_account_yes_all,
				sum(recover_interest_yes) as recover_interest_yes_all
				from `{borrow_recover}` where user_id={$value['user_id']} and borrow_nid={$value['borrow_nid']} and recover_yestime<{$chresult['buy_time']} and tender_id={$value['id']}";
				$recresult=$mysql->db_fetch_array($recsql);
				$list[$key]["recover_interest_yes_all"] = $recresult['recover_interest_yes_all'];
				$list[$key]["recover_account_yes_all"] = $recresult['recover_account_yes_all'];
				$list[$key]["count_all"] = $recresult['count_all'];
				
				
			}
		}
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'recover_account_interest'=>$recover_account_interest,'account_tender'=>$account_tender,'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		
		return $result;
	}
	
	
	
	/**
	 * 6,�鿴Ͷ�ʱ� 
	 *
	 * @param Array $data = array("id"=>"Ͷ�����","tender_nid"=>"Ͷ�ʱ�ʶ��");
	 * @return Array
	 */
	public static function GetTenderOne($data = array()){
		global $mysql;
		$_sql = "where 1=1 ";
		
		if (IsExiest($data['id'])!=""){
			$_sql .= " and  p1.id = '{$data['id']}' ";
		}
		
		if (IsExiest($data['tender_id'])!=""){
			$_sql .= " and  p1.tender_id = '{$data['tender_id']}' ";
		}
		
		$_select = " p1.*,p2.username,p3.name as borrow_name,p3.account as borrow_account,p3.borrow_period,p3.borrow_style,p3.borrow_use,p3.borrow_flag,p3.borrow_apr";
		$sql = "select {$_select} from `{borrow_tender}` as p1 
				 left join `{users}` as p2 on p1.user_id=p2.user_id
				 left join `{borrow}` as p3 on p1.borrow_nid=p3.borrow_nid
				 {$_sql}";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "borrow_tender_not_exiest";
		return $result;
	}
	
	
	
	/**
	 * 7,Ͷ�ʳ�����ֻҪ������Ͷ���˲���Ͷ������¿����ֶ��ĳ��أ����������һ���� 
	 *
	 * @param Array $data = array("id"=>"Ͷ�����","tender_nid"=>"Ͷ�ʱ�ʶ��");
	 * @return Array
	 */
	public static function CancelTender($data = array()){
		global $mysql;
		$sql = "select * from `{borrow_tender}` where tender_nid='{$data['tender_nid']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "borrow_tender_not_exiest";
		if ($result['tender_status']>0) return "borrow_tender_verify_yes";
		
		$sql = "update `{borrow_tender}` set status=0 where tender_nid='{$data['tender_nid']}'";
		$mysql->db_query($sql);
		
		
		return $data['tender_nid'];
	}
	
	//7.1Ͷ�ʳ���
	public static function Cancel($data = array()){
		global $mysql,$MsgInfo;
		$_sql = " where 1=1 ";
		if (IsExiest($data['borrow_nid'])!=false){
			$_sql .= " and borrow_nid='{$data['borrow_nid']}'";
		}else{
			return "borrow_nid_empty";
		}
		
		$borrow_nid = $data['borrow_nid'];
		
		
	
		
		if (IsExiest($data['user_id'])!=""){
			$_sql .= " and user_id={$data['user_id']} ";
		}
		
		$sql = "select `name`,borrow_account_scale,borrow_nid,status,vouch_status,user_id,account,borrow_apr,is_Seconds from `{borrow}` $_sql";
		$result = $mysql->db_fetch_array($sql);
		if ($result["status"]==5) return "borrow_cancel_has" ;
		if ($result["status"]!=1 && $result["status"]!=0) return "borrow_cancel_error" ;
		if ($result["tender_times"]>0) return "borrow_cancel_yestender";
		$vouch_status = $result['vouch_status'];
		
		
	
		
		$remind['nid'] = "verify_false";
		$remind['receive_userid'] = $result['user_id'];
		$remind['article_id'] = $result['borrow_nid'];
		$remind['code'] = "borrow";
		$remind['title'] = "����";
		$remind['content'] = "���Ľ���[<a href={$_G['weburl']}/invest/a{$result['borrow_nid']}.html target=_blank>{$result['name']}</a>]��".date("Y-m-d",time())."������";
		remindClass::sendRemind($remind);
		
		
		if ($data['cancel_status']!=""){
			$sql = "update `{borrow}` set cancel_verify_remark='{$data['cancel_verify_remark']}',cancel_verify_time='".time()."',cancel_verify_ip='".ip_address()."',cancel_status='{$data['cancel_status']}' where borrow_nid = '{$data['id']}'";
			$mysql->db_query($sql);
			if ($data['cancel_status']==3){
				return "borrow_cancel_verify_false";
			}
		}
		//��귵��
		//echo $result['is_Seconds'];
		
			if (IsExiest($data['user_id'])!=""){
			if($result['is_Seconds']==1){
		$log_info["user_id"] = $data["user_id"];//�����û�id
		$moeSeconds=round(($result['account']/100*$result['borrow_apr'])/12,2);
					$log_info["nid"] = "borrow_success_manage_".time()."_".$mysql->db_insert_id();//������
					$log_info["money"] = $moeSeconds;//�������
					$log_info["income"] = 0;//����
					$log_info["expend"] = 0;//֧��
					$log_info["balance_cash"] = +$moeSeconds;//�����ֽ��
					$log_info["balance_frost"] = 0;//�������ֽ��
					$log_info["frost"] = -$moeSeconds;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "fengxianchi_borrow";//����
					$log_info["to_userid"] = 0;//����˭
					$log_info["remark"] =  "����������ʱԤ�ȵ渶��Ϣ{$moeSeconds}Ԫ��";
					accountClass::AddLog($log_info);
		}
		
		
		}else{
			if($result['is_Seconds']==1){
		$log_info["user_id"] = $result["user_id"];//�����û�id
		$moeSeconds=round(($result['account']/100*$result['borrow_apr'])/12,2);
					$log_info["nid"] = "borrow_success_manage_".time()."_".$mysql->db_insert_id();//������
					$log_info["money"] = 0;//�������
					$log_info["income"] = 0;//����
					$log_info["expend"] = 0;//֧��
					$log_info["balance_cash"] = +$moeSeconds;//�����ֽ��
					$log_info["balance_frost"] = 0;//�������ֽ��
					$log_info["frost"] = -$moeSeconds;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "fengxianchi_borrow";//����
					$log_info["to_userid"] = 0;//����˭
					$log_info["remark"] =  "�ñ걻����Ա���꣬�������ʱԤ�ȵ渶��Ϣ{$moeSeconds}Ԫ��";
					accountClass::AddLog($log_info);
					
					}
		
		
		}
		
		$borrow_url = "<a href={$_G['weburl']}/invest/a{$result['borrow_nid']}.html target=_blank>{$result['name']}</a>";
		$sql = "update  `{borrow}`  set status=5,reverify_time='".time()."',reverify_remark='�û�����' $_sql";
		$result = $mysql->db_query($sql);
		if ($result==false){
			return "borrow_cancel_false";
		}
			
		
		//��17����������Ĳ���
		if ($vouch_status==1){
			
			$result = self::GetVouchList(array("limit"=>"all","borrow_nid"=>$borrow_nid));
			if ($result!=""){
				foreach ($result as $key => $value){
				
					//1,���ȸ��µ�����״̬Ϊ2����ʾ����ʧ��
					$vouch_account = $value['account'];
					$vouch_userid = $value['user_id'];
					$vouch_id = $value['id'];
					$vouch_award = $value['award_account'];
					
					$sql = "update `{borrow_vouch}` set status=2 where id = '{$vouch_id}'";
					
					$mysql -> db_query($sql);
					
					//2,Ͷ�ʵ����˵ĵ�����ȷ���
					//��Ӷ�ȼ�¼
					//�۳��������
					$_data["user_id"] = $vouch_userid;
					$_data["amount_type"] = "vouch_tender";
					$_data["type"] = "borrow_false";
					$_data["oprate"] = "add";
					$_data["nid"] = "borrow_false_vouch_".$vouch_userid."_".$borrow_nid.$value["id"];
					$_data["account"] = $vouch_account;
					$_data["remark"] = "�������[{$borrow_url}]���ʧ�ܽ�����ȷ���";//type ���������� 
					borrowClass::AddAmountLog($_data);
		
				}	
			}
		}
				
		//��������Ͷ���ߵĽ�Ǯ��
		$result = self::GetTenderList(array("borrow_nid"=>$borrow_nid,"limit"=>"all"));
		foreach ($result as $key => $value){
			if ($value['status']==0){
				
				//ͬʱ����Ͷ���״̬Ϊ3
				$sql = "update `{borrow_tender}` set status=3 where id = '{$value['id']}'";
				$mysql->db_query($sql);
				
				//�����ʽ����
				$log_info["user_id"] = $value['user_id'];//�����û�id
				$log_info["nid"] = "tender_user_cancel_".$value['user_id']."_".$borrow_nid.$value['id'];//������
				$log_info["money"] = $value['account'];//�������
				$log_info["income"] = 0;//����
				$log_info["expend"] = 0;//֧��
				$log_info["balance_cash"] = 0;//�����ֽ��
				$log_info["balance_frost"] = $value['account'];//�������ֽ��
				$log_info["frost"] = -$value['account'];//������
				$log_info["await"] = 0;//���ս��
				$log_info["type"] = "tender_user_cancel";//����
				$log_info["to_userid"] = $data['user_id'];//����˭
				$log_info["remark"] = str_replace("#borrow_url#",$borrow_url,$MsgInfo["account_tender_user_cancel"]);
				$result = accountClass::AddLog($log_info);
				
				
				//��������
				$remind['nid'] = "tender_user_cancel";
				$remind['code'] = "borrow";
				$remind['article_id'] = $data['id'];
				$remind['receive_userid'] = $value['user_id'];
				$remind['title'] = str_replace("#borrow_name#",$value['borrow_name'],$MsgInfo["remind_tender_user_cancel_title"]);
				$remind['content'] = str_replace("#borrow_url#",$borrow_url,$MsgInfo["remind_tender_user_cancel_contents"]);
				
				remindClass::sendRemind($remind);
				
				//����ͳ����Ϣ
				self::UpdateBorrowCount(array("user_id"=>$value['user_id'],"tender_frost_account"=>-$value['account']));
					
			}
		}
		
		
		
		return $data['borrow_nid'];
	}
	/**
	 * ���Ͷ��
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	public static function AddTender($data = array()){
		global $mysql,$_G;
		
		//�ж�id�Ƿ�Ϊ��
		if (IsExiest($data['borrow_nid']) ==""){
			return "borrow_nid_empty";
		}		
		
		//�ж��Ƿ���ڽ���
		$borrow_result = borrowClass::GetOne(array("borrow_nid"=>$data['borrow_nid']));
		
		if (!is_array($borrow_result)){
			return $borrow_result;
		}
			if ($borrow_result["Second_limit_money"]<$data['account'] && $borrow_result["Second_limit_money"]!=0 && time()-$borrow_result['verify_time']<=1800){
			return "borrow_Second_limit_money";
			}
			//���ֻ�ܱ�Ͷһ�θĳ�ȫ����ֻ��Ͷһ��
			//if ($borrow_result["is_Seconds"]==1){
			
			$dataS['borrow_nid']=$data['borrow_nid'];
			$dataS['user_id']=$data['user_id'];
			$is_Second=borrowClass::GetSecond($dataS);
			if ($is_Second==1  && time()-$borrow_result['verify_time']<=1800 && $_G['system']['con_bid_limit']==1) {
			return "borrow_Second_er";
			} 
			
			
			
		//}
		
		if ($borrow_result["is_Seconds"]==1 && $is_Second==1 ){
		return "borrow_Second_er";
		}
		
		
		
		
			   
			   
			   
		   if ($is_Second==1 && $borrow_result["is_Seconds"]!=1 && $_G['system']['con_is_Seconds_limit']==1) {
			return "borrow_Second_er";
			} 
		
		
		if ($borrow_result["user_id"]==$data['user_id']){
			return "borrow_tender_user_id_re";
		}
		
		//�ж��Ƿ��Ѿ�Ͷ������
		if ($borrow_result['borrow_account_yes']>=$borrow_result['account']){
			return "tender_full_yes";
		}
		
		//�ж��Ƿ��Ѿ����
		if ($borrow_result['verify_time'] == "" || $borrow_result['status'] != 1){
			return "tender_verify_no";
		}
		
		//�ж��Ƿ��Ѿ�����
		if ($borrow_result['verify_time'] + $borrow_result['borrow_valid_time']*60*60*24<time()){
			return "tender_late_yes";
		}
		
		//�жϽ���Ƿ���ȷ
		if(!is_numeric($data['account'])){
			return "tender_money_error";
		}
		
	
		//�ж��Ƿ�С��Ͷ�ʽ��
		if($data['account']<$borrow_result['tender_account_min']){
			return "��С��Ͷ�ʽ���С��{$borrow_result['tender_account_min']}��";
		}
		
		
		//�ж��Ƿ����Ͷ�ʽ��
		if($data['account']>$borrow_result['Second_limit_money'] && $borrow_result['Second_limit_money']>0){
			return "����Ͷ�ʽ��ܴ���{$borrow_result['Second_limit_money']}��";
		}
		
		
		/*//�ж��Ƿ����Ͷ�ʽ��
		if($data['account']>$borrow_result['account']*0.5){
			return "����Ͷ�ʽ��ܴ���".($borrow_result['account']*0.5)."��";
		}*/
		
		
		//����ǵ����꣬���жϵ����Ƿ������
		if($borrow_result['vouch_status']==1 && $borrow_result['vouch_account']!=$borrow_result['vouch_account_yes']){
			return "tender_vouch_full_no";
		}
		
		//�ж�Ͷ�ʵ��ܽ��
		$tender_account_all = borrowClass::GetUserTenderAccount(array("user_id"=>$data["user_id"],"borrow_nid"=>$data['borrow_nid']));
		
		if ($tender_account_all+$data['account']>$borrow_result['tender_account_max'] && $borrow_result['tender_account_max']>0){
			$tender_account = $borrow_result['tender_account_max']-$tender_account_all;
			return"���Ѿ�Ͷ����{$tender_account_all},���Ͷ���ܽ��ܴ���{$borrow_result['tender_account_max']}������໹��Ͷ��{$tender_account}";
		}else{
			$data['account_tender'] = $data['account'];
			
			//�ж�Ͷ�ʵĽ���Ƿ���ڴ���Ľ��
			if ($borrow_result['borrow_account_wait']<$data['account']){
				$data['account'] = $borrow_result['borrow_account_wait'];
				return "tender_money_no_h";
			}
			//�жϽ���Ƿ���һ����
			$account_result =  accountClass::GetAccountUsers(array("user_id"=>$data['user_id']));//��ȡ��ǰ�û������
			if ($account_result['balance']<$data['account']){
				return "tender_money_no";
			}
		}
		
		
		
		//�д��ղ���Ͷ�����
			   if($account_result['await']<=$_G['system']['con_seconds_await_acc'] && $_G['system']['con_seconds_await']==1  && $borrow_result["is_Seconds"]==1)
			   {
			   return "borrow_Seconds_await_no";
			   }
			   
			   
		//�ж��Ƿ���������
		if ($borrow_result['tender_friends']!=""){
			$_tender_friends = explode("|",$borrow_result['tender_friends']);
			$sql = "select username from {users} where user_id='{$data['user_id']}'";
			$result = $mysql->db_fetch_array($sql);
			if (!in_array($result['username'],$_tender_friends)){
				return "tender_friends_error";
			}
		}
		
		if ($_G['system']['con_repay_no']==0){
			$moresql="select * from `{borrow}` where user_id={$data['user_id']} and repay_account_wait!=0";
			$more=$mysql->db_fetch_array($moresql);
			if ($more==true){
				return "borrow_no_more";
			}
		}else{
			$acc=$data['account']*2;
			$moresql="select sum(repay_account_wait) as account_all from `{borrow}` where user_id={$data['user_id']}";
			$more=$mysql->db_fetch_array($moresql);
			if ($more['account_all']<$acc && $more['account_all']!=0){
				return "borrow_no_more";
			}
		}
		
				
		//���Ͷ�ʵĽ����Ϣ
		$sql = "insert into `{borrow_tender}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		 $mysql->db_query($sql);
		 $insert_id=$mysql->db_insert_id();
         if($insert_id>0)
		 {
		//���½�����Ϣ
		$sql = "update  `{borrow}`  set borrow_account_yes=borrow_account_yes+{$data['account']},borrow_account_wait=borrow_account_wait-{$data['account']},borrow_account_scale=(borrow_account_yes/account)*100,tender_times=tender_times+1  where borrow_nid='{$data['borrow_nid']}'";
		$mysql->db_query($sql);//�����Ѿ�Ͷ���Ǯ
		
		
		//Ͷ�����
		$borrow_url = "<a href=/invest/a{$data['borrow_nid']}.html target=_blank>{$borrow_result['name']}</a>";
		$log_info["user_id"] = $data["user_id"];//�����û�id
		$log_info["nid"] = "tender_frost_".$data['user_id']."_".time();
		$log_info["money"] = $data['account'];//�������
		$log_info["income"] = 0;//����
		$log_info["expend"] = 0;//֧��
		$log_info["balance_cash"] = 0;//�����ֽ��
		$log_info["balance_frost"] = -$data['account'];//�������ֽ��
		$log_info["frost"] = $data['account'];//������
		$log_info["await"] = 0;//���ս��
		$log_info["type"] = "tender";//����
		$log_info["to_userid"] = $borrow_result['user_id'];//����˭
		if ($data['auto_status']==1){
			$log_info["remark"] = "�Զ�Ͷ��[{$borrow_url}]�������ʽ�";//��ע
		}else{
			$log_info["remark"] = "Ͷ��[{$borrow_url}]�������ʽ�";//��ע
		}
		accountClass::AddLog($log_info);
		
			  if($borrow_result["is_flow"]!=1){
		//����ͳ����Ϣ
		        self::UpdateBorrowCount(array("user_id"=>$data['user_id'],"tender_times"=>1,"tender_account"=>$data['account'],"tender_frost_account"=>$data['account']));
		      }
		
		
          }
		 
		 
		return $insert_id;
		
			//�ж�Ͷ�ʵĽ���Ƿ���ڴ���Ľ��
			if ($borrow_result['borrow_account_wait']<=$data['account']){
			if ($borrow_result['is_Seconds']==1){
			//$dataS = array();
			//echo $data['borrow_nid'];
				//$dataS['borrow_nid']=$data['borrow_nid'];
			//	$dataS['status']=3;
				//$dataS['reverify_remark']="����Զ�ͨ��";
				
				//$resultS = borrowClass::Reverify($dataS);
			////echo $resultS;
			//	$dataP = array();
			//	$dataP['borrow_nid']=$data['borrow_nid'];
			//	$dataP['user_id']=$borrow_result['user_id'];
			// $BorrowRepayID=borrowClass::GetBorrowRepaytt($dataP);
			// //echo $BorrowRepayID;
			// $dataT = array();
				//	$dataT['borrow_nid'] = $data['borrow_nid'];
		//$dataT['id'] = $BorrowRepayID;
		//$dataT['user_id'] = $borrow_result['user_id'];
		//$resultT =  borrowClass::BorrowRepay($dataT);//��ȡ��ǰ�û������
			}
			}
		
		
		
	}
	
	//�������
	public static function Reverify($data = array()){
		global $mysql,$_G;
		//�ж�nid�Ƿ��Ѿ�����
		if (IsExiest($data["borrow_nid"])=="") return "borrow_nid_empty";
		$borrow_nid = $data["borrow_nid"];
		//��ȡ����������Ϣ
		$sql = "select p1.*,p2.username  from `{borrow}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id where p1.borrow_nid='{$data['borrow_nid']}'";
		$borrow_result = $mysql->db_fetch_array($sql);
		
		$status = $data['status'];
		
		$borrow_status = $borrow_result["status"];
		$borrow_style = $borrow_result["borrow_style"];
		
		//�ж��Ƿ��Ѿ����
		if ($borrow_status!=1){
			return "borrow_fullcheck_error";
		}
		
		//�ж��Ƿ���ת��
		if ($borrow_result["is_flow"]==1){
			return "borrow_is_flow_error";
		}
		
		//�ж��Ƿ��Ѿ����
		if ($borrow_result['borrow_full_status']==1){
			return "borrow_fullcheck_yes";
		}
		
		//�ж��Ƿ�����
		if ($borrow_result['borrow_part_status']!=1 && $borrow_result['borrow_account_yes']!=$borrow_result['account']){
			return "borrow_not_full";
		}
		
		
		//��һ������������ʱ�Ĳ�����
		$sql = " update `{borrow}` set reverify_userid='{$data['reverify_userid']}',reverify_remark='{$data['reverify_remark']}',reverify_time='".time()."',status='{$data['status']}' where borrow_nid='{$borrow_nid}'";
		 $mysql ->db_query($sql);
		 
		 
		//����������
		$borrow_apr=$borrow_result["borrow_apr"];//��Ϣ
		$is_Seconds=$borrow_result["is_Seconds"];//�Ƿ������
		$borrow_userid = $borrow_result["user_id"];//����û�id
		$borrow_username = $borrow_result["username"];//����û�id
		$borrow_account = $borrow_result["account"];//�����
		$borrow_period = $borrow_result["borrow_period"];//�������
		$borrow_name = $borrow_result["name"];//��� ����
		$borrow_cash_status = $borrow_result["cash_status"];//�Ƿ����ֱ�
		$borrow_url = html_entity_decode("<a href=/invest/a{$data['borrow_nid']}.html target=_blank style=color:blue>{$borrow_result['name']}</a>");//�����ַ
		
		
		if ($status == 3){
		
			
			//�ڶ�������������ʱ�Ĳ�����
			$sql = " update `{borrow}` set borrow_full_status='1' where borrow_nid='{$borrow_nid}'";
			$mysql ->db_query($sql);
			
			//������������ɹ����򽫻�����Ϣ���������ȥ
			$_equal["account"] = $borrow_result["account"];
			$_equal["period"] = $borrow_result["borrow_period"];
			$_equal["apr"] = $borrow_result["borrow_apr"];
			$_equal["style"] = $borrow_result["borrow_style"];
			$equal_result = EqualInterest($_equal);
			foreach ($equal_result as $key => $value){
				//��ֹ�ظ���ӻ�����Ϣ
				$sql = "select 1 from `{borrow_repay}` where user_id='{$borrow_userid}' and repay_period='{$key}' and borrow_nid='{$borrow_nid}'";
				$result = $mysql->db_fetch_array($sql);
				if ($result==false){
					$sql = "insert into `{borrow_repay}` set `addtime` = '".time()."',";
					$sql .= "`addip` = '".ip_address()."',user_id='{$borrow_userid}',status=1,`borrow_nid`='{$borrow_nid}',`repay_period`='{$key}',";
					$sql .= "`repay_time`='{$value['repay_time']}',`repay_account`='{$value['account_all']}',";
					$sql .= "`repay_interest`='{$value['account_interest']}',`repay_capital`='{$value['account_capital']}'";
					$mysql ->db_query($sql);
				}else{
					$sql = "update `{borrow_repay}` set `addtime` = '".time()."',";
					$sql .= "`addip` = '".ip_address()."',user_id='{$borrow_userid}',status=1,`borrow_nid`='{$borrow_nid}',`repay_period`='{$key}',";
					$sql .= "`repay_time`='{$value['repay_time']}',`repay_account`='{$value['account_all']}',";
					$sql .= "`repay_interest`='{$value['account_interest']}',`repay_capital`='{$value['account_capital']}'";
					$sql .= " where user_id='$borrow_userid' and repay_period='{$key}' and borrow_nid='{$borrow_nid}'";
					$mysql ->db_query($sql);
				}
			}
			$repay_times = count($equal_result);
			$_equal["type"] = "all";
			$equal_result = EqualInterest($_equal);
			$repay_all = $equal_result['account_total'];
			//��ӻ�����Ϣ����
			
			//��ʮ������������ܽ�����ӡ�
			$log_info["user_id"] = $borrow_userid;//�����û�id
			$log_info["nid"] = "borrow_success_".$borrow_nid;//������
			$log_info["money"] = $borrow_account;//�������
			$log_info["income"] = $borrow_account;//����
			$log_info["expend"] = 0;//֧��
			if ($borrow_result["borrow_style"]==5){
				$log_info["balance_cash"] = 0;//�����ֽ��
				$log_info["balance_frost"] = $borrow_account;//�������ֽ��
			}else{
				$log_info["balance_cash"] = $borrow_account;//�����ֽ��
				$log_info["balance_frost"] = 0;//�������ֽ��
			}
			$log_info["frost"] = 0;//������
			$log_info["await"] = 0;//���ս��
			$log_info["repay"] = $repay_all;//���ս��
			$log_info["type"] = "borrow_success";//����
			$log_info["to_userid"] = 0;//����˭
			$log_info["remark"] =  "ͨ��[{$borrow_url}]�赽�Ŀ�";
			accountClass::AddLog($log_info);
			
				
			//��ʮ������������ѣ� �����2%��һ�� ����ˣ�
			
			$UsersVip=usersClass::GetUsersVip(array("user_id"=>$borrow_userid));
				if ($UsersVip['status']==1){
					$borrow_fee = isset($_G['system']['con_borrow_success_fee'])?$_G['system']['con_borrow_success_fee']*0.01:0.02;
				}else{
					$borrow_fee = isset($_G['system']['con_borrow_success_vip_fee'])?$_G['system']['con_borrow_success_vip_fee']*0.01:0.02;
				}
			$log_info["user_id"] = $borrow_userid;//�����û�id
			$log_info["nid"] = "borrow_success_manage_".$borrow_nid.$borrow_userid;//������
			$fee_account = round($borrow_account*$borrow_fee,2);
			$log_info["money"] = $fee_account;//�������
			$log_info["income"] = 0;//����
			$log_info["expend"] = $fee_account;//֧��
			$log_info["balance_cash"] = -$fee_account;//�����ֽ��
			$log_info["balance_frost"] = 0;//�������ֽ��
			$log_info["frost"] = 0;//������
			$log_info["await"] = 0;//���ս��
			$log_info["type"] = "borrow_success_manage";//����
			$log_info["to_userid"] = 0;//����˭
			$log_info["remark"] =  "�ɹ����[{$borrow_url}]�ĳɽ���";
			accountClass::AddLog($log_info);
			
			//��ʮ�Ĳ����˺Ź���ѣ� �����0%��һ�� ����ˣ�
			$log_info["user_id"] = $borrow_userid;//�����û�id
			$log_info["nid"] = "borrow_success_account_".$borrow_nid.$borrow_userid;//������
			
			   if ($UsersVip['status']==1){
					$borrow_manage_fee = isset($_G['system']['con_borrow_manage_fee'])?$_G['system']['con_borrow_manage_fee']*0.01:0.003;
				}else{
					$borrow_manage_fee = isset($_G['system']['con_borrow_manage_vip_fee'])?$_G['system']['con_borrow_manage_vip_fee']*0.01:0.003;
				}
			
			$fee_account = round($borrow_account*$borrow_manage_fee*$borrow_period,2);
			$log_info["money"] = $fee_account;//�������
			$log_info["income"] = 0;//����
			$log_info["expend"] = $fee_account;//֧��
			$log_info["balance_cash"] = -$fee_account;//�����ֽ��
			$log_info["balance_frost"] = 0;//�������ֽ��
			$log_info["frost"] = 0;//������
			$log_info["await"] = 0;//���ս��
			$log_info["type"] = "borrow_success_account";//����
			$log_info["to_userid"] = 0;//����˭
			$log_info["remark"] =  "�ɹ����[{$borrow_url}]���˻������";
			accountClass::AddLog($log_info);
			
			
			//��ʮ�岽�����ճ�
			$result = creditClass::GetUserRank(array('user_id'=>$borrow_userid,"nid"=>"credit","code"=>"approve"));
			$log_info["user_id"] = $borrow_userid;//�����û�id
			$log_info["nid"] = "fengxianchi_".$borrow_nid.$borrow_userid;//������
//			$fee_account = round($borrow_account*$result['nid'],2);
			$fee_account = 0;
			$log_info["money"] = $fee_account;//�������
			$log_info["income"] = 0;//����
			$log_info["expend"] = $fee_account;//֧��
			$log_info["balance_cash"] = -$fee_account;//�����ֽ��
			$log_info["balance_frost"] = 0;//�������ֽ��
			$log_info["frost"] = 0;//������
			$log_info["await"] = 0;//���ս��
			$log_info["type"] = "fengxianchi_borrow";//����
			$log_info["to_userid"] = 0;//����˭
			$log_info["remark"] =  "�ɹ����[{$borrow_url}]�Ľ�����ճ�";
			accountClass::AddLog($log_info);
			
			//����ͳ����Ϣ
			self::UpdateBorrowCount(array("user_id"=>$borrow_userid,"borrow_success_times"=>1,"borrow_repay_times"=>$repay_times,"borrow_repay_wait_times"=>$repay_times,"borrow_account"=>$borrow_result["account"],"borrow_repay_account"=>$repay_all,"borrow_repay_wait"=>$repay_all,"borrow_repay_interest"=>$equal_result['interest_total'],"borrow_repay_interest_wait"=>$equal_result['interest_total'],"borrow_repay_capital"=>$equal_result['capital_total'],"borrow_repay_capital_wait"=>$equal_result['capital_total']));
			
			//���Ĳ�������ɹ������û�Ͷ�ʼ�����ϸ��
			$tender_result = self::GetTenderList(array("borrow_nid"=>$borrow_nid,"limit"=>"all"));
			foreach ($tender_result as $_key => $_value){
				
				$tender_id = $_value['id'];
				
				//����Ͷ���˵�״̬
				$sql = "update `{borrow_tender}` set status=1 where id={$tender_id}";
				$mysql->db_query($sql);
				
				//���Ͷ�ʵ��տ��¼
				$_equal["account"] = $_value['account'];
				$_equal["period"] = $borrow_result["borrow_period"];
				$_equal["apr"] = $borrow_result["borrow_apr"];
				$_equal["style"] = $borrow_result["borrow_style"];
				$_equal["type"] = "";
				$equal_result = EqualInterest($_equal);
				
				$tender_userid = $_value['user_id'];
				$tender_account = $_value['account'];
				
				foreach ($equal_result as $period_key => $value){
					$repay_month_account = $value['account_all'];
					//��ֹ�ظ���ӻ�����Ϣ
					$sql = "select 1 from `{borrow_recover}` where user_id='{$tender_userid}' and borrow_nid='{$borrow_nid}' and recover_period='{$period_key}' and tender_id='{$tender_id}'";
					$result = $mysql->db_fetch_array($sql);
					if ($result==false){
						$sql = "insert into `{borrow_recover}` set `addtime` = '".time()."',";
						$sql .= "`addip` = '".ip_address()."',user_id='{$tender_userid}',status=1,`borrow_nid`='{$borrow_nid}',`borrow_userid`='{$borrow_userid}',`tender_id`='{$tender_id}',`recover_period`='{$period_key}',";
						$sql .= "`recover_time`='{$value['repay_time']}',`recover_account`='{$value['account_all']}',";
						$sql .= "`recover_interest`='{$value['account_interest']}',`recover_capital`='{$value['account_capital']}'";
						$mysql ->db_query($sql);
					}else{
						$sql = "update `{borrow_recover}` set `addtime` = '".time()."',";
						$sql .= "`addip` = '".ip_address()."',user_id='{$tender_userid}',status=1,`borrow_nid`='{$borrow_nid}',`borrow_userid`='{$borrow_userid}',`tender_id`='{$tender_id}',`recover_period`='{$period_key}',";
						$sql .= "`recover_time`='{$value['repay_time']}',`recover_account`='{$value['account_all']}',";
						$sql .= "`recover_interest`='{$value['account_interest']}',`recover_capital`='{$value['account_capital']}'";
						$sql .= " where user_id='{$tender_userid}' and recover_period='{$period_key}' and borrow_nid='{$borrow_nid}' and tender_id='{$tender_id}'";
						$mysql ->db_query($sql);
					}
				}
				$recover_times = count($equal_result);
				//���岽,����Ͷ�ʱ����Ϣ
				$_equal["type"] = "all";
				$equal_result = EqualInterest($_equal);
				$recover_all = $equal_result['account_total'];
				$recover_interest_all = $equal_result['interest_total'];
				$recover_capital_all = $equal_result['capital_total'];
				$sql = "update `{borrow_tender}` set recover_account_all='{$equal_result['account_total']}',recover_account_interest='{$equal_result['interest_total']}',recover_account_wait='{$equal_result['account_total']}',recover_account_interest_wait='{$equal_result['interest_total']}',recover_account_capital_wait='{$equal_result['capital_total']}'  where id='{$tender_id}'";
				$mysql->db_query($sql);
				
				
				//������,�۳�Ͷ���˵��ʽ�
				$log_info["user_id"] = $tender_userid;//�����û�id
				$log_info["nid"] = "tender_success_".$borrow_nid.$tender_userid.$tender_id.$period_key;//������
				$log_info["money"] = $tender_account;//�������
				$log_info["income"] = 0;//����
				$log_info["expend"] = $tender_account;//֧��
				$log_info["balance_cash"] = 0;//�����ֽ��
				$log_info["balance_frost"] = 0;//�������ֽ��
				$log_info["frost"] = -$tender_account;//������
				$log_info["await"] = 0;//���ս��
				$log_info["type"] = "tender_success";//����
				$log_info["to_userid"] = $borrow_userid;//����˭
				$log_info["remark"] = "Ͷ��[{$borrow_url}]�ɹ�Ͷ�ʽ��۳�";
				accountClass::AddLog($log_info);
				
				//���߲�,��Ӵ��յĽ��
				$log_info["user_id"] = $tender_userid;//�����û�id
				$log_info["nid"] = "tender_success_frost_".$borrow_nid.$tender_userid.$tender_id.$period_key;//������
				$log_info["money"] = $recover_all;//�������
				$log_info["income"] = 0;//����
				$log_info["expend"] = 0;//֧��
				$log_info["balance_cash"] = 0;//�����ֽ��
				$log_info["balance_frost"] = 0;//�������ֽ��
				$log_info["frost"] = 0;//������
				$log_info["await"] = $recover_all;//���ս��
				$log_info["type"] = "tender_success_frost";//����
				$log_info["to_userid"] = $borrow_userid;//����˭
				$log_info["remark"] =  "Ͷ��[{$borrow_url}]�ɹ����ս������";
				accountClass::AddLog($log_info);
				
				
				
				
				//�ھŲ�,��������
				$remind['nid'] = "tender_success";
				
				$remind['receive_userid'] = $tender_userid;
				$remind['article_id'] = $borrow_nid;
				$remind['code'] = "borrow";
				$remind['title'] = "Ͷ��({$borrow_username})�ı�[<font color=red>{$borrow_name}</font>]������˳ɹ�";
				$remind['content'] = "����Ͷ�ʵı�[{$borrow_url}]��".date("Y-m-d",time())."�Ѿ����ͨ��";
				
				remindClass::sendRemind($remind);
				
				
				
			
				//�����û�������¼
				$user_log["user_id"] = $tender_userid;
				$user_log["code"] = "tender";
				$user_log["type"] = "tender_success";
				$user_log["operating"] = "tender";
				$user_log["article_id"] = $tender_userid;
				$user_log["result"] = 1;
				$user_log["content"] = "����[{$borrow_url}]ͨ���˸���,[<a href=/protocol/a{$data['borrow_nid']}.html target=_blank>����˴�</a>]�鿴Э����";
				usersClass::AddUsersLog($user_log);	
				
				
				//��ʮ��,Ͷ���ߵ����û�������
				/*$credit_log['user_id'] = $tender_userid;
				$credit_log['nid'] = "tender_success";
				$credit_log['code'] = "borrow";
				$credit_log['type'] = "tender";
				$credit_log['addtime'] = time();
				$credit_log['article_id'] =$tender_id;
				$credit_log['value'] = round($tender_account*0.01);
				$result = creditClass::ActionCreditLog($credit_log);*/
				
				//��ʮһ��������Ͷ���ƹ��˽��
				//��ȡͶ���˵Ķ���Ͷ���ƹ���
				$spreadsql="select * from `{spread_user}` where spread_userid={$tender_userid} and style=2 and type=3";
				$spread_result=$mysql->db_fetch_array($spreadsql);
				
				if ($spread_result==true){
					//��ȡ����Ͷ���ƹ��˵��������
					$feesql="select `task_fee` from `{spread_setting}` where type=4";
					$fee_result=$mysql->db_fetch_array($feesql);
					$tenderusername=usersClass::GetUsers(array("user_id"=>$tender_userid));
					$log_info["user_id"] = $spread_result['user_id'];//�ƹ�Ա
					$log_info["nid"] = "tender_spread_".$borrow_nid.$tender_userid.$spread_result['user_id'];//������
					$log_info["money"] = round($tender_account/100*$fee_result['task_fee'],2);//�������
					$log_info["income"] = $log_info["money"];//����
					$log_info["expend"] = 0;//֧��
					$log_info["balance_cash"] = $log_info["money"];//�����ֽ��
					$log_info["balance_frost"] = 0;//�������ֽ��
					$log_info["frost"] = 0;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "tender_spread";//����
					$log_info["to_userid"] = $spread_result['user_id'];//����˭
					$log_info["remark"] = "Ͷ���ƹ�ͻ�[{$tenderusername['username']}]Ͷ��[{$borrow_url}]�ɹ����õ��ƹ���ɣ�Ͷ�ʽ��{$tender_account}�������{$fee_result['task_fee']}%";
					accountClass::AddLog($log_info);
					
					$web['money']=$log_info["money"];
					$web['user_id']=$spread_result['user_id'];
					$web['nid']="other_spread_tender_".$spread_result['user_id']."_".time();
					$web['type']="other_spread_tender";
					$web['remark']="�ƹ�Ͷ�ʿͻ�[{$tenderusername['username']}]���{$log_info["money"]}����Ͷ���ƹ��";
					accountClass::AddAccountWeb($web);
				}
				
				//����ͳ����Ϣ
				//hummer modify 201309212356  ��ֹ��ת��2��ͳ��
				//if($borrow_result["is_flow"]!=1){
				self::UpdateBorrowCount(array("user_id"=>$tender_userid,"tender_success_times"=>1,"tender_success_account"=>$tender_account,"tender_frost_account"=>-$tender_account,"tender_recover_account"=>$recover_all,"tender_recover_wait"=>$recover_all,"tender_capital_account"=>$recover_capital_all,"tender_capital_wait"=>$recover_capital_all,"tender_interest_account"=>$recover_interest_all,"tender_interest_wait"=>$recover_interest_all,"tender_recover_times"=>$recover_times,"tender_recover_times_wait"=>$recover_times));
				//}
						
			}	
			
			//��ʮһ�������½������Ϣ$nowtime = time();
			$nowtime= time();
			$endtime = get_times(array("num"=>$borrow_result["borrow_period"],"time"=>$nowtime));
			
			if ($borrow_result["borrow_style"]==1){
				$_each_time = "ÿ�����º�".date("d",$nowtime)."��";
				$nexttime = get_times(array("num"=>3,"time"=>$nowtime));
			}else{
				$_each_time = "ÿ��".date("d",$nowtime)."��";
				$nexttime = get_times(array("num"=>1,"time"=>$nowtime));
			}
			$_equal["account"] = $borrow_result['account'];
			$_equal["period"] = $borrow_result["borrow_period"];
			$_equal["apr"] = $borrow_result["borrow_apr"];
			$_equal["type"] = "all";
			$equal_result = EqualInterest($_equal);
			$sql = "update `{borrow}` set repay_account_all='{$equal_result['account_total']}',repay_account_interest='{$equal_result['interest_total']}',repay_account_capital='{$equal_result['capital_total']}',repay_account_wait='{$equal_result['account_total']}',repay_account_interest_wait='{$equal_result['interest_total']}',repay_account_capital_wait='{$equal_result['capital_total']}',repay_last_time='{$endtime}',repay_next_time='{$nexttime}',borrow_success_time='{$nowtime}',repay_each_time='{$_each_time}',repay_times='{$repay_times}'  where borrow_nid='{$borrow_nid}'";
			$mysql->db_query($sql);
			
			
			//��ʮ�岽���ж�vip��Ա���Ƿ�۳�
		    self::AccountVip(array("user_id"=>$borrow_userid));
			
			
			//��17����������Ĳ���
			if ($borrow_result["vouch_status"]==1){
				
				$result = self::GetVouchList(array("limit"=>"all","borrow_nid"=>$borrow_nid));
				if ($result!=""){
					foreach ($result as $key => $value){
					
						//1,���ȸ��µ�����״̬Ϊ1����ʾ�����ɹ�
						$vouch_account = $value['account'];
						$vouch_userid = $value['user_id'];
						$vouch_id = $value['id'];
						$vouch_award = $value['award_account'];
						$sql = "update `{borrow_vouch}` set status=1 where id = {$vouch_id}";
						$mysql -> db_query($sql);
						
						//2,�ж��Ƿ���е������������������ɹ��Ľ�����
						if ($borrow_result["vouch_award_status"]==1){
							$vouch_award_money = $vouch_account*$borrow_result["vouch_award_scale"]*0.01;
							$log_info["user_id"] = $vouch_userid;//�����û�id
							$log_info["nid"] = "vouch_success_award_".$vouch_userid."_".$value['id'].$borrow_nid;//������
							$log_info["money"] = $vouch_award_money;//�������
							$log_info["income"] = $vouch_award_money;//����
							$log_info["expend"] = 0;//֧��
							$log_info["balance_cash"] = $vouch_award_money;//�����ֽ��
							$log_info["balance_frost"] = 0;//�������ֽ��
							$log_info["frost"] = 0;//������
							$log_info["await"] = 0;//���ս��
							$log_info["type"] = "vouch_success_award";//����
							$log_info["to_userid"] = $borrow_userid;//����˭
							$log_info["remark"] =  "��������[{$borrow_url}]���ɹ��ĵ�������";
							accountClass::AddLog($log_info);
						
							//���ɹ��Ľ���֧����
							$log_info["user_id"] = $borrow_userid;//�����û�id
							$log_info["nid"] = "vouch_success_awardpay_".$borrow_userid."_".$value['id'].$borrow_nid;//������
							$log_info["money"] = $vouch_award_money;//�������
							$log_info["income"] = 0;//����
							$log_info["expend"] = $vouch_award_money;//֧��
							$log_info["balance_cash"] = -$vouch_award_money;//�����ֽ��
							$log_info["balance_frost"] = 0;//�������ֽ��
							$log_info["frost"] = 0;//������
							$log_info["await"] = 0;//���ս��
							$log_info["type"] = "vouch_success_awardpay";//����
							$log_info["to_userid"] = $vouch_userid;//����˭
							$log_info["remark"] =  "���������[{$borrow_url}]���ɹ��ĵ�������֧��";
							accountClass::AddLog($log_info);
							
						}
						
						
						//������������ӵ�vouch_collection������ȥ
						
						$_equal["account"] = $vouch_account;
						$_equal["period"] = $borrow_result["borrow_period"];
						$_equal["apr"] = $borrow_result["borrow_apr"];
						$_equal["type"] = "";
						$_equal["style"] = $borrow_result["borrow_style"];
						$equal_result = EqualInterest($_equal);
						foreach ($equal_result as $period_key => $value){
							$sql = "insert into `{borrow_vouch_recover}` set `addtime` = '".time()."',";
							$sql .= "`addip` = '".ip_address()."',user_id='{$vouch_userid}',status=0,vouch_id={$vouch_id},`borrow_nid`='{$borrow_nid}',`borrow_userid`='{$borrow_userid}',`order`='{$period_key}',";
							$sql .= "`repay_time`='{$value['repay_time']}',`repay_account`='{$value['account_all']}',";
							$sql .= "`repay_interest`='{$value['account_interest']}',`repay_capital`='{$value['account_capital']}'";
							$mysql->db_query($sql);
						}
						
					}
					
					$_borrow_account = round($borrow_account/$borrow_period,2);
					for ($i=0;$i<$borrow_period;$i++){
						if ($i==$borrow_period-1){
							$_borrow_account = $borrow_account - $_borrow_account*$i;
						}
						$repay_time = get_times(array("time"=>time(),"num"=>$i+1));
						$sql = "insert into `{borrow_vouch_repay}` set borrow_nid={$borrow_nid},`addtime` = '".time()."',`addip` = '".ip_address()."',user_id=$borrow_userid ,`order` = {$i},status=0,repay_account = '{$_borrow_account}',repay_time='{$repay_time}'";	
						$mysql->db_query($sql);
						

		
					}
				}
				
				//�۳��������
				$_data["user_id"] = $borrow_userid;
				$_data["amount_type"] = "vouch_borrow";
				$_data["type"] = "borrow_success";
				$_data["oprate"] = "reduce";
				$_data["nid"] = "borrow_success_vouch_".$borrow_userid."_".$borrow_nid.$value["id"];
				$_data["account"] = $borrow_account;
				$_data["remark"] = "�������[{$borrow_url}]���ͨ����ȥ�������";//type ���������� 
				borrowClass::AddAmountLog($_data);
			
				//����ͳ����Ϣ
				self::UpdateBorrowCount(array("user_id"=>$borrow_userid,"borrow_vouch_times"=>1));
				
			}else{
				//�۳�������ö��
				
				//��Ӷ�ȼ�¼
				$_data["user_id"] = $borrow_userid;
				$_data["amount_type"] = "borrow";
				$_data["type"] = "borrow_success";
				$_data["oprate"] = "reduce";
				$_data["nid"] = "borrow_success_credit_".$borrow_userid."_".$borrow_nid.$value["id"];
				$_data["account"] = $borrow_account;
				$_data["remark"] = "����[{$borrow_url}]�������ͨ����������ö�ȼ���";;//type ���������� 
				borrowClass::AddAmountLog($_data);
				
			}
			
			
			
			//��������
			$remind['nid'] = "borrow_review_yes";
			$remind['receive_userid'] = $borrow_userid;
			$remind['code'] = "borrow";
			$remind['article_id'] = $borrow_nid;
			$remind['title'] = "�б�[{$borrow_name}]������˳ɹ�";
			$remind['content'] = "��Ľ���[{$borrow_url}]��".date("Y-m-d",time())."�Ѿ����ͨ��";
			
			remindClass::sendRemind($remind);
			

			
			//�����û�������¼
			$user_log["user_id"] = $borrow_userid;
			$user_log["code"] = "borrow";
			$user_log["type"] = "borrow_reverify_success";
			$user_log["operating"] = "success";
			$user_log["article_id"] = $borrow_userid;
			$user_log["result"] = 1;
			$user_log["content"] = "����[{$borrow_url}]ͨ���˸���,[<a href=/protocol/a{$data['borrow_nid']}.html target=_blank>����˴�</a>]�鿴Э����";
			usersClass::AddUsersLog($user_log);	

			
			//����û��Ķ�̬
			$_trend['user_id'] = $borrow_userid;
			$_trend["type"] = "borrow_reverify_success";
			$_trend['content'] = "����[{$borrow_url}]ͨ���˸���";
			//$result = userClass::AddUserTrend($_trend);
			
			if ($is_Seconds==1){	
			$_order = " order by repay_time asc";
			$_limit = "";
			$_select=" * ";
			$sql = "select * from `{borrow_repay}` where borrow_nid='{$borrow_nid}' AND user_id='{$borrow_userid}'";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select,$_order, $limit), $sql));		
		$list = $list?$list:array();
		$dataT = array();
		
		
		foreach ($list as $key => $value){	

				$dataT['borrow_nid'] = $borrow_nid;
				
	$dataT['id'] = $value['id'];
		$dataT['user_id'] = $borrow_userid;
		$resultT =  borrowClass::BorrowRepay($dataT);//��ȡ��ǰ�û������
		
		}
		
				$log_info["user_id"] = $borrow_userid;//�����û�id
		$moeSeconds=round(($borrow_account/100*$borrow_apr)/12,2);
					$log_info["nid"] = "borrow_success_manage_".time()."_".$mysql->db_insert_id();//������
					$log_info["money"] = $moeSeconds;//�������
					$log_info["income"] = 0;//����
					$log_info["expend"] = 0;//֧��
					$log_info["balance_cash"] = +$moeSeconds;//�����ֽ��
					$log_info["balance_frost"] = 0;//�������ֽ��
					$log_info["frost"] = -$moeSeconds;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "fengxianchi_borrow";//����
					$log_info["to_userid"] = 0;//����˭
					$log_info["remark"] =  "����������ʱԤ�ȵ渶��Ϣ{$moeSeconds}Ԫ��";
					accountClass::AddLog($log_info);
		
			
		}	
			
			
			
		}
		
		//�������ʧ��
		elseif ($status == 4){
			//��������Ͷ���ߵĽ�Ǯ��
			$tender_result = self::GetTenderList(array("borrow_nid"=>$borrow_nid,"limit"=>"all"));
			foreach ($tender_result as $key => $value){
				$tender_userid = $value['user_id'];
				$tender_account= $value['account'];
				$tender_id= $value['id'];
				$log_info["user_id"] = $tender_userid;//�����û�id
				$log_info["nid"] = "tender_false_".$tender_userid."_".$tender_id.$borrow_nid;//������
				$log_info["money"] = $tender_account;//�������
				$log_info["income"] = 0;//����
				$log_info["expend"] = 0;//֧��
				$log_info["balance_cash"] = 0;//�����ֽ��
				$log_info["balance_frost"] = $tender_account;//�������ֽ��
				$log_info["frost"] = -$tender_account;//������
				$log_info["await"] = 0;//���ս��
				$log_info["type"] = "tender_false";//����
				$log_info["to_userid"] = $borrow_userid;//����˭
				$log_info["remark"] =  "�б�[{$borrow_url}]ʧ�ܷ��ص�Ͷ���";
				accountClass::AddLog($log_info);
				
				
				//��������
				$remind['nid'] = "tender_false";
				
				$remind['code'] = "borrow";
				$remind['article_id'] = $borrow_nid;
				$remind['receive_userid'] = $value['user_id'];
				$remind['title'] = "Ͷ�ʵı�[<font color=red>{$borrow_name}</font>]�������ʧ��";
				$remind['content'] = "����Ͷ�ʵı�[{$borrow_url}]��".date("Y-m-d",time())."���ʧ��,ʧ��ԭ��{$data['reverify_remark']}";
				
				remindClass::sendRemind($remind);
				
				//��ʮ��,����Ͷ���˵�״̬
				$sql = "update `{borrow_tender}` set status=2 where id={$tender_id}";
				$mysql->db_query($sql);
				
				//����ͳ����Ϣ
				self::UpdateBorrowCount(array("user_id"=>$tender_userid,"tender_frost_account"=>-$tender_account));
				
				//��17����������Ĳ���
				if ($borrow_result["vouch_status"]==1){
					
					$result = self::GetVouchList(array("limit"=>"all","borrow_nid"=>$borrow_nid));
					if ($result!=""){
						foreach ($result as $key => $value){
						
							//1,���ȸ��µ�����״̬Ϊ2����ʾ����ʧ��
							$vouch_account = $value['account'];
							$vouch_userid = $value['user_id'];
							$vouch_id = $value['id'];
							$vouch_award = $value['award_account'];
							
							$sql = "update `{borrow_vouch}` set status=2 where id = '{$vouch_id}'";
							
							$mysql -> db_query($sql);
							
							//2,Ͷ�ʵ����˵ĵ�����ȷ���
							//��Ӷ�ȼ�¼
							//�۳��������
							$_data["user_id"] = $vouch_userid;
							$_data["amount_type"] = "vouch_tender";
							$_data["type"] = "borrow_false";
							$_data["oprate"] = "add";
							$_data["nid"] = "borrow_false_vouch_".$vouch_userid."_".$borrow_nid.$value["id"];
							$_data["account"] = $vouch_account;
							$_data["remark"] = "�������[{$borrow_url}]���ʧ�ܽ�����ȷ���";//type ���������� 
							borrowClass::AddAmountLog($_data);
				
						}	
					}
				}
			}
			
			//��������
			$remind['nid'] = "borrow_review_no";
			
			$remind['code'] = "borrow";
			$remind['article_id'] = $borrow_nid;
			$remind['receive_userid'] = $borrow_userid;
			$remind['title'] = "��������ı�[<font color=red>{$borrow_name}</font>]�������ʧ��";
			$remind['content'] = "��������ı�[{$borrow_url}]��".date("Y-m-d",time())."���ʧ��,ʧ��ԭ��{$data['repayment_remark']}";
			
			
			if ($is_Seconds==1){	
				$log_info["user_id"] = $borrow_userid;//�����û�id
		$moeSeconds=round(($borrow_account/100*$borrow_apr)/12,2);
					$log_info["nid"] = "borrow_success_manage_".time()."_".$mysql->db_insert_id();//������
					$log_info["money"] = $moeSeconds;//�������
					$log_info["income"] = 0;//����
					$log_info["expend"] = 0;//֧��
					$log_info["balance_cash"] = +$moeSeconds;//�����ֽ��
					$log_info["balance_frost"] = 0;//�������ֽ��
					$log_info["frost"] = -$moeSeconds;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "fengxianchi_borrow";//����
					$log_info["to_userid"] = 0;//����˭
					$log_info["remark"] =  "�������ʧ��,���ز������ʱԤ�ȵ渶��Ϣ{$moeSeconds}Ԫ��";
					accountClass::AddLog($log_info);
			   }
			remindClass::sendRemind($remind);
		}
		
		//��������ý��������б�ɹ�������ʧ��Ҳ����
		if ($borrow_result['award_status']!=0){
			if ($status == 3 || $borrow_result['award_false']==1){
				$tender_result = self::GetTenderList(array("borrow_nid"=>$borrow_nid,"limit"=>"all"));
				foreach ($tender_result as $key => $value){
					//Ͷ�꽱���۳������ӡ�
					if ($borrow_result['award_status']==1){
						$money = round(($value['account']/$borrow_account)*$borrow_result['award_account'],2);
					}elseif ($borrow_result['award_status']==2){
						$money = round((($borrow_result['award_scale']/100)*$value['account']),2);
					}
					$tender_id = $value['id'];
					$tender_userid = $value['user_id'];
					$log_info["user_id"] = $tender_userid;//�����û�id
					$log_info["nid"] = "tender_award_add_".$tender_userid."_".$tender_id.$borrow_nid;//������
					$log_info["money"] = $money;//�������
					$log_info["income"] = $money;//����
					$log_info["expend"] = 0;//֧��
					$log_info["balance_cash"] = $money;//�����ֽ��
					$log_info["balance_frost"] = 0;//�������ֽ��
					$log_info["frost"] = 0;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "tender_award_add";//����
					$log_info["to_userid"] = $borrow_userid;//����˭
					$log_info["remark"] =  "���[{$borrow_url}]�Ľ���";
					accountClass::AddLog($log_info);
				
					$log_info["user_id"] = $borrow_userid;//�����û�id
					$log_info["nid"] = "borrow_award_lower_".$borrow_userid."_".$tender_id.$borrow_nid;//������
					$log_info["money"] = $money;//�������
					$log_info["income"] = 0;//����
					$log_info["expend"] = $money;//֧��
					$log_info["balance_cash"] = -$money;//�����ֽ��
					$log_info["balance_frost"] = 0;//�������ֽ��
					$log_info["frost"] = 0;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "borrow_award_lower";//����
					$log_info["to_userid"] = $tender_userid;//����˭
					$log_info["remark"] =  "�۳����[{$borrow_url}]�Ľ���";
					accountClass::AddLog($log_info);
				}
			}
		}
		
		 return $borrow_nid;
	}
	
	
	/**
	 * �鿴
	 *
	 * @param Array $data
	 * @return Array
	 */
	public static function GetInvest($data = array()){
		global $mysql,$_G;
		$borrow_nid = $data['id'];
		//��һ������ȡ�������Ϣ
		$sql = "select * from `{borrow}`  where  borrow_nid = '{$borrow_nid}'";
		$result_borrow = $mysql->db_fetch_array($sql);
		
		if ($result_borrow==false){
			return "borrow_nid_empty";
		}
		$user_id = $result_borrow['user_id'];
		
		$_data["account"] = 100;
		$_data["period"] = $result_borrow["borrow_period"];
		$_data["apr"] = $result_borrow["borrow_apr"];
		$_data["style"] = $result_borrow["borrow_style"];
		$_data["type"] = "all";
		$_result = EqualInterest($_data);
		$result_borrow["borrow_interest"] = $_result["interest_total"];
		
		if (IsExiest($data["hits"])=="auto"){
			$sql = "update `{borrow}` set hits = hits+1 where  borrow_nid = '{$borrow_nid}'";
			$mysql->db_query($sql);
		}
		
		$result_borrow["other_time"] = $result_borrow["verify_time"]+$result_borrow["borrow_valid_time"]*60*60*24-time();
		
		//�ڶ�������ȡ�û��Ļ�����Ϣ
		$sql = "select p1.* as credit_pic from `{users}` as p1 
								 where  p1.user_id=$user_id";
		$result['user'] = $mysql->db_fetch_array($sql);
		
		//����������ȡ����û����ʽ��˺���Ϣ
		$sql = "select * from `{account}` where  user_id={$user_id}";
		$result['account'] = $mysql->db_fetch_array($sql);
		
		if($_G['user_id']>0){
		//���Ĳ�����ȡ��ǰ�û����ʽ��˺���Ϣ
		$sql = "select * from `{account}`  where  user_id={$_G['user_id']}";
		$result['user_account'] = $mysql->db_fetch_array($sql);
		}
		
		//���岽����ȡͶ�ʵĵ������
		$result['amount'] =  self::GetAmountUsers($user_id);
		
		//��������ͳ��
		$result["count"] = self::GetBorrowCount(array("user_id"=>$user_id));
		
		//���߲�����ȡ��ǰ�û����ʽ��˺���Ϣ
		$sql = "select p1.*,p2.username as kefu_username from `{users_vip}` as p1 left join `{users}` as p2 on p1.kefu_userid = p2.user_id  where  p1.user_id={$user_id}";
		$result['users_vip'] = $mysql->db_fetch_array($sql);
		
		//�ڰ˲�����ȡ����û����ʽ��˺���Ϣ
		$sql = "select * from `{users_info}` where  user_id={$user_id}";
		$result['users_info'] = $mysql->db_fetch_array($sql);
		
		//�ھŲ����ж��û��Ƿ�����
		$sql = "select 1 from `{borrow_repay}` where  borrow_nid = '{$borrow_nid}' and user_id='{$user_id}' and repay_status=0";
		$_result = $mysql->db_fetch_array($sql);
		$result_borrow['late_status'] = 0;
		if ($_result!=false){
			foreach ($_result as $key => $value){
				$late = self::LateInterest(array("time"=>$value['repay_time'],"account"=>$value['capital']));
				if ($late_result['late_days']>0){
					$result_borrow['late_status'] = 1;
				}
			}
		}
		$result['borrow'] = $result_borrow;
		return $result;
		
		
	}
	
	//�ѳɹ��Ľ��
	function GetTenderBorrowList($data){
		global $mysql,$_G;
		$user_id =$data['user_id'];
		$page = empty($data['page'])?1:$data['page'];
		$epage = empty($data['epage'])?10:$data['epage'];
		$_sql = "where 1=1";
		if (IsExiest($data['type'])!=""){
			if ($data['type']=="wait"){
				$_sql .= " and p1.recover_times<p2.borrow_period and p1.user_id={$user_id} and p1.change_status!=1";
			}elseif ($data['type']=="change"){
				$_sql .= " and p1.recover_account_all!=p1.recover_account_yes and  p1.change_userid={$user_id} and p1.change_status=1";
			}elseif ($data['type']=="yes"){
				$_sql .= " and p1.recover_account_yes=p1.recover_account_all and p1.user_id={$user_id} and p1.change_status=0";
			}
		}else{
			$_sql .= " and p1.user_id={$user_id}";
		}
		
		
		if (IsExiest($data['dotime1'])!=""){
			$dotime1 = ($data['dotime1']=="request")?$_REQUEST['dotime1']:$data['dotime1'];
			if ($dotime1!=""){
				$_sql .= " and p1.addtime > ".get_mktime($dotime1);
			}
		}
		
		if (IsExiest($data['dotime2'])!=""){
			$dotime2 = ($data['dotime2']=="request")?$_REQUEST['dotime2']:$data['dotime2'];
			if ($dotime2!=""){
				$_sql .= " and p1.addtime < ".get_mktime($dotime2);
			}
		}
		if (IsExiest($data['tender_status'])!=""){
			$_sql .= " and p1.status = {$data['tender_status']}";
		}
		if (IsExiest($data['keywords']) !=""){
			$_sql .= " and (p2.`name` like '%".urldecode($data['keywords'])."%') ";
		}
		if (IsExiest($data['borrow_status']) !=""){
			$_sql .= " and (p2.status = {$data['borrow_status']} or p2.is_flow=1) ";
		}
	
		
		$_select  = "p2.*,p1.recover_times,p1.account as tender_account,p1.recover_account_wait,p1.recover_account_yes,p1.user_id as tuser,p1.recover_account_all,p1.account_tender,p1.id as tid,p2.account as borrow_account,p2.borrow_account_yes,p3.username as borrow_username,p4.credits,p5.account as change_account,p5.id as change_id";
		
		$sql = "select SELECT from `{borrow_tender}` as p1 left join `{borrow}` as p2 on p1.borrow_nid=p2.borrow_nid left join `{users}` as p3 on p2.user_id=p3.user_id left join `{credit}` as p4 on p2.user_id=p4.user_id left join `{borrow_change}` as p5 on p5.tender_id=p1.id {$_sql} ORDER LIMIT";
	
		//�Ƿ���ʾȫ������Ϣ
		if (isset($data['limit']) ){
			$_limit = "";
			if ($data['limit'] != "all"){
				$_limit = "  limit ".$data['limit'];
			}
			return $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select,  'order by p1.id desc', $_limit), $sql));
		}	
		
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array("count(*) as  num","",""),$sql));
		
		$total = $row['num'];
		$total_page = ceil($total / $epage);
		$index = $epage * ($page - 1);
		$limit = " limit {$index}, {$epage}";
		
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select, 'order by p2.id desc', $limit), $sql));		
		$list = $list?$list:array();
		
		foreach ($list as $key => $value){
			$recoversql="select count(1) as num from `{borrow_repay}` where borrow_nid={$value['borrow_nid']} and (repay_status=1 or repay_web=1)";
			$recoverresult=$mysql->db_fetch_array($recoversql);
			$list[$key]['wait_times'] = $value['borrow_period'] - $recoverresult['num'];
			$list[$key]["credit"] = self::GetBorrowCredit(array("user_id"=>$value['user_id']));
			$chsql="select status,buy_time from `{borrow_change}` where tender_id={$value['tid']}";
			$chresult=$mysql->db_fetch_array($chsql);
			if ($chresult['status']==1){
				$recsql="select count(1) as count_all,sum(recover_account_yes) as recover_account_yes_all from `{borrow_recover}` where user_id={$value['tuser']} and borrow_nid={$value['borrow_nid']} and (recover_yestime>{$chresult['buy_time']} or recover_yestime is NULL) and tender_id={$value['tid']}";
				$recresult=$mysql->db_fetch_array($recsql);
				$list[$key]["recover_account_yes_all"] = $recresult['recover_account_yes_all'];
				$list[$key]["count_all"] = $recresult['count_all'];
			}
		}
		return array(
            'list' => $list,
            'total' => $total,
            'page' => $page,
            'epage' => $epage,
            'total_page' => $total_page
        );
	}
	
	//�տ���ϸ
	function GetRecoverList($data){
		global $mysql,$_G;
		
		$_sql = " where 1=1 ";
		if (IsExiest($data['user_id'])!=false){
			$_sql .= " and p1.user_id={$data['user_id']}";
		}
		if (IsExiest($data['status'])!=false){
			$_sql .= " and p1.status={$data['status']}";
		}
		if (IsExiest($data['recover_status'])!=false){
			if($data['recover_status']==2){
				$_sql .= " and p1.recover_status=0";
			}else{
				$_sql .= " and p1.recover_status={$data['recover_status']}";
			}
		}
		if (IsExiest($data['borrow_status'])!=false){
			$_sql .= " and (p2.status={$data['borrow_status']} or p2.is_flow=1)";
		}
		if (IsExiest($data['username'])!=false){
			$_sql .= " and p3.username like '%{$data['username']}%' ";
		}
		if (IsExiest($data['web'])!=false){
			$_sql .= " and p6.web_status=2 and p6.status=1";
		}
		
		if (IsExiest($data['dotime1'])!=false){
			$dotime1 = ($data['dotime1']=="request")?$_REQUEST['dotime1']:$data['dotime1'];
			if ($dotime1!=""){
				$_sql .= " and p1.recover_time > ".get_mktime($dotime1);
			}
		}
		
		if (IsExiest($data['dotime2'])!=false){
			$dotime2 = ($data['dotime2']=="request")?$_REQUEST['dotime2']:$data['dotime2'];
			if ($dotime2!=""){
				$_sql .= " and p1.recover_time < ".get_mktime($dotime2);
			}
		}
		if (IsExiest($data['type'])!=false){
			if ($data['type']=="yes"){
				$_sql .= " and (p1.recover_status =1 or p1.recover_web=1) and p5.change_status!=1";
			}elseif ($data['type']=="wait"){
				$_sql .= " and (p1.recover_status !=1 and p1.recover_web!=1) and p5.change_status!=1";
			}elseif ($data['type']=="web"){
				$_sql .= " and p1.recover_web=1";
			}
		}
		if (IsExiest($data['change'])!=false){
			$_sql .= " and p1.recover_status =1 and p5.change_status=1";
		}
		if (IsExiest($data['keywords'])!=""){
			$_sql .= " and (p2.name like '%".urldecode($data['keywords'])."%') ";
		}
		$_order = " order by p2.id ";
		if (IsExiest($data['order'])!="" ){
			if ($data['order'] == "repay_time"){
				$_order = " order by p2.id desc,p1.recover_time desc";
			}elseif ($data['order'] == "order"){
				$_order = " order by p1.`order` desc,p1.id desc ";
			}elseif ($data['order'] == "recover_status"){
				$_order = " order by p1.`recover_status` asc,p1.id desc ";
			}
		}
	
		$_select = 'p1.*,p1.recover_account_yes as recover_recover_account_yes,p2.name as borrow_name,p2.borrow_period,p3.username,p4.username as borrow_username,p4.user_id as borrow_userid,p5.*,p5.recover_account_yes as tender_recover_account_yes,p6.buy_time';
		$sql = "select SELECT from `{borrow_recover}` as p1 
				left join `{borrow}` as p2 on  p2.borrow_nid = p1.borrow_nid
				left join `{users}` as p3 on  p3.user_id = p1.user_id
				left join `{users}` as p4 on  p4.user_id = p2.user_id
				left join `{borrow_tender}` as p5 on  p1.tender_id = p5.id
				left join `{borrow_change}` as p6 on  p1.tender_id = p6.tender_id
			   {$_sql} ORDER LIMIT";
		//�Ƿ���ʾȫ������Ϣ
		if (isset($data['limit']) ){
			$_limit = "";
			if ($data['limit'] != "all"){
				$_limit = "  limit ".$data['limit'];
			}
			$list  = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select,  $_order, $_limit), $sql));
			foreach ($list as $key => $value){
				$late = self::LateInterest(array("time"=>$value['recover_time'],"account"=>$value['recover_capital']));
				if ($data['type']=="web"){
					if ($value['recover_status']==0){
						$list[$key]['late_days'] = $late['late_days'];
						if ($late['late_days']<30){
							$list[$key]['late_interest'] = round($value['recover_account']*0.004*$late['late_days']/2,2);
						}else{
							$list[$key]['late_interest'] = round($value['recover_account']*0.004*$late['late_days'],2);
						}
					}else{
					$late = self::LateInterest(array("time"=>$value['recover_time'],"account"=>$value['recover_capital'],"yestime"=>$value['recover_yestime']));
						if ($late['late_days']<30){
							$list[$key]['late_interest'] = round($value['recover_account']*0.004*$late['late_days']/2,2);
						}else{
							$list[$key]['late_interest'] = round($value['recover_account']*0.004*$late['late_days'],2);
						}
						$list[$key]['late_days'] = $value['late_days'];
					}
				}else{
					if ($value['recover_status']==0){
						$list[$key]['late_days'] = $late['late_days'];
						if ($late['late_days']<30){
							$list[$key]['late_interest'] = 0;
						}else{
							$list[$key]['late_interest'] = round($value['recover_account']*0.004*$late['late_days']/2,2);
						}
					}else{
						$list[$key]['late_interest'] = $value['late_interest'];
						$list[$key]['late_days'] = $value['late_days'];
					}
				}
				$list[$key]['all_recover']=$value['recover_capital']+$value['recover_interest']+$value['late_interest'];
			}
			return $list;
		}	
		$page = empty($data['page'])?1:$data['page'];
		$epage = empty($data['epage'])?10:$data['epage'];
		$index = $epage * ($page - 1);
		$limit = " limit {$index}, {$epage}";
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array(" count(*) as num ","",""),$sql));
		
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select, $_order , $limit), $sql));
		foreach ($list as $key => $value){
			$all_capital+=$value['recover_capital'];
			$late = self::LateInterest(array("time"=>$value['recover_time'],"account"=>$value['recover_capital']));
			if ($data['showtype']=="web"){
				if ($value['recover_status']==1){
					$list[$key]['late_days'] = $value['late_days'];
					if ($late['late_days']<30){
						$list[$key]['late_interest'] = round($value['recover_account']*0.004*$value['late_days']/2,2);
					}else{
						$list[$key]['late_interest'] = round($value['recover_account']*0.004*$value['late_days'],2);
					}
				}else{
					$list[$key]['late_days'] = $late['late_days'];
					$late = self::LateInterest(array("time"=>$value['recover_time'],"account"=>$value['recover_capital'],"yestime"=>$value['recover_yestime']));
					if ($late['late_days']<30){
						$list[$key]['late_interest'] = round($value['recover_account']*0.004*$late['late_days']/2,2);
					}else{
						$list[$key]['late_interest'] = round($value['recover_account']*0.004*$late['late_days'],2);
					}
				}
			}else{
				if ($value['recover_status']==1){
					$list[$key]['late_interest'] = $value['late_interest'];
					$list[$key]['late_days'] = $value['late_days'];
				}else{
					$list[$key]['late_days'] = $late['late_days'];
					if ($late['late_days']<30){
						$list[$key]['late_interest'] = 0;
					}else{
						$list[$key]['late_interest'] = round($value['recover_account']*0.004*$late['late_days']/2,2);
					}
				}
			}
			$list[$key]['all_recover']=$value['recover_capital']+$value['recover_interest']+$value['late_interest'];
			if ($value['recover_yestime']<$value['buy_time']){
				$change[$key]['recover_interest_yes']=$value['recover_interest_yes'];
				$change[$key]['borrow_name']=$value['borrow_name'];
				$change[$key]['recover_time']=$value['recover_time'];
				$change[$key]['borrow_userid']=$value['borrow_userid'];
				$change[$key]['borrow_username']=$value['borrow_username'];
				$change[$key]['borrow_nid']=$value['borrow_nid'];
				$change[$key]['recover_period']=$value['recover_period'];
				$change[$key]['borrow_period']=$value['borrow_period'];
				$change[$key]['recover_account']=$value['recover_account'];
				$change[$key]['recover_capital']=$value['recover_capital'];
				$change[$key]['recover_interest']=$value['recover_interest'];
				$change[$key]['late_interest']=$value['late_interest'];
				$change[$key]['late_days']=$value['late_days'];
				$change[$key]['recover_status']=$value['recover_status'];
			}
			if ($value['recover_yestime']>$value['buy_time'] || $value['recover_yestime']==""){
				$web[$key]['recover_interest_yes']=$value['recover_interest_yes'];
				$web[$key]['borrow_name']=$value['borrow_name'];
				$web[$key]['recover_time']=$value['recover_time'];
				$web[$key]['borrow_userid']=$value['borrow_userid'];
				$web[$key]['borrow_username']=$value['borrow_username'];
				$web[$key]['borrow_nid']=$value['borrow_nid'];
				$web[$key]['recover_period']=$value['recover_period'];
				$web[$key]['borrow_period']=$value['borrow_period'];
				$web[$key]['recover_account']=$value['recover_account'];
				$web[$key]['recover_capital']=$value['recover_capital'];
				$web[$key]['recover_interest']=$value['recover_interest'];
				$web[$key]['late_interest']=$list[$key]['late_interest'];
				$web[$key]['late_days']=$list[$key]['late_days'];
				$web[$key]['recover_status']=$value['recover_status'];
				$web[$key]['recover_web']=$list[$key]['recover_web'];
				if ($web[$key]['recover_status']==1 || $web[$key]['recover_web']==1){
					$all_recover+=$web[$key]['recover_account'];
				}
			}
		}
		if ($data['style']=="change"){
			$total = count($change);
			$total_page = ceil($total / $epage);
			$index = $epage * ($page - 1);
			$limit = " limit {$index}, {$epage}";
		}elseif ($data['style']=="web"){
			$total = count($web);
			$total_page = ceil($total / $epage);
			$index = $epage * ($page - 1);
			$limit = " limit {$index}, {$epage}";
		}else{
			$total = $row['num'];
			$total_page = ceil($total / $epage);
			$index = $epage * ($page - 1);
			$limit = " limit {$index}, {$epage}";
		}
		return array(
            'list' => $list,
            'change' => $change,
            'all_capital' => $all_capital,
            'all_recover' => $all_recover,
            'web' => $web,
            'total' => $total,
            'page' => $page,
            'epage' => $epage,
            'total_page' => $total_page
        );
	}
	
	//������Ϣ����,������������
	//account ��� time ����ʱ��,yestime,�ѻ�ʱ��
	//����late_days,late_interest
	function LateInterest($data){
		global $mysql,$_G;
		if (IsExiest($data['yestime'])!=""){
			$now_time = get_mktime(date("Y-m-d",$data['yestime']));
		}else{
			$now_time = get_mktime(date("Y-m-d",time()));
		}
		$repayment_time = get_mktime(date("Y-m-d",$data['time']));
		$late_days = ($now_time - $repayment_time)/(60*60*24);
		$_late_days = explode(".",$late_days);
		$late_days = ($_late_days[0]<0)?0:$_late_days[0];
		
		//���ڷ�Ϣ
		if ($late_days>0 && $late_days<=3){
			$late_fee = isset($_G['system']['con_borrow_late_fee_3'])?$_G['system']['con_borrow_late_fee_3']:0.005;
		}elseif ($late_days>3 && $late_days<=30){
			$late_fee = isset($_G['system']['con_borrow_late_fee_30'])?$_G['system']['con_borrow_late_fee_30']:0.007;
		}elseif ($late_days>30 && $late_days<=90){
			$late_fee = isset($_G['system']['con_borrow_late_fee_90'])?$_G['system']['con_borrow_late_fee_90']:0.008;
		}elseif ($late_days>90){
			$late_fee = isset($_G['system']['con_borrow_late_fee_all'])?$_G['system']['con_borrow_late_fee_all']:0.01;
		}
		
		
		//�߽ɹ����
		if ($late_days>4 && $late_days<=10){
			$manage_fee = isset($_G['system']['con_borrow_late_manage_fee_10'])?$_G['system']['con_borrow_late_manage_fee_10']:0.002;
		}elseif ($late_days>10 && $late_days<=30){
			$manage_fee = isset($_G['system']['con_borrow_late_manage_fee_30'])?$_G['system']['con_borrow_late_manage_fee_30']:0.003;
		}elseif ($late_days>30 && $late_days<=90){
			$manage_fee = isset($_G['system']['con_borrow_late_manage_fee_90'])?$_G['system']['con_borrow_late_manage_fee_90']:0.004;
		}elseif ($late_days>90){
			$manage_fee = isset($_G['system']['con_borrow_late_manage_fee_all'])?$_G['system']['con_borrow_late_manage_fee_all']:0.005;
		}
		
		//���ڷ�Ϣ�����ڷ���*�����*����������
		$late_interest = round($data['capital']*$late_fee*$late_days,2);
		$late_manage = round($data['account']*$manage_fee*$late_days,2);
		return array("late_days"=>$late_days,"late_interest"=>$late_interest ,"late_reminder"=>$late_manage);
	}
	/**
	 * ��ӵ���
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	public static function AddVouch($data = array()){
		global $mysql,$_G;
		if (!isset($data['borrow_nid']) || $data['borrow_nid']==""){
			return "borrow_nid_empty";
		}	
		if (!isset($data['user_id']) || $data['user_id']==""){
			return "borrow_user_id_empty";
		}		
		
		$sql = "select * from `{borrow}`  where  borrow_nid = '{$data['borrow_nid']}'";
		$result_borrow = $mysql->db_fetch_array($sql);
		if ($result_borrow == false){
			return "borrow_not_exiest";
		}
		if ($data['user_id']==$result_borrow['user_id']){
			return "borrow_vouch_not_self";
		}
		$borrow_url = "<a href=/invest/a{$result_borrow['borrow_nid']}.html target=_blank>{$result_borrow['name']}</a>";
		
		if ($_G['user_result']['islock']==1){
			return "user_islock";
		}
		
		
		$sql = "insert into `{borrow_vouch}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		$mysql->db_query($sql);
		$vouch_id = $mysql->db_insert_id();
		
		if ($vouch_id>0){
			$sql = "update  {borrow}  set vouch_account_yes=vouch_account_yes+{$data['account']},vouch_account_wait=vouch_account_wait-{$data['account']},vouch_times=vouch_times+1,vouch_account_scale = 100*(vouch_account_yes/vouch_account)  where borrow_nid='{$data['borrow_nid']}'";
			$mysql->db_query($sql);//�����Ѿ�������Ǯ
			
			//��Ӷ�ȼ�¼
			//�۳��������
			$_data["user_id"] = $data['user_id'];
			$_data["amount_type"] = "vouch_tender";
			$_data["type"] = "vouch_tender";
			$_data["oprate"] = "reduce";
			$_data["nid"] = "vouch_tender_".$data['user_id']."_".time();
			$_data["account"] = $data['account'];
			$_data["remark"] = "�������[{$borrow_url}]���ͨ����ȥ�������";//type ���������� 
			borrowClass::AddAmountLog($_data);
			
		}
		return $vouch_id;
	}
	
	
	/**
	 * �鿴Ͷ�����Ϣ
	 *
	 * @param Array $data
	 * @return Array
	 */
	public static function BorrowRepay($data = array()){
		global $mysql,$_G;
		if (IsExiest($data['id'])==""){
			return "borrow_repay_id_empty";
		}
		if (IsExiest($data['user_id'])==""){
			return "borrow_user_id_empty";
		}
		if (IsExiest($data['borrow_nid'])==""){
			return "borrow_nid_empty";
		}
		
		$_sql = "";
		
		//��һ������ȡ�������Ϣ
		$sql = "select p1.*,p2.username from `{borrow_repay}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id where p1.id={$data['id']} and p1.user_id='{$data['user_id']}' and p1.borrow_nid='{$data['borrow_nid']}'";
		$result= $mysql->db_fetch_array($sql);
		if ($result==""){
			return "borrow_repay_id_empty";
		}
		if ($result["user_id"]!=$data["user_id"]){
			return "borrow_user_id_empty";
		}
		if ($result["status"]!=1){
			return "borrow_repay_error";
		}
		if ($result["repay_status"]==1){
			return "borrow_repay_yes";
		}
		
		$repay_id = $data["id"];
		$borrow_userid = $data["user_id"];
		$borrow_username = $result["username"];
		$borrow_nid = $result["borrow_nid"];
		$repay_web = $result["repay_web"];
		$repay_vouch = $result["repay_vouch"];
		$repay_period = $result["repay_period"];
		$repay_account = $result["repay_account"];//�����ܶ�
		$repay_capital = $result["repay_capital"];//�����
		$repay_interest = $result["repay_interest"];//������Ϣ
		$repay_time = $result["repay_time"];//����ʱ��
		
		
		
		//�ڶ������ж���һ���Ƿ��ѻ���
		if ($repay_period!=0){
			$_repay_period = $repay_period-1;
			$sql = "select repay_status from `{borrow_repay}` where `repay_period`=$_repay_period and borrow_nid={$borrow_nid}";
			$result = $mysql->db_fetch_array($sql);
			if ($result!=false && $result['repay_status']!=1){
				return "borrow_repay_up_notrepay";
			}
		}
		//���������õ��������Ϣ
		$sql = "select * from `{borrow}` where borrow_nid = '{$borrow_nid}'";
		$result = $mysql->db_fetch_array($sql);
		$borrow_forst_account = $result["borrow_forst_account"];
		$borrow_name = $result['name'];
		$vouch_status = $result["vouch_status"];
		$borrow_period = $result["borrow_period"];
		$repay_times = $result["repay_times"];
		$borrow_account = $result["account"];
		$borrow_style = $result["borrow_style"];
		$borrow_url = "<a href=/invest/a{$result['borrow_nid']}.html target=_blank>{$result['name']}</a>";//���ĵ�ַ
		
		//������������Ƿ�����,���Ҽ������ڵķ���
		$late = self::LateInterest(array("time"=>$repay_time,"account"=>$repay_account,"capital"=>$repay_capital));
		$late_days = $late['late_days'];
		$late_interest = round($repay_account/100*0.4*$late_days,2);
		$late_reminder = $late['late_reminder'];
		$late_account = $late_interest;
		
				
		//���Ĳ����жϿ�������Ƿ񹻻���
		$account_result =  accountClass::GetAccountUsers(array("user_id"=>$borrow_userid));//��ȡ��ǰ�û������;
		if ($account_result['balance']<$repay_account+$late_account){
			return "borrow_repay_account_use_none";
		}
		$log_info["user_id"] = $borrow_userid;//�����û�id
		$log_info["nid"] = "repay_".$borrow_userid."_".$borrow_nid.$repay_id;//������
		$log_info["money"] = $repay_account;//�������
		$log_info["income"] = 0;//����
		$log_info["expend"] = $repay_account;//֧��
		$log_info["balance_cash"] = 0;//�����ֽ��
		$log_info["balance_frost"] = -$repay_account;//�������ֽ��
		$log_info["frost"] = 0;//������
		$log_info["await"] = 0;//���ս��
		$log_info["type"] = "borrow_repay";//����
		$log_info["to_userid"] = 0;//����˭
		$log_info["remark"] = "��[{$borrow_url}]�����".($repay_period+1)."�ڻ���";
		accountClass::AddLog($log_info);
		
		//��ʮ���������ӽ���ƹ��˽��
		//��ȡͶ���˵Ķ���Ͷ���ƹ���
		$spread_sql="select * from `{spread_user}` where spread_userid={$borrow_userid} and style=1 and type=3";
		$result_spread=$mysql->db_fetch_array($spread_sql);
		
		if ($result_spread==true){
			//��ȡ����Ͷ���ƹ��˵��������
			$feesql="select `task_fee` from `{spread_setting}` where type=5";
			$fee_result=$mysql->db_fetch_array($feesql);
			
			$log_info["user_id"] = $result_spread['user_id'];//�ƹ�Ա
			$log_info["nid"] = "borrow_spread_".$borrow_nid.$borrow_userid.$result_spread['user_id'].$repay_id;//������
			$log_info["money"] = round($repay_capital/100*$fee_result['task_fee'],2);//�������
			$log_info["income"] = $log_info["money"];//����
			$log_info["expend"] = 0;//֧��
			$log_info["balance_cash"] = $log_info["money"];//�����ֽ��
			$log_info["balance_frost"] = 0;//�������ֽ��
			$log_info["frost"] = 0;//������
			$log_info["await"] = 0;//���ս��
			$log_info["type"] = "borrow_spread";//����
			$log_info["to_userid"] = $result_spread['user_id'];//����˭
			$log_info["remark"] = "����ƹ�ͻ�[{$borrow_username}]���[{$borrow_url}]�ɹ����õ��ƹ���ɣ������{$repay_capital}�������{$fee_result['task_fee']}%";
			accountClass::AddLog($log_info);
			
			$web['money']=$log_info["money"];
			$web['user_id']=$result_spread['user_id'];
			$web['nid']="other_spread_borrow_".$result_spread['user_id']."_".time();
			$web['type']="other_spread_borrow";
			$web['remark']="�ƹ���ͻ�[{$borrow_username}]���{$log_info["money"]}��������ƹ��";
			accountClass::AddAccountWeb($web);
		}
			
		if ($repay_web==1){
			$log_info["user_id"] = 0;//�����û�id
			$log_info["nid"] = "repay_web_0_".$borrow_nid.$repay_id;//������
			$log_info["money"] = $repay_account;//�������
			$log_info["income"] = 0;//����
			$log_info["expend"] = $repay_account;//֧��
			$log_info["balance_cash"] = $repay_account;//�����ֽ��
			$log_info["balance_frost"] = 0;//�������ֽ��
			$log_info["frost"] = 0;//������
			$log_info["await"] = 0;//���ս��
			$log_info["type"] = "web_repay";//����
			$log_info["to_userid"] = 0;//����˭
			$log_info["remark"] = "��[{$borrow_url}]�����վ�渶����������".$borrow_username;
			accountClass::AddLog($log_info);
			
			$log_info["user_id"] = 0;//�����û�id
			$log_info["nid"] = "repay_late_web_0_".$borrow_nid.$repay_id;//������
			$log_info["money"] = $late_interest;//�������
			$log_info["income"] = 0;//����
			$log_info["expend"] = $late_interest;//֧��
			$log_info["balance_cash"] = $late_interest;//�����ֽ��
			$log_info["balance_frost"] = 0;//�������ֽ��
			$log_info["frost"] = 0;//������
			$log_info["await"] = 0;//���ս��
			$log_info["type"] = "repay_late_web";//����
			$log_info["to_userid"] = 0;//����˭
			$log_info["remark"] = "��վ�渶��Ļ��Ϣ����".$borrow_username;
			accountClass::AddLog($log_info);
			
			
			$sql = "select p1.*,p2.change_status,p2.change_userid from `{borrow_recover}` as p1 left join `{borrow_tender}` as p2 on p1.tender_id=p2.id  where p1.`recover_period` = '{$repay_period}' and p1.borrow_nid='{$borrow_nid}'";
			$_recover=$mysql->db_fetch_arrays($sql);
			foreach ($_recover as $key => $value){
				$_sql = "update  `{borrow_recover}` set recover_status=1 where id = '{$value['id']}'";
				$mysql->db_query($_sql);
			}
		}
		
		// * ����������⣬������ѵĿ۳�
		$vip_result = self::GetBorrowVip(array("user_id"=>$borrow_userid));
		$vip_fee = $vip_result['fee'];
		if ($borrow_style!=5){
			if ($vip_result['vip']==0){
				$borrow_manage_fee = isset($_G['system']["con_borrow_manage_fee"])?$_G['system']["con_borrow_manage_fee"]:0.5;
			}else{
				$borrow_manage_fee = (isset($_G['system']["con_borrow_manage_vip_fee"])?$_G['system']["con_borrow_manage_vip_fee"]:0.4)*$vip_fee;
			}
			
			$manage_fee = $repay_capital*$borrow_manage_fee*0.01;
			//�û��Խ���Ļ���
			/*
			$log_info["user_id"] = $borrow_userid;//�����û�id
			$log_info["nid"] = "borrow_manage_fee_".$borrow_userid."_".$borrow_nid.$repay_id;//������
			$log_info["money"] = $manage_fee;//�������
			$log_info["income"] = 0;//����
			$log_info["expend"] = $manage_fee;//֧��
			$log_info["balance_cash"] = -$manage_fee;//�����ֽ��
			$log_info["balance_frost"] = 0;//�������ֽ��
			$log_info["frost"] = 0;//������
			$log_info["await"] = 0;//���ս��
			$log_info["type"] = "borrow_manage_fee";//����
			$log_info["to_userid"] = 0;//����˭
			$log_info["remark"] = "�û��ɹ�����[$borrow_url]�۳��������";
			accountClass::AddLog($log_info);*/
		}
		
		// * ���ڷ��ÿ۳�����
		if ($late_interest>0){
			$log_info["user_id"] = $borrow_userid;//�����û�id
			$log_info["nid"] = "borrow_repay_late_".$borrow_userid."_".$borrow_nid.$repay_id;//������
			$log_info["money"] = $late_interest;//�������
			$log_info["income"] = 0;//����
			$log_info["expend"] = $late_interest;//֧��
			$log_info["balance_cash"] = -$late_interest;//�����ֽ��
			$log_info["balance_frost"] = 0;//�������ֽ��
			$log_info["frost"] = 0;//������
			$log_info["await"] = 0;//���ս��
			$log_info["type"] = "borrow_repay_late";//����
			$log_info["to_userid"] = 0;//����˭
			$log_info["remark"] = "��[{$borrow_url}]����".($repay_period+1)."�ڵ����ڽ��Ŀ۳�";
			accountClass::AddLog($log_info);
		}
		if($repay_period+1 == $repay_times){
			$credit_log['user_id'] = $borrow_userid;
			$credit_log['nid'] = "borrow_repay_all";
			$credit_log['code'] = "borrow";
			$credit_log['type'] = "repay_all";
			$credit_log['addtime'] = time();
			$credit_log['article_id'] =$repay_id;
			$credit_log['value'] = round($borrow_account/100);
			$credit_log['remark'] =  "���[{$borrow_url}]ȫ���������û���";
			creditClass::ActionCreditLog($credit_log);
		}
		
		// * ���ڴ߽ɹ���ѻ���
		/*if ($late_reminder>0){
			$log_info["user_id"] = $borrow_userid;//�����û�id
			$log_info["nid"] = "borrow_repay_reminder_".$borrow_userid."_".$borrow_nid.$repay_id;//������
			$log_info["money"] = $late_reminder;//�������
			$log_info["income"] = 0;//����
			$log_info["expend"] = $late_reminder;//֧��
			$log_info["balance_cash"] = -$late_reminder;//�����ֽ��
			$log_info["balance_frost"] = 0;//�������ֽ��
			$log_info["frost"] = 0;//������
			$log_info["await"] = 0;//���ս��
			$log_info["type"] = "borrow_repay_reminder";//����
			$log_info["to_userid"] = 0;//����˭
			$log_info["remark"] = "��[{$borrow_url}]����".($repay_period+1)."�ڵ����ڴ߽ɹ���ѵĿ۳�";;
			accountClass::AddLog($log_info);
		}
		*/
			
		// * �������ڵ���Ϣ
		$sql = "update`{borrow_repay}` set late_days = '{$late_days}',late_interest = '{$late_interest}',late_reminder = '{$late_reminder}' where id = {$repay_id}";
		$mysql->db_query($sql);
			
		//����ͳ����Ϣ
		self::UpdateBorrowCount(array("user_id"=>$borrow_userid,"borrow_repay_yes_times"=>1,"borrow_repay_wait_times"=>-1,"borrow_repay_yes"=>$repay_account,"borrow_repay_wait"=>-$repay_account,"borrow_repay_interest_yes"=>$repay_interest,"borrow_repay_interest_wait"=>-$repay_interest,"borrow_repay_capital_yes"=>$repay_capital,"borrow_repay_capital_wait"=>-$repay_capital));		
		
		//��ʮ��������������ѻ����Ͳ��û���Ͷ����
		if ($repay_vouch==1){
			$sql = "select p1.* from `{borrow_vouch_recover}` as p1  where p1.`order` = '{$repay_period}' and p1.borrow_nid='{$borrow_nid}'";
			$result = $mysql->db_fetch_arrays($sql);
			$late_rate = isset($_G['system']['con_late_rate'])?$_G['system']['con_late_rate']:0.008;
		
			foreach ($result as $key => $value){
				
				//�û��Խ���Ļ���
				$account_result =  accountClass::GetOne(array("user_id"=>$value['user_id']));
				$log['user_id'] =$value['user_id'];
				$log['type'] = "vouch_tender_repay_yes";
				$log['money'] = $value['repay_account'];
				$log['total'] = $account_result['total']+$log['money'];
				$log['use_money'] = $account_result['use_money']+$log['money'];
				$log['no_use_money'] = $account_result['no_use_money'];
				$log['collection'] =$account_result['collection'] ;
				$log['use_money_yes'] = $account_result['use_money_yes']+$log['money'];
				$log['use_money_no'] = $account_result['use_money_no'];
				$log['to_user'] = $borrow_userid;
				$log['remark'] = "�ͻ���{$borrow_username}����[{$borrow_url}]�����渶�Ļ���";
				accountClass::AddLog($log);
				
				
				//�۳�Ͷ�ʵĹ����
				
				$account_result =  accountClass::GetOne(array("user_id"=>$value['user_id']));
				$log['user_id'] = $value['user_id'];
				$log['type'] = "tender_interest_fee";//
				//$_fee = isset($_G['system']['con_integral_fee'])?$_G['system']['con_integral_fee']:0;
					
					$vip_result = self::GetBorrowVip(array("user_id"=>$value['user_id']));
		          
			       if ($vip_result['vip']==0){
					$_fee = isset($_G['system']['con_borrow_interest_fee'])?$_G['system']['con_borrow_interest_fee']*0.01:0.1;
					}else{
					$_fee = isset($_G['system']['con_borrow_interest_vip_fee'])?$_G['system']['con_borrow_interest_vip_fee']*0.01:0.1;
					}
				
				if ($_fee>0 && $_fee!="0") {
					$log['money'] = $value['recover_interest']*$_fee;
					$log['total'] = $account_result['total']-$log['money'];
					$log['use_money'] = $account_result['use_money']-$log['money'];
					$log['no_use_money'] = $account_result['no_use_money'];
					$log['collection'] = $account_result['collection'];
					$log['use_money_yes'] = $account_result['use_money_yes']-$log['money'];
					$log['use_money_no'] = $account_result['use_money_no'];
					$log['to_user'] = 0;
					$log['remark'] = "�û��ɹ�����[$borrow_url]�۳���Ϣ�Ĺ����";
					accountClass::AddLog($log);
				}
				
				
				//��������
				$remind['nid'] = "loan_pay";
				
				$remind['receive_userid'] = $value['user_id'];
				$remind['title'] = "�ͻ�({$borrow_username})��[{$borrow_name}]���Ļ���";
				$remind['content'] = "�ͻ�({$borrow_username})��".date("Y-m-d H:i:s")."��[{$borrow_url}}</a>]���Ļ���,������Ϊ��{$value['repay_account']}";
				
				remindClass::sendRemind($remind);
				
				if ($late_days>30){
					//��������վ����һ��
					$account_result =  accountClass::GetOne(array("user_id"=>$value['user_id']));
					$log['user_id'] =$value['user_id'];
					$log['type'] = "vouch_repay_late_recover";
					$log['money'] = round((($value['repay_capital']*$late_rate*$late_days)/2),2);
					$log['total'] = $account_result['total']+$log['money'];
					$log['use_money'] = $account_result['use_money']+$log['money'];
					$log['no_use_money'] = $account_result['no_use_money'];
					$log['collection'] =$account_result['collection'];
					$log['use_money_yes'] = $account_result['use_money_yes']+$log['money'];
					$log['use_money_no'] = $account_result['use_money_no'];
					$log['to_user'] = $data['user_id'];
					$log['remark'] = "[{$borrow_url}]��".($repay_period+1)."�ڽ������ڲ�����30��ĵ����渶������Ϣ����";
					accountClass::AddLog($log);
				}
			}
		}
		//��ʮ�������û���������
		if ($repay_web!=1 && $repay_vouch!=1){
			$sql = "select p1.*,p2.change_status,p2.change_userid from `{borrow_recover}` as p1 left join `{borrow_tender}` as p2 on p1.tender_id=p2.id  where p1.`recover_period` = '{$repay_period}' and p1.borrow_nid='{$borrow_nid}'";
			$result = $mysql->db_fetch_arrays($sql);
			$re_time = (strtotime(date("Y-m-d",$repay_time))-strtotime(date("Y-m-d",time())))/(60*60*24);
			foreach ($result as $key => $value){
				//����Ͷ���˵ķ�����Ϣ
				$late = self::LateInterest(array("time"=>$value['recover_time'],"capital"=>$value['recover_capital']));
				if ($late['late_days']>30){
					$late_interest = 0;
					$money=round($value['recover_account']*0.004*$late['late_days'],2);
				}else{
					$late_interest = round($value['recover_account']*0.004*$late['late_days']/2,2);
					$money=round($value['recover_account']*0.004*$late['late_days']/2,2);
				}
				$sql = "update  `{borrow_recover}` set recover_yestime='".time()."',recover_account_yes = recover_account ,recover_capital_yes = recover_capital ,recover_interest_yes = recover_interest ,status=1,recover_status=1,late_days={$late['late_days']},late_interest={$late_interest} where id = '{$value['id']}'";
				$mysql->db_query($sql);
				
				if($late['late_days']>0){
					$log_info["user_id"] = 0;//�����û�id
					$log_info["nid"] = "repay_0_".$borrow_nid.$repay_id.$value['id'];//������
					$log_info["money"] = $money;//�������
					$log_info["income"] = 0;//����
					$log_info["expend"] = $money;//֧��
					$log_info["balance_cash"] = -$money;//�����ֽ��
					$log_info["balance_frost"] = 0;//�������ֽ��
					$log_info["frost"] = 0;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "late_repay_web";//����
					$log_info["to_userid"] = 0;//����˭
					$log_info["remark"] = "��[{$borrow_url}]�����վ���ڷ�Ϣ����".$money.$borrow_username;
					accountClass::AddLog($log_info);
				}
				//����Ͷ�ʵ���Ϣ
				$sql = "update  `{borrow_tender}` set recover_times=recover_times+1,recover_account_yes= recover_account_yes + {$value['recover_account']},recover_account_capital_yes = recover_account_capital_yes  + {$value['recover_capital']} ,recover_account_interest_yes = recover_account_interest_yes + {$value['recover_interest']},recover_account_wait= recover_account_wait - {$value['recover_account']},recover_account_capital_wait = recover_account_capital_wait  - {$value['recover_capital']} ,recover_account_interest_wait = recover_account_interest_wait - {$value['recover_interest']}  where id = '{$value['tender_id']}'";
				$mysql->db_query($sql);
				
				if ($value['change_status']==1){
					$value['user_id'] = $value['change_userid'];
					if ($value['change_userid']==0 || $value['change_userid']==""){
						$value['user_id']=0;
					}
				}
				//�û��Խ���Ļ���
				$log_info["user_id"] = $value['user_id'];//�����û�id
				$log_info["nid"] = "tender_repay_yes_".$value['user_id']."_".$borrow_nid.$value['id'];//������
				$log_info["money"] = $value['recover_account'];//�������
				$log_info["income"] = $value['recover_account'];//����
				$log_info["expend"] = 0;//֧��
				$log_info["balance_cash"] = $value['recover_account'];//�����ֽ��
				$log_info["balance_frost"] = 0;//�������ֽ��
				$log_info["frost"] = 0;//������
				$log_info["await"] = -$value['recover_account'];//���ս��
				$log_info["type"] = "tender_repay_yes";//����
				$log_info["to_userid"] = $borrow_userid;//����˭
				$log_info["remark"] = "�ͻ���{$borrow_username}����[{$borrow_url}]����ĵ�".($repay_period+1)."�ڻ���";
				accountClass::AddLog($log_info);
				
				$vip_result = self::GetBorrowVip(array("user_id"=>$value['user_id']));
				$vip_fee = $vip_result['fee'];
				
				if ($value['user_id']!=0){
					//�۳�Ͷ�ʵĹ����
					//��ʮ�Ĳ����۳��ɹ�����������
					$tender_fee = 0;
//					$tender_fee = $value['recover_interest']*0.05;
					//�û��Խ���Ļ���
					$log_info["user_id"] = $value['user_id'];//�����û�id
					$log_info["nid"] = "fengxianchi_".$value['user_id']."_".$borrow_nid.$value['id'];//������
					$log_info["money"] = $tender_fee;//�������
					$log_info["income"] = 0;//����
					$log_info["expend"] = $tender_fee;//֧��
					$log_info["balance_cash"] = -$tender_fee;//�����ֽ��
					$log_info["balance_frost"] = 0;//�������ֽ��
					$log_info["frost"] = 0;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "fengxianchi";//����
					$log_info["to_userid"] = 0;//����˭
					$log_info["remark"] = "�û��ɹ��Խ���[$borrow_url]��".($repay_period+1)."�ڽ��л�����Ϣ���ս�۳�";
					accountClass::AddLog($log_info);
					//����ͳ����Ϣ
				}
		
				//��ʮ��,Ͷ���߻���
				if($tender_credit_nid!=""){
					$credit_blog['user_id'] = $value['user_id'];
					$credit_blog['nid'] = $tender_credit_nid;
					$credit_blog['code'] = "borrow";
					$credit_blog['type'] = "tender_repay";
					$credit_blog['addtime'] = time();
					$credit_blog['article_id'] =$repay_id;
					$credit_blog['remark'] = "�û�����[{$borrow_url}]��{$repay_period}��Ͷ�ʻ���";
					creditClass::ActionCreditLog($credit_blog);
				}

								
				if($value['repay_period']+1==$repay_times){
					$credit_blog['user_id'] = $value['user_id'];
					$credit_blog['nid'] = "tender_repay_time";
					$credit_blog['code'] = "borrow";
					$credit_blog['type'] = "tender";
					$credit_blog['addtime'] = time();
					$credit_blog['article_id'] =$repay_id;
					$credit_blog['remark'] = "�յ����[{$borrow_url}]������Ϣ�������";
					creditClass::ActionCreditLog($credit_blog);
				}
				
				if ($late_days>0 && $late_days<31){
					if ($value['user_id']!=0){
						$log_info["user_id"] = $value['user_id'];//�����û�id
						$log_info["nid"] = "tender_late_repay_yes_".$value['user_id']."_".$borrow_nid.$value['id'];//������
						$log_info["money"] = $late_interest;//�������
						$log_info["income"] = $late_interest;//����
						$log_info["expend"] = 0;//֧��
						$log_info["balance_cash"] = $late_interest;//�����ֽ��
						$log_info["balance_frost"] = 0;//�������ֽ��
						$log_info["frost"] = 0;//������
						$log_info["await"] = 0;//���ս��
						$log_info["type"] = "tender_late_repay_yes";//����
						$log_info["to_userid"] = $value['user_id'];//����˭
						$log_info["remark"] = "�ͻ���{$borrow_username}����[{$borrow_url}]������ڻ����������Ϣ";
						accountClass::AddLog($log_info);
					}else{
						$log_info["user_id"] = 0;//�����û�id
						$log_info["nid"] = "web_tender_late_repay_yes_0_".$borrow_nid.$value['id'];//������
						$log_info["money"] = $late_interest;//�������
						$log_info["income"] = 0;//����
						$log_info["expend"] = $late_interest;//֧��
						$log_info["balance_cash"] = $late_interest;//�����ֽ��
						$log_info["balance_frost"] = 0;//�������ֽ��
						$log_info["frost"] = 0;//������
						$log_info["await"] = 0;//���ս��
						$log_info["type"] = "web_tender_late_repay_yes";//����
						$log_info["to_userid"] = 0;//����˭
						$log_info["remark"] = "����˶�[{$borrow_url}]������ڻ����������Ϣ{$borrow_username}";
						accountClass::AddLog($log_info);
					}
				}
				
				if ($value['change_status']!=1){
					self::UpdateBorrowCount(array("user_id"=>$value['user_id'],"tender_recover_times_yes"=>1,"tender_recover_times_wait"=>-1,"tender_recover_yes"=>$value['recover_account'],"tender_recover_wait"=>-$value['recover_account'],"tender_capital_yes"=>$value['recover_capital'],"tender_capital_wait"=>-$value['recover_capital'],"tender_interest_yes"=>$value['recover_interest'],"tender_interest_wait"=>-$value['recover_interest'],"fee_account"=>$tender_fee,"fee_tender_account"=>$tender_fee));
				}else{
					self::UpdateBorrowCount(array("user_id"=>$value['user_id'],"tender_interest_yes"=>$value['recover_interest']));
				}	
				
				//��������
				$remind['nid'] = "loan_pay";
				
				$remind['receive_userid'] = $value['user_id'];
				$remind['title'] = "�ͻ���{$borrow_username}����[{$borrow_name}]���Ļ���";
				$remind['content'] = "�ͻ���{$borrow_username}����".date("Y-m-d H:i:s")."��[{$borrow_url}}</a>]���Ļ���,������Ϊ��{$value['recover_account']}";
				
				remindClass::sendRemind($remind);
			}
		}
		
		
		//�����������½���˵Ļ������
		$re_time = (strtotime(date("Y-m-d",$repay_time))-strtotime(date("Y-m-d",time())))/(60*60*24);
		$borrow_credit_nid = "";
		$tender_credit_nid = "";
		if ($re_time!=0){
			if ($re_time<0){
				if ($re_time>=-3 && $re_time<=-1){
					$borrow_credit_nid = "borrow_repay_slow";
					$tender_credit_nid = "tender_repay_slow";
					self::UpdateBorrowCount(array("user_id"=>$borrow_userid,"borrow_repay_late_one"=>1));
				}
				elseif ($re_time>=-30 && $re_time<-3){
					$borrow_credit_nid = "borrow_repay_late_common";
					$tender_credit_nid = "tender_repay_late_common";
					self::UpdateBorrowCount(array("user_id"=>$borrow_userid,"borrow_repay_late_two"=>1));
				}
				elseif ($re_time>=-90 && $re_time<-30){
					$borrow_credit_nid = "borrow_repay_late_serious";
					$tender_credit_nid = "tender_repay_late_serious";
					self::UpdateBorrowCount(array("user_id"=>$borrow_userid,"borrow_repay_late_three"=>1));
				}
				elseif ( $re_time<-90){
					$borrow_credit_nid = "borrow_repay_late_spite";
					$tender_credit_nid = "tender_repay_late_spite";
					self::UpdateBorrowCount(array("user_id"=>$borrow_userid,"borrow_repay_late_four"=>1));
				}
			}
			
			//��ʮ��,����߻���
			if($borrow_credit_nid!=""){
				$credit_blog['user_id'] = $borrow_userid;
				$credit_blog['nid'] = $borrow_credit_nid;
				$credit_blog['code'] = "borrow";
				$credit_blog['type'] = "repay";
				$credit_blog['addtime'] = time();
				$credit_blog['article_id'] =$repay_id;
				$credit_blog['remark'] = "����[{$borrow_url}]��{$repay_period}�ڻ���";
				creditClass::ActionCreditLog($credit_blog);
			}
			
		}
		
		//�ж��Ƿ��ǵ�����
		if ($vouch_status=="1"){
		
			//��ʮ����Ͷ����Ͷ�ʵ�����ȵ�����
			$sql = "select * from `{borrow_vouch_recover}` where borrow_nid='{$borrow_nid}' and `order`={$repay_period}";
			$result = $mysql->db_fetch_arrays($sql);
			
			if ($result!=""){
				foreach ($result as $key => $value){
					//��Ӷ�ȼ�¼
					//��ʮ����������Ͷ�ʶ�ȵ�����
					$_data["user_id"] = $value['user_id'];
					$_data["amount_type"] = "vouch_tender";
					$_data["type"] = "borrrow_vouch_recover";
					$_data["oprate"] = "add";
					$_data["nid"] = "borrrow_vouch_recover_".$value['user_id']."_".$borrow_nid.$value['id'];
					$_data["account"] = $value['repay_capital'];
					$_data["remark"] =  "������[{$borrow_url}]����ɹ���Ͷ�ʵ�����ȷ���";
					borrowClass::AddAmountLog($_data);
					
					$sql = "update `{borrow_vouch_recover}` set repay_yestime = ".time().",repay_yesaccount = {$value['repay_account']},status=1 where id = {$value['id']}";
					$mysql->db_query($sql);
					
				}
			}
			
			//��ʮһ��������˵�����ȵ�����
			$sql = "select * from `{borrow_vouch_repay}` where borrow_nid='{$borrow_nid}' and `order`={$repay_period}";
			$result = $mysql->db_fetch_array($sql);
			if ($result!=""){
				$_data["user_id"] = $borrow_userid;
				$_data["amount_type"] = "vouch_borrow";
				$_data["type"] = "borrrow_vouch_repay";
				$_data["oprate"] = "add";
				$_data["nid"] = "borrrow_vouch_repay_".$value['user_id']."_".$borrow_nid.$repay_period;
				$_data["account"] = $value['repay_capital'];
				$_data["remark"] =   "����[{$borrow_url}]������ɣ�������ȷ���";
				borrowClass::AddAmountLog($_data);
			}
			$sql = "update `{borrow_vouch_repay}` set repay_yestime = ".time().",repay_yesaccount = {$value['repay_account']},status=1 where id = {$result['id']}";
			$mysql->db_query($sql);
		}else{
			//��ʮ����������Ͷ�ʶ�ȵ�����
			$con_borrrow_repay_amount = isset($_G['system']['con_borrrow_repay_amount'])?$_G['system']['con_borrrow_repay_amount']:"0";//����Ͷ�ʶ��
		    if($con_borrrow_repay_amount>0)
		   {
			$_data["user_id"] = $borrow_userid;
			$_data["amount_type"] = "borrow";
			$_data["type"] = "borrrow_repay";
			$_data["oprate"] = "add";
			$_data["nid"] = "borrrow_repay_".$borrow_userid."_".$borrow_nid.$repay_id;
			$_data["account"] = $repay_capital*$con_borrrow_repay_amount*0.01;
			$_data["remark"] = "����[{$borrow_url}]�ɹ�����������";
			borrowClass::AddAmountLog($_data); 
		   }
			
		
		}
	
		
		
		//������Ļ�����
		$yue_time=$repay_times+(31*60*60*24);
		$sql = "update `{borrow}` set repay_next_time={$yue_time},repay_account_yes= repay_account_yes + {$repay_account},repay_account_capital_yes= repay_account_capital_yes + {$repay_capital},repay_account_interest_yes= repay_account_interest_yes + {$repay_interest},repay_account_wait= repay_account_wait - {$repay_account},repay_account_capital_wait= repay_account_capital_wait - {$repay_capital},repay_account_interest_wait= repay_account_interest_wait - {$repay_interest} where borrow_nid='{$borrow_nid}'";
		$result = $mysql -> db_query($sql);
		
		
		$sql = "update `{borrow_repay}` set repay_status=1,repay_yestime='".time()."',repay_account_yes=repay_account,repay_interest_yes=repay_interest,repay_capital_yes=repay_capital where id='{$repay_id}'";
		$mysql->db_query($sql);
		return $result;
	}
	
	/**
	 * �����б�
	 *
	 * @return Array
	 */
	function GetVouchList($data = array()){
		global $mysql;
		$user_id = empty($data['user_id'])?"":$data['user_id'];
		$username = empty($data['username'])?"":$data['username'];
	
		$_sql = "where 1=1";		 
		if (IsExiest($data['user_id'])!=""){
			$_sql .= " and p1.user_id = {$data['user_id']}";
		}
		if (IsExiest($data['username'])!=""){
			$_sql .= " and p2.username = '{$data['user_id']}'";
		}
		if (IsExiest($data['borrow_nid'])!=""){
			$_sql .= " and p1.borrow_nid = '{$data['borrow_nid']}'";
		}
	
		if (IsExiest($data['dotime1'])!=""){
			$dotime1 = ($data['dotime1']=="request")?$_REQUEST['dotime1']:$data['dotime1'];
			if ($dotime1!=""){
				$_sql .= " and p1.addtime > ".get_mktime($dotime1);
			}
		}
		if (IsExiest($data['dotime2'])!=""){
			$dotime2 = ($data['dotime2']=="request")?$_REQUEST['dotime2']:$data['dotime2'];
			if ($dotime2!=""){
				$_sql .= " and p1.addtime < ".get_mktime($dotime2);
			}
		}
		if (IsExiest($data['status'])!=""){
			$_sql .= " and p1.status in ({$data['status']})";
		}
		if (IsExiest($data['borrow_status']) !=""){
			$_sql .= " and p3.status in ({$data['borrow_status']})";
		}
		
	
		$_select = "p1.*,p2.username,p3.name as borrow_name,p3.borrow_period,p3.account as borrow_account,p4.username as borrow_username";
		$sql = "select SELECT from `{borrow_vouch}` as p1
				left join `{users}` as p2 on p2.user_id = p1.user_id
				left join `{borrow}` as p3 on p1.borrow_nid = p3.borrow_nid
				left join `{users}` as p4 on p4.user_id = p3.user_id
		 {$_sql}  order by p1.addtime desc LIMIT";
				
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
	
	function GetVouchRepayList($data = array()){
		global $mysql;
	
		$page = empty($data['page'])?1:$data['page'];
		$epage = empty($data['epage'])?10:$data['epage'];
		
		$_sql = " where p1.borrow_nid=p2.borrow_nid and p2.user_id=p3.user_id ";
		if (IsExiest($data['borrow_nid'])!=""){
			if ($data['borrow_nid'] == "request"){
				$_sql .= " and p1.borrow_nid= '{$_REQUEST['borrow_nid']}'";
			}else{
				$_sql .= " and p1.borrow_nid= '{$data['borrow_nid']}'";
			}
		}
		
		if (IsExiest($data['user_id'])!=""){
			$_sql .= " and p2.user_id = '{$data['user_id']}'";
		}	 
		
		if (IsExiest($data['vouch_userid']) !=""){
			$_sql .= " and p2.borrow_nid in (select borrow_nid from `{borrow_vouch}` where user_id={$data['vouch_userid']})";
		}	 
		
		if (IsExiest($data['username'])!=""){
			$_sql .= " and p3.username like '%{$data['username']}%'";
		}	 
		
		if (IsExiest($data['repay_time'])!=""){
			if ($date['repay_time']<=0) $data['repay_time'] = time();
			$_repayment_time = get_mktime(date("Y-m-d",$data['repay_time']));
			$_sql .= " and p1.repay_time < '{$_repayment_time}'";
		}	 
		
		if (IsExiest($data['dotime2'])!=""){
			$dotime2 = ($data['dotime2']=="request")?$_REQUEST['dotime2']:$data['dotime2'];
			if ($dotime2!=""){
				$_sql .= " and p2.addtime < ".get_mktime($dotime2);
			}
		}
		if (IsExiest($data['dotime1'])!=""){
			$dotime1 = ($data['dotime1']=="request")?$_REQUEST['dotime1']:$data['dotime1'];
			if ($dotime1!=""){
				$_sql .= " and p2.addtime > ".get_mktime($dotime1);
			}
		}
		
		if (IsExiest($data['status'])!=""){
			$_sql .= " and p1.status in ({$data['status']})";
		}
		
		if (IsExiest($keywords)!=""){
		    if ($keywords=="request"){
				if (isset($_REQUEST['keywords']) && $_REQUEST['keywords']!=""){
					$_sql .= " and p2.name like '%".urldecode($_REQUEST['keywords'])."%'";
				}
			}else{
				$_sql .= " and p2.name like '%".$keywords."%'";
			}
			
		}
		
		$_order = " order by p1.id desc";
		if (isset($data['order']) && $data['order']!="" ){
			if ($data['order'] == "repayment_time"){
				$_order = " order by p1.repay_time asc ";
			}elseif ($data['order'] == "order"){
				$_order = " order by p1.order asc ,p1.id desc";
			}
		}
		
		$_select = " p1.*,p2.name as borrow_name,p2.borrow_period,p3.username as borrow_username";
		$sql = "select SELECT from `{borrow_vouch_repay}` as p1 left join `{borrow}` as p2 on p1.borrow_nid = p2.borrow_nid left join `{users}` as p3 on p3.user_id=p2.user_id {$_sql} ORDER LIMIT";
		
		//�Ƿ���ʾȫ������Ϣ
		if (isset($data['limit']) ){
			$_limit = "";
			if ($data['limit'] != "all"){
				$_limit = "  limit ".$data['limit'];
			}
			$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select,  $_order, $_limit), $sql));
			foreach ($list as $key => $value){
				$late = self::LateInterest(array("time"=>$value['repay_time'],"account"=>$value['capital']));
				if ($value['status']!=1){
					$list[$key]['late_days'] = $late['late_days'];
					$list[$key]['late_interest'] = $late['late_interest'];
				}
			}
			return $list;
		}			 
		
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array('count(1) as num', '', ''), $sql));
		
		$total = $row['num'];
		$total_page = ceil($total / $epage);
		$index = $epage * ($page - 1);
		$limit = " limit {$index}, {$epage}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select,$_order, $limit), $sql));		
		$list = $list?$list:array();
		foreach ($list as $key => $value){
			$late = self::LateInterest(array("time"=>$value['repay_time'],"account"=>$value['capital']));
			if ($value['status']!=1){
				$list[$key]['late_days'] = $late['late_days'];
				$list[$key]['late_interest'] = $late['late_interest'];
			}
		}
		return array(
            'list' => $list,
            'total' => $total,
            'page' => $page,
            'epage' => $epage,
            'total_page' => $total_page
        );
		
	}
	
	
	function GetVouchRecoverList($data = array()){
		global $mysql;
	
		$page = empty($data['page'])?1:$data['page'];
		$epage = empty($data['epage'])?10:$data['epage'];
		
		$_sql = " where p1.borrow_nid=p2.borrow_nid and p2.user_id=p3.user_id ";
		if (IsExiest($data['borrow_nid'])!=""){
			if ($data['borrow_nid'] == "request"){
				$_sql .= " and p1.borrow_nid= '{$_REQUEST['borrow_nid']}'";
			}else{
				$_sql .= " and p1.borrow_nid= '{$data['borrow_nid']}'";
			}
		}
		
		if (IsExiest($data['user_id'])!=""){
			$_sql .= " and p2.user_id = '{$data['user_id']}'";
		}	 
		
		if (IsExiest($data['vouch_userid']) !=""){
			$_sql .= " and p1.user_id = '{$data['vouch_userid']}'";
		}	 
		
		if (IsExiest($data['username'])!=""){
			$_sql .= " and p3.username like '%{$data['username']}%'";
		}	 
		
		if (IsExiest($data['type'])=="late"){
			$_sql .= " and p1.repay_time<".time() ." and p1.status=0";
		}	 
		
		if (IsExiest($data['repay_time'])!=""){
			if ($date['repay_time']<=0) $data['repay_time'] = time();
			$_repayment_time = get_mktime(date("Y-m-d",$data['repay_time']));
			$_sql .= " and p1.repay_time < '{$_repayment_time}'";
		}	 
		
		if (IsExiest($data['dotime2'])!=""){
			$dotime2 = ($data['dotime2']=="request")?$_REQUEST['dotime2']:$data['dotime2'];
			if ($dotime2!=""){
				$_sql .= " and p2.addtime < ".get_mktime($dotime2);
			}
		}
		if (IsExiest($data['dotime1'])!=""){
			$dotime1 = ($data['dotime1']=="request")?$_REQUEST['dotime1']:$data['dotime1'];
			if ($dotime1!=""){
				$_sql .= " and p2.addtime > ".get_mktime($dotime1);
			}
		}
		
		if (IsExiest($data['status'])!=""){
			$_sql .= " and p1.status in ({$data['status']})";
		}
		
		if (IsExiest($keywords)!=""){
		    if ($keywords=="request"){
				if (isset($_REQUEST['keywords']) && $_REQUEST['keywords']!=""){
					$_sql .= " and p2.name like '%".urldecode($_REQUEST['keywords'])."%'";
				}
			}else{
				$_sql .= " and p2.name like '%".$keywords."%'";
			}
			
		}
		
		$_order = " order by p1.id desc";
		if (isset($data['order']) && $data['order']!="" ){
			if ($data['order'] == "repayment_time"){
				$_order = " order by p1.repay_time asc ";
			}elseif ($data['order'] == "order"){
				$_order = " order by p1.order asc ,p1.id desc";
			}
		}

		$_select = " p1.*,p2.name as borrow_name,p2.borrow_period,p3.username as borrow_username";
		$sql = "select SELECT from `{borrow_vouch_recover}` as p1 left join `{borrow}` as p2 on p1.borrow_nid = p2.borrow_nid left join `{users}` as p3 on p3.user_id=p2.user_id {$_sql} ORDER LIMIT";
		
		//�Ƿ���ʾȫ������Ϣ
		if (isset($data['limit']) ){
			$_limit = "";
			if ($data['limit'] != "all"){
				$_limit = "  limit ".$data['limit'];
			}
			$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select,  $_order, $_limit), $sql));
			
			foreach ($list as $key => $value){
				$late = self::LateInterest(array("time"=>$value['repay_time'],"account"=>$value['reapy_account']));
				if ($value['status']!=1){
					$list[$key]['late_days'] = $late['late_days'];
					$list[$key]['late_interest'] = $late['late_interest'];
				}
			}
			return $list;
		}			 
		
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array('count(1) as num', '', ''), $sql));
		
		$total = $row['num'];
		$total_page = ceil($total / $epage);
		$index = $epage * ($page - 1);
		$limit = " limit {$index}, {$epage}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select,$_order, $limit), $sql));		
		$list = $list?$list:array();
		foreach ($list as $key => $value){
			$late = self::LateInterest(array("time"=>$value['repay_time'],"account"=>$value['capital']));
			if ($value['status']!=1){
				$list[$key]['late_days'] = $late['late_days'];
				$list[$key]['late_interest'] = $late['late_interest'];
			}
		}
		return array(
            'list' => $list,
            'total' => $total,
            'page' => $page,
            'epage' => $epage,
            'total_page' => $total_page
        );
		
	}
	
	
	//�����渶
	function VouchDianfu($data = array()){
		global $mysql;
		$sql = "select p1.*,p2.name as borrow_name from `{borrow_vouch_recover}` as p1 left join `{borrow}` as p2 on p1.borrow_nid = p2.borrow_nid where p1.user_id='{$data['user_id']}' and  p1.id='{$data['id']}' and p1.repay_time< ".time()."";
		$result = $mysql->db_fetch_array($sql);
		
		//��һ�����жϵ�����Ϣ�Ƿ����
		if ($result==false){
			return "error";
		}
		//�ڶ������жϵ����Ƿ�����30��
		$late = self::LateInterest(array("time"=>$result['repay_time'],"account"=>$result['repay_account']));
		if ($late["late_days"]<10){
			return "vouch_late_days_30no";
		}
		
		$borrow_nid = $result["borrow_nid"];
		$borrow_name = $result["borrow_name"];
		$repay_period = $result["order"];
		$borrow_period = $result["borrow_period"];
		$borrow_url = "<a href={$_G['weburl']}/invest/a{$result['borrow_nid']}.html target=_blank>{$result['borrow_name']}</a>";
		
		
		//�����������µ�����Ϣ�渶��ϢΪ1
		$sql = "update `{borrow_vouch_recover}` set advance_status =1,advance_time='".time()."' where id='{$data['id']}'";
		$mysql->db_query($sql);
	
		//���Ĳ����ж��Ƿ��Ѿ��渶��
		$sql = "select * from `{borrow_repay}` where borrow_nid = '{$borrow_nid}' and repay_period='{$repay_period}'";
		$result = $mysql->db_fetch_array($sql);
		
		if ($result["repay_vouch"]!=1 && $result["repay_status"]!=1){
			
			//���������ж��Ѿ�ȫ���������渶���
			$sql = "select * from `{borrow_vouch_recover}` where borrow_nid = '{$borrow_nid}' and `order`='{$repay_period}' and advance_status=0";
			$result = $mysql->db_fetch_array($sql);
			
			if ($result==false || $result==""){
				//���岽�����»����ߵĵ���������Ϣ��
				$sql = "update `{borrow_repay}` set repay_vouch=1,repay_vouch_time='".time()."' where borrow_nid='{$borrow_nid}' and repay_period='{$repay_period}'";
				$mysql->db_query($sql);
			
				$sql = "select p1.*,p2.status as vip_status from `{borrow_recover}` as p1 left join `{users_vip}` as p2 on p1.user_id=p2.user_id  where p1.`recover_period` = '{$repay_period}' and p1.borrow_nid='{$borrow_nid}'";
				$result = $mysql->db_fetch_arrays($sql);
				
				foreach ($result as $key => $value){
				
					//���߲�������Ͷ���˵ķ�����Ϣ
					$sql = "update  `{borrow_recover}` set recover_yestime='".time()."',recover_account_yes = recover_account ,recover_capital_yes = recover_capital ,recover_interest_yes = recover_interest ,status=1,recover_status=1,recover_vouch=1   where id = '{$value['id']}'";
					$mysql->db_query($sql);
					
					//�ڰ˲�������Ͷ���˵���Ϣ����Ϣ
					$sql = "update  `{borrow_tender}` set recover_times=recover_times+1,recover_account_yes= recover_account_yes + {$value['recover_account']},recover_account_capital_yes = recover_account_capital_yes  + {$value['recover_capital']} ,recover_account_interest_yes = recover_account_interest_yes + {$value['recover_interest']},recover_account_wait= recover_account_wait - {$value['recover_account']},recover_account_capital_wait = recover_account_capital_wait  - {$value['recover_capital']} ,recover_account_interest_wait = recover_account_interest_wait - {$value['recover_interest']}  where id = '{$value['tender_id']}'";
					$mysql->db_query($sql);
					
					//�ھŲ��������߶Խ���Ļ���
					$account_result =  accountClass::GetOne(array("user_id"=>$value['user_id']));
					$log['user_id'] =$value['user_id'];
					$log['type'] = "vouch_recover_yes";
					if($value['vip_status']==1){
						$log['money'] = $value['recover_account'];
					}else{
						$log['money'] = round($value['recover_capital']/2,2);
					}
					
					$log['total'] = $account_result['total'];
					$log['use_money'] = $account_result['use_money']+$log['money'];
					$log['no_use_money'] = $account_result['no_use_money'];
					$log['collection'] =$account_result['collection'] -$log['money'];
					$log['use_money_yes'] = $account_result['use_money_yes']+$log['money'];
					$log['use_money_no'] = $account_result['use_money_no'];
					$log['to_user'] = $borrow_userid;
					$log['remark'] = "�����߶�[{$borrow_url}]���ĵ渶";
					$result = accountClass::AddLog($log);
					
					
					//��ʮ�����۳�Ͷ�ʵĹ����
				
					$account_result =  accountClass::GetOne(array("user_id"=>$value['user_id']));
					$log['user_id'] = $value['user_id'];
					$log['type'] = "tender_interest_fee";//
					
					$vip_result = self::GetBorrowVip(array("user_id"=>$value['user_id']));
		          
			       if ($vip_result['vip']==0){
					$_fee = isset($_G['system']['con_borrow_interest_fee'])?$_G['system']['con_borrow_interest_fee']*0.01:0.1;
					}else{
					$_fee = isset($_G['system']['con_borrow_interest_vip_fee'])?$_G['system']['con_borrow_interest_vip_fee']*0.01:0.1;
					}
					
					if ($_fee>0 && $_fee!="0") {
						$log['money'] = $value['recover_interest']*$_fee;
						$log['total'] = $account_result['total']-$log['money'];
						$log['use_money'] = $account_result['use_money']-$log['money'];
						$log['no_use_money'] = $account_result['no_use_money'];
						$log['collection'] = $account_result['collection'];
						$log['use_money_yes'] = $account_result['use_money_yes']-$log['money'];
						$log['use_money_no'] = $account_result['use_money_no'];
						$log['to_user'] = 0;
						$log['remark'] = "�����߳ɹ����渶$borrow_url]�۳���Ϣ�Ĺ����";
						accountClass::AddLog($log);
					}
					//��������
					$remind['nid'] = "loan_pay";
					
					$remind['receive_userid'] = $value['user_id'];
					$remind['title'] = "�����߶�[{$borrow_name}]���Ļ���";
					$remind['content'] = "��������".date("Y-m-d H:i:s")."��[{$borrow_url}}</a>]���Ļ���,������Ϊ��{$value['recover_account']}";
					
					//remindClass::sendRemind($remind);
					
				}
				//��ʮһ�����۳������˵Ŀ��ý��
				$sql = "select * from `{borrow_vouch_recover}` where borrow_nid = '{$borrow_nid}' and `order`='{$repay_period}' ";
				$result = $mysql->db_fetch_arrays($sql);
				
				foreach ($result as $key => $value){
					
					//�ڰ˲�������Ͷ���˵ķ�����Ϣ
					//�û��Խ���Ļ���
					$account_result =  accountClass::GetOne(array("user_id"=>$value['user_id']));
					$log['user_id'] =$value['user_id'];
					$log['type'] = "vouch_repay_yes";
					$log['money'] = $value['repay_account'];
					$log['total'] = $account_result['total'] -$log['money'];
					$log['use_money'] = $account_result['use_money']-$log['money'];
					$log['no_use_money'] = $account_result['no_use_money'];
					$log['collection'] =$account_result['collection'];
					$log['use_money_yes'] = $account_result['use_money_yes'];
					$log['use_money_no'] = $account_result['use_money_no']-$log['money'];
					$log['to_user'] = $vouch_userid;
					$log['remark'] = "��[{$borrow_url}]���ĵ渶���Ŀ۳�";
					accountClass::AddLog($log);
					
					
					//��������
					$remind['nid'] = "loan_pay";
					
					$remind['receive_userid'] = $value['user_id'];
					$remind['title'] = "�����߶�[{$borrow_name}]���ĵ渶���Ŀ۳�";
					$remind['content'] = "��������".date("Y-m-d H:i:s")."��[{$borrow_url}}</a>]���Ļ���,�渶���Ϊ��{$value['repay_account']}";
					
					//remindClass::sendRemind($remind);
					
				}
			}
		}
		return true;
	}
	
	public static function BorrowAdvanceRepay($data = array()){
		global $mysql,$_G;
		
		if (IsExiest($data['user_id'])==""){
			return "borrow_user_id_empty";
		}
		
		if (IsExiest($data['borrow_nid'])==""){
			return "borrow_nid_empty";
		}
		
		$sql = "select count(1) as num,sum(repay_account) as all_account,sum(repay_capital) as all_capital,sum(repay_interest) as all_interest,user_id from `{borrow_repay}` where user_id='{$data['user_id']}' and borrow_nid='{$data['borrow_nid']}' and repay_status=0";
		$result= $mysql->db_fetch_array($sql);
		
		$borrow_userid = $data["user_id"];
		$borrow_username = $result["username"];
		$borrow_nid = $data["borrow_nid"];
		$repay_period = $result["num"];
		$repay_account = $result["all_account"];//�����ܶ�
		$repay_capital = $result["all_capital"];//�����
		$repay_interest = $result["all_interest"];//������Ϣ
		
		$sql = "select * from `{borrow}` where borrow_nid = '{$borrow_nid}'";
		$result = $mysql->db_fetch_array($sql);
		$borrow_forst_account = $result["borrow_forst_account"];
		$borrow_name = $result['name'];
		$borrow_period = $result["borrow_period"];
		$repay_times = $result["repay_times"];
		$borrow_account = $result["account"];
		$borrow_style = $result["borrow_style"];
		$borrow_url = "<a href=/invest/a{$result['borrow_nid']}.html target=_blank>{$result['name']}</a>";//���ĵ�ַ
				
		//���Ĳ����жϿ�������Ƿ񹻻���
		$account_result =  accountClass::GetAccountUsers(array("user_id"=>$borrow_userid));//��ȡ��ǰ�û������;
		if ($account_result['balance']<$repay_account){
			return "borrow_repay_account_use_none";
		}
		$log_info["user_id"] = $borrow_userid;//�����û�id
		$log_info["nid"] = "advance_repay_".$borrow_userid."_".$borrow_nid;//������
		$log_info["money"] = $repay_capital;//�������
		$log_info["income"] = 0;//����
		$log_info["expend"] = $repay_capital;//֧��
		$log_info["balance_cash"] = -$repay_capital;//�����ֽ��
		$log_info["balance_frost"] = 0;//�������ֽ��
		$log_info["frost"] = 0;//������
		$log_info["await"] = 0;//���ս��
		$log_info["type"] = "borrow_advance_repay";//����
		$log_info["to_userid"] = 0;//����˭
		$log_info["remark"] = "��[{$borrow_url}]��ǰȫ���";
		accountClass::AddLog($log_info);
		
		$log_info["user_id"] = $borrow_userid;//�����û�id
		$log_info["nid"] = "advance_interest_repay_".$borrow_userid."_".$borrow_nid;//������
		$log_info["money"] = round($repay_capital/100,2);//�������
		$log_info["income"] = 0;//����
		$log_info["expend"] = $log_info["money"];//֧��
		$log_info["balance_cash"] = -$log_info["money"];//�����ֽ��
		$log_info["balance_frost"] = 0;//�������ֽ��
		$log_info["frost"] = 0;//������
		$log_info["await"] = 0;//���ս��
		$log_info["type"] = "borrow_interest_advance_repay";//����
		$log_info["to_userid"] = 0;//����˭
		$log_info["remark"] = "��[{$borrow_url}]��ǰȫ���,�۳�����1%��ΥԼ��";
		accountClass::AddLog($log_info);
		
		//��ʮ���������ӽ���ƹ��˽��
		//��ȡͶ���˵Ķ���Ͷ���ƹ���
		$spread_sql="select * from `{spread_user}` where spread_userid={$borrow_userid} and style=1 and type=3";
		$result_spread=$mysql->db_fetch_array($spread_sql);
		
		if ($result_spread==true){
			//��ȡ����Ͷ���ƹ��˵��������
			$feesql="select `task_fee` from `{spread_setting}` where type=4";
			$fee_result=$mysql->db_fetch_array($feesql);
			
			$log_info["user_id"] = $result_spread['user_id'];//�ƹ�Ա
			$log_info["nid"] = "borrow_spread_".$borrow_nid.$borrow_userid.$result_spread['user_id'];//������
			$log_info["money"] = round($repay_capital/100*$fee_result['task_fee'],2);//�������
			$log_info["income"] = $log_info["money"];//����
			$log_info["expend"] = 0;//֧��
			$log_info["balance_cash"] = $log_info["money"];//�����ֽ��
			$log_info["balance_frost"] = 0;//�������ֽ��
			$log_info["frost"] = 0;//������
			$log_info["await"] = 0;//���ս��
			$log_info["type"] = "borrow_spread";//����
			$log_info["to_userid"] = $result_spread['user_id'];//����˭
			$log_info["remark"] = "����ƹ�ͻ�[{$borrow_username}]���[{$borrow_url}]�ɹ����õ��ƹ���ɣ�������{$repay_capital}�������{$fee_result['task_fee']}%";
			accountClass::AddLog($log_info);
			
			$web['money']=$log_info["money"];
			$web['user_id']=$result_spread['user_id'];
			$web['nid']="other_spread_borrow_".$result_spread['user_id']."_".time();
			$web['type']="other_spread_borrow";
			$web['remark']="�ƹ���ͻ�[{$borrow_username}]���{$log_info["money"]}��������ƹ��";
			accountClass::AddAccountWeb($web);
		}
		
		// * ����������⣬������ѵĿ۳�
		$vip_result = self::GetBorrowVip(array("user_id"=>$borrow_userid));
		$vip_fee = $vip_result['fee'];
		if ($borrow_style!=5){
			if ($vip_result['vip']==0){
				$borrow_manage_fee = isset($_G['system']["con_borrow_manage_fee"])?$_G['system']["con_borrow_manage_fee"]:0.5;
			}else{
				$borrow_manage_fee = (isset($_G['system']["con_borrow_manage_vip_fee"])?$_G['system']["con_borrow_manage_vip_fee"]:0.4)*$vip_fee;
			}
			$manage_fee = $repay_capital*$borrow_manage_fee*0.01;
		}
			
		// * �������ڵ���Ϣ
		$sql = "update `{borrow_repay}` set late_days = '0',late_interest = '0',late_reminder = '0' where user_id='{$data['user_id']}' and borrow_nid='{$data['borrow_nid']}' and repay_status=0";
		$mysql->db_query($sql);
		
		$all_account=round($repay_capital/100+$repay_capital,2);
		
		//����ͳ����Ϣ
		self::UpdateBorrowCount(array("user_id"=>$borrow_userid,"advance_repay_times"=>$repay_period,"borrow_repay_wait_times"=>-$repay_period,"borrow_repay_yes"=>$all_account,"borrow_repay_wait"=>-$repay_account,"borrow_repay_interest_yes"=>$repay_interest,"borrow_repay_interest_wait"=>-$repay_interest,"borrow_repay_capital_yes"=>$repay_capital,"borrow_repay_capital_wait"=>-$repay_capital,"borrow_weiyue"=>$log_info["money"]));		

		$sql = "select p1.*,p2.change_status,p2.change_userid from `{borrow_recover}` as p1 left join `{borrow_tender}` as p2 on p1.tender_id=p2.id  where p1.borrow_nid='{$borrow_nid}' and p1.recover_status=0";
		$result = $mysql->db_fetch_arrays($sql);
		foreach ($result as $key => $value){
			$lixi=round($value['recover_capital']/100,2);
			$all=round($value['recover_capital']/100+$value['recover_capital'],2);
			
			$sql = "update  `{borrow_recover}` set recover_yestime='".time()."',recover_account_yes = {$value['recover_capital']} ,recover_capital_yes = recover_capital ,recover_interest_yes =0 ,status=1,recover_status=1,advance_status=1 where id = '{$value['id']}'";
			$mysql->db_query($sql);
			
			
			//����Ͷ�ʵ���Ϣ
			$sql = "update  `{borrow_tender}` set recover_times=recover_times+1,recover_account_yes= recover_account_yes + {$value['recover_capital']},recover_account_capital_yes = recover_account_capital_yes  + {$value['recover_capital']} ,recover_account_interest_yes = recover_account_interest_yes,recover_account_wait= recover_account_wait - {$value['recover_account']},recover_account_capital_wait = recover_account_capital_wait  - {$value['recover_capital']} ,recover_account_interest_wait = recover_account_interest_wait - {$value['recover_interest']}  where id = '{$value['tender_id']}'";
			$mysql->db_query($sql);
			
			if ($value['change_status']==1){
				$value['user_id'] = $value['change_userid'];
				if ($value['change_userid']=="" || $value['change_userid']==0){
					$value['user_id']=0;
				}
			}
			if ($value['user_id']!=0){
				//�û��Խ���Ļ���
				$log_info["user_id"] = $value['user_id'];//�����û�id
				$log_info["nid"] = "tender_advance_repay_yes_".$value['user_id']."_".$borrow_nid.$value['id'];//������
				$log_info["money"] = $value['recover_capital'];//�������
				$log_info["income"] = $value['recover_capital'];//����
				$log_info["expend"] = 0;//֧��
				$log_info["balance_cash"] = $value['recover_capital'];//�����ֽ��
				$log_info["balance_frost"] = 0;//�������ֽ��
				$log_info["frost"] = 0;//������
				$log_info["await"] = -$value['recover_account'];//���ս��
				$log_info["type"] = "tender_advance_repay_yes";//����
				$log_info["to_userid"] = $borrow_userid;//����˭
				$log_info["remark"] = "����˶�[{$borrow_url}]������ǰ����,�������";
				accountClass::AddLog($log_info);
				
				//�û��Խ���Ļ���
				$log_info["user_id"] = $value['user_id'];//�����û�id
				$log_info["nid"] = "tender_advance_repay_interest_".$value['user_id']."_".$borrow_nid.$value['id'];//������
				$log_info["money"] = round($value['recover_capital']/100,2);//�������
				$log_info["income"] = $log_info["money"];//����
				$log_info["expend"] = 0;//֧��
				$log_info["balance_cash"] = $log_info["money"];//�����ֽ��
				$log_info["balance_frost"] = 0;//�������ֽ��
				$log_info["frost"] = 0;//������
				$log_info["await"] = 0;//���ս��
				$log_info["type"] = "tender_advance_repay_interest";//����
				$log_info["to_userid"] = $borrow_userid;//����˭
				$log_info["remark"] = "[{$borrow_url}]�����ǰ������ȡ����1%��ΥԼ��";
				accountClass::AddLog($log_info);
				
				if ($value['change_status']!=1){
					self::UpdateBorrowCount(array("user_id"=>$value['user_id'],"tender_recover_times_yes"=>1,"tender_recover_times_wait"=>-1,"tender_recover_yes"=>$all,"tender_recover_wait"=>-$value['recover_account'],"tender_capital_yes"=>$value['recover_capital'],"tender_capital_wait"=>-$value['recover_capital'],"tender_interest_yes"=>0,"tender_interest_wait"=>-$value['recover_interest'],"weiyue"=>$lixi));
				}else{
					self::UpdateBorrowCount(array("user_id"=>$value['user_id'],"weiyue"=>$lixi));
				}
				
				//��������
				$remind['nid'] = "loan_pay";
				$remind['receive_userid'] = $value['user_id'];
				$remind['title'] = "����˶�[{$borrow_name}]������ǰ����";
				$remind['content'] = "�ͻ���{$borrow_username}����".date("Y-m-d H:i:s")."��[{$borrow_url}}</a>]���Ļ���,������Ϊ��{$value['recover_account']}";
				remindClass::sendRemind($remind);
			}else{
				$log_info["user_id"] = 0;//�����û�id
				$log_info["nid"] = "advance_repay_0_".$borrow_nid.$value['id'];//������
				$log_info["money"] = $lixi;//�������
				$log_info["income"] = 0;//����
				$log_info["expend"] = $lixi;//֧��
				$log_info["balance_cash"] = -$lixi;//�����ֽ��
				$log_info["balance_frost"] = 0;//�������ֽ��
				$log_info["frost"] = 0;//������
				$log_info["await"] = 0;//���ս��
				$log_info["type"] = "advance_web";//����
				$log_info["to_userid"] = 0;//����˭
				$log_info["remark"] = "��[{$borrow_url}]�����վΥԼ������".$borrow_username;
				accountClass::AddLog($log_info);
			}
		}
			
		//��󻹿����
		$credit_log['user_id'] = $borrow_userid;
		$credit_log['nid'] = "borrow_repay_all";
		$credit_log['code'] = "borrow";
		$credit_log['type'] = "repay_all";
		$credit_log['addtime'] = time();
		$credit_log['article_id'] =$repay_id;
		$credit_log['value'] = round($borrow_account/100);
		$credit_log['remark'] =  "���[{$borrow_url}]�������û���";;
		creditClass::ActionCreditLog($credit_log);
		
		//����Ͷ�ʶ�ȵ�����
		$con_borrrow_repay_amount = isset($_G['system']['con_borrrow_repay_amount'])?$_G['system']['con_borrrow_repay_amount']:"0";//����Ͷ�ʶ��
		if($con_borrrow_repay_amount>0)
		{
		$_data["user_id"] = $borrow_userid;
		$_data["amount_type"] = "borrow";
		$_data["type"] = "borrrow_repay";
		$_data["oprate"] = "add";
		$_data["nid"] = "borrrow_repay_".$borrow_userid."_".$borrow_nid.$repay_id;
		$_data["account"] = $repay_capital*$con_borrrow_repay_amount*0.01;
		$_data["remark"] = "����[{$borrow_url}]�ɹ�����������";
		borrowClass::AddAmountLog($_data);
		}
		
		//������Ļ�����
		$sql = "update `{borrow}` set repay_account_yes= repay_account_yes + {$all_account},repay_account_capital_yes= repay_account_capital_yes + {$repay_capital},repay_account_interest_yes= repay_account_interest_yes,repay_account_wait=0,repay_account_capital_wait=0,repay_account_interest_wait=0 where borrow_nid='{$borrow_nid}'";
		$result = $mysql -> db_query($sql);
		
		$sql="select * from `{borrow_repay}` where user_id='{$data['user_id']}' and borrow_nid='{$data['borrow_nid']}' and repay_status=0";
		$repayresult=$mysql->db_fetch_arrays($sql);
		foreach($repayresult as $key => $value){
			$lixi=round($value['repay_capital']/100,2);
			$all=round($value['repay_capital']/100+$value['repay_capital'],2);
			$_sql = "update `{borrow_repay}` set repay_status=1,repay_yestime='".time()."',repay_account_yes={$all},repay_interest_yes=0,repay_capital_yes=repay_capital where id='{$value['id']}'";
			$mysql->db_query($_sql);
		}
		return $result;
	}
	
	function RepayJoinBad($data){
		global $mysql;
		
		if ($data['borrow_nid']=="") return false;
		
		$sql="update `{borrow_repay}` set `bad_status`={$data['bad_status']} where borrow_nid = {$data['borrow_nid']}";
		$mysql->db_query($sql);
		
		return $data['borrow_nid'];
	}
	
	function GetBadBorrowRepay($data = array()){
		global $mysql;
	
		$page = empty($data['page'])?1:$data['page'];
		$epage = empty($data['epage'])?10:$data['epage'];
		
		$_sql = " where p1.borrow_nid=p2.borrow_nid and p2.user_id=p3.user_id ";
		if (IsExiest($data['borrow_nid'])!=""){
			if ($data['borrow_nid'] == "request"){
				$_sql .= " and p1.borrow_nid= '{$_REQUEST['borrow_nid']}'";
			}else{
				$_sql .= " and p1.borrow_nid= '{$data['borrow_nid']}'";
			}
		}
		
		if (IsExiest($data['user_id'])!=""){
			$_sql .= " and p1.user_id = '{$data['user_id']}'";
		}	
		if (IsExiest($data['vouch_userid']) !=""){
			$_sql .= " and p2.borrow_nid in (select borrow_nid from `{borrow_vouch}` where user_id={$data['vouch_userid']})";
		}	 
		
		if (IsExiest($data['username'])!=""){
			$_sql .= " and p3.username like '%{$data['username']}%'";
		}	 
		
		if (IsExiest($data['repay_time'])!=""){
			if ($date['repay_time']<=0) $data['repay_time'] = time();
			$_repayment_time = get_mktime(date("Y-m-d",$data['repay_time']));
			$_sql .= " and p1.repay_time < '{$_repayment_time}'";
		}	 
		
		if (IsExiest($data['dotime2'])!=""){
			$dotime2 = ($data['dotime2']=="request")?$_REQUEST['dotime2']:$data['dotime2'];
			if ($dotime2!=""){
				$_sql .= " and p1.repay_time < ".get_mktime($dotime2);
			}
		}
		if (IsExiest($data['dotime1'])!=""){
			$dotime1 = ($data['dotime1']=="request")?$_REQUEST['dotime1']:$data['dotime1'];
			if ($dotime1!=""){
				$_sql .= " and p1.repay_time > ".get_mktime($dotime1);
			}
		}
		
		
		if (IsExiest($data['status'])!=""){
			$_sql .= " and p1.status in ({$data['status']})";
		}
		if (IsExiest($data['repay_status'])!=""){
			$_sql .= " and p1.repay_status in ({$data['repay_status']})";
		}
		
		
		if (IsExiest($data['borrow_status'])!=""){
			$_sql .= " and (p2.status = {$data['borrow_status']} or p2.is_flow=1) ";
		}	
		
		if (IsExiest($keywords)!=""){
		    if ($keywords=="request"){
				if (isset($_REQUEST['keywords']) && $_REQUEST['keywords']!=""){
					$_sql .= " and p2.name like '%".urldecode($_REQUEST['keywords'])."%'";
				}
			}else{
				$_sql .= " and p2.name like '%".$keywords."%'";
			}
		}
		
		if (IsExiest($data['lateing'])!=""){
			$_sql .= " and p1.repay_time<".time();
		}
		
		if (IsExiest($data['bad'])!=""){
			$_sql .= " and p1.bad_status=1 and p1.repay_time<".time();
		}
		
		$_order = " order by p1.repay_time asc";
		if (isset($data['order']) && $data['order']!="" ){
			if ($data['order'] == "repay_time"){
				$_order = " order by p1.repay_time asc ";
			}elseif ($data['order'] == "order"){
				$_order = " order by p1.repay_period asc ,p1.id desc";
			}elseif ($data['order'] == "status"){
				$_order = " order by p1.repay_status asc ,p1.repay_time asc,p1.id desc";
			}
		}
		$_select = " p1.*,p2.name as borrow_name,p2.borrow_period,p2.group_id,p2.account,p2.borrow_apr,p2.borrow_style,p2.vouchstatus,p2.fast_status,p3.username as borrow_username";
		$sql = "select SELECT from `{borrow_repay}` as p1 left join `{borrow}` as p2 on p1.borrow_nid = p2.borrow_nid left join `{users}` as p3 on p3.user_id=p2.user_id {$_sql}  group by p1.borrow_nid ORDER LIMIT";
		//�Ƿ���ʾȫ������Ϣ
		if (isset($data['limit']) ){
			$_limit = "";
			if ($data['limit'] != "all"){
				$_limit = "  limit ".$data['limit'];
			}
			$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select,  $_order, $_limit), $sql));
			foreach ($list as $key => $value){
				$list[$key]["credit"] = self::GetBorrowCredit(array("user_id"=>$value['user_id']));
				if ($value['group_id']!=""){
					$list[$key]["group"] = groupClass::GetGroupOne(array("id"=>$value['group_id']));
				}
				$late = self::LateInterest(array("time"=>$value['repay_time'],"account"=>$value['repay_account']));
				
				if ($value['repay_status']!=1){
					$list[$key]['late_days'] = $late['late_days'];
					//�������ڱ�Ϣ��0.4%/��
					$list[$key]['late_interest'] = round($value['repay_account']/100*0.4*$list[$key]['late_days'],2);
				}
			}
			return $list;
		}			 
		
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array('count(1) as num', '', ''), $sql));
		
		$total = $row['num'];
		$total_page = ceil($total / $epage);
		$index = $epage * ($page - 1);
		$limit = " limit {$index}, {$epage}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select,$_order, $limit), $sql));		
		$list = $list?$list:array();
		foreach ($list as $key => $value){
			$yes="select count(1) as num from `{borrow_repay}` where borrow_nid={$value['borrow_nid']} and repay_status=1";
			$yesre=$mysql->db_fetch_array($yes);
			$no="select count(1) as num,sum(repay_account) as all_repay_account from `{borrow_repay}` where borrow_nid={$value['borrow_nid']} and repay_status=0";
			$nore=$mysql->db_fetch_array($no);
			if ($nore['num']<=$yesre['num']){
				$list[$key]['advance_status']=1;
			}
			$list[$key]['nore']=$nore['num'];
			$list[$key]['all_repay_account']=$nore['all_repay_account'];
			$re_time = (strtotime(date("Y-m-d",$value['repay_time']))-strtotime(date("Y-m-d",time())))/(60*60*24);
			$list[$key]['re_time']=$re_time;
			$list[$key]["credit"] = self::GetBorrowCredit(array("user_id"=>$value['user_id']));
			if ($value['group_id']!=""){
				$list[$key]["group"] = groupClass::GetGroupOne(array("id"=>$value['group_id']));
			}
			$late = self::LateInterest(array("time"=>$value['repay_time'],"account"=>$value['repay_account']));
			if ($value['repay_status']!=1){
				$list[$key]['late_days'] = $late['late_days'];
				$list[$key]['late_interest'] = round($value['repay_account']/100*0.4*$list[$key]['late_days'],2);
			}	
		}
		return array(
            'list' => $list,
            'total' => $total,
            'page' => $page,
            'epage' => $epage,
            'total_page' => $total_page
        );
	}
	
		function GetBorrowRepaytt($data = array()){
		global $mysql;
		$sql = "select * from `{borrow_repay}` ";
		$result = $mysql->db_fetch_array($sql." where borrow_nid='{$data['borrow_nid']}' AND user_id='{$data['user_id']}'");
		//if ($result!=fasle ) {
			return $result["id"];
		//}
		//return 0;	
		
		}
	function GetBorrowRepayList($data = array()){
		global $mysql;
	
		$page = empty($data['page'])?1:$data['page'];
		$epage = empty($data['epage'])?10:$data['epage'];
		
		$_sql = " where p1.borrow_nid=p2.borrow_nid and p2.user_id=p3.user_id ";
		if (IsExiest($data['borrow_nid'])!=""){
			if ($data['borrow_nid'] == "request"){
				$_sql .= " and p1.borrow_nid= '{$_REQUEST['borrow_nid']}'";
			}else{
				$_sql .= " and p1.borrow_nid= '{$data['borrow_nid']}'";
			}
		}
		
		if (IsExiest($data['user_id'])!=""){
			$_sql .= " and p1.user_id = '{$data['user_id']}'";
		}	
		if (IsExiest($data['vouch_userid']) !=""){
			$_sql .= " and p2.borrow_nid in (select borrow_nid from `{borrow_vouch}` where user_id={$data['vouch_userid']})";
		}	 
		
		if (IsExiest($data['username'])!=""){
			$_sql .= " and p3.username like '%{$data['username']}%'";
		}	 
		
		if (IsExiest($data['repay_time'])!=""){
			if ($date['repay_time']<=0) $data['repay_time'] = time();
			$_repayment_time = get_mktime(date("Y-m-d",$data['repay_time']));
			$_sql .= " and p1.repay_time < '{$_repayment_time}'";
		}	 
		
		if (IsExiest($data['dotime2'])!=""){
			$dotime2 = ($data['dotime2']=="request")?$_REQUEST['dotime2']:$data['dotime2'];
			if ($dotime2!=""){
				$_sql .= " and p1.repay_time < ".get_mktime($dotime2);
			}
		}
		if (IsExiest($data['dotime1'])!=""){
			$dotime1 = ($data['dotime1']=="request")?$_REQUEST['dotime1']:$data['dotime1'];
			if ($dotime1!=""){
				$_sql .= " and p1.repay_time > ".get_mktime($dotime1);
			}
		}
		
		
		if (IsExiest($data['status'])!=""){
			$_sql .= " and p1.status in ({$data['status']})";
		}
		if (IsExiest($data['repay_status'])!=""){
			$_sql .= " and p1.repay_status in ({$data['repay_status']})";
		}
		
		
		if (IsExiest($data['borrow_status'])!=""){
			$_sql .= " and (p2.status = {$data['borrow_status']} or p2.is_flow=1) ";
		}	
		
		if (IsExiest($keywords)!=""){
		    if ($keywords=="request"){
				if (isset($_REQUEST['keywords']) && $_REQUEST['keywords']!=""){
					$_sql .= " and p2.name like '%".urldecode($_REQUEST['keywords'])."%'";
				}
			}else{
				$_sql .= " and p2.name like '%".$keywords."%'";
			}
		}
		
		if (IsExiest($data['lateing'])!=""){
			$_sql .= " and p1.repay_time<".time();
		}
		
		if (IsExiest($data['bad'])!=""){
			$_sql .= " and p1.bad_status=1 and p1.repay_time<".time();
		}
		
		$_order = " order by p1.repay_time asc";
		if (isset($data['order']) && $data['order']!="" ){
			if ($data['order'] == "repay_time"){
				$_order = " order by p1.repay_time asc ";
			}elseif ($data['order'] == "order"){
				$_order = " order by p1.repay_period asc ,p1.id desc";
			}elseif ($data['order'] == "status"){
				$_order = " order by p1.repay_status asc ,p1.repay_time asc,p1.id desc";
			}
		}
		$_select = " p1.*,p2.name as borrow_name,p2.borrow_period,p2.group_id,p2.account,p2.is_flow,p2.borrow_apr,p2.borrow_style,p2.vouchstatus,p2.fast_status,p3.username as borrow_username";
		$sql = "select SELECT from `{borrow_repay}` as p1 left join `{borrow}` as p2 on p1.borrow_nid = p2.borrow_nid left join `{users}` as p3 on p3.user_id=p2.user_id {$_sql} ORDER LIMIT";

		//�Ƿ���ʾȫ������Ϣ
		if (isset($data['limit']) ){
			$_limit = "";
			if ($data['limit'] != "all"){
				$_limit = "  limit ".$data['limit'];
			}
			$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select,  $_order, $_limit), $sql));
			foreach ($list as $key => $value){
				$list[$key]["credit"] = self::GetBorrowCredit(array("user_id"=>$value['user_id']));
				if ($value['group_id']!=""){
					$list[$key]["group"] = groupClass::GetGroupOne(array("id"=>$value['group_id']));
				}
				$late = self::LateInterest(array("time"=>$value['repay_time'],"account"=>$value['repay_account']));
				
				if ($value['repay_status']!=1){
					$list[$key]['late_days'] = $late['late_days'];
					//�������ڱ�Ϣ��0.4%/��
					$list[$key]['late_interest'] = round($value['repay_account']/100*0.4*$list[$key]['late_days'],2);
				}
			}
			return $list;
		}			 
		
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array('count(1) as num', '', ''), $sql));
		
		$total = $row['num'];
		$total_page = ceil($total / $epage);
		$index = $epage * ($page - 1);
		$limit = " limit {$index}, {$epage}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select,$_order, $limit), $sql));		
		$list = $list?$list:array();
		foreach ($list as $key => $value){
			$yes="select count(1) as num from `{borrow_repay}` where borrow_nid={$value['borrow_nid']} and repay_status=1";
			$yesre=$mysql->db_fetch_array($yes);
			$no="select count(1) as num from `{borrow_repay}` where borrow_nid={$value['borrow_nid']} and repay_status=0";
			$nore=$mysql->db_fetch_array($no);
			if ($nore['num']<=$yesre['num']){
				$list[$key]['advance_status']=1;
			}
			$re_time = (strtotime(date("Y-m-d",$value['repay_time']))-strtotime(date("Y-m-d",time())))/(60*60*24);
			$list[$key]['re_time']=$re_time;
			$list[$key]["credit"] = self::GetBorrowCredit(array("user_id"=>$value['user_id']));
			if ($value['group_id']!=""){
				$list[$key]["group"] = groupClass::GetGroupOne(array("id"=>$value['group_id']));
			}
			$late = self::LateInterest(array("time"=>$value['repay_time'],"account"=>$value['repay_account']));
			if ($value['repay_status']!=1){
				$list[$key]['late_days'] = $late['late_days'];
				$list[$key]['late_interest'] = round($value['repay_account']/100*0.4*$list[$key]['late_days'],2);
			}	
		}
		return array(
            'list' => $list,
            'total' => $total,
            'page' => $page,
            'epage' => $epage,
            'total_page' => $total_page
        );
		
	}
	
	public static function GetBorrowComment($data){
		global $mysql,$_G;
		
		require_once(ROOT_PATH."modules/comment/comment.class.php");
		$user_id = $data["user_id"];
		if ($data["type"]=="tender"){
			$sql = "select borrow_nid from `{borrow}` where user_id={$user_id}";
			$result = $mysql->db_fetch_arrays($sql);
			foreach ($result as  $key => $value){
				$_result[] = $value["borrow_nid"];
			}
			$_comment["code"] = "borrow";
			if (count($_result)>0){
				$_comment["article_id"] = join(",",$_result);
			}
			$_comment["reply_status"] = $data["reply_status"];
			$result = commentClass::GetList($_comment);
			
			return $result;
		}elseif ($data["type"]=="borrow"){
			$_comment["user_id"] = $_G["user_id"];
			$_comment["code"] = "borrow";
			$_comment["reply_status"] = $data["reply_status"];
			$result = commentClass::GetList($_comment);
			
			return $result;
		
		}
	
	}
	
	
	/**
	 * �����б�
	 *
	 * @return Array
	 */
	function GetOtherloanList($data = array()){
		global $mysql;
	
		$page = empty($data['page'])?1:$data['page'];
		$epage = empty($data['epage'])?10:$data['epage'];
		
		$_sql = "where 1=1";		 
		if (IsExiest($data['user_id'])!=""){
			$_sql .= " and p1.user_id = {$data['user_id']}";
		}
		if (IsExiest($data['username'])!=""){
			$_sql .= " and p2.username = '{$data['user_id']}'";
		}
	
	
		$_select = "p1.*";
		$sql = "select SELECT from `{borrow_otherloan}` as p1
				left join `{users}` as p2 on p2.user_id = p1.user_id
		 {$_sql}  order by p1.addtime desc LIMIT";
				
		//�Ƿ���ʾȫ������Ϣ
		if (isset($data['limit']) ){
			$_limit = "";
			if ($data['limit'] != "all"){
				$_limit = "  limit ".$data['limit'];
			}
			$result= $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select,  'order by p1.id desc', $_limit), $sql));
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
	
	
	/**
	 * �û���ӻ����Ľ����Ϣ
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function AddOtherloan($data = array()){
		global $mysql;
		
		$sql = "insert into `{borrow_otherloan}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
        return $mysql->db_query($sql);
	}
	
	function UpdateOtherloan($data = array()){
		global $mysql;
		
		$sql = "update `{borrow_otherloan}` set id = {$data['id']}";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		$sql .= " where id = {$data['id']} and user_id={$data['user_id']}";
        return $mysql->db_query($sql);
	}
	
	
	function DelOtherloan($data){
		global $mysql;
		if ($data["id"]=="" || $data["user_id"]==""){ return -1;}
		$sql = "delete from `{borrow_otherloan}` where user_id={$data['user_id']} and id={$data['id']}";
		$result = $mysql->db_query($sql);
		if ($result) return 1;
		return -2;
	}
	
	
	function GetOtherloanOne($data){
		global $mysql;
		if ($data["id"]=="" || $data["user_id"]==""){ return "";}
		$sql = "select * from `{borrow_otherloan}` where user_id={$data['user_id']} and id={$data['id']}";
		$result = $mysql->db_fetch_array($sql);
		return $result;
	}
	
	
	function GetUserBorrowCount($data){
		global $mysql;
		$nowtime = time()-60*60*24*2;
		$week_t = date("w",$nowtime);
		if ($week_t==0) $week_t =7;
		$first_time = $nowtime-60*60*24*($week_t+7);
		$last_time = $nowtime-60*60*24*($week_t-1);
		$sql = "select sum(p1.account) as account_all,p1.user_id,p2.username from `{borrow_tender}`  as p1 left join `{users}` as p2 on p1.user_id=p2.user_id where p1.status=1  group by p1.user_id order by account_all desc limit {$data['limit']}";
		$result = $mysql->db_fetch_arrays($sql);
		
		return $result;
	}
	
	
	//���ڻ����б�
	function GetLateList($data = array()){
		global $mysql,$_G;
		
		$page = (!isset($data['page']) || $data['page']=="")?1:$data['page'];
		$epage = (!isset($data['epage']) || $data['epage']=="")?10:$data['epage'];
		
		$_select = 'p1.*,p3.*,p5.card_id,p6.name as job_name,p6.address as job_address,p7.province,p7.city,p8.*';
		$_order = " order by p1.id ";
		if (isset($data['late_day']) && $data['late_day']!=""){
			$_repayment_time = time()-60*60*24*$data['late_day'];
		}else{
			$_repayment_time = time();
		}
		
		$_sql = " where p1.repay_time < '{$_repayment_time}' and p1.repay_status!=1";
		
		if (IsExiest($data['username']) != false){
			$_sql .= " and p3.`username`='".urldecode($data['username'])."'";
		}
		if (IsExiest($data['group_id']) != false){
			$_sql .= " and p2.`group_id` = '{$data['group_id']}'";
		}
		
		$sql = "select SELECT from `{borrow_repay}` as p1 
		left join `{borrow}` as p2 on p1.borrow_nid=p2.borrow_nid
		left join `{users}` as p3 on p2.user_id=p3.user_id
		left join `{approve_realname}` as p5 on p1.user_id=p5.user_id
		left join `{rating_job}` as p6 on p1.user_id=p6.user_id
		left join `{rating_info}` as p7 on p1.user_id=p7.user_id
		left join `{users_info}` as p8 on p1.user_id=p8.user_id
	   {$_sql} ORDER LIMIT ";
		
		$_list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select, $_order , ""), $sql));
		foreach ($_list as $key => $value){
			$late = self::LateInterest(array("time"=>$value['repay_time'],"account"=>$value['capital']));
			$list[$value['user_id']]['username'] = $value['username'];
			$list[$value['user_id']]['realname'] = $value['realname'];
			$list[$value['user_id']]['phone'] = $value['phone'];
			$list[$value['user_id']]['user_id'] = $value['user_id'];
			$list[$value['user_id']]['email'] = $value['email'];
			$list[$value['user_id']]['job_name'] = $value['job_name'];
			$list[$value['user_id']]['job_address'] = $value['job_address'];
			$list[$value['user_id']]['qq'] = $value['qq'];
			$list[$value['user_id']]['sex'] = $value['sex'];
			$list[$value['user_id']]['card_id'] = $value['card_id'];
			$list[$value['user_id']]['province'] = $value['province'];
			$list[$value['user_id']]['repay_period'] = $value['repay_period']+1;
			$list[$value['user_id']]['city'] = $value['city'];
			$list[$value['user_id']]['late_days'] += $late['late_days'];//����������
			if ($list[$value['user_id']]['late_numdays']<$late['late_days']){
				$list[$value['user_id']]['late_numdays'] +=  $late['late_days'];
			}
			$list[$value['user_id']]['late_interest'] += round($late['late_interest']/2,2);
			$list[$value['user_id']]['late_account'] +=  $value['repay_account'];//�����ܽ��
			$list[$value['user_id']]['late_num'] ++;//���ڱ���
			if ($value['repay_web']==1){
				$list[$value['user_id']]['late_webnum'] +=1;//���ڱ���
			}
		}
		//�Ƿ���ʾȫ������Ϣ
		if (isset($data['limit']) ){
			if (count($list)>0){
			return array_slice ($list,0,$data['limit']);
			}else{
			return array();
			}
		}	
		
		$total = count($list);
		$total_page = ceil($total / $epage);
		$index = $epage * ($page - 1);
		if (is_array($list)){
			$list = array_slice ($list,$index,$epage);
		}
		return array(
            'list' => $list,
            'total' => $total,
            'page' => $page,
            'epage' => $epage,
            'total_page' => $total_page
        );
	
	}
	
	//ͳ��
	function Tongji($data = array()){
		global $mysql;
		
		//�ɹ����
		$sql = " select sum(account) as num from `{borrow}` where status=3 ";
		$result = $mysql->db_fetch_array($sql);
		$_result['success_num'] = $result['num'];
		
		//����δ����
		$_repayment_time = time();;
		$sql = " select p1.repay_capital,p1.repay_yestime,p1.status  from  `{borrow_repay}` as p1 left join `{borrow}` as p2 on p1.borrow_nid=p2.borrow_nid where p2.status=3 ";
		$result = $mysql->db_fetch_arrays($sql);
		foreach ($result as $key => $value){
			$_result['success_sum'] += $value['repay_capital'];//����ܶ�
			if ($value['status']==1){
				$_result['success_num1'] += $value['repay_capital'];//�ɹ������ܶ�
				if (date("Ymd",$value['repay_time']) < date("Ymd",$value['repay_yestime'])){	
					$_result['success_laterepay'] += $value['repay_capital'];
				}
			}
			if ($value['status']==0){
				$_result['success_num0'] += $value['account'];//δ�����ܶ�
				if (date("Ymd",$value['repay_time']) < date("Ymd",time())){	
					$_result['false_laterepay'] += $value['repay_capital'];
				}
			}
		}
		$_result['laterepay'] = $_result['success_laterepay'] + $_result['false_laterepay'];
		
		return $_result;
	}
	
	//������վ�渶
	function LateRepay($data){
		global $mysql,$_G;
		$sql = "select p1.*,p2.name as borrow_name,p2.vouchstatus,p2.fast_status from `{borrow_repay}` as p1 left join `{borrow}` as p2 on p1.borrow_nid = p2.borrow_nid where p1.id = {$data['id']}";
		$result = $mysql->db_fetch_array($sql);
		//�ж��Ƿ��Ѿ�����������ؿ�
		if ($result['repay_status']==1){
			return -1;
		}elseif ($result['repay_web']==1){
			return -2;
		}elseif ($result['repay_status']==0){
			$late_result = self::LateInterest(array("account"=>$result['repay_account'],"time"=>$result['repay_time']));
			if ($late_result['late_days']<1){
				return -3;
			}else{
				//���»����״̬Ϊ����ʾ��վ�Ѿ�����
				//��һ������״̬��Ϊ��վ�ѻ�
				$sql = "update `{borrow_repay}` set repay_web=1 where id = {$data['id']}";
				$mysql -> db_query($sql);
				
				$repay_period = $result['repay_period'];
				$borrow_nid = $result['borrow_nid'];
				$borrow_name = $result['borrow_name'];
				$borrow_url = "<a href=/invest/a{$borrow_nid}.html target=_blank>{$borrow_name}</a>";
				
				$sql = "select p1.*,p2.change_status,p2.change_userid from `{borrow_recover}` as p1 left join `{borrow_tender}` as p2 on p2.id=p1.tender_id where p1.`recover_period` = '{$repay_period}' and p1.borrow_nid='{$borrow_nid}'";
				$result = $mysql->db_fetch_arrays($sql);
				foreach ($result as $key => $value){
					
					if ($value['change_status']==1){
						if ($value['change_userid']=="" || $value['change_userid']==0){
							$value['user_id']=0;
						}else{
							$value['user_id']=$value['change_userid'];
						}
					}
					
					if ($result['vouchstatus']==1){
						$money=$value['recover_account'];
					}elseif($result['fast_status']==1){
						$money=$value['recover_account'];
					}else{
						if ($value['user_id']==0){
							$sql = "update  `{borrow_tender}` set recover_times='recover_times'+1,recover_account_yes= recover_account_yes + {$value['recover_capital']},recover_account_capital_yes = recover_account_capital_yes  + {$value['recover_capital']} ,recover_account_interest_yes = recover_account_interest_yes + 0,recover_account_wait= recover_account_wait - {$value['recover_account']},recover_account_capital_wait = recover_account_capital_wait  - {$value['recover_capital']} ,recover_account_interest_wait = recover_account_interest_wait - {$value['recover_interest']}  where id = '{$value['tender_id']}'";
							$mysql->db_query($sql);
					$_sql = "update  `{borrow_recover}` set recover_yestime='".time()."',recover_account_yes = recover_account ,recover_capital_yes = recover_capital ,recover_interest_yes = recover_interest,late_days={$late_result['late_days']} ,status=1,recover_web=1   where id = '{$value['id']}'";
					$mysql->db_query($_sql);
							$money=$value['recover_account'];
							$more="���Ϊ��Ϣ��";
						}else{
						$Vip=usersClass::GetUsersVip(array("user_id"=>$value['user_id']));
						if ($Vip['status']==1){
							if ($Vip['vip_type']==1){
							$sql = "update  `{borrow_tender}` set recover_times='recover_times'+1,recover_account_yes= recover_account_yes + {$value['recover_capital']},recover_account_capital_yes = recover_account_capital_yes  + {$value['recover_capital']} ,recover_account_interest_yes = recover_account_interest_yes + 0,recover_account_wait= recover_account_wait - {$value['recover_account']},recover_account_capital_wait = recover_account_capital_wait  - {$value['recover_capital']} ,recover_account_interest_wait = recover_account_interest_wait - {$value['recover_interest']}  where id = '{$value['tender_id']}'";
							$mysql->db_query($sql);
					//�ڶ���������Ͷ���˵ķ�����Ϣ
					$sql = "update  `{borrow_recover}` set recover_yestime='".time()."',recover_account_yes = recover_capital ,recover_capital_yes = recover_capital,late_days={$late_result['late_days']} ,recover_interest_yes = 0 ,status=1,recover_web=1   where id = '{$value['id']}'";
					$mysql->db_query($sql);
								$money=$value['recover_capital'];
								$more="���Ϊ����";
							}else{
					$sql = "update  `{borrow_recover}` set recover_yestime='".time()."',recover_account_yes = recover_account ,recover_capital_yes = recover_capital ,recover_interest_yes = recover_interest,late_days={$late_result['late_days']} ,status=1,recover_web=1   where id = '{$value['id']}'";
					$mysql->db_query($sql);
							
					//������������Ͷ�ʵ���Ϣ
					$sql = "update  `{borrow_tender}` set recover_times='recover_times'+1,recover_account_yes= recover_account_yes + {$value['recover_account']},recover_account_capital_yes = recover_account_capital_yes  + {$value['recover_capital']} ,recover_account_interest_yes = recover_account_interest_yes + {$value['recover_interest']},recover_account_wait= recover_account_wait - {$value['recover_account']},recover_account_capital_wait = recover_account_capital_wait  - {$value['recover_capital']},recover_account_interest_wait = recover_account_interest_wait - {$value['recover_interest']}  where id = '{$value['tender_id']}'";
					$mysql->db_query($sql);
								$money=$value['recover_account'];
								$more="���Ϊ��Ϣ��";
								self::UpdateBorrowCount(array("user_id"=>$value['user_id'],"tender_interest_yes"=>$value['recover_interest']));
							}
						}else{
							$money=$value['recover_capital']/2;
					//������������Ͷ�ʵ���Ϣ
					$sql = "update  `{borrow_tender}` set recover_times='recover_times'+1,recover_account_yes= recover_account_yes + {$money},recover_account_capital_yes = recover_account_capital_yes  + {$money} ,recover_account_interest_yes = recover_account_interest_yes + 0,recover_account_wait= recover_account_wait - {$value['recover_account']},recover_account_capital_wait = recover_account_capital_wait  - {$value['recover_capital']} ,recover_account_interest_wait = recover_account_interest_wait - {$value['recover_interest']}  where id = '{$value['tender_id']}'";
					$mysql->db_query($sql);
					$sql = "update  `{borrow_recover}` set recover_yestime='".time()."',recover_account_yes = {$money} ,recover_capital_yes = {$money} ,recover_interest_yes = 0 ,late_days={$late_result['late_days']},status=1,recover_web=1   where id = '{$value['id']}'";
					$mysql->db_query($sql);
							$more="���Ϊ�����һ�롣";
						}
					}
					}
					$log_info["user_id"] = $value['user_id'];
					$log_info["nid"] = "system_repayment_".time()."_".$value['id'];
					$log_info["money"] = $money;
					$log_info["income"] = $log_info['money'];//����
					$log_info["expend"] = 0;//֧��
					$log_info["balance_cash"] = $log_info['money'];//�����ֽ��
					$log_info["balance_frost"] = 0;//�������ֽ��
					$log_info["frost"] = 0;//������
					$log_info["await"] = -$value['recover_account'];//���ս��
					$log_info["type"] = "system_repayment";//����
					$log_info["to_userid"] = 0;//����˭
					$log_info["remark"] =  "�ͻ����ڳ���30�죬ϵͳ�Զ���[{$borrow_url}]���Ļ���,{$more}";
					accountClass::AddLog($log_info);
					
					$bad=$value['recover_account']-$money;
					
					
					if ($value['change_status']!=1){
						self::UpdateBorrowCount(array("user_id"=>$value['user_id'],"tender_recover_yes"=>$money,"tender_recover_times_yes"=>1,"tender_recover_wait"=>-$value['recover_account'],"tender_recover_times_wait"=>-1,"bad_account"=>$bad));
					}else{
						self::UpdateBorrowCount(array("user_id"=>$value['user_id'],"bad_account"=>$bad));
					}
					$web['money']=$money;
					$web['user_id']=$value['user_id'];
					$web['nid']="web_repay_".time();
					$web['type']="web_repay";
					$web['remark']="�û�Ͷ��{$borrow_url}��".($repay_period+1)."�������յ���վ�渶��{$money}Ԫ��{$more}";
					accountClass::AddAccountWeb($web);
					
					
					$log_info["user_id"] = 0;//�����û�id
					$log_info["nid"] = "fengxianchi_0_".time()."_".$value['id'];//������
					$log_info["money"] = -$money;//�������
					$log_info["income"] = 0;//����
					$log_info["expend"] = 0;//֧��
					$log_info["balance_cash"] = 0;//�����ֽ��
					$log_info["balance_frost"] = 0;//�������ֽ��
					$log_info["frost"] = 0;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "fengxianchi_dianfu";//����
					$log_info["to_userid"] = 0;//����˭
					$log_info["remark"] =  "ϵͳ�˻��渶[{$borrow_url}]���ڽ���{$money}Ԫ,{$more}";
					accountClass::AddLog($log_info);
					
					/*
					$log_info["user_id"] = $value['user_id'];
					$log_info["nid"] = "tender_late_fee_".$value['user_id'].$value['borrow_nid'];
					//�������ڱ�Ϣ��0.4%/��
					$log_info["money"] = round($value['repay_account']/100*0.2*$list[$key]['late_days'],2);
					$log_info["income"] = $log_info['money'];//����
					$log_info["expend"] = 0;//֧��
					$log_info["balance_cash"] = $log_info['money'];//�����ֽ��
					$log_info["balance_frost"] = 0;//�������ֽ��
					$log_info["frost"] = 0;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "tender_late_fee";//����
					$log_info["to_userid"] = 0;//����˭
					$log_info["remark"] =  "�ͻ����ڳ���30���[{$borrow_url}]�������Ϣ�۳�";
					accountClass::AddLog($log_info);
					*/
					
					
					//��������
					/*$remind['nid'] = "loan_pay";
					$remind['receive_userid'] = $value['user_id'];
					$remind['title'] = "��վ��[{$borrow_name}]���ĵ渶����";
					$remind['content'] = "��վ��".date("Y-m-d H:i:s")."��[{$borrow_url}}</a>]�����е渶����,������Ϊ{$value['repay_account']}";
					remindClass::sendRemind($remind);*/
				}
			}
		}
		return 1;
	}
	
	//��ȡ�û�����Ͷ�ʶ������ȫ���ģ�Ҳ���Ե�����ĳ����
	function GetUserTenderAccount($data){
		global $mysql;
		$_sql = " where 1=1 ";
		if (IsExiest($data['user_id'])!=""){
			$_sql .= " and user_id='{$data['user_id']}' ";
		}
		if (IsExiest($data['borrow_nid'])!=""){
			$_sql .= " and borrow_nid='{$data['borrow_nid']}' ";
		}
		$sql = "select sum(account) as account_all from `{borrow_tender}` {$_sql}";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=fasle ) {
			return $result["account_all"];
		}
		return 0;
	}
	
	//��ȡ����������Ϣ
	
	//��ȡͳ����Ϣ
	function GetCount($data = array()){
		global $mysql;
		
		
	}
	
	function GetVouchUsersList($data){
		global $mysql;
		$page = empty($data['page'])?1:$data['page'];
		$epage = empty($data['epage'])?10:$data['epage'];
		$_select = " p1.*,p2.credit,p3.tender_vouch";
		$sql = "select SELECT from `{users}` as p1 left join `{credit}` as p2 on p1.user_id=p2.user_id left join `{user_amount}` as p3 on p1.user_id=p3.user_id where p1.user_id in (select user_id from `{user_amount}` where tender_vouch >0)  ";
		if (isset($data['limit']) ){
			$_limit = "";
			if ($data['limit'] != "all"){
				$_limit = "  limit ".$data['limit'];
			}
			$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select,  $_order, $_limit), $sql));
			return $list;
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
	
	//��վͳ��
	public static function GetAll($data=array()){
		global $mysql;
		$sql = "select sum(account) as account,count(1) as times from `{borrow}`";
		$result = $mysql->db_fetch_array($sql);
		$_result['borrow_times'] = $result['times'];
		$_result['borrow_account'] = $result['account'];
		
		$sql = "select sum(account) as account,count(1) as times  from `{borrow}` where status=3";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false){
			$_result['borrow_success_times'] = 0;
			$_result['borrow_success_account'] = 0;
			$_result['borrow_success_scale']=0;
		}else{
			$_result['borrow_success_times'] = $result['times'];
			$_result['borrow_success_account'] = $result['account'];
			$_result['borrow_success_scale'] = round($_result['borrow_success_times']/$_result['borrow_times'],2);
		}
		return $_result;
	}
	
	//ɾ����ֻ��ɾ���ݸ�ı�
	public static function Delete($data = array()){
		global $mysql;
		$id = $data['id'];
		if (!is_array($id)){
			$id = array($id);
		}
		if (isset($data['status']) && $data['status']!=""){
			$_sql .= " and status ='".$data['status']."'";
		}
		if (isset($data['user_id'])  && $data['user_id']!=""){
			$_sql = " and user_id={$data['user_id']} ";
		}
		$sql = "delete from {borrow}  where borrow_nid in (".join(",",$id).") $_sql";
		return $mysql->db_query($sql);
	}
	
	
	//���괦��
	function ActionLiubiao($data){
		global $mysql;
		$status= $data['status'];
		if ($status==1){
			$result = self::Cancel($data);
		}elseif($status==2){
			$valid_time = $data['days'];
			$sql = "update `{borrow}` set borrow_valid_time=borrow_valid_time +{$valid_time} where borrow_nid={$data['borrow_nid']}";
			$mysql->db_query($sql);
		}
		return true;
	}
	
	function GetLiucheng($data){
		global $mysql;
		$user_id= $data['user_id'];
		$sql = "select * from `{attestation}` where user_id='{$user_id}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false){
			$_result['attestion_status']=0;
		}else{
			$_result['attestion_status']=1;
		}
		
		
		$sql = "select * from `{borrow}` where user_id='{$user_id}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false){
			$_result['borrow_status']=0;
		}else{
			$_result['borrow_status']=1;
		}
		
		
		$sql = "select * from `{borrow}` where status=3 and user_id='{$user_id}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false){
			$_result['borrow_success_status']=0;
		}else{
			$_result['borrow_success_status']=1;
		}
		
		
		$sql = "select * from `{borrow_repay}` where status=1 and user_id='{$user_id}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false){
			$_result['borrow_repay_status']=0;
		}else{
			$_result['borrow_repay_status']=1;
		}
		return $_result;
	}
	
	public static function GetOther($data = array()){
		global $mysql;
		$_sql = "where 1=1 ";
		if (IsExiest($data['user_id'])!=""){
			$_sql .= " and  user_id = '{$data['user_id']}' ";
		}
		$sql = "select * from `{borrow_other}` $_sql ";
		$result = $mysql->db_fetch_array($sql);
		
		return $result;
	}
	
	function GetBorrowCreditUsers($data){
		global $mysql;
		$_sql = " where 1=1 ";
		
		//�����û�id
        if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p1.user_id ='{$data['user_id']}'";
        }
		
		//����
        if (IsExiest($data['type'])!=false) {
            $_sql .= " and p1.type ='{$data['type']}'";
        }
		
		//����
        if (IsExiest($data['nid'])!=false) {
            $_sql .= " and p1.nid ='{$data['nid']}'";
        }
		
		$sql = "select sum(p1.credit) as num from `{borrow_credit}`  as p1 {$_sql}";
		$result = $mysql->db_fetch_array($sql);
		return $result['num'];
	}
	
	function GetBorrowTimes($data){
		global $mysql;
		$_sql = " where 1=1 ";
		
		//�����û�id
        if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p1.user_id ='{$data['user_id']}'";
        }
		
		//����
        if (IsExiest($data['type'])!=false) {
            $_sql .= " and p1.type ='{$data['type']}'";
        }
		
		//����
        if (IsExiest($data['nid'])!=false) {
            $_sql .= " and p1.nid ='{$data['nid']}'";
        }
		
		$sql = "select count(1) as num from `{borrow_credit}`  as p1 {$_sql}";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) $result['num'] = 0;
		return $result['num'];
	}
	
	//data = array("user_id"=>"")
	function GetBorrowVip($data){
		global $mysql,$_G;
		
		if (IsExiest($_G["borrow_vip_result"])!=false) return $_G["borrow_vip_result"];//��ֹ�ظ���ȡ
		
		$result = usersClass::GetUsersVipStatus(array("user_id"=>$data['user_id']));
		$late_repay_times = 0;//���ڻ������*800
		$delay_repay_times =  0;//�ӳٻ������*300
		
		if ($result!=1) return array("vip"=>0,"fee"=>0);
		$vip_status=1;
		$vip_fee = isset($_G['system']['con_vip1_fee'])?$_G['system']['con_vip1_fee']:1;
		$_result = self::GetBorrowCredit(array("user_id"=>$data['user_id']));
		$credit = $_result['credit_total'];
		$borrow_credit = $_result['borrow_credit'];
		//vip2
		if ($credit>=500+$delay_reapy_times*300+$late_reapy_times*800 && $borrow_credit>=300){
			$vip_status = 2;
			$vip_fee = isset($_G['system']['con_vip2_fee'])?$_G['system']['con_vip2_fee']:0.95;
		}
		//vip3
		if ($credit>=1500+$delay_reapy_times*800+$late_reapy_times*1500 && $borrow_credit>=1200){
			$vip_status = 3;
			$vip_fee = isset($_G['system']['con_vip3_fee'])?$_G['system']['con_vip3_fee']:0.9;
		}
		
		//vip4
		if ($credit>=5000 && $borrow_credit>=3500 && dealy_reapy_times==0 && $delay_repay_times==0){
			$vip_status = 4;
			$vip_fee = isset($_G['system']['con_vip4_fee'])?$_G['system']['con_vip4_fee']:0.85;
		}
		
		//vip5
		if ($credit>=20000 && $borrow_credit>=16000 && dealy_reapy_times==0 && $delay_repay_times==0){
			$vip_status = 5;
			$vip_fee = isset($_G['system']['con_vip5_fee'])?$_G['system']['con_vip5_fee']:0.8;
		}
		
		
		//vip6
		if ($credit>=100000 && $borrow_credit>=60000 && dealy_reapy_times==0 && $delay_repay_times==0){
			$vip_status = 6;
			$vip_fee = isset($_G['system']['con_vip6_fee'])?$_G['system']['con_vip6_fee']:0.75;;
		}
		
		return array("vip"=>$vip_status,"fee"=>$vip_fee);
	}
	//data=(user_id=>)
	function GetBorrowCreditOne($data){
		global $mysql,$_G;
		
		if (IsExiest($_G["borrow_credit_result"])!=false) return $_G["borrow_credit_result"];//��ֹ�ظ���ȡ
		
		if (!isset($data['credits']) || $data['credits']==""){
			if ($data['user_id']=="") return "";
			$result = creditClass::GetOne(array("user_id"=>$data['user_id']));
			$data['credits'] = $result['credits'];
		}
		
		if ($data['credits']==false){
			return array("credit_total"=>0,"approve_credit"=>0,"borrow_credit"=>0,"tender_credit"=>0,"vouch_credit"=>0);
		}
		$result = unserialize($data['credits']);
		$_result = array();
		$sql = "select sum(credit) as num from `{attestations}` where user_id='{$data['user_id']}'";
		$attcredit = $mysql->db_fetch_array($sql);
		
		foreach ($result as $key=>$value){
			$_result[$value['class_id']] = $value['num'];
		}
		$_result[6] = $attcredit['num'];
		$result = array("credit_total"=>$_result[2]+$_result[3]+$_result[4]+$_result[5]+$_result[6],"approve_credit"=>$_result[2],"borrow_credit"=>$_result[2]+$_result[3]+$_result[6],"tender_credit"=>$_result[2]+$_result[4],"vouch_credit"=>$_result[2]+$_result[5]);
		
		return $result;
	}
	
	function GetBorrowCredit($data){
		global $mysql,$_G;
		
		if (IsExiest($_G["borrow_credit_result"])!=false) return $_G["borrow_credit_result"];//��ֹ�ظ���ȡ\
		
		if ($data['user_id']=="") return false;
		
		$_result = array();
		
		//$sql = "select sum(credit) as num from `{attestations}` where user_id='{$data['user_id']}'";
		//$attcredit = $mysql->db_fetch_array($sql);
		
		require_once(ROOT_PATH."modules/attestations/attestations.class.php");
		$attcredit = attestationsClass::GetAttestationsCredit(array("user_id"=>$data['user_id']));
		
		$sql = "select sum(credit) as creditnum from `{credit_log}` where user_id='{$data['user_id']}' and code='borrow'";
		$credit_log = $mysql->db_fetch_array($sql);
		$sql = "select sum(credit) as creditnum from `{credit_log}` where user_id='{$data['user_id']}' and code='approve'";
		$approve = $mysql->db_fetch_array($sql);
		$_result[1] = $attcredit;
		$_result[2] = $credit_log['creditnum'];
		$_result[3] = $approve['creditnum'];
		
		$result = array("credit_total"=>$_result[2]+$_result[1]+$_result[3],"borrow_credit"=>$_result[2],"approve_credit"=>$_result[3]+$_result[1]);
		
		return $result;
	}
	

	
	//VIP���õĿ۳�
	function AccountVip($data = array()){
		global $mysql,$_G;
		if (!IsExiest($data['user_id'])) return "";
		$result = usersClass::GetUsersVip(array("user_id"=>$data['user_id']));
		$account_result = accountClass::GetAccount(array("user_id"=>$data['user_id']));
		$vip_money = isset($_G['system']['con_vip_fee'])?$_G['system']['con_vip_fee']:120;
		//�ж�vip��ǮΪ0������Ǯ���ٿ�
		if ($result['money']<=0 && $account_result['balance']>=$vip_money && $result['status']==1){
			//�۳�vip�Ļ�Ա�ѡ�
			$log_info["user_id"] = $data['user_id'];//�����û�id
			$log_info["nid"] = "vip_".$data['user_id'];//������
			$log_info["money"] = $vip_money;//�������
			$log_info["income"] = 0;//����
			$log_info["expend"] = $vip_money;//֧��
			$log_info["balance_cash"] = -$vip_money;//�����ֽ��
			$log_info["balance_frost"] = 0;//�������ֽ��
			$log_info["frost"] = 0;//������
			$log_info["await"] = 0;//���ս��
			$log_info["type"] = "vip";//����
			$log_info["to_userid"] = 0;//����˭
			$log_info["remark"] =  "�۳�VIP��Ա��";
			accountClass::AddLog($log_info);
			
			//�޸�vip���
			usersClass::UpdateUsersVipMoney(array("user_id"=>$data['user_id'],"money"=>$vip_money));
			
			//�ж��Ƿ���������
			$result = usersClass::GetUsersInfo(array("user_id"=>$data['user_id']));
			if ($result["invite_userid"]>0 && $result["invite_money"]<=0){
				$invite_userid = $result["invite_userid"];
				$vip_ticheng = isset($_G['system']['con_vip_ticheng'])?$_G['system']['con_vip_ticheng']:30;
				//�۳�vip�Ļ�Ա�ѡ�
				$log_info["user_id"] = $invite_userid;//�����û�id
				$log_info["nid"] = "invite_userid_".$data['user_id']."_".$invite_userid;//������
				$log_info["money"] = $vip_ticheng;//�������
				$log_info["income"] = $vip_ticheng;//����
				$log_info["expend"] = 0;//֧��
				$log_info["balance_cash"] = $vip_ticheng;//�����ֽ��
				$log_info["balance_frost"] = 0;//�������ֽ��
				$log_info["frost"] = 0;//������
				$log_info["await"] = 0;//���ս��
				$log_info["type"] = "vip_ticheng";//����
				$log_info["to_userid"] = 0;//����˭
				$log_info["remark"] = "��������û���{$result['username']}����ΪVIP�������{$vip_ticheng}Ԫ��";
				accountClass::AddLog($log_info);
				
				$user_info["user_id"] = $data['user_id'];
				$user_info["invite_money"] = $vip_ticheng;
				usersClass::UpdateUsersInfo($user_info);
			
			}
			
		}
	}
	
	function GetBorrowCount_xin($data){
		global $mysql;
		if (!IsExiest($data['user_id'])) return "";
		$_result=array();
	
	    $sql = "select * from `{borrow_count}` where user_id='{$data['user_id']}'";
	    $_result = $mysql->db_fetch_array($sql);
        
		
		$result_tender = $mysql->db_fetch_array("select count(*) as tender_times,count(*) as tender_success_times,sum(account) as tender_success_account,sum(recover_account_all) as tender_recover_account,sum(recover_account_yes) as tender_recover_yes,sum(recover_account_all) as tender_recover_wait,sum(account) as tender_capital_account ,sum(recover_account_interest) as tender_interest_account ,sum(recover_account_interest) as tender_interest_account ,sum(recover_account_interest) as tender_interest_wait,sum(recover_account_interest_yes) as tender_interest_yes from `{borrow_tender}` where user_id='{$data['user_id']}' ");
		
		
		$tender_recover_times_wait = $mysql->db_fetch_array("select count(*) as tender_recover_times_wait,sum(recover_account_wait) as tender_recover_wait from `{borrow_tender}` where user_id='{$data['user_id']}' and (`recover_account_all`!=`recover_account_yes`) ");
		$tender_recover_times_yes = $mysql->db_fetch_array("select count(*) as tender_recover_times_yes from `{borrow_tender}` where user_id='{$data['user_id']}' and `recover_account_all`=`recover_account_yes` ");
		
		foreach ($result_tender as $key => $value){
			 $_result[$key]=$value;
		}
		
		$_result['tender_recover_times_wait']=$tender_recover_times_wait['tender_recover_times_wait'];
		$_result['tender_recover_wait']=$tender_recover_times_wait['tender_recover_wait'];
		$_result['tender_recover_times_yes']=$tender_recover_times_yes['tender_recover_times_yes'];
		//tender_frost_account
		//tender_recover_times
		//tender_recover_times_yes 
		//tender_recover_times_wait 
		//tender_recover_wait 

	    return $_result;
	}
	function GetBorrowCount($data){
		global $mysql;
		//��ȡ���ͳ��
		$latesql = "select count(1) as late_nums from `{account_log}` where user_id='{$data['user_id']}' and type='borrow_repay_late'";
		$late_nums = $mysql->db_fetch_array($latesql);
		$latemoneysql = "select sum(money) as latemoney from `{account_log}` where user_id='{$data['user_id']}' and type='borrow_repay_late'";
		$latemoney = $mysql->db_fetch_array($latemoneysql);
		//$sql = "select * from `{borrow_count}` where user_id='{$data['user_id']}'";
		
		$_result = self::GetBorrowCount_xin(array('user_id'=>$data['user_id']));
		
		//$_result = $mysql->db_fetch_array($sql);
		$_result['interest_scale'] = 0;
		if ($_result!=false && $_result['tender_capital_account']>0){
			$_result['interest_scale'] = round($_result['tender_interest_account']/$_result['tender_capital_account']*100,2);
		}
		$lixi="select sum(late_interest) as all_lixi from `{borrow_repay}` where user_id='{$data['user_id']}'";
		$lxre=$mysql->db_fetch_array($lixi);
		$all=$_result['weiyue']+$_result['borrow_repay_interest']+$lxre['all_lixi'];
		if ($_result!=false && $_result['borrow_account']>0){
			$_result['borrow_interest_scale'] = round($all/$_result['borrow_account']*100,2);
		}
		//���˼���
		$sql = "select sum(recover_account) as num from `{borrow_recover}` where recover_status=0 and user_id='{$data['user_id']}' and recover_time<".(time()-60*60*24*90)." and recover_time<".time();
		$result = $mysql->db_fetch_array($sql);
		$_result['bad_recover_account'] = $result['num'];
		$_result['late_nums'] = $late_nums['late_nums'];
		$_result['latemoney'] = $latemoney['latemoney'];
		
		//�����������
		$sql = "select recover_account,recover_time from `{borrow_recover}` where user_id='{$data['user_id']}' and recover_status=0 order by recover_time asc";
		$result = $mysql->db_fetch_array($sql);
		$_result["recover_new_account"] = $result["recover_account"];
		$_result["recover_new_time"] = $result["recover_time"];
		
		return $_result;
	}
	
	
	//data = array("user_id"=>"");
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
		
		
		$sql = "insert into `{borrow_count_log}` set user_id='{$data['user_id']}',addtime='".time()."'";
		foreach ($data as $key => $value){
			$sql .= ",`{$key}`={$value}";
		}
		$sql .= " ";
		$mysql->db_query($sql);
		return "";		
	}
	
	
	function GetUserCount($data){
		global $mysql;
		//��ȡ���ͳ��
		$sql="select count(1) as all_times from `{borrow}` where user_id={$data['user_id']} ";
		$result=$mysql->db_fetch_arrays($sql);
		$latesql="select sum(p2.late_interest) as all_late_interest from `{borrow_tender}` as p1 left join `{borrow_recover}` as p2 on p1.id=p2.tender_id where (p1.user_id={$data['user_id']} and p1.change_status=0) or (p1.change_userid={$data['user_id']} and p1.change_status=1)";
		$late=$mysql->db_fetch_array($latesql);
		$_result = self::GetBorrowCount(array("user_id"=>$data['user_id']));
		$_result['all_times']=$result[0]['all_times'];
		$_result['all_late_interest']=$late['all_late_interest'];
		
		$sql = " SELECT sum( money ) AS num FROM `{account_log}` WHERE user_id = '{$data['user_id']}' AND `type` = 'tender_award_add' ";
		$result = $mysql->db_fetch_array($sql);
		$_result['award_add'] = $result['num'];
		
		$sql = " SELECT sum( money ) AS num FROM `{account_log}` WHERE user_id = '{$data['user_id']}' AND `type` = 'borrow_award_lower' ";
		$result = $mysql->db_fetch_array($sql);
		$_result['award_lower'] = $result['num'];
		
		return $_result;
	}
	
	
	
	
	
	
	//�������(�������)
public static function Reverify_cuowu($data = array()){
		global $mysql,$_G;
		//�ж�nid�Ƿ��Ѿ�����
		if (IsExiest($data["borrow_nid"])=="") return "borrow_nid_empty";
		$borrow_nid = $data["borrow_nid"];
		//��ȡ����������Ϣ
		$sql = "select p1.*,p2.username  from `{borrow}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id where p1.borrow_nid='{$data['borrow_nid']}'";
		$borrow_result = $mysql->db_fetch_array($sql);
		
		$status = $data['status'];
		$borrow_status = $borrow_result["status"];
		$borrow_style = $borrow_result["borrow_style"];
		
		//�ж��Ƿ��Ѿ����
		if ($borrow_status!=1){
			return "borrow_fullcheck_error";
		}
		
		//�ж��Ƿ��Ѿ����
		if ($borrow_result['borrow_full_status']==1){
			return "borrow_fullcheck_yes";
		}
		
		//�ж��Ƿ�����
		if ($borrow_result['borrow_part_status']!=1 && $borrow_result['borrow_account_yes']!=$borrow_result['account']){
			return "borrow_not_full";
		}
		
		
		//��һ������������ʱ�Ĳ�����
		$sql = " update `{borrow}` set reverify_userid='{$data['reverify_userid']}',reverify_remark='{$data['reverify_remark']}',reverify_time='".time()."',status='{$data['status']}' where borrow_nid='{$borrow_nid}'";
		 $mysql ->db_query($sql);
		 
		 
		//����������
		$borrow_apr=$borrow_result["borrow_apr"];//��Ϣ
		$is_Seconds=$borrow_result["is_Seconds"];//�Ƿ������
		$borrow_userid = $borrow_result["user_id"];//����û�id
		$borrow_username = $borrow_result["username"];//����û�id
		$borrow_account = $borrow_result["account"];//�����
		$borrow_period = $borrow_result["borrow_period"];//�������
		$borrow_name = $borrow_result["name"];//��� ����
		$borrow_cash_status = $borrow_result["cash_status"];//�Ƿ����ֱ�
		$borrow_url = html_entity_decode("<a href=/invest/a{$data['borrow_nid']}.html target=_blank style=color:blue>{$borrow_result['name']}</a>");//�����ַ
		
		
		if ($status == 3){
		
			
			//�ڶ�������������ʱ�Ĳ�����
			$sql = " update `{borrow}` set borrow_full_status='1' where borrow_nid='{$borrow_nid}'";
			$mysql ->db_query($sql);
			
			//������������ɹ����򽫻�����Ϣ���������ȥ
			$_equal["account"] = $borrow_result["account"];
			$_equal["period"] = $borrow_result["borrow_period"];
			$_equal["apr"] = $borrow_result["borrow_apr"];
			$_equal["style"] = $borrow_result["borrow_style"];
			$equal_result = EqualInterest($_equal);
			foreach ($equal_result as $key => $value){
				//��ֹ�ظ���ӻ�����Ϣ
				$sql = "select 1 from `{borrow_repay}` where user_id='{$borrow_userid}' and repay_period='{$key}' and borrow_nid='{$borrow_nid}'";
				$result = $mysql->db_fetch_array($sql);
				if ($result==false){
					$sql = "insert into `{borrow_repay}` set `addtime` = '".time()."',";
					$sql .= "`addip` = '".ip_address()."',user_id='{$borrow_userid}',status=1,`borrow_nid`='{$borrow_nid}',`repay_period`='{$key}',";
					$sql .= "`repay_time`='{$value['repay_time']}',`repay_account`='{$value['account_all']}',";
					$sql .= "`repay_interest`='{$value['account_interest']}',`repay_capital`='{$value['account_capital']}'";
					$mysql ->db_query($sql);
				}else{
					$sql = "update `{borrow_repay}` set `addtime` = '".time()."',";
					$sql .= "`addip` = '".ip_address()."',user_id='{$borrow_userid}',status=1,`borrow_nid`='{$borrow_nid}',`repay_period`='{$key}',";
					$sql .= "`repay_time`='{$value['repay_time']}',`repay_account`='{$value['account_all']}',";
					$sql .= "`repay_interest`='{$value['account_interest']}',`repay_capital`='{$value['account_capital']}'";
					$sql .= " where user_id='$borrow_userid' and repay_period='{$key}' and borrow_nid='{$borrow_nid}'";
					$mysql ->db_query($sql);
				}
			}
			$repay_times = count($equal_result);
			$_equal["type"] = "all";
			$equal_result = EqualInterest($_equal);
			$repay_all = $equal_result['account_total'];
			//��ӻ�����Ϣ����

			//���Ĳ�������ɹ������û�Ͷ�ʼ�����ϸ��
			$tender_result = self::GetTenderList(array("borrow_nid"=>$borrow_nid,"status"=>0,"limit"=>"all"));
			foreach ($tender_result as $_key => $_value){
				
				$tender_id = $_value['id'];
				
				//����Ͷ���˵�״̬
				$sql = "update `{borrow_tender}` set status=1 where id={$tender_id}";
				$mysql->db_query($sql);
				
				//���Ͷ�ʵ��տ��¼
				$_equal["account"] = $_value['account'];
				$_equal["period"] = $borrow_result["borrow_period"];
				$_equal["apr"] = $borrow_result["borrow_apr"];
				$_equal["style"] = $borrow_result["borrow_style"];
				$_equal["type"] = "";
				$equal_result = EqualInterest($_equal);
				
				$tender_userid = $_value['user_id'];
				$tender_account = $_value['account'];
				
				foreach ($equal_result as $period_key => $value){
					$repay_month_account = $value['account_all'];
					//��ֹ�ظ���ӻ�����Ϣ
					$sql = "select 1 from `{borrow_recover}` where user_id='{$tender_userid}' and borrow_nid='{$borrow_nid}' and recover_period='{$period_key}' and tender_id='{$tender_id}'";
					$result = $mysql->db_fetch_array($sql);
					if ($result==false){
						$sql = "insert into `{borrow_recover}` set `addtime` = '".time()."',";
						$sql .= "`addip` = '".ip_address()."',user_id='{$tender_userid}',status=1,`borrow_nid`='{$borrow_nid}',`borrow_userid`='{$borrow_userid}',`tender_id`='{$tender_id}',`recover_period`='{$period_key}',";
						$sql .= "`recover_time`='{$value['repay_time']}',`recover_account`='{$value['account_all']}',";
						$sql .= "`recover_interest`='{$value['account_interest']}',`recover_capital`='{$value['account_capital']}'";
						$mysql ->db_query($sql);
					}else{
						$sql = "update `{borrow_recover}` set `addtime` = '".time()."',";
						$sql .= "`addip` = '".ip_address()."',user_id='{$tender_userid}',status=1,`borrow_nid`='{$borrow_nid}',`borrow_userid`='{$borrow_userid}',`tender_id`='{$tender_id}',`recover_period`='{$period_key}',";
						$sql .= "`recover_time`='{$value['repay_time']}',`recover_account`='{$value['account_all']}',";
						$sql .= "`recover_interest`='{$value['account_interest']}',`recover_capital`='{$value['account_capital']}'";
						$sql .= " where user_id='{$tender_userid}' and recover_period='{$period_key}' and borrow_nid='{$borrow_nid}' and tender_id='{$tender_id}'";
						$mysql ->db_query($sql);
					}
				}
				$recover_times = count($equal_result);
				//���岽,����Ͷ�ʱ����Ϣ
				$_equal["type"] = "all";
				$equal_result = EqualInterest($_equal);
				$recover_all = $equal_result['account_total'];
				$recover_interest_all = $equal_result['interest_total'];
				$recover_capital_all = $equal_result['capital_total'];
				$sql = "update `{borrow_tender}` set recover_account_all='{$equal_result['account_total']}',recover_account_interest='{$equal_result['interest_total']}',recover_account_wait='{$equal_result['account_total']}',recover_account_interest_wait='{$equal_result['interest_total']}',recover_account_capital_wait='{$equal_result['capital_total']}'  where id='{$tender_id}'";
				$mysql->db_query($sql);
				
				
				//������,�۳�Ͷ���˵��ʽ�
				$log_info["user_id"] = $tender_userid;//�����û�id
				$log_info["nid"] = "tender_success_".$borrow_nid.$tender_userid.$tender_id.$period_key;//������
				$log_info["money"] = $tender_account;//�������
				$log_info["income"] = 0;//����
				$log_info["expend"] = $tender_account;//֧��
				$log_info["balance_cash"] = 0;//�����ֽ��
				$log_info["balance_frost"] = 0;//�������ֽ��
				$log_info["frost"] = -$tender_account;//������
				$log_info["await"] = 0;//���ս��
				$log_info["type"] = "tender_success";//����
				$log_info["to_userid"] = $borrow_userid;//����˭
				$log_info["remark"] = "Ͷ��[{$borrow_url}]�ɹ�Ͷ�ʽ��۳�";
				accountClass::AddLog($log_info);
				
				//���߲�,��Ӵ��յĽ��
				$log_info["user_id"] = $tender_userid;//�����û�id
				$log_info["nid"] = "tender_success_frost_".$borrow_nid.$tender_userid.$tender_id.$period_key;//������
				$log_info["money"] = $recover_all;//�������
				$log_info["income"] = 0;//����
				$log_info["expend"] = 0;//֧��
				$log_info["balance_cash"] = 0;//�����ֽ��
				$log_info["balance_frost"] = 0;//�������ֽ��
				$log_info["frost"] = 0;//������
				$log_info["await"] = $recover_all;//���ս��
				$log_info["type"] = "tender_success_frost";//����
				$log_info["to_userid"] = $borrow_userid;//����˭
				$log_info["remark"] =  "Ͷ��[{$borrow_url}]�ɹ����ս������";
				accountClass::AddLog($log_info);
				
				
				
				
				//�ھŲ�,��������
				$remind['nid'] = "tender_success";
				
				$remind['receive_userid'] = $tender_userid;
				$remind['article_id'] = $borrow_nid;
				$remind['code'] = "borrow";
				$remind['title'] = "Ͷ��({$borrow_username})�ı�[<font color=red>{$borrow_name}</font>]������˳ɹ�";
				$remind['content'] = "����Ͷ�ʵı�[{$borrow_url}]��".date("Y-m-d",time())."�Ѿ����ͨ��";
				
				remindClass::sendRemind($remind);
				
				
				
			
				//�����û�������¼
				$user_log["user_id"] = $tender_userid;
				$user_log["code"] = "tender";
				$user_log["type"] = "tender_success";
				$user_log["operating"] = "tender";
				$user_log["article_id"] = $tender_userid;
				$user_log["result"] = 1;
				$user_log["content"] = "����[{$borrow_url}]ͨ���˸���,[<a href=/protocol/a{$data['borrow_nid']}.html target=_blank>����˴�</a>]�鿴Э����";
				usersClass::AddUsersLog($user_log);	
				
				
				//��ʮ��,Ͷ���ߵ����û�������
				/*$credit_log['user_id'] = $tender_userid;
				$credit_log['nid'] = "tender_success";
				$credit_log['code'] = "borrow";
				$credit_log['type'] = "tender";
				$credit_log['addtime'] = time();
				$credit_log['article_id'] =$tender_id;
				$credit_log['value'] = round($tender_account*0.01);
				$result = creditClass::ActionCreditLog($credit_log);*/
				
				//��ʮһ��������Ͷ���ƹ��˽��
				//��ȡͶ���˵Ķ���Ͷ���ƹ���
				$spreadsql="select * from `{spread_user}` where spread_userid={$tender_userid} and style=2 and type=3";
				$spread_result=$mysql->db_fetch_array($spreadsql);
				
				if ($spread_result==true){
					//��ȡ����Ͷ���ƹ��˵��������
					$feesql="select `task_fee` from `{spread_setting}` where type=4";
					$fee_result=$mysql->db_fetch_array($feesql);
					$tenderusername=usersClass::GetUsers(array("user_id"=>$tender_userid));
					$log_info["user_id"] = $spread_result['user_id'];//�ƹ�Ա
					$log_info["nid"] = "tender_spread_".$borrow_nid.$tender_userid.$spread_result['user_id'];//������
					$log_info["money"] = round($tender_account/100*$fee_result['task_fee'],2);//�������
					$log_info["income"] = $log_info["money"];//����
					$log_info["expend"] = 0;//֧��
					$log_info["balance_cash"] = $log_info["money"];//�����ֽ��
					$log_info["balance_frost"] = 0;//�������ֽ��
					$log_info["frost"] = 0;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "tender_spread";//����
					$log_info["to_userid"] = $spread_result['user_id'];//����˭
					$log_info["remark"] = "Ͷ���ƹ�ͻ�[{$tenderusername['username']}]Ͷ��[{$borrow_url}]�ɹ����õ��ƹ���ɣ�Ͷ�ʽ��{$tender_account}�������{$fee_result['task_fee']}%";
					accountClass::AddLog($log_info);
					
					$web['money']=$log_info["money"];
					$web['user_id']=$spread_result['user_id'];
					$web['nid']="other_spread_tender_".$spread_result['user_id']."_".time();
					$web['type']="other_spread_tender";
					$web['remark']="�ƹ�Ͷ�ʿͻ�[{$tenderusername['username']}]���{$log_info["money"]}����Ͷ���ƹ��";
					accountClass::AddAccountWeb($web);
				}
				
				//����ͳ����Ϣ
				self::UpdateBorrowCount(array("user_id"=>$tender_userid,"tender_success_times"=>1,"tender_success_account"=>$tender_account,"tender_frost_account"=>-$tender_account,"tender_recover_account"=>$recover_all,"tender_recover_wait"=>$recover_all,"tender_capital_account"=>$recover_capital_all,"tender_capital_wait"=>$recover_capital_all,"tender_interest_account"=>$recover_interest_all,"tender_interest_wait"=>$recover_interest_all,"tender_recover_times"=>$recover_times,"tender_recover_times_wait"=>$recover_times));
						
			}	
			
			//��ʮһ�������½������Ϣ$nowtime = time();
			$nowtime= time();
			$endtime = get_times(array("num"=>$borrow_result["borrow_period"],"time"=>$nowtime));
			
			if ($borrow_result["borrow_style"]==1){
				$_each_time = "ÿ�����º�".date("d",$nowtime)."��";
				$nexttime = get_times(array("num"=>3,"time"=>$nowtime));
			}else{
				$_each_time = "ÿ��".date("d",$nowtime)."��";
				$nexttime = get_times(array("num"=>1,"time"=>$nowtime));
			}
			$_equal["account"] = $borrow_result['account'];
			$_equal["period"] = $borrow_result["borrow_period"];
			$_equal["apr"] = $borrow_result["borrow_apr"];
			$_equal["type"] = "all";
			$equal_result = EqualInterest($_equal);
			$sql = "update `{borrow}` set repay_account_all='{$equal_result['account_total']}',repay_account_interest='{$equal_result['interest_total']}',repay_account_capital='{$equal_result['capital_total']}',repay_account_wait='{$equal_result['account_total']}',repay_account_interest_wait='{$equal_result['interest_total']}',repay_account_capital_wait='{$equal_result['capital_total']}',repay_last_time='{$endtime}',repay_next_time='{$nexttime}',borrow_success_time='{$nowtime}',repay_each_time='{$_each_time}',repay_times='{$repay_times}'  where borrow_nid='{$borrow_nid}'";
			$mysql->db_query($sql);
			
			
			//��ʮ�岽���ж�vip��Ա���Ƿ�۳�
		    self::AccountVip(array("user_id"=>$borrow_userid));
			
			
			//��17����������Ĳ���
			if ($borrow_result["vouch_status"]==1){
				
				$result = self::GetVouchList(array("limit"=>"all","borrow_nid"=>$borrow_nid));
				if ($result!=""){
					foreach ($result as $key => $value){
					
						//1,���ȸ��µ�����״̬Ϊ1����ʾ�����ɹ�
						$vouch_account = $value['account'];
						$vouch_userid = $value['user_id'];
						$vouch_id = $value['id'];
						$vouch_award = $value['award_account'];
						$sql = "update `{borrow_vouch}` set status=1 where id = {$vouch_id}";
						$mysql -> db_query($sql);
						
						//2,�ж��Ƿ���е������������������ɹ��Ľ�����
						if ($borrow_result["vouch_award_status"]==1){
							$vouch_award_money = $vouch_account*$borrow_result["vouch_award_scale"]*0.01;
							$log_info["user_id"] = $vouch_userid;//�����û�id
							$log_info["nid"] = "vouch_success_award_".$vouch_userid."_".$value['id'].$borrow_nid;//������
							$log_info["money"] = $vouch_award_money;//�������
							$log_info["income"] = $vouch_award_money;//����
							$log_info["expend"] = 0;//֧��
							$log_info["balance_cash"] = $vouch_award_money;//�����ֽ��
							$log_info["balance_frost"] = 0;//�������ֽ��
							$log_info["frost"] = 0;//������
							$log_info["await"] = 0;//���ս��
							$log_info["type"] = "vouch_success_award";//����
							$log_info["to_userid"] = $borrow_userid;//����˭
							$log_info["remark"] =  "��������[{$borrow_url}]���ɹ��ĵ�������";
							accountClass::AddLog($log_info);
						
							//���ɹ��Ľ���֧����
							$log_info["user_id"] = $borrow_userid;//�����û�id
							$log_info["nid"] = "vouch_success_awardpay_".$borrow_userid."_".$value['id'].$borrow_nid;//������
							$log_info["money"] = $vouch_award_money;//�������
							$log_info["income"] = 0;//����
							$log_info["expend"] = $vouch_award_money;//֧��
							$log_info["balance_cash"] = -$vouch_award_money;//�����ֽ��
							$log_info["balance_frost"] = 0;//�������ֽ��
							$log_info["frost"] = 0;//������
							$log_info["await"] = 0;//���ս��
							$log_info["type"] = "vouch_success_awardpay";//����
							$log_info["to_userid"] = $vouch_userid;//����˭
							$log_info["remark"] =  "���������[{$borrow_url}]���ɹ��ĵ�������֧��";
							accountClass::AddLog($log_info);
							
						}
						
						
						//������������ӵ�vouch_collection������ȥ
						
						$_equal["account"] = $vouch_account;
						$_equal["period"] = $borrow_result["borrow_period"];
						$_equal["apr"] = $borrow_result["borrow_apr"];
						$_equal["type"] = "";
						$_equal["style"] = $borrow_result["borrow_style"];
						$equal_result = EqualInterest($_equal);
						foreach ($equal_result as $period_key => $value){
							$sql = "insert into `{borrow_vouch_recover}` set `addtime` = '".time()."',";
							$sql .= "`addip` = '".ip_address()."',user_id='{$vouch_userid}',status=0,vouch_id={$vouch_id},`borrow_nid`='{$borrow_nid}',`borrow_userid`='{$borrow_userid}',`order`='{$period_key}',";
							$sql .= "`repay_time`='{$value['repay_time']}',`repay_account`='{$value['account_all']}',";
							$sql .= "`repay_interest`='{$value['account_interest']}',`repay_capital`='{$value['account_capital']}'";
							$mysql->db_query($sql);
						}
						
					}
					
					$_borrow_account = round($borrow_account/$borrow_period,2);
					for ($i=0;$i<$borrow_period;$i++){
						if ($i==$borrow_period-1){
							$_borrow_account = $borrow_account - $_borrow_account*$i;
						}
						$repay_time = get_times(array("time"=>time(),"num"=>$i+1));
						$sql = "insert into `{borrow_vouch_repay}` set borrow_nid={$borrow_nid},`addtime` = '".time()."',`addip` = '".ip_address()."',user_id=$borrow_userid ,`order` = {$i},status=0,repay_account = '{$_borrow_account}',repay_time='{$repay_time}'";	
						$mysql->db_query($sql);
						

		
					}
				}
				
				//�۳��������
				$_data["user_id"] = $borrow_userid;
				$_data["amount_type"] = "vouch_borrow";
				$_data["type"] = "borrow_success";
				$_data["oprate"] = "reduce";
				$_data["nid"] = "borrow_success_vouch_".$borrow_userid."_".$borrow_nid.$value["id"];
				$_data["account"] = $borrow_account;
				$_data["remark"] = "�������[{$borrow_url}]���ͨ����ȥ�������";//type ���������� 
				borrowClass::AddAmountLog($_data);
			
				//����ͳ����Ϣ
				self::UpdateBorrowCount(array("user_id"=>$borrow_userid,"borrow_vouch_times"=>1));
				
			}else{
				//�۳�������ö��
				
				//��Ӷ�ȼ�¼
				$_data["user_id"] = $borrow_userid;
				$_data["amount_type"] = "borrow";
				$_data["type"] = "borrow_success";
				$_data["oprate"] = "reduce";
				$_data["nid"] = "borrow_success_credit_".$borrow_userid."_".$borrow_nid.$value["id"];
				$_data["account"] = $borrow_account;
				$_data["remark"] = "����[{$borrow_url}]�������ͨ����������ö�ȼ���";;//type ���������� 
				borrowClass::AddAmountLog($_data);
				
			}
			
			
			
			//��������
			$remind['nid'] = "borrow_review_yes";
			$remind['receive_userid'] = $borrow_userid;
			$remind['code'] = "borrow";
			$remind['article_id'] = $borrow_nid;
			$remind['title'] = "�б�[{$borrow_name}]������˳ɹ�";
			$remind['content'] = "��Ľ���[{$borrow_url}]��".date("Y-m-d",time())."�Ѿ����ͨ��";
			
			remindClass::sendRemind($remind);
			

			
			//�����û�������¼
			$user_log["user_id"] = $borrow_userid;
			$user_log["code"] = "borrow";
			$user_log["type"] = "borrow_reverify_success";
			$user_log["operating"] = "success";
			$user_log["article_id"] = $borrow_userid;
			$user_log["result"] = 1;
			$user_log["content"] = "����[{$borrow_url}]ͨ���˸���,[<a href=/protocol/a{$data['borrow_nid']}.html target=_blank>����˴�</a>]�鿴Э����";
			usersClass::AddUsersLog($user_log);	

			
			//����û��Ķ�̬
			$_trend['user_id'] = $borrow_userid;
			$_trend["type"] = "borrow_reverify_success";
			$_trend['content'] = "����[{$borrow_url}]ͨ���˸���";
			//$result = userClass::AddUserTrend($_trend);
			
			if ($is_Seconds==1){	
			$_order = " order by repay_time asc";
			$_limit = "";
			$_select=" * ";
			$sql = "select * from `{borrow_repay}` where borrow_nid='{$borrow_nid}' AND user_id='{$borrow_userid}'";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array($_select,$_order, $limit), $sql));		
		$list = $list?$list:array();
		$dataT = array();
		
		
		foreach ($list as $key => $value){	

				$dataT['borrow_nid'] = $borrow_nid;
				
	$dataT['id'] = $value['id'];
		$dataT['user_id'] = $borrow_userid;
		$resultT =  borrowClass::BorrowRepay($dataT);//��ȡ��ǰ�û������
		
		}
		
				$log_info["user_id"] = $borrow_userid;//�����û�id
		$moeSeconds=round(($borrow_account/100*$borrow_apr)/12,2);
					$log_info["nid"] = "borrow_success_manage_".time()."_".$mysql->db_insert_id();//������
					$log_info["money"] = $moeSeconds;//�������
					$log_info["income"] = 0;//����
					$log_info["expend"] = 0;//֧��
					$log_info["balance_cash"] = +$moeSeconds;//�����ֽ��
					$log_info["balance_frost"] = 0;//�������ֽ��
					$log_info["frost"] = -$moeSeconds;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "fengxianchi_borrow";//����
					$log_info["to_userid"] = 0;//����˭
					$log_info["remark"] =  "����������ʱԤ�ȵ渶��Ϣ{$moeSeconds}Ԫ��";
					accountClass::AddLog($log_info);
		
			
		}	
			
			
			
		}
		
		//�������ʧ��
		elseif ($status == 4){
			//��������Ͷ���ߵĽ�Ǯ��
			$tender_result = self::GetTenderList(array("borrow_nid"=>$borrow_nid,"limit"=>"all"));
			foreach ($tender_result as $key => $value){
				$tender_userid = $value['user_id'];
				$tender_account= $value['account'];
				$tender_id= $value['id'];
				$log_info["user_id"] = $tender_userid;//�����û�id
				$log_info["nid"] = "tender_false_".$tender_userid."_".$tender_id.$borrow_nid;//������
				$log_info["money"] = $tender_account;//�������
				$log_info["income"] = 0;//����
				$log_info["expend"] = 0;//֧��
				$log_info["balance_cash"] = 0;//�����ֽ��
				$log_info["balance_frost"] = $tender_account;//�������ֽ��
				$log_info["frost"] = -$tender_account;//������
				$log_info["await"] = 0;//���ս��
				$log_info["type"] = "tender_false";//����
				$log_info["to_userid"] = $borrow_userid;//����˭
				$log_info["remark"] =  "�б�[{$borrow_url}]ʧ�ܷ��ص�Ͷ���";
				accountClass::AddLog($log_info);
				
				
				//��������
				$remind['nid'] = "tender_false";
				
				$remind['code'] = "borrow";
				$remind['article_id'] = $borrow_nid;
				$remind['receive_userid'] = $value['user_id'];
				$remind['title'] = "Ͷ�ʵı�[<font color=red>{$borrow_name}</font>]�������ʧ��";
				$remind['content'] = "����Ͷ�ʵı�[{$borrow_url}]��".date("Y-m-d",time())."���ʧ��,ʧ��ԭ��{$data['reverify_remark']}";
				
				remindClass::sendRemind($remind);
				
				//��ʮ��,����Ͷ���˵�״̬
				$sql = "update `{borrow_tender}` set status=2 where id={$tender_id}";
				$mysql->db_query($sql);
				
				//����ͳ����Ϣ
				self::UpdateBorrowCount(array("user_id"=>$tender_userid,"tender_frost_account"=>-$tender_account));
				
				//��17����������Ĳ���
				if ($borrow_result["vouch_status"]==1){
					
					$result = self::GetVouchList(array("limit"=>"all","borrow_nid"=>$borrow_nid));
					if ($result!=""){
						foreach ($result as $key => $value){
						
							//1,���ȸ��µ�����״̬Ϊ2����ʾ����ʧ��
							$vouch_account = $value['account'];
							$vouch_userid = $value['user_id'];
							$vouch_id = $value['id'];
							$vouch_award = $value['award_account'];
							
							$sql = "update `{borrow_vouch}` set status=2 where id = '{$vouch_id}'";
							
							$mysql -> db_query($sql);
							
							//2,Ͷ�ʵ����˵ĵ�����ȷ���
							//��Ӷ�ȼ�¼
							//�۳��������
							$_data["user_id"] = $vouch_userid;
							$_data["amount_type"] = "vouch_tender";
							$_data["type"] = "borrow_false";
							$_data["oprate"] = "add";
							$_data["nid"] = "borrow_false_vouch_".$vouch_userid."_".$borrow_nid.$value["id"];
							$_data["account"] = $vouch_account;
							$_data["remark"] = "�������[{$borrow_url}]���ʧ�ܽ�����ȷ���";//type ���������� 
							borrowClass::AddAmountLog($_data);
				
						}	
					}
				}
			}
			
			//��������
			$remind['nid'] = "borrow_review_no";
			
			$remind['code'] = "borrow";
			$remind['article_id'] = $borrow_nid;
			$remind['receive_userid'] = $borrow_userid;
			$remind['title'] = "��������ı�[<font color=red>{$borrow_name}</font>]�������ʧ��";
			$remind['content'] = "��������ı�[{$borrow_url}]��".date("Y-m-d",time())."���ʧ��,ʧ��ԭ��{$data['repayment_remark']}";
			
			
			if ($is_Seconds==1){	
				$log_info["user_id"] = $borrow_userid;//�����û�id
		$moeSeconds=round(($borrow_account/100*$borrow_apr)/12,2);
					$log_info["nid"] = "borrow_success_manage_".time()."_".$mysql->db_insert_id();//������
					$log_info["money"] = $moeSeconds;//�������
					$log_info["income"] = 0;//����
					$log_info["expend"] = 0;//֧��
					$log_info["balance_cash"] = +$moeSeconds;//�����ֽ��
					$log_info["balance_frost"] = 0;//�������ֽ��
					$log_info["frost"] = -$moeSeconds;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "fengxianchi_borrow";//����
					$log_info["to_userid"] = 0;//����˭
					$log_info["remark"] =  "�������ʧ��,���ز������ʱԤ�ȵ渶��Ϣ{$moeSeconds}Ԫ��";
					accountClass::AddLog($log_info);
			   }
			remindClass::sendRemind($remind);
		}
		
		//��������ý��������б�ɹ�������ʧ��Ҳ����
		if ($borrow_result['award_status']!=0){
			if ($status == 3 || $borrow_result['award_false']==1){
				$tender_result = self::GetTenderList(array("borrow_nid"=>$borrow_nid,"limit"=>"all"));
				foreach ($tender_result as $key => $value){
					//Ͷ�꽱���۳������ӡ�
					if ($borrow_result['award_status']==1){
						$money = round(($value['account']/$borrow_account)*$borrow_result['award_account'],2);
					}elseif ($borrow_result['award_status']==2){
						$money = round((($borrow_result['award_scale']/100)*$value['account']),2);
					}
					$tender_id = $value['id'];
					$tender_userid = $value['user_id'];
					$log_info["user_id"] = $tender_userid;//�����û�id
					$log_info["nid"] = "tender_award_add_".$tender_userid."_".$tender_id.$borrow_nid;//������
					$log_info["money"] = $money;//�������
					$log_info["income"] = $money;//����
					$log_info["expend"] = 0;//֧��
					$log_info["balance_cash"] = $money;//�����ֽ��
					$log_info["balance_frost"] = 0;//�������ֽ��
					$log_info["frost"] = 0;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "tender_award_add";//����
					$log_info["to_userid"] = $borrow_userid;//����˭
					$log_info["remark"] =  "���[{$borrow_url}]�Ľ���";
					accountClass::AddLog($log_info);
				
					$log_info["user_id"] = $borrow_userid;//�����û�id
					$log_info["nid"] = "borrow_award_lower_".$borrow_userid."_".$tender_id.$borrow_nid;//������
					$log_info["money"] = $money;//�������
					$log_info["income"] = 0;//����
					$log_info["expend"] = $money;//֧��
					$log_info["balance_cash"] = -$money;//�����ֽ��
					$log_info["balance_frost"] = 0;//�������ֽ��
					$log_info["frost"] = 0;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "borrow_award_lower";//����
					$log_info["to_userid"] = $tender_userid;//����˭
					$log_info["remark"] =  "�۳����[{$borrow_url}]�Ľ���";
					accountClass::AddLog($log_info);
				}
			}
		}
		
		 return $borrow_nid;
	}
	/**
	 * 1,�����б�
	 * $data = array("user_id"=>"�û�id","username"=>"�û���","dotime1"=>"����ʱ��1","dotime2"=>"����ʱ��2");
	 * @return Array
	 */
	function GetshenqingList($data = array()){

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
		
		//�жϽ��״̬
		if (IsExiest($data['status'])!=""){
			
				$_sql .= " and p1.status in (".$data['status'].")";
			
		}else{
	        	$_sql .= " and p1.status = '0'";
		}


		//����
		$_order = " order by p1.`s_id` desc";
		
		
		$_select = " p1.*,p2.username,p3.phone,p3.phone_status ";
		$sql = "select SELECT from `{borrow_shenqing}` as p1 
				 left join {users} as p2 on p1.user_id=p2.user_id
				  left join {users_info} as p3 on p1.user_id=p3.user_id
				 SQL ORDER LIMIT
				";
		
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
	
		//��������
   public static function update_shenqing($data = array()){
	 global $mysql;
	    if (!IsExiest($data['s_id'])) {
            return "borrow_s_id_empty";
        } 
	     $sql = "update `{borrow_shenqing}` set verify_time='".time()."',verify_userid='{$_G['user_id']}',verify_remark='{$data['verify_remark']}',status='{$data['status']}' where  s_id='{$data['s_id']}' ";
		$mysql->db_query($sql);
		return true;	
	 }
	 
	 
	 	//���·��
   public static function update_borrow($data = array()){
	 global $mysql;
	    if (!IsExiest($data['borrow_nid'])) {
            return "borrow_nid_empty";
        } 
		$borrow_nid=$data['borrow_nid'];
		unset($data['borrow_nid']);
		$sql = "update `{borrow}` set `addtime` = `addtime`";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
		$sql .="  where  borrow_nid='{$borrow_nid}' ";
		$mysql->db_query($sql);
		return true;	
	 }
	 
	//��������
    public static function GetshenqingOne($data = array()){
		global $mysql;
		$_sql = "where 1=1 ";
		if (IsExiest($data['s_id'])!=""){
			$_sql .= " and  p1.s_id = '{$data['s_id']}' ";
		}
		$sql = "select p1.*,p2.username,p3.phone,p3.phone_status  from `{borrow_shenqing}` as p1 
				  left join `{users}` as p2 on p1.user_id=p2.user_id 
				  left join `{users_info}` as p3 on p1.user_id = p3.user_id 
				  $_sql
				";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "borrow_not_exiest";
		return $result;
	}
	
	
	//������
	function Add_shenqing($data = array()){
		global $mysql,$_G;
		//�ж��û��Ƿ����
        if (!IsExiest($data['user_id'])) {
            return "borrow_user_id_empty";
        } 
		
		$sql = "insert into `{borrow_shenqing}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
        $mysql->db_query($sql);
	  return $mysql->db_insert_id();	
	
	}
	
	
	
	// <!--��ת��2-->  	
		/**
	 * ֹͣ��ת
	 *
	 * @param Array $data
	 * @return Boolen
	 */
		
		public static function stop_flow($data = array()){
			global $mysql;
		$_sql = " where 1=1 ";
		if (isset($data['id']) && $data['id']!=""){
			$_sql .= " and id={$data['id']} ";
		}else{
			return self::ERROR;
		}
		if (isset($data['user_id'])  && $data['user_id']!=""){
			$_sql .= " and user_id={$data['user_id']} ";
		}
		
		$sql = "update  {borrow}  set status=5  $_sql";
		$mysql->db_query($sql);
		}
		
		// <!--��ת��2-->  	
		/**
	 * ������ת
	 *
	 * @param Array $data
	 * @return Boolen
	 */
		
		public static function open_flow($data = array()){
			global $mysql;
		$_sql = " where 1=1 ";
		if (isset($data['id']) && $data['id']!=""){
			$_sql .= " and id={$data['id']} ";
		}else{
			return self::ERROR;
		}
		if (isset($data['user_id'])  && $data['user_id']!=""){
			$_sql .= " and user_id={$data['user_id']} ";
		}
		
		$sql = "update  {borrow}  set status=1  $_sql";
		$mysql->db_query($sql);
		}
		
	
	
	
		function borrow_postSMS($phone,$contents=''){
		$flag = 0; 
        //Ҫpost������ 
$argv = array( 
         'sn'=>'SDK-WSS-010-05870', //�ṩ���˺�
		'pwd'=>strtoupper(md5('SDK-WSS-010-05870'.'53eD1467')), //�˴�������Ҫ���� ���ܷ�ʽΪ md5(sn+password) 32λ��д
		 'mobile'=>$phone,//�ֻ��� �����Ӣ�ĵĶ��Ÿ��� һ��С��1000���ֻ���
		 'content'=>$contents,//������ݷֱ�urlencode����Ȼ�󶺺Ÿ���
		 'ext'=>'',//�Ӻ�(���Կ� ,������1�� �����Ƕ��,�������Ҫ�����ݺ��ֻ���һһ��Ӧ)
		 'stime'=>'',//��ʱʱ�� ��ʽΪ2011-6-29 11:09:21
		 'rrid'=>''
		 ); 
//����Ҫpost���ַ��� 
          foreach ($argv as $key=>$value) { 
          if ($flag!=0) { 
                         $params .= "&"; 
                         $flag = 1; 
          } 
         $params.= $key."="; $params.=urlencode($value); 
         $flag = 1; 
          } 
         $length = strlen($params); 
                 //����socket���� 
         $fp = fsockopen("sdk2.zucp.net",8060,$errno,$errstr,10) or exit($errstr."--->".$errno); 
         //����post�����ͷ 
         $header = "POST /webservice.asmx/gxmt HTTP/1.1\r\n"; 
         $header .= "Host:sdk2.zucp.net\r\n"; 
         $header .= "Content-Type: application/x-www-form-urlencoded\r\n"; 
         $header .= "Content-Length: ".$length."\r\n"; 
         $header .= "Connection: Close\r\n\r\n"; 
         //���post���ַ��� 
         $header .= $params."\r\n"; 
         //����post������ 
         fputs($fp,$header); 
         $inheader = 1; 
          while (!feof($fp)) { 
                         $line = fgets($fp,1024); //ȥ���������ͷֻ��ʾҳ��ķ������� 
                         if ($inheader && ($line == "\n" || $line == "\r\n")) { 
                                 $inheader = 0; 
                          } 
                          if ($inheader == 0) { 
                                // echo $line; 
                          } 
          } 
		  //<string xmlns="http://tempuri.org/">-5</string>
	       $line=str_replace("<string xmlns=\"http://tempuri.org/\">","",$line);
	       $line=str_replace("</string>","",$line);
		   $result=explode("-",$line);

	     }
		 
		 function GetFlowOne_h($data = array()){
		global $mysql;
		if (!IsExiest($data['user_id'])) return "�û�ID�Ƿ�";
		
		$_select = " p1.*,p2.username";
		$sql = "select {$_select} from `{approve_flow}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id where p1.user_id={$data['user_id']}";
		$result = $mysql->db_fetch_array($sql);
		
		
		return $result;
	}
	
	
	function GetRechargeCount_log($data=array()){
		global $mysql;
		if (IsExiest($data['user_id'])!=false) {
			$_sql = " and p1.user_id = {$data['user_id']}";
		}
		$sql = "select sum(p1.money) as account,count(1) as num,p1.type from `{account_recharge}` as p1 where p1.status=1  $_sql group by  p1.type ";
		$result = $mysql->db_fetch_arrays($sql);
		if ($result!=false){
			foreach ($result as $key => $value){
				if ($value['type']==2){
					$_result['recharge_all_down'] += $value['account'];
				}elseif ($value['type']==1){
					$_result['recharge_all_up'] += $value['account'];
				}else{
					$_result['recharge_all_other'] += $value['account'];
				}
				$_result['recharge_all'] += $value['account'];
			}
		}	
		return $_result;
	
	}


//�ڳ���Ŀ
function GetRaiseList($data = array()){

		global $mysql;
		
		$_sql = "where 1=1 ";	
		

		//�����������
		if (IsExiest($data['raise_name']) != false){
			$_sql .= " and p1.`raise_name` like '%".urldecode($data['raise_name'])."%'";
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
		
		//�жϽ��״̬
		if (IsExiest($data['status'])!=""){

				$_sql .= " and p1.status = '{$data['status']}' ";
		
		}
		//�жϽ��״̬
		if (IsExiest($data['raise_type'])!=""){

				$_sql .= " and p1.raise_type = '{$data['raise_type']}' ";
		
		}


	
		$_select = "p1.*,p3.fileurl,datediff(FROM_UNIXTIME(p1.end_time, '%Y-%m-%d'),now()) as end_day";
		$sql = "select SELECT from `{raise}` as p1 
		         left join `{users_upfiles}` as p3 on p3.id=p1.litpic 
				 SQL ORDER LIMIT
				";
		//echo $_sql;
		//�Ƿ���ʾȫ������Ϣ
		if (IsExiest($data['limit'])!=false){
			if ($data['limit'] != "all"){ $_limit = "  limit ".$data['limit']; }
			 $list =$mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $sql));
			return	 $list;
				
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
/*		$result['borrow_end_status'] = 0;
		if ($result['status']==1 && $result['borrow_end_time']<time()){
			$result['borrow_end_status'] = 1;
		}
		*/
		foreach ($list as $key => $value){
			
			
			//$borrow_end_status = 0;
			//if ($value['status']==1 && $value['borrow_end_time']<time()){
			//	$borrow_end_status = 1;
			//}
			



		}
		
		$sql="select SELECT from `{raise}` as p1 $_sql";
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
	}
	
	
	
	function Updateraise($data){
		global $mysql;
		if (IsExiest($data['img_error'])) return $data['img_error'];
        if (!IsExiest($data['raise_name'])) return "articles_name_empty";
		 if (!IsExiest($data['raise_period'])) return "raise_period_empty";
		 if ($data['raise_period']<=0) {
		 return "raise_period_no";
          }
		  
		   if ($data['raise_account']<=0) {
		 return "raise_account_no";
          }
		  
        if($data['raise_period'])
		{
		$end_time=$data['raise_period']*3600*24;
		}
		
		$sql = "select id from `{raise}` where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		$id = $result['id'];
		if ($id==""){
			return "articles_not_exiest";
		}
		$sql = "update `{raise}` set update_time='".time()."',update_ip='".ip_address()."',";
		$_sql = "";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql)." where id='{$data['id']}'");
		
		
		return $data['id'];
	}
	
	
	function Addraise($data){
		global $mysql;
		
		if (IsExiest($data['img_error'])) return $data['img_error'];
        if (!IsExiest($data['raise_name'])) return "articles_name_empty";
		 if (!IsExiest($data['raise_period'])) return "raise_period_empty";
		 if ($data['raise_period']<=0) {
		 return "raise_period_no";
          }
		  
		   if ($data['raise_account']<=0) {
		 return "raise_account_no";
          }
		 $data['raise_account_wait']=$data['raise_account']; 
        if($data['raise_period'])
		{
		$data['end_time']=time()+$data['raise_period']*3600*24;
		}
		$sql = "insert into `{raise}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}

        $mysql->db_query($sql);
    	$id = $mysql->db_insert_id();
		
		return $id;
	}	
	
	
	public static function GetraiseOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "articles_id_empty";
		if ($data['hits_status']==1){
			$sql ="update `{raise}` set hits =hits+1 where id={$data['id']}";
			$mysql->db_query($sql);
		}
		$_sql = " where p1.id={$data['id']}";
		if ($data['user_id']!=""){
			$_sql .= " and p1.user_id='{$data['user_id']}'";
		}
		$sql = "select p1.*,p2.username,p3.fileurl,datediff(FROM_UNIXTIME(p1.end_time, '%Y-%m-%d'),now()) as end_day from `{raise}` as p1 
				left join `{users}` as p2 on p2.user_id=p1.user_id 
				left join `{users_upfiles}` as p3 on p3.id=p1.litpic 
				{$_sql}";
		$result = $mysql->db_fetch_array($sql);
		
		if ($result==false) return "articles_not_exiest";
		return $result;
	}
	
	
	
	
	
	
	//����ծȨ
	function BuyRaise($data){
		global $mysql;
		//�ж��Ƿ����û���
		$sql = "select * from `{raise}` where  id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		
		if ($result==false) return "borrow_raise_buy_error";
		
		if ($result['status']!=0) return "borrow_raise_buy_error";
		
		if($result['end_time']<time())  return "borrow_raise_end_time_error";
		
		if($result['raise_account_wait']<$data['account'])  return "borrow_raise_account_j_error";
		$tender_result = $mysql->db_fetch_array($sql);

		$result['raise_name']="<a href=/zhongchou/a{$result['id']}.html>{$result['raise_name']}</a>";
		//�ж�֧�������Ƿ���ȷ
		$sql = "select 1 from `{users}` where user_id='{$data['user_id']}' and paypassword='".md5($data['paypassword'])."'";
		$_result = $mysql->db_fetch_array($sql);
		if ($_result==false) return "borrow_raise_paypassword_error";
		
		//�жϿ��ý���Ƿ���ڹ�����
		//
		$sql = "select * from `{account}` where user_id='{$data['user_id']}'";
		$account_result = $mysql->db_fetch_array($sql);
		if ($account_result['balance']<$data['account']) return "borrow_raise_account_error";
		
		if($result['raise_account_wait']==$data['account']) $_sql=",status=1";
		$sql = "update `{raise}` set raise_account_yes=raise_account_yes+{$data['account']},raise_account_scale = 100*(raise_account_yes/raise_account),tender_times=tender_times+1,raise_account_wait=raise_account_wait-{$data['account']} $_sql where id='{$data['id']}'";
		$mysql->db_query($sql);

		$sql = "insert into `{raise_tender}` set `addtime` = '".time()."',`addip` = '".ip_address()."',`tender_account` = '{$data['account']}',`user_id` = '{$data['user_id']}',`raise_id` = '{$data['id']}',`message` = '{$data['message']}',`status` = 0";
		$mysql->db_query($sql);
		
		$tender_id = $mysql->db_insert_id();
		
		$buyuser=self::GetUsers(array("user_id"=>$data['user_id']));
		
		$account=$data['account'];

	

		$log_info["user_id"] = $data['user_id'];//�����û�id
		$log_info["nid"] = "borrow_raise_buy_".$data['user_id']."_".$tender_id;//������
		$log_info["money"] = $account;//�������
		$log_info["income"] = 0;//����
		$log_info["expend"] = $account;//֧��
		$log_info["balance_cash"] = -$account;//�����ֽ��
		$log_info["balance_frost"] = 0;//�������ֽ��
		$log_info["frost"] = 0;//������
		$log_info["await"] = 0;//���ս��
		$log_info["type"] = "borrow_raise_buy";//����
		$log_info["to_userid"] = 0;//����˭
		$log_info["remark"] =  "����[{$result['raise_name']}]��Ŀ��֧�����������";
		accountClass::AddLog($log_info);
		
		$user_log["user_id"] = $data['user_id'];
		$user_log["code"] = "borrow";
		$user_log["type"] = "borrow_raise";
		$user_log["operating"] = "borrow";
		$user_log["article_id"] = $tender_id;
		$user_log["result"] = 1;
		$user_log["content"] = "����[{$result['raise_name']}]��Ŀ��֧�ֳɹ�";
		self::AddUsersLog($user_log);
		
	
		
	    $remind['nid'] = "borrow_raise_yes";
		$remind['receive_userid'] = $data['user_id'];
		$remind['code'] = "borrow";
		$remind['article_id'] =$tender_id;
		$remind['title'] = "����[{$tender_result['raise_name']}]��Ŀ֧�ֳɹ�";
		$remind['content'] = "����".date("Y-m-d",time())."�ɹ�֧��[{$tender_result['raise_name']}]����Ŀ";
		remindClass::sendRemind($remind);
		
		
			
		return $tender_id;
	}
	
	
	function GetRauseTenderList($data = array()){

		global $mysql;
		
		$_sql = "where 1=1 ";	
		

		//�����������
		if (IsExiest($data['raise_id']) != false){
			$_sql .= " and p1.`raise_id` = '".$data['raise_id']."'";
		}

        //�����������
		if (IsExiest($data['user_id']) != false){
			$_sql .= " and p1.`user_id` = '".$data['user_id']."'";
		}

		if (IsExiest($data['username']) != false){
			$_sql .= " and p2.`username` like '%".urldecode($data['username'])."%'";
		}
		
		if (IsExiest($data['raise_name']) != false){
			$_sql .= " and p3.`raise_name` like '%".urldecode($data['raise_name'])."%'";
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
		
		//�жϽ��״̬
		if (IsExiest($data['status'])!=""){

				$_sql .= " and p1.status = '{$data['status']}' ";
		
		}
	
          $_order = " order by p1.`addtime` desc ";
	
		$_select = "p1.*,p2.username,p3.raise_name,p3.raise_account,p3.raise_account_yes,p3.raise_period,p3.raise_type,p3.status as raise_status,datediff(FROM_UNIXTIME(p3.end_time, '%Y-%m-%d'),now()) as end_day";
		$sql = "select SELECT from `{raise_tender}` as p1  
			    left join `{users}` as p2 on p2.user_id=p1.user_id 
				left join `{raise}` as p3 on p3.id=p1.raise_id 
				 SQL ORDER LIMIT
				";
		//echo $_sql;
		//�Ƿ���ʾȫ������Ϣ
		if (IsExiest($data['limit'])!=false){
			if ($data['limit'] != "all"){ $_limit = "  limit ".$data['limit']; }
			 $list =$mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $sql));
			return	 $list;
				
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

		$sql="select SELECT from `{raise_tender}` as p1  left join `{users}` as p2 on p2.user_id=p1.user_id left join `{raise}` as p3 on p3.id=p1.raise_id   $_sql";
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
	}
	
	
		public static function AddTender_flow($result,$borrow_nid,$_tender){
		global $mysql,$_G;
		         $borrow_result = self::GetOne($data=array('borrow_nid'=>$borrow_nid));
		         $sql = "update `{borrow_tender}` set status=1 where id={$result}";
				$mysql->db_query($sql);
				
				$sql = "select * from `{borrow_tender}` where id={$result}";
				$tender_result = $mysql->db_fetch_array($sql);
				
				$tender_userid=$_tender['user_id'];
				$borrow_nid=$_tender['borrow_nid'];
				$tender_id=$result;
				$tender_account =$tender_result['account'];
				$flow_count=$_tender['flow_count'];
				$borrow_userid=$borrow_result['user_id'];
				$account=$tender_result['account'];
				$borrow_url = "<a href=/invest/a{$borrow_result['borrow_nid']}.html target=_blank>{$borrow_result['name']}</a>";
				
				
					

				
				//���Ͷ�ʵ��տ��¼
				$_equal["account"] = $tender_account;
				$_equal["period"] = $borrow_result["borrow_period"];
				$_equal["apr"] = $borrow_result["borrow_apr"];
				$_equal["style"] = 2;
				$_equal["type"] = "";
				$equal_result = EqualInterest($_equal);
				
				foreach ($equal_result as $period_key => $value){
					$repay_month_account = $value['account_all'];
					
									$sql = "select 1 from `{borrow_repay}` where user_id='{$borrow_userid}' and repay_period='0' and borrow_nid='{$borrow_nid}'";
				$result = $mysql->db_fetch_array($sql);
				
				if ($result==false){
					$sql = "insert into `{borrow_repay}` set `addtime` = '".time()."',";
					$sql .= "`addip` = '".ip_address()."',user_id='{$borrow_userid}',status=1,`borrow_nid`='{$borrow_nid}',`repay_period`='0',";
					$sql .= "`repay_time`='{$value['repay_time']}',`repay_account`='{$value['account_all']}',";
					$sql .= "`repay_interest`='{$value['account_interest']}',`repay_capital`='{$value['account_capital']}'";
					$mysql ->db_query($sql);
				}else{
					$sql = "update `{borrow_repay}` set `addtime` = '".time()."',";
					$sql .= "`addip` = '".ip_address()."',user_id='{$borrow_userid}',status=1,`borrow_nid`='{$borrow_nid}',`repay_period`='0',";
					$sql .= "`repay_time`='{$value['repay_time']}',`repay_account`=`repay_account`+'{$value['account_all']}',";
					$sql .= "`repay_interest`=`repay_interest`+'{$value['account_interest']}',`repay_capital`=`repay_capital`+'{$value['account_capital']}'";
					$sql .= " where user_id='{$borrow_userid}' and repay_period='0' and borrow_nid='{$borrow_nid}'";
					$mysql ->db_query($sql);
				}
					
				//��ֹ�ظ���ӻ�����Ϣ
					$sql = "select 1 from `{borrow_recover}` where user_id='{$tender_userid}' and borrow_nid='{$borrow_nid}' and recover_period='$period_key' and tender_id='{$tender_id}'";
					$result = $mysql->db_fetch_array($sql);
					if ($result==false){
						
						$sql = "insert into `{borrow_recover}` set `addtime` = '".time()."',";
						$sql .= "`addip` = '".ip_address()."',user_id='{$tender_userid}',status=1,`borrow_nid`='{$borrow_nid}',`borrow_userid`='{$borrow_userid}',`tender_id`='{$tender_id}',`recover_period`='{$period_key}',";
						$sql .= "`recover_time`='{$value['repay_time']}',`recover_account`='{$value['account_all']}',";
						$sql .= "`recover_interest`='{$value['account_interest']}',`recover_capital`='{$value['account_capital']}'";
						$mysql ->db_query($sql);
						
					}else{
						$sql = "update `{borrow_recover}` set `addtime` = '".time()."',";
						$sql .= "`addip` = '".ip_address()."',user_id='{$tender_userid}',status=1,`borrow_nid`='{$borrow_nid}',`borrow_userid`='{$borrow_userid}',`tender_id`='{$tender_id}',`recover_period`='{$period_key}',";
						$sql .= "`recover_time`='{$value['repay_time']}',`recover_account`='{$value['account_all']}',";
						$sql .= "`recover_interest`='{$value['account_interest']}',`recover_capital`='{$value['account_capital']}'";
						$sql .= " where user_id='{$tender_userid}' and recover_period='{$period_key}' and borrow_nid='{$borrow_nid}' and tender_id='{$tender_id}'";
						$mysql ->db_query($sql);
					}
					
					
				}
				
				$recover_times = count($equal_result);
				//���岽,����Ͷ�ʱ����Ϣ
				$_equal["type"] = "all";
				$equal_result = EqualInterest($_equal);
				$recover_all = $equal_result['account_total'];
				$recover_interest_all = $equal_result['interest_total'];
				$recover_capital_all = $equal_result['capital_total'];
				$sql = "update `{borrow_tender}` set recover_account_all='{$equal_result['account_total']}',recover_account_interest='{$equal_result['interest_total']}',recover_account_wait='{$equal_result['account_total']}',recover_account_interest_wait='{$equal_result['interest_total']}',recover_account_capital_wait='{$equal_result['capital_total']}'  where id='{$tender_id}'";
				$mysql->db_query($sql);
				
					$sql = "update `{borrow}` set repay_account_all=repay_account_all+'{$equal_result['account_total']}',repay_account_interest=repay_account_interest+'{$equal_result['interest_total']}',repay_account_capital=repay_account_capital+'{$equal_result['capital_total']}',repay_account_wait=repay_account_wait+'{$equal_result['account_total']}',repay_account_interest_wait=repay_account_interest_wait+'{$equal_result['interest_total']}',repay_account_capital_wait=repay_account_capital_wait+'{$equal_result['capital_total']}',flow_money=flow_money+'{$tender_account}',flow_count=flow_count+'{$flow_count}' where borrow_nid='{$borrow_nid}'";
			$mysql->db_query($sql);
				
				
							//������,�۳�Ͷ���˵��ʽ�
				$log_info["user_id"] = $tender_userid;//�����û�id
				$log_info["nid"] = "tender_success_".$borrow_nid.$tender_userid.$tender_id.$period_key;//������
				$log_info["money"] = $tender_account;//�������
				$log_info["income"] = 0;//����
				$log_info["expend"] = $tender_account;//֧��
				$log_info["balance_cash"] = 0;//�����ֽ��
				$log_info["balance_frost"] = 0;//�������ֽ��
				$log_info["frost"] = -$tender_account;//������
				$log_info["await"] = 0;//���ս��
				$log_info["type"] = "tender_success";//����
				$log_info["to_userid"] = $borrow_userid;//����˭
				$log_info["remark"] = "Ͷ��[{$borrow_url}]�ɹ�Ͷ�ʽ��۳�";
				accountClass::AddLog($log_info);
				
				//���߲�,��Ӵ��յĽ��
				$log_info["user_id"] = $tender_userid;//�����û�id
				$log_info["nid"] = "tender_success_frost_".$borrow_nid.$tender_userid.$tender_id.$period_key;//������
				$log_info["money"] = $recover_all;//�������
				$log_info["income"] = 0;//����
				$log_info["expend"] = 0;//֧��
				$log_info["balance_cash"] = 0;//�����ֽ��
				$log_info["balance_frost"] = 0;//�������ֽ��
				$log_info["frost"] = 0;//������
				$log_info["await"] = $recover_all;//���ս��
				$log_info["type"] = "tender_success_frost";//����
				$log_info["to_userid"] = $borrow_userid;//����˭
				$log_info["remark"] =  "Ͷ��[{$borrow_url}]�ɹ����ս������";
				accountClass::AddLog($log_info);
				

				//�����û�������¼
				$user_log["user_id"] = $tender_userid;
				$user_log["code"] = "tender";
				$user_log["type"] = "tender_success";
				$user_log["operating"] = "tender";
				$user_log["article_id"] = $tender_userid;
				$user_log["result"] = 1;
				$user_log["content"] = "Ͷ����ת�꣺[{$borrow_url}]�ɹ�";
				usersClass::AddUsersLog($user_log);	
				
				//��������ý��������б�ɹ�������ʧ��Ҳ����
		     if ($borrow_result['award_status']!=0){
		          //Ͷ�꽱���۳������ӡ�
					if ($borrow_result['award_status']==1){
						$money = round(($tender_account/$borrow_result['account'])*$borrow_result['award_account'],2);
					}elseif ($borrow_result['award_status']==2){
						$money = round((($borrow_result['award_scale']/100)*$tender_account),2);
					}
					
				
					$log_info["user_id"] = $tender_userid;//�����û�id
					$log_info["nid"] = "tender_award_add_".$tender_userid."_".$tender_id.$borrow_nid;//������
					$log_info["money"] = $money;//�������
					$log_info["income"] = $money;//����
					$log_info["expend"] = 0;//֧��
					$log_info["balance_cash"] = $money;//�����ֽ��
					$log_info["balance_frost"] = 0;//�������ֽ��
					$log_info["frost"] = 0;//������
					$log_info["await"] = 0;//���ս��
					$log_info["type"] = "tender_award_add";//����
					$log_info["to_userid"] = 0;//����˭
					$log_info["remark"] =  "���[{$borrow_url}]�Ľ���";
					accountClass::AddLog($log_info);
		      }
				
				//����ͳ����Ϣ
				self::UpdateBorrowCount(array("user_id"=>$tender_userid,"tender_times"=>1,"tender_account"=>$tender_account,"tender_success_times"=>1,"tender_success_account"=>$tender_account,"tender_recover_account"=>$recover_all,"tender_recover_wait"=>$recover_all,"tender_capital_account"=>$recover_capital_all,"tender_capital_wait"=>$recover_capital_all,"tender_interest_account"=>$recover_interest_all,"tender_interest_wait"=>$recover_interest_all,"tender_recover_times"=>$recover_times,"tender_recover_times_wait"=>$recover_times));
				
		}
	
	
}




?>