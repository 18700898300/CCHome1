@extends('home.layouts.person')
@section('body')


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
                <p class="profile-security">账户安全：<span ng-class="{'low': level === 0, 'mid': level === 1, 'high': level ===2 || level ===3}" ng-bind="levelText" class="ng-binding high">高</span> <a href="https://www.ele.me/profile/security" ng-bind="levelTip" class="ng-binding">查看详情</a></p>
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
            <a class="tabnavigation-rightitem profile-allorder" href="https://www.ele.me/profile/order">查看全部订单&gt;</a>
        </div>
        <div class="profile-order-content">
            <div class="loading ng-binding ng-isolate-scope ng-hide" loading="" content="正在载入最近订单..." ng-show="orderLoading">
                <!-- ngIf: type==='profile' -->
                <img ng-if="type==='profile'" src="{{asset('a/image/profile-loading.4984fa.gif')}}" alt="正在加载" class="ng-scope" />
                <!-- end ngIf: type==='profile' -->
                <!-- ngIf: type==='normal' -->正在载入最近订单...
            </div>
            <!-- ngRepeat: order in recentOrder -->
            <!-- ngIf: !recentOrder.length && !orderLoading -->
            <div class="nodata ng-isolate-scope" ng-if="!recentOrder.length &amp;&amp; !orderLoading" nodatatip="" content="你最近没有下过单哦，现在就去&lt;a href='/place'&gt;订餐&lt;/a&gt;吧~">
                <p class="nodata-container ng-binding" ng-bind-html="content | toTrusted">你最近没有下过单哦，现在就去<a href="https://www.ele.me/place">订餐</a>吧~</p>
            </div>
            <!-- end ngIf: !recentOrder.length && !orderLoading -->
        </div>
    </div>
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
