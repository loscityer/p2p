
<!--管理记录列表 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "admin_log"): ?>
<div class="module_add">
	<div class="module_title"><strong>管理员记录</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_id'])) $this->magic_vars['MsgInfo']['users_name_id'] = ''; echo $this->magic_vars['MsgInfo']['users_name_id']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_operatinger'])) $this->magic_vars['MsgInfo']['users_name_operatinger'] = ''; echo $this->magic_vars['MsgInfo']['users_name_operatinger']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_code'])) $this->magic_vars['MsgInfo']['users_name_code'] = ''; echo $this->magic_vars['MsgInfo']['users_name_code']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_type'])) $this->magic_vars['MsgInfo']['users_name_type'] = ''; echo $this->magic_vars['MsgInfo']['users_name_type']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_operating'])) $this->magic_vars['MsgInfo']['users_name_operating'] = ''; echo $this->magic_vars['MsgInfo']['users_name_operating']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_operating_id'])) $this->magic_vars['MsgInfo']['users_name_operating_id'] = ''; echo $this->magic_vars['MsgInfo']['users_name_operating_id']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_result'])) $this->magic_vars['MsgInfo']['users_name_result'] = ''; echo $this->magic_vars['MsgInfo']['users_name_result']; ?></td>
		<th width="" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_content'])) $this->magic_vars['MsgInfo']['users_name_content'] = ''; echo $this->magic_vars['MsgInfo']['users_name_content']; ?></th>
		<th width="" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_add_time'])) $this->magic_vars['MsgInfo']['users_name_add_time'] = ''; echo $this->magic_vars['MsgInfo']['users_name_add_time']; ?></th>
		<th width="" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['users_name_add_ip'])) $this->magic_vars['MsgInfo']['users_name_add_ip'] = ''; echo $this->magic_vars['MsgInfo']['users_name_add_ip']; ?></th>
	</tr>
	<? $this->magic_vars['query_type']='GetAdminlogList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','email'=>isset($_REQUEST['email'])?$_REQUEST['email']:'','epage'=>'12','page'=>isset($_REQUEST['page'])?$_REQUEST['page']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['magic_result'] = usersClass::GetAdminlogList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
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
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>  <? if (!isset($this->magic_vars['MsgInfo']['users_name_email'])) $this->magic_vars['MsgInfo']['users_name_email'] = ''; echo $this->magic_vars['MsgInfo']['users_name_email']; ?>：<input type="text" name="email" id="email" value="<? if (!isset($_REQUEST['email'])) $_REQUEST['email'] = ''; echo $_REQUEST['email']; ?>"/>   <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
</table>
<!--管理记录列表 结束-->


<!--管理管理 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="admin"): ?>

