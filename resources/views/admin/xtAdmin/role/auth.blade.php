@extends('admin.xtAdmin.common')
@section('title')
    <title>后台管理员授权页面</title>
@endsection
@section('body')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">管理员管理</a> &raquo; 管理员授权
    </div>
    <!--面包屑导航 结束-->

    <!--结果页快捷搜索框 开始-->
    <div class="search_wrap">


    </div>
    <!--结果页快捷搜索框 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="{{url('admin/xtAdmin/role/doauth')}}" method="post">
        <table class="add_tab" >
            <tbody>
            <tr>
                {{csrf_field()}}
                <th><i class="require">*</i>角色名称：</th>
                <td>
                    <input type="hidden" name="rid"  value="{{$role->rid}}">
                    <input type="text" class="lg" disabled name="name" value="{{$role->name}}">
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>选择权限：</th>
                <td>
                    <button type="button">全选</button>
                    <button type="button">全不选</button>
                    <button type="button">反选</button>
                </td>

            </tr>

            <tr>
                <th><input id="zero" type="checkbox" name="yi[]" value="0">后台首页</th>
                <td>
                    @foreach($permissions as $k=>$v)

                        @if($v->modu == 0)
                            @if(in_array($v->pid,$arr))
                                <label for=""><input class="zero" type="checkbox" checked name="pid[]"  value="{{$v->pid}}">{{$v->name}}</label>
                            @else
                                <label for=""><input class="zero" type="checkbox"  name="pid[]"  value="{{$v->pid}}">{{$v->name}}</label>
                            @endif
                        @endif

                    @endforeach
                </td>
            </tr>

            <tr>
                <th><input id="one" type="checkbox" name="yi[]" value="1">申请管理</th>
                <td>
                    @foreach($permissions as $k=>$v)

                        @if($v->modu == 1)
                            @if(in_array($v->pid,$arr))
                                <label for=""><input class="one" type="checkbox" checked name="pid[]"  value="{{$v->pid}}">{{$v->name}}</label>
                            @else
                                <label for=""><input class="one" type="checkbox"  name="pid[]"  value="{{$v->pid}}">{{$v->name}}</label>
                            @endif
                        @endif
                    @endforeach
                </td>
            </tr>
            <tr>
                <th><input id="two" type="checkbox" name="yi[]" value="2">分类管理</th>
                <td>
                    @foreach($permissions as $k=>$v)
                        @if($v->modu == 2)
                            @if(in_array($v->pid,$arr))
                                <label for=""><input class="two" type="checkbox"  checked name="pid[]"  value="{{$v->pid}}">{{$v->name}}</label>
                            @else
                                <label for=""><input class="two" type="checkbox"   name="pid[]"  value="{{$v->pid}}">{{$v->name}}</label>
                            @endif
                        @endif

                    @endforeach
                </td>
            </tr>
            <tr>
                <th><input id="three" type="checkbox" name="yi[]" value="3">角色管理</th>
                <td>
                    @foreach($permissions as $k=>$v)
                        @if($v->modu == 3)
                            @if(in_array($v->pid,$arr))
                                <label for=""><input class="three" type="checkbox"  checked name="pid[]"  value="{{$v->pid}}">{{$v->name}}</label>
                            @else
                                <label for=""><input class="three" type="checkbox"   name="pid[]"  value="{{$v->pid}}">{{$v->name}}</label>
                            @endif
                        @endif

                    @endforeach
                </td>
            </tr>
            <tr>
                <th><input id="four" type="checkbox" name="yi[]" value="4">权限管理</th>
                <td>
                    @foreach($permissions as $k=>$v)
                        @if($v->modu == 4)
                            @if(in_array($v->pid,$arr))
                                <label for=""><input class="four" type="checkbox"  checked name="pid[]"  value="{{$v->pid}}">{{$v->name}}</label>
                            @else
                                <label for=""><input class="four" type="checkbox"   name="pid[]"  value="{{$v->pid}}">{{$v->name}}</label>
                            @endif
                        @endif

                    @endforeach
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" value="提交">
                    <input type="button" class="back" onclick="history.go(-1)" value="返回">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
    <!--搜索结果页面 列表 结束-->

    <script>
        //    提示信息淡出
        $('.dh').fadeOut(3000);

        $('button').on('click',function () {
            switch ($(this).html()) {
                case '全选':
                    $("input").prop('checked', true);
                    break;
                case '全不选':
                    $("input").prop('checked', false);
                    break;
                case '反选':
                    $.each($("input"), function(i, n){
                        // 取反。
                        $(n).prop('checked', !$(n).prop('checked'));
                    });
                    break;
            }
        });
        $('#zero').on('click',function() {
            if ($('#zero').prop('checked')) {
                $(".zero").prop('checked', true);
            } else {
                $(".zero").prop('checked', false);
            }
        });
        $('#one').on('click',function() {
            if ($('#one').prop('checked')) {
                $(".one").prop('checked', true);
            } else {
                $(".one").prop('checked', false);
            }
        });
        $('#two').on('click',function() {
            if ($('#two').prop('checked')) {
                $(".two").prop('checked', true);
            } else {
                $(".two").prop('checked', false);
            }
        });
        $('#three').on('click',function() {
            if ($('#three').prop('checked')) {
                $(".three").prop('checked', true);
            } else {
                $(".three").prop('checked', false);
            }
        });
        $('#four').on('click',function() {
            if ($('#four').prop('checked')) {
                $(".four").prop('checked', true);
            } else {
                $(".four").prop('checked', false);
            }
        });


    </script>
@endsection
