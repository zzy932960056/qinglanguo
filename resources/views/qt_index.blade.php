<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>觅样</title>
<link href="{{URL::asset('/css2/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css2/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css2/index.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{URL::asset('/css2/Vidage.css')}}" />





</head>
<style type="text/css">
ul { list-style: none;}
html { overflow: hidden;}
body { width: 100%; overflow: hidden;}
</style>
<body class="lightSpeedIn">
<?php error_reporting(0); ?>

<!--导航-->    

				<div class="mobile">
                    <form autocomplete="off">
                        <input type="checkbox" id="tm" />
                        <ul class="sidenav">
                            <li><b id="daohangli0"><a href="/"><div id="daohangimg0"><img src="{{URL::asset('/images/works-heading11.png')}}" id="daohangimg00"></div></a></b></li>
                            <li><b id="daohangli1"><a href="/index/me_wen"><div id="daohangimg1"><img src="{{URL::asset('/images/works-heading22.png')}}" id="daohangimg11"></div></a></b></li>
                            <li><b id="daohangli2"><a href="/index/me_xiu"><div id="daohangimg2"><img src="{{URL::asset('/images/works-heading33.png')}}" id="daohangimg22"></div></a></b></li>
                            <li><b id="daohangli3"><a href="/index/me_shang"><div id="daohangimg3"><img src="{{URL::asset('/images/works-heading44.png')}}" id="daohangimg33"></div></a></b></li>
                            <li><b id="daohangli4"><a href="javascript:;"><div id="daohangimg4"><img src="{{URL::asset('/images/works-heading66.png')}}" id="daohangimg44"></div></a></b></li>
                            <li><b id="daohangli5"><a href="/index/me_bao"><div id="daohangimg5"><img src="{{URL::asset('/images/works-heading55.png')}}" id="daohangimg55"></div></a></b></li>
                            <li><b id="daohangli6"><a href="javascript:;"><div id="daohangimg6"><img src="{{URL::asset('/images/works-heading777.png')}}" id="daohangimg66"></div></a></b></li>
                            <div class="daohang_tupian animated wow" data-wow-duration="1s" data-wow-delay="1s">
                                <img src="{{$navigation_image['image_path']}}" class="img-responsive" style="width:100%">
                            </div>
                        </ul>
                        <section>
                            <label for="tm">
                                <span id="anniu_ceng1"><img src="../../images/anniu.png" id="anniu_tu1"></span>
                                @if(isset($_SESSION['phone']))
                                <a href="/index/logout" id="logout">退出</a><a class="denglu_btn_btn" href="javascript:;"style="left:-5vw"><span><?=$_SESSION['phone']?></span></a>
                                @else
                                <a class="denglu_btn_btn" href="/index/login" style=""><span>登陆</span></a>
                                @endif
                            </label>
                           
                        </section>
                        <div></div>
                     </form>
			    </div>

            <div class="logo"><a href="/"><img src="{{URL::asset('/images/000000000.png')}}" class="img-responsive"></a></div>

       
<div id="pageContain">
<!--第一屏-->
	<div class="page page1 current" id="zsdasd">
		<div class="contain">

            <div class="Vidage">
                <div class="Vidage__image"></div>
        
                <video id="VidageVideo" class="Vidage__video" preload="metadata" autoplay muted>
                    <!-- <source src="{{URL::asset('/videos/me.mp4')}}" type="video/mp4"> -->
                    <source src="http://static.meyoungbaby.com/meyoung.webm" type="video/webm">
                    <source src="{{$first_video['video_path']}}" type="video/mp4">
                </video>
        
                <div class="Vidage__backdrop"></div>
            </div>
             
            <div class=" container-fluid wow animated fadeIn" data-wow-duration="1s" data-wow-delay="2s" style="position:absolute; bottom:5%; text-align:center !important; width:100%">
                <span style="width:70px; height:70px; border-radius:50%; border:1px solid #000; display:inline-block; line-height:70px"><img src="{{URL::asset('/images/img1.gif')}}" style="width:24px; height:40px"></span>
            </div> 
            
		</div>
	</div>
