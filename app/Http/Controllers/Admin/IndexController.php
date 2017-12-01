<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view('admin/index');
    }
// 返回后台首页信息部分的视图
    public function info()
    {
        return view('admin/info');
    }
//    退出登录
    public function logout()
    {
        session()->flush();

        return redirect('admin/login');
    }

}
