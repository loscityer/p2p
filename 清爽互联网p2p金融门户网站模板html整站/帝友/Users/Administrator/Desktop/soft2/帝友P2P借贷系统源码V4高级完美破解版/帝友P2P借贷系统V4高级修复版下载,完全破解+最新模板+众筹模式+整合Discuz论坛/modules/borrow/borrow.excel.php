<?
/******************************
 * $File: borrow.excel.php
 * $Description: ����
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

require_once("borrow.model.php");

class borrowexcel {
	
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
	function LogList($data){
		$title = array("Id","�û���","���׺�","����","�������","��ע","���ʱ��");
		if ($data['style']=="fxc"){
			$name="���ճ�";
		}else{
			$name="�˺���Ϣ";
		}
		if ($data['page']>0){
			$_result = accountClass::GetLogList($data);
			$result  = $_result['list'];
		}else{
			$data['limit'] = "all";
			$result = accountClass::GetLogList($data);
		}
		foreach ($result as $key => $value){
			$_data[$key] = array($key+1,$value['username'],$value['nid'],$value['type'],$value['money'],$value['remark'],date("Y-m-d H:i:s",$value['addtime']));
		}
		exportData($name."����",$title,$_data);
		exit;
	}
	
}
?>