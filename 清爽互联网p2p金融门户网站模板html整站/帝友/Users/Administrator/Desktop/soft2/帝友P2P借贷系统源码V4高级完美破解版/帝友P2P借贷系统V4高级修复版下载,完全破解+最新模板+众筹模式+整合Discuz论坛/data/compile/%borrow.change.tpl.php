<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "change"): ?>
<? if (!isset($_REQUEST['change_check'])) $_REQUEST['change_check']=''; ;if (  $_REQUEST['change_check']==""): ?>
<ul class="nav3"> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" id="c_so">����ת��</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&status=4">ת����վ</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&status=2">����ת��</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&status=5">����</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&status=1">ת�óɹ�</a></li>  
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&status=1&web=1">ת����վͳ��</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/web_repay_no">��վӦ����ϸ��</a></li> 
</ul> 
<div class="module_add">
	<div class="module_title"><strong>ת���б�</strong><div style="float:right"> <a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&page=<? if (!isset($_REQUEST['page'])) $_REQUEST['page'] = '';$_tmp = $_REQUEST['page'];$_tmp = $this->magic_modifier("default",$_tmp,"1");echo $_tmp;unset($_tmp); ?>&_type=excel&borrow_name=<? if (!isset($_REQUEST['borrow_name'])) $_REQUEST['borrow_name'] = ''; echo $_REQUEST['borrow_name']; ?>&borrow_nid=<? if (!isset($_REQUEST['borrow_nid'])) $_REQUEST['borrow_nid'] = ''; echo $_REQUEST['borrow_nid']; ?>&username=<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>&vouch_status=<? if (!isset($_REQUEST['vouch_status'])) $_REQUEST['vouch_status'] = ''; echo $_REQUEST['vouch_status']; ?>&repay_status=0&lateing=1">������ǰ</a> <a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&_type=excel&borrow_name=<? if (!isset($_REQUEST['borrow_name'])) $_REQUEST['borrow_name'] = ''; echo $_REQUEST['borrow_name']; ?>&borrow_nid=<? if (!isset($_REQUEST['borrow_nid'])) $_REQUEST['borrow_nid'] = ''; echo $_REQUEST['borrow_nid']; ?>&username=<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>&vouch_status=<? if (!isset($_REQUEST['vouch_status'])) $_REQUEST['vouch_status'] = ''; echo $_REQUEST['vouch_status']; ?>&repay_status=0&lateing=1">����ȫ��</a>&nbsp;&nbsp;&nbsp;</div></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<tr class="ytit1" >
				<td  >ת����</td>
				<td  >Ͷ�����</td>
				<td  >����</td>
				<td  >��������/������</td>
				<td  >���ձ���</td>
				<td  >������Ϣ</td>
				<td  >ת�ü۸�</td>
				<? if (!isset($_REQUEST['status'])) $_REQUEST['status']='';if (!isset($_REQUEST['web'])) $_REQUEST['web']=''; ;if (  $_REQUEST['status']==1 and  $_REQUEST['web']==1): ?>
				<td  >ת������</td>
				<td  >�渶���</td>
				<? endif; ?>
				<td  >����ʱ��</td>
				<? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?>
				<td  >������</td>
				<td  >����ʱ��</td>
				<? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;elseif (  $_REQUEST['status']==4): ?>
				<td  >�ύ���ʱ��</td>
				<? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;elseif (  $_REQUEST['status']==5): ?>
				<td  >����ʱ��</td>
				<? endif; ?>
				<td  >����</td>
			</tr>
			
		</tr>
		<? $this->magic_vars['query_type']='GetChangeList';$data = array('status'=>$_REQUEST['status'],'var'=>'loop','web'=>isset($_REQUEST['web'])?$_REQUEST['web']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','order'=>'status');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetChangeList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
		<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
				<td  ><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</td>
				<td  ><? if (!isset($this->magic_vars['item']['wait_times'])) $this->magic_vars['item']['wait_times'] = ''; echo $this->magic_vars['item']['wait_times']; ?>/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['recover_account_capital_wait'])) $this->magic_vars['item']['recover_account_capital_wait'] = ''; echo $this->magic_vars['item']['recover_account_capital_wait']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['interest_no'])) $this->magic_vars['item']['interest_no']=''; ;if (  $this->magic_vars['item']['interest_no']>0): ?><? if (!isset($this->magic_vars['item']['interest_no'])) $this->magic_vars['item']['interest_no'] = ''; echo $this->magic_vars['item']['interest_no']; ?><? else: ?><? if (!isset($this->magic_vars['item']['recover_account_interest_wait'])) $this->magic_vars['item']['recover_account_interest_wait'] = ''; echo $this->magic_vars['item']['recover_account_interest_wait']; ?><? endif; ?></td>
				<td  >
				<? if (!isset($this->magic_vars['item']['web_status'])) $this->magic_vars['item']['web_status']='';if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['web_status']==2 &&  $this->magic_vars['item']['status']==1): ?>
					<? if (!isset($this->magic_vars['item']['web_buy'])) $this->magic_vars['item']['web_buy'] = ''; echo $this->magic_vars['item']['web_buy']; ?>
				<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']='';if (!isset($this->magic_vars['item']['web_status'])) $this->magic_vars['item']['web_status']=''; ;elseif (  $this->magic_vars['item']['status']==1 &&  $this->magic_vars['item']['web_status']!=2): ?>
					<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>
				<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==4): ?>
					<? if (!isset($this->magic_vars['item']['web_account'])) $this->magic_vars['item']['web_account'] = ''; echo $this->magic_vars['item']['web_account']; ?>
				<? endif; ?>
				</td>
				<? if (!isset($_REQUEST['status'])) $_REQUEST['status']='';if (!isset($_REQUEST['web'])) $_REQUEST['web']=''; ;if (  $_REQUEST['status']==1 and  $_REQUEST['web']==1): ?>
				<td  ><? if (!isset($this->magic_vars['item']['jingzhuan'])) $this->magic_vars['item']['jingzhuan'] = ''; echo $this->magic_vars['item']['jingzhuan']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['recover_web_account'])) $this->magic_vars['item']['recover_web_account'] = '';$_tmp = $this->magic_vars['item']['recover_web_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>Ԫ</td>
				<? endif; ?>
				<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
				<? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?>
				<td  ><? if (!isset($this->magic_vars['item']['buy_username'])) $this->magic_vars['item']['buy_username'] = '';$_tmp = $this->magic_vars['item']['buy_username'];$_tmp = $this->magic_modifier("default",$_tmp,"��վ");echo $_tmp;unset($_tmp); ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['buy_time'])) $this->magic_vars['item']['buy_time'] = '';$_tmp = $this->magic_vars['item']['buy_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
				<? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;elseif (  $_REQUEST['status']==4): ?>
				<td  ><? if (!isset($this->magic_vars['item']['web_time'])) $this->magic_vars['item']['web_time'] = '';$_tmp = $this->magic_vars['item']['web_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
				<? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;elseif (  $_REQUEST['status']==5): ?>
				<td  ><? if (!isset($this->magic_vars['item']['cancel_time'])) $this->magic_vars['item']['cancel_time'] = '';$_tmp = $this->magic_vars['item']['cancel_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
				<? endif; ?>
				<td  ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==3): ?>�����<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>����ת��<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==5): ?>����<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==6): ?>��˲�ͨ��<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?>ת�óɹ�<? else: ?>
				<? if (!isset($this->magic_vars['item']['recover_account_capital_wait'])) $this->magic_vars['item']['recover_account_capital_wait']=''; ;if (  $this->magic_vars['item']['recover_account_capital_wait']>0): ?>
					<a href="javascript:void(0)" onclick='tipsWindown("���","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&change_check=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,230,"true","","false","text");'>���</a>
				<? else: ?>
					��ת���ѻ���
				<? endif; ?>
				<? endif; ?></td>
			
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="14" class="action">
		<div class="floatl">
		<? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==""): ?>
			ת���ܼƣ�<? if (!isset($this->magic_vars['loop']['change_account'])) $this->magic_vars['loop']['change_account'] = '';$_tmp = $this->magic_vars['loop']['change_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>Ԫ
		<? endif; ?>
		<? if (!isset($_REQUEST['status'])) $_REQUEST['status']='';if (!isset($_REQUEST['web'])) $_REQUEST['web']=''; ;if (  $_REQUEST['status']==1 and  $_REQUEST['web']==1): ?>
			�����ܼƣ�<? if (!isset($this->magic_vars['loop']['shouyi'])) $this->magic_vars['loop']['shouyi'] = '';$_tmp = $this->magic_vars['loop']['shouyi'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>Ԫ
		<? endif; ?>
		</div>
		<div class="floatr">
		<? if (!isset($_REQUEST['status'])) $_REQUEST['status']='';if (!isset($_REQUEST['web'])) $_REQUEST['web']=''; ;if (  $_REQUEST['status']==1 and  $_REQUEST['web']==1): ?>
			����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = '';$_tmp = $_REQUEST['dotime1']; if (!isset($this->magic_vars['day7'])) $this->magic_vars['day7'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['day7']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = '';$_tmp = $_REQUEST['dotime2']; if (!isset($this->magic_vars['nowtime'])) $this->magic_vars['nowtime'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['nowtime']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" id="dotime2" size="15" onclick="change_picktime()"/> <input type="button" value="����" / onclick="changesousuo()">
		<? endif; ?>
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

var url = '/?yyidai&q=code/borrow/change&status=1&web=1';

function changesousuo(x){
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
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&change_check=<? if (!isset($_REQUEST['change_check'])) $_REQUEST['change_check'] = ''; echo $_REQUEST['change_check']; ?>" >
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>���ͨ�� <input type="radio" name="status" value="0"  checked="checked"/>��˲�ͨ�� </div>
	</div>
	
	<div class="module_border" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="remark" cols="45" rows="5"><? if (!isset($this->magic_vars['remark'])) $this->magic_vars['remark'] = ''; echo $this->magic_vars['remark']; ?></textarea>
		</div>
	</div>
	<div class="module_border" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="5" maxlength="4"  tabindex="3" onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/> <img id="valicode" src="/?plugins&q=imgcode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit" >
		<input type="submit"  name="reset" value="���" class="submit" />
	</div>
	
</form>
</div>
<? endif; ?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "web_repay_no"): ?>
<ul class="nav3"> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/change" id="c_so">����ת��</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/change&status=4">ת����վ</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/change&status=2">����ת��</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/change&status=5">����</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/change&status=1">ת�óɹ�</a></li>  
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/change&status=1&web=1">ת����վͳ��</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">��վӦ����ϸ��</a></li> 
</ul> 
<div class="module_add">
	<div class="module_title"><strong>��վӦ����ϸ��</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr class="ytit1" >
			<td  >������</td>
			<td  >Ӧ������</td>
			<td  >�����</td>
			<td  >�ڼ���/������</td>
			<td  >�տ��ܶ�</td>
			<td  >Ӧ�ձ���</td>
			<td  >Ӧ����Ϣ</td>
			<td  >���ڷ�Ϣ</td>
			<td  >��������</td>
			<td  >״̬</td>
		</tr>
		<? $this->magic_vars['query_type']='GetRecoverList';$data = array('var'=>'loop','showpage'=>'3','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','borrow_status'=>'3','order'=>'recover_status','showtype'=>'web','web'=>'1','style'=>'web','recover_status'=>isset($_REQUEST['recover_status'])?$_REQUEST['recover_status']:'','epage'=>'20');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetRecoverList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
		<?  if(!isset($this->magic_vars['loop']['web']) || $this->magic_vars['loop']['web']=='') $this->magic_vars['loop']['web'] = array();  $_from = $this->magic_vars['loop']['web']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td  ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank" title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>
			<td  ><? if (!isset($this->magic_vars['item']['recover_time'])) $this->magic_vars['item']['recover_time'] = '';$_tmp = $this->magic_vars['item']['recover_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			<td  ><a href="/u/<? if (!isset($this->magic_vars['item']['borrow_userid'])) $this->magic_vars['item']['borrow_userid'] = ''; echo $this->magic_vars['item']['borrow_userid']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></a></td>
			<td  ><? if (!isset($this->magic_vars['item']['recover_period'])) $this->magic_vars['item']['recover_period'] = ''; echo $this->magic_vars['item']['recover_period']+1; ?>/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?></td>
			<td  >��<? if (!isset($this->magic_vars['item']['recover_account'])) $this->magic_vars['item']['recover_account'] = ''; echo $this->magic_vars['item']['recover_account']; ?></td>
			<td  >��<? if (!isset($this->magic_vars['item']['recover_capital'])) $this->magic_vars['item']['recover_capital'] = ''; echo $this->magic_vars['item']['recover_capital']; ?></td>
			<td  >��<? if (!isset($this->magic_vars['item']['recover_interest'])) $this->magic_vars['item']['recover_interest'] = ''; echo $this->magic_vars['item']['recover_interest']; ?></td>
			<td  >��<? if (!isset($this->magic_vars['item']['late_interest'])) $this->magic_vars['item']['late_interest'] = '';$_tmp = $this->magic_vars['item']['late_interest'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td  ><? if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days'] = '';$_tmp = $this->magic_vars['item']['late_days'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>��</td>
			<td  ><? if (!isset($this->magic_vars['item']['recover_web'])) $this->magic_vars['item']['recover_web']=''; ;if (  $this->magic_vars['item']['recover_web']==1): ?>��վ�渶<? else: ?><? if (!isset($this->magic_vars['item']['recover_status'])) $this->magic_vars['item']['recover_status']=''; ;if (  $this->magic_vars['item']['recover_status']==1): ?><font color="#666666">�ѻ�</font><? else: ?><font color="#FF0000">δ��</font><? endif; ?><? endif; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="14" class="action">
		<div class="floatl">
			�ѻ��ܼƣ�<? if (!isset($this->magic_vars['loop']['all_recover'])) $this->magic_vars['loop']['all_recover'] = '';$_tmp = $this->magic_vars['loop']['all_recover'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>Ԫ
		</div>
		<div class="floatr">
			Ӧ��ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = '';$_tmp = $_REQUEST['dotime1']; if (!isset($this->magic_vars['day7'])) $this->magic_vars['day7'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['day7']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = '';$_tmp = $_REQUEST['dotime2']; if (!isset($this->magic_vars['nowtime'])) $this->magic_vars['nowtime'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['nowtime']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" id="dotime2" size="15" onclick="change_picktime()"/> ״̬��<select name="recover_status" id="recover_status"><option value="" <? if (!isset($_REQUEST['recover_status'])) $_REQUEST['recover_status']=''; ;if (  $_REQUEST['recover_status']==""): ?>selected="selected"<? endif; ?>>����</option><option value="1" <? if (!isset($_REQUEST['recover_status'])) $_REQUEST['recover_status']=''; ;if (  $_REQUEST['recover_status']==1): ?>selected="selected"<? endif; ?>>�ѻ�</option><option value="2" <? if (!isset($_REQUEST['recover_status'])) $_REQUEST['recover_status']=''; ;if (  $_REQUEST['recover_status']==2): ?>selected="selected"<? endif; ?>>δ��</option></select> <input type="button" value="����" / onclick="sousuo()">
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

var url = '/?yyidai&q=code/borrow/web_repay_no';

function sousuo(){
	var sou = "";
	var dotime1 = $("#dotime1").val();
	if (dotime1!="" && dotime1!=null){
		sou += "&dotime1="+dotime1;
	}
	var dotime2 = $("#dotime2").val();
	if (dotime2!="" && dotime2!=null){
		sou += "&dotime2="+dotime2;
	}
	var recover_status = $("#recover_status").val();
	if (recover_status!="" && recover_status!=null){
		sou += "&recover_status="+recover_status;
	}
	
		location.href=url+sou;
	
}
</script>

<? endif; ?>