<?php

namespace App\Http\Controllers\Home;
use Illuminate\Support\Facades\Validator;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {

        //全部商品信息
        $cart =  Cart::content();
        //总额
        $total= Cart::subtotal();
        //购物车商品的数量
        $count = Cart::count();

//        dd($cart);
//        Redis::set('name','zxw');
//        Redis::get('name');

        return view("/home/order",compact('cart','total','count'));
    }

    public function addsite()
    {
        $area = \DB::table('area')->get();
       return view('/home/addsite',compact('area'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function insertsite(Request $request)
    {
        $input = $request->except('_token');
        $rule = [
            'name'=>'required|regex:/^[\x{4e00}-\x{9fa5}A-Za-z0-9]+$/u|between:2,5',
            "sex"=>'required',
            "addr"=>'required',
            "areaid" =>'required',
            "phone"=>'required|regex:/^1[34578][0-9]{9}$/',
        ];


        $mess = [
            'name.require'=>'用户名必须输入',
            'name.regex'=>'用户名必须汉字字母',
            'name.between'=>'用户名必须在2到5位之间',
            'sex.require'=>'性别必须选择',
            'addr.required'=>'地址必须输入',
            'areaid.required'=>'商圈必须选择',
            'phone.required'=>'手机号必须输入',
            'phone.regex'=>'手机号格式不正确',

        ];


        $validator =  Validator::make($input,$rule,$mess);
        //如果表单验证失败 passes()
        if ($validator->fails()) {
            return redirect('/home/order/addsite')
                ->withErrors($validator)
                ->withInput();
        }
        $res  = \DB::table('users_addr')->insert($input);
        if($res)
        {
            layer.closeAll();
        }else{
            return back();
        }

    }
}
