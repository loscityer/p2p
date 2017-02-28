<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type']=="list"): ?>
<ul class="nav3"> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" id="c_so">投票管理</a></li>  
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&action=new">添加投票</a></li> 
</ul> 
<div class="module_add">

<? if (!isset($_REQUEST['action'])) $_REQUEST['action']='';if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['action']=="new" ||  $_REQUEST['edit']!=""): ?>

<div >
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post" enctype="multipart/form-data">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['vote_result']['id'])) $this->magic_vars['_A']['vote_result']['id'] = ''; echo $this->magic_vars['_A']['vote_result']['id']; ?>" />修改投票 （<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&action=new">添加</a>）<? else: ?>添加投票<? endif; ?></strong></div>
	
	
	<div class="module_border">
		<div class="l">投票标题：</div>
		<div class="c">
			<input type="text" name="title" value="<? if (!isset($this->magic_vars['_A']['vote_result']['title'])) $this->magic_vars['_A']['vote_result']['title'] = ''; echo $this->magic_vars['_A']['vote_result']['title']; ?>"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">状态：</div>
		<div class="c">
			<? 
		$_value = explode(",","1|显示,0|关闭");
		$display = "";$_che = $this->magic_vars['_A']['vote_result']['status'];
		
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
		<div class="l">表单类型：</div>
		<div class="c">
			<? 
		$_value = explode(",","radio|单选,checked|多选");
		$display = "";$_che = $this->magic_vars['_A']['vote_result']['input'];
		
		foreach ($_value as $k => $v){
			$_check = "";
			$_v = explode("|",$v);
			if (!IsExiest($_v[1])) $_v[1] = $_v[0];
			if ($_che==$_v[0]){
				$_check = " checked='checked'";
			}
			if ($k>0){
				$display .= '<input type="radio" value="'.$_v[0].'"  name="input" '.$_check.'/> '.$_v[1];
			}else{
				$k0 = array($_v[0],$_v[1]);
			}
		}
		if ($_che=="" || in_array($_che,$k0)){
			$display = '<input type="radio" value="'.$k0[0].'"  name="input" checked="checked"/> '.$k0[1].$display;
		}else{
			$display = '<input type="radio" value="'.$k0[0].'"  name="input" /> '.$k0[1].$display;
		}
		echo $display;
		?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">所属类型：</div>
		<div class="c">
			<select name="type_id">
				<? $this->magic_vars['query_type']='GetVoteTypeList';$data = array('limit'=>'all');$default = '';  require_once(ROOT_PATH.'modules/vote/vote.class.php');$this->magic_vars['magic_result'] = voteClass::GetVoteTypeList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<option value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></option>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</select>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">简介：</div>
		<div class="c">
			<textarea name="remark" rows="5" cols="30"><? if (!isset($this->magic_vars['_A']['vote_result']['remark'])) $this->magic_vars['_A']['vote_result']['remark'] = ''; echo $this->magic_vars['_A']['vote_result']['remark']; ?></textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">排序：</div>
		<div class="c">
			<input type="text" name="order" value="<? if (!isset($this->magic_vars['_A']['vote_result']['order'])) $this->magic_vars['_A']['vote_result']['order'] = '';$_tmp = $this->magic_vars['_A']['vote_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" size="8"/>
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="确认提交" class="submit_button" /></div>
		</form>
	</div>
	</div>

