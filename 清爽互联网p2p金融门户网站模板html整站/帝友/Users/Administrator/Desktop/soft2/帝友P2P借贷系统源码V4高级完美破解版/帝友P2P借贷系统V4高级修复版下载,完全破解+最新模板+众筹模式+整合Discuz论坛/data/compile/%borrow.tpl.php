
<? if (!isset($_REQUEST['view'])) $_REQUEST['view']=''; ;if (  $_REQUEST['view'] !=""): ?>
<? $this->magic_include(array('file' => "borrow.view.tpl", 'vars' => array('template_dir' => 'modules/borrow')));?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "shenqing"): ?>
	<? $this->magic_include(array('file' => "borrow.shenqing.tpl", 'vars' => array('template_dir' => 'modules/borrow')));?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "raise" ||  $this->magic_vars['_A']['query_type'] == "raise_add"  ||  $this->magic_vars['_A']['query_type'] == "raise_edit" ||  $this->magic_vars['_A']['query_type'] == "raise_tender"): ?>
	<? $this->magic_include(array('file' => "borrow.raise.tpl", 'vars' => array('template_dir' => 'modules/borrow')));?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "first"): ?>
	<? $this->magic_include(array('file' => "borrow.first.tpl", 'vars' => array('template_dir' => 'modules/borrow')));?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "repay" ||  $this->magic_vars['_A']['query_type'] == "bad_account"): ?>
	<? $this->magic_include(array('file' => "borrow.repay.tpl", 'vars' => array('template_dir' => 'modules/borrow')));?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "borrow_repay"): ?>
	<? $this->magic_include(array('file' => "borrow.borrow_repay.tpl", 'vars' => array('template_dir' => 'modules/borrow')));?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "full"): ?>
	<? $this->magic_include(array('file' => "borrow.full.tpl", 'vars' => array('template_dir' => 'modules/borrow')));?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "tender"): ?>
	<? $this->magic_include(array('file' => "borrow.tender.tpl", 'vars' => array('template_dir' => 'modules/borrow')));?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "fengxianchi"): ?>
	<? $this->magic_include(array('file' => "borrow.fengxianchi.tpl", 'vars' => array('template_dir' => 'modules/borrow')));?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "change" ||  $this->magic_vars['_A']['query_type'] == "web_repay_no"): ?>
	<? $this->magic_include(array('file' => "borrow.change.tpl", 'vars' => array('template_dir' => 'modules/borrow')));?>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "tool"): ?>
	<? $this->magic_include(array('file' => "borrow.tool.tpl", 'vars' => array('template_dir' => 'modules/borrow')));?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "new" ||  $this->magic_vars['_A']['query_type'] == "edit"): ?>
<div class="module_add">
	<? if (!isset($_REQUEST['user_id'])) $_REQUEST['user_id']=''; ;if (  $_REQUEST['user_id']==""): ?>
	<form name="form1" method="post" action="" enctype="multipart/form-data" >
	<div class="module_title"><strong>���������Ϣ���û�����ID</strong></div>
	

	<div class="module_border">
		<div class="l">�û�ID��</div>
		<div class="c">
			<input type="text" name="user_id"  class="input_border"  size="20" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<input type="text" name="username"  class="input_border"  size="20" />
		</div>
	</div>
	
	<div class="module_submit" >
		<input type="submit"  name="submit" value="ȷ���ύ" />
		<input type="reset"  name="reset" value="���ñ�" />
	</div>
	</form>
	<? else: ?>
	<div class="module_title"><strong>����û���Ϣ</strong></div>
	
	<form name="form1" method="post" action=""  enctype="multipart/form-data" onsubmit="return check_form();" >
	
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['username'])) $this->magic_vars['_A']['borrow_result']['username'] = ''; echo $this->magic_vars['_A']['borrow_result']['username']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�����;��</div>
		<div class="c">
		<? $result = $this->magic_vars['_G']['_linkages']['borrow_use']; echo "<select name='borrow_use' id=borrow_use  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['borrow_result']['borrow_use']==$val['id'] ) { echo "<option value='{$val['id']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['id']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
			 <span >˵�����ɹ���ľ�����;��</span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">������ޣ�</div>
		<div class="c">
			<? $result = $this->magic_vars['_G']['_linkages']['borrow_time_limit']; echo "<select name='borrow_period' id=borrow_period  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['borrow_result']['borrow_period']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?><span >���ɹ���,�����Լ����µ�ʱ���������� </span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���ʽ��</div>
		<div class="c">
			<? $result = $this->magic_vars['_G']['_linkages']['borrow_style']; echo "<select name='borrow_style' id=borrow_style  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['borrow_result']['borrow_style']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		<span >�����ȷ��ڻ�����ָ�����߽��ɹ���,ÿ�»�Ϣ������������</span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ܽ�</div>
		<div class="c"><input type="text" name="account" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_result']['account']; ?>"  size="10"/>
