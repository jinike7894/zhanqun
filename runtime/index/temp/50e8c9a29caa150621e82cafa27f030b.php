<?php /*a:1:{s:46:"C:\wwwroot\zhanqun\view\index\novel\index.html";i:1732606411;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>小说首页</title>
    <link rel="stylesheet" href="/static/novel/css/styleOld.css">
    <link rel="stylesheet" href="/static/novel/css/introduction.css">
    <link rel="stylesheet" href="/static/novel/css/home.css">

    <script type="text/javascript" src="/static/novel/js/jquery.js"></script>
    <script type="text/javascript" src="/static/novel/js/app.js"></script>
    <link rel="stylesheet" href="/static/novel/css/styles.css">
    <link rel="stylesheet" href="/static/novel/css/swiperGf.css" />
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

    <div id="page">

        <div class="header">
            <div class="headerBox">
                <div class="logoBox">
                    <img src="<?php echo htmlentities($logo); ?>" class="header_logo">

                </div>
                <a href="/novel/search/<?php echo htmlentities($channel); ?>.html">
                    <div class="header_input">
                        <div class="headerInput" > 搜索</div>
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
                <?php if(is_array($novelCate) || $novelCate instanceof \think\Collection || $novelCate instanceof \think\Paginator): $i = 0; $__LIST__ = $novelCate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <a href="/novel/<?php echo htmlentities($channel); ?>.html?cate_id=<?php echo htmlentities($item['id']); ?>">
                <div class="header_navLine   <?php if($cate_id == $item['id']): ?>actives1<?php endif; ?>">
                    <div class="header_navTxt ">
                        <?php echo htmlentities($item['title']); ?>
                    </div>
                    <div class="header_navli"></div>
                </div>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
        </div>
        

        <div class="contentBox" style="padding-top: 90px;">

          
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php if(is_array($BannerList) || $BannerList instanceof \think\Collection || $BannerList instanceof \think\Paginator): $i = 0; $__LIST__ = $BannerList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Banner): $mod = ($i % 2 );++$i;?>
                    <div class="swiper-slide ad "  data-id="<?php echo htmlentities($Banner['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                    data-url="<?php echo htmlentities($Banner['androidurl']); ?>"><img src="<?php echo htmlentities($Banner['img']); ?>" onerror="this.src='/static/images/loading_img_bg_default.jpg';"></div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
       
                <div class="swiper-pagination"></div>
            </div>


       
            <div class="index_jiugongge">
                <?php if(is_array($jiugongge_img) || $jiugongge_img instanceof \think\Collection || $jiugongge_img instanceof \think\Paginator): $i = 0; $__LIST__ = $jiugongge_img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <div class="index_jiugongge_li ad" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                data-url="<?php echo htmlentities($item['androidurl']); ?>">
                    <img class="index_jiugongge_img" src="<?php echo htmlentities($item['img']); ?>" onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                    <div class="index_jiugongge_text"><?php echo htmlentities($item['name']); ?></div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
      
            <div class="index-jiugonggeTxt" style="margin-bottom: 8px;">
                <?php if(is_array($jiugongge_font) || $jiugongge_font instanceof \think\Collection || $jiugongge_font instanceof \think\Paginator): $i = 0; $__LIST__ = $jiugongge_font;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <div class="index_jiugonggeTxt_text ad" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                data-url="<?php echo htmlentities($item['androidurl']); ?>" style="background: #171818;"><?php echo htmlentities($item['name']); ?></div>
                <?php endforeach; endif; else: echo "" ;endif; ?>


            </div>
   
            <div class="home_LabelBox">
                <?php if(is_array($img_font_ad) || $img_font_ad instanceof \think\Collection || $img_font_ad instanceof \think\Paginator): $i = 0; $__LIST__ = $img_font_ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                    <div class="home_Label ad"  data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                    data-url="<?php echo htmlentities($item['androidurl']); ?>">
                        <img src=" <?php echo htmlentities($item['img']); ?>" class="home_LabelCoverImg" onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                        <div class="home_LabelContent">
                            <div class="home_LabelContent_title">
                               <?php echo htmlentities($item['name']); ?>
                            </div>
                            <div class="home_LabelContent_txt">
                                <?php echo htmlentities($item['content']); ?>
                            </div>
                        </div>
                        <img src="/static/novel/img/yellowRight.png" class="home_LabelContent_title_yellowRight">
                    </div>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
              

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
            <!-- 导航栏 -->
            <div class="lableList">
                <a href="/novel/<?php echo htmlentities($channel); ?>.html?type=renqi"><div class="lable <?php if($types == 1): ?>lable_active<?php endif; ?>">人气榜</div></a>
                <a href="/novel/<?php echo htmlentities($channel); ?>.html?type=tuijian"><div class="lable <?php if($types == 2): ?>lable_active<?php endif; ?>">推荐榜</div></a>
                <a href="/novel/<?php echo htmlentities($channel); ?>.html?type=shoucang"><div class="lable <?php if($types == 3): ?>lable_active<?php endif; ?>">收藏榜</div></a>
                <a href="/novel/<?php echo htmlentities($channel); ?>.html?type=resou"><div class="lable <?php if($types == 4): ?>lable_active<?php endif; ?>">热搜榜</div></a>
            </div>

            <div class="homeBookBox">
                <?php if(is_array($novel1) || $novel1 instanceof \think\Collection || $novel1 instanceof \think\Paginator): $index = 0; $__LIST__ = $novel1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($index % 2 );++$index;?>
               
                <a class="homeBook" href="/novel/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($item['id']); ?>">

                    <div class="homeBookLeft">
                        <img class="homeBookLeftCover lozad" data-src="<?php echo htmlentities($tmimg); ?><?php echo htmlentities($item['enpic']); ?>" src="/static/images/loading_img_bg_default.jpg"  />
                        <img class="homeBookLeftWj" src="/static/novel/images/wanjie.png">
                    </div>
                    <div class="homeBookright">
                        <div class="homeBookrightTitle" <?php if(($index == 1) or($index == 2)or ($index == 3)): ?>style="color: #FF3172;"<?php endif; ?>><?php echo htmlentities($item['title']); ?></div>
                        <div class="homeBookrightNum" <?php if(($index == 1) or($index == 2)or ($index == 3)): ?>style="color: #FF3172;"<?php endif; ?>>
                            <div class="homeBookrightNumDot" <?php if(($index == 1) or($index == 2)or ($index == 3)): ?>style="background: #FF1962;
" <?php endif; ?>><?php echo htmlentities($index); ?></div> <?php echo htmlentities(getNovelCate($item['cate_id'])); ?>
                        </div>
                        <div class="homeBookreadNum">
                            <div><?php echo htmlentities(eyek($item['eye'])); ?>k阅读</div>
                            <div style="display: flex;align-items: center;">
                                <div class="dotred"></div><?php echo htmlentities($item['times']); ?>小时前
                            </div>
                        </div>

                    </div>
           
                </a>
               
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="chooseMl" style="margin-top: 10px;">
                <div class="choosePage">全部题材</div>
                <?php if(is_array($novelCate) || $novelCate instanceof \think\Collection || $novelCate instanceof \think\Paginator): $i = 0; $__LIST__ = $novelCate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <a href="/novel/<?php echo htmlentities($channel); ?>.html?cate_id=<?php echo htmlentities($item['id']); ?>"><div class="choosePage <?php if($cate_id == $item['id']): ?>choosePage choosePage_active<?php endif; ?>"><?php echo htmlentities($item['title']); ?></div></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

            <div class="hotList">
                <?php if(is_array($novels1) || $novels1 instanceof \think\Collection || $novels1 instanceof \think\Paginator): $i = 0; $__LIST__ = $novels1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <a href="/novel/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($item['id']); ?>">
                <div class="book">
                    <div class="bookImg">
                        <img style="width: 100%;height: 100%;" src="/static/images/loading_img_bg_default.jpg" class=" lozad" data-src="<?php echo htmlentities($tmimg); ?><?php echo htmlentities($item['enpic']); ?>" />
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
                                <div class="dot"></div><?php echo htmlentities(timesrand($item['title'])); ?>小时前
                            </div>
                        </div>
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
              
                    <div class="index_dyListBox ad" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                    data-url="<?php echo htmlentities($item['androidurl']); ?>">
                        <div class="flexBox">
                            <img src="<?php echo htmlentities($item['img']); ?>" class="index_dyList_img" onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                            <div class="index_dyList_dyTxt"><?php echo htmlentities($item['name']); ?></div>

                        </div>

                        <img src="/static/novel/img/rightIcon.png" class="index_dyList_rightIcon">
                    </div>
          
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
            <div class="hotList">
                <?php if(is_array($novels2) || $novels2 instanceof \think\Collection || $novels2 instanceof \think\Paginator): $i = 0; $__LIST__ = $novels2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <a href="/novel/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($item['id']); ?>">
                <div class="book">
                    <div class="bookImg">
                        <img style="width: 100%;height: 100%;"  src="/static/images/loading_img_bg_default.jpg" class=" lozad" data-src="<?php echo htmlentities($tmimg); ?><?php echo htmlentities($item['enpic']); ?>"  />
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
                                <div class="dot"></div><?php echo htmlentities(timesrand($item['title'])); ?>小时前
                            </div>
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
            <!-- 抖音 -->
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

            <!-- 分页 -->
            <div class="pageNum" style="margin-top: 10px;">
                <?php echo $novel2; ?>
            </div>




        </div>


    </div>




    </div>


</body>
<script src="/static/common/jq.js"></script>
<script src="/static/common/swiper.js"></script>
<script src="/static/common/apps.js"></script>
<script src="/static/novel/js/swiper.js"></script>
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
                $('#imgToChange').attr('src', '/static/novel/images/daoxu.svg');

            } else {
                $('#textToChange').text("正序");
                $('#imgToChange').attr('src', '/static/novel/images/zhengxu.svg');
            }
        });
    });
</script>

</html>