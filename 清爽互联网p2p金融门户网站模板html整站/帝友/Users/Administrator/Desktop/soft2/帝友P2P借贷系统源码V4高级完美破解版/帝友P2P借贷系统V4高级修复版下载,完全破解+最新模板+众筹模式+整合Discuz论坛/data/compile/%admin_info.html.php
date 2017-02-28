
<ul class="nav3"> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>" id="c_so">系统参数</a></li> 
<? $this->magic_vars['query_type']='GetSystemTypeList';$data = array('limit'=>'all');$default = '';  require_once(ROOT_PATH.'modules/admin/admin.class.php');$this->magic_vars['magic_result'] = adminClass::GetSystemTypeList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>&type_id=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>&name=<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>" id="c_so"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a></li> 
<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type" id="c_so">添加类型</a></li> 
</ul> 

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type']=="" ||  $this->magic_vars['_A']['query_type']=="list"): ?>

<? if (!isset($_REQUEST['type_id'])) $_REQUEST['type_id']=''; ;if (  $_REQUEST['type_id']==""): ?>
<div class="module_add">
		<form action="" method="post"  enctype="multipart/form-data" >
		<div class="module_title"><strong><? if (!isset($this->magic_vars['MsgInfo']['admin_system_name'])) $this->magic_vars['MsgInfo']['admin_system_name'] = ''; echo $this->magic_vars['MsgInfo']['admin_system_name']; ?></strong></div>
	
		
		<div class="module_border">
		<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_system_con_webname'])) $this->magic_vars['MsgInfo']['admin_system_con_webname'] = ''; echo $this->magic_vars['MsgInfo']['admin_system_con_webname']; ?>：</div>
			<div class="c">
				<input type="text" name="con_webname" value="<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>"/>
			</div>
		</div>
		
		<div class="module_border">
		<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_system_con_weburl'])) $this->magic_vars['MsgInfo']['admin_system_con_weburl'] = ''; echo $this->magic_vars['MsgInfo']['admin_system_con_weburl']; ?>：</div>
			<div class="c">
				<input type="text" name="con_weburl" value="<? if (!isset($this->magic_vars['_G']['system']['con_weburl'])) $this->magic_vars['_G']['system']['con_weburl'] = ''; echo $this->magic_vars['_G']['system']['con_weburl']; ?>"/>
			</div>
		</div>
		
		<div class="module_border">
		<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_system_con_webpath'])) $this->magic_vars['MsgInfo']['admin_system_con_webpath'] = ''; echo $this->magic_vars['MsgInfo']['admin_system_con_webpath']; ?>：</div>
			<div class="c">
				<input type="text" name="con_webpath" value="<? if (!isset($this->magic_vars['_G']['system']['con_webpath'])) $this->magic_vars['_G']['system']['con_webpath'] = ''; echo $this->magic_vars['_G']['system']['con_webpath']; ?>"/>
			</div>
		</div>
		
		<div class="module_border">
		<div class="d">网站logo：</div>
			<div class="c">
				<input type="text" name="con_logo" value="<? if (!isset($this->magic_vars['_G']['system']['con_logo'])) $this->magic_vars['_G']['system']['con_logo'] = ''; echo $this->magic_vars['_G']['system']['con_logo']; ?>"/>请填写完整的路径
			</div>
		</div>
		<div class="module_border">
		<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_system_con_beian'])) $this->magic_vars['MsgInfo']['admin_system_con_beian'] = ''; echo $this->magic_vars['MsgInfo']['admin_system_con_beian']; ?>：</div>
			<div class="c">
				<input type="text" name="con_beian" value="<? if (!isset($this->magic_vars['_G']['system']['con_beian'])) $this->magic_vars['_G']['system']['con_beian'] = ''; echo $this->magic_vars['_G']['system']['con_beian']; ?>"/>
			</div>
		</div>
		
		<div class="module_border">
		<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_system_con_template'])) $this->magic_vars['MsgInfo']['admin_system_con_template'] = ''; echo $this->magic_vars['MsgInfo']['admin_system_con_template']; ?>：</div>
			<div class="c">
				<input type="text" name="con_template" value="<? if (!isset($this->magic_vars['_G']['system']['con_template'])) $this->magic_vars['_G']['system']['con_template'] = ''; echo $this->magic_vars['_G']['system']['con_template']; ?>"/>
			</div>
		</div>
		
		<div class="module_border">
		<div class="d">网站后台地址：</div>
			<div class="c">
				<input type="text" name="con_houtai" value="<? if (!isset($this->magic_vars['_G']['system']['con_houtai'])) $this->magic_vars['_G']['system']['con_houtai'] = ''; echo $this->magic_vars['_G']['system']['con_houtai']; ?>"/>
			</div>
		</div>
		
		<div class="module_border">
		<div class="d">网站关键字：</div>
			<div class="c">
				<textarea name="con_keywords" cols="50" rows="5"><? if (!isset($this->magic_vars['_G']['system']['con_keywords'])) $this->magic_vars['_G']['system']['con_keywords'] = ''; echo $this->magic_vars['_G']['system']['con_keywords']; ?></textarea>
			</div>
		</div>
		
		<div class="module_border">
		<div class="d">网站描述：</div>
			<div class="c">
				<textarea name="con_description" cols="50" rows="5"><? if (!isset($this->magic_vars['_G']['system']['con_description'])) $this->magic_vars['_G']['system']['con_description'] = ''; echo $this->magic_vars['_G']['system']['con_description']; ?></textarea>
			</div>
		</div>
		<div class="module_border">
			<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_system_con_webopen'])) $this->magic_vars['MsgInfo']['admin_system_con_webopen'] = ''; echo $this->magic_vars['MsgInfo']['admin_system_con_webopen']; ?>：</div>
			<div class="c">
				<? 
		$_value = explode(",","1|是,0|否");
		$display = "";$_che = $this->magic_vars['_G']['system']['con_webopen'];
		
		foreach ($_value as $k => $v){
			$_check = "";
			$_v = explode("|",$v);
			if (!IsExiest($_v[1])) $_v[1] = $_v[0];
			if ($_che==$_v[0]){
				$_check = " checked='checked'";
			}
			if ($k>0){
				$display .= '<input type="radio" value="'.$_v[0].'"  name="con_webopen" '.$_check.'/> '.$_v[1];
			}else{
				$k0 = array($_v[0],$_v[1]);
			}
		}
		if ($_che=="" || in_array($_che,$k0)){
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_webopen" checked="checked"/> '.$k0[1].$display;
		}else{
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_webopen" /> '.$k0[1].$display;
		}
		echo $display;
		?>
			</div>
		</div>
		
		<div class="module_border">
		<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_system_con_closemsg'])) $this->magic_vars['MsgInfo']['admin_system_con_closemsg'] = ''; echo $this->magic_vars['MsgInfo']['admin_system_con_closemsg']; ?>：</div>
			<div class="c">
				<textarea name="con_closemsg" cols="50" rows="5"><? if (!isset($this->magic_vars['_G']['system']['con_closemsg'])) $this->magic_vars['_G']['system']['con_closemsg'] = ''; echo $this->magic_vars['_G']['system']['con_closemsg']; ?></textarea>
			</div>
		</div>
		
		<div class="module_border">
		<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_system_con_tongji'])) $this->magic_vars['MsgInfo']['admin_system_con_tongji'] = ''; echo $this->magic_vars['MsgInfo']['admin_system_con_tongji']; ?>：</div>
			<div class="c">
				<textarea name="con_tongji" cols="50" rows="5"><? if (!isset($this->magic_vars['_G']['system']['con_tongji'])) $this->magic_vars['_G']['system']['con_tongji'] = ''; echo $this->magic_vars['_G']['system']['con_tongji']; ?></textarea>
			</div>
		</div>
			
		
		<div class="module_submit"><input type="submit" value="<? if (!isset($this->magic_vars['MsgInfo']['admin_name_submit'])) $this->magic_vars['MsgInfo']['admin_name_submit'] = ''; echo $this->magic_vars['MsgInfo']['admin_name_submit']; ?>"  /></div>
			</form>
		</div>
