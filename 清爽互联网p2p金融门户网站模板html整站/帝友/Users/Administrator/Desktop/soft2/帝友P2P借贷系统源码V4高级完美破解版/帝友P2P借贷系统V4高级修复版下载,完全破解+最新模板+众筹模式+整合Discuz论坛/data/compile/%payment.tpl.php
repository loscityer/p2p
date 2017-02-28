<ul class="nav3"> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/list" id="c_so"><? if (!isset($this->magic_vars['MsgInfo']['payment_name_list'])) $this->magic_vars['MsgInfo']['payment_name_list'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_list']; ?></a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/all"><? if (!isset($this->magic_vars['MsgInfo']['payment_name_all'])) $this->magic_vars['MsgInfo']['payment_name_all'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_all']; ?></a></li> 
</ul> 

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "new" ||  $this->magic_vars['_A']['query_type'] == "edit" ||  $this->magic_vars['_A']['query_type'] == "start"): ?>
<div class="module_add">
<form name="form1" method="post" action=""  enctype="multipart/form-data">
	<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?><? if (!isset($this->magic_vars['MsgInfo']['payment_name_edit'])) $this->magic_vars['MsgInfo']['payment_name_edit'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_edit']; ?><? else: ?><? if (!isset($this->magic_vars['MsgInfo']['payment_name_new'])) $this->magic_vars['MsgInfo']['payment_name_new'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_new']; ?><? endif; ?></strong></div>
	
	
	<div class="module_border">
		<div class="w"><? if (!isset($this->magic_vars['MsgInfo']['payment_name_name'])) $this->magic_vars['MsgInfo']['payment_name_name'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_name']; ?>£∫</div>
		<div class="c">
			<input type="text" name="name"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['payment_result']['name'])) $this->magic_vars['_A']['payment_result']['name'] = ''; echo $this->magic_vars['_A']['payment_result']['name']; ?>" size="30" />
		</div>
	</div>
	
	<div class="module_border" >
		<div class="w"><? if (!isset($this->magic_vars['MsgInfo']['payment_name_litpic'])) $this->magic_vars['MsgInfo']['payment_name_litpic'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_litpic']; ?>£∫</div>
		<div class="c">
			<input type="file" name="litpic" size="30" class="input_border"/><? if (!isset($this->magic_vars['_A']['payment_result']['litpic'])) $this->magic_vars['_A']['payment_result']['litpic']=''; ;if (  $this->magic_vars['_A']['payment_result']['litpic']!=""): ?><a href="./<? if (!isset($this->magic_vars['_A']['payment_result']['litpic'])) $this->magic_vars['_A']['payment_result']['litpic'] = ''; echo $this->magic_vars['_A']['payment_result']['litpic']; ?>" target="_blank" title="”–Õº∆¨"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_1.jpg" border="0"  /></a><input type="checkbox" name="clearlitpic" value="1" />»•µÙÀı¬‘Õº<? endif; ?></div>
	</div>
	
	<?  if(!isset($this->magic_vars['_A']['payment_result']['fields']) || $this->magic_vars['_A']['payment_result']['fields']=='') $this->magic_vars['_A']['payment_result']['fields'] = array();  $_from = $this->magic_vars['_A']['payment_result']['fields']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<div class="module_border">
		<div class="w"><? if (!isset($this->magic_vars['item']['label'])) $this->magic_vars['item']['label'] = ''; echo $this->magic_vars['item']['label']; ?></div>
		<div class="c">
			<? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type']=="string"): ?>
			<input type="text" name="config[<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>]"  class="input_border" value="<? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value'] = ''; echo $this->magic_vars['item']['value']; ?>" size="30" />
			<? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;elseif (  $this->magic_vars['item']['type']=="select"): ?>
			<select name="config[<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>]">
				<?  if(!isset($this->magic_vars['item']['options']) || $this->magic_vars['item']['options']=='') $this->magic_vars['item']['options'] = array();  $_from = $this->magic_vars['item']['options']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['_key'] =>  $this->magic_vars['var']):
