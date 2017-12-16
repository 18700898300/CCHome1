@extends('layouts.admin')
@section('title')
    <title>订单处理</title>
@endsection
<script src="{{asset('/a/js/jquery-1.8.3.min.js')}}"></script>
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
    #jd{
        margin-left: 40%;
    }
    .sp{
        width:33%;
        /*border:1px solid red;*/
        float: left;
        text-align: center;
    }
    .d{
        width:300px;
        border:1px solid red;
    }
</style>
<style>
    #idss{
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
    #jd{
        margin-left: 40%;
    }
    .sp{
        width:33%;
        /*border:1px solid red;*/
        float: left;
        text-align: center;
    }
    .d{
        width:300px;
        border:1px solid red;
    }
</style>
@section('body')
    <div>

        <div id="ids" style = "display: block;">
            <div class="result_wrap">
                <div class="result_title" style="height:460px">
                    {{--{{$k = isset($k) ? $k : 0 }}--}}
                    <div id="xb" style="display: none;"> {{0}}</div>

                    <h3>希望尽快送达,建议在{{date("Y-m-d : H:i:s",$ord['otime']+900)}}前出餐<a href="{{url('/admin/shadmin/order/jd')}}/{{$ord['oid']}}" id="jd">接单</a></h3>
                    <hr>
                    <div>
                        <div style="font-size: 20px; float: left;"><b>{{$ord['rec']}}</b><span style="font-size: 12px;color: #A4A4A4;">　　#30天内第3次下单</span></div>
                        <div style="float: right;color:#00a2d4;"><span class="  fa fa-x fa-phone"></span>{{$ord['phone']}}</div>
                        <div style="clear: both;"></div>
                        <div style="color: #8D8D8D;">{{$ord['addr']}}</div>
                    </div>
                    <hr>
                    <div style="color:#FF730C;font-size: 20px;margin:10px 0px;">备注:　<span style="color:#A4A4A4;">{{$ord['umsg']}}</span></div>
                    <div style="background:#c2c2c2; height:3px;" ></div>
                    <div style="font-size:18px; margin:10px 0px">商品订单号 {{$ord['oid']}}</div>
                    <hr>
                    <div style="margin-top: 10px;">
                        <div style="width: 10%;float:left;">序号</div>
                        <div style="width: 50%;float:left;">菜品名称</div>
                        <div style="width: 20%;float: left;">数量</div>
                        <div style="width: 20%;float: left;">价格</div>
                        <div style="clear:both;"></div>
                        <hr>
                    </div>
                    <input type="hidden" name="{{$xh = 1}}">

                    {{--{{$k}}--}}
                    @foreach($ord['order_detail'] as $v)
                    <div style="margin-top: 10px;">
                        <div style="width: 10%;float:left;">{{$xh ++}}</div>
                        <div style="width: 50%;float:left;">{{$v['fname']}}</div>
                        <div style="width: 20%;float: left;">{{$v['bcnt']}}(份)</div>
                        <div style="width: 20%;float: left;">￥{{$v['bprice']}}</div>
                        <div style="clear:both;"></div>
                        <hr>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

        <div id="did">
            <div class="result_wrap">
                <div class="result_title">
                    <h3>今日营业总览</h3>
                    <hr>
                    <div style="margin: 10px 0px ;">订单量:{{$count}}单</div>
                    <div>营业额 ￥{{$cprice}}</div>
                </div>
            </div>
        </div>
        <div id="did">
            <div class="result_wrap">
                <div class="result_title" style="height: 265px;">
                    <h3>新订单列表</h3>
                    <hr>
                    <div>
                        <div class="sp" style="text-align: left">订单id</div>
                        <div class="sp">下单时间</div>
                        <div class="sp">操作</div>
                        <div style="clear:both;"></div>
                    </div>
                    <hr>
                    @foreach($order as $k => $v)
                        <div>
                            <div class="sp" style="text-align: left">{{$v['oid']}}</div>
                            <div class="sp">{{date("m-d : H:i",$v['otime'])}}</div>
                            <div class="sp"><a href="{{url('/admin/shadmin/neworder')}}/{{$k}}" class="dd"  >查看详情</a></div>
                            <div style="clear:both;"></div>
                        </div>
                        <hr>

                    @endforeach
                </div>
            </div>
        </div>

        <div style="clear:both;"></div>

    </div>



@endsection