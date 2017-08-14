<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">

<title>觅宝</title>
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
    
    <!--轮播-->
    <div class="row wow animated fadeInDown">
    
    	<div id="myCarousel" class="carousel slide pad_010 b_k" data-ride="carousel">
			<div class="mibao_banner"></div>
        </div>

    </div>
    

    <!--觅宝-->
    <div class="row index_mibao" style="margin-top:2vh">
        @foreach($me_bao as $key => $value)
        @if($key == 0)
        <div class="col-xs-12 wow animated fadeInDown">
            @foreach($value as $k => $v)
            <a href="#" data-toggle="modal" data-target="#picmc{{$v->id}}">
                <div class="col-xs-6 index_mibao_dadiv">
                    <img src="{{$v->picture}}" class="img-responsive">
                    <div class="index_mibao_xihuan"><p><img src="{{URL::asset('/images_yd/particle-2.png')}}" class="img-responsive"><span id="ke{{$v->id}}">{{$v->like}}<span></p></div>
                </div>
            </a>
            @endforeach
        </div>
        @else
        <div class="col-xs-12 wow animated fadeInDown">
            @foreach($value as $k => $v)
            <a href="#" data-toggle="modal" data-target="#picmc{{$v->id}}">
                <div class="col-xs-6 index_mibao_dadiv">
                    <img src="{{$v->picture}}" class="img-responsive">
                    <div class="index_mibao_xihuan"><p><img src="{{URL::asset('/images_yd/particle-2.png')}}" class="img-responsive"><span id="ke{{$v->id}}">{{$v->like}}<span></p></div>
                </div>
            </a>
            @endforeach
        </div>
        @endif
        @endforeach
        @foreach($bao as $ke => $va)
        <div class="modal fade" id="picmc{{$va->id}}" style="background:rgba(49,218,153,.6)">
            <a href="javascript:;" class="index_mibao_tanchu_fanhu" data-dismiss="modal"><img src="{{URL::asset('/images_yd/close.png')}}" class="img-responsive"></a>
            <div class="container" style="position:relative; height:100vh" id="mibao_xinxi">
                <div class="modal-dialog mibao_mengceng">
                    <div class="row">
                        <div class="col-xs-12 index_mibao_xinxi_datu"><img src="{{$va->picture_big}}" class="img-responsive" style="width:100%"></div>
                        <div class="col-xs-12">
                            <div class="col-xs-12" style=" background:#fff; padding:0; padding-bottom:2vh">
                                <p class="index_mibao_mengceng_bt">
                                    <img src="{{URL::asset('/images_yd/particle-2.png')}}" class="img-responsive"><span id="clike{{$va->id}}">{{$va->like}}</span>
                                    <a class="index_mibao_dianzan_btn" onclick="dodianzan(this)" style="cursor:pointer"><input type="hidden" name="hidden" value="{{$va->id}}"/>给我点赞,么么哒<img src="{{URL::asset('/images_yd/particle-2.png')}}" class="img-responsive index_mibao_dianzan_xin{{$va->id}}"></a>
                                </p>
                                <div class="index_mibao_xinxi">
                                    <div class="col-xs-6"><label>姓名：</label>{{$va->name}}</div>
                                    <div class="col-xs-6"><label>性别：</label>{{$va->sex}}</div>
                                    <div class="col-xs-6"><label>年龄：</label>{{$va->age}}</div>
                                    <div class="col-xs-6"><label>地区：</label>{{$va->region}}</div>
<!--                                     <div class="col-xs-6">商品购买></div>
                                    <div class="col-xs-6">更多搭配></div>
                                    <div class="col-xs-6">淘宝市场>></div> -->
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        @endforeach        

    	<div class="col-xs-12 wow animated fadeInDown mibao_more">
			<a href="/index/me_bao/child"><img src="{{URL::asset('/images_yd/mibao_more.png')}}" class="img-responsive"></a>
        </div>
    </div>

    <!--觅宝视频-->
    <div class="row index_mixiu">
    
        @foreach($video as $ke => $va)
        <div class="modal fade" id="picz{{$va->id}}" style="background:rgba(54,188,167,.6)">
        	<a href="javascript:;" class="index_mibao_tanchu_fanhu" data-dismiss="modal"><img src="{{URL::asset('/images_yd/close.png')}}" class="img-responsive"></a>
            <div class="container" style="position:relative; height:100vh" id="mibao_xinxi">
                <div class="modal-dialog mibao_mengceng">
					<div class="row">

                        <video controls preload="none" style="width:100%">
                            <source src="{{$va->video_path}}" type="video/mp4">
                        </video>

                    </div>
				
                </div>
            </div>
        </div>
        @endforeach  

        @foreach($video as $key => $value)
        @if($key == 0)
		<div class="col-xs-12 wow animated fadeInDown">
            <div class="thumbnail">
                <a href="#" data-toggle="modal" data-target="#picz{{$value->id}}">
                    <div class="bofangceng">
                        <img src="{{$value->video_img}}" class="img-responsive">
                        <span><img src="{{URL::asset('/images_yd/mibao_bofang.png')}}" class="img-responsive"></span>
                    </div>
                </a>
                <p class="index_mixiu_spbt">{{$value->video_title}}</p>           
                <p class="index_mixiu_spnr">{{$value->video_content}}</p>           
            </div>
        </div>
        @else
		<div class="col-xs-6 wow animated fadeInDown">
        	<div class="thumbnail">
            	<a href="#" data-toggle="modal" data-target="#picz{{$value->id}}">
                    <div class="bofangceng">
                        <img src="{{$value->video_img}}" class="img-responsive">
                        <span><img src="{{URL::asset('/images_yd/mibao_bofang.png')}}" class="img-responsive"></span>
                    </div>
                </a>
 				<p class="index_mixiu_spbt">{{$value->video_title}}</p>           
 				<p class="index_mixiu_spnr">{{$value->video_content}}</p>           
            </div>
        </div>
        @endif
        @endforeach
		<div class="col-xs-12 wow animated fadeInDown more">
			<a href="/index/me_bao/video"><img src="{{URL::asset('/images_yd/mibao_more.png')}}" class="img-responsive"></a>
        </div>

    </div>




	<!--底部-->
	<div class="row wow animated fadeInDown index_dibu" style="background:#29c59e">
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
<script>
    function dodianzan(othis){
        var data = othis.firstChild.getAttribute('value');
        $(".index_mibao_dianzan_xin"+data).toggle();
        if(data != ''){
            $.ajax({
                url:"/me_bao/dodianzan",
                type:"post",
                data:{'cid':data},
                success:function(content){
                     if(content.msg == 'ok'){
                        var cl = 'clike'+data;
                        var like = $("#"+cl).html();
                        var like = parseInt(like) + 1;
                        var ke = 'ke'+data;
                        $("#"+cl).html(like);
                        $("#"+ke).html(like);
                     }else if(content.msg == 'no'){
                        alert('发生未知错误');
                     }
                },
                dataType:"json"
            })
        }
        othis.firstChild.setAttribute('value','');
    }
</script>
<style>
    .mibao_banner{width:100%; height:30vh; background:url({{$banner_bao['banner_path']}}) no-repeat center center; background-size:cover}
</style>  
</html>
