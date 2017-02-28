
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "educations" ||   $this->magic_vars['_A']['query_type'] == "list"): ?> 

<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;if (  $_REQUEST['examine']!=""): ?>

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine'] = ''; echo $_REQUEST['examine']; ?>" >
	<div class="module_border_ajax">
		<div class="l">审核:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>初审通过 <input type="radio" name="status" value="2"  checked="checked"/>初审不通过 </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">审核备注:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7"></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">验证码:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="审核此标" />
	</div>
	
</form>
</div>

<? else: ?>
<div class="module_add">
	<div class="module_title"><strong>学历资料</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['rating_result']['id'])) $this->magic_vars['_A']['rating_result']['id'] = ''; echo $this->magic_vars['_A']['rating_result']['id']; ?>" />修改学历 （<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">添加</a>）<? else: ?>添加学历<? endif; ?></strong></div>
	
	<div class="module_border">
		<div class="c">
			用户名：<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="username" value="<? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?>" /><? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?><? else: ?><input type="text" name="username" /><? endif; ?>
		</div>
	</div>
	
	
	<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?>
	<div class="module_border">
		<div class="c">
			状&nbsp;&nbsp;态：<? if (!isset($this->magic_vars['_A']['rating_result']['status'])) $this->magic_vars['_A']['rating_result']['status'] = '';$_tmp = $this->magic_vars['_A']['rating_result']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<? endif; ?>
	
	<div class="module_border">
		<div class="c">
			学&nbsp;&nbsp;历 ：<? $result = $this->magic_vars['_G']['_linkages']['rating_education']; echo "<select name='degree' id=degree  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['degree']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="c">
			入学年份：<?  echo "<select name='in_year' id=in_year  style=''>";  for ($i=2012;$i>=1970;$i--): if ($i==$this->magic_vars['_A']['rating_result']['in_year']) { echo "<option value='{$i}' selected>{$i}</option>"; }else{echo "<option value='{$i}' >{$i}</option>";} endfor;echo "</select>"; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			学&nbsp;&nbsp;校 ：<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['rating_result']['name'])) $this->magic_vars['_A']['rating_result']['name'] = ''; echo $this->magic_vars['_A']['rating_result']['name']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="c">
			专&nbsp;&nbsp;业 ：<input type="text" name="professional" value="<? if (!isset($this->magic_vars['_A']['rating_result']['professional'])) $this->magic_vars['_A']['rating_result']['professional'] = ''; echo $this->magic_vars['_A']['rating_result']['professional']; ?>"/>
		</div>
	</div>

	<div class="module_border_ajax" >
		<div class="c">
			验证码：<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="确认提交" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>学历列表</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">用户</td>
		<td width="*" class="main_td">学校</td>
		<td width="*" class="main_td">学历</td>
		<td width="*" class="main_td">专业</td>
		<td width="*" class="main_td">入学时间</td>
		<td width="*" class="main_td">状态</td>
		<td width="*" class="main_td">操作</td>
	</tr>
	<? $this->magic_vars['query_type']='GetEducationsList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/rating/rating.class.php');$this->magic_vars['magic_result'] = ratingClass::GetEducationsList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['degree'])) $this->magic_vars['item']['degree'] = '';$_tmp = $this->magic_vars['item']['degree'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_education");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['professional'])) $this->magic_vars['item']['professional'] = ''; echo $this->magic_vars['item']['professional']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['in_year'])) $this->magic_vars['item']['in_year'] = ''; echo $this->magic_vars['item']['in_year']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status'] = '';$_tmp = $this->magic_vars['item']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("学历审核","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,230,"true","","false","text");'/>审核</a>/<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">修改</a>/<a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>';
	    
	  	function sousuo(){
			var username = $("#username").val();
			location.href=url+"&username="+username;
		}
	  
	  </script>
	  
			</div>
			<div class="floatr">
				用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>   <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>
<!--菜单列表 结束-->
</div>
</div>
<? endif; ?>


<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "job"): ?>

<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;if (  $_REQUEST['examine']!=""): ?>

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine'] = ''; echo $_REQUEST['examine']; ?>" >
	<div class="module_border_ajax">
		<div class="l">工作经历审核:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>初审通过 <input type="radio" name="status" value="2"  checked="checked"/>初审不通过 </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">审核备注:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7"></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">验证码:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="审核此标" />
	</div>
	
</form>
</div>

