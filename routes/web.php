<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/shop',function (){
    return view('shop');
});
Route::get('/index',function(){
    return view('index');
});
//商户登录
Route::get('/admin/mlogin','Admin\MerchantController@mlogin');
Route::post('/admin/domlogin','Admin\MerchantController@domlogin');
Route::get('/admin/yzm','Admin\MerchantController@yzm');
Route::get('/admin/crypt','Admin\MerchantController@crypt');
//商户后台

//进入商户后台首页的路由组
//注册好中间件之后,直接用别名islogin就可以
Route::group(['middleware'=>'islogin','prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('merindex','MerController@merindex');

});


//友情链接管理
//系统后台控制登录后进入,后期加入
Route::resource('admin/slideshow','Admin\SlideshowController');