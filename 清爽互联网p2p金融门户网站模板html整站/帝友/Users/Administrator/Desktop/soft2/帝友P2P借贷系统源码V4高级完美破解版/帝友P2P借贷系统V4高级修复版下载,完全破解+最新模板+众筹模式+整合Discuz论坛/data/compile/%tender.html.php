<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
 <? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']!=""): ?>
<? $data = array('user_id'=>$this->magic_vars['_G']['user_id'],'var'=>'Evar');  include_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['Evar'] = usersClass::GetEmailActiveOne($data);if(!is_array($this->magic_vars['Evar'])){ $this->magic_vars['Evar']=array();}?>
<? if (!isset($this->magic_vars['Evar']['status'])) $this->magic_vars['Evar']['status']='';if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username']=''; ;if (  $this->magic_vars['Evar']['status']!=1 &&  $this->magic_vars['_G']['user_result']['username']!="admin"): ?><script>alert("����û�м������䣬���ܽ���Ͷ�ʣ�");location.href='/index.php?user&q=reg&type=email';</script>
<? endif; ?>
<? unset($_magic_vars);unset($data); ?>
<? endif; ?>

<div class="bodyer clearfix">
  <div class="form-container box980 info-list">
    	<div class="ui-filter">
 							 <div class="ui-filter-header clearfix">
    <h4>ɸѡͶ����Ŀ</h4>
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
          �������
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type']='';if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type']=''; ;if (  $_REQUEST['borrow_type']=='all' ||  $_REQUEST['borrow_type']==''): ?>active<? endif; ?>">
          <span onclick="seachform_submit('all','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">����</span>
        </li>
       <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type']=''; ;if (  $_REQUEST['borrow_type']=='credit'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('credit','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">���ñ�</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type']=''; ;if (  $_REQUEST['borrow_type']=='fast'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('fast','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">��Ѻ��</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type']=''; ;if (  $_REQUEST['borrow_type']=='vouch'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('vouch','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">������</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type']=''; ;if (  $_REQUEST['borrow_type']=='flow'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('flow','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">��ת��</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type']=''; ;if (  $_REQUEST['borrow_type']=='jin'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('jin','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">��ֵ��</span>
        </li>
      </ul>
         <div class="clear"></div>
    </li>
    <li>
      <ul class="fn-clear">
        <li class="ui-filter-title">
          �������
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period']='';if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period']=''; ;if (  $_REQUEST['borrow_period']=='all' ||  $_REQUEST['borrow_period']==''): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','all','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">����</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period']=''; ;if (  $_REQUEST['borrow_period']=='1'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','1','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">3��������</span>
        </li>
       <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period']=''; ;if (  $_REQUEST['borrow_period']=='2'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','2','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">3-6����</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period']=''; ;if (  $_REQUEST['borrow_period']=='3'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','3','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">6-12����</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period']=''; ;if (  $_REQUEST['borrow_period']=='4'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','4','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">12��������</span>
        </li>
      </ul>   
         <div class="clear"></div>   
    </li>
    <li>
      <ul class="fn-clear" >
        <li class="ui-filter-title">
          �����
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status']='';if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status']=''; ;if (  $_REQUEST['account_status']=='all' ||  $_REQUEST['account_status']==''): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','all','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">����</span>
        </li>
        <li class="ui-filter-tag  <? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status']=''; ;if (  $_REQUEST['account_status']=='1'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','1','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">5��Ԫ����</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status']=''; ;if (  $_REQUEST['account_status']=='2'): ?>active<? endif; ?>" >
       
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','2','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">5-10��Ԫ</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status']=''; ;if (  $_REQUEST['account_status']=='3'): ?>active<? endif; ?>">
  
          <span  onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','3','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">10-50��Ԫ</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status']=''; ;if (  $_REQUEST['account_status']=='4'): ?>active<? endif; ?>">

          <span  onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','4','<? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style'] = ''; echo $_REQUEST['borrow_style']; ?>');">50��Ԫ����</span>
        </li>
       
      </ul>
         <div class="clear"></div>
    </li>
    <li>
      <ul class="fn-clear">
        <li class="ui-filter-title">
          ���ʽ
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style']='';if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style']=''; ;if (  $_REQUEST['borrow_style']=='all' ||  $_REQUEST['borrow_style']==''): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','all');">����</span>
        </li>
       <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style']=''; ;if (  $_REQUEST['borrow_style']=='0'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','0');">���µȶ�</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style']=''; ;if (  $_REQUEST['borrow_style']=='1'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','1');">��������</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style']=''; ;if (  $_REQUEST['borrow_style']=='2'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','2');">���ڻ�����Ϣ</span>
        </li>
        <li class="ui-filter-tag <? if (!isset($_REQUEST['borrow_style'])) $_REQUEST['borrow_style']=''; ;if (  $_REQUEST['borrow_style']=='3'): ?>active<? endif; ?>">
          <span onclick="seachform_submit('<? if (!isset($_REQUEST['borrow_type'])) $_REQUEST['borrow_type'] = ''; echo $_REQUEST['borrow_type']; ?>','<? if (!isset($_REQUEST['borrow_period'])) $_REQUEST['borrow_period'] = ''; echo $_REQUEST['borrow_period']; ?>','<? if (!isset($_REQUEST['account_status'])) $_REQUEST['account_status'] = ''; echo $_REQUEST['account_status']; ?>','3');">�»�Ϣ���ڻ���</span>
        </li>
        
      </ul>
         <div class="clear"></div>
    </li>
  </ul>
  </form>
