<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<? $this->magic_vars['query_type']='GetLateList';$data = array('var'=>'loop','late_day'=>'31','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetLateList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['latevar']):
?>
		<? if (!isset($this->magic_vars['latevar']['username'])) $this->magic_vars['latevar']['username']='';if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username']=''; ;if (  $this->magic_vars['latevar']['username']== $this->magic_vars['_G']['user_result']['username']): ?><script>alert("您有逾期未还，不能进行借款。");location.href='/?user&q=code/borrow/repayment';</script><? endif; ?>
	<? endforeach; endif; unset($_from); ?>
<? unset($_magic_vars); ?>

 <? if (!isset($this->magic_vars['_G']['user_info']['flow_status'])) $this->magic_vars['_G']['user_info']['flow_status']='';if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $this->magic_vars['_G']['user_info']['flow_status']!=1 &&  $_REQUEST['type']=='flow'): ?>
 <script>alert("必须先申请流转认证，才能发布流转标");location.href='/?user&q=code/approve/flow_status';</script>
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
		alert("你还没有登录，请先登录");
		location.href='/?user&q=action/login';
	}else if(realname_status=="0"){
		alert("你还未进行实名认证");
		location.href='/borrow_app/index.html';
	}else if(phone_status=="0"){
		alert("还未进行手机认证");
		location.href='/borrow_phone/index.html';
	}else if(hukou_num=="0" || hukou_num==""){
		alert("您还未通过"+hukou_name);
		location.href='/borrow_att/index.html';
	}else if(work_num=="0" || work_num==""){
		alert("您还未通过"+work_name);
		location.href='/borrow_att/index.html';
	}else if(income_num=="0" || income_num==""){
		alert("您还未通过"+income_name);
		location.href='/borrow_att/index.html';
	}else if(bank_six_num=="0" || bank_six_num==""){
		alert("您还未通过"+bank_six_name);
		location.href='/borrow_att/index.html';
	}else if(bank_report_num=="0" || bank_report_num==""){
		alert("您还未通过"+bank_report_name);
		location.href='/borrow_att/index.html';
	}else if(live_num=="0" || live_num==""){
		alert("您还未通过"+live_name);
		location.href='/borrow_att/index.html';
	}
</script>

