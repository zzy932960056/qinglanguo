<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">

<title>觅宝</title>
<link href="{{URL::asset('/css_yd/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css_yd/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css_yd/index.css')}}" rel="stylesheet" type="text/css">



</head>

<body>
<?php error_reporting(0); ?>

    <!--侧滑导航-->
    
    @include('yd_daohang');


<div class="container-fluid" style="margin-top:-20px;">

	<div class="row wow animated fadeInDown"><img src="{{URL::asset('/images_yd/mibao_tiao.png')}}" class="img-responsive" style="width:100%"></div>
	<div class="row wow animated fadeInDown" style="position:relative">
        <a href="/"><img src="{{URL::asset('/images_yd/logo.png')}}" class="img-responsive" style="margin:40px auto"></a>
        <div class="sousuo_btn"><img src="{{URL::asset('/images_yd/sousuo_btn.png')}}" class="img-responsive" style="cursor:pointer"><span style="cursor:pointer">搜索</span></div>
    </div>
    <div class="row mibao_sousuoceng">
			<form action="/index/me_bao/select_children" method="post">
            	<div class="col-xs-12">
                    <div class="col-xs-3">
                        <label>性别：</label>
                    </div>
                    <div class="col-xs-9">
                        <input type="radio" value="1" checked="checked" name="sex"><span>男宝</span><input type="radio" value="2" name="sex"><span>女宝</span>
                    </div>
                </div>
            	<div class="col-xs-12">
                    <div class="col-xs-3">
                        <label>年龄：</label>
                    </div>
                    <div class="col-xs-9">
                        <select style="margin-bottom:0" name="age">
                             <option value="1">0~3</option>
                             <option value="2">4~6</option>
                             <option value="3">7~9</option>
                             <option value="4">10~12</option>
                             <option value="5">13~15</option>
                        </select>
                    </div>
                </div>
            	<div class="col-xs-12" style="margin-bottom:4vh">
                    <div class="col-xs-3">
                        <label>地区：</label>
                    </div>
                    <div class="col-xs-9">
                       <select name="area" class="liandong1">
                            <option value="0">请选择</option>
                            <option value="1">华东</option>
                            <option value="2">华南</option>
                            <option value="3">中南</option>
                            <option value="4">东北</option>
                            <option value="5">西南</option>
                            <option value="6">华北</option>
                            <option value="7">西北</option>
                            <option value="8">其他</option>
                            <option value="9">海外</option>
                       </select>
                       <select name="province" class="liandong2">
                            <option value="0">请选择省</option>
                       </select>
                       <select name="city" class="liandong3">
                            <option value="0">请选择市</option>
                       </select>
                    </div>
                </div>
            	<div class="row" style="position:absolute; left:0; right:0; bottom:0; margin-top:4vh">
                   <button type="submit" class="mibao_sousuo_zonghe_btn">搜&nbsp;&nbsp;&nbsp;索</button>
				</div>
                
            </form>
    </div>
    

    <!--觅宝-->
    <div class="row index_mibao" style="margin-top:2vh; min-height:95vh;">
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
            <a href="javascript:;" class="index_mibao_tanchu_fanhu" data-dismiss="modal"><img src="{{URL::asset('/images_yd/video_close.png')}}" class="img-responsive"></a>
            <div class="container" style="position:relative; height:100vh" id="mibao_xinxi">
                <div class="modal-dialog mibao_mengceng">
                    <div class="row">
                        <div class="col-xs-12 index_mibao_xinxi_datu"><img src="{{$va->picture_big}}" class="img-responsive" style="width:100%"></div>
                        <div class="col-xs-12">
                            <div class="col-xs-12" style=" background:#fff; padding:0;">
                                <p class="index_mibao_mengceng_bt">
                                    <img src="{{URL::asset('/images_yd/particle-2.png')}}" class="img-responsive"><span id="clike{{$va->id}}">{{$va->like}}</span>
                                    <a class="index_mibao_dianzan_btn" onclick="dodianzan(this)" style="cursor:pointer"><input type="hidden" name="hidden" value="{{$va->id}}"/>给我点赞,么么哒<img src="{{URL::asset('/images_yd/particle-2.png')}}" class="img-responsive index_mibao_dianzan_xin{{$va->id}}"></a>
                                </p>
                                <div class="index_mibao_xinxi">
                                    <div class="col-xs-6"><label>姓名：</label>{{$va->name}}</div>
                                    <div class="col-xs-6"><label>性别：</label>{{$va->sex}}</div>
                                    <div class="col-xs-6"><label>年龄：</label>{{$va->age}}</div>
                                    <div class="col-xs-6"><label>地区：</label>{{$va->region}}</div>
<!--                                    <div class="col-xs-6">商品购买></div>
                                    <div class="col-xs-6">更多搭配></div>
                                    <div class="col-xs-6">淘宝市场>></div> -->
                                </div>
                            </div>
                            <div class="col-xs-12" style="background:#fff">
                                <img src="{{URL::asset('/images_yd/huaban.gif')}}" class="img-responsive">
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        @endforeach         

    </div>




	<!--底部-->
	<div class="row wow animated fadeInDown index_dibu" style="background:#36bca7">
    	© 2006-2017 北京华艺卓尔文化传媒有限公司
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

    $(".liandong1").bind('change',function(){
        var $n = $(this).nextAll("select");
        $n.each(function() {
            this.options.length=1;
        })
        var $this = $(this);
        var $area = $this.val();
        if($area<=0) {
            return;
        }
        $.ajax({
                url:"/index/liandong",
                type:"post",
                data:{'cid':$area},
                success:function(content){
                     if(content){
                        var data = eval(content);
                        for(var i=0;i<data.length;i++){
                            $this.next().append('<option value="'+data[i]['province_id']+'">'+data[i]['province_name']+'</option>');
                        }
                     }
                },
                dataType:"json"
            })

    })

    $(".liandong2").bind('change',function(){
        var $n = $(this).nextAll("select");
        $n.each(function() {
            this.options.length=1;
        })
        var $this = $(this);
        var $province = $this.val();
        if($province<=0) {
            return;
        }
        $.ajax({
                url:"/index/liandong2",
                type:"post",
                data:{'cid':$province},
                success:function(content){
                     if(content){
                        var data = eval(content);
                        console.log(data);
                        for(var i=0;i<data.length;i++){
                            $this.next().append('<option value="'+data[i]['city_id']+'">'+data[i]['city_name']+'</option>');
                        }
                     }
                },
                dataType:"json"
            })

    })
</script> 
</html>
