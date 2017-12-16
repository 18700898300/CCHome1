<!DOCTYPE html>
<html ng-app="eleme" perf-error="desktop/profile/" class="ng-scope">
<head>
    <style type="text/css">
        /* Code tidied up by ScrapBook */
        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak, .ng-hide { display: none !important; }
    </style>
    <meta charset="UTF-8" />
    <meta name="renderer" content="webkit" />
    <title ng-bind="SEO.title" class="ng-binding">个人中心_个人资料 | 饿了么网上订餐</title>
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="apple-touch-icon-precomposed" href="https://static2.ele.me/apple-touch-icon.png?v=2" />
    <link rel="shortcut icon" href="{{asset('a/image/favicon-16x16.png')}}" type="image/png" />
    <link rel="icon" href="{{asset('a/image/favicon-16x16.png')}}" type="image/png" sizes="16x16" />
    <link rel="icon" href="{{asset('a/image/favicon-32x32.png')}}" type="image/png" sizes="32x32" />
    <link rel="icon" href="{{asset('a/image/favicon.png')}}" type="image/png" sizes="96x96" />
    <link href="{{asset('a/css/vendor.162d72.css')}}" rel="stylesheet" />
    <link href="{{asset('a/css/profile.fff1bd.css')}}" rel="stylesheet" />
    {{--<link href="vendor.162d72.css" rel="stylesheet" />
    <link href="profile.fff1bd.css" rel="stylesheet" />--}}
    <!--[if lte IE 8]><script>window.location.href='https://h.ele.me/activities/landing';</script><![endif]-->
    <script src="about:blank" data-ref="API_CONFIG"></script>
    <script src="about:blank" type="text/javascript"></script>
    <script src="about:blank" type="text/javascript"></script>
    <script src="about:blank" type="text/javascript"></script>
    <script src="{{asset('/js/jquery-1.8.3.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/layer/layer.js')}}" type="text/javascript"></script>
    <base href="" />
    <meta name="mobile-agent" content="format=html5; url=http://m.ele.me/profile" />
    <meta name="description" content="”饿了么”2008年创立于上海，是中国领先的本地生活平台。截至目前，饿了么在线外卖交易平台已覆盖全国2000个城市，加盟餐厅130万家，用户量达2.6亿" />
    <meta name="keywords" content="饿了么，网上订餐，外卖，快餐外卖，外卖网" />
