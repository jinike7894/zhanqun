<?php /*a:3:{s:51:"D:\phpEnv\www\pron\view\index\index\searchhome.html";i:1720783977;s:48:"D:\phpEnv\www\pron\view\index\mobile_header.html";i:1720853584;s:48:"D:\phpEnv\www\pron\view\index\mobile_footer.html";i:1720816159;}*/ ?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="applicable-device" content="mobile">
    <link rel="icon" href="static/app-icon.png">
    <link rel="apple-touch-icon" href="static/app-icon.png">
    <style type="text/css">
        a {
            text-decoration: none;
            color: black ;
        }

        a:hover {
            text-decoration: none;
            cursor: pointer
        }

        /*a标签鼠标经过mouseover时的样式*/
        a:link {
            text-decoration: none;
            cursor: pointer;
        }

        /*a标签未访问时的样式*/
        a:visited {
            text-decoration: overline;
            cursor: pointer
        }

        /*a标签访问过之后样式*/
        a:active {
            text-decoration: overline;
            cursor: pointer
        }

        /*a标签鼠标按下mousedown时的样式*/
        /*图标css*/
        .xxlink {
            width: 100%;
            background: #FFFFFF;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            border: 2px solid #FFFFFF;
        }

        .xxlink h3 {
            width: 95%;
            padding: 0 2.5%;
            font-size: 18px;
            line-height: 26px;
            background: #fff;
            margin-bottom: 12px;
            color: #000000;
        }

        .navi {
            font-size: 0;
            text-align: center
        }

        .appico {
            width: 16%;
            margin: 5px 0px;
            height: auto;
            box-sizing: border-box;
            display: inline-block;
            position: relative;
        }

        .appico p {
            width: 100%;
            height: 19px;
            line-height: 22px;
            text-align: center;
            font-size: 11px;
            margin: 0;
            color: #000000;
            overflow: hidden;
        }

        .naicon {
            border-radius: 5px;
            overflow: hidden;
            font-size: 0;
            margin: .1px
        }

        .appico img {
            border-radius: 1px;
            width: 100%
        }

        .appico:hover .btn-raised {
            -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, .24), 0 0 0 0 rgba(0, 0, 0, .4), 0 0 0 0 rgba(0, 0, 0, .22);
            box-shadow: 0 0 0 0 rgba(0, 0, 0, .24), 0 0 0 0 rgba(0, 0, 0, .4), 0 0 0 0 rgba(0, 0, 0, .22)
        }

        .btnx {
            padding: 8px 2px !important;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="/static/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/bootstrap-icons.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/noty.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/noty-themes/bootstrap-v4.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/mobile.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/swiper-bundle.min.css" />
    <script type="text/javascript" src="/static/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="/static/js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="/static/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/static/js/clipboard.min.js"></script>
    <script type="text/javascript" src="/static/js/lozad.min.js"></script>
    <script type="text/javascript" src="/static/js/sweetalert2.js"></script>
    <script type="text/javascript" src="/static/js/noty.min.js"></script>
    <script type="text/javascript" src="/static/js/qrcode.min.js"></script>
    <script type="text/javascript" src="/static/js/bylqwya.js"></script>
    <style type="text/css">
        .v-s-nav-box-h {
            width: 100%;
            background: linear-gradient(90deg, #243954 0%, #1C2940 100%);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .main-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 .1rem;
        }

        .v-s-nav-search-box {
            flex-grow: 1;
            display: flex;
            justify-content: space-between;
            padding: 0 8px;
        }

        .v-s-logo img {
            max-width: 160px;
            height: 30px;
        }

        .left-img {
            width: 23px;
        }

        .search-person {
            margin-left: 25px;
            width: 100px;
            height: 24px;
            border-radius: 12px;
            background-color: #F4F4F4;
            display: flex;
            align-items: center;
        }

        .s-text {
            margin: 0 8px;
        }

        .bi {
            color: #6C6D6E;
        }

        .top-nav {
            display: flex;
            padding: 11px 4px;
            overflow-y: auto;
        }

        .top-nav a {
            flex: 0 0 auto;
        }

        .nav-item {
            padding: 0 24px;
            height: 23px;
            line-height: 23px;
            text-align: center;
            color: #fff;
        }

        .nav-menu-selected {
            background: linear-gradient(69.79deg, #46B1FF 22.69%, #2674F5 81.62%);
            border-radius: 4px;
        }

        #swiper-banner {
            height: 115px;
            padding-bottom: 12px;
            box-sizing: content-box;
            position: relative;
        }

        #swiper-banner a {
            display: block;
            height: 115px;
            width: 322px;
            border-radius: 34px;
            overflow: hidden;
            transition: height .3s
        }

        #swiper-banner a img {
            width: 322px;
            height: 115px;
        }

        #swiper-banner .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
            transform: translateX(0)
        }

        #swiper-banner .swiper-slide-active a {
            width: 322px
        }

        #swiper-banner .swiper-slide-prev {
            transform: translateX(45px)
        }

        #swiper-banner .swiper-slide-prev a {
            height: 115px
        }

        #swiper-banner .swiper-slide-next {
            transform: translateX(-45px)
        }

        #swiper-banner .swiper-slide-next a {
            height: 115px
        }

        .marquee-wrap {
            height: 32px;
            width: 100%;
            background-color: #D4E9FB;
            color: #074995;
            padding-top: 5px;
            padding-right: 8px;
        }

        .marquee-box {
            display: flex;
            align-items: center;
        }

        .marquee-box .icon-speaker {
            display: flex;
            width: 32px;
            margin: auto;
            justify-content: center;
        }
        .icon-speaker .not{
            color: #2674F5;
        }

        .marquee-box .container-main {
            flex: 1;
            font-size: 12px;
            overflow: hidden
        }

        .marquee-box p {
            display: inline-block;
            padding-left: 100%;
            white-space: nowrap;
            font-size: 14px;
            animation: vMarquee 10s linear infinite;
            margin-bottom: 0;
        }



        @keyframes vMarquee {
            0% {
                transform: translate3d(0, 0, 0)
            }

            100% {
                transform: translate3d(-100%, 0, 0)
            }
        }
        .swiper{
            overflow: hidden;
        }
        .conter-wrap{
            padding: 7px;
            text-align: center;
        }
        .ad-menu-wrap{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .ad-menu-item{
            background-color: #f4f4f4;
            text-align: center;
            color: #7E8183;
            font-size: 10px;
            padding: 5px 8px;
            flex: 0 1 auto;
            border-radius: 4px;
        }
        .ad-menu-item.active {
            background: linear-gradient(93.06deg, #46B1FF 9.76%, #2674F5 94.75%);
            color: #fff;
        }
        #swiper-ad .swiper-slide{
            padding-left: 5px;
        }
        .ad-t{
            font-size: 15px;
        }
        .ad-conter{
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            row-gap: 5px;
            column-gap: 18px;
            padding:  15px 0;
        }
        .ad-conter img {
            width: 57px;
            height: 57px;
            border-radius: 4px;
        }
        .ad-conter a div {
            font-size: 10px;
            color: #98999A;
            margin-top: 4px;
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
<title>热门搜索</title>
</head>
<body>
<div class="v-s-nav-box-h"><div class="main-box" style="margin-top: 5px;flex-direction: row;justify-content: space-between;"><div class="v-s-logo"><a href="/"><img src="/static/images/logo.svg"><!-- <div class="v-s-logo-text">FaceShow</div> --></a></div><div class="v-s-nav-search-box"><a href="/gbooks"><div class="search-person"><i class="bi bi-chat-right-text"></i></div></a><a href="/personal"><div class="search-person"><i class="bi bi-person-circle"></i></div></a><a href="/searchhome/<?php echo htmlentities($channel); ?>.html"><div class="search-person"><i class="bi bi-search"></i></div></a></div></div><!-- 标题栏bp -->
<div class="v-s-ul-time-vs_442378ea5a0a0b9d99bed43dc146baa0">
<a href="/"><div class="v-s-li-nav-link-vs_442378ea5a0a0b9d99bed43dc146baa0 nav-menu-selected">首页</div></a>
<?php if(is_array($menulist) || $menulist instanceof \think\Collection || $menulist instanceof \think\Paginator): $i = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
<a href="/category/<?php echo htmlentities($channel); ?>.html?category_id=<?php echo htmlentities($menu['id']); ?>"><div class="v-s-li-nav-link-vs_442378ea5a0a0b9d99bed43dc146baa0"><?php echo htmlentities($menu['title']); ?></div></a>
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

</script><div class="content-box"><div class="item-box"><div class="main-box"><div class=""><div class="search-home"><div class="title">牢记本站域名: YY78888.COM</br></br></div><div class="search-form"><!-- 启用搜索记录 --><!-- <div class="search-content search-content-history"> --><div class="search-content"><div class="input"><input type="text" name="keyword" placeholder="" id="search_input" type="search" onfocus="onfocusSearch()" oninput="oninputSearch()" onchange="onchangeSearch()"><div class="input-border"><div role="separator" class="van-divider van-divider--hairline"></div></div></div><div class="button" onclick="search()">搜索</div></div><div class="search-history-content" style="display: none"><div class="title"><div class="title-text">搜索历史</div><div class="delete-all-history" @click="handleDelAll">删除历史记录</div></div><div class="text"><div class="history-text">搜索记录</div><i class="bi bi-trash3"></i></div><div class="text"><div class="history-text">搜索记录</div><i class="bi bi-trash3"></i></div></div></div><div class="search-tag-content"><div class="search-tags"><div class="title"><i class="bi bi-fire"></i> 热搜排行榜 </div><div class="tags tags-rect"><span class="badge badge-light badge-light-click" data-keyword="乱伦">乱伦</span><span class="badge badge-light badge-light-click" data-keyword="学生">学生</span><span class="badge badge-light badge-light-click" data-keyword="内射">内射</span><span class="badge badge-light badge-light-click" data-keyword="强奸">强奸</span><span class="badge badge-light badge-light-click" data-keyword="人妻">人妻</span><span class="badge badge-light badge-light-click" data-keyword="巨乳">巨乳</span><span class="badge badge-light badge-light-click" data-keyword="自慰">自慰</span><span class="badge badge-light badge-light-click" data-keyword="老师">老师</span><span class="badge badge-light badge-light-click" data-keyword="偷情">偷情</span><span class="badge badge-light badge-light-click" data-keyword="萝莉">萝莉</span></div></div><div class="search-tags"><div class="title"><i class="bi bi-heart-fill"></i> 动作 </div><div class="tags tags-rect"><span class="badge badge-light badge-light-click" data-keyword="口交">口交</span><span class="badge badge-light badge-light-click" data-keyword="肛交">肛交</span><span class="badge badge-light badge-light-click" data-keyword="器具">器具</span><span class="badge badge-light badge-light-click" data-keyword="口爆">口爆</span><span class="badge badge-light badge-light-click" data-keyword="颜射">颜射</span><span class="badge badge-light badge-light-click" data-keyword="吞精">吞精</span><span class="badge badge-light badge-light-click" data-keyword="双龙入洞">双龙入洞</span><span class="badge badge-light badge-light-click" data-keyword="尿尿">尿尿</span><span class="badge badge-light badge-light-click" data-keyword="捆绑">捆绑</span><span class="badge badge-light badge-light-click" data-keyword="性虐">性虐</span><span class="badge badge-light badge-light-click" data-keyword="内射">内射</span><span class="badge badge-light badge-light-click" data-keyword="潮吹">潮吹</span><span class="badge badge-light badge-light-click" data-keyword="深喉">深喉</span><span class="badge badge-light badge-light-click" data-keyword="拳交">拳交</span><span class="badge badge-light badge-light-click" data-keyword="偷窥">偷窥</span><span class="badge badge-light badge-light-click" data-keyword="自慰">自慰</span><span class="badge badge-light badge-light-click" data-keyword="强奸">强奸</span></div></div><div class="search-tags"><div class="title"><i class="bi bi-heart-fill"></i> 场景 </div><div class="tags tags-rect"><span class="badge badge-light badge-light-click" data-keyword="车震">车震</span><span class="badge badge-light badge-light-click" data-keyword="教室">教室</span><span class="badge badge-light badge-light-click" data-keyword="大学">大学</span><span class="badge badge-light badge-light-click" data-keyword="part">part</span><span class="badge badge-light badge-light-click" data-keyword="厕所">厕所</span><span class="badge badge-light badge-light-click" data-keyword="酒店">酒店</span><span class="badge badge-light badge-light-click" data-keyword="游泳">游泳</span><span class="badge badge-light badge-light-click" data-keyword="野外">野外</span><span class="badge badge-light badge-light-click" data-keyword="海滩">海滩</span><span class="badge badge-light badge-light-click" data-keyword="club">club</span><span class="badge badge-light badge-light-click" data-keyword="商场">商场</span><span class="badge badge-light badge-light-click" data-keyword="试衣">试衣</span><span class="badge badge-light badge-light-click" data-keyword="地铁">地铁</span><span class="badge badge-light badge-light-click" data-keyword="飞机">飞机</span><span class="badge badge-light badge-light-click" data-keyword="火车">火车</span><span class="badge badge-light badge-light-click" data-keyword="游轮">游轮</span><span class="badge badge-light badge-light-click" data-keyword="浴室">浴室</span><span class="badge badge-light badge-light-click" data-keyword="按摩">按摩</span></div></div><div class="search-tags"><div class="title"><i class="bi bi-heart-fill"></i> 角色 </div><div class="tags tags-rect"><span class="badge badge-light badge-light-click" data-keyword="二次元">二次元</span><span class="badge badge-light badge-light-click" data-keyword="护士">护士</span><span class="badge badge-light badge-light-click" data-keyword="学生">学生</span><span class="badge badge-light badge-light-click" data-keyword="老师">老师</span><span class="badge badge-light badge-light-click" data-keyword="继母">继母</span><span class="badge badge-light badge-light-click" data-keyword="姐弟">姐弟</span><span class="badge badge-light badge-light-click" data-keyword="父女">父女</span><span class="badge badge-light badge-light-click" data-keyword="情侣">情侣</span><span class="badge badge-light badge-light-click" data-keyword="军人">军人</span><span class="badge badge-light badge-light-click" data-keyword="警察">警察</span><span class="badge badge-light badge-light-click" data-keyword="犯人">犯人</span><span class="badge badge-light badge-light-click" data-keyword="房东">房东</span><span class="badge badge-light badge-light-click" data-keyword="儿媳">儿媳</span><span class="badge badge-light badge-light-click" data-keyword="丈母娘">丈母娘</span><span class="badge badge-light badge-light-click" data-keyword="邻居">邻居</span><span class="badge badge-light badge-light-click" data-keyword="明星">明星</span></div></div><div class="search-tags"><div class="title"><i class="bi bi-heart-fill"></i> 国产厂商 </div><div class="tags tags-rect"><span class="badge badge-light badge-light-click" data-keyword="麻豆">麻豆</span><span class="badge badge-light badge-light-click" data-keyword="SWAG">SWAG</span><span class="badge badge-light badge-light-click" data-keyword="扣扣">扣扣</span><span class="badge badge-light badge-light-click" data-keyword="溏心Vlog">溏心Vlog</span><span class="badge badge-light badge-light-click" data-keyword="萝莉社">萝莉社</span><span class="badge badge-light badge-light-click" data-keyword="JVID">JVID</span><span class="badge badge-light badge-light-click" data-keyword="乌托邦">乌托邦</span><span class="badge badge-light badge-light-click" data-keyword="皇家华人">皇家华人</span><span class="badge badge-light badge-light-click" data-keyword="星空">星空</span><span class="badge badge-light badge-light-click" data-keyword="杏吧">杏吧</span><span class="badge badge-light badge-light-click" data-keyword="天美">天美</span></div></div></div></div></div></div></div></div><style type="text/css">
  body{
    background:#111
  }
  .search-home {
    padding: 10px 32px 32px;
    color: #fff;
  }

  .search-form {
    position: relative;
    max-width: 584px;
    margin: 0 auto;
  }

  .search-content {
    width: 100%;
    height: 40px;
    display: flex;
    background-color: #2e1c56;
    border-radius: 24px;
    overflow: hidden;
  }

  .search-content.search-content-history {
    border-radius: 24px 24px 0 0;
  }

  .search-content.search-content-history .input .input-border {
    margin-top: -5px;
    display: block;
    width: 100%;
    padding: 0 14px;
  }

  .search-content .search-content-history .input .input-border .van-divider {
    margin: 0;
    border-color: #4d6891;
  }

  .search-content .input {
    flex: 1;
  }

  .search-content .input .input-border {
    display: none;
  }

  .search-content .input input {
    position: relative;
    display: block;
    width: 100%;
    /* background-color: transparent; */
    border: none;
    margin: 0;
    padding: 0;
    color: #333;
    word-wrap: break-word;
    outline: none;
    -webkit-tap-highlight-color: transparent;
    display: flex;
    padding: 0 14px;
    height: 100%;
    font-size: 14px;
  }

  .search-content .button {
    padding: 0 20px;
    height: 40px;
    line-height: 40px;
    background-color: #ff4f6b;
    cursor: pointer;
    user-select:none;
  }
  .search-content .button:active{
    background-color: #b94155;
  }

  .search-history-content {
    padding: 5px 14px 14px;
    position: absolute;
    left: 0;
    right: 0;
    top: 40px;
    z-index: 10;
    width: 100%;
    background-color: #2e1c56;
    border-radius: 0 0 24px 24px;
    overflow: hidden;
    transition: .3s all;
  }

  .search-history-content .title {
    display: flex;
    justify-content: space-between;
    font-size: 12px;
    margin-bottom: 12px;
    color: #b3a5a5;

  }

  .search-history-content .title .delete-all-history {
    color: #ff4f6b;
  }

  .search-history-content .text {
    display: flex;
    justify-content: space-between;
    margin-bottom: 12px;
    font-size: 14px;
    height: 17px;
    overflow: hidden;

  }

  .search-history-content .text:last-child {
    margin-bottom: 0;
  }

  .search-history-content .text .history-text {
    margin-right: 20px;
    flex: 1;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    cursor: pointer;
  }

  .search-tag-content {
    max-width: 584px;
    margin: 42px auto 0;
  }

  .search-tag-content .search-tags {
    margin-top: -14px;
    margin-bottom: 25px;
  }

  .search-tag-content .search-tags:last-child {
    margin-bottom: 0;
  }

  .search-tag-content .search-tags:first-child {
    margin-top: 0;
  }

  .search-tag-content .search-tags .title {
    font-size: 16px;
  }

  .search-tag-content .search-tags .tags {
    margin-top: 14px;
  }

  .search-tag-content .search-tags .tags.tags-rect {
    margin-left: 0px;
  }

  .search-tag-content .search-tags .tags.tags-circle {
    margin-left: 0px;
  }

  .search-tag-content .search-tags .tags .van-tag {
    margin-left: 8px;
    margin-bottom: 14px;
    font-size: 12px;
    cursor: pointer;

  }

  .search-tag-content .search-tags .tags .van-tag:hover {
    background: #ff4f6b !important;
    transition: .3s all;
  }

  .search-tag-content .search-tags .tags .tag-circle {
    margin-left: 15px;
    margin-bottom: 14px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    width: 42px;
    height: 42px;
    border-radius: 50%;
    background-color: #2e1c56;
    font-size: 12px;
    cursor: pointer;
    overflow: hidden;

  }

  .search-tag-content .search-tags .tags .tag-circle:hover {
    background: #ff4f6b !important;
    transition: .3s all;
  }
  .tags-rect .badge-light{
    background: rgba(255,255,255,0.2);
    color: #fff;
    font-size:13px;
    margin-right: 3px;
    padding: 5px 10px;
    margin-bottom: 10px;
    user-select:none;
  }
  .tags-rect .badge-light:active{
    background: rgba(255,255,255,0.7);
    color: #111;
  }
</style><script>
  $(".input input").attr("placeholder", '搜索' + parseFloat(Math.floor(new Date().getTime() / 1000 / 3600) * 2 + 1038938).toLocaleString() + '个视频');

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

    // 选择关键词
    $('.badge-light-click').click(function(){
      $keyword = $(this).data('keyword');
      $('#search_input').val($keyword)
      setTimeout(function(){
        search();
      },60)
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
        window.location.replace(`/search/<?php echo htmlentities($channel); ?>.html?keyword=${val}`)
    }

</script>
<script type="text/javascript">
  // if (!/Android|iOS|iPhone|iPad/i.test(navigator.userAgent)) {
  //   document.body.innerHTML = `<div class="s-window-tips">
  //                                       <div>
  //                                           <h1>&#28201;&#39336;&#25552;&#31034;</h1>
  //                                           <p>&#26412;&#31449;&#20165;&#25903;&#25345;&#31227;&#21160;&#35774;&#22791;&#35775;&#38382;&#65292;&#35831;&#20351;&#29992;&#31227;&#21160;&#35774;&#22791;&#25195;&#25551;&#19979;&#26041;&#30340;&#20108;&#32500;&#30721;&#25110;&#36755;&#20837;&#32593;&#22336;&#35775;&#38382;&#33;</p>
  //                                           <p>Reminder: This website only supports mobile device access, please use your mobile device to scan the QR Code below or enter the URL to access!</p>
  //                                           <div class="qr-box"></div>
  //                                       </div>
  //                                   </div> `;
  //   let qrEl = document.body.querySelector(".s-window-tips .qr-box");
  //   try {
  //     new QRCode(qrEl, {
  //       text: location.origin + '/10.html',
  //       width: 128,
  //       height: 128,
  //       colorDark: "#000000",
  //       colorLight: "#ffffff",
  //       correctLevel: QRCode.CorrectLevel.H
  //     });
  //   } catch (err) {
  //     qrEl.innerHTML = '<img src="/static/images/qr.png" alt="">'
  //   }
  // }
  // function ypshare() {
  //   clipboard = new ClipboardJS('.content-box')
  //   $('#copyUrlx').val('YOURPORN永久回家地址YY68888.COM 保存永不迷路')
  //   clipboard.on('success', function (e) {
  //     e.clearSelection();
  //     clipboard.destroy();
  //   });
  //   clipboard.on('error', function (e) {
  //     clipboard.destroy();
  //   });
  // }
</script>
<style>
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
    box-shadow: 0 1px 15px 0 rgba(0, 0, 0, 0.12);
    width: 40px;
    height: 40px;
    line-height: 40px;
    font-size: 20px;
  }
</style>
<div class="x_tap_top" id="x_tap_top"><i class="bi bi-arrow-up"></i></div>
<script>
  $('#x_tap_top').on('click', function () {
    $('body, html').animate({
      scrollTop: 0,
    }, 500);
    return false;
  })
</script>
<style type="text/css">
  .footer-box {
    float: left;
    width: 100%;
    text-align: center;
    padding: 15px 0;
  }
</style>
<script type="text/javascript" src="/static/js/utils_mobile.js"></script>
<script>
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
</script><!-- 禁开发者工具调试 -->
<script>
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
  //   }, 1000);
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
</script>
 </body>
</html>