<?php

namespace App\Http\Controllers\Home\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Home\Shop;
class HomeController extends Controller
{
    public function index(){
        return view('home/home/index');
    }

    public function query(Request $request){
//        $goodsShow = Goods::where('cate_id','=',$cate_id)
//            ->where(function($query){
//                $query->where('status','<','61')
//                    ->orWhere(function($query){
//                        $query->where('status', '91');
//                    });
//            })->first();
//        $keywords1 && $handle->where('field_name','like','%' . $keywords1 . '%');
        //return 555;
//        $datas= $_POST['datas'];
        $datas = $request->datas;

       $data = Shop::with('food')->where('address','like','%'.$datas.'%')
           ->orWhere(function($query)use($datas){
               $query->orWhere('name','like','%'.$datas.'%');
           })->where(function($query)use($datas){
               $query->where('status',2);
           })->first();
//       dd($data);
        return json_encode($data);//必须转换为json格式的字符串
    }
}
