<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type']=="list"): ?>
<form action="" method="post">
<div class="module_add">
	<div class="module_title"><strong>վ�����</strong>�����˵���
	<select onchange="change_menu(this.value)" name="menu_id" id="menu_id">
	<? $this->magic_vars['query_type']='GetSiteMenuList';$data = array('var'=>'item','limit'=>'all');$default = '';  require_once(ROOT_PATH.'modules/admin/admin.class.php');$this->magic_vars['magic_result'] = adminClass::GetSiteMenuList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
	<option value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" <? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']='';if (!isset($_REQUEST['menu_id'])) $_REQUEST['menu_id']=''; ;if (  $this->magic_vars['item']['id']== $_REQUEST['menu_id']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></option>
	<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
	</select>
	
	<input type="submit" value="�޸�����" /></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
	</tr>
	<? $this->magic_vars['query_type']='GetSite';$data = array('var'=>'item','limit'=>'all','menu_id'=>$_REQUEST['menu_id']);$default = '';  require_once(ROOT_PATH.'modules/admin/admin.class.php');$this->magic_vars['magic_result'] = adminClass::GetSite($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['type_name'])) $this->magic_vars['item']['type_name'] = ''; echo $this->magic_vars['item']['type_name']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type']=="url"): ?>��ת<? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;elseif (  $this->magic_vars['item']['type']=="article"): ?>����<? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;elseif (  $this->magic_vars['item']['type']=="page"): ?>ҳ��<? else: ?>ģ��<? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']=="1"): ?>��ʾ<? else: ?>����<? endif; ?></td>
		<td class="main_td1" align="center"><input type="text" size="5" value="<? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']; ?>" name="order[]" /><input type="hidden"  value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" name="id[]" /></td>
		<td class="main_td1" align="center"><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/new&action=<? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = ''; echo $this->magic_vars['item']['type']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/new&action=<? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = ''; echo $this->magic_vars['item']['type']; ?>&menu_id=<? if (!isset($this->magic_vars['item']['menu_id'])) $this->magic_vars['item']['menu_id'] = ''; echo $this->magic_vars['item']['menu_id']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">ɾ��</a></td>
	</tr>
	<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
</table>
<!--�˵��б� ����-->
</form>
<script language="javascript">
var url = "<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>";

 function change_menu(obj){
  window.location.href=url+"&menu_id="+obj
 }
</script>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="new"): ?>

<script language="javascript">
var url = "<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&action=<? if (!isset($_REQUEST['action'])) $_REQUEST['action'] = ''; echo $_REQUEST['action']; ?>";

 function change_menu(obj){
  window.location.href=url+"&menu_id="+obj
 }
</script>

