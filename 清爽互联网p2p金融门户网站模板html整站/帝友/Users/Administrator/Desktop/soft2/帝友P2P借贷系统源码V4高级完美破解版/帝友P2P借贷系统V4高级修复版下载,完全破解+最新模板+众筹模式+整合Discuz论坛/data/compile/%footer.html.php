<div class="footer clearfix">
  <div class="bottom">
    <dl class="box980 bottomNav">
      <dt><span><a href="#"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/longbao/images/icon_top.jpg" width="18" height="18" /> ���ض���</a></span><a href="/about/index.html">��������</a><a href="/hetong/index.html">���߷���</a><a href="/contact/index.html">��ϵ����</a><a href="/help/index.html">��������</a><a href="/aqbz/index.html">��ȫ����</a></dt>
      <dd>
        <div class="zxkf"> <span><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/longbao/images/index_37.jpg" width="113" height="28" /></span> <span style="font-family:'΢���ź�';font-size:20px; font-weight:bold; color:#fff">4000 111 222</span> <span>����ʱ�䣺9:00 - 17:00 ����һ�����գ�</span> </div>
        <div class="fright"> <img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/longbao/images/bottom_pic1.jpg" width="114" height="41">&nbsp;&nbsp; <img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/longbao/images/bottom_pic2.jpg" width="102" height="38">&nbsp;&nbsp; <img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/longbao/images/bottom_pic3.jpg" width="97" height="53">&nbsp;&nbsp; </div>
      </dd>
    </dl>
  </div>
  <div class="copyright">
    <div class="box980">����֧�֣�<a href="http://bbs.gope.cn" target="_blank">��Ʒ��</a> </div>
  </div>
</div>

<LINK rel=stylesheet type=text/css href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/kefu/css/common.css">
<SCRIPT type=text/javascript src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/kefu/js/kefu.js"></SCRIPT>

<DIV id=floatTools class=float0831>
  
  <DIV class=floatL><A style="DISPLAY: none" id=aFloatTools_Show class=btnOpen 
title=�鿴���߿ͷ� 
onclick="javascript:$('#divFloatToolsView').animate({width: 'show', opacity: 'show'}, 'normal',function(){ $('#divFloatToolsView').show();kf_setCookie('RightFloatShown', 0, '', '/', 'www.hxcfp2p.com'); });$('#aFloatTools_Show').attr('style','display:none');$('#aFloatTools_Hide').attr('style','display:block');" 
href="javascript:void(0);">չ��</A> <A id=aFloatTools_Hide class=btnCtn 
title=�ر����߿ͷ� 
onclick="javascript:$('#divFloatToolsView').animate({width: 'hide', opacity: 'hide'}, 'normal',function(){ $('#divFloatToolsView').hide();kf_setCookie('RightFloatShown', 1, '', '/', 'www.hxcfp2p.com'); });$('#aFloatTools_Show').attr('style','display:block');$('#aFloatTools_Hide').attr('style','display:none');" 
href="javascript:void(0);">����</A> </DIV>
  
  <DIV id=divFloatToolsView class=floatR>
    <DIV class=tp></DIV>
    <DIV class=cn>
      <UL>
        <LI class=topkefu>
          <H3 class=titZx>QQ��ѯ</H3>
        </LI>
        <LI><SPAN class=icoZx>������ѯ</SPAN> </LI>
        <? $this->magic_vars['query_type']='GetListhh';$data = array('limit'=>'20','type_id'=>'3,16');$default = '';  require_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['magic_result'] = usersClass::GetListhh($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
        <LI><A class=icoTc href="http://wpa.qq.com/msgrd?v=3&uin=<? if (!isset($this->magic_vars['var']['qq'])) $this->magic_vars['var']['qq'] = ''; echo $this->magic_vars['var']['qq']; ?>&site=qq&menu=yes" target="_blank"><? if (!isset($this->magic_vars['var']['adminname'])) $this->magic_vars['var']['adminname'] = ''; echo $this->magic_vars['var']['adminname']; ?></A> </LI>
         <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
      </UL>
      <UL class=webZx>
        <LI class=webZx-in><A href="/kefu/index.html" target="_blank" style="FLOAT: left"><IMG src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/kefu/images/right_float_web.png" border="0px"></A> </LI>
      </UL>
      <UL>
        <LI>
          <H3 class=titDh>�绰��ѯ</H3>
        </LI>
        <LI class=bot><SPAN class=icoTl>400-005-3525</SPAN> </LI>
      </UL>
    </DIV>
  </DIV>
</DIV>
</body>
</html>