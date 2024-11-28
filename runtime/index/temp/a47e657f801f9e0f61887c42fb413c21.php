<?php /*a:1:{s:47:"C:\wwwroot\zhanqun\view\index\novel\search.html";i:1732606143;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>搜索</title>
    <link rel="stylesheet" href="/static/novel/css/styleOld.css">
    <link rel="stylesheet" href="/static/novel/css/introduction.css">
    <link rel="stylesheet" href="/static/novel/css/home.css">
    <script type="text/javascript" src="/static/novel/js/jquery.js"></script>
    <script type="text/javascript" src="/static/novel/js/app.js"></script>

    <link rel="stylesheet" href="/static/novel/css/search.css">
    <link rel="stylesheet" href="/static/novel/css/styles.css">
    <link rel="stylesheet" href="/static/novel/css/swiperGf.css" />
</head>
<style>
    a{
       color: #FFFFFFCC;
    }
</style>

<body>
    <input type="hidden" id="site_id" value="<?php echo htmlentities($site_id); ?>">
    <input type="hidden" id="channel" value="<?php echo htmlentities($tongjiCode); ?>">
    <!-- 人气榜 -->
    <div id="searchpage">

        <!-- 顶部 -->
        <div class="header">
            <div class="headerBox">
                <a href="/novel/<?php echo htmlentities($channel); ?>.html">
                <div class="logoBox">
                    <img src="<?php echo htmlentities($logo); ?>" class="header_logo">

                </div>
            </a>
           
                <img src="/static/novel/img/collectBtn.png" class="header_collect">

            </div>
            <div class="search_input">
                <a href="/novel/<?php echo htmlentities($channel); ?>.html"><img src="/static/novel/img/back.png" class="search_back"></a>
                <div  class="search_inputBox">
                    <input class="search_input_input" />
                    <img src="/static/novel/img/search.png" class="header_search">
                
                        <div class="search_searchBtn" data-url="/novel/searchres/<?php echo htmlentities($channel); ?>.html">搜索</div>
                </div>
                
            </div>
        </div>
        <!-- 顶部结束 -->
        <div class="contentBox" style="padding-top: 90px;">

            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php if(is_array($BannerList) || $BannerList instanceof \think\Collection || $BannerList instanceof \think\Paginator): $i = 0; $__LIST__ = $BannerList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Banner): $mod = ($i % 2 );++$i;?>
                    <div class="swiper-slide ad"  data-id="<?php echo htmlentities($Banner['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                    data-url="<?php echo htmlentities($Banner['androidurl']); ?>"><img src="<?php echo htmlentities($Banner['img']); ?>" onerror="this.src='/static/images/loading_img_bg_default.jpg';"></div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
                <div class="swiper-pagination"></div>
            </div>

            <!-- 返回栏 -->
            <div class="nav" style="padding-left: 0;margin-top: 6px;">
                <div class="left">
                    <img class="leftBtn" style="margin-right: 5px;" src="/static/novel/images/rectangle.svg" />
                    <div class="leftName">热门搜索</div>
                </div>
            </div>
            <div class="search_hot">
                <div class="search_hotLeft">
                    <?php if(is_array($video1) || $video1 instanceof \think\Collection || $video1 instanceof \think\Paginator): $index = 0; $__LIST__ = $video1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($index % 2 );++$index;?>
                    <a href="/novel/searchres/<?php echo htmlentities($channel); ?>.html?query=<?php echo htmlentities($item['title']); ?>">
                        <div class="search_hotBox">
                            <div class="search_hotNum 
                            <?php if($index == 1): ?>serach_hotOne<?php endif; if($index == 2): ?>serach_hotTwo<?php endif; if($index == 3): ?>serach_hotThree<?php endif; ?>
                             ">
                                <?php echo htmlentities($index); ?>
                            </div>
                            <div class="search_hotTxt   
                            <?php if($index == 1): ?>serach_hotOneTxt<?php endif; if($index == 2): ?>search_hotTxtTwo<?php endif; if($index == 3): ?>search_hotTxtThree<?php endif; ?>
                            ">
                                <?php echo htmlentities($item['title']); ?>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="search_hotRight">
                    <?php if(is_array($video2) || $video2 instanceof \think\Collection || $video2 instanceof \think\Paginator): $index = 0; $__LIST__ = $video2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($index % 2 );++$index;?>
                    <a href="/novel/searchres/<?php echo htmlentities($channel); ?>.html?query=<?php echo htmlentities($item['title']); ?>">
                        <div class="search_hotBox">
                            <div class="search_hotNum serach_hotOther">
                               <?php echo htmlentities($index+6); ?>
                            </div>
                            <div class="search_hotTxt search_hotTxtOther">
                                <?php echo htmlentities($item['title']); ?>
                            </div>
                        </div>
                    </a>
                   <?php endforeach; endif; else: echo "" ;endif; ?>
                

                </div>


            </div>


            <!-- 九宫格 -->
            <div class="index_jiugongge">
                <?php if(is_array($jiugongge_img) || $jiugongge_img instanceof \think\Collection || $jiugongge_img instanceof \think\Paginator): $i = 0; $__LIST__ = $jiugongge_img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <div class="index_jiugongge_li ad"
                data-id="<?php echo htmlentities($Banner['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                data-url="<?php echo htmlentities($Banner['androidurl']); ?>"
                >
                    <img class="index_jiugongge_img" src="<?php echo htmlentities($item['img']); ?>" onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                    <div class="index_jiugongge_text"><?php echo htmlentities($item['name']); ?></div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
               

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
    $(document).ready(function() { $('.search_searchBtn').on('click', function() {
         var text=$(".search_input_input").val();
         var url=$(this).attr("data-url");
        window.location.href = url+"?query="+text; 
    }); 
        });
</script>

</html>