<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('space_home');
0
|| checktplrefresh('./template/default/home/space_home.htm', './template/singcere_note/common/header.htm', 1397551836, 'diy', './data/template/2_diy_home_space_home.tpl.php', './template/singcere_note', 'home/space_home')
|| checktplrefresh('./template/default/home/space_home.htm', './template/default/home/space_header.htm', 1397551836, 'diy', './data/template/2_diy_home_space_home.tpl.php', './template/singcere_note', 'home/space_home')
|| checktplrefresh('./template/default/home/space_home.htm', './template/default/home/space_userabout.htm', 1397551836, 'diy', './data/template/2_diy_home_space_home.tpl.php', './template/singcere_note', 'home/space_home')
|| checktplrefresh('./template/default/home/space_home.htm', './template/singcere_note/common/footer.htm', 1397551836, 'diy', './data/template/2_diy_home_space_home.tpl.php', './template/singcere_note', 'home/space_home')
|| checktplrefresh('./template/default/home/space_home.htm', './template/default/common/header_common.htm', 1397551836, 'diy', './data/template/2_diy_home_space_home.tpl.php', './template/singcere_note', 'home/space_home')
|| checktplrefresh('./template/default/home/space_home.htm', './template/default/common/pubsearchform.htm', 1397551836, 'diy', './data/template/2_diy_home_space_home.tpl.php', './template/singcere_note', 'home/space_home')
|| checktplrefresh('./template/default/home/space_home.htm', './template/default/common/header_common.htm', 1397551836, 'diy', './data/template/2_diy_home_space_home.tpl.php', './template/singcere_note', 'home/space_home')
|| checktplrefresh('./template/default/home/space_home.htm', './template/default/home/space_diy.htm', 1397551836, 'diy', './data/template/2_diy_home_space_home.tpl.php', './template/singcere_note', 'home/space_home')
|| checktplrefresh('./template/default/home/space_home.htm', './template/default/home/space_header_personalnv.htm', 1397551836, 'diy', './data/template/2_diy_home_space_home.tpl.php', './template/singcere_note', 'home/space_home')
;?>
<?php if(empty($diymode)) { ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> Powered by Discuz!</title>
<?php echo $_G['setting']['seohead'];?>

<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } if(empty($nobbname)) { ?>,<?php echo $_G['setting']['bbname'];?><?php } ?>" />
<meta name="generator" content="Discuz! <?php echo $_G['setting']['version'];?>" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2012 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_common.css?<?php echo VERHASH;?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_home_space.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php if(empty($_GET['diy'])) { ?><?php $_GET['diy'] = '';?><?php } if(!isset($topic)) { ?><?php $topic = array();?><?php } ?>
<meta name="application-name" content="<?php echo $_G['setting']['bbname'];?>" />
<meta name="msapplication-tooltip" content="<?php echo $_G['setting']['bbname'];?>" />
<?php if($_G['setting']['portalstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['1']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G['siteurl'].'portal.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/portal.ico" /><?php } ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['2']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G['siteurl'].'forum.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/bbs.ico" />
<?php if($_G['setting']['groupstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['3']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G['siteurl'].'group.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/group.ico" /><?php } if(helper_access::check_module('feed')) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['4']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G['siteurl'].'home.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/home.ico" /><?php } if($_G['basescript'] == 'forum' && $_G['setting']['archiver']) { ?>
<link rel="archives" title="<?php echo $_G['setting']['bbname'];?>" href="<?php echo $_G['siteurl'];?>archiver/" />
<?php } if(!empty($rsshead)) { ?><?php echo $rsshead;?><?php } if(widthauto()) { ?>
<link rel="stylesheet" id="css_widthauto" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_widthauto.css?<?php echo VERHASH;?>" />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<?php } if($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'home' || $_G['basescript'] == 'userapp') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'portal') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<link rel="stylesheet" type="text/css" id="diy_common" href="data/cache/style_<?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>" />
<?php } ?>  
</head>

<body id="nv_<?php echo $_G['basescript'];?>" class="page page-template-default custom-background boxed w1600 pg_<?php echo CURMODULE;?><?php if($_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)) { ?> <?php echo $cat['bodycss'];?><?php } ?>" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div><div id="ajaxwaitid"></div>
<?php if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { include template('common/header_diy'); } if(check_diy_perm($topic)) { ?><?php
$__STATICURL = STATICURL;$diynav = <<<EOF

<a id="diy-tg" href="javascript:openDiy();" title="�� DIY ���" class="xi1 xw1" onMouseMove="showMenu(this.id)"><img src="{$__STATICURL}image/diy/panel-toggle.png" alt="DIY" /></a>
<div id="diy-tg_menu" style="display: none;">
<ul>
<li><a href="javascript:saveUserdata('diy_advance_mode', '');openDiy();" class="xi2">���ģʽ</a></li>
<li><a href="javascript:saveUserdata('diy_advance_mode', '1');openDiy();" class="xi2">�߼�ģʽ</a></li>
</ul>
</div>

EOF;
?>
<?php } if(CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)) { ?>
<?php echo $diynav;?>
<?php } if(empty($topic) || $topic['useheader']) { if($_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')) { ?>
<div class="xi1 bm bm_c">
    ��ѡ�� <a href="<?php echo $_G['siteurl'];?>forum.php?mobile=yes">�����ֻ���</a> <span class="xg1">|</span> <a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>">�������ʵ��԰�</a>
</div>
<?php } ?>

<div id="toptb" class="cl">
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_top'])) echo $_G['setting']['pluginhooks']['global_cpnav_top'];?>
<div class="wp">
<div class="z"><?php if(is_array($_G['setting']['topnavs']['0'])) foreach($_G['setting']['topnavs']['0'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra1'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra1'];?>
</div>
<div class="y">
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra2'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra2'];?><?php if(is_array($_G['setting']['topnavs']['1'])) foreach($_G['setting']['topnavs']['1'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } if(empty($_G['disabledwidthauto']) && $_G['setting']['switchwidthauto']) { ?>
<a href="javascript:;" onClick="widthauto(this)"><?php if(widthauto()) { ?>�л���խ��<?php } else { ?>�л������<?php } ?></a>
<?php } if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?><a id="sslct" href="javascript:;" onMouseOver="delayShow(this, function() {showMenu({'ctrlid':'sslct','pos':'34!'})});">�л����</a><?php } if(check_diy_perm($topic)) { ?>
<?php echo $diynav;?>
<?php } ?>
</div>
</div>
</div>

<?php if(!IS_ROBOT) { if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?>
<div id="sslct_menu" class="cl p_pop" style="display: none;">
<?php if(!$_G['style']['defaultextstyle']) { ?><span class="sslct_btn" onClick="extstyle('')" title="Ĭ��"><i></i></span><?php } if(is_array($_G['style']['extstyle'])) foreach($_G['style']['extstyle'] as $extstyle) { ?><span class="sslct_btn" onClick="extstyle('<?php echo $extstyle['0'];?>')" title="<?php echo $extstyle['1'];?>"><i style='background:<?php echo $extstyle['2'];?>'></i></span>
<?php } ?>
</div>
<?php } ?>

<div id="qmenu_menu" class="p_pop <?php if(!$_G['uid']) { ?>blk<?php } ?>" style="display: none;">
<?php if($_G['uid']) { ?>
<ul><?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
<li><?php echo $nav['code'];?></li>
<?php } } ?>
</ul>
<?php } elseif($_G['connectguest']) { ?>
<div class="ptm pbw hm">
����<br /><a class="xi2" href="member.php?mod=connect"><strong>�����ʺ���Ϣ</strong></a> �� <a href="member.php?mod=connect&amp;ac=bind" class="xi2 xw1"><strong>�������ʺ�</strong></a><br />��ʹ�ÿ�ݵ���
</div>
<?php } else { ?>
<div class="ptm pbw hm">
�� <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>��¼</strong></a> ��ʹ�ÿ�ݵ���<br />û���ʺţ�<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2 xw1"><?php echo $_G['setting']['reglinkname'];?></a>
</div>
<?php } ?>
</div>
<?php } ?>














<div class="container" id="page"><?php echo adshow("headerbanner/wp a_h");?><?php $mnid = getcurrentnav();?>  <div id="header">
    <div class="toplogo">
        <div class="row">
          <div class="branding">
            <div class="columns five z">
              <div class="logo">
                <h1 id="site-title">
                <?php if(!isset($_G['setting']['navlogos'][$mnid])) { ?><a href="./" title="<?php echo $_G['setting']['bbname'];?>" class="hover" rel="home"><?php echo $_G['style']['boardlogo'];?></a><?php } else { ?><?php echo $_G['setting']['navlogos'][$mnid];?><?php } ?>
                </h1>
              </div>
            </div>
            <div class="columns y">

<div class="hdc cl">

