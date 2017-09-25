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


	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>匠几</title>

    <link href="{{URL::asset('/css2/bootstrap.min.css')}}" rel="stylesheet" media="screen">
	<link href="{{URL::asset('/css2/so-ai.css')}}" rel="stylesheet" media="screen">
	<link href="{{URL::asset('/css2/index.css')}}" rel="stylesheet" media="screen">
	<link href="{{URL::asset('/css2/animate.css')}}" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/dist/jquery.vm-carousel.css')}}">
    
    <link rel="stylesheet" href="{{URL::asset('/css2/Vidage.css')}}" />
    
	<script type="text/javascript" src="{{URL::asset('/js2/jquery-1.11.3.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('/js2/wow.min.js')}}"></script>   
</head>
<?php
$agent = $_SERVER['HTTP_USER_AGENT'];
if(strpos($agent,"comFront") || strpos($agent,"iPhone") || strpos($agent,"MIDP-2.0") || strpos($agent,"Opera Mini") || strpos($agent,"UCWEB") || strpos($agent,"Android") || strpos($agent,"Windows CE") || strpos($agent,"SymbianOS"))
header("Location:http://m.jiangjimedia.com");
?>
<body class="home blog has-drawer">
<div class="top-content index" style="position:relative; z-index:999">
                
	<div class="slider-wrapper" style="overflow:hidden !important">
		<div class="slider-inner item-5 after-load" style="display: block;">

                <video id="VidageVideo" class="Vidage__video" preload="metadata" loop autoplay muted>
                    <source src="{{$screen_video}}" type="video/mp4">
                </video>
                
		</div>
	</div>
	<div class="border">
		<div class="bottom">
			<div class="bottom-table">
				<div class="side-cell">
					<p></p>
				</div>
				<div class="center-cell" style="text-align:center">
					<img src="{{URL::asset('/images/hello.png')}}" class="img-responsive" style="display: inline-block;">
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
        
        <div class="index_youshang">
        	<img src="{{URL::asset('/images/dengpao.png')}}" class="img-responsive animated wow flipInY" data-wow-duration="1.5s" data-wow-delay="1s">
        </div>
        
        <div class="container-fluid" id="index_youshang_tan">
            <div class="container">
	        	<div class="index_youshang_tan">
                	<img src="{{URL::asset('/images/tanchu_cha.png')}}" class="img-responsive index_youshang_tan_cha">
					<img src="{{$company_info[0]->alert_info}}" class="img-responsive">
                    <a href="/contact" class="index_youshang_tan_a"></a>
                </div>             
            </div>
        </div>
        
	</div>
    
    

	<div class="hidden-xs" style="position: fixed; top: 50%; left: 0; width: 100%; height: 146px; z-index: 999;">
		<div style="text-align: center; margin-top: -120px;">
            <img id="mainLogo" src="{{URL::asset('/images/top-logo-lg.png')}}" style="width: 330px;">
        </div>
	</div>

	<div class="visible-xs" style="position: absolute; top: 50%; left: 0; width: 100%; height: 146px; z-index:999">
		<div style="text-align: center; margin-top: -50px; padding: 0 40px;">
			<img class="img-responsive" src="{{URL::asset('/images/top-logo-lg.png')}}">
        </div>
	</div>




</div>

<div id="page" style="position:relative; z-index:1">

	@include('qt_navigate')

<div class="top hidden-xs">
</div>
<div class="bottom hidden-xs">
</div>
<div class="left hidden-xs">
</div>
<div class="right hidden-xs">
</div>
<div class="top-left hidden-xs">
</div>
<div class="top-right hidden-xs">
</div>
<div class="bottom-left hidden-xs">
</div>
<div class="bottom-right hidden-xs">
</div>

<div class="logo hidden-xs">
  <div style="width: 240px; height: 90px; margin-left: -120px; background-color: #b3b8ba; padding-top: 25px;">
    <p class="text-center" style="margin-bottom:0">
      <img id="frameLogo" src="{{URL::asset('/images/top-logo-lg.png')}}" class="hidden" style="width:60%; margin-top:-10px">
    </p>
  </div>
</div>



