{if $_A.query_type=="user"}
<ul class="nav3"> 
	<li><a href="{$_A.query_url_all}" id="c_so">�����ƹ�</a></li>
	<li><a href="{$_A.query_url}/invitelog">�����¼</a></li>
</ul>
<div class="module_add">
	<div class="module_title"><strong>�����ƹ�</strong></div>
</div>
{if $magic.request.user_id==""}
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">�û�ID</td>
		<td width="" class="main_td">�û���</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">���</td>
		<td width="" class="main_td">���õȼ�</td>
		<td width="" class="main_td">�ƹ���</td>
		<td width="" class="main_td">�ƹ�������</td>
		<td width="" class="main_td">����ʱ��</td>
		<td width="" class="main_td">����</td>
	</tr>
	{list module="spread" function="GetUser" var="loop" username="request" showpage="3" epage="10" spread_name="request"}
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td>{$item.user_id}</td>
		<td>{$item.username}</td>
		<td>{$item.email}</td>
		<td>{if $item.vip.status==1}{if $item.vip.vip_type==1}�߼�VIP{else}VIP��Ա{/if}{else}��ͨ��Ա{/if}</td>
		<td>{$item.credit.approve_credit|credit:"credit"}</td>
		<td>{$item.spread_name|default:"-"}</td>
		<td>{if $item.type==1}Ͷ��{elseif $item.type==2}���{elseif $item.type==3}����({if $item.style==1}���{else}Ͷ��{/if}){elseif $item.type==6}����({if $item.style==1}���{else}Ͷ��{/if}){/if}</td>
		<td>{$item.spread_time|date_format:"Y-m-d H:i"|default:"-"}</td>
		<td><a href="{$_A.query_url}/user{$_A.site_url}&user_id={$item.user_id}&username={$item.username}">��ӹ���</a></td>
	</tr>
	{/foreach}
	<tr>
		<td colspan="9" class="action">
			<div class="floatl">{$loop.pages|showpage}</div>
		<div class="floatr">
		<script>
		var url = '{$_A.query_url_all}';
		{literal}
		function sousuo(){
		var username = $("#username").val();
		var spread_name = $("#spread_name").val();
		location.href=url+"&username="+username+"&spread_name="+spread_name;
		}
		</script>
		{/literal}
		�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}">
		�ƹ��ˣ�<input type="text" name="spread_name" id="spread_name" value="{$magic.request.spread_name|urldecode}">
		<input type="submit" value="����" onClick="sousuo()">
		</div>
		</td>
	</tr>
	{/list}
</table>
{else}
{literal}
<script>
	function choose(id){
		for($i=1;$i<=4;$i++){
			$("#type_"+$i).hide();
		}
		if (id==3 || id==4){
			$("#style").show();
		}else{
			$("#style").hide();
		}
		$("#type_"+id).show();
	}
</script>
{/literal}
<div class="module_add">
	<form name="form_user" method="post" action="">
	
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			{$magic.request.username|urldecode}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�ƹ����ͣ�</div>
		<div class="c">
			<input name="type" type="radio" value="1" checked="checked" onClick="choose(1)">Ͷ��<input name="type" type="radio" value="2" onClick="choose(2)">���<input name="type" type="radio" value="3" onClick="choose(3)">����
			<input name="type" type="radio" value="6" onClick="choose(4)">����
		</div>
	</div>
	
	<div class="module_border" style="display:none" id="style">
		<div class="l">���</div>
		<div class="c">
			<input name="style" type="radio" value="1" checked="checked">���<input name="style" type="radio" value="2">Ͷ��
		</div>
	</div>

	<div class="module_border">
		<div class="l">�ƹ�Ա��</div>
		<div class="c">
			<select name="user_id_1" id="type_1">
			<option value="">��ѡ��</option>
			{loop module="users" function="GetUsersAdminList" limit="all" type_id="11" var="avar"}
			<option value="{$avar.user_id}">{$avar.adminname}</option>
			{/loop}
			</select>
			
			<select name="user_id_2" id="type_2" style="display:none">
			<option value="">��ѡ��</option>
			{loop module="users" function="GetUsersAdminList" limit="all" type_id="12" var="bvar"}
			<option value="{$bvar.user_id}">{$bvar.adminname}</option>
			{/loop}
			</select>
			
			<select name="user_id_3" id="type_3" style="display:none">
			<option value="">��ѡ��</option>
			{loop module="users" function="GetUsersAdminList" limit="all" type_id="14" var="cvar"}
			<option value="{$cvar.user_id}">{$cvar.adminname}</option>
			{/loop}
			</select>
			
			<select name="user_id_4" id="type_4" style="display:none">
			<option value="">��ѡ��</option>
			{loop module="users" function="GetUsersAdminList" limit="all" type_id="3" var="dvar"}
			<option value="{$dvar.user_id}">{$dvar.adminname}</option>
			{/loop}
			</select>
		</div>
	</div>
	
	<!--<div class="module_border">
		<div class="l">�Ƿ�Ϊ�����ƹ��ˣ�</div>
		<div class="c">
			<input type="checkbox" name="alone_status" value="1">��Ϊ�����ƹ�Ա
		</div>
	</div>-->
	
	<input name="spread_userid" value="{$magic.request.user_id}" type="hidden">
	
	<div class="module_submit border_b" >
		<input type="submit" value="�ύ" name="submit"/>
		<input type="reset" name="reset" value="����" />
	</div>
	
	</form>
	</div>
{/if}
{elseif $_A.query_type=="invitelog"}
<ul class="nav3"> 
	<li><a href="{$_A.query_url}/user" id="c_so">�����ƹ�</a></li>
	<li><a href="{$_A.query_url_all}/invitelog">�����¼</a></li>
