<?php /*a:2:{s:56:"C:\wwwroot\zhanqun\view\admin\website\site\settings.html";i:1732359726;s:49:"C:\wwwroot\zhanqun\view\admin\layout\default.html";i:1732110801;}*/ ?>
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
    <script type="text/javascript" src="/static/js/jquery-2.2.4.min.js"></script>
    <link rel="stylesheet" href="/static/admin/css/style.css">
</head>

<body>
    <div id="page">
        <!-- 九宫格图片 -->
      <?php if(is_array($ptype) || $ptype instanceof \think\Collection || $ptype instanceof \think\Paginator): $i = 0; $__LIST__ = $ptype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <div class="jggImg">
            <div class="hr"></div>
            <div class="jggImg_nameBox">
                <div class="jggImg_name"><?php echo htmlentities($item['title']); ?></div>
                <div class="jggImg_zkBtn" style="display: none;" data-id="<?php echo htmlentities($item['id']); ?>">展开</div>
                <div class="jggImg_sqBtn" data-id="<?php echo htmlentities($item['id']); ?>">收起</div>
            </div>
            <table class="jggContent" data-id="<?php echo htmlentities($item['id']); ?>">
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
                <?php if(is_array($item['ad']) || $item['ad'] instanceof \think\Collection || $item['ad'] instanceof \think\Paginator): $i = 0; $__LIST__ = $item['ad'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?>
                <tr>
                    <th scope="col"><?php echo htmlentities($items['id']); ?></th>
                    <th scope="col"><?php echo htmlentities(getAdCate($items['cid'])); ?></th>
                    <th scope="col"><?php echo htmlentities($item['title']); ?></th>
                    <th scope="col"><?php echo htmlentities($items['sort']); ?></th>
                    <th scope="col"><?php echo htmlentities($items['name']); ?></th>
                    <th scope="col"><?php echo htmlentities($items['k_name']); ?></th>
                    <th scope="col"><img src="<?php echo htmlentities($items['img']); ?>" style="width: 30px;height: 30px;"></th>
                    <th scope="col">
                        <?php if($items['url_type']==1): ?>
                        站内跳转
                        <?php else: ?>
                        站外跳转
                        <?php endif; ?>
                    </th>
                    <th scope="col">
                        <?php if($items['url_type']==1): ?>
                        <select class="url" data-id="<?php echo htmlentities($items['id']); ?>">
                            <option value="0">请选择站点</option>
                        <?php if(is_array($site) || $site instanceof \think\Collection || $site instanceof \think\Paginator): $i = 0; $__LIST__ = $site;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$site_item): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo htmlentities($site_item['id']); ?>" 
                            <?php if($site_item['id']==$items['url_site_id']): ?>
                            selected 
                            <?php endif; ?>
                            >
                                <?php echo htmlentities($site_item['name']); ?>
                            </option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                        <?php else: ?>
                          <?php echo htmlentities($items['androidurl']); ?>
                        <?php endif; ?>
                    </th>
                    <th scope="col">
                        <select class="switch" data-id="<?php echo htmlentities($items['id']); ?>">
                           
                            <option value="1" <?php if($items['switch']==1): ?>selected<?php endif; ?>>开启</option>
                            <option value="0"
                            <?php if($items['switch']==0): ?>selected<?php endif; ?> >关闭</option>
                        </select>
                    </th>
                </tr>
               <?php endforeach; endif; else: echo "" ;endif; ?>
            </table>

        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      
        <!-- <div class="btnBox">
            <div class="cancel">
                取消
            </div>
            <div class="saveBtn">
                修改
            </div>

        </div> -->

    </div>




    <script>
        //选择站点
        $(document).ready(function () { 
            // 监听具有 class 'url' 的 select 元素的 change 事件
             $('select.url').change(function () { 
                 var data={};
                 data.select =$(this).val(); 
                // 广告id 
                 data.pid = $(this).data('id'); 
                //站点id
                 data.site_id ='<?php echo htmlentities($site_id); ?>';
                
                 $.post("/gladmin/website.site/selectsite",data,function(res){
                    layer.msg(res.msg);
                 });
                }); 
            });
            //选择开关
            $('select.switch').change(function () { 
                 var data={};
                 data.select =$(this).val(); 
                // 广告id 
                 data.pid = $(this).data('id'); 
                //站点id
                 data.site_id ='<?php echo htmlentities($site_id); ?>';
                 console.log(data)
                 $.post("/gladmin/website.site/selectswitch",data,function(res){
                   layer.msg(res.msg);
                 });
                }); 
       
        // 九宫格图片
        $(document).ready(function () {
            $('.jggImg_zkBtn').click(function () {
                var id = $(this).data('id'); 
                $(this).hide(); $('.jggImg_sqBtn[data-id="' + id + '"]').show();
                 $('.jggContent[data-id="' + id + '"]').show();
            });
        });
        $(document).ready(function () {
            $('.jggImg_sqBtn').click(function () {
                var id = $(this).data('id'); 
                $(this).hide(); 
                $('.jggImg_zkBtn[data-id="' + id + '"]').show();
                 $('.jggContent[data-id="' + id + '"]').hide();
            });
        });
       


    </script>
</body>

</html>
</body>
</html>