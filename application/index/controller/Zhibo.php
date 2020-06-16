<?php

//decode by http://ikmovie.xyz/
namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use app\index\controller\SuncommonRyan;
class zhibo extends SuncommonRyan
{
	public function advert()
	{
		if (request()->Post()) {
			db('advert')->where('id', 14)->update(['title' => input('fxpic1')]);
			db('advert')->where('id', 15)->update(['title' => input('fxurl1')]);
			db('advert')->where('id', 16)->update(['title' => input('fxpic2')]);
			db('advert')->where('id', 17)->update(['title' => input('fxurl2')]);
			Session::flash('code', '1');
			$this->redirect('vip/advert');
		}
		$_var_0 = session('code');
		return view('advert', ['code' => $_var_0]);
	}
	public function _initialize()
	{
		$_var_1 = session('user');
		if (!$_var_1) {
			$this->redirect('login/login/ikmovie');
		}
		$this->check_power();
	}
	public function index()
	{
		$_var_2 = input('code');
		$_var_3 = input('msg');
		$_var_4 = db('zhibo')->order('id desc')->paginate(30);
		return view('index', ['msg' => $_var_3, 'list' => $_var_4, 'code' => $_var_2]);
	}
	public function add()
	{
		$_var_5 = input('msg');
		return view('add', ['code' => $_var_5]);
	}
	public function update()
	{
		$_var_6 = input('msg');
		$_var_7 = db('zhibo')->where('id', input('id'))->find();
		return view('update', ['data' => $_var_7, 'code' => $_var_6]);
	}
	public function del()
	{
		$_var_8 = db('zhibo')->where('id', input('id'))->delete();
		return redirect('zhibo/index', ['code' => 1, 'msg' => '删除成功']);
	}
	public function create()
	{
		$_var_9 = request()->file('img');
		if ($_var_9) {
			$_var_10 = $_var_9->move(ROOT_PATH . 'public' . DS . 'uploads');
			if ($_var_10) {
				$_var_11 = ['gif', 'jpeg', 'png', 'bmp', 'jpg'];
				$_var_12 = $_var_10->getExtension();
				$_var_13 = 'http://movie.mengwawa.vip/public/uploads/' . $_var_10->getSaveName();
				if (in_array($_var_12, $_var_11)) {
					$_var_14['img'] = str_replace('\\', '/', str_replace('\\\\', '/', $_var_13));
					$_var_14['title'] = input('title');
					$_var_14['url'] = input('url');
					if (db('zhibo')->insert($_var_14) !== false) {
						return redirect('zhibo/index', ['code' => 1, 'msg' => '添加成功']);
					} else {
						unlink($_var_13);
						return redirect('zhibo/add', ['code' => 0, 'msg' => '添加失败']);
					}
				} else {
					unlink($_var_13);
					return redirect('zhibo/add', ['code' => 0, 'msg' => '请上传图片']);
				}
			} else {
				return redirect('zhibo/add', ['code' => 0, 'msg' => '上传失败' . $_var_9->getError()]);
			}
		} else {
			return redirect('zhibo/add', ['code' => 0, 'msg' => '图片未上传']);
		}
	}
	public function edit()
	{
		$_var_15 = request()->file('img');
		if ($_var_15) {
			$_var_16 = $_var_15->move(ROOT_PATH . 'public' . DS . 'uploads');
			if ($_var_16) {
				$_var_17 = ['gif', 'jpeg', 'png', 'bmp', 'jpg'];
				$_var_18 = $_var_16->getExtension();
				$_var_19 = '/public/uploads/' . $_var_16->getSaveName();
				if (in_array($_var_18, $_var_17)) {
					$_var_20['img'] = str_replace('\\', '/', str_replace('\\\\', '/', $_var_19));
				} else {
					unlink($_var_19);
					return redirect('zhibo/add', ['code' => 0, 'msg' => '请上传图片']);
				}
			} else {
				return redirect('zhibo/add', ['code' => 0, 'msg' => '上传失败' . $_var_15->getError()]);
			}
		}
		$_var_20['title'] = input('title');
		$_var_20['url'] = input('url');
		if (db('zhibo')->where('id', input('id'))->update($_var_20) !== false) {
			return redirect('zhibo/index', ['code' => 1, 'msg' => '添加成功']);
		} else {
			unlink($_var_19);
			return redirect('zhibo/add', ['code' => 0, 'msg' => '添加失败']);
		}
	}
}