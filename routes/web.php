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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop',function (){
    return view('shop');
});

//前台登录
Route::get('home/login','Home\LoginController@login');
Route::get('home/login2','Home\LoginController@login2');
Route::get('home/yzm','Home\LoginController@yzm');

Route::get('/code/captcha/{tmp}', 'Home\LoginController@captcha');


Route::post('home/dologin','Home\LoginController@dologin');



//商户的入驻申请
Route::get('home/reg','Home\RegController@reg');

Route::post('home/doreg','Home\RegController@doreg');

//前台的个人资料
Route::get('home/person',function(){
    return view('Home.person');
});

Route::get('home/person','Home\PersonController@index');
Route::post('home/person/edit','Home\PersonController@edit');
//编辑头像
Route::get('home/avatar',function(){
    return view('Home.avatar');
});

Route::post('home/avatar/upload','Home/PersonController@upload');

//设置密码
Route::get('home/setpwd','Home\PersonController@setpwd');
Route::post('home/dosetpwd','Home\PersonController@dosetpwd');


//修改密码
Route::get('home/changepwd','Home\PersonController@changepwd');
Route::post('home/dochangepwd','Home\PersonController@dochangepwd');

//地址管理
Route::get('home/address',function(){
    return view('Home.address');
});


//安全中心
Route::get('home/safe',function(){
    return view('Home.safe');
});
