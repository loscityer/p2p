<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<title>��̨���� - �ᰮԴ�� - bbs.52codes.net</title> 
<meta http-equiv="Content-Type" content="text/html; charset=gbk"> 
<meta http-equiv="expires" content="0"> 
<meta http-equiv="Pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-cache"> 
<link rel="stylesheet" type="text/css" href="/themes/youyidai_admin/css/index.css" /> 
<link href="/themes/youyidai_admin/css/tipswindown.css" rel="stylesheet" type="text/css" />
<script src="/themes/youyidai_admin/js/jquery.js" type="text/javascript"></script>
<script src="/themes/youyidai_admin/js/tipswindown.js" type="text/javascript"></script>
<script src="plugins/timepicker/WdatePicker.js" type="text/javascript"></script>
<link rel="shortcut icon" href="../../favicon.ico" />
<link rel="icon" href="../../afavico.gif" type="image/gif" />
</head> 
<body scroll="no" onkeydown="keyCodes('menu',event);"> 
<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0"> 
<tr><td colspan="2" height="80" valign="top"> 
<div id="header"> 
	<div class="logo" style="float:left; width:150px"> 
		<div class="png"><a href="#"><img src="/themes/youyidai_admin/images/logo.png" /></a></div> 
		<div class="lun"> 
			<a href="index.php" target="_blank">��վ��ҳ</a>&nbsp;&#8211;&nbsp;<a href="">��̨��ҳ</a>
		</div> 
	</div> 
<!--�ص㵼��--> 
  <ul class="nav" style="float:right"> 
<li><img src="/themes/youyidai_admin/images/nav_03.jpg" /></li>  
<li class="home"><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>"  style="height:35px;display:block">������ҳ</a></li>
<?  if(!isset($this->magic_vars['_A']['admin_module_top']) || $this->magic_vars['_A']['admin_module_top']=='') $this->magic_vars['_A']['admin_module_top'] = array();  $_from = $this->magic_vars['_A']['admin_module_top']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']!='userinfo'): ?>
<li id="<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>"><a style="cursor:pointer" href="#" onClick="return initguide('<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>');"  style="height:35px;display:block"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a></li> 
<? endif; ?>
<? endforeach; endif; unset($_from); ?> 

<li id="other"><a style="cursor:pointer" href="#" onClick="return initguide('other');"  style="height:35px;display:block">�¿�������</a></li> 
<li id="other"></li> 
<li><img src="/themes/youyidai_admin/images/nav_07.jpg" /></li> 
<li><a style="cursor:pointer" target="_blank" href="http://bbs.52codes.net/">�ᰮԴ��</a></li>  
 
 
    <!--<li class="more"><a href="#" onClick="return showmenu();">�˵�</a></li>--> 
</ul> 
<!--ͷ����Ϣ����--> 
<div id="guide"></div> 
<!--ͷ����Ϣ��������--> 
</div> 
</td></tr> 
<tr><td valign="top" id="main-fl"> 
<div id="left" style="overflow:auto"> 
</div> 
</div> 
</td> 
<td valign="top" id="mainright"> 
<!--�ұ߿�ʼ--> 
<iframe name="main" frameborder="0" width="100%" height="100%" frameborder="0" scrolling="yes" style="overflow: visible;"></iframe> 
</td></tr> 
</table> 
<iframe name="notice" frameborder="0" style="height:0;width:0;"></iframe> 
<div id="menu" style="display:none"></div><div id="showmenu" style="display:none"></div> 

<script>
var admin_url = '<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>';
var admin_username = '<? if (!isset($this->magic_vars['_A']['admin_result']['adminname'])) $this->magic_vars['_A']['admin_result']['adminname'] = ''; echo $this->magic_vars['_A']['admin_result']['adminname']; ?>';
var admin_typename = '<? if (!isset($this->magic_vars['_A']['admin_result']['name'])) $this->magic_vars['_A']['admin_result']['name'] = ''; echo $this->magic_vars['_A']['admin_result']['name']; ?>';

