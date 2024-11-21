<?php

namespace app\admin\controller\website;

use app\common\controller\AdminController;
use EasyAdmin\annotation\ControllerAnnotation;
use EasyAdmin\annotation\NodeAnotation;
use think\App;
use think\facade\Db;

/**
 * @ControllerAnnotation(title="site")
 */
class Site extends AdminController
{

    use \app\admin\traits\Curd;

    public function __construct(App $app)
    {
        parent::__construct($app);

        $this->model = new \app\admin\model\Site();
       

    }
    public function index()
    {
        if ($this->request->isAjax()) {
            if (input('selectFields')) {
                return $this->selectList();
            }
            $cate = new \app\admin\model\SiteCategory();
            $data = $cate->field("id,name")->select();
            $count = $this->model->count();
            $list = $this->model->order($this->sort)->select();
            foreach($list as $k=>$v){
                foreach($data as $dk=>$dv){
                        if($v["type"]==$dv["id"]){
                            $list[$k]["type"]= $dv["name"];
                        }
                }
            }
            $data = [
                'code'  => 0,
                'msg'   => '',
                'count' => $count,
                'data'  => $list,
            ];
            return json($data);
        }
        return $this->fetch();
    }
    // public function index(){
    //     var_dump(1111);die;
    // }
 public function getcategory()
    {
        $cate = new \app\admin\model\Site();
        $data = $cate->field("id,name")->select();
  
        // $pidMenuList = $this->model->getPidMenuList();
        // $this->assign('pidMenuList', $pidMenuList);
        return json(["code"=>1,'msg'=>"","data"=>$data,"url"=>"","wait"=>0]);
    }
    public function add(){
        if ($this->request->isPost()) {
      
            $post = $this->request->post();
            $data=[
                "name"=>$post["name"],
                "domain"=>$post["domain"],
                "type"=>$post["type"],
                "template"=>$post["template"],
                "icon"=>$post["icon"],
                "create_time"=>time(),
            ];
            $save = Db::name("site")->save($data);
        if ($save) {
            $this->success('保存成功');
        } else {
            $this->error('保存失败');
         }
        }
        return $this->fetch();
    }
    //站点配置
    public function settings(){
        $id=$_GET["id"];
        //查询广告得总类型
        Db::name("ptype")->where()->select();
        return $this->fetch();
    }
}