?>
				<option value="<? if (!isset($this->magic_vars['_key'])) $this->magic_vars['_key'] = ''; echo $this->magic_vars['_key']; ?>" <? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value']='';if (!isset($this->magic_vars['_key'])) $this->magic_vars['_key']=''; ;if (  $this->magic_vars['item']['value']== $this->magic_vars['_key']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['var'])) $this->magic_vars['var'] = ''; echo $this->magic_vars['var']; ?></option>
				<? endforeach; endif; unset($_from); ?>
			</select>
			<? endif; ?>
		</div>
	</div>
	<? endforeach; endif; unset($_from); ?>
	
	
	<div class="module_border">
		<div class="w"><? if (!isset($this->magic_vars['MsgInfo']['payment_name_order'])) $this->magic_vars['MsgInfo']['payment_name_order'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_order']; ?>:</div>
		<div class="c">
			<input type="text" name="order"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['payment_result']['order'])) $this->magic_vars['_A']['payment_result']['order'] = '';$_tmp = $this->magic_vars['_A']['payment_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" size="10" />
		</div>
	</div>

	
	<div class="module_border">
		<div class="w"><? if (!isset($this->magic_vars['MsgInfo']['payment_name_description'])) $this->magic_vars['MsgInfo']['payment_name_description'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_description']; ?>£∫</div>
		<div class="c">
			<textarea id="bcontents" name="description" rows="28"  style="width: 100%"><? if (!isset($this->magic_vars['_A']['payment_result']['description'])) $this->magic_vars['_A']['payment_result']['description'] = ''; echo $this->magic_vars['_A']['payment_result']['description']; ?></textarea>		
	
		<script>
		$('#bcontents').xheditor({skin:'o2007blue',upImgUrl:"/?admin&q=plugins&p=xheditor&immediate=1",upImgExt:"jpg,jpeg,gif,png"});
		function submitForm(){
		$("#bcontents").val();
		$('#frm').submit();
		return false;}
		</script>
		
		</div>
	</div>
	
	<div class="module_submit" >
		<input type="hidden" name="nid" value="<? if (!isset($this->magic_vars['_A']['payment_result']['nid'])) $this->magic_vars['_A']['payment_result']['nid'] = ''; echo $this->magic_vars['_A']['payment_result']['nid']; ?>" />
		<input type="hidden" name="status" value="<? if (!isset($this->magic_vars['_A']['payment_result']['status'])) $this->magic_vars['_A']['payment_result']['status'] = '';$_tmp = $this->magic_vars['_A']['payment_result']['status'];$_tmp = $this->magic_modifier("default",$_tmp,"1");echo $_tmp;unset($_tmp); ?>" />
		<input type="hidden" name="type" value="<? if (!isset($this->magic_vars['_A']['payment_result']['type'])) $this->magic_vars['_A']['payment_result']['type'] = ''; echo $this->magic_vars['_A']['payment_result']['type']; ?>" />
		<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?>
		<input type="hidden" name="id" value="<? if (!isset($_REQUEST['id'])) $_REQUEST['id'] = ''; echo $_REQUEST['id']; ?>" />
		<? endif; ?>
		<input type="submit"  name="submit" value="<? if (!isset($this->magic_vars['MsgInfo']['payment_name_submit'])) $this->magic_vars['MsgInfo']['payment_name_submit'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_submit']; ?>" />
		<input type="reset"  name="reset" value="<? if (!isset($this->magic_vars['MsgInfo']['payment_name_reset'])) $this->magic_vars['MsgInfo']['payment_name_reset'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_reset']; ?>" />
	</div>
	
</div>
</form>

<script>
function change(type){
	if (type==1){
		$("#fee").hide();
		$("#fee_money").show();
	}else{
		$("#fee_money").hide();
		$("#fee").show();
	}

}
function check_form(){
/*
	 var frm = document.forms['form1'];
	 var title = frm.elements['name'].value;
	 var errorMsg = '';
	  if (title.length == 0 ) {
		errorMsg += '±ÍÃ‚±ÿ–ÎÃÓ–¥' + '\n';
	  }
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
	  */
}

</script>


<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "all"): ?>

<div class="module_add">
	<div class="module_title"><strong><? if (!isset($this->magic_vars['MsgInfo']['payment_name_all'])) $this->magic_vars['MsgInfo']['payment_name_all'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_all']; ?></strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/action" method="post">
	<tr >
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['payment_name_logo'])) $this->magic_vars['MsgInfo']['payment_name_logo'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_logo']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['payment_name_name'])) $this->magic_vars['MsgInfo']['payment_name_name'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_name']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['payment_name_description'])) $this->magic_vars['MsgInfo']['payment_name_description'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_description']; ?></td>
		<td width="" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['payment_name_manage'])) $this->magic_vars['MsgInfo']['payment_name_manage'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_manage']; ?></td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['payment_list']) || $this->magic_vars['_A']['payment_list']=='') $this->magic_vars['_A']['payment_list'] = array();  $_from = $this->magic_vars['_A']['payment_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr class="tr1">
		<td><img src="<? if (!isset($this->magic_vars['item']['logo'])) $this->magic_vars['item']['logo'] = ''; echo $this->magic_vars['item']['logo']; ?>" height="50" /></td>
		<td><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['description'])) $this->magic_vars['item']['description'] = ''; echo $this->magic_vars['item']['description']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type']==1): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/start&nid=<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>" ><? if (!isset($this->magic_vars['MsgInfo']['payment_name_open'])) $this->magic_vars['MsgInfo']['payment_name_open'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_open']; ?></a><? else: ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/new&nid=<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>" ><? if (!isset($this->magic_vars['MsgInfo']['payment_name_new'])) $this->magic_vars['MsgInfo']['payment_name_new'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_new']; ?></a><? endif; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		
	</form>	
