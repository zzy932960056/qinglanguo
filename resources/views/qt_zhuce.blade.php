<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>觅样注册</title>
<link href="{{URL::asset('/css2/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css2/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css2/index.css')}}" rel="stylesheet" type="text/css">
<script src="{{URL::asset('/js2/jquery-2.1.1.min.js')}}"></script>
<script src="{{URL::asset('/js2/index_js.js')}}"></script>
<script src="{{URL::asset('/js2/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('/js2/wow.min.js')}}"></script>
</head>

<body>

<div class="index_zhuce">
	<a href="/"><img src="{{URL::asset('/images/yellowcha.png')}}" class="img-responsive" style="position:absolute; right:20px; top:20px; width:30px; height:30px; cursor:pointer"></a>
	<a href="/"><img src="{{URL::asset('/images/logo.png')}}" class="img-responsive index_zhuce_logo"></a>
    <form>
    	<label>手机号</label><input type="text" name="uphone" id="uphone" placeholder="请输入手机号"><div id="shuruphone"><img src="{{URL::asset('/images/denglu_3.png')}}" class="img-responsive"><span>请输入11位手机号码</span></div><div id="chucuo1"><img src="{{URL::asset('/images/denglu_1.png')}}" class="img-responsive"><span>哎呦，出错了</span></div><div id="yizhuce"><img src="{{URL::asset('/images/denglu_1.png')}}" class="img-responsive"><span>该手机号已注册</span></div><div id="zhengque1"><img src="{{URL::asset('/images/denglu_2.png')}}" class="img-responsive"><span>恭喜你，正确</span></div><br />
    	<label>密码</label><input type="password" name="upwd" placeholder="请输入密码" id="upwd"><div id="upwdtishi"><img src="{{URL::asset('/images/denglu_3.png')}}" class="img-responsive"><span>6-16位字母，数字或符号</span></div><div id="upwdqiang"><img src="{{URL::asset('/images/denglu_2.png')}}" class="img-responsive"><span>强：您的密码很安全</span></div><div id="upwdruo"><img src="{{URL::asset('/images/denglu_1.png')}}" class="img-responsive"><span>弱：密码过于简单</span></div><div id="changduyouwu"><img src="{{URL::asset('/images/denglu_1.png')}}" class="img-responsive"><span>密码长度有误</span></div><br />
    	<label>确认密码</label><input type="password" name="reupwd" placeholder="再次输入密码" id="repwd"><div id="mimabuyizhi"><img src="{{URL::asset('/images/denglu_1.png')}}" class="img-responsive"><span>密码不一致</span></div><div id="mimanull"><img src="{{URL::asset('/images/denglu_1.png')}}" class="img-responsive"><span>密码不能为空</span></div><div id="mimazhengque"><img src="{{URL::asset('/images/denglu_2.png')}}" class="img-responsive"><span>密码正确</span></div><br />
    	<label>验证码</label><input style="width:28%; margin-right:2%" type="text" name="verification" placeholder="请输入验证码" id="verification"><input type="button" value="获取验证码" id="zhuce_btn2"><div id="yanzhengcuowu"><img src="{{URL::asset('/images/denglu_1.png')}}" class="img-responsive"><span>验证码有误</span></div><div id="yanzhengzhengque"><img src="{{URL::asset('/images/denglu_2.png')}}" class="img-responsive"><span>验证正确</span></div><br />
        <input type="hidden" value="" id="code_hid" name="hid"/>
        <input type="button" value="立即注册" id="zhuce_btn"><br />
    </form>
</div>