<? else: ?>
<div class="module_add">
	<div class="module_title"><strong>工作经历</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['rating_result']['id'])) $this->magic_vars['_A']['rating_result']['id'] = ''; echo $this->magic_vars['_A']['rating_result']['id']; ?>" />修改工作经历 （<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">添加</a>）<? else: ?>添加工作经历<? endif; ?></strong></div>
	
	<div class="module_border">
		<div class="c">
			用 户 名 ：<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="username" value="<? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?>" /><? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?><? else: ?><input type="text" name="username" /><? endif; ?>
		</div>
	</div>
	
	
	<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?>
	<div class="module_border">
		<div class="c">
			状&nbsp;&nbsp;态：<? if (!isset($this->magic_vars['_A']['rating_result']['status'])) $this->magic_vars['_A']['rating_result']['status'] = '';$_tmp = $this->magic_vars['_A']['rating_result']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<? endif; ?>
	
	
	<div class="module_border">
		<div class="c">
			入职年份：<?  echo "<select name='in_year' id=in_year  style=''>";  for ($i=2012;$i>=1970;$i--): if ($i==$this->magic_vars['_A']['rating_result']['in_year']) { echo "<option value='{$i}' selected>{$i}</option>"; }else{echo "<option value='{$i}' >{$i}</option>";} endfor;echo "</select>"; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			公司名称：<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['rating_result']['name'])) $this->magic_vars['_A']['rating_result']['name'] = ''; echo $this->magic_vars['_A']['rating_result']['name']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			部&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;门 ：<input type="text" name="department" value="<? if (!isset($this->magic_vars['_A']['rating_result']['department'])) $this->magic_vars['_A']['rating_result']['department'] = ''; echo $this->magic_vars['_A']['rating_result']['department']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;位 ：<input type="text" name="office" value="<? if (!isset($this->magic_vars['_A']['rating_result']['office'])) $this->magic_vars['_A']['rating_result']['office'] = ''; echo $this->magic_vars['_A']['rating_result']['office']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			证 明 人 ：<input type="text" name="prover" value="<? if (!isset($this->magic_vars['_A']['rating_result']['prover'])) $this->magic_vars['_A']['rating_result']['prover'] = ''; echo $this->magic_vars['_A']['rating_result']['prover']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			证明电话：<input type="text" name="prover_tel" value="<? if (!isset($this->magic_vars['_A']['rating_result']['prover_tel'])) $this->magic_vars['_A']['rating_result']['prover_tel'] = ''; echo $this->magic_vars['_A']['rating_result']['prover_tel']; ?>"/>
		</div>
	</div>

	<div class="module_border_ajax" >
		<div class="c">
			验 证 码 ：<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="确认提交" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>学历列表</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">用户</td>
		<td width="*" class="main_td">公司</td>
		<td width="*" class="main_td">部门</td>
		<td width="*" class="main_td">职位</td>
		<td width="*" class="main_td">入职时间</td>
		<td width="*" class="main_td">证明人</td>
		<td width="*" class="main_td">证明人电话</td>
		<td width="*" class="main_td">状态</td>
		<td width="*" class="main_td">操作</td>
	</tr>
	<? $this->magic_vars['query_type']='GetJobList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/rating/rating.class.php');$this->magic_vars['magic_result'] = ratingClass::GetJobList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['department'])) $this->magic_vars['item']['department'] = ''; echo $this->magic_vars['item']['department']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['office'])) $this->magic_vars['item']['office'] = ''; echo $this->magic_vars['item']['office']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['in_year'])) $this->magic_vars['item']['in_year'] = ''; echo $this->magic_vars['item']['in_year']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status'] = '';$_tmp = $this->magic_vars['item']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['prover'])) $this->magic_vars['item']['prover'] = ''; echo $this->magic_vars['item']['prover']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['prover_tel'])) $this->magic_vars['item']['prover_tel'] = ''; echo $this->magic_vars['item']['prover_tel']; ?></td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("工作经历审核","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,230,"true","","false","text");'/>审核</a>/<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">修改</a>/<a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
		<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>';
	    
	  	function sousuo(){
			var username = $("#username").val();
			location.href=url+"&username="+username;
		}
	  
	  </script>
	  
			</div>
			<div class="floatr">
				用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>   <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>
<!--菜单列表 结束-->
</div>
</div>
<? endif; ?>



<!--审核记录列表 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "examine"): ?>
<div class="module_add">
<div class="module_title"><strong>审核记录列表</strong></div>
</div> 
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">id</td>
		<td width="*" class="main_td">审核人</td>
		<td width="*" class="main_td">模块</td>
		<td width="*" class="main_td">类型</td>
		<td width="*" class="main_td">文章</td>
		<th width="" class="main_td">结果</th>
		<td width="*" class="main_td">审核备注</td>
		<td width="*" class="main_td">审核时间</td>
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
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>    <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
</table>
<!--审核记录列表 结束-->




<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "house"): ?>

<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;if (  $_REQUEST['examine']!=""): ?>

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine'] = ''; echo $_REQUEST['examine']; ?>" >
	<div class="module_border_ajax">
		<div class="l">房产资料审核:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>初审通过 <input type="radio" name="status" value="2"  checked="checked"/>初审不通过 </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">审核备注:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7"></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">验证码:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="审核此标" />
	</div>
	
</form>
</div>

