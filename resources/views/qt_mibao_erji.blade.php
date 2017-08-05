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
<?php error_reporting(0); ?>
<!--上下三角-->
<div class="container-fluid mibao_shang navbar-fixed-top">
        <div class="col-md-6 col-sm-6 col-xs-6 fadeInLeft animated" style="position:relative">
            <img src="{{URL::asset('/images/mibao_shangsnajiao.png')}}" class="img-responsive" style="width:100%">
            <a class="fanhuishouye" href="/"></a>
        </div>
    	<div class="col-md-6 col-sm-6 col-xs-6">
            <a href="/" class="mibao_fanhui animated fadeInDown" style="background:#36bca7"><b class="mibao_fanhui_b animated">返回<br>Back</b></a>
        </div>
</div>
<div class="container-fluid navbar-fixed-bottom fadeInRight animated" style="padding:0">
    	<div class="col-md-6 col-sm-6 col-xs-6 col-xs-offset-6" style="padding:0; position:relative">
            <img src="{{URL::asset('/images/mibao_xiasnajiao.png')}}" class="img-responsive" style="width:100%">
            <a href="javascript:;" id="toTop" title="回到顶部"></a><img src="{{URL::asset('/images/top.png')}}" class="img-responsive" id="top_huojian">
        </div>
</div>

<!--banner-->
<div class="container-fluid animated" style="padding:0; margin-top:28vh">
	<img src="{{$banner_bao['banner_path']}}" class="img-responsive" style="width:100%">
</div>

<!--觅宝-->
<div class="container-fluid" style="margin-top:15vh;">
	<div class="container">
    	<div class="row mibao_mibao_biaoti animated wow bounceIn" data-wow-duration="1s" data-wow-delay="1s"><img src="{{URL::asset('/images/mibao_biaoti.png')}}" class="img-responsive"></div>
        
        <div class="row mibao_xiaohai">
            @foreach($bao as $key => $value)
                @if(is_int($key/3))
                <a href="#" data-toggle="modal" data-target="#pic{{$key}}">
                    <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="0s">
                        <img src="{{$value->picture}}" class="img-responsive">
                        <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="ke{{$value->id}}">{{$value->like}}</span></p>
                    </div>
                </a>
                @elseif(is_int(($key-1)/3))
                <a href="#" data-toggle="modal" data-target="#pic{{$key}}">
                    <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">
                        <img src="{{$value->picture}}" class="img-responsive">
                        <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="ke{{$value->id}}">{{$value->like}}</span></p>
                    </div>
                </a>
                @elseif(is_int(($key+1)/3))
                <a href="#" data-toggle="modal" data-target="#pic{{$key}}">
                    <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".4s" style="margin-right:0">
                        <img src="{{$value->picture}}" class="img-responsive">
                        <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="ke{{$value->id}}">{{$value->like}}</span></p>
                    </div>
                </a>
                @endif
            @endforeach
        </div>
        @foreach($bao as $ke => $va)
        <div class="modal fade" id="pic{{$ke}}" style="background:rgba(49,218,153,.6)">
            <div class="container" style="position:relative; height:100vh" id="mibao_xinxi">
                <div class="modal-dialog mibao_mengceng">
                	<div class="row" style="height:60vh; overflow:hidden; margin-right:0">
                        <div class="col-md-7 col-sm-7 col-xs-7" style="padding-right:0"><img src="{{$va->picture_big}}" class="img-responsive" style="width:100%"></div>
                        <div class="col-md-5 col-sm-5 col-xs-5" style="height:100%; background:#fff; padding:0">
                        	<div class="mibao_tanchu_biaoti">
                            	<p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="clike{{$va->id}}">{{$va->like}}</span></p>
                            	<p style="padding-left:0; padding-right:10%; text-align:right">
                                    <button type="button" id="mibao_dianzan_btn" onclick="dodianzan(this)"><input type="hidden" name="hidden" value="{{$va->id}}"/><span class="animated dianzanqita{{$va->id}}" id="dianzan_span">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;给&nbsp;我&nbsp;点&nbsp;赞！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><img src="{{URL::asset('/images/mibao_xin.png')}}" id="dianzanimg{{$va->id}}" class="mibao_dianzan"></button>
                                </p>
                            </div>
                            <div class="mibao_tanchu_zhuti1">
                            	<p><label>姓名：</label><span>{{$va->name}}</span></p>
                            	<p style="margin-right:0"><label>性别：</label><span>{{$va->sex}}</span></p>
                            	<p><label>年龄：</label><span>{{$va->age}}</span></p>
                            	<p style="margin-right:0"><label>地区：</label><span>{{$va->region}}</span></p>
                            </div>
                            <div class="mibao_tanchu_zhuti2">
                                <img src="{{URL::asset('/images/huaban.gif')}}" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach          

        <div class="row mibao_more"><a href="/index/me_bao/child"><img src="{{URL::asset('/images/mibao_more.png')}}" class="img-responsive animated"></a></div>

    </div>
	
