<ul class="nav3"> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/list" id="c_so">���������б�</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/new">�����������</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type">��������</a></li> 
</ul> 
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "new" ||  $this->magic_vars['_A']['query_type'] == "edit"): ?>
<div class="module_add">
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data" >
	<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?>�༭<? else: ?>���<? endif; ?>��������</strong></div>
	
	<div class="module_border">
		<div class="l">��վ���ƣ�</div>
		<div class="c">
			<input type="text" name="webname"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['links_result']['webname'])) $this->magic_vars['_A']['links_result']['webname'] = ''; echo $this->magic_vars['_A']['links_result']['webname']; ?>" size="30" />  
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���</div>
		<div class="c">
			<select name="type_id">
			<?  if(!isset($this->magic_vars['_A']['links_type_list']) || $this->magic_vars['_A']['links_type_list']=='') $this->magic_vars['_A']['links_type_list'] = array();  $_from = $this->magic_vars['_A']['links_type_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<option  value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" <? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']='';if (!isset($this->magic_vars['_A']['links_result']['type_id'])) $this->magic_vars['_A']['links_result']['type_id']=''; ;if (  $this->magic_vars['item']['id']== $this->magic_vars['_A']['links_result']['type_id']): ?> selected="selected"<? endif; ?> /><? if (!isset($this->magic_vars['item']['typename'])) $this->magic_vars['item']['typename'] = ''; echo $this->magic_vars['item']['typename']; ?></option>
			
			<? endforeach; endif; unset($_from); ?>
			</select>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
			<input type="radio" name="status" value="0"  <? if (!isset($this->magic_vars['_A']['links_result']['status'])) $this->magic_vars['_A']['links_result']['status']=''; ;if (  $this->magic_vars['_A']['links_result']['status'] == 0): ?>checked="checked"<? endif; ?>/>���� <input type="radio" name="status" value="1"  <? if (!isset($this->magic_vars['_A']['links_result']['status'])) $this->magic_vars['_A']['links_result']['status']='';if (!isset($this->magic_vars['_A']['links_result']['status'])) $this->magic_vars['_A']['links_result']['status']=''; ;if (  $this->magic_vars['_A']['links_result']['status'] ==1 || $this->magic_vars['_A']['links_result']['status'] ==""): ?>checked="checked"<? endif; ?>/>��ʾ </div>
	</div>
	
	<div class="module_border">
		<div class="l">����</div>
		<div class="c">
			<input type="text" name="order"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['links_result']['order'])) $this->magic_vars['_A']['links_result']['order'] = '';$_tmp = $this->magic_vars['_A']['links_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" size="10" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">LOGO��ַ:</div>
		<div class="c">
			<input type="text" name="logo"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['links_result']['logo'])) $this->magic_vars['_A']['links_result']['logo'] = ''; echo $this->magic_vars['_A']['links_result']['logo']; ?>" size="30" /> ����дurl��ַ
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">LOGO�ϴ�:</div>
		<div class="c">
			<input type="file" name="logoimg"  class="input_border" size="20" /><? if (!isset($this->magic_vars['_A']['links_result']['logoimg'])) $this->magic_vars['_A']['links_result']['logoimg']=''; ;if (  $this->magic_vars['_A']['links_result']['logoimg']!=""): ?><a href="./<? if (!isset($this->magic_vars['_A']['links_result']['fileurl'])) $this->magic_vars['_A']['links_result']['fileurl'] = ''; echo $this->magic_vars['_A']['links_result']['fileurl']; ?>" target="_blank" title="��ͼƬ"><img src="./<? if (!isset($this->magic_vars['_A']['links_result']['fileurl'])) $this->magic_vars['_A']['links_result']['fileurl'] = ''; echo $this->magic_vars['_A']['links_result']['fileurl']; ?>" border="0" width="40" height="40"  /></a><? endif; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��վ��ַ:</div>
		<div class="c">
			<input type="text" name="url"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['links_result']['url'])) $this->magic_vars['_A']['links_result']['url'] = ''; echo $this->magic_vars['_A']['links_result']['url']; ?>" size="30" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ϵ��:</div>
		<div class="c">
			<input type="text" name="linkman"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['links_result']['linkman'])) $this->magic_vars['_A']['links_result']['linkman'] = ''; echo $this->magic_vars['_A']['links_result']['linkman']; ?>" size="20" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��վ���:</div>
		<div class="c">
			<textarea name="summary" cols="40" rows="5"><? if (!isset($this->magic_vars['_A']['links_result']['summary'])) $this->magic_vars['_A']['links_result']['summary'] = ''; echo $this->magic_vars['_A']['links_result']['summary']; ?></textarea>
		</div>
	</div>
	
	<div class="module_submit" >
		<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['links_result']['id'])) $this->magic_vars['_A']['links_result']['id'] = ''; echo $this->magic_vars['_A']['links_result']['id']; ?>" /><? endif; ?>
		<input type="submit"  name="submit" value="ȷ���ύ" />
		<input type="reset"  name="reset" value="���ñ�" />
		</div>
	</div>
	</form>
