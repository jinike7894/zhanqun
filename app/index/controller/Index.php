<?php
namespace app\index\controller;

use app\BaseController;
use think\facade\View;
use EasyAdmin\tool\CommonTool;

class Index extends BaseController
{
	public function initialize()
	{
		$this->Menu = new \app\admin\model\MallCate();
		$this->MallVideos = new \app\admin\model\MallVideos();
        $this->Products = new \app\common\model\Products();
        $this->Channelcode = new \app\common\model\Channelcode();


        $channel = $this->request->param('channel',0);
        $channelInfo = $this->Channelcode->getChannelInfo($channel);
        $statistics_code = $channelInfo['statistics_code'] ?? null;
        View::assign('tongjiCode',$statistics_code);

        $action = $this->request->action();

        $jscsscdn = sysconfig('site', 'jscss_cdn');
        View::assign('jscsscdn',$jscsscdn);

        if($action == 'index' || $action == 'hookup' || $action == 'livestreaming'){
            //导航-banner轮播图 10 $NavBannerList
            $NavBannerList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>1))
                ->where(['pid' => '10'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavBannerList as $key => &$item) {
                $item['url'] = $item['androidurl'];
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = replaceAdCdn($item['img']);
                }
            }
            View::assign('NavBannerList',$NavBannerList);

            //导航-影院-九宫格 11     $NavCinemaSudokuList
            $NavCinemaSudokuList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '11'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
            foreach ($NavCinemaSudokuList as $key => &$item) {
                $item['url'] = $item['androidurl'];
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = replaceAdCdn($item['img']);
                }
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('NavCinemaSudokuList',$NavCinemaSudokuList);

