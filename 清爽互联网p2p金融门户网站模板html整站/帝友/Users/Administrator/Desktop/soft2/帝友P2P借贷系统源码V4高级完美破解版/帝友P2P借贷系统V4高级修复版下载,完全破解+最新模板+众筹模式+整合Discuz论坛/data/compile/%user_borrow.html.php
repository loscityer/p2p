<? $this->magic_include(array('file' => "user_header.html", 'vars' => array()));?>
<div class="clearfix con_box">

<div class="mi_content">
	<div class="mi_c_left">
	<? $this->magic_include(array('file' => "user_menu.html", 'vars' => array()));?>
	</div>
	<div class="user_right">
			<div class="m_change">
				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="repayment" ||  $this->magic_vars['_U']['query_type']=="repaymentplan" ||  $this->magic_vars['_U']['query_type']=="loandetail" ||  $this->magic_vars['_U']['query_type']=="repaymentyes" ||  $this->magic_vars['_U']['query_type']=="repayment_view"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repayment" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="repayment"): ?>class="onn"<? endif; ?>>�����еĽ��</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repaymentplan" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="repaymentplan"): ?> class="onn"<? endif; ?>>������ϸ��</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/loandetail" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="loandetail"): ?> class="onn"<? endif; ?>>�����ϸ��</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repaymentyes" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="repaymentyes"): ?> class="onn"<? endif; ?>>�ѻ���Ľ��</a></li>
					<? if (!isset($_REQUEST['id'])) $_REQUEST['id']=''; ;if (  $_REQUEST['id']!=""): ?>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repaymentyes" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="repayment_view"): ?> class="onn"<? endif; ?>>��Ļ�����Ϣ</a></li>
					<? endif; ?>
				</ul>

				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="success" ||  $this->magic_vars['_U']['query_type']=="gathering" ||  $this->magic_vars['_U']['query_type']=="gettender" ||  $this->magic_vars['_U']['query_type']=="lenddetail" ||  $this->magic_vars['_U']['query_type']=="successyes" ||  $this->magic_vars['_U']['query_type']=="before"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/gettender" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="gettender"): ?> class="onn"<? endif; ?>>Ͷ���еĽ��</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/success&type=wait" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $_REQUEST['type']=="wait"  &&   $this->magic_vars['_U']['query_type']=="success"): ?> class="onn"<? endif; ?>>�����еĽ��</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/gathering&type=wait" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $this->magic_vars['_U']['query_type']=="gathering" &&  $_REQUEST['type']=="wait"): ?> class="onn"<? endif; ?>>δ�տ���ϸ��</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/gathering&type=yes" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $this->magic_vars['_U']['query_type']=="gathering" &&  $_REQUEST['type']=="yes"): ?> class="onn"<? endif; ?>>���տ���ϸ��</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/before" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="before"): ?> class="onn"<? endif; ?>>ת��ǰ�տ���ϸ</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/lenddetail" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="lenddetail"): ?> class="onn"<? endif; ?>>�����ϸ��</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/success&type=yes" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $_REQUEST['type']=="yes" &&   $this->magic_vars['_U']['query_type']=="success"): ?> class="onn"<? endif; ?>>������Ľ��</a></li>
				</ul>


               <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (   $this->magic_vars['_U']['query_type']=="zhongchou"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/zhongchou" class="onn">�ҵ��ڳ�Ͷ��</a></li>
				</ul>
			
				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (   $this->magic_vars['_U']['query_type']=="bid"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/bid" class="onn">����Ͷ��Ľ��</a></li>
				</ul>
			
				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (   $this->magic_vars['_U']['query_type']=="full_check"): ?>
				<ul>

					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/full_check" class="onn">���긴��Ľ��</a></li>
				</ul>

				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (   $this->magic_vars['_U']['query_type']=="auto" ||  $this->magic_vars['_U']['query_type']=="auto_list" ||  $this->magic_vars['_U']['query_type']=="auto_new"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/auto" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="auto"): ?> class="onn"<? endif; ?> >�Զ�Ͷ��</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/auto_new" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="auto_new"): ?> class="onn"<? endif; ?>>����Զ�Ͷ��</a></li>
				</ul>
				
				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (   $this->magic_vars['_U']['query_type']=="debt_move" ||  $this->magic_vars['_U']['query_type']=="move_success" ||  $this->magic_vars['_U']['query_type']=="wait" ||  $this->magic_vars['_U']['query_type']=="buy_success" ||  $this->magic_vars['_U']['query_type']=="debting"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/debting" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="debting"): ?> class="onn"<? endif; ?> >����ת�õ�ծȨ</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/debt_move" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="debt_move"): ?> class="onn"<? endif; ?> >����ת�õ�ծȨ</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/move_success" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="move_success"): ?> class="onn"<? endif; ?>>�ɹ�ת�õ�ծȨ</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/buy_success" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="buy_success"): ?> class="onn"<? endif; ?>>�ɹ������ծȨ</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/wait&type=change" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="wait"): ?> class="onn"<? endif; ?>>�����е�ծȨ</a></li>
				</ul>

				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (   $this->magic_vars['_U']['query_type']=="otherloan" ||  $this->magic_vars['_U']['query_type']=="otherloan_new"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/otherloan" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="otherloan"): ?> class="onn"<? endif; ?> >������վ���</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/otherloan_new" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="otherloan_new"): ?> class="onn"<? endif; ?>>����������</a></li>
				</ul>
				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (   $this->magic_vars['_U']['query_type']=="black" ||  $this->magic_vars['_U']['query_type']=="yqblack"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/black" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="black"): ?> class="onn"<? endif; ?> >�ҵĺ�����</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/yqblack" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="yqblack"): ?> class="onn"<? endif; ?> >�ҵ����ں�����</a></li>
				</ul>

				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="tender_vouch" ||  $this->magic_vars['_U']['query_type']=="tender_vouch_finish"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/tender_vouch" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="tender_vouch"): ?> class="onn"<? endif; ?> >�ҵ����Ľ��</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/tender_vouch_finish" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($_REQUEST['status'])) $_REQUEST['status']='';if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $this->magic_vars['_U']['query_type']=="tender_vouch_finish" &&   $_REQUEST['status']!="0" &&  $_REQUEST['status']!="1"): ?> class="onn"<? endif; ?>>Ͷ��/���󵣱���</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/tender_vouch_finish&status=0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> class="onn"<? endif; ?>>�����еĵ�����</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/tender_vouch_finish&status=1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="1"): ?> class="onn"<? endif; ?>>�ѻ���ĵ�����</a></li>
				</ul>

				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myuser" ||  $this->magic_vars['_U']['query_type']=="myuserrepay" ||  $this->magic_vars['_U']['query_type']=="myuserborrow" ||  $this->magic_vars['_U']['query_type']=="myuser_account"): ?>
				<ul>
					<li><a href="index.php?user&q=code/user/myuser" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="myuser"): ?> class="onn"<? endif; ?>>�ҵĿͷ�</a></li>
					<li><a href="index.php?user&q=code/borrow/myuser" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="myuserrepay" ||  $this->magic_vars['_U']['query_type']=="myuser"): ?> class="onn"<? endif; ?>>�ͻ����</a></li>
					<li><a href="index.php?user&q=code/borrow/myuserborrow" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="myuserborrow"): ?> class="onn"<? endif; ?>>�ͻ�Ͷ��</a></li>
					<li><a href="index.php?user&q=code/borrow/myuser_account" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="myuser_account"): ?> class="onn"<? endif; ?>>ͳ����Ϣ</a></li>
				</ul>

				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="borrow_vouch" ||   $this->magic_vars['_U']['query_type']=="borrow_vouched"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/borrow_vouch" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="borrow_vouch"): ?> class="onn"<? endif; ?>>�����Ľ��</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/borrow_vouched" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="borrow_vouched"): ?> class="onn"<? endif; ?>>��ͨ�������Ľ��</a></li>
				</ul>

				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="care" ||  $this->magic_vars['_U']['query_type']=="borrow_reply"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/care" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="care"): ?> class="onn"<? endif; ?>>�ҹ�ע�Ľ��</a></li>
					<!--<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/borrow_reply" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="borrow_reply"): ?> class="onn"<? endif; ?>>�����߻ظ�</a></li>-->
				</ul>

				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="amount" ||  $this->magic_vars['_U']['query_type']=="amount_list"  ||  $this->magic_vars['_U']['query_type']=="amount_log"): ?>	
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/amount" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="amount"): ?> class="onn"<? endif; ?>>�������</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/amount_list" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="amount_list"): ?>class="onn"<? endif; ?>>�����¼</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/amount_log" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="amount_log"): ?>class="onn"<? endif; ?>>��ȼ�¼</a></li>
				</ul>

				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="repaylog"): ?>	
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repaylog" class="onn">���ͳ��</a></li>
				</ul>
				<? else: ?>
				<ul>
                  <!--<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/shenqing" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="shenqing"): ?> class="onn"<? endif; ?>>�������</a></li>-->
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/publish" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="publish"): ?> class="onn"<? endif; ?>>�����б�Ľ��</a></li>
				</ul>
				<? endif; ?>
			</div>

		<div class="us_r_bor1">
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="amount" ||  $this->magic_vars['_U']['query_type']=="amount_list"  ||  $this->magic_vars['_U']['query_type']=="amount_log"): ?>
		
		<? $this->magic_include(array('file' => "user_borrow_amount.html", 'vars' => array()));?>
        <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="shenqing"): ?>
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<form action="" method="post">
			<tr class="ytit">
				<td colspan="11">�ҵĽ������</td>
			</tr>
			<tr class="ytit1" >
				<td  >ID</td>
				<td   nowrap="nowrap">��ҵ����/��ʵ����</td>
				<td   nowrap="nowrap">�ֻ�</td>
				<td   nowrap="nowrap">�����</td>
				<td   nowrap="nowrap">�������</td>
				<td   nowrap="nowrap">�����;</td>
				<td   nowrap="nowrap">���ʽ</td>
				<td   nowrap="nowrap">�������</td>
				<td   nowrap="nowrap">����ʱ��</td>
				<td   nowrap="nowrap">״̬</td>
				<td   nowrap="nowrap">����</td>
			</tr>
			<? $this->magic_vars['query_type']='GetshenqingList';$data = array('var'=>'loop','status'=>'0,1,2','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetshenqingList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?> >
			<td  width="40" ><? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']+1; ?></td>
				<td  width="100"><? if (!isset($this->magic_vars['item']['b_enterprise'])) $this->magic_vars['item']['b_enterprise'] = ''; echo $this->magic_vars['item']['b_enterprise']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['b_phone'])) $this->magic_vars['item']['b_phone'] = ''; echo $this->magic_vars['item']['b_phone']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>Ԫ</td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']< 10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>����
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>����
                            	<? endif; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_use'])) $this->magic_vars['item']['borrow_use'] = '';$_tmp = $this->magic_vars['item']['borrow_use'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_use");echo $_tmp;unset($_tmp); ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_style'])) $this->magic_vars['item']['borrow_style'] = '';$_tmp = $this->magic_vars['item']['borrow_style'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_type'])) $this->magic_vars['item']['borrow_type']=''; ;if (  $this->magic_vars['item']['borrow_type']==2): ?><font color="#FF0000">��������</font><? if (!isset($this->magic_vars['item']['borrow_type'])) $this->magic_vars['item']['borrow_type']=''; ;elseif (  $this->magic_vars['item']['borrow_type']==3): ?><font color="#FF0000">��Ѻ���</font><? else: ?>��ͨ����<? endif; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>

				<td  ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>���ڴ���<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?>�ɹ�<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>δ��׼<? else: ?>-<? endif; ?></td>
				<td   nowrap="nowrap"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?><a href="/borrow_list/index.html">�������</a><? else: ?>-<? endif; ?></td>
			</tr>
			<? endforeach; endif; unset($_from); ?>
			</form>
		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="zhongchou"): ?>
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<form action="" method="post">
			<tr class="ytit">
				<td colspan="11">��֧�ֵ���Ŀ</td>
			</tr>
			<tr class="ytit1" >
				<td  >ID</td>
				<td   nowrap="nowrap">��Ŀ����</td>
				<td   nowrap="nowrap">���ʽ��</td>
				<td   nowrap="nowrap">�ѳ���</td>
				<td   nowrap="nowrap">��������</td>
				<td   nowrap="nowrap">��Ŀ���</td>
				<td   nowrap="nowrap">Ͷ�ʽ��</td>
				<td   nowrap="nowrap">Ͷ��ʱ��</td>
				<td   nowrap="nowrap">״̬</td>
			</tr>
			<? $this->magic_vars['query_type']='GetRauseTenderList';$data = array('var'=>'loop','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetRauseTenderList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?> >
			<td  width="40" ><? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']+1; ?></td>
				<td  width="100"><a href="/zhongchou/a<? if (!isset($this->magic_vars['item']['raise_id'])) $this->magic_vars['item']['raise_id'] = ''; echo $this->magic_vars['item']['raise_id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['raise_name'])) $this->magic_vars['item']['raise_name'] = ''; echo $this->magic_vars['item']['raise_name']; ?></a></td>
				<td  ><? if (!isset($this->magic_vars['item']['raise_account'])) $this->magic_vars['item']['raise_account'] = ''; echo $this->magic_vars['item']['raise_account']; ?>Ԫ</td>
				<td  ><? if (!isset($this->magic_vars['item']['raise_account_yes'])) $this->magic_vars['item']['raise_account_yes'] = ''; echo $this->magic_vars['item']['raise_account_yes']; ?>Ԫ</td>
				<td  ><? if (!isset($this->magic_vars['item']['raise_period'])) $this->magic_vars['item']['raise_period'] = ''; echo $this->magic_vars['item']['raise_period']; ?>��</td>
				<td  ><? if (!isset($this->magic_vars['item']['raise_type'])) $this->magic_vars['item']['raise_type'] = '';$_tmp = $this->magic_vars['item']['raise_type'];$_tmp = $this->magic_modifier("linkages",$_tmp,"raise_type");echo $_tmp;unset($_tmp); ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['tender_account'])) $this->magic_vars['item']['tender_account'] = ''; echo $this->magic_vars['item']['tender_account']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>

				<td  ><? if (!isset($this->magic_vars['item']['raise_status'])) $this->magic_vars['item']['raise_status']=''; ;if (  $this->magic_vars['item']['raise_status']==0): ?><? if (!isset($this->magic_vars['item']['end_day'])) $this->magic_vars['item']['end_day']=''; ;if (  $this->magic_vars['item']['end_day']>=0): ?>������<? else: ?>�ѽ���<? endif; ?><? if (!isset($this->magic_vars['item']['raise_status'])) $this->magic_vars['item']['raise_status']=''; ;elseif (  $this->magic_vars['item']['raise_status']==1): ?>���ʳɹ�<? if (!isset($this->magic_vars['item']['raise_status'])) $this->magic_vars['item']['raise_status']=''; ;elseif (  $this->magic_vars['item']['raise_status']==2): ?>����ʧ��<? else: ?>-<? endif; ?></td>
				
			</tr>
			<? endforeach; endif; unset($_from); ?>
			</form>
		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="publish"): ?>
		<!--�����б� ��ʼ-->
		<div class="t20">
		<div>
		����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  �ؼ��֣�<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="����"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/publish')" />
		</div>
		</div>
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<form action="" method="post">
			<tr class="ytit">
				<td colspan="11">�����б�Ľ��</td>
			</tr>
			<tr class="ytit1" >
				<td  >����</td>
				<td  >����</td>
			
				<td  >���ʽ</td>
				<td  >���(Ԫ)</td>
				<td  >������</td>
				<td  >����</td>
				<td  >����ʱ��</td>
				<td  >����</td>
				<td  >״̬</td>
				<td  >����</td>
			</tr>
			<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','is_flow'=>'2','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','status'=>'0,1,2,4,5,6','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?> >
				<td ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>
				<td  ><? if (!isset($this->magic_vars['item']['vouch_status'])) $this->magic_vars['item']['vouch_status']=''; ;if (  $this->magic_vars['item']['vouch_status']==1): ?>������<? if (!isset($this->magic_vars['item']['is_jin'])) $this->magic_vars['item']['is_jin']=''; ;elseif (  $this->magic_vars['item']['is_jin']==1): ?>��ֵ��<? if (!isset($this->magic_vars['item']['is_flow'])) $this->magic_vars['item']['is_flow']=''; ;elseif (  $this->magic_vars['item']['is_flow']==1): ?>��ת��<? if (!isset($this->magic_vars['item']['fast_status'])) $this->magic_vars['item']['fast_status']=''; ;elseif (  $this->magic_vars['item']['fast_status']==1): ?>����<? else: ?>��ͨ��<? endif; ?></td>
		
				<td  ><? if (!isset($this->magic_vars['item']['borrow_style'])) $this->magic_vars['item']['borrow_style'] = '';$_tmp = $this->magic_vars['item']['borrow_style'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>Ԫ</td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?> %</td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>����
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>����
                            	<? endif; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_account_scale'])) $this->magic_vars['item']['borrow_account_scale'] = ''; echo $this->magic_vars['item']['borrow_account_scale']; ?>%</td>
				<td  ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>����������<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?><? if (!isset($this->magic_vars['item']['borrow_account_scale'])) $this->magic_vars['item']['borrow_account_scale']=''; ;if (  $this->magic_vars['item']['borrow_account_scale']==100): ?><? if (!isset($this->magic_vars['item']['is_flow'])) $this->magic_vars['item']['is_flow']=''; ;if (  $this->magic_vars['item']['is_flow']==1): ?>�ѹ���<? else: ?>���������<? endif; ?><? else: ?>����ļ��<? endif; ?><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>���ʧ��<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==3): ?>������<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==4): ?>�������ʧ��<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==5): ?>����<? endif; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']='';if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0 &&  $this->magic_vars['item']['status']!=3): ?><a href="#" onclick="javascript:if(confirm('ȷ��Ҫ���ش��б�')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/cancel&borrow_nid=<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>'">����</a><? else: ?>-<? endif; ?></td>
			</tr>
			<? endforeach; endif; unset($_from); ?>
			</form>
		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
		<? unset($_magic_vars); ?>
		


		<!--�����б� ����-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="repaylog"): ?>

		<? $data = array('user_id'=>$this->magic_vars['_G']['user_id'],'var'=>'item');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['item'] = borrowClass::GetUserCount($data);if(!is_array($this->magic_vars['item'])){ $this->magic_vars['item']=array();}?>
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit">
				<td colspan="4">���˽��ͳ��</td>
			</tr>
			<tr>
				<td width="25%">�ܽ�����</td>
				<td width="25%"><? if (!isset($this->magic_vars['item']['borrow_account'])) $this->magic_vars['item']['borrow_account'] = '';$_tmp = $this->magic_vars['item']['borrow_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>Ԫ</td>
				<td width="25%">����������</td>
				<td width="25%"><? if (!isset($this->magic_vars['item']['borrow_times'])) $this->magic_vars['item']['borrow_times'] = '';$_tmp = $this->magic_vars['item']['borrow_times'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>��</td>
			</tr>
			<tr>
				<td>�ѻ���Ϣ</td>
				<td><? if (!isset($this->magic_vars['item']['borrow_repay_yes'])) $this->magic_vars['item']['borrow_repay_yes'] = '';$_tmp = $this->magic_vars['item']['borrow_repay_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>Ԫ</td>
				<td>�ɹ�������</td>
				<td><? if (!isset($this->magic_vars['item']['borrow_success_times'])) $this->magic_vars['item']['borrow_success_times'] = '';$_tmp = $this->magic_vars['item']['borrow_success_times'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>��</td>
			</tr>
			<tr>
				<td>������Ϣ</td>
				<td><? if (!isset($this->magic_vars['item']['borrow_repay_wait'])) $this->magic_vars['item']['borrow_repay_wait'] = '';$_tmp = $this->magic_vars['item']['borrow_repay_wait'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>Ԫ</td>
				<td>������������</td>
				<td><? if (!isset($this->magic_vars['item']['borrow_repay_yes_times'])) $this->magic_vars['item']['borrow_repay_yes_times'] = '';$_tmp = $this->magic_vars['item']['borrow_repay_yes_times'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>��</td>
			</tr>
			<tr>
				<td>��������</td>
				<td><? if (!isset($this->magic_vars['item']['borrow_repay_wait_times'])) $this->magic_vars['item']['borrow_repay_wait_times'] = '';$_tmp = $this->magic_vars['item']['borrow_repay_wait_times'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>��</td>
				<td>��Ȩƽ������</td>
				<td><? if (!isset($this->magic_vars['item']['borrow_interest_scale'])) $this->magic_vars['item']['borrow_interest_scale'] = '';$_tmp = $this->magic_vars['item']['borrow_interest_scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%</td>
			</tr>
			<tr>
				<td>����֧��</td>
				<td><? if (!isset($this->magic_vars['item']['award_lower'])) $this->magic_vars['item']['award_lower'] = '';$_tmp = $this->magic_vars['item']['award_lower'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>Ԫ</td>
				<td></td>
				<td></td>
			</tr>
		</table>
		</div>
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit">
				<td colspan="4">�������ͳ��</td>
			</tr>
			<tr>
				<td width="25%">���ڴ���</td>
				<td width="25%"><? if (!isset($this->magic_vars['item']['late_nums'])) $this->magic_vars['item']['late_nums'] = '';$_tmp = $this->magic_vars['item']['late_nums'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>��</td>
				<td width="25%">���ڷ�Ϣ</td>
				<td width="25%"><? if (!isset($this->magic_vars['item']['latemoney'])) $this->magic_vars['item']['latemoney'] = '';$_tmp = $this->magic_vars['item']['latemoney'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>Ԫ</td>
			</tr>
		</table>
		</div>
		
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit">
				<td colspan="4">��ǰ����ͳ��</td>
			</tr>
			<tr>
				<td width="25%">��ǰ��������</td>
				<td width="25%"><? if (!isset($this->magic_vars['item']['advance_repay_times'])) $this->magic_vars['item']['advance_repay_times'] = '';$_tmp = $this->magic_vars['item']['advance_repay_times'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>��</td>
				<td width="25%">��ǰ����ΥԼ��</td>
				<td width="25%"><? if (!isset($this->magic_vars['item']['borrow_weiyue'])) $this->magic_vars['item']['borrow_weiyue'] = '';$_tmp = $this->magic_vars['item']['borrow_weiyue'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>Ԫ</td>
			</tr>
		</table>
		</div>
		<? unset($_magic_vars);unset($data); ?>
		


		


		<!--��δ���� ��ʼ-->


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="unpublish"): ?>
		<div class="t20">
		<div>
		����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  �ؼ��֣�<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="����"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/unpublish')" />
		</div>
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
		  <form action="" method="post">
			<tr class="ytit">
				<td colspan="6">��δ�����Ľ��</td>
			</tr>

				<tr class="ytit1" >


					<td  >����</td>


					<td  >���(Ԫ)</td>


					<td  >������</td>


					<td  >����</td>


					<td  >����ʱ��</td>


					<td  >����</td>


				</tr>


				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','status'=>'-1','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					


					<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>(Ԫ)</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?> %</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>����
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>����
                            	<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>


					<td  ><a href="/publish/index.html?article_id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">�༭</a> <a href="#" onclick="javascript:if(confirm('ȷ��Ҫɾ�����б�')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">ɾ��</a></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>
			</form>	
		</table>
		</div>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
		

		<? unset($_magic_vars); ?>
		<!--��δ���� ����-->


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="repayment" ||   $this->magic_vars['_U']['query_type']=="repaymentyes"): ?>


		<!--���ڻ���Ľ�� ��ʼ-->

		<div class="t20">
		<div> 


		����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  �ؼ��֣�<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 


		<input value="����"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type'] = ''; echo $this->magic_vars['_U']['query_type']; ?>')" />


		</div>
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">

			  <form action="" method="post">


				


				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="repayment"): ?>
				
			<tr class="ytit">
				<td colspan="11">���ڻ���Ľ��</td>
			</tr>

				<tr class="ytit1" >


					<td  >����</td>


					<td  >Э��</td>


					<td  >�������</td>


					<td  >�����</td>


					<td  >������</td>


					<td  >��������</td>


					<td  >���ʱ��</td>


					<td  >������Ϣ</td>


					<td  >�ѻ���Ϣ</td>


					<td  >δ����Ϣ</td>


					<td  >����</td>


				</tr>


				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','is_flow'=>'2','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','query_type'=>'repay_no','status'=>'3','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><a href="/protocol/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank">�鿴Э��</a></td>


					<td  ><? if (!isset($this->magic_vars['item']['vouch_status'])) $this->magic_vars['item']['vouch_status']=''; ;if (  $this->magic_vars['item']['vouch_status']==1): ?>������<? if (!isset($this->magic_vars['item']['is_jin'])) $this->magic_vars['item']['is_jin']=''; ;elseif (  $this->magic_vars['item']['is_jin']==1): ?>��ֵ��<? if (!isset($this->magic_vars['item']['is_flow'])) $this->magic_vars['item']['is_flow']=''; ;elseif (  $this->magic_vars['item']['is_flow']==1): ?>��ת��<? if (!isset($this->magic_vars['item']['fast_status'])) $this->magic_vars['item']['fast_status']=''; ;elseif (  $this->magic_vars['item']['fast_status']==1): ?>����<? else: ?>��ͨ��<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>(Ԫ)</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?> %</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>����
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>����
                            	<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?> </td>


					<td  >��<? if (!isset($this->magic_vars['item']['repay_account_all'])) $this->magic_vars['item']['repay_account_all'] = ''; echo $this->magic_vars['item']['repay_account_all']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['repay_account_yes'])) $this->magic_vars['item']['repay_account_yes'] = '';$_tmp = $this->magic_vars['item']['repay_account_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['repay_account_wait'])) $this->magic_vars['item']['repay_account_wait'] = ''; echo $this->magic_vars['item']['repay_account_wait']; ?></td>


					<td  ><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repayment_view&borrow_nid=<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>">������ϸ</a></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


				<? else: ?>


				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','query_type'=>'repay_yes','status'=>'3','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
					
				<tr class="ytit">
					<td colspan="11">�ѻ���Ľ��</td>
				</tr>

				<tr class="ytit1" >


					<td  >����</td>


					<td  >Э��</td>


					<td  >�������</td>


					<td  >�����</td>


					<td  >������</td>


					<td  >��������</td>


					<td  >���ʱ��</td>


					<td  >������Ϣ</td>


					<td  >�ѻ���Ϣ</td>


					<td  >�ѻ����ڷ�Ϣ</td>


					<td  >����</td>


				</tr>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><a href="/protocol/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank">�鿴Э��</a></td>


					<td  ><? if (!isset($this->magic_vars['item']['vouch_status'])) $this->magic_vars['item']['vouch_status']=''; ;if (  $this->magic_vars['item']['vouch_status']==1): ?>������<? if (!isset($this->magic_vars['item']['is_jin'])) $this->magic_vars['item']['is_jin']=''; ;elseif (  $this->magic_vars['item']['is_jin']==1): ?>��ֵ��<? if (!isset($this->magic_vars['item']['is_flow'])) $this->magic_vars['item']['is_flow']=''; ;elseif (  $this->magic_vars['item']['is_flow']==1): ?>��ת��<? if (!isset($this->magic_vars['item']['fast_status'])) $this->magic_vars['item']['fast_status']=''; ;elseif (  $this->magic_vars['item']['fast_status']==1): ?>����<? else: ?>��ͨ��<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>(Ԫ)</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?> %</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>����
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>����
                            	<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['repay_account_all'])) $this->magic_vars['item']['repay_account_all'] = ''; echo $this->magic_vars['item']['repay_account_all']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['repay_account_yes'])) $this->magic_vars['item']['repay_account_yes'] = '';$_tmp = $this->magic_vars['item']['repay_account_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['late_interest'])) $this->magic_vars['item']['late_interest'] = '';$_tmp = $this->magic_vars['item']['late_interest'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td  ><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repayment_view&borrow_nid=<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>" >������ϸ</a></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


				<? endif; ?>


			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
		


				<? unset($_magic_vars); ?>

		<!--���ڻ���Ľ�� ����-->


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="repaymentplan"): ?>


		<!--������ϸ ��ʼ-->

		
		<div class="t20">
		<div>


		����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  �ؼ��֣�<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 


		<input value="����"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repaymentplan')" />


		</div>

		</div>
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">
				<tr class="ytit">
					<td colspan="10">������ϸ</td>
				</tr>

				<tr class="ytit1" >


					<td  >����</td>


					<td  >�ڼ���</td>


					<td  >Ӧ��������</td>


					<td  >����Ӧ����Ϣ</td>


					<td  >��Ϣ</td>


					<td  >������Ϣ</td>


					<td  >��������</td>


					<td  >����״̬</td>

					<td  >���ڻ���</td>

					<td  >��ǰȫ���</td>


				</tr>
				
				<? $data = array('var'=>'Vvar','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['Vvar'] = usersClass::GetUsersVip($data);if(!is_array($this->magic_vars['Vvar'])){ $this->magic_vars['Vvar']=array();}?>
				<? $this->magic_vars['query_type']='GetBorrowRepayList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','order'=>'repay_time','repay_status'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetBorrowRepayList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>

					<td title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['repay_period'])) $this->magic_vars['item']['repay_period'] = ''; echo $this->magic_vars['item']['repay_period']+1; ?>/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['repay_time'])) $this->magic_vars['item']['repay_time'] = '';$_tmp = $this->magic_vars['item']['repay_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['repay_account'])) $this->magic_vars['item']['repay_account'] = ''; echo $this->magic_vars['item']['repay_account']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['repay_interest'])) $this->magic_vars['item']['repay_interest'] = ''; echo $this->magic_vars['item']['repay_interest']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['late_interest'])) $this->magic_vars['item']['late_interest'] = ''; echo $this->magic_vars['item']['late_interest']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days'] = ''; echo $this->magic_vars['item']['late_days']; ?>��</td>


					<td  ><? if (!isset($this->magic_vars['item']['repay_web'])) $this->magic_vars['item']['repay_web']=''; ;if (  $this->magic_vars['item']['repay_web']==1): ?>��վ�渶<? if (!isset($this->magic_vars['item']['repay_vouch'])) $this->magic_vars['item']['repay_vouch']=''; ;elseif (  $this->magic_vars['item']['repay_vouch']==1): ?>�����ߵ渶<? if (!isset($this->magic_vars['item']['repay_status'])) $this->magic_vars['item']['repay_status']=''; ;elseif (  $this->magic_vars['item']['repay_status']==1): ?>�ѻ���<? else: ?>δ����<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['repay_status'])) $this->magic_vars['item']['repay_status']=''; ;if (  $this->magic_vars['item']['repay_status']!=1): ?>
					
					
					
					<? if (!isset($this->magic_vars['item']['is_flow'])) $this->magic_vars['item']['is_flow']=''; ;if (  $this->magic_vars['item']['is_flow']==1): ?>
					�Զ�����
					<? else: ?>
					<a href="#" onclick="javascript:if(confirm('��ȷ��Ҫ�����˽����')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repay&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>&borrow_nid=<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>'">����</a>
					<? endif; ?>
					
					<? else: ?>-<? endif; ?></td>
					<td>
					<? if (!isset($this->magic_vars['item']['repay_status'])) $this->magic_vars['item']['repay_status']='';if (!isset($this->magic_vars['item']['advance_status'])) $this->magic_vars['item']['advance_status']='';if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days']='';if (!isset($this->magic_vars['Vvar']['vip_type'])) $this->magic_vars['Vvar']['vip_type']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['repay_status']!=1 and  $this->magic_vars['item']['advance_status']==1 and  $this->magic_vars['item']['late_days']==0 and  $this->magic_vars['Vvar']['vip_type']==2 and  $this->magic_vars['item']['borrow_period']>11): ?>
						<a href="#" onclick="javascript:if(confirm('��ǰ���һ���Գ���ʣ�౾���Ұ�ʣ�౾��*1%����ΥԼ��')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repay&borrow_nid=<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>'">��ǰȫ���</a>
					<? else: ?>
						-
					<? endif; ?>
					</td>


				</tr>


				<? endforeach; endif; unset($_from); ?>
			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
		<? unset($_magic_vars); ?>
		<? unset($_magic_vars);unset($data); ?>
		<!--������ϸ ����-->

		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="loandetail"): ?>


		<!--�����ϸ ��ʼ-->
		<div class="t20">
			<div> 
			Ͷ���ߣ�<input type="text" name="username" id="username" size="15" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
			<input value="����"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/loandetail')" />
			</div>
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">
				
			<tr class="ytit">
				<td colspan="7">�����ϸ��</td>
			</tr>

				<tr class="ytit1" >


					<td  >Ͷ���� </td>


					<td  >�����ܶ�</td>


					<td  >�����ܶ�</td>


					<td  >�ѻ���Ϣ</td>


					<td  >�ѻ���Ϣ</td>


					<td  >�����ܶ�</td>


					<td  >������Ϣ</td>


				</tr>


				<? $this->magic_vars['query_type']='GetTenderList';$data = array('var'=>'loop','showpage'=>'3','borrow_status'=>'3','borrow_userid'=>$this->magic_vars['_G']['user_id'],'username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>

				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>

				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>

					<td  ><font color="#FF0000">��<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></font></td>


					<td  >��<? if (!isset($this->magic_vars['item']['recover_account_yes'])) $this->magic_vars['item']['recover_account_yes'] = '';$_tmp = $this->magic_vars['item']['recover_account_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['recover_account_interest_yes'])) $this->magic_vars['item']['recover_account_interest_yes'] = '';$_tmp = $this->magic_vars['item']['recover_account_interest_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['late_interest'])) $this->magic_vars['item']['late_interest'] = '';$_tmp = $this->magic_vars['item']['late_interest'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['recover_account_wait'])) $this->magic_vars['item']['recover_account_wait'] = '';$_tmp = $this->magic_vars['item']['recover_account_wait'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['recover_account_interest_wait'])) $this->magic_vars['item']['recover_account_interest_wait'] = '';$_tmp = $this->magic_vars['item']['recover_account_interest_wait'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>
			</form>	
		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
				<? unset($_magic_vars); ?>

		<!--�����ϸ ����-->

		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="full_check"): ?>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit">
				<td colspan="9">�������</td>
			</tr>

			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >����</td>


					<td  >����</td>


					<td  >���ʽ</td>


					<td  >���(Ԫ)</td>


					<td  >������</td>


					<td  >����</td>


					<td  >����ʱ��</td>


					<td  >����</td>


					<td  >״̬</td>

				</tr>


				<? $this->magic_vars['query_type']='GetList';$data = array('showpage'=>'3','user_id'=>$this->magic_vars['_G']['user_id'],'var'=>'loop','query_type'=>'full_status');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?> >


					<td ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['vouch_status'])) $this->magic_vars['item']['vouch_status']=''; ;if (  $this->magic_vars['item']['vouch_status']==1): ?>������<? if (!isset($this->magic_vars['item']['is_jin'])) $this->magic_vars['item']['is_jin']=''; ;elseif (  $this->magic_vars['item']['is_jin']==1): ?>��ֵ��<? if (!isset($this->magic_vars['item']['is_flow'])) $this->magic_vars['item']['is_flow']=''; ;elseif (  $this->magic_vars['item']['is_flow']==1): ?>��ת��<? if (!isset($this->magic_vars['item']['fast_status'])) $this->magic_vars['item']['fast_status']=''; ;elseif (  $this->magic_vars['item']['fast_status']==1): ?>����<? else: ?>��ͨ��<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_style'])) $this->magic_vars['item']['borrow_style'] = '';$_tmp = $this->magic_vars['item']['borrow_style'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>Ԫ</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?> %</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>����
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>����
                            	<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_account_scale'])) $this->magic_vars['item']['borrow_account_scale'] = ''; echo $this->magic_vars['item']['borrow_account_scale']; ?>%</td>


					<td  ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==3): ?>����ɹ�<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==4): ?>����ʧ��<? else: ?>�ȴ�����<? endif; ?></td>

				</tr>


				<? endforeach; endif; unset($_from); ?>


			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>


				<? unset($_magic_vars); ?>

		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="borrow_reply"): ?>


		<!--�����߻ظ� ��ʼ-->
		<div class="t20">
		�����ڲ鿴����:<select name="status" id="status"> <option value="" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==""): ?>selected<? endif; ?>>���лظ�</option> <option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?>selected<? endif; ?>>���һظ�</option> <option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="1"): ?>selected<? endif; ?>>�ѻظ�</option></select>
		<input value="����"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/borrow_reply')"/>
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">
			<tr class="ytit">
				<td colspan="4">�����߻ظ�</td>
			</tr>


				<tr class="ytit1" >


					<td  >�ҵ�����</td>


					<td  >�ظ�����</td>


					<td  >�ظ�ʱ��</td>


					<td  >����</td>


				</tr>


				<? $this->magic_vars['query_type']='GetBorrowComment';$data = array('var'=>'loop','showpage'=>'3','code'=>'borrow','user_id'=>'0','status'=>isset($_REQUEST['status'])?$_REQUEST['status']:'','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetBorrowComment($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><? if (!isset($this->magic_vars['item']['contents'])) $this->magic_vars['item']['contents'] = ''; echo $this->magic_vars['item']['contents']; ?> </td>


					<td  ><? if (!isset($this->magic_vars['item']['reply_remark'])) $this->magic_vars['item']['reply_remark'] = '';$_tmp = $this->magic_vars['item']['reply_remark'];$_tmp = $this->magic_modifier("default",$_tmp,"δ�ظ�");echo $_tmp;unset($_tmp); ?> </td>


					<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?> </td>


					<td  ><a href="/invest/a<? if (!isset($this->magic_vars['item']['article_id'])) $this->magic_vars['item']['article_id'] = ''; echo $this->magic_vars['item']['article_id']; ?>.html" target="_blank">�鿴���ԵĽ��</a></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


			</form>	


		</table>
		</div>
		<? unset($_magic_vars); ?>
		<!--Ͷ�������� ����-->


		


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="tender_comment"): ?>


		<? if (!isset($_REQUEST['id'])) $_REQUEST['id']=''; ;if (  $_REQUEST['id']!=""): ?>


		<div> 


		������ڴ˻ظ�Ͷ���ߵ����ʣ�����д����ϸ�㡣


		</div>


		<form action="" method="post">


		


		<div class="user_right_border">


			<div class="e"> �����ߣ�</div>


			<div class="c">


				<? if (!isset($this->magic_vars['_U']['comment_result']['username'])) $this->magic_vars['_U']['comment_result']['username'] = ''; echo $this->magic_vars['_U']['comment_result']['username']; ?>


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e"> ����ʱ�䣺</div>


			<div class="c">


				<? if (!isset($this->magic_vars['_U']['comment_result']['addtime'])) $this->magic_vars['_U']['comment_result']['addtime'] = '';$_tmp = $this->magic_vars['_U']['comment_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e"> �������ݣ�</div>


			<div class="c">


				<? if (!isset($this->magic_vars['_U']['comment_result']['comment'])) $this->magic_vars['_U']['comment_result']['comment'] = ''; echo $this->magic_vars['_U']['comment_result']['comment']; ?><input type="hidden" name="article_userid" value="<? if (!isset($this->magic_vars['_U']['comment_result']['article_userid'])) $this->magic_vars['_U']['comment_result']['article_userid'] = ''; echo $this->magic_vars['_U']['comment_result']['article_userid']; ?>" />


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e"> ״̬��</div>


			<div class="c">


				<? if (!isset($this->magic_vars['_U']['comment_result']['reply_status'])) $this->magic_vars['_U']['comment_result']['reply_status']=''; ;if (  $this->magic_vars['_U']['comment_result']['reply_status']==1): ?>�ѻظ�<? else: ?>δ�ظ�<? endif; ?>


			</div>


		</div>


		


		


		<div class="user_right_border">


			<div class="e">�ظ���</div>


			<div class="c">


				<textarea rows="5" cols="40" name="reply_remark"><? if (!isset($this->magic_vars['_U']['comment_result']['reply_remark'])) $this->magic_vars['_U']['comment_result']['reply_remark'] = ''; echo $this->magic_vars['_U']['comment_result']['reply_remark']; ?></textarea>


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e"></div>


			<div class="c">


				<input type="submit" name="name"  value="ȷ���ύ"  class="xinbuton" 
 size="30" /> 


			</div>


		</div>


		</form>


		<? else: ?>


		<!--Ͷ�������� ��ʼ-->


		<div class="t20">


		�����ڲ鿴����:<select name="reply_status"  id="reply_status"> <option value="">���лظ�</option> <option value="0" <? if (!isset($_REQUEST['reply_status'])) $_REQUEST['reply_status']=''; ;if (  $_REQUEST['reply_status']==0): ?> selected="selected"<? endif; ?>>���һظ�</option> <option value="1" <? if (!isset($_REQUEST['reply_status'])) $_REQUEST['reply_status']=''; ;if (  $_REQUEST['reply_status']==1): ?> selected="selected"<? endif; ?>>�ѻظ�</option></select>


		<input value="����"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/tender_comment')"/>


		</div>


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >������</td>


					<td  >��������</td>


					<td  >����ʱ��</td>


					<td  >����״̬</td>


					<td  >���Իظ�</td>


					<td  >����</td>


				</tr>


				<? $this->magic_vars['query_type']='GetBorrowComment';$data = array('var'=>'loop','showpage'=>'3','type'=>'tender','user_id'=>'0','reply_status'=>isset($_REQUEST['reply_status'])?$_REQUEST['reply_status']:'','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetBorrowComment($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['comment'])) $this->magic_vars['item']['comment'] = ''; echo $this->magic_vars['item']['comment']; ?> </td>


					<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?> </td>


					<td  ><? if (!isset($this->magic_vars['item']['reply_status'])) $this->magic_vars['item']['reply_status']=''; ;if (  $this->magic_vars['item']['reply_status']==0): ?>δ�ظ�<? else: ?>�ѻظ�<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['reply_remark'])) $this->magic_vars['item']['reply_remark'] = '';$_tmp = $this->magic_vars['item']['reply_remark'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?> </td>


					<td  ><a href="/?user&q=code/borrow/tender_comment&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">�ظ�����</a></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


				<tr >


					<td colspan="8" class="page">


						<? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?>


					</td>


				</tr>


				<? unset($_magic_vars); ?>


			</form>	


		</table>


		<!--�����߻ظ� ����-->


		<? endif; ?>


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="limitapp"): ?>


		<!--������� ��ʼ-->


		<div class="t20"> 


		�������ԭ����ÿ���������1��


		</div>


		<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']!=1): ?>


			<div align="center"><font color="#FF0000"><br />


