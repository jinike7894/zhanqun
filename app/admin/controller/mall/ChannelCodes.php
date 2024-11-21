<?php

namespace app\admin\controller\mall;

use app\common\model\Channelcode;
use app\admin\traits\Curd;
use app\admin\service\TriggerService;
use app\common\controller\AdminController;
use EasyAdmin\annotation\ControllerAnnotation;
use EasyAdmin\annotation\NodeAnotation;
use think\App;
use think\facade\Db;

/**
 * Class Admin
 * @package app\admin\controller\system
 * @ControllerAnnotation(title="商品分类管理")
 */
class ChannelCodes extends AdminController
{

    use Curd;

    protected $sort = [
        'sort' => 'desc',
        'id'   => 'asc',
    ];

    public function __construct(App $app)
    {
        parent::__construct($app);
        $this->model = new Channelcode();
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
            $count = $this->model->where($where)->count();
            $list = $this->model->where($where)->page($page, $limit)->select();
            if ($list) {
                $list = $list->toArray();
                $siteArray = [];
                $siteCategoryArray = [];
                foreach ($list as $k => $v) {
                    $siteArray[] = $v["site_id"];
                    $siteCategoryArray[] = $v["site_category_id"];
                }
                $siteData = Db::name("site")->whereIn("id", $siteArray)->select()->toArray();
                $sitecategoryData = Db::name("site_category")->whereIn("id", $siteCategoryArray)->select()->toArray();
                foreach ($list as $kd => $vd) {
                    foreach ($siteData as $ks => $vs) {
                        if ($vd["site_id"] == $vs["id"]) {
                            $list[$kd]["site"] = $vs["name"];
                        }
                    }
                    foreach ($sitecategoryData as $kcs => $vcs) {
                        if ($vd["site_category_id"] == $vcs["id"]) {
                            $list[$kd]["site_category"] = $vcs["name"];
                        }
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
    /**
     * @NodeAnotation(title="新增")
     */
    public function add()
    {
        if ($this->request->isPost()) {
            $post = $this->request->post();
            $rule = [];
            $this->validate($post, $rule);
            try {
                $post['uid'] = ($post['uid'] ?? 0) ?: 0;
                $save = $this->model->save($post);
            } catch (\Exception $e) {
                $this->error('保存失败:' . $e->getMessage());
            }
            $save ? $this->success('保存成功') : $this->error('保存失败');
        }
        $hours = ['00', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23'];
        $this->assign('hours', $hours);
        return $this->fetch();
    }

    /**
     * @NodeAnotation(title="编辑")
     */
    public function edit($id)
    {
        $row = $this->model->find($id);
        empty($row) && $this->error('数据不存在');
        if ($this->request->isPost()) {
            $post = $this->request->post();
            $rule = [];
            $this->validate($post, $rule);
            if (empty($post['password'])) {
                unset($post['password']);
            }
            try {
                $post['uid'] = ($post['uid'] ?? 0) ?: 0;
                $save = $row->save($post);
            } catch (\Exception $e) {
                $this->error('保存失败');
            }
            $save ? $this->success('保存成功') : $this->error('保存失败');
        }
        $hours = ['00', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23'];

        $this->assign('row', $row);
        $this->assign('hours', $hours);
        return $this->fetch();
    }
    /**
     * @NodeAnotation(title="删除")
     */
    public function delete($id)
    {
        $this->checkPostRequest();
        $row = $this->model->whereIn('id', $id)->select();
        empty($row) && $this->error('数据不存在');
        try {
            $save = $row->delete();
        } catch (\Exception $e) {
            $this->error('删除失败');
        }
        if ($save) {
            TriggerService::updateMenu();
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
}
