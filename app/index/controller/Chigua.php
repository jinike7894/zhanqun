<?php

namespace app\index\controller;

use app\BaseController;
use think\facade\View;
use EasyAdmin\tool\CommonTool;
use think\facade\Db;
use app\common\paginator\CustomPaginator;

class Chigua extends BaseController
{
    public  $site = "14";
    public function initialize()
    {

        $this->Menu = new \app\admin\model\MallCate();
        $this->MallVideos = new \app\admin\model\MallVideos();
        $this->Products = new \app\common\model\Products();
        $this->Pcategory = new \app\common\model\Pcategory();
        $this->Channelcode = new \app\common\model\Channelcode();
        $channel = $this->request->param('channel', 0);
        $channelInfo = $this->Channelcode->getChannelInfo($channel);
        $statistics_code = $channelInfo['statistics_code'] ?? null;
        //设置渠道code
        View::assign('tongjiCode', $channel);
        //设置渠道id
        View::assign('site_id', $this->site);
        $action = $this->request->action();
        //获取logo
        $logo=Db::name("site")->where("id",$this->site)->find();
        View::assign('logo',$logo["icon"]);


        $cate_id=0;
        if(isset($_GET["cate_id"])){
            $cate_id   =$_GET["cate_id"];
        }
        View::assign('cate_id', $cate_id);
        $jscsscdn = sysconfig('site', 'jscss_cdn');
        $onlinekf = sysconfig('site', 'onlinekf');
        $onlineemail = sysconfig('site', 'onlineemail');
        $foreverurl = sysconfig('site', 'foreverurl');
        $bdtongji = sysconfig('site', 'bdtongji');
        $tuoyilink = "https://c.tuoya2.cc?c=2039";
        View::assign('jscsscdn', $jscsscdn);
        View::assign('onlinekf', $onlinekf);
        View::assign('onlineemail', $onlineemail);
        View::assign('foreverurl', $foreverurl);
        View::assign('bdtongji', $bdtongji);
        View::assign('tuoyilink', $tuoyilink);
        View::assign('action', $action);
        //获取轮播广告
        $BannerList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status' => 1))
            ->where(['pid' => 91])->order('sort asc,id asc')->page(1, 100)->select()->toArray();
        foreach ($BannerList as $key => &$item) {
            $item['url'] = mbConvert($item['androidurl']);
            $item['name'] = mbConvert($item['name']);
            if (strpos($item['img'], 'http') === false) {
                // $item['img'] = mbConvert(replaceAdCdn($item['img']));
                $item['img'] = $item['img'];
            }
        }
        //减去该站点关闭得广告
        $BannerList = checkDisplayAd($this->site, $BannerList);
        $BannerList = checkZhanneiAd($this->site, $BannerList);
        View::assign('BannerList', $BannerList);
          //获取缩边轮播图
          $BannerList2 = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
          ->where(array('status'=>1))
          ->where(['pid' => 94])->order('sort asc,id asc')->page(1, 100)->select()->toArray();
          foreach ($BannerList2 as $key => &$item) {
              $item['url'] = mbConvert($item['androidurl']);
              $item['name'] = mbConvert($item['name']);
              if (strpos($item['img'], 'http') === false) {
                  // $item['img'] = mbConvert(replaceAdCdn($item['img']));
                  $item['img'] = $item['img'];
              }
          }
          //减去该站点关闭得广告
          $BannerList2=checkDisplayAd($this->site,$BannerList2);
          $BannerList2=checkZhanneiAd($this->site,$BannerList2);
          View::assign('BannerList2',$BannerList2);
        //获取广告得分类
        $pcategory = $this->Pcategory->field('id,title')
            ->page(1, 100)->select()->toArray();
        View::assign('pcategory', $pcategory);
        //获取九宫格，where 分类id
        $cateid = input("adcateid");
        $pwhere = ["pid" => 83];
        if ($cateid) {
            $pwhere["cid"] = $cateid;
        }
        $jiugongge_img = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status' => 1))
            ->where($pwhere)->order('sort asc,id asc')->page(1, 100)->select()->toArray();
        $jiugongge_img = checkDisplayAd($this->site, $jiugongge_img);
        $jiugongge_img = checkZhanneiAd($this->site, $jiugongge_img);
        View::assign('jiugongge_img', $jiugongge_img);
        //获取九宫格文字
        $jiugongge_font = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum,content')
            ->where(array('status' => 1))
            ->where(["pid" => 84])->order('sort asc,id asc')->page(1, 100)->select()->toArray();
        $jiugongge_font = checkDisplayAd($this->site, $jiugongge_font);
        $jiugongge_font = checkZhanneiAd($this->site, $jiugongge_font);
        View::assign('jiugongge_font', $jiugongge_font);
        //获取顶部图标文字
        $img_font_ad = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum,content')
            ->where(array('status' => 1))
            ->where(["pid" => 85])->order('sort asc,id asc')->page(1, 100)->select()->toArray();
        $img_font_ad = checkDisplayAd($this->site, $img_font_ad);
        $img_font_ad = checkZhanneiAd($this->site, $img_font_ad);
        View::assign('img_font_ad', $img_font_ad);
        //获取在线约炮
        $yuepao_ad = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum,pics')
            ->where(array('status' => 1))
            ->where(["pid" => 92])->order('sort asc,id asc')->page(1, 100)->select()->toArray();
        //截取小图
        foreach ($yuepao_ad as $kyue => &$vyue) {
            $vyue["like"] = rand(111, 999);
            $vyue["age"] = rand(17, 28);
            $vyue["height"] = rand(167, 180);
            $vyue["km"] = rand(1, 10);
            $vyue["time"] = rand(1, 10);
            if ($vyue["pics"]) {
                $array = explode("|", $vyue["pics"]);
                $vyue["pics"] = $array;
            }
        }

        $yuepao_ad = checkDisplayAd($this->site, $yuepao_ad);
        $yuepao_ad = checkZhanneiAd($this->site, $yuepao_ad);
        View::assign('yuepao_ad', $yuepao_ad);
        //获取直播
        $live_ad = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum,pics')
            ->where(array('status' => 1))
            ->where(["pid" => 93])->order('sort asc,id asc')->page(1, 100)->select()->toArray();
        foreach ($live_ad as $kyue => &$vyue) {
            $vyue["online"] = rand(111, 888);
            $vyue["click"] = rand(111, 888);
            if ($vyue["pics"]) {
                $array = explode("|", $vyue["pics"]);
                $vyue["pics"] = $array;
            }
        }
        $live_ad = checkDisplayAd($this->site, $live_ad);
        $live_ad = checkZhanneiAd($this->site, $live_ad);
        View::assign('live_ad', $live_ad);
        //获取直播
        $live_ad = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum,pics')
            ->where(array('status' => 1))
            ->where(["pid" => 93])->order('sort asc,id asc')->page(1, 100)->select()->toArray();
        foreach ($live_ad as $kyue => &$vyue) {
            $vyue["online"] = rand(111, 888);
            $vyue["click"] = rand(111, 888);
            if ($vyue["pics"]) {
                $array = explode("|", $vyue["pics"]);
                $vyue["pics"] = $array;
            }
        }
        $live_ad = checkDisplayAd($this->site, $live_ad);
        $live_ad = checkZhanneiAd($this->site, $live_ad);
        View::assign('live_ad', $live_ad);

        //中部文字广告
        $zhong_font_ad = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum,pics')
            ->where(array('status' => 1))
            ->where(["pid" => 87])->order('sort asc,id asc')->page(1, 100)->select()->toArray();
        $zhong_font_ad = checkDisplayAd($this->site, $zhong_font_ad);
        $zhong_font_ad = checkZhanneiAd($this->site, $zhong_font_ad);
        View::assign('zhong_font_ad', $zhong_font_ad);
        //中部图片广告
        $zhong_img_ad = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum,pics')
            ->where(array('status' => 1))
            ->where(["pid" => 86])->orderRaw("rand()")->select()->toArray();
        $zhong_img_ad = checkDisplayAd($this->site, $zhong_img_ad);
        $zhong_img_ad = checkZhanneiAd($this->site, $zhong_img_ad);
        View::assign('zhong_img_ad', $zhong_img_ad);
        //底部图片广告
        $di_img_ad = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum,pics')
            ->where(array('status' => 1))
            ->where(["pid" => 88])->orderRaw("rand()")->select()->toArray();
        $di_img_ad = checkDisplayAd($this->site, $di_img_ad);
        $di_img_ad = checkZhanneiAd($this->site, $di_img_ad);
        View::assign('di_img_ad', $di_img_ad);
        //底部图片文字广告
        $di_img_font_ad = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum,pics')
            ->where(array('status' => 1))
            ->where(["pid" => 89])->orderRaw("rand()")->select()->toArray();
        $di_img_font_ad = checkDisplayAd($this->site, $di_img_font_ad);
        $di_img_font_ad = checkZhanneiAd($this->site, $di_img_font_ad);
        View::assign('di_img_font_ad', $di_img_font_ad);
      
        $chiguaCate = Db::name("mall_chigua_cate")->order("sort desc")->select();
        View::assign('chiguaCate', $chiguaCate);
    }

