<?php

namespace App\Http\Middleware\Admin\Merchant;

use Closure;
use Session;
class IsLogin
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
//        dd(1111);
        //用户登录就放行,若没有登录就拦截返回到登录页面
        if(Session::get('meruser')){
            return $next($request);
        }else{
            return redirect('admin/mlogin')->with('errors','请先登录......');
        }

    }
}
