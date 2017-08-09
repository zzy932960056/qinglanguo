<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">

<title>觅闻</title>
<link href="{{URL::asset('/css_yd/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css_yd/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css_yd/index.css')}}" rel="stylesheet" type="text/css">



</head>

<body>


    <!--侧滑导航-->
    
    @include('yd_daohang');
                
                
<div class="container-fluid">

	<div class="row wow animated fadeInDown"><img src="{{URL::asset('/images_yd/miwen_tiao.png')}}" class="img-responsive" style="width:100%"></div>
	<div class="row wow animated fadeInDown"><a href="/"><img src="{{URL::asset('/images_yd/logo.png')}}" class="img-responsive" style="margin:40px auto"></a></div>
    
    <!--轮播-->
    <div class="row wow animated fadeInDown">
		<div class="miwen_banner"></div>
    </div>
    
    
    <!--觅闻-->
    <style>
        .miwen_sanji p{margin-bottom: 3vh;letter-spacing: 0.3em !important; line-height: 2em;font-size: 34px !important;}
        .miwen_sanji img{display: inline-block; width: 100%;}
    </style>
    <div class="row miwen_sanji" >
        <div class="col-xs-12 miwen_sanji_bt_img wow animated fadeInDown">
            <img src="{{$me_news['head_pic']}}" class="img-responsive thumbnail">
        </div>
        <div class="col-xs-12 miwen_sanji_bt_img wow animated fadeInDown">
			<div class="col-xs-3"><img src="{{URL::asset('/images_yd/miwen_sanji_wenzi1.png')}}" class="img-responsive"></div>
        </div>
        <div class="col-xs-12 miwen_sanji_bt wow animated fadeInDown">
            <p style="padding:0 3vw;">{{$me_news['title']}}</p>
        </div>
        
        <div class="col-xs-12 miwen_sanji_bt_img wow animated fadeInDown">
			<div class="col-xs-3"><img src="{{URL::asset('/images_yd/miwen_sanji_wenzi2.png')}}" class="img-responsive"></div>
        </div>
        <div class="col-xs-12 miwen_sanji_bt wow animated fadeInDown">
            <p style="padding:0 3vw;">{{$me_news['description']}}</p>
        </div>
        <div class="col-xs-12 miwen_sanji_bt wow animated fadeInDown" style="padding:0 30px;">
                @foreach($me_news_details as $value)
                @if($value->pic_path)
                <p style="margin:2vh 0; text-align: center;"><img src="{{$value->pic_path}}" class="img-responsive thumbnail"></p>
                <p style="padding:0 3vw;">{{$value->content}}</p>
                @else
                <p style="padding:0 3vw;">{{$value->content}}</p>
                @endif
                @endforeach
        </div>

        
        
    </div>
    


	<!--底部-->
	<div class="row wow animated fadeInDown index_dibu">
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
    .miwen_banner{width:100%; height:30vh; background:url({{$banner_wen['banner_path']}}) no-repeat center center; background-size:cover}
</style>    
</html>
