<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">

<title>觅秀</title>
<link href="{{URL::asset('/css_yd/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css_yd/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css_yd/index.css')}}" rel="stylesheet" type="text/css">

</head>

<body>


    <!--侧滑导航-->		


    @include('yd_daohang');



<div class="container-fluid">
	<div class="row wow animated fadeInDown"><img src="{{URL::asset('/images_yd/mixiu_tiao.png')}}" class="img-responsive" style="width:100%"></div>
	<div class="row wow animated fadeInDown"><a href="/"><img src="{{URL::asset('/images_yd/logo.png')}}" class="img-responsive" style="margin:40px auto"></a></div>
    
    
    <!--觅秀-->
    <div class="row index_mixiu">
    
        @foreach($video_third as $value)
        <div class="modal fade" id="picc{{$value->id}}" style="background:rgba(17,99,150,.6);">
        	<a href="javascript:;" class="index_mibao_tanchu_fanhu" data-dismiss="modal"><img src="{{URL::asset('/images_yd/close.png')}}" class="img-responsive"></a>
            <div class="container" style="position:relative; height:100vh" id="mibao_xinxi">
                <div class="modal-dialog mibao_mengceng">
					<div class="row">

                        <video controls preload="none" style="width:100%">
                            <source src="{{$value->video_path}}" type="video/mp4">
                        </video>

                    </div>
				
                </div>
            </div>
        </div>
        @endforeach         
    
        @foreach($video_third as $value)
		<div class="col-xs-6 wow animated fadeInDown">
        	<div class="thumbnail">
            	<a href="#" data-toggle="modal" data-target="#picc{{$value->id}}">
                    <div class="bofangceng">
                        <img src="{{$value->video_pic_path}}" class="img-responsive">
                        <span><img src="{{URL::asset('/images_yd/mixiu_bofang.png')}}" class="img-responsive"></span>
                    </div>
                </a>
 				<p class="index_mixiu_spbt">{{$value->video_title}}</p>           
 				<p class="index_mixiu_spnr">{{$value->video_describe}}</p>           
            </div>
        </div>
        @endforeach

    </div>



	<!--底部-->
	<div class="row wow animated fadeInDown index_dibu" style="background:#116396">
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
