<?php /*a:2:{s:51:"C:\wwwroot\zhanqun\view\admin\mall\product\add.html";i:1731593490;s:49:"C:\wwwroot\zhanqun\view\admin\layout\default.html";i:1730802670;}*/ ?>
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
<div class="layuimini-container">
    <form id="app-form" class="layui-form layuimini-form">
        <div class="layui-form-item">
            <label class="layui-form-label">分类</label>
            <div class="layui-input-block">
                <select name="pid" lay-verify="required" data-select="<?php echo url('mall.type/index'); ?>"
                    data-fields="id,title"></select>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">类别</label>
            <div class="layui-input-block">
                <select name="cid" lay-verify="required" data-select="<?php echo url('mall.category/index'); ?>"
                    data-fields="id,title"></select>
            </div>
        </div>

        <!-- <div class="layui-form-item">
            <label class="layui-form-label">到期日期</label>
            <div class="layui-input-block">
                <input type="text" name="due_date" readonly="true" id="due_date" class="layui-input" lay-verify="" placeholder="请输入到期日期">
            </div>
        </div> -->

        <div class="layui-form-item">
            <label class="layui-form-label">排序(越小越前)</label>
            <div class="layui-input-block">
                <input type="number" name="sort" class="layui-input" lay-verify="required" placeholder="请输入产品所在位置"
                    value="1" size="10">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">外显名称</label>
            <div class="layui-input-block">
                <!--<input type="text" name="name" class="layui-input" lay-verify="required" placeholder="请输入广告位名称" value="">-->
                <textarea name="name" class="layui-textarea" lay-verify="required" placeholder="请输入外显名称"></textarea>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">客户名称</label>
            <div class="layui-input-block">
                <input type="text" name="k_name" class="layui-input" lay-verify="required" placeholder="请输入客户名称"
                    value="">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label required">产品图片</label>
            <div class="layui-input-block layuimini-upload">
                <input name="img" class="layui-input layui-col-xs6" lay-verify="required" placeholder="请上传产品图片"
                    value="">
                <div class="layuimini-upload-btn">
                    <span><a class="layui-btn" data-upload="img" data-upload-number="one"
                            data-upload-exts="png|jpg|jpeg|gif|webp" data-upload-icon="image"><i
                                class="fa fa-upload"></i> 上传</a></span>
                    <span><a class="layui-btn layui-btn-normal" id="select_logo" data-upload-select="img"
                            data-upload-number="one" data-upload-mimetype="image/*"><i class="fa fa-list"></i>
                            选择</a></span>
                </div>
            </div>
        </div>
        <!-- <div class="layui-form-item"></div>
            <label class="layui-form-label required">跳转方式</label>
            <div class="layui-input-block ">
               
                <select name="is_home" id="is_home"></select>
                    <option value="0">站外跳转</option>
                    <option value="1">站内跳转</option>
                </select>
            </div>
        </div> -->
        <!-- <div class="layui-form-item">
            <label class="layui-form-label">是否首页展示</label>
            <div class="layui-input-block">
                <select name="is_home" id="is_home">
                    <option value="0">否</option>
                    <option value="1">是</option>
                </select>
            </div>
        </div> -->
        <!-- <div class="layui-form-item">
            <label class="layui-form-label">是否banner图</label>
            <div class="layui-input-block">
                <select name="is_banner" id="is_banner">
                    <option value="0">否</option>
                    <option value="1">是</option>
                </select>
            </div>
        </div> -->

        <!-- <div class="layui-form-item">
            <label class="layui-form-label">内页广告位置</label>
            <div class="layui-input-block">
                <select name="ad_position" id="ad_position">
                    <option value="0">默认</option>
                    <option value="1">顶部</option>
                    <option value="2">底部</option>
                </select>
            </div>
        </div> -->

        <!-- <div class="layui-form-item">
            <label class="layui-form-label">产品链接(安卓)</label>
            <div class="layui-input-block">
                <input type="text" name="androidurl" class="layui-input" lay-verify="required" placeholder="请输入产品链接,必须以http://或者https://开头" value="" />
            </div>
        </div> -->

        <!-- <div class="layui-form-item">
            <label class="layui-form-label">是否APK直链</label>
            <div class="layui-input-block">
                <select name="is_apk" id="is_apk">
                    <option value="0">否</option>
                    <option value="1">是</option>
                </select>
            </div>
        </div> -->

        <!-- <div class="layui-form-item">
            <label class="layui-form-label">轮播图跳转路径</label>
            <div class="layui-input-block">
                <select name="is_browser" id="is_browser">
                    <option value="0" selected="selected">跳转广告</option>
                    <option value="1">直播内页</option>
                    <option value="2">约炮内页</option>
                    <option value="3">春药内页</option>
                </select>
            </div>
        </div> -->

        <!-- <div class="layui-form-item">
            <label class="layui-form-label">产品链接(ios)</label>
            <div class="layui-input-block">
                <input type="text" name="iosurl" class="layui-input" placeholder="请输入产品链接,必须以http://或者https://开头" value="">
            </div>
        </div> -->

        <!-- <div class="layui-form-item">
            <label class="layui-form-label required">下载次数</label>
            <div class="layui-input-block">
                <input type="number" name="downnum" class="layui-input" placeholder="请输入产品下载次数" value="<?php echo mt_rand(100000,9999999);?>">
            </div>
        </div> -->

        <!-- <div class="layui-form-item">
            <label class="layui-form-label required">产品简介</label>
            <div class="layui-input-block">
                <input type="text" name="slogan" class="layui-input" placeholder="请输入产品简介" value="">
            </div>
        </div> -->

        <!-- <div class="layui-form-item">
            <label class="layui-form-label">产品描述(博彩)</label>
            <div class="layui-input-block">
                <input type="text" name="txt" class="layui-input" placeholder="请输入产品描述" value="">
            </div>
        </div> -->

        <div class="layui-form-item" style="display: none;">
            <label class="layui-form-label">跳转方式</label>
            <div class="layui-input-block">
                <select name="is_best" id="is_best">
                    <option value="0">站外跳转</option>
                    <option value="1">站内跳转</option>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">跳转方式-</label>
            <div class="layui-input-block">
                <select name="url_type" id="url_type" lay-filter="url_type">
                    <option value="1">站内跳转</option>
                    <option value="0">站外跳转</option>
                </select>
            </div>
        </div>

        <div class="layui-form-item urls" style="display: none;">
            <label class="layui-form-label">链接</label>
            <div class="layui-input-block">
                <input type="text" name="androidurl" class="layui-input" 
                    placeholder="请输入产品链接,必须以http://或者https://开头" value="" />
            </div>
        </div>
        
        <!-- <div class="layui-form-item" v-if="is_best == '1'" v-show='true'>
            <label class="layui-form-label required">强烈推荐</label>
            <div class="layui-input-block layuimini-upload">
                <input name="glory" class="layui-input layui-col-xs6" lay-verify="required" placeholder="请上传强烈推荐图片" value="/upload/20230417/93cb2cef050a28a28ff2b96fa4850cd4.jpg">
                <div class="layuimini-upload-btn">
                    <span><a class="layui-btn" data-upload="glory" data-upload-number="one" data-upload-exts="gif|webp|png|jpg|jpeg"><i class="fa fa-upload"></i> 上传</a></span>
                    <span><a class="layui-btn layui-btn-normal" id="select_glory_image" data-upload-select="glory" data-upload-number="one"><i class="fa fa-list"></i> 选择</a></span>
                </div>
            </div>
        </div> -->

        <!-- <div class="layui-form-item" v-if="is_best == '1'" v-show='true'>
            <label class="layui-form-label required">推荐小图</label>
            <div class="layui-input-block layuimini-upload">
                <input name="fav" class="layui-input layui-col-xs6" lay-verify="required" placeholder="请上传强烈推荐图片" value="/upload/20230417/615b218425de8fc4af4f6cdad1ecd6ac.jpg">
                <div class="layuimini-upload-btn">
                    <span><a class="layui-btn" data-upload="fav" data-upload-number="one" data-upload-exts="gif|webp|png|jpg|jpeg"><i class="fa fa-upload"></i> 上传</a></span>
                    <span><a class="layui-btn layui-btn-normal" id="select_fav_image" data-upload-select="fav" data-upload-number="one"><i class="fa fa-list"></i> 选择</a></span>
                </div>
            </div>
        </div> -->

        <div class="layui-form-item">
            <label class="layui-form-label required">详细图(3~6张)</label>
            <div class="layui-input-block layuimini-upload">
                <input name="pics" class="layui-input layui-col-xs6"  placeholder="请上传产品详细图片(3~6张)" value="">
                <div class="layuimini-upload-btn">
                    <span><a class="layui-btn" data-upload="pics" data-upload-number="three" data-upload-exts="png|jpg|jpeg|gif|webp" data-upload-icon="image"><i class="fa fa-upload"></i> 上传</a></span>
                    <span><a class="layui-btn layui-btn-normal" id="select_pics" data-upload-select="pics" data-upload-number="three" data-upload-mimetype="image/*"><i class="fa fa-list"></i> 选择</a></span>
                </div>
            </div>
        </div>

        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label required">详细内容</label>
            <div class="layui-input-block">
                <textarea name="content" class="layui-textarea" placeholder="请输入详细内容"></textarea>
            </div>
        </div>

        <div class="hr-line"></div>
        <div class="layui-form-item text-center">
            <button type="submit" class="layui-btn layui-btn-normal layui-btn-sm" lay-submit>确认</button>
            <button type="reset" class="layui-btn layui-btn-primary layui-btn-sm">重置</button>
        </div>

    </form>
</div>

<script type="text/javascript">
    layui.use(['form', 'layer', 'laydate'], function () {
        // 操作对象
        var form = layui.form
            , layer = layui.layer
            , laydate = layui.laydate
            , $ = layui.jquery;

        form.on('select(url_type)', function (data) {
            var value = data.value; // 获得被选中的值
            if (value == 0) {
                $(".urls").show();
            } else {
                $(".urls").hide();
            }
        });
        laydate.render({
            elem: '#due_date',
            type: 'date',
            //format: 'HH:mm:00' //可任意组合
            done: function (value, date, endDate) {

            }
        });

    });



</script>
</body>
</html>