<? if (!isset($_REQUEST['vote'])) $_REQUEST['vote']=''; ;elseif (   $_REQUEST['vote']!=""): ?><div class="module_add">
<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['vote_result']['title'])) $this->magic_vars['_A']['vote_result']['title'] = ''; echo $this->magic_vars['_A']['vote_result']['title']; ?></strong>答案</div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&vote=<? if (!isset($_REQUEST['vote'])) $_REQUEST['vote'] = ''; echo $_REQUEST['vote']; ?>" method="post">
	<tr >
		<td class="main_td">id</td>
		<td class="main_td">编号</td>
		<td class="main_td">答案标题</td>
		<td class="main_td">状态</td>
		<td class="main_td">排序</td>
		<td class="main_td">正确答案</td>
		<td class="main_td">操作</td>
	</tr>
	<? $this->magic_vars['query_type']='GetVoteAnswerList';$data = array('limit'=>'all','var'=>'item','vote_id'=>$this->magic_vars['_A']['vote_result']['id']);$default = '';  require_once(ROOT_PATH.'modules/vote/vote.class.php');$this->magic_vars['magic_result'] = voteClass::GetVoteAnswerList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><input type="text" value="<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>" name="nid[<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>]"  size="5" /></td>
		<td class="main_td1" align="center"><input type="text" value="<? if (!isset($this->magic_vars['item']['title'])) $this->magic_vars['item']['title'] = ''; echo $this->magic_vars['item']['title']; ?>" name="title[<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>]" /></td>
		<td class="main_td1" align="center"><select name="status[<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>]"><option value="1" <? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?> selected="selected"<? endif; ?>>开启</option><option value="0" <? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?> selected="selected"<? endif; ?>>关闭</option></select></td>
		<td class="main_td1" align="center" ><input type="text" value="<? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = '';$_tmp = $this->magic_vars['item']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" name="order[]" size="5" /><input type="hidden" name="id[<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" /></td>
		<td class="main_td1" align="center">
		<input name="answer_status[<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>]" type="checkbox" value="1" <? if (!isset($this->magic_vars['item']['answer_status'])) $this->magic_vars['item']['answer_status']=''; ;if (  $this->magic_vars['item']['answer_status']==1): ?> checked="checked"<? endif; ?>/></td>
		<td class="main_td1" align="center" width="130"><!--<a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/subnew&id=<? if (!isset($this->magic_vars['item']['type_id'])) $this->magic_vars['item']['type_id'] = ''; echo $this->magic_vars['item']['type_id']; ?>&pid=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">管理</a> /--> <a href="#" onClick="javascript:if(confirm('确认删除，删除后将不能修改')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&answer_del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>&vote_id=<? if (!isset($this->magic_vars['item']['vote_id'])) $this->magic_vars['item']['vote_id'] = ''; echo $this->magic_vars['item']['vote_id']; ?>'">删除</a></td>
	</tr>
	<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
<tr >
	<td colspan="7"  class="submit">
		<input type="submit" name="submit" value="<? if (!isset($this->magic_vars['MsgInfo']['linkages_name_submit'])) $this->magic_vars['MsgInfo']['linkages_name_submit'] = ''; echo $this->magic_vars['MsgInfo']['linkages_name_submit']; ?>" />
	</td>
</tr>
</form>	
</table>

