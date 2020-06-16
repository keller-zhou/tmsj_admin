<?php

//decode by http://ikmovie.xyz/
namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use app\index\controller\SuncommonRyan;
class Dao extends SuncommonRyan
{
	public function copy()
	{
		$_var_0 = input('content');
		return view('copy');
	}
	public function txt()
	{
		$_var_1 = db('advert')->where('id', 21)->value('content');
		$_var_2 = input('content');
		Header('Content-type:   application/octet-stream ');
		Header('Accept-Ranges:   bytes ');
		header("Content-Disposition:   attachment;   filename={$_var_1}-" . date('Y-m-d H:i:s') . '.txt ');
		header('Expires:   0 ');
		header('Cache-Control:   must-revalidate,   post-check=0,   pre-check=0 ');
		header('Pragma:   public ');
		echo str_replace('<br><hr>', '
', $_var_2);
	}
	public function excel()
	{
		$_var_3 = db('advert')->where('id', 21)->value('content');
		$_var_4 = input('content');
		header('Content-Type: application/vnd.ms-excel; name=\'excel\'');
		header('Content-type: application/octet-stream');
		header("Content-Disposition: attachment; filename={$_var_3}-" . date('Y-m-d H:i:s') . '.xls');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: no-cache');
		header('Expires: 0');
		echo str_replace('<br><hr>', '
', $_var_4);
	}
	public function cexcel()
	{
		$_var_5 = db('advert')->where('id', 21)->value('content');
		if (session('power') == '0') {
			$_var_6['y'] = '0';
		} else {
			$_var_6['uid'] = session('user');
			$_var_6['y'] = '0';
		}
		if (input('user')) {
			$_var_7 = input('user');
			$_var_6['dianka'] = ['like', "%{$_var_7}%"];
		}
		if (input('start') && input('end')) {
			$_var_6['ctime'] = ['between', strtotime(input('start') . ' 00:00:00') . ',' . strtotime(input('end') . ' 00:00:00')];
		} else {
			if (input('start')) {
				$_var_6['ctime'] = ['>', strtotime(input('start') . ' 00:00:00')];
			}
			if (input('end')) {
				$_var_6['ctime'] = ['<', strtotime(input('end') . ' 00:00:00')];
			}
		}
		if (input('day')) {
			$_var_6['name'] = input('day');
		}
		header('Pragma: public');
		header('Expires: 0');
		header('Cache-Control:must-revalidate, post-check=0, pre-check=0');
		header('Content-Type:application/force-download');
		header('Content-Type:application/vnd.ms-execl');
		header('Content-Type:application/octet-stream');
		header('Content-Type:application/download');
		header("Content-Disposition: attachment; filename={$_var_5}-" . date('Y-m-d H:i:s') . '.xls');
		header('Content-Transfer-Encoding:binary');
		$_var_8 = db('dianka')->where($_var_6)->select();
		echo '<table>';
		foreach ($_var_8 as $_var_9) {
			echo '<tr>';
			echo '<td>';
			echo $_var_9['dianka'];
			echo '</td>';
			echo '<td>';
			echo $_var_9['name'];
			echo '</td>';
			echo '<td>';
			echo "{$_var_5}";
			echo '</td>';
			echo '</tr>';
		}
		echo '</table>';
	}
	public function ctxt()
	{
		$_var_10 = db('advert')->where('id', 21)->value('content');
		if (session('power') == '0') {
			$_var_11['y'] = '0';
		} else {
			$_var_11['uid'] = session('user');
			$_var_11['y'] = '0';
		}
		if (input('user')) {
			$_var_12 = input('user');
			$_var_11['dianka'] = ['like', "%{$_var_12}%"];
		}
		if (input('start') && input('end')) {
			$_var_11['ctime'] = ['between', strtotime(input('start') . ' 00:00:00') . ',' . strtotime(input('end') . ' 00:00:00')];
		} else {
			if (input('start')) {
				$_var_11['ctime'] = ['>', strtotime(input('start') . ' 00:00:00')];
			}
			if (input('end')) {
				$_var_11['ctime'] = ['<', strtotime(input('end') . ' 00:00:00')];
			}
		}
		if (input('day')) {
			$_var_11['name'] = input('day');
		}
		Header('Content-type:   application/octet-stream ');
		Header('Accept-Ranges:   bytes ');
		header("Content-Disposition:   attachment;   filename={$_var_10}-" . date('Y-m-d H:i:s') . '.txt ');
		header('Expires:   0 ');
		header('Cache-Control:   must-revalidate,   post-check=0,   pre-check=0 ');
		header('Pragma:   public ');
		$_var_13 = db('dianka')->where($_var_11)->select();
		foreach ($_var_13 as $_var_14) {
			echo $_var_14['name'];
			echo '----';
			echo $_var_14['dianka'];
			echo '----';
			echo $_var_10;
			echo '
';
		}
	}
}