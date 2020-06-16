<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"/www/wwwroot/tmsj.taomiwo.top/application/app/view/index/m.html";i:1557840842;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title><?php echo $app_name; ?> APP下载</title>
    <style>
      
html{
      height: 100%;
      }      
body{
    margin: 0;
    padding: 0;
    font-size: 100px;
}
p{
    margin: 0;
    padding: 0;
}
#content{
    width: 7.2rem;
    height: 100vh;
    overflow: hidden;
    background: #ffffff;
}
#shade,#iosShade{
    position: fixed;
    z-index: 999;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background:rgba(0,0,0,.75);
}
#shade img{
    position: absolute;
    right: .1rem;
    top:.1rem;
    display: block;
    width: 4.3rem;
}
#iosShade .JumpIos{
    width: 5.4rem;
    height: 2.6rem;
    margin: 4.7rem auto 0;
    background: url("../landImg/shadeios.png") center center no-repeat;
    background-size: cover;
}
#iosShade .JumpIos p{
    color: #333333;
    font-size: .24rem;
    line-height: .24rem;
    text-align: center;
}
#iosShade .JumpIos .JumpIosTextTop{
    padding: .5rem 0 .32rem 0;
}
#iosShade .JumpIos .JumpIosText span{
    color: #F0305B;
}
h1 {
    width: 7.2rem;
    margin: 0;
    padding: 0;
}
h1 img{
    width: 100%;
}
.downloadNow{
    position: relative;
    width: 5.6rem;
    height: .9rem;
    background: none;
    margin: 0 auto 1.24rem;
}
.downloadNow button{
    position: absolute;
    left: 0;
    top: 0;
    width: 5.6rem;
    height: .9rem;
    color: #FEFEFE;
    font-size: .36rem;
    text-align: center;
    box-sizing: border-box;
    border: none;
    padding: 0;
    background:linear-gradient(270deg,#FF305E 0%,#Fb6e8e 100%);
    box-shadow:0 .06rem .16rem 0 rgba(243,74,88,.4);
    border-radius: .45rem;
}
.downloadNow input{
    position: absolute;
    left: 0;
    top: 0;
    background: none;
    border: none;
    opacity: 0;
    color: #FF668A;
    font-size: .01rem;
    width: 5.6rem;
    height: .9rem;
}
</style>
    <script type="text/javascript">
      //rem
      function refreshRem() {
        var desW = 720,
          winW = document.documentElement.clientWidth,
          ratio = winW / desW;
        document.documentElement.style.fontSize = ratio * 100 + 'px';
      }
      refreshRem();
      window.addEventListener('resize', refreshRem);
    </script>
</head>

<body>
<div id="content">
  <div id="shade" style="display: none">
      <img src="/public/static/qudao/images/weixin.png">
  </div>
  <!--
  <div id="iosShade" style="display: none">
      <div class="JumpIos">
          <p class="JumpIosTextTop">检测到您是苹果手机用户，</p>
          <p class="JumpIosText"><span id="timeMsg">4</span><span>s</span>后将自动为您跳转至ios版iMoney</p>
      </div>
  </div>
  -->
  
  <h1 id="down"><img src="<?php echo $wap_index_img; ?>"></h1>
  <div class="downloadNow" onclick="download()">
    <button  onclick="down()"  >立即下载</button>

  </div>
</div>
  

  
</body>
</html>



<script type="text/javascript">
  
    function down(){
      
 if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) { //判断iPhone|iPad|iPod|iOS
 // alert(navigator.userAgent); 
  //           var iosShade = document.getElementById('iosShade')
//            iosShade.style.display = 'block'
   
  window.location.href ="<?php echo $app_ios_down; ?>";
} else if (/(Android)/i.test(navigator.userAgent)) {  //判断Android
// alert(navigator.userAgent); 
  window.location.href ="<?php echo $app_android_down; ?>";
} else { //pc
  window.location.href ="<?php echo $app_android_down; ?>";
};

  }
  


    window.onload = function(){
        if(isWeiXin()){
            var shade = document.getElementById('shade')
            shade.style.display = 'block'
        }
    }
    function isWeiXin(){
        var ua = window.navigator.userAgent.toLowerCase();
        if(ua.match(/MicroMessenger/i) == 'micromessenger'){
            return true;
        }else{
            return false;
        }
    }
</script>


