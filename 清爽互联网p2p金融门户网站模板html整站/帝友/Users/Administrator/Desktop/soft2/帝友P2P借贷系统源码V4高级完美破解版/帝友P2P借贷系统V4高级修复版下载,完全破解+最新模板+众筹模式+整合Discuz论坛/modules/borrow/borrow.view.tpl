<div class="module_add" >
	
	<div class="module_title"><strong>���������Ϣ</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="r">
		<a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=module/users/view&user_id={$_A.borrow_result.user_id}",500,230,"true","","true","text");'>	{$_A.borrow_result.username}</a>
		</div>
		<div class="s">״̬��</div>
		<div class="c">
			{if $_A.borrow_result.borrow_account_yes==$_A.borrow_result.account && $_A.borrow_result.status==1}�������<input type="button"  src="{$_A.tpldir}/images/button.gif" align="absmiddle" value="�������" class="submit_button" onclick='tipsWindown("�������","url:get?{$_A.query_url}/full&fullcheck={$_A.borrow_result.borrow_nid}",500,300,"true","","false","text");'/>{else}{$_A.borrow_result.status|linkages:"borrow_status"}{if $_A.borrow_result.status==0} <input type="button"  src="{$_A.tpldir}/images/button.gif" align="absmiddle" value="������" class="submit_button" onclick='tipsWindown("������","url:get?{$_A.query_url}/first&check={$_A.borrow_result.borrow_nid}",500,300,"true","","false","text");'/>{/if}&nbsp;&nbsp;<input type="button"  src="{$_A.tpldir}/images/button.gif" align="absmiddle" value="���Ͷ���" class="submit_button" onclick="window.location.href='{$_A.query_url}/first&s_nid={$_A.borrow_result.borrow_nid}';" />{/if}
		</div>
	</div>
	<div class="module_border">
		
		<div class="l">���⣺</div>
		<div class="r">
			<strong>{$_A.borrow_result.name}</strong>
		</div>
		
		<div class="s">����ţ�</div>
		<div class="c">
			{$_A.borrow_result.borrow_nid}
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">������</div>
		<div class="r" style="color:#FF0000">
			{$_A.borrow_result.borrow_object|linkages:"borrow_object"} (<a href="{$_A.admin_url}&&q=code/users/viewinfo{if $_A.borrow_result.borrow_object==1}&type=2{/if}&user_id={$_A.borrow_result.user_id}">�鿴�û�����</a>)
		</div>
		<div class="s">�����;��</div>
		<div class="c">
			{$_A.borrow_result.borrow_use|linkages:"borrow_use"}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">������ͣ�</div>
		<div class="r">
			{if $_A.borrow_result.vouchstatus==1}������{elseif $_A.borrow_result.fast_status==1}���ٱ�{else}���ñ�{/if}
		</div>
		
		<div class="s">���ʽ��</div>
		<div class="c">
			{$_A.borrow_result.borrow_style|linkages:"borrow_style"}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ܽ�</div>
		<div class="r">
				��{$_A.borrow_result.account}<input type="hidden" name="account" value="{$_A.borrow_result.account}" /> 
		</div>
		
		<div class="s">�����ʣ�</div>
		<div class="c">
			{$_A.borrow_result.borrow_apr} %
		</div>

	</div>
	
	
	<div class="module_border">
		<div class="l">���ɹ��󶳽��</div>
		<div class="r">
			��{$_A.borrow_result.frost_account|default:0}
		</div>	
		<div class="s">������ޣ�</div>
		<div class="c">

		
		<FONT COLOR="#ec6c13">{if $_A.borrow_result.borrow_period == 0.03}1</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.06}2</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.10}3</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.13}4</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.16}5</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.20}6</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.23}7</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.26}8</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.30}9</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.33}10</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.36}11</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.40}12</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.43}13</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.46}14</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.50}15</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.53}16</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.56}17</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.60}18</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.63}19</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.66}20</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.70}21</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.73}22</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.76}23</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.80}24</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.83}25</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.86}26</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.90}27</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.93}28</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.96}29</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.10}30</font>��
                            	{elseif $_A.borrow_result.borrow_period >= 1 && $_A.borrow_result.borrow_period<10 }{$_A.borrow_result.borrow_period|truncate:1}</font>����
                            	{else}{$_A.borrow_result.borrow_period|truncate:2}</font>����
                            	{/if}
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">���Ͷ���</div>
		<div class="r">
			{$_A.borrow_result.tender_account_min|linkages:"borrow_tender_account_min"}
		</div>
		<div class="s">���Ͷ���ܶ</div>
		<div class="c">
			{$_A.borrow_result.tender_account_max|linkages:"borrow_tender_account_max"|default:"-"}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">&nbsp;</div>
		<div class="r">&nbsp;
		</div>
		<div class="s">��Чʱ�䣺</div>
		<div class="c">
			{$_A.borrow_result.borrow_valid_time}��
		</div>
	</div>
	
	
	
	<div class="module_border">
		<div class="l">�Ƿ񲿷ֽ�</div>
		<div class="r">
			{$_A.borrow_result.borrow_part_status|linkages:"borrow_part_status"|default:-}
		</div>
		<div class="s">��ʾ���ͣ�</div>
		<div class="c">
			{$_A.borrow_result.view_type|linkages:"borrow_view_type"|default:-}
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">���������</div>
		<div class="r">
			{$_A.borrow_result.hits|default:0}��
		</div>
		<div class="s">���۴�����</div>
		<div class="c">
			<a href="{$_A.admin_url}&q=code/comment/list&code=borrow&article_id={$_A.borrow_result.borrow_nid}">{$_A.borrow_result.comment_count}��</a>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���ʱ�䣺</div>
		<div class="r">
			{$_A.borrow_result.addtime|date_format}
		</div>
		<div class="s">���IP��</div>
		<div class="c">
			{$_A.borrow_result.addip}
		</div>
	</div>
	
	{if $_A.borrow_result.status>0}
	<div class="module_title"><strong>���״̬</strong> (<a href="{$_A.query_url}/tender&borrow_nid={$_A.borrow_result.borrow_nid}">�鿴Ͷ����Ϣ</a>)</div>
	
	
	<div class="module_border">
		<div class="l">�ѽ赽�Ľ�</div>
		<div class="r">
			<font color="#009900">��{$_A.borrow_result.borrow_account_yes}</font>
		</div>
		<div class="s">δ�赽�Ľ�</div>
		<div class="c">
			<font color="#FF0000">��{$_A.borrow_result.borrow_account_wait}</font>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">Ͷ��Ĵ�����</div>
		<div class="r">
			{$_A.borrow_result.tender_times}��
		</div>
		<div class="s">���Ͷ��ʱ�䣺</div>
		<div class="c">
			{$_A.borrow_result.tender_last_time|date_format|default:"-"}
		</div>
	</div>
	
	
	
	<div class="module_border">
		<div class="l">����ʱ�䣺</div>
		<div class="r">
			{$_A.borrow_result.verify_time|date_format}
		</div>
		<div class="s">����ע��</div>
		<div class="c">
			{$_A.borrow_result.verify_remark}
		</div>
	</div>
	{if $_A.borrow_result.status>=1}
	
	<div class="module_title"><strong>Ͷ���б�</strong></div>
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">Ͷ����</td>
			<td width="*" class="main_td">Ͷ�ʽ��</td>
			<td width="" class="main_td">��Ч���</td>
			<td width="" class="main_td">Ͷ��ʱ��</td>
			<td width="" class="main_td">Ͷ������</td>
		</tr>
		{ loop module="borrow" function="GetTenderList" limit="all" borrow_nid='$_A.borrow_result.borrow_nid' var="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td>{ $item.id}<input type="hidden" name="id[]" value="{ $item.id}" /></td>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=module/users/view&user_id={$item.user_id}",500,230,"true","","true","text");'>	{$item.username}</a></td>
			<td>{$item.account_tender}Ԫ</td>
			<td>{$item.account}Ԫ</td>
			<td>{$item.addtime|date_format}</td>
			<td>{$item.contents}</td>
		</tr>
		{ /loop}
