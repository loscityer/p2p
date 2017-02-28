<?
/******************************
 * $File: account.php
 * $Description: �ʽ�ģ���̨�����ļ�
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

$_A['list_purview']["account"]["name"] = "�ʽ����";
$_A['list_purview']["account"]["result"]["account_list"] = array("name"=>"�ʽ��˺Ź���","url"=>"code/account/list");
$_A['list_purview']["account"]["result"]["account_log"] = array("name"=>"�ʽ��¼","url"=>"code/account/log");
$_A['list_purview']["account"]["result"]["account_bank"] = array("name"=>"�˺Ź���","url"=>"code/account/bank");
$_A['list_purview']["account"]["result"]["account_recharge"] = array("name"=>"��ֵ����","url"=>"code/account/recharge");
$_A['list_purview']["account"]["result"]["account_cash"] = array("name"=>"���ֹ���","url"=>"code/account/cash");
$_A['list_purview']["account"]["result"]["account_recharge_new"] = array("name"=>"��ӳ�ֵ","url"=>"code/account/recharge_new");
$_A['list_purview']["account"]["result"]["account_web"] = array("name"=>"��վ����","url"=>"code/account/web");
$_A['list_purview']["account"]["result"]["account_users"] = array("name"=>"�û�����","url"=>"code/account/users");


require_once("account.class.php");

/**
 * �������Ϊ�յĻ�����ʾ���е��ļ��б�
**/
if ($_A['query_type'] == "list"){
	if (isset($_REQUEST['type']) && $_REQUEST['type']=="excel"){
		$data['page'] = $_REQUEST['page'];
		$data['username'] = $_REQUEST['username'];
		accountexcel::AccountList($data);
		exit;
	}
	check_rank("account_list");//���Ȩ��
}


/**
 * ֧����ʽ
**/
elseif ($_A['query_type'] == "payment"){
	check_rank("account_payment");//���Ȩ��
	require_once("payment.php");
}


/**
 * ��վ����
**/
elseif ($_A['query_type'] == "web"){
	
	check_rank("account_web");//���Ȩ��
	if (isset($_REQUEST['type']) && $_REQUEST['type']=="excel"){
		$data['action'] = $_REQUEST['action'];
		$data['page'] = $_REQUEST['page'];
		$data['username'] = $_REQUEST['username'];
		accountexcel::WebLog($data);
		exit;
	}
	if ($_REQUEST['action']=="account" && $_REQUEST['_type']=="excel"){
		$data['action'] = $_REQUEST['action'];
		$data['page'] = $_REQUEST['page'];
		$data['type'] = $_REQUEST['type'];
		$data['dotime1'] = $_REQUEST['dotime1'];
		$data['dotime2'] = $_REQUEST['dotime2'];
		accountexcel::WebListLog($data);
		exit;
	}
	
	if ($_REQUEST['action']=="repay" && $_REQUEST['_type']=="excel"){
		$data['epage'] = $_REQUEST['epage'];
		$data['page'] = $_REQUEST['page'];
		$data['type'] = $_REQUEST['type'];
		$data['dotime1'] = $_REQUEST['dotime1'];
		$data['dotime2'] = $_REQUEST['dotime2'];
		$data['borrow_status'] = $_REQUEST['borrow_status'];
		$data['order'] = $_REQUEST['order'];
		$data['recover_status'] = $_REQUEST['recover_status'];
		$data['showtype'] = $_REQUEST['showtype'];
		accountexcel::RecoverListLog($data);
		exit;
	}
}

/**
 * �û�����
**/
elseif ($_A['query_type'] == "users"){
	
	check_rank("account_users");//���Ȩ��
	if (isset($_REQUEST['type']) && $_REQUEST['type']=="excel"){
		$data['page'] = $_REQUEST['page'];
		$data['username'] = $_REQUEST['username'];
		accountexcel::UsersLog($data);
		exit;
	}
}