<!--第二屏 首页-->
	<div class="page page2" id="di2ping">
		<div class="contain" id="xiexiede">
        	<div class="container-fluid jinru1" style="background:#61b8a7">
            </div>
        	<div class="container-fluid jinru2" style="background:#ffffff">
            	<div class="container" style="position:relative">
                	<div class="col-md-5 col-sm-5 col-xs-5 index_yi_tu animated wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s"><img src="{{$dierping['logo_pic']}}" class="img-responsive" style="width:100%"></div>
                    <div class="col-md-6 col-sm-6 col-xs-6 index_yi_yuan animated wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                        <img src="{{$dierping['doll_pic']}}" class="img-responsive" style="display:inline-block">
                    </div>
                </div>
            </div>
        	<div class="container-fluid jinru3" style="background:#fdb800">
            	<div class="container">
                    <div class="col-md-6 col-sm-6 col-xs-6 index_yi_wenzi animated wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                        <p>{{$dierping['text_one']}}</p>
                        <p>{{$dierping['text_two']}}</p>
                        <p>{{$dierping['text_three']}}</p>
                    </div>
                </div>
            </div>
        	<div class="container-fluid jinru4" style="background:#f44321">
            </div>
		</div>
	</div>
<!--第三屏 觅闻-->
	<div class="page page3">
		<div class="contain" id="xiexiede">
        	<div class="container-fluid jinru5">
            </div>
        	<div class="container-fluid jinru6">
            	<div class="container animated wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                	<div class="col-md-4 col-sm-4 col-xs-4"><img src="{{URL::asset('/images/miwen.png')}}" class="img-responsive"></div>
                </div>
            </div>
        	<div class="container-fluid jinru7">
            	<div class="container">
                	<a href="/index/me_wen/cover/{{$me_wen[0]->id}}">
                	<div class="col-md-4 col-sm-4 col-xs-4 index_san animated wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s" style="padding-right:4vw">
                    	<div class="index_san_div1"><img src="{{$me_wen[0]->little_pic}}"></div>
                        <div class="index_san_div2"><p class="index_xinwen_biaoti">{{$me_wen[0]->title}}</p></div>
                    </div>
                    </a>
                    <a href="/index/me_wen/cover/{{$me_wen[1]->id}}">
                	<div class="col-md-4 col-sm-4 col-xs-4 index_san animated wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.5s" style="padding:0 2vw">
                    	<div class="index_san_div1"><img src="{{$me_wen[1]->little_pic}}"></div>
                        <div class="index_san_div2"><p class="index_xinwen_biaoti">{{$me_wen[1]->title}}</p></div>
                    </div>
                    </a>
                    <a href="/index/me_wen/cover/{{$me_wen[2]->id}}">
                	<div class="col-md-4 col-sm-4 col-xs-4 index_san animated wow fadeInRight" data-wow-duration="1s" data-wow-delay="2s" style="padding-left:4vw">
                    	<div class="index_san_div1"><img src="{{$me_wen[2]->little_pic}}"></div>
                        <div class="index_san_div2"><p class="index_xinwen_biaoti">{{$me_wen[2]->title}}</p></div>
                    </div>
                    </a>
                    <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:center; margin-top:10vh">
                    	<a href="/index/me_wen"><div class="index_san_more animated wow fadeInDownBig" data-wow-duration="1s" data-wow-delay="1s">查看更多<span class="index_san_more_span"></span></div></a>
                    </div>
                </div>
            </div>
        	<div class="container-fluid jinru8">
            </div>
        	<div class="container-fluid jinru9">
            </div>
		</div>
	</div>

<!--第四屏 觅秀-->
	<div class="page page4">
		<div class="contain" id="xiexiede" style="position:relative">
            <a href="/index/me_xiu">
                <div class="Vidage" style="z-index:9 !important; top:90vh; transform:skew(0deg,10deg) translate3d(0, 0, 0);">
                    <div class="Vidage__image"></div>
            
                    <video id="VidageVideo2" class="Vidage__video" preload="metadata" loop autoplay muted>
                        <!-- <source src="{{URL::asset('/videos/mixiu.mp4')}}" type="video/mp4"> -->
                        <source src="http://static.meyoungbaby.com/mexiu.webm" type="video/webm">
                        <source src="{{$me_xiu_video['video_path']}}" type="video/mp4">
                    </video>
            
                    <div class="Vidage__backdrop"></div>
                </div>
            </a>
        	<div class="container-fluid jinru5" style="background:#116396;">
            </div>
        	<div class="container-fluid jinru6" style="background:rgba(17,99,150,0.5); opacity:1; overflow:hidden; ">
            	<div class="container animated wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                	<div class="col-md-4 col-sm-4 col-xs-4"><img src="{{URL::asset('/images/mixiu.png')}}" class="img-responsive"></div>
                </div>
            </div>
            
        	<div class="container-fluid jinru7" style="background:#d9bbf9;">
            
                
            </div>
            
        	<div class="container-fluid" style="background:rgba(17,99,150,0.5); opacity:1; height:10vh; z-index:10; margin-top:0; position:relative">
            </div>
        	<div class="container-fluid animated wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="background:#116396; z-index:10; margin-top:0; position:relative; height:50vh">
            </div>
		</div>
	</div>