<span >�����Ӧ��500Ԫ��50,000Ԫ֮�䡣���ױ��־�Ϊ����ҡ�</span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�����ʣ�</div>
		<div class="c">
			<input type="text" name="borrow_apr" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_apr'])) $this->magic_vars['_A']['borrow_result']['borrow_apr'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_apr']; ?>" /> % <span >�����ȷ��ڻ�����ָ�����߽��ɹ���,ÿ�»�Ϣ������������</span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���Ͷ���</div>
		<div class="c">
			<? $result = $this->magic_vars['_G']['_linkages']['borrow_lowest_account']; echo "<select name='tender_account_min' id=tender_account_min  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['borrow_result']['tender_account_min']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
		<span >����Ͷ���߶�һ�������Ͷ���ܶ�����ơ�</span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���Ͷ���ܶ</div>
		<div class="c">
			<? $result = $this->magic_vars['_G']['_linkages']['borrow_most_account']; echo "<select name='tender_account_max' id=tender_account_max  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['borrow_result']['tender_account_max']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
			<span >���ô˴ν�����ʵ����������ʽ��ȴﵽ100%��ֱ�ӽ�����վ�ĸ���</span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��Чʱ�䣺</div>
		<div class="c">
			<? $result = $this->magic_vars['_G']['_linkages']['borrow_valid_time']; echo "<select name='borrow_valid_time' id=borrow_valid_time  style=''>"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['borrow_result']['borrow_valid_time']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
			 <span>���ô˴ν�����ʵ����������ʽ��ȴﵽ100%��ֱ�ӽ�����վ�ĸ��� </span>
		</div>
	</div>
	<div class="module_title"><strong>���ý���</strong></div>
	<div class="module_border">
		<div class="w"><input type="radio" name="award" value="0" <? if (!isset($this->magic_vars['_A']['borrow_result']['award_status'])) $this->magic_vars['_A']['borrow_result']['award_status']='';if (!isset($this->magic_vars['_A']['borrow_result']['award_status'])) $this->magic_vars['_A']['borrow_result']['award_status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['award_status']==0 ||  $this->magic_vars['_A']['borrow_result']['award_status']==""): ?> checked="checked"<? endif; ?>>�����ý���</div>
		<div class="c">
			 <span>����������˽��������ᶳ�����ʻ�����Ӧ���˻������Ҫ���ý�������ȷ�������ʻ����㹻 ���˻��� </span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="w"><input type="radio" name="award_status" value="1" <? if (!isset($this->magic_vars['_A']['borrow_result']['award_status'])) $this->magic_vars['_A']['borrow_result']['award_status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['award_status']==1): ?> checked="checked"<? endif; ?>/>���̶�����̯������</div>
		<div class="c">
			<input type="text" name="award_account" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['award_account'])) $this->magic_vars['_A']['borrow_result']['award_account'] = ''; echo $this->magic_vars['_A']['borrow_result']['award_account']; ?>" size="5" />Ԫ <span>���ܵ���5Ԫ,���ܸ����ܱ�Ľ���2%�����뱣������Ԫ��Ϊ��λ���������ñ��α��Ҫ����������Ͷ���û����ܽ�  </span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="w"><input type="radio" name="award_status" value="2" <? if (!isset($this->magic_vars['_A']['borrow_result']['award_status'])) $this->magic_vars['_A']['borrow_result']['award_status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['award_status']==2): ?> checked="checked"<? endif; ?>/>��Ͷ�������������</div>
		<div class="c">
			<input type="text" name="award_scale" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['award_scale'])) $this->magic_vars['_A']['borrow_result']['award_scale'] = ''; echo $this->magic_vars['_A']['borrow_result']['award_scale']; ?>" size="5" />%  <span>��Χ��0.1%~2% ���������ñ��α��Ҫ����������Ͷ���û��Ľ���������  </span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="w"><input type="checkbox" name="award_false" value="1" <? if (!isset($this->magic_vars['_A']['borrow_result']['award_false'])) $this->magic_vars['_A']['borrow_result']['award_false']=''; ;if (  $this->magic_vars['_A']['borrow_result']['award_false']==1): ?> checked="checked"<? endif; ?>/>���ʧ��ʱҲͬ��������</div>
		<div class="c">
			  <span>�������ѡ�˴�ѡ�����δ�������ʧ��ʱͬ���ά����Ͷ���û������û�й�ѡ�����ʧ��ʱ��ѽ������ⶳ���˻���   </span>
		</div>
	</div>
	
	<div class="module_title"><strong>�ʻ���Ϣ����</strong></div>
	<div class="module_border">
		<div class="w">�����ҵ��ʻ��ʽ������</div>
		<div class="c">
			<input type="checkbox" name="open_account" value="1" <? if (!isset($this->magic_vars['_A']['borrow_result']['open_account'])) $this->magic_vars['_A']['borrow_result']['open_account']=''; ;if (  $this->magic_vars['_A']['borrow_result']['open_account']==1): ?> checked="checked"<? endif; ?>/> <span> ��������ϴ�ѡ�����ʵʱ�������ʻ��ģ��˻��ܶ�����������ܶ  </span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="w">�����ҵĽ���ʽ������</div>
		<div class="c">
			<input type="checkbox" name="open_borrow" value="1" <? if (!isset($this->magic_vars['_A']['borrow_result']['open_borrow'])) $this->magic_vars['_A']['borrow_result']['open_borrow']=''; ;if (  $this->magic_vars['_A']['borrow_result']['open_borrow']==1): ?> checked="checked"<? endif; ?>/> <span>��������ϴ�ѡ�����ʵʱ�������ʻ��ģ�����ܶ�ѻ����ܶδ�����ܶ�ٻ��ܶ�����ܶ </span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="w">�����ҵ�Ͷ���ʽ������</div>
		<div class="c">
			<input type="checkbox" name="open_tender" value="1" <? if (!isset($this->magic_vars['_A']['borrow_result']['open_tender'])) $this->magic_vars['_A']['borrow_result']['open_tender']=''; ;if (  $this->magic_vars['_A']['borrow_result']['open_tender']==1): ?> checked="checked"<? endif; ?>/> <span>��������ϴ�ѡ�����ʵʱ�������ʻ��ģ�Ͷ���ܶ���ջ��ܶ���ջ��ܶ  </span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="w">�����ҵ����ö�������</div>
		<div class="c">
			<input type="checkbox" name="open_credit" value="1" <? if (!isset($this->magic_vars['_A']['borrow_result']['open_credit'])) $this->magic_vars['_A']['borrow_result']['open_credit']=''; ;if (  $this->magic_vars['_A']['borrow_result']['open_credit']==1): ?> checked="checked"<? endif; ?>/> <span>��������ϴ�ѡ�����ʵʱ�������ʻ��ģ�������ö�ȡ�������ö�ȡ�  </span>
		</div>
	</div>
	
	<div class="module_title"><strong>��ϸ��Ϣ</strong></div>
	<div class="module_border">
		<div class="l">���⣺</div>
		<div class="c">
			<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['name'])) $this->magic_vars['_A']['borrow_result']['name'] = ''; echo $this->magic_vars['_A']['borrow_result']['name']; ?>" size="50" /> 
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��Ϣ��</div>
		<div class="c">
			
		</div>
	</div>
	<!--�������� ����-->
		
	<div class="module_submit" >
		<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?><input type="hidden"  name="borrow_nid" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_nid'])) $this->magic_vars['_A']['borrow_result']['borrow_nid'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_nid']; ?>" /><? endif; ?>
		<input type="hidden" name="status" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status'] = ''; echo $this->magic_vars['_A']['borrow_result']['status']; ?>" />
		<input type="hidden"  name="user_id" value="<? if (!isset($_REQUEST['user_id'])) $_REQUEST['user_id'] = ''; echo $_REQUEST['user_id']; ?>" />
		<input type="hidden"  name="vouch_status" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['vouch_status'])) $this->magic_vars['_A']['borrow_result']['vouch_status'] = ''; echo $this->magic_vars['_A']['borrow_result']['vouch_status']; ?>" />
		<input type="hidden"  name="vouch_award_scale" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['vouch_award_scale'])) $this->magic_vars['_A']['borrow_result']['vouch_award_scale'] = ''; echo $this->magic_vars['_A']['borrow_result']['vouch_award_scale']; ?>" />
		<input type="hidden"  name="vouch_users" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['vouch_users'])) $this->magic_vars['_A']['borrow_result']['vouch_users'] = ''; echo $this->magic_vars['_A']['borrow_result']['vouch_users']; ?>" />
		<input type="submit"  name="submit" value="ȷ���ύ" />
		<input type="reset"  name="reset" value="���ñ�" />
	</div>
	</form>
	
	
	<? endif; ?>
