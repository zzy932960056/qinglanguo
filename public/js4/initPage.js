/**
 * Created by weiboxue on 17/1/19.
 */
function initPage() {
    $('.btt-weixin').mousemove(function() {
        $('.erweima1').show();
    });
    $('.btt-weixin').mouseout(function() {
        $('.erweima1').hide();
    });
    // 初始化导航高度比例
    var bili = 1.4;
    var nowNavWidth = $('.nav-list').find('li').width();
    $('.nav-list>li, .hdr-sp-menu>li, .hdr-sp-menu').css('height', nowNavWidth/1.4+'px');
    var navAHeight = $('.nav-all-a').height();
    $('.nav-all-a').css({'marginTop': (nowNavWidth/1.4-navAHeight)/2.0+'px'});
    // 计算登录
    var loginNavHeight = $('.hdr-sp-menu').height();
    $('.login-register').css('width', loginNavHeight*2.5+'px');
    var loginAHeight = $('.login-one-box').height();
    $('.login-one-box').css({
        'paddingTop': (loginNavHeight-loginAHeight)/2.0+'px',
        'paddingBottom': (loginNavHeight-loginAHeight)/2.0+'px'
    });


    // logo
    var loginlHeight = $('.logo-index-top').height();
    $('.logo-index-top').css({
        'marginTop': (loginNavHeight-loginlHeight)/2.0+"px"
    });
    var loginNHeight = $('.logo-news-top').height();
    $('.logo-news-top').css({
        'marginTop': (loginNavHeight-loginNHeight)/2.0+'px'
    });
    var loginSHeight = $('.logo-star-top').height();
    $('.logo-star-top').css({
        'marginTop': (loginNavHeight-loginSHeight)/2.0+'px'
    });
    var loginSHeight = $('.logo-media-top').height();
    $('.logo-media-top').css({
        'marginTop': (loginNavHeight-loginSHeight)/2.0+'px'
    });
    var loginABHeight = $('.logo-about-top').height();
    $('.logo-about-top').css({
        'marginTop': (loginNavHeight-loginABHeight)/2.0+'px'
    });
    var loginMAHeight = $('.logo-mall-top').height();
    $('.logo-mall-top').css({
        'marginTop': (loginNavHeight-loginMAHeight)/2.0+'px'
    });
    var loginHoHeight = $('.logo-home-top').height();
    $('.logo-home-top').css({
        'marginTop': (loginNavHeight-loginHoHeight)/2.0+'px'
    });
    var loginInHeight = $('.login-in-box').height();
    $('.login-in-box').css({
        'paddingTop': (loginNavHeight-loginInHeight)/2.0+'px',
        'paddingBottom': (loginNavHeight-loginInHeight)/2.0+'px'
    });
    // 修改登录下拉菜单
    // 初始化swiper图片大小
    //$('.all-swiper-image').css('height', $(window).width()/3.2+'px');
    // 计算下拉菜单
    $('.g-sub-card').css({
        top: nowNavWidth/1.4 + 2 +'px'
    });
    $('.g-sub-card ul, .g-sub-card ul li, .g-sub-card ul li a').css({
        width: nowNavWidth+'px'
    });
    // 已经登录下拉菜单

    var loginReWidth = $('.login-register').width();
    $('.g-user-card-login').css({
        top: loginReWidth/2.3 + 2 +'px'
    });
    $('.g-user-card-login ul, .g-user-card-login ul li, .g-user-card-login ul li a').css({
        width: loginReWidth+'px'
    });
}