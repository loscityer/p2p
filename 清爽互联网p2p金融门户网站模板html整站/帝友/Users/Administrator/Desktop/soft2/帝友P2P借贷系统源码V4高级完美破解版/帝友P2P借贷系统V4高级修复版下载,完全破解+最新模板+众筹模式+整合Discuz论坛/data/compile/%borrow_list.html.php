<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<? $this->magic_vars['query_type']='GetLateList';$data = array('var'=>'loop','late_day'=>'31','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetLateList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['latevar']):
?>
		<? if (!isset($this->magic_vars['latevar']['username'])) $this->magic_vars['latevar']['username']='';if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username']=''; ;if (  $this->magic_vars['latevar']['username']== $this->magic_vars['_G']['user_result']['username']): ?><script>alert("��������δ�������ܽ��н�");location.href='/?user&q=code/borrow/repayment';</script><? endif; ?>
	<? endforeach; endif; unset($_from); ?>
<? unset($_magic_vars); ?>

 <? if (!isset($this->magic_vars['_G']['user_info']['flow_status'])) $this->magic_vars['_G']['user_info']['flow_status']='';if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $this->magic_vars['_G']['user_info']['flow_status']!=1 &&  $_REQUEST['type']=='flow'): ?>
 <script>alert("������������ת��֤�����ܷ�����ת��");location.href='/?user&q=code/approve/flow_status';</script>