</div>

<script>


function check_form(){
	 var frm = document.forms['form1'];
	 var name = frm.elements['name'].value;
	 var award = frm.elements['award'].value;
	 var part_account = frm.elements['part_account'].value;
	 var errorMsg = '';
	  if (name.length == 0 ) {
		errorMsg += '���������д' + '\n';
	  }
	   if (award ==1 && part_account<5) {
		errorMsg += '��������С��5Ԫ' + '\n';
	  }
	  
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}

</script>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "view"): ?>


<script>
function check_form(){
	 var frm = document.forms['form1'];
	 var verify_remark = frm.elements['verify_remark'].value;
	 var errorMsg = '';
	  if (verify_remark.length == 0 ) {
		errorMsg += '��ע������д' + '\n';
	  }
	  
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}

</script>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="list" ||   $this->magic_vars['_A']['query_type']=="wait"||   $this->magic_vars['_A']['query_type']=="success"||   $this->magic_vars['_A']['query_type']=="false"||   $this->magic_vars['_A']['query_type']=="full_check" ||   $this->magic_vars['_A']['query_type']=="full_success" ||   $this->magic_vars['_A']['query_type']=="full_false" ||   $this->magic_vars['_A']['query_type']=="cancel"): ?>

<? if (!isset($_REQUEST['check'])) $_REQUEST['check']=''; ;if (  $_REQUEST['check']!=""): ?>
<? if (!isset($_REQUEST['full'])) $_REQUEST['full']=''; ;elseif (  $_REQUEST['full']!=""): ?>
<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&full=<? if (!isset($_REQUEST['full'])) $_REQUEST['full'] = ''; echo $_REQUEST['full']; ?>" >
	<div class="module_border_ajax">
		<div class="l">���״̬:</div>
		<div class="c">
		<input type="radio" name="status" value="3"/>����ͨ�� <input type="radio" name="status" value="4"  checked="checked"/>����ͨ�� </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="reverify_remark" cols="45" rows="7"><? if (!isset($this->magic_vars['_A']['borrow_result']['reverify_remark'])) $this->magic_vars['_A']['borrow_result']['reverify_remark'] = ''; echo $this->magic_vars['_A']['borrow_result']['reverify_remark']; ?></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" alt="���ˢ��" id="valicode" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="��˴˱�" />
	</div>
	
</form>
</div>
<? if (!isset($_REQUEST['view'])) $_REQUEST['view']=''; ;elseif (  $_REQUEST['view']!=""): ?>

<? else: ?>
<div class="module_add">
	<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type'] = '';$_tmp = $this->magic_vars['_A']['query_type'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_query_type");echo $_tmp;unset($_tmp); ?></strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td"><input type="checkbox" name="check_all"  /></td>
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�û�����</td>
			<td width="*" class="main_td">�����</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">�����</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">�������</td>
			<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type']=="success"): ?>
			<td width="" class="main_td">��Ͷ���</td>
			<td width="" class="main_td">Ͷ�ʴ���</td>
			<? endif; ?>
			<td width="" class="main_td">���ʽ</td>
			<td width="" class="main_td">�������</td>
			<!--<td width="" class="main_td">����</td>-->
			<td width="" class="main_td">״̬</td>
			<td width="" class="main_td">�鿴</td>
			
		</tr>
		<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','borrow_name'=>isset($_REQUEST['borrow_name'])?$_REQUEST['borrow_name']:'','borrow_nid'=>isset($_REQUEST['borrow_nid'])?$_REQUEST['borrow_nid']:'','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','query_type'=>$this->magic_vars['_A']['query_type']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
		<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><input type="checkbox" name="check_all[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>"  /></td>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?><input type="hidden" name="id[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" /></td>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=code/users/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene",600,400,"true","","true","text");'>	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?></td>
			<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>&view=<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>Ԫ</td>
			<td><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</td>
			<td><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?>����</td>
			<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type']=="success"): ?>
			<td width="" class="main_td">��<? if (!isset($this->magic_vars['item']['borrow_account_yes'])) $this->magic_vars['item']['borrow_account_yes'] = ''; echo $this->magic_vars['item']['borrow_account_yes']; ?></td>
			<td width="" class="main_td"><? if (!isset($this->magic_vars['item']['tender_times'])) $this->magic_vars['item']['tender_times'] = ''; echo $this->magic_vars['item']['tender_times']; ?>��</td>
			<? endif; ?>
			<td><? if (!isset($this->magic_vars['item']['borrow_style'])) $this->magic_vars['item']['borrow_style'] = '';$_tmp = $this->magic_vars['item']['borrow_style'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['vouchstatus'])) $this->magic_vars['item']['vouchstatus']=''; ;if (  $this->magic_vars['item']['vouchstatus']==1): ?><font color="#FF0000">��������</font><? if (!isset($this->magic_vars['item']['is_flow'])) $this->magic_vars['item']['is_flow']=''; ;elseif (  $this->magic_vars['item']['is_flow']==1): ?><font color="#FF0000">��ת���</font><? if (!isset($this->magic_vars['item']['is_jin'])) $this->magic_vars['item']['is_jin']=''; ;elseif (  $this->magic_vars['item']['is_jin']==1): ?><font color="#FF0000">��ֵ���</font><? if (!isset($this->magic_vars['item']['fast_status'])) $this->magic_vars['item']['fast_status']=''; ;elseif (  $this->magic_vars['item']['fast_status']==1): ?><font color="#FF0000">��Ѻ���</font><? else: ?>��ͨ����<? endif; ?></td>
			<!--<td><? if (!isset($this->magic_vars['item']['borrow_flag'])) $this->magic_vars['item']['borrow_flag'] = '';$_tmp = $this->magic_vars['item']['borrow_flag'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_flag");echo $_tmp;unset($_tmp); ?></td>-->
			<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status'] = '';$_tmp = $this->magic_vars['item']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_status");echo $_tmp;unset($_tmp); ?></td>
			<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&view=<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>">�鿴</a></td>
			
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="14" class="action">
		<div class="floatl">
			<input type="submit" value="ȷ���ύ" class="submit"/>
		</div>
		<div class="floatr">
			 ���⣺<input type="text" name="borrow_name" id="borrow_name" value="<? if (!isset($_REQUEST['borrow_name'])) $_REQUEST['borrow_name'] = ''; echo $_REQUEST['borrow_name']; ?>" size="8"/> �û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>" size="8"/>����ţ�<input type="text" name="borrow_nid" id="borrow_nid" value="<? if (!isset($_REQUEST['borrow_nid'])) $_REQUEST['borrow_nid'] = ''; echo $_REQUEST['borrow_nid']; ?>" size="8"/> ״̬<select id="status" ><option value="">ȫ��</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>��ͨ��</option><option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>δͨ��</option></select> <select id="is_vouch" ><option value="">ȫ��</option><option value="1" <? if (!isset($_REQUEST['is_vouch'])) $_REQUEST['is_vouch']=''; ;if (  $_REQUEST['is_vouch']==1): ?> selected="selected"<? endif; ?>>������</option><option value="0" <? if (!isset($_REQUEST['is_vouch'])) $_REQUEST['is_vouch']=''; ;if (  $_REQUEST['is_vouch']=="0"): ?> selected="selected"<? endif; ?>>��ͨ��</option></select> <input type="button" value="����" class="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>')">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="14" class="page">
			<? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?> 
			</td>
		</tr>
		<? unset($_magic_vars); ?>
	</form>	
</table>
<? endif; ?>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="tender1"): ?>


