<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>觅样登录</title>
<link rel="shortcut icon" href="{{URL::asset('/images/meyoung.ico')}}">
<link rel="Bookmark" href="{{URL::asset('/images/meyoung.ico')}}">
<link href="{{URL::asset('/css2/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css2/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css2/index.css')}}" rel="stylesheet" type="text/css">
<script src="{{URL::asset('/js2/jquery-2.1.1.min.js')}}"></script>
<script src="{{URL::asset('/js2/index_js.js')}}"></script>
<script src="{{URL::asset('/js2/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('/js2/wow.min.js')}}"></script>
</head>

<body>

<div class="index_denglu">
    <a href="/"><img src="{{URL::asset('/images/yellowcha.png')}}" class="img-responsive" style="position:absolute; right:20px; top:20px; width:30px; height:30px; cursor:pointer"></a>
	<a href="/"><img src="{{URL::asset('/images/logo.png')}}" class="img-responsive index_denglu_logo"></a>
    <form action="" method="post">
    	<input type="text" name="uname" placeholder="请输入手机号"/>
    	<input type="password" name="upwd" style="background:url({{URL::asset('/images/zhuce_2.png')}}) no-repeat 2%;" placeholder="请输入密码"/>
        <p style="height:5vh; position:relative">
            <input type="checkbox" class="denglu_chk" name="remember_me"><span class="denglu_chk_span"><span></span></span>
            <span style=" position:absolute; left:3.5vh; top:0.2vh; font-size:14px; color:#666">记住我</span>
            <a href="/index/forgetpass"><span style=" position:absolute; right:0; top:0.2vh; font-size:14px; color:#666">忘记密码</span></a>
        </p>
        <input type="button" value="登陆" onclick="sendRequest()" class="denglu_btn">
        <p class="denglu_tiaozhuan">还没有账号？<a href="/index/register">立即注册！</a></p>
    </form>
</div>

</body>
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
<style>
body {
background-image:url({{URL::asset('/images/dengluzhucebg.png')}});
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
background-color: #464646;
}
</style>
</html>
