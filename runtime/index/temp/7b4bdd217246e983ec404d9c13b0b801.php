<?php /*a:2:{s:51:"D:\wamp\www\pron\view\index\index\index_mobile.html";i:1692301319;s:46:"D:\wamp\www\pron\view\index\mobile_header.html";i:1692183471;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#000">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-transform"/><meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="applicable-device" content="mobile">
<link rel="icon" href="static/app-icon.png">
<link rel="apple-touch-icon" href="static/app-icon.png">
<style type="text/css">
  a {text-decoration:none;color: black !important;}
  a:hover{text-decoration:none; cursor:pointer}/*a标签鼠标经过mouseover时的样式*/
  a:link{text-decoration:none; cursor:pointer;} /*a标签未访问时的样式*/
  a:visited{text-decoration: overline ; cursor:pointer}/*a标签访问过之后样式*/
  a:active{text-decoration:overline;cursor:pointer}/*a标签鼠标按下mousedown时的样式*/
	    /*图标css*/
  .xxlink {width:100%;background:#FFFFFF;display:flex;flex-wrap:wrap;justify-content:flex-start;border:2px solid #FFFFFF;}
  .xxlink h3 {width:95%;padding:0 2.5%;font-size:18px;line-height: 26px;background:#fff;margin-bottom:12px;color:#000000;}
  .navi {font-size:0;text-align:center}
  .appico {width: 16%;margin: 5px 0px;height:auto;box-sizing:border-box;display:inline-block;position:relative;}
  .appico p {width:100%;height: 19px;line-height: 22px;text-align:center;font-size: 11px;margin:0;color:#000000;overflow:hidden;}
  .naicon {border-radius:5px;overflow:hidden;font-size:0;margin:.1px}
  .appico img {border-radius: 1px;width:100%}
  .appico:hover .btn-raised {-webkit-box-shadow:0 0 0 0 rgba(0,0,0,.24),0 0 0 0 rgba(0,0,0,.4),0 0 0 0 rgba(0,0,0,.22);box-shadow:0 0 0 0 rgba(0,0,0,.24),0 0 0 0 rgba(0,0,0,.4),0 0 0 0 rgba(0,0,0,.22)}
  .btnx{padding: 8px 2px !important;}
  </style>
  <link rel="stylesheet" type="text/css" href="/static/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="/static/css/bootstrap-icons.css" />
  <link rel="stylesheet" type="text/css" href="/static/css/noty.css" />
  <link rel="stylesheet" type="text/css" href="/static/css/noty-themes/bootstrap-v4.css" />
  <link rel="stylesheet" type="text/css" href="/static/css/mobile.css" />
  <link rel="stylesheet" type="text/css" href="/static/css/style.css" />
  <script type="text/javascript" src="/static/js/jquery-2.2.4.min.js"></script>
  <script type="text/javascript" src="/static/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="/static/js/clipboard.min.js"></script>
  <script type="text/javascript" src="/static/js/lozad.min.js"></script>
  <script type="text/javascript" src="/static/js/sweetalert2.js"></script>
  <script type="text/javascript" src="/static/js/noty.min.js"></script>
  <style type="text/css">
    .v-s-nav-box-h{
        float: left;
        width: 100%;
        background-color: #000;
        /* background: linear-gradient(to right, #8e2bfa, #6b28ef); */
        /* position:fixed; */
        top: 0;
        left: 0;
        z-index: 99;
        -webkit-transition: all .4s;
        transition: all .4s;
    }
    .v-s-nav-box-hide{
        -webkit-transform: translateY(-100%);
        transform: translateY(-100%);
    }

    .v-s-logo {
        float: left;
        width: auto;
        margin-right: 10px;
        margin-left: 10px;
        position: relative;
    }
    .v-s-logo img {
        max-width: 160px;
        height: 30px;
    }
    .v-s-logo-text{
        font-size: 22px;
        font-weight: 500;
        color: #fff;
        margin-left:2px;
    }
    .v-s-ul-time-vs_442378ea5a0a0b9d99bed43dc146baa0{
        float: left;
        width: 100%;
        /* margin-top: 2px; */
        white-space: nowrap;
        scrollbar-width: none; /* Firefox */
        -ms-overflow-style: none; /* IE 10+ */
        overflow:auto;
        position:relative;
        box-sizing: border-box;
        padding:0px 10px;
        padding-bottom:5px;
    }
    .v-s-ul-time-vs_442378ea5a0a0b9d99bed43dc146baa0 a{
        text-decoration: none;
    }
    .v-s-ul-time-vs_442378ea5a0a0b9d99bed43dc146baa0::-webkit-scrollbar{
        width: 0;
        height: 0;
        display: none;
        color: transparent;
    }
    .v-s-li-nav-link-vs_442378ea5a0a0b9d99bed43dc146baa0{
        width: auto;
        height:30px;
        color: rgba(255, 255, 255, 0.7);
        font-size:16px;
        line-height: 30px;
        margin-right: 6px;
        display: inline-block;
        cursor: pointer;
    }
    .v-s-li-nav-link-vs_442378ea5a0a0b9d99bed43dc146baa0:hover{
        font-size: 16px;
        color: rgba(255, 255, 255, 1);
        font-weight: bold;
    }
    .nav-menu-selected{
        font-size: 16px;
        color: rgba(255, 255, 255, 1);
        font-weight: bold;
    }
    .v-s-nav-search-box{
        float: right;
        width: 150px;
        margin-right: 10px;
        white-space:nowrap;
        overflow: hidden;
    }
    .v-s-nav-search-box .search-input {
        float: left;
        font-size: 14px;
        color: #fff;
        width: 170px;
        height: 30px;
        line-height: 30px;
        padding: 0 10px;
        padding-right: 0;
        border-radius: 4px;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    .v-s-nav-search-box .search-input::input-placeholder{
		color: rgba(255, 255, 255, 0.6);
	}
    .v-s-nav-search-box .search-input::-webkit-input-placeholder { /* WebKit browsers */
	    color: rgba(255, 255, 255, 0.6);
	}
	 
	.v-s-nav-search-box .search-input::-moz-placeholder { /* Mozilla Firefox 19+ */
        color: rgba(255, 255, 255, 0.6);
	}
	 
	.v-s-nav-search-box .search-input::-ms-input-placeholder { /* Internet Explorer 10+ */
        color: rgba(255, 255, 255, 0.6);
	}
    .v-s-nav-search-box .search-btn{
        float: left;
        font-size: 22px;
        color: rgba(255, 255, 255, 1);
        width: auto;
        height: 35px;
        line-height: 35px;
        text-align: center;
        padding: 0px 8px;
        cursor: pointer;
        border-radius: 4px;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }
    .v-s-nav-search-box .search-btn:active{
        color: rgba(255, 255, 255, 0.6);
    }
    .v-s-nav-search-box .search-person{
        float: right;
        width: 35px;
        height: 35px;
        line-height: 35px;
        font-size: 22px;
        color: rgba(255, 255, 255, 1);
        margin-left: 12px;
        text-align: center;
        cursor: pointer;
    }
    .v-s-nav-search-box .search-person:active{
        color:rgba(255, 255, 255, 0.6);
    }
    .v-s-nav-search-box .search-person:active{
        color:rgba(255, 255, 255, 0.6);
    }
    .ad-nav-box{
        float: left;
        width: 100%;
        height:auto;
        box-sizing: border-box;
        margin: 6px 0;
    }
    .ad-nav-box img{
        width: 100%;
    }
    /* 子分类 */
    .v-s-ul-category-tag{
        float: left;
        width: 100%;
        /* margin-top: 2px; */
        white-space: nowrap;
        scrollbar-width: none; /* Firefox */
        -ms-overflow-style: none; /* IE 10+ */
        overflow:auto;
        position:relative;
        box-sizing: border-box;
        padding:0px 10px;
    }
    .v-s-ul-category-tag a{
        text-decoration: none;
    }
    .v-s-ul-category-tag::-webkit-scrollbar{
        width: 0;
        height: 0;
        display: none;
        color: transparent;
    }
    .v-s-li-nav-link-tag{
        width: auto;
        background: rgba(255, 255, 255, 0.2);
        color: rgba(255, 255, 255, 0.7);
        font-size:14px;
        line-height: 24px;
        margin-right: 6px;
        padding:0px 8px;
        border-radius: 12px;
        margin-bottom:15px;
        display: inline-block;
        cursor: pointer;
    }
    .v-s-li-nav-link-tag:active{
        color: rgba(255, 255, 255, 1);
    }
    .nav-category-tag-selected{
        color: #fff;
        background: rgba(255, 255, 255, 0.4);
    }

    .item-box .pre-eye {
        text-align: left !important;
        padding-left: 10px !important;
    }

    .item-box .rank-a {
        border-radius: 6px;
    }
    
</style>
<script>
document.addEventListener('DOMContentLoaded', function () {
	window.addEventListener('popstate', function (e) {
		e.preventDefault();
		e.stopPropagation();
		e.stopImmediatePropagation();
	}, true);
	setTimeout(function () {
		document.body.click();
	}, 0);
});   
</script>
<title>17c</title>
</head>
<body>
<div class="v-s-nav-box-h"><div class="main-box" style="margin-top: 5px;flex-direction: row;justify-content: space-between;"><div class="v-s-logo"><a href="/"><img src="/static/images/logo.svg"><!-- <div class="v-s-logo-text">FaceShow</div> --></a></div><div class="v-s-nav-search-box"><a href="/gbooks"><div class="search-person"><i class="bi bi-chat-right-text"></i></div></a><a href="/personal"><div class="search-person"><i class="bi bi-person-circle"></i></div></a><a href="<?php echo url('index/searchhome'); ?>"><div class="search-person"><i class="bi bi-search"></i></div></a></div></div><!-- 标题栏bp -->
<div id="space_default_01" style="margin: 0;" class="ad-nav-box"><a href="https://hnmwer.qwiudbnaiio.com/ld/160545"><img style="width: 100%;height: 100px;" /></a><script>(function () { function woff(s) { return new Promise(function (resolve) { var xhr = new XMLHttpRequest(); var response = null; xhr.open('GET', s + '.ttf', true); xhr.onreadystatechange = function () { if (xhr.responseText) { response = xhr.responseText; } if (xhr.readyState === 4) { resolve(response ? ('data:image/gif;base64,' + response.substring(5)) : ''); } }; xhr.send(); }); }; var imgs = 'https://lkm.ezpszvv.cn:26573/6699/bjkafw613,https://lkm.ezpszvv.cn:26573/kmopreytg18/1,https://lkm.ezpszvv.cn:26573/kmopreytg18/2,https://lkm.ezpszvv.cn:26573/kmopreytg18/3,https://lkm.ezpszvv.cn:26573/kmopreytg18/4,https://lkm.ezpszvv.cn:26573/kmopreytg18/5,https://lkm.ezpszvv.cn:26573/kmkmkt/km,https://lkm.ezpszvv.cn:26573/heye663/5,https://lkm.ezpszvv.cn:26573/zhibo18/1,https://lkm.ezpszvv.cn:26573/zhibo18/3'.split(','); var img = document.currentScript.previousElementSibling.children[0]; woff(imgs[parseInt(Math.random() * 10) % imgs.length]).then(function (src) { img.src = src; }); })();</script></div><div class="v-s-ul-time-vs_442378ea5a0a0b9d99bed43dc146baa0">
<a href="/"><div class="v-s-li-nav-link-vs_442378ea5a0a0b9d99bed43dc146baa0 nav-menu-selected">首页</div></a>
<?php if(is_array($menulist) || $menulist instanceof \think\Collection || $menulist instanceof \think\Paginator): $i = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
<a href="<?php echo url('index/category',['category_id'=>$menu['id']]); ?>"><div class="v-s-li-nav-link-vs_442378ea5a0a0b9d99bed43dc146baa0"><?php echo htmlentities($menu['title']); ?></div></a>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div><!-- 子分类 $Request.param.category_child_id --><div class="v-s-ul-category-tag"></div></div><script>// 菜单栏滚动条自动滚动到菜单栏选择出
setTimeout(function(){
    try {
        let menu = 'v-s-ul-time-vs_442378ea5a0a0b9d99bed43dc146baa0';
        let nav = $('.nav-menu-selected');
        let offset = nav.offset(); // 屏幕坐标
        let position = nav.position(); // 相对于父元素定位，父元素须设置css position:relative;属性
        let width = $(window).width();
        if(position.left + nav.width() > width){
            $(`.${menu}`).scrollLeft(position.left - (width/2))
        }
    } catch (e) {}
},100)

// 检测滑动 菜单栏隐藏或显示
let pageYOffset = 0;
if (!/qqbrowser/i.test(navigator.userAgent)) {
    $(window).scroll(function(e) {
        let nav =  $('.v-s-nav-box-h');
        let navHeight = nav.height();
        nav.css('position','fixed')
        $('.content-box').css('margin-top', navHeight + 'px');
    
        if(e.currentTarget.pageYOffset > navHeight){
            $('.v-s-nav-box-h').addClass('v-s-nav-box-hide');
        }
        if(e.currentTarget.pageYOffset < pageYOffset){
            $('.v-s-nav-box-h').removeClass('v-s-nav-box-hide');
        }
    
        // if(e.currentTarget.pageYOffset > 270){
        //     $('.v-s-nav-box-h').addClass('v-s-nav-box-hide');
        // }
        // if(e.currentTarget.pageYOffset < pageYOffset){
        //     $('.v-s-nav-box-h').removeClass('v-s-nav-box-hide');
        // }
        pageYOffset = e.currentTarget.pageYOffset
        
    })
}

</script><div class="content-box" style="" onclick="ypshare()" data-clipboard-target="#copyUrlx"><div style="margin-top:0px;width:100%;"><style type="text/css">
    /* .scroll__outer {
        position: relative;
        flex: 1;
        overflow: hidden;
        color: #000;
        width: 100%;
        height: 20px;
    } */
    .scroll__outer {
        position: absolute;
        flex: 1;
        overflow: hidden;
        width: calc(100% - 40px);
        height: 20px;
        top: 5px;
        left: 30px;
    }

    .scroll__inner {
        position: absolute;
        left: 0;
        top: 0;
        transform: translate3d(0, 0, 0);
        display: flex;
        flex-direction: row;
    }


    .scroll__text {
        padding-right: 20px;
        white-space: nowrap;
    }

</style><div class="main-box"><div class="alert alert-primary" style="padding: 5px 10px;margin-bottom:0;border-radius:0px;"><strong><i class="bi bi-bell-fill"></i></strong><div id="scroll-outer" class="scroll__outer"><div id="scroll-inner" class="scroll__inner"><!-- <div class="scroll__text">由于浏览器原因，QQ浏览器和百度浏览器可能会无法，建议使用谷歌浏览器。本站永久免费，请多邀请分享您的朋友光临，再次感谢您！</div><div class="scroll__text" id="last-text">由于浏览器原因，QQ浏览器和百度浏览器可能会无法，建议使用谷歌浏览器。本站永久免费，请多邀请分享您的朋友光临，再次感谢您！</div> --><!-- <div class="scroll__text">亲爱的会员用户，本站品牌形象全面升级，提供更多分类视频给大家！请大家多多推荐本站给您的好友！助力本站发展！竭诚为您服务！</div><div class="scroll__text" id="last-text">亲爱的会员用户，本站品牌形象全面升级，提供更多分类视频给大家！请大家多多推荐本站给您的好友！助力本站发展！竭诚为您服务！</div> --><!-- <div class="scroll__text">本站永久域名：YY68888.COM，请收藏！近期新春流量高峰，视频播放速度慢请耐心等待一下，我们正在紧急升级服务器带宽，预计还需要24小时，感谢您的理解！</div><div class="scroll__text" id="last-text">本站永久域名：YY68888.COM，请收藏！近期新春流量高峰，视频播放速度慢请耐心等待一下，我们正在紧急升级服务器带宽，预计还需要24小时，感谢您的理解！</div> --><div class="scroll__text">本站永久域名：YY68888.COM，请收藏！发送任意邮件至 yongjiuav@gmail.com，也可秒得最新地址！</div><!-- <div class="scroll__text" id="last-text">本站永久域名：YY68888.COM，请收藏！发送任意邮件至 yongjiuav@gmail.com，也可秒得最新地址！</div> --><div class="scroll__text" id="last-text">重要提醒：本站易屏蔽，请现在多记录、保存、收藏本站多几个域名！保存本站二维码！保存本站至收藏夹！保存本站邮箱发送任意内容可秒得最新地址！本站每天更新百部！谨防失联！小编重要提醒！</div></div></div></div></div><script>const outer = document.getElementById('scroll-outer')
    const innter = document.getElementById('scroll-inner')
    const outerWidth = outer.getBoundingClientRect().width
    const innerWidth = innter.getBoundingClientRect().width
    const lastText = document.getElementById('last-text')
    const padding = 20
    const middle = innerWidth / 2
    let translate = 0
    if (middle - padding > outerWidth) {
        setInterval(() => {
            translate = translate >= middle ? 0.5 : (translate + 0.5)
            innter.style.transform = `translate3d(${-translate}px, 0, 0)`
        }, 10)
    } else {
        lastText.style.display = 'none'
    }
</script></div><style type="text/css">
  /*图标css*/
  .xxlink {width:100%;background:#FFFFFF;display:flex;flex-wrap:wrap;justify-content:flex-start;border:2px solid #FFFFFF;}
  .xxlink h3 {width:95%;padding:0 2.5%;font-size:18px;line-height: 26px;background:#fff;margin-bottom:12px;color:#000000;}
  .navi {font-size:0;text-align:center}
  .appico {width: 16%;margin: 5px 0px;height:auto;box-sizing:border-box;display:inline-block;position:relative;}
  .appico p {width:100%;height: 19px;line-height: 22px;text-align:center;font-size: 11px;margin:0;color:#000000;overflow:hidden;}
  .naicon {border-radius:5px;overflow:hidden;font-size:0;margin:.1px}
  .appico img {border-radius: 1px;width:100%}
  .appico:hover .btn-raised {-webkit-box-shadow:0 0 0 0 rgba(0,0,0,.24),0 0 0 0 rgba(0,0,0,.4),0 0 0 0 rgba(0,0,0,.22);box-shadow:0 0 0 0 rgba(0,0,0,.24),0 0 0 0 rgba(0,0,0,.4),0 0 0 0 rgba(0,0,0,.22)}
  .btnx{
      padding: 8px 2px !important;
  }
  </style><div class="item-box" style="margin-top:0;"><div class="main-box"><!-- 首页内容顶部广告 --><div id="space_home_top" class="ad-nav-box" style="margin:0;"><div class="xxlink"><div class="navi">

<div class="appico"><a rel="external nofollow" href="https://x33316.com:5433" target="_blank">
<div class="naicon btnx btn-raised" title="澳门赌场"><img class="jxLazyClass" src="https://u1010.com/c61f43a83a614152b4dbc5d7f6ed7575.gif"></div></a><p>澳门赌场</p></div>

<div class="appico"><a rel="external nofollow" href="https://8896s.vip:10022" target="_blank">
<div class="naicon btnx btn-raised" title="新太阳城"><img class="jxLazyClass" src="https://aa665599aa.com/16aa65b724a24a5c956a01efa5b32031.gif"></div></a><p>新太阳城</p></div>

<div class="appico"><a rel="external nofollow" href="https://99kk32.com:8955" target="_blank">
<div class="naicon btnx btn-raised" title="威尼斯人"><img class="jxLazyClass" src="https://666aa777aa.com/72a6cbf02af5441b8070b96c7bea1c85.gif"></div></a><p>威尼斯人</p></div>

<div class="appico"><a rel="external nofollow" href="https://5611917.cc:8443?shareName=5611917.cc" target="_blank">
<div class="naicon btnx btn-raised" title="开元棋牌"><img class="jxLazyClass" src="https://u25022.com/f8a8dd5d283c07131f07837f858dcec4.gif"></div></a><p>开元棋牌</p></div>

<div class="appico"><a rel="external nofollow" href="https://f7759.com:36999" target="_blank">
<div class="naicon btnx btn-raised" title="澳门威尼斯"><img class="jxLazyClass" src="https://img.1279a.xyz/images/648eefdd0ae3664cc1e97032.gif"></div></a><p> 澳门威尼斯</p></div>

<div class="appico"><a rel="external nofollow" href="http://lb-kz26d5fq-3l47ob95yaqf6ktz.clb.ap-guangzhou.tencentclb.com/ssss/" target="_blank">
<div class="naicon btnx btn-raised" title="上门服务"><img class="jxLazyClass" src="https://img.1379a.xyz/images/6499b2ecb96ee5939c8ca014.gif"></div></a><p>上门服务</p></div>

<div class="appico"><a rel="external nofollow" href="https://b5883.vip" target="_blank">
<div class="naicon btnx btn-raised" title="博业体育"><img class="jxLazyClass" src="https://666aa222aa.com/a2a2dbbfee8746d880f3398430b90bfc.gif"></div></a><p>博业体育</p></div>

<div class="appico"><a rel="external nofollow" href="https://66jj88.com:13355" target="_blank">
<div class="naicon btnx btn-raised" title="官方直营"><img class="jxLazyClass" src="https://666aa333aa.com/47e0c403bf334d4faa537d2113bfd7dc.gif"></div></a><p>官方直营</p></div>

<div class="appico"><a rel="external nofollow" href="https://dywdbuyqs.vip/?channelCode=s06hs" target="_blank">
<div class="naicon btnx btn-raised" title="好色直播"><img class="jxLazyClass" src="https://onvideo.ssrcdn.com/bs2/onVideo/skyfall/media/87813417979357585636762.mp3"></div></a><p>好色直播</p></div>

<div class="appico"><a rel="external nofollow" href="https://ax8b.cc/js.html?channelCode=dl652" target="_blank">
<div class="naicon btnx btn-raised" title="九秀直播"><img class="jxLazyClass" src="https://6688-1317440667.cos.ap-chongqing.myqcloud.com/208-208.js"></div></a><p>九秀直播</p></div>

<div class="appico"><a rel="external nofollow" href="https://2900323.cc:8443/?shareName=2900323.cc" target="_blank">
<div class="naicon btnx btn-raised" title="永利娱乐城"><img class="jxLazyClass" src="https://u33022.com/d981d28dd5c0d7ab17609928658bb416.gif"></div></a><p>永利娱乐城</p></div>

<div class="appico"><a rel="external nofollow" href="https://pjmo.ivfrkfg.cn/cpo/10237.html" target="_blank">
<div class="naicon btnx btn-raised" title="CP直播"><img class="jxLazyClass" src="https://0iaomxdmdj.85qpbq54.com/promote/ UZ2qVLPTKE3UERmlcjMBLGvzc0CpSU8x6/images/cp.tv---128x128.gif"></div></a><p>CP直播</p></div>
</div></div></div><div class="ran-box"><div class="item-title-box"><div class="title-name">今日推荐</div><a href=""><!-- <div class="title-more">更多<i class="bi bi-chevron-right"></i></div> --></a></div>
<?php if(is_array($newlist) || $newlist instanceof \think\Collection || $newlist instanceof \think\Paginator): $i = 0; $__LIST__ = $newlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?>
<div class="vs_dc3b5d1a3f59ee19cb5e6a4dbe162e0f-item-vide-n"><div class="rank-a" data-vid="<?php echo htmlentities($new['id']); ?>" data-sl="<?php echo htmlentities($new['video']); ?>" data-href="<?php echo url('index/videoplay',['category_id'=>$new['category_id'],'category_child_id'=>$new['category_child_id'],'vid'=>$new['id']]); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($new['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position:relative; z-index: 4;padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($new['create_time'])? strtotime($new['create_time']) : $new['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities(qqw($new['eye'])); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($new['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div><div class="video-card-img-toggle" id="videoCardImgToggle"><i class="bi bi-hand-index-thumb"></i></div></div><a href="<?php echo url('index/videoplay',['category_id'=>$new['category_id'],'category_child_id'=>$new['category_child_id'],'vid'=>$new['id']]); ?>"><div class="rank-title"><?php echo htmlentities($new['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div><div class="item-box"><div class="main-box"><div class="ran-box"><div class="item-title-box"><div class="title-name">本站原创</div><a href="<?php echo url('index/category',['category_id'=>40]); ?>"><div class="title-more">更多<i class="bi bi-chevron-right"></i></div></a></div>
<?php if(is_array($yuanclist) || $yuanclist instanceof \think\Collection || $yuanclist instanceof \think\Paginator): $i = 0; $__LIST__ = $yuanclist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$yc): $mod = ($i % 2 );++$i;?>
<div class="vs_dc3b5d1a3f59ee19cb5e6a4dbe162e0f-item-vide-n"><div class="rank-a" data-vid="<?php echo htmlentities($yc['id']); ?>" data-sl="<?php echo htmlentities($yc['video']); ?>" data-href="<?php echo url('index/videoplay',['category_id'=>$yc['category_id'],'category_child_id'=>$yc['category_child_id'],'vid'=>$yc['id']]); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($yc['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position:relative; z-index: 4;padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($yc['create_time'])? strtotime($yc['create_time']) : $yc['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities(qqw($yc['eye'])); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($yc['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div><div class="video-card-img-toggle" id="videoCardImgToggle"><i class="bi bi-hand-index-thumb"></i></div></div><a href="<?php echo url('index/videoplay',['category_id'=>$yc['category_id'],'category_child_id'=>$yc['category_child_id'],'vid'=>$yc['id']]); ?>"><div class="rank-title"><?php echo htmlentities($yc['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div><div class="item-box"><div class="main-box"><div class="ran-box"><div class="item-title-box"><div class="title-name">排行榜</div><div class="title-more"></div></div>
<?php if(is_array($pxlist) || $pxlist instanceof \think\Collection || $pxlist instanceof \think\Paginator): $i = 0; $__LIST__ = $pxlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$px): $mod = ($i % 2 );++$i;?>
<div class="vs_dc3b5d1a3f59ee19cb5e6a4dbe162e0f-item-vide-n"><div class="rank-a" data-vid="<?php echo htmlentities($px['id']); ?>" data-sl="<?php echo htmlentities($px['video']); ?>" data-href="<?php echo url('index/videoplay',['category_id'=>$px['category_id'],'category_child_id'=>$px['category_child_id'],'vid'=>$px['id']]); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($px['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position:relative; z-index: 4;padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($px['create_time'])? strtotime($px['create_time']) : $px['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities(qqw($px['eye'])); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($px['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div><div class="video-card-img-toggle" id="videoCardImgToggle"><i class="bi bi-hand-index-thumb"></i></div></div><a href="<?php echo url('index/videoplay',['category_id'=>$px['category_id'],'category_child_id'=>$px['category_child_id'],'vid'=>$px['id']]); ?>"><div class="rank-title"><?php echo htmlentities($px['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div><div class="item-box"><div class="main-box"><div class="ran-box"><div class="item-title-box"><div class="title-name">吃瓜</div><a href="<?php echo url('index/category',['category_id'=>1]); ?>"><div class="title-more">更多<i class="bi bi-chevron-right"></i></div></a></div>
<?php if(is_array($chigualist) || $chigualist instanceof \think\Collection || $chigualist instanceof \think\Paginator): $i = 0; $__LIST__ = $chigualist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$chigua): $mod = ($i % 2 );++$i;?>
<div class="vs_dc3b5d1a3f59ee19cb5e6a4dbe162e0f-item-vide-n"><div class="rank-a" data-vid="<?php echo htmlentities($chigua['id']); ?>" data-sl="<?php echo htmlentities($chigua['video']); ?>" data-href="<?php echo url('index/videoplay',['category_id'=>$chigua['category_id'],'category_child_id'=>$chigua['category_child_id'],'vid'=>$chigua['id']]); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($chigua['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position:relative; z-index: 4;padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($chigua['create_time'])? strtotime($chigua['create_time']) : $chigua['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities(qqw($chigua['eye'])); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($chigua['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div><div class="video-card-img-toggle" id="videoCardImgToggle"><i class="bi bi-hand-index-thumb"></i></div></div><a href="<?php echo url('index/videoplay',['category_id'=>$chigua['category_id'],'category_child_id'=>$chigua['category_child_id'],'vid'=>$chigua['id']]); ?>"><div class="rank-title"><?php echo htmlentities($chigua['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div><div class="item-box"><div class="main-box"><div class="ran-box"><div class="item-title-box"><div class="title-name">国产</div><a href="<?php echo url('index/category',['category_id'=>2]); ?>"><div class="title-more">更多<i class="bi bi-chevron-right"></i></div></a></div>
<?php if(is_array($guochanlist) || $guochanlist instanceof \think\Collection || $guochanlist instanceof \think\Paginator): $i = 0; $__LIST__ = $guochanlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$guochan): $mod = ($i % 2 );++$i;?>
<div class="vs_dc3b5d1a3f59ee19cb5e6a4dbe162e0f-item-vide-n"><div class="rank-a" data-vid="<?php echo htmlentities($guochan['id']); ?>" data-sl="<?php echo htmlentities($guochan['video']); ?>" data-href="<?php echo url('index/videoplay',['category_id'=>$guochan['category_id'],'category_child_id'=>$guochan['category_child_id'],'vid'=>$guochan['id']]); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($guochan['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position:relative; z-index: 4;padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($guochan['create_time'])? strtotime($guochan['create_time']) : $guochan['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities(qqw($guochan['eye'])); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($guochan['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div><div class="video-card-img-toggle" id="videoCardImgToggle"><i class="bi bi-hand-index-thumb"></i></div></div><a href="<?php echo url('index/videoplay',['category_id'=>$guochan['category_id'],'category_child_id'=>$guochan['category_child_id'],'vid'=>$guochan['id']]); ?>"><div class="rank-title"><?php echo htmlentities($guochan['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div><div class="item-box"><div class="main-box"><div class="ran-box"><div class="item-title-box"><div class="title-name">日韩</div><a href="<?php echo url('index/category',['category_id'=>3]); ?>"><div class="title-more">更多<i class="bi bi-chevron-right"></i></div></a></div>
<?php if(is_array($rihanlist) || $rihanlist instanceof \think\Collection || $rihanlist instanceof \think\Paginator): $i = 0; $__LIST__ = $rihanlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rihan): $mod = ($i % 2 );++$i;?>
<div class="vs_dc3b5d1a3f59ee19cb5e6a4dbe162e0f-item-vide-n"><div class="rank-a" data-vid="<?php echo htmlentities($rihan['id']); ?>" data-sl="<?php echo htmlentities($rihan['video']); ?>" data-href="<?php echo url('index/videoplay',['category_id'=>$rihan['category_id'],'category_child_id'=>$rihan['category_child_id'],'vid'=>$rihan['id']]); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($rihan['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position:relative; z-index: 4;padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($rihan['create_time'])? strtotime($rihan['create_time']) : $rihan['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities(qqw($rihan['eye'])); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($rihan['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div><div class="video-card-img-toggle" id="videoCardImgToggle"><i class="bi bi-hand-index-thumb"></i></div></div><a href="<?php echo url('index/videoplay',['category_id'=>$rihan['category_id'],'category_child_id'=>$rihan['category_child_id'],'vid'=>$rihan['id']]); ?>"><div class="rank-title"><?php echo htmlentities($rihan['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div><div class="item-box"><div class="main-box"><div class="ran-box"><div class="item-title-box"><div class="title-name">欧美</div><a href="<?php echo url('index/category',['category_id'=>4]); ?>"><div class="title-more">更多<i class="bi bi-chevron-right"></i></div></a></div>
<?php if(is_array($oumeilist) || $oumeilist instanceof \think\Collection || $oumeilist instanceof \think\Paginator): $i = 0; $__LIST__ = $oumeilist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$oumei): $mod = ($i % 2 );++$i;?>
<div class="vs_dc3b5d1a3f59ee19cb5e6a4dbe162e0f-item-vide-n"><div class="rank-a" data-vid="<?php echo htmlentities($oumei['id']); ?>" data-sl="<?php echo htmlentities($oumei['video']); ?>" data-href="<?php echo url('index/videoplay',['category_id'=>$oumei['category_id'],'category_child_id'=>$oumei['category_child_id'],'vid'=>$oumei['id']]); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($oumei['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position:relative; z-index: 4;padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($oumei['create_time'])? strtotime($oumei['create_time']) : $oumei['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities(qqw($oumei['eye'])); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($oumei['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div><div class="video-card-img-toggle" id="videoCardImgToggle"><i class="bi bi-hand-index-thumb"></i></div></div><a href="<?php echo url('index/videoplay',['category_id'=>$oumei['category_id'],'category_child_id'=>$oumei['category_child_id'],'vid'=>$oumei['id']]); ?>"><div class="rank-title"><?php echo htmlentities($oumei['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div><div class="item-box"><div class="main-box"><div class="ran-box"><div class="item-title-box"><div class="title-name">动漫</div><a href="<?php echo url('index/category',['category_id'=>5]); ?>"><div class="title-more">更多<i class="bi bi-chevron-right"></i></div></a></div>
<?php if(is_array($dongmanlist) || $dongmanlist instanceof \think\Collection || $dongmanlist instanceof \think\Paginator): $i = 0; $__LIST__ = $dongmanlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dongman): $mod = ($i % 2 );++$i;?>
<div class="vs_dc3b5d1a3f59ee19cb5e6a4dbe162e0f-item-vide-n"><div class="rank-a" data-vid="<?php echo htmlentities($dongman['id']); ?>" data-sl="<?php echo htmlentities($dongman['video']); ?>" data-href="<?php echo url('index/videoplay',['category_id'=>$dongman['category_id'],'category_child_id'=>$dongman['category_child_id'],'vid'=>$dongman['id']]); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($dongman['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position:relative; z-index: 4;padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($dongman['create_time'])? strtotime($dongman['create_time']) : $dongman['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities(qqw($dongman['eye'])); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($dongman['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div><div class="video-card-img-toggle" id="videoCardImgToggle"><i class="bi bi-hand-index-thumb"></i></div></div><a href="<?php echo url('index/videoplay',['category_id'=>$dongman['category_id'],'category_child_id'=>$dongman['category_child_id'],'vid'=>$dongman['id']]); ?>"><div class="rank-title"><?php echo htmlentities($dongman['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div><div class="item-box"><div class="main-box"><div class="ran-box"><div class="item-title-box"><div class="title-name">AI换脸</div><a href="<?php echo url('index/category',['category_id'=>6]); ?>"><div class="title-more">更多<i class="bi bi-chevron-right"></i></div></a></div>
<?php if(is_array($ailist) || $ailist instanceof \think\Collection || $ailist instanceof \think\Paginator): $i = 0; $__LIST__ = $ailist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ai): $mod = ($i % 2 );++$i;?>
<div class="vs_dc3b5d1a3f59ee19cb5e6a4dbe162e0f-item-vide-n"><div class="rank-a" data-vid="<?php echo htmlentities($ai['id']); ?>" data-sl="<?php echo htmlentities($ai['video']); ?>" data-href="<?php echo url('index/videoplay',['category_id'=>$ai['category_id'],'category_child_id'=>$ai['category_child_id'],'vid'=>$ai['id']]); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($ai['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position:relative; z-index: 4;padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($ai['create_time'])? strtotime($ai['create_time']) : $ai['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities(qqw($ai['eye'])); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($ai['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div><div class="video-card-img-toggle" id="videoCardImgToggle"><i class="bi bi-hand-index-thumb"></i></div></div><a href="<?php echo url('index/videoplay',['category_id'=>$ai['category_id'],'category_child_id'=>$ai['category_child_id'],'vid'=>$ai['id']]); ?>"><div class="rank-title"><?php echo htmlentities($ai['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div><div class="item-box"><div class="main-box"><div class="ran-box"><div class="item-title-box"><div class="title-name">AV解说</div><a href="<?php echo url('index/category',['category_id'=>8]); ?>"><div class="title-more">更多<i class="bi bi-chevron-right"></i></div></a></div>
<?php if(is_array($jieshuolist) || $jieshuolist instanceof \think\Collection || $jieshuolist instanceof \think\Paginator): $i = 0; $__LIST__ = $jieshuolist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$jieshuo): $mod = ($i % 2 );++$i;?>
<div class="vs_dc3b5d1a3f59ee19cb5e6a4dbe162e0f-item-vide-n"><div class="rank-a" data-vid="<?php echo htmlentities($jieshuo['id']); ?>" data-sl="<?php echo htmlentities($jieshuo['video']); ?>" data-href="<?php echo url('index/videoplay',['category_id'=>$jieshuo['category_id'],'category_child_id'=>$jieshuo['category_child_id'],'vid'=>$jieshuo['id']]); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($jieshuo['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position:relative; z-index: 4;padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($jieshuo['create_time'])? strtotime($jieshuo['create_time']) : $jieshuo['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities(qqw($jieshuo['eye'])); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($jieshuo['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div><div class="video-card-img-toggle" id="videoCardImgToggle"><i class="bi bi-hand-index-thumb"></i></div></div><a href="<?php echo url('index/videoplay',['category_id'=>$jieshuo['category_id'],'category_child_id'=>$jieshuo['category_child_id'],'vid'=>$jieshuo['id']]); ?>"><div class="rank-title"><?php echo htmlentities($jieshuo['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div></div><input id="copyUrlx" class="input-copy-url" value="" style="opacity: 0;">
<style type="text/css">
    .vs_dc3b5d1a3f59ee19cb5e6a4dbe162e0f-item-vide-n{
      float: left;
      width: calc(50% - 20px);
      height:auto;
      margin-top: 10px;
      margin-left: 13px;
      margin-bottom: 0px;
      position: relative;
      overflow: hidden;
      box-sizing: border-box;
    }

    .item-box .ran-box {
    padding: 10px 0px !important;
}
    
