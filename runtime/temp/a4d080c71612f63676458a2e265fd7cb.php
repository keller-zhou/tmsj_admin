<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"/www/wwwroot/tmsj.taomiwo.top/application/index/view/index/index.html";i:1585895874;s:62:"/www/wwwroot/tmsj.taomiwo.top/application/index/view/layout.html";i:1559768984;}*/ ?>
<html iTM="Ryan">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/public/static/Ryan_iTM/img/basic/favicon.ico" type="image/x-icon">
    <title><?php echo Ryan_name(); ?>  - 后台管理</title>
    <!-- CSS -->
    <link rel="stylesheet" href="/public/static/Ryan_iTM/css/app.css"> 
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
      

    </style>
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;box-sizing: content-box;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}
  </style>
  </head>
<body class="light loaded">
<!-- Pre loader -->
<div id="loader" class="loader loader-fade">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<aside class="main-sidebar fixed offcanvas shadow">
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 919px;"><section class="sidebar" style="height: 919px; overflow: hidden; width: auto;">
        <div class="w-200px mt-3 mb-3 ml-3">
            <img src="<?php echo Ryan_logo(); ?>" >
        </div>
        <div class="relative">
            <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="true" aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm fab-right fab-top btn-Secondary shadow1">
                <i class="icon icon-cogs"></i>
            </a>
            <div class="user-panel p-3 light mb-2">
                <div>
                    <div class="float-left image">
                        <img class="user_avatar" src="<?php echo Ryan_user_logo(); ?>" alt="Perfect Network Service">
                    </div>
                    <div class="float-left info">
                        <h6 class="font-weight-light mt-2 mb-1"><?php echo power(); ?></h6>
                        <a href="#"><i class="icon-circle text-primary blink"></i> <?php echo name(); ?> </a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="multi-collapse collapse show" id="userSettingsCollapse" style="">
                    <div class="list-group mt-3 shadow">
                        <a href="<?php echo url('/index/index/index'); ?>" class="list-group-item list-group-item-action"><i class="mr-2 icon-barometer text-primary "></i>仪表盘</a>
                         <?php if(session('power')=='0'){?>
                        <a href="<?php echo url('admin/index'); ?>" class="list-group-item list-group-item-action"><i class="mr-2 icon-cogs text-purple"></i>管理员设置</a>
                        <a href="<?php echo url('Version/index'); ?>" class="list-group-item list-group-item-action"><i class="mr-2 icon-paper-plane text-red"></i>APP版本更新</a>
                        <?php }?>
                      <!--
                        <?php if(session('power')=='1'){?>
                       <a  onclick="daili_money('0',<?php echo id(); ?>)" class="list-group-item list-group-item-action "> <i class="mr-2 icon-credit-card text-blue"></i>代理充值 </a> 
                         <?php } ?>
                      -->
                        <a href="<?php echo url('login/login/dologin'); ?>" class="list-group-item list-group-item-action"><i class="mr-2 icon-sign-out text-lime"></i>退出登录</a>
                    </div>
                </div>
            </div>
        </div>
      
      
              <ul class="sidebar-menu">
                
                
            <?php if(session('power')=='1'){?>
                
             <li class="header"><strong>设置 - Settings </strong></li>
            <li class="treeview">
              <a  href="<?php echo url('/index/appsettings/wechat'); ?>">
                
                <?php $app_working_mode  =  db('advert')->where('id = 1')->value('content');    if( $app_working_mode == '0'){?>    
                <i class="icon icon-android2 purple-text s-18"></i> <span>客服 / 发卡平台设置</span>
                <?php }else{ ?> 
                
                <i class="icon icon-android2 purple-text s-18"></i> <span>客服设置</span>
                <?php } ?>  
            </a>
            </li>
                
              <?php } if(session('power')=='0'){?>
                
            <li class="header"><strong>设置 - Settings </strong></li>
            <li class="treeview">
              <a href="#">
                <i class="icon icon-android2 purple-text s-18"></i> <span>APP设置</span><i class="icon icon-angle-left s-18 pull-right"></i>	
            </a>
                 <ul class="treeview-menu">
                   <li><a href="<?php echo url('/index/appsettings/wechat'); ?>"><i class="icon icon-keyboard_arrow_right"></i>客服</a></li>
                    <li><a href="<?php echo url('/index/appsettings/price'); ?>"><i class="icon icon-keyboard_arrow_right purple-text"></i>价格</a></li>
                </ul>
            </li>
           
                

                
                
            <li class="treeview">
              <a href="<?php echo url('vip/return_commissionr'); ?>">
                <i class="icon icon-credit-card light-green-text s-18"></i>返佣设置<i class="icon icon-angle-left s-18 pull-right"></i>
              </a>
            </li>
                
          
                                
    <li class="treeview ">
                <a href="<?php echo url('task/artical'); ?>">
                    <i class="icon icon-bullhorn pink-text s-18"></i> <span>公告</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>

            </li>             
                
                      <?php } if(session('power')=='0'){?>
            <li class="treeview">
              <a href="#">
                <i class="icon icon-image blue-text s-18"></i><span>广告设置</span><i class="icon icon-angle-left s-18 pull-right"></i>	
            </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo url('/index/banner/index'); ?>"><i class="icon icon-keyboard_arrow_right"></i>首页 - 轮播Banner	</a></li>
                
                    <li><a href="<?php echo url('/index/banner/index_two'); ?>"><i class="icon icon-keyboard_arrow_right"></i>首页 - 2列广告位 <i class="icon icon-looks_two  blue-text s-18 pull-right"></i>	</a></li>
                    <li><a href="<?php echo url('/index/banner/index_banner_ad'); ?>"><i class="icon icon-keyboard_arrow_right"></i>首页 - 中部横幅  <i class="icon icon-looks_one  blue-text s-18 pull-right"></i>	</a></li>
                   <li><a href="<?php echo url('/index/banner/index_right'); ?>"><i class="icon icon-keyboard_arrow_right"></i>首页 - 右上角图标  <i class="icon icon-looks_one  blue-text s-18 pull-right"></i>	</a></li>
                  
                  <li><a href="<?php echo url('/index/banner/category_left'); ?>"><i class="icon icon-keyboard_arrow_right"></i>分类 - 左侧文字  <i class="icon icon-looks_3  blue-text s-18 pull-right"></i>	</a></li>
                    <li><a href="<?php echo url('/index/banner/category_top_pic'); ?>"><i class="icon icon-keyboard_arrow_right"></i>分类 - 顶部图片  <i class="icon icon-looks_3  blue-text s-18 pull-right"></i>	</a></li>
                    <li><a href="<?php echo url('/index/banner/category_recommend'); ?>"><i class="icon icon-keyboard_arrow_right"></i>分类 - 推荐      <i class="icon icon-looks_6  blue-text s-18 pull-right"></i> </a></li>
                    <li><a href="<?php echo url('/index/banner/category_right'); ?>"><i class="icon icon-keyboard_arrow_right"></i>分类 - 右侧文字     <i class="icon icon-looks_one  blue-text s-18 pull-right"></i>  </a></li>
                    <li><a href="<?php echo url('/index/banner/category_banner_ad'); ?>"><i class="icon icon-keyboard_arrow_right"></i>分类 - 横幅     <i class="icon icon-looks_one  blue-text s-18 pull-right"></i>  </a></li>
                  
                    <li><a href="<?php echo url('/index/banner/recommend_top_ad'); ?>"><i class="icon icon-keyboard_arrow_right"></i>推荐页 - 顶部图标     <i class="icon icon-looks_5  blue-text s-18 pull-right"></i>  </a></li>
                    <li><a href="<?php echo url('/index/banner/recommend_banner_ad'); ?>"><i class="icon icon-keyboard_arrow_right"></i>推荐页 - BANNER     <i class="icon icon-looks_5  blue-text s-18 pull-right"></i>  </a></li>
                    <li><a href="<?php echo url('/index/banner/recommend_roll_ad'); ?>"><i class="icon icon-keyboard_arrow_right"></i>推荐页 - 中部滚动     <i class="icon icon-looks_6  blue-text s-18 pull-right"></i>  </a></li>
                    <li><a href="<?php echo url('/index/banner/recommend_big_picture_ad'); ?>"><i class="icon icon-keyboard_arrow_right"></i>推荐页 - 横幅大图     <i class="icon icon-looks_3  blue-text s-18 pull-right"></i>  </a></li>
                    <li><a href="<?php echo url('/index/banner/recommend_small_picture_ad'); ?>"><i class="icon icon-keyboard_arrow_right"></i>推荐页 - 横幅小图     <i class="icon icon-looks_two  blue-text s-18 pull-right"></i>  </a></li>
                    <li><a href="<?php echo url('/index/banner/recommend_text_ad'); ?>"><i class="icon icon-keyboard_arrow_right"></i>推荐页 - 文字广告     <i class="icon icon-looks_one  blue-text s-18 pull-right"></i>  </a></li>
                    <li><a href="<?php echo url('/index/banner/analysis_pay_text_ad'); ?>"><i class="icon icon-keyboard_arrow_right"></i>解析播放页 - 文本广告     <i class="icon icon-looks_two  blue-text s-18 pull-right"></i>  </a></li>
                    <li><a href="<?php echo url('/index/banner/analysis_pay_banner_ad'); ?>"><i class="icon icon-keyboard_arrow_right"></i>解析播放页 - BANNER     <i class="icon icon-looks_3  blue-text s-18 pull-right"></i>  </a></li>
                    <li><a href="<?php echo url('/index/banner/analysis_pay_three_diagram_ad'); ?>"><i class="icon icon-keyboard_arrow_right"></i>解析播放页 - 小图     <i class="icon icon-looks_4 blue-text s-18 pull-right"></i>  </a></li>
                  
              <!--    <li><a href="<?php echo url('/index/banner/foot_nav'); ?>"><i class="icon icon-keyboard_arrow_right"></i>底部导航图标      <i class="icon icon-looks_4  blue-text s-18 pull-right"></i>  </a></li> -->
                        
              
              </ul>
            </li>
                   <?php } if(session('power')=='1'){?> 
              <li class="treeview">
              <a href="<?php echo url('/index/banner/index'); ?>">
                <i class="icon icon-image blue-text s-18"></i><span>轮播Banner设置</span>
            </a>
            </li>
               
                

 				<?php } ?> 
        <!--    <li class="treeview no-b">
              <a href="#">
                <i class="icon icon-umbrella light-green-text s-18"></i><span>其他设置</span><span class="badge r-3 badge-success pull-right">20</span>
            </a>
                <ul class="treeview-menu">
                    <li><a href="panel-page-inbox.html"><i class="icon icon-keyboard_arrow_right"></i>All Messages</a>
                    </li>
                    <li><a href="panel-page-inbox-create.html"><i class="icon icon-keyboard_arrow_right"></i>Compose</a>
                    </li>
                </ul>
            </li>-->
                
                
             <?php if(session('power')=='1'){$app_working_mode  =  db('advert')->where('id = 1')->value('content');    if( $app_working_mode == '0'){?> 
                    <li class="header light mt-3"><strong>管理 - Administration</strong></li>




                    <li class="treeview ">
                        <a href="#">
                            <i class="icon icon-trophy2 text-lime s-18"></i> <span>激活码管理</span>
                            <i class="icon icon-angle-left s-18 pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo url('dianka/index'); ?>"><i class="icon icon-keyboard_arrow_right"></i>激活码生成</a>
                            </li>
                            <li><a href="<?php echo url('dianka/ylog'); ?>"><i class="icon icon-keyboard_arrow_right"></i>待用激活码</a>
                            </li>
                            <li><a href="<?php echo url('dianka/slog'); ?>"><i class="icon icon-keyboard_arrow_right"></i>已用激活码</a>
                            </li>
                        </ul>
                    </li>
                	<?php } } if(session('power')=='0'){?>   
                
                     <li class="header light mt-3"><strong>管理 - Administration</strong></li>




                    <li class="treeview ">
                        <a href="#">
                            <i class="icon icon-trophy2 text-lime s-18"></i> <span>激活码管理</span>
                            <i class="icon icon-angle-left s-18 pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo url('dianka/index'); ?>"><i class="icon icon-keyboard_arrow_right"></i>激活码生成</a>
                            </li>
                            <li><a href="<?php echo url('dianka/ylog'); ?>"><i class="icon icon-keyboard_arrow_right"></i>待用激活码</a>
                            </li>
                            <li><a href="<?php echo url('dianka/slog'); ?>"><i class="icon icon-keyboard_arrow_right"></i>已用激活码</a>
                            </li>
                        </ul>
                    </li>
                
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-users purple-text  s-18 "></i> <span>用户管理</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo url('vip/index'); ?>"><i class="icon icon-keyboard_arrow_right"></i>用户列表</a></li>
               <!--     <li><a href="<?php echo url('user/clog'); ?>"><i class="icon icon-keyboard_arrow_right"></i>充值记录</a></li>
                    <li><a href="<?php echo url('user/paylog'); ?>"><i class="icon icon-keyboard_arrow_right"></i>在线支付记录</a></li> -->
                    <li><a href="<?php echo url('user/xlog'); ?>"><i class="icon icon-keyboard_arrow_right"></i>开通记录</a> </li>
                    <li><a href="<?php echo url('user/mlog'); ?>"><i class="icon icon-keyboard_arrow_right"></i>代理记录</a> </li>
                    <li><a href="<?php echo url('user/daoqi'); ?>"><i class="icon icon-keyboard_arrow_right"></i>即将到期</a> </li>
                </ul>
            </li>
                
             
               <li class="treeview">
                <a href="#">
                    <i class="icon icon-brightness_auto pink-text s-18"></i> <span>广告权限管理</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo url('banner/banner_switch_admin'); ?>"><i class="icon icon-keyboard_arrow_right"></i>权限审核</a></li>
                    <li><a href="<?php echo url('banner/banner_admin'); ?>"><i class="icon icon-keyboard_arrow_right"></i>广告审核</a></li>
                </ul>
            </li>
                
                          
                
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-sitemap blue-text s-18"></i> <span>佣金管理</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo url('yhtx/index'); ?>"><i class="icon icon-keyboard_arrow_right"></i>提现申请</a></li>
                    <li><a href="<?php echo url('yhtx/txlog'); ?>"><i class="icon icon-keyboard_arrow_right"></i>提现记录</a></li>
                </ul>
            </li>
                
                
                
                
            <li class="treeview ">
                <a href="#">
                    <i class="icon icon-toggle-right light-green-text s-18 "></i> <span>影视 &amp; 直播管理</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo url('/index/banner/index_vip'); ?>"><i class="icon icon-keyboard_arrow_right"></i>全网影视</a>
                    </li>
                    <li><a href="<?php echo url('video/index'); ?>"><i class="icon icon-keyboard_arrow_right"></i>电影推荐</a>
                    </li>
                    <li><a href="<?php echo url('tv/index'); ?>"><i class="icon icon-keyboard_arrow_right"></i>电视直播</a>
                    </li>
                    <li><a href="<?php echo url('mn/index'); ?>"><i class="icon icon-keyboard_arrow_right"></i>私人影片</a>
                    </li>
                    <li><a><i class="icon icon-keyboard_arrow_right"></i> - - 预 - -</a>
                    </li>
                    <li><a><i class="icon icon-keyboard_arrow_right"></i> - - 留 - -</a>
                    </li>
                    <li><a><i class="icon icon-keyboard_arrow_right"></i> - - 栏 - -</a>
                    </li>
                    <li><a><i class="icon icon-keyboard_arrow_right"></i> - - 目 - -</a>
                    </li>
                </ul>
            </li>

   
        </ul>
      
      	<?php } $app_working_mode  =  db('advert')->where('id = 1')->value('content');   if(session('power')=='1' and $app_working_mode == '0'){?> 
   
                  <li class="treeview">
                <a href="<?php echo url('vip/index'); ?>">
                    <i class="icon icon-users pink-text s-18"></i> <span>用户管理</span>
                </a>

            </li>
     
     	<?php } ?>      
 
    </section><div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.3); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 919px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
