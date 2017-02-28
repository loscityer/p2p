<ul class="nav3"> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>" id="c_so">提醒设置</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type_new">添加类型</a></li> 
</ul> 
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "list"): ?>
<div class="module_add">
	<div class="module_title"><strong>提醒列表</strong></div>

</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type_action" method="post">
	<tr >
		<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['remind_id'])) $this->magic_vars['MsgInfo']['remind_id'] = ''; echo $this->magic_vars['MsgInfo']['remind_id']; ?></td>
		<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['remind_type'])) $this->magic_vars['MsgInfo']['remind_type'] = ''; echo $this->magic_vars['MsgInfo']['remind_type']; ?></td>
		<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['remind_nid'])) $this->magic_vars['MsgInfo']['remind_nid'] = ''; echo $this->magic_vars['MsgInfo']['remind_nid']; ?></td>
		<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['remind_order'])) $this->magic_vars['MsgInfo']['remind_order'] = ''; echo $this->magic_vars['MsgInfo']['remind_order']; ?></td>
		<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['remind_action'])) $this->magic_vars['MsgInfo']['remind_action'] = ''; echo $this->magic_vars['MsgInfo']['remind_action']; ?></td>
	</tr>
	<? $this->magic_vars['query_type']='GetTypeList';$data = array('var'=>'loop');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/remind/remind.class.php');$this->magic_vars['magic_result'] = remindClass::GetTypeList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td  ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td  ><input type="text" value="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>" name="name[]" /></td>
		<td  width="*"><? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?></td>
		<td  ><input type="text" value="<? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = '';$_tmp = $this->magic_vars['item']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" name="order[]" size="5" /><input type="hidden" name="id[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" /></td>
		<td  width="130"><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/new&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>"><? if (!isset($this->magic_vars['MsgInfo']['remind_manager'])) $this->magic_vars['MsgInfo']['remind_manager'] = ''; echo $this->magic_vars['MsgInfo']['remind_manager']; ?></a> / <a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type_edit&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>"><? if (!isset($this->magic_vars['MsgInfo']['remind_update'])) $this->magic_vars['MsgInfo']['remind_update'] = ''; echo $this->magic_vars['MsgInfo']['remind_update']; ?></a> / <a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type_del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'"><? if (!isset($this->magic_vars['MsgInfo']['remind_delete'])) $this->magic_vars['MsgInfo']['remind_delete'] = ''; echo $this->magic_vars['MsgInfo']['remind_delete']; ?></a></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr >
		<td colspan="8"  class="page">
			<? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</td>
	</tr>
	<? unset($_magic_vars); ?>
	<tr >
		<td colspan="8"  class="submit">
			<input type="submit" name="submit" value="<? if (!isset($this->magic_vars['MsgInfo']['remind_submit'])) $this->magic_vars['MsgInfo']['remind_submit'] = ''; echo $this->magic_vars['MsgInfo']['remind_submit']; ?>" />
		</td>
	</tr>
	</form>	