<? if (!isset($_REQUEST['type_id'])) $_REQUEST['type_id']=''; ;elseif (  $_REQUEST['type_id']!=""): ?>

<div class="module_add">
		<div class="module_title"><strong><? if (!isset($_REQUEST['name'])) $_REQUEST['name'] = '';$_tmp = $_REQUEST['name'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>参数</strong> (<a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/new&type_id=<? if (!isset($_REQUEST['type_id'])) $_REQUEST['type_id'] = ''; echo $_REQUEST['type_id']; ?>">添加参数</a> )</div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
<form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/action" method="post"  >
	<tr >
	  <td width="32%" class="main_td" >参数名称</td>
	  <td width="*" class="main_td">参数值</td>
	  <td width="22%" class="main_td">变量名</td>
	   <td width="12%" class="main_td">编辑</td>
	</tr>
	<?  if(!isset($this->magic_vars['_G']['_system']) || $this->magic_vars['_G']['_system']=='') $this->magic_vars['_G']['_system'] = array();  $_from = $this->magic_vars['_G']['_system']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<? if (!isset($this->magic_vars['item']['type_id'])) $this->magic_vars['item']['type_id']='';if (!isset($_REQUEST['type_id'])) $_REQUEST['type_id']=''; ;if (  $this->magic_vars['item']['type_id']== $_REQUEST['type_id']): ?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?>class="tr2"<? endif; ?> >
	  <td   class="main_td1" ><input type="text" value="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>" name="name[<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>]"/></td>
	  <td align="left" class="main_td1" >
	  <? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type']==0): ?>
		<input type="text" value="<? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value'] = '';$_tmp = $this->magic_vars['item']['value'];$_tmp = $this->magic_modifier("br2nl",$_tmp,"");echo $_tmp;unset($_tmp); ?>" name="value[<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>]"/>
	  <? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;elseif (  $this->magic_vars['item']['type']==2): ?>
	  <textarea name="value[<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>]" cols="30" rows="4"><? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value'] = '';$_tmp = $this->magic_vars['item']['value'];$_tmp = $this->magic_modifier("br2nl",$_tmp,"");echo $_tmp;unset($_tmp); ?></textarea>
	  <? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;elseif (  $this->magic_vars['item']['type']==3): ?>
	  <input  name="value[<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>]" value="<? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value'] = '';$_tmp = $this->magic_vars['item']['value'];$_tmp = $this->magic_modifier("br2nl",$_tmp,"");echo $_tmp;unset($_tmp); ?>" size="15"> <INPUT onclick="uploadImg('value[<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>]');" type=button value=上传图片...>
	  <? else: ?>
	  <input type="radio" name="value[<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>]" value="1" <? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value']=''; ;if (  $this->magic_vars['item']['value']==1): ?> checked="checked"<? endif; ?> /> 是 <input type="radio" name="value[<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>]"  value="0"  <? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value']=''; ;if (  $this->magic_vars['item']['value']==0): ?> checked="checked"<? endif; ?>/> 否
	  <? endif; ?>
	  </td>
	  <td class="main_td1" > &nbsp;<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?></td>
	   <td class="main_td1" ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==1): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/edit&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>&type_id=<? if (!isset($_REQUEST['type_id'])) $_REQUEST['type_id'] = ''; echo $_REQUEST['type_id']; ?>">修改</a> / <a href="#" onClick="javascript:if(confirm('<? if (!isset($this->magic_vars['MsgInfo']['linkages_name_del_msg'])) $this->magic_vars['MsgInfo']['linkages_name_del_msg'] = ''; echo $this->magic_vars['MsgInfo']['linkages_name_del_msg']; ?>')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>&type_id=<? if (!isset($_REQUEST['type_id'])) $_REQUEST['type_id'] = ''; echo $_REQUEST['type_id']; ?>'"><? if (!isset($this->magic_vars['MsgInfo']['admin_name_del'])) $this->magic_vars['MsgInfo']['admin_name_del'] = ''; echo $this->magic_vars['MsgInfo']['admin_name_del']; ?></a><? else: ?> - <? endif; ?></td>
	</tr>
	<? endif; ?>
	<? endforeach; endif; unset($_from); ?>
	<tr >
	  <td  colspan="7" class="submit" ><input type="submit" value="确认修改"  />&nbsp;&nbsp;&nbsp;</td>
	</tr>
	</form>
