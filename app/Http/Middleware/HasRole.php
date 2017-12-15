<?php

namespace App\Http\Middleware;

use App\Models\Admin\AdminUser;
use Closure;

class HasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        1.获取当前管理员执行执行的操作对应的路由对应的控制器的方法
        //当前正在执行的路由对应的控制器的方法名
//        "App\Http\Controllers\Admin\UserController@index"
        $route = \Route::current()->getActionName();
//        dd($route);

//        2.获取当前管理员所拥有的权限
//        获取当前管理员
        $id = session('user')['id'];
        $user = AdminUser::find($id);

//        2.1 获取当前管理员拥有的角色
        $roles = $user->role;
//        dd($roles);

//        定义一个数组，存放管理员拥有的所有权限
        $arr = [];
//        2.2 根据拥有的角色获取权限
        foreach ($roles as $k=>$v){
            //根据角色找到相关的权限的数组
            foreach ($v->permission as $m=>$n){
                $arr[] = $n->description;
            }
        }
//        dd($arr);
//        去除权限中重复的记录
        $arr = array_unique($arr);

//        2.3 判断当前路由对应的控制器的方法是否在管理员拥有的权限中
//        如果当前路由对应的控制器的方法在管理员拥有的权限中，放行；如果不在就提示没有权限
        if(in_array($route,$arr)){
//            dd(111);
            return $next($request);
        }else{
            return redirect('errors/auth');
        }



    }
}
