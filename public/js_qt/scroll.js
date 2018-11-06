//青果文化 左侧点击右侧内容滚动
$(function(){
    var navLeft=$('.culture-idea-con').offset().top;
    function currentIndex(){
        for(var j=0;j<$('.culture-nav li a').length;j++){
            if($('.culture-nav ul li a').eq(j).hasClass('active')){
                return j;
            }
        }
    }

    $(window).scroll(function(){
        var num=currentIndex();
        var teachConList=$('.culture-idea-right').eq(num).find('.culture-idea-items');
        var navSonList=[];
        $.each(teachConList,function () {
            navSonList.push(Math.floor($(this).offset().top));
        });
        console.log(navSonList);
        var currentLeft=$('.culture-idea-left').eq(num).find('.culture-item-nav li a');
        var scrollTop=$(window).scrollTop();
        if(scrollTop>=navLeft){
            $.each($(".culture-idea-left"),function () {
                $(this).css({top:(scrollTop-navLeft-60)+"px"})
            })
        }

        for(var i=0;i<navSonList.length;i++){
            if(i==navSonList.length-1){
                if(scrollTop>=navSonList[i]){
                    currentLeft.removeClass("actives").eq(i).addClass('actives');
                }
            }else{
                if(scrollTop>navSonList[i]&&scrollTop<=navSonList[i+1]){
                    currentLeft.removeClass("actives").eq(i).addClass('actives');
                }
            }

        }
    })
    $('.culture-item-nav li a').on("click",function(){
        var oA=$(this);
        var index=$('.culture-item-nav li a').index(this)
        var h=Math.floor($('.culture-idea-items').eq(index).offset().top+1) + 'px';
        if(oA.attr("class") != "actives"){
            $(".actives").removeClass("actives");
            oA.addClass('actives')
            $('html,body').animate({scrollTop:h},0);
        }
    })
})
// //青果文化 左侧点击右侧内容滚动
// $(function(){
//     var navLeft=$('.culture-idea-con').offset().top;
//     $(window).scroll(function(){
//         var scrollTop=$(window).scrollTop();
//         if(scrollTop>=navLeft){
//             $.each($(".culture-idea-left"),function () {
//                 $(this).css({top:(scrollTop-navLeft-60)+"px"})
//             })
//         }
//     })
//     $('.culture-item-nav li a').on("click",function(){
//         var oA=$(this);
//         var index=$('.culture-item-nav li a').index(this)
//         var h=$('.culture-idea-items').eq(index).offset().top + 'px';

//         if(oA.attr("class") != "actives"){
//             $(".actives").removeClass("actives");
//             oA.addClass('actives')
//             $('html,body').animate({scrollTop:h},300);
//         }
//     })
// })