<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>觅尚</title>
<link rel="shortcut icon" href="{{URL::asset('/images/meyoung.ico')}}">
<link rel="Bookmark" href="{{URL::asset('/images/meyoung.ico')}}">
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
            <img src="{{URL::asset('/images/mishang_shangsnajiao.png')}}" class="img-responsive" style="width:100%">
            <a class="fanhuishouye" href="/"></a>
        </div>
    	<div class="col-md-6 col-sm-6 col-xs-6">
            <a href="/index/vogue" class="mibao_fanhui animated fadeInDown" style="background:#fedd00"><b class="mibao_fanhui_b animated">返回<br>Back</b></a>
        </div>
</div>
<div class="container-fluid navbar-fixed-bottom fadeInRight animated" style="padding:0">
    	<div class="col-md-6 col-sm-6 col-xs-6 col-xs-offset-6" style="padding:0; position:relative">
            <img src="{{URL::asset('/images/mishang_xiasnajiao.png')}}" class="img-responsive" style="width:100%">
            <a href="javascript:;" id="toTop" title="回到顶部"></a><img src="{{URL::asset('/images/top.png')}}" class="img-responsive" id="top_huojian">
        </div>
</div>

<!--觅尚-->
<div class="container-fluid" style="margin-top:-3vh;">
	<div class="container" id="yiping_ersanji">
    
    
    
        <div class="row mixiu-mibao_shipin_sanji" style="position:relative; margin-top:16vh;" id="mishang_erji_1366">
        
        
        
        
        
                        <div class="carousel slide" id="picd" data-ride="carousel" data-interval="6200" >
                            <div class="carousel-inner">
                                @foreach($me_shang as $key => $value)
                                @if($key == 0)
                                <div class="item active">
                                    @foreach($value as $ke => $va)
                                    @if($ke == 1)
                                	<a href="/index/me_shang/details/{{$va->id}}">
    									<div class="col-md-6 col-sm-6 col-xs-6 mishang_erji_lunbo1">
                                        	<div class="mishang_erji_lunbo1_dadiv">
                                                <img src="{{$va->magazine_path}}" class="img-responsive">
                                                <div class="mishang_erji_mengceng">
                                                	<div class="mishang_erji_mengceng_neirong">
                                                        <p class="mishang_erji_p11 animated"><img src="{{URL::asset('/images/000000000.png')}}"></p>
                                                        <p class="mishang_erji_p22 animated">{{$va->magazine_theme}}</p>
                                                        <p class="mishang_erji_p33 animated">
                                                            {{$va->magazine_index}}
                                                        </p>
                                                        <p class="mishang_erji_p44 animated">{{$va->date}}<br>{{$va->volume}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    @else
									<div class="col-md-5 col-sm-5 col-xs-5 mishang_erji_lunbo2">
                                        @foreach($va as $k => $v)
                                        <a href="/index/me_shang/details/{{$v->id}}">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="mishang_erji_lunbo1_dadiv">
                                                    <img src="{{$v->magazine_path}}" class="img-responsive">
                                                    <div class="mishang_erji_mengceng">
                                                        <div class="mishang_erji_mengceng_neirong">
                                                            <p class="mishang_erji_p1 animated"><img src="{{URL::asset('/images/000000000.png')}}"></p>
                                                            <p class="mishang_erji_p2 animated">{{$v->magazine_theme}}</p>
                                                            <p class="mishang_erji_p3 animated">
                                                                {{$v->magazine_index}}
                                                            </p>
                                                            <p class="mishang_erji_p4 animated">{{$v->date}}<br>{{$v->volume}}</p>
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
                                    <a href="/index/me_shang/details/{{$va->id}}">
    									<div class="col-md-6 col-sm-6 col-xs-6 mishang_erji_lunbo1">
                                        	<div class="mishang_erji_lunbo1_dadiv">
                                                <img src="{{$va->magazine_path}}" class="img-responsive">
                                                <div class="mishang_erji_mengceng">
                                                	<div class="mishang_erji_mengceng_neirong">
                                                        <p class="mishang_erji_p11 animated"><img src="{{URL::asset('/images/000000000.png')}}"></p>
                                                        <p class="mishang_erji_p22 animated">{{$va->magazine_theme}}</p>
                                                        <p class="mishang_erji_p33 animated">
                                                            {{$va->magazine_index}}
                                                        </p>
                                                        <p class="mishang_erji_p44 animated">{{$va->date}}<br>{{$va->volume}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    @else
									<div class="col-md-5 col-sm-5 col-xs-5 mishang_erji_lunbo2">
                                        @foreach($va as $k => $v)
                                        <a href="/index/me_shang/details/{{$v->id}}">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="mishang_erji_lunbo1_dadiv">
                                                    <img src="{{$v->magazine_path}}" class="img-responsive">
                                                    <div class="mishang_erji_mengceng">
                                                        <div class="mishang_erji_mengceng_neirong">
                                                            <p class="mishang_erji_p1 animated"><img src="{{URL::asset('/images/000000000.png')}}"></p>
                                                            <p class="mishang_erji_p2 animated">{{$v->magazine_theme}}</p>
                                                            <p class="mishang_erji_p3 animated">
                                                                {{$v->magazine_index}}
                                                            </p>
                                                            <p class="mishang_erji_p4 animated">{{$v->date}}<br>{{$v->volume}}</p>
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
                        
                    <a href="#picd" class="left carousel-control left1" data-slide="prev">
                        <img src="{{URL::asset('/images/mishang_erji_zuo.png')}}" class="img-responsive">
                    </a>
                    <a href="#picd" class="right carousel-control right1" data-slide="next">
                        <img src="{{URL::asset('/images/mishang_erji_you.png')}}" class="img-responsive">
                    </a>
                    

        </div>
        
        
        
    </div>
</div>





</body>

</html>
