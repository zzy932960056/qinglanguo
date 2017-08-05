$(function() {

	/*轮播图*/
	$('#swiper').swiper({
	    pagination: '#swiper .swiper-pagination',
	    paginationClickable: true,
	    nextButton: '#swiper .swiper-button-next',
	    prevButton: '#swiper .swiper-button-prev',
	    spaceBetween: 30,
	    effect: 'fade'
	 });

/*$(window).resize(function() {*/
  if($(window).width()<768){
  			$('.swiper').swiper({
			    pagination: '.swiper .swiper-pagination',
			    slidesPerView: 1,
			    paginationClickable: true,
			    spaceBetween: 30,
		    	keyboardControl: true,
			    nextButton: '.swiper .swiper-button-next',
			    prevButton: '.swiper .swiper-button-prev',
			 });
			$('#swiper1').swiper({
			    pagination: '#swiper1 .swiper-pagination',
			    slidesPerView: 1,
			    paginationClickable: true,
			    spaceBetween: 30,
		    	keyboardControl: true,
			    nextButton: '#swiper1 .swiper-button-next',
			    prevButton: '#swiper1 .swiper-button-prev',
			 });
			$('#swiper2').swiper({
			    pagination: '#swiper2 .swiper-pagination',
			    slidesPerView: 1,
			    paginationClickable: true,
			    spaceBetween: 30,
		    	keyboardControl: true,
			    nextButton: '#swiper2 .swiper-button-next',
			    prevButton: '#swiper2 .swiper-button-prev',
			 });
			$('#swiper3').swiper({
			    pagination: '#swiper3 .swiper-pagination',
			    slidesPerView: 1,
			    paginationClickable: true,
			    spaceBetween: 30,
		    	keyboardControl: true,
			    nextButton: '#swiper3 .swiper-button-next',
			    prevButton: '#swiper3 .swiper-button-prev',
			 });
			$('#swiper4').swiper({
			    pagination: '#swiper4 .swiper-pagination',
			    slidesPerView: 1,
			    paginationClickable: true,
			    spaceBetween: 30,
		    	keyboardControl: true,
			    nextButton: '#swiper4 .swiper-button-next',
			    prevButton: '#swiper4 .swiper-button-prev',
			 });
			$('#swiper5').swiper({
			    pagination: '#swiper5 .swiper-pagination',
			    slidesPerView: 1,
			    paginationClickable: true,
			    spaceBetween: 30,
		    	keyboardControl: true,
			    nextButton: '#swiper5 .swiper-button-next',
			    prevButton: '#swiper5 .swiper-button-prev',
			 });
			$('#swiper6').swiper({
			    pagination: '#swiper6 .swiper-pagination',
			    slidesPerView: 1,
			    paginationClickable: true,
			    spaceBetween: 30,
		    	keyboardControl: true,
			    nextButton: '#swiper6 .swiper-button-next',
			    prevButton: '#swiper6 .swiper-button-prev',
			 });
	}else{
		$('#swiper1').swiper({
			    pagination: '#swiper1 .swiper-pagination',
			    slidesPerView: 5,
			    paginationClickable: true,
			    spaceBetween: 30,
		    	keyboardControl: true,
			    nextButton: '#swiper1 .swiper-button-next',
			    prevButton: '#swiper1 .swiper-button-prev',
			 });
		$('#swiper2').swiper({
			    pagination: '#swiper2 .swiper-pagination',
			    slidesPerView: 5,
			    paginationClickable: true,
			    spaceBetween: 30,
		    	keyboardControl: true,
			    nextButton: '#swiper2 .swiper-button-next',
			    prevButton: '#swiper2 .swiper-button-prev',
			 });
			$('#swiper3').swiper({
			    pagination: '#swiper3 .swiper-pagination',
			    slidesPerView: 5,
			    paginationClickable: true,
			    spaceBetween: 30,
		    	keyboardControl: true,
			    nextButton: '#swiper3 .swiper-button-next',
			    prevButton: '#swiper3 .swiper-button-prev',
			 });
			$('#swiper4').swiper({
			    pagination: '#swiper4 .swiper-pagination',
			    slidesPerView: 5,
			    paginationClickable: true,
			    spaceBetween: 30,
		    	keyboardControl: true,
			    nextButton: '#swiper4 .swiper-button-next',
			    prevButton: '#swiper4 .swiper-button-prev',
			 });
			$('#swiper5').swiper({
			    pagination: '#swiper5 .swiper-pagination',
			    slidesPerView: 5,
			    paginationClickable: true,
			    spaceBetween: 30,
		    	keyboardControl: true,
			    nextButton: '#swiper5 .swiper-button-next',
			    prevButton: '#swiper5 .swiper-button-prev',
			 });
			$('#swiper6').swiper({
			    pagination: '#swiper6 .swiper-pagination',
			    slidesPerView: 5,
			    paginationClickable: true,
			    spaceBetween: 30,
		    	keyboardControl: true,
			    nextButton: '#swiper6 .swiper-button-next',
			    prevButton: '#swiper6 .swiper-button-prev',
			 });
	}
/*})*/

	


		/*二维码显示隐藏*/

	    $(".weixin").mouseenter(function () {
	        $(".erweima").show();
	        $(".weixin-wrap .triangle").show();
	    });

	    $(".weixin").mouseleave(function () {
	        $(".erweima").delay(500).hide(0);
	        $(".weixin-wrap .triangle").delay(500).hide(0);
	    });
	    $(".erweima").mouseenter(function () {
	        $(".erweima").show(0);
	        $(".weixin-wrap .triangle").show(0);
	    });
	    $(".erweima").mouseleave(function () {
	        $(".erweima").hide(0);
	        $(".weixin-wrap .triangle").hide(0);
	    });





	    $(".s-code").mouseenter(function () {
	        $(".b-code").show();
	    });

	    $(".s-code").mouseleave(function () {
	        $(".b-code").delay(500).hide(0);
	    });
	    $(".b-code").mouseenter(function () {
	        $(".b-code").show(0);
	    });
	    $(".b-code").mouseleave(function () {
	        $(".b-code").hide(0);
	    });

	    /*返回顶部*/
		var url = window.location.toString();
		var id = url.split("#")[1];
		if(id) {
			var t = $("#"+id).offset().top;
			$('html, body').animate({scrollTop:t}, 800);
		}

	   $(".to-top").click(function(e) {
		   //以1秒的间隔返回顶部
		  // $('body,html').animate({scrollTop:0}, 1200);
		   // 设置计时器，50毫秒间隔；
		   timer = setInterval(function(){
			   var toTop = document.body.scrollTop || document.documentElement.scrollTop;
			   // 设置速度，用等式而不用具体数值是为了产生缓动效果；
			   var speed = Math.ceil(toTop/5);
			   // 作差，产生缓动效果；
			   document.documentElement.scrollTop = document.body.scrollTop = toTop - speed;
			   // 重置布尔值判断；
			   isTop = true;
			   // 判断是否抵达顶部，若是，停止计时器；
			   if (toTop == 0) {
				   clearInterval(timer);
			   };
		   },50);
	   });

	 	 $(".swiper-img-wrap").mouseenter(function () {
	       $(this).find(".renwu-info").find('.hide').slideDown();
	    });
	    $(".swiper-img-wrap").mouseleave(function () {
	       $(this).find(".renwu-info").find('.hide').slideUp();
	    });


	    /*checkbox选择变化*/
	    $(".check-wrap").on("click",function(){
			if($(this).find("input").is(":checked")){
				$(this).addClass('check-wrap1')
			}else{
				$(this).removeClass('check-wrap1')
			}
		})


	    /*登录的显示和隐藏*/
	    $('.close-btn').click(function(){
	    	$('.loginform').hide();
	    	$('.set-pwd').hide();
	    	$('.mask').hide();
	    })
	    $('.mask').click(function(){
	    	$('.loginform').hide();
	    	$('.mask').hide();
	    })

	     $('.login').click(function(){
	    	$('.loginform').show();
	    	$('.mask').show();
	    })

	     $('.back-login').click(function(){
	     	$('.set-pwd').hide();
	    	$('.loginform').show();
	    	
	    })

	     $('#forget-passwd').click(function(){
	     	$('.loginform').hide();
	    	$('.set-pwd').show();
	    	
	    })


		$('.re-login').click(function(){
	    	$('.loginform').show();
	    	$('.set-pwd').hide();
	    })


		/*邀请列表的显示和隐藏*/
		$('.shopping-cart').click(function(){
	    	$('.yq-list-wrap').show();
	    	$('.mask').show();
	    })

		 $('.close-btn').click(function(){
	    	$('.yq-list-wrap').hide();
	    	$('.mask').hide();
	    })
		  $('.qx-yq').click(function(){
	    	$(this).parent().remove()
	    })
	    $('.mask').click(function(){
	    	$('.yq-list-wrap').hide();
	    	$('.mask').hide();
	    })

	     /*  搜索*/
        //
	     //$('.search-txt').click(function(){
	     //	$(this).addClass('m-hide')
	     //	$('.search').removeClass('m-hide')
	     //})
		//$('.search-close1').click(function(){
		//	$('.search').addClass('m-hide')
		//	$('.search-txt').removeClass('m-hide');
		//})


		//login
		$('.login-btn').bind('click', function (e) {
			e.stopPropagation();
            var  phone = $('.username').val();
            var  password = $('.password').val();
			console.log(phone);
            console.log(password);
            if(!(/^1(3|4|5|7|8|9)\d{9}$/.test(phone))){
                $(".alert-wrap p").html("手机号码格式不对哦！");
                return false;
            } else {
                $("alert-wrap p").html("");
			}

            if (password.length <= 0) {
                $(".alert-wrap p").html("请输入密码！");
                return false;
            } else {
                $("alert-wrap p").html("");
			}

			var data = {phone:phone, password: password};
			$.ajax({type: 'POST',
				url: '/user/login',
				data: data,
                dataType : 'json',
				success: function(ret) {
                    location.reload();
				},
				error: function(error) {
                    var err = JSON.parse(error.responseText);
					showTip(err.msg);
                    //$(".alert-wrap p").html(err.msg);
                }

			});

			return false;

        });

    	var ticket = '';
		$('#get-code').click(function () {
			var $this = $(this);
            var phone = $('#reset-phone').val();
            if(!(/^1(3|4|5|7|8|9)\d{9}$/.test(phone))) {
                alert('手机号格式错误');
                return false;
            }
            var data = {phone:phone, type:3};
			var time = null;
			var textDjs = $this.text();
			if (textDjs == '获取验证码') {
				$.ajax({
					type: 'POST',
					url: '/sms/code',
					data: data,
					dataType: 'json',
					success: function (ret) {
						console.log(ret);
						ticket = ret.ticket;
						console.log(ticket);

					},
					error: function (error) {
						var err = JSON.parse(error.responseText);
						alert(err.msg);
					}

				});
				var num = 60;
				clearInterval(time);
				time = setInterval(function () {
					if (num) {
						$this.text(num + 's');
						num--;
					} else {
						clearInterval(time);
						$this.text('获取验证码');
					}
				}, 1000);
			}
        });


	    $('.reset-btn').click(function () {
            var phone = $('#reset-phone').val();
            var code = $('#reset-phone-code').val();
            var pwd1 = $('.pwd1').val();
            var pwd2 = $('.re-pwd').val();
            if (phone.length == 0) {
            	showTip1('请输入手机号');
            	return false;
			}
			if (code.length == 0) {
                showTip1('请输入验证码');
                return false;
			}
            if (pwd1.length == 0) {
                showTip1('请输入密码');
                return false;
            }
            if (pwd1 != pwd2) {
                showTip1('两次密码不一致');
                return false;
            }

            var data = {phone:phone, ticket:ticket, code: code, password:pwd1, re_password:pwd2};
            $.ajax({type: 'POST',
                url: '/user/reset_password',
                data: data,
                dataType : 'json',
                success: function(ret) {
                    alert('修改密码成功');
					$('.set-pwd').hide();
					$('.loginform').show();
                },
                error: function(error) {
                    var err = jQuery.parseJSON(error.responseText);
                    alert(err.msg);
                }

            });


	    });

	function showTip(msg) {
		$(".alert-wrap p").html(msg);
		$(".alert-wrap").fadeIn(1000, function () {
			$(this).fadeOut(2000);
		})
	}


	function showTip1(msg) {
            $(".alert-wrap1 p").html(msg);
            $(".alert-wrap1").fadeIn(500, function () {
				$(this).fadeOut(2000);
            })
        }




});