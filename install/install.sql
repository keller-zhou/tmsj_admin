-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020 年 04 月 17 日 22:18
-- 服务器版本: 5.6.40
-- PHP 版本: 5.3.21

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `3haj5kq29i222`
--

-- --------------------------------------------------------

--
-- 表的结构 `ap_adduser`
--

CREATE TABLE IF NOT EXISTS `ap_adduser` (
  `uid` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `time` char(10) DEFAULT NULL,
  `lasttime` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------
-- ----------------------------
-- Table structure for ap_agentcode
-- ----------------------------
DROP TABLE IF EXISTS `ap_agentcode`;
CREATE TABLE `ap_agentcode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ap_agentcode
-- ----------------------------

--
-- 表的结构 `ap_advert`
--

CREATE TABLE IF NOT EXISTS `ap_advert` (
  `user_id` int(11) NOT NULL DEFAULT '1',
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `content` text,
  `Type` text NOT NULL,
  `Mark` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=410 ;

--
-- 转存表中的数据 `ap_advert`
--

INSERT INTO `ap_advert` (`user_id`, `id`, `content`, `Type`, `Mark`) VALUES
(1, 1, '1', '', 'app_working_mode'),
(1, 2, '1', '', 'down'),
(1, 3, '100', '', 'pass'),
(1, 4, '888', '', 'sign'),
(1, 5, '888', '', '试用时间 / 注册赠送'),
(1, 6, '0', '', 'deviceId'),
(1, 7, '0', '', 'vip_movies_theme'),
(1, 8, 'https://www.pangujiexi.cc/jiexi.php?url=', '', '解析接口 一 （ 默认调用 ）'),
(1, 9, 'https://www.pangujiexi.cc/jiexi.php?url=', '', '解析接口 二'),
(1, 10, 'https://www.pangujiexi.cc/jiexi.php?url=', '', '解析接口 三'),
(1, 11, 'https://www.pangujiexi.cc/jiexi.php?url=', '', '解析接口  四'),
(1, 12, 'https://www.pangujiexi.cc/jiexi.php?url=', '', '解析接口  五'),
(1, 13, 'https://www.pangujiexi.cc/jiexi.php?url=', '', '解析接口  六'),
(1, 14, 'https://www.pangujiexi.cc/jiexi.php?url=', '', '解析接口  七'),
(1, 15, 'https://www.pangujiexi.cc/jiexi.php?url=', '', '解析接口 八'),
(1, 16, 'https://www.pangujiexi.cc/jiexi.php?url=', '', '解析接口 九'),
(1, 17, NULL, '', ''),
(1, 20, '000000', '', 'default_password'),
(1, 21, '淘米视界', '', 'app_name'),
(1, 22, '', '', 'app_ios_down'),
(1, 23, '', '', 'app_android_down'),
(1, 24, '', '', 'app_android_apk_down'),
(1, 28, 'PNS', '', 'kami_prefix'),
(1, 29, '9', '', 'kami_length'),
(1, 30, 'http://tmsj.taomiwo.top', '', 'domain_name'),
(1, 31, '', '', 'app_index_content'),
(1, 32, '', '', 'app_index_img'),
(1, 33, '', '', 'wap_index_img'),
(1, 34, '888', '', 'Invitation_points'),
(1, 35, NULL, '', ''),
(1, 36, NULL, '', ''),
(1, 37, NULL, '', ''),
(1, 38, NULL, '', ''),
(1, 39, NULL, '', ''),
(1, 40, '', '', 'app_share_help'),
(1, 41, '', '', 'app_Invitation_slogans'),
(1, 42, '8888', '', 'app_secret_key'),
(1, 43, '', '', ''),
(1, 44, '', '', 'agency_notice'),
(1, 45, '9', '', 'index_video_num'),
(1, 46, '888', '', 'look_record_num'),
(1, 47, 'A6018987286271', '', 'AppId'),
(1, 48, '', '', 'Key'),
(1, 80, '', '', 'upload_headimg_integral'),
(1, 81, '', '', 'set_nickname_integral'),
(1, 82, '0', '', 'upload_alipay_code_integral'),
(1, 83, '888', '', 'wechat_login_code_integral'),
(1, 90, '1', '', 'agent_upgrade_commission'),
(1, 91, '1', '', 'agent_upgrade_to_send_members'),
(1, 92, '888', '', 'agent_upgrade_time'),
(1, 93, 'https://s1.ax1x.com/2020/04/12/GLId3Q.jpg', '', 'agent_introduction_picture'),
(1, 110, '0', '', 'wechat_login_device_judgment'),
(1, 111, '无权限操作，请开通代理!开通代理后可享受无限卡密，自定义广告位，微信客服，发卡平台等。', '', 'agent_upgrade_tips'),
(1, 112, '1', '', 'touping_switch'),
(1, 113, '', '', 'touping_picture'),
(1, 114, 'https://s1.ax1x.com/2020/03/28/GEEC3q.png', '', 'Ryan_logo'),
(1, 115, '', '', 'Ryan_login_picture'),
(1, 116, '1', '', 'Invitation_mode'),
(1, 117, NULL, '', 'Invitation_Domain_separation'),
(1, 118, NULL, '', 'Invitation_Key_separation'),
(1, 119, NULL, '', 'imgapi_Token'),
(1, 120, '0', '', 'Picture_upload_API'),
(1, 121, 'http://v.sigu.me/', '', 'tencent_x5'),
(1, 125, '淘米视界 ikmovie.xyz', '1', ''),
(1, 126, '1', '2', ''),
(1, 130, '0', '2', 'ranking_agent_ad'),
(1, 150, '0.0.0', '', 'Android_Updated_version'),
(1, 151, '', '', 'Android_Updated_content'),
(1, 152, '0.0.0', '', 'Ios_Updated_version'),
(1, 153, '1.精简文件；2.收款码改为支付宝账户填写；3.新增图片上传大小限制（后台调整）；4.快捷登录用户禁止修改头像；5.调整部分页面UI；6.腾讯X5调用自定义；7.APP版本更新控制由云改为本地后台', '', 'Ios_Updated_content'),
(1, 154, '0', '', 'Android_Updated_switch'),
(1, 155, '0', '', 'Ios_Updated_switch'),
(1, 170, '50000', '', 'Upload_Picture_Size'),
(1, 171, '0', '', 'Activation_Code_Limitation'),
(1, 172, '1', '', 'Vip_Voice_cues'),
(1, 173, '1', '', 'Is_Quick_login'),
(1, 174, NULL, '', 'vip_movies_theme_top'),
(1, 175, NULL, '', 'vip_movies_theme_foot'),
(1, 176, 'https://s1.ax1x.com/2020/04/12/GLIhv9.jpg', '', 'share_Poster_template_one'),
(1, 177, 'https://s1.ax1x.com/2020/04/12/GLIID1.jpg', '', 'share_Poster_template_two'),
(1, 178, 'https://s1.ax1x.com/2020/04/12/GLI5uR.jpg', '', 'share_Poster_template_three'),
(1, 208, '接口1', '', '解析接口 一'),
(1, 209, '接口2', '', '解析接口 二'),
(1, 210, '接口3', '', '解析接口 三'),
(1, 211, '接口4', '', '解析接口 四'),
(1, 212, '接口5', '', '解析接口 五'),
(1, 213, '接口6', '', '解析接口 六'),
(1, 214, '接口7', '', '解析接口 七'),
(1, 215, '接口8', '', '解析接口 八'),
(1, 216, '接口9', '', '解析接口 九'),
(1, 340, '0', '', 'agent_mode_rebateswitch'),
(1, 341, '0', '', 'agent_mode_if_cash'),
(1, 342, '0', '', 'invitation_attribution_control'),
(1, 343, '0', '', 'System_Return_Key_Binding'),
(1, 344, '小熊', '', 'Load_animation'),
(1, 345, '0', '', 'player_bottom_show'),
(1, 346, '0', '', 'frame_two_show'),
(1, 347, '1', '', 'mn_xz_power'),
(1, 348, '1', '', 'Movies_Category_List_Switch'),
(1, 349, '1', '', 'Player_selection'),
(1, 350, '0', '', 'Analytical_type'),
(1, 351, '0', '', 'Mandatory_Invitation_Code'),
(1, 352, '1', '', 'Invitation_Code_Show'),
(1, 353, '1', '', 'Invitation_Code_Distinguish'),
(1, 354, '0', '', 'register_switch'),
(1, 355, 'https://img.alicdn.com/imgextra/i1/548233503/O1CN01c6OF4O1bkQ0pebsp8_!!548233503.jpg', '', 'launchImageAd'),
(1, 356, '', '', 'launchImageAd_url'),
(1, 357, '3000', '', 'launchImageAd_time'),
(1, 358, '1', '', 'launchImageAd_skip'),
(1, 359, '淘米视界', '', 'Hot_search'),
(1, 400, 'smtp.qq.com', '', 'Simple_Mail_Transfer_Protocol_server'),
(1, 401, '465', '', 'Simple_Mail_Transfer_Protocol_port'),
(1, 402, '', '', 'Simple_Mail_Transfer_Protocol_username'),
(1, 403, '', '', 'Simple_Mail_Transfer_Protocol_password'),
(1, 404, '淘米视界', '', 'Simple_Mail_Transfer_Protocol_name'),
(1, 405, '20', '', 'Activation_code_upper_limit'),
(1, 406, '1', '', 'duijie'),
(1, 407, 'http://v.ikmovie.xyz', '', 'cmsurl'),
(1, 408, '0', '', 'dxzc'),
(1, 409, 'awsgdd', '', 'token');

-- --------------------------------------------------------

--
-- 表的结构 `ap_app`
--

CREATE TABLE IF NOT EXISTS `ap_app` (
  `id` int(1) NOT NULL DEFAULT '0',
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ap_app`
--

INSERT INTO `ap_app` (`id`, `content`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, '');

-- --------------------------------------------------------

--
-- 表的结构 `ap_artical`
--

CREATE TABLE IF NOT EXISTS `ap_artical` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `url` tinytext NOT NULL,
  `sort` int(11) NOT NULL,
  `picture` tinytext NOT NULL,
  `eject` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0N 1Y',
  `time` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '0公告  1最新消息  3小编推荐',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `ap_artical`
--

INSERT INTO `ap_artical` (`id`, `title`, `content`, `url`, `sort`, `picture`, `eject`, `time`, `type`) VALUES
(16, '爱看资源', '淘米视界：http://ikmovie.xyz', '', 1, '/public/uploads/20200403/ff582f92df3c3398fcf4a9630b337fa4.png', 1, 1585898791, 0);

-- --------------------------------------------------------

--
-- 表的结构 `ap_banner`
--

CREATE TABLE IF NOT EXISTS `ap_banner` (
  `user_id` int(11) NOT NULL DEFAULT '1',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `linkurl` varchar(255) DEFAULT NULL,
  `picurl` varchar(255) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `del` int(11) DEFAULT '1',
  `audit` int(11) NOT NULL DEFAULT '0' COMMENT '0N 1Y 2S 3J',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=315 ;

--
-- 转存表中的数据 `ap_banner`
--

INSERT INTO `ap_banner` (`user_id`, `id`, `cid`, `name`, `content`, `linkurl`, `picurl`, `sort`, `del`, `audit`) VALUES
(1, 274, 2, '爱奇艺', '', 'https://m.iqiyi.com/vip/', '/public/uploads/20200401/4201868da1773fb21e2d65356ed0b7b2.png', 1, 1, 1),
(1, 275, 2, '腾讯', '', 'https://3g.v.qq.com/tv.html', '/public/uploads/20200401/1fc423d1eeeeeb8cfe85577b780f82e7.png', 2, 1, 2),
(1, 276, 2, '搜狐', '', 'https://m.tv.sohu.com/', '/public/uploads/20200401/7aba448e1e8e02ba9f54df013d83cd8f.png', 3, 1, 1),
(1, 277, 2, '优酷', '', 'https://youku.com', '/public/uploads/20200401/38b061edfac7b871bb942b274316fa71.png', 0, 1, 1),
(1, 278, 2, '芒果', '', 'https://m.mgtv.com/channel/vip/', '/public/uploads/20200401/47f0e1beef837723a39bfe08b041ed17.png', 0, 1, 1),
(1, 279, 2, '聚力', '', 'https://m.pptv.com/', '/public/uploads/20200401/4bf7ee0f2c18acfa1a50690dcc6967fd.png', 0, 1, 1),
(1, 280, 2, '咪咕', '', 'http://m.miguvideo.com/wap/resource/migu/miguH5/channelTpl.jsp?nodeId=70049310', '/public/uploads/20200401/0cca37d474f7dadff9a8efad663b9fa9.png', 0, 1, 1),
(1, 281, 2, '番剧', '', 'https://m.acfun.cn/', '/public/uploads/20200401/88a4a04e39638aa19348f057cd1a41c2.png', 0, 1, 1),
(1, 282, 2, '韩剧TV', '', 'https://www.hanjutv.com/hanju/', '/public/uploads/20200401/82d12cc950e2f940a51bf461f3ccb717.png', 0, 1, 1),
(1, 283, 2, '华数', '', 'https://movie.wasu.cn/', '/public/uploads/20200401/3f4502da3f487e6b611ef01ec9d2b2ce.png', 0, 1, 1),
(1, 284, 1, '这是首页banner', '这是首页banner', 'http://ikmocie.xyz/', '/public/uploads/20200403/c5ccd86c15fff4919140f02e3c3e3fbf.jpg', 1, 1, 1),
(1, 285, 1, '这是首页banner', '这是首页banner', 'http://ikmovie.xyz/', '/public/uploads/20200403/8dbac2c530bf3b45b3dd77b1e75f0208.png', 2, 1, 1),
(1, 286, 4, '广告位1', '广告位1', 'http://ikmovie.xyz/', '/public/uploads/20200403/590b7a6957f8b426633259833040f6c6.jpg', 1, 1, 1),
(1, 287, 4, '广告位2', '广告位2', 'http://ikmocie.xyz/', '/public/uploads/20200403/11c2aa4f8a5f8a5e4f313231c49b5e66.jpg', 2, 1, 1),
(1, 289, 8, '图标', '安卓没法全屏点击这里', 'http://debugtbs.qq.com', '/public/uploads/20200403/c2d547b1784462886a6b56dfccd28f2c.png', 1, 1, 1),
(1, 290, 9, '左侧文字', '分类左侧文字', 'http://ikmocie.xyz/', '/public/uploads/20200403/49c5984f52c12852824b63a3524f860c.png', 1, 1, 1),
(1, 291, 10, '顶部图片', '顶部图片位', 'http://ikmovie.xyz/', '/public/uploads/20200403/94895b7ffab695d2941ceaa8874cb4d8.png', 1, 1, 1),
(1, 292, 11, '推荐1', '推荐1', 'http://ikmovie.xyz/', '/public/uploads/20200403/33daa83c20b0f8c74e068039b5a6efab.jpg', 1, 1, 1),
(1, 293, 11, '推荐2', '推荐2', 'http://ikmovie.xyz', '/public/uploads/20200403/b4ab308b2b1b54afcdb7b6eb90c839e1.jpg', 2, 1, 1),
(1, 294, 12, '右侧文字', '右侧文字', 'http://ikmovie.xyz/', '/public/uploads/20200403/55b3befcc4dc24f5edf4831338763c53.png', 1, 1, 1),
(1, 295, 13, '分类横幅', '分类横幅', 'http://ikmovie.xyz/', '/public/uploads/20200403/31df0d58242d67d2e422b827c96af968.jpg', 1, 1, 1),
(1, 296, 15, '代理', '代理', 'http://ikmovie.xyz/', '/public/uploads/20200403/8c54bd72a2bd9691d27c662c3e34a8fe.png', 1, 1, 1),
(1, 297, 15, '专享', '专享', 'http://ikmovie.xyz/', '/public/uploads/20200403/19a1b134e313c48eedfd0039988e81f9.png', 2, 1, 1),
(1, 298, 15, '广告', '专享', 'http://ikmovie.xyz/', '/public/uploads/20200403/d2d524ef5c1b64e43c0f22e4b16e7b06.png', 3, 1, 1),
(1, 299, 15, '广告', '广告', 'http://ikmovie.xyz/', '/public/uploads/20200403/b7ba1f4b48bd1e7605d7c03fe57113d6.png', 4, 1, 1),
(1, 300, 15, '特权', '特权', 'http://ikmovie.xyz/', '/public/uploads/20200403/fa116d586dd76bfc864c437f3cd202b8.png', 5, 1, 1),
(1, 301, 16, '图片', '图片', '', '/public/uploads/20200404/12148c08ea0a59940f1dc5a89524ac57.png', 1, 1, 2),
(1, 303, 17, '1', '1', 'http://ikmovie.xyz', '/public/uploads/20200403/c77255f25c4679dcd743e0aaae7d7afe.png', 1, 1, 1),
(1, 304, 17, '1', '1', 'http://ikmovie.xyz', '/public/uploads/20200403/4ca91035ef51ec63fa063e6258271137.png', 12, 1, 1),
(1, 305, 17, '1', '1', 'http://ikmovie.xyz', '/public/uploads/20200403/3538377b4eacc373a13574b70c62cb38.png', 3, 1, 1),
(1, 306, 18, '1', '1', 'http://ikmovie.xyz', '/public/uploads/20200403/b39afa15fe50844146be7dc1c0e2d436.png', 1, 1, 1),
(1, 307, 19, '1', '1', 'http://ikmovie.xyz', '/public/uploads/20200403/cef4c33054eb4e3f9c60410386ad3e22.png', 1, 1, 1),
(1, 308, 19, '1', '1', 'http://ikmovie.xyz', '/public/uploads/20200403/07e55ba2cbb76299d8cfe00e93c49e1d.png', 2, 1, 1),
(1, 309, 20, '网站', 'http://ikmovie.xyz', 'http://ikmovie.xyz', '/public/uploads/20200403/15186635a9cc583b8008c0a5d7370d8a.png', 1, 1, 1),
(1, 310, 22, '测试广告', '', '#', '/public/uploads/20200404/9706db7967fd693e7d52cbc4536f026f.jpg', 0, 1, 1),
(1, 311, 21, '这是广告', '123123123', '#', '/public/uploads/20200404/093c8a7a91ee3974f76b82ec1e0061c3.jpg', 1, 1, 2),
(2, 312, 1, '淘米视界', NULL, 'http://ikmovie.xyz', 'https://i.loli.net/2020/04/09/egKSjJAnxO93oPt.jpg', NULL, 1, 1),
(1, 313, 10, '1', '', '', '/public/uploads/20200411/2064d96a89bcc36c9ba3d58f2ba13ff3.png', 0, 1, 1),
(98, 314, 1, '6666', '666', 'https://lanzous.com/ib4s03g', '/public/uploads/20200417/cbf2a3b08b484ecbd58355977c3fba9d.png', NULL, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `ap_category`
--

CREATE TABLE IF NOT EXISTS `ap_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(100) DEFAULT NULL COMMENT '类名',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `ap_category`
--

INSERT INTO `ap_category` (`id`, `cname`) VALUES
(1, '首页 - 轮播图'),
(2, '全网影视'),
(3, '首页 - 中部横幅'),
(4, '首页 - 2列广告位'),
(8, '首页 - 右上角'),
(9, '分类 - 左侧文字'),
(10, '分类 - 顶部图片'),
(11, '分类 - 推荐'),
(12, '分类 - 文字链接'),
(13, '分类 - 横幅'),
(15, '推荐页 - 顶部图标'),
(16, '推荐页 - BANNER'),
(17, '推荐页 - 中部滚动'),
(18, '推荐页 - 横幅大图'),
(19, '推荐页 - 横幅小图'),
(20, '推荐页 - 文字广告\r\n'),
(21, '解析播放页 - 文字广告\r\n'),
(22, '解析播放页 - BANNER\r\n'),
(23, '解析播放页 - 小图\n');

-- --------------------------------------------------------

--
-- 表的结构 `ap_count`
--

CREATE TABLE IF NOT EXISTS `ap_count` (
  `day` varchar(50) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=98 ;

--
-- 转存表中的数据 `ap_count`
--

INSERT INTO `ap_count` (`day`, `ip`, `count`, `id`) VALUES
('2020-04-02', '106.89.173.179', 2, 1),
('2020-04-03', '117.132.193.255', 1, 2),
('2020-04-03', '123.53.254.61', 1, 3),
('2020-04-03', '183.197.47.126', 1, 4),
('2020-04-03', '103.85.144.151', 1, 5),
('2020-04-03', '60.222.176.93', 1, 6),
('2020-04-04', '39.166.113.184', 1, 7),
('2020-04-04', '36.60.158.59', 1, 8),
('2020-04-04', '222.134.147.126', 1, 9),
('2020-04-04', '113.70.82.230', 1, 10),
('2020-04-04', '110.157.136.107', 1, 11),
('2020-04-04', '61.158.147.43', 1, 12),
('2020-04-04', '110.183.41.134', 1, 13),
('2020-04-04', '1.192.237.176', 1, 14),
('2020-04-04', '223.96.190.55', 1, 15),
('2020-04-04', '113.24.187.145', 1, 16),
('2020-04-04', '110.253.212.3', 1, 17),
('2020-04-04', '103.251.98.135', 1, 18),
('2020-04-05', '49.114.50.81', 1, 19),
('2020-04-05', '218.92.137.226', 1, 20),
('2020-04-05', '183.92.251.175', 1, 21),
('2020-04-05', '120.242.160.222', 1, 22),
('2020-04-05', '112.117.189.207', 1, 23),
('2020-04-06', '27.12.209.255', 1, 24),
('2020-04-06', '182.123.10.137', 1, 25),
('2020-04-06', '42.48.113.141', 1, 26),
('2020-04-06', '120.230.128.88', 1, 27),
('2020-04-06', '118.113.39.184', 1, 28),
('2020-04-06', '113.122.240.186', 1, 29),
('2020-04-06', '220.202.152.25', 1, 30),
('2020-04-06', '211.97.131.250', 1, 31),
('2020-04-06', '1.94.166.145', 1, 32),
('2020-04-06', '182.51.86.70', 1, 33),
('2020-04-06', '112.94.74.81', 1, 34),
('2020-04-06', '111.19.53.104', 1, 35),
('2020-04-07', '120.231.17.53', 1, 36),
('2020-04-07', '123.12.54.166', 1, 37),
('2020-04-08', '36.105.26.53', 1, 38),
('2020-04-08', '61.158.147.239', 1, 39),
('2020-04-08', '119.132.17.211', 1, 40),
('2020-04-08', '223.67.1.95', 1, 41),
('2020-04-08', '117.152.62.58', 1, 42),
('2020-04-08', '114.135.232.180', 1, 43),
('2020-04-08', '14.113.142.198', 1, 44),
('2020-04-08', '119.166.107.89', 1, 45),
('2020-04-08', '59.38.62.164', 1, 46),
('2020-04-08', '223.67.0.21', 1, 47),
('2020-04-09', '112.37.128.227', 1, 48),
('2020-04-09', '175.150.137.73', 1, 49),
('2020-04-09', '182.88.196.205', 1, 50),
('2020-04-09', '42.226.84.88', 1, 51),
('2020-04-10', '125.82.214.20', 1, 52),
('2020-04-10', '123.139.236.253', 1, 53),
('2020-04-10', '101.38.224.35', 1, 54),
('2020-04-10', '221.192.178.194', 1, 55),
('2020-04-10', '106.89.170.159', 1, 56),
('2020-04-10', '175.152.149.22', 1, 57),
('2020-04-10', '106.124.71.184', 1, 58),
('2020-04-10', '112.44.104.46', 1, 59),
('2020-04-10', '123.5.148.200', 1, 60),
('2020-04-11', '106.114.77.240', 1, 61),
('2020-04-11', '211.97.131.56', 1, 62),
('2020-04-11', '211.97.131.34', 1, 63),
('2020-04-11', '223.73.120.133', 1, 64),
('2020-04-12', '61.158.208.205', 1, 65),
('2020-04-12', '112.41.35.188', 1, 66),
('2020-04-12', '112.17.247.67', 1, 67),
('2020-04-12', '112.97.244.90', 1, 68),
('2020-04-12', '221.204.159.130', 1, 69),
('2020-04-12', '112.227.173.203', 1, 70),
('2020-04-13', '112.9.16.134', 1, 71),
('2020-04-13', '182.101.34.244', 1, 72),
('2020-04-13', '223.91.215.218', 1, 73),
('2020-04-13', '111.37.49.54', 1, 74),
('2020-04-13', '171.8.216.85', 1, 75),
('2020-04-13', '175.19.228.150', 1, 76),
('2020-04-13', '117.152.169.14', 1, 77),
('2020-04-13', '112.248.46.243', 1, 78),
('2020-04-13', '60.20.228.148', 1, 79),
('2020-04-14', '42.184.7.174', 1, 80),
('2020-04-14', '183.40.26.117', 1, 81),
('2020-04-14', '36.43.225.70', 1, 82),
('2020-04-14', '121.22.28.50', 1, 83),
('2020-04-14', '183.65.23.248', 1, 84),
('2020-04-14', '36.148.73.247', 1, 85),
('2020-04-14', '124.114.244.168', 1, 86),
('2020-04-15', '116.31.134.251', 1, 87),
('2020-04-15', '39.162.130.15', 1, 88),
('2020-04-15', '124.227.116.55', 1, 89),
('2020-04-15', '112.8.63.75', 1, 90),
('2020-04-16', '113.69.180.163', 1, 91),
('2020-04-16', '223.89.114.131', 1, 92),
('2020-04-16', '112.38.63.237', 1, 93),
('2020-04-16', '49.77.234.149', 1, 94),
('2020-04-16', '117.44.46.210', 1, 95),
('2020-04-17', '39.128.125.243', 1, 96),
('2020-04-17', '119.189.13.209', 2, 97);

-- --------------------------------------------------------

--
-- 表的结构 `ap_dianka`
--

CREATE TABLE IF NOT EXISTS `ap_dianka` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `dianka` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL COMMENT '谁生成的',
  `ctime` int(11) NOT NULL COMMENT '生成时间',
  `y` int(1) NOT NULL COMMENT '0待激活 1已使用',
  `yid` int(1) DEFAULT NULL COMMENT '谁用的',
  `time` int(11) NOT NULL COMMENT '添加会员时间',
  `type` int(1) NOT NULL COMMENT '0普通 1永久',
  `name` varchar(255) NOT NULL,
  `stime` int(11) DEFAULT NULL COMMENT '使用时间',
  PRIMARY KEY (`id`,`dianka`),
  UNIQUE KEY `dianka` (`dianka`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=72 ;

--
-- 转存表中的数据 `ap_dianka`
--

INSERT INTO `ap_dianka` (`id`, `dianka`, `uid`, `ctime`, `y`, `yid`, `time`, `type`, `name`, `stime`) VALUES
(7, 'PNSLO2K9P', 1, 1585984317, 1, 7, 31536000, 0, '一年', 1585984342),
(8, 'PNSDE7SOX', 1, 1586068166, 1, 51, 31536000, 0, '一年', 1586441827),
(9, 'PNSO5VSWC', 1, 1586068177, 0, 0, 31536000, 0, '一年', NULL),
(10, 'PNSB90F15', 1, 1586068651, 1, 0, 31536000, 0, '一年', NULL),
(11, 'PNS74S2T9', 1, 1586068960, 0, 0, 2592000, 0, '一月', NULL),
(12, 'PNS1LC2ST', 1, 1586068960, 0, 0, 2592000, 0, '一月', NULL),
(13, 'PNS2S8L1H', 21, 1586091946, 1, 21, 604800, 0, '体验', 1586091957),
(14, 'PNSGBPW08', 21, 1586091946, 1, 21, 604800, 0, '体验', 1586330485),
(15, 'PNSEJRO8T', 21, 1586091946, 1, 21, 604800, 0, '体验', 1586451813),
(16, 'PNSHOQRJ4', 21, 1586091946, 1, 21, 604800, 0, '体验', 1586703487),
(17, 'PNSW1UI7A', 21, 1586091946, 0, 0, 604800, 0, '体验', NULL),
(18, 'PNS40TFJH', 21, 1586091946, 1, 21, 604800, 0, '体验', 1586776356),
(19, 'PNSJL87KT', 21, 1586091946, 0, 0, 604800, 0, '体验', NULL),
(20, 'PNSG7MUIC', 21, 1586091946, 0, 0, 604800, 0, '体验', NULL),
(21, 'PNS5XQIEA', 21, 1586091946, 0, 0, 604800, 0, '体验', NULL),
(22, 'PNSPCN7TE', 21, 1586091946, 0, 0, 604800, 0, '体验', NULL),
(23, 'PNS70X6FN', 1, 1586147590, 0, 0, 0, 1, '永久', NULL),
(24, 'PNSGL3MRV', 1, 1586155656, 0, 0, 0, 1, '永久', NULL),
(25, 'PNSB1VSHW', 1, 1586155656, 0, 0, 0, 1, '永久', NULL),
(26, 'PNSRK8MGS', 1, 1586330829, 0, 0, 604800, 0, '体验', NULL),
(27, 'PNSUJCYMV', 1, 1586330829, 0, 0, 604800, 0, '体验', NULL),
(28, 'PNSG9HFX2', 1, 1586587256, 1, 18, 0, 1, '永久', 1586587583),
(29, 'PNS1LD2JY', 1, 1586598354, 1, 2, 604800, 0, '体验', 1586601958),
(30, 'PNSK42OJT', 1, 1586613578, 0, 0, 604800, 0, '体验', NULL),
(31, 'PNSIYNMJB', 1, 1586614046, 0, 0, 604800, 0, '体验', NULL),
(32, 'PNSD23YN7', 1, 1586663924, 0, 0, 604800, 0, '体验', NULL),
(33, 'PNS9KYTIH', 1, 1586663968, 0, 0, 604800, 0, '体验', NULL),
(34, 'PNS7RX0I5', 1, 1586694916, 0, 0, 2592000, 0, '一月', NULL),
(35, 'PNS4GBTL1', 1, 1586694916, 0, 0, 2592000, 0, '一月', NULL),
(36, 'PNSSLQWXP', 1, 1586696331, 1, 39, 604800, 0, '体验', 1586696370),
(37, 'PNS7SZR45', 1, 1586704023, 1, 21, 604800, 0, '体验', 1586704250),
(38, 'PNSZ4VP3S', 1, 1586705888, 0, 0, 604800, 0, '体验', NULL),
(39, 'PNS85BM2T', 1, 1586732477, 0, 0, 604800, 0, '体验', NULL),
(40, 'PNSKJG2X3', 57, 1586741896, 1, 57, 0, 1, '永久', 1586741903),
(41, 'PNSLK8X7Y', 1, 1586759186, 0, 0, 604800, 0, '体验', NULL),
(42, 'PNS71H2F3', 1, 1586889831, 0, 0, 604800, 0, '体验', NULL),
(43, 'PNSSNIOC2', 1, 1586941824, 1, 19, 604800, 0, '体验', 1586941861),
(44, 'PNSG518UB', 95, 1586959987, 1, 95, 604800, 0, '体验', 1586959996),
(45, 'PNSSWG795', 95, 1586959990, 0, 0, 604800, 0, '体验', NULL),
(46, 'PNSST4DC2', 95, 1586960052, 1, 95, 604800, 0, '体验', 1587052205),
(47, 'PNSAHBLD8', 1, 1587009638, 0, 0, 604800, 0, '体验', NULL),
(48, 'PNSBOGAQ7', 1, 1587091736, 0, 0, 604800, 0, '体验', NULL),
(49, 'PNSDB8TF1', 1, 1587091806, 0, 0, 604800, 0, '体验', NULL),
(50, 'PNSPU4E3J', 1, 1587092155, 0, 0, 604800, 0, '体验', NULL),
(51, 'PNSMXZ81D', 1, 1587095672, 0, 0, 604800, 0, '体验', NULL),
(52, 'PNS3SY4OB', 1, 1587099636, 1, 101, 604800, 0, '体验', 1587099658),
(53, 'PNSDWCH73', 98, 1587113194, 1, 98, 31536000, 0, '一年', 1587113199),
(54, 'PNSOHFXC1', 98, 1587113194, 1, 98, 31536000, 0, '一年', 1587113237),
(55, 'PNSEVRDMY', 98, 1587113194, 0, 0, 31536000, 0, '一年', NULL),
(56, 'PNSPWEIJ4', 98, 1587113194, 0, 0, 31536000, 0, '一年', NULL),
(57, 'PNSK4OMNQ', 98, 1587113194, 0, 0, 31536000, 0, '一年', NULL),
(58, 'PNSVD9GO3', 98, 1587113194, 0, 0, 31536000, 0, '一年', NULL),
(59, 'PNS95X3G1', 98, 1587113194, 0, 0, 31536000, 0, '一年', NULL),
(60, 'PNS69TOM7', 98, 1587113194, 0, 0, 31536000, 0, '一年', NULL),
(61, 'PNS6DEW5M', 98, 1587113194, 0, 0, 31536000, 0, '一年', NULL),
(62, 'PNS6US7XA', 98, 1587113194, 0, 0, 31536000, 0, '一年', NULL),
(63, 'PNS4A2YHK', 98, 1587114725, 0, 0, 31536000, 0, '一年', NULL),
(64, 'PNSJGKX10', 98, 1587114725, 0, 0, 31536000, 0, '一年', NULL),
(65, 'PNSG7Q5SP', 98, 1587114725, 0, 0, 31536000, 0, '一年', NULL),
(66, 'PNSSKPIG7', 98, 1587114725, 0, 0, 31536000, 0, '一年', NULL),
(67, 'PNSY9TE3W', 98, 1587114725, 0, 0, 31536000, 0, '一年', NULL),
(68, 'PNSF4RM3K', 1, 1587117945, 1, 102, 0, 1, '永久', 1587118011),
(69, 'PNSY9SDZJ', 1, 1587118420, 1, 103, 0, 1, '永久', 1587118469),
(70, 'PNSAFL25U', 1, 1587130635, 0, 0, 0, 1, '永久', NULL),
(71, 'PNS9VNC7R', 1, 1587130793, 1, 104, 31536000, 0, '一年', 1587131102);

-- --------------------------------------------------------

--
-- 表的结构 `ap_dianka_log`
--

CREATE TABLE IF NOT EXISTS `ap_dianka_log` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `money` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ap_dianka_log`
--

INSERT INTO `ap_dianka_log` (`id`, `uid`, `name`, `number`, `time`, `money`) VALUES
(0, 21, '体验', '10', '1586091946', '10'),
(0, 1, '永久', '1', '1586147590', '6'),
(0, 1, '永久', '1', '1586155656', '6'),
(0, 1, '永久', '1', '1586155656', '6'),
(0, 1, '体验', '2', '1586330829', '2'),
(0, 1, '一月', '1', '1586694916', '2'),
(0, 1, '一月', '1', '1586694916', '2'),
(0, 1, '体验', '1', '1586705888', '1'),
(0, 57, '永久', '1', '1586741896', '6'),
(0, 95, '体验', '1', '1586959987', '1'),
(0, 95, '体验', '1', '1586959990', '1'),
(0, 95, '体验', '1', '1586960052', '1'),
(0, 98, '一年', '10', '1587113194', '50'),
(0, 98, '一年', '5', '1587114725', '25');

-- --------------------------------------------------------

--
-- 表的结构 `ap_fxtb`
--

CREATE TABLE IF NOT EXISTS `ap_fxtb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  `linkurl` varchar(255) DEFAULT NULL,
  `picurl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ap_jilu`
--

CREATE TABLE IF NOT EXISTS `ap_jilu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `time` varchar(255) NOT NULL,
  `ping` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=216 ;

--
-- 转存表中的数据 `ap_jilu`
--

INSERT INTO `ap_jilu` (`id`, `uid`, `title`, `url`, `time`, `ping`) VALUES
(1, 1, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/x/m/play?cid=mzc00200q06w7zx&vid=l0033spqumo&ref_pg=page_video_detail', '1585901968', '腾讯'),
(2, 1, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1585902413', '腾讯'),
(3, 1, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/x/m/play?cid=mzc00200q06w7zx&vid=l0033spqumo&ref_pg=page_video_detail', '1585902476', '腾讯'),
(4, 1, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1585907603', '腾讯'),
(5, 1, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1585907951', '腾讯'),
(6, 1, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1585908143', '腾讯'),
(7, 1, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1585908228', '腾讯'),
(8, 1, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1585908702', '腾讯'),
(9, 1, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1585909649', '腾讯'),
(10, 3, '鬼吹灯之龙岭迷窟-电影-高清完整版在线观看–爱奇艺', 'https://m.iqiyi.com/v_19rx9jx19s.html', '1585916629', '爱奇艺'),
(11, 5, '重生', 'https://m.youku.com/alipay_video/id_2b70efbfbd0fefbfbd39.html?spm=a2hww.12518357.homeDrawer2.1', '1585922416', '优酷'),
(12, 6, '天使陷落_电影_高清在线观看-PP视频-原PPTV聚力视频', 'https://m.pptv.com/show/7GYiaobXXfr0gngY.html', '1585923231', 'pptv'),
(13, 7, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/x/m/play?cid=mzc00200q06w7zx&vid=t00336j5wpa&ref_pg=page_video_detail', '1585923818', '腾讯'),
(14, 9, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200x33f3if.html', '1585934888', '腾讯'),
(15, 1, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1585965318', '腾讯'),
(16, 12, '我和我的祖国-电影-最新高清视频在线观看-芒果TV', 'https://m.mgtv.com/b/328884/7271769.html?fpa=906&fpos=2', '1585967363', '芒果'),
(17, 12, '民国奇探第1集-电视剧-高清正版视频-爱奇艺', 'https://m.iqiyi.com/v_19rx2un304.html', '1585967450', '爱奇艺'),
(18, 14, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1585969695', '腾讯'),
(19, 15, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'http://m.v.qq.com/x/m/play?cid=m441e3rjq9kwpsc&vid=k00334exzus&ref_pg=page_video_detail', '1585972844', '腾讯'),
(20, 15, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'http://m.v.qq.com/x/m/play?cid=m441e3rjq9kwpsc&vid=k00334exzus&ref_pg=page_video_detail', '1585973262', '腾讯'),
(21, 15, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'http://m.v.qq.com/page/g/0/i/g0844edtw5i.html', '1585975703', '腾讯'),
(22, 15, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'http://m.v.qq.com/page/r/0/n/r0926nnp5sn.html', '1585975794', '腾讯'),
(23, 7, '《我和我的祖国》片段：广场封闭 电动装置升旗困难重重-电影-最新高清视频在线观看-芒果TV', 'https://m.mgtv.com/b/328884/7273740.html', '1585975929', '芒果'),
(24, 7, '我和我的祖国-电影-最新高清视频在线观看-芒果TV', 'https://m.mgtv.com/b/328884/7271769.html?fpa=906&fpos=1', '1585976610', '芒果'),
(25, 10, '今早 天安门广场下半旗志哀', 'https://m.tv.sohu.com/u/vw/187621610.shtml?channeled=null&columnid=3764', '1585977334', '搜狐'),
(26, 10, '今早 天安门广场下半旗志哀', 'https://m.tv.sohu.com/u/vw/187621610.shtml?channeled=null&columnid=3764', '1585977356', '搜狐'),
(27, 18, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1585979743', '腾讯'),
(28, 18, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1585979794', '腾讯'),
(29, 18, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/x/m/play?cid=mzc00200q06w7zx&vid=l0033spqumo&ref_pg=page_video_detail', '1585980022', '腾讯'),
(30, 18, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200x33f3if.html', '1585980923', '腾讯'),
(31, 18, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1585981568', '腾讯'),
(32, 18, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1585994527', '腾讯'),
(33, 19, '民国奇探第1集-电视剧-高清正版视频-爱奇艺', 'https://m.iqiyi.com/v_19rx2un304.html', '1585999771', '爱奇艺'),
(34, 19, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/x/cover/m/mzc00200a7ghbkc.html', '1585999888', '腾讯'),
(35, 1, '腾讯视频', 'https://m.v.qq.com/tv.html?univ_id=&univ_name=', '1586049470', '腾讯'),
(36, 1, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1586049482', '腾讯'),
(37, 21, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/x/m/play?cid=fyxgdb78znsgkti&vid=&ref_pg=page_home_channel', '1586063707', '腾讯'),
(38, 22, '冰糖炖雪梨', 'https://m.youku.com/alipay_video/id_27eaee8934c44174bb83.html?spm=a2hww.12518357.homeDrawer1.2', '1586093012', '优酷'),
(39, 26, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/7/78cux5q3o1x9tug.html', '1586107676', '腾讯'),
(40, 27, '来自手机的你-想戳戳她！全程近距离直拍郑爽一身粉嫩现身薇娅直播间-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/335774/7796095.html?fpa=762&fpos=4', '1586113582', '芒果'),
(41, 29, '快乐大本营20200405期：张新成谭松韵带你穿越2000年 熊梓淇于小彤网名大公开-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/334727/7831075.html?fpa=906&fpos=2', '1586143121', '芒果'),
(42, 29, '天天向上20200405期：胡兵美妆教学王一博 《有翡》剧组私下生活曝光-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/334728/7833156.html?fpa=906&fpos=1', '1586143253', '芒果'),
(43, 1, '《我家那闺女2 会员Plus版》08期：林允侯明昊即兴合唱 蒋梦婕聊圈内生存不易-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/336277/7824969.html?fpa=762&fpos=1', '1586151102', '芒果'),
(44, 32, '冰糖炖雪梨', 'https://m.youku.com/alipay_video/id_27eaee8934c44174bb83.html?spm=a2hww.12518357.homeDrawer1.1', '1586154503', '优酷'),
(45, 32, '冰糖炖雪梨', 'https://m.youku.com/alipay_video/id_XNDU4OTI0ODcyNA==.html?spm=a2hww.12518357.homeDrawer1.1', '1586154550', '优酷'),
(46, 35, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/f/fyxgdb78znsgkti.html', '1586168226', '腾讯'),
(47, 35, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1586168695', '腾讯'),
(48, 35, '冰糖炖雪梨', 'https://m.youku.com/alipay_video/id_27eaee8934c44174bb83.html?spm=a2hww.12518357.homeDrawer1.1', '1586176101', '优酷'),
(49, 35, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/7/78cux5q3o1x9tug.html', '1586178668', '腾讯'),
(50, 35, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1586180073', '腾讯'),
(51, 35, '甜蜜的任务第13期：汪苏泷张新成合体化身解忧使者 现场PK魔性串烧-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/334729/7826109.html?fpa=762&fpos=2', '1586180700', '芒果'),
(52, 1, '《我家那闺女2 会员Plus版》08期：林允侯明昊即兴合唱 蒋梦婕聊圈内生存不易-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/336277/7824969.html?fpa=762&fpos=1', '1586244225', '芒果'),
(53, 1, '《我家那闺女2 会员Plus版》08期：林允侯明昊即兴合唱 蒋梦婕聊圈内生存不易-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/336277/7824969.html?fpa=762&fpos=1', '1586249184', '芒果'),
(54, 37, '我的奇妙男友2之恋恋不忘 第1集-电视剧-全集高清视频-芒果TV', 'https://m.mgtv.com/b/328268/5144766.html?fpa=15481&fpos=2', '1586257197', '芒果'),
(55, 37, '三千鸦杀 第1集-电视剧-全集高清视频-芒果TV', 'https://m.mgtv.com/b/328378/7738315.html?fpa=1347&fpos=1', '1586258046', '芒果'),
(56, 38, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'http://m.v.qq.com/x/m/play?cid=mzc002009mrek37&vid=f0033klruar&ref_pg=page_video_detail', '1586261272', '腾讯'),
(57, 39, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/x/cover/m/mzc00200wookd59.html', '1586306740', '腾讯'),
(58, 39, '就这样-拉黑她 -电影-最新高清视频在线观看-芒果TV', 'https://m.mgtv.com/b/337179/7774179.html', '1586306799', '芒果'),
(59, 40, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'http://m.v.qq.com/page/n/3/r/n3036veh8jr.html', '1586315357', '腾讯'),
(60, 42, '我是余欢水', 'https://m.youku.com/alipay_video/id_fdec053ca5f3414eb527.html?spm=a2hww.12518357.homeDrawer0.i0', '1586322550', '优酷'),
(61, 42, '楼下女友请签收 第9集-电视剧-全集高清视频-芒果TV', 'https://m.mgtv.com/b/330994/7823608.html?fpa=906&fpos=2', '1586322791', '芒果'),
(62, 43, '我是余欢水', 'https://m.youku.com/alipay_video/id_fdec053ca5f3414eb527.html?spm=a2hww.12518357.homeDrawer0.i0', '1586323251', '优酷'),
(63, 45, '疯狂老爹-电影-高清完整版在线观看–爱奇艺', 'https://m.iqiyi.com/v_19rx0uhp1s.html', '1586329287', '爱奇艺'),
(64, 1, '三千鸦杀 第17集-电视剧-全集高清视频-芒果TV', 'https://m.mgtv.com/b/328378/7810874.html', '1586330784', '芒果'),
(65, 1, '楼下女友请签收 第7集-电视剧-全集高清视频-芒果TV', 'https://m.mgtv.com/b/330994/7823172.html', '1586331086', '芒果'),
(66, 40, '冰糖炖雪梨', 'https://m.youku.com/alipay_video/id_27eaee8934c44174bb83.html?spm=a2hww.12518357.homeDrawer1.1', '1586342624', '优酷'),
(67, 40, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'http://m.v.qq.com/page/b/0/h/b089603uwrh.html', '1586342711', '腾讯'),
(68, 40, '冰糖炖雪梨', 'https://m.youku.com/alipay_video/id_27eaee8934c44174bb83.html?spm=a2hww.12518357.homeDrawer1.1', '1586342728', '优酷'),
(69, 47, '《婚前21天 会员Plus版》第4期：吴尊一家分享暖心早餐 傅首尔鼓励式教育获赞-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/336727/7842037.html?fpa=762&fpos=1', '1586344482', '芒果'),
(70, 47, '民国奇探第18集-电视剧-高清正版视频–爱奇艺', 'https://m.iqiyi.com/v_19rwpo5b34.html', '1586344624', '爱奇艺'),
(71, 47, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/x/m/play?cid=dxd1v76tmu0wjuj&vid=n0033rr1tsn&ref_pg=page_video_detail', '1586344652', '腾讯'),
(72, 47, '冰糖炖雪梨', 'https://m.youku.com/alipay_video/id_XNDYxMDUxNjEwOA==.html?spm=a2hww.12518357.homeDrawer1.1', '1586344676', '优酷'),
(73, 47, '《婚前21天 会员Plus版》第4期：吴尊一家分享暖心早餐 傅首尔鼓励式教育获赞-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/336727/7842037.html?fpa=762&fpos=1', '1586344703', '芒果'),
(74, 47, '《周游记·音乐辑》02期：周杰伦分享新专辑名，周游世界游出创作灵感！-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/337305/7842176.html?fpa=762&fpos=2', '1586344731', '芒果'),
(75, 47, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'http://m.v.qq.com/cover/0/0gsf9fytppje54d.html', '1586344836', '腾讯'),
(76, 48, 'internal-player', 'https://m.v.qq.com/interact/internal/index.html?cid=mzc0020010hqsc1&hidestatusbar=1&hidetitlebar=1&landscape=1&ovscroll=1&syswebview=1&useWebPlayer=1&url=https%3A%2F%2Fgcdh5.videohudong.com%2Fdeploy%2F3%2F3%2Findex.html%3Fcid%3Dmzc0020010hqsc1', '1586353864', '腾讯'),
(77, 48, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/d/dxd1v76tmu0wjuj.html', '1586353881', '腾讯'),
(78, 47, '《婚前21天 会员Plus版》第4期：吴尊一家分享暖心早餐 傅首尔鼓励式教育获赞-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/336727/7842037.html?fpa=762&fpos=1', '1586355348', '芒果'),
(79, 47, '民国奇探第1集-电视剧-高清正版视频-爱奇艺', 'https://m.iqiyi.com/v_19rx2un304.html', '1586355383', '爱奇艺'),
(80, 50, '明星大侦探之名侦探学院 第二季-4月9日看点：《名侦探学院 第二季》课程升级 侦探学员在线云battle-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/337425/7847029.html?fpa=762&fpos=1', '1586370037', '芒果'),
(81, 51, '冰糖炖雪梨', 'https://m.youku.com/alipay_video/id_27eaee8934c44174bb83.html?spm=a2hww.12518357.homeDrawer1.1', '1586372169', '优酷'),
(82, 52, '重生', 'https://m.youku.com/alipay_video/id_2b70efbfbd0fefbfbd39.html?spm=a2hww.12518357.homeDrawer1.2', '1586401731', '优酷'),
(83, 53, '无心法师3第27集-电视剧-高清正版视频–爱奇艺', 'https://m.iqiyi.com/v_19rx419ka4.html', '1586416830', '爱奇艺'),
(84, 53, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'http://m.v.qq.com/cover/m/m441e3rjq9kwpsc.html?vid=l0033snfmsp', '1586416885', '腾讯'),
(85, 53, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/x/cover/m/mzc00200i3gpva4.html', '1586418330', '腾讯'),
(86, 53, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/x/cover/m/mzc00200i3gpva4.html', '1586418365', '腾讯'),
(87, 53, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/x/cover/m/mzc00200i3gpva4.html', '1586418382', '腾讯'),
(88, 51, '重生', 'https://m.youku.com/alipay_video/id_2b70efbfbd0fefbfbd39.html?spm=a2hww.12518357.homeDrawer1.1', '1586441884', '优酷'),
(89, 54, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'http://m.v.qq.com/cover/w/wi8e2p5kirdaf3j.html', '1586444695', '腾讯'),
(90, 57, '《婚前21天 会员Plus版》第4期：吴尊一家分享暖心早餐 傅首尔鼓励式教育获赞-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/336727/7842037.html?fpa=762&fpos=1', '1586474147', '芒果'),
(91, 57, '《婚前21天 会员Plus版》第4期：吴尊一家分享暖心早餐 傅首尔鼓励式教育获赞-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/336727/7842037.html?fpa=762&fpos=1', '1586474207', '芒果'),
(92, 57, '如果岁月可回头第1集-电视剧-高清正版视频-爱奇艺', 'https://m.iqiyi.com/v_19rwvjqblo.html', '1586474232', '爱奇艺'),
(93, 60, '三千鸦杀', 'https://m.youku.com/alipay_video/id_060973b8e7094f1187ae.html?spm=a2hww.12518357.homeDrawer2.1', '1586512376', '优酷'),
(94, 60, '三千鸦杀', 'https://m.youku.com/alipay_video/id_XNDU5NDU2ODUyOA==.html?spm=a2hww.12518357.homeDrawer2.1', '1586512471', '优酷'),
(95, 60, '《婚前21天 会员Plus版》第4期：吴尊一家分享暖心早餐 傅首尔鼓励式教育获赞-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/336727/7842037.html?fpa=762&fpos=2', '1586512499', '芒果'),
(96, 60, '新亮剑(第04集)_VIP尊享_高清在线观看-PP视频-原PPTV聚力视频', 'https://m.pptv.com/show/wI6mJYT85iaSHBW0.html', '1586512677', 'pptv'),
(97, 60, '叶问外传：张天志-电影-高清完整版在线观看–爱奇艺', 'https://m.iqiyi.com/v_19rrc14898.html', '1586512832', '爱奇艺'),
(98, 60, '叶问外传：张天志-电影-高清完整版在线观看–爱奇艺', 'https://m.iqiyi.com/v_19rrc14898.html', '1586512912', '爱奇艺'),
(99, 60, '导火线-电影-高清完整版在线观看–爱奇艺', 'https://m.iqiyi.com/v_19rrj5vi30.html', '1586513337', '爱奇艺'),
(100, 60, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/d/dxd1v76tmu0wjuj.html', '1586513399', '腾讯'),
(101, 60, '我是余欢水', 'https://m.youku.com/alipay_video/id_XNDYyMDcyMzIwNA==.html?spm=a2hww.12518357.homeDrawer1.4', '1586513592', '优酷'),
(102, 60, '我是余欢水', 'https://m.youku.com/alipay_video/id_XNDYyMDcyMzIxNg==.html?spm=a2hww.12518357.homeDrawer1.4', '1586513632', '优酷'),
(103, 60, '《朋友请听好 会员Plus版》05期：娜式迷惑英语笑倒何炅 千玺“被迫营业”表演葫芦丝？-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/335223/7860474.html?fpa=762&fpos=1', '1586513685', '芒果'),
(104, 62, '哪吒之魔童降世', 'https://m.youku.com/alipay_video/id_3065a94071e942b7ba6e.html?spm=a2hww.12586873.movieDrawer2.2', '1586524324', '优酷'),
(105, 62, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'http://m.v.qq.com/cover/m/mzc00200q06w7zx.html?vid=r0033zibx4a', '1586524550', '腾讯'),
(106, 62, '沈腾变卧底"出卖"贾玲，华晨宇遭周一围按头进水缸', 'https://m.youku.com/alipay_video/id_cbba934b14f747049187.html?spm=a2hww.12518357.homeDrawer1.1', '1586525933', '优酷'),
(107, 62, '疯狂老爹-电影-高清完整版在线观看–爱奇艺', 'https://m.iqiyi.com/v_19rx0uhp1s.html', '1586525966', '爱奇艺'),
(108, 62, '大黄蜂-电影-高清完整版在线观看–爱奇艺', 'https://m.iqiyi.com/v_19rrduqzgk.html', '1586526018', '爱奇艺'),
(109, 62, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc002001pvxwzy.html', '1586526056', '腾讯'),
(110, 62, '我是余欢水', 'https://m.youku.com/alipay_video/id_fdec053ca5f3414eb527.html?spm=a2hww.12960747.homeDrawer2.1', '1586526169', '优酷'),
(111, 62, '我是余欢水', 'https://m.youku.com/alipay_video/id_XNDYyMDcyMzIwMA==.html?spm=a2hww.12960747.homeDrawer2.1', '1586526197', '优酷'),
(112, 62, '我是余欢水', 'https://m.youku.com/alipay_video/id_XNDYyMDcyMzIxMg==.html?spm=a2hww.12960747.homeDrawer2.1', '1586526247', '优酷'),
(113, 62, '我是余欢水', 'https://m.youku.com/alipay_video/id_XNDYyMDcyMzIwMA==.html?spm=a2hww.12960747.homeDrawer2.1', '1586526262', '优酷'),
(114, 62, '我是余欢水', 'https://m.youku.com/alipay_video/id_XNDYyMDcyMzIxNg==.html?spm=a2hww.12960747.homeDrawer2.1', '1586526271', '优酷'),
(115, 62, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'http://m.v.qq.com/cover/m/mzc00200q06w7zx.html?vid=j0033kbdjsv', '1586526598', '腾讯'),
(116, 61, '三千鸦杀 第30集-电视剧-全集高清视频-芒果TV', 'https://m.mgtv.com/b/328378/7810936.html', '1586527220', '芒果'),
(117, 61, '三千鸦杀 第30集-电视剧-全集高清视频-芒果TV', 'https://m.mgtv.com/b/328378/7810936.html', '1586527483', '芒果'),
(118, 62, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'http://m.v.qq.com/play.html?cid=56p08rqdpw480tn&exsource=1&source=qiyi', '1586527554', '腾讯'),
(119, 62, '传奇-电影-高清完整版在线观看–爱奇艺', 'https://m.iqiyi.com/v_19rrdt8lmo.html?vfrm=2-3-0-1', '1586527895', '爱奇艺'),
(120, 63, '沈腾变卧底"出卖"贾玲，华晨宇遭周一围按头进水缸', 'https://m.youku.com/alipay_video/id_cbba934b14f747049187.html?spm=a2hww.12518357.homeDrawer1.1', '1586533019', '优酷'),
(121, 63, '《朋友请听好 会员Plus版》05期：娜式迷惑英语笑倒何炅 千玺“被迫营业”表演葫芦丝？-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/335223/7860474.html?fpa=762&fpos=1', '1586533098', '芒果'),
(122, 63, '疯狂老爹-电影-高清完整版在线观看–爱奇艺', 'https://m.iqiyi.com/v_19rx0uhp1s.html', '1586533129', '爱奇艺'),
(123, 62, '沈腾变卧底"出卖"贾玲，华晨宇遭周一围按头进水缸', 'https://m.youku.com/alipay_video/id_cbba934b14f747049187.html?spm=a2hww.12518357.homeDrawer1.1', '1586564768', '优酷'),
(124, 62, '鸡皮疙瘩-电影-高清完整版在线观看–爱奇艺', 'https://m.iqiyi.com/v_19rrm8ypk8.html', '1586564805', '爱奇艺'),
(125, 62, '叶问4：完结篇-电影-高清完整版在线观看–爱奇艺', 'https://m.iqiyi.com/v_19rrc1di2c.html', '1586564837', '爱奇艺'),
(126, 65, '三千鸦杀 第21集-电视剧-全集高清视频-芒果TV', 'https://m.mgtv.com/b/328378/7810564.html?fpa=18929&fpos=1', '1586580496', '芒果'),
(127, 66, '我成了他的班主任第1集', 'https://m.tv.sohu.com/v6216439.shtml?aid=9625683&channeled=1210020001&columnid=57', '1586581989', '搜狐'),
(128, 18, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/d/dxd1v76tmu0wjuj.html', '1586587599', '腾讯'),
(129, 18, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200k12f5gi.html?vid=k0033ht0tqj', '1586587618', '腾讯'),
(130, 18, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/d/dxd1v76tmu0wjuj.html', '1586587713', '腾讯'),
(131, 18, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'http://m.v.qq.com/cover/z/zr5a67l333ehzu9.html', '1586587736', '腾讯'),
(132, 18, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1586587816', '腾讯'),
(133, 18, '沈腾变卧底"出卖"贾玲，华晨宇遭周一围按头进水缸', 'https://m.youku.com/alipay_video/id_cbba934b14f747049187.html?spm=a2hww.12518357.homeDrawer1.1', '1586588154', '优酷'),
(134, 18, '冰糖炖雪梨', 'https://m.youku.com/alipay_video/id_27eaee8934c44174bb83.html?spm=a2hww.12518357.homeDrawer1.2', '1586588212', '优酷'),
(135, 7, '民国奇探第4集-电视剧-高清正版视频–爱奇艺', 'https://m.iqiyi.com/v_19rx2ulsec.html', '1586593259', '爱奇艺'),
(136, 68, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/x/m/play?cid=mzc00200q06w7zx&vid=r0033bk1mxp&ref_pg=page_video_detail', '1586593886', '腾讯'),
(137, 65, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'http://m.v.qq.com/cover/m/m5zzglrbt5zdv6d.html', '1586596483', '腾讯'),
(138, 1, '《朋友请听好 会员Plus版》05期：娜式迷惑英语笑倒何炅 千玺“被迫营业”表演葫芦丝？-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/335223/7860474.html?fpa=762&fpos=1', '1586612057', '芒果'),
(139, 18, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1586660422', '腾讯'),
(140, 18, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1586666980', '腾讯'),
(141, 18, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/b/br4nav8daqim2vu.html', '1586667037', '腾讯'),
(142, 18, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc002001pvxwzy.html', '1586667505', '腾讯'),
(143, 18, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1586667573', '腾讯'),
(144, 70, '全世界最好的你', 'https://m.youku.com/alipay_video/id_becfcfefca7e44dea5dd.html?spm=a2hww.12518357.homeDrawer2.1', '1586691576', '优酷'),
(145, 39, '哪吒之魔童降世', 'https://m.youku.com/alipay_video/id_3065a94071e942b7ba6e.html?spm=a2hww.12586873.movieDrawer2.1', '1586696544', '优酷'),
(146, 71, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/x/m/play?cid=mzc00200q06w7zx&vid=j0033kbdjsv&ref_pg=page_video_detail', '1586696628', '腾讯'),
(147, 72, '《快本超时营业中2》01期：宋茜宋威龙台下讲悄悄话 任嘉伦谭松韵甜蜜“互怼”-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/337596/7873169.html?fpa=906&fpos=2', '1586696655', '芒果'),
(148, 72, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc002001pvxwzy.html', '1586696727', '腾讯'),
(149, 39, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/x/m/play?cid=dxd1v76tmu0wjuj&vid=n0033rr1tsn&ref_pg=page_video_detail', '1586696761', '腾讯'),
(150, 72, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/x/m/play?cid=dxd1v76tmu0wjuj&vid=n0033rr1tsn&ref_pg=page_video_detail', '1586696802', '腾讯'),
(151, 71, '明星大侦探之学院2先导片：云开课揭秘升级玩法 周峻纬文韬暴风对决-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/337425/7852591.html?fpa=762&fpos=1', '1586697106', '芒果'),
(152, 73, '八强喜剧人狭路相逢开启二分之一终极“大逃杀”', 'https://m.youku.com/alipay_video/id_edde3effe5f94af495e5.html?spm=null', '1586699462', '优酷'),
(153, 73, '《我家那闺女2 会员Plus版》09期：王鸥被沈梦辰“拷问” 阚清子自曝买不起房？-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/336277/7868687.html?fpa=762&fpos=2', '1586699495', '芒果'),
(154, 73, '教授与疯子_VIP尊享_高清在线观看-PP视频-原PPTV聚力视频', 'https://m.pptv.com/show/zmwambicFjs0wrhY.html', '1586699533', 'pptv'),
(155, 73, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/x/m/play?cid=dxd1v76tmu0wjuj&vid=f003323u5wn&ref_pg=page_video_detail', '1586699551', '腾讯'),
(156, 73, '我成了他的班主任第9集', 'https://m.tv.sohu.com/v6226338.shtml?channeled=1211010100', '1586699566', '搜狐'),
(157, 73, '新包青天南侠谜案-电影-高清完整版在线观看–爱奇艺', 'https://m.iqiyi.com/v_19rwn9aauw.html', '1586699583', '爱奇艺'),
(158, 73, '八强喜剧人狭路相逢开启二分之一终极“大逃杀”', 'https://m.youku.com/alipay_video/id_edde3effe5f94af495e5.html?spm=a2hww.12518357.homeDrawer0.i0', '1586699632', '优酷'),
(159, 70, '全世界最好的你', 'https://m.youku.com/alipay_video/id_becfcfefca7e44dea5dd.html?spm=a2hww.12518357.homeDrawer1.1', '1586701092', '优酷'),
(160, 70, '我成了他的班主任第1集', 'https://m.tv.sohu.com/v6216439.shtml?aid=9625683&channeled=1210010500&columnid=4', '1586701295', '搜狐'),
(161, 70, '历史上首次！美国50个州全部进入重大灾难状态__高清在线观看-PP视频-原PPTV聚力视频', 'https://m.pptv.com/show/IboEjXYH7CqNC3M.html', '1586701324', 'pptv'),
(162, 70, '独立纵队2_电视剧_高清在线观看-PP视频-原PPTV聚力视频', 'https://m.pptv.com/show/GkYvrRV76ymMCnI.html', '1586701354', 'pptv'),
(163, 74, '民国奇探第1集-电视剧-高清正版视频-爱奇艺', 'https://m.iqiyi.com/v_19rx2un304.html', '1586701684', '爱奇艺'),
(164, 74, '航海王第1集-动漫-高清正版视频-爱奇艺', 'https://m.iqiyi.com/v_19rrok4nt0.html', '1586701743', '爱奇艺'),
(165, 74, '航海王第928集-动漫-高清正版视频–爱奇艺', 'https://m.iqiyi.com/v_19ryfdvx4k.html', '1586701766', '爱奇艺'),
(166, 18, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200bll9mha.html', '1586712315', '腾讯'),
(167, 56, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'http://m.v.qq.com/x/m/play?cid=mzc00200chankdx&vid=s0033qvs63s&ref_pg=page_video_detail', '1586713243', '腾讯'),
(168, 72, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'http://m.v.qq.com/cover/g/gz9q7kd8wviwkxv.html', '1586720241', '腾讯'),
(169, 72, '楼下女友请签收 第11集-电视剧-全集高清视频-芒果TV', 'https://m.mgtv.com/b/330994/7872809.html?fpa=906&fpos=1', '1586723283', '芒果'),
(170, 75, '八强喜剧人狭路相逢开启二分之一终极“大逃杀”', 'https://m.youku.com/alipay_video/id_edde3effe5f94af495e5.html?spm=null', '1586739177', '优酷'),
(171, 57, '《我家那闺女2 会员Plus版》09期：王鸥被沈梦辰“拷问” 阚清子自曝买不起房？-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/336277/7868687.html?fpa=762&fpos=2', '1586741946', '芒果'),
(172, 76, '骡子（普通话）-电影-高清完整版在线观看–爱奇艺', 'https://m.iqiyi.com/v_19rvl7s5uc.html', '1586742004', '爱奇艺'),
(173, 76, '楼下女友请签收 第11集-电视剧-全集高清视频-芒果TV', 'https://m.mgtv.com/b/330994/7872809.html?fpa=906&fpos=3', '1586742120', '芒果'),
(174, 57, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/d/dxd1v76tmu0wjuj.html', '1586742162', '腾讯'),
(175, 58, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1586742233', '腾讯'),
(176, 30, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'http://m.v.qq.com/cover/m/mzc00200bll9mha.html?vid=v0033blmf6h', '1586745540', '腾讯'),
(177, 76, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://3g.v.qq.com/x/m/play?cid=mzc00200q06w7zx&vid=j0033kbdjsv&ref_pg=page_video_detail', '1586747474', '腾讯'),
(178, 1, '明星大侦探之学院2先导片：云开课揭秘升级玩法 周峻纬文韬暴风对决-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/337425/7852591.html?fpa=762&fpos=1', '1586754924', '芒果'),
(179, 1, '明星大侦探之学院2先导片：云开课揭秘升级玩法 周峻纬文韬暴风对决-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/337425/7852591.html?fpa=762&fpos=1', '1586754970', '芒果'),
(180, 78, '明星大侦探之学院2先导片：云开课揭秘升级玩法 周峻纬文韬暴风对决-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/337425/7852591.html?fpa=762&fpos=1', '1586761978', '芒果'),
(181, 80, '鬓边不是海棠红第1集-电视剧-高清正版视频-爱奇艺', 'https://m.iqiyi.com/v_19rwvyttw8.html', '1586782038', '爱奇艺'),
(182, 80, '八强喜剧人狭路相逢开启二分之一终极“大逃杀”', 'https://m.youku.com/alipay_video/id_edde3effe5f94af495e5.html?spm=a2hww.12518357.homeDrawer0.i0', '1586782162', '优酷'),
(183, 80, '甜蜜的任务第14期：鞠婧祎回应“钢铁直女”称号 大赞易烊千玺频出金句-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/334729/7874074.html?fpa=762&fpos=1', '1586782187', '芒果'),
(184, 82, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/d/dxd1v76tmu0wjuj.html', '1586789432', '腾讯'),
(185, 83, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc002001pvxwzy.html', '1586793221', '腾讯'),
(186, 57, '衰鬼撬墙脚', 'https://m.youku.com/alipay_video/id_cc05c442962411de83b1.html?spm=a2h0c.8166622.PhoneSokuProgram_1.dplaybutton', '1586840470', '优酷'),
(187, 57, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'http://m.v.qq.com/cover/o/oqvci0fuemykpoy.html', '1586840936', '腾讯'),
(188, 87, '亲爱的，公主病第1集', 'https://m.tv.sohu.com/v3194024.shtml?aid=9073213&channeled=1210010500&columnid=4', '1586848994', '搜狐'),
(189, 87, '鬓边不是海棠红第2集-电视剧-高清正版视频–爱奇艺', 'https://m.iqiyi.com/v_19rwvyto6o.html', '1586849040', '爱奇艺'),
(190, 87, '鬓边不是海棠红第3集-电视剧-高清正版视频–爱奇艺', 'https://m.iqiyi.com/v_19rwvyutmo.html', '1586849060', '爱奇艺'),
(191, 91, '云川夫妇回忆过去的甜蜜事情，傅九云不舍的离开', 'https://m.youku.com/alipay_video/id_XNDYyNjQxOTgxMg==.html?spm=a2hww.12518357.homeDrawer2.4', '1586885399', '优酷'),
(192, 91, '明星大侦探之学院2先导片：云开课揭秘升级玩法 周峻纬文韬暴风对决-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/337425/7852591.html?fpa=762&fpos=4', '1586885447', '芒果'),
(193, 91, '《朋友请吃好》05期：二七四乐队成团小站首秀？谢娜独门水煮鱼征服味蕾-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/336805/7888449.html?fpa=762&fpos=2', '1586885563', '芒果'),
(194, 92, '全世界最好的你', 'https://m.youku.com/alipay_video/id_becfcfefca7e44dea5dd.html?spm=a2hww.12518357.homeDrawer2.1', '1586893418', '优酷'),
(195, 92, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/x/m/play?cid=mzc00200bll9mha&vid=v0033e8g4w1&ref_pg=page_video_detail', '1586893464', '腾讯'),
(196, 93, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/x/cover/m/mzc00200ral2qx7.html', '1586911177', '腾讯'),
(197, 93, '银河补习班-电影-高清完整版在线观看–爱奇艺', 'https://m.iqiyi.com/v_19rsff5pds.html?vfrm=2-3-3-1', '1586911230', '爱奇艺'),
(198, 96, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/d/dxd1v76tmu0wjuj.html', '1586978075', '腾讯'),
(199, 96, '全世界最好的你', 'https://m.youku.com/alipay_video/id_becfcfefca7e44dea5dd.html?spm=a2hww.12960747.homeDrawer2.1', '1586978137', '优酷'),
(200, 96, '猎狐', 'https://m.youku.com/alipay_video/id_3aefbfbd0519d5a911ef.html?spm=a2hww.12518357.homeDrawer2.1', '1586978586', '优酷'),
(201, 96, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'http://m.v.qq.com/cover/m/mzc00200bll9mha.html?vid=j00336vecpt', '1586978809', '腾讯'),
(202, 96, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/d/dxd1v76tmu0wjuj.html', '1586999741', '腾讯'),
(203, 96, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/d/dxd1v76tmu0wjuj.html', '1586999899', '腾讯'),
(204, 98, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200k12f5gi.html', '1587009888', '腾讯'),
(205, 98, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1587009935', '腾讯'),
(206, 98, '我成了他的班主任第1集', 'https://m.tv.sohu.com/v6216439.shtml?aid=9625683&channeled=1210010500&columnid=4', '1587025890', '搜狐'),
(207, 98, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1587025915', '腾讯'),
(208, 98, '2020音乐空间站01期：华晨宇飞机上偶遇萧敬腾 毛不易周深后台唱《消愁》-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/337115/7695236.html?fpa=762&fpos=2', '1587026128', '芒果'),
(209, 95, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/x/m/play?cid=dxd1v76tmu0wjuj&vid=n0033rr1tsn&ref_pg=page_video_detail', '1587028720', '腾讯'),
(210, 95, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/x/m/play?cid=dxd1v76tmu0wjuj&vid=n0033rr1tsn&ref_pg=page_video_detail', '1587031401', '腾讯'),
(211, 99, '我是余欢水第3集-电视剧-高清正版视频-爱奇艺', 'https://m.iqiyi.com/v_19rwnjvvgs.html#vfrm=30-26-15-7', '1587045159', '爱奇艺'),
(212, 100, '2020音乐空间站01期：华晨宇飞机上偶遇萧敬腾 毛不易周深后台唱《消愁》-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/337115/7695236.html?fpa=762&fpos=2', '1587051270', '芒果'),
(213, 100, '明星大侦探之名侦探学院 第二季-《学院2》4月23日看点：明侦案件高能还原 撒贝宁蒲熠星再现《公主嫁到》-综艺-热门节目大全-芒果TV', 'https://m.mgtv.com/b/337425/7902924.html?fpa=762&fpos=1', '1587054052', '芒果'),
(214, 101, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/x/m/play?cid=mzc00200k12f5gi&vid=g0033nrjhyz&ref_pg=page_video_detail', '1587099493', '腾讯'),
(215, 98, '腾讯视频-中国领先的在线视频媒体平台，海量高清视频在线观看', 'https://m.v.qq.com/cover/m/mzc00200q06w7zx.html', '1587114394', '腾讯');

-- --------------------------------------------------------

--
-- 表的结构 `ap_kai`
--

CREATE TABLE IF NOT EXISTS `ap_kai` (
  `uid` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=139 ;

--
-- 转存表中的数据 `ap_kai`
--

INSERT INTO `ap_kai` (`uid`, `cid`, `ctime`, `id`) VALUES
(1, 4, 1585922650, 119),
(1, 7, 1585976994, 120),
(1, 7, 1585984287, 121),
(1, 21, 1586091812, 122),
(1, 21, 1586091992, 123),
(1, 44, 1586323150, 124),
(1, 49, 1586359211, 125),
(1, 2, 1586404052, 126),
(1, 2, 1586404118, 127),
(1, 67, 1586587337, 128),
(1, 57, 1586741561, 129),
(1, 57, 1586741814, 130),
(1, 58, 1586741977, 131),
(1, 2, 1586749516, 132),
(1, 95, 1586959772, 133),
(1, 95, 1586959981, 134),
(1, 98, 1587110192, 135),
(1, 98, 1587110300, 136),
(1, 98, 1587110539, 137),
(1, 98, 1587113168, 138);

-- --------------------------------------------------------

--
-- 表的结构 `ap_liuy`
--

CREATE TABLE IF NOT EXISTS `ap_liuy` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `txt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ap_liuy`
--

INSERT INTO `ap_liuy` (`id`, `ip`, `date`, `txt`) VALUES
(0, '112.9.20.184', '2020-03-17 17:23:52', '测试反馈'),
(0, '112.9.21.199', '2020-03-26 22:22:36', '2233');

-- --------------------------------------------------------

--
-- 表的结构 `ap_login_code`
--

CREATE TABLE IF NOT EXISTS `ap_login_code` (
  `uid` int(11) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `client_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_mn`
--

CREATE TABLE IF NOT EXISTS `ap_mn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `url` text,
  `img` text,
  `content` varchar(255) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `region` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=87 ;

--
-- 转存表中的数据 `ap_mn`
--

INSERT INTO `ap_mn` (`id`, `title`, `url`, `img`, `content`, `type`, `region`) VALUES
(86, '木匠铺发生的事', 'https://youku.cdn10-okzy.com/20200318/13131_ace70f2c/index.m3u8', 'https://tu.tianzuida.com/pic/upload/vod/2020-03-19/202003191584580562.jpg', '111', 'HD高清', '韩国');

-- --------------------------------------------------------

--
-- 表的结构 `ap_moneylog`
--

CREATE TABLE IF NOT EXISTS `ap_moneylog` (
  `uid` int(11) NOT NULL,
  `money` decimal(11,2) NOT NULL,
  `cid` int(11) NOT NULL,
  `ctime` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `ap_moneylog`
--

INSERT INTO `ap_moneylog` (`uid`, `money`, `cid`, `ctime`, `id`) VALUES
(1, 9999.00, 21, 1586091920, 1);

-- --------------------------------------------------------

--
-- 表的结构 `ap_option`
--

CREATE TABLE IF NOT EXISTS `ap_option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `daili_price` float NOT NULL,
  `vip1` float DEFAULT NULL COMMENT '七天价格',
  `vip2` float NOT NULL COMMENT '1月价格',
  `vip3` float NOT NULL COMMENT '3月价格',
  `vip4` float NOT NULL COMMENT '6月价格',
  `vip5` float NOT NULL COMMENT '12月价格',
  `vip6` float NOT NULL COMMENT '永久价格',
  `weichat` tinytext NOT NULL,
  `d_vip1` float DEFAULT NULL COMMENT '代理拿货7天',
  `d_vip2` float NOT NULL COMMENT '代理拿货1月',
  `d_vip3` float NOT NULL COMMENT '代理拿货3月',
  `d_vip4` float NOT NULL COMMENT '代理拿货6月',
  `d_vip5` float NOT NULL COMMENT '代理拿货1年',
  `d_vip6` float NOT NULL COMMENT '代理拿货永久价格',
  `pay` varchar(999) NOT NULL COMMENT '用户支付接口',
  `d_pay` varchar(999) NOT NULL COMMENT '代理支付接口',
  `faka_vip1` varchar(255) NOT NULL,
  `faka_vip2` varchar(255) NOT NULL,
  `faka_vip3` varchar(255) NOT NULL,
  `faka_vip4` varchar(255) NOT NULL,
  `faka_vip5` varchar(255) NOT NULL,
  `faka_vip6` varchar(255) NOT NULL,
  `faka_agent` varchar(255) NOT NULL,
  `daili_yue` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `ap_option`
--

INSERT INTO `ap_option` (`id`, `daili_price`, `vip1`, `vip2`, `vip3`, `vip4`, `vip5`, `vip6`, `weichat`, `d_vip1`, `d_vip2`, `d_vip3`, `d_vip4`, `d_vip5`, `d_vip6`, `pay`, `d_pay`, `faka_vip1`, `faka_vip2`, `faka_vip3`, `faka_vip4`, `faka_vip5`, `faka_vip6`, `faka_agent`, `daili_yue`) VALUES
(1, 0, 0.1, 0, 0, 99, 99, 0, '完美网服 微信：GOX718', 1, 2, 3, 4, 66, 6, 'pay', 'daili_pay', 'http://tmsj.taomiwo.top/pay/?name=体验卡7天&type_id=1&fee=0.1', 'http://tmsj.taomiwo.top/pay/?name=体验卡7天&type_id=1&fee=0.01', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `ap_pass_log`
--

CREATE TABLE IF NOT EXISTS `ap_pass_log` (
  `ip` varchar(50) NOT NULL,
  `ctime` int(11) NOT NULL,
  `uid` varchar(11) NOT NULL,
  `old_pass` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `aid` int(11) NOT NULL,
  `web` int(1) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- 转存表中的数据 `ap_pass_log`
--

INSERT INTO `ap_pass_log` (`ip`, `ctime`, `uid`, `old_pass`, `pass`, `aid`, `web`, `id`) VALUES
('192.168.3.103', 1559836812, '1', '7b9e49b79200cb8069dff056cd6aba2b', '0c7540eb7e65b553ec1ba6b20de79608', 1, 0, 47),
('118.78.243.143', 1585991549, '1', '4d82d8ae7629371451345f622e6277ca', '884699b16b1016665c4a7628e4a5fa46', 1, 0, 48),
('59.38.62.164', 1586362967, '13800138000', 'd93a5def7511da3d0f2d171d9c344e91', 'e0996e790f6e15147a1e960b93e6ef86', 2147483647, 1, 49),
('123.139.236.37', 1586745204, '13333333333', 'c78b6663d47cfbdb4d65ea51c104044e', 'd93c51bbb01f716d038b67c7ca1f45df', 2147483647, 1, 50),
('123.139.236.37', 1586745250, '13333333333', 'd93c51bbb01f716d038b67c7ca1f45df', 'd93a5def7511da3d0f2d171d9c344e91', 2147483647, 1, 51),
('39.128.125.243', 1587099736, '18487292642', '7055eced15538bfb7c07f8a5b28fc5d0', 'dca1117a4a9933499a4a870b4190065a', 2147483647, 1, 52),
('119.189.13.209', 1587117431, '18365740774', 'b3360cc45c2819fc1ea9b0f16c15fdee', 'd93a5def7511da3d0f2d171d9c344e91', 2147483647, 1, 53),
('119.189.13.209', 1587118061, '18365740774', 'd93a5def7511da3d0f2d171d9c344e91', 'b3360cc45c2819fc1ea9b0f16c15fdee', 2147483647, 1, 54);

-- --------------------------------------------------------

--
-- 表的结构 `ap_pay`
--

CREATE TABLE IF NOT EXISTS `ap_pay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `outtrade` varchar(200) NOT NULL,
  `trade` varchar(200) NOT NULL,
  `type` char(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `money` decimal(11,2) NOT NULL,
  `trade_status` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  `kami` varchar(15) DEFAULT NULL,
  `time` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `ap_pay`
--

INSERT INTO `ap_pay` (`id`, `outtrade`, `trade`, `type`, `name`, `money`, `trade_status`, `cid`, `kami`, `time`) VALUES
(1, '20200411174524671', '2020041117452666165', 'qqpay', '体验卡7天', 0.10, 'TRADE_SUCCESS', 2, 'PNS1LD2JY', 1586598354),
(2, '2020041117452666165', '20200411174524671', '1', '111', 0.10, 'TRADE_SUCCESS', 0, 'PNSK42OJT', 1586613578),
(3, '20200411220644706', '2020041122064712313', 'qqpay', '体验卡7天', 0.10, 'TRADE_SUCCESS', 0, 'PNSIYNMJB', 1586614046),
(4, '20200412115822201', '2020041211582620429', 'alipay', '一月卡', 0.10, 'TRADE_SUCCESS', 0, 'PNSD23YN7', 1586663924),
(5, '20200412115918401', '2020041211592092818', 'alipay', '一月卡', 0.10, 'TRADE_SUCCESS', 0, 'PNS9KYTIH', 1586663968),
(6, '20200412205814487', '2020041220581760568', 'qqpay', '体验卡7天', 0.10, 'TRADE_SUCCESS', 39, 'PNSSLQWXP', 1586696331),
(7, '20200412230626464', '2020041223063711741', 'alipay', '体验卡7天', 0.10, 'TRADE_SUCCESS', 21, 'PNS7SZR45', 1586704023),
(8, '20200413070052584', '2020041307005611241', 'qqpay', '一月卡', 0.10, 'TRADE_SUCCESS', 0, 'PNS85BM2T', 1586732477),
(9, '20200413142605687', '2020041314260982777', 'qqpay', '体验卡7天', 0.10, 'TRADE_SUCCESS', 0, 'PNSLK8X7Y', 1586759186),
(10, '20200415024324501', '2020041502432550130', 'qqpay', '体验卡7天', 0.10, 'TRADE_SUCCESS', 0, 'PNS71H2F3', 1586889831),
(11, '20200415171007928', '2020041517100891878', 'alipay', '体验卡7天', 0.10, 'TRADE_SUCCESS', 19, 'PNSSNIOC2', 1586941824),
(12, '20200416115909906', '2020041612000321895', 'qqpay', '体验卡7天', 0.10, 'TRADE_SUCCESS', 0, 'PNSAHBLD8', 1587009638),
(13, '20200417104831958', '2020041710484258954', 'qqpay', '一月卡', 0.10, 'TRADE_SUCCESS', 0, 'PNSBOGAQ7', 1587091736),
(14, '20200417104937883', '2020041710495574227', 'qqpay', '一月卡', 0.10, 'TRADE_SUCCESS', 0, 'PNSDB8TF1', 1587091806),
(15, '20200417105543698', '2020041710554565159', 'qqpay', '一月卡', 0.10, 'TRADE_SUCCESS', 0, 'PNSPU4E3J', 1587092155),
(16, '20200417115401617', '2020041711540914987', 'alipay', '一月卡', 0.10, 'TRADE_SUCCESS', 0, 'PNSMXZ81D', 1587095672),
(17, '20200417130003141', '2020041713000694617', 'qqpay', '体验卡7天', 0.10, 'TRADE_SUCCESS', 101, 'PNS3SY4OB', 1587099636);

-- --------------------------------------------------------

--
-- 表的结构 `ap_rebate`
--

CREATE TABLE IF NOT EXISTS `ap_rebate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `get_id` int(11) NOT NULL COMMENT '获取分成用户ID',
  `give_id` int(11) NOT NULL COMMENT '充值人员ID',
  `money` decimal(11,2) NOT NULL COMMENT '获得分成金额',
  `info` varchar(255) NOT NULL COMMENT '余额说明',
  `time` varchar(255) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `ap_rebate`
--

INSERT INTO `ap_rebate` (`id`, `get_id`, `give_id`, `money`, `info`, `time`) VALUES
(1, 98, 103, 0.00, '用户升级 一级奖励 高级', '1587118469'),
(2, 98, 104, 49.50, '用户升级 一级奖励 高级', '1587131102');

-- --------------------------------------------------------

--
-- 表的结构 `ap_sad`
--

CREATE TABLE IF NOT EXISTS `ap_sad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  `title` varchar(225) NOT NULL,
  `linkurl` varchar(255) DEFAULT NULL,
  `picurl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ap_set`
--

CREATE TABLE IF NOT EXISTS `ap_set` (
  `id` int(11) NOT NULL,
  `pay_id` int(11) DEFAULT NULL,
  `pay_key` text,
  `appkey` text,
  `appid` text,
  `logo` text NOT NULL,
  `MASTERSECRET` text COMMENT 'GOX718',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_share`
--

CREATE TABLE IF NOT EXISTS `ap_share` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- 转存表中的数据 `ap_share`
--

INSERT INTO `ap_share` (`id`, `ip`, `uid`) VALUES
(1, '123.147.250.169', 1),
(2, '218.92.137.226', 21),
(3, '113.122.240.186', 30),
(4, '61.129.8.179', 30),
(5, '61.129.7.235', 30),
(6, '61.129.6.151', 30),
(7, '101.91.60.106', 30),
(8, '36.4.199.228', 1),
(9, '101.227.139.163', 1),
(10, '61.151.178.180', 1),
(11, '101.89.29.78', 1),
(12, '182.51.86.70', 34),
(13, '36.4.243.127', 25),
(14, '36.105.26.53', 39),
(15, '114.135.232.180', 45),
(16, '101.38.224.35', 57),
(17, '183.200.69.220', 14),
(18, '61.151.207.205', 14),
(19, '101.89.19.149', 14),
(20, '58.251.121.186', 58),
(21, '221.192.178.194', 58),
(22, '123.139.236.26', 56),
(23, '58.246.221.163', 56),
(24, '223.167.152.53', 56),
(25, '223.166.151.191', 56),
(26, '42.184.7.174', 1),
(27, '123.170.151.77', 75),
(28, '61.129.6.251', 75),
(29, '125.127.218.102', 70),
(30, '101.89.239.232', 71),
(31, '139.214.244.7', 71),
(32, '58.247.204.63', 71),
(33, '221.2.104.114', 75),
(34, '49.77.234.149', 99),
(35, '59.55.36.221', 82),
(36, '125.78.94.184', 70),
(37, '59.36.121.172', 70),
(38, '59.37.97.43', 70),
(39, '182.254.52.17', 70),
(40, '116.128.128.79', 30),
(41, '119.189.13.209', 98);

-- --------------------------------------------------------

--
-- 表的结构 `ap_shezi`
--

CREATE TABLE IF NOT EXISTS `ap_shezi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jbday` int(11) NOT NULL,
  `jbmoney` int(11) NOT NULL,
  `dljba` decimal(11,2) NOT NULL COMMENT '代理一级 ',
  `dljbb` decimal(11,2) NOT NULL COMMENT '代理二级',
  `dljbc` decimal(11,2) NOT NULL COMMENT '代理一级 初级',
  `dljbd` decimal(11,2) NOT NULL COMMENT '代理二级 初级',
  `dljbe` decimal(11,2) NOT NULL,
  `fdljb` int(11) NOT NULL,
  `sharefjb` int(11) NOT NULL,
  `ckfa` decimal(11,2) NOT NULL COMMENT '用户一级',
  `ckfb` decimal(11,2) NOT NULL COMMENT '用户二级',
  `ckfc` decimal(11,2) NOT NULL COMMENT '用户一级 初级',
  `ckfd` decimal(11,2) NOT NULL COMMENT '用户二级 初级',
  `ckfe` decimal(11,2) NOT NULL DEFAULT '1.00',
  `qqkf` varchar(22) NOT NULL,
  `zcjb` int(11) NOT NULL,
  `zcmoney` int(11) NOT NULL,
  `mobi` varchar(22) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `ap_shezi`
--

INSERT INTO `ap_shezi` (`id`, `jbday`, `jbmoney`, `dljba`, `dljbb`, `dljbc`, `dljbd`, `dljbe`, `fdljb`, `sharefjb`, `ckfa`, `ckfb`, `ckfc`, `ckfd`, `ckfe`, `qqkf`, `zcjb`, `zcmoney`, `mobi`) VALUES
(1, 10, 0, 0.50, 0.30, 0.20, 0.10, 0.00, 0, 0, 0.50, 0.30, 0.20, 0.10, 0.00, '', 0, 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `ap_stop`
--

CREATE TABLE IF NOT EXISTS `ap_stop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ap_task`
--

CREATE TABLE IF NOT EXISTS `ap_task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `total` int(11) DEFAULT NULL,
  `remaind` int(11) DEFAULT '0',
  `distribute` int(11) DEFAULT '0',
  `price` int(11) DEFAULT NULL,
  `content` text NOT NULL,
  `picture` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ap_task_detail`
--

CREATE TABLE IF NOT EXISTS `ap_task_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `task_name` text NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) DEFAULT '1' COMMENT '1待提交2待审核3通过4驳回',
  `start_time` int(11) NOT NULL,
  `push_time` int(11) NOT NULL,
  `picture` text NOT NULL,
  `audited_time` int(11) DEFAULT NULL,
  `imei` text NOT NULL,
  `ip` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ap_timelog`
--

CREATE TABLE IF NOT EXISTS `ap_timelog` (
  `uid` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `money` decimal(11,2) DEFAULT NULL,
  `day` varchar(11) DEFAULT NULL,
  `lasttime` varchar(20) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `ap_timelog`
--

INSERT INTO `ap_timelog` (`uid`, `ctime`, `cid`, `money`, `day`, `lasttime`, `id`) VALUES
(1, 1586587472, 18, 5.00, '365', '1618123472', 1),
(1, 1586959781, 95, 7.00, '0', '1586959781', 2),
(1, 1586959836, 95, 7.00, '0', '1586959836', 3),
(1, 1587110204, 98, 999.00, '0', '1587110204', 4),
(1, 1587110213, 98, 7.00, '0', '1587110213', 5),
(1, 1587110218, 98, 30.00, '0', '1587110218', 6),
(1, 1587110229, 98, 7.00, '0', '1587110229', 7),
(1, 1587130888, 103, 1.00, '7', '1588381124', 8);

-- --------------------------------------------------------

--
-- 表的结构 `ap_tongji`
--

CREATE TABLE IF NOT EXISTS `ap_tongji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `os` varchar(255) NOT NULL,
  `imei` varchar(255) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ap_top`
--

CREATE TABLE IF NOT EXISTS `ap_top` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL COMMENT 'UID',
  `username` varchar(255) NOT NULL COMMENT '用户名',
  `cash` varchar(255) NOT NULL COMMENT '提现总金额',
  `team` varchar(255) NOT NULL COMMENT '团队成员',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_tuijian`
--

CREATE TABLE IF NOT EXISTS `ap_tuijian` (
  `id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_tv`
--

CREATE TABLE IF NOT EXISTS `ap_tv` (
  `title` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `url` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL DEFAULT '0' COMMENT '0普通 1专题',
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `ap_tv`
--

INSERT INTO `ap_tv` (`title`, `img`, `url`, `id`, `type`, `content`) VALUES
('CCTV-1', 'http://i2.tiimg.com/710595/b525af1fc3af022a.jpg', 'http://ivi.bupt.edu.cn/hls/cctv1hd.m3u8', 1, 0, '1'),
('CCTV-10', 'http://i2.tiimg.com/710595/370c82f1e70d8e11.jpg', 'http://ivi.bupt.edu.cn/hls/cctv10.m3u8', 2, 0, '1'),
('CCTV-11', 'http://i2.tiimg.com/710595/9f9167b29bba672d.jpg', 'http://ivi.bupt.edu.cn/hls/cctv11.m3u8', 3, 0, '1'),
('CCTV-12', 'http://i2.tiimg.com/710595/b015ad76b9a3518b.jpg', 'http://ivi.bupt.edu.cn/hls/cctv12.m3u8', 4, 0, '1'),
('CCTV-13', 'http://i2.tiimg.com/710595/2b41e37fe6e64c99.jpg', 'http://ivi.bupt.edu.cn/hls/cctv13.m3u8', 5, 0, '1'),
('CCTV-14', 'http://i2.tiimg.com/710595/2227234a3f3d7c4c.jpg', 'http://ivi.bupt.edu.cn/hls/cctv14.m3u8', 6, 0, '1'),
('CCTV-15', 'http://i2.tiimg.com/710595/360e61925b0c85d4.jpg', 'http://ivi.bupt.edu.cn/hls/cctv15.m3u8', 7, 0, '1'),
('CCTV-2', 'http://i2.tiimg.com/710595/4354dd3230d8099d.jpg', 'http://ivi.bupt.edu.cn/hls/cctv2.m3u8', 8, 0, '1'),
('CCTV-3', 'http://i2.tiimg.com/710595/c5e88c562a9561ab.jpg', 'http://ivi.bupt.edu.cn/hls/cctv3hd.m3u8', 9, 0, '1'),
('CCTV-4', 'http://i2.tiimg.com/710595/34acbadbf1437c9a.jpg', 'http://ivi.bupt.edu.cn/hls/cctv4.m3u8', 10, 0, '1'),
('CCTV-5', 'http://i2.tiimg.com/710595/6ce43bf380636862.jpg', 'http://ivi.bupt.edu.cn/hls/cctv5hd.m3u8', 11, 0, '1'),
('CCTV-5+', 'http://cccs.123cf.top/public/uploads/20190520/42c6b0b96e4473b8ccaeeb21ffdc521a.jpg', 'http://ivi.bupt.edu.cn/hls/cctv5phd.m3u8', 12, 0, '1'),
('CCTV-6', 'http://i2.tiimg.com/710595/a417f97d03eee9d0.jpg', 'http://ivi.bupt.edu.cn/hls/cctv6hd.m3u8', 13, 0, '1'),
('CCTV-7', 'http://i2.tiimg.com/710595/987a7fb6942a8f0d.jpg', 'http://ivi.bupt.edu.cn/hls/cctv7.m3u8', 14, 0, '1'),
('CCTV-8', 'http://i2.tiimg.com/710595/f488be1c641ce44d.jpg', 'http://ivi.bupt.edu.cn/hls/cctv8hd.m3u8', 15, 0, '1'),
('CCTV-9', 'http://i2.tiimg.com/710595/3da5f88b7f2ae05c.jpg', 'http://ivi.bupt.edu.cn/hls/cctv9.m3u8', 16, 0, '1'),
('北京卡酷少儿', 'https://timgsa.baidu.com/timg?image&quality=80&size=b10000_10000&sec=1521431022&di=35b5372e3943f45dd98ac14cf1176bce&src=http://i6.qhimg.com/dr/250_500_/t01cce007620ff6c031.jpg', 'http://ivi.bupt.edu.cn/hls/btv10.m3u8', 23, 1, '1');

-- --------------------------------------------------------

--
-- 表的结构 `ap_txlog`
--

CREATE TABLE IF NOT EXISTS `ap_txlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `time` int(22) NOT NULL,
  `nickname` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `status` int(11) NOT NULL,
  `jine` int(11) NOT NULL,
  `zfb` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `weixin` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ap_user`
--

CREATE TABLE IF NOT EXISTS `ap_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Source` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nick_name` varchar(255) NOT NULL DEFAULT '',
  `power` varchar(255) NOT NULL DEFAULT '0' COMMENT '0管理  1代理  2用户',
  `status` varchar(255) NOT NULL DEFAULT '0' COMMENT '0禁封  1正常',
  `parentid` int(11) NOT NULL DEFAULT '0',
  `ctime` int(11) NOT NULL DEFAULT '0',
  `logintime` int(11) NOT NULL DEFAULT '0',
  `lasttime` int(11) NOT NULL DEFAULT '0',
  `money` decimal(11,2) NOT NULL DEFAULT '0.00',
  `limit_money` int(11) DEFAULT '0',
  `type` int(1) DEFAULT NULL COMMENT '1永久',
  `phone` varchar(255) DEFAULT NULL,
  `imei` varchar(255) DEFAULT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `sign` int(11) DEFAULT '0',
  `share_ma` varchar(255) DEFAULT NULL,
  `zfb` text NOT NULL,
  `weichat` varchar(255) DEFAULT NULL,
  `url` text,
  `url1` text,
  `url2` text,
  `url3` text,
  `url4` text,
  `url5` text,
  `url6` text,
  `key` varchar(255) DEFAULT NULL,
  `tx` int(111) NOT NULL,
  `txje` int(111) NOT NULL,
  `qdtime` int(11) DEFAULT NULL,
  `headimgurl` varchar(255) NOT NULL COMMENT '用户头像',
  `banner_number` int(11) NOT NULL DEFAULT '0',
  `banner_switch` int(11) NOT NULL DEFAULT '0' COMMENT '0N 1Y 2S 3J',
  `deviceId` varchar(255) DEFAULT NULL COMMENT '设备ID',
  `player_starttimes` int(11) NOT NULL DEFAULT '1' COMMENT '0N 1Y',
  `zfb_name` text NOT NULL COMMENT '支付宝实名',
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `ap_user`
--

INSERT INTO `ap_user` (`id`, `Source`, `username`, `password`, `nick_name`, `power`, `status`, `parentid`, `ctime`, `logintime`, `lasttime`, `money`, `limit_money`, `type`, `phone`, `imei`, `count`, `sign`, `share_ma`, `zfb`, `weichat`, `url`, `url1`, `url2`, `url3`, `url4`, `url5`, `url6`, `key`, `tx`, `txje`, `qdtime`, `headimgurl`, `banner_number`, `banner_switch`, `deviceId`, `player_starttimes`, `zfb_name`, `email`) VALUES
(1, '超管', 'ikmovie666', '4d82d8ae7629371451345f622e6277ca', '淘米视界', '0', '1', 1, 1586517530, 1587129717, 1595328591, 9945.00, 0, 1, '', 'c8facf76cced9eb4', 6526, 194292, 'MM0714', '123456789', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aa3556861ba2edc1fd68fb8f65bb7b13', 1, 10, 1586795203, 'https://s1.ax1x.com/2020/04/03/GN5an0.png', 0, 0, 'Perfect Network Service', 1, '淘米视界', '1207629473@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `ap_video`
--

CREATE TABLE IF NOT EXISTS `ap_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `url` text NOT NULL,
  `region` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=86 ;

--
-- 转存表中的数据 `ap_video`
--

INSERT INTO `ap_video` (`id`, `title`, `img`, `url`, `region`, `type`, `content`) VALUES
(1, '神拳无敌', 'https://img.ynkmjj.com/vod/2019-04-02/201904021554191131.jpg', 'https://mu.qqxy100.com/ts/2/16020341939765248/index.m3u8?wssecret=30cd570e3f441472ab8397f101104771&wstime=1586144000', '台湾', '剧情', '电影《少年阿超》讲述香港小调皮学生阿超改正缺点、努力学习，成为模范好少年的故事。以娱乐的手法，表现了同学间的友谊和少年见义勇为的精神，是一部真正意义上寓教于乐的电影。'),
(2, '戈梅拉岛', 'https://img.ynkmjj.com/202004/38/95e8a1cbbc3d7502eaabe0cf39878038.jpg', 'https://mu.qqxy100.com/ts/2/88935722534305792/index.m3u8?wssecret=b96d9e87f2a08c3acba4d9b499ef472d&wstime=1586144000', '其他', '喜剧', '警察克斯蒂带着任务前往戈梅拉岛，打入黑帮学习口哨暗语。然而当他回到警局之后，昔日的同伴却站在了他的对立面。到底是谁被策反？又是谁在泄密？在表象的忠诚与信任下，一切都不是那么简单。尔虞我诈中，竟然还蔓生开来一场浪漫又富有幽默感的爱之博弈，且看有情人能否终成眷属？罗马尼亚导演波蓝波宇玩转剪辑，五彩缤纷地为观众呈现一出错综复杂的东欧谍战爱情好戏。'),
(3, '留校查看', 'https://img.ynkmjj.com/202004/3c/95e89a87b37ec194281f1d4b33b8543c.jpg', 'https://mu.qqxy100.com/ts/2/87727262186602496/index.m3u8?wssecret=58533740bf0b4bf94eade616524c6d09&wstime=1586144000', '加拿大', '喜剧', '成立于1954年的一群佛罗里达州高中生寻求失去童贞，这使他们寻求报复一个肮脏的夜总会老板和他的乡下人警长兄弟骚扰他们。'),
(4, '朝九晚五', 'https://img.ynkmjj.com/202004/eb/45e89a56dbec0724713c15928f7cd8eb.jpg', 'https://mu.qqxy100.com/ts/2/87721315091349504/index.m3u8?wssecret=bea83b139d2a36bf17464ac075cec518&wstime=1586144000', '美国', '喜剧', '朱迪（简·方达 Jane Fonda 饰）、瓦莱特（莉莉·汤普琳 Lily Tomlin 饰）和朵拉莉（多莉·帕顿 Dolly Parton 饰）共同在一间法人公司工作，三名女性有着不同的人生轨迹和迥异的个性，却同时因为上司富兰克林（达布尼·柯尔曼 Dabney Coleman 饰）的存在而感到痛苦不堪。\r\n                                    \r\n         '),
(5, '虫虫特工队', 'https://img.ynkmjj.com/202004/08/35e89a1df60166903ba2fa97ab272c08.jpg', 'https://mu.qqxy100.com/ts/2/14843431171915776/index.m3u8?wssecret=e93e7eb97f95042e61170a349cf6030d&wstime=1586144000', '美国', '喜剧', '菲力在蚂蚁王国里并不怎么受欢迎，尽管他发明了先进的收割机，然而阴差阳错，他竟然惹了大祸，公主妹妹小不点因此被蝗虫敌人捉去，而且蚂蚁的粮食也受到了蝗虫的威胁。即使菲力救出了小不点，但还是被赶出蚂蚁王国。只有他在外面的世界找到了对付蝗虫的办法，才有可能回到家园。\r\n                                    \r\n                                　'),
(6, '国家公敌', 'https://img.ynkmjj.com/202004/75/85e899f5213eee455cd610ce80c67175.jpg', 'https://mu.qqxy100.com/ts/2/35814616625840128/index.m3u8?wssecret=c519d819e87c248343b1a31adc404ed0&wstime=1586144000', '美国', '动作', '正忙于处理一起和匪帮彼得有关的案子的迪恩，完全不知道自己已陷入一个难以脱身的谋杀案中，因为车祸丧生的友人，将一张记录着一桩国会议员谋杀案的光盘，放在迪恩的袋子里。谋杀国会议员的主谋和他的手下在车祸现场找到了迪恩的名片后，开始跟踪迪恩，企图找回光盘并杀人来口。 \r\n　　迪恩，他打算对其提出起诉，所用的证据由国情局监视方面的老手布利尔提供。雷诺德将迪恩置于严密的监视之下，不仅对他的婚姻施加压力，还要以几'),
(7, '公牛犹斗', 'https://img.ynkmjj.com/202004/14/95e898c15194d121c1ad257136bfb714.jpg', 'https://mu.qqxy100.com/ts/2/88778330551091200/index.m3u8?wssecret=a2cd421d66c380edb390be174c9ea8d2&wstime=1586144000', '美国', '剧情', '在休斯敦以西一个几乎被遗弃的分区中，一个任性的少年直奔她同样任性而宽容的邻居，一个年迈的斗牛士，他在竞技场上表现最好。这是一场碰撞，将改变他们俩。'),
(8, '最后探戈', 'https://img.ynkmjj.com/202004/14/95e898c15194d121c1ad257136bfb714.jpg', 'https://mu.qqxy100.com/ts/2/88701778656231424/index.m3u8?wssecret=72cad323fb05a321eb87728353b861f7&wstime=1586144000', '美国', '剧情', '阿根廷著名探戈舞者玛丽亚·尼夫斯·雷戈和胡安·卡洛斯·科普斯的生活和爱情故事，他们在十几岁时相识，共舞了近50年，直到病痛将他们分开。阿根廷著名探戈舞者玛丽亚·尼夫斯·雷戈和胡安·卡洛斯·科普斯的生活和爱情故事，他们在十几岁时相识，共舞了近50年，直到病痛将他们分开。'),
(9, '疯狂老爹', 'https://img.ynkmjj.com/202004/15/25e899125d4fff30f4757def8d572415.jpg', 'https://mu.qqxy100.com/ts/2/88784496215719936/index.m3u8?wssecret=dbfeac75924b665e44de9335ee8acd6d&wstime=1586144000', '大陆', '喜剧', '本片是一部农村励志喜剧，讲述了退役运动员肖力在父亲的“激励”下，带领村中女童足球队赢得比赛挽救学校的故事。该片展现了人们为了美好生活共同奋斗中的亲情，爱情，师生情等动人情谊，表达了努力踏实向上就能获得美好人生的思想内涵。'),
(10, '上钩', 'https://img.ynkmjj.com/202004/60/85e898b91df6b7231ea559c1d49b8e60.jpg', 'https://mu.qqxy100.com/ts/2/88778141148905472/index.m3u8?wssecret=4b5d7a90ebe99f54fdbb1ff59d0a49f5&wstime=1586144000', '美国', '喜剧', '贝利（萨姆·理查森）和达拉（布列塔尼·斯诺）开始了一种误导和相互欺骗的治疗形式，其中他们必须开车穿越全国，重新再现达拉作为性瘾君子的丰富多彩的历史。随着他们公路旅行的真正动机浮出水面，这对不太可能的情侣们互相强迫他们面对他们的问题，发现实际上可能有更多的爱，而不仅仅是性。'),
(11, '盲人律师', 'https://img.ynkmjj.com/202004/5b/85e8924808dc1095f1fd03561e1bb35b.jpg', 'https://mu.qqxy100.com/ts/2/88657633195589632/index.m3u8?wssecret=8bf3b8033241a0947836726201a78165&wstime=1586144000', '台湾', '剧情', '李政鸿（张哲豪 饰）不甘眼盲而只能在法律事务所内被指派做文书处理的工作，他极力争取参与诉讼，却总是碰壁。某日，他终于接到一件民事求偿诉讼，但没想到这案子的辩护律师，竟是他法律事务所的老闆赵定邦（班铁翔 饰）。他若帮了原告，那又该如何面对他的老闆？而更难的是，这案子不是一般的官司，它竟是件原告人数高达531人的跨国集体诉讼。李政鸿连单人官司都没打过，又是一个盲人，他该怎麽打赢官司？'),
(12, '澳门往事之虎龙斗', 'https://img.ynkmjj.com/202004/1d/85e89195d6f8d1631972727d8724441d.jpg', 'https://mu.qqxy100.com/ts/2/88657507907534848/index.m3u8?wssecret=86eb00b3e35ca7c773fba9dba88d1d68&wstime=1586144000', '大陆', '犯罪', '汪合东和航驿等几个兄弟终于在澳门站住了脚，澳门成就了汪合东，也让他渐渐认识到，自己面对着一个巨大的漩涡，退无可退。 康辉在与汪合东的对抗中失利后，与心腹手下跑到一个清净的小山村躲清净，几个人正在商量要不要回到顺哥手上谋一份差事。日本黑龙会的井上找上门来，要康辉帮他对付汪合东，以便让黑龙会顺利侵入澳门，于是，康辉再一次走到了汪合东的对立面。'),
(13, '伦敦生活', 'https://img.ynkmjj.com/202004/9b/25e88a6065e1a092985bfa9892e80f9b.jpg', 'https://mu.qqxy100.com/ts/2/88531308073975808/index.m3u8?wssecret=5cc157c3485d8fc2545b683d62905c54&wstime=1586144000', '英国', '喜剧', '弗莱巴格（Fleabag）惊呼着某种生活在某种程度上的女人。 她可能看起来过激，情绪上没有过滤性并且自恋，但这只是冰山一角。 由于家庭和友谊的压力，几内亚的一家咖啡馆努力挣扎，Fleabag突然发现自己一无所有。'),
(14, '绿宝石', 'https://img.ynkmjj.com/202004/ec/05e885000e9c6e618c2212af6bda47ec.jpg', 'https://mu.qqxy100.com/ts/2/87736782614953984/index.m3u8?wssecret=845ba42b34a265128341dcf12eef2f2b&wstime=1586144000', '美国', '喜剧', '琼（凯瑟琳·特纳 Kathleen Turner 饰）是一名小说家，创作过许许多多充满了冒险和刺激的故事，销量十分可观。可是尽管如此，琼自己的生活却向来四平八稳波澜不惊，在内心里，她十分希望能够和自己笔下的主人公那样，来一场奇遇。\n                                    \n                                　　机会很快就来临了，某日，琼'),
(15, '入云龙公孙胜', 'https://img.ynkmjj.com/202004/92/95e8879b891ee195e169c947eb8ddb92.jpg', 'https://mu.qqxy100.com/ts/2/88426057799041024/index.m3u8?wssecret=adaf212d4af1da1d21a3e70fadbdebe6&wstime=1586144000', '大陆', '剧情', '小小渔村司马庄来了一个神秘道士。适逢司马庄的祖传宝贝石碑失窃，神秘道士又不偏不斜地在石碑失窃的地方摔了一跤，结果还没等神秘道士从地上爬起来就被司马庄的渔民团团围住，铁平捕头闻讯赶来，当即就要拿神秘道士去衙门审问。自称一清道长的神秘道士给司马庄呼来一场大雨，顿时引起司马庄人的敬畏。\r\n                                        \r\n                  '),
(16, '青蛇之万兽城', 'https://img.ynkmjj.com/202004/c1/05e88165e716575500c4c964bb0a00c1.jpg', 'https://mu.qqxy100.com/ts/2/88368582089506816/index.m3u8?wssecret=de19a672cf424a0905cc62f052b2d932&wstime=1586144000', '大陆', '动作', '苏州城内万妖割据，法师保护百姓，与妖族对立，然一夜之间，随着不明身份的千年青蛇突现，众妖神秘死亡，人类也惶惶不可终日。新晋法师樊海出手降妖，却意外发现了众妖围剿千年蛇妖的秘密。一时间，苏州城风起云涌，暗藏在“和平”背后的惊天阴谋浮出水面……'),
(17, '每况愈下', 'https://img.ynkmjj.com/202004/54/75e880bbb334c1957db4641314b14c54.jpg', 'https://mu.qqxy100.com/ts/2/88365023784599553/index.m3u8?wssecret=1c5c181dd1f9c0914be45bd898134906&wstime=1586144000', '美国', '剧情', '故事讲述在阿尔卑斯山滑雪佳地，一个家庭在就餐时遇到了雪崩，丈夫只顾自己逃命不救妻儿，引发了家庭危机。'),
(18, '倩女幽魂1987', 'https://img.ynkmjj.com/202004/58/85e8806a911af23318bba71b785a9d58.jpg', 'https://mu.qqxy100.com/ts/2/88359636985446400/index.m3u8?wssecret=5874aa22290207f56b2a8e6b31d4eed8&wstime=1586144000', '香港', '爱情', '书生宁采臣（张国荣 饰）收账不成，无处可归，遂夜宿鬼寺兰若寺，遇上侠士燕赤霞（午马 饰），二人成为邻居。一日偶遇艳女聂小倩（王祖贤 饰），二人两情相悦，但小倩乃是被树妖姥姥（刘兆铭 饰）控制的鬼魂，专门迷惑精壮男子代姥姥吸取阳气。小倩见宁采臣心地善良不忍加害，并与他感情逐渐加深。宁采臣欲救小倩脱离姥姥魔掌，但苦于姥姥功力深厚，小倩无法脱离其魔掌。二人遂向燕赤霞求救，在燕赤霞与宁采臣合力之下依然无法抵挡树妖姥姥的妖术。而宁采臣与聂小倩又将命运如何？'),
(19, '恶魔印记', 'https://img.ynkmjj.com/202004/d9/25e87f1e8789fb227e3e896f39f4cdd9.jpg', 'https://mu.qqxy100.com/ts/2/88320937870491648/index.m3u8?wssecret=5f68d65828607dd0f673e1494bd7cae4&wstime=1586144000', '其他', '恐怖', '身为恶魔的卡尔（Karl）与有成瘾问题的牧师汤玛斯（Tomás）一起寻找魔鬼，发现了卡米拉（Camila）的案子。卡米拉（Camila）是一个在恶魔控制下袭击家人的女孩。卡尔和汤玛斯试图通过战斗来拯救她。卡尔曾经面对过许多来自外部的生物，但从来没有像这样的人'),
(20, '晴空战士', 'https://img.ynkmjj.com/202004/c8/75e87d369ec7f082c066eca0253fdec8.jpg', 'https://mu.qqxy100.com/ts/2/82362289092558848/index.m3u8?wssecret=53cf491ddbb2580637e550a042ebc9ce&wstime=1586144000', '韩国', '动作', '大地在污染和环境灾害的双重打击下，已经处在崩溃的边缘，为了生存，人们创造了一个与世隔绝的都市，叫做ECOBAN(这个名字由ecology和ban合并起来，意思是“毁灭生态”)，而这个都市完全靠大地的污染物苟延残喘。\n                                        \n                                    　　但是，只有极少的经过挑选的'),
(21, '棒球男孩', 'https://img.ynkmjj.com/202004/35/15e87d05b93341655d7dce0427d91535.jpg', 'https://mu.qqxy100.com/ts/2/83010486961963008/index.m3u8?wssecret=8edae45bef5b9311dd1d6d0414ab0be0&wstime=1586144000', '美国', '剧情', '米盖尔（Algenis Perez Soto 饰）从小就希望成为一名棒球投手，十六岁那年，他正式走上了职业的道路，并用天赋和努力证明了自己的实力。三年过去，十九岁的米盖尔被球探相中，跟随很多和他一样初出茅庐的运动员一起前往亚利桑那州参加集训，一个新的世界就此在他眼前展开。\n                                    \n                          '),
(22, '六欲天', 'https://img.ynkmjj.com/202004/16/75e876e78c826e45363e388f5b7f4216.jpg', 'https://mu.qqxy100.com/ts/2/88168491869274113/index.m3u8?wssecret=a8bf5cfc6fc7c4d12697aabeab74b4c9&wstime=1586144000', '大陆', '剧情', '因女友自杀而患上抑郁症的警察阿斌（祖峰 饰）和搭档磊哥（陈明昊 饰）在调查一起碎尸案中，与被害者的姐姐李雪（黄璐 饰）相识。李雪自称梦见弟弟被人杀害。在调查过程中，阿斌发现李雪痛失女儿并患上抑郁症的悲惨经历，两人彼此怜悯，相互理解。 这时，在城市漂泊的少女婷婷（张倩如 饰）也渐渐走入阿斌（祖峰 饰）的生活，和他产生说不清的牵绊。\r\n\r\n	　　孤独的少女、备受抑郁症折磨的患者，他们都该如何面对自己的内心，又该如何在这个世界寻找光明'),
(23, '浴缸神探', 'https://img.ynkmjj.com/202004/2a/65e873cea0d50a014af27cb7ee40512a.jpg', 'https://mu.qqxy100.com/ts/2/88141061494407168/index.m3u8?wssecret=3a29b148a2999bfc16bf54487ebe55e5&wstime=1586144000', '大陆', '喜剧', '悬疑小说家周煦阳偶然“秒杀”到一个链接“虫洞”的浴缸，让他头痛不已，突然有一天浴缸给他传送来个帅哥裸男，刑警林沐，两人因为这个奇幻邂逅结缘互生情愫，最后帅哥俩还联手破获一起连环绑架案！拯救了五个美少女！'),
(24, '从不，很少，有时，总是', 'https://img.ynkmjj.com/202004/92/45e872b737663b155c4e0e7167bde292.jpg', 'https://mu.qqxy100.com/ts/2/88107462254657536/index.m3u8?wssecret=1cd1e9516f8f10374e085ac7bfea3ec4&wstime=1586144000', '美国', '剧情', '电影刻画了美国宾夕法尼亚州农村两个少女的故事。在意外怀孕后，Autumn和她的表亲Skylar在家乡遭到了不友好的对待，于是两人启程前往纽约，进行了一场跨越州际之旅。'),
(25, '寝室', 'https://img.ynkmjj.com/202004/09/95e8703e84bb74337731e5d82b6f3f09.jpg', 'https://mu.qqxy100.com/ts/2/88087492036657152/index.m3u8?wssecret=c63ec58945c4ab8c3a4ea058b782466c&wstime=1586144000', '大陆', '剧情', '大学四年，我们一起在寝室吃了197顿饭，一起醉了172次。最后这一顿散伙饭，我想送给你一件印象深刻的礼物。毕业前夕，4个最要好的兄弟再次相聚在寝室里，只有寝室大哥一人没有准时参加，回忆过去，有欢笑也有泪水，但是令人没有想到的是，在老大没有到的这段时间内，寝室内部爆发了冲突，学生会，保研种种大学敏感的话题被揭下了面纱摆在了桌面上，于此同时，他们发现原本平常的寝室竟然被人从里面反锁，寝室成了一个密室，'),
(26, '欲无罪', 'https://img.ynkmjj.com/202004/52/15e86f5237ed644215dd0601d6049652.jpg', 'https://mu.qqxy100.com/ts/2/88071362165342208/index.m3u8?wssecret=e8311cf954721299b5ade4c03497da9b&wstime=1586144000', '大陆', '剧情', '第一次找到女朋友的屌丝大龄男，满心欢喜的要把她介绍给自己的几个死党；令屌丝大龄男悲痛欲绝的是，自己的女朋友竟然和他的死党们都有过床上关系……他，她，他们，该如何面对如此窘境？'),
(27, '卡壳', 'https://img.ynkmjj.com/202004/4d/65e86f49fcfa130363a69fe34765794d.jpg', 'https://mu.qqxy100.com/ts/2/88060965928566784/index.m3u8?wssecret=230f4c296be365ad63b803e32dd2206f&wstime=1586144000', '大陆', '剧情', '唐可大学毕业，因对父亲过度控制自己的人生而苦闷。无意间他看到一张青蛙卡壳照片由此被激励，于是暗下决心改变。几经周折，唐可成了一名快递员，结识了一群同事。最终他告别长期的生活枷锁，开启一段新的人生旅程。'),
(28, '保镖2011', 'https://img.ynkmjj.com/202004/d2/15e86f109943dd80fd4b68e6ea46ddd2.jpg', 'https://mu.qqxy100.com/ts/2/88059983966502912/index.m3u8?wssecret=490788d913c3e4470b431c0876fc8e49&wstime=1586144000', '印度', '爱情', '拉夫利（萨尔曼·汗 Salman Khan 饰）的父亲是一名保镖，在一场意外中不幸身亡。萨勒塔吉救下了拉夫利的母亲，因此才有了拉夫利。长大之后，拉夫利继承了父亲的职业亦成为了保镖，一次任务中，拉夫利要保护的是萨勒塔吉的女儿迪维亚（卡琳娜·卡普 Kareena Kapoor 饰）。因为迪维亚父亲的关系，拉夫利对这次任务十分的上心，鞍前马后对迪维亚寸步不离，这让迪维亚感到十分烦恼，因此心生一计。迪维亚'),
(29, '鳄鱼邓迪2', 'https://img.ynkmjj.com/202004/26/65e86ecf791e3e314effc804ce33bd26.jpg', 'https://mu.qqxy100.com/ts/2/87807244434931712/index.m3u8?wssecret=7ccaa68531c1965fbf804fb5643a2650&wstime=1586144000', '其他', '喜剧', '《鳄鱼先生》在世界各地造成轰动，使澳洲藉男星保罗．贺根一炮而红。原班人马再接再励拍摄了这部正宗的续集。虽然换了导演约翰．康奈尔，但仍延续了上集的喜剧风格，并且增添了更多的冒险和动作。故事描述邓迪与女记者苏本来在纽约过着惬意的生活，不料哥伦比亚毒贩闯进了他们的二人世界。邓迪深感危险，乃将一伙歹徒诱至澳洲丛林，利用他对地形地物的熟悉展开反攻。保罗．贺根和他的儿子布雷特．贺根以父子档姿态共同担任本片编剧，在片中套用了不少上集的成功方程式，虽然已无创新感，但娱乐效果依旧可令人开怀。'),
(30, '抓住救命稻草的野兽们', 'https://img.ynkmjj.com/202004/67/35e869ba8e166f62157dcda267b2c867.jpg', 'https://mu.qqxy100.com/ts/2/87971226131103744/index.m3u8?wssecret=a7329f315d55a8504a49473c77fdc9f1&wstime=1586144000', '韩国', '犯罪', '影片改编自日本同名小说，故事讲述一位苦苦挣扎的餐馆老板在照顾生病的母亲时，在桑拿柜里发现了一袋现金，而一名海关官员却因为女友拿着他从高利贷那里借来的钱跑掉而惹上麻烦。'),
(31, '妈咪宝贝', 'https://img.ynkmjj.com/202004/d5/35e869aa13770411f7b65d14a8514ad5.jpg', 'https://mu.qqxy100.com/ts/2/87972107291459584/index.m3u8?wssecret=5e413cc2cdf00e2051606b45da919307&wstime=1586144000', '法国', '喜剧', '文森特，18岁，第一次感受到爱情的悲伤。他的女朋友Elina刚刚离开了他，他父母试图安慰他，但没有做任何事情：文森特不舒服。现在是他们掌控一切的时候了。首先，他们试图让他明白，Elina并不是那么特别。然后他们会让他接受一种休克疗法，在这种疗法中，必须给他打几下耳光，以防止他想起他的前女友。'),
(32, '摩天营救', 'https://img.ynkmjj.com/vod/2019-04-04/201904041554381261.jpg', 'https://mu.qqxy100.com/ts/2/14681076114915328/index.m3u8?wssecret=5215ae3aa65c15403ab06728ded53d83&wstime=1586144000', '美国', '动作', '在香港市中心，世界上最高、结构最复杂的摩天大楼遭到破坏，危机一触即发。威尔·索耶（道恩·强森 饰）的妻子萨拉（内芙·坎贝尔 饰）和孩子们在98层被劫为人质，直接暴露在火线上。威尔，这位战争英雄、前联邦调查局救援队员，作为大楼的安保顾问，却被诬陷纵火和谋杀。他必须奋力营救家人，为自己洗脱罪名，关乎生死存亡的高空任务就此展开。'),
(33, '毕业生', 'https://img.ynkmjj.com/202004/cd/05e85f3470523001fb04e965094067cd.jpg', 'https://mu.qqxy100.com/ts/2/83735547972943872/index.m3u8?wssecret=91de6047c80ba7534a05d5c1f471678f&wstime=1586144000', '美国', '剧情', '刚刚走出大学校门的本恩（达斯汀•霍夫曼 Dustin Hoffman 饰）对前途十分茫然，偏偏在这时遇上了风流的鲁滨逊太太（安妮•班克罗夫特 Anne Bancroft 饰 ）。虽然不再年轻，但鲁滨逊太太却一再勾引本恩，二人发生了关系。他们在约会过程中，本恩遇上了太太的女儿伊莱恩（凯瑟琳•罗斯Katharine Ross 饰 ），被她的纯真青春深深吸引。本恩吐露了爱意，与伊莱恩开始了正常的恋爱关系'),
(34, '狩猎聚会', 'https://img.ynkmjj.com/202004/b8/95e85efa20fbea844a00cf1da0001ab8.jpg', 'https://mu.qqxy100.com/ts/2/83736746184933376/index.m3u8?wssecret=3586c12b94ef450ec07f88bfd61f2c53&wstime=1586144000', '美国', '剧情', '摄影师达克（泰伦斯·霍华德 Terrence Dashon Howard 饰）和记者西蒙（理查·基尔 Richard Gere 饰）是一对出生入死的好搭档，每日，他们穿梭在枪林弹雨之中，在最危险的前线为全世界人们带来战地的消息。凭借着真实可靠的报道，达克和西蒙获得了新闻 界人人梦寐以求的艾美奖，就此，他们的事业到达了巅峰。\n                                    \n'),
(35, '杀人蜂入侵', 'https://img.ynkmjj.com/202004/d3/55e84488ce25162138b4d9a70e1bedd3.jpg', 'https://mu.qqxy100.com/ts/2/87770060357107712/index.m3u8?wssecret=1cde0e9c0add9758f9028017636a7729&wstime=1586144000', '大陆', '动作', '某科研小组在死亡岛进行试验，过程中，数以万计的杀人蜂冲出了实验室，疯狂攻击科学家与工作人员，一夜之间小岛血流成河、尸横片野，实验室更是一片血肉模糊，残肢断臂的景象。 事故发生后，正在巡逻的安保小组组长中国人秦天，迅速带着救援小队前往实验室救援。与此同时，杀人蜂疯狂繁殖，整个小岛已经成了蜂海，这场“生化危机”迅速向其它区域蔓延。为挽救更多人的生命，幸存者唐凌菲博士与救援小队决定赴死对抗，与岛上的杀人'),
(36, '纯真小镇的夫人', 'https://img.ynkmjj.com/202004/13/05e85e025a5eb43093dcafdedf6b3113.jpg', 'https://mu.qqxy100.com/ts/2/87769691967193088/index.m3u8?wssecret=6cd3fa2c2f0ecbe2d0817cc674f7c247&wstime=1586144000', '美国', '惊悚', '这应该是一个新的开始：在失去丈夫一年后，妮可和她的成年孩子贾斯汀和杰森在纯洁瀑布定居。首先，家人受到热烈欢迎。尤其是他们富有的邻居考特尼看起来非常好，很快就给杰森安排了一些零工来维持家庭收入。然而，妮可很快就注意到有点不对劲，她的儿子在可疑的深夜离开并回来。当一个年轻的邻居淹死在游泳池里时，事情开始变得危险起来。哦，那么友好的考特尼，似乎控制着她的儿子，有点不对劲。很快，妮可就揭开了纯洁瀑布（Purity Falls）健康的市郊外表的罪恶下腹，这将威胁到他们的一生。'),
(37, '至激杀人犯', 'https://img.ynkmjj.com/202004/8e/45e85c454dd50d0386b0c61ad932e48e.jpg', 'https://mu.qqxy100.com/ts/2/87744307800309760/index.m3u8?wssecret=be14727ac8896627565db5431b8a0380&wstime=1586144000', '香港', '犯罪', 'Dee自小体弱，常遭人欺负，直至一次遇上May。May以恐怖行为，将欺负Dee的小童吓退，自此Dee对May奉若神明，唯命是从，并从May身上学会了不少怪异行径。后来May跟随父母移民，被迫与大Dee分手，从此Dee又回复其软弱的性格，只是每次被人欺负之后，都怀念与May的一段日子……Dee自小体弱，常遭人欺负，直至一次遇上May。May以恐怖行为，将欺负Dee的小童吓退，自此Dee对May奉若神'),
(38, '诡信号', 'https://img.ynkmjj.com/202004/67/85e85a038eefd041a5f4ba7937405d67.jpg', 'https://mu.qqxy100.com/ts/2/84169021850648576/index.m3u8?wssecret=a1fccdfa23663574ed11a1d7afdea967&wstime=1586144000', '美国', '科幻', '影片讲述了一个三段式的恐怖故事，背景则是一个被一种奇妙的信号频率逼疯的世界：在特梅纳斯市的新年前夜，任何形式的通信设施，都因为一个高深莫测、谜一般的信号而受到了阻碍，它掠夺走了这个城市中每一个人的恐惧和绝望，迫使了一半的人因为无法抵制的杀戮欲而发了疯，也导致另一半的人因为随时害怕被猎杀而陷入了水深火热的恐惧当中，街道上到处是横七竖八的尸体，这个曾经因为和谐而著名的城市，也随即变成了一种彻底混乱的状'),
(39, '辛普森家庭电影版辛普森一家', 'https://img.ynkmjj.com/202004/5c/35e859eb03da8470f128f436efe9d75c.jpg', 'https://mu.qqxy100.com/ts/2/84169239463723008/index.m3u8?wssecret=35538d08765ee8e3c5801fa9105f9f02&wstime=1586144000', '美国', '喜剧', '绿日乐队在春田镇办了环保演唱会，惨遭冷遇，成员落水而亡。为了悼念，教堂举办了弥撒仪式。辛普森一家又迟到了，而且爷爷突然灵魂附体，说出了灾难降临的预言。巴特因为踩着滑板裸奔被罚，得到了邻居弗兰德斯的帮助，情同父子。丽莎遇到了志同道合的爱尔兰男孩柯林，两人暗生情愫。荷马丢弃核废料与垃圾严重污染了水资源。他买回了一头猪，引起了妻子玛姬的不满，小女儿美姬倒是乐得其中。一个长着无数眼睛的怪异生物让大家意识到'),
(40, '孝感天地', 'https://img.ynkmjj.com/202004/f9/95e859678bfd8e54033c59e0354273f9.jpg', 'https://mu.qqxy100.com/ts/2/87694778405224448/index.m3u8?wssecret=0087cbbfd033640a125908c156d53e1f&wstime=1586144000', '大陆', '古装', '故事发生在公元前二千三百年左右，三皇五帝之一的舜帝降生于世，生于姚墟。舜帝面貌本就异于凡人，两眼是双瞳仁，故而其母为其取名重华。重华的母亲握登常年卧病在床，在诞生下重华后，本就对重华母亲漠不关心的姚父，更是对重华母子越发的冷漠，并一直认为重华是一个不祥的“四瞳怪”……故事发生在公元前二千三百年左右，三皇五帝之一的舜帝降生于世，生于姚墟。舜帝面貌本就异于凡人，两眼是双瞳仁，故而其母为其取名重华。重华'),
(41, '被涂污的鸟', 'https://img.ynkmjj.com/202004/d6/45e854c40197983189d7465181e332d6.jpg', 'https://mu.qqxy100.com/ts/2/87604545013678080/index.m3u8?wssecret=c0194df1c39d67f2ec61029d311872cd&wstime=1586144000', '其他', '剧情', '该片改编自作家杰西科辛斯基撰写的同名处女作，原著围绕一个无名小男孩在东欧农村躲避战火的经历展开，故事从社会、历史等不同角度，反思与理解边缘人物的荒诞行为。'),
(42, '魔法灰姑娘', 'https://img.ynkmjj.com/vod/2018-5/2018559573787554.jpg', 'https://mu.qqxy100.com/ts/2/32066888645214208/index.m3u8?wssecret=ba2bb9d414f3fdf86779ebd2adc0aa07&wstime=1586145000', '美国', '爱情', '艾拉出生与一个色彩斑斓的奇幻世界中，每个在这里出生的孩子都会得到仙女的礼物。而可爱的艾拉得到的礼物是服从。自此，无论是多苛刻的要求，只要一声命令，艾拉便会一一照办。艾拉母亲去世前便叮嘱她以后要用自己内心的真实信念去抗行咒语，而且必须找到下咒语的魔女才能完全解除咒语。此时的艾拉已经饱受继母及继母女儿的折磨，而她告诉自己必须要找到当年的魔女。'),
(43, '崮上情天', 'https://img.ynkmjj.com/201912/aa/75deb518fcd90333a83ee015d76b98aa.jpg', 'https://mu.qqxy100.com/ts/2/87346579643564032/index.m3u8?wssecret=31df8b0f1fa88a1bae99131f0e199367&wstime=1586145000', '大陆', '剧情', '20世纪60年代，为了备战，全国各地热血青年来到蒙阴县笊篱坪，投身军工事业。轰轰烈烈20年，他们奉献了芳华和热情，为国家安宁做出了巨大贡献。老厂长为了国家财产献出宝贵生命，二嘎和小雯在艰苦的创业中建立了深厚的姐弟情。80年代后国家进入经济建设时期，军工厂转民用生产，尔后撤离了沂蒙山区，大批人带着美好记忆离开了沂蒙山。事业有成的二嘎割舍不掉对军工厂和姐姐的那段记忆，他举巨资将废弃的旧工厂重新建设，复'),
(44, '血在风上', 'https://img.ynkmjj.com/202004/b6/95e84523f1cc586194b98c968b5f8bb6.jpg', 'https://mu.qqxy100.com/ts/2/87346011873214464/index.m3u8?wssecret=b2d5d338b2ab0144d07745b8e937e1fa&wstime=1586145000', '香港', '动作', '方与雄自小在忠义堂帮会长大，与帮会老大鲍之女莲三人青梅竹马，但莲对方有爱意，在一次与日本黑帮山口组火拼中，雄救了方一命但方得知雄一心想做龙头老大，鲍因此误会方，赶方出帮会，而方更借故令莲误会己另结新欢，刺激莲嫁与雄。方自退出江湖后，隐居澳门，与同居住客丽及冯为好友，但丽之弟俊不务正业，并投在伊门下，伊则利用俊，迫方重出江湖。伊得山口组之助。将鲍杀死，雄与鲍之忠仆达负伤逃去，莲则遭伊绑架胁持，方...'),
(45, '向杀手挑战', 'https://img.ynkmjj.com/202004/96/25e8451bc4199a2185171df925e80296.jpg', 'https://mu.qqxy100.com/ts/2/87345862828621824/index.m3u8?wssecret=fef9f5f0c6437a4ef6365f198fa3a6e7&wstime=1586145000', '香港', '犯罪', '黑社会大哥林强被人暗杀了，罗姐接替他的所有事物，并开始报仇。警方开始对多起枪支走私案进行调查，但始终未果。案情陷入扑朔迷离中……黑社会大哥林强被人暗杀了，罗姐接替他的所有事物，并开始报仇。警方开始对多起枪支走私案进行调查，但始终未果。案情陷入扑朔迷离中……'),
(46, '爱未知2017', 'https://img.ynkmjj.com/202004/bd/05e844faf7a60512d327890fdfb3e9bd.jpg', 'https://mu.qqxy100.com/ts/2/87338135712694272/index.m3u8?wssecret=e3cca7c8075019e0fd0580da69b98f27&wstime=1586145000', '法国', '剧情', '莉拉和阿毛在巴士站相遇，莉拉害羞内向，与生俱来的语言障碍，阿毛活泼外向，总是机机喳喳说个不停，莉拉用功念书，阿毛以非法赛车维生，就像磁铁的二极无法抗拒，莉拉与阿毛互相吸引。由于天生口吃，莉拉被课堂上被同学嘲笑是智障，同学经常模仿她口吃的样子。老师从报告中识出莉拉的文字天份，建议她加入一个诗社，她将说不出口的话语化成一首又一首的诗篇，当短诗发表到部落格，立即引起关注，网友纷纷称赞。她迫不及待想跟阿毛分享这份喜悦，阿毛却表示要分手，因为阿毛有一个不为人知的秘密……'),
(47, '渡念师', 'https://img.ynkmjj.com/202004/44/05e844b1ac2a3f64d5fee47a5616cc44.jpg', 'https://mu.qqxy100.com/ts/2/87336472704712704/index.m3u8?wssecret=2a3baa9276e71019dac2f6dee934eb37&wstime=1586145000', '大陆', '悬疑', '麦辉和庄梦依是一对夫妻档搭档，作为专业渡念师为客户解决心灵困扰，某日接到一个神秘邀请，渡念师夫妇陷入了恐怖小说作家七宝设下的求助迷局。意识到事态复杂后，渡念师夫妇决定追根究底，探查真相，不曾想却越陷越深……在贯穿现实、潜意识、梦境的连环嵌套里斗智斗心，在心魔蠢蠢欲动之际，谁会技高一筹率先冲破迷局。'),
(48, '哈拉十诫', 'https://img.ynkmjj.com/202004/4f/65e844660316f253b62ca9341484064f.jpg', 'https://mu.qqxy100.com/ts/2/87148286393188352/index.m3u8?wssecret=99f89027a76a212a1c7ed94952186dac&wstime=1586145000', '美国', '喜剧', '影片彻底颠覆了经典《十诫》的“人神契约”，由10个相互独立又彼此相关的幽默小故事串联而成。贯穿始末的叙述者，用戏谑的口吻向观众娓娓道来这十个令人瞠目结舌的短篇：一个忘背伞包却奇迹生还的跳伞男子，居然瞬间成为电视明星；一个把自己处子之身献给耶稣的老处女；一个不告诉儿子生父是谁的母亲；一个拿病人生命开玩笑的医生，在下一章节被抓入狱，遭受性虐待却被视为稀松平常之事……叙述者一直置身事外的讲述这段段荒诞不经的故事，直到他“通奸”的故事上演。'),
(49, '小妇人', 'https://img.ynkmjj.com/vod/2018-12/2018121510544586000.jpg', 'https://mu.qqxy100.com/ts/2/87261714487181312/index.m3u8?wssecret=c545aa8763bb83e74df96673535f71b8&wstime=1586145000', '美国', '剧情', '影片讲述了美国南北内战时期，马奇家四姐妹的生活点滴和各自追寻不同理想与归宿的故事。'),
(50, '刺猬索尼克', 'https://img.ynkmjj.com/202003/13/75e631b1102bc681edab02b4ac2ad913.jpg', 'https://mu.qqxy100.com/ts/2/87261419770216448/index.m3u8?wssecret=43d978cf848aa7ac59c0dee568da52ee&wstime=1586145000', '加拿大', '喜剧', '改编自世嘉公司出品的风靡全球的电子游戏。电影讲述了拥有音速奔跑能力的刺猬索尼克在地球上展开新生活的故事。索尼克和他的新朋友汤姆（詹姆斯·麦斯登 饰）联手保护地球，阻止邪恶的蛋头博士（金·凯瑞 饰）统治世界的计划。这部适合全家观看的电影还邀请了迪卡·桑普特参演，本·施瓦茨为索尼克配音。'),
(51, '看不见的枕边人', 'https://img.ynkmjj.com/202004/32/35e83f7a1463ee01e8adad8b8afa3432.jpg', 'https://mu.qqxy100.com/ts/2/87248418157625344/index.m3u8?wssecret=39471fd25f15c3b30c4c34545b1fe56e&wstime=1586145000', '大陆', '悬疑', '《看不见的枕边人》讲述了单身“都市丽人”沈亦桢（刘雅瑟饰），在欣喜开启出租屋独居新生活的同时，身边发生了的一件件离奇且细思恐极的事情。原租客的不告而别、保安的阴郁沉默、上司的殷勤追求、猥琐快递员的死缠烂打、流窜在楼内偷窃女性内衣的变态狂，都将这个看似平静的社区变得诡异重重。在单身白领的出租屋内，这场面具人主导的“变态show”也正式拉起帷幕。'),
(52, '战争未了', 'https://img.ynkmjj.com/202004/39/45e83b88cef7fa209d322f9647a8a739.jpg', 'https://mu.qqxy100.com/ts/2/87178413382565888/index.m3u8?wssecret=8afe601ece731433991ea4db1191f148&wstime=1586145000', '西班牙', '剧情', '西班牙1936年夏。著名作家米盖尔德乌纳穆诺决定公开支持有望肃清国家混乱局势的军事起义。 他即刻被共和党政府解雇，不再任萨拉曼卡大学校长。与此同时，弗朗哥将军设法将他的部队加入反叛阵线，并私下着手准备成为战争的总指挥。面对冲突带来的血腥，同事遭受的监禁，乌纳穆诺开始质疑起自己最初的立场与原则。弗朗哥将总部搬到萨拉曼卡并被任命为国家元首后，乌纳穆诺前往他的住处，提出了请求.....'),
(53, '某处，某人', 'https://img.ynkmjj.com/202004/0e/25e839784b42d29483fd99b759bf790e.jpg', 'https://mu.qqxy100.com/ts/2/87141959558234112/index.m3u8?wssecret=70cdcc24e8f541d5a61f694aff0d0946&wstime=1586145000', '法国', '剧情', '三十岁的雷米和米兰妮住在巴黎同一区。他们约见心理医生，目的是要认识「自我」。他们都是患有大城市孤独症的受害者，大家都以为在现今这以极速网络联繫的世界中，交朋友会是很容易的事。在不知的情况下，二人分别走两条指向同一方向的路 朝向一个爱情故事的路？'),
(54, '王忠诚', 'https://img.ynkmjj.com/202004/0e/25e839784b42d29483fd99b759bf790e.jpg', 'https://mu.qqxy100.com/ts/2/87092031691685888/index.m3u8?wssecret=00b7c917baf60c60563bc87c034110a8&wstime=1586145000', '法国', '剧情', '王忠诚是我国著名神经外科专家,中国工程院院士,中国医学科学院神经科学研究所所长,中国医学科学院天坛医院名誉院长,优秀共产党员。本片以王忠诚同志的主要生平事迹改编而成。高明饰演王忠诚,青年时期由刘小溪扮演。\n                                        \n                                    　　1951年,大学毕业的王忠诚随医疗队'),
(55, '人命关天', 'https://img.ynkmjj.com/202003/30/05e8333e69cb9a72a0d5448b48453f30.jpg', 'https://mu.qqxy100.com/ts/2/87032676162207744/index.m3u8?wssecret=98e7cbf1aabdb4f589f7fbde6c932587&wstime=1586145000', '大陆', '剧情', '这是一座美丽而富饶的南方海滨城市，在这座城市里工作和生活着一大批从遥远而贫穷的山区来南方淘金的打工妹。从离开故乡的那一天起，她们就把自己全部的理想和希望寄托在这片美丽富饶的土地上… 　　然而一场无情的大火，吞噬了80多个年轻的生命，造成了巨大的经济损失和极坏的社会影响。工厂负责人因此被判刑，与此有关的各级领导被追究责任，主管全市生产安全的副市长陈天雄被降职为副区长。 　　这场灾难的发生使陈天雄的心'),
(56, '命系琴弦', 'https://img.ynkmjj.com/202004/29/25e8383766709a245122f36a169d7029.jpg', 'https://mu.qqxy100.com/ts/2/87027769061408768/index.m3u8?wssecret=15d70199af66fc5d30ab65836c5ef770&wstime=1586145000', '大陆', '剧情', '六年前，某所学校中有一支由五位学生组成的西洋弦乐队，专门演奏巴赫的作品。他们分别是才华横溢的小提琴手杨赞（陈大伟 饰）、他的恋人江颐格（李金娣 饰）、拉大提琴的女孩儿吴珂（乔若熙 饰）、性格内向的柴林（柴琎 饰）以及大大咧咧琴艺最差的洪大方（李晨浩 饰）。五个人时常为了赚些零花钱去酒吧里参加演出，在日复一日的相处中，他们也渐渐的成为了形影不离的好朋友。 　　然而天下没有不散的宴席，随着毕业在即，这支小乐队的成员也即将各奔东西......'),
(57, '我要见梅西', 'https://img.ynkmjj.com/202003/d0/75e8328a400dcc83108fad4eb9ad64d0.jpg', 'https://mu.qqxy100.com/ts/2/87028655959572480/index.m3u8?wssecret=5c483534db1e79e04cab148795be929c&wstime=1586145000', '大陆', '喜剧', '胡夏是梅西的铁杆粉丝，满脑子都是梅西，甚至要把自己的脸整成梅西的样子。因为一次心血来潮，胡夏决定前往巴塞罗那看梅西比赛。路上他遇到了导演梁超，眼看见到梅西的希望越来越大，这时却接到梅西因为感冒不能参赛的消息...'),
(58, '坐在我身后的女孩', 'https://img.ynkmjj.com/202003/34/85e83060f3337e331be2ac546453ae34.jpg', 'https://mu.qqxy100.com/ts/2/86979863226875904/index.m3u8?wssecret=dab63880317a4154869a4c1ba3c2b181&wstime=1586145000', '大陆', '剧情', '在我们的学生时代，似乎都会有个喜欢趴玻璃的班主任，时而严厉，时而慈祥，嘴上不断提及我们是他教过的最差的一级，会有一个交情过硬的兄弟，替我出头，为我解忧，当然也会有一个在自己的心中留下过深刻印象的女孩，可能古灵精怪，可能温柔贤淑，也可能大大咧咧，在繁重的学习压力下，只是简单的下课打打闹闹，或者一起讨论问题，或者一起分享琐碎小事，影片中男女主角只是简单的前后桌同学关系，在那个青涩的年纪，男主角为了找机'),
(59, '巴拿马裁缝', 'https://img.ynkmjj.com/202003/6a/85e82ed38b9b39715726e175996bf56a.jpg', 'https://mu.qqxy100.com/ts/2/84170161258496000/index.m3u8?wssecret=f12e6c047c65c15a09b64fed8a326d03&wstime=1586145000', '美国', '剧情', '故事发生在充满了异国风情的巴拿马，哈里（杰弗里·拉什 Geoffrey Rush 饰）是一个身怀绝技的裁缝，他凭借着出色的手艺和其三寸不烂之舌在巴拿马的达官显贵与政界要员之间混得风生水起，而他所作的一切，都是为了掩盖他的一段灰暗的过去。\n                                    \n                                　　可是，纸终究包不住火'),
(60, '维多利亚的秘密2009时装秀', 'https://img.ynkmjj.com/202003/ef/35e82eb277803424a621ab22be4715ef.jpg', 'https://mu.qqxy100.com/ts/2/84171146697637888/index.m3u8?wssecret=7d01e7ca11a5299b74d45720ff11ed78&wstime=1586145000', '美国', '真人秀', '纽约当地时间11月19日，“维多利亚的秘密”2009时装秀性感上演。时装秀由超模海蒂 克拉姆主持，T台上的模特儿们为大家带来了一场别开生面、活色生香的风景。本季内衣秀极具异域风情，无论是身披羽毛扇的巴西狂欢节游行女郎还是绽放东方风情的俏丽公主，都赋予了内衣别样的面貌。作为年末时尚界的盛事，“维多利亚的秘密”为众多时尚人士开启了通往风情旖旎的梦幻世界。21岁中国女孩刘雯的加入对于维多利亚的秘密 (VICTORIAS SECRET) 来说启用第一个亚洲模特是一个很大的突破。['),
(61, '超级青春期', 'https://img.ynkmjj.com/202003/6a/45e82c60b8ae66745a740d9258f3e76a.jpg', 'https://mu.qqxy100.com/ts/2/86705522262147072/index.m3u8?wssecret=2dfbe6cade072514fb19f869fbae424b&wstime=1586145000', '美国', '喜剧', '皮特·戴维斯(SNL、《神烦警探》)加盟成长记事电影《超级青春期》(Big Time Adolescence)，杰森·奥利(《宾夕法尼亚大道1600号》)献出导演首秀，他编写的剧本登上了2014年剧本黑名单。讲述一个十多岁的男孩在他最好的朋友——一个魅力十足的大学辍学生(戴维斯)的毁灭性的执导下，在他那沉闷的郊区小镇上长大的故事。\n                                 '),
(62, '消失吧，群青', 'https://img.ynkmjj.com/202003/28/55e82a8b3ac267130a4cacf6ad21a128.jpg', 'https://mu.qqxy100.com/ts/2/86885641383575552/index.m3u8?wssecret=0e14d97849bbc22d4bfb15beaa9df663&wstime=1586145000', '日本', '剧情', '讲述了被世间遗弃的男女主人公在虚幻的神秘小岛上再度相遇的故事。'),
(63, '亚瑟王：神剑崛起', 'https://img.ynkmjj.com/vod/2019-1/20191232081214854.jpg', 'https://mu.qqxy100.com/ts/2/86752715417321472/index.m3u8?wssecret=4d8ed999bb089d6fa22bed4248002236&wstime=1586145000', '美国', '动作', '亚瑟王传奇的重新想象集中在亚瑟的私生子欧文身上，他必须学会以父亲的衣钵为王。'),
(64, '再婚技术', 'https://img.ynkmjj.com/202003/68/65e822ba3cea816495083ef8ae88a068.jpg', 'https://mu.qqxy100.com/ts/2/86752960847020032/index.m3u8?wssecret=0d599f1c152b8f13dc03306b66e7a802&wstime=1586145000', '韩国', '爱情', '讲述除了户籍上是离婚男之外,其他都是完美的男人京浩。有一天在他面前出现了心爱的后辈兼电影导演的贤洙，让他的生活开始发生变化，开始了再婚计划。'),
(65, '歌之王子殿下2019剧场版', 'https://img.ynkmjj.com/202003/04/15e821d5320252320a0b56a8679d4904.jpg', 'https://mu.qqxy100.com/ts/2/86737392710451200/index.m3u8?wssecret=e9ac116c5d6f8511b27bbd547bfc6da7&wstime=1586145000', '日本', '动画', '歌之王子殿下剧场版 真爱王国动画全集是《歌之王子殿下》推出的系列新作，还记得吗?那句话。 能听到吗?那首歌。 和你一起走到梦幻王国的舞台上， 奇跡的实况录音，现在开始！'),
(66, '党小组长', 'https://img.ynkmjj.com/202003/5a/65e821418f0ecf7167ad914b8ebb035a.jpg', 'https://mu.qqxy100.com/ts/2/86726113883062272/index.m3u8?wssecret=cec4d63dbaaa6353736aa622d0da49e5&wstime=1586145000', '大陆', '剧情', '党小组长 (1986)故事梗概\n                                        \n                                    　　刘局长是航运局里说一不二的人物，有一次他视察工作返城时，在公路上受到市委书记女儿的捉弄，他敢怒不敢言。他的小车司机杨杨不惧权势，治服了书记的女儿，为刘局长出了气。为此，刘局长极力推荐杨杨担任党小组长。杨杨在前任'),
(67, '英雄无界', 'https://img.ynkmjj.com/202003/e3/95e81e6d8047cc9431524323a0f3b4e3.jpg', 'https://mu.qqxy100.com/ts/2/86676760808128512/index.m3u8?wssecret=2d23533e910aecccbf4fe91202f097db&wstime=1586145000', '大陆', '剧情', '民国初年，一代武林宗师霍元甲、陈真相继蒙难于日本人的毒手后，一时间精武门几乎遭到了灭顶之灾。此时，为了给全面的侵华战争扫清障碍，日本陆军部特别成立了黑鱼会，一方面继续追杀陈真的三个徒弟孙标、冯吉、欧阳冰峰，一方面准备把一份精心绘制的中国军事要塞图通过领事馆呈交给日本陆军部。\n                                        \n                     '),
(68, '大三元', 'https://img.ynkmjj.com/vod/1560144159/2019061013223968.jpg', 'https://mu.qqxy100.com/ts/2/46733144698650624/index.m3u8?wssecret=605bdc62e6f6585cd06e5b966afcbc96&wstime=1586145000', '台湾', '喜剧', '台灣首部麻將賀歲電影！如有不服，麻將解決！麻將桌上的戰爭，不只不能輸，還要帶著全家一起贏！因為一場麻將賽而意外成了代代富貴的盛家，長孫曉白一夕之間卻變貧窮落水狗。他要如何再靠麻將贏回一切？                                                                    '),
(69, '异种1', 'https://img.ynkmjj.com/202003/fb/25e81cc60b95286108bae3312faaeafb.jpg', 'https://mu.qqxy100.com/ts/2/86370562049310720/index.m3u8?wssecret=b2c1f278999d4c84a8037dd66d4b021a&wstime=1586145000', '美国', '动作', '自20世纪70年代开始，美国政府实施了名为SETI的计划，30年来不间断的用射电望远镜扫描宇宙空间，旨在寻找外星生物和相关文明。在犹他州的德威市，有一所隶属政府的实验室，这里正在进行一项秘密试验。在此之前，人类曾受到外星文明发回的信息，其中包括外星生物的DNA组成和生命重组的方法。犹他州实验室的科学家们利用外星人提供的资料培养出拥有外星人DNA的新人类“塞尔”。出于某种原因，政府决定中止这项实验，'),
(70, '触及巅峰', 'https://img.ynkmjj.com/202003/9a/95e8203915420c849ebaa93ee110609a.jpg', 'https://mu.qqxy100.com/ts/2/84174647054041088/index.m3u8?wssecret=7a01dbe78aa65761698164096f47aa7a&wstime=1586145000', '英国', '剧情', '乔·辛普森与西蒙·耶茨是一对登山好搭档，他们一起挑战了无数高峰，这一次是秘鲁安第斯山峰。在成功登顶后，下撤的途中，乔发生意外，跌下陡坡，摔断了右腿。西蒙用绳索紧紧拉住他，在暴风雪中下撤。然而在途中，乔再次不幸落入冰洞，两人难以沟通，紧靠一根绳索把彼此连在一起。他们随时都有坠崖身亡的可能，僵硬的两个人也没有足够的食物和水源渡过难关。西蒙手里的刀在绳索上迟迟不决，而他的眼泪已经难以抑制的流了下来。在绳索的另一端，乔又有怎样的期盼，他能绝境逢生么？'),
(71, '毛泽东的亲家张文秋', 'https://img.ynkmjj.com/202003/6f/15e81df3ad5d63256db030a489492b6f.jpg', 'https://mu.qqxy100.com/ts/2/86667594743939072/index.m3u8?wssecret=a45be20b117caf0cd7c49f39036788f2&wstime=1586145000', '大陆', '剧情', '影片以独特的角度展示了老一代革命者对儿女婚事的恢恢大度和缕缕情丝，以及他们对待事业、工作、生活和爱情的人生态度。张文秋在革命生涯中经历了失去丈夫、战友的痛苦和磨难，她两次入狱惨遭折磨，但她始终对理想忠贞不渝。就是这样一位坚定的母亲，带大和培养了三个孩子。毛岸英在朝鲜牺牲，使张文秋的女儿思齐在精神上也经历了与母亲同样的巨大打击。思齐从母亲身上吸取了的力量，很快从痛苦中振作起来。'),
(72, '白小姐', 'https://img.ynkmjj.com/vod/2019-04-14/201904141555254311.jpg', 'https://mu.qqxy100.com/ts/2/24430223277686784/index.m3u8?wssecret=98c1ea553f199cdf5c3ba67b12ec1665&wstime=1586145000', '韩国', '剧情', '一个女人的过去是一个罪犯，因此她不向别人敞开心扉。但后来她与一个遭受家庭暴力的破碎的孩子建立了友谊，并决定从残酷的世界中拯救女孩。一个对女人怀有感情的男人，试图用自己的方式保护她。'),
(73, '猫和老鼠:飆风天王', 'https://img.ynkmjj.com/202003/03/15e81c0142e27d9358169af62db2ad03.jpg', 'https://mu.qqxy100.com/ts/2/84174165812183040/index.m3u8?wssecret=24270496859cb7a66f26985a5af78988&wstime=1586145000', '美国', '喜剧', '阳光明媚的一天，家中再次发生大混战，汤姆和杰瑞这对冤家你追我赶，飙完汽车开飞机，从屋内达到园子，甚至连睡觉的斯派克也加入战争。在这三个麻烦制造者的联合努力下，房子被夷为平地，满目疮痍。女主人气得将汤姆和杰瑞赶了出去，就在此时，他们看到一则消息。好莱坞制作人策划了一场飙车大赛，胜利者将获得一栋超豪华的别墅。两个家伙大喜过望，遂从废品场找来零件，东拼西凑做成了自己的赛车。\n              ');
INSERT INTO `ap_video` (`id`, `title`, `img`, `url`, `region`, `type`, `content`) VALUES
(74, '少林少女', 'https://img.ynkmjj.com/202003/e4/35e81bcf057516622bc0010f338212e4.jpg', 'https://mu.qqxy100.com/ts/2/82360024029986816/index.m3u8?wssecret=5f107018197291643b74dac827b2a200&wstime=1586145000', '日本', '喜剧', '天下武功出少林，盛名之下，奔赴少林习武的年轻人至今不绝。日本女孩樱泽凛（柴崎幸 饰）完成了3000天的少林修行，下山返日。而她回到家乡的第一件事就是四处央人学习少林拳，以完成自己光大少林拳的梦想，但无奈不被人理解，当年自己习武的武道场此时也已经荒废，樱泽凛在一家中餐馆中找到了昔日的师父岩井（江口洋介 饰），而后者已经放弃了武学之道。餐馆服务生敏敏（张雨绮 饰）对凛的身手颇为敬服，并介绍她加入了国际'),
(75, '天使之心', 'https://img.ynkmjj.com/202003/a3/95e81bae3712bc00733c06df22b3f4a3.jpg', 'https://mu.qqxy100.com/ts/2/86335640349704192/index.m3u8?wssecret=d655b5a42acacdf8fb0bc025f114dd74&wstime=1586145000', '美国', '悬疑', '故事开始于1955年的纽约布鲁克林区，哈里·安格尔（米基·洛克 饰）是个胡子不剃、不停抽烟的私家侦探，专门调查离婚案。一天，一个自称叫路易斯·赛佛雷（罗伯特·德尼罗 饰）的神秘外国人找到了他，要他去寻找一个叫弗沃里特的歌唱家。这项任务钱很多，看起来也很轻松，哈里就接受了。 但是，哈里在调查中发现，自己所接触的每个与这件事情有关的人，都逐一被杀害：医生福勒、玛格丽特（夏洛特·兰普林 饰）、黑人音乐家'),
(76, '点指兵兵', 'https://img.ynkmjj.com/202003/8b/15e818d5416720810aaaf065c93f4c8b.jpg', 'https://mu.qqxy100.com/ts/2/86579615815958528/index.m3u8?wssecret=27c74c0d90a230e9c424ee93d4023751&wstime=1586145000', '香港', '剧情', '一个醉心枪械的年轻人欲投考警察，因有眼疾未被录取，造成心理不平衡而四处杀人。警方成立特别组缉捕他，一个初出茅庐的警察与凶手狭路相逢......'),
(77, '疾速备战', 'https://img.ynkmjj.com/vod/2019-05-17/201905171558092953.jpg', 'https://mu.qqxy100.com/ts/2/24734144491683840/index.m3u8?wssecret=5739e5222ea6a9bf8db886c5f14a570f&wstime=1586145000', '美国', '动作', '约翰·威克经历了前两次的追杀、特攻之后，由于执意破坏酒店规矩，因而遭到悬赏通缉，全球杀手闻风而至、一路追杀。这次他又将如何杀出重围，终结这场逃亡之旅。'),
(78, '尼斯大冒险', 'https://img.ynkmjj.com/201912/27/05df88435657ee84b179e6561661b027.jpg', 'https://mu.qqxy100.com/ts/2/86468224429850624/index.m3u8?wssecret=23b9c103da660d7045e4c4e6b4fc12bf&wstime=1586145000', '其他', '喜剧', '《尼斯大冒险》故事讲述了一直都把自己当做海鸥的小雨燕马努，在严父的要求下努力学习各种海鸥的飞翔技能，却因为总是不得要领而饱受挫折。马努心灰意冷，离家出走，却在旅途中遇到了自己的同类，并重新认识自己作为雨燕的真实身份。在雨燕和海鸥家族共同面临的一场巨大灾难面前，小雨燕马努挺身而出，成为了大家的英雄……'),
(79, '自杀专卖店', 'https://img.ynkmjj.com/202003/7c/75e8121ab3c6f0136262ae28890d397c.jpg', 'https://mu.qqxy100.com/ts/2/86343350415785984/index.m3u8?wssecret=abce96b58f760ccfbd0931882a3063fd&wstime=1586145000', '法国', '喜剧', '死气沉沉的法国小城，一家有口皆碑的老店却格外生意兴隆。原来这家祖传老店代代皆以贩卖自杀产品著称。在如此灰暗恐怖的小镇上，自杀成了当地居民稀松平常之事，这也是小店异常火爆的原因。经营此店的老板三岛了无生气，老板娘更是日日愁眉苦脸。他们早就丧失了对生活的热情，终日郁郁不安。长期贩卖自杀用品，让他们濒临崩溃的边缘。幸好他们的一双儿女还热爱着生活，尤其是他们的小儿子阿伦，笑容总是挂在他的脸上。然而，阿伦热'),
(80, '绝命47小时', 'https://img.ynkmjj.com/202003/13/25e80dbe21fc9a20143d85848285fe13.jpg', 'https://mu.qqxy100.com/ts/2/86376962116812800/index.m3u8?wssecret=b7f859e62330554e241ebe174cc2b553&wstime=1586145000', '加拿大', '惊悚', '两个不善社交的少女，一天晚上无聊，转向互联网寻找恐怖故事。他们在一个令人毛骨悚然的网络上找到了一个游戏，声称你可以用你的手机来召唤超自然...如果你输了比赛...你失去了生命'),
(81, '凯撒必须死', 'https://img.ynkmjj.com/202003/aa/85e8087e550c4a13134d652a2aeaf0aa.jpg', 'https://mu.qqxy100.com/ts/2/86270691241885696/index.m3u8?wssecret=09948870477ae2cbed1f46e712ec8b8b&wstime=1586145000', '其他', '剧情', '意大利罗马监狱Rabibia，一批来自五湖四海的重刑犯。这些被判数十载甚至终生监禁的囚犯，经过试镜、排练，排演着莎士比亚戏剧《尤利乌斯·凯撒》。他们在监狱的房间、走道、操场上，演绎着那段两千年前的阴谋和悲剧。\n                                    \n                                　　本部由意大利兄弟档导演保罗与维克托里奥·塔维亚尼'),
(82, '真实罗曼史', 'https://img.ynkmjj.com/202003/6e/45e805ac497dd422af2f9950101b1e6e.jpg', 'https://mu.qqxy100.com/ts/2/84176351623380992/index.m3u8?wssecret=768c4236934916e1d179ad415b9e6504&wstime=1586145000', '美国', '爱情', '漫画店打工仔Clarence Worley（克里斯汀·史莱特 Christian Slater 饰）生日的时候，在电影院邂逅了美女Alabama Whitman (帕特丽夏·阿奎特 Patricia Arquette 饰)，两人一夜春宵。第二天，Alabama告诉Cla rence她是个妓女，是Clarence的老板送给他的生日礼物，但她爱上了他。Clarence决定将Alabama从皮条客Dre'),
(83, '相信男人', 'https://img.ynkmjj.com/202003/b0/35e8055ccc905f54e8f61bdf1a89c2b0.jpg', 'https://mu.qqxy100.com/ts/2/84176544070631424/index.m3u8?wssecret=e135dd9d9478c843a05ca52af7abd509&wstime=1586145000', '美国', '剧情', '女演员丽贝卡（朱莉安 摩尔Julianne Moore饰）和好友伊莱恩（玛姬 葛伦霍 Maggie Gyllenhaal饰）各自的感情，似乎都说明了男人不可信。丽贝卡有一个性欲旺盛在家待业的丈夫汤姆（大卫 杜契尼 David Duchovny饰），不过丈夫在婚姻中得不到性生活的满足，令他在外面的世界变得不堪一击。自从遇到孩子同学的母亲后，二人就如同干柴烈火走到一起；而丽贝卡，一边为失败的婚仪倍感崩'),
(84, '双镖', 'https://img.ynkmjj.com/202003/ad/95e8051b31363882e7cfbca3881878ad.jpg', 'https://mu.qqxy100.com/ts/2/84178005349367808/index.m3u8?wssecret=6570001d9e32d45d393815799ee514f2&wstime=1586145000', '大陆', '动作', '四位身手不凡的暗杀高手隐姓埋名藏身于美国街头，他们曾经是受到国家安全局精心训练的棋子，却因为在任务中过于肆意妄为造成不必要的伤害而遭到了安全局的控制和封杀。某日，一位名为梅美（苏瑾 饰）的美丽女子的出现使四人重新浮出水面聚在了一起，梅美雇佣他们暗杀自己的妹妹梅丽（苏瑾 饰），只因为梅丽杀死了她们的父母，霸占了家族的巨额产业。\n                                    '),
(85, '致命围困', 'https://img.ynkmjj.com/202003/4b/65e804d0f28ad36594ea753c0b9af34b.jpg', 'https://mu.qqxy100.com/ts/2/85533378173992960/index.m3u8?wssecret=54379da7b63e3195f0baa8d943706781&wstime=1586145000', '美国', '惊悚', '马里斯特拉扎被称为建筑界的艺术家和大师，他所设计的建筑被同行奉为典范。在某个，一幢马里斯特拉扎的代表作拔地而起，然而这里却发生了惨绝人寰的凶案。许多无辜之人被砌在墙壁中，浇筑水泥窒息而死，这幢大楼也从此废弃。\n                                    \n                                　　15年后，年轻美丽的女拆迁工程师萨曼莎（Misc');

-- --------------------------------------------------------

--
-- 表的结构 `ap_zce`
--

CREATE TABLE IF NOT EXISTS `ap_zce` (
  `phone` varchar(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ap_zhibo`
--

CREATE TABLE IF NOT EXISTS `ap_zhibo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `url` text,
  `img` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
