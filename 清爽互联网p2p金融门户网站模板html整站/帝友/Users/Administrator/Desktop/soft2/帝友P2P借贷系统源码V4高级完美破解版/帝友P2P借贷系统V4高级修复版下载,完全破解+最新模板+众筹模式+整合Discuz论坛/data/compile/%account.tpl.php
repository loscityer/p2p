
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type']=="list"): ?>
	<? $this->magic_include(array('file' => "account.list.tpl", 'vars' => array('template_dir' => 'modules/account')));?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="exit"): ?>
<? $this->magic_include(array('file' => "account.exit.tpl", 'vars' => array('template_dir' => 'modules/account')));?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="log"): ?>
	<? $this->magic_include(array('file' => "account.log.tpl", 'vars' => array('template_dir' => 'modules/account')));?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="recharge"): ?>
	<? $this->magic_include(array('file' => "account.recharge.tpl", 'vars' => array('template_dir' => 'modules/account')));?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="cash"): ?>
	<? $this->magic_include(array('file' => "account.cash.tpl", 'vars' => array('template_dir' => 'modules/account')));?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="web"): ?>
	<? $this->magic_include(array('file' => "account.web.tpl", 'vars' => array('template_dir' => 'modules/account')));?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="tender"): ?>
<? $this->magic_include(array('file' => "account.tender.tpl", 'vars' => array('template_dir' => 'modules/account')));?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="users"): ?>
	<? $this->magic_include(array('file' => "account.users.tpl", 'vars' => array('template_dir' => 'modules/account')));?>




<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="bank"): ?>
<ul class="nav3"> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/bank">�û��˻���Ϣ</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/bank&action=bank">�����˻��б�</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/bank&action=new">��������˻�</a></li> 
</ul> 


<? if (!isset($_REQUEST['action'])) $_REQUEST['action']=''; ;if (  $_REQUEST['action']==""): ?>

