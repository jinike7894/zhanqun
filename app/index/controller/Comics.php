<?php
namespace app\index\controller;

use app\BaseController;
use think\facade\View;
use EasyAdmin\tool\CommonTool;
use think\facade\Db;
use app\common\paginator\CustomPaginator;

class Comics extends BaseController
{
    public  $site = "13";
    public function initialize()
    {

        $this->Menu = new \app\admin\model\MallCate();
        $this->MallVideos = new \app\admin\model\MallVideos();
        $this->Products = new \app\common\model\Products();
        $this->Pcategory = new \app\common\model\Pcategory();
        $this->Channelcode = new \app\common\model\Channelcode();
        $channel = $this->request->param('channel', 0);
        $channelbaidutongji = Db::name("channelcode")->where("channelCode", $channel)->find();
        View::assign('baidutongji', $channelbaidutongji["statistics_code"]);
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
        $novelCate = Db::name("mall_comiccate")->where(["status" => 1])->select();
        View::assign('novelCate', $novelCate);
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
        $tmimg = sysconfig('site', 'manhua_img_cdn');
        View::assign('tmimg', $tmimg);
        $tuoyilink = "https://c.tuoya2.cc?c=2039";
        View::assign('jscsscdn', $jscsscdn);
        View::assign('onlinekf', $onlinekf);
        View::assign('onlineemail', $onlineemail);
        View::assign('foreverurl', $foreverurl);
        View::assign('bdtongji', $bdtongji);
        View::assign('tuoyilink', $tuoyilink);
        View::assign('action', $action);
        //获取轮播广告
        $BannerList = $this->Products
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
        $BannerList = checkZhanneiAd($this->site, $BannerList,$channel);
        View::assign('BannerList', $BannerList);
          //获取缩边轮播图
          $BannerList2 = $this->Products
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
          $BannerList2=checkZhanneiAd($this->site,$BannerList2,$channel);
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
        $jiugongge_img = $this->Products
            ->where(array('status' => 1))
            ->where($pwhere)->order('sort asc,id asc')->page(1, 100)->select()->toArray();
        $jiugongge_img = checkDisplayAd($this->site, $jiugongge_img);
        $jiugongge_img = checkZhanneiAd($this->site, $jiugongge_img,$channel);
        View::assign('jiugongge_img', $jiugongge_img);
        //获取九宫格文字
        $jiugongge_font = $this->Products
            ->where(array('status' => 1))
            ->where(["pid" => 84])->order('sort asc,id asc')->page(1, 100)->select()->toArray();
        $jiugongge_font = checkDisplayAd($this->site, $jiugongge_font);
        $jiugongge_font = checkZhanneiAd($this->site, $jiugongge_font,$channel);
        View::assign('jiugongge_font', $jiugongge_font);
        //获取顶部图标文字
        $img_font_ad = $this->Products
            ->where(array('status' => 1))
            ->where(["pid" => 85])->order('sort asc,id asc')->page(1, 100)->select()->toArray();
        $img_font_ad = checkDisplayAd($this->site, $img_font_ad);
        $img_font_ad = checkZhanneiAd($this->site, $img_font_ad,$channel);
        View::assign('img_font_ad', $img_font_ad);
        //获取在线约炮
        $yuepao_ad = $this->Products
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
        $yuepao_ad = checkZhanneiAd($this->site, $yuepao_ad,$channel);
        View::assign('yuepao_ad', $yuepao_ad);
        //获取直播
        $live_ad = $this->Products
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
        $live_ad = checkZhanneiAd($this->site, $live_ad,$channel);
        View::assign('live_ad', $live_ad);
        //获取直播
        $live_ad = $this->Products
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
        $live_ad = checkZhanneiAd($this->site, $live_ad,$channel);
        View::assign('live_ad', $live_ad);

        //中部文字广告
        $zhong_font_ad = $this->Products
            ->where(array('status' => 1))
            ->where(["pid" => 87])->order('sort asc,id asc')->page(1, 100)->select()->toArray();
        $zhong_font_ad = checkDisplayAd($this->site, $zhong_font_ad);
        $zhong_font_ad = checkZhanneiAd($this->site, $zhong_font_ad,$channel);
        View::assign('zhong_font_ad', $zhong_font_ad);
        //中部图片广告
        $zhong_img_ad = $this->Products
            ->where(["pid" => 86])->orderRaw("rand()")->select()->toArray();
        $zhong_img_ad = checkDisplayAd($this->site, $zhong_img_ad);
        $zhong_img_ad = checkZhanneiAd($this->site, $zhong_img_ad,$channel);
        View::assign('zhong_img_ad', $zhong_img_ad);
        //底部图片广告
        $di_img_ad = $this->Products
            ->where(array('status' => 1))
            ->where(["pid" => 88])->orderRaw("rand()")->select()->toArray();
        $di_img_ad = checkDisplayAd($this->site, $di_img_ad);
        $di_img_ad = checkZhanneiAd($this->site, $di_img_ad,$channel);
        View::assign('di_img_ad', $di_img_ad);
        //底部图片文字广告
        $di_img_font_ad = $this->Products
            ->where(array('status' => 1))
            ->where(["pid" => 89])->orderRaw("rand()")->select()->toArray();
        $di_img_font_ad = checkDisplayAd($this->site, $di_img_font_ad);
        $di_img_font_ad = checkZhanneiAd($this->site, $di_img_font_ad,$channel);
        View::assign('di_img_font_ad', $di_img_font_ad);
    }

