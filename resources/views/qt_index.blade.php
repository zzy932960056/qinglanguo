<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>青蓝果</title>
    @include('qt_link')
    <link rel="stylesheet" href="{{URL::asset('/css_qt/base.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css_qt/main.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css_qt/swiper.min.css')}}">
</head>
<?php
$agent = $_SERVER['HTTP_USER_AGENT'];
if(strpos($agent,"comFront") || strpos($agent,"iPhone") || strpos($agent,"MIDP-2.0") || strpos($agent,"Opera Mini") || strpos($agent,"UCWEB") || strpos($agent,"Android") || strpos($agent,"Windows CE") || strpos($agent,"SymbianOS"))
header("Location:http://m.kinglengo.com");
?>
<body>
<div class="cyanine-container">
    <!--header-->
    @include('qt_navigator')
    <!--header end-->

    <!-- banner-->
    <!-- <div class="cyanine-banner">
        <div class="banner-bg"></div>
        <div class="banner swiper-container">
            <div class="swiper-wrapper banner-wrapper">
                @foreach($banner as $ke => $ba)
                @if($ke == 0)
                <div class="swiper-slide banner-slide blue-banner" style="width:820px;">
                @elseif($ke == 1)
                <div class="swiper-slide banner-slide yellow-banner" style="width:820px;">
                @elseif($ke == 2)
                <div class="swiper-slide banner-slide green-banner" style="width:820px;">
                @elseif($ke == 3)
                <div class="swiper-slide banner-slide orange-banner" style="width:820px;">
                @endif
                    <div class="banner-inner">
                        <img src="{{$ba->banner_path}}" alt="">
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination cyanine-pagination"></div>
        </div>
    </div> -->
    <!--banner end -->
    <!--banner-->
    <div class="cyanine-banner">
        <!--<div class="banner-bg"></div>-->
        <div class="banner swiper-container">
            <div class="swiper-wrapper banner-wrapper">
                @foreach($banner as $ke => $ba)
                @if($ke == 0)
                <div class="swiper-slide banner-slide blue-banner">
                @elseif($ke == 1)
                <div class="swiper-slide banner-slide yellow-banner">
                @elseif($ke == 2)
                <div class="swiper-slide banner-slide green-banner">
                @elseif($ke == 3)
                <div class="swiper-slide banner-slide orange-banner">
                @endif
                    <div class="banner-inner">
                        <img src="{{$ba->banner_path}}" alt="">
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination cyanine-pagination"></div>
        </div>
    </div>
    <!--banner end-->

    <!--main 1-->
    <div class="cyanine-main">
        <div class="cyaniane-home">
            <div class="home-inner">
                <div class="home-icons">
                    <img src="{{URL::asset('/images/bor.png')}}" alt="">
                </div>
                <div class="home-box">
                    <!--<img src="{{URL::asset('/images/index-home.png')}}" alt="">-->
                </div>
                <ul class="home-ul">
                    <li style="display: block;">
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
            </div>
            <div class="home-con-text">
                {{$home[0]->home_text}}
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
    </div>
    <!--main 1 end-->

    <!--main 2-->
    <div class="cyanime-teach">
        <div class="teach-tit">
            <img src="{{URL::asset('/images/jy.jpg')}}" alt="">
        </div>
        <div class="teach-content">
            <ul>
                <li class="teach-tiem">
                    <img src="{{URL::asset('/images/j1.png')}}" alt="" class="teach-bg-img">
                    <span><a href="/education#item1">传统文化</a></span>
                </li>
                <li class="teach-tiem">
                    <img src="{{URL::asset('/images/j2.png')}}" alt="" class="teach-bg-img">
                    <span><a href="/education#item2">探究空间</a></span>
                </li>
                <li class="teach-tiem">
                    <img src="{{URL::asset('/images/j3.png')}}" alt="" class="teach-bg-img">
                    <span><a href="/education#item3">健康领动</a></span>
                </li>
                <li class="teach-tiem">
                    <img src="{{URL::asset('/images/j4.png')}}" alt="" class="teach-bg-img">
                    <span><a href="/education#item4">艺术创想</a></span>
                </li>
                <li class="teach-tiem">
                    <img src="{{URL::asset('/images/j5.png')}}" alt="" class="teach-bg-img">
                    <span><a href="/education#item5">社会链接</a></span>
                </li>
                <li class="teach-tiem">
                    <img src="{{URL::asset('/images/j6.png')}}" alt="" class="teach-bg-img">
                    <span><a href="/education#item6">师资力量</a></span>
                </li>
            </ul>
        </div>

    </div>
    <!--main 2 end-->

    <!--main 3  -->
    <div class="cyanime-culture">
        <img src="{{URL::asset('/images/culture.jpg')}}" alt="" class="culture-bg-img">
        <a href="/culture_vi" class="culture-tit1 culture-tit-com"><img src="{{URL::asset('/images/inicon1.png')}}" alt=""></a>
        <a href="/culture_env" class="culture-tit2 culture-tit-com"><img src="{{URL::asset('/images/inicon2.png')}}" alt=""></a>
        <a href="/culture" class="culture-tit3 culture-tit-com"><img src="{{URL::asset('/images/inicon3.png')}}" alt=""></a>
        <a href="/culture_food" class="culture-tit4 culture-tit-com"><img src="{{URL::asset('/images/inicon4.png')}}" alt=""></a>
    </div>
    <!--main 3 end-->
    <!--main 4-->
    <div class="cyanime-trends">
        <div class="trends-tit">
            <img src="{{URL::asset('/images/trends.png')}}" alt="">
        </div>
        <div class="trends-content">
            <ul class="content-list">
                <li class="content-list-item">
                    <div class="trends-item-tit">园所快报</div>
                    <img src="{{URL::asset('/images/line.png')}}" alt="">
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
                <li class="content-list-item">
                    <div class="trends-item-tit">健康护航</div>
                    <img src="{{URL::asset('/images/line.png')}}" alt="">
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
                <li class="content-list-item">
                    <div class="trends-item-tit">金色时光</div>
                    <img src="{{URL::asset('/images/line.png')}}" alt="">
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
                <li class="content-list-item">
                    <div class="trends-item-tit">最美芳华</div>
                    <img src="{{URL::asset('/images/line.png')}}" alt="">
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
                <li class="content-list-item">
                    <div class="trends-item-tit">为爱同行</div>
                    <img src="{{URL::asset('/images/line.png')}}" alt="">
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
    </div>
    <!--main 4 end-->
    <!--footer-->
    @include('qt_footer')
    <!--footer end-->

</div>
</body>
<script src="{{URL::asset('/js_qt/jquery-2.1.3.min.js')}}"></script>
<script src="{{URL::asset('/js_qt/swiper.min.js')}}"></script>
<script src="{{URL::asset('/js_qt/main.js')}}"></script>
<!-- <script>
    var mySwiper = new Swiper('.swiper-container', {
        loop: true,
        autoplay: true,
        slidesPerView: 'auto',
        slidesOffsetBefore: 550,
        spaceBetween: 45,
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        }
    })
</script> -->
<script>
    var mySwiper = new Swiper('.swiper-container', {
        direction: 'horizontal',
        loop: true,
        autoplay: true,
        // slidesPerView: "auto",
        // centeredSlides:true,
        // spaceBetween: 20,
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        }
    })
</script>
</html>
