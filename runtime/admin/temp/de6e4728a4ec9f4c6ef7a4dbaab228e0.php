<?php /*a:5:{s:54:"C:\wwwroot\zhanqun\view\admin\system\config\index.html";i:1732110802;s:49:"C:\wwwroot\zhanqun\view\admin\layout\default.html";i:1732110801;s:53:"C:\wwwroot\zhanqun\view\admin\system\config\site.html";i:1732788796;s:53:"C:\wwwroot\zhanqun\view\admin\system\config\logo.html";i:1732110802;s:55:"C:\wwwroot\zhanqun\view\admin\system\config\upload.html";i:1732110802;}*/ ?>
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
    <div class="layuimini-main" id="app">

        <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
            <ul class="layui-tab-title">
                <li class="layui-this">网站设置</li>
                <li>LOGO配置</li>
                <li>上传配置</li>
            </ul>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    <form id="app-form" class="layui-form layuimini-form">

    <div class="layui-form-item">
        <label class="layui-form-label">站点名称</label>
        <div class="layui-input-block">
            <input type="text" name="site_name" class="layui-input" lay-verify="required" placeholder="请输入站点名称" value="<?php echo sysconfig('site','site_name'); ?>">
            <tip>填写站点名称。</tip>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">浏览器图标</label>
        <div class="layui-input-block layuimini-upload">
            <input name="site_ico" class="layui-input layui-col-xs6" lay-verify="required" placeholder="请上传浏览器图标,ico类型" value="<?php echo sysconfig('site','site_ico'); ?>">
            <div class="layuimini-upload-btn">
                <span><a class="layui-btn" data-upload="site_ico" data-upload-number="one" data-upload-exts="ico"><i class="fa fa-upload"></i> 上传</a></span>
                <span><a class="layui-btn layui-btn-normal" id="select_site_ico" data-upload-select="site_ico" data-upload-number="one"><i class="fa fa-list"></i> 选择</a></span>
            </div>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">视频封面CDN</label>
        <div class="layui-input-block">
            <input type="text" name="video_img_cdn" class="layui-input" lay-verify="required" placeholder="请输入视频封面CDN" value="<?php echo sysconfig('site','video_img_cdn'); ?>">
            <tip>填写视频封面CDN。</tip>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">视频CDN</label>
        <div class="layui-input-block">
            <input type="text" name="video_cdn" class="layui-input" lay-verify="required" placeholder="请输入视频CDN" value="<?php echo sysconfig('site','video_cdn'); ?>">
            <tip>填写视频CDN。</tip>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">JS/CSS资源CDN</label>
        <div class="layui-input-block">
            <input type="text" name="jscss_cdn" class="layui-input"  placeholder="请输入JS/CSS资源CDN" value="<?php echo sysconfig('site','jscss_cdn'); ?>">
            <tip>填写JS/CSS资源CDN。</tip>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">广告图片CDN</label>
        <div class="layui-input-block">
            <input type="text" name="ad_cdn" class="layui-input" placeholder="请填写广告图片CDN" value="<?php echo sysconfig('site','ad_cdn'); ?>">
            <tip>填写广告图片CDN。</tip>
        </div>
    </div>


    <div class="layui-form-item">
        <label class="layui-form-label">小说漫画图片cdn</label>
        <div class="layui-input-block">
            <input type="text" name="manhua_img_cdn" class="layui-input" placeholder="请填写小说漫画图片cdn" value="<?php echo sysconfig('site','manhua_img_cdn'); ?>">
            <tip>填写小说漫画图片cdn。</tip>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">图片站cdn</label>
        <div class="layui-input-block">
            <input type="text" name="img_cdn" class="layui-input" placeholder="图片站cdn" value="<?php echo sysconfig('site','img_cdn'); ?>">
            <tip>图片站cdn。</tip>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">在线客服</label>
        <div class="layui-input-block">
            <input type="text" name="onlinekf" class="layui-input" placeholder="请填写在线客服" value="<?php echo sysconfig('site','onlinekf'); ?>">
            <tip>填写在线客服。</tip>
        </div>
    </div>


    <div class="layui-form-item">
        <label class="layui-form-label">邮箱账号</label>
        <div class="layui-input-block">
            <input type="text" name="onlineemail" class="layui-input" placeholder="请填写邮箱账号" value="<?php echo sysconfig('site','onlineemail'); ?>">
            <tip>填写邮箱账号。</tip>
        </div>
    </div>



    <div class="layui-form-item">
        <label class="layui-form-label">永久域名</label>
        <div class="layui-input-block">
            <input type="text" name="foreverurl" class="layui-input" placeholder="请填写永久域名" value="<?php echo sysconfig('site','foreverurl'); ?>">
            <tip>填写永久域名。</tip>
        </div>
    </div>


    <div class="layui-form-item">
        <label class="layui-form-label">推荐网址</label>
        <div class="layui-input-block">
            <input type="text" name="tuijianurl" class="layui-input" placeholder="请填写推荐网址" value="<?php echo sysconfig('site','tuijianurl'); ?>">
            <tip>填写推荐网址。</tip>
        </div>
    </div>



    <div class="layui-form-item">
        <label class="layui-form-label">备用网址</label>
        <div class="layui-input-block">
            <input type="text" name="beiyongurl" class="layui-input" placeholder="请填写备用网址" value="<?php echo sysconfig('site','beiyongurl'); ?>">
            <tip>填写备用网址。</tip>
        </div>
    </div>



    <div class="layui-form-item">
        <label class="layui-form-label">查询地址</label>
        <div class="layui-input-block">
            <input type="text" name="chaxunurl" class="layui-input" placeholder="请填写查询地址" value="<?php echo sysconfig('site','chaxunurl'); ?>">
            <tip>填写查询地址。</tip>
        </div>
    </div>


    <div class="layui-form-item">
        <label class="layui-form-label">发布地址</label>
        <div class="layui-input-block">
            <input type="text" name="fabuurl" class="layui-input" placeholder="请填写发布地址" value="<?php echo sysconfig('site','fabuurl'); ?>">
            <tip>填写发布地址。</tip>
        </div>
    </div>


    <div class="layui-form-item">
        <label class="layui-form-label">全站百度统计</label>
        <div class="layui-input-block">
            <input type="text" name="bdtongji" class="layui-input" placeholder="请填写全站百度统计" value="<?php echo sysconfig('site','bdtongji'); ?>">
            <tip>填写全站百度统计。</tip>
        </div>
    </div>

    <div class="hr-line"></div>
    <div class="layui-form-item text-center">
        <button type="submit" class="layui-btn layui-btn-normal layui-btn-sm" lay-submit="system.config/save" data-refresh="false">确认</button>
        <button type="reset" class="layui-btn layui-btn-primary layui-btn-sm">重置</button>
    </div>

