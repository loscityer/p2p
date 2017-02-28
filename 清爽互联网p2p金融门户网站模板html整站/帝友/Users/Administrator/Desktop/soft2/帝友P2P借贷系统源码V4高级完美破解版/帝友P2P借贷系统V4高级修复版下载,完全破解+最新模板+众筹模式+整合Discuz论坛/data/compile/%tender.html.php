<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
 <? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']!=""): ?>
<? $data = array('user_id'=>$this->magic_vars['_G']['user_id'],'var'=>'Evar');  include_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['Evar'] = usersClass::GetEmailActiveOne($data);if(!is_array($this->magic_vars['Evar'])){ $this->magic_vars['Evar']=array();}?>
<? if (!isset($this->magic_vars['Evar']['status'])) $this->magic_vars['Evar']['status']='';if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username']=''; ;if (  $this->magic_vars['Evar']['status']!=1 &&  $this->magic_vars['_G']['user_result']['username']!="admin"): ?><script>alert("您还没有激活邮箱，不能进行投资！");location.href='/index.php?user&q=reg&type=email';</script>
<? endif; ?>
<? unset($_magic_vars);unset($data); ?>
<? endif; ?>

<div class="bodyer clearfix">
  <div class="form-container box980 info-list">
    	<div class="ui-filter">
 							 <div class="ui-filter-header clearfix">
    <h4>筛选投资项目</h4>
    <div class="clear"></div>
  </div>
    
  <script type="text/javascript">
  function seachform_submit(borrowtype,borrowperiod,accountstatus,borrowstyle){
  document.getElementById('borrowtype').value=borrowtype;
  document.getElementById('borrowperiod').value=borrowperiod;
  document.getElementById('accountstatus').value=accountstatus;
   document.getElementById('borrowstyle').value=borrowstyle;
  document.forms.seachform.submit();
  }
  </script>
    
   <form action="" method="post" name="seachform">
   <input name="borrow_type" id="borrowtype" value="all" type="hidden" />
   <input name="borrow_period" id="borrowperiod" value="all" type="hidden" />
   <input name="account_status" id="accountstatus" value="all" type="hidden" />
    <input name="borrow_style" id="borrowstyle" value="all" type="hidden" />
  							<ul>
    <li>
      <ul class="fn-clear">
        <li class="ui-filter-title">
          标的类型
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type']='';if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type']=''; ;if (  $_REQUEST['borrow_type']=='all' ||  $_REQUEST['borrow_type']==''): ?>active<? endif; ?>">
          <span onclick="seachform_submit('all','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">不限</span>
        </li>
       <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type']=''; ;if (  $_REQUEST['borrow_type']=='credit'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('credit','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">信用标</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type']=''; ;if (  $_REQUEST['borrow_type']=='fast'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('fast','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">抵押标</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type']=''; ;if (  $_REQUEST['borrow_type']=='vouch'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('vouch','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">担保标</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type']=''; ;if (  $_REQUEST['borrow_type']=='flow'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('flow','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">流转标</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type']=''; ;if (  $_REQUEST['borrow_type']=='jin'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('jin','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">净值标</span>
        </li>
      </ul>
         <div class="clear"></div>
    </li>
    <li>
      <ul class="fn-clear">
        <li class="ui-filter-title">
          借款期限
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period']='';if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period']=''; ;if (  $_REQUEST['borrow_period']=='all' ||  $_REQUEST['borrow_period']==''): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','all','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">不限</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period']=''; ;if (  $_REQUEST['borrow_period']=='1'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','1','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">3个月以下</span>
        </li>
       <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period']=''; ;if (  $_REQUEST['borrow_period']=='2'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','2','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">3-6个月</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period']=''; ;if (  $_REQUEST['borrow_period']=='3'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','3','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">6-12个月</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period']=''; ;if (  $_REQUEST['borrow_period']=='4'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','4','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">12个月以上</span>
        </li>
      </ul>   
         <div class="clear"></div>   
    </li>
    <li>
      <ul class="fn-clear" >
        <li class="ui-filter-title">
          借款金额
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status']='';if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status']=''; ;if (  $_REQUEST['account_status']=='all' ||  $_REQUEST['account_status']==''): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','all','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">不限</span>
        </li>
        <li class="ui-filter-tag  <? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status']=''; ;if (  $_REQUEST['account_status']=='1'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','1','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">5万元以下</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status']=''; ;if (  $_REQUEST['account_status']=='2'): ?>active<? endif; ?>" >
       
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','2','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">5-10万元</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status']=''; ;if (  $_REQUEST['account_status']=='3'): ?>active<? endif; ?>">
  
          <span  onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','3','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">10-50万元</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status']=''; ;if (  $_REQUEST['account_status']=='4'): ?>active<? endif; ?>">

          <span  onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','4','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">50万元以上</span>
        </li>
       
      </ul>
         <div class="clear"></div>
    </li>
    <li>
      <ul class="fn-clear">
        <li class="ui-filter-title">
          还款方式
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style']='';if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style']=''; ;if (  $_REQUEST['borrow_style']=='all' ||  $_REQUEST['borrow_style']==''): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','all');">不限</span>
        </li>
       <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style']=''; ;if (  $_REQUEST['borrow_style']=='0'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','0');">按月等额</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style']=''; ;if (  $_REQUEST['borrow_style']=='1'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','1');">按季还款</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style']=''; ;if (  $_REQUEST['borrow_style']=='2'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','2');">到期还本还息</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style']=''; ;if (  $_REQUEST['borrow_style']=='3'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','3');">月还息到期还本</span>
        </li>
        
      </ul>
         <div class="clear"></div>
    </li>
  </ul>
  </form>
