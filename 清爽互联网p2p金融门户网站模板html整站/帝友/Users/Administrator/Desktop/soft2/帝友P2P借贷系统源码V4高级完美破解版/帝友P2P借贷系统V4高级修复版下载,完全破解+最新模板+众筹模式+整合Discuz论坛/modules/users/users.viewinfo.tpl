<ul class="nav3">
<li><a href="{$_A.query_url}/viewinfo&user_id={$magic.request.user_id}" id="c_so">��������Ϣ</a></li> 
<li><a href="{$_A.query_url}/viewinfo&type=1&user_id={$magic.request.user_id}">������λ��Ϣ</a></li> 
<li><a href="{$_A.query_url}/viewinfo&type=2&user_id={$magic.request.user_id}">˽Ӫҵ����Ϣ</a></li> 
<li><a href="{$_A.query_url}/viewinfo&type=3&user_id={$magic.request.user_id}">��Ҫ��ϵ��</a></li>
<li><a href="{$_A.query_url}/viewinfo&type=4&user_id={$magic.request.user_id}">����״��</a></li>
</ul> 
<div class="module_add">
{if $magic.request.type==""}
	{articles module="rating" function="GetInfoOne" user_id="$magic.request.user_id" var="var"}
	<div class="module_title"><strong>��������Ϣ</strong></div>
	<div class="module_border">
		<div class="l">�Ա�</div>
		<div class="c">
			{$var.sex|linkages:"rating_sex"|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">�ֻ����룺</div>
		<div class="c">
			{$var.phone_num|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">�������ڣ�</div>
		<div class="c">
			{$var.birthday|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ѧ����</div>
		<div class="c">
			{$var.edu|linkages:"rating_education"|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">��ѧ��ݣ�</div>
		<div class="c">
			{$var.school_year|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">��ҵԺУ��</div>
		<div class="c">
			{$var.school|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">����״����</div>
		<div class="c">
			{$var.marry|linkages:"rating_marry"|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">������Ů��</div>
		<div class="c">
			{$var.children|linkages:"rating_children"|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">�Ƿ��з���</div>
		<div class="c">
			{$var.house|linkages:"rating_house"|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">�Ƿ��г���</div>
		<div class="c">
			{$var.is_car|linkages:"rating_car"|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">�������ڵأ�</div>
		<div class="c">
			{$var.city|areas:"p,c"|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">��ס��ַ��</div>
		<div class="c">
			{$var.address|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">��ס�绰��</div>
		<div class="c">
			{$var.phone|default:"-"}
		</div>
	</div>
	{/articles}
{elseif $magic.request.type==1}
	{articles module="rating" function="GetJobOne" user_id="$magic.request.user_id" var="var"}
	<div class="module_title"><strong>������λ��Ϣ</strong></div>
	<div class="module_border">
		<div class="l">��λ���ƣ�</div>
		<div class="c">
			{$var.name|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ʣ�</div>
		<div class="c">
			{$var.type|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">��ҵ��</div>
		<div class="c">
			{$var.industry|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">��Ա��ģ��</div>
		<div class="c">
			{$var.peoples|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">��ְʱ�䣺</div>
		<div class="c">
			{$var.worktime1|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">ְ��</div>
		<div class="c">
			{$var.office|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">��λ��ַ��</div>
		<div class="c">
			{$var.address|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">��λ�绰��</div>
		<div class="c">
			{$var.tel|default:"-"}
		</div>
	</div>
	{/articles}
{elseif $magic.request.type==2}
	{articles module="rating" function="GetCompanyOne" user_id="$magic.request.user_id" var="var"}
	<div class="module_title"><strong>˽Ӫҵ����Ϣ</strong></div>
	<div class="module_border">
		<div class="l">���ƣ�</div>
		<div class="c">
			{$var.name|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">ִ�պţ�</div>
		<div class="c">
			{$var.license_num|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">˰���(��˰)��</div>
		<div class="c">
			{$var.tax_num_di|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">˰���(��˰)��</div>
		<div class="c">
			{$var.tax_num_guo|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">��ַ��</div>
		<div class="c">
			{$var.address|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ڣ�</div>
		<div class="c">
			{$var.rent_time|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">���</div>
		<div class="c">
			{$var.rent_money|default:"-"}
		</div>
	</div>
	{/articles}
{elseif $magic.request.type==3}
	{articles module="rating" function="GetContactOne" user_id="$magic.request.user_id" var="var"}
	<div class="module_title"><strong>��Ҫ��ϵ��</strong></div>
	<div class="module_border">
		<div class="l">��ż������</div>
		<div class="c">
			{$var.linkman2|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">��ż�绰��</div>
		<div class="c">
			{$var.phone2|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">ֱϵ����1������</div>
		<div class="c">
			{$var.linkman3|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">ֱϵ����1�绰��</div>
		<div class="c">
			{$var.phone3|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">ֱϵ����2������</div>
		<div class="c">
			{$var.linkman6|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">ֱϵ����2�绰��</div>
		<div class="c">
			{$var.phone6|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">ͬ��1������</div>
		<div class="c">
			{$var.linkman4|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">ͬ��1�绰��</div>
		<div class="c">
			{$var.phone4|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">ͬ��2������</div>
		<div class="c">
			{$var.linkman7|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">ͬ��2�绰��</div>
		<div class="c">
			{$var.phone7|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">����1������</div>
		<div class="c">
			{$var.linkman8|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">����1�绰��</div>
		<div class="c">
			{$var.phone8|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">����2������</div>
		<div class="c">
			{$var.linkman9|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">����2�绰��</div>
		<div class="c">
			{$var.phone9|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">ͬѧ1������</div>
		<div class="c">
			{$var.linkman10|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">ͬѧ1�绰��</div>
		<div class="c">
			{$var.phone10|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">ͬѧ2������</div>
		<div class="c">
			{$var.linkman11|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">ͬѧ2�绰��</div>
		<div class="c">
			{$var.phone11|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">������ϵ��������</div>
		<div class="c">
			{$var.linkman5|default:"-"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">������ϵ�˵绰��</div>
		<div class="c">
			{$var.phone5|default:"-"}
		</div>
	</div>
	{/articles}
{elseif $magic.request.type==4}
	<div class="module_title"><strong>����״��</strong></div>
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
		<tr class="ytit1" >
			<td>����</td>
			<td>����</td>
			<td>����</td>
			<td>���</td>
			<td>����˵��</td>
		</tr>
		{list module="rating" var="loop" function ="GetFinanceList" user_id="$magic.request.user_id"}
		{foreach from=$loop.list item="item"}
		<tr {if $key%2==1} class="tr2"{/if}>
			<td>{if $item.use_type==1}����{else}֧��{/if}</td>
			<td>{if $item.use_type==1}
					{$item.type|linkages:"rating_revenue"}
				{else}
					{$item.type|linkages:"rating_payment"}
				{/if}
			</td>
			<td>{$item.name}</td>
			<td>{$item.account}</td>
			<td>{$item.other}</td>
		</tr>
		{/foreach}
		<tr align="center">
			<td colspan="10" align="center"><div align="center">{$loop.pages|showpage}</div></td>
		</tr>
		{/list}
	</table>
{/if}
</div>