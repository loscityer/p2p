<!--�û��б� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "list"): ?>

<ul class="nav3"> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" id="c_so"><? if (!isset($this->magic_vars['MsgInfo']['users_name_order_default'])) $this->magic_vars['MsgInfo']['users_name_order_default'] = ''; echo $this->magic_vars['MsgInfo']['users_name_order_default']; ?></a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&order=last_time"><? if (!isset($this->magic_vars['MsgInfo']['users_name_order_last_time'])) $this->magic_vars['MsgInfo']['users_name_order_last_time'] = ''; echo $this->magic_vars['MsgInfo']['users_name_order_last_time']; ?></a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&order=reg_time" ><? if (!isset($this->magic_vars['MsgInfo']['users_name_order_reg_time'])) $this->magic_vars['MsgInfo']['users_name_order_reg_time'] = ''; echo $this->magic_vars['MsgInfo']['users_name_order_reg_time']; ?></a></li>
</ul> 
<div class="module_add">
	<div class="module_title"><strong>�û��б�</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_id'])) $this->magic_vars['MsgInfo']['users_name_id'] = ''; echo $this->magic_vars['MsgInfo']['users_name_id']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_email'])) $this->magic_vars['MsgInfo']['users_name_email'] = ''; echo $this->magic_vars['MsgInfo']['users_name_email']; ?></td>
		<td width="*" class="main_td" nowrap="nowrap"><? if (!isset($this->magic_vars['MsgInfo']['users_name_logintime'])) $this->magic_vars['MsgInfo']['users_name_logintime'] = ''; echo $this->magic_vars['MsgInfo']['users_name_logintime']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_reg_time'])) $this->magic_vars['MsgInfo']['users_name_reg_time'] = ''; echo $this->magic_vars['MsgInfo']['users_name_reg_time']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_reg_ip'])) $this->magic_vars['MsgInfo']['users_name_reg_ip'] = ''; echo $this->magic_vars['MsgInfo']['users_name_reg_ip']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_up_time'])) $this->magic_vars['MsgInfo']['users_name_up_time'] = ''; echo $this->magic_vars['MsgInfo']['users_name_up_time']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_up_ip'])) $this->magic_vars['MsgInfo']['users_name_up_ip'] = ''; echo $this->magic_vars['MsgInfo']['users_name_up_ip']; ?></td>
		<th width="" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_last_time'])) $this->magic_vars['MsgInfo']['users_name_last_time'] = ''; echo $this->magic_vars['MsgInfo']['users_name_last_time']; ?></th>
		<th width="" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_last_ip'])) $this->magic_vars['MsgInfo']['users_name_last_ip'] = ''; echo $this->magic_vars['MsgInfo']['users_name_last_ip']; ?></th>
		<th width="" class="main_td" nowrap="nowrap">�޸�</th>
	</tr>
	<? $this->magic_vars['query_type']='GetUsersList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','email'=>isset($_REQUEST['email'])?$_REQUEST['email']:'','order'=>isset($_REQUEST['order'])?$_REQUEST['order']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['magic_result'] = usersClass::GetUsersList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
		<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email'] = ''; echo $this->magic_vars['item']['email']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['logintime'])) $this->magic_vars['item']['logintime'] = '';$_tmp = $this->magic_vars['item']['logintime'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['reg_time'])) $this->magic_vars['item']['reg_time'] = '';$_tmp = $this->magic_vars['item']['reg_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['reg_ip'])) $this->magic_vars['item']['reg_ip'] = ''; echo $this->magic_vars['item']['reg_ip']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['up_time'])) $this->magic_vars['item']['up_time'] = '';$_tmp = $this->magic_vars['item']['up_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['up_ip'])) $this->magic_vars['item']['up_ip'] = ''; echo $this->magic_vars['item']['up_ip']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['last_time'])) $this->magic_vars['item']['last_time'] = '';$_tmp = $this->magic_vars['item']['last_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['last_ip'])) $this->magic_vars['item']['last_ip'] = ''; echo $this->magic_vars['item']['last_ip']; ?></td>
		<td class="main_td1" align="center" ><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/edit&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>">�޸�</a></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>';
	    
	  	function sousuo(){
			var username = $("#username").val();
			var email = $("#email").val();
			location.href=url+"&username="+username+"&email="+email;
		}
	  
	  </script>
	  
			</div>
			<div class="floatr">
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>��<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>  <? if (!isset($this->magic_vars['MsgInfo']['users_name_email'])) $this->magic_vars['MsgInfo']['users_name_email'] = ''; echo $this->magic_vars['MsgInfo']['users_name_email']; ?>��<input type="text" name="email" id="email" value="<? if (!isset($_REQUEST['email'])) $_REQUEST['email'] = ''; echo $_REQUEST['email']; ?>"/>   <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	
	<? unset($_magic_vars); ?>