</head>
<body cute-title="" ng-class="{hidesidebar: layoutState &amp;&amp; layoutState.hideSidebar, smallbody: layoutState.smallBody, whitebody: layoutState.whiteBody}" style="position: relative;">
<div ng-switch="state.type" state="layoutState" class="ng-isolate-scope">
    <!-- ngSwitchWhen: checkout -->
    <!-- ngSwitchDefault:  -->
     <div ng-switch-default="" topbar-default="" state="state" class="ng-scope ng-isolate-scope">
        <header class="topbar" role="navigation" ng-class="{shoptopbar: state.type === 'shop'}">
            <div class="container clearfix">
                <h1><a href="https://www.ele.me/" hardjump="" class="topbar-logo icon-logo"><span>曹操到家</span></a></h1>
                <a href="https://www.ele.me/" hardjump="" class="topbar-item topbar-homepage" ng-class="{'focus': $root.locationpath[0] === 'place'}">首页</a>
                <a href="https://www.ele.me/profile/order" hardjump="" class="topbar-item" ng-class="{'focus': $root.locationpath[1] === 'order'}">我的订单</a>
                <a href="https://h5.ele.me/service/cooperation/" target="_blank" class="topbar-item cooperation">加盟合作</a>
                <nav class="topbar-nav">
                    <a ng-href="//h5.ele.me/service/agreement/#HEAEDER_SHOW=1" hardjump="" class="topbar-nav-link" target="_blank" href="https://h5.ele.me/service/agreement/#HEAEDER_SHOW=1">规则中心</a>
                    <div class="topbar-nav-link">
                        <i class="topbar-nav-icon icon-mobile"></i>手机应用
                        <div class="dropbox topbar-mobile-dropbox">
                            <span>扫一扫, 手机订餐更方便</span>
                            <img src="{{asset('a/image/appqc.95e532.png')}}" class="topbar-nav-qrcode" alt="扫一扫下载饿了么手机 App" />
                        </div>
                    </div>
                    <div topbar-profilebox="">
                        <div class="topbar-profilebox">
                            <!-- ngIf: $root.user.avatar && $root.topbarType !== 'checkout' -->
                            <span class="topbar-profilebox-avatar icon-profile ng-hide" ng-show="!$root.user.username"></span>
                            <span ng-show="!$root.user.username" class="ng-hide"><a ng-href="//h5.ele.me/login/#redirect=https%3A%2F%2Fwww.ele.me%2Fprofile%2F" target="_blank" href="https://h5.ele.me/login/#redirect=https%3A%2F%2Fwww.ele.me%2Fprofile%2F">登录/注册</a></span>
                            <span class="topbar-profilebox-wrapper" ng-show="$root.user.username">
          <!-- ngIf: $root.topbarType === 'checkout' --> <span class="topbar-profilebox-username ng-binding">{{$users->uname}}</span>
                                <!-- ngIf: $root.topbarType === 'checkout' -->
                                <!-- ngIf: $root.topbarType !== 'checkout' --><span class="topbar-profilebox-btn icon-arrow-down ng-scope" ng-if="$root.topbarType !== 'checkout'"></span>
                                <!-- end ngIf: $root.topbarType !== 'checkout' -->
          <div class="dropbox topbar-profilebox-dropbox">
           <a class="icon-profile" href="https://www.ele.me/profile" hardjump="">个人中心</a>
           <a class="icon-star" href="https://www.ele.me/profile/favor" hardjump="">我的收藏</a>
           <a class="icon-location" href="https://www.ele.me/profile/address" hardjump="">我的地址</a>
           <a class="icon-setting" href="https://www.ele.me/profile/security" hardjump="">安全设置</a>
           <a class="icon-logout" ng-click="logout()">退出登录</a>
          </div></span>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    </div>
</div>
<div class="importantnotification container" role="banner">
    <!-- ngIf: enable -->
</div>
<div class="sidebar" role="complementary" ng-hide="layoutState &amp;&amp; layoutState.hideSidebar">
    <div class="sidebar-tabs">
        <div class="toolbar-tabs-middle">
            <a class="toolbar-btn icon-order toolbar-close" href="https://www.ele.me/profile/order" hardjump="" tooltip="我的订单" tooltip-placement="left" ubt-click="toolbar_order">
                <!-- ngIf: sidebarCount.uncompletedOrder > 0 --></a>
            <div class="toolbar-separator"></div>
            <a class="toolbar-cartbtn icon-cart toolbar-open" template="cart" ng-class="{'focus': (activeTemplate === 'cart' &amp;&amp; isSidebarOpen), 'toolbar-cartbtn-shownum': foodCount.count}" ubt-click="390">购物车
                <!-- ngIf: foodCount.count --></a>
            <div class="toolbar-separator"></div>
            <a class="toolbar-btn icon-notice toolbar-open modal-hide" template="message" ng-class="{'focus': (activeTemplate === 'message' &amp;&amp; isSidebarOpen), 'toolbar-open': user, 'modal-hide': user}" tooltip="我的信息" tooltip-placement="left" ubt-click="392">
                <!-- ngIf: messageCount.count --></a>
        </div>
        <div class="toolbar-tabs-bottom">
            <div class="toolbar-btn icon-QR-code">
                <div class="dropbox toolbar-tabs-dropbox">
                    <a href="http://static11.elemecdn.com/eleme/desktop/mobile/index.html" target="_blank"><img src="{{asset('a/image/appqc.95e532.png')}}" alt="下载手机应用" /><p>下载手机应用</p><p class="icon-QR-code-bonus">即可参加分享红包活动</p></a>
                </div>
            </div>
            <a class="toolbar-btn sidebar-btn-backtop icon-top" tooltip="回到顶部" title="回到顶部" tooltip-placement="left" style="visibility: hidden;"></a>
        </div>
    </div>
    <div class="sidebar-content">
        <!-- ngInclude: activeTemplate ? ('/common/page/_block/sidebar/sidebar-'+ activeTemplate + '/sidebar-'+ activeTemplate + '.html') : '' -->
    </div>