<br />


<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>�����㣺</font>�㻹����VIP��Ա�����ȳ�Ϊ<a href="/vip/index.html"><strong>VIP��Ա</strong></a>��</div><br /><br /><br />





		<? else: ?>


		<? $data = array('user_id'=>'0','var'=>'var','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::GetAmountApplyOne($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>


		<form action="" method="post">


		<div class="user_right_border">


			<div class="e">�����ߣ�</div>


			<div class="c">


				<? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?>


			</div>


		</div>


		<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==2): ?>


		<div class="user_right_border">


			<div class="e"> ״̬��</div>


			<div class="c">


				���������


			</div>


		</div>


		<div class="user_right_border">


			<div class="e"> �������ͣ�</div>


			<div class="c">


				<? if (!isset($this->magic_vars['var']['type'])) $this->magic_vars['var']['type']=''; ;if (  $this->magic_vars['var']['type']=="vouch"): ?>Ͷ�ʵ������<? if (!isset($this->magic_vars['var']['type'])) $this->magic_vars['var']['type']=''; ;elseif (  $this->magic_vars['var']['type']=="borrowvouch"): ?>�������<? else: ?>������ö��<? endif; ?>


			</div>


		</div>


		<div class="user_right_border">


			<div class="e"> �����</div>


			<div class="c">


				<? if (!isset($this->magic_vars['var']['account'])) $this->magic_vars['var']['account'] = ''; echo $this->magic_vars['var']['account']; ?>


			</div>


		</div>


		<div class="user_right_border">


			<div class="e">��ϸ˵����</div>


			<div class="c">


				<? if (!isset($this->magic_vars['var']['content'])) $this->magic_vars['var']['content'] = ''; echo $this->magic_vars['var']['content']; ?>


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e">�����ط������ϸ˵����</div>


			<div class="c">


			<? if (!isset($this->magic_vars['var']['remark'])) $this->magic_vars['var']['remark'] = ''; echo $this->magic_vars['var']['remark']; ?>


			</div>


		</div>


		


		<? else: ?>


		


		<div class="user_right_border">


			<div class="e"> �������ͣ�</div>


			<div class="c">


				<select name="type"><option value="credit" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="credit"): ?> selected="selected"<? endif; ?>>������ö��</option><option value="tender_vouch" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="tender_vouch"): ?> selected="selected"<? endif; ?>>Ͷ�ʵ������</option>