</table>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "new" ||  $this->magic_vars['_A']['query_type'] == "edit"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
<form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/actions" method="post">
	<tr >
		<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['remind_action'])) $this->magic_vars['MsgInfo']['remind_action'] = ''; echo $this->magic_vars['MsgInfo']['remind_action']; ?></td>
		<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['remind_type'])) $this->magic_vars['MsgInfo']['remind_type'] = ''; echo $this->magic_vars['MsgInfo']['remind_type']; ?></td>
		<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['remind_name'])) $this->magic_vars['MsgInfo']['remind_name'] = ''; echo $this->magic_vars['MsgInfo']['remind_name']; ?></td>
		<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['remind_nid'])) $this->magic_vars['MsgInfo']['remind_nid'] = ''; echo $this->magic_vars['MsgInfo']['remind_nid']; ?></td>
		<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['remind_message'])) $this->magic_vars['MsgInfo']['remind_message'] = ''; echo $this->magic_vars['MsgInfo']['remind_message']; ?></td>
		<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['remind_email'])) $this->magic_vars['MsgInfo']['remind_email'] = ''; echo $this->magic_vars['MsgInfo']['remind_email']; ?></td>
		<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['remind_phone'])) $this->magic_vars['MsgInfo']['remind_phone'] = ''; echo $this->magic_vars['MsgInfo']['remind_phone']; ?></td>
		<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['remind_order'])) $this->magic_vars['MsgInfo']['remind_order'] = ''; echo $this->magic_vars['MsgInfo']['remind_order']; ?></td>
		<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['remind_action'])) $this->magic_vars['MsgInfo']['remind_action'] = ''; echo $this->magic_vars['MsgInfo']['remind_action']; ?></td>
	</tr>
	<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'item','limit'=>'all','type_id'=>$_REQUEST['id']);$default = '';  require_once(ROOT_PATH.'modules/remind/remind.class.php');$this->magic_vars['magic_result'] = remindClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td ><? if (!isset($this->magic_vars['_A']['remind_type_result']['name'])) $this->magic_vars['_A']['remind_type_result']['name'] = ''; echo $this->magic_vars['_A']['remind_type_result']['name']; ?></td>
		<td ><input type="text" value="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>" name="name[]" size="15" /></td>
		<td ><input type="text" value="<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>" name="nid[]" size="15" /></td>
		<td >
			<select name="message[]">
				<option value="1" <? if (!isset($this->magic_vars['item']['message'])) $this->magic_vars['item']['message']=''; ;if (  $this->magic_vars['item']['message']==1): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?></option>
				<option value="2" <? if (!isset($this->magic_vars['item']['message'])) $this->magic_vars['item']['message']=''; ;if (  $this->magic_vars['item']['message']==2): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?></option>
				<option value="3" <? if (!isset($this->magic_vars['item']['message'])) $this->magic_vars['item']['message']=''; ;if (  $this->magic_vars['item']['message']==3): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?></option>
				<option value="4" <? if (!isset($this->magic_vars['item']['message'])) $this->magic_vars['item']['message']=''; ;if (  $this->magic_vars['item']['message']==4): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?></option>
			</select>
			<? if (!isset($this->magic_vars['item']['message'])) $this->magic_vars['item']['message']=''; ;if (  $this->magic_vars['item']['message']==1): ?><input type="checkbox" disabled="disabled" checked="checked" /><? if (!isset($this->magic_vars['item']['message'])) $this->magic_vars['item']['message']=''; ;elseif (  $this->magic_vars['item']['message']==2): ?> <input type="checkbox" disabled="disabled"/><? if (!isset($this->magic_vars['item']['message'])) $this->magic_vars['item']['message']=''; ;elseif (  $this->magic_vars['item']['message']==3): ?> <input type="checkbox" checked="checked" /><? if (!isset($this->magic_vars['item']['message'])) $this->magic_vars['item']['message']=''; ;elseif (  $this->magic_vars['item']['message']=4): ?> <input type="checkbox" /><? endif; ?>
		</td>
		<td >
			<select name="email[]">
				<option value="1" <? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email']=''; ;if (  $this->magic_vars['item']['email']==1): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?></option>
				<option value="2" <? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email']=''; ;if (  $this->magic_vars['item']['email']==2): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?></option>
				<option value="3" <? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email']=''; ;if (  $this->magic_vars['item']['email']==3): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?></option>
				<option value="4" <? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email']=''; ;if (  $this->magic_vars['item']['email']==4): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?></option>
			</select>
			<? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email']=''; ;if (  $this->magic_vars['item']['email']==1): ?><input type="checkbox" disabled="disabled" checked="checked" /><? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email']=''; ;elseif (  $this->magic_vars['item']['email']==2): ?> <input type="checkbox" disabled="disabled"/><? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email']=''; ;elseif (  $this->magic_vars['item']['email']==3): ?> <input type="checkbox" checked="checked" /><? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email']=''; ;elseif (  $this->magic_vars['item']['email']=4): ?> <input type="checkbox" /><? endif; ?>
		</td>
		<td >
			<select name="phone[]">
				<option value="1" <? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone']=''; ;if (  $this->magic_vars['item']['phone']==1): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?></option>
				<option value="2" <? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone']=''; ;if (  $this->magic_vars['item']['phone']==2): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?></option>
				<option value="3" <? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone']=''; ;if (  $this->magic_vars['item']['phone']==3): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?></option>
				<option value="4" <? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone']=''; ;if (  $this->magic_vars['item']['phone']==4): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?></option>
			</select>
			<? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone']=''; ;if (  $this->magic_vars['item']['phone']==1): ?><input type="checkbox" disabled="disabled" checked="checked" /><? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone']=''; ;elseif (  $this->magic_vars['item']['phone']==2): ?> <input type="checkbox" disabled="disabled"/><? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone']=''; ;elseif (  $this->magic_vars['item']['phone']==3): ?> <input type="checkbox" checked="checked" /><? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone']=''; ;elseif (  $this->magic_vars['item']['phone']=4): ?> <input type="checkbox" /><? endif; ?>
		</td>
		<td  ><input type="text" value="<? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = '';$_tmp = $this->magic_vars['item']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" name="order[]" size="5" /><input type="hidden" name="id[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" /></td>
		<td ><!--<a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/subnew&id=<? if (!isset($this->magic_vars['item']['type_id'])) $this->magic_vars['item']['type_id'] = ''; echo $this->magic_vars['item']['type_id']; ?>&pid=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">管理</a> /--> <a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'"><? if (!isset($this->magic_vars['MsgInfo']['remind_delete'])) $this->magic_vars['MsgInfo']['remind_delete'] = ''; echo $this->magic_vars['MsgInfo']['remind_delete']; ?></a></td>
	</tr>
	<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
