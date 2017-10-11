<!DOCTYPE html>
<!-- saved from url=(0016)http://so-ai.jp/ -->
<html lang="ja" class="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
  <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
<meta http-equiv="X-UA-Compatible" content="IE=9" />

	<title>匠几动态</title>

    <link href="{{URL::asset('/yd_css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
	<link href="{{URL::asset('/yd_css/so-ai.css')}}" rel="stylesheet" media="screen">
	<link href="{{URL::asset('/yd_css/index.css')}}" rel="stylesheet" media="screen">
	<link href="{{URL::asset('/yd_css/animate.css')}}" rel="stylesheet" media="screen">
    
	<script type="text/javascript" src="{{URL::asset('/yd_js/jquery-1.11.3.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('/yd_js/wow.min.js')}}"></script>
</head>  


<div class="top-content jiangjidongtai" style="position:relative; z-index:2">
	<div class="slider-wrapper">
		<div class="slider-inner item-5 after-load" style="display: block;">
		</div>
	</div>
	<div class="border">
		<div class="bottom">
			<div class="bottom-table">
				<div class="side-cell">
					<p></p>
				</div>
				<div class="center-cell" style="text-align:center">
					<img src="{{URL::asset('/yd_images/hello.png')}}" class="img-responsive" style="display: inline-block">
				</div>
				<div class="side-cell">
					<p></p>
				</div>
			</div>
		</div>
		<div style="position: absolute; bottom: 20px; left: 50%;">
              <h4 class="rounded-text hello">
              <span style="transform: rotate(-30deg); -webkit-transform: rotate(-30deg);">H</span>
              <span style="transform: rotate(-15deg); -webkit-transform: rotate(-15deg);">E</span>
              <span style="transform: rotate(-0deg); -webkit-transform: rotate(-0deg);">L</span>
              <span style="transform: rotate(15deg); -webkit-transform: rotate(15deg);">L</span>
              <span style="transform: rotate(30deg); -webkit-transform: rotate(30deg);">O</span>
              </h4>
		</div>
	</div>
</div>

  @include('yd_navigation')

