
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "list"): ?>

<div class="module_add">
	<div class="module_title"><strong>֤����������</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['attestations_type_result']['id'])) $this->magic_vars['_A']['attestations_type_result']['id'] = ''; echo $this->magic_vars['_A']['attestations_type_result']['id']; ?>" />�޸�֤���������� ��<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">���</a>��<? else: ?>���֤����������<? endif; ?></strong></div>
	
	
	<div class="module_border">
		<div class="l">�������ƣ�</div>
		<div class="c">
			<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['attestations_type_result']['name'])) $this->magic_vars['_A']['attestations_type_result']['name'] = ''; echo $this->magic_vars['_A']['attestations_type_result']['name']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ʶ����</div>
		<div class="c">
			<input type="text" name="nid" value="<? if (!isset($this->magic_vars['_A']['attestations_type_result']['nid'])) $this->magic_vars['_A']['attestations_type_result']['nid'] = ''; echo $this->magic_vars['_A']['attestations_type_result']['nid']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">������</div>
		<div class="c">
			<textarea name="remark" rows="5" cols="30"><? if (!isset($this->magic_vars['_A']['attestations_type_result']['remark'])) $this->magic_vars['_A']['attestations_type_result']['remark'] = ''; echo $this->magic_vars['_A']['attestations_type_result']['remark']; ?></textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�����֣�</div>
		<div class="c">
			<input type="text" name="credit"  value="<? if (!isset($this->magic_vars['_A']['attestations_type_result']['credit'])) $this->magic_vars['_A']['attestations_type_result']['credit'] = ''; echo $this->magic_vars['_A']['attestations_type_result']['credit']; ?>"/>
		</div>
	</div>
	<div class="module_border">
		<div class="l">��Ч�ڣ�</div>
		<div class="c">
			<input type="text" name="validity"  value="<? if (!isset($this->magic_vars['_A']['attestations_type_result']['validity'])) $this->magic_vars['_A']['attestations_type_result']['validity'] = ''; echo $this->magic_vars['_A']['attestations_type_result']['validity']; ?>" size="5"/>�£�0��ʾ���ڣ�
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����</div>
		<div class="c">
			<input type="text" name="order" value="<? if (!isset($this->magic_vars['_A']['attestations_type_result']['order'])) $this->magic_vars['_A']['attestations_type_result']['order'] = '';$_tmp = $this->magic_vars['_A']['attestations_type_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" size="8"/>
		</div>
	</div>
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	
	
	
	<div class="module_title"><strong>֤�������б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">��ʶ��</td>
		<td width="*" class="main_td">������</td>
		<td width="*" class="main_td">��Ч��</td>
		<td width="*" class="main_td">���ʱ��</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
	</tr>
	<? $this->magic_vars['query_type']='GetAttestationsTypeList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/attestations/attestations.class.php');$this->magic_vars['magic_result'] = attestationsClass::GetAttestationsTypeList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['credit'])) $this->magic_vars['item']['credit'] = ''; echo $this->magic_vars['item']['credit']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['validity'])) $this->magic_vars['item']['validity']=''; ;if (  $this->magic_vars['item']['validity']==0): ?>����<? else: ?><? if (!isset($this->magic_vars['item']['validity'])) $this->magic_vars['item']['validity'] = ''; echo $this->magic_vars['item']['validity']; ?>����<? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']; ?></td>
		<td class="main_td1" align="center"><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">ɾ��</a></td>
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

<!--�ϴ���Ƭ ����-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "upload"): ?>


<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;if (  $_REQUEST['examine']!=""): ?>

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine'] = ''; echo $_REQUEST['examine']; ?>" >
	<div class="module_border_ajax">
		<div class="l">���:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>���ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>��˲�ͨ�� </div>
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
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src',/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="���ˢ��" onClick="this.src=/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="ȷ�����" />
	</div>
	
</form>
</div>

<? if (!isset($_REQUEST['check'])) $_REQUEST['check']=''; ;elseif (  $_REQUEST['check']!=""): ?>

	<form action="" method="post">
