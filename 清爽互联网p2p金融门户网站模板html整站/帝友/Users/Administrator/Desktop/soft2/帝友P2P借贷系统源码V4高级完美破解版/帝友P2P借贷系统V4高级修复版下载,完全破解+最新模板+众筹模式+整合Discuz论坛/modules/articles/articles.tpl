{if $_A.query_type == "new" || $_A.query_type == "edit"}

<form action="" method="post" id="frm" enctype="multipart/form-data" >
<div class="module_add">
	<div class="module_title"><strong>{if $_A.query_type == "edit" }<input type="hidden" name="id"  value="{$magic.request.id}" />�޸�����{else}�������{/if}</strong><input type="hidden" name="user_id" value="{$_A.articles_result.user_id|default:$_G.user_id}" /></div>
	<div style="margin-top:10px;">
	<div style="float:right; width:30%;">
		
		<div style="border:1px solid #CCCCCC; margin-bottom:10px ">
			<div class="module_title"><strong>׫д������</strong></div>
			<div class="module_border">
				<div class="c">
					״̬��<select name='status' >
					<option value="1" {if $_A.articles_result.status==1} selected="selected"{/if}>����</option>
					<option value="2" {if $_A.articles_result.status==2} selected="selected"{/if}>�ݸ�</option>
					<option value="3" {if $_A.articles_result.status==3} selected="selected"{/if}>�ȴ����</option>
					</select>
				</div>
			</div>
			<div class="module_border">
				<div class="c">
					����<input type="text" name="order" value="{$_A.articles_result.order|default:10}" size="5" onkeyup="value=value.replace(/[^0-9]/g,'')"/>
				</div>
			</div>
			<div class="module_border">
				<div class="c">
					���ࣺ<input type="checkbox" name="flag[]" value="index" align="absmiddle" {$_A.articles_result.flag|checked:"index"}/>��ҳ <input type="checkbox" name="flag[]" value="tuijian"  align="absmiddle" {$_A.articles_result.flag|checked:"tuijian"}/>�Ƽ� <input type="checkbox" name="flag[]" value="ding"  align="absmiddle" {$_A.articles_result.flag|checked:"ding"}/>�ö�
				</div>
			</div>
			<div class="module_border">
				<div class="c">
					�����ȣ�<input type="radio" name="public" value="1" checked="checked" onclick="$('#password').hide()" {if $_A.articles_result.public==1} checked="checked"{/if} />���� <input type="radio" name="public" value="2" onclick="$('#password').hide()"/{if $_A.articles_result.public==2} checked="checked"{/if} >˽�� <input type="radio" name="public" value="3" onclick="$('#password').show()" {if $_A.articles_result.public==3} checked="checked"{/if} />����  <input type="text" id="password" name='password' size="3" {if $_A.articles_result.public!=3}style="display:none"{/if} value="{$_A.articles_result.password} " />
				</div>
			</div>
			
			
			<div class="module_border">
				<div class="c">
					����ʱ�䣺<input type="text" name="publish"  class="input_border" value="{ $_A.articles_result.publish|default:"nowdate"}" size="30" onclick="change_picktime('yyyy-MM-dd HH:mm:ss')" readonly=""/>
				</div>
			</div>
			<div class="module_submit"><input type="button" value="ȷ���ύ" class="submit_button" name="save" onclick="submitForm()"/>
</div>
			
		</div>
		
		<div style="border:1px solid #CCCCCC; margin-bottom:10px; ">
			<div class="module_title"><strong>���±�ǩ</strong></div>
			<div class="module_border" style="padding:10px;">
					��ǩ��<input type="text" name="tags"  class="input_border" value="{ $_A.articles_result.tags}" size="30"/>
			</div>
		</div>
		
		<div style="border:1px solid #CCCCCC; ">
			<div class="module_title"><strong>������Ŀ</strong></div>
			<div class="module_border" style="padding-left:10px;">
					<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" style="width:94%" >
	
	{ loop module="articles" function="GetTypeMenu" var="item" limit="all" }
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{$item.var}<input type="checkbox" align="absmiddle" name="type_id[]" value="{$item.id}" {if $_A.query_type == "new"}{$_A.articles_type_id|checked:"$item.id"}{else}{$_A.articles_result.type_id|checked:"$item.id"}{/if} /> {$item.name}</td>
	</tr>
	{/loop}
	