<ul class="nav3"> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&action=article" id="c_so">����վ��</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&action=page" id="c_so">ҳ��վ��</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&action=code" id="c_so">ģ��վ��</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&action=url" id="c_so">��תվ��</a></li> 
</ul> 
<div class="module_add">
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&action=<? if (!isset($_REQUEST['action'])) $_REQUEST['action'] = ''; echo $_REQUEST['action']; ?>" method="post">
	
	<div style="border:1px solid #CCCCCC;">
	<? if (!isset($_REQUEST['action'])) $_REQUEST['action']=''; ;if (  $_REQUEST['action']=="url"): ?>
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['site_result']['id'])) $this->magic_vars['_A']['site_result']['id'] = ''; echo $this->magic_vars['_A']['site_result']['id']; ?>" />�޸���ת��ַ ��<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">���</a>��<? else: ?>�����ת��ַ<? endif; ?><input type="hidden" name="type" value="url" /></strong> (
	<select onchange="change_menu(this.value)" name="menu_id" id="menu_id">
	<? $this->magic_vars['query_type']='GetSiteMenuList';$data = array('var'=>'item','limit'=>'all');$default = '';  require_once(ROOT_PATH.'modules/admin/admin.class.php');$this->magic_vars['magic_result'] = adminClass::GetSiteMenuList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
	<option value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" <? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']='';if (!isset($_REQUEST['menu_id'])) $_REQUEST['menu_id']='';if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']='';if (!isset($this->magic_vars['_G']['site_menu_id'])) $this->magic_vars['_G']['site_menu_id']=''; ;if (  $this->magic_vars['item']['id']== $_REQUEST['menu_id'] ||  $this->magic_vars['item']['id']== $this->magic_vars['_G']['site_menu_id']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></option>
	<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
	</select>)</div>
	
	
	<div class="module_border">
		<div class="l">��&nbsp;&nbsp;�ƣ�</div>
		<div class="c">
			<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['site_result']['name'])) $this->magic_vars['_A']['site_result']['name'] = ''; echo $this->magic_vars['_A']['site_result']['name']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��&nbsp;&nbsp;����</div>
		<div class="c">
			<input type="text" name="nid" value="<? if (!isset($this->magic_vars['_A']['site_result']['nid'])) $this->magic_vars['_A']['site_result']['nid'] = ''; echo $this->magic_vars['_A']['site_result']['nid']; ?>"  onkeyup="value=value.replace(/[^a-z0-9_]/g,'')"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��&nbsp;&nbsp;ַ��</div>
		<div class="c">
			<input type="text" name="value" value="<? if (!isset($this->magic_vars['_A']['site_result']['value'])) $this->magic_vars['_A']['site_result']['value'] = ''; echo $this->magic_vars['_A']['site_result']['value']; ?>"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">��&nbsp;&nbsp;����</div>
		<div class="c">
			<select name="pid">
			<option>��Ŀ¼</option>
			<? $this->magic_vars['query_type']='GetSite';$data = array('var'=>'item','menu_id'=>$_REQUEST['menu_id'],'lgnore'=>$this->magic_vars['_A']['site_result']['id']);$default = '';  require_once(ROOT_PATH.'modules/admin/admin.class.php');$this->magic_vars['magic_result'] = adminClass::GetSite($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
			<option value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" <? if (!isset($this->magic_vars['_A']['site_result']['pid'])) $this->magic_vars['_A']['site_result']['pid']='';if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']=''; ;if (  $this->magic_vars['_A']['site_result']['pid']== $this->magic_vars['item']['id']): ?>  selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['item']['_name'])) $this->magic_vars['item']['_name'] = ''; echo $this->magic_vars['item']['_name']; ?></option>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</select>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��&nbsp;&nbsp;��</div>
		<div class="c">
			<input type="text" name="order" value="<? if (!isset($this->magic_vars['_A']['site_result']['order'])) $this->magic_vars['_A']['site_result']['order'] = '';$_tmp = $this->magic_vars['_A']['site_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" size="6"/>
		</div>
	</div>
	
	<? if (!isset($_REQUEST['action'])) $_REQUEST['action']=''; ;elseif (  $_REQUEST['action']=="code"): ?>
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['site_result']['id'])) $this->magic_vars['_A']['site_result']['id'] = ''; echo $this->magic_vars['_A']['site_result']['id']; ?>" />�޸�ģ����Ŀ ��<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">���</a>��<? else: ?>���ģ��վ��<? endif; ?><input type="hidden" name="type" value="code" /></strong> (
	<select onchange="change_menu(this.value)" name="menu_id" id="menu_id">
	<? $this->magic_vars['query_type']='GetSiteMenuList';$data = array('var'=>'item','limit'=>'all');$default = '';  require_once(ROOT_PATH.'modules/admin/admin.class.php');$this->magic_vars['magic_result'] = adminClass::GetSiteMenuList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
	<option value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" <? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']='';if (!isset($_REQUEST['menu_id'])) $_REQUEST['menu_id']='';if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']='';if (!isset($this->magic_vars['_G']['site_menu_id'])) $this->magic_vars['_G']['site_menu_id']=''; ;if (  $this->magic_vars['item']['id']== $_REQUEST['menu_id'] ||  $this->magic_vars['item']['id']== $this->magic_vars['_G']['site_menu_id']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></option>
	<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
	</select>)</div>
	<div class="module_border">
		<div class="l">��&nbsp;&nbsp;�ƣ�</div>
		<div class="c">
			<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['site_result']['name'])) $this->magic_vars['_A']['site_result']['name'] = ''; echo $this->magic_vars['_A']['site_result']['name']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��&nbsp;&nbsp;����</div>
		<div class="c">
			<input type="text" name="nid" value="<? if (!isset($this->magic_vars['_A']['site_result']['nid'])) $this->magic_vars['_A']['site_result']['nid'] = ''; echo $this->magic_vars['_A']['site_result']['nid']; ?>"  onkeyup="value=value.replace(/[^a-z0-9_]/g,'')"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ģ�飺</div>
		<div class="c">
			<? $result = $this->magic_vars['_G']['module']; echo "<select name='value' id=value  style=''>"; if (IsExiest($result)!=false): foreach ($result as $key => $val): if ($this->magic_vars['_A']['credit_type_result']['code']==$val['nid'] ) { echo "<option value='{$val['nid']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['nid']}' >{$val['name']}</option>";} endforeach;endif; echo "</select>";?>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">��&nbsp;&nbsp;����</div>
		<div class="c">
			<select name="pid">
			<option>��Ŀ¼</option>
			<? $this->magic_vars['query_type']='GetSite';$data = array('var'=>'item','menu_id'=>$_REQUEST['menu_id'],'lgnore'=>$this->magic_vars['_A']['site_result']['id']);$default = '';  require_once(ROOT_PATH.'modules/admin/admin.class.php');$this->magic_vars['magic_result'] = adminClass::GetSite($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
			<option value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" <? if (!isset($this->magic_vars['_A']['site_result']['pid'])) $this->magic_vars['_A']['site_result']['pid']='';if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']=''; ;if (  $this->magic_vars['_A']['site_result']['pid']== $this->magic_vars['item']['id']): ?>  selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['item']['_name'])) $this->magic_vars['item']['_name'] = ''; echo $this->magic_vars['item']['_name']; ?></option>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</select>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��&nbsp;&nbsp;��</div>
		<div class="c">
			<input type="text" name="order" value="<? if (!isset($this->magic_vars['_A']['site_result']['order'])) $this->magic_vars['_A']['site_result']['order'] = '';$_tmp = $this->magic_vars['_A']['site_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" size="6"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ҳģ�壺</div>
		<div class="c">
			<input type="text" name="index_tpl" value="<? if (!isset($this->magic_vars['_A']['site_result']['index_tpl'])) $this->magic_vars['_A']['site_result']['index_tpl'] = ''; echo $this->magic_vars['_A']['site_result']['index_tpl']; ?>" size="15"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�б�ģ�壺</div>
		<div class="c">
			<input type="text" name="list_tpl" value="<? if (!isset($this->magic_vars['_A']['site_result']['list_tpl'])) $this->magic_vars['_A']['site_result']['list_tpl'] = ''; echo $this->magic_vars['_A']['site_result']['list_tpl']; ?>" size="15"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ģ�壺</div>
		<div class="c">
			<input type="text" name="content_tpl" value="<? if (!isset($this->magic_vars['_A']['site_result']['content_tpl'])) $this->magic_vars['_A']['site_result']['content_tpl'] = ''; echo $this->magic_vars['_A']['site_result']['content_tpl']; ?>" size="15"/>
		</div>
	</div>	
	
	<div class="module_border">
		<div class="l">�ؼ��� ��</div>
		<div class="c">
			<input type="text" name="keywords" value="<? if (!isset($this->magic_vars['_A']['site_result']['keywords'])) $this->magic_vars['_A']['site_result']['keywords'] = ''; echo $this->magic_vars['_A']['site_result']['keywords']; ?>" size="20"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">վ������ ��</div>
		<div class="c">
			<textarea cols="30" rows="4" name="description"><? if (!isset($this->magic_vars['_A']['site_result']['description'])) $this->magic_vars['_A']['site_result']['description'] = '';$_tmp = $this->magic_vars['_A']['site_result']['description'];$_tmp = $this->magic_modifier("html_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></textarea>
		</div>
	</div>
	
	<? if (!isset($_REQUEST['action'])) $_REQUEST['action']='';if (!isset($_REQUEST['action'])) $_REQUEST['action']=''; ;elseif (  $_REQUEST['action']=="article" ||  $_REQUEST['action']==""): ?>
	
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['site_result']['id'])) $this->magic_vars['_A']['site_result']['id'] = ''; echo $this->magic_vars['_A']['site_result']['id']; ?>" />�޸�����վ�� ��<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">���</a>��<? else: ?>�������վ��<? endif; ?><input type="hidden" name="type" value="article" /></strong> (
	<select onchange="change_menu(this.value)" name="menu_id" id="menu_id">
	<? $this->magic_vars['query_type']='GetSiteMenuList';$data = array('var'=>'item','limit'=>'all');$default = '';  require_once(ROOT_PATH.'modules/admin/admin.class.php');$this->magic_vars['magic_result'] = adminClass::GetSiteMenuList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
	<option value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" <? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']='';if (!isset($_REQUEST['menu_id'])) $_REQUEST['menu_id']='';if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']='';if (!isset($this->magic_vars['_G']['site_menu_id'])) $this->magic_vars['_G']['site_menu_id']=''; ;if (  $this->magic_vars['item']['id']== $_REQUEST['menu_id'] ||  $this->magic_vars['item']['id']== $this->magic_vars['_G']['site_menu_id']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></option>
	<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
	</select>)</div>
	
	<div class="module_border">
		<div class="l">��&nbsp;&nbsp;�ƣ�</div>
		<div class="c">
			<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['site_result']['name'])) $this->magic_vars['_A']['site_result']['name'] = ''; echo $this->magic_vars['_A']['site_result']['name']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��&nbsp;&nbsp;����</div>
		<div class="c">
			<input type="text" name="nid" value="<? if (!isset($this->magic_vars['_A']['site_result']['nid'])) $this->magic_vars['_A']['site_result']['nid'] = ''; echo $this->magic_vars['_A']['site_result']['nid']; ?>"  onkeyup="value=value.replace(/[^a-z0-9_]/g,'')"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">������Ŀ��</div>
		<div class="c">
			<select name="value">
			<? $this->magic_vars['query_type']='GetTypeMenu';$data = array('var'=>'item');$default = '';  require_once(ROOT_PATH.'modules/articles/articles.class.php');$this->magic_vars['magic_result'] = articlesClass::GetTypeMenu($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
			<? if (!isset($this->magic_vars['item']['pid'])) $this->magic_vars['item']['pid']='';if (!isset($this->magic_vars['_A']['site_result']['value'])) $this->magic_vars['_A']['site_result']['value']=''; ;if (  $this->magic_vars['item']['pid']!= $this->magic_vars['_A']['site_result']['value']): ?>
			<option value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" <? if (!isset($this->magic_vars['_A']['site_result']['value'])) $this->magic_vars['_A']['site_result']['value']='';if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']=''; ;if (  $this->magic_vars['_A']['site_result']['value']== $this->magic_vars['item']['id']): ?>  selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['item']['_name'])) $this->magic_vars['item']['_name'] = ''; echo $this->magic_vars['item']['_name']; ?></option>
			<? endif; ?>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</select>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">	��&nbsp;&nbsp;����</div>
		<div class="c">
			<select name="pid">
			<option>��Ŀ¼</option>
			<? $this->magic_vars['query_type']='GetSite';$data = array('var'=>'item','menu_id'=>$_REQUEST['menu_id'],'lgnore'=>$this->magic_vars['_A']['site_result']['id']);$default = '';  require_once(ROOT_PATH.'modules/admin/admin.class.php');$this->magic_vars['magic_result'] = adminClass::GetSite($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
			<option value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" <? if (!isset($this->magic_vars['_A']['site_result']['pid'])) $this->magic_vars['_A']['site_result']['pid']='';if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']=''; ;if (  $this->magic_vars['_A']['site_result']['pid']== $this->magic_vars['item']['id']): ?>  selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['item']['_name'])) $this->magic_vars['item']['_name'] = ''; echo $this->magic_vars['item']['_name']; ?></option>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</select>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��&nbsp;&nbsp;��</div>
		<div class="c">
			<input type="text" name="order" value="<? if (!isset($this->magic_vars['_A']['site_result']['order'])) $this->magic_vars['_A']['site_result']['order'] = '';$_tmp = $this->magic_vars['_A']['site_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" size="6"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ҳģ�壺</div>
		<div class="c">
			<input type="text" name="index_tpl" value="<? if (!isset($this->magic_vars['_A']['site_result']['index_tpl'])) $this->magic_vars['_A']['site_result']['index_tpl'] = ''; echo $this->magic_vars['_A']['site_result']['index_tpl']; ?>" size="15"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�б�ģ�壺</div>
		<div class="c">
			<input type="text" name="list_tpl" value="<? if (!isset($this->magic_vars['_A']['site_result']['list_tpl'])) $this->magic_vars['_A']['site_result']['list_tpl'] = ''; echo $this->magic_vars['_A']['site_result']['list_tpl']; ?>" size="15"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ģ�壺</div>
		<div class="c">
			<input type="text" name="content_tpl" value="<? if (!isset($this->magic_vars['_A']['site_result']['content_tpl'])) $this->magic_vars['_A']['site_result']['content_tpl'] = ''; echo $this->magic_vars['_A']['site_result']['content_tpl']; ?>" size="15"/>
		</div>
	</div>	
	
	<div class="module_border">
		<div class="l">�ؼ��� ��</div>
		<div class="c">
			<input type="text" name="keywords" value="<? if (!isset($this->magic_vars['_A']['site_result']['keywords'])) $this->magic_vars['_A']['site_result']['keywords'] = ''; echo $this->magic_vars['_A']['site_result']['keywords']; ?>" size="20"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">վ������ ��</div>
		<div class="c">
			<textarea cols="30" rows="4" name="description"><? if (!isset($this->magic_vars['_A']['site_result']['description'])) $this->magic_vars['_A']['site_result']['description'] = '';$_tmp = $this->magic_vars['_A']['site_result']['description'];$_tmp = $this->magic_modifier("html_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></textarea>
		</div>
	</div>
	
	
	<? if (!isset($_REQUEST['action'])) $_REQUEST['action']=''; ;elseif (  $_REQUEST['action']=="page"): ?>
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['site_result']['id'])) $this->magic_vars['_A']['site_result']['id'] = ''; echo $this->magic_vars['_A']['site_result']['id']; ?>" />�޸�ҳ��վ�� ��<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">���</a>��<? else: ?>���ҳ��վ��<? endif; ?><input type="hidden" name="type" value="page" /></strong> (
	<select onchange="change_menu(this.value)" name="menu_id" id="menu_id">
	<? $this->magic_vars['query_type']='GetSiteMenuList';$data = array('var'=>'item','limit'=>'all');$default = '';  require_once(ROOT_PATH.'modules/admin/admin.class.php');$this->magic_vars['magic_result'] = adminClass::GetSiteMenuList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
	<option value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" <? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']='';if (!isset($_REQUEST['menu_id'])) $_REQUEST['menu_id']='';if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']='';if (!isset($this->magic_vars['_G']['site_menu_id'])) $this->magic_vars['_G']['site_menu_id']=''; ;if (  $this->magic_vars['item']['id']== $_REQUEST['menu_id'] ||  $this->magic_vars['item']['id']== $this->magic_vars['_G']['site_menu_id']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></option>
	<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
	</select>)</div>
	<div class="module_border">
	
	<div class="module_border">
		<div class="l">��&nbsp;&nbsp;�ƣ�</div>
		<div class="c">
			<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['site_result']['name'])) $this->magic_vars['_A']['site_result']['name'] = ''; echo $this->magic_vars['_A']['site_result']['name']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��&nbsp;&nbsp;����</div>
		<div class="c">
			<input type="text" name="nid" value="<? if (!isset($this->magic_vars['_A']['site_result']['nid'])) $this->magic_vars['_A']['site_result']['nid'] = ''; echo $this->magic_vars['_A']['site_result']['nid']; ?>"  onkeyup="value=value.replace(/[^a-z0-9_]/g,'')"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ҳ�棺</div>
		<div class="c">
			<select name="value">
			<? $this->magic_vars['query_type']='GetPageMenu';$data = array('var'=>'item');$default = '';  require_once(ROOT_PATH.'modules/articles/articles.class.php');$this->magic_vars['magic_result'] = articlesClass::GetPageMenu($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
			<? if (!isset($this->magic_vars['item']['pid'])) $this->magic_vars['item']['pid']='';if (!isset($this->magic_vars['_A']['site_result']['value'])) $this->magic_vars['_A']['site_result']['value']=''; ;if (  $this->magic_vars['item']['pid']!= $this->magic_vars['_A']['site_result']['value']): ?>
			<option value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" <? if (!isset($this->magic_vars['_A']['site_result']['value'])) $this->magic_vars['_A']['site_result']['value']='';if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']=''; ;if (  $this->magic_vars['_A']['site_result']['value']== $this->magic_vars['item']['id']): ?>  selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['item']['_name'])) $this->magic_vars['item']['_name'] = ''; echo $this->magic_vars['item']['_name']; ?></option>
			<? endif; ?>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</select>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">��&nbsp;&nbsp;����</div>
		<div class="c">
			<select name="pid">
			<option>��Ŀ¼</option>
			<? $this->magic_vars['query_type']='GetSite';$data = array('var'=>'item','menu_id'=>$_REQUEST['menu_id']);$default = '';  require_once(ROOT_PATH.'modules/admin/admin.class.php');$this->magic_vars['magic_result'] = adminClass::GetSite($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
			<? if (!isset($this->magic_vars['_A']['site_result']['pid'])) $this->magic_vars['_A']['site_result']['pid']=''; ;if (  $this->magic_vars['_A']['site_result']['pid']==0): ?>
			<? if (!isset($this->magic_vars['_A']['site_result']['id'])) $this->magic_vars['_A']['site_result']['id']='';if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']=''; ;if (  $this->magic_vars['_A']['site_result']['id']!= $this->magic_vars['item']['id']): ?>
			<option value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" <? if (!isset($this->magic_vars['_A']['site_result']['pid'])) $this->magic_vars['_A']['site_result']['pid']='';if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']=''; ;if (  $this->magic_vars['_A']['site_result']['pid']== $this->magic_vars['item']['id']): ?>  selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['item']['_name'])) $this->magic_vars['item']['_name'] = ''; echo $this->magic_vars['item']['_name']; ?></option>
			<? endif; ?>
			<? else: ?>
			<? if (!isset($this->magic_vars['_A']['site_result']['id'])) $this->magic_vars['_A']['site_result']['id']='';if (!isset($this->magic_vars['item']['pid'])) $this->magic_vars['item']['pid']=''; ;if (  $this->magic_vars['_A']['site_result']['id']!= $this->magic_vars['item']['pid']): ?>
			<option value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" <? if (!isset($this->magic_vars['_A']['site_result']['pid'])) $this->magic_vars['_A']['site_result']['pid']='';if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']=''; ;if (  $this->magic_vars['_A']['site_result']['pid']== $this->magic_vars['item']['id']): ?>  selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['item']['_name'])) $this->magic_vars['item']['_name'] = ''; echo $this->magic_vars['item']['_name']; ?></option>
			<? endif; ?>
			<? endif; ?>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</select>
		</div>
	</div>
	<div class="module_border">
		<div class="l">��&nbsp;&nbsp;��</div>
		<div class="c">
			<input type="text" name="order" value="<? if (!isset($this->magic_vars['_A']['site_result']['order'])) $this->magic_vars['_A']['site_result']['order'] = '';$_tmp = $this->magic_vars['_A']['site_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" size="6"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ҳģ�壺</div>
		<div class="c">
			<input type="text" name="index_tpl" value="<? if (!isset($this->magic_vars['_A']['site_result']['index_tpl'])) $this->magic_vars['_A']['site_result']['index_tpl'] = ''; echo $this->magic_vars['_A']['site_result']['index_tpl']; ?>" size="15"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�б�ģ�壺</div>
		<div class="c">
			<input type="text" name="list_tpl" value="<? if (!isset($this->magic_vars['_A']['site_result']['list_tpl'])) $this->magic_vars['_A']['site_result']['list_tpl'] = ''; echo $this->magic_vars['_A']['site_result']['list_tpl']; ?>" size="15"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ģ�壺</div>
		<div class="c">
			<input type="text" name="content_tpl" value="<? if (!isset($this->magic_vars['_A']['site_result']['content_tpl'])) $this->magic_vars['_A']['site_result']['content_tpl'] = ''; echo $this->magic_vars['_A']['site_result']['content_tpl']; ?>" size="15"/>
		</div>
	</div>	
	
	<div class="module_border">
		<div class="l">�ؼ��� ��</div>
		<div class="c">
			<input type="text" name="keywords" value="<? if (!isset($this->magic_vars['_A']['site_result']['keywords'])) $this->magic_vars['_A']['site_result']['keywords'] = ''; echo $this->magic_vars['_A']['site_result']['keywords']; ?>" size="20"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">վ������ ��</div>
		<div class="c">
			<textarea cols="30" rows="4" name="description"><? if (!isset($this->magic_vars['_A']['site_result']['description'])) $this->magic_vars['_A']['site_result']['description'] = '';$_tmp = $this->magic_vars['_A']['site_result']['description'];$_tmp = $this->magic_modifier("html_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></textarea>
		</div>
	</div>
	<? endif; ?>
	
	<div class="module_border">
		<div class="l">��&nbsp;&nbsp;ʾ��</div>
		<div class="c">
			<? 
		$_value = explode(",","1|��ʾ,0|����");
		$display = "";$_che = $this->magic_vars['_A']['site_result']['status'];
		
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
		<div class="l">��&nbsp;&nbsp;ע��</div>
		<div class="c">
			<textarea cols="30" rows="5" name="remark"><? if (!isset($this->magic_vars['_A']['site_result']['remark'])) $this->magic_vars['_A']['site_result']['remark'] = '';$_tmp = $this->magic_vars['_A']['site_result']['remark'];$_tmp = $this->magic_modifier("html_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></textarea>
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ"  class="xinbuton" 
 class="submit_button" /></div>
	
	</form>
	</div>
</div>
<!--�˵��б� ����-->

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "menu"): ?>
<div class="module_add">
	<div class="module_title"><strong>�˵�����</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['site_menu_result']['id'])) $this->magic_vars['_A']['site_menu_result']['id'] = ''; echo $this->magic_vars['_A']['site_menu_result']['id']; ?>" />�޸Ĳ˵� ��<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">���</a>��<? else: ?>��Ӳ˵�<? endif; ?></strong></div>
	<div class="module_border">
		<div class="c">
			��&nbsp;&nbsp;�ƣ�<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['site_menu_result']['name'])) $this->magic_vars['_A']['site_menu_result']['name'] = ''; echo $this->magic_vars['_A']['site_menu_result']['name']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="c">
			��&nbsp;&nbsp;����<input type="text" name="nid" value="<? if (!isset($this->magic_vars['_A']['site_menu_result']['nid'])) $this->magic_vars['_A']['site_menu_result']['nid'] = ''; echo $this->magic_vars['_A']['site_menu_result']['nid']; ?>" onkeyup="value=value.replace(/[^a-z0-9_]/g,'')"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="c">
			��&nbsp;&nbsp;��<input type="text" name="order" value="<? if (!isset($this->magic_vars['_A']['site_menu_result']['order'])) $this->magic_vars['_A']['site_menu_result']['order'] = '';$_tmp = $this->magic_vars['_A']['site_menu_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" size="6" onkeyup="value=value.replace(/[^0-9]/g,'')"/>
		</div>
	</div>
	
	<? if (!isset($this->magic_vars['_A']['site_menu_result']['checked'])) $this->magic_vars['_A']['site_menu_result']['checked']=''; ;if (  $this->magic_vars['_A']['site_menu_result']['checked']!=1): ?>
	<div class="module_border">
		<div class="c">
			Ĭ&nbsp;&nbsp;�ϣ�<? 
		$_value = explode(",","0|��,1|��");
		$display = "";$_che = $this->magic_vars['_A']['site_menu_result']['checked'];
		
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
		?>
		</div>
	</div>
	<? else: ?>
	<input type="hidden" name="checked" value="1" />
	<? endif; ?>
	
	<div class="module_border">
		<div class="c">
			��&nbsp;&nbsp;�ݣ�<textarea cols="30" rows="5" name="contents"><? if (!isset($this->magic_vars['_A']['site_menu_result']['contents'])) $this->magic_vars['_A']['site_menu_result']['contents'] = '';$_tmp = $this->magic_vars['_A']['site_menu_result']['contents'];$_tmp = $this->magic_modifier("html_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></textarea>
		</div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="c">
			��֤�룺<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ"  class="xinbuton" 
 class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>�˵��б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">�Ƿ�Ĭ��</td>
		<td width="*" class="main_td">����</td>
	</tr>
	<? $this->magic_vars['query_type']='GetSiteMenuList';$data = array('var'=>'item','limit'=>'all');$default = '';  require_once(ROOT_PATH.'modules/admin/admin.class.php');$this->magic_vars['magic_result'] = adminClass::GetSiteMenuList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['checked'])) $this->magic_vars['item']['checked']=''; ;if (  $this->magic_vars['item']['checked']==1): ?>��<? else: ?><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&checked=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" title="��ΪĬ��">��</a><? endif; ?></td>
		<td class="main_td1" align="center"><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/list&menu=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">�鿴վ��</a>/<a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/menu&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/menu&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">ɾ��</a></td>
	</tr>
	<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
	
</table>
<!--�˵��б� ����-->
</div>
</div>

<? endif; ?>


