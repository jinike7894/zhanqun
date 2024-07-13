<?php
namespace app\index\controller;

use app\BaseController;
use think\facade\View;

class Index extends BaseController
{
	public function initialize()
	{
		$this->Menu = new \app\admin\model\MallCate();
		$this->MallVideos = new \app\admin\model\MallVideos();
        $this->Products = new \app\common\model\Products();

        $action = $this->request->action();

        //X站banner轮播图 1        $XBannerList
        $XBannerList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>1))
            ->where(['pid' => '1'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
        View::assign('XBannerList',$XBannerList);

        //X站九宫格. 2                   $XSudokuList
        $XSudokuList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '2'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
        View::assign('XSudokuList',$XSudokuList);

        //X站文字九宫格 3            $XSudokuTextList
        $XSudokuTextList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '3'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
        View::assign('XSudokuTextList',$XSudokuTextList);

        //X站-列表页-插入广告 4 $XVideoListInsertList
        $XVideoListInsertList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '4'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
        View::assign('XVideoListInsertList',$XVideoListInsertList);

        //X站-猜你喜欢列表页-插入广告 5 $XGuessVideoInsertList
        $XGuessVideoInsertList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '5'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
        View::assign('XGuessVideoInsertList',$XGuessVideoInsertList);

        //X站-播放页-贴片 6      $XPlayVideoPatch
        $XPlayVideoPatch = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '6'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();
        View::assign('XPlayVideoPatch',$XPlayVideoPatch);

        //X站底飘 7                     $XBottomFloat
        $XBottomFloat = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '7'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();
        View::assign('XBottomFloat',$XBottomFloat);

        //X站小飘窗 8                 $XFloating
        $XFloating = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '8'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();
        View::assign('XFloating',$XFloating);

        //X站弹窗位 9                 $XPopUpList
        $XPopUpList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '9'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
        View::assign('XPopUpList',$XPopUpList);

        //导航-banner轮播图 10 $NavBannerList
        $NavBannerList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '10'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
        View::assign('NavBannerList',$NavBannerList);

        //导航-影院-九宫格 11     $NavCinemaSudokuList
        $NavCinemaSudokuList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '11'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
        View::assign('NavCinemaSudokuList',$NavCinemaSudokuList);

        //导航-影院-直播大图 12 $NavCinemaLiveList
        $NavCinemaLiveList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '12'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
        View::assign('NavCinemaLiveList',$NavCinemaLiveList);

        //导航-影院-约会大图 13 $NavCinemaHookupList
        $NavCinemaHookupList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '13'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
        View::assign('NavCinemaHookupList',$NavCinemaHookupList);

        //导航-影院-药品大图 14 $NavCinemaMedicineList
        $NavCinemaMedicineList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '14'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
        View::assign('NavCinemaMedicineList',$NavCinemaMedicineList);


        //导航-BC-九宫格 17.      $NavBCSudokuList
        $NavBCSudokuList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '17'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
        View::assign('NavBCSudokuList',$NavBCSudokuList);

        //导航-BC-直播大图 18.  $NavBCLiveList
        $NavBCLiveList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '18'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
        View::assign('NavBCLiveList',$NavBCLiveList);

        //导航-BC-约会大图 19.  $NavBCHookupList
        $NavBCHookupList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '19'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
        View::assign('NavBCHookupList',$NavBCHookupList);

        //导航-BC-药品大图 20.  $NavBCMedicineList
        $NavBCMedicineList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '20'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
        View::assign('NavBCMedicineList',$NavBCMedicineList);



        //导航-热门-九宫格 21.    $NavHotSudokuList
        $NavHotSudokuList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '21'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
        View::assign('NavHotSudokuList',$NavHotSudokuList);

        //导航-热门-直播大图 22 $NavHotLiveList
        $NavHotLiveList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '22'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
        View::assign('NavHotLiveList',$NavHotLiveList);

        //导航-热门-约会大图 23 $NavHotHookupList
        $NavHotHookupList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '23'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
        View::assign('NavHotHookupList',$NavHotHookupList);

        //导航-热门-药品大图 24 $NavHotMedicineList
        $NavHotMedicineList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '24'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
        View::assign('NavHotMedicineList',$NavHotMedicineList);




    }
	public function index($channel = 0)
	{
		$menulist = $this->Menu->getmenu(0);
		$newlist = $this->MallVideos->getorderlist('sort desc,create_time desc,id desc',24);
		$pxlist = $this->MallVideos->getorderlist('eye desc,id desc',30);
		$yuanclist = $this->MallVideos->getlist(40,0,1,12);
		$chigualist = $this->MallVideos->getlist(1,0,1,12);
		$guochanlist = $this->MallVideos->getlist(2,0,1,12);
		$rihanlist = $this->MallVideos->getlist(3,0,1,12);
		$oumeilist = $this->MallVideos->getlist(4,0,1,12);
		$dongmanlist = $this->MallVideos->getlist(5,0,1,12);
		$ailist = $this->MallVideos->getlist(6,0,1,12);
		$jieshuolist = $this->MallVideos->getlist(8,0,1,12);
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
			return View::fetch('index_mobile');
		}else{
			return View::fetch('index_mobile');
		}
	}
	public function category($channel = 0)
	{
		$category_id = input('param.category_id/d',0);
		$category_child_id = input('param.category_child_id/d',0);
		$menulist = $this->Menu->getmenu(0);
		$child_menu = $this->Menu->getmenu($category_id);
		$category_name = $this->Menu->getById($category_id);
		$page = input('param.page',1);
		$limit = input('param.limit',30);
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
		$child_menu = $this->Menu->getmenu($category_id);
		$vodlist = $this->MallVideos->getById($vid);
		$guesslist = $this->MallVideos->getmorelist($vodlist['cate_id'],24);
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
		View::assign('menulist',$menulist);
        View::assign('channel',$channel);
		return View::fetch();
	}
	public function search($channel = 0)
	{
		$keyword = input('param.keyword/s');
		$menulist = $this->Menu->getmenu(0);
	
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

    public function livestreaming($channel = 0){

        return View::fetch('livestreaming_mobile');
    }

    public function hookup($channel = 0){
        return View::fetch('hookup_mobile');
    }

    public function girl($channel = 0){
        return View::fetch('girl_mobile');
    }

    public function drugstore($channel = 0){
        return View::fetch('drugstore_mobile');
    }


    public function drug($channel = 0){
        return View::fetch('drug_mobile');
    }


    public function featured($channel = 0){
        return View::fetch('featured_mobile');
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
		return View::fetch();
	}
}
