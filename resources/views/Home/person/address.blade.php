@extends('/Home/layouts.person')

@section('body')
    <link href="{{asset('/a/css/vendor.162d72.css')}}" rel="stylesheet">
    <link href="{{asset('/a/css/main.378acb.css')}}" rel="stylesheet">
    <link href="{{asset('/addr/addr.css')}}" rel="stylesheet">
    <script src="{{asset('/a/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{asset('/layer/layer.js')}}"></script>
    <style>
        .desktop-addressblock{
            float: left;
        }

    </style>
<!-- ngIf: pageTitleVisible -->
<h3 ng-if="pageTitleVisible" class="profile-paneltitle ng-scope"><span ng-bind="pageTitle" class="ng-binding">地址管理</span> <span class="subtitle ng-binding" ng-bind-html="pageSubtitle | toTrusted"></span></h3>
<!-- end ngIf: pageTitleVisible -->
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @if(is_object($errors))
                    @foreach ($errors->all() as $error)
                        <li style="color:red">{{ $error }}</li>
                    @endforeach
                @else
                    <li style="color:red">{{ $errors }}</li>
                @endif
            </ul>
        </div>
    @endif

    <div class="profile-panelcontent" ng-transclude="">

    <div class="loading ng-binding ng-isolate-scope ng-hide" loading="" content="正在载入地址..." ng-show="addressLoading">
        <!-- ngIf: type==='profile' -->
        <img ng-if="type==='profile'" src="{{asset('a/image/profile-loading.4984fa.gif')}}" alt="正在加载" class="ng-scope" />
        <!-- end ngIf: type==='profile' -->
        <!-- ngIf: type==='normal' -->正在载入地址...
    </div>
    <div class="desktop-addresslist clearfix ng-scope" ng-hide="addressLoading">
        @if (!$addr=='')
        @foreach($addr as $k => $v)
        <div class="desktop-addressblock ng-scope" ng-repeat="address in userAddresses">
            <div class="desktop-addressblock-buttons">
                <button class="desktop-addressblock-button edit" id="{{$v['id']}}" ng-click="editAddress(address)">修改</button>
                <button class="desktop-addressblock-button del" id="{{$v['id']}}" ng-click="showMask = true">删除</button></div>
            <div class="desktop-addressblock-name ng-binding">{{$v['name']}}
                @if($v['sex']  == 1)
                <span class="ng-binding">先生</span>
                @else
                <span class="ng-binding">女士</span>
                @endif
            </div><div class="desktop-addressblock-address ng-binding" ng-bind="address.address + ' ' + address.address_detail">{{$v['addr']}}</div>
            <div class="desktop-addressblock-mobile ng-binding" ng-bind="address.phone">{{$v['phone']}}</div><div class="desktop-addressblock-mask ng-hide" ng-show="showMask"></div><!-- ngIf: !address.st_geohash || !address.address -->
            <div class="desktop-addressblock-removebuttons ng-hide" ng-show="showMask"><p>确定删除收货地址?</p><button class="confirmdelete" ng-click="removeAddress(address)">确定</button> <button class="canceldelete" ng-click="showMask = false">取消</button></div>
        </div>
        @endforeach
        @endif
        <div>
        <button id="btn" class="desktop-addressblock desktop-addressblock-addblock" ng-click="addAddress()"><i class="icon-plus" ><b></b></i>添加新地址</button>
        </div>
    </div>