</ul>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ע���û�</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">���</td>
		<td width="" class="main_td">���õȼ�</td>
		<td width="" class="main_td">�ƹ���</td>
		<td width="" class="main_td">ע��ʱ��</td>
		<td width="" class="main_td">����</td>
	</tr>
	{list module="users" function="GetFriendsInvite" var="loop" username="request" showpage="3" epage="10" spread_name="request" dotime1="request" dotime2="request"}
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td>{$item.friend_username}</td>
		<td>{$item.email}</td>
		<td>{if $item.vip.status==1}{if $item.vip.vip_type==1}�߼�VIP{else}VIP��Ա{/if}{else}��ͨ��Ա{/if}</td>
		<td>{$item.credit.approve_credit|credit:"credit"}</td>
		<td>{$item.username|default:"-"}</td>
		<td>{$item.addtime|date_format:"Y-m-d H:i"|default:"-"}</td>
		<td><a href="{$_A.query_url}/user{$_A.site_url}&user_id={$item.friends_userid}&username={$item.friend_username}">��ӹ���</a></td>
	</tr>
	{/foreach}
	<tr>
		<td colspan="9" class="action">
			<div class="floatl">{$loop.pages|showpage}</div>
		<div class="floatr">
		<script>
		var url = '{$_A.query_url_all}';
		{literal}
		function sousuo(){
		var username = $("#username").val();
		var spread_name = $("#spread_name").val();
		var dotime1 = $("#dotime1").val();
		var dotime2 = $("#dotime2").val();
		location.href=url+"&username="+username+"&spread_name="+spread_name+"&dotime1="+dotime1+"&dotime2="+dotime2;
		}
		</script>
		{/literal}
		�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}">
		�ƹ��ˣ�<input type="text" name="spread_name" id="spread_name" value="{$magic.request.spread_name|urldecode}">
		����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/>
		<input type="submit" value="����" onClick="sousuo()">
		</div>
		</td>
	</tr>
	{/list}
</table>
{elseif $_A.query_type=="tender"}
<ul class="nav3"> 
	<li><a href="{$_A.query_url_all}" id="c_so">�ܱ�</a></li>
	<li><a href="{$_A.query_url}/tender_month">�¶ȱ�</a></li>
</ul>
<div class="module_add">
	<div class="module_title"><strong>Ͷ���ƹ㲿��</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">�û�ID</td>
		<td width="" class="main_td">�û���</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">���ƹ�����</td>
		<td width="" class="main_td">�ͻ���Ͷ�ʶ�</td>
		<td width="" class="main_td">����</td>
	</tr>
	{list module="spread" function="GetSpreadUser" var="loop" username="request" month="request" type="1" alone_status="0"}
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td>{$item.user_id}</td>
		<td>{$item.username}</td>
		<td>{$item.email}</td>
		<td>{$item.user_all|default:"0"}</td>
		{list module="spread" function="GetSpreadTenderList" var="lloop" user_id="$item.user_id"}
		<td>{$lloop.all_account|default:"0"}</td>
		{/list}
		<td><a href="{$_A.query_url}/tenderinfo{$_A.site_url}&user={$item.user_id}">����</a></td>
	</tr>
	{/foreach}
			<tr>
			<td colspan="6" class="action">
			<div class="floatl">
			</div>
			<div class="floatr">
			<script>
			var url = '{$_A.query_url_all}';
			{literal}
			function sousuo(){
				var month = $("#month").val();
				var username = $("#username").val();
				location.href=url+"&username="+username+"&month="+month;
			}
			</script>
			{/literal}
			�·�:{linkages name="month" type="value" value="$magic.request.month" nid="spread_month"}
			�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}">
			<input type="submit" value="����" onClick="sousuo()">
			</div>
			</td>
		</tr>
	<tr>
		<td colspan="14" class="page">{$loop.pages|showpage}</td>
	</tr>
	{/list}
</table>
{elseif $_A.query_type=="tender_month"}
<ul class="nav3"> 
	<li><a href="{$_A.query_url}/tender" id="c_so">�ܱ�</a></li>
	<li><a href="{$_A.query_url}/tender_month">�¶ȱ�</a></li>