<tr >
	<td colspan="6"  class="submit">
		<input type="submit" name="submit" value="<? if (!isset($this->magic_vars['MsgInfo']['remind_submit'])) $this->magic_vars['MsgInfo']['remind_submit'] = ''; echo $this->magic_vars['MsgInfo']['remind_submit']; ?>" />
	</td>
</tr>
</form>	
</table>

<div class="module_add">
<form name="form1" method="post" action="" onsubmit="return check_form()" >
	<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?><? if (!isset($this->magic_vars['MsgInfo']['remind_edit'])) $this->magic_vars['MsgInfo']['remind_edit'] = ''; echo $this->magic_vars['MsgInfo']['remind_edit']; ?><? else: ?><? if (!isset($this->magic_vars['MsgInfo']['remind_add'])) $this->magic_vars['MsgInfo']['remind_add'] = ''; echo $this->magic_vars['MsgInfo']['remind_add']; ?><? endif; ?> (<? if (!isset($this->magic_vars['_A']['remind_type_result']['name'])) $this->magic_vars['_A']['remind_type_result']['name'] = ''; echo $this->magic_vars['_A']['remind_type_result']['name']; ?>) 分类下的提醒</strong></div>
	
	<div class="module_border">
		<div class="l"><? if (!isset($this->magic_vars['MsgInfo']['remind_type'])) $this->magic_vars['MsgInfo']['remind_type'] = ''; echo $this->magic_vars['MsgInfo']['remind_type']; ?>：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['remind_type_result']['name'])) $this->magic_vars['_A']['remind_type_result']['name'] = ''; echo $this->magic_vars['_A']['remind_type_result']['name']; ?>
		</div>
	</div>

	<div class="module_border">
		<div class="l"><? if (!isset($this->magic_vars['MsgInfo']['remind_name'])) $this->magic_vars['MsgInfo']['remind_name'] = ''; echo $this->magic_vars['MsgInfo']['remind_name']; ?>：</div>
		<div class="c">
			<input type="text" name="name"  value="<? if (!isset($this->magic_vars['_A']['remind_result']['name'])) $this->magic_vars['_A']['remind_result']['name'] = ''; echo $this->magic_vars['_A']['remind_result']['name']; ?>"/> *
		</div>
	</div>
	
	<div class="module_border">
		<div class="l"><? if (!isset($this->magic_vars['MsgInfo']['remind_nid'])) $this->magic_vars['MsgInfo']['remind_nid'] = ''; echo $this->magic_vars['MsgInfo']['remind_nid']; ?>：</div>
		<div class="c">
			<input type="text" name="nid"  value="<? if (!isset($this->magic_vars['_A']['remind_result']['nid'])) $this->magic_vars['_A']['remind_result']['nid'] = ''; echo $this->magic_vars['_A']['remind_result']['nid']; ?>" /> *
		</div>
	</div>
	
	<div class="module_border">
		<div class="l"><? if (!isset($this->magic_vars['MsgInfo']['remind_order'])) $this->magic_vars['MsgInfo']['remind_order'] = ''; echo $this->magic_vars['MsgInfo']['remind_order']; ?>：</div>
		<div class="c">
			<input type="text" name="order"  value="<? if (!isset($this->magic_vars['_A']['remind_result']['order'])) $this->magic_vars['_A']['remind_result']['order'] = '';$_tmp = $this->magic_vars['_A']['remind_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" onkeyup="value=value.replace(/[^0-9]/g,'')"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l"><? if (!isset($this->magic_vars['MsgInfo']['remind_message'])) $this->magic_vars['MsgInfo']['remind_message'] = ''; echo $this->magic_vars['MsgInfo']['remind_message']; ?>：</div>
		<div class="c">
			<select name="message">
				<option value="1"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?></option>
				<option value="2"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?></option>
				<option value="3"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?></option>
				<option value="4"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?></option>
			</select>
			(<? if (!isset($this->magic_vars['MsgInfo']['remind_type'])) $this->magic_vars['MsgInfo']['remind_type'] = ''; echo $this->magic_vars['MsgInfo']['remind_type']; ?>：<input type="checkbox" disabled="disabled" checked="checked" /><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?> <input type="checkbox" disabled="disabled"/><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?> <input type="checkbox" checked="checked" /><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?> <input type="checkbox" /><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?>）
		</div>
	</div>
	
	
	
	<div class="module_border">
		<div class="l"><? if (!isset($this->magic_vars['MsgInfo']['remind_email'])) $this->magic_vars['MsgInfo']['remind_email'] = ''; echo $this->magic_vars['MsgInfo']['remind_email']; ?>：</div>
		<div class="c">
			<select name="email">
				<option value="1"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?></option>
				<option value="2"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?></option>
				<option value="3"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?></option>
				<option value="4"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?></option>
			</select>
		</div>
	</div>
	
	
	
	<div class="module_border">
		<div class="l"><? if (!isset($this->magic_vars['MsgInfo']['remind_phone'])) $this->magic_vars['MsgInfo']['remind_phone'] = ''; echo $this->magic_vars['MsgInfo']['remind_phone']; ?>：</div>
		<div class="c">
			<select name="phone">
				<option value="1"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?></option>
				<option value="2"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?></option>
				<option value="3"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?></option>
				<option value="4"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?></option>
			</select>
		</div>
	</div>
	
	<div class="module_submit" >
		<input type="hidden" name="type_id" value="<? if (!isset($_REQUEST['id'])) $_REQUEST['id'] = ''; echo $_REQUEST['id']; ?>" />
		<input type="submit"  name="submit" value="<? if (!isset($this->magic_vars['MsgInfo']['remind_submit'])) $this->magic_vars['MsgInfo']['remind_submit'] = ''; echo $this->magic_vars['MsgInfo']['remind_submit']; ?>" />
		<input type="reset"  name="reset" value="<? if (!isset($this->magic_vars['MsgInfo']['remind_reset'])) $this->magic_vars['MsgInfo']['remind_reset'] = ''; echo $this->magic_vars['MsgInfo']['remind_reset']; ?>" />
	</div>
</form>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
<form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/actions" method="post">
	<tr >
		<td class="main_td" colspan="6" align="left">&nbsp;<? if (!isset($this->magic_vars['MsgInfo']['remind_add_more'])) $this->magic_vars['MsgInfo']['remind_add_more'] = ''; echo $this->magic_vars['MsgInfo']['remind_add_more']; ?></td>
	</tr>
	<tr  class="tr2">
		<td ><? if (!isset($this->magic_vars['MsgInfo']['remind_name'])) $this->magic_vars['MsgInfo']['remind_name'] = ''; echo $this->magic_vars['MsgInfo']['remind_name']; ?></td>
		<td ><? if (!isset($this->magic_vars['MsgInfo']['remind_nid'])) $this->magic_vars['MsgInfo']['remind_nid'] = ''; echo $this->magic_vars['MsgInfo']['remind_nid']; ?></td>
		<td><? if (!isset($this->magic_vars['MsgInfo']['remind_message'])) $this->magic_vars['MsgInfo']['remind_message'] = ''; echo $this->magic_vars['MsgInfo']['remind_message']; ?></td>
		<td ><? if (!isset($this->magic_vars['MsgInfo']['remind_email'])) $this->magic_vars['MsgInfo']['remind_email'] = ''; echo $this->magic_vars['MsgInfo']['remind_email']; ?></td>
		<td ><? if (!isset($this->magic_vars['MsgInfo']['remind_phone'])) $this->magic_vars['MsgInfo']['remind_phone'] = ''; echo $this->magic_vars['MsgInfo']['remind_phone']; ?></td>
		<td ><? if (!isset($this->magic_vars['MsgInfo']['remind_order'])) $this->magic_vars['MsgInfo']['remind_order'] = ''; echo $this->magic_vars['MsgInfo']['remind_order']; ?></td>
	</tr>
	<tr >
		<td ><input type="text"  name="name[]" /></td>
		<td ><input type="text" name="nid[]" /></td>
		<td>
			<select name="message[]">
				<option value="1"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?></option>
				<option value="2"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?></option>
				<option value="3"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?></option>
				<option value="4"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?></option>
			</select>
		</td>
		<td>
			<select name="email[]">
				<option value="1"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?></option>
				<option value="2"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?></option>
				<option value="3"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?></option>
				<option value="4"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?></option>
			</select>
		</td>
		<td>
			<select name="phone[]">
				<option value="1"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?></option>
				<option value="2"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?></option>
				<option value="3"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?></option>
				<option value="4"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?></option>
			</select>
		</td>
		<td  ><input type="text" name="order[]" value="10" size="5" /></td>
	</tr>
	<tr >
		<td ><input type="text"  name="name[]" /></td>
		<td ><input type="text" name="nid[]" /></td>
		<td>
			<select name="message[]">
				<option value="1"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?></option>
				<option value="2"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?></option>
				<option value="3"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?></option>
				<option value="4"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?></option>
			</select>
		</td>
		<td>
			<select name="email[]">
				<option value="1"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?></option>
				<option value="2"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?></option>
				<option value="3"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?></option>
				<option value="4"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?></option>
			</select>
		</td>
		<td>
			<select name="phone[]">
				<option value="1"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?></option>
				<option value="2"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?></option>
				<option value="3"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?></option>
				<option value="4"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?></option>
			</select>
		</td>
		<td  ><input type="text" name="order[]" value="10" size="5" /></td>
	</tr>
	<tr >
		<td ><input type="text"  name="name[]" /></td>
		<td ><input type="text" name="nid[]" /></td>
		<td>
			<select name="message[]">
				<option value="1"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?></option>
				<option value="2"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?></option>
				<option value="3"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?></option>
				<option value="4"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?></option>
			</select>
		</td>
		<td>
			<select name="email[]">
				<option value="1"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?></option>
				<option value="2"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?></option>
				<option value="3"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?></option>
				<option value="4"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?></option>
			</select>
		</td>
		<td>
			<select name="phone[]">
				<option value="1"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?></option>
				<option value="2"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?></option>
				<option value="3"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?></option>
				<option value="4"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?></option>
			</select>
		</td>
		<td  ><input type="text" name="order[]" value="10" size="5" /></td>
	</tr>
	<tr >
		<td ><input type="text"  name="name[]" /></td>
		<td ><input type="text" name="nid[]" /></td>
		<td>
			<select name="message[]">
				<option value="1"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?></option>
				<option value="2"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?></option>
				<option value="3"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?></option>
				<option value="4"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?></option>
			</select>
		</td>
		<td>
			<select name="email[]">
				<option value="1"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?></option>
				<option value="2"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?></option>
				<option value="3"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?></option>
				<option value="4"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?></option>
			</select>
		</td>
		<td>
			<select name="phone[]">
				<option value="1"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?></option>
				<option value="2"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?></option>
				<option value="3"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?></option>
				<option value="4"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?></option>
			</select>
		</td>
		<td  ><input type="text" name="order[]" value="10" size="5" /></td>
	</tr>
	<tr >
		<td ><input type="text"  name="name[]" /></td>
		<td ><input type="text" name="nid[]" /></td>
		<td>
			<select name="message[]">
				<option value="1"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?></option>
				<option value="2"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?></option>
				<option value="3"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?></option>
				<option value="4"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?></option>
			</select>
		</td>
		<td>
			<select name="email[]">
				<option value="1"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?></option>
				<option value="2"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?></option>
				<option value="3"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?></option>
				<option value="4"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?></option>
			</select>
		</td>
		<td>
			<select name="phone[]">
				<option value="1"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_yes'])) $this->magic_vars['MsgInfo']['remind_choose_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_yes']; ?></option>
				<option value="2"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_no'])) $this->magic_vars['MsgInfo']['remind_choose_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_no']; ?></option>
				<option value="3"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_yes'])) $this->magic_vars['MsgInfo']['remind_choose_or_yes'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_yes']; ?></option>
				<option value="4"><? if (!isset($this->magic_vars['MsgInfo']['remind_choose_or_no'])) $this->magic_vars['MsgInfo']['remind_choose_or_no'] = ''; echo $this->magic_vars['MsgInfo']['remind_choose_or_no']; ?></option>
			</select>
		</td>
		<td  ><input type="text" name="order[]" value="10" size="5" /></td>
	</tr>
	
	<input type="hidden" name="type_id" value="<? if (!isset($_REQUEST['id'])) $_REQUEST['id'] = ''; echo $_REQUEST['id']; ?>" />
