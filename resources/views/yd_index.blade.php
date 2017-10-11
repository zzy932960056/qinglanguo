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

	<title>匠几</title>

  <link href="{{URL::asset('/yd_css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
	<link href="{{URL::asset('/yd_css/so-ai.css')}}" rel="stylesheet" media="screen">
	<link href="{{URL::asset('/yd_css/index.css')}}" rel="stylesheet" media="screen">
	<link href="{{URL::asset('/yd_css/animate.css')}}" rel="stylesheet" media="screen">
    
	<script type="text/javascript" src="{{URL::asset('/yd_js/jquery-1.11.3.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('/yd_js/wow.min.js')}}"></script>
</head>  


<div class="top-content index2" style="position:relative; z-index:2">
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
				<div class="center-cell" style="text-align:center; padding:0 5px">
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
	<div class="row index_zhuti_title"><a href="/service"><img src="{{URL::asset('/yd_images/jiangjifuwu_title.png')}}" class="img-responsive"></a>
    </div>
    <div class="row index_zhuti_jjfw_1">
        {!! $service_introduce->service_introduce !!}
    </div>
    <div class="row index_zhuti_jjfw_2">
    
            <div id="picc" class="carousel slide pad_010 b_k">
                 <!-- 轮播（Carousel）指标 -->
                        <ol class="carousel-indicators" id="jjfw_ol">
                            <li class="active" data-target="#picc" data-slide-to="0" id="aaaa"><span class="jjfw_lo_span"></span></li>
                            <li data-target="#picc" data-slide-to="1" id="bbbb"><span class="jjfw_lo_span"></span></li>
                            <li data-target="#picc" data-slide-to="2" id="cccc"><span class="jjfw_lo_span"></span></li>
                            <li data-target="#picc" data-slide-to="3" id="dddd"><span class="jjfw_lo_span"></span></li>
                            <li data-target="#picc" data-slide-to="4" id="eeee"><span class="jjfw_lo_span"></span></li>
                            <li data-target="#picc" data-slide-to="5" id="ffff"><span class="jjfw_lo_span"></span></li>
                            <li data-target="#picc" data-slide-to="6" id="gggg"><span class="jjfw_lo_span"></span></li>
                        </ol>
                 <!-- 轮播（Carousel）项目 -->
                 <div class="carousel-inner bor_btm">
                      @foreach($info as $ke => $va)
                      @if($ke == 0)
                        <div class="item active" id="index_jjfw_item{{$ke+1}}">
                        	  <div class="col-md-8 col-sm-8 col-xs-8 col-xs-offset-2">
                                <img src="{{$va->service_img}}" class="img-responsive" id="index_jjfw_img{{$ke+1}}">
                                <p class="jjfw_bt">{{$va->service_name}}</p>
                            </div>
                        </div>
                      @else
                        <div class="item" id="index_jjfw_item{{$ke+1}}">
                        	  <div class="col-md-8 col-sm-8 col-xs-8 col-xs-offset-2">
                                <img src="{{$va->service_img}}" class="img-responsive" id="index_jjfw_img{{$ke+1}}">
                                <p class="jjfw_bt">{{$va->service_name}}</p>
                            </div>
                        </div>
                      @endif
                      @endforeach
                 </div>
            </div>

    </div>
    
</div>
<script>
$(function(){
  $("#index_jjfw_item1").click(function(){
    $("#index_jjfw_img1").attr("src",$("#index_jjfw_img1").attr("src")=="{{$info[0]->service_img}}"?"{{$info[0]->service_pic}}":"{{$info[0]->service_img}}");
    })
  $("#index_jjfw_item2").click(function(){
    $("#index_jjfw_img2").attr("src",$("#index_jjfw_img2").attr("src")=="{{$info[1]->service_img}}"?"{{$info[1]->service_pic}}":"{{$info[1]->service_img}}");
    })
  $("#index_jjfw_item3").click(function(){
    $("#index_jjfw_img3").attr("src",$("#index_jjfw_img3").attr("src")=="{{$info[2]->service_img}}"?"{{$info[2]->service_pic}}":"{{$info[2]->service_img}}");
    })
  $("#index_jjfw_item4").click(function(){
    $("#index_jjfw_img4").attr("src",$("#index_jjfw_img4").attr("src")=="{{$info[3]->service_img}}"?"{{$info[3]->service_pic}}":"{{$info[3]->service_img}}");
    })
  $("#index_jjfw_item5").click(function(){
    $("#index_jjfw_img5").attr("src",$("#index_jjfw_img5").attr("src")=="{{$info[4]->service_img}}"?"{{$info[4]->service_pic}}":"{{$info[4]->service_img}}");
    })
  $("#index_jjfw_item6").click(function(){
    $("#index_jjfw_img6").attr("src",$("#index_jjfw_img6").attr("src")=="{{$info[5]->service_img}}"?"{{$info[5]->service_pic}}":"{{$info[5]->service_img}}");
    })
  $("#index_jjfw_item7").click(function(){
    $("#index_jjfw_img7").attr("src",$("#index_jjfw_img7").attr("src")=="{{$info[6]->service_img}}"?"{{$info[6]->service_pic}}":"{{$info[6]->service_img}}");
    })
  })
