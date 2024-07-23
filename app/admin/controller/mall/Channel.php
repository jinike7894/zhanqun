<?php
namespace app\admin\controller\mall;

use app\common\model\Dhclick;
use app\common\model\Qdtongji;
use app\common\model\Channelcode;
use app\common\model\Tongji;
use app\admin\traits\Curd;
use app\common\controller\AdminController;
use EasyAdmin\annotation\ControllerAnnotation;
use EasyAdmin\annotation\NodeAnotation;
use think\App;

/**
 * Class Channel
 * @package app\admin\controller\mall
 * @ControllerAnnotation(title="渠道报表")
 */
class Channel extends AdminController
{

    use Curd;

    protected $relationSearch = true;

    public function __construct(App $app)
    {
        parent::__construct($app);
        $this->model = new Qdtongji();
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
            if(empty($where))
            {
                $where[] = ['date', '=', date('Y-m-d')];
            }
            $count = $this->model->where($where)->cache(600)->count();
            $list = $this->model->where($where)->cache(600)->page($page, $limit)->order($this->sort)->select();
            $this->Channelcode = new Channelcode();
            $this->Tongji = new Tongji();
            // 获取按钮产品  按钮分类ID 后台添加后为16,TODO 每个平台不一样
            $this->Products = new \app\common\model\Products(); // 排除按钮商品的点击数
            $buttonPros = $this->Products->where(['pid' => 16])->column('id');
            for($i=0;$i<count($list);$i++) {
                $channelCode = $this->Channelcode->getByChannelcode($list[$i]['channelCode']);
                $tongjiMap = [
                    ['channelCode', '=', $list[$i]['channelCode']],
                    ['date', '=', $list[$i]['date']],
                    ['pid', 'not in', $buttonPros],
                ];
                $list[$i]['clicks'] = $this->Tongji->where($tongjiMap)->sum('clicks');
                $list[$i]['downfinish'] = $this->Tongji->where($tongjiMap)->sum('downfinish');
                $list[$i]['estimate'] = @ceil($list[$i]['clicks'] * $channelCode['coefficient'] / $channelCode['price']);
                $list[$i]['ratio'] =$channelCode['ratio'];
                $list[$i]['autoc'] =$channelCode['autoc'];
                $list[$i]['remark'] =$channelCode['remark'];
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
     * @NodeAnotation(title="报表汇总")
     */
	public function report()
    {
        if ($this->request->isAjax()) {
            if (input('selectFields')) {
                return $this->selectList();
            }
            list($page, $limit, $where) = $this->buildTableParames4();
            if(empty($where)) {
                $where[] = ['date', '=', date('Y-m-d')];
            }
            $count = $this->model->where($where)->cache(600)->count();
            $totalSjNum = $this->model->where($where)->sum('sj_num');
            $totalNum = $this->model->where($where)->sum('sum');
            $list = $this->model->where($where)->cache(600)->page($page, $limit)->order($this->sort)->select()->toArray();
            $this->Channelcode = new Channelcode();
            $this->Tongji = new Tongji();
            $this->Dhclick = new Dhclick();
            $channelCodes = array_column($list, 'channelCode');
            $channels = $this->Channelcode->whereIn('channelCode', $channelCodes)->select()->toArray();
            $channels = array_column($channels, null, 'channelCode');
            // 获取按钮产品  按钮分类ID 后台添加后为16,TODO 每个平台不一样
            $this->Products = new \app\common\model\Products(); // 排除按钮商品的点击数
            $buttonPros = $this->Products->where(['pid' => 16])->column('id');
            $totalMap = $where;
            $totalMap[] = ['pid', 'not in', $buttonPros];
            $tongjiTotal = Tongji::field('sum(shows) as total_shows,sum(clicks) as total_clicks,sum(downfinish) as total_downfinish')->where($totalMap)->find();
            
            //先查到有哪些类别id
            $bofangqi_pids = $this->Products->where(['cid' => 1])->column('id');
            $zhibo_pids = $this->Products->where(['cid' => 3])->column('id');
            $paotai_pids = $this->Products->where(['cid' => 4])->column('id');
             $bc_pids = $this->Products->where(['cid' => 6])->column('id');
            //通过类别id 找products表 拿到该类别的 pid
            // 通过tongji表的 pid 计算数量
            foreach ($list as $i => $item) {
                    
                //$channelCode = $this->Channelcode->getByChannelcode($list[$i]['channelCode']);
                $channelCode = $item['channelCode'];
                $tongjis = Tongji::field('sum(shows) as total_shows,sum(clicks) as total_clicks,sum(downfinish) as total_downfinish')
                    ->where([['channelCode', '=', $channelCode],['date', '=', $item['date']],['pid', 'not in', $buttonPros]])
                    ->group('channelCode,date')->find();
                    
                $bofangqi_tongjis = Tongji::field('sum(clicks) as bofangqi_clicks')
                    ->where([['channelCode', '=', $channelCode],['date', '=', $item['date']],['pid', 'in', $bofangqi_pids]])
                    ->group('channelCode,date')->find();
                    
                $zhibo_tongjis = Tongji::field('sum(clicks) as zhibo_clicks')
                    ->where([['channelCode', '=', $channelCode],['date', '=', $item['date']],['pid', 'in', $zhibo_pids]])
                    ->group('channelCode,date')->find();
                    
                $paotai_tongjis = Tongji::field('sum(clicks) as paotai_clicks')
                    ->where([['channelCode', '=', $channelCode],['date', '=', $item['date']],['pid', 'in', $paotai_pids]])
                    ->group('channelCode,date')->find();
                    
                $bc_tongjis = Tongji::field('sum(clicks) as bc_clicks')
                    ->where([['channelCode', '=', $channelCode],['date', '=', $item['date']],['pid', 'in', $bc_pids]])
                    ->group('channelCode,date')->find();

                $list[$i]['dh_clicks'] = 0;
                $beizhu = $channels[$channelCode]['remark']??'';
                if($beizhu == '北方导航点击数据' || $beizhu == '南方导航点击数据' || $beizhu == '东方导航点击数据' || $beizhu == '妖姬导航点击数据' || $beizhu == '高德导航点击数据' || $beizhu == '八万导航点击数据' || $beizhu == '一同导航点击数据' || $beizhu == '夜行者导航点击数据' || $beizhu == '夜生活导航点击数据' || $beizhu == '金手指导航点击数据' || $beizhu == '百合导航点击数据'){
                    $dhClick = $this->Dhclick->getNumByName($beizhu);
                    $list[$i]['dh_clicks'] = $dhClick['num']??0;
                }
                    
                $list[$i]['bofangqi_clicks'] = $bofangqi_tongjis['bofangqi_clicks']??0;
                $list[$i]['zhibo_clicks'] = $zhibo_tongjis['zhibo_clicks']??0;
                $list[$i]['paotai_clicks'] = $paotai_tongjis['paotai_clicks']??0;
                $list[$i]['bc_clicks'] = $bc_tongjis['bc_clicks']??0;
                    
                $list[$i]['shows'] = $tongjis['total_shows']??0; //$this->Tongji->where(array())->sum('shows');
                $list[$i]['clicks'] = $tongjis['total_clicks']??0; //$this->Tongji->where(array('channelCode'=>$channelCode,'date'=>$item['date']))->sum('clicks');
                $list[$i]['downfinish'] = $tongjis['total_downfinish']??0; //$this->Tongji->where(array('channelCode'=>$channelCode,'date'=>$item['date']))->sum('downfinish');
                //$list[$i]['estimate'] = ($channels[$channelCode]['price'] ?? 0) > 0 ? @ceil($item['clicks'] * ($channels[$channels]['coefficient'] ?? 0) / $channels[$channelCode]['price']) : 0;
                //$list[$i]['ratio'] =$channels[$channelCode]['ratio']??0;
                //$list[$i]['autoc'] =$channels[$channelCode]['autoc']??0;
                $list[$i]['remark'] =$channels[$channelCode]['remark']??'';
                $list[$i]['price'] =$channels[$channelCode]['price']??0;
                // 投入成本
                $list[$i]['trcb'] = @ceil(100*$item['sum'] * $channels[$channelCode]['price'])  / 100;
                // 实际单价
                $list[$i]['sjdj'] = ($item['sj_num']??0) > 0 ? @ceil(100*$item['sum'] * $list[$i]['price'] / $item['sj_num']) / 100 : 0;
                // 点击成本
                $list[$i]['djcb'] = $list[$i]['clicks'] > 0 ? @ceil(100*$item['sum'] * $list[$i]['price'] / $list[$i]['clicks']) / 100 : 0;
                // 展示比
                $list[$i]['zsb'] = ($item['sj_num']??0) > 0 ? @ceil(100*$list[$i]['shows']  / $item['sj_num']) / 100 : 0;
                // 点击比
                $list[$i]['djb'] = ($item['sj_num']??0) > 0 ? @ceil(100*$list[$i]['clicks']  / $item['sj_num']) / 100 : 0;
                // 点击比
                $list[$i]['xzb'] = ($item['sj_num']??0) > 0 ? @ceil(100*$list[$i]['downfinish']  / $item['sj_num']) / 100 : 0;
               
                $list[$i]['bofangqi_djb'] = ($list[$i]['clicks']??0) > 0 ? @ceil(100*$list[$i]['bofangqi_clicks']  / $list[$i]['clicks']) ."%" : 0 ;
                $list[$i]['zhibo_djb'] = ($list[$i]['clicks']??0) > 0 ? @ceil(100*$list[$i]['zhibo_clicks']  / $list[$i]['clicks']) ."%" : 0 ;
                $list[$i]['paotai_djb'] = ($list[$i]['clicks']??0) > 0 ? @ceil(100*$list[$i]['paotai_clicks']  / $list[$i]['clicks'])  ."%" : 0 ;
                $list[$i]['bc_djb'] = ($list[$i]['clicks']??0) > 0 ? @ceil(100*$list[$i]['bc_clicks']  / $list[$i]['clicks']) ."%" : 0 ;
            }
            $data = [
                'code'  => 0,
                'msg'   => '',
                'count' => $count,
                'data'  => $list,
                'totalRow' => [
                    'sj_num' => $totalSjNum,
                    'sum' => $totalNum,
                    'shows' => $tongjiTotal['total_shows'] ?? 0,
                    'clicks' => $tongjiTotal['total_clicks'] ?? 0,
                    'downfinish' => $tongjiTotal['total_downfinish'] ?? 0,
                ],
            ];
            return json($data);
        }
        return $this->fetch();
    }

}