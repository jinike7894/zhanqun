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

Route::get('/nav/:channel','index/nav')->pattern(['channel' => '\d+(_\d+)?$']);

Route::get('/featured/:channel','index/featured')->pattern(['channel' => '\d+(_\d+)?$']);

Route::get('/novel/:channel','index/novel')->pattern(['channel' => '\d+(_\d+)?$']);

Route::get('/novel/rank/:channel','index/novel_rank')->pattern(['channel' => '\d+(_\d+)?$']);

Route::get('/novel/category/:channel','index/novel_category')->pattern(['channel' => '\d+(_\d+)?$']);

Route::get('/novel/detail/:channel','index/novel_detail')->pattern(['channel' => '\d+(_\d+)?$']);

Route::get('/novel/chapter/:channel','index/novel_chapter')->pattern(['channel' => '\d+(_\d+)?$']);

Route::get('/comic/:channel','index/comic')->pattern(['channel' => '\d+(_\d+)?$']);

Route::get('/comic/rank/:channel','index/comic_rank')->pattern(['channel' => '\d+(_\d+)?$']);

Route::get('/comic/category/:channel','index/comic_category')->pattern(['channel' => '\d+(_\d+)?$']);

Route::get('/comic/detail/:channel','index/comic_detail')->pattern(['channel' => '\d+(_\d+)?$']);

Route::get('/comic/chapter/:channel','index/comic_chapter')->pattern(['channel' => '\d+(_\d+)?$']);

Route::get('/test/:channel','index/test')->pattern(['channel' => '\d+(_\d+)?$']);

Route::post('/tongji','data/tongji');

Route::post('/install','data/install');


Route::get('/dhclick','data/dhclick');

Route::get('/getfeatured','index/getfeatured');
Route::post('/syncData','api/syncData');
//Route::get('index/epass','index/epass');
//Route::get('/:channel','H5/index')->pattern(['channel' => '\d+(_\d+)?$']);
//Route::get('/abc/:channel','H5/index1')->pattern(['channel' => '\d+(_\d+)?$']);
//Route::post('api/tongji','Api/tongji');
//Route::post('/getip','index/getip')->allowCrossDomain();
//Route::get('/getip','index/getip1')->allowCrossDomain();