<div class="module_add">
	<div class="module_title"><strong>�û��˻���Ϣ</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:25%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<? if (!isset($_REQUEST['user_id'])) $_REQUEST['user_id']=''; ;if (  $_REQUEST['user_id']==""): ?>
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong>�����û�</strong>(����˳���������)<input type="hidden" name="type" value="user_id" /></div>
	
	
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<input type="text" name="username"  value="<? if (!isset($this->magic_vars['_A']['user_result']['username'])) $this->magic_vars['_A']['user_result']['username'] = ''; echo $this->magic_vars['_A']['user_result']['username']; ?>"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">�û�ID��</div>
		<div class="c">
			<input type="text" name="user_id" />
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">���䣺</div>
		<div class="c">
			<input type="text" name="email" />
		</div>
	</div>
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	<? else: ?>
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&user_id=<? if (!isset($this->magic_vars['maigc']['request']['user_id'])) $this->magic_vars['maigc']['request']['user_id'] = ''; echo $this->magic_vars['maigc']['request']['user_id']; ?>" method="post">
	<div class="module_title"><strong>�޸��û������˻�</strong></div>
	
	
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_bank_result']['username'])) $this->magic_vars['_A']['account_bank_result']['username'] = ''; echo $this->magic_vars['_A']['account_bank_result']['username']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ʵ������</div>
		<div class="c">
			<a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=code/approve/realname&user_id=<? if (!isset($this->magic_vars['_A']['account_bank_result']['user_id'])) $this->magic_vars['_A']['account_bank_result']['user_id'] = ''; echo $this->magic_vars['_A']['account_bank_result']['user_id']; ?>"><? if (!isset($this->magic_vars['_A']['account_bank_result']['realname'])) $this->magic_vars['_A']['account_bank_result']['realname'] = '';$_tmp = $this->magic_vars['_A']['account_bank_result']['realname'];$_tmp = $this->magic_modifier("default",$_tmp,"δ��");echo $_tmp;unset($_tmp); ?></a>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���ڵأ�</div>
		<div class="c">
			<script src="/?plugins&q=areas&name=&type=p,c&area=<? echo $this->magic_vars['_A']['account_bank_result']['city']; ?>" ></script>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�������У�</div>
		<div class="c">
		<? $sql = 'select name,id from `{account_bank}`';$result = $this->magic_vars['_G']['mysql']->db_fetch_arrays($sql); echo "<select name='bank' id=bank  style=''>"; if (IsExiest($result)!=false): foreach ($result as $key => $val): if ($this->magic_vars['_A']['account_bank_result']['bank']==$val['id'] ) { echo "<option value='{$val['id']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['id']}' >{$val['name']}</option>";} endforeach;endif; echo "</select>";?>
			
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">֧�У�</div>
		<div class="c">
			<input type="text" name="branch" value="<? if (!isset($this->magic_vars['_A']['account_bank_result']['branch'])) $this->magic_vars['_A']['account_bank_result']['branch'] = ''; echo $this->magic_vars['_A']['account_bank_result']['branch']; ?>" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">�����˻���</div>
		<div class="c">
			<input type="text" name="account"   value="<? if (!isset($this->magic_vars['_A']['account_bank_result']['account'])) $this->magic_vars['_A']['account_bank_result']['account'] = ''; echo $this->magic_vars['_A']['account_bank_result']['account']; ?>"/>
		</div>
	</div>
	
	<div class="module_submit"><input type="hidden" name="type" value="update" /><input type="hidden" name="user_id" value="<? if (!isset($_REQUEST['user_id'])) $_REQUEST['user_id'] = ''; echo $_REQUEST['user_id']; ?>" /><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	
	<? endif; ?>
	</div>
		</div>
	<div style="float:right; width:72%; text-align:left">
	
	<div class="module_add">
		<div class="module_title"><strong>�û������˻��б�</strong></div>
	</div>
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
		  <form action="" method="post">
			<tr >
				<td class="main_td">ID</td>
				<td class="main_td">�û���</td>
				<td class="main_td" nowrap="nowrap">��ʵ����</td>
				<td class="main_td" nowrap="nowrap">��������</td>
				<td class="main_td">���ڵ�</td>
				<td class="main_td">֧��</td>
				<td class="main_td">�����˻�</td>
				<td class="main_td">����</td>
			</tr>
			<? $this->magic_vars['query_type']='GetUsersBankList';$data = array('var'=>'loop','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/account/account.class.php');$this->magic_vars['magic_result'] = accountClass::GetUsersBankList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
				<td ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
				<td nowrap="nowrap"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
				<td ><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
				<td ><? if (!isset($this->magic_vars['item']['bank_name'])) $this->magic_vars['item']['bank_name'] = ''; echo $this->magic_vars['item']['bank_name']; ?></td>
				<td ><? if (!isset($this->magic_vars['item']['province'])) $this->magic_vars['item']['province'] = '';$_tmp = $this->magic_vars['item']['province'];$_tmp = $this->magic_modifier("areas",$_tmp,"");echo $_tmp;unset($_tmp); ?> <? if (!isset($this->magic_vars['item']['city'])) $this->magic_vars['item']['city'] = '';$_tmp = $this->magic_vars['item']['city'];$_tmp = $this->magic_modifier("areas",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
				<td ><? if (!isset($this->magic_vars['item']['branch'])) $this->magic_vars['item']['branch'] = ''; echo $this->magic_vars['item']['branch']; ?></td>
				<td ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>
				<td  nowrap="nowrap"><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/bank&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>">�޸�</a> </td>
			</tr>
			<? endforeach; endif; unset($_from); ?>
			<tr>
			<td colspan="12" class="action">
			<div class="floatl">
			
			</div>
			<div class="floatr">
				���ƣ�<input type="text" name="keywords" id="keywords" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"/> <input type="button" value="����" / onclick="sousuo()">
			</div>
			</td>
		</tr>
			<tr>
				<td colspan="9" class="page">
				<? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?> 
				</td>
			</tr>
			<? unset($_magic_vars); ?>
		</form>	
	</table>
</div>
<? if (!isset($_REQUEST['action'])) $_REQUEST['action']=''; ;elseif (  $_REQUEST['action']=="bank"): ?>
	<div class="module_add">
		<div class="module_title"><strong><? if (!isset($this->magic_vars['MsgInfo']['account_name_bank_list'])) $this->magic_vars['MsgInfo']['account_name_bank_list'] = ''; echo $this->magic_vars['MsgInfo']['account_name_bank_list']; ?></strong></div>
	</div>
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
		  <form action="" method="post">
			<tr >
				<td class="main_td">ID</td>
				<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['account_name_bank_name'])) $this->magic_vars['MsgInfo']['account_name_bank_name'] = ''; echo $this->magic_vars['MsgInfo']['account_name_bank_name']; ?></td>
				<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['account_name_bank_status'])) $this->magic_vars['MsgInfo']['account_name_bank_status'] = ''; echo $this->magic_vars['MsgInfo']['account_name_bank_status']; ?></td>
				<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['account_name_bank_nid'])) $this->magic_vars['MsgInfo']['account_name_bank_nid'] = ''; echo $this->magic_vars['MsgInfo']['account_name_bank_nid']; ?></td>
				<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['account_name_bank_litpic'])) $this->magic_vars['MsgInfo']['account_name_bank_litpic'] = ''; echo $this->magic_vars['MsgInfo']['account_name_bank_litpic']; ?></td>
				<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['account_name_bank_cash_money'])) $this->magic_vars['MsgInfo']['account_name_bank_cash_money'] = ''; echo $this->magic_vars['MsgInfo']['account_name_bank_cash_money']; ?></td>
				<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['account_name_bank_reach_day'])) $this->magic_vars['MsgInfo']['account_name_bank_reach_day'] = ''; echo $this->magic_vars['MsgInfo']['account_name_bank_reach_day']; ?></td>
				<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['account_name_bank_manage'])) $this->magic_vars['MsgInfo']['account_name_bank_manage'] = ''; echo $this->magic_vars['MsgInfo']['account_name_bank_manage']; ?></td>
			</tr>
			<? $this->magic_vars['query_type']='GetBankList';$data = array('var'=>'loop','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/account/account.class.php');$this->magic_vars['magic_result'] = accountClass::GetBankList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
				<td ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
				<td ><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
				<td ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status'] = '';$_tmp = $this->magic_vars['item']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"account_bank_status");echo $_tmp;unset($_tmp); ?></td>
				<td ><? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?></td>
				<td ><? if (!isset($this->magic_vars['item']['litpic'])) $this->magic_vars['item']['litpic'] = ''; echo $this->magic_vars['item']['litpic']; ?></td>
				<td ><? if (!isset($this->magic_vars['item']['cash_money'])) $this->magic_vars['item']['cash_money'] = ''; echo $this->magic_vars['item']['cash_money']; ?></td>
				<td ><? if (!isset($this->magic_vars['item']['reach_day'])) $this->magic_vars['item']['reach_day'] = ''; echo $this->magic_vars['item']['reach_day']; ?></td>
				<td ><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/bank&action=edit&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>"><? if (!isset($this->magic_vars['MsgInfo']['linkages_name_edit'])) $this->magic_vars['MsgInfo']['linkages_name_edit'] = ''; echo $this->magic_vars['MsgInfo']['linkages_name_edit']; ?></a>  <a href="#" onClick="javascript:if(confirm('<? if (!isset($this->magic_vars['MsgInfo']['account_name_bank_del_msg'])) $this->magic_vars['MsgInfo']['account_name_bank_del_msg'] = ''; echo $this->magic_vars['MsgInfo']['account_name_bank_del_msg']; ?>')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/bank&action=del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'"><? if (!isset($this->magic_vars['MsgInfo']['linkages_name_del'])) $this->magic_vars['MsgInfo']['linkages_name_del'] = ''; echo $this->magic_vars['MsgInfo']['linkages_name_del']; ?></a></td>
			</tr>
			<? endforeach; endif; unset($_from); ?>
			<tr>
			<td colspan="12" class="action">
			<div class="floatl">
			
			</div>
			<div class="floatr">
				���ƣ�<input type="text" name="keywords" id="keywords" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"/> <input type="button" value="����" / onclick="sousuo()">
			</div>
			</td>
		</tr>
			<tr>
				<td colspan="9" class="page">
				<? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?> 
				</td>
			</tr>
			<? unset($_magic_vars); ?>
		</form>	
	</table>