</ul>
<div class="module_add">
	<div class="module_title"><strong>Ͷ���ƹ㲿���¶ȱ���</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">�û���</td>
		<td width="" class="main_td">�·�</td>
		<td width="" class="main_td">Ͷ���ܶ�</td>
		<td width="" class="main_td">������</td>
		<td width="" class="main_td">�����</td>
		<td width="" class="main_td">��ɱ���</td>
		<td width="" class="main_td">�������</td>
		<td width="" class="main_td">����</td>
	</tr>
	{list module="spread" function="GetSpreadTenderCount" var="loop" month="request"}
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td>{$item.username}</td>
		<td>{$key}��</td>
		<td>{$item.total|default:"-"}</td>
		<td>{$item.task|default:"-"}</td>
		<td>{$item.scale|default:"0"}%</td>
		<td>{$item.task_scale|default:"0"}%</td>
		<td>{$item.scale_fee|default:"-"}</td>
		<td><a href="{$_A.query_url}/tenderinfo{$_A.site_url}&user={$item.user_id}">����</a></td>
	</tr>
	{/foreach}
	<tr>
		<td colspan="8" class="action">
			<div class="floatl">
				����ɣ�{$loop.all}
			</div>
			<div class="floatr">
			{if $magic.request.type!=4}
			<script>
			var url = '{$_A.query_url_all}';
			{literal}
			function sousuo(){
				var month = $("#month").val();
				location.href=url+"&month="+month;
			}
			</script>
			{/literal}
				�·�:{linkages name="month" type="value" value="$magic.request.month" nid="spread_month"}
			<input type="submit" value="����" onClick="sousuo()">
			{/if}
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="14" class="page">{$loop.pages|showpage}</td>
	</tr>

	{/list}
</table>
{elseif $_A.query_type=="tenderinfo"}
{articles module="users" function="GetUsers" user_id="$magic.request.user" var="var"}
<div class="module_add">
	<div class="module_title"><strong>{$var.username}Ͷ���ƹ�����</strong></div>
</div>
{/articles}
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">���</td>
		<td width="" class="main_td">�·�</td>
		<td width="" class="main_td">Ͷ���ܶ�</td>
		<td width="" class="main_td">������</td>
		<td width="" class="main_td">�����</td>
		<td width="" class="main_td">��ɱ���</td>
		<td width="" class="main_td">�������</td>
		<td width="" class="main_td">����</td>
	</tr>
	{list module="spread" function="GetSpreadTenderCount" var="loop" user_id="$magic.request.user"}
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td>{$item.year}</td>
		<td>{$key}��</td>
		<td>{$item.total|default:"-"}</td>
		<td>{$item.task|default:"-"}</td>
		<td>{$item.scale|default:"0"}%</td>
		<td>{$item.task_scale|default:"0"}%</td>
		<td>{$item.scale_fee|default:"-"}</td>
		<td><a href="{$_A.query_url}/tenderone{$_A.site_url}&user={$magic.request.user}&month={$key}">����</a>/{if $item.scale_fee!=""}{if $item.add_status==1}<font color="#ff0000">�Ѵ���</font>{else}<a href="#" onclick="javascript:if(confirm('��ȷ����������������������վ�˻���')) location.href='{$_A.query_url}/addone{$_A.site_url}&user_id={$magic.request.user}&money={$item.scale_fee}&style=tender&month={$key}&year={$item.year}'">������վ�˻�</a>{/if}{else}���������{/if}</td>
	</tr>
	{/foreach}
	<tr>
		<td colspan="8" class="action">
		<div class="floatl">
		</div>
		<div class="floatr">
		</div>
		</td>
	</tr>
	<tr>
		<td colspan="14" class="page">{$loop.pages|showpage}</td>
	</tr>
	{/list}
</table>
{elseif $_A.query_type=="tenderone"}
{articles module="users" function="GetUsers" user_id="$magic.request.user" var="var"}
<div class="module_add">
	<div class="module_title"><strong>{$var.username}��{$magic.request.month}�µĿͻ�Ͷ������</strong></div>
</div>
{/articles}
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">id</td>
		<td width="" class="main_td">Ͷ���û�</td>
		<td width="" class="main_td">Ͷ�ʽ��</td>
		<td width="" class="main_td">������</td>
		<td width="" class="main_td">�����</td>
		<td width="" class="main_td">�������</td>
		<td width="" class="main_td">�������</td>
		<td width="" class="main_td">Ͷ��ʱ��</td>
	</tr>
	{list module="spread" function="GetSpreadTenderList" var="loop" user_id="$magic.request.user" month="$magic.request.month"}
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td>{$item.id}</td>
		<td>{$item.username}</td>
		<td>{$item.account}</td>
		<td><a href="/invest/a{$item.borrow_nid}.html" target="_blank">{$item.borrow_name}</a></td>
		<td>{$item.borrow_account}</td>
		<td>{$item.borrow_apr}%</td>
		<td>{if $item.vouchstatus==1}<font color="#ff0000">��������</font>{elseif $item.fast_status==1}<font color="#0000ff">���ٱ���</font>{else}���ñ���{/if}</td>
		<td>{$item.addtime|date_format:"Y-m-d H:i:s"}</td>
	</tr>
	{/foreach}
			<tr>
			<td colspan="8" class="action">
			<div class="floatl">
			</div>
			<div class="floatr">
			</div>
			</td>
		</tr>
	<tr>
		<td colspan="14" class="page">{$loop.pages|showpage}</td>
	</tr>
	{/list}
