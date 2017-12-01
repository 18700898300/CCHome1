<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>购物车的实现</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/a/js/bootstrap.min.css')}}">
    <script src="{{asset('/a/js/index.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src="{{asset('/a/js/angular.min.js')}}" type="text/javascript" charset="utf-8"></script>

</head>
<body ng-app>



<div ng-controller="cartController" class="container">
    <table class="table" ng-show="cart.length">
        <thead>
        <tr>
            <th>菜品名称</th>
            <th>菜品图片</th>
            <th>购买数量</th>
            <th>菜品单价</th>
            <th>菜品总价</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        {{--{{dd($cart)}}--}}
        @foreach($cart as $v)
            <tr>

        {{--<a ng-repeat="item in cart| filter:abc">--}}
            <td>{{$v->name}}</td>
            <td>{{$v->name}}</td>
            <td>
                <button type="button"  ng-click="reduce({{$v->rowId}}})" class="btn btn-primary btn-sm jian">-</button>
                <input type="text" ng-model="{{$v->qty}}" style="text-align: center"; value="{{$v->qty}}">
                <button type="button" ng-click="add({{$v->rowId}})" class="btn btn-primary btn-sm jia">+</button>
            </td>
            <td ng-bind="item.price">{{$v->price}}</td>
            <td ng-bind="item.price*item.quantity">{{$v->qty * $v->price}}</td>
            <td><a href = "/shop/remoecart/{{$v->rowId}}"><button type="button" ng-click="remove(item.id)" class="btn btn-danger btn-sm">移除</button></a></td>
        </tr>
        @endforeach
        <tr>
            <td>总购买数量</td>
            <td ng-bind="totalQuantity()">{{$count}}</td>
            <td></td>
            <td>总购物价</td>
            <td ng-bind="totalPrice()">{{ $total}}</td>

            <td colspan="2"><button type="button"  ng-click="cart = {}" class="btn btn-danger btn-sm">清空购物车</button></td>
            <td colspan="2"><button type="button"  ng-click="cart = {}" class="btn btn-danger btn-sm">去结算</button></td>
        </tr>
        </tbody>
    </table>
    <script>

    </script>
</div>
</body>
</html>