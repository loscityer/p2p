<?php

/**
 *      [�������] (C)2012 wanmeiff.com .
 *      This is NOT a freeware, use is subject to license terms
 *      $Id: index.class.php 16620 2012-02-14 14:03:02Z wxy $
**/
 
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class plugin_wmff_xunihuiyuan {
	var $offset,$minmember,$onlinenum,$membercount,$onlineinfo,$onlinelist;
	
	function plugin_wmff_xunihuiyuan(){
		global $_G;
		$set = $_G['cache']['plugin']['wmff_xunihuiyuan'];
		$this->offset = $set['offset'];
		$this->offset_ml = $set['offset_ml'];
		$this->minmember = intval($set['minmember']);
		$this->onlinenum = intval($set['onlinenum']);
		$this->membercount = intval($set['membercount']);
		$this->onlineinfo = explode("|", $set['onlineinfo']);
		$this->onlinelist = explode("|", $set['onlinelist']);
		if($this->onlinenum < $this->minmember) $this->onlinenum = $this->minmember;
	}
}

class plugin_wmff_xunihuiyuan_forum extends plugin_wmff_xunihuiyuan {

	
	function index_wmff_xunihuiyuan_output() {
		global $onlinenum,$onlineinfo,$membercount,$guestcount;
		$this->realonlinenum = $onlinenum;
		if($this->offset == 1 && $onlinenum < $this->minmember){	//��������ҵ�ǰ�������� < ����������ʱ����
			$onlinenum = empty($this->onlinenum)?$onlinenum:$this->num_operation($onlinenum,$this->onlinenum);	//���⵱ǰ��������
			$onlineinfo = array($this->onlineinfo[0], $this->onlineinfo[1]);	//������ʷ��߼�¼
			if($this->offset_ml == 1){
				$guestcount = $onlinenum - $membercount;	//�����ο���
			}else{
				if($membercount < $this->membercount)$membercount = empty($this->membercount)?$membercount:$this->num_operation($membercount,$this->membercount);	//���⵱ǰ���߻�Ա��
				$guestcount = $onlinenum - $membercount;	//���������ο���
			}
		}
	}
	
	function index_wmff_xunihuiyuan() {
		global $_G;
		$onlinenum = DB::result_first("SELECT count(*) FROM ".DB::table('common_session'));
		if($this->offset == 1 && $onlinenum < $this->minmember){	//��������ҵ�ǰ�������� < ����������ʱ����
		
			if($this->offset_ml == 1){	//��Ա�б���
				$mintime = 100;	// ���ߵ���Сֵ(��)
				$maxtime = 1800;// ���ߵ����ֵ(��)
				$cooktime = 1800;// cookies��Ч�ڣ��룩
				$actionarray = array("0","0","1","1","2","191","1","2","2","2","31","51");	//�����û�����
				$timeout = time() - $cooktime;	//��ʱʱ��
			
				DB::delete('common_session',"ip1='000' AND lastactivity <='$timeout'");	//ɾ����ʱ�������û�
				
				$query = DB::query("SELECT fid FROM ".DB::table('forum_forum')." WHERE type = 'forum'");	//��ȡfid�б�
				while($fidresult = DB::fetch($query)){
					$fidscope[] = $fidresult['fid']; 
				}
				
				foreach($this->onlinelist as $value){	//���������ԱUID�б�
					if(DB::result_first("SELECT uid FROM ".DB::table('common_session')." WHERE uid = '$value'")){
						continue;	//�Ѿ���¼�����ش�����һ����Ա
					}else{
						$randtime = mt_rand($mintime, $maxtime);
						$onlinetime = time() - $randtime;
						$onlineaction = $action_arr[mt_rand(0, count($actionarray))];
						$onlinefid = 0;
						if($onlineaction == '2') {
							$onlinefid = $fidscope[mt_rand(0, count($fidscope))];
						}
						$onlinesid = random(6); 
						
						$query = DB::fetch_first("SELECT uid,username,groupid FROM ".DB::table('common_member')." WHERE uid = '$value'");
						if(!empty($query)){
							$onlineuserdata = array(
								'sid' => $onlinesid,
								'ip1' => '000',
								'groupid' => $query[groupid],
								'lastactivity' => $onlinetime,
								'action' => $onlineaction,
								'fid' => $onlinefid,
								'uid' => $query[uid],
								'username' => $query[username],
								);
							DB::insert('common_session', $onlineuserdata);
						}
					}
				}
			}else{
				foreach($this->onlinelist as $value){	//�رջ�Ա�б�ʱ���ݻ�ԭ
					if(DB::result_first("SELECT uid FROM ".DB::table('common_session')." WHERE uid = '$value'")){
						DB::delete('common_session',"uid = '$value'");
					}
				}
			}
		}else{	//�رղ��ʱ���ݻ�ԭ
			foreach($this->onlinelist as $value){
				if(DB::result_first("SELECT uid FROM ".DB::table('common_session')." WHERE uid = '$value' and uid !='".$_G['uid']."'")){
					DB::delete('common_session',"uid = '$value'");
				}
			}
		}
	}

	function num_operation($truedata, $virtualdata){
		return $truedata + $virtualdata;
	}
}
?>