<?php

//decode by http://ikmovie.xyz/
namespace app\app\controller;

error_reporting(E_ALL ^ E_NOTICE);
use app\XDeode;
use think\Controller;
class Nav extends Controller
{
	public function index()
	{
		$_var_0 = input('cid');
		$_var_1 = input('parentid') ? input('parentid') : 1;
		$_var_2['banner'] = db('banner')->where('user_id', $_var_1)->where('cid', 1)->order('sort asc')->paginate(88);
		$_var_2['hb'] = db('banner')->where('user_id', $_var_1)->where('cid', 8)->find();
		$_var_2['vip'] = db('banner')->where('user_id', $_var_1)->where('cid', 2)->order('sort asc')->paginate(88);
		$_var_2['tj'] = db('banner')->where('user_id', $_var_1)->where('cid', 4)->order('sort asc')->paginate(88);
		$_var_2['lr'] = db('banner')->where('user_id', $_var_1)->where('cid', 3)->find();
		$_var_2['wz'] = db('banner')->where('user_id', $_var_1)->where('cid', 12)->order('sort asc')->paginate(88);
		foreach ($_var_2 as $_var_3 => $_var_4) {
			if ($_var_3 != 'hb' && $_var_3 != 'lr') {
				if ($_var_4->isEmpty() == 1) {
					switch ($_var_3) {
						case 'banner':
							$_var_5 = 1;
							break;
						case 'vip':
							$_var_5 = 2;
							break;
						case 'tj':
							$_var_5 = 4;
							break;
						case 'wz':
							$_var_5 = 12;
							break;
					}
					$_var_2[$_var_3] = db('banner')->where('user_id', 1)->where('cid', $_var_5)->order('sort asc')->paginate(88);
				}
			}
		}
		echo json_encode($_var_2, JSON_UNESCAPED_UNICODE);
	}
	public function fl()
	{
		$_var_6 = input('cid');
		$_var_7 = input('parentid') ? input('parentid') : 1;
		$_var_8['tu'] = db('banner')->where('user_id', $_var_7)->where('cid', 6)->order('sort asc')->paginate(88);
		$_var_8['banner'] = db('banner')->where('user_id', $_var_7)->where('cid', 5)->order('sort asc')->paginate(88);
		$_var_8['guanggao'] = db('banner')->where('user_id', $_var_7)->where('cid', 7)->order('sort asc')->paginate(88);
		foreach ($_var_8 as $_var_9 => $_var_10) {
			if ($_var_10->isEmpty() == 1) {
				switch ($_var_9) {
					case 'banner':
						$_var_11 = 5;
						break;
					case 'tu':
						$_var_11 = 6;
						break;
					case 'guanggao':
						$_var_11 = 7;
						break;
				}
				$_var_8[$_var_9] = db('banner')->where('user_id', 1)->where('cid', $_var_11)->order('sort asc')->paginate(88);
			}
		}
		echo json_encode($_var_8, JSON_UNESCAPED_UNICODE);
	}
	public function on()
	{
		$_var_12 = db('advert')->select();
		echo json_encode($_var_12, JSON_UNESCAPED_UNICODE);
	}
}