<? else: ?>
<div class="module_add">
	<div class="module_title"><strong>房产资料</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['rating_result']['id'])) $this->magic_vars['_A']['rating_result']['id'] = ''; echo $this->magic_vars['_A']['rating_result']['id']; ?>" />修改房产资料 （<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">添加</a>）<input type="hidden" name="name" value="1" /><? else: ?>添加房产资料<input type="hidden" name="name" value="1" /><? endif; ?></strong></div>
	
	<div class="module_border">
		<div class="c">
			用 户 名 ：<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="username" value="<? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?>" /><? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?><? else: ?><input type="text" name="username" /><? endif; ?>
		</div>
	</div>
	
	
	<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?>
	<div class="module_border">
		<div class="c">
			状&nbsp;&nbsp;态：<? if (!isset($this->magic_vars['_A']['rating_result']['status'])) $this->magic_vars['_A']['rating_result']['status'] = '';$_tmp = $this->magic_vars['_A']['rating_result']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<? endif; ?>
	
	
	<div class="module_border">
		<div class="c">
			房产地址：<input type="text" name="address" value="<? if (!isset($this->magic_vars['_A']['rating_result']['address'])) $this->magic_vars['_A']['rating_result']['address'] = ''; echo $this->magic_vars['_A']['rating_result']['address']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			建筑面积：<input type="text" name="areas" value="<? if (!isset($this->magic_vars['_A']['rating_result']['areas'])) $this->magic_vars['_A']['rating_result']['areas'] = ''; echo $this->magic_vars['_A']['rating_result']['areas']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			建筑年份：<input type="text" name="in_year" value="<? if (!isset($this->magic_vars['_A']['rating_result']['in_year'])) $this->magic_vars['_A']['rating_result']['in_year'] = ''; echo $this->magic_vars['_A']['rating_result']['in_year']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			供款状况：<input type="text" name="repay" value="<? if (!isset($this->magic_vars['_A']['rating_result']['repay'])) $this->magic_vars['_A']['rating_result']['repay'] = ''; echo $this->magic_vars['_A']['rating_result']['repay']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			所有权人1：<input type="text" name="holder1" value="<? if (!isset($this->magic_vars['_A']['rating_result']['holder1'])) $this->magic_vars['_A']['rating_result']['holder1'] = ''; echo $this->magic_vars['_A']['rating_result']['holder1']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			产权份额：<input type="text" name="right1" value="<? if (!isset($this->magic_vars['_A']['rating_result']['right1'])) $this->magic_vars['_A']['rating_result']['right1'] = ''; echo $this->magic_vars['_A']['rating_result']['right1']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			所有权人：<input type="text" name="holder2" value="<? if (!isset($this->magic_vars['_A']['rating_result']['holder2'])) $this->magic_vars['_A']['rating_result']['holder2'] = ''; echo $this->magic_vars['_A']['rating_result']['holder2']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			产权份额：<input type="text" name="right2" value="<? if (!isset($this->magic_vars['_A']['rating_result']['right2'])) $this->magic_vars['_A']['rating_result']['right2'] = ''; echo $this->magic_vars['_A']['rating_result']['right2']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			贷款年限：<input type="text" name="load_year" value="<? if (!isset($this->magic_vars['_A']['rating_result']['load_year'])) $this->magic_vars['_A']['rating_result']['load_year'] = ''; echo $this->magic_vars['_A']['rating_result']['load_year']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			每月供款：<input type="text" name="repay_month" value="<? if (!isset($this->magic_vars['_A']['rating_result']['repay_month'])) $this->magic_vars['_A']['rating_result']['repay_month'] = ''; echo $this->magic_vars['_A']['rating_result']['repay_month']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			尚欠贷款余额：<input type="text" name="balance" value="<? if (!isset($this->magic_vars['_A']['rating_result']['balance'])) $this->magic_vars['_A']['rating_result']['balance'] = ''; echo $this->magic_vars['_A']['rating_result']['balance']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			按揭银行：<input type="text" name="bank" value="<? if (!isset($this->magic_vars['_A']['rating_result']['bank'])) $this->magic_vars['_A']['rating_result']['bank'] = ''; echo $this->magic_vars['_A']['rating_result']['bank']; ?>"/>
		</div>
	</div>

	<div class="module_border_ajax" >
		<div class="c">
			验 证 码 ：<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="确认提交" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>房产资料列表</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">用户</td>
		<td width="*" class="main_td">房产地址</td>
		<td width="*" class="main_td">建筑面积</td>
		<td width="*" class="main_td">建筑年份</td>
		<td width="*" class="main_td">每月供款</td>
		<td width="*" class="main_td">供款状况</td>
		<td width="*" class="main_td">贷款年限</td>
		<td width="*" class="main_td">尚欠余额</td>
		<td width="*" class="main_td">状态</td>
		<td width="*" class="main_td">操作</td>
	</tr>
	<? $this->magic_vars['query_type']='GetHouseList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/rating/rating.class.php');$this->magic_vars['magic_result'] = ratingClass::GetHouseList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['address'])) $this->magic_vars['item']['address'] = ''; echo $this->magic_vars['item']['address']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['areas'])) $this->magic_vars['item']['areas'] = ''; echo $this->magic_vars['item']['areas']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['in_year'])) $this->magic_vars['item']['in_year'] = ''; echo $this->magic_vars['item']['in_year']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['repay_month'])) $this->magic_vars['item']['repay_month'] = ''; echo $this->magic_vars['item']['repay_month']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['repay'])) $this->magic_vars['item']['repay'] = ''; echo $this->magic_vars['item']['repay']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['load_year'])) $this->magic_vars['item']['load_year'] = ''; echo $this->magic_vars['item']['load_year']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['balance'])) $this->magic_vars['item']['balance'] = ''; echo $this->magic_vars['item']['balance']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status'] = '';$_tmp = $this->magic_vars['item']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("房产资料审核","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,230,"true","","false","text");'/>审核</a>/<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">修改</a>/<a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a></td>
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
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>    <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>
<!--菜单列表 结束-->
</div>
</div>
<? endif; ?>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "company"): ?>