<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="cancel_list"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�û�����</td>
			<td width="*" class="main_td">���û���</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">�����</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">�������</td>
			<td width="" class="main_td">�������</td>
			<td width="" class="main_td">����ʱ��</td>
			<td width="" class="main_td">����״̬</td>
			<td width="" class="main_td">����</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['borrow_list']) || $this->magic_vars['_A']['borrow_list']=='') $this->magic_vars['_A']['borrow_list'] = array();  $_from = $this->magic_vars['_A']['borrow_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?><input type="hidden" name="id[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" /></td>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=code/users/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene",600,400,"true","","true","text");'>	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['credit']['approve_credit'])) $this->magic_vars['item']['credit']['approve_credit'] = ''; echo $this->magic_vars['item']['credit']['approve_credit']; ?>��</td>
			<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>Ԫ</td>
			<td><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</td>
			<td><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?>����</td>
			<td><? if (!isset($this->magic_vars['item']['vouchstatus'])) $this->magic_vars['item']['vouchstatus']=''; ;if (  $this->magic_vars['item']['vouchstatus']==1): ?><font color="#FF0000">��������</font><? if (!isset($this->magic_vars['item']['is_flow'])) $this->magic_vars['item']['is_flow']=''; ;elseif (  $this->magic_vars['item']['is_flow']==1): ?><font color="#FF0000">��ת���</font><? if (!isset($this->magic_vars['item']['is_jin'])) $this->magic_vars['item']['is_jin']=''; ;elseif (  $this->magic_vars['item']['is_jin']==1): ?><font color="#FF0000">��ֵ���</font><? if (!isset($this->magic_vars['item']['fast_status'])) $this->magic_vars['item']['fast_status']=''; ;elseif (  $this->magic_vars['item']['fast_status']==1): ?><font color="#FF0000">��Ѻ���</font><? else: ?>��ͨ����<? endif; ?></td>
			
			<td><? if (!isset($this->magic_vars['item']['cancel_time'])) $this->magic_vars['item']['cancel_time'] = '';$_tmp = $this->magic_vars['item']['cancel_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['cancel_status'])) $this->magic_vars['item']['cancel_status']=''; ;if (  $this->magic_vars['item']['cancel_status'] ==2): ?><font color="#FF0000">������</font><? else: ?>�ѳ���<? endif; ?></td>
			
			<td><? if (!isset($this->magic_vars['item']['cancel_status'])) $this->magic_vars['item']['cancel_status']=''; ;if (  $this->magic_vars['item']['cancel_status'] ==2): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/cancel_edit<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">���</a><? else: ?>-<? endif; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="14" class="action">
		<div class="floatl">
			<input type="submit" value="ȷ���ύ" class="submit"/>
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/> ״̬<select id="status" ><option value="">ȫ��</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>��ͨ��</option><option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>δͨ��</option></select> <select id="is_vouch" ><option value="">ȫ��</option><option value="1" <? if (!isset($_REQUEST['is_vouch'])) $_REQUEST['is_vouch']=''; ;if (  $_REQUEST['is_vouch']==1): ?> selected="selected"<? endif; ?>>������</option><option value="0" <? if (!isset($_REQUEST['is_vouch'])) $_REQUEST['is_vouch']=''; ;if (  $_REQUEST['is_vouch']=="0"): ?> selected="selected"<? endif; ?>>��ͨ��</option></select> <input type="button" value="����" class="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>')">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="14" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="full"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�û�����</td>
			<td width="*" class="main_td">���û���</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">�����</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">Ͷ�����</td>
			<td width="" class="main_td">�������</td>
			<td width="" class="main_td">״̬</td>
			<td width="" class="main_td">����</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['borrow_list']) || $this->magic_vars['_A']['borrow_list']=='') $this->magic_vars['_A']['borrow_list'] = array();  $_from = $this->magic_vars['_A']['borrow_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=code/users/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene",600,400,"true","","true","text");'>	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['credit_jifen'])) $this->magic_vars['item']['credit_jifen'] = ''; echo $this->magic_vars['item']['credit_jifen']; ?></td>
			<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>Ԫ</td>
			<td><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</td>
			<td><? if (!isset($this->magic_vars['item']['tender_times'])) $this->magic_vars['item']['tender_times'] = '';$_tmp = $this->magic_vars['item']['tender_times'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?>����</td>
			<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==3): ?>������ɹ�<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==4): ?>�����ʧ��<? else: ?>���������<? endif; ?></td>
			<td><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/full_view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&borrow_nid=<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>">���</a></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="10" class="action">
		<div class="floatl">
		
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/><input type="button" value="����" class="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/full&status=1<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>')">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="9" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "full_view"): ?>
<div class="module_add">
	<div class="module_title"><strong>������������</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=code/users/view&user_id=<? if (!isset($this->magic_vars['_A']['borrow_result']['user_id'])) $this->magic_vars['_A']['borrow_result']['user_id'] = ''; echo $this->magic_vars['_A']['borrow_result']['user_id']; ?>&type=scene",600,400,"true","","true","text");'>	<? if (!isset($this->magic_vars['_A']['borrow_result']['username'])) $this->magic_vars['_A']['borrow_result']['username'] = ''; echo $this->magic_vars['_A']['borrow_result']['username']; ?></a>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ʵ������</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['realname'])) $this->magic_vars['_A']['borrow_result']['realname'] = ''; echo $this->magic_vars['_A']['borrow_result']['realname']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���⣺</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['name'])) $this->magic_vars['_A']['borrow_result']['name'] = ''; echo $this->magic_vars['_A']['borrow_result']['name']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����</div>
		<div class="h">
			��<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_result']['account']; ?>
		</div>
		<div class="l">�����ʣ�</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_apr'])) $this->magic_vars['_A']['borrow_result']['borrow_apr'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_apr']; ?> %
		</div>
	</div>
	<div class="module_border">
		<div class="l">������ޣ�</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_period']; ?>����
		</div>
		<div class="l">�����;��</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_use'])) $this->magic_vars['_A']['borrow_result']['borrow_use'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['borrow_use'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">������ͣ�</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_style'])) $this->magic_vars['_A']['borrow_result']['borrow_style'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['borrow_style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_border">
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">

		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�û�����</td>
			<td width="*" class="main_td">���û���</td>
			<td width="" class="main_td">Ͷ�ʽ��</td>
			<td width="" class="main_td">��Ч���</td>
			<td width="" class="main_td">״̬</td>
			<td width="" class="main_td">Ͷ������</td>
			<td width="" class="main_td">Ͷ��ʱ��</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['borrow_tender_list']) || $this->magic_vars['_A']['borrow_tender_list']=='') $this->magic_vars['_A']['borrow_tender_list'] = array();  $_from = $this->magic_vars['_A']['borrow_tender_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=code/users/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene",600,400,"true","","true","text");'>	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['credit_jifen'])) $this->magic_vars['item']['credit_jifen'] = ''; echo $this->magic_vars['item']['credit_jifen']; ?>��</td>
			<td><? if (!isset($this->magic_vars['item']['account_tender'])) $this->magic_vars['item']['account_tender'] = ''; echo $this->magic_vars['item']['account_tender']; ?>Ԫ</td>
			<td><font color="#FF0000"><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>Ԫ</font></td>
			<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account']='';if (!isset($this->magic_vars['item']['account_tender'])) $this->magic_vars['item']['account_tender']=''; ;if (  $this->magic_vars['item']['account'] ==  $this->magic_vars['item']['account_tender']): ?>ȫ��ͨ��<? else: ?>����ͨ��<? endif; ?></td>
			<td><? if (!isset($this->magic_vars['item']['contents'])) $this->magic_vars['item']['contents'] = ''; echo $this->magic_vars['item']['contents']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
			<td colspan="9" class="page">
			<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']+1; ?>��Ͷ�� 
			</td>
		</tr>
