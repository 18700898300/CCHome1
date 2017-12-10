@extends('/layouts/order')
@section('body')
    <div class="ng-scope" ng-view="" role="main">
        <div checkout-guide="" guide="guide" class="checkoutguide ng-isolate-scope">
            <div class="container"><a class="checkoutguide-logo icon-logo" href="https://www.ele.me/"></a> <span
                        class="checkoutguide-text ng-binding" ng-bind="guide.text">购物车</span><!-- ngIf: guide.step -->
                <div class="checkoutguide-content step2" ng-if="">

                   </div>
                <!-- end ngIf: guide.step --></div>
        </div>
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
            <td><button  id = "{{$v->rowId}}" type="button" class="btn btn-danger btn-sm remove">移除</button></td>
        </tr>
        @endforeach
        <tr>
            <td>总购买数量</td>
            <td id = 'count' >{{$count}}</td>
            <td></td>
            <td>总购物价</td>
            <td id = 'total' >{{ $total}}</td>
            <td colspan="2"><button type="button" class="btn btn-danger btn-sm removes">清空购物车</button></td>
        </tr>
        <tr>
            <td colspan="2" ><a href="{{url('home/shop')}}/{{$shop['sid']}}"><button type="button" class="btn btn-danger btn-sm ">继续购物</button></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2"><a href="{{url('/home/order/index')}}"><button type="button" class="btn btn-danger btn-sm jsy">去结算</button></a></td>
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
        //删除某个菜品
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
            //清空所有菜品
         $('.removes').on('click',function(){
             var a = $(this);
             $.get("{{url('/home/cart/removes')}}",function(data){
                 a.parent().parent().next().siblings().remove();
                 //设置总钱数和总数量
                 $('#count').text(data['count']);
                 $('#total').text(data['total']);
             });
         });

    </script>
</div>
@stop