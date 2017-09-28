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
<div class="container-fluid" style="margin-top:80px;">
	<div class="row index_zhuti_title"><img src="{{URL::asset('/yd_images/jiangjidongtai_sanji_title.png')}}" class="img-responsive"></div>

		<div class="row jjdt_sanji_bt">
        	<p><span>{{$news[0]->title}}</span><br><b>标签：{{$news[0]->label}}&nbsp;&nbsp;&nbsp;&nbsp; 发布日期：{{$news[0]->date_time}}</b></p>
        </div>
		<div class="row jjdt_sanji_nr">
            @foreach($news_details as $ke => $va)
            @if($va->p_label)
            <div class="col-md-12 col-sm-12 col-xs-12 jjdt_sanji_nr1">
                <p>{{$va->p_label}}</p>
            </div>
            @elseif($va->ul_li)
            <div class="col-md-12 col-sm-12 col-xs-12 jjdt_sanji_nr1">   
                <ul>
                    <li>{{$va->ul_li}}</li>
                </ul>
            </div>
            @elseif($va->left_big_pic1)
            <div class="col-md-12 col-sm-12 col-xs-12 jjdt_sanji_nr_zuoda">
				<div class="col-md-12 col-sm-12 col-xs-12"><img src="{{$va->left_big_pic1}}" class="img-responsive"></div>
				<div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom:50px"><img src="{{$va->left_big_pic2}}" class="img-responsive"></div>
            </div>
            @elseif($va->image_text_pic1)
            <div class="col-md-12 col-sm-12 col-xs-12 jjdt_sanji_santu">
				        <div class="col-md-12 col-sm-12 col-xs-12">
                	<div><img src="{{$va->image_text_pic1}}" class="img-responsive"></div>
                    @if($va->image_text_title1)
                    △{{$va->image_text_title1}}
                    @endif
                </div>
				          <div class="col-md-12 col-sm-12 col-xs-12">
                	<div><img src="{{$va->image_text_pic2}}" class="img-responsive"></div>
                    @if($va->image_text_title2)
                    △{{$va->image_text_title2}}
                    @endif
                </div>
				          <div class="col-md-12 col-sm-12 col-xs-12">
                	<div><img src="{{$va->image_text_pic3}}" class="img-responsive"></div>
                    @if($va->image_text_title3)
                    △{{$va->image_text_title3}}
                    @endif
                </div>
            </div>          
            @elseif($va->right_big_pic1)
            <div class="col-md-12 col-sm-12 col-xs-12 jjdt_sanji_nr_zuoda">
				        <div class="col-md-12 col-sm-12 col-xs-12"><img src="{{$va->right_big_pic1}}" class="img-responsive"></div>
				        <div class="col-md-12 col-sm-12 col-xs-12"><img src="{{$va->right_big_pic2}}" class="img-responsive"></div>
            </div>
            @endif
            @endforeach
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
