
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "educations" ||   $this->magic_vars['_A']['query_type'] == "list"): ?> 

<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;if (  $_REQUEST['examine']!=""): ?>

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine'] = ''; echo $_REQUEST['examine']; ?>" >
	<div class="module_border_ajax">
		<div class="l">���:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>����ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>����ͨ�� </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7"></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="��˴˱�" />
	</div>
	
</form>
</div>

<? else: ?>
<div class="module_add">
	<div class="module_title"><strong>ѧ������</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['rating_result']['id'])) $this->magic_vars['_A']['rating_result']['id'] = ''; echo $this->magic_vars['_A']['rating_result']['id']; ?>" />�޸�ѧ�� ��<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">���</a>��<? else: ?>���ѧ��<? endif; ?></strong></div>
	
	<div class="module_border">
		<div class="c">
			�û�����<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="username" value="<? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?>" /><? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?><? else: ?><input type="text" name="username" /><? endif; ?>
		</div>
	</div>
	
	
	<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?>
	<div class="module_border">
		<div class="c">
			״&nbsp;&nbsp;̬��<? if (!isset($this->magic_vars['_A']['rating_result']['status'])) $this->magic_vars['_A']['rating_result']['status'] = '';$_tmp = $this->magic_vars['_A']['rating_result']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<? endif; ?>
	
	<div class="module_border">
		<div class="c">
			ѧ&nbsp;&nbsp;�� ��<? $result = $this->magic_vars['_G']['_linkages']['rating_education']; echo "<select name='degree' id=degree  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['degree']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="c">
			��ѧ��ݣ�<?  echo "<select name='in_year' id=in_year  style=''>";  for ($i=2012;$i>=1970;$i--): if ($i==$this->magic_vars['_A']['rating_result']['in_year']) { echo "<option value='{$i}' selected>{$i}</option>"; }else{echo "<option value='{$i}' >{$i}</option>";} endfor;echo "</select>"; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			ѧ&nbsp;&nbsp;У ��<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['rating_result']['name'])) $this->magic_vars['_A']['rating_result']['name'] = ''; echo $this->magic_vars['_A']['rating_result']['name']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="c">
			ר&nbsp;&nbsp;ҵ ��<input type="text" name="professional" value="<? if (!isset($this->magic_vars['_A']['rating_result']['professional'])) $this->magic_vars['_A']['rating_result']['professional'] = ''; echo $this->magic_vars['_A']['rating_result']['professional']; ?>"/>
		</div>
	</div>

	<div class="module_border_ajax" >
		<div class="c">
			��֤�룺<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>ѧ���б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="*" class="main_td">ѧУ</td>
		<td width="*" class="main_td">ѧ��</td>
		<td width="*" class="main_td">רҵ</td>
		<td width="*" class="main_td">��ѧʱ��</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
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
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("ѧ�����","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,230,"true","","false","text");'/>���</a>/<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">ɾ��</a></td>
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
				�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>   <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>
<!--�˵��б� ����-->
</div>
</div>
<? endif; ?>


<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "job"): ?>

<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;if (  $_REQUEST['examine']!=""): ?>

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine'] = ''; echo $_REQUEST['examine']; ?>" >
	<div class="module_border_ajax">
		<div class="l">�����������:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>����ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>����ͨ�� </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7"></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="��˴˱�" />
	</div>
	
</form>
</div>

