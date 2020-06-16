<?php
namespace app\login\controller;

error_reporting(E_ALL ^ E_NOTICE);
use app\XDeode;
use think\Db;
use think\Controller;
class Login extends Controller
{
	public function ikmovie()
	{
	
		$_var_8 = db('advert')->where('id', 114)->value('content');
		if (empty($_var_8)) {
			$_var_9 = 'data:image/png;base64,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';
		} else {
			$_var_9 = $_var_8;
		}
		$_var_10 = db('advert')->where('id', 115)->value('content');
		if (empty($_var_10)) {
			$_var_11 = 'data:image/png;base64,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';
		} else {
			$_var_11 = $_var_10;
		}
		return view('ikmovie', ['Ryan_logo' => $_var_9, 'Ryan_login_picture' => $_var_11]);
	}
	public function ping()
	{
		$_var_12 = db('ping')->order('orderid asc')->select();
		$_var_13 = new XDeode(10, '6666.6666666');
		$_var_14 = new XDeode(10, '8888.8888888');
		$_var_15 = new XDeode(10, '9999.9999999');
		$_var_16['code'] = 1;
		$_var_16['key'] = $_var_13->encode(time());
		$_var_17 = input('uid');
		if ($_var_17) {
			$_var_18 = db('user')->where('id', $_var_17)->count();
			if ($_var_18 == '0') {
				return json(['code' => 0, 'msg' => '用户不存在']);
			}
			db('user')->where('id', $_var_17)->update(['key' => $_var_16['key']]);
		}
		$_var_16['run'] = $_var_17 ? $_var_15->encode($_var_17) : '';
		foreach ($_var_12 as $_var_19 => $_var_20) {
			unset($_var_21);
			unset($_var_22);
			unset($_var_22);
			$_var_12[$_var_19]['id'] = $_var_14->encode($_var_20['id']);
			$_var_22 = iconv('UTF-8', 'gb2312', ROOT_PATH . 'readtxt/' . $_var_20['name'] . '.txt');
			if (is_file($_var_22)) {
				$_var_23 = file_get_contents($_var_22);
				if ($_var_23) {
					$_var_24 = @mb_convert_encoding($_var_23, 'UTF-8', 'UTF-8,GBK,GB2312,BIG5');
					$_var_25 = explode('
', $_var_24);
					$_var_21 = [];
					for ($_var_26 = 0; $_var_26 < count($_var_25); $_var_26++) {
						$_var_21[] = explode('|', $_var_25[$_var_26]);
					}
					$_var_12[$_var_19]['count'] = count($_var_21) - 1;
				} else {
					$_var_12[$_var_19]['count'] = 0;
				}
				unset($_var_21);
			} else {
				$_var_12[$_var_19]['count'] = 0;
			}
		}
		$_var_16['list'] = $_var_12;
		return json($_var_16);
	}
	public function Hello_app()
	{
		$_var_27 = input('key');
		if ($_var_27 == 'ikmovie.xyz') {
			$_var_28 = db('advert')->where('id', 21)->value('content');
			if (empty($_var_28)) {
				$_var_29 = '淘米视界';
			} else {
				$_var_29 = $_var_28;
			}
			return json(['code' => '1', 'msg' => $_var_29]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 有疑问请联系微信 qq1207629473 ']);
		}
	}
	public function yongjin_frm()
	{
		$_var_30 = input();
		$_var_31 = input('key');
		if ($_var_31 == 'ikmovie.xyz') {
			$_var_32 = advert('1');
			$_var_33['id'] = $_var_30['uid'];
			$_var_34 = db('user')->where($_var_33)->find();
			$_var_35 = db('shezi')->find();
			if (isset($_GET['tx_jine'])) {
				if (empty($_var_34['nick_name'])) {
					return ik2021(json_encode(['code' => 0, 'msg' => '您还没有设置昵称！']));
				} else {
					if (empty($_var_34['zfb'])) {
						return ik2021(json_encode(['code' => 0, 'msg' => '您还没有设置提现账户！']));
					} else {
						$_var_36 = floor(input('tx_jine'));
						if ($_var_36 > 0) {
							if ($_var_36 < $_var_35['jbday']) {
								return ik2021(json_encode(['code' => 555, 'msg' => '最低提现额度' . $_var_35['jbday'] . '元！']));
							}
							if ($_var_36 > $_var_34['money']) {
								return ik2021(json_encode(['code' => 666, 'msg' => '您的余额不足' . $_var_36 . '元！']));
							}
							if ($_var_34['tx'] == 1) {
								return ik2021(json_encode(['code' => 0, 'msg' => '已有提现申请正在审核 请耐心等待！']));
							} else {
								if (advert('1') == 0 && advert('341') == 1) {
									return ik2021(json_encode(['code' => 0, 'msg' => '操作失败,当前余额不可提现！']));
								} else {
									if (advert('1') == 0 && advert('341') == 2) {
										$_var_37['uid'] = $_var_30['uid'];
										$_var_37['status'] = 0;
										$_var_38 = db('txlog')->where($_var_37)->sum('jine');
										$_var_39['get_id'] = $_var_30['uid'];
										$_var_40 = db('rebate')->where($_var_39)->sum('money');
										$_var_41 = $_var_40 - $_var_38;
										if ($_var_36 > $_var_41) {
											return ik2021(json_encode(['code' => 666, 'msg' => '您的余额不足' . $_var_36 . '元！']));
										}
										$_var_42 = $_var_34['money'];
										db('user')->where('id=' . $_var_30['uid'])->update(['tx' => '1']);
										db('user')->where('id=' . $_var_30['uid'])->update(['txje' => $_var_36]);
										db('user')->where('id=' . $_var_30['uid'])->update(['money' => $_var_42 - $_var_36]);
										return ik2021(json_encode(['code' => 1, 'msg' => $_var_36 . '元 提现申请成功 等待审核！', 'time' => db('user')->where('id=' . $_var_30['uid'])->value('lasttime')]));
									} else {
										$_var_42 = $_var_34['money'];
										db('user')->where('id=' . $_var_30['uid'])->update(['tx' => '1']);
										db('user')->where('id=' . $_var_30['uid'])->update(['txje' => $_var_36]);
										db('user')->where('id=' . $_var_30['uid'])->update(['money' => $_var_42 - $_var_36]);
										return ik2021(json_encode(['code' => 1, 'msg' => $_var_36 . '元 提现申请成功 等待审核！', 'time' => db('user')->where('id=' . $_var_30['uid'])->value('lasttime')]));
									}
								}
							}
						} else {
							return ik2021(json_encode(['code' => 888, 'msg' => '参数不正确,不要搞事情！用户id已记录~IP已记录~']));
						}
					}
				}
			} else {
				if ($_var_32 == 0 && advert('341') == 2) {
					$_var_39['get_id'] = $_var_30['uid'];
					$_var_40 = db('rebate')->where($_var_39)->sum('money');
					if ($_var_40 == null) {
						$_var_43['money'] = '0';
					} else {
						$_var_43['money'] = $_var_40;
					}
				} else {
					$_var_43['money'] = $_var_34['money'];
				}
				$_var_43['txje'] = $_var_34['txje'];
				$_var_43['zfb'] = $_var_34['zfb'];
				$_var_43['zfb_name'] = $_var_34['zfb_name'];
				$_var_43['status'] = $_var_34['status'];
				if ($_var_34) {
					return ik2021(json_encode(['code' => '1', 'msg' => $_var_43]));
				} else {
					return ik2021(json_encode(['code' => '0']));
				}
			}
		} else {
			return ik2021(json_encode(['code' => '718', 'msg' => '安全码错误 请联系微信 qq1207629473 ']));
		}
	}
	public function zfbcz_Ryan()
	{
		$_var_44 = input();
		$_var_45 = $_var_44['key'];
		if ($_var_45 == 'ikmovie.xyz') {
			if (empty($_var_44['Alipay'])) {
				return json(['code' => 0, 'msg' => '请填写提现账户！']);
			} else {
				if (empty($_var_44['Alipay_name'])) {
					return json(['code' => 0, 'msg' => '请填写对应支付宝账户实名']);
				} else {
					$_var_46 = db('advert')->where('id = 82')->value('content');
					$_var_47 = db('user')->where('id', $_var_44['id'])->find();
					if ($_var_46 == '') {
					} else {
						if ($_var_47['zfb'] == '') {
							db('user')->where('id', $_var_44['id'])->setInc('sign', $_var_46);
						}
					}
					db('user')->where('id', $_var_44['id'])->update(['zfb' => $_var_44['Alipay']]);
					db('user')->where('id', $_var_44['id'])->update(['zfb_name' => $_var_44['Alipay_name']]);
					if ($_var_44) {
						return json(['code' => '1', 'msg' => '支付宝设置完成 赠送积分' . $_var_46]);
					} else {
						return json(['code' => '0', 'msg' => '修改失败 请稍后再试']);
					}
				}
			}
		} else {
			return json(['code' => '718', 'msg' => '安全码错误']);
		}
	}
	public function Headimg_frm()
	{
		$_var_48 = input();
		$_var_49 = input('key');
		if ($_var_49 == 'ikmovie.xyz') {
			$_var_50['id'] = $_var_48['uid'];
			$_var_51 = db('user')->where($_var_50)->find();
			$_var_52['headimgurl'] = $_var_51['headimgurl'];
			$_var_52['Upload_Picture_Size'] = advert('170');
			if ($_var_51) {
				return json(['code' => '1', 'msg' => $_var_52]);
			} else {
				return json(['code' => '0']);
			}
		} else {
			return json(['code' => '718', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function userheadimg_Ryan()
	{
		$_var_53 = input();
		$_var_54 = $_var_53['key'];
		if ($_var_54 == 'ikmovie.xyz') {
			$_var_53['id'] = $_var_53['uid'];
			$_var_53['headimgurl'] = $_var_53['headimgurl'];
			$_var_55 = db('advert')->where('id = 80')->value('content');
			$_var_56 = db('user')->where('id', $_var_53['id'])->find();
			if ($_var_55 == '') {
			} else {
				if ($_var_56['headimgurl'] == '') {
					db('user')->where('id', $_var_53['id'])->setInc('sign', $_var_55);
				}
			}
			db('user')->where('id', $_var_53['id'])->update(['headimgurl' => $_var_53['headimgurl']]);
			if ($_var_53) {
				return json(['code' => '1', 'msg' => '头像修改成功']);
			} else {
				return json(['code' => '0']);
			}
		} else {
			return json(['code' => '0', 'msg' => '安全码错误']);
		}
	}
 	public function frame3()
	{
		$_var_57 = input();
		$_var_58 = $_var_57['key'];
		if ($_var_58 == 'ikmovie.xyz') {
			$_var_59['id'] = $_var_57['uid'];
			$_var_60 = db('user')->where($_var_59)->find();
			$_var_61['Source'] = $_var_60['Source'];
			$_var_61['username'] = ik2021(json_encode($_var_60['username']));
			$_var_61['nick_name'] = ik2021(json_encode($_var_60['nick_name']));
			$_var_61['power'] = $_var_60['power'];
			$_var_61['status'] = $_var_60['status'];
			$_var_61['money'] = $_var_60['money'];
			$_var_61['sign'] = $_var_60['sign'];
			$_var_61['share_ma'] = $_var_60['share_ma'];
			$_var_61['zfb'] = ik2021(json_encode($_var_60['zfb']));
			$_var_61['headimgurl'] = $_var_60['headimgurl'];
			$_var_61['txje'] = $_var_60['txje'];
			$_var_61['qdtime'] = $_var_60['qdtime'];
			$_var_61['player_starttimes'] = $_var_60['player_starttimes'];
			$_var_61['Rebate_Total'] = db('rebate')->where('get_id', $_var_60['id'])->sum('money');
			$_var_61['Team_size'] = db('user')->where('parentid', $_var_60['id'])->count();
			if ($_var_60['power'] == '0' || $_var_60['type'] == '1') {
				$_var_62 = '-1';
			} else {
				$_var_62 = $_var_60['lasttime'];
			}
			if ($_var_60) {
				return json(['code' => '1', 'msg' => $_var_61]);
			} else {
				return json(['code' => '0']);
			}
		} else {
			return json(['code' => '0', 'msg' => '安全码错误']);
		}
	} 
	public function share_poster_frm()
	{
		$_var_63 = input('key');
		if ($_var_63 == 'ikmovie.xyz') {
			$_var_64 = input('uid');
			$_var_65 = db('user')->where('id', $_var_64)->find();
			$_var_66 = advert('41');
			if (empty($_var_66)) {
				$_var_67['app_Invitation_slogans'] = '淘米视界提醒： 内容请至[ 后台管理 ->仪表盘->设置->APP分享 邀请广告词 ]修改';
			} else {
				$_var_67['app_Invitation_slogans'] = $_var_66;
			}
			$_var_68 = advert('176');
			$_var_69 = advert('177');
			$_var_70 = advert('178');
			$_var_71 = array("{$_var_68}", "{$_var_69}", "{$_var_70}");
			$_var_72 = advert('30');
			$_var_73 = $_var_65['share_ma'];
			$_var_74 = advert('116');
			$_var_75 = advert('117');
			$_var_76 = advert('118');
			if (empty($_var_76)) {
				$_var_77 = 'Invitation';
			} else {
				$_var_77 = $_var_76;
			}
			if ($_var_74 == '0') {
				$_var_67['dwzapi'] = $_var_72 . '/app/index/qudao.html?uid=' . base64_encode($_var_64);
			} else {
				if ($_var_74 == '1') {
					$_var_67['dwzapi'] = $_var_72 . '/app/index/share.html?uid=' . base64_encode($_var_64);
				} else {
					if ($_var_74 == '2') {
						$_var_67['dwzapi'] = $_var_75 . '/?' . $_var_77 . '=' . $_var_73;
					}
				}
			}
			$_var_66 = advert('41');
			if (empty($_var_66)) {
				$_var_67['app_Invitation_slogans'] = '淘米视界提醒： 内容请至[ 后台管理 ->仪表盘->设置->APP分享 邀请标语 ]修改';
			} else {
				$_var_67['app_Invitation_slogans'] = $_var_66;
			}
			return json(['code' => '1', 'r' => $_var_71, 'msg' => $_var_67]);
		} else {
			return json(['s' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function Video_Secret_Key()
	{
		$_var_78 = input('key');
		if ($_var_78 == 'ikmovie.xyz') {
			$_var_79 = db('advert')->where('id', 42)->value('content');
			if (empty($_var_79)) {
				$_var_80 = '1024';
			} else {
				$_var_80 = $_var_79;
			}
			return json(['code' => '1', 'key' => $_var_80]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function getMovies()
	{
		$_var_81 = input('key');
		if ($_var_81 == 'ikmovie.xyz') {
			$_var_82 = db('banner')->where('cid', 2)->order('sort asc')->limit(100)->select();
			if ($_var_82) {
				$_var_83 = '1';
			} else {
				$_var_83 = '0';
			}
			return json(['code' => $_var_83, 'msg' => $_var_82]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	// ikmovie.xyz 于2020.04.02修改  qq1207629473
	public function Movies_Category_action_List()	
	{
		$_var_84 = input('key');
		$data = input();
		if ($_var_84 == 'ikmovie.xyz') {
			$skip=$data['skip'];
			$limit=$data['limit'];
			if($skip==0){
                $zuixiao=0;
                $zuida=10;
            }else{
                $zuixiao=($skip*10)-9;
                $zuida=$skip*10;
                }
			$_var_249['$movies'] = db('video')->where('type', '动作')->order('id desc')->limit($zuixiao,$zuida)->select();
			if ($_var_249['$movies']) {
			 foreach($_var_249['$movies'] as $key=>$vo){
		if (strpos($_var_249['$movies'][$key]['img'], 'http') !== false) {	
		}
		else{
			$_var_249['$movies'][$key]['img']='http://'.$_SERVER['HTTP_HOST']. $_var_249['$movies'][$key]['img'];
		}
	} 				
				$_var_250 = '1';
			} else {
				$_var_250 = '0';
			}
			return json(['code' => $_var_250, 'msg' => $_var_249]);
		}else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系QQ 1207629473 ']);
		}
	}
	public function Movies_Category_comedy_List()	
	{
		$_var_84 = input('key');
		$data = input();
		if ($_var_84 == 'ikmovie.xyz') {
			$skip=$data['skip'];
			$limit=$data['limit'];
			if($skip==0){
                $zuixiao=0;
                $zuida=10;
            }else{
                $zuixiao=($skip*10)-9;
                $zuida=$skip*10;
                }
			$_var_249['$movies'] = db('video')->where('type', '喜剧')->order('id desc')->limit($zuixiao,$zuida)->select();
			if ($_var_249['$movies']) {
				foreach($_var_249['$movies'] as $key=>$vo){
		if (strpos($_var_249['$movies'][$key]['img'], 'http') !== false) {	
		}
		else{
			$_var_249['$movies'][$key]['img']='http://'.$_SERVER['HTTP_HOST']. $_var_249['$movies'][$key]['img'];
		}
	}
				$_var_250 = '1';
			} else {
				$_var_250 = '0';
			}
			return json(['code' => $_var_250, 'msg' => $_var_249]);
		}else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系QQ 1207629473 ']);
		}
	}
	public function Movies_Category_documentary_List()	
	{
		$_var_84 = input('key');
		$data = input();
		if ($_var_84 == 'ikmovie.xyz') {
			$skip=$data['skip'];
			$limit=$data['limit'];
			if($skip==0){
                $zuixiao=0;
                $zuida=10;
            }else{
                $zuixiao=($skip*10)-9;
                $zuida=$skip*10;
                }
			$_var_249['$movies'] = db('video')->where('type', '纪录')->order('id desc')->limit($zuixiao,$zuida)->select();
			if ($_var_249['$movies']) {
				foreach($_var_249['$movies'] as $key=>$vo){
		if (strpos($_var_249['$movies'][$key]['img'], 'http') !== false) {	
		}
		else{
			$_var_249['$movies'][$key]['img']='http://'.$_SERVER['HTTP_HOST']. $_var_249['$movies'][$key]['img'];
		}
	}
				$_var_250 = '1';
			} else {
				$_var_250 = '0';
			}
			return json(['code' => $_var_250, 'msg' => $_var_249]);
		}else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系QQ 1207629473 ']);
		}
	}
	public function Movies_Category_love_List()	
	{
		$_var_84 = input('key');
		$data = input();
		if ($_var_84 == 'ikmovie.xyz') {
			$skip=$data['skip'];
			$limit=$data['limit'];
			if($skip==0){
                $zuixiao=0;
                $zuida=10;
            }else{
                $zuixiao=($skip*10)-9;
                $zuida=$skip*10;
                }
			$_var_249['$movies'] = db('video')->where('type', '爱情')->order('id desc')->limit($zuixiao,$zuida)->select();
			if ($_var_249['$movies']) {
				foreach($_var_249['$movies'] as $key=>$vo){
		if (strpos($_var_249['$movies'][$key]['img'], 'http') !== false) {	
		}
		else{
			$_var_249['$movies'][$key]['img']='http://'.$_SERVER['HTTP_HOST']. $_var_249['$movies'][$key]['img'];
		}
	}
				$_var_250 = '1';
			} else {
				$_var_250 = '0';
			}
			return json(['code' => $_var_250, 'msg' => $_var_249]);
		}else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系QQ 1207629473 ']);
		}
	}
	public function Movies_Category_mn_List()	
	{
		$_var_84 = input('key');
		$data = input();
		if ($_var_84 == 'ikmovie.xyz') {
			$skip=$data['skip'];
			$limit=$data['limit'];
			if($skip==0){
                $zuixiao=0;
                $zuida=10;
            }else{
                $zuixiao=($skip*10)-9;
                $zuida=$skip*10;
                }
			$_var_249['$movies'] = db('video')->where('type', '伦理')->order('id desc')->limit($zuixiao,$zuida)->select();
			if ($_var_249['$movies']) {
				foreach($_var_249['$movies'] as $key=>$vo){
		if (strpos($_var_249['$movies'][$key]['img'], 'http') !== false) {	
		}
		else{
			$_var_249['$movies'][$key]['img']='http://'.$_SERVER['HTTP_HOST']. $_var_249['$movies'][$key]['img'];
		}
	}
				$_var_250 = '1';
			} else {
				$_var_250 = '0';
			}
			return json(['code' => $_var_250, 'msg' => $_var_249]);
		}else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系QQ 1207629473 ']);
		}
	}
	public function Movies_Category_plot_List()	
	{
		$_var_84 = input('key');
		$data = input();
		if ($_var_84 == 'ikmovie.xyz') {
			$skip=$data['skip'];
			$limit=$data['limit'];
			if($skip==0){
                $zuixiao=0;
                $zuida=10;
            }else{
                $zuixiao=($skip*10)-9;
                $zuida=$skip*10;
                }
			$_var_249['$movies'] = db('video')->where('type', '剧情')->order('id desc')->limit($zuixiao,$zuida)->select();
			if ($_var_249['$movies']) {
				foreach($_var_249['$movies'] as $key=>$vo){
		if (strpos($_var_249['$movies'][$key]['img'], 'http') !== false) {	
		}
		else{
			$_var_249['$movies'][$key]['img']='http://'.$_SERVER['HTTP_HOST']. $_var_249['$movies'][$key]['img'];
		}
	}
				$_var_250 = '1';
			} else {
				$_var_250 = '0';
			}
			return json(['code' => $_var_250, 'msg' => $_var_249]);
		}else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系QQ 1207629473 ']);
		}
	}
	public function Movies_Category_science_List()	
	{
		$_var_84 = input('key');
		$data = input();
		if ($_var_84 == 'ikmovie.xyz') {
			$skip=$data['skip'];
			$limit=$data['limit'];
			if($skip==0){
                $zuixiao=0;
                $zuida=10;
            }else{
                $zuixiao=($skip*10)-9;
                $zuida=$skip*10;
                }
			$_var_249['$movies'] = db('video')->where('type', '科幻')->order('id desc')->limit($zuixiao,$zuida)->select();
			if ($_var_249['$movies']) {
				foreach($_var_249['$movies'] as $key=>$vo){
		if (strpos($_var_249['$movies'][$key]['img'], 'http') !== false) {	
		}
		else{
			$_var_249['$movies'][$key]['img']='http://'.$_SERVER['HTTP_HOST']. $_var_249['$movies'][$key]['img'];
		}
	}
				$_var_250 = '1';
			} else {
				$_var_250 = '0';
			}
			return json(['code' => $_var_250, 'msg' => $_var_249]);
		}else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系QQ 1207629473 ']);
		}
	}
	public function Movies_Category_terror_List()	
	{
		$_var_84 = input('key');
		$data = input();
		if ($_var_84 == 'ikmovie.xyz') {
			$skip=$data['skip'];
			$limit=$data['limit'];
			if($skip==0){
                $zuixiao=0;
                $zuida=10;
            }else{
                $zuixiao=($skip*10)-9;
                $zuida=$skip*10;
                }
			$_var_249['$movies'] = db('video')->where('type', '惊悚')->order('id desc')->limit($zuixiao,$zuida)->select();
			if ($_var_249['$movies']) {
				foreach($_var_249['$movies'] as $key=>$vo){
		if (strpos($_var_249['$movies'][$key]['img'], 'http') !== false) {	
		}
		else{
			$_var_249['$movies'][$key]['img']='http://'.$_SERVER['HTTP_HOST']. $_var_249['$movies'][$key]['img'];
		}
	}
				$_var_250 = '1';
			} else {
				$_var_250 = '0';
			}
			return json(['code' => $_var_250, 'msg' => $_var_249]);
		}else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系QQ 1207629473 ']);
		}
	}
	public function Movies_Category_warfare_List()	
	{
		$_var_84 = input('key');
		$data = input();
		if ($_var_84 == 'ikmovie.xyz') {
			$skip=$data['skip'];
			$limit=$data['limit'];
			if($skip==0){
                $zuixiao=0;
                $zuida=10;
            }else{
                $zuixiao=($skip*10)-9;
                $zuida=$skip*10;
                }
			$_var_249['$movies'] = db('video')->where('type', '战争')->order('id desc')->limit($zuixiao,$zuida)->select();
			if ($_var_249['$movies']) {
				foreach($_var_249['$movies'] as $key=>$vo){
		if (strpos($_var_249['$movies'][$key]['img'], 'http') !== false) {	
		}
		else{
			$_var_249['$movies'][$key]['img']='http://'.$_SERVER['HTTP_HOST']. $_var_249['$movies'][$key]['img'];
		}
	}
				$_var_250 = '1';
			} else {
				$_var_250 = '0';
			}
			return json(['code' => $_var_250, 'msg' => $_var_249]);
		}else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系QQ 1207629473 ']);
		}
	}
	public function Movies_Category_xz_List()	
	{
		$_var_84 = input('key');
		$data = input();
		if ($_var_84 == 'ikmovie.xyz') {
			$skip=$data['skip'];
			$limit=$data['limit'];
			if($skip==0){
                $zuixiao=0;
                $zuida=10;
            }else{
                $zuixiao=($skip*10)-9;
                $zuida=$skip*10;
                }
			$_var_249['$movies'] = db('video')->where('type', '写真')->order('id desc')->limit($zuixiao,$zuida)->select();
			if ($_var_249['$movies']) {
				foreach($_var_249['$movies'] as $key=>$vo){
		if (strpos($_var_249['$movies'][$key]['img'], 'http') !== false) {	
		}
		else{
			$_var_249['$movies'][$key]['img']='http://'.$_SERVER['HTTP_HOST']. $_var_249['$movies'][$key]['img'];
		}
	}
				$_var_250 = '1';
			} else {
				$_var_250 = '0';
			}
			return json(['code' => $_var_250, 'msg' => $_var_249]);
		}else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系QQ 1207629473 ']);
		}
	}
	////继续修改 /////
	public function frame_one()
	{
		$_var_84 = input('key');
		if ($_var_84 == 'ikmovie.xyz') {
			$_var_85 = db('tv')->where('type', 1)->order('id asc')->select();
			if($_var_85) 
		   {
			   foreach($_var_85 as $key=>$vo){
		if (strpos($_var_85[$key]['img'], 'http') !== false) {	
		}
		else{
			$_var_85[$key]['img']='http://'.$_SERVER['HTTP_HOST']. $_var_85[$key]['img'];
		}
	}
	
			$code= '1';
		    }
		   else 
		   {
			$code= '0';
		    }
		    $_var_86 = db('tv')->where('type', 0)->order('id asc')->select();
			if($_var_86) 
		   {
			 foreach($_var_86 as $key=>$vo){
		if (strpos($_var_86[$key]['img'], 'http') !== false) {	
		}
		else{
			$_var_86[$key]['img']='http://'.$_SERVER['HTTP_HOST']. $_var_86[$key]['img'];
		}
	}  
			$code= '1';
		    }
		   else 
		   {
			$code= '0';
		    }
        return json(['code'=>$code,'zt_tv'=>$_var_85,'tv'=>$_var_86]);			
			
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function getMovies_index()
	{
		$_var_84 = input('key');
		if ($_var_84 == 'ikmovie.xyz') {
			$_var_85 = db('banner')->where('cid', 2)->order('sort asc')->select();
			if ($_var_85) {
				$_var_86 = '1';
			} else {
				$_var_86 = '0';
			}
			return json(['code' => $_var_86, 'msg' => $_var_85]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function vip_movies_theme()
	{
		$_var_87 = input('key');
		if ($_var_87 == 'ikmovie.xyz') {
			$_var_88 = db('advert')->where('id = 7')->value('content');
			return json(['code' => '1', 'msg' => $_var_88]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function get_Invitation_mode()
	{
		$_var_89 = input('key');
		if ($_var_89 == 'ikmovie.xyz') {
			$_var_90 = db('advert')->find();
			$_var_91['Invitation_mode'] = advert('116');
			$_var_91['app_working_mode'] = advert('1');
			$_var_91['vip_movies_theme'] = advert('7');
			$_var_91['apicloud_app_id'] = advert('47');
			$_var_91['app_android_apk_down'] = advert('24');
			$_var_91['app_ios_down'] = advert('22');
			$_var_91['imgapi_Token'] = advert('119');
			$_var_91['Picture_upload_API'] = advert('120');
			$_var_91['tencent_x5'] = advert('121');
			$_var_91['Android_Updated_version'] = advert('150');
			$_var_91['Android_Updated_content'] = advert('151');
			$_var_91['Ios_Updated_version'] = advert('152');
			$_var_91['Ios_Updated_content'] = advert('153');
			$_var_91['Android_Updated_switch'] = advert('154');
			$_var_91['Ios_Updated_switch'] = advert('155');
			$_var_91['Vip_Voice_cues'] = advert('172');
			$_var_91['Is_Quick_login'] = advert('173');
			$_var_91['app_secret_key'] = advert('42');
			$_var_91['Hot_search'] = advert('359');
			$_var_91['Load_animation'] = advert('344');
			$_var_91['player_bottom_show'] = advert('345');
			$_var_91['frame_two_show'] = advert('346');
			$_var_91['Hot_Video_num'] = db('video')->count();
			$_var_91['Private_Video_num'] = db('mn')->count();
			$_var_91['Special_Live_num'] = db('tv')->where('type',1)->count();
			$_var_91['Tv_Live_num'] = db('tv')->where('type',0)->count();
			$_var_91['Movies_Category_List_Switch'] = advert('348');
			$_var_91['Analytical_type'] = advert('350');
			$_var_91['Player_selection'] = advert('349');
			$_var_91['Mandatory_Invitation_Code'] = advert('351');
			$_var_91['Invitation_Code_Show'] = advert('352');
			$_var_91['Invitation_Code_Distinguish'] = advert('353');
			$_var_91['register_switch'] = advert('354');
			$_var_91['launchImageAd'] = advert('355');
			$_var_91['launchImageAd_url'] = advert('356');
			$_var_91['launchImageAd_time'] = advert('357');
			$_var_91['launchImageAd_skip'] = advert('358');
			$_var_91['System_Return_Key_Binding'] = advert('343');
			$_var_91['dxzce'] = advert('408');

			if (empty(advert('174'))) {
				$_var_91['vip_movies_theme_top'] = 'data:image/png;base64,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';
			} else {
				$_var_91['vip_movies_theme_top'] = advert('174');
			}
			if (empty(advert('175'))) {
				$_var_91['vip_movies_theme_foot'] = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAu4AAABQCAYAAABGQvDmAAAACXBIWXMAAAsTAAALEwEAmpwYAAAKTWlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjanVN3WJP3Fj7f92UPVkLY8LGXbIEAIiOsCMgQWaIQkgBhhBASQMWFiApWFBURnEhVxILVCkidiOKgKLhnQYqIWotVXDjuH9yntX167+3t+9f7vOec5/zOec8PgBESJpHmomoAOVKFPDrYH49PSMTJvYACFUjgBCAQ5svCZwXFAADwA3l4fnSwP/wBr28AAgBw1S4kEsfh/4O6UCZXACCRAOAiEucLAZBSAMguVMgUAMgYALBTs2QKAJQAAGx5fEIiAKoNAOz0ST4FANipk9wXANiiHKkIAI0BAJkoRyQCQLsAYFWBUiwCwMIAoKxAIi4EwK4BgFm2MkcCgL0FAHaOWJAPQGAAgJlCLMwAIDgCAEMeE80DIEwDoDDSv+CpX3CFuEgBAMDLlc2XS9IzFLiV0Bp38vDg4iHiwmyxQmEXKRBmCeQinJebIxNI5wNMzgwAABr50cH+OD+Q5+bk4eZm52zv9MWi/mvwbyI+IfHf/ryMAgQAEE7P79pf5eXWA3DHAbB1v2upWwDaVgBo3/ldM9sJoFoK0Hr5i3k4/EAenqFQyDwdHAoLC+0lYqG9MOOLPv8z4W/gi372/EAe/tt68ABxmkCZrcCjg/1xYW52rlKO58sEQjFu9+cj/seFf/2OKdHiNLFcLBWK8ViJuFAiTcd5uVKRRCHJleIS6X8y8R+W/QmTdw0ArIZPwE62B7XLbMB+7gECiw5Y0nYAQH7zLYwaC5EAEGc0Mnn3AACTv/mPQCsBAM2XpOMAALzoGFyolBdMxggAAESggSqwQQcMwRSswA6cwR28wBcCYQZEQAwkwDwQQgbkgBwKoRiWQRlUwDrYBLWwAxqgEZrhELTBMTgN5+ASXIHrcBcGYBiewhi8hgkEQcgIE2EhOogRYo7YIs4IF5mOBCJhSDSSgKQg6YgUUSLFyHKkAqlCapFdSCPyLXIUOY1cQPqQ28ggMor8irxHMZSBslED1AJ1QLmoHxqKxqBz0XQ0D12AlqJr0Rq0Hj2AtqKn0UvodXQAfYqOY4DRMQ5mjNlhXIyHRWCJWBomxxZj5Vg1Vo81Yx1YN3YVG8CeYe8IJAKLgBPsCF6EEMJsgpCQR1hMWEOoJewjtBK6CFcJg4Qxwicik6hPtCV6EvnEeGI6sZBYRqwm7iEeIZ4lXicOE1+TSCQOyZLkTgohJZAySQtJa0jbSC2kU6Q+0hBpnEwm65Btyd7kCLKArCCXkbeQD5BPkvvJw+S3FDrFiOJMCaIkUqSUEko1ZT/lBKWfMkKZoKpRzame1AiqiDqfWkltoHZQL1OHqRM0dZolzZsWQ8ukLaPV0JppZ2n3aC/pdLoJ3YMeRZfQl9Jr6Afp5+mD9HcMDYYNg8dIYigZaxl7GacYtxkvmUymBdOXmchUMNcyG5lnmA+Yb1VYKvYqfBWRyhKVOpVWlX6V56pUVXNVP9V5qgtUq1UPq15WfaZGVbNQ46kJ1Bar1akdVbupNq7OUndSj1DPUV+jvl/9gvpjDbKGhUaghkijVGO3xhmNIRbGMmXxWELWclYD6yxrmE1iW7L57Ex2Bfsbdi97TFNDc6pmrGaRZp3mcc0BDsax4PA52ZxKziHODc57LQMtPy2x1mqtZq1+rTfaetq+2mLtcu0W7eva73VwnUCdLJ31Om0693UJuja6UbqFutt1z+o+02PreekJ9cr1Dund0Uf1bfSj9Rfq79bv0R83MDQINpAZbDE4Y/DMkGPoa5hpuNHwhOGoEctoupHEaKPRSaMnuCbuh2fjNXgXPmasbxxirDTeZdxrPGFiaTLbpMSkxeS+Kc2Ua5pmutG003TMzMgs3KzYrMnsjjnVnGueYb7ZvNv8jYWlRZzFSos2i8eW2pZ8ywWWTZb3rJhWPlZ5VvVW16xJ1lzrLOtt1ldsUBtXmwybOpvLtqitm63Edptt3xTiFI8p0in1U27aMez87ArsmuwG7Tn2YfYl9m32zx3MHBId1jt0O3xydHXMdmxwvOuk4TTDqcSpw+lXZxtnoXOd8zUXpkuQyxKXdpcXU22niqdun3rLleUa7rrStdP1o5u7m9yt2W3U3cw9xX2r+00umxvJXcM970H08PdY4nHM452nm6fC85DnL152Xlle+70eT7OcJp7WMG3I28Rb4L3Le2A6Pj1l+s7pAz7GPgKfep+Hvqa+It89viN+1n6Zfgf8nvs7+sv9j/i/4XnyFvFOBWABwQHlAb2BGoGzA2sDHwSZBKUHNQWNBbsGLww+FUIMCQ1ZH3KTb8AX8hv5YzPcZyya0RXKCJ0VWhv6MMwmTB7WEY6GzwjfEH5vpvlM6cy2CIjgR2yIuB9pGZkX+X0UKSoyqi7qUbRTdHF09yzWrORZ+2e9jvGPqYy5O9tqtnJ2Z6xqbFJsY+ybuIC4qriBeIf4RfGXEnQTJAntieTE2MQ9ieNzAudsmjOc5JpUlnRjruXcorkX5unOy553PFk1WZB8OIWYEpeyP+WDIEJQLxhP5aduTR0T8oSbhU9FvqKNolGxt7hKPJLmnVaV9jjdO31D+miGT0Z1xjMJT1IreZEZkrkj801WRNberM/ZcdktOZSclJyjUg1plrQr1zC3KLdPZisrkw3keeZtyhuTh8r35CP5c/PbFWyFTNGjtFKuUA4WTC+oK3hbGFt4uEi9SFrUM99m/ur5IwuCFny9kLBQuLCz2Lh4WfHgIr9FuxYji1MXdy4xXVK6ZHhp8NJ9y2jLspb9UOJYUlXyannc8o5Sg9KlpUMrglc0lamUycturvRauWMVYZVkVe9ql9VbVn8qF5VfrHCsqK74sEa45uJXTl/VfPV5bdra3kq3yu3rSOuk626s91m/r0q9akHV0IbwDa0b8Y3lG19tSt50oXpq9Y7NtM3KzQM1YTXtW8y2rNvyoTaj9nqdf13LVv2tq7e+2Sba1r/dd3vzDoMdFTve75TsvLUreFdrvUV99W7S7oLdjxpiG7q/5n7duEd3T8Wej3ulewf2Re/ranRvbNyvv7+yCW1SNo0eSDpw5ZuAb9qb7Zp3tXBaKg7CQeXBJ9+mfHvjUOihzsPcw83fmX+39QjrSHkr0jq/dawto22gPaG97+iMo50dXh1Hvrf/fu8x42N1xzWPV56gnSg98fnkgpPjp2Snnp1OPz3Umdx590z8mWtdUV29Z0PPnj8XdO5Mt1/3yfPe549d8Lxw9CL3Ytslt0utPa49R35w/eFIr1tv62X3y+1XPK509E3rO9Hv03/6asDVc9f41y5dn3m978bsG7duJt0cuCW69fh29u0XdwruTNxdeo94r/y+2v3qB/oP6n+0/rFlwG3g+GDAYM/DWQ/vDgmHnv6U/9OH4dJHzEfVI0YjjY+dHx8bDRq98mTOk+GnsqcTz8p+Vv9563Or59/94vtLz1j82PAL+YvPv655qfNy76uprzrHI8cfvM55PfGm/K3O233vuO+638e9H5ko/ED+UPPR+mPHp9BP9z7nfP78L/eE8/sl0p8zAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAACRdSURBVHja7N1rkJxXfefx7znnufRlLi1pdLF1G1mybCxsDzYGQTCaNVkIcRFLhGRhIZG2KqlUNheDd5MltwUnVDa7WzEm2S0qm2RjU4EkW2w8JmyyKSCMzE0GHEbGxjfJGknWXTPTMz19ey7n7It+2tPTzEgjW4aR9/+p6uqZnu7nOv08v3Oe85yjnHMIIYQQQgghljctm0AIIYQQQggJ7kIIIYQQQggJ7kIIIYQQQkhwF0IIIYQQQkhwF0IIIYQQQkhwF0IIIYQQQoK7EEIIIYQQQoK7EEIIIYQQQoK7EEIIIYQQEtyFEEIIIYQQEtyFEEIIIYSQ4C6EEEIIIYSQ4C6EEEIIIYSQ4C6EEEIIIYQEdyGEEEIIIYQEdyGEEEIIIYQEdyGEEEIIISS4CyGEEEIIISS4CyGEEEIIISS4CyGEEEIIIcFdCCGEEEIIIcFdCCGEEEIICe5CCCGEEEIICe5CCCGEEEKIJfNkEwjx8tkjFlxK0nDUg4AZFXMuLDMZgM4VuFoHeBpcAFd99wheM8YptfgEnUMV8pjeIv6R0wGN2MfXbqYvaMb//ETa94brYHU/pHbex3wsh1U/B+q91MKY4dU+54sFjlo45Dl6SbkByzY8nnWawhOHKX8votAH8fQW6tERCI+xZeMuXjjUoFntxVnDyoEmm7bVma4+DR7UJ67hzOGT3Dh0I6W1hjRpzf+qG+V/QQghhJDgLsSrhLIOUNljsTeBMZqpQ+Ovqz7+9J/21BLf2aQZb1n3W0Vt9itjIoxe8IPqQtMVQiwrj56ZbRX+0Qx4Zb53dob9+eu4cXaCbdd6HI5DTtYsdVXA14rNfsoN+TqlqMrnqivY0qOo25hbZwzPXq244ZTPtnJMfN1jFzi+aFRSgdpRGuGNOdLZd7s0Oa7Prf5K4bnHUZuuA2svciCDRqL45uk8teketLeSq6+p8fR3j9OoRqzsK7Jh0woalTzXXNeHtY4123plhwshwV2IK0tUDClOTeMuELCt55F++4l3Fb7x9U8WCpvW5/NFqi6h76tP/HmzmPt09fVb/0hPlE9117gHNsHmNWg5QQrx/3cNgbvg35wJe/zmkavC48eumZ5MPm0rM+P9+toPKm/lAYw5j3LpxYI7VioJhJDgLsSr3PTG1aw4fwK0WfgNRlOfqvSe/fY3f2FgNl3vlRw671G0ORxuY+XY8x+OR6Lz+o7b/xCbzjuPzlg4NuDjFdxLPNmD1hCEvuf7Scn6JnAW5fteNQhM2TQVqXKyE4VYzhyoSh60g4W+rkpDaq93p81n/fOPFwqzKvVm/cHg9KG/PNtzzYGi6//XxXp4DpdcMPxr7UOYk+0thAR3IV6llEIlCW5iGsUiAdjz4cypH0sPP3u7X9xMXKkQpQriGJ3G5JpV/H9+aqd+/08Z3FytmMZRMwHlwgZ0pXLJi+b7PlESFMpTzdf97V994T3T59J3RA3PYI1asUJH6x73T5TWzv7X19x61TeNMTOyM4VYjscYB7Fm8tRKVqyPsAvViiuNOjvyZj3xzOZoJkc6G5Gf6sVN+j29x4//SPXUt98X3HrHn/gq18S5RUsHlaaFUDa5EBLchXi1nlNTS6O/j4nBTQx8/Zu4fO77r2j7HnaivM6VJ/pc2ounmxDO4JQiqZ/FVc6A5dZarRriXC2bMr5LOOf3Y3IJ6aUtFZ6fcG7myNv2f372vadOrPzp+uxMX6FgwIKyMeeN5diTjR25XP6O58e8kZvefO73PF99F8cVXf1+354Dr8RkS8BuYCx7iFfIPQ/tfPUeKwBjVI+x5I2mzyh8T5N6WpV9rc4ZdeFPO+sgtbjIoLoPMsqhT5+5k+kUW8mhztZJKzEu8nCNMD/55JF93o+WPlPatrXpms2F56AVh549jYua8o8ohAR3IV69dGqprr+avmuuwW80sXr+Taba90macSWKHbWJI2jWkA/qTDUqhLZBUqlxshgc3DSwqoZrtXE3OM7akENqFaqjhsxoha/RvqbfoAYMqmlQ5wKot+cahLrn8QP6x7/49/s/NjsZXruqdyPFQoByKbnQEPo+Hh6kBuMS79gzh98zcYqVt7z++o/5OfMNpWiguKJuib1vz4GPAEeBcWD0Mk9+H1AG7s6eH76M89gH7MqW+xPZ9MWrjNGKVKvg8JMzu59trvits8bLTREb5zt71m/Wy+HsM9fn7Qe9QI/rhb54nqVxupdqJSY/+AIu8rtSt+r3zp3fZWeaxM0cbtYjmYlJq6CnDb1Tka+jJI9SqO/r/UqBsxAlKGdlZwkhwV2IVzeVptRXraBx42sJJmZQXlfvML6PKfbu91YOPFY99sStkYrp1wV0Dtz5KWoztXMbb3nzaO9Dn4PUopxFpTFP3H4Xyaa1BEmrXarnaV6YqK77+rNn7z/aUK+1Xk9PaJpJf9F79NCqvp8JB0K7I/B55uipfzHy6fjjoX/11WtWe6SNCOM30dZgU4VFo3yL8WK0suSCtbiyueOpR5/fvmZT/d/vuPGmv0lie0UdUu55aOe99+058HHgLmAQeOAyTv5+WrXud2VBu5S9fjnCewk4COzNfr63K7wPX8Z5LcVg9mgrc+GrDEPZ+0el0DGfAwJtCVWs4lrjlx6olN5Wny2+QxuVjzwIlEHHimNewFeahetNze14XW/yd9u86H8GnvfEvDp15XCxo/bUNsJ+H1ZM41LdGdxrLlr3XDxRfq1XUehKP/p8g3BGYysF6rW613PyVOy0hnh+O3dlLXFPkecIqTYTPCM3qAohwV2IV/sXL445N9CPbyFfa4LRvNiWVGn8jVcdiX/+Xb/a/E+H/qLvxOHtk0qz0nqkFmbv/LGR1Te95pNutgw40iTlyHVv5PSGzfhJDCgK2qmDM7z/f5wq/qZxfa+ZUeDnLNb08TVrN/SaJNgXRl8c/05U/9JfVX87MPHVfSogRhGoFM+GGM/iKY2vNJ5yGECjUSpCF1MCG2741sjZXyr1nH+sr7/vkLP2ijik3LfnwFAWIIez53bgHLnESbWnM0qrBpyuAN0O7LuBB7s+N/YyCwWbs0LBwWy5y9l0d3XMe+QV2Hy7s+ebO7bdWFfB4m5aVxnGF1jPweyzpctRWLpvz4Hhjvm+WHi456Gdo1fKscA5h1KKgnE82+zb/KUzwa9/54y7s15gcxBaaoGHUgGRF6N0jFYOnQLKbDt0LvrQZ6vpmu1bin/8euIxUC+2W1G61e2sNzFIrf85TCEBl4VsrePGyu2fSA8/9qfeVIV6JYdXtwTllImzLs2/65a/TnuSyckTzywQGlImKyVOFjcTaAXIzepCSHAX4tUjQOG0ItEw78KyVXBiTR/rz5Rb4b3dZMZZEhKu6l8/VvjlX/u5qdF//OXqqcn+iULYLO286bF1r3/Ng5VQR1jQLqXhF3hi8B14cYRz4Hv4hxvBri+OR78WBcFr8kbh6YSc9qhojUWHlbp6z8iR6D0cPc9so0LOL6C1JtSGnNFYUpQCpUAri9Ya7Xw8bfE8SJMUz88T2IHbH/nHp39y566b/lvUSKrXU1hOAb0E/AXwoXse2jmeBfa7ssC5uyuM7u8IvOWOMDjK4jXD7QA9lIXUoSyY7sqeh7vC7Ee6Pl/OAu7FAmypI+yXOz73QeDj2d/vz/7eXofSZd6cpWz5B7sKJXRty87X7s+2S+f2G+nYHi+lsNRZALi7Y5sPZq+PA2PZvh6956GdY8v9ALEiX6BSb3Dw1Iz5xoR378PlNXu3589i8wHNuISOm4Q6ppkqnPFRnsVTiorfwAU5vlkP3n/0THn9TxrzPkXu9Lx7UVWrPiAua4LZ862rZ1nXUXb1ax/x86d/X08+sc/VuLoxG2GmHMWN13+2tuuNn5m5fWOk63O17Y7WISqJ4dThJn4lRoaMEEKCuxBXpqziyeGCNHbDqVG/Y1zo+XESNhLHGeL3+z3mqbWBxrYr1nE4rTm5rsT602Vy9aiVlNsnymZUq+y87ivlwH19evxM3vXk4+AttzX7/Cbq9DgYH6Vgcu1NDGiLCjSeUUzMJKX/e9j/yPlmeNMAjmoaE/amNOOAyFMUEofB53joU9h6HT1XlQkmFM5adNI6Oyuj8bXDKIXRCi971kbjUkd/sYitNbDKoCd6f7ZRm/z8um3FJ5fZXhnKAu5gFuT2LhA62/Zmob5tuCN4jl0gPA53hPC9tGrBWSTILmR8CesxnC1bqSPoDnYE6r3ZMo52BOVdXN7mP6VsWw5dYF263z+cFYhGF9k3ey+yfS+0X/dmBZeF9slgu+Bw354DLPfwHmhDQVm9f7L3Q0+eCO/cHDoiVuHVFM6AjgIiHxKlCFMILMQ+qNgHUnQ+5WSlZ/gPcu6+H4/cfyxGHJoXqFWCsQOYuofTzwA+aIOxjWcb1+z4nTNrbvon8/j4H4QTzULtjg2fKl2z5ZOFZlpp1Bqoxtxt7kZDkjhOPJ8SNR1dt+agFOTyijAHNsUEOZcGOUVjVk4PQkhwF2K55fZU4SKzRTfUiA6SHcqzxno+BetTbVies8nPbA7c/0mM/lps3by8b5XiSKmH6xuT8yuwFKhGhK7VUl2vz2JA1apQbJ0lw7TOkavfwLHe9YSJBTShUhyZSoZPnIx2XF3yUYlP7AfoxgxxmiMIFPnUoVzKpAe5DSvQ112N+8YJlO+RSy2hBjwfh8NTGk9pjFL42UitShlUnJLLA66Bi+zm2tTMGzDek8tw19zMXPORwYuEwYVcKPSNZYH6o0tYjrEsUJc65vUA85vQXMjgAuvVuex3dSzrEHNNZy5XaB1fYiGju8Dx4AUKK+2/v5Tgvm+R6Y5m23gwC/ZHWeY9+2gNZ8pu/cnzuZ9XWg9oC6k1aE2rkO9ApwqjHWiFda1a9DBWOE9BHLE+zhFN1t+Xm3a/vz4fQNBdFW5RajMasOo5UB44R5I6u+naGx7JrbrmDmZjr7axr9E8PVV3Nvm+ZUxixwvjC4d2rRVprFc+9kjy488+yTuimvYH+sPmzKnkHzZuU58zvq65SG5kFUKCuxDLRBLHeLXg3xmtb0p0A+diaEDoKXxlSZX/G6cmG2/sLXpvCzzv+1qFWqWZyvewsjY7r9Z9MYaUCb2Kr5fXMlV1mKztqm+UOnJW7+7xzQoTN6gnCaanB2c8tK9RdUeaWHRRU0gtBQ/c2l4CrTG+IUhSnAarLKE2GBRGKTyt8ZQCz6Es+MpgXYKfV+i6LdbONX7i+X8++6kduzaly2Wf3PPQztH79hy4i8VrwRfTDthHlxDGSxcIkOO0apzb9nb8fZhWDfbYEpennIXRUvbzg9nzbuaaiwwx1368xOVvLrNQAWK0azl3LxLSF5pGKStUjVxiaL9rgXUb6dgmdIT3m+/bc2B4Obd5n4jxDxxt/vmZqZ7tuSLYVOFUqymdw2EcmGwcJec5UqMgbY2tlPoQRA22Nw1bdd4WJtyDx/NJQ3uVjzinvqh0q9vGFwO22wxYLEdot023aRITxzFxjIsTuvttV1loP34kIWo4tJn/Fq3BGL1u/5ce+9XHH525x0SFMFQFjnsVnus7+e4bd5Y+oOI1H1i7ob8MPXKyEEKCuxDLILirhtFNTyehJrYOrUKcblLJJUxHMUGSpzmrgqQnWNlfCCeTBe7nOp7PoZ2jVK8u4YvrOKYGOFzvp6fWeLEg4BtlomqianFI7PdQChVpw+HyIbpep+BCEqeZdeClGmuhmnP0G3DOEiqN8T3qtJrJqFYlHxqFVhptYoxRuETh5fIkVpFTOaJKPbj5hg0BUF9mu2Y/Czep6A6dY8zVUO8HHmJpNczlC0y3xFyvNaWO9+6mVds+tsR1GM1C/93Z7/czv4/4oY7noVd4e3Zvkwc7gvfurueFgn73NrvU5R1aoHDwUeDBex7aOW/ZOm5cHV/Ox46ny8maZ6bjoTR1uETjNJC2rsYpHM6BcgoDpFmgNw5SZxmcsrxV93HHGej1lS44bmlOJehG7n/rmrq3mY9rjSj5HB4nidrhfQs4hePgxRdOQZpoTh13pJGHH6j596IqUCbOHfhS/Rcf/1r8655pmIFVK8hpha8q6NTvefqr0z9qXPMDb39v758AsZwthJDgLsQPnYnDtylf/2IzjPB1QkIIrkqqIG8NadRgNqd2lNP0nSpyn04XGI0wUZqcF9Kr6igWv6ysnWXGBuwvvIYi1fb5s/2NtnoGwrrF6ohI9YCKUTEY7RHGjmiFI3AxtqKJekN6mhZlEgpKYbTfigs+BNaitMLXGk87jLZ4zkNrUL5CJZreMAWd4BKl11zdb5bhrhlcIAQ/mIW5Uvb3flq9s3wo+33vBUL5xYIsXLyGv5zN71IC5cO0aul3Zesw1lEweSCb3maW1v785di1wPqXO7btXV2FoYW2Yanr84OXsC02LzD/g92hHVpXXPjBdYv5kj110q07X83pggKXKNDQaoniUMqRACkOQ6vNu7PgWygGjtvLllsCj/WBwkYWl8SkDY1f9/uolP+wdi7Gm4h29e/s+yW1ikmXtA4W2g1CWgH3rQsf14yjOu1jyNPb9/2jrQWhYfy5s1u+9bVj7w/SAdPXG6KdRtkE4xkKuVXkVRSOPzH5my+MTx/cdMvqr8jZQggJ7kL80CmPQ9rxrSD1bnMkzNoEX+fRaRWlNVUVUk3qB/PajfR4kC6Yyy0zhQKNZh2TXLhiqty/lcFSgO4aACUIcGraTH6vGaDCOmEjIfINtWaF0PRT6QdXdxTrhjQP/rSl90yTnNU4D5xnMIkiVArV7k1Gt25MNVkTHm0MOT+AJEalisDzMWEjOfS948kbbty+3HZNf9fvQ8xvetIOmHczd7PkvkuY/sGOaYx1FAiGmLtxdYy53mn2ZUF75BLXoz393R0htz3dUeZuYL1QgeKVCvIl5pq9dBYcRlj4qsLmJRR+FjO0wHZ5sXBw354Dgyx+L8P4QgH/h+3kWb+/Xu8PAwyRB8oCKaAVKmkVylMNXgo6BasdxIp+P+FtkWFtzeErS9NpqnWFayiSyjSNRgVl88RHau+dcs1ZfWfPz3sF78WurfSK16IwEFcWriAwjuqk4fknCzinFmzBF4aGI8/odzt9dmOhr4mvSvimQT4XYNIevKBC3oB1A1c9++SZ29/87m0S3IWQ4C7EMmDc86lyf+9F+jYXBmjPkqSONIqwKqCuPMLAb8Rxs356JsUt0vVxohRNm1K8QDN3Zx32ms3cWtTzRkkFCH1cIUr/8qsHkzvPNguDnjJEqcPLh9i0Rj1NyDd84lyeNAD/xHn06Wl83eql3fMNzqZ4ZL3JaIWf1bprpfECA1iiRo3eXAFlW01qgl4dnTh9OoLty31PlTrCZTkLfoMdv1+qMq2mK0ezQN6exr6u4P5gFjrv5aXd6DmeTWOYVtOfdsFjhLl238Md7x/8AYX3jy7y+gitqwHjS1ivS91/C04jaxrTLjx0B/wHmLvSsqw0YjxHQzXTAjpuBXYHrUGUtEFjiVREokLSNCFMNfnI8kY/Za0JoJEyYx1+LUbVm5gkoTk7iWnk8GoV0jig+uTUHeFt5etXDg48nWZ3oTilyA/cQDj1LNgzC1VHcOZYgSPf68EPFr4C6PmG6dN9W3tMEPi+JucpQgNBrMgFOVQwQaR66dMp7ny9X04UQkhwF2JZUKlSSS76z65prneJ+1fWObSn8LwQG1nyaeM7q4vmwyXP06lbvB2MA474BbbXmhecX+hFJKEFO39Ssae4anX82Bu3Ne/9/Pd6/sjmXK+fpKhqQBQ2WFH1CVXIdOoITzv6vzPBwJk6vlNEqjU+i280BjBGY5TGaI3Wrd5llLVoDblcHgNYlWKxcd/a/PdW3th7pXQbMUarlvph5tqejzF3c+W+SwzuZVo1+6WO4N5ZCBii1Qd6qeNvu5gbPOlSlvuBLLh/NFuHwWze3cs8+gqF1MElvGcE+ASLN1MZvIzLU+6a7nQ2//GOAtpHgYeXa7eQgSJ1iXNWg7Gt76CyrZtUVfZzkIDyAeuo65R+z+O6qodtJKSxRTdSklqMqjWp1ht4tQQ/iqnNVlBRETvVvCY5NPMe31/5MR119hijwZVAnaWz8boC4gjOnwrYsLW6aH/tQehTnp6c0CpHf5jHuITAB19pfO3huSI55aP8OsEKU5MzhRAS3IVYHsHd4Zxn685XH3BNpW3KT1lXp4nCR3/12iB+v/HUSVCJvkinMW4Jo5q4rEu47kanzoJNiLcMms+/Nar0HjxdvaeelAZdvYhRBYIqNPOzDOSbbKo46kcnSBz4vqEH07oc7ymMBmMMHhpPKzwNnlIoHB7go7BpRL7gkaRRuX/dir9euSl3peyuMnMD+LTD7S5aNcS7uPTeWHZ3BMeHmeuSsDO4D3WF6sGOkLtU49kyDtGqXW8/FnrfdBbwR7m83SGWl7ic40sM//svcf7d0x0mq0m/56GdD7RfvG/PgX0d+2X/cu7LfVWe6qlUJRVlcakGLKBQKJxyKKfwrSLWYHDMemCAjROKOIGoEVOYiWg0Iqg0SRyoqsVVKyS2QX3aYaaa2OPVIqUGptndDK8IaiNw+MUDisNCvIbX3Bxky7NIBULeJ03yf3fwyz17/dhb7fs+vm8IPY8g1YQElEyeKTfx5PrtV/2DnCmEkOAuxPIK8IFKPG32Gm0+iUpC6+f71uQLjxYa9WPnHXg/oJEGk8Sdv2O9/e9bN/ecGn268M4TUzPrcjYEHcbrNkTT792R/+KNx5MXPv9I5VeOpv5uz/NUgAFrCXwf7UBjWwMwofDQKByhH6BTi9aWwDPEaYPiQPCXG3o2nHXPAduuiN00vMT3DXHxmxvHszA7zFyPJ3sWCJjljhB9qTXtnUaYu6l2cJFg/Qla3UIOZc/3cvlq38tdBZB7s5/bg1sNMlf7//AStt8Qi9/EupD9zL+6MAjsvW/PgdI9D+0cyUL7IHPt6MvL/Z/xmlWcO3XU1s/UolLo51+MyUoBiWrdDK5agVqFCuMUceRoVGNUU2PqEXomwkVNzHSElzioNEirEb6OSSuKtB6jcB6q1dVk19EC3GqUcTgmcWmEcwnW5gi8XNbofmEaw5ZrVx/Y/rqTX554Iv5pT5cIXIyvUvKhxZAS12dYu6Nn/5qrSt+WM4QQEtyFWF4cKKXqCvdlpRRKKzxP84NuQ+IcpEbbvpXFz2LMZ7f2W+93317J/e6j1KdyXlpcFdCb+mx8U2nmhdONoUSZLS7w0UkDTxmUa7Vd10rjnENphTEWHSm8HCQ90+TqA3ipf37jUOEzofHPpdGy3CPTFwmhY8zvGWU3829aXUq4H+yaZqnrtZEsTJeYf5Pqzby0AYjGmN82v9OHOgoFH8/mM87S+4y/mFJXcB/tWKbdtNra76ZV2z/E/NFeFwr/H8lCdilbzoMd7xlkrk/8zs+Wu5ZjH63RcdsjyA4x//6C0nI+ZNyw2Z06eUy5p54Hp9utUhS2PRqza/XdbhKH05DzNM3E8qQfsWZCEc40qTbr1JsRfs3iqk1cEtOMHWa2gZ5NqejqtN1ceIzBHLaxyGnfbcIPS+hVK/CUw9QUSZy8WGhYSBqlFAv90R3vuvHD+5vfKtXOVN5ubEjOKbSLMEFC/yb14Pa3bP0vxVyfjMAkhAR3Ia6ALO9+ePNNU4ttFSaSvM+sotWcJk0grp5n+9biE+lbgk99+5FTv63TlaZY8EjTBkr7KGXxvdZQ575xaGsg18D5imBmJbGrndj+loFf2bZ1/eNJWqXVF+SyG2ClvMBrD2RBttwRGMezAFjqCKUXC3wlWk1rOgP0YBZGO+fbHT7bYf7mLOiOs/Sa4aGuYNptbzbdznD70eznyxHchzoC8cGu7fxAx3yHs0epY33pCvntbfjBBQom5Y79UO5Y9nL22u6uzwx3FLyW8j+wbGxZR23TQPAb4RF+LbW8VmvVquS2DqcV1llS5QhRNGNHoB3OKZ7KWd40G1OcqlNzETQTknpCWI2oNms0mlCspKTn6oQ3eM8VN5e+lPY40nCxy34WbfvQ+RIa8JoxibrIwUtBmjgGrrZHfmLv0L85+IXyz80cqV4T4oY9P/z7tRvXnNnyVvVnOs+JNJHcLoQEdyHEklk3/4yrojIDK+vN295e+oNGfbs5+tjEh5Nq1QtzRXy/CK6KdgmedQQ6wDcBBIa4WiOnC6fX37bmP5RudX+XJEmywPX35WK86/fR7LW7u14bZK6GuB32Lhb4hpnfQ81IR3gf7gq7+zoKCOPM1dQP07oqcP8S1mU4C/qdBYx2oWBfx3uGFwnc+7JwfTmMsXAzmLGubT7EXDebSy04DHWt83RH4aa9rwa5+OBNY1fC91Irxco+/akda8/f/J2TxWs9Wwy9sI4XBcRWk/oVTLMXF4CPj47BGcujQR9v8s7wWn2e4jmDV02opk3KdU0wa1hVn+VsJSWMTLW0Z8UfHbv26LkXGuMQLKHQr1IK9jr8pAenLh640xhWrOw76Xv1373tvQV11c26d/wr6UzjqRxhTtNMEpSWY7AQEtyFEC+d0iSxQ+uexlt/Kvm9J9dUv3p8rHB3/Yx+p/ObGBNglML3DNoZUqtJm4nrW2+e3vrG3Ad7B0r/5JrVxGmHYtkG9xJzzScWC7bDi3xu9ALTHcwC6SBzNfhjWbgcyn5vd03YnudYRwAtdYT+XYsE4d3Za0PMtVdvB/QR5m5WLWfPd7H4AEzt+Zd4eTXQ7QLNw4tMZ7zjb0MdhZvxjnU/eInz/Ej2fH/Hum9eIOR3LsMD2XxuXu5fwxRHYa3Hj8TFP3YTlV3fmfZvbXoJpSCPiyHCQ/sGG9Oq4VaKVBlSnfLImhWcjCxvPHkCU59GNX38Wo163GBysk65WD29/X07fn/11vX/MGNP0R7a6aLBnZTvu/P9IpIkxaYW7XnOy6kZZcBa293xlRBCgrsQ4uVonVyjqDRQ+setP339U6fHT/3bc0fPrqvN1O9Mm24AYzAF/9u9q4Kx0roVj2/u3fQ3K7fGkycna4k2brmv3nhXcC93BOzOUD/cFU4/cZHptt//oQVC92jHo91TzTDf37tMZ0AfZ34TkX1ZEL+LuaYno8xv5jO6QKgeY+F+zNvTPMrSavcX01n4WMxI9tidvb8d3ts3q5az9djXMc3RjmkOMr/5Uff82vunvW2HuvbnwY4CT3sE1eUb3GcjNuRhyzY1Xgr7f+Pst/xfOHaan0Q3MQUf7fm4ZLYV8b0UTYBWAdgGj62Eajhw+M1N85nVR2evmz1xaneqlDZ+Pr5q67ovbX/nms+V3zT7Z8ls4lqt55dawH7pBXHnWs3xcHJsFUKCuxDileEgiR2lq+0xr1T/8OpNRdYObL9tdirdgEUH/ebgicnnDvUOVnDH66SRuSJW656Hdo7dt+dAu7/2UhYex2l1HziWDdrTDpQf7Qje5SWG2Acu8N6xjke7Br69HN3htDPYdoZwsiDavrl1ZAmBud1l5M3Mb7ZTYvHa/aU6mE1jKUay+Rxlrp97OuZ9MFvP8a7P7e8I8ONd26IzvI+2Q3m2H7tHRh19Gev5g/vqxZYeHwJPk+vPf+EXtp/61lhBPfeFM2t/7lzMQFhJ8b0eVNAKxXG91eytN5ee375udvrOH53du7kYf63xtr4gaZzfMfFC2utv7i1vYPPTq8dXRtXkMM5Jihbi1ULJF1oI8Wp3354DQ8Bgu8vAjtc7g/PdWVj8EBfvrnGYlzYC6iDza4gHs1A7zeXvc71zXkO0au8f5OUNzlTK1n3kEj83/EqE6Hse2nnF/28eKteB1g3gj58IKUycZaa4YuXhiWT7+XL1F09Pqp+t1hLqDpyvKBUMG/tzf0Z/4a9XrPGO/Mvray+s/fTpqL4ipF44RX5Vgu33yX97gDVP93P0lqOU6gWOvWECEy2xqYxK6alfj5/0XrSNu1KaOJmk6OX4xt+e5do3Bay/RfP8lxOq382z7R2a2FmU7mXL7QU5GAnxMkmNuxDiVS8bgOdCoXikI+wuJZS+1BD6UsI+l2Feo7y8JjJtZV5aH/Sj8l+4NM5BLVaTN/VNH9jxOvPYsVn/f71QNiunrSqYvO/W9+nJQd997gvPRtG5xCO1DhxoAxvf3Eux6BmLs83+prOrYphQLN9bUIQQl0pq3IUQQgghhLgCSAdNQgghhBBCSHAXQgghhBBCSHAXQgghhBBCgrsQQgghhBBCgrsQQgghhBBCgrsQQgghhBAS3IUQQgghhBAS3IUQQgghhBAS3IUQQgghhJDgLoQQQgghhJDgLoQQQgghhAR3IYQQQgghhAR3IYQQQgghhAR3IYQQQgghJLgLIYQQQgghJLgLIYQQQgghJLgLIYQQQgghwV0IIYQQQgghwV0IIYQQQgghwV0IIYQQQggJ7kIIIYQQQggJ7kIIIYQQQkhwF0IIIYQQQkhwF0IIIYQQQkhwF0IIIYQQQoK7EEIIIYQQ4gfr/w0AP39wGF/PQHYAAAAASUVORK5CYII=';
			} else {
				$_var_91['vip_movies_theme_foot'] = advert('175');
			}
			$_var_92 = advert('41');
			if (empty($_var_92)) {
				$_var_91['app_Invitation_slogans'] = '淘米视界提醒： 内容请至[ 后台管理 ->仪表盘->设置->APP分享 邀请广告词 ]修改';
			} else {
				$_var_91['app_Invitation_slogans'] = $_var_92;
			}
			if (empty(advert('176'))) {
				$_var_91['share_Poster_template'] = 'data:image/png;base64,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';
			} else {
				$_var_91['share_Poster_template'] = advert('176');
			}
			return json(['code' => '1', 'msg' => $_var_91]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function index_eject_switch()
	{
		$_var_93 = input('key');
		if ($_var_93 == 'ikmovie.xyz') {
			$_var_94 = db('artical')->where('eject', 1)->count();
			$_var_95 = db('advert')->where('id = 30')->value('content');
			$_var_96 = db('artical')->where('eject', 1)->find();
			$_var_97['title'] = $_var_96['title'];
			$_var_97['content'] = $_var_96['content'];
			$_var_97['id'] = $_var_96['id'];
			$_var_97['picture'] = $_var_96['picture'];
			if ($_var_96['url'] == '') {
				$_var_97['url'] = $_var_95 . '/app/Artical.html?id=' . $_var_96['id'];
			} else {
				$_var_97['url'] = $_var_96['url'];
			}
			if ($_var_94) {
				$_var_98 = '1';
			} else {
				$_var_98 = '0';
			}
			return json(['code' => $_var_98, 'msg' => $_var_97]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function index_eject()
	{
		$_var_99 = input('key');
		if ($_var_99 == 'ikmovie.xyz') {
			$_var_100 = db('artical')->where('eject', 1)->limit(1)->select();
			if ($_var_100) {
				$_var_101 = '1';
			} else {
				$_var_101 = '0';
			}
			return json(['code' => $_var_101, 'msg' => $_var_100]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function index_two()
	{
		$_var_102 = input('key');
		if ($_var_102 == 'ikmovie.xyz') {
			$_var_103 = db('banner')->where('cid', 4)->limit(2)->select();
			if ($_var_103) {
				$_var_104 = '1';
			} else {
				$_var_104 = '0';
			}
			return json(['code' => $_var_104, 'msg' => $_var_103]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function index_banner_ad()
	{
		$_var_105 = input('key');
		if ($_var_105 == 'ikmovie.xyz') {
			$_var_106 = db('banner')->where('cid', 3)->limit(1)->select();
			if ($_var_106) {
				$_var_107 = '1';
			} else {
				$_var_107 = '0';
			}
			return json(['code' => $_var_107, 'msg' => $_var_106]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function index_right()
	{
		$_var_108 = input('key');
		if ($_var_108 == 'ikmovie.xyz') {
			$_var_109 = db('banner')->where('cid', 8)->limit(1)->select();
			if ($_var_109) {
				$_var_110 = '1';
			} else {
				$_var_110 = '0';
			}
			return json(['code' => $_var_110, 'msg' => $_var_109]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function category_left()
	{
		$_var_111 = input('key');
		if ($_var_111 == 'ikmovie.xyz') {
			$_var_112 = db('banner')->where('cid', 9)->order('sort asc')->limit(3)->select();
			if ($_var_112) {
				$_var_113 = '1';
			} else {
				$_var_113 = '0';
			}
			return json(['code' => $_var_113, 'msg' => $_var_112]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function category_top_pic()
	{
		$_var_114 = input('key');
		if ($_var_114 == 'ikmovie.xyz') {
			$_var_115 = db('banner')->where('cid', 10)->order('sort asc')->limit(3)->select();
			if ($_var_115) {
				$_var_116 = '1';
			} else {
				$_var_116 = '0';
			}
			return json(['code' => $_var_116, 'msg' => $_var_115]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function category_recommend()
	{
		$_var_117 = input('key');
		if ($_var_117 == 'ikmovie.xyz') {
			$_var_118 = db('banner')->where('cid', 11)->order('sort asc')->limit(6)->select();
			if ($_var_118) {
				$_var_119 = '1';
			} else {
				$_var_119 = '0';
			}
			return json(['code' => $_var_119, 'msg' => $_var_118]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function category_right()
	{
		$_var_120 = input('key');
		if ($_var_120 == 'ikmovie.xyz') {
			$_var_121 = db('banner')->where('cid', 12)->limit(1)->select();
			if ($_var_121) {
				$_var_122 = '1';
			} else {
				$_var_122 = '0';
			}
			return json(['code' => $_var_122, 'msg' => $_var_121]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function category_banner_ad()
	{
		$_var_123 = input('key');
		if ($_var_123 == 'ikmovie.xyz') {
			$_var_124 = db('banner')->where('cid', 13)->limit(1)->select();
			if ($_var_124) {
				$_var_125 = '1';
			} else {
				$_var_125 = '0';
			}
			return json(['code' => $_var_125, 'msg' => $_var_124]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function recommend_ad()
	{
		$_var_126 = input('key');
		if ($_var_126 == 'ikmovie.xyz') {
			$_var_127 = db('banner')->where('cid', 15)->limit(5)->select();
			$_var_128 = db('banner')->where('cid', 16)->limit(1)->select();
			$_var_129 = db('banner')->where('cid', 17)->limit(6)->select();
			$_var_130 = db('banner')->where('cid', 18)->limit(3)->select();
			$_var_131 = db('banner')->where('cid', 19)->limit(2)->select();
			$_var_132 = db('banner')->where('cid', 20)->limit(1)->select();
			return json(['code' => '1', 'recommend_top_ad' => $_var_127, 'recommend_banner_ad' => $_var_128, 'recommend_roll_ad' => $_var_129, 'recommend_big_picture_ad' => $_var_130, 'recommend_small_picture_ad' => $_var_131, 'recommend_text_ad' => $_var_132]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function jiexi_play_ad()
	{
		$_var_133 = input('key');
		if ($_var_133 == 'ikmovie.xyz') {
			$_var_134 = db('banner')->where('cid', 21)->order('sort asc')->limit(2)->select();
			$_var_135 = db('banner')->where('cid', 22)->order('sort asc')->limit(3)->select();
			$_var_136 = db('banner')->where('cid', 23)->order('sort asc')->limit(4)->select();
			return json(['code' => '1', 'analysis_pay_text_ad' => $_var_134, 'analysis_pay_banner_ad' => $_var_135, 'analysis_pay_three_diagram_ad' => $_var_136]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function video_play_ad()
	{
		$_var_137 = input('key');
		if ($_var_137 == 'ikmovie.xyz') {
			$_var_138 = db('banner')->where('cid', 9)->order('sort asc')->limit(2)->select();
			if ($_var_138) {
				$_var_139 = '1';
			} else {
				$_var_139 = '0';
			}
			return json(['code' => $_var_139, 'msg' => $_var_138]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function video()
	{
		if (!input('page')) {
			$_var_140 = 1;
		} else {
			$_var_140 = input('page');
		}
		if (!input('limit')) {
			$_var_141 = 10;
		} else {
			$_var_141 = input('limit');
		}
		$_var_142 = db('video')->page($_var_140)->limit($_var_141)->order('id desc')->select();
		if ($_var_142) {
			$_var_143['code'] = 1;
			$_var_143['msg'] = $_var_142;
		} else {
			$_var_143['code'] = 0;
		}
		return json($_var_143);
	}
	public function audio()
	{
		if (!input('page')) {
			$_var_144 = 1;
		} else {
			$_var_144 = input('page');
		}
		if (!input('limit')) {
			$_var_145 = 10;
		} else {
			$_var_145 = input('limit');
		}
		$_var_146 = db('audio')->page($_var_144)->limit($_var_145)->order('id desc')->select();
		if ($_var_146) {
			$_var_147['code'] = 1;
			$_var_147['msg'] = $_var_146;
		} else {
			$_var_147['code'] = 0;
		}
		return json($_var_147);
	}
	public function getAppname()
	{
		$_var_148 = input('key');
		if ($_var_148 == 'ikmovie.xyz') {
			$_var_149 = db('advert')->where('id', 21)->value('content');
			return json(['code' => '1', 'msg' => $_var_149]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function frame_two()
	{
		$_var_150 = input('key');
		$_var_151 = input('uid');
		if ($_var_150 == 'ikmovie.xyz') {
			$_var_152 = db('user')->where('id', $_var_151)->find();
			$_var_153 = db('advert')->find();
			$_var_154 = db('advert')->where('id', 80)->value('content');
			$_var_155 = db('advert')->where('id', 81)->value('content');
			$_var_156 = db('advert')->where('id', 82)->value('content');
			$_var_157 = db('advert')->where('id', 83)->value('content');
			if ($_var_154 == '') {
				$_var_158['upload_headimg_integral'] = 0;
			} else {
				$_var_158['upload_headimg_integral'] = $_var_154;
			}
			if ($_var_155 == '') {
				$_var_158['set_nickname_integral'] = 0;
			} else {
				$_var_158['set_nickname_integral'] = $_var_155;
			}
			if ($_var_156 == '') {
				$_var_158['upload_alipay_code_integral'] = 0;
			} else {
				$_var_158['upload_alipay_code_integral'] = $_var_156;
			}
			if ($_var_157 == '') {
				$_var_158['wechat_login_code_integral'] = 0;
			} else {
				$_var_158['wechat_login_code_integral'] = $_var_157;
			}
			if ($_var_151 == '') {
				$_var_158['nick_name'] = '';
				$_var_158['headimgurl'] = '';
				$_var_158['zfb'] = '';
			} else {
				$_var_158['nick_name'] = $_var_152['nick_name'];
				$_var_158['headimgurl'] = $_var_152['headimgurl'];
				$_var_158['zfb'] = $_var_152['zfb'];
			}
			return ik2021(json_encode(['code' => '1', 'msg' => $_var_158]));
		} else {
			return ik2021(json_encode(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']));
		}
	}
	public function share()
	{
		$_var_159 = input('key');
		if ($_var_159 == 'ikmovie.xyz') {
			$_var_160 = input('uid');
			$_var_161 = db('user')->where('id', $_var_160)->find();
			if ($_var_161['power'] == '0' || $_var_161['type'] == '1') {
				$_var_162 = '-1';
			} else {
				$_var_162 = $_var_161['lasttime'];
			}
			if (empty($_var_161['nick_name'])) {
				$_var_163 = '未设置昵称';
			} else {
				$_var_163 = $_var_161['nick_name'];
			}
			$_var_164 = $_var_161['share_ma'];
			$_var_165 = $_var_161['power'];
			$_var_166 = $_var_161['parentid'];
			$_var_167 = db('advert')->where('id = 30')->value('content');
			$_var_168 = db('advert')->where('id = 116')->value('content');
			$_var_169 = db('advert')->where('id = 117')->value('content');
			$_var_170 = db('advert')->where('id = 118')->value('content');
			if (empty($_var_170)) {
				$_var_171 = 'Invitation';
			} else {
				$_var_171 = $_var_170;
			}
			if ($_var_168 == '0') {
				$_var_172 = $_var_167 . '/app/index/qudao.html?uid=' . base64_encode($_var_160);
			} else {
				if ($_var_168 == '1') {
					$_var_172 = $_var_167 . '/app/index/share.html?uid=' . base64_encode($_var_160);
				} else {
					if ($_var_168 == '2') {
						$_var_172 = $_var_169 . '/?' . $_var_171 . '=' . $_var_164;
					}
				}
			}
			$_var_173 = db('advert')->where('id = 5')->value('content');
			$_var_174 = db('advert')->where('id = 34')->value('content');
			$_var_175 = db('shezi')->where('id', 1)->value('ckfa');
			$_var_176 = $_var_175 * 100;
			$_var_177 = db('shezi')->where('id', 1)->value('ckfb');
			$_var_178 = $_var_177 * 100;
			$_var_179 = db('txlog')->sum('jine');
			$_var_180 = db('txlog')->where('uid', $_var_160)->sum('jine');
			if ($_var_180 == 0) {
				$_var_181 = '0';
			} else {
				$_var_181 = $_var_180;
			}
			$_var_182 = db('user')->where('parentid', $_var_160)->count();
			$_var_183 = db('txlog')->order('id desc')->limit(50)->select();
			$_var_184['Withdrawals_record_list'] = $_var_183;
			$_var_185 = db('advert')->where('id', 40)->value('content');
			if (empty($_var_185)) {
				$_var_186 = '内容请至[ 后台管理 ->仪表盘->设置->APP 邀请页帮助/介绍信息 ]修改';
			} else {
				$_var_186 = $_var_185;
			}
			$_var_187 = db('advert')->where('id', 41)->value('content');
			if (empty($_var_187)) {
				$_var_188 = '淘米视界提醒： 内容请至[ 后台管理 ->仪表盘->设置->APP分享 邀请标语 ]修改';
			} else {
				$_var_188 = $_var_187;
			}
			return json(['code' => '1', 'msg' => $_var_184, 'host' => $_var_167, 'dwzapi' => $_var_172, 'vip_time' => $_var_162, 'user_username' => $_var_163, 'user_parentid' => $_var_166, 'Team_members' => $_var_182, 'user_power' => $_var_165, 'user_share_ma' => $_var_164, 'user_Total_Commission' => $_var_181, 'Total_Commission' => $_var_179, 'Commission_Ratio_Percentage' => $_var_176, 'Commission_Ratio_PercentageB' => $_var_178, 'Registered_Gift_Time' => $_var_173, 'Invitation_points' => $_var_174, 'app_share_help' => $_var_186, 'app_Invitation_slogans' => $_var_188]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function banner()
	{
		$_var_189 = input('uid');
		$_var_190 = input('key');
		if ($_var_190 == 'ikmovie.xyz') {
			$_var_191 = db('user')->where('id', $_var_189)->find();
			$_var_192 = $_var_191['parentid'];
			$_var_193 = db('user')->where('id', $_var_192)->value('power');
			$_var_194 = db('user')->where('id', $_var_192)->value('banner_switch');
			$_var_195 = db('advert')->where('id = 130')->value('content');
			$_var_196 = 'id desc';
			if ($_var_193 == 1 && $_var_194 == 1) {
				if ($_var_195 == 0) {
					$_var_197 = 'cid = 1 and audit=1 and user_id = 1  or user_id=' . $_var_192;
					$_var_196 = 'user_id asc';
				} else {
					if ($_var_195 == 1) {
						$_var_197 = 'cid = 1 and audit=1 and user_id = 1  or user_id=' . $_var_192;
						$_var_196 = 'user_id desc';
					} else {
						if ($_var_195 == 2) {
							$_var_197 = 'cid = 1 and audit=1 and user_id=' . $_var_192;
							$_var_196 = 'id desc';
						} else {
							if ($_var_195 == 3) {
								$_var_197 = 'cid = 1 and audit=1 and user_id=1';
								$_var_196 = 'id desc';
							}
						}
					}
				}
			} else {
				$_var_197 = 'cid = 1 and audit=1 and user_id=1';
			}
			$_var_198['banner'] = db('banner')->where($_var_197)->order($_var_196)->select();
			return json(['msg' => $_var_198]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 有疑问请联系微信 qq1207629473 ']);
		}
	}
	public function fxlunbo()
	{
		$_var_199 = db('fxlunbo')->select();
		if ($_var_199) {
			$_var_200 = '1';
		} else {
			$_var_200 = '0';
		}
		return json(['code' => $_var_200, 'msg' => $_var_199]);
	}
	public function jilu()
	{
		$_var_201 = input();
		if ($_var_201) {
			$_var_202['uid'] = $_var_201['uid'];
			$_var_202['title'] = $_var_201['title'];
			$_var_202['url'] = $_var_201['url'];
			$_var_202['time'] = time();
			$_var_202['ping'] = $_var_201['ping'];
			db('jilu')->insert($_var_202);
			return json(['code' => 1]);
		}
	}
	public function playjilu()
	{
		$_var_203 = input();
		if ($_var_203) {
			$_var_204['uid'] = $_var_203['uid'];
			$_var_204['title'] = $_var_203['title'];
			$_var_204['url'] = $_var_203['url'];
			$_var_204['time'] = time();
			$_var_204['ping'] = $_var_203['ping'];
			db('jilu')->insert($_var_204);
			return json(['code' => 1]);
		}
	}
	public function deljilu()
	{
		if (input('uid')) {
			$_var_205['uid'] = input('uid');
			db('jilu')->where($_var_205)->delete();
			return json(['code' => 1]);
		}
	}
	public function newjilu()
	{
		if (input('uid')) {
			$_var_206 = db('advert')->where('id = 46')->value('content');
			$_var_207['uid'] = input('uid');
			$_var_208 = db('jilu')->where($_var_207)->order('id desc')->limit(advert('46'))->select();
			if ($_var_208) {
				return json(['code' => 1, 'msg' => $_var_208, 'num' => $_var_206]);
			} else {
				return json(['code' => 0, 'msg' => '还什么也没有哦~', 'num' => $_var_206]);
			}
		}
	}
	public function newjilu_Ten()
	{
		if (input('uid')) {
			$_var_209['uid'] = input('uid');
			$_var_210 = db('jilu')->where($_var_209)->order('id desc')->limit(5)->select();
			if ($_var_210) {
				return json(['code' => 1, 'msg' => $_var_210]);
			} else {
				return json(['code' => 0, 'msg' => '还什么也没有哦~']);
			}
		}
	}
	public function admin_service()
	{
		$_var_211 = input('key');
		if ($_var_211 == 'ikmovie.xyz') {
			$_var_212 = 'id=1';
			$_var_213 = db('user')->where($_var_212)->value('weichat');
			$_var_214 = db('user')->where($_var_212)->value('headimgurl');
			return json(['code' => '1', 'msg' => $_var_213, 'img' => $_var_214]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 有疑问请联系微信 qq1207629473 ']);
		}
	}
	public function customer_service()
	{
		$_var_215 = input('uid');
		$_var_216 = input('key');
		if ($_var_216 == 'ikmovie.xyz') {
			$_var_217 = db('user')->where('id', $_var_215)->find();
			$_var_218 = $_var_217['parentid'];
			$_var_219 = db('user')->where('id', $_var_218)->value('power');
			$_var_220 = db('user')->where('id', $_var_218)->value('weichat');
			if ($_var_219 == 1 && $_var_220 !== '' && $_var_220 !== null) {
				$_var_221 = 'id=' . $_var_218;
			} else {
				$_var_221 = 'id=1';
			}
			$_var_222 = db('user')->where($_var_221)->value('weichat');
			$_var_223 = db('user')->where($_var_221)->value('headimgurl');
			if ($_var_223 == '') {
				$_var_224 = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAAEsCAYAAAB5fY51AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjJCN0Q4MzdGNzY3MzExRTY4NkNGQUQ0RTA2MEQxOTUyIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjJCN0Q4MzgwNzY3MzExRTY4NkNGQUQ0RTA2MEQxOTUyIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MkI3RDgzN0Q3NjczMTFFNjg2Q0ZBRDRFMDYwRDE5NTIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MkI3RDgzN0U3NjczMTFFNjg2Q0ZBRDRFMDYwRDE5NTIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5WJZVsAAAfpUlEQVR42uyd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';
			} else {
				$_var_224 = $_var_223;
			}
			return json(['code' => '1', 'msg' => $_var_222, 'img' => $_var_224]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 有疑问请联系微信 qq1207629473 ']);
		}
	}
	public function Operation_mode()
	{
		$_var_225 = input('key');
		if ($_var_225 == 'ikmovie.xyz') {
			$_var_226 = db('advert')->where('id = 1')->value('content');
			$_var_227 = db('advert')->where('id = 111')->value('content');
			if (empty($_var_227)) {
				$_var_228 = '此处内容请至 [ 后台管理 ->仪表盘->设置->会员中心无代理权限弹窗提示 ]修改';
			} else {
				$_var_228 = $_var_227;
			}
			$_var_229 = db('advert')->where('id = 112')->value('content');
			$_var_230 = db('advert')->where('id = 113')->value('content');
			if (empty($_var_230)) {
				$_var_231 = '../Ryanimg/touping/touping.jpg';
			} else {
				$_var_231 = $_var_230;
			}
			return json(['code' => '1', 'msg' => $_var_226, 'agent_upgrade_tips' => $_var_228, 'touping_switch' => $_var_229, 'touping_picture' => $_var_231]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function player_starttimes()
	{
		$_var_232 = input();
		$_var_233 = $_var_232['key'];
		$_var_234 = $_var_232['id'];
		if ($_var_233 == 'ikmovie.xyz') {
			$_var_235 = db('user')->where('id=' . $_var_234)->value('player_starttimes');
			if ($_var_235 == 1) {
				db('user')->where('id=' . $_var_234)->update(['player_starttimes' => '0']);
				return json(['code' => '1', 'msg' => '关闭记忆']);
			} else {
				if ($_var_235 == 0) {
					db('user')->where('id=' . $_var_234)->update(['player_starttimes' => '1']);
					return json(['code' => '1', 'msg' => '记忆开启']);
				} else {
					return json(['code' => '0', 'msg' => '异常 请联系管理']);
				}
			}
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function tvlist()
	{
		$_var_236 = input('key');
		if ($_var_236 == 'ikmovie.xyz') {
			$_var_237 = db('tv')->where('type', 0)->order('id desc')->select();
			if ($_var_237) {
				$_var_238 = '1';
			} else {
				$_var_238 = '0';
			}
			return json(['code' => $_var_238, 'msg' => $_var_237]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function tvlist_jh()
	{
		$_var_239 = input('key');
		if ($_var_239 == 'ikmovie.xyz') {
			$_var_240 = db('tv')->where('type', 1)->order('id desc')->select();
			if ($_var_240) {
			foreach($_var_240 as $key=>$vo){
		       if (strpos($_var_240[$key]['img'], 'http') !== false) {	
		            }
		       else{
			    $_var_240[$key]['img']='http://'.$_SERVER['HTTP_HOST']. $_var_240[$key]['img'];
		          }
	           }				
				$_var_241 = '1';
			} else {
				$_var_241 = '0';
			}
			return json(['code' => $_var_241, 'msg' => $_var_240]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function tvlist_rand()
	{
		$_var_242 = input('key');
		if ($_var_242 == 'ikmovie.xyz') {
			$_var_243 = db('tv')->where('type', 1)->order('rand()')->limit(2)->select();
			if ($_var_243) {
			 foreach($_var_243 as $key=>$vo){
		if (strpos($_var_243[$key]['img'], 'http') !== false) {	
		}
		else{
			$_var_243[$key]['img']='http://'.$_SERVER['HTTP_HOST']. $_var_243[$key]['img'];
		}
	}				
				$_var_244 = '1';
			} else {
				$_var_244 = '0';
			}
			return json(['code' => $_var_244, 'msg' => $_var_243]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function tvlist_Nine()
	{
		$_var_245 = input('key');
		if ($_var_245 == 'ikmovie.xyz') {
			$_var_246 = db('tv')->limit(9)->select();
			if ($_var_246) {
				$_var_247 = '1';
			} else {
				$_var_247 = '0';
			}
			return json(['code' => $_var_247, 'msg' => $_var_246]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function vlist_Ten()
	{
		$_var_248 = input('key');
		if ($_var_248 == 'ikmovie.xyz') {
			$_var_2499 = db('video')->order('id desc')->limit(advert('45'))->select();
			if ($_var_2499) {
			foreach($_var_2499 as $key=>$vo){
		       if (strpos($_var_2499[$key]['img'], 'http') !== false) {	
		            }
		       else{
			    $_var_2499[$key]['img']='http://'.$_SERVER['HTTP_HOST']. $_var_2499[$key]['img'];
		          }
	           }
				$_var_250 = '1';
			} else {
				$_var_250 = '0';
			}
			return json(['code' => $_var_250, 'msg' => $_var_2499]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function vlist_rand()
	{
		$_var_251 = input('key');
		if ($_var_251 == 'ikmovie.xyz') {
			$_var_252 = db('video')->order('rand()')->limit(2)->select();
			return json(['code' => '1', 'msg' => $_var_252]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function vlist_Nine()
	{
		$_var_253 = input('key');
		if ($_var_253 == 'ikmovie.xyz') {
			$_var_254 = db('video')->order('id desc')->limit(9)->select();
			if ($_var_254) {
				$_var_255 = '1';
			} else {
				$_var_255 = '0';
			}
			return json(['code' => $_var_255, 'msg' => $_var_254]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function video_secret()
	{
		$_var_256 = input('key');
		if ($_var_256 == 'ikmovie.xyz') {
			$_var_257 = db('advert')->where('id', 43)->value('content');
			if (empty($_var_257)) {
				$_var_258 = '公告请至[ 后台管理 ->仪表盘->设置->私人视频公告 ]修改';
			} else {
				$_var_258 = $_var_257;
			}
			$_var_259 = db('mn')->order('rand()')->limit(10)->select();
			if ($_var_259) {
				$_var_260 = '1';
			} else {
				$_var_260 = '0';
			}
			return json(['code' => $_var_260, 'msg' => $_var_259, 'gg' => $_var_258]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function tjlist()
	{
		$_var_261 = db('tuijian')->select();
		if ($_var_261) {
			$_var_262 = '1';
		} else {
			$_var_262 = '0';
		}
		return json(['code' => $_var_262, 'msg' => $_var_261]);
	}
	public function zhibozb()
	{
		$_var_263 = db('zhibo')->select();
		if ($_var_263) {
			$_var_264 = '1';
		} else {
			$_var_264 = '0';
		}
		return json(['code' => $_var_264, 'msg' => $_var_263]);
	}
	public function yjtx()
	{
		$_var_265 = input('key');
		if ($_var_265 == 'ikmovie.xyz') {
			$_var_266 = input('uid');
			$_var_267 = floor(input('yongjin'));
			if ($_var_267 <= 0) {
				return json(['code' => 0, 'msg' => '参数不正确,不要搞事情！用户id已记录~IP已记录~']);
			}
			$_var_268 = db('user')->where('id', $_var_266)->find();
			$_var_269 = db('shezi')->find();
			if (!$_var_268) {
				return json(['code' => 0, 'msg' => '用户不存在']);
			} else {
				if ($_var_267 < $_var_269['jbday']) {
					return json(['code' => 0, 'msg' => '提现失败 最低提现额度' . $_var_269['jbday'] . '元！']);
				}
				if ($_var_267 > $_var_268['money']) {
					return json(['code' => 0, 'msg' => '您的余额不足']);
				}
				if ($_var_268['tx'] == 1) {
					return json(['code' => 0, 'msg' => '已有提现申请正在审核']);
				} else {
					$_var_270 = $_var_268['money'];
					db('user')->where('id=' . $_var_266)->update(['tx' => '1']);
					db('user')->where('id=' . $_var_266)->update(['txje' => $_var_267]);
					db('user')->where('id=' . $_var_266)->update(['money' => $_var_270 - $_var_267]);
					return json(['code' => 1, 'msg' => '申请提现' . $_var_267 . '元现金成功！审核成功后72小时内到账！']);
				}
			}
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function exchange()
	{
		$_var_271 = input('uid');
		$_var_272 = floor(input('share'));
		if ($_var_272 % advert('4') != '0' || $_var_272 <= 0) {
			return json(['code' => 0, 'msg' => '消耗积分参数不正确']);
		}
		$_var_273 = db('user')->where('id', $_var_271)->find();
		if (!$_var_273) {
			return json(['code' => 0, 'msg' => '用户不存在']);
		}
		if ($_var_273['power'] == '0' || $_var_273['type'] == '1') {
			return json(['code' => 0, 'msg' => '您已经是永久会员，兑换失败']);
		} else {
			if ($_var_272 > $_var_273['sign']) {
				return json(['code' => 0, 'msg' => '您的积分不够']);
			} else {
				$_var_274 = $_var_273['sign'];
				$_var_275 = $_var_272 / advert('4');
				$_var_276 = 60 * 60 * 24 * $_var_275;
				$_var_273 = db('user')->where('id=' . $_var_271)->value('lasttime');
				if ($_var_273 < time()) {
					db('user')->where('id=' . $_var_271)->update(['lasttime' => time() + $_var_276]);
				} else {
					db('user')->where('id=' . $_var_271)->update(['lasttime' => $_var_273 + $_var_276]);
				}
				db('user')->where('id=' . $_var_271)->update(['sign' => $_var_274 - $_var_272]);
				return json(['code' => 1, 'msg' => '兑换成功', 'time' => db('user')->where('id=' . $_var_271)->value('lasttime')]);
			}
		}
	}
	public function veify()
	{
		$_var_277 = input();
		$_var_278 = input('key');
		if ($_var_278 == 'ikmovie.xyz') {
			$_var_277 = db('user')->where('username="' . $_var_277['username'] . '" and password ="' . md5(sha1($_var_277['passwd'])) . '" and status =1 and power =1')->find();
			if ($_var_277) {
				session('power', $_var_277['power']);
				session('user', $_var_277['id']);
				return json(['code' => '1']);
			} else {
				return json(['code' => '0']);
			}
		} else {
			return json(['code' => 9, 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function agent_code(){
		$_var_279 = input();
		if($_var_279['key']!='ikmovie.xyz'){
			return json(['code' => '0', 'msg' => '安全码错误  ']);
		}
		$_var_280 = db('user')->where('phone="' . $_var_279['username'] . '" ')->value('Source');
		$_var_281 = advert('20');
		if ($_var_280 == '微信') {
			$_var_282 = db('user')->where('phone="' . $_var_279['username'] . '" and "' . $_var_279['passwd'] . '"=' . $_var_281 . ' and status =1 and power <=1 ')->find();
		} else {
			$_var_282 = db('user')->where('username="' . $_var_279['username'] . '" and password ="' . md5(sha1($_var_279['passwd'])) . '" and status =1 and power <=1 ')->find();
		}
		if ($_var_282) {
              $code=randstring_agent($_var_279['uid']);
			  $result=sendEmail_agent($code,$_var_279['email']);
			  if($result==1){
				  $_var_361['uid']=$_var_279['uid'];
				  $_var_361['code']=$code;
				  $num=db('agentcode')->where('uid=' . $_var_279['uid'])->count();
				  if($num==0){
					 $xx=db('agentcode')->insert($_var_361);
				  }else{
					 $xx=db('agentcode')->where('uid=' . $_var_279['uid'])->update(['code' => $code]);
				  }
				 if ($xx) {
					 return json(['code' => '1']);
				 }else{ 
			return json(['code' => '3']);
				 }
			  }else{
				 return json(['code' => '3']); 
			  }
		} else {
			return json(['code' => '2']);
		}
		
		
	}
	public function agent_index(){
		$_var_279 = input();
		if($_var_279['key']!='ikmovie.xyz'){
			return json(['code' => '0', 'msg' => '安全码错误  ']);
		}
		$token1=db('agentcode')->where('uid=' . $_var_279['uid'])->value(['code']);
		if($_var_279['email']!=$token1){
			return json(['code' => '0', 'msg' => '验证码错误！']);
		}		
		$_var_280 = db('user')->where('phone="' . $_var_279['username'] . '" ')->value('Source');
		$_var_281 = advert('20');
		if ($_var_280 == '微信') {
			$_var_282 = db('user')->where('phone="' . $_var_279['username'] . '" and "' . $_var_279['passwd'] . '"=' . $_var_281 . ' and status =1 and power <=1 ')->find();
		} else {
			$_var_282 = db('user')->where('username="' . $_var_279['username'] . '" and password ="' . md5(sha1($_var_279['passwd'])) . '" and status =1 and power <=1 ')->find();
		}
		if ($_var_282) {
			session('power', $_var_282['power']);
			session('user', $_var_279['uid']);
			$xx=db('agentcode')->where('uid=' . $_var_279['uid'])->update(['code' => '']);
			return json(['code' => '1','msg'=>$_var_282['id'] ]);
		} else {
			return json(['code' => '0', 'msg' => '密码错误！']);
		}		
	}	
	public function pc_veify()
	{
		$_var_279 = input();
		$token=advert('409');
		if($_var_279['token']!=$token){
			return json(['code' => '0']);
		}
		$_var_280 = db('user')->where('phone="' . $_var_279['username'] . '" ')->value('Source');
		$_var_281 = advert('20');
		if ($_var_280 == '微信') {
			$_var_282 = db('user')->where('phone="' . $_var_279['username'] . '" and "' . $_var_279['passwd'] . '"=' . $_var_281 . ' and status =1 and power <=1 ')->find();
		} else {
			$_var_282 = db('user')->where('username="' . $_var_279['username'] . '" and password ="' . md5(sha1($_var_279['passwd'])) . '" and status =1 and power <=1 ')->find();
		}
		if ($_var_282) {
			session('power', $_var_282['power']);
			session('user', $_var_282['id']);
			return json(['code' => '1']);
		} else {
			return json(['code' => '0']);
		}
	}
	public function give_activation_code()
	{
		$_var_262 = input();
		$_var_263 = input('giveuid');
		$_var_264 = input('key');
		if ($_var_264 == 'ikmovie.xyz') {
			if (!empty($_var_262['uid']) && !empty($_var_262['dianka']) && !empty($_var_262['giveuid'])) {
				$_var_265 = db('user')->where('id', $_var_262['uid'])->count();
				if ($_var_265 == '0') {
					return json(['code' => 0, 'msg' => '用户不存在']);
				}
				$_var_266 = db('user')->where('id', $_var_262['giveuid'])->count();
				if ($_var_266 == '0') {
					return json(['code' => 0, 'msg' => '赠送人不存在']);
				}
				$_var_267 = db('dianka')->where('dianka', $_var_262['dianka'])->find();
				if (!$_var_267) {
					return json(['code' => 0, 'msg' => '激活码错误']);
				}
				if ($_var_267['y'] == '1') {
					return json(['code' => 0, 'msg' => '激活码已使用']);
				}
				if ($_var_267['uid'] != $_var_262['uid']) {
					return json(['code' => 0, 'msg' => '该激活码已赠送给 ID:' . $_var_267['uid']]);
				}
				if ($_var_262['giveuid'] == $_var_262['uid']) {
					return json(['code' => 0, 'msg' => '自己送自己是什么操作？']);
				}
				db('dianka')->where('dianka', $_var_262['dianka'])->update(['uid' => $_var_262['giveuid']]);
				db('dianka_log')->where('time', $_var_267['ctime'])->setDec('number');
				return json(['code' => '1', 'msg' => '赠送成功']);
			} else {
				return json(['code' => '0', 'msg' => '参数缺失']);
			}
		} else {
			return json(['code' => '0', 'msg' => '安全码错误,联系QQ1207629473 ']);
		}
	}
	  	public function liuy(){
      $txt = input('txt');
      if(empty($txt)){
		return json(['ok'=>0,'msg'=>'内容不能为空!']);
      }else{
        $data['ip']=$this->getIP();
        $data['txt']=$txt;
      	$if = db('liuy')->where($data)->find();
        if(!$if){
        	$data['date']=date('Y-m-d H:i:s');
        	db('liuy')->insert($data);
        	return json(['ok'=>1,'msg'=>'感谢您提交的建议反馈，我们会尽快修复或者完善！']);
        }else{
        	return json(['ok'=>0,'msg'=>'你已经提交了该建议！']);
        }
      }
      
    }
	public function activation_code()
	{
		$_var_283 = input();
		$_var_284 = input('key');
		if ($_var_284 == 'ikmovie.xyz') {
			if (!empty($_var_283['uid']) && !empty($_var_283['dianka'])) {
				$_var_285 = db('user')->where('id', $_var_283['uid'])->count();
				if ($_var_285 == '0') {
					return json(['code' => 0, 'msg' => '用户不存在']);
				}
				$_var_286 = db('dianka')->where('dianka', $_var_283['dianka'])->find();
				$_var_287 = db('user')->where('id', $_var_283['uid'])->find();
				$_var_288 = db('option')->value('daili_yue');
				$_var_289 = db('option')->value('daili_price');
				$_var_290 = advert('1');
				$_var_291 = advert('171');
				$_var_292 = advert('90');
				$_var_293 = advert('91');
				$_var_294 = advert('92');
				if ($_var_290 == '1' && $_var_291 == '1' && $_var_286['uid'] != '1') {
					return json(['code' => 0, 'msg' => '当前工作模式 该激活码不可用']);
				} else {
					if ($_var_286['type'] == '2') {
						if (!$_var_286) {
							return json(['code' => 0, 'msg' => '激活码错误']);
						}
						if ($_var_286['y'] == '1') {
							return json(['code' => 0, 'msg' => '激活码已使用']);
						}
						if ($_var_287['power'] == '1') {
							return json(['code' => 0, 'msg' => '您已是荣誉合伙人']);
						}
						db('user')->where('id', $_var_283['uid'])->update(['power' => '1']);
						db('dianka')->where('dianka', $_var_283['dianka'])->update(['y' => '1', 'yid' => $_var_283['uid'], 'stime' => time()]);
						db('user')->where('id', $_var_283['uid'])->setInc('money', $_var_288);
						if ($_var_290 == '1' && $_var_292 == '1') {
							$this->customer_rebate($_var_283['uid'], $_var_289, 1);
						}
						if ($_var_290 == '0' && advert('340') == '1' && $_var_292 == '1') {
							$this->customer_rebate($_var_283['uid'], $_var_289, 1);
						}
						if ($_var_293 == '1') {
							$_var_295 = $_var_294 * 60 * 60 * 24;
							$_var_296 = time();
							$_var_297 = db('user')->where('id', $_var_283['uid'])->value('lasttime');
							if ($_var_297 > $_var_296) {
								db('user')->where('id', $_var_283['uid'])->setInc('lasttime', $_var_295);
							} else {
								db('user')->where('id', $_var_283['uid'])->update(['lasttime' => $_var_296 + $_var_295]);
							}
						}
						return json(['code' => '8', 'msg' => '代理升级成功']);
					} else {
						if (!$_var_286) {
							return json(['code' => 0, 'msg' => '激活码错误']);
						}
						if ($_var_286['y'] == '1') {
							return json(['code' => 0, 'msg' => '激活码已使用']);
						}
						if ($_var_287['power'] == '0' || $_var_287['type'] == '1') {
							return json(['code' => 0, 'msg' => '您已是永久会员']);
						}
						$_var_298['kami'] = $_var_283['dianka'];
						$_var_299 = db('pay')->where($_var_298)->find();
						if ($_var_299) {
							db('pay')->where('kami', $_var_283['dianka'])->update(['cid' => $_var_283['uid']]);
						} else {
						}
						if ($_var_286['type'] == '1') {
							db('user')->where('id', $_var_283['uid'])->update(['type' => '1']);
							db('dianka')->where('dianka', $_var_283['dianka'])->update(['y' => '1', 'yid' => $_var_283['uid'], 'stime' => time()]);
							$_var_300 = '-1';
						} else {
							if ($_var_287['lasttime'] > time()) {
								db('user')->where('id', $_var_283['uid'])->update(['lasttime' => $_var_287['lasttime'] + $_var_286['time']]);
							} else {
								db('user')->where('id', $_var_283['uid'])->update(['lasttime' => time() + $_var_286['time']]);
							}
							db('dianka')->where('dianka', $_var_283['dianka'])->update(['y' => '1', 'yid' => $_var_283['uid'], 'stime' => time()]);
							$_var_300 = db('user')->where('id', $_var_283['uid'])->value('lasttime');
						}
						if ($_var_290 == '1') {
							$_var_301 = db('option')->where('id', 1)->find();
							if ($_var_286['name'] == '体验') {
								$_var_302 = $_var_301['vip1'];
							} else {
								if ($_var_286['name'] == '一月') {
									$_var_302 = $_var_301['vip2'];
								} else {
									if ($_var_286['name'] == '三月') {
										$_var_302 = $_var_301['vip3'];
									} else {
										if ($_var_286['name'] == '半年') {
											$_var_302 = $_var_301['vip4'];
										} else {
											if ($_var_286['name'] == '一年') {
												$_var_302 = $_var_301['vip5'];
											} else {
												if ($_var_286['name'] == '永久') {
													$_var_302 = $_var_301['vip6'];
												} else {
													return json(['code' => 9, 'msg' => '激活码信息有误']);
												}
											}
										}
									}
								}
							}
							$this->customer_rebate($_var_283['uid'], $_var_302, 2);
						}
						return json(['code' => '1', 'msg' => '充值成功', 'lasttime' => $_var_300]);
					}
				}
			} else {
				return json(['code' => '0', 'msg' => '参数缺失']);
			}
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	function getIP()
	{
		if (getenv('HTTP_CLIENT_IP')) {
			$_var_303 = getenv('HTTP_CLIENT_IP');
		} elseif (getenv('HTTP_X_FORWARDED_FOR')) {
			$_var_303 = getenv('HTTP_X_FORWARDED_FOR');
		} elseif (getenv('HTTP_X_FORWARDED')) {
			$_var_303 = getenv('HTTP_X_FORWARDED');
		} elseif (getenv('HTTP_FORWARDED_FOR')) {
			$_var_303 = getenv('HTTP_FORWARDED_FOR');
		} elseif (getenv('HTTP_FORWARDED')) {
			$_var_303 = getenv('HTTP_FORWARDED');
		} else {
			$_var_303 = $_SERVER['REMOTE_ADDR'];
		}
		return $_var_303;
	}
	public function zce()
	{
		$_var_304 = input();
		$_var_305 = db('user')->where('phone', $_var_304['phone'])->count();
		if (advert('342') == 1) {
			$_var_306 = db('user')->where('id', $_var_304['uid'])->value('power');
			if ($_var_306 == 1) {
				$_var_307['parentid'] = $_var_304['uid'];
			} else {
				$_var_307['parentid'] = db('user')->where('id', $_var_304['uid'])->value('parentid');
			}
		} else {
			$_var_307['parentid'] = $_var_304['uid'];
		}
		if ($_var_305 > 0) {
			return jsonp(['code' => 0, 'msg' => '您已领取过VIP 请下载APP登陆！']);
		} else {
			$_var_307['phone'] = $_var_304['phone'];
			$_var_307['Source'] = '分享邀请';
			$_var_307['power'] = '2';
			$_var_307['username'] = $_var_304['phone'];
			$_var_308 = $_var_304['password'];
			$_var_307['password'] = md5(sha1($_var_308));
			$_var_307['status'] = '1';
			$_var_307['ctime'] = time();
			$_var_307['logintime'] = '0';
			$_var_307['lasttime'] = time() + advert('5') * 60;
			$_var_307['sign'] = '0';
			$_var_307['money'] = '0';
			$_var_307['zfb'] = '';
			$_var_307['weichat'] = '';
			$_var_307['share_ma'] = substr(base_convert(md5(uniqid(md5(microtime(true)), true)), 16, 10), 0, 6);
			db('user')->insert($_var_307);
			return jsonp(['code' => 0, 'msg' => 'VIP 特权领取成功<br><br>请稍后下载APP登陆<br><br>登入密码：' . $_var_308]);
		}
	}
	public function money()
	{
		$_var_309 = input('id');
		$_var_310 = implode(',', array_filter(explode(',', $_var_309)));
		$_var_311 = array_filter(explode(',', input('id')));
		$_var_312 = [];
		$_var_312['uid'] = $_var_309;
		$_var_312['ctime'] = time();
		$_var_312['money'] = input('money');
		$_var_313 = db('user')->where('id', $_var_309)->value('money');
		db('user')->where('id in (' . $_var_310 . ')')->update(['money' => $_var_313 + input('money')]);
		db('moneylog')->insert($_var_312);
		$_var_314 = $this->customer_rebate($_var_309, $_var_312['money'], 1);
		if ($_var_314 == 1) {
			return '<script>alert("充值成功！请返回代理后台查看！");window.close();</script>';
		} else {
			return '<script>alert("充值失败！请返回代理后台查看！");window.close();</script>';
		}
	}
	public function Addtime()
	{
		$_var_315 = input();
		$_var_316 = input('id');
		$_var_315['uid'] = $_var_316;
		$_var_317['outtrade'] = $_var_315['outtrade'];
		$_var_317['trade'] = $_var_315['trade'];
		$_var_317['type'] = $_var_315['type'];
		$_var_317['money'] = $_var_315['money'];
		$_var_317['trade_status'] = $_var_315['trade_status'];
		$_var_317['name'] = $_var_315['name'];
		$_var_317['cid'] = $_var_315['uid'];
		$_var_317['time'] = time();
		$_var_318['outtrade'] = $_var_315['outtrade'];
		$_var_319 = db('option')->where('id', 1)->find();
		if ($_var_318) {
			$_var_320 = db('pay')->where($_var_318)->find();
			if ($_var_320['outtrade'] == $_var_315['outtrade']) {
				return json(['code' => 1, 'msg' => $_var_320['kami']]);
			}
		}
		if ($_var_315['money'] == $_var_319['vip1'] || $_var_315['money'] == $_var_319['vip2'] || $_var_315['money'] == $_var_319['vip3'] || $_var_315['money'] == $_var_319['vip4'] || $_var_315['money'] == $_var_319['vip5'] || $_var_315['money'] == $_var_319['vip6']) {
		} else {
			return json(['code' => 1, 'msg' => '订单支付金额有误，请联系客服处理']);
		}
		if ($_var_315['trade_status'] != 'TRADE_SUCCESS') {
			return json(['code' => 0, 'msg' => '支付未完成']);
		}
		if ($_var_315['money'] == $_var_319['vip1']) {
			$_var_321 = 1;
		}
		if ($_var_315['money'] == $_var_319['vip2']) {
			$_var_321 = 2;
		}
		if ($_var_315['money'] == $_var_319['vip3']) {
			$_var_321 = 3;
		}
		if ($_var_315['money'] == $_var_319['vip4']) {
			$_var_321 = 4;
		}
		if ($_var_315['money'] == $_var_319['vip5']) {
			$_var_321 = 5;
		}
		if ($_var_315['money'] == $_var_319['vip6']) {
			$_var_321 = 6;
		}
		$_var_322 = '0';
		switch ($_var_321) {
			case $_var_319['vip1']:
				$_var_323 = 7 * 60 * 60 * 24;
				$_var_324 = '体验';
				break;
			case $_var_319['vip2']:
				$_var_323 = 30 * 60 * 60 * 24;
				$_var_324 = '一月';
				break;
			case $_var_319['vip3']:
				$_var_323 = 90 * 60 * 60 * 24;
				$_var_324 = '三月';
				break;
			case $_var_319['vip4']:
				$_var_323 = 180 * 60 * 60 * 24;
				$_var_324 = '半年';
				break;
			case $_var_319['vip5']:
				$_var_323 = 365 * 60 * 60 * 24;
				$_var_324 = '一年';
				break;
			case $_var_319['vip6']:
				$_var_322 = 1;
				$_var_323 = 0;
				$_var_324 = '永久';
				break;
		}
		$_var_325 = randstring(10);
		$_var_326['uid'] = $_var_316;
		$_var_326['dianka'] = $_var_325;
		$_var_326['ctime'] = time();
		$_var_326['y'] = 0;
		$_var_326['yid'] = $_var_316;
		$_var_326['time'] = $_var_323;
		$_var_326['type'] = $_var_322;
		$_var_326['name'] = $_var_324;
		if ($_var_315) {
			$_var_317['kami'] = $_var_325;
			db('pay')->insert($_var_317);
		}
		db('dianka')->insert($_var_326);
		$_var_327 = db('user')->where('id', $_var_316)->field('lasttime')->find();
		db('user')->where('id', $_var_316)->update(['lasttime' => $_var_327['lasttime'] + $_var_323]);
		$_var_328 = [];
		$_var_328['uid'] = $_var_316;
		$_var_328['ctime'] = time();
		$_var_328['money'] = input('money');
		db('moneylog')->insert($_var_328);
		$_var_329 = $this->customer_rebate(input('id'), input('money'), 2);
		if ($_var_329 == 1) {
			return json(['code' => 1, 'msg' => $_var_325]);
		} else {
			return json(['code' => '0', 'msg' => '充值失败']);
		}
	}
	public function Movies_Search_List()
	{
		$_var_30 = input('key');
		$_var_31 = input('search_key');
		$_var_32 = 10;
		$_var_33 = input('skip') * $_var_32;
		if ($_var_30 == 'ikmovie.xyz') {
			if (!$_var_31) {
				return json(['code' => '0', 'msg' => '检索关键词为空']);
			}
			$_var_34['title'] = array('like', '%' . $_var_31 . '%');
			$_var_35['$movies'] = db('video')->order('id desc')->where($_var_34)->limit($_var_33, $_var_32)->select();
			$_var_36 = db('video')->where($_var_34)->count();
			return json(['code' => $_var_36, 'msg' => $_var_35]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}	
	public function pay()
	{
		$_var_330 = input();
		$_var_331['outtrade'] = $_var_330['outtrade'];
		$_var_331['trade'] = $_var_330['trade'];
		$_var_331['type'] = $_var_330['type'];
		$_var_331['money'] = $_var_330['money'];
		$_var_331['trade_status'] = $_var_330['trade_status'];
		$_var_331['name'] = $_var_330['name'];
		$_var_331['time'] = time();
		$_var_332['outtrade'] = $_var_330['outtrade'];
		$_var_333 = db('option')->where('id', 1)->find();
		$_var_334 = db('advert')->where('id', 28)->value('content');
		$_var_335 = mb_strwidth($_var_334);
		$_var_336 = db('advert')->where('id', 29)->value('content');
		$_var_337 = bcsub($_var_336, $_var_335);
		if ($_var_332) {
			$_var_338 = db('pay')->where($_var_332)->find();
			if ($_var_338['outtrade'] == $_var_330['outtrade']) {
				$this->dianka($_var_330,$_var_338['kami']);
				return json(['code' => 1, 'msg' => $_var_338['kami']]);
				//return $this->dianka($_var_330,$_var_338['kami']);
			}
		}
		if ($_var_330['money'] == $_var_333['vip1'] || $_var_330['money'] == $_var_333['vip2'] || $_var_330['money'] == $_var_333['vip3'] || $_var_330['money'] == $_var_333['vip4'] || $_var_330['money'] == $_var_333['vip5'] || $_var_330['money'] == $_var_333['vip6'] || $_var_330['money'] == $_var_333['daili_price']) {
		} else {
			return json(['code' => 1, 'msg' => '订单支付金额有误，请联系客服处理']);
		}
		if ($_var_330['trade_status'] != 'TRADE_SUCCESS') {
			return json(['code' => 0, 'msg' => '支付未完成']);
		}
		if ($_var_330['money'] == $_var_333['vip1']) {
			$_var_339 = 1;
		}
		if ($_var_330['money'] == $_var_333['vip2']) {
			$_var_339 = 2;
		}
		if ($_var_330['money'] == $_var_333['vip3']) {
			$_var_339 = 3;
		}
		if ($_var_330['money'] == $_var_333['vip4']) {
			$_var_339 = 4;
		}
		if ($_var_330['money'] == $_var_333['vip5']) {
			$_var_339 = 5;
		}
		if ($_var_330['money'] == $_var_333['vip6']) {
			$_var_339 = 6;
		}
		if ($_var_330['money'] == $_var_333['daili_price']) {
			$_var_339 = 7;
		}
		$_var_340 = '0';
		switch ($_var_339) {
			case 1:
				$_var_341 = 7 * 60 * 60 * 24;
				$_var_342 = '体验';
				break;
			case 2:
				$_var_341 = 30 * 60 * 60 * 24;
				$_var_342 = '一月';
				break;
			case 3:
				$_var_341 = 90 * 60 * 60 * 24;
				$_var_342 = '三月';
				break;
			case 4:
				$_var_341 = 180 * 60 * 60 * 24;
				$_var_342 = '半年';
				break;
			case 5:
				$_var_341 = 365 * 60 * 60 * 24;
				$_var_342 = '一年';
				break;
			case 6:
				$_var_340 = 1;
				$_var_341 = 0;
				$_var_342 = '永久';
				break;
			case 7:
				$_var_340 = 2;
				$_var_341 = 0;
				$_var_342 = '代理';
				break;
		}
		$_var_343 = randstring($_var_337);
		$_var_344['uid'] = $_var_330['uid'];
		$_var_344['dianka'] = $_var_343;
		$_var_344['ctime'] = time();
		$_var_344['y'] = 0;
		$_var_344['yid'] = '';
		$_var_344['time'] = $_var_341;
		$_var_344['type'] = $_var_340;
		$_var_344['name'] = $_var_342;
		if ($_var_330) {
			$_var_331['kami'] = $_var_343;
			db('dianka')->insert($_var_344);
			db('pay')->insert($_var_331);
		}
		
		//return json(['code' => 1, 'msg' => $_var_343]);
		return $this->dianka($_var_330,$_var_343);
	}
	public function dianka($data=false,$kami)
	{
			if(!$data){
				 $_var_283 = input();
			 }else{
				 $_var_283 = $data;
				 $_var_283['dianka']=$kami;
			 } 
			if (!empty($_var_283['uid']) && !empty($_var_283['dianka'])) {
				$_var_285 = db('user')->where('id', $_var_283['uid'])->count();
				if ($_var_285 == '0') {
					return json(['code' => 0, 'msg' => '用户不存在']);
				}
				$_var_286 = db('dianka')->where('dianka', $_var_283['dianka'])->find();
				$_var_287 = db('user')->where('id', $_var_283['uid'])->find();
				$_var_288 = db('option')->value('daili_yue');
				$_var_289 = db('option')->value('daili_price');
				$_var_290 = advert('1');
				$_var_291 = advert('171');
				$_var_292 = advert('90');
				$_var_293 = advert('91');
				$_var_294 = advert('92');
				if ($_var_290 == '1' && $_var_291 == '1' && $_var_286['uid'] != '1') {
					return json(['code' => 0, 'msg' => '当前工作模式 该激活码不可用']);
				} else {
					if ($_var_286['type'] == '2') {
						if (!$_var_286) {
							return json(['code' => 0, 'msg' => '激活码错误']);
						}
						if ($_var_286['y'] == '1') {
							return json(['code' => 0, 'msg' => '激活码已使用']);
						}
						if ($_var_287['power'] == '1') {
							return json(['code' => 0, 'msg' => '您已是荣誉合伙人']);
						}
						db('user')->where('id', $_var_283['uid'])->update(['power' => '1']);
						db('dianka')->where('dianka', $_var_283['dianka'])->update(['y' => '1', 'yid' => $_var_283['uid'], 'stime' => time()]);
						db('user')->where('id', $_var_283['uid'])->setInc('money', $_var_288);
						if ($_var_290 == '1' && $_var_292 == '1') {
							$this->customer_rebate($_var_283['uid'], $_var_289, 1);
						}
						if ($_var_290 == '0' && advert('340') == '1' && $_var_292 == '1') {
							$this->customer_rebate($_var_283['uid'], $_var_289, 1);
						}
						if ($_var_293 == '1') {
							$_var_295 = $_var_294 * 60 * 60 * 24;
							$_var_296 = time();
							$_var_297 = db('user')->where('id', $_var_283['uid'])->value('lasttime');
							if ($_var_297 > $_var_296) {
								db('user')->where('id', $_var_283['uid'])->setInc('lasttime', $_var_295);
							} else {
								db('user')->where('id', $_var_283['uid'])->update(['lasttime' => $_var_296 + $_var_295]);
							}
						}
						return json(['code' => '1', 'msg' => '代理升级成功']);
					} else {
						if (!$_var_286) {
							return json(['code' => 0, 'msg' => '激活码错误']);
						}
						if ($_var_286['y'] == '1') {
							return json(['code' => 1, 'msg' => '激活码已使用']);
						}
						if ($_var_287['power'] == '0' || $_var_287['type'] == '1') {
							return json(['code' => 0, 'msg' => '您已是永久会员']);
						}
						$_var_298['kami'] = $_var_283['dianka'];
						$_var_299 = db('pay')->where($_var_298)->find();
						if ($_var_299) {
							db('pay')->where('kami', $_var_283['dianka'])->update(['cid' => $_var_283['uid']]);
						} else {
						}
						if ($_var_286['type'] == '1') {
							db('user')->where('id', $_var_283['uid'])->update(['type' => '1']);
							db('dianka')->where('dianka', $_var_283['dianka'])->update(['y' => '1', 'yid' => $_var_283['uid'], 'stime' => time()]);
							$_var_300 = '-1';
						} else {
							if ($_var_287['lasttime'] > time()) {
								db('user')->where('id', $_var_283['uid'])->update(['lasttime' => $_var_287['lasttime'] + $_var_286['time']]);
							} else {
								db('user')->where('id', $_var_283['uid'])->update(['lasttime' => time() + $_var_286['time']]);
							}
							db('dianka')->where('dianka', $_var_283['dianka'])->update(['y' => '1', 'yid' => $_var_283['uid'], 'stime' => time()]);
							$_var_300 = db('user')->where('id', $_var_283['uid'])->value('lasttime');
						}
						if ($_var_290 == '1') {
							$_var_301 = db('option')->where('id', 1)->find();
							if ($_var_286['name'] == '体验') {
								$_var_302 = $_var_301['vip1'];
							} else {
								if ($_var_286['name'] == '一月') {
									$_var_302 = $_var_301['vip2'];
								} else {
									if ($_var_286['name'] == '三月') {
										$_var_302 = $_var_301['vip3'];
									} else {
										if ($_var_286['name'] == '半年') {
											$_var_302 = $_var_301['vip4'];
										} else {
											if ($_var_286['name'] == '一年') {
												$_var_302 = $_var_301['vip5'];
											} else {
												if ($_var_286['name'] == '永久') {
													$_var_302 = $_var_301['vip6'];
												} else {
													return json(['code' => 9, 'msg' => '激活码信息有误']);
												}
											}
										}
									}
								}
							}
							$this->customer_rebate($_var_283['uid'], $_var_302, 2);
						}
						return json(['code' => '1', 'msg' => $kami.'自动充值成功,若没有到账，复制卡密手动充值', 'lasttime' => $_var_300]);
					}
				}
			} else {
				return json(['code' => '0', 'msg' => '参数缺失']);
			}
	}	
	public function tongji()
	{
		$_var_345 = input();
		if ($_var_345) {
			$_var_346['os'] = $_var_345['os'];
			$_var_346['imei'] = $_var_345['imei'];
			$_var_346['uid'] = $_var_345['uid'];
			$_var_346['time'] = time();
			db('tongji')->insert($_var_346);
			return json(['code' => 1]);
		}
	}
	public function is_wechat_register()
	{
		$_var_347 = input();
		$_var_348 = input('key');
		if ($_var_348 == 'ikmovie.xyz') {
			$_var_349 = db('user')->where('username', $_var_347['username'])->count();
			if ($_var_349 > 0) {
				return json(['cun' => 1, 'msg' => '账户已存在']);
			} else {
				return json(['cun' => 0, 'msg' => '注册']);
			}
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function create()
	{
		$_var_350 = input();
		$_var_351['ip'] = $this->getIP();
		$_var_351['day'] = date('Y-m-d');
		$_var_352 = input('key');
		if ($_var_352 == 'ikmovie.xyz') {
			$_var_353 = db('user')->where('username', $_var_350['name'])->count();
			if ($_var_353 > 0) {
				return json(['code' => 10, 'cun' => 1, 'msg' => '账户已存在 请登录']);
			}
			$_var_354 = db('count')->where($_var_351)->value('count');
			if ($_var_354 >= 20) {
				return json(['code' => 0, 'msg' => '注册数量超过当天限制']);
			}
			if(advert('351') == 1){
			$_var_355 = input('share_ma');
			if ($_var_355 == '') {
				return json(['code' => 9, 'msg' => '请向邀请人索取正确邀请码']);
			} else {
				$_var_356 = db('user')->where('share_ma', $_var_350['share_ma'])->value('id');
				if (advert('342') == 1) {
					$_var_357 = db('user')->where('id', $_var_356)->value('power');
					if ($_var_357 == 1) {
						$_var_358 = $_var_356;
					} else {
						$_var_358 = db('user')->where('id', $_var_356)->value('parentid');
					}
				} else {
					$_var_358 = $_var_356;
				}
				if (!$_var_358) {
					return json(['code' => 9, 'msg' => '请向邀请人索取正确邀请码']);
				} else {
					$_var_359 = $_var_358;
				}
			}
		}else{
			$_var_359 =1;
		}
			$_var_360 = input('nick_name');
			if (!$_var_360) {
			} else {
				$_var_361['nick_name'] = $_var_350['nick_name'];
			}
			$_var_362 = input('headimgurl');
			if (!$_var_362) {
			} else {
				$_var_361['headimgurl'] = $_var_350['headimgurl'];
			}
			if ($_var_350['type'] == '微信') {
				$_var_361['sign'] = advert('83');
			} else {
				$_var_361['sign'] = '0';
			}
			$_var_361['username'] = $_var_350['name'];
			$_var_361['deviceId'] = $_var_350['deviceId'];
			$_var_361['Source'] = $_var_350['type'];
			$_var_361['password'] = md5(sha1($_var_350['password']));
			$_var_361['phone'] = input('phone', '');
			$_var_361['power'] = '2';
			$_var_361['status'] = '1';
			$_var_361['parentid'] = $_var_359;
			$_var_361['ctime'] = time();
			$_var_361['logintime'] = '0';
			$_var_361['lasttime'] = time() + advert('5') * 60;
			$_var_361['money'] = '0.00';
			$_var_361['zfb'] = '';
			$_var_361['weichat'] = '';
			$_var_361['share_ma'] = substr(base_convert(md5(uniqid(md5(microtime(true)), true)), 16, 10), 0, 6);
			$_var_363 = db('advert')->where('id = 6')->value('content');
			if ($_var_363 == '1') {
				$_var_364 = db('user')->where('deviceId', $_var_350['deviceId'])->count();
				$_var_365 = db('user')->where('deviceId', $_var_350['deviceId'])->value('username');
				$_var_366 = substr_replace($_var_365, '****', 3, 4);
				if ($_var_364 > 0) {
					return json(['code' => 0, 'msg' => '您已注册过账户' . $_var_366 . ' 请登录！']);
				}
			} else {
			}
			if (db('user')->insert($_var_361)) {
				if ($_var_354 == '') {
					db('count')->insert(['day' => date('Y-m-d'), 'count' => 1, 'ip' => $this->getIP()]);
				} else {
					if ($_var_354 == '1') {
						db('count')->where('ip="' . $this->getIP() . '" and day="' . date('Y-m-d') . '"')->update(['count' => 2]);
					}
				}
				$_var_367 = db('advert')->where('id', 34)->value('content');
				db('user')->where('id', $_var_359)->setInc('sign', $_var_367);
				return json(['code' => 1, 'msg' => '注册成功']);
			} else {
				return json(['code' => 0, 'msg' => '注册失败']);
			}
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function weixin_create()
	{
		$_var_368 = input();
		$_var_369['ip'] = $this->getIP();
		$_var_369['day'] = date('Y-m-d');
		$_var_370 = input('key');
		if ($_var_370 == 'ikmovie.xyz') {
			$_var_371 = db('user')->where('username', $_var_368['name'])->count();
			if ($_var_371 > 0) {
				return json(['code' => 10, 'cun' => 1, 'msg' => '账户已存在']);
			}
			$_var_372 = db('count')->where($_var_369)->value('count');
			if ($_var_372 >= 20) {
				return json(['code' => 0, 'msg' => '注册数量超过当天限制']);
			}
			$_var_373 = input('share_ma');
			if ($_var_373 == '') {
				return json(['code' => 9, 'msg' => '请向邀请人索取正确邀请码']);
			} else {
				$_var_374 = db('user')->where('share_ma', $_var_368['share_ma'])->value('id');
				if (advert('342') == 1) {
					$_var_375 = db('user')->where('id', $_var_374)->value('power');
					if ($_var_375 == 1) {
						$_var_376 = $_var_374;
					} else {
						$_var_376 = db('user')->where('id', $_var_374)->value('parentid');
					}
				} else {
					$_var_376 = $_var_374;
				}
				if (!$_var_376) {
					return json(['code' => 9, 'msg' => '请向邀请人索取正确邀请码']);
				} else {
					$_var_377 = $_var_376;
				}
			}
			$_var_378 = input('nick_name');
			if (!$_var_378) {
			} else {
				$_var_379['nick_name'] = $_var_368['nick_name'];
			}
			$_var_380 = input('headimgurl');
			if (!$_var_380) {
			} else {
				$_var_379['headimgurl'] = $_var_368['headimgurl'];
			}
			if ($_var_368['type'] == '微信') {
				$_var_379['sign'] = advert('83');
			} else {
				$_var_379['sign'] = '0';
			}
			$_var_379['username'] = $_var_368['name'];
			$_var_379['deviceId'] = $_var_368['deviceId'];
			$_var_379['Source'] = $_var_368['type'];
			$_var_379['password'] = md5(sha1($_var_368['password']));
			$_var_379['phone'] = input('phone', '');
			$_var_379['power'] = '2';
			$_var_379['status'] = '1';
			$_var_379['parentid'] = $_var_377;
			$_var_379['ctime'] = time();
			$_var_379['logintime'] = '0';
			$_var_379['lasttime'] = time() + advert('5') * 60;
			$_var_379['money'] = '0.00';
			$_var_379['zfb'] = '';
			$_var_379['weichat'] = '';
			$_var_379['share_ma'] = substr(base_convert(md5(uniqid(md5(microtime(true)), true)), 16, 10), 0, 6);
			$_var_381 = db('advert')->where('id = 6')->value('content');
			$_var_382 = db('advert')->where('id = 110')->value('content');
			if ($_var_382 == '1') {
				if ($_var_381 == '1') {
					$_var_383 = db('user')->where('deviceId', $_var_368['deviceId'])->count();
					$_var_384 = db('user')->where('deviceId', $_var_368['deviceId'])->value('username');
					$_var_385 = substr_replace($_var_384, '****', 3, 4);
					if ($_var_383 > 0) {
						return json(['code' => 0, 'msg' => '您已注册过账户' . $_var_385 . ' 请登录！']);
					}
				}
			} else {
			}
			if (db('user')->insert($_var_379)) {
				if ($_var_372 == '') {
					db('count')->insert(['day' => date('Y-m-d'), 'count' => 1, 'ip' => $this->getIP()]);
				} else {
					if ($_var_372 == '1') {
						db('count')->where('ip="' . $this->getIP() . '" and day="' . date('Y-m-d') . '"')->update(['count' => 2]);
					}
				}
				$_var_386 = db('advert')->where('id', 34)->value('content');
				db('user')->where('id', $_var_377)->setInc('sign', $_var_386);
				return json(['code' => 1, 'msg' => '注册成功']);
			} else {
				return json(['code' => 0, 'msg' => '注册失败']);
			}
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function veifys()
	{
		$_var_387 = input('key');
		$_var_388 = input('imei');
		$_var_389 = input('passwd');
		if ($_var_387 == 'ikmovie.xyz') {
			$_var_390 = db('option')->where('id', 1)->find();
			$_var_391['imei'] = input('imei');
			$_var_392['username'] = input('username');
			$_var_392['password'] = md5(sha1($_var_389));
			$_var_393 = db('user')->where($_var_392)->find();
			$_var_394 = db('advert')->where('id', 34)->value('content');
			if (empty($_var_393['share_ma'])) {
				$_var_395['share_ma'] = substr(base_convert(md5(uniqid(md5(microtime(true)), true)), 16, 10), 0, 6);
				db('user')->where('id', $_var_393['id'])->update($_var_395);
			}
			if ($_var_393['power'] == '0' || $_var_393['type'] == '1') {
				$_var_396['time'] = '-1';
			} else {
				$_var_396['time'] = $_var_393['lasttime'];
			}
			if (empty(advert('40'))) {
				$_var_396['app_share_help'] = '内容请至[ 后台管理 ->仪表盘->设置->APP 邀请页帮助/介绍信息 ]修改';
			} else {
				$_var_396['app_share_help'] = advert('40');
			}
			if (empty(advert('41'))) {
				$_var_396['app_Invitation_slogans'] = '淘米视界提醒： 内容请至[ 后台管理 ->仪表盘->设置->APP分享 邀请标语 ]修改';
			} else {
				$_var_396['app_Invitation_slogans'] = advert('41');
			}
			$_var_397 = db('advert')->where('id = 111')->value('content');
			if (empty(advert('111'))) {
				$_var_396['agent_upgrade_tips'] = '此处内容请至 [ 后台管理 ->仪表盘->设置->会员中心无代理权限弹窗提示 ]修改';
			} else {
				$_var_396['agent_upgrade_tips'] = advert('111');
			}
			if (empty(advert('113'))) {
				$_var_396['touping_picture'] = '../Ryanimg/touping/touping.jpg';
			} else {
				$_var_396['touping_picture'] = advert('113');
			}
			if (empty(advert('43'))) {
				$_var_396['app_secret_content'] = '公告请至[ 后台管理 ->仪表盘->设置->私人视频公告 ]修改';
			} else {
				$_var_396['app_secret_content'] = advert('43');
			}
			$_var_396['id'] = $_var_393['id'];
			$_var_396['power'] = $_var_393['power'];
			$_var_396['sign'] = $_var_393['sign'];
			$_var_396['nick_name'] = $_var_393['nick_name'];
			$_var_396['zfb'] = $_var_393['zfb'];
			$_var_396['headimgurl'] = $_var_393['headimgurl'];
			$_var_396['app_name'] = advert('21');
			$_var_396['Source'] = $_var_393['Source'];
			$_var_396['qdtime'] = $_var_393['qdtime'];
			$_var_396['money'] = $_var_393['money'];
			$_var_396['status'] = $_var_393['status'];
			$_var_396['share_ma'] = $_var_393['share_ma'];
			$_var_396['txje'] = $_var_393['txje'];
			$_var_396['player_starttimes'] = $_var_393['player_starttimes'];
			$_var_396['vip1'] = $_var_390['vip1'];
			$_var_396['vip2'] = $_var_390['vip2'];
			$_var_396['vip3'] = $_var_390['vip3'];
			$_var_396['vip4'] = $_var_390['vip4'];
			$_var_396['vip5'] = $_var_390['vip5'];
			$_var_396['vip6'] = $_var_390['vip6'];
			$_var_396['daili_price'] = $_var_390['daili_price'];
			$_var_396['app_working_mode'] = advert('1');
			$_var_396['vip_movies_theme'] = advert('7');
			$_var_396['app_secret_key'] = advert('42');
			$_var_396['index_video_num'] = advert('45');
			$_var_396['look_record_num'] = advert('46');
			$_var_396['upload_headimg_integral'] = advert('80');
			$_var_396['set_nickname_integral'] = advert('81');
			$_var_396['upload_alipay_code_integral'] = advert('82');
			$_var_396['wechat_login_code_integral'] = advert('83');
			$_var_396['agent_introduction_picture'] = advert('93');
			$_var_396['touping_switch'] = advert('112');
			$_var_396['weichat'] = db('user')->where('id', $_var_393['parentid'])->value('weichat');
			$_var_396['tudi'] = db('user')->where('parentid', $_var_393['id'])->count();
			db('user')->where('id', $_var_393['id'])->setInc('count', 1);
			db('user')->where('id', $_var_393['id'])->update(['logintime' => time()]);
			if ($_var_393) {
				if ($_var_393['status'] == 0) {
					return json(['code' => 9, 'status' => '账户违规 已禁封']);
				}
				if (advert('6') == '1') {
					$_var_398 = db('user')->where('deviceId', $_var_388)->count();
					if (empty($_var_393['deviceId'])) {
						if ($_var_398 == 0) {
							db('user')->where('id', $_var_393['parentid'])->setInc('sign', $_var_394);
							$_var_399['deviceId'] = input('imei');
							db('user')->where('username', $_var_393['username'])->update($_var_399);
						} else {
							$_var_400 = db('user')->where('deviceId', $_var_388)->value('username');
							$_var_401 = substr_replace($_var_400, '****', 3, 4);
							return json(['code' => 8, 'status' => '该设备已绑定账户：' . $_var_401]);
						}
					}
				} else {
					db('user')->where('id', $_var_393['parentid'])->setInc('sign', $_var_394);
				}
				db('user')->where('username', $_var_393['username'])->update($_var_391);
				return json(['code' => '1', 'msg' => $_var_396]);
			} else {
				return json(['code' => '0', 'msg' => '错误']);
			}
		} else {
			return json(['code' => '3', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function update()
	{
		$_var_402 = input();
		$_var_403['id'] = $_var_402['uid'];
		$_var_404 = input('key');
		if ($_var_404 == 'ikmovie.xyz') {
			$_var_405 = db('user')->where($_var_403)->count();
			if ($_var_405 == '0') {
				return json(['code' => 0, 'msg' => '用户不存在']);
			}
			$_var_403['password'] = md5(sha1($_var_402['old']));
			$_var_406 = db('user')->where($_var_403)->count();
			if ($_var_406 == '0') {
				return json(['code' => 0, 'msg' => '原密码不正确']);
			}
			if ($_var_402['password']) {
				$_var_407['password'] = md5(sha1($_var_402['password']));
				$_var_408 = db('user')->where('id', input('uid'))->value('password');
				if ($_var_408 != md5(sha1(input('password')))) {
					db('pass_log')->insert(['ip' => getIP(), 'ctime' => time(), 'uid' => input('uid'), 'aid' => input('uid'), 'old_pass' => $_var_408, 'pass' => md5(sha1(input('password'))), 'web' => 1]);
				}
				db('user')->where('id', $_var_402['uid'])->update($_var_407);
			}
			return json(['code' => 1, 'msg' => '修改成功']);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function repass()
	{
		$_var_409 = input();
		$_var_410 = input('key');
		if ($_var_410 == 'ikmovie.xyz') {
			$_var_411 = db('user')->where('id', $_var_409['uid'])->value('Source');
			if ($_var_411 == '微信') {
				return json(['code' => 0, 'msg' => '微信快捷登录用户不可修改密码']);
			}
			$_var_412 = db('user')->where('username', $_var_409['username'])->count();
			if ($_var_412 == '0') {
				return json(['code' => 0, 'msg' => '用户不存在']);
			}
			$ikmovie = db('user')->where('username', input('username'))->value('id');
			if($ikmovie==1){
				$ip=getIP();
				return json(['code' => '9', 'msg' => '尝试非法修改管理员密码，你的IP已被记录，你的IP是:'.$ip]);
			}
			if ($_var_409['password']) {
				$_var_413['password'] = md5(sha1($_var_409['password']));
				$_var_414 = db('user')->where('username', input('username'))->value('password');
				if ($_var_414 != md5(sha1(input('password')))) {
					db('pass_log')->insert(['ip' => getIP(), 'ctime' => time(), 'uid' => input('username'), 'aid' => input('username'), 'old_pass' => $_var_414, 'pass' => md5(sha1(input('password'))), 'web' => 1]);
				}
				db('user')->where('username', $_var_409['username'])->update($_var_413);
				return json(['code' => 1, 'msg' => '修改成功!请重新登陆']);
			}
		} else {
			return json(['code' => '9', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function Get_price()
	{
		$_var_415 = input('key');
		$_var_416 = input('uid');
		if ($_var_415 == 'ikmovie.xyz') {
			$_var_417 = db('option')->where('id', 1)->find();
			$_var_418 = db('user')->where('id', $_var_416)->find();
			if ($_var_418['power'] == '0' || $_var_418['type'] == '1') {
				$_var_419['time'] = '-1';
			} else {
				$_var_419['time'] = $_var_418['lasttime'];
			}
			$_var_420 = db('advert')->where('id', 4)->value('content');
			$_var_419['vip1'] = $_var_417['vip1'];
			$_var_419['vip2'] = $_var_417['vip2'];
			$_var_419['vip3'] = $_var_417['vip3'];
			$_var_419['vip4'] = $_var_417['vip4'];
			$_var_419['vip5'] = $_var_417['vip5'];
			$_var_419['vip6'] = $_var_417['vip6'];
			$_var_419['sign'] = $_var_418['sign'];
			$_var_419['Proportion'] = $_var_420;
			return json(['code' => '1', 'msg' => $_var_419]);
		} else {
			return json(['code' => '3', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function upgrade_vip()
	{
		$_var_421 = input('key');
		$_var_422 = input('uid');
		if ($_var_421 == 'ikmovie.xyz') {
			$_var_423 = db('user')->where('id', $_var_422)->find();
			$_var_424 = db('option')->where('id', 1)->find();
			$_var_425['sign'] = $_var_423['sign'];
			if (empty($_var_423['nick_name'])) {
				$_var_425['username'] = $_var_423['username'];
			} else {
				$_var_425['username'] = $_var_423['nick_name'];
			}
			if (empty($_var_423['headimgurl'])) {
				$_var_425['headimgurl'] = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAAEsCAYAAAB5fY51AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjJCN0Q4MzdGNzY3MzExRTY4NkNGQUQ0RTA2MEQxOTUyIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjJCN0Q4MzgwNzY3MzExRTY4NkNGQUQ0RTA2MEQxOTUyIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MkI3RDgzN0Q3NjczMTFFNjg2Q0ZBRDRFMDYwRDE5NTIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MkI3RDgzN0U3NjczMTFFNjg2Q0ZBRDRFMDYwRDE5NTIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5WJZVsAAAfpUlEQVR42uyd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';
			} else {
				$_var_425['headimgurl'] = $_var_423['headimgurl'];
			}
			$_var_426 = db('advert')->where('id', 29)->value('content');
			$_var_427 = db('advert')->where('id', 1)->value('content');
			if ($_var_423['parentid'] == 1) {
				$_var_428 = $_var_424['faka_vip1'];
			} else {
				$_var_428 = db('user')->where('id', $_var_423['parentid'])->value('url');
			}
			$_var_429 = db('advert')->where('id', 93)->value('content');
			$_var_425['agent_introduction_picture'] = $_var_429;
			$_var_425['vip1'] = $_var_424['vip1'];
			$_var_425['vip2'] = $_var_424['vip2'];
			$_var_425['vip3'] = $_var_424['vip3'];
			$_var_425['vip4'] = $_var_424['vip4'];
			$_var_425['vip5'] = $_var_424['vip5'];
			$_var_425['vip6'] = $_var_424['vip6'];
			$_var_425['vip6'] = $_var_424['vip6'];
			$_var_425['faka_vip1'] = $_var_424['faka_vip1'];
			$_var_425['faka_vip2'] = $_var_424['faka_vip2'];
			$_var_425['faka_vip3'] = $_var_424['faka_vip3'];
			$_var_425['faka_vip4'] = $_var_424['faka_vip4'];
			$_var_425['faka_vip5'] = $_var_424['faka_vip5'];
			$_var_425['faka_vip6'] = $_var_424['faka_vip6'];
			$_var_425['faka_vip6'] = $_var_424['faka_vip6'];
			$_var_425['faka_agent'] = $_var_424['faka_agent'];
			$_var_425['pay'] = $_var_424['pay'];
			$_var_425['d_pay'] = $_var_424['d_pay'];
			$_var_425['daili_price'] = $_var_424['daili_price'];
			$_var_425['kami_length'] = $_var_426;
			$_var_425['app_working_mode'] = $_var_427;
			$_var_425['parentid'] = $_var_423['parentid'];
			$_var_425['daili_faka'] = $_var_428;
			return json(['code' => '1', 'msg' => $_var_425]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function yzcode()
	{
		$_var_430 = input();
		$_var_431['key'] = input('key');
		$_var_432['username'] = $_var_430['username'];
		$_var_433 = db('user')->where($_var_432)->count();
		if ($_var_433 == '0') {
			return json(['code' => 0, 'msg' => '用户不存在']);
		}
		if ($_var_430) {
			db('user')->where('username', $_var_430['username'])->update($_var_431);
			return json(['code' => 1, 'msg' => '成功']);
		}
	}
	public function Parsing_interface()
	{
		$_var_434 = input('uid');
		$_var_435 = input('key');
		if ($_var_435 == 'ikmovie.xyz') {
			$_var_436['id'] = $_var_434;
			$_var_437 = db('user')->where($_var_436)->find();
			$_var_438['imei'] = $_var_437['imei'];
			$_var_438['url1'] = advert('8');
			$_var_438['url2'] = advert('9');
			$_var_438['url3'] = advert('10');
			$_var_438['url4'] = advert('11');
			$_var_438['url5'] = advert('12');
			$_var_438['url6'] = advert('13');
			$_var_438['url7'] = advert('14');
			$_var_438['url8'] = advert('15');
			$_var_438['url9'] = advert('16');
			$_var_438['url1_name'] = advert('208');
			$_var_438['url2_name'] = advert('209');
			$_var_438['url3_name'] = advert('210');
			$_var_438['url4_name'] = advert('211');
			$_var_438['url5_name'] = advert('212');
			$_var_438['url6_name'] = advert('213');
			$_var_438['url7_name'] = advert('214');
			$_var_438['url8_name'] = advert('215');
			$_var_438['url9_name'] = advert('216');
			$_var_438['app_name'] = advert('21');
			return json(['code' => '1', 'msg' => $_var_438]);
			if ($_var_437) {
				return json(['code' => '1', 'msg' => $_var_438]);
			} else {
				return json(['code' => '1', 'msg' => $_var_438]);
			}
		} else {
			return json(['code' => '0', 'msg' => '安全码错误']);
		}
	}
	public function jiexijk()
	{
		$_var_439 = input('key');
		if ($_var_439 == 'ikmovie.xyz') {
			return json(['url1' => advert('8'), 'url2' => advert('9'), 'url3' => advert('10'), 'url4' => advert('11'), 'url5' => advert('12'), 'url6' => advert('13'), 'url7' => advert('14'), 'url8' => advert('15'), 'url9' => advert('16'), 'url1_name' => advert('208'), 'url2_name' => advert('209'), 'url3_name' => advert('210'), 'url4_name' => advert('211'), 'url5_name' => advert('212'), 'url6_name' => advert('213'), 'url7_name' => advert('214'), 'url8_name' => advert('215'), 'url9_name' => advert('216')]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误']);
		}
	}
	public function sign()
	{
		$_var_440 = input();
		$_var_441['id'] = $_var_440['uid'];
		$_var_440 = db('user')->where($_var_441)->find();
		$_var_442 = input('key');
		if ($_var_442 == 'ikmovie.xyz') {
			if ($_var_440['power'] == '0' || $_var_440['type'] == '1') {
				$_var_443['time'] = '-1';
			} else {
				$_var_443['time'] = $_var_440['lasttime'];
			}
			$_var_443['yongjinsu'] = db('rebate')->where('get_id', $_var_440['id'])->sum('money');
			$_var_443['player_starttimes'] = $_var_440['player_starttimes'];
			$_var_443['shiyong'] = advert('5');
			$_var_443['zfb'] = $_var_440['zfb'];
			$_var_443['qdtime'] = $_var_440['qdtime'];
			$_var_443['headimgurl'] = $_var_440['headimgurl'];
			$_var_443['power'] = $_var_440['power'];
			$_var_443['share'] = $_var_440['sign'];
			$_var_443['Source'] = $_var_440['Source'];
			$_var_443['share_ma'] = $_var_440['share_ma'];
			$_var_443['parentid'] = $_var_440['parentid'];
			if (advert('1') == 0 && advert('341') == 2) {
				$_var_444['uid'] = $_var_440['id'];
				$_var_444['status'] = 0;
				$_var_445 = db('txlog')->where($_var_444)->sum('jine');
				$_var_446['get_id'] = $_var_440['id'];
				$_var_447 = db('rebate')->where($_var_446)->sum('money');
				$_var_448 = $_var_447 - $_var_445;
				$_var_447 = $_var_448;
				if ($_var_447 == null) {
					$_var_443['money'] = '0';
				} else {
					$_var_443['money'] = $_var_447;
				}
			} else {
				$_var_443['money'] = $_var_440['money'];
			}
			$_var_443['txje'] = $_var_440['txje'];
			$_var_449 = $_var_440['id'];
			$_var_450 = db('user')->where('parentid', $_var_440['id'])->count();
			$_var_451 = db('user')->where('parentid', $_var_440['id'])->order('id desc')->select();
			$_var_443['tudilist'] = $_var_451;
			$_var_443['tudi'] = $_var_450;
			$_var_443['nick_name'] = $_var_440['nick_name'];
			db('user')->where('id', $_var_440['id'])->setInc('count', 1);
			db('user')->where('id', $_var_440['id'])->update(['logintime' => time()]);
			$_var_452 = db('user')->where('id', $_var_440['id'])->value('status');
			if ($_var_452 == 0) {
				return ik2021(json_encode(['code' => 9, 'status' => '您的账户违规', 'msg' => $_var_443]));
			}
			if ($_var_440) {
				return ik2021(json_encode(['code' => '1', 'msg' => $_var_443]));
			} else {
				return ik2021(json_encode(['code' => '0']));
			}
		} else {
			return ik2021(json_encode(['code' => '0', 'msg' => '安全码错误 请联系微信 qq1207629473 ']));
		}
	}
	//replacement_attribution
     public function replacement_attribution(){
		$_var_434 = input('uid');
		$_var_435 = input('key');
		$_var_436 = input('invitation_code');		
		if ($_var_435 == 'ikmovie.xyz') {
			$_var_450 = db('user')->where('share_ma', $_var_436)->count();
			if($_var_450==0){
			return json(['code' => '0', 'msg' => '邀请码不存在']);	
			}else{
				$_var_356 = db('user')->where('share_ma', $_var_436)->value('id');
				if($_var_356=1){
				$jifen=advert('34');
				$_var_456 = db('user')->where('share_ma', $_var_436)->value('id');
				db('user')->where('id', $_var_434)->update(['parentid' => $_var_456]);
				db('user')->where('id', $_var_456)->setInc('sign', $jifen);
				return json(['code' => '1', 'msg' => '绑定上级成功！']);
			}else{
				return json(['code' => '0', 'msg' => '请勿重复绑定！']);
			}
			}
		}else {
			return json(['code' => '0', 'msg' => '安全码错误']);
		}		
}
	public function tixianlog()
	{
		$_var_453 = input();
		$_var_454['uid'] = $_var_453['uid'];
		$_var_453 = db('txlog')->where($_var_454)->find();
		$_var_455 = $_var_453['uid'];
		$_var_456 = db('txlog')->where('uid', $_var_453['uid'])->count();
		$_var_457 = db('txlog')->where('uid', $_var_453['uid'])->order('time desc')->select();
		$_var_458['tixianlist'] = $_var_457;
		$_var_458['tixiancishu'] = $_var_456;
		return json(['code' => '1', 'msg' => $_var_458]);
	}
	//
	public function activation_code_srarch()
	{
		$data=input();
		if($data['key'] == 'ikmovie.xyz'){
			$_var_464 = db('dianka')->where('uid', $data['uid'])->where('dianka', $data['dianka'])->find();
			if($_var_464){
			if($_var_464['y'] == 1){
				if($_var_464['yid'] == 0){
                      return json(['code' => 999, 'msg' => '后台使用！']);
				}else{
				$arr['y_time']=$_var_464['stime'];
				$arr['y_user_username']=db('user')->where('id', $_var_464['yid'])->value('username');
				$arr['y_headimgurl']=db('user')->where('id', $_var_464['yid'])->value('headimgurl');
				return json(['code' => 1, 'data' => $arr]);					
				}
			}else{
				return json(['code' => 1, 'data' => '未使用']);
			}
			}else{
				return json(['code' => 999, 'msg' => '激活码不存在或不是您的']);
			}
		}else{
			return json(['code' => 999, 'msg' => '安全码错误 请联系微信 qq1207629473 ']);
		}
	}
	public function gokalog()
	{
		$_var_459 = input();
		$_var_460 = $_var_459['key'];
		if ($_var_460 == 'ikmovie.xyz') {
			$_var_461['uid'] = $_var_459['uid'];
			$_var_459 = db('dianka')->where($_var_461)->find();
			$_var_462 = $_var_459['uid'];
			$_var_463 = db('dianka')->where('uid', $_var_459['uid'])->count();
			$_var_464 = db('dianka')->where('uid', $_var_459['uid'])->where('y',0)->count();
			$_var_465['yxsuj'] = $_var_464;
			$data['y']= 0;
			$data['uid']=$_var_459['uid'];
			$_var_466 = db('dianka')->where($data)->order('ctime desc')->select();
			$_var_465['gokalist'] = $_var_466;
			$_var_465['gokasu'] = $_var_463;
			return json(['code' => '1', 'msg' => $_var_465]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误']);
		}
	}
	public function gokalogy()
	{
		$_var_459 = input();
		$_var_460 = $_var_459['key'];
		if ($_var_460 == 'ikmovie.xyz') {
			$_var_461['uid'] = $_var_459['uid'];
			$_var_459 = db('dianka')->where($_var_461)->find();
			$_var_462 = $_var_459['uid'];
			$_var_463 = db('dianka')->where('uid', $_var_459['uid'])->count();
			$_var_464 = db('dianka')->where('uid', $_var_459['uid'])->where('y',0)->count();
			$_var_465['yxsuj'] = $_var_464;
			$data['y']= 1;
			$data['uid']=$_var_459['uid'];
			$_var_466 = db('dianka')->where($data)->order('ctime desc')->select();
			$_var_465['gokalist'] = $_var_466;
			$_var_465['gokasu'] = $_var_463;
			return json(['code' => '1', 'msg' => $_var_465]);
		} else {
			return json(['code' => '0', 'msg' => '安全码错误']);
		}
	}
	public function yongjinlog()
	{
		$_var_467 = input();
		$_var_468 = $_var_467['key'];
		$_var_469['get_id'] = $_var_467['uid'];
		if ($_var_468 == 'ikmovie.xyz') {
			$_var_467 = db('rebate')->where($_var_469)->find();
			$_var_470 = $_var_467['get_id'];
			$_var_471 = db('rebate')->where('get_id', $_var_467['get_id'])->sum('money');
			$_var_472 = db('rebate')->where('get_id', $_var_467['get_id'])->order('time desc')->select();
			$_var_473['yongjinlist'] = $_var_472;
			$_var_473['yongjinsu'] = $_var_471;
			if ($_var_472) {
				return json(['code' => '1', 'msg' => $_var_473]);
			} else {
				return json(['code' => '9', 'ts' => '需要加油哦~', 'msg' => $_var_473]);
			}
		} else {
			return json(['code' => '0', 'msg' => '安全码错误']);
		}
	}
	public function yue()
	{
		$_var_474 = input();
		$_var_475['id'] = $_var_474['uid'];
		$_var_474 = db('user')->where($_var_475)->find();
		if ($_var_474['power'] == '0' || $_var_474['type'] == '1') {
			$_var_476['time'] = '-1';
		} else {
			$_var_476['time'] = $_var_474['lasttime'];
			$_var_476['shiyong'] = advert('5');
		}
		$_var_476['share'] = $_var_474['money'];
		if ($_var_474) {
			return json(['code' => '1', 'msg' => $_var_476]);
		} else {
			return json(['code' => '0']);
		}
	}
	public function dologin()
	{
		session(null);
		$this->redirect('login/index');
	}
	public function nickname_Ryan()
	{
		$_var_477 = input();
		$_var_478 = $_var_477['key'];
		if ($_var_478 == 'ikmovie.xyz') {
			$_var_477['id'] = $_var_477['uid'];
			$_var_477['nickname'] = $_var_477['nickname'];
			$_var_479 = db('advert')->where('id = 81')->value('content');
			$_var_480 = db('user')->where('id', $_var_477['id'])->find();
			if ($_var_479 == '') {
			} else {
				if ($_var_480['nick_name'] == '') {
					db('user')->where('id', $_var_477['id'])->setInc('sign', $_var_479);
				}
			}
			db('user')->where('id', $_var_477['id'])->update(['nick_name' => $_var_477['nickname']]);
			if ($_var_477) {
				return json(['code' => '1', 'msg' => '修改成功']);
			} else {
				return json(['code' => '0']);
			}
		} else {
			return json(['code' => '0', 'msg' => '安全码错误']);
		}
	}
	public function weixincz()
	{
		$_var_481 = input();
		$_var_481['id'] = $_var_481['uid'];
		$_var_481['winxin'] = $_var_481['weichat'];
		db('user')->where('id', $_var_481['id'])->update(['weichat' => $_var_481['winxin']]);
		if ($_var_481) {
			return json(['code' => '1']);
		} else {
			return json(['code' => '0']);
		}
	}
	public function qiand()
	{
		$_var_482 = input();
		$_var_483 = $_var_482['key'];
		if ($_var_483 == 'ikmovie.xyz') {
			$_var_482['id'] = $_var_482['uid'];
			$_var_484 = db('user')->where('id', $_var_482['id'])->value('qdtime');
			$_var_485 = time();
			$_var_486 = $_var_485 - $_var_484;
			$_var_487 = rand(advert('2'), advert('3'));
			$_var_486 = $_var_486 / 3600;
			if ($_var_486 >= 10) {
				db('user')->where('id', $_var_482['id'])->update(['qdtime' => time()]);
			} else {
				return json(['code' => '0']);
			}
			db('user')->where('id', $_var_482['id'])->setInc('sign', $_var_487);
			if ($_var_482) {
				return json(['code' => '1', 'msg' => $_var_487]);
			} else {
				return json(['code' => '0']);
			}
		} else {
			return json(['code' => '0', 'msg' => '安全码错误']);
		}
	}
	public function customer_rebate($_var_488 = '', $_var_489 = '', $_var_490 = '')
	{
		$_var_491 = '';
		$_var_492 = db('user')->where('id', $_var_488)->field('parentid')->find();
		if ($_var_492['parentid'] == 1) {
			$_var_491 = 0;
			return $_var_491;
		}
		$_var_493 = db('user')->where('id', $_var_492['parentid'])->value('money');
		$_var_494 = db('user')->where('id', $_var_492['parentid'])->value('power');
		$_var_495 = db('user')->where('id', $_var_492['parentid'])->field('parentid')->find();
		$_var_496 = db('user')->where('id', $_var_495['parentid'])->value('money');
		$_var_497 = db('user')->where('id', $_var_495['parentid'])->value('power');
		$_var_498 = db('shezi')->find();
		if ($_var_495['parentid'] == 1) {
			if ($_var_490 == 1) {
				Db::startTrans();
				try {
					if ($_var_492) {
						if ($_var_494 == 1) {
							$_var_499 = $_var_498['dljba'];
							$_var_500 = '代理升级 一级奖励 高级';
						} else {
							if ($_var_494 == 2) {
								$_var_499 = $_var_498['dljbc'];
								$_var_500 = '代理升级 一级奖励 初级';
							}
						}
						db('user')->where('id', $_var_492['parentid'])->update(['money' => $_var_493 + $_var_489 * $_var_499]);
						db('rebate')->data(['get_id' => $_var_492['parentid'], 'give_id' => $_var_488, 'money' => $_var_489 * $_var_499, 'info' => $_var_500, 'time' => time()])->insert();
					}
					Db::commit();
					$_var_491 = 1;
					return $_var_491;
				} catch (\Exception $_var_501) {
					Db::rollback();
					$_var_491 = 0;
					return $_var_491;
				}
			} elseif ($_var_490 == 2) {
				Db::startTrans();
				try {
					if ($_var_492) {
						if ($_var_494 == 1) {
							$_var_499 = $_var_498['ckfa'];
							$_var_500 = '用户升级 一级奖励 高级';
						} else {
							if ($_var_494 == 2) {
								$_var_499 = $_var_498['ckfc'];
								$_var_500 = '用户升级 一级奖励 初级';
							}
						}
						db('user')->where('id', $_var_492['parentid'])->update(['money' => $_var_493 + $_var_489 * $_var_499]);
						$_var_502 = ['get_id' => $_var_492['parentid'], 'give_id' => $_var_488, 'money' => $_var_489 * $_var_499, 'info' => $_var_500, 'time' => time()];
						db('rebate')->insert($_var_502);
					}
					Db::commit();
					$_var_491 = 1;
					return $_var_491;
				} catch (\Exception $_var_501) {
					Db::rollback();
					$_var_491 = 0;
					return $_var_491;
				}
			} else {
				$_var_491 = 0;
				return $_var_491;
			}
		} else {
			if ($_var_490 == 1) {
				Db::startTrans();
				try {
					if ($_var_492) {
						if ($_var_494 == 1) {
							$_var_499 = $_var_498['dljba'];
							$_var_500 = '代理升级 一级奖励 高级';
						} else {
							if ($_var_494 == 2) {
								$_var_499 = $_var_498['dljbc'];
								$_var_500 = '代理升级 一级奖励 初级';
							}
						}
						db('user')->where('id', $_var_492['parentid'])->update(['money' => $_var_493 + $_var_489 * $_var_499]);
						db('rebate')->data(['get_id' => $_var_492['parentid'], 'give_id' => $_var_488, 'money' => $_var_489 * $_var_499, 'info' => $_var_500, 'time' => time()])->insert();
					}
					if ($_var_495) {
						if ($_var_497 == 1) {
							$_var_499 = $_var_498['dljbb'];
							$_var_500 = '代理升级 二级奖励 高级';
						} else {
							if ($_var_497 == 2) {
								$_var_499 = $_var_498['dljbd'];
								$_var_500 = '代理升级 二级奖励 初级';
							}
						}
						db('user')->where('id', $_var_495['parentid'])->update(['money' => $_var_496 + $_var_489 * $_var_499]);
						db('rebate')->data(['get_id' => $_var_495['parentid'], 'give_id' => $_var_488, 'money' => $_var_489 * $_var_499, 'info' => $_var_500, 'time' => time()])->insert();
					}
					Db::commit();
					$_var_491 = 1;
					return $_var_491;
				} catch (\Exception $_var_501) {
					Db::rollback();
					$_var_491 = 0;
					return $_var_491;
				}
			} elseif ($_var_490 == 2) {
				Db::startTrans();
				try {
					if ($_var_492) {
						if ($_var_494 == 1) {
							$_var_499 = $_var_498['ckfa'];
							$_var_500 = '用户升级 一级奖励 高级';
						} else {
							if ($_var_494 == 2) {
								$_var_499 = $_var_498['ckfc'];
								$_var_500 = '用户升级 一级奖励 初级';
							}
						}
						db('user')->where('id', $_var_492['parentid'])->update(['money' => $_var_493 + $_var_489 * $_var_499]);
						db('rebate')->data(['get_id' => $_var_492['parentid'], 'give_id' => $_var_488, 'money' => $_var_489 * $_var_499, 'info' => $_var_500, 'time' => time()])->insert();
					}
					if ($_var_495) {
						if ($_var_497 == 1) {
							$_var_499 = $_var_498['ckfb'];
							$_var_500 = '用户升级 二级奖励 高级';
						} else {
							if ($_var_497 == 2) {
								$_var_499 = $_var_498['ckfd'];
								$_var_500 = '用户升级 二级奖励 初级';
							}
						}
						db('user')->where('id', $_var_495['parentid'])->update(['money' => $_var_496 + $_var_489 * $_var_499]);
						db('rebate')->data(['get_id' => $_var_495['parentid'], 'give_id' => $_var_488, 'money' => $_var_489 * $_var_499, 'info' => $_var_500, 'time' => time()])->insert();
					}
					Db::commit();
					$_var_491 = 1;
					return $_var_491;
				} catch (\Exception $_var_501) {
					Db::rollback();
					$_var_491 = 0;
					return $_var_491;
				}
			} else {
				$_var_491 = 0;
				return $_var_491;
			}
		}
	}
	public function Ryanerror()
	{
		return view('Ryanerror');
	}

}