<tr >
	<td colspan="6"  class="submit">
		<input type="submit" name="submit" value="<? if (!isset($this->magic_vars['MsgInfo']['remind_submit'])) $this->magic_vars['MsgInfo']['remind_submit'] = ''; echo $this->magic_vars['MsgInfo']['remind_submit']; ?>" />
	</td>
</tr>
</form>	
</table>

<script>
function check_form(){
	
	var frm = document.forms['form1'];
	var title = frm.elements['name'].value;
	
	 var errorMsg = '';
	  if (title == "") {
		errorMsg += '提醒的{$MsgInfo.remind_name}必须填写' + '\n';
	  }
	 
	  
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}

</script>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "subnew" ||  $this->magic_vars['_A']['query_type'] == "subedit"): ?>

<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	 <form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/order" method="post">
	<tr >
		<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['remind_name'])) $this->magic_vars['MsgInfo']['remind_name'] = ''; echo $this->magic_vars['MsgInfo']['remind_name']; ?></td>
		<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['remind_type'])) $this->magic_vars['MsgInfo']['remind_type'] = ''; echo $this->magic_vars['MsgInfo']['remind_type']; ?></td>
		<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['remind_fenlei'])) $this->magic_vars['MsgInfo']['remind_fenlei'] = ''; echo $this->magic_vars['MsgInfo']['remind_fenlei']; ?></td>
		<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['remind_order'])) $this->magic_vars['MsgInfo']['remind_order'] = ''; echo $this->magic_vars['MsgInfo']['remind_order']; ?></td>
		<td class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['remind_action'])) $this->magic_vars['MsgInfo']['remind_action'] = ''; echo $this->magic_vars['MsgInfo']['remind_action']; ?></td>
	</tr>
	<?  if(!isset($this->magic_vars['result']) || $this->magic_vars['result']=='') $this->magic_vars['result'] = array();  $_from = $this->magic_vars['result']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td  width="250"><input type="text" value="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>" name="name[]" /></td>
		<td  width="150"><? if (!isset($this->magic_vars['liandong_type']['typename'])) $this->magic_vars['liandong_type']['typename'] = ''; echo $this->magic_vars['liandong_type']['typename']; ?></td>
		<td  width="150"><? if (!isset($this->magic_vars['liandong_sub']['name'])) $this->magic_vars['liandong_sub']['name'] = ''; echo $this->magic_vars['liandong_sub']['name']; ?></td>
		<td  ><input type="text" value="<? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = '';$_tmp = $this->magic_vars['item']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" name="order[]" size="5" /><input type="hidden" name="id[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" /></td>
		<td  width="130"><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/subnew&id=<? if (!isset($this->magic_vars['item']['type_id'])) $this->magic_vars['item']['type_id'] = ''; echo $this->magic_vars['item']['type_id']; ?>&pid=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>"><? if (!isset($this->magic_vars['MsgInfo']['remind_manager'])) $this->magic_vars['MsgInfo']['remind_manager'] = ''; echo $this->magic_vars['MsgInfo']['remind_manager']; ?></a> / <a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/edit&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>"><? if (!isset($this->magic_vars['MsgInfo']['remind_update'])) $this->magic_vars['MsgInfo']['remind_update'] = ''; echo $this->magic_vars['MsgInfo']['remind_update']; ?></a> / <a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'"><? if (!isset($this->magic_vars['MsgInfo']['remind_delete'])) $this->magic_vars['MsgInfo']['remind_delete'] = ''; echo $this->magic_vars['MsgInfo']['remind_delete']; ?></a></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