</script>
<!--匠几案例-->
<div class="container-fluid" style="margin-top:16vh">
	<a href="/case"><div class="row index_zhuti_title"><img src="{{URL::asset('/yd_images/jiangjianli_title.png')}}" class="img-responsive"></div></a>

    <div class="row index_zhuti_jjal_1">

    		<div id="picz" data-interval="4200" class="carousel slide carousel-fade">
            	<div class="carousel-inner">
                @foreach($jiangji_case as $ke => $va)
                @if($ke == 0)
            		<div class="item active">
					          <div><img src="{{$va->cover_pic}}" class="img-responsive"></div>
                      <div class="index_zhuti_jjal_2" style="width:100%">
                          <div class="index_zhuti_jjal_2">{{$va->case_title}}<a href="/case/details/{{$va->id}}">查看更多<img src="{{URL::asset('/yd_images/index_jjal_btn_jiantou.png')}}"></a></div>
                          <div class="index_zhuti_jjal_3">
                                {{$va->case_index}}
                          </div>
                      </div>
            		</div>
                @else
            		<div class="item">
					          <div><img src="{{$va->cover_pic}}" class="img-responsive"></div>
                      <div class="index_zhuti_jjal_2" style="width:100%">
                          <div class="index_zhuti_jjal_2">{{$va->case_title}}<a href="/case/details/{{$va->id}}">查看更多<img src="{{URL::asset('/yd_images/index_jjal_btn_jiantou.png')}}"></a></div>
                          <div class="index_zhuti_jjal_3">
                                {{$va->case_index}}
                          </div>
                      </div>
            		</div>
                @endif
                @endforeach
            	</div>
        </div>
                        
        <a href="#picz" class="left carousel-control left1" data-slide="prev">
              <img src="{{URL::asset('/yd_images/index_jjal_zuo.png')}}" class="img-responsive">
        </a>
        <a href="#picz" class="right carousel-control right1" data-slide="next">
              <img src="{{URL::asset('/yd_images/index_jjal_you.png')}}" class="img-responsive">
        </a>

    </div>
    
    <div class="index_zhuti_jjal_4"><a href="/case">查看更多案例<img src="{{URL::asset('/yd_images/index_jjal_btn_jiantou.png')}}"></a></div>
    
</div>

<!--匠几团队-->
<div class="container-fluid" style="margin-top:15vh">
	<div class="row index_zhuti_title"><img src="{{URL::asset('/yd_images/jiangjituandui_title.png')}}" class="img-responsive"></div>

    <div class="row index_zhuti_jjtd_1">
    
        <div class="carousel slide" id="pic_tuandui" data-interval="3200" >
            <div class="carousel-inner">
                @foreach($jiangji_team as $ke => $va)
                @if($ke == 0)
                <div class="item active">
                    @foreach($va as $v)
            				<div class="col-md-4 col-sm-4 col-xs-4"><img src="{{$v->mobile_pic1}}" class="img-responsive"></div>
                    @endforeach
                </div>
                @else
                <div class="item">
                    @foreach($va as $v)
              			<div class="col-md-4 col-sm-4 col-xs-4"><img src="{{$v->mobile_pic1}}" class="img-responsive"></div>
                    @endforeach
                </div>
                @endif
                @endforeach
             </div>
        </div>
                        
        <a href="#pic_tuandui" class="left carousel-control left2" data-slide="prev">
              <img src="{{URL::asset('/yd_images/index_jjtd_zuo.png')}}" class="img-responsive">
        </a>
        <a href="#pic_tuandui" class="right carousel-control right2" data-slide="next">
              <img src="{{URL::asset('/yd_images/index_jjtd_you.png')}}" class="img-responsive">
        </a>

    </div>
    
</div>

<!--匠几动态-->
<div class="container-fluid" style="margin-top:25vh">
	<a href="/news"><div class="row index_zhuti_title"><img src="{{URL::asset('/yd_images/jiangjidongtai_title.png')}}" class="img-responsive"></div></a>
    @foreach($jiangji_news as $ke => $va)
    <div class="row index_zhuti_jjdt_1" id="index_jjdt{{$ke+1}}">
      	<img src="{{$va->hot_pic}}" class="img-responsive">
      	<div class="index_zhuti_jjdt_2"><span></span>{{$va->title}}<br><b>{{$va->date_time}}</b></div>
        <div class="index_zhuti_jjal_2" style="margin-top:0 !important"><a href="/news/details/{{$va->id}}">查看更多<img src="{{URL::asset('/yd_images/index_jjal_btn_jiantou.png')}}"></a></div>
	  </div>
    @endforeach
    
    
    <div class="row index_zhuti_jjdt_3">
        @foreach($jiangji_news as $ke => $va)
        <div class="col-md-3 col-sm-3 col-xs-3" id="index_jjdt_chufa{{$ke+1}}"><img src="{{$va->hot_pic}}" class="img-responsive"><div><span class="index_zhuti_jjdt_3_span"></span></div></div>
        @endforeach
    </div>
    
    <div class="index_zhuti_jjal_4" style="margin-top:8vh"><a href="/news">查看更多案例<img src="{{URL::asset('/yd_images/index_jjal_btn_jiantou.png')}}"></a></div>
    
</div>

<!--合作流程-->
<div class="container-fluid" style="margin-top:10vh; margin-bottom:10vh">
	<div class="row index_zhuti_title"><img src="{{URL::asset('/yd_images/jiangjihezou_title.png')}}" class="img-responsive"></div>

  <div class="row index_zhuti_hzlc_1">
    	<img src="{{$jiangji_process->process_pic}}" class="img-responsive">
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

<script>

　　wow = new WOW({
      　　animateClass: 'animated',
      });
      wow.init();

</script>
<style>
.top-content.index2{
  background-image: url("{{$jiangji_banner}}");
}
</style>