</table>
			</div>
		</div>
		
		
		<div style="border:1px solid #CCCCCC; margin-top:10px; ">
			<div class="module_title"><strong>����ͼ</strong></div>
			<div class="module_border" style="padding:10px;">
				{if $_A.articles_result.litpic!=""}<img src="{$_A.articles_result.fileurl}" width="50" height="50" align="absmiddle" /><input type="checkbox" name="clearlitpic" value="1" title="ѡ�����ɾ��������ͼ" /><input type="hidden" name="oldlitpic" value="{$_A.articles_result.litpic}" />ȡ�� {/if}<input type="file" name="litpic" style="width:150px" />
			</div>
		</div>
		
		
		<div style="border:1px solid #CCCCCC; margin-top:10px; ">
			<div class="module_title"><strong>������</strong></div>
			<div class="module_border" style="padding:10px;">
					<input type="text" name="title"  class="input_border" value="{ $_A.articles_result.title}" size="30"/>
			</div>
		</div>
		
	</div>
		</div>
	<div style="float:left; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>׫д������</strong></div>
	
	<div class="module_border">
		<div class="c" style="padding:10px 0">
			��&nbsp;&nbsp;�⣺<input type="text" name="name" value="{$_A.articles_result.name}" style="height:25px; width:400px"/>
		</div>
	</div>
	
	<div class="module_border" style=" padding-top:10px;">
			<textarea id="bcontents" name="contents" rows="28"  style="width: 100%">{$_A.articles_result.contents}</textarea>		
	
		<script>
		var admin_url = "/{$_A.admin_url}";
		{literal}
		$('#bcontents').xheditor({skin:'o2007blue',upImgUrl:admin_url+"&q=plugins&p=xheditor&immediate=1",upImgExt:"jpg,jpeg,gif,png"});
		function submitForm(){
		$("#bcontents").val();
		$('#frm').submit();
		return false;}
		</script>
		{/literal}
		
	</div>
	
	<div class="module_border">
		<div class="c" style="padding:10px 0">
			���֣�{loop module="credit" function="GetTypeList" code="articles" limit="all" }
			<input type="checkbox" value="{$var.nid}" name="credits[]" {$_A.articles_result.credits|checked:"$var.nid"} />{$var.name}[{$var.class_id|credit_class}]({$var.value})
			{/loop}
		</div>
	</div>
		</form>
	</div>
<!--�˵��б� ����-->
</div>
</div>
{elseif $_A.query_type=="list"}
{if $magic.request.view!=""}
<div class="module_add">
	
	<div class="module_title"><strong>���ݲ鿴</strong></div>

	<div class="module_border">
		<div class="l">���⣺</div>
		<div class="c">
			{ $_A.articles_result.name}
		</div>
	</div>
{ if $_A.articles_result.jumpurl!=""}
	<div class="module_border">
		<div class="l">��ת��ַ��</div>
		<div class="c">
			{ $_A.articles_result.jumpurl}</div>
	</div>
{/if}
	<div class="module_border">
		<div class="l">������Ŀ��</div>
		<div class="c">
			{ $_A.articles_result.type_id }</select>
		</div>
	</div>