</form>
                </div>
                <div class="layui-tab-item">
                    <form id="app-form" class="layui-form layuimini-form">

    <div class="layui-form-item">
        <label class="layui-form-label">LOGO标题</label>
        <div class="layui-input-block">
            <input type="text" name="logo_title" class="layui-input" lay-verify="required" placeholder="请输入LOGO标题" value="<?php echo sysconfig('site','logo_title'); ?>">
            <tip>填写站点名称。</tip>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">LOGO图标</label>
        <div class="layui-input-block layuimini-upload">
            <input name="logo_image" class="layui-input layui-col-xs6" lay-verify="required" placeholder="请上传LOGO图标" value="<?php echo sysconfig('site','logo_image'); ?>">
            <div class="layuimini-upload-btn">
                <span><a class="layui-btn" data-upload="logo_image" data-upload-number="one" data-upload-exts="ico|png|jpg|jpeg"><i class="fa fa-upload"></i> 上传</a></span>
                <span><a class="layui-btn layui-btn-normal" id="select_logo_image" data-upload-select="logo_image" data-upload-number="one"><i class="fa fa-list"></i> 选择</a></span>
            </div>
        </div>
    </div>

    <div class="hr-line"></div>
    <div class="layui-form-item text-center">
        <button type="submit" class="layui-btn layui-btn-normal layui-btn-sm" lay-submit="system.config/save" data-refresh="false">确认</button>
        <button type="reset" class="layui-btn layui-btn-primary layui-btn-sm">重置</button>
    </div>

