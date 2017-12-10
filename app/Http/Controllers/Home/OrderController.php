<?php

namespace App\Http\Controllers\Home;
use App\Http\Model\Order;
use App\Http\Model\Order_detail;

use App\Http\Model\User;
use App\Http\Model\users_addr;
use App\Models\Home\Shop;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Crypt;
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
        foreach($cart as $v)
        {
           $did = $v->options['did'];
        }
//        dd($did);
        //获取当前用户信息
        $user = \Session::get('user');
        //获取当前用户最新添加的地址信息
        $addr = Users_addr::orderBy('id','desc')->take(1)->where('uid',$user['uid'])->get();

        $shop = Shop::find($did);
        $area = \DB::table('area')->get();
//        dd($shop['sid']);
        return view("/home/order",compact('cart','total','count','shop','addr','area'));
    }

    public function remove(Request $request)
    {
        $rowId = $request ->input('id');
        Cart ::  remove($rowId);
        //获取购物车的总钱数
        $total= Cart::subtotal();
        //购物车商品的数量
        $count = Cart::count();


        return ['total'=>$total,'count'=>$count];
    }

    public function addsite()
    {
        $area = \DB::table('area')->get();
        $user = \Session::get('user');
        //获取当前用户最新添加的地址信息
        $addr = Users_addr::orderBy('id','desc')->take(1)->where('uid',$user['uid'])->get();
       return view('/home/addsite',compact('area','addr'));
    }


    public function insertsite(Request $request)
    {
        $input = $request->except('_token');
//        dd($input);
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
            return redirect('/home/order/index')
                ->withErrors($validator)
                ->withInput();
        }
        $res  = \DB::table('users_addrs')->insert($input);
        if($res)
        {
            return redirect('/home/order/index');
        }else{
            return redirect('/home/order/index');
        }

    }

    /**
     * 修改地址页面
     */
    public function editsite()
    {
        $user = \Session::get('user');
        //dd($user);
        //获取当前用户最新添加的地址信息
       $addr = Users_addr::orderBy('id','desc')->take(1)->where('uid',$user['uid'])->get();
//       dd($addr[0]['id']);
//        //获取所有商圈
        $area = \DB::table('area')->get();
       // dd($area);
      return view('/home/editsite',compact('addr','area'));
    }

    public function updatesite(Request $request)
    {
//        dd(111);
        $input = $request->except('_token');
//       dd($input);
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
            return redirect('/home/order/index')
                ->withErrors($validator)
                ->withInput();
        }
        $res = Users_addr::orderBy('id','desc')->take(1)->where('uid',$input['uid'])->update($input);
        if($res)
        {

            return redirect('/home/order/index');
        }else{
            return redirect('/home/order/index');
        }
    }



    /**
     * 确认下单,把数据加入数据库
     */
    public function insert(Request $request)
    {   $order = [];
        $orderinfo= [];
        $syt = [];
        $f =[];
        //static $res = '';
        //获取form表单传过来的信息
       $input =  $request->except('_token');
       //购物车详细信息
        $cart =  json_decode($input['cart'],true);
        //商家详细信息
        $shop =  json_decode($input['shop'],true);
        //收货地址详细信息
        $addr =  json_decode($input['addr'],true);
        //订单总额
        $total = $input['total'];
        //菜品总数量
        $count = $input['count'];
        //订单留言
        $umsg = $input['umsg'];
        //订单id
       $order['oid'] = md5(mt_rand(000000000, 99999999));
       //订单总额
       $order['ormb'] = $total;
       //菜品总数
        $order['ocnt'] = $count;
        //下单人id
        $user = session('user');
        $order['uid'] = $user['uid'];
        //收货人名称
        $order['rec'] = $addr[0]['name'];
        //收货地址
        $order['addr'] = $addr[0]['addr'];
        //收货电话
        $order['phone'] = $addr[0]['phone'];
        //订单状态
        $order['status'] = 0; //0代表下单未结算 //1 结算未收货  //2订单成功  //3订单已取消
        //订单留言
        $order['umsg'] = $umsg;
        //下单时间
        $order['otime'] = time();
        foreach($cart as $k => $v)
        {   //获取订单号
            $orderinfo['oid'] = $order['oid'];
            //获取菜品id
            $orderinfo['fid'] = $v['id'];
            //获取菜品数量
            $orderinfo['bcnt'] = $v['qty'];
            //获取菜品单价
            $orderinfo['bprice'] = $v['price'];
            //获取商家id
            $orderinfo['sid'] = $v['options']['did'];
            //获取运费价格
            $sprice = $v['options']['sprice'];
            //获取菜品名称
            $f['name'] = $v['name'];
            //获取菜品数量
            $f['qty'] = $v['qty'];
            //添加到订单详情表
          $res =  Order_detail::create($orderinfo);
        }
     //运费价格
        $order['sprice'] = $sprice;
        //订单总额
        $order['cprice'] = $total + $sprice;
        //添加到订单主表
        $res =  Order::create($order);
        //查询商家店铺
        $sid = Shop::find($orderinfo['sid']);
        //得到商家店铺名称
        $syt['sname'] = $sid['name'];
        //收货人
        $syt['name'] = $addr[0]['name'];
        //收货人性别
        $syt['sex'] = $addr[0]['sex'];
        //收货人电话
        $syt['phone'] = $addr[0]['phone'];
        //收货人地址
        $syt['addr'] = $addr[0]['addr'];
        //菜名
        $syt['fname'] = $f['name'];
        //数量
        $syt['qty'] = $f['qty'];
        //支付金额
        $syt['cprice'] =  $total + $sprice;
        //订单留言
        $syt['umsg'] = $umsg;
        //订单号
        $syt['oid'] = $order['oid'];
//       dd( $order['oid']);
//      dd($syt['oid'].'-----'.$order['oid']);
        $syt = implode(',',$syt);
        $syt = Crypt::encrypt($syt);
        if($res)
        {   //重定向到收银台
            return redirect("/home/order/syt/".$syt);
        }else{
            return back();
        }
    }
    //显示收银台页面
    public function syt($syt)
    {   //解密传过来的结算信息
       $syt =  Crypt::decrypt($syt);
       //把字符串拆分成数组
        $syt = explode(',',$syt);
//        dd($syt);
        return view('/home/syt',compact('syt'));
    }

    //执行结算修改订单状态 (下单已支付)
    public function js(Request $request)
    {
        $oid = $request->except('_token');
       $res =  Order::where('oid',$oid)->update(['status'=>1]);
       if($res)
       {
           return '1';
       }else{
           return '0';
       }
    }
    //检测超出时间后修改订单状态 (支付超时,订单已取消)

    public function ddsx(Request $request)
    {
        $oid = $request->except('_token');
        $res =  Order::where('oid',$oid)->update(['status'=>0]);
        if($res)
        {
            return '1';
        }else{
            return '0';
        }
    }


}