<? else: ?>
<div class="module_add">
	<div class="module_title"><strong>��������</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['rating_result']['id'])) $this->magic_vars['_A']['rating_result']['id'] = ''; echo $this->magic_vars['_A']['rating_result']['id']; ?>" />�޸Ĺ������� ��<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">���</a>��<? else: ?>��ӹ�������<? endif; ?></strong></div>
	
	<div class="module_border">
		<div class="c">
			�� �� �� ��<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="username" value="<? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?>" /><? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?><? else: ?><input type="text" name="username" /><? endif; ?>
		</div>
	</div>
	
	
	<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?>
	<div class="module_border">
		<div class="c">
			״&nbsp;&nbsp;̬��<? if (!isset($this->magic_vars['_A']['rating_result']['status'])) $this->magic_vars['_A']['rating_result']['status'] = '';$_tmp = $this->magic_vars['_A']['rating_result']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<? endif; ?>
	
	
	<div class="module_border">
		<div class="c">
			��ְ��ݣ�<?  echo "<select name='in_year' id=in_year  style=''>";  for ($i=2012;$i>=1970;$i--): if ($i==$this->magic_vars['_A']['rating_result']['in_year']) { echo "<option value='{$i}' selected>{$i}</option>"; }else{echo "<option value='{$i}' >{$i}</option>";} endfor;echo "</select>"; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��˾���ƣ�<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['rating_result']['name'])) $this->magic_vars['_A']['rating_result']['name'] = ''; echo $this->magic_vars['_A']['rating_result']['name']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�� ��<input type="text" name="department" value="<? if (!isset($this->magic_vars['_A']['rating_result']['department'])) $this->magic_vars['_A']['rating_result']['department'] = ''; echo $this->magic_vars['_A']['rating_result']['department']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			ְ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;λ ��<input type="text" name="office" value="<? if (!isset($this->magic_vars['_A']['rating_result']['office'])) $this->magic_vars['_A']['rating_result']['office'] = ''; echo $this->magic_vars['_A']['rating_result']['office']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			֤ �� �� ��<input type="text" name="prover" value="<? if (!isset($this->magic_vars['_A']['rating_result']['prover'])) $this->magic_vars['_A']['rating_result']['prover'] = ''; echo $this->magic_vars['_A']['rating_result']['prover']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			֤���绰��<input type="text" name="prover_tel" value="<? if (!isset($this->magic_vars['_A']['rating_result']['prover_tel'])) $this->magic_vars['_A']['rating_result']['prover_tel'] = ''; echo $this->magic_vars['_A']['rating_result']['prover_tel']; ?>"/>
		</div>
	</div>

	<div class="module_border_ajax" >
		<div class="c">
			�� ֤ �� ��<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>ѧ���б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="*" class="main_td">��˾</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">ְλ</td>
		<td width="*" class="main_td">��ְʱ��</td>
		<td width="*" class="main_td">֤����</td>
		<td width="*" class="main_td">֤���˵绰</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
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
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�����������","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,230,"true","","false","text");'/>���</a>/<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">ɾ��</a></td>
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
				�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>   <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>
<!--�˵��б� ����-->
</div>
</div>
<? endif; ?>



<!--��˼�¼�б� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "examine"): ?>
<div class="module_add">
<div class="module_title"><strong>��˼�¼�б�</strong></div>
</div> 
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">id</td>
		<td width="*" class="main_td">�����</td>
		<td width="*" class="main_td">ģ��</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
		<th width="" class="main_td">���</th>
		<td width="*" class="main_td">��˱�ע</td>
		<td width="*" class="main_td">���ʱ��</td>
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
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>��<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>    <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
</table>
<!--��˼�¼�б� ����-->




<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "house"): ?>

<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;if (  $_REQUEST['examine']!=""): ?>

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine'] = ''; echo $_REQUEST['examine']; ?>" >
	<div class="module_border_ajax">
		<div class="l">�����������:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>����ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>����ͨ�� </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7"></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="��˴˱�" />
	</div>
	
</form>
</div>

