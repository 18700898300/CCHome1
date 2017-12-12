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
        //return 555;
//        $datas= $_POST['datas'];
        $datas = $request->datas;
       $data = Shop::where('address',$datas)->first();
//       dd($data);
        return json_encode($data);//必须转换为json格式的字符串
    }
}