</table>
{elseif $_A.query_type=="borrow"}
<ul class="nav3"> 
	<li><a href="{$_A.query_url}/borrow" id="c_so">�ܱ�</a></li>
	<li><a href="{$_A.query_url}/borrow_month">�¶ȱ�</a></li>
</ul>
<div class="module_add">
	<div class="module_title"><strong>����ƹ㲿��</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û���</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">���ƹ�����</td>
		<td width="" class="main_td">�ͻ��ܽ���</td>
		<td width="" class="main_td">����</td>
	</tr>
	{list module="spread" function="GetSpreadUser" var="loop" username="request" type="2" alone_status="0"}
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td>{$item.id}</td>
		<td>{$item.username}</td>
		<td>{$item.email}</td>
		<td>{$item.user_all|default:"0"}</td>
		<td>{$item.borrow_all|default:"0"}</td>
		<td><a href="{$_A.query_url}/borrowinfo{$_A.site_url}&user={$item.user_id}">����</a></td>
	</tr>
	{/foreach}
			<tr>
			<td colspan="6" class="action">
			<div class="floatl">
			</div>
			<div class="floatr">
			<script>
			var url = '{$_A.query_url_all}';
			{literal}
			function sousuo(){
				var username = $("#username").val();
				location.href=url+"&username="+username;
			}
			</script>
			{/literal}
			�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}">
			<input type="submit" value="����" onClick="sousuo()">
			</div>
			</td>
		</tr>
	<tr>
		<td colspan="14" class="page">{$loop.pages|showpage}</td>
	</tr>
	{/list}
</table>
{elseif $_A.query_type=="borrow_month"}
<ul class="nav3"> 
	<li><a href="{$_A.query_url}/borrow" id="c_so">�ܱ�</a></li>
	<li><a href="{$_A.query_url}/borrow_month">�¶ȱ�</a></li>
</ul>
<div class="module_add">
	<div class="module_title"><strong>����ƹ㲿���¶ȱ���</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">�û���</td>
		<td width="" class="main_td">�·�</td>
		<td width="" class="main_td">Ͷ���ܶ�</td>
		<td width="" class="main_td">������</td>
		<td width="" class="main_td">�����</td>
		<td width="" class="main_td">��ɱ���</td>
		<td width="" class="main_td">�������</td>
		<td width="" class="main_td">����</td>
	</tr>
	{list module="spread" function="GetSpreadBorrowCount" var="loop" month="request"}
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td>{$item.username}</td>
		<td>{$key}��</td>
		<td>{$item.total|default:"-"}</td>
		<td>{$item.task|default:"-"}</td>
		<td>{$item.scale|default:"0"}%</td>
		<td>{$item.task_scale|default:"0"}%</td>
		<td>{$item.scale_fee|default:"-"}</td>
		<td><a href="{$_A.query_url}/tenderinfo{$_A.site_url}&user={$item.user_id}">����</a></td>
	</tr>
	{/foreach}
	<tr>
		<td colspan="8" class="action">
			<div class="floatl">
			 ����ɣ�{$loop.all}
			</div>
			<div class="floatr">
			{if $magic.request.type!=4}
			<script>
			var url = '{$_A.query_url_all}';
			{literal}
			function sousuo(){
				var month = $("#month").val();
				location.href=url+"&month="+month;
			}

			</script>
			{/literal}
				�·�:{linkages name="month" type="value" value="$magic.request.month" nid="spread_month"}
			<input type="submit" value="����" onClick="sousuo()">
			{/if}
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="14" class="page">{$loop.pages|showpage}</td>
	</tr>
	{/list}
</table>
{elseif $_A.query_type=="borrowinfo"}
{articles module="users" function="GetUsers" user_id="$magic.request.user" var="var"}
<div class="module_add">
	<div class="module_title"><strong>{$var.username}����ƹ�����</strong></div>
</div>
{/articles}
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">���</td>
		<td width="" class="main_td">�·�</td>
		<td width="" class="main_td">����ܶ�</td>
		<td width="" class="main_td">������</td>
		<td width="" class="main_td">�����</td>
		<td width="" class="main_td">��ɱ���</td>
		<td width="" class="main_td">�������</td>
		<td width="" class="main_td">����</td>
	</tr>
	{list module="spread" function="GetSpreadBorrowCount" var="loop" user_id="$magic.request.user"}
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td>{$item.year}</td>
		<td>{$key}��</td>
		<td>{$item.total|default:"-"}</td>
		<td>{$item.task|default:"-"}</td>
		<td>{$item.scale|default:"0"}%</td>
		<td>{$item.task_scale|default:"0"}%</td>
		<td>{$item.scale_fee|default:"-"}</td>
		<td><a href="{$_A.query_url}/borrowone{$_A.site_url}&user={$magic.request.user}&month={$key}">����</a>/{if $item.scale_fee!=""}{if $item.add_status==1}<font color="#ff0000">�Ѵ���</font>{else}<a href="#" onclick="javascript:if(confirm('��ȷ����������������������վ�˻���')) location.href='{$_A.query_url}/addone{$_A.site_url}&user_id={$magic.request.user}&money={$item.scale_fee}&style=borrow&month={$key}&year={$item.year}'">������վ�˻�</a>{/if}{else}���������{/if}</td>
	</tr>
	{/foreach}
			<tr>
			<td colspan="6" class="action">
			<div class="floatl">
			</div>
			<div class="floatr">
			</div>
			</td>
		</tr>
	<tr>
		<td colspan="14" class="page">{$loop.pages|showpage}</td>
	</tr>
	{/list}