<!--��ӳ�ֵ��¼ ��ʼ-->
<? if (!isset($_REQUEST['action'])) $_REQUEST['action']='';if (!isset($_REQUEST['action'])) $_REQUEST['action']=''; ;elseif (  $_REQUEST['action'] == "new" ||  $_REQUEST['action'] == "edit"): ?>

<div class="module_add">
	
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data" >
	<div class="module_title"><strong><? if (!isset($this->magic_vars['MsgInfo']['account_name_bank_new'])) $this->magic_vars['MsgInfo']['account_name_bank_new'] = ''; echo $this->magic_vars['MsgInfo']['account_name_bank_new']; ?></strong></div>

	<div class="module_border">
		<div class="l"><? if (!isset($this->magic_vars['MsgInfo']['account_name_bank_name'])) $this->magic_vars['MsgInfo']['account_name_bank_name'] = ''; echo $this->magic_vars['MsgInfo']['account_name_bank_name']; ?>��</div>
		<div class="c">
			<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['account_bank_result']['name'])) $this->magic_vars['_A']['account_bank_result']['name'] = ''; echo $this->magic_vars['_A']['account_bank_result']['name']; ?>" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l"><? if (!isset($this->magic_vars['MsgInfo']['account_name_bank_status'])) $this->magic_vars['MsgInfo']['account_name_bank_status'] = ''; echo $this->magic_vars['MsgInfo']['account_name_bank_status']; ?>��</div>
		<div class="c">
			<? 
		$_value = explode(",","1|����,0|�ر�");
		$display = "";$_che = $this->magic_vars['_A']['account_bank_result']['status'];
		
		foreach ($_value as $k => $v){
			$_check = "";
			$_v = explode("|",$v);
			if (!IsExiest($_v[1])) $_v[1] = $_v[0];
			if ($_che==$_v[0]){
				$_check = " checked='checked'";
			}
			if ($k>0){
				$display .= '<input type="radio" value="'.$_v[0].'"  name="status" '.$_check.'/> '.$_v[1];
			}else{
				$k0 = array($_v[0],$_v[1]);
			}
		}
		if ($_che=="" || in_array($_che,$k0)){
			$display = '<input type="radio" value="'.$k0[0].'"  name="status" checked="checked"/> '.$k0[1].$display;
		}else{
			$display = '<input type="radio" value="'.$k0[0].'"  name="status" /> '.$k0[1].$display;
		}
		echo $display;
		?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l"><? if (!isset($this->magic_vars['MsgInfo']['account_name_bank_nid'])) $this->magic_vars['MsgInfo']['account_name_bank_nid'] = ''; echo $this->magic_vars['MsgInfo']['account_name_bank_nid']; ?>��</div>
		<div class="c">
			<input type="text" name="nid"  value="<? if (!isset($this->magic_vars['_A']['account_bank_result']['nid'])) $this->magic_vars['_A']['account_bank_result']['nid'] = ''; echo $this->magic_vars['_A']['account_bank_result']['nid']; ?>"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l"><? if (!isset($this->magic_vars['MsgInfo']['account_name_bank_litpic'])) $this->magic_vars['MsgInfo']['account_name_bank_litpic'] = ''; echo $this->magic_vars['MsgInfo']['account_name_bank_litpic']; ?>��</div>
		<div class="c">
			<input type="text" name="litpic"  value="<? if (!isset($this->magic_vars['_A']['account_bank_result']['litpic'])) $this->magic_vars['_A']['account_bank_result']['litpic'] = ''; echo $this->magic_vars['_A']['account_bank_result']['litpic']; ?>"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l"><? if (!isset($this->magic_vars['MsgInfo']['account_name_bank_cash_money'])) $this->magic_vars['MsgInfo']['account_name_bank_cash_money'] = ''; echo $this->magic_vars['MsgInfo']['account_name_bank_cash_money']; ?>��</div>
		<div class="c">
			<input type="text" name="cash_money"  value="<? if (!isset($this->magic_vars['_A']['account_bank_result']['cash_money'])) $this->magic_vars['_A']['account_bank_result']['cash_money'] = ''; echo $this->magic_vars['_A']['account_bank_result']['cash_money']; ?>"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l"><? if (!isset($this->magic_vars['MsgInfo']['account_name_bank_reach_day'])) $this->magic_vars['MsgInfo']['account_name_bank_reach_day'] = ''; echo $this->magic_vars['MsgInfo']['account_name_bank_reach_day']; ?>��</div>
		<div class="c">
			<input type="text" name="reach_day"  value="<? if (!isset($this->magic_vars['_A']['account_bank_result']['reach_day'])) $this->magic_vars['_A']['account_bank_result']['reach_day'] = ''; echo $this->magic_vars['_A']['account_bank_result']['reach_day']; ?>"/>
		</div>
	</div>
	
	<div class="module_submit" >
		
		<input type="submit"  name="reset" value="<? if (!isset($this->magic_vars['MsgInfo']['account_name_submit'])) $this->magic_vars['MsgInfo']['account_name_submit'] = ''; echo $this->magic_vars['MsgInfo']['account_name_submit']; ?>" />
	</div>
