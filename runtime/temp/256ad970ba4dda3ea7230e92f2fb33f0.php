<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"/www/wwwroot/tmsj.taomiwo.top/application/index/view/appsettings/wechat.html";i:1559767638;s:62:"/www/wwwroot/tmsj.taomiwo.top/application/index/view/layout.html";i:1559768984;}*/ ?>
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

  
  
  
  
          	 <div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-android2"></i>
                        APP设置
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white">
                  
				   <li><a class="nav-link active" href="<?php echo url('/index/appsettings/wechat'); ?>" role="tab"><i class="icon icon-brightness_auto"></i>微信设置</a></li>
                  
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
        <div class="tab-content pb-3">
  
            <!--Yesterday Tab Start-->
            <div class="tab-pane animated fadeInUpShort go active show">
                   <div class="animatedParent animateOnce">
                      <div class="container-fluid my-3">
                          <div class="row">
                              <div class="col-md-7">
                                  <div class="card">
                                      <div class="card-body b-b">
                                          <form class="form-material" role="form" id="form1" method="post" action="<?php echo url('appsettings/wechat'); ?>" >
                                              <!-- Input -->
                                              <div class="body">

                                                  <h6>客服微信(会显示在属于你用户的APP中)</h6>
                                                  <div class="row clearfix">
                                                      <div class="col-sm-12">
                                                          <div class="form-group">
                                                              <div class="form-line">
                                                                  <input type="text" class="form-control" id="weichat" name="weichat" value="<?php echo $weichat; ?>"  placeholder="微信" >
                                                              </div>
                                                          </div>

                                                      </div>
                                                  </div>


                                                
                    <?php if(session('power')=='1'){$app_working_mode  =  db('advert')->where('id = 1')->value('content');    if( $app_working_mode == '0'){?>    
                                                <h6>发卡平台 </h6>
                                                
                                                   <div class="row clearfix">
                                                      <div class="col-sm-12">
                                                          <div class="form-group">
                                                              <div class="form-line">
                                                                  <input type="text" class="form-control"  name="url" value="<?php echo sname(session('user'),'url'); ?>"  >
                                                              </div>
                                                          </div>

                                                      </div>
                                                  </div>   
                                     <?php } ?>               
                                                
                                                
                                                
  <!--                                                <h6>体验激活码 </h6>
                                                
                                                   <div class="row clearfix">
                                                      <div class="col-sm-12">
                                                          <div class="form-group">
                                                              <div class="form-line">
                                                                  <input type="text" class="form-control"  name="url5" value="<?php echo sname(session('user'),'url5'); ?>"  placeholder="体验激活码购买链接,请以http://开头" >
                                                              </div>
                                                          </div>

                                                      </div>
                                                  </div>  
                                                
                                                
                                                  <h6>一月激活码 </h6>
                                                
                                                   <div class="row clearfix">
                                                      <div class="col-sm-12">
                                                          <div class="form-group">
                                                              <div class="form-line">
                                                                  <input type="text" class="form-control"   name="url1" value="<?php echo sname(session('user'),'url1'); ?>"  placeholder="一个月购买链接,请以http://开头" >
                                                              </div>
                                                          </div>

                                                      </div>
                                                  </div>
                                                
                                                  <h6>三月激活码 </h6>
                                                
                                                   <div class="row clearfix">
                                                      <div class="col-sm-12">
                                                          <div class="form-group">
                                                              <div class="form-line">
                                                                  <input type="text" class="form-control"   name="url2" value="<?php echo sname(session('user'),'url2'); ?>"  placeholder="三个月激活码购买链接,请以http://开头" >
                                                              </div>
                                                          </div>

                                                      </div>
                                                  </div>
                                                
                                                  <h6>半年激活码 </h6>
                                                
                                                   <div class="row clearfix">
                                                      <div class="col-sm-12">
                                                          <div class="form-group">
                                                              <div class="form-line">
                                                                  <input type="text" class="form-control"   name="url6" value="<?php echo sname(session('user'),'url6'); ?>"  placeholder="半年激活码购买链接,请以http://开头" >
                                                              </div>
                                                          </div>

                                                      </div>
                                                  </div>
                                                
                                                  <h6>一年激活码 </h6>
                                                
                                                   <div class="row clearfix">
                                                      <div class="col-sm-12">
                                                          <div class="form-group">
                                                              <div class="form-line">
                                                                  <input type="text" class="form-control"   name="url3" value="<?php echo sname(session('user'),'url3'); ?>"  placeholder="一年激活码购买链接,请以http://开头" >
                                                              </div>
                                                          </div>

                                                      </div>
                                                  </div>
                                                
                                                  <h6>永久激活码 </h6>
                                                
                                                   <div class="row clearfix">
                                                      <div class="col-sm-12">
                                                          <div class="form-group">
                                                              <div class="form-line">
                                                                  <input type="text" class="form-control"   name="url4" value="<?php echo sname(session('user'),'url4'); ?>"  placeholder="永久激活码购买链接,请以http://开头" >
                                                              </div>
                                                          </div>

                                                      </div>
                                                  </div>
-->
<?php } ?>  
                                                
                                              </div>
                                              <!-- #END# Input -->
                                              <button type="submit" class="btn btn-primary">确认</button>
                                          </form>
                                        
                                      </div>
                                    
                                    

                                    


                                  </div>
                              </div>
                              <div class="col-md-5">
                                
                                  <hr>
                                  <h3>帮助</h3>
                                  <p>会在被邀请人APP中专属客服页面展示</p>

                                
                                
                                
                                  <hr>
                                  <h4 class="mt-5">未完待续</h4>
                                  <a href="#" target="_blank" class="btn btn-outline-primary btn-xs">Perfect Network Service</a>
                                
                                
                              </div>
                          </div>
                      </div>
                  </div>						
            </div>

        </div>
    </div>
</div>           <!-- 调用index/下的文件 -->
  
  
  
  
  
  
  
  
  
  
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