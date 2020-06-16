<?php

//decode by http://ikmovie.xyz/
namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use app\index\controller\SuncommonRyan;
class Audio extends SuncommonRyan
{
	public function _initialize()
	{
		$_var_0 = session('user');
		if (!$_var_0) {
			$this->redirect('login/login/index');
		}
	}
	public function index()
	{
		$_var_1 = input('code');
		$_var_2 = input('msg');
		$_var_3 = db('audio')->order('id desc')->paginate(10);
		return view('index', ['msg' => $_var_2, 'list' => $_var_3, 'code' => $_var_1]);
	}
	public function add()
	{
		$_var_4 = input('msg');
		return view('add', ['code' => $_var_4]);
	}
	public function update()
	{
		$_var_5 = input('msg');
		$_var_6 = db('audio')->where('id', input('id'))->find();
		return view('update', ['data' => $_var_6, 'code' => $_var_5]);
	}
	public function delete()
	{
		$_var_7 = input('id');
		$_var_8 = implode(',', array_filter(explode(',', $_var_7)));
		if (db('audio')->where('id in (' . $_var_8 . ')')->delete()) {
			return json(['code' => '1']);
		} else {
			return json(['code' => '0']);
		}
	}
	public function create()
	{
		$_var_9 = request()->file('picurl');
		if ($_var_9) {
			$_var_10 = $_var_9->move(ROOT_PATH . 'public' . DS . 'uploads');
			if ($_var_10) {
				$_var_11 = ['gif', 'jpeg', 'png', 'bmp', 'jpg'];
				$_var_12 = $_var_10->getExtension();
				$_var_13 = '/public/uploads/' . $_var_10->getSaveName();
				if (!in_array($_var_12, $_var_11)) {
					unlink($_var_13);
					return redirect('audio/add', ['code' => 0, 'msg' => '请上传图片']);
				}
			}
			$_var_14 = str_replace('\\', '/', str_replace('\\\\', '/', $_var_13));
		}
		$_var_15['picurl'] = !empty($_var_14) ? $_var_14 : input('picurl1');
		$_var_15['name'] = input('name');
		$_var_15['audio'] = input('audio');
		if (db('audio')->insert($_var_15) !== false) {
			return redirect('audio/index', ['code' => 1, 'msg' => '添加成功']);
		} else {
			if (!empty($_var_13)) {
				unlink($_var_13);
			}
			return redirect('audio/add', ['code' => 0, 'msg' => '添加失败']);
		}
	}
	public function edit()
	{
		$_var_16 = request()->file('picurl');
		if ($_var_16) {
			$_var_17 = $_var_16->move(ROOT_PATH . 'public' . DS . 'uploads');
			if ($_var_17) {
				$_var_18 = ['gif', 'jpeg', 'png', 'bmp', 'jpg'];
				$_var_19 = $_var_17->getExtension();
				$_var_20 = '/public/uploads/' . $_var_17->getSaveName();
				if (!in_array($_var_19, $_var_18)) {
					unlink($_var_20);
					return redirect('audio/add', ['code' => 0, 'msg' => '请上传图片']);
				}
			}
			$_var_21 = str_replace('\\', '/', str_replace('\\\\', '/', $_var_20));
		}
		$_var_22['picurl'] = !empty($_var_21) ? $_var_21 : input('picurl1');
		$_var_22['name'] = input('name');
		$_var_22['audio'] = input('audio');
		if (db('audio')->where('id', input('id'))->update($_var_22) !== false) {
			return redirect('audio/index', ['code' => 1, 'msg' => '修改成功']);
		} else {
			if (!empty($_var_20)) {
				unlink($_var_20);
			}
			return redirect('audio/update', ['code' => 0, 'msg' => '修改失败']);
		}
	}
}