
var agt = navigator.userAgent.toLowerCase();

var is_ie = ((agt.indexOf('msie')!=-1) && (agt.indexOf('opera')==-1));
var is_gecko= (navigator.product == "Gecko");
var is_ns = (document.layers);
var is_w3 = (document.getElementById && !is_ie);
var sch = 0;


var guides = {'common' : {'common' : {}},
	'menu_1' : {'menu_1' : {
			'user_1' : ['�����û�',admin_url+'&q=module/user'],
			'user_2' : ['�û�����',admin_url+'&q=module/user/type']
			}
		},
	'menu_2' : {'menu_2' : {
			'borrow_1' : ['���н��',admin_url+'&q=module/borrow&title=���н��'],
			'borrow_2' : ['����˽��',admin_url+'&q=module/borrow&status=0&title=����˽��'],
			'borrow_3' : ['�����б�Ľ��',admin_url+'&q=module/borrow&status=1&title=�����б�Ľ��'],
			'borrow_4' : ['�������',admin_url+'&q=module/borrow/full&status=1&title=�������'],
			'borrow_5' : ['��ȹ���',admin_url+'&q=module/borrow/amount&title=��ȹ���'],
			'borrow_6' : ['���ڻ���',admin_url+'&q=module/borrow/late&title=���ڻ���'],
			'borrow_7' : ['�ѻ���',admin_url+'&q=module/borrow&repayment&repay_status=1&title=�ѻ���'],
			'borrow_8' : ['δ����',admin_url+'&q=module/borrow&repay_status=0&title=δ����'],
			'borrow_9' : ['�������ͨ��',admin_url+'&q=module/borrow/full&status=3&title=�������ͨ��'],
			'borrow_10' : ['�������δͨ��',admin_url+'&q=module/borrow/full&status=4&title=�������δͨ��'],
			'borrow_11' : ['����',admin_url+'&q=module/borrow/liubiao&title=����']
			}
		},
	'menu_3' : {'menu_3' : {
			'setmember' : ['��Ա����','admin.php?action=member&job=set&cat=0'],
			'ckmember' : ['���������','admin.php?action=member&job=ck&cat=0'],
			'addmember' : ['ע���Ա','admin.php?action=member&job=add'],
			'listagent' : ['�н����','admin.php?action=agent&job=list'],
			'listlog' : ['������¼','admin.php?action=member&job=llog'],
			'ckivt' : ['�������','admin.php?action=member&job=ckivt'],
			'xqzj' : ['С��ר��','admin.php?action=member&job=xqzj&c=1'],
			'pos_tj' : ['��ҳ�Ƽ�','admin.php?action=member&job=pos_tj']
			}
		},
	'menu_4' : {'menu_4' : {
			'credit_1' : ['�����б�',admin_url+'&q=module/credit'],
			'credit_2' : [' �ȼ�����',admin_url+'&q=module/credit/rank'],
			'credit_3' : ['���������б�',admin_url+'&q=module/credit/type'],
			'credit_4' : ['��ӻ�������',admin_url+'&q=module/credit/type_new']
			}
		},
	'menu_5' : {'menu_5' : {
			'admin_1' : ['���й���Ա',admin_url+'&q=module/manager'],
			'admin_2' : ['����Ա����',admin_url+'&q=module/manager/type'],
			'admin_3' : ['��ӹ���Ա',admin_url+'&q=module/manager/new']
			}
		},
	'menu_6' : {'menu_6' : {
			'setsite' : ['վ�����',admin_url+'&q=site/loop&a=loop'],
			'addsite' : ['����վ��',admin_url+'&q=site/new']
			}
		},
	'menu_7' : {'menu_7' : {
			'system_1' : ['ϵͳ����',admin_url+'&q=system/info'],
			'system_0' : ['��ջ���',admin_url+'&q=system/clearcache'],
			'system_2' : ['ͼƬˮӡ',admin_url+'&q=system/watermark'],
			'system_3' : ['��������',admin_url+'&q=system/fujian'],
			'system_4' : ['��������',admin_url+'&q=system/email'],
			'system_5' : ['�ϴ�ͼƬ',admin_url+'&q=system/upfiles'],
			'system_6' : ['���ݿⱸ��',admin_url+'&q=system/dbbackup/back'],
			'system_7' : ['���ݿ⻹ԭ',admin_url+'&q=system/dbbackup/revert']
			}
		},
	'menu_8' : {'menu_8' : {
			'listbusele' : ['����Ϣ',admin_url+'&q=module/message'],
			}
		},
	'menu_9' : {'menu_9' : {
			'account_1' : ['�ʻ���Ϣ�б�',admin_url+'&q=module/account'],
			'account_2' : ['��������',admin_url+'&q=module/account/cash'],
			'account_3' : ['���ֳɹ�',admin_url+'&q=module/account/cash&status=1'],
			'account_4' : ['����ʧ��',admin_url+'&q=module/account/cash&status=0'],
			'account_5' : ['��ֵ��¼',admin_url+'&q=module/account/recharge'],
			'account_6' : ['�ʽ��¼',admin_url+'&q=module/account/log'],
			'account_7' : ['��ӳ�ֵ',admin_url+'&q=module/account/recharge_new'],
			'account_7' : ['�۳�����',admin_url+'&q=module/account/deduct']
			}
		}
}
var titles = {'common' : '��ҳ',
	'menu_1' : '�û�����',
	'menu_2' : '������',
	'menu_3' : '��Ա',
	'menu_4' : '���ֹ���',
	'menu_5' : '����Ա',
	'menu_6' : 'վ�����',
	'menu_7' : 'ϵͳ����',
	'menu_8' : '��������',
	'menu_9' : '�ʽ����'}
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
			html += '<div class="wei fl"><a href="admin.php">��ҳ</a> &raquo; <a href="#" onclick="return initguide(cate,type,\'admin.php?adminjob=admin\')">'+titles[action]+'</a> &raquo; <a href="#">'+guide[action][type][0]+'</a></div>';
		} else {
			html += '<div class="wei fl"><a href="admin.php">��ҳ</a> &raquo; <a href="#" onclick="return initguide(\''+cate+'\')">'+titles[action]+'</a> &raquo; <a href="#" onclick="return initguide(\''+cate+'\',\''+type+'\')">'+guide[action][type][0]+'</a></div>';
		}
	}
	html += '<ul class="fr"><li class="home">�û�����'+admin_username+'</li><li><a class="s0" style="cursor:pointer" onclick="parent.main.location.reload();" title="ˢ����ҳ��">ˢ��</a></li><li><a class="s0" style="cursor:pointer" onclick="parent.main.history.go(-1);" title="���˵�ǰһҳ">����</a></li><li><a href="'+admin_url+'&q=logout">ע��</a></li></ul>';
	
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