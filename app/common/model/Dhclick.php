<?php
namespace app\common\model;

use think\Model;
use think\facade\Db;

class Dhclick extends Model
{
	// 设置字段信息
    protected $schema = [
        'id'          => 'int',
        'name'          => 'string',
        'num'          => 'int',
        'url'          => 'string',
        'create_time' => 'int',
        'update_time' => 'int',
        'delete_time' => 'int',
    ];

    function getNumByName($name)
    {
        return $this->where(['name' => $name])->find();
    }
	
}

?>