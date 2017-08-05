$(function(){
	/*轮播图*/
	$('#swiper').swiper({
	    pagination: '#swiper .swiper-pagination',
	    paginationClickable: true,
	    nextButton: '#swiper .swiper-button-next',
	    prevButton: '#swiper .swiper-button-prev',
	    spaceBetween: 30,
	    effect: 'fade'
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



 	$(window).scroll(function() {
	  	if($(window).scrollTop()> 800){
	   		$('.to-top').show()
	  	}else{
	  		$('.to-top').hide()
	  	}
	});
})