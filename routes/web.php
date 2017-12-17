<?php
//Route::get('test','Admin\Flink\FlinkController@test');

Route::get('/', function () {
    return view('welcome');
});


// 登录系统后台
Route::get('admin/xtAdmin/login','Admin\xtAdmin\LoginController@login');
//验证码
Route::get('admin/xtAdmin/code','Admin\xtAdmin\LoginController@code');
//验证登录
Route::post('admin/xtAdmin/dologin','Admin\xtAdmin\LoginController@doLogin');
// 系统后台管理员申请
Route::get('admin/xtAdmin/register','Admin\xtAdmin\RegisterController@register');
//验证申请
Route::post('admin/xtAdmin/doregister','Admin\xtAdmin\RegisterController@doregister');

// 系统后台
Route::group(['middleware'=>['adminIslogin','HasRole'],'prefix'=>'admin/xtAdmin','namespace'=>'Admin\xtAdmin'],function(){
    //进入系统后台首页
    Route::get('index','IndexController@index');
    Route::get('info','IndexController@info');
//    退出登录
    Route::get('logout','IndexController@logout');

//    修改密码
    Route::get('password/edit/{id}','PasswordController@edit');
//    执行修改
    Route::post('password/update','PasswordController@update');

//    管理员模块
    Route::resource('adminUser','Admin_userController');
//    管理员申请列表
    Route::get('ask','Admin_userController@ask');
//    删除申请表中的申请记录
    Route::post('delask/{id}','Admin_userController@delask');
    Route::get('delasks/{id}','Admin_userController@delasks');

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
    Route::post('/shop_type/delCate/{id}','Shop_typeController@del');

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

//前台登录
//短信登录页面
Route::get('home/login','Home\LoginController@login');
//验证码
Route::get('home/yzm','Home\LoginController@yzm');
//验证码生成
Route::get('/code/captcha/{tmp}', 'Home\LoginController@captcha');
//执行登录
Route::post('home/dologin','Home\LoginController@dologin');
//手机号登录页面
Route::get('home/login2','Home\LoginController@login2');
//获取手机短信验证码
Route::post('home/sendcode','Home\LoginController@sendcode');
//执行手机号登录
Route::post('home/dologin2','Home\LoginController@dologin2');
//进入前台首页
Route::get('home/index','Home\IndexController@index');
//进入商家店铺
Route::get('home/shop/{id}','Home\IndexController@shop');
Route::get('/crypt','Home\LoginController@crypt');

// CChome前台

Route::group(['prefix'=>'home','namespace'=>'Home'],function() {
//    进入前台首页
    Route::get('index', 'IndexController@index');
//    点击一级分类显示二级分类
    Route::post('index/type/{id}','IndexController@type');
//    进入商家店铺
    Route::get('shop/{id}', 'IndexController@shop');
});


Route::group(['middleware'=>['homeIslogin'],'prefix'=>'home','namespace'=>'Home'],function(){
//退出登录
Route::get('quit','IndexController@quit');
//前台的个人资料
Route::get('/person','PersonController@index');
Route::post('/person/edit','PersonController@edit');
//显示编辑头像
Route::get('/avatar','PersonController@avatar');
Route::post('/avatar/upload','PersonController@upload');
//更改手机号
//显示更改手机号的页面
Route::get('/changephone','PersonController@changephone');
//设置密码
Route::get('/setpwd','PersonController@setpwd');
Route::post('/dosetpwd','PersonController@dosetpwd');
//修改密码
Route::get('/changepwd','PersonController@changepwd');
Route::post('/dochangepwd','PersonController@dochangepwd');
//地址管理
//显示地址
Route::get('/address','PersonController@address');
//执行添加地址
Route::post('/person/insertsite','PersonController@insertsite');
//显示修改地址
Route::post('/person/editsite','PersonController@editsite');
//安全中心
Route::get('/safe','PersonController@safe');
//购物车
//把菜品添加到购物车
Route::post('/addcart/','CartController@addcart');
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
//移除订单某种菜品
Route::get('/order/remove','OrderController@remove');
//显示添加地址弹出层
Route::get('/order/addsite','OrderController@addsite');
//添加地址插入数据库
Route::post('/order/insertsite','OrderController@insertsite');
//显示地址
Route::get('/order/indexsite','OrderController@indexsite');
//修改地址页
Route::get('/order/editsite','OrderController@editsite');
//删除地址
Route::post('/order/delsite','OrderController@delsite');
//修改执行方法
Route::post('/order/updatesite','OrderController@updatesite');
//执行确认下单
Route::post('/order/insert','OrderController@insert');
//收银台页面
Route::get('/order/syt/{syt}','OrderController@syt');
//结算页
Route::get('/order/jsy/','OrderController@jsy');
//执行结算修改订单状态 (下单已支付)
Route::get('/order/js','OrderController@js');
//检测超出时间后修改订单状态 (支付超时,订单已取消)
Route::get('/order/ddsx','OrderController@ddsx');

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



//商家后台, 菜品标签模块
Route::resource('foodlabel','shAdmin\FoodLabelController');
//商家后台, 菜品管理模块
Route::resource('food','shAdmin\FoodController');
//执行菜品图片上传
Route::post('food/upload','shAdmin\FoodController@upload');
});

//商户的入驻申请
Route::get('home/reg','Home\RegController@reg');

Route::post('home/doreg','Home\RegController@doreg');