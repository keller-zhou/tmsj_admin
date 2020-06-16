<?php

//decode by http://ikmovie.xyz/
namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Session;
use app\index\controller\SuncommonRyan;
class Ryan extends SuncommonRyan
{
	public function _initialize()
	{
		$_var_0 = session('user');
		if (!$_var_0) {
			$this->redirect('login/login/ikmovie');
		}
	}
	public function membertime()
	{
		$this->check_power();
		$_var_1 = db('advert')->where('id', 21)->value('content');
		if (empty($_var_1)) {
			$_var_2 = '完美网服';
		} else {
			$_var_2 = $_var_1;
		}
		if (session('power') != 0) {
			header('content-type:text/html;charset=utf-8');
			echo '非法操作';
			exit;
		}
		if (request()->Post()) {
			$_var_3 = input('data');
			$_var_4 = $_var_3 * 60 * 60 * 24;
			db('user')->where('id > 1')->setDec('lasttime', $_var_4);
			return json(['msg' => '已扣除会员时间' . $_var_3 . '天']);
		}
		return view('membertime', ['app_name' => $_var_2]);
	}
}