</div>
</div>
</div>
</div>

    <script type="text/javascript">
        $("#btn").on('click',function(){
//            alert(1111);
            layer.open({
                type: 1,
                skin: 'layui-layer-rim', //加上边框
                area: ['800px', '600px'], //宽高
                content: '<h2>  　<h2><h1 style="margin:10px">添加新地址<h1><h3>  　<h3><form action="/home/person/insertsite" method="post" >{{csrf_field()}}<div class="addressform"><div><div class="addressformfield"><label>姓名</label><input placeholder="请输入您的姓名" name ="name" /> <div class="addressformfield-hint"><span></span></div></div><div class="addressformfield sexfield"><label>性别</label><div><input value="1" name="sex" id="sexfield-1-male" type="radio" /><label for="sexfield-1-male">先生</label><input value="2" name="sex" id="sexfield-1-female" type="radio"/><label for="sexfield-1-female">女士</label></div><div class="addressformfield-hint"><span></span></div></div> <div class="addressformfield addressfield"><label>位置</label> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAgCAYAAAAIXrg4AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NEY1MDlBODBGODkyMTFFNEIzMTNFRUIwMEQ2M0U5MzMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NEY1MDlBODFGODkyMTFFNEIzMTNFRUIwMEQ2M0U5MzMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo0RjUwOUE3RUY4OTIxMUU0QjMxM0VFQjAwRDYzRTkzMyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo0RjUwOUE3RkY4OTIxMUU0QjMxM0VFQjAwRDYzRTkzMyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PiMwn/YAAAMuSURBVHjanJZ9aM1RGMd/9+easItZXuY1YkUtpFCkVuKPyfKauzZKFCtmrIg/5G1NWltJVqaQl7iul6jRTfxhm5fyXgvDsibk5U5uUXOv77O+vzpOv3Pv796nPvf87vmd8zzn95znPOfxRSIRK4mMAqvAfDAD5IE4+AzegjvgAmg3KfAZDEwC+6i8j5VcxGAY7ADv9Ze2y4R14BkIgr8gBEpoNBv0AxPYJ4p7wErwApTqyvza/13gIJ+vgG2gw2URHeQ8DdeA5eA0GAFq3b6ghMrlkyvBMoNyXcT/K0AV/x/m1/9nQDazgc9bQb2VvtTSAz5wFIxVDewFAbrliDYxC2wC90AU/AQtYDPfqVJDHTn8kt4oGo62kwMmgw/KhNHgBphuWLUEQxHoUvpk5a8YDPk2d15WcllT3hdco/J2RoqsbDB9/hpMA01U5ogs9iK9E5SfBXwR1la3AcwE78AscElxkYydDdpAAdiozb3OttCmEpGH2iAnpneCHy7uiXJTLZf4f8y2QPYgobikRxkUAwPolqhhDwaCX+A36K9mCIZ7r59i7BxkUJLIIGSz2Xbb3CyRiS4RYil75CaFbF9q/VPYvhEDt/hniTbonBLbOS7Kh4BDfD6rvXN0NdsMKZH12sE5Dp4w1zxg6giQYh62qYykBi2BOpsesqnkLnN9UBn4BywGT3kAwwxR4SrdIG5cxE12RJLeeM5rdlJFnZJN1Qz7kfFeAe4zIGJ8ruD56NSiZzefq9ULR160Ulk5OGZlJmvBSfCcN2DcVkKxku1+kJuB8oCzat4jcf0+aGXk5CrRkY7UM+1LTrttujLF8ldemwvTUF7EOd1gS7I7+QtdJXtywqOrhoJGPldpqdv10j/DS2MMOEVjxqqEykfy3mj0UlU4h66Ln749iQH52qXgE+dYXg18B2UsW6QQmOMyZh7TiETeGhZjng1YrNr2MH1I9TZMeZfHPknxB4CxPLRTbGA1r8RxvNGySIghGWHBYBR/CgMJ5qdHrE/ruKi5vKed6i9jAxZju5gHsVzpk5T8LdVk2+NBalNWK6xmX0rxp3Fam1hsSYly0+ukfwIMANgIvXWVNn37AAAAAElFTkSuQmCC" /><input placeholder="请输入小区、大厦或学校" name = "addr"  /> <div class="address-suggestlist"><ul></ul></div><div class="addressformfield-hint"><span></span></div><div style="display: none;" class="addressform-tip"> <p><span>没找到你的地址？</span><a style="display: none;">去地图看看吧！</a></p><p>请尝试只输入小区、大厦或学校看看。</p><div class="arrow"></div></div></div><div class="addressformfield-hint"><span></span></div></div><div class="addressformfield phonefield"><label>手机号</label><input placeholder="请输入您的手机号" name = "phone" /></div><div style="display: none;" class="addressformfield phonebkfield"><label></label><input placeholder="固话、手机短号" /><button>删除</button><div class="addressformfield-hint"><span></span> </div> </div> </div><div class="addressform-buttons"><button id = "saveBtn">保存</button></div></div></form>'
            });

        });



            $('.edit').on('click',function () {
                var id = $(this).attr('id');
//             console.log(id);
                $.post('/home/person/editsite',{'_token':'{{csrf_token()}}','id':id},function(data){



                    layer.open({
                        type: 1,
                        skin: 'layui-layer-rim', //加上边框
                        area: ['800px', '600px'], //宽高
                        content: '<h2>  　<h2><h1 style="margin:10px">修改地址<h1><h3>  　<h3><form action="/home/person/updatesite" method="post" ><input type="hidden" name="id" value = "'+id+'">{{csrf_field()}}<div class="addressform"><div><div class="addressformfield"><label>姓名</label><input placeholder="请输入您的姓名" name ="name" /> <div class="addressformfield-hint"><span></span></div></div><div class="addressformfield sexfield"><label>性别</label><div><input value="1" name="sex" id="sexfield-1-male" type="radio" /><label for="sexfield-1-male">先生</label><input value="2" name="sex" id="sexfield-1-female" type="radio"/><label for="sexfield-1-female">女士</label></div><div class="addressformfield-hint"><span></span></div></div> <div class="addressformfield addressfield"><label>位置</label> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAgCAYAAAAIXrg4AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NEY1MDlBODBGODkyMTFFNEIzMTNFRUIwMEQ2M0U5MzMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NEY1MDlBODFGODkyMTFFNEIzMTNFRUIwMEQ2M0U5MzMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo0RjUwOUE3RUY4OTIxMUU0QjMxM0VFQjAwRDYzRTkzMyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo0RjUwOUE3RkY4OTIxMUU0QjMxM0VFQjAwRDYzRTkzMyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PiMwn/YAAAMuSURBVHjanJZ9aM1RGMd/9+easItZXuY1YkUtpFCkVuKPyfKauzZKFCtmrIg/5G1NWltJVqaQl7iul6jRTfxhm5fyXgvDsibk5U5uUXOv77O+vzpOv3Pv796nPvf87vmd8zzn95znPOfxRSIRK4mMAqvAfDAD5IE4+AzegjvgAmg3KfAZDEwC+6i8j5VcxGAY7ADv9Ze2y4R14BkIgr8gBEpoNBv0AxPYJ4p7wErwApTqyvza/13gIJ+vgG2gw2URHeQ8DdeA5eA0GAFq3b6ghMrlkyvBMoNyXcT/K0AV/x/m1/9nQDazgc9bQb2VvtTSAz5wFIxVDewFAbrliDYxC2wC90AU/AQtYDPfqVJDHTn8kt4oGo62kwMmgw/KhNHgBphuWLUEQxHoUvpk5a8YDPk2d15WcllT3hdco/J2RoqsbDB9/hpMA01U5ogs9iK9E5SfBXwR1la3AcwE78AscElxkYydDdpAAdiozb3OttCmEpGH2iAnpneCHy7uiXJTLZf4f8y2QPYgobikRxkUAwPolqhhDwaCX+A36K9mCIZ7r59i7BxkUJLIIGSz2Xbb3CyRiS4RYil75CaFbF9q/VPYvhEDt/hniTbonBLbOS7Kh4BDfD6rvXN0NdsMKZH12sE5Dp4w1zxg6giQYh62qYykBi2BOpsesqnkLnN9UBn4BywGT3kAwwxR4SrdIG5cxE12RJLeeM5rdlJFnZJN1Qz7kfFeAe4zIGJ8ruD56NSiZzefq9ULR160Ulk5OGZlJmvBSfCcN2DcVkKxku1+kJuB8oCzat4jcf0+aGXk5CrRkY7UM+1LTrttujLF8ldemwvTUF7EOd1gS7I7+QtdJXtywqOrhoJGPldpqdv10j/DS2MMOEVjxqqEykfy3mj0UlU4h66Ln749iQH52qXgE+dYXg18B2UsW6QQmOMyZh7TiETeGhZjng1YrNr2MH1I9TZMeZfHPknxB4CxPLRTbGA1r8RxvNGySIghGWHBYBR/CgMJ5qdHrE/ruKi5vKed6i9jAxZju5gHsVzpk5T8LdVk2+NBalNWK6xmX0rxp3Fam1hsSYly0+ukfwIMANgIvXWVNn37AAAAAElFTkSuQmCC" /><input placeholder="请输入小区、大厦或学校" name = "addr"  /> <div class="address-suggestlist"><ul></ul></div><div class="addressformfield-hint"><span></span></div><div style="display: none;" class="addressform-tip"> <p><span>没找到你的地址？</span><a style="display: none;">去地图看看吧！</a></p><p>请尝试只输入小区、大厦或学校看看。</p><div class="arrow"></div></div></div><div class="addressformfield-hint"><span></span></div></div><div class="addressformfield phonefield"><label>手机号</label><input placeholder="请输入您的手机号" name = "phone" /></div><div style="display: none;" class="addressformfield phonebkfield"><label></label><input placeholder="固话、手机短号" /><button>删除</button><div class="addressformfield-hint"><span></span> </div> </div> </div><div class="addressform-buttons"><button id = "saveBtn">保存</button></div></div></form>'

                    });

                });

            });

            $('.del').on('click',function(){
                var id = $(this).attr('id');
//                alert(id);
                var thiss = $(this);
                layer.confirm('您确定要删除吗？', {
                    btn: ['删除','取消'] //按钮
                    }, function(){
                        $.post('/home/person/del',{'_token':'{{csrf_token()}}','id':id},function(data){
                            if(data == 1)
                            {
                                thiss.parent().parent().remove();

                            }
                        });
                     layer.msg('删除成功', {icon: 1});
                });

            })





        function qx() {
//        alert(111);
            layer.closeAll();
        }

    </script>

    @endsection