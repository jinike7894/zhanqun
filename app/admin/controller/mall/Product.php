<?php
namespace app\admin\controller\mall;


use app\common\model\MallProducts;
use app\admin\traits\Curd;
use app\common\controller\AdminController;
use EasyAdmin\annotation\ControllerAnnotation;
use EasyAdmin\annotation\NodeAnotation;
use think\App;

/**
 * Class Product
 * @package app\admin\controller\mall
 * @ControllerAnnotation(title="商城产品管理")
 */
class Product extends AdminController
{

    use Curd;

    protected $relationSearch = true;

    public function __construct(App $app)
    {
        parent::__construct($app);
        $this->model = new MallProducts();
    }

}