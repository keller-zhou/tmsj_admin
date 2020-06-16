<?php

//decode by http://ikmovie.xyz/
namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use app\index\controller\SuncommonRyan;
class mn extends SuncommonRyan
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
		$_var_1 = input('code');
		$_var_2 = input('msg');
		$_var_3 = db('mn')->order('id desc')->paginate(8);
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
		$_var_6 = db('mn')->where('id', input('id'))->find();
		return view('update', ['data' => $_var_6, 'code' => $_var_5]);
	}
	public function del()
	{
		$_var_7 = db('mn')->where('id', input('id'))->delete();
		return redirect('mn/index', ['code' => 1, 'msg' => '删除成功']);
	}
	public function create()
	{
		$_var_8['img'] = input('img');
		$_var_8['title'] = input('title');
		$_var_8['url'] = input('url');
		$_var_8['content'] = input('content');
		$_var_8['type'] = input('type');
		$_var_8['region'] = input('region');
		if (db('mn')->insert($_var_8) !== false) {
			return redirect('mn/index', ['code' => 1, 'msg' => '添加成功']);
		} else {
			unlink($_var_9);
			return redirect('mn/add', ['code' => 0, 'msg' => '添加失败']);
		}
	}
	public function edit()
	{
		$_var_10['img'] = input('img');
		$_var_10['title'] = input('title');
		$_var_10['url'] = input('url');
		$_var_10['content'] = input('content');
		$_var_10['type'] = input('type');
		$_var_10['region'] = input('region');
		if (db('mn')->where('id', input('id'))->update($_var_10) !== false) {
			return redirect('mn/index', ['code' => 1, 'msg' => '添加成功']);
		} else {
			unlink($_var_11);
			return redirect('mn/add', ['code' => 0, 'msg' => '添加失败']);
		}
	}
}