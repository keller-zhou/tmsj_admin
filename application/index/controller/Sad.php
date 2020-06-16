<?php

//decode by http://ikmovie.xyz/
namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use app\index\controller\SuncommonRyan;
class Sad extends SuncommonRyan
{
	public function _initialize()
	{
		$_var_0 = session('user');
		if (session('power') != 0) {
			if (!$_var_0) {
				$this->redirect('login/login/ikmovie');
			}
			echo '非法操作';
			exit;
		}
	}
	public function index()
	{
		$_var_1 = input('code');
		$_var_2 = input('msg');
		$_var_3 = db('sad')->order('id desc')->paginate(10);
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
		$_var_6 = db('sad')->where('id', input('id'))->find();
		return view('update', ['data' => $_var_6, 'code' => $_var_5]);
	}
	public function del()
	{
		$_var_7 = db('sad')->where('id', input('id'))->delete();
		return redirect('sad/index', ['code' => 1, 'msg' => '删除成功']);
	}
	public function create()
	{
		$_var_8 = request()->file('picurl');
		if ($_var_8) {
			$_var_9 = $_var_8->move(ROOT_PATH . 'public' . DS . 'uploads');
			if ($_var_9) {
				$_var_10 = ['gif', 'jpeg', 'png', 'bmp', 'jpg'];
				$_var_11 = $_var_9->getExtension();
				$_var_12 = '/public/uploads/' . $_var_9->getSaveName();
				if (in_array($_var_11, $_var_10)) {
					$_var_13['picurl'] = str_replace('\\', '/', str_replace('\\\\', '/', $_var_12));
					$_var_13['content'] = input('content');
					$_var_13['title'] = input('title');
					$_var_13['linkurl'] = input('linkurl');
					if (db('sad')->insert($_var_13) !== false) {
						return redirect('sad/index', ['code' => 1, 'msg' => '添加成功']);
					} else {
						unlink($_var_12);
						return redirect('sad/add', ['code' => 0, 'msg' => '添加失败']);
					}
				} else {
					unlink($_var_12);
					return redirect('sad/add', ['code' => 0, 'msg' => '请上传图片']);
				}
			} else {
				return redirect('sad/add', ['code' => 0, 'msg' => '上传失败' . $_var_8->getError()]);
			}
		} else {
			return redirect('sad/add', ['code' => 0, 'msg' => '图片未上传']);
		}
	}
	public function edit()
	{
		$_var_14 = request()->file('picurl');
		if ($_var_14) {
			$_var_15 = $_var_14->move(ROOT_PATH . 'public' . DS . 'uploads');
			if ($_var_15) {
				$_var_16 = ['gif', 'jpeg', 'png', 'bmp', 'jpg'];
				$_var_17 = $_var_15->getExtension();
				$_var_18 = '/public/uploads/' . $_var_15->getSaveName();
				if (in_array($_var_17, $_var_16)) {
					$_var_19['picurl'] = str_replace('\\', '/', str_replace('\\\\', '/', $_var_18));
				} else {
					unlink($_var_18);
					return redirect('sad/add', ['code' => 0, 'msg' => '请上传图片']);
				}
			} else {
				return redirect('sad/add', ['code' => 0, 'msg' => '上传失败' . $_var_14->getError()]);
			}
		}
		$_var_19['content'] = input('content');
		$_var_19['title'] = input('title');
		$_var_19['linkurl'] = input('linkurl');
		if (db('sad')->where('id', input('id'))->update($_var_19) !== false) {
			return redirect('sad/index', ['code' => 1, 'msg' => '添加成功']);
		} else {
			unlink($_var_18);
			return redirect('sad/add', ['code' => 0, 'msg' => '添加失败']);
		}
	}
}