<?php
namespace app\index\controller;

use app\BaseController;
use think\facade\View;
use EasyAdmin\tool\CommonTool;
use think\facade\Db;
use app\common\paginator\CustomPaginator;
class Video extends BaseController
{
    public  $site="11";
	public function initialize()
	{
        
		$this->Menu = new \app\admin\model\MallCate();
		$this->MallVideos = new \app\admin\model\MallVideos();
        $this->Products = new \app\common\model\Products();
        $this->Pcategory = new \app\common\model\Pcategory();
        $this->Channelcode = new \app\common\model\Channelcode();
        $channel = $this->request->param('channel',0);
        $channelInfo = $this->Channelcode->getChannelInfo($channel);
        $statistics_code = $channelInfo['statistics_code'] ?? null;
        //设置渠道code
        View::assign('tongjiCode',$channel);
        //设置渠道id
        View::assign('site_id',$this->site);
        $action = $this->request->action();
        //获取logo
        $logo=Db::name("site")->where("id",$this->site)->find();
        View::assign('logo',$logo["icon"]);
        $videoCateData=Db::name("mall_cate")->where([["id","<>",1]])->select();
        View::assign('videoCateData',$videoCateData);
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
        
        $videoimg = sysconfig('site', 'video_img_cdn');

        View::assign('videoimg',$videoimg);
        $videocdn = sysconfig('site', 'video_cdn');
        View::assign('videocdn',$videocdn);
        View::assign('jscsscdn',$jscsscdn);
        View::assign('onlinekf',$onlinekf);
        View::assign('onlineemail',$onlineemail);
        View::assign('foreverurl',$foreverurl);
        View::assign('bdtongji',$bdtongji);
        View::assign('tuoyilink',$tuoyilink);
        View::assign('action',$action);
        //获取轮播广告
        $BannerList = $this->Products
        ->where(array('status'=>1))
        ->where(['pid' => 91])->order('sort asc,id asc')->page(1, 100)->select()->toArray();
        foreach ($BannerList as $key => &$item) {
            $item['url'] = mbConvert($item['androidurl']);
            $item['name'] = mbConvert($item['name']);
            if (strpos($item['img'], 'http') === false) {
                // $item['img'] = mbConvert(replaceAdCdn($item['img']));
                $item['img'] = $item['img'];
            }
        }
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
        //减去该站点关闭得广告
        $BannerList=checkDisplayAd($this->site,$BannerList);
        $BannerList=checkZhanneiAd($this->site,$BannerList,$channel);
        View::assign('BannerList',$BannerList);
       //获取广告得分类
       $pcategory = $this->Pcategory->field('id,title')
       ->page(1, 100)->select()->toArray();
       View::assign('pcategory',$pcategory);
       //获取九宫格，where 分类id
       $cateid=input("adcateid");
       $pwhere=["pid"=>83];
       if($cateid){
        $pwhere["cid"]=$cateid;
        }
       $jiugongge_img = $this->Products
       ->where(array('status'=>1))
       ->where($pwhere)->order('sort asc,id asc')->page(1, 100)->select()->toArray();
       $jiugongge_img=checkDisplayAd($this->site,$jiugongge_img);
       $jiugongge_img=checkZhanneiAd($this->site,$jiugongge_img,$channel);
       View::assign('jiugongge_img',$jiugongge_img);
        //获取九宫格文字
        $jiugongge_font = $this->Products
        ->where(array('status'=>1))
        ->where(["pid"=>84])->order('sort asc,id asc')->page(1, 100)->select()->toArray();
        $jiugongge_font=checkDisplayAd($this->site,$jiugongge_font);
        $jiugongge_font=checkZhanneiAd($this->site,$jiugongge_font,$channel);
        View::assign('jiugongge_font',$jiugongge_font);
       //获取在线约炮
       $yuepao_ad = $this->Products
        ->where(array('status'=>1))
        ->where(["pid"=>92])->order('sort asc,id asc')->page(1, 100)->select()->toArray();
       //截取小图
       foreach( $yuepao_ad as $kyue=>&$vyue){
                $vyue["like"]=rand(111,999);
                $vyue["age"]=rand(17,28);
                $vyue["height"]=rand(167,180);
                $vyue["km"]=rand(1,10);
                $vyue["time"]=rand(1,10);
                if($vyue["pics"]){
                    $array = explode("|", $vyue["pics"]);
                    $vyue["pics"]=$array;  
                }
       }

        $yuepao_ad=checkDisplayAd($this->site,$yuepao_ad);
        $yuepao_ad=checkZhanneiAd($this->site,$yuepao_ad,$channel);
        View::assign('yuepao_ad',$yuepao_ad);
        //获取直播
        $live_ad = $this->Products
        ->where(array('status'=>1))
        ->where(["pid"=>93])->order('sort asc,id asc')->page(1, 100)->select()->toArray();
        foreach( $live_ad as $kyue=>&$vyue){
            $vyue["online"]=rand(111,888);
            $vyue["click"]=rand(111,888);
            if($vyue["pics"]){
                $array = explode("|", $vyue["pics"]);
                $vyue["pics"]=$array;  
            }
        }
        $live_ad=checkDisplayAd($this->site,$live_ad);
        $live_ad=checkZhanneiAd($this->site,$live_ad,$channel);
        View::assign('live_ad',$live_ad);
        //获取直播
        $live_ad = $this->Products
        ->where(array('status'=>1))
        ->where(["pid"=>93])->order('sort asc,id asc')->page(1, 100)->select()->toArray();
        foreach( $live_ad as $kyue=>&$vyue){
            $vyue["online"]=rand(111,888);
            $vyue["click"]=rand(111,888);
            if($vyue["pics"]){
                $array = explode("|", $vyue["pics"]);
                $vyue["pics"]=$array;  
            }
        }
        $live_ad=checkDisplayAd($this->site,$live_ad);
        $live_ad=checkZhanneiAd($this->site,$live_ad,$channel);
        View::assign('live_ad',$live_ad);

        //中部文字广告
        $zhong_font_ad = $this->Products
        ->where(array('status'=>1))
        ->where(["pid"=>87])->order('sort asc,id asc')->page(1, 100)->select()->toArray();
        $zhong_font_ad=checkDisplayAd($this->site,$zhong_font_ad);
        $zhong_font_ad=checkZhanneiAd($this->site,$zhong_font_ad,$channel);
        View::assign('zhong_font_ad',$zhong_font_ad);
        //中部图片广告
        $zhong_img_ad = $this->Products
        ->where(array('status'=>1))
        ->where(["pid"=>86])->orderRaw("rand()")->select()->toArray();
        $zhong_img_ad=checkDisplayAd($this->site,$zhong_img_ad);
        $zhong_img_ad=checkZhanneiAd($this->site,$zhong_img_ad,$channel);
        View::assign('zhong_img_ad',$zhong_img_ad);
        //底部图片广告
        $di_img_ad = $this->Products
        ->where(array('status'=>1))
        ->where(["pid"=>88])->orderRaw("rand()")->select()->toArray();
        $di_img_ad=checkDisplayAd($this->site,$di_img_ad);
        $di_img_ad=checkZhanneiAd($this->site,$di_img_ad,$channel);
        View::assign('di_img_ad',$di_img_ad);
        //底部图片文字广告
        $di_img_font_ad = $this->Products
        ->where(array('status'=>1))
        ->where(["pid"=>89])->orderRaw("rand()")->select()->toArray();
        $di_img_font_ad=checkDisplayAd($this->site,$di_img_font_ad);
        $di_img_font_ad=checkZhanneiAd($this->site,$di_img_font_ad,$channel);
        View::assign('di_img_font_ad',$di_img_font_ad);
      
        // return View::fetch('index');
    
    }

