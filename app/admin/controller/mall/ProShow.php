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
class ProShow extends AdminController
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
            //查询该广告下， 各个站点的点击数据
            $param=$_GET;
            //查询站点广告下得点击次数， 搜索条件
            if (input('selectFields')) {
                return $this->selectList();
            }
            list($page, $limit, $where) = $this->buildTableParames();
            // var_dump($where);die;
            if($where){
                foreach($where as $k=>$v){
                    if($v[0]=="date"){
                    
                        $where[$k][2]=date("Y-m-d",$v[2]);
                    }
                }
            }else{
                $where[]=["date","=",date("Y-m-d")];
            }
            
            // if(isset($param["id"])){
            //     $where[]=["id"=>$param["id"]];
            // }
       
            //查询该站点分类下的所有广告  
            // $adCount = Db::name("products")->where(["pid" => $res["site_category_id"], "status" => 1])->count();
            // $adRes = Db::name("products")->where(["pid" => $res["site_category_id"], "status" => 1])->select()->toArray();
            // $proArray = [];
            // foreach ($adRes as $k => $v) {
            //     $proArray[] = $v["id"];
            // }
            //查询该站点下的广告的点击次数
            
            $tongji = new Tongji();
            $count = $tongji->where("pid", $param["id"])->where($where)->count();
            $click = $tongji->where("pid", $param["id"])->where($where)->page($page, $limit)->select()->toArray();
            //拼接参数 返回 id name img url_type date clicks site_id
            foreach ($click as $ck => $cv) {
                 $proData=Db::name("products")->where(["id"=>$cv["pid"]])->find();
                 $click[$ck]["name"]=$proData["name"];
                 $click[$ck]["img"]=$proData["img"];
                
                if( $proData["url_type"]==0){
                    $click[$ck]["url_type"]="站外";
                    // $click[$ck]["url_type"] = "站外";
                }else{
                    $click[$ck]["url_type"]="站内";
                    // $click[$ck]["url_type"] = "站内";
                }
            }
            $siteArr=[];
            foreach ($click as $ck0 => $cv0) {
                $siteArr[]=$cv0["site_id"];
           }
           $siteData=Db::name("site")->whereIn("id", $siteArr)->select();
      
           foreach($siteData as $sk=>$sv){
            foreach($click as $ck1=>&$cv1){
                if($sv["id"]==$cv1["site_id"]){
                    $cv1["site_id"]=$sv["name"];
                }
            }
           }
            $data = [
                'code'  => 0,
                'msg'   => '',
                'count' => $count,
                'data'  => $click,
            ];
            return json($data);
        }
        return $this->fetch();
    }
}
