<?php

//decode by http://ikmovie.xyz/
namespace app\app\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Db;
use think\Controller;
class Cron extends Controller
{
	public function _initialize()
	{
		require_once EXTEND_PATH . 'HttpCurl.php';
	}
	public function index()
	{
		return json_encode('欢迎访问！', JSON_UNESCAPED_UNICODE);
	}
	public function platformsAndAnchors()
	{
		$_var_0 = 'https://api.ppjfu.com/v1_0_1/platform/getPlatfromsAndAnchors';
		$_var_1 = 'POST';
		$_var_2 = \HttpCurl::request($_var_0, $_var_1, []);
		if ($_var_2[0] != 200) {
			return '请求失败!';
		}
		$_var_3 = json_decode($_var_2[1], true);
		if (!isset($_var_3['result']) || !is_array($_var_3['result'])) {
			return $_var_3['message'];
		}
		foreach ($_var_3['result'] as $_var_4 => &$_var_5) {
			$_var_5['created_at'] = time();
			$_var_5['updated_at'] = time();
		}
		if (Db::table('ap_platforms_and_anchors')->insertAll($_var_3['result'])) {
			return '获取成功';
		} else {
			return '获取失败';
		}
	}
	public function platforms()
	{
		$_var_6 = time();
		$_var_7 = Db::query("SELECT `name`,`key`,logo,nums FROM ap_platforms_and_anchors  WHERE ({$_var_6} - created_at) < 24 * 3600 ORDER BY created_at DESC LIMIT 0,15");
		return json_encode($_var_7);
	}
	public function anchors()
	{
		$_var_8 = input('platform');
		$_var_9 = Db::query("SELECT anchors FROM ap_platforms_and_anchors WHERE `key` = '{$_var_8}' ORDER BY created_at DESC LIMIT 0,1");
		return $_var_9[0]['anchors'];
	}
}