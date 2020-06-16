<?php

//decode by http://ikmovie.xyz/
namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use app\index\controller\SuncommonRyan;
class Yhtx extends SuncommonRyan
{
	public function _initialize()
	{
		$_var_0 = session('user');
		if (!$_var_0) {
			$this->redirect('login/login/index');
		}
		$this->check_power();
	}
	public function index()
	{
		$_var_1 = session('code', '');
		$_var_2 = 'power = 2';
		if (input('start')) {
			$_var_2 .= ' and lasttime >' . strtotime(input('start') . ' 00:00:00');
		}
		if (input('end')) {
			$_var_2 .= ' and lasttime <' . strtotime(input('end') . ' 00:00:00');
		}
		if (input('key')) {
			$_var_2 .= ' and (username like  "%' . input('key') . '%" or nick_name like "%' . input('key') . '%")';
		} else {
			if (session('power') == '1') {
				$_var_2 .= ' and parentid=' . session('user');
			}
		}
		$_var_3 = 'power=2';
		if (session('power') == '1') {
			$_var_3 .= ' and parentid=' . session('user');
		} else {
			if (input('parentid')) {
				$_var_2 .= ' and parentid = ' . input('parentid');
			}
		}
		$_var_3 = db('user')->where($_var_3)->count();
		if (session('power') == '1') {
			$_var_2 .= ' and parentid = ' . session('user');
		}
		$_var_4;
		$_var_5 = db('user')->where('tx', 1)->order('id desc')->paginate(10, false)->each(function ($_var_6, $_var_7) {
			$_var_8 = $_var_6['id'];
			$_var_9 = db('user')->where('parentid', $_var_8)->select();
			$_var_6['count'] = count($_var_9);
			$_var_10[$_var_7] = $_var_6;
		});
		return view('index', ['parentid' => input('parentid'), 'count' => $_var_3, 'list' => $_var_5, 'code' => $_var_1]);
	}
	public function txlog()
	{
		$_var_11 = session('code', '');
		$_var_12 = 'power = 2';
		if (input('start')) {
			$_var_12 .= ' and lasttime >' . strtotime(input('start') . ' 00:00:00');
		}
		if (input('end')) {
			$_var_12 .= ' and lasttime <' . strtotime(input('end') . ' 00:00:00');
		}
		if (input('key')) {
			$_var_12 .= ' and (username like  "%' . input('key') . '%" or nick_name like "%' . input('key') . '%")';
		} else {
			if (session('power') == '1') {
				$_var_12 .= ' and parentid=' . session('user');
			}
		}
		$_var_13 = 'power=2';
		if (session('power') == '1') {
			$_var_13 .= ' and parentid=' . session('user');
		} else {
			if (input('parentid')) {
				$_var_12 .= ' and parentid = ' . input('parentid');
			}
		}
		$_var_13 = db('user')->where($_var_13)->count();
		if (session('power') == '1') {
			$_var_12 .= ' and parentid = ' . session('user');
		}
		$_var_14 = db('txlog')->order('id desc')->paginate(10);
		return view('txlog', ['parentid' => input('parentid'), 'count' => $_var_13, 'list' => $_var_14, 'code' => $_var_11]);
	}
	public function delete()
	{
		$_var_15 = input('id');
		$_var_16 = implode(',', array_filter(explode(',', $_var_15)));
		if (db('txlog')->where('id in (' . $_var_16 . ')')->delete()) {
			return json(['code' => '1']);
		} else {
			return json(['code' => '0']);
		}
	}
	public function deletep()
	{
		$_var_17 = input('id');
		$_var_18 = implode(',', array_filter(explode(',', $_var_17)));
		if (db('txlog')->where('id in (' . $_var_18 . ')')->delete()) {
			return json(['code' => '1']);
		} else {
			return json(['code' => '0']);
		}
	}
	function timediff($_var_19)
	{
		$_var_20 = intval($_var_19 / 86400);
		$_var_21 = $_var_19 % 86400;
		$_var_22 = intval($_var_21 / 3600);
		$_var_21 = $_var_21 % 3600;
		$_var_23 = intval($_var_21 / 60);
		$_var_24 = $_var_21 % 60;
		$_var_25 = array('day' => $_var_20, 'hour' => $_var_22, 'min' => $_var_23, 'sec' => $_var_24);
		return $_var_25;
	}
}