</table>

<? else: ?>

<div class="module_add">
		<div class="module_title"><strong>添加参数</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
<form action="" method="post"  >
	<tr >
	  <td width="32%" class="main_td" >参数名称</td>
	  <td width="*" class="main_td">参数值</td>
	  <td width="22%" class="main_td">变量名</td>
	   <td width="12%" class="main_td">编辑</td>
	</tr>
	<?  if(!isset($this->magic_vars['_G']['_system']) || $this->magic_vars['_G']['_system']=='') $this->magic_vars['_G']['_system'] = array();  $_from = $this->magic_vars['_G']['_system']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code']='';if (!isset($_REQUEST['code'])) $_REQUEST['code']=''; ;if (  $this->magic_vars['item']['code']== $_REQUEST['code']): ?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?>class="tr2"<? endif; ?> >
	  <td   class="main_td1" ><input type="text" value="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("br2nl",$_tmp,"");echo $_tmp;unset($_tmp); ?>" name="name[<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>]"/></td>
	  <td align="left" class="main_td1" >
	  <? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type']==0): ?>
		<input type="text" value="<? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value'] = '';$_tmp = $this->magic_vars['item']['value'];$_tmp = $this->magic_modifier("br2nl",$_tmp,"");echo $_tmp;unset($_tmp); ?>" name="value[<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>]"/>
	  <? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;elseif (  $this->magic_vars['item']['type']==2): ?>
	  <textarea name="value[<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>]" cols="30" rows="4"><? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value'] = '';$_tmp = $this->magic_vars['item']['value'];$_tmp = $this->magic_modifier("br2nl",$_tmp,"");echo $_tmp;unset($_tmp); ?></textarea>
	  <? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;elseif (  $this->magic_vars['item']['type']==3): ?>
	  <input  name="value[<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>]" value="<? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value'] = '';$_tmp = $this->magic_vars['item']['value'];$_tmp = $this->magic_modifier("br2nl",$_tmp,"");echo $_tmp;unset($_tmp); ?>" size="15"> <INPUT onclick="uploadImg('value[<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>]');" type=button value=上传图片...>
	  <? else: ?>
	  <input type="radio" name="value[<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>]" value="1" <? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value']=''; ;if (  $this->magic_vars['item']['value']==1): ?> checked="checked"<? endif; ?> /> 是 <input type="radio" name="value[<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>]"  value="0"  <? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value']=''; ;if (  $this->magic_vars['item']['value']==0): ?> checked="checked"<? endif; ?>/> 否
	  <? endif; ?>
	  </td>
	  <td class="main_td1" > &nbsp;<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?></td>
	   <td class="main_td1" ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==1): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/edit&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>&code=<? if (!isset($_REQUEST['code'])) $_REQUEST['code'] = ''; echo $_REQUEST['code']; ?>">修改</a> / <a href="#" onClick="javascript:if(confirm('<? if (!isset($this->magic_vars['MsgInfo']['linkages_name_del_msg'])) $this->magic_vars['MsgInfo']['linkages_name_del_msg'] = ''; echo $this->magic_vars['MsgInfo']['linkages_name_del_msg']; ?>')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>&code=<? if (!isset($_REQUEST['code'])) $_REQUEST['code'] = ''; echo $_REQUEST['code']; ?>'"><? if (!isset($this->magic_vars['MsgInfo']['admin_name_del'])) $this->magic_vars['MsgInfo']['admin_name_del'] = ''; echo $this->magic_vars['MsgInfo']['admin_name_del']; ?></a><? else: ?> - <? endif; ?></td>
	</tr>
	<? endif; ?>
	<? endforeach; endif; unset($_from); ?>
	<tr >
	  <td  colspan="7" class="submit" ><input type="submit" value="确认修改"  />&nbsp;&nbsp;&nbsp;<input value="添加参数" type="button" onclick="javascript:location='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/new&code=<? if (!isset($_REQUEST['code'])) $_REQUEST['code'] = ''; echo $_REQUEST['code']; ?>';" /></td>
	</tr>
	</form>
