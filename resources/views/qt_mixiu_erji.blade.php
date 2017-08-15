<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>觅秀</title>
<link rel="shortcut icon" href="{{URL::asset('/images/favicon.ico')}}">
<link rel="Bookmark" href="{{URL::asset('/images/favicon.ico')}}">
<link href="{{URL::asset('/css2/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css2/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css2/index.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{URL::asset('/css2/style1.css')}}">
<script src="{{URL::asset('/js2/jquery-2.1.1.min.js')}}"></script>
<script src="{{URL::asset('/js2/index_js.js')}}"></script>
<script src="{{URL::asset('/js2/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('/js2/wow.min.js')}}"></script>
<link rel="stylesheet" href="{{URL::asset('/css2/plyr.css')}}">
<script src="{{URL::asset('/js2/plyr.js')}}"></script>
</head>
<body>
<!--上下三角-->
<div class="container-fluid mibao_shang navbar-fixed-top">
        <div class="col-md-6 col-sm-6 col-xs-6 fadeInLeft animated" style="position:relative">
            <img src="{{URL::asset('/images/mixiu_shangsnajiao.png')}}" class="img-responsive" style="width:100%">
            <a class="fanhuishouye" href="/"></a>
        </div>
    	<div class="col-md-6 col-sm-6 col-xs-6">
            <a href="/index/show" class="mibao_fanhui animated fadeInDown" style="background:#116396"><b class="mibao_fanhui_b animated">返回<br>Back</b></a>
        </div>
</div>
<div class="container-fluid navbar-fixed-bottom fadeInRight animated" style="padding:0">
    	<div class="col-md-6 col-sm-6 col-xs-6 col-xs-offset-6" style="padding:0; position:relative">
            <img src="{{URL::asset('/images/mixiu_xiasnajiao.png')}}" class="img-responsive" style="width:100%">
            <a href="javascript:;" id="toTop" title="回到顶部"></a><img src="{{URL::asset('/images/top.png')}}" class="img-responsive" id="top_huojian">
        </div>
</div>

<!--banner-->
<div class="container-fluid animated" style="padding:0; margin-top:28vh">
	<img src="{{$banner_xiu['banner_path']}}" class="img-responsive" style="width:100%">
</div>

