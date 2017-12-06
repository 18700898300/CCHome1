<?php


Route::get('/', function () {
    return view('welcome');
});

// 登录系统后台
Route::get('admin/xtAdmin/login','Admin\xtAdmin\LoginController@login');
//验证登录
Route::post('admin/xtAdmin/dologin','Admin\xtAdmin\LoginController@doLogin');

// 系统后台
Route::group(['middleware'=>['adminIslogin','HasRole'],'prefix'=>'admin/xtAdmin','namespace'=>'Admin\xtAdmin'],function(){
    //进入系统后台首页
    Route::get('index','IndexController@index');
    Route::get('info','IndexController@info');
    Route::get('logout','IndexController@logout');

//    管理员模块
    Route::resource('adminUser','Admin_userController');
//    授权管理员
    Route::get('adminUser/auth/{id}','Admin_userController@auth');
//    执行管理员授权
    Route::post('adminUser/doauth','Admin_userController@doauth');

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

//    角色模块
    Route::resource('role','RoleController');
//    角色授权
    Route::get('role/auth/{id}','RoleController@auth');
//    执行角色授权
    Route::post('role/doauth','RoleController@doauth');

//    权限模块
    Route::resource('permission','PermissionController');
});
// 如果管理员没有权限则执行这个路由
Route::get('errors/auth',function(){
    return view('errors.auth');
});



// CChome前台
Route::group(['prefix'=>'home','namespace'=>'Home'],function(){
//    进入前台首页
    Route::get('index','IndexController@index');
//    进入商家店铺
    Route::get('shop/{id}','IndexController@shop');



    //购物车
//把菜品添加到购物车
    Route::get('/addcart/{id}','CartController@addcart');
//把菜品信息显示在购物车页面
    Route::get('/cart','CartController@cart');
//对菜品的数量进行递减
    Route::get('/cart/jian','CartController@jian');
//对菜品的数量进行递增
    Route::get('/cart/jia','CartController@jia');
//移除某种菜品
    Route::get('/cart/remove','CartController@remove');
//清空所有菜品
    Route::get('/cart/removes','CartController@removes');
//订单
//显示确认订单页
Route::get('/order/index','OrderController@index');
//显示添加地址弹出层
Route::get('/order/addsite','OrderController@addsite');
//添加地址插入数据库
Route::post('/order/insertsite','OrderController@insertsite');

});

//商家后台, 菜品标签模块
Route::resource('admin/foodlabel','Admin\shAdmin\FoodLabelController');
//商家后台, 菜品管理模块
Route::resource('admin/food','Admin\shAdmin\FoodController');
Route::post('admin/food/upload','Admin\shAdmin\FoodController@upload');


Route::get('/shop',function (){
    return view('shop');
});
Route::get('/order',function (){
    return view('order');
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
Route::get('/admin/merindex','Admin\MerController@merindex');


