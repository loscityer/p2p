{if $magic.request.examine==""}
<ul class="nav3"> 
<li><a href="{$_A.query_url}/list" id="c_so">���۹���</a></li> 
<li><a href="{$_A.query_url}/set">��������</a></li> 
</ul> 
{/if}
{if $_A.query_type=="set"}
<div class="module_add">
		<form action="" method="post"  enctype="multipart/form-data" >
		<div class="module_title"><strong>��������</strong></div>
		<div class="module_border">
			<div class="d">�Ƿ������ۣ�</div>
			<div class="c">
				{input type="radio" name="con_comments_status" value="1|��,0|��" checked="$_G.system.con_comments_status"}
			</div>
		</div>
		
		<div class="module_border">
			<div class="d">�����Ƿ���ˣ�</div>
			<div class="c">
				{input type="radio" name="con_comments_check_status" value="1|��,0|��" checked="$_G.system.con_comments_check_status"}
			</div>
		</div>
		
		<div class="module_border">
		<div class="d">�������۵�ʱ�䣺</div>
			<div class="c">
				<input type="text" name="con_comments_time" value="{$_G.system.con_comments_time}"/>�� ���û�ע��೤ʱ��ſ��Խ������ۣ�0Ϊ���ޣ�
			</div>
		</div>
		
		<div class="module_border">
		<div class="d">�������ιؼ��֣�</div>
			<div class="c">
				<textarea name="con_comments_keywords" cols="40" rows="6">{$_G.system.con_comments_keywords}</textarea><br />����ؼ����� ��|�� ����
			</div>
		</div>
		
		
		<div class="module_border">
		<div class="d">���������û���</div>
			<div class="c">
				<textarea name="con_comments_users" cols="40" rows="6">{$_G.system.con_comments_users}</textarea><br />����û��� ��|�� ����
			</div>
		</div>
			
		
		<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button"  /></div>
			</form>
		</div>
	</div>

{else}
	{if $magic.request.edit!=""}
<div class="module_add">
<div class="module_title"><strong>�����޸Ļظ�</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="" method="post">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.comments_result.id}" /><input type="hidden" name="user_id" value="{$_A.comments_result.user_id}" />�޸����� {/if}</strong></div>
	
	
	<div class="module_border">
		<div class="l">����ID��</div>
		<div class="c">
			{$_A.comments_result.id}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
			{input type="radio" name="status" value="1|�����,2|��ֹ" checked="$_A.comments_result.status"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			{$_A.comments_result.username}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�������ݣ�</div>
		<div class="c">
			<textarea name="contents" rows="5" cols="30">{$_A.comments_result.contents|html_format}</textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ģ�飺</div>
		<div class="c">
			{$_A.comments_result.code|module}  | 
			{$_A.comments_result.type} |
			{$_A.comments_result.article_id} 
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">ʱ��IP��</div>
		<div class="c">
			{$_A.comments_result.addtime|date_format} | {$_A.comments_result.addip}
		</div>
	</div>
	
	<div class="module_title"><strong>�ظ�</strong></div>
	<div class="module_border">
		<div class="l">�ظ����ݣ�</div>
		<div class="c">
			<textarea name="comments" rows="5" cols="30"></textarea><br />���ظ���Ϊ��
		</div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">��֤�룺</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/plugins/index.php?q=imgcode&t=' + Math.random())"/>
		
			<img src="/plugins/index.php?q=imgcode" id="valicode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
{else}
<div>
{/if}
	
	<div class="module_add">
	<div class="module_title"><strong>���۹����б�</strong></div>
	</div><form action="" method="post" id="form1">
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td"><input type="checkbox" name="allcheck" onclick="checkFormAll(this.form)"/></td>
		<td width="" class="main_td">������</td>
		<td width="" class="main_td">ģ��</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">����id</td>
		<td width="" class="main_td">������id</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">���ʱ��</td>
	</tr>
	{ list module="comments" function="GetCommentsList" var="loop" username=request }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center"><input type="checkbox" name="id[{$key}]" value="{$item.id}"/></td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.code}</td>
		<td class="main_td1" align="center">{$item.type}</td>
		<td class="main_td1" align="center">{$item.contents}</td>
		<td class="main_td1" align="center">{$item.pid}</td>
		<td class="main_td1" align="center">{$item.reply_id}</td>
		<td class="main_td1" align="center">{if $item.status==0}�����{elseif $item.status==1}��ͨ��{elseif $item.status==2}��ͨ��{else}����վ{/if}</td>
		<td class="main_td1" align="center">{$item.addtime|date_format}</td>
	</tr>
	{/foreach}
	<tr>
			<td colspan="11" class="action">
			<div class="floatl"><select name="type"><option value="yes">���ͨ��</option><option value="no">��ͨ��</option><option value="delete">ɾ��</option>
			<option value="over">����վ</option>
			</select> <input type="submit"  value=" ���� " />
			<script>
	  var url = '{$_A.query_url_all}';
	    {literal}
	  	function sousuo(){
			var username = $("#username").val();
			location.href=url+"&username="+username;
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

	</form>
<!--�˵��б� ����-->
</div>
</div>
{/if}