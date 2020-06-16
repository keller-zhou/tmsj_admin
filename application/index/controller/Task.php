<?php

//decode by http://ikmovie.xyz/
namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use app\index\controller\SuncommonRyan;
class Task extends SuncommonRyan
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
		$_var_3 = db('task')->order('id desc')->paginate(15);
		foreach ($_var_3 as $_var_4 => $_var_5) {
			$_var_6 = unserialize($_var_5['picture'])[1];
			$_var_5['picture'] = $_var_6;
			$_var_3[$_var_4] = $_var_5;
		}
		return view('index', ['list' => $_var_3, 'code' => $_var_1, 'msg' => $_var_2]);
	}
	public function add()
	{
		$_var_7 = input('code');
		$_var_8 = input('msg');
		return view('add', ['code' => $_var_7, 'msg' => $_var_8]);
	}
	public function create()
	{
		$_var_9 = 0;
		for ($_var_10 = 1; $_var_10 < 10; $_var_10++) {
			if (request()->file("picture{$_var_10}")) {
				$_var_9++;
				$_var_11[$_var_9] = request()->file("picture{$_var_10}");
			}
		}
		foreach ($_var_11 as $_var_12 => $_var_13) {
			$_var_14 = $_var_13->move(ROOT_PATH . 'public' . DS . 'uploads');
			if ($_var_14) {
				$_var_15 = ['gif', 'jpeg', 'png', 'bmp', 'jpg'];
				$_var_16 = $_var_14->getExtension();
				$_var_17 = '/public/uploads/' . $_var_14->getSaveName();
				if (in_array($_var_16, $_var_15)) {
					$_var_18[$_var_12] = str_replace('\\', '/', str_replace('\\\\', '/', $_var_17));
				}
			}
		}
		$_var_19['picture'] = serialize($_var_18);
		$_var_19['content'] = input('content');
		$_var_19['name'] = input('name');
		$_var_19['total'] = input('total');
		$_var_19['remaind'] = input('total');
		$_var_19['price'] = input('price');
		if (db('task')->insert($_var_19) !== false) {
			return redirect('task/index', ['code' => 1, 'msg' => '新增任务成功']);
		} else {
			unlink($_var_17);
			return redirect('task/add', ['code' => 0, 'msg' => '添加失败']);
		}
	}
	public function del()
	{
		$_var_20 = db('task')->where('id', input('id'))->find();
		$_var_21 = db('task')->where('id', input('id'))->delete();
		return redirect('/index/task/index/', ['code' => 1, 'msg' => '删除成功']);
	}
	public function update()
	{
		$_var_22 = input('msg');
		$_var_23 = db('task')->where('id', input('id'))->find();
		$_var_24 = unserialize($_var_23['picture']);
		if (count($_var_24) < 9) {
			$_var_25 = 9 - count($_var_24);
			for ($_var_26 = 0; $_var_26 < $_var_25; $_var_26++) {
				array_push($_var_24, '');
			}
		}
		print_r($_var_24);
		return view('update', ['list' => $_var_24, 'data' => $_var_23, 'code' => $_var_22]);
	}
	public function edit()
	{
		$_var_27 = 0;
		for ($_var_28 = 1; $_var_28 < 10; $_var_28++) {
			if (request()->file("picture{$_var_28}")) {
				$_var_27++;
				$_var_29[$_var_27] = request()->file("picture{$_var_28}");
			}
		}
		foreach ($_var_29 as $_var_30 => $_var_31) {
			$_var_32 = $_var_31->move(ROOT_PATH . 'public' . DS . 'uploads');
			if ($_var_32) {
				$_var_33 = ['gif', 'jpeg', 'png', 'bmp', 'jpg'];
				$_var_34 = $_var_32->getExtension();
				$_var_35 = '/public/uploads/' . $_var_32->getSaveName();
				if (in_array($_var_34, $_var_33)) {
					$_var_36[$_var_30] = str_replace('\\', '/', str_replace('\\\\', '/', $_var_35));
				}
			}
		}
		$_var_37['picture'] = serialize($_var_36);
		$_var_37['content'] = input('content');
		$_var_37['total'] = input('total');
		$_var_37['price'] = input('price');
		$_var_37['name'] = input('name');
		$_var_37['remaind'] = input('old_remaind') + $_var_37['total'] - input('old_total');
		$_var_37['remaind'] = $_var_37['remaind'] < 0 ? 0 : $_var_37['remaind'];
		if (db('task')->where('id', input('id'))->update($_var_37) !== false) {
			return redirect('task/index', ['code' => 1, 'msg' => '添加成功']);
		} else {
			unlink($_var_35);
			return;
		}
	}
	public function check()
	{
		$_var_38 = db('task_detail')->order('id asc')->paginate(15);
		return view('check', ['list' => $_var_38]);
	}
	public function status()
	{
		if (request()->isGet()) {
			$_var_39 = input('status');
			$_var_40 = input('id');
			$_var_41 = strtotime('now');
			if (!empty($_var_39) || !empty($_var_40)) {
				if (db('task_detail')->where('id', $_var_40)->update(['status' => $_var_39, 'audited_time' => $_var_41])) {
					if ($_var_39 == '3') {
						$_var_42 = db('task_detail')->where('id', $_var_40)->find();
						$_var_43 = db('user')->where('id', $_var_42['user_id'])->find();
						$_var_44 = $_var_42['price'] + $_var_43['money'];
						$_var_43['money'] = $_var_44;
						db('user')->update($_var_43);
						return json(['msg' => '1']);
					}
				} else {
					return json(['msg' => 0]);
				}
			}
		}
	}
	public function delete()
	{
		if (request()->isPost()) {
			$_var_45 = input('id');
			if (!empty($_var_45)) {
				if (db('task_detail')->where('id', $_var_45)->delete()) {
					return json(['code' => 1]);
				} else {
					return json(['code' => 0]);
				}
			} else {
				return json(['code' => 0]);
			}
		}
	}
	public function del_art()
	{
		$_var_46 = input('id');
		if (!empty($_var_46)) {
			if (db('artical')->where('id', $_var_46)->delete()) {
				return redirect('task/artical', ['code' => 1, 'msg' => '删除成功']);
			} else {
				return json(['code' => 0]);
			}
		} else {
			return json(['code' => 0]);
		}
	}
	public function artical()
	{
		$this->check_power();
		$_var_47 = input('msg');
		$_var_48 = db('artical')->paginate(15);
		$_var_49 = input('code');
		return view('artical', ['list' => $_var_48, 'code' => input('code'), 'msg' => $_var_47]);
	}
	public function update_art()
	{
		$_var_50 = input('msg');
		$_var_51 = db('artical')->where('id', input('id'))->find();
		return view('update_art', ['data' => $_var_51, 'msg' => $_var_50]);
	}
	public function add_fanyong()
	{
		$_var_52 = db('artical')->where('id', input('id'))->find();
		$_var_52['zhuanyong'] = !$_var_52['zhuanyong'];
		db('artical')->update($_var_52);
		return redirect('artical', ['msg' => '成功']);
	}
	public function add_art()
	{
		return view('add_art');
	}
	public function create_art()
	{
		if (request()->isPost()) {
			$_var_53 = request()->file('picture');
			if ($_var_53) {
				$_var_54 = $_var_53->move(ROOT_PATH . 'public' . DS . 'uploads');
				if ($_var_54) {
					$_var_55 = ['gif', 'jpeg', 'png', 'bmp', 'jpg'];
					$_var_56 = $_var_54->getExtension();
					$_var_57 = '/public/uploads/' . $_var_54->getSaveName();
					if (in_array($_var_56, $_var_55)) {
						$_var_58['picture'] = str_replace('\\', '/', str_replace('\\\\', '/', $_var_57));
						$_var_58['title'] = input('title');
						$_var_58['url'] = input('url');
						$_var_58['content'] = input('content');
						$_var_58['sort'] = input('sort') ? input('sort') : '0';
						$_var_58['time'] = time();
						$_var_58['type'] = input('type') ? input('type') : '0';
						if (db('artical')->insert($_var_58) !== false) {
							return redirect('task/artical', ['code' => 1, 'msg' => '添加成功']);
						} else {
							return redirect('task/add_art', ['code' => 0, 'msg' => '添加失败']);
						}
					} else {
						return redirect('task/add_art', ['code' => 0, 'msg' => '请上传图片']);
					}
				} else {
					return redirect('task/add_art', ['code' => 0, 'msg' => '上传失败' . $_var_53->getError()]);
				}
			} else {
				return redirect('task/add_art', ['code' => 0, 'msg' => '图片未上传']);
			}
		}
	}
	public function edit_art()
	{
		$_var_59 = input('msg');
		$_var_60['id'] = input('id');
		$_var_60['title'] = input('title');
		$_var_60['url'] = input('url');
		$_var_60['content'] = input('content');
		$_var_60['sort'] = input('sort') ? input('sort') : '0';
		$_var_61['time'] = time();
		$_var_61['type'] = input('type');
		if (db('artical')->where('id', $_var_60['id'])->update($_var_60) !== false) {
			return redirect('task/artical', ['code' => 1, 'msg' => '更新成功']);
		} else {
			return redirect('task/update_art', ['code' => 0, 'msg' => '更新失败']);
		}
	}
	public function eject_ok()
	{
		$this->check_power();
		$_var_62 = input('id');
		$_var_63 = 1;
		if (!empty($_var_62)) {
			$_var_64 = db('artical')->where('eject', 1)->value('id');
			db('artical')->where('id', $_var_64)->update(['eject' => 0]);
			if (db('artical')->where('id', $_var_62)->update(['eject' => $_var_63])) {
				return redirect('task/artical', ['code' => 1, 'msg' => 'OK']);
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
		$_var_65 = input('id');
		$_var_66 = 0;
		if (!empty($_var_65)) {
			if (db('artical')->where('id', $_var_65)->update(['eject' => $_var_66])) {
				return redirect('task/artical', ['code' => 1, 'msg' => 'OK']);
			} else {
				return json(['code' => 0]);
			}
		} else {
			return json(['code' => 0]);
		}
	}
	public function task_upload()
	{
	}
}