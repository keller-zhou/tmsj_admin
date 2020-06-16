<?php

//decode by http://ikmovie.xyz/
namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use app\index\controller\SuncommonRyan;
class Notice extends SuncommonRyan
{
	public function _initialize()
	{
		$_var_0 = session('user');
		if (session('power') != 0) {
			if (!$_var_0) {
				$this->redirect('login/login/ikmovie');
			}
			header('content-type:text/html;charset=utf-8');
			echo '非法操作';
			exit;
		}
	}
	public function del_notice()
	{
		$_var_1 = input('id');
		if (!empty($_var_1)) {
			if (db('artical')->where('id', $_var_1)->delete()) {
				return redirect('notice/index', ['code' => 1, 'msg' => '删除成功']);
			} else {
				return json(['code' => 0]);
			}
		} else {
			return json(['code' => 0]);
		}
	}
	public function index()
	{
		$_var_2 = input('msg');
		$_var_3 = db('artical')->paginate(15);
		$_var_4 = input('code');
		return view('index', ['list' => $_var_3, 'code' => input('code'), 'msg' => $_var_2]);
	}
	public function update_notice()
	{
		$_var_5 = input('msg');
		$_var_6 = db('artical')->where('id', input('id'))->find();
		return view('update_notice', ['data' => $_var_6, 'msg' => $_var_5]);
	}
	public function add_notice()
	{
		return view('add_notice');
	}
	public function create_art()
	{
		if (request()->isPost()) {
			$_var_7 = request()->file('picture');
			if ($_var_7) {
				$_var_8 = $_var_7->move(ROOT_PATH . 'public' . DS . 'uploads');
				if ($_var_8) {
					$_var_9 = ['gif', 'jpeg', 'png', 'bmp', 'jpg'];
					$_var_10 = $_var_8->getExtension();
					$_var_11 = '/public/uploads/' . $_var_8->getSaveName();
					if (in_array($_var_10, $_var_9)) {
						$_var_12['picture'] = str_replace('\\', '/', str_replace('\\\\', '/', $_var_11));
						$_var_12['title'] = input('title');
						$_var_12['url'] = input('url');
						$_var_12['content'] = input('content');
						$_var_12['sort'] = input('sort') ? input('sort') : '0';
						$_var_12['time'] = time();
						$_var_12['type'] = input('type');
						if (db('artical')->insert($_var_12) !== false) {
							return redirect('notice/index', ['code' => 1, 'msg' => '添加成功']);
						} else {
							return redirect('notice/add_notice', ['code' => 0, 'msg' => '添加失败']);
						}
					} else {
						return redirect('notice/add_notice', ['code' => 0, 'msg' => '请上传图片']);
					}
				} else {
					return redirect('notice/add_notice', ['code' => 0, 'msg' => '上传失败' . $_var_7->getError()]);
				}
			} else {
				return redirect('notice/add_notice', ['code' => 0, 'msg' => '图片未上传']);
			}
		}
	}
	public function edit_art()
	{
		$_var_13 = input('msg');
		if (request()->isPost()) {
			$_var_14 = request()->file('picture');
			if ($_var_14) {
				$_var_15 = $_var_14->move(ROOT_PATH . 'public' . DS . 'uploads');
				if ($_var_15) {
					$_var_16 = ['gif', 'jpeg', 'png', 'bmp', 'jpg'];
					$_var_17 = $_var_15->getExtension();
					$_var_18 = '/public/uploads/' . $_var_15->getSaveName();
					if (in_array($_var_17, $_var_16)) {
						$_var_19['id'] = input('id');
						$_var_19['picture'] = str_replace('\\', '/', str_replace('\\\\', '/', $_var_18));
						$_var_19['title'] = input('title');
						$_var_19['url'] = input('url');
						$_var_19['content'] = input('content');
						$_var_19['sort'] = input('sort') ? input('sort') : '0';
						$_var_20['time'] = time();
						$_var_20['type'] = input('type');
						if (db('artical')->where('id', $_var_19['id'])->update($_var_19) !== false) {
							return redirect('notice/index', ['code' => 1, 'msg' => '更新成功']);
						} else {
							return redirect('notice/update_notice', ['code' => 0, 'msg' => '更新失败']);
						}
					} else {
						return redirect('notice/update_notice', ['code' => 0, 'msg' => '请上传图片']);
					}
				} else {
					return redirect('notice/update_notice', ['code' => 0, 'msg' => '上传失败' . $_var_14->getError()]);
				}
			} else {
				return redirect('notice/update_notice', ['code' => 0, 'msg' => '图片未上传']);
			}
		}
	}
}