<?php /*a:3:{s:56:"D:\phpEnv\www\pron\view\index\index\category_mobile.html";i:1720880361;s:48:"D:\phpEnv\www\pron\view\index\mobile_header.html";i:1720853584;s:48:"D:\phpEnv\www\pron\view\index\mobile_footer.html";i:1720816159;}*/ ?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="applicable-device" content="mobile">
    <link rel="icon" href="static/app-icon.png">
    <link rel="apple-touch-icon" href="static/app-icon.png">
    <style type="text/css">
        a {
            text-decoration: none;
            color: black ;
        }

        a:hover {
            text-decoration: none;
            cursor: pointer
        }

        /*a标签鼠标经过mouseover时的样式*/
        a:link {
            text-decoration: none;
            cursor: pointer;
        }

        /*a标签未访问时的样式*/
        a:visited {
            text-decoration: overline;
            cursor: pointer
        }

        /*a标签访问过之后样式*/
        a:active {
            text-decoration: overline;
            cursor: pointer
        }

        /*a标签鼠标按下mousedown时的样式*/
        /*图标css*/
        .xxlink {
            width: 100%;
            background: #FFFFFF;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            border: 2px solid #FFFFFF;
        }

        .xxlink h3 {
            width: 95%;
            padding: 0 2.5%;
            font-size: 18px;
            line-height: 26px;
            background: #fff;
            margin-bottom: 12px;
            color: #000000;
        }

        .navi {
            font-size: 0;
            text-align: center
        }

        .appico {
            width: 16%;
            margin: 5px 0px;
            height: auto;
            box-sizing: border-box;
            display: inline-block;
            position: relative;
        }

        .appico p {
            width: 100%;
            height: 19px;
            line-height: 22px;
            text-align: center;
            font-size: 11px;
            margin: 0;
            color: #000000;
            overflow: hidden;
        }

        .naicon {
            border-radius: 5px;
            overflow: hidden;
            font-size: 0;
            margin: .1px
        }

        .appico img {
            border-radius: 1px;
            width: 100%
        }

        .appico:hover .btn-raised {
            -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, .24), 0 0 0 0 rgba(0, 0, 0, .4), 0 0 0 0 rgba(0, 0, 0, .22);
            box-shadow: 0 0 0 0 rgba(0, 0, 0, .24), 0 0 0 0 rgba(0, 0, 0, .4), 0 0 0 0 rgba(0, 0, 0, .22)
        }

        .btnx {
            padding: 8px 2px !important;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="/static/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/bootstrap-icons.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/noty.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/noty-themes/bootstrap-v4.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/mobile.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/swiper-bundle.min.css" />
    <script type="text/javascript" src="/static/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="/static/js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="/static/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/static/js/clipboard.min.js"></script>
    <script type="text/javascript" src="/static/js/lozad.min.js"></script>
    <script type="text/javascript" src="/static/js/sweetalert2.js"></script>
    <script type="text/javascript" src="/static/js/noty.min.js"></script>
    <script type="text/javascript" src="/static/js/qrcode.min.js"></script>
    <script type="text/javascript" src="/static/js/bylqwya.js"></script>
    <style type="text/css">
        .v-s-nav-box-h {
            width: 100%;
            background: linear-gradient(90deg, #243954 0%, #1C2940 100%);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .main-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 .1rem;
        }

        .v-s-nav-search-box {
            flex-grow: 1;
            display: flex;
            justify-content: space-between;
            padding: 0 8px;
        }

        .v-s-logo img {
            max-width: 160px;
            height: 30px;
        }

        .left-img {
            width: 23px;
        }

        .search-person {
            margin-left: 25px;
            width: 100px;
            height: 24px;
            border-radius: 12px;
            background-color: #F4F4F4;
            display: flex;
            align-items: center;
        }

        .s-text {
            margin: 0 8px;
        }

        .bi {
            color: #6C6D6E;
        }

        .top-nav {
            display: flex;
            padding: 11px 4px;
            overflow-y: auto;
        }

        .top-nav a {
            flex: 0 0 auto;
        }

        .nav-item {
            padding: 0 24px;
            height: 23px;
            line-height: 23px;
            text-align: center;
            color: #fff;
        }

        .nav-menu-selected {
            background: linear-gradient(69.79deg, #46B1FF 22.69%, #2674F5 81.62%);
            border-radius: 4px;
        }

        #swiper-banner {
            height: 115px;
            padding-bottom: 12px;
            box-sizing: content-box;
            position: relative;
        }

        #swiper-banner a {
            display: block;
            height: 115px;
            width: 322px;
            border-radius: 34px;
            overflow: hidden;
            transition: height .3s
        }

        #swiper-banner a img {
            width: 322px;
            height: 115px;
        }

        #swiper-banner .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
            transform: translateX(0)
        }

        #swiper-banner .swiper-slide-active a {
            width: 322px
        }

        #swiper-banner .swiper-slide-prev {
            transform: translateX(45px)
        }

        #swiper-banner .swiper-slide-prev a {
            height: 115px
        }

        #swiper-banner .swiper-slide-next {
            transform: translateX(-45px)
        }

        #swiper-banner .swiper-slide-next a {
            height: 115px
        }

        .marquee-wrap {
            height: 32px;
            width: 100%;
            background-color: #D4E9FB;
            color: #074995;
            padding-top: 5px;
            padding-right: 8px;
        }

        .marquee-box {
            display: flex;
            align-items: center;
        }

        .marquee-box .icon-speaker {
            display: flex;
            width: 32px;
            margin: auto;
            justify-content: center;
        }
        .icon-speaker .not{
            color: #2674F5;
        }

        .marquee-box .container-main {
            flex: 1;
            font-size: 12px;
            overflow: hidden
        }

        .marquee-box p {
            display: inline-block;
            padding-left: 100%;
            white-space: nowrap;
            font-size: 14px;
            animation: vMarquee 10s linear infinite;
            margin-bottom: 0;
        }



        @keyframes vMarquee {
            0% {
                transform: translate3d(0, 0, 0)
            }

            100% {
                transform: translate3d(-100%, 0, 0)
            }
        }
        .swiper{
            overflow: hidden;
        }
        .conter-wrap{
            padding: 7px;
            text-align: center;
        }
        .ad-menu-wrap{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .ad-menu-item{
            background-color: #f4f4f4;
            text-align: center;
            color: #7E8183;
            font-size: 10px;
            padding: 5px 8px;
            flex: 0 1 auto;
            border-radius: 4px;
        }
        .ad-menu-item.active {
            background: linear-gradient(93.06deg, #46B1FF 9.76%, #2674F5 94.75%);
            color: #fff;
        }
        #swiper-ad .swiper-slide{
            padding-left: 5px;
        }
        .ad-t{
            font-size: 15px;
        }
        .ad-conter{
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            row-gap: 5px;
            column-gap: 18px;
            padding:  15px 0;
        }
        .ad-conter img {
            width: 57px;
            height: 57px;
            border-radius: 4px;
        }
        .ad-conter a div {
            font-size: 10px;
            color: #98999A;
            margin-top: 4px;
        }
    </style>
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
<title>视频列表--<?php echo htmlentities($category_name); ?></title>
</head>

<body>
    <div class="v-s-nav-box-h">
        <div class="main-box">
            <div class="v-s-logo"><a href="/"><img
                        src="/static/images/logo.png"><!-- <div class="v-s-logo-text">FaceShow</div> --></a></div>
            <div class="v-s-nav-search-box">
                <a href="/searchhome/<?php echo htmlentities($channel); ?>.html">
                    <div class="search-person">
                        <div class="s-text">&#30334;&#19975;&#29255;&#24211;</div>
                        <i class="bi bi-search"></i>
                    </div>
                </a>
                <div>
                    <img class="left-img" src="/static/images/wy.png" alt="" srcset="">
                </div>
            </div>
        </div>
        <!-- 标题栏bp -->
        <div class="v-s-ul-time-vs_442378ea5a0a0b9d99bed43dc146baa0 top-nav">
            <a href="/">
                <div class="v-s-li-nav-link-vs_442378ea5a0a0b9d99bed43dc146baa0 nav-item">导航</div>
            </a>
            <?php if(is_array($menulist) || $menulist instanceof \think\Collection || $menulist instanceof \think\Paginator): $i = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
            <a href="/category/<?php echo htmlentities($channel); ?>.html?category_id=<?php echo htmlentities($menu['id']); ?>">
                <div
                    class="v-s-li-nav-link-vs_442378ea5a0a0b9d99bed43dc146baa0 nav-item <?php if($category_id == $menu['id']): ?>nav-menu-selected<?php endif; ?>">
                    <?php echo htmlentities($menu['title']); ?></div>
            </a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div id="swiper-banner" class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a rel="external nofollow" i="" href="https://x33316.com:5433" target="_blank">
                    <div title="澳门赌场">
                        <img src="https://u1010.com/c61f43a83a614152b4dbc5d7f6ed7575.gif">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a rel="external nofollow" i="" href="https://x33316.com:5433" target="_blank">
                    <div title="澳门赌场">
                        <img src="https://u1010.com/c61f43a83a614152b4dbc5d7f6ed7575.gif">
                    </div>
                </a>
            </div>

        </div>
    </div>
    <div class="marquee-wrap">
        <div class="marquee-box">
            <div class="icon-speaker">
                <i class="not bi-bell-fill"></i>
            </div>
            <div class="container-main">
                <p>&#26816;&#27979;&#21040;&#24403;&#21069;&#27983;&#35272;&#22120;&#24050;&#25318;&#25130;&#26412;&#31449;&#37096;&#20998;&#33394;&#24773;APP&#65292;&#22914;APP&#22270;&#26631;&#26080;&#27861;&#28857;&#20987;&#65292;&#35831;&#22797;&#21046;&#32593;&#22336;&#23581;&#35797;&#19981;&#21516;&#27983;&#35272;&#22120;
                </p>
            </div>
        </div>
    </div>
    <div class="conter-wrap">
        <div class="ad-conter px10">
            <a rel="external nofollow" i="" href="https://x33316.com:5433" target="_blank">
                <img src="https://u1010.com/c61f43a83a614152b4dbc5d7f6ed7575.gif">
                <div>澳门赌场</div>
            </a>
            <a rel="external nofollow" i="" href="https://x33316.com:5433" target="_blank">
                <img src="https://u1010.com/c61f43a83a614152b4dbc5d7f6ed7575.gif">
                <div>澳门赌场</div>
            </a>
            <a rel="external nofollow" i="" href="https://x33316.com:5433" target="_blank">
                <img src="https://u1010.com/c61f43a83a614152b4dbc5d7f6ed7575.gif">
                <div>澳门赌场</div>
            </a>
            <a rel="external nofollow" i="" href="https://x33316.com:5433" target="_blank">
                <img src="https://u1010.com/c61f43a83a614152b4dbc5d7f6ed7575.gif">
                <div>澳门赌场</div>
            </a>
            <a rel="external nofollow" i="" href="https://x33316.com:5433" target="_blank">
                <img src="https://u1010.com/c61f43a83a614152b4dbc5d7f6ed7575.gif">
                <div>澳门赌场</div>
            </a>
            <a rel="external nofollow" i="" href="https://x33316.com:5433" target="_blank">
                <img src="https://u1010.com/c61f43a83a614152b4dbc5d7f6ed7575.gif">
                <div>澳门赌场</div>
            </a>
            <a rel="external nofollow" i="" href="https://x33316.com:5433" target="_blank">
                <img src="https://u1010.com/c61f43a83a614152b4dbc5d7f6ed7575.gif">
                <div>澳门赌场</div>
            </a>
        </div>
        <style>
            .textad {
                display: grid;
                grid-template-columns: repeat(5, minmax(0, 1fr));
                gap: 5px;
            }

            .textad a {
                text-align: center;
                background-color: #D4E9FB;
                padding: 5px 10px;
                border-radius: 4px;
                color: #074995;
            }

            .vidoe-title-1 {
                margin: 16px 0;
                height: 21px;
                color: #98999A;
            }

            .video-title-text {
                text-align: end;
                display: block;
                font-size: 12px;
                margin-left: 2px;
            }
        </style>
        <div class="textad">
            <a rel="external nofollow" i="" href="https://x33316.com:5433" target="_blank">
                澳门赌场
            </a>
            <a rel="external nofollow" i="" href="https://x33316.com:5433" target="_blank">
                澳门赌场
            </a>
            <a rel="external nofollow" i="" href="https://x33316.com:5433" target="_blank">
                澳门赌场
            </a>
            <a rel="external nofollow" i="" href="https://x33316.com:5433" target="_blank">
                澳门赌场
            </a>
            <a rel="external nofollow" i="" href="https://x33316.com:5433" target="_blank">
                澳门赌场
            </a>
        </div>
        <div class="flex-space-between vidoe-title-1">
            <div class="flex-center">
                <img src="/static/images/video-icon.svg" alt="">
                <span class="video-title-text">精选</span>
            </div>
            <div>共820部</div>
        </div>
        <style>
            .ran-box {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 5px;
            }

            .pre-img {
                width: 100%;
                height: auto;
            }

            .rank-title {
                text-overflow: ellipsis;
                overflow: hidden;
                white-space: nowrap;
                color: #98999A;
                margin-top: 5px;
            }

            .vs_8e43cea1a3310b70a00fc627ef21be48-item-vide-n:first-child {
                grid-column: span 2 / span 2;
                gap: 12px;
            }
        </style>
        <div class="ran-box">
            <?php if(is_array($videolist) || $videolist instanceof \think\Collection || $videolist instanceof \think\Paginator): $i = 0; $__LIST__ = $videolist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$video): $mod = ($i % 2 );++$i;?>
            <div class="vs_8e43cea1a3310b70a00fc627ef21be48-item-vide-n">
                <div class="rank-a relative" data-vid="<?php echo htmlentities($video['id']); ?>" data-sl="<?php echo htmlentities($video['video']); ?>"
                    data-href="/videoplay/<?php echo htmlentities($channel); ?>.html?category_id=<?php echo htmlentities($category_id); ?>&category_child_id=<?php echo htmlentities($category_child_id); ?>&vid=<?php echo htmlentities($video['id']); ?>">
                    <img class="pre-img lozad" loading="lazy" src="/static/images/loading_img_bg_default.jpg"
                        data-src="<?php echo htmlentities($video['enpic']); ?>" />
                    <div class="mask_info">
                        <div class="time"><?php echo htmlentities(date('Y-m-d',!is_numeric($video['create_time'])? strtotime($video['create_time']) : $video['create_time'])); ?></div>
                        <div class="clearfix">
                            <div class="pre-eye">
                                <i class="bi bi-eye"></i>
                                <span><?php echo htmlentities($video['eye']); ?></span>
                            </div>
                            <div class="pre-time">
                                <i class="bi bi-clock"></i>
                                <span><?php echo htmlentities($video['time']); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/videoplay/<?php echo htmlentities($channel); ?>.html?category_id=<?php echo htmlentities($category_id); ?>&category_child_id=<?php echo htmlentities($category_child_id); ?>&vid=<?php echo htmlentities($video['id']); ?>"
                    data-href="/videoplay/<?php echo htmlentities($channel); ?>.html?category_id=<?php echo htmlentities($category_id); ?>&category_child_id=<?php echo htmlentities($category_child_id); ?>&vid=<?php echo htmlentities($video['id']); ?>">
                    <div class="rank-title"><?php echo htmlentities($video['title']); ?></div>
                </a>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="pagination-box"><?php echo $page; ?><style type="text/css">
                .pagination-box {
                    /* float: left; */
                    display: flex;
                    justify-content: center;
                    width: 100%;
                    text-align: center;
                    margin-top: 10px;
                }

                .pagination-box ul {
                    margin-bottom: 10px !important;
                }

                .pagination-box .pagination .page-item input {
                    width: 50px;
                    text-align: center;
                }

                .page-link {
                    user-select: none;
                }

                .page-link:focus {
                    box-shadow: 0 0 0 0 !important;
                }

                .last_page_p {
                    color: #666;
                    margin-top: 6px;
                    margin-left: 8px;
                }

                .jump-box {
                    float: left;
                    width: 100%;
                    position: relative;
                    top: 0px;
                    box-sizing: border-box;
                    text-align: center;
                }

                .jump-box input {
                    float: left;
                    width: 45%;
                    height: 31px;
                    text-align: center;
                    margin-left: calc(25% - 25px);
                    border-radius: 4px;
                    border-top-right-radius: 0;
                    border-bottom-right-radius: 0;
                }

                .jump-box input:hover {
                    background-color: #fff;
                    border: 1px solid #007bff;
                }

                .jump-box input:focus {
                    text-shadow: 0;
                }

                .jump-box .btn {
                    float: left;
                    border-top-left-radius: 0;
                    border-bottom-left-radius: 0;
                }
            </style>
        </div>
    </div>

    <script type="text/javascript">
  // if (!/Android|iOS|iPhone|iPad/i.test(navigator.userAgent)) {
  //   document.body.innerHTML = `<div class="s-window-tips">
  //                                       <div>
  //                                           <h1>&#28201;&#39336;&#25552;&#31034;</h1>
  //                                           <p>&#26412;&#31449;&#20165;&#25903;&#25345;&#31227;&#21160;&#35774;&#22791;&#35775;&#38382;&#65292;&#35831;&#20351;&#29992;&#31227;&#21160;&#35774;&#22791;&#25195;&#25551;&#19979;&#26041;&#30340;&#20108;&#32500;&#30721;&#25110;&#36755;&#20837;&#32593;&#22336;&#35775;&#38382;&#33;</p>
  //                                           <p>Reminder: This website only supports mobile device access, please use your mobile device to scan the QR Code below or enter the URL to access!</p>
  //                                           <div class="qr-box"></div>
  //                                       </div>
  //                                   </div> `;
  //   let qrEl = document.body.querySelector(".s-window-tips .qr-box");
  //   try {
  //     new QRCode(qrEl, {
  //       text: location.origin + '/10.html',
  //       width: 128,
  //       height: 128,
  //       colorDark: "#000000",
  //       colorLight: "#ffffff",
  //       correctLevel: QRCode.CorrectLevel.H
  //     });
  //   } catch (err) {
  //     qrEl.innerHTML = '<img src="/static/images/qr.png" alt="">'
  //   }
  // }
  // function ypshare() {
  //   clipboard = new ClipboardJS('.content-box')
  //   $('#copyUrlx').val('YOURPORN永久回家地址YY68888.COM 保存永不迷路')
  //   clipboard.on('success', function (e) {
  //     e.clearSelection();
  //     clipboard.destroy();
  //   });
  //   clipboard.on('error', function (e) {
  //     clipboard.destroy();
  //   });
  // }
