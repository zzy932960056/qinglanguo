$(function(){
	
    new WOW().init();

	$("#html").click(function(){
		$("html").toggleClass('html');
		if($("html").hasClass("html")){
			$("body").on("touchmove",function(event){
			event.preventDefault;
			}, false)
		}else{
			$("body").off("touchmove");
			}
		})	
	
	$("#anniu_ceng1").click(function(){
		$("#anniu_tu1").attr("src",$("#anniu_tu1").attr("src")=="http://static.meyoungbaby.com/daohanganniu.png"?"http://static.meyoungbaby.com/daohanganniu_cha.png":"http://static.meyoungbaby.com/daohanganniu.png");

		})
		
	$(".index_mibao_dianzan_btn").click(function(){
		$(".index_mibao_dianzan_xin").toggle()
		})	
	
		$("#index_dengpao_anniu").click(function(){
		$(".dengpaoceng").toggle();
		$("html").toggleClass('html');
		if($("html").hasClass("html")){
			$("body").on("touchmove",function(event){
			event.preventDefault;
			}, false)
		}else{
			$("body").off("touchmove");
			}
		})
	$(".dengpaoceng_cha").click(function(){
		$(".dengpaoceng").hide();
		$("html").toggleClass('html');
		if($("html").hasClass("html")){
			$("body").on("touchmove",function(event){
			event.preventDefault;
			}, false)
		}else{
			$("body").off("touchmove");
			}
		})	

	})


/*首页匠几服务*/

/*首页匠几动态*/
$(function(){
	$("#index_jjdt2,#index_jjdt3,#index_jjdt4").hide();
	
	$("#index_jjdt_chufa1").click(function(){
		$("#index_jjdt1").show();
		$("#index_jjdt2,#index_jjdt3,#index_jjdt4").hide();
		})
	$("#index_jjdt_chufa2").click(function(){
		$("#index_jjdt2").show();
		$("#index_jjdt1,#index_jjdt3,#index_jjdt4").hide();
		})
	$("#index_jjdt_chufa3").click(function(){
		$("#index_jjdt3").show();
		$("#index_jjdt2,#index_jjdt1,#index_jjdt4").hide();
		})
	$("#index_jjdt_chufa4").click(function(){
		$("#index_jjdt4").show();
		$("#index_jjdt2,#index_jjdt3,#index_jjdt1").hide();
		})


	})




/*匠几动态页*/
$(function(){
	$("#jjdt_zhuti2,#jjdt_zhuti3,#jjdt_zhuti4").hide();
	
	$("#jjdt_chufa1").click(function(){
		$("#jjdt_zhuti1").show();
		$("#jjdt_chufa1 span").addClass("jjdt_2_span_active");
		$("#jjdt_chufa4 span,#jjdt_chufa2 span,#jjdt_chufa3 span").removeClass("jjdt_2_span_active");
		$("#jjdt_zhuti2,#jjdt_zhuti3,#jjdt_zhuti4").hide();
		})
	$("#jjdt_chufa2").click(function(){
		$("#jjdt_zhuti2").show();
		$("#jjdt_chufa2 span").addClass("jjdt_2_span_active");
		$("#jjdt_chufa1 span,#jjdt_chufa4 span,#jjdt_chufa3 span").removeClass("jjdt_2_span_active");
		$("#jjdt_zhuti1,#jjdt_zhuti3,#jjdt_zhuti4").hide();
		})
	$("#jjdt_chufa3").click(function(){
		$("#jjdt_zhuti3").show();
		$("#jjdt_chufa3 span").addClass("jjdt_2_span_active");
		$("#jjdt_chufa1 span,#jjdt_chufa2 span,#jjdt_chufa4 span").removeClass("jjdt_2_span_active");
		$("#jjdt_zhuti2,#jjdt_zhuti1,#jjdt_zhuti4").hide();
		})
	$("#jjdt_chufa4").click(function(){
		$("#jjdt_zhuti4").show();
		$("#jjdt_chufa4 span").addClass("jjdt_2_span_active");
		$("#jjdt_chufa1 span,#jjdt_chufa2 span,#jjdt_chufa3 span").removeClass("jjdt_2_span_active");
		$("#jjdt_zhuti2,#jjdt_zhuti3,#jjdt_zhuti1").hide();
		})
	})

$(function(){
		
		
	$("#toTop").mouseleave(function(){
		$("#index_shandian_yuan").attr("src","../../yd_images/shandian_yuan.png")
		})
		
		
	})

/*首页导航、返回顶部*/