</table>

	</div>
	<? if (!isset($this->magic_vars['_A']['borrow_result']['vouch_status'])) $this->magic_vars['_A']['borrow_result']['vouch_status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['vouch_status']==1): ?>
	<div class="module_border">
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">

		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">������</td>
			<td width="*" class="main_td">������Ч���</td>
			<td width="" class="main_td">Ͷ�ʵ������</td>
			<td width="" class="main_td">������������</td>
			<td width="" class="main_td">�����������</td>
			<td width="" class="main_td">��������</td>
			<td width="" class="main_td">����ʱ��</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['borrow_vouch_result']) || $this->magic_vars['_A']['borrow_vouch_result']=='') $this->magic_vars['_A']['borrow_vouch_result'] = array();  $_from = $this->magic_vars['_A']['borrow_vouch_result']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=code/users/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene",600,400,"true","","true","text");'>	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td>��<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>
			<td>��<? if (!isset($this->magic_vars['item']['account_vouch'])) $this->magic_vars['item']['account_vouch'] = ''; echo $this->magic_vars['item']['account_vouch']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['award_scale'])) $this->magic_vars['item']['award_scale'] = ''; echo $this->magic_vars['item']['award_scale']; ?>%</td>
			<td>��<? if (!isset($this->magic_vars['item']['award_account'])) $this->magic_vars['item']['award_account'] = ''; echo $this->magic_vars['item']['award_account']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['contents'])) $this->magic_vars['item']['contents'] = ''; echo $this->magic_vars['item']['contents']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
			<td colspan="9" class="page">
			<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']+1; ?>������ 
			</td>
		</tr>
</table>

	</div>
	<? endif; ?>
	<div class="module_border">
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�ƻ�������</td>
			<td width="*" class="main_td">ÿ�ڻ��Ϣ</td>
			<td width="" class="main_td">ÿ�ڻ����</td>
			<td width="" class="main_td">ÿ�ڻ�����Ϣ</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['borrow_repayment']) || $this->magic_vars['_A']['borrow_repayment']=='') $this->magic_vars['_A']['borrow_repayment'] = array();  $_from = $this->magic_vars['_A']['borrow_repayment']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']+1; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['repay_time'])) $this->magic_vars['item']['repay_time'] = '';$_tmp = $this->magic_vars['item']['repay_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			<td>��<? if (!isset($this->magic_vars['item']['account_all'])) $this->magic_vars['item']['account_all'] = ''; echo $this->magic_vars['item']['account_all']; ?></td>
			<td>��<? if (!isset($this->magic_vars['item']['account_capital'])) $this->magic_vars['item']['account_capital'] = ''; echo $this->magic_vars['item']['account_capital']; ?></td>
			<td>��<? if (!isset($this->magic_vars['item']['account_interest'])) $this->magic_vars['item']['account_interest'] = ''; echo $this->magic_vars['item']['account_interest']; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
