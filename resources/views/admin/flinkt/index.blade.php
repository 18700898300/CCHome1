@extends('layouts.admin')
@section('title')
    <title>后台商户友情链接列表显示</title>
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
                    <th class="tc">排序</th>
                    <th class="tc">ID</th>
                    <th class="tc">分类名称</th>
                    <th class="tc">操作</th>
                </tr>
                @foreach($flinkts as $k=>$v)
                <tr>
                    <td class="tc">
                        <input type="text" onchange="changeOrder(this,{{$v->fltid}})" value="{{$v->flt_order}}">
                    </td>
                    <td class="tc">{{$v->fltid}}</td>
                    <td >{{$v->fltype_names}}</td>
                    <td class="tc">
                        <a href="{{url('admin/flinkt/'.$v->fltid.'/edit')}}" class="tc">修改</a>
                        <a href="javascript:;" onclick="delFlinkt({{$v->fltid}})" class="tc">删除</a>
                    </td>
                </tr>
                    @endforeach
            </table>
    </div>
    </div>
</form>
<script>
    function changeOrder(obj,fltid){
        var flt_order = $(obj).val();
//        console.log(flt_order);
        $.post("{{url('admin/flinkt/changeOrder')}}",{'_token':"{{csrf_token()}}",'fltid':fltid,'flt_order':flt_order},function(data){
        console.log(data);//测试是否有值传过来
//            dd(data);语法不支持
            if(data['status']=='ok'){
                layer.msg(data.msg,{icon:6});
//                location.href = location.href;
                var t=setTimeout("location.href = location.href;",2000);
//
            }else{
                layer.msg(data.msg,{icon:5});
//                location.href = location.href;
                var t=setTimeout("location.href = location.href;",2000);
            }
        })
    }
function delFlinkt(id){
    layer.confirm('您确认删除吗?',{
        btn:['确认','取消']//按钮
    },function(){
    //如果用户发出删除请求,使用ajax想服务器发送删除请求,$.post('请求服务器的路径','携带的参数',获取执行成功后的返回数据)
//        admin/flinkt/1
            $.post("{{url('admin/flinkt')}}/"+id,{"_method":'delete','_token':"{{csrf_token()}}"},function(data){
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