<? else: ?>
<div class="module_add">
	<div class="module_title"><strong>��������</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['rating_result']['id'])) $this->magic_vars['_A']['rating_result']['id'] = ''; echo $this->magic_vars['_A']['rating_result']['id']; ?>" />�޸ķ������� ��<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">���</a>��<input type="hidden" name="name" value="1" /><? else: ?>��ӷ�������<input type="hidden" name="name" value="1" /><? endif; ?></strong></div>
	
	<div class="module_border">
		<div class="c">
			�� �� �� ��<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="username" value="<? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?>" /><? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?><? else: ?><input type="text" name="username" /><? endif; ?>
		</div>
	</div>
	
	
	<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?>
	<div class="module_border">
		<div class="c">
			״&nbsp;&nbsp;̬��<? if (!isset($this->magic_vars['_A']['rating_result']['status'])) $this->magic_vars['_A']['rating_result']['status'] = '';$_tmp = $this->magic_vars['_A']['rating_result']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<? endif; ?>
	
	
	<div class="module_border">
		<div class="c">
			������ַ��<input type="text" name="address" value="<? if (!isset($this->magic_vars['_A']['rating_result']['address'])) $this->magic_vars['_A']['rating_result']['address'] = ''; echo $this->magic_vars['_A']['rating_result']['address']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			���������<input type="text" name="areas" value="<? if (!isset($this->magic_vars['_A']['rating_result']['areas'])) $this->magic_vars['_A']['rating_result']['areas'] = ''; echo $this->magic_vars['_A']['rating_result']['areas']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			������ݣ�<input type="text" name="in_year" value="<? if (!isset($this->magic_vars['_A']['rating_result']['in_year'])) $this->magic_vars['_A']['rating_result']['in_year'] = ''; echo $this->magic_vars['_A']['rating_result']['in_year']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			����״����<input type="text" name="repay" value="<? if (!isset($this->magic_vars['_A']['rating_result']['repay'])) $this->magic_vars['_A']['rating_result']['repay'] = ''; echo $this->magic_vars['_A']['rating_result']['repay']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			����Ȩ��1��<input type="text" name="holder1" value="<? if (!isset($this->magic_vars['_A']['rating_result']['holder1'])) $this->magic_vars['_A']['rating_result']['holder1'] = ''; echo $this->magic_vars['_A']['rating_result']['holder1']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��Ȩ�ݶ<input type="text" name="right1" value="<? if (!isset($this->magic_vars['_A']['rating_result']['right1'])) $this->magic_vars['_A']['rating_result']['right1'] = ''; echo $this->magic_vars['_A']['rating_result']['right1']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			����Ȩ�ˣ�<input type="text" name="holder2" value="<? if (!isset($this->magic_vars['_A']['rating_result']['holder2'])) $this->magic_vars['_A']['rating_result']['holder2'] = ''; echo $this->magic_vars['_A']['rating_result']['holder2']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��Ȩ�ݶ<input type="text" name="right2" value="<? if (!isset($this->magic_vars['_A']['rating_result']['right2'])) $this->magic_vars['_A']['rating_result']['right2'] = ''; echo $this->magic_vars['_A']['rating_result']['right2']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			�������ޣ�<input type="text" name="load_year" value="<? if (!isset($this->magic_vars['_A']['rating_result']['load_year'])) $this->magic_vars['_A']['rating_result']['load_year'] = ''; echo $this->magic_vars['_A']['rating_result']['load_year']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			ÿ�¹��<input type="text" name="repay_month" value="<? if (!isset($this->magic_vars['_A']['rating_result']['repay_month'])) $this->magic_vars['_A']['rating_result']['repay_month'] = ''; echo $this->magic_vars['_A']['rating_result']['repay_month']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��Ƿ������<input type="text" name="balance" value="<? if (!isset($this->magic_vars['_A']['rating_result']['balance'])) $this->magic_vars['_A']['rating_result']['balance'] = ''; echo $this->magic_vars['_A']['rating_result']['balance']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			�������У�<input type="text" name="bank" value="<? if (!isset($this->magic_vars['_A']['rating_result']['bank'])) $this->magic_vars['_A']['rating_result']['bank'] = ''; echo $this->magic_vars['_A']['rating_result']['bank']; ?>"/>
		</div>
	</div>

	<div class="module_border_ajax" >
		<div class="c">
			�� ֤ �� ��<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>���������б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="*" class="main_td">������ַ</td>
		<td width="*" class="main_td">�������</td>
		<td width="*" class="main_td">�������</td>
		<td width="*" class="main_td">ÿ�¹���</td>
		<td width="*" class="main_td">����״��</td>
		<td width="*" class="main_td">��������</td>
		<td width="*" class="main_td">��Ƿ���</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
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
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�����������","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,230,"true","","false","text");'/>���</a>/<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">ɾ��</a></td>
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
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>��<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>    <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>
<!--�˵��б� ����-->
</div>
</div>
<? endif; ?>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "company"): ?>