/**
 * ��ֵ��¼
**/
elseif ($_A['query_type'] == "recharge"){
	check_rank("account_recharge");//���Ȩ��
	
	if (isset($_REQUEST['type_e']) && $_REQUEST['type_e']=="excel"){
		$data['page'] = $_REQUEST['page'];
		$data['username'] = $_REQUEST['username'];
		$data['status'] = $_REQUEST['status'];
		accountexcel::RechargeLog($data);
		exit;
	}elseif ($_REQUEST['view']!=""){
		if (isset($_POST['nid'])){
			$var = array("nid","status","verify_remark");
			$data = post_var($var);
			$data['verify_userid'] = $_G['user_id'];
			$data['verify_time'] = time();
			$result = accountClass::VerifyRecharge($data);
			if ($result >0 ){
				$msg = array($MsgInfo["account_reacharge_verify_success"],"",$_A['query_url']."/recharge");
			}else{
				$msg = array($MsgInfo[$result]);
			}
			
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "account";
			$admin_log["type"] = "recharge";
			$admin_log["operating"] = "verify";
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
			
		}else{
			$data['id'] = $_REQUEST['view'];
			$_A['account_recharge_result'] = accountClass::GetRecharge($data);
		}
	}
}

/**
 * Ͷ�ʼ�¼
**/
elseif ($_A['query_type'] == "tender"){
	//check_rank("account_recharge");//���Ȩ��
	
	if (isset($_REQUEST['type']) && $_REQUEST['type']=="excel"){
		$data['page'] = $_REQUEST['page'];
		$data['username'] = $_REQUEST['username'];
		$data['status'] = $_REQUEST['status'];
		$data['borrow_name'] = $_REQUEST['borrow_name'];
		$data['borrow_nid'] = $_REQUEST['borrow_nid'];
		accountexcel::GetTenderList_excel($data);
		exit;
	}
}

/**
 * �޸��ʽ�
**/
elseif ($_A['query_type'] == "exit"){
$user_id = $_POST['user_id'];
$money =isset($_POST['money'])?$_POST['money']:0;
$log = $_POST['log'];
if($user_id>0 && isset($_POST['user_id'])){
           if($money>0){
	        $log_info["user_id"] = $user_id;//�����û�id
			$log_info["nid"] = "change_add_".time();//������
			$log_info["money"] = $money;//�������
			$log_info["income"] = $money;//����
			$log_info["expend"] = 0;//֧��
			$log_info["balance"] = $money;//�����ֽ��
			$log_info["balance_cash"] = $money;//�����ֽ��
			$log_info["balance_frost"] = 0;//�������ֽ��
			$log_info["frost"] = 0;//������
			$log_info["await"] = 0;//���ս��
			$log_info["type"] = "change_add";//����
			$log_info["to_userid"] = 0;//����˭
			$log_info["remark"] = "����Ա����ʽ𣬱䶯ԭ��".$log;//��ע
			$result = accountClass::AddLog($log_info);
			}elseif($money<0){
			
			$log_info["user_id"] = $user_id;//�����û�id
			$log_info["nid"] = "change_lessen_".time();//������
			$log_info["money"] = abs($money);//�������
			$log_info["income"] = 0;//����
			$log_info["expend"] = abs($money);//֧��
			$log_info["balance_cash"] = $money;//�����ֽ��
			$log_info["balance_frost"] = 0;//�������ֽ��
			$log_info["frost"] = 0;//������
			$log_info["await"] = 0;//���ս��
			$log_info["type"] = "change_lessen";//����
			$log_info["to_userid"] = 0;//����˭
			$log_info["remark"] = "����Ա�����ʽ𣬱䶯ԭ��".$log;//��ע
			$result = accountClass::AddLog($log_info);
			}
			
				//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "account";
		$admin_log["type"] = "change";
		$admin_log["operating"] = "users";
		$admin_log["article_id"] = $result==$log_info["nid"]?$result:0;
		$admin_log["result"] = $result==$log_info["nid"]?1:0;
		$admin_log["content"] =  "����Ա�䶯�ʽ�";
		$admin_log["data"] =  $log_info;
		usersClass::AddAdminLog($admin_log);
		
		$msg = array("�����ɹ���","",$_A['query_url']."/exit&username=".urlencode($_POST['username'])."");	
			
			
}
$data['username'] = $_REQUEST['username'];
$sql = "select user_id,username from `{users}` where  username = '{$data['username']}' ";

$data_h = $mysql->db_fetch_array($sql);

$_A['account_exit_username']=urldecode($data['username']);
$_A['account_exit_result']=accountClass::GetOne($data_h);
$_A['account_exit_result']['user_id']=$data_h['user_id'];
}

