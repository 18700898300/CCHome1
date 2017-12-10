<html>
<head>
    <link href="{{asset('/a/css/vendor.162d72.css')}}" rel="stylesheet">
    <link href="{{asset('/a/css/main.378acb.css')}}" rel="stylesheet">
    <script src="{{asset('/a/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{asset('/layer/layer.js')}}"></script>
</head>
<body>
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

<div class="addressdialog-close"></div>
<div class="addressdialog-header">
    修改地址
</div>
<div class="addressdialog-content">

    <form action="{{url('/home/order/updatesite')}}" method="post" id="popupForm" >
        <input type="hidden" name="uid" value = '1'>
        {{csrf_field()}}

    <div class="addressform">
        <div>
            <div class="addressformfield">
                <label>姓名</label>
                <input placeholder="请输入您的姓名" name ='name'value="{{$addr[0]['name']}}" />
                <div class="addressformfield-hint">
                    <span></span>
                </div>
            </div>
            <div class="addressformfield sexfield">
                <label>性别</label>
                <div>

                    @if($addr[0]['sex'] = 1)
                        <input value="1" name="sex" id="sexfield-1-male" type="radio" checked />
                        <label for="sexfield-1-male">先生</label>
                    @else
                        <input value="2" name="sex" id="sexfield-1-female" type="radio" checked />
                        <label for="sexfield-1-female">女士</label>
                    @endif
                </div>
                <div class="addressformfield-hint">
                    <span></span>
                </div>
            </div>


            <div class="addressformfield addressfield">

                <label>位置</label>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAgCAYAAAAIXrg4AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NEY1MDlBODBGODkyMTFFNEIzMTNFRUIwMEQ2M0U5MzMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NEY1MDlBODFGODkyMTFFNEIzMTNFRUIwMEQ2M0U5MzMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo0RjUwOUE3RUY4OTIxMUU0QjMxM0VFQjAwRDYzRTkzMyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo0RjUwOUE3RkY4OTIxMUU0QjMxM0VFQjAwRDYzRTkzMyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PiMwn/YAAAMuSURBVHjanJZ9aM1RGMd/9+easItZXuY1YkUtpFCkVuKPyfKauzZKFCtmrIg/5G1NWltJVqaQl7iul6jRTfxhm5fyXgvDsibk5U5uUXOv77O+vzpOv3Pv796nPvf87vmd8zzn95znPOfxRSIRK4mMAqvAfDAD5IE4+AzegjvgAmg3KfAZDEwC+6i8j5VcxGAY7ADv9Ze2y4R14BkIgr8gBEpoNBv0AxPYJ4p7wErwApTqyvza/13gIJ+vgG2gw2URHeQ8DdeA5eA0GAFq3b6ghMrlkyvBMoNyXcT/K0AV/x/m1/9nQDazgc9bQb2VvtTSAz5wFIxVDewFAbrliDYxC2wC90AU/AQtYDPfqVJDHTn8kt4oGo62kwMmgw/KhNHgBphuWLUEQxHoUvpk5a8YDPk2d15WcllT3hdco/J2RoqsbDB9/hpMA01U5ogs9iK9E5SfBXwR1la3AcwE78AscElxkYydDdpAAdiozb3OttCmEpGH2iAnpneCHy7uiXJTLZf4f8y2QPYgobikRxkUAwPolqhhDwaCX+A36K9mCIZ7r59i7BxkUJLIIGSz2Xbb3CyRiS4RYil75CaFbF9q/VPYvhEDt/hniTbonBLbOS7Kh4BDfD6rvXN0NdsMKZH12sE5Dp4w1zxg6giQYh62qYykBi2BOpsesqnkLnN9UBn4BywGT3kAwwxR4SrdIG5cxE12RJLeeM5rdlJFnZJN1Qz7kfFeAe4zIGJ8ruD56NSiZzefq9ULR160Ulk5OGZlJmvBSfCcN2DcVkKxku1+kJuB8oCzat4jcf0+aGXk5CrRkY7UM+1LTrttujLF8ldemwvTUF7EOd1gS7I7+QtdJXtywqOrhoJGPldpqdv10j/DS2MMOEVjxqqEykfy3mj0UlU4h66Ln749iQH52qXgE+dYXg18B2UsW6QQmOMyZh7TiETeGhZjng1YrNr2MH1I9TZMeZfHPknxB4CxPLRTbGA1r8RxvNGySIghGWHBYBR/CgMJ5qdHrE/ruKi5vKed6i9jAxZju5gHsVzpk5T8LdVk2+NBalNWK6xmX0rxp3Fam1hsSYly0+ukfwIMANgIvXWVNn37AAAAAElFTkSuQmCC" />
                <input placeholder="请输入小区、大厦或学校" name = 'addr' value="{{$addr[0]['addr']}}" />
                <div class="address-suggestlist">
                    <ul></ul>
                </div>
                <div class="addressformfield-hint">
                    <span></span>
                </div>
                <div style="display: none;" class="addressform-tip">
                    <p><span>没找到你的地址？</span><a style="display: none;">去地图看看吧！</a></p>
                    <p>请尝试只输入小区、大厦或学校看看。</p>
                    <div class="arrow"></div>
                </div>
            </div>
            <div class="addressformfield">
                <label>所属商圈</label>
                <select name="areaid">
                    <option value="0">请选择</option>
                    @foreach($area as $v)

                        <option value="{{$v->id}}">{{$v->name}}</option>
                    @endforeach
                </select>
                <div class="addressformfield-hint">
                    <span></span>
                </div>
            </div>

            <div class="addressformfield phonefield">
                <label>手机号</label>
                <input placeholder="请输入您的手机号" name = 'phone' value="{{$addr[0]['phone']}}"/>

            </div>
            <div style="display: none;" class="addressformfield phonebkfield">
                <label></label>
                <input placeholder="固话、手机短号" />
                <button>删除</button>
                <div class="addressformfield-hint">
                    <span></span>
                </div>
            </div>
        </div>
        <div class="addressform-buttons">
            <button id = 'saveBtn'>保存</button>
            <button id = 'qx'>取消</button>
        </div>
    </div>
    </form>
</div>
</body>
<script>
    $('#qx').on('click',function(){

        parent.layer.closeAll();
    });
//    $(function(){
//        $("#saveBtn").click(function(){
//            $.post('/home/order/insertsite',{'_token:"csrf_field()",name:name,uid:uid,sex:sex,addr:addr,areaid:areaid,phone:phone'},function(){
////                    if(data){
////                        console.log(data);
////                        parent.layer.closeAll();
////                    }else
//                    {
////                        return back();
//                    }
//            });
//            // 将表单复制到父画面，在父页面的回调函数里提交表单
//            var popupForm= $(parent.document.body).children("div[id='popupFormDiv']").append($("#popupForm"));
//            var index = parent.layer.getFrameIndex(window.name); //获取窗口索引
//
//        });
//    });
</script>
</html>