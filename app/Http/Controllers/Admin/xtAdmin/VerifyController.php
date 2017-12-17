<?php

namespace App\Http\Controllers\Admin\xtAdmin;

use App\Models\Admin\Shop_type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Home\Shop;
class VerifyController extends Controller
{
    public function index(){
//        $cates = Shop::with('cate')->get();
//        dd(cates);
        $shops = Shop::with('cate')->where([])->orderBy('ctime','asc')->paginate(1);
//
//        dd($shops);
        return  view('admin.verify.verify',compact('shops'));
    }


    public  function result($sid){
        $status = Shop::find($sid);
        //first()和first都是取回单条,不可以混合乱用,只能取其一.
//        $status = Shop::where('sid',$sid)->first();
        ////        dd($status);
        return view ('admin/verify/result',compact('status'));
    }


    public function update(Request $request,$sid){
//        dd($request->input());
        $input = $request->except('_token');
//        dd($sid);
//        dd($input);
        $res = Shop::where('sid',$sid)->update($input);
//        dd($res);
        if($res){
            return redirect('admin/xtAdmin/verify')->with('msg','处理成功!');
        }else{
            return redirect('admin/xtAdmin/result/'.$sid)->with('msg','处理失败,请重试!');
        }
    }
}
