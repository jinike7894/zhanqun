<?php /*a:1:{s:50:"C:\wwwroot\zhanqun\view\index\novel\searchres.html";i:1732187188;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="/static/novel/css/styleOld.css">
    <link rel="stylesheet" href="/static/novel/css/introduction.css">
    <link rel="stylesheet" href="/static/novel/css/home.css">
    <script type="text/javascript" src="/static/novel/js/jquery.js"></script>
    <script type="text/javascript" src="/static/novel/js/app.js"></script>
    <link rel="stylesheet" href="/static/novel/css/styles.css">
    <link rel="stylesheet" href="/static/novel/css/swiperGf.css" />
    <link rel="stylesheet" href="/static/css/commons.css" />
</head>
<style>
    ul{
        padding: 0;
    }
    /* .page-item{
        color:antiquewhite;
    } */



    .actives1 > .header_navTxt {
        color: #F2C545 !important;
        background: none;
    }
    .actives1 > .header_navli{
        width: 22px;
        height: 3px;
        border-radius: 3px;
        background: #F2C545;
    }

    /* a {
        color: #ffff;
    } */


</style>
<body>
    <input type="hidden" id="site_id" value="<?php echo htmlentities($site_id); ?>">
    <input type="hidden" id="channel" value="<?php echo htmlentities($tongjiCode); ?>">
    <!-- 人气榜 -->
    <div id="page">

        <!-- 顶部 -->
        <div class="header">
            <div class="headerBox">
                <a href="/novel/<?php echo htmlentities($channel); ?>.html">
                    <div class="logoBox">
                        <img src="<?php echo htmlentities($logo); ?>" class="header_logo">

                    </div>
                </a>
                <a href="/novel/search/<?php echo htmlentities($channel); ?>.html">
                    <div class="header_input">
                        <div class="headerInput"> 搜索</div>
                        <img src="/static/novel/img/search.png" class="header_search">

                    </div>
                </a>

                <img src="/static/novel/img/collectBtn.png" class="header_collect">

            </div>
           
            <div class="header_nav">
                <a href="/novel/<?php echo htmlentities($channel); ?>.html">
                <div class="header_navLine">
                    <div class="header_navTxt">
                        全部
                    </div>
                    <div class="header_navli"></div>

                </div>
            </a>
                <?php if(is_array($videoCateData) || $videoCateData instanceof \think\Collection || $videoCateData instanceof \think\Paginator): $i = 0; $__LIST__ = $videoCateData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <a href="/novel/<?php echo htmlentities($channel); ?>.html?cate_id=<?php echo htmlentities($item['id']); ?>">
                    <div class="header_navLine <?php if($cate_id == $item['id']): ?>actives1<?php endif; ?> ">
                        <div class="header_navTxt">
                            <?php echo htmlentities($item['title']); ?>
                        </div>
                        <div class="header_navli"></div>

                    </div>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
        </div>
            <!-- 顶部结束 -->
            <div class="contentBox" style="padding-top: 90px;">

                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php if(is_array($BannerList) || $BannerList instanceof \think\Collection || $BannerList instanceof \think\Paginator): $i = 0; $__LIST__ = $BannerList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Banner): $mod = ($i % 2 );++$i;?>
                        <div class="swiper-slide ad" data-id="<?php echo htmlentities($Banner['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>"
                            data-site="<?php echo htmlentities($site_id); ?>" data-url="<?php echo htmlentities($Banner['androidurl']); ?>"><img src="<?php echo htmlentities($Banner['img']); ?>" onerror="this.src='/static/images/loading_img_bg_default.jpg';"></div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
                    <div class="swiper-pagination"></div>
                </div>


                <!-- 九宫格 -->
                <div class="index_jiugongge">
                    <?php if(is_array($jiugongge_img) || $jiugongge_img instanceof \think\Collection || $jiugongge_img instanceof \think\Paginator): $i = 0; $__LIST__ = $jiugongge_img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                    <div class="index_jiugongge_li ad" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>"
                        data-site="<?php echo htmlentities($site_id); ?>" data-url="<?php echo htmlentities($item['androidurl']); ?>">
                        <img class="index_jiugongge_img" src="<?php echo htmlentities($item['img']); ?>" onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                        <div class="index_jiugongge_text"><?php echo htmlentities($item['name']); ?></div>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </div>


                <!-- 返回栏 -->
                <div class="nav" style="padding-left: 0;">
                    <div class="left">
                        <img class="leftBtn" style="margin-right: 5px;" src="/static/novel/images/rectangle.svg" />
                        <div class="leftName">搜索结果 - <?php echo htmlentities($query); ?></div>
                    </div>
                </div>




                <div class="hotList">
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                    <a href="/novel/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($item['id']); ?>">
                    <div class="book">
                        <div class="bookImg">
                            <img style="width: 100%;height: 100%;" src="<?php echo htmlentities($item['pic']); ?>" onerror="this.src='/static/images/loading_img_bg_default.jpg';"/>
                            <img style="position: absolute;
                        top: 0;
                        left: 0;width: 26px;height: 16px;" src="/static/novel/images/wanjie.png" />
                            <div class="bookReadNum">
                                <div class="bookReadNumLeft">
                                    <img src="/static/novel/images/Book_Open-W.svg" />
                                    <span><?php echo htmlentities(eyek($item['eye'])); ?>K</span>
                                </div>
                                <div class="bookReadNumLeft">
                                    <img src="/static/novel/images/Star-w.svg" />
                                    <span><?php echo htmlentities(eyek($item['shoucang'])); ?>K</span>
                                </div>
                            </div>
                        </div>
                        <div style="padding: 5px;">
                            <div class="bookName"><?php echo htmlentities($item['title']); ?></div>
                            <div class="bookNav">
                                <span>#<?php echo htmlentities(getNovelCate($item['cate_id'])); ?></span>
                            
                            </div>
                            <div style="display: flex; justify-content: space-between;margin-top: 5px;">
                                <div class="bookNum">共<?php echo htmlentities(novelNum($item['id'])); ?>章</div>
                                <div class="bookTime">
                                    <div class="dot"></div>2小时前
                                </div>
                            </div>
                        </div>

                    </div>
                </a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <?php if(is_array($di_img_ad) || $di_img_ad instanceof \think\Collection || $di_img_ad instanceof \think\Paginator): $i = 0; $__LIST__ = $di_img_ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <img class="banner ad " src="<?php echo htmlentities($item['img']); ?>"   data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>"
            data-site="<?php echo htmlentities($site_id); ?>" data-url="<?php echo htmlentities($item['androidurl']); ?>" onerror="this.src='/static/images/loading_img_bg_default.jpg';"/>
            <?php endforeach; endif; else: echo "" ;endif; ?>
                <!-- 抖音 -->
                <div class="index_dyList" style="padding: 8px 0;border: 0px;">
                    <?php if(is_array($di_img_font_ad) || $di_img_font_ad instanceof \think\Collection || $di_img_font_ad instanceof \think\Paginator): $i = 0; $__LIST__ = $di_img_font_ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                  
                        <div class="index_dyListBox ad"  data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>"
                        data-site="<?php echo htmlentities($site_id); ?>" data-url="<?php echo htmlentities($item['androidurl']); ?>">
                            <div class="flexBox">
                                <img src="<?php echo htmlentities($item['img']); ?>" class="index_dyList_img" onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                                <div class="index_dyList_dyTxt"><?php echo htmlentities($item['name']); ?></div>

                            </div>

                            <img src="/static/novel/img/rightIcon.png" class="index_dyList_rightIcon">
                        </div>
                    </a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </div>
                <!-- 分页 -->
                <div class="pageNum" style="margin-top: 10px;">
                    <?php echo $list; ?>
                    <!-- <div class="pageNext">
                        <img src="/static/novel/images/Chevron_Left.svg" />
                    </div>
                    <div class="pageNumBox" style="background: #FFFFFF33;">1</div>
                    <div class="pageNumBox">2</div>
                    <div class="pageNumBox">3</div>
                    <div class="pageNumBox">4</div>
                    <div class="pageNumBox">5</div>
                    <div class="pageNumBox">6</div>
                    <div class="pageMore">...</div>
                    <div class="pageNumBox">142</div>
                    <div class="pageNext"> <img src="/static/novel/images/right.svg" /> </div> -->
                </div>




            </div>


        </div>




    </div>


</body>
<script src="/static/novel/js/swiper.js"></script>
<script>

    var swiper = new Swiper(".mySwiper", {
        cssMode: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
        },
        mousewheel: true,
        keyboard: true,
    });

    $(document).ready(function () {
        //小说分类点击变亮
        $(".lable").click(function () {
            $(".lable").removeClass("lable_active");
            $(this).addClass("lable_active");
        });
        //漫画分类点击变亮
        $(".choosePage").click(function () {
            $(".choosePage").removeClass("choosePage_active");
            $(this).addClass("choosePage_active");
        });
        //导航栏
        $(".header_navTxt").click(function () {
            $(".header_navTxt").removeClass("header_navTxt_active");
            $(this).addClass("header_navTxt_active");
        });
        //点击正倒序
        $('.mulvTop').click(function () {
            var currentText = $('#textToChange').text();
            if (currentText === "正序") {
                $('#textToChange').text("倒序");
                $('#imgToChange').attr('src', '/static/novel/images/daoxu.svg');

            } else {
                $('#textToChange').text("正序");
                $('#imgToChange').attr('src', '/static/novel/images/zhengxu.svg');
            }
        });
    });
</script>

</html>