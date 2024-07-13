<?php /*a:2:{s:49:"D:\phpEnv\www\pron\view\index\index\index_pc.html";i:1720783977;s:44:"D:\phpEnv\www\pron\view\index\pc_header.html";i:1720794000;}*/ ?>

<title>17c</title>
</head>
<body>
<div class="v-s-nav-box-h"><div class="main-box"><a href="/"><div class="v-s-logo"><img src="/static/images/logo.svg"><!-- <div class="v-s-logo-text">FaceShow</div> --></div></a>
<div class="v-s-ul-time-vs_4a48f752db41520564b84da1f2631937">
<a href="/"><div class="v-s-li-nav-link-vs_4a48f752db41520564b84da1f2631937 nav-menu-selected">首页</div></a>
<?php if(is_array($menulist) || $menulist instanceof \think\Collection || $menulist instanceof \think\Paginator): $i = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
<a href="/category/<?php echo htmlentities($channel); ?>.html?category_id=<?php echo htmlentities($menu['id']); ?>"><div class="v-s-li-nav-link-vs_4a48f752db41520564b84da1f2631937"><?php echo htmlentities($menu['title']); ?></div></a>
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
</script><div class="content-box" onclick="ypshare()" data-clipboard-target="#copyUrlx"><div class="main-box"><div class="alert alert-primary" style="padding: 5px 10px;margin-bottom:0"><strong><i class="bi bi-bell-fill"></i></strong><div id="scroll-outer" class="scroll__outer"><div id="scroll-inner" class="scroll__inner"><!-- <div class="scroll__text">由于浏览器原因，QQ浏览器和百度浏览器可能会无法，建议使用谷歌浏览器。本站永久免费，请多邀请分享您的朋友光临，再次感谢您！</div><div class="scroll__text" id="last-text">由于浏览器原因，QQ浏览器和百度浏览器可能会无法，建议使用谷歌浏览器。本站永久免费，请多邀请分享您的朋友光临，再次感谢您！</div> --><!-- <div class="scroll__text">亲爱的会员用户，本站品牌形象全面升级，提供更多分类视频给大家！请大家多多推荐本站给您的好友！助力本站发展！竭诚为您服务！</div><div class="scroll__text" id="last-text">亲爱的会员用户，本站品牌形象全面升级，提供更多分类视频给大家！请大家多多推荐本站给您的好友！助力本站发展！竭诚为您服务！</div> --><div class="scroll__text">本站永久域名：YY68888.COM，请收藏！发送任意邮件至 yongjiuav@gmail.com，也可秒得最新地址！</div><!-- <div class="scroll__text" id="last-text">本站永久域名：YY68888.COM，请收藏！发送任意邮件至 yongjiuav@gmail.com，也可秒得最新地址！</div> --><div class="scroll__text" id="last-text">重要提醒：本站易屏蔽，请现在多记录、保存、收藏本站多几个域名！保存本站二维码！保存本站至收藏夹！保存本站邮箱发送任意内容可秒得最新地址！本站每天更新百部！谨防失联！小编重要提醒！</div></div></div></div></div><style type="text/css">
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
</style><script>
    const outer = document.getElementById('scroll-outer')
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
</script><div class="item-box"><div class="main-box"><!-- 首页内容顶部bp --><div class="ran-box"><div class="item-title-box"><div class="title-name">今日推荐</div><a href=""><!-- <div class="title-more">更多<i class="bi bi-chevron-right"></i></div> --></a></div>
<?php if(is_array($newlist) || $newlist instanceof \think\Collection || $newlist instanceof \think\Paginator): $i = 0; $__LIST__ = $newlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?>
<div class="vs_1dc09016d9c67820a94ffe655b4f28d3-item-vide-n"><a href="<?php echo url('index/videoplay',['category_id'=>$new['category_id'],'category_child_id'=>$new['category_child_id'],'vid'=>$new['id']]); ?>"><div class="rank-a" data-vid="<?php echo htmlentities($new['id']); ?>" data-sl="<?php echo htmlentities($new['video']); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($new['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position: relative; z-index: 4; padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($new['create_time'])? strtotime($new['create_time']) : $new['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities(qqw($new['eye'])); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($new['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div></div><div class="rank-title"><?php echo htmlentities($new['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div><div class="item-box"><div class="main-box"><div class="ran-box"><div class="item-title-box"><div class="title-name">本站原创</div><a href="/category/<?php echo htmlentities($channel); ?>.html?category_id=40"><div class="title-more">更多<i class="bi bi-chevron-right"></i></div></a></div>
<?php if(is_array($yuanclist) || $yuanclist instanceof \think\Collection || $yuanclist instanceof \think\Paginator): $i = 0; $__LIST__ = $yuanclist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$yc): $mod = ($i % 2 );++$i;?>
<div class="vs_1dc09016d9c67820a94ffe655b4f28d3-item-vide-n"><a href="<?php echo url('index/videoplay',['category_id'=>$yc['category_id'],'category_child_id'=>$yc['category_child_id'],'vid'=>$yc['id']]); ?>"><div class="rank-a" data-vid="<?php echo htmlentities($yc['id']); ?>" data-sl="<?php echo htmlentities($yc['video']); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($yc['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position: relative; z-index: 4; padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($yc['create_time'])? strtotime($yc['create_time']) : $yc['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities(qqw($yc['eye'])); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($yc['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div></div><div class="rank-title"><?php echo htmlentities($yc['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div><div class="item-box"><div class="main-box"><div class="ran-box"><div class="item-title-box"><div class="title-name">排行榜</div><div class="title-more"></div></div>
<?php if(is_array($pxlist) || $pxlist instanceof \think\Collection || $pxlist instanceof \think\Paginator): $i = 0; $__LIST__ = $pxlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$px): $mod = ($i % 2 );++$i;?>
<div class="vs_1dc09016d9c67820a94ffe655b4f28d3-item-vide-n"><a href="<?php echo url('index/videoplay',['category_id'=>$px['category_id'],'category_child_id'=>$px['category_child_id'],'vid'=>$px['id']]); ?>"><div class="rank-a" data-vid="<?php echo htmlentities($px['id']); ?>" data-sl="<?php echo htmlentities($px['video']); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($px['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position: relative; z-index: 4; padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($px['create_time'])? strtotime($px['create_time']) : $px['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities(qqw($px['eye'])); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($px['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div></div><div class="rank-title"><?php echo htmlentities($px['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div><div class="item-box"><div class="main-box"><div class="ran-box"><div class="item-title-box"><div class="title-name">吃瓜</div><a href="/category/<?php echo htmlentities($channel); ?>.html?category_id=1"><div class="title-more">更多<i class="bi bi-chevron-right"></i></div></a></div>
<?php if(is_array($chigualist) || $chigualist instanceof \think\Collection || $chigualist instanceof \think\Paginator): $i = 0; $__LIST__ = $chigualist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$chigua): $mod = ($i % 2 );++$i;?>
<div class="vs_1dc09016d9c67820a94ffe655b4f28d3-item-vide-n"><a href="<?php echo url('index/videoplay',['category_id'=>$chigua['category_id'],'category_child_id'=>$chigua['category_child_id'],'vid'=>$chigua['id']]); ?>"><div class="rank-a" data-vid="<?php echo htmlentities($chigua['id']); ?>" data-sl="<?php echo htmlentities($chigua['video']); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($chigua['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position: relative; z-index: 4; padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($chigua['create_time'])? strtotime($chigua['create_time']) : $chigua['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities(qqw($chigua['eye'])); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($chigua['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div></div><div class="rank-title"><?php echo htmlentities($chigua['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div>
<div class="item-box"><div class="main-box"><div class="ran-box"><div class="item-title-box"><div class="title-name">国产</div><a href="/category/<?php echo htmlentities($channel); ?>.html?category_id=2"><div class="title-more">更多<i class="bi bi-chevron-right"></i></div></a></div>
<?php if(is_array($guochanlist) || $guochanlist instanceof \think\Collection || $guochanlist instanceof \think\Paginator): $i = 0; $__LIST__ = $guochanlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$guochan): $mod = ($i % 2 );++$i;?>
<div class="vs_1dc09016d9c67820a94ffe655b4f28d3-item-vide-n"><a href="<?php echo url('index/videoplay',['category_id'=>$guochan['category_id'],'category_child_id'=>$guochan['category_child_id'],'vid'=>$guochan['id']]); ?>"><div class="rank-a" data-vid="<?php echo htmlentities($guochan['id']); ?>" data-sl="<?php echo htmlentities($guochan['video']); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($guochan['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position: relative; z-index: 4; padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($guochan['create_time'])? strtotime($guochan['create_time']) : $guochan['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities(qqw($guochan['eye'])); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($guochan['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div></div><div class="rank-title"><?php echo htmlentities($guochan['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div>
<div class="item-box"><div class="main-box"><div class="ran-box"><div class="item-title-box"><div class="title-name">日韩</div><a href="/category/<?php echo htmlentities($channel); ?>.html?category_id=3"><div class="title-more">更多<i class="bi bi-chevron-right"></i></div></a></div>
<?php if(is_array($rihanlist) || $rihanlist instanceof \think\Collection || $rihanlist instanceof \think\Paginator): $i = 0; $__LIST__ = $rihanlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rihan): $mod = ($i % 2 );++$i;?>
<div class="vs_1dc09016d9c67820a94ffe655b4f28d3-item-vide-n"><a href="<?php echo url('index/videoplay',['category_id'=>$rihan['category_id'],'category_child_id'=>$rihan['category_child_id'],'vid'=>$rihan['id']]); ?>"><div class="rank-a" data-vid="<?php echo htmlentities($rihan['id']); ?>" data-sl="<?php echo htmlentities($rihan['video']); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($rihan['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position: relative; z-index: 4; padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($rihan['create_time'])? strtotime($rihan['create_time']) : $rihan['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities(qqw($rihan['eye'])); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($rihan['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div></div><div class="rank-title"><?php echo htmlentities($rihan['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div>
<div class="item-box"><div class="main-box"><div class="ran-box"><div class="item-title-box"><div class="title-name">欧美</div><a href="/category/<?php echo htmlentities($channel); ?>.html?category_id=4"><div class="title-more">更多<i class="bi bi-chevron-right"></i></div></a></div>
<?php if(is_array($oumeilist) || $oumeilist instanceof \think\Collection || $oumeilist instanceof \think\Paginator): $i = 0; $__LIST__ = $oumeilist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$oumei): $mod = ($i % 2 );++$i;?>
<div class="vs_1dc09016d9c67820a94ffe655b4f28d3-item-vide-n"><a href="<?php echo url('index/videoplay',['category_id'=>$oumei['category_id'],'category_child_id'=>$oumei['category_child_id'],'vid'=>$oumei['id']]); ?>"><div class="rank-a" data-vid="<?php echo htmlentities($oumei['id']); ?>" data-sl="<?php echo htmlentities($oumei['video']); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($oumei['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position: relative; z-index: 4; padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($oumei['create_time'])? strtotime($oumei['create_time']) : $oumei['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities(qqw($oumei['eye'])); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($oumei['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div></div><div class="rank-title"><?php echo htmlentities($oumei['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div>
<div class="item-box"><div class="main-box"><div class="ran-box"><div class="item-title-box"><div class="title-name">动漫</div><a href="/category/<?php echo htmlentities($channel); ?>.html?category_id=5"><div class="title-more">更多<i class="bi bi-chevron-right"></i></div></a></div>
<?php if(is_array($dongmanlist) || $dongmanlist instanceof \think\Collection || $dongmanlist instanceof \think\Paginator): $i = 0; $__LIST__ = $dongmanlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dongman): $mod = ($i % 2 );++$i;?>
<div class="vs_1dc09016d9c67820a94ffe655b4f28d3-item-vide-n"><a href="<?php echo url('index/videoplay',['category_id'=>$dongman['category_id'],'category_child_id'=>$dongman['category_child_id'],'vid'=>$dongman['id']]); ?>"><div class="rank-a" data-vid="<?php echo htmlentities($dongman['id']); ?>" data-sl="<?php echo htmlentities($dongman['video']); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($dongman['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position: relative; z-index: 4; padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($dongman['create_time'])? strtotime($dongman['create_time']) : $dongman['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities(qqw($dongman['eye'])); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($dongman['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div></div><div class="rank-title"><?php echo htmlentities($dongman['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div>
<div class="item-box"><div class="main-box"><div class="ran-box"><div class="item-title-box"><div class="title-name">AI换脸</div><a href="/category/<?php echo htmlentities($channel); ?>.html?category_id=6"><div class="title-more">更多<i class="bi bi-chevron-right"></i></div></a></div>
<?php if(is_array($ailist) || $ailist instanceof \think\Collection || $ailist instanceof \think\Paginator): $i = 0; $__LIST__ = $ailist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ai): $mod = ($i % 2 );++$i;?>
<div class="vs_1dc09016d9c67820a94ffe655b4f28d3-item-vide-n"><a href="<?php echo url('index/videoplay',['category_id'=>$ai['category_id'],'category_child_id'=>$ai['category_child_id'],'vid'=>$ai['id']]); ?>"><div class="rank-a" data-vid="<?php echo htmlentities($ai['id']); ?>" data-sl="<?php echo htmlentities($ai['video']); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($ai['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position: relative; z-index: 4; padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($ai['create_time'])? strtotime($ai['create_time']) : $ai['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities(qqw($ai['eye'])); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($ai['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div></div><div class="rank-title"><?php echo htmlentities($ai['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div>
<div class="item-box"><div class="main-box"><div class="ran-box"><div class="item-title-box"><div class="title-name">AV解说</div><a href="/category/<?php echo htmlentities($channel); ?>.html?category_id=8"><div class="title-more">更多<i class="bi bi-chevron-right"></i></div></a></div>
<?php if(is_array($jieshuolist) || $jieshuolist instanceof \think\Collection || $jieshuolist instanceof \think\Paginator): $i = 0; $__LIST__ = $jieshuolist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$jieshuo): $mod = ($i % 2 );++$i;?>
<div class="vs_1dc09016d9c67820a94ffe655b4f28d3-item-vide-n"><a href="<?php echo url('index/videoplay',['category_id'=>$jieshuo['category_id'],'category_child_id'=>$jieshuo['category_child_id'],'vid'=>$jieshuo['id']]); ?>"><div class="rank-a" data-vid="<?php echo htmlentities($jieshuo['id']); ?>" data-sl="<?php echo htmlentities($jieshuo['video']); ?>"><img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($jieshuo['enpic']); ?>"/><div class="motion-preview"></div><div class="mask_info"><div style="position: relative; z-index: 4; padding-left: 15px; color: #fff;"><?php echo htmlentities(date('Y-m-d',!is_numeric($jieshuo['create_time'])? strtotime($jieshuo['create_time']) : $jieshuo['create_time'])); ?></div><div class="clearfix"><div class="pre-eye"><i class="bi bi-eye"></i><span><?php echo htmlentities(qqw($jieshuo['eye'])); ?></span></div><div class="pre-time"><i class="bi bi-clock"></i><span><?php echo htmlentities($jieshuo['time']); ?></span></div></div></div><div class="progress-box"><div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div></div></div></div><div class="rank-title"><?php echo htmlentities($jieshuo['title']); ?></div></a></div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div></div></div>
</div><input id="copyUrlx" class="input-copy-url" value="" style="opacity: 0;">
<style type="text/css">    
.vs_1dc09016d9c67820a94ffe655b4f28d3-item-vide-n{
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
    .vs_1dc09016d9c67820a94ffe655b4f28d3-item-vide-n a{
      color: #333;
    }
    
</style><script type="text/javascript">
  function ypshare(){
    clipboard = new ClipboardJS('.content-box')
    $('#copyUrlx').val('YOURPORN永久回家地址YP22222.com 保存永不迷路')
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
  </script><style type="text/css">
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
    </script></body></html>