<?php /*a:2:{s:52:"C:\wwwroot\zhanqun\view\admin\system\quick\edit.html";i:1730802670;s:49:"C:\wwwroot\zhanqun\view\admin\layout\default.html";i:1730802670;}*/ ?>
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
<style>
    .layui-iconpicker-body.layui-iconpicker-body-page .hide {
        display: none;
    }
</style>
<link rel="stylesheet" href="/static/plugs/lay-module/autocomplete/autocomplete.css?v=<?php echo htmlentities($version); ?>" media="all">
<div class="layuimini-container">
    <form id="app-form" class="layui-form layuimini-form">

        <div class="layui-form-item">
            <label class="layui-form-label">快捷名称</label>
            <div class="layui-input-block">
                <input type="text" name="title" class="layui-input" lay-verify="required" lay-reqtext="请输入快捷名称" placeholder="请输入快捷名称" value="<?php echo htmlentities((isset($row['title']) && ($row['title'] !== '')?$row['title']:'')); ?>">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">快捷链接</label>
            <div class="layui-input-block">
                <input type="text" id="href" name="href" class="layui-input" lay-verify="required"  placeholder="请输入快捷链接" value="<?php echo htmlentities((isset($row['href']) && ($row['href'] !== '')?$row['href']:'')); ?>">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">选择图标</label>
            <div class="layui-input-block">
                <input type="text" id="icon" name="icon" lay-filter="icon" class="hide" value="<?php echo htmlentities((isset($row['icon']) && ($row['icon'] !== '')?$row['icon']:'')); ?>">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">菜单排序</label>
            <div class="layui-input-block">
                <input type="number" name="sort" lay-reqtext="菜单排序不能为空" placeholder="请输入菜单排序" value="<?php echo htmlentities((isset($row['sort']) && ($row['sort'] !== '')?$row['sort']:'')); ?>" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">备注信息</label>
            <div class="layui-input-block">
                <textarea name="remark" class="layui-textarea"  placeholder="请输入备注信息"><?php echo htmlentities((isset($row['remark']) && ($row['remark'] !== '')?$row['remark']:'')); ?></textarea>
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