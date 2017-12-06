@extends('/layouts/order')
@section('body')
    <style>
        .jia{
            position: relative;
            top:12px;
        }
        .jian{
            position: relative;
            top:12px;
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
                <div class="checkoutcart-title"><h2>订单详情</h2><a href="{{url('shop')}}"
                                                                ng-href="/shop/1195138">&lt; 返回商家修改</a></div>
                <div class="checkoutcart-tablerow tablehead">
                    <div class="cell itemname">商品</div>
                    <div class="cell itemquantity">份数</div>
                    <div class="cell itemtotal">小计（元）</div>
                </div><!-- ngRepeat: basket in cart.vm.group --><!-- ngIf: basket.length -->
                <dl ng-if="basket.length" ng-repeat="basket in cart.vm.group" class="checkoutcart-group ng-scope">
                    <dt ng-bind="$index + 1 + '号购物车'" class="checkoutcart-grouptitle ng-binding">1号购物车</dt>
                    <!-- ngRepeat: item in basket -->

                    @foreach($cart as $v)
                    <dd class="ng-scope" ng-repeat="item in basket">
                        <div class="checkoutcart-tablerow">
                            <div class="cell itemname ng-binding" ng-bind="item.name" title="{{$v->name}}">{{$v->name}}</div>
                            <div class="cell itemquantity">
                                <button class = "jian" price = {{$v->price}} id = {{$v->rowId}} qty= {{$v->qty}}>-</button>
                                <input
                                       value="{{$v->qty}}" >
                                <button class = "jia" price = {{$v->price}} id = {{$v->rowId}} qty= {{$v->qty}} >+</button>
                            </div>
                            <div class="cell itemtotal ng-binding"
                                 ng-bind="'¥' + (item.price * item.quantity | number:2)">¥{{$v->qty * $v->price}}
                            </div>
                        </div>
                    </dd>
                    @endforeach

                    <hr>
                <ul class="ng-scope" ng-if="cart.vm.extra || cart.vm.records"><!-- ngRepeat: item in cart.vm.extra -->
                    <li ng-repeat="item in cart.vm.extra" class="checkoutcart-tablerow extra ng-scope">
                        <div class="cell itemname"><span class="ng-binding" ng-bind="item.name" title="餐盒">餐盒</span>
                            <!-- ngIf: item.name === '配送费' --></div>
                        <div class="cell itemquantity"></div>
                        <div class="cell itemtotal ng-binding" ng-class="{minus: item.price < 0}"
                             ng-bind="'¥' + (item.price | number:2)">¥1.50
                        </div>
                    </li><!-- end ngRepeat: item in cart.vm.extra -->
                    <li ng-repeat="item in cart.vm.extra" class="checkoutcart-tablerow extra ng-scope">
                        <div class="cell itemname"><span class="ng-binding" ng-bind="item.name" title="配送费">配送费</span>
                            <!-- ngIf: item.name === '配送费' --><span ng-if="item.name === '配送费'"
                                                                    class="icon-circle-help ng-scope" tooltip=""
                                                                    tooltip-placement="left"></span>
                            <!-- end ngIf: item.name === '配送费' --></div>
                        <div class="cell itemquantity"></div>
                        <div class="cell itemtotal ng-binding" ng-class="{minus: item.price < 0}"
                             ng-bind="'¥' + (item.price | number:2)">¥5.00
                        </div>
                    </li><!-- end ngRepeat: item in cart.vm.extra --><!-- ngRepeat: item in cart.vm.records --></ul>
                <!-- end ngIf: cart.vm.extra || cart.vm.records -->
                <div class="checkoutcart-total color-stress">¥<span class="num ng-binding"
                                                                    ng-bind="cart.vm.total | number: 2" id="total">{{$total}}</span>
                </div>
                <div class="checkoutcart-totalextra">共 <span class="ng-binding" ng-bind="cart.pieces" id = 'count'>{{$count}}</span> 份商品
                    <!-- ngIf: cart.vm.benefit --></div>
            </div>
        </div><!-- end ngIf: !loading && !nofood --><!-- ngIf: !loading && !nofood -->
        <div ng-if="!loading &amp;&amp; !nofood" class="checkout-content ng-scope">
            <div class="checkout-select ng-isolate-scope" checkout-address="" checkout-data="checkoutData"
                 address-list="addressList" address="address" isbaisheng="isBaishengRst"><h2>收货地址 <a href="#"
                            ng-show="addressList.length" class="checkout-addaddress" ng-click="addAddress()" id = "addsite">添加新地址</a>
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
                                zxw 先生 18700898300</p>
                            <p class="color-weak ng-binding" ng-bind="item.address + item.address_detail">
                                回龙观小区10号楼5单元2013</p></div>
                        <div class="checkout-address-edit"><a ng-click="editAddress($event, item)">修改</a> <a
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
                <div class="checkout-info"><span class="checkout-infolabel">订单备注</span> <span><input
                                class="checkout-input ng-pristine ng-valid" ng-model="note"
                                ng-change="updateDescription(note)"></span></div>
            </div>
            <div>
                <button quicksubmit-trigger="" submit-visable="checkout.submitVisable"
                        class="btn-stress btn-lg ng-binding ng-isolate-scope" ng-disabled="orderButton.disabled"
                        ng-bind="orderButton.text" ng-click="orderSubmit()">确认下单
                </button>
                <div class="checkout-dapp"><p class="checkout-dapp-tip">扫码下载APP<br>APP下单立享优惠</p><i
                            class="icon-qrcode checkout-dapp-qrcode"></i> <i
                            class="icon-uniE029 checkout-dapp-arrow"></i> <img src="{{asset('appqc.95e532.png')}}"
                                                                               alt="扫一扫下载饿了么手机 App"></div>
            </div>
        </div><!-- end ngIf: !loading && !nofood --></div>
    <div class="checkout-quicksubmit ng-scope ng-hide" ng-hide="checkout.submitVisable || nofood">
        <div class="container"><span class="quick-text">应付金额 <span class="yen">¥</span><span class="total ng-binding"
                                                                                             ng-bind="cartView.vm.total">{{$total}}</span></span>
            <button class="btn-stress btn-lg ng-binding" ng-disabled="orderButton.disabled" ng-bind="orderButton.text"
                    ng-click="orderSubmit()">确认下单
            </button>
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
                a.parent().siblings('td').eq(3).text(data['qty'] * price);
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
                a.parent().siblings('td').eq(3).text(data['qty'] * price);
                //设置总钱数和总数量
                $('#count').text(data['count']);
                $('#total').text(data['total']);
            });
        });
        $('#addsite').on('click',function () {
            layer.open({
                type: 2,
                area: ['800px', '600px'],
                fixed: false, //不固定
                maxmin: true,
                content: '/home/order/addsite',
            });
        })

    </script>
@stop