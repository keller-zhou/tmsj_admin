<?php

//decode by http://ikmovie.xyz/
namespace app\app\controller;

error_reporting(E_ALL ^ E_NOTICE);
use app\XDeode;
use think\Controller;
class Task extends Controller
{
	public function getTask()
	{
		$_var_0 = input();
		if (request()->isGet()) {
			if ($_var_1['id'] = $_var_0['user_id']) {
				$_var_0 = db('user')->where($_var_1)->find();
				$_var_2 = db('task')->field(['total', 'distribute'], true)->select();
				$_var_3 = db('task_detail')->where('user_id', $_var_1['id'])->select();
				$_var_4 = [];
				foreach ($_var_3 as $_var_5) {
					if (date('d', strtotime('now')) - date('d', $_var_5['start_time']) == 0 && date('m', strtotime('now')) - date('m', $_var_5['start_time']) == 0) {
						array_push($_var_4, $_var_5['task_id']);
					}
				}
				$_var_6 = [];
				foreach ($_var_2 as $_var_7) {
					if (!empty($_var_4)) {
						for ($_var_8 = 0; $_var_8 < count($_var_4, true); $_var_8++) {
							if ($_var_4[$_var_8] == $_var_7['id']) {
								$_var_7['status'] = '已领取';
							} else {
								$_var_7['status'] = '未领取';
							}
						}
					} else {
						$_var_7['status'] = '未领取';
					}
					array_push($_var_6, $_var_7);
				}
				return json(['code' => '1', 'msg' => $_var_6]);
			} else {
				return json(['code' => '0', 'msg' => '此用户不存在']);
			}
		} else {
			echo '无数据';
			exit;
		}
	}
	public function distribute()
	{
		if (request()->isGet()) {
			$_var_9 = input();
			$_var_10 = input('user_id');
			$_var_11 = input('task_id');
			$_var_9['task_name'] = input('task_name');
			$_var_9['ip'] = request()->ip();
			$_var_9['imei'] = input('imei');
			$_var_12 = db('user')->where('id', $_var_10)->find();
			$_var_13 = db('task_detail')->where('user_id', $_var_10)->order('id', 'desc')->find();
			if ($_var_13) {
				if (date('d', strtotime('now')) - date('d', $_var_13['start_time']) != 0 && date('m', strtotime('now')) - date('m', $_var_13['start_time']) != 0) {
					db('user')->where('id', $_var_10)->update(['task_num' => 1]);
				}
			}
			if ($_var_12['task_num'] == 0 && $_var_13) {
				return json(['code' => 0, 'msg' => '一个用户每天只能领取一个！']);
			}
			if (empty($_var_10) || empty($_var_11)) {
				return json(['code' => 0, 'msg' => '用户或任务不存在']);
			}
			if (empty($_var_9['imei'])) {
				return json(['code' => 0, 'msg' => '禁止作弊']);
			}
			$_var_14 = db('task_detail')->where(['task_id' => $_var_9['task_id'], 'user_id' => $_var_10])->find();
			if ($_var_14) {
				if (date('d', strtotime('now')) - date('d', $_var_14['start_time']) == 0 && date('m', strtotime('now')) - date('m', $_var_14['start_time']) == 0) {
					return json(['code' => 0, 'msg' => '您今天已经领过,不能再次领取!']);
				}
			}
			$_var_14 = db('task')->where('id', $_var_11)->find();
			$_var_9['start_time'] = strtotime('now');
			$_var_9['price'] = $_var_14['price'];
			if (db('task_detail')->insert($_var_9)) {
				$_var_14['distribute'] = $_var_14['distribute'] + 1;
				$_var_14['remaind'] = $_var_14['total'] - $_var_14['distribute'];
				db('task')->update($_var_14);
				db('user')->where('id', $_var_10)->update(['task_num' => 0]);
				return json(['code' => 1, 'msg' => '领取成功!']);
			} else {
				return json(['code' => 0, 'msg' => '领取失败!']);
			}
		}
	}
	public function render()
	{
		$_var_15 = input();
		if (request()->isGet()) {
			if ($_var_16['id'] = $_var_15['user_id']) {
				$_var_15 = db('user')->where($_var_16)->find();
				$_var_17 = db('task')->where('id', input('task_id'))->find();
				$_var_18 = unserialize($_var_17['picture']);
				return json(['code' => '1', 'content' => $_var_17['content'], 'picture' => $_var_18]);
			} else {
				return json(['code' => '0', 'msg' => '此用户不存在']);
			}
		} else {
			echo '无数据';
			exit;
		}
	}
	public function pushTask()
	{
		$_var_19['taskId'] = input('taskId');
		$_var_19['user_id'] = input('user_id');
		if (request()->isGet()) {
			if ($_var_20['id'] = $_var_19['user_id']) {
				$_var_21 = db('user')->where($_var_20)->find();
				if ($_var_21['task_statue'] == 0) {
					$_var_22 = db('task')->where('id', $_var_19['task_id'])->find();
					if ($_var_22) {
						if ($_var_22 > 0) {
							db('user')->where('id', $_var_21['id'])->update('task_statue', []);
						}
					}
					return json(['code' => 1, 'msg' => '未领取', 'statue' => 0]);
				} else {
					return json(['code' => 0, 'msg' => '未知状态', 'statue' => 'null']);
				}
			}
		}
	}
	public function getPushTask()
	{
		if (request()->isGet()) {
			$_var_23 = db('task_detail')->where('user_id', input('user_id'))->select();
			$_var_24 = [];
			foreach ($_var_23 as $_var_25) {
				if ($_var_25['status'] == 1) {
					$_var_25['status'] = '待提交';
					array_push($_var_24, $_var_25);
				}
			}
			return json(['code' => 1, 'msg' => $_var_24]);
		}
	}
	public function getLog()
	{
		if (request()->isGet()) {
			$_var_26 = db('task_detail')->where('user_id', input('user_id'))->order('id desc')->select();
			if ($_var_26) {
				$_var_27 = [];
				foreach ($_var_26 as $_var_28) {
					if ($_var_28['status'] == 2) {
						$_var_28['status'] = '待审核';
					} else {
						if ($_var_28['status'] == 3) {
							$_var_28['status'] = '已通过';
						} else {
							if ($_var_28['status'] == 4) {
								$_var_28['status'] = '已驳回';
							} else {
								if ($_var_28['status'] == 1) {
									$_var_28['status'] = '待提交';
								}
							}
						}
					}
					$_var_28['start_time'] = date('Y-m-d H:i:s', $_var_28['start_time']);
					array_push($_var_27, $_var_28);
				}
				return json(['code' => 1, 'msg' => $_var_27]);
			} else {
				return json(['code' => 0, 'msg' => '暂无历史数据']);
			}
		}
	}
	public function images()
	{
		if (request()->isPost()) {
			$_var_29 = request()->file('file');
			if ($_var_29) {
				$_var_30 = $_var_29->move(ROOT_PATH . 'public' . DS . 'uploads');
				if ($_var_30) {
					$_var_31 = ['gif', 'jpeg', 'png', 'bmp', 'jpg'];
					$_var_32 = $_var_30->getExtension();
					$_var_33 = '/public/uploads/' . $_var_30->getSaveName();
					if (in_array($_var_32, $_var_31)) {
						$_var_34['picture'] = str_replace('\\', '/', str_replace('\\\\', '/', $_var_33));
						$_var_35['user_id'] = input('uid');
						$_var_35['task_id'] = input('task_id');
						$_var_36 = db('task_detail')->where($_var_35)->find();
						if ($_var_36) {
							$_var_36['picture'] = $_var_34['picture'];
							$_var_36['push_time'] = strtotime('now');
							$_var_36['status'] = 2;
							db('task_detail')->update($_var_36);
							return json(['code' => 1, 'msg' => '图片上传成功', 'path' => $_var_36['picture']]);
						} else {
							return json(['code' => 0, 'msg' => '图片上传失败，该任务不存在']);
						}
					} else {
						return redirect('task/add_art', ['code' => 0, 'msg' => '请上传图片']);
					}
				} else {
					return redirect('task/add_art', ['code' => 0, 'msg' => '上传失败' . $_var_29->getError()]);
				}
			} else {
				return redirect('task/add_art', ['code' => 0, 'msg' => '图片未上传']);
			}
		}
	}
}