<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;if (  $_REQUEST['examine']!=""): ?>

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine'] = ''; echo $_REQUEST['examine']; ?>" >
	<div class="module_border_ajax">
		<div class="l">工作单位审核:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>初审通过 <input type="radio" name="status" value="2"  checked="checked"/>初审不通过 </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">审核备注:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7"></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">验证码:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="审核此标" />
	</div>
	
</form>
</div>

<? else: ?>
<div class="module_add">
	<div class="module_title"><strong>工作单位资料</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['rating_result']['id'])) $this->magic_vars['_A']['rating_result']['id'] = ''; echo $this->magic_vars['_A']['rating_result']['id']; ?>" />修改工作单位资料 （<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">添加</a>）<? else: ?>添加工作单位资料<? endif; ?></strong></div>
	
	<div class="module_border">
		<div class="c">
			用 户 名 ：<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="username" value="<? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?>" /><? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?><? else: ?><input type="text" name="username" /><? endif; ?>
		</div>
	</div>
	
	
	<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?>
	<div class="module_border">
		<div class="c">
			状&nbsp;&nbsp;态：<? if (!isset($this->magic_vars['_A']['rating_result']['status'])) $this->magic_vars['_A']['rating_result']['status'] = '';$_tmp = $this->magic_vars['_A']['rating_result']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<? endif; ?>
	
	
	<div class="module_border">
		<div class="c">
			公司名称：<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['rating_result']['name'])) $this->magic_vars['_A']['rating_result']['name'] = ''; echo $this->magic_vars['_A']['rating_result']['name']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			公司类型：<input type="text" name="type" value="<? if (!isset($this->magic_vars['_A']['rating_result']['type'])) $this->magic_vars['_A']['rating_result']['type'] = ''; echo $this->magic_vars['_A']['rating_result']['type']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			所属行业：<input type="text" name="industry" value="<? if (!isset($this->magic_vars['_A']['rating_result']['industry'])) $this->magic_vars['_A']['rating_result']['industry'] = ''; echo $this->magic_vars['_A']['rating_result']['industry']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			工作职位：<input type="text" name="office" value="<? if (!isset($this->magic_vars['_A']['rating_result']['office'])) $this->magic_vars['_A']['rating_result']['office'] = ''; echo $this->magic_vars['_A']['rating_result']['office']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			所属级别：<input type="text" name="rank" value="<? if (!isset($this->magic_vars['_A']['rating_result']['rank'])) $this->magic_vars['_A']['rating_result']['rank'] = ''; echo $this->magic_vars['_A']['rating_result']['rank']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			服务开始时间：<input type="text" name="worktime1" value="<? if (!isset($this->magic_vars['_A']['rating_result']['worktime1'])) $this->magic_vars['_A']['rating_result']['worktime1'] = ''; echo $this->magic_vars['_A']['rating_result']['worktime1']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			服务结束时间：<input type="text" name="worktime2" value="<? if (!isset($this->magic_vars['_A']['rating_result']['worktime2'])) $this->magic_vars['_A']['rating_result']['worktime2'] = ''; echo $this->magic_vars['_A']['rating_result']['worktime2']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			工作年限：<? $result = $this->magic_vars['_G']['_linkages']['rating_workyear']; echo "<select name='workyear' id=workyear  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['workyear']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			公司电话：<input type="text" name="tel" value="<? if (!isset($this->magic_vars['_A']['rating_result']['tel'])) $this->magic_vars['_A']['rating_result']['tel'] = ''; echo $this->magic_vars['_A']['rating_result']['tel']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			公司地址：<input type="text" name="address" value="<? if (!isset($this->magic_vars['_A']['rating_result']['address'])) $this->magic_vars['_A']['rating_result']['address'] = ''; echo $this->magic_vars['_A']['rating_result']['address']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			公司网址：<input type="text" name="weburl" value="<? if (!isset($this->magic_vars['_A']['rating_result']['weburl'])) $this->magic_vars['_A']['rating_result']['weburl'] = ''; echo $this->magic_vars['_A']['rating_result']['weburl']; ?>"/>
		</div>
	</div>

	<div class="module_border_ajax" >
		<div class="c">
			验 证 码 ：<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="确认提交" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>工作单位资料列表</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">用户</td>
		<td width="*" class="main_td">公司名称</td>
		<td width="*" class="main_td">公司类型</td>
		<td width="*" class="main_td">所属行业</td>
		<td width="*" class="main_td">工作职位</td>
		<td width="*" class="main_td">工作年限</td>
		<td width="*" class="main_td">状态</td>
		<td width="*" class="main_td">操作</td>
	</tr>
	<? $this->magic_vars['query_type']='GetCompanyList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/rating/rating.class.php');$this->magic_vars['magic_result'] = ratingClass::GetCompanyList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = ''; echo $this->magic_vars['item']['type']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['industry'])) $this->magic_vars['item']['industry'] = ''; echo $this->magic_vars['item']['industry']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['office'])) $this->magic_vars['item']['office'] = ''; echo $this->magic_vars['item']['office']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['workyear'])) $this->magic_vars['item']['workyear'] = '';$_tmp = $this->magic_vars['item']['workyear'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_workyear");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status'] = '';$_tmp = $this->magic_vars['item']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("工作单位审核","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,230,"true","","false","text");'/>审核</a>/<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">修改</a>/<a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a></td>
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
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>    <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>
<!--菜单列表 结束-->
</div>
</div>
<? endif; ?>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "contact"): ?>

