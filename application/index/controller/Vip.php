<?php

//decode by http://ikmovie.xyz/
namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Session;
use app\index\controller\SuncommonRyan;
class Vip extends SuncommonRyan
{
	public function _initialize()
	{
		$_var_0 = session('user');
		if ($_var_0 != 1) {
		} else {
			if (!$_var_0) {
				$this->redirect('login/login/ikmovie');
			}
		}
		$_var_1 = db('advert')->where('id = 1')->value('content');
		if ($_var_1 == 1 && $_var_0 != 1) {
			$this->redirect('login/login/ryanerror');
		}
	}
	public function advert()
	{
		if (session('power') != 0) {
			header('content-type:text/html;charset=utf-8');
			echo '非法操作';
			exit;
		}
		if (request()->Post()) {
			db('advert')->where('id', 1)->update(['content' => input('advert')]);
			db('advert')->where('id', 7)->update(['content' => input('advert1')]);
			db('advert')->where('id', 2)->update(['content' => input('down')]);
			db('advert')->where('id', 3)->update(['content' => input('pass')]);
			db('advert')->where('id', 4)->update(['content' => input('sign')]);
			db('advert')->where('id', 5)->update(['content' => intval(input('time'))]);
			db('advert')->where('id', 6)->update(['content' => input('ban')]);
			db('advert')->where('id', 8)->update(['content' => input('geng')]);
			db('advert')->where('id', 9)->update(['content' => input('geng2')]);
			db('advert')->where('id', 10)->update(['content' => input('geng3')]);
			db('advert')->where('id', 11)->update(['content' => input('geng4')]);
			db('advert')->where('id', 12)->update(['content' => input('geng5')]);
			db('advert')->where('id', 13)->update(['content' => input('geng6')]);
			db('advert')->where('id', 14)->update(['content' => input('geng7')]);
			db('advert')->where('id', 15)->update(['content' => input('geng8')]);
			db('advert')->where('id', 16)->update(['content' => input('geng9')]);
			db('advert')->where('id', 17)->update(['content' => input('fxurl2')]);
			db('advert')->where('id', 20)->update(['content' => input('zad1')]);
			db('advert')->where('id', 21)->update(['content' => input('zad1url')]);
			db('advert')->where('id', 22)->update(['content' => input('zad2')]);
			db('advert')->where('id', 23)->update(['content' => input('zad2url')]);
			db('advert')->where('id', 27)->update(['content' => input('add')]);
			db('advert')->where('id', 28)->update(['content' => input('adds')]);
			db('advert')->where('id', 29)->update(['content' => input('fxpic3')]);
			db('advert')->where('id', 30)->update(['content' => input('fxurl3')]);
			db('advert')->where('id', 31)->update(['content' => input('fxpic4')]);
			db('advert')->where('id', 32)->update(['content' => input('fxurl4')]);
			db('advert')->where('id', 33)->update(['content' => input('fxpic5')]);
			db('advert')->where('id', 34)->update(['content' => input('fxurl5')]);
			db('advert')->where('id', 35)->update(['content' => input('fxpic6')]);
			db('advert')->where('id', 36)->update(['content' => input('fxurl6')]);
			db('advert')->where('id', 37)->update(['content' => input('fxpic7')]);
			db('advert')->where('id', 38)->update(['content' => input('fxurl7')]);
			db('advert')->where('id', 39)->update(['content' => input('fxpic8')]);
			db('advert')->where('id', 40)->update(['content' => input('fxurl8')]);
			db('advert')->where('id', 41)->update(['content' => input('fxpic9')]);
			db('advert')->where('id', 42)->update(['content' => input('fxurl9')]);
			db('advert')->where('id', 43)->update(['content' => input('fxpic10')]);
			db('advert')->where('id', 44)->update(['content' => input('fxurl10')]);
			db('advert')->where('id', 45)->update(['content' => input('fxpic11')]);
			db('advert')->where('id', 46)->update(['content' => input('fxurl11')]);
			db('advert')->where('id', 47)->update(['content' => input('fxpic12')]);
			db('advert')->where('id', 48)->update(['content' => input('fxurl12')]);
			Session::flash('code', '1');
			$this->redirect('vip/advert');
		}
		$_var_2 = session('code');
		return view('advert', ['code' => $_var_2]);
	}
	public function return_commissionr()
	{
		$this->check_power();
		if (request()->Post()) {
			db('shezi')->where('id', 1)->update(['jbday' => input('jbday')]);
			db('shezi')->where('id', 1)->update(['jbmoney' => input('jbxj')]);
			db('shezi')->where('id', 1)->update(['dljba' => input('dljba')]);
			db('shezi')->where('id', 1)->update(['dljbb' => input('dljbb')]);
			db('shezi')->where('id', 1)->update(['dljbc' => input('dljbc')]);
			db('shezi')->where('id', 1)->update(['dljbd' => input('dljbd')]);
			db('shezi')->where('id', 1)->update(['dljbe' => input('dljbe')]);
			db('shezi')->where('id', 1)->update(['sharefjb' => input('sharejb')]);
			db('shezi')->where('id', 1)->update(['fdljb' => input('fdljb')]);
			db('shezi')->where('id', 1)->update(['qqkf' => input('qqkf')]);
			db('shezi')->where('id', 1)->update(['ckfa' => input('ckfa')]);
			db('shezi')->where('id', 1)->update(['ckfb' => input('ckfb')]);
			db('shezi')->where('id', 1)->update(['ckfc' => input('ckfc')]);
			db('shezi')->where('id', 1)->update(['ckfd' => input('ckfd')]);
			db('shezi')->where('id', 1)->update(['ckfe' => input('ckfe')]);
			db('shezi')->where('id', 1)->update(['zcjb' => input('zcjb')]);
			db('shezi')->where('id', 1)->update(['zcmoney' => input('zcmoney')]);
			db('shezi')->where('id', 1)->update(['mobi' => input('mobi')]);
			Session::flash('code', '1');
			$this->redirect('vip/return_commissionr');
		}
		$_var_3 = session('code');
		$_var_4 = db('shezi')->where('id', 1)->paginate(1, false, ['query' => input()]);
		return view('return_commissionr', ['parentid' => input('parentid'), 'list' => $_var_4, 'code' => $_var_3]);
	}
	function getRandomString($_var_5, $_var_6 = null)
	{
		srand((double) microtime() * 1000000);
		$_var_7 = '0,1,2,3,4,5,6,7,8,9,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z';
		$_var_8 = explode(',', $_var_7);
		$_var_9 = '';
		for ($_var_10 = 0; $_var_10 < 6; $_var_10++) {
			$_var_11 = rand(0, 35);
			$_var_9 .= $_var_8[$_var_11];
			return $_var_9;
		}
	}
	public function padd()
	{
		$_var_12 = input('num');
		$_var_13 = input('ctime');
		$_var_14 = db('option')->where('id', 1)->find();
		if (session('power') == '1') {
			$_var_15 = db('user')->where('id', session('user'))->value('money');
			if ($_var_15 < $_var_13 * $_var_12) {
				return json(['code' => '0', 'msg' => '开通失败,您的余额不足']);
			}
		}
		$_var_16 = '0';
		$_var_17 = '0';
		switch ($_var_13) {
			case $_var_14['d_vip1']:
				$_var_17 = 7 * 60 * 60 * 24;
				$_var_18 = '体验';
				break;
			case $_var_14['d_vip2']:
				$_var_17 = 30 * 60 * 60 * 24;
				$_var_18 = '一月';
				break;
			case $_var_14['d_vip3']:
				$_var_17 = 90 * 60 * 60 * 24;
				$_var_18 = '三月';
				break;
			case $_var_14['d_vip4']:
				$_var_17 = 180 * 60 * 60 * 24;
				$_var_18 = '半年';
				break;
			case $_var_14['d_vip5']:
				$_var_17 = 365 * 60 * 60 * 24;
				$_var_18 = '一年';
				break;
			case $_var_14['d_vip6']:
				$_var_16 = 1;
				$_var_18 = '永久';
				break;
		}
		$_var_19 = [];
		for ($_var_20 = 0; $_var_20 < $_var_12; $_var_20++) {
			unset($_var_15);
			$_var_21 = strtolower($this->getRandomString(6));
			$_var_22 = db('user')->where('username', $_var_21)->count();
			if ($_var_22 == 0) {
				$_var_19[$_var_20]['username'] = $_var_21;
				$_var_19[$_var_20]['day'] = $_var_18;
				$_var_19[$_var_20]['lasttime'] = date('Y-m-d H:i:s', time() + $_var_17);
				$_var_15['username'] = $_var_21;
				$_var_15['password'] = md5(sha1('123456'));
				$_var_15['power'] = '2';
				$_var_15['status'] = '1';
				$_var_15['parentid'] = session('user');
				$_var_15['ctime'] = time();
				if ($_var_16 == '0') {
					$_var_15['lasttime'] = time() + $_var_17;
				} else {
					$_var_15['type'] = '1';
				}
				$_var_23 = db('user')->insertGetId($_var_15);
				if (session('power') == '1') {
					$_var_24 = db('user')->where('id', session('user'))->value('money');
					$_var_25 = $_var_24 - $_var_13;
					db('user')->where('id=' . session('user'))->update(['money' => $_var_25]);
					$_var_26['cid'] = $_var_23;
					$_var_26['uid'] = session('user');
					$_var_26['time'] = $_var_18;
					$_var_26['lasttime'] = time() + $_var_17;
					$_var_26['ctime'] = time();
					db('adduser')->insert($_var_26);
				}
			} else {
				$_var_20 = $_var_20 - 1;
			}
			unset($_var_21);
		}
		$_var_27 = '<table style="margin-left: 50px"><tr style="color: #00aa00 "><td style="width:80px ">账号</td><td style="width:80px ">密码</td><td style="width:80px ">开通时间</td><td style="width:200px ">到期时间</td></tr>';
		foreach ($_var_19 as $_var_28) {
			$_var_27 .= '<tr>';
			$_var_27 .= '<td>' . $_var_28['username'] . '</td><td>123456</td><td>' . $_var_28['day'] . '</td><td>' . $_var_28['lasttime'] . '</td>';
			$_var_27 .= '</tr>';
		}
		$_var_27 .= '</table>';
		return json(['code' => '1', 'msg' => $_var_27]);
	}
	public function index()
	{
		$_var_29 = session('code', '');
		$_var_30 = 'power = 2';
		if (input('start')) {
			$_var_30 .= ' and lasttime >' . strtotime(input('start') . ' 00:00:00');
		}
		if (input('end')) {
			$_var_30 .= ' and lasttime <' . strtotime(input('end') . ' 00:00:00');
		}
		if (input('key')) {
			$_var_30 .= ' and (username like  "%' . input('key') . '%" or nick_name like "%' . input('key') . '%")';
		} else {
			if (session('power') == '1') {
				$_var_30 .= ' and parentid=' . session('user');
			}
		}
		$_var_31 = 'power=2';
		if (session('power') == '1') {
			$_var_31 .= ' and parentid=' . session('user');
		} else {
			if (input('parentid')) {
				$_var_30 .= ' and parentid = ' . input('parentid');
			}
		}
		$_var_31 = db('user')->where($_var_31)->count();
		if (session('power') == '1') {
			$_var_30 .= ' and parentid = ' . session('user');
		}
		$_var_32 = time() + 10 * 60 * 60 * 24;
		$_var_33 = time() - 10 * 60 * 60 * 24;
		$_var_34 = db('user')->where('(type is null and power=2) and lasttime <' . $_var_32 . ' and lasttime>' . $_var_33)->count();
		$_var_35 = db('user')->where($_var_30)->order('id desc')->paginate(10);
		$_var_36 = db('option')->where('id', 1)->find();
		return view('index', ['parentid' => input('parentid'), 'count' => $_var_31, 'list' => $_var_35, 'code' => $_var_29, 'vip_daoqi' => $_var_34, 'option' => $_var_36]);
	}
	function timediff($_var_37)
	{
		$_var_38 = intval($_var_37 / 86400);
		$_var_39 = $_var_37 % 86400;
		$_var_40 = intval($_var_39 / 3600);
		$_var_39 = $_var_39 % 3600;
		$_var_41 = intval($_var_39 / 60);
		$_var_42 = $_var_39 % 60;
		$_var_43 = array('day' => $_var_38, 'hour' => $_var_40, 'min' => $_var_41, 'sec' => $_var_42);
		return $_var_43;
	}
	public function add()
	{
		$this->check_power();
		$_var_44 = db('option')->where('id', 1)->find();
		if (request()->isPost()) {
			$_var_45 = input('money');
			$_var_46 = input('ctime');
			if ($_var_45) {
				$_var_47 = $_var_45;
			} else {
				$_var_47 = $_var_46;
			}
			if (session('power') == '1') {
				$_var_48 = db('user')->where('id', session('user'))->value('money');
				if ($_var_48 < $_var_47) {
					Session::flash('code', 'err3');
					$this->redirect('vip/add');
				}
			}
			if ($_var_45) {
				$_var_49 = '0';
				$_var_50 = $_var_45 / 1 * 7 * 24 * 60 * 60;
			} else {
				$_var_49 = '0';
				switch ($_var_46) {
					case $_var_44['d_vip1']:
						$_var_50 = 7 * 60 * 60 * 24;
						break;
					case $_var_44['d_vip2']:
						$_var_50 = 30 * 60 * 60 * 24;
						break;
					case $_var_44['d_vip3']:
						$_var_50 = 90 * 60 * 60 * 24;
						break;
					case $_var_44['d_vip4']:
						$_var_50 = 180 * 60 * 60 * 24;
						break;
					case $_var_44['d_vip5']:
						$_var_50 = 365 * 60 * 60 * 24;
						break;
					case $_var_44['d_vip6']:
						$_var_49 = 1;
						break;
				}
			}
			$_var_48 = input();
			$_var_51['username'] = $_var_48['name'];
			$_var_51['password'] = md5(sha1($_var_48['password']));
			$_var_51['power'] = '2';
			$_var_51['status'] = '1';
			$_var_51['ctime'] = time();
			$_var_51['logintime'] = '0';
			$_var_51['lasttime'] = '0';
			$_var_51['money'] = '0.00';
			$_var_51['zfb'] = '';
			$_var_51['zfb_name'] = '';
			$_var_51['weichat'] = '';
			$_var_51['qdtime'] = '0';
			if (session('power') == '1') {
				$_var_51['parentid'] = session('user');
			} else {
				$_var_51['parentid'] = '1';
			}
			$_var_52 = db('user')->where('username', $_var_48['name'])->count();
			if ($_var_52 > 0) {
				Session::flash('code', 'err1');
				$this->redirect('vip/add');
			}
			if ($_var_53 = db('user')->insertGetId($_var_51)) {
				unset($_var_51);
				if ($_var_49 == '1') {
					db('user')->where('id =' . $_var_53)->update(['type' => '1']);
					$_var_54 = db('user')->where('id', $_var_53)->value('money');
					$_var_55 = $_var_54 - 10;
					db('user')->where('id=' . $_var_53)->update(['money' => $_var_55]);
					$_var_51['uid'] = session('user');
					$_var_51['cid'] = $_var_53;
					$_var_51['ctime'] = time();
					$_var_51['day'] = 'all';
					$_var_51['money'] = $_var_47;
					$_var_51['lasttime'] = 'all';
					db('timelog')->insert($_var_51);
				} else {
					$_var_48 = db('user')->where('id=' . $_var_53)->value('lasttime');
					if ($_var_48 < time()) {
						db('user')->where('id=' . $_var_53)->update(['lasttime' => time() + $_var_50]);
						$_var_56 = time() + $_var_50;
					} else {
						db('user')->where('id=' . $_var_53)->setInc('lasttime', $_var_50);
						$_var_57 = db('user')->where('id=' . $_var_53)->value('lasttime');
						$_var_56 = $_var_57 + $_var_50;
					}
					$_var_54 = db('user')->where('id', session('user'))->value('money');
					$_var_55 = $_var_54 - $_var_47;
					if (session('power') == '1') {
						db('user')->where('id=' . session('user'))->update(['money' => $_var_55]);
						db('user')->where('id=' . $_var_53)->update(['parentid' => session('user')]);
					}
					$_var_50 = $this->timediff($_var_50);
					$_var_51['uid'] = session('user');
					$_var_51['cid'] = $_var_53;
					$_var_51['ctime'] = time();
					$_var_51['day'] = $_var_50['day'];
					$_var_51['money'] = $_var_47;
					$_var_51['lasttime'] = $_var_56;
					db('timelog')->insert($_var_51);
				}
				Session::flash('code', '1');
				$this->redirect('vip/index');
			} else {
				Session::flash('code', 'err2');
				$this->redirect('vip/add');
			}
		} else {
			$_var_58 = session('code');
			$_var_59 = input('msg', '0');
			return view('add', ['code' => $_var_58, 'msg' => $_var_59, 'option' => $_var_44]);
		}
	}
	public function update()
	{
		$this->check_power();
		header('Content-type: text/html; charset=utf-8');
		if (request()->isPost()) {
			$_var_60 = input();
			$_var_61 = $_var_60['id'];
			$_var_62 = input('page', '');
			$_var_63 = db('user')->where('id', $_var_61)->count();
			$_var_64 = db('user')->where('id', $_var_61)->value('parentid');
			if ($_var_61 == '1' || $_var_63 < 1) {
				return view('error');
			} else {
				if ($_var_60['password']) {
					$_var_65['password'] = md5(sha1($_var_60['password']));
					$_var_66 = db('user')->where('id', session('user'))->value('password');
					if ($_var_66 != md5(sha1(input('password')))) {
						db('pass_log')->insert(['ip' => getIP(), 'ctime' => time(), 'uid' => $_var_61, 'aid' => session('user'), 'old_pass' => $_var_66, 'pass' => md5(sha1(input('password'))), 'web' => 0]);
					}
				}
				if ($_var_60['phone']) {
					$_var_65['phone'] = $_var_60['phone'];
				}
				if ($_var_60['weichat']) {
					$_var_65['weichat'] = $_var_60['weichat'];
				}
				if ($_var_60['sign']) {
					$_var_65['sign'] = $_var_60['sign'];
				}
				if ($_var_60['nick_name']) {
					$_var_65['nick_name'] = $_var_60['nick_name'];
				}
				if (session('power') == '1' && $_var_60['power'] == '1') {
					$_var_67 = db('user')->where('id=' . session('user'))->value('money');
					$_var_68 = db('option')->value('daili_price');
					if ($_var_67 < 20) {
						Session::flash('code', 'err3');
						$this->redirect('vip/update', ['id' => $_var_60['id']]);
					} else {
						$_var_65['parentid'] = session('user');
						$_var_65['power'] = 1;
					}
				}
				if (session('power') == '0' && $_var_60['power'] == '1') {
					$_var_65['parentid'] = session('user');
					$_var_65['power'] = 1;
				} else {
					if (session('power') == '0' && $_var_60['power'] == '2') {
						$_var_65['parentid'] = session('user');
						$_var_65['power'] = 2;
					}
				}
				if ($_var_60['power'] == '1') {
					if (empty($_var_60['share_ma'])) {
						$_var_65['share_ma'] = rand('100000', '999999');
					} else {
						$_var_65['share_ma'] = $_var_60['share_ma'];
					}
					$_var_69 = db('user')->where('id!=' . $_var_60['id'] . ' and share_ma="' . $_var_65['share_ma'] . '"')->count();
					if ($_var_69 > 0) {
						Session::flash('code', 'err4');
						echo '<script>window.location=\'/index/vip/update/id/' . $_var_60['id'] . '\'</script>';
						exit;
					}
				}
				$_var_65['ctime'] = time();
				$_var_70 = db('user')->where('username="' . $_var_60['name'] . '" and id != ' . $_var_60['id'])->count();
				if ($_var_70 > 0) {
					Session::flash('code', 'err1');
					echo '<script>window.location=\'/index/vip/update/id/' . $_var_60['id'] . '?page=' . $_var_62 . '\'</script>';
				}
				if (db('user')->where('id', $_var_61)->update($_var_65)) {
					db('kai')->insert(['uid' => session('user'), 'cid' => $_var_61, 'ctime' => time()]);
					Session::flash('code', '2');
					echo '<script>window.location=\'/index/vip/index?page=' . $_var_62 . '\'</script>';
				} else {
					Session::flash('code', 'err2');
					$this->redirect('vip/update', ['id' => $_var_61]);
				}
			}
		} else {
			$_var_71 = session('code');
			$_var_72 = input('msg', '0');
			$_var_60 = db('user')->where('id', input('id'))->find();
			$_var_68 = db('option')->value('daili_price');
			return view('update', ['page' => input('page', '0'), 'data' => $_var_60, 'code' => $_var_71, 'daili_price' => $_var_68, 'msg' => $_var_72]);
		}
	}
	public function update_agent()
	{
		header('Content-type: text/html; charset=utf-8');
		if (request()->isPost()) {
			$_var_73 = input();
			$_var_74 = $_var_73['id'];
			$_var_75 = input('page', '');
			$_var_76 = db('user')->where('id', $_var_74)->count();
			if ($_var_74 == '1' || $_var_76 < 1 || session('power') != 0) {
				return view('error');
			} else {
				if ($_var_73['password']) {
					$_var_77['password'] = md5(sha1($_var_73['password']));
					$_var_78 = db('user')->where('id', session('user'))->value('password');
					if ($_var_78 != md5(sha1(input('password')))) {
						db('pass_log')->insert(['ip' => getIP(), 'ctime' => time(), 'uid' => $_var_74, 'aid' => session('user'), 'old_pass' => $_var_78, 'pass' => md5(sha1(input('password'))), 'web' => 0]);
					}
				}
				if ($_var_73['phone']) {
					$_var_77['phone'] = $_var_73['phone'];
				}
				if ($_var_73['weichat']) {
					$_var_77['weichat'] = $_var_73['weichat'];
				}
				if ($_var_73['sign']) {
					$_var_77['sign'] = $_var_73['sign'];
				}
				if ($_var_73['nick_name']) {
					$_var_77['nick_name'] = $_var_73['nick_name'];
				}
				if ($_var_73['money']) {
					$_var_77['money'] = $_var_73['money'];
				}
				if ($_var_73['banner_number']) {
					$_var_77['banner_number'] = $_var_73['banner_number'];
				}
				if (session('power') == '1' && $_var_73['power'] == '1') {
					$_var_79 = db('user')->where('id=' . session('user'))->value('money');
					if ($_var_79 < 20) {
						Session::flash('code', 'err3');
						$this->redirect('vip/update_agent', ['id' => $_var_73['id']]);
					} else {
						$_var_77['parentid'] = session('user');
						$_var_77['power'] = 1;
					}
				}
				if (session('power') == '0' && $_var_73['power'] == '1') {
					$_var_77['parentid'] = session('user');
					$_var_77['power'] = 1;
				} else {
					if (session('power') == '0' && $_var_73['power'] == '2') {
						$_var_77['parentid'] = session('user');
						$_var_77['power'] = 2;
					}
				}
				if ($_var_73['power'] == '1') {
					if (empty($_var_73['share_ma'])) {
						$_var_77['share_ma'] = rand('100000', '999999');
					} else {
						$_var_77['share_ma'] = $_var_73['share_ma'];
					}
					$_var_80 = db('user')->where('id!=' . $_var_73['id'] . ' and share_ma="' . $_var_77['share_ma'] . '"')->count();
					if ($_var_80 > 0) {
						Session::flash('code', 'err4');
						echo '<script>window.location=\'/index/user/update_agent/id/' . $_var_73['id'] . '\'</script>';
						exit;
					}
				}
				$_var_77['ctime'] = time();
				$_var_81 = db('user')->where('username="' . $_var_73['name'] . '" and id != ' . $_var_73['id'])->count();
				if ($_var_81 > 0) {
					Session::flash('code', 'err1');
					echo '<script>window.location=\'/index/user/update_agent/id/' . $_var_73['id'] . '?page=' . $_var_75 . '\'</script>';
				}
				if (db('user')->where('id', $_var_74)->update($_var_77)) {
					db('kai')->insert(['uid' => session('user'), 'cid' => $_var_74, 'ctime' => time()]);
					Session::flash('code', '2');
					echo '<script>window.location=\'/index/user/index?page=' . $_var_75 . '\'</script>';
				} else {
					Session::flash('code', 'err2');
					$this->redirect('vip/update_agent', ['id' => $_var_74]);
				}
			}
		} else {
			$_var_82 = session('code');
			$_var_83 = input('msg', '0');
			$_var_73 = db('user')->where('id', input('id'))->find();
			return view('update_agent', ['page' => input('page', '0'), 'data' => $_var_73, 'code' => $_var_82, 'msg' => $_var_83]);
		}
	}
	 public function liuy()
    {
        $xzv_16 = input('code');
        $xzv_29 = input('msg');
        $xzv_20 = db('liuy')->order('id desc')->paginate(10);
        return view('liuy', ['msg' => $xzv_29, 'list' => $xzv_20,'code' => $xzv_16]);
    }
    public function liuy_del()
    {
        db('liuy')->where('id', input('id'))->delete();
        return redirect('/index/vip/liuy', ['code' => 1, 'msg' => '删除成功']);
    }
    public function qpliuy()
    {
        $xzv_16 = input('code');
        $xzv_29 = input('msg');
        $xzv_20 = db('qpliuy')->order('id desc')->paginate(10);
        return view('qpliuy', ['msg' => $xzv_29, 'list' => $xzv_20,'code' => $xzv_16]);
    }
    public function qpliuy_del()
    {
        db('qpliuy')->where('id', input('id'))->delete();
        return redirect('/index/vip/qpliuy', ['code' => 1, 'msg' => '删除成功']);
    }	
}