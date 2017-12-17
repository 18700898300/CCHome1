<?php

namespace App\Http\Middleware\Admin\Merchant;
use App\Http\Model\MerUser;
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
       $buser =  Session::get('meruser');
//        dd($buser);
        $user = MerUser::with('shop')->where('phone',$buser['phone'])->get();
//        dd($user);
        $vstatus = $user[0]->shop['vstatus'];
//        dd($status);
        if(Session::get('meruser') && $vstatus == 2){
            return $next($request);
        }else{
            return redirect('home/qstatus')->with('errors','请先查询您的审核状态...');
        }

    }
}