<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;if (  $_REQUEST['examine']!=""): ?>

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine'] = ''; echo $_REQUEST['examine']; ?>" >
	<div class="module_border_ajax">
		<div class="l">联系方式审核:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>初审通过 <input type="radio" name="status" value="2"  checked="checked"/>初审不通过 </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">审核备注:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7"></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">验证码:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="审核此标" />
	</div>
	
</form>
</div>

<? else: ?>
<div class="module_add">
	<div class="module_title"><strong>联系方式</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['rating_result']['id'])) $this->magic_vars['_A']['rating_result']['id'] = ''; echo $this->magic_vars['_A']['rating_result']['id']; ?>" />修改联系方式（<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">添加</a>）<? else: ?>添加联系方式<? endif; ?></strong></div>
	
	<div class="module_border">
		<div class="c">
			用 户 名 ：<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="username" value="<? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?>" /><? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?><? else: ?><input type="text" name="username" /><? endif; ?>
		</div>
	</div>
	
	
	<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?>
	<div class="module_border">
		<div class="c">
			状&nbsp;&nbsp;态：<? if (!isset($this->magic_vars['_A']['rating_result']['status'])) $this->magic_vars['_A']['rating_result']['status'] = '';$_tmp = $this->magic_vars['_A']['rating_result']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<? endif; ?>
	
	
	<div class="module_border">
		<div class="c">
			第二联系人姓名：<input type="text" name="linkman2" value="<? if (!isset($this->magic_vars['_A']['rating_result']['linkman2'])) $this->magic_vars['_A']['rating_result']['linkman2'] = ''; echo $this->magic_vars['_A']['rating_result']['linkman2']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			第二联系人关系：<? $result = $this->magic_vars['_G']['_linkages']['rating_relation']; echo "<select name='relation2' id=relation2  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['relation2']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			第二联系人手机：<input type="text" name="phone2" value="<? if (!isset($this->magic_vars['_A']['rating_result']['phone2'])) $this->magic_vars['_A']['rating_result']['phone2'] = ''; echo $this->magic_vars['_A']['rating_result']['phone2']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			第三联系人姓名：<input type="text" name="linkman3" value="<? if (!isset($this->magic_vars['_A']['rating_result']['linkman3'])) $this->magic_vars['_A']['rating_result']['linkman3'] = ''; echo $this->magic_vars['_A']['rating_result']['linkman3']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			第三联系人关系：<? $result = $this->magic_vars['_G']['_linkages']['rating_relation']; echo "<select name='relation3' id=relation3  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['relation3']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			第三联系人手机：<input type="text" name="phone3" value="<? if (!isset($this->magic_vars['_A']['rating_result']['phone3'])) $this->magic_vars['_A']['rating_result']['phone3'] = ''; echo $this->magic_vars['_A']['rating_result']['phone3']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			QQ：<input type="text" name="qq" value="<? if (!isset($this->magic_vars['_A']['rating_result']['qq'])) $this->magic_vars['_A']['rating_result']['qq'] = ''; echo $this->magic_vars['_A']['rating_result']['qq']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			阿里旺旺：<input type="text" name="wangwang" value="<? if (!isset($this->magic_vars['_A']['rating_result']['wangwang'])) $this->magic_vars['_A']['rating_result']['wangwang'] = ''; echo $this->magic_vars['_A']['rating_result']['wangwang']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			MSN：<input type="text" name="msn" value="<? if (!isset($this->magic_vars['_A']['rating_result']['msn'])) $this->magic_vars['_A']['rating_result']['msn'] = ''; echo $this->magic_vars['_A']['rating_result']['msn']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			其他联系方式：<input type="text" name="other" value="<? if (!isset($this->magic_vars['_A']['rating_result']['other'])) $this->magic_vars['_A']['rating_result']['other'] = ''; echo $this->magic_vars['_A']['rating_result']['other']; ?>"/>
		</div>
	</div>

	<div class="module_border_ajax" >
		<div class="c">
			验 证 码 ：<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="确认提交" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>联系方式列表</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">用户</td>
		<td width="*" class="main_td">第二联系人</td>
		<td width="*" class="main_td">第二联系人手机</td>
		<td width="*" class="main_td">第三联系人</td>
		<td width="*" class="main_td">第三联系人手机</td>
		<td width="*" class="main_td">QQ</td>
		<td width="*" class="main_td">阿里旺旺</td>
		<td width="*" class="main_td">MSN</td>
		<td width="*" class="main_td">状态</td>
		<td width="*" class="main_td">操作</td>
	</tr>
	<? $this->magic_vars['query_type']='GetContactList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/rating/rating.class.php');$this->magic_vars['magic_result'] = ratingClass::GetContactList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['linkman2'])) $this->magic_vars['item']['linkman2'] = ''; echo $this->magic_vars['item']['linkman2']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['phone2'])) $this->magic_vars['item']['phone2'] = ''; echo $this->magic_vars['item']['phone2']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['linkman3'])) $this->magic_vars['item']['linkman3'] = ''; echo $this->magic_vars['item']['linkman3']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['phone3'])) $this->magic_vars['item']['phone3'] = ''; echo $this->magic_vars['item']['phone3']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['qq'])) $this->magic_vars['item']['qq'] = ''; echo $this->magic_vars['item']['qq']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['wangwang'])) $this->magic_vars['item']['wangwang'] = ''; echo $this->magic_vars['item']['wangwang']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['msn'])) $this->magic_vars['item']['msn'] = ''; echo $this->magic_vars['item']['msn']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status'] = '';$_tmp = $this->magic_vars['item']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("联系方式审核","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,230,"true","","false","text");'/>审核</a>/<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">修改</a>/<a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a></td>
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
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>    <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>
<!--菜单列表 结束-->
</div>
</div>
<? endif; ?>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "info"): ?>

