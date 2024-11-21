<?php

namespace app\admin\controller\mall;

use app\common\controller\AdminController;
use EasyAdmin\annotation\ControllerAnnotation;
use EasyAdmin\annotation\NodeAnotation;
use think\App;
use think\facade\Db;

/**
 * @ControllerAnnotation(title="mall_img_cate")
 */
class ImgCate extends AdminController
{

    use \app\admin\traits\Curd;

    public function __construct(App $app)
    {
        parent::__construct($app);

        $this->model = new \app\admin\model\MallImgCate();
        
    }
    public function getcategory(){
        $res=Db::name("mall_img_cate")->where("status",1)->select();
        return json(["code"=>1,'msg'=>"","data"=>$res,"url"=>"","wait"=>0]);
    }
   
}