<?php if($_G['uid']) { ?>
<div id="um">
<div class="avt y"><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>"><?php echo avatar($_G[uid],small);?></a></div>
<div class="diynav">
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?><?php $upgradecredit = $_G['uid'] && $_G['group']['grouptype'] == 'member' && $_G['group']['groupcreditslower'] != 999999999 ? $_G['group']['groupcreditslower'] - $_G['member']['credits'] : false;?><a href="home.php?mod=spacecp&amp;ac=credit&amp;showcredit=1" id="extcreditmenu">����: <?php echo $_G['member']['credits'];?></a>
</div>
                        <br/>
<p>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra2'])) echo $_G['setting']['pluginhooks']['global_usernav_extra2'];?>
<a href="home.php?mod=space&amp;do=pm" id="pm_ntc"<?php if($_G['member']['newpm']) { ?> class="new"<?php } ?>>��Ϣ</a>
<span class="pipe">|</span><a href="home.php?mod=space&amp;do=notice" id="myprompt"<?php if($_G['member']['newprompt']) { ?> class="new"<?php } ?>>����<?php if($_G['member']['newprompt']) { ?>(<?php echo $_G['member']['newprompt'];?>)<?php } ?></a><span id="myprompt_check"></span>
<?php if($_G['setting']['taskon'] && !empty($_G['cookie']['taskdoing_'.$_G['uid']])) { ?><span class="pipe">|</span><a href="home.php?mod=task&amp;item=doing" id="task_ntc" class="new">�����е�����</a>
<?php } ?>
<span class="pipe">|</span><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="�����ҵĿռ�" id="umnav" class="showmenu" onMouseOver="showMenu({'ctrlid':this.id,'ctrlclass':'a'})"><?php echo $_G['member']['username'];?></a>
<ul id="umnav_menu" class="p_pop nav_pop" style="display: none;"><?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php $nav[code] = str_replace('style="', '_style="', $nav[code]);?><li><?php echo $nav['code'];?></li>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra3'])) echo $_G['setting']['pluginhooks']['global_usernav_extra3'];?>
<li><a href="home.php?mod=spacecp">����</a></li>
<?php if(($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))) { ?>
<li><a href="portal.php?mod=portalcp"><?php if($_G['setting']['portalstatus'] ) { ?>�Ż�����<?php } else { ?>ģ�����<?php } ?></a></li>
<?php } if($_G['uid'] && $_G['group']['radminid'] > 1) { ?>
<li><a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" target="_blank"><?php echo $_G['setting']['navs']['2']['navname'];?>����</a></li>
<?php } if($_G['uid'] && $_G['adminid'] == 1 && $_G['setting']['cloud_status']) { ?>
<li><a href="admin.php?frames=yes&amp;action=cloud&amp;operation=applist" target="_blank">��ƽ̨</a></li>
<?php } if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?>
<li><a href="admin.php" target="_blank">��������</a></li>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra4'])) echo $_G['setting']['pluginhooks']['global_usernav_extra4'];?>
<li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a></li>
</ul>
</p>
</div>
<?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
<p>
<strong><a id="loginuser" class="noborder"><?php echo dhtmlspecialchars($_G['cookie']['loginuser']); ?></a></strong>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=login" onClick="showWindow('login', this.href)">����</a>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a>
</p>
<?php } elseif(!$_G['connectguest']) { include template('member/login_simple'); } else { ?>
<div id="um">
<div class="avt y"><?php echo avatar(0,small);?></div>
<p>
<strong class="vwmy qq"><?php echo $_G['member']['username'];?></strong>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a>
</p>
<p>
<a href="home.php?mod=spacecp&amp;ac=credit&amp;showcredit=1">����: 0</a>
<span class="pipe">|</span>�û���: <?php echo $_G['group']['grouptitle'];?>
</p>
</div>
<?php } ?>
</div>

            
            
              
              
            </div>
          </div>
        </div>
    </div>
    <div class="row full-width navigation" style="background-color: #026890;">
      <div class="twelve columns">
        <div class="row">
          <div class="twelve columns">
              <ul class="nav-bar">
                <?php if(is_array($_G['setting']['navs'])) foreach($_G['setting']['navs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><li <?php if($mnid == $nav['navid']) { ?>class="a" <?php } ?><?php echo $nav['nav'];?>></li><?php } } ?>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
<?php if(!empty($_G['setting']['plugins']['jsmenu'])) { ?>
<ul class="p_pop h_pop" id="plugin_menu" style="display: none"><?php if(is_array($_G['setting']['plugins']['jsmenu'])) foreach($_G['setting']['plugins']['jsmenu'] as $module) { ?> <?php if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?>
 <li><?php echo $module['url'];?></li>
 <?php } } ?>
</ul>
<?php } ?>
<?php echo $_G['setting']['menunavs'];?>
<div id="mu" class="cl">
<?php if($_G['setting']['subnavs']) { if(is_array($_G['setting']['subnavs'])) foreach($_G['setting']['subnavs'] as $navid => $subnav) { if($_G['setting']['navsubhover'] || $mnid == $navid) { ?>
<ul class="cl <?php if($mnid == $navid) { ?>current<?php } ?>" id="snav_<?php echo $navid;?>" style="display:<?php if($mnid != $navid) { ?>none<?php } ?>">
<?php echo $subnav;?>
</ul>
<?php } } } ?>
</div><?php echo adshow("subnavbanner/a_mu");?><?php if($_G['setting']['search']) { ?><?php $slist = array();?><?php if($_G['fid'] && $_G['forum']['status'] != 3 && $mod != 'group') { ?><?php
$slist[forumfid] = <<<EOF
<li><a href="javascript:;" rel="curforum" fid="{$_G['fid']}" >����</a></li>
EOF;
?><?php } if($_G['setting']['portalstatus'] && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)) { ?><?php
$slist[portal] = <<<EOF
<li><a href="javascript:;" rel="article">����</a></li>
EOF;
?><?php } if($_G['setting']['search']['forum']['status'] && ($_G['group']['allowsearch'] & 2 || $_G['adminid'] == 1)) { ?><?php
$slist[forum] = <<<EOF
<li><a href="javascript:;" rel="forum" class="curtype">����</a></li>
EOF;
?><?php } if(helper_access::check_module('blog') && $_G['setting']['search']['blog']['status'] && ($_G['group']['allowsearch'] & 4 || $_G['adminid'] == 1)) { ?><?php
$slist[blog] = <<<EOF
<li><a href="javascript:;" rel="blog">��־</a></li>
EOF;
?><?php } if(helper_access::check_module('album') && $_G['setting']['search']['album']['status'] && ($_G['group']['allowsearch'] & 8 || $_G['adminid'] == 1)) { ?><?php
$slist[album] = <<<EOF
<li><a href="javascript:;" rel="album">���</a></li>
EOF;
?><?php } if($_G['setting']['groupstatus'] && $_G['setting']['search']['group']['status'] && ($_G['group']['allowsearch'] & 16 || $_G['adminid'] == 1)) { ?><?php
$slist[group] = <<<EOF
<li><a href="javascript:;" rel="group">{$_G['setting']['navs']['3']['navname']}</a></li>
EOF;
?><?php } ?><?php
$slist[user] = <<<EOF
<li><a href="javascript:;" rel="user">�û�</a></li>
EOF;
?>
<?php } if($_G['setting']['search'] && $slist) { ?>
<div id="scbar" class="<?php if($_G['setting']['srchhotkeywords'] && count($_G['setting']['srchhotkeywords']) > 5) { ?>scbar_narrow <?php } ?>cl">
<form id="scbar_form" method="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?>get<?php } else { ?>post<?php } ?>" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?><?php echo $searchparams['url'];?><?php } else { ?>search.php?searchsubmit=yes<?php } ?>" target="_blank">
<input type="hidden" name="mod" id="scbar_mod" value="search" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="srchtype" value="title" />
<input type="hidden" name="srhfid" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="srhlocality" value="<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>" />
<?php if(!empty($searchparams['params'])) { if(is_array($searchparams['params'])) foreach($searchparams['params'] as $key => $value) { ?><?php $srchotquery .= '&' . $key . '=' . rawurlencode($value);?><input type="hidden" name="<?php echo $key;?>" value="<?php echo $value;?>" />
<?php } ?>
<input type="hidden" name="source" value="discuz" />
<input type="hidden" name="fId" id="srchFId" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="q" id="cloudsearchquery" value="" />

<style>
#scbar { overflow: visible; position: relative; }
#sg{ background: #FFF; width:456px; border: 1px solid #B2C7DA; }
.scbar_narrow #sg { width: 316px; }
#sg li { padding:0 8px; line-height:30px; font-size:14px; }
#sg li span { color:#999; }
.sml { background:#FFF; cursor:default; }
.smo { background:#E5EDF2; cursor:default; }
            </style>
            <div style="display: none; position: absolute; top:37px; left:44px;" id="sg">
                <div id="st_box" cellpadding="2" cellspacing="0"></div>
            </div>
<?php } ?>
<table cellspacing="0" cellpadding="0">
<tr>
<td class="scbar_icon_td"></td>
<td class="scbar_txt_td"><input type="text" name="srchtxt" id="scbar_txt" value="��������������" autocomplete="off" x-webkit-speech speech /></td>
<td class="scbar_type_td"><a href="javascript:;" id="scbar_type" class="showmenu xg1 xs2" onclick="showMenu(this.id)" hidefocus="true">����</a></td>
<td class="scbar_btn_td"><button type="submit" name="searchsubmit" id="scbar_btn" sc="1" class="pn pnc" value="true"><strong class="xi2 xs2">����</strong></button></td>
<td class="scbar_hot_td">
<div id="scbar_hot">
<?php if($_G['setting']['srchhotkeywords']) { ?>
<strong class="xw1">����: </strong><?php if(is_array($_G['setting']['srchhotkeywords'])) foreach($_G['setting']['srchhotkeywords'] as $val) { if($val=trim($val)) { ?><?php $valenc=rawurlencode($val);?><?php
$__FORMHASH = FORMHASH;$srchhotkeywords[] = <<<EOF


EOF;
 if(!empty($searchparams['url'])) { 
$srchhotkeywords[] .= <<<EOF

<a href="{$searchparams['url']}?q={$valenc}&source=hotsearch{$srchotquery}" target="_blank" class="xi2" sc="1">{$val}</a>

EOF;
 } else { 
$srchhotkeywords[] .= <<<EOF

<a href="search.php?mod=forum&amp;srchtxt={$valenc}&amp;formhash={$__FORMHASH}&amp;searchsubmit=true&amp;source=hotsearch" target="_blank" class="xi2" sc="1">{$val}</a>

EOF;
 } 
$srchhotkeywords[] .= <<<EOF


EOF;
?>
<?php } } echo implode('', $srchhotkeywords);; } ?>
</div>
</td>
</tr>
</table>
</form>
</div>
<ul id="scbar_type_menu" class="p_pop" style="display: none;"><?php echo implode('', $slist);; ?></ul>
<script type="text/javascript">
initSearchmenu('scbar', '<?php echo $searchparams['url'];?>');
</script>
<?php } ?><?php if(!empty($_G['setting']['pluginhooks']['global_header'])) echo $_G['setting']['pluginhooks']['global_header'];?>
<?php } ?>

