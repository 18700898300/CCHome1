@extends('layouts.admin')
@section('title')
    <title>商户后台首页</title>
@endsection
<style>
    .a{
        width:200px;
        height:100px;
        margin:35px;
        float: left;
    }
    #qc{
        clear:both;
    }

    .shuzi{
        font-size:60px;
        text-align:center;
        color:#0091EA;
        padding-top:10px;
    }
    #xdd{
        width:100%;
        height: 50px;
        text-align:center;
        font-size:20px;
    }
    #ids{
        margin:20px;
        border:1px solid #ccc;
        background-color: #fff;
        border-radius: 10px;
    }
    .b{
        width:230px;
        height:150px;
        margin-top:20px;
        margin-left: 90px;
        float: left;

    }
</style>
<!--左侧导航 开始-->
<div class="menu_box">



@section('body')
    <div id="ids">
        <div class="result_wrap">
            <div class="result_title">
                <h3>今日订单</h3>
                <hr>
            </div>
            <div class="a">
                <div class="shuzi">{{$sta['ydd']}}</div>
                <div id = "xdd"><b>预订单</b></div>
            </div>
            <div class="a" >
                <div class="shuzi" style="color:#ccc">{{$sta['yjs']}}</div>
                <div id = "xdd"><b>新订单</b></div>
            </div><div class="a">
                <div class="shuzi" style="color:#FF9A05">{{$con}}</div>
                <div id = "xdd"><b>今日总订单</b></div>
            </div><div class="a">
                <div class="shuzi" style="color:#ccc">{{ $sta['qx']}}</div>
                <div id = "xdd"><b>超时无效订单</b></div>
            </div>
            <div id = "qc"></div>
        </div>
    </div>


    <div id="ids">
        <div class="result_wrap">
            <div class="result_title">
                <h3>本月总览</h3>
                <hr>
            </div>
            <div class="b">
                <div class="shuzi" style="color:#666666">{{$zongshu}}</div>
                <div id = "xdd"><b>本月总订单</b></div>
            </div>
            <div class="b">
                <div class="shuzi" style="color:#FF9A05">{{$youxiaoshuliang}}</div>
                <div id = "xdd"><b>本月成功订单</b></div>
            </div>
            <div class="b" >
                <div class="shuzi" style="color:0091EA">￥{{$cnt}}</div>
                <div id = "xdd"><b>本月总收入</b></div>
            </div>

            <div id = "qc"></div>
        </div>

    </div>

@endsection
</div>