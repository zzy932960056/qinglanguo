// JavaScript Document
/*首页*/


$(function(){
	
    new WOW().init();

	$("#anniu_ceng1").mouseenter(function(){
		$("#anniu_tu1").attr("src",$("#anniu_tu1").attr("src")=="../../images/anniu.png"?"../../images/anniu_1.gif":"../../images/anniu_cha.gif");
		})
	$("#anniu_ceng1").mouseleave(function(){
		$("#anniu_tu1").attr("src",$("#anniu_tu1").attr("src")=="../../images/anniu_cha.gif"?"../../images/anniu_cha.png":"../../images/anniu.png");
		})
		
	
	$("#anniu_ceng1").click(function(){
		$("#anniu_tu1").attr("src",$("#anniu_tu1").attr("src")=="../../images/anniu_cha.gif"?"../../images/anniu_1.gif":"../../images/anniu_cha.gif");
		})
		
	$("#daohangli1").mouseenter(function(){
		$(".sidenav").css("background","#2781b7");
		})
	$("#daohangli1").mouseleave(function(){
		$(".sidenav").css("background","#fddd35");
		})
		
	$("#daohangli2").mouseenter(function(){
		$(".sidenav").css("background","#f44321");
		})
	$("#daohangli2").mouseleave(function(){
		$(".sidenav").css("background","#fddd35");
		})
		
	$("#daohangli3").mouseenter(function(){
		$(".sidenav").css("background","#e23c7b");
		})
	$("#daohangli3").mouseleave(function(){
		$(".sidenav").css("background","#fddd35");
		})
		
	$("#daohangli4").mouseenter(function(){
		$(".sidenav").css("background","#ff6d60");
		})
	$("#daohangli4").mouseleave(function(){
		$(".sidenav").css("background","#fddd35");
		})
		
	$("#daohangli5").mouseenter(function(){
		$(".sidenav").css("background","#32da99");
		})
	$("#daohangli5").mouseleave(function(){
		$(".sidenav").css("background","#fddd35");
		})
		
	$("#daohangli6").mouseenter(function(){
		$(".sidenav").css("background","#51d4e1");
		})
	$("#daohangli6").mouseleave(function(){
		$(".sidenav").css("background","#fddd35");
		})
		
		
		
		
	$("#weixin").click(function(){
		$(".weixin").removeClass("wu");
		$(".weixin").removeClass("fadeOutUp");
		$(".weixin").addClass("fadeInDown");
		$(".weibo,.taobao,.youxiang,.qq").addClass("wu");
		})	
		
	$(".tanchu_close_weixin").click(function(){
		$(".weixin").removeClass("fadeInDown");
		$(".weixin").addClass("fadeOutUp");

		})	
		
	$("#qq").click(function(){
		$(".qq").removeClass("wu");
		$(".qq").removeClass("fadeOutUp");
		$(".qq").addClass("fadeInDown");
		$(".weibo,.taobao,.youxiang,.weixin").addClass("wu");
		})	
		
	$(".tanchu_close_qq").click(function(){
		$(".qq").removeClass("fadeInDown");
		$(".qq").addClass("fadeOutUp");

		})	
		
		
	$("#weibo").click(function(){
		$(".weibo").removeClass("wu");
		$(".weibo").removeClass("fadeOutUp");
		$(".weibo").addClass("fadeInDown");
		$(".qq,.taobao,.youxiang,.weixin").addClass("wu");
		})	
		
	$(".tanchu_close_weibo").click(function(){
		$(".weibo").removeClass("fadeInDown");
		$(".weibo").addClass("fadeOutUp");

		})	
		
		
	$("#taobao").click(function(){
		$(".taobao").removeClass("wu");
		$(".taobao").removeClass("fadeOutUp");
		$(".taobao").addClass("fadeInDown");
		$(".weibo,.qq,.youxiang,.weixin").addClass("wu");
		})	
		
	$(".tanchu_close_taobao").click(function(){
		$(".taobao").removeClass("fadeInDown");
		$(".taobao").addClass("fadeOutUp");

		})	
		
		
	})
	