<div class="module_add">
<form name="form1" method="post" action="" onsubmit="return check_form()" >
	<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?>修改<? else: ?>添加<? endif; ?> (<? if (!isset($this->magic_vars['_A']['vote_result']['title'])) $this->magic_vars['_A']['vote_result']['title'] = ''; echo $this->magic_vars['_A']['vote_result']['title']; ?>) 答案信息</strong></div>
	
	<div class="module_border">
		<div class="l">投票标题：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['vote_result']['title'])) $this->magic_vars['_A']['vote_result']['title'] = ''; echo $this->magic_vars['_A']['vote_result']['title']; ?>
		</div>
	</div>

	<div class="module_border">
		<div class="l">编号：</div>
		<div class="c">
			<input type="text" name="nid"  value="<? if (!isset($this->magic_vars['_A']['vote_answer_result']['nid'])) $this->magic_vars['_A']['vote_answer_result']['nid'] = ''; echo $this->magic_vars['_A']['vote_answer_result']['nid']; ?>"  size="5" />(如，A,B,C,D)
		</div>
	</div>
	<div class="module_border">
		<div class="l">答案标题：</div>
		<div class="c">
			<input type="text" name="title"  value="<? if (!isset($this->magic_vars['_A']['vote_answer_result']['title'])) $this->magic_vars['_A']['vote_answer_result']['title'] = ''; echo $this->magic_vars['_A']['vote_answer_result']['title']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">状态：</div>
		<div class="c">
			<? 
		$_value = explode(",","1|显示,0|关闭");
		$display = "";$_che = $this->magic_vars['_A']['vote_answer_result']['status'];
		
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
		<div class="l">排序：</div>
		<div class="c">
			<input type="text" name="order"  value="<? if (!isset($this->magic_vars['_A']['vote_answer_result']['order'])) $this->magic_vars['_A']['vote_answer_result']['order'] = '';$_tmp = $this->magic_vars['_A']['vote_answer_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" onkeyup="value=value.replace(/[^0-9]/g,'')"/>
		</div>
	</div>
	
	
	
	<div class="module_border">
		<div class="l">正确答案：</div>
		<div class="c">
			<input name="answer_status" type="checkbox" value="1" <? if (!isset($this->magic_vars['_A']['vote_answer_result']['answer_status'])) $this->magic_vars['_A']['vote_answer_result']['answer_status']=''; ;if (  $this->magic_vars['_A']['vote_answer_result']['answer_status']==1): ?> checked="checked"<? endif; ?>  />
		</div>
	</div>
	
	<div class="module_submit" >
		<input type="hidden" name="vote_id" value="<? if (!isset($_REQUEST['vote'])) $_REQUEST['vote'] = ''; echo $_REQUEST['vote']; ?>" />
		<input type="submit"  name="submit" value="提交" />
		<input type="reset"  name="reset" value="重置" />
	</div>
</form>
</div>
<div class="module_add">
<div class="module_title"><strong>添加多条答案</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&vote=<? if (!isset($_REQUEST['vote'])) $_REQUEST['vote'] = ''; echo $_REQUEST['vote']; ?>" method="post">
	
	<tr  class="tr2">
		<td class="main_td1" align="center">编号</td>
		<td class="main_td1" align="center">答案标题</td>
		<td class="main_td1" align="center" >排序</td>
		<td class="main_td1" align="center" >正确答案</td>
	</tr>
	<tr >
		<td class="main_td1" align="center"><input type="text"  name="nid[]" /></td>
		<td class="main_td1" align="center"><input type="text"  name="title[]" size="5" /></td>
		<td class="main_td1" align="center" ><input type="text" name="order[]" value="10" size="5" /></td>
		<td class="main_td1" align="center"><input name="answer_status[]" type="checkbox" value="1"  /></td>
	</tr>
	<tr >
		<td class="main_td1" align="center"><input type="text"  name="nid[]" /></td>
		<td class="main_td1" align="center"><input type="text"  name="title[]" size="5" /></td>
		<td class="main_td1" align="center" ><input type="text" name="order[]" value="10" size="5" /></td>
		<td class="main_td1" align="center"><input name="answer_status[]" type="checkbox" value="1"  /></td>
	</tr>
	<tr >
		<td class="main_td1" align="center"><input type="text"  name="nid[]" /></td>
		<td class="main_td1" align="center"><input type="text"  name="title[]" size="5" /></td>
		<td class="main_td1" align="center" ><input type="text" name="order[]" value="10" size="5" /></td>
		<td class="main_td1" align="center"><input name="answer_status[]" type="checkbox" value="1"  /></td>
	</tr>
	<tr >
		<td class="main_td1" align="center"><input type="text"  name="nid[]" /></td>
		<td class="main_td1" align="center"><input type="text"  name="title[]" size="5" /></td>
		<td class="main_td1" align="center" ><input type="text" name="order[]" value="10" size="5" /></td>
		<td class="main_td1" align="center"><input name="answer_status[]" type="checkbox" value="1"  /></td>
	</tr>
<tr >
	<td colspan="6"  class="submit">
		<input type="submit" name="submit" value="提交" />
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
		errorMsg += '联动的名称必须填写' + '\n';
	  }
	 
	  
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}