</script>
<style>
  .x_tap_top {
    display: block;
    position: fixed;
    right: 10px;
    bottom: 200px;
    z-index: 99999999999;
    border-radius: 6px;
    background-color: #000;
    color: #fff;
    text-align: center;
    cursor: pointer;
    box-shadow: 0 1px 15px 0 rgba(0, 0, 0, 0.12);
    width: 40px;
    height: 40px;
    line-height: 40px;
    font-size: 20px;
  }
</style>
<div class="x_tap_top" id="x_tap_top"><i class="bi bi-arrow-up"></i></div>
<script>
  $('#x_tap_top').on('click', function () {
    $('body, html').animate({
      scrollTop: 0,
    }, 500);
    return false;
  })
</script>
<style type="text/css">
  .footer-box {
    float: left;
    width: 100%;
    text-align: center;
    padding: 15px 0;
  }
</style>
<script type="text/javascript" src="/static/js/utils_mobile.js"></script>
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
</script><!-- 禁开发者工具调试 -->
<script>
  //如果用户在工具栏调起开发者工具，那么判断浏览器的可视高度和可视宽度是否有改变，如有改变则关闭本页面 
  // var debuggerH = window.innerHeight, debuggerW = window.innerWidth;
  // window.onresize = function () {
  //     if (debuggerH != window.innerHeight || debuggerW != window.innerWidth) {
  //         window.close();
  //         window.location = "about:blank";
  //     }
  // }

  // 无限的 debugger 兼容性好
  // setInterval(function() {
  //     debuggerCheck();
  //   }, 1000);
  //   var debuggerCheck = function() {
  //     function doCheck(a) {
  //       if (('' + a / a)['length'] !== 1 || a % 20 === 0) {
  //         (function() {}['constructor']('debugger')());
  //       } else {
  //         (function() {}['constructor']('debugger')());
  //       }
  //       doCheck(++a);
  //     }
  //     try {
  //       doCheck(0);
  //     } catch (err) {}
  //   };
  //   debuggerCheck();
</script>
</body>

</html>