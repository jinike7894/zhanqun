<?php
namespace app\admin\controller\mall;

use app\common\model\Pgathers;
use app\common\model\Products;
use app\admin\traits\Curd;
use app\common\controller\AdminController;
use EasyAdmin\annotation\ControllerAnnotation;
use EasyAdmin\annotation\NodeAnotation;
use think\App;

/**
 * Class Pgather
 * @package app\admin\controller\mall
 * @ControllerAnnotation(title="产品汇总")
 */
class Pgather extends AdminController
{

    use Curd;

    protected $relationSearch = true;

    public function __construct(App $app)
    {
        parent::__construct($app);
        $this->model = new Pgathers();
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
            list($page, $limit, $where, $cxdate,$channelCode) = $this->buildTableParames1();
            //$count = Products::where($where)->count();
            if(empty($cxdate)){
				$cxdate[] = ['date','=',date('Y-m-d')];
			}
            $list = $this->model->getlist($where,$cxdate,$channelCode);
            $totalShows = 0;
            $totalClicks = 0;
            $totalDownfinish = 0;
            foreach ($list as $k => $item) { // 因为没有分页，总计可以循环求和即可
                $totalShows += $item['shows'];
                $totalClicks += $item['clicks'];
                $totalDownfinish += $item['downfinish'];
            }
            $data = [
                'code'  => 0,
                'msg'   => '',
                'count' => count($list),
                'data'  => $list,
                'totalRow' => [
                    'shows' => $totalShows,
                    'clicks' => $totalClicks,
                    'downfinish' => $totalDownfinish,
                ],
            ];
            return json($data);
        }
        return $this->fetch();
    }

}