<?php /*a:2:{s:52:"C:\wwwroot\zhanqun\view\admin\website\site\edit.html";i:1732788353;s:49:"C:\wwwroot\zhanqun\view\admin\layout\default.html";i:1732110801;}*/ ?>
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
            <label class="layui-form-label">站点名称</label>
            <div class="layui-input-block">
                <input type="text" name="name" class="layui-input"  placeholder="请输入站点名称" value="<?php echo htmlentities((isset($row['name']) && ($row['name'] !== '')?$row['name']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">站点名称</label>
            <div class="layui-input-block">
                <input type="text" name="domain" class="layui-input"  placeholder="请输入站点名称" value="<?php echo htmlentities((isset($row['domain']) && ($row['domain'] !== '')?$row['domain']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">站点类型</label>
            <div class="layui-input-block">
                <!-- <input type="text" name="type" class="layui-input"  placeholder="请输入站点类型" value="<?php echo htmlentities((isset($row['type']) && ($row['type'] !== '')?$row['type']:'')); ?>">
                  -->
                  <select name="type" lay-verify="required" data-select="<?php echo url('website.category/getcategory'); ?>" data-fields="id,name" data-value="<?php echo htmlentities((isset($row['type']) && ($row['type'] !== '')?$row['type']:'')); ?>"></select>
                </select>
            </div>
        </div>
        <!-- <div class="layui-form-item">
            <label class="layui-form-label">站点模板</label>
            <div class="layui-input-block">
                <input type="text" name="template" class="layui-input"  placeholder="请输入站点模板" value="<?php echo htmlentities((isset($row['template']) && ($row['template'] !== '')?$row['template']:'')); ?>">
            </div>
        </div> -->
        <div class="layui-form-item">
            <label class="layui-form-label required">logo</label>
            <div class="layui-input-block layuimini-upload">
                <input name="icon" class="layui-input layui-col-xs6"   placeholder="请上传logo" value="<?php echo htmlentities((isset($row['icon']) && ($row['icon'] !== '')?$row['icon']:'')); ?>">
                <div class="layuimini-upload-btn">
                    <span><a class="layui-btn" data-upload="icon" data-upload-number="one" data-upload-exts="png|jpg|ico|jpeg" data-upload-icon="image"><i class="fa fa-upload"></i> 上传</a></span>
                    <span><a class="layui-btn layui-btn-normal" id="select_icon" data-upload-select="icon" data-upload-number="one" data-upload-mimetype="image/*"><i class="fa fa-list"></i> 选择</a></span>
                </div>
            </div>
        </div>
        <div class="hr-line"></div>
        <div class="layui-form-item text-center">
            <button type="submit" class="layui-btn layui-btn-normal layui-btn-sm" lay-submit>确认</button>
            <button type="reset" class="layui-btn layui-btn-primary layui-btn-sm">重置</button>
        </div>

    </form>
</div>
</body>
</html>