<?php
namespace app\index\controller;

use app\BaseController;
use think\facade\View;

class Api extends BaseController
{
	public function initialize()
	{
		$this->MallVideos = new \app\admin\model\MallVideos();
	}
	//点赞
	public function like_report()
	{
		$type= input('post.type',1);
		$vid = input('post.vid');
		$arr['code'] = 200;
		if($type == 1)
		{
			$this->MallVideos->where(array('id'=>$vid))->inc('up')->update();
			$arr['msg'] = '点赞成功';
		}else{
			$this->MallVideos->where(array('id'=>$vid))->dec('up')->update();
			$arr['msg'] = '已取消';
		}
		return json_encode($arr);
	}
	//踩
	public function step_report()
	{
	}
	//收藏
	public function collect_report()
	{
	}
	public function syncData(){
	    $data= input('post.');
	    $videoData=[
	        "cate_id"=>$data["cid"],
	        "zm_vid"=>$data["cid"],
	        "is_recommend"=>0,
	        "title"=>$data["name"],
	        "pic"=>$data["pic"],
	        "enpic"=>$data["pic"],
	        "video"=>$data["m3u8"],
	        "eye"=>rand(10000,100000),
	        "time"=>$this->timeformat($data["duration"]),
	        "sort"=>rand(10,1000),
	        "status"=>1,
	        "isvip"=>0,
	        "up"=>0,
	        "down"=>0,
	        "fav"=>0,
	        "remark"=>"",
	        "create_time"=>time(),
	        "update_time"=>time(),
	        ];
	    $res=$this->MallVideos->insert($videoData);
	    var_dump($res);die;
	}
	public function timeformat($seconds){
        $hours = floor($seconds / 3600);
        $seconds %= 3600; // 更新秒数，取余数
        $minutes = floor($seconds / 60);
        $seconds %= 60; // 更新秒数，取余数
        $seconds = round($seconds); // 四舍五入到整数
        $timeFormatted = sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
        return $timeFormatted; // 输出结果

	}
}