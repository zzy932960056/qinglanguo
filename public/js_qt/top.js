var goBackObj=$('.footer-top');

goBackObj.click(function(event) {
    $(this).animate({bottom:'0.8rem'},500)
    setTimeout(function(){
        $('html,body').stop().animate({
            'scrollTop':0
        }, 1000);
        goBackObj.animate({bottom:'0.5rem'},500)
    },1000)
});