<form name="form1" method="post" action="/index.php?user&q=code/borrow/add" enctype="multipart/form-data" onSubmit="return check_form();" id="form1">
<div class="clearfix con_box">

    <div>
        <div class="con_bor">
        	<div class="pos_bor"><span><a href="#">我要借款</a> > 发布借款标</span></div>
            <div class="con2">
                <div style="width:920px; margin:20px auto">
              
                    <div style="margin:20px 0">
                        <div style="padding:0px 80px">
                        	<? $data = array('user_id'=>$this->magic_vars['_G']['user_id'],'var'=>'user_amount');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['user_amount'] = borrowClass::GetAmountUsers($data);if(!is_array($this->magic_vars['user_amount'])){ $this->magic_vars['user_amount']=array();}?>
                            <div class="warning1">
                                <? $data = array('user_id'=>$this->magic_vars['_G']['user_id'],'var'=>'Cvar');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['Cvar'] = borrowClass::GetBorrowCredit($data);if(!is_array($this->magic_vars['Cvar'])){ $this->magic_vars['Cvar']=array();}?>
                                <b>我的信用积分：<span style="font-size:14px; color:#FF0000"><? if (!isset($this->magic_vars['Cvar']['approve_credit'])) $this->magic_vars['Cvar']['approve_credit'] = ''; echo $this->magic_vars['Cvar']['approve_credit']; ?>（<? if (!isset($this->magic_vars['Cvar']['approve_credit'])) $this->magic_vars['Cvar']['approve_credit'] = '';$_tmp = $this->magic_vars['Cvar']['approve_credit'];$_tmp = $this->magic_modifier("credit",$_tmp,"credit");echo $_tmp;unset($_tmp); ?>）</span></b>
                                <? unset($_magic_vars);unset($data); ?>
                                通过上传真实信用认证资料，可提高您的信用等级和额度。<br><b>我的信用额度：<span style="font-size:14px; color:#FF0000"><? if (!isset($this->magic_vars['user_amount']['borrow_amount'])) $this->magic_vars['user_amount']['borrow_amount']=''; ;if (  $this->magic_vars['user_amount']['borrow_amount']< 0): ?>0<? else: ?><? if (!isset($this->magic_vars['user_amount']['borrow_amount'])) $this->magic_vars['user_amount']['borrow_amount'] = ''; echo $this->magic_vars['user_amount']['borrow_amount']; ?><? endif; ?>( 可用额度：<? if (!isset($this->magic_vars['user_amount']['borrow_amount_use'])) $this->magic_vars['user_amount']['borrow_amount_use']=''; ;if (  $this->magic_vars['user_amount']['borrow_amount_use']< 0): ?>0<? else: ?><? if (!isset($this->magic_vars['user_amount']['borrow_amount_use'])) $this->magic_vars['user_amount']['borrow_amount_use'] = ''; echo $this->magic_vars['user_amount']['borrow_amount_use']; ?><? endif; ?> , <a href="/?user&q=code/borrow/amount" style="font-size:14px; color:#0033FF">申请额度</a>)</span></b>
                            </div>
                            <div class="t20">
                                <table width="100%"  border="0" cellpadding="0" cellspacing="0" class="jk_tab">
                                    <tr>
                                        <td width="27%" align="right"><span></span>借款类型：</td>
                                        <td width="73%" align="left" id="borrow_type_td">
                                            <input type="radio" name="borrow_type" value="1" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']='';if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (   $_REQUEST['type']=='credit' ||  $_REQUEST['type']==""): ?> checked="checked"<? endif; ?> />信用借款
                                            <? $data = array('var'=>'Vvar','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['Vvar'] = usersClass::GetUsersVip($data);if(!is_array($this->magic_vars['Vvar'])){ $this->magic_vars['Vvar']=array();}?>
                                            <? if (!isset($this->magic_vars['Vvar']['status'])) $this->magic_vars['Vvar']['status']=''; ;if (  $this->magic_vars['Vvar']['status']==1): ?>
                                            <input type="radio" name="borrow_type" value="2" onClick="alert('该标需同网站签署线下协议，请与网站联系')"  <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (   $_REQUEST['type']=='vouch'): ?> checked="checked"<? endif; ?>/>担保借款<input type="radio" name="borrow_type" value="3" onClick="alert('该标需同网站签署线下协议，请与网站联系')" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (   $_REQUEST['type']=='fast'): ?> checked="checked"<? endif; ?>/>抵押借款
                                            <? else: ?>
                                            <input type="radio" name="borrow_type" value="2" onClick="alert('该标需同网站签署线下协议，请与网站联系')" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (   $_REQUEST['type']=='vouch'): ?> checked="checked"<? endif; ?>/>担保借款<input type="radio" name="borrow_type" value="3" onClick="alert('该标需同网站签署线下协议，请与网站联系')" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (   $_REQUEST['type']=='fast'): ?> checked="checked"<? endif; ?>/>抵押借款
                                            <input type="hidden" id="no" name="no" value="1">
                                            <? endif; ?>
                                            <? unset($_magic_vars);unset($data); ?>
											
                                            <input type="radio" name="borrow_type" value="4" <? if (!isset($this->magic_vars['_G']['user_info']['flow_status'])) $this->magic_vars['_G']['user_info']['flow_status']=''; ;if (  $this->magic_vars['_G']['user_info']['flow_status']!=1): ?>onClick="alert('必须先申请流转认证，才能发布流转标')"<? endif; ?> <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (   $_REQUEST['type']=='flow'): ?> checked="checked"<? endif; ?>/>流转借款
                                             <input type="radio" name="borrow_type" value="5" onClick="alert('可发布总资产的80%的金额的借款标')" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (   $_REQUEST['type']=='jin'): ?> checked="checked"<? endif; ?>/>净值借款
                                            <!--流转标 2-->
                                        
                                        </td>
                                    </tr>
									
									 <tr>  <td width="27%" align="right"><span></span>是否定向标：</td>  <td width="73%" align="left" >        <input  type="checkbox" name="isDXB" value="1" <? if (!isset($this->magic_vars['var']['isDXB'])) $this->magic_vars['var']['isDXB']=''; ;if (  $this->magic_vars['var']['isDXB']==1): ?> checked="checked"<? endif; ?> onclick="checkDXB()"/> 定向标可邀请特定的用户或朋友来投标，设置好密码后，告诉对方此标的密码即可.</td></tr>
									 <tr>  <td width="27%" align="right"><span></span>定向标密码：</td>  <td width="73%" align="left" >          <input <? if (!isset($this->magic_vars['var']['isDXB'])) $this->magic_vars['var']['isDXB']=''; ;if (  $this->magic_vars['var']['isDXB']!=1): ?> disabled="disabled"<? endif; ?> type="text" name="pwd" value="<? if (!isset($this->magic_vars['var']['pwd'])) $this->magic_vars['var']['pwd'] = ''; echo $this->magic_vars['var']['pwd']; ?>" id="pwd"> 定向标可邀请特定的用户或朋友来投标，设置好密码后，告诉对方此标的密码即可.</td></tr>
									
                                    <tr>  <td width="27%" align="right"><span></span>是否秒标：</td>  <td width="73%" align="left" >        <input  type="checkbox" name="is_Seconds" value="1" />秒标</td></tr>
                                	<? $data = array('user_id'=>$this->magic_vars['_G']['user_id'],'var'=>'Uvar');  include_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['Uvar'] = usersClass::GetUsers($data);if(!is_array($this->magic_vars['Uvar'])){ $this->magic_vars['Uvar']=array();}?>
                                    <tr id="slm" >
                                    	<td width="27%" align="right">投标最高限额：</td>
                                    	<td width="73%" align="left">
                                            <select name="second_limit_money">
											    <option value="0">不限制</option>
                                                <option value="50">50元</option>
												<option value="100">100元</option>
												<option value="500">500元</option>
                                                <option value="1000">1000元</option>
                                                <option value="1500">1500元</option>
                                                <option value="2000">2000元</option>
                                                <option value="3000">3000元</option>
                                                <option value="4000">4000元</option>
                                                <option value="5000">5000元</option>
                                                <option value="6000">6000元</option>
                                                <option value="7000">7000元</option>
                                                <option value="8000">8000元</option>
                                                <option value="9000">9000元</option>
                                                <option value="10000">10000元</option>
                                                <option value="20000">20000元</option>
                                            </select>
                                    	</td>
                                    </tr>
                                	<? unset($_magic_vars);unset($data); ?>
                                    <tr>
                                        <td width="27%" align="right">借款标题：</td>
                                        <td width="73%" align="left"><input type="text" name="name" style="width:300px; border:#BFBFBF solid 1px; height:18px;"/></td>
                                    </tr>
									<tr>
                                        <td width="27%" align="right">借款对象：</td>
                                        <td width="73%" align="left"><? $result = $this->magic_vars['_G']['_linkages']['borrow_object']; echo "<select name='borrow_object' id=borrow_object  style=''>"; if ($result!=''): foreach ($result as $key => $val): echo "<option value='{$val['value']}' >{$val['name']}</option>";endforeach;echo "</select>";endif; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="27%" align="right">借款用途：</td>
                                        <td width="73%" align="left"><? $result = $this->magic_vars['_G']['_linkages']['borrow_use']; echo "<select name='borrow_use' id=borrow_use  style=''>"; if ($result!=''): foreach ($result as $key => $val): echo "<option value='{$val['value']}' >{$val['name']}</option>";endforeach;echo "</select>";endif; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="27%" align="right">借款金额：</td>
                                        <td width="73%" align="left"><input type="text" name="account" style="width:100px; border:#BFBFBF solid 1px; height:18px;"/> 元（借款金额需为100的倍数） </td>
                                    </tr>
                                    <tr id="lend_time">
                                        <td width="27%" align="right">借款期限：</td>
                                        <td width="73%" align="left"><? $result = $this->magic_vars['_G']['_linkages']['borrow_period']; echo "<select name='borrow_period' id=borrow_period  style=''>"; if ($result!=''): foreach ($result as $key => $val): echo "<option value='{$val['value']}' >{$val['name']}</option>";endforeach;echo "</select>";endif; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="27%" align="right" valign="top">年化收益：</td>
                                        <td width="73%" align="left"><input type="text" name="borrow_apr" style="width:50px; border:#BFBFBF solid 1px; height:18px;"/>
                                    % （利率精确到小数点后一位，范围<? if (!isset($this->magic_vars['_G']['system']['con_borrow_apr_highest'])) $this->magic_vars['_G']['system']['con_borrow_apr_highest'] = ''; echo $this->magic_vars['_G']['system']['con_borrow_apr_highest']; ?>%以内） <br />
                                    借款最低利率由您的借款期限确定，一般来说借款利率越高，借款速度越快。 </td>
                                    </tr>
                                     <tr id="valid_time">
                                        <td width="24%" align="right">有效时间：</td>
                                        <td width="76%" align="left"><? $result = $this->magic_vars['_G']['_linkages']['borrow_valid_time']; echo "<select name='borrow_valid_time' id=borrow_valid_time  style=''>"; if ($result!=''): foreach ($result as $key => $val): echo "<option value='{$val['value']}' >{$val['name']}</option>";endforeach;echo "</select>";endif; ?></td>
                                    </tr>
                                    <tr id="rertunType">
                                        <td width="27%" align="right">还款方式：</td>
                                        <td width="73%" align="left">
										<? $result = $this->magic_vars['_G']['_linkages']['borrow_style']; echo "<select name='borrow_style' id=borrow_style  style=''>"; if ($result!=''): foreach ($result as $key => $val): echo "<option value='{$val['value']}' >{$val['name']}</option>";endforeach;echo "</select>";endif; ?>
                                            
                                           
                                        </td>
                                    </tr>
									<tr >
									  <td width="27%" align="right">投标奖励：</td>
                                        <td width="73%" align="left"><input type="radio" name="award_status" id="award_status" value="0"  onclick="change_j(0)" checked="checked">不设置奖励
										</td>
									
									</tr>
									<tr  >
									  <td width="27%" align="right"></td>
                                        <td width="73%" align="left">
									<input type="radio" name="award_status" id="award_status" value="1" onclick="change_j(1)"/>按固定金额分摊奖励：<input type="text" id="award_account" name="award_account" value="" size="5"  disabled="disabled"/> 元

										</td>
									
									</tr>
									
									<tr  >
									  <td width="27%" align="right" nowrap="nowrap"></td>
                                        <td width="73%" align="left">
										<input type="radio" name="award_status" id="award_status" value="2"  onclick="change_j(2)"/>按投标金额比例奖励：<input type="text" id="award_scale" name="award_scale" value="" size="5"  disabled="disabled"/> % 
										</td>
									
									</tr>
			
                                    <tr>
                                        <td width="27%" align="right">借款描述：</td>
                                        <td width="73%" align="left">
                                        	<textarea id="borrow_contents" name="borrow_contents" style="width:600px; height:300px;">借款描述:</textarea>
                                        	<script>
												var up_url = "/?user&q=plugins&";
												
												$('#borrow_contents').xheditor({skin:'o2007blue',upImgUrl:up_url+"ac=html&p=xheditor&immediate=1",upImgExt:"jpg,jpeg,gif,png"});
												
                                            </script>
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="27%" align="right">验证码：</td>
                                        <td width="73%" align="left"><input name="valicode" id="valicode" type="text" class="in_text" style="width:50px;"/> <img src="/?plugins&q=imgcode" id="valicode" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" /></td>
                                    </tr>
                                    <? if (!isset($_REQUEST['group_id'])) $_REQUEST['group_id']=''; ;if (  $_REQUEST['group_id']!=""): ?>
                                    <input type="hidden" name="group_id" value="<? if (!isset($_REQUEST['group_id'])) $_REQUEST['group_id'] = ''; echo $_REQUEST['group_id']; ?>" />
                                    <input type="hidden" name="group_status" value="1" />
                                    <? endif; ?>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><input type="submit" name="Submit" value="保存并提交" class="btn1" /></td>
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
		alert('申请公司借款先填写企业信息');
		location.href='/?user&q=code/rating/company';
		 return false;
		}
		if(phone_num=='' && borrow_object==0)
		{
		alert('申请个人借款先填写个人信息');
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
			errorMsg += '- 总金额不能为空' + '\n';
		}
		if (account>max_account) {
			errorMsg += '- 借款金额不能大于'+max_account+'' + '\n';
		}
		if (account%100!=0) {
			errorMsg += '- 借款金额必须为100的倍数' + '\n';
		}
		
		
		if(borrow_type==5){
		    if (account>jinMoney) {
			errorMsg += '- 你的总资产为'+jinMoney+',请不要超过此总资产\n';
		   }
		}else{
		  if (account>use_amount) {
			errorMsg += '- 你的可用额度为'+use_amount+',请不要超过此可用额度\n';
		   }
		}
		
		if (apr.length == 0 ) {
			errorMsg += '- 利率不能为空' + '\n';
		}
		if (no == 1 && (borrow_type==2 || borrow_type==3 || borrow_type==5)) {
			errorMsg += '- 你不是VIP，不能申请快借标和担保标和净值标。' + '\n';
		}
		if (apr<min_apr ||apr>max_apr) {
			errorMsg += '- 利率不能大于'+max_apr+'%或小于' +min_apr+ '\n';
		}
		if (award_status==1 && (award_account=="" || award_account<5 || award_account>account*0.02)) {
		errorMsg += '- 固定金额分摊奖励不能低于5元,不能高于总标的金额的2%' + '\n';
	  }
	  if (award_status==2 && (award_scale =="" || award_scale<0.1 || award_scale>6)) {
		errorMsg += '- 投标金额比例奖励0.1%~6% ' + '\n';
	  }
		if (title.length == 0 ) {
			errorMsg += '- 标题不能为空' + '\n';
		}
		//if (content.length == 0 ) {
		//	errorMsg += '- 借款描述不能为空' + '\n';
		//}
		if (valicode.length == 0 ) {
			errorMsg += '- 验证码不能为空' + '\n';
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