    public function index($channel = 0){
        if(empty($channel)){
            return response('403 access forbidden!', 403);
        }
        $cate_id=0;
        if(isset($_GET["cate_id"])){
            $cate_id   =$_GET["cate_id"];
        }
        View::assign('cate_id', $cate_id);
        //查询影片内容
        $videoModel=Db::name("mall_videos");
        if(isset($_GET["cate_id"])){
            $videoModel->where(["cate_id"=>$_GET["cate_id"]]);
        }
        $key=(int)1;

        if(isset($_GET["key"])){
            if($_GET["key"]==1){
                $key=(int)1;
                $videoModel->order("is_recommend desc");
            }elseif($_GET["key"]==2){
                $key=(int)2;
                $videoModel->order("create_time desc");
            }elseif($_GET["key"]==3){
                $key=(int)3;
                $videoModel->order("eye desc");
            }
           
        }

        View::assign('keys',$key);
        $videoData=$videoModel->where("status","1")->paginate(12);
        View::assign('list',$videoData);
        //查询视频类型
        $videoCateData=Db::name("mall_cate")->where([["id","<>",1]])->select();
        View::assign('videoCateData',$videoCateData);
        //把12条分成2条6个得
        $videoData=$videoData->toArray()["data"];
        $video1=[];
        $video2=[];
        foreach($videoData as $k=>$v){
            if (in_array($k, [0,1,2,3,4,5])) { 
                $video1[]=$v;
             }
            if (in_array($k, [6,7,8,9,10,11])) { 
                $video2[]=$v;
            }
        }
        View::assign('video1',$video1);
        View::assign('video2',$video2);
        View::assign('channel',$channel);
        return View::fetch('video/index');

    }
	// public function category($channel = 0)
	// {
	// 	$category_id = input('param.category_id/d',0);
	// 	$category_child_id = input('param.category_child_id/d',0);
	// 	$menulist = $this->Menu->getmenu(0);
    //     foreach ($menulist as &$item){
    //         $item['title'] = mbConvert($item['title']);
    //     }
	// 	$child_menu = $this->Menu->getmenu($category_id);
	// 	$category_name = $this->Menu->getById($category_id);
	// 	$page = input('param.page',1);
	// 	$limit = input('param.limit',32);
	// 	$videolist = $this->MallVideos->getlist($category_id,$category_child_id,$page,$limit);
    //     if($category_id == 40){
    //         $videolist = $this->MallVideos->getnewlist($category_id,$category_child_id,$page,$limit);
    //     }
	// 	View::assign('category_id',$category_id);
	// 	View::assign('category_child_id',$category_child_id);
	// 	View::assign('menulist',$menulist);
	// 	View::assign('child_menu',$child_menu);
	// 	View::assign('category_name',$category_name['title']);
	// 	View::assign('videolist',$videolist['list']);
	// 	View::assign('page',$videolist['page']);
    //     View::assign('channel',$channel);
	// 	if(ismobile())
	// 	{
	// 		return View::fetch('category_mobile');
	// 	}else{
	// 		return View::fetch('category_mobile');
	// 	}
	// }