</form>
</div>
<? endif; ?>
<!--��ӳ�ֵ��¼ ����-->

<!--���ּ�¼�б� ��ʼ-->
<!--��ӳ�ֵ��¼ ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "recharge_new"): ?>

<div class="module_add">
	
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data" >
	<div class="module_title"><strong>��ӳ�ֵ</strong></div>

	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<input type="text" name="username" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ͣ�</div>
		<div class="c">
			���³�ֵ<input type="hidden" name="type" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">��</div>
		<div class="c">
			<input type="text" name="money" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ע��</div>
		<div class="c">
			<input type="text" name="remark" />
		</div>
	</div>
	
	<div class="module_submit" >
		
		<input type="submit"  name="reset" value="ȷ�ϳ�ֵ" />
	</div>
</form>
</div>

<!--��ӳ�ֵ��¼ ����-->




<!--��ӳ�ֵ��¼ ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "deduct"): ?>

<div class="module_add">
	
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data" >
	<div class="module_title"><strong>���ÿ۳�</strong></div>

	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<input type="text" name="username" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ͣ�</div>
		<div class="c">
			<select name="type">
				<option value="scene_account">�ֳ���֤����</option>
				<option value="vouch_advanced">�����渶�۷�</option>
				<option value="borrow_kouhui">����˷���ۻ�</option>
				<option value="account_other">����</option>
			</select>
		</div>
	</div>
	<div class="module_border">
		<div class="l">��</div>
		<div class="c">
			<input type="text" name="money" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ע��</div>
		<div class="c">
			<input type="text" name="remark" />���磬�ֳ����ÿ۳�200Ԫ
		</div>
	</div>
	<div class="module_border">
		<div class="l">��֤�룺</div>
		<div class="c"><input  class="user_aciton_input"  name="valicode" type="text" size="8" maxlength="4" style=" padding-top:4px; height:16px; width:70px;"/>&nbsp;<img src="/?plugins&q=imgcode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	<div class="module_submit" >
		
		<input type="submit"  name="reset" value="ȷ���۳�" />
	</div>
