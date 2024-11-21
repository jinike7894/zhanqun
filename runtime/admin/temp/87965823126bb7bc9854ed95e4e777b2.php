<?php /*a:2:{s:56:"C:\wwwroot\zhanqun\view\admin\website\site\settings.html";i:1731578281;s:49:"C:\wwwroot\zhanqun\view\admin\layout\default.html";i:1730802670;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo sysconfig('site','site_name'); ?></title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/static/admin/css/public.css?v=<?php echo htmlentities($version); ?>" media="all">
    <script>
        window.CONFIG = {
            ADMIN: "<?php echo htmlentities((isset($adminModuleName) && ($adminModuleName !== '')?$adminModuleName:'admin')); ?>",
            CONTROLLER_JS_PATH: "<?php echo htmlentities((isset($thisControllerJsPath) && ($thisControllerJsPath !== '')?$thisControllerJsPath:'')); ?>",
            ACTION: "<?php echo htmlentities((isset($thisAction) && ($thisAction !== '')?$thisAction:'')); ?>",
            AUTOLOAD_JS: "<?php echo htmlentities((isset($autoloadJs) && ($autoloadJs !== '')?$autoloadJs:'false')); ?>",
            IS_SUPER_ADMIN: "<?php echo htmlentities((isset($isSuperAdmin) && ($isSuperAdmin !== '')?$isSuperAdmin:'false')); ?>",
            VERSION: "<?php echo htmlentities((isset($version) && ($version !== '')?$version:'1.0.0')); ?>",
            CSRF_TOKEN: "<?php echo token(); ?>",
        };
    </script>
    <script src="/static/plugs/layui-v2.5.6/layui.all.js?v=<?php echo htmlentities($version); ?>" charset="utf-8"></script>
    <script src="/static/plugs/require-2.3.6/require.js?v=<?php echo htmlentities($version); ?>" charset="utf-8"></script>
    <script src="/static/config-admin.js?v=<?php echo htmlentities($version); ?>" charset="utf-8"></script>
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title></title>
    <script type="text/javascript" src="/static/admin/js/jquery.js"></script>
    <link rel="stylesheet" href="/static/admin/css/style.css">
</head>

<body>
    <div id="page">
        <!-- 九宫格图片 -->
        <div class="jggImg">
            <div class="hr"></div>
            <div class="jggImg_nameBox">
                <div class="jggImg_name">九宫格图片</div>
                <div class="jggImg_zkBtn" style="display: none;">展开</div>
                <div class="jggImg_sqBtn">收起</div>
            </div>
            <table class="jggContent">
                <tr class="tableTitle">
                    <th scope="col">ID</th>
                    <th scope="col">类别</th>
                    <th scope="col">分类</th>
                    <th scope="col">排序</th>
                    <th scope="col">外显名称</th>
                    <th scope="col">客户名称</th>
                    <th scope="col">产品图片</th>
                    <th scope="col">跳转方式</th>
                    <th scope="col">跳转地址</th>
                    <th scope="col">状态</th>
                </tr>
                <tr>
                    <th scope="col">5</th>
                    <th scope="col">直播</th>
                    <th scope="col">九宫格图片</th>
                    <th scope="col">12</th>
                    <th scope="col">ABCD</th>
                    <th scope="col">ABCD</th>
                    <th scope="col">产品图片</th>
                    <th scope="col">站外跳转</th>
                    <th scope="col">https://baidu.com</th>
                    <th scope="col">状态</th>
                </tr>
                <tr>
                    <th scope="col">4</th>
                    <th scope="col">图库</th>
                    <th scope="col">九宫格图片</th>
                    <th scope="col">38</th>
                    <th scope="col">ABCD</th>
                    <th scope="col">ABCD</th>
                    <th scope="col">产品图片</th>
                    <th scope="col">站外跳转</th>
                    <th scope="col">
                        <select class="select">
                            <option>to视频1站</option>
                            <option>to视频2站</option>
                            <option>to视频3站</option>
                            <option>to视频4站</option>
                        </select>
                    </th>
                    <th scope="col">状态</th>
                </tr>
            </table>

        </div>

        <!-- 九宫格文字 -->
        <div class="jggImg">
            <div class="hr"></div>
            <div class="jggImg_nameBox">
                <div class="jggImg_name">九宫格文字</div>
                <div class="jggtxt_zkBtn" style="display: none;">展开</div>
                <div class="jggtxt_sqBtn">收起</div>
            </div>
            <table class="jggtxtContent">
                <tr class="tableTitle">
                    <th scope="col">ID</th>
                    <th scope="col">类别</th>
                    <th scope="col">分类</th>
                    <th scope="col">排序</th>
                    <th scope="col">外显名称</th>
                    <th scope="col">客户名称</th>
                    <th scope="col">产品图片</th>
                    <th scope="col">跳转方式</th>
                    <th scope="col">跳转地址</th>
                    <th scope="col">状态</th>
                </tr>
                <tr>
                    <th scope="col">5</th>
                    <th scope="col">直播</th>
                    <th scope="col">九宫格图片</th>
                    <th scope="col">12</th>
                    <th scope="col">ABCD</th>
                    <th scope="col">ABCD</th>
                    <th scope="col">产品图片</th>
                    <th scope="col">站外跳转</th>
                    <th scope="col">https://baidu.com</th>
                    <th scope="col">状态</th>
                </tr>
                <tr>
                    <th scope="col">4</th>
                    <th scope="col">图库</th>
                    <th scope="col">九宫格图片</th>
                    <th scope="col">38</th>
                    <th scope="col">ABCD</th>
                    <th scope="col">ABCD</th>
                    <th scope="col">产品图片</th>
                    <th scope="col">站外跳转</th>
                    <th scope="col">
                        <select class="select">
                            <option>to视频1站</option>
                            <option>to视频2站</option>
                            <option>to视频3站</option>
                            <option>to视频4站</option>
                        </select>
                    </th>
                    <th scope="col">状态</th>
                </tr>
            </table>

        </div>
        <!-- 轮播图文字 -->
        <div class="jggImg">
            <div class="hr"></div>
            <div class="jggImg_nameBox">
                <div class="jggImg_name">轮播图</div>
                <div class="swiper_zkBtn" style="display: none;">展开</div>
                <div class="swiper_sqBtn">收起</div>
            </div>
            <table class="swiperContent">
                <tr class="tableTitle">
                    <th scope="col">ID</th>
                    <th scope="col">类别</th>
                    <th scope="col">分类</th>
                    <th scope="col">排序</th>
                    <th scope="col">外显名称</th>
                    <th scope="col">客户名称</th>
                    <th scope="col">产品图片</th>
                    <th scope="col">跳转方式</th>
                    <th scope="col">跳转地址</th>
                    <th scope="col">状态</th>
                </tr>
                <tr>
                    <th scope="col">5</th>
                    <th scope="col">直播</th>
                    <th scope="col">九宫格图片</th>
                    <th scope="col">12</th>
                    <th scope="col">ABCD</th>
                    <th scope="col">ABCD</th>
                    <th scope="col">产品图片</th>
                    <th scope="col">站外跳转</th>
                    <th scope="col">https://baidu.com</th>
                    <th scope="col">状态</th>
                </tr>
                <tr>
                    <th scope="col">4</th>
                    <th scope="col">图库</th>
                    <th scope="col">九宫格图片</th>
                    <th scope="col">38</th>
                    <th scope="col">ABCD</th>
                    <th scope="col">ABCD</th>
                    <th scope="col">产品图片</th>
                    <th scope="col">站外跳转</th>
                    <th scope="col">
                        <select class="select">
                            <option>to视频1站</option>
                            <option>to视频2站</option>
                            <option>to视频3站</option>
                            <option>to视频4站</option>
                        </select>
                    </th>
                    <th scope="col">状态</th>
                </tr>
            </table>

        </div>
        <!-- 弹窗文字 -->
        <div class="jggImg">
            <div class="hr"></div>
            <div class="jggImg_nameBox">
                <div class="jggImg_name">弹窗</div>
                <div class="tc_zkBtn" style="display: none;">展开</div>
                <div class="tc_sqBtn">收起</div>
            </div>
            <table class="tcContent">
                <tr class="tableTitle">
                    <th scope="col">ID</th>
                    <th scope="col">类别</th>
                    <th scope="col">分类</th>
                    <th scope="col">排序</th>
                    <th scope="col">外显名称</th>
                    <th scope="col">客户名称</th>
                    <th scope="col">产品图片</th>
                    <th scope="col">跳转方式</th>
                    <th scope="col">跳转地址</th>
                    <th scope="col">状态</th>
                </tr>
                <tr>
                    <th scope="col">5</th>
                    <th scope="col">直播</th>
                    <th scope="col">九宫格图片</th>
                    <th scope="col">12</th>
                    <th scope="col">ABCD</th>
                    <th scope="col">ABCD</th>
                    <th scope="col">产品图片</th>
                    <th scope="col">站外跳转</th>
                    <th scope="col">https://baidu.com</th>
                    <th scope="col">状态</th>
                </tr>
                <tr>
                    <th scope="col">4</th>
                    <th scope="col">图库</th>
                    <th scope="col">九宫格图片</th>
                    <th scope="col">38</th>
                    <th scope="col">ABCD</th>
                    <th scope="col">ABCD</th>
                    <th scope="col">产品图片</th>
                    <th scope="col">站外跳转</th>
                    <th scope="col">
                        <select class="select">
                            <option>to视频1站</option>
                            <option>to视频2站</option>
                            <option>to视频3站</option>
                            <option>to视频4站</option>
                        </select>
                    </th>
                    <th scope="col">状态</th>
                </tr>
            </table>

        </div>
        <!-- 视频封面 -->
        <div class="jggImg">
            <div class="hr"></div>
            <div class="jggImg_nameBox">
                <div class="jggImg_name">视频封面</div>
                <div class="spCover_zkBtn" style="display: none;">展开</div>
                <div class="spCover_sqBtn">收起</div>
            </div>
            <table class="spCoverContent">
                <tr class="tableTitle">
                    <th scope="col">ID</th>
                    <th scope="col">类别</th>
                    <th scope="col">分类</th>
                    <th scope="col">排序</th>
                    <th scope="col">外显名称</th>
                    <th scope="col">客户名称</th>
                    <th scope="col">产品图片</th>
                    <th scope="col">跳转方式</th>
                    <th scope="col">跳转地址</th>
                    <th scope="col">状态</th>
                </tr>
                <tr>
                    <th scope="col">5</th>
                    <th scope="col">直播</th>
                    <th scope="col">九宫格图片</th>
                    <th scope="col">12</th>
                    <th scope="col">ABCD</th>
                    <th scope="col">ABCD</th>
                    <th scope="col">产品图片</th>
                    <th scope="col">站外跳转</th>
                    <th scope="col">https://baidu.com</th>
                    <th scope="col">状态</th>
                </tr>
                <tr>
                    <th scope="col">4</th>
                    <th scope="col">图库</th>
                    <th scope="col">九宫格图片</th>
                    <th scope="col">38</th>
                    <th scope="col">ABCD</th>
                    <th scope="col">ABCD</th>
                    <th scope="col">产品图片</th>
                    <th scope="col">站外跳转</th>
                    <th scope="col">
                        <select class="select">
                            <option>to视频1站</option>
                            <option>to视频2站</option>
                            <option>to视频3站</option>
                            <option>to视频4站</option>
                        </select>
                    </th>
                    <th scope="col">状态</th>
                </tr>
            </table>

        </div>

        <div class="btnBox">
            <div class="cancel">
                取消
            </div>
            <div class="saveBtn">
                修改
            </div>

        </div>

    </div>




    <script>
        // 九宫格图片
        $(document).ready(function () {
            $('.jggImg_zkBtn').click(function () {
                $('.jggImg_zkBtn').hide()
                $('.jggImg_sqBtn').show()
                $('.jggContent').show();
            });
        });
        $(document).ready(function () {
            $('.jggImg_sqBtn').click(function () {
                $('.jggImg_zkBtn').show()
                $('.jggImg_sqBtn').hide()
                $('.jggContent').hide();
            });
        });
        // 九宫格文字
        $(document).ready(function () {
            $('.jggtxt_zkBtn').click(function () {
                $('.jggtxt_zkBtn').hide()
                $('.jggtxt_sqBtn').show()
                $('.jggtxtContent').show();
            });
        });
        $(document).ready(function () {
            $('.jggtxt_sqBtn').click(function () {
                $('.jggtxt_zkBtn').show()
                $('.jggtxt_sqBtn').hide()
                $('.jggtxtContent').hide();
            });
        });
        // 轮播图
        $(document).ready(function () {
            $('.swiper_zkBtn').click(function () {
                $('.swiper_zkBtn').hide()
                $('.swiper_sqBtn').show()
                $('.swiperContent').show();
            });
        });
        $(document).ready(function () {
            $('.swiper_sqBtn').click(function () {
                $('.swiper_zkBtn').show()
                $('.swiper_sqBtn').hide()
                $('.swiperContent').hide();
            });
        });
        // 弹窗
        $(document).ready(function () {
            $('.tc_zkBtn').click(function () {
                $('.tc_zkBtn').hide()
                $('.tc_sqBtn').show()
                $('.tcContent').show();
            });
        });
        $(document).ready(function () {
            $('.tc_sqBtn').click(function () {
                $('.tc_zkBtn').show()
                $('.tc_sqBtn').hide()
                $('.tcContent').hide();
            });
        });
        // 视频封面
        $(document).ready(function () {
            $('.spCover_zkBtn').click(function () {
                $('.spCover_zkBtn').hide()
                $('.spCover_sqBtn').show()
                $('.spCoverContent').show();
            });
        });
        $(document).ready(function () {
            $('.spCover_sqBtn').click(function () {
                $('.spCover_zkBtn').show()
                $('.spCover_sqBtn').hide()
                $('.spCoverContent').hide();
            });
        });



    </script>
</body>

</html>
</body>
</html>