</table>
<!--�û��б� ����-->

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "info_edit"): ?>
<div class="module_add">
	
	<form  name="form_user" method="post" action="" >
	<div class="module_title"><strong>�޸��û���Ϣ</strong></div>
	
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['_user_result']['username'])) $this->magic_vars['_A']['_user_result']['username'] = ''; echo $this->magic_vars['_A']['_user_result']['username']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">�ǳƣ�</div>
		<div class="c">
		<input name="niname" type="text"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['_user_result']['niname'])) $this->magic_vars['_A']['_user_result']['niname'] = ''; echo $this->magic_vars['_A']['_user_result']['niname']; ?>" /> <font color="#FF0000">*</font>
		</div>
	</div>
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
		<select name="status">
			<option value="0" <? if (!isset($this->magic_vars['_A']['_user_result']['status'])) $this->magic_vars['_A']['_user_result']['status']=''; ;if (  $this->magic_vars['_A']['_user_result']['status']=="0"): ?> selected="selected"<? endif; ?>>����</option>
			<option value="1" <? if (!isset($this->magic_vars['_A']['_user_result']['status'])) $this->magic_vars['_A']['_user_result']['status']=''; ;if (  $this->magic_vars['_A']['_user_result']['status']=="1"): ?> selected="selected"<? endif; ?>>����</option>
			<option value="2" <? if (!isset($this->magic_vars['_A']['_user_result']['status'])) $this->magic_vars['_A']['_user_result']['status']=''; ;if (  $this->magic_vars['_A']['_user_result']['status']=="2"): ?> selected="selected"<? endif; ?>>�ر�</option>
		</select>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���գ�</div>
		<div class="c">
		<input name="birthday" type="text"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['_user_result']['birthday'])) $this->magic_vars['_A']['_user_result']['birthday'] = ''; echo $this->magic_vars['_A']['_user_result']['birthday']; ?>" /> 
		</div>
	</div>
	<div class="module_border">
		<div class="l">�Ա�</div>
		<div class="c">
		<input name="sex" type="radio"  class="input_border" value="��" <? if (!isset($this->magic_vars['_A']['_user_result']['sex'])) $this->magic_vars['_A']['_user_result']['sex']=''; ;if (  $this->magic_vars['_A']['_user_result']['sex']=="��"): ?> checked="checked"<? endif; ?> /> ��
		<input name="sex" type="radio"  class="input_border" value="Ů" <? if (!isset($this->magic_vars['_A']['_user_result']['sex'])) $this->magic_vars['_A']['_user_result']['sex']=''; ;if (  $this->magic_vars['_A']['_user_result']['sex']=="Ů"): ?> checked="checked"<? endif; ?> /> Ů
		</div>
	</div>
	<div class="module_border">
		<div class="l">��ȫ���⣺</div>
		<div class="c">
		<input name="question" type="text"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['_user_result']['question'])) $this->magic_vars['_A']['_user_result']['question'] = ''; echo $this->magic_vars['_A']['_user_result']['question']; ?>" /> 
		</div>
	</div>
	<div class="module_border">
		<div class="l">��ȫ�𰸣�</div>
		<div class="c">
		<input name="answer" type="text"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['_user_result']['answer'])) $this->magic_vars['_A']['_user_result']['answer'] = ''; echo $this->magic_vars['_A']['_user_result']['answer']; ?>" /> 
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ڵأ�</div>
		<div class="c">
		<script src="/?plugins&q=areas&name=&type=p,c,a&area=<? echo $this->magic_vars['_A']['_user_result']['area']; ?>" ></script>
		</div>
	</div>
	
	
	<div class="module_submit border_b" >
	<input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_A']['_user_result']['user_id'])) $this->magic_vars['_A']['_user_result']['user_id'] = ''; echo $this->magic_vars['_A']['_user_result']['user_id']; ?>" />
	<input type="submit" name="submit" value="�ύ" />
	</div>
	</form>
