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