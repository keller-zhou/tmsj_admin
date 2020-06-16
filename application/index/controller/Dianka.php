<?php

//decode by http://ikmovie.xyz/
namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use app\index\controller\SuncommonRyan;
class Dianka extends SuncommonRyan
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
	public function index()
	{
		$_var_2 = input('dian');
		if (empty($_var_2)) {
			$_var_2 = [];
		}
		$_var_3 = db('option')->where('id', 1)->find();
		return view('index', ['dian' => $_var_2, 'd_vip1' => $_var_3['d_vip1'], 'd_vip2' => $_var_3['d_vip2'], 'd_vip3' => $_var_3['d_vip3'], 'd_vip4' => $_var_3['d_vip4'], 'd_vip5' => $_var_3['d_vip5'], 'd_vip6' => $_var_3['d_vip6'], 'daili_price' => $_var_3['daili_price'], 'option' => $_var_3]);
	}
	public function ylog()
	{
		if (session('power') == '0') {
			$_var_4['y'] = '0';
		} else {
			$_var_4['uid'] = session('user');
			$_var_4['y'] = '0';
		}
		if (input('user')) {
			$_var_5 = input('user');
			$_var_4['dianka'] = ['like', "%{$_var_5}%"];
		}
		if (input('start') && input('end')) {
			$_var_4['ctime'] = ['between', strtotime(input('start') . ' 00:00:00') . ',' . strtotime(input('end') . ' 00:00:00')];
		} else {
			if (input('start')) {
				$_var_4['ctime'] = ['>', strtotime(input('start') . ' 00:00:00')];
			}
			if (input('end')) {
				$_var_4['ctime'] = ['<', strtotime(input('end') . ' 00:00:00')];
			}
		}
		if (input('day')) {
			$_var_4['name'] = input('day');
		}
		$_var_6 = db('dianka')->where($_var_4)->order('ctime desc')->select();
		$_var_7 = db('dianka')->where($_var_4)->order('ctime desc')->paginate(20);
		return view('ylog', ['start' => input('start'), 'day' => input('day'), 'end' => input('end'), 'user' => input('user'), 'list' => $_var_7, 'list_all' => $_var_6]);
	}
	public function slog()
	{
		if (session('power') == '0') {
			$_var_8['y'] = '1';
		} else {
			$_var_8['uid'] = session('user');
			$_var_8['y'] = '1';
		}
		if (input('user')) {
			$_var_9 = input('user');
			$_var_8['dianka'] = ['like', "%{$_var_9}%"];
		}
		if (input('day')) {
			$_var_8['name'] = input('day');
		}
		$_var_10 = db('dianka')->where($_var_8)->order('stime desc')->select();
		$_var_11 = db('dianka')->where($_var_8)->order('stime desc')->paginate(20);
		return view('slog', ['start' => input('start'), 'day' => input('day'), 'end' => input('end'), 'user' => input('user'), 'list' => $_var_11, 'list_all' => $_var_10]);
	}
	public function sheng()
	{
		$_var_12 = db('option')->where('id', 1)->find();
		$_var_13 = db('advert')->where('id', 28)->value('content');
		$_var_14 = mb_strwidth($_var_13);
		$_var_15 = db('advert')->where('id', 29)->value('content');
		$_var_16 = bcsub($_var_15, $_var_14);
		if ($_var_14 > 5) {
			return json(['dian' => '前缀设置过长 请联系管理员']);
		}
		if ($_var_15 > 21 || $_var_16 < 6) {
			return json(['dian' => '卡密长度设置不合理 请联系管理员']);
		}
		if (input('fen') && input('ctime')) {
			$_var_17 = ceil(input('fen'));
			$_var_18 = input('ctime');
			$_var_19 = '0';
			switch ($_var_18) {
				case $_var_12['d_vip1']:
					$_var_20 = 7 * 60 * 60 * 24;
					$_var_21 = '体验';
					break;
				case $_var_12['d_vip2']:
					$_var_20 = 30 * 60 * 60 * 24;
					$_var_21 = '一月';
					break;
				case $_var_12['d_vip3']:
					$_var_20 = 90 * 60 * 60 * 24;
					$_var_21 = '三月';
					break;
				case $_var_12['d_vip4']:
					$_var_20 = 180 * 60 * 60 * 24;
					$_var_21 = '半年';
					break;
				case $_var_12['d_vip5']:
					$_var_20 = 365 * 60 * 60 * 24;
					$_var_21 = '一年';
					break;
				case $_var_12['d_vip6']:
					$_var_19 = 1;
					$_var_20 = 0;
					$_var_21 = '永久';
					break;
				case $_var_12['daili_price']:
					$_var_19 = 2;
					$_var_20 = 0;
					$_var_21 = '代理';
					break;
			}
			$_var_22 = '';
			if (session('power') == '0') {
				for ($_var_23 = 0; $_var_23 < $_var_17; $_var_23++) {
					$_var_24 = randstring($_var_16);
					$_var_25['uid'] = session('user');
					$_var_25['dianka'] = $_var_24;
					$_var_25['ctime'] = time();
					$_var_25['y'] = 0;
					$_var_25['yid'] = '';
					$_var_25['time'] = $_var_20;
					$_var_25['type'] = $_var_19;
					$_var_25['name'] = $_var_21;
					db('dianka')->insert($_var_25);
					$_var_22 .= $_var_24 . '<br><hr>';
				}
			} else {
				$_var_26 = db('user')->where('id', session('user'))->value('money');
				if ($_var_26 < $_var_17 * $_var_18) {
					$_var_27 = ['code' => 0, 'dian' => '余额不足'];
					return json($_var_27);
				}
				$_var_22 = '';
				for ($_var_23 = 0; $_var_23 < $_var_17; $_var_23++) {
					$_var_24 = randstring($_var_16);
					$_var_25['uid'] = session('user');
					$_var_25['dianka'] = $_var_24;
					$_var_25['ctime'] = time();
					$_var_25['y'] = 0;
					$_var_25['yid'] = '';
					$_var_25['time'] = $_var_20;
					$_var_25['type'] = $_var_19;
					$_var_25['name'] = $_var_21;
					db('dianka')->insert($_var_25);
					$_var_22 .= $_var_24 . '<br><hr>';
				}
				db('user')->where('id', session('user'))->update(['money' => $_var_26 - $_var_17 * $_var_18]);
			}
		} else {
			$_var_22 = '';
		}
		if (empty($_var_28)) {
			$_var_27 = ['code' => 1, 'dian' => $_var_22];
		} else {
			$_var_27 = ['code' => 0, 'dian' => $_var_22];
		}
		return json($_var_27);
	}
	public function dangesheng()
	{
		$_var_29 = db('option')->where('id', 1)->find();
		$_var_30 = db('advert')->where('id', 28)->value('content');
		$_var_31 = mb_strwidth($_var_30);
		$_var_32 = db('advert')->where('id', 29)->value('content');
		$_var_33 = bcsub($_var_32, $_var_31);
		if ($_var_31 > 5) {
			return json(['dian' => '前缀设置过长 请联系管理员']);
		}
		if ($_var_32 > 21 || $_var_33 < 6) {
			return json(['dian' => '卡密长度设置不合理 请联系管理员']);
		}
		if (input('fen') && input('ctime')) {
			$_var_34 = ceil(input('fen'));
			$_var_35 = input('ctime');
			$_var_36 = '0';
			switch ($_var_35) {
				case $_var_29['d_vip1']:
					$_var_37 = 7 * 60 * 60 * 24;
					$_var_38 = '体验';
					break;
				case $_var_29['d_vip2']:
					$_var_37 = 30 * 60 * 60 * 24;
					$_var_38 = '一月';
					break;
				case $_var_29['d_vip3']:
					$_var_37 = 90 * 60 * 60 * 24;
					$_var_38 = '三月';
					break;
				case $_var_29['d_vip4']:
					$_var_37 = 180 * 60 * 60 * 24;
					$_var_38 = '半年';
					break;
				case $_var_29['d_vip5']:
					$_var_37 = 365 * 60 * 60 * 24;
					$_var_38 = '一年';
					break;
				case $_var_29['d_vip6']:
					$_var_36 = 1;
					$_var_37 = 0;
					$_var_38 = '永久';
					break;
				case $_var_29['daili_price']:
					$_var_36 = 2;
					$_var_37 = 0;
					$_var_38 = '代理';
					break;
			}
			$_var_39 = '';
			if (session('power') == '0') {
				for ($_var_40 = 0; $_var_40 < $_var_34; $_var_40++) {
					$_var_41 = randstring($_var_33);
					$_var_42['uid'] = session('user');
					$_var_42['dianka'] = $_var_41;
					$_var_42['ctime'] = time();
					$_var_42['y'] = 0;
					$_var_42['yid'] = '';
					$_var_42['time'] = $_var_37;
					$_var_42['type'] = $_var_36;
					$_var_42['name'] = $_var_38;
					db('dianka')->insert($_var_42);
					$_var_39 .= $_var_41 . '';
				}
			} else {
				$_var_43 = db('user')->where('id', session('user'))->value('money');
				if ($_var_43 < $_var_34 * $_var_35) {
					$_var_44 = ['code' => 0, 'dian' => '余额不足'];
					return json($_var_44);
				}
				$_var_39 = '';
				for ($_var_40 = 0; $_var_40 < $_var_34; $_var_40++) {
					$_var_41 = randstring($_var_33);
					$_var_42['uid'] = session('user');
					$_var_42['dianka'] = $_var_41;
					$_var_42['ctime'] = time();
					$_var_42['y'] = 0;
					$_var_42['yid'] = '';
					$_var_42['time'] = $_var_37;
					$_var_42['type'] = $_var_36;
					$_var_42['name'] = $_var_38;
					db('dianka')->insert($_var_42);
					$_var_39 .= $_var_41 . '';
				}
				db('user')->where('id', session('user'))->update(['money' => $_var_43 - $_var_34 * $_var_35]);
			}
		} else {
			$_var_39 = '';
		}
		if (empty($_var_45)) {
			$_var_44 = ['code' => 1, 'dian' => $_var_39];
		} else {
			$_var_44 = ['code' => 0, 'dian' => $_var_39];
		}
		return json($_var_44);
	}
}