</table>
{elseif $_A.query_type=="borrowone"}
{articles module="users" function="GetUsers" user_id="$magic.request.user" var="var"}
<div class="module_add">
	<div class="module_title"><strong>{$var.username}��{$magic.request.month}�µĿͻ��������</strong></div>
</div>
{/articles}
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">Id</td>
		<td width="" class="main_td">����û�</td>
		<td width="" class="main_td">�����</td>
		<td width="" class="main_td">������</td>
		<td width="" class="main_td">�������</td>
		<td width="" class="main_td">�������</td>
		<td width="" class="main_td">ͨ������ʱ��</td>
	</tr>
	{list module="spread" function="GetSpreadBorrowList" var="loop" user_id="$magic.request.user" month="$magic.request.month"}
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td>{$item.id}</td>
		<td>{$item.username}</td>
		<td>{$item.account}</td>
		<td><a href="/invest/a{$item.borrow_nid}.html" target="_blank">{$item.name}</a></td>
		<td>{$item.borrow_apr}%</td>
		<td>{if $item.vouchstatus==1}<font color="#ff0000">��������</font>{elseif $item.fast_status==1}<font color="#0000ff">���ٱ���</font>{else}���ñ���{/if}</td>
		<td>{$item.reverify_time|date_format:"Y-m-d H:i:s"}</td>
	</tr>
	{/foreach}
			<tr>
			<td colspan="8" class="action">
			<div class="floatl">
			</div>
			<div class="floatr">
			</div>
			</td>
		</tr>
	<tr>
		<td colspan="14" class="page">{$loop.pages|showpage}</td>
	</tr>
	{/list}
</table>
{elseif $_A.query_type=="verify"}
<div class="module_add">
	<div class="module_title"><strong>��˲���</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr>
		<td width="" class="main_td">�·�</td>
		<td width="" class="main_td">�������������ܶ��</td>
		<td width="*" class="main_td">����ʵ����˵��ܶ��</td>
		<td width="*" class="main_td">���µ���ɱ���</td>
		<td width="*" class="main_td">����ͨ����˵��ܶ��</td>
		<td width="*" class="main_td">���µ�ͨ������</td>
		<td width="*" class="main_td">���µ�������</td>
		<th width="" class="main_td">�����</th>
		<td width="*" class="main_td">���µ������</td>
		<th width="" class="main_td">�������</th>
	</tr>
	{list module="spread" function="GetSpreadVerifyCount" var="loop" month="request"}
		{foreach from="$loop.list" item="item"}
		<tr {if $key%2==1} class="tr2"{/if}>
			<td class="main_td1" align="center">{$key}�·�</td>
			<td class="main_td1" align="center">��{$item.ApplyTotal|default:"0"}</td>
			<td class="main_td1" align="center">��{$item.Apply|default:"0"}</td>
			<td class="main_td1" align="center">{$item.VerifyScale|default:"0"}%</td>
			<td class="main_td1" align="center">��{$item.VerifyYes|default:"0"}</td>
			<td class="main_td1" align="center">{$item.VerifyYesScale|default:"0"}%</td>
			<td class="main_td1" align="center">��{$item.VerifyTask|default:"0"}</td>
			<td class="main_td1" align="center">{$item.VerifyTaskScale|default:"0"}%</td>
			<td class="main_td1" align="center">{$item.VerifyTaskFee|default:"0"}%</td>
			<td class="main_td1" align="center">��{$item.VerifyIncome|default:"0"}</td>
		</tr>
		{/foreach}
		<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			</div>
			<div class="floatr">
			<script>
			var url = '{$_A.query_url_all}';
			{literal}
			function sousuo(){
				var month = $("#month").val();
				location.href=url+"&month="+month;
			}

			</script>
			{/literal}
				�·�:{linkages name="month" type="value" value="$magic.request.month" nid="spread_month"}
			<input type="submit" value="����" onClick="sousuo()">
			</div>
			</td>
		</tr>
	{/list}
</table>
{elseif $_A.query_type=="more"}
<div class="module_add">
	<div class="module_title"><strong>�����ƹ���</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">�û�ID</td>
		<td width="" class="main_td">�û���</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">���ƹ�����</td>
		<td width="" class="main_td">�ͻ���Ͷ�ʶ�</td>
		<td width="" class="main_td">�ͻ��ܽ���</td>
		<td width="" class="main_td">����</td>
	</tr>
	{list module="spread" function="GetSpreadUser" var="loop" username="request" type="6"}
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td>{$item.user_id}</td>
		<td>{$item.username}</td>
		<td>{$item.email}</td>
		<td>{$item.user_all|default:"0"}</td>
		{list module="spread" function="GetMoreList" var="lloop" user_id="$item.user_id"}
		<td>{$lloop.all_tender|default:"0"}</td>
		{/list}
		<td>{$item.borrow_all|default:"0"}</td>
		<td><a href="{$_A.query_url}/moreinfo{$_A.site_url}&user={$item.user_id}">����</a></td>
	</tr>
	{/foreach}
	<tr>
		<td colspan="7" class="action">
			<div class="floatl">
			</div>
			<div class="floatr">
			<script>
			var url = '{$_A.query_url_all}';
			{literal}
			function sousuo(){
			var username = $("#username").val();
			location.href=url+"&username="+username;
			}
			</script>
			{/literal}
			�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}">
			<input type="submit" value="����" onClick="sousuo()">
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="14" class="page">{$loop.pages|showpage}</td>
	</tr>
	{/list}
