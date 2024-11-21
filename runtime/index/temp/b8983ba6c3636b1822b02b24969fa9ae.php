<?php /*a:1:{s:61:"/www/wwwroot/zhanqun.dahuangua.com/view/index/video/info.html";i:1731969162;}*/ ?>
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
</head>

<body>
    <input type="hidden" id="site_id" value="<?php echo htmlentities($site_id); ?>">
    <input type="hidden" id="channel" value="<?php echo htmlentities($tongjiCode); ?>">
    <!--小说阅读 -->
    <div id="page">
        <!-- 返回栏 -->
        <div class="nav">
            <div class="left">
                <img class="leftBtn" style="margin-right: 5px;" src="/static/video/images/rectangle.png" />
                <div class="leftName">视频播放</div>
            </div>
        </div>
        <div > 
            <div id="mse" class="mse"></div>
        </div>
       

        <div class="contentBox">
            <div class="introduction_Box">
                <div class="introduction_title">
                    <?php echo htmlentities($info['title']); ?>
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