<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;if (  $_REQUEST['examine']!=""): ?>

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine'] = ''; echo $_REQUEST['examine']; ?>" >
	<div class="module_border_ajax">
		<div class="l">个人资料审核:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>初审通过 <input type="radio" name="status" value="2"  checked="checked"/>初审不通过 </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">审核备注:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7"></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">验证码:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="审核此标" />
	</div>
	
</form>
</div>

<? else: ?>
<div class="module_add">
	<div class="module_title"><strong>个人资料</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['rating_result']['id'])) $this->magic_vars['_A']['rating_result']['id'] = ''; echo $this->magic_vars['_A']['rating_result']['id']; ?>" />修改个人资料（<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">添加</a>）<? else: ?>添加个人资料<? endif; ?></strong></div>
	
	<div class="module_border">
		<div class="c">
			用 户 名 ：<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="username" value="<? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?>" /><? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?><? else: ?><input type="text" name="username" /><? endif; ?>
		</div>
	</div>
	
	
	<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?>
	<div class="module_border">
		<div class="c">
			状&nbsp;&nbsp;态：<? if (!isset($this->magic_vars['_A']['rating_result']['status'])) $this->magic_vars['_A']['rating_result']['status'] = '';$_tmp = $this->magic_vars['_A']['rating_result']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<? endif; ?>
	
	
	<div class="module_border">
		<div class="c">
			性别：<? $result = $this->magic_vars['_G']['_linkages']['rating_sex']; echo "<select name='sex' id=sex  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['sex']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			婚姻状况：<? $result = $this->magic_vars['_G']['_linkages']['rating_marry']; echo "<select name='marry' id=marry  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['marry']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			有没有孩子：<? $result = $this->magic_vars['_G']['_linkages']['rating_children']; echo "<select name='children' id=children  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['children']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			每月收入：<? $result = $this->magic_vars['_G']['_linkages']['rating_income']; echo "<select name='income' id=income  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['income']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			目前身份：<? $result = $this->magic_vars['_G']['_linkages']['rating_dignity']; echo "<select name='dignity' id=dignity  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['dignity']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			户口所在地：<input type="text" name="qq" value="<? if (!isset($this->magic_vars['_A']['rating_result']['qq'])) $this->magic_vars['_A']['rating_result']['qq'] = ''; echo $this->magic_vars['_A']['rating_result']['qq']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			是否购车：<? $result = $this->magic_vars['_G']['_linkages']['rating_car']; echo "<select name='is_car' id=is_car  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['is_car']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			现居住地址：<input type="text" name="address" value="<? if (!isset($this->magic_vars['_A']['rating_result']['address'])) $this->magic_vars['_A']['rating_result']['address'] = ''; echo $this->magic_vars['_A']['rating_result']['address']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			手机号码：<input type="text" name="phone" value="<? if (!isset($this->magic_vars['_A']['rating_result']['phone'])) $this->magic_vars['_A']['rating_result']['phone'] = ''; echo $this->magic_vars['_A']['rating_result']['phone']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			个人描述：<textarea cols="30" rows="5" name="remark"></textarea>
		</div>
	</div>

	<div class="module_border_ajax" >
		<div class="c">
			验 证 码 ：<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="确认提交" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>个人资料列表</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">用户</td>
		<td width="*" class="main_td">性别</td>
		<td width="*" class="main_td">婚姻</td>
		<td width="*" class="main_td">是否有小孩</td>
		<td width="*" class="main_td">手机号码</td>
		<td width="*" class="main_td">居住地址</td>
		<td width="*" class="main_td">是否购车</td>
		<td width="*" class="main_td">身份</td>
		<td width="*" class="main_td">状态</td>
		<td width="*" class="main_td">操作</td>
	</tr>
	<? $this->magic_vars['query_type']='GetInfoList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/rating/rating.class.php');$this->magic_vars['magic_result'] = ratingClass::GetInfoList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['sex'])) $this->magic_vars['item']['sex'] = '';$_tmp = $this->magic_vars['item']['sex'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_sex");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['marry'])) $this->magic_vars['item']['marry'] = '';$_tmp = $this->magic_vars['item']['marry'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_marry");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['children'])) $this->magic_vars['item']['children'] = '';$_tmp = $this->magic_vars['item']['children'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_children");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone'] = '';$_tmp = $this->magic_vars['item']['phone'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_phone");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['address'])) $this->magic_vars['item']['address'] = '';$_tmp = $this->magic_vars['item']['address'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_address");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['is_car'])) $this->magic_vars['item']['is_car'] = '';$_tmp = $this->magic_vars['item']['is_car'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_car");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['dignity'])) $this->magic_vars['item']['dignity'] = '';$_tmp = $this->magic_vars['item']['dignity'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_dignity");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status'] = '';$_tmp = $this->magic_vars['item']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("个人资料审核","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,230,"true","","false","text");'/>审核</a>/<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">修改</a>/<a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a></td>
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
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>    <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>
<!--菜单列表 结束-->
</div>
</div>
<? endif; ?>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "assets"): ?>