/*觅宝二级页*/
$(function(){
	$("#mibao_sousuo").click(function(){
		// $("#mibao_sousuojiantou").attr("src",$("#mibao_sousuojiantou").attr("src")=="../../images/xiajiantou.png"?"../../images/youjiantou.png":"../../images/xiajiantou.png");
		// $("#mibao_sousuo_ss").toggle();
		$(".mibao_sousuo_diqu").slideUp();
		$(".mibao_sousuo_nianling").slideUp();
		$(".mibao_sousuo_zonghe").slideUp();
		$("#mibao_nianling").removeClass("huaguobianda");
		$("#mibao_nan").removeClass("huaguobianda");
		$("#mibao_nv").removeClass("huaguobianda");
		$("#mibao_diqu").removeClass("huaguobianda");
		})
		
	$(".mibao_sousuo_diqu").hide();
	$("#mibao_diqu").click(function(){
		$(".mibao_sousuo_diqu").slideToggle();
		$(".mibao_sousuo_nianling").slideUp();
		$(".mibao_sousuo_zonghe").slideUp();
		$(this).toggleClass("huaguobianda");
		$("#mibao_nianling").removeClass("huaguobianda");
		$("#mibao_nan").removeClass("huaguobianda");
		$("#mibao_nv").removeClass("huaguobianda");
		})
		
	$(".mibao_sousuo_nianling").hide();
	$("#mibao_nianling").click(function(){
		$(".mibao_sousuo_nianling").slideToggle();
		$(".mibao_sousuo_diqu").slideUp();
		$(".mibao_sousuo_zonghe").slideUp();
		$(this).toggleClass("huaguobianda");
		$("#mibao_diqu").removeClass("huaguobianda");
		$("#mibao_nan").removeClass("huaguobianda");
		$("#mibao_nv").removeClass("huaguobianda");
		})
	// $("#mibao_nan").click(function(){
	// 	$(".mibao_sousuo_diqu").slideUp();
	// 	$(".mibao_sousuo_nianling").slideUp();
	// 	$(".mibao_sousuo_zonghe").slideUp();
	// 	$(this).toggleClass("huaguobianda");
	// 	$("#mibao_diqu").removeClass("huaguobianda");
	// 	$("#mibao_nianling").removeClass("huaguobianda");
	// 	$("#mibao_nv").removeClass("huaguobianda");
	// 	})
	// $("#mibao_nv").click(function(){
	// 	$(".mibao_sousuo_diqu").slideUp();
	// 	$(".mibao_sousuo_nianling").slideUp();
	// 	$(".mibao_sousuo_zonghe").slideUp();
	// 	$(this).toggleClass("huaguobianda");
	// 	$("#mibao_diqu").removeClass("huaguobianda");
	// 	$("#mibao_nianling").removeClass("huaguobianda");
	// 	$("#mibao_nan").removeClass("huaguobianda");
	// 	})
		
	$(".mibao_sousuo_zonghe").hide();
	$("#mibao_zonghe").click(function(){
		$(".mibao_sousuo_zonghe").slideToggle();
		$(".mibao_sousuo_nianling").slideUp();
		$(".mibao_sousuo_diqu").slideUp();
		
		$("#mibao_diqu").removeClass("huaguobianda");
		$("#mibao_nianling").removeClass("huaguobianda");
		$("#mibao_nan").removeClass("huaguobianda");
		$("#mibao_nv").removeClass("huaguobianda");
		})


		

	// $("#mibao_dianzan_btn").click(function(){
	// 	$(".mibao_dianzan").toggleClass("mibao_dianzan2")
	// 	})



	$(".nianling_soiusuo1").click(function(){
		$(this).addClass("mibao_sousuo_nianling_huaguo");
		$(".nianling_soiusuo2,.nianling_soiusuo3,.nianling_soiusuo4,.nianling_soiusuo5").removeClass("mibao_sousuo_nianling_huaguo");
		})
	$(".nianling_soiusuo2").click(function(){
		$(this).addClass("mibao_sousuo_nianling_huaguo");
		$(".nianling_soiusuo1,.nianling_soiusuo3,.nianling_soiusuo4,.nianling_soiusuo5").removeClass("mibao_sousuo_nianling_huaguo");
		})
	$(".nianling_soiusuo3").click(function(){
		$(this).addClass("mibao_sousuo_nianling_huaguo");
		$(".nianling_soiusuo1,.nianling_soiusuo2,.nianling_soiusuo4,.nianling_soiusuo5").removeClass("mibao_sousuo_nianling_huaguo");
		})
	$(".nianling_soiusuo4").click(function(){
		$(this).addClass("mibao_sousuo_nianling_huaguo");
		$(".nianling_soiusuo1,.nianling_soiusuo2,.nianling_soiusuo3,.nianling_soiusuo5").removeClass("mibao_sousuo_nianling_huaguo");
		})
	$(".nianling_soiusuo5").click(function(){
		$(this).addClass("mibao_sousuo_nianling_huaguo");
		$(".nianling_soiusuo1,.nianling_soiusuo2,.nianling_soiusuo3,.nianling_soiusuo4").removeClass("mibao_sousuo_nianling_huaguo");
		})

	})