{ if $_A.articles_result.flag!=""}
	<div class="module_border">
		<div class="l">���ԣ�</div>
		<div class="c">
			{ $_A.articles_result.flag|flag}</div>
	</div>
{/if}
	{if $_A.articles_result.is_jump!=1}
	{if $_A.articles_result.litpic!=""}
	<div class="module_border">
		<div class="l">����ͼ��</div>
		<div class="c">
			{if $_A.articles_result.litpic!=""}<a href="./{ $_A.articles_result.fileurl}" target="_blank" title="����鿴��ͼ" ><img src="{ $_A.articles_result.fileurl}" border="0" width="100" alt="����鿴��ͼ" title="����鿴��ͼ" /></a>{/if}</div>
	</div>

	{/if}
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
			{ if $_A.articles_result.status == 0 }����{else}��ʾ{/if}
		 </div>
	</div>

	<div class="module_border">
		<div class="l">����:</div>
		<div class="c">
			{ $_A.articles_result.order|default:10}
		</div>
	</div>
{ if $_A.articles_result.source!=""}
	<div class="module_border">
		<div class="l">������Դ:</div>
		<div class="c">
			{ $_A.articles_result.source}</div>
	</div>
	{/if}
{ if $_A.articles_result.author!=""}
	<div class="module_border">
		<div class="l">����:</div>
		<div class="c">
			{ $_A.articles_result.author}</div>
	</div>
{/if}
{ if $_A.articles_result.summary!=""}
	<div class="module_border">
		<div class="l">���ݼ��:</div>
		<div class="c">
			{ $_A.articles_result.summary}</div>
	</div>
{/if}
	<div class="module_border">
		<div class="l">����:</div>
		<div class="c">
			<table><tr><td align="left">{ $_A.articles_result.contents}</td></tr></table></div>
	</div>


	<div class="module_border">
		<div class="l">�������/����:</div>
		<div class="c">
			{ $_A.articles_result.hits}/{ $_A.articles_result.comment_times}</div>
	</div>

	{/if}
	<div class="module_border">
		<div class="l">���ʱ��/IP:</div>
		<div class="c">
			{ $_A.articles_result.addtime|date_format:'Y-m-d'}/{ $_A.articles_result.addip}</div>
	</div>

	<div class="module_border">
		<div class="l">�����:</div>
		<div class="c">
			{ $_A.articles_result.username}</div>
	</div>

	<div class="module_submit" >
		{ if $_A.query_type == "edit" }<input type="hidden" name="id" value="{ $_A.articles_result.id }" />{/if}
		<input type="button"  name="submit" value="������һҳ" onclick="javascript:history.go(-1)" />
		<input type="button"  name="reset" value="�޸�����" onclick="javascript:location.href('{$_A.query_url}/edit{$_A.site_url}&id={ $_A.articles_result.id}')"/>
	</div>
	</form>
</div>
{elseif $magic.request.check!=""}

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="{$_A.query_url_all}&check={$magic.request.check}" >
	<div class="module_border_ajax">
		<div class="l">���״̬:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>���ͨ�� <input type="radio" name="status" value="4"  checked="checked"/>��˲�ͨ�� </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7">{ $_A.articles_result.verify_remark}</textarea>
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
		<input type="hidden" name="borrow_nid" value="{ $magic.request.check}" />
		<input type="submit"  name="reset" class="submit_button" value="��˴˱�" />
	</div>
	
</form>
</div>

{else}
<div class="module_add">
	<div class="module_title" style="overflow:hidden">
	<div style="float:left"><strong>�����б�</strong> (<a href="{$_A.query_url}/new">�������</a>)</div>
	<div style="float:right">
				�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>  ���⣺<input type="text" name="name" id="name" value="{$magic.request.name|urldecode}"/> ���ͣ�{input type="select" name="type_id" value="$_A.articles_type_result" checked="$magic.request.type_id" default="��ʾȫ��"}   <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
			</div>
	</div>
	
</div>

