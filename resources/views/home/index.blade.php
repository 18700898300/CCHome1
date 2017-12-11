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
<div class="importantnotification container" role="banner"></div>
<!-- <eleme-importantnotification></eleme-importantnotification> -->
<div class="sidebar" role="complementary" ng-hide="layoutState && layoutState.hideSidebar">
    <div class="sidebar-tabs">
        <div class="toolbar-tabs-middle">
            <a class="toolbar-btn icon-order toolbar-close" href="/profile/order" hardjump="" tooltip="我的订单" tooltip-placement="left" ubt-click="toolbar_order"></a>
            <div class="toolbar-separator"></div>
            <a class="toolbar-cartbtn icon-cart toolbar-open" href="JavaScript:" template="cart" ng-class="{'focus': (activeTemplate === 'cart' && isSidebarOpen), 'toolbar-cartbtn-shownum': foodCount.count}" ubt-click="390">购物车</a>
            <div class="toolbar-separator"></div>
            <a class="toolbar-btn icon-notice toolbar-open modal-hide" href="JavaScript:" template="message" ng-class="{'focus': (activeTemplate === 'message' && isSidebarOpen), 'toolbar-open': user, 'modal-hide': user}" tooltip="我的信息" tooltip-placement="left" ubt-click="392"></a>
        </div>
        <div class="toolbar-tabs-bottom">
            <div class="toolbar-btn icon-QR-code">
                <div class="dropbox toolbar-tabs-dropbox">
                    <a href="http://static11.elemecdn.com/eleme/desktop/mobile/index.html" target="_blank">
                        <img src="{{asset('/wf/home/img/appqc.95e532.png')}}" alt="下载手机应用">
                        <p>下载手机应用</p>
                        <p class="icon-QR-code-bonus">即可参加分享红包活动</p>
                    </a>
                </div>
            </div>
            <a id="live800iconlink" class="toolbar-btn icon-service" online-service="" tooltip="在线客服" title="在线客服" tooltip-placement="left" target="_blank" href="JavaScript:" style="visibility: hidden;"></a>
            <a class="toolbar-btn sidebar-btn-backtop icon-top" tooltip="回到顶部" title="回到顶部" href="JavaScript:" tooltip-placement="left" style="visibility: hidden;"></a>
        </div>
    </div>
    <div class="sidebar-content"></div>
</div>
<!-- <eleme-sidebar ng-hide="layoutState && layoutState.hideSidebar"></eleme-sidebar> -->
<!-- <div ng-view role="main"></div> -->
<!-- 地址栏 -->
<div class="container clearfix ng-scope">
    <span>当前位置:</span>
    <!-- <span class="location-current">
            <a class="inherit ng-binding" ng-href="/place/wx4eyv2e1qf" ubt-click="401" ng-bind="place.name || place.address" href="/place/wx4eyv2e1qf">昌平区回龙观村东区(龙域中街南70米)</a>
        </span>
        <span class="location-change" >
            <a ng-href="/home" ubt-click="400" hardjump="" href="/home">[切换地址]</a>
            <ul class="dropbox location-dropbox" ubt-visit="398">
                <li class="arrow"></li>
                <li class="changelocation">
                    <a ng-href="/home" hardjump="" href="/home">
                        修改收货地址
                        <span class="icon-location"></span>
                    </a>
                </li>
            </ul>
        </span>
        <span ng-transclude="">
            <i class="icon-arrow-right ng-scope"></i>
            <span class="ng-scope">服务中心</span>
        </span>-->
