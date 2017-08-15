<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>觅样合作</title>
<link href="{{URL::asset('/css2/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css2/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css2/index.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css2/style1.css')}}" rel="stylesheet" type="text/css">
<script src="{{URL::asset('/js2/jquery-2.1.1.min.js')}}"></script>
<script src="{{URL::asset('/js2/index_js.js')}}"></script>
<script src="{{URL::asset('/js2/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('/js2/wow.min.js')}}"></script>
</head>

<body>
<!--上下三角-->
<div class="container-fluid mibao_shang navbar-fixed-top">
    	<div class="col-md-6 col-sm-6 col-xs-6 fadeInLeft animated" style="position:relative">
            <img src="{{URL::asset('/images/miyang_erji_shangsnajiao.png')}}" class="img-responsive" style="width:100%">
            <a class="fanhuishouye" href="/"></a>
        </div>
    	<div class="col-md-6 col-sm-6 col-xs-6">
            <a href="/index/young" class="mibao_fanhui animated fadeInDown" style="background:#116396"><b class="mibao_fanhui_b animated">返回<br>Back</b></a>
        </div>
</div>
<div class="container-fluid navbar-fixed-bottom fadeInRight animated" style="padding:0">
    	<div class="col-md-6 col-sm-6 col-xs-6 col-xs-offset-6" style="padding:0; position:relative">
            <img src="{{URL::asset('/images/miyang_erji_xiasnajiao.png')}}" class="img-responsive" style="width:100%">
            <a href="javascript:;" id="toTop" title="回到顶部"></a><img src="{{URL::asset('/images/top.gif')}}" class="img-responsive" id="top_huojian">
        </div>
</div>