</body>
<script>
	jQuery(document).ready(function(){
		$("#shuruphone").hide();
        $("#chucuo1").hide();
        $("#yizhuce").hide();
        $("#zhengque1").hide();
        $("#upwdtishi").hide();
        $("#upwdqiang").hide();
        $("#upwdruo").hide();
        $("#changduyouwu").hide();
        $("#mimabuyizhi").hide();
        $("#mimazhengque").hide();
        $("#mimanull").hide();
        $("#yanzhengzhengque").hide();
        $("#yanzhengcuowu").hide();
    })

    $("#uphone").focus(function(){
    	$("#shuruphone").show();
    	$("#chucuo1").hide();
        $("#yizhuce").hide();
        $("#zhengque1").hide();
    })

    $("#uphone").blur(function(){
		var tel= $('#uphone').val();
		if(!(/^1(3|4|5|7|8|9)\d{9}$/.test(tel))){
			$("#shuruphone").hide();
			$("#chucuo1").show();
			$("#yizhuce").hide();
        	$("#zhengque1").hide();
        	return false;
		}else{
			var data = {phone: tel};
			$.ajax({
	            url:"/index/register/phone",
	            type:"post",
	            data:data,
	            success:function(content){
	                if(content.msg == 'ok'){
                		$("#shuruphone").hide();
				        $("#chucuo1").hide();
				        $("#yizhuce").hide();
				        $("#zhengque1").show();
				        return true;
	                }else if(content.msg == 'no'){
	                    $("#shuruphone").hide();
				        $("#chucuo1").hide();
				        $("#yizhuce").show();
				        $("#zhengque1").hide();
				        return false;
	                }
	            },
	            dataType:"json"
	        })
		}
	})

	$("#upwd").focus(function(){
		$("#upwdtishi").show();
        $("#upwdqiang").hide();
        $("#upwdruo").hide();
        $("#changduyouwu").hide();
	})

	$('#upwd').keyup(function(){
		var mediumRegex = new RegExp("^(?=.{6,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
		var enoughRegex = new RegExp("(?=.{6,}).*", "g");
		if(false == enoughRegex.test($(this).val())){
			$("#upwdtishi").show();
	        $("#upwdqiang").hide();
	        $("#upwdruo").hide();
	        $("#changduyouwu").hide();
		}else if(mediumRegex.test($(this).val())){
			$("#upwdtishi").hide();
	        $("#upwdqiang").show();
	        $("#upwdruo").hide();
	        $("#changduyouwu").hide();
		}else{
			$("#upwdtishi").hide();
	        $("#upwdqiang").hide();
	        $("#upwdruo").show();
	        $("#changduyouwu").hide();
		}
		var len = $(this).val().length;
		if(len>16){
			$("#upwdtishi").hide();
	        $("#upwdqiang").hide();
	        $("#upwdruo").hide();
	        $("#changduyouwu").show();
	        return false;
		}
		if($(this).val() == ''){
			return false;
		}
	})

	$("#repwd").blur(function(){
		var repwd = $("#repwd").val();
		var upwd = $("#upwd").val();
		if(repwd != upwd){
	        $("#mimabuyizhi").show();
	        $("#mimazhengque").hide();
	        $("#mimanull").hide();
	        return false;
		}else if(repwd == ''){
	        $("#mimabuyizhi").hide();
	        $("#mimazhengque").hide();
	        $("#mimanull").show();
	        return false;
		}else{
	        $("#mimabuyizhi").hide();
	        $("#mimazhengque").show();
	        $("#mimanull").hide();
	        return true;
		}
	})

	$("#zhuce_btn2").click(function(){
		var pass1 = $("#upwd").val();
		var re_pass = $("#repwd").val();
		if(pass1 == ''){
			return false;
		}else if(re_pass == ''){
			return false;
		}
		if (pass1 != re_pass) {
			return false;
		}
		var phone = $('#uphone').val();
		if(!(/^1(3|4|5|7|8|9)\d{9}$/.test(phone))){
			$("#shuruphone").hide();
			$("#chucuo1").show();
			$("#yizhuce").hide();
        	$("#zhengque1").hide();
        	return false;
		}
		var data = {phone: phone};
		var $this = $(this);
		var time = null;
		var textDjs = $this.attr('value');
 		if(textDjs == '获取验证码'){
 			$.ajax({
	            url:"/sms/code",
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
	            // 	console.log(data);
	            // 	alert(data);
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

	$("#verification").blur(function(){
		var verification = $("#verification").val();
		var veri = $("#code_hid").attr('value');
		if(verification == ''){
			$("#yanzhengzhengque").hide();
        	$("#yanzhengcuowu").hide();
        	return false;
		}
		if(verification == veri && verification != ''){
			$("#yanzhengzhengque").show();
        	$("#yanzhengcuowu").hide();
        	return true;
		}else{
			$("#yanzhengzhengque").hide();
        	$("#yanzhengcuowu").show();
        	return false;
		}
	})


	$("#zhuce_btn").click(function(){
		var data = $("form").serialize();
		$.ajax({
            url:"/index/doregister",
            type:"post",
            data:data,
            success:function(content){
                if(content.msg == 'ok'){
                	window.location.href = "/index/regsuccess";
                }else if(content.msg == 'no'){
                  	window.location.href = "/index/register";
                }
            },
            dataType:"json"
        })
	})




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
  