<option value="borrow_vouch" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="borrow_vouch"): ?> selected="selected"<? endif; ?>>�������</option>				


				</select>


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e"> �����</div>


			<div class="c">


				<input type="text" name="account" value="" /> 


			</div>


		</div>


		


		


		<div class="user_right_border">


			<div class="e">��ϸ˵����</div>


			<div class="c">


				<textarea rows="5" cols="40" name="content"></textarea>


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e">�����ط������ϸ˵����</div>


			<div class="c">


			<textarea rows="5" cols="40" name="remark"></textarea>


			</div>


		</div>


		


		


		<div class="user_right_border">


			<div class="e"></div>


			<div class="c">


				<input type="submit" name="name"  value="ȷ���ύ"  class="xinbuton" 
 size="30" /> 


			</div>


		</div>


		<? endif; ?>


		</form>


		


		<? unset($_magic_vars);unset($data); ?>


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >����ʱ��</td>


					<td  >��������</td>


					<td  >������(Ԫ)</td>


					<td  >ͨ�����(Ԫ)</td>


					<td  >��ע˵��</td>


					<td  >״̬</td>


					<td  >���ʱ��</td>


					<td  >��˱�ע</td>


				</tr>


				<? $this->magic_vars['query_type']='GetAmountApplyList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetAmountApplyList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>


					<td ><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type']=="tender_vouch"): ?>Ͷ�ʵ������<? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;elseif (  $this->magic_vars['item']['type']=="borrow_vouch"): ?>�������<? else: ?>������ö��<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['newaccount'])) $this->magic_vars['item']['newaccount'] = ''; echo $this->magic_vars['item']['newaccount']; ?></td>


					<td  width="300"><? if (!isset($this->magic_vars['item']['content'])) $this->magic_vars['item']['content'] = ''; echo $this->magic_vars['item']['content']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>��˲�ͨ��<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?>���ͨ��<? else: ?>�������<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['verify_time'])) $this->magic_vars['item']['verify_time'] = '';$_tmp = $this->magic_vars['item']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?> </td>


					<td  ><? if (!isset($this->magic_vars['item']['verify_remark'])) $this->magic_vars['item']['verify_remark'] = ''; echo $this->magic_vars['item']['verify_remark']; ?></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


				<tr >


					<td colspan="8" class="page">


						<? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?>


					</td>


				</tr>


				<? unset($_magic_vars); ?>


			</form>	


		</table>


		<div style="font-size:12px;">


		* ��ܰ��ʾ���������� ���������Ƿ���׼ �����һ���º�����ٴ����룬ÿ����ֻ������һ����������,����������ϵ


		</div>


		<!--������� ����-->


		<? endif; ?>


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="success"): ?>


		<!--�ɹ�Ͷ�� ��ʼ-->
		<div class="t20">
		����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  ���⣺<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="����"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/success')" />
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">
			<tr class="ytit">
				<td colspan="9"><? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="yes"): ?>������Ľ��<? else: ?>�����еĽ��<? endif; ?></td>
			</tr>


				<tr class="ytit1" >


					<td  >�����</td>


					<td  >����</td>


					<td  >�������</td>


					<td  >����ߵȼ�</td>


					<td  >������</td>


					<td  >����</td>


					<td  >Ͷ�ʽ��</td>


					<td  >���ձ�Ϣ</td>


					<td  >Э����</td>


					<!--<td  >��ϵ��ʽ</td>-->


				</tr>


				<? $this->magic_vars['query_type']='GetTenderBorrowList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','type'=>$_REQUEST['type'],'tender_status'=>'1','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderBorrowList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><a href="/index.php?user&q=code/message/sent&receive=<? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?>"><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></a></td>


					


					<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_style'])) $this->magic_vars['item']['borrow_style'] = '';$_tmp = $this->magic_vars['item']['borrow_style'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['credit']['approve_credit'])) $this->magic_vars['item']['credit']['approve_credit'] = '';$_tmp = $this->magic_vars['item']['credit']['approve_credit'];$_tmp = $this->magic_modifier("credit",$_tmp,"credit");echo $_tmp;unset($_tmp); ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>����
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>����
                            	<? endif; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['tender_account'])) $this->magic_vars['item']['tender_account'] = ''; echo $this->magic_vars['item']['tender_account']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['recover_account_yes'])) $this->magic_vars['item']['recover_account_yes'] = '';$_tmp = $this->magic_vars['item']['recover_account_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td  ><a href="/protocol/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank">�鿴Э����</a></td>


					<!--<td  ><a href=""><? if (!isset($this->magic_vars['item']['borrow_userqq'])) $this->magic_vars['item']['borrow_userqq']=''; ;if (  $this->magic_vars['item']['borrow_userqq']==""): ?>-<? else: ?><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<? if (!isset($this->magic_vars['item']['borrow_userqq'])) $this->magic_vars['item']['borrow_userqq'] = ''; echo $this->magic_vars['item']['borrow_userqq']; ?>&amp;site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<? if (!isset($this->magic_vars['item']['borrow_userqq'])) $this->magic_vars['item']['borrow_userqq'] = ''; echo $this->magic_vars['item']['borrow_userqq']; ?>:41" alt="" title=""></a><? endif; ?></a></td>-->


				</tr>


				<? endforeach; endif; unset($_from); ?>


			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>


				<? unset($_magic_vars); ?>

		<!--�ɹ�Ͷ�� ����-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="wait"): ?>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">
			<tr class="ytit">
				<td colspan="9">�����е�ծȨ</td>
			</tr>


				<tr class="ytit1" >


					<td  >�����</td>


					<td  >����</td>


					<td  >�������</td>


					<td  >����ߵȼ�</td>


					<td  >������</td>


					<td  >��������</td>


					<td  >Ͷ�ʽ��</td>


					<td  >���ս��</td>


					<td  >Э����</td>


				</tr>


				<? $this->magic_vars['query_type']='GetTenderBorrowList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','type'=>$_REQUEST['type'],'tender_status'=>'1','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderBorrowList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><a href="/index.php?user&q=code/message/sent&receive=<? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?>"><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></a></td>


					


					<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>

					<td  ><? if (!isset($this->magic_vars['item']['borrow_style'])) $this->magic_vars['item']['borrow_style'] = '';$_tmp = $this->magic_vars['item']['borrow_style'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></td>

					<td  ><? if (!isset($this->magic_vars['item']['credit']['approve_credit'])) $this->magic_vars['item']['credit']['approve_credit'] = '';$_tmp = $this->magic_vars['item']['credit']['approve_credit'];$_tmp = $this->magic_modifier("credit",$_tmp,"credit");echo $_tmp;unset($_tmp); ?></td>

					<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</td>

					<td  ><? if (!isset($this->magic_vars['item']['wait_times'])) $this->magic_vars['item']['wait_times'] = ''; echo $this->magic_vars['item']['wait_times']; ?>����</td>
					
					<td  >��<? if (!isset($this->magic_vars['item']['change_account'])) $this->magic_vars['item']['change_account'] = ''; echo $this->magic_vars['item']['change_account']; ?></td>

					<td  >��<? if (!isset($this->magic_vars['item']['recover_account_yes_all'])) $this->magic_vars['item']['recover_account_yes_all'] = '';$_tmp = $this->magic_vars['item']['recover_account_yes_all'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>

					<td  ><a href="/debt_protocol/a<? if (!isset($this->magic_vars['item']['change_id'])) $this->magic_vars['item']['change_id'] = ''; echo $this->magic_vars['item']['change_id']; ?>.html" target="_blank">ת��Э����</a></td>

				</tr>
				<? endforeach; endif; unset($_from); ?>
			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>


				<? unset($_magic_vars); ?>
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="debt_move"): ?>
		<div class="user_main_title1">
		<strong style="color:#ff0000">��ܰ��ʾ��</strong><br>
		1��ת����Ч�ھ�Ϊ7�졣<br>
		2��ծȨת�ø���վ����վ����ծȨ��׼Ϊ������������+������Ϣ��*70%��
		</div>
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit1" >
				<td  >Ͷ�����</td>
				<td  >����</td>
				<td  >��������/������</td>
				<td  >���ձ���</td>
				<td  >������Ϣ</td>
				<td  >ת�ü۸�</td>
				<td  >����ʱ��</td>
				<td  >����</td>
			</tr>
			
			<? $this->magic_vars['query_type']='GetChangeList';$data = array('status'=>'0,2,3,4','var'=>'loop','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetChangeList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<tr>
				<td  ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?></a></td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</td>
				<td  ><? if (!isset($this->magic_vars['item']['wait_times'])) $this->magic_vars['item']['wait_times'] = ''; echo $this->magic_vars['item']['wait_times']; ?>/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['recover_account_capital_wait'])) $this->magic_vars['item']['recover_account_capital_wait'] = ''; echo $this->magic_vars['item']['recover_account_capital_wait']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['recover_account_interest_wait'])) $this->magic_vars['item']['recover_account_interest_wait'] = ''; echo $this->magic_vars['item']['recover_account_interest_wait']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==3): ?>�����<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==4): ?>ת����վ�����<? else: ?><a href="javascript:void(0)" onclick="JqueryAjaxs('code/borrow/change','&cancel_id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>');">����</a>/<a href="javascript:void(0)" onclick="JqueryAjaxs('code/borrow/change','&web_id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>&account=<? if (!isset($this->magic_vars['item']['web_account'])) $this->magic_vars['item']['web_account'] = ''; echo $this->magic_vars['item']['web_account']; ?>');">ת�ø���վ</a></a><? endif; ?></td>
			</tr>
			<? endforeach; endif; unset($_from); ?>
		</table>
			<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
		<? unset($_magic_vars); ?>
		</div>
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="move_success"): ?>
		<div class="user_main_title1">
		<strong style="color:#ff0000">��ܰ��ʾ��</strong><br>
		1��ת����Ч�ھ�Ϊ7�졣<br>
		2��ծȨת�ø���վ����վ����ծȨ��׼Ϊ������������+������Ϣ��*70%��
		</div>
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit1" >
				<td  >Ͷ�����</td>
				<td  >ծȨת��Э����</td>
				<td  >����</td>
				<td  >��������/������</td>
				<td  >���ձ�Ϣ</td>
				<td  >ת�ü۸�</td>
				<td  >ת��ʱ��</td>
				<td  >������</td>
			</tr>
			<? $this->magic_vars['query_type']='GetChangeList';$data = array('status'=>'1','var'=>'loop','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetChangeList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<tr>
				<td  ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?></a></td>
				<td  ><a href="/debt_protocol/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html">Э����</a></td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</td>
				<td  ><? if (!isset($this->magic_vars['item']['count_all'])) $this->magic_vars['item']['count_all'] = ''; echo $this->magic_vars['item']['count_all']; ?>/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['recover_account_all'])) $this->magic_vars['item']['recover_account_all'] = ''; echo $this->magic_vars['item']['recover_account_all']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['web_status'])) $this->magic_vars['item']['web_status']=''; ;if (  $this->magic_vars['item']['web_status']==2): ?><? if (!isset($this->magic_vars['item']['web_buy'])) $this->magic_vars['item']['web_buy'] = ''; echo $this->magic_vars['item']['web_buy']; ?><? else: ?><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?><? endif; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['buy_time'])) $this->magic_vars['item']['buy_time'] = '';$_tmp = $this->magic_vars['item']['buy_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
				<td  ><a href="/u/<? if (!isset($this->magic_vars['item']['buy_userid'])) $this->magic_vars['item']['buy_userid'] = ''; echo $this->magic_vars['item']['buy_userid']; ?>"><? if (!isset($this->magic_vars['item']['buy_username'])) $this->magic_vars['item']['buy_username'] = '';$_tmp = $this->magic_vars['item']['buy_username'];$_tmp = $this->magic_modifier("default",$_tmp,"��վ");echo $_tmp;unset($_tmp); ?></a></td>
			</tr>
			<? endforeach; endif; unset($_from); ?>
		</table>
			<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
		<? unset($_magic_vars); ?>
		</div>
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="buy_success"): ?>
		<div class="user_main_title1">
		<strong style="color:#ff0000">��ܰ��ʾ��</strong><br>
		1��ת����Ч�ھ�Ϊ7�졣<br>
		2��ծȨת�ø���վ����վ����ծȨ��׼Ϊ������������+������Ϣ��*70%��
		</div>
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit1" >
				<td  >Ͷ�����</td>
				<td  >ծȨת��Э����</td>
				<td  >����</td>
				<td  >ת����</td>
				<td  >��������/������</td>
				<td  >���ձ�Ϣ</td>
				<td  >ת�ü۸�</td>
				<td  >�չ�ʱ��</td>
			</tr>
			<? $this->magic_vars['query_type']='GetChangeList';$data = array('status'=>'1','var'=>'loop','buy_userid'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetChangeList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<tr>
				<td  ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?></a></td>
				<td  ><a href="/debt_protocol/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html">Э����</a></td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</td>
				<td  ><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['count_all'])) $this->magic_vars['item']['count_all'] = ''; echo $this->magic_vars['item']['count_all']; ?>/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['recover_account_all'])) $this->magic_vars['item']['recover_account_all'] = ''; echo $this->magic_vars['item']['recover_account_all']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['buy_time'])) $this->magic_vars['item']['buy_time'] = '';$_tmp = $this->magic_vars['item']['buy_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<? endforeach; endif; unset($_from); ?>
		</table>
		
			<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
			<? unset($_magic_vars); ?>
		</div>
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="gettender"): ?>
		<!--Ͷ���еĽ�� ��ʼ-->
		<div class="t20">
		����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  ���⣺<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="����"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/gettender')" />
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">
			<tr class="ytit">
				<td colspan="9">Ͷ���еĽ��</td>
			</tr>


				<tr class="ytit1" >


					<td  >�����</td>


					<td  >����</td>


					<td  >�������</td>


					<td  >����ߵȼ�</td>


					<td  >������</td>


					<td  >����</td>


					<td  >Ͷ�ʽ��</td>


					<td  >����</td>


					<td  >״̬</td>


				</tr>


				<? $this->magic_vars['query_type']='GetTenderBorrowList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','type'=>$_REQUEST['type'],'tender_status'=>'0','borrow_status'=>'1','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderBorrowList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>"><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></a></td>

					<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['vouch_status'])) $this->magic_vars['item']['vouch_status']=''; ;if (  $this->magic_vars['item']['vouch_status']==1): ?>������<? if (!isset($this->magic_vars['item']['is_jin'])) $this->magic_vars['item']['is_jin']=''; ;elseif (  $this->magic_vars['item']['is_jin']==1): ?>��ֵ��<? if (!isset($this->magic_vars['item']['is_flow'])) $this->magic_vars['item']['is_flow']=''; ;elseif (  $this->magic_vars['item']['is_flow']==1): ?>��ת��<? if (!isset($this->magic_vars['item']['fast_status'])) $this->magic_vars['item']['fast_status']=''; ;elseif (  $this->magic_vars['item']['fast_status']==1): ?>����<? else: ?>��ͨ��<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['credit']['approve_credit'])) $this->magic_vars['item']['credit']['approve_credit'] = '';$_tmp = $this->magic_vars['item']['credit']['approve_credit'];$_tmp = $this->magic_modifier("credit",$_tmp,"credit");echo $_tmp;unset($_tmp); ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>����
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>����
                            	<? endif; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['tender_account'])) $this->magic_vars['item']['tender_account'] = ''; echo $this->magic_vars['item']['tender_account']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_account_scale'])) $this->magic_vars['item']['borrow_account_scale'] = ''; echo $this->magic_vars['item']['borrow_account_scale']; ?>%</td>


					<td  ><? if (!isset($this->magic_vars['item']['account_tender'])) $this->magic_vars['item']['account_tender']='';if (!isset($this->magic_vars['item']['tender_account'])) $this->magic_vars['item']['tender_account']=''; ;if (  $this->magic_vars['item']['account_tender']== $this->magic_vars['item']['tender_account']): ?>ȫ��ͨ��<? else: ?>����ͨ��<? endif; ?></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>


		<? unset($_magic_vars); ?>


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="tender_vouch"): ?>


		<!--�ɹ����� ��ʼ-->
		<div class="t20"> 


		����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  �ؼ��֣�<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 


		<input value="����"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/tender_vouch')" />


		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit">
				<td colspan="8">�ҵ����Ľ��</td>
			</tr>


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >����</td>


					<td  >�����</td>


					<td  >����ܶ�</td>


					<td  >�������</td>


					<td  >��������</td>


					<td  >�����ܶ�</td>


					<td  >����ʱ��</td>


					<td  >״̬</td>


				</tr>


				<? $this->magic_vars['query_type']='GetVouchList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','type'=>$_REQUEST['type'],'user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetVouchList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><a href="/index.php?user&q=code/message/sent&receive=<? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?>"><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></a></td>


					


					<td  >��<? if (!isset($this->magic_vars['item']['borrow_account'])) $this->magic_vars['item']['borrow_account'] = ''; echo $this->magic_vars['item']['borrow_account']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>����
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>����
                            	<? endif; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['award_account'])) $this->magic_vars['item']['award_account'] = ''; echo $this->magic_vars['item']['award_account']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?>�ɹ�<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?><font color="#FF0000">ʧ��</font><? else: ?>�����<? endif; ?></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>
				


			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
		<? unset($_magic_vars); ?>

		<!--������ϸ ����-->


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="tender_vouch_finish"): ?>


		


		<div class="t20">


		�տ�ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  �ؼ��֣�<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 


		<input value="����"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/tender_vouch_finish')" />


		</div>
		<div class="t20">


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">
				
			<tr class="ytit">
				<td colspan="7">�ѵ����Ľ��</td>
			</tr>

				<tr class="ytit1" >


					<td  >�����</td>


					<td  >������</td>


					<td  >Ӧ������</td>


					<td  >�ڼ���/������</td>


					<td  >�ܶ�</td>


					<td  >�����ܶ�</td>


					<td  >״̬</td>


				</tr>


				<? $this->magic_vars['query_type']='GetVouchRepayList';$data = array('var'=>'loop','showpage'=>'3','vouch_userid'=>$this->magic_vars['_G']['user_id'],'keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','borrow_status'=>'3','status'=>$_REQUEST['status'],'order'=>'repay_time');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetVouchRepayList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></td>


					<td  ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank" title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['repay_time'])) $this->magic_vars['item']['repay_time'] = '';$_tmp = $this->magic_vars['item']['repay_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']+1; ?>/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['repay_account'])) $this->magic_vars['item']['repay_account'] = ''; echo $this->magic_vars['item']['repay_account']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['repay_account'])) $this->magic_vars['item']['repay_account'] = ''; echo $this->magic_vars['item']['repay_account']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?><font color="#666666">�ѻ�</font><? else: ?><font color="#FF0000">δ��</font><? endif; ?></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>


		<? unset($_magic_vars); ?>

		<!--������ϸ ����-->


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="borrow_vouch"): ?>

		<div class="t20"> 
		����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  �ؼ��֣�<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="����"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/borrow_vouch')" />
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit">
				<td colspan="7">�����Ľ��</td>
			</tr>

			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >����</td>


					<td  >�������</td>


					<td  >�������</td>


					<td  >������</td>


					<td  >����</td>


					<td  >����ʱ��</td>


					<td  >��������</td>				</tr>


				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','type'=>$_REQUEST['type'],'status'=>'1','vouch_status'=>'1','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_style'])) $this->magic_vars['item']['borrow_style'] = '';$_tmp = $this->magic_vars['item']['borrow_style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>����
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>����
                            	<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>


					<td  align="center" ><div style="margin-left:10px; float:left"><div class="rate_bg ">


							<div class="rate_tiao" style=" width:<? if (!isset($this->magic_vars['item']['vouch_account_scale'])) $this->magic_vars['item']['vouch_account_scale'] = '';$_tmp = $this->magic_vars['item']['vouch_account_scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>%"></div>


						</div></div><div style="float:left"><? if (!isset($this->magic_vars['item']['vouch_account_scale'])) $this->magic_vars['item']['vouch_account_scale'] = '';$_tmp = $this->magic_vars['item']['vouch_account_scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>%</div></td>


					


				</tr>


				<? endforeach; endif; unset($_from); ?>


			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>

		<? unset($_magic_vars); ?>


		<!--�ɹ�Ͷ�� ����-->


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="borrow_vouched"): ?>


		<!--������ɽ�� ��ʼ-->


		


		<div class="t20"> 


		����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  �ؼ��֣�<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 


		<input value="����"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/borrow_vouch')" />


		</div>

		<div class="t20"> 
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit">
				<td colspan="7">��ͨ�������Ľ��</td>
			</tr>


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >����</td>


					<td  >�������</td>


					<td  >�������</td>


					<td  >������</td>


					<td  >����</td>


					<td  >����ʱ��</td>


					<td  >��������</td>				</tr>


				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','type'=>$_REQUEST['type'],'status'=>'3','vouch_status'=>'1','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_style'])) $this->magic_vars['item']['borrow_style'] = '';$_tmp = $this->magic_vars['item']['borrow_style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>����
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>����
                            	<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>


					<td  align="center" ><div style="margin-left:10px; float:left"><div class="rate_bg ">


							<div class="rate_tiao" style=" width:<? if (!isset($this->magic_vars['item']['vouch_account_scale'])) $this->magic_vars['item']['vouch_account_scale'] = '';$_tmp = $this->magic_vars['item']['vouch_account_scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>%"></div>


						</div></div><div style="float:left"><? if (!isset($this->magic_vars['item']['vouch_account_scale'])) $this->magic_vars['item']['vouch_account_scale'] = '';$_tmp = $this->magic_vars['item']['vouch_account_scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>%</div></td>


					


				</tr>


				<? endforeach; endif; unset($_from); ?>
			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>

		<? unset($_magic_vars); ?>



		<!--������ɽ�� ����-->


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="gathering"): ?>

		<!--�տ���ϸ ��ʼ-->

		<!--<div class="t20">
		<? $data = array('var'=>'Devar','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['Devar'] = borrowClass::GetUserCount($data);if(!is_array($this->magic_vars['Devar'])){ $this->magic_vars['Devar']=array();}?>
		<table >
			<tr>
				<td>Ͷ���ܶ��<? if (!isset($this->magic_vars['Devar']['tender_account'])) $this->magic_vars['Devar']['tender_account'] = '';$_tmp = $this->magic_vars['Devar']['tender_account'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>
				<td>�����ܶ��<? if (!isset($this->magic_vars['Devar']['tender_recover_yes'])) $this->magic_vars['Devar']['tender_recover_yes'] = '';$_tmp = $this->magic_vars['Devar']['tender_recover_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>
				<td>������Ϣ����<? if (!isset($this->magic_vars['Devar']['tender_interest_yes'])) $this->magic_vars['Devar']['tender_interest_yes'] = '';$_tmp = $this->magic_vars['Devar']['tender_interest_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr>
				<td>�����ܶ��<? if (!isset($this->magic_vars['Devar']['tender_recover_wait'])) $this->magic_vars['Devar']['tender_recover_wait'] = '';$_tmp = $this->magic_vars['Devar']['tender_recover_wait'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>
				<td>������Ϣ����<? if (!isset($this->magic_vars['Devar']['tender_interest_wait'])) $this->magic_vars['Devar']['tender_interest_wait'] = '';$_tmp = $this->magic_vars['Devar']['tender_interest_wait'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>
				<td>��׬��Ϣ����<? if (!isset($this->magic_vars['Devar']['tender_interest_account'])) $this->magic_vars['Devar']['tender_interest_account'] = '';$_tmp = $this->magic_vars['Devar']['tender_interest_account'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>
			</tr>
		</table>  
		<? unset($_magic_vars);unset($data); ?>
		</div>-->


		<div class="t20">
		Ӧ�����ڣ�<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  �ؼ��֣�<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="����"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/gathering')" />
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit">
				<td colspan="10"><? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="yes"): ?>���տ���ϸ��<? else: ?>δ�տ���ϸ��<? endif; ?></td>
			</tr>


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >������</td>


					<td  >Ӧ������</td>


					<td  >�����</td>


					<td  >�ڼ���/������</td>


					<td  >Ӧ���ܶ�</td>


					<td  >Ӧ�ձ���</td>


					<td  >Ӧ����Ϣ</td>


					<td  >���ڷ�Ϣ</td>


					<td  >��������</td>


					<td  >״̬</td>


				</tr>


				<? $this->magic_vars['query_type']='GetRecoverList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','borrow_status'=>'3','type'=>$_REQUEST['type'],'order'=>'repay_time','epage'=>'10','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetRecoverList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank" title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['recover_time'])) $this->magic_vars['item']['recover_time'] = '';$_tmp = $this->magic_vars['item']['recover_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>


					<td  ><a href="/u/<? if (!isset($this->magic_vars['item']['borrow_userid'])) $this->magic_vars['item']['borrow_userid'] = ''; echo $this->magic_vars['item']['borrow_userid']; ?>"><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['recover_period'])) $this->magic_vars['item']['recover_period'] = ''; echo $this->magic_vars['item']['recover_period']+1; ?>/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['all_recover'])) $this->magic_vars['item']['all_recover'] = ''; echo $this->magic_vars['item']['all_recover']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['recover_capital'])) $this->magic_vars['item']['recover_capital'] = ''; echo $this->magic_vars['item']['recover_capital']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['recover_interest'])) $this->magic_vars['item']['recover_interest'] = ''; echo $this->magic_vars['item']['recover_interest']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['late_interest'])) $this->magic_vars['item']['late_interest'] = '';$_tmp = $this->magic_vars['item']['late_interest'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days'] = '';$_tmp = $this->magic_vars['item']['late_days'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>��</td>


					<td  ><? if (!isset($this->magic_vars['item']['recover_web'])) $this->magic_vars['item']['recover_web']=''; ;if (  $this->magic_vars['item']['recover_web']==1): ?>��վ�渶<? if (!isset($this->magic_vars['item']['recover_status'])) $this->magic_vars['item']['recover_status']=''; ;elseif (  $this->magic_vars['item']['recover_status']==1): ?><font color="#666666">�ѻ�</font><? else: ?><font color="#FF0000">δ��</font><? endif; ?></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>

			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>

		<? unset($_magic_vars); ?>
		


		<!--�տ���ϸ ����-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="before"): ?>


		<div class="t20">
		Ӧ�����ڣ�<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  �ؼ��֣�<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="����"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/before')" />
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit">
				<td colspan="10">ת��ǰ�տ���ϸ</td>
			</tr>


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >������</td>


					<td  >Ӧ������</td>


					<td  >�����</td>


					<td  >�ڼ���/������</td>


					<td  >�տ��ܶ�</td>


					<td  >Ӧ�ձ���</td>


					<td  >Ӧ����Ϣ</td>


					<td  >������Ϣ</td>


					<td  >��������</td>


					<td  >״̬</td>


				</tr>


				<? $this->magic_vars['query_type']='GetRecoverList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','borrow_status'=>'3','type'=>$_REQUEST['type'],'order'=>'repay_time','change'=>'1','style'=>'change','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetRecoverList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['change']) || $this->magic_vars['loop']['change']=='') $this->magic_vars['loop']['change'] = array();  $_from = $this->magic_vars['loop']['change']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank" title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['recover_time'])) $this->magic_vars['item']['recover_time'] = '';$_tmp = $this->magic_vars['item']['recover_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>


					<td  ><a href="/u/<? if (!isset($this->magic_vars['item']['borrow_userid'])) $this->magic_vars['item']['borrow_userid'] = ''; echo $this->magic_vars['item']['borrow_userid']; ?>"><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['recover_period'])) $this->magic_vars['item']['recover_period'] = ''; echo $this->magic_vars['item']['recover_period']+1; ?>/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['recover_account'])) $this->magic_vars['item']['recover_account'] = ''; echo $this->magic_vars['item']['recover_account']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['recover_capital'])) $this->magic_vars['item']['recover_capital'] = ''; echo $this->magic_vars['item']['recover_capital']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['recover_interest'])) $this->magic_vars['item']['recover_interest'] = ''; echo $this->magic_vars['item']['recover_interest']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['late_interest'])) $this->magic_vars['item']['late_interest'] = '';$_tmp = $this->magic_vars['item']['late_interest'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days'] = '';$_tmp = $this->magic_vars['item']['late_days'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>��</td>


					<td  ><? if (!isset($this->magic_vars['item']['recover_status'])) $this->magic_vars['item']['recover_status']=''; ;if (  $this->magic_vars['item']['recover_status']==1): ?><font color="#666666">�ѻ�</font><? else: ?><font color="#FF0000">δ��</font><? endif; ?></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>

			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>

		<? unset($_magic_vars); ?>

		


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="lenddetail"): ?>
		<div class="t20">
		����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  �ؼ��֣�<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="����"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/lenddetail')" />
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
				<tr class="ytit">
					<td colspan="11">�����ϸ��</td>
				</tr>

			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >�����</td>


					<td  >����</td>


					<td  >����ܶ�</td>


					<td  >�����ܶ�</td>


					<td  >�����ܶ�</td>


					<td  >�����ܶ�</td>


					<td  >������Ϣ</td>


					<td  >������Ϣ</td>


					<td  >�ѻ�����/������</td>


					<td  >��ע</td>


				</tr>


			<? $this->magic_vars['query_type']='GetTenderList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','status'=>'1','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></a></td>


					<td  ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  >��<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['recover_account_all'])) $this->magic_vars['item']['recover_account_all'] = ''; echo $this->magic_vars['item']['recover_account_all']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['change_status'])) $this->magic_vars['item']['change_status']=''; ;if (  $this->magic_vars['item']['change_status']==1): ?>��<? if (!isset($this->magic_vars['item']['recover_account_yes_all'])) $this->magic_vars['item']['recover_account_yes_all'] = ''; echo $this->magic_vars['item']['recover_account_yes_all']; ?><? else: ?>��<? if (!isset($this->magic_vars['item']['recover_account_yes'])) $this->magic_vars['item']['recover_account_yes'] = ''; echo $this->magic_vars['item']['recover_account_yes']; ?><? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['change_status'])) $this->magic_vars['item']['change_status']=''; ;if (  $this->magic_vars['item']['change_status']==1): ?>0<? else: ?>��<? if (!isset($this->magic_vars['item']['recover_account_wait'])) $this->magic_vars['item']['recover_account_wait'] = ''; echo $this->magic_vars['item']['recover_account_wait']; ?><? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['change_status'])) $this->magic_vars['item']['change_status']=''; ;if (  $this->magic_vars['item']['change_status']==1): ?>��<? if (!isset($this->magic_vars['item']['recover_interest_yes_all'])) $this->magic_vars['item']['recover_interest_yes_all'] = ''; echo $this->magic_vars['item']['recover_interest_yes_all']; ?><? else: ?>��<? if (!isset($this->magic_vars['item']['recover_account_interest_yes'])) $this->magic_vars['item']['recover_account_interest_yes'] = ''; echo $this->magic_vars['item']['recover_account_interest_yes']; ?><? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['change_status'])) $this->magic_vars['item']['change_status']=''; ;if (  $this->magic_vars['item']['change_status']==1): ?>0<? else: ?>��<? if (!isset($this->magic_vars['item']['recover_account_interest_wait'])) $this->magic_vars['item']['recover_account_interest_wait'] = ''; echo $this->magic_vars['item']['recover_account_interest_wait']; ?><? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['change_status'])) $this->magic_vars['item']['change_status']=''; ;if (  $this->magic_vars['item']['change_status']==1): ?><? if (!isset($this->magic_vars['item']['count_all'])) $this->magic_vars['item']['count_all'] = '';$_tmp = $this->magic_vars['item']['count_all'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>��/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?>��<? else: ?><? if (!isset($this->magic_vars['item']['repay_num'])) $this->magic_vars['item']['repay_num'] = '';$_tmp = $this->magic_vars['item']['repay_num'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>��/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?>��<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['change_status'])) $this->magic_vars['item']['change_status']=''; ;if (  $this->magic_vars['item']['change_status']==1): ?>��ת��<? else: ?>-<? endif; ?></td>

				</tr>


				<? endforeach; endif; unset($_from); ?>



			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>

		<? unset($_magic_vars); ?>

		<!--�����ϸ ����-->

		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="debting"): ?>
		<div class="t20">
		����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  �ؼ��֣�<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="����"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/debting')" />
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
				<tr class="ytit">
					<td colspan="10">����ת�õ�ծȨ</td>
				</tr>

			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >�����</td>


					<td  >����</td>


					<td  >����ܶ�</td>


					<td  >�����ܶ�</td>


					<td  >�����ܶ�</td>


					<td  >�����ܶ�</td>


					<td  >������Ϣ</td>


					<td  >������Ϣ</td>


					<td  >δ������/������</td>
					
					<td  >����</td>


				</tr>


			<? $this->magic_vars['query_type']='GetTenderList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','status'=>'1','change_status'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></a></td>


					<td  ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  >��<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['recover_account_all'])) $this->magic_vars['item']['recover_account_all'] = ''; echo $this->magic_vars['item']['recover_account_all']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['recover_account_yes'])) $this->magic_vars['item']['recover_account_yes'] = ''; echo $this->magic_vars['item']['recover_account_yes']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['recover_account_wait'])) $this->magic_vars['item']['recover_account_wait'] = ''; echo $this->magic_vars['item']['recover_account_wait']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['recover_account_interest_yes'])) $this->magic_vars['item']['recover_account_interest_yes'] = ''; echo $this->magic_vars['item']['recover_account_interest_yes']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['recover_account_interest_wait'])) $this->magic_vars['item']['recover_account_interest_wait'] = ''; echo $this->magic_vars['item']['recover_account_interest_wait']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['norepay_num'])) $this->magic_vars['item']['norepay_num'] = '';$_tmp = $this->magic_vars['item']['norepay_num'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>��/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?>��</td>
					
					<td  ><? if (!isset($this->magic_vars['item']['change_no'])) $this->magic_vars['item']['change_no']=''; ;if (  $this->magic_vars['item']['change_no']==1): ?>�����ڳ��ֲ���ת�á�<? else: ?><? if (!isset($this->magic_vars['item']['change_status'])) $this->magic_vars['item']['change_status']=''; ;if (  $this->magic_vars['item']['change_status']==2): ?>����ת��<? if (!isset($this->magic_vars['item']['change_status'])) $this->magic_vars['item']['change_status']=''; ;elseif (  $this->magic_vars['item']['change_status']==3): ?>ת������<? if (!isset($this->magic_vars['item']['change_status'])) $this->magic_vars['item']['change_status']=''; ;elseif (  $this->magic_vars['item']['change_status']==4): ?>ת����վ��<? if (!isset($this->magic_vars['item']['change_status'])) $this->magic_vars['item']['change_status']=''; ;elseif (  $this->magic_vars['item']['change_status']==1): ?>��ת��<? else: ?><? if (!isset($this->magic_vars['item']['recover_account_wait'])) $this->magic_vars['item']['recover_account_wait']=''; ;if (  $this->magic_vars['item']['recover_account_wait']>0): ?><a href="javascript:void(0)" onclick="JqueryAjaxs('code/borrow/change','&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>&account=<? if (!isset($this->magic_vars['item']['recover_account_capital_wait'])) $this->magic_vars['item']['recover_account_capital_wait'] = ''; echo $this->magic_vars['item']['recover_account_capital_wait']; ?>');">ծȨת��</a><? else: ?>-<? endif; ?><? endif; ?><? endif; ?></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>



			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>

		<? unset($_magic_vars); ?>

		<!--�����ϸ ����-->
		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="bid"): ?>


		<!--����Ͷ��Ľ�� ��ʼ-->


		<div class="t20">
			Ͷ��ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  �ؼ��֣�<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" />
			<input value="����"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/bid')" />
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit">
				<td colspan="7">����Ͷ��Ľ��</td>
			</tr>


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >����</td>


					<td  >�����</td>


					<td  >�ܽ���/�������</td>


					<td  >Ͷ��/��Ч���</td>


					<td  >���û���/Ͷ��ʱ�� </td>


					<td  >����</td>


					<td  >״̬ </td>


				</tr>


				<? $this->magic_vars['query_type']='GetTenderList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','borrow_status'=>'1','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td style="line-height:21px;"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank" title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a> </td>


					<td  style="line-height:21px;"><a  href="/u/<? if (!isset($this->magic_vars['item']['borrow_userid'])) $this->magic_vars['item']['borrow_userid'] = ''; echo $this->magic_vars['item']['borrow_userid']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></a></td>


					<td style="line-height:21px;">�ܽ���:��<? if (!isset($this->magic_vars['item']['borrow_account'])) $this->magic_vars['item']['borrow_account'] = ''; echo $this->magic_vars['item']['borrow_account']; ?><br />�������:<font color="#FF0000"><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</font></td><td style="line-height:21px;">Ͷ����:��<? if (!isset($this->magic_vars['item']['account_tender'])) $this->magic_vars['item']['account_tender'] = ''; echo $this->magic_vars['item']['account_tender']; ?><br />��Ч���:<font color="#FF0000">��<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></font></td>


					


					<td style="line-height:25px;"><span><? if (!isset($this->magic_vars['item']['credit']['approve_credit'])) $this->magic_vars['item']['credit']['approve_credit'] = '';$_tmp = $this->magic_vars['item']['credit']['approve_credit'];$_tmp = $this->magic_modifier("credit",$_tmp,"credit");echo $_tmp;unset($_tmp); ?></span><br /><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>


					


					<td style="line-height:21px;"><div class="rate_bg floatl" align="left">


							<div class="rate_tiao" style=" width:<? if (!isset($this->magic_vars['item']['borrow_account_scale'])) $this->magic_vars['item']['borrow_account_scale'] = '';$_tmp = $this->magic_vars['item']['borrow_account_scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>%"></div>


						</div><span class="floatl"><? if (!isset($this->magic_vars['item']['borrow_account_scale'])) $this->magic_vars['item']['borrow_account_scale'] = ''; echo $this->magic_vars['item']['borrow_account_scale']; ?>%</span></td>


					<td style="line-height:21px;"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==2): ?>Ͷ��ʧ��<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==3): ?>������<? else: ?><? if (!isset($this->magic_vars['item']['account_tender'])) $this->magic_vars['item']['account_tender']='';if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account']=''; ;if (  $this->magic_vars['item']['account_tender']== $this->magic_vars['item']['account']): ?>ȫ��ͨ��<? else: ?>����ͨ��<? endif; ?><? endif; ?></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


				


			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>


		<? unset($_magic_vars); ?>
		<!--����Ͷ��Ľ�� ����-->


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="appraisal"): ?>

		<div class="t20">
			����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  �ؼ��֣�<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
			<input value="����"  class="xinbuton" 
