$(function(){
	scrollEffect();

	// $('.ic-hover-thumbnail.sm').hover(
	// 	function(e){
	// 		var url = $(this).css('background-image');
	// 		console.log(url);
	// 		$('.ic-hover-thumbnail.lg').css('background-image', url);
	// 	},
	// 	function(e){
	// 		console.log('hover out!');
	// 	}
	// );
})

$(window).scroll(function () {
	scrollEffect();
});

function scrollEffect() {
	var scrollTop = $(this).scrollTop();
	var windowH = $(window).height();
	// console.log('windowH: ' + windowH + ', scrollTop: ' + scrollTop);
	if (scrollTop >= windowH) {
		$('#page').addClass('fixed');
	}
	else {
		$('#page').removeClass('fixed');
	}

	if ($('#frameLogo')[0]) {
		var sWidth = 330;
		var eWidth = 170;
		var limit = windowH * 0.5 + 115;
		if (scrollTop >= limit) {
			$('#mainLogo').parent().parent().addClass('hidden');
			// $('#frameLogo').parent().parent().removeClass('hidden');
			$('#frameLogo').removeClass('hidden');
			
		}
		else {
			$('#mainLogo').parent().parent().removeClass('hidden');
			// $('#frameLogo').parent().parent().addClass('hidden');
			$('#frameLogo').addClass('hidden');
			var width = (eWidth - sWidth) / limit * scrollTop + sWidth;
			$('#mainLogo').css('width', width);
		}
	}
	
	
}



$(function(){
		
		
	$("#toTop").mouseleave(function(){
		$("#index_shandian_yuan").attr("src","images/shandian_yuan.png")
		})
		
		
	})
	

//首页品牌案例
$(function(){
	$("#index_ppal_da2,#index_ppal_da3,#index_ppal_da4,#index_ppal_da5").hide();
	$("#index_ppal_xiao1").click(function(){
		$("#index_ppal_xiao1 span").addClass("index_ppal_xuanxiangka_span_hei");
		$("#index_ppal_xiao2 span,#index_ppal_xiao3 span,#index_ppal_xiao4 span,#index_ppal_xiao5 span").removeClass("index_ppal_xuanxiangka_span_hei");
		$("#index_ppal_da1").show();
		$("#index_ppal_da2,#index_ppal_da3,#index_ppal_da4,#index_ppal_da5").hide();
		})		
	$("#index_ppal_xiao2").click(function(){
		$("#index_ppal_xiao2 span").addClass("index_ppal_xuanxiangka_span_hei");
		$("#index_ppal_xiao1 span,#index_ppal_xiao3 span,#index_ppal_xiao4 span,#index_ppal_xiao5 span").removeClass("index_ppal_xuanxiangka_span_hei");
		$("#index_ppal_da2").show();
		$("#index_ppal_da1,#index_ppal_da3,#index_ppal_da4,#index_ppal_da5").hide();
		})		
	$("#index_ppal_xiao3").click(function(){
		$("#index_ppal_xiao3 span").addClass("index_ppal_xuanxiangka_span_hei");
		$("#index_ppal_xiao2 span,#index_ppal_xiao1 span,#index_ppal_xiao4 span,#index_ppal_xiao5 span").removeClass("index_ppal_xuanxiangka_span_hei");
		$("#index_ppal_da3").show();
		$("#index_ppal_da2,#index_ppal_da1,#index_ppal_da4,#index_ppal_da5").hide();
		})		
	$("#index_ppal_xiao4").click(function(){
		$("#index_ppal_xiao4 span").addClass("index_ppal_xuanxiangka_span_hei");
		$("#index_ppal_xiao2 span,#index_ppal_xiao3 span,#index_ppal_xiao1 span,#index_ppal_xiao5 span").removeClass("index_ppal_xuanxiangka_span_hei");
		$("#index_ppal_da4").show();
		$("#index_ppal_da2,#index_ppal_da3,#index_ppal_da1,#index_ppal_da5").hide();
		})		
	$("#index_ppal_xiao5").click(function(){
		$("#index_ppal_xiao5 span").addClass("index_ppal_xuanxiangka_span_hei");
		$("#index_ppal_xiao2 span,#index_ppal_xiao3 span,#index_ppal_xiao4 span,#index_ppal_xiao1 span").removeClass("index_ppal_xuanxiangka_span_hei");
		$("#index_ppal_da5").show();
		$("#index_ppal_da2,#index_ppal_da3,#index_ppal_da4,#index_ppal_da1").hide();
		})		
		
	})
	

//首页匠几动态
	
