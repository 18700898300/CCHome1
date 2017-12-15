<?php

namespace App\Http\Controllers\Home;

use App\Models\Admin\Shop_type;
use App\Models\Home\Food_label;
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
        $shops = Shop::with('food')->get();
//        dd($shops);
        $sum = 0;
//        foreach ($shops as $key => $value) {
//            foreach($value->food as $k=>$v){
//                $sum += $v->sum;
//                $value['sum'] = $sum;
//            }
//
//
//        }
//        dd($shops);
        return view('home/index',compact('cates','shops','pids','sum'));
    }

    public function shop($id)
    {
//        获得当前店铺信息
        $shop = Shop::find($id);
//        dd($shop);
//        获得当前店铺所有菜品标签
        $labels = $shop->food_label;
//        dd($labels);
//        通过标签获得标签与菜品
        $lids = [];
        foreach($labels as $key=>$value){
            $lids[] = $value->lid;
        }
        $f = Food_label::with('food')->whereIn('lid',$lids)->get();
//        dd($f);
//        dd($foods[0]['food'][0]['sum']);
//        求得店铺总销量
        $sum = 0;
//        所有菜品
        $foods = [];
//        $s = [];
        foreach ($f as $k=>$v){
            foreach($v->food as $n){
                $foods[] = $n;
                $sum += $n['sum'];
//                $s[] = $n['sum'];
            }
        }
//        dd($sum);
//        dd($foods);
//        dd($s);
        $shop->sum = $sum;
        return view('home/shop',compact('shop','foods','labels'));
    }

    //退出登录
    public function quit()
    {
        return redirect('home/login');
    }
}