type="submit" />
		</div>
		
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >����      </td>


					<td  >�����</td>


					<td  >Ͷ����</td>


					<td  >���ʱ��</td>


					<td  >���۽��</td>


					<td  >����</td>


				</tr>


				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td ><strong>���ڽ���ǰ����</strong> </td>


					<td  >op6778</td>


					<td><img src="/pic/rank_4.gif" /></td>


					<td  >18%</td>


					<td  >1����</td>


					<td  >50</td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>


		<? unset($_magic_vars); ?>


		<!--�ҵ����� ����-->


		


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="attention"): ?>


		<!--�ҹ�ע�Ľ�� ��ʼ-->


		<div> 


		<select><option>�����еĽ��</option><option>�ѽ����Ľ��</option></select> ����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  �ؼ��֣�<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 


		<input value="����"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/publish')" />


		</div>


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >ͼƬ                  </td>


					<td  >����</td>


					<td  >���(Ԫ)</td>


					<td  >����</td>


					<td  >����</td>


					<td  >���õȼ�</td>


					<td  >����</td>


				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td ><strong>���ڽ���ǰ����</strong> </td>


					<td  >op6778</td>


					<td><img src="/pic/rank_4.gif" /></td>


					<td  >18%</td>


					<td  >1����</td>


					<td  >50</td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


				<tr >


					<td colspan="8" class="page">


						<? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?>


					</td>


				</tr>


				<? unset($_magic_vars); ?>


			</form>	


		</table>


		<!--�ҹ�ע�Ľ�� ����-->


		


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="tender_reply"): ?>


		<!--Ͷ�������� ��ʼ-->


		<div> 


		�����ڲ鿴����:<select name="status"> <option value="">���лظ�</option> <option value="0">���һظ�</option> <option value="1">�ѻظ�</option></select>


		<input value="����"  class="xinbuton" 