<!--觅秀轮播-->
<div class="container-fluid" style="margin-top:15vh; margin-bottom:10vh">
	<div class="container">
        
        <div class="row mixiu_lunbo">
			<div class="col-md-6 col-sm-6 col-xs-6" style="padding-right:4vw">
            	<img src="{{$me_xiu_left['xiu_image_left']}}" class="img-responsive" style="width:100%">
            </div>
			<div class="col-md-6 col-sm-6 col-xs-6 mixiu_lunbo_md6">
            
            
                <div class="carousel slide" id="mixiu_pic" data-ride="carousel" >
                <a href="#mixiu_pic" class="right carousel-control mixiu_lunbo_you" data-slide="next">
                    <img src="{{URL::asset('/images/mixiu_lunbo_you.png')}}" class="img-responsive">
                </a>
                <ol class="carousel-indicators" id="mixiu_pic_dian">
                    <li class="active" data-target="#mixiu_pic" data-slide-to="0"><img src="{{URL::asset('/images/mixiu_lunbo_shandian.png')}}" class="img-responsive mixiu_lunbo_shandian"></li>
                    <li data-target="#mixiu_pic" data-slide-to="1" style="opacity:0.8"><img src="{{URL::asset('/images/mixiu_lunbo_shandian.png')}}" class="img-responsive mixiu_lunbo_shandian"></li>
                    <li data-target="#mixiu_pic" data-slide-to="2" style="opacity:0.6"><img src="{{URL::asset('/images/mixiu_lunbo_shandian.png')}}" class="img-responsive mixiu_lunbo_shandian"></li>
                    <li data-target="#mixiu_pic" data-slide-to="3" style="opacity:0.4"><img src="{{URL::asset('/images/mixiu_lunbo_shandian.png')}}" class="img-responsive mixiu_lunbo_shandian"></li>
                </ol>
            
                    <div class="carousel-inner">
                        @foreach($me_xiu_right as $key => $value)
                        @if($key == 0)
                        <div class="item active" >                        
                        	<div style="width:100%; height:100%" id="mixiu_pic_mengceng">
                                <img src="{{$value->image_path}}" class="img-responsive animated" id="mixiu_lunbo_youtu">
                                <div class="mixiu_lunbo_mengceng">                            	
                                    <div>
                                        <p class="mixiu_lunbo_mengceng_p1 animated" data-wow-duration="1s" data-wow-delay=".6s">{{$value->image_title}}</p>
                                        <p class="mixiu_lunbo_mengceng_p2 animated" data-wow-duration="1s" data-wow-delay=".6s"><img src="{{$value->image_pic}}" class="img-responsive"></p>
                                        <p class="mixiu_lunbo_mengceng_p3 animated" data-wow-duration="1s" data-wow-delay=".6s">{{$value->image_slogen}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="item">                        
                        	<div style="width:100%; height:100%" id="mixiu_pic_mengceng">
                                <img src="{{$value->image_path}}" class="img-responsive animated" id="mixiu_lunbo_youtu">
                                <div class="mixiu_lunbo_mengceng">                            	
                                    <div>
                                        <p class="mixiu_lunbo_mengceng_p1 animated" data-wow-duration="1s" data-wow-delay=".6s">{{$value->image_title}}</p>
                                        <p class="mixiu_lunbo_mengceng_p2 animated" data-wow-duration="1s" data-wow-delay=".6s"><img src="{{$value->image_pic}}" class="img-responsive"></p>
                                        <p class="mixiu_lunbo_mengceng_p3 animated" data-wow-duration="1s" data-wow-delay=".6s">{{$value->image_slogen}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                
                
            </div>
		</div>
        
<!--觅秀视频-->
    	<div class="row mibao_mibao_biaoti animated wow bounceIn" data-wow-duration="1s" data-wow-delay="1s" style="margin-top:30vh; margin-bottom:10vh">
            <img src="{{URL::asset('/images/miwen_biaoti.png')}}" class="img-responsive">
        </div>
		
        <div class="row mixiu_shipin">




            <!-- 视频模块 -->
<style>
    .picc{position:fixed !important; left:0; right:0; top:0; bottom:0; z-index:9999; display:none}
    
    .chacha{ width:40px; height:40px; position:absolute; right:15px; top:35px; z-index:99; border:none; cursor:pointer}
</style> 
<!--             @foreach($me_xiu_video as $key => $value)
            <div class="modal fade" id="picc{{$key}}" style="background:rgba(0,0,0,.6)">
                <div class="container" style="position:relative; height:100vh; padding:0">
                    <div class="modal-dialog mibao_mengceng">
                        <div class="container" style="padding:0">

                            <video controls preload="none">
                              <source src="{{$me_xiu_video[$key]->video_path}}" type="video/mp4">
                            </video>
                            <script>plyr.setup();</script>
                            
                        </div>

                    </div>
                </div>
            </div>
            @endforeach  --> 
        @foreach($me_xiu_video as $key => $value)
        <div id="picc{{$key}}" class="picc" style="background:rgba(0,0,0,.6); position:relative">
            <div class="container" style="position:relative; height:100vh; padding:0">
                <div class="modal-dialog mibao_mengceng">
                    <div class="chacha" id="chacha{{$key}}"><img src="{{URL::asset('/images/video_close.png')}}" class="img-responsive"></div><br>

                    <div class="container" style="padding:0">

                        <video controls preload="none" id="myVideo{{$key}}">
                            <source src="{{$me_xiu_video[$key]->video_path}}" type="video/mp4">
                        </video>
                        
                    </div>

                </div>
            </div>
        </div>

        <script>plyr.setup();</script>
                        
        <script>
            $(function(){
                var audio = document.getElementById("myVideo{{$key}}");
                $("#picc{{$key}}").hide;
                $("#chufa_aaa{{$key}}").click(function(){
                    $("#picc{{$key}}").show();
                    })
                $("#chacha{{$key}}").click(function(){
                    $("#picc{{$key}}").hide();
                    audio.pause();  //暂停
                    })
                })
        </script>
        @endforeach  

        	<div class="col-md-4 col-sm-4 col-xs-4">
                	<div class="col-md-12 col-sm-12 col-xs-12" id="chufa_aaa0" style="cursor:pointer">
                        <div class="box">
                            <div class="box-img">
                                <img src="{{$me_xiu_video[0]->video_pic_path}}" class="img-responsive animated wow bounceIn" data-wow-duration="1s" data-wow-delay=".2s">
                            </div>
                            <div class="box-content">
                                <div id="shipin_jianjie">
                                    <h4 class="title">{{$me_xiu_video[0]->video_title}}</h4>
                                    <p class="description">{{$me_xiu_video[0]->video_descrip}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                	<div class="col-md-12 col-sm-12 col-xs-12" id="chufa_aaa1" style="cursor:pointer">
                        <div class="box">
                            <div class="box-img">
                                <img src="{{$me_xiu_video[1]->video_pic_path}}" class="img-responsive animated wow bounceIn" data-wow-duration="1s" data-wow-delay=".2s">
                            </div>
                            <div class="box-content">
                                <div id="shipin_jianjie">
                                    <h4 class="title">{{$me_xiu_video[1]->video_title}}</h4>
                                    <p class="description">{{$me_xiu_video[1]->video_descrip}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        	<div class="col-md-8 col-sm-8 col-xs-8">
            	<div class="col-md-12 col-sm-12 col-xs-12" id="chufa_aaa2" style="cursor:pointer">
                    <div class="box">
                        <div class="box-img">
                            <img src="{{$me_xiu_video[2]->video_pic_path}}" class="img-responsive animated wow bounceIn" data-wow-duration="1s" data-wow-delay=".2s">
                        </div>
                        <div class="box-content">
                        	<div id="shipin_jianjie">
                                <h4 class="title">{{$me_xiu_video[2]->video_title}}</h4>
                                <p class="description">{{$me_xiu_video[2]->video_descrip}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mixiu_shipin2">
        	<div class="col-md-8 col-sm-8 col-xs-8">
            	<div class="col-md-12 col-sm-12 col-xs-12" id="chufa_aaa3" style="cursor:pointer">
                    <div class="box">
                        <div class="box-img">
                            <img src="{{$me_xiu_video[3]->video_pic_path}}" class="img-responsive animated wow bounceIn" data-wow-duration="1s" data-wow-delay=".2s">
                        </div>
                        <div class="box-content">
                            <div id="shipin_jianjie">
                                <h4 class="title">{{$me_xiu_video[3]->video_title}}</h4>
                                <p class="description">{{$me_xiu_video[3]->video_descrip}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        	<div class="col-md-4 col-sm-4 col-xs-4">
                	<div class="col-md-12 col-sm-12 col-xs-12 mixiu_shipin_mengceng" id="chufa_aaa4" style="cursor:pointer">
                        <div class="box">
                            <div class="box-img">
                                <img src="{{$me_xiu_video[4]->video_pic_path}}" class="img-responsive animated wow bounceIn" data-wow-duration="1s" data-wow-delay=".2s">
                            </div>
                            <div class="box-content">
                                <div id="shipin_jianjie">
                                    <h4 class="title">{{$me_xiu_video[4]->video_title}}</h4>
                                    <p class="description">{{$me_xiu_video[4]->video_descrip}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                	<div class="col-md-12 col-sm-12 col-xs-12 mixiu_shipin_mengceng" id="chufa_aaa5" style="cursor:pointer">
                        <div class="box">
                            <div class="box-img">
                                <img src="{{$me_xiu_video[5]->video_pic_path}}" class="img-responsive animated wow bounceIn" data-wow-duration="1s" data-wow-delay=".2s">
                            </div>
                            <div class="box-content">
                                <div id="shipin_jianjie">
                                    <h4 class="title">{{$me_xiu_video[5]->video_title}}</h4>
                                    <p class="description">{{$me_xiu_video[5]->video_descrip}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>







        <div class="row mibao_more" style="margin-top:10vh"><a href="/index/me_xiu/third"><img src="{{URL::asset('/images/mixiu_more.png')}}" class="img-responsive animated"></a></div>

    </div>
	
</div>



</body>

</html>

