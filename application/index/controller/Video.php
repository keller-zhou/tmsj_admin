<?php

//decode by http://ikmovie.xyz/
namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use app\index\controller\SuncommonRyan;
class Video extends SuncommonRyan
{
	public function _initialize()
	{
		$this->check_power();
	}
	public function index()
	{
		$_var_0 = input('code');
		$_var_1 = input('msg');
		$_var_2 = db('video')->order('id desc')->paginate(8);
		return view('index', ['msg' => $_var_1, 'list' => $_var_2, 'code' => $_var_0]);
	}
	public function add()
	{
		$_var_3 = input('msg');
		return view('add', ['code' => $_var_3]);
	}
	public function update()
	{
		$_var_4 = input('msg');
		$_var_5 = db('video')->where('id', input('id'))->find();
		return view('update', ['data' => $_var_5, 'code' => $_var_4]);
	}
	public function del()
	{
		$_var_6 = db('video')->where('id', input('id'))->delete();
		return redirect('video/index', ['code' => 1, 'msg' => '删除成功']);
	}
	public function create()
	{
		$_var_7 = request()->file('img');
		if ($_var_7) {
			$_var_8 = $_var_7->move(ROOT_PATH . 'public' . DS . 'uploads');
			if ($_var_8) {
				$_var_9 = ['gif', 'jpeg', 'png', 'bmp', 'jpg'];
				$_var_10 = $_var_8->getExtension();
				$_var_11 = '/public/uploads/' . $_var_8->getSaveName();
				if (in_array($_var_10, $_var_9)) {
					$_var_12['img'] = str_replace('\\', '/', str_replace('\\\\', '/', $_var_11));
					$_var_12['title'] = input('title');
					$_var_12['url'] = input('url');
					$_var_12['content'] = input('content');
					$_var_12['type'] = input('type');
					$_var_12['region'] = input('region');
					if (db('video')->insert($_var_12) !== false) {
						return redirect('video/index', ['code' => 1, 'msg' => '添加成功']);
					} else {
						unlink($_var_11);
						return redirect('video/add', ['code' => 0, 'msg' => '添加失败']);
					}
				} else {
					unlink($_var_11);
					return redirect('video/add', ['code' => 0, 'msg' => '请上传图片']);
				}
			} else {
				return redirect('video/add', ['code' => 0, 'msg' => '上传失败' . $_var_7->getError()]);
			}
		} else {
			return redirect('video/add', ['code' => 0, 'msg' => '图片未上传']);
		}
	}
	public function edit()
	{
		$_var_13 = request()->file('img');
		if ($_var_13) {
			$_var_14 = $_var_13->move(ROOT_PATH . 'public' . DS . 'uploads');
			if ($_var_14) {
				$_var_15 = ['gif', 'jpeg', 'png', 'bmp', 'jpg'];
				$_var_16 = $_var_14->getExtension();
				$_var_17 = '/public/uploads/' . $_var_14->getSaveName();
				if (in_array($_var_16, $_var_15)) {
					$_var_18['img'] = str_replace('\\', '/', str_replace('\\\\', '/', $_var_17));
				} else {
					unlink($_var_17);
					return redirect('video/add', ['code' => 0, 'msg' => '请上传图片']);
				}
			} else {
				return redirect('video/add', ['code' => 0, 'msg' => '上传失败' . $_var_13->getError()]);
			}
		}
		$_var_18['title'] = input('title');
		$_var_18['url'] = input('url');
		$_var_18['content'] = input('content');
		$_var_18['type'] = input('type');
		$_var_18['region'] = input('region');
		if (db('video')->where('id', input('id'))->update($_var_18) !== false) {
			return redirect('video/index', ['code' => 1, 'msg' => '添加成功']);
		} else {
			unlink($_var_17);
			return redirect('video/add', ['code' => 0, 'msg' => '添加失败']);
		}
	}
}