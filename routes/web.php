<?php


Route::get('/', function () {
    return view('welcome');
});


// 系统后台
Route::group(['prefix'=>'admin/xtAdmin','namespace'=>'Admin\xtAdmin'],function(){
    //进入系统后台首页
    Route::get('index','IndexController@index');
    Route::get('info','IndexController@info');
    Route::get('logout','IndexController@logout');

//    商户分类模块
//    添加分类
    Route::get('/shop_type/add','Shop_typeController@add');
//    执行添加
    Route::post('/shop_type/insert','Shop_typeController@insert');
//    查看分类列表
    Route::get('/shop_type/lists','Shop_typeController@lists');
//    分类排序
    Route::post('/shop_type/changeorder','Shop_typeController@changeorder');
//    修改分类
    Route::get('/shop_type/edit/{id}','Shop_typeController@edit');
//    执行修改
    Route::post('/shop_type/update','Shop_typeController@update');
//    删除分类
    Route::post('/shop_type/delCate/{id}','Shop_typeController@delete');
});

// CChome前台
Route::group(['prefix'=>'home','namespace'=>'Home'],function(){
//    进入前台首页
    Route::get('index','IndexController@index');
//    进入商家店铺
    Route::get('shop/{id}','IndexController@shop');
});




Route::get('/shop',function (){
    return view('shop');
});
Route::get('/order',function (){
    return view('order');
});
//购物车
Route::get('/home/addcart/{id}','Home\CartController@addcart');
Route::get('/home/cart/','Home\CartController@cart');
Route::get('/home/cart/jian/','Home\CartController@jian');
Route::get('/home/cart/jia/','Home\CartController@jia');
Route::get('/home/cart/remove/','Home\CartController@remove');




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


