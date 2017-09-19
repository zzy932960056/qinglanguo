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

	<title>品牌案例</title>

    <link href="{{URL::asset('/yd_css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
	<link href="{{URL::asset('/yd_css/so-ai.css')}}" rel="stylesheet" media="screen">
	<link href="{{URL::asset('/yd_css/index.css')}}" rel="stylesheet" media="screen">
	<link href="{{URL::asset('/yd_css/animate.css')}}" rel="stylesheet" media="screen">
    
	<script type="text/javascript" src="{{URL::asset('/yd_js/jquery-1.11.3.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('/yd_js/wow.min.js')}}"></script>
</head>  
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/yd_css/slick.css')}}">
    <script type="text/javascript" src="{{URL::asset('/yd_js/slick.min.js')}}"></script>

<div class="top-content peitaocaigou" style="position:relative; z-index:2">
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
<div class="container-fluid" style="margin-top:6vh">
	<div class="row index_zhuti_title"><img src="{{URL::asset('/yd_images/jiangjianli_erji_title.png')}}" class="img-responsive"></div>
	

        <!--匠几案例主体-->
        <div class="row jjal_zhuti">
            @foreach($hot_case as $va)
            <div class="col-md-12 col-sm-12 col-xs-12" style=" padding:0">
                <div class="container-slick" style="padding:0">
                    <div class="slick">
                        <a href="/case/details/{{$va->id}}"><div class="slick-item"><span class="jjal_span_hei"></span><img src="{{$va->case_pic1}}" /></div></a>
                        <a href="/case/details/{{$va->id}}"><div class="slick-item"><span class="jjal_span_hei"></span><img src="{{$va->case_pic2}}" /></div></a>
                        <a href="/case/details/{{$va->id}}"><div class="slick-item"><span class="jjal_span_hei"></span><img src="{{$va->case_pic3}}" /></div></a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12 col-sm-12 col-xs-12 jjal_alnr_daceng">
            	<p class="jjal_albt1">{{$va->case_title}}</p>
                <p class="jjal_alnr">服务内容：{{$va->service_content}}</p>
                <p class="jjal_alnr">坐标：{{$va->coord}}</p>
            </div>
            @endforeach
			
			<script>
            $(document).ready(function(){
              $('.slick').slick({
                    dots: false,
                    autoplay: true,
                  infinite: true,
                  speed: 500,
                  slidesToShow: 1,
                  centerMode: true,
                  variableWidth: true
              });
            });
            </script>         
            
            @foreach($case as $ke => $va)
            @if($ke == 0)
            <div class="col-md-12 col-sm-12 col-xs-12 jjal_al_pbl" style="padding:0; margin-bottom:80px">
            	<p class="jjal_al_pbl_bt"><img src="{{URL::asset('/yd_images/jiangjianli_erji_more_title.png')}}" class="img-responsive"></p>
                <a href="/case/details/{{$va->id}}">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_al_moreal">
                        <img src="{{$va->case_pic1}}" class="img-responsive">
                        <p class="jjal_albt1">{{$va->case_title}}</p>
                        <p class="jjal_alnr">服务内容：{{$va->service_content}}</p>
                        <p class="jjal_alnr">坐标：{{$va->coord}}</p>
                    </div>
                </a>
            </div>
            @else
            <div class="col-md-12 col-sm-12 col-xs-12 jjal_al_pbl" style="padding:0; margin-bottom:80px">
                <a href="/case/details/{{$va->id}}">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_al_moreal">
                        <img src="{{$va->case_pic1}}" class="img-responsive">
                        <p class="jjal_albt1">{{$va->case_title}}</p>
                        <p class="jjal_alnr">服务内容：{{$va->service_content}}</p>
                        <p class="jjal_alnr">坐标：{{$va->coord}}</p>
                    </div>
                </a>
            </div>
            @endif
            @endforeach
            
			<div class="col-md-12 col-sm-12 col-xs-12" style="height:100px"></div>


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
.slick-prev{ z-index:9998 !important; opacity:1 !important; border-radius:0 !important;  background-image: url({{URL::asset('/yd_images/index_jjtd_zuo.png')}}) !important; width:87px; height:87px; }
.slick-next{ z-index:9998 !important; opacity:1 !important; border-radius:0 !important;  background-image: url({{URL::asset('/yd_images/index_jjtd_you.png')}}) !important; width:87px; height:87px; }
</style>
<style>
.top-content.peitaocaigou{
  background-image: url("{{$jiangji_banner}}");
}
</style>