<!--第五屏 觅尚-->
	<div class="page page5">
		<div class="contain" id="xiexiede">
        	<div class="container-fluid jinru5" style="background:#fdb800">
            </div>
        	<div class="container-fluid jinru6" style="background:#fbdc8b">
            	<div class="container animated wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s" style="padding:0">
                	<div class="col-md-4 col-sm-4 col-xs-4" style="padding:0"><img src="{{URL::asset('/images/mishang.png')}}" class="img-responsive"></div>
                </div>
            </div>
        	<div class="container-fluid jinru7" style="background:#ffffff">
            	<div class="container index_mishang">
                    <a href="/index/me_shang/cover/{{$me_shang[0]->id}}">
                    	<div class="col-md-4 col-sm-4 col-xs-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="mishang_div1"><img src="{{$me_shang[0]->cover_pic}}"></div>
                            <span class="mishang_span_biankuang"></span>
                        </div>
                    </a>
                    <a href="/index/me_shang/cover/{{$me_shang[1]->id}}">
                    	<div class="col-md-4 col-sm-4 col-xs-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="mishang_div1"><img src="{{$me_shang[1]->cover_pic}}"></div>
                            <span class="mishang_span_biankuang"></span>
                        </div>
                    </a>
                    <a href="/index/me_shang/cover/{{$me_shang[2]->id}}">
                    	<div class="col-md-4 col-sm-4 col-xs-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s" style="margin-right:0">
                            <div class="mishang_div1"><img src="{{$me_shang[2]->cover_pic}}"></div>
                            <span class="mishang_span_biankuang"></span>
                        </div>
                    </a>
                
                    <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:center; margin-top:7vh">
                    	<a href="/index/me_shang"><div class="index_san_more animated wow fadeInDownBig" data-wow-duration="1s" data-wow-delay="1s">查看更多<span class="index_san_more_span" style="background:#fbdc8b"></span></div></a>
                    </div>
                </div>
                        
            </div>
        	<div class="container-fluid jinru8" style="background:#fbdc8b">
            </div>
        	<div class="container-fluid jinru9" style="background:#fdb800">
            </div>
		</div>
	</div>

<!--第六屏 觅淘-->
	<div class="page page6">
		<div class="contain" id="xiexiede">
        	<div class="container-fluid jinru5" style="background:#e23c7b">
            </div>
        	<div class="container-fluid jinru6" style="background:#f89fc1">
            	<div class="container animated wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                	<div class="col-md-4 col-sm-4 col-xs-4"><img src="{{URL::asset('/images/mitao.png')}}" class="img-responsive"></div>
                </div>
            </div>
        	<div class="container-fluid jinru7" style="padding-left:0; padding-right:0;">
            	<img src="{{$me_tao['image_path']}}" class="img-responsive" style="width:100%">
            </div>
        	<div class="container-fluid jinru8" style="background:#f89fc1;">
            </div>
        	<div class="container-fluid jinru9" style="background:#e23c7b">
            </div>
		</div>
	</div>
 
