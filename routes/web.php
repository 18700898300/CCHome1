<?php
//Route::get('test','Admin\Flink\FlinkController@test');

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







