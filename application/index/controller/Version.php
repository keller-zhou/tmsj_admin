<?php

//decode by http://ikmovie.xyz/
namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use app\index\controller\SuncommonRyan;
class Version extends SuncommonRyan
{
	public function _initialize()
	{
		$_var_0 = session('user');
		if (!$_var_0) {
			$this->redirect('login/login/ikmovie');
		}
		$this->check_power();
	}
	public function index()
	{
		$_var_1 = db('advert')->where('id', 22)->value('content');
		$_var_2 = db('advert')->where('id', 24)->value('content');
		if (empty($_var_1)) {
			$_var_3 = '请到 【 仪表盘-设置 】 中编辑地址';
		} else {
			$_var_3 = $_var_1;
		}
		if (empty($_var_2)) {
			$_var_4 = '请到 【 仪表盘-设置 】 中编辑地址';
		} else {
			$_var_4 = $_var_2;
		}
		$this->check_power();
		if (request()->Post()) {
			db('advert')->where('id', 152)->update(['content' => input('Ios_Updated_version')]);
			db('advert')->where('id', 153)->update(['content' => input('Ios_Updated_content')]);
			db('advert')->where('id', 150)->update(['content' => input('Android_Updated_version')]);
			db('advert')->where('id', 151)->update(['content' => input('Android_Updated_content')]);
			$this->redirect('version/index');
		}
		$_var_5 = session('code');
		return view('index', ['code' => $_var_5, 'app_ios_down' => $_var_3, 'app_android_down' => $_var_4]);
	}
	public function eject_ok()
	{
		$this->check_power();
		$_var_6 = input('id');
		$_var_7 = 1;
		if (!empty($_var_6)) {
			if (db('advert')->where('id', $_var_6)->update(['content' => $_var_7])) {
				return redirect('version/index', ['code' => 1, 'msg' => 'OK']);
			} else {
				return json(['code' => 0]);
			}
		} else {
			return json(['code' => 0]);
		}
	}
	public function eject_no()
	{
		$this->check_power();
		$_var_8 = input('id');
		$_var_9 = 0;
		if (!empty($_var_8)) {
			if (db('advert')->where('id', $_var_8)->update(['content' => $_var_9])) {
				return redirect('version/index', ['code' => 1, 'msg' => 'OK']);
			} else {
				return json(['code' => 0]);
			}
		} else {
			return json(['code' => 0]);
		}
	}
}