<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="{$_A.query_url_all}" method="post">
		<tr >
			<td width="" class="main_td"><input type="checkbox" name="allcheck" onclick="checkFormAll(this.form)"/></td>
			<td width="" class="main_td">{if $magic.request.order=="id_desc"}<a href="{$_A.query_url_all}&order=id_asc">ID��</a>{elseif $magic.request.order=="id_asc"}<a href="{$_A.query_url_all}&order=id_desc">ID��</a>{else}<a href="{$_A.query_url_all}&order=id_desc">ID</a>{/if}</td>
			<td width="*" class="main_td">����</td>
			<td width="*" class="main_td">����</td>
			<td width="" class="main_td">������Ŀ</td>
			<td width="" class="main_td">״̬</td>
			<td width="" class="main_td">{if $magic.request.order=="order_desc"}<a href="{$_A.query_url_all}&order=order_asc">�����</a>{elseif $magic.request.order=="order_asc"}<a href="{$_A.query_url_all}&order=order_desc">�����</a>{else}<a href="{$_A.query_url_all}&order=order_desc">����</a>{/if}</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">���ʱ��</td>
			<td width="" class="main_td">����</td>
		</tr>
		{ list  module="articles" function="GetList" var="loop" epage=20  username="request" name=request  type_id=request order="id_desc" }
		{foreach from="$loop.list" item="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td class="main_td1" align="center" ><input type="checkbox" name="aid[]" id="aid[]" value="{$item.id}"/></td>
			<td class="main_td1" align="center" >{ $item.id}</td>
			<td class="main_td1" align="center"><a href="{$_A.query_url}&view={$item.id}">{$item.name|truncate:34}</a></td>
			<td class="main_td1" align="center" >{ $item.username}</td>
			<td class="main_td1" align="center" >{$item.type_id|in_array:"$_A.articles_type_result"}</td>
			<td class="main_td1" align="center" >{ if $item.status ==1}�ѷ���{ elseif $item.status ==3}<a href="javascript:void(0)" onclick='tipsWindown("�������","url:get?{$_A.query_url}&check={$item.id}",500,230,"true","","false","text");'>�����</a>{ elseif $item.status ==2}�ݸ�{else}���ʧ��{/if}</td>
			<td class="main_td1" align="center" ><input type="text" name="order[]" value="{$item.order}" size="2" /><input type="hidden" name="id[]" value="{$item.id}" /></td>
			<td class="main_td1" align="center" >{$item.flag|in_array:"$_A.articles_flag"}</td>
			<td class="main_td1" align="center" >{$item.comment_times}</td>
			<td class="main_td1" align="center" >{$item.addtime|date_format:"y/m/d"}</td>
			<td class="main_td1" align="center" ><a href="{$_A.query_url}&view={$item.id}">�鿴</a> <a href="{$_A.query_url}/edit{$_A.site_url}&id={$item.id}">�޸�</a> <a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='{$_A.query_url}/&del={$item.id}'">ɾ��</a></td>
		</tr>
		{ /foreach}
		<tr>
			<td colspan="11" class="action">
				<div class="floatl"><select name="type">
			<option value="order">����</option>
			<option value="del">ɾ��</option>
			</select>&nbsp;&nbsp;&nbsp; <input type="submit" value="ȷ�ϲ���" /> ������ȫѡ
			</div>
			<script>
	  var url = '{$_A.query_url_all}';
	    {literal}
	  	function sousuo(){
			var username = $("#username").val();
			var name = $("#name").val();
			var type_id = $("#type_id").val();
			location.href=url+"&username="+username+"&name="+name+"&type_id="+type_id;
		}
	  
	  </script>
	  {/literal}
			
			</td>
		</tr>
		<tr>
			<td colspan="8" class="page">
			{$loop.pages|showpage} 
			</td>
		</tr>
	</form>	
	{/list}
</table>
{/if}
{elseif $_A.query_type == "type"}
<div class="module_add">
	<div class="module_title"><strong>������Ŀ</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.article_type_result.id}" />�޸ķ�����Ŀ ��<a href="{$_A.query_url_all}">���</a>��{else}��ӷ�����Ŀ{/if}</strong></div>
	<div class="module_border">
		<div class="c">
			��&nbsp;&nbsp;�ƣ�<input type="text" name="name" value="{$_A.article_type_result.name}"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="c">
			��&nbsp;&nbsp;����<input type="text" name="nid" value="{$_A.article_type_result.nid}" onkeyup="value=value.replace(/[^a-z0-9]/g,'')"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="c">
			��&nbsp;&nbsp;����<select name="pid">
			<option>��Ŀ¼</option>
			{loop module="articles" function="GetTypeMenu" var="item" }
			{if $item.pid!=$_A.article_type_result.pid}
			<option value="{$item.id}" {if $_A.article_type_result.pid==$item.id}  selected="selected"{/if}>{$item._name}</option>
			{/if}
			{/loop}
			</select>
		</div>
	</div>
	
	<div class="module_border">
		<div class="c">
			��&nbsp;&nbsp;�� ��<input type="text" name="order" value="{$_A.article_type_result.order|default:10}" size="6" onkeyup="value=value.replace(/[^0-9]/g,'')"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="c">
			��&nbsp;&nbsp;�ݣ�<textarea cols="30" rows="5" name="contents">{$_A.article_type_result.contents|html_format}</textarea>
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
	<div class="module_title"><strong>������Ŀ</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ loop module="articles" function="GetTypeMenu" var="item" limit="all" }
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.type_name}</td>
		<td class="main_td1" align="center">{$item.nid}</td>
		<td class="main_td1" align="center">{$item.order}</td>
		<td class="main_td1" align="center"><a href="{$_A.query_url}/type&edit={$item.id}">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='{$_A.query_url}/type&del={$item.id}'">ɾ��</a></td>
	</tr>
	{/loop}
	