<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;if (  $_REQUEST['examine']!=""): ?>

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine'] = ''; echo $_REQUEST['examine']; ?>" >
	<div class="module_border_ajax">
		<div class="l">������λ���:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>����ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>����ͨ�� </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7"></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="��˴˱�" />
	</div>
	
</form>
</div>

<? else: ?>
<div class="module_add">
	<div class="module_title"><strong>������λ����</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['rating_result']['id'])) $this->magic_vars['_A']['rating_result']['id'] = ''; echo $this->magic_vars['_A']['rating_result']['id']; ?>" />�޸Ĺ�����λ���� ��<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">���</a>��<? else: ?>��ӹ�����λ����<? endif; ?></strong></div>
	
	<div class="module_border">
		<div class="c">
			�� �� �� ��<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="username" value="<? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?>" /><? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?><? else: ?><input type="text" name="username" /><? endif; ?>
		</div>
	</div>
	
	
	<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?>
	<div class="module_border">
		<div class="c">
			״&nbsp;&nbsp;̬��<? if (!isset($this->magic_vars['_A']['rating_result']['status'])) $this->magic_vars['_A']['rating_result']['status'] = '';$_tmp = $this->magic_vars['_A']['rating_result']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<? endif; ?>
	
	
	<div class="module_border">
		<div class="c">
			��˾���ƣ�<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['rating_result']['name'])) $this->magic_vars['_A']['rating_result']['name'] = ''; echo $this->magic_vars['_A']['rating_result']['name']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��˾���ͣ�<input type="text" name="type" value="<? if (!isset($this->magic_vars['_A']['rating_result']['type'])) $this->magic_vars['_A']['rating_result']['type'] = ''; echo $this->magic_vars['_A']['rating_result']['type']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			������ҵ��<input type="text" name="industry" value="<? if (!isset($this->magic_vars['_A']['rating_result']['industry'])) $this->magic_vars['_A']['rating_result']['industry'] = ''; echo $this->magic_vars['_A']['rating_result']['industry']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			����ְλ��<input type="text" name="office" value="<? if (!isset($this->magic_vars['_A']['rating_result']['office'])) $this->magic_vars['_A']['rating_result']['office'] = ''; echo $this->magic_vars['_A']['rating_result']['office']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��������<input type="text" name="rank" value="<? if (!isset($this->magic_vars['_A']['rating_result']['rank'])) $this->magic_vars['_A']['rating_result']['rank'] = ''; echo $this->magic_vars['_A']['rating_result']['rank']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			����ʼʱ�䣺<input type="text" name="worktime1" value="<? if (!isset($this->magic_vars['_A']['rating_result']['worktime1'])) $this->magic_vars['_A']['rating_result']['worktime1'] = ''; echo $this->magic_vars['_A']['rating_result']['worktime1']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			�������ʱ�䣺<input type="text" name="worktime2" value="<? if (!isset($this->magic_vars['_A']['rating_result']['worktime2'])) $this->magic_vars['_A']['rating_result']['worktime2'] = ''; echo $this->magic_vars['_A']['rating_result']['worktime2']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			�������ޣ�<? $result = $this->magic_vars['_G']['_linkages']['rating_workyear']; echo "<select name='workyear' id=workyear  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['workyear']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��˾�绰��<input type="text" name="tel" value="<? if (!isset($this->magic_vars['_A']['rating_result']['tel'])) $this->magic_vars['_A']['rating_result']['tel'] = ''; echo $this->magic_vars['_A']['rating_result']['tel']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��˾��ַ��<input type="text" name="address" value="<? if (!isset($this->magic_vars['_A']['rating_result']['address'])) $this->magic_vars['_A']['rating_result']['address'] = ''; echo $this->magic_vars['_A']['rating_result']['address']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��˾��ַ��<input type="text" name="weburl" value="<? if (!isset($this->magic_vars['_A']['rating_result']['weburl'])) $this->magic_vars['_A']['rating_result']['weburl'] = ''; echo $this->magic_vars['_A']['rating_result']['weburl']; ?>"/>
		</div>
	</div>

	<div class="module_border_ajax" >
		<div class="c">
			�� ֤ �� ��<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>������λ�����б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="*" class="main_td">��˾����</td>
		<td width="*" class="main_td">��˾����</td>
		<td width="*" class="main_td">������ҵ</td>
		<td width="*" class="main_td">����ְλ</td>
		<td width="*" class="main_td">��������</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
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
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("������λ���","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,230,"true","","false","text");'/>���</a>/<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">ɾ��</a></td>
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
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>��<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>    <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>
<!--�˵��б� ����-->
</div>
</div>
<? endif; ?>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "contact"): ?>