</div>

<!--�û���Ϣ�б� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "info"): ?>
<div class="module_add">
	<div class="module_title"><strong>�û���Ϣ</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="*" class="main_td">�û���</td>
		<td width="*" class="main_td">�û�����</td>
		<td width="*" class="main_td">��������</td>
		<td width="*" class="main_td">ͷ��</td>
		<td width="*" class="main_td">�û�״̬</td>
		<td width="*" class="main_td">������</td>
		<td width="*" class="main_td">�鿴����</td>
	</tr>
	<? $this->magic_vars['query_type']='GetUsersInfoList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','email'=>isset($_REQUEST['email'])?$_REQUEST['email']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['magic_result'] = usersClass::GetUsersInfoList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
		<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['type_name'])) $this->magic_vars['item']['type_name'] = ''; echo $this->magic_vars['item']['type_name']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['admin_name'])) $this->magic_vars['item']['admin_name'] = ''; echo $this->magic_vars['item']['admin_name']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['avatar'])) $this->magic_vars['item']['avatar'] = ''; echo $this->magic_vars['item']['avatar']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?>����<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==0): ?>����<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>����<? endif; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['invite_username'])) $this->magic_vars['item']['invite_username'] = '';$_tmp = $this->magic_vars['item']['invite_username'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center" ><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/viewinfo&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>">�鿴</a> <a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/info_edit&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>">�޸�</a></td>
		
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/info';
	    
	  	function sousuo(){
			var username = $("#username").val();
			var email = $("#email").val();
			location.href=url+"&username="+username+"&email="+email;
		}
	  
	  </script>
	  
			</div>
			<div class="floatr">
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>��<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>  <? if (!isset($this->magic_vars['MsgInfo']['users_name_email'])) $this->magic_vars['MsgInfo']['users_name_email'] = ''; echo $this->magic_vars['MsgInfo']['users_name_email']; ?>��<input type="text" name="email" id="email" value="<? if (!isset($_REQUEST['email'])) $_REQUEST['email'] = ''; echo $_REQUEST['email']; ?>"/>   <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	
	<? unset($_magic_vars); ?>
</table>
<!--�û���Ϣ�б� ����-->

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "rebut"): ?>
<div class="module_add">
	<div class="module_title"><strong>�û���¼</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">���</td>
		<td width="" class="main_td">�ٱ��û�</td>
		<td width="" class="main_td">���ٱ��û�</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">�ٱ�����</td>
		<td width="" class="main_td">�ٱ�ʱ��</td>
	</tr>
	<? $this->magic_vars['query_type']='GetRebutList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','email'=>isset($_REQUEST['email'])?$_REQUEST['email']:'','epage'=>'10');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['magic_result'] = usersClass::GetRebutList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = '';$_tmp = $this->magic_vars['item']['username'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['rebut_username'])) $this->magic_vars['item']['rebut_username'] = ''; echo $this->magic_vars['item']['rebut_username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['type_id'])) $this->magic_vars['item']['type_id'] = '';$_tmp = $this->magic_vars['item']['type_id'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rebut_type");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center" width="200" ><? if (!isset($this->magic_vars['item']['contents'])) $this->magic_vars['item']['contents'] = ''; echo $this->magic_vars['item']['contents']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>';
	    
	  	function sousuo(){
			var username = $("#username").val();
			var email = $("#email").val();
			location.href=url+"&username="+username+"&email="+email;
		}
	  
	  </script>
	  
			</div>
			<div class="floatr">
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>��<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>  <? if (!isset($this->magic_vars['MsgInfo']['users_name_email'])) $this->magic_vars['MsgInfo']['users_name_email'] = ''; echo $this->magic_vars['MsgInfo']['users_name_email']; ?>��<input type="text" name="email" id="email" value="<? if (!isset($_REQUEST['email'])) $_REQUEST['email'] = ''; echo $_REQUEST['email']; ?>"/>   <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
</table>
<!--�û���¼�б� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "log"): ?>
<div class="module_add">
	<div class="module_title"><strong>�û���¼</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_id'])) $this->magic_vars['MsgInfo']['users_name_id'] = ''; echo $this->magic_vars['MsgInfo']['users_name_id']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_code'])) $this->magic_vars['MsgInfo']['users_name_code'] = ''; echo $this->magic_vars['MsgInfo']['users_name_code']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_type'])) $this->magic_vars['MsgInfo']['users_name_type'] = ''; echo $this->magic_vars['MsgInfo']['users_name_type']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_operating'])) $this->magic_vars['MsgInfo']['users_name_operating'] = ''; echo $this->magic_vars['MsgInfo']['users_name_operating']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_operating_id'])) $this->magic_vars['MsgInfo']['users_name_operating_id'] = ''; echo $this->magic_vars['MsgInfo']['users_name_operating_id']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_result'])) $this->magic_vars['MsgInfo']['users_name_result'] = ''; echo $this->magic_vars['MsgInfo']['users_name_result']; ?></td>
		<th width="" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_content'])) $this->magic_vars['MsgInfo']['users_name_content'] = ''; echo $this->magic_vars['MsgInfo']['users_name_content']; ?></th>
		<th width="" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_add_time'])) $this->magic_vars['MsgInfo']['users_name_add_time'] = ''; echo $this->magic_vars['MsgInfo']['users_name_add_time']; ?></th>
		<th width="" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_add_ip'])) $this->magic_vars['MsgInfo']['users_name_add_ip'] = ''; echo $this->magic_vars['MsgInfo']['users_name_add_ip']; ?></th>
	</tr>
	<? $this->magic_vars['query_type']='GetUserslogList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','email'=>isset($_REQUEST['email'])?$_REQUEST['email']:'','epage'=>'12','page'=>isset($_REQUEST['page'])?$_REQUEST['page']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['magic_result'] = usersClass::GetUserslogList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
		<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = '';$_tmp = $this->magic_vars['item']['username'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code'] = ''; echo $this->magic_vars['item']['code']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = ''; echo $this->magic_vars['item']['type']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['operating'])) $this->magic_vars['item']['operating'] = ''; echo $this->magic_vars['item']['operating']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['article_id'])) $this->magic_vars['item']['article_id'] = ''; echo $this->magic_vars['item']['article_id']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['result'])) $this->magic_vars['item']['result']=''; ;if (  $this->magic_vars['item']['result']==1): ?><font color="#006600"><? if (!isset($this->magic_vars['MsgInfo']['users_name_success'])) $this->magic_vars['MsgInfo']['users_name_success'] = ''; echo $this->magic_vars['MsgInfo']['users_name_success']; ?></font><? else: ?><font color="#FF0000"><? if (!isset($this->magic_vars['MsgInfo']['users_name_false'])) $this->magic_vars['MsgInfo']['users_name_false'] = ''; echo $this->magic_vars['MsgInfo']['users_name_false']; ?></font><? endif; ?></td>
		<td class="main_td1" align="center" width="200" ><? if (!isset($this->magic_vars['item']['content'])) $this->magic_vars['item']['content'] = ''; echo $this->magic_vars['item']['content']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['addip'])) $this->magic_vars['item']['addip'] = ''; echo $this->magic_vars['item']['addip']; ?></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>';
	    
	  	function sousuo(){
			var username = $("#username").val();
			var email = $("#email").val();
			location.href=url+"&username="+username+"&email="+email;
		}
	  
	  </script>
	  
			</div>
			<div class="floatr">
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>��<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>  <? if (!isset($this->magic_vars['MsgInfo']['users_name_email'])) $this->magic_vars['MsgInfo']['users_name_email'] = ''; echo $this->magic_vars['MsgInfo']['users_name_email']; ?>��<input type="text" name="email" id="email" value="<? if (!isset($_REQUEST['email'])) $_REQUEST['email'] = ''; echo $_REQUEST['email']; ?>"/>   <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
</table>
<!--�û���¼�б� ����-->

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "new" ||  $this->magic_vars['_A']['query_type'] == "edit"): ?>
<div class="module_add">
	
	<form  name="form_user" method="post" action="" <? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "new"): ?>onsubmit="return check_user();"<? endif; ?> >
	<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?><? if (!isset($this->magic_vars['MsgInfo']['users_name_edit'])) $this->magic_vars['MsgInfo']['users_name_edit'] = ''; echo $this->magic_vars['MsgInfo']['users_name_edit']; ?><? else: ?><? if (!isset($this->magic_vars['MsgInfo']['users_name_new'])) $this->magic_vars['MsgInfo']['users_name_new'] = ''; echo $this->magic_vars['MsgInfo']['users_name_new']; ?><? endif; ?></strong></div>
	
	<div class="module_border">
		<div class="l"><? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>��</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] != "edit"): ?><input name="username" type="text"  class="input_border" /><? else: ?><? if (!isset($this->magic_vars['_A']['users_result']['username'])) $this->magic_vars['_A']['users_result']['username'] = ''; echo $this->magic_vars['_A']['users_result']['username']; ?><input name="username" type="hidden"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['users_result']['username'])) $this->magic_vars['_A']['users_result']['username'] = ''; echo $this->magic_vars['_A']['users_result']['username']; ?>" /><? endif; ?> <font color="#FF0000">*</font>
		</div>
	</div>
	<div class="module_border">
		<div class="l">���䣺</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] != "edit"): ?><input name="email" type="text"  class="input_border" /><? else: ?><? if (!isset($this->magic_vars['_A']['users_result']['email'])) $this->magic_vars['_A']['users_result']['email'] = ''; echo $this->magic_vars['_A']['users_result']['email']; ?><input name="email" type="hidden"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['users_result']['email'])) $this->magic_vars['_A']['users_result']['email'] = ''; echo $this->magic_vars['_A']['users_result']['email']; ?>" /><? endif; ?> <font color="#FF0000">*</font>
		</div>
	</div>
	<div class="module_border">
		<div class="l"><? if (!isset($this->magic_vars['MsgInfo']['users_name_password'])) $this->magic_vars['MsgInfo']['users_name_password'] = ''; echo $this->magic_vars['MsgInfo']['users_name_password']; ?>��</div>
		<div class="c">
			<input name="password" type="password" class="input_border" /><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?> <? if (!isset($this->magic_vars['MsgInfo']['users_name_edit_not_empty'])) $this->magic_vars['MsgInfo']['users_name_edit_not_empty'] = ''; echo $this->magic_vars['MsgInfo']['users_name_edit_not_empty']; ?><? endif; ?> <font color="#FF0000">*</font>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l"><? if (!isset($this->magic_vars['MsgInfo']['users_name_password1'])) $this->magic_vars['MsgInfo']['users_name_password1'] = ''; echo $this->magic_vars['MsgInfo']['users_name_password1']; ?>��</div>
		<div class="c">
			<input name="password1" type="password" class="input_border" /><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?> <? if (!isset($this->magic_vars['MsgInfo']['users_name_edit_not_empty'])) $this->magic_vars['MsgInfo']['users_name_edit_not_empty'] = ''; echo $this->magic_vars['MsgInfo']['users_name_edit_not_empty']; ?><? endif; ?> <font color="#FF0000">*</font>
		</div>
	</div>
	<div class="module_border">
		<div class="l">֧�����룺</div>
		<div class="c">
			<input name="paypassword" type="password" class="input_border" /><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?> <? if (!isset($this->magic_vars['MsgInfo']['users_name_edit_not_empty'])) $this->magic_vars['MsgInfo']['users_name_edit_not_empty'] = ''; echo $this->magic_vars['MsgInfo']['users_name_edit_not_empty']; ?><? endif; ?> <font color="#FF0000">*</font>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">ȷ��֧�����룺</div>
		<div class="c">
			<input name="paypassword1" type="password" class="input_border" /><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?> <? if (!isset($this->magic_vars['MsgInfo']['users_name_edit_not_empty'])) $this->magic_vars['MsgInfo']['users_name_edit_not_empty'] = ''; echo $this->magic_vars['MsgInfo']['users_name_edit_not_empty']; ?><? endif; ?> <font color="#FF0000">*</font>
		</div>
	</div>
	
	
	<div class="module_submit border_b" >
	<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?><input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_A']['users_result']['user_id'])) $this->magic_vars['_A']['users_result']['user_id'] = ''; echo $this->magic_vars['_A']['users_result']['user_id']; ?>" /><? endif; ?>
	<input type="submit" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_submit'])) $this->magic_vars['MsgInfo']['users_name_submit'] = ''; echo $this->magic_vars['MsgInfo']['users_name_submit']; ?>" /><input type="hidden" name="status" value="1" />
	<input type="reset" name="reset" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_reset'])) $this->magic_vars['MsgInfo']['users_name_reset'] = ''; echo $this->magic_vars['MsgInfo']['users_name_reset']; ?>" />
	</div>
	</form>