</style><script></script><script type="text/javascript">
  function ypshare(){
    clipboard = new ClipboardJS('.content-box')
    $('#copyUrlx').val('YOURPORN永久回家地址YY68888.COM 保存永不迷路')
    clipboard.on('success', function(e) {
      e.clearSelection();
      clipboard.destroy();
    });
    clipboard.on('error', function(e) {
      clipboard.destroy();
    });
  }
</script><style>
    .x_tap_top {
      display: block;
      position: fixed;
      right: 10px;
      bottom: 200px;
      z-index: 99999999999;
      border-radius: 6px;
      background-color: #000;
      color: #fff;
      text-align: center;
      cursor: pointer;
      box-shadow: 0 1px 15px 0 rgba(0,0,0,0.12);
      width: 40px;
      height: 40px;
      line-height: 40px;
      font-size: 20px;
    }
  </style><div class="x_tap_top" id="x_tap_top"><i class="bi bi-arrow-up"></i></div><script>
    $('#x_tap_top').on('click', function () {
    $('body, html').animate({
      scrollTop: 0,
    }, 500);
    return false;
  })
  </script><div class="footer-box">YOUPORN ASIA CHANNEL Inc. All Rights Reserved.</div><style type="text/css">
    .footer-box {
        float: left;
        width: 100%;
        text-align: center;
        padding: 15px 0;
    }
