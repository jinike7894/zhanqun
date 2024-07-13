<?php /*a:3:{s:53:"D:\phpEnv\www\pron\view\index\index\index_mobile.html";i:1720863189;s:48:"D:\phpEnv\www\pron\view\index\mobile_header.html";i:1720853584;s:48:"D:\phpEnv\www\pron\view\index\mobile_footer.html";i:1720816159;}*/ ?>
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
<title>&#31181;&#23376;&#35270;&#39057;</title>
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
                <div class="v-s-li-nav-link-vs_442378ea5a0a0b9d99bed43dc146baa0 nav-item nav-menu-selected">导航</div>
            </a>
            <?php if(is_array($menulist) || $menulist instanceof \think\Collection || $menulist instanceof \think\Paginator): $i = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
            <a href="/category/<?php echo htmlentities($channel); ?>.html?category_id=<?php echo htmlentities($menu['id']); ?>">
                <div class="v-s-li-nav-link-vs_442378ea5a0a0b9d99bed43dc146baa0 nav-item"><?php echo htmlentities($menu['title']); ?></div>
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
    <div>
        <div class="conter-wrap">
            <div class="ad-menu-wrap">
                <div class="ad-menu-item active">
                    <div class="ad-t">&#28909;&#38376;&#31934;&#21697;</div>
                    <div>&#26497;&#33268;&#29956;&#36873;&#32;&#24050;&#39046;&#28526;&#27969;</div>
                </div>
                <div class="ad-menu-item">
                    <div class="ad-t">&#25104;&#20154;&#24433;&#38498;</div>
                    <div>&#28023;&#37327;&#35270;&#39057;&#44;&#39640;&#28165;&#30011;&#36136;</div>
                </div>
                <div class="ad-menu-item">
                    <div class="ad-t">&#20307;&#32946;&#26827;&#29260;</div>
                    <div>&#19981;&#20013;&#21253;&#36180;&#65292;&#20805;&#20540;&#36192;&#36865;&#53;&#48;&#37;</div>
                </div>
            </div>
            <div id="swiper-ad" class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="ad-conter">
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

                    </div>
                    <div class="swiper-slide">
                        <div class="ad-conter">
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

                    </div>
                    <div class="swiper-slide">
                        <div class="ad-conter">
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

                    </div>
                </div>
            </div>
            <style>
                .title-wrap {
                    width: 100%;
                    height: 36px;
                    display: flex;
                    border-top-left-radius: 10px;
                    border-top-right-radius: 10px;
                    background-color: #D4E9FB;
                    padding-left: 12px;
                    padding-right: 7px;
                    align-items: center;
                    justify-content: space-between;
                    font-size: 12px;
                    margin-bottom: 8px;
                }

                .loading-container {
                    display: flex;
                    justify-content: center;
                    align-items: flex-end;
                    height: 15px;
                }

                .loading-bar {
                    width: 3px;
                    height: 0;
                    background: linear-gradient(93.06deg, #46B1FF 9.76%, #2674F5 94.75%);
                    margin: 0 1px;
                    animation: bounce 0.8s infinite;
                }

                .loading-bar:nth-child(2) {
                    animation-delay: 0.1s;
                }

                .loading-bar:nth-child(3) {
                    animation-delay: 0.2s;
                }

                .loading-bar:nth-child(4) {
                    animation-delay: 0.1s;
                }


                @keyframes bounce {
                    0% {
                        height: 2px;
                    }

                    50% {
                        height: 7px;
                    }

                    75% {
                        height: 14px;
                    }

                    100% {
                        height: 2px;
                    }
                }

                .title-l {
                    display: flex;
                }

                .px7 {
                    padding: 0 7px;
                }

                .text2 {
                    font-size: 14px;
                }

                .text1 {
                    color: #074995;
                }

                .more-btn {
                    display: block;
                    background-color: #074995;
                    color: #fff !important;
                    padding: 4px 13px;
                    border-radius: 12px;
                }
            </style>
            <div class="title-wrap">
                <div class="title-l">
                    <div class="loading-container">
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                    </div>
                    <span class="px7">&#30452;&#25773;</span>
                    <span
                        class="text1">&#23569;&#22919;&#23273;&#27169;&#65292;&#22812;&#22812;&#31513;&#27468;&#65292;&#39640;&#28526;&#19981;&#26029;</span>
                </div>
                <a class="more-btn" href="">&#26356;&#22810;&#20027;&#25773;</a>
            </div>
            <style>
                .pb23 {
                    padding-bottom: 23px;
                }

                .grid-cols-2 {
                    display: grid;
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                }

                .gap7 {
                    gap: 7px;
                }

                .live-item,
                .girl-item {
                    color: #fff;
                    border-radius: 10px;
                    overflow: hidden;
                }

                .live-item:hover,
                .girl-item:hover {
                    color: #fff;
                }

                .girl-img,
                .live-img {
                    width: 100%;
                    height: 312px;
                }

                .live-bg {
                    width: 118px;
                    height: 32px;
                    background-color: rgba(0, 0, 0, 0.1);
                    border-radius: 16px;
                    border: 1px solid #A1A1A1;
                    font-size: 11px;
                }

                .bottom75 {
                    bottom: 75px;
                }

                .w-full {
                    width: 100%;
                }

                .bottom0 {
                    bottom: 0;
                }

                .avatar {
                    width: 26px;
                    height: 26px;
                    border-radius: 13px;
                    border: 1px solid #D24C1F;
                }

                .w-full {
                    width: 100%;
                }
            </style>
            <div class="pb23 grid-cols-2 gap7">
                <a class="relative bolck live-item" i="" href="" target="_blank">
                    <img class="live-img"
                        src="https://x3xdu3nf.lieeyn.cn/upload/20240422/ef793bbffac5e23aa8f56e2753b15a2f.js" alt="">
                    <div class="absolute bottom75 flex-center w-full">
                        <div class="live-bg flex-center">
                            <div class="loading-container">
                                <div class="loading-bar"></div>
                                <div class="loading-bar"></div>
                                <div class="loading-bar"></div>
                            </div>
                            <div>&#36827;&#20837;&#30452;&#25773;&#38388;</div>
                        </div>
                    </div>
                    <div class="absolute bottom0 px7 flex-space-between w-full">
                        <div>
                            <img class="avatar"
                                src="https://x3xdu3nf.lieeyn.cn/upload/20240422/ef793bbffac5e23aa8f56e2753b15a2f.js"
                                alt="">
                            <span>小九儿</span>
                        </div>
                        <div>
                            <img src="/static/images/hot.svg" alt="">
                            <span>236</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="title-wrap">
                <div class="title-l">
                    <img src="/static/images/yue.svg" alt="" srcset="">
                    <span class="px7">&#32422;&#28846;</span>
                    <span class="text1">西安 距您0.8km 65 人</span>
                </div>
                <a class="more-btn" href="">&#26356;&#22810;&#36164;&#28304;</a>
            </div>
            <style>
                .girl-bg {
                    height: 33px;
                    background-color: rgba(20, 20, 20, 0.5);
                }

                .girl-info {
                    height: 71px;
                    background-color: #49494C;
                }

                .bottom71 {
                    bottom: 71px;
                }

                .text16 {
                    font-size: 16px;
                }

                .py7 {
                    padding-top: 7px;
                    padding-bottom: 7px;
                }

                .info-btn {
                    height: 27px;
                    width: 166px;
                    line-height: 27px;
                    background-color: #D9D9D9;
                    color: #333;
                    border-radius: 4px;
                    margin: 0 auto;
                }

                .pl5 {
                    padding-left: 5px;
                    padding-right: 5px;
                }

                .more-btn1 {
                    background-color: #D4E9FB;
                    border-radius: 16.5px;
                    width: 192px;
                    height: 33px;
                    line-height: 33px;
                    color: #074995;
                    font-size: 12px;
                    text-align: center;
                }

                .y-title-i {
                    width: 197px;
                    height: 39px;
                }

                .y-conter {
                    width: 100%;
                    height: 316px;
                    background-image: url(/static/images/y-bg.png);
                    background-size: 100% 100%;
                    background-position: top;
                    margin: 10px 0;
                    padding: 36px 30px 0 30px;
                    display: flex;
                    justify-content: space-between;
                }

                .y-item {
                    width: 157px;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }

                .y-item-1 {
                    width: 100%;
                    height: 207px;
                    border-radius: 7px;
                    border: 1px solid #CC6600;
                    padding: 7px 5px;
                }

                .y-item-1 img {
                    width: 100%;
                    height: 93px;
                }

                .y-info-btn {
                    display: block;
                    width: 107px;
                    height: 28px;
                    line-height: 28px;
                    text-align: center;
                    background-color: #CC6600;
                    margin-top: 4px;
                    border-radius: 14px;
                    color: #fff;
                }

                .y-h-title {
                    margin-top: 12px;
                    padding-bottom: 7px;
                    border-bottom: 1px solid #ECCBA5;
                }

                .y-name {
                    font-size: 15px;
                    color: #FF0000;
                }

                .y-no {
                    font-size: 12px;
                    color: #888;
                }

                .y-text {
                    overflow: hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    -webkit-line-clamp: 3;
                    -webkit-box-orient: vertical;
                    font-size: 12px;
                    color: #F4684D;
                }
            </style>
            <div class="pb23 grid-cols-2 gap7">
                <a class="relative bolck girl-item" i="" href="" target="_blank">
                    <img class="girl-img"
                        src="https://x3xdu3nf.lieeyn.cn/upload/20240422/ef793bbffac5e23aa8f56e2753b15a2f.js" alt="">
                    <div class="absolute bottom71 girl-bg flex-center w-full">
                        21岁 # 162cm # 47kg # 34D
                    </div>
                    <div class="girl-info absolute bottom0 pl5  w-full">
                        <div class="flex-space-between py7">
                            <div class="text16">优萌</div>
                            <div>
                                <img src="/static/images/map.svg" alt="">
                                <span>西安 距您0.1km</span>
                            </div>
                        </div>
                        <div class="info-btn">&#26597;&#30475;&#35814;&#24773;</div>
                    </div>
                </a>
            </div>
            <div class="title-wrap">
                <div class="title-l">
                    <img src="/static/images/yao.svg" alt="" srcset="">
                    <span class="px7">&#26149;&#33647;</span>
                    <span
                        class="text1">&#36855;&#33647;&#65292;&#20652;&#24773;&#65292;&#24310;&#26102;&#65292;&#22766;&#38451;</span>
                </div>
                <a class="more-btn" href="">&#26356;&#22810;&#33647;&#21697;</a>
            </div>
            <div class="y-wrap">
                <div class="flex-center py7">
                    <img class="y-title-i" src="/static/images/y1-title.png" alt="" srcset="">
                </div>
            </div>
            <div class="y-conter">
                <div class="y-item">
                    <div class="y-item-1">
                        <div>
                            <img src="https://x3xdu3nf.lieeyn.cn/upload/20240422/ef793bbffac5e23aa8f56e2753b15a2f.js"
                                alt="">
                        </div>
                        <div class="y-h-title flex-space-between">
                            <div class="y-name">烈艳</div>
                            <div class="y-no">编号：A1</div>
                        </div>
                        <div class="y-text">因为此药在体 内代谢极快，被誉为“奸人手无形”“强奸不犯法”由于查不出任何证...</div>
                    </div>
                    <a class="y-info-btn" href="">&#26597;&#30475;&#35814;&#24773;</a>
                </div>
                <div class="y-item">
                    <div class="y-item-1">
                        <div>
                            <img src="https://x3xdu3nf.lieeyn.cn/upload/20240422/ef793bbffac5e23aa8f56e2753b15a2f.js"
                                alt="">
                        </div>
                        <div class="y-h-title flex-space-between">
                            <div class="y-name">烈艳</div>
                            <div class="y-no">编号：A1</div>
                        </div>
                        <div class="y-text">因为此药在体 内代谢极快，被誉为“奸人手无形”“强奸不犯法”由于查不出任何证...</div>
                    </div>
                    <a class="y-info-btn" href="">&#26597;&#30475;&#35814;&#24773;</a>
                </div>
            </div>
            <div class="y-wrap">
                <div class="flex-center py7">
                    <img class="y-title-i" src="/static/images/y2-title.png" alt="" srcset="">
                </div>
            </div>
            <div class="y-conter">
                <div class="y-item">
                    <div class="y-item-1">
                        <div>
                            <img src="https://x3xdu3nf.lieeyn.cn/upload/20240422/ef793bbffac5e23aa8f56e2753b15a2f.js"
                                alt="">
                        </div>
                        <div class="y-h-title flex-space-between">
                            <div class="y-name">烈艳</div>
                            <div class="y-no">编号：A1</div>
                        </div>
                        <div class="y-text">因为此药在体 内代谢极快，被誉为“奸人手无形”“强奸不犯法”由于查不出任何证...</div>
                    </div>
                    <a class="y-info-btn" href="">&#26597;&#30475;&#35814;&#24773;</a>
                </div>
                <div class="y-item">
                    <div class="y-item-1">
                        <div>
                            <img src="https://x3xdu3nf.lieeyn.cn/upload/20240422/ef793bbffac5e23aa8f56e2753b15a2f.js"
                                alt="">
                        </div>
                        <div class="y-h-title flex-space-between">
                            <div class="y-name">烈艳</div>
                            <div class="y-no">编号：A1</div>
                        </div>
                        <div class="y-text">因为此药在体 内代谢极快，被誉为“奸人手无形”“强奸不犯法”由于查不出任何证...</div>
                    </div>
                    <a class="y-info-btn" href="">&#26597;&#30475;&#35814;&#24773;</a>
                </div>
            </div>
            <div class="y-wrap">
                <div class="flex-center py7">
                    <img class="y-title-i" src="/static/images/y3-title.png" alt="" srcset="">
                </div>
            </div>
            <div class="y-conter">
                <div class="y-item">
                    <div class="y-item-1">
                        <div>
                            <img src="https://x3xdu3nf.lieeyn.cn/upload/20240422/ef793bbffac5e23aa8f56e2753b15a2f.js"
                                alt="">
                        </div>
                        <div class="y-h-title flex-space-between">
                            <div class="y-name">烈艳</div>
                            <div class="y-no">编号：A1</div>
                        </div>
                        <div class="y-text">因为此药在体 内代谢极快，被誉为“奸人手无形”“强奸不犯法”由于查不出任何证...</div>
                    </div>
                    <a class="y-info-btn" href="">&#26597;&#30475;&#35814;&#24773;</a>
                </div>
                <div class="y-item">
                    <div class="y-item-1">
                        <div>
                            <img src="https://x3xdu3nf.lieeyn.cn/upload/20240422/ef793bbffac5e23aa8f56e2753b15a2f.js"
                                alt="">
                        </div>
                        <div class="y-h-title flex-space-between">
                            <div class="y-name">烈艳</div>
                            <div class="y-no">编号：A1</div>
                        </div>
                        <div class="y-text">因为此药在体 内代谢极快，被誉为“奸人手无形”“强奸不犯法”由于查不出任何证...</div>
                    </div>
                    <a class="y-info-btn" href="">&#26597;&#30475;&#35814;&#24773;</a>
                </div>
            </div>
            <div class="flex-center">
                <a class="bolck more-btn1" href="">&#26597;&#30475;&#26356;&#22810;</a>
            </div>
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