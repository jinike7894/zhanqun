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

class ComicCatalogs extends TimeModel
{

    protected $table = "";

    protected $deleteTime = 'delete_time';

    public function getlist($novel_id)
    {
        $map1[] = ['novel_id','=',$novel_id];
        $map1[] = ['status', '=', 1];
        $list=$this->where($map1)->order('chapter asc')->cache(600)->select();

        foreach ($list as &$item){
            $item['name'] = mbConvert($item['name']);
        }
        return $list;
    }
    public function getmorelist($cate_id,$num)
    {
        $map[] = ['cate_id','=',$cate_id];
        $list = $this->where($map)->cache(600)->limit(24)->orderRaw("rand()")->select();
        foreach ($list as &$item){
            $item['enpic'] = replaceVideoCdn($item['enpic'],'video_img_cdn');
            $item['video'] = replaceVideoCdn($item['video'],'video_cdn');
            $item['title'] = mbConvert($item['title']);
        }
        return $list;
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
            $pid = $mallcate::where(array('id'=>$list[$i]['cate_id']))->cache(600)->value('pid');
            if($pid ==0)
            {
                $list[$i]['category_id'] = $list[$i]['cate_id'];
                $list[$i]['category_child_id'] = 0;
            }else{
                $list[$i]['category_id'] = $pid;
                $list[$i]['category_child_id'] = $list[$i]['cate_id'];
            }
        }
        foreach ($list as &$item){
            $item['enpic'] = replaceVideoCdn($item['enpic'],'video_img_cdn');
            $item['video'] = replaceVideoCdn($item['video'],'video_cdn');
            $item['title'] = mbConvert($item['title']);
        }
        return $list;
    }

}