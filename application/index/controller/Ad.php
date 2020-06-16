<?php

//decode by http://ikmovie.xyz/
namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use app\index\controller\SuncommonRyan;
class Ad extends SuncommonRyan
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
		$_var_3 = input('id');
		$_var_4 = session('user');
		if ($_var_3) {
			$_var_5 = db('banner')->where(['cid' => $_var_3, 'user_id' => $_var_4])->order('sort asc')->paginate(10);
		} else {
			$_var_5 = db('banner')->where('user_id', $_var_4)->order('sort asc')->paginate(10);
		}
		$_var_6 = db('category')->order('id asc')->paginate(12);
		return view('index', ['msg' => $_var_2, 'list' => $_var_5, 'category' => $_var_6, 'code' => $_var_1]);
	}
	public function add()
	{
		$_var_7 = input('msg');
		$_var_8 = input('cid');
		$_var_9 = input('name');
		$_var_10 = input('sort');
		$_var_11 = session('user');
		$_var_12 = db('category')->order('id asc')->paginate(88);
		if (session('power') == 1) {
			$_var_13['1'] = $_var_12['0'];
			$_var_13['8'] = $_var_12['7'];
			$_var_13['5'] = $_var_12['5'];
			$_var_13['7'] = $_var_12['6'];
		} else {
			if (session('power') == 0) {
				$_var_13 = $_var_12;
			}
		}
		return view('add', ['code' => $_var_7, 'cid' => $_var_8, 'user_id' => $_var_11, 'name' => $_var_9, 'category' => $_var_13, 'sort' => $_var_10]);
	}
	public function update()
	{
		$_var_14 = input('msg');
		$_var_15 = db('banner')->where('id', input('id'))->find();
		$_var_16 = input('cid');
		$_var_17 = input('name');
		$_var_18 = input('sort');
		$_var_19 = db('category')->order('id asc')->paginate(12);
		return view('update', ['data' => $_var_15, 'code' => $_var_14, 'cid' => $_var_16, 'name' => $_var_17, 'c' => $_var_15['cid'], 'category' => $_var_19, 'sort' => $_var_18]);
	}
	public function del()
	{
		$_var_20 = db('banner')->where('id', input('id'))->find();
		$_var_21 = db('banner')->where('id', input('id'))->delete();
		return redirect('/index/banner/index/id/' . $_var_20['cid'], ['code' => 1, 'msg' => '删除成功']);
	}
	public function create()
	{
		$_var_22 = request()->file('picurl');
		if ($_var_22) {
			$_var_23 = $_var_22->move(ROOT_PATH . 'public' . DS . 'uploads');
			if ($_var_23) {
				$_var_24 = ['gif', 'jpeg', 'png', 'bmp', 'jpg'];
				$_var_25 = $_var_23->getExtension();
				$_var_26 = '/public/uploads/' . $_var_23->getSaveName();
				if (in_array($_var_25, $_var_24)) {
					$_var_27['picurl'] = str_replace('\\', '/', str_replace('\\\\', '/', $_var_26));
					$_var_27['user_id'] = input('user_id');
					$_var_27['content'] = input('content');
					$_var_27['linkurl'] = input('linkurl');
					$_var_27['cid'] = input('cid');
					$_var_27['name'] = input('name');
					$_var_27['sort'] = input('sort');
					if (db('banner')->insert($_var_27) !== false) {
						return redirect('banner/index', ['id' => $_var_27['cid']]);
					} else {
						unlink($_var_26);
						return redirect('banner/add', ['code' => 0, 'msg' => '添加失败']);
					}
				} else {
					unlink($_var_26);
					return redirect('banner/add', ['code' => 0, 'msg' => '请上传图片']);
				}
			} else {
				return redirect('banner/add', ['code' => 0, 'msg' => '上传失败' . $_var_22->getError()]);
			}
		} else {
			return redirect('banner/add', ['code' => 0, 'msg' => '图片未上传']);
		}
	}
	public function edit()
	{
		$_var_28 = request()->file('picurl');
		if ($_var_28) {
			$_var_29 = $_var_28->move(ROOT_PATH . 'public' . DS . 'uploads');
			if ($_var_29) {
				$_var_30 = ['gif', 'jpeg', 'png', 'bmp', 'jpg'];
				$_var_31 = $_var_29->getExtension();
				$_var_32 = '/public/uploads/' . $_var_29->getSaveName();
				if (in_array($_var_31, $_var_30)) {
					$_var_33['picurl'] = str_replace('\\', '/', str_replace('\\\\', '/', $_var_32));
				} else {
					unlink($_var_32);
					return redirect('banner/add', ['code' => 0, 'msg' => '请上传图片']);
				}
			} else {
				return redirect('banner/add', ['code' => 0, 'msg' => '上传失败' . $_var_28->getError()]);
			}
		}
		$_var_33['content'] = input('content');
		$_var_33['linkurl'] = input('linkurl');
		$_var_33['cid'] = input('cid');
		$_var_33['name'] = input('name');
		$_var_33['sort'] = input('sort');
		if (db('banner')->where('id', input('id'))->update($_var_33) !== false) {
			return redirect('banner/index', ['code' => 1, 'msg' => '添加成功']);
		} else {
			unlink($_var_32);
			return;
		}
	}
}