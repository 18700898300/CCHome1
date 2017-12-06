<?php

namespace App\Http\Controllers\Admin\xtAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view('admin/xtAdmin/index');
    }
// 返回后台首页信息部分的视图
    public function info()
    {
        return view('admin/xtAdmin/info');
    }

    /**
     * 退出登录
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        session()->flush();

        return redirect('admin/xtAdmin/login');
    }

}
