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
	}
	public function index($channel)
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
			return View::fetch('index_pc');
		}
	}
	public function category($channel)
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
			return View::fetch('category_pc');
		}
	}
	public function videoplay($channel)
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
			return View::fetch('vodplay_pc');
		}
	}
	public function vod()
	{
		if(ismobile())
		{
			return View::fetch('vod_mobile');
		}else{
			return View::fetch('vod_pc');
		}
	}	
	public function searchhome($channel)
	{
		$menulist = $this->Menu->getmenu(0);
		View::assign('menulist',$menulist);
        View::assign('channel',$channel);
		return View::fetch();
	}
	public function search($channel)
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
			return View::fetch('search_pc');
		}
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
