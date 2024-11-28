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
class Proclickshow extends AdminController
{

    use \app\admin\traits\Curd;

    public function __construct(App $app)
    {
        parent::__construct($app);

        $this->model = new \app\admin\model\MallProClick();
    }
    public function index()
    {

        if ($this->request->isAjax()) {
            $param = $_GET;
            $res = Db::name("mall_pro_click")->where(["id" => $param["id"]])->find();
            $where = [
                "date" => $param["date"],
                "site" => $res["site_id"],
            ];


            //查询该站点分类下的所有广告  
            $adCount = Db::name("products")->where([ "status" => 1])->count();
            $adRes = Db::name("products")->where([ "status" => 1])->select()->toArray();
      
            $proArray = [];
            foreach ($adRes as $k => $v) {
                $proArray[] = $v["id"];
            }
            //查询该站点下的广告的点击次数
            $tongji = new Tongji();
            $click = $tongji->whereIn("pid", $proArray)->where(["date" => $param["date"],"site_id"=>$res["site_id"]])->select()->toArray();
            //拼接参数 返回 id name img date channelCode clicks
            foreach ($click as $ck => $cv) {
                foreach ($adRes as $ak => $av) {
                    if ($cv["pid"] == $av["id"]) {
                        $adRes[$ak]["sum_click"] = $cv["clicks"];
                        // $adRes[$ak]["channelCode"]=$cv["channelCode"];
                    }
                }
            }
            $returnData = [];
            foreach ($adRes as $rk => $rv) {

                $arr = [
                    "id" => $rv["id"],
                    "name" => $rv["name"],
                    "img" => $rv["img"],
                    "date" => $param["date"],
                    // "channelCode"=>$rv["channelCode"]?,
    
                ];
                if( $rv["url_type"]==0){
                    $arr["url_type"] = "站外";
                }else{
                    $arr["url_type"] = "站内";
                }
                if (isset($rv["sum_click"])) {
                    $arr["clicks"] = $rv["sum_click"];
                } else {
                    $arr["clicks"] = 0;
                }
                $returnData[] = $arr;
            }
            $data = [
                'code'  => 0,
                'msg'   => '',
                'count' => $adCount,
                'data'  => $returnData,
            ];
            return json($data);
        }
        return $this->fetch();
    }
}
