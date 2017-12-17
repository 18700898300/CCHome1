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
//        获得当前店铺信息
        $shop = Shop::find($id);
//        dd($shop);
//        获得当前店铺所有菜品
        $foods = $shop->food;
//        dd($foods);
//        求得店铺总销量
        $flink = Shop::with('flink')->where('sid',$id)->get();
        $flink = $flink[0]->flink;
//        dd($flink);
        $sum = 0;
        foreach ($foods as $k=>$v){
            $sum += $v->sum;
        }
        $shop->sum = $sum;
        return view('home/shop',compact('shop','foods','flink'));
    }

    //退出登录
    public function quit()
    {
        return redirect('home/login');
    }
}
