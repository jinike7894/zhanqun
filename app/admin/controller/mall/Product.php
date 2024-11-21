<?php


namespace app\admin\controller\mall;


use app\common\model\Products;
use app\common\model\Ptype;
use app\common\model\Pcategory;
use app\admin\traits\Curd;
use app\common\controller\AdminController;
use EasyAdmin\annotation\ControllerAnnotation;
use EasyAdmin\annotation\NodeAnotation;
use think\App;

/**
 * Class Goods
 * @package app\admin\controller\mall
 * @ControllerAnnotation(title="商品管理")
 */
class Product extends AdminController
{

    use Curd;

    protected $relationSearch = true;

    public function __construct(App $app)
    {
        parent::__construct($app);
        $this->model = new Products();
    }
    /**
     * @NodeAnotation(title="列表")
     */
    public function index()
    {
        if ($this->request->isAjax()) {
            if (input('selectFields')) {
                return $this->selectList();
            }
            list($page, $limit, $where) = $this->buildTableParames();
            $count = $this->model
                ->where($where)
                ->count();
            $list = $this->model
                ->where($where)
                ->page($page, $limit)
                ->order('status', 'desc')
                ->order($this->sort)
                ->select();
            $ptype = new Ptype();
            $pcate = new Pcategory();
            for($i=0;$i<count($list);$i++){
                $list[$i]['title'] = $ptype->where(array('id'=>$list[$i]['pid']))->value('title') ?: '';
                $list[$i]['cate_title'] = $pcate->where(array('id'=>$list[$i]['cid']))->value('title') ?: '';
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
   public function geturltype(){
    $data = [
        'code'  => 0,
        'msg'   => '',
        'count' => 0,
        'data'  => [["id"=>0,"name"=>"站外跳转"],["id"=>1,"站内跳转"]],
    ];
    return json($data);
   }
    /**
     * @NodeAnotation(title="批量修改")
     */
    public function batchEdit($id)
    {
        if ($this->request->isPost()) {
            $data = [];
            if ($k_name = input('post.k_name')) {
                $data['k_name'] = $k_name;
            }
            if ($androidurl = input('post.androidurl')) {
                $data['androidurl'] = $androidurl;
            }
            if ($iosurl = input('post.iosurl')) {
                $data['iosurl'] = $iosurl;
            }
            $status = input('post.status');
            if ($status < 3 && $status >=0 ) {
                $data['status'] = $status;
            }
            $save = '';
            if ($data) {
                try {
                    $save = $this->model->whereIn('id', $id)->update($data);
                } catch (\Exception $e) {
                    $this->error('保存失败:'.$e->getMessage());
                }
            }

            $save ? $this->success('保存成功') : $this->error('保存失败');
        }
        return $this->fetch();
    }

    /**
     * @NodeAnotation(title="复制商品")
     */
    public function copy($id)
    {
        $row = $this->model->find($id);
        empty($row) && $this->error('数据不存在');
        if ($this->request->isPost()) {
            $post = $this->request->post();
            $rule = [];
            $this->validate($post, $rule);
            try {
                $save = $this->model->save($post);
            } catch (\Exception $e) {
                $this->error('复制失败:'.$e->getMessage());
            }
            $save ? $this->success('复制成功') : $this->error('复制失败');
        }
        $this->assign('row', $row);
        return $this->fetch();
    }
    public function add(){
        if ($this->request->isPost()) {
         
            $data=[
                "pid"=>$_POST["pid"],
                "cid"=>$_POST["cid"],
                "name"=>$_POST["name"],
                "k_name"=>$_POST["k_name"],
                "sort"=>$_POST["sort"],
                "img"=>$_POST["img"],
                "is_best"=>$_POST["is_best"],
                "url_type"=>$_POST["url_type"],
                "androidurl"=>$_POST["androidurl"],
            ];
         
            $save = $this->model->save($data);
            $save ? $this->success('保存成功') : $this->error('保存失败');
        }
        return $this->fetch();
    }

}