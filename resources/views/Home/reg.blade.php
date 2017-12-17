<!DOCTYPE html>
<html class="" lang="zh">
<head>
    <style type="text/css">
        /* Code tidied up by ScrapBook */
    </style>
    <style type="text/css">
        /* Code tidied up by ScrapBook */
        @keyframes amap-indrm-loader {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        @keyframes amap-indrm-loader {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        @keyframes amap-indrm-loader {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
    <style type="text/css">
        /* Code tidied up by ScrapBook */
    </style>
    <style type="text/css">
        /* Code tidied up by ScrapBook */
    </style>
    <style type="text/css">
        /* Code tidied up by ScrapBook */
    </style>
    <style type="text/css">
        /* Code tidied up by ScrapBook */
    </style>
    <style type="text/css">
        /* Code tidied up by ScrapBook */
    </style>
    <style type="text/css">
        /* Code tidied up by ScrapBook */
    </style>
    <style type="text/css">
        /* Code tidied up by ScrapBook */
        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak, .ng-hide:not(.ng-hide-animate) { display: none !important; }
    </style>

    <script type="text/javascript" src="{{asset('admin/assets')}}/style/js/jquery.js"></script>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    {{--<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>--}}


    <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3&ak=pPGRydBmCrtAwDteGOey3EgsZFGKXqBj"></script>
    <link rel="stylesheet" type="text/css" href="{{url('a/css/style1503546983737.css')}}" />
    <meta charset="UTF-8" />
    <title>饿了么-开店申请</title>
    <meta name="description" content="饿了么-开店申请" />
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="icon" href="favicon-32x32.png" type="image/x-icon" />
    <base href="" />
    <link href="{{url('a/css/app.73972d6.css')}}" rel="stylesheet" />
    <link href="{{url('a/css/app.0fd86d1.css')}}" rel="stylesheet" />

    <style type="text/css">
        /* Code tidied up by ScrapBook */
    </style>
</head>
<body ng-app="nevermore" class="ng-scope">
<!-- uiView: -->
    <header class="row ng-scope ng-isolate-scope" show-user="false">
        <div>
            <!-- ngIf: showUser -->
            <!-- ngIf: !showUser -->
            <a ui-sref="home" class="title ng-scope" ng-if="!showUser" href="https://kaidian.ele.me/"> <span>饿了么商户中心</span> </a>
            <!-- end ngIf: !showUser -->
            <a class="notification-link" ng-click="openNotification()">点击查看《廉正告知书》</a>
            <!-- ngIf: showUser -->
            <!-- ngIf: !showUser -->
            <div class="pull-right tips ng-scope" ng-if="!showUser">
                <span>如开店过程遇到问题,请咨询 <a href="https://ecs-im.ele.me/?from=visitor-merchant&amp;ezone=open" target="_blank">在线客服</a></span>
            </div>
            <!-- end ngIf: !showUser -->
        </div>
    </header>
    <!-- uiView: -->

    <div class="container">
        <form class="form-horizontal" id = "art_form" method = "post" action="{{url('home/doreg')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul id="errors">
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
            <div class="control-group">
                <div class="controls">

                <select class="controls" name="tid">
                    @foreach($cates as $k=>$v)
                    <option value="{{$v->tid}}">
                        {{$v->tnames}}
                    </option>
                    @endforeach
                </select>
                </div>


            </div>

            <div class="control-group">
                <label class="control-label" for="inputEmail">商户名称:</label>
                <div class="controls">
                    <input type="text" name = "name" value = "{{old('name')}}" style="width:850px;height:50px;" id="inputEmail" placeholder="请输入店铺名称">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputEmail">联系电话:</label>
                <div class="controls">
                    <input type="text" name="phone" value = "{{old('phone')}}" style="width:850px;height:50px;" id="inputEmail" placeholder="请输入长期有效的电话号码">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">法人身份证号</label>
                <div class="controls">
                    <input type="text" name = "card" style="width:850px;height:50px;" id="inputPassword" placeholder="请输入法人身份证号码,即注册时的身份证号">
                </div>
            </div>







            <div class="control-group">
                <label class="control-label" for="inputEmail">上传头像:</label>
                <div class="controls">
                    <input  type="hidden" id="art_thumb" name="avatar" style="width:850px;height:50px;" placeholder="">
                    <input id="fpic" name="fpic" type="file" multiple >
                    <br>
                    <img arc = "" id = "img1" alt = "" style = "width:80px;height:80px">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="inputEmail">电子邮箱</label>
                <div class="controls">
                    <input type="text" name="email" style="width:850px;height:50px;" id="inputEmail" placeholder="请输入电子邮箱">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">商户详情</label>
                <div class="controls">
                    <input type="text" name="description" style="width:850px;height:50px;" id="inputPassword" placeholder="请输入主营业务信息">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="inputPassword">营业时间</label>
                <div class="controls">
                    <input type="text" style="width:850px;height:50px;" id="inputPassword" name = 'time' placeholder="请输入每天的固定营业时间">
                </div>
            </div>
            <div class="control-group" >
                <label class="control-label" for="inputPassword">公司地址</label>
                <div class="controls" >
                    <input id="text_" type="text" name="address" placeholder="请输入详细公司地址" style="width:850px;height:50px;" onchange="searchByStationName()"/>
                    <input id="result_"  name="position" type="hidden" /><br>
                    <div id="container"
                         style="position: absolute;
                /*margin-top:30px;*/
                /*width: 730px;*/
                /*height: 590px;*/
                /*!*top: 50;*!*/
                /*border: 1px solid gray;*/
                /*display:none;*/
                ">
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">配送时长</label>
                <div class="controls">
                    <input type="text" name = "statime" style="width:850px;height:50px;" id="inputPassword" placeholder="请输入配送时间,单位:分钟">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">起送价</label>
                <div class="controls">
                    <input type="text" style="width:850px;height:50px;" id="inputPassword"  name = 'staprice' placeholder="请输入起送价格,单位:元">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">配送费</label>
                <div class="controls">
                    <input type="text"  name = "sprice" style="width:850px;height:50px;" id="inputPassword" placeholder="请输入固定配送费用,单位元">
                </div>
            </div>




            {{--<input type="button" value="查询" onclick="searchByStationName();"/>--}}



            <div class="main-container ng-scope" ui-view="" autoscroll="true">
                <div class="footer-btns ng-scope">
                    <button class="btn btn-default btn-pre" ui-sref="guide({ id: id })" href="/guide">返回上一步</button>
                    <button type="submit"  class="btn btn-primary btn-next"> 提交并进入下一步 </button>
                </div>
            </div>




        </form>







    </div>














<script async="async" src="about:blank"></script>
<script type="text/javascript" src="about:blank"></script>
<script src="about:blank"></script>
<script type="text/javascript" src="about:blank"></script>
<script type="text/javascript" src="about:blank"></script>


<script type="text/javascript">


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
        var formData = new FormData($('#art_form')[0]);
        //console.log($('#art_form')[0]);
        {{--var formData = new FormData();--}}
        {{--formData.append('file_upload', $('#file_upload')[0].files[0]);--}}
        {{--formData.append('_token',"{{csrf_token()}}");--}}
        $.ajax({
            type: "POST",
            url: "/home/reg/upload",
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
//
//                                    });
//                                });
//                                return false;
    }






    var map = new BMap.Map("container");
    //        map.centerAndZoom("北京", 12);
    //        map.enableScrollWheelZoom();    //启用滚轮放大缩小，默认禁用
    //        map.enableContinuousZoom();    //启用地图惯性拖拽，默认禁用

    //        map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件
    //        map.addControl(new BMap.OverviewMapControl()); //添加默认缩略地图控件
    //        map.addControl(new BMap.OverviewMapControl({ isOpen: true, anchor: BMAP_ANCHOR_BOTTOM_RIGHT }));   //右下角，打开

    var localSearch = new BMap.LocalSearch(map);
    localSearch.enableAutoViewport(); //允许自动调节窗体大小
    function searchByStationName() {
//            alert(11111);
        map.clearOverlays();//清空原来的标注
        var keyword = document.getElementById("text_").value;
        localSearch.setSearchCompleteCallback(function (searchResult) {
            var poi = searchResult.getPoi(0);
            document.getElementById("result_").value = poi.point.lng + "," + poi.point.lat;
            map.centerAndZoom(poi.point, 13);
            var marker = new BMap.Marker(new BMap.Point(poi.point.lng, poi.point.lat));  // 创建标注，为要查询的地方对应的经纬度
            //console.log(marker);
            //map.addOverlay(marker);
            var content = document.getElementById("text_").value + "<br/><br/>经度：" + poi.point.lng + "<br/>纬度：" + poi.point.lat;

            //经纬度
            console.log(poi.point.lng+','+poi.point.lat);
            var infoWindow = new BMap.InfoWindow("<p style='font-size:14px;'>" + content + "</p>");
            marker.addEventListener("click", function () { this.openInfoWindow(infoWindow); });
            marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
        });
        localSearch.search(keyword);
    }
</script>
</body>
</html>