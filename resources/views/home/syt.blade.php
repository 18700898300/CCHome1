<!DOCTYPE html>
<html>
<head>
	<script src="{{asset('/a/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{asset('/layer/layer.js')}}"></script>
<meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>饿了么收银台</title><link href="{{asset('/syt/app.bf5cec.css')}}" rel="stylesheet"><script src="about:blank" type="text/javascript"></script><script src="about:blank" type="text/javascript"></script></head><body><header id="header"><i class="eleme-icon logo"><h1 class="title">收银台</h1></i></header><main id="main"><main data-reactid=".0"><section class="container order" data-reactid=".0.0"><h3 class="text-muted" data-reactid=".0.0.0">订单详情</h3><div class="order-detail clearfix" data-reactid=".0.0.1"><div class="pull-left" data-reactid=".0.0.1.0"><p class="text-muted" data-reactid=".0.0.1.0.0">{{$syt[0]}}</p><p class="hidden" data-reactid=".0.0.1.0.1"><span class="text-muted text-ellipsis order-desc" data-reactid=".0.0.1.0.1.0">{{$syt[1]}} 先生 {{$syt[3]}} {{$syt[4]}} {{$syt[8]}}
{{$syt[5]}}x{{$syt[6]}}</span><a class="text-primary show-detail text-link" data-reactid=".0.0.1.0.1.1"><span data-reactid=".0.0.1.0.1.1.0">查看详情</span><span class="triangle triangle-down" data-reactid=".0.0.1.0.1.1.1"></span></a></p><div class="order-detail text-muted" data-reactid=".0.0.1.0.2"><p data-reactid=".0.0.1.0.2.0">{{$syt[1]}} 
{{$syt[3]}}
{{$syt[4]}}
{{$syt[8]}}
{{$syt[5]}}x{{$syt[6]}}
</p><a class="text-link" data-reactid=".0.0.1.0.2.1"><span data-reactid=".0.0.1.0.2.1.0">收起详情</span><span class="triangle triangle-up" data-reactid=".0.0.1.0.2.1.1"></span></a></div></div><p class="pull-right" data-reactid=".0.0.1.1"><span data-reactid=".0.0.1.1.0"><span data-reactid=".0.0.1.1.0.0">支付金额：</span><strong class="text-lg text-highlight" data-reactid=".0.0.1.1.0.1"><span data-reactid=".0.0.1.1.0.1.0">¥</span><span data-reactid=".0.0.1.1.0.1.1">{{$syt[7]}}</span></strong></span></p></div></section><section class="container paymethods" data-reactid=".0.1"><header data-reactid=".0.1.0"><h3 data-reactid=".0.1.0.0">请选择支付方式</h3><p class="text-muted" data-reactid=".0.1.0.1"><span data-reactid=".0.1.0.1.0">剩余支付时间</span><span class="text-highlight" data-reactid=".0.1.0.1.1">
	<span class="time-item">
            <span><strong id="minute_show">03</strong>分</span>
            <span><strong id="second_show">00</strong>秒</span>
    </span>

    </span><span data-reactid=".0.1.0.1.2">，逾期订单将自动取消</span></p></header><section class="native-payment-list clearfix hidden" data-reactid=".0.1.1"><p class="title text-muted" data-reactid=".0.1.1.0"><span data-reactid=".0.1.1.0.0">饿了么钱包支付</span><span class="text-highlight text-money" data-reactid=".0.1.1.0.1"></span></p><div class="pull-left" data-reactid=".0.1.1.1"><p class="text-error" data-reactid=".0.1.1.1.1"></p></div><p class="pull-left show-third text-primary" data-reactid=".0.1.1.2"><span class="show-third-payment hidden" data-reactid=".0.1.1.2.0"><span data-reactid=".0.1.1.2.0.0">查看其他支付方式</span><span class="iconfont icon-arrow" data-reactid=".0.1.1.2.0.1"></span></span></p></section><section class="third-payment" data-reactid=".0.1.2"><div data-reactid=".0.1.2.0"><p class="title text-muted" data-reactid=".0.1.2.0.0"><span data-reactid=".0.1.2.0.0.0">第三方支付 </span><span class="text-highlight text-money" data-reactid=".0.1.2.0.0.1"> ￥{{$syt[7]}}</span></p><ul class="third-payment-list clearfix" data-reactid=".0.1.2.0.1"><li class="alipay active" data-reactid=".0.1.2.0.1.$0"><div class="payment-lsit-item-content" data-reactid=".0.1.2.0.1.$0.0"><h4 data-reactid=".0.1.2.0.1.$0.0.0">支付宝</h4><small class="text-muted" data-reactid=".0.1.2.0.1.$0.0.2"></small></div></li><li class="weixin" data-reactid=".0.1.2.0.1.$1"><div class="payment-lsit-item-content" data-reactid=".0.1.2.0.1.$1.0"><h4 data-reactid=".0.1.2.0.1.$1.0.0">微信支付</h4><small class="text-muted" data-reactid=".0.1.2.0.1.$1.0.2"></small></div></li></ul></div></section><footer class="paypassword" data-reactid=".0.1.3"><form class="hide" name="password" data-reactid=".0.1.3.1"><div class="title" data-reactid=".0.1.3.1.0"><p data-reactid=".0.1.3.1.0.0"><span data-reactid=".0.1.3.1.0.0.0">为保障您的钱包资金安全, 请输入</span><strong data-reactid=".0.1.3.1.0.0.1">支付密码</strong></p></div><section class="form-group" data-reactid=".0.1.3.1.1"><input placeholder="请输入6位支付密码" class="" value="" data-reactid=".0.1.3.1.1.0" type="password"><span class="text-muted hidden" data-reactid=".0.1.3.1.1.1">如您忘记密码, 请前往商家版手机端修改</span><a class="text-primary text-link" data-reactid=".0.1.3.1.1.2">忘记密码?</a></section><p class="hidden" data-reactid=".0.1.3.1.2"></p></form><section class="messagebox-backdrop" style="display: none;" data-reactid=".0.1.3.2"><div class="messagebox " data-reactid=".0.1.3.2.0"></div></section><section class="modal-backdrop" style="display: none;" data-reactid=".0.1.3.3"><div class="modal" data-reactid=".0.1.3.3.0"><section class="timeout clearfix" data-reactid=".0.1.3.3.0.0"><header class="clearfix" data-reactid=".0.1.3.3.0.0.0"><span class="icon-close pull-right text-muted" data-reactid=".0.1.3.3.0.0.0.0">x</span></header><i class="eleme-icon icon-error pull-left" data-reactid=".0.1.3.3.0.0.1"></i><div class="pull-left clearfix" data-reactid=".0.1.3.3.0.0.2"><strong data-reactid=".0.1.3.3.0.0.2.0"></strong><p class="text-muted" data-reactid=".0.1.3.3.0.0.2.1"></p><footer data-reactid=".0.1.3.3.0.0.2.2"><button class="btn btn-lg btn-primary" data-reactid=".0.1.3.3.0.0.2.2.0"></button><button style="display: none;" class="btn btn-default btn-lg" data-reactid=".0.1.3.3.0.0.2.2.1"></button></footer></div></section></div></section><button type="button" class="btn btn-success btn-lg" data-reactid=".0.1.3.4">确认支付</button></footer></section><section class="messagebox-backdrop" style="display: none;" data-reactid=".0.2"><div class="messagebox " data-reactid=".0.2.0"></div></section></main></main><script src="about:blank" type="text/javascript"></script><script src="about:blank" type="text/javascript"></script><script src="about:blank" type="text/javascript"></script></body>
    <!-- 接受订单id -->
   <div id ='oid' style='display: none;'>{{$syt[9]}}</div>


  <script type="text/javascript">
        	var intDiff = 0;
            intDiff = parseInt(0);//倒计时总秒数量
            var timer1 = "";
            var m = 0;
			var s = 0;
            function timer(intDiff) {
               timer1 =  window.setInterval(function() {
                    var day = 0,
                            hour = 0,
                            minute = 0,
                            second = 0;//时间默认值		
                    if (intDiff > 0) {
                        day = Math.floor(intDiff / (60 * 60 * 24));
                        hour = Math.floor(intDiff / (60 * 60)) - (day * 24);
                        minute = Math.floor(intDiff / 60) - (day * 24 * 60) - (hour * 60);
                        second = Math.floor(intDiff) - (day * 24 * 60 * 60) - (hour * 60 * 60) - (minute * 60);
                    }
                    if (minute <= 9)
                        minute = '0' + minute;
                    if (second <= 9)
                        second = '0' + second;
                    $('#minute_show').html(minute);
                    $('#second_show').html(second);
                    intDiff--;


					
					if(minute==00 && second==00){
						$.get('/home/order/ddsx',{oid:oid},function(data){

								if(data == 1){
										 layer.open({
										        type: 1
										        ,title: false //不显示标题栏
										        ,closeBtn: false
										        ,area: '300px;'
										        ,shade: 0.8
										        ,id: 'LAY_layuipro' //设定一个id，防止重复弹出
										        ,btn: ['火速围观', '残忍拒绝']
										        ,btnAlign: 'c'
										        ,moveType: 1 //拖拽模式，0或者1
										        ,content: '<div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;">亲支付已超时,快去订单付款吧!</div>'
										        ,success: function(layero){
										          var btn = layero.find('.layui-layer-btn');
										          btn.find('.layui-layer-btn0').attr({
										            href: '{{url("/home/person/3order")}}'
										            ,target: '_blank'
										          });
										        }
										      });
									}	 		
							});
					}








                }, 1000);
            } 

 			$(function() {
                timer(179);
            });

 		var oid = $('#oid').text();
            $('.btn').on('click',function(){
//                alert(111);
                    layer.open({
                    type: 1,
                    skin: '', //加上边框
                    area: ['600px', '460px'], //宽高
                    content: '<div id ="ids"><span id="spans">使用支付宝支付<span id ="sprice">￥{{$syt[7]}}</span></span><div><img src="{{asset('/syt/zfb.png')}}"></div><div><div class="wx-qrcode-footer" data-reactid=".0.1.3.2.0.0.3"><i class="eleme-icon icon-scan" data-reactid=".0.1.3.2.0.0.3.0"></i><div data-reactid=".0.1.3.2.0.0.3.1"><p data-reactid=".0.1.3.2.0.0.3.1.0"><span data-reactid=".0.1.3.2.0.0.3.1.0.0">请使用</span><span data-reactid=".0.1.3.2.0.0.3.1.0.1">支付宝</span><span data-reactid=".0.1.3.2.0.0.3.1.0.2">扫一扫</span></p><p data-reactid=".0.1.3.2.0.0.3.1.1">扫描二维码完成支付</p></div></div></div></div>'
                 });

			    //获取订单id
			


                    $.get('/home/order/js',{oid:oid},function(data){
                            if(data == 0){
                              window.clearInterval(timer1);
                            }
                    });
		    });
	
	</script>
<style>
	#ids{
		width:580px;
		/*border:1px solid red;*/
		margin:20px auto;
		text-align: center;
		padding: 10px;
        font-family:Arial,Helvetica,sans-serif;font-size:100%;
      
	}
	#spans{
		padding: 20px;
		font-size: 1.5em;
		margin-top: 30px;
    	margin-bottom: 30px;
	}
	#sprice{
		color:#F66C1C;
	}

	.wx-qrcode-footer{
		    margin-top: 20px;
		    background-color: rgb(25, 133, 241);
		    color: rgb(255, 255, 255);
		    padding-top: 20px;
		    padding-bottom: 20px;
		    width: 300px;
		    margin-left: auto;
		    margin-right: auto;
	}
	.eleme-icon.icon-scan:before {
    vertical-align: middle;
    content: "";
    font-size: 30px;
	}

	.time-item strong {
                color:#F66C1C;
                
                font-size:16px;
                font-family:Arial;
                padding:0 1px; 
            }
          
            .item-title .unit {
                background:none;
                line-height:49px;
                font-size:24px;
                padding:0 10px;
                float:left;
            }
</style>


      

	

</html>
