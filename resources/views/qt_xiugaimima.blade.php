<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>修改密码</title>
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

<div class="index_zhuce">
	<a href="/"><img src="{{URL::asset('/images/yellowcha.png')}}" class="img-responsive" style="position:absolute; right:20px; top:20px; width:30px; height:30px; cursor:pointer"></a>
	<a href="/"><img src="{{URL::asset('/images/logo.png')}}" class="img-responsive index_zhuce_logo"></a>
    <form>
    	<label>手机号：</label><input placeholder="请输入您的手机号" id="telphone" name="telphone"><div id="haomachucuo"><img src="{{URL::asset('/images/denglu_1.png')}}" class="img-responsive"><span>哎呦，出错了</span></div><div id="haomazhengque"><img src="{{URL::asset('/images/denglu_2.png')}}" class="img-responsive"><span>恭喜你，正确</span></div><div id="shurushoujihao"><img src="{{URL::asset('/images/denglu_3.png')}}" class="img-responsive"><span>请输入手机号</span></div><br />
    	<label>验证码：</label><input placeholder="请输入验证码" style="width:28%; margin-right:2%" id="shuruyanzhengma" name="verification"><input type="button" value="获取验证码" id="chongshe_btn22"><div id="qingshuru"><img src="{{URL::asset('/images/denglu_3.png')}}" class="img-responsive"><span>请输入验证码</span></div><div id="yanzhengcuowu"><img src="{{URL::asset('/images/denglu_1.png')}}" class="img-responsive"><span>验证码有误</span></div><div id="yanzhengzhengque"><img src="{{URL::asset('/images/denglu_2.png')}}" class="img-responsive"><span>验证正确</span></div><br />
    	<label>新密码：</label><input type="password" placeholder="请输入新的密码" id="upwd" name="upwd"><div id="upwdtishi"><img src="{{URL::asset('/images/denglu_3.png')}}" class="img-responsive"><span>6-16位字母，数字或符号</span></div><div id="upwdqiang"><img src="{{URL::asset('/images/denglu_2.png')}}" class="img-responsive"><span>强：您的密码很安全</span></div><div id="upwdruo"><img src="{{URL::asset('/images/denglu_1.png')}}" class="img-responsive"><span>弱：密码过于简单</span></div><div id="changduyouwu"><img src="{{URL::asset('/images/denglu_1.png')}}" class="img-responsive"><span>密码长度有误</span></div><br />
    	<label>确认新密码：</label><input type="password" placeholder="请再次输入新的密码" id="repwd" name="repwd"><div id="mimabuyizhi"><img src="{{URL::asset('/images/denglu_1.png')}}" class="img-responsive"><span>密码不一致</span></div><div id="mimanull"><img src="{{URL::asset('/images/denglu_1.png')}}" class="img-responsive"><span>密码不能为空</span></div><div id="mimazhengque"><img src="{{URL::asset('/images/denglu_2.png')}}" class="img-responsive"><span>密码正确</span></div><br />
        <input type="hidden" value="" id="code_hid" name="hid"/>
        <input type="button" value="重设密码" id="chongshe_btn">
    </form>
</div>

</body>
<script>
	jQuery(document).ready(function(){
		$("#haomachucuo").hide();
		$("#haomazhengque").hide();
		$("#shurushoujihao").hide();
		$("#qingshuru").hide();
		$("#yanzhengcuowu").hide();
		$("#yanzhengzhengque").hide();
		$("#upwdtishi").hide();
        $("#upwdqiang").hide();
        $("#upwdruo").hide();
        $("#changduyouwu").hide();
        $("#mimabuyizhi").hide();
        $("#mimazhengque").hide();
        $("#mimanull").hide();
    })

    $("#telphone").focus(function(){
    	$("#haomachucuo").hide();
		$("#haomazhengque").hide();
		$("#shurushoujihao").show();
    })

    $("#telphone").blur(function(){
    	var tel= $('#telphone').val();
    	if(!(/^1(3|4|5|7|8|9)\d{9}$/.test(tel))){
			$("#haomachucuo").show();
			$("#haomazhengque").hide();
			$("#shurushoujihao").hide();
        	return false;
		}else{
			var data = {phone: tel};
			$.ajax({
	           url:"/index/selectphone",
	            type:"post",
	            data:data,
	            success:function(content){
	                if(content.msg == 'ok'){
						$("#haomachucuo").hide();
						$("#haomazhengque").show();
						$("#shurushoujihao").hide();
				        return true;
	                }else if(content.msg == 'no'){
						$("#haomachucuo").show();
						$("#haomazhengque").hide();
						$("#shurushoujihao").hide();
				        return false;
	                }
	            },
	            dataType:"json"
			})
		}	

    })



    $("#chongshe_btn22").click(function(){
		var phone = $('#telphone').val();
		if(!(/^1(3|4|5|7|8|9)\d{9}$/.test(phone))){
			$("#shuruphone").hide();
			$("#chucuo1").show();
			$("#yizhuce").hide();
        	$("#zhengque1").hide();
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

	$("#shuruyanzhengma").focus(function(){
		$("#qingshuru").show();
		$("#yanzhengcuowu").hide();
		$("#yanzhengzhengque").hide();
	})

	$("#shuruyanzhengma").blur(function(){
		var verification = $('#shuruyanzhengma').val();
		var veri = $("#code_hid").attr('value');
		if(verification == ''){
			$("#qingshuru").hide();
			$("#yanzhengcuowu").hide();
			$("#yanzhengzhengque").hide();
			return false;
		}
		if(verification == veri && verification != ''){
			$("#qingshuru").hide();
			$("#yanzhengcuowu").hide();
			$("#yanzhengzhengque").show();
        	return true;
		}else{
			$("#qingshuru").hide();
			$("#yanzhengcuowu").show();
			$("#yanzhengzhengque").hide();
        	return false;
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
		return true;
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
  