var agt = navigator.userAgent.toLowerCase();
var is_ie = ((agt.indexOf('msie')!=-1) && (agt.indexOf('opera')==-1));
var is_gecko= (navigator.product == "Gecko");
var is_ns = (document.layers);
var is_w3 = (document.getElementById && !is_ie);
var sch = 0;
//���ι�����־��hummer modify 201309072303
//var guides = {'common' : {'common' : {
//			'common_users_password' : ['�޸�����',admin_url+'&q=system/password'],
//			'common_users_dialy' : ['������־',admin_url+'&q=system/dialy']
		
//		}}

var guides = {'common' : {'common' : {
			'common_users_password' : ['��������',admin_url+'&q=system/password']
		
		}}
		
		
		<? if (!isset($this->magic_vars['_A']['admin_module_left'])) $this->magic_vars['_A']['admin_module_left'] = ''; echo $this->magic_vars['_A']['admin_module_left']; ?>
		
	,
	'other' : {'other' : {
			
			<? if (!isset($this->magic_vars['_A']['admin_module_other'])) $this->magic_vars['_A']['admin_module_other'] = ''; echo $this->magic_vars['_A']['admin_module_other']; ?>
			
			}
		}
}
var titles = {'common' : '��ҳ'
	
<?  if(!isset($this->magic_vars['_A']['admin_module_all']) || $this->magic_vars['_A']['admin_module_all']=='') $this->magic_vars['_A']['admin_module_all'] = array();  $_from = $this->magic_vars['_A']['admin_module_all']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>,
'<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>' : '<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>'
<? endforeach; endif; unset($_from); ?>
,'other' : '��������'
	
	}
var cate   = 'common';
var action = '';
var type   = '';
document.getElementById('mainright');
function showguide(id){
	var obj = document.getElementById('showmenu');
	var guide = guides[id];
	var html  = '<dl>';
	for(i in guide){
		var subs = guide[i];
		html += '<dd>';
		for(j in subs){
			var sub = subs[j];
			html += '<a href="#" onclick="return initguide(\''+id+'\',\''+j+'\')">'+sub[0]+'</a>';
		}
		html += '</dd>';
	}
	obj.innerHTML = html + '</dl>';
	var obj1  = document.getElementById(id);
	var left  = findPosX(obj1) + getLeft();
	var top   = findPosY(obj1) + getTop() + 22;
	obj.style.display = "";
	obj.style.top	= top + 'px';
	obj.style.left	= left + 'px';
	addEvent(document,"mouseout",doc_mouseout);
}
function closeguide(){
	var obj = document.getElementById('showmenu');
	obj.style.display = "none";
	removeEvent(document,"mouseout",doc_mouseout);
}
function upleft(t){
	var obj  = document.getElementById('left');
	var objli = obj.getElementsByTagName('li');
	var obja = obj.getElementsByTagName('a');
	for(var i=0;i<obja.length;i++){
		objli[i].className = obja[i].id==t ? 'one' : '';
	}
}
var tree;
var isflag =0;
function showleft(id,t,url){
	cate = id;
	var obj = document.getElementById('left');
	
	var html = '';
	var guide = guides[id];
	url = typeof url != 'undefined' ? url : '';
	type = typeof t != 'undefined' ? t : '';
 
	for(i in guide){
		var subs = guide[i];
		html += '<h1>' + titles[i] + '</h1><div class="cc"></div><ul>';
		for(j in subs){
			var sub = subs[j];
			html += '<li><a id="'+j+'" href="#" onclick="return initguide(\''+id +'\',\''+j+'\')">'+sub[0]+'</a></li>';
			if(url==''){
				if(type == ''){
					url = sub[1];
					type = j;
				} else if(j == type){
					url = sub[1];
				}
				action = i;
			}
		}
		html += '</ul>';
 
		obj.innerHTML = html;
 
		upleft(type);
		if (is_ie && sch>0) sch = 0;
		parent.main.location = url;
		return false;
	}
}
function showtitle(){
	var obj = document.getElementById('guide');
	var guide = guides[cate];
	var html = '';
	if (cate && action && type) {
		
		if (cate=='common') {
			html += '<div class="wei fl"><a href="'+admin_url+'">��ҳ</a> &raquo; <a href="#" onclick="return initguide(cate,type,\'?admin\')">'+titles[action]+'</a> &raquo; <a href="#">'+guide[action][type][0]+'</a></div>';
		} else {
			html += '<div class="wei fl"><a href="">��ҳ</a> &raquo; <a href="#" onclick="return initguide(\''+cate+'\')">'+titles[action]+'</a> &raquo; <a href="#" onclick="return initguide(\''+cate+'\',\''+type+'\')">'+guide[action][type][0]+'</a></div>';
		}
	}
	html += '<ul class="fr"><li class="home">��ӭ�����û�����'+admin_username+'('+admin_typename+')</li><li><a class="s0" style="cursor:pointer" onclick="parent.main.location.reload();" title="ˢ����ҳ��">ˢ��</a></li><li><a style="cursor:pointer" target="_blank" hr<li><a href="'+admin_url+'&q=logout">�˳�</a></li><a style="cursor:pointer" target="_blank" href="http://bbs.52codes.net/">�ᰮԴ��</a></li></li></ul>';
	
	obj.innerHTML = html;
}
function site_change(val) {
	location.href ="admin.php?action=site_change&siteid="+val;
}
 
