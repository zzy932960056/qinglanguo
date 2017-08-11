// JavaScript Document
/*首页*/


$(function(){
	
    new WOW().init();
    
	$("#html").click(function(){
	$("html").toggleClass('html');
	})	

	$("#anniu_ceng1").click(function(){
        $("#anniu_tu1").attr("src",$("#anniu_tu1").attr("src")=="http://ogqtpampu.bkt.clouddn.com/daohang_btn_cha.png"?"http://ogqtpampu.bkt.clouddn.com/daohang_btn.png":"http://ogqtpampu.bkt.clouddn.com/daohang_btn_cha.png");
    })	
	
	
	// $(".index_mibao_dianzan_btn").click(function(){
	// 	$(".index_mibao_dianzan_xin").toggle()
	// 	})	
		
		
	$("#mibao_diqu").click(function(){
		$(this).toggleClass("huaguobianda");
		$("#mibao_nianling").removeClass("huaguobianda");
		$("#mibao_nan").removeClass("huaguobianda");
		$("#mibao_nv").removeClass("huaguobianda");
		
		$("#miwen_mianban1").show();
		$("#miwen_mianban2,#miwen_mianban3").hide();
		})
		
	$("#mibao_nianling").click(function(){
		$(this).toggleClass("huaguobianda");
		$("#mibao_diqu").removeClass("huaguobianda");
		$("#mibao_nan").removeClass("huaguobianda");
		$("#mibao_nv").removeClass("huaguobianda");
		
		$("#miwen_mianban2").show();
		$("#miwen_mianban1,#miwen_mianban3").hide();
		})
	$("#mibao_nan").click(function(){
		$(this).toggleClass("huaguobianda");
		$("#mibao_diqu").removeClass("huaguobianda");
		$("#mibao_nianling").removeClass("huaguobianda");
		$("#mibao_nv").removeClass("huaguobianda");
		
		$("#miwen_mianban3").show();
		$("#miwen_mianban2,#miwen_mianban1").hide();
		})
	$(".sousuo_btn").click(function(){
		$(".mibao_sousuoceng").slideToggle();
		})	
		
		
	})
	




$(function(){

	$("#toTop").click(function(){
		var qiqiu=$("#top_huojian");
			qiqiu.animate({top:'-80vh'},500);
			qiqiu.animate({top:'1vh'},2000);

		setTimeout(function(){
			$("html,body").animate({scrollTop:0},1500);
			return true;
    	},500);

	})
})













