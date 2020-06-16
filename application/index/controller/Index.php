<?php

//decode by http://ikmovie.xyz/
namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Session;
use app\index\controller\SuncommonRyan;
class Index extends SuncommonRyan
{
	public function _initialize()
	{
		$_var_0 = session('user');
		if (!$_var_0) {
			$this->redirect('login/login/ikmovie');
		}
	}
	public function index()
	{
		$_var_1 = db('advert')->where('id', 21)->value('content');
		if (empty($_var_1)) {
			$_var_2 = '完美网服';
		} else {
			$_var_2 = $_var_1;
		}
		if (session('power') == '1') {
			$_var_3 = db('user')->where('power = 2 and parentid = ' . session('user'))->count();
			$_var_4 = db('user')->where('power = 1 and parentid = ' . session('user'))->count();
			$_var_5 = db('user')->where('id', session('user'))->value('money');
			$_var_6 = db('dianka')->where('uid', session('user'))->count();
			$_var_7 = db('dianka')->where('y = 1 and uid = ' . session('user'))->count();
			$_var_8 = db('dianka')->where('y = 0 and uid = ' . session('user'))->count();
			return view('agent', ['money' => $_var_5, 'all_Activation_code' => $_var_6, 'yy_Activation_code' => $_var_7, 'wy_Activation_code' => $_var_8, 'user_count' => $_var_3, 'app_name' => $_var_2, 'agent_count' => $_var_4]);
		} else {
			$_var_9 = db('user')->where('(power = 1 or power =2) and logintime >' . strtotime(date('Y-m-d')))->count();
			$_var_10 = db('user')->where('power = 1')->count();
			$_var_11 = db('user')->where('power = 2')->count();
			$_var_12 = db('dianka')->where('yid>1')->count('distinct(yid)');
			$_var_13 = db('user')->where('tx = 1')->count();
			$_var_14 = session('user');
			$_var_15 = db('advert')->where('id', 48)->value('content');
			$_var_16 = db('advert')->where('id', 47)->value('content');
			$_var_17 = db('user')->alias('u')->join('timelog t', 't.cid=u.id', 'right')->where('u.power=2')->count();
			header('Content-type:text/html;Charset=utf8');
			$_var_18 = curl_init();
			curl_setopt($_var_18, CURLOPT_URL, 'https://www.apicloud.com/getV2AppStatisticDataByAppIdAndDate');
			$_var_19 = date('Y-m-d', strtotime('-1 day'));
			$_var_20 = date('Y-m-d', time());
			$_var_21 = array('appId' => "{$_var_16}", 'startDate' => $_var_19, 'endDate' => $_var_20);
			$_var_22 = array();
			curl_setopt($_var_18, CURLOPT_POST, true);
			curl_setopt($_var_18, CURLOPT_POSTFIELDS, $_var_21);
			curl_setopt($_var_18, CURLOPT_HEADER, false);
			curl_setopt($_var_18, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($_var_18, CURLOPT_COOKIE, "connect.sid={$_var_15};");
			$_var_23 = curl_exec($_var_18);
			if (substr_count($_var_23, '0')) {
				$_var_23 = json_decode($_var_23);
				$_var_24 = $_var_23->msg[0]->newRegsCount;
				$_var_25 = $_var_23->msg[0]->activeCountInToday;
				$_var_26 = $_var_23->msg[0]->todayOperationCount;
				$_var_27 = $_var_23->msg[0]->activeCountInSevenDays;
				$_var_28 = $_var_23->msg[0]->activeCountInThirtyDays;
				$_var_29 = $_var_23->msg[0]->devicesCount;
				$_var_30 = $_var_23->msg[0]->totalOperationCount;
				$_var_31 = $_var_23->msg[0]->reportDate;
				return view('index', ['newRegsCount' => $_var_24, 'activeCountInToday' => $_var_25, 'todayOperationCount' => $_var_26, 'activeCountInSevenDays' => $_var_27, 'activeCountInThirtyDays' => $_var_28, 'devicesCount' => $_var_29, 'totalOperationCount' => $_var_30, 'reportDate' => $_var_31, 'connect_sid' => $_var_15, 'appId' => $_var_16, 'txlog' => $_var_13, 'fcount' => $_var_12, 'mcount' => $_var_11 - $_var_12, 'tzcount' => $_var_9, 'dcount' => $_var_10, 'app_name' => $_var_2, 'ycount' => $_var_11]);
			} else {
				return view('index', ['appId' => $_var_16, 'fcount' => $_var_12, 'txlog' => $_var_13, 'mcount' => $_var_11 - $_var_12, 'tzcount' => $_var_9, 'dcount' => $_var_10, 'app_name' => $_var_2, 'ycount' => $_var_11]);
			}
		}
	}
	public function appId()
	{
		$_var_32 = db('advert')->where('id', 21)->value('content');
		if (empty($_var_32)) {
			$_var_33 = '完美网服';
		} else {
			$_var_33 = $_var_32;
		}
		if (session('power') != 0) {
			header('content-type:text/html;charset=utf-8');
			echo '非法操作';
			exit;
		}
		if (request()->Post()) {
			db('advert')->where('id', 47)->update(['content' => input('appId')]);
			db('advert')->where('id', 48)->update(['content' => input('connect_sid')]);
			Session::flash('code', '1');
			$this->redirect('index/index');
		}
		$_var_34 = session('code');
		return view('appId', ['code' => $_var_34, 'app_name' => $_var_33]);
	}
	public function setup()
	{
		if (session('power') != 0) {
			header('content-type:text/html;charset=utf-8');
			echo '非法操作';
			exit;
		}
		if (request()->Post()) {
			db('advert')->where('id', 1)->update(['content' => input('app_working_mode')]);
			db('advert')->where('id', 2)->update(['content' => input('down')]);
			db('advert')->where('id', 3)->update(['content' => input('pass')]);
			db('advert')->where('id', 4)->update(['content' => input('sign')]);
			db('advert')->where('id', 5)->update(['content' => intval(input('time'))]);
			db('advert')->where('id', 6)->update(['content' => input('deviceId')]);
			db('advert')->where('id', 7)->update(['content' => input('vip_movies_theme')]);
			db('advert')->where('id', 20)->update(['content' => input('default_password')]);
			db('advert')->where('id', 21)->update(['content' => input('app_name')]);
			db('advert')->where('id', 22)->update(['content' => input('app_ios_down')]);
			db('advert')->where('id', 23)->update(['content' => input('app_android_down')]);
			db('advert')->where('id', 24)->update(['content' => input('app_android_apk_down')]);
			db('advert')->where('id', 28)->update(['content' => input('kami_prefix')]);
			db('advert')->where('id', 29)->update(['content' => input('kami_length')]);
			db('advert')->where('id', 30)->update(['content' => input('domain_name')]);
			db('advert')->where('id', 31)->update(['content' => input('app_index_content')]);
			db('advert')->where('id', 32)->update(['content' => input('app_index_img')]);
			db('advert')->where('id', 33)->update(['content' => input('wap_index_img')]);
			db('advert')->where('id', 34)->update(['content' => input('Invitation_points')]);
			db('advert')->where('id', 40)->update(['content' => input('app_share_help')]);
			db('advert')->where('id', 41)->update(['content' => input('app_Invitation_slogans')]);
			db('advert')->where('id', 42)->update(['content' => input('app_secret_key')]);
			db('advert')->where('id', 43)->update(['content' => input('app_secret_content')]);
			db('advert')->where('id', 44)->update(['content' => input('agency_notice')]);
			db('advert')->where('id', 45)->update(['content' => input('index_video_num')]);
			db('advert')->where('id', 46)->update(['content' => input('look_record_num')]);
			db('advert')->where('id', 80)->update(['content' => input('upload_headimg_integral')]);
			db('advert')->where('id', 81)->update(['content' => input('set_nickname_integral')]);
			db('advert')->where('id', 82)->update(['content' => input('upload_alipay_code_integral')]);
			db('advert')->where('id', 83)->update(['content' => input('wechat_login_code_integral')]);
			db('advert')->where('id', 90)->update(['content' => input('agent_upgrade_commission')]);
			db('advert')->where('id', 91)->update(['content' => input('agent_upgrade_to_send_members')]);
			db('advert')->where('id', 92)->update(['content' => input('agent_upgrade_time')]);
			db('advert')->where('id', 93)->update(['content' => input('agent_introduction_picture')]);
			db('advert')->where('id', 110)->update(['content' => input('wechat_login_device_judgment')]);
			db('advert')->where('id', 111)->update(['content' => input('agent_upgrade_tips')]);
			db('advert')->where('id', 112)->update(['content' => input('touping_switch')]);
			db('advert')->where('id', 113)->update(['content' => input('touping_picture')]);
			db('advert')->where('id', 114)->update(['content' => input('Ryan_logo')]);
			db('advert')->where('id', 115)->update(['content' => input('Ryan_login_picture')]);
			db('advert')->where('id', 116)->update(['content' => input('Invitation_mode')]);
			db('advert')->where('id', 117)->update(['content' => input('Invitation_Domain_separation')]);
			db('advert')->where('id', 118)->update(['content' => input('Invitation_Key_separation')]);
			db('advert')->where('id', 119)->update(['content' => input('imgapi_Token')]);
			db('advert')->where('id', 120)->update(['content' => input('Picture_upload_API')]);
			db('advert')->where('id', 121)->update(['content' => input('tencent_x5')]);
			db('advert')->where('id', 130)->update(['content' => input('ranking_agent_ad')]);
			db('advert')->where('id', 170)->update(['content' => input('Upload_Picture_Size')]);
			db('advert')->where('id', 171)->update(['content' => input('Activation_Code_Limitation')]);
			db('advert')->where('id', 172)->update(['content' => input('Vip_Voice_cues')]);
			db('advert')->where('id', 173)->update(['content' => input('Is_Quick_login')]);
			db('advert')->where('id', 174)->update(['content' => input('vip_movies_theme_top')]);
			db('advert')->where('id', 175)->update(['content' => input('vip_movies_theme_foot')]);
			db('advert')->where('id', 176)->update(['content' => input('share_Poster_template_one')]);
			db('advert')->where('id', 177)->update(['content' => input('share_Poster_template_two')]);
			db('advert')->where('id', 178)->update(['content' => input('share_Poster_template_three')]);
			db('advert')->where('id', 340)->update(['content' => input('agent_mode_rebateswitch')]);
			db('advert')->where('id', 341)->update(['content' => input('agent_mode_if_cash')]);
			db('advert')->where('id', 342)->update(['content' => input('invitation_attribution_control')]);
			db('advert')->where('id', 343)->update(['content' => input('System_Return_Key_Binding')]);
			db('advert')->where('id', 344)->update(['content' => input('Load_animation')]);
			db('advert')->where('id', 345)->update(['content' => input('player_bottom_show')]);
			db('advert')->where('id', 346)->update(['content' => input('frame_two_show')]);
			db('advert')->where('id', 347)->update(['content' => input('mn_xz_power')]);
			db('advert')->where('id', 348)->update(['content' => input('Movies_Category_List_Switch')]);
			db('advert')->where('id', 349)->update(['content' => input('Player_selection')]);
			db('advert')->where('id', 350)->update(['content' => input('Analytical_type')]);
			db('advert')->where('id', 351)->update(['content' => input('Mandatory_Invitation_Code')]);
			db('advert')->where('id', 352)->update(['content' => input('Invitation_Code_Show')]);
			db('advert')->where('id', 353)->update(['content' => input('Invitation_Code_Distinguish')]);
			db('advert')->where('id', 354)->update(['content' => input('register_switch')]);
			db('advert')->where('id', 355)->update(['content' => input('launchImageAd')]);
			db('advert')->where('id', 356)->update(['content' => input('launchImageAd_url')]);
			db('advert')->where('id', 357)->update(['content' => input('launchImageAd_time')]);
			db('advert')->where('id', 358)->update(['content' => input('launchImageAd_skip')]);
			db('advert')->where('id', 359)->update(['content' => input('Hot_search')]);
			db('advert')->where('id', 400)->update(['content' => input('Simple_Mail_Transfer_Protocol_server')]);
			db('advert')->where('id', 401)->update(['content' => input('Simple_Mail_Transfer_Protocol_port')]);
			db('advert')->where('id', 402)->update(['content' => input('Simple_Mail_Transfer_Protocol_username')]);
			db('advert')->where('id', 403)->update(['content' => input('Simple_Mail_Transfer_Protocol_password')]);
			db('advert')->where('id', 404)->update(['content' => input('Simple_Mail_Transfer_Protocol_name')]);
			db('advert')->where('id', 405)->update(['content' => input('Activation_code_upper_limit')]);
			db('advert')->where('id', 406)->update(['content' => input('duijie')]);
			db('advert')->where('id', 407)->update(['content' => input('cmsurl')]);
			db('advert')->where('id', 408)->update(['content' => input('dxzc')]);
			db('advert')->where('id', 409)->update(['content' => input('token')]);
			
			Session::flash('code', '1');
			$this->redirect('index/index');
		}
		$_var_35 = session('code');
		return view('advert', ['code' => $_var_35]);
	}
	public function jxjiekou()
	{
		if (session('power') != 0) {
			header('content-type:text/html;charset=utf-8');
			echo '非法操作';
			exit;
		}
		if (request()->Post()) {
			db('advert')->where('id', 8)->update(['content' => input('geng1')]);
			db('advert')->where('id', 9)->update(['content' => input('geng2')]);
			db('advert')->where('id', 10)->update(['content' => input('geng3')]);
			db('advert')->where('id', 11)->update(['content' => input('geng4')]);
			db('advert')->where('id', 12)->update(['content' => input('geng5')]);
			db('advert')->where('id', 13)->update(['content' => input('geng6')]);
			db('advert')->where('id', 14)->update(['content' => input('geng7')]);
			db('advert')->where('id', 15)->update(['content' => input('geng8')]);
			db('advert')->where('id', 16)->update(['content' => input('geng9')]);
			db('advert')->where('id', 208)->update(['content' => input('geng1_name')]);
			db('advert')->where('id', 209)->update(['content' => input('geng2_name')]);
			db('advert')->where('id', 210)->update(['content' => input('geng3_name')]);
			db('advert')->where('id', 211)->update(['content' => input('geng4_name')]);
			db('advert')->where('id', 212)->update(['content' => input('geng5_name')]);
			db('advert')->where('id', 213)->update(['content' => input('geng6_name')]);
			db('advert')->where('id', 214)->update(['content' => input('geng7_name')]);
			db('advert')->where('id', 215)->update(['content' => input('geng8_name')]);
			db('advert')->where('id', 216)->update(['content' => input('geng9_name')]);
			Session::flash('code', '1');
			$this->redirect('index/index');
		}
		$_var_36 = session('code');
		return view('advert', ['code' => $_var_36]);
	}
}