</table>

	</div>
	<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['status']==1): ?>
	<div class="module_title"><strong>��˴˽��</strong></div>
	<form name="form1" method="post" action="" >
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
		<input type="radio" name="status" value="3"/>����ͨ�� <input type="radio" name="status" value="4"  checked="checked"/>����ͨ�� </div>
	</div>
	
	<div class="module_border" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="reverify_remark" cols="45" rows="5"><? if (!isset($this->magic_vars['_A']['borrow_result']['reverify_remark'])) $this->magic_vars['_A']['borrow_result']['reverify_remark'] = ''; echo $this->magic_vars['_A']['borrow_result']['reverify_remark']; ?></textarea>
		</div>
	</div>
	<div class="module_border" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>&nbsp;<img id="valicode" src="/?plugins&q=imgcode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit" >
		<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['id'])) $this->magic_vars['_A']['borrow_result']['id'] = ''; echo $this->magic_vars['_A']['borrow_result']['id']; ?>" />
		<input type="hidden" name="borrow_nid" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_nid'])) $this->magic_vars['_A']['borrow_result']['borrow_nid'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_nid']; ?>" />
		
		<input type="submit"  name="reset" value="��˴˽���" class="submit" />
	</div>
	
</form>
	<? endif; ?>
	<div class="module_title"><strong>������ϸ����</strong></div>
	<div class="module_border">
		<div class="l">Ͷ�꽱����</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['award_status'])) $this->magic_vars['_A']['borrow_result']['award_status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['award_status']==0): ?>�޽���<? if (!isset($this->magic_vars['_A']['borrow_result']['award_status'])) $this->magic_vars['_A']['borrow_result']['award_status']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['award_status']==1): ?>��<? if (!isset($this->magic_vars['_A']['borrow_result']['award_account'])) $this->magic_vars['_A']['borrow_result']['award_account'] = ''; echo $this->magic_vars['_A']['borrow_result']['award_account']; ?>Ԫ<? else: ?>����<? if (!isset($this->magic_vars['_A']['borrow_result']['award_scale'])) $this->magic_vars['_A']['borrow_result']['award_scale'] = ''; echo $this->magic_vars['_A']['borrow_result']['award_scale']; ?>%<? endif; ?>
		</div>
		<div class="l">Ͷ��ʧ���Ƿ�����</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['award_false'])) $this->magic_vars['_A']['borrow_result']['award_false']=''; ;if (  $this->magic_vars['_A']['borrow_result']['award_false']==1): ?>��<? else: ?>��<? endif; ?>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">���ʱ�䣺</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['addtime'])) $this->magic_vars['_A']['borrow_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>
		</div>
		<div class="l">�б�ʱ�䣺</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['verify_time'])) $this->magic_vars['_A']['borrow_result']['verify_time'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">���ݣ�</div>
		<div class="hb" >
			<table><tr><td align="left"><? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_contents'])) $this->magic_vars['_A']['borrow_result']['borrow_contents'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_contents']; ?></td></tr></table>
		</div>
	</div>
	
</div>
<!---�ѻ���--->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="repayment"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�����</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">����ʱ��</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">����ʱ��</td>
			<td width="" class="main_td">״̬</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['borrow_list']) || $this->magic_vars['_A']['borrow_list']=='') $this->magic_vars['_A']['borrow_list'] = array();  $_from = $this->magic_vars['_A']['borrow_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></td>
			<td title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['repay_period'])) $this->magic_vars['item']['repay_period'] = ''; echo $this->magic_vars['item']['repay_period']+1; ?>/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['repay_time'])) $this->magic_vars['item']['repay_time'] = '';$_tmp = $this->magic_vars['item']['repay_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['repay_account'])) $this->magic_vars['item']['repay_account'] = ''; echo $this->magic_vars['item']['repay_account']; ?>Ԫ</td>
			<td><? if (!isset($this->magic_vars['item']['repay_yestime'])) $this->magic_vars['item']['repay_yestime'] = '';$_tmp = $this->magic_vars['item']['repay_yestime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['repay_status'])) $this->magic_vars['item']['repay_status']=''; ;if (  $this->magic_vars['item']['repay_status']==1): ?><font color="#006600">�ѻ�</font><? else: ?><font color="#FF0000">δ��</font><? endif; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="10" class="action">
		<div class="floatl">
		
		</div>
		<div class="floatr">
			����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  �û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/>�ؼ��֣�
			<input type="text" name="keywords" id="keywords" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"/><select id="status" name="status" >
			<option value="">����</option>
			<option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>�ѻ�</option>
			<option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>δ��</option>
			</select><input type="button" value="����" class="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/repayment<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>')">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="9" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table>


<!---����--->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="liubiao"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�����</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">�������</td>
			<td width="" class="main_td">�����</td>
			<td width="" class="main_td">��Ͷ���</td>
			<td width="" class="main_td">��ʼʱ��</td>
			<td width="" class="main_td">����ʱ��</td>
			<td width="" class="main_td">״̬</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['borrow_list']) || $this->magic_vars['_A']['borrow_list']=='') $this->magic_vars['_A']['borrow_list'] = array();  $_from = $this->magic_vars['_A']['borrow_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
			<td title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?>����</td>
			<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>Ԫ</td>
			<td><? if (!isset($this->magic_vars['item']['borrow_account_yes'])) $this->magic_vars['item']['borrow_account_yes'] = ''; echo $this->magic_vars['item']['borrow_account_yes']; ?>Ԫ</td>
			<td><? if (!isset($this->magic_vars['item']['verify_time'])) $this->magic_vars['item']['verify_time'] = '';$_tmp = $this->magic_vars['item']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['verify_time'])) $this->magic_vars['item']['verify_time'] = ''; if (!isset($this->magic_vars['item']['borrow_valid_time'])) $this->magic_vars['item']['borrow_valid_time'] = '';$_tmp = $this->magic_vars['item']['verify_time']+$this->magic_vars['item']['borrow_valid_time']*24*60*60;$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			<td><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/liubiao_edit&borrow_nid=<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>">�޸�</a></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="10" class="action">
		<div class="floatl">
		
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/>�ؼ��֣�<input type="text" name="keywords" id="keywords" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"/><select id="status" >
			<option value="">����</option>
			<option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>�ѻ�</option>
			<option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==0): ?> selected="selected"<? endif; ?>>δ��</option>
			</select><input type="button" value="����" class="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/repayment<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>')">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="9" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table>


