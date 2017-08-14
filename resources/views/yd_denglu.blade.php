<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">

<title>觅样登录</title>
<link href="{{URL::asset('/css_yd/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css_yd/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css_yd/index.css')}}" rel="stylesheet" type="text/css">



</head>

<body>


                
<div class="container-fluid">
	<div class="row wow animated fadeInDown"><img src="{{URL::asset('/images_yd/index_tiao.png')}}" class="img-responsive" style="width:100%"></div>
	<div class="row wow animated fadeInDown" style="margin-top:10vh"><div class="col-xs-6 col-xs-offset-3"><a href="/"><img src="{{URL::asset('/images_yd/logo.png')}}" class="img-responsive" style=" width:100%"></a></div></div>
    
    <div class="row wow animated fadeInDown">
    	<div class="col-xs-12 denglu_btn">
        	<a href="/index/login" style="color:#36bca7 !important">登陆</a><span>|</span><a href="/index/register">注册</a>
        </div>
        <div class="col-xs-12 denglu_bd">
            <form >
                <input type="text" placeholder="请输入手机号" name="uname">
                <input type="password" placeholder="请输入密码" name="upwd">
                <div class="col-xs-12" style="height:5vh; position:relative; width:80%; margin:2vh 0; margin-left:10%; padding:0">
                    <input type="checkbox" class="denglu_chk" name="remember_me"><span class="denglu_chk_span"><span></span></span>
                    <span style=" position:absolute; left:50px; top:-5px; font-size:30px; color:#666">记住我</span>
                    <a href="/index/forgetpass"><span style=" position:absolute; right:0; top:-5px; font-size:30px; color:#666">忘记密码</span></a>
                </div>
                <div class="col-xs-12" style=" padding:0; margin-bottom:15vh">
                    <input type="button" value="登&nbsp;陆" onclick="sendRequest()" class="denglu_btn_denglu">
                </div>
            </form>
        </div>
    </div>




	<!--底部-->
	<div class="row wow animated fadeInDown index_dibu">
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
<script>
    function sendRequest(){
        var data = $("form").serialize();
        $.ajax({
            url:"/index/doLogin",
            type:"post",
            data:data,
            success:function(content){
                if(content.msg == 'ok'){
                   window.location.href = "/";
                }else if(content.msg == 'no'){
                   window.location.href = "/index/login";
                }
            },
            dataType:"json"
        })
    }
</script>

<script src="{{URL::asset('/js_yd/wow.min.js')}}"></script>
<script src="{{URL::asset('/js_yd/index_js.js')}}"></script>
    
</html>
