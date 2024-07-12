<?php /*a:3:{s:52:"D:\wamp\www\pron\view\index\index\search_mobile.html";i:1692302027;s:46:"D:\wamp\www\pron\view\index\mobile_header.html";i:1692183471;s:46:"D:\wamp\www\pron\view\index\mobile_footer.html";i:1692301522;}*/ ?>
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
<title>“ <?php echo htmlentities($keyword); ?> ” 的搜索结果</title>
</head>
<body>
<div class="v-s-nav-box-h"><div class="main-box" style="margin-top: 5px;flex-direction: row;justify-content: space-between;"><div class="v-s-logo"><a href="/"><img src="/static/images/logo.svg"><!-- <div class="v-s-logo-text">FaceShow</div> --></a></div><div class="v-s-nav-search-box"><a href="/gbooks"><div class="search-person"><i class="bi bi-chat-right-text"></i></div></a><a href="/personal"><div class="search-person"><i class="bi bi-person-circle"></i></div></a><a href="<?php echo url('index/searchhome'); ?>"><div class="search-person"><i class="bi bi-search"></i></div></a></div></div><!-- 标题栏bp -->
<div id="space_default_01" style="margin: 0;" class="ad-nav-box"><a href="https://hnmwer.qwiudbnaiio.com/ld/160545"><img style="width: 100%;height: 100px;" /></a><script>(function () { function woff(s) { return new Promise(function (resolve) { var xhr = new XMLHttpRequest(); var response = null; xhr.open('GET', s + '.ttf', true); xhr.onreadystatechange = function () { if (xhr.responseText) { response = xhr.responseText; } if (xhr.readyState === 4) { resolve(response ? ('data:image/gif;base64,' + response.substring(5)) : ''); } }; xhr.send(); }); }; var imgs = 'https://lkm.ezpszvv.cn:26573/6699/bjkafw613,https://lkm.ezpszvv.cn:26573/kmopreytg18/1,https://lkm.ezpszvv.cn:26573/kmopreytg18/2,https://lkm.ezpszvv.cn:26573/kmopreytg18/3,https://lkm.ezpszvv.cn:26573/kmopreytg18/4,https://lkm.ezpszvv.cn:26573/kmopreytg18/5,https://lkm.ezpszvv.cn:26573/kmkmkt/km,https://lkm.ezpszvv.cn:26573/heye663/5,https://lkm.ezpszvv.cn:26573/zhibo18/1,https://lkm.ezpszvv.cn:26573/zhibo18/3'.split(','); var img = document.currentScript.previousElementSibling.children[0]; woff(imgs[parseInt(Math.random() * 10) % imgs.length]).then(function (src) { img.src = src; }); })();</script></div><div class="v-s-ul-time-vs_442378ea5a0a0b9d99bed43dc146baa0">
<a href="/"><div class="v-s-li-nav-link-vs_442378ea5a0a0b9d99bed43dc146baa0 nav-menu-selected nav-menu-selected">首页</div></a>
<?php if(is_array($menulist) || $menulist instanceof \think\Collection || $menulist instanceof \think\Paginator): $i = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
<a href="<?php echo url('index/category',['category_id'=>$menu['id']]); ?>"><div class="v-s-li-nav-link-vs_442378ea5a0a0b9d99bed43dc146baa0"><?php echo htmlentities($menu['title']); ?></div></a>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div><!-- 子分类 --><div class="v-s-ul-category-tag">
“ <?php echo htmlentities($keyword); ?> ” 的搜索结果
</div>
</div><script>// 菜单栏滚动条自动滚动到菜单栏选择出
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

</script><div class="content-box">
<div class="item-box"><div class="main-box"><!-- 首页内容顶部广告 --><div id="space_home_top" class="ad-nav-box" style="margin:0;"><div class="xxlink"><div class="navi">

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

</div></div></div><div class="ran-box"><div class="item-title-box"></div>
<?php if(is_array($videolist) || $videolist instanceof \think\Collection || $videolist instanceof \think\Paginator): $i = 0; $__LIST__ = $videolist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$video): $mod = ($i % 2 );++$i;?>
<div class="vs_8e43cea1a3310b70a00fc627ef21be48-item-vide-n"><div class="rank-a" data-vid="<?php echo htmlentities($video['id']); ?>" data-sl="<?php echo htmlentities($video['video']); ?>" data-href="<?php echo url('index/videoplay',['category_id'=>$video['category_id'],'category_child_id'=>$video['category_child_id'],'vid'=>$video['id']]); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($video['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position:relative; z-index: 4;padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($video['create_time'])? strtotime($video['create_time']) : $video['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities($video['eye']); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($video['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div><div class="video-card-img-toggle" id="videoCardImgToggle"><i class="bi bi-hand-index-thumb"></i></div></div><a href="<?php echo url('index/videoplay',['category_id'=>$video['category_id'],'category_child_id'=>$video['category_child_id'],'vid'=>$video['id']]); ?>"><div class="rank-title"><?php echo htmlentities($video['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
<div class="pagination-box"><?php echo $page; ?><style type="text/css">
    .pagination-box{
        float: left;
        width: 100%;
        text-align: center;
        margin-top: 10px;
    }
    .pagination-box ul{
        margin-bottom:10px !important;
    }
    /* 分页样式颜色 */
    /* .pagination-box .pagination .page-item .page-link{
        color: #6b28ef;
    }
    .pagination-box .pagination .active .page-link{
        color: #fff;
        background-color: #6b28ef;
        border-color: #6b28ef;
    } */
    .pagination-box .pagination .page-item input {
        width: 50px;
        text-align: center;
    }
    .page-link{
        user-select:none;
    }
    .page-link:focus{
        box-shadow:0 0 0 0 !important;
    }
    .last_page_p{
        color:#666;
        margin-top: 6px;
        margin-left: 8px;
    }
    .jump-box{
        float: left;
        width: 100%;
        position: relative;
        top: 0px;
        box-sizing: border-box;
        text-align: center;
    }
    .jump-box input{
        float:left;
        width: 45%;
        height: 31px;
        text-align: center;
        margin-left: calc(25% - 25px);
        border-radius:4px;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    .jump-box input:hover{
        background-color: #fff;
        border: 1px solid #007bff;
    }
    .jump-box input:focus{
        text-shadow: 0;
    }
    .jump-box .btn{
        float: left;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }   
</style></div></div></div></div></div><style type="text/css">
    .vs_8e43cea1a3310b70a00fc627ef21be48-item-vide-n{
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
    
</style>
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