<!--������ ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="liubiao_edit"): ?>
<div class="module_title"><strong>�������</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['username'])) $this->magic_vars['_A']['borrow_result']['username'] = ''; echo $this->magic_vars['_A']['borrow_result']['username']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">���⣺</div>
		<div >
			<a href="/invest/a<? if (!isset($this->magic_vars['_A']['borrow_result']['id'])) $this->magic_vars['_A']['borrow_result']['id'] = ''; echo $this->magic_vars['_A']['borrow_result']['id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['_A']['borrow_result']['name'])) $this->magic_vars['_A']['borrow_result']['name'] = ''; echo $this->magic_vars['_A']['borrow_result']['name']; ?></a>
		</div>
	</div>
	<div class="module_border">
		<div class="l">����ȣ�</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_result']['account']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">�ѽ��ȣ�</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_account_yes'])) $this->magic_vars['_A']['borrow_result']['borrow_account_yes'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_account_yes']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ʱ�䣺</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['verify_time'])) $this->magic_vars['_A']['borrow_result']['verify_time'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">����ʱ�䣺</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['verify_time'])) $this->magic_vars['_A']['borrow_result']['verify_time'] = ''; if (!isset($this->magic_vars['_A']['borrow_result']['borrow_valid_time'])) $this->magic_vars['_A']['borrow_result']['borrow_valid_time'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['verify_time']+$this->magic_vars['_A']['borrow_result']['borrow_valid_time']*24*60*60;$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_title"><strong>���</strong></div>
	<form method="post" action="">
	<div class="module_border">
		<div class="l">���״̬��</div>
		<div >
			<input type="radio" name="status" value="1" />���귵�ؽ��<input type="radio" name="status" value="2" checked="checked" />�ӳ��������
		</div>
	</div>
	<div class="module_border">
		<div class="l">�ӳ�������</div>
		<div >
			<input type="text" name="days" value="" size="5" value="0" />��
		</div>
	</div>
	
	<div class="module_border">
		<div class="l"></div>
		<div class="h">
			<input type="submit" value="ȷ�����" class="submit"/>
		</div>
	</div>
	</form>



<!--������ ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="cancel_edit"): ?>
<div class="module_title"><strong>�������</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['username'])) $this->magic_vars['_A']['borrow_result']['username'] = ''; echo $this->magic_vars['_A']['borrow_result']['username']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">���⣺</div>
		<div >
			<a href="/invest/a<? if (!isset($this->magic_vars['_A']['borrow_result']['id'])) $this->magic_vars['_A']['borrow_result']['id'] = ''; echo $this->magic_vars['_A']['borrow_result']['id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['_A']['borrow_result']['name'])) $this->magic_vars['_A']['borrow_result']['name'] = ''; echo $this->magic_vars['_A']['borrow_result']['name']; ?></a>
		</div>
	</div>
	<div class="module_border">
		<div class="l">����ȣ�</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_result']['account']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">�ѽ��ȣ�</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_account_yes'])) $this->magic_vars['_A']['borrow_result']['borrow_account_yes'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_account_yes']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�������ɣ�</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['cancel_remark'])) $this->magic_vars['_A']['borrow_result']['cancel_remark'] = ''; echo $this->magic_vars['_A']['borrow_result']['cancel_remark']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ʱ�䣺</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['cancel_time'])) $this->magic_vars['_A']['borrow_result']['cancel_time'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['cancel_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	
	<div class="module_title"><strong>���</strong></div>
	<form method="post" action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/cancel_edit<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&user_id=<? if (!isset($this->magic_vars['_A']['borrow_result']['user_id'])) $this->magic_vars['_A']['borrow_result']['user_id'] = ''; echo $this->magic_vars['_A']['borrow_result']['user_id']; ?>&borrow_nid=<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_nid'])) $this->magic_vars['_A']['borrow_result']['borrow_nid'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_nid']; ?>">
	<div class="module_border">
		<div class="l">���״̬��</div>
		<div >
			<input type="radio" name="cancel_status" value="3" />��ͬ��<input type="radio" name="cancel_status" value="1" checked="checked" />ͬ�⳷��
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ԭ��</div>
		<div >
			<input type="text" name="cancel_verify_remark" value="" size="20" value="0" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l"></div>
		<div class="h">
			<input type="submit" value="ȷ�����" class="submit"/>
		</div>
	</div>
	</form>


<!--���� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="late"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�����</td>
			<td width="*" class="main_td">������</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">Ӧ��ʱ��</td>
			<td width="" class="main_td">��������</td>
			<td width="" class="main_td">Ӧ�����</td>
			<td width="" class="main_td">���ڷ���</td>
			<td width="" class="main_td">�߽ɷ�</td>
			<td width="" class="main_td">�ܻ���</td>
			<td width="" class="main_td">��վ�������</td>
			<td width="" class="main_td">��վ�Ƿ����</td>
			<td width="" class="main_td">����</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['borrow_repayment_list']) || $this->magic_vars['_A']['borrow_repayment_list']=='') $this->magic_vars['_A']['borrow_repayment_list'] = array();  $_from = $this->magic_vars['_A']['borrow_repayment_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></td>
			<td><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['repay_period'])) $this->magic_vars['item']['repay_period'] = ''; echo $this->magic_vars['item']['repay_period']+1; ?>/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['vouchstatus'])) $this->magic_vars['item']['vouchstatus']=''; ;if (  $this->magic_vars['item']['vouchstatus']==1): ?><font color="#FF0000">��������</font><? if (!isset($this->magic_vars['item']['is_flow'])) $this->magic_vars['item']['is_flow']=''; ;elseif (  $this->magic_vars['item']['is_flow']==1): ?><font color="#FF0000">��ת���</font><? if (!isset($this->magic_vars['item']['is_jin'])) $this->magic_vars['item']['is_jin']=''; ;elseif (  $this->magic_vars['item']['is_jin']==1): ?><font color="#FF0000">��ֵ���</font><? if (!isset($this->magic_vars['item']['fast_status'])) $this->magic_vars['item']['fast_status']=''; ;elseif (  $this->magic_vars['item']['fast_status']==1): ?><font color="#FF0000">��Ѻ���</font><? else: ?>��ͨ����<? endif; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['repay_time'])) $this->magic_vars['item']['repay_time'] = '';$_tmp = $this->magic_vars['item']['repay_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days'] = ''; echo $this->magic_vars['item']['late_days']; ?>��</td>
			<td >��<? if (!isset($this->magic_vars['item']['repay_account'])) $this->magic_vars['item']['repay_account'] = ''; echo $this->magic_vars['item']['repay_account']; ?></td>
			<td >��<? if (!isset($this->magic_vars['item']['late_interest'])) $this->magic_vars['item']['late_interest'] = ''; echo $this->magic_vars['item']['late_interest']; ?></td>
			<td >��<? if (!isset($this->magic_vars['item']['late_reminder'])) $this->magic_vars['item']['late_reminder'] = ''; echo $this->magic_vars['item']['late_reminder']; ?></td>
			<td >��<? if (!isset($this->magic_vars['item']['late_reminder'])) $this->magic_vars['item']['late_reminder'] = '';if (!isset($this->magic_vars['item']['late_interest'])) $this->magic_vars['item']['late_interest'] = '';if (!isset($this->magic_vars['item']['repay_account'])) $this->magic_vars['item']['repay_account'] = ''; echo $this->magic_vars['item']['late_reminder']+$this->magic_vars['item']['late_interest']+$this->magic_vars['item']['repay_account']; ?></td>
			<td >��<? if (!isset($this->magic_vars['item']['repay_capital'])) $this->magic_vars['item']['repay_capital'] = ''; echo $this->magic_vars['item']['repay_capital']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['repay_web'])) $this->magic_vars['item']['repay_web']=''; ;if (  $this->magic_vars['item']['repay_web']==1): ?>�Ѵ���<? else: ?>δ����<? endif; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==2): ?><font color="#FF0000">�Ѵ���</font><? else: ?><? if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days']=''; ;if (  $this->magic_vars['item']['late_days']>0): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/late_repay<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">����</a><? else: ?>-<? endif; ?><? endif; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="11" class="action">
		<div class="floatl">
		
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/> ״̬<select id="status" ><option value="">ȫ��</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>��ͨ��</option><option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>δͨ��</option></select> <input type="button" value="����" class="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/late')">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="11" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table>
<!--���� ����-->


