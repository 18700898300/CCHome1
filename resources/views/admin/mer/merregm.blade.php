@extends('/Home/layouts.login')


@section('title')
    <title>后台商户注册页</title>
@endsection
@section('body')
    <!--面包屑导航 开始-->



    <div class="LoginHeader-22Up7_0">
        <a class="LoginHeader-33EiC_0"> 短信注册 </a>
        <a  href="{{asset('admin/meregistere')}}"> 邮箱注册 </a>
    </div>
    </div>
    <div>
        <form action="" method="post">
            {{csrf_field()}}
            <div  class="form-b6px1">
                要查询的地址：<input id="text_" type="text" value="请输入地址" style="margin-right:100px;" onchange="searchByStationName()"/><br>
                查询结果(经纬度)：<input id="result_" type="text" /><br>
                {{--<input type="button" value="查询" onclick="searchByStationName();"/>--}}
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
            <section class="form-b6px1">
                <input autocapitalize="on" placeholder="手机/邮箱/用户名" type="text" name="uname" value="{{old('uname')}}" />
            </section>
            <section class="form-b6px1">
                <input placeholder="密码" autocapitalize="on" type="password" name="password"  />

            </section>
            <section class="form-b6px1" >
                <input maxlength="6" placeholder="验证码" type="text" name="code" />
                <div ubt-click="101160" class="form-2o2sO">
                    <a onclick="javascript:re_captcha();">
                        <img src="{{ URL('/code/captcha/1') }}" id="127ddf0de5a04167a9e427d883690ff6">
                    </a>

                    <script type="text/javascript">
                        function re_captcha() {
                            $url = "{{ URL('/code/captcha') }}";
                            $url = $url + "/" + Math.random();
                            document.getElementById('127ddf0de5a04167a9e427d883690ff6').src = $url;
                        }
                    </script>

                </div>
            </section>
            <button class="SubmitButton-2wG4T"> 登录 </button>
        </form>








        <script type="text/javascript">
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
@endsection