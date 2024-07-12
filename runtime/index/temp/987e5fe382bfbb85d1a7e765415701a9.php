<?php /*a:3:{s:50:"/www/wwwroot/pron/view/index/index/vodplay_pc.html";i:1692100850;s:43:"/www/wwwroot/pron/view/index/pc_header.html";i:1692084934;s:40:"/www/wwwroot/pron/view/index/search.html";i:1692087098;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#000">
<meta http-equiv="Cache-Control" content="no-transform"/>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="shortcut icon" href="/favicon.ico">
 <link rel="stylesheet" type="text/css" href="/static/css/bootstrap.min.css" />
 <link rel="stylesheet" type="text/css" href="/static/css/bootstrap-icons.css" />
 <link rel="stylesheet" type="text/css" href="/static/css/noty.css" />
 <link rel="stylesheet" type="text/css" href="/static/css/noty-themes/bootstrap-v4.css" />
 <link rel="stylesheet" type="text/css" href="/static/css/pc.css" />
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
        padding: 0.70rem 0;
        background-color: #000;
        /* background: linear-gradient(to right, #8e2bfa, #6b28ef); */
        position:fixed;
        top: 0;
        left: 0;
        z-index: 99;
        /* background-color: #1e1e1e; */
    }

    .v-s-logo {
        float: left;
        width: auto;
        /* margin-left: 0px; */
        margin-right: 10px;
        position: relative;
    }
    
    .v-s-logo img {
        float: left;
        width: 125px;
        max-height: 52px;
        position: absolute;
        top: 0px;
        left: 10px;
    }
    .v-s-logo-text{
        float: left;
        font-size: 26px;
        font-weight: 500;
        color: #fff;
    }
    .v-s-ul-time-vs_4a48f752db41520564b84da1f2631937{
        float: left;
        width: auto;
        max-width: 730px;
        margin-top: 2px;
        margin-left: 140px;
        white-space: nowrap;
        scrollbar-width: none; /* Firefox */
        -ms-overflow-style: none; /* IE 10+ */
        overflow:auto;
    }
    .v-s-ul-time-vs_4a48f752db41520564b84da1f2631937 a{
        text-decoration: none;
    }
    .v-s-ul-time-vs_4a48f752db41520564b84da1f2631937::-webkit-scrollbar{
        width: 0;
        height: 0;
        display: none;
        color: transparent;
    }
    .v-s-li-nav-link-vs_4a48f752db41520564b84da1f2631937{
        width: auto;
        height:35px;
        color: rgba(255, 255, 255, 0.7);
        font-size:17px;
        line-height: 35px;
        margin-left: 15px;
        display: inline-block;
        cursor: pointer;
    }
    .v-s-li-nav-link-vs_4a48f752db41520564b84da1f2631937:hover{
        font-size: 17px;
        color: rgba(255, 255, 255, 1);
        font-weight: bold;
    }
    .nav-menu-selected{
        font-size: 17px;
        color: rgba(255, 255, 255, 1);
        font-weight: bold;
    }
    .v-s-nav-search-box{
        float: right;
        width: 290px;
        height:40px;
        /* border: 1px solid rgb(25, 178, 66) */
    }
    .v-s-nav-search-box .search-input {
        float: left;
        background:rgba(255, 255, 255, 0.3);
        font-size: 14px;
        color: #fff;
        width: 170px;
        height: 35px;
        line-height: 35px;
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
        background:rgba(255, 255, 255, 0.3);
        font-size: 18px;
        color: rgba(255, 255, 255, 0.6);
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
    .v-s-nav-search-box .search-btn:hover{
        background:rgba(255, 255, 255, 0.5);
        color: rgba(255, 255, 2551);
    }
    .v-s-nav-search-box .search-person{
        float: left;
        width: auto;
        height: 35px;
        line-height: 35px;
        font-size: 22px;
        color: rgba(255, 255, 255, 0.6);
        margin-left: 20px;
        cursor: pointer;
    }
    .v-s-nav-search-box .search-person:hover{
        color:rgba(255, 255, 255, 1);
    }
    .v-s-nav-search-box .search-person{
        float: left;
        width: auto;
        height: 35px;
        line-height: 35px;
        font-size: 22px;
        color: rgba(255, 255, 255, 0.6);
        margin-left: 20px;
        cursor: pointer;
    }
    .v-s-nav-search-box .search-person:hover{
        color:rgba(255, 255, 255, 1);
    }

    .item-box .pre-eye {
        text-align: left !important;
        padding-left: 10px !important;
    }

    .item-box .rank-a {
        border-radius: 6px;
    }
</style>
<title>正在播放：<?php echo htmlentities($vodlist['title']); ?></title>
</head>
<body><div class="v-s-nav-box-h"><div class="main-box"><a href="/"><div class="v-s-logo"><img src="/static/images/logo.svg"><!-- <div class="v-s-logo-text">FaceShow</div> --></div></a><div class="v-s-ul-time-vs_4a48f752db41520564b84da1f2631937"><a href="/"><div class="v-s-li-nav-link-vs_4a48f752db41520564b84da1f2631937">首页</div></a>
<?php if(is_array($menulist) || $menulist instanceof \think\Collection || $menulist instanceof \think\Paginator): $i = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
<a href="<?php echo url('index/category',['category_id'=>$menu['id']]); ?>"><div class="v-s-li-nav-link-vs_4a48f752db41520564b84da1f2631937 <?php if($category_id == $menu['id']): ?>nav-menu-selected<?php endif; ?>"><?php echo htmlentities($menu['title']); ?></div></a>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div><div class="v-s-nav-search-box"><input class="search-input" id="search_input" type="search" onfocus="onfocusSearch()" oninput="oninputSearch()" onchange="onchangeSearch()" placeholder="请输入关键词..." value=""/><div class="search-btn" onclick="search()"><i class="bi bi-search"></i></div><a href="/personal"><!-- <div class="search-person" class="search-person" data-toggle="tooltip" title="登录"><i class="bi bi-person-circle"></i></div> --><div class="search-person" class="search-person"><i class="bi bi-person-circle"></i></div></a><a href="/gbooks"><!-- <div class="search-person" data-toggle="tooltip" title="留言"><i class="bi bi-chat-right-text"></i></div> --><div class="search-person"><i class="bi bi-chat-right-text"></i></div></a></div></div></div><!-- 标题栏bp -->
<script>
    var searchInputActive = false;
    var searchInputval = '';

    // input 获取焦点时触发
    function onfocusSearch(e){
        searchInputActive = true
    }
    // input 输入值发生变化时触发
    function oninputSearch(e){
        let dom = $('#search_input')
        searchInputval = dom.val()
        
    }
    // input 失去焦点时触发
    function onchangeSearch(){
        searchInputActive = false
    }

    // input 监听回车事件
    $("#search_input").keydown(function (e){
        // 当 keyCode 是13时,是回车操作
    if (e.keyCode == 13){
        // 编写业务代码...
        search()
        // 取消之前的keydown事件
        e.preventDefault();
    }
    })

    // 搜索
    function search(e){
        let val = $('#search_input').val()
        if(!val){
            new Noty({
                layout:'topCenter',
                theme: 'bootstrap-v4',
                text: '关键词不能为空!',
                progressBar:false,
                timeout:1000
            }).show().setType('alert');
            return
        }
        window.location.replace(`/index/index/search/?keyword=${val}`)
    }

// 菜单栏滚动条自动滚动到菜单栏选择出
setTimeout(function(){
    try {
        let menu = 'v-s-ul-time-vs_c6e07a204a55cc4e4222e1b499c7dd8e';
        let nav = $('.nav-menu-selected');
        let offset = nav.offset(); // 屏幕坐标
        let position = nav.position(); // 相对于父元素定位，父元素须设置css position:relative;属性
        let width = $(`.${menu}`).width();
        if(position.left + nav.width() > width){
            $(`.${menu}`).scrollLeft(position.left - (width/2))
        }
    } catch (e) {}
},100)
</script><link rel="stylesheet" type="text/css" href="/static/css/videoweb/videoplay.css?v=1.01"><style type="text/css">
.vs_e5b61b92d6d5f36997db8d5b94c006ac-item-vide-n{
  float: left;
  width: 180px;
  height:auto;
  margin-top: 10px;
  margin-left: 8px;
  margin-right: 8px;
  margin-bottom: 10px;
  position: relative;
  /* border:1px solid #f60; */
}
.vs_e5b61b92d6d5f36997db8d5b94c006ac-item-vide-n a{
  color: #333;
}
</style><div class="content-box"><div class="item-box"><div class="main-box"><div class="ran-box"><div class="video-title"><?php echo htmlentities($vodlist['title']); ?></div><div class="tips-remind" style="margin-bottom: 10px;"><span style="color: red;">本站域名：YY78888.COM</span><span style="color: #007bff;" class="clipboard-select-bindings" onclick="copyUrlxs('http://YY78888.COM')" data-clipboard-target="#copyUrl1"> 复制</span> 永久发布页 <a href="http://YY78888.COM">进入</a> 永久访问二维码 <a href="https://ks44491.com:29875/static/yy/保存二维码.png" download>保存</a> 强荐使用谷歌浏览器<a href="https://www.google.cn/intl/zh-CN/chrome/" target="_blank"> 下载</a> 本站万能帮助中心 <a href="../index/help">进入</a></div><div id="dplayer" class="video-play-box"></div><div class="video-b-btn-box"><div class="ul-box"><div class="col-b"><a href="/personal/recharge" target="_blank"><div class="col-ico"><i class="bi bi-gem" style="color: #f60;"></i></div><div class="col-text">VIP</div></a></div></div><div class="ul-box"><div class="col-b" id="video-up-btn" onclick="requestReport(1,this)"><div class="col-ico"><i class="bi bi-hand-thumbs-up"></i></div><div class="col-text">433</div></div></div><div class="ul-box"><div class="col-b" id="video-down-btn" onclick="requestReport(2,this)"><div class="col-ico"><i class="bi bi-hand-thumbs-down"></i></div><div class="col-text">1825</div></div></div><div class="ul-box"><div class="col-b" onclick="requestReport(0,this)" style="color: "><div class="col-ico"><i class="bi bi-heart"></i></div><div class="col-text">104</div></div></div><div class="ul-box"><input id="copyUrl" value="" class="input-copy-url" style="opacity: 0;"><div class="col-b clipboard-select-binding" onclick="copyUrl(this)" data-clipboard-target="#copyUrl"><div class="col-ico"><i class="bi bi-cursor"></i></div><div class="col-text">分享</div></div></div></div></div></div></div><div class="item-box" style="display: none;"><div class="main-box"><div class="ran-box" style="margin-top:0px"><!-- 文字广告模板1 --><a href="#" target="_blank"><div class="ad-text-box-1"><div class="title">本站广告位投放请联络</div><div class="description">💖💖💖 Telegram：@adporns 💖💖💖</div></div></a><style type="text/css">
    .ad-text-box-1{
        /* color: #1b73f9 */
        color:#333
    }
    .ad-text-box-1 .title{
        font-size:16px;
        text-align: center
    }
    .ad-text-box-1 .description{
        font-size:14px;
        text-align: center
    }
</style></div></div></div><!-- <div class="item-box"><div class="main-box"><div class="ran-box" style="margin-top:0px">
        ad_template
      </div></div></div> --><div class="item-box" style="display: none;"><div class="main-box"><div class="ran-box"><!-- 文字bp模板1 --><a href="#" target="_blank"><div class="ad-text-box-2"><div class="title">本站推荐【同城免费约炮👉🏻真人社区】</div><div class="description">💙💙💙 点击免费下载约炮神器APP 💙💙💙</div></div></a><style type="text/css">
    .ad-text-box-2{
        font-weight: 500;
        /* color: #1b73f9 */
    }
    .ad-text-box-2 .title{
        font-size:16px;
        text-align: center
    }
    .ad-text-box-2 .description{
        font-size:14px;
        text-align: center
    }
</style></div></div></div><!--标签区域开始--><style type="text/css">
    .btn{
      padding: 0.275rem 0.65rem !important;
      margin: 0.2rem;
  }
  </style>
  <div class="item-box">
  <div class="main-box"><div class="ran-box">
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
</div></div>
  
  </div><!--标签区域结束-->
  
  <!-- 猜你喜欢 --><div class="item-box"><div class="main-box"><div class="ran-box"><div class="item-title-box"><div class="title-name">猜你喜欢</div></div>
  <?php if(is_array($guesslist) || $guesslist instanceof \think\Collection || $guesslist instanceof \think\Paginator): $i = 0; $__LIST__ = $guesslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$guess): $mod = ($i % 2 );++$i;?>
  <div class="vs_e5b61b92d6d5f36997db8d5b94c006ac-item-vide-n"><a href="<?php echo url('index/videoplay',['category_id'=>$category_id,'category_child_id'=>$category_child_id,'vid'=>$guess['id']]); ?>"><div class="rank-a" data-vid="38304" data-sl="<?php echo htmlentities($guess['video']); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($guess['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position: relative; z-index: 4; padding-left: 15px; color: #fff;"><?php echo htmlentities($guess['create_time']); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities($guess['eye']); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($guess['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div></div><div class="rank-title"><?php echo htmlentities($guess['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div>
<input id="copyUrl1" value="" style="opacity: 0;"></div><!-- 登录窗口的HTML代码 --><div class="main-box accordion_login" style="display: none;"><div class="login-ran-box"><div class="form-group"><div class="input-box"><input type="text" name="login_account" placeholder="账号"/></div><div class="input-box"><input type="password" name="login_password" placeholder="密码（6-16位字符）"/></div><div class="tpis-box"><span>没有账号？</span><span style="color:#007bff;cursor: pointer;" class="register-choose">立即注册</span></div></div></div></div><!-- 注册窗口的HTML代码 --><div class="main-box accordion_register" style="display: none;"><div class="login-ran-box"><div class="form-group"><div class="input-box"><input type="text" name="register_account" placeholder="账号"/></div><div class="input-box"><input type="text" name="register_email" placeholder="邮箱 [选填]"/></div><div class="input-box"><input type="password" name="register_password" placeholder="密码（6-16位字符）"/></div><div class="input-box"><input type="password" name="register_password_check" placeholder="确认密码"/></div><div class="input-box"><input type="text" name="register_code" style="width: calc(100% - 180px);" placeholder="请输入验证码"/><img src="/captcha.html?t=1692016421" class="code-img captcha"></div><div class="tpis-box"><span>已有账号？</span><span style="color:#007bff;cursor: pointer;" class="login-choose">立即登录</span></div></div></div></div>
  <!-- <script type="text/javascript" src="/static/js/flv.min.js"></script> -->
  <script type="text/javascript" src="/static/js/hls.min.js"></script>
  <script type="text/javascript" src="/static/js/DPlayer.min.js"></script>
  <!-- <script type="text/javascript" src="/static/js/DPlayer.js"></script> -->
  <script>
let data={}
data.video = JSON.parse(atob("<?php echo htmlentities($data); ?>"));
</script>
<script type="text/javascript" src="/static/js/videoweb/videoplay.js?v=1.01"></script><script>
// 刷新验证码
$(document).on('click','.code-img', function(e){
    let captcha_src = `/captcha.html?t=${new Date( ).getTime()}`;
    $(this).attr('src',captcha_src)
  })

// 复制分享
let clipboard = new ClipboardJS('.clipboard-select-binding')
function copyUrl(e){
  clipboard = new ClipboardJS('.clipboard-select-binding')
  url = window.location.href
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
</script><style>
    .x_tap_top {
      display: block;
      position: fixed;
      right: 10px;
      bottom: 80px;
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
</style><script type="text/javascript" src="/static/js/utils_pc.js"></script><script>
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
    // setInterval(function() {
    //     debuggerCheck();
    //   }, 2000);
    //   var debuggerCheck = function() {
    //     function doCheck(a) {
    //       if (('' + a / a)['length'] !== 1 || a % 20 === 0) {
    //         (function() {}['constructor']('debugger')());
    //       } else {
    //         (function() {}['constructor']('debugger')());
    //       }
    //       doCheck(++a);
    //     }
    //     try {
    //       doCheck(0);
    //     } catch (err) {}
    //   };
    //   debuggerCheck();

        // 无限的 debugger 兼容性好
    setInterval(function() {
        debuggerCheck();
      }, 2000);
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