    public function index($channel = 0)
    {
        if (empty($channel)) {
            return response('403 access forbidden!', 403);
        }
        $where=[];
        if(isset($_GET["cate_id"])){
            $where=[["cate_id","=",$_GET["cate_id"]]];
        }
        //获取吃瓜内容
        $chigua = Db::name("mall_chigua")->where($where)->order("sort desc")->paginate([
            'list_rows' => 6,
            'query'     => request()->param(),
         ]);
         View::assign('chigua', $chigua);
        $chigua=$chigua->toArray()["data"];
        $chigua1=[];
        $chigua2=[];
        foreach($chigua as $k=>$v){
            if (in_array($k, [0,1,2])) { 
                $chigua1[]=$v;
             }
            if (in_array($k, [3,4,5])) { 
                $chigua2[]=$v;
            }
        }
       
        View::assign('chigua1', $chigua1);
        View::assign('chigua2', $chigua2);
        View::assign('channel', $channel);
        return View::fetch('chigua/index');
    }


    public function info($channel = 0)
    {
        if (empty($channel)) {
            return response('403 access forbidden!', 403);
        }
       //获取吃瓜内容
        $info=Db::name("mall_chigua")->where("id",$_GET["id"])->find();
        //随机3个黑料
        $chigua=Db::name("mall_chigua")->orderRaw('rand()')->paginate([
            'list_rows' => 3,
            'query'     => request()->param(),
         ]);;
        View::assign('chigua', $chigua);
        View::assign('info', $info);
        View::assign('channel', $channel);
        return View::fetch('chigua/info');

       
    }
    public function getcontents($channel = 0){
   
        $id=$_GET["id"];
        $info=Db::name("mall_chigua")->where("id",$id)->find();
        return json(["data"=>$info["contents"]]);
    }
    public function read($channel = 0)
    {
        if (empty($channel)) {
            return response('403 access forbidden!', 403);
        }
        $NovelCatalogs=new \app\admin\model\NovelCatalogs();
        $Novel=new \app\admin\model\MallNovels();
        $chapterId = input('param.chapter_id/d',0);
        $chapter = $NovelCatalogs->getById($chapterId);
        $novel = $Novel->getById($chapter['novel_id']);
        //章节列表
        $cataloglist = $NovelCatalogs->getlist($chapter['novel_id']);

        $pre = $cataloglist[0];
        $next = $cataloglist[count($cataloglist)-1];
        foreach ($cataloglist as $catalog){
            if($chapter['chapter']-1 == $catalog['chapter']){
                $pre = $catalog;
            }
            if($chapter['chapter']+1 == $catalog['chapter']){
                $next = $catalog;
            }
        }
        $chapter['content'] = mbConvert($chapter['content']);
        $chapter['content'] = str_replace(['&#60;&#112;&#62;','&#60;&#47;&#112;&#62;'],['<p>','</p>'],$chapter['content']);
        $chapter['name'] = mbConvert($chapter['name']);
        $catalogcount = count($cataloglist);
        View::assign('pre',$pre);
        View::assign('next',$next);
        View::assign('cataloglist',$cataloglist);
        View::assign('catalogcount',$catalogcount);
        View::assign('novel',$novel);
        View::assign('chapter',$chapter);
        View::assign('channel',$channel);
        View::assign('channel', $channel);
        return View::fetch('novel/read');

        
    }