</div>
                    <div class="guide-box">
                      <h4>��������</h4>
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
    <dt class="index-titleBgf" ><a href="/invest/index.html" <? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;if (  $this->magic_vars['_G']['site_result']['nid']=="invest"): ?>class="hover"<? endif; ?>>�����еĽ��</a></dt>
    <dt class="index-titleBgf" style="margin-left:20px;"><a href="/flow/index.html" <? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;if (  $this->magic_vars['_G']['site_result']['nid']=="flow"): ?>class="hover"<? endif; ?>>��ת����</a></dt>
    <dt class="index-titleBgf" style="margin-left:20px;"><a href="/full_check/index.html" <? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;if (  $this->magic_vars['_G']['site_result']['nid']=="full_check"): ?>class="hover"<? endif; ?>>�����н��</a></dt>
    <dt class="index-titleBgf" style="margin-left:20px;"><a href="/full_success/index.html" <? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;if (  $this->magic_vars['_G']['site_result']['nid']=="full_success"): ?>class="hover"<? endif; ?>>�ɹ����</a></dt>
    <? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']!=""): ?>	 
    <dt class="index-titleBgf" style="margin-left:20px;"><a href="/watchlist/index.html" <? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;if (  $this->magic_vars['_G']['site_result']['nid']=="watchlist"): ?>class="hover"<? endif; ?>>�ҹ�ע�ı�</a></dt>
    <? endif; ?>
  </dl>
  <ul class="invest_title">
    <li style="width:100px;" class="title_line">ͼƬ</li>
    <li style="width:210px;" class="title_line">����/�����/�ȼ�</li>
    <li style="width:160px;" class="title_line">�����/������</li>
    <li style="width:174px;" class="title_line">����/ʣ��ʱ��</li>
    <li style="width:174px;" class="title_line">����/���ʽ</li>
    <li style="width:160px;">״̬</li>
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
            <td width="210">�����ߣ�<strong><? if (!isset($this->magic_vars['var']['username'])) $this->magic_vars['var']['username'] = ''; echo $this->magic_vars['var']['username']; ?></strong></td>
            <td width="180">����<strong>��<? if (!isset($this->magic_vars['var']['account'])) $this->magic_vars['var']['account'] = ''; echo $this->magic_vars['var']['account']; ?></strong>Ԫ</td>
            <td width="180">ʣ��ʱ�䣺<? $data = array('var'=>'var_borrow','borrow_nid'=>$this->magic_vars['var']['borrow_nid'],'hits'=>'auto');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var_borrow'] = borrowClass::GetDetail($data);if(!is_array($this->magic_vars['var_borrow'])){ $this->magic_vars['var_borrow']=array();}?>
					<? if (!isset($this->magic_vars['var_borrow']['borrow']['status'])) $this->magic_vars['var_borrow']['borrow']['status']=''; ;if (  $this->magic_vars['var_borrow']['borrow']['status']==0): ?>�����<? if (!isset($this->magic_vars['var_borrow']['borrow']['status'])) $this->magic_vars['var_borrow']['borrow']['status']=''; ;elseif (  $this->magic_vars['var_borrow']['borrow']['status']==1): ?><span name="endtime"><? if (!isset($this->magic_vars['var_borrow']['borrow']['borrow_other_time'])) $this->magic_vars['var_borrow']['borrow']['borrow_other_time'] = ''; echo $this->magic_vars['var_borrow']['borrow']['borrow_other_time']; ?></span><? if (!isset($this->magic_vars['var_borrow']['borrow']['status'])) $this->magic_vars['var_borrow']['borrow']['status']=''; ;elseif (  $this->magic_vars['var_borrow']['borrow']['status']==2): ?>���ʧ��<? if (!isset($this->magic_vars['var_borrow']['borrow']['status'])) $this->magic_vars['var_borrow']['borrow']['status']='';if (!isset($this->magic_vars['var_borrow']['borrow']['repay_account_wait'])) $this->magic_vars['var_borrow']['borrow']['repay_account_wait']=''; ;elseif (  $this->magic_vars['var_borrow']['borrow']['status']==3 &&  $this->magic_vars['var_borrow']['borrow']['repay_account_wait'] == 0): ?>�ѻ���<? if (!isset($this->magic_vars['var_borrow']['borrow']['status'])) $this->magic_vars['var_borrow']['borrow']['status']='';if (!isset($this->magic_vars['var_borrow']['borrow']['repay_account_wait'])) $this->magic_vars['var_borrow']['borrow']['repay_account_wait']=''; ;elseif (  $this->magic_vars['var_borrow']['borrow']['status']==3 &&  $this->magic_vars['var_borrow']['borrow']['repay_account_wait'] != 0): ?>������<? if (!isset($this->magic_vars['var_borrow']['borrow']['status'])) $this->magic_vars['var_borrow']['borrow']['status']=''; ;elseif (  $this->magic_vars['var_borrow']['borrow']['status']==5): ?>����<? else: ?>δ֪״̬<? endif; ?>
					<? unset($_magic_vars);unset($data); ?></td>
            <td width="190">������ޣ�<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;if (  $this->magic_vars['var']['borrow_period'] == 0.03): ?>1��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.06): ?>2��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.10): ?>3��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.13): ?>4��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.16): ?>5��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.20): ?>6��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.23): ?>7��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.26): ?>8��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.30): ?>9��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.33): ?>10��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.36): ?>11��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.40): ?>12��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.43): ?>13��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.46): ?>14��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.50): ?>15��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.53): ?>16��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.56): ?>17��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.60): ?>18��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.63): ?>19��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.66): ?>20��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.70): ?>21��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.73): ?>22��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.76): ?>23��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.80): ?>24��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.83): ?>25��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.86): ?>26��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.90): ?>27��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.93): ?>28��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.96): ?>29��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] == 0.10): ?>30��
							<? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']='';if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period']=''; ;elseif (  $this->magic_vars['var']['borrow_period'] >= 1 &&  $this->magic_vars['var']['borrow_period'] < 10): ?><? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period'] = '';$_tmp = $this->magic_vars['var']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>����
							<? else: ?><? if (!isset($this->magic_vars['var']['borrow_period'])) $this->magic_vars['var']['borrow_period'] = '';$_tmp = $this->magic_vars['var']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>����
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
            <td width="200">���õȼ���<? if (!isset($this->magic_vars['var']['credit']['approve_credit'])) $this->magic_vars['var']['credit']['approve_credit'] = '';$_tmp = $this->magic_vars['var']['credit']['approve_credit'];$_tmp = $this->magic_modifier("credit",$_tmp,"credit");echo $_tmp;unset($_tmp); ?></td>
            <td>�����ʣ�<strong><? if (!isset($this->magic_vars['var']['borrow_apr'])) $this->magic_vars['var']['borrow_apr'] = ''; echo $this->magic_vars['var']['borrow_apr']; ?>%</strong></td>
            <td><span class="jdt"><i  style="width: <? if (!isset($this->magic_vars['var']['borrow_account_scale'])) $this->magic_vars['var']['borrow_account_scale'] = ''; echo $this->magic_vars['var']['borrow_account_scale']; ?>%;"></i></span> <? if (!isset($this->magic_vars['var']['borrow_account_scale'])) $this->magic_vars['var']['borrow_account_scale'] = ''; echo $this->magic_vars['var']['borrow_account_scale']; ?>%</td>
            <td>��ط�ʽ�� <? if (!isset($this->magic_vars['var']['borrow_style'])) $this->magic_vars['var']['borrow_style'] = '';$_tmp = $this->magic_vars['var']['borrow_style'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></td>
          </tr>
        </table>
      </li>
     <? endforeach; endif; unset($_from); ?>   
      
      
      
       <div class="page"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
    </ul>
      <? else: ?>
                   <div style="height:50px; font-size:24px; text-align:center; padding-top:30px;">����Ͷ����Ŀ</div>
                   <? endif; ?>
  </div>
       <? unset($_magic_vars); ?>
</div>
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>