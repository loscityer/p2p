<div class="module_add">
	<div class="module_title">上传图片处理
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="*" class="main_td">用户名</td>
		<td width="*" class="main_td">模块</td>
		<td width="*" class="main_td">文件类型</td>
		<td width="*" class="main_td">文件大小</td>
		<td width="*" class="main_td">文件名称</td>
		<td width="*" class="main_td">图片</td>
		<th width="" class="main_td">添加时间</th>
		<th width="" class="main_td">IP</th>
	</tr>
	<? $this->magic_vars['query_type']='GetUpfiles';$data = array('var'=>'loop','username'=>$_REQUEST['username']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/admin/admin.class.php');$this->magic_vars['magic_result'] = adminClass::GetUpfiles($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code'] = ''; echo $this->magic_vars['item']['code']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['filetype'])) $this->magic_vars['item']['filetype'] = ''; echo $this->magic_vars['item']['filetype']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['filesize'])) $this->magic_vars['item']['filesize'] = ''; echo $this->magic_vars['item']['filesize']; ?>K</td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['filename'])) $this->magic_vars['item']['filename'] = ''; echo $this->magic_vars['item']['filename']; ?></td>
		<td class="main_td1" align="center"><a href="<? if (!isset($this->magic_vars['item']['fileurl'])) $this->magic_vars['item']['fileurl'] = ''; echo $this->magic_vars['item']['fileurl']; ?>" target="_blank"><img src="<? if (!isset($this->magic_vars['item']['fileurl'])) $this->magic_vars['item']['fileurl'] = ''; echo $this->magic_vars['item']['fileurl']; ?>" width="50" height="50" /></a></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['addip'])) $this->magic_vars['item']['addip'] = ''; echo $this->magic_vars['item']['addip']; ?></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>';
	    
	  	function sousuoq(){
			var username = $("#username").val();
			location.href=url+"&username="+username;
		}
	  
	  </script>
	  
			</div>
			<div class="floatr">
				用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/>   <input type="button" value="搜索"  class="xinbuton" 
/ onclick="sousuoq()">
			</div>
			</td>
		</tr>
	<tr>
		<td colspan="7" class="page">
		<? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</td>
	</tr>
	<? unset($_magic_vars); ?>
</table>
