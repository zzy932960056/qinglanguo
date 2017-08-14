<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">

<title>觅样合作</title>
<link href="{{URL::asset('/css_yd/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css_yd/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css_yd/index.css')}}" rel="stylesheet" type="text/css">



</head>

<body>


    <!--侧滑导航-->
    
    @include('yd_daohang');


<div class="container-fluid" style="margin-top:-20px;">
	<div class="row wow animated fadeInDown"><img src="{{URL::asset('/images_yd/mibao_tiao.png')}}" class="img-responsive" style="width:100%"></div>
	<div class="row wow animated fadeInDown"><a href="/"><img src="{{URL::asset('/images_yd/logo.png')}}" class="img-responsive" style="margin:40px auto"></a></div>
    
    <!--觅样banner-->
    <div class="row wow animated fadeInDown">
		<div class="miyang_banner"></div>
    </div>
    
    
    <!--觅样-->
    <div class="row miyang wow animated fadeInDown">
        <div class="col-xs-12 miwen_fenlei" style="margin-bottom:2vh">
            <span class="animated fadeInRight huaguobianda" data-wow-duration="1s" data-wow-delay=".4s" id="mibao_diqu" style="background:#36bca7">品牌</span>
            <span class="animated fadeInRight" data-wow-duration="1s" data-wow-delay=".6s" id="mibao_nianling" style="background:#f44321">媒体</span>
            <span class="animated fadeInRight" data-wow-duration="1s" data-wow-delay=".8s" id="mibao_nan" style="background:#fdb800">伙伴</span>
        </div>
        <div class="col-xs-12" style="padding:0;" id="miwen_mianban1">
            @foreach($pinpai as $k => $v)
            @if(is_int($k/2))
            <div class="col-xs-6 miyng_zuo">
                <img src="{{$v->pic_path}}" class="img-responsive">
                <div><p>{{$v->introduce}}</p></div>
            </div>
            @else
            <div class="col-xs-6 miyng_you">
                <img src="{{$v->pic_path}}" class="img-responsive">
                <div><p>{{$v->introduce}}</p></div>
            </div>
            @endif
            @endforeach
        </div>
        <div class="col-xs-12" style="padding:0; display:none" id="miwen_mianban2">
            @foreach($meiti as $k => $v)
            @if(is_int($k/2))
            <div class="col-xs-6 miyng_zuo">
                <img src="{{$v->pic_path}}" class="img-responsive">
                <div><p style="background:#f44321">{{$v->introduce}}</p></div>
            </div>
            @else
            <div class="col-xs-6 miyng_you">
                <img src="{{$v->pic_path}}" class="img-responsive">
                <div><p style="background:#f44321">{{$v->introduce}}</p></div>
            </div>
            @endif
            @endforeach
        </div>
        <div class="col-xs-12" style="padding:0; display:none" id="miwen_mianban3">
            @foreach($huoban as $k => $v)
            @if(is_int($k/2))
            <div class="col-xs-6 miyng_zuo">
                <img src="{{$v->pic_path}}" class="img-responsive">
                <div><p style="background:#fdb802">{{$v->introduce}}</p></div>
            </div>
            @else
            <div class="col-xs-6 miyng_you">
                <img src="{{$v->pic_path}}" class="img-responsive">
                <div><p style="background:#fdb802">{{$v->introduce}}</p></div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    


	<!--底部-->
	<div class="row wow animated fadeInDown index_dibu" style="background:#fdb800">
    	© 2006-2016 北京华艺卓尔文化传媒有限公司
        <a href="javascript:;" id="toTop" title="回到顶部"></a><img src="{{URL::asset('/images_yd/top.png')}}" class="img-responsive" id="top_huojian">
    </div>
	
    
</div>       



</body>
<script src="{{URL::asset('/js_yd/jquery-2.1.1.min.js')}}"></script>
<script src="{{URL::asset('/js_yd/bootstrap.min.js')}}"></script>

<script src="{{URL::asset('/js_yd/xin/jgestures.min.js')}}"></script>


<script>
$(document).ready(function(){
    //手势右滑 回到上一个画面
    $('#myCarousel').bind('swiperight swiperightup swiperightdown',function(){
        $("#myCarousel").carousel('prev');
    })
    //手势左滑 进入下一个画面
    $('#myCarousel').bind('swipeleft swipeleftup swipeleftdown',function(){
        $("#myCarousel").carousel('next');
    })
})
</script>


<script src="{{URL::asset('/js_yd/wow.min.js')}}"></script>
<script src="{{URL::asset('/js_yd/index_js.js')}}"></script>
    
</html>