function initguide(id,t,url){
	
	showleft(id,t,url);
	showtitle();
	return false;
}
function showmenu(){
		
	var obj = document.getElementById('menu');
	top.main.showselect('hidden');
	if(!IsElement('menubg')){
		var html = '<div><div><a style="cursor:pointer;" onclick="closemenu();" class="fr"><img src="/themes/admin/images/close.gif" /></a><h1>��"ESC"���رջ����˲˵�</h1>';
 
		for(i in guides){
			if(i=='common') continue;
			var guide = guides[i];
			html += "<dl>";
			for(j in guide){
				html += "<dt><h3>" + titles[j] + "</h3></dt><dd>";
				var subs = guide[j];
				for(k in subs){
					var sub = subs[k];
					html += '<a href="#" onclick="return toguide(\''+i+'\',\''+k+'\')">'+sub[0]+'</a>';
				}
				html += "</dd>";
			}
			html += '</dl>';
		}
		html += '<div class="c"></div></div></div>';
		
		obj.innerHTML = html;
		
		var obj2 = document.createElement("div");
		obj2.id = "menubg";
		obj.parentNode.insertBefore(obj2,obj);
	} else {
		var obj2 = document.getElementById('menubg');
		obj2.style.display = "";
	}
	obj.style.display = "";
	addEvent(document,"mousedown",doc_mousedown);
}
function closemenu(){
	var obj = document.getElementById('menu');
	obj.style.display = "none";
	var obj2 = document.getElementById('menubg');
	obj2.style.display = "none";
	removeEvent(document,"mousedown",doc_mousedown);
	top.main.showselect('');
}
function toguide(id,t){
	closemenu();
	initguide(id,t);
	return false;
}
function doc_mousedown(e){
	var e = is_ie ? event: e;
	obj	= document.getElementById("menu");
	_x	= is_ie ? e.x : e.pageX;
	_y	= is_ie ? e.y + getTop() : e.pageY;
	_x1 = obj.offsetLeft;
	_x2 = obj.offsetLeft + obj.offsetWidth;
	_y1 = obj.offsetTop - 20;
	_y2 = obj.offsetTop + obj.offsetHeight;
 
	if(_x<_x1 || _x>_x2 || _y<_y1 || _y>_y2){
	   closemenu();
	}
}
function doc_mouseout(e){
	var e = is_ie ? event: e;
	obj	= document.getElementById("showmenu");
	_x	= is_ie ? e.x : e.pageX;
	_y	= is_ie ? e.y + getTop() : e.pageY;
	_x1 = obj.offsetLeft + 2;
	_x2 = obj.offsetLeft + obj.offsetWidth;
	_y1 = obj.offsetTop - 20;
	_y2 = obj.offsetTop + obj.offsetHeight;
 
	if(_x<_x1 || _x>_x2 || _y<_y1 || _y>_y2){
		closeguide();
	}
}
function IsElement(id){
	return document.getElementById(id)!=null ? true : false;
}
function addEvent(el,evname,func){
	if(is_ie){
		el.attachEvent("on" + evname,func);
	} else{
		el.addEventListener(evname,func,true);
	}
};
function removeEvent(el,evname,func){
	if(is_ie){
		el.detachEvent("on" + evname,func);
	} else{
		el.removeEventListener(evname,func,true);
	}
};
function findPosX(obj){
	var curleft = 0;
	if (obj.offsetParent){
		while (obj.offsetParent){
			curleft += obj.offsetLeft
			obj = obj.offsetParent;
		}
	}
	else if (obj.x)
		curleft += obj.x;
	return curleft - getLeft();
}
function findPosY(obj){
	var curtop = 0;
	if (obj.offsetParent){
		while (obj.offsetParent){
			curtop += obj.offsetTop
			obj = obj.offsetParent;
		}
	} else if (obj.y){
		curtop += obj.y;
	}
	return curtop - getTop();
}
function ietruebody(){
	return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body;
}
function getTop() {
	return typeof window.pageYOffset != 'undefined' ? window.pageYOffset:ietruebody().scrollTop;
}
function getLeft() {
	return (typeof window.pageXOffset != 'undefined' ? window.pageXOffset:ietruebody().scrollLeft)
}
function keyCodes(id,e){
	if (e.keyCode==27) {
		if (IsElement(id) && document.getElementById(id).style.display=='') {
			closemenu();
		} else {
			try{
				showmenu();
			} catch(e){}
		}
	} else if (is_ie && (e.keyCode==116 || (e.ctrlKey && e.keyCode==82))) {
		e.keyCode = 0;
		e.returnValue = false;
		parent.main.location.reload();
	}
	return false;
}
function PwFindInPage(){
	if (document.getElementById('schstring').value!='') {
		FindInPage(document.getElementById('schstring').value);
		document.getElementById('schbt').disabled = false;
	} else {
		document.getElementById('schbt').disabled = true;
	}
}
function FindInPage(str){
	if (!str) {
		alert('δ�ҵ�ָ������');
		return false;
	}
	if (is_w3 || is_ns) {
		if (!parent.main.find(str)) {
			alert('����ҳβ����ҳ�׼���');
			while (1) {
				if (!parent.main.find(str,false,true)) break;
			}
			return false;
		}
	} else if (is_ie) {
		var found;
		var txt = parent.main.document.body.createTextRange();
		for (var i = 0; i <= sch && (found = txt.findText(str)) != false; i++) {
			txt.moveStart('character',1);
			txt.moveEnd('textedit');
		}
		if (found) {
			sch++;
			txt.moveStart('character',-1);
			txt.findText(str);
			try {
				txt.select();
				txt.scrollIntoView();
			} catch(e) {FindInPage(str);}
		} else {
			if (sch > 0) {
				sch = 0;
				alert('����ҳβ����ҳ�׼���');
				FindInPage(str);
			} else {
				alert('δ�ҵ�ָ������');
			}
			return false;
		}
	}
	return true;
}
function getPageHeight(){
	if (self.innerHeight) {
		return self.innerHeight;
	} else if (document.documentElement && document.documentElement.clientHeight) {
		return document.documentElement.clientHeight;
	} else if (document.body) {
		return document.body.clientHeight;
	}
}

initguide(cate,type,admin_url+"&q=system/index");
</script> 
 
</body> 
</html>