<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;if (  $_REQUEST['examine']!=""): ?>

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine'] = ''; echo $_REQUEST['examine']; ?>" >
	<div class="module_border_ajax">
		<div class="l">��ϵ��ʽ���:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>����ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>����ͨ�� </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7"></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="��˴˱�" />
	</div>
	
</form>
</div>

<? else: ?>
<div class="module_add">
	<div class="module_title"><strong>��ϵ��ʽ</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['rating_result']['id'])) $this->magic_vars['_A']['rating_result']['id'] = ''; echo $this->magic_vars['_A']['rating_result']['id']; ?>" />�޸���ϵ��ʽ��<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">���</a>��<? else: ?>�����ϵ��ʽ<? endif; ?></strong></div>
	
	<div class="module_border">
		<div class="c">
			�� �� �� ��<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="username" value="<? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?>" /><? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?><? else: ?><input type="text" name="username" /><? endif; ?>
		</div>
	</div>
	
	
	<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?>
	<div class="module_border">
		<div class="c">
			״&nbsp;&nbsp;̬��<? if (!isset($this->magic_vars['_A']['rating_result']['status'])) $this->magic_vars['_A']['rating_result']['status'] = '';$_tmp = $this->magic_vars['_A']['rating_result']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<? endif; ?>
	
	
	<div class="module_border">
		<div class="c">
			�ڶ���ϵ��������<input type="text" name="linkman2" value="<? if (!isset($this->magic_vars['_A']['rating_result']['linkman2'])) $this->magic_vars['_A']['rating_result']['linkman2'] = ''; echo $this->magic_vars['_A']['rating_result']['linkman2']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			�ڶ���ϵ�˹�ϵ��<? $result = $this->magic_vars['_G']['_linkages']['rating_relation']; echo "<select name='relation2' id=relation2  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['relation2']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			�ڶ���ϵ���ֻ���<input type="text" name="phone2" value="<? if (!isset($this->magic_vars['_A']['rating_result']['phone2'])) $this->magic_vars['_A']['rating_result']['phone2'] = ''; echo $this->magic_vars['_A']['rating_result']['phone2']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			������ϵ��������<input type="text" name="linkman3" value="<? if (!isset($this->magic_vars['_A']['rating_result']['linkman3'])) $this->magic_vars['_A']['rating_result']['linkman3'] = ''; echo $this->magic_vars['_A']['rating_result']['linkman3']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			������ϵ�˹�ϵ��<? $result = $this->magic_vars['_G']['_linkages']['rating_relation']; echo "<select name='relation3' id=relation3  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['relation3']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			������ϵ���ֻ���<input type="text" name="phone3" value="<? if (!isset($this->magic_vars['_A']['rating_result']['phone3'])) $this->magic_vars['_A']['rating_result']['phone3'] = ''; echo $this->magic_vars['_A']['rating_result']['phone3']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			QQ��<input type="text" name="qq" value="<? if (!isset($this->magic_vars['_A']['rating_result']['qq'])) $this->magic_vars['_A']['rating_result']['qq'] = ''; echo $this->magic_vars['_A']['rating_result']['qq']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			����������<input type="text" name="wangwang" value="<? if (!isset($this->magic_vars['_A']['rating_result']['wangwang'])) $this->magic_vars['_A']['rating_result']['wangwang'] = ''; echo $this->magic_vars['_A']['rating_result']['wangwang']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			MSN��<input type="text" name="msn" value="<? if (!isset($this->magic_vars['_A']['rating_result']['msn'])) $this->magic_vars['_A']['rating_result']['msn'] = ''; echo $this->magic_vars['_A']['rating_result']['msn']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			������ϵ��ʽ��<input type="text" name="other" value="<? if (!isset($this->magic_vars['_A']['rating_result']['other'])) $this->magic_vars['_A']['rating_result']['other'] = ''; echo $this->magic_vars['_A']['rating_result']['other']; ?>"/>
		</div>
	</div>

	<div class="module_border_ajax" >
		<div class="c">
			�� ֤ �� ��<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>��ϵ��ʽ�б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="*" class="main_td">�ڶ���ϵ��</td>
		<td width="*" class="main_td">�ڶ���ϵ���ֻ�</td>
		<td width="*" class="main_td">������ϵ��</td>
		<td width="*" class="main_td">������ϵ���ֻ�</td>
		<td width="*" class="main_td">QQ</td>
		<td width="*" class="main_td">��������</td>
		<td width="*" class="main_td">MSN</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
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
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("��ϵ��ʽ���","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,230,"true","","false","text");'/>���</a>/<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">ɾ��</a></td>
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
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>��<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>    <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>
<!--�˵��б� ����-->
</div>
</div>
<? endif; ?>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "info"): ?>

