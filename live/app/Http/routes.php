<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Home\IndexController@index');
Route::group(['namespace'=> 'Home'],function(){
	//首页
	 Route::get('/', [
        'as' => 'index', 'uses' => 'IndexController@index'
    ]);
	 //首页直播页面
	 Route::get('/live','LiveController@index');
	 //个人中心
	 Route::get('/per','ZhuController@index');
	 //我的消息
	 Route::get('/msg','ZhuController@msg');
	 //个人财产
	 Route::get('/money','ZhuController@money');
	 //个人福利
	 Route::get('/fu','ZhuController@fuli');
	 //成为主播
	 Route::get('/go','ZhuController@go');
	 //订阅与查看历史
	 Route::get('/sub','ZhuController@sub');
	 Route::get('/ass','ZhuController@ass');
});