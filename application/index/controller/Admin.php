<?php

//decode by http://ikmovie.xyz/
namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use app\index\controller\SuncommonRyan;
class Admin extends SuncommonRyan
{
	public function _initialize()
	{
		$_var_0 = session('user');
		if (session('power') != 0) {
			$this->redirect('login/login/index');
		}
		if (!$_var_0) {
			$this->redirect('login/login/index');
		}
	}
	public function index()
	{
		$_var_1 = session('code', '');
		$_var_2 = 'power = 0';
		$_var_3 = db('user')->where($_var_2)->order('id desc')->paginate(10);
		return view('index', ['list' => $_var_3, 'code' => $_var_1]);
	}
	public function add()
	{
		if (request()->isPost()) {
			$_var_4 = input();
			$_var_5['username'] = $_var_4['name'];
			$_var_5['password'] = md5(sha1($_var_4['password']));
			$_var_5['power'] = '0';
			$_var_5['status'] = '1';
			$_var_5['parentid'] = '0';
			$_var_5['ctime'] = time();
			$_var_5['logintime'] = '0';
			$_var_5['lasttime'] = '0';
			$_var_5['money'] = '0.00';
			$_var_6 = db('user')->where('username', $_var_4['name'])->count();
			if ($_var_6 > 0) {
				Session::flash('code', 'err1');
				$this->redirect('admin/add');
			}
			if (db('user')->insert($_var_5)) {
				Session::flash('code', '1');
				$this->redirect('admin/index');
			} else {
				Session::flash('code', 'err2');
				$this->redirect('admin/add');
			}
		} else {
			$_var_7 = session('user');
			$_var_8 = input('msg', '0');
			return view('add', ['code' => $_var_7, 'msg' => $_var_8]);
		}
	}
	public function update()
	{
		if (request()->isPost()) {
			$_var_9 = input();
			$_var_10 = input('page', '');
			$_var_11['username'] = $_var_9['name'];
			if ($_var_9['password']) {
				$_var_11['password'] = md5(sha1($_var_9['password']));
				$_var_12 = db('user')->where('id', session('user'))->value('password');
				if ($_var_12 != md5(sha1(input('password')))) {
					db('pass_log')->insert(['ip' => getIP(), 'ctime' => time(), 'uid' => input('id'), 'aid' => session('user'), 'old_pass' => $_var_12, 'pass' => md5(sha1(input('password'))), 'web' => 0]);
				}
			}
			$_var_11['ctime'] = time();
			$_var_13 = db('user')->where('username="' . $_var_9['name'] . '" and id!=' . $_var_9['id'])->count();
			if ($_var_13 > 0) {
				Session::flash('code', 'err1');
				echo '<script>window.location=\'/index/admin/index/id/' . $_var_9['id'] . '?page=' . $_var_10 . '\'</script>';
			}
			if (db('user')->where('id', $_var_9['id'])->update($_var_11)) {
				echo '<script>window.location=\'/index/admin/index?page=' . $_var_10 . '\'</script>';
			} else {
				$this->redirect('admin/update', ['id' => $_var_9['id']]);
			}
		} else {
			$_var_14 = session('code');
			$_var_15 = input('msg', '0');
			$_var_9 = db('user')->where('id', input('id'))->find();
			return view('update', ['page' => input('page', '0'), 'data' => $_var_9, 'code' => $_var_14, 'msg' => $_var_15]);
		}
	}
	public function delete()
	{
		$_var_16 = input('id');
		if ($_var_16 == 1) {
			return view('error');
		} else {
			$_var_17 = implode(',', array_filter(explode(',', $_var_16)));
			if (db('user')->where('id in (' . $_var_17 . ')')->delete()) {
				return json(['code' => '1']);
			} else {
				return json(['code' => '0']);
			}
		}
	}
}