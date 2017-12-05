<?php

namespace App\Http\Controllers\Home;

use App\Models\Admin\Shop_type;
use App\Models\Home\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
//    前台首页
    public function index()
    {
//        获得所有分类
        $cates = Shop_type::get();
//        dd($cates);
//        获得所有商家
        $shops = Shop::get();
//        dd($shops);
        return view('home/index',compact('cates','shops'));
    }

    public function shop($id)
    {
        $foods = Shop::find($id)->food;
//        dd($foods);
        return view('home/shop',compact('foods'));
    }
}