<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;if (  $_REQUEST['examine']!=""): ?>

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine'] = ''; echo $_REQUEST['examine']; ?>" >
	<div class="module_border_ajax">
		<div class="l">资产状况审核:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>初审通过 <input type="radio" name="status" value="2"  checked="checked"/>初审不通过 </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">审核备注:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7"></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">验证码:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="审核此标" />
	</div>
	
</form>
</div>

<? else: ?>
<div class="module_add">
	<div class="module_title"><strong>资产状况</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['rating_result']['id'])) $this->magic_vars['_A']['rating_result']['id'] = ''; echo $this->magic_vars['_A']['rating_result']['id']; ?>" />修改资产状况（<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">添加</a>）<? else: ?>添加资产状况<? endif; ?></strong></div>
	
	<div class="module_border">
		<div class="c">
			用 户 名 ：<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="username" value="<? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?>" /><? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?><? else: ?><input type="text" name="username" /><? endif; ?>
		</div>
	</div>
	
	
	<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?>
	<div class="module_border">
		<div class="c">
			状&nbsp;&nbsp;态：<? if (!isset($this->magic_vars['_A']['rating_result']['status'])) $this->magic_vars['_A']['rating_result']['status'] = '';$_tmp = $this->magic_vars['_A']['rating_result']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<? endif; ?>
	
	
	<div class="module_border">
		<div class="c">
			负债类型：<? $result = $this->magic_vars['_G']['_linkages']['rating_assetstype']; echo "<select name='assetstype' id=assetstype  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['assetstype']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			负债名称：<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['rating_result']['name'])) $this->magic_vars['_A']['rating_result']['name'] = ''; echo $this->magic_vars['_A']['rating_result']['name']; ?>">
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			金额：<input type="text" name="account" value="<? if (!isset($this->magic_vars['_A']['rating_result']['account'])) $this->magic_vars['_A']['rating_result']['account'] = ''; echo $this->magic_vars['_A']['rating_result']['account']; ?>">
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			其他说明：<textarea colspan="20" rowspan="5" name="other"></textarea>
		</div>
	</div>

	<div class="module_border_ajax" >
		<div class="c">
			验 证 码 ：<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="确认提交" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>资产状况列表</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">用户</td>
		<td width="*" class="main_td">负债类型</td>
		<td width="*" class="main_td">负债名称</td>
		<td width="*" class="main_td">金额</td>
		<td width="*" class="main_td">其他说明</td>
		<td width="*" class="main_td">状态</td>
		<td width="*" class="main_td">操作</td>
	</tr>
	<? $this->magic_vars['query_type']='GetAssetsList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/rating/rating.class.php');$this->magic_vars['magic_result'] = ratingClass::GetAssetsList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['assetstype'])) $this->magic_vars['item']['assetstype'] = '';$_tmp = $this->magic_vars['item']['assetstype'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_assetstype");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['other'])) $this->magic_vars['item']['other'] = ''; echo $this->magic_vars['item']['other']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status'] = '';$_tmp = $this->magic_vars['item']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("资产状况审核","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,230,"true","","false","text");'/>审核</a>/<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">修改</a>/<a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a></td>
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
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>    <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>
<!--菜单列表 结束-->
</div>
</div>
<? endif; ?>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "finance"): ?>