</form>
</div>

<!--��ӳ�ֵ��¼ ����-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "payment"): ?>
	<? $this->magic_include(array('file' => "account.payment.tpl", 'vars' => array('template_dir' => 'modules/account')));?>
<? endif; ?>
<script>
var url = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type'] = ''; echo $this->magic_vars['_A']['query_type']; ?>';

function sousuo(_url){
	var sou = "";
	if ($("#username")[0]){
		var username = $("#username").val();
		if (username!=""){
			sou += "&username="+username;
		}
	}
	 if ($("#email")[0]){
		var email = $("#email").val();
		if (email!=""){
			sou += "&email="+email;
		}
	}
	if ($("#status")[0]){
		var status = $("#status").val();
		if (status!="" && status!=null){
			sou += "&status="+status;
		}
	}
	var dotime1 = $("#dotime1").val();
	var keywords = $("#keywords").val();
	var username = $("#username").val();
	var dotime2 = $("#dotime2").val();
	var type = $("#type").val();
	if (username!=null){
		 sou += "&username="+username;
	}
	if (keywords!=null){
		 sou += "&keywords="+keywords;
	}
	if (dotime1!=null){
		 sou += "&dotime1="+dotime1;
	}
	if (dotime2!=null){
		 sou += "&dotime2="+dotime2;
	}
	if (type!=null){
		 sou += "&type="+type;
	}
//	if (_url!=""){
//		url = _url;
//		
//	}
	if (sou!=""){
	location.href=url+sou;
	
	}
}

</script>
