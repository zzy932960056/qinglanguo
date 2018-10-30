<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,shrink-to-fit=no">
    <meta http-equiv="Cache-Control" content="max-age=180">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="telephone=no">
    <title>青蓝果</title>
    <link rel="stylesheet" href="{{URL::asset('/css_qt/base.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css_qt/mobile.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css_qt/swiper.min.css')}}">
</head>
<body>
<div class="cyanine-mob-container">
    <!--header start-->
    @include('yd_navigator')
    <!--header end-->
    <!--banner start-->
    <div class="cyanime-mob-banner">
        <div class="mob-cir1"></div>
        <div class="mob-banner swiper-container">
            <div class="swiper-wrapper">
                @foreach($banner as $ke => $ba)
                <div class="swiper-slide mob-swiper-slide">
                    <div class="mob-swiper-item">
                        <div class="mo-banner-inner">
                            <img src="{{$ba->banner_path}}" alt="">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination mob-pagination"></div>
        </div>
    </div>
    <!--banner end-->
    <!--青蓝果之家 start-->
    <div class="cyanime-mob-home">
        <div class="cyanime-mob-home-inner">
            <div class="mob-home-pos"></div>
            <ul class="mob-home-img">
                <li>
                    <img src="{{$home[0]->home_pic1}}" alt="">
                </li>
                <li>
                    <img src="{{$home[0]->home_pic2}}" alt="">
                </li>
                <li>
                    <img src="{{$home[0]->home_pic3}}" alt="">
                </li>
                <li>
                    <img src="{{$home[0]->home_pic4}}" alt="">
                </li>
                <li>
                    <img src="{{$home[0]->home_pic5}}" alt="">
                </li>
            </ul>
            <div class="mob-home-icon"></div>
        </div>
        <div class="mob-home-text">
            {!! $home[0]->home_text !!}
        </div>
        <div class="home-tab">
            <ul>
                <li>
                    <img src="{{URL::asset('/images/circe.png')}}" alt="" class="tab-t active">
                    <div class="tab-imag">
                        <img src="{{URL::asset('/images/h1.png')}}" alt="">
                    </div>
                </li>
                <li>
                    <img src="{{URL::asset('/images/circe.png')}}" alt="" class="tab-t">
                    <div class="tab-imag">
                        <img src="{{URL::asset('/images/h2.png')}}" alt="">
                    </div>
                </li>
                <li>
                    <img src="{{URL::asset('/images/circe.png')}}" alt="" class="tab-t">
                    <div class="tab-imag">
                        <img src="{{URL::asset('/images/h3.png')}}" alt="">
                    </div>
                </li>
                <li>
                    <img src="{{URL::asset('/images/circe.png')}}" alt="" class="tab-t">
                    <div class="tab-imag">
                        <img src="{{URL::asset('/images/h4.png')}}" alt="">
                    </div>
                </li>
                <li>
                    <img src="{{URL::asset('/images/circe.png')}}" alt="" class="tab-t">
                    <div class="tab-imag">
                        <img src="{{URL::asset('/images/h5.png')}}" alt="">
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--青蓝果之家 end-->
    <!--青蓝果教育 start-->
    <div class="cyanime-mob-teach">
        <div class="mob-teach-tite"></div>
        <ul class="mob-teach-list">
            <li class="mob-teach-item">
                <a href="/education#item1">
                    <img src="{{URL::asset('/images_yd/te1.png')}}" class="mob-tea-icon">
                    <div class="mob-teach-text">传统文化</div>
                </a>
            </li>
            <li class="mob-teach-item">
                <a href="/education#item2">
                    <img src="{{URL::asset('/images_yd/te2.png')}}" class="mob-tea-icon">
                    <div class="mob-teach-text">探究空间</div>
                </a>
            </li>
            <li class="mob-teach-item">
                <a href="/education#item3">
                    <img src="{{URL::asset('/images_yd/te3.png')}}" class="mob-tea-icon">
                    <div class="mob-teach-text">健康领动</div>
                </a>
            </li>
            <li class="mob-teach-item">
                <a href="/education#item4">
                    <img src="{{URL::asset('/images_yd/te4.png')}}" class="mob-tea-icon">
                    <div class="mob-teach-text">艺术创想</div>
                </a>
            </li>
            <li class="mob-teach-item">
                <a href="/education#item5">
                    <img src="{{URL::asset('/images_yd/te5.png')}}" class="mob-tea-icon">
                    <div class="mob-teach-text">社会链接</div>
                </a>
            </li>
            <li class="mob-teach-item">
                <a href="/education#item6">
                    <img src="{{URL::asset('/images_yd/te6.png')}}" class="mob-tea-icon">
                    <div class="mob-teach-text">师资力量</div>
                </a>
            </li>
        </ul>
    </div>
    <!--青蓝果教育 end-->
    <!--青蓝果文化 start-->
    <div class="cyanime-mob-culture">
        <div class="mob-culture-title"></div>
        <ul class="mob-culture-ul">
            <li>
                <a href="/culture_vi">
                    <img src="{{URL::asset('/images/inicon1.png')}}" alt="">
                </a>
            </li>
            <li>
                <a href="/culture_env">
                    <img src="{{URL::asset('/images/inicon2.png')}}" alt="">
                </a>
            </li>
            <li>
                <a href="/culture">
                    <img src="{{URL::asset('/images/inicon3.png')}}" alt="">
                </a>
            </li>
            <li>
                <a href="/culture_food">
                    <img src="{{URL::asset('/images/inicon4.png')}}" alt="">
                </a>
            </li>
        </ul>
    </div>
    <!--青蓝果文化 end-->
    <!--青蓝果动态 start-->
    <div class="cyanime-mob-trends">
        <div class="mob-trends-title"></div>
        <ul class="mob-trends-ul">
            <li>
                <div class="trends-tit">园所快报</div>
                <div class="trends-line"></div>
                <div class="trends-message">
                    @foreach($news_ys as $ke => $ys)
                    @if($ke == 0)
                    <div class="trends-message-item">
                        <a href="/news/details/{{$ys->id}}">
                            <img src="{{URL::asset('/images/new.png')}}" alt="" class="newimg">
                            <span class="trends-time">{{$ys->news_date}}</span>
                            <span class="trends-text">{{$ys->news_title}}</span>
                        </a>
                    </div>
                    @else
                    <div class="trends-message-item">
                        <a href="/news/details/{{$ys->id}}">
                            <span class="trends-time">{{$ys->news_date}}</span>
                            <span class="trends-text">{{$ys->news_title}}</span>
                        </a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </li>
            <li>
                <div class="trends-tit">健康护航</div>
                <div class="trends-line"></div>
                <div class="trends-message">
                    @foreach($news_jk as $ke => $jk)
                    @if($ke == 0)
                    <div class="trends-message-item">
                        <a href="/news/details/{{$jk->id}}">
                            <img src="{{URL::asset('/images/new.png')}}" alt="" class="newimg">
                            <span class="trends-time">{{$jk->news_date}}</span>
                            <span class="trends-text">{{$jk->news_title}}</span>
                        </a>
                    </div>
                    @else
                    <div class="trends-message-item">
                        <a href="/news/details/{{$jk->id}}">
                            <span class="trends-time">{{$jk->news_date}}</span>
                            <span class="trends-text">{{$jk->news_title}}</span>
                        </a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </li>
            <li>
                <div class="trends-tit">金色时光</div>
                <div class="trends-line"></div>
                <div class="trends-message">
                    @foreach($news_js as $ke => $js)
                    @if($ke == 0)
                    <div class="trends-message-item">
                        <a href="/news/details/{{$js->id}}">
                            <img src="{{URL::asset('/images/new.png')}}" alt="" class="newimg">
                            <span class="trends-time">{{$js->news_date}}</span>
                            <span class="trends-text">{{$js->news_title}}</span>
                        </a>
                    </div>
                    @else
                    <div class="trends-message-item">
                        <a href="/news/details/{{$js->id}}">
                            <span class="trends-time">{{$js->news_date}}</span>
                            <span class="trends-text">{{$js->news_title}}</span>
                        </a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </li>
            <li>
                <div class="trends-tit">最美芳华</div>
                <div class="trends-line"></div>
                <div class="trends-message">
                    @foreach($news_zm as $ke => $zm)
                    @if($ke == 0)
                    <div class="trends-message-item">
                        <a href="/news/details/{{$zm->id}}">
                            <img src="{{URL::asset('/images/new.png')}}" alt="" class="newimg">
                            <span class="trends-time">{{$zm->news_date}}</span>
                            <span class="trends-text">{{$zm->news_title}}</span>
                        </a>
                    </div>
                    @else
                    <div class="trends-message-item">
                        <a href="/news/details/{{$zm->id}}">
                            <span class="trends-time">{{$zm->news_date}}</span>
                            <span class="trends-text">{{$zm->news_title}}</span>
                        </a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </li>
            <li>
                <div class="trends-tit">为爱同行</div>
                <div class="trends-line"></div>
                <div class="trends-message">
                    @foreach($news_wa as $ke => $wa)
                    @if($ke == 0)
                    <div class="trends-message-item">
                        <a href="/news/details/{{$wa->id}}">
                            <img src="{{URL::asset('/images/new.png')}}" alt="" class="newimg">
                            <span class="trends-time">{{$wa->news_date}}</span>
                            <span class="trends-text">{{$wa->news_title}}</span>
                        </a>
                    </div>
                    @else
                    <div class="trends-message-item">
                        <a href="/news/details/{{$wa->id}}">
                            <span class="trends-time">{{$wa->news_date}}</span>
                            <span class="trends-text">{{$wa->news_title}}</span>
                        </a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </li>
        </ul>
    </div>
    <!--青蓝果动态 end-->
    <!--footer start-->
    <div class="cyanime-mob-footer">
        <a href="index.html" class="footer-logo">
            <img src="{{URL::asset('/images_yd/footer-logo.png')}}" alt="">
        </a>
        <div class="footer-top">
            <img src="{{URL::asset('/images/top.png')}}" alt="">
        </div>
    </div>
    <!--footed end-->
</div>

</body>
<script src="{{URL::asset('/js_qt/jquery-2.1.3.min.js')}}"></script>
<script src="{{URL::asset('/js_qt/rem.js')}}"></script>
<script src="{{URL::asset('/js_qt/swiper.min.js')}}"></script>
<script src="{{URL::asset('/js_qt/top.js')}}"></script>
<script>
    var mySwiper = new Swiper('.swiper-container', {
        // autoplay: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        }
    })
    $('.home-tab ul li').on('click', function () {
        var index = $('.home-tab ul li').index(this)
        $('.home-tab ul li .tab-t').removeClass('active').eq(index).addClass('active')
        $('.mob-home-img li').hide().eq(index).show()
    })
</script>
</html>