</div>

<script>
function check_user(){
	 var frm = document.forms['form_user'];
	 var username = frm.elements['username'].value;
	 var password = frm.elements['password'].value;
	  var password1 = frm.elements['password1'].value;
	   var email = frm.elements['email'].value;
	 var errorMsg = '';
	  if (username.length == 0 ) {
		errorMsg += '<? echo $this->magic_vars['MsgInfo']['users_username_empty']; ?> \n';
	  }
	   if (username.length<4) {
		errorMsg += '<? echo $this->magic_vars['MsgInfo']['users_username_long4']; ?> \n';
	  }
	  if (password.length==0) {
		errorMsg += '<? echo $this->magic_vars['MsgInfo']['users_password_empty']; ?> \n';
	  }
	  if (password.length<6) {
		errorMsg += '<? echo $this->magic_vars['MsgInfo']['users_password_long6']; ?> \n';
	  }
	   if (password.length!=password1.length) {
		errorMsg += '<? echo $this->magic_vars['MsgInfo']['users_password_error']; ?> \n';
	  }
	   if (email.length==0) {
		errorMsg += '<? echo $this->magic_vars['MsgInfo']['users_email_empty']; ?> \n';
	  }
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}
</script>





<!--��˼�¼�б� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "examine"): ?>
<div class="module_add">
<div class="module_title"><strong>��˼�¼�б�</strong></div>
</div> 
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">id</td>
		<td width="*" class="main_td">�����</td>
		<td width="*" class="main_td">ģ��</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
		<th width="" class="main_td">���</th>
		<td width="*" class="main_td">��˱�ע</td>
		<td width="*" class="main_td">���ʱ��</td>
	</tr>
	<? $this->magic_vars['query_type']='GetExamineList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','epage'=>'12','page'=>isset($_REQUEST['page'])?$_REQUEST['page']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['magic_result'] = usersClass::GetExamineList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
		<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = '';$_tmp = $this->magic_vars['item']['username'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code'] = ''; echo $this->magic_vars['item']['code']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = ''; echo $this->magic_vars['item']['type']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['article_id'])) $this->magic_vars['item']['article_id'] = ''; echo $this->magic_vars['item']['article_id']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['result'])) $this->magic_vars['item']['result']=''; ;if (  $this->magic_vars['item']['result']==1): ?><font color="#006600"><? if (!isset($this->magic_vars['MsgInfo']['users_name_success'])) $this->magic_vars['MsgInfo']['users_name_success'] = ''; echo $this->magic_vars['MsgInfo']['users_name_success']; ?></font><? else: ?><font color="#FF0000"><? if (!isset($this->magic_vars['MsgInfo']['users_name_false'])) $this->magic_vars['MsgInfo']['users_name_false'] = ''; echo $this->magic_vars['MsgInfo']['users_name_false']; ?></font><? endif; ?>(result=<? if (!isset($this->magic_vars['item']['result'])) $this->magic_vars['item']['result'] = ''; echo $this->magic_vars['item']['result']; ?>)</td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = ''; echo $this->magic_vars['item']['remark']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>';
	    
	  	function sousuo(){
			var username = $("#username").val();
			var email = $("#email").val();
			location.href=url+"&username="+username+"&email="+email;
		}
	  
	  </script>
	  
			</div>
			<div class="floatr">
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>��<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>    <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
</table>
<!--��˼�¼�б� ����-->



<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="type"): ?>