<div class="module_add">
	<div class="module_title"><strong>管理员信息</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<? if (!isset($_REQUEST['user_id'])) $_REQUEST['user_id']=''; ;if (  $_REQUEST['user_id']==""): ?>
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong>查找用户</strong>(将按顺序进行搜索)<input type="hidden" name="type" value="user_id" /></div>
	
	
	<div class="module_border">
		<div class="l">用户名：</div>
		<div class="c">
			<input type="text" name="username"  value="<? if (!isset($this->magic_vars['_A']['user_result']['username'])) $this->magic_vars['_A']['user_result']['username'] = ''; echo $this->magic_vars['_A']['user_result']['username']; ?>"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">用户ID：</div>
		<div class="c">
			<input type="text" name="user_id" />
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">邮箱：</div>
		<div class="c">
			<input type="text" name="email" />
		</div>
	</div>
	
	<div class="module_submit"><input type="submit" value="确认提交" class="submit_button" /></div>
		</form>
	</div>
	<? else: ?>
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&user_id=<? if (!isset($this->magic_vars['maigc']['request']['user_id'])) $this->magic_vars['maigc']['request']['user_id'] = ''; echo $this->magic_vars['maigc']['request']['user_id']; ?>" method="post">
	<div class="module_title"><strong>管理员设置</strong></div>
	
	
	<div class="module_border">
		<div class="l">用户名：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['users_result']['username'])) $this->magic_vars['_A']['users_result']['username'] = ''; echo $this->magic_vars['_A']['users_result']['username']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">用户别名：</div>
		<div class="c">
			<input type="text" name="adminname" value="<? if (!isset($this->magic_vars['_A']['users_admin_result']['adminname'])) $this->magic_vars['_A']['users_admin_result']['adminname'] = ''; echo $this->magic_vars['_A']['users_admin_result']['adminname']; ?>" />
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">管理密码：</div>
		<div class="c">
			<input type="password" name="password" value="" />
		</div>
	</div>
	
	
	
	<div class="module_border">
		<div class="l">管理QQ：</div>
		<div class="c">
			<input type="text" name="qq" value="<? if (!isset($this->magic_vars['_A']['users_admin_result']['qq'])) $this->magic_vars['_A']['users_admin_result']['qq'] = ''; echo $this->magic_vars['_A']['users_admin_result']['qq']; ?>" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">管理电话：</div>
		<div class="c">
			<input type="text" name="phone" value="<? if (!isset($this->magic_vars['_A']['users_admin_result']['phone'])) $this->magic_vars['_A']['users_admin_result']['phone'] = ''; echo $this->magic_vars['_A']['users_admin_result']['phone']; ?>" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">所在地：</div>
		<div class="c">
			<script src="/?plugins&q=areas&name=&type=p,c&area=<? echo $this->magic_vars['_A']['users_admin_result']['city']; ?>" ></script>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">类型：</div>
		<div class="c">
			<? $sql = 'select name,id from `{users_admin_type}`';$result = $this->magic_vars['_G']['mysql']->db_fetch_arrays($sql); echo "<select name='type_id' id=type_id  style=''>"; if (IsExiest($result)!=false): foreach ($result as $key => $val): if ($this->magic_vars['_A']['users_admin_result']['type_id']==$val['id'] ) { echo "<option value='{$val['id']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['id']}' >{$val['name']}</option>";} endforeach;endif; echo "</select>";?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">管理员备注：</div>
		<div class="c">
			<textarea name="remark" cols="30" rows="4"><? if (!isset($this->magic_vars['_A']['users_admin_result']['remark'])) $this->magic_vars['_A']['users_admin_result']['remark'] = ''; echo $this->magic_vars['_A']['users_admin_result']['remark']; ?></textarea>
		</div>
	</div>
	
	<div class="module_submit"><input type="hidden" name="action" value="update" /><input type="hidden" name="user_id" value="<? if (!isset($_REQUEST['user_id'])) $_REQUEST['user_id'] = ''; echo $_REQUEST['user_id']; ?>" /><input type="submit" value="确认提交" class="submit_button" /></div>
		</form>
	</div>
	
	<? endif; ?>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	
	<div class="module_add">
		<div class="module_title"><strong>管理员列表</strong></div>
	</div>
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
		  <form action="" method="post">
			<tr >
				<td class="main_td">ID</td>
				<td class="main_td">用户名</td>
				<td class="main_td">管理别名</td>
				<td class="main_td">管理类型</td>
				<td class="main_td">操作</td>
			</tr>
			<? $this->magic_vars['query_type']='GetUsersAdminList';$data = array('var'=>'loop','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['magic_result'] = usersClass::GetUsersAdminList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
				<td ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
				<td ><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
				<td ><? if (!isset($this->magic_vars['item']['adminname'])) $this->magic_vars['item']['adminname'] = ''; echo $this->magic_vars['item']['adminname']; ?></td>
				<td ><? if (!isset($this->magic_vars['item']['type_name'])) $this->magic_vars['item']['type_name'] = ''; echo $this->magic_vars['item']['type_name']; ?></td>
				<td ><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&action=edit&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>">修改</a> | <a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&action=del&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>">删除</a> </td>
			</tr>
			<? endforeach; endif; unset($_from); ?>
			
			<tr>
				<td colspan="9" class="page">
				<? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?> 
				</td>
			</tr>
			<? unset($_magic_vars); ?>
		</form>	
	</table>
</div>



<!--管理类型列表 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="admin_type"): ?>
	
	<ul class="nav3"> 
		<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/admin_type" id="c_so">类型列表</a></li> 
		<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/admin_type&action=new" id="c_so">添加管理员类型</a></li> 
	</ul> 
	
	<? if (!isset($_REQUEST['action'])) $_REQUEST['action']='';if (!isset($_REQUEST['action'])) $_REQUEST['action']=''; ;if (  $_REQUEST['action']=="new" ||  $_REQUEST['action']=="edit"): ?>
	<div class="module_add">
		<div style="margin-top:10px;">
		<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
		<div class="module_title"><strong><? if (!isset($_REQUEST['action'])) $_REQUEST['action']=''; ;if (  $_REQUEST['action']=="edit"): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['admin_type_result']['id'])) $this->magic_vars['_A']['admin_type_result']['id'] = ''; echo $this->magic_vars['_A']['admin_type_result']['id']; ?>" />修改管理员类型 （<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">添加</a>）<? else: ?>添加管理员类型<? endif; ?></strong></div>
		
		
		<div class="module_border">
			<div class="l">类型名称：</div>
			<div class="c">
				<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['admin_type_result']['name'])) $this->magic_vars['_A']['admin_type_result']['name'] = ''; echo $this->magic_vars['_A']['admin_type_result']['name']; ?>"/>
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">标识名：</div>
			<div class="c">
				<input type="text" name="nid" value="<? if (!isset($this->magic_vars['_A']['admin_type_result']['nid'])) $this->magic_vars['_A']['admin_type_result']['nid'] = ''; echo $this->magic_vars['_A']['admin_type_result']['nid']; ?>"/>
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">描述：</div>
			<div class="c">
				<textarea name="remark" rows="5" cols="30"><? if (!isset($this->magic_vars['_A']['admin_type_result']['remark'])) $this->magic_vars['_A']['admin_type_result']['remark'] = ''; echo $this->magic_vars['_A']['admin_type_result']['remark']; ?></textarea>
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">排序：</div>
			<div class="c">
				<input type="text" name="order" value="<? if (!isset($this->magic_vars['_A']['admin_type_result']['order'])) $this->magic_vars['_A']['admin_type_result']['order'] = '';$_tmp = $this->magic_vars['_A']['admin_type_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" size="8"/>
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">权限:</div>
			<div class="c" style="overflow:hidden">
					<? $this->magic_vars['query_type']='GetModulePurview';$data = array('var'=>'item');$default = '';  require_once(ROOT_PATH.'modules/admin/admin.class.php');$this->magic_vars['magic_result'] = adminClass::GetModulePurview($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
						<div style="height:auto;  overflow:hidden">
						 <div style="; border-top:1px solid #CCCCCC; height:28px; padding-top:5px"><strong><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></strong>
						 <input type="checkbox" value="<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>" name="module[]"  <? if (!isset($_REQUEST['action'])) $_REQUEST['action']=''; ;if (  $_REQUEST['action'] == "edit"): ?><? if (!isset($this->magic_vars['_A']['admin_type_result']['module'])) $this->magic_vars['_A']['admin_type_result']['module'] = '';$_tmp = $this->magic_vars['_A']['admin_type_result']['module']; if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = '';
$_tmp = $this->magic_modifier("checked",$_tmp,$this->magic_vars['key']);echo $_tmp;unset($_tmp); ?><? endif; ?> /></div>
						 <div style="border-top:1px dashed #CCCCCC;  padding-top:5px">
							<?  if(!isset($this->magic_vars['item']['result']) || $this->magic_vars['item']['result']=='') $this->magic_vars['item']['result'] = array();  $_from = $this->magic_vars['item']['result']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['_key'] =>  $this->magic_vars['_item']):
