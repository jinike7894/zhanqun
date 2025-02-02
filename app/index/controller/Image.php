<?php

namespace app\index\controller;

use app\BaseController;
use think\facade\View;
use EasyAdmin\tool\CommonTool;
use think\facade\Db;
use app\common\paginator\CustomPaginator;

class Image extends BaseController
{
    public  $site = "15";
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
        $novelCate = Db::name("mall_img_cate")->where(["status" => 1])->select();
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
        $img_cdn = sysconfig('site', 'img_cdn');
        View::assign('img_cdn', $img_cdn);
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
            ->where(array('status' => 1))
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
        //获取分类和排名前8得图片
        $novelCateorder = Db::name("mall_img_cate")->where(["status" => 1])->select()->toArray();
      
        foreach($novelCateorder as $k=>$v){
            $novelCateorder[$k]["order_html"]=imageOrder($v['id']);
        }
        $imagemodel = Db::name("mall_img");
        if(isset($_GET["cate_id"])){
            $imagemodel= $imagemodel->where('cate_id',$_GET["cate_id"]); 
        }
        //获取推荐图片
        $image = $imagemodel->where(["status" => 1])->orderRaw("rand()")->paginate([
            'list_rows' => 8,
            'query'     => request()->param(),
         ]);
         View::assign('image', $image);
         $image1=$image->toArray()["data"];
         $images1=[];
         $images2=[];
         //区分两个部分
         foreach($image as $k=>$v){
            if (in_array($k, [0,1,2,3])) { 
                $images1[]=$v;
             }
            if (in_array($k, [4,5,6,7])) { 
                $images2[]=$v;
            }
         }
        View::assign('images1', $images1);
        View::assign('images2', $images2);
        View::assign('novelCateorder', $novelCateorder);
        View::assign('channel', $channel);
        return View::fetch('image/index');
    }


    public function info($channel = 0)
    {
        if (empty($channel)) {
            return response('403 access forbidden!', 403);
        }
        $novelCate = Db::name("mall_img_cate")->where(["status" => 1])->select();
        View::assign('novelCate', $novelCate);
        $videoModel = Db::name("mall_novels");
        if (isset($_GET["id"])) {
            $videoModel->where(["id" => $_GET["id"]]);
        }
        View::assign('id', $_GET["id"]);

        $show_type=1;
        if (isset($_GET["show_type"])) {
            $show_type=$_GET["show_type"];
        }
        View::assign('show_type', $show_type);
        //推荐
        $video = Db::name("mall_img")->where("status", "1")->orderRaw("rand()")->limit(4)->select();
        View::assign('list', $video);
        //查询图片数据

        $info = Db::name("mall_img")->where("id",$_GET["id"])->find();
        View::assign('info', $info);
        //随机4个分类
        $cateRand = Db::name("mall_img_cate")->where(["status" => 1])->orderRaw("rand()")->limit(4)->select();
        View::assign('cateRand', $cateRand);
        //列表展示
        $list_img=[];
        $banner_img=[];
        $array = explode(",", $info["pic"]);
        $page_list=1;
        if(isset($_GET["page_list"])){
            $page_list=$_GET["page_list"];
        }
        $list_img[]=["list"=>$array[$page_list-1],"count"=>count($array)];
        View::assign('list_img', $list_img);
        View::assign('page_list', $page_list);
        //轮播展示
        $banner_list=1;
        if(isset($_GET["banner_list"])){
            $banner_list=$_GET["banner_list"];
        }
        $datas=array_slice($array, ($banner_list-1)*6,  ($banner_list-1)+6);
        $banner_img[]=["list"=> $datas,"count"=>ceil(count($array)/6)];
        View::assign('banner_img', $banner_img);
        View::assign('banner_list', $banner_list);
        View::assign('channel', $channel);
        return View::fetch('image/info');

        // $vid = input('param.vid/d',0);
        // $category_id = input('param.category_id/d',0);
        // $category_child_id = input('param.category_child_id/d',0);
        // $menulist = $this->Menu->getmenu(0);
        // foreach ($menulist as &$item){
        //     $item['title'] = mbConvert($item['title']);
        // }
        // $page = input('param.page',1);
        // $limit = input('param.limit',21);
        // $child_menu = $this->Menu->getmenu($category_id);
        // $vodlist = $this->MallVideos->getById($vid);
        // if($vid <= 5000){
        //     $vodlist['enpic'] = replaceVideoCdn($vodlist['enpic'], 'video_img_cdn');
        //     $vodlist['video'] = replaceVideoCdn($vodlist['video'], 'video_cdn');
        // }
        // $vodlist['title'] = mbConvert($vodlist['title']);
        // $guesslist = $this->MallVideos->getmorelist($vodlist['cate_id'],$page,$limit);
        // $category = $this->Menu->getCateInfo($vodlist['cate_id']);
        // $arr['id'] = $vodlist['id'];
        // $arr['url'] = $vodlist['pic'];
        // $arr['encryptUrl'] = $vodlist['pic'];
        // $arr['cid'] = $category_child_id;
        // $arr['sl'] = $vodlist['video'];
        // $arr['title'] = $vodlist['title'];
        // $arr['playedCount'] = mt_rand(1000000,9999999);
        // $arr['duration'] = $vodlist['time'];
        // $arr['vip'] = 0;
        // $arr['up_num'] = $vodlist['up'];
        // $arr['down_num'] = $vodlist['down'];
        // $arr['fav_num'] = $vodlist['fav'];
        // $arr['is_fav'] = false;
        // $data = base64_encode(json_encode($arr));
        // View::assign('category_id',$category_id);
        // View::assign('category_child_id',$category_child_id);
        // View::assign('menulist',$menulist);
        // View::assign('child_menu',$child_menu);
        // View::assign('vodlist',$vodlist);
        // View::assign('data',$data);
        // View::assign('guesslist',$guesslist['list']);
        // View::assign('page',$guesslist['page']);
        // View::assign('channel',$channel);
        // View::assign('category',$category);
        // if(ismobile())
        // {
        // 	return View::fetch('vodplay_mobile');
        // }else{
        // 	return View::fetch('vodplay_mobile');
        // }
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
        $image=Db::name("mall_img")->orderRaw("rand()")->limit(4)->select();

        View::assign('image',$image);
        View::assign('channel', $channel);
        return View::fetch('image/search');
    }

    public function searchres($channel = 0)
    {
        if (empty($channel)) {
            return response('403 access forbidden!', 403);
        }

        View::assign('query', $_GET["query"]);
        $videoModel = Db::name("mall_img");
        if (isset($_GET["cate_id"])) {
            $videoModel->where(["cate_id" => $_GET["cate_id"]]);
        }
        if (isset($_GET["query"]) && $_GET["query"] != "") {
            $videoModel->where('title', 'like', "%{$_GET["query"]}%");
        }
        $videoData = $videoModel->where("status", "1")->paginate([
            'list_rows' => 4,
            'query'     => request()->param(),
         ]);
        View::assign('list', $videoData);
        View::assign('channel', $channel);
        return View::fetch('image/searchres');
    }
}
