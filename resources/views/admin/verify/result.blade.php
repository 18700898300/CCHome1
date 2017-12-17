@extends('admin.xtAdmin.common')
@section('title')
    <title>系统后台商户入驻状态修改</title>
@endsection
@section('body')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">分类管理</a> &raquo; 修改分类
    </div>
    <!--面包屑导航 结束-->

    <!--结果集标题与导航组件 开始-->
    <div class="result_wrap">
        <div class="result_title">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="dh" style="color:red">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="alert alert-danger">
                <ul>
                    @if(session('msg'))
                        <li class="dh" style="color:red">{{session('msg')}}</li>
                    @endif
                </ul>

            </div>

        </div>

    </div>
    <!--结果集标题与导航组件 结束-->

    <div class="result_wrap">
        <form action="{{url('/admin/xtAdmin/verify/update/'.$status->sid)}}" method="post">
            <table class="add_tab">
                {{csrf_field()}}
                <tbody>


                <tr>
                    <th><i class="require">*</i>审核状态：</th>
{{--                    @foreach($status as $k=>$v)--}}
                    <td>
                        待审核:<input type="radio" class="a b c" @if($status->vstatus==0)  checked @endif name="vstatus" value="0" onclick="show(this)" >

                        审核中:<input type="radio" class=" a b c" @if($status->vstatus==1) checked @endif name="vstatus" value="1" onclick="show(this)"/>

                        审核通过:<input type="radio"  class="a c " @if($status->vstatus==2) checked @endif name="vstatus" value="2" onclick="show(this)"/>

                        未通过审核:<input type="radio"   class="a" @if($status->vstatus==3) checked @endif name="vstatus" value="3" onclick="show(this)" />
                    </td>
                </tr>
                {{--默认隐藏--}}
                <tr id="rea" style="display:none;">
                    <th><i class="require">*</i>原因描述：</th>
                    <td >
                        <input type = "text"  name = "reason" value ="{{$status->reason}}" placeholder="请简要描述原因">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" class="a" value="修改">
                        <input type="button" class="back" onclick="history.go(-1)" value="返回">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
@endsection

<script>
    //    提示信息淡出
    $('.dh').fadeOut("slow");
    function show(obj){
        switch($(obj).val()){
            case"0":
                $('#rea').hide();
                break;
            case"1":
//                $('.b').attr('disabled',true);
                $('#rea').hide();
                break;
            case"2":
//                $('.c').attr('disabled',true);
                $('#rea').hide();
                break;
            case"3":
//                $('.a').attr('disabled',true);
                $('#rea').show();
                break;
        }
    }
</script>