<div id="main">
<div id="wp" class="wp"><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<?php if($_G['setting']['homestyle']) { ?><a href="home.php"><?php echo $_G['setting']['navs']['4']['navname'];?></a><?php } else { ?>��̬</a><?php } ?>
</div>
</div>

<?php if($_G['setting']['homestyle']) { ?><?php echo adshow("text/wp a_t");?><?php } ?>
<style id="diy_style" type="text/css"></style>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>

<div id="ct" class="<?php if($_G['setting']['homestyle']) { ?>ct3_a<?php } else { ?>ct2_a<?php } ?> wp cl">

<div class="appl">
<?php if($_G['setting']['homestyle']) { include template('common/userabout'); } else { ?>
<div class="tbn">
<h2 class="mt bbda">��̬</h2>
<ul>
<li<?php echo $actives['we'];?>><a href="home.php?mod=space&amp;do=home&amp;view=we">���ѵĶ�̬</a></li>
<li<?php echo $actives['me'];?>><a href="home.php?mod=space&amp;do=home&amp;view=me">�ҵĶ�̬</a></li>
<li<?php echo $actives['all'];?>><a href="home.php?mod=space&amp;do=home&amp;view=all">��㿴��</a></li>
<?php if($_G['setting']['my_app_status']) { ?>
<li<?php echo $actives['app'];?>><a href="home.php?mod=space&amp;do=home&amp;view=app">Ӧ�ö�̬</a></li>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['space_home_navlink'])) echo $_G['setting']['pluginhooks']['space_home_navlink'];?>
</ul>
</div>
<?php } ?>
</div>
<!--/sidebar-->
<?php if($_G['setting']['homestyle']) { ?>
<div class="sd ptm">
<?php if(!empty($_G['setting']['pluginhooks']['space_home_side_top'])) echo $_G['setting']['pluginhooks']['space_home_side_top'];?>
<div class="drag">
<!--[diy=diysidetop]--><div id="diysidetop" class="area"></div><!--[/diy]-->
</div>
<?php if($_G['uid'] ) { if($space['profileprogress'] != 100) { ?>
<div class="bm">
<div class="bm_c">
<div class="pbg mbn"><div class="pbr" style="width: <?php if($space['profileprogress'] < 2) { ?>2<?php } else { ?><?php echo $space['profileprogress'];?><?php } ?>%;"></div></div>
<p>������������� <?php echo $space['profileprogress'];?>%, <a href="home.php?mod=spacecp&amp;ac=profile" class="xi2">�������</a></p>
</div>
</div>
<?php } if($_G['setting']['taskon'] && !empty($task) && is_array($task)) { ?>
<div class="bm">
<div class="bm_h cl">
<span class="y">
<a href="home.php?mod=task">ȫ��</a>
</span>
<h2>����</h2>
</div>
<div class="bm_c">
<p class="pbm">���ã�<?php echo $_G['username'];?>����ӭ�������ǡ����������������ͦ�򵥵ģ��Ͽ����μӰ�</p>
<hr class="da m0" />
<dl class="xld cl">
<dd class="m mbw"><img src="<?php echo $task['icon'];?>" width="64" height="64" alt="Icon" /></dd>
<dt><a href="home.php?mod=task&amp;do=view&amp;id=<?php echo $task['taskid'];?>"><?php echo $task['name'];?></a></dt>
<dd>
<p><?php echo $task['description'];?></p>
<?php if(in_array($task['reward'], array('credit', 'magic', 'medal', 'invite', 'group'))) { ?>
<p class="mtn">
<?php if($task['reward'] == 'credit') { ?>
���Ի��<?php echo $_G['setting']['extcredits'][$task['prize']]['title'];?> <strong class="xi1"><?php echo $task['bonus'];?></strong> <?php echo $_G['setting']['extcredits'][$task['prize']]['unit'];?>
<?php } elseif($task['reward'] == 'magic') { ?>
���Ի�õ��� <?php echo $listdata[$task['prize']];?> <strong class="xi1"><?php echo $task['bonus'];?></strong> ��
<?php } elseif($task['reward'] == 'medal') { ?>
���Ի��ѫ�� <strong class="xi1">1</strong> ��
<?php } elseif($task['reward'] == 'invite') { ?>
���Ի�������� <strong class="xi1"><?php echo $task['prize'];?></strong> ��
<?php } elseif($task['reward'] == 'group') { ?>
���������û���ȼ�
<?php } ?>
</p>
<?php } ?>
</dd>
</dl>
</div>
</div>
<?php } ?>
<div class="drag">
<!--[diy=diymagictop]--><div id="diymagictop" class="area"></div><!--[/diy]-->
</div>
<?php if(!empty($magic) && is_array($magic)) { ?>
<div class="bm">
<div class="bm_h cl">
<span class="y">
<a href="home.php?mod=magic">ȫ��</a>
</span>
<h2>����</h2>
</div>
<div class="bm_c">
<dl class="xld cl">
<dd class="m mbw"><img src="<?php echo STATICURL;?>/image/magic/<?php echo $magic['pic'];?>" alt="<?php echo $magic['name'];?>" title="<?php echo $magic['description'];?>" /></dd>
<dt><?php echo $magic['name'];?></dt>
<dd>
<p><?php echo $magic['description'];?></p>
<p class="mtn">�ۼ�
<?php if($_G['setting']['extcredits'][$magic['credit']]['unit']) { ?>
<?php echo $_G['setting']['extcredits'][$magic['credit']]['title'];?> <strong class="xi1"><?php echo $magic['price'];?></strong> <?php echo $_G['setting']['extcredits'][$magic['credit']]['unit'];?>/��
<?php } else { ?>
<strong class="xi1"><?php echo $magic['price'];?></strong> <?php echo $_G['setting']['extcredits'][$magic['credit']]['title'];?>/��
<?php } ?>
</p>
<p class="mtn">
<?php if($magic['num'] > 0) { ?>
<a href="home.php?mod=magic&amp;action=shop&amp;operation=buy&amp;mid=<?php echo $magic['identifier'];?>" onclick="showWindow('magics', this.href);return false;" class="xi2 xw1">����</a>
<?php if($_G['group']['allowmagics'] > 1) { ?>
<span class="pipe">|</span>
<a href="home.php?mod=magic&amp;action=shop&amp;operation=give&amp;mid=<?php echo $magic['identifier'];?>" onclick="showWindow('magics', this.href);return false;" class="xi2">����</a>
<?php } } else { ?>
<span class="xg1">�˵���ȱ��</span>
<?php } ?>
</p>
</dd>
</dl>
</div>
</div>
<?php } } ?>
<div class="drag">
<!--[diy=diydefaultusertop]--><div id="diydefaultusertop" class="area"></div><!--[/diy]-->
</div>
<?php if($defaultusers) { ?>
<div class="bm">
<div class="bm_h cl">
<h2>�����Ƽ�</h2>
</div>
<div class="bm_c">
<ul class="ml mls cl"><?php if(is_array($defaultusers)) foreach($defaultusers as $key => $value) { ?><li>
<a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>" title="<?php if($ols[$value['uid']]) { ?>����<?php } ?>" class="avt">
<?php if($ols[$value['uid']]) { ?><em class="gol"></em><?php } ?><?php echo avatar($value[uid],small);?></a>
<p><a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>" title="<?php echo $value['username'];?>"><?php echo $value['username'];?></a></p>
</li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>

<div class="drag">
<!--[diy=diynewusertop]--><div id="diynewusertop" class="area"></div><!--[/diy]-->
</div>

<?php if($showusers) { ?>
<div class="bm">
<div class="bm_h cl">
<span class="y">
<a href="misc.php?mod=ranklist&amp;type=member">ȫ��</a>
</span>
<h2>��������</h2>
</div>
<div class="bm_c">
<ul class="ml mls cl"><?php if(is_array($showusers)) foreach($showusers as $key => $value) { ?><li>
<a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>" title="<?php if($ols[$value['uid']]) { ?>����<?php } ?>" class="avt">
<?php if($ols[$value['uid']]) { ?><em class="gol"></em><?php } ?><?php echo avatar($value[uid],small);?></a>
<p><a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>" title="<?php echo $value['username'];?>"><?php echo $value['username'];?></a></p>
<!--span><span title="<?php echo $value['credit'];?>"><?php echo $value['credit'];?></span></span-->
</li>
<?php } ?>
</ul>
</div>
</div>
<?php } if($newusers) { ?>
<div class="bm">
<div class="bm_h cl">
<h2>�¼����Ա</h2>
</div>
<div class="bm_c">
<ul class="ml mls cl"><?php if(is_array($newusers)) foreach($newusers as $key => $value) { ?><li>
<a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>" title="<?php if($ols[$value['uid']]) { ?>����<?php } ?>" class="avt">
<?php if($ols[$value['uid']]) { ?><em class="gol"></em><?php } ?><?php echo avatar($value[uid],small);?></a>
<p><a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>" title="<?php echo $value['username'];?>"><?php echo $value['username'];?></a></p>
<span><?php echo $value['regdate'];?></span>
</li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>

<div class="drag">
<!--[diy=diyvisitorlisttop]--><div id="diyvisitorlisttop" class="area"></div><!--[/diy]-->
</div>

<?php if($visitorlist) { ?>
<div class="bm">
<div class="bm_h cl">
<span class="y">
<?php if($_G['setting']['magicstatus'] && $_G['setting']['magics']['visit']) { ?>
<a id="a_magic_visit" href="home.php?mod=magic&amp;mid=visit" onclick="showWindow('magics',this.href,'get', 0)" class="xg1" style="display: inline-block; padding-left: 18px; background: url(<?php echo STATICURL;?>image/magic/visit.small.gif) no-repeat 0 50%;"><?php echo $_G['setting']['magics']['visit'];?></a>
<?php } ?>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=friend&amp;view=visitor">ȫ��</a>
</span>
<h2>�������</h2>
</div>
<div class="bm_c">
<ul class="ml mls cl"><?php if(is_array($visitorlist)) foreach($visitorlist as $key => $value) { ?><li>
<?php if($value['vusername'] == '') { ?>
<div class="avt"><img src="<?php echo STATICURL;?>image/magic/hidden.gif" alt="����" /></div>
<p>����</p>
<span><?php echo dgmdate($value[dateline], 'u', 9999, $_G[setting][dateformat]);?></span>
<?php } else { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $value['vuid'];?>" title="<?php if($ols[$value['vuid']]) { ?>����<?php } ?>" class="avt" c="1">
<?php if($ols[$value['vuid']]) { ?><em class="gol"></em><?php } ?><?php echo avatar($value[vuid],small);?></a>
<p><a href="home.php?mod=space&amp;uid=<?php echo $value['vuid'];?>" title="<?php echo $value['vusername'];?>"><?php echo $value['vusername'];?></a></p>
<span><?php echo dgmdate($value[dateline], 'u', 9999, $_G[setting][dateformat]);?></span>
<?php } ?>
</li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>

<div class="drag">
<!--[diy=diyfriendtop]--><div id="diyfriendtop" class="area"></div><!--[/diy]-->
</div>

<?php if($olfriendlist) { ?>
<div class="bm">
<div class="bm_h cl">
<span class="y">
<?php if($_G['setting']['magicstatus'] && $_G['setting']['magics']['detector']) { ?>
<a id="a_magic_detector" href="home.php?mod=magic&amp;mid=detector" onclick="showWindow('magics',this.href,'get', 0)" class="xg1" style="display: inline-block; padding-left: 18px; background: url(<?php echo STATICURL;?>image/magic/detector.small.gif) no-repeat 0 50%;"><?php echo $_G['setting']['magics']['detector'];?></a>
<?php } ?>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=friend">ȫ��</a>
</span>
<h2>�ҵĺ���</h2>
</div>
<div class="bm_c">
<ul class="ml mls cl"><?php if(is_array($olfriendlist)) foreach($olfriendlist as $key => $value) { ?><li>
<a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>" title="<?php if($ols[$value['uid']]) { ?>����<?php } ?>" class="avt" c="1">
<?php if($ols[$value['uid']]) { ?><em class="gol"></em><?php } ?><?php echo avatar($value[uid],small);?></a>
<p><a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>" title="<?php echo $value['username'];?>"><?php echo $value['username'];?></a></p>
<span><?php if($value['lastactivity']) { ?><?php echo dgmdate($value[lastactivity], 'u', 9999, $_G[setting][dateformat]);?><?php } else { ?>�ȶ�(<?php echo $value['num'];?>)<?php } ?></span>
</li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>

<div class="drag">
<!--[diy=diybirthtop]--><div id="diybirthtop" class="area"></div><!--[/diy]-->
</div>

<?php if($birthlist) { ?>
<div class="bm">
<div class="bm_h cl">
<h2>������������</h2>
</div>
<div class="bm_c">
<table cellpadding="2" cellspacing="4"><?php if(is_array($birthlist)) foreach($birthlist as $key => $values) { ?><tr>
<td align="right" valign="top">
<?php if($values['0']['istoday']) { ?>����<?php } else { ?><?php echo $values['0']['birthmonth'];?>-<?php echo $values['0']['birthday'];?><?php } ?>
</td>
<td style="padding-left:10px;">
<ul><?php if(is_array($values)) foreach($values as $value) { ?><li><a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>"><?php echo $value['username'];?></a></li>
<?php } ?>
</ul>
</td>
</tr>
<?php } ?>
</table>
</div>
</div>
<?php } ?>

<div class="drag">
<!--[diy=diysidebottom]--><div id="diysidebottom" class="area"></div><!--[/diy]-->
</div>

<?php if(!empty($_G['setting']['pluginhooks']['space_home_side_bottom'])) echo $_G['setting']['pluginhooks']['space_home_side_bottom'];?>
</div>
<?php } ?>
<div class="mn ptm pbm">
<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
<?php if($space['uid'] && $space['self']) { if($_G['setting']['homestyle']) { ?>
<div class="bm bw0">
<table cellpadding="0" cellspacing="0" class="mi mbm">
<tr>
<th>
<div class="avatar mbn cl">
<a href="home.php?mod=spacecp&amp;ac=avatar" title="�޸�ͷ��" id="edit_avt"><span id="edit_avt_tar">�޸�ͷ��</span><?php echo avatar($_G[uid],middle);?></a>
</div>
<p><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>" target="_blank" class="o xi2">�����ҵĿռ�</a></p>
</th>
<td>
<h3 class="xs2">
<span class="y xw0 xs1">���� <em class="xi1"><?php echo $space['views'];?></em> �˴η���</span>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>"<?php g_color($space[groupid]);?>><?php echo $space['username'];?></a><?php g_icon($space[groupid]);?></h3><?php include template('home/space_status'); ?></td>
</tr>
</table>
<!--[diy=diycontentmiddle]--><div id="diycontentmiddle" class="area"></div><!--[/diy]-->
<?php if(!empty($_G['setting']['pluginhooks']['space_home_top'])) echo $_G['setting']['pluginhooks']['space_home_top'];?>

</div><?php echo adshow("feed/bm");?><div class="bm bw0">
<ul class="tb cl">
<li<?php echo $actives['we'];?>><a href="home.php?mod=space&amp;do=home&amp;view=we">���ѵĶ�̬</a></li>
<li<?php echo $actives['me'];?>><a href="home.php?mod=space&amp;do=home&amp;view=me">�ҵĶ�̬</a></li>
<li<?php echo $actives['all'];?>><a href="home.php?mod=space&amp;do=home&amp;view=all">��㿴��</a></li>
<?php if($_G['setting']['my_app_status']) { ?>
<li<?php echo $actives['app'];?>><a href="home.php?mod=space&amp;do=home&amp;view=app">Ӧ�ö�̬</a></li>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['space_home_navlink'])) echo $_G['setting']['pluginhooks']['space_home_navlink'];?>
<?php if($_G['setting']['magicstatus'] && $_G['setting']['magics']['thunder']) { ?>
<li class="y"><a id="a_magic_thunder" href="home.php?mod=magic&amp;mid=thunder" onclick="showWindow('magics', this.href, 'get', 0)" style="padding-left: 18px; background: url(<?php echo STATICURL;?>image/magic/thunder.small.gif) no-repeat 0 50%;"><?php echo $_G['setting']['magics']['thunder'];?></a></li>
<?php } ?>
</ul>
<?php } } else { ?>
<div class="bm bw0"><?php $_G['home_tpl_spacemenus'][] = "<a href=\"home.php?mod=space&amp;uid=$space[uid]&amp;do=home&amp;view=me\">TA �Ľ��ڶ�̬</a>";?><?php include template('home/space_menu'); } if($_GET['view'] == 'all') { ?>
<p class="tbmu">
<?php if(!$_G['setting']['homestyle'] && $_G['setting']['magicstatus'] && $_G['setting']['magics']['thunder']) { ?>
<a id="a_magic_thunder" href="home.php?mod=magic&amp;mid=thunder" onclick="showWindow('magics', this.href, 'get', 0)" style="padding-left: 18px; background: url(<?php echo STATICURL;?>image/magic/thunder.small.gif) no-repeat 0 50%;" class="y"><?php echo $_G['setting']['magics']['thunder'];?></a>
<?php } ?>
<a href="home.php?mod=space&amp;do=home&amp;view=all&amp;order=dateline"<?php echo $orderactives['dateline'];?>>���¶�̬</a><span class="pipe">|</span>
<a href="home.php?mod=space&amp;do=home&amp;view=all&amp;order=hot"<?php echo $orderactives['hot'];?>>�ȵ㶯̬</a>
</p>
<?php } elseif($_GET['view'] == 'app' && $_G['setting']['my_app_status']) { ?>
<p class="tbmu">
<a href="home.php?mod=space&amp;do=home&amp;view=app&amp;type=we"<?php echo $typeactives['we'];?>>��������ʲô</a><span class="pipe">|</span>
<a href="home.php?mod=space&amp;do=home&amp;view=app&amp;type=me"<?php echo $typeactives['me'];?>>�������</a><span class="pipe">|</span>
<a href="home.php?mod=space&amp;do=home&amp;view=app&amp;type=all"<?php echo $typeactives['all'];?>>�������ʲô</a>
</p>
<?php } elseif($groups) { ?>
<p class="tbmu">
<?php if(!$_G['setting']['homestyle'] && $_G['setting']['magicstatus'] && $_G['setting']['magics']['thunder']) { ?>
<a id="a_magic_thunder" href="home.php?mod=magic&amp;mid=thunder" onclick="showWindow('magics', this.href, 'get', 0)" style="padding-left: 18px; background: url(<?php echo STATICURL;?>image/magic/thunder.small.gif) no-repeat 0 50%;" class="y"><?php echo $_G['setting']['magics']['thunder'];?></a>
<?php } ?>
<a href="home.php?mod=space&amp;do=home&amp;view=we"<?php echo $gidactives['-1'];?>>ȫ������</a><?php if(is_array($groups)) foreach($groups as $key => $value) { ?><span class="pipe">|</span><a href="home.php?mod=space&amp;do=home&amp;view=we&amp;gid=<?php echo $key;?>"<?php echo $gidactives[$key];?>><?php echo $value;?></a><?php } ?>
</p>
<?php } elseif(!$_G['setting']['homestyle'] && $_G['setting']['magicstatus'] && $_G['setting']['magics']['thunder']) { ?>
<p class="tbmu cl">
<a id="a_magic_thunder" href="home.php?mod=magic&amp;mid=thunder" onclick="showWindow('magics', this.href, 'get', 0)" style="padding-left: 18px; background: url(<?php echo STATICURL;?>image/magic/thunder.small.gif) no-repeat 0 50%;" class="y"><?php echo $_G['setting']['magics']['thunder'];?></a>
</p>
<?php } } else { if($_G['setting']['homepagestyle']) { ?><?php $_G[cookie][extstyle] = false;?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> Powered by Discuz!</title>
<?php echo $_G['setting']['seohead'];?>

<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } if(empty($nobbname)) { ?>,<?php echo $_G['setting']['bbname'];?><?php } ?>" />
<meta name="generator" content="Discuz! <?php echo $_G['setting']['version'];?>" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2012 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_common.css?<?php echo VERHASH;?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_home_space.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php if(empty($_GET['diy'])) { ?><?php $_GET['diy'] = '';?><?php } if(!isset($topic)) { ?><?php $topic = array();?><?php } ?>
<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_G['setting']['csspath'];?>data/cache/style_<?php echo STYLEID;?>_css_space.css?<?php echo VERHASH;?>" />
<link id="style_css" rel="stylesheet" type="text/css" href="<?php echo STATICURL;?>space/<?php if($space['theme']) { ?><?php echo $space['theme'];?><?php } else { ?>t1<?php } ?>/style.css?<?php echo VERHASH;?>">
<style id="diy_style"><?php echo $space['spacecss'];?></style>
</head>

<body id="space" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>

<?php if($space['self'] && $_GET['diy'] == 'yes' && $do == 'index' ) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo $_G['setting']['csspath'];?>data/cache/style_<?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>" /><div id="controlpanel" class="cl">
<div id="controlheader" class="cl">
<p class="y">
<span id="navcancel"><a href="javascript:;" onclick="spaceDiy.cancel();return false;">�ر�</a></span>
<span id="navsave"><a href="javascript:;" onclick="javascript:spaceDiy.save();return false;">����</a></span>
<span id="button_redo" class="unusable"><a href="javascript:;" onclick="spaceDiy.redo();return false;" title="����" onfocus="this.blur();">����</a></span>
<span id="button_undo" class="unusable"><a href="javascript:;" onclick="spaceDiy.undo();return false;" title="����" onfocus="this.blur();">����</a></span>
</p>
<ul id="controlnav">
<li id="navstart" class="current"><a href="javascript:" onclick="spaceDiy.getdiy('start');this.blur();return false;">��ʼ</a></li>
<li id="navlayout"><a href="javascript:;" onclick="spaceDiy.getdiy('layout');this.blur();return false;">��ʽ/����</a></li>
<li id="navstyle"><a href="javascript:;" onclick="spaceDiy.getdiy('style');this.blur();return false;">���</a></li>
<li id="navblock"><a href="javascript:;" onclick="spaceDiy.getdiy('block');this.blur();return false;">ģ��</a></li>
<li id="navdiy"><a href="javascript:;" onclick="spaceDiy.getdiy('diy');this.blur();return false;">�Զ���װ��</a></li>
</ul>
</div>
<div id="controlcontent" class="cl">
<ul id="contentstart" class="content">
  <li><a href="javascript:;" onclick="spaceDiy.getdiy('layout');return false;"><img src="<?php echo STATICURL;?>image/diy/layout.png" />��ʽ</a></li>
  <li><a href="javascript:;" onclick="spaceDiy.getdiy('style');return false;"><img src="<?php echo STATICURL;?>image/diy/style.png" />���</a></li>
  <li><a href="javascript:;" onclick="spaceDiy.getdiy('block');return false;"><img src="<?php echo STATICURL;?>image/diy/module.png" />���ģ��</a></li>
  <li><a href="javascript:;" onclick="spaceDiy.getdiy('diy', 'topicid', '<?php echo $topic['topicid'];?>');return false;"><img src="<?php echo STATICURL;?>image/diy/diy.png" />�Զ���</a></li>
</ul>
</div>
<div id="cpfooter"><table cellpadding="0" cellspacing="0" width="100%"><tr><td class="l">&nbsp;</td><td class="c">&nbsp;</td><td class="r">&nbsp;</td></tr></table></div>
</div>
<form method="post" autocomplete="off" name="diyform" action="home.php?mod=spacecp&amp;ac=index">
<input type="hidden" name="spacecss" value="" />
<input type="hidden" name="style" value="<?php echo $space['theme'];?>" />
<input type="hidden" name="layoutdata" value="" />
<input type="hidden" name="currentlayout" value="<?php echo $userdiy['currentlayout'];?>" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="diysubmit" value="true"/>
</form><?php } ?>

<div id="toptb" class="cl">
<?php if($_G['uid']) { ?>
<div class="y">
<a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" class="xw1" target="_blank" title="�����ҵĿռ�"><?php echo $_G['member']['username'];?></a>
<a href="javascript:;" id="myspace" class="showmenu cur1" onmouseover="showMenu(this.id);">��ݵ���</a>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
<a href="home.php?mod=spacecp">����</a>
<a href="home.php?mod=space&amp;do=pm" id="pm_ntc" target="_blank"<?php if($_G['member']['newpm']) { ?> class="new"<?php } ?>>��Ϣ<?php if($_G['member']['newpm']) { ?>(<?php echo $_G['member']['newpm'];?>)<?php } ?></a>
<a href="home.php?mod=space&amp;do=notice" id="myprompt" target="_blank"<?php if($_G['member']['newprompt']) { ?> class="new"<?php } ?>>����<?php if($_G['member']['newprompt']) { ?>(<?php echo $_G['member']['newprompt'];?>)<?php } ?></a><span id="myprompt_check"></span>
<?php if($_G['group']['allowmanagearticle'] || $_G['group']['allowdiy']|| getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3) || in_array($_G['uid'], $_G['setting']['ext_portalmanager'])) { ?><a href="portal.php?mod=portalcp">�Ż�����</a><?php } if($_G['uid'] && $_G['group']['radminid'] > 1) { ?><a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" target="_blank"><?php echo $_G['setting']['navs']['2']['navname'];?>����</a><?php } if($_G['uid'] && ($_G['group']['radminid'] == 1 || getstatus($_G['member']['allowadmincp'], 1))) { ?><a href="admin.php" target="_blank">��������</a><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra2'])) echo $_G['setting']['pluginhooks']['global_usernav_extra2'];?>
<a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a>
<?php if($space['self'] && $do == 'index') { ?><a id="diy-tg" href="javascript:openDiy();" title="װ��ռ�">DIY</a><?php } ?>
</div>
<?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
<div class="y">
<a id="loginuser" class="xw1"><?php echo $_G['cookie']['loginuser'];?></a>
<a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)">����</a>
<a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a>
</div>
<?php } elseif($_G['connectguest']) { ?>
<div class="y">
<a href="member.php?mod=connect" target="_blank">�����ʺ���Ϣ</a> <a href="member.php?mod=connect&amp;ac=bind" target="_blank">�������ʺ�</a>
</div>
<?php } else { ?>
<div class="y">
<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>"><?php echo $_G['setting']['reglinkname'];?></a>
<a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)">��¼</a>
</div>
<?php } ?>
<div class="z">
<a href="./" title="<?php echo $_G['setting']['bbname'];?>" class="xw1"><?php echo $_G['setting']['bbname'];?></a>
<a href="home.php?mod=space&amp;do=home" id="navs" class="showmenu" onmouseover="showMenu(this.id);">������ҳ</a>
</div>
</div>
<?php if($space['status'] == -1 && $_G['adminid'] == 1 ) { ?>
<p class="ptw xw1 xi1 hm"><img src="<?php echo IMGDIR;?>/locked.gif" alt="Locked" class="vm" /> ��ʾ: ���߱���ֹ��ɾ�� �����Զ����Σ�ֻ�й���Ա�ɼ�</p>
<?php } ?>
<div id="hd" class="wp cl">

<h2 id="spaceinfoshow"><?php space_merge($space, 'field_home'); $space[domainurl] = space_domain($space);getuserdiydata($space);$personalnv = isset($_G['blockposition']['nv']) ? $_G['blockposition']['nv'] : '';?><strong id="spacename" class="mbn">
<?php if($space['spacename']) { ?><?php echo $space['spacename'];?><?php } else { ?><?php echo $space['username'];?>�ĸ��˿ռ�<?php } ?>
</strong>
<span class="xs0 xw0">
<a id="domainurl" href="<?php echo $space['domainurl'];?>" onclick="setCopy('<?php echo $space['domainurl'];?>', '�ռ��ַ���Ƴɹ�');return false;"><?php echo $space['domainurl'];?></a>
<a href="javascript:;" onclick="addFavorite(location.href, document.title)">[�ղ�]</a>
<a id="domainurl" href="<?php echo $space['domainurl'];?>" onclick="setCopy('<?php echo $space['domainurl'];?>', '�ռ��ַ���Ƴɹ�');return false;">[����]</a>
<?php if(!$space['self']) { if(helper_access::check_module('share')) { ?>
<a id="share_space" href="home.php?mod=spacecp&amp;ac=share&amp;type=space&amp;id=<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">[����]</a>
<?php } ?>
<a href="home.php?mod=rss&amp;uid=<?php echo $space['uid'];?>">[RSS]</a>
<?php } ?>
</span>
<span id="spacedescription" class="xs1 xw0 mtn"><?php echo $space['spacedescription'];?></span>
</h2><?php if($_G['adminid'] == 1 && empty($space['self'])) { ?><?php $personalnv['items'] = array(); $personalnv['banitems'] = array(); $personalnv['nvhidden'] = 0;?><?php } ?><?php $nvclass = !empty($personalnv['nvhidden']) ? ' class="mininv"' : '';?><div id="nv">
<ul<?php echo $nvclass;?>>
<?php if(empty($personalnv['nvhidden'])) { if(empty($personalnv['banitems']['index'])) { if($_G['adminid'] == 1 && $_G['setting']['allowquickviewprofile'] == 1) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=index&amp;view=admin"><?php if(!empty($personalnv['items']['index'])) { ?><?php echo $personalnv['items']['index'];?><?php } else { ?>�ռ���ҳ<?php } ?></a></li>
<?php } else { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=index"><?php if(!empty($personalnv['items']['index'])) { ?><?php echo $personalnv['items']['index'];?><?php } else { ?>�ռ���ҳ<?php } ?></a></li>
<?php } } if(empty($personalnv['banitems']['feed']) && helper_access::check_module('feed')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=home&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['feed'])) { ?><?php echo $personalnv['items']['feed'];?><?php } else { ?>��̬<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['doing']) && helper_access::check_module('doing')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=doing&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['doing'])) { ?><?php echo $personalnv['items']['doing'];?><?php } else { ?>��¼<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['blog']) && helper_access::check_module('blog')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=blog&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['blog'])) { ?><?php echo $personalnv['items']['blog'];?><?php } else { ?>��־<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['album']) && helper_access::check_module('album')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=album&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['album'])) { ?><?php echo $personalnv['items']['album'];?><?php } else { ?>���<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['follow']) && helper_access::check_module('follow')) { ?>
<li><a href="home.php?mod=follow&amp;uid=<?php echo $space['uid'];?>&amp;do=view"><?php if(!empty($personalnv['items']['follow'])) { ?><?php echo $personalnv['items']['follow'];?><?php } else { ?>�㲥<?php } ?></a></li>
<?php } if($_G['setting']['allowviewuserthread'] !== false && (empty($personalnv['banitems']['topic']))) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=thread&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['topic'])) { ?><?php echo $personalnv['items']['topic'];?><?php } else { ?>����<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['share']) && helper_access::check_module('share')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=share&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['share'])) { ?><?php echo $personalnv['items']['share'];?><?php } else { ?>����<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['wall']) && helper_access::check_module('wall')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=wall"><?php if(!empty($personalnv['items']['wall'])) { ?><?php echo $personalnv['items']['wall'];?><?php } else { ?>���԰�<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['profile'])) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=profile"><?php if(!empty($personalnv['items']['profile'])) { ?><?php echo $personalnv['items']['profile'];?><?php } else { ?>��������<?php } ?></a></li>
<?php } } ?>
</ul>
</div></div>

