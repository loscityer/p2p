<? if (!isset($_REQUEST['action'])) $_REQUEST['action']=''; ;if (  $_REQUEST['action'] == ""): ?>
<div class="module_add">
	<div class="module_title"><strong>VIP��Ա�б�</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="*" class="main_td">�û���</td>
		<td width="*" class="main_td">����</td>
		<!--<td width="*" class="main_td">�ͷ�����</td>-->
		<td width="*" class="main_td">vip����</td>
		<td width="*" class="main_td">��ʼʱ��</td>
		<th width="" class="main_td">����ʱ��</th>
		<th width="" class="main_td">�Ƿ�ɷ�</th>
		<td width="" class="main_td">����</td>
	</tr>
	<? $this->magic_vars['query_type']='GetUsersVipList';$data = array('var'=>'loop','username'=>$_REQUEST['username'],'vip_type'=>$_REQUEST['vip_type'],'status'=>'1','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['magic_result'] = usersClass::GetUsersVipList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['vip_type'])) $this->magic_vars['item']['vip_type']=''; ;if (  $this->magic_vars['item']['vip_type']==1): ?>VIP��Ա<? if (!isset($this->magic_vars['item']['vip_type'])) $this->magic_vars['item']['vip_type']=''; ;elseif (  $this->magic_vars['item']['vip_type']==2): ?>�߼�Vip��Ա<? endif; ?></td>
		<!--<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['adminname'])) $this->magic_vars['item']['adminname'] = ''; echo $this->magic_vars['item']['adminname']; ?></td>-->
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['years'])) $this->magic_vars['item']['years'] = ''; echo $this->magic_vars['item']['years']; ?>��</td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['first_date'])) $this->magic_vars['item']['first_date'] = '';$_tmp = $this->magic_vars['item']['first_date'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['end_date'])) $this->magic_vars['item']['end_date'] = '';$_tmp = $this->magic_vars['item']['end_date'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money']=''; ;if (  $this->magic_vars['item']['money']>0): ?><? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?>Ԫ<? else: ?>��<? endif; ?></td>
		<td class="main_td1" align="center"><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/vip&action=view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>">��˲鿴</a> </td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr>
			<td colspan="10" class="action">
			<div class="floatl">
			<script>
	  var url = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/vip&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>';
	    
	  	function sousuo(){
			var username = $("#username").val();
			var kefu = $("#kefu").val();
			var vip_type = $("#vip_type").val();
			var dotime1 = $("#dotime1").val();
			var dotime2 = $("#dotime2").val();
			location.href=url+"&kefu="+kefu+"&username="+username+"&vip_type="+vip_type+"&dotime1="+dotime1+"&dotime2="+dotime2;
		}
	  
	  </script>
	  
			</div>
			<div class="floatr">
				�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/> 	��ʼʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = '';$_tmp = $_REQUEST['dotime1']; if (!isset($this->magic_vars['day7'])) $this->magic_vars['day7'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['day7']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = '';$_tmp = $_REQUEST['dotime2']; if (!isset($this->magic_vars['nowtime'])) $this->magic_vars['nowtime'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['nowtime']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" id="dotime2" size="15" onclick="change_picktime()"/><!--�ͷ��û�����<input type="text" name="kefu" id="kefu" value="<? if (!isset($_REQUEST['kefu'])) $_REQUEST['kefu'] = '';$_tmp = $_REQUEST['kefu'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>--> Vip���ͣ�<select name="vip_type" id="vip_type">
				<option value="">ȫ��</option>
				<option value="1" <? if (!isset($_REQUEST['vip_type'])) $_REQUEST['vip_type']=''; ;if (  $_REQUEST['vip_type']=="1"): ?> selected="selected"<? endif; ?>>VIP��Ա</option>
				<option value="2" <? if (!isset($_REQUEST['vip_type'])) $_REQUEST['vip_type']=''; ;if (  $_REQUEST['vip_type']=="2"): ?> selected="selected"<? endif; ?>>�߼�VIP��Ա</option>
				</select><input type="button" value="����" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr>
		<td colspan="10" class="page">
		<? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</td>
	</tr>
	<? unset($_magic_vars); ?>
</table>
<? if (!isset($_REQUEST['action'])) $_REQUEST['action']=''; ;elseif (  $_REQUEST['action'] == "view"): ?>
<div class="module_add">
	
	<form enctype="multipart/form-data" name="form1" method="post" action=""  >
	<div class="module_title"><strong>VIP��˲鿴</strong></div>
	
	<div class="module_border">
		<div class="l">�û���:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['vip_result']['username'])) $this->magic_vars['_A']['vip_result']['username'] = ''; echo $this->magic_vars['_A']['vip_result']['username']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['vip_result']['vip_type'])) $this->magic_vars['_A']['vip_result']['vip_type']=''; ;if (  $this->magic_vars['_A']['vip_result']['vip_type']==1): ?>VIP��Ա<? if (!isset($this->magic_vars['_A']['vip_result']['vip_type'])) $this->magic_vars['_A']['vip_result']['vip_type']=''; ;elseif (  $this->magic_vars['_A']['vip_result']['vip_type']==2): ?>�߼�Vip��Ա<? endif; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���:</div>
		<div class="c"><? if (!isset($this->magic_vars['_A']['vip_result']['status'])) $this->magic_vars['_A']['vip_result']['status']=''; ;if (  $this->magic_vars['_A']['vip_result']['status']=="1"): ?>
		��ͨ��<input type="hidden" value="1" name="status" />
		<? else: ?>
			<input type="radio" value="1" name="status" <? if (!isset($this->magic_vars['_A']['vip_result']['status'])) $this->magic_vars['_A']['vip_result']['status']=''; ;if (  $this->magic_vars['_A']['vip_result']['status']=="1"): ?> checked="checked"<? endif; ?> />���ͨ�� <input type="radio" value="2" name="status"  <? if (!isset($this->magic_vars['_A']['vip_result']['status'])) $this->magic_vars['_A']['vip_result']['status']='';if (!isset($this->magic_vars['_A']['vip_result']['status'])) $this->magic_vars['_A']['vip_result']['status']=''; ;if (  $this->magic_vars['_A']['vip_result']['status']=="2" ||  $this->magic_vars['_A']['vip_result']['status']==""): ?> checked="checked"<? endif; ?>/>��˲�ͨ�� 
			<? endif; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�ͷ�:</div>
		<div class="c">
			<select name="kefu_userid" id="kefu_userid">
				<option value="">��ѡ��</option>
				<? $this->magic_vars['query_type']='GetUsersAdminList';$data = array('limit'=>'all','type_id'=>'3');$default = '';  require_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['magic_result'] = usersClass::GetUsersAdminList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<option value="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = ''; echo $this->magic_vars['var']['user_id']; ?>" <? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id']='';if (!isset($this->magic_vars['_A']['vip_result']['kefu_userid'])) $this->magic_vars['_A']['vip_result']['kefu_userid']=''; ;if (  $this->magic_vars['var']['user_id']== $this->magic_vars['_A']['vip_result']['kefu_userid']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['var']['adminname'])) $this->magic_vars['var']['adminname'] = ''; echo $this->magic_vars['var']['adminname']; ?></option>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
				</select>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��������:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['vip_result']['years'])) $this->magic_vars['_A']['vip_result']['years'] = ''; echo $this->magic_vars['_A']['vip_result']['years']; ?>��
			<input type="hidden" value="1" name="years" value="<? if (!isset($this->magic_vars['_A']['vip_result']['years'])) $this->magic_vars['_A']['vip_result']['years'] = ''; echo $this->magic_vars['_A']['vip_result']['years']; ?>" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ע:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['vip_result']['remark'])) $this->magic_vars['_A']['vip_result']['remark'] = ''; echo $this->magic_vars['_A']['vip_result']['remark']; ?>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="55" rows="6" ><? if (!isset($this->magic_vars['_A']['vip_result']['verify_remark'])) $this->magic_vars['_A']['vip_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['vip_result']['verify_remark']; ?></textarea>
		</div>
	</div>
	
	<div class="module_submit" >
	<input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_A']['vip_result']['user_id'])) $this->magic_vars['_A']['vip_result']['user_id'] = ''; echo $this->magic_vars['_A']['vip_result']['user_id']; ?>" />
		<input type="submit" value="ȷ���ύ" />
		<input type="reset" name="reset" value="���ñ�" />
	</div>
	</form>
<? endif; ?>