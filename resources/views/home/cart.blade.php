<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>购物车的实现</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/a/js/bootstrap.min.css')}}">
    <script src="{{asset('/a/js/index.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src=""http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"" type="text/javascript" charset="utf-8"></script>
    <script src="{{asset('/a/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{asset('/layer/layer.js')}}"></script>
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
            <td>{{$v->name}}</td>
            <td><img src="{{asset('/a/img/517c48e40061040af3a2b6a96bf94jpeg.jpeg')}}" width="50" alt=""></td>
            <td>
                <button type="button"  ng-click="reduce()"price = {{$v->price}} id = {{$v->rowId}} qty= {{$v->qty}} class="btn btn-primary btn-sm jian">-</button>
                <input type="text" ng-model="{{$v->qty}}" class = 'input' style="text-align: center"; value="{{$v->qty}}">
                <button type="button" ng-click="reduce()" price = {{$v->price}} id = {{$v->rowId}} qty= {{$v->qty}}  class="btn btn-primary btn-sm jia">+</button>
            </td>
            <td ng-bind="item.price">{{$v->price}}</td>
            <td ng-bind="item.price">{{$v->qty * $v->price}}</td>
            {{--<td ng-bind="item.price*item.quantity">{{$v->qty * $v->price}}</td>--}}
            <td><button  id = {{$v->rowId}} type="button" class="btn btn-danger btn-sm remove">移除</button></td>
        </tr>
        @endforeach
        <tr>
            <td>总购买数量</td>
            <td id = 'count' ng-bind="totalQuantity()">{{$count}}</td>
            <td></td>
            <td>总购物价</td>
            <td id = 'total' ng-bind="totalPrice()">{{ $total}}</td>

            <td colspan="2"><button type="button"  ng-click="cart = {}" class="btn btn-danger btn-sm">清空购物车</button></td>
            <td colspan="2"><button type="button"  ng-click="cart = {}" class="btn btn-danger btn-sm">去结算</button></td>
        </tr>
        </tbody>
    </table>
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

        $('.remove').on('click',function(){

            var id = $(this).attr('id');
            var a = $(this);
            $.get("{{url('/home/cart/remove')}}",{id:id},function(data){
                a.parent().parent().remove();
                //设置总钱数和总数量
                $('#count').text(data['count']);
                $('#total').text(data['total']);
            });
        });
    </script>
</div>
</body>
</html>