</div>
                    <div class="guide-box">
                      <h4>新手引导</h4>
                      <ul>
                       <? $this->magic_vars['query_type']='GetList';$data = array('var'=>'var','limit'=>'5','type_id'=>'12','flag'=>'index');$default = '';  require_once(ROOT_PATH.'modules/articles/articles.class.php');$this->magic_vars['magic_result'] = articlesClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
                      <li><a href="/hetong/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" target="_blank" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"22");echo $_tmp;unset($_tmp); ?></a></li>
		              <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
                     
                      </ul>
                    </div>
                    
  </div>
     <? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;if (  $this->magic_vars['_G']['site_result']['nid']=="invest"): ?>
    	 <? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','is_flow'=>'2','borrow_name'=>isset($_REQUEST['borrow_name'])?$_REQUEST['borrow_name']:'','type'=>isset($_REQUEST['type'])?$_REQUEST['type']:'','flag'=>isset($_REQUEST['flag'])?$_REQUEST['flag']:'','account_status'=>isset($_REQUEST['account_status'])?$_REQUEST['account_status']:'','borrow_period'=>isset($_REQUEST['borrow_period'])?$_REQUEST['borrow_period']:'','award_status'=>isset($_REQUEST['award_status'])?$_REQUEST['award_status']:'','province'=>isset($_REQUEST['province'])?$_REQUEST['province']:'','city'=>isset($_REQUEST['city'])?$_REQUEST['city']:'','borrow_use'=>isset($_REQUEST['borrow_use'])?$_REQUEST['borrow_use']:'','epage'=>'10','order'=>$_REQUEST['order'],'vouchstatus'=>isset($_REQUEST['vouchstatus'])?$_REQUEST['vouchstatus']:'','jine'=>isset($_REQUEST['jine'])?$_REQUEST['jine']:'','borrow_style'=>isset($_REQUEST['borrow_style'])?$_REQUEST['borrow_style']:'','borrow_type'=>isset($_REQUEST['borrow_type'])?$_REQUEST['borrow_type']:'','query_type'=>$this->magic_vars['_G']['site_result']['nid'],'group_status'=>'0');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
         <? else: ?>
             	 <? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','is_flow'=>'2','borrow_name'=>isset($_REQUEST['borrow_name'])?$_REQUEST['borrow_name']:'','type'=>isset($_REQUEST['type'])?$_REQUEST['type']:'','flag'=>isset($_REQUEST['flag'])?$_REQUEST['flag']:'','account_status'=>isset($_REQUEST['account_status'])?$_REQUEST['account_status']:'','borrow_period'=>isset($_REQUEST['borrow_period'])?$_REQUEST['borrow_period']:'','award_status'=>isset($_REQUEST['award_status'])?$_REQUEST['award_status']:'','province'=>isset($_REQUEST['province'])?$_REQUEST['province']:'','city'=>isset($_REQUEST['city'])?$_REQUEST['city']:'','borrow_use'=>isset($_REQUEST['borrow_use'])?$_REQUEST['borrow_use']:'','epage'=>'10','order'=>$_REQUEST['order'],'vouchstatus'=>isset($_REQUEST['vouchstatus'])?$_REQUEST['vouchstatus']:'','borrow_style'=>isset($_REQUEST['borrow_style'])?$_REQUEST['borrow_style']:'','jine'=>isset($_REQUEST['jine'])?$_REQUEST['jine']:'','borrow_type'=>isset($_REQUEST['borrow_type'])?$_REQUEST['borrow_type']:'','query_type'=>$this->magic_vars['_G']['site_result']['nid'],'group_status'=>'0');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
         <? endif; ?>
  <dl class="index-title">
    <dt class="index-titleBgf" ><a href="/invest/index.html" <? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;if (  $this->magic_vars['_G']['site_result']['nid']=="invest"): ?>class="hover"<? endif; ?>>进行中的借款</a></dt>
    <dt class="index-titleBgf" style="margin-left:20px;"><a href="/flow/index.html" <? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;if (  $this->magic_vars['_G']['site_result']['nid']=="flow"): ?>class="hover"<? endif; ?>>流转借款标</a></dt>
    <dt class="index-titleBgf" style="margin-left:20px;"><a href="/full_check/index.html" <? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;if (  $this->magic_vars['_G']['site_result']['nid']=="full_check"): ?>class="hover"<? endif; ?>>复审中借款</a></dt>
    <dt class="index-titleBgf" style="margin-left:20px;"><a href="/full_success/index.html" <? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;if (  $this->magic_vars['_G']['site_result']['nid']=="full_success"): ?>class="hover"<? endif; ?>>成功借款</a></dt>
    <? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']!=""): ?>	 
    <dt class="index-titleBgf" style="margin-left:20px;"><a href="/watchlist/index.html" <? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;if (  $this->magic_vars['_G']['site_result']['nid']=="watchlist"): ?>class="hover"<? endif; ?>>我关注的标</a></dt>
    <? endif; ?>
  </dl>
  <ul class="invest_title">
    <li style="width:100px;" class="title_line">图片</li>
    <li style="width:210px;" class="title_line">标题/借款者/等级</li>
    <li style="width:160px;" class="title_line">借款金额/年利率</li>
    <li style="width:174px;" class="title_line">进度/剩余时间</li>
    <li style="width:174px;" class="title_line">期限/还款方式</li>
    <li style="width:160px;">状态</li>
  </ul>
  <div class="invest_list">
  <? if (!isset($this->magic_vars['loop']['list'])) $this->magic_vars['loop']['list']=''; ;if (  $this->magic_vars['loop']['list']): ?>    
    <ul>
     <?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>    
      <li>
        <table width="100%" border="0">
          <tr>
            <td rowspan="3" width="100"><div class="Recommend_mg2"><img src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");echo $_tmp;unset($_tmp); ?>" width="75" height="75" /></div></td>
            <td colspan="3"><h5><a href="/invest/full_success/a<? if (!isset($this->magic_vars['var']['borrow_nid'])) $this->magic_vars['var']['borrow_nid'] = ''; echo $this->magic_vars['var']['borrow_nid']; ?>.html" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a> <? if (!isset($this->magic_vars['var']['is_jin'])) $this->magic_vars['var']['is_jin']='';if (!isset($this->magic_vars['var']['is_flow'])) $this->magic_vars['var']['is_flow']='';if (!isset($this->magic_vars['var']['is_Seconds'])) $this->magic_vars['var']['is_Seconds']='';if (!isset($this->magic_vars['var']['vouchstatus'])) $this->magic_vars['var']['vouchstatus']='';if (!isset($this->magic_vars['var']['fast_status'])) $this->magic_vars['var']['fast_status']=''; ;if (  $this->magic_vars['var']['is_jin']!=1 &&  $this->magic_vars['var']['is_flow']!=1 &&  $this->magic_vars['var']['is_Seconds']!=1 &&  $this->magic_vars['var']['vouchstatus']!=1  &&  $this->magic_vars['var']['fast_status']!=1): ?><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/xin.jpg"   /><? endif; ?><? if (!isset($this->magic_vars['var']['is_jin'])) $this->magic_vars['var']['is_jin']=''; ;if (  $this->magic_vars['var']['is_jin']==1): ?><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/jin.gif"   /><? endif; ?><? if (!isset($this->magic_vars['var']['is_flow'])) $this->magic_vars['var']['is_flow']=''; ;if (  $this->magic_vars['var']['is_flow']==1): ?><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/flow.gif"   /><? endif; ?><? if (!isset($this->magic_vars['var']['is_Seconds'])) $this->magic_vars['var']['is_Seconds']=''; ;if (  $this->magic_vars['var']['is_Seconds']==1): ?><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/mb.gif"   /><? endif; ?><? if (!isset($this->magic_vars['var']['isDXB'])) $this->magic_vars['var']['isDXB']=''; ;if (  $this->magic_vars['var']['isDXB']==1): ?>&nbsp;<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/lock.gif"   /><? endif; ?><? if (!isset($this->magic_vars['var']['vouchstatus'])) $this->magic_vars['var']['vouchstatus']=''; ;if (  $this->magic_vars['var']['vouchstatus']==1): ?> &nbsp;<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/ico_dbao.gif"  ><? endif; ?><? if (!isset($this->magic_vars['var']['fast_status'])) $this->magic_vars['var']['fast_status']=''; ;if (  $this->magic_vars['var']['fast_status']==1): ?>&nbsp;<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/ico_ks.gif" ><? endif; ?><? if (!isset($this->magic_vars['var']['award_status'])) $this->magic_vars['var']['award_status']=''; ;if (  $this->magic_vars['var']['award_status']>0): ?>&nbsp;<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/jiangli.gif"   /><? endif; ?><? if (!isset($this->magic_vars['var']['recommend'])) $this->magic_vars['var']['recommend']=''; ;if (  $this->magic_vars['var']['recommend']==1): ?>&nbsp;<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/tuijian.jpg"   /><? endif; ?></h5></td>
          </tr>
          <tr>
            <td width="210">发布者：<strong><? if (!isset($this->magic_vars['var']['username'])) $this->magic_vars['var']['username'] = ''; echo $this->magic_vars['var']['username']; ?></strong></td>
            <td width="180">借款金额：<strong>￥<? if (!isset($this->magic_vars['var']['account'])) $this->magic_vars['var']['account'] = ''; echo $this->magic_vars['var']['account']; ?></strong>元</td>
            <td width="180">剩余时间：<? $data = array('var'=>'var_borrow','borrow_nid'=>$this->magic_vars['var']['borrow_nid'],'hits'=>'auto');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var_borrow'] = borrowClass::GetDetail($data);if(!is_array($this->magic_vars['var_borrow'])){ $this->magic_vars['var_borrow']=array();}?>
					<? if (!isset($this->magic_vars['var_borrow']['borrow']['status'])) $this->magic_vars['var_borrow']['borrow']['status']=''; ;if (  $this->magic_vars['var_borrow']['borrow']['status']==0): ?>审核中<? if (!isset($this->magic_vars['var_borrow']['borrow']['status'])) $this->magic_vars['var_borrow']['borrow']['status']=''; ;elseif (  $this->magic_vars['var_borrow']['borrow']['status']==1): ?><span name="endtime"><? if (!isset($this->magic_vars['var_borrow']['borrow']['borrow_other_time'])) $this->magic_vars['var_borrow']['borrow']['borrow_other_time'] = ''; echo $this->magic_vars['var_borrow']['borrow']['borrow_other_time']; ?></span><? if (!isset($this->magic_vars['var_borrow']['borrow']['status'])) $this->magic_vars['var_borrow']['borrow']['status']=''; ;elseif (  $this->magic_vars['var_borrow']['borrow']['status']==2): ?>审核失败<? if (!isset($this->magic_vars['var_borrow']['borrow']['status'])) $this->magic_vars['var_borrow']['borrow']['status']='';if (!isset($this->magic_vars['var_borrow']['borrow']['repay_account_wait'])) $this->magic_vars['var_borrow']['borrow']['repay_account_wait']=''; ;elseif (  $this->magic_vars['var_borrow']['borrow']['status']==3 &&  $this->magic_vars['var_borrow']['borrow']['repay_account_wait'] == 0): ?>已还完<? if (!isset($this->magic_vars['var_borrow']['borrow']['status'])) $this->magic_vars['var_borrow']['borrow']['status']='';if (!isset($this->magic_vars['var_borrow']['borrow']['repay_account_wait'])) $this->magic_vars['var_borrow']['borrow']['repay_account_wait']=''; ;elseif (  $this->magic_vars['var_borrow']['borrow']['status']==3 &&  $this->magic_vars['var_borrow']['borrow']['repay_account_wait'] != 0): ?>还款中<? if (!isset($this->magic_vars['var_borrow']['borrow']['status'])) $this->magic_vars['var_borrow']['borrow']['status']=''; ;elseif (  $this->magic_vars['var_borrow']['borrow']['status']==5): ?>流标<? else: ?>未知状态<? endif; ?>
					<? unset($_magic_vars);unset($data); ?></td>
            <td width="190">借款期限：<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;if (  $this->magic_vars['var']['borrow_period'] == 0.03): ?>1天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.06): ?>2天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.10): ?>3天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.13): ?>4天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.16): ?>5天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.20): ?>6天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.23): ?>7天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.26): ?>8天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.30): ?>9天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.33): ?>10天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.36): ?>11天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.40): ?>12天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.43): ?>13天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.46): ?>14天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.50): ?>15天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.53): ?>16天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.56): ?>17天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.60): ?>18天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.63): ?>19天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.66): ?>20天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.70): ?>21天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.73): ?>22天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.76): ?>23天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.80): ?>24天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.83): ?>25天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.86): ?>26天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.90): ?>27天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.93): ?>28天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.96): ?>29天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.10): ?>30天
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']='';if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] >= 1 &&  $this->magic_vars['var']['borrow_period'] < 10): ?><? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period'] = '';$_tmp = $this->magic_vars['var']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>个月
							<? else: ?><? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period'] = '';$_tmp = $this->magic_vars['var']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>个月
							<? endif; ?></td>
            <td rowspan="2">
            
                                <a href="/invest/full_success/a<? if (!isset($this->magic_vars['var']['borrow_nid'])) $this->magic_vars['var']['borrow_nid'] = ''; echo $this->magic_vars['var']['borrow_nid']; ?>.html">
                                   <? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==1): ?>
				                     <? if (!isset($this->magic_vars['var']['borrow_account_wait'])) $this->magic_vars['var']['borrow_account_wait']=''; ;if (  $this->magic_vars['var']['borrow_account_wait']==0): ?> 
                                      <img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/list_094.jpg" width="78" height="33" />
                                     <? else: ?>
                                     <img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/list_091.jpg" width="78" height="33" />
                                     <? endif; ?>
                                   <? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==3): ?>
                                       <? if (!isset($this->magic_vars['var']['repay_account_wait'])) $this->magic_vars['var']['repay_account_wait']=''; ;if (  $this->magic_vars['var']['repay_account_wait']==0): ?>
                                        <img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/list_092.jpg" width="78" height="33" />
                                       <? else: ?>
                                       <img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/list_09.jpg" width="78" height="33" />
                                       <? endif; ?>
                                    <? else: ?>
                                        <? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==5): ?>
                                          <img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/list_095.jpg" width="78" height="33" />
                                        <? else: ?> 
                                           <img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/list_093.jpg" width="78" height="33" />
                                        <? endif; ?> 
                                   <? endif; ?>
                                    </a>
            </td>
          </tr>
          <tr>
            <td width="200">信用等级：<? if (!isset($this->magic_vars['var']['credit']['approve_credit'])) $this->magic_vars['var']['credit']['approve_credit'] = '';$_tmp = $this->magic_vars['var']['credit']['approve_credit'];$_tmp = $this->magic_modifier("credit",$_tmp,"credit");echo $_tmp;unset($_tmp); ?></td>
            <td>年利率：<strong><? if (!isset($this->magic_vars['var']['borrow_apr'])) $this->magic_vars['var']['borrow_apr'] = ''; echo $this->magic_vars['var']['borrow_apr']; ?>%</strong></td>
            <td><span class="jdt"><i  style="width: <? if (!isset($this->magic_vars['var']['borrow_account_scale'])) $this->magic_vars['var']['borrow_account_scale'] = ''; echo $this->magic_vars['var']['borrow_account_scale']; ?>%;"></i></span> <? if (!isset($this->magic_vars['var']['borrow_account_scale'])) $this->magic_vars['var']['borrow_account_scale'] = ''; echo $this->magic_vars['var']['borrow_account_scale']; ?>%</td>
            <td>赎回方式： <? if (!isset($this->magic_vars['var']['borrow_style'])) $this->magic_vars['var']['borrow_style'] = '';$_tmp = $this->magic_vars['var']['borrow_style'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></td>
          </tr>
        </table>
      </li>
     <? endforeach; endif; unset($_from); ?>   
      
      
      
       <div class="page"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
    </ul>
      <? else: ?>
                   <div style="height:50px; font-size:24px; text-align:center; padding-top:30px;">暂无投资项目</div>
                   <? endif; ?>
  </div>
       <? unset($_magic_vars); ?>
</div>
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>