/**
 * �ʽ�ʹ�ü�¼
**/
elseif ($_A['query_type'] == "log"){
	check_rank("account_log");//���Ȩ��
	if (isset($_REQUEST['type']) && $_REQUEST['type']=="excel"){
		$data['page'] = $_REQUEST['page'];
		$data['username'] = $_REQUEST['username'];
		$data['dotime1'] = $_REQUEST['dotime1'];
		$data['dotime2'] = $_REQUEST['dotime2'];
		accountexcel::AccountLogList($data);
		exit;
	}
}
	/**
 * �˺Ź���
**/
elseif ($_A['query_type'] == "bank"){
	check_rank("account_bank");//���Ȩ��
	if ($_POST['type']=="user_id"){
		$var = array("username","user_id","email");
		$data = post_var($var);
		$result = usersClass::GetUserid($data);
		if ($result>0){
			echo "<script>location.href='{$_A['query_url_all']}&user_id={$result}'</script>";
		}else{
			$msg = array($MsgInfo[$result],"",$_A['query_url_all']);
		}
	}
	elseif ($_POST['type']=="update"){
		$var = array("user_id","province","city","account","bank","branch");
		$data = post_var($var);
		$result = accountClass::UpdateUsersBank($data);
		if ($result>0){
			$msg = array($MsgInfo["account_bank_users_update_success"],"",$_A['query_url_all']);
		}else{
			$msg = array($MsgInfo[$result],"",$_A['query_url_all']);
		}
		
		//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "account";
		$admin_log["type"] = "bank";
		$admin_log["operating"] = "users";
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  $data;
		usersClass::AddAdminLog($admin_log);
	}
	elseif ($_REQUEST['user_id']!=""){
		$data['user_id'] = $_REQUEST['user_id'];
		$result = accountClass::GetUsersBankOne($data);
		if (is_array($result)){
			$_A['account_bank_result'] = $result;
		}else{
			$msg = array($MsgInfo[$result],"",$_A['query_url_all']);
		}
	}
	elseif ($_REQUEST['action']=="new" || $_REQUEST['action']=="edit" ){
		if (isset($_POST['name'])){
			$var = array("name","status","nid","litpic","cash_money","reach_day");
			$data = post_var($var);
			if ($_REQUEST['id']!=""){
				$data['id'] = $_REQUEST['id'];
				$result = accountClass::UpdateBank($data);
			}else{
				$result = accountClass::AddBank($data);
			}
			
			if ($result >0 ){
				if ($_REQUEST['id']!=""){
					$msg = array($MsgInfo["account_bank_update_success"],"",$_A['query_url']."/bank&action=bank");
				}else{
					$msg = array($MsgInfo["account_bank_add_success"],"",$_A['query_url']."/bank&action=bank");
				}
			}else{
				$msg = array($MsgInfo[$result]);
			}
		
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "account";
			$admin_log["type"] = "bank";
			$admin_log["operating"] = $_A['query_type']=="bank_edit"?"edit":"new";
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
		}
		
		elseif ($_REQUEST['action']=="del"){
			$data['id'] = $_REQUEST['id'];
			$result = accountClass::DeleteBank($data);
			if ($result >0){
				$msg = array($MsgInfo["account_bank_del_success"],"","{$_A['query_url']}/bank&action=bank");
			}else{
				$msg = array($MsgInfo[$result]);
			}
			
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "account";
			$admin_log["type"] = " bank";
			$admin_log["operating"] = 'del';
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
		}
		
		elseif ($_REQUEST['id']!=""){
			$data['id'] = $_REQUEST['id'];
			$_A['account_bank_result'] = accountClass::GetBank($data);
		}
	
	}
}


