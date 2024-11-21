<?php
namespace app\common\model;

use Think\Model;
use Think\Page;
use Think\Db;

class Products extends Model
{
	// 设置字段信息
    protected $schema = [
        'id'          => 'int',
        'name'          => 'string',
        'k_name'          => 'string',
        'ad_position'     => 'tinyint',
        'is_home'          => 'tinyint',
        'is_banner'          => 'tinyint',
        'is_browser'          => 'tinyint',
        'img'        => 'string',
        'androidurl'      => 'string',
        'is_apk'          => 'int',
        'iosurl'       => 'string',
        'slogan'          => 'string',
        'is_best'          => 'int',
        'glory'          => 'string',
        'fav'          => 'string',
        'txt'          => 'string',
        'pid'          => 'int',
        'cid'          => 'int',
        'due_date'     => 'string',
        'sort'          => 'int',
        'downnum'          => 'int',
        'status'          => 'tinyint',
        'pics'      => 'string',
        'content'      => 'string',
		'remark'          => 'string',
        'create_time' => 'int',
        'update_time' => 'int',
        'delete_time' => 'int',
		'url_type' => 'int',
    ];
	
	public function search($page=1,$limit=10,$wd)
	{
	    $map[]=['name','like',"%{$wd}%"];
	    $map[] = ['status','=',1];
	    $map[] = ['is_banner','=',0];
        $map[] = ['ad_position','=',0];
	    $map1[] = ['slogan','like',"%{$wd}%"];
	    $map1[] = ['status','=',1];
	    $map1[] = ['is_banner','=',0];
        $map1[] = ['ad_position','=',0];
	    $list = $this->field('id,img,name,slogan,downnum')->whereOr([$map,$map1])->order('sort asc,id asc')->page($page, $limit)->cache(600)->select();
	    if(count($list)==0)
	    {
	        $map2[] = ['status','=',1];
	        $map2[] = ['is_banner','=',0];
            $map2[] = ['ad_position','=',0];
	        $page--;
	        $list = $this->field('id,img,name,slogan,downnum')->where($map2)->order('sort asc,id asc')->page($page, $limit)->cache(600)->select();
	    }
	    return $list;
	}
	
	public function getproducts($page=1,$limit=10,$pid=1)
	{
	    $map[]=['pid','=',$pid];
	    $map[] = ['status','=',1];
	    if (in_array($pid, [9,10,11])) {
	       $map[] = ['is_banner','=',1];
	    }else{
	         $map[] = ['is_banner','=',0];
	    }
        $map[] = ['ad_position','=',0];
	    if($pid == 3)
	    {
	        $list = $this->field('id,img,name,slogan,is_best,glory,fav,txt,downnum,androidurl,androidurl as url,is_apk,is_browser,iosurl')->where($map)->order('is_best desc,sort asc,id asc')->page($page, $limit)->cache(600)->select();
	    }else{
	        $list = $this->field('id,img,name,slogan,is_best,glory,fav,txt,downnum,androidurl,androidurl as url,is_apk,is_browser,iosurl')->where($map)->order('sort asc,id asc')->page($page, $limit)->cache(600)->select();
	    }
        $ip = GetIP();
        $location = get_location($ip);
        $region = ($location['city'] ?? '') ?: ($location['province'] ?? '');
	    for($i=0;$i<count($list);$i++) {
	        $list[$i]['downnum'] = round($list[$i]['downnum'] /10000) . '万';
            $list[$i]['name'] = str_replace('{city}', str_replace('市', '', $region), $list[$i]['name']);
	    }
	    return $list;
	}
}

?>