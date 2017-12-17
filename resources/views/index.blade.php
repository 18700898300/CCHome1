<!DOCTYPE html>
<html perf-error="desktop/home/" ng-app="eleme" class="ng-scope">
<head>
    <style type="text/css">
        /* Code tidied up by ScrapBook */

    </style>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">


    <title class="ng-binding" ng-bind="SEO.title">曹操到家-网上订餐_外卖_曹操到家订餐官网</title>


    <meta name="format-detection" content="telephone=no, email=no">

    <meta name="application-name" content="饿了么网上订餐">
    <meta name="msapplication-tooltip" content="饿了么网上订餐">
    <meta name="msapplication-starturl" content="./">
    <meta name="msapplication-tileimage" content="=http://static11.elemecdn.com/apple-touch-icon.png?v=2">
    <meta name="msapplication-tilecolor" content="#0088ff">
    <meta name="msapplication-task"
          content="name=切换地区;action-uri=http://ele.me/home;icon-uri=http://static11.elemecdn.com/apple-touch-icon.png?v=2">
    <meta name="msapplication-task"
          content="name=我要订餐;action-uri=http://ele.me?from=IE;icon-uri=http://static11.elemecdn.com/apple-touch-icon.png?v=2">
    <meta name="msapplication-task"
          content="name=订单中心;action-uri=http://ele.me/profile?from=IE;icon-uri=http://static11.elemecdn.com/apple-touch-icon.png?v=2">
    <meta name="msapplication-task"
          content="name=寻求帮助（HELP）;action-uri=http://ele.me/support?from=IE;icon-uri=http://static11.elemecdn.com/apple-touch-icon.png?v=2">
    <meta property="qc:admins" content="2263606250655">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="apple-touch-icon-precomposed" href="https://static2.ele.me/apple-touch-icon.png?v=2">

    <link rel="shortcut icon" href="{{asset('a/images/')}}favicon-16x16.png" type="image/png">
    <link rel="icon" href="{{asset('a/images/favicon-16x16.png')}}" type="image/png" sizes="16x16">
    <link rel="icon" href="{{asset('a/images/favicon-32x32.png')}}" type="image/png" sizes="32x32">
    <link rel="icon" href="{{asset('a/images/favicon.png')}}" type="image/png" sizes="96x96">

    <link href="{{asset('a/css/vendor.162d72.css')}}" rel="stylesheet">

    <link href="{{asset('a/css/home.be652d.css')}}" rel="stylesheet">


    <!--[if lte IE 8]>
    <script>window.location.href = 'https://h.ele.me/activities/landing';</script><![endif]-->

    <script src="about:blank" data-ref="API_CONFIG"></script>
    <script src="about:blank" type="text/javascript"></script>
    <script src="about:blank" type="text/javascript"></script>
    <script src="about:blank" type="text/javascript"></script>
    <base href="">
    <meta content="undefined" name="mobile-agent">
    <meta content="”饿了么”2008年创立于上海，是中国领先的本地生活平台。截至目前，饿了么在线外卖交易平台已覆盖全国2000个城市，加盟餐厅130万家，用户量达2.6亿" name="description">
    <meta content="饿了么，网上订餐，外卖，快餐外卖，外卖网" name="keywords">
</head>
<body class="hidesidebar whitebody" cute-title=""
      ng-class="{hidesidebar: layoutState &amp;&amp; layoutState.hideSidebar, smallbody: layoutState.smallBody, whitebody: layoutState.whiteBody}">

