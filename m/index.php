<?php
////////微信分享//////////////////////////////////////
	require_once "jssdk.php";
	$jssdk = new JSSDK("wx4e875816b680954e", "bc88033648e3ad3bc5341f39f24393a8");
	$signPackage = $jssdk->GetSignPackage();
	
	$url='http://'.$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"];

	//微信定制分享的变量
	$share_title = "英山牌友圈";
	$share_desc = "给匆忙的工作添点料，给干枯的生活添点调，一样的玩法给你不一样的体验...";
	$share_link = $url;
	$share_imgUrl = "http://m.fw73.com/images/logo.jpg";

///////////////////////////////
?>
<!doctype html>
<!--
***********************
*****    eliot    *****
***********************
-->
<html>

<head>
  <title>英山牌友圈</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="pragma" Content="no-cach" />
  <meta name="robots" content="all" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
  />
  <link href="css/reset.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.min.css" />
  <link rel="stylesheet" href="css/animations.css" />
</head>

<body>
  <!--<img src="images/share.png" style="position:absolute;left:-800px;top:-800px;opacity:0;" />
  loading start-->
  <div class="loading">
    <div class="loadbox">
      <div class="loadtext">loading</div>
      <div class="circle1"></div>
      <div class="circle2"></div>
    </div>
  </div>
  <!--loading end-->
  <!--横屏 start-->
  <div class="cover">
    <div class="iphone"><img src="images/phone.png" /></div>
    <p>推荐竖屏浏览哦~</p>
  </div>
  <!--横屏 end-->
  <div id="container">
    <div id="content">
      <div class="wraps page-1-1 page-current">
        <div class="pa text_main"> <img src="images/slogan.png" class="logo">
        </div>
        <div class="pa pic2"> <img src="images/code.png" class="logo">
        </div>

         <div class="pa button"> <a href="http://s0.lgyouxi.cn/h5_peg/port/download.php"><img src="images/download.png" class="logo"></a></div>
        <div class="pa down "><img src="images/hint.png" /></div>
      </div>
      <div class="wraps page-2-1 hide">
        <div class="main">
          <div class="pa text_main"> <img src="images/slogan-2.png" class="logo">
          </div>
          <div class="pa pic"> <img src="images/poster.png" class="logo"></div>

           <div class="pa button"> <a href="http://s0.lgyouxi.cn/h5_peg/port/download.php"><img src="images/download.png" class="logo"></a></div>

        </div>
        <div class="pa down "><img src="images/hint.png" /></div>
      </div>
      <div class="wraps page-3-1 hide">
        <div class="main">
          <div class="pa text_main"> <img src="images/slogan-2.png" class="logo">
          </div>
          <div class="pa pic"> <img src="images/poster-2.png" class="logo">
          </div>

           <div class="pa button"> <a href="http://s0.lgyouxi.cn/h5_peg/port/download.php"><img src="images/download.png" class="logo"></a></div>
          <div class="pa down "><img src="images/hint.png" /></div>
        </div>
      </div>
      <div class="wraps page-4-1 equip-rec hide">
        <div class="main">
          <div class="pa text_main"> <img src="images/slogan-3.png" class="logo">
          </div>
          <div class="pa pic"> <img src="images/poster-3.png" class="logo">
          </div>

           <div class="pa button"> <a href="http://s0.lgyouxi.cn/h5_peg/port/download.php"><img src="images/download.png" class="logo"></a></div>
        </div>
        <div class="pa down "><img src="images/hint.png" /></div>
      </div>
      <div class="wraps page-5-1 hide">
        <div class="main">
          <div class="pa text_main"> <img src="images/slogan-3.png" class="logo">
          </div>
          <div class="pa pic"> <img src="images/poster-4.png" class="logo">
          </div>

           <div class="pa button"> <a href="http://s0.lgyouxi.cn/h5_peg/port/download.php"><img src="images/download.png" class="logo"></a></div>
          <div class="pa down "><img src="images/hint.png" /></div>
        </div>
      </div>
      <div id="mask">
        <div class="content">

          <span>
		点击浏览器下载。
	</span>
          <img src="images/arrow.png" class="click">
        </div>
      </div>

      <!--<div class="footer"> 晃游网络版权所有©<span style="font-family:Arial">2014-
    <script language="JavaScript">var nowD = new Date();var year = nowD.getFullYear();document.write(year);</script>
    </span> </div>-->
    </div>
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script src="js/main.js"></script>
    <script>
    	(function(){
			var coypright = "晃游网络版权所有&copy;2014-";
			coypright+=new Date().getFullYear().toString();;
			$(".footer>.year").html(coypright); 
		})();
    </script>
</body>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  /*
   * 注意：
   * 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
   * 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
   * 3. 完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
   *
   * 如有问题请通过以下渠道反馈：
   * 邮箱地址：weixin-open@qq.com
   * 邮件主题：【微信JS-SDK反馈】具体问题
   * 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
   */
  wx.config({
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: '<?php echo $signPackage["timestamp"];?>',
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
        'checkJsApi',
        'onMenuShareTimeline',
        'onMenuShareAppMessage',
        'onMenuShareQQ',
        'onMenuShareWeibo',
        'hideMenuItems',
        'showMenuItems',
        'hideAllNonBaseMenuItem',
        'showAllNonBaseMenuItem',
        'translateVoice',
        'startRecord',
        'stopRecord',
        'onRecordEnd',
        'playVoice',
        'pauseVoice',
        'stopVoice',
        'uploadVoice',
        'downloadVoice',
        'chooseImage',
        'previewImage',
        'uploadImage',
        'downloadImage',
        'getNetworkType',
        'openLocation',
        'getLocation',
        'hideOptionMenu',
        'showOptionMenu',
        'closeWindow',
        'scanQRCode',
        'chooseWXPay',
        'openProductSpecificView',
        'addCard',
        'chooseCard',
        'openCard'
      ]
  });
 wx.ready(function () {
  var shareData = {
  title: '<?php echo $share_title;?>',
  desc: '<?php echo $share_desc;?>',
  link: '<?php echo $share_link;?>',
  imgUrl: '<?php echo $share_imgUrl;?>'
  };

  wx.onMenuShareAppMessage(shareData);
  wx.onMenuShareTimeline(shareData);
  wx.onMenuShareQQ(shareData);
  wx.onMenuShareWeibo(shareData);

  });
  wx.error(function (res) {
  console.log(res.errMsg);
  });
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?2d30a91ebaa939550ad444ae7dd41097";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</html>
