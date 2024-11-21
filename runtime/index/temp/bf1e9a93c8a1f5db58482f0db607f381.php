<?php /*a:2:{s:46:"C:\wwwroot\zhanqun\view\index\comics\info.html";i:1732110798;s:48:"C:\wwwroot\zhanqun\view\index\comics\header.html";i:1732110798;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>人气榜</title>
    <link rel="stylesheet" href="/static/novel/css/styleOld.css">
    <link rel="stylesheet" href="/static/novel/css/home.css">
    <link rel="stylesheet" href="/static/novel/css/introduction.css">
    <script type="text/javascript" src="/static/novel/js/jquery.js"></script>
    <script type="text/javascript" src="/static/novel/js/app.js"></script>
    <link rel="stylesheet" href="/static/novel/css/styles.css">
    <link rel="stylesheet" href="/static/novel/css/swiperGf.css" />
    <link rel="stylesheet" href="/static/css/commons.css" />
    
    <!-- <link rel="stylesheet" href="/static/index/css/swiper.css">
    <link rel="stylesheet" href="/static/index/css/swiperGf.css" />
    <link rel="stylesheet" href="/static/index/home.css"> -->
    <!-- <script src="/static/index/res.js"></script> -->
    <!-- <link rel="stylesheet" href="/static/index/swiper.css"> -->
   
   
</head>
<style>
    ul{
        padding: 0;
    }
    /* .page-item{
        color:antiquewhite;
    } */
