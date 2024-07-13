<?php
namespace app\admin\controller\mall;

use app\common\model\Qdtongji;
use app\common\model\Channels;
use app\common\model\Tongji;
use app\common\model\Products;
use app\admin\traits\Curd;
use app\common\controller\AdminController;
use EasyAdmin\annotation\ControllerAnnotation;
use EasyAdmin\annotation\NodeAnotation;
use think\App;

/**
 * Class Goods
 * @package app\admin\controller\data
 * @ControllerAnnotation(title="渠道汇总")
 */
class Clicks extends AdminController
{

    use Curd;

    protected $relationSearch = true;

    public function __construct(App $app)
    {
        parent::__construct($app);
        $this->model = new Channels();
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
            list($page, $limit, $where) = $this->buildTableParames4();
            if(empty($where)) {
				$where[] = ['date','=',date('Y-m-d')];
			}
            // 获取按钮产品  按钮分类ID 后台添加后为16,TODO 每个平台不一样
            $this->Products = new \app\common\model\Products(); // 排除按钮商品的点击数
            $buttonPros = $this->Products->where(['pid' => 16])->column('id');
            $where[] = ['pid', 'not in', $buttonPros];
            $count = Tongji::where($where)->group('channelCode')->count();
            $list = Tongji::field('id,channelCode,sum(shows) as total_shows,sum(clicks) as total_clicks,sum(downfinish) as total_downfinish,date')->where($where)->group('channelCode,date')->select();
            for($i=0;$i<count($list);$i++) {
                $qdTongji = Qdtongji::field('sj_num,sum')->where(['channelCode'=>$list[$i]['channelCode'],'date'=>$list[$i]['date']])->find();
                $list[$i]['sj_num'] = $qdTongji['sj_num'] ?? 0;
                $list[$i]['ratio'] = $list[$i]['total_clicks'] > 0 ? @round($list[$i]['total_downfinish']/$list[$i]['total_clicks'],2)  : '0';
                $list[$i]['ratio1'] = $list[$i]['sj_num'] > 0 ? @round($list[$i]['total_clicks']/$list[$i]['sj_num'],2)  : '0';
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
     * @NodeAnotation(title="查看")
     */
    public function show()
    {
        if ($this->request->isAjax()) {
            
            
			$channel = input('channelCode', 1);
			$date = input('date', date('Y-m-d'));
			$where = [['channelCode', '=', $channel], ['date', '=', $date]];
			
            //$count = Tongji::where($where)->group('channelCode')->count();
            // 获取按钮产品  按钮分类ID 后台添加后为16,TODO 每个平台不一样
            $this->Products = new \app\common\model\Products(); // 排除按钮商品的点击数
            $buttonPros = $this->Products->where(['pid' => 16])->column('id');
            $where[] = ['pid', 'not in', $buttonPros];
            $list = Tongji::field('id,channelCode,sum(shows) as total_shows,sum(clicks) as total_clicks,sum(downfinish) as total_downfinish,date,pid')->where($where)->group('pid')->select()->toArray();
            $pids = array_column($list, 'pid');
    	    $products = Products::field('id,name,k_name')->whereIn('id', $pids)->select()->toArray();
    	    $products = array_column($products, null, 'id');
            for($i=0;$i<count($list);$i++){
                $list[$i]['ratio'] = $list[$i]['total_clicks'] > 0 ? @round($list[$i]['total_downfinish']/$list[$i]['total_clicks'],2)  : '0';
                $list[$i]['ratio1'] = $list[$i]['total_shows'] > 0 ? @round($list[$i]['total_clicks']/$list[$i]['total_shows'],2)  : '0';
                $list[$i]['pro_name'] = $products[$list[$i]['pid']]['name'] ?? '';
                $list[$i]['k_pro_name'] = $products[$list[$i]['pid']]['k_name'] ?? '';
            }
            $count = count($list);
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
}