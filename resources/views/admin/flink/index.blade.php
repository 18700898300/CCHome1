@extends('layouts.admin')
@section('title')
    <title>后台商户友情链接显示</title>
@endsection
@section('body')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">商品管理</a> &raquo; 添加商品
    </div>
    <!--面包屑导航 结束-->

    <!--结果页快捷搜索框 开始-->
    <div class="search_wrap"s>
        <form action="" method="post">
            <table class="search_tab">
                <tr>
                    <th width="120">选择分类:</th>
                    <td>
                        <select onchange="javascript:location.href=this.value;">
                            <option value="">全部</option>
                            <option value="http://www.baidu.com">百度</option>
                            <option value="http://www.sina.com">新浪</option>
                        </select>
                    </td>
                    <th width="70">关键字:</th>
                    <td><input type="text" name="keywords" placeholder="关键字"></td>
                    <td><input type="submit" name="sub" value="查询"></td>
                </tr>
            </table>
        </form>
    </div>
    <!--结果页快捷搜索框 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <!--快捷导航 开始-->

            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <div class="result_title">

                    <div class="alert alert-danger">
                        <ul>
                            @if(session('msg'))
                                <li style = "color:red" id = "info">{{session('msg')}}</li>
                            @endif
                        </ul>
                    </div>

                </div>
                <table class="list_tab">

                    <tr>
                        {{--<th class="tc">ID</th>--}}
                        <th class="tc">友情链接名称</th>
                        <th class="tc">友情链接网址</th>
                        <th class="tc">友情链接图片</th>
                        <th class="tc">友情链接状态</th>
                        <th class="tc">友情链接类别</th>
                        <th class="tc">操作</th>
                    </tr>
                    @foreach($flink as $k=>$v)
                        <tr>
{{--                            <td class="tc">{{$v->id}}</td>--}}
                            <td class="tc">{{$v->fname}}</td>
                            <td class="tc">{{$v->fpath}}</td>
                            <td class="tc"><img src="{{$v->ffpic}}" style="width:80px;height:80px"/></td>
                            <td class="tc">{{$v->fstatus}}</td>
                            <td class="tc">{{$v->flinkt['fltype_name']}}</td>
                            {{--<td class="tc">{{}}</td>--}}
                            <td class="tc">
                                <a href="{{url('admin/flink/'.$v->id.'/edit')}}" class="tc">修改</a>
                                <a href="javascript:;" onclick="delFlink({{$v->id}})" class="tc">删除</a>
                            </td>
                        </tr>
                    @endforeach

                </table>
                <div class="page_list">

                    {{--appends(['keyword1'=>'a','keyword2'=>'aaa@q163.com','num'=>2])--}}
                    {!! $flink->render() !!}
                </div>
                <style>
                    .page_list ul li span{
                        padding:6px 12px;
                    }
                </style>
            </div>
        </div>
    </form>
    <script>
        {{--function changeOrder(obj,fltid){--}}
            {{--var flt_order = $(obj).val();--}}
{{--//        console.log(flt_order);--}}
            {{--$.post("{{url('admin/flinkt/changeOrder')}}",{'_token':"{{csrf_token()}}",'fltid':fltid,'flt_order':flt_order},function(data){--}}
                {{--console.log(data);//测试是否有值传过来--}}
{{--//            dd(data);语法不支持--}}
                {{--if(data['status']=='ok'){--}}
                    {{--layer.msg(data.msg,{icon:6});--}}
{{--//                location.href = location.href;--}}
                    {{--var t=setTimeout("location.href = location.href;",2000);--}}
{{--//--}}
                {{--}else{--}}
                    {{--layer.msg(data.msg,{icon:5});--}}
{{--//                location.href = location.href;--}}
                    {{--var t=setTimeout("location.href = location.href;",2000);--}}
                {{--}--}}
            {{--})--}}
        {{--}--}}
        function delFlink(id){
            layer.confirm('您确认删除吗?',{
                btn:['确认','取消']//按钮
            },function(){
                //如果用户发出删除请求,使用ajax想服务器发送删除请求,$.post('请求服务器的路径','携带的参数',获取执行成功后的返回数据)
//        admin/flinkt/1
                $.post("{{url('admin/flink')}}/"+id,{"_method":'delete','_token':"{{csrf_token()}}"},function(data){
                    console.log(data);
//                data是json格式的字符串，在js中如何将一个json字符串变成json对象
//                //var res =  JSON.parse(data);
                    if(data.error==0){
                        layer.msg(data.msg,{icon:6});
//                    location.href  = location.href;
                        var t = setTimeout("location.href = location.href;",2000);
                    }else{
                        layer.msg(data.msg,{icon:5});
                        var t = setTimeout("location.href = location.href;",2000);
                    }
                })

            })
        }
        $('#info').fadeOut(2000);
    </script>
    <!--搜索结果页面 列表 结束-->
@endsection