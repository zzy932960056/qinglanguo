<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>觅宝</title>
<link href="{{URL::asset('/css2/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css2/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css2/index.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css2/style1.css')}}" rel="stylesheet" type="text/css">

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
            <img src="{{URL::asset('/images/mibao_shangsnajiao.png')}}" class="img-responsive" style="width:100%">
            <a class="fanhuishouye" href="/"></a>
        </div>
    	<div class="col-md-6 col-sm-6 col-xs-6">
            <a href="/index/me_bao" class="mibao_fanhui animated fadeInDown" style="background:#36bca7"><b class="mibao_fanhui_b animated">返回<br>Back</b></a>
        </div>
</div>
<div class="container-fluid navbar-fixed-bottom fadeInRight animated" style="padding:0">
    	<div class="col-md-6 col-sm-6 col-xs-6 col-xs-offset-6" style="padding:0; position:relative">
            <img src="{{URL::asset('/images/mibao_xiasnajiao.png')}}" class="img-responsive" style="width:100%">
            <a href="javascript:;" id="toTop" title="回到顶部"></a><img src="{{URL::asset('/images/top.png')}}" class="img-responsive" id="top_huojian">
        </div>
</div>

<!--觅秀、觅宝视频三级-->
<div class="container-fluid" style="margin-top:5vh;">
	<div class="container" id="yiping_ersanji">
    
    
<!--         @foreach($bao as $key => $value)
        <div class="modal fade" id="picc{{$key+1}}" style="background:rgba(0,0,0,.6)">
            <div class="container" style="position:relative; height:100vh; padding:0">
                <div class="modal-dialog mibao_mengceng">
					<div class="container" style="padding:0">

                        <video controls preload="none">
                          <source src="{{$value->video_path}}" type="video/mp4">
                        </video>
                        <script>plyr.setup();</script>
                        
                    </div>

                </div>
            </div>
        </div>
        @endforeach  -->
        @foreach($bao as $key => $value)
        <div id="picc{{$key+1}}" class="picc" style="background:rgba(0,0,0,.6); position:relative">
            <div class="container" style="position:relative; height:100vh; padding:0">
                <div class="modal-dialog mibao_mengceng">
                    <div class="chacha" id="chacha{{$key+1}}"><img src="{{URL::asset('/images/video_close.png')}}" class="img-responsive"></div><br>

                    <div class="container" style="padding:0">

                        <video controls preload="none" id="myVideo{{$key+1}}">
                            <source src="{{$value->video_path}}" type="video/mp4">
                        </video>
                        
                    </div>

                </div>
            </div>
        </div>

        <script>plyr.setup();</script>
                        
        <script>
            $(function(){
                var audio = document.getElementById("myVideo{{$key+1}}");
                $("#picc{{$key+1}}").hide;
                $("#chufa_aaa{{$key+1}}").click(function(){
                    $("#picc{{$key+1}}").show();
                    })
                $("#chacha{{$key+1}}").click(function(){
                    $("#picc{{$key+1}}").hide();
                    audio.pause();  //暂停
                    })
                })
        </script>
        @endforeach          
    

<style>
    .picc{position:fixed !important; left:0; right:0; top:0; bottom:0; z-index:9999; display:none}
    
    .chacha{ width:40px; height:40px; position:absolute; right:-80px; top:-80px;; border:none; cursor:pointer}
</style>    
    
    
        <div class="row mixiu-mibao_shipin_sanji" style="position:relative; margin-top:16vh;">
        
        
        
        
        
                        <div class="carousel slide" id="picz" data-ride="carousel" data-interval="6200" >
                        <ol class="carousel-indicators" id="piczz">
                            @foreach($carousel as $k => $v)
                            @if($k == 1)
                            <li class="active" data-target="#picz" data-slide-to="{{$v}}"></li>
                            @else
                            <li data-target="#picz" data-slide-to="{{$v}}"></li>
                            @endif
                            @endforeach
                        </ol>
                        
                            <div class="carousel-inner">
                                @foreach($bao_video as $key => $value)
                                @if($key == 0)
                                <div class="item active" style="padding-top:4vh">
                                    @foreach($value as $ke => $va)
                                    @if(is_int($ke/3))
                                    <div class="col-md-4 col-sm-4 col-xs-4" style="margin-right:0" id="chufa_aaa{{$ke}}">
                                        <div class="box">
                                            <div class="box-img">
                                                <img src="{{$va->video_img}}" class="img-responsive">
                                            </div>
                                            <div class="box-content" style="background:rgba(54,188,167,0.7);">
                                                <div id="shipin_jianjie">
                                                    <h4 class="title">{{$va->video_title}}</h4>
                                                    <p class="description">{{$va->video_content}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    @else  
                                    <div class="col-md-4 col-sm-4 col-xs-4" id="chufa_aaa{{$ke}}">
                                        <div class="box">
                                            <div class="box-img">
                                                <img src="{{$va->video_img}}" class="img-responsive">
                                            </div>
                                            <div class="box-content" style="background:rgba(54,188,167,0.7);">
                                                <div id="shipin_jianjie">
                                                    <h4 class="title">{{$va->video_title}}</h4>
                                                    <p class="description">{{$va->video_content}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    @endif
                                    @endforeach   
                                </div>
                                @else
                                <div class="item" style="padding-top:4vh">
                                    @foreach($value as $ke => $va)
                                    @if(is_int($ke/3))
                                    <div class="col-md-4 col-sm-4 col-xs-4" style="margin-right:0" id="chufa_aaa{{$ke}}">
                                        <div class="box">
                                            <div class="box-img">
                                                <img src="{{$va->video_img}}" class="img-responsive">
                                            </div>
                                            <div class="box-content" style="background:rgba(54,188,167,0.7);">
                                                <div id="shipin_jianjie">
                                                    <h4 class="title">{{$va->video_title}}</h4>
                                                    <p class="description">{{$va->video_content}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    @else    
                                    <div class="col-md-4 col-sm-4 col-xs-4" id="chufa_aaa{{$ke}}">
                                        <div class="box">
                                            <div class="box-img">
                                                <img src="{{$va->video_img}}" class="img-responsive">
                                            </div>
                                            <div class="box-content" style="background:rgba(54,188,167,0.7);">
                                                <div id="shipin_jianjie">
                                                    <h4 class="title">{{$va->video_title}}</h4>
                                                    <p class="description">{{$va->video_content}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach  
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        
                    <a href="#picz" class="left carousel-control left1" data-slide="prev">
                        <img src="{{URL::asset('/images/mibao_zuo.png')}}" class="img-responsive">
                    </a>
                    <a href="#picz" class="right carousel-control right1" data-slide="next">
                        <img src="{{URL::asset('/images/mibao_you.png')}}" class="img-responsive">
                    </a>
                    

        </div>
        
        
        
    </div>
</div>




</body>

</html>
