<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Food;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{
    /*把商品加入购物车
     *@author 张晓文
     *@date 2017.11.30
     *
     * */
    public function addcart($id)
    {

        $goods= Food::find($id);

        //添加到购物车
        Cart::add($goods['fid'],$goods['fname'],1, $goods['price']);

        return redirect('/home/cart');

    }

    public function cart()
    {
        //全部商品信息
        $cart =  Cart::content();
      // dd($cart);
        //总额
        $total= Cart::subtotal();
        //购物车商品的数量
        $count = Cart::count();
    //  dd($count);
        return view('/home/cart', ['cart'=> $cart,'total'=>$total,'count'=>$count]);

    }

}
