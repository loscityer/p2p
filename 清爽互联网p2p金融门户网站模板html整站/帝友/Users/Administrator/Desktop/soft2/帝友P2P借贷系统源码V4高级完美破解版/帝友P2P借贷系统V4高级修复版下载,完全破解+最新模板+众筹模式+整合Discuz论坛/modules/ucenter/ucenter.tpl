
{if $_A.query_type == "list"}

<div class="module_add">
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data" >
	<div class="module_title"><strong>Ucenter��װ</strong>(�뽫discuz���ļ����ڸ�Ŀ¼���棬���Ҹ���Ϊdiscuz)
</div>
	

	<div class="module_border">
		<div class="w">�Ƿ���Ucenter��</div>
		<div class="c">
			<input type="radio" name="uc_status" value="0" {if $_A.result.uc_status==0} checked="checked"{/if}/>��
			<input type="radio" name="uc_status" value="1" {if $_A.result.uc_status==1} checked="checked"{/if}/>��
		</div>
	</div>

	<div class="module_border">
		<div class="w">UCenter ���ݿ�������</div>
		<div class="c">
			<input type="text" name="uc_dbhost"    value="{$_A.result.uc_dbhost}" class="input_border" size="30" /> 
		</div>
	</div>
	
	<div class="module_border">
		<div class="w">UCenter ���ݿ��û�����</div>
		<div class="c">
			<input type="text" name="uc_dbuser" value="{$_A.result.uc_dbuser}"  class="input_border" size="30" /> 
		</div>
	</div>
	
	<div class="module_border">
		<div class="w">UCenter ���ݿ����룺</div>
		<div class="c">
			<input type="text" name="uc_dbpw" value="{$_A.result.uc_dbpw}"  class="input_border" size="30" /> 
		</div>
	</div>
	
	<div class="module_border">
		<div class="w">UCenter ���ݿ����ƣ�</div>
		<div class="c">
			<input type="text" name="uc_dbname" value="{$_A.result.uc_dbname}"  class="input_border" size="30" /> 
		</div>
	</div>
	
	<div class="module_border">
		<div class="w">UCenter ���ݿ��ַ�����</div>
		<div class="c">
			<input type="text" name="uc_charset" value="{$_A.result.uc_charset}"  class="input_border" size="30" /> 
		</div>
	</div>
	
	<div class="module_border">
		<div class="w">Discuz ���ݿ��ǰ׺��</div>
		<div class="c">
			<input type="text" name="dz_dbtablepre" value="{$_A.result.dz_dbtablepre}"  class="input_border" size="30" /> 
		</div>
	</div>
	
	<div class="module_border">
		<div class="w">UCenter ���ݿ��ǰ׺��</div>
		<div class="c">
			<input type="text" name="uc_dbtablepre" value="{$_A.result.uc_dbtablepre}"  class="input_border" size="30" /> 
		</div>
	</div>
	
	<div class="module_border">
		<div class="w">UCenter ͨ����Կ��</div>
		<div class="c">
			<input type="text" name="uc_key" value="{$_A.result.uc_key}"  class="input_border" size="30" /> 
		</div>
	</div>
	
	<div class="module_border">
		<div class="w">UCenter ��װ��ַ��</div>
		<div class="c">
			<input type="text" name="uc_api" value="{$_A.result.uc_api}"  class="input_border" size="30" /> 
		</div>
	</div>
	
	<div class="module_border">
		<div class="w">UCenter IP��</div>
		<div class="c">
			<input type="text" name="uc_ip" value="{$_A.result.uc_ip}"  class="input_border" size="30" /> 
		</div>
	</div>
	
	<div class="module_border">
		<div class="w">UCenter ��ǰӦ�õ�ID��</div>
		<div class="c">
			<input type="text" name="uc_appid" value="{$_A.result.uc_appid}"  class="input_border" size="30" /> 
		</div>
	</div>
	
	<div class="module_submit" >
		<input type="submit"  name="submit" value="ȷ���ύ" />
		<input type="reset"  name="reset" value="���ñ�" />
	</div>
	</form>
	
	
</div>
{else}
<table width="100%" border="0"  cellspacing="1" bgcolor="#CCCCCC">
	<tr>
		<td bgcolor="#ffffff" class="main_td">
			<div class="fl"><strong>Ucenter����</strong></div>
		</td>
	</tr>
	<tr>
		<td width="25%" align="center" bgcolor="#ffffff"><br /><br />

���ѳɹ���װ�˴�ģ�飬Ҫ�޸����� <a href="{$url}/unstall">ж��</a><br /><br />

<br />
</td>
	</tr>
	
</table>
{/if}