<div class="module_add">
	<div class="module_title"><strong>�û�����ͼƬ���</strong>(�ܻ��֣�<? if (!isset($this->magic_vars['_A']['attestations_credit_all'])) $this->magic_vars['_A']['attestations_credit_all'] = ''; echo $this->magic_vars['_A']['attestations_credit_all']; ?>)�ܼ������֣�<? if (!isset($this->magic_vars['_A']['attestations_type_result']['credit'])) $this->magic_vars['_A']['attestations_type_result']['credit'] = ''; echo $this->magic_vars['_A']['attestations_type_result']['credit']; ?></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">����ͼ</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">��˱�ע</td>
		<td width="*" class="main_td">���״̬</td>
		<td width="*" class="main_td">��Ч��</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">���ʱ��</td>
	</tr>
	<? $this->magic_vars['query_type']='GetAttestationsList';$data = array('var'=>'item','type_id'=>$_REQUEST['check'],'limit'=>'all','user_id'=>$_REQUEST['user_id']);$default = '';  require_once(ROOT_PATH.'modules/attestations/attestations.class.php');$this->magic_vars['magic_result'] = attestationsClass::GetAttestationsList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?><input type="hidden" name="id[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" /></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['type_name'])) $this->magic_vars['item']['type_name'] = ''; echo $this->magic_vars['item']['type_name']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['fileurl'])) $this->magic_vars['item']['fileurl']=''; ;if (  $this->magic_vars['item']['fileurl']==""): ?>-<? else: ?><a href="<? if (!isset($this->magic_vars['item']['fileurl'])) $this->magic_vars['item']['fileurl'] = ''; echo $this->magic_vars['item']['fileurl']; ?>" target="_blank"><img src="<? if (!isset($this->magic_vars['item']['fileurl'])) $this->magic_vars['item']['fileurl'] = '';$_tmp = $this->magic_vars['item']['fileurl'];$_tmp = $this->magic_modifier("litpic",$_tmp,"40,40");echo $_tmp;unset($_tmp); ?>" height="40" width="40"/></a><? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td class="main_td1" align="center"><input type="text" size="6"  value="<? if (!isset($this->magic_vars['item']['credit'])) $this->magic_vars['item']['credit'] = ''; echo $this->magic_vars['item']['credit']; ?>" name="credit[]" /></td>
		<td class="main_td1" align="center"><select name="status[]"><option value="1" <? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?> selected="selected"<? endif; ?>>���ͨ��</option><option value="2" <? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==2): ?> selected="selected"<? endif; ?>>��˲�ͨ��</option></select></td>
		
		<td class="main_td1" align="center"><input type="text" size="6"  value="<? if (!isset($this->magic_vars['item']['verify_remark'])) $this->magic_vars['item']['verify_remark'] = '';$_tmp = $this->magic_vars['item']['verify_remark'];$_tmp = $this->magic_modifier("default",$_tmp,"�����");echo $_tmp;unset($_tmp); ?>" name="verify_remark[]" /></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['validity_time'])) $this->magic_vars['item']['validity_time']=''; ;if (  $this->magic_vars['item']['validity_time']==0): ?>����<? if (!isset($this->magic_vars['item']['validity_time'])) $this->magic_vars['item']['validity_time']=''; ;elseif (  $this->magic_vars['item']['validity_time']==-1): ?>�ѹ���<? else: ?><? if (!isset($this->magic_vars['item']['validity_time'])) $this->magic_vars['item']['validity_time'] = '';$_tmp = $this->magic_vars['item']['validity_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?><? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>δ���<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?>���ͨ��<? else: ?>��˲�ͨ��<? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
	</tr>
	<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
	
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><select name="type_status"><option value="1">��ͨ��</option><option value="2">��ͨ��</option></select><input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" /><input type="submit"  name="reset" class="submit_button" value="�ύ���" /></div></td>
	</tr>
	</form>
</table>
<? else: ?>
<div class="module_add">
	<div class="module_title"><strong>�ϴ�����ͼƬ</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<? if (!isset($_REQUEST['user_id'])) $_REQUEST['user_id']=''; ;if (  $_REQUEST['user_id']==""): ?>
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong>�����û�</strong>(����˳���������)<input type="hidden" name="type" value="user_id" /></div>
	
	
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<input type="text" name="username" />
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">�û�ID��</div>
		<div class="c">
			<input type="text" name="user_id" />
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">���䣺</div>
		<div class="c">
			<input type="text" name="email" />
		</div>
	</div>
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	<? else: ?>
	<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']==""): ?>
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post" enctype="multipart/form-data">
	<div class="module_title"><strong>�ϴ�ͼƬ</strong><input type="hidden" name="user_id" value="<? if (!isset($_REQUEST['user_id'])) $_REQUEST['user_id'] = ''; echo $_REQUEST['user_id']; ?>" /></div>
	
	<div class="module_border">
		<div class="l">������᣺</div>
		<div class="c">
			<select name="type_id">
			<? $this->magic_vars['query_type']='GetAttestationsTypeList';$data = array('limit'=>'all');$default = '';  require_once(ROOT_PATH.'modules/attestations/attestations.class.php');$this->magic_vars['magic_result'] = attestationsClass::GetAttestationsTypeList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
			<option value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></option>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</select>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���1��</div>
		<div class="c" style=" width:100px">
			<input name="pic[]" type="file" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���2��</div>
		<div class="c" style=" width:100px">
			<input name="pic[]" type="file" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���3��</div>
		<div class="c" style=" width:100px">
			<input name="pic[]" type="file" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���4��</div>
		<div class="c" style=" width:100px">
			<input name="pic[]" type="file" />
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">���5��</div>
		<div class="c" style=" width:100px">
			<input name="pic[]" type="file" />
		</div>
	</div>
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	<? else: ?>
	<form action="" method="post" enctype="multipart/form-data">
	<div class="module_title"><strong>�޸����</strong><input type="hidden" name="user_id" value="<? if (!isset($_REQUEST['user_id'])) $_REQUEST['user_id'] = ''; echo $_REQUEST['user_id']; ?>" /><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['attestations_result']['id'])) $this->magic_vars['_A']['attestations_result']['id'] = ''; echo $this->magic_vars['_A']['attestations_result']['id']; ?>" /><input type="hidden" name="upfiles_id" value="<? if (!isset($this->magic_vars['_A']['attestations_result']['upfiles_id'])) $this->magic_vars['_A']['attestations_result']['upfiles_id'] = ''; echo $this->magic_vars['_A']['attestations_result']['upfiles_id']; ?>" /></div>
	
	<div class="module_border">
		<div class="l">��ƬID��</div>
		<div class="c" style=" width:100px">
			<? if (!isset($this->magic_vars['_A']['attestations_result']['id'])) $this->magic_vars['_A']['attestations_result']['id'] = ''; echo $this->magic_vars['_A']['attestations_result']['id']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">�����û���</div>
		<div class="c" style=" width:100px">
			<? if (!isset($this->magic_vars['_A']['attestations_result']['username'])) $this->magic_vars['_A']['attestations_result']['username'] = ''; echo $this->magic_vars['_A']['attestations_result']['username']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ƣ�</div>
		<div class="c" style=" width:100px">
			<input name="name" type="text" value="<? if (!isset($this->magic_vars['_A']['attestations_result']['name'])) $this->magic_vars['_A']['attestations_result']['name'] = ''; echo $this->magic_vars['_A']['attestations_result']['name']; ?>" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���ͣ�</div>
		<div class="c">
			<select name="type_id">
			<? $this->magic_vars['query_type']='GetAttestationsTypeList';$data = array('limit'=>'all');$default = '';  require_once(ROOT_PATH.'modules/attestations/attestations.class.php');$this->magic_vars['magic_result'] = attestationsClass::GetAttestationsTypeList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
			<option value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" <? if (!isset($this->magic_vars['_A']['attestations_result']['type_id'])) $this->magic_vars['_A']['attestations_result']['type_id']='';if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id']=''; ;if (  $this->magic_vars['_A']['attestations_result']['type_id']== $this->magic_vars['var']['id']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></option>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</select>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">��Ƭ��</div>
		<div class="c" style=" width:100px">
			<a href="<? if (!isset($this->magic_vars['_A']['attestations_result']['fileurl'])) $this->magic_vars['_A']['attestations_result']['fileurl'] = ''; echo $this->magic_vars['_A']['attestations_result']['fileurl']; ?>" target="_blank"><img src="<? if (!isset($this->magic_vars['_A']['attestations_result']['fileurl'])) $this->magic_vars['_A']['attestations_result']['fileurl'] = ''; echo $this->magic_vars['_A']['attestations_result']['fileurl']; ?>" height="50" /></a>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����</div>
		<div class="c" style=" width:100px">
			<input name="order" type="text" value="<? if (!isset($this->magic_vars['_A']['attestations_result']['order'])) $this->magic_vars['_A']['attestations_result']['order'] = ''; echo $this->magic_vars['_A']['attestations_result']['order']; ?>" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��飺</div>
		<div class="c" style=" width:100px">
			<input name="contents" type="text" value="<? if (!isset($this->magic_vars['_A']['attestations_result']['contents'])) $this->magic_vars['_A']['attestations_result']['contents'] = ''; echo $this->magic_vars['_A']['attestations_result']['contents']; ?>" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	<? endif; ?>
	<? endif; ?>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>ͼƬ�б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">����ͼ</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">���ʱ��</td>
		<td width="*" class="main_td">����</td>
	</tr>
	<? $this->magic_vars['query_type']='GetAttestationsList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','user_id'=>$_REQUEST['user_id'],'epage'=>'8');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/attestations/attestations.class.php');$this->magic_vars['magic_result'] = attestationsClass::GetAttestationsList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['type_name'])) $this->magic_vars['item']['type_name'] = ''; echo $this->magic_vars['item']['type_name']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['fileurl'])) $this->magic_vars['item']['fileurl']=''; ;if (  $this->magic_vars['item']['fileurl']==""): ?>-<? else: ?><a href="<? if (!isset($this->magic_vars['item']['fileurl'])) $this->magic_vars['item']['fileurl'] = ''; echo $this->magic_vars['item']['fileurl']; ?>" target="_blank"><img src="<? if (!isset($this->magic_vars['item']['fileurl'])) $this->magic_vars['item']['fileurl'] = '';$_tmp = $this->magic_vars['item']['fileurl'];$_tmp = $this->magic_modifier("litpic",$_tmp,"40,40");echo $_tmp;unset($_tmp); ?>" height="40" width="40"/></a><? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>δ���<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?>���ͨ��<? else: ?>��˲�ͨ��<? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&check=<? if (!isset($this->magic_vars['item']['type_id'])) $this->magic_vars['item']['type_id'] = ''; echo $this->magic_vars['item']['type_id']; ?>">���</a>/<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>&page=<? if (!isset($_REQUEST['page'])) $_REQUEST['page'] = ''; echo $_REQUEST['page']; ?>">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">ɾ��</a></td>
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


