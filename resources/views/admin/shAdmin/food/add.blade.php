@extends('admin.xtAdmin.common')
@section('title')
    <title>商户后台菜品添加页面</title>
@endsection
@section('body')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">菜品管理</a> &raquo; 添加菜品
    </div>
    <!--面包屑导航 结束-->

    <!--结果集标题与导航组件 开始-->
    <div class="result_wrap">
        <div class="result_title">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="alert alert-danger">
                <ul>
                    @if(session('msg'))
                        <li style="color:red">{{session('msg')}}</li>
                    @endif
                </ul>

            </div>

        </div>

    </div>
    <!--结果集标题与导航组件 结束-->

    <div class="result_wrap">
        <form id="food" action="{{url('/admin/food')}}" method="post">
            <table class="add_tab">
                {{csrf_field()}}
                <tbody>
                <tr>
                    <th width="120"><i class="require">*</i>菜品名称：</th>
                    <td>
                        <input type="text" name="fname">
                        <span><i class="fa fa-exclamation-circle yellow"></i>菜品名称必须填写</span>
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>菜品价格：</th>
                    <td>
                        <input type="text" name="price">
                    </td>
                </tr>


                <tr>
                    <th><i class="require">*</i>菜品图片：</th>
                    <td>
                        <input id="file_upload" type="file" name="fpic" multiple><br>
                        <img src="" id="img1" alt="" style="width:80px;height:80px">

                        <script type="text/javascript">
                            $(function () {
                                $("#file_upload").change(function () {
                                    $('img1').show();
                                    uploadImage();
                                });
                            });
                            function uploadImage() {
                                // 判断是否有选择上传文件
                                var imgPath = $("#file_upload").val();
                                if (imgPath == "") {
                                    alert("请选择上传图片！");
                                    return;
                                }
                                //判断上传文件的后缀名
                                var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
                                if (strExtension != 'jpg' && strExtension != 'gif'
                                    && strExtension != 'png' && strExtension != 'bmp') {
                                    alert("请选择图片文件");
                                    return;
                                }
//                                取得表单所有信息
                                var formData = new FormData($('#food')[0]);
//                                取得表单某个信息
                                {{--var formData = new FormData();--}}
                                {{--formData.append('file_upload', $('#file_upload')[0].files[0]);--}}
                                {{--formData.append('_token',"{{csrf_token()}}");--}}
                                $.ajax({
                                    type: "POST",
                                    url: "/admin/food/upload",
                                    data: formData,
                                    async: true,
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    success: function(data) {
                                        $('#img1').attr('src','/uploads/'+data);
//                                            $('#img1').attr('src','http://p09v2gc7p.bkt.clouddn.com/uploads/'+data);
//                                            $('#img1').attr('src','http://project193.oss-cn-beijing.aliyuncs.com/'+data);
                                        $('#img1').show();
                                        $('#art_thumb').val('/uploads/'+data);
                                    },
                                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                        alert("上传失败，请检查网络后重试");
                                    }
                                });
                            }
                        </script>
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>菜品状态：</th>
                    <td>
                        <input type="radio" name="status" checked value="1">在售
                        <input type="radio" name="status" value="2">售空
                    </td>
                </tr>

                <tr>
                    <th><i class="require">*</i>菜品描述：</th>
                    <td>
                        <textarea name="description"></textarea>
                        <span><i class="fa fa-exclamation-circle yellow"></i>200字以内</span>
                    </td>
                </tr>
                <input type="hidden" name="sum" value="0">
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
    </div>
@endsection