</script>



<? else: ?>
<div class="module_title"><strong>投票管理</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">标题</td>
		<td width="*" class="main_td">问题类型</td>
		<td width="" class="main_td">添加时间</td>
		<td width="*" class="main_td">排序</td>
		<td width="*" class="main_td">表单类型</td>
		<td width="*" class="main_td">状态</td>
		<td width="*" class="main_td">操作</td>
	</tr>
	<? $this->magic_vars['query_type']='GetVoteList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','status'=>isset($_REQUEST['status'])?$_REQUEST['status']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/vote/vote.class.php');$this->magic_vars['magic_result'] = voteClass::GetVoteList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['title'])) $this->magic_vars['item']['title'] = ''; echo $this->magic_vars['item']['title']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['type_name'])) $this->magic_vars['item']['type_name'] = ''; echo $this->magic_vars['item']['type_name']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['input'])) $this->magic_vars['item']['input']=''; ;if (  $this->magic_vars['item']['input']=='radio'): ?>单选<? else: ?>多选<? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?>显示<? else: ?>关闭<? endif; ?></td>
		<td class="main_td1" align="center"><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&vote=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">管理答案</a>/<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">修改</a>/<a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>
<? endif; ?>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "type"): ?>
<div class="module_add">
	<div class="module_title"><strong>投票类型</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['vote_type_result']['id'])) $this->magic_vars['_A']['vote_type_result']['id'] = ''; echo $this->magic_vars['_A']['vote_type_result']['id']; ?>" />修改投票类型 （<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">添加</a>）<? else: ?>添加投票类型<? endif; ?></strong></div>
	
	
	<div class="module_border">
		<div class="l">类型名称：</div>
		<div class="c">
			<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['vote_type_result']['name'])) $this->magic_vars['_A']['vote_type_result']['name'] = ''; echo $this->magic_vars['_A']['vote_type_result']['name']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">标识名：</div>
		<div class="c">
			<input type="text" name="nid" value="<? if (!isset($this->magic_vars['_A']['vote_type_result']['nid'])) $this->magic_vars['_A']['vote_type_result']['nid'] = ''; echo $this->magic_vars['_A']['vote_type_result']['nid']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">状态：</div>
		<div class="c">
			<? 
		$_value = explode(",","1|开启,2|关闭");
		$display = "";$_che = $this->magic_vars['_A']['vote_type_result']['status'];
		
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
		<div class="l">描述：</div>
		<div class="c">
			<textarea name="remark" rows="5" cols="30"><? if (!isset($this->magic_vars['_A']['vote_type_result']['remark'])) $this->magic_vars['_A']['vote_type_result']['remark'] = ''; echo $this->magic_vars['_A']['vote_type_result']['remark']; ?></textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">排序：</div>
		<div class="c">
			<input type="text" name="order" value="<? if (!isset($this->magic_vars['_A']['vote_type_result']['order'])) $this->magic_vars['_A']['vote_type_result']['order'] = '';$_tmp = $this->magic_vars['_A']['vote_type_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" size="8"/>
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="确认提交" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	
	
	
	<div class="module_title"><strong>投票类型列表</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">名称</td>
		<td width="" class="main_td">标识名</td>
		<td width="*" class="main_td">状态</td>
		<td width="*" class="main_td">排序</td>
		<td width="*" class="main_td">描述</td>
		<td width="*" class="main_td">操作</td>
	</tr>
	<? $this->magic_vars['query_type']='GetVoteTypeList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/vote/vote.class.php');$this->magic_vars['magic_result'] = voteClass::GetVoteTypeList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?>开启<? else: ?>关闭<? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = ''; echo $this->magic_vars['item']['remark']; ?></td>
		<td class="main_td1" align="center"><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">修改</a>/<a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>

<!--菜单列表 结束-->
</div>
</div>
<? endif; ?>