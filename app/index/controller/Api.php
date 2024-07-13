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
}