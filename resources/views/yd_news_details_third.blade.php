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
	<div class="row index_zhuti_title"><img src="{{URL::asset('/yd_images/jiangjidongtai_sanji_title.png')}}" class="img-responsive"></div>

		<div class="row jjdt_sanji_bt">
        	<p><span>{{$news[0]->title}}</span><br><b>标签：{{$news[0]->label}}&nbsp;&nbsp;&nbsp;&nbsp; 发布日期：{{$news[0]->date_time}}</b></p>
            <img src="{{URL::asset('/yd_images/dongtai_sanji2.1.png')}}" class="img-responsive jjdt_sanji2_tuzi1">
        </div>

		<div class="row jjdt_sanji2_1">
            {!! $news_details[0]->text1_1 !!}
        </div>
        
		<div class="row jjdt_sanji2_2">
			<div class="col-md-6 col-sm-6 col-xs-6" style=" padding-right:30px"><img src="{{$news_details[0]->pic1_1}}" class="img-responsive"></div>
			<div class="col-md-6 col-sm-6 col-xs-6" style=" padding-left:40px"><img src="{{$news_details[0]->pic1_2}}" class="img-responsive"></div>
        </div>
       
		<div class="row jjdt_sanji2_1">
        	{!! $news_details[0]->text1_2 !!}
        </div>
        
		<div class="row jjdt_sanji2_2">
            <img src="{{URL::asset('/yd_images/dongtai_sanji2.2.png')}}" class="img-responsive jjdt_sanji2_tuzi2">
			<div class="col-md-6 col-sm-6 col-xs-6" style=" padding-right:30px"><img src="{{$news_details[0]->pic1_3}}" class="img-responsive"></div>
			<div class="col-md-6 col-sm-6 col-xs-6" style=" padding-left:40px"><img src="{{$news_details[0]->pic1_4}}" class="img-responsive"></div>
        </div>
       
		<div class="row jjdt_sanji2_1">
           {!! $news_details[0]->text1_3 !!}<br>
           {!! $news_details[0]->text1_4 !!}<br>
		   {!! $news_details[0]->text1_5 !!}
        </div>

		<div class="row jjdt_sanji2_2">
            <img src="{{URL::asset('/yd_images/dongtai_sanji2.3.png')}}" class="img-responsive jjdt_sanji2_tuzi3">
			<div class="col-md-6 col-sm-6 col-xs-6" style=" padding-right:50px"><img src="{{$news_details[0]->pic1_5}}" class="img-responsive"></div>
			<div class="col-md-6 col-sm-6 col-xs-6" style=" padding-left:30px"><img src="{{$news_details[0]->pic1_6}}" class="img-responsive"></div>
        </div>

		<div class="row jjdt_sanji2_1">
           {!! $news_details[0]->text1_6 !!}<br>
           {!! $news_details[0]->text1_7 !!}
        </div>
       
		<div class="row jjdt_sanji2_3">
			<div class="col-md-4 col-sm-4 col-xs-4"><img src="{{$news_details[0]->pic2_1}}" class="img-responsive">{!! $news_details[0]->text2_1_1 !!}<br>{!! $news_details[0]->text2_1_2 !!}</div>
			<div class="col-md-4 col-sm-4 col-xs-4" style="margin-top:40px">{!! $news_details[0]->text2_2_1 !!}<br>{!! $news_details[0]->text2_2_2 !!}<img src="{{$news_details[0]->pic2_2}}" class="img-responsive" style="margin-top:20px;"></div>
			<div class="col-md-4 col-sm-4 col-xs-4"><img src="{{$news_details[0]->pic2_3}}" class="img-responsive">{!! $news_details[0]->text2_3_1 !!}<br>{!! $news_details[0]->text2_3_2 !!}</div>
        </div>
       
		<div class="row jjdt_sanji2_4">
			<div class="col-md-7 col-sm-7 col-xs-7"><img src="{{$news_details[0]->pic3}}" class="img-responsive"><span></span></div>
			<div class="col-md-5 col-sm-5 col-xs-5">
                {!! $news_details[0]->text3_1 !!}
            </div>
        </div>
       
		<div class="row jjdt_sanji2_1">
            {!! $news_details[0]->text3_2 !!}
        </div>
        
		<div class="row jjdt_sanji2_1" style="margin-bottom:20px"><img src="{{URL::asset('/yd_images/dongtai_sanji2.4.png')}}" class="img-responsive" style="width:100%"></div>
       
		<div class="row jjdt_sanji2_5">
			<div class="col-md-6 col-sm-6 col-xs-6" style="padding-left:0; padding-right:20px"><img src="{{$news_details[0]->pic4_1}}" class="img-responsive"><p>{!! $news_details[0]->text4_1_1 !!}<br>{!! $news_details[0]->text4_1_2 !!}</p></div>
			<div class="col-md-6 col-sm-6 col-xs-6" style="padding-right:0; padding-left:20px"><img src="{{$news_details[0]->pic4_2}}" class="img-responsive"><p>{!! $news_details[0]->text4_2_1 !!}<br>{!! $news_details[0]->text4_2_2 !!}</p></div>

			<div class="col-md-6 col-sm-6 col-xs-6" style="padding-left:0; padding-right:20px"><img src="{{$news_details[0]->pic4_3}}" class="img-responsive"><p>{!! $news_details[0]->text4_3_1 !!}<br>{!! $news_details[0]->text4_3_2 !!}</p></div>
			<div class="col-md-6 col-sm-6 col-xs-6" style="padding-right:0; padding-left:20px"><img src="{{$news_details[0]->pic4_4}}" class="img-responsive"><p>{!! $news_details[0]->text4_4_1 !!}<br>{!! $news_details[0]->text4_4_2 !!}</p></div>
            
			<div class="col-md-6 col-sm-6 col-xs-6" style="padding-left:0; padding-right:20px"><img src="{{$news_details[0]->pic4_5}}" class="img-responsive"><p>{!! $news_details[0]->text4_5_1 !!}<br>{!! $news_details[0]->text4_5_2 !!}</p></div>
			<div class="col-md-6 col-sm-6 col-xs-6" style="padding-right:0; padding-left:20px"><img src="{{$news_details[0]->pic4_6}}" class="img-responsive"><p>{!! $news_details[0]->text4_6_1 !!}<br>{!! $news_details[0]->text4_6_2 !!}</p></div>
        </div>

		<div class="row jjdt_sanji2_6" style="margin-bottom:70px"><img src="{{URL::asset('/yd_images/dongtai_sanji2.5.png')}}" class="img-responsive" style="width:100%; margin-top:-50px"></div>

		<div class="row jjdt_sanji2_7">
            <div class="col-md-8 col-sm-8 col-xs-8 col-xs-offset-2"><img src="{{$news_details[0]->pic5}}" class="img-responsive"></div>
            <img src="{{URL::asset('/yd_images/dongtai_sanji2.6.png')}}" class="img-responsive jjdt_sanji2_tuzi4">
        </div>

		<div class="row jjdt_sanji2_1">
            {!! $news_details[0]->text5 !!}
        </div>
   
		<div class="col-md-12 col-sm-12 col-xs-12" style="height:180px"></div>
   
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