            //导航-影院-直播大图 12 $NavCinemaLiveList
            $NavCinemaLiveList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '12'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
            foreach ($NavCinemaLiveList as $key => &$item) {
                $item['url'] = $item['androidurl'];
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = replaceAdCdn($item['img']);
                }
                $item['name'] = mbConvert($item['name']);
                $item['yueNum'] = ["58","129","118","278","197","499","158","142","795","168"][$key];
                $item['juli'] = ["65","2378","1389","6543","327","118","6968","8745","569","1126"][$key];
            }
            View::assign('NavCinemaLiveList',$NavCinemaLiveList);

            //导航-影院-约会大图 13 $NavCinemaHookupList
            $NavCinemaHookupList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '13'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
            foreach ($NavCinemaHookupList as $key => &$item) {
                $item['url'] = $item['androidurl'];
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = replaceAdCdn($item['img']);
                }
                $item['names'] = mbConvert(explode('<br />', nl2br($item['name'])));
                $item['yueNum'] = ["58","129","118","278","197","499","158","142","795","168"][$key];
                $item['juli'] = ["65","2378","1389","6543","327","118","6968","8745","569","1126"][$key];
            }
            View::assign('NavCinemaHookupList',$NavCinemaHookupList);

            //导航-影院-药品大图 14 $NavCinemaMedicineList
            $NavCinemaMedicineList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '14'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
            foreach ($NavCinemaMedicineList as $key => &$item) {
                $item['url'] = $item['androidurl'];
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = replaceAdCdn($item['img']);
                }
                $item['names'] = mbConvert(explode('<br />', nl2br($item['name'])));
                $item['yueNum'] = ["58","129","118","278","197","499","158","142","795","168"][$key];
                $item['juli'] = ["65","2378","1389","6543","327","118","6968","8745","569","1126"][$key];
            }
            View::assign('NavCinemaMedicineList',$NavCinemaMedicineList);

            //导航-BC-九宫格 17.      $NavBCSudokuList
            $NavBCSudokuList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '17'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavBCSudokuList as $key => &$item) {
                $item['url'] = $item['androidurl'];
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = replaceAdCdn($item['img']);
                }
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('NavBCSudokuList',$NavBCSudokuList);

            //导航-BC-直播大图 18.  $NavBCLiveList
            $NavBCLiveList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '18'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavBCLiveList as $key => &$item) {
                $item['url'] = $item['androidurl'];
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = replaceAdCdn($item['img']);
                }
                $item['name'] = mbConvert($item['name']);
                $item['yueNum'] = ["58","129","118","278","197","499","158","142","795","168"][$key];
                $item['juli'] = ["65","2378","1389","6543","327","118","6968","8745","569","1126"][$key];
            }
            View::assign('NavBCLiveList',$NavBCLiveList);

            //导航-BC-约会大图 19.  $NavBCHookupList
            $NavBCHookupList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '19'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavBCHookupList as $key => &$item) {
                $item['url'] = $item['androidurl'];
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = replaceAdCdn($item['img']);
                }
                $item['names'] = mbConvert(explode('<br />', nl2br($item['name'])));
                $item['yueNum'] = ["58","129","118","278","197","499","158","142","795","168"][$key];
                $item['juli'] = ["65","2378","1389","6543","327","118","6968","8745","569","1126"][$key];
            }
            View::assign('NavBCHookupList',$NavBCHookupList);

            //导航-BC-药品大图 20.  $NavBCMedicineList
            $NavBCMedicineList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '20'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavBCMedicineList as $key => &$item) {
                $item['url'] = $item['androidurl'];
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = replaceAdCdn($item['img']);
                }
                $item['names'] = mbConvert(explode('<br />', nl2br($item['name'])));
                $item['yueNum'] = ["58","129","118","278","197","499","158","142","795","168"][$key];
                $item['juli'] = ["65","2378","1389","6543","327","118","6968","8745","569","1126"][$key];
            }
            View::assign('NavBCMedicineList',$NavBCMedicineList);

            //导航-热门-九宫格 21.    $NavHotSudokuList
            $NavHotSudokuList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '21'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavHotSudokuList as $key => &$item) {
                $item['url'] = $item['androidurl'];
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = replaceAdCdn($item['img']);
                }
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('NavHotSudokuList',$NavHotSudokuList);

            //导航-热门-直播大图 22 $NavHotLiveList
            $NavHotLiveList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '22'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavHotLiveList as $key => &$item) {
                $item['url'] = $item['androidurl'];
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = replaceAdCdn($item['img']);
                }
                $item['name'] = mbConvert($item['name']);
                $item['yueNum'] = ["58","129","118","278","197","499","158","142","795","168"][$key];
                $item['juli'] = ["65","2378","1389","6543","327","118","6968","8745","569","1126"][$key];
            }
            View::assign('NavHotLiveList',$NavHotLiveList);

            //导航-热门-约会大图 23 $NavHotHookupList
            $NavHotHookupList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '23'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavHotHookupList as $key => &$item) {
                $item['url'] = $item['androidurl'];
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = replaceAdCdn($item['img']);
                }
                $item['names'] = mbConvert(explode('<br />', nl2br($item['name'])));
                $item['yueNum'] = ["58","129","118","278","197","499","158","142","795","168"][$key];
                $item['juli'] = ["65","2378","1389","6543","327","118","6968","8745","569","1126"][$key];
            }
            View::assign('NavHotHookupList',$NavHotHookupList);

            //导航-热门-药品大图 24 $NavHotMedicineList
            $NavHotMedicineList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '24'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavHotMedicineList as $key => &$item) {
                $item['url'] = $item['androidurl'];
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = replaceAdCdn($item['img']);
                }
                $item['names'] = mbConvert(explode('<br />', nl2br($item['name'])));
                $item['yueNum'] = ["58","129","118","278","197","499","158","142","795","168"][$key];
                $item['juli'] = ["65","2378","1389","6543","327","118","6968","8745","569","1126"][$key];
            }
            View::assign('NavHotMedicineList',$NavHotMedicineList);
        }else{
            //X站banner轮播图 1        $XBannerList
            $XBannerList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>1))
                ->where(['pid' => '1'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($XBannerList as $key => &$item) {
                $item['url'] = $item['androidurl'];
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = replaceAdCdn($item['img']);
                }
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XBannerList',$XBannerList);

            //X站九宫格. 2                   $XSudokuList
            $XSudokuList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '2'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($XSudokuList as $key => &$item) {
                $item['url'] = $item['androidurl'];
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = replaceAdCdn($item['img']);
                }
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XSudokuList',$XSudokuList);

            //X站文字九宫格 3            $XSudokuTextList
            $XSudokuTextList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '3'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($XSudokuTextList as $key => &$item) {
                $item['url'] = $item['androidurl'];
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XSudokuTextList',$XSudokuTextList);

            //X站-列表页-插入广告 4 $XVideoListInsertList
            $XVideoListInsertList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '4'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($XVideoListInsertList as $key => &$item) {
                $item['url'] = $item['androidurl'];
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = replaceAdCdn($item['img']);
                }
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XVideoListInsertList',$XVideoListInsertList);

            //X站-猜你喜欢列表页-插入广告 5 $XGuessVideoInsertList
            $XGuessVideoInsertList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '5'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($XGuessVideoInsertList as $key => &$item) {
                $item['url'] = $item['androidurl'];
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = replaceAdCdn($item['img']);
                }
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XGuessVideoInsertList',$XGuessVideoInsertList);

            //X站-播放页-贴片 6      $XPlayVideoPatch
            $XPlayVideoPatch = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '6'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();

            foreach ($XPlayVideoPatch as $key => &$item) {
                $item['url'] = $item['androidurl'];
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = replaceAdCdn($item['img']);
                }
            }
            View::assign('XPlayVideoPatch',$XPlayVideoPatch);

            //X站底飘 7                     $XBottomFloat
            $XBottomFloat = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '7'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();

            foreach ($XBottomFloat as $key => &$item) {
                $item['url'] = $item['androidurl'];
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = replaceAdCdn($item['img']);
                }
            }
            View::assign('XBottomFloat',$XBottomFloat);

            //X站小飘窗 8                 $XFloating
            $XFloating = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '8'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();

            foreach ($XFloating as $key => &$item) {
                $item['url'] = $item['androidurl'];
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = replaceAdCdn($item['img']);
                }
            }
            View::assign('XFloating',$XFloating);

            //X站弹窗位 9                 $XPopUpList
            $XPopUpList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '9'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($XPopUpList as $key => &$item) {
                $item['url'] = $item['androidurl'];
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = replaceAdCdn($item['img']);
                }
            }
            View::assign('XPopUpList',$XPopUpList);


            //X站-今日推荐-文字广告 58            $XRecommendTextList
            $XRecommendTextList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '58'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($XRecommendTextList as $key => &$item) {
                $item['url'] = $item['androidurl'];
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XRecommendTextList',$XRecommendTextList);


            //X站-猜你喜欢-文字广告 59            $XGuessTextList
            $XGuessTextList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '59'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($XGuessTextList as $key => &$item) {
                $item['url'] = $item['androidurl'];
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XGuessTextList',$XGuessTextList);
        }
    }
	public function index($channel = 0)
	{
		$menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item){
            $item['title'] = mbConvert($item['title']);
        }
        $ip = GetIP();