<? endif; ?>   
<script>
	
	$(document).ready(function(){
		//$("#slm").css('display','none');
		$("#lend_time").css('display','');
		$("#rertunType").css('display','');
		$("[name='is_Seconds']").change(function() {
			var selectedvalue = $("[name='is_Seconds']:checked").val();
			//alert(selectedvalue);
			if (selectedvalue=="1") {
				//$("#slm").css('display','');
				$("#lend_time").css('display','none');
				$("#rertunType").css('display','none');
				$("#borrow_period").attr("value",1);
				$("#borrow_style").attr("value",0);
				$("#rel_borrow_style").val("0");
			}else{
				//$("#slm").css('display','none');
				$("#lend_time").css('display','');
				$("#rertunType").css('display','');
				$("#borrow_style").attr("disabled",false);
			}
		});
		
	});
	
	
	var user_id = '<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id'] = ''; echo $this->magic_vars['_G']['user_id']; ?>';
	var realname_status = '<? if (!isset($this->magic_vars['_G']['user_info']['realname_status'])) $this->magic_vars['_G']['user_info']['realname_status'] = '';$_tmp = $this->magic_vars['_G']['user_info']['realname_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>';
	var phone_status = '<? if (!isset($this->magic_vars['_G']['user_info']['phone_status'])) $this->magic_vars['_G']['user_info']['phone_status'] = '';$_tmp = $this->magic_vars['_G']['user_info']['phone_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>';
	var edu_status = '<? if (!isset($this->magic_vars['_G']['user_info']['education_status'])) $this->magic_vars['_G']['user_info']['education_status'] = '';$_tmp = $this->magic_vars['_G']['user_info']['education_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>';
	var video_status = '<? if (!isset($this->magic_vars['_G']['user_info']['video_status'])) $this->magic_vars['_G']['user_info']['video_status'] = '';$_tmp = $this->magic_vars['_G']['user_info']['video_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>';
	<? $data = array('user_id'=>$this->magic_vars['_G']['user_id'],'var'=>'user_att');  include_once(ROOT_PATH.'modules/attestations/attestations.class.php');$this->magic_vars['user_att'] = attestationsClass::GetAttestationsUserCredit($data);if(!is_array($this->magic_vars['user_att'])){ $this->magic_vars['user_att']=array();}?>
	var hukou_num = '<? if (!isset($this->magic_vars['user_att']['hukou']['status'])) $this->magic_vars['user_att']['hukou']['status'] = ''; echo $this->magic_vars['user_att']['hukou']['status']; ?>';
	var hukou_name = '<? if (!isset($this->magic_vars['user_att']['hukou']['name'])) $this->magic_vars['user_att']['hukou']['name'] = ''; echo $this->magic_vars['user_att']['hukou']['name']; ?>';
	var work_num = '<? if (!isset($this->magic_vars['user_att']['work']['status'])) $this->magic_vars['user_att']['work']['status'] = ''; echo $this->magic_vars['user_att']['work']['status']; ?>';
	var work_name = '<? if (!isset($this->magic_vars['user_att']['work']['name'])) $this->magic_vars['user_att']['work']['name'] = ''; echo $this->magic_vars['user_att']['work']['name']; ?>';
	var income_num = '<? if (!isset($this->magic_vars['user_att']['income']['status'])) $this->magic_vars['user_att']['income']['status'] = ''; echo $this->magic_vars['user_att']['income']['status']; ?>';
	var income_name = '<? if (!isset($this->magic_vars['user_att']['income']['name'])) $this->magic_vars['user_att']['income']['name'] = ''; echo $this->magic_vars['user_att']['income']['name']; ?>';
	var bank_six_num = '<? if (!isset($this->magic_vars['user_att']['bank_six']['status'])) $this->magic_vars['user_att']['bank_six']['status'] = ''; echo $this->magic_vars['user_att']['bank_six']['status']; ?>';
	var bank_six_name = '<? if (!isset($this->magic_vars['user_att']['bank_six']['name'])) $this->magic_vars['user_att']['bank_six']['name'] = ''; echo $this->magic_vars['user_att']['bank_six']['name']; ?>';
	var bank_report_num = '<? if (!isset($this->magic_vars['user_att']['bank_report']['status'])) $this->magic_vars['user_att']['bank_report']['status'] = ''; echo $this->magic_vars['user_att']['bank_report']['status']; ?>';
	var bank_report_name = '<? if (!isset($this->magic_vars['user_att']['bank_report']['name'])) $this->magic_vars['user_att']['bank_report']['name'] = ''; echo $this->magic_vars['user_att']['bank_report']['name']; ?>';
	
	var live_num = '<? if (!isset($this->magic_vars['user_att']['live']['status'])) $this->magic_vars['user_att']['live']['status'] = ''; echo $this->magic_vars['user_att']['live']['status']; ?>';
	var live_name = '<? if (!isset($this->magic_vars['user_att']['live']['name'])) $this->magic_vars['user_att']['live']['name'] = ''; echo $this->magic_vars['user_att']['live']['name']; ?>';
	<? unset($_magic_vars);unset($data); ?>
	
	
	if (user_id==""){
		alert("�㻹û�е�¼�����ȵ�¼");
		location.href='/?user&q=action/login';
	}else if(realname_status=="0"){
		alert("�㻹δ����ʵ����֤");
		location.href='/borrow_app/index.html';
	}else if(phone_status=="0"){
		alert("��δ�����ֻ���֤");
		location.href='/borrow_phone/index.html';
	}else if(hukou_num=="0" || hukou_num==""){
		alert("����δͨ��"+hukou_name);
		location.href='/borrow_att/index.html';
	}else if(work_num=="0" || work_num==""){
		alert("����δͨ��"+work_name);
		location.href='/borrow_att/index.html';
	}else if(income_num=="0" || income_num==""){
		alert("����δͨ��"+income_name);
		location.href='/borrow_att/index.html';
	}else if(bank_six_num=="0" || bank_six_num==""){
		alert("����δͨ��"+bank_six_name);
		location.href='/borrow_att/index.html';
	}else if(bank_report_num=="0" || bank_report_num==""){
		alert("����δͨ��"+bank_report_name);
		location.href='/borrow_att/index.html';
	}else if(live_num=="0" || live_num==""){
		alert("����δͨ��"+live_name);
		location.href='/borrow_att/index.html';
	}
</script>

