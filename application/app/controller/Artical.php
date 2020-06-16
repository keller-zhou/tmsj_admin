<?php

//decode by http://ik2021.com/
namespace app\app\controller;

error_reporting(E_ALL ^ E_NOTICE);
use app\XDeode;
use think\Controller;
class Artical extends Controller
{
	public function index()
	{
		$_var_0 = input('id');
		if ($_var_0) {
			$_var_1 = db('artical')->where('id', $_var_0)->find();
			$_var_2 = db('advert')->where('id', 21)->value('content');
			if (empty($_var_2)) {
				$_var_3 = '完美网服';
			} else {
				$_var_3 = $_var_2;
			}
			if ($_var_1) {
				return view('index', ['content' => $_var_1['content'], 'title' => $_var_1['title'], 'picture' => $_var_1['picture'], 'app_name' => $_var_3, 'time' => $_var_1['time']]);
			} else {
				echo '本文已删除';
			}
		} else {
			echo '暂无内容';
		}
	}
	public function getArtList()
	{
		$_var_4 = input();
		$_var_5 = $_var_4['key'];
		if ($_var_5 == 'ikmovie.xyz') {
			$_var_6 = db('artical')->field('picture,title,id,eject,content,type,url,time')->order('id', 'desc')->select();
			$_var_7['articallist'] = $_var_6;
			$_var_8 = db('artical')->field('id')->count();
			if ($_var_8) {
				return json(['code' => 1, 'msg' => $_var_7]);
			} else {
				return json(['code' => 0, 'mag' => '暂无文章']);
			}
		} else {
			return json(['code' => '0', 'msg' => '安全码错误']);
		}
	}
	public function getArtListTitle()
	{
		$_var_9 = input();
		$_var_10 = $_var_9['key'];
		if ($_var_10 == 'ikmovie.xyz') {
			$_var_11 = db('artical')->field('id,time,title')->order('id', 'desc')->select();
			$_var_12['getArtListTitle'] = $_var_11;
			$_var_13 = db('artical')->field('id')->count();
			if ($_var_13) {
				return json(['code' => 1, 'msg' => $_var_12]);
			} else {
				return json(['code' => 0, 'mag' => '暂无文章']);
			}
		} else {
			return json(['code' => '0', 'msg' => '安全码错误']);
		}
	}
	public function getArtIsurl()
	{
		$_var_14 = input();
		$_var_15['id'] = $_var_14['id'];
		$_var_16 = $_var_14['key'];
		if ($_var_16 == 'ikmovie.xyz') {
			$_var_17 = db('artical')->where($_var_15)->find();
			$_var_18['url'] = $_var_17['url'];
			return json(['code' => '1', 'msg' => $_var_18]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误']);
		}
	}
}