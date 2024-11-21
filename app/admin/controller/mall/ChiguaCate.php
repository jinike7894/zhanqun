<?php

namespace app\admin\controller\mall;

use app\common\controller\AdminController;
use EasyAdmin\annotation\ControllerAnnotation;
use EasyAdmin\annotation\NodeAnotation;
use think\App;
use think\facade\Db;
/**
 * @ControllerAnnotation(title="mall_chigua_cate")
 */
class ChiguaCate extends AdminController
{

    use \app\admin\traits\Curd;

    public function __construct(App $app)
    {
        parent::__construct($app);

        $this->model = new \app\admin\model\MallChiguaCate();
        
    }
    public function getcategory(){
        $res=Db::name("mall_chigua_cate")->select();
        return json(["code"=>1,'msg'=>"","data"=>$res,"url"=>"","wait"=>0]);
    }
    
}