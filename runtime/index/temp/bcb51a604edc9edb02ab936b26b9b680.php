<?php /*a:2:{s:47:"C:\wwwroot\zhanqun\view\index\image\search.html";i:1732704133;s:48:"C:\wwwroot\zhanqun\view\index\image\header1.html";i:1732705402;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="/static/image/css/styleOld.css">
    <link rel="stylesheet" href="/static/image/css/home.css">
    <script type="text/javascript" src="/static/image/js/jquery.js"></script>
    <script type="text/javascript" src="/static/image/js/app.js"></script>
    <link rel="stylesheet" href="/static/image/css/styles.css">
    <link rel="stylesheet" href="/static/image/css/swiperGf.css" />
    <link rel="stylesheet" href="/static/css/commons.css" />
</head>

<body>
    <input type="hidden" id="site_id" value="<?php echo htmlentities($site_id); ?>">
    <input type="hidden" id="channel" value="<?php echo htmlentities($tongjiCode); ?>">
    <!-- 人气榜 -->
    <div id="page">

        <!-- 顶部 -->
        <div class="header">
            <div class="header_nav">
                <a href="/image/<?php echo htmlentities($channel); ?>.html">
                <div class="header_navLine ">
                    <div class="header_navTxt ">
                        推荐
                    </div>
                </div>
            </a>
                <?php if(is_array($novelCate) || $novelCate instanceof \think\Collection || $novelCate instanceof \think\Paginator): $i = 0; $__LIST__ = $novelCate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <a href="/image/<?php echo htmlentities($channel); ?>.html?cate_id=<?php echo htmlentities($item['id']); ?>">
                <div class="header_navLine ">
                    <div class="header_navTxt  <?php if($cate_id == $item['id']): ?>header_navTxt_active<?php endif; ?> ">
                        <?php echo htmlentities($item['title']); ?>
                    </div>
                </div>
                </a>
               <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
        </div>
        <div class="serachBox">
            <div class="searchBox_Box">
                <input  class="searchBox_input" placeholder="搜索更多"/>
                <img src="/static/image/img/search.png" class="searchBox_searcchImg">
                <div class="searchBox_Btn" data-url="/image/searchres/<?php echo htmlentities($channel); ?>.html">搜索</div>
            </div>
            

         </div>
        <!-- 顶部结束 -->
        <div class="contentBox">

            <!-- Swiper -->
         
            <div class="home_searchBox">
                <?php if(is_array($novelCate) || $novelCate instanceof \think\Collection || $novelCate instanceof \think\Paginator): $i = 0; $__LIST__ = $novelCate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <a href="/image/<?php echo htmlentities($channel); ?>.html?cate_id=<?php echo htmlentities($item['id']); ?>">
                    <div class="home_searchBox_btn">
                        <?php echo htmlentities($item['title']); ?>
                    </div>
                </a>
               <?php endforeach; endif; else: echo "" ;endif; ?>
               <a href="/image/search/<?php echo htmlentities($channel); ?>.html">
                <div class="home_searchMore">
                    搜索更多
                    <img src="/static/image/img/search.png" class="home_searchImg">
                </div>
                </a>
            </div>



            <!-- 九宫格文字版 -->
            <div class="index-jiugonggeTxt" style="margin-bottom: 8px;">
     
                    <?php if(is_array($jiugongge_font) || $jiugongge_font instanceof \think\Collection || $jiugongge_font instanceof \think\Paginator): $i = 0; $__LIST__ = $jiugongge_font;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                    <div class="index_jiugonggeTxt_text ad" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                    data-url="<?php echo htmlentities($item['androidurl']); ?>">
                        <div class="index_jiugonggeTxt_textleft">
                            <img src="<?php echo htmlentities($item['img']); ?>" class="index_jiugonggeTxt_img">
                           <?php echo htmlentities($item['name']); ?>
                        </div>
                        
                        <img src="/static/image/img/rightBtn.png" class="index_jiugonggeTxt_rightBtn">
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
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
        <!-- 图集 -->

        <div class="contentBox">
            <div class="tj_nav">猜你喜欢</div>
            <div class="hotList">
                <?php if(is_array($image) || $image instanceof \think\Collection || $image instanceof \think\Paginator): $i = 0; $__LIST__ = $image;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <a href="/image/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($item['id']); ?>">
                <div class="book">
                    <div class="bookImg">
                        <img style="width: 100%;height: 100%;" data-src="<?php echo htmlentities(imagefirst($item['pic'])); ?>"
                        src="/static/images/loading_img_bg_default.jpg" class="imgbase64" />
                        <div class="bookBox_numPage">
                            <img src="/static/image/img/tuji.png" class="bookBox_img"><?php echo htmlentities($item['pic_num']); ?>张
                        </div>
                    </div>
                    <div style="padding: 5px;">
                        <div class="bookName"><?php echo htmlentities(fontsize3($item['title'])); ?></div>
                        <div class="bookText"><?php echo htmlentities(fontsize3($item['detail'])); ?></div>
                        <div class="bookNav">
                            <span>#<?php echo htmlentities(getImageCate($item['cate_id'])); ?></span>
                       
                        </div>
                    </div>

                </div>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <?php if(is_array($di_img_ad) || $di_img_ad instanceof \think\Collection || $di_img_ad instanceof \think\Paginator): $i = 0; $__LIST__ = $di_img_ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <img class="banner ad" src="<?php echo htmlentities($item['img']); ?>"  data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>"
             data-site="<?php echo htmlentities($site_id); ?>" data-url="<?php echo htmlentities($item['androidurl']); ?>" onerror="this.src='/static/images/loading_img_bg_default.jpg';"/>
            <?php endforeach; endif; else: echo "" ;endif; ?>


            <div class="index_dyList" style="padding: 8px 0;border: 0px;">
                <?php if(is_array($di_img_font_ad) || $di_img_font_ad instanceof \think\Collection || $di_img_font_ad instanceof \think\Paginator): $i = 0; $__LIST__ = $di_img_font_ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                    <div class="index_dyListBox ad " data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>"
                    data-site="<?php echo htmlentities($site_id); ?>" data-url="<?php echo htmlentities($item['androidurl']); ?>">
                        <div class="flexBox">
                            <img src="<?php echo htmlentities($item['img']); ?>" class="index_dyList_img" onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                            <div class="index_dyList_dyTxt"><?php echo htmlentities($item['name']); ?></div>

                        </div>

                        <img src="/static/video/img/rightIcon.png" class="index_dyList_rightIcon">
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
            
        </div>



    </div>




    </div>


</body>
<script src="/static/common/jq.js"></script>
<script src="/static/common/swiper.js"></script>
<script src="/static/common/apps.js"></script>
<script src="/static/image/js/swiper.js"></script>
<script>
 $(document).ready(function () {
        // 获取所有 class 为 imgbase64 的 img 标签 
        $('img.imgbase64').each(function () {
            var img = $(this);
            var imgSrc = img.attr('data-src');
            var url="<?php echo htmlentities($img_cdn); ?>/"+imgSrc
            var content="";
            $.ajax({ url:url, 
             type: 'GET', 
             success: function(data) { 
                content='data:image/jpeg;base64,'+data
                console.log(content)
                img.attr('src', content);
            }, 
                error: function(xhr, status, error) { } 
            });
           
        });
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
       
        //导航栏
        $(".header_navTxt").click(function () {
            $(".header_navTxt").removeClass("header_navTxt_active");
            $(this).addClass("header_navTxt_active");
        });
 
    });
    $(document).ready(function() { $('.searchBox_Btn').on('click', function() {
         var text=$(".searchBox_input").val();
         var url=$(this).attr("data-url");
        window.location.href = url+"?query="+text; 
    }); 
        });
</script>

</html>