type="submit" />


		</div>


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >��ı���</td>


					<td  >������</td>


					<td  >��������</td>


					<td  >����ʱ��</td>


					<td  >����״̬</td>


					<td  >����</td>


				</tr>


				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td ><strong>���ڽ���ǰ����</strong> </td>


					<td  >op6778</td>


					<td><img src="/pic/rank_4.gif" /></td>


					<td  >18%</td>


					<td  >1����</td>


					<td  >50</td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


				<tr >


					<td colspan="8" class="page">


						<? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?>


					</td>


				</tr>


				<? unset($_magic_vars); ?>


			</form>	


		</table>


		<!--Ͷ�������� ����-->


		


		


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myuser"): ?>


		<!--�ҵĿͻ� ����-->


		<div class="user_main_title1" > 


		<? $this->magic_vars['query_type']='GetMyuserList';$data = array('var'=>'loop','user_id'=>'0','showpage'=>'3','epage'=>'20','suser_id'=>$_REQUEST['user_id'],'user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetMyuserList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


			


		<strong>�ܽ������</strong> <? if (!isset($this->magic_vars['loop']['total'])) $this->magic_vars['loop']['total'] = ''; echo $this->magic_vars['loop']['total']; ?> ��


		</div>


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >�û���</td>


					<td  >��ʵ����</td>


					<td  >����</td>


					<td  >�����</td>


					<td  >���ʱ��</td>


					<td  >�ɹ����ʱ��</td>


					<td  >״̬</td>


				</tr>


					<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr >


					<td><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>


					<td><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/myuser&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>"><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></a> </td>


					<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td>��<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>


					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>


					<td><? if (!isset($this->magic_vars['item']['success_time'])) $this->magic_vars['item']['success_time'] = '';$_tmp = $this->magic_vars['item']['success_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>


					<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==5): ?>ȡ��<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==3): ?>���ɹ�<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>���ʧ��<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==4): ?>�������ʧ��<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?>�����б���<? endif; ?></td>


				</tr>


				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>


				<tr >


					<td colspan="8" class="page">


						<div class="list_table_page"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>


					</td>


				</tr>


			</form>	


		</table>


		<? unset($_magic_vars); ?>


		<!--�ҵĿͻ� ����-->


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myuserborrow"): ?>


		<!--�ҵĿͻ� ����-->


		<div class="user_main_title1" > 


		<? $this->magic_vars['query_type']='GetTenderList';$data = array('var'=>'loop','user_id'=>$this->magic_vars['_G']['user_id'],'showpage'=>'3','epage'=>'20');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


			


		<strong>��Ͷ������</strong> <? if (!isset($this->magic_vars['loop']['total'])) $this->magic_vars['loop']['total'] = ''; echo $this->magic_vars['loop']['total']; ?> ��


		</div>


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >�û���</td>


					<td  >����</td>


					<td  >Ͷ�ʽ��</td>


					<td  >��Ч���</td>


					<td  >Ͷ��ʱ��</td>


					<td  >״̬</td>


				</tr>


					<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr >


					<td><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>


					<td><a href="/invest/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?></a></td>


					<td>��<? if (!isset($this->magic_vars['item']['tender_account'])) $this->magic_vars['item']['tender_account'] = ''; echo $this->magic_vars['item']['tender_account']; ?></td>


					<td>��<? if (!isset($this->magic_vars['item']['tender_money'])) $this->magic_vars['item']['tender_money'] = ''; echo $this->magic_vars['item']['tender_money']; ?></td>


					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>


					<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>�����<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>ȡ��<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?>�ɹ�<? endif; ?></td>


				</tr>


				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>


				<tr >


					<td colspan="8" class="page">


						<div class="list_table_page"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>


					</td>


				</tr>


			</form>	


		</table>


		<? unset($_magic_vars); ?>


		<!--�ҵĿͻ� ����-->


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myuser_account"): ?>


		<!--�ҵĿͻ�ͳ�� ����-->


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >ʱ��</td>


					<td  >�ɹ����</td>


					<td  >�ɹ�Ͷ��</td>


					<td  >VIP��</td>


				</tr>


					<? $this->magic_vars['query_type']='GetMyuserAcount';$data = array('var'=>'var','user_id'=>$this->magic_vars['_G']['user_id']);$default = '';  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetMyuserAcount($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>


				<tr >


					<td><? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = '';$_tmp = $this->magic_vars['key'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m");echo $_tmp;unset($_tmp); ?></td>


					<td>��<? if (!isset($this->magic_vars['var']['borrow'])) $this->magic_vars['var']['borrow'] = '';$_tmp = $this->magic_vars['var']['borrow'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td>��<? if (!isset($this->magic_vars['var']['tender'])) $this->magic_vars['var']['tender'] = '';$_tmp = $this->magic_vars['var']['tender'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td><? if (!isset($this->magic_vars['var']['vip'])) $this->magic_vars['var']['vip'] = '';$_tmp = $this->magic_vars['var']['vip'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>��</td>


				</tr>


				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>


			</form>	


		</table>


		<? unset($_magic_vars); ?>


		<!--�ҵĿͻ�ͳ�� ����-->


		


		


		


		<!--������ϸ ��ʼ-->


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="repayment_view"): ?>


		<div class="user_right_border">


			<div class="l">���⣺</div>


			<div class="c">


				<? if (!isset($this->magic_vars['_U']['borrow_result']['name'])) $this->magic_vars['_U']['borrow_result']['name'] = ''; echo $this->magic_vars['_U']['borrow_result']['name']; ?>


			</div>


		</div>


		<div class="user_right_border">


			<div class="l"> ����</div>


			<div class="rb">


				<font color="#FF0000"><strong>��<? if (!isset($this->magic_vars['_U']['borrow_result']['account'])) $this->magic_vars['_U']['borrow_result']['account'] = ''; echo $this->magic_vars['_U']['borrow_result']['account']; ?></strong></font>


			</div>


			<div class="l"> ������ʣ�</div>


			<div class="rb">


				 <? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_apr'])) $this->magic_vars['_U']['borrow_result']['borrow_apr'] = ''; echo $this->magic_vars['_U']['borrow_result']['borrow_apr']; ?>%


			</div>


		</div>


		<div class="user_right_border">


			<div class="l"> ������ޣ�</div>


			<div class="rb">


				 <? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;if (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.03): ?>1��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.06): ?>2��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.10): ?>3��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.13): ?>4��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.16): ?>5��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.20): ?>6��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.23): ?>7��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.26): ?>8��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.30): ?>9��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.33): ?>10��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.36): ?>11��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.40): ?>12��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.43): ?>13��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.46): ?>14��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.50): ?>15��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.53): ?>16��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.56): ?>17��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.60): ?>18��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.63): ?>19��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.66): ?>20��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.70): ?>21��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.73): ?>22��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.76): ?>23��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.80): ?>24��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.83): ?>25��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.86): ?>26��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.90): ?>27��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.93): ?>28��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.96): ?>29��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.10): ?>30��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']='';if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] >= 1 &&  $this->magic_vars['_U']['borrow_result']['borrow_period']<10): ?><? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period'] = '';$_tmp = $this->magic_vars['_U']['borrow_result']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>����
                            	<? else: ?><? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period'] = '';$_tmp = $this->magic_vars['_U']['borrow_result']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>����
                            	<? endif; ?>


			</div>


			<div class="l"> ���ʽ��</div>


			<div class="rb">


				 <? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_style'])) $this->magic_vars['_U']['borrow_result']['borrow_style'] = '';$_tmp = $this->magic_vars['_U']['borrow_result']['borrow_style'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?>


			</div>


		</div>


		<div class="user_right_border">


			<div class="l"> ����ʱ�䣺</div>


			<div class="rb">


				 <? if (!isset($this->magic_vars['_U']['borrow_result']['addtime'])) $this->magic_vars['_U']['borrow_result']['addtime'] = '';$_tmp = $this->magic_vars['_U']['borrow_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>


			</div>


			<div class="l"> ���ʱ�䣺</div>


			<div class="rb">

                             <? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;if (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.03): ?>1��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.06): ?>2��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.10): ?>3��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.13): ?>4��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.16): ?>5��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.20): ?>6��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.23): ?>7��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.26): ?>8��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.30): ?>9��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.33): ?>10��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.36): ?>11��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.40): ?>12��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.43): ?>13��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.46): ?>14��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.50): ?>15��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.53): ?>16��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.56): ?>17��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.60): ?>18��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.63): ?>19��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.66): ?>20��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.70): ?>21��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.73): ?>22��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.76): ?>23��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.80): ?>24��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.83): ?>25��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.86): ?>26��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.90): ?>27��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.93): ?>28��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.96): ?>29��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.10): ?>30��
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']='';if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] >= 1 &&  $this->magic_vars['_U']['borrow_result']['borrow_period']< 10): ?><? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period'] = '';$_tmp = $this->magic_vars['_U']['borrow_result']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>����
                            	<? else: ?><? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period'] = '';$_tmp = $this->magic_vars['_U']['borrow_result']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>����
                            	<? endif; ?>
				 


			</div>


		</div>


		<!--


		<div class="user_right_border">


			<div class="l"> �´λ���ʱ�䣺</div>


			<div class="rb">


				 <? if (!isset($this->magic_vars['_U']['borrow_result']['username'])) $this->magic_vars['_U']['borrow_result']['username'] = ''; echo $this->magic_vars['_U']['borrow_result']['username']; ?>


			</div>


			<div class="l"> �´λ����</div>


			<div class="rb">


				 <? if (!isset($this->magic_vars['_U']['user_result']['username'])) $this->magic_vars['_U']['user_result']['username'] = ''; echo $this->magic_vars['_U']['user_result']['username']; ?>


			</div>


		</div>


		-->


		<!--������ϸ ����-->


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >���</td>


					<td  >�ƻ�������</td>


					<td  >�ƻ����Ϣ</td>


					<td  >ʵ������</td>


					<td  >��������</td>


					<td  >ʵ����Ϣ</td>


					<td  >���ڷ�Ϣ</td>


					<!--<td  >�߽ɷ�</td>-->


					<td  >�ܻ�����</td>


					<td  >״̬</td>


					<td  >���ڻ���</td>


					<td  >��ǰȫ���</td>


				</tr>


				<? $this->magic_vars['query_type']='GetBorrowRepayList';$data = array('borrow_status'=>'3','borrow_nid'=>isset($_REQUEST['borrow_nid'])?$_REQUEST['borrow_nid']:'','limit'=>'all','order'=>'order','user_id'=>$this->magic_vars['_G']['user_id']);$default = '';  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetBorrowRepayList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>


			


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td ><? if (!isset($this->magic_vars['var']['repay_period'])) $this->magic_vars['var']['repay_period'] = ''; echo $this->magic_vars['var']['repay_period']+1; ?></td>


					<td><? if (!isset($this->magic_vars['var']['repay_time'])) $this->magic_vars['var']['repay_time'] = '';$_tmp = $this->magic_vars['var']['repay_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>


					<td>��<? if (!isset($this->magic_vars['var']['repay_account'])) $this->magic_vars['var']['repay_account'] = ''; echo $this->magic_vars['var']['repay_account']; ?></td>


					<td><? if (!isset($this->magic_vars['var']['repay_yestime'])) $this->magic_vars['var']['repay_yestime'] = '';$_tmp = $this->magic_vars['var']['repay_yestime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>


					<td><? if (!isset($this->magic_vars['var']['late_days'])) $this->magic_vars['var']['late_days'] = '';$_tmp = $this->magic_vars['var']['late_days'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>��</td>


					<td>��<? if (!isset($this->magic_vars['var']['repay_account_yes'])) $this->magic_vars['var']['repay_account_yes'] = ''; echo $this->magic_vars['var']['repay_account_yes']; ?></td>


					<td>��<? if (!isset($this->magic_vars['var']['late_interest'])) $this->magic_vars['var']['late_interest'] = '';$_tmp = $this->magic_vars['var']['late_interest'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<!--<td>��<? if (!isset($this->magic_vars['var']['late_reminder'])) $this->magic_vars['var']['late_reminder'] = '';$_tmp = $this->magic_vars['var']['late_reminder'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>-->


					<td>��<? if (!isset($this->magic_vars['var']['late_interest'])) $this->magic_vars['var']['late_interest'] = '';if (!isset($this->magic_vars['var']['repay_account'])) $this->magic_vars['var']['repay_account'] = ''; echo $this->magic_vars['var']['late_interest']+$this->magic_vars['var']['repay_account']; ?></td>


					<td><? if (!isset($this->magic_vars['var']['repay_web'])) $this->magic_vars['var']['repay_web']=''; ;if (  $this->magic_vars['var']['repay_web']==1): ?>��վ�渶<? if (!isset($this->magic_vars['var']['repay_vouch'])) $this->magic_vars['var']['repay_vouch']=''; ;elseif (  $this->magic_vars['var']['repay_vouch']==1): ?>�����ߵ渶<? if (!isset($this->magic_vars['var']['repay_status'])) $this->magic_vars['var']['repay_status']=''; ;elseif (  $this->magic_vars['var']['repay_status']==1): ?>�ѻ���<? else: ?>δ����<? endif; ?></td>


					<td><? if (!isset($this->magic_vars['var']['repay_status'])) $this->magic_vars['var']['repay_status']=''; ;if (  $this->magic_vars['var']['repay_status']==1): ?>-<? else: ?>
					
					<? if (!isset($this->magic_vars['_U']['borrow_result']['is_flow'])) $this->magic_vars['_U']['borrow_result']['is_flow']=''; ;if (  $this->magic_vars['_U']['borrow_result']['is_flow']==1): ?>
					�Զ�����
					<? else: ?>
					<a href="#" onclick="javascript:if(confirm('��ȷ��Ҫ�����˽����')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repay&id=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>&borrow_nid=<? if (!isset($this->magic_vars['var']['borrow_nid'])) $this->magic_vars['var']['borrow_nid'] = ''; echo $this->magic_vars['var']['borrow_nid']; ?>'">����</a>
					<? endif; ?>
					
					<? endif; ?></td>
					
					<td>
					<? if (!isset($this->magic_vars['item']['repay_status'])) $this->magic_vars['item']['repay_status']='';if (!isset($this->magic_vars['item']['advance_status'])) $this->magic_vars['item']['advance_status']='';if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days']='';if (!isset($this->magic_vars['Vvar']['vip_type'])) $this->magic_vars['Vvar']['vip_type']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['_U']['borrow_result']['is_flow'])) $this->magic_vars['_U']['borrow_result']['is_flow']=''; ;if (  $this->magic_vars['item']['repay_status']!=1 and  $this->magic_vars['item']['advance_status']==1 and  $this->magic_vars['item']['late_days']==0 and  $this->magic_vars['Vvar']['vip_type']==2 and  $this->magic_vars['item']['borrow_period']>11 and  $this->magic_vars['_U']['borrow_result']['is_flow']!=1): ?>
						<a href="#" onclick="javascript:if(confirm('��ǰ���һ���Գ���ʣ�౾���Ұ�ʣ�౾��*1%����ΥԼ��')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repay&borrow_nid=<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>'">��ǰȫ���</a>
					<? else: ?>
						-
					<? endif; ?>
					</td>

				</tr>


				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>


			</form>	


		</table>


		<br>


		<!--�Զ�Ͷ�� ��ʼ-->


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="auto"): ?>
		<div class="t20">
			1���Զ�Ͷ������������3������ϵͳ���������Ӵ�С��������δ���õ�<br />
			2���������������3���Զ�Ͷ����򣬵�ϵͳ�������Ŵ�С��������жϣ�������״̬Ϊͣ�õĹ��� <br />
			3�����жϵ��з��������Ĺ���ʱ��Ϊ���Զ�Ͷ�꣬�������Ĺ���������á� 
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">

			<tr class="ytit">
				<td colspan="13">�Զ�Ͷ��</td>
			</tr>

			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >����</td>


					<td  >�Ƿ�����</td>


					<td  >Ͷ������</td>


					<td  >Ͷ����</td>


					<td  >Ͷ�����</td>


					<td  >���ʷ�Χ</td>


					<td  >�������</td>


					<td  >���û���</td>


					<td  >����</td>


					<td  >�渶</td>


					<td  >���ٱ�</td>


					<td  >������</td>


					<td  >����</td>


				</tr>


				<? $this->magic_vars['query_type']='GetAutoList';$data = array('limit'=>'all','order'=>'order','user_id'=>$this->magic_vars['_G']['user_id']);$default = '';  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetAutoList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td ><? if (!isset($this->magic_vars['var']['key'])) $this->magic_vars['var']['key'] = ''; echo $this->magic_vars['var']['key']+1; ?></td>


					<td ><? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==1): ?>����<? else: ?>δ����<? endif; ?></td>


					<td><? if (!isset($this->magic_vars['var']['tender_type'])) $this->magic_vars['var']['tender_type']=''; ;if (  $this->magic_vars['var']['tender_type']==1): ?>�����Ͷ��<? else: ?>������Ͷ��<? endif; ?></td>


					<td>��<? if (!isset($this->magic_vars['var']['tender_account'])) $this->magic_vars['var']['tender_account'] = ''; echo $this->magic_vars['var']['tender_account']; ?></td>


					<td><? if (!isset($this->magic_vars['var']['tender_scale'])) $this->magic_vars['var']['tender_scale'] = '';$_tmp = $this->magic_vars['var']['tender_scale'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?>%</td>


					<td><? if (!isset($this->magic_vars['var']['apr_status'])) $this->magic_vars['var']['apr_status']=''; ;if (  $this->magic_vars['var']['apr_status']==1): ?><? if (!isset($this->magic_vars['var']['apr_first'])) $this->magic_vars['var']['apr_first'] = ''; echo $this->magic_vars['var']['apr_first']; ?>%~<? if (!isset($this->magic_vars['var']['apr_last'])) $this->magic_vars['var']['apr_last'] = ''; echo $this->magic_vars['var']['apr_last']; ?>%<? else: ?>δ����<? endif; ?></td>


					<td><? if (!isset($this->magic_vars['var']['timelimit_status'])) $this->magic_vars['var']['timelimit_status']=''; ;if (  $this->magic_vars['var']['timelimit_status']==1): ?><? if (!isset($this->magic_vars['var']['timelimit_month_first'])) $this->magic_vars['var']['timelimit_month_first'] = ''; echo $this->magic_vars['var']['timelimit_month_first']; ?>~<? if (!isset($this->magic_vars['var']['timelimit_month_last'])) $this->magic_vars['var']['timelimit_month_last'] = ''; echo $this->magic_vars['var']['timelimit_month_last']; ?><? else: ?>������<? endif; ?></td>


					<td><? if (!isset($this->magic_vars['var']['borrow_credit_status'])) $this->magic_vars['var']['borrow_credit_status']=''; ;if (  $this->magic_vars['var']['borrow_credit_status']==1): ?><? if (!isset($this->magic_vars['var']['borrow_credit_first'])) $this->magic_vars['var']['borrow_credit_first'] = ''; echo $this->magic_vars['var']['borrow_credit_first']; ?>~<? if (!isset($this->magic_vars['var']['borrow_credit_last'])) $this->magic_vars['var']['borrow_credit_last'] = ''; echo $this->magic_vars['var']['borrow_credit_last']; ?><? else: ?>������<? endif; ?></td>


					<td><? if (!isset($this->magic_vars['var']['late_status'])) $this->magic_vars['var']['late_status']=''; ;if (  $this->magic_vars['var']['late_status']==1): ?><? if (!isset($this->magic_vars['var']['late_times'])) $this->magic_vars['var']['late_times'] = ''; echo $this->magic_vars['var']['late_times']; ?><? else: ?>������<? endif; ?></td>


					<td><? if (!isset($this->magic_vars['var']['dianfu_status'])) $this->magic_vars['var']['dianfu_status']=''; ;if (  $this->magic_vars['var']['dianfu_status']==1): ?><? if (!isset($this->magic_vars['var']['dianfu_times'])) $this->magic_vars['var']['dianfu_times'] = ''; echo $this->magic_vars['var']['dianfu_times']; ?><? else: ?>������<? endif; ?></td>


					<td><? if (!isset($this->magic_vars['var']['tuijian_status'])) $this->magic_vars['var']['tuijian_status']=''; ;if (  $this->magic_vars['var']['tuijian_status']==1): ?>��<? else: ?>������<? endif; ?></td>


					<td><? if (!isset($this->magic_vars['var']['vouch_status'])) $this->magic_vars['var']['vouch_status']=''; ;if (  $this->magic_vars['var']['vouch_status']==1): ?>��<? else: ?>������<? endif; ?></td>


					<td><a href="/index.php?user&q=code/borrow/auto_new&id=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>">�޸�</a> <a href="#" onclick="javascript:if(confirm('��ȷ��Ҫɾ�����Զ�Ͷ����')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/auto_del&id=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>'">ɾ��</a></td>


				</tr>


				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>


			</form>	


		</table>
		</div>


		


		


		<!--�Զ�Ͷ�� ����-->


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="auto_new"): ?>
		<form  method="post" name="form1"  action="/index.php?user&q=code/borrow/auto_add" >
		
		<div class="user_main_title1">�Զ�Ͷ��ʱ��ֻ������������ѡ�������ʱϵͳ�Ż�Ϊ���Զ�Ͷ�ꡣ</div>
		<div> 
        <div class="sideT" style=" line-height:30px; height:550px; padding-top:10px;"> 
            <div class="user_right_title"><span class=""><strong><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/arrow111.gif" /> �������Ϣ����</strong></span></div> 

			<div class="set_table"> 


			


            <table border="0" style="text-align:left;font-size:12px;"> 


                    <tr> 


                        <th> 


                            ״̬��


                        </th> 


                        <td> 


                           <input id="status" type="checkbox" name="status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['status'])) $this->magic_vars['_U']['auto_result']['status']=''; ;if (  $this->magic_vars['_U']['auto_result']['status']==1): ?> checked="checked" <? endif; ?>/><label for="">�Ƿ�����</label><span>(�����ѡ����ǰ���򲻻���Ч)</span> 


                        </td> 


                    </tr> 


                    <tr> 


                        <th> 


                            ÿ��Ͷ���


                        </th> 


                        <td> 


                            <span style="color:Blue;font-weight:bold;"><input  type="radio" name="tender_type" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['tender_type'])) $this->magic_vars['_U']['auto_result']['tender_type']='';if (!isset($this->magic_vars['_U']['auto_result']['tender_type'])) $this->magic_vars['_U']['auto_result']['tender_type']=''; ;if (  $this->magic_vars['_U']['auto_result']['tender_type']==1 ||  $this->magic_vars['_U']['auto_result']['tender_type']==""): ?> checked="checked"<? endif; ?>  /><label for="">�����Ͷ��</label></span> 


                            <input name="tender_account" type="text" maxlength="5" id="tender_account"  style="width:80px;" value="<? if (!isset($this->magic_vars['_U']['auto_result']['tender_account'])) $this->magic_vars['_U']['auto_result']['tender_account'] = ''; echo $this->magic_vars['_U']['auto_result']['tender_account']; ?>" />Ԫ<span>(����100Ԫ,100�ı���)</span> 


                         <!--   <span style="color:Blue;font-weight:bold;"><input  type="radio" name="tender_type" value="2"  <? if (!isset($this->magic_vars['_U']['auto_result']['tender_type'])) $this->magic_vars['_U']['auto_result']['tender_type']=''; ;if (  $this->magic_vars['_U']['auto_result']['tender_type']==2): ?> checked="checked"<? endif; ?>  /><label for="">������Ͷ��</label></span> 


                            <input name="tender_scale" type="text" value="<? if (!isset($this->magic_vars['_U']['auto_result']['tender_scale'])) $this->magic_vars['_U']['auto_result']['tender_scale'] = ''; echo $this->magic_vars['_U']['auto_result']['tender_scale']; ?>" maxlength="2"  style="width:80px;" />%<span>(ֻ����1%~<span id="">20</span>%)</span> -->


                        </td> 
                    </tr> 


                    <tr> 


                        <th> 


                        </th> 


                        <td> 


                        <span>(��ǰ��������ʱϵͳ��Ϊ���Զ�Ͷ��Ķ�ȣ�Ͷ����ͱ�����ֻ��Ϊ����0��Ϊ������)</span><br /> 


                        <span style="color:Red;">1�����������ĵ����Ͷ�������Ա�ĵ������Ϊ׼�����С�ڱ�ĵ���СͶ������Ͷ��


                        <br />2����������Ͷ��ʱ���������趨�ı�����ý������100Ԫʱ����100Ԫ����Ͷ�ꡣ


                        <br />3����������Ͷ��ʱ���������趨�ı�����ý����ڱ�����Ͷ����ʱ�������Ͷ�������Ͷ�ꡣ


                        <br />4����Ͷ������ڱ�Ľ���<span id="">20</span>%ʱ���򰴴˱�������Ͷ�ꡣ


                        </span></td> 


                        </tr> 


                    </table> 


            </div> 


            <div class="set_table"> 


                <table border="0" style="text-align:left;font-size:12px;"> 


                    <tr> 


                        <th> 


                            ��ϵѡ�


                        </th> 


                        <td> 


                            <input id="my_friend" type="checkbox" name="my_friend" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['my_friend'])) $this->magic_vars['_U']['auto_result']['my_friend']=''; ;if (  $this->magic_vars['_U']['auto_result']['my_friend']==1): ?> checked="checked"<? endif; ?>/><label for="my_friend">�������ҵĺ���</label> 


                        </td> 


                        <td> 


                           <span>(��ѡ����û�д�������)</span> 


                        </td> 


                    </tr> 


                    <tr> 


                        <th> 


                            �������ã�


                        </th> 


                        <td> 


                            <input id="late_status" type="checkbox" name="late_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['late_status'])) $this->magic_vars['_U']['auto_result']['late_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_status']==1): ?> checked="checked"<? endif; ?> /><label for="late_status">���ڴ�������С�ڵ���(��)</label> 


                            <select name="late_times" id="late_times"> 


	<option <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']='';if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==0 ||  $this->magic_vars['_U']['auto_result']['late_times']==""): ?> selected="selected"<? endif; ?> value="0">0</option> 


	<option value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==1): ?> selected="selected"<? endif; ?> >1</option> 


	<option value="2" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==2): ?> selected="selected"<? endif; ?> >2</option> 


	<option value="3" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==3): ?> selected="selected"<? endif; ?> >3</option> 


	<option value="4" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==4): ?> selected="selected"<? endif; ?> >4</option> 


	<option value="5" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==5): ?> selected="selected"<? endif; ?> >5</option> 


	<option value="6" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==6): ?> selected="selected"<? endif; ?> >6</option> 


	<option value="7" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==7): ?> selected="selected"<? endif; ?> >7</option> 


	<option value="8" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==8): ?> selected="selected"<? endif; ?> >8</option> 


	<option value="9" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==9): ?> selected="selected"<? endif; ?> >9</option> 


	<option value="10" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==10): ?> selected="selected"<? endif; ?> >10</option> 


 


