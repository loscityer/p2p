{if $_A.query_type == "list"}
<ul class="nav3"> 
<li><a href="{$_A.query_url_all}" id="c_so">����Ȧ��</a></li> 
<li><a href="{$_A.query_url_all}&status=0">�����</a></li> 
<li><a href="{$_A.query_url_all}&status=1">�����</a></li> 
<li><a href="{$_A.query_url_all}&status=2">��ͨ��</a></li> 
<li><a href="{$_A.query_url_all}&action=new">���Ȧ��</a></li> 
</ul> 
<div class="module_add">

{if $magic.request.action=="new" || $magic.request.edit!=""}

<div >
	
	<form action="{$_A.query_url_all}" method="post" enctype="multipart/form-data">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.group_result.id}" />�޸�Ȧ������ ��<a href="{$_A.query_url_all}&action=new">���</a>��{else}���Ȧ������{/if}</strong></div>
	
	<div class="module_border">
		<div class="l">Ȧ�������ˣ��û�������</div>
		<div class="c">
			{if $magic.request.edit!=""}
			<input type="hidden" name="user_id" value="{$_A.group_result.user_id}"/>{$_A.group_result.username}
			{else}
			<input type="text" name="username" value="{$_A.group_result.username}"/>
			{/if}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">Ȧ�����ƣ�</div>
		<div class="c">
			<input type="text" name="name" value="{$_A.group_result.name}"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">Ȧ�����ͣ�</div>
		<div class="c">
			<select name="type_id">
			{loop module="group" function="GetGroupTypeList" limit="all" }
			<option value="{$var.id}" {if $var.id==$_A.group_result.type_id} selected="selected"{/if}>{$var.name}</option>
			{/loop}
			</select>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���Ȩ�ޣ�</div>
		<div class="c">
			{input value='1|����Ⱥ��,2|����Ⱥ��,3|���Ⱥ��' name="public" checked="$_A.group_result.public"}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�ϴ�ͷ��</div>
		<div class="c">
			<input type="file" name="pic" /><input type="hidden" name="litpic" value="{$_A.group_result.litpic}"/>{if $_A.group_result.litpic_url!=""}<a href="{$_A.group_result.litpic_url}" target="_blank"><img src="{$_A.group_result.litpic_url}" width="50" height="50" /></a>{/if}
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">��飺</div>
		<div class="c">
			<textarea name="remark" rows="5" cols="30">{$_A.group_result.remark}</textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����</div>
		<div class="c">
			<input type="text" name="order" value="{$_A.group_result.order|default:10}" size="8"/>
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>


{elseif  $magic.request.view!=""}

<div >
	<div class="module_title"><strong>���Ȧ��</strong></div>
	
	<div class="module_border">
		<div class="l">Ȧ�������ˣ��û�������</div>
		<div class="c">{$_A.group_result.username}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">Ȧ�����ƣ�</div>
		<div class="c">
			{$_A.group_result.name}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">Ȧ�����ͣ�</div>
		<div class="c">
			{$_A.group_result.type_name}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���Ȩ�ޣ�</div>
		<div class="c">
			{if $_A.group_result.public==1}����{elseif $_A.group_result.public==2}����{else}���{/if}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�ϴ�ͷ��</div>
		<div class="c">
			{if $_A.group_result.litpic_url!=""}<a href="{$_A.group_result.litpic_url}" target="_blank"><img src="{$_A.group_result.litpic_url}" width="50" height="50" /></a>{/if}
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">��飺</div>
		<div class="c">
			{$_A.group_result.remark}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����</div>
		<div class="c">
			{$_A.group_result.order|default:10}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
			{if $_A.group_result.status==1}ͨ��{elseif $_A.group_result.status==2}��ͨ��{elseif $_A.group_result.status==3}���{else}�����{/if}
		</div>
	</div>
	{if $_A.group_result.status==0}
	<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="{$_A.query_url_all}&view={$magic.request.view}" >
	<div class="module_border_ajax">
		<div class="l">���״̬:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>���ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>��˲�ͨ�� </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7">{ $_A.borrow_result.verify_remark}</textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="id" value="{ $magic.request.view}" />
		<input type="submit"  name="reset" class="submit_button" value="ȷ�����" />
	</div>
	