$(function(){

	$("#toTop").click(function(){
		var qiqiu=$("#top_huojian");
			qiqiu.animate({top:'-80vh'},500);
			qiqiu.animate({top:'4vh'},2000);

		setTimeout(function(){
			$("html,body").animate({scrollTop:0},1500);
			return true;
    	},500);

	})
})




$(function(){
	$("#miyang_erji_span1").click(function(){
		$("#miyang_lunbo1").show();
		$("#miyang_lunbo2,#miyang_lunbo3").hide();
		$(this).addClass("huaguobianda");
		$("#miyang_erji_span2,#miyang_erji_span3").removeClass("huaguobianda");
		})

	$("#miyang_erji_span2").click(function(){
		$("#miyang_lunbo2").show();
		$("#miyang_lunbo1,#miyang_lunbo3").hide();
		$(this).addClass("huaguobianda");
		$("#miyang_erji_span1,#miyang_erji_span3").removeClass("huaguobianda");
		})

	$("#miyang_erji_span3").click(function(){
		$("#miyang_lunbo3").show();
		$("#miyang_lunbo2,#miyang_lunbo1").hide();
		$(this).addClass("huaguobianda");
		$("#miyang_erji_span2,#miyang_erji_span1").removeClass("huaguobianda");
		})

})

/*觅闻二级*/
$(function(){
	$("#miwen_erji_btn1").click(function(){
		$("#miwen_erji_mianban1").show();
		$("#miwen_erji_mianban2,#miwen_erji_mianban3").hide();
		$(this).addClass("huaguobianda");
		$("#miwen_erji_btn2,#miwen_erji_btn3").removeClass("huaguobianda");
		})

	$("#miwen_erji_btn2").click(function(){
		$("#miwen_erji_mianban2").show();
		$("#miwen_erji_mianban1,#miwen_erji_mianban3").hide();
		$(this).addClass("huaguobianda");
		$("#miwen_erji_btn1,#miwen_erji_btn3").removeClass("huaguobianda");
		})

	$("#miwen_erji_btn3").click(function(){
		$("#miwen_erji_mianban3").show();
		$("#miwen_erji_mianban1,#miwen_erji_mianban2").hide();
		$(this).addClass("huaguobianda");
		$("#miwen_erji_btn2,#miwen_erji_btn1").removeClass("huaguobianda");
		})
})