<div class="module_add">
	<div class="module_title"><strong>�û�����</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['users_type_result']['id'])) $this->magic_vars['_A']['users_type_result']['id'] = ''; echo $this->magic_vars['_A']['users_type_result']['id']; ?>" />�޸��û����� ��<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">���</a>��<? else: ?>����û�����<? endif; ?></strong></div>
	
	
	<div class="module_border">
		<div class="l">�������ƣ�</div>
		<div class="c">
			<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['users_type_result']['name'])) $this->magic_vars['_A']['users_type_result']['name'] = ''; echo $this->magic_vars['_A']['users_type_result']['name']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ʶ����</div>
		<div class="c">
			<input type="text" name="nid" value="<? if (!isset($this->magic_vars['_A']['users_type_result']['nid'])) $this->magic_vars['_A']['users_type_result']['nid'] = ''; echo $this->magic_vars['_A']['users_type_result']['nid']; ?>" onkeyup="value=value.replace(/[^a-z0-9_]/g,'')"/>
		</div>
	</div>
	<div class="module_border">
		<div class="l">Ĭ&nbsp;&nbsp;�ϣ�</div>
		<div class="c">
			<? 
		$_value = explode(",","0|��,1|��");
		$display = "";$_che = $this->magic_vars['_A']['users_type_result']['checked'];
		
		foreach ($_value as $k => $v){
			$_check = "";
			$_v = explode("|",$v);
			if (!IsExiest($_v[1])) $_v[1] = $_v[0];
			if ($_che==$_v[0]){
				$_check = " checked='checked'";
			}
			if ($k>0){
				$display .= '<input type="radio" value="'.$_v[0].'"  name="checked" '.$_check.'/> '.$_v[1];
			}else{
				$k0 = array($_v[0],$_v[1]);
			}
		}
		if ($_che=="" || in_array($_che,$k0)){
			$display = '<input type="radio" value="'.$k0[0].'"  name="checked" checked="checked"/> '.$k0[1].$display;
		}else{
			$display = '<input type="radio" value="'.$k0[0].'"  name="checked" /> '.$k0[1].$display;
		}
		echo $display;
		?>��ע���ʱ���û�Ĭ�ϵ����ͣ�
		</div>
	</div>
	<div class="module_border">
		<div class="l">������</div>
		<div class="c">
			<textarea name="remark" rows="5" cols="30"><? if (!isset($this->magic_vars['_A']['users_type_result']['remark'])) $this->magic_vars['_A']['users_type_result']['remark'] = ''; echo $this->magic_vars['_A']['users_type_result']['remark']; ?></textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����</div>
		<div class="c">
			<input type="text" name="order" value="<? if (!isset($this->magic_vars['_A']['users_type_result']['order'])) $this->magic_vars['_A']['users_type_result']['order'] = '';$_tmp = $this->magic_vars['_A']['users_type_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" size="8"/>
		</div>
	</div>
	
	<div class="module_border" >
		<div class="l">��֤�룺</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	
	
	
	<div class="module_title"><strong>�û������б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">��ʶ��</td>
		<td width="*" class="main_td">���ʱ��</td>
		<td width="*" class="main_td">�Ƿ�Ĭ��</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
	</tr>
	<? $this->magic_vars['query_type']='GetUsersTypeList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['magic_result'] = usersClass::GetUsersTypeList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['checked'])) $this->magic_vars['item']['checked']=''; ;if (  $this->magic_vars['item']['checked']==1): ?>��<? else: ?><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&checked=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" title="��ΪĬ��">��</a><? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']; ?></td>
		<td class="main_td1" align="center"><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">ɾ��</a></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>

