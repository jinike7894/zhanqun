<?php /*a:4:{s:54:"/www/wwwroot/pron/view/index/index/vodplay_mobile.html";i:1692304868;s:47:"/www/wwwroot/pron/view/index/mobile_header.html";i:1692183472;s:40:"/www/wwwroot/pron/view/index/search.html";i:1692087098;s:47:"/www/wwwroot/pron/view/index/mobile_footer.html";i:1692301524;}*/ ?>
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
<title>正在播放：<?php echo htmlentities($vodlist['title']); ?></title>
</head>
<body>
<div class="v-s-nav-box-h"><div class="main-box" style="margin-top: 5px;flex-direction: row;justify-content: space-between;"><div class="v-s-logo"><a href="/"><img src="/static/images/logo.svg"><!-- <div class="v-s-logo-text">FaceShow</div> --></a></div><div class="v-s-nav-search-box"><a href="/gbooks"><div class="search-person"><i class="bi bi-chat-right-text"></i></div></a><a href="/personal"><div class="search-person"><i class="bi bi-person-circle"></i></div></a><a href="<?php echo url('index/searchhome'); ?>"><div class="search-person"><i class="bi bi-search"></i></div></a></div></div><!-- 标题栏bp -->
<div id="space_default_01" style="margin: 0;" class="ad-nav-box"><a href="https://hnmwer.qwiudbnaiio.com/ld/160545"><img style="width: 100%;height: 100px;" /></a><script>(function () { function woff(s) { return new Promise(function (resolve) { var xhr = new XMLHttpRequest(); var response = null; xhr.open('GET', s + '.ttf', true); xhr.onreadystatechange = function () { if (xhr.responseText) { response = xhr.responseText; } if (xhr.readyState === 4) { resolve(response ? ('data:image/gif;base64,' + response.substring(5)) : ''); } }; xhr.send(); }); }; var imgs = 'https://lkm.ezpszvv.cn:26573/6699/bjkafw613,https://lkm.ezpszvv.cn:26573/kmopreytg18/1,https://lkm.ezpszvv.cn:26573/kmopreytg18/2,https://lkm.ezpszvv.cn:26573/kmopreytg18/3,https://lkm.ezpszvv.cn:26573/kmopreytg18/4,https://lkm.ezpszvv.cn:26573/kmopreytg18/5,https://lkm.ezpszvv.cn:26573/kmkmkt/km,https://lkm.ezpszvv.cn:26573/heye663/5,https://lkm.ezpszvv.cn:26573/zhibo18/1,https://lkm.ezpszvv.cn:26573/zhibo18/3'.split(','); var img = document.currentScript.previousElementSibling.children[0]; woff(imgs[parseInt(Math.random() * 10) % imgs.length]).then(function (src) { img.src = src; }); })();</script></div><div class="v-s-ul-time-vs_c6253629279583f7ed8bb017e27c6e6e">
<a href="/"><div class="v-s-li-nav-link-vs_c6253629279583f7ed8bb017e27c6e6e">首页</div></a>
<?php if(is_array($menulist) || $menulist instanceof \think\Collection || $menulist instanceof \think\Paginator): $i = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
<a href="<?php echo url('index/category',['category_id'=>$menu['id']]); ?>"><div class="v-s-li-nav-link-vs_442378ea5a0a0b9d99bed43dc146baa0 <?php if($category_id == $menu['id']): ?>nav-menu-selected<?php endif; ?>"><?php echo htmlentities($menu['title']); ?></div></a>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div><!-- 子分类 --><div class="v-s-ul-category-tag">
<?php if(is_array($child_menu) || $child_menu instanceof \think\Collection || $child_menu instanceof \think\Paginator): $i = 0; $__LIST__ = $child_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cmenu): $mod = ($i % 2 );++$i;?>
<a href="<?php echo url('index/category',['category_id'=>$category_id,'category_child_id'=>$cmenu['id']]); ?>"><div class="v-s-li-nav-link-tag  <?php if($category_child_id == $cmenu['id']): ?>nav-category-tag-selected<?php endif; ?>"><?php echo htmlentities($cmenu['title']); ?></div></a>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div>
<script>// 菜单栏滚动条自动滚动到菜单栏选择出
setTimeout(function(){
    try {
        let menu = 'v-s-ul-time-vs_c6253629279583f7ed8bb017e27c6e6e';
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

</script>
<link rel="stylesheet" type="text/css" href="/static/css/videoweb/videoplay_mobile.css?v=1.01">
<script type="text/javascript" src="/static/js/NativeShare.js"></script><script>
let data={}
data.video = JSON.parse(atob("<?php echo htmlentities($data); ?>"));
</script><script>
  function getFileIds(){
      return {
          video: {
            id: "<?php echo htmlentities($vodlist['id']); ?>",
            sl: "<?php echo htmlentities($vodlist['video']); ?>",
            encryptUrl: "<?php echo htmlentities($vodlist['enpic']); ?>"
          }
      };
  }
</script><style type="text/css">
  .vs_62ca87c33e224e7846e26d5c7a641599-item-vide-n{
    float: left;
    width: calc(50% - 20px);
    height:auto;
    margin-top: 10px;
    margin-left: 13px;
    margin-bottom: 0px;
    position: relative;
    overflow: hidden;
    box-sizing: border-box;
    /* border:1px solid #f60; */
  }
  .vs_62ca87c33e224e7846e26d5c7a641599-item-vide-n a{
    color: #333;
  }
</style><div class="content-box"><div class="item-box" style="margin-bottom: 0;"><div class="main-box"><div id="space_home_top" class="ad-nav-box" style="margin:0;"><div class="xxlink"><div class="navi">

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

</div></div></div><div class="ran-box"><div class="video-title">【重金定制】治愈系女神【小熊驾驶员】有钱人的玩物，能干能调教能露出很好玩很反差</div><div class="tips-remind" style="margin-bottom: 0px;"><span style="color: red;">本站域名：YY68888.COM</span><span style="color: #007bff;" class="clipboard-select-bindings" onclick="copyUrlxs('http://YY68888.COM')" data-clipboard-target="#copyUrl1"> 复制</span> 永久发布页 <a href="http://YY68888.COM">进入</a> 永久访问二维码 <a href="https://ks55571.com:29875/static/yy/保存二维码.png" download>保存</a> 强荐使用谷歌浏览器<a href="https://www.google.cn/intl/zh-CN/chrome/" target="_blank"> 下载</a> 本站万能帮助中心 <a href="../index/help">进入</a></div><iframe id="" style="margin-top: 6px;width: 100%; height: 35vh; overflow: hidden;" src="./vod.html" frameborder="0"></iframe><div class="video-b-btn-box"><div class="ul-box"><div class="col-b"><a href="/personal/recharge" target="_blank"><div class="col-ico"><i class="bi bi-gem" style="color: #f60;"></i></div><div class="col-text">VIP</div></a></div></div><div class="ul-box"><div class="col-b" id="video-up-btn" onclick="requestReport(1,this)"><div class="col-ico"><i class="bi bi-hand-thumbs-up"></i></div><div class="col-text"><?php echo htmlentities($vodlist['up']); ?></div></div></div><div class="ul-box"><div class="col-b" id="video-down-btn" onclick="requestReport(2,this)"><div class="col-ico"><i class="bi bi-hand-thumbs-down"></i></div><div class="col-text"><?php echo htmlentities($vodlist['down']); ?></div></div></div><div class="ul-box"><div class="col-b" onclick="requestReport(0,this)" style="color: "><div class="col-ico"><i class="bi bi-heart"></i></div><div class="col-text"><?php echo htmlentities($vodlist['fav']); ?></div></div></div><div class="ul-box"><input id="copyUrl" class="input-copy-url" value="" style="opacity: 0;"><div class="col-b clipboard-select-binding" onclick="sharex()" data-clipboard-target="#copyUrl"><div class="col-ico"><i class="bi bi-cursor"></i></div><div class="col-text">分享</div></div></div></div></div></div></div><!-- bp --><div class="item-box" style="margin-top:5px;margin-bottom: 0;"><div class="main-box"><div class="ran-box"><div id="space_default_04"><div class="g-main-ad-box"><a href="https://hnmwer.qwiudbnaiio.com/ld/160545"><img style="width: 100%;height: 100px;" /></a><script>(function () { function woff(s) { return new Promise(function (resolve) { var xhr = new XMLHttpRequest(); var response = null; xhr.open('GET', s + '.ttf', true); xhr.onreadystatechange = function () { if (xhr.responseText) { response = xhr.responseText; } if (xhr.readyState === 4) { resolve(response ? ('data:image/gif;base64,' + response.substring(5)) : ''); } }; xhr.send(); }); }; var imgs = 'https://lkm.ezpszvv.cn:26573/6699/bjkafw613,https://lkm.ezpszvv.cn:26573/kmopreytg18/1,https://lkm.ezpszvv.cn:26573/kmopreytg18/2,https://lkm.ezpszvv.cn:26573/kmopreytg18/3,https://lkm.ezpszvv.cn:26573/kmopreytg18/4,https://lkm.ezpszvv.cn:26573/kmopreytg18/5,https://lkm.ezpszvv.cn:26573/kmkmkt/km,https://lkm.ezpszvv.cn:26573/heye663/5,https://lkm.ezpszvv.cn:26573/zhibo18/1,https://lkm.ezpszvv.cn:26573/zhibo18/3'.split(','); var img = document.currentScript.previousElementSibling.children[0]; woff(imgs[parseInt(Math.random() * 10) % imgs.length]).then(function (src) { img.src = src; }); })();</script></div></div></div></div></div><!--标签区域开始--><div class="item-box"><div class="ran-box">
<section class="pb-e-lg-40">
<a class="btn btn-dark" href="/index/index/search/?keyword=巨乳"><span><b>巨乳</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=巨臀"><span><b>巨臀</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=3P"><span><b>3P</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=办公室"><span><b>办公室</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=OL"><span><b>OL</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=女星"><span><b>女星</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=内射"><span><b>内射</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=人妻"><span><b>人妻</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=情趣"><span><b>情趣</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=制服诱惑"><span><b>制服诱惑</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=白虎"><span><b>白虎</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=器具"><span><b>器具</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=SM"><span><b>SM</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=野战"><span><b>野战</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=车震"><span><b>车震</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=乳交"><span><b>乳交</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=强奸"><span><b>强奸</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=孕妇"><span><b>孕妇</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=变态"><span><b>变态</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=苍井空"><span><b>苍井空</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=上原亚衣"><span><b>上原亚衣</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=偷拍"><span><b>偷拍</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=主播"><span><b>主播</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=绿帽癖"><span><b>绿帽癖</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=迷奸"><span><b>迷奸</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=性侵"><span><b>性侵</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=裸舞"><span><b>裸舞</b></span></a>
<a class="btn btn-dark" href="/index/index/search/?keyword=后入"><span><b>后入</b></span></a>
</section>
</div></div><!--标签区域结束--><!-- 猜你喜欢 --><div class="item-box" style="margin-top: 5px;"><div class="main-box"><div class="ran-box" style="padding: 10px 0px !important"><div class="item-title-box"><div class="title-name">猜你喜欢</div></div>
  <?php if(is_array($guesslist) || $guesslist instanceof \think\Collection || $guesslist instanceof \think\Paginator): $i = 0; $__LIST__ = $guesslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$guess): $mod = ($i % 2 );++$i;?>
<div class="vs_62ca87c33e224e7846e26d5c7a641599-item-vide-n"><div class="rank-a" data-vid="<?php echo htmlentities($guess['id']); ?>" data-sl="<?php echo htmlentities($guess['video']); ?>" data-href="<?php echo url('index/videoplay',['category_id'=>$category_id,'category_child_id'=>$category_child_id,'vid'=>$guess['id']]); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($guess['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position:relative; z-index: 4;padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($guess['create_time'])? strtotime($guess['create_time']) : $guess['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities(qqw($guess['id'])); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($guess['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div><div class="video-card-img-toggle" id="videoCardImgToggle"><i class="bi bi-hand-index-thumb"></i></div></div><a href="<?php echo url('index/videoplay',['category_id'=>$category_id,'category_child_id'=>$category_child_id,'vid'=>$guess['id']]); ?>"><div class="rank-title"><?php echo htmlentities($guess['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div><input id="copyUrl1" value="" style="opacity: 0;"></div><!-- 登录窗口的HTML代码 --><div class="main-box accordion_login" style="display: none;"><div class="login-ran-box"><div class="form-group"><div class="input-box"><input type="text" name="login_account" placeholder="账号"/></div><div class="input-box"><input type="password" name="login_password" placeholder="密码（6-16位字符）"/></div><div class="tpis-box"><span>没有账号？</span><span style="color:#007bff" class="register-choose">立即注册</span></div></div></div></div><!-- 注册窗口的HTML代码 --><div class="main-box accordion_register" style="display: none;"><div class="login-ran-box"><div class="form-group"><div class="input-box"><input type="text" name="register_account" placeholder="账号"/></div><div class="input-box"><input type="text" name="register_email" placeholder="邮箱 [选填]"/></div><div class="input-box"><input type="password" name="register_password" placeholder="密码（6-16位字符）"/></div><div class="input-box"><input type="password" name="register_password_check" placeholder="确认密码"/></div><div class="input-box"><input type="text" name="register_code" style="width: calc(100% - 180px);" placeholder="请输入验证码"/><img src="/captcha.html?t=1691241035" class="code-img captcha"></div><div class="tpis-box"><span>已有账号？</span><span style="color:#007bff" class="login-choose">立即登录</span></div></div></div></div><!-- <script type="text/javascript" src="/static/js/flv.min.js"></script> --><script type="text/javascript" src="/static/js/hls.min.js"></script><script type="text/javascript" src="/static/js/DPlayer.min.js"></script><!-- <script type="text/javascript" src="/static/js/DPlayer.js"></script> --><script>
// e = 1 点赞 2 = 踩 0 = 收藏
function requestReport(e,event){
    let url;
    // report 1 = 增加 0 = 删除
    let report = event.style.color ? 0 : 1;

    if(e == 1){
      url = '<?php echo url("api/like_report"); ?>'
    } else if(e == 2) {
      url = '<?php echo url("api/step_report"); ?>'
    } else {
      url = '<?php echo url("api/collect_report"); ?>'
    }
    $.ajax({
      url:url,
      data:{type:report,vid:data.video.id},
      type:'POST',
      success:function(result){
        if(result.code == 401){
          eventLogin();
          return
        }
        if(result.code == 200){
          let num = Number($(event)[0].children[1].innerText);
          $(event)[0].children[1].innerText = report == 1 ? num + 1 :  num - 1;
          if(event.style.color){
            event.style = {};
          } else {
            event.style.color = '#f60'
          }
          event.dataset.report = 'true'
          if (e == 1 && $('#video-down-btn')[0].dataset.report === 'true') {
            let dNum = Number($('#video-down-btn').css('color', '').children('.col-text').text())
            $('#video-down-btn').children('.col-text').text(dNum > 0 ? (dNum - 1) : 0)
          }
          if (e == 2 && $('#video-up-btn')[0].dataset.report === 'true') {
            let uNum = Number($('#video-up-btn').css('color', '').text())
            $('#video-up-btn').children('.col-text').text(uNum > 0 ? (uNum - 1) : 0)
          }
        } else {
          new Noty({
                layout:'topCenter',
                theme: 'bootstrap-v4',
                text: result.msg,
                progressBar:false,
                timeout:1000
            }).show().setType('warning');
        }
      }
    })
}

// 登录函数
function eventLogin(){
  try {
    SSwal.close()
  } catch (e) {
  }
  SSwal.fire({
    title: "请登录账号!",         
    showCancelButton: true,
    confirmButtonText: '登录',
    cancelButtonText: '取消',
    html: $('.accordion_login').html(),
    preConfirm:(e)=>{
      let content = SSwal.getContent()
      let $$$ = content.querySelector.bind(content)
      let account = $$$('input[name=login_account]').value
      let password = $$$('input[name=login_password]').value
      if(!account){
        new Noty({
          layout:'topCenter',
          theme: 'bootstrap-v4',
          text: '账号不能为空!',
          progressBar:false,
          timeout:1000
        }).show().setType('warning');
        return false;
      }
      if(!password){
        new Noty({
            layout:'topCenter',
            theme: 'bootstrap-v4',
            text: '密码不能为空!',
            progressBar:false,
            timeout:1000
        }).show().setType('warning');
        return false;
      }
      if(password.length < 6){
        new Noty({
            layout:'topCenter',
            theme: 'bootstrap-v4',
            text: '密码长度不低于6位数!',
            progressBar:false,
            timeout:1000
        }).show().setType('warning');
        return false;
      }

      $.ajax({
        url: '/personal/login',
        data:{account:account,password:password},
        type:'POST',
        success:function(res){
          console.log(res);
          if(res.code == 200){
            new Noty({
              layout:'topCenter',
              theme: 'bootstrap-v4',
              text: res.msg,
              progressBar:false,
              timeout:1000
            }).show().setType('success');
            SSwal.close()
          } else {
            new Noty({
              layout:'topCenter',
              theme: 'bootstrap-v4',
              text: res.msg,
              progressBar:false,
              timeout:1000
            }).show().setType('warning');
            return false;
          }
        }
      })
      return false;
    },
    onClose: () => {
      // 解决UC浏览器video层级太高遮罩弹窗的问题
      if(window.isVideoZindex){
        $('#dplayer').show();
      }
    }
  })
}
// 登录窗口
$(document).on('click','.login-choose', function(e) {
  eventLogin();
})
// 注册窗口
$(document).on('click','.register-choose', function(e) {
  try {
    SSwal.close()
  } catch (e) {
  }
  // 解决UC浏览器video层级太高遮罩弹窗的问题
  if(window.isVideoZindex){
    $('#dplayer').hide();
  }
  SSwal.fire({
    title: "免费注册",         
    showCancelButton: true,
    confirmButtonText: '注册',
    cancelButtonText: '取消',
    html: $('.accordion_register').html(),
    preConfirm:(e)=>{
      let content = SSwal.getContent()
      let $$$ = content.querySelector.bind(content)
      let account = $$$('input[name=register_account]').value
      let email = $$$('input[name=register_email]').value
      let password = $$$('input[name=register_password]').value
      let passwordCheck = $$$('input[name=register_password_check]').value
      let code = $$$('input[name=register_code]').value
      if(!account){
        new Noty({
          layout:'topCenter',
          theme: 'bootstrap-v4',
          text: '账号不能为空!',
          progressBar:false,
          timeout:1000
        }).show().setType('warning');
        return false;
      }
      if(email){
        // 邮箱校验
        var reg = /\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
        let isok= reg.test(email);
        if(!isok) {
          new Noty({
            layout:'topCenter',
            theme: 'bootstrap-v4',
            text: '邮箱格式不正确!',
            progressBar:false,
            timeout:1000
          }).show().setType('warning');
          return false;
        }
      }
      if(!password){
        new Noty({
            layout:'topCenter',
            theme: 'bootstrap-v4',
            text: '密码不能为空!',
            progressBar:false,
            timeout:1000
        }).show().setType('warning');
        return false;
      }
      if(password.length < 6){
        new Noty({
            layout:'topCenter',
            theme: 'bootstrap-v4',
            text: '密码长度不低于6位数!',
            progressBar:false,
            timeout:1000
        }).show().setType('warning');
        return false;
      }
      if(!passwordCheck){
        new Noty({
            layout:'topCenter',
            theme: 'bootstrap-v4',
            text: '确认密码不能为空!',
            progressBar:false,
            timeout:1000
        }).show().setType('warning');
        return false;
      }
      if(passwordCheck != password){
        new Noty({
            layout:'topCenter',
            theme: 'bootstrap-v4',
            text: '两次密码不同!',
            progressBar:false,
            timeout:1000
        }).show().setType('warning');
        return false;
      }
      if(!code){
        new Noty({
            layout:'topCenter',
            theme: 'bootstrap-v4',
            text: '请输入验证码!',
            progressBar:false,
            timeout:1000
        }).show().setType('warning');
        return false;
      }

      $.ajax({
        url: '/personal/register',
        data:{account:account,email:email,password:password,code:code},
        type:'POST',
        success:function(res){
          console.log(res);
          if(res.code == 200){
            new Noty({
              layout:'topCenter',
              theme: 'bootstrap-v4',
              text: res.msg,
              progressBar:false,
              timeout:1000
            }).show().setType('success');
            SSwal.close()
          } else {
            new Noty({
              layout:'topCenter',
              theme: 'bootstrap-v4',
              text: res.msg,
              progressBar:false,
              timeout:1000
            }).show().setType('warning');
            return false;
          }
        }
      })
      return false;
    },
    onClose: () => {
      // 解决UC浏览器video层级太高遮罩弹窗的问题
      if(window.isVideoZindex){
        $('#dplayer').show();
      }
    }
  })
})

// 刷新验证码
$(document).on('click','.code-img', function(e){
    let captcha_src = `/captcha.html?t=${new Date( ).getTime()}`;
    $(this).attr('src',captcha_src)
  })

// 复制分享
// let clipboard = new ClipboardJS('.clipboard-select-binding')
function copyUrl(e){
  clipboard = new ClipboardJS('.clipboard-select-binding');
  url = window.location.href;
  $('#copyUrl').val('没穿衣裳，到浏览器打开，直接就能看，没套路：'+url)
  console.log(url)
  
  clipboard.on('success', function(e) {
    new Noty({
        layout:'topCenter',
        theme: 'bootstrap-v4',
        text: '已复制链接!',
        progressBar:false,
        timeout:1000
    }).show().setType('warning');
    e.clearSelection();
    clipboard.destroy();
  });
  clipboard.on('error', function(e) {
    new Noty({
        layout:'topCenter',
        theme: 'bootstrap-v4',
        text: '复制失败!',
        progressBar:false,
        timeout:1000
    }).show().setType('warning');
    clipboard.destroy();
  });
}

</script><script>
    var nativeShare = new NativeShare()
    url = window.location.href;
    let xtitle = $(".video-title")[0].innerText
    var shareData = {
        title: xtitle,
        desc: xtitle,
        // 如果是微信该link的域名必须要在微信后台配置的安全域名之内的。
        link: url,
        icon: '',
        // 不要过于依赖以下两个回调，很多浏览器是不支持的
        // success: function() {
        //     alert('分享成功')
        // },
        // fail: function() {
        //     alert('分享失败')
        // }
    }
    nativeShare.setShareData(shareData)

    function sharex(command) {
        try {
            nativeShare.call(command)
        } catch (err) {
            // 如果不支持，你可以在这里做降级处理
            // alert(err.message)
            copyUrl(this)
        }
    }

    function setTitle(title) {
        nativeShare.setShareData({
            title: title,
        })
    }
</script><script>
  function copyUrlxs(value){
    clipboard = new ClipboardJS('.clipboard-select-bindings')
    $('#copyUrl1').val(value)
    
    clipboard.on('success', function(e) {
      new Noty({
          layout:'topCenter',
          theme: 'bootstrap-v4',
          text: '已复制!',
          progressBar:false,
          timeout:1000
      }).show().setType('warning');
      e.clearSelection();
      clipboard.destroy();
    });
    clipboard.on('error', function(e) {
      new Noty({
          layout:'topCenter',
          theme: 'bootstrap-v4',
          text: '复制失败!',
          progressBar:false,
          timeout:1000
      }).show().setType('warning');
      clipboard.destroy();
    });
  }
</script>
<script type="text/javascript">
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