</table>
	
	{/if}
	
	{/if}
	
	
	{if $_A.borrow_result.borrow_full_status==1  || $_A.borrow_result.is_flow==1}
	<div class="module_title"><strong>������Ϣ</strong>(<a href="{$_A.query_url}/borrow_repay&borrow_nid={$_A.borrow_result.borrow_nid}">�鿴������Ϣ</a>)</div>
	
	
	<div class="module_border">
		<div class="l">����ܶ</div>
		<div class="r">
			<font color="#009900">��{$_A.borrow_result.borrow_account_yes}</font>
		</div>
		<div class="s">Ӧ���ܶ</div>
		<div class="c">
			��{$_A.borrow_result.repay_account_all}
		</div>
	</div>
	
	
	
	<div class="module_border">
		<div class="l">�ѻ��ܶ</div>
		<div class="r">
			��{$_A.borrow_result.repay_account_yes}
		</div>
		<div class="s">δ���ܶ</div>
		<div class="c">
			��{$_A.borrow_result.repay_account_wait}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�ѻ�����</div>
		<div class="r">
			��{$_A.borrow_result.repay_account_capital_yes}
		</div>
		<div class="s">δ������</div>
		<div class="c">
			��{$_A.borrow_result.repay_account_capital_wait}
		</div>
	</div>
	
	
	
	<div class="module_border">
		<div class="l">�ѻ���Ϣ��</div>
		<div class="r">
			��{$_A.borrow_result.repay_account_interest_yes}
		</div>
		<div class="s">δ����Ϣ��</div>
		<div class="c">
			��{$_A.borrow_result.repay_account_interest_wait}
		</div>
	</div>
	
	
	
	<div class="module_border">
		<div class="l">����ʱ�䣺</div>
		<div class="r">
			{$_A.borrow_result.reverify_time|date_format}
		</div>
		<div class="s">����ע��</div>
		<div class="c">
			{$_A.borrow_result.reverify_remark}
		</div>
	</div>
	{/if}
	
	
	<div class="module_title"><strong>���ý���</strong></div>
	<div class="module_border">
		<div class="l">�������ͣ�</div>
		<div class="r">
			 {$_A.borrow_result.award_status|linkages:"borrow_award_status"}{if $_A.borrow_result.award_false==1}(���ʧ��Ҳ����){/if}
		</div>
		 {if $_A.borrow_result.award_status>0}
		<div class="s">������ʽ��</div>
		<div class="c">
			{if $_A.borrow_result.award_status==1}
			 ��{$_A.borrow_result.award_account}
			 {else}
			 {$_A.borrow_result.award_scale}%
			 {/if}
		</div>
		{/if}
	</div>
	
	
	{if $_A.borrow_result.vouch_status==1}
	<div class="module_title"><strong>��������</strong></div>
	<div class="module_border">
		<div class="l">�Ƿ���н�����</div>
		<div class="c">
			{if $_A.borrow_result.vouch_award_status==1}��{else}��{/if}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�Ƿ�̶���Ҫ�����ˣ�</div>
		<div class="r">
			{ $_A.borrow_result.vouch_user_status|linkages:"borrow_vouch_user_status"}
		</div>
		<div class="s">�̶������ˣ�</div>
		<div class="c">
			{if $_A.borrow_result.vouch_user_status==0}-{else}{ $_A.borrow_result.vouch_users|deault:-}{/if}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�ܵ�����</div>
		<div class="r">
			��{$_A.borrow_result.vouch_account}
		</div>
		<div class="s">�ѵ���������</div>
		<div class="c">
			{$_A.borrow_result.vouch_account_scale }%
		</div>
	</div>
	<div class="module_border">
		
		<div class="l">�ѵ�����</div>
		<div class="r">
			��{$_A.borrow_result.vouch_account_yes }
		</div>
		<div class="s">δ������</div>
		<div class="c">
			��{$_A.borrow_result.vouch_account_wait }
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">�Ƿ񵣱�������</div>
		<div class="r">
			{$_A.borrow_result.vouch_award_status|linkages:"borrow_vouch_award_status" }
		</div>
		<div class="s">����������ʽ��</div>
		<div class="c">
			{if $_A.borrow_result.vouch_award_status==2}
			 ��{$_A.borrow_result.vouch_award_account}
			 {else}
			 {$_A.borrow_result.vouch_award_scale}%
			 {/if}
		</div>
	</div>
	
	<div class="module_title"><strong>�����б�</strong></div>
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">������</td>
			<td width="*" class="main_td">�������</td>
			<td width="" class="main_td">��Ч���</td>
			<td width="" class="main_td">����ʱ��</td>
			<td width="" class="main_td">��������</td>
		</tr>
		{ loop module="borrow" function="GetVouchList" limit="all" borrow_nid='$_A.borrow_result.borrow_nid' var="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td>{ $item.id}<input type="hidden" name="id[]" value="{ $item.id}" /></td>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=module/users/view&user_id={$item.user_id}",500,230,"true","","true","text");'>	{$item.username}</a></td>
			<td>{$item.account_vouch}Ԫ</td>
			<td>{$item.account}Ԫ</td>
			<td>{$item.addtime|date_format}</td>
			<td>{$item.contents}</td>
		</tr>
		{ /loop}