$(function(){
	$("#index_jjdt_da2,#index_jjdt_da3,#index_jjdt_da4,#index_jjdt_da5").hide();
	$("#index_jjdt_xiao1").click(function(){
		$("#index_jjdt_xiao1 span").addClass("index_ppal_xuanxiangka_span_hei");
		$("#index_jjdt_xiao2 span,#index_jjdt_xiao3 span,#index_jjdt_xiao4 span,#index_jjdt_xiao5 span").removeClass("index_ppal_xuanxiangka_span_hei");
		$("#index_jjdt_da1").show();
		$("#index_jjdt_da2,#index_jjdt_da3,#index_jjdt_da4,#index_jjdt_da5").hide();
		})		
	$("#index_jjdt_xiao2").click(function(){
		$("#index_jjdt_xiao2 span").addClass("index_ppal_xuanxiangka_span_hei");
		$("#index_jjdt_xiao1 span,#index_jjdt_xiao3 span,#index_jjdt_xiao4 span,#index_jjdt_xiao5 span").removeClass("index_ppal_xuanxiangka_span_hei");
		$("#index_jjdt_da2").show();
		$("#index_jjdt_da1,#index_jjdt_da3,#index_jjdt_da4,#index_jjdt_da5").hide();
		})		
	$("#index_jjdt_xiao3").click(function(){
		$("#index_jjdt_xiao3 span").addClass("index_ppal_xuanxiangka_span_hei");
		$("#index_jjdt_xiao2 span,#index_jjdt_xiao1 span,#index_jjdt_xiao4 span,#index_jjdt_xiao5 span").removeClass("index_ppal_xuanxiangka_span_hei");
		$("#index_jjdt_da3").show();
		$("#index_jjdt_da2,#index_jjdt_da1,#index_jjdt_da4,#index_jjdt_da5").hide();
		})		
	$("#index_jjdt_xiao4").click(function(){
		$("#index_jjdt_xiao4 span").addClass("index_ppal_xuanxiangka_span_hei");
		$("#index_jjdt_xiao2 span,#index_jjdt_xiao3 span,#index_jjdt_xiao1 span,#index_jjdt_xiao5 span").removeClass("index_ppal_xuanxiangka_span_hei");
		$("#index_jjdt_da4").show();
		$("#index_jjdt_da2,#index_jjdt_da3,#index_jjdt_da1,#index_jjdt_da5").hide();
		})		
	$("#index_jjdt_xiao5").click(function(){
		$("#index_jjdt_xiao5 span").addClass("index_ppal_xuanxiangka_span_hei");
		$("#index_jjdt_xiao2 span,#index_jjdt_xiao3 span,#index_jjdt_xiao4 span,#index_jjdt_xiao1 span").removeClass("index_ppal_xuanxiangka_span_hei");
		$("#index_jjdt_da5").show();
		$("#index_jjdt_da2,#index_jjdt_da3,#index_jjdt_da4,#index_jjdt_da1").hide();
		})		
		
	})
	
	
	
	
//首页右上弹出	
$(function(){
	$("#index_youshang_tan").hide();
	$(".index_youshang").click(function(){
		$("#index_youshang_tan").show();
		$(".index_youshang_tan").animate({top:"17vh"},1800);
		$("html").toggleClass("html_qcgdt")
		})
	$(".index_youshang_tan_cha").click(function(){
		$("#index_youshang_tan").hide();
		$("html").removeClass("html_qcgdt");
		$(".index_youshang_tan").animate({top:"0vh"});
		$("#youshang_deng").attr({"src":"http://static.meyoungbaby.com/dengpao1.png"})
		})

	$("#you2").mouseenter(function(){
		$("#youshang_deng").attr("src",$("#youshang_deng").attr("src")=="http://static.meyoungbaby.com/dengpao1.png"?"http://static.meyoungbaby.com/56.gif":"http://static.meyoungbaby.com/56.gif");
		})



	$("#you2").click(function(){
		$("#youshang_deng").attr("src",$("#youshang_deng").attr("src")=="http://static.meyoungbaby.com/56.gif"?"http://static.meyoungbaby.com/55.gif":"http://static.meyoungbaby.com/56.gif");
		})
})
	
	

//首页匠几团队弹出	
$(function(){
	$(".index_tuandui_tan_cha").click(function(){
		$(".jjtd_tanchu_hei").css("display","none");
		$("html").css("overflow","auto")
		})
})
	
	
	
	
	
	
	


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
			$("#you2").css("display","block")  
        } else {
            $('#toTop').fadeOut();
			$("#you2").css("display","none")  
        }

				
    });

	

	$("#toTop").click(function(){
		var qiqiu=$("#index_totop");
			qiqiu.animate({bottom:'40vh'},500);
			qiqiu.animate({bottom:'10vh'},2000);
		setTimeout(function(){
			$("html,body").animate({scrollTop:0},1500);
			return false;
    	},500);
		

})
})

