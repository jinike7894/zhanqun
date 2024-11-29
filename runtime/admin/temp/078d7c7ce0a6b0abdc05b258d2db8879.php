<?php /*a:2:{s:48:"C:\wwwroot\zhanqun\view\admin\index\welcome.html";i:1732801139;s:49:"C:\wwwroot\zhanqun\view\admin\layout\default.html";i:1732110801;}*/ ?>
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <title></title>
    <link rel="stylesheet" href="/static/admin/css/welcome.css?v=<?php echo time(); ?>" media="all">
</head>
<style>
    .liBox{
     display: flex;
     justify-content: space-around;
}
.leftBox{
    display: flex;
    flex-direction: column;
    align-items: center;
}

.liBox{
    width: 200px;
    border-radius: 10px;
    border: 1px solid #9747FF;
    padding: 10px;
}
.ipBtn{
    width: 80px;
    text-align: center;
    margin: 0 10px 10px 10px;
    padding: 5px 10px;
    background: #F4EDFA;
    border: 1px solid #F2E7FC;
    border-radius: 5px;
}
.contentBox{
    height: 500px;
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 0.3fr));
    gap: 50px;
    justify-items: center;
    align-items: center;
}
.marginBottom{
    margin-bottom: 10px;
}
</style>
<body>
    <div id="page">
        <div class="contentBox">
            <?php if(is_array($siteData) || $siteData instanceof \think\Collection || $siteData instanceof \think\Paginator): $i = 0; $__LIST__ = $siteData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <div class="liBox">
            
                <div class="leftBox">
                    <div class="zhanName"><?php echo htmlentities($item['name']); ?></div>
                </div>
                <div class="rightBox">
                    <div class="ipBtn marginBottom">ip:<?php echo htmlentities($item['ip']); ?></div>
                    <div class="ipBtn">点击数:<?php echo htmlentities($item['click']); ?></div>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    
    </div>
</body>
<script>


</script>

</html>
</body>
</html>