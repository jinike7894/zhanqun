<?php

namespace app\admin\controller\website;

use app\common\controller\AdminController;
use EasyAdmin\annotation\ControllerAnnotation;
use EasyAdmin\annotation\NodeAnotation;
use think\App;
use think\facade\Db;
use think\facade\View;

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
            foreach ($list as $k => $v) {
                foreach ($data as $dk => $dv) {
                    if ($v["type"] == $dv["id"]) {
                        $list[$k]["type"] = $dv["name"];
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
        return json(["code" => 1, 'msg' => "", "data" => $data, "url" => "", "wait" => 0]);
    }
    public function add()
    {
        if ($this->request->isPost()) {

            $post = $this->request->post();
            $data = [
                "name" => $post["name"],
                "domain" => $post["domain"],
                "type" => $post["type"],
                "template" => $post["template"],
                "icon" => $post["icon"],
                "create_time" => time(),
                "zhannei_settings" => json_encode([]),
                "display_show" => json_encode([]),
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
    public function settings()
    {
        $id = $_GET["id"];
        //查询广告得总类型
        $siteData = Db::name("site")->where(["id" => $_GET["id"]])->find();
        $siteDataDisplayShow = json_decode($siteData["display_show"], true);//广告开关 [pid,pid]
        $zhanneiData = json_decode($siteData["zhannei_settings"], true); //站内数据[["pid"=>"1573","site_id"=>"5"],]

        $ptype = Db::name("ptype")->select()->toArray();
        foreach ($ptype as $k => $v) {
            $ptype[$k]["ad"] = Db::name("products")->where(["pid" => $v["id"]])->select()->toArray();
        }

        foreach ($ptype as $kp => $vp) {
            foreach ($vp["ad"] as $ap => $av) {
                $zhannei_url = 0;
                if ($av["url_type"] == 1) {
                    //站内
                    if (!empty($zhanneiData)) {
                        foreach ($zhanneiData as $zhank => $zhanv) {
                            if ($zhanv["pid"] == $av["id"]) {
                                $zhannei_url = $zhanv["site_id"];
                            }
                        }
                    }
                }
                $ptype[$kp]["ad"][$ap]["url_site_id"] = $zhannei_url;
            }
        }

      
            //获取广告开关
            foreach ($ptype as $kp => $vp) {
                foreach ($vp["ad"] as $ap => $av) {
                    $ptype[$kp]["ad"][$ap]["switch"] = 0;    
                    if (in_array($av["id"], $siteDataDisplayShow)) {
                        $ptype[$kp]["ad"][$ap]["switch"] = 0;       
                    }else{
                        $ptype[$kp]["ad"][$ap]["switch"] = 1;    
                    }
                 
                }
            }
        
        

        //获取站点
        $site = Db::name("site")->select();
        View::assign('siteData', $siteDataDisplayShow);
        View::assign('zhanneiData', $zhanneiData);
        View::assign('site', $site);
        View::assign('site_id', $id);
        View::assign('ptype', $ptype);
        return $this->fetch();
    }
    //广告选择站点
    public function selectsite()
    {
        $site_id = $_POST["site_id"];
        $val = $_POST["select"];
        $pid = $_POST["pid"];
        $res = Db::name("site")->where(["id" => $site_id])->find();
        $siteData = json_decode($res["zhannei_settings"], true);
        if (!empty($siteData)) {
            $s1 = false;
            foreach ($siteData as $k => $v) {
                if ($v["pid"] == $pid) {
                    $s1 = true;
                    $siteData[$k]["site_id"] = $val;
                }
            }
            if (!$s1) {
                $siteData[] = ["pid" => $pid, "site_id" => $val];
            }
            $arr = json_encode($siteData);
        } else {
            $arr = json_encode([["pid" => $pid, "site_id" => $val]]);
        }
     
        $res = Db::name("site")->where(["id" => $site_id])->update(["zhannei_settings" => $arr]);
        if ($res) {
            return  json(["code" => 1, "msg" => "操作成功"]);
        }
        return  json(["code" => 0, "msg" => "操作失败"]);
    }
    //广告开关
    public function selectswitch()
    {
        $site_id = $_POST["site_id"];
        $val = $_POST["select"];
        $pid = $_POST["pid"];
        $res = Db::name("site")->where(["id" => $site_id])->find();
        $siteData = json_decode($res["display_show"], true);
        if($val==0){
                //查询是否有当前pid
                if(!in_array($pid,$siteData)){
                    $siteData[]=$pid;
                }
        }else{
    
            if(in_array($pid,$siteData)){
               //去除当前得val
               $siteData = array_diff($siteData, [$pid]);
            }  
        }
   
        $res=Db::name("site")->where(["id" => $site_id])->update(["display_show" => json_encode($siteData)]);
        if ($res) {
            return  json(["code" => 1, "msg" => "操作成功"]);
        }
        return  json(["code" => 0, "msg" => "操作失败"]);
    }
  
}
