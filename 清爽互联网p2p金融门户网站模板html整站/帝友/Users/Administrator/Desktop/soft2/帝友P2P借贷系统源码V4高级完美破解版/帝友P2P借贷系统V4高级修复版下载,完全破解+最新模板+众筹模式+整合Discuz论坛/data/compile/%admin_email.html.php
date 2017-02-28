
<ul class="nav3"> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>" id="c_so"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_name'])) $this->magic_vars['MsgInfo']['admin_email_name'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_name']; ?></a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/log"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_log_name'])) $this->magic_vars['MsgInfo']['admin_email_log_name'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_log_name']; ?></a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/active" ><? if (!isset($this->magic_vars['MsgInfo']['admin_email_active_name'])) $this->magic_vars['MsgInfo']['admin_email_active_name'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_active_name']; ?></a></li>
</ul> 

<div class="module_add">
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "log"): ?>

	<div class="module_title"><strong><? if (!isset($this->magic_vars['MsgInfo']['admin_email_log_name'])) $this->magic_vars['MsgInfo']['admin_email_log_name'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_log_name']; ?></strong></div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_name_id'])) $this->magic_vars['MsgInfo']['admin_email_name_id'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_name_id']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_name_username'])) $this->magic_vars['MsgInfo']['admin_email_name_username'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_name_username']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_name_email'])) $this->magic_vars['MsgInfo']['admin_email_name_email'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_name_email']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_name_sendemail'])) $this->magic_vars['MsgInfo']['admin_email_name_sendemail'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_name_sendemail']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_name_title'])) $this->magic_vars['MsgInfo']['admin_email_name_title'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_name_title']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_name_status'])) $this->magic_vars['MsgInfo']['admin_email_name_status'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_name_status']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_name_msg'])) $this->magic_vars['MsgInfo']['admin_email_name_msg'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_name_msg']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_name_addtime'])) $this->magic_vars['MsgInfo']['admin_email_name_addtime'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_name_addtime']; ?></td>
		<th width="" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_name_addip'])) $this->magic_vars['MsgInfo']['admin_email_name_addip'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_name_addip']; ?></th>
	</tr>
	<? $this->magic_vars['query_type']='GetEmailLogList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','email'=>isset($_REQUEST['email'])?$_REQUEST['email']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['magic_result'] = usersClass::GetEmailLogList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
		<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = '';$_tmp = $this->magic_vars['item']['username'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email'] = ''; echo $this->magic_vars['item']['email']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['send_email'])) $this->magic_vars['item']['send_email'] = ''; echo $this->magic_vars['item']['send_email']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['title'])) $this->magic_vars['item']['title'] = ''; echo $this->magic_vars['item']['title']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?><? if (!isset($this->magic_vars['MsgInfo']['admin_name_wait'])) $this->magic_vars['MsgInfo']['admin_name_wait'] = ''; echo $this->magic_vars['MsgInfo']['admin_name_wait']; ?><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?><font color="#009900"><? if (!isset($this->magic_vars['MsgInfo']['admin_name_success'])) $this->magic_vars['MsgInfo']['admin_name_success'] = ''; echo $this->magic_vars['MsgInfo']['admin_name_success']; ?></font><? else: ?><font color="#FF0000"><? if (!isset($this->magic_vars['MsgInfo']['admin_name_false'])) $this->magic_vars['MsgInfo']['admin_name_false'] = ''; echo $this->magic_vars['MsgInfo']['admin_name_false']; ?></font><? endif; ?></td>
		<td class="main_td1" align="center" >	<a href="javascript:void(0)" onclick='tipsWindown("邮箱信息查看","url:get?<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/log_id&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,230,"true","","true","text");'>查看</a></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['addip'])) $this->magic_vars['item']['addip'] = ''; echo $this->magic_vars['item']['addip']; ?></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<? unset($_magic_vars); ?>
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/log';
	    
	  	function sousuo(){
			var username = $("#username").val();
			var email = $("#email").val();
			location.href=url+"&username="+username+"&email="+email;
		}
	  
	  </script>
	  
			</div>
			<div class="floatr">
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>  <? if (!isset($this->magic_vars['MsgInfo']['users_name_email'])) $this->magic_vars['MsgInfo']['users_name_email'] = ''; echo $this->magic_vars['MsgInfo']['users_name_email']; ?>：<input type="text" name="email" id="email" value="<? if (!isset($_REQUEST['email'])) $_REQUEST['email'] = ''; echo $_REQUEST['email']; ?>"/>   <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
</table>
<!--邮箱记录 结束-->