</select> 


                            


                        </td> 


                        <td> 


                           <input id="dianfu_status" type="checkbox" name="dianfu_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_status'])) $this->magic_vars['_U']['auto_result']['dianfu_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_status']==1): ?> checked="checked"<? endif; ?>  /><label for="dianfu_status">���渶��������С�ڵ���(��)</label> 


                            <select name="dianfu_times" id="dianfu_times"> 


	<option <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']='';if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==0 ||  $this->magic_vars['_U']['auto_result']['dianfu_times']==""): ?> selected="selected"<? endif; ?> value="0">0</option> 


	<option value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==1): ?> selected="selected"<? endif; ?> >1</option> 


	<option value="2" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==2): ?> selected="selected"<? endif; ?> >2</option> 


	<option value="3" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==3): ?> selected="selected"<? endif; ?> >3</option> 


	<option value="4" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==4): ?> selected="selected"<? endif; ?> >4</option> 


	<option value="5" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==5): ?> selected="selected"<? endif; ?> >5</option> 


	<option value="6" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==6): ?> selected="selected"<? endif; ?> >6</option> 


	<option value="7" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==7): ?> selected="selected"<? endif; ?> >7</option> 


	<option value="8" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==8): ?> selected="selected"<? endif; ?> >8</option> 


	<option value="9" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==9): ?> selected="selected"<? endif; ?> >9</option> 


	<option value="10" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==10): ?> selected="selected"<? endif; ?> >10</option> 


 