</style>
<body>
    
    <input type="hidden" id="site_id" value="<?php echo htmlentities($site_id); ?>">
    <input type="hidden" id="channel" value="<?php echo htmlentities($tongjiCode); ?>">
    <!--小说阅读 -->
    <div id="page">
        <!-- 顶部 -->
        <div class="header">
            <div class="headerBox">
                <div class="logoBox">
                    <a href="/comics/<?php echo htmlentities($channel); ?>.html">
                    <img src="<?php echo htmlentities($logo); ?>" class="header_logo">
                    </a>

                </div>
                <a href="/comics/search/<?php echo htmlentities($channel); ?>.html">
                    <div class="header_input">
                        <div class="headerInput"> 搜索</div>
                        <img src="/static/novel/img/search.png" class="header_search">

                    </div>
                </a>

                <img src="/static/novel/img/collectBtn.png" class="header_collect">

            </div>
            <div class="header_nav">
                <a href="/comics/<?php echo htmlentities($channel); ?>.html">
                    <div class="header_navLine">
                        <div class="header_navTxt">
                            全部
                        </div>
                        <div class="header_navli"></div>

                    </div>
                </a>
                <?php if(is_array($novelCate) || $novelCate instanceof \think\Collection || $novelCate instanceof \think\Paginator): $i = 0; $__LIST__ = $novelCate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <a href="/comics/<?php echo htmlentities($channel); ?>.html?cate_id=<?php echo htmlentities($item['id']); ?>">
                    <div class="header_navLine">
                        <div class="header_navTxt">
                            <?php echo htmlentities($item['title']); ?>
                        </div>
                        <div class="header_navli"></div>
                    </div>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
        </div>
        <div class="contentBox">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php if(is_array($BannerList) || $BannerList instanceof \think\Collection || $BannerList instanceof \think\Paginator): $i = 0; $__LIST__ = $BannerList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Banner): $mod = ($i % 2 );++$i;?>
                    <div class="swiper-slide ad " data-id="<?php echo htmlentities($Banner['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                        data-url="<?php echo htmlentities($Banner['androidurl']); ?>"><img src="<?php echo htmlentities($Banner['img']); ?>" onerror="this.src='/static/images/loading_img_bg_default.jpg';"></div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
      
        <!-- 顶部结束 -->
        <!-- 九宫格 -->
        <div class="index_jiugongge">
            <?php if(is_array($jiugongge_img) || $jiugongge_img instanceof \think\Collection || $jiugongge_img instanceof \think\Paginator): $i = 0; $__LIST__ = $jiugongge_img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <div class="index_jiugongge_li ad" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                data-url="<?php echo htmlentities($item['androidurl']); ?>">
                <img class="index_jiugongge_img" src="<?php echo htmlentities($item['img']); ?>" onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                <div class="index_jiugongge_text"><?php echo htmlentities($item['name']); ?></div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>

        </div>
        <!-- Swiper -->
        <!-- <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php if(is_array($BannerList2) || $BannerList2 instanceof \think\Collection || $BannerList2 instanceof \think\Paginator): $i = 0; $__LIST__ = $BannerList2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Banner): $mod = ($i % 2 );++$i;?>
                <div class="swiper-slide ad " data-id="<?php echo htmlentities($Banner['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                    data-url="<?php echo htmlentities($Banner['androidurl']); ?>"><img src="<?php echo htmlentities($Banner['img']); ?>" onerror="this.src='/static/images/loading_img_bg_default.jpg';"></div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div> -->

         <!-- 轮播图 -->

        <div class="index_swiper">
            <div class="swiper-banner swiper">
                <div class="swiper-wrapper">
                    <?php if(is_array($BannerList2) || $BannerList2 instanceof \think\Collection || $BannerList2 instanceof \think\Paginator): $i = 0; $__LIST__ = $BannerList2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Banner): $mod = ($i % 2 );++$i;?>
                    <div class="swiper-slide">
                        <img class="banner-img ad" src="<?php echo htmlentities($Banner['img']); ?>" alt=""
                         data-id="<?php echo htmlentities($Banner['id']); ?>" 
                         data-channel="<?php echo htmlentities($channel); ?>" 
                         data-site="<?php echo htmlentities($site_id); ?>"
                         data-url="<?php echo htmlentities($Banner['androidurl']); ?>"
                         >
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
         
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

        <!-- 返回栏 -->
        <div class="nav">
            <div class="left">
                <img class="leftBtn" style="margin-right: 5px;" src="/static/comics/images/rectangle.svg" />
                <div class="leftName">小说阅读</div>
            </div>
        </div>

        <div class="contentBox">


            <div class="xsBox">
                <!-- 小说1 -->
                <div class="contentList">
                    <div class="contentListLeft">
                        <img class="contentCover" src="<?php echo htmlentities($info['pic']); ?>" onerror="this.src='/static/images/loading_img_bg_default.jpg';"/>
                        <div class="contentNum" style="background: #FF1962;">1</div>
                    </div>
                    <div class="contentRight">
                        <div class="contentName" style="color: #FF3172;"><?php echo htmlentities($info['title']); ?></div>
                        <div class="contentAuthor">
                            <span class="contentNav">作者</span>
                            <span class="contentA"><?php echo htmlentities($info['author']); ?></span>
                        </div>
                        <div class="contentAuthor">
                            <span class="contentNav">状态</span>
                            <span class="contentLz" style="background: linear-gradient(282.53deg, #1D4AFF 64.29%, #00EAFF 95.78%);
