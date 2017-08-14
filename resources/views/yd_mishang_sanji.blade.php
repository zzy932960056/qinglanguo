<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">

<title>觅尚</title>
<link href="{{URL::asset('/css_yd/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css_yd/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css_yd/index.css')}}" rel="stylesheet" type="text/css">



</head>

<body>


    <!--侧滑导航-->
    
    @include('yd_daohang');


<div class="container-fluid" style="margin-top:-20px;">

	<div class="row wow animated fadeInDown"><img src="{{URL::asset('/images_yd/mishang_tiao.png')}}" class="img-responsive" style="width:100%"></div>
	<div class="row wow animated fadeInDown"><a href="/"><img src="{{URL::asset('/images_yd/logo.png')}}" class="img-responsive" style="margin:40px auto"></a></div>
    
    <!--轮播-->
    <div class="row wow animated fadeInDown">
    
    	<div id="myCarousel_mishang" class="carousel slide pad_010 b_k" data-ride="carousel">
             <!-- 轮播（Carousel）项目 -->
             <div class="carousel-inner bor_btm" style=" position:relative">
             	  <div class="mishang_mengceng"></div>
                  @foreach($me_shang_pic as $key => $value)
                  @if($key == 0)
                  <div class="item active">
				  		        <div class="mishang_zazhilb{{$value->id}}"></div>
                  </div>
                  @else
                  <div class="item">
				  		        <div class="mishang_zazhilb{{$value->id}}"></div>
                  </div>
                  @endif
                  @endforeach
             </div>
        </div>

    </div>
    
    
    


	<!--底部-->
	<div class="row wow animated fadeInDown index_dibu" style="margin-top:0; background:#fdb800">
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
    $('#myCarousel_mishang').bind('swiperight swiperightup swiperightdown',function(){
        $("#myCarousel_mishang").carousel('prev');
    })
    //手势左滑 进入下一个画面
    $('#myCarousel_mishang').bind('swipeleft swipeleftup swipeleftdown',function(){
        $("#myCarousel_mishang").carousel('next');
    })
})
</script>


<script src="{{URL::asset('/js_yd/wow.min.js')}}"></script>
<script src="{{URL::asset('/js_yd/index_js.js')}}"></script>
<style>
@foreach($me_shang_pic as $value)
.mishang_zazhilb{{$value->id}}{ background:url({{$value->magazine_pic}}) center center no-repeat; background-size:cover; width:100%; height:82.5vh}
@endforeach
</style>    
</html>
