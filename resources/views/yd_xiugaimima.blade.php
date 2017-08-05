<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">

<title>修改密码</title>
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
        	<a href="/index/login" style="color:#999 !important">◁&nbsp;&nbsp;返回登录</a>
        </div>
        <div class="col-xs-12 denglu_bd">
            <form>
                <input type="text" placeholder="请输入手机号" id="telphone" name="telphone">
                <div class="col-xs-12 zhuce_yanzheng" style="padding:0">
                	<input type="text" placeholder="输入验证码" id="shuruyanzhengma" name="verification">
                    <input type="button" value="获取验证码" class="zhuce_yanzheng_btn" id="chongshe_btn22">
                </div>
                
                <input type="password" placeholder="请输入新密码" id="upwd" name="upwd">
                <input type="password" placeholder="请确认新密码" id="repwd" name="repwd">
                <input type="hidden" value="" id="code_hid" name="hid"/>
                <div class="col-xs-12" style=" padding:0; margin-bottom:7vh; margin-top:4vh">
                    <input type="button" value="确认修改" class="denglu_btn_denglu" id="chongshe_btn">
                </div>
            </form>
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
<script>
    $("#telphone").blur(function(){
        var tel= $('#telphone').val();
         if(tel == ''){
            return false;
        }else{
            if(!(/^1(3|4|5|7|8|9)\d{9}$/.test(tel))){
                alert('请输入正确手机号码');
                return false;
            }else{
                var data = {phone: tel};
                $.ajax({
                   url:"/index/selectphone",
                    type:"post",
                    data:data,
                    success:function(content){
                        if(content.msg == 'ok'){
                            return true;
                        }else if(content.msg == 'no'){
                            alert('手机号未注册,请注册');
                            return false;
                        }
                    },
                    dataType:"json"
                })
            }   
        }
    })

    $("#chongshe_btn22").click(function(){
        var phone = $('#telphone').val();
        if(!(/^1(3|4|5|7|8|9)\d{9}$/.test(phone))){
            alert('请输入正确手机号码');
            return false;
        }else if(phone == ''){
            return false;
        }
        var data = {phone: phone};
        var $this = $(this);
        var time = null;
        var textDjs = $this.attr('value');
        if(textDjs == '获取验证码'){
            $.ajax({
                url:"/sms/forget/code",
                type:"post",
                data:data,
                success:function(content){
                    if(content.msg == 'ok'){
                        var cod = content.cod;
                        $("#code_hid").attr('value',cod);
                    }else if(content.msg == 'no'){
                        alert('验证码发送失败');
                    }
                },
                // error:function(data){
                //  console.log(data);
                //  alert(data);
                // },
                dataType:"json"
            })
            var num = 60;
            clearInterval(time);
            time = setInterval(function(){
                if (num) {
                    $this.attr('value',num + 's');
                    num --;
                }else {
                    clearInterval(time);
                    $this.attr('value','获取验证码');
                }
            }, 1000);
        }
    });

    $("#shuruyanzhengma").blur(function(){
        var verification = $('#shuruyanzhengma').val();
        var veri = $("#code_hid").attr('value');
        if(verification == ''){
            return false;
        }
        if(verification == veri && verification != ''){
            return true;
        }else{
            alert('验证有误');
            return false;
        }
    })

     $("#upwd").blur(function(){
        var upwd= $('#upwd').val();
        var len = $(this).val().length;
        if(upwd == ''){
            return false;
        }else if(len < 6 || len >16){
            alert('密码长度有误');
            return false;
        }
    })

    $('#repwd').blur(function(){
        var repwd = $("#repwd").val();
        var upwd = $("#upwd").val();
        if(upwd != '' && repwd == ''){
            alert('密码不能为空');
            return false;
        }else if(repwd != upwd){
            alert('密码不一致');
            return false;
        }else{
            return true;
        }
    })

    $("#chongshe_btn").click(function(){
        var data = $("form").serialize();
        $.ajax({
            url:"/index/dopwdupdate",
            type:"post",
            data:data,
            success:function(content){
                if(content.msg == 'ok'){
                    window.location.href = "/index/login";
                }else if(content.msg == 'no'){
                    window.location.href = "/index/forgetpass";
                }
            },
            dataType:"json"
        })
    })


</script>

<script src="{{URL::asset('/js_yd/wow.min.js')}}"></script>
<script src="{{URL::asset('/js_yd/index_js.js')}}"></script>
    
</html>
