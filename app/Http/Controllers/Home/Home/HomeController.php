<?php

namespace App\Http\Controllers\Home\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Home\Shop;
use Illuminate\Support\Facades\Redis;
class HomeController extends Controller
{
    public function index(){
        $conf = Redis::get('conf');
        $conf = unserialize($conf);
//        dd($conf);
        return view('home/home/index',compact('conf'));
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
               $query->where('vstatus',2);
           })->first();
//       dd($data);
        return json_encode($data);//必须转换为json格式的字符串
    }
}