">连载</span>
                        </div>
                        <div class="contentAuthor">
                            <span class="contentNav">最新</span>
                            <span class="contentA fontWeight">更新至<?php echo htmlentities(comicsNum($info['id'])); ?>章</span>
                            <span class="contentA fontWeight"><?php echo htmlentities(timesrand($info['id'])); ?>小时前</span>
                        </div>
                        <div class="contentAuthor">
                            <span class="contentNav">题材</span>
                            <span class="contentA fontColor"><?php echo htmlentities(getNovelCate($info['cate_id'])); ?></span>
                            <!-- <span class="contentA fontColor">乱伦</span> -->
                        </div>
                        <div class="contentRead">
                            <div class="contentReadBox">
                                <img src="/static/comics/images/Book_Open.svg" />
                                阅读 <span class="contentK"><?php echo htmlentities($info['eye']); ?>K</span>
                            </div>
                            <div class="contentReadBox">
                                <img src="/static/comics/images/Star.svg" />
                                收藏<span><?php echo htmlentities($info['shoucang']); ?>K</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 小说简介 -->
                <div>
                    <p><span style="color: #FFFFFF66;">小说简介：</span><?php echo htmlentities(fontsize($info['description'])); ?></p>

                </div>
                <!-- 下面分类 -->
                <div class="bottomClass">
                    <div class="bct"><span style="color: #FFFFFF66;"># </span><?php echo htmlentities(getNovelCate($info['cate_id'])); ?></div>

                </div>
                <?php if($novelcountid == 0): ?>
                <div class="openRead">暂无章节</div>
                <?php else: ?>
                <a href="/comics/chapter/<?php echo htmlentities($channel); ?>.html?chapter_id=<?php echo htmlentities($novelcountid); ?>">
                    <div class="openRead">开始阅读</div>
                </a>
                <?php endif; ?>
            </div>

            <?php if(is_array($zhong_img_ad) || $zhong_img_ad instanceof \think\Collection || $zhong_img_ad instanceof \think\Paginator): $i = 0; $__LIST__ = $zhong_img_ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <img src="<?php echo htmlentities($item['img']); ?>" class="banner ad" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>"
                data-site="<?php echo htmlentities($site_id); ?>" data-url="<?php echo htmlentities($item['androidurl']); ?>" onerror="this.src='/static/images/loading_img_bg_default.jpg';">
            <?php endforeach; endif; else: echo "" ;endif; ?>



            <div class="introduction_gg">
                <?php if(is_array($zhong_font_ad) || $zhong_font_ad instanceof \think\Collection || $zhong_font_ad instanceof \think\Paginator): $i = 0; $__LIST__ = $zhong_font_ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <div class="introduction_ggNav ad" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                    data-url="<?php echo htmlentities($item['androidurl']); ?>">
                    <div class="introduction_ggTxt">
                        <?php echo htmlentities($item['name']); ?>
                    </div>
                    <img src="<?php echo htmlentities($item['img']); ?>" class="introduction_ggBtn" onerror="this.src='/static/images/loading_img_bg_default.jpg';">

                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
            <!-- 目录 -->
            <div class="mulv">
                <div class="mulvTop">
                    <div class="mulvtext">目录—更新至<?php echo htmlentities(comicsNum($info['id'])); ?>章</div>
                    <div class="mulvRight">
                        <img class="zhengxu" id="imgToChange" src="/static/comics/images/zhengxu.svg" />
                        <div class="mulvRightText" id="textToChange">正序</div>
                    </div>
                </div>
                <!-- <div class="chooseMl">
                    <div class="choosePage">0-100</div>
                    <div class="choosePage">101-200</div>
                    <div class="choosePage">201-300</div>
                    <div class="choosePage">300-400</div>
                    <div class="choosePage">400-500</div>
                    <div class="choosePage">500-600</div>
                    <div class="choosePage">600-700</div>
                    <div class="choosePage">700-800</div>
                 
                </div> -->
                <div class="mulvPz">
                    <?php if(is_array($novelcount) || $novelcount instanceof \think\Collection || $novelcount instanceof \think\Paginator): $index = 0; $__LIST__ = $novelcount;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($index % 2 );++$index;?>
                    <div class="pzList">
                        <a href="/comics/chapter/<?php echo htmlentities($channel); ?>.html?chapter_id=<?php echo htmlentities($item['id']); ?>">
                            <div class="pzLeft"><?php echo htmlentities($item['name']); ?></div>
                        </a>
                        <!-- <div class="pzRight">第<span style="color: #FFFFFF99;"><?php echo htmlentities($index); ?></span>章</div> -->
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>

            </div>

            <!-- 热门推荐 -->
            <div class="nav" style="padding: 0;">
                <div class="left">
                    <img class="leftBtn" style="margin-right: 5px;" src="/static/comics/images/rectangle.svg" />
                    <div class="leftName">官方推荐</div>
                </div>
            </div>
            <!-- 官方推荐 -->
            <div class="hotList">

                <?php if(is_array($novels1) || $novels1 instanceof \think\Collection || $novels1 instanceof \think\Paginator): $i = 0; $__LIST__ = $novels1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <a href="/comics/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($item['id']); ?>">
                    <div class="book">
                        <div class="bookImg">
                            <img style="width: 100%;height: 100%;" src="<?php echo htmlentities($item['pic']); ?>" onerror="this.src='/static/images/loading_img_bg_default.jpg';"/>
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
                                <div class="bookNum">共<?php echo htmlentities(comicsNum($item['id'])); ?>章</div>
                                <div class="bookTime">
                                    <div class="dot"></div><?php echo htmlentities(timesrand($item['title'])); ?>小时前
                                </div>
                            </div>
                        </div>

                    </div>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>

            <?php if(is_array($di_img_ad) || $di_img_ad instanceof \think\Collection || $di_img_ad instanceof \think\Paginator): $i = 0; $__LIST__ = $di_img_ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <img class="banner ad" src="<?php echo htmlentities($item['img']); ?>" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>"
                data-site="<?php echo htmlentities($site_id); ?>" data-url="<?php echo htmlentities($item['androidurl']); ?>" onerror="this.src='/static/images/loading_img_bg_default.jpg';" />
            <?php endforeach; endif; else: echo "" ;endif; ?>


            <!-- 官方推荐 -->
            <div class="hotList">
                <?php if(is_array($novels2) || $novels2 instanceof \think\Collection || $novels2 instanceof \think\Paginator): $i = 0; $__LIST__ = $novels2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <a href="/comics/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($item['id']); ?>">
                    <div class="book">
                        <div class="bookImg">
                            <img style="width: 100%;height: 100%;" src="<?php echo htmlentities($item['pic']); ?>" onerror="this.src='/static/images/loading_img_bg_default.jpg';"/>
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
                                <div class="bookNum">共<?php echo htmlentities(comicsNum($item['id'])); ?>章</div>
                                <div class="bookTime">
                                    <div class="dot"></div><?php echo htmlentities(timesrand($item['title'])); ?>小时前
                                </div>
                            </div>
                        </div>

                    </div>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <!-- 抖音 -->
            <div class="index_dyList">
                <?php if(is_array($di_img_font_ad) || $di_img_font_ad instanceof \think\Collection || $di_img_font_ad instanceof \think\Paginator): $i = 0; $__LIST__ = $di_img_font_ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <div class="index_dyListBox ad " data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                    data-url="<?php echo htmlentities($item['androidurl']); ?>">
                    <div class="flexBox">
                        <img src="<?php echo htmlentities($item['img']); ?>" class="index_dyList_img" onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                        <div class="index_dyList_dyTxt"><?php echo htmlentities($item['name']); ?></div>

                    </div>

                    <img src="/static/video/img/rightIcon.png" class="index_dyList_rightIcon">
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>

            <!-- 分页 -->
            <div class="pageNum" style="margin-top: 10px;">
                <?php echo $novel2; ?>
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

    <script>

    </script>
