@extends('/Home/layouts.person')

@section('body')


    <!-- ngIf: pageTitleVisible -->
    <h3 ng-if="pageTitleVisible" class="profile-paneltitle ng-scope"><span ng-bind="pageTitle" class="ng-binding">个人资料</span> <span class="subtitle ng-binding" ng-bind-html="pageSubtitle | toTrusted"></span></h3>
    <!-- end ngIf: pageTitleVisible -->
    <div class="profile-panelcontent" ng-transclude="">
        <form class="avatar-form ng-scope ng-pristine ng-valid" method="post" action="{{url('home/avatar/doupload')}}" enctype="multipart/form-data" target="avatar_target">
            {{csrf_field()}}
            <p><button class="btn-upload btn-lg">上传图片</button> <input id="file_upload" name="file_upload" cropper-source="avatar" cropper-file-types="jpg,jpeg,png" avatar-file="" type="file" /> 支持小于2M的JPG和PNG图片</p>
            <div class="avatar-previewcontainer clearfix">
                <div class="avatar-imgcontainer source ng-isolate-scope" cropper="avatar" cropper-context="cropContext">
                    <img class="img1" src="{{$users['avatar']}}"  class="noavatar" alt="默认头像" />
                    <div class="cropper" style="display: none;">
                        <div class="mask"></div>
                        <div class="resizer">
                            <div class="wrapper">
                                <img src="{{$users['avatar']}}" />
                            </div>
                            <div class="ord-n resize-bar"></div>
                            <div class="ord-s resize-bar"></div>
                            <div class="ord-w resize-bar"></div>
                            <div class="ord-e resize-bar"></div>
                            <div class="ord-nw resize-handle"></div>
                            <div class="ord-n resize-handle"></div>
                            <div class="ord-ne resize-handle"></div>
                            <div class="ord-w resize-handle"></div>
                            <div class="ord-e resize-handle"></div>
                            <div class="ord-sw resize-handle"></div>
                            <div class="ord-s resize-handle"></div>
                            <div class="ord-se resize-handle"></div>
                        </div>
                    </div>
                </div>
                <div class="avatar-largewrapper">
                    <div class="avatar-imgcontainer large" cropper-preview="avatar">
                        <img class="img1" src="{{$users['avatar']}}" class="noavatar" alt="默认头像" />
                    </div>
                    <p>大尺寸</p>
                </div>
                <div>
                    <div class="avatar-imgcontainer middle" cropper-preview="avatar">
                        <img class="img1" src="{{$users['avatar']}}" class="noavatar" alt="默认头像" />
                    </div>
                    <p>中尺寸</p>
                    <div class="avatar-imgcontainer small" cropper-preview="avatar">
                        <img class="img1" src="{{$users['avatar']}}" class="noavatar" alt="默认头像" />
                    </div>
                    <p>小尺寸</p>
                </div>
            </div>
            {{--<input name="x" value="" type="hidden" />--}}
            {{--<input name="y" value="" type="hidden" />--}}
            {{--<input name="w" value="" type="hidden" />--}}
            {{--<input name="h" value="" type="hidden" />--}}

            <input type="hidden" name="avatar" id="art_thumb" value=""/>
            <button   class="btn-submit btn-primary btn-lg" >保存头像</button>
            <a  class="btn-cancel btn-lg" ng-click="cancelImage()">取消</a>
        </form>
        {{--<iframe name="avatar_target" class="avatar-postframe ng-scope" src="{{url('a/index_1.html')}}" avatar-post-target="" frameborder="0"></iframe>--}}
    </div>
    </div>
    </div>
    </div>


    <script type="text/javascript">
        $(function () {
            $("#file_upload").change(function () {
                $('.img1').show();
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
                && strExtension != 'png'&& strExtension != 'jpeg') {
                alert("请选择图片文件");
                return;
            }
            var formData = new FormData($('#art_form')[0]);
            var formData = new FormData();
            formData.append('file_upload', $('#file_upload')[0].files[0]);
            formData.append('_token',"{{csrf_token()}}");
            $.ajax({
                type: "POST",
                url: "/home/avatar/upload",
                data: formData,
                async: true,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
//                    alert(data);
                    $('.img1').attr('src','/uploads/'+data);

//                                            $('#img1').attr('src','http://p09v2gc7p.bkt.clouddn.com/uploads/'+data);
//                                            $('#img1').attr('src','http://project193.oss-cn-beijing.aliyuncs.com/'+data);
                    $('.img1').show();
                    $('#art_thumb').val('/uploads/'+data);
//                    var ee = $('#art_thumb').val();
//                    alert( ee );
                    $('#art_thumb').attr('value','/uploads/'+data);
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert("上传失败，请检查网络后重试");
                }
            });

        }



    </script>



@endsection