</form>
</div>
	{/if}

	</div>
	</div>


{else}
<div class="module_title"><strong>Ȧ�ӹ���</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">����ͼ</td>
		<td width="" class="main_td">Ȧ������</td>
		<td width="" class="main_td">������</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">������</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="group" function="GetGroupList" var="loop" username=request status="request"}
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{if  $item.litpic_url!=""}<a href="{$item.litpic_url}" target="_blank"><img src="{$item.litpic_url}" width="40" height="40" /></a>{else}-{/if}</td>
		<td class="main_td1" align="center">{$item.name}</td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.type_name}</td>
		<td class="main_td1" align="center">{if $item.public==1}����{elseif $item.public==2}����{else}���{/if}</td>
		<td class="main_td1" align="center">{$item.order}</td>
		<td class="main_td1" align="center">{if $item.status==1}ͨ��{elseif $item.status==2}��ͨ��{elseif $item.status==3}���{else}�����{/if}</td>
		<td class="main_td1" align="center">{if $item.status==0}<a href="{$_A.query_url_all}&view={$item.id}&user_id={$item.user_id}">���</a>/{/if}<a href="{$_A.query_url_all}&edit={$item.id}&user_id={$item.user_id}">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='{$_A.query_url_all}&user_id={$item.user_id}&del={$item.id}'">ɾ��</a></td>
	</tr>
	{/foreach}
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '{$_A.query_url_all}';
	  var status = '{$magic.request.status}';
	    {literal}
	  	function sousuo(){
			var username = $("#username").val();
			location.href=url+"&username="+username+"&status="+status;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>   <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	{/list}
	
</table>
{/if}


{elseif $_A.query_type == "articles"}
<ul class="nav3"> 
<li><a href="{$_A.query_url_all}" id="c_so">���л���</a></li> 
<li><a href="{$_A.query_url_all}&status=0">�����</a></li> 
<li><a href="{$_A.query_url_all}&status=1">��ͨ��</a></li> 
<li><a href="{$_A.query_url_all}&status=2">��ͨ��</a></li> 
<li><a href="{$_A.query_url_all}&status=3">�ر�</a></li> 
<li><a href="{$_A.query_url_all}&action=new">��ӻ���</a></li> 
</ul> 
<div class="module_add">

{if $magic.request.action=="new" || $magic.request.edit!=""}

<div >
	
	<form action="{$_A.query_url_all}" method="post" enctype="multipart/form-data">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.group_articles_result.id}" />�޸�Ȧ�ӻ��� ��<a href="{$_A.query_url_all}&action=new">���</a>��{else}���Ȧ�ӻ���{/if}</strong></div>
	
	<div class="module_border">
		<div class="l">���������ˣ��û�������</div>
		<div class="c">
			{if $magic.request.edit!=""}
			<input type="hidden" name="user_id" value="{$_A.group_articles_result.user_id}"/>{$_A.group_articles_result.username}
			{else}
			<input type="text" name="username" value="{$_A.group_articles_result.username}"/>
			{/if}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����Ȧ�ӣ�</div>
		<div class="c">{if $magic.request.edit==""}
		<select name="group_id">
			{loop module="group" function="GetGroupList" limit="all" var="_var"}
			<option value="{$_var.id}" {if $_A.group_articles_result.group_id==$_var.id} selected="selected"{/if}>{$_var.name}</option>
			{/loop}
			</select>
		{else}
			{$_A.group_articles_result.group_name}<input type="hidden" name="group_id" value="{$_A.group_articles_result.group_id}"/>
			{/if}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����״̬��</div>
		<div class="c">
			{input name="status" value="1|��ͨ��,2|��ͨ��,0|�����,3|�ر�" checked="$_A.group_articles_result.status"}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�������ƣ�</div>
		<div class="c">
			<input type="text" name="name" value="{$_A.group_articles_result.name}"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">��飺</div>
		<div class="c">
			<textarea id="bcontents" name="contents" rows="28"  style="width: 100%">{$_A.group_articles_result.contents}</textarea>		
	
		{literal}<script>
		$('#bcontents').xheditor({skin:'o2007blue',upImgUrl:"/?admin&q=plugins&p=xheditor&immediate=1",upImgExt:"jpg,jpeg,gif,png"});
		function submitForm(){
		$("#bcontents").val();
		$('#frm').submit();
		return false;}
		</script>
		{/literal}
		
		</div>
	</div>
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>