</table>

	<? endif; ?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "type"): ?>

<div class="module_add">

<form action="" method="post" name="form1" onsubmit="return check_form()"  >
<? if (!isset($_REQUEST['action'])) $_REQUEST['action']=''; ;if (  $_REQUEST['action']=="edit"): ?><input type="hidden" value="<? if (!isset($this->magic_vars['_A']['system_result']['id'])) $this->magic_vars['_A']['system_result']['id'] = ''; echo $this->magic_vars['_A']['system_result']['id']; ?>" name="id" /><? endif; ?>
<div class="module_title"><strong><? if (!isset($_REQUEST['action'])) $_REQUEST['action']=''; ;if (  $_REQUEST['action'] == "edit"): ?>编辑<? else: ?>添加<? endif; ?>参数类型</strong></div>



<div class="module_border">
<div class="l">类 型 名 称：</div>
<div class="c">
	<input type="text" align="absmiddle" name="name" value="<? if (!isset($this->magic_vars['_A']['system_result']['name'])) $this->magic_vars['_A']['system_result']['name'] = ''; echo $this->magic_vars['_A']['system_result']['name']; ?>"/>
</div>
</div>
<div class="module_border">
		<div class="l">标识名：</div>
		<div class="c">
			<input type="text" align="absmiddle" name="nid"  value="<? if (!isset($this->magic_vars['_A']['system_result']['nid'])) $this->magic_vars['_A']['system_result']['nid'] = ''; echo $this->magic_vars['_A']['system_result']['nid']; ?>"/>
	</div>
