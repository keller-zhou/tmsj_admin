<?php

//decode by http://ikmovie.xyz/
namespace app\index\controller;

error_reporting(E_ALL ^ E_NOTICE);
use think\Controller;
use think\Session;
use app\index\controller\SuncommonRyan;
class Banner extends SuncommonRyan
{
	public function _initialize()
	{
		$_var_0 = session('user');
		if ($_var_0 != 1) {
		} else {
			if (!$_var_0) {
				$this->redirect('login/login/index');
			}
		}
	}
	public function ojbk()
	{
		return view('ojbk');
	}
	public function index()
	{
		$_var_1 = input('code');
		$_var_2 = input('msg');
		$_var_3 = 1;
		$_var_4 = session('user');
		$_var_5 = db('user')->where('id', $_var_4)->value('banner_number');
		$_var_6 = db('banner')->where('user_id', $_var_4)->count();
		if ($_var_3) {
			$_var_7 = db('banner')->where(['cid' => $_var_3, 'user_id' => $_var_4])->order('sort asc')->paginate(10);
		} else {
			$_var_7 = db('banner')->where('user_id', $_var_4)->order('sort asc')->paginate(10);
		}
		$_var_8 = db('category')->order('id asc')->paginate(12);
		return view('index', ['msg' => $_var_2, 'list' => $_var_7, 'banner_number' => $_var_5, 'yy_banner_number' => $_var_6, 'category' => $_var_8, 'code' => $_var_1]);
	}
	public function index_vip()
	{
		$this->check_power();
		$_var_9 = input('code');
		$_var_10 = input('msg');
		$_var_11 = 2;
		$_var_12 = session('user');
		if ($_var_11) {
			$_var_13 = db('banner')->where(['cid' => $_var_11, 'user_id' => $_var_12])->order('sort asc')->paginate(999);
		} else {
			$_var_13 = db('banner')->where('user_id', $_var_12)->order('sort asc')->paginate(999);
		}
		$_var_14 = db('category')->order('id asc')->paginate(999);
		return view('index_vip', ['msg' => $_var_10, 'list' => $_var_13, 'category' => $_var_14, 'code' => $_var_9]);
	}
	public function index_banner_ad()
	{
		$this->check_power();
		$_var_15 = input('code');
		$_var_16 = input('msg');
		$_var_17 = 3;
		$_var_18 = session('user');
		if ($_var_17) {
			$_var_19 = db('banner')->where(['cid' => $_var_17, 'user_id' => $_var_18])->order('sort asc')->paginate(10);
		} else {
			$_var_19 = db('banner')->where('user_id', $_var_18)->order('sort asc')->paginate(10);
		}
		$_var_20 = db('category')->order('id asc')->paginate(12);
		return view('index_banner_ad', ['msg' => $_var_16, 'list' => $_var_19, 'category' => $_var_20, 'code' => $_var_15]);
	}
	public function index_two()
	{
		$this->check_power();
		$_var_21 = input('code');
		$_var_22 = input('msg');
		$_var_23 = 4;
		$_var_24 = session('user');
		if ($_var_23) {
			$_var_25 = db('banner')->where(['cid' => $_var_23, 'user_id' => $_var_24])->order('sort asc')->paginate(10);
		} else {
			$_var_25 = db('banner')->where('user_id', $_var_24)->order('sort asc')->paginate(10);
		}
		$_var_26 = db('category')->order('id asc')->paginate(12);
		return view('index_two', ['msg' => $_var_22, 'list' => $_var_25, 'category' => $_var_26, 'code' => $_var_21]);
	}
	public function index_right()
	{
		$this->check_power();
		$_var_27 = input('code');
		$_var_28 = input('msg');
		$_var_29 = 8;
		$_var_30 = session('user');
		if ($_var_29) {
			$_var_31 = db('banner')->where(['cid' => $_var_29, 'user_id' => $_var_30])->order('sort asc')->paginate(10);
		} else {
			$_var_31 = db('banner')->where('user_id', $_var_30)->order('sort asc')->paginate(10);
		}
		$_var_32 = db('category')->order('id asc')->paginate(12);
		return view('index_right', ['msg' => $_var_28, 'list' => $_var_31, 'category' => $_var_32, 'code' => $_var_27]);
	}
	public function category_left()
	{
		$this->check_power();
		$_var_33 = input('code');
		$_var_34 = input('msg');
		$_var_35 = 9;
		$_var_36 = session('user');
		if ($_var_35) {
			$_var_37 = db('banner')->where(['cid' => $_var_35, 'user_id' => $_var_36])->order('sort asc')->paginate(10);
		} else {
			$_var_37 = db('banner')->where('user_id', $_var_36)->order('sort asc')->paginate(10);
		}
		$_var_38 = db('category')->order('id asc')->paginate(12);
		return view('category_left', ['msg' => $_var_34, 'list' => $_var_37, 'category' => $_var_38, 'code' => $_var_33]);
	}
	public function category_top_pic()
	{
		$this->check_power();
		$_var_39 = input('code');
		$_var_40 = input('msg');
		$_var_41 = 10;
		$_var_42 = session('user');
		if ($_var_41) {
			$_var_43 = db('banner')->where(['cid' => $_var_41, 'user_id' => $_var_42])->order('sort asc')->paginate(10);
		} else {
			$_var_43 = db('banner')->where('user_id', $_var_42)->order('sort asc')->paginate(10);
		}
		$_var_44 = db('category')->order('id asc')->paginate(12);
		return view('category_top_pic', ['msg' => $_var_40, 'list' => $_var_43, 'category' => $_var_44, 'code' => $_var_39]);
	}
	public function category_recommend()
	{
		$this->check_power();
		$_var_45 = input('code');
		$_var_46 = input('msg');
		$_var_47 = 11;
		$_var_48 = session('user');
		if ($_var_47) {
			$_var_49 = db('banner')->where(['cid' => $_var_47, 'user_id' => $_var_48])->order('sort asc')->paginate(10);
		} else {
			$_var_49 = db('banner')->where('user_id', $_var_48)->order('sort asc')->paginate(10);
		}
		$_var_50 = db('category')->order('id asc')->paginate(12);
		return view('category_recommend', ['msg' => $_var_46, 'list' => $_var_49, 'category' => $_var_50, 'code' => $_var_45]);
	}
	public function category_right()
	{
		$this->check_power();
		$_var_51 = input('code');
		$_var_52 = input('msg');
		$_var_53 = 12;
		$_var_54 = session('user');
		if ($_var_53) {
			$_var_55 = db('banner')->where(['cid' => $_var_53, 'user_id' => $_var_54])->order('sort asc')->paginate(10);
		} else {
			$_var_55 = db('banner')->where('user_id', $_var_54)->order('sort asc')->paginate(10);
		}
		$_var_56 = db('category')->order('id asc')->paginate(12);
		return view('category_right', ['msg' => $_var_52, 'list' => $_var_55, 'category' => $_var_56, 'code' => $_var_51]);
	}
	public function category_banner_ad()
	{
		$this->check_power();
		$_var_57 = input('code');
		$_var_58 = input('msg');
		$_var_59 = 13;
		$_var_60 = session('user');
		if ($_var_59) {
			$_var_61 = db('banner')->where(['cid' => $_var_59, 'user_id' => $_var_60])->order('sort asc')->paginate(10);
		} else {
			$_var_61 = db('banner')->where('user_id', $_var_60)->order('sort asc')->paginate(10);
		}
		$_var_62 = db('category')->order('id asc')->paginate(12);
		return view('category_banner_ad', ['msg' => $_var_58, 'list' => $_var_61, 'category' => $_var_62, 'code' => $_var_57]);
	}
	public function foot_nav()
	{
		$this->check_power();
		$_var_63 = input('code');
		$_var_64 = input('msg');
		$_var_65 = 14;
		$_var_66 = session('user');
		if ($_var_65) {
			$_var_67 = db('banner')->where(['cid' => $_var_65, 'user_id' => $_var_66])->order('sort asc')->paginate(10);
		} else {
			$_var_67 = db('banner')->where('user_id', $_var_66)->order('sort asc')->paginate(10);
		}
		$_var_68 = db('category')->order('id asc')->paginate(12);
		return view('foot_nav', ['msg' => $_var_64, 'list' => $_var_67, 'category' => $_var_68, 'code' => $_var_63]);
	}
	public function recommend_top_ad()
	{
		$this->check_power();
		$_var_69 = input('code');
		$_var_70 = input('msg');
		$_var_71 = 15;
		$_var_72 = session('user');
		if ($_var_71) {
			$_var_73 = db('banner')->where(['cid' => $_var_71, 'user_id' => $_var_72])->order('sort asc')->paginate(10);
		} else {
			$_var_73 = db('banner')->where('user_id', $_var_72)->order('sort asc')->paginate(10);
		}
		$_var_74 = db('category')->order('id asc')->paginate(12);
		return view('recommend_top_ad', ['msg' => $_var_70, 'list' => $_var_73, 'category' => $_var_74, 'code' => $_var_69]);
	}
	public function recommend_banner_ad()
	{
		$this->check_power();
		$_var_75 = input('code');
		$_var_76 = input('msg');
		$_var_77 = 16;
		$_var_78 = session('user');
		if ($_var_77) {
			$_var_79 = db('banner')->where(['cid' => $_var_77, 'user_id' => $_var_78])->order('sort asc')->paginate(10);
		} else {
			$_var_79 = db('banner')->where('user_id', $_var_78)->order('sort asc')->paginate(10);
		}
		$_var_80 = db('category')->order('id asc')->paginate(12);
		return view('recommend_banner_ad', ['msg' => $_var_76, 'list' => $_var_79, 'category' => $_var_80, 'code' => $_var_75]);
	}
	public function recommend_roll_ad()
	{
		$this->check_power();
		$_var_81 = input('code');
		$_var_82 = input('msg');
		$_var_83 = 17;
		$_var_84 = session('user');
		if ($_var_83) {
			$_var_85 = db('banner')->where(['cid' => $_var_83, 'user_id' => $_var_84])->order('sort asc')->paginate(10);
		} else {
			$_var_85 = db('banner')->where('user_id', $_var_84)->order('sort asc')->paginate(10);
		}
		$_var_86 = db('category')->order('id asc')->paginate(12);
		return view('recommend_roll_ad', ['msg' => $_var_82, 'list' => $_var_85, 'category' => $_var_86, 'code' => $_var_81]);
	}
	public function recommend_big_picture_ad()
	{
		$this->check_power();
		$_var_87 = input('code');
		$_var_88 = input('msg');
		$_var_89 = 18;
		$_var_90 = session('user');
		if ($_var_89) {
			$_var_91 = db('banner')->where(['cid' => $_var_89, 'user_id' => $_var_90])->order('sort asc')->paginate(10);
		} else {
			$_var_91 = db('banner')->where('user_id', $_var_90)->order('sort asc')->paginate(10);
		}
		$_var_92 = db('category')->order('id asc')->paginate(12);
		return view('recommend_big_picture_ad', ['msg' => $_var_88, 'list' => $_var_91, 'category' => $_var_92, 'code' => $_var_87]);
	}
	public function recommend_small_picture_ad()
	{
		$this->check_power();
		$_var_93 = input('code');
		$_var_94 = input('msg');
		$_var_95 = 19;
		$_var_96 = session('user');
		if ($_var_95) {
			$_var_97 = db('banner')->where(['cid' => $_var_95, 'user_id' => $_var_96])->order('sort asc')->paginate(10);
		} else {
			$_var_97 = db('banner')->where('user_id', $_var_96)->order('sort asc')->paginate(10);
		}
		$_var_98 = db('category')->order('id asc')->paginate(12);
		return view('recommend_small_picture_ad', ['msg' => $_var_94, 'list' => $_var_97, 'category' => $_var_98, 'code' => $_var_93]);
	}
	public function recommend_text_ad()
	{
		$this->check_power();
		$_var_99 = input('code');
		$_var_100 = input('msg');
		$_var_101 = 20;
		$_var_102 = session('user');
		if ($_var_101) {
			$_var_103 = db('banner')->where(['cid' => $_var_101, 'user_id' => $_var_102])->order('sort asc')->paginate(10);
		} else {
			$_var_103 = db('banner')->where('user_id', $_var_102)->order('sort asc')->paginate(10);
		}
		$_var_104 = db('category')->order('id asc')->paginate(12);
		return view('recommend_small_picture_ad', ['msg' => $_var_100, 'list' => $_var_103, 'category' => $_var_104, 'code' => $_var_99]);
	}
	public function analysis_pay_text_ad()
	{
		$this->check_power();
		$_var_105 = input('code');
		$_var_106 = input('msg');
		$_var_107 = 21;
		$_var_108 = session('user');
		if ($_var_107) {
			$_var_109 = db('banner')->where(['cid' => $_var_107, 'user_id' => $_var_108])->order('sort asc')->paginate(10);
		} else {
			$_var_109 = db('banner')->where('user_id', $_var_108)->order('sort asc')->paginate(10);
		}
		$_var_110 = db('category')->order('id asc')->paginate(12);
		return view('recommend_small_picture_ad', ['msg' => $_var_106, 'list' => $_var_109, 'category' => $_var_110, 'code' => $_var_105]);
	}
	public function analysis_pay_banner_ad()
	{
		$this->check_power();
		$_var_111 = input('code');
		$_var_112 = input('msg');
		$_var_113 = 22;
		$_var_114 = session('user');
		if ($_var_113) {
			$_var_115 = db('banner')->where(['cid' => $_var_113, 'user_id' => $_var_114])->order('sort asc')->paginate(10);
		} else {
			$_var_115 = db('banner')->where('user_id', $_var_114)->order('sort asc')->paginate(10);
		}
		$_var_116 = db('category')->order('id asc')->paginate(12);
		return view('recommend_small_picture_ad', ['msg' => $_var_112, 'list' => $_var_115, 'category' => $_var_116, 'code' => $_var_111]);
	}
	public function analysis_pay_three_diagram_ad()
	{
		$this->check_power();
		$_var_117 = input('code');
		$_var_118 = input('msg');
		$_var_119 = 23;
		$_var_120 = session('user');
		if ($_var_119) {
			$_var_121 = db('banner')->where(['cid' => $_var_119, 'user_id' => $_var_120])->order('sort asc')->paginate(10);
		} else {
			$_var_121 = db('banner')->where('user_id', $_var_120)->order('sort asc')->paginate(10);
		}
		$_var_122 = db('category')->order('id asc')->paginate(12);
		return view('recommend_small_picture_ad', ['msg' => $_var_118, 'list' => $_var_121, 'category' => $_var_122, 'code' => $_var_117]);
	}
	public function add()
	{
		$_var_123 = input('msg');
		$_var_124 = input('cid');
		$_var_125 = input('name');
		$_var_126 = input('sort');
		$_var_127 = session('user');
		$_var_128 = db('category')->order('id asc')->paginate(88);
		$_var_129 = db('user')->where('id = ' . session('user'))->value('power');
		$_var_130 = db('user')->where('power = 1 and id = ' . session('user'))->value('banner_number');
		$_var_131 = db('banner')->where('user_id = ' . session('user'))->count();
		$_var_132 = db('user')->where('id = ' . session('user'))->value('banner_switch');
		if ($_var_132 != 1 && session('power') != 0) {
			return redirect('index');
		} else {
			if ($_var_131 >= $_var_130 && session('user') != 1) {
				return view('no_banner_number', ['code' => $_var_123, 'cid' => $_var_124, 'user_id' => $_var_127, 'banner_number' => $_var_130, 'yy_banner_number' => $_var_131, 'name' => $_var_125, 'sort' => $_var_126]);
			} else {
				if (session('power') == 1) {
					$_var_133['1'] = $_var_128['0'];
					$_var_133['8'] = $_var_128['7'];
					$_var_133['5'] = $_var_128['5'];
					$_var_133['7'] = $_var_128['6'];
				} else {
					if (session('power') == 0) {
						$_var_133 = $_var_128;
					}
				}
				return view('add', ['code' => $_var_123, 'cid' => $_var_124, 'user_id' => $_var_127, 'banner_number' => $_var_130, 'yy_banner_number' => $_var_131, 'name' => $_var_125, 'category' => $_var_133, 'sort' => $_var_126]);
			}
		}
	}
	public function add_vip()
	{
		$_var_134 = input('msg');
		$_var_135 = input('cid');
		$_var_136 = input('name');
		$_var_137 = input('sort');
		$_var_138 = session('user');
		$_var_139 = db('category')->order('id asc')->paginate(88);
		if (session('power') == 1) {
			$_var_140['1'] = $_var_139['0'];
			$_var_140['8'] = $_var_139['7'];
			$_var_140['5'] = $_var_139['5'];
			$_var_140['7'] = $_var_139['6'];
		} else {
			if (session('power') == 0) {
				$_var_140 = $_var_139;
			}
		}
		return view('add_vip', ['code' => $_var_134, 'cid' => $_var_135, 'user_id' => $_var_138, 'name' => $_var_136, 'category' => $_var_140, 'sort' => $_var_137]);
	}
	public function add_foot_nav()
	{
		$_var_141 = input('msg');
		$_var_142 = input('cid');
		$_var_143 = input('name');
		$_var_144 = input('sort');
		$_var_145 = session('user');
		$_var_146 = db('category')->order('id asc')->paginate(88);
		if (session('power') == 1) {
			$_var_147['1'] = $_var_146['0'];
			$_var_147['8'] = $_var_146['7'];
			$_var_147['5'] = $_var_146['5'];
			$_var_147['7'] = $_var_146['6'];
		} else {
			if (session('power') == 0) {
				$_var_147 = $_var_146;
			}
		}
		return view('add_foot_nav', ['code' => $_var_141, 'cid' => $_var_142, 'user_id' => $_var_145, 'name' => $_var_143, 'category' => $_var_147, 'sort' => $_var_144]);
	}
	public function update()
	{
		$_var_148 = input('msg');
		$_var_149 = db('banner')->where('id', input('id'))->find();
		$_var_150 = input('cid');
		$_var_151 = input('name');
		$_var_152 = input('sort');
		$_var_153 = db('category')->order('id asc')->paginate(88);
		$_var_154 = db('user')->where('id = ' . session('user'))->value('banner_switch');
		$_var_155 = db('banner')->where('id', input('id'))->value('user_id');
		$_var_156 = db('banner')->where('id', input('id'))->value('audit');
		if ($_var_155 == session('user') || session('power') == 0) {
			if ($_var_156 == 3 || session('power') == 0) {
				return view('update', ['data' => $_var_149, 'code' => $_var_148, 'cid' => $_var_150, 'name' => $_var_151, 'c' => $_var_149['cid'], 'category' => $_var_153, 'sort' => $_var_152]);
			} else {
				return view('vip/error');
			}
		} else {
			return view('vip/error');
		}
	}
	public function update_vip()
	{
		$_var_157 = input('msg');
		$_var_158 = db('banner')->where('id', input('id'))->find();
		$_var_159 = input('cid');
		$_var_160 = input('name');
		$_var_161 = input('sort');
		$_var_162 = db('category')->order('id asc')->paginate(88);
		return view('update_vip', ['data' => $_var_158, 'code' => $_var_157, 'cid' => $_var_159, 'name' => $_var_160, 'c' => $_var_158['cid'], 'category' => $_var_162, 'sort' => $_var_161]);
	}
	public function update_foot_nav()
	{
		$_var_163 = input('msg');
		$_var_164 = db('banner')->where('id', input('id'))->find();
		$_var_165 = input('cid');
		$_var_166 = input('name');
		$_var_167 = input('sort');
		$_var_168 = db('category')->order('id asc')->paginate(88);
		return view('update_foot_nav', ['data' => $_var_164, 'code' => $_var_163, 'cid' => $_var_165, 'name' => $_var_166, 'c' => $_var_164['cid'], 'category' => $_var_168, 'sort' => $_var_167]);
	}
	public function del()
	{
		$_var_169 = db('banner')->where('id', input('id'))->value('user_id');
		$_var_170 = db('banner')->where('id', input('id'))->value('audit');
		if ($_var_169 != session('user') && session('power') != 0) {
			return view('vip/error');
			return view('vip/error');
		} else {
			$_var_171 = db('banner')->where('id', input('id'))->find();
			$_var_172 = db('banner')->where('id', input('id'))->delete();
			return redirect('banner/ojbk', ['code' => 1, 'msg' => '删除成功']);
		}
	}
	public function create()
	{
		$_var_173 = request()->file('picurl');
		if ($_var_173) {
			$_var_174 = $_var_173->move(ROOT_PATH . 'public' . DS . 'uploads');
			if ($_var_174) {
				$_var_175 = ['gif', 'jpeg', 'png', 'bmp', 'jpg'];
				$_var_176 = $_var_174->getExtension();
				$_var_177 = '/public/uploads/' . $_var_174->getSaveName();
				if (in_array($_var_176, $_var_175)) {
					$_var_178['picurl'] = str_replace('\\', '/', str_replace('\\\\', '/', $_var_177));
					$_var_178['user_id'] = input('user_id');
					$_var_178['content'] = input('content');
					$_var_178['linkurl'] = input('linkurl');
					$_var_178['cid'] = input('cid');
					$_var_178['name'] = input('name');
					if (session('power') != 0) {
						$_var_178['audit'] = 2;
					} else {
						$_var_178['audit'] = 1;
					}
					$_var_178['sort'] = input('sort');
					if (db('banner')->insert($_var_178) !== false) {
						return redirect('banner/ojbk');
					} else {
						unlink($_var_177);
						return redirect('banner/add', ['code' => 0, 'msg' => '添加失败']);
					}
				} else {
					unlink($_var_177);
					return redirect('banner/add', ['code' => 0, 'msg' => '请上传图片']);
				}
			} else {
				return redirect('banner/add', ['code' => 0, 'msg' => '上传失败' . $_var_173->getError()]);
			}
		} else {
			return redirect('banner/add', ['code' => 0, 'msg' => '图片未上传']);
		}
	}
	public function edit()
	{
		$_var_179 = request()->file('picurl');
		if ($_var_179) {
			$_var_180 = $_var_179->move(ROOT_PATH . 'public' . DS . 'uploads');
			if ($_var_180) {
				$_var_181 = ['gif', 'jpeg', 'png', 'bmp', 'jpg'];
				$_var_182 = $_var_180->getExtension();
				$_var_183 = '/public/uploads/' . $_var_180->getSaveName();
				if (in_array($_var_182, $_var_181)) {
					$_var_184['picurl'] = str_replace('\\', '/', str_replace('\\\\', '/', $_var_183));
				} else {
					unlink($_var_183);
					return redirect('banner/add', ['code' => 0, 'msg' => '请上传图片']);
				}
			} else {
				return redirect('banner/add', ['code' => 0, 'msg' => '上传失败' . $_var_179->getError()]);
			}
		}
		$_var_184['content'] = input('content');
		$_var_184['linkurl'] = input('linkurl');
		$_var_184['cid'] = input('cid');
		$_var_184['name'] = input('name');
		$_var_184['sort'] = input('sort');
		$_var_184['audit'] = '2';
		if (db('banner')->where('id', input('id'))->update($_var_184) !== false) {
			return redirect('banner/ojbk', ['code' => 1, 'msg' => '添加成功']);
		} else {
			unlink($_var_183);
			return;
		}
	}
	public function banner_switch()
	{
		$_var_185 = 2;
		db('user')->where('id=' . session('user'))->update(['banner_switch' => $_var_185]);
		return redirect('index');
	}
	public function banner_switch_admin()
	{
		$this->check_power();
		$_var_186 = session('code', '');
		$_var_187 = 'power = 1 and banner_switch=2';
		if (input('key')) {
			$_var_187 .= ' and (username like  "%' . input('key') . '%" or share_ma like "%' . input('key') . '%")';
		}
		$_var_188 = db('user')->where('power=1')->count();
		$_var_189 = db('user')->where($_var_187)->order('id desc')->paginate(10);
		$_var_190 = db('option')->where('id', 1)->find();
		return view('banner_switch_admin', ['parentid' => input('parentid'), 'count' => $_var_188, 'list' => $_var_189, 'code' => $_var_186, 'option' => $_var_190]);
	}
	public function banner_switch_admin_no()
	{
		$_var_191 = input('id');
		$_var_192 = implode(',', array_filter(explode(',', $_var_191)));
		if (db('user')->where('id in (' . $_var_192 . ')')->update(['banner_switch' => 3])) {
			return json(['code' => '1']);
		} else {
			return json(['code' => '0']);
		}
	}
	public function update_banner_switch_admin()
	{
		header('Content-type: text/html; charset=utf-8');
		if (request()->isPost()) {
			$_var_193 = input();
			$_var_194 = $_var_193['id'];
			$_var_195 = input('page', '');
			$_var_196 = db('user')->where('id', $_var_194)->count();
			if ($_var_194 == '1' || $_var_196 < 1 || session('user') != 1) {
				return view('error');
			} else {
				db('user')->where('id', $_var_194)->update(['banner_switch' => 1]);
				if ($_var_193['banner_number']) {
					$_var_197['banner_number'] = $_var_193['banner_number'];
				}
				$_var_197['ctime'] = time();
				$_var_198 = db('user')->where('username="' . $_var_193['name'] . '" and id != ' . $_var_193['id'])->count();
				if ($_var_198 > 0) {
					Session::flash('code', 'err1');
					echo '<script>window.location=\'/index/banner/banner_switch_admin/id/' . $_var_193['id'] . '?page=' . $_var_195 . '\'</script>';
				}
				if (db('user')->where('id', $_var_194)->update($_var_197)) {
					db('kai')->insert(['uid' => session('user'), 'cid' => $_var_194, 'ctime' => time()]);
					Session::flash('code', '2');
					echo '<script>window.location=\'/index/banner/banner_switch_admin?page=' . $_var_195 . '\'</script>';
				} else {
					Session::flash('code', 'err2');
					$this->redirect('banner/banner_switch_admin', ['id' => $_var_194]);
				}
			}
		} else {
			$_var_199 = session('code');
			$_var_200 = input('msg', '0');
			$_var_193 = db('user')->where('id', input('id'))->find();
			return view('update_banner_switch_admin', ['page' => input('page', '0'), 'data' => $_var_193, 'code' => $_var_199, 'msg' => $_var_200]);
		}
	}
	public function banner_no()
	{
		$this->check_power();
		$_var_201 = session('code', '');
		$_var_202 = 'power = 1 and banner_switch=3';
		if (input('key')) {
			$_var_202 .= ' and (username like  "%' . input('key') . '%" or share_ma like "%' . input('key') . '%")';
		}
		$_var_203 = db('user')->where('power=1')->count();
		$_var_204 = db('user')->where($_var_202)->order('id desc')->paginate(10);
		$_var_205 = db('option')->where('id', 1)->find();
		return view('banner_no', ['parentid' => input('parentid'), 'count' => $_var_203, 'list' => $_var_204, 'code' => $_var_201, 'option' => $_var_205]);
	}
	public function banner_ok()
	{
		$this->check_power();
		$_var_206 = session('code', '');
		$_var_207 = 'power = 1 and banner_switch=1';
		if (input('key')) {
			$_var_207 .= ' and (username like  "%' . input('key') . '%" or share_ma like "%' . input('key') . '%")';
		}
		$_var_208 = db('user')->where('power=1')->count();
		$_var_209 = db('user')->where($_var_207)->order('id desc')->paginate(10);
		$_var_210 = db('option')->where('id', 1)->find();
		return view('banner_ok', ['parentid' => input('parentid'), 'count' => $_var_208, 'list' => $_var_209, 'code' => $_var_206, 'option' => $_var_210]);
	}
	public function banner_admin()
	{
		$this->check_power();
		$_var_211 = input('code');
		$_var_212 = input('msg');
		$_var_213 = 1;
		$_var_214 = 2;
		$_var_215 = db('banner')->where(['cid' => $_var_213, 'audit' => $_var_214])->order('sort asc')->paginate(10);
		return view('banner_admin', ['msg' => $_var_212, 'list' => $_var_215, 'code' => $_var_211]);
	}
	public function banner_admin_ok()
	{
		$this->check_power();
		$_var_216 = input('code');
		$_var_217 = input('msg');
		$_var_218 = 1;
		$_var_219 = 1;
		$_var_220 = db('banner')->where(['cid' => $_var_218, 'audit' => $_var_219])->order('sort asc')->paginate(10);
		return view('banner_admin_ok', ['msg' => $_var_217, 'list' => $_var_220, 'code' => $_var_216]);
	}
	public function banner_pass_yes()
	{
		$this->check_power();
		$_var_221 = input('id');
		$_var_222 = 1;
		if (!empty($_var_221)) {
			if (db('banner')->where('id', $_var_221)->update(['audit' => $_var_222])) {
				return redirect('banner/banner_admin', ['code' => 1, 'msg' => '操作成功']);
			} else {
				return json(['code' => 0]);
			}
		} else {
			return json(['code' => 0]);
		}
	}
	public function banner_admin_no()
	{
		$this->check_power();
		$_var_223 = input('code');
		$_var_224 = input('msg');
		$_var_225 = 1;
		$_var_226 = 3;
		$_var_227 = db('banner')->where(['cid' => $_var_225, 'audit' => $_var_226])->order('sort asc')->paginate(10);
		return view('banner_admin_no', ['msg' => $_var_224, 'list' => $_var_227, 'code' => $_var_223]);
	}
	public function banner_pass_no()
	{
		$this->check_power();
		$_var_228 = input('id');
		$_var_229 = 3;
		if (!empty($_var_228)) {
			if (db('banner')->where('id', $_var_228)->update(['audit' => $_var_229])) {
				return redirect('banner/banner_admin', ['code' => 1, 'msg' => '操作成功']);
			} else {
				return json(['code' => 0]);
			}
		} else {
			return json(['code' => 0]);
		}
	}
}