</body>
<script src="/static/comics/js/swiper.js"></script>
<script src="/static/common/jq.js"></script>
<script src="/static/common/swiper.js"></script>
<script src="/static/common/apps.js"></script>
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
        //目录点击变亮
        $(".choosePage").click(function () {
            $(".choosePage").removeClass("choosePage_active");
            $(this).addClass("choosePage_active");
            var moveX = $(this).position().left + $(this).parent().scrollLeft();
            var pageX = document.documentElement.clientWidth;
            var blockWidth = $(this).width();
            var left = moveX - (pageX / 2) + (blockWidth / 2);
            $(".chooseMl").scrollLeft(left);
        });
        //点击正倒序
        $('.mulvTop').click(function () {
            var currentText = $('#textToChange').text();
            if (currentText === "正序") {
                $('#textToChange').text("倒序");
                $('#imgToChange').attr('src', '/static/comics/images/daoxu.svg');
                var container = $('.mulvPz');
                var items = container.find('.pzList');
                items = items.toArray().reverse();
                container.empty();
                $.each(items, function (index, item) {
                    container.append(item);
                });
            } else {
                $('#textToChange').text("正序");
                $('#imgToChange').attr('src', '/static/comics/images/zhengxu.svg');
                var container = $('.mulvPz');
                var items = container.find('.pzList');
                items = items.toArray().reverse();
                container.empty();
                $.each(items, function (index, item) {
                    container.append(item);
                });
            }
        });
    });
</script>

</html>