/**
 * ���ּ�¼
**/
elseif ($_A['query_type'] == "cash"){
	check_rank("account_cash");//���Ȩ��
	if (isset($_REQUEST['type']) && $_REQUEST['type']=="excel"){
		$data['page'] = $_REQUEST['page'];
		$data['username'] = $_REQUEST['username'];
		$data['status'] = $_REQUEST['status'];
		accountexcel::CashLog($data);
		exit;
	}elseif ($_REQUEST['action']=="view"){
		if (isset($_POST['status'])){
			$msg = check_valicode();
			if ($msg==""){
				$var = array("status","credited","fee","verify_remark");
				$data = post_var($var);
				$data['id'] = $_REQUEST['id'];
				$data['verify_userid'] = $_G['user_id'];
				$data['verify_time'] = time();
				
				$result = accountClass::VerifyCash($data);
				if ($result >0 ){
					$msg = array($MsgInfo["account_cash_verify_success"],"",$_A['query_url']."/cash");
				}else{
					$msg = array($MsgInfo[$result]);
				}
				
				//�������Ա������¼
				$admin_log["user_id"] = $_G['user_id'];
				$admin_log["code"] = "account";
				$admin_log["type"] = "cash";
				$admin_log["operating"] = "verify";
				$admin_log["article_id"] = $result>0?$result:0;
				$admin_log["result"] = $result>0?1:0;
				$admin_log["content"] =  $msg[0];
				$admin_log["data"] =  $data;
				usersClass::AddAdminLog($admin_log);
			}
		}else{
			$data['id'] = $_REQUEST['id'];
			$_A['account_cash_result'] = accountClass::GetCashOne($data);
		}
	}
}



/**
 * �۳�����
**/
elseif ($_A['query_type'] == "deduct"){
	check_rank("account_deduct");//���Ȩ��
	if(isset($_POST['username']) && $_POST['username']!=""){
		$_data['username'] = $_POST['username'];
		$result = usersClass::GetUsers($_data);
		if ($result==false){
			$msg = array("�û���������");
		}elseif ($_POST['valicode']!=$_SESSION['valicode']){
			$msg = array("��֤�벻��ȷ");
		}else{
			$data['user_id'] = $result['user_id'];
			$data['money'] = $_POST['money'];
			$data['type'] = $_POST['type'];
			$data['remark'] = $_POST['remark'];
			$result = accountClass::Deduct($data);
			if ($result !== true){
				$msg = array($result);
			}else{
				$msg = array("�����ѳɹ��۳�","",$_A['query_url']."/log");
				$_SESSION['valicode'] = "";
			}
		}
	}
}



/**
 * ��ӷ���
**/
elseif ($_A['query_type'] == "recharge_new"){
	check_rank("account_recharge_new");//���Ȩ��
	if(isset($_POST['username']) && $_POST['username']!=""){
		$_data['username'] = $_POST['username'];
		$result = usersClass::GetUsers($_data);
		if ($result==false){
			$msg = array("�û���������");
		}else{
			$data['user_id'] = $result['user_id'];
			$data['status'] = 0;
			$data['type']==2;
			$data['payment'] = 0;
			$data['fee'] = 0;
			$data['balance'] = $_POST['money'];
			$data['money'] = $_POST['money'];
			$data['nid'] = $result['user_id'].time().rand(100,999);
			$data['remark'] = $_POST['remark'];
			$result = accountClass::AddRecharge($data);
			if ($result !== true){
				$msg = array($result);
			}else{
				$msg = array("�����ɹ�","",$_A['query_url']."/recharge".$_A['site_url']);
			}
		}
	}
}

//��ֹ�Ҳ���
else{
	$msg = array("���������벻Ҫ�Ҳ���");
}
?>