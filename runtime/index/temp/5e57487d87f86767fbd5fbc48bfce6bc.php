<?php /*a:1:{s:51:"C:\wwwroot\zhanqun\view\index\comics\searchres.html";i:1732607743;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="/static/comics/css/styleOld.css">
    <link rel="stylesheet" href="/static/comics/css/introduction.css">
    <link rel="stylesheet" href="/static/comics/css/home.css">
    <script type="text/javascript" src="/static/comics/js/jquery.js"></script>
    <script type="text/javascript" src="/static/comics/js/app.js"></script>
    <link rel="stylesheet" href="/static/comics/css/styles.css">
    <link rel="stylesheet" href="/static/comics/css/swiperGf.css" />
    <link rel="stylesheet" href="/static/css/commons.css" />
       <!-- 懒加载 -->
       <script type="text/javascript" src="/static/js/jquery-2.2.4.min.js"></script>
       <script type="text/javascript" src="/static/js/bootstrap.bundle.min.js"></script>
       <script type="text/javascript" src="/static/js/clipboard.min.js"></script>
       <script type="text/javascript" src="/static/js/lozad.min.js"></script>
        <!-- 懒加载 -->
</head>
<style>
    /* .swiper-slide  {
    background: #000;
} */

    .actives1 > .header_navTxt{
        color: #FA2B24 !important;
        background: none;
    }
    .actives1 > .header_navli{
        width: 22px;
        height: 3px;
        border-radius: 3px;
        background: #FA2B24;
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
                <a href="/comics/<?php echo htmlentities($channel); ?>.html">
                    <div class="logoBox">
                        <img src="<?php echo htmlentities($logo); ?>" class="header_logo">

                    </div>
                </a>
                <a href="/comics/search/<?php echo htmlentities($channel); ?>.html">
                    <div class="header_input">
                        <div class="headerInput"> 搜索</div>
                        <img src="/static/comics/img/search.png" class="header_search">

                    </div>
                </a>

                <img src="/static/comics/img/collectBtn.png" class="header_collect">

            </div>
            <div class="header_nav">
                <a href="/comics/searchres/<?php echo htmlentities($channel); ?>.html?query=<?php echo htmlentities($query); ?>">
                <div class="header_navLine">
                    <div class="header_navTxt">
                        全部
                    </div>
                    <div class="header_navli"></div>

                </div>
            </a>
                <?php if(is_array($videoCateData) || $videoCateData instanceof \think\Collection || $videoCateData instanceof \think\Paginator): $i = 0; $__LIST__ = $videoCateData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <a href="/comics/searchres/<?php echo htmlentities($channel); ?>.html?cate_id=<?php echo htmlentities($item['id']); ?>&query=<?php echo htmlentities($query); ?>">
                    <div class="header_navLine <?php if($cate_id == $item['id']): ?>actives1<?php endif; ?>">
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
                            data-site="<?php echo htmlentities($site_id); ?>" data-url="<?php echo htmlentities($Banner['androidurl']); ?>"><img src="<?php echo htmlentities($Banner['img']); ?>"></div>
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
                        <img class="index_jiugongge_img" src="<?php echo htmlentities($item['img']); ?>">
                        <div class="index_jiugongge_text"><?php echo htmlentities($item['name']); ?></div>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </div>


                <!-- 返回栏 -->
                <div class="nav" style="padding-left: 0;">
                    <div class="left">
                        <img class="leftBtn" style="margin-right: 5px;" src="/static/comics/images/rectangle.svg" />
                        <div class="leftName">搜索结果 - <?php echo htmlentities($query); ?></div>
                    </div>
                </div>




                <div class="hotList">
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                    <a href="/comics/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($item['id']); ?>">
                    <div class="book">
                        <div class="bookImg">
                            <img style="width: 100%;height: 100%;" class="lozad" src="/static/images/loading_img_bg_default.jpg"  data-src="<?php echo htmlentities($tmimg); ?><?php echo htmlentities($item['enpic']); ?>" />
                            <img style="position: absolute;
                        top: 0;
                        left: 0;width: 26px;height: 16px;" src="/static/comics/images/wanjie.png" />
                            <div class="bookReadNum">
                                <div class="bookReadNumLeft">
                                    <img src="/static/comics/images/Book_Open-W.svg" />
                                    <span><?php echo htmlentities($item['eye']); ?>K</span>
                                </div>
                                <div class="bookReadNumLeft">
                                    <img src="/static/comics/images/Star-w.svg" />
                                    <span><?php echo htmlentities($item['shoucang']); ?>K</span>
                                </div>
                            </div>
                        </div>
                        <div style="padding: 5px;">
                            <div class="bookName"><?php echo htmlentities($item['title']); ?></div>
                            <div class="bookNav">
                                <span>#<?php echo htmlentities(getNovelCate($item['cate_id'])); ?></span>
                            
                            </div>
                            <div style="display: flex; justify-content: space-between;margin-top: 5px;">
                                <div class="bookNum">共1566章</div>
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
            data-site="<?php echo htmlentities($site_id); ?>" data-url="<?php echo htmlentities($item['androidurl']); ?>"/>
            <?php endforeach; endif; else: echo "" ;endif; ?>
                <!-- 抖音 -->
                <div class="index_dyList" style="padding: 8px 0;border: 0px;">
                    <?php if(is_array($di_img_font_ad) || $di_img_font_ad instanceof \think\Collection || $di_img_font_ad instanceof \think\Paginator): $i = 0; $__LIST__ = $di_img_font_ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                  
                        <div class="index_dyListBox ad"  data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>"
                        data-site="<?php echo htmlentities($site_id); ?>" data-url="<?php echo htmlentities($item['androidurl']); ?>">
                            <div class="flexBox">
                                <img src="<?php echo htmlentities($item['img']); ?>" class="index_dyList_img">
                                <div class="index_dyList_dyTxt"><?php echo htmlentities($item['name']); ?></div>

                            </div>

                            <img src="/static/comics/img/rightIcon.png" class="index_dyList_rightIcon">
                        </div>
                    </a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </div>
                <!-- 分页 -->
                <div class="pageNum" style="margin-top: 10px;">
                    <?php echo $list; ?>
                    <!-- <div class="pageNext">
                        <img src="/static/comics/images/Chevron_Left.svg" />
                    </div>
                    <div class="pageNumBox" style="background: #FFFFFF33;">1</div>
                    <div class="pageNumBox">2</div>
                    <div class="pageNumBox">3</div>
                    <div class="pageNumBox">4</div>
                    <div class="pageNumBox">5</div>
                    <div class="pageNumBox">6</div>
                    <div class="pageMore">...</div>
                    <div class="pageNumBox">142</div>
                    <div class="pageNext"> <img src="/static/comics/images/right.svg" /> </div> -->
                </div>




            </div>


        </div>




    </div>


</body>
<script src="/static/comics/js/swiper.js"></script>
<script>
     $(document).ready(function () {
    // $('[data-toggle="tooltip"]').tooltip();
    // $('[data-toggle="popover"]').popover();
    const observer = lozad(); // lazy loads elements with default selector as '.lozad'
    observer.observe();
  });
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
                $('#imgToChange').attr('src', '/static/comics/images/daoxu.svg');

            } else {
                $('#textToChange').text("正序");
                $('#imgToChange').attr('src', '/static/comics/images/zhengxu.svg');
            }
        });
    });
</script>

</html>