<?php if(!empty($_G['setting']['plugins']['jsmenu'])) { ?>
<ul class="p_pop h_pop" id="plugin_menu" style="display: none"><?php if(is_array($_G['setting']['plugins']['jsmenu'])) foreach($_G['setting']['plugins']['jsmenu'] as $module) { ?>     <?php if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?>
     <li><?php echo $module['url'];?></li>
     <?php } } ?>
</ul>
<?php } ?>
<?php echo $_G['setting']['menunavs'];?><?php $mnid = getcurrentnav();?><ul id="navs_menu" class="p_pop topnav_pop" style="display:none;"><?php if(is_array($_G['setting']['navs'])) foreach($_G['setting']['navs'] as $nav) { ?><?php $nav_showmenu = strpos($nav['nav'], 'onmouseover="showMenu(');?>    <?php $nav_navshow = strpos($nav['nav'], 'onmouseover="navShow(')?>    <?php if($nav_hidden !== false || $nav_navshow !== false) { ?><?php $nav['nav'] = preg_replace("/onmouseover\=\"(.*?)\"/i", '',$nav['nav'])?>    <?php } ?>
    <?php if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><li <?php echo $nav['nav'];?>></li><?php } } ?>
</ul>
<ul id="myspace_menu" class="p_pop" style="display:none;">
    <li><a href="home.php?mod=space">�ҵĿռ�</a></li><?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
