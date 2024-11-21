<?php

namespace app\admin\controller\website;

use app\common\controller\AdminController;
use EasyAdmin\annotation\ControllerAnnotation;
use EasyAdmin\annotation\NodeAnotation;
use think\App;

/**
 * @ControllerAnnotation(title="site_category")
 */
class Category extends AdminController
{

    use \app\admin\traits\Curd;

    public function __construct(App $app)
    {
        parent::__construct($app);

        $this->model = new \app\admin\model\SiteCategory();
        
    }
    public function getcategory()
    {
        $cate = new \app\admin\model\SiteCategory();
        $data = $cate->field("id,name")->select();
  
        // $pidMenuList = $this->model->getPidMenuList();
        // $this->assign('pidMenuList', $pidMenuList);
        return json(["code"=>1,'msg'=>"","data"=>$data,"url"=>"","wait"=>0]);
    }
    
}