</table>
	{/if}
	<form action="{$_A.query_url_all}/wind&view={$_A.borrow_result.borrow_nid}" enctype="multipart/form-data"  method="post">
	<div class="module_title"><strong>��ؽ���</strong>    <input  type="submit"  src="{$_A.tpldir}/images/button.gif" align="absmiddle" value="������" class="submit_button"  />	</div>
	<div class="module_border" >
		<textarea id="wind_control" name="wind_control" rows="22" cols="680" style="width: 80%">
		{if $_A.borrow_result.wind_control==""}
		{literal}
		<style>
.main_box{ border:#e5e5e5 solid 1px}
.main_box .con{ padding:20px 10px; line-height:20px;}
.title_bor a{ float:left; line-height:38px; background: url(/themes/rongzi/huaxin/images/title_bor_a.gif) no-repeat; width:104px; display:inline-block; text-align:center; color:#6d6d6d; font-size:16px; text-decoration:none;font-family:Microsoft YaHei}
.title_bor a.on{ background:url(/themes/rongzi/huaxin/images/title_bor_a_on.gif) no-repeat}
.title_bor span{ float:right; padding-right:10px}
.title_bor span a{ line-height:38px; font-family:"����"; font-size:12px; background:none; padding-right:10px;width:auto}
.title_bor{ background:url(/themes/rongzi/huaxin/images/title_bor_bg.gif) repeat-x; border-bottom:#cacaca solid 1px; height:38px; line-height:38px;}
</style>
{/literal}
		<div class="main_box t20">            
	<div class="title_bor">
		<a class="on">��ؽ���</a>
	</div>            
	<div>                
		<div class="con">
			����
		</div>            
	</div>        
</div>
<div class="main_box t20">
	<div class="title_bor">
		<a class="on">��ҵ����</a>
	</div>
	<div>
		<div class="con">
			����
		</div>
	</div>
</div>
<div class="main_box t20">
	<div class="title_bor">
		<a class="on">�ʲ����</a>
	</div>
	<div>
		<div class="con">
			����
		</div>
	</div>
</div>
<div class="main_box t20">
	<div class="title_bor">
		<a class="on">�ʽ���;</a>
	</div>
	<div>
		<div class="con">
			����
		</div>
	</div>
</div>
<div class="main_box t20">
	<div class="title_bor">
		<a class="on">���տ��ƴ�ʩ</a>
	</div>
	<div>
		<div class="con">
			����
		</div>
	</div>
</div>
		{else}
		{$_A.borrow_result.wind_control}
		{/if}</textarea>	
		
	<script>var admin_url = "/{$_A.admin_url}";{literal}$('#wind_control').xheditor({skin:'o2007blue',upImgUrl:admin_url+"&q=plugins&p=xheditor&immediate=1",upImgExt:"jpg,jpeg,gif,png"});</script>{/literal}
	</div>
	</form>
	<div class="module_title"><strong>�������</strong></div>
	<div class="module_border" >
		<textarea id="borrow_contents" name="borrow_contents" rows="22" cols="680" style="width: 80%">{$_A.borrow_result.borrow_contents}</textarea>		
	{literal}<script>$('#borrow_contents').xheditor({tools:'Source'});</script>{/literal}
	</div>
	
	
</div>