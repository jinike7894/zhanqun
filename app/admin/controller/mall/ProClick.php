<?php

namespace app\admin\controller\mall;
use app\common\model\Channelcode;
use app\common\model\Qdtongji;
use app\common\model\Tongji;
use app\common\controller\AdminController;
use EasyAdmin\annotation\ControllerAnnotation;
use EasyAdmin\annotation\NodeAnotation;
use think\App;
use think\facade\Db;
/**
 * @ControllerAnnotation(title="mall_pro_click")
 */
class ProClick extends AdminController
{

    use \app\admin\traits\Curd;

    public function __construct(App $app)
    {
        parent::__construct($app);

        $this->model = new \app\admin\model\MallProClick();
       
        
    }
    public function index(){
        if ($this->request->isAjax()) {
            if (input('selectFields')) {
                return $this->selectList();
            }
            list($page, $limit, $where) = $this->buildTableParames();
            if(empty($where)) {
				$where[] = ['date','=',date('Y-m-d')];
			}
            $count = $this->model
                ->where($where)
                ->count();
            $list = $this->model
                ->where($where)
                ->page($page, $limit)
                ->order($this->sort)
                ->select();
            if($list){
                $siteArray=[];
                $siteCateArray=[];
                foreach($list as $k=>$v){
                    $siteArray[]=$v["site_id"];
                    $siteCateArray[]=$v["site_category_id"];
                }
                $cate = new \app\admin\model\SiteCategory();
                $cateData=$cate->whereIn("id",$siteCateArray)->select();
                $site = new \app\admin\model\Site();
                $sitecateData=$site->whereIn("id",$siteArray)->select();
                foreach($list as $kl=>$vl){
                    foreach($cateData as $ck=>$cv){
                        if($vl["site_category_id"]==$cv["id"]){
                            $list[$kl]["site_category_id"]=$cv["name"];
                        }
                    }
                    foreach($sitecateData as $csk=>$csv){
                        if($vl["site_id"]==$csv["id"]){
                            $list[$kl]["site_id"]=$csv["name"];
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
    // public function show(){
    //     $param=$_GET;
    //     $res=Db::name("mall_pro_click")->where(["id"=>$param["id"],"date"])->find();
    //     //获取站点id
    //     $site_id=$res["site_id"];

    //     var_dump($res);die;
    //     return $this->fetch();
    // }
    public function show()
    {
        if ($this->request->isAjax()) {
            $param=$_GET;
            $res=Db::name("mall_pro_click")->where(["id"=>$param["id"],"date"])->find();
            $where=[
                "date"=>$param["date"],
                "site"=>$param["site"],
            ];


            $tongji=new Qdtongji();
            $tongjiqd=new Qdtongji();
            $count = $tongjiqd->where($where)->cache(600)->count();
            $totalSjNum = $tongjiqd->where($where)->sum('sj_num');
            $totalNum = $tongjiqd->where($where)->sum('sum');
            $list = $tongjiqd->where($where)->cache(600)->page($page, $limit)->order($this->sort)->select()->toArray();
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