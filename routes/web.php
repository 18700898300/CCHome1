<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop',function (){
    return view('shop');
});
Route::get('/order',function (){
    return view('order');
});

Route::get('/home/cart/','Home\CartController@cart');

Route::get('/home/index',function(){
    return view('home/index');
});

// 商户分类模块,添加分类
Route::get('/admin/shop_type/add','Admin\ShoptypeController@add');
// 执行添加
Route::post('/admin/shop_type/store','Admin\ShoptypeController@store');
// 分类列表
Route::get('/admin/shop_type/list','Admin\ShoptypeController@list');
// 编辑分类
Route::get('/admin/shop_type/edit/{id}','Admin\ShoptypeController@edit');
Route::post('/admin/shop_type/update','Admin\ShoptypeController@update');
// 删除分类
Route::get('/admin/shop_type/del/{id}','Admin\ShoptypeController@delete');

Route::get('/index',function(){
    return view('index');
});
//商户登录
Route::get('/admin/mlogin','Admin\MerchantController@mlogin');
Route::post('/admin/domlogin','Admin\MerchantController@domlogin');
Route::get('/admin/yzm','Admin\MerchantController@yzm');
Route::get('/admin/crypt','Admin\MerchantController@crypt');
//商户后台
Route::get('/admin/merindex','Admin\MerController@merindex');

