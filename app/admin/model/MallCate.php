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

class MallCate extends TimeModel
{

    protected $deleteTime = 'delete_time';
	public function getmenu($pid = 0)
	{
		if($pid ==='')
		{
			$list = $this->field('id,pid,title')->where(array('status'=>1))->order('sort desc,id asc')->cache(600)->select();
		}else{
			$map[] = ['pid','=',$pid];
			$list = $this->field('id,pid,title')->where(array('status'=>1,'pid'=>$pid))->order('sort desc,id asc')->cache(600)->select();
		}
		return $list;
	}
	public function getPidMenuList()
    {
		$map[] = ['status', '=', 1];
        $list        = $this->field('id,pid,title')
            ->where($map)
            ->select()
            ->toArray();
        $pidMenuList = $this->buildPidMenu(0, $list);
        $pidMenuList = array_merge([[
            'id'    => 0,
            'pid'   => 0,
            'title' => '顶级菜单',
        ]], $pidMenuList);
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

    public function getCateInfo($id = 0)
    {
        $list = $this->field('id,pid,title')->where(array('id'=>$id))->cache(600)->find();
        return $list;
    }

}