<li><?php echo $nav['code'];?></li>
<?php } } ?>
</ul>
<div id="ct" class="ct2 wp cl">
<div class="mn">
<div class="bm">
<div class="bm_h">
<h1 class="mt">��������</h1>
</div>
<div class="bm_c">
<?php } else { include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>"><?php echo $space['username'];?></a> <em>&rsaquo;</em>
��������
</div>
</div>
<style id="diy_style" type="text/css"></style>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div><?php include template('home/space_menu'); ?><div id="ct" class="ct1 wp cl">
<div class="mn">
<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
<div class="bm bw0">
<div class="bm_c">
<?php } } ?>

<div id="feed_div" class="e">
<?php if($hotlist) { ?>
<h4 class="et"><a href="home.php?mod=space&amp;do=home&amp;view=all&amp;order=hot" class="y xw0">�鿴�����ȵ� <em>&rsaquo;</em></a>�����ȵ��Ƽ�</h4>
<ul class="el"><?php if(is_array($hotlist)) foreach($hotlist as $value) { ?><?php $value = mkfeed($value);?><?php include template('home/space_feed_li'); } ?>
</ul>
<?php } if($list) { if($_GET['view'] == 'app' && $_G['setting']['my_app_status']) { include template('home/space_home_feed_app'); } else { if(is_array($list)) foreach($list as $day => $values) { if($_GET['view']!='hot') { ?>
<h4 class="et">
<?php if($day=='yesterday') { ?>����<?php } elseif($day=='today') { ?>����<?php } else { ?><?php echo $day;?><?php } ?>
</h4>
<?php } ?>

<ul class="el"><?php if(is_array($values)) foreach($values as $value) { include template('home/space_feed_li'); } ?>
</ul>
<?php } } } elseif($feed_users) { ?>
<div class="xld xlda mtm"><?php if(is_array($feed_users)) foreach($feed_users as $day => $users) { ?><h4 class="et">
<?php if($day=='yesterday') { ?>����<?php } elseif($day=='today') { ?>����<?php } else { ?><?php echo $day;?><?php } ?>
</h4><?php if(is_array($users)) foreach($users as $user) { ?><?php $daylist = $feed_list[$day][$user[uid]];?><?php $morelist = $more_list[$day][$user[uid]];?><dl class="bbda cl">
<dd class="m avt">
<?php if($user['uid']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $user['uid'];?>" target="_blank" c="1"><?php echo avatar($user[uid],small);?></a>
<?php } else { ?>
<img src="<?php echo IMGDIR;?>/systempm.png" alt="" />
<?php } ?>
</dd>
<dd class="cl">
<ul class="el"><?php if(is_array($daylist)) foreach($daylist as $value) { include template('home/space_feed_li'); } ?>
</ul>

<?php if($morelist) { ?>
<p class="xg1 cl"><span onclick="showmore('<?php echo $day;?>', '<?php echo $user['uid'];?>', this);" class="unfold">չ��</span></p>
<div id="feed_more_div_<?php echo $day;?>_<?php echo $user['uid'];?>" style="display:none;">
<ul class="el"><?php if(is_array($morelist)) foreach($morelist as $value) { include template('home/space_feed_li'); } ?>
</ul>
</div>
<?php } ?>
</dd>
</dl>
<?php } } ?>
</div>
<?php } else { ?>
<p class="emp"><?php if($_GET['view'] == 'app' && $_G['setting']['my_app_status']) { ?>��û�����Ӧ�ö�̬��<a href="home.php?mod=space&amp;do=friend">��Ӻ�����Ϊ����������Ϸʱ��������Ļ���</a><?php } else { ?>��û����ض�̬<?php } ?></p>
<?php } if($filtercount) { ?>
<div class="i" id="feed_filter_notice_<?php echo $start;?>">
��������<a href="home.php?mod=spacecp&amp;ac=privacy&amp;op=filter" target="_blank" class="xi2 xw1">ɸѡ����</a>,�� <?php echo $filtercount;?> ����̬������ (<a href="javascript:;" onclick="filter_more(<?php echo $start;?>);" id="a_feed_privacy_more" class="xi2">����鿴</a>)
</div>
<div id="feed_filter_div_<?php echo $start;?>" style="display:none;">
<h4 class="et">�����Ǳ����εĶ�̬</h4>
<ul class="el"><?php if(is_array($filter_list)) foreach($filter_list as $value) { include template('home/space_feed_li'); } ?>
<li><a href="javascript:;" onclick="filter_more(<?php echo $start;?>);">&laquo; ����</a></li>
</ul>
</div>
<?php } ?>

