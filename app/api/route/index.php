<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

//Route::miss(function() {
//    return '404 Not Found!';
//});
Route::group(function ()  {

Route::post('data/tongji','data/tongji');
Route::post('data/install','data/install');

Route::get('tongbu/fabu','tongbu/fabu');
})->allowCrossDomain();