<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;if (  $_REQUEST['examine']!=""): ?>

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine'] = ''; echo $_REQUEST['examine']; ?>" >
	<div class="module_border_ajax">
		<div class="l">�����������:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>����ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>����ͨ�� </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7"></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="��˴˱�" />
	</div>
	
</form>
</div>

<? else: ?>
<div class="module_add">
	<div class="module_title"><strong>��������</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['rating_result']['id'])) $this->magic_vars['_A']['rating_result']['id'] = ''; echo $this->magic_vars['_A']['rating_result']['id']; ?>" />�޸ĸ������ϣ�<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">���</a>��<? else: ?>��Ӹ�������<? endif; ?></strong></div>
	
	<div class="module_border">
		<div class="c">
			�� �� �� ��<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="username" value="<? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?>" /><? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?><? else: ?><input type="text" name="username" /><? endif; ?>
		</div>
	</div>
	
	
	<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?>
	<div class="module_border">
		<div class="c">
			״&nbsp;&nbsp;̬��<? if (!isset($this->magic_vars['_A']['rating_result']['status'])) $this->magic_vars['_A']['rating_result']['status'] = '';$_tmp = $this->magic_vars['_A']['rating_result']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<? endif; ?>
	
	
	<div class="module_border">
		<div class="c">
			�Ա�<? $result = $this->magic_vars['_G']['_linkages']['rating_sex']; echo "<select name='sex' id=sex  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['sex']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			����״����<? $result = $this->magic_vars['_G']['_linkages']['rating_marry']; echo "<select name='marry' id=marry  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['marry']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��û�к��ӣ�<? $result = $this->magic_vars['_G']['_linkages']['rating_children']; echo "<select name='children' id=children  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['children']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			ÿ�����룺<? $result = $this->magic_vars['_G']['_linkages']['rating_income']; echo "<select name='income' id=income  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['income']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			Ŀǰ��ݣ�<? $result = $this->magic_vars['_G']['_linkages']['rating_dignity']; echo "<select name='dignity' id=dignity  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['dignity']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			�������ڵأ�<input type="text" name="qq" value="<? if (!isset($this->magic_vars['_A']['rating_result']['qq'])) $this->magic_vars['_A']['rating_result']['qq'] = ''; echo $this->magic_vars['_A']['rating_result']['qq']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			�Ƿ񹺳���<? $result = $this->magic_vars['_G']['_linkages']['rating_car']; echo "<select name='is_car' id=is_car  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['is_car']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			�־�ס��ַ��<input type="text" name="address" value="<? if (!isset($this->magic_vars['_A']['rating_result']['address'])) $this->magic_vars['_A']['rating_result']['address'] = ''; echo $this->magic_vars['_A']['rating_result']['address']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			�ֻ����룺<input type="text" name="phone" value="<? if (!isset($this->magic_vars['_A']['rating_result']['phone'])) $this->magic_vars['_A']['rating_result']['phone'] = ''; echo $this->magic_vars['_A']['rating_result']['phone']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			����������<textarea cols="30" rows="5" name="remark"></textarea>
		</div>
	</div>

	<div class="module_border_ajax" >
		<div class="c">
			�� ֤ �� ��<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>���������б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="*" class="main_td">�Ա�</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">�Ƿ���С��</td>
		<td width="*" class="main_td">�ֻ�����</td>
		<td width="*" class="main_td">��ס��ַ</td>
		<td width="*" class="main_td">�Ƿ񹺳�</td>
		<td width="*" class="main_td">���</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
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
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�����������","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,230,"true","","false","text");'/>���</a>/<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">ɾ��</a></td>
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
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>��<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>    <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>
<!--�˵��б� ����-->
</div>
</div>
<? endif; ?>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "assets"): ?>