</div>


<script>
function check_form(){
	 var frm = document.forms['form1'];
	 var webname = frm.elements['webname'].value;
	 var url = frm.elements['url'].value;
	 var errorMsg = '';
	  if (webname.length == 0 ) {
		errorMsg += '��վ���������д' + '\n';
	  }
	  if (url.length == 0 ) {
		errorMsg += '���ӵ�ַ����Ϊ��' + '\n';
	  }
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}

</script>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "type"): ?>
<form name="form1" method="post" action="" >
<table width="100%" border="0"  cellspacing="1" bgcolor="#CCCCCC">
<tr >
		<td width="" class="main_td">ID</td>
		<td width="*" class="main_td">����</td>
		<td width="" class="main_td">����</td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['links_type_list']) || $this->magic_vars['_A']['links_type_list']=='') $this->magic_vars['_A']['links_type_list'] = array();  $_from = $this->magic_vars['_A']['links_type_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="left">&nbsp;&nbsp;&nbsp;<input type="text" value="<? if (!isset($this->magic_vars['item']['typename'])) $this->magic_vars['item']['typename'] = ''; echo $this->magic_vars['item']['typename']; ?>" name="typename[]" /><input type="hidden" name="id[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" /></td>
		<td class="main_td1" align="center" width="160"><a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type&del_id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">ɾ��</a> </td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr >
		<td width="" class="main_td" colspan="3">����һ�����ͣ�<input type="text" name="typename1" /></td>
	</tr>

<tr>
	<td bgcolor="#ffffff" colspan="3"  align="center">
	<input type="submit"  name="submit" value="ȷ���ύ" />
	</tr>
<tr>
</table>
</form>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "view"): ?>

<? else: ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
  <form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/order" method="post">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="*" class="main_td">��վ����</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">״̬</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">���ʱ��</td>
		<td width="" class="main_td">��վlogo</td>
		<td width="" class="main_td">����</div>
	</div>
	<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','epage'=>'10');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/links/links.class.php');$this->magic_vars['magic_result'] = linksClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['webname'])) $this->magic_vars['item']['webname'] = ''; echo $this->magic_vars['item']['webname']; ?></td>
		<td class="main_td1" align="center" width="60"><? if (!isset($this->magic_vars['item']['typename'])) $this->magic_vars['item']['typename'] = ''; echo $this->magic_vars['item']['typename']; ?></td>
		<td class="main_td1" align="center" width="50"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==1): ?>��ʾ<? else: ?>����<? endif; ?></td>
		<td class="main_td1" align="center" width="50"><input type="text" value="<? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = '';$_tmp = $this->magic_vars['item']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" name="order[]" size="5" /><input type="hidden" name="id[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" /></td>
		<td class="main_td1" align="center" width="90"><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center" width="80"><? if (!isset($this->magic_vars['item']['logoimg'])) $this->magic_vars['item']['logoimg']=''; ;if (  $this->magic_vars['item']['logoimg']!=""): ?><a href="./<? if (!isset($this->magic_vars['item']['fileurl'])) $this->magic_vars['item']['fileurl'] = ''; echo $this->magic_vars['item']['fileurl']; ?>" target="_blank"><img height="20" src="./<? if (!isset($this->magic_vars['item']['fileurl'])) $this->magic_vars['item']['fileurl'] = ''; echo $this->magic_vars['item']['fileurl']; ?>" border="0" /></a><? else: ?>��logo<? endif; ?></td>
		<td class="main_td1" align="center" width="130"><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/edit&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">�޸�</a> / <a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">ɾ��</a></div>
	</div>
	<? endforeach; endif; unset($_from); ?>
	<tr >
		<td colspan="8" class="submit">
			<input type="submit" name="submit" value="ȷ���ύ" />
		</td>
	</tr>
	<tr >
		<td colspan="8" class="page">
			<? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</td>
	</tr>
	<? unset($_magic_vars); ?>
	</form>	
</table>
<? endif; ?>