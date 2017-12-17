<?php

namespace App\Http\Controllers\shAdmin;

use App\Http\Model\MerUser;
use App\Http\Model\Order;
use App\Http\Model\Order_detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class orederController extends Controller
{

    public function NewOrder($id = 0)
    {
        $bid = \Session::get('meruser');
        $meruser = MerUser::with('shop')->find($bid['bid']);
        //昨天最后一秒
        $beginToday = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
//        今天最后一秒
        $endToday = mktime(0, 0, 0, date('m'), date('d') + 1, date('Y')) - 1;
        //把两个时间戳压入数组
        $data['beginToday'] = $beginToday;
        $data['endToday'] = $endToday;
        //获取商户的id
        $sid = $meruser->shop[0]['sid'];
        //通过订单主表去排序查找订单详情,
        $order = Order::orderBy('oid')->with('order_detail')->where('sid', '=', $sid)
            //查找订单为下单已支付的状态

            ->where(function ($query) use ($data) {
                //并且是今天的订单
                $query->where('otime', '>', $data['beginToday'])
                    ->Where(function ($query) use ($data) {
                        $query->where('otime', '<', $data['endToday']);
                    });
            })->get();

//            dd( date('Y-m-d H:i:s',$data['endToday']) .'===='. date('Y-m-d H:i:s',$data['beginToday']));
//          static  $arr['xdd'] = 0;
//          static  $arr['cg'] = 0;
        $order1 = [];
        $count = 0;
        $cprice = 0;
        foreach ($order as $k => $v) {
            switch ($v['status']) {

                case 1 :
                    $order1[] = $v;
                    break;
                case 3 :
                    $count++;
                    $cprice += $v['cprice'];
                    break;
            }
        }






        if(empty($order)){
            $order = $order1;
            $ord = $order1[$id];

              return view('/admin/shAdmin/order/order', compact('order', 'count', 'cprice', 'ord'));
         }else{
            return '没有新的订单';
        }
    }

    public function info($id = 0)
    {


        $bid = \Session::get('meruser');
        $meruser=MerUser::with('shop')->find($bid['bid']);
        //昨天最后一秒
        $beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
//        今天最后一秒
        $endToday=mktime(0,0,0,date('m'),date('d')+1,date('Y'))-1;
        //把两个时间戳压入数组

        $m = date('Y-m-d', mktime(0,0,0,date('m')-1,1,date('Y'))); //上个月的开始日期
        $t = date('t',strtotime($m));

        $start = date('Y-m-d', mktime(0,0,0,date('m')-1,1,date('Y'))); //上个月的开始日期
        $end = date('Y-m-d', mktime(0,0,0,date('m')-1,$t,date('Y'))); //上个月的结束日期


        $data['beginToday'] =$end;
        $data['endToday'] =time();
        //获取商户的id

        $sid=$meruser->shop[0]['sid'];
        //通过订单主表去排序查找订单详情,
        $order = Order::orderBy('otime','desc')->with('order_detail')->where('sid','=',$sid)
            //查找订单为下单已支付的状态

            ->where(function($query) use($data){
                //并且是今天的订单
                $query->where('otime','>',$data['beginToday'])
                    ->Where(function($query) use($data){
                        $query->where('otime','<', $data['endToday'] );
                    });})->paginate(10);


        $count =0;
        $cprice = 0;
        foreach($order as $k =>$v)
        {

            switch ($v['status']) {
                case 3 :
                    $count++;
                    $cprice += $v['cprice'];
                    break;
            }
        }
//        dd($order);

//        dd($order1);
        //$id 就是$order的下标
        $ord = $order[$id];

        return view('/admin/shAdmin/order/orderinfo',compact('order','count','cprice','ord'));
    }

    public function jd($oid)
    {
      $oid =   Order::find($oid)->update(['status'=>2]);
//      dd($oid);
        return back();
    }


}
