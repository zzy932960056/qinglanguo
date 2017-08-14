<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">

<title>注册成功</title>
<link href="{{URL::asset('/css_yd/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css_yd/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css_yd/index.css')}}" rel="stylesheet" type="text/css">



</head>

<body>


                
<div class="container-fluid">
	<div class="row wow animated fadeInDown"><img src="{{URL::asset('/images_yd/index_tiao.png')}}" class="img-responsive" style="width:100%"></div>
	<div class="row wow animated fadeInDown" style="margin-top:10vh"><div class="col-xs-6 col-xs-offset-3"><a href="/"><img src="{{URL::asset('/images_yd/logo.png')}}" class="img-responsive" style=" width:100%"></a></div></div>
    
    <div class="row wow animated fadeInDown" style="height:70vh; position:relative">
		<div class="zhucechonggong">
            <img src="{{URL::asset('/images_yd/zhucechenggong.png')}}" class="img-responsive">
            <p> 感谢注册觅样，<br>让我们一起开启全新的旅程吧~~</p>
            <p><a href="/index/login">返回登录</a></p>
        </div>
    
    </div>




	<!--底部-->
	<div class="row wow animated fadeInDown index_dibu">
    	© 2006-2017 北京华艺卓尔文化传媒有限公司
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