<!--激活记录 开始-->

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "active"): ?>

	<div class="module_title"><strong><? if (!isset($this->magic_vars['MsgInfo']['admin_email_active_name'])) $this->magic_vars['MsgInfo']['admin_email_active_name'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_active_name']; ?></strong></div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_name_id'])) $this->magic_vars['MsgInfo']['admin_email_name_id'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_name_id']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_name_username'])) $this->magic_vars['MsgInfo']['admin_email_name_username'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_name_username']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_name_activeemail'])) $this->magic_vars['MsgInfo']['admin_email_name_activeemail'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_name_activeemail']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_name_status'])) $this->magic_vars['MsgInfo']['admin_email_name_status'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_name_status']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_name_addtime'])) $this->magic_vars['MsgInfo']['admin_email_name_addtime'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_name_addtime']; ?></td>
		<th width="" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_name_addip'])) $this->magic_vars['MsgInfo']['admin_email_name_addip'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_name_addip']; ?></th>
	</tr>
	<? $this->magic_vars['query_type']='GetEmailActiveList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','email'=>isset($_REQUEST['email'])?$_REQUEST['email']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['magic_result'] = usersClass::GetEmailActiveList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
		<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = '';$_tmp = $this->magic_vars['item']['username'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email'] = ''; echo $this->magic_vars['item']['email']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?><? if (!isset($this->magic_vars['MsgInfo']['admin_name_wait'])) $this->magic_vars['MsgInfo']['admin_name_wait'] = ''; echo $this->magic_vars['MsgInfo']['admin_name_wait']; ?><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?><font color="#009900"><? if (!isset($this->magic_vars['MsgInfo']['admin_name_success'])) $this->magic_vars['MsgInfo']['admin_name_success'] = ''; echo $this->magic_vars['MsgInfo']['admin_name_success']; ?></font><? else: ?><font color="#FF0000"><? if (!isset($this->magic_vars['MsgInfo']['admin_name_false'])) $this->magic_vars['MsgInfo']['admin_name_false'] = ''; echo $this->magic_vars['MsgInfo']['admin_name_false']; ?></font><? endif; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['addip'])) $this->magic_vars['item']['addip'] = ''; echo $this->magic_vars['item']['addip']; ?></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<? unset($_magic_vars); ?>
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/log';
	    
	  	function sousuo(){
			var username = $("#username").val();
			var email = $("#email").val();
			location.href=url+"&username="+username+"&email="+email;
		}
	  
	  </script>
	  
			</div>
			<div class="floatr">
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>  <? if (!isset($this->magic_vars['MsgInfo']['users_name_email'])) $this->magic_vars['MsgInfo']['users_name_email'] = ''; echo $this->magic_vars['MsgInfo']['users_name_email']; ?>：<input type="text" name="email" id="email" value="<? if (!isset($_REQUEST['email'])) $_REQUEST['email'] = ''; echo $_REQUEST['email']; ?>"/>   <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
</table>
<!--激活记录 结束-->

<? else: ?>
	<form action="" method="post"  enctype="multipart/form-data" >
	<div class="module_title"><strong><? if (!isset($this->magic_vars['MsgInfo']['admin_email_name'])) $this->magic_vars['MsgInfo']['admin_email_name'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_name']; ?></strong></div>
	
	
	<div class="module_border">
	<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_con_host'])) $this->magic_vars['MsgInfo']['admin_email_con_host'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_con_host']; ?>：</div>
		<div class="c">
			<input type="text" name="con_email_host" value="<? if (!isset($this->magic_vars['_A']['system_result']['con_email_host'])) $this->magic_vars['_A']['system_result']['con_email_host'] = ''; echo $this->magic_vars['_A']['system_result']['con_email_host']; ?>"/>
		</div>
	</div>
	<div class="module_border">
	<div class="d">端口号：</div>
		<div class="c">
			<input type="text" name="con_email_port" value="<? if (!isset($this->magic_vars['_A']['system_result']['con_email_port'])) $this->magic_vars['_A']['system_result']['con_email_port'] = ''; echo $this->magic_vars['_A']['system_result']['con_email_port']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_con_auth'])) $this->magic_vars['MsgInfo']['admin_email_con_auth'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_con_auth']; ?>：</div>
		<div class="c">
			<? 
		$_value = explode(",","1|是,0|否");
		$display = "";$_che = $this->magic_vars['_A']['system_result']['con_email_auth'];
		
		foreach ($_value as $k => $v){
			$_check = "";
			$_v = explode("|",$v);
			if (!IsExiest($_v[1])) $_v[1] = $_v[0];
			if ($_che==$_v[0]){
				$_check = " checked='checked'";
			}
			if ($k>0){
				$display .= '<input type="radio" value="'.$_v[0].'"  name="con_email_auth" '.$_check.'/> '.$_v[1];
			}else{
				$k0 = array($_v[0],$_v[1]);
			}
		}
		if ($_che=="" || in_array($_che,$k0)){
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_email_auth" checked="checked"/> '.$k0[1].$display;
		}else{
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_email_auth" /> '.$k0[1].$display;
		}
		echo $display;
		?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="d">是否启用立即发送：</div>
		<div class="c">
			<? 
		$_value = explode(",","1|是,0|否");
		$display = "";$_che = $this->magic_vars['_A']['system_result']['con_email_now'];
		
		foreach ($_value as $k => $v){
			$_check = "";
			$_v = explode("|",$v);
			if (!IsExiest($_v[1])) $_v[1] = $_v[0];
			if ($_che==$_v[0]){
				$_check = " checked='checked'";
			}
			if ($k>0){
				$display .= '<input type="radio" value="'.$_v[0].'"  name="con_email_now" '.$_check.'/> '.$_v[1];
			}else{
				$k0 = array($_v[0],$_v[1]);
			}
		}
		if ($_che=="" || in_array($_che,$k0)){
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_email_now" checked="checked"/> '.$k0[1].$display;
		}else{
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_email_now" /> '.$k0[1].$display;
		}
		echo $display;
		?>(启用的话将会很占服务器)
		</div>
	</div>
	
	<div class="module_border">
	<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_con_url'])) $this->magic_vars['MsgInfo']['admin_email_con_url'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_con_url']; ?>：</div>
		<div class="c">
			<input type="text" name="con_email_url" value="<? if (!isset($this->magic_vars['_A']['system_result']['con_email_url'])) $this->magic_vars['_A']['system_result']['con_email_url'] = ''; echo $this->magic_vars['_A']['system_result']['con_email_url']; ?>"/>
		</div>
	</div>
	
	
	<div class="module_border">
	<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_con_password'])) $this->magic_vars['MsgInfo']['admin_email_con_password'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_con_password']; ?>：</div>
		<div class="c">
			<input type="password" name="con_email_password" value="<? if (!isset($this->magic_vars['_A']['system_result']['con_email_password'])) $this->magic_vars['_A']['system_result']['con_email_password'] = ''; echo $this->magic_vars['_A']['system_result']['con_email_password']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
	<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_con_from'])) $this->magic_vars['MsgInfo']['admin_email_con_from'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_con_from']; ?>：</div>
		<div class="c">
			<input type="text" name="con_email_from" value="<? if (!isset($this->magic_vars['_A']['system_result']['con_email_from'])) $this->magic_vars['_A']['system_result']['con_email_from'] = ''; echo $this->magic_vars['_A']['system_result']['con_email_from']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
	<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_con_from_name'])) $this->magic_vars['MsgInfo']['admin_email_con_from_name'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_con_from_name']; ?>：</div>
		<div class="c">
			<input type="text" name="con_email_from_name" value="<? if (!isset($this->magic_vars['_A']['system_result']['con_email_from_name'])) $this->magic_vars['_A']['system_result']['con_email_from_name'] = ''; echo $this->magic_vars['_A']['system_result']['con_email_from_name']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
	<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_email_con_check'])) $this->magic_vars['MsgInfo']['admin_email_con_check'] = ''; echo $this->magic_vars['MsgInfo']['admin_email_con_check']; ?>：</div>
		<div class="c">
			<? 
		$_value = explode(",","0|否,1|是");
		$display = "";$_che = "";
		
		foreach ($_value as $k => $v){
			$_check = "";
			$_v = explode("|",$v);
			if (!IsExiest($_v[1])) $_v[1] = $_v[0];
			if ($_che==$_v[0]){
				$_check = " checked='checked'";
			}
			if ($k>0){
				$display .= '<input type="radio" value="'.$_v[0].'"  name="con_email_check" '.$_check.'/> '.$_v[1];
			}else{
				$k0 = array($_v[0],$_v[1]);
			}
		}
		if ($_che=="" || in_array($_che,$k0)){
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_email_check" checked="checked"/> '.$k0[1].$display;
		}else{
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_email_check" /> '.$k0[1].$display;
		}
		echo $display;
		?>
		</div>
	</div>
	
	<div class="module_submit"><input type="submit" value="<? if (!isset($this->magic_vars['MsgInfo']['admin_name_submit'])) $this->magic_vars['MsgInfo']['admin_name_submit'] = ''; echo $this->magic_vars['MsgInfo']['admin_name_submit']; ?>"  /></div>
		</form>
	</div>
</div>
<? endif; ?>

		 