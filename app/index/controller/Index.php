<?php

namespace app\index\controller;

use app\BaseController;
use think\facade\View;
use EasyAdmin\tool\CommonTool;
use think\facade\Db;

class Index extends BaseController
{
    public  $site = "8";
    public function initialize()
    {

        $this->Menu = new \app\admin\model\MallCate();
        $this->MallVideos = new \app\admin\model\MallVideos();
        $this->Products = new \app\common\model\Products();
        $this->Pcategory = new \app\common\model\Pcategory();
        $this->Channelcode = new \app\common\model\Channelcode();

        //小说model
        $this->NovelMenu = new \app\admin\model\MallNovelcate();
        $this->Novel = new \app\admin\model\MallNovels();
        $this->NovelCatalogs = new \app\admin\model\NovelCatalogs();

        //漫画model
        $this->ComicMenu = new \app\admin\model\MallComiccate();
        $this->Comic = new \app\admin\model\MallComics();
        $this->ComicCatalogs = new \app\admin\model\ComicCatalogs();



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
        $logo = Db::name("site")->where("id", $this->site)->find();
        View::assign('logo', $logo["icon"]);
        $jscsscdn = sysconfig('site', 'jscss_cdn');
        $onlinekf = sysconfig('site', 'onlinekf');
        $onlineemail = sysconfig('site', 'onlineemail');
        $foreverurl = sysconfig('site', 'foreverurl');
        $bdtongji = sysconfig('site', 'bdtongji');
        $tuoyilink = "https://c.tuoya2.cc?c=2039";
        //漫画小说cdn
        $tmimg = sysconfig('site', 'manhua_img_cdn');
        View::assign('tmimg', $tmimg);
        //图片cdn
        $img_cdn = sysconfig('site', 'img_cdn');
        View::assign('img_cdn', $img_cdn);
        //视频封面cdn
        $videoimg = sysconfig('site', 'video_img_cdn');
        View::assign('videoimg',$videoimg);

        
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
        $BannerList = checkDisplayAd($this->site, $BannerList);
        $BannerList = checkZhanneiAd($this->site, $BannerList,$channel);
        View::assign('BannerList', $BannerList);
        //获取缩边轮播图
        $BannerList2 = $this->Products
            ->where(array('status' => 1))
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
        $BannerList2 = checkDisplayAd($this->site, $BannerList2);
        $BannerList2 = checkZhanneiAd($this->site, $BannerList2,$channel);
        View::assign('BannerList2', $BannerList2);
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
            ->where(["pid" => 86])->order('sort asc,id asc')->page(1, 100)->select()->toArray();
        $zhong_img_ad = checkDisplayAd($this->site, $zhong_img_ad);
        $zhong_img_ad = checkZhanneiAd($this->site, $zhong_img_ad,$channel);
        View::assign('zhong_img_ad', $zhong_img_ad);











        //全站广告开始
        //全站-顶部-文字广告 3       $XSudokuTextList
        $XSudokuTextList = $this->Products
            ->where(array('status' => 1, 'is_banner' => 0))
            ->where(['pid' => '3'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

        foreach ($XSudokuTextList as $key => &$item) {
            $item['url'] = mbConvert($item['androidurl']);
            $item['name'] = mbConvert($item['name']);
            $item['icon'] = ["h", "n", "h", "n"][mt_rand(0, 3)];
        }
        View::assign('XSudokuTextList', $XSudokuTextList);


        //全站-顶部横幅-单个广告 63 $XTopHFList
        $XTopHFList = $this->Products
            ->where(array('status' => 1, 'is_banner' => 0))
            ->where(['pid' => '63'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();
        foreach ($XTopHFList as $key => &$item) {
            $item['url'] = mbConvert($item['androidurl']);
            if (strpos($item['img'], 'http') === false) {
                $item['img'] = mbConvert(replaceAdCdn($item['img']));
            }
        }
        View::assign('XTopHFList', $XTopHFList);


        //X站弹窗位 9                 $XPopUpList
        $XPopUpList = $this->Products
            ->where(array('status' => 1, 'is_banner' => 0))
            ->where(['pid' => '9'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

        foreach ($XPopUpList as $key => &$item) {
            $item['url'] = $item['androidurl'];
            if (strpos($item['img'], 'http') === false) {
                $item['img'] = replaceAdCdn($item['img']);
            }
        }
        View::assign('XPopUpList', $XPopUpList);

        //全站广告结束
        if ($action == 'nav') {
            //导航-banner轮播图 10 $NavBannerList
            $NavBannerList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 1))
                ->where(['pid' => '10'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavBannerList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('NavBannerList', $NavBannerList);

            //导航-影院-九宫格 11     $NavCinemaSudokuList
            $NavCinemaSudokuList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '11'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
            foreach ($NavCinemaSudokuList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('NavCinemaSudokuList', $NavCinemaSudokuList);

            //导航-影院-直播大图 12 $NavCinemaLiveList
            $NavCinemaLiveList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '12'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
            foreach ($NavCinemaLiveList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['name'] = mbConvert($item['name']);
                $item['yueNum'] = mt_rand(403, 4000);
                $item['juli'] = mt_rand(65, 8665);
            }
            View::assign('NavCinemaLiveList', $NavCinemaLiveList);

            //导航-影院-约会大图 13 $NavCinemaHookupList
            $NavCinemaHookupList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '13'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
            foreach ($NavCinemaHookupList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['names'] = mbConvert(explode('<br />', nl2br($item['name'])));
                $item['yueNum'] = mt_rand(403, 4000);
                $item['juli'] = mt_rand(65, 8665);
            }
            View::assign('NavCinemaHookupList', $NavCinemaHookupList);

            //导航-影院-药品大图 14 $NavCinemaMedicineList
            $NavCinemaMedicineList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '14'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
            foreach ($NavCinemaMedicineList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['names'] = mbConvert(explode('<br />', nl2br($item['name'])));
                $item['yueNum'] = mt_rand(403, 4000);
                $item['juli'] = mt_rand(65, 8665);
            }
            View::assign('NavCinemaMedicineList', $NavCinemaMedicineList);

            //导航-BC-九宫格 17.      $NavBCSudokuList
            $NavBCSudokuList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '17'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavBCSudokuList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('NavBCSudokuList', $NavBCSudokuList);

            //导航-BC-直播大图 18.  $NavBCLiveList
            $NavBCLiveList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '18'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavBCLiveList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['name'] = mbConvert($item['name']);
                $item['yueNum'] = mt_rand(403, 4000);
                $item['juli'] = mt_rand(65, 8665);
            }
            View::assign('NavBCLiveList', $NavBCLiveList);

            //导航-BC-约会大图 19.  $NavBCHookupList
            $NavBCHookupList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '19'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavBCHookupList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['names'] = mbConvert(explode('<br />', nl2br($item['name'])));
                $item['yueNum'] = mt_rand(403, 4000);
                $item['juli'] = mt_rand(65, 8665);
            }
            View::assign('NavBCHookupList', $NavBCHookupList);

            //导航-BC-药品大图 20.  $NavBCMedicineList
            $NavBCMedicineList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '20'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavBCMedicineList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['names'] = mbConvert(explode('<br />', nl2br($item['name'])));
                $item['yueNum'] = mt_rand(403, 4000);
                $item['juli'] = mt_rand(65, 8665);
            }
            View::assign('NavBCMedicineList', $NavBCMedicineList);

            //导航-热门-九宫格 21.    $NavHotSudokuList
            $NavHotSudokuList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '21'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavHotSudokuList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('NavHotSudokuList', $NavHotSudokuList);

            //导航-热门-直播大图 22 $NavHotLiveList
            $NavHotLiveList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '22'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavHotLiveList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['name'] = mbConvert($item['name']);
                $item['yueNum'] = mt_rand(403, 4000);
                $item['juli'] = mt_rand(65, 8665);
            }
            View::assign('NavHotLiveList', $NavHotLiveList);

            //导航-热门-约会大图 23 $NavHotHookupList
            $NavHotHookupList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '23'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavHotHookupList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['names'] = mbConvert(explode('<br />', nl2br($item['name'])));
                $item['yueNum'] = mt_rand(403, 4000);
                $item['juli'] = mt_rand(65, 8665);
            }
            View::assign('NavHotHookupList', $NavHotHookupList);

            //导航-热门-药品大图 24 $NavHotMedicineList
            $NavHotMedicineList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '24'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavHotMedicineList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['names'] = mbConvert(explode('<br />', nl2br($item['name'])));
                $item['yueNum'] = mt_rand(403, 4000);
                $item['juli'] = mt_rand(65, 8665);
            }
            View::assign('NavHotMedicineList', $NavHotMedicineList);

            //导航-九宫格中部文字广告 60   $NavSudokuMiddleTextList
            $NavSudokuMiddleTextList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '60'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavSudokuMiddleTextList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                $item['name'] = mbConvert($item['name']);
                $item['icon'] = ["h", "n", "h", "n"][mt_rand(0, 3)];
            }
            View::assign('NavSudokuMiddleTextList', $NavSudokuMiddleTextList);

            //导航-九宫格底部文字广告 61   $NavSudokuBottomTextList
            $NavSudokuBottomTextList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '61'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($NavSudokuBottomTextList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                $item['name'] = mbConvert($item['name']);
                $item['icon'] = ["h", "n", "h", "n"][mt_rand(0, 3)];
            }
            View::assign('NavSudokuBottomTextList', $NavSudokuBottomTextList);
        } else {
            //X站banner轮播图 1        $XBannerList
            $XBannerList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 1))
                ->where(['pid' => '1'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($XBannerList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XBannerList', $XBannerList);

            //X站九宫格. 2                   $XSudokuList
            $XSudokuList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '2'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($XSudokuList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XSudokuList', $XSudokuList);

            //X站-列表页-插入广告 4 $XVideoListInsertList
            $XVideoListInsertList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '4'])->order('sort asc,id asc')->page(1, 2)->cache(1200)->select();

            foreach ($XVideoListInsertList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XVideoListInsertList', $XVideoListInsertList);

            //X站-播放页-贴片 6      $XPlayVideoPatch
            $XPlayVideoPatch = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '6'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();

            foreach ($XPlayVideoPatch as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XPlayVideoPatch', $XPlayVideoPatch);

            //X站底飘 7                     $XBottomFloat
            $XBottomFloat = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '7'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();

            foreach ($XBottomFloat as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XBottomFloat', $XBottomFloat);

            //X站小飘窗 8                 $XFloating
            $XFloating = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '8'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();

            foreach ($XFloating as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XFloating', $XFloating);


            //X站-中部-文字九宫格 58            $XRecommendTextList
            $XRecommendTextList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '58'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($XRecommendTextList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XRecommendTextList', $XRecommendTextList);


            //X站-底部-文字九宫格 59            $XGuessTextList
            $XGuessTextList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '59'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();

            foreach ($XGuessTextList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XGuessTextList', $XGuessTextList);


            //新-X站-底部横幅-单个广告 65 $XBottomHFList
            $XBottomHFList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '65'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();
            foreach ($XBottomHFList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XBottomHFList', $XBottomHFList);



            //X站-分类视频精选-顶部-文字九宫格 66 $XTopVideoTextList
            $XTopVideoTextList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '66'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
            foreach ($XTopVideoTextList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XTopVideoTextList', $XTopVideoTextList);



            //X站-顶部-banner轮播图 67 $XTopBannerHFList
            $XTopBannerHFList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '67'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();
            foreach ($XTopBannerHFList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XTopBannerHFList', $XTopBannerHFList);



            //X站-分类视频精选-底部-banner轮播图 68 $XCateVideoBottomHFList
            $XCateVideoBottomHFList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '68'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();
            foreach ($XCateVideoBottomHFList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XCateVideoBottomHFList', $XCateVideoBottomHFList);



            //X站-分类视频精选-底部-文字九宫格 69 $XCateVideoBottomTextList
            $XCateVideoBottomTextList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '69'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
            foreach ($XCateVideoBottomTextList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XCateVideoBottomTextList', $XCateVideoBottomTextList);


            //X站-分类视频精选-底部-图片九宫格 70 $XCateVideoBottomSudokuList
            $XCateVideoBottomSudokuList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '70'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
            foreach ($XCateVideoBottomSudokuList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XCateVideoBottomSudokuList', $XCateVideoBottomSudokuList);


            //X站-播放器底部-banner轮播图 71 $XVideoBottomHFList
            $XVideoBottomHFList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '71'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();
            foreach ($XVideoBottomHFList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XVideoBottomHFList', $XVideoBottomHFList);


            //X站-顶部-文字九宫格 72 $XTopTextList
            $XTopTextList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '72'])->order('sort asc,id asc')->page(1, 100)->cache(1200)->select();
            foreach ($XTopTextList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XTopTextList', $XTopTextList);

            //X站-分类/搜索/猜你喜欢-标题右侧-文字广告  73 $XCategoryTitleTextList
            $XCategoryTitleTextList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '73'])->order('sort asc,id asc')->page(1, 3)->cache(1200)->select();
            foreach ($XCategoryTitleTextList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XCategoryTitleTextList', $XCategoryTitleTextList);

            //X站-分类/搜索/猜你喜欢-视频列表-封面广告 74 $XCategoryVideoListInsertList
            $XCategoryVideoListInsertList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '74'])->order('sort asc,id asc')->page(1, 2)->cache(1200)->select();

            foreach ($XCategoryVideoListInsertList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
                $item['name'] = mbConvert($item['name']);
            }
            View::assign('XCategoryVideoListInsertList', $XCategoryVideoListInsertList);


            //X站-小说漫画-简介-横幅广告 80 $XMhJJHFList
            $XMhJJHFList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '80'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();
            foreach ($XMhJJHFList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XMhJJHFList', $XMhJJHFList);

            //X站-小说漫画-正文头部-横幅广告 81 $XMhTopHFList
            $XMhTopHFList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '81'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();
            foreach ($XMhTopHFList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XMhTopHFList', $XMhTopHFList);


            //X站-小说漫画-正文尾部-横幅广告 82 $XMhBottomHFList
            $XMhBottomHFList = $this->Products
                ->where(array('status' => 1, 'is_banner' => 0))
                ->where(['pid' => '82'])->order('sort asc,id asc')->page(1, 1)->cache(1200)->select();
            foreach ($XMhBottomHFList as $key => &$item) {
                $item['url'] = mbConvert($item['androidurl']);
                if (strpos($item['img'], 'http') === false) {
                    $item['img'] = mbConvert(replaceAdCdn($item['img']));
                }
            }
            View::assign('XMhBottomHFList', $XMhBottomHFList);
        }
    }
    public function nav($channel = 0)
    {
        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item) {
            $item['title'] = mbConvert($item['title']);
        }
        View::assign('menulist', $menulist);
        View::assign('channel', $channel);
        if (ismobile()) {
            return View::fetch('index_mobile');
        } else {
            return View::fetch('index_mobile');
        }
    }

    public function index($channel = 0)
    {
        if (empty($channel)) {
            return response('403 access forbidden!', 403);
        }
        $adcateid=1;
        if(isset($_GET["adcateid"])){
            $adcateid   =$_GET["adcateid"];
        }
        View::assign('adcateid', $adcateid);
        //随机获取站点
        $manhuasite = Db::name("site")->where(["type" => 3])->orderRaw("rand()")->find();
        $shipinsite = Db::name("site")->where(["type" => 1])->orderRaw("rand()")->find();
        $imgsite = Db::name("site")->where(["type" => 4])->orderRaw("rand()")->find();
        $xiaoshuosite = Db::name("site")->where(["type" => 2])->orderRaw("rand()")->find();
        $chiguaite = Db::name("site")->where(["type" => 6])->orderRaw("rand()")->find();

        View::assign('manhuasite', $manhuasite["domain"]);
        View::assign('shipinsite', $shipinsite["domain"]);
        View::assign('imgsite', $imgsite["domain"]);
        View::assign('xiaoshuosite', $xiaoshuosite["domain"]);
        View::assign('chiguasite', $chiguaite["domain"]);
        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item) {
            $item['title'] = mbConvert($item['title']);
        }
        //随机视频2条
        $video = Db::name("mall_videos")->where(["status" => 1])->orderRaw('rand()')->limit(2)->select();
        //吃瓜图片1条
        $img_chigua = Db::name("mall_chigua")->orderRaw('rand()')->limit(1)->select()->toArray();
 
        foreach ($img_chigua as $ik => $iv) {
            $img_chigua[$ik]["eye"] = rand(11111, 99999);
            // if ($iv["cover"]) {
            //     $imgArray = explode(",", $iv["pic"]);
            //     $img_chigua[$ik]["pic"] = $imgArray;
            //     $img_chigua[$ik]["eye"] = rand(11111, 99999);
            // }
        }
      
        View::assign('img_chigua', $img_chigua);
        $img_chigua1 = Db::name("mall_chigua")->orderRaw('rand()')->limit(1)->select()->toArray();
        foreach ($img_chigua1 as $ik => $iv) {
            $img_chigua1[$ik]["eye"] = rand(11111, 99999);
            // if ($iv["pic"]) {
            //     $imgArray = explode(",", $iv["pic"]);
            //     $img_chigua1[$ik]["pic"] = array_slice($imgArray, 0, 2);
            //     $img_chigua1[$ik]["eye"] = rand(11111, 99999);
            // }
        }
        //小说
        $novel = Db::name("mall_novels")->where(["status" => 1])->orderRaw('rand()')->limit(1)->select()->toArray();
        //获取章数
        $novel[0]["num"] = Db::name("novel_catalogs")->where(["novel_id" => $novel[0]["id"]])->count();
        $novel[0]["cate"] = Db::name("mall_novelcate")->where(["id" => $novel[0]["cate_id"]])->find();
        $novel[0]["eye"] = rand(11111, 99999);
        $novel[0]["time"] = rand(1, 10);
        $novel1 = Db::name("mall_novels")->where(["status" => 1])->orderRaw('rand()')->limit(1)->select()->toArray();
        $novel1[0]["num"] = Db::name("novel_catalogs")->where(["novel_id" => $novel[0]["id"]])->count();
        $novel1[0]["cate"] = Db::name("mall_novelcate")->where(["id" => $novel[0]["cate_id"]])->find();
        $novel1[0]["eye"] = rand(11111, 99999);
        $novel1[0]["time"] = rand(1, 10);
        //漫画
        $manhua = Db::name("mall_comics")->where(["status" => 1])->orderRaw('rand()')->limit(3)->select()->toArray();
        foreach ($manhua as $mk => &$mv) {
            $mv["enpic"]=mbConvert(replaceManhuaCdn($mv["pic"]));
            $mv["eye"] = rand(1111, 9999);
            $mv["shoucang"] = rand(1111, 9999);
            $mv["cate"] = Db::name("mall_comiccate")->where(["id" => $mv["cate_id"]])->find();
            $mv["num"] = rand(3, 20);
        }
        //视频
        $video1 = Db::name("mall_videos")->where(["status" => 1])->orderRaw('rand()')->limit(1)->select()->toArray();
        foreach ($video1 as $mk => &$mv) {
            $mv["eye"] = rand(1111, 9999);
            // $mv["shoucang"]=rand(1111,9999);
            // $mv["cate"]=Db::name("mall_comiccate")->where(["id"=>$mv["cate_id"]])->find();
            // $mv["num"]=rand(3,20);
        }
        //吃瓜
        $img_chigua2 = Db::name("mall_chigua")->orderRaw('rand()')->limit(1)->select()->toArray();
        foreach ($img_chigua2 as $ik => $iv) {
            // if ($iv["pic"]) {
            //     $imgArray = explode(",", $iv["pic"]);
                // $img_chigua2[$ik]["pic"] = $imgArray;
                $img_chigua2[$ik]["eye"] = rand(11111, 99999);
            // }
        }
        //图片
        $img1 = Db::name("mall_img")->where(["status" => 1])->orderRaw('rand()')->limit(3)->select()->toArray();
        foreach ($img1 as $ik => $iv) {
            $imgArray = explode(",", $iv["pic"]);
            $img1[$ik]["pic"] = $imgArray;
            $img1[$ik]["eye"] = rand(1111, 9999);
            $img1[$ik]["fenlei"] = Db::name("mall_img_cate")->where(["id" => $iv["cate_id"]])->find();
            if ($iv["pic"]) {
                $imgArray = explode(",", $iv["pic"]);
                $img1[$ik]["shoucang"] = rand(1111, 9999);
                $img1[$ik]["num"] = rand(3, 10);
            }
        }
        View::assign('channel', $channel);
        View::assign('video', $video);
        
        View::assign('img_chigua1', $img_chigua1);
        View::assign('novel', $novel);
        View::assign('novel1', $novel1);
        View::assign('manhua', $manhua);
        View::assign('video1', $video1);
        View::assign('img_chigua2', $img_chigua2);
        View::assign('img1', $img1);
        // $pxlist = $this->MallVideos->getlist(12,0,1,6);
        // $yuanclist = $this->MallVideos->getnewlist(40,0,1,6);
        // $chigualist = $this->MallVideos->getlist(1,0,1,6);
        // $guochanlist = $this->MallVideos->getlist(14,0,1,6);
        // $rihanlist = $this->MallVideos->getlist(3,0,1,6);
        // $oumeilist = $this->MallVideos->getlist(4,0,1,6);
        // $dongmanlist = $this->MallVideos->getlist(5,0,1,6);
        // $ailist = $this->MallVideos->getlist(6,0,1,6);
        // $jieshuolist = $this->MallVideos->getlist(8,0,1,6);
        // View::assign('menulist',$menulist);
        // View::assign('newlist',$newlist['list']);
        // View::assign('pxlist',$pxlist['list']);
        // View::assign('yuanclist',$yuanclist['list']);
        // View::assign('chigualist',$chigualist['list']);
        // View::assign('guochanlist',$guochanlist['list']);
        // View::assign('rihanlist',$rihanlist['list']);
        // View::assign('oumeilist',$oumeilist['list']);
        // View::assign('dongmanlist',$dongmanlist['list']);
        // View::assign('ailist',$ailist['list']);
        // View::assign('jieshuolist',$jieshuolist['list']);
        // View::assign('channel',$channel);
        return View::fetch('index');
        // if(ismobile())
        // {
        //     return View::fetch('featured_mobile');
        // }else{
        //     return View::fetch('featured_mobile');
        // }
    }


    public function category($channel = 0)
    {
        $category_id = input('param.category_id/d', 0);
        $category_child_id = input('param.category_child_id/d', 0);
        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item) {
            $item['title'] = mbConvert($item['title']);
        }
        $child_menu = $this->Menu->getmenu($category_id);
        $category_name = $this->Menu->getById($category_id);
        $page = input('param.page', 1);
        $limit = input('param.limit', 32);
        $videolist = $this->MallVideos->getlist($category_id, $category_child_id, $page, $limit);
        if ($category_id == 40) {
            $videolist = $this->MallVideos->getnewlist($category_id, $category_child_id, $page, $limit);
        }
        View::assign('category_id', $category_id);
        View::assign('category_child_id', $category_child_id);
        View::assign('menulist', $menulist);
        View::assign('child_menu', $child_menu);
        View::assign('category_name', $category_name['title']);
        View::assign('videolist', $videolist['list']);
        View::assign('page', $videolist['page']);
        View::assign('channel', $channel);
        if (ismobile()) {
            return View::fetch('category_mobile');
        } else {
            return View::fetch('category_mobile');
        }
    }

    public function videoplay($channel = 0)
    {
        $vid = input('param.vid/d', 0);
        $category_id = input('param.category_id/d', 0);
        $category_child_id = input('param.category_child_id/d', 0);
        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item) {
            $item['title'] = mbConvert($item['title']);
        }
        $page = input('param.page', 1);
        $limit = input('param.limit', 21);
        $child_menu = $this->Menu->getmenu($category_id);
        $vodlist = $this->MallVideos->getById($vid);
        if ($vid <= 5000) {
            $vodlist['enpic'] = replaceVideoCdn($vodlist['enpic'], 'video_img_cdn');
            $vodlist['video'] = replaceVideoCdn($vodlist['video'], 'video_cdn');
        }
        $vodlist['title'] = mbConvert($vodlist['title']);
        $guesslist = $this->MallVideos->getmorelist($vodlist['cate_id'], $page, $limit);
        $category = $this->Menu->getCateInfo($vodlist['cate_id']);
        $arr['id'] = $vodlist['id'];
        $arr['url'] = $vodlist['pic'];
        $arr['encryptUrl'] = $vodlist['pic'];
        $arr['cid'] = $category_child_id;
        $arr['sl'] = $vodlist['video'];
        $arr['title'] = $vodlist['title'];
        $arr['playedCount'] = mt_rand(1000000, 9999999);
        $arr['duration'] = $vodlist['time'];
        $arr['vip'] = 0;
        $arr['up_num'] = $vodlist['up'];
        $arr['down_num'] = $vodlist['down'];
        $arr['fav_num'] = $vodlist['fav'];
        $arr['is_fav'] = false;
        $data = base64_encode(json_encode($arr));
        View::assign('category_id', $category_id);
        View::assign('category_child_id', $category_child_id);
        View::assign('menulist', $menulist);
        View::assign('child_menu', $child_menu);
        View::assign('vodlist', $vodlist);
        View::assign('data', $data);
        View::assign('guesslist', $guesslist['list']);
        View::assign('page', $guesslist['page']);
        View::assign('channel', $channel);
        View::assign('category', $category);
        if (ismobile()) {
            return View::fetch('vodplay_mobile');
        } else {
            return View::fetch('vodplay_mobile');
        }
    }
    public function vod()
    {
        if (ismobile()) {
            return View::fetch('vod_mobile');
        } else {
            return View::fetch('vod_mobile');
        }
    }
    public function searchhome($channel = 0)
    {
        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item) {
            $item['title'] = mbConvert($item['title']);
        }
        View::assign('menulist', $menulist);
        View::assign('channel', $channel);
        return View::fetch();
    }
    public function search($channel = 0)
    {
        $keyword = input('param.keyword/s');
        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item) {
            $item['title'] = mbConvert($item['title']);
        }

        $videolist = $this->MallVideos->getsearch($keyword);
        View::assign('menulist', $menulist);
        View::assign('keyword', $keyword);
        View::assign('videolist', $videolist['list']);
        View::assign('page', $videolist['page']);
        View::assign('channel', $channel);
        if (ismobile()) {
            return View::fetch('search_mobile');
        } else {
            return View::fetch('search_mobile');
        }
    }

    public function getfeatured()
    {
        $category_id = input('param.category_id/d', 0);
        $page = input('param.page/d', 1);
        $pageSize = input('param.size/d', 6);
        $list = $this->MallVideos->getlist($category_id, 0, $page, $pageSize);
        $res = [];
        foreach ($list['list'] as $val) {
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
        $sort = input('param.sort/d', 1);
        $cid = input('param.cid/d', 0);
        $bang = 'renqi';
        $bangtitle = '人气榜';
        switch ($sort) {
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
        foreach ($novelmenulist as &$item) {
            $item['title'] = mbConvert($item['title']);
            $novelMenuArray[$item['id']] = $item['title'];
        }
        //主编力荐
        $tjlist = $this->Novel->getlist(0, 1, 30, 'tuijian');
        foreach ($tjlist['list'] as $item) {
            $item['cate'] = $novelMenuArray[$item['cate_id']];
        }
        //榜单
        $bdlist = $this->Novel->getorderlist($bang, 10);
        foreach ($bdlist as $item) {
            $item['cate'] = $novelMenuArray[$item['cate_id']];
        }
        //分类
        $fllist = $this->Novel->getlist($cid, 1, 12);
        foreach ($fllist['list'] as $item) {
            $item['cate'] = $novelMenuArray[$item['cate_id']];
        }

        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item) {
            $item['title'] = mbConvert($item['title']);
        }
        $tjlist_banner = [];
        for ($i = 0; $i < ceil(count($tjlist["list"]->toArray()["data"]) / 6); $i++) {
            $tjlist_banner[] = array_slice($tjlist["list"]->toArray()["data"], $i * 6, 6);
        }
        $novelMenuArray[0] = "全部题材";
        View::assign('sort', $sort);
        View::assign('cid', $cid);
        View::assign('catetitle', $novelMenuArray[$cid]);
        View::assign('bangtitle', $bangtitle);
        View::assign('tjlist', $tjlist_banner);
        View::assign('bdlist', $bdlist);
        View::assign('fllist', $fllist['list']);
        View::assign('novelmenulist', $novelmenulist);
        View::assign('menulist', $menulist);
        View::assign('channel', $channel);
        return View::fetch();
    }

    public function novel_category($channel = 0)
    {
        $cid = input('param.cid/d', 0);

        $sort = input('param.sort/d', 0);
        $order = "create_time";
        switch ($sort) {
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
        $page = input('param.page', 1);
        $limit = input('param.limit', 10);
        $novellist = $this->Novel->getlist($cid, $page, $limit, $order);

        $novelmenulist = $this->NovelMenu->getmenu(0);
        $novelMenuArray = [];
        foreach ($novelmenulist as &$item) {
            $item['title'] = mbConvert($item['title']);
            $novelMenuArray[$item['id']] = $item['title'];
        }

        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item) {
            $item['title'] = mbConvert($item['title']);
        }
        $novelMenuArray[0] = "全部题材";
        View::assign('cid', $cid);
        View::assign('catetitle', $novelMenuArray[$cid]);
        View::assign('sort', $sort);
        View::assign('novellist', $novellist['list']);
        View::assign('page', $novellist['page']);
        View::assign('novelmenulist', $novelmenulist);
        View::assign('menulist', $menulist);
        View::assign('channel', $channel);
        return View::fetch();
    }

    public function novel_rank($channel = 0)
    {
        $sort = input('param.sort/d', 1);
        $bang = 'renqi';
        $bangtitle = '人气榜';
        switch ($sort) {
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
        $page = input('param.page', 1);
        $limit = input('param.limit', 10);
        //榜单
        $bdlist = $this->Novel->getlist(0, $page, $limit, $bang);

        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item) {
            $item['title'] = mbConvert($item['title']);
        }
        View::assign('sort', $sort);
        View::assign('bangtitle', $bangtitle);
        View::assign('bdlist', $bdlist['list']);
        View::assign('page', $bdlist['page']);
        View::assign('page2', $page);
        View::assign('menulist', $menulist);
        View::assign('channel', $channel);
        return View::fetch();
    }

    public function novel_detail($channel = 0)
    {
        $novelId = input('param.novel_id/d', 0);

        $novel = $this->Novel->getById($novelId);
        $novel['enpic'] = mbConvert(replaceManhuaCdn($novel['pic']));
        $novel['title'] = mbConvert($novel['title']);
        $novel['author'] = mbConvert($novel['author']);
        $novel['description'] = mbConvert($novel['description']);

        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item) {
            $item['title'] = mbConvert($item['title']);
        }
        $page = input('param.page', 1);
        $limit = input('param.limit', 12);
        //榜单
        $tjlist = $this->Novel->getmorelist($novel['cate_id'], $page, $limit);

        //章节列表
        $cataloglist = $this->NovelCatalogs->getlist($novelId);
        $catalogcount = count($cataloglist);

        $novelmenulist = $this->NovelMenu->getmenu(0);
        $novelMenuArray = [];
        foreach ($novelmenulist as &$item) {
            $item['title'] = mbConvert($item['title']);
            $novelMenuArray[$item['id']] = $item['title'];
        }

        View::assign('cataloglist', $cataloglist);
        View::assign('catetitle', $novelMenuArray[$novel['cate_id']]);
        View::assign('catalogcount', $catalogcount);
        View::assign('tjlist', $tjlist['list']);
        View::assign('page', $tjlist['page']);
        View::assign('novel', $novel);
        View::assign('menulist', $menulist);
        View::assign('channel', $channel);
        return View::fetch();
    }

    public function novel_chapter($channel = 0)
    {
        $chapterId = input('param.chapter_id/d', 0);
        $chapter = $this->NovelCatalogs->getById($chapterId);
        $novel = $this->Novel->getById($chapter['novel_id']);
        //章节列表
        $cataloglist = $this->NovelCatalogs->getlist($chapter['novel_id']);

        $pre = $cataloglist[0];
        $next = $cataloglist[count($cataloglist) - 1];
        foreach ($cataloglist as $catalog) {
            if ($chapter['chapter'] - 1 == $catalog['chapter']) {
                $pre = $catalog;
            }
            if ($chapter['chapter'] + 1 == $catalog['chapter']) {
                $next = $catalog;
            }
        }
        $chapter['content'] = mbConvert($chapter['content']);
        $chapter['content'] = str_replace(['&#60;&#112;&#62;', '&#60;&#47;&#112;&#62;'], ['<p>', '</p>'], $chapter['content']);
        $chapter['name'] = mbConvert($chapter['name']);
        $catalogcount = count($cataloglist);
        View::assign('pre', $pre);
        View::assign('next', $next);
        View::assign('cataloglist', $cataloglist);
        View::assign('catalogcount', $catalogcount);
        View::assign('novel', $novel);
        View::assign('chapter', $chapter);
        View::assign('channel', $channel);
        return View::fetch();
    }

    //    漫画
    public function comic($channel = 0)
    {
        $sort = input('param.sort/d', 1);
        $cid = input('param.cid/d', 0);
        $bang = 'renqi';
        $bangtitle = '人气榜';
        switch ($sort) {
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
        foreach ($novelmenulist as &$item) {
            $item['title'] = mbConvert($item['title']);
            $novelMenuArray[$item['id']] = $item['title'];
        }
        //主编力荐
        $tjlist = $this->Comic->getlist(0, 1, 30, 'tuijian');
        foreach ($tjlist['list'] as $item) {
            $item['cate'] = $novelMenuArray[$item['cate_id']];
        }
        //榜单
        $bdlist = $this->Comic->getorderlist($bang, 10);
        foreach ($bdlist as $item) {
            $item['cate'] = $novelMenuArray[$item['cate_id']];
        }
        //分类
        $fllist = $this->Comic->getlist($cid, 1, 12);
        foreach ($fllist['list'] as $item) {
            $item['cate'] = $novelMenuArray[$item['cate_id']];
        }

        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item) {
            $item['title'] = mbConvert($item['title']);
        }
        $tjlist_banner = [];
        for ($i = 0; $i < ceil(count($tjlist["list"]->toArray()["data"]) / 6); $i++) {
            $tjlist_banner[] = array_slice($tjlist["list"]->toArray()["data"], $i * 6, 6);
        }
        $novelMenuArray[0] = "全部题材";
        View::assign('sort', $sort);
        View::assign('cid', $cid);
        View::assign('catetitle', $novelMenuArray[$cid]);
        View::assign('bangtitle', $bangtitle);
        View::assign('tjlist', $tjlist_banner);
        View::assign('bdlist', $bdlist);
        View::assign('fllist', $fllist['list']);
        View::assign('novelmenulist', $novelmenulist);
        View::assign('menulist', $menulist);
        View::assign('channel', $channel);
        return View::fetch();
    }

    public function comic_category($channel = 0)
    {
        $cid = input('param.cid/d', 0);

        $sort = input('param.sort/d', 0);
        $order = "create_time";
        switch ($sort) {
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
        $page = input('param.page', 1);
        $limit = input('param.limit', 10);
        $novellist = $this->Comic->getlist($cid, $page, $limit, $order);

        $novelmenulist = $this->ComicMenu->getmenu(0);
        $novelMenuArray = [];
        foreach ($novelmenulist as &$item) {
            $item['title'] = mbConvert($item['title']);
            $novelMenuArray[$item['id']] = $item['title'];
        }

        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item) {
            $item['title'] = mbConvert($item['title']);
        }
        $novelMenuArray[0] = "全部题材";
        View::assign('cid', $cid);
        View::assign('catetitle', $novelMenuArray[$cid]);
        View::assign('sort', $sort);
        View::assign('novellist', $novellist['list']);
        View::assign('page', $novellist['page']);
        View::assign('novelmenulist', $novelmenulist);
        View::assign('menulist', $menulist);
        View::assign('channel', $channel);
        return View::fetch();
    }

    public function comic_rank($channel = 0)
    {
        $sort = input('param.sort/d', 1);
        $bang = 'renqi';
        $bangtitle = '人气榜';
        switch ($sort) {
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
        $page = input('param.page', 1);
        $limit = input('param.limit', 10);
        //榜单
        $bdlist = $this->Comic->getlist(0, $page, $limit, $bang);

        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item) {
            $item['title'] = mbConvert($item['title']);
        }
        View::assign('sort', $sort);
        View::assign('bangtitle', $bangtitle);
        View::assign('bdlist', $bdlist['list']);
        View::assign('page', $bdlist['page']);
        View::assign('page2', $page);
        View::assign('menulist', $menulist);
        View::assign('channel', $channel);
        return View::fetch();
    }

    public function comic_detail($channel = 0)
    {
        $novelId = input('param.novel_id/d', 0);

        $novel = $this->Comic->getById($novelId);
        $novel['enpic'] = mbConvert(replaceManhuaCdn($novel['pic']));
        $novel['title'] = mbConvert($novel['title']);

        $menulist = $this->Menu->getmenu(0);
        foreach ($menulist as &$item) {
            $item['title'] = mbConvert($item['title']);
        }
        $page = input('param.page', 1);
        $limit = input('param.limit', 12);
        //榜单
        $tjlist = $this->Comic->getmorelist($novel['cate_id'], $page, $limit);

        //章节列表
        $cataloglist = $this->ComicCatalogs->getlist($novelId);
        $catalogcount = count($cataloglist);

        $novelmenulist = $this->ComicMenu->getmenu(0);
        $novelMenuArray = [];
        foreach ($novelmenulist as &$item) {
            $item['title'] = mbConvert($item['title']);
            $novelMenuArray[$item['id']] = $item['title'];
        }

        View::assign('cataloglist', $cataloglist);
        View::assign('catetitle', $novelMenuArray[$novel['cate_id']]);
        View::assign('catalogcount', $catalogcount);
        View::assign('tjlist', $tjlist['list']);
        View::assign('page', $tjlist['page']);
        View::assign('novel', $novel);
        View::assign('menulist', $menulist);
        View::assign('channel', $channel);
        return View::fetch();
    }

    public function comic_chapter($channel = 0)
    {
        $chapterId = input('param.chapter_id/d', 0);
        $chapter = $this->ComicCatalogs->getById($chapterId);
        $novel = $this->Comic->getById($chapter['novel_id']);
        //章节列表
        $cataloglist = $this->ComicCatalogs->getlist($chapter['novel_id']);

        $pre = $cataloglist[0];
        $next = $cataloglist[count($cataloglist) - 1];
        foreach ($cataloglist as $catalog) {
            if ($chapter['chapter'] - 1 == $catalog['chapter']) {
                $pre = $catalog;
            }
            if ($chapter['chapter'] + 1 == $catalog['chapter']) {
                $next = $catalog;
            }
        }
        $catalogcount = count($cataloglist);
        $manhuaList = explode('|', $chapter['content']);
        foreach ($manhuaList as &$item) {
            $item = mbConvert(replaceManhuaCdn($item));
        }
        View::assign('pre', $pre);
        View::assign('next', $next);
        View::assign('cataloglist', $cataloglist);
        View::assign('catalogcount', $catalogcount);
        View::assign('novel', $novel);
        View::assign('chapter', $chapter);
        View::assign('manhuaList', $manhuaList);
        View::assign('channel', $channel);
        return View::fetch();
    }

    public function chigua($channel = 0)
    {
        View::assign('channel', $channel);
        return View::fetch();
    }
    public function chigua_detail($channel = 0)
    {
        View::assign('channel', $channel);
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
