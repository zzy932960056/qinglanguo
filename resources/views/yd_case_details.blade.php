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
<div class="container-fluid" style="margin-top:260px">
	<div class="row index_zhuti_title"><img src="{{URL::asset('/yd_images/jiangjianli_erji_title.png')}}" class="img-responsive"></div>
	

        <!--匠几案例主体-->
        <div class="row jjal_sanji_zhuti">
            <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_logo">
                @if($case->badge)
                <img src="{{$case->badge}}" class="img-responsive"><div><p>NAME／{{$case->case_title}}</p><p>DATE／{{$case->date_time}}</p></div>
                @else
                <div><p>NAME／{{$case->case_title}}</p><p>DATE／{{$case->date_time}}</p></div>
                @endif
            </div>

		<!--文案-->
            @if($case->document_pic1)
            <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan">
                <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0; margin-bottom:30px"><img src="{{URL::asset('/yd_images/anli_sanji7.png')}}" class="img-responsive"></div>
                <div id="jjal_sanji_mianban1">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_jixiangwu">
                        @if($case->doll_pic1)
                        <img src="{{$case->doll_pic1}}" class="img-responsive jjal_sanji_gongzai1">
                        @endif
                        <img src="{{$case->document_pic1}}" class="img-responsive">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_bt">
                        <p>{{$case->document_text1}}</p>
                    </div>
                </div>
                <div id="jjal_sanji_mianban2">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_jixiangwu"><img src="{{$case->doll_pic1}}" class="img-responsive jjal_sanji_gongzai1"><img src="{{$case->document_pic2}}" class="img-responsive"></div>
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_bt">
                        <p>{{$case->document_text2}}</p>
                    </div>
                </div>
                <div id="jjal_sanji_mianban3">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_jixiangwu"><img src="{{$case->doll_pic1}}" class="img-responsive jjal_sanji_gongzai1"><img src="{{$case->document_pic3}}" class="img-responsive"></div>
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_bt">
                        <p>{{$case->document_text3}}</p>
                    </div>
                </div>
                <div id="jjal_sanji_mianban4">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_jixiangwu"><img src="{{$case->doll_pic1}}" class="img-responsive jjal_sanji_gongzai1"><img src="{{$case->document_pic4}}" class="img-responsive"></div>
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_bt">
                        <p>{{$case->document_text4}}</p>
                    </div>
                </div>
                
                <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_zhoubian">
                    <div class="col-md-6 col-sm-6 col-xs-6" id="jjal_sanji_chufa1"><img src="{{$case->document_pic1}}" class="img-responsive"><span class="jjal_sanji_wenan_span jjal_sanji_wenan_span_hei"></span></div>
                    <div class="col-md-6 col-sm-6 col-xs-6" id="jjal_sanji_chufa2"><img src="{{$case->document_pic2}}" class="img-responsive"><span class="jjal_sanji_wenan_span"></span></div>
                    <div class="col-md-6 col-sm-6 col-xs-6" id="jjal_sanji_chufa3"><img src="{{$case->document_pic3}}" class="img-responsive"><span class="jjal_sanji_wenan_span"></span></div>
                    <div class="col-md-6 col-sm-6 col-xs-6" id="jjal_sanji_chufa4"><img src="{{$case->document_pic4}}" class="img-responsive"><span class="jjal_sanji_wenan_span"></span></div>
                </div>
            </div>
            @endif



            <!--设计-->
            @if($case->design_pic1)
            <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan">
                <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0; margin-bottom:30px"><img src="{{URL::asset('/yd_images/anli_sanji8.png')}}" class="img-responsive"></div>
                <div id="jjal_sanji_mianban5">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_jixiangwu">
                        <img src="{{$case->design_pic1}}" class="img-responsive">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_bt">
                        <p>{{$case->design_text1}}</p>
                    </div>
                </div>
                <div id="jjal_sanji_mianban6">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_jixiangwu">
                        <img src="{{$case->design_pic2}}" class="img-responsive">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_bt">
                        <p>{{$case->design_text2}}</p>
                    </div>
                </div>
                <div id="jjal_sanji_mianban7">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_jixiangwu">
                        <img src="{{$case->design_pic3}}" class="img-responsive">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_bt">
                        <p>{{$case->design_text3}}</p>
                    </div>
                </div>
                <div id="jjal_sanji_mianban8">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_jixiangwu">
                        <img src="{{$case->design_pic4}}" class="img-responsive">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_bt">
                        <p>{{$case->design_text4}}</p>
                    </div>
                </div>
    
                
                <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_zhoubian">
                    <div class="col-md-6 col-sm-6 col-xs-6" id="jjal_sanji_chufa5"><img src="{{$case->design_pic1}}" class="img-responsive"><span class="jjal_sanji_wenan_span jjal_sanji_wenan_span_hei"></span></div>
                    <div class="col-md-6 col-sm-6 col-xs-6" id="jjal_sanji_chufa6"><img src="{{$case->design_pic2}}" class="img-responsive"><span class="jjal_sanji_wenan_span"></span></div>
                    <div class="col-md-6 col-sm-6 col-xs-6" id="jjal_sanji_chufa7"><img src="{{$case->design_pic3}}" class="img-responsive"><span class="jjal_sanji_wenan_span"></span></div>
                    <div class="col-md-6 col-sm-6 col-xs-6" id="jjal_sanji_chufa8"><img src="{{$case->design_pic4}}" class="img-responsive"><span class="jjal_sanji_wenan_span"></span></div>
                </div>
            </div>
            @endif



            <!--空间设计-->
            @if($case->space_pic1)
            <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan">
                <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0; margin-bottom:30px"><img src="{{URL::asset('/yd_images/anli_sanji9.png')}}" class="img-responsive"></div>
                <div id="jjal_sanji_mianban9">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_jixiangwu">
                        <img src="{{$case->space_pic1}}" class="img-responsive">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_bt">
                        <p>{{$case->space_text1}}</p>
                    </div>
                </div>
                <div id="jjal_sanji_mianban10">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_jixiangwu">
                        <img src="{{$case->space_pic2}}" class="img-responsive">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_bt">
                        <p>{{$case->space_text2}}</p>
                    </div>
                </div>
                <div id="jjal_sanji_mianban11">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_jixiangwu">
                        <img src="{{$case->space_pic3}}" class="img-responsive">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_bt">
                        <p>{{$case->space_text3}}</p>
                    </div>
                </div>
                <div id="jjal_sanji_mianban12">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_jixiangwu">
                        <img src="{{$case->space_pic4}}" class="img-responsive">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_bt">
                        <p>{{$case->space_text4}}</p>
                    </div>
                </div>
    
                
                <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_zhoubian">
                    <div class="col-md-6 col-sm-6 col-xs-6" id="jjal_sanji_chufa9"><img src="{{$case->space_pic1}}" class="img-responsive"><span class="jjal_sanji_wenan_span jjal_sanji_wenan_span_hei"></span></div>
                    <div class="col-md-6 col-sm-6 col-xs-6" id="jjal_sanji_chufa10"><img src="{{$case->space_pic2}}" class="img-responsive"><span class="jjal_sanji_wenan_span"></span></div>
                    <div class="col-md-6 col-sm-6 col-xs-6" id="jjal_sanji_chufa11"><img src="{{$case->space_pic3}}" class="img-responsive"><span class="jjal_sanji_wenan_span"></span></div>
                    <div class="col-md-6 col-sm-6 col-xs-6" id="jjal_sanji_chufa12"><img src="{{$case->space_pic4}}" class="img-responsive"><span class="jjal_sanji_wenan_span"></span></div>
                </div>
            </div>
            @endif

            <!--环创-->
            @if($case->env_pic1)
            <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan">
                <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0; margin-bottom:30px"><img src="{{URL::asset('/yd_images/anli_sanji10.png')}}" class="img-responsive"></div>
                <div id="jjal_sanji_mianban13">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_jixiangwu">
                        <img src="{{$case->env_pic1}}" class="img-responsive">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_bt">
                        <p>{{$case->env_text1}}</p>
                    </div>
                </div>
                <div id="jjal_sanji_mianban14">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_jixiangwu">
                        <img src="{{$case->env_pic2}}" class="img-responsive">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_bt">
                        <p>{{$case->env_text2}}</p>
                    </div>
                </div>
                <div id="jjal_sanji_mianban15">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_jixiangwu">
                        <img src="{{$case->env_pic3}}" class="img-responsive">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_bt">
                        <p>{{$case->env_text3}}</p>
                    </div>
                </div>
                <div id="jjal_sanji_mianban16">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_jixiangwu">
                        <img src="{{$case->env_pic4}}" class="img-responsive">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_bt">
                        <p>{{$case->env_text4}}</p>
                    </div>
                </div>
    
                
                <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_zhoubian">
                    <div class="col-md-6 col-sm-6 col-xs-6" id="jjal_sanji_chufa13"><img src="{{$case->env_pic1}}" class="img-responsive"><span class="jjal_sanji_wenan_span jjal_sanji_wenan_span_hei"></span></div>
                    <div class="col-md-6 col-sm-6 col-xs-6" id="jjal_sanji_chufa14"><img src="{{$case->env_pic2}}" class="img-responsive"><span class="jjal_sanji_wenan_span"></span></div>
                    <div class="col-md-6 col-sm-6 col-xs-6" id="jjal_sanji_chufa15"><img src="{{$case->env_pic3}}" class="img-responsive"><span class="jjal_sanji_wenan_span"></span></div>
                    <div class="col-md-6 col-sm-6 col-xs-6" id="jjal_sanji_chufa16"><img src="{{$case->env_pic4}}" class="img-responsive"><span class="jjal_sanji_wenan_span"></span></div>
                </div>
            </div>
            @endif



            <!--影音-->
            @if($case->video1)
            <div class="jjal_sanji_shipin_da" id="picc1">
                <div class="jjal_sanji_shipin">
                            <div class="chacha" id="chacha1"><img src="{{URL::asset('/yd_images/anli_sanji_cha.png')}}" class="img-responsive"></div>
                            <video poster="{{$case->video_pic1}}" controls preload="none" id="myVideo1">
                              <source src="{{$case->video1}}" type="video/mp4">
                            </video>
                </div>
            </div>
            <div class="jjal_sanji_shipin_da" id="picc2">
                <div class="jjal_sanji_shipin">
                            <div class="chacha" id="chacha2"><img src="{{URL::asset('/yd_images/anli_sanji_cha.png')}}" class="img-responsive"></div>
                            <video poster="{{$case->video_pic2}}" controls preload="none" id="myVideo2">
                              <source src="{{$case->video2}}" type="video/mp4">
                            </video>
                </div>
            </div>
            <div class="jjal_sanji_shipin_da" id="picc3">
                <div class="jjal_sanji_shipin">
                            <div class="chacha" id="chacha3"><img src="{{URL::asset('/yd_images/anli_sanji_cha.png')}}" class="img-responsive"></div>
                            <video poster="{{$case->video_pic3}}" controls preload="none" id="myVideo3">
                              <source src="{{$case->video3}}" type="video/mp4">
                            </video>
                </div>
            </div>
            <div class="jjal_sanji_shipin_da" id="picc4">
                <div class="jjal_sanji_shipin">
                            <div class="chacha" id="chacha4"><img src="{{URL::asset('/yd_images/anli_sanji_cha.png')}}" class="img-responsive"></div>
                            <video poster="{{$case->video_pic4}}" controls preload="none" id="myVideo4">
                              <source src="{{$case->video4}}" type="video/mp4">
                            </video>
                </div>
            </div>            
                            <script>
                            plyr.setup();
                            </script>
                            
                            <script>
                                $(function(){
                                    var audio1 = document.getElementById('myVideo1');
                                    $("#picc1").hide;
                                    $("#chufa_aaa1").click(function(){
                                        $("#picc1").show();
                                        })
                                    $("#chacha1").click(function(){
                                        $("#picc1").hide();
                                        audio1.pause();  //暂停
                                        })
                                    })
                                $(function(){
                                    var audio2 = document.getElementById('myVideo2');
                                    $("#picc2").hide;
                                    $("#chufa_aaa2").click(function(){
                                        $("#picc2").show();
                                        })
                                    $("#chacha2").click(function(){
                                        $("#picc2").hide();
                                        audio2.pause();  //暂停
                                        })
                                    })
                                $(function(){
                                    var audio3 = document.getElementById('myVideo3');
                                    $("#picc3").hide;
                                    $("#chufa_aaa3").click(function(){
                                        $("#picc3").show();
                                        })
                                    $("#chacha3").click(function(){
                                        $("#picc3").hide();
                                        audio3.pause();  //暂停
                                        })
                                    })
                                $(function(){
                                    var audio4 = document.getElementById('myVideo4');
                                    $("#picc4").hide;
                                    $("#chufa_aaa4").click(function(){
                                        $("#picc4").show();
                                        })
                                    $("#chacha4").click(function(){
                                        $("#picc4").hide();
                                        audio4.pause();  //暂停
                                        })
                                    })
                            </script>
    
    
    

            <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan">
                <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0; margin-bottom:30px"><img src="{{URL::asset('/yd_images/anli_sanji11.png')}}" class="img-responsive"></div>
                <div id="jjal_sanji_mianban17">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_jixiangwu" id="chufa_aaa1">
                        <div class="jjal_sanji_bg1_div"><img src="{{URL::asset('/yd_images/anli_sanji26.png')}}" class="img-responsive jjal_sanji_bg1"></div>
                        <img src="{{$case->video_pic1}}" class="img-responsive">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_bt">
                        <p>{{$case->video_text1}}</p>
                    </div>
                </div>
                <div id="jjal_sanji_mianban18">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_jixiangwu" id="chufa_aaa2">
                        <div class="jjal_sanji_bg1_div"><img src="{{URL::asset('/yd_images/anli_sanji26.png')}}" class="img-responsive jjal_sanji_bg1"></div>
                        <img src="{{$case->video_pic2}}" class="img-responsive">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_bt">
                        <p>{{$case->video_text2}}</p>
                    </div>
                </div>
                <div id="jjal_sanji_mianban19">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_jixiangwu" id="chufa_aaa3">
                        <div class="jjal_sanji_bg1_div"><img src="{{URL::asset('/yd_images/anli_sanji26.png')}}" class="img-responsive jjal_sanji_bg1"></div>
                        <img src="{{$case->video_pic3}}" class="img-responsive">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_bt">
                        <p>{{$case->video_text3}}</p>
                    </div>
                </div>
                <div id="jjal_sanji_mianban20">
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_jixiangwu" id="chufa_aaa4">
                        <div class="jjal_sanji_bg1_div"><img src="{{URL::asset('/yd_images/anli_sanji26.png')}}" class="img-responsive jjal_sanji_bg1"></div>
                        <img src="{{$case->video_pic4}}" class="img-responsive">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_bt">
                        <p>{{$case->video_text4}}</p>
                    </div>
                </div>
    
                
                <div class="col-md-12 col-sm-12 col-xs-12 jjal_sanji_wenan_zhoubian">
                    <div class="col-md-6 col-sm-6 col-xs-6" id="jjal_sanji_chufa17"><img src="{{$case->video_pic1}}" class="img-responsive"><span class="jjal_sanji_wenan_span jjal_sanji_wenan_span_hei"></span></div>
                    <div class="col-md-6 col-sm-6 col-xs-6" id="jjal_sanji_chufa18"><img src="{{$case->video_pic2}}" class="img-responsive"><span class="jjal_sanji_wenan_span"></span></div>
                    <div class="col-md-6 col-sm-6 col-xs-6" id="jjal_sanji_chufa19"><img src="{{$case->video_pic3}}" class="img-responsive"><span class="jjal_sanji_wenan_span"></span></div>
                    <div class="col-md-6 col-sm-6 col-xs-6" id="jjal_sanji_chufa20"><img src="{{$case->video_pic4}}" class="img-responsive"><span class="jjal_sanji_wenan_span"></span></div>
                </div>
            </div>
            @endif


			<div class="col-md-12 col-sm-12 col-xs-12" style="height:90px"></div>

            
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
.top-content.peitaocaigou{
  background-image: url("{{$jiangji_banner}}");
}
</style>