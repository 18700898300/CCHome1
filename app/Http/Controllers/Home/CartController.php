<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Food;

use App\Http\Controllers\Controller;
use App\Models\Home\Shop;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{
    /*把商品加入购物车
     *@author 张晓文
     *@date 2017.11.30
     *
     * */
    public function addcart(Request $request)
    {

      $input = $request->except('_token');
//    dd($input);
     $goods= Food::find($input['fid']);
//       dd($goods);
        //添加到购物车
     Cart::add($goods['fid'],$goods['fname'],1, $goods['price'],['did'=>$goods['did'],'sprice'=>$input['sprice']]);

       return redirect('/home/cart');

    }

    /**
     * 显示所有菜品
     */

    public function cart()
    {
        //全部商品信息
        $cart =  Cart::content();

        //总额
//        dd($cart);


        $total= Cart::subtotal();
        //购物车商品的数量
        $count = Cart::count();

        if($count !=0){




            foreach($cart as $v)
            {
                $did = $v->options['did'];
            }
            $shop = Shop::find($did);

             return view('/home/cart', ['cart'=> $cart,'total'=>$total,'count'=>$count,'shop'=>$shop]);
        }else{
            return  view('/home/index');
        }


    }

    /**
     * @对菜品数量递减
     * @return array
     */

    public function jian(Request $request)
    {
        //接收ajax 传过来的id,和数量
       $rowId =  $request ->input('id');
       $qty = $request ->input('qty');
       //对数量进行一个递减
       --$qty;
       //判断数量是否小于1
       if($qty <= 1){
           $qty = 1;
       }
       //对购物车数量进行更新
        Cart :: update($rowId,$qty);
       //购物车商品的总价格
        $total= Cart::subtotal();
        //购物车商品的数量
        $count = Cart::count();
       return ['total'=>$total,'count'=>$count,'qty'=>$qty];
    }
    /**
     * @对菜品数量递加
     * @return array
     */
    public function jia(Request $request)
    {

        //接收ajax 传过来的id,和数量
        $rowId =  $request ->input('id');
        $qty = $request ->input('qty');
        //对数量进行一个递减
        ++$qty;

        //对购物车数量进行更新
        Cart :: update($rowId,$qty);

        $total= Cart::subtotal();
        //购物车商品的数量
        $count = Cart::count();
        return ['total'=>$total,'count'=>$count,'qty'=>$qty];
    }

    /**
     * @对某个菜品移除
     * @
     */
    public function remove(Request $request)
    {
        $rowId = $request ->input('id');
        Cart ::  remove($rowId);
        //获取购物车的总钱数
        $total= Cart::subtotal();
        //购物车商品的数量
        $count = Cart::count();
        if($count == 0){
            return redirect('home/index');
        }
        return ['total'=>$total,'count'=>$count];
    }
    /**
     * @清除所有菜品
     *
     */
    public function removes()
    {
        Cart :: destroy();
        //获取购物车的总钱数
        $total= Cart::subtotal();
        //购物车商品的数量
        $count = Cart::count();
        return ['total'=>$total,'count'=>$count];
    }
}