</table>
<!--�˵��б� ����-->
</div>
</div>
{elseif $_A.query_type=="page_list"}

<div class="module_add">
	<div class="module_title"><strong>ҳ���б�</strong></div>
</div>

<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="{$_A.query_url}/action{$_A.site_url}" method="post">
		<tr >
			<td width="" class="main_td">{if $magic.request.order=="id_desc"}<a href="{$_A.query_url_all}&order=id_asc">ID��</a>{elseif $magic.request.order=="id_asc"}<a href="{$_A.query_url_all}&order=id_desc">ID��</a>{else}<a href="{$_A.query_url_all}&order=id_desc">ID</a>{/if}</td>
			<td width="*" class="main_td">����</td>
			<td width="*" class="main_td">����</td>
			<td width="" class="main_td">��ʶ��</td>
			<td width="" class="main_td">״̬</td>
			<td width="" class="main_td">{if $magic.request.order=="order_desc"}<a href="{$_A.query_url_all}&order=order_asc">�����</a>{elseif $magic.request.order=="order_asc"}<a href="{$_A.query_url_all}&order=order_desc">�����</a>{else}<a href="{$_A.query_url_all}&order=order_desc">����</a>{/if}</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">����ʱ��</td>
			<td width="" class="main_td">����</td>
		</tr>
		{ loop  module="articles" function="GetPageMenu" var="item" username="request" order=request limit="all" }
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td class="main_td1" align="center" >{ $item.id}</td>
			<td class="main_td1" align="center" >{ $item.username}</td>
			<td class="main_td1" align="center"><a href="{$_A.query_url_all}&view={$item.id}">{$item.type_name|truncate:34}</a></td>
			<td class="main_td1" align="center" >{$item.nid}</td>
			<td class="main_td1" align="center" >{ if $item.status ==1}����{ elseif $item.status ==2}�ݸ�{ elseif $item.status ==3}�ȴ�����{/if}</td>
			<td class="main_td1" align="center" >{$item.order}</td>
			<td class="main_td1" align="center" >{$item.comment_times}</td>
			<td class="main_td1" align="center" >{$item.publish}</td>
			<td class="main_td1" align="center" > <a href="{$_A.query_url}/page_edit&id={$item.id}">�޸�</a> <a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='{$_A.query_url}/page_list&del={$item.id}'">ɾ��</a></td>
		</tr>
		{ /loop}
		
		
	</form>	
</table>
{elseif $_A.query_type == "page_new" || $_A.query_type == "page_edit"}

