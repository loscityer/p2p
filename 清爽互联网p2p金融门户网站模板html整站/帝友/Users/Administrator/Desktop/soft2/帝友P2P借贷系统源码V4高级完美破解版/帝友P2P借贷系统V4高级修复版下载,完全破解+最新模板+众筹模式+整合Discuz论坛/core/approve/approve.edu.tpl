{literal}
<script>
function CheckExamine(){
	if ($("#verify_remark").val()==""){
		alert("��ע����Ϊ��");
		return false;
	}
}
</script>
{/literal}
{if $magic.request.id5!=""}
<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="{$_A.query_url_all}&id5={$magic.request.id5}" onsubmit="return CheckExamine()" >
	<div class="module_border_ajax">
		<div class="c">
		<strong>˵����</strong>���Ҫ����ID5��֤������ȷ�����ID5�Ѿ�ǩ����Э�飬ͬʱ��̨��ߵ�id5��֤�����۳��û����κη��á�</div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="5" id="verify_remark"></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="{ $magic.request.check}" />{literal}
		<input type="submit"  name="submit" class="submit_button" value="ȷ�����"  />{/literal}
	</div>
	
</form>
</div>
{elseif $magic.request.examine!=""}
<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="{$_A.query_url_all}&examine={$magic.request.examine}" onsubmit="return CheckExamine()">
	<div class="module_border_ajax">
		<div class="l">���:</div>
		<div class="c">
		{linkages type="value" input="radio" nid="approve_status" name="status" value="$_A.approve_result.status"}
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7">{$_A.approve_result.verify_remark}</textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="{ $magic.request.check}" />
		<input type="submit"  name="reset" class="submit_button" value="ȷ�����" />
	</div>
	
</form>
</div>
{else}
<ul class="nav3"> 
<li><a href="{$_A.query_url}/edu" id="c_so">ѧ����֤</a></li> 
<li><a href="{$_A.query_url}/edu_id5">��֤��¼</a></li> 
</ul> 

{if $_A.query_type=="edu_id5"}
<div class="module_add">
	<div class="module_title"><strong>��֤��¼�б�</strong></div>
	</div>
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="*" class="main_td">��ʵ����</td>
		<td width="*" class="main_td">���֤����</td>
		<td width="*" class="main_td">��ҵԺУ</td>
		<td width="*" class="main_td">רҵ</td>
		<td width="*" class="main_td">ѧ��</td>
		<td width="*" class="main_td">��ѧ���</td>
		<td width="*" class="main_td">��ҵʱ��</td>
		<td width="*" class="main_td">��ҵ����</td>
		<td width="*" class="main_td">ѧ������</td>
		<td width="*" class="main_td">���״̬</td>
		<td width="*" class="main_td">��˽��</td>
		<td width="*" class="main_td">ͼ��</td>
		<td width="*" class="main_td">ʱ��</td>
	</tr>
	{ list module="approve" function="GetEduId5List" var="loop" username=request  realname=request  card_id=request  epage=8 }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.realname}</td>
		<td class="main_td1" align="center">{$item.card_id}</td>
		<td class="main_td1" align="center">{$item.graduate}</td>
		<td class="main_td1" align="center">{$item.speciality}</td>
		<td class="main_td1" align="center">{$item.degree}</td>
		<td class="main_td1" align="center">{$item.enrol_date}</td>
		<td class="main_td1" align="center">{$item.graduate_date}</td>
		<td class="main_td1" align="center">{$item.result}</td>
		<td class="main_td1" align="center">{$item.style}</td>
		<td class="main_td1" align="center">{$item.status|linkages:"approve_cardid_status"}</td>
		<td class="main_td1" align="center">{$item.value}</td>
		<td class="main_td1" align="center">{if $item.status==3}<a href="{$item.user_id|idedu}" target="_blank"><img src="{$item.user_id|idedu}" width="40" /></a>{elseif $item.fileurl!=""}<img src="{$item.fileurl}" width="40" />{else}-{/if}</td>
		<td class="main_td1" align="center">{$item.addtime|date_format}</td>
	</tr>
	{/foreach}
	<tr>
			<td colspan="15" class="action">
			<div class="floatl">
			<script>
			  var url = '{$_A.query_url_all}';
				{literal}
				function sousuo(){
					var username = $("#username").val();
					var realname = $("#realname").val();
					var card_id = $("#card_id").val();
					location.href=url+"&username="+username+"&realname="+realname+"&card_id="+card_id;
				}
			  </script>
			  {/literal}
			</div>
			<div class="floatr">
				�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/> ��ʵ������<input type="text" name="realname" id="realname" value="{$magic.request.realname|urldecode}"/>  ���֤�ţ�<input type="text" name="card_id" id="card_id" value="{$magic.request.card_id}"/>   <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
			</div>
			</td>
		</tr>
		
	<tr align="center">
		<td colspan="18" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	{/list}
</table>