?>
							<div style="float:left; width:140px; height:28px;padding-top:3px" title="<? if (!isset($this->magic_vars['__key'])) $this->magic_vars['__key'] = ''; echo $this->magic_vars['__key']; ?>"><input type="checkbox" value="<? if (!isset($this->magic_vars['_key'])) $this->magic_vars['_key'] = ''; echo $this->magic_vars['_key']; ?>" name="purview[]" id="<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>" <? if (!isset($_REQUEST['action'])) $_REQUEST['action']=''; ;if (  $_REQUEST['action'] == "edit"): ?><? if (!isset($this->magic_vars['_A']['admin_type_result']['purview'])) $this->magic_vars['_A']['admin_type_result']['purview'] = '';$_tmp = $this->magic_vars['_A']['admin_type_result']['purview']; if (!isset($this->magic_vars['_key'])) $this->magic_vars['_key'] = '';
$_tmp = $this->magic_modifier("checked",$_tmp,$this->magic_vars['_key']);echo $_tmp;unset($_tmp); ?><? endif; ?>  /> <? if (!isset($this->magic_vars['_item']['name'])) $this->magic_vars['_item']['name'] = ''; echo $this->magic_vars['_item']['name']; ?>
							</div>
							<? endforeach; endif; unset($_from); ?>
						</div>
						</div>
					<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
				</div>
		</div>
		
		
		<div class="module_submit"><input type="submit" value="确认提交" class="submit_button" /></div>
			</form>
		</div>
		</div>
	</div>

	<? else: ?>
	<div class="module_add">
		<div class="module_title"><strong>管理员类型列表</strong></div>
	</div>
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="" class="main_td">名称</td>
			<td width="" class="main_td">标识名</td>
			<td width="*" class="main_td">添加时间</td>
			<td width="*" class="main_td">排序</td>
			<td width="*" class="main_td">操作</td>
		</tr>
		<? $this->magic_vars['query_type']='GetAdminTypeList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['magic_result'] = usersClass::GetAdminTypeList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
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
			<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']; ?></td>
			<td class="main_td1" align="center"><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&action=edit&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">修改</a>/<a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&action=del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		
		<tr align="center">
			<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
		</tr>
		<? unset($_magic_vars); ?>
	</table>
	<? endif; ?>
	<!--添加管理类型 结束-->
	
	
<? endif; ?>