<form name="form1" method="post" action="/index.php?user&q=code/borrow/add" enctype="multipart/form-data" onSubmit="return check_form();" id="form1">
<div class="clearfix con_box">

    <div>
        <div class="con_bor">
        	<div class="pos_bor"><span><a href="#">��Ҫ���</a> > ��������</span></div>
            <div class="con2">
                <div style="width:920px; margin:20px auto">
              
                    <div style="margin:20px 0">
                        <div style="padding:0px 80px">
                        	<? $data = array('user_id'=>$this->magic_vars['_G']['user_id'],'var'=>'user_amount');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['user_amount'] = borrowClass::GetAmountUsers($data);if(!is_array($this->magic_vars['user_amount'])){ $this->magic_vars['user_amount']=array();}?>
                            <div class="warning1">
                                <? $data = array('user_id'=>$this->magic_vars['_G']['user_id'],'var'=>'Cvar');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['Cvar'] = borrowClass::GetBorrowCredit($data);if(!is_array($this->magic_vars['Cvar'])){ $this->magic_vars['Cvar']=array();}?>
                                <b>�ҵ����û��֣�<span style="font-size:14px; color:#FF0000"><? if (!isset($this->magic_vars['Cvar']['approve_credit'])) $this->magic_vars['Cvar']['approve_credit'] = ''; echo $this->magic_vars['Cvar']['approve_credit']; ?>��<? if (!isset($this->magic_vars['Cvar']['approve_credit'])) $this->magic_vars['Cvar']['approve_credit'] = '';$_tmp = $this->magic_vars['Cvar']['approve_credit'];$_tmp = $this->magic_modifier("credit",$_tmp,"credit");echo $_tmp;unset($_tmp); ?>��</span></b>
                                <? unset($_magic_vars);unset($data); ?>
                                ͨ���ϴ���ʵ������֤���ϣ�������������õȼ��Ͷ�ȡ�<br><b>�ҵ����ö�ȣ�<span style="font-size:14px; color:#FF0000"><? if (!isset($this->magic_vars['user_amount']['borrow_amount'])) $this->magic_vars['user_amount']['borrow_amount']=''; ;if (  $this->magic_vars['user_amount']['borrow_amount']< 0): ?>0<? else: ?><? if (!isset($this->magic_vars['user_amount']['borrow_amount'])) $this->magic_vars['user_amount']['borrow_amount'] = ''; echo $this->magic_vars['user_amount']['borrow_amount']; ?><? endif; ?>( ���ö�ȣ�<? if (!isset($this->magic_vars['user_amount']['borrow_amount_use'])) $this->magic_vars['user_amount']['borrow_amount_use']=''; ;if (  $this->magic_vars['user_amount']['borrow_amount_use']< 0): ?>0<? else: ?><? if (!isset($this->magic_vars['user_amount']['borrow_amount_use'])) $this->magic_vars['user_amount']['borrow_amount_use'] = ''; echo $this->magic_vars['user_amount']['borrow_amount_use']; ?><? endif; ?> , <a href="/?user&q=code/borrow/amount" style="font-size:14px; color:#0033FF">������</a>)</span></b>
                            </div>
                            <div class="t20">
                                <table width="100%"  border="0" cellpadding="0" cellspacing="0" class="jk_tab">
                                    <tr>
                                        <td width="27%" align="right"><span></span>������ͣ�</td>
                                        <td width="73%" align="left" id="borrow_type_td">
                                            <input type="radio" name="borrow_type" value="1" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']='';if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (   $_REQUEST['type']=='credit' ||  $_REQUEST['type']==""): ?> checked="checked"<? endif; ?> />���ý��
                                            <? $data = array('var'=>'Vvar','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['Vvar'] = usersClass::GetUsersVip($data);if(!is_array($this->magic_vars['Vvar'])){ $this->magic_vars['Vvar']=array();}?>
                                            <? if (!isset($this->magic_vars['Vvar']['status'])) $this->magic_vars['Vvar']['status']=''; ;if (  $this->magic_vars['Vvar']['status']==1): ?>
                                            <input type="radio" name="borrow_type" value="2" onClick="alert('�ñ���ͬ��վǩ������Э�飬������վ��ϵ')"  <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (   $_REQUEST['type']=='vouch'): ?> checked="checked"<? endif; ?>/>�������<input type="radio" name="borrow_type" value="3" onClick="alert('�ñ���ͬ��վǩ������Э�飬������վ��ϵ')" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (   $_REQUEST['type']=='fast'): ?> checked="checked"<? endif; ?>/>��Ѻ���
                                            <? else: ?>
                                            <input type="radio" name="borrow_type" value="2" onClick="alert('�ñ���ͬ��վǩ������Э�飬������վ��ϵ')" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (   $_REQUEST['type']=='vouch'): ?> checked="checked"<? endif; ?>/>�������<input type="radio" name="borrow_type" value="3" onClick="alert('�ñ���ͬ��վǩ������Э�飬������վ��ϵ')" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (   $_REQUEST['type']=='fast'): ?> checked="checked"<? endif; ?>/>��Ѻ���
                                            <input type="hidden" id="no" name="no" value="1">
                                            <? endif; ?>
                                            <? unset($_magic_vars);unset($data); ?>
											
                                            <input type="radio" name="borrow_type" value="4" <? if (!isset($this->magic_vars['_G']['user_info']['flow_status'])) $this->magic_vars['_G']['user_info']['flow_status']=''; ;if (  $this->magic_vars['_G']['user_info']['flow_status']!=1): ?>onClick="alert('������������ת��֤�����ܷ�����ת��')"<? endif; ?> <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (   $_REQUEST['type']=='flow'): ?> checked="checked"<? endif; ?>/>��ת���
                                             <input type="radio" name="borrow_type" value="5" onClick="alert('�ɷ������ʲ���80%�Ľ��Ľ���')" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (   $_REQUEST['type']=='jin'): ?> checked="checked"<? endif; ?>/>��ֵ���
                                            <!--��ת�� 2-->
                                        
                                        </td>
                                    </tr>
									
									 <tr>  <td width="27%" align="right"><span></span>�Ƿ���꣺</td>  <td width="73%" align="left" >        <input  type="checkbox" name="isDXB" value="1" <? if (!isset($this->magic_vars['var']['isDXB'])) $this->magic_vars['var']['isDXB']=''; ;if (  $this->magic_vars['var']['isDXB']==1): ?> checked="checked"<? endif; ?> onclick="checkDXB()"/> �����������ض����û���������Ͷ�꣬���ú�����󣬸��߶Է��˱�����뼴��.</td></tr>
									 <tr>  <td width="27%" align="right"><span></span>��������룺</td>  <td width="73%" align="left" >          <input <? if (!isset($this->magic_vars['var']['isDXB'])) $this->magic_vars['var']['isDXB']=''; ;if (  $this->magic_vars['var']['isDXB']!=1): ?> disabled="disabled"<? endif; ?> type="text" name="pwd" value="<? if (!isset($this->magic_vars['var']['pwd'])) $this->magic_vars['var']['pwd'] = ''; echo $this->magic_vars['var']['pwd']; ?>" id="pwd"> �����������ض����û���������Ͷ�꣬���ú�����󣬸��߶Է��˱�����뼴��.</td></tr>
									
                                    <tr>  <td width="27%" align="right"><span></span>�Ƿ���꣺</td>  <td width="73%" align="left" >        <input  type="checkbox" name="is_Seconds" value="1" />���</td></tr>
                                	<? $data = array('user_id'=>$this->magic_vars['_G']['user_id'],'var'=>'Uvar');  include_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['Uvar'] = usersClass::GetUsers($data);if(!is_array($this->magic_vars['Uvar'])){ $this->magic_vars['Uvar']=array();}?>
                                    <tr id="slm" >
                                    	<td width="27%" align="right">Ͷ������޶</td>
                                    	<td width="73%" align="left">
                                            <select name="second_limit_money">
											    <option value="0">������</option>
                                                <option value="50">50Ԫ</option>
												<option value="100">100Ԫ</option>
												<option value="500">500Ԫ</option>
                                                <option value="1000">1000Ԫ</option>
                                                <option value="1500">1500Ԫ</option>
                                                <option value="2000">2000Ԫ</option>
                                                <option value="3000">3000Ԫ</option>
                                                <option value="4000">4000Ԫ</option>
                                                <option value="5000">5000Ԫ</option>
                                                <option value="6000">6000Ԫ</option>
                                                <option value="7000">7000Ԫ</option>
                                                <option value="8000">8000Ԫ</option>
                                                <option value="9000">9000Ԫ</option>
                                                <option value="10000">10000Ԫ</option>
                                                <option value="20000">20000Ԫ</option>
                                            </select>
                                    	</td>
                                    </tr>
                                	<? unset($_magic_vars);unset($data); ?>
                                    <tr>
                                        <td width="27%" align="right">�����⣺</td>
                                        <td width="73%" align="left"><input type="text" name="name" style="width:300px; border:#BFBFBF solid 1px; height:18px;"/></td>
                                    </tr>
									<tr>
                                        <td width="27%" align="right">������</td>
                                        <td width="73%" align="left"><? $result = $this->magic_vars['_G']['_linkages']['borrow_object']; echo "<select name='borrow_object' id=borrow_object  style=''>"; if ($result!=''): foreach ($result as $key => $val): echo "<option value='{$val['value']}' >{$val['name']}</option>";endforeach;echo "</select>";endif; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="27%" align="right">�����;��</td>
                                        <td width="73%" align="left"><? $result = $this->magic_vars['_G']['_linkages']['borrow_use']; echo "<select name='borrow_use' id=borrow_use  style=''>"; if ($result!=''): foreach ($result as $key => $val): echo "<option value='{$val['value']}' >{$val['name']}</option>";endforeach;echo "</select>";endif; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="27%" align="right">����</td>
                                        <td width="73%" align="left"><input type="text" name="account" style="width:100px; border:#BFBFBF solid 1px; height:18px;"/> Ԫ���������Ϊ100�ı����� </td>
                                    </tr>
                                    <tr id="lend_time">
                                        <td width="27%" align="right">������ޣ�</td>
                                        <td width="73%" align="left"><? $result = $this->magic_vars['_G']['_linkages']['borrow_period']; echo "<select name='borrow_period' id=borrow_period  style=''>"; if ($result!=''): foreach ($result as $key => $val): echo "<option value='{$val['value']}' >{$val['name']}</option>";endforeach;echo "</select>";endif; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="27%" align="right" valign="top">�껯���棺</td>
                                        <td width="73%" align="left"><input type="text" name="borrow_apr" style="width:50px; border:#BFBFBF solid 1px; height:18px;"/>
                                    % �����ʾ�ȷ��С�����һλ����Χ<? if (!isset($this->magic_vars['_G']['system']['con_borrow_apr_highest'])) $this->magic_vars['_G']['system']['con_borrow_apr_highest'] = ''; echo $this->magic_vars['_G']['system']['con_borrow_apr_highest']; ?>%���ڣ� <br />
                                    ���������������Ľ������ȷ����һ����˵�������Խ�ߣ�����ٶ�Խ�졣 </td>
                                    </tr>
                                     <tr id="valid_time">
                                        <td width="24%" align="right">��Чʱ�䣺</td>
                                        <td width="76%" align="left"><? $result = $this->magic_vars['_G']['_linkages']['borrow_valid_time']; echo "<select name='borrow_valid_time' id=borrow_valid_time  style=''>"; if ($result!=''): foreach ($result as $key => $val): echo "<option value='{$val['value']}' >{$val['name']}</option>";endforeach;echo "</select>";endif; ?></td>
                                    </tr>
                                    <tr id="rertunType">
                                        <td width="27%" align="right">���ʽ��</td>
                                        <td width="73%" align="left">
										<? $result = $this->magic_vars['_G']['_linkages']['borrow_style']; echo "<select name='borrow_style' id=borrow_style  style=''>"; if ($result!=''): foreach ($result as $key => $val): echo "<option value='{$val['value']}' >{$val['name']}</option>";endforeach;echo "</select>";endif; ?>
                                            
                                           
                                        </td>
                                    </tr>
									<tr >
									  <td width="27%" align="right">Ͷ�꽱����</td>
                                        <td width="73%" align="left"><input type="radio" name="award_status" id="award_status" value="0"  onclick="change_j(0)" checked="checked">�����ý���
										</td>
									
									</tr>
									<tr  >
									  <td width="27%" align="right"></td>
                                        <td width="73%" align="left">
									<input type="radio" name="award_status" id="award_status" value="1" onclick="change_j(1)"/>���̶�����̯������<input type="text" id="award_account" name="award_account" value="" size="5"  disabled="disabled"/> Ԫ

										</td>
									
									</tr>
									
									<tr  >
									  <td width="27%" align="right" nowrap="nowrap"></td>
                                        <td width="73%" align="left">
										<input type="radio" name="award_status" id="award_status" value="2"  onclick="change_j(2)"/>��Ͷ�������������<input type="text" id="award_scale" name="award_scale" value="" size="5"  disabled="disabled"/> % 
										</td>
									
									</tr>
			
                                    <tr>
                                        <td width="27%" align="right">���������</td>
                                        <td width="73%" align="left">
                                        	<textarea id="borrow_contents" name="borrow_contents" style="width:600px; height:300px;">�������:</textarea>
                                        	<script>
												var up_url = "/?user&q=plugins&";
												
												$('#borrow_contents').xheditor({skin:'o2007blue',upImgUrl:up_url+"ac=html&p=xheditor&immediate=1",upImgExt:"jpg,jpeg,gif,png"});
												
                                            </script>
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="27%" align="right">��֤�룺</td>
                                        <td width="73%" align="left"><input name="valicode" id="valicode" type="text" class="in_text" style="width:50px;"/> <img src="/?plugins&q=imgcode" id="valicode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" /></td>
                                    </tr>
                                    <? if (!isset($_REQUEST['group_id'])) $_REQUEST['group_id']=''; ;if (  $_REQUEST['group_id']!=""): ?>
                                    <input type="hidden" name="group_id" value="<? if (!isset($_REQUEST['group_id'])) $_REQUEST['group_id'] = ''; echo $_REQUEST['group_id']; ?>" />
                                    <input type="hidden" name="group_status" value="1" />
                                    <? endif; ?>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><input type="submit" name="Submit" value="���沢�ύ" class="btn1" /></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</form>
<script>
<? $data = array('var'=>'var','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/account/account.class.php');$this->magic_vars['var'] = accountClass::GetOne($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
    var jinMoney = accMul(<? if (!isset($this->magic_vars['var']['total'])) $this->magic_vars['var']['total'] = '';$_tmp = $this->magic_vars['var']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,0.8);
	     jinMoney=Math.floor(jinMoney);
<? unset($_magic_vars);unset($data); ?>
	<? $data = array('user_id'=>$this->magic_vars['_G']['user_id'],'var'=>'var');  include_once(ROOT_PATH.'modules/rating/rating.class.php');$this->magic_vars['var'] = ratingClass::GetCompanyOne($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
	var license_num='<? if (!isset($this->magic_vars['var']['license_num'])) $this->magic_vars['var']['license_num'] = ''; echo $this->magic_vars['var']['license_num']; ?>';
	<? unset($_magic_vars);unset($data); ?>
	<? $data = array('user_id'=>$this->magic_vars['_G']['user_id'],'var'=>'var');  include_once(ROOT_PATH.'modules/rating/rating.class.php');$this->magic_vars['var'] = ratingClass::GetInfoOne($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
	var phone_num='<? if (!isset($this->magic_vars['var']['phone_num'])) $this->magic_vars['var']['phone_num'] = ''; echo $this->magic_vars['var']['phone_num']; ?>';
	<? unset($_magic_vars);unset($data); ?>
	
	var site_nid = '<? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid'] = ''; echo $this->magic_vars['_G']['site_result']['nid']; ?>';
	var use_amount = <? if (!isset($this->magic_vars['user_amount']['borrow_amount_use'])) $this->magic_vars['user_amount']['borrow_amount_use'] = ''; echo $this->magic_vars['user_amount']['borrow_amount_use']; ?>;
	var max_fax =<? if (!isset($this->magic_vars['_G']['system']['con_max_fee'])) $this->magic_vars['_G']['system']['con_max_fee'] = '';$_tmp = $this->magic_vars['_G']['system']['con_max_fee'];$_tmp = $this->magic_modifier("default",$_tmp,"20");echo $_tmp;unset($_tmp); ?>;
	var max_apr =<? if (!isset($this->magic_vars['_G']['system']['con_borrow_apr_highest'])) $this->magic_vars['_G']['system']['con_borrow_apr_highest'] = '';$_tmp = $this->magic_vars['_G']['system']['con_borrow_apr_highest'];$_tmp = $this->magic_modifier("default",$_tmp,"22.18");echo $_tmp;unset($_tmp); ?>;
	var min_apr =<? if (!isset($this->magic_vars['_G']['system']['con_borrow_apr_lowest'])) $this->magic_vars['_G']['system']['con_borrow_apr_lowest'] = '';$_tmp = $this->magic_vars['_G']['system']['con_borrow_apr_lowest'];$_tmp = $this->magic_modifier("default",$_tmp,"3");echo $_tmp;unset($_tmp); ?>;
	var max_6apr =<? if (!isset($this->magic_vars['_G']['system']['con_bank_apr_6month'])) $this->magic_vars['_G']['system']['con_bank_apr_6month'] = '';$_tmp = $this->magic_vars['_G']['system']['con_bank_apr_6month'];$_tmp = $this->magic_modifier("default",$_tmp,"23.24");echo $_tmp;unset($_tmp); ?>;
	var max_12apr =<? if (!isset($this->magic_vars['_G']['system']['con_bank_apr_12month'])) $this->magic_vars['_G']['system']['con_bank_apr_12month'] = '';$_tmp = $this->magic_vars['_G']['system']['con_bank_apr_12month'];$_tmp = $this->magic_modifier("default",$_tmp,"25.24");echo $_tmp;unset($_tmp); ?>;
	var max_account =<? if (!isset($this->magic_vars['_G']['system']['con_borrow_maxaccount'])) $this->magic_vars['_G']['system']['con_borrow_maxaccount'] = '';$_tmp = $this->magic_vars['_G']['system']['con_borrow_maxaccount'];$_tmp = $this->magic_modifier("default",$_tmp,"2000000");echo $_tmp;unset($_tmp); ?>;
	
	
	
	function accMul(arg1,arg2)
{
var m=0,s1=arg1.toString(),s2=arg2.toString();
try{m+=s1.split(".")[1].length}catch(e){}
try{m+=s2.split(".")[1].length}catch(e){}
return Number(s1.replace(".",""))*Number(s2.replace(".",""))/Math.pow(10,m)
}


	function checkDXB(){
    var frm = document.forms['form1'];
    if(frm.elements['isDXB'].checked){
        frm.elements['pwd'].disabled=false;
    }else{
        frm.elements['pwd'].disabled=true;
        frm.elements['pwd'].value="";
    }
}

	function check_form(){
	 
		var frm = document.forms['form1'];
		
		var borrow_object = frm.elements['borrow_object'].value;
		if(license_num=='' && borrow_object==1)
		{
		alert('���빫˾�������д��ҵ��Ϣ');
		location.href='/?user&q=code/rating/company';
		 return false;
		}
		if(phone_num=='' && borrow_object==0)
		{
		alert('������˽������д������Ϣ');
		location.href='/?user&q=code/rating/basic';
		 return false;
		}
		var account = frm.elements['account'].value;
		
		var borrow_type = frm.elements['borrow_type'].value;
		var title = frm.elements['name'].value;
		var style = frm.elements['borrow_style'].value;
		var content = frm.elements['borrow_contents'].value;
		
		var time_limit = frm.elements['borrow_period'].value;
		var apr = frm.elements['borrow_apr'].value;
		 
		var valicode = frm.elements['valicode'].value;
		if(typeof(frm.elements['no'])!= "undefined") 
          { 
		var no = frm.elements['no'].value;
		}else{
		var no = 0;
		}
		var award_status = get_award_status_value();
		var award_account = frm.elements['award_account'].value;
	    var award_scale = frm.elements['award_scale'].value;
		var errorMsg = '';
		if (account.length == 0 ) {
			errorMsg += '- �ܽ���Ϊ��' + '\n';
		}
		if (account>max_account) {
			errorMsg += '- �����ܴ���'+max_account+'' + '\n';
		}
		if (account%100!=0) {
			errorMsg += '- ��������Ϊ100�ı���' + '\n';
		}
		
		
		if(borrow_type==5){
		    if (account>jinMoney) {
			errorMsg += '- ������ʲ�Ϊ'+jinMoney+',�벻Ҫ���������ʲ�\n';
		   }
		}else{
		  if (account>use_amount) {
			errorMsg += '- ��Ŀ��ö��Ϊ'+use_amount+',�벻Ҫ�����˿��ö��\n';
		   }
		}
		
		if (apr.length == 0 ) {
			errorMsg += '- ���ʲ���Ϊ��' + '\n';
		}
		if (no == 1 && (borrow_type==2 || borrow_type==3 || borrow_type==5)) {
			errorMsg += '- �㲻��VIP�������������͵�����;�ֵ�ꡣ' + '\n';
		}
		if (apr<min_apr ||apr>max_apr) {
			errorMsg += '- ���ʲ��ܴ���'+max_apr+'%��С��' +min_apr+ '\n';
		}
		if (award_status==1 && (award_account=="" || award_account<5 || award_account>account*0.02)) {
		errorMsg += '- �̶�����̯�������ܵ���5Ԫ,���ܸ����ܱ�Ľ���2%' + '\n';
	  }
	  if (award_status==2 && (award_scale =="" || award_scale<0.1 || award_scale>6)) {
		errorMsg += '- Ͷ�����������0.1%~6% ' + '\n';
	  }
		if (title.length == 0 ) {
			errorMsg += '- ���ⲻ��Ϊ��' + '\n';
		}
		//if (content.length == 0 ) {
		//	errorMsg += '- �����������Ϊ��' + '\n';
		//}
		if (valicode.length == 0 ) {
			errorMsg += '- ��֤�벻��Ϊ��' + '\n';
		}
		if (errorMsg.length > 0){
			alert(errorMsg); return false;
		} else{  
			return true;
		}
	}
	
	
	function get_award_status_value()
{
    var form1 = document.forms['form1'];
    
    for (i=0; i<form1.award_status.length; i++)    {
        if (form1.award_status[i].checked)
        {
           return form1.award_status[i].value;
        }
    }
}


	function change_j(type){
	var frm = document.forms['form1'];

	if (type==0){
                jQuery("#award_account").attr("disabled",true); 
		jQuery("#award_scale").attr("disabled",true); 
                jQuery("#is_false").attr("disabled",true); 
                
                //frm.elements['award_account'].disabled = "disabled";
		//frm.elements['award_scale'].disabled = "disabled";
		//frm.elements['is_false'].disabled = "disabled";
	}else if (type==1){
                jQuery("#award_account").attr("disabled",false); 
		jQuery("#award_scale").attr("disabled",true); 
                jQuery("#is_false").attr("disabled",false); 
                
		//frm.elements['award_account'].disabled = "";
		//frm.elements['award_scale'].disabled = "disabled";
		//frm.elements['is_false'].disabled = "";
	}else if (type==2){
            
                jQuery("#award_account").attr("disabled",true); 
		jQuery("#award_scale").attr("disabled",false); 
                jQuery("#is_false").attr("disabled",false); 
                
		//frm.elements['award_account'].disabled = "disabled";
		//frm.elements['award_scale'].disabled = "";
		//frm.elements['is_false'].disabled = "";
	}
}	
</script>

<? unset($_magic_vars);unset($data); ?>
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>