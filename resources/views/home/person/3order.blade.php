@extends('home.layouts.person')
@section('body')

    <h3 ng-if="pageTitleVisible" class="profile-paneltitle ng-scope"><span ng-bind="pageTitle" class="ng-binding">近三个月订单</span> <span class="subtitle ng-binding" ng-bind-html="pageSubtitle | toTrusted"></span></h3>
    <div class="profile-panelcontent" ng-transclude="">
        <div class="order-fetchtakeout ng-scope ng-isolate-scope" show-fetch-takeout-dialog="">
            <img src="//shadow.elemecdn.com/faas/desktop/media/img/takeout.408a87.png" />
        </div>
        <div class="order-extra ng-scope">
            <a href="/support/question/hotissue" target="_blank">热门问题</a>
            <a href="//static11.elemecdn.com/eleme/desktop/mobile/index.html" target="_blank">随时关注订单状态</a>
        </div>
        <div class="loading ng-binding ng-isolate-scope ng-hide" loading="" ng-show="!orderList">
            <!-- ngIf: type==='profile' -->
            <img ng-if="type==='profile'" src="//shadow.elemecdn.com/faas/desktop/media/img/profile-loading.4984fa.gif" alt="正在加载" class="ng-scope" />
            <!-- end ngIf: type==='profile' -->
            <!-- ngIf: type==='normal' -->正在载入数据...
        </div>
        <div class="order-nocontent nodata ng-isolate-scope ng-hide" ng-show="orderList &amp;&amp; !orderList.length" nodatatip="" content="暂无记录，现在就去&lt;a href='/place'&gt;订餐&lt;/a&gt;吧!">
            <p class="nodata-container ng-binding" ng-bind-html="content | toTrusted">暂无记录，现在就去<a href="/place">订餐</a>吧!</p>
        </div>
        <table class="order-list ng-scope" ng-show="orderList.length">
            <thead>
            <tr>
                <th>下单时间</th>
                <th class="order-list-infoth">订单内容</th>
                <th></th>
                <th>支付金额（元）</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <tr></tr>
            <!-- ngRepeat: item in orderList -->
            @foreach($order as $k =>$v)
            <tr class="timeline" order-timeline="" ng-repeat="item in orderList">
                <td class="ordertimeline-time"><p class="ordertimeline-title ng-binding" ng-bind="item.created_at | parseDate">{{date("m-d",$order[$k]['otime'])}}</p><p ng-bind="item.created_at | date:'HH:mm'" class="ng-binding">{{date("H:s",$order[$k]['otime'])}}</p>
                    <!-- ngIf: item.realStatus !== 5 -->
                    <!-- ngIf: item.realStatus === 5 --><i class="ordertimeline-time-icon icon-uniE65E finish ng-scope" ng-if="item.realStatus === 5"></i>
                    <!-- end ngIf: item.realStatus === 5 --></td>
                <td class="ordertimeline-avatar"><a ng-href="/shop/257561" href="/shop/257561"><img ng-src="//fuss10.elemecdn.com/7/d3/48a777a6b444dc317cc24d101220cjpeg.jpeg?imageMogr2/thumbnail/70x70/format/webp/quality/85" src="{{url('$order[$k]["avater"]')}}" /></a></td>
                <td class="ordertimeline-info"><h3 class="ordertimeline-title"><a ng-href="/shop/257561" ng-bind="item.restaurant.name" class="ng-binding" href="/shop/257561">{{$v['shop']['name']}}</a>
                        <!-- ngIf: item.is_book --></h3><p class="ordertimeline-info-food"><a ng-href="order/id/1214662295318612151" href="order/id/1214662295318612151"><span class="ordertimeline-food ng-binding" ng-bind="item.product"> @foreach($order[$k]['order_detail'] as $v)
                                    {{$v['fname']}}{{$v['bcnt']}}/份
                                @endforeach
                                </span>
                            <!-- ngIf: item.productnamenum > 2 --> <span class="ordertimeline-info-productnum ng-binding" ng-bind="item.productnum">{{$order[$k]['ocnt']}}</span> <span>个菜品</span></a></p><p>订单号: <a ng-href="order/id/1214662295318612151" ng-bind="item.unique_id" class="ng-binding" href="order/id/1214662295318612151">{{$v['oid']}}</a></p></td>
                <td class="ordertimeline-amount"><h3 class="ordertimeline-title ordertimeline-price ui-arial ng-binding" ng-bind="item.total_amount.toFixed(2)">&yen;{{$order[$k]['cprice']}}</h3><p ng-bind="item.is_online_paid ? '在线支付' : '货到付款'" class="ng-binding">在线支付</p></td>
                <td class="ordertimeline-status"><h3 ng-bind="item.statusText" ng-class="{'waitpay': (item.realStatus === 1), 'end': (item.realStatus === 5)}" class="ng-binding end">
                        @if($order[$k]['status'] == 0)
                            下单未支付
                        @elseif($order[$k]['status'] == 1)
                            下单已支付
                        @elseif($order[$k]['status'] == 2)
                            正在配送中
                        @elseif($order[$k]['status'] ==3)
                            成功订单
                        @elseif($order[$k]['status'] == 4)
                            催单
                        @elseif($order[$k]['status'] == 5)
                            订单超时
                        @endif

                    </h3><p class="ordertimeline-status-time ng-binding ordertimeline-status-warning" ng-class="{'ordertimeline-status-warning' : item.realStatus !== 1}" ng-bind="statusText"></p></td>
                <td class="ordertimeline-handle"><a class="ordertimeline-handle-detail" ng-href="order/id/1214662295318612151" href="{{url('home/person/orderinfo/')}}/{{$v['oid']}}">订单详情</a>
                    <!-- ngIf: item.realStatus === 1 -->
                    <!-- ngIf: item.realStatus === 2 -->
                    <!-- ngIf: item.realStatus === 3 -->
                    <!-- ngIf: item.realStatus === 4 -->
                    <!-- ngIf: item.realStatus === 5 --><a ng-if="item.realStatus === 5" class="ordertimeline-handle-a ng-scope" href="javascript:" ng-click="bundle.restore(item)">再来一份</a>
                    <!-- end ngIf: item.realStatus === 5 -->
                    <!-- ngIf: item.realStatus === 6 --></td>
            </tr>
            @endforeach

            </tbody>

        </table>
        <div style="text-align: center">{{ $order->links() }}</div>

        <div pagination="order" pagination-context="pageContext" pagination-onchange="onOrderPageChange()" class="ng-scope pagination">
            <ul></ul>
        </div>
    </div>
@endsection