</div>
<!--/id=feed_div-->

<?php if(empty($diymode)) { if($multi) { ?>
<div class="pgs cl mtm"><?php echo $multi;?></div>
<?php } ?>

<?php if(!empty($_G['setting']['pluginhooks']['space_home_bottom'])) echo $_G['setting']['pluginhooks']['space_home_bottom'];?>
<div id="ajax_wait"></div>
</div>

<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->
</div>
<!--/content-->
</div>

<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>

<?php } else { ?>

</div>
</div>
<?php if($_G['setting']['homepagestyle']) { ?>
</div>
<div class="sd"><div id="pcd" class="bm cl"><?php $encodeusername = rawurlencode($space[username]);?><div class="bm_c">
<div class="hm">
<p><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>"><?php echo avatar($space[uid],middle);?></a></p>
<h2 class="xs2"><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>"><?php echo $space['username'];?></a></h2>
</div>
<ul class="xl xl2 cl ul_list">
<?php if($space['self']) { if($_G['setting']['homepagestyle']) { ?>
<li class="ul_diy"><a href="home.php?mod=space&amp;do=index&amp;diy=yes">װ��ռ�</a></li>
<?php } if(helper_access::check_module('wall')) { ?>
<li class="ul_msg"><a href="home.php?mod=space&amp;do=wall">�鿴����</a></li>
<?php } ?>
<li class="ul_avt"><a href="home.php?mod=spacecp&amp;ac=avatar">�༭ͷ��</a></li>
<li class="ul_profile"><a href="home.php?mod=spacecp&amp;ac=profile">��������</a></li>
<?php } else { if(helper_access::check_module('follow')) { ?>
<li class="ul_broadcast"><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>">�鿴�㲥</a></li>
<?php } if(helper_access::check_module('follow') && $space['uid'] != $_G['uid']) { ?>
<li class="ul_flw"><?php $follow = 0;?><?php $follow = C::t('home_follow')->fetch_all_by_uid_followuid($_G['uid'], $space['uid']);?><?php if(!$follow) { ?>
<a id="followmod" onclick="showWindow(this.id, this.href, 'get', 0);" href="home.php?mod=spacecp&amp;ac=follow&amp;op=add&amp;hash=<?php echo FORMHASH;?>&amp;fuid=<?php echo $space['uid'];?>">����TA</a>
<?php } else { ?>
<a id="followmod" onclick="showWindow(this.id, this.href, 'get', 0);" href="home.php?mod=spacecp&amp;ac=follow&amp;op=del&amp;fuid=<?php echo $space['uid'];?>">ȡ������</a>
<?php } ?>
</li>
<?php } ?><?php require_once libfile('function/friend');$isfriend=friend_check($space[uid]);?><?php if(!$isfriend) { ?>
<li class="ul_add"><a href="home.php?mod=spacecp&amp;ac=friend&amp;op=add&amp;uid=<?php echo $space['uid'];?>&amp;handlekey=addfriendhk_<?php echo $space['uid'];?>" id="a_friend_li_<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">��Ϊ����</a></li>
<?php } else { ?>
<li class="ul_ignore"><a href="home.php?mod=spacecp&amp;ac=friend&amp;op=ignore&amp;uid=<?php echo $space['uid'];?>&amp;handlekey=ignorefriendhk_<?php echo $space['uid'];?>" id="a_ignore_<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">�������</a></li>
<?php } if(helper_access::check_module('wall')) { ?>
<li class="ul_contect"><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=wall">��������</a></li>
<?php } ?>
<li class="ul_poke"><a href="home.php?mod=spacecp&amp;ac=poke&amp;op=send&amp;uid=<?php echo $space['uid'];?>&amp;handlekey=propokehk_<?php echo $space['uid'];?>" id="a_poke_<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">����к�</a></li>

<li class="ul_pm"><a href="home.php?mod=spacecp&amp;ac=pm&amp;op=showmsg&amp;handlekey=showmsg_<?php echo $space['uid'];?>&amp;touid=<?php echo $space['uid'];?>&amp;pmid=0&amp;daterange=2" id="a_sendpm_<?php echo $space['uid'];?>" onclick="showWindow('showMsgBox', this.href, 'get', 0)">������Ϣ</a></li>
<?php } ?>
</ul>
<?php if(checkperm('allowbanuser') || checkperm('allowedituser') || $_G['adminid'] == 1) { ?>
<hr class="da mtn m0">
<ul class="ptn xl xl2 cl">
<?php if(checkperm('allowbanuser') || checkperm('allowedituser')) { ?>
<li>
<?php if(checkperm('allowbanuser')) { ?>
<a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=ban&username=<?php echo $encodeusername;?>&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=ban&uid=<?php echo $space['uid'];?><?php } ?>" id="usermanageli" onmouseover="showMenu(this.id)" class="showmenu" target="_blank">�û�����</a>
<?php } else { ?>
<a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=search&username=<?php echo $encodeusername;?>&submit=yes&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=edit&uid=<?php echo $space['uid'];?><?php } ?>" id="usermanageli" onmouseover="showMenu(this.id)" class="showmenu" target="_blank">�û�����</a>
<?php } ?>
</li>
<?php } if($_G['adminid'] == 1) { ?>
<li><a href="forum.php?mod=modcp&amp;action=thread&amp;op=post&amp;do=search&amp;searchsubmit=1&amp;users=<?php echo $encodeusername;?>" id="umanageli" onmouseover="showMenu(this.id)" class="showmenu">���ݹ���</a></li>
<?php } ?>
</ul>
<?php if(checkperm('allowbanuser') || checkperm('allowedituser')) { ?>
<ul id="usermanageli_menu" class="p_pop" style="width: 80px; display:none;">
<?php if(checkperm('allowbanuser')) { ?>
<li><a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=ban&username=<?php echo $encodeusername;?>&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=ban&uid=<?php echo $space['uid'];?><?php } ?>" target="_blank">��ֹ�û�</a></li>
<?php } if(checkperm('allowedituser')) { ?>
<li><a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=search&username=<?php echo $encodeusername;?>&submit=yes&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=edit&uid=<?php echo $space['uid'];?><?php } ?>" target="_blank">�༭�û�</a></li>
<?php } ?>
</ul>
<?php } if($_G['adminid'] == 1) { ?>
<ul id="umanageli_menu" class="p_pop" style="width: 80px; display:none;">
<li><a href="forum.php?mod=modcp&amp;action=thread&amp;op=post&amp;searchsubmit=1&amp;do=search&amp;users=<?php echo $encodeusername;?>" target="_blank">��������</a></li>
<?php if(helper_access::check_module('doing')) { ?>
<li><a href="admin.php?action=doing&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">�����¼</a></li>
<?php } if(helper_access::check_module('blog')) { ?>
<li><a href="admin.php?action=blog&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">������־</a></li>
<?php } if(helper_access::check_module('feed')) { ?>
<li><a href="admin.php?action=feed&amp;searchsubmit=1&amp;detail=1&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">����̬</a></li>
<?php } if(helper_access::check_module('album')) { ?>
<li><a href="admin.php?action=album&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">�������</a></li>
<li><a href="admin.php?action=pic&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">����ͼƬ</a></li>
<?php } if(helper_access::check_module('wall')) { ?>
<li><a href="admin.php?action=comment&amp;searchsubmit=1&amp;detail=1&amp;fromumanage=1&amp;authorid=<?php echo $space['uid'];?>" target="_blank">��������</a></li>
<?php } if(helper_access::check_module('share')) { ?>
<li><a href="admin.php?action=share&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">�������</a></li>
<?php } if(helper_access::check_module('group')) { ?>
<li><a href="admin.php?action=threads&amp;operation=group&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">Ⱥ������</a></li>
<li><a href="admin.php?action=prune&amp;searchsubmit=1&amp;detail=1&amp;operation=group&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">Ⱥ������</a></li>
<?php } ?>
</ul>
<?php } } ?>
</div>
</div>
</div>
<script type="text/javascript">
function succeedhandle_followmod(url, msg, values) {
var fObj = $('followmod');
if(values['type'] == 'add') {
fObj.innerHTML = 'ȡ������';
fObj.href = 'home.php?mod=spacecp&ac=follow&op=del&fuid='+values['fuid'];
} else if(values['type'] == 'del') {
fObj.innerHTML = '����TA';
fObj.href = 'home.php?mod=spacecp&ac=follow&op=add&hash=<?php echo FORMHASH;?>&fuid='+values['fuid'];
}
}
</script><?php } ?>
</div>
<?php } ?><?php helper_manyou::checkupdate();?><script type="text/javascript">
function filter_more(id) {
if($('feed_filter_div_'+id).style.display == '') {
$('feed_filter_div_'+id).style.display = 'none';
$('feed_filter_notice_'+id).style.display = '';
} else {
$('feed_filter_div_'+id).style.display = '';
$('feed_filter_notice_'+id).style.display = 'none';
}
}

