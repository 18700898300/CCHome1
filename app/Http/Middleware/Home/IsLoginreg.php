<?php

namespace App\Http\Middleware\Home;

use Closure;
use Illuminate\Support\Facades\Session;

class IsLoginreg
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
        if(Session::get('meruser')){
            return $next($request);
        }else{
            return redirect('admin/meregisterm')->with('errors','请先注册......');
        }

    }
}