<!--第七屏 觅宝-->


	<div class="page page7">
        <style>
            .modal-backdrop{z-index: 0 !important;}
            .mibao_mengceng{transform: translate(-50%,-65%) !important;}
        </style>
        @foreach($bao as $ke => $va)
        <div class="modal fade" id="pic{{$va->id}}" style="background:rgba(49,218,153,.9);">
            <div class="container" style="position:relative; height:100vh" id="mibao_xinxi">
                <div class="modal-dialog mibao_mengceng">
                    <div class="row" style="height:60vh; overflow:hidden; margin-right:0">
                        <div class="col-md-7 col-sm-7 col-xs-7" style="padding-right:0"><img src="{{$va->picture_big}}" class="img-responsive" style="width:100%"></div>
                        <div class="col-md-5 col-sm-5 col-xs-5" style="height:100%; background:#fff; padding:0">
                            <div class="mibao_tanchu_biaoti">
                                <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="clike{{$va->id}}">{{$va->like}}</span></p>
                                <p style="padding-left:0; padding-right:10%; text-align:right">
                                    <button type="button" id="mibao_dianzan_btn" onclick="dodianzan(this)"><input type="hidden" name="hidden" value="{{$va->id}}"/><span class="animated dianzanqita{{$va->id}}" id="dianzan_span">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;给&nbsp;我&nbsp;点&nbsp;赞！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><img src="{{URL::asset('/images/mibao_xin.png')}}" id="dianzanimg{{$va->id}}" class="mibao_dianzan"></button>
                                </p>
                            </div>
                            <div class="mibao_tanchu_zhuti1">
                                <p><label>姓名：</label><span>{{$va->name}}</span></p>
                                <p style="margin-right:0"><label>性别：</label><span>{{$va->sex}}</span></p>
                                <p><label>年龄：</label><span>{{$va->age}}</span></p>
                                <p style="margin-right:0"><label>地区：</label><span>{{$va->region}}</span></p>
                            </div>
                            <div class="mibao_tanchu_zhuti2">
                                <img src="{{URL::asset('/images/huaban.gif')}}" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

		<div class="contain" id="xiexiede">
        	<div class="container-fluid jinru5" style="background:#36bca7">
            </div>
        	<div class="container-fluid jinru6" style="background:#9cded4">
            	<div class="container animated wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                	<div class="col-md-4 col-sm-4 col-xs-4"><img src="{{URL::asset('/images/mebao.png')}}" class="img-responsive"></div>
                </div>
            </div>
        	<div class="container-fluid jinru7" style="background:#ffffff">
            	<div class="container" style="position:relative; padding:0">
                    <div class="container" style="padding:0 20px; overflow:hidden">
                        <div class="carousel slide" id="picccc" data-ride="carousel" data-interval="6200" >
                            <div class="carousel-inner" style="width:95%; margin-left:2.5%; overflow:inherit">
                                <div class="item active">
                                    <div class="row index_wu_daceng">
                                        <a href="#" data-toggle="modal" data-target="#pic{{$bao[0]->id}}">
                                        <div class="col-md-3 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                                            <img src="{{$bao[0]->hot_pic}}">
                                            <span class="lvmengceng"></span>
                                        </div>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#pic{{$bao[1]->id}}">
                                        <div class="col-md-3 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
                                            <img src="{{$bao[1]->hot_pic}}">
                                            <span class="lvmengceng"></span>
                                        </div>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#pic{{$bao[2]->id}}">
                                        <div class="col-md-3 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.5s">
                                            <img src="{{$bao[2]->hot_pic}}">
                                            <span class="lvmengceng"></span>
                                        </div>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#pic{{$bao[3]->id}}">
                                        <div class="col-md-3 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="2s" style="margin-right:0">
                                            <img src="{{$bao[3]->hot_pic}}">
                                            <span class="lvmengceng"></span>
                                        </div>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#pic{{$bao[4]->id}}">
                                        <div class="col-md-3 animated wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                                            <img src="{{$bao[4]->hot_pic}}">
                                            <span class="lvmengceng"></span>
                                        </div>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#pic{{$bao[5]->id}}">
                                        <div class="col-md-3 animated wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                                            <img src="{{$bao[5]->hot_pic}}">
                                            <span class="lvmengceng"></span>
                                        </div>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#pic{{$bao[6]->id}}">
                                        <div class="col-md-3 animated wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                            <img src="{{$bao[6]->hot_pic}}">
                                            <span class="lvmengceng"></span>
                                        </div>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#pic{{$bao[7]->id}}">
                                        <div class="col-md-3 animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="margin-right:0">
                                            <img src="{{$bao[7]->hot_pic}}">
                                            <span class="lvmengceng"></span>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row index_wu_daceng">
                                        <a href="#" data-toggle="modal" data-target="#pic{{$bao[8]->id}}">
                                        <div class="col-md-3 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                                            <img src="{{$bao[8]->hot_pic}}">
                                            <span class="lvmengceng"></span>
                                        </div>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#pic{{$bao[9]->id}}">
                                        <div class="col-md-3 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
                                            <img src="{{$bao[9]->hot_pic}}">
                                            <span class="lvmengceng"></span>
                                        </div>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#pic{{$bao[10]->id}}">
                                        <div class="col-md-3 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.5s">
                                            <img src="{{$bao[10]->hot_pic}}">
                                            <span class="lvmengceng"></span>
                                        </div>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#pic{{$bao[11]->id}}">
                                        <div class="col-md-3 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="2s" style="margin-right:0">
                                            <img src="{{$bao[11]->hot_pic}}">
                                            <span class="lvmengceng"></span>
                                        </div>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#pic{{$bao[12]->id}}">
                                        <div class="col-md-3 animated wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                                            <img src="{{$bao[12]->hot_pic}}">
                                            <span class="lvmengceng"></span>
                                        </div>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#pic{{$bao[13]->id}}">
                                        <div class="col-md-3 animated wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                                            <img src="{{$bao[13]->hot_pic}}">
                                            <span class="lvmengceng"></span>
                                        </div>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#pic{{$bao[14]->id}}">
                                        <div class="col-md-3 animated wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                            <img src="{{$bao[14]->hot_pic}}">
                                            <span class="lvmengceng"></span>
                                        </div>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#pic{{$bao[15]->id}}">
                                        <div class="col-md-3 animated wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="margin-right:0">
                                            <img src="{{$bao[15]->hot_pic}}">
                                            <span class="lvmengceng"></span>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#picccc" class="left carousel-control left1" data-slide="prev">
                        <img src="{{URL::asset('/images/mibao_zuo.png')}}" class="img-responsive">
                    </a>
                    <a href="#picccc" class="right carousel-control right1" data-slide="next">
                        <img src="{{URL::asset('/images/mibao_you.png')}}" class="img-responsive">
                    </a>
                    <a href="/index/me_bao">
                    <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:center; margin-top:4vh">
                    	<a href="/index/me_bao"><div class="index_qi_more animated wow fadeInDownBig" data-wow-duration="1s" data-wow-delay="1s">查看更多<span class="index_qi_more_span" style="background:#9cded4"></span></div></a>
                    </div>
                    </a>
                </div>
            
            </div>
        	<div class="container-fluid jinru8" style="background:#9cded4">
            </div>
        	<div class="container-fluid jinru9" style="background:#36bca7">
            </div>
		</div>
	</div>
    