<tr >
	<td colspan="6"  class="submit">
		<input type="submit" name="submit" value="<? if (!isset($this->magic_vars['MsgInfo']['remind_submit'])) $this->magic_vars['MsgInfo']['remind_submit'] = ''; echo $this->magic_vars['MsgInfo']['remind_submit']; ?>" />
	</td>
</tr>
</form>	

<form action="" method="post">
	<tr >
		<td colspan="6" class="action">
			<strong><? if (!isset($this->magic_vars['MsgInfo']['remind_type'])) $this->magic_vars['MsgInfo']['remind_type'] = ''; echo $this->magic_vars['MsgInfo']['remind_type']; ?>：</strong><? if (!isset($this->magic_vars['liandong_type']['typename'])) $this->magic_vars['liandong_type']['typename'] = ''; echo $this->magic_vars['liandong_type']['typename']; ?> -> <input type="text" name="name" /> <input type="submit" name="submit" value="添加" /> <input type="hidden" name="pid" value="<? if (!isset($_REQUEST['pid'])) $_REQUEST['pid'] = '';$_tmp = $_REQUEST['pid'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" /><input type="hidden" name="type_id" value="<? if (!isset($_REQUEST['id'])) $_REQUEST['id'] = ''; echo $_REQUEST['id']; ?>" />
		</td>
	</tr>
	</form>	
