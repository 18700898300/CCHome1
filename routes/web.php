<?php
//Route::get('test','Admin\Flink\FlinkController@test');

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

