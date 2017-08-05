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
                
<div class="container-fluid">
	<div class="row wow animated fadeInDown"><img src="{{URL::asset('/images_yd/mishang_tiao.png')}}" class="img-responsive" style="width:100%"></div>
	<div class="row wow animated fadeInDown"><a href="/"><img src="{{URL::asset('/images_yd/logo.png')}}" class="img-responsive" style="margin:40px auto"></a></div>
    

    <!--觅尚-->

    <div class="row index_mishang">
        @foreach($me_shang as $value)
    	<a href="/index/me_shang/details/{{$value->id}}">
    		<div class="col-xs-12 wow animated fadeInDown">
            	<div class="thumbnail col-xs-12 index_mishang_dadiv">
    				<div class="col-xs-6"><img src="{{$value->magazine_path}}" class="img-responsive"></div>
    				<div class="col-xs-6">
                        <span class="index_mishang_mengceng"></span>
                        <img src="{{$value->magazine_path}}" class="img-responsive">
                        <div class="index_mishang_zazhijianjie">
                        	<img src="{{URL::asset('/images_yd/logohei.png')}}" class="img-responsive">
                            <p>{{$value->magazine_theme}}</p>
                            <p style="text-align:left">{{$value->magazine_index}}</p>
                            <p style="margin-top:2vh">{{$value->date}}</p>
                            <p>{{$value->volume}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
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