</table>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "type_new" ||  $this->magic_vars['_A']['query_type'] == "type_edit"): ?>
<div class="module_add">

	<form name="form1" method="post" action="" >
	<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "type_edit"): ?><? if (!isset($this->magic_vars['MsgInfo']['remind_edit'])) $this->magic_vars['MsgInfo']['remind_edit'] = ''; echo $this->magic_vars['MsgInfo']['remind_edit']; ?><? else: ?><? if (!isset($this->magic_vars['MsgInfo']['remind_add'])) $this->magic_vars['MsgInfo']['remind_add'] = ''; echo $this->magic_vars['MsgInfo']['remind_add']; ?><? endif; ?><? if (!isset($this->magic_vars['MsgInfo']['remind_type'])) $this->magic_vars['MsgInfo']['remind_type'] = ''; echo $this->magic_vars['MsgInfo']['remind_type']; ?></strong></div>
	
	<div class="module_border">
		<div class="l"><? if (!isset($this->magic_vars['MsgInfo']['remind_type'])) $this->magic_vars['MsgInfo']['remind_type'] = ''; echo $this->magic_vars['MsgInfo']['remind_type']; ?>：</div>
		<div class="c">
			<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['remind_type_result']['name'])) $this->magic_vars['_A']['remind_type_result']['name'] = ''; echo $this->magic_vars['_A']['remind_type_result']['name']; ?>" />
		</div>
	</div>

	<div class="module_border">
		<div class="l"><? if (!isset($this->magic_vars['MsgInfo']['remind_nid'])) $this->magic_vars['MsgInfo']['remind_nid'] = ''; echo $this->magic_vars['MsgInfo']['remind_nid']; ?>：</div>
		<div class="c">
			<input type="text" name="nid"  value="<? if (!isset($this->magic_vars['_A']['remind_type_result']['nid'])) $this->magic_vars['_A']['remind_type_result']['nid'] = ''; echo $this->magic_vars['_A']['remind_type_result']['nid']; ?>" onkeyup="value=value.replace(/[^a-z_]/g,'')"/>
		</div>
	</div>

	<div class="module_border">
		<div class="l"><? if (!isset($this->magic_vars['MsgInfo']['remind_order'])) $this->magic_vars['MsgInfo']['remind_order'] = ''; echo $this->magic_vars['MsgInfo']['remind_order']; ?>：</div>
		<div class="c">
			<input type="text" name="order"  value="<? if (!isset($this->magic_vars['_A']['remind_type_result']['order'])) $this->magic_vars['_A']['remind_type_result']['order'] = '';$_tmp = $this->magic_vars['_A']['remind_type_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>"  onkeyup="value=value.replace(/[^0-9]/g,'')"/>
		</div>
	</div>
	
	<div class="module_submit" >
		<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type']=="type_edit"): ?><input type="hidden" name="id" value="<? if (!isset($_REQUEST['id'])) $_REQUEST['id'] = ''; echo $_REQUEST['id']; ?>" /><? endif; ?>
		<input type="submit"  name="submit" value="<? if (!isset($this->magic_vars['MsgInfo']['remind_submit'])) $this->magic_vars['MsgInfo']['remind_submit'] = ''; echo $this->magic_vars['MsgInfo']['remind_submit']; ?>" />
		<input type="reset"  name="reset" value="<? if (!isset($this->magic_vars['MsgInfo']['remind_reset'])) $this->magic_vars['MsgInfo']['remind_reset'] = ''; echo $this->magic_vars['MsgInfo']['remind_reset']; ?>" />
	</div>
	</form>
