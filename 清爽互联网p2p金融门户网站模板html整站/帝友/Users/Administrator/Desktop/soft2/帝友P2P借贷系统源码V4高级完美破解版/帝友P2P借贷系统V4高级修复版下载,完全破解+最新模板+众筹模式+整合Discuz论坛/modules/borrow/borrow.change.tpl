{if $_A.query_type == "change"}
{if $magic.request.change_check==""}
<ul class="nav3"> 
<li><a href="{$_A.query_url_all}" id="c_so">����ת��</a></li> 
<li><a href="{$_A.query_url_all}&status=4">ת����վ</a></li> 
<li><a href="{$_A.query_url_all}&status=2">����ת��</a></li> 
<li><a href="{$_A.query_url_all}&status=5">����</a></li> 
<li><a href="{$_A.query_url_all}&status=1">ת�óɹ�</a></li>  
<li><a href="{$_A.query_url_all}&status=1&web=1">ת����վͳ��</a></li> 
<li><a href="{$_A.query_url}/web_repay_no">��վӦ����ϸ��</a></li> 
</ul> 
<div class="module_add">
	<div class="module_title"><strong>ת���б�</strong><div style="float:right"> <a href="{$_A.query_url_all}&page={$magic.request.page|default:1}&_type=excel&borrow_name={$magic.request.borrow_name}&borrow_nid={$magic.request.borrow_nid}&username={$magic.request.username}&vouch_status={$magic.request.vouch_status}&repay_status=0&lateing=1">������ǰ</a> <a href="{$_A.query_url_all}&_type=excel&borrow_name={$magic.request.borrow_name}&borrow_nid={$magic.request.borrow_nid}&username={$magic.request.username}&vouch_status={$magic.request.vouch_status}&repay_status=0&lateing=1">����ȫ��</a>&nbsp;&nbsp;&nbsp;</div></div>
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
				{if $magic.request.status==1 and $magic.request.web==1}
				<td  >ת������</td>
				<td  >�渶���</td>
				{/if}
				<td  >����ʱ��</td>
				{if $magic.request.status==1}
				<td  >������</td>
				<td  >����ʱ��</td>
				{elseif $magic.request.status==4}
				<td  >�ύ���ʱ��</td>
				{elseif $magic.request.status==5}
				<td  >����ʱ��</td>
				{/if}
				<td  >����</td>
			</tr>
			
		</tr>
		{list module='borrow' function='GetChangeList' status='$magic.request.status' var="item" var="loop" web='request' dotime2=request dotime1=request order="status"}
		{foreach from="$loop.list" item="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
				<td  >{$item.username}</td>
				<td  >{$item.borrow_name}</td>
				<td  >{$item.borrow_apr}%</td>
				<td  >{$item.wait_times}/{$item.borrow_period}</td>
				<td  >{$item.recover_account_capital_wait}</td>
				<td  >{if $item.interest_no>0}{$item.interest_no}{else}{$item.recover_account_interest_wait}{/if}</td>
				<td  >
				{if $item.web_status==2 && $item.status==1}
					{$item.web_buy}
				{elseif $item.status==1 && $item.web_status!=2}
					{$item.account}
				{elseif $item.status==4}
					{$item.web_account}
				{/if}
				</td>
				{if $magic.request.status==1 and $magic.request.web==1}
				<td  >{$item.jingzhuan}</td>
				<td  >{$item.recover_web_account|default:0.00}Ԫ</td>
				{/if}
				<td  >{$item.addtime|date_format}</td>
				{if $magic.request.status==1}
				<td  >{$item.buy_username|default:��վ}</td>
				<td  >{$item.buy_time|date_format}</td>
				{elseif $magic.request.status==4}
				<td  >{$item.web_time|date_format}</td>
				{elseif $magic.request.status==5}
				<td  >{$item.cancel_time|date_format}</td>
				{/if}
				<td  >{if $item.status==3}�����{elseif $item.status==2}����ת��{elseif $item.status==5}����{elseif $item.status==6}��˲�ͨ��{elseif $item.status==1}ת�óɹ�{else}
				{if $item.recover_account_capital_wait>0}
					<a href="javascript:void(0)" onclick='tipsWindown("���","url:get?{$_A.query_url_all}&change_check={$item.id}",500,230,"true","","false","text");'>���</a>
				{else}
					��ת���ѻ���
				{/if}
				{/if}</td>
			
		</tr>
		{ /foreach}
		<tr>
		<td colspan="14" class="action">
		<div class="floatl">
		{if $magic.request.status==""}
			ת���ܼƣ�{$loop.change_account|default:0.00}Ԫ
		{/if}
		{if $magic.request.status==1 and $magic.request.web==1}
			�����ܼƣ�{$loop.shouyi|default:0.00}Ԫ
		{/if}
		</div>
		<div class="floatr">
		{if $magic.request.status==1 and $magic.request.web==1}
			����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/> <input type="button" value="����" / onclick="changesousuo()">
		{/if}
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="14" class="page">
			{$loop.pages|showpage}
			</td>
		</tr>
		{/list}
	</form>	
</table>


<script>

var url = '/?yyidai&q=code/borrow/change&status=1&web=1';
{literal}
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
{/literal}
{else}

<div class="module_add">
	<form name="form1" method="post" action="{$_A.query_url_all}&change_check={$magic.request.change_check}" >
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>���ͨ�� <input type="radio" name="status" value="0"  checked="checked"/>��˲�ͨ�� </div>
	</div>
	
	<div class="module_border" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="remark" cols="45" rows="5">{ $remark}</textarea>
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
{/if}
{elseif $_A.query_type == "web_repay_no"}
<ul class="nav3"> 
<li><a href="{$_A.query_url}/change" id="c_so">����ת��</a></li> 
<li><a href="{$_A.query_url}/change&status=4">ת����վ</a></li> 
<li><a href="{$_A.query_url}/change&status=2">����ת��</a></li> 
<li><a href="{$_A.query_url}/change&status=5">����</a></li> 
<li><a href="{$_A.query_url}/change&status=1">ת�óɹ�</a></li>  
<li><a href="{$_A.query_url}/change&status=1&web=1">ת����վͳ��</a></li> 
<li><a href="{$_A.query_url_all}">��վӦ����ϸ��</a></li> 
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
		{list module="borrow" var="loop" function ="GetRecoverList" showpage="3" keywords="request" dotime1="request" dotime2="request" borrow_status=3 order="recover_status" showtype="web" web=1 style="web" recover_status=request epage=20}
		{foreach from="$loop.web" item="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td  ><a href="/invest/a{$item.borrow_nid}.html" target="_blank" title="{$item.borrow_name}">{$item.borrow_name|truncate:8}</a></td>
			<td  >{$item.recover_time|date_format:"Y-m-d"}</td>
			<td  ><a href="/u/{$item.borrow_userid}" target="_blank">{$item.borrow_username}</a></td>
			<td  >{$item.recover_period+1}/{$item.borrow_period}</td>
			<td  >��{$item.recover_account }</td>
			<td  >��{$item.recover_capital  }</td>
			<td  >��{$item.recover_interest  }</td>
			<td  >��{$item.late_interest|default:0  }</td>
			<td  >{$item.late_days|default:0  }��</td>
			<td  >{if $item.recover_web==1}��վ�渶{else}{if $item.recover_status==1  }<font color="#666666">�ѻ�</font>{else}<font color="#FF0000">δ��</font>{/if}{/if}</td>
		</tr>
		{/foreach}
		<tr>
		<td colspan="14" class="action">
		<div class="floatl">
			�ѻ��ܼƣ�{$loop.all_recover|default:0.00}Ԫ
		</div>
		<div class="floatr">
			Ӧ��ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/> ״̬��<select name="recover_status" id="recover_status"><option value="" {if $magic.request.recover_status==""}selected="selected"{/if}>����</option><option value="1" {if $magic.request.recover_status==1}selected="selected"{/if}>�ѻ�</option><option value="2" {if $magic.request.recover_status==2}selected="selected"{/if}>δ��</option></select> <input type="button" value="����" / onclick="sousuo()">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="14" class="page">
			{$loop.pages|showpage}
			</td>
		</tr>
		{/list}
	</form>	
</table>
<script>

var url = '/?yyidai&q=code/borrow/web_repay_no';
{literal}
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
{/literal}
{/if}