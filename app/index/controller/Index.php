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

        //小说model
        $this->NovelMenu = new \app\admin\model\MallNovelcate();
        $this->Novel = new \app\admin\model\MallNovels();
        $this->NovelCatalogs = new \app\admin\model\NovelCatalogs();

        //漫画model
        $this->ComicMenu = new \app\admin\model\MallComiccate();
        $this->Comic = new \app\admin\model\MallComics();
        $this->ComicCatalogs = new \app\admin\model\ComicCatalogs();



        $channel = $this->request->param('channel',0);
        $channelInfo = $this->Channelcode->getChannelInfo($channel);
        $statistics_code = $channelInfo['statistics_code'] ?? null;
        View::assign('tongjiCode',$statistics_code);

        $action = $this->request->action();

        $jscsscdn = sysconfig('site', 'jscss_cdn');
        $onlinekf = sysconfig('site', 'onlinekf');
        $onlineemail = sysconfig('site', 'onlineemail');
        $foreverurl = sysconfig('site', 'foreverurl');
        $bdtongji = sysconfig('site', 'bdtongji');
        View::assign('jscsscdn',$jscsscdn);
        View::assign('onlinekf',$onlinekf);
        View::assign('onlineemail',$onlineemail);
        View::assign('foreverurl',$foreverurl);
        View::assign('bdtongji',$bdtongji);
        View::assign('action',$action);


        //全站广告开始
        //全站-顶部-文字广告 3       $XSudokuTextList
        $XSudokuTextList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '3'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

        foreach ($XSudokuTextList as $key => &$item) {
            $item['url'] = mbConvert($item['androidurl']);
            $item['name'] = mbConvert($item['name']);
            $item['icon'] = ["h","n","h","n"][mt_rand(0,3)];
        }
        View::assign('XSudokuTextList',$XSudokuTextList);


        //全站-顶部横幅-单个广告 63 $XTopHFList
        $XTopHFList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
            ->where(array('status'=>1,'is_banner'=>0))
            ->where(['pid' => '63'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();
        foreach ($XTopHFList as $key => &$item) {
            $item['url'] = mbConvert($item['androidurl']);
            if (strpos($item['img'], 'http') === false) {
                $item['img'] = mbConvert(replaceAdCdn($item['img']));
            }
        }
        View::assign('XTopHFList',$XTopHFList);


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

        //全站广告结束
        if($action == 'nav'){
            //导航-banner轮播图 10 $NavBannerList
            $NavBannerList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>1))
                ->where(['pid' => '10'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavBannerList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('NavBannerList',$NavBannerList);

            //导航-影院-九宫格 11     $NavCinemaSudokuList
            $NavCinemaSudokuList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '11'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
            foreach ($NavCinemaSudokuList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('NavCinemaSudokuList',$NavCinemaSudokuList);

            //导航-影院-直播大图 12 $NavCinemaLiveList
            $NavCinemaLiveList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '12'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
            foreach ($NavCinemaLiveList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['name'] = mbConvert($item['name']);
                $item['yueNum'] = mt_rand(403,4000);
                $item['juli'] = mt_rand(65,8665);
            }
            View::assign('NavCinemaLiveList',$NavCinemaLiveList);

            //导航-影院-约会大图 13 $NavCinemaHookupList
            $NavCinemaHookupList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '13'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
            foreach ($NavCinemaHookupList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['names'] = mbConvert(explode('<br />', nl2br($item['name'])));
                $item['yueNum'] = mt_rand(403,4000);
                $item['juli'] = mt_rand(65,8665);
            }
            View::assign('NavCinemaHookupList',$NavCinemaHookupList);

            //导航-影院-药品大图 14 $NavCinemaMedicineList
            $NavCinemaMedicineList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '14'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
            foreach ($NavCinemaMedicineList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['names'] = mbConvert(explode('<br />', nl2br($item['name'])));
                $item['yueNum'] = mt_rand(403,4000);
                $item['juli'] = mt_rand(65,8665);
            }
            View::assign('NavCinemaMedicineList',$NavCinemaMedicineList);

            //导航-BC-九宫格 17.      $NavBCSudokuList
            $NavBCSudokuList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '17'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavBCSudokuList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('NavBCSudokuList',$NavBCSudokuList);

            //导航-BC-直播大图 18.  $NavBCLiveList
            $NavBCLiveList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '18'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavBCLiveList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['name'] = mbConvert($item['name']);
                $item['yueNum'] = mt_rand(403,4000);
                $item['juli'] = mt_rand(65,8665);
            }
            View::assign('NavBCLiveList',$NavBCLiveList);

            //导航-BC-约会大图 19.  $NavBCHookupList
            $NavBCHookupList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '19'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavBCHookupList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['names'] = mbConvert(explode('<br />', nl2br($item['name'])));
                $item['yueNum'] = mt_rand(403,4000);
                $item['juli'] = mt_rand(65,8665);
            }
            View::assign('NavBCHookupList',$NavBCHookupList);

            //导航-BC-药品大图 20.  $NavBCMedicineList
            $NavBCMedicineList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '20'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavBCMedicineList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['names'] = mbConvert(explode('<br />', nl2br($item['name'])));
                $item['yueNum'] = mt_rand(403,4000);
                $item['juli'] = mt_rand(65,8665);
            }
            View::assign('NavBCMedicineList',$NavBCMedicineList);

            //导航-热门-九宫格 21.    $NavHotSudokuList
            $NavHotSudokuList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '21'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavHotSudokuList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('NavHotSudokuList',$NavHotSudokuList);

            //导航-热门-直播大图 22 $NavHotLiveList
            $NavHotLiveList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '22'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavHotLiveList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['name'] = mbConvert($item['name']);
                $item['yueNum'] = mt_rand(403,4000);
                $item['juli'] = mt_rand(65,8665);
            }
            View::assign('NavHotLiveList',$NavHotLiveList);

            //导航-热门-约会大图 23 $NavHotHookupList
            $NavHotHookupList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '23'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavHotHookupList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['names'] = mbConvert(explode('<br />', nl2br($item['name'])));
                $item['yueNum'] = mt_rand(403,4000);
                $item['juli'] = mt_rand(65,8665);
            }
            View::assign('NavHotHookupList',$NavHotHookupList);

            //导航-热门-药品大图 24 $NavHotMedicineList
            $NavHotMedicineList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '24'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavHotMedicineList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['names'] = mbConvert(explode('<br />', nl2br($item['name'])));
                $item['yueNum'] = mt_rand(403,4000);
                $item['juli'] = mt_rand(65,8665);
            }
            View::assign('NavHotMedicineList',$NavHotMedicineList);

            //导航-九宫格中部文字广告 60   $NavSudokuMiddleTextList
            $NavSudokuMiddleTextList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '60'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavSudokuMiddleTextList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                $item['name'] = mbConvert($item['name']);
                $item['icon'] = ["h","n","h","n"][mt_rand(0,3)];
            }
            View::assign('NavSudokuMiddleTextList',$NavSudokuMiddleTextList);

            //导航-九宫格底部文字广告 61   $NavSudokuBottomTextList
            $NavSudokuBottomTextList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '61'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavSudokuBottomTextList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                $item['name'] = mbConvert($item['name']);
                $item['icon'] = ["h","n","h","n"][mt_rand(0,3)];
            }
            View::assign('NavSudokuBottomTextList',$NavSudokuBottomTextList);

        }else{
            //X站banner轮播图 1        $XBannerList
            $XBannerList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>1))
                ->where(['pid' => '1'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($XBannerList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XBannerList',$XBannerList);

            //X站九宫格. 2                   $XSudokuList
            $XSudokuList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '2'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($XSudokuList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XSudokuList',$XSudokuList);

            //X站-列表页-插入广告 4 $XVideoListInsertList
            $XVideoListInsertList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '4'])->order('sort asc,id asc')->page(1, 2)->cache(1200)->select();

            foreach ($XVideoListInsertList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XVideoListInsertList',$XVideoListInsertList);

            //X站-播放页-贴片 6      $XPlayVideoPatch
            $XPlayVideoPatch = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '6'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();

            foreach ($XPlayVideoPatch as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XPlayVideoPatch',$XPlayVideoPatch);

            //X站底飘 7                     $XBottomFloat
            $XBottomFloat = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '7'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();

            foreach ($XBottomFloat as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XBottomFloat',$XBottomFloat);

            //X站小飘窗 8                 $XFloating
            $XFloating = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '8'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();

            foreach ($XFloating as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XFloating',$XFloating);


            //X站-中部-文字九宫格 58            $XRecommendTextList
            $XRecommendTextList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '58'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($XRecommendTextList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XRecommendTextList',$XRecommendTextList);


            //X站-底部-文字九宫格 59            $XGuessTextList
            $XGuessTextList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '59'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($XGuessTextList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XGuessTextList',$XGuessTextList);


            //新-X站-底部横幅-单个广告 65 $XBottomHFList
            $XBottomHFList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '65'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();
            foreach ($XBottomHFList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XBottomHFList',$XBottomHFList);



            //X站-分类视频精选-顶部-文字九宫格 66 $XTopVideoTextList
            $XTopVideoTextList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '66'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
            foreach ($XTopVideoTextList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XTopVideoTextList',$XTopVideoTextList);



            //X站-顶部-banner轮播图 67 $XTopBannerHFList
            $XTopBannerHFList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '67'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();
            foreach ($XTopBannerHFList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XTopBannerHFList',$XTopBannerHFList);



            //X站-分类视频精选-底部-banner轮播图 68 $XCateVideoBottomHFList
            $XCateVideoBottomHFList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '68'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();
            foreach ($XCateVideoBottomHFList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XCateVideoBottomHFList',$XCateVideoBottomHFList);



            //X站-分类视频精选-底部-文字九宫格 69 $XCateVideoBottomTextList
            $XCateVideoBottomTextList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '69'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
            foreach ($XCateVideoBottomTextList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XCateVideoBottomTextList',$XCateVideoBottomTextList);


            //X站-分类视频精选-底部-图片九宫格 70 $XCateVideoBottomSudokuList
            $XCateVideoBottomSudokuList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '70'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
            foreach ($XCateVideoBottomSudokuList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XCateVideoBottomSudokuList',$XCateVideoBottomSudokuList);


            //X站-播放器底部-banner轮播图 71 $XVideoBottomHFList
            $XVideoBottomHFList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '71'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();
            foreach ($XVideoBottomHFList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XVideoBottomHFList',$XVideoBottomHFList);


            //X站-顶部-文字九宫格 72 $XTopTextList
            $XTopTextList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '72'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
            foreach ($XTopTextList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XTopTextList',$XTopTextList);

            //X站-分类/搜索/猜你喜欢-标题右侧-文字广告  73 $XCategoryTitleTextList
            $XCategoryTitleTextList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '73'])->order('sort asc,id asc')->page(1, 3)->cache(1200)->select();
            foreach ($XCategoryTitleTextList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XCategoryTitleTextList',$XCategoryTitleTextList);

            //X站-分类/搜索/猜你喜欢-视频列表-封面广告 74 $XCategoryVideoListInsertList
            $XCategoryVideoListInsertList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '74'])->order('sort asc,id asc')->page(1, 2)->cache(1200)->select();

            foreach ($XCategoryVideoListInsertList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XCategoryVideoListInsertList',$XCategoryVideoListInsertList);


            //X站-小说漫画-简介-横幅广告 80 $XMhJJHFList
            $XMhJJHFList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '80'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();
            foreach ($XMhJJHFList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XMhJJHFList',$XMhJJHFList);

            //X站-小说漫画-正文头部-横幅广告 81 $XMhTopHFList
            $XMhTopHFList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '81'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();
            foreach ($XMhTopHFList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XMhTopHFList',$XMhTopHFList);


            //X站-小说漫画-正文尾部-横幅广告 82 $XMhBottomHFList
            $XMhBottomHFList = $this->Products->field('id,img,name,androidurl,is_apk,is_browser,iosurl,downnum')
                ->where(array('status'=>1,'is_banner'=>0))
                ->where(['pid' => '82'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();
            foreach ($XMhBottomHFList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XMhBottomHFList',$XMhBottomHFList);

        }
    }
	public function nav($channel = 0)
	{
		$menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item){
            $item['title'] = mbConvert($item['title']);
        }
		View::assign('menulist',$menulist);
        View::assign('channel',$channel);
		if(ismobile())
		{
			return View::fetch('index_mobile');
		}else{
			return View::fetch('index_mobile');
		}
	}

    public function index($channel = 0)
    {
        if(empty($channel)){
            return response('403 access forbidden!', 403);
        }
        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item){
            $item['title'] = mbConvert($item['title']);
        }
        $newlist = $this->MallVideos->getlist(40,0,1,6);
        $pxlist = $this->MallVideos->getlist(12,0,1,6);
        $yuanclist = $this->MallVideos->getlist(11,0,1,6);
        $chigualist = $this->MallVideos->getlist(1,0,1,6);
        $guochanlist = $this->MallVideos->getlist(14,0,1,6);
        $rihanlist = $this->MallVideos->getlist(3,0,1,6);
        $oumeilist = $this->MallVideos->getlist(4,0,1,6);
        $dongmanlist = $this->MallVideos->getlist(5,0,1,6);
        $ailist = $this->MallVideos->getlist(6,0,1,6);
        $jieshuolist = $this->MallVideos->getlist(8,0,1,6);
        View::assign('menulist',$menulist);
        View::assign('newlist',$newlist['list']);
        View::assign('pxlist',$pxlist['list']);
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
		$limit = input('param.limit',32);
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
        $page = input('param.page',1);
        $limit = input('param.limit',21);
		$child_menu = $this->Menu->getmenu($category_id);
		$vodlist = $this->MallVideos->getById($vid);
        $vodlist['enpic'] = replaceVideoCdn($vodlist['enpic'], 'video_img_cdn');
        $vodlist['video'] = replaceVideoCdn($vodlist['video'], 'video_cdn');
        $vodlist['title'] = mbConvert($vodlist['title']);
		$guesslist = $this->MallVideos->getmorelist($vodlist['cate_id'],$page,$limit);
        $category = $this->Menu->getCateInfo($vodlist['cate_id']);
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
		View::assign('guesslist',$guesslist['list']);
        View::assign('page',$guesslist['page']);
        View::assign('channel',$channel);
        View::assign('category',$category);
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

    public function getfeatured()
    {
        $category_id = input('param.category_id/d',0);
        $page = input('param.page/d',1);
        $pageSize = input('param.size/d',6);
        $list = $this->MallVideos->getlist($category_id,0,$page,$pageSize);
        $res = [];
        foreach ($list['list'] as $val){
            $res[] = array(
                'id' => $val['id'],
                'enpic' => $val['enpic'],
                'eye' => qqw($val['eye']),
                'time' => $val['time'],
                'title' => $val['title'],
                'category_id' => $val['cate_id'],
                'category_child_id' => 0,
            );


        }
        header('Content-type: application/json');
        return json_encode($res);
    }


//    小说
    public function novel($channel = 0)
    {
        $sort = input('param.sort/d',1);
        $cid = input('param.cid/d',0);
        $bang = 'renqi';
        $bangtitle = '人气榜';
        switch ($sort){
            case 1:
                $bang = 'renqi';
                $bangtitle = '人气榜';
                break;
            case 2:
                $bang = 'tuijian';
                $bangtitle = '推荐榜';
                break;
            case 3:
                $bang = 'shoucang';
                $bangtitle = '收藏榜';
                break;
            case 4:
                $bang = 'eye';
                $bangtitle = '热搜榜';
        }
        $novelmenulist = $this->NovelMenu->getmenu(0);
        $novelMenuArray = [];
        foreach ($novelmenulist as &$item){
            $item['title'] = mbConvert($item['title']);
            $novelMenuArray[$item['id']] = $item['title'];
        }
        //主编力荐
        $tjlist = $this->Novel->getlist(0,1,30,'tuijian');
        foreach ($tjlist['list'] as $item){
            $item['cate'] = $novelMenuArray[$item['cate_id']];
        }
        //榜单
        $bdlist = $this->Novel->getorderlist($bang,10);
        foreach ($bdlist as $item){
            $item['cate'] = $novelMenuArray[$item['cate_id']];
        }
        //分类
        $fllist = $this->Novel->getlist($cid,1,12);
        foreach ($fllist['list'] as $item){
            $item['cate'] = $novelMenuArray[$item['cate_id']];
        }

        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item){
            $item['title'] = mbConvert($item['title']);
        }
        $tjlist_banner=[];
        for($i=0;$i<ceil(count($tjlist["list"]->toArray()["data"])/6);$i++){
            $tjlist_banner[]=array_slice($tjlist["list"]->toArray()["data"],$i*6,6);
        }
        $novelMenuArray[0] = "全部题材";
        View::assign('sort',$sort);
        View::assign('cid',$cid);
        View::assign('catetitle',$novelMenuArray[$cid]);
        View::assign('bangtitle',$bangtitle);
        View::assign('tjlist',$tjlist_banner);
        View::assign('bdlist',$bdlist);
        View::assign('fllist',$fllist['list']);
        View::assign('novelmenulist',$novelmenulist);
        View::assign('menulist',$menulist);
        View::assign('channel',$channel);
        return View::fetch();
    }

    public function novel_category($channel = 0)
    {
        $cid = input('param.cid/d',0);

        $sort = input('param.sort/d',0);
        $order = "create_time";
        switch ($sort){
            case 1:
                $order = 'create_time';
                break;
            case 2:
                $order = 'eye';
                break;
            case 3:
                $order = 'shoucang';
                break;
        }
        $page = input('param.page',1);
        $limit = input('param.limit',10);
        $novellist = $this->Novel->getlist($cid,$page,$limit,$order);

        $novelmenulist = $this->NovelMenu->getmenu(0);
        $novelMenuArray = [];
        foreach ($novelmenulist as &$item){
            $item['title'] = mbConvert($item['title']);
            $novelMenuArray[$item['id']] = $item['title'];
        }

        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item){
            $item['title'] = mbConvert($item['title']);
        }
        $novelMenuArray[0] = "全部题材";
        View::assign('cid',$cid);
        View::assign('catetitle',$novelMenuArray[$cid]);
        View::assign('sort',$sort);
        View::assign('novellist',$novellist['list']);
        View::assign('page',$novellist['page']);
        View::assign('novelmenulist',$novelmenulist);
        View::assign('menulist',$menulist);
        View::assign('channel',$channel);
        return View::fetch();
    }

    public function novel_rank($channel = 0)
    {
        $sort = input('param.sort/d',1);
        $bang = 'renqi';
        $bangtitle = '人气榜';
        switch ($sort){
            case 1:
                $bang = 'renqi';
                $bangtitle = '人气榜';
                break;
            case 2:
                $bang = 'tuijian';
                $bangtitle = '推荐榜';
                break;
            case 3:
                $bang = 'shoucang';
                $bangtitle = '收藏榜';
                break;
            case 4:
                $bang = 'eye';
                $bangtitle = '热搜榜';
        }
        $page = input('param.page',1);
        $limit = input('param.limit',10);
        //榜单
        $bdlist = $this->Novel->getlist(0,$page,$limit,$bang);

        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item){
            $item['title'] = mbConvert($item['title']);
        }
        View::assign('sort',$sort);
        View::assign('bangtitle',$bangtitle);
        View::assign('bdlist',$bdlist['list']);
        View::assign('page',$bdlist['page']);
        View::assign('page2',$page);
        View::assign('menulist',$menulist);
        View::assign('channel',$channel);
        return View::fetch();
    }

    public function novel_detail($channel = 0)
    {
        $novelId = input('param.novel_id/d',0);

        $novel = $this->Novel->getById($novelId);
        $novel['enpic'] = mbConvert(replaceManhuaCdn($novel['pic']));
        $novel['title'] = mbConvert($novel['title']);

        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item){
            $item['title'] = mbConvert($item['title']);
        }
        $page = input('param.page',1);
        $limit = input('param.limit',12);
        //榜单
        $tjlist = $this->Novel->getmorelist($novel['cate_id'],$page,$limit);

        //章节列表
        $cataloglist = $this->NovelCatalogs->getlist($novelId);
        $catalogcount = count($cataloglist);

        $novelmenulist = $this->NovelMenu->getmenu(0);
        $novelMenuArray = [];
        foreach ($novelmenulist as &$item){
            $item['title'] = mbConvert($item['title']);
            $novelMenuArray[$item['id']] = $item['title'];
        }

        View::assign('cataloglist',$cataloglist);
        View::assign('catetitle',$novelMenuArray[$novel['cate_id']]);
        View::assign('catalogcount',$catalogcount);
        View::assign('tjlist',$tjlist['list']);
        View::assign('page',$tjlist['page']);
        View::assign('novel',$novel);
        View::assign('menulist',$menulist);
        View::assign('channel',$channel);
        return View::fetch();
    }

    public function novel_chapter($channel = 0)
    {
        $chapterId = input('param.chapter_id/d',0);
        $chapter = $this->NovelCatalogs->getById($chapterId);
        $novel = $this->Novel->getById($chapter['novel_id']);
        //章节列表
        $cataloglist = $this->NovelCatalogs->getlist($chapter['novel_id']);

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
        View::assign('pre',$pre);
        View::assign('next',$next);
        View::assign('cataloglist',$cataloglist);
        View::assign('catalogcount',$catalogcount);
        View::assign('novel',$novel);
        View::assign('chapter',$chapter);
        View::assign('channel',$channel);
        return View::fetch();
    }

//    漫画
    public function comic($channel = 0)
    {
        $sort = input('param.sort/d',1);
        $cid = input('param.cid/d',0);
        $bang = 'renqi';
        $bangtitle = '人气榜';
        switch ($sort){
            case 1:
                $bang = 'renqi';
                $bangtitle = '人气榜';
                break;
            case 2:
                $bang = 'tuijian';
                $bangtitle = '推荐榜';
                break;
            case 3:
                $bang = 'shoucang';
                $bangtitle = '收藏榜';
                break;
            case 4:
                $bang = 'eye';
                $bangtitle = '热搜榜';
        }
        $novelmenulist = $this->ComicMenu->getmenu(0);
        $novelMenuArray = [];
        foreach ($novelmenulist as &$item){
            $item['title'] = mbConvert($item['title']);
            $novelMenuArray[$item['id']] = $item['title'];
        }
        //主编力荐
        $tjlist = $this->Comic->getlist(0,1,30,'tuijian');
        foreach ($tjlist['list'] as $item){
            $item['cate'] = $novelMenuArray[$item['cate_id']];
        }
        //榜单
        $bdlist = $this->Comic->getorderlist($bang,10);
        foreach ($bdlist as $item){
            $item['cate'] = $novelMenuArray[$item['cate_id']];
        }
        //分类
        $fllist = $this->Comic->getlist($cid,1,12);
        foreach ($fllist['list'] as $item){
            $item['cate'] = $novelMenuArray[$item['cate_id']];
        }

        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item){
            $item['title'] = mbConvert($item['title']);
        }
        $tjlist_banner=[];
        for($i=0;$i<ceil(count($tjlist["list"]->toArray()["data"])/6);$i++){
            $tjlist_banner[]=array_slice($tjlist["list"]->toArray()["data"],$i*6,6);
        }
        $novelMenuArray[0] = "全部题材";
        View::assign('sort',$sort);
        View::assign('cid',$cid);
        View::assign('catetitle',$novelMenuArray[$cid]);
        View::assign('bangtitle',$bangtitle);
        View::assign('tjlist',$tjlist_banner);
        View::assign('bdlist',$bdlist);
        View::assign('fllist',$fllist['list']);
        View::assign('novelmenulist',$novelmenulist);
        View::assign('menulist',$menulist);
        View::assign('channel',$channel);
        return View::fetch();
    }

    public function comic_category($channel = 0)
    {
        $cid = input('param.cid/d',0);

        $sort = input('param.sort/d',0);
        $order = "create_time";
        switch ($sort){
            case 1:
                $order = 'create_time';
                break;
            case 2:
                $order = 'eye';
                break;
            case 3:
                $order = 'shoucang';
                break;
        }
        $page = input('param.page',1);
        $limit = input('param.limit',10);
        $novellist = $this->Comic->getlist($cid,$page,$limit,$order);

        $novelmenulist = $this->ComicMenu->getmenu(0);
        $novelMenuArray = [];
        foreach ($novelmenulist as &$item){
            $item['title'] = mbConvert($item['title']);
            $novelMenuArray[$item['id']] = $item['title'];
        }

        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item){
            $item['title'] = mbConvert($item['title']);
        }
        $novelMenuArray[0] = "全部题材";
        View::assign('cid',$cid);
        View::assign('catetitle',$novelMenuArray[$cid]);
        View::assign('sort',$sort);
        View::assign('novellist',$novellist['list']);
        View::assign('page',$novellist['page']);
        View::assign('novelmenulist',$novelmenulist);
        View::assign('menulist',$menulist);
        View::assign('channel',$channel);
        return View::fetch();
    }

    public function comic_rank($channel = 0)
    {
        $sort = input('param.sort/d',1);
        $bang = 'renqi';
        $bangtitle = '人气榜';
        switch ($sort){
            case 1:
                $bang = 'renqi';
                $bangtitle = '人气榜';
                break;
            case 2:
                $bang = 'tuijian';
                $bangtitle = '推荐榜';
                break;
            case 3:
                $bang = 'shoucang';
                $bangtitle = '收藏榜';
                break;
            case 4:
                $bang = 'eye';
                $bangtitle = '热搜榜';
        }
        $page = input('param.page',1);
        $limit = input('param.limit',10);
        //榜单
        $bdlist = $this->Comic->getlist(0,$page,$limit,$bang);

        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item){
            $item['title'] = mbConvert($item['title']);
        }
        View::assign('sort',$sort);
        View::assign('bangtitle',$bangtitle);
        View::assign('bdlist',$bdlist['list']);
        View::assign('page',$bdlist['page']);
        View::assign('page2',$page);
        View::assign('menulist',$menulist);
        View::assign('channel',$channel);
        return View::fetch();
    }

    public function comic_detail($channel = 0)
    {
        $novelId = input('param.novel_id/d',0);

        $novel = $this->Comic->getById($novelId);
        $novel['enpic'] = mbConvert(replaceManhuaCdn($novel['pic']));
        $novel['title'] = mbConvert($novel['title']);

        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item){
            $item['title'] = mbConvert($item['title']);
        }
        $page = input('param.page',1);
        $limit = input('param.limit',12);
        //榜单
        $tjlist = $this->Comic->getmorelist($novel['cate_id'],$page,$limit);

        //章节列表
        $cataloglist = $this->ComicCatalogs->getlist($novelId);
        $catalogcount = count($cataloglist);

        $novelmenulist = $this->ComicMenu->getmenu(0);
        $novelMenuArray = [];
        foreach ($novelmenulist as &$item){
            $item['title'] = mbConvert($item['title']);
            $novelMenuArray[$item['id']] = $item['title'];
        }

        View::assign('cataloglist',$cataloglist);
        View::assign('catetitle',$novelMenuArray[$novel['cate_id']]);
        View::assign('catalogcount',$catalogcount);
        View::assign('tjlist',$tjlist['list']);
        View::assign('page',$tjlist['page']);
        View::assign('novel',$novel);
        View::assign('menulist',$menulist);
        View::assign('channel',$channel);
        return View::fetch();
    }

    public function comic_chapter($channel = 0)
    {
        $chapterId = input('param.chapter_id/d',0);
        $chapter = $this->ComicCatalogs->getById($chapterId);
        $novel = $this->Comic->getById($chapter['novel_id']);
        //章节列表
        $cataloglist = $this->ComicCatalogs->getlist($chapter['novel_id']);

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
        return View::fetch();
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