</div>
</div>
<div class="container ng-scope" ng-show="!recentBoughtOnly">
    <div class="excavator container">
        <div class="excavator-filter ng-scope">

            <span>商家分类:</span>
            <a class="excavator-filter-item ng-binding ng-scope active" href="javascript:">全部商家</a>
            <a class="excavator-filter-item ng-binding ng-scope" href="javascript:">美食</a>
            <a class="excavator-filter-item ng-binding ng-scope" href="javascript:">快餐便当</a>
            <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">特色菜系</a>
            <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">异国料理</a>
            <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">小吃夜宵</a>
            <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">甜品饮品</a>
            <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">果蔬生鲜</a>
            <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">商店超市</a>
            <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">早餐</a>
            <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">正餐优选</a>
            <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">下午茶</a>
            <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">夜宵</a>
            <a class="excavator-filter-item ng-binding ng-scope" href="javascript:" ng-repeat="category in rstCategories" ng-class="{'focus': clickedCategory === category.id && (!clickedCategory || clickedCategory < 0) , 'active': activeCategory === category.id, 'premium': category.id === -10001 && !pumStream}" ng-bind="category.name" ng-click="changeCategory(category)" ubt-click="380">鲜花蛋糕</a>
            <div class="excavator-filter-subbox ng-hide" ng-show="subCategories"></div>
        </div>
    </div>
    <div class="place-rstbox clearfix">
        <div class="clearfix"  style="height: 800px;">
            <a class="rstblock" href="{{url('home/shop')}}" data-rst-id="152185819" data-bidding="" target="_blank">
                <div class="rstblock-logo">
                    <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/8/05/dff0f9f103bd59af10cf0ef3b6accpng.png?imageMogr2/thumbnail/70x70" alt="麻小外卖（上地店）" width="70" height="70">
                    <span>36 分钟</span>
                </div>
                <div class="rstblock-content">
                    <div class="rstblock-title">麻小外卖（上地店）</div>
                    <div class="starrating icon-star">
                        <span class="icon-star" style="width:86%;"></span>
                    </div>
                    <span class="rstblock-monthsales">月售175单</span>
                    <div class="rstblock-cost">配送费¥20</div>
                    <div class="rstblock-activity"></div>
                </div>
            </a>

            @foreach($shops as $k=>$v)
            <a class="rstblock-closed rstblock" href="{{url('/home/shop')}}/{{$v->sid}}" data-rst-id="2218439" data-bidding="" target="_blank">
                <div class="rstblock-logo">
                    <img class="rstblock-logo-icon" src="//fuss10.elemecdn.com/c/1b/a7bb9dc920528d23e790b1a15bedajpeg.jpeg?imageMogr2/thumbnail/70x70" alt="麻辣香锅" width="70" height="70">
                    <span class="rstblock-left-timeout">{{$v->statime}} 分钟</span>
                </div>
                <div class="rstblock-content">
                    <div class="rstblock-title">{{$v->name}}</div>
                    <div class="starrating icon-star">
                        <span class="icon-star" style="width:90%;"></span>
                    </div>
                    <span class="rstblock-monthsales">月售2520单</span>
                    <div class="rstblock-cost">配送费¥{{$v->sprice}}</div>
                    <div class="rstblock-relaxing">商家休息,暂不接单</div>
                </div>
            </a>
            @endforeach
        </div>
        <div class="loading ng-binding ng-isolate-scope ng-hide" ng-show="" loading="" content="正在载入更多商家..." type="normal">
            <img class="normal ng-scope" ng-if="" src="" alt="正在加载"> 正在载入更多商家...
        </div>
        <div id="fetchMoreRst" class="">点击加载更多商家...</div>
        <div class="place-rstbox-nodata ng-hide" ng-show="">
            <img class="nodata" src="" alt="找不到商家" width="100">
            <div class="typo-small">附近没有找到符合条件的商家，换个筛选条件试试吧</div>
        </div>
        <!-- </div> -->
        <!-- </div> -->
        <!-- <eleme-footer></eleme-footer> -->
        <footer class="footer" role="contentinfo">
            <div class="container clearfix">
                <div class="footer-link">
                    <h3 class="footer-link-title">用户帮助</h3>
                    <a class="footer-link-item" href="/support/center" target="_blank">服务中心</a>
                    <a class="footer-link-item" href="/support/question/default" target="_blank">常见问题</a>
                    <a class="footer-link-item" online-service="" href="javascript:" style="visibility: hidden;">在线客服</a>
                </div>
                <div class="footer-link">
                    <h3 class="footer-link-title">商务合作</h3>
                    <a class="footer-link-item" href="//kaidian.ele.me" target="_blank">我要开店</a>
                    <a class="footer-link-item" href="/support/about/jiameng" target="_blank">加盟指南</a>
                    <a class="footer-link-item" href="/support/about/contact" target="_blank">市场合作</a>
                    <a class="footer-link-item" href="http://openapi.eleme.io/" target="_blank">开放平台</a>
                </div>
                <div class="footer-link">
                    <h3 class="footer-link-title">关于我们</h3>
                    <a class="footer-link-item" href="/support/about" target="_blank">饿了么介绍</a>
                    <a class="footer-link-item" href="http://jobs.ele.me/" target="_blank">加入我们</a>
                    <a class="footer-link-item" href="/support/about/contact" target="_blank">联系我们</a>
                    <a class="footer-link-item" href="/support/rules/default" target="_blank">规则中心</a>
                </div>
                <div class="footer-contect">
                    <div class="footer-contect-item">
                        24小时客服热线 :
                        <a class="inherit" href="tel:10105757">10105757</a>
                    </div>
                    <div class="footer-contect-item">
                        意见反馈 :
                        <a class="inherit" href="mailto:feedback@ele.me">feedback@ele.me</a>
                    </div>
                    <div class="footer-contect-item">
                        关注我们 :
                        <div class="icon-wechat" href="JavaScript:" ubt-click="402">
                            <div class="dropbox dropbox-bottom footer-contect-dropbox" ubt-visit="402">
                                <img src="" alt="微信号: elemeorder">
                                <p>微信号: elemeorder</p>
                                <p>饿了么网上订餐</p>
                            </div>
                        </div>
                        <a class="icon-weibo" href="http://e.weibo.com/elemeorder" target="_blank"></a>
                    </div>
                </div>
                <div class="footer-mobile">
                    <a href="https://h.ele.me/landing" target="_blank">
                        <img class="footer-mobile-icon" src="{{asset('/wf/home/img/appqc.95e532.png')}}'" alt="扫一扫下载饿了么手机 App">
                    </a>
                    <div class="footer-mobile-content">
                        <h3>下载手机版</h3>
                        <p>扫一扫,手机订餐方便</p>
                    </div>
                </div>
                <div class="footer-copyright serif">
                    <h5 class="owner">所有方：上海拉扎斯信息科技有限公司</h5>
                    <p>
                        增值电信业务许可证 :
                        <a href="http://www.shca.gov.cn/" target="_blank">沪B2-20150033</a> |
                        <a href="http://www.miibeian.gov.cn/" target="_blank">沪ICP备 09007032</a> |
                        <a href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&entyId=20120305173227823" target="_blank">上海工商行政管理</a> Copyright ©2008-2017 ele.me, All Rights Reserved.
                    </p>
                </div>
                <div class="footer-police container">
                    <a href="http://www.zx110.org/picp/?sn=310100103568" rel="nofollow" target="_blank">
                        <img alt="已通过沪公网备案，备案号 310100103568" src="{{asset('/wf/home/img/picp_bg.e373b3.jpg')}}" height="30">
                    </a>
                </div>
            </div>
        </footer>
        <script src="{{asset('/wf/home/js/6936dbf3e7d94cffa954bcbcf2b79f38.js')}}"></script>
        <script>
            $('#info').fadeOut(2000);

        </script>
</body>

</html>