</table>
{elseif $_A.query_type=="moreinfo"}
{articles module="users" function="GetUsers" user_id="$magic.request.user" var="var"}
<div class="module_add">
	<div class="module_title"><strong>{$var.username}�����ƹ�����</strong></div>
</div>
{/articles}
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr>
		<td width="" class="main_td">��ɽ��</td>
		<td width="" class="main_td">��ע</td>
		<td width="" class="main_td">����ʱ��</td>
	</tr>
	{list module="spread" function="GetMoreList" var="loop" user_id="$magic.request.user" type="$magic.request.type" dotime1="request" dotime2="request"}
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td>{$item.money|default:"0.00"}Ԫ</td>
		<td>{$item.remark|default:"-"}</td>
		<td>{$item.addtime|date_format:"Y-m-d H:i:s"}</td>
	</tr>
	{/foreach}
	<tr>
		<td colspan="4" class="action">
		<div class="floatl">
			�ܼ���ɣ�{$loop.all_account|default:0.00}Ԫ
		</div>
		<div class="floatr">
			<script>
			var url = '{$_A.query_url_all}';
			{literal}
			function sousuo(){
			var dotime1 = $("#dotime1").val();
			var dotime2 = $("#dotime2").val();
			location.href=url+"&dotime1="+dotime1+"&dotime2="+dotime2;
			}
			</script>
			{/literal}
			����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/> <input type="button" value="����" / onclick="sousuo()">
		</div>
		</td>
	</tr>
	<tr>
		<td colspan="14" class="page">{$loop.pages|showpage}</td>
	</tr>
	{/list}
</table>
{elseif $_A.query_type=="other"}
<div class="module_add">
	<div class="module_title"><strong>�����ƹ���</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">�û�ID</td>
		<td width="" class="main_td">�û���</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">���ƹ�����</td>
		<td width="" class="main_td">�ͻ���Ͷ�ʶ�</td>
		<td width="" class="main_td">�ͻ��ܽ���</td>
		<td width="" class="main_td">����</td>
	</tr>
	{list module="spread" function="GetSpreadUser" var="loop" username="request" type="3" alone_status="1"}
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td>{$item.user_id}</td>
		<td>{$item.username}</td>
		<td>{if $item.style==1}���{else}Ͷ��{/if}</td>
		<td>{$item.email}</td>
		<td>{$item.user_all|default:"0"}</td>
		<td>{if $item.style==2}{$item.tender_all|default:"0"}{else}-{/if}</td>
		<td>{if $item.style==1}{$item.borrow_all|default:"0"}{else}-{/if}</td>
		{if $item.style==1}
		<td><a href="{$_A.query_url}/otherinfo{$_A.site_url}&user={$item.user_id}&type=borrow_spread">����</a></td>
		{else}
		<td><a href="{$_A.query_url}/otherinfo{$_A.site_url}&user={$item.user_id}&type=tender_spread">����</a></td>
		{/if}
	</tr>
	{/foreach}
	<tr>
		<td colspan="8" class="action">
			<div class="floatl">
				�ܼƣ�{$loop.all_account|default:0.00}Ԫ
			</div>
			<div class="floatr">
			<script>
			var url = '{$_A.query_url_all}';
			{literal}
			function sousuo(){
			var username = $("#username").val();
			location.href=url+"&username="+username;
			}
			</script>
			{/literal}
			�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}">
			<input type="submit" value="����" onClick="sousuo()">
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="14" class="page">{$loop.pages|showpage}</td>
	</tr>
	{/list}
</table>
{elseif $_A.query_type=="otherinfo"}
{articles module="users" function="GetUsers" user_id="$magic.request.user" var="var"}
<div class="module_add">
	<div class="module_title"><strong>{$var.username}�����ƹ�����</strong></div>
</div>
{/articles}
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">��ɽ��</td>
		<td width="" class="main_td">��ע</td>
		<td width="" class="main_td">����ʱ��</td>
	</tr>
	{list module="account" function="GetLogList" var="loop" user_id="$magic.request.user" type="$magic.request.type" dotime1="request" dotime2="request"}
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td>{if $item.type=="borrow_spread"}���{elseif $item.type=="tender_spread"}Ͷ��{/if}</td>
		<td>{$item.money|default:"0"}</td>
		<td>{$item.remark|default:"-"}</td>
		<td>{$item.addtime|date_format:"Y-m-d H:i:s"}</td>
	</tr>
	{/foreach}
	<tr>
		<td colspan="4" class="action">
		<div class="floatl">
			�ܼ���ɣ�{$loop.all_money|default:0.00}Ԫ
		</div>
		<div class="floatr">
			<script>
			var url = '{$_A.query_url_all}';
			{literal}
			function sousuo(){
			var dotime1 = $("#dotime1").val();
			var dotime2 = $("#dotime2").val();
			location.href=url+"&dotime1="+dotime1+"&dotime2="+dotime2;
			}
			</script>
			{/literal}
			����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/> <input type="button" value="����" / onclick="sousuo()">
		</div>
		</td>
	</tr>
	<tr>
		<td colspan="14" class="page">{$loop.pages|showpage}</td>
	</tr>
	{/list}
