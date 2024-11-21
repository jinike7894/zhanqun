<?php /*a:1:{s:45:"C:\wwwroot\zhanqun\view\index\video\info.html";i:1732200819;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>人气榜</title>
    <link rel="stylesheet" href="/static/video/styles.css">
    <link rel="stylesheet" href="/static/video/introduction.css">
    <script type="text/javascript" src="/static/video/js/jquery.js"></script>
    <script type="text/javascript" src="/static/video/js/app.js"></script>
    <link rel="stylesheet" href="/static/video/css/styles.css">
    <link rel="stylesheet" href="/static/video/css/index.min.css"/>
    <script charset="utf-8" src="/static/video/js/index.min.js"></script>
    <link rel="stylesheet" href="/static/video/home.css">
    <link rel="stylesheet" href="/static/video/min.css" />
    <link rel="stylesheet" href="/static/css/commons.css" />


</head>
<style>

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


</style>
<body>
    <input type="hidden" id="site_id" value="<?php echo htmlentities($site_id); ?>">
    <input type="hidden" id="channel" value="<?php echo htmlentities($tongjiCode); ?>">
    <!--小说阅读 -->
    <div id="page">
        


        <div class="header">
            <div class="headerBox">
                <a href="/video/<?php echo htmlentities($channel); ?>.html">
                <div class="logoBox">
                    <img src="<?php echo htmlentities($logo); ?>" class="header_logo">
                    <!-- <img src="/static/video/img/logoTxt.png" class="header_logoTxt"> -->

                </div>
                </a>
                <a href="/video/search/<?php echo htmlentities($channel); ?>.html">
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
            <!-- <div class="home_LabelBox">

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

            </div> -->
            <!-- <div class="index_swiper" style="margin-bottom: 16px;">
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
    
            </div> -->



        


        <!-- 返回栏 -->
        <div class="nav">
            <div class="left">
                <img class="leftBtn" style="margin-right: 5px;" src="/static/video/images/rectangle.png" />
                <div class="leftName">视频播放</div>
            </div>
        </div>
      
       

        <div class="contentBox">
            <div class="introduction_Box">
                <div class="introduction_title">
                    <?php echo htmlentities($info['title']); ?>
                </div>
                <div > 
                    <div id="mse" class="mse"></div>
                </div>
                <div class="introduction_txt">
                    视频简介：<?php echo htmlentities($info['introduce']); ?>
                </div>
            </div>



            <?php if(is_array($zhong_img_ad) || $zhong_img_ad instanceof \think\Collection || $zhong_img_ad instanceof \think\Paginator): $i = 0; $__LIST__ = $zhong_img_ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <img src="<?php echo htmlentities($item['img']); ?>" class="banner ad" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>"
                data-site="<?php echo htmlentities($site_id); ?>" data-url="<?php echo htmlentities($item['androidurl']); ?>">
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="introduction_gg">
                <?php if(is_array($zhong_font_ad) || $zhong_font_ad instanceof \think\Collection || $zhong_font_ad instanceof \think\Paginator): $i = 0; $__LIST__ = $zhong_font_ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <div class="introduction_ggNav ad" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                    data-url="<?php echo htmlentities($item['androidurl']); ?>">
                    <div class="introduction_ggTxt">
                        <?php echo htmlentities($item['name']); ?>
                    </div>
                    <img src="/static/video/img/rightCircle.png" class="introduction_ggBtn">

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
            <!-- 热门推荐 -->
            <div class="nav" style="padding: 0;">
                <div class="left">
                    <img class="leftBtn" style="margin-right: 5px;" src="/static/video/images/rectangle.png" />
                    <div class="leftName">官方推荐</div>
                </div>
            </div>
            <!-- 官方推荐 -->
            <div class="home_videoList">
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <a href="/video/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($item['id']); ?>">
                    <div class="home_videoLable">
                        <div class="home_videoLable_imgBox">
                            <img src="<?php echo htmlentities($item['pic']); ?>" class="home_videoLable_img">
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
            <img class="banner ad" src="<?php echo htmlentities($item['img']); ?>" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>"
                data-site="<?php echo htmlentities($site_id); ?>" data-url="<?php echo htmlentities($item['androidurl']); ?>" />
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <!-- 抖音 -->
            <div class="index_dyList">

                <?php if(is_array($di_img_font_ad) || $di_img_font_ad instanceof \think\Collection || $di_img_font_ad instanceof \think\Paginator): $i = 0; $__LIST__ = $di_img_font_ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>

                <div class="index_dyListBox ad" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                    data-url="<?php echo htmlentities($item['androidurl']); ?>">
                    <div class="flexBox">
                        <img src="<?php echo htmlentities($item['img']); ?>" class="index_dyList_img">
                        <div class="index_dyList_dyTxt"><?php echo htmlentities($item['name']); ?></div>

                    </div>

                    <img src="/static/video/img/rightIcon.png" class="index_dyList_rightIcon">
                </div>

                <?php endforeach; endif; else: echo "" ;endif; ?>


            </div>



        </div>


    </div>

    <script>

    </script>
</body>
<script src="/static/common/jq.js"></script>
<script src="/static/common/swiper.js"></script>
<script src="/static/common/apps.js"></script>
<script src="/static/video/js/swiper-bundle.min.js"></script>
<script charset="utf-8" src="/static/video/js/index1.min.js"></script>


 <script> 
    const config = {
          "id": "mse",
          "url": "<?php echo htmlentities($info['video']); ?>",
          "playsinline": true,
          "poster": "",
          "plugins": [],
          "width":" 100%",
          "height": "180px",
        }
        config.plugins.push(HlsPlayer)
        let player = new Player(config)
    
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
                $('#imgToChange').attr('src', '/static/video/images/daoxu.svg');

            } else {
                $('#textToChange').text("正序");
                $('#imgToChange').attr('src', '/static/video/images/zhengxu.svg');
            }
        });
    });
</script>
<style>
    .mse{
        width: 200px;
        flex:auto;
    }
</style>
</html>