<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;if (  $_REQUEST['examine']!=""): ?>

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine'] = ''; echo $_REQUEST['examine']; ?>" >
	<div class="module_border_ajax">
		<div class="l">财务状况审核:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>初审通过 <input type="radio" name="status" value="2"  checked="checked"/>初审不通过 </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">审核备注:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7"></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">验证码:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="审核此标" />
	</div>
	
</form>
</div>

<? else: ?>
<div class="module_add">
	<div class="module_title"><strong>财务状况</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['rating_result']['id'])) $this->magic_vars['_A']['rating_result']['id'] = ''; echo $this->magic_vars['_A']['rating_result']['id']; ?>" />修改财务状况（<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">添加</a>）<? else: ?>添加财务状况<? endif; ?></strong></div>
	
	<div class="module_border">
		<div class="c">
			用 户 名 ：<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="username" value="<? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?>" /><? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?><? else: ?><input type="text" name="username" /><? endif; ?>
		</div>
	</div>
	
	
	<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?>
	<div class="module_border">
		<div class="c">
			状&nbsp;&nbsp;态：<? if (!isset($this->magic_vars['_A']['rating_result']['status'])) $this->magic_vars['_A']['rating_result']['status'] = '';$_tmp = $this->magic_vars['_A']['rating_result']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<? endif; ?>
	
	
	<div class="module_border">
		<div class="c">
			财务类型：<? $result = $this->magic_vars['_G']['_linkages']['rating_finance']; echo "<select name='type' id=type  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['type']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="c">
			财务名称：<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['rating_result']['name'])) $this->magic_vars['_A']['rating_result']['name'] = ''; echo $this->magic_vars['_A']['rating_result']['name']; ?>">
		</div>
	</div>
	
	<div class="module_border">
		<div class="c">
			资金流向：<? $result = $this->magic_vars['_G']['_linkages']['rating_use_type']; echo "<select name='use_type' id=use_type  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['use_type']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			金额：<input type="text" name="account" value="<? if (!isset($this->magic_vars['_A']['rating_result']['account'])) $this->magic_vars['_A']['rating_result']['account'] = ''; echo $this->magic_vars['_A']['rating_result']['account']; ?>">
		</div>
	</div>
	
	<div class="module_border">
		<div class="c">
			其他说明：<textarea colspan="20" rowspan="5" name="other"></textarea>
		</div>
	</div>

	<div class="module_border_ajax" >
		<div class="c">
			验 证 码 ：<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="确认提交" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>财务状况列表</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">用户</td>
		<td width="*" class="main_td">财务类型</td>
		<td width="*" class="main_td">财务名称</td>
		<td width="*" class="main_td">资金流向</td>
		<td width="*" class="main_td">金额</td>
		<td width="*" class="main_td">其他说明</td>
		<td width="*" class="main_td">状态</td>
		<td width="*" class="main_td">操作</td>
	</tr>
	<? $this->magic_vars['query_type']='GetFinanceList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/rating/rating.class.php');$this->magic_vars['magic_result'] = ratingClass::GetFinanceList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = '';$_tmp = $this->magic_vars['item']['type'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_finance");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['use_type'])) $this->magic_vars['item']['use_type'] = '';$_tmp = $this->magic_vars['item']['use_type'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_use_type");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['other'])) $this->magic_vars['item']['other'] = ''; echo $this->magic_vars['item']['other']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status'] = '';$_tmp = $this->magic_vars['item']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("资产状况审核","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,230,"true","","false","text");'/>审核</a>/<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">修改</a>/<a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a></td>
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
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>    <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>
<!--菜单列表 结束-->
</div>
</div>
<? endif; ?>



<? endif; ?>