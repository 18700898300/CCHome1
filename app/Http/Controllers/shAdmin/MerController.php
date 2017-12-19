<?php

namespace App\Http\Controllers\shAdmin;

use App\Http\Model\MerUser;
use App\Http\Model\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MerController extends Controller
{
    public function merindex(Request $request)
    {


//        今日总订单数/
       $bid = \Session::get('meruser');
//        dd($bid);
//       dd($bid['bid']);
        $meruser=MerUser::with('shop')->find($bid['bid']);

//        dd($meruser);
        $sid=$meruser->shop[0]['sid'];
        //昨天最后一秒
        $beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
//        今天最后一秒
        $endToday=mktime(0,0,0,date('m'),date('d')+1,date('Y'))-1;

        $data['beginToday'] =$beginToday;
        $data['endToday'] =$endToday;

        $count = Order::where('sid','=',$sid)
            ->where(function($query) use($data){
                $query->where('otime','>',$data['beginToday'])
                    ->Where(function($query) use($data){
                        $query->where('otime','<', $data['endToday'] );
                    });
            })->get();
        $m = date('Y-m-d', mktime(0,0,0,date('m')-1,1,date('Y'))); //上个月的开始日期
        $t = date('t',strtotime($m));

        $start = date('Y-m-d', mktime(0,0,0,date('m')-1,1,date('Y'))); //上个月的开始日期

        $end = date('Y-m-d', mktime(0,0,0,date('m')-1,$t,date('Y'))); //上个月的结束日期
        $data['beginToday'] =$end;
        $data['endToday'] =time();
        $benyue = Order::where('sid','=',$sid)
            ->where(function($query) use($data){
                $query->where('otime','>',$data['beginToday'])
                    ->Where(function($query) use($data){
                        $query->where('otime','<', $data['endToday'] );
                    });
            })->get();
        //本月总收入
        $cnt = 0;
        //本月有效总订单
        $youxiaoshuliang = 0;
        //本月总数量
        $zongshu = 0;
        foreach($benyue as $k =>$v)
        {    $zongshu ++;
            if($v['status'] == 3)
            {   $youxiaoshuliang ++;
                $cnt += $v['cprice'];
            }

        }

            //今日总条数
            $con = 0;
            //今日各个状态订单
            //统计预订单数量
            $sta['ydd'] =0;
            //统计已结算未发货数量
            $sta['yjs'] =0;
            //统计配送中的订单
            $sta['psz'] =0;
//           统计成功订单
            $sta['cg'] =0;
            //统计系统自动取消订单
            $sta['qx'] =0;
            //催单统计
            $sta['cd'] =0;
            //统计总收入
            //成功状态的总金额统计
             static  $cprice = 0;
            $count = $count->toArray();
//            dd($count);
            foreach($count as $v)
            {
                $con ++;
                switch ($v['status']){

                    case 0 :
                        $sta['ydd']++;
                        break;
                    case 1 : $sta['yjs']++;
                        break;
                    case 2 : $sta['psz']++;
                        break;
                    case 3 : $sta['cg']++;
                    //成功状态的总金额统计
                        $cprice +=$v['cprice'];
                        break;
                    case 4 : $sta['yc']++;
                        break;
                    case 5 : $sta['qx']++;
                        break;
                }

            }
//        dd($sta);


       return view('admin/merindex',compact('sta','con','cprice','zongshu','youxiaoshuliang','cnt'));
    }
    public function info()
    {
        return view('admin/info');
    }
}
