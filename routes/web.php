<?php
//Route::get('test','Admin\Flink\FlinkController@test');

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




Route::get('/shop',function (){
    return view('shop');
});
Route::get('/order',function (){
    return view('order');
});





Route::get('/index',function(){
    return view('index');
});

//商户注册
Route::get('/admin/meregister','Admin\MerregController@meregister');


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
    Route::get('info','MerController@info');

    //友情链接类别管理
    Route::resource('flinkt','Flinkt\FlinktController');
//    排序,必须有路由,不是资源路由,因自己定义方法,否则报错方法不允许
    Route::post('flinkt/changeOrder','Flinkt\FlinktController@changeOrder');

    //    友情链接管理
    Route::post('flink/{id}','Flink\FlinkController@update');
    Route::resource('flink','Flink\FlinkController');
    Route::post('upload','Flink\FlinkController@upload');//控制器的位置写对,不可忘加Flink
    //网站配置
    Route::resource('config','Config\ConfigController');
    Route::post('config/contentchange','Config\ConfigController@ContentChange');
    //后台评论管理
    Route::get('comment','Comment\CommentController@index');



});

//用户评论
Route::get('home/comment/index','home/CommentController@index');
Route::post('comment/add','CommentController@add');








