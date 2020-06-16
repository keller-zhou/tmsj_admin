<?php
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 淘米视界-ik2021.com
// +----------------------------------------------------------------------
// | Date: 2016/4/23
// +----------------------------------------------------------------------
//程序安装文件


error_reporting(0);
$databaseFile = '../application/database.php';//数据库配额文件
@header('Content-Type: text/html; charset=UTF-8');
$step=isset($_GET['step'])?$_GET['step']:1;
$action=isset($_POST['action'])?$_POST['action']:null;
if(file_exists($databaseFile)){
    exit('<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <title>完美网服_淘米视界优化升级版-一键安装进程   --- ik2021.com</title>
		<link href="//lib.baomitu.com/fullcalendar/3.4.0/fullcalendar.css" rel="stylesheet">
		<link href="//lib.baomitu.com/animate.css/3.5.2/animate.min.css" rel="stylesheet">
		<link href="//lib.baomitu.com/limonte-sweetalert2/6.6.4/sweetalert2.min.css" rel="stylesheet">
		<link href="//lib.baomitu.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="/assets/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
		<link href="//lib.baomitu.com/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
		<link href="//lib.baomitu.com/lightgallery/1.3.9/css/lightgallery.min.css" rel="stylesheet">
		<link href="//lib.baomitu.com/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css" rel="stylesheet">
		<link href="//lib.baomitu.com/cropper/3.0.0-rc.1/cropper.min.css" rel="stylesheet">
		<!-- CSS -->
		<link href="/assets/css/app_1.min.css" rel="stylesheet">
		<link href="/assets/css/app_2.min.css" rel="stylesheet">
		<link href="/assets/css/loading.css" rel="stylesheet">
		<script src="//lib.baomitu.com/jquery/1.12.4/jquery.js"></script>
  
</head>
<body>
 		<div id="loading">
			<div id="loading1">
				<div class="block"></div>
				<div class="block"></div>
				<div class="block"></div>
				<div class="block"></div>
				<div class="section-left"></div>
				<div class="section-right"></div>
			</div>
		</div>
		<section id="page">
			<header id="header" class="clearfix" data-ma-theme="lightblue">
				<ul class="h-inner">
					<li class="hi-trigger ma-trigger" data-ma-action="sidebar-open" data-ma-target="#sidebar">
						<div class="line-wrap">
							<div class="line top"></div>
							<div class="line center"></div>
							<div class="line bottom"></div>
						</div>
					</li>
					<li class="hi-logo">
						<a href="#">完美网服_淘米视界优化升级版 - 安装程序</a>
					</li>
				</ul>
			</header>                
                <div class="card">
									<div class="card-header bgm-pink">
										<h2>安装锁</h2>
									</div>
									<div class="card-body card-padding text-center">
										<h1><i class="fa fa-lock c-red fa-5x"></i></h1>
										<p>emmmmmm，看上去似乎已经安装过了。</p>
										<p>如果你想重新安装/重置密码，请删除“<font class="c-blue">application/database.php</font>”。</p>
										<p>否则，在安装锁开启的状态下，您无法进行重新安装等操作。</p>
                                        <hr></hr>
										<p><a class="c-purple" target="_blank" href="https://ik2021.com">淘米视界官网</a> </p>
									</div>
                                    
								</div>
                                
			<footer id="footer">
				Copyright &copy; 2020 淘米视界-ik2021.com
				<ul class="f-menu">	
					<li><a class="c-purple" target="_blank" href="https://ik2021.com">淘米视界官网</a></li>
				</ul>
			</footer>
            
           </body>
</html> ');
}
function random($length, $numeric = 0) {
	$seed = base_convert(md5(microtime().$_SERVER['DOCUMENT_ROOT']), 16, $numeric ? 10 : 35);
	$seed = $numeric ? (str_replace('0', '', $seed).'012340567890') : ($seed.'zZ'.strtoupper($seed));
	$hash = '';
	$max = strlen($seed) - 1;
	for($i = 0; $i < $length; $i++) {
		$hash .= $seed{mt_rand(0, $max)};
	}
	return $hash;
}
if($action=='install'){
    $host=isset($_POST['host'])?$_POST['host']:null;
    $port=isset($_POST['port'])?$_POST['port']:null;
    $user=isset($_POST['user'])?$_POST['user']:null;
    $pwd=isset($_POST['pwd'])?$_POST['pwd']:null;
    $prefix=isset($_POST['prefix'])?$_POST['prefix']:null;
    $database=isset($_POST['database'])?$_POST['database']:null;
    if(empty($host) || empty($port) || empty($user) || empty($pwd) || empty($database) || empty($prefix)){
        $errorMsg='请填完所有数据库信息';
    }else{
        $mysql['hostname']=$host;
        $mysql['hostport']=$port;
        $mysql['database']=$database;
        $mysql['username']=$user;
        $mysql['password']=$pwd;
        $mysql['type']='mysql';
        $mysql['prefix']=$prefix;
		try{
            $db=new PDO("mysql:host=".$mysql['hostname'].";port=".$mysql['hostport'],$mysql['username'],$mysql['password']);
			$dbsql="CREATE DATABASE `".$mysql['database']."` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";  
            $db->exec($dbsql);
        }catch(Exception $e){
            $errorMsg='链接数据库失败:'.$e->getMessage();
        }
        try{
            $db=new PDO("mysql:host=".$mysql['hostname'].";dbname=".$mysql['database'].";port=".$mysql['hostport'],$mysql['username'],$mysql['password']);
        }catch(Exception $e){
            $errorMsg='链接数据库失败:'.$e->getMessage();
        }
        if(empty($errorMsg)){
            @file_put_contents($databaseFile,'<?php'.PHP_EOL.'return '.var_export($mysql,true).';'.PHP_EOL.PHP_EOL.'?>');
            $db->exec("set names utf8");
            $sqls=file_get_contents('install.sql');
            $sqls=explode(';', $sqls);
            $success=0;$error=0;$errorMsg=null;
            foreach ($sqls as $value) {
                $value=trim($value);
                if(!empty($value)){
                    if($db->exec($value)===false){
                        $error++;
                        $dberror=$db->errorInfo();
                        $errorMsg.=$dberror[2]."<br>";
                    }else{
                        $success++;
                    }
                }
            }
            $step=4;
        }
    }
}
 else {
    $Step = isset($_GET['step']) ? (int) $_GET['step'] : 0;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <title>完美网服_淘米视界优化升级版-一键安装进程   --- ik2021.com</title>
		<link href="//lib.baomitu.com/fullcalendar/3.4.0/fullcalendar.css" rel="stylesheet">
		<link href="//lib.baomitu.com/animate.css/3.5.2/animate.min.css" rel="stylesheet">
		<link href="//lib.baomitu.com/limonte-sweetalert2/6.6.4/sweetalert2.min.css" rel="stylesheet">
		<link href="//lib.baomitu.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="/assets/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
		<link href="//lib.baomitu.com/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
		<link href="//lib.baomitu.com/lightgallery/1.3.9/css/lightgallery.min.css" rel="stylesheet">
		<link href="//lib.baomitu.com/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css" rel="stylesheet">
		<link href="//lib.baomitu.com/cropper/3.0.0-rc.1/cropper.min.css" rel="stylesheet">
		<!-- CSS -->
		<link href="/assets/css/app_1.min.css" rel="stylesheet">
		<link href="/assets/css/app_2.min.css" rel="stylesheet">
		<link href="/assets/css/loading.css" rel="stylesheet">
		<script src="//lib.baomitu.com/jquery/1.12.4/jquery.js"></script>
  
</head>
<body>
 		<div id="loading">
			<div id="loading1">
				<div class="block"></div>
				<div class="block"></div>
				<div class="block"></div>
				<div class="block"></div>
				<div class="section-left"></div>
				<div class="section-right"></div>
			</div>
		</div>
		<section id="page">
			<header id="header" class="clearfix" data-ma-theme="lightblue">
				<ul class="h-inner">
					<li class="hi-trigger ma-trigger" data-ma-action="sidebar-open" data-ma-target="#sidebar">
						<div class="line-wrap">
							<div class="line top"></div>
							<div class="line center"></div>
							<div class="line bottom"></div>
						</div>
					</li>
					<li class="hi-logo">
						<a href="index.html">完美网服_淘米视界优化升级版 - 安装程序</a>
					</li>
				</ul>
			</header>
			<section id="main">
				<aside id="sidebar" class="sidebar c-overflow">
					<div class="s-profile">
						<a href="#" data-ma-action="profile-menu-toggle" style="background: #ff8585;">
							<div class="sp-pic">
								<img src="https://s1.ax1x.com/2020/04/03/GN5an0.png" alt="">
							</div>
							<div class="sp-info">
								淘米视界-ik2021.com
								<i class="fa fa-caret-down"></i>
							</div>
						</a>
					</div>
					<ul class="main-menu">

						<li>
							<a href="?"><i class="fa fa-power-off c-red"></i> 取消安装</a>
						</li>
					</ul>
				</aside>
				<section id="content">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
                <?php
                if(isset($errorMsg)){
                    echo '<div class="alert alert-danger text-center" role="alert">'.$errorMsg.'</div>';
                }
                if($step==1){
                ?>
                              <div class="card">
									<div class="card-header bgm-blue">
										<h2>hello~ 欢迎使用 完美网服_淘米视界优化升级版！</h2>
									</div>
									<div class="card-body card-padding">
										<p>首先，不管您使用什么手段获取了该程序，很高兴您选择了我们开发的程序，为了回报您对我们的信任和支持，我们将会为您提供更为精致和人性化的程序。</p>
										<br>
										<p>淘米视界影视系统为一款单纯的组织结构提供框架</p>
										<br>
										<p>我们努力将功能做的极简化、精致化，目的是让大家能够更高效的使用，不使部分功能荒废。</p>
										<br>
										<p>全网最安全的影视系统,后台登录token，信息传输加密等...</p>
										<br>										
										<p>更为强大的功能，更加人性化的操作，将会在安装向导结束后，一一呈现给您。</p>
										<h4 class="c-pink">注：如果您的数据库中已经存有旧版本影视数据库请您清空数据库后再进行安装操作。</h4>
                                     
										<br>
										<a href="?step=2" class="btn btn-block bgm-green">下一步 →</a>
									</div>
								</div>
								<div class="card">
									<div class="card-header bgm-cyan">
										<h2>更新日志 —— 当前版本:完美网服-淘米视界20200529;
</h2>
									</div>
									<div class="card-body card-padding">
										<iframe src="" frameborder=0 style="min-height:300px;width:100%"></iframe>
									</div>
								</div>
                               <?php }elseif($step==2){ ?>
						<div class="card">
                          
									<div class="card-header bgm-cyan">
										<h2>使用协议</h2>
                                      
									</div>
                         
									<div class="card-body card-padding">
										<iframe src="" frameborder=0 style="min-height:500px;width:100%"></iframe>
										<a href="?step=';
        echo $Step + 1;
        echo '" class="btn btn-block bgm-green">同意 →</a>
									</div>
								</div>
<div class="container"><br>
    <div class="row">

        <div class="col-xs-12">
            <div class="panel panel-warning">
<?php }elseif($step==3){ ?>
<div class="card">
									<div class="card-header bgm-pink">
										<h2>配置信息</h2>
									</div>
  <div class="card-body card-padding">
                    <div class="list-group text-success">
                        <form class="form-horizontal" action="#" method="post">
                            <input type="hidden" name="action" class="form-control" value="install">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">数据库地址</label>
                                <div class="col-sm-10">
                                    <input type="text" name="host" class="form-control" value="localhost">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">数据库端口</label>
                                <div class="col-sm-10">
                                    <input type="text" name="port" class="form-control" value="3306">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">数据库库名</label>
                                <div class="col-sm-10">
                                    <input type="text" name="database" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">数据表前缀</label>
                                <div class="col-sm-10">
                                    <input type="text" name="prefix" class="form-control" value="ap_">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">数据库用户名</label>
                                <div class="col-sm-10">
                                    <input type="text" name="user" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">数据库密码</label>
                                <div class="col-sm-10">
                                    <input type="password" name="pwd" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success btn-block">确认无误，下一步</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <?php }elseif($step==4){ ?>
<div class="card">
									<div class="card-header bgm-blue">
										<h2>安装完毕</h2>
									</div>
									<div class="card-body card-padding">
                                      										<center>
											<h1><i class="fa fa-check c-green fa-5x"></i></h1>
											<p>恭喜您，安装完毕！</p>
											<p>感谢您使用本程序！</p>
											<br>
											<p><a href="/" class="btn btn-blue btn-lg bgm-green">访问首页</a></p>
										</center>
                    <ul class="list-group">
                        <li class="list-group-item">成功执行SQL语句<?php echo $success;?>条，失败<?php echo $error;?>条！</li>
                        <li class="list-group-item">1、系统已成功安装完毕！</li>
                        <li class="list-group-item">2、超级管理员账号为 用户名：ikmovie666 密码:13457530  默认Token：awsgdd</li>
						<li class="list-group-item">3、后台登录地址为：域名+/login/login/ikmovie</li>
                    </ul>
                <hr></hr>
							<p><a class="c-purple" target="_blank" href="https://ik2021.com">淘米视界官网</a>|<a href="/login/login/ikmovie" class="c-purple">进入后台</a> </p>
									</div>
								</div>
                <?php }else{ ?>
                <div class="card">
									<div class="card-header bgm-green">
										<h2>配置检测</h2>
									</div>
                <div class="panel-body">
                    <?php
                    $install=true;
                    if(!file_exists('../application/index/database.php')){
                        $check[2]='<span class="badge">未锁定</span>';
                    }else{
                        $check[2]='<span class="badge">已锁定</span>';
                        $install=false;
                    }
                    if(class_exists("PDO")){
                        $check[0]='<span class="badge">支持</span>';
                    }else{
                        $check[0]='<span class="badge">不支持</span>';
                        $install=false;
                    }
                    if($fp = @fopen("../application/index/test.txt", 'w')) {
                        @fclose($fp);
                        @unlink("../application/index/test.txt");
                        $check[1]='<span class="badge">支持</span>';
                    }else{
                        $check[1]='<span class="badge">不支持</span>';
                        $install=false;
                    }
                    if(version_compare(PHP_VERSION,'5.4.0','<')){
                        $check[3]='<span class="badge">不支持</span>';
                    }else{
                        $check[3]='<span class="badge">支持</span>';
                    }

                    ?>
                    <ul class="list-group">
                        <li class="list-group-item">检测安装是否锁定 <?php echo $check[2];?></li>
                        <li class="list-group-item">PDO_MYSQL组件 <?php echo $check[0];?></li>
                        <li class="list-group-item">INC目录写入权限 <?php echo $check[1];?></li>
                        <li class="list-group-item">PHP版本>=5.5 <?php echo $check[3];?></li>
                        <li class="list-group-item">成功安装后安装文件就会锁定，如需重新安装，请手动删除application/目录下database.php配置文件！</li>
                        <?php
                        if($install) echo'<a href="?step=3" class="btn btn-block bgm-green">检测通过，下一步</a>';
                        ?>
                    </ul>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

			<footer id="footer">
				Copyright &copy; 2020 淘米视界-ik2021.com
				<ul class="f-menu">	
					<li><a class="c-purple" target="_blank" href="https://ik2021.com">淘米视界官网</a></li>
				</ul>
			</footer>
</div>
                              			<script src="//lib.baomitu.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<script src="//lib.baomitu.com/moment.js/2.18.1/moment.min.js"></script>	
			<script src="/assets/js/waves.min.js"></script>	
			<script src="/assets/js/bootstrap-growl.min.js"></script>	
			<script src="//lib.baomitu.com/limonte-sweetalert2/6.6.4/sweetalert2.min.js"></script>
			<script src="/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>	
			<script src="//lib.baomitu.com/lightgallery/1.3.9/js/lightgallery.min.js"></script>	
			<script src="/assets/js/bootstrap-datetimepicker.zh-CN.js"></script>	
			<script src="//lib.baomitu.com/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>	
			<script src="//lib.baomitu.com/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>
			<script src="//lib.baomitu.com/cropper/3.0.0-rc.1/cropper.min.js"></script>	
			<script src="/assets/js/webuploader.js"></script>			
			<script src="/assets/kindeditor/kindeditor-min.js"></script>	
			<script src="/assets/kindeditor/zh_CN.js"></script>			
			<!-- Placeholder for IE9 -->	
			<!--[if IE 9 ]>			
			<script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>	
			<![endif]-->	
			<script src="/assets/js/app.min.js"></script>
</body>
</html>