</table>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "list"): ?>
<div class="module_add">
	<div class="module_title"><strong><? if (!isset($this->magic_vars['MsgInfo']['payment_name_list'])) $this->magic_vars['MsgInfo']['payment_name_list'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_list']; ?></strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/action" method="post">
	<tr >
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['payment_name_logo'])) $this->magic_vars['MsgInfo']['payment_name_logo'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_logo']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['payment_name_name'])) $this->magic_vars['MsgInfo']['payment_name_name'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_name']; ?></td>
		<td width="*" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['payment_name_description'])) $this->magic_vars['MsgInfo']['payment_name_description'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_description']; ?></td>
		<td width="" class="main_td"><? if (!isset($this->magic_vars['MsgInfo']['payment_name_manage'])) $this->magic_vars['MsgInfo']['payment_name_manage'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_manage']; ?></td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['payment_list']) || $this->magic_vars['_A']['payment_list']=='') $this->magic_vars['_A']['payment_list'] = array();  $_from = $this->magic_vars['_A']['payment_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr class="tr1">
		<td><img src="<? if (!isset($this->magic_vars['item']['logo'])) $this->magic_vars['item']['logo'] = ''; echo $this->magic_vars['item']['logo']; ?>" height="50" /></td>
		<td><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['description'])) $this->magic_vars['item']['description'] = ''; echo $this->magic_vars['item']['description']; ?></td>
		<td><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/edit&nid=<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" ><? if (!isset($this->magic_vars['MsgInfo']['payment_name_edit'])) $this->magic_vars['MsgInfo']['payment_name_edit'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_edit']; ?></a> |  <a href="#" onClick="javascript:if(confirm('<? if (!isset($this->magic_vars['MsgInfo']['payment_name_del_msg'])) $this->magic_vars['MsgInfo']['payment_name_del_msg'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_del_msg']; ?>')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'"><? if (!isset($this->magic_vars['MsgInfo']['payment_name_del'])) $this->magic_vars['MsgInfo']['payment_name_del'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_del']; ?></a> | <? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/list&nid=<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>&status=0" ><? if (!isset($this->magic_vars['MsgInfo']['payment_name_close'])) $this->magic_vars['MsgInfo']['payment_name_close'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_close']; ?></a><? else: ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/list&nid=<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>&status=1" ><? if (!isset($this->magic_vars['MsgInfo']['payment_name_open'])) $this->magic_vars['MsgInfo']['payment_name_open'] = ''; echo $this->magic_vars['MsgInfo']['payment_name_open']; ?></a><? endif; ?> </td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		
	</form>
</table>
<? endif; ?>