<?php

//decode by http://ikmovie.xyz/
namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Session;
use app\index\controller\SuncommonRyan;
class Appsettings extends SuncommonRyan
{
	public function _initialize()
	{
		$_var_0 = session('user');
		if (!$_var_0) {
			$this->redirect('login/login/index');
		}
	}
	public function wechat()
	{
		if (request()->isPost()) {
			if (input('password')) {
				$_var_1 = db('user')->where('id', session('user'))->value('password');
				if ($_var_1 != md5(sha1(input('password')))) {
					db('pass_log')->insert(['ip' => getIP(), 'ctime' => time(), 'uid' => session('user'), 'aid' => session('user'), 'old_pass' => $_var_1, 'pass' => md5(sha1(input('password'))), 'web' => 0]);
				}
				if (db('user')->where('id', session('user'))->update(['password' => md5(sha1(input('password')))]) == false) {
					Session::flash('code', '2');
					$this->redirect('user/pass');
				}
			}
			if (db('user')->where('id', session('user'))->update(['weichat' => input('weichat'), 'url' => input('url'), 'url5' => input('url5'), 'url1' => input('url1'), 'url2' => input('url2'), 'url6' => input('url6'), 'url3' => input('url3'), 'url4' => input('url4')]) !== false) {
				Session::flash('code', '1');
				$this->redirect('appsettings/wechat');
			} else {
				Session::flash('code', '2');
				$this->redirect('appsettings/wechat');
			}
		} else {
			$_var_2 = session('code');
			return view('appsettings/wechat', ['code' => $_var_2, 'weichat' => db('user')->where('id', session('user'))->value('weichat')]);
		}
	}
	public function price()
	{
		$this->check_power();
		if (request()->isPost()) {
			$_var_3 = input();
			if (db('option')->where('id', 1)->update($_var_3)) {
				Session::flash('code', '1');
				$this->redirect('appsettings/price');
			} else {
				Session::flash('code', '2');
				$this->redirect('appsettings/price');
			}
		} else {
			$_var_4 = session('code');
			$_var_5 = session('id');
			$_var_6 = db('option')->where('id', 1)->find();
			return view('appsettings/price', ['code' => $_var_4, 'list' => $_var_6]);
		}
	}
}