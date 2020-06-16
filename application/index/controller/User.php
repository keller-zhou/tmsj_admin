<?php

//decode by http://ikmovie.xyz/
namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Session;
use app\index\controller\SuncommonRyan;
class User extends SuncommonRyan
{
	public function _initialize()
	{
		$_var_0 = session('user');
	}
	public function log()
	{
		$_var_1 = input('id');
		$_var_2 = db('moneylog')->where('cid', $_var_1)->order('ctime', 'desc')->select();
		return view('log', ['list' => $_var_2]);
	}
	public function zlog()
	{
		$_var_3 = 'ctime>0';
		if (input('user')) {
			$_var_4 = db('user')->where('username like "%' . input('user') . '%"')->column('id');
			if ($_var_4) {
				$_var_3 .= ' and uid in (' . implode(',', $_var_4) . ')';
			}
		}
		if (input('vip')) {
			$_var_5 = db('user')->where('username like "%' . input('vip') . '%"')->column('id');
			if ($_var_5) {
				$_var_3 .= ' and cid in (' . implode(',', $_var_5) . ')';
			}
		}
		if (input('start')) {
			$_var_3 .= ' and ctime >' . strtotime(input('start') . ' 00:00:00');
		}
		if (input('end')) {
			$_var_3 .= ' and ctime <' . strtotime(input('end') . ' 00:00:00');
		}
		if (input('day')) {
			if (input('day') == '终生') {
				$_var_3 .= ' and day ="all"';
			} else {
				$_var_3 .= ' and day =' . input('day');
			}
		}
		if (input('money')) {
			$_var_3 .= ' and money =' . input('money');
		}
		if (input('dstart')) {
			$_var_3 .= ' and lasttime >' . strtotime(input('dstart') . ' 00:00:00');
		}
		if (input('dend')) {
			$_var_3 .= ' and lasttime <' . strtotime(input('dend') . ' 00:00:00');
		}
		$_var_6 = db('timelog')->where($_var_3)->order('ctime', 'desc')->paginate(30);
		return view('zlog', ['list' => $_var_6]);
	}
	public function xlog()
	{
		$this->check_power();
		if (session('power') == '0') {
			$_var_7 = 'ctime>0';
		} else {
			$_var_7 = 'uid=' . session('user');
		}
		if (input('user')) {
			$_var_8 = db('user')->where('username like "%' . input('user') . '%"')->column('id');
			if ($_var_8) {
				$_var_7 .= ' and uid in (' . implode(',', $_var_8) . ')';
			}
		}
		if (input('vip')) {
			$_var_9 = db('user')->where('username like "%' . input('vip') . '%"')->column('id');
			if ($_var_9) {
				$_var_7 .= ' and cid in (' . implode(',', $_var_9) . ')';
			}
		}
		if (input('start')) {
			$_var_7 .= ' and ctime >' . strtotime(input('start') . ' 00:00:00');
		}
		if (input('end')) {
			$_var_7 .= ' and ctime <' . strtotime(input('end') . ' 00:00:00');
		}
		if (input('day')) {
			switch (input('day')) {
				case 7:
					$_var_7 .= ' and day ="7"';
					break;
				case 30:
					$_var_7 .= ' and day ="30"';
					break;
				case 90:
					$_var_7 .= ' and day ="90"';
					break;
				case 180:
					$_var_7 .= ' and day ="180"';
					break;
				case 365:
					$_var_7 .= ' and day ="365"';
					break;
				case 999:
					$_var_7 .= ' and day ="all"';
					break;
			}
		}
		if (input('money')) {
			$_var_7 .= ' and money =' . input('money');
		}
		if (input('dstart')) {
			$_var_7 .= ' and lasttime >' . strtotime(input('dstart') . ' 00:00:00');
		}
		if (input('dend')) {
			$_var_7 .= ' and lasttime <' . strtotime(input('dend') . ' 00:00:00');
		}
		$_var_10 = db('timelog')->where($_var_7)->order('ctime', 'desc')->paginate(30);
		return view('xlog', ['list' => $_var_10]);
	}
	public function mlog()
	{
		$this->check_power();
		$_var_11 = 'uid>0 ';
		if (input('user')) {
			$_var_12 = db('user')->where('username like "%' . input('user') . '%"')->column('id');
			if ($_var_12) {
				$_var_11 .= ' and uid in (' . implode(',', $_var_12) . ')';
			}
		}
		if (input('vip')) {
			$_var_13 = db('user')->where('username like "%' . input('vip') . '%"')->column('id');
			if ($_var_13) {
				$_var_11 .= ' and cid in (' . implode(',', $_var_13) . ')';
			}
		}
		if (input('start')) {
			$_var_11 .= ' and ctime >' . strtotime(input('start') . ' 00:00:00');
		}
		if (input('end')) {
			$_var_11 .= ' and ctime <' . strtotime(input('end') . ' 00:00:00');
		}
		$_var_14 = db('kai')->where($_var_11)->order('ctime', 'desc')->paginate(30);
		return view('mlog', ['list' => $_var_14]);
	}
	public function paylog()
	{
		$this->check_power();
		$_var_15 = 'id>0 ';
		if (input('vip')) {
			$_var_16 = db('user')->where('username like "%' . input('vip') . '%"')->column('id');
			if (!empty($_var_16)) {
				$_var_15 .= ' and cid in (' . implode(',', $_var_16) . ')';
			}
		}
		$_var_17 = db('pay')->where($_var_15)->order('time', 'desc')->paginate(30);
		return view('paylog', ['list' => $_var_17]);
	}
	public function clog()
	{
		$this->check_power();
		$_var_18 = 'ctime>0';
		if (input('user')) {
			$_var_19 = db('user')->where('username like "%' . input('user') . '%"')->column('id');
			if (!empty($_var_19)) {
				$_var_18 .= ' and uid in (' . implode(',', $_var_19) . ')';
			}
		}
		if (input('vip')) {
			$_var_20 = db('user')->where('username like "%' . input('vip') . '%"')->column('id');
			if (!empty($_var_20)) {
				$_var_18 .= ' and cid in (' . implode(',', $_var_20) . ')';
			}
		}
		if (input('start')) {
			$_var_18 .= ' and ctime >' . strtotime(input('start') . ' 00:00:00');
		}
		if (input('end')) {
			$_var_18 .= ' and ctime <' . strtotime(input('end') . ' 00:00:00');
		}
		if (session('power') == '1') {
			$_var_18 .= ' and uid=' . session('user');
		}
		$_var_21 = db('moneylog')->where($_var_18)->order('ctime', 'desc')->paginate(30);
		return view('clog', ['list' => $_var_21]);
	}
	public function daoqi()
	{
		$this->check_power();
		$_var_22 = session('code', '');
		$_var_23 = time() + 117 * 60 * 60 * 24;
		$_var_24 = time() - 117 * 60 * 60 * 24;
		$_var_25 = db('user')->where('(type is null) and lasttime <' . $_var_23 . ' and lasttime>' . $_var_24)->order('id desc')->paginate(10);
		return view('daoqi', ['list' => $_var_25]);
	}
	public function index()
	{
		$_var_26 = session('code', '');
		$_var_27 = 'power = 1';
		if (input('start')) {
			$_var_27 .= ' and lasttime >' . strtotime(input('start') . ' 00:00:00');
		}
		if (input('end')) {
			$_var_27 .= ' and lasttime <' . strtotime(input('end') . ' 00:00:00');
		}
		if (input('key')) {
			$_var_27 .= ' and (username like  "%' . input('key') . '%" or share_ma like "%' . input('key') . '%")';
		}
		if (session('power') == '1') {
			$_var_27 .= ' and parentid = ' . session('user');
			$_var_28 = db('user')->where('power = 1 and parentid = ' . session('user'))->count();
		} else {
			if (input('parentid')) {
				$_var_27 .= ' and parentid = ' . input('parentid');
			}
			$_var_28 = db('user')->where('power=1')->count();
		}
		$_var_29 = db('user')->where($_var_27)->order('id desc')->paginate(10);
		$_var_30 = db('option')->where('id', 1)->find();
		return view('index', ['parentid' => input('parentid'), 'count' => $_var_28, 'list' => $_var_29, 'code' => $_var_26, 'option' => $_var_30]);
	}
	public function pass()
	{
		if (request()->isPost()) {
			if (input('password')) {
				$_var_31 = db('user')->where('id', session('user'))->value('password');
				if ($_var_31 != md5(sha1(input('password')))) {
					db('pass_log')->insert(['ip' => getIP(), 'ctime' => time(), 'uid' => session('user'), 'aid' => session('user'), 'old_pass' => $_var_31, 'pass' => md5(sha1(input('password'))), 'web' => 0]);
				}
				if (db('user')->where('id', session('user'))->update(['password' => md5(sha1(input('password')))]) == false) {
					Session::flash('code', '2');
					$this->redirect('user/pass');
				}
			}
			if (db('user')->where('id', session('user'))->update(['weichat' => input('weichat'), 'url' => input('url'), 'url5' => input('url5'), 'url1' => input('url1'), 'url2' => input('url2'), 'url6' => input('url6'), 'url3' => input('url3'), 'url4' => input('url4')]) !== false) {
				Session::flash('code', '1');
				$this->redirect('user/app_option');
			} else {
				Session::flash('code', '2');
				$this->redirect('user/app_option');
			}
		} else {
			$_var_32 = session('code');
			return view('user/pass', ['code' => $_var_32, 'weichat' => db('user')->where('id', session('user'))->value('weichat')]);
		}
	}
	public function app_option()
	{
		if (request()->isPost()) {
			$_var_33 = input();
			array_walk($_var_33, function (&$_var_34, $_var_35) {
				if ($_var_35 == 'weichat') {
					if (!preg_match('/^[_0-9a-zA-Z]{5,20}$/', $_var_34)) {
						$_var_34 = '';
					}
				} else {
					if (preg_match('/^vip\\d$/', $_var_35)) {
						if (!(is_numeric($_var_34) && $_var_34 > 0)) {
							$_var_34 = '';
						}
					} else {
						if (preg_match('/^d_vip\\d$/', $_var_35)) {
							if (!(is_numeric($_var_34) && $_var_34 > 0)) {
								$_var_34 = '';
							}
						}
					}
				}
			});
			if (db('option')->where('id', 1)->update($_var_33)) {
				Session::flash('code', '1');
				$this->redirect('user/app_option');
			} else {
				Session::flash('code', '2');
				$this->redirect('user/app_option');
			}
		} else {
			$_var_36 = session('code');
			$_var_37 = session('id');
			$_var_38 = db('option')->where('id', 1)->find();
			$_var_38['weichat'] = db('user')->where('id=' . session('user'))->value('weichat');
			return view('user/app_option', ['code' => $_var_36, 'list' => $_var_38]);
		}
	}
	public function add()
	{
		$this->check_power();
		if (request()->isPost()) {
			$_var_39 = input();
			$_var_40 = db('option')->value('daili_yue');
			$_var_41 = db('option')->value('daili_price');
			if (session('power') == '1') {
				$_var_42 = db('user')->where('id=' . session('user'))->value('money');
				if ($_var_42 < $_var_41) {
					Session::flash('code', 'err3');
					$this->redirect('user/add');
				} else {
					$_var_43['parentid'] = session('user');
				}
				$_var_43['banner_number'] = '0';
			} else {
				$_var_43['parentid'] = '0';
				$_var_43['banner_number'] = $_var_39['banner_number'];
			}
			$_var_43['username'] = $_var_39['name'];
			$_var_43['password'] = md5(sha1($_var_39['password']));
			$_var_43['power'] = '1';
			$_var_43['status'] = '1';
			$_var_43['parentid'] = session('user');
			$_var_43['phone'] = $_var_39['phone'];
			if (session('power') == '1') {
				$_var_43['share_ma'] = rand('100000', '999999');
			} else {
				if (empty($_var_39['share_ma'])) {
					$_var_43['share_ma'] = rand('100000', '999999');
				} else {
					$_var_43['share_ma'] = $_var_39['share_ma'];
				}
			}
			$_var_43['ctime'] = time();
			$_var_43['logintime'] = '0';
			$_var_43['lasttime'] = '0';
			$_var_43['money'] = $_var_40;
			$_var_44 = db('user')->where('share_ma', $_var_43['share_ma'])->count();
			if ($_var_44 > 0) {
				Session::flash('code', 'err4');
				$this->redirect('user/add');
			}
			$_var_45 = db('user')->where('username', $_var_39['name'])->count();
			if ($_var_45 > 0) {
				Session::flash('code', 'err1');
				$this->redirect('user/add');
			}
			unset($_var_39);
			if ($_var_46 = db('user')->insertGetId($_var_43)) {
				if (session('power') == '1') {
					$_var_42 = db('user')->where('id=' . session('user'))->value('money');
					if ($_var_42 >= $_var_41) {
						db('user')->where('id', session('user'))->setDec('money', $_var_41);
						$_var_39['uid'] = session('user');
						$_var_39['ctime'] = time();
						$_var_39['cid'] = $_var_46;
						$_var_39['money'] = $_var_40;
						db('moneylog')->insert($_var_39);
					}
				}
				db('user')->where('id=' . $_var_46)->update(['money' => $_var_40]);
				db('kai')->insert(['uid' => session('user'), 'cid' => $_var_46, 'ctime' => time()]);
				Session::flash('code', '1');
				$this->redirect('user/index');
			} else {
				Session::flash('code', 'err2');
				$this->redirect('user/add');
			}
		} else {
			$_var_47 = session('code');
			$_var_48 = input('msg', '0');
			$_var_41 = db('option')->value('daili_price');
			return view('add', ['code' => $_var_47, 'daili_price' => $_var_41, 'msg' => $_var_48]);
		}
	}
	public function pass_log()
	{
		$_var_49 = input('id');
		$_var_50 = db('pass_log')->where('uid', $_var_49)->select();
		return view('pass_log', ['list' => $_var_50]);
	}
	public function update()
	{
		if (request()->isPost()) {
			$_var_51 = input();
			$_var_52 = input('page', '');
			$_var_53['username'] = $_var_51['name'];
			if ($_var_51['password']) {
				$_var_53['password'] = md5(sha1($_var_51['password']));
				$_var_54 = db('user')->where('id', session('user'))->value('password');
				if ($_var_54 != md5(sha1(input('password')))) {
					db('pass_log')->insert(['ip' => getIP(), 'ctime' => time(), 'uid' => input('id'), 'aid' => session('user'), 'old_pass' => $_var_54, 'pass' => md5(sha1(input('password'))), 'web' => 0]);
				}
			}
			$_var_53['power'] = $_var_51['power'];
			$_var_53['phone'] = $_var_51['phone'];
			$_var_53['ctime'] = time();
			$_var_55 = db('user')->where('id', $_var_51['id'])->value('share_ma');
			if (empty($_var_51['share_ma']) && !$_var_55) {
				$_var_53['share_ma'] = rand('100000', '999999');
			} else {
				if (empty($_var_51['share_ma'])) {
					if (!$_var_55) {
						$_var_53['share_ma'] = rand('100000', '999999');
					}
				} else {
					$_var_53['share_ma'] = $_var_51['share_ma'];
				}
			}
			$_var_56 = db('user')->where('id!=' . $_var_51['id'] . ' and share_ma="' . $_var_51['share_ma'] . '"')->count();
			if ($_var_56 > 0) {
				Session::flash('code', 'err4');
				echo '<script>window.location=\'/index/user/update/id/' . $_var_51['id'] . '\'</script>';
				exit;
			}
			$_var_53['weichat'] = $_var_51['weichat'];
			$_var_57 = db('user')->where('username="' . $_var_51['name'] . '" and id!=' . $_var_51['id'])->count();
			if ($_var_57 > 0) {
				Session::flash('code', 'err1');
				echo '<script>window.location=\'/index/user/index/id/' . $_var_51['id'] . '?page=' . $_var_52 . '\'</script>';
			}
			if (db('user')->where('id', $_var_51['id'])->update($_var_53)) {
				Session::flash('code', '2');
				echo '<script>window.location=\'/index/user/index?page=' . $_var_52 . '\'</script>';
			} else {
				Session::flash('code', 'err2');
				$this->redirect('user/update', ['id' => $_var_51['id']]);
			}
		} else {
			$_var_58 = session('code');
			$_var_59 = input('msg', '0');
			$_var_51 = db('user')->where('id', input('id'))->find();
			return view('update', ['page' => input('page', '0'), 'data' => $_var_51, 'code' => $_var_58, 'msg' => $_var_59]);
		}
	}
	public function delete()
	{
		$this->check_power();
		$_var_60 = input('id');
		$_var_61 = implode(',', array_filter(explode(',', $_var_60)));
		if (db('user')->where('id in (' . $_var_61 . ')')->delete()) {
			return json(['code' => '1']);
		} else {
			return json(['code' => '0']);
		}
	}
	public function yhtx()
	{
		$this->check_power();
		$_var_62 = input('id');
		$_var_63 = input('tx');
		$_var_64 = input('txje');
		$_var_65 = implode(',', array_filter(explode(',', $_var_62)));
		$_var_66 = db('user')->where('id', input('id'))->value('zfb');
		if (!($_var_64 > 0)) {
			return json(['code' => '0']);
		}
		switch ($_var_63) {
			case 1:
				return json(['code' => 0]);
				break;
			case 2:
				break;
			case 3:
				$_var_67 = db('user')->where('id', $_var_62)->value('money');
				db('user')->where('id', $_var_62)->update(['money' => $_var_67 + $_var_64]);
				break;
		}
		db('txlog')->insert(['uid' => $_var_62, 'time' => time(), 'nickname' => input('nickname'), 'status' => $_var_63, 'jine' => $_var_64, 'zfb' => $_var_66, 'weixin' => input('weixin')]);
		if (db('user')->where('id in (' . $_var_65 . ')')->update(['tx' => input('tx'), 'txje' => '0'])) {
			return json(['code' => '1']);
		} else {
			return json(['code' => '0']);
		}
	}
	public function status()
	{
		$this->check_power();
		$_var_68 = input('id');
		$_var_69 = implode(',', array_filter(explode(',', $_var_68)));
		if (db('user')->where('id in (' . $_var_69 . ')')->update(['status' => input('status')])) {
			return json(['code' => '1']);
		} else {
			return json(['code' => '0']);
		}
	}
	public function ctime()
	{
		$this->check_power();
		$_var_70 = input('day') * 60 * 60 * 24;
		$_var_71 = time() - $_var_70;
		$_var_72 = db('user')->where('power=' . input('type') . ' and lasttime>' . $_var_71)->column('id');
		$_var_73 = implode(',', $_var_72);
		db('user')->where('id in (' . $_var_73 . ')')->setInc('lasttime', $_var_70);
		return json(1);
	}
	public function money()
	{
		$this->check_power();
		$_var_74 = input('id');
		if (input('money') < 0) {
			return json(['code' => '0', 'msg' => '充值失败,充值数额违规']);
		}
		$_var_75 = implode(',', array_filter(explode(',', $_var_74)));
		if ($_var_74 == 'all') {
			if (db('user')->where('id>0 and power=' . input('type'))->setInc('money', input('money'))) {
				return json(['code' => '1']);
			} else {
				return json(['code' => '0']);
			}
		} else {
			if (session('power') == '1') {
				$_var_76 = db('user')->where('id=' . session('user'))->value('money');
				if ($_var_76 < input('money') * count(array_filter(explode(',', $_var_74)))) {
					return json(['code' => '0', 'msg' => '余额不足，请联系管理员充值']);
				}
			}
			if (db('user')->where('id in (' . $_var_75 . ')')->setInc('money', input('money'))) {
				if (session('power') == '1') {
					$_var_76 = db('user')->where('id=' . session('user'))->setDec('money', input('money') * count(array_filter(explode(',', $_var_74))));
					db('user')->where('id in (' . $_var_75 . ')')->update(['parentid' => session('user')]);
				}
				if (session('power') == '0') {
					$_var_77 = 60 * 60 * 24 * 30;
					foreach (array_filter(explode(',', $_var_74)) as $_var_78) {
						$_var_79 = db('user')->where('id=' . $_var_78)->value('power');
						if ($_var_79 == '1') {
							$_var_80 = db('user')->where('id=' . $_var_78)->value('lasttime');
							if ($_var_80 < time()) {
								db('user')->where('id=' . $_var_78)->update(['lasttime' => time() + $_var_77]);
							} else {
								db('user')->where('id=' . $_var_78)->setInc('lasttime', $_var_77);
							}
						}
					}
				}
				$_var_81 = array_filter(explode(',', input('id')));
				$_var_80 = [];
				foreach ($_var_81 as $_var_82 => $_var_78) {
					$_var_80['uid'] = session('user');
					$_var_80['ctime'] = time();
					$_var_80['cid'] = $_var_78;
					$_var_80['money'] = input('money');
					db('moneylog')->insert($_var_80);
				}
				return json(['code' => '1']);
			} else {
				return json(['code' => '0', 'msg' => '充值失败']);
			}
		}
	}
	public function omoney()
	{
		$this->check_power();
		$_var_83 = input('id');
		$_var_84 = implode(',', array_filter(explode(',', $_var_83)));
		$_var_85 = db('user')->where('id', $_var_84)->value('money');
		if ($_var_85 < input('money')) {
			return json(['code' => '0', 'msg' => '扣款失败,扣款数额大于用户余额']);
		}
		if (db('user')->where('id in (' . $_var_84 . ')')->setDec('money', input('money'))) {
			return json(['code' => '1']);
		} else {
			return json(['code' => '0', 'msg' => '扣款失败']);
		}
	}
	public function chong()
	{
		$_var_86 = input('id');
		$_var_87 = implode(',', array_filter(explode('-', $_var_86)));
		$_var_88 = input('money');
		$_var_89 = input('ctime');
		$_var_90 = db('option')->where('id', 1)->find();
		if ($_var_88) {
			$_var_91 = $_var_88;
		} else {
			$_var_91 = $_var_89;
		}
		if (session('power') == '1') {
			$_var_92 = db('user')->where('id', session('user'))->value('money');
			if ($_var_92 < $_var_91) {
				return json(['code' => '0', 'msg' => '开通失败,您的余额不足']);
			}
		}
		if ($_var_88) {
			$_var_93 = '0';
			$_var_94 = $_var_88 / 1 * 7 * 24 * 60 * 60;
		} else {
			$_var_93 = '0';
			switch ($_var_89) {
				case $_var_90['d_vip1']:
					$_var_94 = 7 * 60 * 60 * 24;
					break;
				case $_var_90['d_vip2']:
					$_var_94 = 30 * 60 * 60 * 24;
					break;
				case $_var_90['d_vip3']:
					$_var_94 = 90 * 60 * 60 * 24;
					break;
				case $_var_90['d_vip4']:
					$_var_94 = 180 * 60 * 60 * 24;
					break;
				case $_var_90['d_vip5']:
					$_var_94 = 365 * 60 * 60 * 24;
					break;
				case $_var_90['d_vip6']:
					$_var_93 = 1;
					break;
			}
		}
		if ($_var_93 == '1') {
			db('user')->where('id in (' . $_var_87 . ')')->update(['type' => '1']);
			$_var_95 = db('user')->where('id', $_var_87)->value('money');
			if (session('power') == '1') {
				$_var_95 = db('user')->where('id', session('user'))->value('money');
				$_var_96 = $_var_95 - $_var_91;
				db('user')->where('id=' . session('user'))->update(['money' => $_var_96]);
				db('user')->where('id in (' . $_var_87 . ')')->update(['parentid' => session('user')]);
			} else {
				$_var_96 = $_var_95 - 10;
				db('user')->where('id=' . $_var_87)->update(['money' => $_var_96]);
			}
			$_var_97['uid'] = session('user');
			$_var_97['cid'] = $_var_86;
			$_var_97['ctime'] = time();
			$_var_97['day'] = 'all';
			$_var_97['money'] = $_var_91;
			$_var_97['lasttime'] = 'all';
			db('timelog')->insert($_var_97);
		} else {
			$_var_98 = array_filter(explode('-', $_var_86));
			foreach ($_var_98 as $_var_99) {
				$_var_92 = db('user')->where('id=' . $_var_99)->value('lasttime');
				if ($_var_92 < time()) {
					db('user')->where('id=' . $_var_99)->update(['lasttime' => time() + $_var_94]);
					$_var_100 = time() + $_var_94;
				} else {
					db('user')->where('id=' . $_var_99)->setInc('lasttime', $_var_94);
					$_var_101 = db('user')->where('id=' . $_var_99)->value('lasttime');
					$_var_100 = $_var_101 + $_var_94;
				}
				$_var_95 = db('user')->where('id', session('user'))->value('money');
				$_var_96 = $_var_95 - $_var_91;
				if (session('power') == '1') {
					db('user')->where('id=' . session('user'))->update(['money' => $_var_96]);
					db('user')->where('id in (' . $_var_87 . ')')->update(['parentid' => session('user')]);
				}
				$_var_94 = $this->timediff($_var_94);
				$_var_97['uid'] = session('user');
				$_var_97['cid'] = $_var_86;
				$_var_97['ctime'] = time();
				$_var_97['day'] = $_var_94['day'];
				$_var_97['money'] = $_var_91;
				$_var_97['lasttime'] = $_var_100;
				db('timelog')->insert($_var_97);
			}
		}
		return json(['code' => '1']);
	}
	function timediff($_var_102)
	{
		$_var_103 = intval($_var_102 / 86400);
		$_var_104 = $_var_102 % 86400;
		$_var_105 = intval($_var_104 / 3600);
		$_var_104 = $_var_104 % 3600;
		$_var_106 = intval($_var_104 / 60);
		$_var_107 = $_var_104 % 60;
		$_var_108 = array('day' => $_var_103, 'hour' => $_var_105, 'min' => $_var_106, 'sec' => $_var_107);
		return $_var_108;
	}
}