</div>
<!-- ngView:  -->
<div ng-view="" role="main" class="ng-scope">
    <div class="profile-container container" profile-container="" page-title="个人资料" page-name="info">
        <div class="clearfix">
            <div class="location" ng-style="{visibility: geohash ? '' : 'hidden'}" role="navigation" location="">
                <span>当前位置:</span>
                <span class="location-current"><a class="inherit ng-binding" ng-href="/place/wx4sp8kd8y4" ubt-click="401" ng-bind="place.name || place.address" href="https://www.ele.me/place/wx4sp8kd8y4">昌平区回龙观北回归线(回龙观东大街南)</a></span>
                <span class="location-change" ng-class="{ 'location-hashistory': user.username &amp;&amp; userPlaces &amp;&amp; userPlaces.length &gt; 0 }"><a ng-href="/home" ubt-click="400" hardjump="" href="https://www.ele.me/home">[切换地址]</a>
       <ul class="dropbox location-dropbox" ubt-visit="398">
        <li class="arrow"></li>
           <!-- ngRepeat: userPlace in userPlaces | filter:filterPlace | limitTo: 4 -->
        <li class="changelocation"><a ng-href="/home" hardjump="" href="https://www.ele.me/home">修改收货地址<span class="icon-location"></span></a></li>
       </ul></span>
                <span ng-transclude=""><i class="icon-arrow-right ng-scope"></i><span class="ng-binding ng-scope">个人资料</span></span>
            </div>
            <div search-input=""></div>
        </div>
        <ul class="profile-sidebar" role="navigation" profile-sidebar="">
            <li class="profile-sidebar-section"><h2 class="profile-sidebar-sectiontitle" ng-class="{ active: pageName === 'profile' }"><i class="icon-line-home"></i><a href="{{url('home/percenter')}}">个人中心</a></h2></li>
            <li class="profile-sidebar-section"><h2 class="profile-sidebar-sectiontitle"><i class="icon-line-order"></i>我的订单</h2>
                <ul>
                    <li ng-class="{ active: pageName === 'order' }"><a href="https://www.ele.me/profile/order">近三个月订单</a></li>
                    <li ng-class="{ active: pageName === 'order-unrated' }"><a href="https://www.ele.me/profile/order/unrated">待评价订单
                    <!-- ngIf: unratedNumber --></a></li>
                    <li ng-class="{ active: pageName === 'order-refunding' }"><a href="https://www.ele.me/profile/order/refund">退单记录</a></li>
                </ul></li>
            <li class="profile-sidebar-section"><h2 class="profile-sidebar-sectiontitle"><i class="icon-yen"></i>我的资产</h2>
                <ul>
                    <li ng-class="{ active: pageName === 'hongbao' }"><a href="https://www.ele.me/profile/hongbao">我的红包</a></li>
                    <li ng-class="{ active: pageName === 'balance' }"><a href="https://www.ele.me/profile/balance">账户余额</a></li>
                    <li ng-class="{ active: pageName === 'points' }"><a href="https://www.ele.me/profile/points">我的金币</a></li>
                </ul></li>
            <li class="profile-sidebar-section"><h2 class="profile-sidebar-sectiontitle"><i class="icon-line-profile"></i>我的资料</h2>
                <ul>
                    <li ng-class="{ active: pageName === 'info' }" class="active"><a href="{{asset('home/person')}}">个人资料</a></li>
                    <li ng-class="{ active: pageName === 'address' }"><a href="{{asset('home/address')}}">地址管理</a></li>
                    <li ng-class="{ active: pageName === 'security-center' }"><a href="{{asset('home/safe')}}">安全中心</a></li>
                    <li ng-class="{ active: pageName === 'changepassword' }"><a href="{{asset('home/changepwd')}}">修改密码</a></li>
                </ul></li>
            <li class="profile-sidebar-section"><h2 class="profile-sidebar-sectiontitle" ng-class="{ active: pageName === 'favor' }"><a href="{{asset('home/collect')}}"><i class="icon-order-favor"></i>我的收藏</a></h2></li>
        </ul>
        <div class="profile-panel" role="main">

   @yield('body')