<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="uploads"): ?>

<div class="module_add">
	<div class="module_title"><strong>��ͼƬ�ϴ�</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong>�����û�</strong>(����˳���������)<input type="hidden" name="type" value="user_id" /></div>
	
	
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<input type="text" name="username"  value="<? if (!isset($this->magic_vars['_A']['user_result']['username'])) $this->magic_vars['_A']['user_result']['username'] = ''; echo $this->magic_vars['_A']['user_result']['username']; ?>"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">�û�ID��</div>
		<div class="c">
			<input type="text" name="user_id" />
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">���䣺</div>
		<div class="c">
			<input type="text" name="email" />
		</div>
	</div>
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>�ϴ�ͼƬ</strong></div>
	</div>
	
	<? if (!isset($_REQUEST['user_id'])) $_REQUEST['user_id']=''; ;if (  $_REQUEST['user_id']!=""): ?>
	<div>
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="700" height="500">
  <param name="movie" value="/plugins/swfupload/swfupload.swf?config=/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = '';$_tmp = $this->magic_vars['_A']['admin_url'];$_tmp = $this->magic_modifier("urlencode",$_tmp,"");echo $_tmp;unset($_tmp); ?>%26q=plugins%26ac=swfupload%26code=attestations%26user_id=<? if (!isset($_REQUEST['user_id'])) $_REQUEST['user_id'] = ''; echo $_REQUEST['user_id']; ?>" />
  <param name="quality" value="high" />
  <embed src="/plugins/swfupload/swfupload.swf?config=/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = '';$_tmp = $this->magic_vars['_A']['admin_url'];$_tmp = $this->magic_modifier("urlencode",$_tmp,"");echo $_tmp;unset($_tmp); ?>%26q=plugins%26ac=swfupload%26code=attestations%26user_id=<? if (!isset($_REQUEST['user_id'])) $_REQUEST['user_id'] = ''; echo $_REQUEST['user_id']; ?>" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="700" height="500"></embed>
</object>
	
	</div>
	<? else: ?>
	<div class="help">���ȴ����ѡ���û�</div>
	<? endif; ?>
<!--�˵��б� ����-->
</div>
</div>
<? endif; ?>