<!-- ngView:  -->
<div class="ng-scope" ng-view="" role="main">
    <div class="map ng-scope" ng-class="{mapmode: mapMode}">
        <div class="container mapcontainer">
            <div map-header="" class="map-header clearfix"><h1><a href="https://www.ele.me/" ubt-click="1433"><img
                    src="{{'/images/'}}map-logo.9a26ef.png" alt="eleme"></a></h1><!-- ngIf: user.user_id -->
                <!-- ngIf: !user.user_id --><span class="map-header-right ng-scope" ng-if="!user.user_id"><a
                        href="https://h5.ele.me/login/#redirect=https%3A%2F%2Fwww.ele.me%2Fhome%2F"
                        ng-href="//h5.ele.me/login/#redirect=https%3A%2F%2Fwww.ele.me%2Fhome%2F" target="_blank"
                        ubt-click="1430">注册</a> <span>|</span> <a
                        href="https://h5.ele.me/login/#redirect=https%3A%2F%2Fwww.ele.me%2Fhome%2F"
                        ng-href="//h5.ele.me/login/#redirect=https%3A%2F%2Fwww.ele.me%2Fhome%2F" ubt-click="1431">登录</a> <a
                        class="btn-security btn-sm" href="https://kaidian.ele.me/" target="_blank"
                        ubt-click="1432">我要开店</a></span><!-- end ngIf: !user.user_id --></div>
            <div map-main="" map-mode="mapMode" class="map-main ng-isolate-scope" ng-class="{mapmode: mapMode}"><h2
                    class="map-logo"><img src="{{asset('images')}}/map-logo-center.425427.svg" alt="eleme"></h2>
                <div class="map-navbar clearfix" ng-class="{hasuserinfo: $root.user.user_id}">
                    <div map-city="" hide-search-result="hideSearchResult" current-city="currentCity"
                         class="map-city ng-isolate-scope" map-mode="mapMode"><a class="mapcity-current ng-binding"
                                                                                 ng-bind="mapCity.current.name"
                                                                                 ng-click="mapCity.toggle($event)">北京</a>
                        <!-- ngIf: mapCity.showCities --></div>
                    <div map-search="" hide-search-result="hideSearchResult" current-city="currentCity"
                         map-mode="mapMode" class="map-search ng-isolate-scope">
                        <form class="mapsearch-inputbar ng-pristine ng-valid"
                              ng-submit="search.showSuggests($event, search.keyword)"><input
                                class="ng-pristine ng-valid" placeholder="请输入你的收货地址（写字楼，小区，街道或者学校）"
                                ng-model="search.keyword" ng-keyup="search.showSuggests($event, search.keyword)"
                                ng-keydown="search.chooseSuggest($event)" ng-click="search.showSuggests($event)"
                                ng-focus="search.showSuggests($event, search.keyword)">
                            <button class="btn-stress" type="submit">搜 索</button>
                        </form>
                        <div class="mapsearch-suggestlist ui-scrollbar-light"><!-- ngIf: search.suggests.length -->
                            <!-- ngIf: search.done && !search.suggests.length --></div>
                        <!-- ngIf: search.resultshow && !hideSearchResult && mapMode --></div>
                </div>
                <div class="map-content"></div>
            </div>
            <div map-footer="" class="mapfooter">
                <div class="mapfooter-app">
                    <div class="mapfooter-app-image"><img src="{{asset('a/images/appqc.95e532.png')}}" alt="扫码下载 APP"> <span>扫码下载 APP</span>
                    </div>
                    <div class="mapfooter-app-text"><p>新用户首次下单</p><strong class="color-stress">最高立减30元</strong>
                        <p>立即下载APP，享更多优惠吧！</p></div>
                </div>
                <p class="mapfooter-link"><a href="http://kaidian.ele.me/" ubt-click="1434">我要开店</a> <a
                        href="https://www.ele.me/support/about" ubt-click="1435">联系我们</a> <a
                        href="https://www.ele.me/support/about/agreement" ubt-click="1436">服务条款和协议</a> <a
                        href="http://jobs.ele.me/" ubt-click="1437">加入我们</a> <a href="https://fengniao.ele.me/">蜂鸟配送</a>
                    <a href="https://imview.rajax.me/im/html/dishonesty/">失信人员查询</a></p>
                <div class="footer-copyright serif">互联网药品信息服务资格证书:<a
                        href="http://www.shfda.gov.cn/gb/node2/yjj/index.html" target="_blank">(沪)-经营性-2016-0011</a> |
                    增值电信业务许可证 : <a href="http://www.shca.gov.cn/" target="_blank">沪B2-20150033</a> | <a
                            href="http://www.miibeian.gov.cn/" target="_blank">沪ICP备 09007032</a> | <a
                            href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=20120305173227823"
                            target="_blank">上海工商行政管理</a> Copyright ©2008-2017 上海拉扎斯信息科技有限公司, All Rights Reserved.
                </div>
                <div class="footer-police container"><a href="http://www.zx110.org/picp/?sn=310100103568" rel="nofollow"
                                                        target="_blank"><img alt="已通过沪公网备案，备案号 310100103568"
                                                                             src="{{asset('a/images/picp_bg.e373b3.jpg')}}" height="30"></a>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
