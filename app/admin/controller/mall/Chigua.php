<?php

namespace app\admin\controller\mall;

use app\common\controller\AdminController;
use EasyAdmin\annotation\ControllerAnnotation;
use EasyAdmin\annotation\NodeAnotation;
use think\App;
use think\facade\Db;

/**
 * @ControllerAnnotation(title="mall_chigua")
 */
class Chigua extends AdminController
{

    use \app\admin\traits\Curd;

    public function __construct(App $app)
    {
        parent::__construct($app);

        $this->model = new \app\admin\model\MallChigua();
        
    }
    public function add(){
        if ($this->request->isAjax()) {
            unset($_POST["file"]);
            $data=$_POST;

            $res=Db::name("mall_chigua")->save($data);
            $data = [
                'code'  => 1,
                'msg'   => '保存成功',
                'data'  => [],
            ];
            return json($data);
        }
        return $this->fetch();
    }
    public function edit($id){
        $row = $this->model->find($id);
        if ($this->request->isAjax()) {
            unset($_POST["file"]);
            $data=[
                "title"=>$_POST["title"],
                "contents"=>$_POST["contents"],
                "sort"=>$_POST["sort"],
                "cate_id"=>$_POST["cate_id"],
                "cover"=>$_POST["cover"],
       
            ];

            $res=Db::name("mall_chigua")->where("id",$id)->update($data);
            $data = [
                'code'  => 1,
                'msg'   => '修改成功',
                'data'  => [],
            ];
            return json($data);
        }
        $this->assign('row', $row);
        return $this->fetch();
    }
    
}