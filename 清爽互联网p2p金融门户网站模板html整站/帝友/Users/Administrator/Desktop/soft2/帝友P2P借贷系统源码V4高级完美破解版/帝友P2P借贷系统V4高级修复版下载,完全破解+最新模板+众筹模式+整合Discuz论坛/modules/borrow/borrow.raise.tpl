{if $_A.query_type == "raise"}
<ul class="nav3">
<li><a href="{$_A.query_url}/raise">ȫ��</a></li> 
<li><a href="{$_A.query_url_all}&status=-1">�ݸ�</a></li> 
<li><a href="{$_A.query_url_all}&status=0">������</a></li> 
<li><a href="{$_A.query_url_all}&status=1">���ʳɹ�</a></li> 
<li><a href="{$_A.query_url_all}&status=2">����ʧ��</a></li> 
<li><a href="{$_A.query_url}/raise_add">������Ŀ</a></li> 
</ul> 
<div class="module_add">
	<div class="module_title"><strong>��Ŀ�б�</strong><div  style="float:right">
	<a href="{$_A.query_url}/raise_add">������Ŀ</a>
	</div></div>
	
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr>
			<td width="" class="main_td">ID</td>
			<td width="" class="main_td">��Ŀ����</td>
			<td width="" class="main_td">���ʽ��</td>
			<td width="" class="main_td">�ѳ���</td>
			<td width="" class="main_td">��������</td>
			<td width="" class="main_td">����ʱ��</td>
			<td width="" class="main_td">״̬</td>
			<td width="" class="main_td">�鿴</td>
		</tr>
		{ list  module="borrow" function="GetRaiseList" var="loop" raise_name="request" status="request" dotime1="request" dotime2="request"}
		{foreach from="$loop.list" item="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td>{ $item.id}<input type="hidden" name="id[]" value="{ $item.id}" /></td>
			<td title="{$item.raise_name}"><a href="{$_A.query_url}/raise_edit&id={$item.id}">{$item.raise_name|truncate:15}</a></td>
			<td>{$item.raise_account}Ԫ</td>
              <td>{$item.raise_account_yes}Ԫ</td>
			<td>{$item.raise_period}��</td>
			
			<td>{$item.addtime|date_format}</td>
			<td>{if $item.raise_status==0}{if $item.end_day>=0}������{else}�ѵ���{/if}{elseif $item.raise_status==1}���ʳɹ�{elseif $item.raise_status==2}����ʧ��{else}�ݸ�{/if}</td>
			<td title="{$item.raise_name}">
            
          
            <a href="{$_A.query_url}/raise_edit&id={$item.id}">�鿴</a>
            &nbsp;&nbsp;
			<a href="{$_A.query_url}/raise_tender&raise_id={$item.id}">�����б�</a>
            
            </td>
			
		</tr>
		{ /foreach}
		<tr>
		<td colspan="14" class="action">
		<div class="floatl">
			
		</div>
		<div class="floatr">
			 ���⣺<input type="text" name="raise_name" id="raise_name" value="{$magic.request.raise_name|urldecode}" size="8"/> 
			 ���ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/>
			<input type="button" value="����" class="submit" onclick="sousuo('{$_A.query_url}/raise&status={$magic.request.status}')">
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

var urls = '{$_A.query_url}/raise';
{literal}
function sousuo(url){
	var sou = "";
	
	var raise_name = $("#raise_name").val();
	if (raise_name!="" && raise_name!=null){
		sou += "&raise_name="+raise_name;
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

		location.href=url+sou;
	
}
</script>
{/literal}


{elseif $_A.query_type == "raise_tender"} 
<div class="module_add">
	<div class="module_title"><strong>�����б�</strong></div>
	
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr>
			<td width="" class="main_td">ID</td>
			<td   nowrap="nowrap">Ͷ����</td>
			<td   nowrap="nowrap">��Ŀ����</td>
				<td   nowrap="nowrap">���ʽ��</td>
				<td   nowrap="nowrap">�ѳ���</td>
				<td   nowrap="nowrap">��������</td>
				<td   nowrap="nowrap">��Ŀ���</td>
				<td   nowrap="nowrap">Ͷ�ʽ��</td>
				<td   nowrap="nowrap">Ͷ��ʱ��</td>
				<td   nowrap="nowrap">״̬</td>
		</tr>
		{ list  module="borrow" function="GetRauseTenderList" var="loop"   raise_id="$magic.request.raise_id"  username="request" raise_name="request" dotime1="request" dotime2="request"}
			{foreach from="$loop.list" item="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td  width="40" >{$key+1}</td>
			<td  ><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=code/users/view&user_id={$item.user_id}&type=scene",700,400,"true","","true","text");'>	{$item.username}</a></td>
				<td  width="200"><a href="/zhongchou/a{$item.raise_id}.html" target="_blank" title="{$item.raise_name}">{$item.raise_name|truncate:15}</a></td>
				<td  >{$item.raise_account}Ԫ</td>
				<td  >{$item.raise_account_yes}Ԫ</td>
				<td  >{$item.raise_period}��</td>
				<td  >{$item.raise_type|linkages:"raise_type"}</td>
				<td  >{$item.tender_account}</td>
				<td  >{$item.addtime|date_format:"Y-m-d"}</td>

				<td  >{if $item.status==0}�ɹ�{elseif $item.raise_status==1}�ѻ���{else}-{/if}</td>
			
		</tr>
		{ /foreach}
		<tr>
		<td colspan="14" class="action">
		<div class="floatl">
			
		</div>
		<div class="floatr">
			 �û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}" size="8"/>  ���⣺<input type="text" name="raise_name" id="raise_name" value="{$magic.request.raise_name|urldecode}" size="8"/> 
			 ���ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/>
			<input type="button" value="����" class="submit" onclick="sousuo('{$_A.query_url}/raise_tender')">
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

var urls = '{$_A.query_url}/raise_tender';
{literal}
function sousuo(url){
	var sou = "";
	
	var raise_name = $("#raise_name").val();
	if (raise_name!="" && raise_name!=null){
		sou += "&raise_name="+raise_name;
	}
	
	var username = $("#username").val();
	if (username!="" && username!=null){
		sou += "&username="+username;
	}
	
	var dotime1 = $("#dotime1").val();
	if (dotime1!="" && dotime1!=null){
		sou += "&dotime1="+dotime1;
	}
	var dotime2 = $("#dotime2").val();
	if (dotime2!="" && dotime2!=null){
		sou += "&dotime2="+dotime2;
	}
	

		location.href=url+sou;
	
}
</script>
{/literal}
{elseif $_A.query_type == "raise_add" || $_A.query_type == "raise_edit"}

<form action="" method="post" id="frm" enctype="multipart/form-data" >
<div class="module_add">
	<div class="module_title"><strong>{if $_A.query_type == "raise_edit" }<input type="hidden" name="id"  value="{$magic.request.id}" />�޸���Ŀ{else}�����Ŀ{/if}</strong><input type="hidden" name="user_id" value="{$_A.articles_result.user_id|default:$_G.user_id}" /></div>
	<div style="margin-top:10px;">
	<div style="float:right; width:30%;">
		
		<div style="border:1px solid #CCCCCC; margin-bottom:10px ">
			<div class="module_title"><strong>��������Ŀ</strong></div>
			<div class="module_border">
				<div class="c">
					״̬��<select name='status' >
					<option value="0" {if $_A.articles_result.status==0} selected="selected"{/if}>����</option>
					<option value="-1" {if $_A.articles_result.status=='-1'} selected="selected"{/if}>�ݸ�</option>
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
					���ࣺ <input type="checkbox" name="flag[]" value="tuijian"  align="absmiddle" {$_A.articles_result.flag|checked:"tuijian"}/>�Ƽ� <input type="checkbox" name="flag[]" value="ding"  align="absmiddle" {$_A.articles_result.flag|checked:"ding"}/>�ö�
				</div>
			</div>

			<div class="module_submit"><input type="button" value="ȷ���ύ" class="submit_button" name="save" onclick="submitForm()"/>
</div>
			
		</div>
		
		<div style="border:1px solid #CCCCCC; margin-bottom:10px; ">
			<div class="module_title"><strong>��Ŀ��ǩ</strong></div>
			<div class="module_border" style="padding:10px;">
					��ǩ��<input type="text" name="tags"  class="input_border" value="{ $_A.articles_result.tags}" size="30"/>
			</div>
		</div>

		
		<div style="border:1px solid #CCCCCC; margin-top:10px; ">
			<div class="module_title"><strong>��Ŀ����ͼ</strong></div>
			<div class="module_border" style="padding:10px;">
				{if $_A.articles_result.litpic!=""}<img src="{$_A.articles_result.fileurl}" width="50" height="50" align="absmiddle" /><input type="checkbox" name="clearlitpic" value="1" title="ѡ�����ɾ��������ͼ" /><input type="hidden" name="oldlitpic" value="{$_A.articles_result.litpic}" />ȡ�� {/if}<input type="file" name="litpic" style="width:150px" />
			</div>
		</div>
		
		
		<div style="border:1px solid #CCCCCC; margin-top:10px; ">
			<div class="module_title"><strong>��Ŀ�����</strong></div>
			<div class="module_border" style="padding:10px;">
					<textarea name="raise_intro" rows="5" cols="50">{ $_A.articles_result.raise_intro}</textarea>
			</div>
		</div>
		
	</div>
		</div>
	<div style="float:left; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>������Ŀ</strong></div>
	
	<div class="module_border">
		<div class="c" style="padding:10px 0">
			��Ŀ���⣺<input type="text" name="raise_name" value="{$_A.articles_result.raise_name}" style="height:25px; width:400px"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="c" style="padding:10px 0">
			���ʽ�<input type="text" name="raise_account" value="{$_A.articles_result.raise_account}" onblur="num_only(this);"  size="8" maxlength="10"/> Ԫ
		</div>
	</div>
	
	<div class="module_border">
		<div class="c" style="padding:10px 0">
			�������ޣ�<input type="text" name="raise_period" value="{$_A.articles_result.raise_period}"  onblur="num_only(this);"  size="8" maxlength="6"/> ��
		</div>
	</div>
	
	<div class="module_border">
		<div class="c" style="padding:10px 0">
			��Ŀ���{linkages nid="raise_type"  name="raise_type" type="value"  value="$_A.articles_result.raise_type" }
		</div>
	</div>
	
	<div class="module_border" style=" padding-top:10px;">
			<textarea id="bcontents" name="raise_contents" rows="28"  style="width: 100%">{$_A.articles_result.raise_contents}</textarea>		
	
		<script>
		var admin_url = "/{$_A.admin_url}";
		{literal}
		$('#bcontents').xheditor({skin:'o2007blue',upImgUrl:admin_url+"&q=plugins&p=xheditor&immediate=1",upImgExt:"jpg,jpeg,gif,png"});
		function submitForm(){
		$("#bcontents").val();
		$('#frm').submit();
		return false;}
		
			function num_only(field) {
var result = new String();
var numbers = "0123456789";
var chars = field.value.split(""); // create array 
for (i = 0; i < chars.length; i++) {
if (numbers.indexOf(chars[i]) != -1) result += chars[i];
}
if (field.value != result) field.value = result;
}
		</script>
		{/literal}
		
	</div>
	
		</form>
{/if}