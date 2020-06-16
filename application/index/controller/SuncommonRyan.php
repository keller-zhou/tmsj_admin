<?php

//decode by http://ikmovie.xyz/
namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Session;
class SuncommonRyan extends Controller
{
	public function __construct()
	{
		$_var_0 = session('user');
		if (session('power') > 2) {
			$this->redirect('login/login/ikmovie');
		}
		if (!$_var_0) {
			$this->redirect('login/login/ikmovie');
		}
	}
	public function check_power()
	{
		$_var_1 = session('power');
		if ($_var_1 != 0) {
			$this->redirect('login/login/ryanerror');
			exit;
		}
	}
}