<footer class="footer" role="contentinfo">
    <div class="container clearfix">
        <div class="footer-link">
            <h3 class="footer-link-title">用户帮助</h3>
            <a class="footer-link-item" href="https://www.ele.me/support/question/default" target="_blank">常见问题</a>
        </div>
        <div class="footer-link">
            <h3 class="footer-link-title">商务合作</h3>
            <a class="footer-link-item" href="https://kaidian.ele.me/" target="_blank">我要开店</a>
            <a class="footer-link-item" href="https://www.ele.me/support/about/jiameng" target="_blank">加盟指南</a>
            <a class="footer-link-item" href="https://www.ele.me/support/about/contact" target="_blank">市场合作</a>
            <a class="footer-link-item" href="http://openapi.eleme.io/" target="_blank">开放平台</a>
        </div>
        <div class="footer-link">
            <h3 class="footer-link-title">关于我们</h3>
            <a class="footer-link-item" href="https://www.ele.me/support/about" target="_blank">饿了么介绍</a>
            <a class="footer-link-item" href="http://jobs.ele.me/" target="_blank">加入我们</a>
            <a class="footer-link-item" href="https://www.ele.me/support/about/contact" target="_blank">联系我们</a>
            <a class="footer-link-item" ng-href="//h5.ele.me/service/agreement/#HEAEDER_SHOW=1" target="_blank" href="https://h5.ele.me/service/agreement/#HEAEDER_SHOW=1">规则中心</a>
        </div>
        <div class="footer-contect">
            <div class="footer-contect-item">
                24小时客服热线 :
                <a class="inherit" href="tel:10105757">10105757</a>
            </div>
            <div class="footer-contect-item">
                关注我们 :
                <div href="JavaScript:" class="icon-wechat" ubt-click="402">
                    <div class="dropbox dropbox-bottom footer-contect-dropbox" ubt-visit="402">
                        <img src="{{asset('a/image/wexinqc100@2x.393ade.png')}}" alt="微信号: elemeorder" />
                        <p>微信号: elemeorder</p>
                        <p>饿了么网上订餐</p>
                    </div>
                </div>
                <a href="http://e.weibo.com/elemeorder" class="icon-weibo" target="_blank"></a>
            </div>
        </div>
        <div class="footer-mobile">
            <a href="https://h.ele.me/landing" target="_blank"><img src="{{asset('a/image/appqc.95e532.png')}}" class="footer-mobile-icon" alt="扫一扫下载饿了么手机 App" /></a>
            <div class="footer-mobile-content">
                <h3>下载手机版</h3>
                <p>扫一扫,手机订餐方便</p>
            </div>
        </div>
        <div class="footer-copyright serif">
            <h5 class="owner">所有方：上海拉扎斯信息科技有限公司</h5>
            <p>增值电信业务许可证 : <a href="http://www.shca.gov.cn/" target="_blank">沪B2-20150033</a> | <a href="http://www.miibeian.gov.cn/" target="_blank">沪ICP备 09007032</a> | <a href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=20120305173227823" target="_blank">上海工商行政管理</a> Copyright &copy;2008-2017 ele.me, All Rights Reserved.</p>
        </div>
        <div class="footer-police container">
            <a href="http://www.zx110.org/picp/?sn=310100103568" rel="nofollow" target="_blank"><img alt="已通过沪公网备案，备案号 310100103568" src="{{asset('a/image/picp_bg.e373b3.jpg')}}" height="30" /></a>
        </div>
    </div>
</footer>
</body>
</html>