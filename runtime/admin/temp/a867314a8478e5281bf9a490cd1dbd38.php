<?php /*a:2:{s:51:"C:\wwwroot\zhanqun\view\admin\mall\comics\edit.html";i:1731059836;s:49:"C:\wwwroot\zhanqun\view\admin\layout\default.html";i:1730802670;}*/ ?>
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
            <label class="layui-form-label">分类ID</label>
            <div class="layui-input-block">
                <input type="text" name="cate_id" class="layui-input"  placeholder="请输入分类ID" value="<?php echo htmlentities((isset($row['cate_id']) && ($row['cate_id'] !== '')?$row['cate_id']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">is_recommend</label>
            <div class="layui-input-block">
                <input type="text" name="is_recommend" class="layui-input"  placeholder="请输入is_recommend" value="<?php echo htmlentities((isset($row['is_recommend']) && ($row['is_recommend'] !== '')?$row['is_recommend']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">标题</label>
            <div class="layui-input-block">
                <input type="text" name="title" class="layui-input" lay-verify="required" placeholder="请输入标题" value="<?php echo htmlentities((isset($row['title']) && ($row['title'] !== '')?$row['title']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">描述</label>
            <div class="layui-input-block">
                <input type="text" name="description" class="layui-input"  placeholder="请输入描述" value="<?php echo htmlentities((isset($row['description']) && ($row['description'] !== '')?$row['description']:'')); ?>">
            </div>
        </div>
        <!-- <div class="layui-form-item">
            <label class="layui-form-label">原始图片</label>
            <div class="layui-input-block">
                <input type="text" name="pic" class="layui-input"  placeholder="请输入原始图片" value="<?php echo htmlentities((isset($row['pic']) && ($row['pic'] !== '')?$row['pic']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">加密图片</label>
            <div class="layui-input-block">
                <input type="text" name="enpic" class="layui-input"  placeholder="请输入加密图片" value="<?php echo htmlentities((isset($row['enpic']) && ($row['enpic'] !== '')?$row['enpic']:'')); ?>">
            </div>
        </div> -->
        <div class="layui-form-item">
            <label class="layui-form-label">浏览量</label>
            <div class="layui-input-block">
                <input type="text" name="eye" class="layui-input"  placeholder="请输入浏览量" value="<?php echo htmlentities((isset($row['eye']) && ($row['eye'] !== '')?$row['eye']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">作者</label>
            <div class="layui-input-block">
                <input type="text" name="author" class="layui-input"  placeholder="请输入作者" value="<?php echo htmlentities((isset($row['author']) && ($row['author'] !== '')?$row['author']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">tags</label>
            <div class="layui-input-block">
                <input type="text" name="tags" class="layui-input"  placeholder="请输入tags" value="<?php echo htmlentities((isset($row['tags']) && ($row['tags'] !== '')?$row['tags']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">排序</label>
            <div class="layui-input-block">
                <input type="text" name="sort" class="layui-input"  placeholder="请输入排序" value="<?php echo htmlentities((isset($row['sort']) && ($row['sort'] !== '')?$row['sort']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">状态(1:禁用,2:启用)</label>
            <div class="layui-input-block">
                <input type="text" name="status" class="layui-input"  placeholder="请输入状态(1:禁用,2:启用)" value="<?php echo htmlentities((isset($row['status']) && ($row['status'] !== '')?$row['status']:'')); ?>">
            </div>
        </div>
        <!-- <div class="layui-form-item">
            <label class="layui-form-label">是否完结</label>
            <div class="layui-input-block">
                <input type="text" name="is_finish" class="layui-input" lay-verify="required" placeholder="请输入是否完结" value="<?php echo htmlentities((isset($row['is_finish']) && ($row['is_finish'] !== '')?$row['is_finish']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">人气</label>
            <div class="layui-input-block">
                <input type="text" name="renqi" class="layui-input" lay-verify="required" placeholder="请输入人气" value="<?php echo htmlentities((isset($row['renqi']) && ($row['renqi'] !== '')?$row['renqi']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">推荐</label>
            <div class="layui-input-block">
                <input type="text" name="tuijian" class="layui-input" lay-verify="required" placeholder="请输入推荐" value="<?php echo htmlentities((isset($row['tuijian']) && ($row['tuijian'] !== '')?$row['tuijian']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">收藏</label>
            <div class="layui-input-block">
                <input type="text" name="shoucang" class="layui-input" lay-verify="required" placeholder="请输入收藏" value="<?php echo htmlentities((isset($row['shoucang']) && ($row['shoucang'] !== '')?$row['shoucang']:'')); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">热搜</label>
            <div class="layui-input-block">
                <input type="text" name="resou" class="layui-input" lay-verify="required" placeholder="请输入热搜" value="<?php echo htmlentities((isset($row['resou']) && ($row['resou'] !== '')?$row['resou']:'')); ?>">
            </div>
        </div> -->
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">备注说明</label>
            <div class="layui-input-block">
                <textarea name="remark" class="layui-textarea"  placeholder="请输入备注说明"><?php echo (isset($row['remark']) && ($row['remark'] !== '')?$row['remark']:''); ?></textarea>
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