$(function(){
	
	
//获取页面的宽和高
var winHeight;

function getWindowSize(){

	//获取窗口高度
	if(window.innerHeight){
		winHeight=window.innerHeight;
		}
	else if((document.body)&&(document.body.clientHeight)){
		winHeight=document.body.clientHeight;
		}
	}
	getWindowSize();

    $(window).scroll(function () {
        if ($(this).scrollTop() > winHeight) {   //scrollTop() 方法返回或设置匹配元素的滚动条的垂直位置。
            $('#toTop').fadeIn();
            $('#toTop').removeClass("fadeOut");
			$("#you2").css("display","block")  
			$(".index_daohang").addClass("fixed_daohang");
			$(".index_daohang_zhezhao").css("display","none")
        } else {
            $('#toTop').fadeOut();
			$("#you2").css("display","none")  
			$(".index_daohang").removeClass("fixed_daohang");
			$(".index_daohang_zhezhao").css("display","block")
        }

    });


})
	$(function(){

		$("#toTop").click(function(){
			var qiqiu=$(".index_dibu_top_guding");
				qiqiu.animate({bottom:'30vh'},500);
				qiqiu.animate({bottom:'15vh'},2000);
			setTimeout(function(){
				$("html,body").animate({scrollTop:0},1500);
				return false;
	    	},500);
	    	
		})
	})