</div>
<div class="module_border">
		<div class="l">状态：</div>
		<div class="c">
		<? 
		$_value = explode(",","1|显示,2|隐藏");
		$display = "";$_che = $this->magic_vars['_A']['system_result']['status'];
		
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

<div class="module_submit">
<input name="" type="submit" value=" 提交 " /> <input name="" type="reset" value=" 重置 " /><input type="hidden" name="style" value="1" />

</div>
</form>
</div>

<div class="module_add">
<div class="module_title"><strong>类型列表</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
	  <td class="main_td" >id</td>
	  <td width="*" class="main_td">类型名称</td>
	  <td  class="main_td">标识名</td>
	   <td class="main_td">状态</td>
	   <td class="main_td">操作</td>
	</tr>
	<? $this->magic_vars['query_type']='GetSystemTypeList';$data = array('limit'=>'all','var'=>'item');$default = '';  require_once(ROOT_PATH.'modules/admin/admin.class.php');$this->magic_vars['magic_result'] = adminClass::GetSystemTypeList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?>class="tr2"<? endif; ?> >
	  <td   class="main_td1" ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
	  <td   class="main_td1" ><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
	  <td   class="main_td1" ><? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?></td>
	  <td   class="main_td1" ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?>显示<? else: ?>隐藏<? endif; ?></td>
	   <td class="main_td1" ><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type&action=edit&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>&code=<? if (!isset($_REQUEST['code'])) $_REQUEST['code'] = ''; echo $_REQUEST['code']; ?>">修改</a> / <a href="#" onClick="javascript:if(confirm('是否删除此类型，删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type&action=del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>&code=<? if (!isset($_REQUEST['code'])) $_REQUEST['code'] = ''; echo $_REQUEST['code']; ?>'"><? if (!isset($this->magic_vars['MsgInfo']['admin_name_del'])) $this->magic_vars['MsgInfo']['admin_name_del'] = ''; echo $this->magic_vars['MsgInfo']['admin_name_del']; ?></a></td>
	</tr>
	<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
	
