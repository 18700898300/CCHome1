<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class AdminIslogin
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
        //如果后台管理员登录了就放行，如果没有登录就拦住返回到登录页面
        if(Session::get('user')){
            return $next($request);
        }else{
            return redirect('admin/xtAdmin/login')->with('errors','请先登录，注意素质');
        }
    }
}