//匠几案例三级
$(function(){
	$("#jjal_sanji_mianban2,#jjal_sanji_mianban3,#jjal_sanji_mianban4,#jjal_sanji_mianban6,#jjal_sanji_mianban7,#jjal_sanji_mianban8,#jjal_sanji_mianban10,#jjal_sanji_mianban11,#jjal_sanji_mianban12,#jjal_sanji_mianban14,#jjal_sanji_mianban15,#jjal_sanji_mianban16,#jjal_sanji_mianban18,#jjal_sanji_mianban19,#jjal_sanji_mianban20").hide();
	$("#jjal_sanji_chufa1").click(function(){
		$("#jjal_sanji_chufa1 span").addClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_chufa2 span,#jjal_sanji_chufa3 span,#jjal_sanji_chufa4 span").removeClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_mianban1").show();
		$("#jjal_sanji_mianban2,#jjal_sanji_mianban3,#jjal_sanji_mianban4").hide();
		})		
	$("#jjal_sanji_chufa2").click(function(){
		$("#jjal_sanji_chufa2 span").addClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_chufa1 span,#jjal_sanji_chufa3 span,#jjal_sanji_chufa4 span").removeClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_mianban2").show();
		$("#jjal_sanji_mianban1,#jjal_sanji_mianban3,#jjal_sanji_mianban4").hide();
		})		
	$("#jjal_sanji_chufa3").click(function(){
		$("#jjal_sanji_chufa3 span").addClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_chufa2 span,#jjal_sanji_chufa1 span,#jjal_sanji_chufa4 span").removeClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_mianban3").show();
		$("#jjal_sanji_mianban2,#jjal_sanji_mianban1,#jjal_sanji_mianban4").hide();
		})		
	$("#jjal_sanji_chufa4").click(function(){
		$("#jjal_sanji_chufa4 span").addClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_chufa2 span,#jjal_sanji_chufa3 span,#jjal_sanji_chufa1 span").removeClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_mianban4").show();
		$("#jjal_sanji_mianban2,#jjal_sanji_mianban3,#jjal_sanji_mianban1").hide();
		})		
	$("#jjal_sanji_chufa5").click(function(){
		$("#jjal_sanji_chufa5 span").addClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_chufa6 span,#jjal_sanji_chufa7 span,#jjal_sanji_chufa8 span").removeClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_mianban5").show();
		$("#jjal_sanji_mianban6,#jjal_sanji_mianban7,#jjal_sanji_mianban8").hide();
		})		
	$("#jjal_sanji_chufa6").click(function(){
		$("#jjal_sanji_chufa6 span").addClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_chufa5 span,#jjal_sanji_chufa7 span,#jjal_sanji_chufa8 span").removeClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_mianban6").show();
		$("#jjal_sanji_mianban5,#jjal_sanji_mianban7,#jjal_sanji_mianban8").hide();
		})		
	$("#jjal_sanji_chufa7").click(function(){
		$("#jjal_sanji_chufa7 span").addClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_chufa5 span,#jjal_sanji_chufa6 span,#jjal_sanji_chufa8 span").removeClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_mianban7").show();
		$("#jjal_sanji_mianban5,#jjal_sanji_mianban6,#jjal_sanji_mianban8").hide();
		})		
	$("#jjal_sanji_chufa8").click(function(){
		$("#jjal_sanji_chufa8 span").addClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_chufa5 span,#jjal_sanji_chufa6 span,#jjal_sanji_chufa7 span").removeClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_mianban8").show();
		$("#jjal_sanji_mianban5,#jjal_sanji_mianban6,#jjal_sanji_mianban7").hide();
		})		

	$("#jjal_sanji_chufa9").click(function(){
		$("#jjal_sanji_chufa9 span").addClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_chufa10 span,#jjal_sanji_chufa11 span,#jjal_sanji_chufa12 span").removeClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_mianban9").show();
		$("#jjal_sanji_mianban10,#jjal_sanji_mianban11,#jjal_sanji_mianban12").hide();
		})		
	$("#jjal_sanji_chufa10").click(function(){
		$("#jjal_sanji_chufa10 span").addClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_chufa9 span,#jjal_sanji_chufa11 span,#jjal_sanji_chufa12 span").removeClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_mianban10").show();
		$("#jjal_sanji_mianban9,#jjal_sanji_mianban11,#jjal_sanji_mianban12").hide();
		})		
	$("#jjal_sanji_chufa11").click(function(){
		$("#jjal_sanji_chufa11 span").addClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_chufa9 span,#jjal_sanji_chufa10 span,#jjal_sanji_chufa12 span").removeClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_mianban11").show();
		$("#jjal_sanji_mianban9,#jjal_sanji_mianban10,#jjal_sanji_mianban12").hide();
		})		
	$("#jjal_sanji_chufa12").click(function(){
		$("#jjal_sanji_chufa12 span").addClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_chufa9 span,#jjal_sanji_chufa10 span,#jjal_sanji_chufa11 span").removeClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_mianban12").show();
		$("#jjal_sanji_mianban9,#jjal_sanji_mianban10,#jjal_sanji_mianban11").hide();
		})		


	$("#jjal_sanji_chufa13").click(function(){
		$("#jjal_sanji_chufa13 span").addClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_chufa14 span,#jjal_sanji_chufa15 span,#jjal_sanji_chufa16 span").removeClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_mianban13").show();
		$("#jjal_sanji_mianban14,#jjal_sanji_mianban15,#jjal_sanji_mianban16").hide();
		})		
	$("#jjal_sanji_chufa14").click(function(){
		$("#jjal_sanji_chufa14 span").addClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_chufa13 span,#jjal_sanji_chufa15 span,#jjal_sanji_chufa16 span").removeClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_mianban14").show();
		$("#jjal_sanji_mianban13,#jjal_sanji_mianban15,#jjal_sanji_mianban16").hide();
		})		
	$("#jjal_sanji_chufa15").click(function(){
		$("#jjal_sanji_chufa15 span").addClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_chufa13 span,#jjal_sanji_chufa14 span,#jjal_sanji_chufa16 span").removeClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_mianban15").show();
		$("#jjal_sanji_mianban13,#jjal_sanji_mianban14,#jjal_sanji_mianban16").hide();
		})		
	$("#jjal_sanji_chufa16").click(function(){
		$("#jjal_sanji_chufa16 span").addClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_chufa13 span,#jjal_sanji_chufa14 span,#jjal_sanji_chufa15 span").removeClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_mianban16").show();
		$("#jjal_sanji_mianban13,#jjal_sanji_mianban14,#jjal_sanji_mianban15").hide();
		})		


	$("#jjal_sanji_chufa17").click(function(){
		$("#jjal_sanji_chufa17 span").addClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_chufa18 span,#jjal_sanji_chufa19 span,#jjal_sanji_chufa20 span").removeClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_mianban17").show();
		$("#jjal_sanji_mianban18,#jjal_sanji_mianban19,#jjal_sanji_mianban20").hide();
		})		
	$("#jjal_sanji_chufa18").click(function(){
		$("#jjal_sanji_chufa18 span").addClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_chufa17 span,#jjal_sanji_chufa19 span,#jjal_sanji_chufa20 span").removeClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_mianban18").show();
		$("#jjal_sanji_mianban17,#jjal_sanji_mianban19,#jjal_sanji_mianban20").hide();
		})		
	$("#jjal_sanji_chufa19").click(function(){
		$("#jjal_sanji_chufa19 span").addClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_chufa17 span,#jjal_sanji_chufa18 span,#jjal_sanji_chufa20 span").removeClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_mianban19").show();
		$("#jjal_sanji_mianban17,#jjal_sanji_mianban18,#jjal_sanji_mianban20").hide();
		})		
	$("#jjal_sanji_chufa20").click(function(){
		$("#jjal_sanji_chufa20 span").addClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_chufa17 span,#jjal_sanji_chufa18 span,#jjal_sanji_chufa19 span").removeClass("jjal_sanji_wenan_span_hei");
		$("#jjal_sanji_mianban20").show();
		$("#jjal_sanji_mianban17,#jjal_sanji_mianban18,#jjal_sanji_mianban19").hide();
		})		

	})
	
