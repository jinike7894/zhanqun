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


Route::miss(function() {
    return '404 Not Found!';
});
// Route::get('index/test','index/test');
Route::get('/','index/index');
Route::get('/:channel','index/index')->pattern(['channel' => '\d+(_\d+)?$']);

Route::get('/category/:channel','index/category')->pattern(['channel' => '\d+(_\d+)?$']);

Route::get('/searchhome/:channel','index/searchhome')->pattern(['channel' => '\d+(_\d+)?$']);

Route::get('/videoplay/:channel','index/videoplay')->pattern(['channel' => '\d+(_\d+)?$']);

Route::get('/search/:channel','index/search')->pattern(['channel' => '\d+(_\d+)?$']);

Route::get('/vod/:channel','index/vod')->pattern(['channel' => '\d+(_\d+)?$']);


Route::get('/livestreaming/:channel','index/livestreaming')->pattern(['channel' => '\d+(_\d+)?$']);


Route::get('/hookup/:channel','index/hookup')->pattern(['channel' => '\d+(_\d+)?$']);

Route::get('/girl/:channel','index/girl')->pattern(['channel' => '\d+(_\d+)?$']);


Route::get('/drugstore/:channel','index/drugstore')->pattern(['channel' => '\d+(_\d+)?$']);


Route::get('/drug/:channel','index/drug')->pattern(['channel' => '\d+(_\d+)?$']);


Route::get('/featured/:channel','index/featured')->pattern(['channel' => '\d+(_\d+)?$']);

Route::get('/test/:channel','index/test')->pattern(['channel' => '\d+(_\d+)?$']);

Route::post('/tongji','data/tongji');

Route::post('/install','data/install');


Route::get('/dhclick','data/dhclick');

Route::get('/getfeatured','index/getfeatured');
//Route::get('index/epass','index/epass');
//Route::get('/:channel','H5/index')->pattern(['channel' => '\d+(_\d+)?$']);
//Route::get('/abc/:channel','H5/index1')->pattern(['channel' => '\d+(_\d+)?$']);
//Route::post('api/tongji','Api/tongji');
//Route::post('/getip','index/getip')->allowCrossDomain();
//Route::get('/getip','index/getip1')->allowCrossDomain();