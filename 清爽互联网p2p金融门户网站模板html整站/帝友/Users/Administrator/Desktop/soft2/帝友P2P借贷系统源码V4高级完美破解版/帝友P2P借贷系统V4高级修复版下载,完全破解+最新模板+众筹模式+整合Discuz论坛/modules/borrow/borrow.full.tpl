{if $magic.request.fullcheck==""}
<ul class="nav3"> 
<li><a href="{$_A.query_url_all}" id="c_so">�������</a></li> 
<li><a href="{$_A.query_url_all}&status=4">�������ʧ��</a></li> 
<li><a href="{$_A.query_url_all}&type=repay">���ڻ�����</a></li> 
<li><a href="{$_A.query_url_all}&type=repayyes">�ѻ�����</a></li> 
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
		{ list  module="borrow" function="GetList" var="loop" borrow_name="request" type="request"  borrow_nid="request" username="request" query_type="full"  status="request" dotime1="request" dotime2="request"}
		{foreach from="$loop.list" item="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td>{ $item.id}<input type="hidden" name="id[]" value="{ $item.id}" /></td>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=module/users/view&user_id={$item.user_id}",500,230,"true","","true","text");'>	{$item.username}</a></td>
			<td>{$item.credit.approve_credit|credit:"credit"}</td>
			<td>{$item.borrow_nid}</td>
			<td title="{$item.name}"><a href="{$_A.query_url_all}&view={$item.borrow_nid}">{$item.name|truncate:10}</a></td>
			<td>{$item.account}Ԫ</td>
			<td>{$item.borrow_apr}%</td>
			<td>{if $item.borrow_period == 0.03}1��
                            	{elseif $item.borrow_period == 0.06}2��
                            	{elseif $item.borrow_period == 0.10}3��
                            	{elseif $item.borrow_period == 0.13}4��
                            	{elseif $item.borrow_period == 0.16}5��
                            	{elseif $item.borrow_period == 0.20}6��
                            	{elseif $item.borrow_period == 0.23}7��
                            	{elseif $item.borrow_period == 0.26}8��
                            	{elseif $item.borrow_period == 0.30}9��
                            	{elseif $item.borrow_period == 0.33}10��
                            	{elseif $item.borrow_period == 0.36}11��
                            	{elseif $item.borrow_period == 0.40}12��
                            	{elseif $item.borrow_period == 0.43}13��
                            	{elseif $item.borrow_period == 0.46}14��
                            	{elseif $item.borrow_period == 0.50}15��
                            	{elseif $item.borrow_period == 0.53}16��
                            	{elseif $item.borrow_period == 0.56}17��
                            	{elseif $item.borrow_period == 0.60}18��
                            	{elseif $item.borrow_period == 0.63}19��
                            	{elseif $item.borrow_period == 0.66}20��
                            	{elseif $item.borrow_period == 0.70}21��
                            	{elseif $item.borrow_period == 0.73}22��
                            	{elseif $item.borrow_period == 0.76}23��
                            	{elseif $item.borrow_period == 0.80}24��
                            	{elseif $item.borrow_period == 0.83}25��
                            	{elseif $item.borrow_period == 0.86}26��
                            	{elseif $item.borrow_period == 0.90}27��
                            	{elseif $item.borrow_period == 0.93}28��
                            	{elseif $item.borrow_period == 0.96}29��
                            	{elseif $item.borrow_period == 0.10}30��
                            	{elseif $item.borrow_period >= 1 && $item.borrow_period<10 }{$item.borrow_period|truncate:1}����
                            	{else}{$item.borrow_period|truncate:2}����
                            	{/if}</td>
			<td>{$item.borrow_style|linkages:"borrow_style"}</td>
			<td>{if $item.vouchstatus==1}<font color="#FF0000">��������</font>{elseif $item.is_flow==1}<font color="#FF0000">��ת���</font>{elseif $item.is_jin==1}<font color="#FF0000">��ֵ���</font>{elseif $item.fast_status==1}<font color="#FF0000">��Ѻ���</font>{else}��ͨ����{/if}</td>
			<td width="" class="main_td">{$item.tender_times}��</td>
			<td>{$item.borrow_type_nid|linkages:"borrow_type_nid"}</td>
			<td title="{$item.name}"><a href="{$_A.query_url_all}&view={$item.borrow_nid}">�鿴</a></td>
		</tr>
		{ /foreach}
		<tr>
		<td colspan="14" class="action">
		<div class="floatl">
			
		</div>
		<div class="floatr">
			 ���⣺<input type="text" name="borrow_name" id="borrow_name" value="{$magic.request.borrow_name}" size="8"/> �û�����<input type="text" name="username" id="username" value="{$magic.request.username}" size="8"/>����ţ�<input type="text" name="borrow_nid" id="borrow_nid" value="{$magic.request.borrow_nid}" size="8"/>
			 ���ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/> <select id="is_vouch" ><option value="">ȫ��</option><option value="1" {if $magic.request.is_vouch==1} selected="selected"{/if}>������</option><option value="0" {if $magic.request.is_vouch=="0"} selected="selected"{/if}>��ͨ��</option></select> <input type="button" value="����" class="submit" onclick="sousuo('{$_A.query_url}/full&type={$magic.request.type}&status={$magic.request.status}')">
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

var urls = '{$_A.query_url}/full';
{literal}
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
{/literal}
{else}

<div class="module_add">
	<form name="form1" method="post" action="{$_A.query_url_all}&fullcheck={$magic.request.fullcheck}" >
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
		<input type="radio" name="status" value="3"/>����ͨ�� <input type="radio" name="status" value="4"  checked="checked"/>����ͨ�� </div>
	</div>
	
	<div class="module_border" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="reverify_remark" cols="45" rows="5">{ $_A.borrow_result.reverify_remark}</textarea>
		</div>
	</div>
	<div class="module_border" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="5" maxlength="4"  tabindex="3" onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/> <img id="valicode" src="/?plugins&q=imgcode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit" >
		<input type="hidden" name="id" value="{ $_A.borrow_result.id }" />
		<input type="hidden" name="borrow_nid" value="{ $_A.borrow_result.borrow_nid}" />
		
		<input type="submit"  name="reset" value="��˴˽���" class="submit" />
	</div>
	
</form>
</div>
{/if}