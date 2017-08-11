<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">

<title>觅样</title>
<link href="{{URL::asset('/css_yd/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css_yd/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css_yd/index.css')}}" rel="stylesheet" type="text/css">



</head>

<body>


    <!--侧滑导航-->
    @include('yd_daohang');


<div class="container-fluid">

	<div class="row wow animated fadeInDown"><img src="{{URL::asset('/images_yd/index_tiao.png')}}" class="img-responsive" style="width:100%"></div>
	<div class="row wow animated fadeInDown" style="text-align:center;"><a href="/"><img src="{{URL::asset('/images_yd/logo.png')}}" class="img-responsive" style="margin:40px 0; display:inline-block"></a></div>
    
    <!--轮播-->
    <div class="row wow animated fadeInDown">
    
    	<div id="myCarousel" class="carousel slide pad_010 b_k" data-ride="carousel">
             <!-- 轮播（Carousel）指标 -->
             <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
             </ol>   
             <!-- 轮播（Carousel）项目 -->
             <div class="carousel-inner bor_btm">
                  <div class="item active">
				      <div class="index_banner1">
                      </div>
                  </div>
                  <div class="item">
				      <div class="index_banner2">
                      </div>
                  </div>
                  <div class="item">
				      <div class="index_banner3">
                      </div>
                  </div>
             </div>
        </div>

    </div>
    
    
    <!--导航-->
    <div class="row index_daohangwenzi wow animated fadeInDown">
    	<div class="col-xs-4">
        	<a href="/index/me_wen"><img src="{{URL::asset('/images_yd/daohangwenzi_1.png')}}" class="img-responsive"></a>
        </div>
    	<div class="col-xs-4">
        	<a href="/index/me_xiu"><img src="{{URL::asset('/images_yd/daohangwenzi_2.png')}}" class="img-responsive"></a>
        </div>
    	<div class="col-xs-4" style="border:0">
        	<a href="/index/me_shang"><img src="{{URL::asset('/images_yd/daohangwenzi_3.png')}}" class="img-responsive"></a>
        </div>
    </div>
    <div class="row index_daohangwenzi wow animated fadeInDown">
    	<div class="col-xs-4">
        	<a href="javascript:;" onclick="alert('店铺装修中,敬请期待')"><img src="{{URL::asset('/images_yd/daohangwenzi_4.png')}}" class="img-responsive"></a>
        </div>
    	<div class="col-xs-4">
        	<a href="/index/me_bao"><img src="{{URL::asset('/images_yd/daohangwenzi_5.png')}}" class="img-responsive"></a>
        </div>
    	<div class="col-xs-4" style="border:0">
        	<a href="/index/me_young"><img src="{{URL::asset('/images_yd/daohangwenzi_6.png')}}" class="img-responsive"></a>
        </div>
    </div>
    
    
    <!--觅闻-->
    <div class="row index_bt_miwen wow animated fadeInDown">觅&nbsp;&nbsp;&nbsp;闻</div>
    <div class="row index_miwen">
        @foreach($me_wen as $value)
        <a href="/index/me_wen/cover/{{$value->id}}">
        	<div class="col-xs-12">
            	<div class="col-xs-3 wow animated fadeInDown"><img src="{{$value->little_pic}}" class="img-responsive"></div>
            	<div class="col-xs-9 wow animated fadeInDown">
                    <h2>{{$value->title}}</h2>
                    {{$value->description}}
                </div>
                <p class="index_xinwen_xiahuaxian wow animated fadeInDown"></p>
            </div>
        </a>
        @endforeach
    	<div class="col-xs-12 index_miwen_more wow animated fadeInDown">
			<a href="/index/me_wen">查看更多</a>
        </div>
    </div>
    
    
    <!--觅秀-->
    <div class="row index_bt_mixiu wow animated fadeInDown">觅&nbsp;&nbsp;&nbsp;秀</div>
    @foreach($me_xiu_video as $value)
    <div class="modal fade" id="picc{{$value->id}}" style="background:rgba(17,99,150,.6)">
        <a href="javascript:;" class="index_mibao_tanchu_fanhu" data-dismiss="modal"><img src="{{URL::asset('/images_yd/close.png')}}" class="img-responsive"></a>
        <div class="container" style="position:relative; height:100vh" id="mibao_xinxi">
            <div class="modal-dialog mibao_mengceng">
                <div class="row">

                    <video controls preload="none" style="width:100%">
                      <source src="{{$value->video_path}}" type="video/mp4">
                    </video>

                </div>
            
            </div>
        </div>
    </div>
    @endforeach

    <div class="row index_mixiu">
        @foreach($me_xiu_video as $value)
		<div class="col-xs-12 wow animated fadeInDown">
        	<div class="thumbnail">
                <a href="#" data-toggle="modal" data-target="#picc{{$value->id}}">
                	<div class="bofangceng">
                        <img src="{{$value->video_pic_path}}" class="img-responsive"><span><img src="{{URL::asset('/images_yd/mixiu_bofang.png')}}" class="img-responsive"></span>
                    </div>
                </a>
 				<p class="index_mixiu_spbt">{{$value->video_title}}</p>           
 				<p class="index_mixiu_spnr">{{$value->video_descrip}}</p>           
            </div>
        </div>
        @endforeach
    	<div class="col-xs-12 index_mixiu_more wow animated fadeInDown">
			<a href="/index/me_xiu">查看更多</a>
        </div>
    </div>


    <!--觅尚-->
    <div class="row index_bt_mishang wow animated fadeInDown">觅&nbsp;&nbsp;&nbsp;尚</div>
    <div class="row index_mishang">
        @foreach($me_shang_magazine as $value)
        <a href="/index/me_shang/cover/{{$value->id}}">
    		<div class="col-xs-12 wow animated fadeInDown">
            	<div class="thumbnail col-xs-12 index_mishang_dadiv">
    				<div class="col-xs-6"><img src="{{$value->magazine_path}}" class="img-responsive"></div>
    				<div class="col-xs-6">
                        <span class="index_mishang_mengceng"></span>
                        <img src="{{$value->magazine_path}}" class="img-responsive">
                        <div class="index_mishang_zazhijianjie">
                        	<img src="{{URL::asset('/images_yd/logohei.png')}}" class="img-responsive">
                            <p>{{$value->magazine_theme}}</p>
                            <p style="text-align:left">{{$value->magazine_index}}</p>
                            <p style="margin-top:2vh">{{$value->date}}</p>
                            <p>{{$value->volume}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endforeach

    	<div class="col-xs-12 index_mishang_more wow animated fadeInDown">
			<a href="/index/me_shang">查看更多</a>
        </div>
    </div>


    <!--觅宝-->
    <div class="row index_bt_mibao wow animated fadeInDown">觅&nbsp;&nbsp;&nbsp;宝</div>
    <div class="row index_mibao">
        @foreach($me_bao as $key => $value)
		<div class="col-xs-12 wow animated fadeInDown">
            @foreach($value as $k => $v)
        	<a href="#" data-toggle="modal" data-target="#picmc{{$v->id}}">
            	<div class="col-xs-6 index_mibao_dadiv">
    				<img src="{{$v->picture}}" class="img-responsive">
                    <div class="index_mibao_xihuan"><p><img src="{{URL::asset('/images_yd/particle-2.png')}}" class="img-responsive"><span id="ke{{$v->id}}">{{$v->like}}<span></p></div>
                </div>
            </a>
            @endforeach
        </div>
        @endforeach
        @foreach($bao as $ke => $va)
        <div class="modal fade" id="picmc{{$va->id}}" style="background:rgba(49,218,153,.6)">
        	<a href="javascript:;" class="index_mibao_tanchu_fanhu" data-dismiss="modal"><img src="{{URL::asset('/images_yd/close.png')}}" class="img-responsive"></a>
            <div class="container" style="position:relative; height:100vh" id="mibao_xinxi">
                <div class="modal-dialog mibao_mengceng">
					<div class="row">
                    	<div class="col-xs-12 index_mibao_xinxi_datu"><img src="{{$va->picture_big}}" class="img-responsive" style="width:100%"></div>
                    	<div class="col-xs-12">
                        	<div class="col-xs-12" style=" background:#fff; padding:0; padding-bottom:2vh">
                                <p class="index_mibao_mengceng_bt">
                                    <img src="{{URL::asset('/images_yd/particle-2.png')}}" class="img-responsive"><span id="clike{{$va->id}}">{{$va->like}}</span>
                                    <a class="index_mibao_dianzan_btn" onclick="dodianzan(this)" style="cursor:pointer"><input type="hidden" name="hidden" value="{{$va->id}}"/>给我点赞,么么哒<img src="{{URL::asset('/images_yd/particle-2.png')}}" class="img-responsive index_mibao_dianzan_xin{{$va->id}}"></a>
                                </p>
                                <div class="index_mibao_xinxi">
                                	<div class="col-xs-6"><label>姓名：</label>{{$va->name}}</div>
                                	<div class="col-xs-6"><label>性别：</label>{{$va->sex}}</div>
                                	<div class="col-xs-6"><label>年龄：</label>{{$va->age}}</div>
                                	<div class="col-xs-6"><label>地区：</label>{{$va->region}}</div>
<!--                                 	<div class="col-xs-6">商品购买></div>
                                	<div class="col-xs-6">更多搭配></div>
                                	<div class="col-xs-6">淘宝市场>></div> -->
                                </div>
                            </div>
                            
                        </div>
                    </div>
				
                </div>
            </div>
        </div>
        @endforeach          

    	<div class="col-xs-12 index_mibao_more wow animated fadeInDown">
			<a href="/index/me_bao">查看更多</a>
        </div>
    </div>


	<!--底部-->
	<div class="row wow animated fadeInDown index_dibu">
    	© 2006-2016 北京华艺卓尔文化传媒有限公司
        <a href="javascript:;" id="toTop" title="回到顶部"></a><img src="{{URL::asset('/images_yd/top.png')}}" class="img-responsive" id="top_huojian">
    </div>
	
    
</div>       



</body>
<script src="{{URL::asset('/js_yd/jquery-2.1.1.min.js')}}"></script>
<script src="{{URL::asset('/js_yd/bootstrap.min.js')}}"></script>

<script src="{{URL::asset('/js_yd/xin/jgestures.min.js')}}"></script>


<script>
$(document).ready(function(){
    //手势右滑 回到上一个画面
    $('#myCarousel').bind('swiperight swiperightup swiperightdown',function(){
        $("#myCarousel").carousel('prev');
    })
    //手势左滑 进入下一个画面
    $('#myCarousel').bind('swipeleft swipeleftup swipeleftdown',function(){
        $("#myCarousel").carousel('next');
    })
})
</script>


<script src="{{URL::asset('/js_yd/wow.min.js')}}"></script>
<script src="{{URL::asset('/js_yd/index_js.js')}}"></script>
<script>
    function dodianzan(othis){
        var data = othis.firstChild.getAttribute('value');
        $(".index_mibao_dianzan_xin"+data).toggle();
        if(data != ''){
            $.ajax({
                url:"/me_bao/dodianzan",
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
<script>
    function logout(){
        if(confirm('确认退出登录?') == false){
            return false;
        }else{
            location.href = "/index/logout";
        }
    }
</script>
<style>
    .index_banner1{width:100%; height:30vh; background:url({{$banner_wen['banner_path']}}) no-repeat center center; background-size:cover}
    .index_banner2{width:100%; height:30vh; background:url({{$banner_xiu['banner_path']}}) no-repeat center center; background-size:cover}
    .index_banner3{width:100%; height:30vh; background:url({{$banner_bao['banner_path']}}) no-repeat center center; background-size:cover}
</style> 
</html>