{elseif  $magic.request.view!=""}

<div >
	<div class="module_title"><strong>���Ȧ��</strong></div>
	
	<div class="module_border">
		<div class="l">Ȧ�������ˣ��û�������</div>
		<div class="c">{$_A.group_articles_result.username}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">Ȧ�����ƣ�</div>
		<div class="c">
			{$_A.group_articles_result.name}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">Ȧ�����ͣ�</div>
		<div class="c">
			{$_A.group_articles_result.type_name}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���Ȩ�ޣ�</div>
		<div class="c">
			{if $_A.group_articles_result==1}����{elseif $_A.group_articles_result==2}����{else}���{/if}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�ϴ�ͷ��</div>
		<div class="c">
			{if $_A.group_articles_result.litpic_url!=""}<a href="{$_A.group_articles_result.litpic_url}" target="_blank"><img src="{$_A.group_articles_result.litpic_url}" width="50" height="50" /></a>{/if}
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">��飺</div>
		<div class="c">
			{$_A.group_articles_result.remark}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����</div>
		<div class="c">
			{$_A.group_articles_result.order|default:10}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
			{if $_A.group_articles_result.status==1}ͨ��{elseif $_A.group_articles_result.status==2}��ͨ��{elseif $_A.group_articles_result.status==3}���{else}�����{/if}
		</div>
	</div>
	{if $_A.group_articles_result.status==0}
	<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="{$_A.query_url_all}&view={$magic.request.view}" >
	<div class="module_border_ajax">
		<div class="l">���״̬:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>���ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>��˲�ͨ�� </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7">{ $_A.borrow_result.verify_remark}</textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="id" value="{ $magic.request.view}" />
		<input type="submit"  name="reset" class="submit_button" value="ȷ�����" />
	</div>
	
</form>
</div>
	{/if}

	</div>
	</div>


{else}
<div class="module_title"><strong>�������</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û���</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">����Ȧ��</td>
		<td width="*" class="main_td">���ʱ��</td>
		<td width="*" class="main_td">�ظ�����</td>
		<td width="*" class="main_td">�ظ�ʱ��</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="group" function="GetGroupArticlesList" var="loop" username=request status="request"}
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.name}</td>
		<td class="main_td1" align="center">{$item.group_name}</td>
		<td class="main_td1" align="center">{$item.addtime|date_format}</td>
		<td class="main_td1" align="center">{$item.comment_count}</td>
		<td class="main_td1" align="center">{$item.comment_time|date_format|default:-}</td>
		<td class="main_td1" align="center">{if $item.status==1}<font color="#006600">ͨ��</font>{elseif $item.status==2}��ͨ��{elseif $item.status==3}<font color="#666666">�ر�</font>{else}�����{/if}</td>
		<td class="main_td1" align="center"><a href="{$_A.query_url_all}&edit={$item.id}&user_id={$item.user_id}">�޸�</a></td>
	</tr>
	{/foreach}
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '{$_A.query_url_all}';
	  var status = '{$magic.request.status}';
	    {literal}
	  	function sousuo(){
			var username = $("#username").val();
			location.href=url+"&username="+username+"&status="+status;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>   <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	{/list}
	
</table>
{/if}



{elseif $_A.query_type == "type"}
<div class="module_add">
	<div class="module_title"><strong>Ȧ������</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.group_type_result.id}" />�޸�Ȧ������ ��<a href="{$_A.query_url_all}">���</a>��{else}���Ȧ������{/if}</strong></div>
	
	
	<div class="module_border">
		<div class="l">�������ƣ�</div>
		<div class="c">
			<input type="text" name="name" value="{$_A.group_type_result.name}"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ʶ����</div>
		<div class="c">
			<input type="text" name="nid" value="{$_A.group_type_result.nid}"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
			{input name="status" value="1|����,2|�ر�" checked="$_A.group_type_result.status"}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">������</div>
		<div class="c">
			<textarea name="remark" rows="5" cols="30">{$_A.group_type_result.remark}</textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����</div>
		<div class="c">
			<input type="text" name="order" value="{$_A.group_type_result.order|default:10}" size="8"/>
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	
	
	
	<div class="module_title"><strong>Ȧ�������б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">��ʶ��</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="group" function="GetGroupTypeList" var="loop" username=request }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.name}</td>
		<td class="main_td1" align="center">{$item.nid}</td>
		<td class="main_td1" align="center">{if $item.status==1}����{else}�ر�{/if}</td>
		<td class="main_td1" align="center">{$item.order}</td>
		<td class="main_td1" align="center">{$item.remark}</td>
		<td class="main_td1" align="center"><a href="{$_A.query_url_all}&edit={$item.id}">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='{$_A.query_url_all}&del={$item.id}'">ɾ��</a></td>
	</tr>
	{/foreach}
	
	<tr align="center">
		<td colspan="10" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	{/list}
	
