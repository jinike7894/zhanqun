<?php /*a:1:{s:46:"C:\wwwroot\zhanqun\view\index\video\index.html";i:1732638704;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>视频首页</title>
    <link rel="stylesheet" href="/static/video/styles.css">
    <link rel="stylesheet" href="/static/video/introduction.css">
    <link rel="stylesheet" href="/static/video/home.css">
    <script type="text/javascript" src="/static/video/js/jquery.js"></script>
    <script type="text/javascript" src="/static/video/js/app.js"></script>
    <link rel="stylesheet" href="/static/video/css/styles.css">
    <link rel="stylesheet" href="/static/video/min.css" />
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

    .actives > .header_navTxt {
        color: #00feb1 !important;
        background: none;
    }
    .actives > .header_navli{
        width: 22px;
        height: 3px;
        border-radius: 3px;
        background: #00FEB1;
    }

    /* a {
        color: #ffff;
    } */

</style>
<body>
    <!-- 人气榜 -->
    <div id="page">
        <input type="hidden" id="site_id" value="<?php echo htmlentities($site_id); ?>">
        <input type="hidden" id="channel" value="<?php echo htmlentities($tongjiCode); ?>">
        <!-- 顶部 -->
        <div class="header">
            <div class="headerBox">
                <a href="/video/<?php echo htmlentities($channel); ?>.html">
                <div class="logoBox">
                    <img src="<?php echo htmlentities($logo); ?>" class="header_logo">
                    <!-- <img src="/static/video/img/logoTxt.png" class="header_logoTxt"> -->

                </div>
                </a>
                <a href="search/<?php echo htmlentities($channel); ?>.html">
                    <div class="header_input">
                        <div class="headerInput"> 搜索</div>
                        <img src="/static/video/img/search.png" class="header_search">

                    </div>
                </a>

                <img src="/static/video/img/collectBtn.png" class="header_collect">

            </div>
            <div class="header_nav">
                <a href="./<?php echo htmlentities($channel); ?>.html">
                <div class="header_navLine">
                    <div class="header_navTxt">
                        全部
                    </div>
                    <div class="header_navli"></div>

                </div>
                </a>
                <?php if(is_array($videoCateData) || $videoCateData instanceof \think\Collection || $videoCateData instanceof \think\Paginator): $i = 0; $__LIST__ = $videoCateData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <a href="./<?php echo htmlentities($channel); ?>.html?cate_id=<?php echo htmlentities($item['id']); ?>">
                <div class="header_navLine <?php if($cate_id == $item['id']): ?>actives<?php endif; ?> ">
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
                    <div class="swiper-slide ad" data-id="<?php echo htmlentities($Banner['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                        data-url="<?php echo htmlentities($Banner['androidurl']); ?>"><img src="<?php echo htmlentities($Banner['img']); ?>"></div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
                <div class="swiper-pagination"></div>
            </div>


            <!-- 九宫格 -->
            <div class="index_jiugongge">
                <?php if(is_array($jiugongge_img) || $jiugongge_img instanceof \think\Collection || $jiugongge_img instanceof \think\Paginator): $i = 0; $__LIST__ = $jiugongge_img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <div class="index_jiugongge_li ad" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                    data-url="<?php echo htmlentities($item['androidurl']); ?>">
                    <img class="index_jiugongge_img" src="<?php echo htmlentities($item['img']); ?>">
                    <div class="index_jiugongge_text"><?php echo htmlentities($item['name']); ?></div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>


            </div>

            <!-- 标签 -->
            <div class="home_LabelBox">

                <?php if(is_array($jiugongge_font) || $jiugongge_font instanceof \think\Collection || $jiugongge_font instanceof \think\Paginator): $i = 0; $__LIST__ = $jiugongge_font;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <div class="home_Label ad" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                    data-url="<?php echo htmlentities($item['androidurl']); ?>">
                    <img src="<?php echo htmlentities($item['img']); ?>" class="home_LabelCoverImg">
                    <div class="home_LabelContent">
                        <div class="home_LabelContent_title">
                            <?php echo htmlentities($item['name']); ?>
                        </div>
                        <div class="home_LabelContent_txt">
                            <?php echo htmlentities($item['content']); ?>
                        </div>
                    </div>
                    <img src="/static/video/img/rightCircle.png" class="home_LabelContent_title_yellowRight">
                </div>

                <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>




            <div class="index_swiper" style="margin-bottom: 16px;">
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




            <!-- 导航栏 -->
            <div class="lableList">
                <a href="/video/<?php echo htmlentities($channel); ?>.html?key=1"><div class="lable 
                    <?php if($keys == 1): ?>lable_active<?php endif; ?>" 
                    >推荐</div></a>
                <a href="/video/<?php echo htmlentities($channel); ?>.html?key=2"><div class="lable <?php if($keys == 2): ?>lable_active<?php endif; ?>">最新</div></a>
                <a href="/video/<?php echo htmlentities($channel); ?>.html?key=3"><div class="lable <?php if($keys == 3): ?>lable_active<?php endif; ?>">最热</div></a>
            </div>
            <div class="home_videoList">
                <?php if(is_array($video1) || $video1 instanceof \think\Collection || $video1 instanceof \think\Paginator): $i = 0; $__LIST__ = $video1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <a href="/video/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($item['id']); ?>">
                    <div class="home_videoLable">
                        <div class="home_videoLable_imgBox">
                            <img  class="home_videoLable_img lozad"  src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($videoimg); ?><?php echo htmlentities(urlparse($item['enpic'])); ?>">
                            <div class="home_videoLable_clock">
                                <?php echo htmlentities($item['time']); ?>
                            </div>
                        </div>

                        <div class="home_videoLable_text">
                          <?php echo htmlentities($item['title']); ?>
                        </div>
                        <div class="home_videoLable_bfNum">
                           <?php echo htmlentities(eyew($item['eye'])); ?>w次播放
                        </div>

                    </div>
                    </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              
              
               

            </div>

            <?php if(is_array($zhong_img_ad) || $zhong_img_ad instanceof \think\Collection || $zhong_img_ad instanceof \think\Paginator): $i = 0; $__LIST__ = $zhong_img_ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <img src="<?php echo htmlentities($item['img']); ?>" class="banner ad" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>"
                data-site="<?php echo htmlentities($site_id); ?>" data-url="<?php echo htmlentities($item['androidurl']); ?>">
            <?php endforeach; endif; else: echo "" ;endif; ?>

            <!-- 抖音 -->
            <div class="index_dyList" style="padding: 8px 0;border: 0px;">
                <?php if(is_array($zhong_font_ad) || $zhong_font_ad instanceof \think\Collection || $zhong_font_ad instanceof \think\Paginator): $i = 0; $__LIST__ = $zhong_font_ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <div class="index_dyListBox ad " data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                    data-url="<?php echo htmlentities($item['androidurl']); ?>">
                    <div class="flexBox">
                        <img src="<?php echo htmlentities($item['img']); ?>" class="index_dyList_img">
                        <div class="index_dyList_dyTxt"><?php echo htmlentities($item['name']); ?></div>

                    </div>

                    <img src="/static/video/img/rightIcon.png" class="index_dyList_rightIcon">
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>


            </div>
            <div class="home_videoList">
                <?php if(is_array($video2) || $video2 instanceof \think\Collection || $video2 instanceof \think\Paginator): $i = 0; $__LIST__ = $video2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <a href="/video/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($item['id']); ?>">
                    <div class="home_videoLable">
                        <div class="home_videoLable_imgBox">
                            <img class="home_videoLable_img lozad"   src="/static/images/loading_img_bg_default.jpg" data-src="<?php echo htmlentities($videoimg); ?><?php echo htmlentities(urlparse($item['enpic'])); ?>">
                            <div class="home_videoLable_clock">
                                <?php echo htmlentities($item['time']); ?>
                            </div>
                        </div>

                        <div class="home_videoLable_text">
                          <?php echo htmlentities($item['title']); ?>
                        </div>
                        <div class="home_videoLable_bfNum">
                           <?php echo htmlentities(eyew($item['eye'])); ?>w次播放
                        </div>

                    </div>
                    </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <?php if(is_array($di_img_ad) || $di_img_ad instanceof \think\Collection || $di_img_ad instanceof \think\Paginator): $i = 0; $__LIST__ = $di_img_ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <img class="banner ad" src="<?php echo htmlentities($item['img']); ?>"  data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>"
             data-site="<?php echo htmlentities($site_id); ?>" data-url="<?php echo htmlentities($item['androidurl']); ?>" />
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <!-- 抖音 -->
            <div class="index_dyList" style="padding: 8px 0;border: 0px;">
            
                <?php if(is_array($di_img_font_ad) || $di_img_font_ad instanceof \think\Collection || $di_img_font_ad instanceof \think\Paginator): $i = 0; $__LIST__ = $di_img_font_ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                    <div class="index_dyListBox ad " data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>"
                    data-site="<?php echo htmlentities($site_id); ?>" data-url="<?php echo htmlentities($item['androidurl']); ?>">
                        <div class="flexBox">
                            <img src="<?php echo htmlentities($item['img']); ?>" class="index_dyList_img">
                            <div class="index_dyList_dyTxt"><?php echo htmlentities($item['name']); ?></div>

                        </div>

                        <img src="/static/video/img/rightIcon.png" class="index_dyList_rightIcon">
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>

            <!-- 分页 -->
    
            <div class="pageNum" style="margin-top: 10px;">
                <?php echo $list; ?>
                <!-- <div class="pageNext">
                    <img src="/static/video/images/Chevron_Left.svg" />
                </div>
                <div class="pageNumBox" style="background: #FFFFFF33;">1</div>
                <div class="pageNumBox">2</div>
                <div class="pageNumBox">3</div>
                <div class="pageNumBox">4</div>
                <div class="pageNumBox">5</div>
                <div class="pageNumBox">6</div>
                <div class="pageMore">...</div>
                <div class="pageNumBox">142</div>
                <div class="pageNext"> <img src="/static/video/images/right.svg" /> </div> -->
            </div>




        </div>


    </div>




    </div>


</body>
<script src="/static/common/jq.js"></script>
<script src="/static/common/swiper.js"></script>
<script src="/static/common/apps.js"></script>
<script src="/static/video/js/swiper-bundle.min.js"></script>
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
                $('#imgToChange').attr('src', '/static/video/images/daoxu.svg');

            } else {
                $('#textToChange').text("正序");
                $('#imgToChange').attr('src', '/static/video/images/zhengxu.svg');
            }
        });
    });
</script>

</html>