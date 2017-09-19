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

	<title>匠几服务</title>

    <link href="{{URL::asset('/yd_css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
	<link href="{{URL::asset('/yd_css/so-ai.css')}}" rel="stylesheet" media="screen">
	<link href="{{URL::asset('/yd_css/index.css')}}" rel="stylesheet" media="screen">
	<link href="{{URL::asset('/yd_css/animate.css')}}" rel="stylesheet" media="screen">
    
	<script type="text/javascript" src="{{URL::asset('/yd_js/jquery-1.11.3.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('/yd_js/wow.min.js')}}"></script>
</head>  


<div class="top-content jiangjifuwu" style="position:relative; z-index:2">
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
	<div class="row index_zhuti_title"><img src="{{URL::asset('/yd_images/jiangjifuwu_title.png')}}" class="img-responsive"></div>
	@foreach($service as $ke => $va)
    <div class="row jjfw_1">
        <img src="{{$va->service_mobile}}" class="img-responsive">
        <p class="jjfw_bt">{{$va->service_title}}</p>
        @if($ke == 0)
        <p class="jjfw_btn">
            <span style=" margin-left:0">{{$va->service_label[0]}}</span>
            <span>{{$va->service_label[1]}}</span>
            <span>{{$va->service_label[2]}}</span>
        </p>
        <p class="jjfw_btn2">
            <span style=" margin-left:0">{{$va->service_label[3]}}</span>
            <span>{{$va->service_label[4]}}</span>
        </p>
        @elseif($ke == 1)
        <p class="jjfw_btn">
            <span style=" margin-left:0">{{$va->service_label[0]}}</span>
            <span>{{$va->service_label[1]}}</span>
        </p>
        @elseif($ke == 2)
        <p class="jjfw_btn">
            <span style=" margin-left:0">{{$va->service_label[0]}}</span>
            <span>{{$va->service_label[1]}}</span>
            <span>{{$va->service_label[2]}}</span>
        </p>
        <p class="jjfw_btn2">
            <span style=" margin-left:0">{{$va->service_label[3]}}</span>
            <span>{{$va->service_label[4]}}</span>
        </p>
        @elseif($ke == 3)
        <p class="jjfw_btn3">
            <span style=" margin-left:0">{{$va->service_label[0]}}</span>
            <span>{{$va->service_label[1]}}</span>
            <span>{{$va->service_label[2]}}</span>
            <span>{{$va->service_label[3]}}</span>
        </p>
        @elseif($ke == 4)
        <p class="jjfw_btn">
            <span style=" margin-left:0">{{$va->service_label[0]}}</span>
            <span>{{$va->service_label[1]}}</span>
            <span>{{$va->service_label[2]}}</span>
        </p>
        @elseif($ke == 5)
        <p class="jjfw_btn">
            <span style=" margin-left:0">{{$va->service_label[0]}}</span>
            <span>{{$va->service_label[1]}}</span>
            <span>{{$va->service_label[2]}}</span>
        </p>
        <p class="jjfw_btn2">
            <span style=" margin-left:0">{{$va->service_label[3]}}</span>
            <span>{{$va->service_label[4]}}</span>
        </p>
        @elseif($ke == 6)
        <p class="jjfw_btn">
            <span style=" margin-left:0">{{$va->service_label[0]}}</span>
            <span>{{$va->service_label[1]}}</span>
            <span>{{$va->service_label[2]}}</span>
        </p>
        @endif      
        <p class="jjfw_neirong">
            {{$va->service_desc}}
        </p>
    </div>
    @endforeach

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
.top-content.jiangjifuwu {
  background-image: url("{{$jiangji_banner}}");
}
</style>