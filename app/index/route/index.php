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
//导航站
// Route::get('index/test','index/test');
Route::get('/','index/index');
Route::get('/:channel','index/index')->pattern(['channel' => '\d+(_\d+)?$']);

//视频站
// Route::get('/video','video/index');
Route::get('/video/:channel','video/index')->pattern(['channel' => '\d+(_\d+)?$']);
Route::get('/video/search/:channel','video/search')->pattern(['channel' => '\d+(_\d+)?$']);
Route::get('/video/searchres/:channel','video/searchres')->pattern(['channel' => '\d+(_\d+)?$']);
Route::get('/video/info/:channel','video/info')->pattern(['channel' => '\d+(_\d+)?$']);
Route::get('/vod/:channel','video/vod')->pattern(['channel' => '\d+(_\d+)?$']);
//小说站
Route::get('/novel/:channel','novel/index')->pattern(['channel' => '\d+(_\d+)?$']);
Route::get('/novel/search/:channel','novel/search')->pattern(['channel' => '\d+(_\d+)?$']);
Route::get('/novel/searchres/:channel','novel/searchres')->pattern(['channel' => '\d+(_\d+)?$']);
Route::get('/novel/info/:channel','novel/info')->pattern(['channel' => '\d+(_\d+)?$']);
Route::get('/novel/chapter/:channel','novel/read')->pattern(['channel' => '\d+(_\d+)?$']);
//漫画站
Route::get('/comics/:channel','comics/index')->pattern(['channel' => '\d+(_\d+)?$']);
Route::get('/comics/search/:channel','comics/search')->pattern(['channel' => '\d+(_\d+)?$']);
Route::get('/comics/searchres/:channel','comics/searchres')->pattern(['channel' => '\d+(_\d+)?$']);
Route::get('/comics/info/:channel','comics/info')->pattern(['channel' => '\d+(_\d+)?$']);
Route::get('/comics/chapter/:channel','comics/read')->pattern(['channel' => '\d+(_\d+)?$']);
//吃瓜
Route::get('/chigua/:channel','chigua/index')->pattern(['channel' => '\d+(_\d+)?$']);
Route::get('/chigua/info/:channel','chigua/info')->pattern(['channel' => '\d+(_\d+)?$']);
Route::get('/chigua/search/:channel','chigua/search')->pattern(['channel' => '\d+(_\d+)?$']);
Route::get('/chigua/searchres/:channel','chigua/searchres')->pattern(['channel' => '\d+(_\d+)?$']);
Route::get('/chigua/contents/:channel','chigua/getcontents')->pattern(['channel' => '\d+(_\d+)?$']);
//图片
Route::get('/image/:channel','image/index')->pattern(['channel' => '\d+(_\d+)?$']);
Route::get('/image/search/:channel','image/search')->pattern(['channel' => '\d+(_\d+)?$']);
Route::get('/image/searchres/:channel','image/searchres')->pattern(['channel' => '\d+(_\d+)?$']);
Route::get('/image/info/:channel','image/info')->pattern(['channel' => '\d+(_\d+)?$']);
// Route::get('/image/contents/:channel','chigua/getcontents')->pattern(['channel' => '\d+(_\d+)?$']);

// Route::get('/category/:channel','index/category')->pattern(['channel' => '\d+(_\d+)?$']);

// Route::get('/searchhome/:channel','index/searchhome')->pattern(['channel' => '\d+(_\d+)?$']);

// Route::get('/videoplay/:channel','index/videoplay')->pattern(['channel' => '\d+(_\d+)?$']);

// Route::get('/search/:channel','index/search')->pattern(['channel' => '\d+(_\d+)?$']);

// Route::get('/vod/:channel','index/vod')->pattern(['channel' => '\d+(_\d+)?$']);

// Route::get('/nav/:channel','index/nav')->pattern(['channel' => '\d+(_\d+)?$']);

// Route::get('/featured/:channel','index/featured')->pattern(['channel' => '\d+(_\d+)?$']);

// Route::get('/novel/:channel','index/novel')->pattern(['channel' => '\d+(_\d+)?$']);

// Route::get('/novel/rank/:channel','index/novel_rank')->pattern(['channel' => '\d+(_\d+)?$']);

// Route::get('/novel/category/:channel','index/novel_category')->pattern(['channel' => '\d+(_\d+)?$']);

// Route::get('/novel/detail/:channel','index/novel_detail')->pattern(['channel' => '\d+(_\d+)?$']);

// Route::get('/novel/chapter/:channel','index/novel_chapter')->pattern(['channel' => '\d+(_\d+)?$']);

// Route::get('/comic/:channel','index/comic')->pattern(['channel' => '\d+(_\d+)?$']);

// Route::get('/comic/rank/:channel','index/comic_rank')->pattern(['channel' => '\d+(_\d+)?$']);

// Route::get('/comic/category/:channel','index/comic_category')->pattern(['channel' => '\d+(_\d+)?$']);

// Route::get('/comic/detail/:channel','index/comic_detail')->pattern(['channel' => '\d+(_\d+)?$']);

// Route::get('/comic/chapter/:channel','index/comic_chapter')->pattern(['channel' => '\d+(_\d+)?$']);

// Route::get('/chigua/:channel','index/chigua')->pattern(['channel' => '\d+(_\d+)?$']);

// Route::get('/chigua/detail/:channel','index/chigua_detail')->pattern(['channel' => '\d+(_\d+)?$']);

// Route::get('/test/:channel','index/test')->pattern(['channel' => '\d+(_\d+)?$']);

Route::post('/tongji','data/tongji');

Route::post('/install','data/install');


// Route::get('/dhclick','data/dhclick');

// Route::get('/getfeatured','index/getfeatured');
// Route::post('/syncData','api/syncData');
//Route::get('index/epass','index/epass');
//Route::get('/:channel','H5/index')->pattern(['channel' => '\d+(_\d+)?$']);
//Route::get('/abc/:channel','H5/index1')->pattern(['channel' => '\d+(_\d+)?$']);
//Route::post('api/tongji','Api/tongji');
//Route::post('/getip','index/getip')->allowCrossDomain();
//Route::get('/getip','index/getip1')->allowCrossDomain();