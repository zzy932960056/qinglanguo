//青果文化 左侧点击右侧内容滚动
$(function(){
    var navLeft=$('.culture-idea-con').offset().top;
    $(window).scroll(function(){
        var scrollTop=$(window).scrollTop();
        if(scrollTop>=navLeft){
            $.each($(".culture-idea-left"),function () {
                $(this).css({top:(scrollTop-navLeft-60)+"px"})
            })
        }
    })
    $('.culture-item-nav li a').on("click",function(){
        var oA=$(this);
        var index=$('.culture-item-nav li a').index(this)
        var h=$('.culture-idea-items').eq(index).offset().top + 'px';

        if(oA.attr("class") != "actives"){
            $(".actives").removeClass("actives");
            oA.addClass('actives')
            $('html,body').animate({scrollTop:h},300);
        }
    })
})