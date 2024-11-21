<?php /*a:1:{s:46:"C:\wwwroot\zhanqun\view\index\index\index.html";i:1732202340;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>导航导流</title>
    <link rel="stylesheet" href="/static/index/css/styles.css">
    <link rel="stylesheet" href="/static/index/css/swiper.css">
    <link rel="stylesheet" href="/static/index/css/swiperGf.css" />
    <link rel="stylesheet" href="/static/index/home.css">
    <script src="/static/index/res.js"></script>
    <link rel="stylesheet" href="/static/index/swiper.css">
</head>
<!-- <script type="text/javascript" src="./jquery.js"></script> -->
<style>
    .active {
        padding: 0px 16px;
        border-radius: 41px;
        background: linear-gradient(90deg, #FA7D77 0%, #AB4F89 100%);
    }

    a {
        color: #ffff;
    }
</style>

<body>
    <input type="hidden" id="site_id" value="<?php echo htmlentities($site_id); ?>">
    <input type="hidden" id="channel" value="<?php echo htmlentities($tongjiCode); ?>">
    <div class="index_page">
        <!-- 顶部广告提示 -->
        <div class="index_scrollbar">
            <img src="/static/index/img/Frame.png" class="index_frame">
            <span class="index_scrollbar_text"> 因本站包含成人内容，如有打不开请尝试在不同浏览器</span>
        </div>


        <!-- 轮播图 -->

        <div class="index_swiper">
            <div class="swiper-banner swiper">
                <div class="swiper-wrapper">
                    <?php if(is_array($BannerList) || $BannerList instanceof \think\Collection || $BannerList instanceof \think\Paginator): $i = 0; $__LIST__ = $BannerList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Banner): $mod = ($i % 2 );++$i;?>
                    <div class="swiper-slide">
                        <img class="banner-img ad" src="<?php echo htmlentities($Banner['img']); ?>" alt="" data-id="<?php echo htmlentities($Banner['id']); ?>"
                            data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>" data-url="<?php echo htmlentities($Banner['androidurl']); ?>">
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
        <!-- 导航切换 -->
        <div class="index_nav">
            <?php if(is_array($pcategory) || $pcategory instanceof \think\Collection || $pcategory instanceof \think\Paginator): $i = 0; $__LIST__ = $pcategory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <a class="index_nav_li  <?php if($adcateid == $item['id']): ?>active<?php endif; ?>"
                href="./<?php echo htmlentities($channel); ?>.html?adcateid=<?php echo htmlentities($item['id']); ?>"><?php echo htmlentities($item['title']); ?></a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <!-- 九宫格 -->
        <div class="index_jiugongge">
            <?php if(is_array($jiugongge_img) || $jiugongge_img instanceof \think\Collection || $jiugongge_img instanceof \think\Paginator): $i = 0; $__LIST__ = $jiugongge_img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <div class="index_jiugongge_li ad" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                data-url="<?php echo htmlentities($item['androidurl']); ?>">
                <img class="index_jiugongge_img" src="<?php echo htmlentities($item['img']); ?>"
                    onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                <div class="index_jiugongge_text"><?php echo htmlentities($item['name']); ?></div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <!-- 九宫格文字版 -->
        <div class="index-jiugonggeTxt">
            <?php if(is_array($jiugongge_font) || $jiugongge_font instanceof \think\Collection || $jiugongge_font instanceof \think\Paginator): $i = 0; $__LIST__ = $jiugongge_font;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <div class="index_jiugonggeTxt_text ad" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>"
                data-site="<?php echo htmlentities($site_id); ?>" data-url="<?php echo htmlentities($item['androidurl']); ?>"><?php echo htmlentities($item['name']); ?></div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <!-- <div class="index_jiugonggeTxt_text index_jiugonggeTxt_hotColor">
                <img src="/static/index/img/hot.png" class="index_jiugongge_hot">国产精品
            </div>
            <div class="index_jiugonggeTxt_text">国产精品</div>
            <div class="index_jiugonggeTxt_text">国产精品</div>
            <div class="index_jiugonggeTxt_text">国产精品</div>
            <div class="index_jiugonggeTxt_text">国产精品</div>
            <div class="index_jiugonggeTxt_text">国产精品</div>
            <div class="index_jiugonggeTxt_text index_jiugonggeTxt_hotColor">
                <img src="/static/index/img/hot.png" class="index_jiugongge_hot">国产精品
            </div>
            <div class="index_jiugonggeTxt_text index_jiugonggeTxt_newColor">
                <img src="/static/index/img/new.png" class="index_jiugongge_hot">国产精品
            </div>
            <div class="index_jiugonggeTxt_text">国产精品</div>
            <div class="index_jiugonggeTxt_text">国产精品</div>
            <div class="index_jiugonggeTxt_text">国产精品</div> -->

        </div>
        <!-- 新闻条 -->
        <div class="index_news">

            <!-- 视频标签开始 -->
            <?php if(is_array($video) || $video instanceof \think\Collection || $video instanceof \think\Paginator): $i = 0; $__LIST__ = $video;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <a href="/video/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($item['id']); ?>">
                <div class="index_news_line">
                    <div class="index_news_line_left">
                        <div class="index_news_line_left_text">
                            <?php echo htmlentities($item['title']); ?>
                        </div>
                        <div class="index_news_line_left_BottomBox">
                            <div class="index_news_line_left_BottomBox_videoBtn">视频</div>
                            <div class="index_news_line_left_BottomBox_text">阅读<?php echo htmlentities(eyew($item['eye'])); ?>W</div>
                            <div class="index_news_line_left_BottomBox_text">一小时前</div>
                        </div>

                    </div>
                    <img src="<?php echo htmlentities($item['pic']); ?>" class="index_news_line_right_img"
                        onerror="this.src='/static/images/loading_img_bg_default.jpg';">

                </div>
            </a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <!-- <div class="index_news_line">
                <div class="index_news_line_left">
                    <div class="index_news_line_left_text">
                        汗流浃背的前杨已婚女人是一个初级工人和一个庸俗的矛喝...
                    </div>
                    <div class="index_news_line_left_BottomBox">
                        <div class="index_news_line_left_BottomBox_videoBtn">视频</div>
                        <div class="index_news_line_left_BottomBox_text">阅读86W</div>
                        <div class="index_news_line_left_BottomBox_text">一小时前</div>

                    </div>

                </div>
                <img src="/static/index/img/newsCover.png" class="index_news_line_right_img">

            </div> -->
            <!-- 视频标签结束 -->
            <!-- 吃瓜标签开始 -->
            <div class="index_news_chigua">
                <?php if(is_array($img_chigua) || $img_chigua instanceof \think\Collection || $img_chigua instanceof \think\Paginator): $i = 0; $__LIST__ = $img_chigua;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?>
                <div class="index_news_chigua_title">
                    <?php echo htmlentities($items['title']); ?>
                </div>
                <div class="index_news_chigua_imgBox">

                    <img src="<?php echo htmlentities($items['cover']); ?>" class="index_news_chigua_img"
                        onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                    <img src="<?php echo htmlentities($items['cover1']); ?>" class="index_news_chigua_img"
                        onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                    <!-- <img src="<?php echo htmlentities($items['cover2']); ?>" class="index_news_chigua_img"
                        onerror="this.src='/static/images/loading_img_bg_default.jpg';"> -->
                </div>
                <div class="index_news_line_left_BottomBox">
                    <div class="index_news_line_left_BottomBox_videoBtn">吃瓜</div>
                    <div class="index_news_line_left_BottomBox_text">阅读<?php echo htmlentities(eyew($items['eye'])); ?>W</div>
                    <div class="index_news_line_left_BottomBox_text">一小时前</div>

                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <!-- 吃瓜标签结束 -->

        </div>

        <!-- 真人认证 -->
        <div class="index_realPerson">
            <?php if(is_array($yuepao_ad) || $yuepao_ad instanceof \think\Collection || $yuepao_ad instanceof \think\Paginator): $i = 0; $__LIST__ = $yuepao_ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <div class="index_realperson_box ad" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                data-url="<?php echo htmlentities($item['androidurl']); ?>">
                <div class="index_realPerson_leftBox">
                    <div class="index_realPerson_left">
                        <img src="<?php echo htmlentities($item['img']); ?>" class="index_realPerson_leftImg"
                            onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                        <img src="/static/index/img/realperson.png" class="index_realPerson_leftIcon">
                    </div>

                </div>

                <div class="index_realPerson_right">
                    <div class="index_realPerson_right_title">
                        <div class="index_realPerson_rightBox">
                            <div class="index_realPerson_right_titleName"><?php echo htmlentities($item['name']); ?></div>
                            <div class="index_realPerson_right_titleBtn">在线约炮</div>
                        </div>

                        <div class="index_realPerson_right_like">
                            <img src="/static/index/img/like.png" class="index_realPerson_right_likeImg">
                            <div class="index_realPerson_right_liketxt"><?php echo htmlentities($item['like']); ?>人喜欢</div>
                        </div>
                    </div>
                    <div class="index_realPerson_right_information">
                        <div class="index_realPerson_right_informationAge"><?php echo htmlentities($item['age']); ?>岁</div>
                        <div class="index_realPerson_right_informationAge"><?php echo htmlentities($item['height']); ?>cm</div>
                        <div class="index_realPerson_right_informationAge">学生</div>
                    </div>
                    <div class="index_realPerson_address">
                        <div class="index_realPerson_addressBox">
                            <img src="/static/index/img/address.png" class="index_realPerson_addressImg">
                            <div class="index_realPerson_addressTxt">附近<?php echo htmlentities($item['km']); ?>KM</div>
                        </div>
                        <div class="index_realPerson_addressBox dotBox">
                            <img src="/static/index/img/greenDot.png" class="index_realPerson_addressImg">
                            <div class="index_realPerson_addresstime"><?php echo htmlentities($item['time']); ?>分钟前</div>
                        </div>

                    </div>

                    <div class="index_realPerson_imgBox">
                        <?php if(is_array($item['pics']) || $item['pics'] instanceof \think\Collection || $item['pics'] instanceof \think\Paginator): $i = 0; $__LIST__ = $item['pics'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pic): $mod = ($i % 2 );++$i;?>
                        <img src="<?php echo htmlentities($pic); ?>" class="index_realPerson_img"
                            onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <!-- <img src="/static/index/img/chigua2.png" class="index_realPerson_img">
                        <img src="/static/index/img/chigua2.png" class="index_realPerson_img">
                        <img src="/static/index/img/chigua2.png" class="index_realPerson_img"> -->
                        <img src="/static/index/img/next.png" class="index_realPerson_img">
                    </div>
                </div>

            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>


        </div>
    </div>
    <!-- 直播模块 -->
    <div class="index_alive">
        <?php if(is_array($live_ad) || $live_ad instanceof \think\Collection || $live_ad instanceof \think\Paginator): $i = 0; $__LIST__ = $live_ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <div class="index_alive_a ad" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
            data-url="<?php echo htmlentities($item['androidurl']); ?>">
            <div class="index_alive_box">
                <!-- 图片盒子 -->
                <div class="index_alive_imgbox">
                    <img src="<?php echo htmlentities($item['img']); ?>" class="index_alive_img"
                        onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                    <!-- 直播观看人数 -->
                    <div class="index_alive_videoBox">
                        <img src="/static/index/img/video.png" class="index_alive_videoImg">
                        <div class="index_alive_imgTxt"><?php echo htmlentities($item['online']); ?>人</div>
                    </div>
                    <!-- 收藏按钮 -->
                    <img src="/static/index/img/collect.png" class="index_alive_collect">
                </div>
                <!-- 内容 标题 -->
                <div class="index_alive_titleBox titleBox">
                    <div class="index_alive_title"><?php echo htmlentities($item['name']); ?></div>
                    <div class="index_alive_nav">直播中</div>

                </div>
                <div class="index_alive_titleBox zanBox">
                    <div class="index_realPerson_addressBox ">
                        <img src="/static/index/img/greenDot.png" class="index_realPerson_addressImg">
                        <div class="index_realPerson_addresstime"><?php echo htmlentities($item['online']); ?></div>
                        <div class="index_alive_online">人在线</div>
                    </div>
                    <div class="index_alive_zanBox ">
                        <img src="/static/index/img/zan.png" class="index_alive_zan">
                        <div class="index_alive_zanNum"><?php echo htmlentities($item['click']); ?></div>
                    </div>

                </div>



            </div>

        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>


    </div>


    <div class="index_page">
        <!-- 吃瓜阅读 -->
        <div class="index_chiguaRead">
            <?php if(is_array($img_chigua1) || $img_chigua1 instanceof \think\Collection || $img_chigua1 instanceof \think\Paginator): $i = 0; $__LIST__ = $img_chigua1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?>
            <a href="">
                <div class="index_news_chigua">
                    <div class="index_news_chigua_title">
                        <?php echo htmlentities($items['title']); ?>
                    </div>
                    <div class="index_chiguaRead_img">

                        <img src="<?php echo htmlentities($items['cover']); ?>" class="index_chiguaRead_left"
                            onerror="this.src='/static/images/loading_img_bg_default.jpg';">

                        <div class="index_chiguaRead_rightBox">

                            <img src="<?php echo htmlentities($items['cover']); ?>" class="index_chiguaRead_rightImg"
                                onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                            <img src="<?php echo htmlentities($items['cover1']); ?>" class="index_chiguaRead_rightImg"
                                onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                            <!-- <img src="<?php echo htmlentities($items['cover2']); ?>" class="index_chiguaRead_rightImg"
                                onerror="this.src='/static/images/loading_img_bg_default.jpg';"> -->
                            <!-- <img src="/static/index/img/chigua3.png" class="index_chiguaRead_rightImg"> -->
                        </div>

                    </div>
                    <div class="index_news_line_left_BottomBox">
                        <div class="index_news_line_left_BottomBox_videoBtn">吃瓜</div>
                        <div class="index_news_line_left_BottomBox_text">阅读<?php echo htmlentities(eyew($items['eye'])); ?>W</div>
                        <div class="index_news_line_left_BottomBox_text">一小时前</div>

                    </div>

                </div>

            </a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <!-- 小说 -->
        <?php if(is_array($novel) || $novel instanceof \think\Collection || $novel instanceof \think\Paginator): $i = 0; $__LIST__ = $novel;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <a href="/novel/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($item['id']); ?>">
            <div class="index_read">

                <div class="index_read_left">
                    <!-- 标题 -->
                    <div class="index_read_tilteBox">
                        <div class="index_read_tilte"><?php echo htmlentities($item['title']); ?></div>
                        <div class="index_read_Nav"><?php echo htmlentities($item['cate']['title']); ?></div>
                    </div>
                    <!-- 篇章 -->
                    <div class="index_read_timeBox">
                        <div class="index_read_all">共<?php echo htmlentities($item['num']); ?>章</div>
                        <div class="index_read_time">
                            <img src="/static/index/img/redDot.png" class="index_read_readDot">
                            <div class="index_read_timeTxt"><?php echo htmlentities($item['time']); ?>分钟前</div>
                        </div>
                    </div>
                    <!-- 内容 -->
                    <div class="index_read_content">
                        <?php echo htmlentities(fontsize($item['description'])); ?>
                    </div>
                    <div class="index_news_line_left_BottomBox">
                        <div class="index_news_line_left_BottomBox_videoBtn">小说</div>
                        <div class="index_news_line_left_BottomBox_text">阅读<?php echo htmlentities(eyew($item['eye'])); ?>W</div>
                        <div class="index_news_line_left_BottomBox_text">一小时前</div>

                    </div>

                </div>
                <div class="index_read_right">
                    <img src="<?php echo htmlentities($item['pic']); ?>" class="index_read_rightImg"
                        onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                    <img src="/static/index/img/lzBtn.png" class="index_read_lzBtn">
                </div>



            </div>

        </a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <!-- 两列 抖音 -->
        <div class="index_dyList">
            <?php if(is_array($zhong_font_ad) || $zhong_font_ad instanceof \think\Collection || $zhong_font_ad instanceof \think\Paginator): $i = 0; $__LIST__ = $zhong_font_ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <div class="ad" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>" data-site="<?php echo htmlentities($site_id); ?>"
                data-url="<?php echo htmlentities($item['androidurl']); ?>">
                <div class="index_dyListBox">
                    <div class="flexBox">
                        <img src="<?php echo htmlentities($item['img']); ?>" class="index_dyList_img"
                            onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                        <div class="index_dyList_dyTxt"><?php echo htmlentities($item['name']); ?></div>

                    </div>

                    <img src="/static/index/img/rightIcon.png" class="index_dyList_rightIcon">
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>

        </div>
        <!-- 小说 -->
        <?php if(is_array($novel1) || $novel1 instanceof \think\Collection || $novel1 instanceof \think\Paginator): $i = 0; $__LIST__ = $novel1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <a href="/novel/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($item['id']); ?>">
            <div class="index_read">

                <div class="index_read_left">
                    <!-- 标题 -->
                    <div class="index_read_tilteBox">
                        <div class="index_read_tilte"><?php echo htmlentities($item['title']); ?></div>
                        <div class="index_read_Nav"><?php echo htmlentities($item['cate']['title']); ?></div>
                    </div>
                    <!-- 篇章 -->
                    <div class="index_read_timeBox">
                        <div class="index_read_all">共<?php echo htmlentities($item['num']); ?>章</div>
                        <div class="index_read_time">
                            <img src="/static/index/img/redDot.png" class="index_read_readDot">
                            <div class="index_read_timeTxt"><?php echo htmlentities($item['time']); ?>分钟前</div>
                        </div>
                    </div>
                    <!-- 内容 -->
                    <div class="index_read_content">
                        <?php echo htmlentities(fontsize($item['description'])); ?>
                    </div>
                    <div class="index_news_line_left_BottomBox">
                        <div class="index_news_line_left_BottomBox_videoBtn">小说</div>
                        <div class="index_news_line_left_BottomBox_text">阅读<?php echo htmlentities(eyew($item['eye'])); ?>W</div>
                        <div class="index_news_line_left_BottomBox_text">一小时前</div>

                    </div>

                </div>
                <div class="index_read_right">
                    <img src="<?php echo htmlentities($item['pic']); ?>" class="index_read_rightImg"
                        onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                    <img src="/static/index/img/lzBtn.png" class="index_read_lzBtn">
                </div>



            </div>

        </a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

    <!-- 漫画 -->
    <div class="index_cartoon">
        <?php if(is_array($manhua) || $manhua instanceof \think\Collection || $manhua instanceof \think\Paginator): $i = 0; $__LIST__ = $manhua;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <a href="/comics/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($item['id']); ?>" class="index_alive_a">
            <div class="index_cartoon_box">
                <!-- 图片盒子 -->
                <div class="index_cartoon_imgbox">
                    <img src="<?php echo htmlentities($item['pic']); ?>" class="index_cartoon_img"
                        onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                    <!-- top -->
                    <img src="/static/index/img/top.png" class="index_cartoon_top">
                    <!-- 收藏按钮 -->
                    <img src="/static/index/img/lzBtn.png" class="index_cartoon_lz">
                    <!-- 观看 收藏 -->
                    <div class="index_cartoon_bottomBox">
                        <div class="index_cartoon_eyeBox">
                            <img src="/static/index/img/eye.png" class="index_cartoon_eyeImg">
                            <div class="index_cartoon_eyeNum"><?php echo htmlentities($item['eye']); ?>K</div>
                        </div>
                        <div class="index_cartoon_eyeBox">
                            <img src="/static/index/img/star.png" class="index_cartoon_starImg">
                            <div class="index_cartoon_eyeNum"><?php echo htmlentities($item['shoucang']); ?>K</div>
                        </div>
                    </div>
                </div>
                <!-- 内容 标题 -->
                <div class="index_cartoon_titleBox titleBox">
                    <div class="index_cartoon_nav">漫画</div>
                    <div class="index_alive_title"><?php echo htmlentities(fontsize2($item['title'])); ?></div>
                </div>
                <div class="index_cartoon_titleBox ">
                    <div class="index_cartoon_li">#<?php echo htmlentities($item['cate']['title']); ?></div>

                </div>

                <div class="index_alive_titleBox zanBox">
                    <div class="index_cartoon_all ">
                        共<?php echo htmlentities($item['num']); ?>章
                    </div>
                    <div class="index_cartoon_timeBox ">
                        <img src="/static/index/img/dot.png" class="index_cartoon_dot">
                        <div class="index_cartoon_time">今天</div>
                    </div>

                </div>



            </div>

        </a>
        <?php endforeach; endif; else: echo "" ;endif; ?>





    </div>
    <div class="index_page">
        <!-- 广告 -->
        <div>
            <?php if(is_array($zhong_img_ad) || $zhong_img_ad instanceof \think\Collection || $zhong_img_ad instanceof \think\Paginator): $i = 0; $__LIST__ = $zhong_img_ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <img src="<?php echo htmlentities($item['img']); ?>" class="index_advertisement ad" data-id="<?php echo htmlentities($item['id']); ?>" data-channel="<?php echo htmlentities($channel); ?>"
                data-site="<?php echo htmlentities($site_id); ?>" data-url="<?php echo htmlentities($item['androidurl']); ?>"
                onerror="this.src='/static/images/loading_img_bg_default.jpg';">
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <?php if(is_array($video1) || $video1 instanceof \think\Collection || $video1 instanceof \think\Paginator): $i = 0; $__LIST__ = $video1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <a href="/video/info/<?php echo htmlentities($channel); ?>.html?id=<?php echo htmlentities($item['id']); ?>">
            <div class="index_news_line">
                <div class="index_news_line_left">
                    <div class="index_news_line_left_text">
                        <?php echo htmlentities($item['title']); ?>
                    </div>
                    <div class="index_news_line_left_BottomBox">
                        <div class="index_news_line_left_BottomBox_videoBtn">视频</div>
                        <div class="index_news_line_left_BottomBox_text">阅读<?php echo htmlentities(eyew($item['eye'])); ?>W</div>
                        <div class="index_news_line_left_BottomBox_text">一小时前</div>

                    </div>

                </div>
                <img src="<?php echo htmlentities($item['pic']); ?>" class="index_news_line_right_img"
                    onerror="this.src='/static/images/loading_img_bg_default.jpg';">

            </div>
        </a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <!-- 视频标签结束 -->
        <!-- 吃瓜标签开始 -->
        <?php if(is_array($img_chigua2) || $img_chigua2 instanceof \think\Collection || $img_chigua2 instanceof \think\Paginator): $i = 0; $__LIST__ = $img_chigua2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?>
        <a href="">
            <div class="index_news_chigua">
                <div class="index_news_chigua_title">
                    <?php echo htmlentities($items['title']); ?>
                </div>
                <div class="index_news_chigua_imgBox">
                    <?php if(is_array($items['pic']) || $items['pic'] instanceof \think\Collection || $items['pic'] instanceof \think\Paginator): $i = 0; $__LIST__ = $items['pic'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                    <img src="<?php echo htmlentities($item); ?>" class="index_news_chigua_img"
                        onerror="this.src='/static/images/loading_img_bg_default.jpg';">
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="index_news_line_left_BottomBox">
                    <div class="index_news_line_left_BottomBox_videoBtn">吃瓜</div>
                    <div class="index_news_line_left_BottomBox_text">阅读<?php echo htmlentities(eyew($items['eye'])); ?>W</div>
                    <div class="index_news_line_left_BottomBox_text">一小时前</div>

                </div>

            </div>
        </a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <!-- 吃瓜标签结束 -->
    </div>
    <!-- 漫画 -->
    <div class="index_cartoon">
        <?php if(is_array($img1) || $img1 instanceof \think\Collection || $img1 instanceof \think\Paginator): $i = 0; $__LIST__ = $img1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <a href="" class="index_alive_a">
            <div class="index_cartoon_box">
                <!-- 图片盒子 -->
                <div class="index_cartoon_imgbox">
                    <img src="<?php echo htmlentities($item['pic'][0]); ?>" class="index_cartoon_img"
                        onerror="this.src='/static/images/loading_img_bg_default.jpg';">

                    <div class="index_cartoon_pageBox">
                        <img src="/static/index/img/tjPage.png" class="index_cartoon_pageImg">
                        <div class="index_cartoon_pageNum"><?php echo htmlentities($item['num']); ?>张</div>
                    </div>
                    <div class="index_cartoon_bottomBox">
                        <div class="index_cartoon_eyeBox">
                            <img src="/static/index/img/eye.png" class="index_cartoon_eyeImg">
                            <div class="index_cartoon_eyeNum"><?php echo htmlentities(eyek($item['eye'])); ?>K</div>
                        </div>
                        <div class="index_cartoon_eyeBox">
                            <img src="/static/index/img/star.png" class="index_cartoon_starImg">
                            <div class="index_cartoon_eyeNum"><?php echo htmlentities(eyek($item['shoucang'])); ?>K</div>
                        </div>
                    </div>
                </div>
                <!-- 内容 标题 -->
                <div class="index_cartoon_titleBox titleBox">
                    <div class="index_alive_title"><?php echo htmlentities($item['title']); ?></div>
                    <div class="index_cartoon_nav navMargin">图集</div>
                </div>
                <div class="index_cartoon_titleBox ">
                    <div class="index_cartoon_li"><?php echo htmlentities($item['detail']); ?></div>
                </div>
                <div class="index_cartoon_titleBox ">
                    <div class="index_cartoon_li">#<?php echo htmlentities($item['fenlei']['title']); ?></div>

                </div>


            </div>

        </a>
        <?php endforeach; endif; else: echo "" ;endif; ?>




    </div>







</body>
<script>
    var base = '';
    // var _hmt = _hmt || [];
    // (function () {
    //     var hm = document.createElement("script");
    //     // hm.src = "https://hm.baidu.com/hm.js?1";
    //     var s = document.getElementsByTagName("script")[0];
    //     s.parentNode.insertBefore(hm, s);
    // })();

    // 51la
    // cnzz
</script>
<script src="/static/index/jq.js"></script>
<script src="/static/index/swiper.js"></script>
<script src="/static/index/app.js"></script>


</html>