</select> 


                        </td> 


                    </tr> 

                    <tr> 


                        <th> 


                            ���û��֣�


                        </th> 


                        <td> 


                           <input id="borrow_credit_status" type="checkbox" name="borrow_credit_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['borrow_credit_status'])) $this->magic_vars['_U']['auto_result']['borrow_credit_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['borrow_credit_status']==1): ?> checked="checked"<? endif; ?>/><label for="borrow_credit_status">���ֱ���Ϊ</label> 


                           <input name="borrow_credit_first" type="text" value="<? if (!isset($this->magic_vars['_U']['auto_result']['borrow_credit_first'])) $this->magic_vars['_U']['auto_result']['borrow_credit_first'] = ''; echo $this->magic_vars['_U']['auto_result']['borrow_credit_first']; ?>" maxlength="6" id="borrow_credit_first" style="width:50px;" />~<input name="borrow_credit_last" type="text" value="<? if (!isset($this->magic_vars['_U']['auto_result']['borrow_credit_last'])) $this->magic_vars['_U']['auto_result']['borrow_credit_last'] = ''; echo $this->magic_vars['_U']['auto_result']['borrow_credit_last']; ?>" maxlength="6" id="borrow_credit_last"  style="width:50px;" /> 


                        </td> 


                       


                    </tr> 


                    


                </table> 


            </div> 


            <div class="user_right_title"> 


                <span class=""><strong><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/arrow111.gif" /> �����Ϣ����</strong></span></div> 


            <div class="set_table" style=" clear:both;"> 


                <table border="0" style="text-align:left; float:left;font-size:12px;" > 


                <tr> 


                        <th> 


                            ���ʽ��


                        </th> 


                        <td> 


                            <input id="borrow_style_status" type="checkbox" name="borrow_style_status" value="1"  <? if (!isset($this->magic_vars['_U']['auto_result']['borrow_style_status'])) $this->magic_vars['_U']['auto_result']['borrow_style_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['borrow_style_status']==1): ?> checked="checked"<? endif; ?>/><label for="">���ʽ����Ϊ</label> 


                            <select name="borrow_style" id="borrow_style" > 


	<option value="0"  <? if (!isset($this->magic_vars['_U']['auto_result']['borrow_style'])) $this->magic_vars['_U']['auto_result']['borrow_style']=''; ;if (  $this->magic_vars['_U']['auto_result']['borrow_style']==0): ?> selected="selected"<? endif; ?>>���·��ڻ���</option> 


	<option value="1"  <? if (!isset($this->magic_vars['_U']['auto_result']['borrow_style'])) $this->magic_vars['_U']['auto_result']['borrow_style']=''; ;if (  $this->magic_vars['_U']['auto_result']['borrow_style']==1): ?> selected="selected"<? endif; ?>>�������ڻ���</option> 


	<option value="2"  <? if (!isset($this->magic_vars['_U']['auto_result']['borrow_style'])) $this->magic_vars['_U']['auto_result']['borrow_style']=''; ;if (  $this->magic_vars['_U']['auto_result']['borrow_style']==2): ?> selected="selected"<? endif; ?>>���ڻ���</option> 


 


</select> 


                        </td> 


                        <td><span>(��ѡ����û�д�������)</span></td> 


                    </tr> 


                    <tr> 


                        <th> 


                            ������ޣ�


                        </th> 


                        <td> 


                           <input id="timelimit_status"  name="timelimit_status" type="radio" value="0" checked="checked" <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_status'])) $this->magic_vars['_U']['auto_result']['timelimit_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_status']==0): ?> checked="checked"<? endif; ?>/><label for="">���޶�������޷�Χ</label> 


                        </td> 


                        <td> 


                            <span></span> 


                        </td> 


                    </tr> 


                <tr> 


                        <th> 


                        </th> 


                        <td> 


                           <span title="��ѡ��ֻ�԰��»������������Ч"><input id="timelimit_status" type="radio" name="timelimit_status" value="1"   name="timelimit_status" <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_status'])) $this->magic_vars['_U']['auto_result']['timelimit_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_status']==1): ?> checked="checked"<? endif; ?>/><label for="">������ް��·�Χ������</label></span> 


                           <select name="timelimit_month_first" id="timelimit_month_first"> 


						   <? for( $this->magic_vars['i']=1;$this->magic_vars['i']<=18;$this->magic_vars['i']++){?>


							<option value="<? if (!isset($this->magic_vars['i'])) $this->magic_vars['i'] = ''; echo $this->magic_vars['i']; ?>" <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']='';if (!isset($this->magic_vars['i'])) $this->magic_vars['i']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']== $this->magic_vars['i']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['i'])) $this->magic_vars['i'] = ''; echo $this->magic_vars['i']; ?>����</option> 


							<? };unset($_magic_vars); ?>


							</select> 


                            ~


                            <select name="timelimit_month_last" id="timelimit_month_last"> 


						   <? for( $this->magic_vars['i']=1;$this->magic_vars['i']<=18;$this->magic_vars['i']++){?>


							<option value="<? if (!isset($this->magic_vars['i'])) $this->magic_vars['i'] = ''; echo $this->magic_vars['i']; ?>" <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']='';if (!isset($this->magic_vars['i'])) $this->magic_vars['i']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']== $this->magic_vars['i']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['i'])) $this->magic_vars['i'] = ''; echo $this->magic_vars['i']; ?>����</option> 


							<? };unset($_magic_vars); ?>


							</select> 


                        </td> 


                        <td> 


                            <span>(��ѡ��ֻ�԰��»������������Ч)</span> 


                        </td> 


                    </tr> 


                    


                 <tr> 


                        <th> 


                            ����ѡ�


                        </th> 


                        <td> 


                           <input id="apr_status" type="checkbox" name="apr_status" value="1"  <? if (!isset($this->magic_vars['_U']['auto_result']['apr_status'])) $this->magic_vars['_U']['auto_result']['apr_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_status']==1): ?> checked="checked"<? endif; ?>/><label for="">���ʷ�Χ������</label> 


                           


						    <select name="apr_first" > 


						   <? for( $this->magic_vars['i']=1;$this->magic_vars['i']<=25;$this->magic_vars['i']++){?>


							<option value="<? if (!isset($this->magic_vars['i'])) $this->magic_vars['i'] = ''; echo $this->magic_vars['i']; ?>" <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']='';if (!isset($this->magic_vars['i'])) $this->magic_vars['i']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']== $this->magic_vars['i']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['i'])) $this->magic_vars['i'] = ''; echo $this->magic_vars['i']; ?>%</option> 


							<? };unset($_magic_vars); ?>


							</select> 


	





                            ~


                            <select name="apr_last" > 


						   <? for( $this->magic_vars['i']=5;$this->magic_vars['i']<=25;$this->magic_vars['i']++){?>


							<option value="<? if (!isset($this->magic_vars['i'])) $this->magic_vars['i'] = ''; echo $this->magic_vars['i']; ?>" <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']='';if (!isset($this->magic_vars['i'])) $this->magic_vars['i']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']== $this->magic_vars['i']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['i'])) $this->magic_vars['i'] = ''; echo $this->magic_vars['i']; ?>%</option> 


							<? };unset($_magic_vars); ?>


							</select> 


                        </td> 


                        <td> 


                            <span>(��ѡ����û�д�������)</span> 


                        </td> 


                    </tr>
				<? $data = array('var'=>'Vvar','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['Vvar'] = usersClass::GetUsersVip($data);if(!is_array($this->magic_vars['Vvar'])){ $this->magic_vars['Vvar']=array();}?>
				<? if (!isset($this->magic_vars['Vvar']['status'])) $this->magic_vars['Vvar']['status']=''; ;if (  $this->magic_vars['Vvar']['status']==1): ?>
				<tr>
					<th>����Ҫ��</th> 
					<td>
						<input id="vouch_status" type="checkbox" name="vouch_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['vouch_status'])) $this->magic_vars['_U']['auto_result']['vouch_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['vouch_status']==1): ?> checked="checked"<? endif; ?> /><label for="vouch_status">����Ϊ������</label> 
						<input id="tuijian_status" type="checkbox" name="tuijian_status"  value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['tuijian_status'])) $this->magic_vars['_U']['auto_result']['tuijian_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['tuijian_status']==1): ?> checked="checked"<? endif; ?>/><label for="tuijian_status">����Ϊ���ٱ�</label> 
					</td> 
					<td><span>(ѡ��Ϊ���ҡ���ϵ)</span></td> 
				</tr> 
				<? endif; ?>
				<? unset($_magic_vars);unset($data); ?>
			</table> 
			</div> 
			</div> 


        <div style="text-align:center;"> 

		<input type="hidden" name="id" value="<? if (!isset($_REQUEST['id'])) $_REQUEST['id'] = ''; echo $_REQUEST['id']; ?>" />
        <input type="submit" name="" value="����" id="" style="width:100px;" /> 


        <input type="reset" name="" value="ȡ��" id="" style="width:100px;" /> 


        </div> 


    </div> 
	
	


		</form>


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="care"): ?>


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">
				<tr class="ytit">
					<td colspan="6">�ҹ�ע�Ľ��</td>
				</tr>


				<tr class="ytit1" >


					<td  >����</td>


					<td  >����</td>


					<td  >���(Ԫ)</td>


					<td  >������</td>


					<td  >����</td>


					<td  >����</td>


				</tr>


				<? $this->magic_vars['query_type']='GetCareList';$data = array('var'=>'loop','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['magic_result'] = usersClass::GetCareList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?> >


					<td ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['vouch_status'])) $this->magic_vars['item']['vouch_status']=''; ;if (  $this->magic_vars['item']['vouch_status']==1): ?>������<? if (!isset($this->magic_vars['item']['is_jin'])) $this->magic_vars['item']['is_jin']=''; ;elseif (  $this->magic_vars['item']['is_jin']==1): ?>��ֵ��<? if (!isset($this->magic_vars['item']['is_flow'])) $this->magic_vars['item']['is_flow']=''; ;elseif (  $this->magic_vars['item']['is_flow']==1): ?>��ת��<? if (!isset($this->magic_vars['item']['fast_status'])) $this->magic_vars['item']['fast_status']=''; ;elseif (  $this->magic_vars['item']['fast_status']==1): ?>����<? else: ?>��ͨ��<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>Ԫ</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?> %</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30��
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>����
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>����
                            	<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_account_scale'])) $this->magic_vars['item']['borrow_account_scale'] = '';$_tmp = $this->magic_vars['item']['borrow_account_scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>%</td>
				</tr>


				<? endforeach; endif; unset($_from); ?>




			</form>	


		</table>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>

		<? unset($_magic_vars); ?>

		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="otherloan"): ?>


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >���</td>


					<td  >������</td>


					<td  >ע���û���</td>


					<td  >���ӵ�ַ</td>


					<td  >���ö��/�������</td>


					<td  >������ϸ</td>


					<td  >��ע</td>


					<td  >����</td>


				</tr>


				<? $this->magic_vars['query_type']='GetOtherloanList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetOtherloanList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?> >


					<td  ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['agency'])) $this->magic_vars['item']['agency'] = ''; echo $this->magic_vars['item']['agency']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['url'])) $this->magic_vars['item']['url'] = ''; echo $this->magic_vars['item']['url']; ?></td>


					<td  >��<? if (!isset($this->magic_vars['item']['amount_credit'])) $this->magic_vars['item']['amount_credit'] = ''; echo $this->magic_vars['item']['amount_credit']; ?>/��<? if (!isset($this->magic_vars['item']['amount_vouch'])) $this->magic_vars['item']['amount_vouch'] = ''; echo $this->magic_vars['item']['amount_vouch']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['repay_month'])) $this->magic_vars['item']['repay_month'] = ''; echo $this->magic_vars['item']['repay_month']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = '';$_tmp = $this->magic_vars['item']['remark'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>


					<td  ><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/otherloan_new&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" target="_blank">�޸�</a> <a href="#" onclick="javascript:if(confirm('��ȷ��Ҫɾ������Ϣ')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/otherloan_del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">ɾ��</a></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


			</form>	


		</table>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
		<? unset($_magic_vars); ?>
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="yqblack"): ?>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >ͷ��</td>

					<td  >����</td>

					<td  >��ϵ��ʽ</td>

					<td  >��������</td>

				</tr>


				<? $this->magic_vars['query_type']='GetLateList';$data = array('var'=>'loop','late_days'=>'31');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetLateList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?> >

					<td  ><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank" ><img src="<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = '';$_tmp = $this->magic_vars['item']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");echo $_tmp;unset($_tmp); ?>" border="0" class="picborder"/></a></td>

					<td  >
						<ul class="li" style="text-align:left;">
							<li class="cu" style="height:30px; overflow:hidden"><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" title="<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></li>
							<li>�Ա�<? if (!isset($this->magic_vars['item']['sex'])) $this->magic_vars['item']['sex']=''; ;if (  $this->magic_vars['item']['sex']==1): ?>��<? else: ?>Ů<? endif; ?></li>
							<li>���֤�ţ�<? if (!isset($this->magic_vars['item']['card_id'])) $this->magic_vars['item']['card_id'] = ''; echo $this->magic_vars['item']['card_id']; ?></li>
							<li>�� �� �أ�<? if (!isset($this->magic_vars['item']['city'])) $this->magic_vars['item']['city'] = '';$_tmp = $this->magic_vars['item']['city'];$_tmp = $this->magic_modifier("areas",$_tmp,"p,c");echo $_tmp;unset($_tmp); ?></li>
						</ul>
					</td>

					<td  >
						<ul class="li" style="text-align:left;">
							<li class="cu"><font color="#FF0000">Ƿ���ܶ��<? if (!isset($this->magic_vars['item']['late_account'])) $this->magic_vars['item']['late_account'] = ''; echo $this->magic_vars['item']['late_account']; ?></font></li>
							<li >Email��<? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email'] = ''; echo $this->magic_vars['item']['email']; ?></li>
							<li>�绰��<? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone'] = ''; echo $this->magic_vars['item']['phone']; ?></li>
							<li>QQ��<? if (!isset($this->magic_vars['item']['qq'])) $this->magic_vars['item']['qq'] = ''; echo $this->magic_vars['item']['qq']; ?></li>
						</ul>
					</td>

					<td  >
						<ul class="li" style="text-align:left;">
						<li class="cu"><font color="#FF0000">���ڱ�����<? if (!isset($this->magic_vars['item']['late_num'])) $this->magic_vars['item']['late_num'] = ''; echo $this->magic_vars['item']['late_num']; ?>��</font></li>
						<li>��վ����������<? if (!isset($this->magic_vars['item']['late_webnum'])) $this->magic_vars['item']['late_webnum'] = '';$_tmp = $this->magic_vars['item']['late_webnum'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></li>
						<li>�����������<? if (!isset($this->magic_vars['item']['late_numdays'])) $this->magic_vars['item']['late_numdays'] = ''; echo $this->magic_vars['item']['late_numdays']; ?>��</li>
						<li >����ʱ�䣺<? if (!isset($this->magic_vars['_G']['nowtime'])) $this->magic_vars['_G']['nowtime'] = '';$_tmp = $this->magic_vars['_G']['nowtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></li>
						</ul>
					</td>
				</tr>


				<? endforeach; endif; unset($_from); ?>


				<tr >


					<td colspan="10" class="page">


						<? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?>


					</td>


				</tr>


				<? unset($_magic_vars); ?>


			</form>	


		</table>
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="black"): ?>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >ͷ��</td>

					<td  >����</td>

					<td  >��ϵ��ʽ</td>

					<td  >��������</td>

				</tr>


				<? $this->magic_vars['query_type']='GetBlackList';$data = array('var'=>'loop','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['magic_result'] = usersClass::GetBlackList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?> >

					<td  ><a href="/u/<? if (!isset($this->magic_vars['item']['blackuser_id'])) $this->magic_vars['item']['blackuser_id'] = ''; echo $this->magic_vars['item']['blackuser_id']; ?>"><img src="<? if (!isset($this->magic_vars['item']['blackuser_id'])) $this->magic_vars['item']['blackuser_id'] = '';$_tmp = $this->magic_vars['item']['blackuser_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");echo $_tmp;unset($_tmp); ?>" border="0" class="picborder"/></a></td>

					<td  >
						<ul class="li" style="text-align:left;">
							<li class="cu"><a href="/u/<? if (!isset($this->magic_vars['item']['blackuser_id'])) $this->magic_vars['item']['blackuser_id'] = ''; echo $this->magic_vars['item']['blackuser_id']; ?>"><b><? if (!isset($this->magic_vars['item']['blackuser'])) $this->magic_vars['item']['blackuser'] = ''; echo $this->magic_vars['item']['blackuser']; ?></b></a></li>
							<li>�Ա�<? if (!isset($this->magic_vars['item']['sex'])) $this->magic_vars['item']['sex']=''; ;if (  $this->magic_vars['item']['sex']==1): ?>��<? else: ?>Ů<? endif; ?></li>
							<li>���֤�ţ�<? if (!isset($this->magic_vars['item']['card_id'])) $this->magic_vars['item']['card_id'] = ''; echo $this->magic_vars['item']['card_id']; ?></li>
							<li>�� �� �أ�<? if (!isset($this->magic_vars['item']['city'])) $this->magic_vars['item']['city'] = '';$_tmp = $this->magic_vars['item']['city'];$_tmp = $this->magic_modifier("areas",$_tmp,"p,c");echo $_tmp;unset($_tmp); ?></li>
						</ul>
					</td>

					<td  >
						<ul class="li" style="text-align:left;">
							<li class="cu"><font color="#FF0000">Ƿ���ܶ��<? if (!isset($this->magic_vars['item']['late_account'])) $this->magic_vars['item']['late_account'] = ''; echo $this->magic_vars['item']['late_account']; ?></font></li>
							<li >Email��<? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email'] = ''; echo $this->magic_vars['item']['email']; ?></li>
							<li>�绰��<? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone'] = ''; echo $this->magic_vars['item']['phone']; ?></li>
							<li>QQ��<? if (!isset($this->magic_vars['item']['qq'])) $this->magic_vars['item']['qq'] = ''; echo $this->magic_vars['item']['qq']; ?></li>
						</ul>
					</td>

					<td  >
						<ul class="li" style="text-align:left;">
						<li class="cu"><font color="#FF0000">���ڱ�����<? if (!isset($this->magic_vars['item']['late_num'])) $this->magic_vars['item']['late_num'] = ''; echo $this->magic_vars['item']['late_num']; ?>��</font></li>
						<li>��վ����������<? if (!isset($this->magic_vars['item']['late_webnum'])) $this->magic_vars['item']['late_webnum'] = '';$_tmp = $this->magic_vars['item']['late_webnum'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></li>
						<li>�����������<? if (!isset($this->magic_vars['item']['late_numdays'])) $this->magic_vars['item']['late_numdays'] = ''; echo $this->magic_vars['item']['late_numdays']; ?>��</li>
						<li >����ʱ�䣺<? if (!isset($this->magic_vars['_G']['nowtime'])) $this->magic_vars['_G']['nowtime'] = '';$_tmp = $this->magic_vars['_G']['nowtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></li>
						</ul>
					</td>
				</tr>


				<? endforeach; endif; unset($_from); ?>


			</form>	


		</table>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>


		<? unset($_magic_vars); ?>
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="otherloan_new"): ?>


		<div class="t20"> 


		����д������վ�Ľ����Ϣ


		</div>


		<form action="" method="post">


		


		


		<div class="user_right_border">


			<div class="e">�������ƣ�</div>


			<div class="c">


				<input type="text" name="agency" value="<? if (!isset($this->magic_vars['_U']['otherloan_result']['agency'])) $this->magic_vars['_U']['otherloan_result']['agency'] = ''; echo $this->magic_vars['_U']['otherloan_result']['agency']; ?>" />


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e">��վ�û�����</div>


			<div class="c">


				<input type="text" name="username" value="<? if (!isset($this->magic_vars['_U']['otherloan_result']['username'])) $this->magic_vars['_U']['otherloan_result']['username'] = ''; echo $this->magic_vars['_U']['otherloan_result']['username']; ?>" />


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e">��վ���ӣ�</div>


			<div class="c">


				<input type="text" name="url" value="<? if (!isset($this->magic_vars['_U']['otherloan_result']['url'])) $this->magic_vars['_U']['otherloan_result']['url'] = ''; echo $this->magic_vars['_U']['otherloan_result']['url']; ?>" />


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e">���ö�ȣ�</div>


			<div class="c">


				<input type="text" name="amount_credit" value="<? if (!isset($this->magic_vars['_U']['otherloan_result']['amount_credit'])) $this->magic_vars['_U']['otherloan_result']['amount_credit'] = ''; echo $this->magic_vars['_U']['otherloan_result']['amount_credit']; ?>" />


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e">������ȣ�</div>


			<div class="c">


				<input type="text" name="amount_vouch" value="<? if (!isset($this->magic_vars['_U']['otherloan_result']['amount_vouch'])) $this->magic_vars['_U']['otherloan_result']['amount_vouch'] = ''; echo $this->magic_vars['_U']['otherloan_result']['amount_vouch']; ?>" />


			</div>


		</div>


		


		


		<div class="user_right_border">


			<div class="e">δ���ܶ</div>


			<div class="c">


				<input type="text" name="repay_nouse" value="<? if (!isset($this->magic_vars['_U']['otherloan_result']['repay_nouse'])) $this->magic_vars['_U']['otherloan_result']['repay_nouse'] = ''; echo $this->magic_vars['_U']['otherloan_result']['repay_nouse']; ?>" />


			</div>


		</div>


		


		


		<div class="user_right_border">


			<div class="e">ÿ�»����ܶ</div>


			<div class="c">


				<input type="text" name="repay_month" value="<? if (!isset($this->magic_vars['_U']['otherloan_result']['repay_month'])) $this->magic_vars['_U']['otherloan_result']['repay_month'] = ''; echo $this->magic_vars['_U']['otherloan_result']['repay_month']; ?>" />


			</div>


		</div>


		


		


		<div class="user_right_border">


			<div class="e">��ע��</div>


			<div class="c">


				<textarea rows="5" cols="40" name="remark"><? if (!isset($this->magic_vars['_U']['otherloan_result']['remark'])) $this->magic_vars['_U']['otherloan_result']['remark'] = ''; echo $this->magic_vars['_U']['otherloan_result']['remark']; ?></textarea>


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e"></div>


			<div class="c">


				<input type="submit" name="name"  value="ȷ���ύ"  class="xinbuton" 
 size="30" /> 


			</div>


		</div>


		</form>


		<? endif; ?>


		<script>


var url = "<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type'] = ''; echo $this->magic_vars['_U']['query_type']; ?>";





function sousuo(urla){


	if (urla!="") url = urla;


	var _url = "";


	var dotime1 = $("#dotime1").val();


	var keywords = $("#keywords").val();


	var username = $("#username").val();


	var status = $("#status").val();


	var reply_status = $("#reply_status").val();


	var tender_username = $("#tender_username").val();


	var dotime2 = $("#dotime2").val();


	if (username!=null){


		 _url += "&username="+username;


	}


	if (tender_username!=null){


		 _url += "&tender_username="+tender_username;


	}


	if (status!=null){


		 _url += "&status="+status;


	}


	if (reply_status!=null){


		 _url += "&reply_status="+reply_status;


	}


	if (keywords!=null){


		 _url += "&keywords="+keywords;


	}


	if (dotime1!=null){


		 _url += "&dotime1="+dotime1;


	}


	if (dotime2!=null){


		 _url += "&dotime2="+dotime2;


	}


	location.href=url+_url;


}





</script>





</div>

</div>
</div>
</div>
<div style="clear:both;"></div>
<? $this->magic_include(array('file' => "user_footer.html", 'vars' => array()));?>