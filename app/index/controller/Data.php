<?php

namespace app\index\controller;

use app\BaseController;
use think\facade\Log;
use think\facade\Cache;
use think\facade\Db;

class Data extends BaseController
{
	public function initialize() {}
	public function getannounce()
	{
		$arr = array();
		$arr['status'] = 200;
		$arr['announce'] = appconfig('announcement', 'announce');
		return jiami(json_encode($arr));
	}
	public function getversion()
	{
		$arr = array();
		$arr['status'] = 200;
		$arr['version'] = (int)appconfig('upgrade', 'version');
		$arr['forceupdate'] = appconfig('upgrade', 'forceupdate');
		$arr['update_url'] = appconfig('upgrade', 'update_url');
		$arr['update_tips'] = appconfig('upgrade', 'update_tips');
		return jiami(json_encode($arr));
	}
	public function getshare()
	{
		$arr = array();
		$arr['status'] = 200;
		$arr['share_url'] = appconfig('share', 'share_url');
		$arr['share_qrcode'] = 'https://api.qrserver.com/v1/create-qr-code/?data=' . appconfig('share', 'share_url');
		return jiami(json_encode($arr));
	}
	public function install()
	{
		$ip_array = explode(",", GetIP());
		$client_ip = trim($ip_array[0]);
		$arr['ip'] = $client_ip;
		$arr['channelCode']  = input('post.channel');
		$arr['site_id']  = input('post.site_id');
		$arr['subid'] = intval(input('post.linkId'));
		$arr['uuid']  = md5($arr['ip']);
		$arr['width']  = input('post.width');
		$arr['height']  = input('post.height');
		$arr['brand']  = 1;
		$arr['model']  = 1;
		$arr['manufacturer']  = 1;
		$arr['arelease']  = 1;
		$arr['sdk_int']  = 1;
		$arr['ua']  = input('post.ua');
		$sign = input('post.sign');
		$res = [];
		// if ($sign == sha1('rinimei'.sha1('rinimei'.$arr['channelCode'].$arr['subid'])))
		// {
		$this->Dev = new \app\common\model\Dev();
		$map[] = [
			['ip', '=', $arr['ip']],
			['channelCode', '=', $arr['channelCode']],
			['date', '=', date('Y-m-d')],
			["site_id", "=", $arr["site_id"]]
		];
		//查询ip进站记录
		$list = Db::name("dev")->where($map)->find();
		if (!empty($arr['ua']) && strlen($arr['ua']) > 255) {
			$arr['ua'] = substr($arr['ua'], 0, 255);
		}
	
		if (empty($list)) {
			
			$arr['date'] = date('Y-m-d');
			$arr['create_time'] = time();
			$arr['update_time'] = time();
		
			Db::name("dev")->save($arr);
			$result = Db::name("channelcode")->where(array('channelCode' => $arr['channelCode']))->find();
			if ($result) {
				$mininum = $result['mininum'];
				$ratio = $result['ratio'];
				$ct['channelCode'] = $arr['channelCode'];
				$ct['site_id'] = $arr['site_id'];
				$ct['sj_num'] = 1;
				$ct['sum'] = 1;
				$ct['date'] = date('Y-m-d');
				//渠道统计表 自增
				$q = Db::name("qdtongji")->where(array('channelCode' => $ct['channelCode'], 'date' => $ct['date'], "site_id" => $ct['site_id']))->find();
				
				if (empty($q)) {
					$ct["create_time"]=time();
					$ct["update_time"]=time();
					Db::name("qdtongji")->save($ct);
				} else {
					if ($mininum > 0 && $q['sum'] > $mininum && $ratio > 0) {
						//判断当日安装量已经达到最低标准，当需要扣量
						if (qsj($ratio)) {
							Db::name("qdtongji")->where(array('channelCode' => $ct['channelCode'], 'date' => $ct['date'], "site_id" => $ct['site_id']))->inc('sj_num')->update();
						} else {
							Db::name("qdtongji")->where(array('channelCode' => $ct['channelCode'], 'date' => $ct['date'], "site_id" => $ct['site_id']))->inc('sj_num')->inc('sum')->update();
						}
					} else {
						Db::name("qdtongji")->where(array('channelCode' => $ct['channelCode'], 'date' => $ct['date'], "site_id" => $ct['site_id']))->inc('sj_num')->inc('sum')->update();
					}
				}
			}
			//查询是否记录proclick表，站点ip统计
			$pro_click = Db::name("mall_pro_click")->where(array('date' => date("Y-m-d"), "site_id" => $arr['site_id']))->find();
			//查询站点分类
			$site = Db::name("site")->where(array('id' => $arr['site_id']))->find();
			$cate = Db::name("site_category")->where(array('id' => $site['type']))->find();
			if (empty($pro_click)) {
				$click = [
					"site_id" => $site['id'],
					"site_category_id" => $cate['id'],
					"ip_total" => 1,
					"ip_nei" => 0,
					"ip_wai" => 1,
					"ip_click" => 0,
					"pro_click_total" => 0,
					"pro_click_nei" => 0,
					"pro_click_wai" => 0,
					"date" => date("Y-m-d"),
					"create_time" => date("Y-m-d H:i:s", time()),
				];
				Db::name("mall_pro_click")->save($click);
			} else {
				Db::name("mall_pro_click")->where(["site_id" => $site['id'], "date" => date("Y-m-d")])->inc('ip_total')->inc('ip_wai')->update();
			}
		}
		return json_encode(["result" => "ok"]);
		// $res=$this->Dev->report($arr);
		// var_dump($res);die;
		// $res['result'] = $result;
		// $res['result'] = 'ok';
		// }else{
		//     $res['result'] = 'ok1';
		// }
		// return json_encode($res);
	}
	public function tongji()
	{
		// $timeStart = time();
		// \think\facade\Log::error('tongji start:' . $timeStart);
		header('Cache-Control: no-cache,must-revalidate');
		header('Pragma: no-cache');
		$ip_array = explode(",", GetIP());
		$client_ip = trim($ip_array[0]);
		$ip = $client_ip;
		//Log::error('Tongji:' . json_encode(input('post.')) . 'ip: ' . $ip . ',ua: ' . request()->server()['HTTP_USER_AGENT']);
		$channel = input('post.channel');
		$id = input('post.id');
		$uuid = md5($ip);
		$type = input('post.type'); //show/download/downfinish
		$site_id = input('post.site');
		$sign = input('post.sign');
		if ($id < 0) return;  //特殊统计，不计入服务器
		$arr = array();
		//点击或产品下载完成
		$this->Clicks = new \app\common\model\Clicks();
		$this->Tongji = new \app\common\model\Tongji();
		$ct['pid'] = intval($id);
		$ct['channelCode'] = $channel;
		$ct['type'] = $type;
		//click表自增
		//report
		$type = $ct['type'];
		if (date('i') < 30) {
			$min = ':00';
		} else {
			$min = ':30';
		}
		$map[] = ['pid', '=', $ct['pid']];
		$map[] = ['channelCode', '=', $ct['channelCode']];
		$map[] = ['period', '=', date('Y-m-d H') . $min];
		$map[] = ['site_id', '=', $site_id];
		$plist = Db::name("clicks")->where($map)->find();
		if ($plist) {
			Db::name("clicks")->where($map)->inc('clicks')->update();
		} else {
			$tt['period'] = date('Y-m-d H') . $min;
			$tt['pid'] = $id;
			$tt['channelCode'] = $channel;
			// $tt['type'] = $type;
			$tt['site_id'] = $site_id;
			$tt['create_time'] = time();
			$tt['update_time'] = time();
			$tt['clicks'] = 1;
			$tt['downfinish'] = 0;
			Db::name("clicks")->save($tt);
		}
		$ot['pid'] = intval($id);
		$ot['channelCode'] = $channel;
		$ot['date'] = date('Y-m-d');
		$ot['site_id'] = $site_id;
		//tongji表自增
		$list = Db::name("tongji")->where($ot)->find();
		if (empty($list)) {
			$ot['shows'] = 0;
			$ot['clicks'] = 1;
			$ot['downfinish'] = 0;
			$ot['create_time'] = time();
			$ot['update_time'] = time();

			Db::name("tongji")->save($ot);
		} else {
			Db::name("tongji")->where($ot)->update(['clicks' => Db::raw('clicks+1')]);
		}
		//站点统计表 自增
		//查询是否记录proclick表，站点ip统计
		$pro_click = Db::name("mall_pro_click")->where(array('date' => date("Y-m-d"), "site_id" => $site_id))->find();
		//查询站点分类
		$site = Db::name("site")->where(array('id' => $site_id))->find();
		$cate = Db::name("site_category")->where(array('id' => $site['type']))->find();
	
		if (empty($pro_click)) {
			$click = [
				"site_id" => $site['id'],
				"site_category_id" => $cate['id'],
				"ip_total" => 1,
				"ip_nei" => 0,
				"ip_wai" => 1,
				"ip_click" => 0,
				"pro_click_total" => 1,
				"pro_click_nei" => 0,
				"pro_click_wai" => 1,
				"date" => date("Y-m-d"),
				"create_time" => date("Y-m-d H:i:s", time()),
			];
			Db::name("mall_pro_click")->save($click);
		} else {
			//查询广告是内站还是外站
			$product=Db::name("products")->where(["id"=>$id])->field("url_type")->find();
			$proclickmodel=Db::name("mall_pro_click")
			->where(["site_id" => $site_id, "date" => date("Y-m-d")]);
			if($product["url_type"]==1){
				$proclickmodel->inc("pro_click_nei");
			}else{
				$proclickmodel->inc("pro_click_wai");
			}
			$proclickmodel->inc('pro_click_total')
			->update();
		}
		// //产品增加一次下载
		// $products = new \app\common\model\Products();
		// $products::where(array('id' => $id))->inc('downnum')->update();
		$arr['status'] = 200;
		$arr['msg'] = 'ok';
		return json_encode($arr);
	}

	public function dhclick()
	{
		$this->Dhclick = new \app\common\model\Dhclick();

		$dhClicks = $this->Dhclick->field('id,name,num,url')->select();

		foreach ($dhClicks as $value) {
			$json = file_get_contents(trim($value['url']));
			$arr  = json_decode($json, true);
			$num = $arr[date('Y-m-d')];
			$this->Dhclick->where(['id' => $value['id']])->update(['num' => $num]);
		}
	}
}
