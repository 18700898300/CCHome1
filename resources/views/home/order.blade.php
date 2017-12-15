@extends('/layouts/order')

@section('body')
    <link href="{{asset('/a/css/vendor.162d72.css')}}" rel="stylesheet">
    <link href="{{asset('/a/css/main.378acb.css')}}" rel="stylesheet">
    <link href="{{asset('/addr/addr.css')}}" rel="stylesheet">
    <script src="{{asset('/a/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{asset('/layer/layer.js')}}"></script>
    <style>
        h1{
            margin:0 auto;
        }
        .jia{
            width:30px;
            height:30px;
            position: relative;
            border:1px solid #000;
            font-size:20px;
            /*top:12px;*/
        }
        .jian{
            width:30px;
            height:30px;
            position: relative;
            font-size:20px;
            border:1px solid #000;
            /*top:12px;*/
        }
    </style>




    <div class="ng-scope" ng-view="" role="main">
        <div checkout-guide="" guide="guide" class="checkoutguide ng-isolate-scope">
            <div class="container"><a class="checkoutguide-logo icon-logo" href="https://www.ele.me/"></a> <span
                        class="checkoutguide-text ng-binding" ng-bind="guide.text">订单信息</span><!-- ngIf: guide.step -->
                <div class="checkoutguide-content step2" ng-if="guide.step"><span class="checkoutguide-item active"
                                                                                  ng-class="{active: guide.step >= 1}">选择商品</span>
                    <span class="checkoutguide-item active" ng-class="{active: guide.step >= 2}">确认订单信息</span> <span
                            class="checkoutguide-item" ng-class="{active: guide.step >= 3}">成功提交订单</span>
                    <p class="checkoutguide-line"><span class="line line1"></span> <span class="line line2"></span> <span
                                class="line line3"></span> <span class="line line4"></span></p></div>
                <!-- end ngIf: guide.step --></div>
        </div>
    <div class="container clearfix ng-scope"><!-- ngIf: loading --><!-- ngIf: !loading && nofood -->
        <!-- ngIf: !loading && !nofood -->
        <div ng-if="!loading &amp;&amp; !nofood" class="checkout-cart ng-scope ng-isolate-scope" checkout-cart="cart">
            <div class="checkoutcart-container">
                <div class="checkoutcart-title"><h2>订单详情</h2><a href="{{url('home/shop')}}/{{$shop['sid']}}" ng-href="/shop/1195138">&lt; 返回商家修改</a></div>
                <div class="checkoutcart-tablerow tablehead">
                    <div class="cell itemname">商品</div>
                    <div class="cell itemquantity">份数</div>
                    <div class="cell itemquantity">单价</div>
                    <div class="cell itemtotal">小计</div>
                    <div class="cell itemtotal">操作</div>
                </div><!-- ngRepeat: basket in cart.vm.group --><!-- ngIf: basket.length -->
                <dl ng-if="basket.length" ng-repeat="basket in cart.vm.group" class="checkoutcart-group ng-scope">
                    <dt ng-bind="$index + 1 + '号购物车'" class="checkoutcart-grouptitle ng-binding">1号购物车</dt>
                    <!-- ngRepeat: item in basket -->

                    @foreach($cart as $v)
                    <dd class="ng-scope" ng-repeat="item in basket">
                        <div class="checkoutcart-tablerow">
                            <div class="cell itemname ng-binding" ng-bind="item.name" title="{{$v->name}}" >{{$v->name}}</div>
                            <div class="cell itemquantity">
                                <a href="javascript:;" class = "jian" price = "{{$v->price}}" id = "{{$v->rowId}}" qty= "{{$v->qty}}">-</a>
                                <input value="{{$v->qty}}" >
                                <a href="javascript:;" class = "jia" price = "{{$v->price}}" id = "{{$v->rowId}}" qty= "{{$v->qty}}" >+</a>
                            </div>
                            <div class="cell itemtotal ng-binding"
                                 ng-bind="'¥' + (item.price * item.quantity | number:2)">¥{{$v->price}}
                            </div>
                            <div class="cell itemtotal ng-binding"
                                 ng-bind="'¥' + (item.price * item.quantity | number:2)">¥{{$v->qty * $v->price}}
                            </div>
                            <a href="javascript:;"   class="cell itemtotal ng-binding remove" id = "{{$v->rowId}}"
                                 ng-bind="'¥' + (item.price * item.quantity | number:2)">删除
                            </a>
                        </div>
                    </dd>
                    @endforeach

                    <hr>
                <ul class="ng-scope" ng-if="cart.vm.extra || cart.vm.records"><!-- ngRepeat: item in cart.vm.extra -->

                    <li ng-repeat="item in cart.vm.extra" class="checkoutcart-tablerow extra ng-scope">
                        <div class="cell itemname"><span class="ng-binding" ng-bind="item.name" title="配送费">配送费</span>
                            <!-- ngIf: item.name === '配送费' --><span ng-if="item.name === '配送费'"
                                                                    class="icon-circle-help ng-scope" tooltip=""
                                                                    tooltip-placement="left"></span>
                            <!-- end ngIf: item.name === '配送费' --></div>
                        <div class="cell itemquantity"></div>
                        <div class="cell itemtotal ng-binding" ng-class="{minus: item.price < 0}"
                             ng-bind="'¥' + (item.price | number:2)">¥ {{$shop->sprice}}
                        </div>
                    </li><!-- end ngRepeat: item in cart.vm.extra --><!-- ngRepeat: item in cart.vm.records --></ul>
                <!-- end ngIf: cart.vm.extra || cart.vm.records -->
                <div class="checkoutcart-total color-stress">¥<span class="num ng-binding" ng-bind="cart.vm.total | number: 2" id="total">

                        {{$total}}

                    </span>
                </div>
                <div class="checkoutcart-totalextra">共 <span class="ng-binding" ng-bind="cart.pieces" id = 'count'>{{$count}}</span> 份商品
                    <!-- ngIf: cart.vm.benefit --></div>
            </div>
        </div><!-- end ngIf: !loading && !nofood --><!-- ngIf: !loading && !nofood -->
        <div ng-if="!loading &amp;&amp; !nofood" class="checkout-content ng-scope">
            <div class="checkout-select ng-isolate-scope" checkout-address="" checkout-data="checkoutData"
                 address-list="addressList" address="address" isbaisheng="isBaishengRst"><h2>收货地址 <a href="#"
                            ng-show="addressList.length" class="checkout-addaddress" ng-click="addAddress()" id = "addsite">添加新地址</a>

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @if(is_object($errors))
                                    @foreach ($errors->all() as $error)
                                        <li style="color:red">{{ $error }}</li>
                                    @endforeach
                                @else
                                    <li style="color:red">{{ $errors }}</li>
                                @endif
                            </ul>
                        </div>
                    @endif


                </h2><!-- ngIf: !addressList.length -->
                <ul ng-hide="!addressList.length" class="checkout-address-list"
                    ng-class="{ showmore: showMoreAddress, showfirst: noInitAddress }">
                    <!-- ngRepeat: item in addressList -->
                    <li class="checkout-address ng-scope active" ng-repeat="item in addressList"
                        ng-click="selectAddress($event, item)" ng-class="{active: address.id === item.id}"
                        ng-mouseenter="selectAddress($event, item)"><i
                                class="checkout-address-icon icon-location-line"></i>
                        <div class="checkout-address-info"><p class="ng-binding"
                                                              ng-bind="item.name + [' ', ' 先生 ', ' 女士 '][item.sex] + item.phone">
                                {{$addr[0]->name}}
                                @if($addr[0]->sex = 1)
                                    先生
                                @else
                                    女士
                                @endif
                                {{$addr[0]->phone}}</p>
                            <p class="color-weak ng-binding" ng-bind="item.address + item.address_detail">
                                {{$addr[0]->addr}} </p></div>
                        <div class="checkout-address-edit"><a ng-click="editAddress($event, item)" id = 'edit'>修改</a> <a
                                    ng-click="removeAddress($event, item)">×</a></div><!-- ngIf: !item.st_geohash -->
                        <!-- ngIf: !item.is_deliverable -->
                        <!-- ngIf: item.st_geohash && item.poi_type === 1 && isbaisheng --></li>
                    <!-- end ngRepeat: item in addressList -->
                    <li class="checkout-address ng-scope" ng-repeat="item in addressList"
                        ng-click="selectAddress($event, item)" ng-class="{active: address.id === item.id}"
                        ng-mouseenter="selectAddress($event, item)"><i
                                class="checkout-address-icon icon-location-line"></i>
                        <div class="checkout-address-info"><p class="ng-binding"
                                                              ng-bind="item.name + [' ', ' 先生 ', ' 女士 '][item.sex] + item.phone">
                                张晓文 先生 18700898300</p>
                            <p class="color-weak ng-binding" ng-bind="item.address + item.address_detail">
                                兄弟连IT教育兄弟连IT教育(北京华文学院西北) 教学楼2楼2A10</p></div>
                        <div class="checkout-address-edit"><a ng-click="editAddress($event, item)">修改</a> <a
                                    ng-click="removeAddress($event, item)">×</a></div><!-- ngIf: !item.st_geohash -->
                        <!-- ngIf: !item.is_deliverable --><p ng-if="!item.is_deliverable"
                                                              ng-show="!item.is_deliverable"
                                                              class="checkout-address-needupgrade ng-scope">地址超出配送范围</p>
                        <!-- end ngIf: !item.is_deliverable -->
                        <!-- ngIf: item.st_geohash && item.poi_type === 1 && isbaisheng --></li>
                    <!-- end ngRepeat: item in addressList -->
                    <li class="checkout-address ng-scope" ng-repeat="item in addressList"
                        ng-click="selectAddress($event, item)" ng-class="{active: address.id === item.id}"
                        ng-mouseenter="selectAddress($event, item)"><i
                                class="checkout-address-icon icon-location-line"></i>
                        <div class="checkout-address-info"><p class="ng-binding"
                                                              ng-bind="item.name + [' ', ' 先生 ', ' 女士 '][item.sex] + item.phone">
                                张晓文 先生 18700898300</p>
                            <p class="color-weak ng-binding" ng-bind="item.address + item.address_detail">万达广场8号楼
                                8号楼502</p></div>
                        <div class="checkout-address-edit"><a ng-click="editAddress($event, item)">修改</a> <a
                                    ng-click="removeAddress($event, item)">×</a></div><!-- ngIf: !item.st_geohash -->
                        <!-- ngIf: !item.is_deliverable --><p ng-if="!item.is_deliverable"
                                                              ng-show="!item.is_deliverable"
                                                              class="checkout-address-needupgrade ng-scope">地址超出配送范围</p>
                        <!-- end ngIf: !item.is_deliverable -->
                        <!-- ngIf: item.st_geohash && item.poi_type === 1 && isbaisheng --></li>
                    <!-- end ngRepeat: item in addressList --><a class="checout-showmoreaddress"
                                                                 ng-click="showMoreAddress = true"
                                                                 ng-show="!showMoreAddress &amp;&amp; addressList.length > 1">显示更多地址<i
                                class="icon-arrow-down"></i></a> <a class="checout-showmoreaddress ng-hide"
                                                                    ng-click="showMoreAddress = false"
                                                                    ng-show="showMoreAddress &amp;&amp; addressList.length > 1">收起<i
                                class="icon-arrow-up"></i></a></ul>
            </div>
            <div class="checkout-select"><h2 class="checkout-title">付款方式<span class="color-tip checkout-pay-tip">推荐使用在线支付，不用找零，优惠更多</span>
                </h2>
                <ul class="clearfix"><!-- ngRepeat: pay in payList -->
                    <li class="checkout-pay ng-scope active" ng-repeat="pay in payList"
                        ng-click="selectPay(pay.id, pay.disabled)"
                        ng-class="{active: payId === pay.id, disabled: pay.disabled}" tooltip=""><p class="ng-binding"
                                                                                                    ng-bind="pay.title">
                            在线支付</p>
                        <p class="color-mute ng-binding" ng-bind="pay.tip">支持微信、支付宝、QQ钱包及大部分银行卡</p></li>
                    <!-- end ngRepeat: pay in payList -->
                    <li class="checkout-pay ng-scope disabled" ng-repeat="pay in payList"
                        ng-click="selectPay(pay.id, pay.disabled)"
                        ng-class="{active: payId === pay.id, disabled: pay.disabled}" tooltip="该商家仅支持在线支付"><p
                                class="ng-binding" ng-bind="pay.title">货到付款</p>
                        <p class="color-mute ng-binding" ng-bind="pay.tip">送货上门后再付款</p></li>
                    <!-- end ngRepeat: pay in payList --></ul>
            </div>
            <div class="checkout-select"><h2 class="checkout-title">选择优惠</h2>
                <p class="checkout-info"><span class="checkout-infolabel">使用红包</span> <span class="color-mute">无可用红包
                        <!-- ngIf: checkout.hongbaoCount --></span></p>
                <p class="checkout-info"><span class="checkout-infolabel">使用优惠券</span> <span class="color-mute">网站不支持<em
                                class="color-stress">（仅手机客户端可用）</em></span></p></div>
            <div class="checkout-select"><h2 class="checkout-title">其他信息</h2>
                <div class="checkout-info"><span class="checkout-infolabel">配送方式</span> <span>本订单由<a class="ng-binding"
                                                                                                     ng-bind="' [' + delivery + '] '"> [蜂鸟专送] </a>提供配送</span>
                </div>
                <div class="checkout-info" ng-show="showDeliverTime"><span class="checkout-infolabel">送达时间</span>
                    <div formselect="" data="bookTimes" choosed="time" selectfn="updateDeliverTime"
                         class="formselect ng-isolate-scope"><span class="formselect-value ng-binding">立即送达</span>
                        <div class="formselect-data ui-scrollbar-light"><!-- ngRepeat: item in data --><span
                                    class="ng-binding ng-scope active" ng-repeat="item in data"
                                    ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">立即送达<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">12:45 - 13:00<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">13:00 - 13:15<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">13:15 - 13:30<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">13:30 - 13:45<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">13:45 - 14:00<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">14:00 - 14:15<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">14:15 - 14:30<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">14:30 - 14:45<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">14:45 - 15:00<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">15:00 - 15:15<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">15:15 - 15:30<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">15:30 - 15:45<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">15:45 - 16:00<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">16:00 - 16:15<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">16:15 - 16:30<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">16:30 - 16:45<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">16:45 - 17:00<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">17:00 - 17:15<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">17:15 - 17:30<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">17:30 - 17:45<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">17:45 - 18:00<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">18:00 - 18:15<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">18:15 - 18:30<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">18:30 - 18:45<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">18:45 - 19:00<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">19:00 - 19:15<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">19:15 - 19:30<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">19:30 - 19:45<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">19:45 - 20:00<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">20:00 - 20:15<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">20:15 - 20:30<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">20:30 - 20:45<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">20:45 - 21:00<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">21:00 - 21:15<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">21:15 - 21:30<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">21:30 - 21:45<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --><span
                                    class="ng-binding ng-scope" ng-repeat="item in data" ng-click="select($event, item)"
                                    ng-class="{active: (selected === item &amp;&amp; !item.disabled), disabled: item.disabled}">21:45 - 22:00<i
                                        class="icon-check"></i></span><!-- end ngRepeat: item in data --></div>
                        <i class="icon-arrow-down"></i></div>
                </div>
                <div class="checkout-info"><span class="checkout-infolabel">发票信息</span> <span class="checkout-invoice"
                                                                                              ng-mouseenter="toggleInvoice($event)"
                                                                                              ng-mouseleave="toggleInvoice($event)"><input
                                disabled="disabled" class="checkout-input ng-pristine ng-valid"
                                placeholder="仅在饿了么 APP 中支持开发票哦" ng-disabled="!checkoutData.invoice.is_available"
                                ng-model="invoiceRef.invoiceValue" ng-change="updateInvoice(invoiceRef.invoiceValue)"><ul
                                class="checkout-invoice-list ng-hide" ng-show="showInvoice"><!-- ngRepeat: item in invoices --></ul></span>
                </div>
                <form action="/home/order/insert" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="cart" value="{{$cart}}">
                    <input type="hidden" name="count" value="{{$count}}">
                    <input type="hidden" name="shop" value="{{$shop}}">
                    <input type="hidden" name="addr" value="{{$addr}}">
                    <input type="hidden" name="total" value="{{$total}}">

                <div class="checkout-info"><span class="checkout-infolabel">订单备注</span> <span><input class="checkout-input ng-pristine ng-valid" ng-model="note" ng-change="updateDescription(note)" name ="umsg"></span>
                </div>


            <div>

                <button quicksubmit-trigger="" submit-visable="checkout.submitVisable"
                        class="btn-stress btn-lg ng-binding ng-isolate-scope" ng-disabled="orderButton.disabled"
                        ng-bind="orderButton.text" ng-click="orderSubmit()">确认下单1
                </button>
                <div class="checkout-dapp"><p class="checkout-dapp-tip">扫码下载APP<br>APP下单立享优惠</p><i
                            class="icon-qrcode checkout-dapp-qrcode"></i> <i
                            class="icon-uniE029 checkout-dapp-arrow"></i> <img src="{{asset('/a/img/appqc.95e532.png')}}"
                                                                               alt="扫一扫下载曹操到家 App"></div>
            </div>
                </form>
            </div>
        </div><!-- end ngIf: !loading && !nofood --></div>
    <div class="checkout-quicksubmit ng-scope ng-hide" ng-hide="checkout.submitVisable || nofood">
        <div class="container"><span class="quick-text">应付金额 <span class="yen">¥</span><span class="total ng-binding"
                                                                                            ng-bind="cartView.vm.total">{{$total}}</span></span>




                <button class="btn-stress btn-lg ng-binding" ng-disabled="orderButton.disabled" ng-bind="orderButton.text"
                    ng-click="orderSubmit()">确认下单
            </button>
            </form>
        </div>
    </div>

    </div>
    <script>
        //点击减的单击事件
        $('.jian').on('click',function(){
            var id = $(this).attr('id');
            var qty= $(this).attr('qty');
            var price =$(this).attr('price');
            var a = $(this);

            $.get("{{url('/home/cart/jian')}}",{id:id,qty:qty},function(data){
                //设置input的数量
                a.next().val(data['qty']);
                //设置数量
                a.attr('qty',data['qty']);

                //设置修改后的总价
                a.parent().siblings('div').eq(2).text(data['qty'] * price);
                //设置总钱数和总数量
                $('#count').text(data['count']);
                $('#total').text(data['total']);
            });
        });
        //对商品数量进行递加
        $('.jia').on('click',function(){
            var id = $(this).attr('id');
            var qty= $(this).attr('qty');
            var price =$(this).attr('price');
            var a = $(this);
            $.get("{{url('/home/cart/jia')}}",{id:id,qty:qty},function(data){
                //设置input的数量
                a .prev().val(data['qty']);
                //设置数量
                a.attr('qty',data['qty']);
                //设置修改后的总价

                a.parent().siblings('div').eq(2).text(data['qty'] * price);
                //设置总钱数和总数量
                $('#count').text(data['count']);
                $('#total').text(data['total']);
            });
        });
        //弹出添加地址页面
        $('#addsite').on('click',function () {
             layer.open({
                type: 1,
                skin: 'layui-layer-rim', //加上边框
                area: ['800px', '600px'], //宽高
                content: '<h2>  　<h2><h1 style="margin:10px">添加新地址<h1><h3>  　<h3><form action="/home/order/insertsite" method="post" ><input type="hidden" name="uid" value = "1">{{csrf_field()}}<div class="addressform"><div><div class="addressformfield"><label>姓名</label><input placeholder="请输入您的姓名" name ="name" /> <div class="addressformfield-hint"><span></span></div></div><div class="addressformfield sexfield"><label>性别</label><div><input value="1" name="sex" id="sexfield-1-male" type="radio" /><label for="sexfield-1-male">先生</label><input value="2" name="sex" id="sexfield-1-female" type="radio"/><label for="sexfield-1-female">女士</label></div><div class="addressformfield-hint"><span></span></div></div> <div class="addressformfield addressfield"><label>位置</label> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAgCAYAAAAIXrg4AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NEY1MDlBODBGODkyMTFFNEIzMTNFRUIwMEQ2M0U5MzMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NEY1MDlBODFGODkyMTFFNEIzMTNFRUIwMEQ2M0U5MzMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo0RjUwOUE3RUY4OTIxMUU0QjMxM0VFQjAwRDYzRTkzMyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo0RjUwOUE3RkY4OTIxMUU0QjMxM0VFQjAwRDYzRTkzMyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PiMwn/YAAAMuSURBVHjanJZ9aM1RGMd/9+easItZXuY1YkUtpFCkVuKPyfKauzZKFCtmrIg/5G1NWltJVqaQl7iul6jRTfxhm5fyXgvDsibk5U5uUXOv77O+vzpOv3Pv796nPvf87vmd8zzn95znPOfxRSIRK4mMAqvAfDAD5IE4+AzegjvgAmg3KfAZDEwC+6i8j5VcxGAY7ADv9Ze2y4R14BkIgr8gBEpoNBv0AxPYJ4p7wErwApTqyvza/13gIJ+vgG2gw2URHeQ8DdeA5eA0GAFq3b6ghMrlkyvBMoNyXcT/K0AV/x/m1/9nQDazgc9bQb2VvtTSAz5wFIxVDewFAbrliDYxC2wC90AU/AQtYDPfqVJDHTn8kt4oGo62kwMmgw/KhNHgBphuWLUEQxHoUvpk5a8YDPk2d15WcllT3hdco/J2RoqsbDB9/hpMA01U5ogs9iK9E5SfBXwR1la3AcwE78AscElxkYydDdpAAdiozb3OttCmEpGH2iAnpneCHy7uiXJTLZf4f8y2QPYgobikRxkUAwPolqhhDwaCX+A36K9mCIZ7r59i7BxkUJLIIGSz2Xbb3CyRiS4RYil75CaFbF9q/VPYvhEDt/hniTbonBLbOS7Kh4BDfD6rvXN0NdsMKZH12sE5Dp4w1zxg6giQYh62qYykBi2BOpsesqnkLnN9UBn4BywGT3kAwwxR4SrdIG5cxE12RJLeeM5rdlJFnZJN1Qz7kfFeAe4zIGJ8ruD56NSiZzefq9ULR160Ulk5OGZlJmvBSfCcN2DcVkKxku1+kJuB8oCzat4jcf0+aGXk5CrRkY7UM+1LTrttujLF8ldemwvTUF7EOd1gS7I7+QtdJXtywqOrhoJGPldpqdv10j/DS2MMOEVjxqqEykfy3mj0UlU4h66Ln749iQH52qXgE+dYXg18B2UsW6QQmOMyZh7TiETeGhZjng1YrNr2MH1I9TZMeZfHPknxB4CxPLRTbGA1r8RxvNGySIghGWHBYBR/CgMJ5qdHrE/ruKi5vKed6i9jAxZju5gHsVzpk5T8LdVk2+NBalNWK6xmX0rxp3Fam1hsSYly0+ukfwIMANgIvXWVNn37AAAAAElFTkSuQmCC" /><input placeholder="请输入小区、大厦或学校" name = "addr"  /> <div class="address-suggestlist"><ul></ul></div><div class="addressformfield-hint"><span></span></div><div style="display: none;" class="addressform-tip"> <p><span>没找到你的地址？</span><a style="display: none;">去地图看看吧！</a></p><p>请尝试只输入小区、大厦或学校看看。</p><div class="arrow"></div></div></div><div class="addressformfield"><label>所属商圈</label><select name="areaid"><option value="0">请选择</option>@foreach($area as $v)<option value="{{$v->id}}">{{$v->name}}</option> @endforeach</select><div class="addressformfield-hint"><span></span></div></div><div class="addressformfield phonefield"><label>手机号</label><input placeholder="请输入您的手机号" name = "phone" /></div><div style="display: none;" class="addressformfield phonebkfield"><label></label><input placeholder="固话、手机短号" /><button>删除</button><div class="addressformfield-hint"><span></span> </div> </div> </div><div class="addressform-buttons"><button id = "saveBtn">保存</button></div></div></form>'
            });
        })

        //xiugai
        $('#edit').on('click',function () {
            layer.open({
                type: 1,
                skin: 'layui-layer-rim', //加上边框
                area: ['800px', '600px'], //宽高
                content: '<h2>  　<h2><h1 style="margin:10px">修改地址<h1><h3>  　<h3><form action="/home/order/updatesite" method="post" ><input type="hidden" name="uid" value = "1">{{csrf_field()}}<div class="addressform"><div><div class="addressformfield"><label>姓名</label><input placeholder="请输入您的姓名" name ="name" value="{{$addr[0]['name']}}"/> <div class="addressformfield-hint"><span></span></div></div><div class="addressformfield sexfield"><label>性别</label><div>  <input value="1" name="sex" id="sexfield-1-male" type="radio" checked = "checked" /><label for="sexfield-1-male">先生</label><input value="2" name="sex" id="sexfield-1-female" type="radio" /><label for="sexfield-1-female">女士</label> </div><div class="addressformfield-hint"><span></span></div></div> <div class="addressformfield addressfield"><label>位置</label> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAgCAYAAAAIXrg4AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NEY1MDlBODBGODkyMTFFNEIzMTNFRUIwMEQ2M0U5MzMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NEY1MDlBODFGODkyMTFFNEIzMTNFRUIwMEQ2M0U5MzMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo0RjUwOUE3RUY4OTIxMUU0QjMxM0VFQjAwRDYzRTkzMyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo0RjUwOUE3RkY4OTIxMUU0QjMxM0VFQjAwRDYzRTkzMyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PiMwn/YAAAMuSURBVHjanJZ9aM1RGMd/9+easItZXuY1YkUtpFCkVuKPyfKauzZKFCtmrIg/5G1NWltJVqaQl7iul6jRTfxhm5fyXgvDsibk5U5uUXOv77O+vzpOv3Pv796nPvf87vmd8zzn95znPOfxRSIRK4mMAqvAfDAD5IE4+AzegjvgAmg3KfAZDEwC+6i8j5VcxGAY7ADv9Ze2y4R14BkIgr8gBEpoNBv0AxPYJ4p7wErwApTqyvza/13gIJ+vgG2gw2URHeQ8DdeA5eA0GAFq3b6ghMrlkyvBMoNyXcT/K0AV/x/m1/9nQDazgc9bQb2VvtTSAz5wFIxVDewFAbrliDYxC2wC90AU/AQtYDPfqVJDHTn8kt4oGo62kwMmgw/KhNHgBphuWLUEQxHoUvpk5a8YDPk2d15WcllT3hdco/J2RoqsbDB9/hpMA01U5ogs9iK9E5SfBXwR1la3AcwE78AscElxkYydDdpAAdiozb3OttCmEpGH2iAnpneCHy7uiXJTLZf4f8y2QPYgobikRxkUAwPolqhhDwaCX+A36K9mCIZ7r59i7BxkUJLIIGSz2Xbb3CyRiS4RYil75CaFbF9q/VPYvhEDt/hniTbonBLbOS7Kh4BDfD6rvXN0NdsMKZH12sE5Dp4w1zxg6giQYh62qYykBi2BOpsesqnkLnN9UBn4BywGT3kAwwxR4SrdIG5cxE12RJLeeM5rdlJFnZJN1Qz7kfFeAe4zIGJ8ruD56NSiZzefq9ULR160Ulk5OGZlJmvBSfCcN2DcVkKxku1+kJuB8oCzat4jcf0+aGXk5CrRkY7UM+1LTrttujLF8ldemwvTUF7EOd1gS7I7+QtdJXtywqOrhoJGPldpqdv10j/DS2MMOEVjxqqEykfy3mj0UlU4h66Ln749iQH52qXgE+dYXg18B2UsW6QQmOMyZh7TiETeGhZjng1YrNr2MH1I9TZMeZfHPknxB4CxPLRTbGA1r8RxvNGySIghGWHBYBR/CgMJ5qdHrE/ruKi5vKed6i9jAxZju5gHsVzpk5T8LdVk2+NBalNWK6xmX0rxp3Fam1hsSYly0+ukfwIMANgIvXWVNn37AAAAAElFTkSuQmCC" /><input placeholder="请输入小区、大厦或学校" name = "addr" value="{{$addr[0]['addr']}}"   /> <div class="address-suggestlist"><ul></ul></div><div class="addressformfield-hint"><span></span></div><div style="display: none;" class="addressform-tip"> <p><span>没找到你的地址？</span><a style="display: none;">去地图看看吧！</a></p><p>请尝试只输入小区、大厦或学校看看。</p><div class="arrow"></div></div></div><div class="addressformfield"><label>所属商圈</label><select name="areaid"><option value="0">请选择</option>@foreach($area as $v)<option value="{{$v->id}}">{{$v->name}}</option> @endforeach</select><div class="addressformfield-hint"><span></span></div></div><div class="addressformfield phonefield"><label>手机号</label><input placeholder="请输入您的手机号" name = "phone" value="{{$addr[0]['phone']}}" /></div><div style="display: none;" class="addressformfield phonebkfield"><label></label><input placeholder="固话、手机短号" /><button>删除</button><div class="addressformfield-hint"><span></span> </div> </div> </div><div class="addressform-buttons"><button id = "saveBtn">保存</button></div></div></form>'
            });



        })

        $('.remove').on('click',function(){
//            alert(111);
                var id = $(this).attr('id');
               console.log(id);
            var a = $(this);
            $.get("{{url('/home/cart/remove')}}",{id:id},function(data){
            a.parent().parent().remove();
            //设置总钱数和总数量
            $('#count').text(data['count']);
            $('#total').text(data['total']);
            });
        });


    </script>
@stop