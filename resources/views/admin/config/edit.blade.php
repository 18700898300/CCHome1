@extends('layouts.admin')
@section('title')
    <title>后台商户友情链接添加分类页面</title>
@endsection
@section('body')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#"></a> &raquo; 添加商品
    </div>
    <!--面包屑导航 结束-->
    <!--结果集标题与导航组件 开始-->
    <div class="result_wrap">
        <div class="result_title">
            <h3>快捷操作</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="#"><i class="fa fa-plus"></i>新增文章</a>
                <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
                <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->
    <div class="result_wrap">
        <form action="{{url('admin/xtAdmin/config/'.$config->conf_id)}}"  method="post" id = "art_form" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('put')}}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @if(is_object($errors))
                            @foreach ($errors->all() as $error)
                                <li style="color:red">{{ $error }}</li>
                            @endforeach
                        @else
                            <li style="color:red;">{{$errors}}</li>
                        @endif

                    </ul>

                </div>
            @endif
            <div class="result_title">

                <div class="alert alert-danger">
                    <ul>
                        @if(session('msg'))
                            <li style="color:red" id = "info">{{session('msg')}}</li>
                        @endif
                    </ul>
                </div>
            </div>
            <table class="add_tab">
                <tbody>
                <tr>
                    <th><i class="require">*</i>标题：</th>
                    <td>
                        <input type="text" name="conf_title" value ="{{$config->conf_title}}">
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>名称：</th>
                    <td>
                        <input type="text" name="conf_name" value ="{{$config->conf_name}}">
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>类型：</th>
                    <td>

                        <input type="radio" name="field_type" value ="input" @if($config->field_type=='input') checked @endif onclick="showTr(this)">input

                            <input type="radio" name="field_type" value ="textarea"  @if($config->field_type=='textarea') checked @endif onclick="showTr(this)">textarea

                        <input type="radio" name="field_type" value ="radio"  @if($config->field_type=='radio') checked @endif onclick="showTr(this)">radio

                        <input type="radio" name="field_type" value ="image"  @if($config->field_type=='image') checked @endif onclick="showTr(this)">image
                    </td>
                </tr>
                @if($config->field_type!='image')
                <tr class = "conf_content" >
                    <th><i class="require" ></i>内容：</th>
                    <td>
                        <input type="text"  name="conf_content" value = "{{$config->conf_content}}">
                    </td>
                </tr>
                @endif
                @if($config->field_type=='image')
                <tr class="tp" >
                    <th><i class="require">*</i>配置项图片:</th>
                    <td>
                        <input type="text" size="50" id="art_thumb" name='conf_content' value="{{$config->conf_content}}">
                        <input id="fpic" name="fpic" type="file" multiple >
                        <br>
                        <img src = "{{$config->conf_content}}" id = "img1" alt = "" style = "width:80px;height:80px">
                        <script>
                            $(function(){
                                $('#fpic').change(function(){
                                    $('#img1').show();
                                    uploadImage();
                                });
                            });
                            function uploadImage() {
                                // 判断是否有选择上传文件
                                var imgPath = $("#fpic").val();
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
//                                var formData = new FormData($('#art_form')[0]);
                                //console.log($('#art_form')[0]);
                                var formData = new FormData();
                                formData.append('fpic', $('#fpic')[0].files[0]);
                                formData.append('_token',"{{csrf_token()}}");
                                $.ajax({
                                    type: "POST",
                                    url: "/admin/upload",
                                    data: formData,
                                    async: true,
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    success: function(data) {
//                                            $('#img1').attr('src','/uploads/'+data);
                                        $('#img1').attr('src','http://p0bvp893u.bkt.clouddn.com/uploads/'+data);
//                                        $('#img1').attr('src','http://ccchome.oss-cn-beijing.aliyuncs.com/'+data);
                                        $('#img1').show();
                                        $('#art_thumb').val('http://p0bvp893u.bkt.clouddn.com/uploads/'+data);
                                        //多文件上传
//                                        console.log(data[0]['newfile']);
//                                        for(var b in data){
//                                          console.log(data[b]);//打印出来任然为对象
//                                          $('#img1').attr('src','http://ccchome.oss-cn-beijing.aliyuncs.com/'+data[b]['newfile']);
//                                          $('#img1').show();
//                                          $('#art_thumb').val('/uploads/'+data[b]['newfile']);
//                                      }
                                    },
                                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                        alert("上传失败，请检查网络后重试");
                                    }
                                });
//                                只触发一次,再次绑定????
//                                $(function(){
//                                    $('#fpic').change(function(){
//                                        $('#img1').show();
//                                        uploadImage();
//                                    });
//                                });
//                                return false;
                            }
                        </script>
                    </td>
                </tr>
                @endif
                <tr>
                    <th><i class="require">*</i>排序：</th>
                    <td>
                        <input type="text" name="conf_order" value ="{{$config->conf_order}}">
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>说明：</th>
                    <td>
                        <input type="text" name="conf_tips" value ="{{$config->conf_tips}}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="提交" >
                        <input type="button" class="back" onclick="history.go(-1)" value="返回">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
    <script>
        function showTr(obj){
            switch($(obj).val()){
                case 'input':
                    $('.field_value').hide();
                    $('.tp').hide();
                    break;
                case 'textarea':
                    $('.field_value').hide();
                    $('.tp').hide();
                    break;  //break必须添加,否则点击textarea任然出现field_value;
                case 'radio':
                    $('.field_value').show();
                    $('.tp').hide();
                    break;
                case 'image':
                    $('.field_value').hide();
                    $('.tp').show();
                    break;
            }
        }
        $('#info').fadeOut(2000);
    </script>
@endsection