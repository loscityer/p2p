<div class="module_add">
	<div class="module_title">
	<strong>������Ϣ</strong>
	</div>
</div>
<div class="module_add">
	<div class="module_border">
		<div class="s">�û���:</div>
		<div class="h">
		 &nbsp;{$_A.user_result.username} </div>
		 <div class="s">��ʵ����:</div>
		<div class="h">
		 &nbsp;{$_A.user_result.realname} </div>
	</div>
	
	<div class="module_border">
		<div class="s">����:</div>
		<div class="h">
		 &nbsp;{$_A.user_result.email} </div>
		 <div class="s">�Ա�:</div>
		<div class="h">
		 &nbsp;{if $_A.user_result.sex==1}��{elseif $_A.user_result.sex==0}Ů{else}δ֪{/if} </div>
	</div>
	
	<div class="module_border">
		<div class="s">�ֻ�����:</div>
		<div class="h">
		 &nbsp;{$_A.user_result.phone} </div>
		 <div class="s">�ֻ���֤:</div>
		<div class="h">
		 &nbsp;{if $_A.user_result.phone_status==1}����֤{else}δ��֤{/if} </div>
	</div>
	
	<div class="module_border">
	
		 <div class="s">���֤����:</div>
		<div class="h">
		 &nbsp;{$_A.user_result.card_id} </div>
		 
		 	<div class="s">����:</div>
		<div class="h">
		 &nbsp;{$_A.user_result.birthday|date_format:"Y-m-d "|default:'��'}  </div>
	</div>
	
	<div class="module_border">
		<div class="s">Ͷ����֤:</div>
		<div class="h">
		 &nbsp;{if $_A.user_result.tender_status==1}����֤{else}δ��֤{/if} </div>
		 <div class="s">���û���:</div>
		<div class="h">
		  &nbsp;{$_A.user_result.credit|default:0} ��</div>
	</div>
	
	<div class="module_border">
		<div class="s">ע��ʱ��:</div>
		<div class="h">
		 &nbsp;{$_A.user_result.reg_time|date_format:"Y-m-d H:i:s"}</div>
		 <div class="s">����¼ʱ��:</div>
		<div class="h">
		  &nbsp;{$_A.user_result.up_time|date_format:"Y-m-d H:i:s"}</div>
	</div>
	
<div class="module_add">
	<div class="module_title">
	<strong>�ʺ��ʽ�</strong>
	</div>
</div>	
	<div class="module_border">
		<div class="s">������� :</div>
		<div class="h">
		 &nbsp;{$_A.user_result.balance} Ԫ</div>
		 <div class="s">���ʲ�:</div>
		<div class="h">
		 &nbsp;{$_A.user_result.total} Ԫ</div>
	</div>
	
	<div class="module_border">
		<div class="s">�����ʽ� :</div>
		<div class="h">
		 &nbsp;{$_A.user_result.frost} Ԫ</div>
		 <div class="s">���ս��:</div>
		<div class="h">
		 &nbsp;{$_A.user_result.await} Ԫ</div>
	</div>
</div>