<!--匠几服务-->
<div class="container-fluid" style="margin-top:260px">
	<div class="row index_zhuti_title"><img src="{{URL::asset('/yd_images/jiangjidongtai_title.png')}}" class="img-responsive"></div>


	<div class="row jjdt_1">
    	<div class="col-md-12 col-sm-12 col-xs-12 jjdt_2">
        	<div id="jjdt_chufa1">全部动态<span class="jjdt_2_span jjdt_2_span_active"></span></div>
        	<div id="jjdt_chufa2">行业分享<span class="jjdt_2_span"></span></div>
        	<div id="jjdt_chufa3">匠几日志<span class="jjdt_2_span"></span></div>
        	<div id="jjdt_chufa4" style="margin-right:0">品牌声浪<span class="jjdt_2_span"></span></div>
        </div>
    </div>
    <div class="row jjdt_1" id="jjdt_zhuti1">
        @foreach($news as $va)
        <a href="/news/details/{{$va->id}}">
        	<div class="col-md-12 col-sm-12 col-xs-12 jjdt_3">
                <div class="col-md-12 col-sm-12 col-xs-12 jjdt_3_baikuang">
                    <div class="col-md-6 col-sm-6 col-xs-6" style="padding-right:2%"><img src="{{$va->news_pic}}" class="img-responsive"></div>
                    <div class="col-md-6 col-sm-6 col-xs-6" style="padding-left:2%; padding-right:0">
                        <p class="jjdt_3_bt">{{$va->title}}</p>
                        <p class="jjdt_3_nr">{{$va->describe}}</p>
                    </div>
                    <span class="jjdt_3_sj">{{$va->date_time}}</span>
                    <span class="jjdt_3_bq">{!! $va->category2 !!}</span>
                </div>
            </div>
        </a>
        @endforeach
        <!-- 分页 -->
        <div class="fenye_daceng">
            {{$news->render()}}
        </div>
        <!-- 分页结束 -->

    </div>

    <div class="row jjdt_1" id="jjdt_zhuti2" style="margin-bottom:180px">
        @foreach($news_hy as $ke => $va)
        <a href="/news/details/{{$va->id}}">
        	<div class="col-md-12 col-sm-12 col-xs-12 jjdt_3">
                <div class="col-md-12 col-sm-12 col-xs-12 jjdt_3_baikuang">
                    <div class="col-md-6 col-sm-6 col-xs-6" style="padding-right:2%"><img src="{{$va->news_pic}}" class="img-responsive"></div>
                    <div class="col-md-6 col-sm-6 col-xs-6" style="padding-left:2%; padding-right:0">
                        <p class="jjdt_3_bt">{{$va->title}}</p>
                        <p class="jjdt_3_nr">{{$va->describe}}</p>
                    </div>
                    <span class="jjdt_3_sj">{{$va->date_time}}</span>
                    <span class="jjdt_3_bq">{!! $va->category2 !!}</span>
                </div>
            </div>
        </a>
        @endforeach

    </div>



    <div class="row jjdt_1" id="jjdt_zhuti3" style="margin-bottom:180px">
        @foreach($news_rz as $ke => $va)
        <a href="/news/details/{{$va->id}}">
        	<div class="col-md-12 col-sm-12 col-xs-12 jjdt_3">
                <div class="col-md-12 col-sm-12 col-xs-12 jjdt_3_baikuang">
                    <div class="col-md-6 col-sm-6 col-xs-6" style="padding-right:2%"><img src="{{$va->news_pic}}" class="img-responsive"></div>
                    <div class="col-md-6 col-sm-6 col-xs-6" style="padding-left:2%; padding-right:0">
                        <p class="jjdt_3_bt">{{$va->title}}</p>
                        <p class="jjdt_3_nr">{{$va->describe}}</p>
                    </div>
                    <span class="jjdt_3_sj">{{$va->date_time}}</span>
                    <span class="jjdt_3_bq">{!! $va->category2 !!}</span>
                </div>
            </div>
        </a>
        @endforeach
    </div>

    <div class="row jjdt_1" id="jjdt_zhuti4" style="margin-bottom:180px">
        @foreach($news_pp as $ke => $va)
        <a href="/news/details/{{$va->id}}">
        	<div class="col-md-12 col-sm-12 col-xs-12 jjdt_3">
                <div class="col-md-12 col-sm-12 col-xs-12 jjdt_3_baikuang">
                    <div class="col-md-6 col-sm-6 col-xs-6" style="padding-right:2%"><img src="{{$va->news_pic}}" class="img-responsive"></div>
                    <div class="col-md-6 col-sm-6 col-xs-6" style="padding-left:2%; padding-right:0">
                        <p class="jjdt_3_bt">{{$va->title}}</p>
                        <p class="jjdt_3_nr">{{$va->describe}}</p>
                    </div>
                    <span class="jjdt_3_sj">{{$va->date_time}}</span>
                    <span class="jjdt_3_bq">{!! $va->category2 !!}</span>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    
</div>


<!--底部-->
  @include('yd_foot')

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" type="text/javascript"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript" src="{{URL::asset('/yd_js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/yd_js/script.js')}}"></script>
<style>
.top-content.jiangjidongtai{
  background-image: url("{{$jiangji_banner}}");
}
</style>
<style type="text/css">
    .fenye_daceng{text-align: center; margin-bottom: 180px}
    .pagination{ display: inline-block !important;}
    .pagination li a{ margin: 0 20px !important; background: none !important; border: none ; color: #ffffff !important; font-size: 30px;}
    .pagination li span{ margin: 0 20px !important; background: none !important; border: none ; color: #ffffff !important; font-size: 30px;}
    .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
        z-index: 2;
        color: #fff;
        cursor: default;
        background:none !important;
        border: 1px solid #fff !important;
        border-color: #fff !important;
    }
</style>