<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;if (  $_REQUEST['examine']!=""): ?>

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine'] = ''; echo $_REQUEST['examine']; ?>" >
	<div class="module_border_ajax">
		<div class="l">�ʲ�״�����:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>����ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>����ͨ�� </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7"></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="��˴˱�" />
	</div>
	
</form>
</div>

<? else: ?>
<div class="module_add">
	<div class="module_title"><strong>�ʲ�״��</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['rating_result']['id'])) $this->magic_vars['_A']['rating_result']['id'] = ''; echo $this->magic_vars['_A']['rating_result']['id']; ?>" />�޸��ʲ�״����<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">���</a>��<? else: ?>����ʲ�״��<? endif; ?></strong></div>
	
	<div class="module_border">
		<div class="c">
			�� �� �� ��<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="username" value="<? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?>" /><? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?><? else: ?><input type="text" name="username" /><? endif; ?>
		</div>
	</div>
	
	
	<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?>
	<div class="module_border">
		<div class="c">
			״&nbsp;&nbsp;̬��<? if (!isset($this->magic_vars['_A']['rating_result']['status'])) $this->magic_vars['_A']['rating_result']['status'] = '';$_tmp = $this->magic_vars['_A']['rating_result']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<? endif; ?>
	
	
	<div class="module_border">
		<div class="c">
			��ծ���ͣ�<? $result = $this->magic_vars['_G']['_linkages']['rating_assetstype']; echo "<select name='assetstype' id=assetstype  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['assetstype']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��ծ���ƣ�<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['rating_result']['name'])) $this->magic_vars['_A']['rating_result']['name'] = ''; echo $this->magic_vars['_A']['rating_result']['name']; ?>">
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��<input type="text" name="account" value="<? if (!isset($this->magic_vars['_A']['rating_result']['account'])) $this->magic_vars['_A']['rating_result']['account'] = ''; echo $this->magic_vars['_A']['rating_result']['account']; ?>">
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			����˵����<textarea colspan="20" rowspan="5" name="other"></textarea>
		</div>
	</div>

	<div class="module_border_ajax" >
		<div class="c">
			�� ֤ �� ��<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>�ʲ�״���б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="*" class="main_td">��ծ����</td>
		<td width="*" class="main_td">��ծ����</td>
		<td width="*" class="main_td">���</td>
		<td width="*" class="main_td">����˵��</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
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
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�ʲ�״�����","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,230,"true","","false","text");'/>���</a>/<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">ɾ��</a></td>
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
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>��<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>    <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>
<!--�˵��б� ����-->
</div>
</div>
<? endif; ?>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "finance"): ?>