<!--������ ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="amount_view"): ?>
<div class="module_title"><strong>������</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['username'])) $this->magic_vars['_A']['borrow_amount_result']['username'] = ''; echo $this->magic_vars['_A']['borrow_amount_result']['username']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">������ͣ�</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['type'])) $this->magic_vars['_A']['borrow_amount_result']['type']=''; ;if (  $this->magic_vars['_A']['borrow_amount_result']['type']=="tender_vouch"): ?><font color="#FF0000">Ͷ�ʵ������</font><? if (!isset($this->magic_vars['_A']['borrow_amount_result']['type'])) $this->magic_vars['_A']['borrow_amount_result']['type']=''; ;elseif (  $this->magic_vars['_A']['borrow_amount_result']['type']=="borrow_vouch"): ?><font color="#FF0000">�������</font><? else: ?>���ö��<? endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">ԭ����</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['account_old'])) $this->magic_vars['_A']['borrow_amount_result']['account_old'] = '';$_tmp = $this->magic_vars['_A']['borrow_amount_result']['account_old'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">�����ȣ�</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['account'])) $this->magic_vars['_A']['borrow_amount_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_amount_result']['account']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ݣ�</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['content'])) $this->magic_vars['_A']['borrow_amount_result']['content'] = ''; echo $this->magic_vars['_A']['borrow_amount_result']['content']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ע��</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['remark'])) $this->magic_vars['_A']['borrow_amount_result']['remark'] = ''; echo $this->magic_vars['_A']['borrow_amount_result']['remark']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ʱ�䣺</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['addtime'])) $this->magic_vars['_A']['borrow_amount_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['borrow_amount_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_title"><strong>���</strong></div>
	<form method="post" action="">
	<div class="module_border">
		<div class="l">���״̬��</div>
		<div class="h">
			<input type="radio" name="status" value="1" />ͨ��  <input type="radio" name="status" value="0" checked="checked" />��ͨ��
		</div>
	</div>
	<div class="module_border">
		<div class="l">ͨ����ȣ�</div>
		<div class="h">
			<input type="text" name="account" value="<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['account'])) $this->magic_vars['_A']['borrow_amount_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_amount_result']['account']; ?>" />
			<input type="hidden" name="type" value="<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['type'])) $this->magic_vars['_A']['borrow_amount_result']['type'] = ''; echo $this->magic_vars['_A']['borrow_amount_result']['type']; ?>" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��˱�ע��</div>
		<div >
			<textarea name="verify_remark" rows="5" cols="40" ></textarea>
		</div>
	</div>
	<div class="module_border">
		<div class="l"></div>
		<div class="h">
			<input type="submit" value="ȷ�����" class="submit"/>
		</div>
	</div>
	</form>


<!--ͳ�� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="amount" ||  $this->magic_vars['_A']['query_type']=="amount_type" ||  $this->magic_vars['_A']['query_type']=="amount_apply" ||  $this->magic_vars['_A']['query_type']=="amount_log"): ?>
	<? $this->magic_include(array('file' => "borrow.amount.tpl", 'vars' => array('template_dir' => 'modules/borrow')));?>


<!--ͳ�� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="tongji"): ?>

<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
	  <?  if(!isset($this->magic_vars['_A']['account_tongji']) || $this->magic_vars['_A']['account_tongji']=='') $this->magic_vars['_A']['account_tongji'] = array();  $_from = $this->magic_vars['_A']['account_tongji']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr >
			<td width="*" class="main_td">��������</td>
			<td width="*" class="main_td"><? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?></td>
			<td width="" class="main_td">���</td>
		</tr>
		<?  if(!isset($this->magic_vars['item']) || $this->magic_vars['item']=='') $this->magic_vars['item'] = array();  $_from = $this->magic_vars['item']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['_key'] =>  $this->magic_vars['_item']):
?>
		<tr  class="tr2">
			<td ><? if (!isset($this->magic_vars['_item']['type_name'])) $this->magic_vars['_item']['type_name'] = ''; echo $this->magic_vars['_item']['type_name']; ?></td>
			<td ><? if (!isset($this->magic_vars['_item']['type'])) $this->magic_vars['_item']['type'] = ''; echo $this->magic_vars['_item']['type']; ?></td>
			<td >��<? if (!isset($this->magic_vars['_item']['num'])) $this->magic_vars['_item']['num'] = ''; echo $this->magic_vars['_item']['num']; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
	<? endforeach; endif; unset($_from); ?>
	</form>	
</table>
<!--ͳ�� ����-->
<? endif; ?>
