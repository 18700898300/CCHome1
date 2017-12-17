<!DOCTYPE html>
<html perf-error="desktop/home/" ng-app="eleme" class="ng-scope">
<head>
    <style type="text/css">
        /* Code tidied up by ScrapBook */
        body, html {width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
        #allmap {
            width:800px;
            height:400px;
            margin:60px auto;
        }
        /*p{margin-left:5px; font-size:14px;}*/
    </style>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">


    <title class="ng-binding" ng-bind="SEO.title">饿了么-网上订餐_外卖_饿了么订餐官网</title>



    <meta name="format-detection" content="telephone=no, email=no">

    <meta name="application-name" content="饿了么网上订餐">
    <meta name="msapplication-tooltip" content="饿了么网上订餐">
    <meta name="msapplication-starturl" content="./">
    <meta name="msapplication-tileimage" content="=http://static11.elemecdn.com/apple-touch-icon.png?v=2">
    <meta name="msapplication-tilecolor" content="#0088ff">
    <meta name="msapplication-task" content="name=切换地区;action-uri=http://ele.me/home;icon-uri=http://static11.elemecdn.com/apple-touch-icon.png?v=2">
    <meta name="msapplication-task" content="name=我要订餐;action-uri=http://ele.me?from=IE;icon-uri=http://static11.elemecdn.com/apple-touch-icon.png?v=2">
    <meta name="msapplication-task" content="name=订单中心;action-uri=http://ele.me/profile?from=IE;icon-uri=http://static11.elemecdn.com/apple-touch-icon.png?v=2">
    <meta name="msapplication-task" content="name=寻求帮助（HELP）;action-uri=http://ele.me/support?from=IE;icon-uri=http://static11.elemecdn.com/apple-touch-icon.png?v=2">
    <meta property="qc:admins" content="2263606250655">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="apple-touch-icon-precomposed" href="https://static2.ele.me/apple-touch-icon.png?v=2">

    <link rel="shortcut icon" href="favicon-16x16.png" type="image/png">
    <link rel="icon" href="favicon-16x16.png" type="image/png" sizes="16x16">
    <link rel="icon" href="favicon-32x32.png" type="image/png" sizes="32x32">
    <link rel="icon" href="favicon.png" type="image/png" sizes="96x96">

    <link href="{{asset('home')}}/vendor.162d72.css" rel="stylesheet">

    <link href="{{asset('home')}}/home.be652d.css" rel="stylesheet">


    <!--[if lte IE 8]><script>window.location.href='https://h.ele.me/activities/landing';</script><![endif]-->

    <script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/1.6.4/jquery.min.js"></script>
    <script src="about:blank" data-ref="API_CONFIG"></script>
    <script src="about:blank" type="text/javascript"></script>
    <script src="about:blank" type="text/javascript"></script>
    <script src="about:blank" type="text/javascript"></script>
    {{--<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3&ak=pPGRydBmCrtAwDteGOey3EgsZFGKXqBj"></script>--}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
     <!-- /?????????????????////////////接口///////////////////////////// -->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=pPGRydBmCrtAwDteGOey3EgsZFGKXqBj"></script>
    {{--<script src='./jquery.min.js' ></script>--}}
    <title>添加复杂内容的信息窗口</title>

    <base href="">
    <meta content="undefined" name="mobile-agent"><meta content="”饿了么”2008年创立于上海，是中国领先的本地生活平台。截至目前，饿了么在线外卖交易平台已覆盖全国2000个城市，加盟餐厅130万家，用户量达2.6亿" name="description"><meta content="饿了么，网上订餐，外卖，快餐外卖，外卖网" name="keywords"></head>
<body class="hidesidebar whitebody" cute-title="" ng-class="{hidesidebar: layoutState &amp;&amp; layoutState.hideSidebar, smallbody: layoutState.smallBody, whitebody: layoutState.whiteBody}">

<!-- ngView:  --><div class="ng-scope" ng-view="" role="main"><div class="map ng-scope" ng-class="{mapmode: mapMode}"><div class="container mapcontainer"><div map-header="" class="map-header clearfix"><h1><a href="https://www.ele.me/" ubt-click="1433"><img src="map-logo.9a26ef.png" alt="eleme"></a></h1><!-- ngIf: user.user_id --> <!-- ngIf: !user.user_id --><span class="map-header-right ng-scope" ng-if="!user.user_id"><a class="btn-security btn-sm" href="{{url('admin/merindex')}}" target="_blank" ubt-click="1432">商户店铺详情</a><a class="btn-security btn-sm" href="{{url('home/qstatus')}}" target="_blank" ubt-click="1432">开店申请状态查询</a><a href="https://h5.ele.me/login/#redirect=https%3A%2F%2Fwww.ele.me%2Fhome%2F" ng-href="//h5.ele.me/login/#redirect=https%3A%2F%2Fwww.ele.me%2Fhome%2F" target="_blank" ubt-click="1430">注册</a> <span>|</span> <a href="https://h5.ele.me/login/#redirect=https%3A%2F%2Fwww.ele.me%2Fhome%2F" ng-href="//h5.ele.me/login/#redirect=https%3A%2F%2Fwww.ele.me%2Fhome%2F" ubt-click="1431">登录</a> <a class="btn-security btn-sm" href="{{url('home/reg')}}" target="_blank" ubt-click="1432">我要开店</a></span><!-- end ngIf: !user.user_id --></div><div map-main="" map-mode="mapMode" class="map-main ng-isolate-scope" ng-class="{mapmode: mapMode}"><h2 class="map-logo"><img src="{{asset('home')}}/map-logo-center.425427.svg" alt="eleme"></h2><div class="map-navbar clearfix" ng-class="{hasuserinfo: $root.user.user_id}"><div map-city="" hide-search-result="hideSearchResult" current-city="currentCity" class="map-city ng-isolate-scope" map-mode="mapMode"><a class="mapcity-current ng-binding" ng-bind="mapCity.current.name" ng-click="mapCity.toggle($event)">北京</a><!-- ngIf: mapCity.showCities --></div><div map-search="" hide-search-result="hideSearchResult" current-city="currentCity" map-mode="mapMode" class="map-search ng-isolate-scope">
                        <div class="mapsearch-inputbar ng-pristine ng-valid" ng-submit="search.showSuggests($event, search.keyword)">
                            <input class="ng-pristine ng-valid" id="text_"  placeholder="请输入你的收货地址（写字楼，小区，街道或者学校）" ng-model="search.keyword" ng-keyup="search.showSuggests($event, search.keyword)" ng-keydown="search.chooseSuggest($event)" ng-click="search.showSuggests($event)" ng-focus="search.showSuggests($event, search.keyword)">
                            {{--<input id="result_"  name="position" type="hidden" /><br>--}}
                            {{--<div id="container"--}}
                                 {{--style="position: absolute;--}}
                {{--/*margin-top:30px;*/--}}
                {{--/*width: 730px;*/--}}
                {{--/*height: 590px;*/--}}
                {{--/*!*top: 50;*!*/--}}
                {{--/*border: 1px solid gray;*/--}}
                {{--/*display:none;*/--}}
                {{--">--}}
                            {{--</div>--}}

                            <button class="btn-stress"  id="ss" type="submit" onclick ="mark()">搜 索</button>
                        </div>
                        <div class="mapsearch-suggestlist ui-scrollbar-light"><!-- ngIf: search.suggests.length --><!-- ngIf: search.done && !search.suggests.length --></div><!-- ngIf: search.resultshow && !hideSearchResult && mapMode --></div></div><div class="map-content"></div></div><div map-footer="" class="mapfooter"><div class="mapfooter-app"><div class="mapfooter-app-image"><img src="appqc.95e532.png" alt="扫码下载 APP"> <span>扫码下载 APP</span></div><div class="mapfooter-app-text"><p>新用户首次下单</p><strong class="color-stress">最高立减30元</strong><p>立即下载APP，享更多优惠吧！</p></div></div><p class="mapfooter-link"><a href="http://kaidian.ele.me/" ubt-click="1434">我要开店</a> <a href="https://www.ele.me/support/about" ubt-click="1435">联系我们</a> <a href="https://www.ele.me/support/about/agreement" ubt-click="1436">服务条款和协议</a> <a href="http://jobs.ele.me/" ubt-click="1437">加入我们</a> <a href="https://fengniao.ele.me/">蜂鸟配送</a> <a href="https://imview.rajax.me/im/html/dishonesty/">失信人员查询</a></p><div class="footer-copyright serif">互联网药品信息服务资格证书:<a href="http://www.shfda.gov.cn/gb/node2/yjj/index.html" target="_blank">(沪)-经营性-2016-0011</a> | 增值电信业务许可证 : <a href="http://www.shca.gov.cn/" target="_blank">沪B2-20150033</a> | <a href="http://www.miibeian.gov.cn/" target="_blank">沪ICP备 09007032</a> | <a href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=20120305173227823" target="_blank">上海工商行政管理</a> Copyright ©2008-2017 上海拉扎斯信息科技有限公司, All Rights Reserved.</div><div class="footer-police container"><a href="http://www.zx110.org/picp/?sn=310100103568" rel="nofollow" target="_blank"><img alt="已通过沪公网备案，备案号 310100103568" src="picp_bg.e373b3.jpg" height="30"></a></div></div></div></div></div>
                       {{--放在表单外,否则不会全屏显示--}}
                        <div id="allmap"></div>

<script>


    //搜索获取mark
    onkeydown = function(event) {
        if (event.keyCode == 13) {
            mark();
        }
    }

        function mark() {
//            var datas = encodeURIComponent($("#text_").val());
            var datas = $('#text_').val();
//            console.log(datas);
//
//            $.ajaxSetup({
//                headers: {
//                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                }
//            });
//           laravel框架中 get方式提交时不需要token认证,post需要
          $.ajax({
{{--                url:"{{url('home/query')}}?datas="+datas,--}}
//                type:"get",
              data:{"datas":datas,"_token":"{{csrf_token()}}"},
              url:"{{url('home/query')}}",
                type:"post",
                success:function (data){
                    console.log(data);
                    var s = data.avatar;
//                    console.log(data.sid);
                    var sContent =
                        "<h4 style='margin:0 0 5px 0;padding:0.2em 0'>"+data.name+"</h4>" +
                        "<a href='{{url("home/shop")}}/"+data.sid+"'><img style='float:right;margin:4px' id='imgDemo' src=" + s + "  width='139' height='104' title='"+data.name+"'/></a>" +
                        "<p style='margin:0;line-height:1.5;font-size:13px;text-indent:2em'>"+data.description+"</p>" +
                        "</div>";
                    var map = new BMap.Map("allmap");
                    var array = data.position.split(',');
        //            console.log(array);
                    var point = new BMap.Point(array[0], array[1]);//??????????///位置////////??????????????
                    var marker = new BMap.Marker(point);
                    var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象
                    map.centerAndZoom(point, 15);
                    map.addOverlay(marker);
                    marker.addEventListener("click", function () {
                        this.openInfoWindow(infoWindow);
                        //图片加载完毕重绘infowindow
                        document.getElementById('imgDemo').onload = function () {
                            infoWindow.redraw();   //防止在网速较慢，图片未加载时，生成的信息框高度比图片的总高度小，导致图片部分被隐藏
                        }
                    });
                },
                dataType:"json",
              error:function (){
                    alert('服务器请求超时,请检查网络后重试!');
              }

//
         });
//
//
        }

// 为form绑定监听提交表单事件



//
//
    // 百度地图API功能
    // js中双引号不解析变量,可以用拼接
</script>
</body>

</html>