<div class="container-fluid" style="position:relative;">
        <div class="index_youshang" id="you2" style="position: fixed; right:8vw; top:115px; height:130px; z-index:999; display:none">
        	<img src="{{URL::asset('/images/dengpao.png')}}" class="img-responsive">
        </div>
    <div class="container" style="padding-top:115px; position:relative">
    	<!--品牌服务-->
            <div class="row index_jjfw">
                <p class="index_jjfw_1 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">匠几服务<br><img src="{{URL::asset('/images/index_bt_bolangxian.png')}}" class="img-responsive"><br><span>Service</span></p>
                <p class="index_jjfw_2 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
                    @foreach($service as $value)
                        {{$value->introduce}}<br>
                    @endforeach
				</p>
                @foreach($info as $key => $value)
                @if($key == 4)
                <div class="col-md-4 col-sm-4 col-xs-4 animated wow bounceIn" data-wow-duration="1s" data-wow-delay="0.4s" style="text-align:right">
                	<img src="{{$value->service_img}}" class="img-responsive index_jjfw_png"><br>
                	<img src="{{$value->service_pic}}" class="img-responsive index_jjfw_gif_gai1"><br>
                    <span style="margin-right:40px">{{$value->service_name}}</span>
                </div>
                @elseif($key == 5)
                <div class="col-md-4 col-sm-4 col-xs-4 animated wow bounceIn" data-wow-duration="1s" data-wow-delay="0.4s">
                    <img src="{{$value->service_img}}" class="img-responsive index_jjfw_png"><br>
                    <img src="{{$value->service_pic}}" class="img-responsive index_jjfw_gif"><br>
                    {{$value->service_name}}
                </div>
                @elseif($key == 6)
                <div class="col-md-4 col-sm-4 col-xs-4 animated wow bounceIn" data-wow-duration="1s" data-wow-delay="0.4s" style="text-align:left">
                	<img src="{{$value->service_img}}" class="img-responsive index_jjfw_png"><br>
                	<img src="{{$value->service_pic}}" class="img-responsive index_jjfw_gif_gai2"><br>
                    <span style="margin-left:50px">{{$value->service_name}}</span>
                </div>
                @else
                <div class="col-md-3 col-sm-3 col-xs-3 wow animated bounceIn" data-wow-duration="1s" data-wow-delay="0.4s">
                    <img src="{{$value->service_img}}" class="img-responsive index_jjfw_png"><br>
                    <img src="{{$value->service_pic}}" class="img-responsive index_jjfw_gif"><br>
                    {{$value->service_name}}
                </div>
                @endif
                @endforeach
            </div>
        
    	<!--品牌案例-->
            <div class="row index_ppal">
                <p class="index_jjfw_1" style="margin-bottom:7vh">品牌案例<br><img src="{{URL::asset('/images/index_bt_bolangxian.png')}}" class="img-responsive"><br><span>Brand case</span></p>
                @foreach($jiangji_case as $key => $value)
                <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0; position:relative" id="index_ppal_da{{$key+1}}">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="index_ppal_tu"><img src="{{$value->cover_pic}}" class="img-responsive wow animated fadeIn" data-wow-duration="1s" data-wow-delay="0.4s"></div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 index_ppal_wenzi_da wow animated fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="index_ppal_wenzi">
                            <p class="index_ppal_wenzi_bt">{{$value->case_title}}</p>
                            <p>
                                {{$value->case_index}}
                            </p>
                            <p class="index_ppal_more_xiao"><a href="/case/details/{{$value->id}}">查看更多<span class="index_ppal_more_xiao_you"><img src="{{URL::asset('/images/anli_you.png')}}" class="img-circle"></span></a></p>
                        </div>
                    </div>
                </div>
        		@endforeach
                <div class="col-md-12 col-sm-12 col-xs-12 index_ppal_xuanxiangka">
                	<ul>
                        @foreach($jiangji_case as $ke => $va)
                        @if($ke == 0)
                    	<li id="index_ppal_xiao{{$ke+1}}"><img src="{{$va->cover_pic}}"><span class="index_ppal_xuanxiangka_span index_ppal_xuanxiangka_span_hei"></span></li>
                        @elseif($ke == 4)
                        <li id="index_ppal_xiao{{$ke+1}}" style="margin-right:0"><img src="{{$va->cover_pic}}"><span class="index_ppal_xuanxiangka_span"></span></li>
                        @else
                    	<li id="index_ppal_xiao{{$ke+1}}"><img src="{{$va->cover_pic}}"><span class="index_ppal_xuanxiangka_span"></span></li>
                    	@endif
                        @endforeach
                    </ul>
                </div>        
		                
                
                <div class="col-md-12 col-sm-12 col-xs-12 index_ppal_more"><a href="/case">查看更多案例<span class="index_ppal_more_you"><img src="{{URL::asset('/images/anli_you.png')}}" class="img-circle"></span></a></div>

            </div>
		</div>
    </div>
    
    
    