//        $location = get_location($ip);
		View::assign('menulist',$menulist);
        View::assign('channel',$channel);
//        View::assign('location',$location);
		if(ismobile())
		{
			return View::fetch('index_mobile');
		}else{
			return View::fetch('index_mobile');
		}
	}

    public function featured($channel = 0)
    {
        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item){
            $item['title'] = mbConvert($item['title']);
        }
        $newlist = $this->MallVideos->getorderlist('sort desc,create_time desc,id desc',25);
        $pxlist = $this->MallVideos->getorderlist('eye desc,id desc',31);
        $yuanclist = $this->MallVideos->getlist(40,0,1,13);
        $chigualist = $this->MallVideos->getlist(1,0,1,13);
        $guochanlist = $this->MallVideos->getlist(2,0,1,13);
        $rihanlist = $this->MallVideos->getlist(3,0,1,13);
        $oumeilist = $this->MallVideos->getlist(4,0,1,13);
        $dongmanlist = $this->MallVideos->getlist(5,0,1,13);
        $ailist = $this->MallVideos->getlist(6,0,1,13);
        $jieshuolist = $this->MallVideos->getlist(8,0,1,13);
        View::assign('menulist',$menulist);
        View::assign('newlist',$newlist);
        View::assign('pxlist',$pxlist);
        View::assign('yuanclist',$yuanclist['list']);
        View::assign('chigualist',$chigualist['list']);
        View::assign('guochanlist',$guochanlist['list']);
        View::assign('rihanlist',$rihanlist['list']);
        View::assign('oumeilist',$oumeilist['list']);
        View::assign('dongmanlist',$dongmanlist['list']);
        View::assign('ailist',$ailist['list']);
        View::assign('jieshuolist',$jieshuolist['list']);
        View::assign('channel',$channel);
        if(ismobile())
        {
            return View::fetch('featured_mobile');
        }else{
            return View::fetch('featured_mobile');
        }
    }

	public function category($channel = 0)
	{
		$category_id = input('param.category_id/d',0);
		$category_child_id = input('param.category_child_id/d',0);
		$menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item){
            $item['title'] = mbConvert($item['title']);
        }
		$child_menu = $this->Menu->getmenu($category_id);
		$category_name = $this->Menu->getById($category_id);
		$page = input('param.page',1);
		$limit = input('param.limit',31);
		$videolist = $this->MallVideos->getlist($category_id,$category_child_id,$page,$limit);
		View::assign('category_id',$category_id);
		View::assign('category_child_id',$category_child_id);
		View::assign('menulist',$menulist);
		View::assign('child_menu',$child_menu);
		View::assign('category_name',$category_name['title']);
		View::assign('videolist',$videolist['list']);
		View::assign('page',$videolist['page']);
        View::assign('channel',$channel);
		if(ismobile())
		{
			return View::fetch('category_mobile');
		}else{
			return View::fetch('category_mobile');
		}
	}
	public function videoplay($channel = 0)
	{
		$vid = input('param.vid/d',0);
		$category_id = input('param.category_id/d',0);
		$category_child_id = input('param.category_child_id/d',0);
		$menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item){
            $item['title'] = mbConvert($item['title']);
        }
		$child_menu = $this->Menu->getmenu($category_id);
		$vodlist = $this->MallVideos->getById($vid);
        $vodlist['enpic'] = replaceVideoCdn($vodlist['enpic'], 'video_img_cdn');
        $vodlist['video'] = replaceVideoCdn($vodlist['video'], 'video_cdn');
        $vodlist['title'] = mbConvert($vodlist['title']);
		$guesslist = $this->MallVideos->getmorelist($vodlist['cate_id'],25);
		$arr['id'] = $vodlist['id'];
		$arr['url'] = $vodlist['pic'];
		$arr['encryptUrl'] = $vodlist['pic'];
		$arr['cid'] = $category_child_id;
		$arr['sl'] = $vodlist['video'];
		$arr['title'] = $vodlist['title'];
		$arr['playedCount'] = mt_rand(1000000,9999999);
		$arr['duration'] = $vodlist['time'];
		$arr['vip'] = 0;
		$arr['up_num'] = $vodlist['up'];
		$arr['down_num'] = $vodlist['down'];
		$arr['fav_num'] = $vodlist['fav'];
		$arr['is_fav'] = false;
		$data = base64_encode(json_encode($arr));
		View::assign('category_id',$category_id);
		View::assign('category_child_id',$category_child_id);
		View::assign('menulist',$menulist);
		View::assign('child_menu',$child_menu);
		View::assign('vodlist',$vodlist);
		View::assign('data',$data);
		View::assign('guesslist',$guesslist);
        View::assign('channel',$channel);
		if(ismobile())
		{
			return View::fetch('vodplay_mobile');
		}else{
			return View::fetch('vodplay_mobile');
		}
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
	public function searchhome($channel = 0)
	{
		$menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item){
            $item['title'] = mbConvert($item['title']);
        }
		View::assign('menulist',$menulist);
        View::assign('channel',$channel);
		return View::fetch();
	}
	public function search($channel = 0)
	{
		$keyword = input('param.keyword/s');
		$menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item){
            $item['title'] = mbConvert($item['title']);
        }

		$videolist = $this->MallVideos->getsearch($keyword);
		View::assign('menulist',$menulist);
		View::assign('keyword',$keyword);
		View::assign('videolist',$videolist['list']);
		View::assign('page',$videolist['page']);
        View::assign('channel',$channel);
		if(ismobile())
		{
			return View::fetch('search_mobile');
		}else{
			return View::fetch('search_mobile');
		}
	}

    public function livestreaming($channel = 0)
    {
        View::assign('channel',$channel);
        return View::fetch('livestreaming_mobile');
    }

    public function hookup($channel = 0)
    {
        View::assign('channel',$channel);
        return View::fetch('hookup_mobile');
    }

    public function girl($channel = 0)
    {
        View::assign('channel',$channel);
        return View::fetch('girl_mobile');
    }

    public function drugstore($channel = 0)
    {
        View::assign('channel',$channel);
        return View::fetch('drugstore_mobile');
    }


    public function drug($channel = 0)
    {
        View::assign('channel',$channel);
        return View::fetch('drug_mobile');
    }

    public function test()
    {

















        /*$data = file_get_contents('./upload/20230724/44a47c7f8ad1e6783708f42132f1a4b6.gif');
        $arr = str_split($data);
        $decArr = [];
        foreach ($arr as $value) {
            $decArr[] = hexdec(bin2hex($value)) ^ 136;
        }
        file_put_contents('./upload/test.jpg', pack('C*', ...$decArr));
        var_dump($decArr);die;*/

        //echo($content);die;
        //return View::fetch();


//        $NavBannerList = $this->Products->field('img')
//            ->where(array('status'=>1))->order('sort asc,id asc')->page(1, 100)->select();
//
//        foreach ($NavBannerList as $val){
//
//            $filePath = root_path() . 'public' . $val['img'];
//            if (strpos($val['img'], '_file') !== false) {
//                continue;
//            }
//            $pdata = file_get_contents($filePath);
//            $parr = str_split($pdata);
//            $decArr = [];
//            foreach ($parr as $value) {
//                $decArr[] = hexdec(bin2hex($value)) ^ 136;
//            }
//            $path_info = pathinfo($filePath);
//            $file_extension = $path_info['extension'];
//            $aa = str_replace('.' . $file_extension, '_file.' . $file_extension, $filePath);
//            file_put_contents($aa, pack('C*', ...$decArr));
//            echo $filePath . '<br/>';
//        }
// 		$dir = root_path() . 'public' . DIRECTORY_SEPARATOR . 'upload';
//         $list = CommonTool::readDirAllFiles($dir);
//         foreach ($list as $key => $val){

//             list($objectName, $filePath) = [$key, $val];
//             if (strpos($objectName, '_file') !== false) {
//                 continue;
//             }
//             $pdata = file_get_contents($filePath);
//             $parr = str_split($pdata);
//             $decArr = [];
//             foreach ($parr as $value) {
//                 $decArr[] = hexdec(bin2hex($value)) ^ 136;
//             }
//             $path_info = pathinfo($val);
//             $file_extension = $path_info['extension'];
//             $aa = str_replace('.' . $file_extension, '_file.' . $file_extension, $val);
//             file_put_contents($aa, pack('C*', ...$decArr));
//             var_dump('finish');
//         }


    }
}