</table>

<!--�˵��б� ����-->
</div>
</div>

{elseif $_A.query_type == "member"}

<ul class="nav3"> 
<li><a href="{$_A.query_url_all}" id="c_so">���г�Ա</a></li> 
<li><a href="{$_A.query_url_all}&status=0">������</a></li> 
<li><a href="{$_A.query_url_all}&status=1">��ͨ��</a></li> 
<li><a href="{$_A.query_url_all}&status=2">��ͨ��</a></li> 
<li><a href="{$_A.query_url_all}&status=3">�ر�</a></li> 
<li><a href="{$_A.query_url_all}&status=4">�˳�</a></li> 
</ul> 
<div class="module_add">




{if $magic.request.action=="new" || $magic.request.edit!=""}

<div >
	
	<form action="{$_A.query_url_all}" method="post" enctype="multipart/form-data">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="user_id" value="{$_A.group_member_result.user_id}" /><input type="hidden" name="group_id" value="{$_A.group_member_result.group_id}" />�޸�Ȧ�ӳ�Ա ��<a href="{$_A.query_url_all}&action=new">���</a>��{else}���Ȧ������{/if}</strong></div>
	
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
		{$_A.group_member_result.username}
			
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����Ȧ�ӣ�</div>
		<div class="c">
			{$_A.group_member_result.group_name}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�������ɣ�</div>
		<div class="c">
			{$_A.group_member_result.remark}
		</div>
	</div>
	<div class="module_border">
		<div class="l">����ʱ�䣺</div>
		<div class="c">
			{$_A.group_member_result.addtime|date_format}
		</div>
	</div>
	<div class="module_border">
		<div class="l">����IP��</div>
		<div class="c">
			{$_A.group_member_result.addip}
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
			{input value='1|��ͨ��,2|��ͨ��,0|������,3|�ر�,4|�˳�' name="status" checked="$_A.group_member_result.status"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">�Ƿ����Ա��</div>
		<div class="c">
			{input value='0|����,1|��' name="admin_status" checked="$_A.group_member_result.admin_status"}
		</div>
	</div>
	
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>


{else}
<div class="module_title"><strong>��Ա����</strong></div>
	</div>

<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û���</td>
		<td width="" class="main_td">����Ȧ��</td>
		<td width="" class="main_td">�Ƿ����Ա</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">���뱸ע</td>
		<td width="*" class="main_td">���ʱ��</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="group" function="GetGroupMemberList" var="loop" username=request status="request"}
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.group_name}({$item.group_id})</td>
		<td class="main_td1" align="center">{if $item.admin_status==1}��{else}��{/if}</td>
		<td class="main_td1" align="center">{if $item.status==1}<font color="#006600">ͨ��</font>{elseif $item.status==2}��ͨ��{elseif $item.status==3}<font color="#999999">�ر�</font>{else}�����{/if}</td>
		<td class="main_td1" align="center">{$item.remark}</td>
		<td class="main_td1" align="center">{$item.addtime|date_format:"Y-m-d"}</td>
		<td class="main_td1" align="center"><a href="{$_A.query_url_all}&edit={$item.id}&group_id={$item.group_id}">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫ�ر���?�رպ󽫲��ɻָ�')) location.href='{$_A.query_url_all}&close={$item.user_id}&group_id={$item.group_id}'">�ر�</a></td>
	</tr>
	{/foreach}
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '{$_A.query_url_all}';
	  var status = '{$magic.request.status}';
	    {literal}
	  	function sousuo(){
			var username = $("#username").val();
			location.href=url+"&username="+username+"&status="+status;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>   <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	{/list}
	
</table>
{/if}




{elseif $_A.query_type == "comments"}

<ul class="nav3"> 
<li><a href="{$_A.query_url_all}" id="c_so">��������</a></li> 
<li><a href="{$_A.query_url_all}&status=1">��ͨ��</a></li> 
<li><a href="{$_A.query_url_all}&status=2">��ͨ��</a></li> 
<li><a href="{$_A.query_url_all}&status=0">�����</a></li> 
<li><a href="{$_A.query_url_all}&status=3">�ر�</a></li> 
</ul> 
<div class="module_add">




{if $magic.request.action=="new" || $magic.request.edit!=""}

<div >
	
	<form action="{$_A.query_url_all}" method="post" enctype="multipart/form-data">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.group_comments_result.id}" /><input type="hidden" name="group_id" value="{$_A.group_comments_result.group_id}" /><input type="hidden" name="articles_id" value="{$_A.group_comments_result.articles_id}" />�޸����� ��<a href="{$_A.query_url_all}&action=new">���</a>��{else}�������{/if}</strong></div>
	
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
		{$_A.group_comments_result.username}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����Ȧ�ӣ�</div>
		<div class="c">
			{$_A.group_comments_result.group_name}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�������£�</div>
		<div class="c">
			{$_A.group_comments_result.articles_name}
		</div>
	</div>
	<div class="module_border">
		<div class="l">����ʱ�䣺</div>
		<div class="c">
			{$_A.group_comments_result.addtime|date_format}
		</div>
	</div>
	<div class="module_border">
		<div class="l">����IP��</div>
		<div class="c">
			{$_A.group_comments_result.addip}
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
			{input value='1|��ͨ��,2|��ͨ��,0|�����,3|�ر�,4|�˳�' name="status" checked="$_A.group_comments_result.status"}
		</div>
	</div>
	<div class="module_border" >
		<div class="l">�ظ�����:</div>
		<div class="c">
			<textarea name="contents" cols="45" rows="7">{ $_A.group_comments_result.contents}</textarea>
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>


