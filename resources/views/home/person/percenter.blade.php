@extends('home.layouts.person')
@section('body')
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<!-- ngIf: pageTitleVisible -->
<div class="profile-panelcontent" ng-transclude="">
    <div class="profile-info ng-scope">
        <div class="profile-infoitem">
            <div class="profile-avatarwrap">
                <img ng-show="avatarUrl" ng-src="//fuss10.elemecdn.com//shadow.elemecdn.com/faas/desktop/media/img/default-avatar.38e40d.png?imageMogr2/thumbnail/112x112" alt="{{$users['uname']}}的头像" class="profile-avatar" src="{{$users['avatar']}}" />
                <a href="{{url('home/person')}}" class="profile-edit">编辑资料</a>
            </div>
            <div class="profile-perosondata">
                <h3 class="profile-name ng-binding">夜已深，<strong class="ng-binding">{{$users['uname']}}</strong></h3>
                <p class="profile-tips ng-binding" ng-bind="timeSection.tipText">是不是饿的睡不着呀？吃个夜宵呗！</p>
                <p class="profile-security">账户安全：<span ng-class="{'low': level === 0, 'mid': level === 1, 'high': level ===2 || level ===3}" ng-bind="levelText" class="ng-binding high">高</span> <a href="{{url('home/safe')}}" ng-bind="levelTip" class="ng-binding">查看详情</a></p>
                <p class="profile-othermessage">
                    <!-- ngIf: user.is_mobile_valid --><a href="https://www.ele.me/profile/security" class="icon mobile icon-profile-phone ng-scope" ng-if="user.is_mobile_valid"></a>
                    <!-- end ngIf: user.is_mobile_valid -->
                    <!-- ngIf: user.is_email_valid -->
                    <!-- ngIf: !user.is_mobile_valid -->
                    <!-- ngIf: !user.is_email_valid --><a href="https://www.ele.me/profile/security" class="icon email icon-profile-email none ng-scope" ng-if="!user.is_email_valid" tooltip="未绑定邮箱"></a>
                    <!-- end ngIf: !user.is_email_valid --></p>
            </div>
        </div>
        <div class="profile-infoitem">
            <a class="inherit" href="https://www.ele.me/profile/hongbao"><p>我的红包</p><p class="profile-infoitem-number hongbao"><span class="number ng-binding" ng-bind="hongbaocount">0</span>个</p></a>
        </div>
        <div class="profile-infoitem">
            <a class="inherit" href="https://www.ele.me/profile/points"><p>我的金币</p><p class="profile-infoitem-number score"><span class="number ng-binding" ng-bind="user.point">0</span>个</p></a>
        </div>
        <div class="profile-infoitem">
            <a class="inherit" href="https://www.ele.me/profile/balance"><p>账户余额</p><p class="profile-infoitem-number balance"><span class="number ng-binding" ng-bind="user.balance| number : 2">0.00</span>元</p></a>
        </div>
    </div>


    <div class="profile-order ng-scope">
        <div class="tabnavigation">
            <a class="tabnavigation-navitem active">最近订单</a>
            <a class="tabnavigation-rightitem profile-allorder" href="{{url('/home/person/3order')}}">查看全部订单&gt;</a>
        </div>
        <div class="profile-order-content">
            <div loading="" content="正在载入最近订单..." ng-show="orderLoading" class="loading ng-binding ng-isolate-scope ng-hide">
                <!-- ngIf: type==='profile' -->
                <img class="ng-scope" ng-if="type==='profile'" src="profile-loading.4984fa.gif" alt="正在加载" />
                <!-- end ngIf: type==='profile' -->
                <!-- ngIf: type==='normal' -->正在载入最近订单...
            </div>
            <!-- ngRepeat: order in recentOrder -->
            @foreach($order as $k => $v)
            <div ng-repeat="order in recentOrder" data="{ $order: order }" class="orderblock ng-isolate-scope">
                <div class="orderblock-item orderblock-rstinfo clearfix">
                    <a href="https://www.ele.me/shop/1195138" class="logo" ng-href="/shop/1195138"><img src="{{$v['shop']['avatar']}}" ng-src="//fuss10.elemecdn.com/f/8c/a0243ff6b05f952b127524b5bf99ajpeg.jpeg?imageMogr2/thumbnail/70x70" alt="{{$v['shop']['avatar']}}" /></a>
                    <h3 class="name"><a href="https://www.ele.me/shop/1195138" class="inherit ng-binding" ng-bind="order.restaurant_name" ng-href="/shop/1195138">{{$v['shop']['name']}}</a></h3>
                    <p class="product ng-binding" ng-bind="order.product">

                            @foreach($order[$k]['order_detail'] as $v)
                            {{$v['fname']}}{{$v['bcnt']}}/份
                           @endforeach
                             共{{$order[$k]['ocnt']}}个菜品
                       </p>
                </div>
                <div class="orderblock-item orderblock-time ng-binding">
                    {{date("Y-m-d  H:i:s",$order[$k]['otime'])}}

                </div>
                <div class="orderblock-item orderblock-price">
                    <p class="total ng-binding" ng-bind="'&yen;' + (order.total | number:2)">&yen;{{$order[$k]['cprice']}}</p>
                    <span class="ng-binding">在线支付</span>
                </div>
                <div class="orderblock-item orderblock-status">
                    <p class="status ng-binding end" ng-class="{'waitpay': (order.realStatus === 4),'end': (order.realStatus === 5)}" ng-bind="order.statusText">
                        @if($order[$k]['status'] === 0)
                            下单未支付
                            @elseif($order[$k]['status'] === 1)
                            下单已支付
                            @elseif($order[$k]['status'] === 2)
                            正在配送中
                            @elseif($order[$k]['status'] ===3)
                            成功订单
                            @elseif($order[$k]['status'] === 4)
                            催单
                            @elseif($order[$k]['status'] === 5)
                            订单超时
                            @endif

                    </p>
                    <a href="{{url('/home/person/orderinfo')}}/{{$v['oid']}}" class="statuslink ng-binding" ng-href="order/id/1214649505031811302" ng-bind="order.realStatus === 4 ? '立即评价' : '订单详情'">订单详情</a>
                </div>
            </div>
            <!-- end ngRepeat: order in recentOrder -->
            @endforeach
        </div>
    </div>




    {{--<div class="profile-order ng-scope">--}}
        {{--<div class="tabnavigation">--}}
            {{--<a class="tabnavigation-navitem active">最近订单</a>--}}
            {{--<a class="tabnavigation-rightitem profile-allorder" href="https://www.ele.me/profile/order">查看全部订单&gt;</a>--}}
        {{--</div>--}}
        {{--<div class="profile-order-content">--}}
            {{--<div class="loading ng-binding ng-isolate-scope ng-hide" loading="" content="正在载入最近订单..." ng-show="orderLoading">--}}
                {{--<!-- ngIf: type==='profile' -->--}}
                {{--<img ng-if="type==='profile'" src="{{asset('a/image/profile-loading.4984fa.gif')}}" alt="正在加载" class="ng-scope" />--}}
                {{--<!-- end ngIf: type==='profile' -->--}}
                {{--<!-- ngIf: type==='normal' -->正在载入最近订单...--}}
            {{--</div>--}}
            {{--<!-- ngRepeat: order in recentOrder -->--}}
            {{--<!-- ngIf: !recentOrder.length && !orderLoading -->--}}
            {{--<div class="nodata ng-isolate-scope" ng-if="!recentOrder.length &amp;&amp; !orderLoading" nodatatip="" content="你最近没有下过单哦，现在就去&lt;a href='/place'&gt;订餐&lt;/a&gt;吧~">--}}
                {{--<p class="nodata-container ng-binding" ng-bind-html="content | toTrusted">你最近没有下过单哦，现在就去<a href="https://www.ele.me/place">订餐</a>吧~</p>--}}
            {{--</div>--}}
            {{--<!-- end ngIf: !recentOrder.length && !orderLoading -->--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="profile-footprint ng-scope">
        <div class="tabnavigation">
            <a class="tabnavigation-navitem active">美食足迹</a>
            <a class="tabnavigation-navitem" href="https://www.ele.me/profile/favor">我的收藏</a>
            <div class="tabnavigation-rightitem ng-scope ng-binding simplepagination ng-hide" simplepagination="" pagination-context="restaurantContext" ng-show="restaurantContext.data.length">
                1/0
                <span class="pre-btn icon-profile-left-arrow disable" ng-class="{'disable':currentPage===1}"></span>
                <span class="next-btn icon-profile-right-arrow" ng-class="{'disable':currentPage===pageCount}"></span>
            </div>
        </div>
        <div class="footprint-content clearfix">
            <div class="loading ng-binding ng-isolate-scope ng-hide" loading="" content="正在载入美食足迹..." ng-show="footDateLoading">
                <!-- ngIf: type==='profile' -->
                <img ng-if="type==='profile'" src="{{asset('a/image/profile-loading.4984fa.gif')}}" alt="正在加载" class="ng-scope" />
                <!-- end ngIf: type==='profile' -->
                <!-- ngIf: type==='normal' -->正在载入美食足迹...
            </div>
            <!-- ngRepeat: restaurant in restaurantContext.pageData -->
            <!-- ngIf: !restaurantContext.pageData.length && !footDateLoading -->
            <div class="nodata ng-isolate-scope" ng-if="!restaurantContext.pageData.length &amp;&amp; !footDateLoading" nodatatip="" content="哎呦，未能留下你的美食足迹，快去寻访&lt;a href='/place'&gt;附近的美食&lt;/a&gt;吧~">
                <p class="nodata-container ng-binding" ng-bind-html="content | toTrusted">哎呦，未能留下你的美食足迹，快去寻访<a href="https://www.ele.me/place">附近的美食</a>吧~</p>
            </div>
            <!-- end ngIf: !restaurantContext.pageData.length && !footDateLoading -->
        </div>
    </div>
</div>
</div>
</div>
</div>

    @endsection
