<? if (!isset($_REQUEST['fullcheck'])) $_REQUEST['fullcheck']=''; ;if (  $_REQUEST['fullcheck']==""): ?>
<ul class="nav3"> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" id="c_so">�������</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&status=4">�������ʧ��</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&type=repay">���ڻ�����</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&type=repayyes">�ѻ�����</a></li> 
</ul> 
<div class="module_add">
	<div class="module_title"><strong>����б�</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�û�����</td>
			<td width="*" class="main_td">�û�����</td>
			<td width="*" class="main_td">�����</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">�����</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">�������</td>
			<td width="" class="main_td">���ʽ</td>
			<td width="" class="main_td">�������</td>
			<td width="" class="main_td">Ͷ�ʴ���</td>
			<td width="" class="main_td">״̬</td>
			<td width="" class="main_td">�鿴</td>
		</tr>
		<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','borrow_name'=>isset($_REQUEST['borrow_name'])?$_REQUEST['borrow_name']:'','type'=>isset($_REQUEST['type'])?$_REQUEST['type']:'','borrow_nid'=>isset($_REQUEST['borrow_nid'])?$_REQUEST['borrow_nid']:'','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','query_type'=>'full','status'=>isset($_REQUEST['status'])?$_REQUEST['status']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
		<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?><input type="hidden" name="id[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" /></td>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/users/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>",500,230,"true","","true","text");'>	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['credit']['approve_credit'])) $this->magic_vars['item']['credit']['approve_credit'] = '';$_tmp = $this->magic_vars['item']['credit']['approve_credit'];$_tmp = $this->magic_modifier("credit",$_tmp,"credit");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?></td>
			<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&view=<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>Ԫ</td>
			<td><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</td>
			<td><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>����
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>����
                            	<? endif; ?></td>
			<td><? if (!isset($this->magic_vars['item']['borrow_style'])) $this->magic_vars['item']['borrow_style'] = '';$_tmp = $this->magic_vars['item']['borrow_style'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['vouchstatus'])) $this->magic_vars['item']['vouchstatus']=''; ;if (  $this->magic_vars['item']['vouchstatus']==1): ?><font color="#FF0000">��������</font><? if (!isset($this->magic_vars['item']['is_flow'])) $this->magic_vars['item']['is_flow']=''; ;elseif (  $this->magic_vars['item']['is_flow']==1): ?><font color="#FF0000">��ת���</font><? if (!isset($this->magic_vars['item']['is_jin'])) $this->magic_vars['item']['is_jin']=''; ;elseif (  $this->magic_vars['item']['is_jin']==1): ?><font color="#FF0000">��ֵ���</font><? if (!isset($this->magic_vars['item']['fast_status'])) $this->magic_vars['item']['fast_status']=''; ;elseif (  $this->magic_vars['item']['fast_status']==1): ?><font color="#FF0000">��Ѻ���</font><? else: ?>��ͨ����<? endif; ?></td>
			<td width="" class="main_td"><? if (!isset($this->magic_vars['item']['tender_times'])) $this->magic_vars['item']['tender_times'] = ''; echo $this->magic_vars['item']['tender_times']; ?>��</td>
			<td><? if (!isset($this->magic_vars['item']['borrow_type_nid'])) $this->magic_vars['item']['borrow_type_nid'] = '';$_tmp = $this->magic_vars['item']['borrow_type_nid'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_type_nid");echo $_tmp;unset($_tmp); ?></td>
			<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&view=<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>">�鿴</a></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="14" class="action">
		<div class="floatl">
			
		</div>
		<div class="floatr">
			 ���⣺<input type="text" name="borrow_name" id="borrow_name" value="<? if (!isset($_REQUEST['borrow_name'])) $_REQUEST['borrow_name'] = ''; echo $_REQUEST['borrow_name']; ?>" size="8"/> �û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>" size="8"/>����ţ�<input type="text" name="borrow_nid" id="borrow_nid" value="<? if (!isset($_REQUEST['borrow_nid'])) $_REQUEST['borrow_nid'] = ''; echo $_REQUEST['borrow_nid']; ?>" size="8"/>
			 ���ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = '';$_tmp = $_REQUEST['dotime1']; if (!isset($this->magic_vars['day7'])) $this->magic_vars['day7'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['day7']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = '';$_tmp = $_REQUEST['dotime2']; if (!isset($this->magic_vars['nowtime'])) $this->magic_vars['nowtime'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['nowtime']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" id="dotime2" size="15" onclick="change_picktime()"/> <select id="is_vouch" ><option value="">ȫ��</option><option value="1" <? if (!isset($_REQUEST['is_vouch'])) $_REQUEST['is_vouch']=''; ;if (  $_REQUEST['is_vouch']==1): ?> selected="selected"<? endif; ?>>������</option><option value="0" <? if (!isset($_REQUEST['is_vouch'])) $_REQUEST['is_vouch']=''; ;if (  $_REQUEST['is_vouch']=="0"): ?> selected="selected"<? endif; ?>>��ͨ��</option></select> <input type="button" value="����" class="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/full&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&status=<? if (!isset($_REQUEST['status'])) $_REQUEST['status'] = ''; echo $_REQUEST['status']; ?>')">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="14" class="page">
			<? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
			</td>
		</tr>
		<? unset($_magic_vars); ?>
	</form>	
</table>


<script>

var urls = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/full';

function sousuo(url){
	var sou = "";
	var username = $("#username").val();
	if (username!="" && username!=null){
		sou += "&username="+username;
	}
	var keywords = $("#keywords").val();
	if (keywords!="" && keywords!=null){
		sou += "&keywords="+keywords;
	}
	var borrow_name = $("#borrow_name").val();
	if (borrow_name!="" && borrow_name!=null){
		sou += "&borrow_name="+borrow_name;
	}
	var borrow_nid = $("#borrow_nid").val();
	if (borrow_nid!="" && borrow_nid!=null){
		sou += "&borrow_nid="+borrow_nid;
	}
	var dotime1 = $("#dotime1").val();
	if (dotime1!="" && dotime1!=null){
		sou += "&dotime1="+dotime1;
	}
	var dotime2 = $("#dotime2").val();
	if (dotime2!="" && dotime2!=null){
		sou += "&dotime2="+dotime2;
	}
	var status = $("#status").val();
	if (status!="" && status!=null){
		sou += "&status="+status;
	}
	var is_vouch = $("#is_vouch").val();
	if (is_vouch!="" && is_vouch!=null){
		sou += "&is_vouch="+is_vouch;
	}
	
		location.href=url+sou;
	
}
</script>

<? else: ?>

<div class="module_add">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&fullcheck=<? if (!isset($_REQUEST['fullcheck'])) $_REQUEST['fullcheck'] = ''; echo $_REQUEST['fullcheck']; ?>" >
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
		<input type="radio" name="status" value="3"/>����ͨ�� <input type="radio" name="status" value="4"  checked="checked"/>����ͨ�� </div>
	</div>
	
	<div class="module_border" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="reverify_remark" cols="45" rows="5"><? if (!isset($this->magic_vars['_A']['borrow_result']['reverify_remark'])) $this->magic_vars['_A']['borrow_result']['reverify_remark'] = ''; echo $this->magic_vars['_A']['borrow_result']['reverify_remark']; ?></textarea>
		</div>
	</div>
	<div class="module_border" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="5" maxlength="4"  tabindex="3" onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/> <img id="valicode" src="/?plugins&q=imgcode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit" >
		<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['id'])) $this->magic_vars['_A']['borrow_result']['id'] = ''; echo $this->magic_vars['_A']['borrow_result']['id']; ?>" />
		<input type="hidden" name="borrow_nid" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_nid'])) $this->magic_vars['_A']['borrow_result']['borrow_nid'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_nid']; ?>" />
		
		<input type="submit"  name="reset" value="��˴˽���" class="submit" />
	</div>
	
</form>
</div>
<? endif; ?>