<form action="" method="post" id="frm" >
<div class="module_add">
	<div class="module_title"><strong>{if $_A.query_type == "page_edit" }<input type="hidden" name="id"  value="{$magic.request.id}" />�޸�ҳ��{else}���ҳ��{/if}</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
		<div style="border:1px solid #CCCCCC; margin-bottom:10px ">
			<div class="module_title"><strong>ҳ�������Ϣ</strong></div>
			<div class="module_border">
				<div class="c">
					<font color="#FF0000">��ʶ����</font><input type="text" name="nid"  size="12" value="{$_A.page_result.nid}"/><font color="#FF0000">*</font>
				</div>
			</div>
			
			
			<div class="module_border">
				<div class="c">
					��&nbsp;&nbsp;�� ��<select name="pid">
					<option>��Ŀ¼</option>
					{loop module="articles" function="GetPageMenu" var="item" }
					<option value="{$item.id}" {if $_A.page_result.pid==$item.id}  selected="selected"{/if}>{$item._name}</option>
					
					{/loop}
					</select>
				</div>
			</div>
		
			<div class="module_border">
				<div class="c">
					״&nbsp;&nbsp;̬ ��<select name='status' >
					<option value="1" {if $_A.page_result.status==1} selected="selected"{/if}>����</option>
					<option value="2" {if $_A.page_result.status==2} selected="selected"{/if}>�ݸ�</option>
					<option value="3" {if $_A.page_result.status==3} selected="selected"{/if}>�ȴ����</option>
					</select>
				</div>
			</div>
			<div class="module_border">
				<div class="c">
					��&nbsp;&nbsp;�� ��<input type="text" name="order" value="{$_A.page_result.order|default:10}"size="5"/>
				</div>
			</div>
				
			<div class="module_border">
				<div class="c">
					��&nbsp;&nbsp;�� ��<input type="checkbox" name="flag[]" value="index" align="absmiddle" {$_A.page_result.flag|checked:"index"}/>��ҳ <input type="checkbox" name="flag[]" value="tuijian"  align="absmiddle" {$_A.page_result.flag|checked:"tuijian"}/>�Ƽ� <input type="checkbox" name="flag[]" value="ding"  align="absmiddle" {$_A.page_result.flag|checked:"ding"}/>�ö�
				</div>
			</div>
			<div class="module_border">
				<div class="c">
					�����ȣ�<input type="radio" name="public" value="1" checked="checked" onclick="$('#password').hide()" {if $_A.page_result.public==1} checked="checked"{/if} />���� <input type="radio" name="public" value="2" onclick="$('#password').hide()"/{if $_A.page_result.public==2} checked="checked"{/if} >˽�� <input type="radio" name="public" value="3" onclick="$('#password').show()" {if $_A.page_result.public==3} checked="checked"{/if} />����  <input type="text" id="password" name='password' size="3" {if $_A.page_result.public!=3}style="display:none"{/if} value="{$_A.page_result.password} " />
				</div>
			</div>
			
			
			<div class="module_border">
				<div class="c">
					����ʱ�䣺<input type="text" name="publish"  class="input_border" value="{ $_A.page_result.publish|default:"nowdate"}" size="30" onclick="change_picktime('yyyy-MM-dd HH:mm:ss')" readonly=""/>
				</div>
			</div>
			<div class="module_submit"><input type="button" value="ȷ���ύ" class="submit_button" name="save" onclick="submitForm()"/>
</div>
			
		</div>
		
		<div style="border:1px solid #CCCCCC; margin-bottom:10px; ">
			<div class="module_title"><strong>ҳ���ǩ</strong></div>
			<div class="module_border" style="padding:10px;">
					��ǩ��<input type="text" name="tags"  class="input_border" value="{ $_A.page_result.tags}" size="30"/>
			</div>
		</div>
		
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>ҳ���������</strong></div>
	
	<div class="module_border">
		<div class="c" style="padding:10px 0">
			��&nbsp;&nbsp;�⣺<input type="text" name="name" value="{$_A.page_result.name}" style="height:25px; width:400px"/><font color="#FF0000">*</font>
		</div>
	</div>
	
	<div class="module_border" style=" padding-top:10px;">
			<textarea id="bcontents" name="contents" rows="28"  style="width: 100%">{$_A.page_result.contents}</textarea>		
	
		<script>
		var user_id='{$_G.user_id}';
		var admin_url = "/{$_A.admin_url}";
		{literal}
		$('#bcontents').xheditor({skin:'o2007blue',upImgUrl:admin_url+"&q=plugins&p=xheditor&immediate=1&user_id="+user_id,upImgExt:"jpg,jpeg,gif,png"});
		function submitForm(){
		$("#bcontents").val();
		$('#frm').submit();}
		</script>
		{/literal}
		
	</div>
		</form>
	</div>
<!--�˵��б� ����-->
</div>
</div>
{/if}