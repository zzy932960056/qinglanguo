$(function() {

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
				url: 'login.php',
				data: data,
                dataType : 'json',
				success: function(ret) {
                    location.reload();
				},
				error: function(error) {
                    var err = jQuery.parseJSON(error.responseText);
                    $(".alert-wrap p").html(err.msg);
                }

			});

			return false;

        });

    	var ticket = '';
		$('#get-code').click(function () {
            var phone = $('#reset-phone').val();
            console.log(phone);
            if(!(/^1(3|4|5|7|8|9)\d{9}$/.test(phone))) {
                alert('手机号格式错误');
                return false;
            }
            var data = {phone:phone, type:3};
            $.ajax({type: 'POST',
                url: 'sms.php',
                data: data,
                dataType : 'json',
                success: function(ret) {
            		console.log(ret);
                    ticket = ret.ticket;
                    console.log(ticket);

                },
                error: function(error) {
                    var err = jQuery.parseJSON(error.responseText);
                    alert(err.msg);
                }

            });

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
                url: '/reset_password',
                data: data,
                dataType : 'json',
                success: function(ret) {
                    alert('修改密码成功，请返回登录');

                },
                error: function(error) {
                    var err = jQuery.parseJSON(error.responseText);
                    alert(err.msg);
                }

            });


	    });

	    function showTip1(msg) {
            $(".alert-wrap1 p").html(msg);
            $(".alert-wrap1").fadeIn(1000, function () {
				$(this).fadeOut(2000);
            })
        }

});