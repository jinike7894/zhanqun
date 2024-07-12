<?php /*a:2:{s:48:"D:\wamp\www\pron\view\index\index\search_pc.html";i:1692086213;s:42:"D:\wamp\www\pron\view\index\pc_header.html";i:1692084932;}*/ ?>
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
<title>“ <?php echo htmlentities($keyword); ?> ” 的搜索结果</title>
</head>
<body>
<div class="v-s-nav-box-h"><div class="main-box"><a href="/"><div class="v-s-logo"><img src="/static/images/logo.svg"><!-- <div class="v-s-logo-text">FaceShow</div> --></div></a>
<div class="v-s-ul-time-vs_4a48f752db41520564b84da1f2631937">
<a href="/"><div class="v-s-li-nav-link-vs_4a48f752db41520564b84da1f2631937 nav-menu-selected">首页</div></a>
<?php if(is_array($menulist) || $menulist instanceof \think\Collection || $menulist instanceof \think\Paginator): $i = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
<a href="<?php echo url('index/category',['category_id'=>$menu['id']]); ?>"><div class="v-s-li-nav-link-vs_4a48f752db41520564b84da1f2631937"><?php echo htmlentities($menu['title']); ?></div></a>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div><div class="v-s-nav-search-box"><input class="search-input" id="search_input" type="search" onfocus="onfocusSearch()" oninput="oninputSearch()" onchange="onchangeSearch()" placeholder="请输入关键词..." value=""/><div class="search-btn" onclick="search()"><i class="bi bi-search"></i></div><a href="/personal"><!-- <div class="search-person" class="search-person" data-toggle="tooltip" title="登录"><i class="bi bi-person-circle"></i></div> --><div class="search-person" class="search-person"><i class="bi bi-person-circle"></i></div></a><a href="/gbooks"><!-- <div class="search-person" data-toggle="tooltip" title="留言"><i class="bi bi-chat-right-text"></i></div> --><div class="search-person"><i class="bi bi-chat-right-text"></i></div></a></div></div></div>
<!-- 标题栏bp -->
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
        let menu = 'v-s-ul-time-vs_4a48f752db41520564b84da1f2631937';
        let nav = $('.nav-menu-selected');
        let offset = nav.offset(); // 屏幕坐标
        let position = nav.position(); // 相对于父元素定位，父元素须设置css position:relative;属性
        let width = $(`.${menu}`).width();
        if(position.left + nav.width() > width){
            $(`.${menu}`).scrollLeft(position.left - (width/2))
        }
    } catch (e) {}
},100)
</script>
<div class="content-box"><div class="item-box"><div class="main-box"><div class="ran-box"><div class="item-title-box"></div><!-- 子分类 -->
<div class="v-s-ul-category-tag">
“ <?php echo htmlentities($keyword); ?> ” 的搜索结果
</div>
<?php if(is_array($videolist) || $videolist instanceof \think\Collection || $videolist instanceof \think\Paginator): $i = 0; $__LIST__ = $videolist;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$video): $mod = ($i % 2 );++$i;?>
<div class="vs_e8fc7074f617360f80e20419901b62df-item-vide-n"><a href="<?php echo url('index/videoplay',['category_id'=>$video['category_id'],'category_child_id'=>$video['category_child_id'],'vid'=>$video['id']]); ?>"><div class="rank-a" data-vid="<?php echo htmlentities($video['id']); ?>" data-sl="<?php echo htmlentities($video['video']); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($video['pic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position: relative; z-index: 4; padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($video['create_time'])? strtotime($video['create_time']) : $video['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities($video['eye']); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($video['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div></div><div class="rank-title"><?php echo htmlentities($video['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
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
    .pagination-box .pagination .page-item input {
        width: 60px;
        text-align: center;
    }
    .pagination-box ul li a{
        user-select:none;
    }
    .pagination-box ul li a:focus{
        box-shadow:0 0 0 0 !important;
    }
    .last_page_p{
        color:#666;
        margin-top: 6px;
        margin-left: 8px;
    }
</style></div></div></div></div></div><style type="text/css">
    .vs_e8fc7074f617360f80e20419901b62df-item-vide-n{
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
    .vs_e8fc7074f617360f80e20419901b62df-item-vide-n a{
      color: #333;
    }

    /* 子分类 */
    .v-s-ul-category-tag{
        float: left;
        width: 100%;
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
        background: rgba(0, 0, 0, 0.08);
        color: rgba(0, 0, 0, 0.7);
        font-size:14px;
        line-height: 26px;
        margin-right: 6px;
        padding:0px 10px;
        border-radius: 13px;
        margin-bottom:15px;
        display: inline-block;
        cursor: pointer;
    }
    .v-s-li-nav-link-tag:active{
        color: rgba(0, 0, 0, 1);
    }
    .nav-category-tag-selected{
        color: rgba(0, 0, 0, 0.9);
        background: rgba(0, 0, 0, 0.2);
    }
    
</style><style>
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
    </script></body></html>