<?
/******************************
 * $File: account.excel.php
 * $Description: �ʽ����ļ�
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

require_once("account.model.php");

class accountexcel {
	
	//�����û����ʽ��¼
	function AccountList($data){
		$title = array("Id","�û�����","�ܽ��","���ý��","������","���ս��");
		if ($data['page']>0){
			$_result = accountClass::GetList($data);
			$result  = $_result['list'];
		}else{
			$data['limit'] = "all";
			$result = accountClass::GetList($data);
		}
		foreach ($result as $key => $value){
			$_data[$key] = array($key+1,$value['username'],$value['total'],$value['balance'],$value['frost'],$value['await']);
		}
		exportData("�˺���Ϣ����",$title,$_data);
		exit;
	}
	
	
	//�����û����ʽ��¼
	function AccountLogList($data){
	global $_G;
		$title = array("Id","�û���","����","�������","�ʲ��ܶ�","�ۼƴ���","�ۼ�֧��","������","���ս��","���ý��","����ʱ��");
		if ($data['page']>0){
			$_result = accountClass::GetLogList($data);
			$result  = $_result['list'];
		}else{
			$data['limit'] = "all";
			$result = accountClass::GetLogList($data);
		}
		foreach ($result as $key => $value){
		$value['type']=$_G['linkages']['account_type'][$value['type']];
		
			$_data[$key] = array($key+1,$value['username'],$value['type'],$value['money'],$value['total'],$value['income'],$value['expend'],$value['frost'],$value['await'],$value['balance'],date("Y-m-d H:i:s",$value['addtime']));
		}
		exportData("�ʽ��¼�б�",$title,$_data);
		exit;
	}
	
	
	//��ֵ�ʽ��¼ID
	function RechargeLog($data){
		global $Linkages;
		$title = array("Id","�û���","��ʵ��","���׺�","����","��ֵ����","��ֵ���","��ֵ������","ʵ�ʵ��˽��","״̬","����ʱ��","����ip");
		
		if ($data['page']>0){
			$_result = accountClass::GetRechargeList($data);
			$result  = $_result['list'];
		}else{
			$data['limit'] = "all";
			$result = accountClass::GetRechargeList($data);
		}
		foreach ($result as $key => $value){
			$value['type'] = $Linkages['account_recharge_type'][$value['type']];
			$value['status'] = $Linkages['account_recharge_status'][$value['status']];
			
			$_data[$key] = array($key+1,$value['username'],$value['realname'],"'".$value['nid'],$value['type'],$value['payment_name'],$value['money'],$value['fee'],$value['balance'],$value['status'],date("Y-m-d H:i:s",$value['addtime']),$value['addip']);
		}
		exportData("��ֵ�ʽ��¼�б�",$title,$_data);
		exit;
	}
	
	
	//Ͷ�ʼ�¼��¼ID
	function GetTenderList_excel($data){
		global $Linkages;
		$title = array("Id","Ͷ����","Ͷ�ʽ��","Ͷ��ʱ��","Ͷ��״̬","���״̬","����","����ʶ��","����ܶ�","�Զ�Ͷ��");
		
		if ($data['page']>0){
			$_result = borrowClass::GetTenderList($data);
			$result  = $_result['list'];
		}else{
			$data['limit'] = "all";
			$result = borrowClass::GetTenderList($data);
		}
		foreach ($result as $key => $value){
			$value['status'] = $Linkages['borrow_tender_status'][$value['status']];
			$value['tender_status'] = $Linkages['borrow_tender_verify_status'][$value['tender_status']];
			$value['auto_status'] = $Linkages['borrow_tender_auto_status'][$value['auto_status']];
			
			$_data[$key] = array($key+1,$value['username'],$value['account'],date("Y-m-d H:i:s",$value['addtime']),$value['status'],$value['tender_status'],$value['borrow_name'],$value['borrow_nid'],$value['borrow_account'],$value['auto_status']);
		}
		exportData("�û�Ͷ�ʼ�¼�б�",$title,$_data);
		exit;
	}
	
	//�����ʽ��¼ID�û�����				
	function CashLog($data){
		global $Linkages;
		$title = array("Id","�û���","��ʵ����","��������","֧��","���ڵ�","�����˺�","�����ܶ�","���˽��","������","����ʱ��","����ip","״̬");
		if ($data['page']>0){
			$_result = accountClass::GetCashList($data);
			$result  = $_result['list'];
		}else{
			$data['limit'] = "all";
			$result = accountClass::GetCashList($data);
		}
		foreach ($result as $key => $value){
			$value['status'] = $Linkages['account_cash_status'][$value['status']];
			$value['city'] = modifier("areas",$value['city'],"p,c");
			$_data[$key] = array($key+1,$value['username'],$value['realname'],$value['bank_name'],$value['branch'],$value['city'],$value['account'],$value['total'],$value['credited'],$value['fee'],date("Y-m-d H:i:s",$value['addtime']),$value['addip'],$value['status']);
		}
		exportData("�����ʽ��¼�б�",$title,$_data);
		exit;
	}
	
	
	
	//��վ����			
	function WebLog($data){
		$title = array("Id","����","�������","����","֧��","˵��","����ʱ��","����ip");
		if ($data['page']>0){
			$_result = accountClass::GetBalanceList($data);
			$result  = $_result['list'];
		}else{
			$data['limit'] = "all";
			$result = accountClass::GetBalanceList($data);
		}
		foreach ($result as $key => $value){
			$type = $Linkages['account_web_fee'][$value['type']];
			if ($value['type']=="recharge"){
				$income = $value['income'];
				$expend = $value['expend'];
			}else{
				$income = $value['expend'];
				$expend = $value['income'];
			}
			$_data[$key] = array($key+1,$type,$value['money'],$income,$expend,$value['remark'],date("Y-m-d H:i:s",$value['addtime']),$value['addip']);
		}
		exportData("��վ����",$title,$_data);
		exit;
	}
	
	//��վ����			
	function WebListLog($data){
		$title = array("Id","�û���","����","��վ�渶���","��ע","����ʱ��","����ip");
		if ($data['page']>0){
			$_result = accountClass::GetWebList($data);
			$result  = $_result['list'];
		}else{
			$data['limit'] = "all";
			$result = accountClass::GetWebList($data);
		}
		foreach ($result as $key => $value){
			$type = $Linkages['account_web_type'][$value['type']];
			$_data[$key] = array($key+1,$value['username'],$type,round($value['money'],2),$remark,date("Y-m-d H:i:s",$value['addtime']),$value['addip']);
		}
		exportData("��վ�渶����",$title,$_data);
		exit;
	}
	
	
	//��վ����			
	function RecoverListLog($data){
		require_once(ROOT_PATH."/modules/borrow/borrow.class.php");
		$title = array("Id","������","Ӧ������","�����","�ڼ���","������","�渶���","Ӧ�ձ���","Ӧ����Ϣ","���ڷ�Ϣ","��������","״̬");
		if ($data['page']>0){
			$_result = borrowClass::GetRecoverList($data);
			$result  = $_result['list'];
		}else{
			$data['limit'] = "all";
			$result = borrowClass::GetRecoverList($data);
		}
		foreach ($result as $key => $value){
			if ($value['recover_status']==1){
				$status="�ѻ�";
			}else{
				$status = "δ��";	
			}
			
			$_data[$key] = array($key+1,$value['borrow_name'],date("Y-m-d",$value['recover_time']),$value['borrow_username'],$value['recover_period']+1,$value['borrow_period'],$value['recover_recover_account_yes'],$value['recover_capital'],$value['late_interest'],$value['late_days'],$status);
		}
		exportData("��վӦ����ϸ��",$title,$_data);
		exit;
	}
	
	
	
	
	//		
	function UsersLog($data){
		$title = array("Id","�û���","����","�������","���","����","֧��","����","����","��ע","����ʱ��","����ip");
		if ($data['page']>0){
			$_result = accountClass::GetUsersList($data);
			$result  = $_result['list'];
		}else{
			$data['limit'] = "all";
			$result = accountClass::GetUsersList($data);
		}
		foreach ($result as $key => $value){
			$type = $Linkages['account_type'][$value['type']];
			$_data[$key] = array($key+1,$value['username'],$type,$value['money'],$value['balance'],$value['income'],$value['expend'],$value['await'],$value['frost'],$value['remark'],date("Y-m-d H:i:s",$value['addtime']),$value['addip']);
		}
		exportData("�û�����",$title,$_data);
		exit;
	}
}
?>