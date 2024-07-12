<?php

// +----------------------------------------------------------------------
// | EasyAdmin
// +----------------------------------------------------------------------
// | PHP交流群: 763822524
// +----------------------------------------------------------------------
// | 开源协议  https://mit-license.org 
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/zhongshaofa/EasyAdmin
// +----------------------------------------------------------------------

namespace app\admin\model;


use app\common\model\TimeModel;

class MallVideos extends TimeModel
{

    protected $table = "";

    protected $deleteTime = 'delete_time';

    public function cate()
    {
        return $this->belongsTo('app\admin\model\MallCate', 'cate_id', 'id');
    }
	public function getlist($category_id,$category_child_id,$page,$pagesize)
	{
		if(!empty($category_child_id))
		{
			$map[] = ['cate_id','=',$category_child_id];
			$map[] = ['status', '=', 1];
			$list=$this->where($map)->order('sort desc,id desc')->paginate(['list_rows'=>$pagesize,'query' => request()->param()]);
		}else{
			$map[] = ['pid','=',$category_id];
			$map[] = ['status', '=', 1];
			$mallcate = new MallCate();
			$catelist = $mallcate::field('id')->where($map)->cache(600)->select()->toArray();
			$ids = array_column($catelist,'id');
			array_unshift($ids,$category_id);
			$ids = implode(',',$ids);
			$map1[] = ['cate_id','in',$ids];
			$map1[] = ['status', '=', 1];
			$list=$this->where($map1)->order('sort desc,id desc')->paginate(['list_rows'=>$pagesize,'query' => request()->param()]);
		}		
		$page = $list->render();
		$data=array("list"=>$list,"page"=>$page);
        return $data;
	}
	public function getmorelist($cate_id,$num)
	{
		$map[] = ['cate_id','=',$cate_id];
		$list = $this->where($map)->cache(600)->limit(24)->orderRaw("rand()")->select();
		return $list;
	}
	public function getsearch($keyword)
	{
		$map[] = ['title','like',"%{$keyword}%"];
		$list=$this->where($map)->order('sort desc,id desc')->paginate(['list_rows'=>30,'query' => request()->param()]);
		$mallcate = new MallCate();
		for($i=0;$i<count($list);$i++)
		{
			$pid = $mallcate::where(array('id'=>$list[$i]['cate_id']))->value('pid');
			if($pid ==0)
			{
				$list[$i]['category_id'] = $list[$i]['cate_id'];
				$list[$i]['category_child_id'] = 0;
			}else{
				$list[$i]['category_id'] = $pid;
				$list[$i]['category_child_id'] = $list[$i]['cate_id'];
			}
		}
		$page = $list->render();
		$data=array("list"=>$list,"page"=>$page);
		return $data;
	}
	public function getPidMenuList()
	{
		$mallcate = new MallCate();
        $list = $mallcate::field('id,pid,title')->where(array('status'=>1))->select()->toArray();
        $pidMenuList = $this->buildPidMenu(0, $list);
        return $pidMenuList;
    }

    protected function buildPidMenu($pid, $list, $level = 0)
    {
        $newList = [];
        foreach ($list as $vo) {
            if ($vo['pid'] == $pid) {
                $level++;
                foreach ($newList as $v) {
                    if ($vo['pid'] == $v['pid'] && isset($v['level'])) {
                        $level = $v['level'];
                        break;
                    }
                }
                $vo['level'] = $level;
                if ($level > 1) {
                    $repeatString = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    $markString   = str_repeat("{$repeatString}├{$repeatString}", $level - 1);
                    $vo['title']  = $markString . $vo['title'];
                }
                $newList[] = $vo;
                $childList = $this->buildPidMenu($vo['id'], $list, $level);
                !empty($childList) && $newList = array_merge($newList, $childList);
            }

        }
        return $newList;
    }
	/**
	*根据顺序获取数据
	*/
	public function getorderlist($order,$num)
	{
		$list=$this->order($order)->limit($num)->cache(600)->select();
		$mallcate = new MallCate();
		for($i=0;$i<count($list);$i++)
		{
			$pid = $mallcate::where(array('id'=>$list[$i]['cate_id']))->value('pid');
			if($pid ==0)
			{
				$list[$i]['category_id'] = $list[$i]['cate_id'];
				$list[$i]['category_child_id'] = 0;
			}else{
				$list[$i]['category_id'] = $pid;
				$list[$i]['category_child_id'] = $list[$i]['cate_id'];
			}
		}
		return $list;
	}

}