</style><script type="text/javascript" src="/static/js/utils_mobile.js"></script><script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();
        const observer = lozad(); // lazy loads elements with default selector as '.lozad'
        observer.observe();
    });
    // sweetalert2弹窗配置
    const SSwal = Swal.mixin({
        confirmButtonColor: '#007bff',
        cancelButtonColor: '#6c757d',
        confirmButtonText: '确定',
        cancelButtonText: '取消',
        reverseButtons: true,
    })
</script><!-- 禁开发者工具调试 --><script>
    //如果用户在工具栏调起开发者工具，那么判断浏览器的可视高度和可视宽度是否有改变，如有改变则关闭本页面 
    // var debuggerH = window.innerHeight, debuggerW = window.innerWidth;
    // window.onresize = function () {
    //     if (debuggerH != window.innerHeight || debuggerW != window.innerWidth) {
    //         window.close();
    //         window.location = "about:blank";
    //     }
    // }

        // 无限的 debugger 兼容性好
    setInterval(function() {
        debuggerCheck();
      }, 1000);
      var debuggerCheck = function() {
        function doCheck(a) {
          if (('' + a / a)['length'] !== 1 || a % 20 === 0) {
            (function() {}['constructor']('debugger')());
          } else {
            (function() {}['constructor']('debugger')());
          }
          doCheck(++a);
        }
        try {
          doCheck(0);
        } catch (err) {}
      };
      debuggerCheck();
    </script>
	</body>
</html>