</aside>
<!--Sidebar End-->
<div class="has-sidebar-left">
    <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
            <div class="search-bar">
                <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text" placeholder="start typing...">
            </div>
            <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
        </div>
    </div>
</div>
    <div class="sticky">
        <div class="navbar navbar-expand navbar-dark d-flex justify-content-between bd-navbar blue accent-3">
            <div class="relative">
                <a href="#" data-toggle="offcanvas" class="paper-nav-toggle pp-nav-toggle">
                    <i></i>
                </a>
            </div>
            <!--Top Menu Start -->
<div class="navbar-custom-menu p-t-10">
    <ul class="nav navbar-nav">

        <li class="dropdown custom-dropdown user user-menu">
            <a href="#" class="nav-link" data-toggle="dropdown">
                <img src="<?php echo Ryan_user_logo(); ?>" class="user-image" alt="Perfect Network Service">

            </a>
      
        </li>
    </ul>
</div>
        </div>
    </div>
</div>

  
  
  
  
          	 <script type="text/javascript">
    jQuery(document).ready(function($)
    {
        // Notifications
        setTimeout(function()
        {
            var opts = {
                "closeButton": true,
                "debug": false,
                "positionClass": "toast-top-right toast-default",
                "toastClass": "black",
                "onclick": null,
                "showDuration": "100",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr.info("You have been awarded with 1 year free subscription. Enjoy it!", "Account Subcription Updated", opts);
        }, 3000);

        // Charts
        var xenonPalette = ['#68b828','#7c38bc','#0e62c7','#fcd036','#4fcdfc','#00b19d','#ff6264','#f7aa47'];

        // Pageviews Visitors Chart
        var i = 0,
            line_chart_data_source = [
                { id: ++i, part1: 4, part2: 2 },
                { id: ++i, part1: 5, part2: 3 },
                { id: ++i, part1: 5, part2: 3 },
                { id: ++i, part1: 4, part2: 2 },
                { id: ++i, part1: 3, part2: 1 },
                { id: ++i, part1: 3, part2: 2 },
                { id: ++i, part1: 5, part2: 3 },
                { id: ++i, part1: 7, part2: 4 },
                { id: ++i, part1: 9, part2: 5 },
                { id: ++i, part1: 7, part2: 4 },
                { id: ++i, part1: 7, part2: 3 },
                { id: ++i, part1: 11, part2: 6 },
                { id: ++i, part1: 10, part2: 8 },
                { id: ++i, part1: 9, part2: 7 },
                { id: ++i, part1: 8, part2: 7 },
                { id: ++i, part1: 8, part2: 7 },
                { id: ++i, part1: 8, part2: 7 },
                { id: ++i, part1: 8, part2: 6 },
                { id: ++i, part1: 15, part2: 5 },
                { id: ++i, part1: 10, part2: 5 },
                { id: ++i, part1: 9, part2: 6 },
                { id: ++i, part1: 9, part2: 3 },
                { id: ++i, part1: 8, part2: 5 },
                { id: ++i, part1: 8, part2: 4 },
                { id: ++i, part1: 9, part2: 5 },
                { id: ++i, part1: 8, part2: 6 },
                { id: ++i, part1: 8, part2: 5 },
                { id: ++i, part1: 7, part2: 6 },
                { id: ++i, part1: 7, part2: 5 },
                { id: ++i, part1: 6, part2: 5 },
                { id: ++i, part1: 7, part2: 6 },
                { id: ++i, part1: 7, part2: 5 },
                { id: ++i, part1: 8, part2: 5 },
                { id: ++i, part1: 6, part2: 5 },
                { id: ++i, part1: 5, part2: 4 },
                { id: ++i, part1: 5, part2: 3 },
                { id: ++i, part1: 6, part2: 3 },
            ];

        $("#pageviews-visitors-chart").dxChart({
            dataSource: line_chart_data_source,
            commonSeriesSettings: {
                argumentField: "id",
                point: { visible: true, size: 5, hoverStyle: {size: 7, border: 0, color: 'inherit'} },
                line: {width: 1, hoverStyle: {width: 1}}
            },
            series: [
                { valueField: "part1", name: "Pageviews", color: "#68b828" },
                { valueField: "part2", name: "Visitors", color: "#eeeeee" },
            ],
            legend: {
                position: 'inside',
                paddingLeftRight: 5
            },
            commonAxisSettings: {
                label: {
                    visible: false
                },
                grid: {
                    visible: true,
                    color: '#f9f9f9'
                }
            },
            valueAxis: {
                max: 25
            },
            argumentAxis: {
                valueMarginsEnabled: false
            },
        });




        // Resize charts
        $(window).on('xenon.resize', function()
        {
            $("#pageviews-visitors-chart").data("dxChart").render();

        });

    });


</script>




<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-medal9"></i>
                        <?php echo $app_name; ?>
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white" id="v-pills-tab">
                    <li>
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1">
                            <i class="icon icon-barometer"></i>仪表盘</a>
                    </li>
                    <li>
                        <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"><i class="icon icon-cog mb-3"></i>设置</a>
                    </li>
                    <li>
                        <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3"><i class="icon icon-filter_9"></i>接口</a>
                    </li>
                </ul>
              
              <!--右侧
                <a class="btn-fab fab-right btn-primary" data-toggle="control-sidebar">
                    <i class="icon icon-menu"></i>
                </a>
              -->
              
            </div>
        </div>
    </header>
  
  
  
    <div class="container-fluid relative animatedParent animateOnce">
      
      
      
        <div class="tab-content pb-3" id="v-pills-tabContent">
          
         
          
            <!--Today Tab Start-->
            <div class="tab-pane animated fadeInUpShort show active go" id="v-pills-1">
              
              
              
        <div class="card my-3 shadow b-0">
            <div class="row no-gutters">
 
                <div class="col-md-12 col-sm-12 white">
                    <div class="">
                        <div class="card-body  chat-widget p-3" >
                            <div class="w-body w-scroll ">
                                <ul class="list-unstyled">
                                 
                                  
               					  <?php $name  =  db('user')->where('id',session('user'))->value('username');  if(session('user')=='1'&& $name=='admin'){?>                  
                                    <li class="by-me">
                                        <div class="avatar float-left">
                                            <b class="c-idle"></b>
                                            <img src="https://s1.ax1x.com/2020/04/03/GN5an0.png"  class="img-responsive">
                                        </div>
                                        <div class="chat-content">
                                            <div class="chat-meta"><i class="icon-beenhere text-light-blue"></i> <span style="color: #03a9f4;"> <script> document.write("\u7231\u770b\u8d44\u6e90\u7f51") </script></span><script> document.write("\u0020\u53cb\u60c5\u63d0\u793a\uff1a") </script>
                                                <span class="float-right"> <script> document.write("\u0069\u006b\u006d\u006f\u0076\u0069\u0065\u002e\u0078\u0079\u007a") </script></span>
                                            </div>
                                           <div class="chat-meta">
                                            <script> document.write("\u8d85\u7ea7\u7ba1\u7406\u5458\u8d26\u6237\u4e3a\u9ed8\u8ba4\u503c") </script>  <a href="<?php echo url('admin/index'); ?>" class="badge badge-Warning" ><script> document.write("\u0061\u0064\u006d\u0069\u006e") </script></a> <script> document.write("\u0020\u5b58\u5728\u5b89\u5168\u98ce\u9669\u002c\u8bf7\u53ca\u65f6\u4fee\u6539\u0020\u0021\u0020") </script> .
                                          </div>
                                          <div class="clearfix"></div>
                                        </div>
                                    </li>
           						  <?php }  $txlog  =  db('user')->where('tx = 1')->count();   
									$banner_power =  db('user')->where('banner_switch = 2 and power = 1')->count();  
									$banner_audit =  db('banner')->where('audit = 2 and user_id != 1')->count();  

								if($txlog > '0' or $banner_power > '0'  or $banner_audit > '0' ){if($txlog > '0'){?>   
                                    <li class="by-me">
                                        <div class="avatar float-left">
                                            <b class="c-on"></b>
                                          <span  class="btn-fab btn-fab-sm btn-Danger shadow1" style=" text-align:center; ">
                                            <i class="icon-child_care s-18" ></i>
                                        </span>   
                                          
                                      </div>
            
                                        <div class="chat-content">
                                            <div class="chat-meta">系统提示：
                                                <span class="float-right">System</span>
                                            </div>
                                          <div class="chat-meta">
                                            有 
                                           <a  href="<?php echo url('yhtx/index'); ?>" class="badge badge-primary  shadow1 ">
                                             <i class="blink "  style="font-weight:bold"><?php echo $txlog; ?></i> 
                                          </a>  
                                          笔佣金提现待审核 请及时处理 ! 祝君<span  id="logInfo">2019</span>日进斗金! 
                                          </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
             						<?php } if($banner_power > '0'){ ?>
                                  
                                         <li class="by-me">
                                        <div class="avatar float-left">
                                            <b class="c-on"></b>
                                          <span  class="btn-fab btn-fab-sm btn-Danger shadow1" style=" text-align:center; ">
                                            <i class="icon-child_care s-18" ></i>
                                        </span>   
                                          
                                      </div>
            
                                        <div class="chat-content">
                                            <div class="chat-meta">系统提示：
                                                <span class="float-right">System</span>
                                            </div>
                                          <div class="chat-meta">
                                            有 
                                           <a  href="<?php echo url('banner/banner_switch_admin'); ?>" class="badge badge-primary  shadow1 ">
                                             <i class="blink "  style="font-weight:bold"><?php echo $banner_power; ?></i>
                                          </a>  
                                          个广告权限申请 请及时处理 !
                                          </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                   	<?php }  if($banner_audit > '0'){ ?>
                                  
                                        <li class="by-me">
                                        <div class="avatar float-left">
                                            <b class="c-on"></b>
                                          <span  class="btn-fab btn-fab-sm btn-Danger shadow1" style=" text-align:center; ">
                                            <i class="icon-child_care s-18" ></i>
                                        </span>   
                                          
                                      </div>
            
                                        <div class="chat-content">
                                            <div class="chat-meta">系统提示：
                                                <span class="float-right">System</span>
                                            </div>
                                          <div class="chat-meta">
                                            有 
                                           <a  href="<?php echo url('banner/banner_admin'); ?>" class="badge badge-primary  shadow1 ">
                                             <i class="blink "  style="font-weight:bold"><?php echo $banner_audit; ?></i>
                                          </a>  
                                          轮播广告待审核 请及时处理 !
                                          </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                  
                                 	<?php } }else { ?>
                                  
                                       <li class="by-me">
                                        <div class="avatar float-left">
                                            <b class="c-on"></b>
                                          <span  class="btn-fab btn-fab-sm btn-Success shadow1" style=" text-align:center; ">
                                            <i class="icon-check_circle s-18" ></i>
                                        </span>   
                                          
                                      </div>
            
                                        <div class="chat-content">
                       
                                          <div class="chat-meta">
                                            暂无待办事项 祝君<span  id="logInfo">2019</span>日进斗金! 
                                          </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>

 							<?php } ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
              
              
              
              
              
              
              
                            

            <!--  <br>
              <div role="alert" class="alert alert-danger"><strong>安全警告!</strong> 超级管理员账户为默认值  <span class="badge badge-Dark">admin</span>  请及时修改. <a href="<?php echo url('admin/index'); ?>" ><span class="badge r-3 badge-primary pull-right">立刻修改</span></a> </div>
              -->
             

                
                       		 <?php    //如果APPid sid 为空
              
                                                        $connect_sid = db('advert')->where('id',48)->value('content');    
                                                         $appId = db('advert')->where('id',47)->value('content'); 

                                               
                                                      $ch =curl_init();
                                                      curl_setopt($ch,CURLOPT_URL,'https://www.apicloud.com/getV2AppStatisticDataByAppIdAndDate');
                                                      $startDate= date('Y-m-d', strtotime('-1 day'));
                                                      $endDate=date('Y-m-d', time());
                                                      $smsConf = array(
                                                              'appId'   => "$appId",
                                                              'startDate'    =>$startDate ,
                                                              'endDate'    =>$endDate
                                                          );
                                                      curl_setopt($ch,CURLOPT_POST,true);
                                                      curl_setopt( $ch , CURLOPT_POSTFIELDS , $smsConf );
                                                      curl_setopt($ch,CURLOPT_HEADER,false);
                                                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 				  
												      curl_setopt($ch,CURLOPT_COOKIE,"connect.sid=$connect_sid;");
                                                      $res=curl_exec($ch);

								if(substr_count($res,"0")){?>
  
                
              
              
              
               
                <div class="row my-3">
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                          <span class="badge text-light-blue r-30 float-right"><i class="icon-database"></i></span>
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-mail-envelope2 text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title" >用户总数</div>
                                <h5 class="sc-counter mt-3 " ><?php echo $ycount; ?></h5>
                            </div>
                        </div>
                    </div>
                
                  <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                          <span class="badge text-light-blue r-30 float-right"><i class="icon-database"></i></span>
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-medal4 text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title">代理数</div>
                                <h5 class="sc-counter mt-3 "><?php echo $dcount; ?></h5>
                            </div>
                        </div>
                    </div>
                

                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                          <span class="badge text-light-blue r-30 float-right"><i class="icon-database"></i></span>
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-certificate2 text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title"> 付费用户</div>
                                <h5 class="sc-counter mt-3"><?php echo $fcount; ?></h5>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                          <span class="badge text-light-blue r-30 float-right"><i class="icon-database"></i></span>
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-award s-48"></span>
                                </div>
                                <div class="counter-title">免费用户</div>
                                <h5 class="sc-counter mt-3"><?php echo $mcount; ?></h5>
                            </div>

                        </div>
                    </div>
                </div>

              
              
                             
                  
                  
                  
                <div class="row my-3">
                
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                          <span class="badge text-light-blue r-30 float-right"><i class="icon-database"></i></span>
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-key3 s-48"></span>
                                </div>
                                <div class="counter-title "> 今天登录人数</div>
                                <h5 class="sc-counter mt-3"><?php echo $tzcount; ?></h5>
                            </div>

                        </div>
                    </div>
                  
                  
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                          <span class="badge text-light-blue r-30 float-right"><i class="icon-sellsy"></i></span>
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-two-fingers-double-tap s-48"></span>
                                </div>
                                <div class="counter-title ">今日启动次数 </div>
                                <h5 class="sc-counter mt-3"><?php echo $todayOperationCount; ?></h5>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                          <span class="badge text-light-blue r-30 float-right"><i class="icon-sellsy"></i></span>
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-stop-watch s-48"></span>
                                </div>
                                <div class="counter-title">今日活跃用户</div>
                                <h5 class="sc-counter mt-3 "><?php echo $activeCountInToday; ?></h5>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                          <span class="badge text-light-blue r-30 float-right"><i class="icon-sellsy"></i></span>
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-grinning-face  text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title">新增用户</div>
                                <h5 class="sc-counter mt-3 "><?php echo $newRegsCount; ?></h5>
                            </div>

                        </div>
                    </div>
                  
                  

                </div>     
              
              
              
              
                <div class="row my-3">

                  
                  
                  
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                          <span class="badge text-light-blue r-30 float-right"><i class="icon-sellsy"></i></span>
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-inbox-download s-48"></span>
                                </div>
                                <div class="counter-title ">App注册累计用户</div>
                                <h5 class="sc-counter mt-3 "><?php echo $devicesCount; ?></h5>
                            </div>

                        </div>
                    </div>
                  
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                          <span class="badge text-light-blue r-30 float-right"><i class="icon-sellsy"></i></span>
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-startup s-48"></span>
                                </div>
                                <div class="counter-title">累计启动</div>
                                <h5 class="sc-counter mt-3 "><?php echo $totalOperationCount; ?></h5>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                          <span class="badge text-light-blue r-30 float-right"><i class="icon-sellsy"></i></span>
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-document-bookmark s-48"></span>
                                </div>
                                <div class="counter-title">7天内活跃用户</div>
                                <h5 class="sc-counter mt-3 "><?php echo $activeCountInSevenDays; ?></h5>
                            </div>

                        </div>
                    </div>
                  
                      <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                          <span class="badge text-light-blue r-30 float-right"><i class="icon-sellsy"></i></span>
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-document-diagrams s-48"></span>
                                </div>
                                <div class="counter-title">30天内活跃用户</div>
                                <h5 class="sc-counter mt-3 "><?php echo $activeCountInThirtyDays; ?></h5>
                            </div>

                        </div>
                    </div>                
                  
                  
                  
                </div>     
              
                


            <div class="card-header white">
                          <span class="badge text-light-blue r-30 "><i class="icon-database"></i> 实时</span>
                          <span class="badge text-light-blue r-30 "><i class="icon-sellsy"></i> 更新时间 <?php echo $reportDate; ?></span>
                </div>  
              
              <br>
              
              
              
              
              
    
              
                 <?php } else { ?>   
                  
              
              
              <div class="row my-3">
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                          <span class="badge text-light-blue r-30 float-right"><i class="icon-database"></i></span>
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-mail-envelope2 text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title" >用户总数</div>
                                <h5 class="sc-counter mt-3 " ><?php echo $ycount; ?></h5>
                            </div>
                        </div>
                    </div>
                
                  <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                          <span class="badge text-light-blue r-30 float-right"><i class="icon-database"></i></span>
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-medal4 text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title">代理数</div>
                                <h5 class="sc-counter mt-3 "><?php echo $dcount; ?></h5>
                            </div>
                        </div>
                    </div>
                

                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                          <span class="badge text-light-blue r-30 float-right"><i class="icon-database"></i></span>
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-certificate2 text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title"> 付费用户</div>
                                <h5 class="sc-counter mt-3"><?php echo $fcount; ?></h5>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                          <span class="badge text-light-blue r-30 float-right"><i class="icon-database"></i></span>
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-award s-48"></span>
                                </div>
                                <div class="counter-title">免费用户</div>
                                <h5 class="sc-counter mt-3"><?php echo $mcount; ?></h5>
                            </div>

                        </div>
                    </div>
                </div>

              
                  
                  
                <div class="row my-3">
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                          <span class="badge text-light-blue r-30 float-right"><i class="icon-database"></i></span>
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-key3 s-48"></span>
                                </div>
                                <div class="counter-title "> 今天登录人数</div>
                                <h5 class="sc-counter mt-3"><?php echo $tzcount; ?></h5>
                            </div>

                        </div>
                    </div>
                  
                  
                  
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                          
                                  					 <div class="white text-center p-4">
                                                 		<div class="float-right"><span class="icon red-text icon-cloud-error s-48  blink"></span></div>
                                                        <h6 class="mb-3">Key 缺失/失效</h6>
                                                        <div class="mt-3">
                                                          <a href="<?php echo url('index/appId'); ?>" >
                                                            <span class="badge badge-danger r-30"><i class="icon-puzzle-piece mr-2"></i>获取更多信息</span>
                                                          </a>

                                                       </div>
                                                    </div>
                        </div>
                    </div>
                  
                </div>     
              
             
              <?php } ?>   
                     
              
              

              
              
              
              
                <div class="row">
                    <div class="col-md-12">
                        <div class="white p-5 r-5">
                            <div class="card-title">
                                <h5> 不想写 日后再说</h5>
                            </div>
                 
                        </div>
                    </div>
                </div>
      
            </div>
            <!--Today Tab End-->
            <!--Yesterday Tab Start-->
            <div class="tab-pane animated fadeInUpShort go" id="v-pills-2">
                   <div class="animatedParent animateOnce">
                      <div class="container-fluid my-3">
                          <div class="row">
                              <div class="col-md-7">
                                  <div class="card">
                                      <div class="card-body b-b">
                                        
                                        
                                          <form class="form-material"   role="form" id="form1" method="post" action="<?php echo url('index/setup'); ?>" >
                                              <!-- Input -->
                                              <div class="body">
   
                                            
                                          <h4>系统设置</h4><hr><br>    

                                                
                                                
                                                
                                                
                                                
                                  <h6>APP 工作模式 ：
                                     <?php  $app_working_mode  =  db('advert')->where('id = 1')->value('content');   

								if($app_working_mode == '1'){?> 
                                    
                                 <span class="btn btn-primary btn-xs blink"><b>  <i class="icon-call_split  "></i> 返佣模式 </b></span>
                     
                                    
                                    <?php } else { ?>
                                    
                                    
                                 <span class="btn btn-Danger btn-xs purple  blink"><b>  <i class="icon-assistant  "></i> 代理模式 </b></span>
                                    
                                    <?php }  ?>
                                                
                                    </h6>
 					 <br>
                                           <div class="row clearfix">
                                                      <div class="col-sm-12">

                                   <select class="form-control"   name="app_working_mode"  id="app_working_mode" >
                                     
                              <?php  $app_working_mode  =  db('advert')->where('id = 1')->value('content');   

								if($app_working_mode == '1'){?> 
                                    
                              <option  value="1" selected="selected" >当前选择：返佣模式</option>
                     
                                    
                                    <?php } else { ?>
                                    
                                    
                                 <option  value="0" selected="selected" >当前选择：代理模式</option>
                                    
                                    <?php }  ?>
                                     
                                     
                                     
               
                                        <option  value="0">代理模式</option>
                                        <option  value="1">返佣模式</option>
                                     
                                     
                                     
                                    </select>

                                                        
                                                        
                                                
            </div>
                                                  </div>      
                     <br>

                                       

                                       <?php  $app_working_mode  =  db('advert')->where('id = 1')->value('content');   

								if($app_working_mode == '1'){?> 
                                   
                                  <h6>返佣模式下 原代理生成激活码状态 ：
                                     <?php  $Activation_Code_Limitation  =  db('advert')->where('id = 171')->value('content');   

								if($Activation_Code_Limitation == '1'){?> 
                                    
                                 <span class="btn btn-primary btn-xs "><b>   <i class="icon-close  "></i> 失效 </b></span>
                     
                                    
                                    <?php } else { ?>
                                    
                                    
                                 <span class="btn btn-Danger btn-xs purple"><b>  默认 </b></span>
                                    
                                    <?php }  ?>
                                                
                                    </h6>
 					 <br>
                                           <div class="row clearfix">
                                                      <div class="col-sm-12">

                                   <select class="form-control"   name="Activation_Code_Limitation"  id="Activation_Code_Limitation" >
                                     
                              <?php  $Activation_Code_Limitation  =  db('advert')->where('id = 171')->value('content');   

								if($Activation_Code_Limitation == '1'){?> 
                                    
                              <option  value="1" selected="selected" >当前选择：失效</option>
                     
                                    
                                    <?php } else { ?>
                                    
                                    
                                 <option  value="0" selected="selected" >当前选择：默认</option>
                                    
                                    <?php }  ?>
                                     
                                     
                                     
               
                                        <option  value="0">默认</option>
                                        <option  value="1">失效</option>
                                     
                                     
                                     
                                    </select>

                                                        
                                                        
                                                
            </div>
                                                  </div>      
                     <br>

                                       
      <?php }  ?>
                                                
                                                                                              
                                                
                                                
                                                
                                                
                                      <h6>注册设备判断 ：
                                        


                                     <?php  $deviceId  =  db('advert')->where('id = 6')->value('content');   

								if($deviceId == '1'){?> 
                                    
                                 <span class="btn btn-primary btn-xs "><b>  <i class="icon-check-circle  "></i> 开启中 </b></span>
                     
                                    
                                    <?php } else { ?>
                                    
                                    
                                 <span class="btn btn-outline-Danger btn-xs "><b>  <i class="icon-close  "></i> 关闭 </b></span>
                                    
                                    <?php }  ?>
                                                
                                    </h6>
 					 <br>
                                                    
                                           <div class="row clearfix">
                                                      <div class="col-sm-12">

                                   <select class="form-control"   name="deviceId"  id="deviceId" >
                                     
                              <?php  $deviceId  =  db('advert')->where('id = 6')->value('content');   

								if($deviceId == '1'){?> 
                                    
                              <option  value="1" selected="selected" >当前选择：开启</option>
                     
                                    
                                    <?php } else { ?>
                                    
                                    
                                 <option  value="0" selected="selected" >当前选择：关闭</option>
                                    
                                    <?php }  ?>
                                     
                                     
                                     
               
                                        <option  value="0">关闭</option>
                                        <option  value="1">开启</option>
                                     
                                     
                                     
                                    </select>

                                                        
                                                        
                                                
            </div>
                                                  </div>   
                     <br>

  
  
                                                            
                                                
                                                
                                      <h6>快捷登录按钮开放 ：
                                     <?php  $Is_Quick_login  =  db('advert')->where('id = 173')->value('content');   

								if($Is_Quick_login == '1'){?> 
                                    
                                 <span class="btn btn-primary btn-xs "><b>  <i class="icon-check-circle  "></i> 开放 </b></span>
                     
                                    
                                    <?php } else { ?>
                                    
                                    
                                 <span class="btn btn-outline-Danger btn-xs "><b>  <i class="icon-close  "></i> 关闭 </b></span>
                                    
                                    <?php }  ?>
                                                
                                    </h6>
 					 <br>
                                           <div class="row clearfix">
                                                      <div class="col-sm-12">

                                   <select class="form-control"   name="Is_Quick_login"  id="Is_Quick_login" >
                                     
                              <?php  $Is_Quick_login  =  db('advert')->where('id = 173')->value('content');   

								if($Is_Quick_login == '1'){?> 
                                    
                              <option  value="1" selected="selected" >当前选择：开放</option>
                     
                                    
                                    <?php } else { ?>
                                    
                                    
                                 <option  value="0" selected="selected" >当前选择：关闭</option>
                                    
                                    <?php }  ?>
                                     
                                     
                                     
               
                                        <option  value="0">关闭</option>
                                        <option  value="1">开放</option>
                                     
                                     
                                     
                                    </select>

                                                        
                                                        
                                                
            </div>
                                                  </div>      
                     <br>
                                            
                                                
                                                
                                                
                                                
                                                
                                                
                                                                                        
                                                
                                                    
                                                
                                                
                                      <h6>快捷登录是否参与设备判断 ：
                                     <?php  $wechat_login_device_judgment  =  db('advert')->where('id = 110')->value('content');   

								if($wechat_login_device_judgment == '1'){?> 
                                    
                                 <span class="btn btn-primary btn-xs "><b>  <i class="icon-check-circle  "></i> 参与 </b></span>
                     
                                    
                                    <?php } else { ?>
                                    
                                    
                                 <span class="btn btn-outline-Danger btn-xs "><b>  <i class="icon-close  "></i> 不参与 </b></span>
                                    
                                    <?php }  ?>
                                                
                                    </h6>
 					 <br>
                                           <div class="row clearfix">
                                                      <div class="col-sm-12">

                                   <select class="form-control"   name="wechat_login_device_judgment"  id="wechat_login_device_judgment" >
                                     
                              <?php  $wechat_login_device_judgment  =  db('advert')->where('id = 110')->value('content');   

								if($wechat_login_device_judgment == '1'){?> 
                                    
                              <option  value="1" selected="selected" >当前选择：参与</option>
                     
                                    
                                    <?php } else { ?>
                                    
                                    
                                 <option  value="0" selected="selected" >当前选择：不参与</option>
                                    
                                    <?php }  ?>
                                     
                                     
                                     
               
                                        <option  value="0">不参与</option>
                                        <option  value="1">参与</option>
                                     
                                     
                                     
                                    </select>

                                                        
                                                        
                                                
            </div>
                                                  </div>      
                     <br>
                                            
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                  
                                                
                                                
                                                
                                                   
                                  <h6>首页VIP影视区主题： </h6>
                                           <div class="row clearfix">
                                                      <div class="col-sm-12">
                                   <select class="form-control"   name="vip_movies_theme"  id="vip_movies_theme" >
                                     
                                     
                              <?php  $vip_movies_theme  =  db('advert')->where('id = 7')->value('content');   

								if($vip_movies_theme == '0'){?> 
                              <option  value="0" selected="selected" >当前选择：自动</option>
                                     
                                    <?php } else if($vip_movies_theme == '1') { ?>
                                 <option  value="1" selected="selected" >当前选择：春暖花开</option>
                                     
                                    <?php } else if($vip_movies_theme == '2') { ?>
                                 <option  value="2" selected="selected" >当前选择：盛夏时光</option>
                                     
                                      <?php } else if($vip_movies_theme == '3') { ?>
                                 <option  value="3" selected="selected" >当前选择：花好月圆</option>
                                     
                                      <?php } else if($vip_movies_theme == '4') { ?>
                                 <option  value="4" selected="selected" >当前选择：冰天雪地</option>
                                     
                                      <?php } else if($vip_movies_theme == '5') { ?>
                                 <option  value="5" selected="selected" >当前选择：喜迎新春</option>
                                     <?php } else if($vip_movies_theme == '99') { ?>
                                     
                                 <option  value="99" selected="selected" >当前选择：自定义</option>
                                     
                                     <?php } else if($vip_movies_theme == '100') { ?>
                                     
                                 <option  value="100" selected="selected" >当前选择：关闭</option>
                                     
                                     <?php }  ?> 
                                        <option  value="0">自动</option>
                                        <option  value="1">春暖花开</option>
                                        <option  value="2">盛夏时光</option>
                                        <option  value="3">花好月圆</option>
                                        <option  value="4">冰天雪地</option>
                                        <option  value="5">喜迎新春</option>
                                        <option  value="99">自定义</option>
                                        <option  value="100">关闭</option>
                                    </select>
                                                
            </div>
                                                  </div>                                
                                                
                           <br>                            
               
                                                
                                                
                                                       
                                     <?php  $vip_movies_theme  =  db('advert')->where('id = 7')->value('content');   

								if($vip_movies_theme == '99'){?>             
                                                                                                           
                                     <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float ">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('174'); ?>" name="vip_movies_theme_top" >
                                                    <label class="form-label"><span style=" color: #7dc855; ">头部图片</span></label>
                                                </div>
                                            </div>
                                        </div>
                            
                                                
          							 </div>                                           
                                         
                                 
                                                
                                     <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float ">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('175'); ?>" name="vip_movies_theme_foot" >
                                                    <label class="form-label"><span style=" color: #7dc855; ">底部图片</span></label>
                                                </div>
                                            </div>
                                        </div>
                            
                                                
          							 </div>                 
                                                
                                                
                                                
                                       <?php }  ?>              
                                                
                                                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                

                                                
                                                
                                                   
                                  <h6>代理广告优先级：</h6>
                                           <div class="row clearfix">
                                                      <div class="col-sm-12">
                                   <select class="form-control"   name="ranking_agent_ad"  id="ranking_agent_ad" >
                                     
                                     
                              <?php  $ranking_agent_ad  =  db('advert')->where('id = 130')->value('content');   

								if($ranking_agent_ad == '0'){?> 
                              <option  value="0" selected="selected" >当前选择：管理员优先</option>
                                     
                                    <?php } else if($ranking_agent_ad == '1') { ?>
                                 <option  value="1" selected="selected" >当前选择：代理优先</option>
                                     
                                    <?php } else if($ranking_agent_ad == '2') { ?>
                                 <option  value="2" selected="selected" >当前选择：只展示代理广告</option>
                                     
                                      <?php } else if($ranking_agent_ad == '3') { ?>
                                 <option  value="3" selected="selected" >当前选择：屏蔽代理广告展示</option>

                                    <?php }  ?>
                                     
                                     
                                        <option  value="0">管理员优先</option>
                                        <option  value="1">代理优先</option>
                                        <option  value="2">只展示代理广告</option>
                                        <option  value="3">屏蔽代理广告展示</option>
                                    </select>
                                                
            </div>
                                                  </div>  
                                      <br>
                                                
                                                

                                                
                                                
                                                
                                      <h6>代理升级是否参与返佣 ：
                                     <?php  $agent_upgrade_commission  =  db('advert')->where('id = 90')->value('content');   

								if($agent_upgrade_commission == '1'){?> 
                                    
                                 <span class="btn btn-primary btn-xs "><b>  <i class="icon-check-circle  "></i> 返佣 </b></span>
                     
                                    
                                    <?php } else { ?>
                                    
                                    
                                 <span class="btn btn-outline-Danger btn-xs "><b>  <i class="icon-close  "></i> 不返佣 </b></span>
                                    
                                    <?php }  ?>
                                                
                                    </h6>
 					 <br>
                                           <div class="row clearfix">
                                          <div class="col-sm-12">

                                   <select class="form-control"   name="agent_upgrade_commission"  id="agent_upgrade_commission" >
                                     
                              <?php  $agent_upgrade_commission  =  db('advert')->where('id = 90')->value('content');   

								if($agent_upgrade_commission == '1'){?> 
                                    
                              <option  value="1" selected="selected" >当前选择：返佣</option>
                     
                                    
                                    <?php } else { ?>
                                    
                                 <option  value="0" selected="selected" >当前选择：不返佣</option>
                                    
                                    <?php }  ?>
                                     
                                     
                                     
               
                                        <option  value="0">不返佣</option>
                                        <option  value="1">返佣</option>
                                     
                                     
                                     
                                    </select>

                                                        
                                                        
                                                
           			 </div>
                                                  </div>      
                   				  <br>        
                                                
                                                
        
                                                           
                          <h6>代理模式下 下级升级为代理是否奖励邀请人 ：


							 <?php	if(advert('340') == '1'){?> 
                                    
                                 <span class="btn btn-primary btn-xs "><b>奖励</b></span>
                     
                                    
                                    <?php } else {?> 
                     
                                 <span class="btn btn-outline-Danger btn-xs "><b> 不奖励 </b></span>
                                    
                                    <?php }  ?>
                                          <div class="material-switch float-right" style=" margin-top: 10px; ">
                                             <input type="hidden"  name="agent_mode_rebateswitch" value="0">
                                              <input id="agent_mode_rebateswitch" name="agent_mode_rebateswitch" type="checkbox"  value="1"  <?php if(advert('340') ==1){echo 'checked';} ?> >
                                              <label for="agent_mode_rebateswitch" class="bg-Primary" ></label>

                                          </div>      
                                    </h6>
                         <hr>                 
                                                        
                                                
                                                
      
  
                                                           
                          <h6>加载动画 ：
                                      <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-<?php if(advert('344') =='默认'){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('344') =='默认'){echo 'blink';} ?>">
                                            <input type="radio" name="Load_animation" id="Load_animation"  value="默认" <?php if(advert('344') =='默认'){echo 'checked';} ?>>  默认
                                        </label>
                                        <label class="btn btn-<?php if(advert('344') =='小牛'){echo 'Danger';}else{echo 'Primary';} ?>  btn-xs <?php if(advert('344') =='小牛'){echo 'blink';} ?> ">
                                            <input type="radio" name="Load_animation" id="Load_animation"  value="小牛" <?php if(advert('344') =='小牛'){echo 'checked';} ?>> 小牛
                                        </label>
                                        <label class="btn btn-<?php if(advert('344') =='小猫'){echo 'Danger';}else{echo 'Primary';} ?>  btn-xs <?php if(advert('344') =='小猫'){echo 'blink';} ?> ">
                                            <input type="radio" name="Load_animation" id="Load_animation"  value="小猫" <?php if(advert('344') =='小猫'){echo 'checked';} ?>> 小猫
                                        </label>
                                        <label class="btn btn-<?php if(advert('344') =='M'){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('344') =='M'){echo 'blink';} ?>">
                                            <input type="radio" name="Load_animation" id="Load_animation"  value="M" <?php if(advert('344') =='M'){echo 'checked';} ?>>  M
                                        </label>
                                        <label class="btn btn-<?php if(advert('344') =='小可爱'){echo 'Danger';}else{echo 'Primary';} ?>  btn-xs <?php if(advert('344') =='小可爱'){echo 'blink';} ?> ">
                                            <input type="radio" name="Load_animation" id="Load_animation"  value="小可爱" <?php if(advert('344') =='小可爱'){echo 'checked';} ?>> 小可爱
                                        </label>
                                        <label class="btn btn-<?php if(advert('344') =='小星星'){echo 'Danger';}else{echo 'Primary';} ?>  btn-xs <?php if(advert('344') =='小星星'){echo 'blink';} ?> ">
                                            <input type="radio" name="Load_animation" id="Load_animation"  value="小星星" <?php if(advert('344') =='小星星'){echo 'checked';} ?>> 小星星
                                        </label>					
                                        <label class="btn btn-<?php if(advert('344') =='小汽车'){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('344') =='小汽车'){echo 'blink';} ?>">
                                            <input type="radio" name="Load_animation" id="Load_animation"  value="小汽车" <?php if(advert('344') =='小汽车'){echo 'checked';} ?>>  小汽车
                                        </label>
                                        <label class="btn btn-<?php if(advert('344') =='小熊猫'){echo 'Danger';}else{echo 'Primary';} ?>  btn-xs <?php if(advert('344') =='小熊猫'){echo 'blink';} ?> ">
                                            <input type="radio" name="Load_animation" id="Load_animation"  value="小熊猫" <?php if(advert('344') =='小熊猫'){echo 'checked';} ?>> 小熊猫
                                        </label>
										</div>
										 <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-<?php if(advert('344') =='小熊'){echo 'Danger';}else{echo 'Primary';} ?>  btn-xs <?php if(advert('344') =='小熊'){echo 'blink';} ?> ">
                                            <input type="radio" name="Load_animation" id="Load_animation"  value="小熊" <?php if(advert('344') =='小熊'){echo 'checked';} ?>> 小熊
                                        </label>
                                        <label class="btn btn-<?php if(advert('344') =='卡通一'){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('344') =='卡通一'){echo 'blink';} ?>">
                                            <input type="radio" name="Load_animation" id="Load_animation"  value="卡通一" <?php if(advert('344') =='卡通一'){echo 'checked';} ?>>  卡通一
                                        </label>
                                        <label class="btn btn-<?php if(advert('344') =='卡通二'){echo 'Danger';}else{echo 'Primary';} ?>  btn-xs <?php if(advert('344') =='卡通二'){echo 'blink';} ?> ">
                                            <input type="radio" name="Load_animation" id="Load_animation"  value="卡通二" <?php if(advert('344') =='卡通二'){echo 'checked';} ?>> 卡通二
                                        </label>
                                        <label class="btn btn-<?php if(advert('344') =='卡通三'){echo 'Danger';}else{echo 'Primary';} ?>  btn-xs <?php if(advert('344') =='卡通三'){echo 'blink';} ?> ">
                                            <input type="radio" name="Load_animation" id="Load_animation"  value="卡通三" <?php if(advert('344') =='卡通三'){echo 'checked';} ?>> 卡通三
                                        </label>	 
                                        <label class="btn btn-<?php if(advert('344') =='紫圈圈'){echo 'Danger';}else{echo 'Primary';} ?>  btn-xs <?php if(advert('344') =='紫圈圈'){echo 'blink';} ?> ">
                                            <input type="radio" name="Load_animation" id="Load_animation"  value="紫圈圈" <?php if(advert('344') =='紫圈圈'){echo 'checked';} ?>> 紫圈圈
                                        </label>
                                        <label class="btn btn-<?php if(advert('344') =='用户提供_by_云播TV'){echo 'Danger';}else{echo 'Primary';} ?>  btn-xs <?php if(advert('344') =='用户提供_by_云播TV'){echo 'blink';} ?> ">
                                            <input type="radio" name="Load_animation" id="Load_animation"  value="用户提供_by_云播TV" <?php if(advert('344') =='用户提供_by_云播TV'){echo 'checked';} ?>> 云播TV
                                        </label>											
                                    </div>
                            
                            
     
                                    </h6>
                 
                                                                                     
                         <hr> 
                          <h6>特权影视页 返回是否绑定系统返回键 ：


							 <?php	if(advert('343') == '1'){?> 
                                    
                                 <span class="btn btn-primary btn-xs "><b>绑定</b></span>
                     
                                    
                                    <?php } else {?> 
                     
                                 <span class="btn btn-outline-Danger btn-xs "><b> 不绑定 </b></span>
                                    
                                    <?php }  ?>
                                          <div class="material-switch float-right" style=" margin-top: 10px; ">
                                             <input type="hidden"  name="System_Return_Key_Binding" value="0">
                                              <input id="System_Return_Key_Binding" name="System_Return_Key_Binding" type="checkbox"  value="1"  <?php if(advert('343') ==1){echo 'checked';} ?> >
                                              <label for="System_Return_Key_Binding" class="bg-Primary" ></label>

                                          </div>      
                                    </h6>
                 
                                                                                     
                         <hr>                 
                                                        
                                                
                                                            
                          <h6>本地播放器( V1 )底部展示内容  ：
                                      <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-<?php if(advert('345') ==0){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('345') ==0){echo 'blink';} ?>">
                                            <input type="radio" name="player_bottom_show" id="player_bottom_show"  value="0" <?php if(advert('345') ==0){echo 'checked';} ?>>  默认
                                        </label>

    
                                    </div>
                            
                            
     
                                    </h6>
                 
                                                                                     
                         <hr> 
                          <h6>推荐页展示内容   ：
                                      <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-<?php if(advert('346') ==0){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('346') ==0){echo 'blink';} ?>">
                                            <input type="radio" name="frame_two_show" id="frame_two_show"  value="0" <?php if(advert('346') ==0){echo 'checked';} ?>>  默认
                                        </label>

    
                                    </div>
                            
                            
     
                                    </h6>
                 
                                                                                     
                         <hr>  
                         <hr> 
                          <h6>分类页是否展示 写真/伦理 栏目 ：
                                      <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-<?php if(advert('348') ==0){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('348') ==0){echo 'blink';} ?>">
                                            <input type="radio" name="Movies_Category_List_Switch" id="Movies_Category_List_Switch"  value="0" <?php if(advert('348') ==0){echo 'checked';} ?>>  不展示
                                        </label>
                                        <label class="btn btn-<?php if(advert('348') ==1){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('348') ==1){echo 'blink';} ?>">
                                            <input type="radio" name="Movies_Category_List_Switch" id="Movies_Category_List_Switch"  value="1" <?php if(advert('348') ==1){echo 'checked';} ?>>  展示
                                        </label>
    
                                    </div>
                            
                            
     
                                    </h6>
                 
                                                                                     
                         <hr>     						 
                         <hr> 
                          <h6>写真/伦理 栏目是否开放普通会员观看 ：
                                      <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-<?php if(advert('347') ==0){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('347') ==0){echo 'blink';} ?>">
                                            <input type="radio" name="mn_xz_power" id="mn_xz_power"  value="0" <?php if(advert('347') ==0){echo 'checked';} ?>>  不开放
                                        </label>
                                        <label class="btn btn-<?php if(advert('347') ==1){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('347') ==1){echo 'blink';} ?>">
                                            <input type="radio" name="mn_xz_power" id="mn_xz_power"  value="1" <?php if(advert('347') ==1){echo 'checked';} ?>>  开放
                                        </label>
    
                                    </div>
                            
                            
     
                                    </h6>
                 
                                                                                     
                         <hr>         
                         <hr> 
                          <h6>播放器选择 ：
                                      <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-<?php if(advert('349') ==1){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('349') ==1){echo 'blink';} ?>">
                                            <input type="radio" name="Player_selection" id="Player_selection"  value="1" <?php if(advert('349') ==1){echo 'checked';} ?>>  V1
                                        </label>
                                        <label class="btn btn-<?php if(advert('349') ==2){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('349') ==2){echo 'blink';} ?>">
                                            <input type="radio" name="Player_selection" id="Player_selection"  value="2" <?php if(advert('349') ==2){echo 'checked';} ?>>  V2
                                        </label>
    
                                    </div>
                            
                            
     
                                    </h6>
                 
                                                                                     
                         <hr>     
                          <hr> 
                          <h6>特权影视 解析播放 ：
                                      <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-<?php if(advert('350') ==0){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('350') ==0){echo 'blink';} ?>">
                                            <input type="radio" name="Analytical_type" id="Analytical_type"  value="0" <?php if(advert('350') ==0){echo 'checked';} ?>>  默认
                                        </label>
    
                                    </div>
                            
                            
     
                                    </h6>
                 
                                                                                     
                         <hr> 
                       <hr> 
                          <h6>注册时是否强制输入邀请码：
                                      <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-<?php if(advert('351') ==0){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('351') ==0){echo 'blink';} ?>">
                                            <input type="radio" name="Mandatory_Invitation_Code" id="Mandatory_Invitation_Code"  value="0" <?php if(advert('351') ==0){echo 'checked';} ?>>  不强制
                                        </label>
                                        <label class="btn btn-<?php if(advert('351') ==1){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('351') ==1){echo 'blink';} ?>">
                                            <input type="radio" name="Mandatory_Invitation_Code" id="Mandatory_Invitation_Code"  value="1" <?php if(advert('351') ==1){echo 'checked';} ?>>  强制
                                        </label>
    
                                    </div>
                            
                            
     
                                    </h6>
                 
                                                                                     
                         <hr> 
                          <h6>注册时是否显示邀请码输入框 ：
                                      <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-<?php if(advert('352') ==0){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('352') ==0){echo 'blink';} ?>">
                                            <input type="radio" name="Invitation_Code_Show" id="Invitation_Code_Show"  value="0" <?php if(advert('352') ==0){echo 'checked';} ?>>  不显示
                                        </label>
                                        <label class="btn btn-<?php if(advert('352') ==1){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('352') ==1){echo 'blink';} ?>">
                                            <input type="radio" name="Invitation_Code_Show" id="Invitation_Code_Show"  value="1" <?php if(advert('352') ==1){echo 'checked';} ?>>  显示
                                        </label>
    
                                    </div>
                            
                            
     
                                    </h6>
                 
                                                                                     
                         <hr> 
                         <hr> 
                          <h6>邀请码是否自动识别 ：
                                      <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-<?php if(advert('353') ==0){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('353') ==0){echo 'blink';} ?>">
                                            <input type="radio" name="Invitation_Code_Distinguish" id="Invitation_Code_Distinguish"  value="0" <?php if(advert('353') ==0){echo 'checked';} ?>>  否
                                        </label>
                                        <label class="btn btn-<?php if(advert('353') ==1){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('353') ==1){echo 'blink';} ?>">
                                            <input type="radio" name="Invitation_Code_Distinguish" id="Invitation_Code_Distinguish"  value="1" <?php if(advert('353') ==1){echo 'checked';} ?>>  是
                                        </label>
    
                                    </div>
                            
                            
     
                                    </h6>
                 
                                                                                     
                         <hr>
                         <hr> 
                          <h6>注册开放 ：
                                      <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-<?php if(advert('354') ==0){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('354') ==0){echo 'blink';} ?>">
                                            <input type="radio" name="register_switch" id="register_switch"  value="0" <?php if(advert('354') ==0){echo 'checked';} ?>>  开放注册
                                        </label>
                                        <label class="btn btn-<?php if(advert('354') ==1){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('354') ==1){echo 'blink';} ?>">
                                            <input type="radio" name="register_switch" id="register_switch"  value="1" <?php if(advert('354') ==1){echo 'checked';} ?>>  关闭注册
                                        </label>
    
                                    </div>
                            
                            
     
                                    </h6>
                 
                                                                                     
                         <hr> 
						 
                        <hr> 						 
                          <h6>代理模式下 是否允许提现 ：
                                      <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-<?php if(advert('341') ==0){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('341') ==0){echo 'blink';} ?>">
                                            <input type="radio" name="agent_mode_if_cash" id="agent_mode_if_cash"  value="0" <?php if(advert('341') ==0){echo 'checked';} ?>>  允许提现
                                        </label>
                                        <label class="btn btn-<?php if(advert('341') ==1){echo 'Danger';}else{echo 'Primary';} ?>  btn-xs <?php if(advert('341') ==1){echo 'blink';} ?> ">
                                            <input type="radio" name="agent_mode_if_cash" id="agent_mode_if_cash"  value="1" <?php if(advert('341') ==1){echo 'checked';} ?>> 不允许提现
                                        </label>
                                        <label class="btn btn-<?php if(advert('341') ==2){echo 'Danger';}else{echo 'Primary';} ?>  btn-xs <?php if(advert('341') ==2){echo 'blink';} ?> ">
                                            <input type="radio" name="agent_mode_if_cash" id="agent_mode_if_cash"  value="2" <?php if(advert('341') ==2){echo 'checked';} ?>> 仅允许提现佣金
                                        </label>
    
                                    </div>
                            
                            
     
                                    </h6>
                 
                                                                                     
                         <hr>                 
                                                        
                                                
                  
                                                                                          
                                  <h6>邀请归属控制 ：                  
                                                
                                      <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-<?php if(advert('342') ==0){echo 'Danger';}else{echo 'Primary';} ?> btn-xs  <?php if(advert('342') ==0){echo 'blink';} ?>">
                                            <input type="radio" name="invitation_attribution_control" id="invitation_attribution_control"  value="0" <?php if(advert('342') ==0){echo 'checked';} ?>>  邀请人
                                        </label>
                                        <label class="btn btn-<?php if(advert('342') ==1){echo 'Danger';}else{echo 'Primary';} ?>  btn-xs <?php if(advert('342') ==1){echo 'blink';} ?> ">
                                            <input type="radio" name="invitation_attribution_control" id="invitation_attribution_control"  value="1" <?php if(advert('342') ==1){echo 'checked';} ?>> 代理
                                        </label>
    
                                    </div>
                                                         
                                    </h6>
  
                                                
                                                                                     
                         <hr>    
                                                                                                                   
                                          
                                                
                                                
                                                               

                                                
                                                
                                                
                                      <h6>代理升级是否赠送会员 ：
                                     <?php  $agent_upgrade_to_send_members  =  db('advert')->where('id = 91')->value('content');   

								if($agent_upgrade_to_send_members == '1'){?> 
                                    
                                 <span class="btn btn-primary btn-xs "><b>  <i class="icon-check-circle  "></i> 赠送 </b></span>
                     
                                    
                                    <?php } else { ?>
                                    
                                    
                                 <span class="btn btn-outline-Danger btn-xs "><b>  <i class="icon-close  "></i> 不赠送 </b></span>
                                    
                                    <?php }  ?>
                                                
                                    </h6>
 					 <br>
                                           <div class="row clearfix">
                                          <div class="col-sm-12">

                                   <select class="form-control"   name="agent_upgrade_to_send_members"  id="agent_upgrade_to_send_members" >
                                     
                              <?php  $agent_upgrade_to_send_members  =  db('advert')->where('id = 91')->value('content');   

								if($agent_upgrade_to_send_members == '1'){?> 
                                    
                              <option  value="1" selected="selected" >当前选择：赠送</option>
                     
                                    
                                    <?php } else { ?>
                                    
                                    
                                 <option  value="0" selected="selected" >当前选择：不赠送</option>
                                    
                                    <?php }  ?>
                                     
                                     
                                     
               
                                        <option  value="0">不赠送</option>
                                        <option  value="1">赠送</option>
                                     
                                     
                                     
                                    </select>

                                                        
                                                        
                                                
           			 </div>
                                                  </div>      
                   				  <br>                                          
                                                
                                                
       
                                                
                                                 
                                                               

                                                
                                                
                                                
                                      <h6>邀请工作模式 ：
                                     <?php  $Invitation_mode  =  db('advert')->where('id = 116')->value('content');   

								if($Invitation_mode == '2'){?> 
                                    
                                 <span class="btn btn-Success btn-xs "><b>  <i class="icon-beenhere "></i> 分离后台 + 邀请码 + 自动识别 </b></span>
                     
                                    <?php } else if($Invitation_mode == '1'){?> 
                                    
                                        
                                 <span class="btn btn-primary btn-xs "><b>  <i class="icon-confirmation_number  "></i> 邀请码 + 自动识别 </b></span>
                                    
                                    <?php } else { ?>
                                    
                                    
                                 <span class="btn btn-Danger btn-xs "><b>  <i class="icon-heart  "></i> 经典升级版 </b></span>
                                    
                                    <?php }  ?>
                                                
                                    </h6>
 					 <br>
                                           <div class="row clearfix">
                                          <div class="col-sm-12">

                                   <select class="form-control"   name="Invitation_mode"  id="Invitation_mode" >
                                     
                              <?php  $Invitation_mode  =  db('advert')->where('id = 116')->value('content');   

								if($Invitation_mode == '2'){?> 
                                    
                              <option  value="2" selected="selected" >当前选择：分离后台 + 邀请码 + 自动识别</option>
                     
                                    
                                    <?php } else if($Invitation_mode == '1'){?> 
                                    
                                    
                                 <option  value="1" selected="selected" >当前选择：邀请码 + 自动识别</option>
                                    
                                    <?php } else { ?>
                                    
                                    
                                 <option  value="0" selected="selected" >当前选择：经典升级版</option>
                                    
                                    <?php }  ?>
                                     
                                     
                                     
               
                                        <option  value="0">经典升级版</option>
                                        <option  value="1">邀请码 + 自动识别</option>
                                       
                                     
                                     
                                     
                                    </select>

                                                        
                                                        
                                                
           			 </div>
                                                  </div>      
                   				  <br>                                                     
                                       
                                     <?php  $Invitation_mode  =  db('advert')->where('id = 116')->value('content');   

								if($Invitation_mode == '2'){?>             
                                                                                                           
                                     <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float ">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('117'); ?>" name="Invitation_Domain_separation" >
                                                    <label class="form-label"><span style=" color: #7dc855; ">分离系统域名</span></label>
                                                </div>
                                            </div>
                                        </div>
                            
                                                
          							 </div>                                           
                                         
                                 
                                                
                                     <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float ">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('118'); ?>" name="Invitation_Key_separation" >
                                                    <label class="form-label"><span style=" color: #7dc855; ">分离系统KEY</span></label>
                                                </div>
                                            </div>
                                        </div>
                            
                                                
          							 </div>                 
                                                
                                                
                                                
                                       <?php }  ?>              
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                      <h6>会员中心投屏助手按钮是否显示 ：
                                     <?php  $touping_switch  =  db('advert')->where('id = 112')->value('content');   

								if($touping_switch == '1'){?> 
                                    
                                 <span class="btn btn-primary btn-xs "><b>  <i class="icon-check-circle  "></i> 显示 </b></span>
                     
                                    
                                    <?php } else { ?>
                                    
                                    
                                 <span class="btn btn-outline-Danger btn-xs "><b>  <i class="icon-close  "></i> 不显示 </b></span>
                                    
                                    <?php }  ?>
                                                
                                    </h6>
 					 <br>
                                           <div class="row clearfix">
                                          <div class="col-sm-12">

                                   <select class="form-control"   name="touping_switch"  id="touping_switch" >
                                     
                              <?php  $touping_switch  =  db('advert')->where('id = 112')->value('content');   

								if($touping_switch == '1'){?> 
                                    
                              <option  value="1" selected="selected" >当前选择：显示</option>
                     
                                    
                                    <?php } else { ?>
                                    
                                    
                                 <option  value="0" selected="selected" >当前选择：不显示</option>
                                    
                                    <?php }  ?>
                                     
                                     
                                     
               
                                        <option  value="0">不显示</option>
                                        <option  value="1">显示</option>
                                     
                                     
                                     
                                    </select>

                                                        
                                                        
                                                
           			 </div>
                                                  </div>      
                   				  <br>                                          
                                                                                       
                                                
                                                
                                                
                                                            
                                                               

                                                
                                                
                                                
                                      <h6>会员过期语音提示 ：
                                     <?php  $Vip_Voice_cues  =  db('advert')->where('id = 172')->value('content');   

								if($Vip_Voice_cues == '1'){?> 
                                    
                                 <span class="btn btn-primary btn-xs "><b>提示</b></span>
                     
                                    <?php } else if($Vip_Voice_cues == '0'){?> 
                                    
                                        
                                 <span class="btn btn-outline-Danger btn-xs "><b> 关闭 </b></span>
                                    
                                    
                                    <?php }  ?>
                                                
                                    </h6>
 					 <br>
                                           <div class="row clearfix">
                                          <div class="col-sm-12">

                                   <select class="form-control"   name="Vip_Voice_cues"  id="Vip_Voice_cues" >
                                     
                              <?php  $Vip_Voice_cues  =  db('advert')->where('id = 172')->value('content');   

								if($Vip_Voice_cues == '1'){?> 
                                    
                              <option  value="1" selected="selected" >当前选择：提示</option>
                     
                                    
                                    <?php } else if($Vip_Voice_cues == '0'){?> 
                                    
                                    
                                 <option  value="0" selected="selected" >当前选择：关闭 </option>

                                    <?php }  ?>
                                     
                                     
                                     
               
                                        <option  value="0"> 关闭</option>
                                        <option  value="1">提示</option>
                                     
                                     
                                     
                                    </select>

                                                        
                                                        
                                                
           			 </div>
                                                  </div>      
                   				  <br>                                                     
                                                                                   
                                                 
                                                               

                                                
                                                
                                                
                                      <h6>图片存储平台 ：
                                     <?php  $Picture_upload_API  =  db('advert')->where('id = 120')->value('content');   

								if($Picture_upload_API == '1'){?> 
                                    
                                 <span class="btn btn-primary btn-xs "><b>贴图库</b></span>
                     
                                    <?php } else if($Picture_upload_API == '0'){?> 
                                    
                                        
                                 <span class="btn btn-primary btn-xs "><b> SMMS </b></span>
                                    
                                    
                                    <?php }  ?>
                                                
                                    </h6>
 					 <br>
                                           <div class="row clearfix">
                                          <div class="col-sm-12">

                                   <select class="form-control"   name="Picture_upload_API"  id="Picture_upload_API" >
                                     
                              <?php  $Picture_upload_API  =  db('advert')->where('id = 120')->value('content');   

								if($Picture_upload_API == '1'){?> 
                                    
                              <option  value="1" selected="selected" >当前选择：贴图库 - 付费</option>
                     
                                    
                                    <?php } else if($Picture_upload_API == '0'){?> 
                                    
                                    
                                 <option  value="0" selected="selected" >当前选择：SMMS - 免费 </option>

                                    <?php }  ?>
                                     
                                     
                                     
               
                                        <option  value="0"> SMMS - 免费 </option>
                                        <option  value="1">贴图库 - 付费</option>
                                     
                                     
                                     
                                    </select>

                                                        
                                                        
                                                
           			 </div>
                                                  </div>      
                   				  <br>                                                     
                                       
                                     <?php  $Picture_upload_API  =  db('advert')->where('id = 120')->value('content');   

								if($Picture_upload_API == '1'){?>             
                                                                                                           


                                                
                                   <div class="row clearfix">
                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('119'); ?>" name="imgapi_Token" >
                                                    <label class="form-label">贴图库 Token</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                          
                                                
                                                
 
                                       <?php }  ?>              
                                                
                                                
                                                
                                                                                         
                                                
                                                
                                                
                                                
                                                
                                                <br>    
                                                
                                                
                                                
                                                
                                                <br>                                        
                                                
                                                

                                             <h4>开屏图片（广告）设置</h4><hr><br>                                     
                                                
                                     <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('355'); ?>" name="launchImageAd" >
                                                    <label class="form-label">图片地址（支持GIF） </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                                
                                          <br>
                                     <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('356'); ?>" name="launchImageAd_url" >
                                                    <label class="form-label">跳转地址（支持外链、视频资源、内部跳转） </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                                
                                          <br>
                                     <div class="row clearfix">

                                        <div class="col-sm-3">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" class="form-control"  value="<?php echo advert('357'); ?>" name="launchImageAd_time" >
                                                    <label class="form-label">显示时间（毫秒） </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>      
                                                
                                                
                         <h6>是否允许跳过 ：


							 <?php	if(advert('358') == '1'){?> 
                                    
                                 <span class="btn btn-primary btn-xs "><b>允许跳过</b></span>
                     
                                    
                                    <?php } else {?> 
                     
                                 <span class="btn btn-outline-Danger btn-xs "><b> 不允许跳过 </b></span>
                                    
                                    <?php }  ?>
                                          <div class="material-switch float-right" style=" margin-top: 10px; ">
                                             <input type="hidden"  name="launchImageAd_skip" value="0">
                                              <input id="launchImageAd_skip" name="launchImageAd_skip" type="checkbox"  value="1"  <?php if(advert('358') ==1){echo 'checked';} ?> >
                                              <label for="launchImageAd_skip" class="bg-Primary" ></label>

                                          </div>      
                                    </h6>
                         <hr>                          

                       
                   
                                                
                                             
                                                <br>     <br>    <br>   
                                           <h4>基础信息</h4><hr><br>            
                                                
                                   <div class="row clearfix">
                                        <div class="col-sm-6">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('21'); ?>" name="app_name" >
                                                    <label class="form-label">影视名称</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('30'); ?>" name="domain_name" >
                                                    <label class="form-label">当前使用域名</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                    
                                                                               
                                                
                                                              
                                          <br> 

                                         
                                   <div class="row clearfix">
                                        <div class="col-sm-6">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" class="form-control"  value="<?php echo advert('2'); ?>" name="down" >
                                                    <label class="form-label">签到积分随机赠送范围 最低</label>
                                                </div>
                                            </div>
                                        </div>
                                     
                                     
                                        <div class="col-sm-6">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" class="form-control"  value="<?php echo advert('3'); ?>" name="pass" >
                                                    <label class="form-label">签到积分随机赠送范围 最多</label>
                                                </div>
                                            </div>
                                        </div>
                                     
                                    </div>                    
                                                      
           
                                          <br> 

                                                
                                         
                                   <div class="row clearfix">
                                        <div class="col-sm-4">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" class="form-control"  value="<?php echo advert('4'); ?>" name="sign" >
                                                    <label class="form-label">多少积分兑换一天VIP</label>
                                                </div>
                                            </div>
                                        </div>
     
                                     
                                        <div class="col-sm-4">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" class="form-control"  value="<?php echo advert('5'); ?>" name="time" >
                                                    <label class="form-label">试用时间(分钟)</label>
                                                </div>
                                            </div>
                                        </div>                                  
                                                  
   
                                        <div class="col-sm-4">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" class="form-control"  value="<?php echo advert('34'); ?>" name="Invitation_points" >
                                                    <label class="form-label">邀请赠送积分 </label>
                                                </div>
                                            </div>
                                        </div>
                                                                      
                                     
                                    </div>                    
                                                      
           
                                          <br> 
                                               

                                                
                                                
                                                
                                   <div class="row clearfix">

                                     
    
                                        <div class="col-sm-4">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" class="form-control"  value="<?php echo advert('80'); ?>" name="upload_headimg_integral" >
                                                    <label class="form-label">上传头像赠送积分 </label>
                                                </div>
                                            </div>
                                        </div>
                                                                      
                                     
                                     
    
                                        <div class="col-sm-4">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" class="form-control"  value="<?php echo advert('81'); ?>" name="set_nickname_integral" >
                                                    <label class="form-label">设置昵称赠送积分 </label>
                                                </div>
                                            </div>
                                        </div>
                                                                      
                                     
     
                                        <div class="col-sm-4">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" class="form-control"  value="<?php echo advert('82'); ?>" name="upload_alipay_code_integral" >
                                                    <label class="form-label">上传支付宝收款码赠送积分 </label>
                                                </div>
                                            </div>
                                        </div>
                                                                                  
                                     
                                    </div>   
                                                
                                                

                      
                                          <br> 
                                                
                                                
                                                
                                                       
                                                
                                   <div class="row clearfix">

                                     
    
                                        <div class="col-sm-4">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" class="form-control"  value="<?php echo advert('83'); ?>" name="wechat_login_code_integral" >
                                                    <label class="form-label">微信快捷登录赠送积分 </label>
                                                </div>
                                            </div>
                                        </div>
                                                                      
                                     

    
                                        <div class="col-sm-4">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" class="form-control"  value="<?php echo advert('170'); ?>" name="Upload_Picture_Size" >
                                                    <label class="form-label">头像上传图片大小限制 （Bytes）</label>
                                                </div>
                                            </div>
                                        </div>
                                                                      
                                     

                                                                                  
                                     
                                    </div>   
                                                
                                                

                      
                                          <br> 
                                                
                                                
                                                
                                                                                         
                                                
                                                
         
                                                
                                   <div class="row clearfix">


                                     
                                     
                                        <div class="col-sm-4">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" class="form-control"  value="<?php echo advert('45'); ?>" name="index_video_num" >
                                                    <label class="form-label">首页推荐影视调用数量</label>
                                                </div>
                                            </div>
                                        </div>
                                    
                                     
    
                                        <div class="col-sm-4">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" class="form-control"  value="<?php echo advert('46'); ?>" name="look_record_num" >
                                                    <label class="form-label">观看记录保留数量</label>
                                                </div>
                                            </div>
                                        </div>
                                                                      

    
                                        <div class="col-sm-4">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" class="form-control"  value="<?php echo advert('92'); ?>" name="agent_upgrade_time" >
                                                    <label class="form-label">代理升级赠送会员时间(天)</label>
                                                </div>
                                            </div>
                                        </div>
                                                                      
                                     

                                                                                  
                                     
                                    </div>   
                                                
                                                

                      
                                          <br>                                        
                                                
                                                
                                                
                                                
                                                
                                                
                                   <div class="row clearfix">

                                                                               
                                                
                                        <div class="col-sm-3">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('20'); ?>" name="default_password" >
                                                    <label class="form-label">默认密码</label>
                                                </div>
                                            </div>
                                        </div>
                                     
                                     
                                     
                                        <div class="col-sm-3">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('42'); ?>" name="app_secret_key" >
                                                    <label class="form-label">私人视频KEY </label>
                                                </div>
                                            </div>
                                        </div>
                                                   
                                     
          							 </div>                                           
                                              

                                                
                                                          
                                                
                                                <br>                                        
                                                        

                                                  
                                   <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('121'); ?>" name="tencent_x5" >
                                                    <label class="form-label">VIP影视区域调用腾讯X5 域名 </label>
                                                </div>
                                            </div>
                                        </div>
                                                   
                                     
          							 </div>                                           
                                              

                                                
                                                          
                                                
                                                <br>     <br>    <br>                                               
                                                
                                             <h4>激活码设置</h4><hr><br>                                     
                                                
                                   
                                                    <div class="row clearfix">

                                        <div class="col-sm-3">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('28'); ?>" name="kami_prefix" >
                                                    <label class="form-label">激活码前缀</label>
                                                </div>
                                            </div>
                                        </div>
                                                      
                                        <div class="col-sm-3">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" class="form-control"  value="<?php echo advert('29'); ?>" name="kami_length" >
                                                    <label class="form-label">激活码长度</label>
                                                </div>
                                            </div>
                                        </div>
                                                                               
                                                
                                        <div class="col-sm-3">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('405'); ?>" name="Activation_code_upper_limit" >
                                                    <label class="form-label">代理生成激活码上限（每类）</label>
                                                </div>
                                            </div>
                                        </div>
                                     
                                     

                                                   
                                     
          							 </div>                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
  
                                                                                               
                         <hr>      <br>     <br>                                               
                                                
                                             <h4>邮箱发件（SMTP）设置</h4><hr><br>                                     
                                                
                                     <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('400'); ?>" name="Simple_Mail_Transfer_Protocol_server" >
                                                    <label class="form-label">SMTP发件服务器地址 </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                                
                                          <br>
                                     <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('401'); ?>" name="Simple_Mail_Transfer_Protocol_port" >
                                                    <label class="form-label">端口号 </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                              
                                                
                                          <br>

                                     <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('402'); ?>" name="Simple_Mail_Transfer_Protocol_username" >
                                                    <label class="form-label">账户 </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                              
                                                
                                          <br>
                                     <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('403'); ?>" name="Simple_Mail_Transfer_Protocol_password" >
                                                    <label class="form-label">密码/授权码 </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                                
                                          <br>
                                     <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('404'); ?>" name="Simple_Mail_Transfer_Protocol_name" >
                                                    <label class="form-label">发件人名称 </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                           <br>    <br>  <br>                                                        
                                                
                                            
                                           <h4>页面内容设置</h4><hr><br>                                     
                                                
                                     <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('44'); ?>" name="agency_notice" >
                                                    <label class="form-label">代理公告 </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                                
                                          <br> 
                                                
                                                                                                 
                                     <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('22'); ?>" name="app_ios_down" >
                                                    <label class="form-label">IOS 下载地址 分发地址 </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                          <br> 
                                                                                              
                                     
                                                
                                                                                                 
                                     <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('23'); ?>" name="app_android_down" >
                                                    <label class="form-label">Android 下载地址 分发地址 </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                          <br> 
                                                                                                 
                                     <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('24'); ?>" name="app_android_apk_down" >
                                                    <label class="form-label">Android 下载地址 APK地址( 优先级高于分发地址 ) </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                          <br> 
                                                                                              
                                     
                                                                                                  
                                     <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('31'); ?>" name="app_index_content" >
                                                    <label class="form-label">PC端首页简介 </label>
                                                </div>
                                            </div>
                                        </div>

          							 </div>                                           
                                              
                                          <br> 
                                                
                                                
                                      <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('32'); ?>" name="app_index_img" >
                                                    <label class="form-label">PC端首页右侧图片 </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                          <br>                                                                                                    

                                      <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('33'); ?>" name="wap_index_img" >
                                                    <label class="form-label">移动端首页图片 </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                          <br>                                                                                                    

                                                
                                                
                                                
      
                                                
                                        <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('114'); ?>" name="Ryan_logo" >
                                                    <label class="form-label">LOGO </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                          <br>                                                                                                    

                                                
                                                                                              
                                                
                                        <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('115'); ?>" name="Ryan_login_picture" >
                                                    <label class="form-label">登录页右侧大图 </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                          <br>                                                                                                    

                                                
                                                                                              
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                        <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('40'); ?>" name="app_share_help" >
                                                    <label class="form-label">APP 邀请页帮助/介绍信息 </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                          <br>                                                                                                    
                                              

                                                                                                
                                                
                                        <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('41'); ?>" name="app_Invitation_slogans" >
                                                    <label class="form-label">APP分享 邀请广告词 </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                          <br>                                                                                                    
                                              
                                                
                                                
                                                
            
                                        <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('176'); ?>" name="share_Poster_template_one" >
                                                    <label class="form-label">APP分享 海报模板-1 </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                          <br>                                        
                                                
                    
            
                                        <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('177'); ?>" name="share_Poster_template_two" >
                                                    <label class="form-label">APP分享 海报模板-2 </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                          <br>                                      
                                                
                    
                                                
            
                                        <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('178'); ?>" name="share_Poster_template_three" >
                                                    <label class="form-label">APP分享 海报模板-3 </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                          <br>          
                                                
                                                
                                                
                                        <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('93'); ?>" name="agent_introduction_picture" >
                                                    <label class="form-label">代理升级页面介绍图片 </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                          <br>                                                                                                    
                                              

                                                
                                                
                                        <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('111'); ?>" name="agent_upgrade_tips" >
                                                    <label class="form-label">会员中心无代理权限弹窗提示内容 </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                          <br>   
                                                
                                        <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('113'); ?>" name="touping_picture" >
                                                    <label class="form-label">会员中心 投屏助手介绍内容图片 </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                          <br>                                                                                                    
                                                                                            
   
                                                                                                
                                                
                                        <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('43'); ?>" name="app_secret_content" >
                                                    <label class="form-label">私人视频公告 </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                          <br>                                                                                                    
                                          <div class="row clearfix">

                                        <div class="col-sm-12">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('359'); ?>" name="Hot_search" >
                                                    <label class="form-label">热门搜索词推荐 </label>
                                                </div>
                                            </div>
                                        </div>

                                                                               
                                                
          							 </div>                                           
                                              
                                          <br> 

                                                
                                                
                                                
                                              </div>
                                              <!-- #END# Input -->
                                              <button type="submit" class="btn btn-primary">确认提交</button>
                  								<button type="reset" class="btn btn-white">重置</button>
                                          </form>
                                        
                                      </div>
                                    
                                    

                                    


                                  </div>
                              </div>
                              <div class="col-md-5">
                                  <hr>
                                  <h3>设置帮助</h3>
                                  <p>不懂先仔细阅读 理解明白 在进行设置！</p>
                                  <hr>
                                  <a class="btn btn-xs btn-primary">APP工作模式</a><br><br>
                                
                                <b>返佣模式：</b>用户使用激活码会对邀请人按设定比例返佣<br>
                                当前模式中代理不能生成激活码、不能进行下级用户管理
                               
                                <br><br>
                               <b> 代理模式：</b>代理可以低价拿卡，自定义购卡地址
                                
                                <br> <br>
                                <span class="btn btn-outline-Danger btn-xs "><b> 警告：请勿来回切换！以免引起的数据错误！ </b></span>
                                
                                
                                <br>
                                  
                                  <hr>
                                
                                  <a class="btn btn-xs btn-primary">返佣模式下 原代理生成激活码状态 </a><br><br>  
                                由于原是代理模式，升级为返佣模式后原代理遗留激活码怎么处理，自己选择！<br>
                                默认：<br>
                                代理生成的激活码可用，并参与返佣<br><br>
                                失效：<br>
                                代理在 代理模式 下生成的激活码在返佣模式下将不可用<br>
                              
                      
        
                                
                                   <hr>
                                
                                  <a class="btn btn-xs btn-primary">快捷登录是否参与设备判断</a><br><br>
                                如参与上面的设备判断：<br>
                                则该设备已经注册过账户 则不允许快捷登录<br><br>
                                如上方<span class="text-light-blue"> 注册设备判断 </span>设置为 <span class="badge badge-danger">关闭</span> 则此处设置无效<br>
                      
        
                                                               
                                                             
                                
                                  <hr>
                                
                                  <a class="btn btn-xs btn-primary">注册设备判断</a><br><br>
                                开启后：<br>
                                1.一台设备只能注册一个账户<br>
                                2.邀请页面激活的账户如果首次在未注册过账户的设备登录则绑定该设备，并赠送邀请人设定的积分；如是在已注册的设备登录则禁止登录，也不赠送邀请人积分<br>
                      
        
                                
                                   <hr>
                                
                                  <a class="btn btn-xs btn-primary">快捷登录是否参与设备判断</a><br><br>
                                如参与上面的设备判断：<br>
                                则该设备已经注册过账户 则不允许快捷登录<br><br>
                                如上方<span class="text-light-blue"> 注册设备判断 </span>设置为 <span class="badge badge-danger">关闭</span> 则此处设置无效<br>
                      
        
                                                               
                                
                                
                                
                                
                                  <hr>
                                
                                  <a class="btn btn-xs btn-primary">VIP影视区主题</a><br><br>
                                APP首页VIP影视区域的主题样式<br>
                                目前内置：春、夏、秋、冬 和 新春 5种，更多样式后期更新…<br>
                                自动：根据当前季节自动选择<br>

                                
                                
                                  <hr>
                                
                                  <a class="btn btn-xs btn-primary">代理广告优先级</a><br><br>
                                1.管理员优先：管理员的广告排前展示<br>
                                2.代理优先：代理广告排前展示<br>
                                3.只展示代理：只显示代理设置的广告，不显示管理员<br>
                                4.屏蔽代理：只显示管理员<br>

                                       
                                
                                 
                                  <hr>
                                
                                  <a class="btn btn-xs btn-primary">代理升级是否参与返佣</a><br><br>
                                逻辑：<br>  
                                1.APP工作模式为返佣 and 代理升级参与返佣 则 <span class="text-light-blue">返佣</span> <br>
                                2.APP工作模式为返佣 and 代理升级不参与返佣 则   <span class="text-Danger">不返佣</span>   <br>
                                3.APP工作模式为代理  则  <span class="text-Danger">不返佣</span>   <br>
                              
                                
 
                                  
                                  <hr>
                                
                                  <a class="btn btn-xs btn-primary">代理升级是否赠送会员</a><br><br>
                                用户使用激活码升级代理时是否赠送会员时间<br>  
                                和 代理升级赠送会员时间（天为单位） 配合使用 <br>
                              
                                                               
                                    
                                  <hr>
                                
                                  <a class="btn btn-xs btn-primary">邀请工作模式</a><br><br>
                                <b>经典升级版：</b>邀请时填写手机号绑定归属（缺点：快捷登录无法绑定归属）<br>
                                新增：赠送会员时间调用、邀请人显示
                               
                                <br><br>
                               <b> 邀请码 + 自动识别：</b>自动识别归属 ( 包括快捷登录 )
                                
                                <br><br>
                               <b> 分离后台 + 邀请码 + 自动识别 ：</b>自动识别归属 ( 包括快捷登录 ) 分离后台<br>
                                可一定程度隐藏后台真实地址降低安全风险 和 提高灵活性（ 微信封域名等情况 ）
                                
                                <br> <br>
                                <span class="badge badge-success pink"><b> 提示：需要配合分离系统使用</b> - <span class="badge badge-light" >（付费项目）</span> </span>

                                
                                <br> <br>
                                    <span class="badge badge-success pink"><b> 分离系统KEY： 此处填写的KEY需和分离系统的KEY一致 </b></span>
                                
                                    
                                  <hr>
                                
                                
    
                                  <a class="btn btn-xs btn-primary">图片存储平台</a><br><br>
                                <b>贴图库：</b>收费（免费版最多能上传1000张）<br>
                                贴图库Token：上传方式选择“本地上传” <a href="http://www.tietuku.com/manager/createtoken" target="_blank"><span class="badge badge-success"><b> 快速生成Token </b></span></a>
                               
                                <br><br>
                               <b> SMMS：</b>免费 ( 保留随时删除图片并举报上传违规图片者的权利 )
                                
                                <br>
                                  <hr>
                                
                                
                                
                                                            
                                
                                
                                  <a class="btn btn-xs btn-primary">试用时间</a><br><br>
                                给新用户赠送的体验时间 以分钟为单位<br>  
                              
                                                      
                                    
                                  <hr>
                                
                                  <a class="btn btn-xs btn-primary">邀请赠送积分</a><br><br>
                                给邀请人赠送的积分（ 赠送规则和<span class="text-light-blue">注册设备判断</span>联动 ）<br>  
                              
                                                                   
                               <hr>
                                
                                  <a class="btn btn-xs btn-primary">微信快捷登录赠送积分</a><br><br>
                                微信快捷登录不参与<span class="text-light-blue">首次上传头像</span> 和 <span class="text-light-blue">设置昵称</span>赠送积分任务，需单独设置<br>  
                              
                                                                   
                               <hr>
                                
                                  <a class="btn btn-xs btn-primary">首页推荐影视调用数量</a><br><br>
                                APP首页推荐影视的调用数量 建议3的倍数 留空调用全部<br>  
                                
                                <hr>
                                
                                  <a class="btn btn-xs btn-primary">观看记录保留数量 </a><br><br>
                                会员中心 -> 观看记录 调用的记录数量<br>  
                                 服务器好请随意 留空调用全部<br> 
                              
                                <hr>
                                
                                  <a class="btn btn-xs btn-primary">私人视频KEY </a><br><br>
                                私人视频 唯一入口<br> 
                                在搜索框输入指定KEY则打开私人视频 <br> 
                                                                   
                                             
                                <hr>
                                
                                  <a class="btn btn-xs btn-primary">VIP影视区域调用腾讯X5 域名 </a><br><br>
                                如想在VIP影视区域添加自建影视站请在此输入相应域名<br> 
                                多个域名请用半角逗号 [ , ] 隔开 <br> 
                                                                   
                                                               
                                 <hr>
                                  <a class="btn btn-xs btn-primary">头像上传图片大小限制 </a><br><br>
                                单位：Bytes<br> 
                                1KB = 1024Bytes <br> <br> 
                                
                                建议设置不要过高,部分上传过大图片容易造成崩溃闪退.<br> 
                                推荐 100KB左右 也就是 10240 Bytes<br> 
                                                                   
                                                               
                                 <hr>
                                
                                  <a class="btn btn-xs btn-primary">卡密前缀 </a><br><br>
                                生成激活码的前缀<br> 
                                长度不能大于 5 且不能为中文<br> 
                                                               
                                 <hr>
                                
                                  <a class="btn btn-xs btn-primary">卡密长度 </a><br><br>
                                生成激活码的总长度<br> 
                                不能大于 21 且 卡密长度  减  卡密前缀长度 不能小于6 <br> 
                                                                   

                                 <hr>
                                
                                  <a class="btn btn-xs btn-primary">默认密码 </a><br><br>
                                邀请用户激活账户时设置的默认密码<br>
                                                                   
                                    
                                 <hr>
                                
                                  <a class="btn btn-xs btn-primary">会员中心无代理权限弹窗提示 </a><br><br>
                                非代理用户点击会员中心 代理管理 按钮时弹窗中的文字内容<br>
                                                                   
                                 <hr>
                                
                                  <a class="btn btn-xs btn-primary">投屏助手介绍内容图片 </a><br><br>
                                留空调用默认图片<br>
                                                                   
                                               
                                    
                                
                                
                                
                                  <h4 class="mt-5">未完待续……</h4>
                                  <hr>
								
                                  <a class="btn btn-outline-primary btn-xs">Perfect Network Service</a>
                                
                              </div>
                          </div>
                      </div>
                  </div>						
            </div>
            <!--Yesterday Tab Start-->
            <!--Yesterday Tab Start-->
            <div class="tab-pane animated fadeInUpShort go" id="v-pills-3">
<div class="animatedParent animateOnce">
                      <div class="container-fluid my-3">
                          <div class="row">
                              <div class="col-md-7">
                                  <div class="card">
                                      <div class="card-body b-b">
                                          <h4>解析接口</h4><hr><br>
                                          <form class="form-material"  role="form" id="form1" method="post" action="<?php echo url('index/jxjiekou'); ?>">
                                              <!-- Input -->
                                              <div class="body">

                                                
                            <div class="row clearfix">
                                        <div class="col-sm-8">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('8'); ?>" name="geng1" >
                                                    <label class="form-label">解析接口 壹（ 默认调用 ）</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('208'); ?>" name="geng1_name" >
                                                    <label class="form-label">解析接口 壹 名称</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                    
                                                
                                                
                                                
                                <div class="row clearfix">
                                        <div class="col-sm-8">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('9'); ?>" name="geng2" >
                                                    <label class="form-label">解析接口 贰</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('209'); ?>" name="geng2_name" >
                                                    <label class="form-label">解析接口 贰 名称</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                    
                                              
                                                
                                                
                                                
                                <div class="row clearfix">
                                        <div class="col-sm-8">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('10'); ?>" name="geng3" >
                                                    <label class="form-label">解析接口 叁 </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('210'); ?>" name="geng3_name" >
                                                    <label class="form-label">解析接口 叁 名称</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                    
                                              
                                                
                                    <div class="row clearfix">
                                        <div class="col-sm-8">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('11'); ?>" name="geng4" >
                                                    <label class="form-label">解析接口 肆 </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('211'); ?>" name="geng4_name" >
                                                    <label class="form-label">解析接口 肆 名称</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                    
                                              
                                                
                                                <div class="row clearfix">
                                        <div class="col-sm-8">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('12'); ?>" name="geng5" >
                                                    <label class="form-label">解析接口 伍 </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('212'); ?>" name="geng5_name" >
                                                    <label class="form-label">解析接口 伍 名称</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>     
                                                
                                                
                                                <div class="row clearfix">
                                        <div class="col-sm-8">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('13'); ?>" name="geng6" >
                                                    <label class="form-label">解析接口 陆</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('213'); ?>" name="geng6_name" >
                                                    <label class="form-label">解析接口 陆 名称</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>     
                                                
                                                
                                                <div class="row clearfix">
                                        <div class="col-sm-8">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('14'); ?>" name="geng7" >
                                                    <label class="form-label">解析接口 柒 </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('214'); ?>" name="geng7_name" >
                                                    <label class="form-label">解析接口 柒 名称</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>     
                                                
                                                
                                        <div class="row clearfix">
                                        <div class="col-sm-8">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('15'); ?>" name="geng8" >
                                                    <label class="form-label">解析接口 捌 </label>
                                                </div>
                                            </div>
                                        </div>
                                          
                                        <div class="col-sm-3">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"   value="<?php echo advert('215'); ?>" name="geng8_name" >
                                                    <label class="form-label">解析接口 捌 名称</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>     
                                                
                                                
                                                <div class="row clearfix">
                                        <div class="col-sm-8">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('16'); ?>" name="geng9" >
                                                    <label class="form-label">解析接口 玖 </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
											<div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  value="<?php echo advert('216'); ?>" name="geng9_name" >
                                                    <label class="form-label">解析接口 玖 名称</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>     
                                                
                
                                            </div>
                                              <!-- #END# Input -->
                                              <button type="submit" class="btn btn-primary">确认提交</button>
                                          </form>
                                        
                                      </div>
                                    
                                    

                                    


                                  </div>
                              </div>
                              <div class="col-md-5">
                                  <hr>
                                
                                  <h3>接口帮助</h3>	
                                  <p>默认调用第一个 建议填写稳定无广告接口</p>
                                  <p>接口名称会在APP播放页线路切换显示</p>
                                
                                  <hr>
                                  <a href="#" class="btn btn-xs btn-primary">推荐接口</a><br><br>
                                
                                暂无
                                
                                
                                
                                  <h4 class="mt-5">未完待续……</h4>
                                  <hr>
								
                                  <a class="btn btn-outline-primary btn-xs">Perfect Network Service</a>
                                
                              </div>
                          </div>
                      </div>
                  </div>
            </div>
            <!--Yesterday Tab Start-->
        </div>
    </div>
</div>





<?php echo !empty($code) && $code=='1'?'<div class="col-md-6" id="alert" style="position:fixed;right:0px;bottom:0px;  max-width: 350px;  width: 100%;">
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>

        <strong>恭喜 !</strong> 修改成功.
    </div>
</div>

':''; ?>
<script>
    setTimeout("$('#alert').fadeOut(1000)",2000)
</script>

<script>
var number=9; //定义条目数

function LMYC() {
var lbmc;
    for (i=1;i<=number;i++) {
        lbmc = eval('LM' + i);
        lbmc.style.display = 'none';
    }
}
 
function ShowFLT(i) {
    lbmc = eval('LM' + i);
    if (lbmc.style.display == 'none') {
        LMYC();
        lbmc.style.display = '';
    }
    else {
        lbmc.style.display = 'none';
    }
}
</script>

<script type="text/javascript">
var __aObj=document.getElementsByTagName("a");
var __length=__aObj.length;
for(var i=0;i<__length;i++){
	__aObj[i].onfocus=function(){this.blur();}
}
</script>






<script language="javascript">
function getCurDate()
{
var d = new Date();
var week;
switch (d.getDay()){
case 1: week="星期一"; break;
case 2: week="星期二"; break;
case 3: week="星期三"; break;
case 4: week="星期四"; break;
case 5: week="星期五"; break;
case 6: week="星期六"; break;
default: week="星期天";
}
var years = d.getFullYear();
var month = add_zero(d.getMonth()+1);
var days = add_zero(d.getDate());
var hours = add_zero(d.getHours());
var minutes = add_zero(d.getMinutes());
var seconds=add_zero(d.getSeconds());
//var ndate = years+"年"+month+"月"+days+"日 "+hours+":"+minutes+":"+seconds+" "+week;
  var ndate = years;
var divT=document.getElementById("logInfo");
divT.innerHTML= ndate;
}
function add_zero(temp)
{
if(temp<10) return "0"+temp;
else return temp;
}
setInterval("getCurDate()",100);
</script>           <!-- 调用index/下的文件 -->
  
  
  
  
  
  
  
  
  
  
<!-- Right Sidebar -->
<aside class="control-sidebar fixed white ">
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 919px;"><div class="slimScroll" style="overflow: hidden; width: auto; height: 919px;">
        <div class="sidebar-header">
            <h4>Activity List</h4>
            <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
        </div>
        <div class="p-3">
            <div>
                <div class="my-3">
                    <small>25% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>45% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>60% Complete</small>
                    `
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>75% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>100% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3 bg-primary text-white">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="font-weight-normal s-14">Sodium</h5>
                    <span class="font-weight-lighter text-primary">Spark Bar</span>
                    <div> Oxygen
                        <span class="text-primary">
                                                    <i class="icon icon-arrow_downward"></i> 67%</span>
                    </div>
                </div>
                <div class="col-md-6"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                    <canvas width="134" height="93" data-chart="spark" data-chart-type="bar" data-dataset="[[28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100]]" data-labels="['a','b','c','d','e','f','g','h','i','j','k','l','m','n','a','b','c','d','e','f','g','h','i','j','k','l','m','n']" class="chartjs-render-monitor js-chart-drawn" style="display: block; width: 134px; height: 93px;">
                    </canvas>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                <tbody>
                <tr>
                    <td>
                        <a href="#">INV-281281</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 1228.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-01112</a>
                    </td>
                    <td>
                        <span class="badge badge-warning">Overdue</span>
                    </td>
                    <td>$ 5685.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-281012</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 152.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-01112</a>
                    </td>
                    <td>
                        <span class="badge badge-warning">Overdue</span>
                    </td>
                    <td>$ 5685.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-281012</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 152.28</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="sidebar-header">
            <h4>Activity</h4>
            <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
        </div>
        <div class="p-4">
            <div class="activity-item activity-primary">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 5 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet conse ctetur which ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-danger">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 8 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit ametcon the sectetur that ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-success">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 10 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet cons the ecte tur and adip ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-warning">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 12 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet consec tetur adip ascing elit users.</p>
                </div>
            </div>
        </div>
    </div><div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.95); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 709.715px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
</aside>
<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="/public/static/Ryan_iTM/js/app.js"></script>
  
  
  
  
  
  
  
  
  
  
  
      <!--yyy-->
      
<!-- Bottom Scripts -->
<script src="/public/static/assets/js/bootstrap.min.js"></script>
<script src="/public/static/assets/js/TweenMax.min.js"></script>
<script src="/public/static/assets/js/resizeable.js"></script>
<script src="/public/static/assets/js/joinable.js"></script>
<script src="/public/static/assets/js/xenon-api.js"></script>
<script src="/public/static/assets/js/xenon-toggles.js"></script>

<!-- Imported scripts on this page -->
<script src="/public/static/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/public/static/assets/js/jvectormap/regions/jquery-jvectormap-world-mill-en.js"></script>
<script src="/public/static/assets/js/xenon-widgets.js"></script>
<script src="/public/static/assets/js/devexpress-web-14.1/js/globalize.min.js"></script>
<script src="/public/static/assets/js/devexpress-web-14.1/js/dx.chartjs.js"></script>

<script src="/public/static/assets/js/jquery-validate/jquery.validate.js"></script>
<!-- JavaScripts initializations and stuff -->
<script src="/public/static/assets/js/xenon-custom.js"></script>
<script src="/public/static/layer/layer.js"></script>

<!-- markdown -->
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
       <!--yyyyy-->
  
  
  
<div class="tooltip-inner" id="line-chart-tooltip" style="position: absolute; display: none; opacity: 0.8;"></div></body></html>









      <script>
    function daili_money(status,id){
        if(status=='1')
        {
            var str = 'all';
        }else{
            if(id=='') {
                var str = "";
                $("input:checkbox[name='checkname']:checked").each(function () {
                    str += $(this).val() + ",";
                });

                if (str == '') {
                    return false
                }
            }else{
                var str     =   id
            }
        }


        layer.prompt({title: '请输入充值点数', formType: 3}, function(pass, index) {
            if(!isNaN(pass))
            {
              if(pass<100){
                 $('.layui-layer-content').append('<br><span style="color: red">最低起充金额100元</span>')
                return false;
                 }
          window.location.href='http://v3.molisos.com/daili_pay/?id='+id+'&name=代理自助充点&fee='+pass;
                /*$.ajax({
                    'type'  :   'post',
                    'url'   :   '<?php echo url("http://3.molisos.com/daili_pay/?name='+pass+'&fee='+pass+'"); ?>',
                    'data'  :   {
                        'id'    :   str,
                        'status':   status,
                        'money' :   pass,
                        'type'  :   1
                    },
                    'dataType'  :   'json',
                    'success'   :   function (msg)
                    {
                        if(msg.code=='1')
                    {

                        window.location.reload();
                    }else{
                        layer.closeAll();
                        $('#del').php('<div class="col-md-6" id="alert">' +
                            '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                            ' <button type="button" class="close" data-dismiss="alert">' +
                            '<span aria-hidden="true">×</span>' +
                            '<span class="sr-only">Close</span>' +
                            '</button>' +
                            '<strong> 糟糕 !</strong> '+msg.msg+
                            '' +
                            '</div>' +
                            '</div>');
                        setTimeout("yalert()", 2000)
                    }

                        layer.closeAll();
                        setTimeout("$('#alert').fadeOut(1000)", 2000)
                    },
                    'error'     :   function (err)
                    {
                        layer.closeAll();
                        $('#del').php('<div class="col-md-6" id="alert">' +
                            '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                            ' <button type="button" class="close" data-dismiss="alert">' +
                            '<span aria-hidden="true">×</span>' +
                            '<span class="sr-only">Close</span>' +
                            '</button>' +
                            '<strong> 糟糕 !</strong> 服务器错误'+
                            '.请刷新后重试' +
                            '</div>' +
                            '</div>');
                        setTimeout("yalert()", 2000)
                    }
                })*/
                layer.close(index);
            }else{
                $('.layui-layer-content').append('<br><span style="color: red">请填入纯数字</span>')
                return false;
            }


        })


    }

</script>