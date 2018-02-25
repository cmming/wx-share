<?php
////////微信分享//////////////////////////////////////
require_once dirname(__FILE__)."/../../jssdk.php";


//$url='http://m.fw73.com/xz/';
$url="";
$jssdk = new JSSDK("wx4e875816b680954e", "bc88033648e3ad3bc5341f39f24393a8",$url);
$signPackage = $jssdk->GetSignPackage();

$url='http://'.$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"];

//微信定制分享的变量
$share_title = "新洲汽车杯大赛！";
$share_desc = "新洲汽车杯大赛！微信好友约战新洲麻将，电脑手机同时可约！";
$share_link = $url;
$share_imgUrl = "http://r5.lgyouxi.cn/h5_xzmj/images/108.png";

/////////////////////////////
?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <title>新洲汽车杯大赛</title>
    <link rel="stylesheet" href="../../toutiao/css/swiper.min.css">
    <link rel="stylesheet" href="./css/animate.min.css">
    <link rel="stylesheet" href="../../toutiao/css/index.css">
    <link rel="stylesheet" href="./css/xinzhou.css">
</head>


<body>
    <div class="swiper-container main swiper-container-vertical">
        <div id="music" class="music rotate">
            <audio id="music-audio" class="audio" src="./media/liangliang.mp3" loop="" autoplay="autoplay"
                preload="auto"> </audio>
            <div class="control">
                <div class="control-after"></div>
            </div>
        </div>
        <div class="swiper-wrapper">
            <!-- page1 -->
            <section class="swiper-slide page1">
                <div class="ani fadeInLeft animated" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0s" swiper-animate-delay="0s"
                    style="right: 4.4%; top: 3%;width:28.2%">
                    <img src="./images/logo.png" alt="">
                </div>
                <div class="ani fadeInLeft animated" swiper-animate-effect="bounceIn" swiper-animate-duration="1s" swiper-animate-delay="3s"
                    style="left: 8.3%; top: 15.6%;">
                    <img src="./images/01/qiche.png" alt="">
                </div>
                <div class="ani  animated" swiper-animate-effect="bounceIn" swiper-animate-duration="1s" swiper-animate-delay="0s"
                    style="left: 8.3%; top: 34.8%;width:18.2%;height:16.6%">
                    <img src="./images/01/wenzi01.png" alt="">
                </div>
                <div class="ani  animated" swiper-animate-effect="bounceIn" swiper-animate-duration="1s" swiper-animate-delay="1s"
                    style="left: 12.5%; top: 35.8%;width:44.4%;height:28.5%">
                    <img src="./images/01/wenzi02.png" alt="">
                </div>
                <div class="ani animated" swiper-animate-effect="bounceIn" swiper-animate-duration="1s" swiper-animate-delay="2s"
                    style="left: 50%; top: 32.8%;width:47.3%;height:39.7%">
                    <img src="./images/01/wenzi03.png" alt="">
                </div>
                <div class="ani  animated" swiper-animate-effect="bounceInUp" swiper-animate-duration="1s" swiper-animate-delay="4s"
                    style="left: 51.4%; top: 60%;width:23.2%;height:30.2%">
                    <img src="./images/01/wenzi04.png" alt="">
                </div>
            </section>
            <!-- page2 -->
            <section class="swiper-slide page2">
                <div class="ani  animated" swiper-animate-effect="fadeInDown" swiper-animate-duration="1s" swiper-animate-delay="0s"
                    style="left: 0%; top: 0%;width: 100%;height: 52.5%">
                    <img src="./images/02/bg01.png" alt="">
                </div>
                <div class="ani  animated" swiper-animate-effect="fadeInDown" swiper-animate-duration="1s" swiper-animate-delay="1s"
                    style="left: 3.6%; top: 14.2%;width: 96.4%;height: 35.6%">
                    <img src="./images/02/wenzi01.png" alt="">
                </div>

                <div class="ani  animated" swiper-animate-effect="fadeInDown" swiper-animate-duration="1s" swiper-animate-delay="2s"
                    style="left: 8.3%; top: 52.1%;width: 83.4%;height: 16.7%">
                    <img src="./images/02/wenzi02.png" alt="">
                </div>

                <div class="ani animated" swiper-animate-effect="bounceInUp" swiper-animate-duration="1s" swiper-animate-delay="3s"
                    style="right: 35.9%; bottom: 8.3%;width:28.2%">
                    <img src="./images/logo.png" alt="">
                </div>

            </section>
            <!-- page3 -->
            <section class="swiper-slide page3">
                <div class="ani animated" swiper-animate-effect="bounceInDown" swiper-animate-duration="0s" swiper-animate-delay="0s"
                    style="right: 4.4%; top: 3%;width:28.2%">
                    <img src="./images/logo.png" alt="">
                </div>
                <div class="ani  animated" swiper-animate-effect="bounceInDown" swiper-animate-duration="1s" swiper-animate-delay="0s"
                    style="left:5.9%;top: 13.1%;width: 88.2%;height: 38.4%;">
                    <img src="./images/03/title.png" alt="">
                </div>
                <div class="ani  animated" swiper-animate-effect="bounceInUp" swiper-animate-duration="1s" swiper-animate-delay="1s"
                    style="left: 11.5%; top: 56.3%;width: 77%;height: 24%">
                    <img src="./images/03/font.png" alt="">
                </div>

                <div class="ani  animated" swiper-animate-effect="bounceInUp" swiper-animate-duration="1s" swiper-animate-delay="2s"
                    style="left: 0%; bottom: 0%;width: 83.4%;height: 17%">
                    <img src="./images/03/image.png" alt="">
                </div>
            </section>
            <!-- page4 -->
            <section class="swiper-slide page4">
                <div class="ani  animated" swiper-animate-effect="bounceInDown" swiper-animate-duration="1s" swiper-animate-delay="0s"
                    style="left:0%;top: 4.1%;width: 100%;height: 27.5%;">
                    <img src="./images/04-05/title.png" alt="">
                </div>
                <div class="ani  animated" swiper-animate-effect="bounceInDown" swiper-animate-duration="1s" swiper-animate-delay="1s"
                    style="left: 10.5%; top: 33.9%;width: 79%;height: 29.1%">
                    <img src="./images/04-05/wenzi01.png" alt="">
                </div>

                <div class="ani  animated" swiper-animate-effect="bounceInUp" swiper-animate-duration="1s" swiper-animate-delay="2s"
                    style="left: 10.5%; top: 66.4%;width: 79%;height: 14.1%">
                    <img src="./images/04-05/wenzi02.png" alt="">
                </div>
            </section>
            <!-- page 5 -->
            <section class="swiper-slide page4">
                <div class="ani  animated" swiper-animate-effect="bounceInDown" swiper-animate-duration="1s" swiper-animate-delay="0s"
                    style="left:0%;top: 4.1%;width: 100%;height: 27.5%;">
                    <img src="./images/04-05/title.png" alt="">
                </div>
                <div class="ani  animated" swiper-animate-effect="bounceInUp" swiper-animate-duration="1s" swiper-animate-delay="1s"
                    style="left: 10.5%; top: 33.9%;width: 79%;height: 48.8%">
                    <img src="./images/04-05/wenzi02.jpg" alt="">
                </div>
            </section>

            <!-- page 6 -->
            <section class="swiper-slide page6">
                <div class="ani  animated" swiper-animate-effect="bounceInDown" swiper-animate-duration="1s" swiper-animate-delay="0s"
                    style="left:0%;top: 4.1%;width: 100%;height: 27.5%;">
                    <img src="./images/06 07 08/title.png" alt="">
                </div>
                <div class="ani  animated" swiper-animate-effect="bounceInUp" swiper-animate-duration="1s" swiper-animate-delay="1s"
                    style="left: 10.5%; top: 33.9%;width: 79%;height: 48.8%">
                    <img src="./images/06 07 08/wenzi01.png" alt="">
                </div>
            </section>
            <!-- page 7 -->
            <section class="swiper-slide page6">
                <div class="ani  animated" swiper-animate-effect="bounceInDown" swiper-animate-duration="1s" swiper-animate-delay="0s"
                    style="left:0%;top: 4.1%;width: 100%;height: 27.5%;">
                    <img src="./images/06 07 08/title.png" alt="">
                </div>
                <div class="ani  animated" swiper-animate-effect="bounceInUp" swiper-animate-duration="1s" swiper-animate-delay="1s"
                    style="left: 10.5%; top: 33.9%;width: 79%;height: 48.8%">
                    <img src="./images/06 07 08/wenzi02.png" alt="">
                </div>
            </section>
            <!-- page 8 -->
            <section class="swiper-slide page6">
                <div class="ani  animated" swiper-animate-effect="bounceInDown" swiper-animate-duration="1s" swiper-animate-delay="0s"
                    style="left:0%;top: 4.1%;width: 100%;height: 27.5%;">
                    <img src="./images/06 07 08/title.png" alt="">
                </div>
                <div class="ani  animated" swiper-animate-effect="bounceInUp" swiper-animate-duration="1s" swiper-animate-delay="1s"
                    style="left: 10.5%; top: 33.9%;width: 79%;height: 48.8%">
                    <img src="./images/06 07 08/wenzi03.png" alt="">
                </div>
            </section>
            <!-- page 9 -->
            <section class="swiper-slide page9">
                <div class="ani  animated" swiper-animate-effect="bounceInDown" swiper-animate-duration="1s" swiper-animate-delay="0s"
                    style="left:20.4%;top: 46.3%;width: 59.2%;height: 9.2%;">
                    <img onclick="window.location.href='https://www.baidu.com/'" src="./images/09/btn.png" alt="">
                </div>
            </section>
        </div>
        <!-- 如果需要分页器 -->
        <div class="swiper-pagination"></div>
        <img src="./images/04-05/arrow.png" id="array" class="resize">

    </div>

    <script src="../../toutiao/js/swiper.min.js"></script>
    <script src="../../toutiao/js/swiper.animate.min.js"></script>
    <script src="../../toutiao/js/mobile-util.js"></script>
    <script>
        function reAnimate(isLoop) {
            return mySwiper = new Swiper(".swiper-container", {
                direction: "vertical",
                loop: isLoop,
                // virtualTranslate : true,
                pagination: '.swiper-pagination',
                mousewheelControl: true,
                onInit: function (swiper) {
                    swiperAnimateCache(swiper);
                    swiperAnimate(swiper);
                },
                onSlideChangeEnd: function (swiper) {
                    swiperAnimate(swiper);
                },
                onTransitionEnd: function (swiper) {
                    swiperAnimate(swiper);
                },


                watchSlidesProgress: true,

                onProgress: function (swiper) {
                    for (var i = 0; i < swiper.slides.length; i++) {
                        var slide = swiper.slides[i];
                        var progress = slide.progress;
                        var translate = progress * swiper.height / 4;
                        scale = 1 - Math.min(Math.abs(progress * 0.5), 1);
                        var opacity = 1 - Math.min(Math.abs(progress / 2), 0.5);
                        slide.style.opacity = opacity;
                        es = slide.style;
                        es.webkitTransform = es.MsTransform = es.msTransform = es.MozTransform = es.OTransform = es.transform =
                            "translate3d(0," + translate + "px,-" + translate + "px) scaleY(" + scale + ")";
                    }
                },

                onSetTransition: function (swiper, speed) {
                    for (var i = 0; i < swiper.slides.length; i++) {
                        es = swiper.slides[i].style;
                        es.webkitTransitionDuration = es.MsTransitionDuration = es.msTransitionDuration = es.MozTransitionDuration =
                            es.OTransitionDuration = es.transitionDuration = speed + "ms";
                    }
                },
            });
        }
        window.onload = function () {
            reAnimate(false);
        }
        var eventHandle = function (obj, type, fn) {
            if (obj.addEventListener) {
                obj.addEventListener(type, fn, false)
            } else if (obj.attachEvent) {
                obj.attachEvent('on' + type, fn)
            }
        };
        var musicControl = document.getElementById('music'),
        musicAudio = document.getElementById('music-audio');
        musicControl.addEventListener('click',function(){
            var className = musicControl.getAttribute('class');
            if(className.indexOf('rotate')!=-1){
                musicControl.setAttribute('class','music stopped');
                musicAudio.pause();
            }else{
                musicControl.setAttribute('class','music rotate');
                musicAudio.play();
            }
        });
    </script>
<!-- 统计代码 -->
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?2d30a91ebaa939550ad444ae7dd41097";
        var s = document.getElementsByTagName("script")[0]; 
        s.parentNode.insertBefore(hm, s);
    })();
</script>
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
</body>

</html>