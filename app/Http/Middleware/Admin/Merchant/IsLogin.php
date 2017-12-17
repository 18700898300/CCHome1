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
//           dd($buser);
       if($buser == null){
           return redirect('admin/mlogin')->with('errors','请先登录......');
       }
//         dd($buser);
//        dd($buser['bid']);
        $user = MerUser::with('shop')->where('bid',$buser['bid'])->get();
//        dd($user);
        $vstatus = $user[0]->shop[0]['vstatus'];
//        dd($vstatus);
        if($vstatus == 2){
            return $next($request);
        }else{
            return redirect('home/qstatus')->with('errors','请先查询您的审核状态...');
        }

    }
}