function close_feedbox() {
var x = new Ajax();
x.get('home.php?mod=spacecp&ac=common&op=closefeedbox', function(s){
$('feed_box').style.display = 'none';
});
}

function showmore(day, uid, e) {
var obj = 'feed_more_div_'+day+'_'+uid;
$(obj).style.display = $(obj).style.display == ''?'none':'';
if(e.className == 'unfold'){
e.innerHTML = '����';
e.className = 'fold';
} else if(e.className == 'fold') {
e.innerHTML = 'չ��';
e.className = 'unfold';
}
}

var elems = selector('li[class~=magicthunder]', $('feed_div'));
for(var i=0; i<elems.length; i++){
magicColor(elems[i]);
}

function showEditAvt(id) {
$(id).style.display = $(id).style.display == '' ? 'block' : '';
}
if($('edit_avt') && BROWSER.ie && BROWSER.ie == 6) {
_attachEvent($('edit_avt'), 'mouseover', function () { showEditAvt('edit_avt_tar'); });
_attachEvent($('edit_avt'), 'mouseout', function () { showEditAvt('edit_avt_tar'); });
}
</script>	</div>
  </div>


<?php if(empty($topic) || ($topic['usefooter'])) { ?><?php $focusid = getfocus_rand($_G[basescript]);?><?php if($focusid !== null) { ?><?php $focus = $_G['cache']['focus']['data'][$focusid];?><?php $focusnum = count($_G['setting']['focus'][$_G[basescript]]);?><div class="focus" id="sitefocus">
<div class="bm">
<div class="bm_h cl">
<a href="javascript:;" onclick="setcookie('nofocus_<?php echo $_G['basescript'];?>', 1, <?php echo $_G['cache']['focus']['cookie'];?>*3600);$('sitefocus').style.display='none'" class="y" title="�ر�">�ر�</a>
<h2>
<?php if($_G['cache']['focus']['title']) { ?><?php echo $_G['cache']['focus']['title'];?><?php } else { ?>վ���Ƽ�<?php } ?>
<span id="focus_ctrl" class="fctrl"><img src="<?php echo IMGDIR;?>/pic_nv_prev.gif" alt="��һ��" title="��һ��" id="focusprev" class="cur1" onclick="showfocus('prev');" /> <em><span id="focuscur"></span>/<?php echo $focusnum;?></em> <img src="<?php echo IMGDIR;?>/pic_nv_next.gif" alt="��һ��" title="��һ��" id="focusnext" class="cur1" onclick="showfocus('next')" /></span>
</h2>
</div>
<div class="bm_c" id="focus_con">
</div>
</div>
</div><?php $focusi = 0;?><?php if(is_array($_G['setting']['focus'][$_G['basescript']])) foreach($_G['setting']['focus'][$_G['basescript']] as $id) { ?><div class="bm_c" style="display: none" id="focus_<?php echo $focusi;?>">
<dl class="xld cl bbda">
<dt><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2" target="_blank"><?php echo $_G['cache']['focus']['data'][$id]['subject'];?></a></dt>
<?php if($_G['cache']['focus']['data'][$id]['image']) { ?>
<dd class="m"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" target="_blank"><img src="<?php echo $_G['cache']['focus']['data'][$id]['image'];?>" alt="<?php echo $_G['cache']['focus']['data'][$id]['subject'];?>" /></a></dd>
<?php } ?>
<dd><?php echo $_G['cache']['focus']['data'][$id]['summary'];?></dd>
</dl>
<p class="ptn cl"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2 y" target="_blank">�鿴 &raquo;</a></p>
</div><?php $focusi ++;?><?php } ?>
<script type="text/javascript">
var focusnum = <?php echo $focusnum;?>;
if(focusnum < 2) {
$('focus_ctrl').style.display = 'none';
}
if(!$('focuscur').innerHTML) {
var randomnum = parseInt(Math.round(Math.random() * focusnum));
$('focuscur').innerHTML = Math.max(1, randomnum);
}
showfocus();
var focusautoshow = window.setInterval('showfocus(\'next\', 1);', 5000);
</script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<style type="text/css">
.patch { width: 300px; }
.patch .bm { border-color: #F26C4F; background: #FFF; }
.patch .allfixed { border-color: #6C3; }
.patch .bm_h { border: solid #FFF; border-width: 1px 1px 0; background: #F26C4F; }
.patch .allfixed .bm_h { background: #6C3; }
.patch h2, .patch .bm_h .y { color: #FFF; }
.patch table { table-layout: fixed; }
.patch th, .patch td { padding: 2px; border-bottom: 1px dotted #CDCDCD; }
.patchdate { width: 70px; }
.patchstat { width: 55px; }
.unfixed { color: #F26C4F; }
</style>
<div class="focus patch" id="patch_notice"></div>
<?php } ?><?php echo adshow("footerbanner/wp a_f/1");?><?php echo adshow("footerbanner/wp a_f/2");?><?php echo adshow("footerbanner/wp a_f/3");?><?php echo adshow("float/a_fl/1");?><?php echo adshow("float/a_fr/2");?><?php echo adshow("couplebanner/a_fl a_cb/1");?><?php echo adshow("couplebanner/a_fr a_cb/2");?><?php echo adshow("cornerbanner/a_cn");?><?php if(!empty($_G['setting']['pluginhooks']['global_footer'])) echo $_G['setting']['pluginhooks']['global_footer'];?>



<div id="ft" class="wp cl">
<div id="flk" class="y">
<p><?php if(is_array($_G['setting']['footernavs'])) foreach($_G['setting']['footernavs'] as $nav) { if($nav['available'] && ($nav['type'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1)) ||
!$nav['type'] && ($nav['id'] == 'stat' && $_G['group']['allowstatdata'] || $nav['id'] == 'report' && $_G['uid'] || $nav['id'] == 'archiver' || $nav['id'] == 'mobile'))) { ?><?php echo $nav['code'];?><span class="pipe">|</span><?php } } ?>
<strong><a href="<?php echo $_G['setting']['siteurl'];?>" target="_blank"><?php echo $_G['setting']['sitename'];?></a></strong>
<?php if($_G['setting']['icp']) { ?>( <a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $_G['setting']['icp'];?></a> )<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_footerlink'])) echo $_G['setting']['pluginhooks']['global_footerlink'];?>
<?php if($_G['setting']['statcode']) { ?><?php echo $_G['setting']['statcode'];?><?php } ?>
</p>
<p class="xs0">
GMT<?php echo $_G['timenow']['offset'];?>, <?php echo $_G['timenow']['time'];?>
<span id="debuginfo">
<?php if(debuginfo()) { ?>, Processed in <?php echo $_G['debuginfo']['time'];?> second(s), <?php echo $_G['debuginfo']['queries'];?> queries
<?php if($_G['gzipcompress']) { ?>, Gzip On<?php } if(C::memory()->type) { ?>, <?php echo ucwords(C::memory()->type); ?> On<?php } ?>.
<?php } ?>
</span>
</p>
</div>
<div id="frt">
<p>Powered by <strong><a href="http://www.hopecl.com" target="_blank">HOPECL</a></strong> <em><?php echo $_G['setting']['version'];?></em><?php if(!empty($_G['setting']['boardlicensed'])) { ?> <a href="http://license.comsenz.com/?pid=1&amp;host=<?php echo $_SERVER['HTTP_HOST'];?>" target="_blank">Licensed</a><?php } ?></p>
<p class="xs0">&copy; 2011-2014 <a href="http://www.hopeclpay.com" target="_blank">Hope</a> Design By <a href="http://www.singcere.net" target="_blank">Singcere!</a></p>
</div><?php updatesession();?><?php if($_G['uid'] && $_G['group']['allowinvisible']) { ?>
<script type="text/javascript">
var invisiblestatus = '<?php if($_G['session']['invisible']) { ?>����<?php } else { ?>����<?php } ?>';
var loginstatusobj = $('loginstatusid');
if(loginstatusobj != undefined && loginstatusobj != null) loginstatusobj.innerHTML = invisiblestatus;
</script>
<?php } ?>
</div>



</div>

<?php if($upgradecredit !== false) { ?>
<div id="g_upmine_menu" class="tip tip_3" style="display:none;">
<div class="tip_c">
���� <?php echo $_G['member']['credits'];?>, ������һ������ <?php echo $upgradecredit;?> ����
</div>
<div class="tip_horn"></div>
</div>
<?php } } if(!$_G['setting']['bbclosed']) { if($_G['uid'] && !isset($_G['cookie']['checkpm'])) { ?>
<script src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && helper_access::check_module('follow') && !isset($_G['cookie']['checkfollow'])) { ?>
<script src="home.php?mod=spacecp&ac=follow&op=checkfeed&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if(!isset($_G['cookie']['sendmail'])) { ?>
<script src="home.php?mod=misc&ac=sendmail&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && !isset($_G['cookie']['checkpatch'])) { ?>
<script src="misc.php?mod=patch&action=checkpatch&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } } if($_GET['diy'] == 'yes') { if(check_diy_perm($topic) && (empty($do) || $do != 'index')) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>portal_diy<?php if(!check_diy_perm($topic, 'layout')) { ?>_data<?php } ?>.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($space['self'] && CURMODULE == 'space' && $do == 'index') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>space_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<script type="text/javascript">patchNotice();</script>
<?php } if($_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G['uid']]) || $_G['cookie']['promptstate_'.$_G['uid']] != $_G['member']['newprompt']) && $_GET['do'] != 'notice') { ?>
<script type="text/javascript">noticeTitle();</script>
<?php } ?><?php userappprompt();?><?php if($_G['basescript'] != 'userapp') { ?>
<span id="scrolltop" onclick="window.scrollTo('0','0')">�ض���</span>
<script type="text/javascript">_attachEvent(window, 'scroll', function(){showTopLink();});</script>
<?php } ?><?php output();?></body>
</html>
