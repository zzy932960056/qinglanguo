$(function() {

		$('.link-album').click(function(){
			$(".homepage").addClass("m-hide");
			$(".vedio-page-wrap").addClass("m-hide");
			$(".album-page-wrap").removeClass("m-hide");
			$(".tab-btn-wrap").find("a").removeClass('active')
			$(".album-btn").addClass('active')
		})

		$('.link-vedio').click(function(){
			$(".homepage").addClass("m-hide")
			$(".album-page-wrap").addClass("m-hide")
			$(".vedio-page-wrap").removeClass("m-hide")
			$(".tab-btn-wrap").find("a").removeClass('active')
			$(".vedio-btn").addClass('active')
		})

		/*tabs切换*/
		$(".tab-btn-wrap").on('click','a',function(){
			$(".tab-btn-wrap").find("a").removeClass('active')
			$(this).addClass('active');
			var index = $(this).index();
			$(".tabs").addClass("m-hide")
			$(".tabs-wrap").find('.tabs:eq('+index+')').removeClass("m-hide");		
		})

	//$(".album-tab").on('click',function(){
	//	$(".tab-btn-wrap").find("a").removeClass('active')
	//	$(".album-btn").addClass('active');
	//	var index = 1;
	//	$(".tabs").addClass("m-hide")
	//	$(".tabs-wrap").find('.tabs:eq('+index+')').removeClass("m-hide");
	//})



		/*点击相册到相应的相片页*/
		//$(".album-page ul").on('click','li',function(){
		//	$(".album-page").addClass("m-hide")
		//	$(".photo-page-wrap").removeClass("m-hide")
		//	var index = $(this).index();
		//	$(".photo-page-tab").addClass("m-hide")
		//	$(".photo-page-wrap").find('.photo-page-tab:eq('+index+')').removeClass("m-hide");
		//})

		/*点击返回相册列表*/
		//$('.back-album').click(function(){
		//	$(".album-page").removeClass("m-hide")
		//	$(".photo-page-wrap").addClass("m-hide")
		//})

		/*编辑视频介绍*/
        //$('.vedio-editing').click(function(){
	    //	$('.video-editor-wrap').show();
	    //	$('.mask').show();
	    //})
		 $('.close-btn').click(function(){
	    	$('.video-editor-wrap').hide();
	    	$('.mask').hide();
	    })
	    $('.mask').click(function(){
	    	$('.video-editor-wrap').hide();
	    	$('.mask').hide();
	    })

	    ///*编辑相册名称*/
        //$('.album-editing').click(function(){
	    //	$('.album-editor-wrap').show();
	    //	$('.mask').show();
	    //})
		 $('.close-btn').click(function(){
	    	$('.album-editor-wrap').hide();
	    	$('.mask').hide();
	    })
	    $('.mask').click(function(){
	    	$('.album-editor-wrap').hide();
	    	$('.mask').hide();
	    })


	    /*删除视频*/
        //$('.delete-video').click(function(){
	    //	$('.delete-wrap3').show();
	    //	$('.mask').show();
	    //})
		 $('.close-btn').click(function(){
	    	$('.delete-wrap3').hide();
	    	$('.mask').hide();
	    })
	    $('.mask').click(function(){
	    	$('.delete-wrap3').hide();
	    	$('.mask').hide();
	    })


	    /*删除相册*/
        //$('.delete-album').click(function(){
	    //	$('.delete-wrap1').show();
	    //	$('.mask').show();
	    //})
		 $('.close-btn').click(function(){
	    	$('.delete-wrap1').hide();
	    	$('.mask').hide();
	    })
	    $('.mask').click(function(){
	    	$('.delete-wrap1').hide();
	    	$('.mask').hide();
	    })



	    /*删除相片*/
        //$('.delete-photo').click(function(){
	    //	$('.delete-wrap2').show();
	    //	$('.mask').show();
	    //	return false;
	    //})
		 $('.close-btn').click(function(){
	    	$('.delete-wrap2').hide();
	    	$('.mask').hide();
	    })
	    $('.mask').click(function(){
	    	$('.delete-wrap2').hide();
	    	$('.mask').hide();
	    })

	    /*上传视频*/
        $('#upload-video').click(function(){
	    	$('.upload-wrap1').show();
	    	$('.mask').show();
	    })
		 $('.close-btn').click(function(){
	    	$('.upload-wrap1').hide();
	    	$('.mask').hide();
	    })
	    $('.mask').click(function(){
	    	$('.upload-wrap1').hide();
	    	$('.mask').hide();
	    })


	    /*上传视频*/
		$('#upload-pic').click(function(){
	    	$('.upload-wrap2').show();
	    	$('.mask').show();
	    })
		 $('.close-btn').click(function(){
	    	$('.upload-wrap2').hide();
	    	$('.mask').hide();
	    })
	    $('.mask').click(function(){
	    	$('.upload-wrap2').hide();
	    	$('.mask').hide();
	    })
		/*视频播放*/
		$(document).ready(function() {

			$('.my_popup_open').click(function(){
				var src = $(this).attr("data-url");

				var videoplayer = videoPlayer('my_popup',{
					autoPlay:false,
					muted:false,
					canfast:true,
					virtualFullScreen:false,
					setSource:function(canplayType){

						if(canplayType == 'mp4'){
							return src
						}
					},
					success:function(videoElement,node,videoObj){
						videoElement.addEventListener('timeupdate',function(){

						},false);

						videoObj.timeupdate(function(currentTime){
							// console.log(currentTime)
						});

					},
					//fires when a problem is detected
					error:function(){

					}

				});

				$('#my_popup').popup({
					onclose: function() {
						videoplayer.pause();
					}
				});


			});
		});

});