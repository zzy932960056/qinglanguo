// header hover
$('.header-ul li').not('.logo').hover(function(){
    var index=$('.header-ul li').index(this)
    $('.header-ul li').eq(index).find('img').addClass('slideOutUp')
},function(){
    var index=$('.header-ul li').index(this)
    $('.header-ul li').eq(index).find('img').removeClass('slideOutUp')
})
//index hover
$('.cyanime-culture a').hover(function(){
    var index=$('.cyanime-culture a').index(this)
    $('.cyanime-culture a').eq(index).addClass('rubberBand')
},function(){
    var index=$('.cyanime-culture a').index(this)
    $('.cyanime-culture a').eq(index).removeClass('rubberBand')
})
$('.teach-tiem') .hover(function(){
    var index=$('.teach-tiem').index(this)
    $('.teach-tiem').eq(index).find('img').addClass('rubberBand')
},function(){
    var index=$('.teach-tiem').index(this)
    $('.teach-tiem').eq(index).find('img').removeClass('rubberBand')
})
//index tab
$('.home-tab ul li').on('click',function(){
    var index=$('.home-tab ul li').index(this)
    $('.home-tab ul li .tab-t').removeClass('active').eq(index).addClass('active')
    $('.home-ul li').hide().eq(index).show()
})

$('.footer-top').hover(function(){
    $(this).addClass('slideOutUp')
},function(){
    $(this).removeClass('slideOutUp')
})


//  top  返回顶部
var goBackObj=$('.footer-top');

goBackObj.click(function(event) {
    $(this).animate({top:'-80px'},500)
    setTimeout(function(){
        $('html,body').stop().animate({
            'scrollTop':0
        }, 1000);
        goBackObj.animate({top:'350px'},500)
    },1000)

});

// 青蓝果之家
$('.culture-home-ul li').on('click',function(){
    var index=$('.culture-home-ul li').index(this);
    $('.culture-home-ul li i').removeClass('active').eq(index).addClass('active');
    $('.home-warp-items').hide().eq(index).show();
})