<div class="container-fluid" style="position:relative; padding-bottom:20vh">
    	<!--匠几团队-->
            <div class="row index_jjtd">
                <p class="index_jjfw_1" style="margin-bottom:10vh">匠几团队<br><img src="{{URL::asset('/images/index_bt_bolangxian.png')}}" class="img-responsive"><br><span>Team</span></p>

                <!--团队信息弹出层-->
                @foreach($jiangji_team as $ke => $value)          
                <div class="container-fluid jjtd_tanchu_hei" id="index_tuandui_tan{{$ke+1}}">
                    <div class="container">
                        <div class="index_tuandui_tan">
                            <img src="{{URL::asset('/images/tuandui_tanchu_cha.png')}}" class="img-responsive index_tuandui_tan_cha">
                            <p class="index_tuandui_tan_p1"><img src="{{$value->staff_alert}}" class="img-responsive"></p>
                            <p class="index_tuandui_tan_p2">{{$value->staff_name}}</p>
                            <p class="index_tuandui_tan_p3">{{$value->staff_job}}<span></span></p>
                            <p class="index_tuandui_tan_p4">
                                @foreach($value->jiangji_team_intro as $v)
                                    {{$v}}<br>
                                @endforeach
                            </p>
                        </div>             
                    </div>
                </div>
                @endforeach


               <ul class="vmcarousel-centered-infitine vmc-centered" id="jjtd_hgtz" style="position:relative; z-index:1000;">
                    @foreach($jiangji_team as $ke => $value)
                    <li id="index_tuandui_tan_chufa{{$ke+1}}">
                        <img src="{{$value->staff_pic1}}" alt="{{$value->staff_name}}" class="img-responsive index_tuandui_img1">
                        <img src="{{$value->staff_pic2}}" alt="{{$value->staff_name}}" class="img-responsive index_tuandui_img2">
                    </li>
                    <script>
                        $("#index_tuandui_tan_chufa{{$ke+1}}").click(function(){
                            $("#index_tuandui_tan{{$ke+1}}").show();
                            $("html").css("overflow","hidden");
                            })
                    </script>
                    @endforeach
               </ul>
				
                  
			</div>

</div>


