<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">

<title>觅样</title>
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
		<div class="col-xs-6 miyng_zuo">
        	<img src="{{$pinpai[0]->pic_path}}" class="img-responsive">
            <div><p>{{$pinpai[0]->introduce}}</p></div>
        </div>
		<div class="col-xs-6 miyng_you">
            <img src="{{$meiti[0]->pic_path}}" class="img-responsive">
            <div><p style="background:#f44321">{{$meiti[0]->introduce}}</p></div>
        </div>
		<div class="col-xs-6 miyng_zuo">
        	<img src="{{$huoban[0]->pic_path}}" class="img-responsive">
            <div><p style="background:#fdb800">{{$huoban[0]->introduce}}</p></div>
        </div>
		<div class="col-xs-6 miyng_you">
            <img src="{{$pinpai[1]->pic_path}}" class="img-responsive">
            <div><p>{{$pinpai[1]->introduce}}</p></div>
        </div>
		<div class="col-xs-12 wow animated fadeInDown more">
			<a href="/index/me_join"><img src="{{URL::asset('/images_yd/miyang_more.png')}}" class="img-responsive"></a>
        </div>
        
        <div class="col-xs-12 miyang_lxtb">
        	<a href="/index/me_join/weixin"><span><img src="{{URL::asset('/images_yd/miyang_weixin.png')}}" class="img-responsive"></span></a>
        	<a href="/index/me_join/weibo"><span><img src="{{URL::asset('/images_yd/miyang_weibo.png')}}" class="img-responsive"></span></a>
        	<a href="/index/me_join/taobao"><span><img src="{{URL::asset('/images_yd/miyang_taobao.png')}}" class="img-responsive"></span></a>
        	<a href="/index/me_join/qq"><span style=" margin-right:0"><img src="{{URL::asset('/images_yd/miyang_qq.png')}}" class="img-responsive"></span></a>
        </div>
		<div class="col-xs-12 miyang_dizhi">
        	<address>
                {{$me_last['company']}}<br>
                
                {{$me_last['email']}}<br>
                
                {{$me_last['tel']}}<br>
                
                {{$me_last['address']}}<br>
            </address>       
        </div>
		<div class="col-xs-12 miyang_ditu">
			<img src="{{$me_last['map_image']}}" class="img-responsive">
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
<style>
    .miyang_banner{width:100%; height:30vh; background:url({{$banner_young['banner_path']}}) no-repeat center center; background-size:cover}
</style>   
</html>