</div>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "type_new"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
<form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type_action" method="post">
	<tr >
		<td class="main_td" colspan="6" align="left">&nbsp;<? if (!isset($this->magic_vars['MsgInfo']['remind_add_more'])) $this->magic_vars['MsgInfo']['remind_add_more'] = ''; echo $this->magic_vars['MsgInfo']['remind_add_more']; ?></td>
	</tr>
	<tr  class="tr2">
		<td ><? if (!isset($this->magic_vars['MsgInfo']['remind_type'])) $this->magic_vars['MsgInfo']['remind_type'] = ''; echo $this->magic_vars['MsgInfo']['remind_type']; ?></td>
		<td ><? if (!isset($this->magic_vars['MsgInfo']['remind_nid'])) $this->magic_vars['MsgInfo']['remind_nid'] = ''; echo $this->magic_vars['MsgInfo']['remind_nid']; ?></td>
		<td  ><? if (!isset($this->magic_vars['MsgInfo']['remind_order'])) $this->magic_vars['MsgInfo']['remind_order'] = ''; echo $this->magic_vars['MsgInfo']['remind_order']; ?></td>
	</tr>
	<tr >
		<td ><input type="text"  name="name[]" /></td>
		<td ><input type="text" name="nid[]" /></td>
		<td  ><input type="text" name="order[]" value="10" size="5" /></td>
	</tr>
	<tr >
		<td ><input type="text"  name="name[]" /></td>
		<td ><input type="text" name="nid[]" /></td>
		<td  ><input type="text" name="order[]" value="10" size="5" /></td>
	</tr>
	<tr >
		<td ><input type="text"  name="name[]" /></td>
		<td ><input type="text" name="nid[]" /></td>
		<td  ><input type="text" name="order[]" value="10" size="5" /></td>
	</tr>
	<tr >
		<td ><input type="text"  name="name[]" /></td>
		<td ><input type="text" name="nid[]" /></td>
		<td  ><input type="text" name="order[]"  value="10"size="5" /></td>
	</tr>
	<tr >
		<td ><input type="text"  name="name[]" /></td>
		<td ><input type="text" name="nid[]" /></td>
		<td  ><input type="text" name="order[]" value="10" size="5" /></td>
	</tr>
	
<tr >
	<td colspan="6"  class="submit">
		<input type="hidden" name="type" value="add" />
		<input type="submit" name="submit" value="<? if (!isset($this->magic_vars['MsgInfo']['remind_submit'])) $this->magic_vars['MsgInfo']['remind_submit'] = ''; echo $this->magic_vars['MsgInfo']['remind_submit']; ?>" />
	</td>
</tr>
</form>	
</table>
<? endif; ?>
<? endif; ?>