$(function(){

	$("#toTop2").click(function(){
		var qiqiu=$("#index_totop2");
			qiqiu.animate({bottom:'20vh'},500);
			qiqiu.animate({bottom:'-60px'},2000);
		setTimeout(function(){
			$("html,body").animate({scrollTop:0},1500);
			return false;
    	},500);
		

})

})



	$(function(){
			$("#jjdt_span1").click(function(){
				$("#jjdt_span1 i").addClass("jjdt_zhuti_biaoqian_xian_active");
				$("#jjdt_span2 i").removeClass("jjdt_zhuti_biaoqian_xian_active");
				$("#jjdt_span3 i").removeClass("jjdt_zhuti_biaoqian_xian_active");
				$("#jjdt_span4 i").removeClass("jjdt_zhuti_biaoqian_xian_active");
				$("#jjdt_zhuti_mian1").show();
				$("#jjdt_zhuti_mian2,#jjdt_zhuti_mian3,#jjdt_zhuti_mian4").hide();
				})
			$("#jjdt_span2").click(function(){
				$("#jjdt_span2 i").addClass("jjdt_zhuti_biaoqian_xian_active");
				$("#jjdt_span1 i").removeClass("jjdt_zhuti_biaoqian_xian_active");
				$("#jjdt_span3 i").removeClass("jjdt_zhuti_biaoqian_xian_active");
				$("#jjdt_span4 i").removeClass("jjdt_zhuti_biaoqian_xian_active");
				$("#jjdt_zhuti_mian2").show();
				$("#jjdt_zhuti_mian1,#jjdt_zhuti_mian3,#jjdt_zhuti_mian4").hide();
				})
			$("#jjdt_span3").click(function(){
				$("#jjdt_span3 i").addClass("jjdt_zhuti_biaoqian_xian_active");
				$("#jjdt_span2 i").removeClass("jjdt_zhuti_biaoqian_xian_active");
				$("#jjdt_span1 i").removeClass("jjdt_zhuti_biaoqian_xian_active");
				$("#jjdt_span4 i").removeClass("jjdt_zhuti_biaoqian_xian_active");
				$("#jjdt_zhuti_mian3").show();
				$("#jjdt_zhuti_mian2,#jjdt_zhuti_mian1,#jjdt_zhuti_mian4").hide();
				})
			$("#jjdt_span4").click(function(){
				$("#jjdt_span4 i").addClass("jjdt_zhuti_biaoqian_xian_active");
				$("#jjdt_span2 i").removeClass("jjdt_zhuti_biaoqian_xian_active");
				$("#jjdt_span1 i").removeClass("jjdt_zhuti_biaoqian_xian_active");
				$("#jjdt_span3 i").removeClass("jjdt_zhuti_biaoqian_xian_active");
				$("#jjdt_zhuti_mian4").show();
				$("#jjdt_zhuti_mian2,#jjdt_zhuti_mian1,#jjdt_zhuti_mian3").hide();
				})







			$("#jjdt_zhuti_fenye_span1").click(function(){
				$(this).addClass("jjdt_zhuti_fenye_span")
				$("#jjdt_zhuti_fenye_span2,#jjdt_zhuti_fenye_span3,#jjdt_zhuti_fenye_span4,#jjdt_zhuti_fenye_span5").removeClass("jjdt_zhuti_fenye_span")
				})
			$("#jjdt_zhuti_fenye_span2").click(function(){
				$(this).addClass("jjdt_zhuti_fenye_span")
				$("#jjdt_zhuti_fenye_span1,#jjdt_zhuti_fenye_span3,#jjdt_zhuti_fenye_span4,#jjdt_zhuti_fenye_span5").removeClass("jjdt_zhuti_fenye_span")
				})
			$("#jjdt_zhuti_fenye_span3").click(function(){
				$(this).addClass("jjdt_zhuti_fenye_span")
				$("#jjdt_zhuti_fenye_span2,#jjdt_zhuti_fenye_span1,#jjdt_zhuti_fenye_span4,#jjdt_zhuti_fenye_span5").removeClass("jjdt_zhuti_fenye_span")
				})
			$("#jjdt_zhuti_fenye_span4").click(function(){
				$(this).addClass("jjdt_zhuti_fenye_span")
				$("#jjdt_zhuti_fenye_span2,#jjdt_zhuti_fenye_span3,#jjdt_zhuti_fenye_span1,#jjdt_zhuti_fenye_span5").removeClass("jjdt_zhuti_fenye_span")
				})
			$("#jjdt_zhuti_fenye_span5").click(function(){
				$(this).addClass("jjdt_zhuti_fenye_span")
				$("#jjdt_zhuti_fenye_span2,#jjdt_zhuti_fenye_span3,#jjdt_zhuti_fenye_span4,#jjdt_zhuti_fenye_span1").removeClass("jjdt_zhuti_fenye_span")
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
	















