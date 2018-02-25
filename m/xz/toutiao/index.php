<?php


$staticCdn="";
$staticCss ="";
$staticJs = "";
$staticImg = "";

////////微信分享//////////////////////////////////////
require_once dirname(__FILE__)."/../jssdk.php";


//$url='http://m.fw73.com/xz/';
$url="";
$jssdk = new JSSDK("wx4e875816b680954e", "bc88033648e3ad3bc5341f39f24393a8",$url);
$signPackage = $jssdk->GetSignPackage();

$url='http://'.$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"];

//微信定制分享的变量
$share_title = "新洲真实写照隔壁老王";
$share_desc = "新洲邾城花园X楼304号房苏姓男子，最近一直在家里神神秘秘的玩着手机，半夜老婆睡着了......！";
$share_link = $url;
$share_imgUrl = "http://r5.lgyouxi.cn/h5_xzmj/images/108.png";

///////////////////////////////

?>


<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
<meta name="renderer" content="webkit"/>
<meta content="yes" name="apple-mobile-web-app-capable"/>
<meta content="yes" name="apple-touch-fullscreen"/>
<title>新洲真实写照隔壁老王</title>
<link rel="dns-prefetch" href=<?php echo $staticCdn;?>>
<link rel="stylesheet" href=<?php echo $staticCss;?>"css/swiper.min.css">
<link rel="stylesheet" href=<?php echo $staticCss;?>"css/index.css?v=3">
<link rel="stylesheet" href=<?php echo $staticCss;?>"css/add.css?v=3">
<style>
    * {
        font-size: 1rem;
    }

    .main {
        /* max-width: 750px; */
        margin: 0 auto;
    }

    .ani img {
        width: 100%;
        height: 100%;
        vertical-align: bottom;
    }

    #array {
        width: 5%;
        height: 5%;
        bottom: 5%;
        left: 45%;
    }

    .page1 {
        background-image: url(./images/bg.png);
        height: 100%
    }

    .page2 {
        background-image: url(./images/bg.png);
        height: 100%
    }

    .page3 {
        background-image: url(./images/bg.png);
        height: 100%
    }
</style>



<div class="swiper-container main swiper-container-vertical">
    <div class="swiper-wrapper">
        <section class="swiper-slide swiper-slide1 page1">
            <div class="post">
                <h2 class="rich_media_title" id="activity-name">
                        邾城花园苏姓男子当着邻居面约他老婆开房，邻居居然没有反对……
                </h2>
                <div class="author">
                    微信公众号“红中皮儿杠”
                </div>
                <div class="posDetail">
                    &nbsp;&nbsp;&nbsp;&nbsp; 新洲邾城花园X楼304号房苏姓男子，最近一直在家里神神秘秘的玩着手机，半夜老婆睡着了，还跑到厕所躲着玩，时不时还很兴奋的表情和笑声。而他的邻居刘某妻子也是这样的情况。在一次坐电梯的时候，苏姓男子老婆和刘某聊天中，说到这件事，两人同时就非常惊讶，就商量回去各自侦查下情况。<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;就在这天晚上，刘某和妻子正在
                </div>
            </div>
        </section>
        <section class="swiper-slide swiper-slide1 page2">
            <div class="post posDetail posDetail2">
                    <div class="page2-1">
                            家里吃饭，突然传来敲门声，刘某妻子开门后，苏姓男子拿着手机看到刘某后说到“刘哥，吃饭呢？我和嫂子要开房你也观战下么？”刘某气
                        得脸都绿了，拿起餐桌上的水果刀就向苏姓男子走过去。这时妻子才反正过来，上
                        前拦在刘某前面，说道“老刘，你误会了。”这里苏姓男子才反应过来，连忙举起手机“刘哥，我和嫂子是在开房玩最近新洲非常火爆的开房《新洲麻将》 ”<br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;您也下载一个玩玩,下载地址：<a href="http://fw73.com/xz">fw73.com/xz</a> 然后进入游戏
                    </div>
                    
                    <div class="page2-2">
                        <img class="img img-responsive" src=<?php echo $staticImg;?>"images/dedtail1.png" alt=""> 
                    </div>
                    
                    

                <!-- </div> -->
            </div>
        </section>
        <section class="swiper-slide swiper-slide1 page3">
            <div class="post posDetail">
                <div class="page3-1">
                        抽奖：进入大厅点击抽奖大转盘更多惊喜等着你                    
                        <img class="img img-responsive img2" src=<?php echo $staticImg;?>"images/dedtail5.png" alt="">
                </div>
                <div class="page3-2">
                        再选择:创建房间,选择平时和美女们的打法。
                        <img class="img img-responsive img2" src=<?php echo $staticImg;?>"images/detaile2.png" alt="">
                </div>
            </div>
        </section>
        <section class="swiper-slide swiper-slide1 page3">
            <div class="post posDetail">
                <div class="page4-1">
                        最后：点击“邀请好友”选择要一起约战的美女。
                        <img class="img img-responsive" src=<?php echo $staticImg;?>"images/dedtail3.png" alt="">
                        &nbsp;&nbsp;&nbsp;&nbsp;其它玩家可以点击群内连接或在“新洲麻将app”里面选择加入房间，输入群里的房间号一起决战到天亮。
                </div>
                <div class="img4Container">
                    <img class="img img-responsive img4" src=<?php echo $staticImg;?>"images/dedtail4.png" alt="">
                    <div class="codeContainer">
                            <img class="img img-responsive img5" src=<?php echo $staticImg;?>"images/code.png" alt="">
                            公众号二维码
                    </div> 	
                    
                </div>  
            </div>
        </section>
    </div>
    <img src=<?php echo $staticImg;?>"images/arrow.png" id="array" class="resize">
</div>
<script src=<?php echo $staticJs;?>"js/swiper.min.js"></script>
<script src=<?php echo $staticJs;?>"js/swiper.animate.min.js"></script>
<script src=<?php echo $staticJs;?>"js/mobile-util.js"></script>
<script>
    function reAnimate(isLoop) {
        return mySwiper = new Swiper(".swiper-container", {
            direction: "vertical",
            loop: isLoop,
            // virtualTranslate : true,
            nextButton: '#array',
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
</html>>