<!--觅宝-->
<div class="container-fluid" style="margin-top:15vh;">
	<div class="container">
    
    	<div class="row miyang_erji_btn">
             <span class="animated fadeInRight huaguobianda" data-wow-duration="1s" data-wow-delay=".4s" id="miyang_erji_span1" style="background:#36bca7">品牌</span>
             <span class="animated fadeInRight" data-wow-duration="1s" data-wow-delay=".6s" id="miyang_erji_span2" style="background:#f44321">媒体</span>
             <span class="animated fadeInRight" data-wow-duration="1s" data-wow-delay=".8s" id="miyang_erji_span3" style="background:#fdb800">伙伴</span>
        </div>
        
		<div class="row index_miyang_hezuo">
            
        			<div class="col-md-12 col-sm-12 col-xs-12" id="miyang_lunbo1">
                        <div class="carousel slide" id="picp" data-ride="carousel" data-interval="6200" >
                        <ol class="carousel-indicators" id="picpp">
                            @foreach($carousel1 as $k => $v)
                            @if($k == 1)
                            <li class="active" data-target="#picp" data-slide-to="{{$v}}" id="miyang_li2"></li>
                            @else
                            <li data-target="#picp" data-slide-to="{{$v}}" id="miyang_li2"></li>
                            @endif
                            @endforeach
                        </ol>
                            <div class="carousel-inner">
                                @foreach($pinpai as $key => $value)
                                @if($key == 0)
                                <div class="item active">
                                    @foreach($value as $ke => $va)
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <img src="{{$va->pic_path}}" class="img-responsive">
                                        <div><p class="index_miyang_erji_bt">{{$va->introduce}}</p></div>
                                    </div>
                                    @endforeach
                                </div>
                                @else
                                <div class="item">
                                    @foreach($value as $ke => $va)
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <img src="{{$va->pic_path}}" class="img-responsive">
                                        <div><p class="index_miyang_erji_bt">{{$va->introduce}}</p></div>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        
                        <a href="#picp" class="left carousel-control left1" data-slide="prev" >
                            <img src="{{URL::asset('/images/miyang_zuo.png')}}" class="img-responsive"style="border:none">
                        </a>
                        <a href="#picp" class="right carousel-control right1" data-slide="next">
                            <img src="{{URL::asset('/images/miyang_you.png')}}" class="img-responsive" style="border:none">
                        </a>
        			</div>
                
                
        			<div class="col-md-12 col-sm-12 col-xs-12" id="miyang_lunbo2">
                        <div class="carousel slide" id="picp1" data-ride="carousel" data-interval="6200" >
                        <ol class="carousel-indicators" id="picpp">
                            @foreach($carousel2 as $k => $v)
                            @if($k == 1)
                            <li class="active" data-target="#picp1" data-slide-to="{{$v}}" id="miyang_li3"></li>
                            @else
                            <li data-target="#picp1" data-slide-to="{{$v}}" id="miyang_li3"></li>
                            @endif
                            @endforeach
                        </ol>
                            <div class="carousel-inner">
                                @foreach($meiti as $key => $value)
                                @if($key == 0)
                                <div class="item active">
                                    @foreach($value as $ke => $va)
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <img src="{{$va->pic_path}}" class="img-responsive">
                                        <div><p class="index_miyang_erji_bt" style="background:rgba(244,67,33,0.6)">{{$va->introduce}}</p></div>
                                    </div>
                                    @endforeach
                                </div>
                                @else
                                <div class="item">
                                    @foreach($value as $ke => $va)
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <img src="{{$va->pic_path}}" class="img-responsive">
                                        <div><p class="index_miyang_erji_bt" style="background:rgba(244,67,33,0.6)">{{$va->introduce}}</p></div>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        
                        <a href="#picp1" class="left carousel-control left1" data-slide="prev" >
                            <img src="{{URL::asset('/images/miyang_zuo.png')}}" class="img-responsive"style="border:none">
                        </a>
                        <a href="#picp1" class="right carousel-control right1" data-slide="next">
                            <img src="{{URL::asset('/images/miyang_you.png')}}" class="img-responsive" style="border:none">
                        </a>
                    </div>


        			<div class="col-md-12 col-sm-12 col-xs-12" id="miyang_lunbo3">
                        <div class="carousel slide" id="picp2" data-ride="carousel" data-interval="6200" >
                        <ol class="carousel-indicators" id="picpp">
                            @foreach($carousel3 as $k => $v)
                            @if($k == 1)
                            <li class="active" data-target="#picp2" data-slide-to="{{$v}}" id="miyang_li4"></li>
                            @else
                            <li data-target="#picp2" data-slide-to="{{$v}}" id="miyang_li4"></li>
                            @endif
                            @endforeach
                        </ol>
                            <div class="carousel-inner">
                                @foreach($huoban as $key => $value)
                                @if($key == 0)
                                <div class="item active">
                                    @foreach($value as $ke => $va)
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <img src="{{$va->pic_path}}" class="img-responsive">
                                        <div><p class="index_miyang_erji_bt" style="background:rgba(253,184,0,0.6)">{{$va->introduce}}</p></div>
                                    </div>
                                    @endforeach
                                </div>
                                @else
                                <div class="item">
                                    @foreach($value as $ke => $va)
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <img src="{{$va->pic_path}}" class="img-responsive">
                                        <div><p class="index_miyang_erji_bt" style="background:rgba(253,184,0,0.6)">{{$va->introduce}}</p></div>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <a href="#picp2" class="left carousel-control left1" data-slide="prev" >
                            <img src="{{URL::asset('/images/miyang_zuo.png')}}" class="img-responsive"style="border:none">
                        </a>
                        <a href="#picp2" class="right carousel-control right1" data-slide="next">
                            <img src="{{URL::asset('/images/miyang_you.png')}}" class="img-responsive" style="border:none">
                        </a>
                    </div>
        </div>
    </div>
</div>
        <div class="modal fade" id="lianxiwomentan" style="background:none">
            <div class="container" style="position:relative; height:100vh; padding:0">
                <style>

                </style>
                        <div class="lianxiwomentan">
                            <img src="{{URL::asset('/images/logo.png')}}" class="img-responsive"><br>
                            请拨打服务热线:<br><span>{{$join_us['join_us1']}}<br/>{{$join_us['join_us2']}}</span> <br/> 小觅果在这里等你哦~
                        </div>
                            
            </div>
        </div>          

        <a href="#" data-toggle="modal" data-target="#lianxiwomentan">
            <div class="jiaruwomen">
                <img src="{{URL::asset('/images/miyang_jiaruwomen.png')}}" class="img-responsive">
                <span class="miyang_erji_span1">立</span>
                <span class="miyang_erji_span2">即</span>
                <span class="miyang_erji_span3">加</span>
                <span class="miyang_erji_span4">入</span>
                <span class="miyang_erji_span5">我</span>
                <span class="miyang_erji_span6">们</span>
            </div>
        </a>
</body>
</html>
