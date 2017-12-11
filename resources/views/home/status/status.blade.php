<html ng-app="eleme" perf-error="desktop/">

<head>
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit" />
    <meta dynamic-meta name="mobile-agent" content="format=html5; url=http://m.ele.me/place/" />
    <title ng-bind="SEO.title">饿了么-网上订餐_外卖_饿了么订餐官网</title>
    <meta dynamic-meta name="description" content="饿了么是中国专业的网上订餐平台，目前已覆盖北京、上海、杭州、广州等300多个城市，提供各类中式、日式、韩式、西式、下午茶、夜宵等优质美食，并提供送餐上门服务，让订餐更加轻松，叫外卖就上饿了么！">
    <meta dynamic-meta name="keywords" content="饿了么，网上订餐，外卖，快餐外卖，外卖网">
    <meta name="format-detection" content="telephone=no, email=no" />
    <meta name="application-name" content="饿了么网上订餐" />
    <meta name="msapplication-tooltip" content="饿了么网上订餐" />
    <meta name="msapplication-starturl" content="./" />
    <meta name="msapplication-tileimage" content="=http://static11.elemecdn.com/apple-touch-icon.png?v=2" />
    <meta name="msapplication-tilecolor" content="#0088ff" />
    <meta name="msapplication-task" content="name=切换地区;action-uri=http://ele.me/home;icon-uri=http://static11.elemecdn.com/apple-touch-icon.png?v=2" />
    <meta name="msapplication-task" content="name=我要订餐;action-uri=http://ele.me?from=IE;icon-uri=http://static11.elemecdn.com/apple-touch-icon.png?v=2" />
    <meta name="msapplication-task" content="name=订单中心;action-uri=http://ele.me/profile?from=IE;icon-uri=http://static11.elemecdn.com/apple-touch-icon.png?v=2" />
    <meta name="msapplication-task" content="name=寻求帮助（HELP）;action-uri=http://ele.me/support?from=IE;icon-uri=http://static11.elemecdn.com/apple-touch-icon.png?v=2" />
    <meta property="qc:admins" content="2263606250655" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="apple-touch-icon-precomposed" href="https://static2.ele.me/apple-touch-icon.png?v=2" />
    <link rel="shortcut icon" href="//static2.ele.me/eleme/desktop/media/img/favicon-16x16.png" type="image/png" />
    <link rel="icon" href="//static2.ele.me/eleme/desktop/media/img/favicon-16x16.png" type="image/png" sizes="16x16" />
    <link rel="icon" href="//static2.ele.me/eleme/desktop/media/img/favicon-32x32.png" type="image/png" sizes="32x32" />
    <link rel="icon" href="//static2.ele.me/eleme/desktop/media/img/favicon.png" type="image/png" sizes="96x96" />
    <link href="{{asset('/wf/home/css/vendor.d724a8_2.css')}}" rel="stylesheet">
    <link href="{{asset('/wf/home/css/main.0a7669.css')}}" rel="stylesheet">
    <!--[if lte IE 8]><script>window.location.href='https://h.ele.me/activities/landing';</script><![endif]-->
    <script src="{{asset('/wf/home/js/69e30c57868b46e7a0d2b4a6c711970a.js')}}" data-ref="API_CONFIG"></script>
    <script src="{{asset('/wf/home/js/perf.js')}}" type="text/javascript" crossorigin="anonymous"></script>
    <script src="{{asset('/wf/home/js/vendor.8c3a5a.js')}}" type="text/javascript" crossorigin="anonymous"></script>
    <script src="{{asset('/wf/home/js/main.a0cd82.js')}}" type="text/javascript" crossorigin="anonymous"></script>
</head>

<body cute-title ng-class="{hidesidebar: layoutState && layoutState.hideSidebar, smallbody: layoutState.smallBody, whitebody: layoutState.whiteBody}">
<!-- <eleme-topbar state="layoutState"></eleme-topbar> -->
<div class="ng-isolate-scope" ng-switch="state.type" state="layoutState">
    <div class="ng-scope ng-isolate-scope" ng-switch-default="" topbar-default="" state="state">
        <header class="topbar" role="navigation" ng-class="{shoptopbar: state.type === 'shop'}">
            <div class="container clearfix">
                <h1>
                    <a class="topbar-logo icon-logo" href="{{url('/home/index')}}" hardjump="">
                        <span>饿了么</span>
                    </a>
                </h1>
                <a class="topbar-item topbar-homepage focus" href="{{url('/home/index')}}" hardjump="">首页</a>
                <a class="topbar-item" href="/profile/order" hardjump="" ng-class="{'focus': $root.locationpath[1] === 'order'}">我的订单</a>
                <a class="topbar-item cooperation" href="{{url('')}}" target="_blank">加盟合作</a>
                <nav class="topbar-nav">
                    <a class="topbar-nav-link" href="/support/center" hardjump="" target="_blank">
                        <i class="topbar-nav-icon icon-service"></i> 服务中心
                    </a>
                    <a class="topbar-nav-link" href="/support/rules/default" hardjump="" target="_blank">规则中心</a>
                    <div class="topbar-nav-link">
                        <i class="topbar-nav-icon icon-mobile"></i> 手机应用
                        <div class="dropbox topbar-mobile-dropbox">
                            <span>扫一扫, 手机订餐更方便</span>
                            <img class="topbar-nav-qrcode" src="{{asset('/wf/home/img/appqc.95e532.png')}}" alt="扫一扫下载饿了么手机 App">
                        </div>
                    </div>
                    <div topbar-profilebox="">
                        <div class="topbar-profilebox">
                            <span class="topbar-profilebox-avatar icon-profile" ng-show="!$root.user.username"></span>
                            <span class="" ng-show="!$root.user.username">
<a ng-href="//h5.ele.me//login/#redirect=https%3A%2F%2Fwww.ele.me%2F" target="_blank" href="//h5.ele.me//login/#redirect=https%3A%2F%2Fwww.ele.me%2F">登录/注册</a>
</span>
                            <span class="topbar-profilebox-wrapper ng-hide" ng-show="$root.user.username">
<span class="topbar-profilebox-username ng-binding"></span>
                                <span class="topbar-profilebox-btn icon-arrow-down ng-scope" ng-if="$root.topbarType !== 'checkout'"></span>
                                <div class="dropbox topbar-profilebox-dropbox">
                                    <a class="icon-profile" href="/profile" hardjump="">个人中心</a>
                                    <a class="icon-star" href="/profile/favor" hardjump="">我的收藏</a>
                                    <a class="icon-location" href="/profile/address" hardjump="">我的地址</a>
                                    <a class="icon-setting" href="/profile/security" hardjump="">安全设置</a>
                                    <a class="icon-logout" href="JavaScript:" ng-click="logout()">退出登录</a>
                                </div>
                                </span>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    </div>
</div>
<div class="result_title">
    <div class="alert alert-danger" style="margin:0 auto;">
        <ul>
            @if(session('msg'))
                <li style="color:black;font-size: 30px;" id = "info">申请已经提交成功,请牢记并根据唯一的申请件编号<span style="color:red;">{{session('msg')}}</span>查询审核状态.</li>
            @endif
        </ul>
    </div>
</div>
</body>
</html>