{elseif $_A.query_type=="edu_set"}
<div class="module_add">
<form action="" method="post"  enctype="multipart/form-data" >
	<div class="module_title"><strong>ID5��֤����</strong></div>
	
	
	<div class="module_border">
	<div class="d">�Ƿ���id5ѧ����֤��</div>
		<div class="c">
			{input type="radio" name="con_id5_edu_status" value="0|��,1|��"  checked="$_G.system.con_id5_edu_status}
		</div>
	</div>
	
	
	<div class="module_border">
	<div class="d">ID5ѧ����֤���ã�</div>
		<div class="c">
			<input type="text" name="con_id5_edu_fee" value="{$_G.system.con_id5_edu_fee}"/>
		</div>
	</div>
	
	<div class="module_submit"><input type="submit" value="{$MsgInfo.admin_name_submit}"  class="submit_button" /></div>
		</form>
	</div>
</div>

{else}

<div class="module_add">
	<div class="module_title"><strong>ѧ����֤</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	{if $magic.request.user_id==""}
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>�����û�</strong>(����˳���������)<input type="hidden" name="type" value="user_id" /></div>
	
	
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<input type="text" name="username" />
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">�û�ID��</div>
		<div class="c">
			<input type="text" name="user_id" />
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">���䣺</div>
		<div class="c">
			<input type="text" name="email" />
		</div>
	</div>
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	{else}
	<form action="" method="post" enctype="multipart/form-data">
	<div class="module_title"><strong>�޸������֤��Ϣ</strong><input type="hidden" name="user_id" value="{$magic.request.user_id}" /></div>
	
	<div class="module_border">
	<div class="l">�� �� �� ��</div>
		<div class="c">
			{$_A.approve_result.username}
		</div>
	</div>
	
	
	<div class="module_border">
	<div class="l">״&nbsp;&nbsp;̬��</div>
		<div class="c">
			{$_A.approve_result.status|linkages:"approve_status"}
		</div>
	</div>
	
	{if $_A.approve_result.verify_remark!=""}
	<div class="module_border">
	<div class="l"><font color="#FF0000">��˱�ע��</font></div>
		<div class="c">
			{$_A.approve_result.verify_remark}
		</div>
	</div>
	{/if}
	
	<div class="module_border">
	<div class="l">��ʵ������</div>
		<div class="c">
			{$_A.approve_result.realname}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ҵѧУ��</div>
		<div class="c">
			<input type="text" name="graduate" value="{$_A.approve_result.graduate}"  />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">רҵ��</div>
		<div class="c">
			<input type="text" name="speciality" value="{$_A.approve_result.speciality}"  />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">ѧ����</div>
		<div class="c">
			<input type="text" name="degree" value="{$_A.approve_result.degree}" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ѧʱ�䣺</div>
		<div class="c">
			<input type="text" name="enrol_date" value="{$_A.approve_result.enrol_date}" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ҵʱ�䣺</div>
		<div class="c">
			<input type="text" name="graduate_date" value="{$_A.approve_result.graduate_date}" />
		</div>
	</div>
	
	<div class="module_border">
	<div class="l">ѧ��֤����</div>
		<div class="c">
			<input type="file" name="edu_pic" style=" width:200px"/>{if $_A.approve_result.edu_pic!=""}<a href="./{ $_A.approve_result.edu_pic_url}" target="_blank" title="��ͼƬ"><img src="{ $_A.tpldir  }/images/ico_yes.gif" border="0"  /></a>{/if}
		</div>
	</div>
	
	
	
	<div class="module_border" >
	<div class="l">�� ֤ �� ��</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	{/if}
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>ѧ����֤�б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">�û�</td>
		<td width="" class="main_td">��ʵ����</td>
		<td width="*" class="main_td">ѧУ</td>
		<td width="*" class="main_td">רҵ</td>
		<td width="*" class="main_td">ѧ��</td>
		<td width="*" class="main_td">��ѧʱ��</td>
		<td width="*" class="main_td">��ҵʱ��</td>
		<td width="*" class="main_td">ѧ��ͼƬ</td>
		<td width="*" class="main_td">ID5���</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="approve" function="GetEduList" var="loop" username=request  realname=request  card_id=request  epage=8 }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.realname}</td>
		<td class="main_td1" align="center">{$item.graduate}</td>
		<td class="main_td1" align="center">{$item.speciality}</td>
		<td class="main_td1" align="center">{$item.degree}</td>
		<td class="main_td1" align="center">{$item.enrol_date}</td>
		<td class="main_td1" align="center">{$item.graduate_date}</td>
		<td class="main_td1" align="center">{if $item.edu_pic_url==""}-{else}<a href="./{ $item.edu_pic_url}" target="_blank" title="��ͼƬ"><img src="{ $_A.tpldir  }/images/ico_yes.gif" border="0"  /></a>{/if}</td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("ID5ѧ����֤���","url:get?{$_A.query_url_all}&id5={$item.user_id}",500,230,"true","","false","text");'>{$item.id5_status|linkages:"approve_cardid_status"}</a></td>
		<td class="main_td1" align="center">{$item.status|linkages:"approve_status"}</td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("ѧ���˹����","url:get?{$_A.query_url_all}&examine={$item.user_id}",500,230,"true","","false","text");'/>���</a>/<a href="{$_A.query_url_all}&user_id={$item.user_id}&page={$magic.request.page}">�޸�</a></td>
	</tr>
	{/foreach}
	<tr>
			<td colspan="15" class="action">
			<div class="floatl">
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
				�û�����<input type="text" name="username" id="username" size="7" value="{$magic.request.username|urldecode}"/>    <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
			</div>
			</td>
		</tr>
		
	<tr align="center">
		<td colspan="14" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	{/list}
	
</table>
<!--�˵��б� ����-->
</div>
</div>

	{/if}
{/if}