<!--第八屏 觅样-->
	<div class="page page8" style="position: relative">
				<div class="tanchu wu animated weixin">
                	<div class="tanchubianxing">
                        <div class="xianzhi_erweima"><img src="{{$last['wechat']}}" class="img-responsive"></div>
                        <p>扫我~快扫我~</p>
                        <span class="animated tanchu_close_weixin">X</span>
                    </div>
                </div>
				<div class="tanchu wu animated qq">
                	<div class="tanchubianxing">
                        <div class="xianzhi_erweima"><img src="{{$last['qq']}}" class="img-responsive"></div>
                        <p>扫我~快扫我~~</p>
                        <span class="animated tanchu_close_qq">X</span>
                    </div>
                </div>
				<div class="tanchu wu animated weibo">
                	<div class="tanchubianxing">
                        <div class="xianzhi_erweima"><img src="{{$last['weibo']}}" class="img-responsive"></div>
                        <p>扫我~快扫我~~~</p>
                        <span class="animated tanchu_close_weibo">X</span>
                    </div>
                </div>
				<div class="tanchu wu animated taobao">
                	<div class="tanchubianxing">
                        <div class="xianzhi_erweima"><img src="{{$last['taobao']}}" class="img-responsive"></div>
                        <p>扫我~快扫我~~~~</p>
                        <span class="animated tanchu_close_taobao">X</span>
                    </div>
                </div>
		<div class="contain" id="xiexiede">
        	<div class="container-fluid jinru5" style="background:#116396">
            </div>
        	<div class="container-fluid jinru6" style="background:#36bca7">
            	<div class="container animated wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                	<div class="col-md-4 col-sm-4 col-xs-4"><img src="{{URL::asset('/images/miyang.png')}}" class="img-responsive"></div>
                </div>
            </div>
        	<div class="container-fluid jinru7" style="background:#ffffff">
            
                            
            	<div class="container" style="margin-top:10vh">
                	<div class="col-md-6 col-sm-6 col-xs-6">
                    	<p class="index_miyang_dizhi">
                            <img title="微信" src="{{URL::asset('/images/miyang_weixin.png')}}" class="img-responsive" id="weixin">
                            <img title="微博" src="{{URL::asset('/images/miyang_weibo.png')}}" class="img-responsive" id="weibo">
                            <img title="淘宝" src="{{URL::asset('/images/miyang_taobao.png')}}" class="img-responsive" id="taobao">
                            <img title="QQ" src="{{URL::asset('/images/miyang_qq.png')}}" class="img-responsive" id="qq">
                            <a href="/index/me_join"><img title="合作" src="{{URL::asset('/images/miyang_hezuo.png')}}" class="img-responsive"></a>
                        </p>
                        <p class="index_miyang_dizhi2">{{$last['company']}}</p>
                    	<p class="index_miyang_dizhi2">{{$last['email']}}</p>
                    	<p class="index_miyang_dizhi2">{{$last['tel']}}</p>
                    	<p class="index_miyang_dizhi2">{{$last['address']}}</p>
                        
                        
                        
                    </div>
                	<div class="col-md-6 col-sm-6 col-xs-6 index_miyang_ditu">
						<div class="index_miyang_ditu_biaoti">{{$last['map_slogan']}}</div>
						<img src="{{$last['map_image']}}" class="img-responsive">
                    </div>
                    
                </div>
            
            </div>
        	<div class="container-fluid jinru8" style="background:#fdb800">
            </div>
        	<div class="container-fluid jinru9" style="background:#f44321">
            </div>
		</div>
	</div>
    
    