</table>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "new" ||  $this->magic_vars['_A']['query_type'] == "edit"): ?>

<div class="module_add">

<form action="" method="post" name="form1" onsubmit="return check_form()"  >
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type']=="edit"): ?><input type="hidden" value="<? if (!isset($this->magic_vars['_A']['system_result']['id'])) $this->magic_vars['_A']['system_result']['id'] = ''; echo $this->magic_vars['_A']['system_result']['id']; ?>" name="id" /><? endif; ?>
<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?>编辑<? else: ?>添加<? endif; ?>参数</strong></div>


<div class="module_border">
		<div class="l">所属类型：</div>
		<div class="c">
			<select name="type_id">
			<? $this->magic_vars['query_type']='GetSystemTypeList';$data = array('limit'=>'all');$default = '';  require_once(ROOT_PATH.'modules/admin/admin.class.php');$this->magic_vars['magic_result'] = adminClass::GetSystemTypeList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
			<option value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" <? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id']='';if (!isset($_REQUEST['type_id'])) $_REQUEST['type_id']=''; ;if (  $this->magic_vars['var']['id']== $_REQUEST['type_id']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></option>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</select>
	</div>
</div>

<div class="module_border">
<div class="l">参 数 名 称：</div>
<div class="c">
	<input type="text" align="absmiddle" name="name" value="<? if (!isset($this->magic_vars['_A']['system_result']['name'])) $this->magic_vars['_A']['system_result']['name'] = ''; echo $this->magic_vars['_A']['system_result']['name']; ?>"/>
</div>
</div>
<div class="module_border">
		<div class="l">变量名：</div>
		<div class="c">
			<input type="text" align="absmiddle" name="nid"  value="<? if (!isset($this->magic_vars['_A']['system_result']['nid'])) $this->magic_vars['_A']['system_result']['nid'] = ''; echo $this->magic_vars['_A']['system_result']['nid']; ?>"/>请在前面加con_
	</div>
</div>
<div class="module_border">
		<div class="l">参数类型：</div>
		<div class="c">
			
