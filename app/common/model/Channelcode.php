<?php
namespace app\common\model;

use think\Model;
use think\facade\Db;

class Channelcode extends Model
{
	// 设置字段信息
    protected $schema = [
        'id'          => 'int',
        'uid'          => 'int', //用户ID
        'channelCode'          => 'string',
        'time_range'          => 'string',
        'mininum'          => 'int',
        'ratio'          => 'int',
        'coefficient'          => 'float',
        'price'          => 'float',
        'autoc'          => 'tinyint',
        'status'          => 'tinyint',
        'backjumpstatus'          => 'tinyint',
        'remark'          => 'string',
        'statistics_code' => 'string',
        'try_yp'        => 'string',
        'try_home'      => 'string',
        'try_zb'        => 'string',
        'create_time' => 'int',
        'update_time' => 'int',
        'delete_time' => 'int',
    ];
	
}

?>