    public function search($channel = 0)
    {
        if (empty($channel)) {
            return response('403 access forbidden!', 403);
        }
        $videoCateData=Db::name("mall_novelcate")->select();
        $video1=[];
        $video2=[];
        foreach($videoCateData as $k=>$v){
            if (in_array($k, [0,1,2,3,4,5])) { 
                $video1[]=$v;
             }
            if (in_array($k, [6,7,8,9,10,11])) { 
                $video2[]=$v;
            }
        }
        View::assign('video2',$video2);
        View::assign('video1',$video1);
 
        View::assign('videoCateData', $videoCateData);
        View::assign('channel', $channel);
        return View::fetch('novel/search');
    }

    public function searchres($channel = 0)
    {
        if (empty($channel)) {
            return response('403 access forbidden!', 403);
        }
        $videoCateData = Db::name("mall_novelcate")->select();
        View::assign('videoCateData', $videoCateData);
        View::assign('query', $_GET["query"]);
        $videoModel = Db::name("mall_novels");
        if (isset($_GET["cate_id"])) {
            $videoModel->where(["cate_id" => $_GET["cate_id"]]);
        }
        if (isset($_GET["query"]) && $_GET["query"] != "") {
            $videoModel->where('title', 'like', "%{$_GET["query"]}%");
        }
        $videoData = $videoModel->where("status", "1")->paginate(6);
        View::assign('list', $videoData);
        // $videoCateData=Db::name("mall_cate")->where([["id","<>",1]])->select();
        // $video1=[];
        // $video2=[];
        // foreach($videoCateData as $k=>$v){
        //     if (in_array($k, [0,1,2,3,4,5])) { 
        //         $video1[]=$v;
        //      }
        //     if (in_array($k, [6,7,8,9,10,11])) { 
        //         $video2[]=$v;
        //     }
        // }
        // View::assign('video2',$video2);
        // View::assign('video1',$video1);
        // View::assign('videoCateData',$videoCateData);
        View::assign('channel', $channel);
        return View::fetch('novel/searchres');
    }
}