<input type="radio" value="0" name="type" checked="checked" onclick="change(0)" <? if (!isset($this->magic_vars['_A']['system_result']['type'])) $this->magic_vars['_A']['system_result']['type']=''; ;if (  $this->magic_vars['_A']['system_result']['type']==0): ?> checked="checked"<? endif; ?>/> 文本/数字 
<input type="radio" value="1" name="type" onclick="change(1)" <? if (!isset($this->magic_vars['_A']['system_result']['type'])) $this->magic_vars['_A']['system_result']['type']=''; ;if (  $this->magic_vars['_A']['system_result']['type']==1): ?> checked="checked"<? endif; ?>/> 布尔（Y/N）
<input type="radio" value="2" name="type" onclick="change(0)" <? if (!isset($this->magic_vars['_A']['system_result']['type'])) $this->magic_vars['_A']['system_result']['type']=''; ;if (  $this->magic_vars['_A']['system_result']['type']==2): ?> checked="checked"<? endif; ?>/> 多行
<input type="radio" value="3" name="type" onclick="change(0)" <? if (!isset($this->magic_vars['_A']['system_result']['type'])) $this->magic_vars['_A']['system_result']['type']=''; ;if (  $this->magic_vars['_A']['system_result']['type']==3): ?> checked="checked"<? endif; ?>/>图片
</div>
</div>
<div class="module_border">
		<div class="l">参数值：</div>
		<div class="c">
			<div id="text_v" <? if (!isset($this->magic_vars['_A']['system_result']['type'])) $this->magic_vars['_A']['system_result']['type']=''; ;if (  $this->magic_vars['_A']['system_result']['type']==1): ?>style="display:none" <? endif; ?> align="left" >
		<input type="text" align="absmiddle" name="value1"  value="<? if (!isset($this->magic_vars['_A']['system_result']['value'])) $this->magic_vars['_A']['system_result']['value'] = ''; echo $this->magic_vars['_A']['system_result']['value']; ?>"/>
	</div>
	<div id="option_v" <? if (!isset($this->magic_vars['_A']['system_result']['type'])) $this->magic_vars['_A']['system_result']['type']='';if (!isset($this->magic_vars['_A']['system_result']['type'])) $this->magic_vars['_A']['system_result']['type']=''; ;if (  $this->magic_vars['_A']['system_result']['type']==0 ||  $this->magic_vars['_A']['system_result']['type']==3): ?>style="display:none" <? endif; ?>>
		<input type="radio" value="1" name="value2" checked="checked" <? if (!isset($this->magic_vars['_A']['system_result']['value'])) $this->magic_vars['_A']['system_result']['value']=''; ;if (  $this->magic_vars['_A']['system_result']['value']==1): ?> checked="checked"<? endif; ?>/> 是
		<input type="radio" value="0" name="value2" <? if (!isset($this->magic_vars['_A']['system_result']['value'])) $this->magic_vars['_A']['system_result']['value']=''; ;if (  $this->magic_vars['_A']['system_result']['value']==0): ?> checked="checked"<? endif; ?>/> 否 
	</div>
</div>
</div>
<div class="module_border">
		<div class="l">状态：</div>
		<div class="c">
			<input type="radio" value="0" name="status" checked="checked"  <? if (!isset($this->magic_vars['_A']['system_result']['status'])) $this->magic_vars['_A']['system_result']['status']=''; ;if (  $this->magic_vars['_A']['system_result']['status']==0): ?> checked="checked"<? endif; ?>/> 系统 <input type="radio" value="1" name="status" <? if (!isset($this->magic_vars['_A']['system_result']['status'])) $this->magic_vars['_A']['system_result']['status']='';if (!isset($this->magic_vars['_A']['system_result']['status'])) $this->magic_vars['_A']['system_result']['status']=''; ;if (  $this->magic_vars['_A']['system_result']['status']==1 ||  $this->magic_vars['_A']['system_result']['status']==""): ?> checked="checked"<? endif; ?>/> 自定义
</div>
</div>

<div class="module_submit">
<input name="" type="submit" value=" 提交 " /> <input name="" type="reset" value=" 重置 " /><input type="hidden" name="style" value="1" />

</div>
</form>
</div>

<script>
function change(val){
if (val==0){
	document.getElementById("text_v").style.display ="";
	document.getElementById("option_v").style.display ="none";
}else{
	document.getElementById("text_v").style.display ="none";
	document.getElementById("option_v").style.display ="";
}
}
function check_form(){
var frm = document.forms['form1'];
 var title = frm.elements['name'].value;
 var nid = frm.elements['nid'].value;
 var errorMsg = '';
  if (title.length == 0 ) {
	errorMsg += '参数名称必须填写' + '\n';
  }
  if (nid.length == 0 ) {
	errorMsg += '变量名必须填写' + '\n';
  }
  if (errorMsg.length > 0){
	alert(errorMsg); return false;
  } else{  
	return true;
  }
}
</script>

<? endif; ?>