{else}
<div class="module_title"><strong>���۹���</strong></div>
	</div>

<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û���</td>
		<td width="" class="main_td">����Ȧ��</td>
		<td width="" class="main_td">��������</td>
		<td width="*" class="main_td">�ظ�����</td>
		<td width="*" class="main_td">�ظ�ʱ��</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">���ʱ��</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="group" function="GetGroupCommentsList" var="loop" username=request status="request" type="all"}
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.group_name}({$item.group_id})</td>
		<td class="main_td1" align="center">{$item.articles_name}</td>
		<td class="main_td1" align="center"><div style="height:50px; width:200px; overflow:auto">{$item.contents}</div></td>
		<td class="main_td1" align="center">{$item.addtime|date_format}</td>
		<td class="main_td1" align="center">{if $item.status==1}<font color="#006600">��ͨ��</font>{elseif $item.status==2}��ͨ��{elseif $item.status==3}<font color="#999999">�ر�</font>{else}�����{/if}</td>
		<td class="main_td1" align="center">{$item.addtime|date_format:"Y-m-d"}</td>
		<td class="main_td1" align="center"><a href="{$_A.query_url_all}&edit={$item.id}&group_id={$item.group_id}">�޸�</a></td>
	</tr>
	{/foreach}
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '{$_A.query_url_all}';
	  var status = '{$magic.request.status}';
	    {literal}
	  	function sousuo(){
			var username = $("#username").val();
			location.href=url+"&username="+username+"&status="+status;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>   <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	{/list}
	
</table>
{/if}




{/if}