</table>
{elseif $_A.query_type=="setting"}

<ul class="nav3"> 
	<li><a href="{$_A.query_url_all}&type=1" id="c_so">Ͷ���ƹ�</a></li>
	<li><a href="{$_A.query_url_all}&type=2">����ƹ�</a></li>
	<li><a href="{$_A.query_url_all}&type=3">����ƹ�</a></li>
	<li><a href="{$_A.query_url_all}&type=4">�����ƹ�</a></li>
	<li><a href="{$_A.query_url_all}&type=6">�����ƹ�</a></li>
</ul>
{if $magic.request.id=="" && $magic.request.edit==""}
<div class="module_add">
	<div class="module_title"><strong>{if $magic.request.type==1}<font color="#ff0000">Ͷ��</font>{elseif $magic.request.type==2}<font color="#ff0000">���</font>{elseif $magic.request.type==3}<font color="#ff0000">���</font>{elseif $magic.request.type==4}<font color="#ff0000">����</font>{elseif $magic.request.type==6}<font color="#ff0000">����</font>{/if}�ƹ�����б�(<a href="{$_A.query_url}/setting{$_A.site_url}&type={$magic.request.type}&edit=1">��Ӳ���</a>)</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">��������Ա</td>
		{if $magic.request.type==4 || $magic.request.type==6}
		<td width="" class="main_td">����</td>
		{/if}
		{if $magic.request.type!=4 && $magic.request.type!=6}
		<td width="" class="main_td">�·�</td>
		<td width="" class="main_td">�����</td>
		{/if}
		<td width="" class="main_td">�������</td>
		{if $magic.request.type!=3 && $magic.request.type!=4 && $magic.request.type!=6}
		<td width="" class="main_td">��ɿ�ʼ���</td>
		<td width="" class="main_td">��ɽ������</td>
		{/if}
		<td width="" class="main_td">����</td>
	</tr>
	{list module="spread" function="GetSettingList" var="loop" month="request" type="request"}
		{foreach from="$loop.list" item="item"}
		<tr {if $key%2==1} class="tr2"{/if}>
			<td class="main_td1" align="center">{$item.id}</td>
			<td class="main_td1" align="center">{$item.username}</td>
			{if $magic.request.type==4}
			<td class="main_td1" align="center">{if $item.type==4}Ͷ��{elseif $item.type==5}���{/if}</td>
			{elseif $magic.request.type==6}
			<td class="main_td1" align="center">{if $item.type==7}Ͷ��{elseif $item.type==8}���{/if}</td>
			{/if}
			{if $magic.request.type!=4 && $magic.request.type!=6}
			<td class="main_td1" align="center">{$item.month|linkages:"spread_month"}</td>
			<td class="main_td1" align="center">{$item.task}</td>
			{/if}
			<td class="main_td1" align="center">{$item.task_fee}%</td>
			{if $magic.request.type!=3 && $magic.request.type!=4 && $magic.request.type!=6}
			<td class="main_td1" align="center">{$item.task_first}</td>
			<td class="main_td1" align="center">{$item.task_last}</td>
			{/if}
			<td class="main_td1" align="center"><a href="{$_A.query_url}/setting{$_A.site_url}&type={$magic.request.type}&id={$item.id}">����</a>/<a href="#" onclick="javascript:if(confirm('ȷ��ɾ������������')) location.href='{$_A.query_url}/delsetting{$_A.site_url}&id={$item.id}'">ɾ��</a></td>
		</tr>
		{/foreach}
		<tr>
			<td colspan="10" class="action">
			<div class="floatl">
			</div>
			<div class="floatr">
			{if $magic.request.type!=4 && $magic.request.type!=6}
			<script>
			var url = '{$_A.query_url_all}';
			{literal}
			function sousuo(){
				var month = $("#month").val();
				location.href=url+"&month="+month;
			}

			</script>
			{/literal}
				�·�:{linkages name="month" type="value" value="$magic.request.month" nid="spread_month"}
			<input type="submit" value="����" onClick="sousuo()">
			{/if}
			</div>
			</td>
		</tr>
	{/list}
</table>