</div>

<ul id="navBar">
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
    <li style="width:auto; height:auto; border-radius:0; background:none; margin-left:-2px; border:0;"><img src="{{URL::asset('/images/logo_xiao.png')}}" class="img-responsive"></li>
</ul>

</body>
<script src="{{URL::asset('/js2/jquery-2.1.1.min.js')}}"></script>
<script src="{{URL::asset('/js2/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('/js2/wow.min.js')}}"></script>
<script src="{{URL::asset('/js2/fullPage.min.js')}}"></script>

<script>
var runPage;
runPage = new FullPage({
	id: 'pageContain',
	slideTime: 500,
	effect: {
		transform: {
			translate: 'Y'
		},
		opacity: [1, 1]
	},
	mode: 'wheel, touch, nav:navBar',
	easing: 'ease'
});
var gomiyang = document.getElementById('daohangimg6');
    gomiyang.onclick = function() {
        runPage.go(7);
    }
    var gomitao = document.getElementById('daohangimg4');
    gomitao.onclick = function() {
        runPage.go(5);
    }
</script>
	<script>
		$(function(){
				var display = $(".di2ping").css("display");
				if(display == "block"){
					$(".logo1").css("display","block");
					}
		})
	</script>
<!-- Vidage init -->
	<script src="{{URL::asset('/js2/Vidage.min.js')}}"></script>
	<script>
		new Vidage('#VidageVideo');
        new Vidage('#VidageVideo2');
	</script>
    

    
<script src="{{URL::asset('/js2/index_js.js')}}"></script>
<script>
    function dodianzan(othis){
        var data = othis.firstChild.getAttribute('value');
        $("#dianzanimg"+data).toggleClass("mibao_dianzan2");
        var ctrldianzan = $("#ctrldianzan").attr('value');
        if(data != ''){
            $.ajax({
                url:"/index/me_bao/dodianzan",
                type:"post",
                data:{'cid':data},
                success:function(content){
                     if(content.msg == 'ok'){
                        var cl = 'clike'+data;
                        var like = $("#"+cl).html();
                        var like = parseInt(like) + 1;
                        var ke = 'ke'+data;
                        $("#"+cl).html(like);
                        $("#"+ke).html(like);
                        $(".dianzanqita"+data).html('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;么&nbsp;&nbsp;么&nbsp;&nbsp;哒&nbsp;&nbsp;!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
                     }else if(content.msg == 'no'){
                        alert('发生未知错误');
                     }
                },
                dataType:"json"
            })
        }
        othis.firstChild.setAttribute('value','');
    }

</script>   
</html>
