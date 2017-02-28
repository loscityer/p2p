<? $this->magic_include(array('file' => "user_header.html", 'vars' => array()));?>

			<div class="bodyer clearfix">
                   <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="email"): ?>

	       <div class="regist clearfix  box1000" style="height:350px; ">

  	 <dl class="reg">
     	<dt><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/new/images/login_04.jpg" width="1000" height="57" /></dt>
      <dt>
		  <div style="padding:40px; padding-bottom:0px; margin-left:6px; padding-left:0px;padding-top:0px;">
		       <div style="background:#F6F4F4; padding:25px;padding-bottom:20px; padding-left:0px; width:964px;">
			        
					<div style="width:675px; margin:20px auto; ">
					     <div style="color:#AE0606; line-height:28px; font-size:14px"><? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?>将收到一封认证邮件，登录您的邮箱查收，并点击邮件中的链接，完成激活。激活成功后，
可以使用站内所有功能，再次感谢你的加入。 </div>
<div style="text-align:center; margin-top:15px;"><a href="<? if (!isset($this->magic_vars['_U']['emailurl'])) $this->magic_vars['_U']['emailurl'] = ''; echo $this->magic_vars['_U']['emailurl']; ?>" target="_blank"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/mailgo.gif" /></a></div>

<div style="margin-top:25px; font-size:14px">如果20分钟内没有收到激活邮件，请查看你信箱的垃圾邮箱，依然没有收到请重新发送。<br />
<input type="text" name="email" id="email" value="<? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?>" readonly="readonly"  style="width:250px; border:#BFBFBF solid 1px; height:18px;"/> <input type="button" name="submit" value="重新发送" onClick="sendemail()" class="xinbuton"/>

<script>
function sendemail(){
  var newemail=$("#email").val();
  $.post("/index.php?user&q=reg&type=sendemail",{checkemail:newemail},function(result){
		alert("发送成功，请登录邮箱确认激活！");
  });
}
</script>


</div>

<div style="margin-top:15px; font-size:14px">等待激活时间，您还可以去这里看看：<a href="/invest/index.html" style=" color:#025ED0; font-size:14px; text-decoration:underline" target="_blank">我要投资</a>  <a href="/borrow/index.html" style=" color:#025ED0; font-size:14px; text-decoration:underline" target="_blank">我要借款</a> <a href="/?user" style=" color:#025ED0; font-size:14px; text-decoration:underline" target="_blank">用户中心</a></div>
					</div>
			   </div>

		  </div>
         </dt>
          </dl>
  
          </div>
           <? else: ?>
            	<div class="Reg-left"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/longbao/images/login_03.jpg" width="497" height="320" /></div>
                 <form action="/index.php?user&q=reg"  method="post" id="reg_form_h" name="reg_form_h" onsubmit="return check_reg();" >
                <div class="Reg-right">
                	<div class="control_group mb10">
                        <label class="control_label">
                            邮箱
                        </label>
                        <div class="controls">
                            <input type="text" placeholder="请输入邮箱" onblur="checkEmail(this.value);" name="email"  id="email" class="inputBox" >
                          <span class="wrong"><em id="email_notice">邮件地址不能为空</em></span>
                        </div>
                  </div>
           			<div class="control_group mb10">
                        <label class="control_label">
                            用户名
                        </label>
                        <div class="controls">
                          <input type="text" id="username" name="username" onblur="checkUsername(this.value);" placeholder="请输入用户名" value="" class="inputBox">
                          <span class="wrong"><em id="username_notice">请输入3-15位字符</em></span>
                        </div>
                    </div>
                    <div class="control_group mb10">
                        <label class="control_label">
                            密码
                        </label>
                        <div class="controls">
                            <input type="password" placeholder="请输入密码" code="ie_psw1" name="password" onblur="checkPassword(this.value);"  class="password_first inputBox password_new" id="password">
                          <span class="wrong"><em id="password_notice">密码不能少于6个由数字与字母组成的字符</em></span>
                      
                        </div>
                    </div>
                    <div class="control_group mb10">
                        <label class="control_label">
                            确认密码
                        </label>
                        <div class="controls">
                            <input type="password" placeholder="确认密码" code="ie_psw1"  class="password_again inputBox password_new" name=confirm_password id=conform_password  onblur="checkConformPassword(this.value);">
                          <span class="wrong"><em id="conform_password_notice">密码不能少于6个由数字与字母组成的字符</em></span>
                        </div>
                    </div>
					<? if (!isset($_SESSION['reginvite_user_id'])) $_SESSION['reginvite_user_id']=''; ;if (  $_SESSION['reginvite_user_id']>0): ?>
					<div class="control_group mb10">
                        <label class="control_label">
                            推荐人
                        </label>
                        <div class="controls">
                            <input type="text"  value="<? if (!isset($_SESSION['reginvite_username'])) $_SESSION['reginvite_username'] = ''; echo $_SESSION['reginvite_username']; ?>"  class="inputBox mini" name=invite_username id=invite_username  >
                         
                        </div>
                    </div>
					<? endif; ?>
                    <div class="control_group mb10">
                        <label class="control_label">
                            验证码
                        </label>
                        <div class="controls">
                          <input type="text" placeholder="请输入验证码" class="inputBox mini"  name="valicode"> &nbsp; &nbsp;<em class=user_action_error><img src="/?plugins&q=imgcode" id="valicode" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer;width:59px;height:25px;" /></em>
                        </div>
                    </div>
                    <div class="control_group mb10">
                        <label class="control_label"></label>
                        <div class="controls">
                        <input name="tiaoli"  checked="checked" type="checkbox">
                      我已阅读并同意 <a href="/hetong/11345040951/a63.html"  class="registerArticle">《隐私条款》</a> 
                          
                        </div>
                    </div>
                    <div class="control_group mb10">
                        <label class="control_label"></label>
                        <div class="controls">
                        <button class="btn_large btn" id="submit"  type="submit">同意协议并注册</button>
                          <input type="hidden" name="type" value="ajax" />
                       <input name="invite_user_id"  type="hidden" value="<? if (!isset($_SESSION['reginvite_user_id'])) $_SESSION['reginvite_user_id'] = ''; echo $_SESSION['reginvite_user_id']; ?>" />
                        </div>
                    </div>
              </div>
                 </form>
                 
  
<script>
function check_reg(obj){
var reg_err=userReg();
if(reg_err==true){
	 var frm = document.forms['reg_form_h'];
     var valicode = frm.elements['valicode'].value;
	 if (valicode.length == 4 ) {
	 return true;
	 }else{
		  alert("请输入4位数验证码!");
		   return false;
	 }
 }else{
	 alert("请输入正确的信息进行注册!");
	return false;
	 
 }
}
</script>
  
            <? endif; ?>
</div>
          <? $this->magic_include(array('file' => "user_footer.html", 'vars' => array()));?>