<div class="container-fluid" style="position:relative; ">
	<div class="container">

    	<!--匠几动态-->
            <div class="row index_jjdt" style="padding-top:4vh;">
                <p class="index_jjfw_1" style="margin-bottom:7vh">匠几动态<br><img src="{{URL::asset('/images/index_bt_bolangxian.png')}}" class="img-responsive"><br><span>News</span></p>
                
                @foreach($jiangji_news as $key => $value)
                <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0; position:relative; margin-bottom:2vh" id="index_jjdt_da{{$key+1}}">
                    <div class="col-md-7 col-sm-7 col-xs-7 wow animated">
                        <img src="{{$value->hot_pic}}" class="img-responsive">
                        <div class="col-md-12 col-sm-12 col-xs-12 index_jjdt_bt">
                            <div></div><p style="margin-top:2vh;">{{$value->title}}</p><p><span>{{$value->date_time}}</span></p>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-5 index_jjdt_wenzi_da">
                    	<div class="col-md-2 col-sm-2 col-xs-2"><img src="{{URL::asset('/images/jjdt1_wenzi_zuo.png')}}" class="img-responsive"></div>
                        <div class="col-md-8 col-sm-8 col-xs-8 col-xs-offset-2 index_jjdt_wenzi">
                            <p class="wow animated fadeInLeft">
                                {!! $value->hot_desp !!}
                            </p>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 index_jjdt_youxian"><img src="{{URL::asset('/images/jjdt1_wenzi_you.png')}}" class="img-responsive"></div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 index_jjdt_more">
                        <p class="index_jjdt_more_xiao"><a href="/news/details/{{$value->id}}">查看更多<span class="index_jjdt_more_xiao_you"><img src="{{URL::asset('/images/anli_you.png')}}" class="img-circle"></span></a></p>
                    </div>
                </div>
                @endforeach

                <div class="col-md-12 col-sm-12 col-xs-12 index_ppal_xuanxiangka">
                	<ul>
                        @foreach($jiangji_news as $ke => $va)
                        @if($ke == 0)
                    	<li id="index_jjdt_xiao{{$ke+1}}"><img src="{{$va->hot_pic}}"><span class="index_ppal_xuanxiangka_span index_ppal_xuanxiangka_span_hei"></span></li>
                        @elseif($ke == 4)
                        <li id="index_jjdt_xiao{{$ke+1}}" style="margin-right:0"><img src="{{$va->hot_pic}}"><span class="index_ppal_xuanxiangka_span"></span></li>
                        @else
                    	<li id="index_jjdt_xiao{{$ke+1}}"><img src="{{$va->hot_pic}}"><span class="index_ppal_xuanxiangka_span"></span></li>
                        @endif
                        @endforeach
                    </ul>
                </div>        
		                
                
                <div class="col-md-12 col-sm-12 col-xs-12 index_ppal_more"><a href="/news">查看更多动态<span class="index_ppal_more_you"><img src="{{URL::asset('/images/anli_you.png')}}" class="img-circle"></span></a></div>


			</div>


    	<!--合作流程-->
            <div class="row index_hzlc" style="margin-bottom:6vh">
                <p class="index_jjfw_1" style="margin-bottom:4vh">合作流程<br><img src="{{URL::asset('/images/index_bt_bolangxian.png')}}" class="img-responsive"><br><span>Process</span></p>
                @foreach($jiangji_cooperation as $ke => $va)
                <div class="index_hzlc1">
                    <div><img src="{{$va->cooperation_no}}" class="img-responsive"></div>
                    <div style="position:relative">
                        <img src="{{$va->cooperation_img}}" class="img-responsive index_hzlc1_img_png">
                        <img src="{{$va->cooperation_pic}}" class="img-responsive index_hzlc1_img_gif">
                    </div>
                    {{$va->cooperation_name}}
                </div>
                @endforeach
			</div>
    </div>
</div>

    	<!--底部-->
<a href="javascript:;" id="toTop" title="回到顶部"><div class="index_dibu_top_guding" id="index_totop"><img src="{{URL::asset('/images/top-2_1.gif')}}" class="img-responsive"></div></a>
       
<div class="container-fluid" style="padding-bottom:55px;">
	<div style="position:relative">
        <img src="{{URL::asset('/images/index_dibutuan.png')}}" class="img-responsive" style="width:100%">
        <a href="javascript:;" id="toTop2" title="回到顶部"><div class="index_dibu_top" id="index_totop2"><img src="{{URL::asset('/images/top-2.gif')}}" class="img-responsive"></div></a>
    </div>
    <div style="width:100%; background:#b3b8ba; position:relative; z-index:1000; padding:5vh 0">
    
        <div class="container">
                <div class="row index_dibu">
                    <div class="col-md-5 col-sm-5 col-xs-5">
                        <p class="index_dibu_biaoti">{{$company_info[0]->company_name}}</p>
                        <p>公司地址：{{$company_info[0]->company_address}}</p>
                        <p>官方邮箱：{{$company_info[0]->company_email}}</p>
                        <p>官方电话：{{$company_info[0]->company_tel}}</p>
                        <p>官方微博：{{$company_info[0]->company_weibo}}</p>
                    </div>

                    @include('qt_foot')

    				<div class="col-md-2 col-sm-2 col-xs-2 index_dibu_beian"><img src="{{$company_info[0]->qr_code}}" class="img-responsive"></div>
                </div>
         </div>
         
    </div>
</div>


<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" type="text/javascript"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript" src="{{URL::asset('/js2/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js2/script.js')}}"></script>
<script src="{{URL::asset('/js2/modernizr.js')}}"></script>
<script src="{{URL::asset('/dist/jquery.vm-carousel.js')}}"></script>
<script type="text/javascript">
    $(function(){
        
                $('.vmcarousel-centered-infitine').vmcarousel({
                         centered: false,
                         start_item: 0,
                         autoplay: false,
                         infinite: false,
                      });

        
          });
</script>

<!-- Vidage init -->
	<script src="{{URL::asset('/js2/Vidage.min.js')}}"></script>
	<script>
		new Vidage('#VidageVideo'); 
		
		
	</script>
<script>
 $('#picz').carousel({ interval: false }) 
 </script>

