<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>觅闻</title>
<link rel="shortcut icon" href="{{URL::asset('/images/favicon.ico')}}">
<link rel="Bookmark" href="{{URL::asset('/images/favicon.ico')}}">
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
            <a href="/index/me_wen" class="mibao_fanhui animated fadeInDown" style="background:#f44321"><b class="mibao_fanhui_b animated">返回<br>Back</b></a>
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

<!--觅闻三级-->
<style>
    .miwen_sanji{letter-spacing: 2px;}
    #img_id_third{text-align: center;}
    .miwen_sanji img{max-width: 100%;display:inline-block;}

</style>
<div class="container-fluid miwen_sanji" style="margin-top:15vh; margin-bottom:10vh">
	<div class="container">
        <div class="row animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style="text-align:center;">
			<img src="{{$me_news['head_pic']}}" class="img-responsive" style="display:inline-block;">
        </div>
        <div class="row miwen_sanji_biaoti">
        	<p class="animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style="padding:0">
                <img src="{{URL::asset('/images/miwen_sanji_wenzi1.png')}}" class="img-responsive">
            </p>
            <p class="animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style="font-size:2.7rem">{{$me_news['title']}}</p>
        	<p class="animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style="padding:0">
                <img src="{{URL::asset('/images/miwen_sanji_wenzi2.png')}}" class="img-responsive">
            </p>
            <p class="animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s"> 
                {{$me_news['description']}}
            </p>
        </div>
		<div class="row miwen_sanji_tuwen">
            @foreach($me_news_details as $value)
            @if($value->pic_path)
        	<p class="animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style=" border:none; padding:0 3vw;" id="img_id_third"><img src="{{$value->pic_path}}" class="img-responsive"></p>
            <p class="animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style=" border:none; padding:0 3vw;">
                {{$value->content}}
            </p>
            @else
            <p class="animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style=" border:none; padding:0 3vw;">
                {{$value->content}}
            </p>
            @endif
            @endforeach
        </div>
    </div>
</div>
</body>
</html>