<!--�˵��б� ����-->
</div>
</div>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="spread"): ?>
<div class="module_add">
	<div class="module_title"><strong>��˲���</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">���</td>
		<td width="" class="main_td">�·�</td>
		<td width="" class="main_td">�������������ܶ��</td>
		<td width="*" class="main_td">����ʵ����˵��ܶ��</td>
		<td width="*" class="main_td">���µ���ɱ���</td>
		<td width="*" class="main_td">����ͨ����˵��ܶ��</td>
		<td width="*" class="main_td">���µ�ͨ������</td>
		<td width="*" class="main_td">���µ�������</td>
		<th width="" class="main_td">�����</th>
		<th width="" class="main_td">�������</th>
	</tr>
	<? $this->magic_vars['query_type']='GetSpreadVerifyCount';$data = array('var'=>'loop','month'=>isset($_REQUEST['month'])?$_REQUEST['month']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetSpreadVerifyCount($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
		<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['Year'])) $this->magic_vars['item']['Year'] = ''; echo $this->magic_vars['item']['Year']; ?>��</td>
			<td class="main_td1" align="center"><? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>�·�</td>
			<td class="main_td1" align="center">��<? if (!isset($this->magic_vars['item']['ApplyTotal'])) $this->magic_vars['item']['ApplyTotal'] = ''; echo $this->magic_vars['item']['ApplyTotal']; ?></td>
			<td class="main_td1" align="center">��<? if (!isset($this->magic_vars['item']['Apply'])) $this->magic_vars['item']['Apply'] = ''; echo $this->magic_vars['item']['Apply']; ?></td>
			<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['VerifyScale'])) $this->magic_vars['item']['VerifyScale'] = ''; echo $this->magic_vars['item']['VerifyScale']; ?>%</td>
			<td class="main_td1" align="center">��<? if (!isset($this->magic_vars['item']['VerifyYes'])) $this->magic_vars['item']['VerifyYes'] = ''; echo $this->magic_vars['item']['VerifyYes']; ?></td>
			<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['VerifyYesScale'])) $this->magic_vars['item']['VerifyYesScale'] = ''; echo $this->magic_vars['item']['VerifyYesScale']; ?>%</td>
			<td class="main_td1" align="center">��<? if (!isset($this->magic_vars['item']['VerifyTask'])) $this->magic_vars['item']['VerifyTask'] = ''; echo $this->magic_vars['item']['VerifyTask']; ?></td>
			<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['VerifyTaskScale'])) $this->magic_vars['item']['VerifyTaskScale'] = ''; echo $this->magic_vars['item']['VerifyTaskScale']; ?>%</td>
			<td class="main_td1" align="center">��<? if (!isset($this->magic_vars['item']['VerifyIncome'])) $this->magic_vars['item']['VerifyIncome'] = ''; echo $this->magic_vars['item']['VerifyIncome']; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
			<td colspan="10" class="action">
			<div class="floatl">
			</div>
			<div class="floatr">
			<script>
			var url = '<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>';
			
			function sousuo(){
				var month = $("#month").val();
				location.href=url+"&month="+month;
			}

			</script>
			
				�·�:<select name="month" id="month">
					
					<?
					for($i=1;$i<=12;$i++){
						echo "<option value='".$i."'>".$i."�·�</option>";
					}
					?>
					
					 </select>
			<input type="submit" value="����" onClick="sousuo()">
			</div>
			</td>
		</tr>
	<? unset($_magic_vars); ?>
</table>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "vip" ||   $this->magic_vars['_A']['query_type'] == "vipview"): ?>

	<? $this->magic_include(array('file' => "users.vip.tpl", 'vars' => array('template_dir' => 'modules/users')));?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "view"): ?>

	<? $this->magic_include(array('file' => "users.view.tpl", 'vars' => array('template_dir' => 'modules/users')));?>	
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "viewinfo" ||   $this->magic_vars['_A']['query_type'] == "viewinfo"): ?>

	<? $this->magic_include(array('file' => "users.viewinfo.tpl", 'vars' => array('template_dir' => 'modules/users')));?>


<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "admin" ||   $this->magic_vars['_A']['query_type'] == "admin_log"  ||   $this->magic_vars['_A']['query_type'] == "admin_type"): ?>

	<? $this->magic_include(array('file' => "users.admin.tpl", 'vars' => array('template_dir' => 'modules/users')));?>

<? endif; ?>