</div>

<!--觅宝视频-->
<div class="container-fluid" style="margin-top:5vh; margin-bottom:30vh">
	<div class="container">


<!--觅宝视频三级-->
@foreach($video as $ke => $val)
    <div class="modal fade" id="picc{{$ke+1}}" style="background:rgba(0,0,0,.6)">
        <div class="container" style="position:relative; height:100vh; padding:0">
            <div class="modal-dialog mibao_mengceng">
                <div class="container" style="padding:0">

                    <video controls preload="none">
                      <source src="{{$val->video_path}}" type="video/mp4">
                    </video>
                    <script>plyr.setup();</script>
                    
                </div>

            </div>
        </div>
    </div>
@endforeach 

    	<div class="row mibao_mibao_biaoti animated wow bounceIn" data-wow-duration="1s" data-wow-delay="1s"><img src="{{URL::asset('/images/mibao_biaoti2.png')}}" class="img-responsive"></div>
        <div class="row animated wow zoomIn" style="position:relative; margin-top:10vh; margin-bottom:7vh">
        	<div class="carousel slide" id="picc" data-ride="carousel" data-interval="6200" >
            	<div class="carousel-inner">
                    @foreach($bao_video as $key => $value)
                    @if($key == 0)
                    <div class="item active">
                        @foreach($value as $ke => $va)
                        @if($ke == 1)
                        <div class="col-md-8 col-sm-8 col-xs-8">
                            <a href="#" data-toggle="modal" data-target="#picc1">
                                <div class="col-md-12 col-sm-12 col-xs-12">
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
                            </a>
                        </div>
                        @else
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            @foreach($va as $k => $v)
                            <a href="#" data-toggle="modal" data-target="#picc{{$k}}">
                                <div class="col-md-12 col-sm-12 col-xs-12" id="mixiu_shipin_mengceng">
                                    <div class="box">
                                        <div class="box-img">
                                            <img src="{{$v->video_img}}" class="img-responsive">
                                        </div>
                                        <div class="box-content" style="background:rgba(54,188,167,0.7);">
                                            <div id="shipin_jianjie">
                                                <h4 class="title">{{$v->video_title}}</h4>
                                                <p class="description">{{$v->video_content}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
						</div>
                        @endif
                        @endforeach
                    </div>
                    @else
                    <div class="item">
                        @foreach($value as $ke => $va)
                        @if($ke == 1)
                        <div class="col-md-8 col-sm-8 col-xs-8">
                            <a href="#" data-toggle="modal" data-target="#picc4">
                                <div class="col-md-12 col-sm-12 col-xs-12">
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
                            </a>
                        </div>
                        @else
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            @foreach($va as $k => $v)
                            <a href="#" data-toggle="modal" data-target="#picc{{$k}}">
                                <div class="col-md-12 col-sm-12 col-xs-12" id="mixiu_shipin_mengceng">
                                    <div class="box">
                                        <div class="box-img">
                                            <img src="{{$v->video_img}}" class="img-responsive">
                                        </div>
                                        <div class="box-content" style="background:rgba(54,188,167,0.7);">
                                            <div id="shipin_jianjie">
                                                <h4 class="title">{{$v->video_title}}</h4>
                                                <p class="description">{{$v->video_content}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
						</div>
                        @endif
                        @endforeach
                    </div>
                    @endif
                    @endforeach
                </div>

            </div>
                    
            <a href="#picc" class="left carousel-control left2" data-slide="prev">
                 <img src="{{URL::asset('/images/mibao_zuo.png')}}" class="img-responsive">
            </a>
            <a href="#picc" class="right carousel-control right2" data-slide="next">
                 <img src="{{URL::asset('/images/mibao_you.png')}}" class="img-responsive">
            </a>
        </div>
        
        <div class="row mibao_more"><a href="/index/me_bao/video"><img src="{{URL::asset('/images/mibao_more.png')}}" class="img-responsive animated"></a></div>
        
        
    </div>
</div>




</body>
<script>
    function dodianzan(othis){
        var data = othis.firstChild.getAttribute('value');
        $("#dianzanimg"+data).toggleClass("mibao_dianzan2");
        var ctrldianzan = $("#ctrldianzan").attr('value');
        if(data != ''){
            $.ajax({
                url:"/index/me_bao/dodianzan",
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
                        $(".dianzanqita"+data).html('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;么&nbsp;&nbsp;么&nbsp;&nbsp;哒&nbsp;&nbsp;!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
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
</html>
