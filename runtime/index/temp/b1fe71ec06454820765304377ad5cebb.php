<?php /*a:2:{s:45:"C:\wwwroot\zhanqun\view\index\image\info.html";i:1732704825;s:48:"C:\wwwroot\zhanqun\view\index\image\header3.html";i:1732705386;}*/ ?>
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
        
        <!-- 顶部结束 -->
        <div class="contentBox" style="padding-top: 60px;">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
              
                    <?php if(is_array($BannerList) || $BannerList instanceof \think\Collection || $BannerList instanceof \think\Paginator): $i = 0; $__LIST__ = $BannerList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Banner): $mod = ($i % 2 );++$i;?>
                    <div class="swiper-slide ad " data-id="<?php echo htmlentities($Banner['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                        data-url="<?php echo htmlentities($Banner['androidurl']); ?>"><img src="<?php echo htmlentities($Banner['img']); ?>" onerror="this.src='/static/images/loading_img_bg_default.jpg';"></div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
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
        <!-- <div class="index_swiper">
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
<body style="background: #171919;width: 100%;">
    <!-- 人气榜 -->
    <div id="page">
        <!-- 返回栏 -->
        <div class="nav">
            <div class="left">
                <img class="leftBtn" src="/static/image/img/btn_left.png" />
                <div class="leftName">查看图集</div>
            </div>
        </div>


        <div class="contentBox" >
            <div class="watchTj_title">
                <?php echo htmlentities($info['title']); ?>
            </div>
            <div class="watchTj_BtnBox">
                <?php if(is_array($cateRand) || $cateRand instanceof \think\Collection || $cateRand instanceof \think\Paginator): $i = 0; $__LIST__ = $cateRand;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <div class="watchTj_Btn">
                   <?php echo htmlentities($item['title']); ?>
                </div>
               <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="watchTj_txtBox">
             <?php echo htmlentities($info['detail']); ?>
            </div>
            <div class="watchTj_imgBtnBox">
                <a href="/image/info/<?php echo htmlentities($channel); ?>.html?show_type=2&id=<?php echo htmlentities($id); ?>">
                <div class="watchTj_imgBtn liebiaoBtn">
                    <img src="/static/image/img/list.png" class="watchTj_img">列表模式
                </div>
            </a>
                <a href="/image/info/<?php echo htmlentities($channel); ?>.html?show_type=1&id=<?php echo htmlentities($id); ?>">
                <div class="watchTj_imgBtn lunboBtn">
                    
                    <img src="/static/image/img/img.png" class="watchTj_img">轮播模式
                </div>
                </a>
            </div>


        </div>
        <?php if(is_array($list_img) || $list_img instanceof \think\Collection || $list_img instanceof \think\Paginator): $i = 0; $__LIST__ = $list_img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <div class="watchTj_content watchTj_lunboms">
            <div class="watchTj_pageNum">
                <span style="color: #FFFFFFB2;"><?php echo htmlentities($page_list); ?></span> / <?php echo htmlentities($item['count']); ?>
            </div>
            <div class="watcchTj_imgBox">
                <img   class="watchTj_tjbanner imgbase64" data-src="<?php echo htmlentities($item['list']); ?>"
                src="/static/images/loading_img_bg_default.jpg">
            </div>
            <div class="watchTj_pageNum">
                <span style="color: #FFFFFFB2;"><?php echo htmlentities($page_list); ?></span> / <?php echo htmlentities($item['count']); ?>
            </div>
            <div class="watchTj_imgBtnBox">
                <?php if($page_list==1): ?>
             
                    <div class="watchTj_imgBtn" style="background: #3C3C3C;">
                        <img src="/static/image/img/leftJt.png" class="watchTj_img">第一页
                    </div>
            
                    <a href="/image/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($id); ?>&page_list=<?php echo htmlentities($page_list+1); ?>&show_type=1">
                    <div class="watchTj_imgBtn">
                       下一张 <img src="/static/image/img/rightJt.png" class="watchTj_img" style="margin-left:4px ;">
                    </div>
                    </a>
                <?php elseif($page_list==$item['count']): ?>
                <a href="/image/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($id); ?>&page_list=<?php echo htmlentities($page_list-1); ?>&show_type=1">
                    <div class="watchTj_imgBtn" style="background: #3C3C3C;">
                        <img src="/static/image/img/leftJt.png" class="watchTj_img">上一张
                    </div>
                    </a>
                   
                    <div class="watchTj_imgBtn">
                       最后一页 <img src="/static/image/img/rightJt.png" class="watchTj_img" style="margin-left:4px ;">
                    </div>
                   
                <?php else: ?>
                <a href="/image/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($id); ?>&page_list=<?php echo htmlentities($page_list-1); ?>&show_type=1">
                    <div class="watchTj_imgBtn" style="background: #3C3C3C;">
                        <img src="/static/image/img/leftJt.png" class="watchTj_img">上一张
                    </div>
                    </a>
                    <a href="/image/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($id); ?>&page_list=<?php echo htmlentities($page_list+1); ?>&show_type=1">
                    <div class="watchTj_imgBtn">
                       下一张 <img src="/static/image/img/rightJt.png" class="watchTj_img" style="margin-left:4px ;">
                    </div>
                    </a>

                <?php endif; ?>
               
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="watchTj_liebiaoBox">
            <?php if(is_array($banner_img) || $banner_img instanceof \think\Collection || $banner_img instanceof \think\Paginator): $i = 0; $__LIST__ = $banner_img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <div class="watchTj_liebiaoms">
                <?php if(is_array($item['list']) || $item['list'] instanceof \think\Collection || $item['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $item['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?>
                <img  class="watchTj_tjbanner imgbase64" data-src="<?php echo htmlentities($items); ?>"
                src="/static/images/loading_img_bg_default.jpg" >
                <?php endforeach; endif; else: echo "" ;endif; ?>
             </div>
             <div class="pageNum" style="margin: 16px 0;">




                <?php if($item['count']>1): if($banner_list==1): ?>
             
                <div class="watchTj_imgBtn" style="background: #3C3C3C;">
                    <img src="/static/image/img/leftJt.png" class="watchTj_img">第一页
                </div>
        
                <a href="/image/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($id); ?>&banner_list=<?php echo htmlentities($banner_list+1); ?>&show_type=2">
                <div class="watchTj_imgBtn">
                   下一页 <img src="/static/image/img/rightJt.png" class="watchTj_img" style="margin-left:4px ;">
                </div>
                </a>
            <?php elseif($banner_list==$item['count']): ?>
         
            <a href="/image/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($id); ?>&banner_list=<?php echo htmlentities($banner_list-1); ?>&show_type=2">
                <div class="watchTj_imgBtn" style="background: #3C3C3C;">
                    <img src="/static/image/img/leftJt.png" class="watchTj_img">上一页
                </div>
                </a>
               
                <div class="watchTj_imgBtn">
                   最后一页 <img src="/static/image/img/rightJt.png" class="watchTj_img" style="margin-left:4px ;">
                </div>
               
            <?php else: ?>
           
            <a href="/image/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($id); ?>&banner_list=<?php echo htmlentities($banner_list-1); ?>&show_type=2">
                <div class="watchTj_imgBtn" style="background: #3C3C3C;">
                    <img src="/static/image/img/leftJt.png" class="watchTj_img">上一页
                </div>
                </a>
                <a href="/image/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($id); ?>&banner_list=<?php echo htmlentities($banner_list+1); ?>&show_type=2">
                <div class="watchTj_imgBtn">
                    下一页 <img src="/static/image/img/rightJt.png" class="watchTj_img" style="margin-left:4px ;">
                </div>
                </a>
           
           

            <?php endif; ?>
            <?php endif; ?>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        
        

        <div class="watchTj_btnBottomBox">
            <div class="watchTj_btnBottomBox_txt">
                <?php echo htmlentities(getImageCate($info['cate_id'])); ?>
            </div>
         

        </div>
        <div class="watchTj_gjc">
            关键词： #<?php echo htmlentities(getImageCate($info['cate_id'])); ?>
        </div>
        <div class="hotList" style="padding:0 8px">
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <a href="/image/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($item['id']); ?>">
            <div class="book">
                <div class="bookImg">
                    <img style="width: 100%;height: 100%;" data-src="<?php echo htmlentities(imagefirst($item['pic'])); ?>"
                    src="/static/images/loading_img_bg_default.jpg" class="imgbase64"/>
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
        <img class="banner ad" style="padding:0 8px" src="<?php echo htmlentities($item['img']); ?>"  data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>"
         data-site="<?php echo htmlentities($site_id); ?>" data-url="<?php echo htmlentities($item['androidurl']); ?>" onerror="this.src='/static/images/loading_img_bg_default.jpg';"/>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="index_dyList" style="padding: 8px 8px;border: 0px;">
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


    <script src="/static/common/jq.js"></script>
    <script src="/static/common/swiper.js"></script>
    <script src="/static/common/apps.js"></script>
    <script>
         $(document).ready(function () {
        // 获取所有 class 为 imgbase64 的 img 标签 
        $('img.imgbase64').each(function () {
            var img = $(this);
            var imgSrc = img.attr('data-src');
            imgSrc = imgSrc.trimStart();
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
        $(document).on('click', 'selector', function (event) {
            event.preventDefault();
        });

        $(document).ready(function () {
            var show_type="<?php echo htmlentities($show_type); ?>"
            if(show_type==2){
                $('.liebiaoBtn').click(function () {
                $('.watchTj_liebiaoBox').show();
                $('.watchTj_lunboms').hide();
                $(".liebiaoBtn").css("background-color", "#B7003B")
                $(".lunboBtn").css("background-color", "#3C3C3C")
            });
            }else{
                $('.watchTj_liebiaoBox').hide();
                $('.watchTj_lunboms').show();
                $(".lunboBtn").css("background-color", "#B7003B")
                $(".liebiaoBtn").css("background-color", "#3C3C3C")
            }
           
        });
      

    </script>
</body>

</html>