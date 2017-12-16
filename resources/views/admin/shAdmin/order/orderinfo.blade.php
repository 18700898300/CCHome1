@extends('layouts.admin')
@section('title')
    <title>订单处理</title>
@endsection
<script src="{{asset('/a/js/jquery-1.8.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/a/js/page.js')}}"></script>
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
    #ids{
        width:60%;
        margin:20px;
        border:1px solid #ccc;
        background-color: #fff;
        border-radius: 10px;
        float: left;
    }
    #did{
        width:30%;
        margin:20px;
        margin-left:0px;
        border:1px solid #ccc;
        background-color: #fff;
        border-radius: 10px;
        float: left;
    }

    .sp{
        width:20%;
        /*border:1px solid red;*/
        float: left;
        text-align: center;
    }

</style>
<style>

    #did{
        width:30%;
        margin:20px;
        margin-left:0px;
        border:1px solid #ccc;
        background-color: #fff;
        border-radius: 10px;
        float: left;
    }

    .sp{
        width:25%;
        /*border:1px solid red;*/
        float: left;
        text-align: center;
    }


</style>
@section('body')
    <div>

        <div id="ids" style = "display: block;">

            <div class="result_wrap">
                <div class="result_title" style="height: 485px;">
                    <h3>历史订单列表</h3>

                    <div>
                        <div class="sp" style="text-align: left">订单id</div>
                        <div class="sp">下单时间</div>
                        <div class="sp" >订单状态</div>
                        <div class="sp">操作</div>
                        <div style="clear:both;"></div>
                    </div>

                    @foreach($order as $k => $v)
                        <div>
                            <div class="sp" style="text-align: left">{{$v['oid']}}</div>
                            <div class="sp">{{date("m-d : H:i",$v['otime'])}}</div>
                            @if($v['status'] == 0)
                                <div class="sp" >预订单</div>
                            @elseif($v['status'] == 1)
                                <div class="sp">下单已结算</div>
                            @elseif($v['status'] == 2)
                                <div class="sp">正在配送中</div>
                            @elseif($v['status']== 3)
                                <div class="sp">订单成功</div>
                            @elseif($v['status'] == 4)
                                <div class="sp">催单</div>
                            @elseif($v['status'] == 5)
                                <div class="sp">系统自动取消</div>
                            @endif
                            <div class="sp"><a href="{{url('/admin/shadmin/yuneworder')}}/{{$k}}" class="dd"  >查看详情</a></div>
                            <div style="clear:both;"></div>
                        </div>


                    @endforeach



                        <div style="text-align: center">{{ $order->links() }}</div>







                </div>
            </div>


        </div>


        <div id="did">
            <div class="result_wrap">
                <div class="result_title" style="height:485px">
                    <div id="xb" style="display: none;"> {{0}}</div>

                    <div>
                        <div style=" float: left;"><b>下单人 :{{$ord['rec']}}</b><span style="font-size: 12px;color: #A4A4A4;"></span></div>
                        <div style="float: right;color:#00a2d4;"><span class="  fa fa-x fa-phone"></span>{{$ord['phone']}}</div>
                        <div style="clear: both;"></div>
                        <div style="color: #8D8D8D;">地址 :{{$ord['addr']}}</div>
                    </div>

                    <div style="color:#FF730C;">备注:　<span style="color:#A4A4A4;">{{$ord['umsg']}}</span></div>
                    <div style="background:#c2c2c2; height:3px;" ></div>
                    <div >商品订单号 {{$ord['oid']}}</div>
                    <div style="">
                        <div style="width: 10%;float:left;">序号</div>
                        <div style="width: 50%;float:left;">菜品名称</div>
                        <div style="width: 20%;float: left;">数量</div>
                        <div style="width: 20%;float: left;">价格</div>
                        <div style="clear:both;"></div>

                    </div>
                    <input type="hidden" name="{{$xh = 1}}">

                    {{--{{$k}}--}}
                    @foreach($ord['order_detail'] as $v)
                        <div >
                            <div style="width: 10%;float:left;">{{$xh ++}}</div>
                            <div style="width: 50%;float:left;">{{$v['fname']}}</div>
                            <div style="width: 20%;float: left;">{{$v['bcnt']}}(份)</div>
                            <div style="width: 20%;float: left;">￥{{$v['bprice']}}</div>
                            <div style="clear:both;"></div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <div style="clear:both;"></div>
    </div>


@endsection