    public function index($channel = 0)
    {
        if (empty($channel)) {
            return response('403 access forbidden!', 403);
        }
        //查询小说分类
        $novelCate = Db::name("mall_comiccate")->where(["status" => 1])->select();
        View::assign('novelCate', $novelCate);
        $novel1 = Db::name("mall_comics");
        //查询10个小说 默认eye排序
        $type=1;
        if (isset($_GET["type"])) {
            switch ($_GET["type"]) {
                case "renqi":
                    $type=1;
                    $novel1->order("renqi desc");
                    break;
                case "tuijian":
                    $type=2;
                    $novel1->order("tuijian desc");
                    break;
                case "shoucang":
                    $type=3;
                    $novel1->order("shoucang desc");
                    break;
                case "resou":
                    $type=4;
                    $novel1->order("resou desc");
                    break;
            }
        }else{
            $novel1->order("renqi desc");
        }
        View::assign('types', $type);

        $novel1 = $novel1->where(["status" => 1])->orderRaw("rand()")->limit(10)->select();
        $novel1 = $novel1->toArray();
        foreach ($novel1 as $k => $v) {
            $novel1[$k]["enpic"]=mbConvert(replaceManhuaCdn($v["pic"]));
            $novel1[$k]["times"] = rand(1, 2);
        }
      
        View::assign('novel1', $novel1);
        //获取小说12个
        $novelModel=Db::name("mall_comics");
        if(isset($_GET["cate_id"])){
            $novelModel->where("cate_id",$_GET["cate_id"]);
        }
        $novel2 = $novelModel->where("status",1)->orderRaw("rand()")->paginate([
            'list_rows' => 12,
            'query'     => request()->param(),
         ]);
        
        View::assign('novel2', $novel2);
        $novel2=$novel2->toArray()["data"];
        $novels1=[];
        $novels2=[];
        foreach($novel2 as $k=>$v){
            $v["enpic"]=mbConvert(replaceManhuaCdn($v["pic"]));
            if (in_array($k, [0,1,2,3,4,5])) { 
                $novels1[]=$v;
             }
            if (in_array($k, [6,7,8,9,10,11])) { 
                $novels2[]=$v;
            }
        }
   
        View::assign('novels1', $novels1);
        View::assign('novels2', $novels2);
        View::assign('channel', $channel);

        return View::fetch('comics/index');
    }


