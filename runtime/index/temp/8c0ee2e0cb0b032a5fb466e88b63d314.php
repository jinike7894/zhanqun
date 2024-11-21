<?php /*a:2:{s:62:"/www/wwwroot/zhanqun.dahuangua.com/view/index/chigua/info.html";i:1732116170;s:64:"/www/wwwroot/zhanqun.dahuangua.com/view/index/chigua/header.html";i:1732116234;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>黑料网首页</title>
    <link rel="stylesheet" href="/static/chigua/css/styleOld.css">
    <link rel="stylesheet" href="/static/chigua/css/home.css">
    <script type="text/javascript" src="/static/chigua/js/jquery.js"></script>
    <script type="text/javascript" src="/static/video/js/app.js"></script>
    <link rel="stylesheet" href="/static/chigua/css/styles.css">
    <link rel="stylesheet" href="/static/chigua/css/hl_styles.css">
    <link rel="stylesheet" href="/static/chigua/css/swiperGf.css" />
    <link rel="stylesheet" href="/static/css/commons.css" />
</head>

<body>
    <input type="hidden" id="site_id" value="<?php echo htmlentities($site_id); ?>">
    <input type="hidden" id="channel" value="<?php echo htmlentities($tongjiCode); ?>">
    <!-- 人气榜 -->
    <div id="page" style="background: #0D0E0E;">

        <!-- 顶部 -->
        <div class="header">
            <div class="headerBox">
                <div class="logoBox">
                    <a href="/chigua/<?php echo htmlentities($channel); ?>.html">
                    <img src="<?php echo htmlentities($logo); ?>" class="header_logo">
                </a>
                    <!-- <img src="/static/chigua/img/hlLogotxt.png" class="header_logoTxt"> -->

                </div>
                <!-- <a href="/static/chigua/search.html">
                    <div class="header_input">
                        <div class="headerInput"> 搜索</div>
                        <img src="/static/chigua/img/search.png" class="header_search">

                    </div>
                </a> -->

                <img src="/static/chigua/img/hlBtn.png" class="header_collect">

            </div>
            <div class="header_nav">
                <div class="header_navLine">
                    <a href="./<?php echo htmlentities($channel); ?>.html">
                    <div class="header_navTxt">
                        全部
                    </div>
                    <div class="header_navli"></div>
                    </a>
                </div>
                <?php if(is_array($chiguaCate) || $chiguaCate instanceof \think\Collection || $chiguaCate instanceof \think\Paginator): $i = 0; $__LIST__ = $chiguaCate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <a href="./<?php echo htmlentities($channel); ?>.html?cate_id=<?php echo htmlentities($item['id']); ?>">
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
        <!-- 顶部结束 -->
        <div class="contentBox">

            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php if(is_array($BannerList) || $BannerList instanceof \think\Collection || $BannerList instanceof \think\Paginator): $i = 0; $__LIST__ = $BannerList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Banner): $mod = ($i % 2 );++$i;?>
                    <div  class="swiper-slide ad" data-id="<?php echo htmlentities($Banner['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
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
                <div class="index_jiugongge_li ad"  data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                data-url="<?php echo htmlentities($item['androidurl']); ?>">
                    <img class="index_jiugongge_img" src="<?php echo htmlentities($item['img']); ?>">
                    <div class="index_jiugongge_text"><?php echo htmlentities($item['name']); ?></div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>

            <!-- 标签 -->
            <div class="home_LabelBox" style="margin-bottom: 0;">
                <?php if(is_array($jiugongge_font) || $jiugongge_font instanceof \think\Collection || $jiugongge_font instanceof \think\Paginator): $i = 0; $__LIST__ = $jiugongge_font;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
           
                    <div class="hlhome_Label ad" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                    data-url="<?php echo htmlentities($item['androidurl']); ?>">
                        <img src="<?php echo htmlentities($item['img']); ?>" class="hlhome_LabelCoverImg">
                        <div class="home_LabelContent">
                            <div class="hlhome_LabelContent_title">
                                <?php echo htmlentities($item['name']); ?>
                            </div>
                            <div class="home_LabelContent_txt">
                                <?php echo htmlentities($item['content']); ?>
                            </div>
                        </div>
                        <img src="/static/chigua/img/rightCircle.png" class="home_LabelContent_right">
                    </div>
          
                <?php endforeach; endif; else: echo "" ;endif; ?>


               
            </div>
<div class="nav" style="background: #161616;">
    <div class="left">
        <img class="leftBtn" src="/static/chigua/images/btn_left.svg" />
        <div class="leftName">吃瓜阅读</div>
    </div>
</div>
<div class="read_hl">
    <div class="read_hl_title">
        <?php echo htmlentities($info['title']); ?>
    </div>
    <div class="read_hl_txt" style="margin-top: 24px;"><?php echo htmlentities(siteName($site_id)); ?>官方 • <?php echo htmlentities(dateToYmd($info['create_time'])); ?></div>
    <div class="read_hl_txt"><?php echo htmlentities(chiguaCate($info['cate_id'])); ?></div>

    <div id="rich-text-container" contenteditable="true"> </div>
             
    <!-- <div id="rich-text-container" ></div> -->
    <script>
        $.ajax({
            "url":"/chigua/contents/1.html",
            "type":"get",
            "data":{"id":"<?php echo htmlentities($info['id']); ?>"},
            "success":function(res){
                $("#rich-text-container").html(res.data)
            }
        })
  
    </script>


</div>

<div class="nav">
    <div class="left">
        <img class="leftBtn" style="margin-right: 5px;" src="/static/chigua/images/rectangle.svg" />
        <div class="leftName">推荐黑料</div>
    </div>
</div>
<!--视频播放模块 -->
<div class="home_hlList">
    <?php if(is_array($chigua) || $chigua instanceof \think\Collection || $chigua instanceof \think\Paginator): $i = 0; $__LIST__ = $chigua;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
    <a href="/chigua/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($item['id']); ?>">
    <div class="home_hl_box">
        <img src="<?php echo htmlentities($item['cover']); ?>" class="home_hl_img" />
        <div class="home_hl_back"></div>
        <div class="home_hl_txtBox">
            <div class="home_hl_txtTop">
                <?php echo htmlentities($item['title']); ?>
            </div>
            <div class="home_hl_txtBottom">
                <?php echo htmlentities(siteName($site_id)); ?>官方 • <?php echo htmlentities(dateToYmd($item['create_time'])); ?>
            </div>
            <div class="home_hl_txtBottom">
            <?php echo htmlentities(chiguaCate($item['cate_id'])); ?>
            </div>
        </div>
        <img src="/static/chigua/img/searchHot.png" class="home_hl_searchHot">
    </div>
    </a>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<!-- 广告 -->
<!-- <img src="/static/chigua/img/ggHl.png" class="home_hl_gg"> -->

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
    <?php echo $chigua; ?>
    <!-- <div class="pageNext">
        <img src="/static/chigua/images/Chevron_Left.svg" />
    </div>
    <div class="pageNumBox" style="background: #FFFFFF33;">1</div>
    <div class="pageNumBox">2</div>
    <div class="pageNumBox">3</div>
    <div class="pageNumBox">4</div>
    <div class="pageNumBox">5</div>
    <div class="pageNumBox">6</div>
    <div class="pageMore">...</div>
    <div class="pageNumBox">142</div>
    <div class="pageNext"> <img src="/static/chigua/images/right.svg" /> </div> -->
</div>




</div>


</div>




</div>


</body>
<script src="/static/chigua/js/swiper.js"></script>
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
            $(".header_navTxt").removeClass("hlheader_navTxt_active");
            $(this).addClass("hlheader_navTxt_active");
        });
        //点击正倒序
        $('.mulvTop').click(function () {
            var currentText = $('#textToChange').text();
            if (currentText === "正序") {
                $('#textToChange').text("倒序");
                $('#imgToChange').attr('src', '/static/chigua/images/daoxu.svg');

            } else {
                $('#textToChange').text("正序");
                $('#imgToChange').attr('src', '/static/chigua/images/zhengxu.svg');
            }
        });
    });
</script>

</html>