</form>
                </div>
                <div class="layui-tab-item">
                    <form id="app-form" class="layui-form layuimini-form">

    <div class="layui-form-item">
        <label class="layui-form-label required">存储方式</label>
        <div class="layui-input-block">
            <?php foreach(['local'=>'本地存储','alioss'=>'阿里云oss','qnoss'=>'七牛云oss','txcos'=>'腾讯云cos'] as $key=>$val): ?>
            <input type="radio" v-model="upload_type" name="upload_type" lay-filter="upload_type" value="<?php echo htmlentities($key); ?>" title="<?php echo htmlentities($val); ?>" <?php if($key==sysconfig('upload','upload_type')): ?>checked=""<?php endif; ?>>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label required">允许类型</label>
        <div class="layui-input-block">
            <input type="text" name="upload_allow_ext" class="layui-input" lay-verify="required" lay-reqtext="请输入允许类型" placeholder="请输入允许类型" value="<?php echo sysconfig('upload','upload_allow_ext'); ?>">
            <tip>英文逗号做分隔符。</tip>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label required">允许大小</label>
        <div class="layui-input-block">
            <input type="text" name="upload_allow_size" class="layui-input" lay-verify="required" lay-reqtext="请输入允许上传大小" placeholder="请输入允许上传大小" value="<?php echo sysconfig('upload','upload_allow_size'); ?>">
            <tip>设置允许上传大小。</tip>
        </div>
    </div>

    <div class="layui-form-item" v-if="upload_type == 'alioss'" v-cloak>
        <label class="layui-form-label required">公钥信息</label>
        <div class="layui-input-block">
            <input type="text" name="alioss_access_key_id" class="layui-input" lay-verify="required" lay-reqtext="请输入公钥信息" placeholder="请输入公钥信息" value="<?php echo sysconfig('upload','alioss_access_key_id'); ?>">
            <tip>例子：FSGGshu64642THSk</tip>
        </div>
    </div>

    <div class="layui-form-item" v-if="upload_type == 'alioss'" v-cloak>
        <label class="layui-form-label required">私钥信息</label>
        <div class="layui-input-block">
            <input type="text" name="alioss_access_key_secret" class="layui-input" lay-verify="required" lay-reqtext="请输入私钥信息" placeholder="请输入私钥信息" value="<?php echo sysconfig('upload','alioss_access_key_secret'); ?>">
            <tip>例子：5fsfPReYKkFSGGshu64642THSkmTInaIm</tip>
        </div>
    </div>

    <div class="layui-form-item" v-if="upload_type == 'alioss'" v-cloak>
        <label class="layui-form-label required">数据中心</label>
        <div class="layui-input-block">
            <input type="text" name="alioss_endpoint" class="layui-input" lay-verify="required" lay-reqtext="请输入数据中心" placeholder="请输入数据中心" value="<?php echo sysconfig('upload','alioss_endpoint'); ?>">
            <tip>例子：https://oss-cn-shenzhen.aliyuncs.com</tip>
        </div>
    </div>

    <div class="layui-form-item" v-if="upload_type == 'alioss'" v-cloak>
        <label class="layui-form-label required">空间名称</label>
        <div class="layui-input-block">
            <input type="text" name="alioss_bucket" class="layui-input" lay-verify="required" lay-reqtext="请输入空间名称" placeholder="请输入空间名称" value="<?php echo sysconfig('upload','alioss_bucket'); ?>">
            <tip>例子：easy-admin</tip>
        </div>
    </div>

    <div class="layui-form-item" v-if="upload_type == 'alioss'" v-cloak>
        <label class="layui-form-label required">访问域名</label>
        <div class="layui-input-block">
            <input type="text" name="alioss_domain" class="layui-input" lay-verify="required" lay-reqtext="请输入访问域名" placeholder="请输入访问域名" value="<?php echo sysconfig('upload','alioss_domain'); ?>">
            <tip>例子：easy-admin.oss-cn-shenzhen.aliyuncs.com</tip>
        </div>
    </div>

    <div class="layui-form-item" v-if="upload_type == 'txcos'" v-cloak>
        <label class="layui-form-label required">公钥信息</label>
        <div class="layui-input-block">
            <input type="text" name="txcos_secret_id" class="layui-input" lay-verify="required" lay-reqtext="请输入公钥信息" placeholder="请输入公钥信息" value="<?php echo sysconfig('upload','txcos_secret_id'); ?>">
            <tip>例子：AKIDta6OQCbALQGrCI6ngKwQffR3dfsfrwrfs</tip>
        </div>
    </div>

    <div class="layui-form-item" v-if="upload_type == 'txcos'" v-cloak>
        <label class="layui-form-label required">私钥信息</label>
        <div class="layui-input-block">
            <input type="text" name="txcos_secret_key" class="layui-input" lay-verify="required" lay-reqtext="请输入私钥信息" placeholder="请输入私钥信息" value="<?php echo sysconfig('upload','txcos_secret_key'); ?>">
            <tip>例子：VllEWYKtClAbpqfFdTqysXxGQM6dsfs</tip>
        </div>
    </div>

    <div class="layui-form-item" v-if="upload_type == 'txcos'" v-cloak>
        <label class="layui-form-label required">存储桶地域</label>
        <div class="layui-input-block">
            <input type="text" name="txcos_region" class="layui-input" lay-verify="required" lay-reqtext="请输入存储桶地域" placeholder="请输入存储桶地域" value="<?php echo sysconfig('upload','txcos_region'); ?>">
            <tip>例子：ap-guangzhou</tip>
        </div>
    </div>

    <div class="layui-form-item" v-if="upload_type == 'txcos'" v-cloak>
        <label class="layui-form-label required">存储桶名称</label>
        <div class="layui-input-block">
            <input type="text" name="tecos_bucket" class="layui-input" lay-verify="required" lay-reqtext="请输入存储桶名称" placeholder="请输入存储桶名称" value="<?php echo sysconfig('upload','tecos_bucket'); ?>">
            <tip>例子：easyadmin-1251997243</tip>
        </div>
    </div>

    <div class="layui-form-item" v-if="upload_type == 'qnoss'" v-cloak>
        <label class="layui-form-label required">公钥信息</label>
        <div class="layui-input-block">
            <input type="text" name="qnoss_access_key" class="layui-input" lay-verify="required" lay-reqtext="请输入公钥信息" placeholder="请输入公钥信息" value="<?php echo sysconfig('upload','qnoss_access_key'); ?>">
            <tip>例子：v-lV3tXev7yyfsfa1jRc6_8rFOhFYGQvvjsAQxdrB</tip>
        </div>
    </div>

    <div class="layui-form-item" v-if="upload_type == 'qnoss'" v-cloak>
        <label class="layui-form-label required">私钥信息</label>
        <div class="layui-input-block">
            <input type="text" name="qnoss_secret_key" class="layui-input" lay-verify="required" lay-reqtext="请输入私钥信息" placeholder="请输入私钥信息" value="<?php echo sysconfig('upload','qnoss_secret_key'); ?>">
            <tip>例子：XOhYRR9JNqxsWVEO-mHWB4193vfsfsQADuORaXzr</tip>
        </div>
    </div>

    <div class="layui-form-item" v-if="upload_type == 'qnoss'" v-cloak>
        <label class="layui-form-label required">存储空间</label>
        <div class="layui-input-block">
            <input type="text" name="qnoss_bucket" class="layui-input" lay-verify="required" lay-reqtext="请输入存储桶地域" placeholder="请输入存储桶地域" value="<?php echo sysconfig('upload','qnoss_bucket'); ?>">
            <tip>例子：easyadmin</tip>
        </div>
    </div>

    <div class="layui-form-item" v-if="upload_type == 'qnoss'" v-cloak>
        <label class="layui-form-label required">访问域名</label>
        <div class="layui-input-block">
            <input type="text" name="qnoss_domain" class="layui-input" lay-verify="required" lay-reqtext="请输入访问域名" placeholder="请输入访问域名" value="<?php echo sysconfig('upload','qnoss_domain'); ?>">
            <tip>例子：http://q0xqzappp.bkt.clouddn.com</tip>
        </div>
    </div>

    <div class="hr-line"></div>
    <div class="layui-form-item text-center">
        <button type="submit" class="layui-btn layui-btn-normal layui-btn-sm" lay-submit="system.config/save" data-refresh="false">确认</button>
        <button type="reset" class="layui-btn layui-btn-primary layui-btn-sm">重置</button>
    </div>

</form>
<script>
    var upload_type = "<?php echo sysconfig('upload','upload_type'); ?>";
</script>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>