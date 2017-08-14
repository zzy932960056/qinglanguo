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
                
                
<div class="container-fluid" style="margin-top:-20px;">
	<div class="row wow animated fadeInDown"><img src="{{URL::asset('/images_yd/miwen_tiao.png')}}" class="img-responsive" style="width:100%"></div>
	<div class="row wow animated fadeInDown"><a href="/"><img src="{{URL::asset('/images_yd/logo.png')}}" class="img-responsive" style="margin:40px auto"></a></div>
    
    <!--轮播-->
    <div class="row wow animated fadeInDown">
		<div class="miwen_banner"></div>
    </div>
    
    
    <!--觅闻-->
    <div class="row index_miwen">
        <div class="col-xs-12 miwen_fenlei">
            <span class="animated fadeInRight huaguobianda" data-wow-duration="1s" data-wow-delay=".4s" id="mibao_diqu" style="background:#f44321">HOT<img src="{{URL::asset('/images_yd/huangguan.gif')}}" class="miwen_huangguan"></span>
            <span class="animated fadeInRight" data-wow-duration="1s" data-wow-delay=".6s" id="mibao_nianling" style="background:#f77e73">娱乐</span>
            <span class="animated fadeInRight" data-wow-duration="1s" data-wow-delay=".8s" id="mibao_nan" style="background:#f7b0ac">穿搭</span>
        </div>
        <div class="col-xs-12" style="padding:0" id="miwen_mianban1">
            @foreach($me_news_hot as $value)
            <a href="/index/me_wen/details/{{$value->id}}">
            	<div class="col-xs-12">
                	<div class="col-xs-3 wow animated fadeInDown"><img src="{{$value->little_pic}}" class="img-responsive"></div>
                	<div class="col-xs-9 wow animated fadeInDown">
                        <h2>{{$value->title}}</h2>
                        {{$value->description}}
                    </div>
                    <p class="index_xinwen_xiahuaxian wow animated fadeInDown"></p>
                </div>
            </a>
            @endforeach
        </div>
        <div class="col-xs-12" style="padding:0; display:none" id="miwen_mianban2">
            @foreach($me_news_yule as $value)            
            <a href="/index/me_wen/details/{{$value->id}}">
            	<div class="col-xs-12">
                	<div class="col-xs-3 wow animated fadeInDown"><img src="{{$value->little_pic}}" class="img-responsive"></div>
                	<div class="col-xs-9 wow animated fadeInDown">
                        <h2>{{$value->title}}</h2>
                        {{$value->description}}
                    </div>
                    <p class="index_xinwen_xiahuaxian wow animated fadeInDown"></p>
                </div>
            </a>
            @endforeach
        </div>
        <div class="col-xs-12" style="padding:0; display:none" id="miwen_mianban3">
            @foreach($me_news_chuanda as $value)  
            <a href="/index/me_wen/details/{{$value->id}}">
            	<div class="col-xs-12">
                	<div class="col-xs-3 wow animated fadeInDown"><img src="{{$value->little_pic}}" class="img-responsive"></div>
                	<div class="col-xs-9 wow animated fadeInDown">
                        <h2>{{$value->title}}</h2>
                        {{$value->description}}
                    </div>
                    <p class="index_xinwen_xiahuaxian wow animated fadeInDown"></p>
                </div>
            </a>
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