    public function info($channel = 0)
    {
        if (empty($channel)) {
            return response('403 access forbidden!', 403);
        }
        $novelCate = Db::name("mall_comiccate")->where(["status" => 1])->select();
        View::assign('novelCate', $novelCate);
        $videoModel = Db::name("mall_comics");
        if (isset($_GET["id"])) {
            $videoModel->where(["id" => $_GET["id"]]);
        }
        //推荐视频
        $video = Db::name("mall_comics")->where("status", "1")->orderRaw("rand()")->limit(6)->select()->toArray();
        // foreach( $video as $k=>$v){
        //     $video[$k]["enpic"]=mbConvert(replaceManhuaCdn($v["pic"]));
        // }
        View::assign('list', $video);
        //查询章数
        $novelcount = Db::name("comic_catalogs")->where("novel_id",$_GET["id"])->where("status", "1")->paginate([
            'list_rows' => 100,
            'query'     => request()->param(),
         ]);
        $novelfirst = Db::name("comic_catalogs")->where("novel_id",$_GET["id"])->where("status", "1")->find();
        $novelcountid=0;
        if($novelfirst){
            $novelcountid=$novelfirst["id"];
        }
        $novelcounttotal = Db::name("comic_catalogs")->where("novel_id",$_GET["id"])->where("status", "1")->count();
        $videoData = $videoModel->where("status", "1")->find();
        $videoData["enpic"]=mbConvert(replaceManhuaCdn($videoData["pic"]));
     
        View::assign('novelcounttotal', $novelcounttotal);
        $novel2 =  Db::name("mall_comics")->where("status",1)->orderRaw("rand()")->paginate([
            'list_rows' => 12,
            'query'     => request()->param(),
         ]);
        View::assign('novel2', $novel2);
        $novel2=$novel2->toArray()["data"];
        $novels1=[];
        $novels2=[];
        foreach($novel2 as $k=>$v){
            $v["enpic"]=mbConvert(replaceManhuaCdn($v["pic"]));
            if (in_array($k, [0,1,2,3,4,5])) { 
                $novels1[]=$v;
             }
            if (in_array($k, [6,7,8,9,10,11])) { 
                $novels2[]=$v;
            }
        }
        View::assign('novels1', $novels1);
        View::assign('novels2', $novels2);
        View::assign('novelcount', $novelcount);
        View::assign('novelcountid', $novelcountid);
        View::assign('info', $videoData);
        View::assign('channel', $channel);
        return View::fetch('comics/info');

       
    }
    public function read($channel = 0)
    {
        $chapterId = input('param.chapter_id/d',0);
        $ComicCatalogs=new \app\admin\model\ComicCatalogs();
        $Comic=new \app\admin\model\MallComics();
        $chapter = $ComicCatalogs->getById($chapterId);
        $novel = $Comic->getById($chapter['novel_id']);
        //章节列表
        $cataloglist = $ComicCatalogs->getlist($chapter['novel_id']);

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
        $catalogcount = count($cataloglist);
        $manhuaList = explode('|',$chapter['content']);
        foreach ($manhuaList as &$item){
            $item = mbConvert(replaceManhuaCdn($item));
        }
        View::assign('pre',$pre);
        View::assign('next',$next);
        View::assign('cataloglist',$cataloglist);
        View::assign('catalogcount',$catalogcount);
        View::assign('novel',$novel);
        View::assign('chapter',$chapter);
        View::assign('manhuaList',$manhuaList);
        View::assign('channel',$channel);
    
        return View::fetch('comics/read');

        
    }

    public function search($channel = 0)
    {
        if (empty($channel)) {
            return response('403 access forbidden!', 403);
        }
        $videoCateData=Db::name("mall_comiccate")->select();
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
        return View::fetch('comics/search');
    }

    public function searchres($channel = 0)
    {
        if (empty($channel)) {
            return response('403 access forbidden!', 403);
        }
        $videoCateData = Db::name("mall_comiccate")->select();
        View::assign('videoCateData', $videoCateData);
        View::assign('query', $_GET["query"]);
        $videoModel = Db::name("mall_comics");
        if (isset($_GET["cate_id"])) {
            $videoModel->where(["cate_id" => $_GET["cate_id"]]);
        }
        if (isset($_GET["query"]) && $_GET["query"] != "") {
            $videoModel->where('title', 'like', "%{$_GET["query"]}%");
        }
        $videoData = $videoModel->where("status", "1")->paginate(6);
        $videodatas=$videoData->toArray();
        $videodata1=[];
        foreach($videodatas["data"] as $k=>$v){
            $v['enpic']=mbConvert(replaceManhuaCdn($v["pic"]));
            $videodata1[]=$v;
        }
        View::assign('videodata1', $videodata1);
        View::assign('list', $videoData);
    
        View::assign('channel', $channel);
        return View::fetch('comics/searchres');
    }
}