<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;if (  $_REQUEST['examine']!=""): ?>

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine'] = ''; echo $_REQUEST['examine']; ?>" >
	<div class="module_border_ajax">
		<div class="l">����״�����:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>����ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>����ͨ�� </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7"></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="��˴˱�" />
	</div>
	
</form>
</div>

<? else: ?>
<div class="module_add">
	<div class="module_title"><strong>����״��</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['rating_result']['id'])) $this->magic_vars['_A']['rating_result']['id'] = ''; echo $this->magic_vars['_A']['rating_result']['id']; ?>" />�޸Ĳ���״����<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">���</a>��<? else: ?>��Ӳ���״��<? endif; ?></strong></div>
	
	<div class="module_border">
		<div class="c">
			�� �� �� ��<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="username" value="<? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?>" /><? if (!isset($this->magic_vars['_A']['rating_result']['username'])) $this->magic_vars['_A']['rating_result']['username'] = ''; echo $this->magic_vars['_A']['rating_result']['username']; ?><? else: ?><input type="text" name="username" /><? endif; ?>
		</div>
	</div>
	
	
	<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?>
	<div class="module_border">
		<div class="c">
			״&nbsp;&nbsp;̬��<? if (!isset($this->magic_vars['_A']['rating_result']['status'])) $this->magic_vars['_A']['rating_result']['status'] = '';$_tmp = $this->magic_vars['_A']['rating_result']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"rating_approve_status");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<? endif; ?>
	
	
	<div class="module_border">
		<div class="c">
			�������ͣ�<? $result = $this->magic_vars['_G']['_linkages']['rating_finance']; echo "<select name='type' id=type  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['type']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="c">
			�������ƣ�<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['rating_result']['name'])) $this->magic_vars['_A']['rating_result']['name'] = ''; echo $this->magic_vars['_A']['rating_result']['name']; ?>">
		</div>
	</div>
	
	<div class="module_border">
		<div class="c">
			�ʽ�����<? $result = $this->magic_vars['_G']['_linkages']['rating_use_type']; echo "<select name='use_type' id=use_type  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['rating_result']['use_type']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��<input type="text" name="account" value="<? if (!isset($this->magic_vars['_A']['rating_result']['account'])) $this->magic_vars['_A']['rating_result']['account'] = ''; echo $this->magic_vars['_A']['rating_result']['account']; ?>">
		</div>
	</div>
	
	<div class="module_border">
		<div class="c">
			����˵����<textarea colspan="20" rowspan="5" name="other"></textarea>
		</div>
	</div>

	<div class="module_border_ajax" >
		<div class="c">
			�� ֤ �� ��<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>����״���б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="*" class="main_td">��������</td>
		<td width="*" class="main_td">��������</td>
		<td width="*" class="main_td">�ʽ�����</td>
		<td width="*" class="main_td">���</td>
		<td width="*" class="main_td">����˵��</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
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
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�ʲ�״�����","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,230,"true","","false","text");'/>���</a>/<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">ɾ��</a></td>
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
				<? if (!isset($this->magic_vars['MsgInfo']['users_name_username'])) $this->magic_vars['MsgInfo']['users_name_username'] = ''; echo $this->magic_vars['MsgInfo']['users_name_username']; ?>��<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>    <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>
<!--�˵��б� ����-->
</div>
</div>
<? endif; ?>



<? endif; ?>