{else}
<div class="module_add">
	<form name="form_user" method="post" action="">
	<div class="module_title"><strong>{if $magic.request.type==1}<font color="#ff0000">Ͷ��</font>{elseif $magic.request.type==2}<font color="#ff0000">���</font>{elseif $magic.request.type==3}<font color="#ff0000">���</font>{elseif $magic.request.type==4}<font color="#ff0000">����</font>{/if}��������</strong></div>
	{articles module="spread" function="GetSettingOne" id="$magic.request.id" var="var"}
	{if $magic.request.type!=4 && $magic.request.type!=6}
	<div class="module_border">
		<div class="l">�·ݣ�</div>
		<div class="c">
			{linkages name="month" nid="spread_month" type="value" value="$var.month"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">����</div>
		<div class="c">
			<input name="task" type="text" class="input_border" value="{$var.task}" /> <font color="#FF0000">*</font>���µ��������������ͬ
		</div>
	</div>
	<input type="hidden" name="type" value="{$magic.request.type}">
	{/if}
	{if $magic.request.type==4 || $magic.request.type==6}
	<div class="module_border">
		<div class="l">�ƹ�������ͣ�</div>
		<div class="c">
			{if $magic.request.type==4}
			<input type="radio" name="type" value="4" checked="checked">Ͷ�� <input type="radio" name="type" value="5">���
			{else}
			<input type="radio" name="type" value="7" checked="checked">Ͷ�� <input type="radio" name="type" value="8">���
			{/if}
		</div>
	</div>
	<input name="task" type="hidden" value="1" />
	<input name="month" type="hidden" value="1" />
	{/if}
	<div class="module_border">
		<div class="l">������ʣ�</div>
		<div class="c">
			<input name="task_fee" type="text" class="input_border" value="{$var.task_fee}"/>% <font color="#FF0000">*</font>
		</div>
	</div>
	{if $magic.request.type!=3 && $magic.request.type!=4 && $magic.request.type!=6}
	<div class="module_border">
		<div class="l">��ɿ�ʼ��ȣ�</div>
		<div class="c">
			<input name="task_first" type="text" class="input_border" value="{$var.task_first}"/> <font color="#FF0000">*</font>������ֶ�Ƚ����ʽΪ��ʼ��ȡܳ�������<�������
		</div>
	</div>

	<div class="module_border">
		<div class="l">��ɽ�����ȣ�</div>
		<div class="c">
			<input name="task_last" type="text" class="input_border" value="{$var.task_last}"/> <font color="#FF0000">*</font>������ֶ�Ƚ����ʽΪ��ʼ��ȡܳ�������<�������
		</div>
	</div>
	{/if}
	<input type="hidden" name="admin_userid" value="{$_G.user_id}">
	<input type="hidden" name="id" value="{$magic.request.id}">
	
	<div class="module_submit border_b" >
		<input type="submit" value="�ύ" name="submit"/>
		<input type="reset" name="reset" value="����" />
	</div>
	
	</form>

</div>
{/if}
<!--
{elseif $_A.query_type=="all"}
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="60%">
	<tr>
		<td width="" class="main_td">�û���</td>
		<td width="" class="main_td">��ɽ��</td>
	</tr>
	<tr><td colspan="2" align="center"><strong style="color:red">Ͷ�ʲ���</strong></td></tr>
	{list module="spread" function="GetSpreadUser" var="tender_loop" type="1" alone_status="0"}
	{foreach from="$tender_loop.list" item="tender_item"}
	<tr>
		<td>{$tender_item.username}</td>
		{list module="spread" function="GetSpreadTenderCount" var="tender_count" user_id="$tender_item.user_id"}
		<td>{$tender_count.all}</td>
		{/list}
	</tr>
	{/foreach}
	{/list}
	<tr>
		<td>&nbsp;</td>
		{list module="spread" function="GetSpreadTenderCount" var="tender_count_all"}
		<td>{$tender_count_all.all}</td>
		{/list}
	</tr>
	<tr><td colspan="2" align="center"><strong style="color:red">����</strong></td></tr>
	{list module="spread" function="GetSpreadUser" var="borrow_loop" type="2" alone_status="0"}
	{foreach from="$borrow_loop.list" item="borrow_item"}
	<tr>
		<td>{$borrow_item.username}</td>
		{list module="spread" function="GetSpreadBorrowCount" var="borrow_count" user_id="$borrow_item.user_id"}
		<td>{$borrow_count.all}</td>
		{/list}
	</tr>
	{/foreach}
	{/list}
	<tr>
		<td>&nbsp;</td>
		{list module="spread" function="GetSpreadBorrowCount" var="borrow_count_all"}
		<td>{$borrow_count_all.all}</td>
		{/list}
	</tr>
	<tr><td colspan="2" align="center"><strong style="color:red">��˲���</strong></td></tr>
	<tr>
		<td>�������</td>
		{list module="spread" function="GetSpreadVerifyCount" var="verify_count"}
		<td>{$verify_count.all}</td>
		{/list}
	</tr>
	<tr><td colspan="2" align="center"><strong style="color:red">�����ƹ���</strong></td></tr>
	{list module="spread" function="GetSpreadUser" var="tender_loop" alone_status="1"}
	{foreach from="$tender_loop.list" item="tender_item"}
	<tr>
		<td>{$tender_item.username}</td>
		<td>{$tender_item.username}</td>
	</tr>
	{/foreach}
	{/list}
	<tr><td colspan="2" align="center"><strong style="color:red">�ܼ�</strong></td></tr>
	<tr>
		<td></td>
		<td></td>
	</tr>
</table>
-->
{/if}