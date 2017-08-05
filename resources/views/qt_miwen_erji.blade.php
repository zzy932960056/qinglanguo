<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>觅闻</title>
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
            <img src="{{URL::asset('/images/miwen_shangsnajiao.png')}}" class="img-responsive" style="width:100%">
            <a class="fanhuishouye" href="/"></a>
        </div>
    	<div class="col-md-6 col-sm-6 col-xs-6">
            <a href="/" class="mibao_fanhui animated fadeInDown" style="background:#f44321"><b class="mibao_fanhui_b animated">返回<br>Back</b></a>
        </div>
</div>
<div class="container-fluid navbar-fixed-bottom fadeInRight animated" style="padding:0">
    	<div class="col-md-6 col-sm-6 col-xs-6 col-xs-offset-6" style="padding:0; position:relative">
            <img src="{{URL::asset('/images/miwen_xiasnajiao.png')}}" class="img-responsive" style="width:100%">
            <a href="javascript:;" id="toTop" title="回到顶部"></a><img src="{{URL::asset('/images/top.png')}}" class="img-responsive" id="top_huojian">
        </div>
</div>

<!--banner-->
<div class="container-fluid animated" style="padding:0; margin-top:28vh">
	<img src="{{$banner_wen['banner_path']}}" class="img-responsive" style="width:100%">
</div>

<!--觅闻-->
<div class="container-fluid" style="margin-top:15vh; margin-bottom:10vh">
    <div class="container">
        <div class="row mibao_sousuo">
            <div class="col-md-1 col-sm-1 col-xs-1">
                <span class="animated wow fadeInRight" id="mibao_sousuo" data-wow-duration="1s" data-wow-delay=".2s">
                    <img src="{{URL::asset('/images/xiajiantou.png')}}" class="img-responsive" id="mibao_sousuojiantou">
                </span>
            </div>
            <div class="col-md-11 col-sm-11 col-xs-11" id="mibao_sousuo_ss">
                <span class="animated fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" id="miwen_erji_btn1" style="background:#f44321">HOT<img src="{{URL::asset('/images/huangguan.gif')}}" class="miwen_huangguan"></span>
                <span class="animated fadeInRight" data-wow-duration="1s" data-wow-delay=".6s" id="miwen_erji_btn2" style="background:#f77e73">娱乐</span>
                <span class="animated fadeInRight" data-wow-duration="1s" data-wow-delay=".8s" id="miwen_erji_btn3" style="background:#f7b0ac">穿搭</span>
            </div>
        </div>
        
        <div id="miwen_erji_mianban1">
        @foreach($me_news_hot as $key => $value)
            @foreach($value as $key => $va)
            <a href="/index/me_wen/details/{{$va->id}}">
                <div class="row miwen_xinwen">
                    <div class="col-md-3 col-xs-3 col-sm-3 animated wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                        <img src="{{$va->little_pic}}" class="img-responsive">
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 animated wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s">
                        <p class="miwen_xinwen_biaoti">{{$va->title}}</p>
                        <p class="miwen_xinwen_neirong">
                            {{$va->description}}
                        </p>
                        @if($key == 1 || is_int(($key-1)/4))
                        <p class="miwen_xinwen_shijian" style="border-bottom-color:#f44321">{{$va->date}}</p>
                        @elseif($key == 2 || is_int(($key-2)/4))
                        <p class="miwen_xinwen_shijian" style="border-bottom-color:#fdb800">{{$va->date}}</p>
                        @elseif($key == 3 || is_int(($key-3)/4))
                        <p class="miwen_xinwen_shijian" style="border-bottom-color:#116396">{{$va->date}}</p>
                        @else(is_int($key/4))
                        <p class="miwen_xinwen_shijian" style="border-bottom-color:#36bca7">{{$va->date}}</p>
                        @endif
                    </div>
                </div>
            </a>
            @endforeach
        @endforeach
        </div>
        
        <div id="miwen_erji_mianban2" style="display:none">
        @foreach($me_news_yule as $key => $value)
            @foreach($value as $key => $va)
            <a href="/index/me_wen/details/{{$va->id}}">
                <div class="row miwen_xinwen">
                    <div class="col-md-3 col-xs-3 col-sm-3 animated fadeInLeft">
                        <img src="{{$va->little_pic}}" class="img-responsive">
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 animated fadeInRight">
                        <p class="miwen_xinwen_biaoti">{{$va->title}}</p>
                        <p class="miwen_xinwen_neirong">
                            {{$va->description}}
                        </p>
                        @if($key == 1 || is_int(($key-1)/4))
                        <p class="miwen_xinwen_shijian" style="border-bottom-color:#f44321">{{$va->date}}</p>
                        @elseif($key == 2 || is_int(($key-2)/4))
                        <p class="miwen_xinwen_shijian" style="border-bottom-color:#fdb800">{{$va->date}}</p>
                        @elseif($key == 3 || is_int(($key-3)/4))
                        <p class="miwen_xinwen_shijian" style="border-bottom-color:#116396">{{$va->date}}</p>
                        @else(is_int($key/4))
                        <p class="miwen_xinwen_shijian" style="border-bottom-color:#36bca7">{{$va->date}}</p>
                        @endif
                    </div>
                </div>
            </a>
            @endforeach
        @endforeach           
        </div>
        
        <div id="miwen_erji_mianban3" style="display:none">
        @foreach($me_news_chuanda as $key => $value)
            @foreach($value as $key => $va)
            <a href="/index/me_wen/details/{{$va->id}}">
                <div class="row miwen_xinwen">
                    <div class="col-md-3 col-xs-3 col-sm-3 animated fadeInLeft">
                        <img src="{{$va->little_pic}}" class="img-responsive">
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 animated fadeInRight">
                        <p class="miwen_xinwen_biaoti">{{$va->title}}</p>
                        <p class="miwen_xinwen_neirong">
                            {{$va->description}}
                        </p>
                        @if($key == 1 || is_int(($key-1)/4))
                        <p class="miwen_xinwen_shijian" style="border-bottom-color:#f44321">{{$va->date}}</p>
                        @elseif($key == 2 || is_int(($key-2)/4))
                        <p class="miwen_xinwen_shijian" style="border-bottom-color:#fdb800">{{$va->date}}</p>
                        @elseif($key == 3 || is_int(($key-3)/4))
                        <p class="miwen_xinwen_shijian" style="border-bottom-color:#116396">{{$va->date}}</p>
                        @else(is_int($key/4))
                        <p class="miwen_xinwen_shijian" style="border-bottom-color:#36bca7">{{$va->date}}</p>
                        @endif
                    </div>
                </div>
            </a>
            @endforeach
        @endforeach  
        </div>
    </div>
</div>
</body>
</html>