	public function info($channel = 0)
	{
        if(empty($channel)){
            return response('403 access forbidden!', 403);
        }
        $videoModel=Db::name("mall_videos");
        if(isset($_GET["id"])){
            $videoModel->where(["id"=>$_GET["id"]]);
        }
        $cate_id=0;
        if(isset($_GET["cate_id"])){
            $cate_id   =$_GET["cate_id"];
        }
        View::assign('cate_id', $cate_id);
         //推荐视频
         $video=Db::name("mall_videos")->where("status","1")->orderRaw("rand()")->limit(6)->select();
         View::assign('list',$video);

        $videoData=$videoModel->where("status","1")->find();
        View::assign('info',$videoData);
        View::assign('channel',$channel);
        return View::fetch('video/info');
       
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
	

	public function search($channel = 0)
	{
        if(empty($channel)){
            return response('403 access forbidden!', 403);
        }
        $videoCateData=Db::name("mall_cate")->where([["id","<>",1]])->select();
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
        View::assign('videoCateData',$videoCateData);
        View::assign('channel',$channel);
        return View::fetch('video/search');
	}
    public function vod()
	{
		if(ismobile())
		{
			return View::fetch('vod_mobile');
		}else{
			return View::fetch('vod_mobile');
		}
	}
    public function searchres($channel = 0)
	{
        if(empty($channel)){
            return response('403 access forbidden!', 403);
        }
        $videoCateData=Db::name("mall_cate")->where([["id","<>",1]])->select();
        View::assign('videoCateData',$videoCateData);
        View::assign('query',$_GET["query"]);
        $videoModel=Db::name("mall_videos");
        if(isset($_GET["cate_id"])){
            $videoModel->where(["cate_id"=>$_GET["cate_id"]]);
        }
        if(isset($_GET["query"])&&$_GET["query"]!=""){
            $videoModel->where('title', 'like', "%{$_GET["query"]}%");
        }
        $videoData=$videoModel->where("status","1")->paginate([
            'list_rows' => 6,
            'query'     => request()->param(),
         ]);
        View::assign('list',$videoData);
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
        View::assign('channel',$channel);
        return View::fetch('video/searchres');
	}


 

 


  

}
