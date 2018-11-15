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
    <title>青蓝果动态</title>
    <link rel="stylesheet" href="{{URL::asset('/css_qt/base.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css_qt/mobile.css')}}">
    <script src="{{URL::asset('/js_qt/jquery-2.1.3.min.js')}}"></script>
    <script src="{{URL::asset('/js_qt/rem.js')}}"></script>
    <script src="{{URL::asset('/js_qt/top.js')}}"></script>
</head>
<body>
<div class="cyanine-mob-container">
    <!--header start-->
    @include('yd_navigator')
    <!--header end-->
    <!--面包屑 start-->
    <div class="cyanime-mob-crumbs">
        当前位置 ：<span><a href="/news">青蓝果动态</a> -<span>{!! $news[0]->news_sort !!}</span></span>
    </div>
    <!--面包屑 end-->
    <!--内容 start-->
    <div class="trends-container">
        <div class="trends-con-tit common-tit">
            <div class="trends-title-img">
                <img src="{{URL::asset('/images/d-tit.jpg')}}" alt="">
            </div>
            <div class="trends-ul-list">
                <div class="ul-other-img mob-other-img">
                    @if($news[0]->news_sort == '健康护航')
                    <img src="{{URL::asset('/images/dtj.jpg')}}" alt="">      <!--健康护航-->
                    @elseif($news[0]->news_sort == '金色时光')
                    <img src="{{URL::asset('/images/dto.jpg')}}" alt="">      <!--金色时光-->
                    @elseif($news[0]->news_sort == '为爱同行')
                    <img src="{{URL::asset('/images/dts.jpg')}}" alt="">      <!--为爱同行-->
                    @elseif($news[0]->news_sort == '园所快报')
                    <img src="{{URL::asset('/images/dty.jpg')}}" alt="">      <!--园所快报-->
                    @elseif($news[0]->news_sort == '最美芳华')
                    <img src="{{URL::asset('/images/dtz.jpg')}}" alt="">      <!--最美芳华-->
                    @endif
                </div>
                <ul class="trends-nav-lists">
                    @if($news[0]->news_season == '春')
                    <li><img src="{{URL::asset('/images/top0.jpg')}}" alt=""></li>
                    <li><img src="{{URL::asset('/images/dc1.jpg')}}" alt=""></li>
                    <li><img src="{{URL::asset('/images/dc2.jpg')}}" alt=""></li>
                    <li><img src="{{URL::asset('/images/dc3.jpg')}}" alt=""></li>
                    @elseif($news[0]->news_season == '夏')
                    <li><img src="{{URL::asset('/images/dc0.jpg')}}" alt=""></li>
                    <li><img src="{{URL::asset('/images/top1.jpg')}}" alt=""></li>
                    <li><img src="{{URL::asset('/images/dc2.jpg')}}" alt=""></li>
                    <li><img src="{{URL::asset('/images/dc3.jpg')}}" alt=""></li>
                    @elseif($news[0]->news_season == '秋')
                    <li><img src="{{URL::asset('/images/dc0.jpg')}}" alt=""></li>
                    <li><img src="{{URL::asset('/images/dc1.jpg')}}" alt=""></li>
                    <li><img src="{{URL::asset('/images/top2.jpg')}}" alt=""></li>
                    <li><img src="{{URL::asset('/images/dc3.jpg')}}" alt=""></li>
                    @elseif($news[0]->news_season == '冬')
                    <li><img src="{{URL::asset('/images/dc0.jpg')}}" alt=""></li>
                    <li><img src="{{URL::asset('/images/dc1.jpg')}}" alt=""></li>
                    <li><img src="{{URL::asset('/images/dc2.jpg')}}" alt=""></li>
                    <li><img src="{{URL::asset('/images/top3.jpg')}}" alt=""></li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="trends-health-container">
            <div class="health-con-list">
                <div class="health-con-tit">{!! $news[0]->news_title !!}</div>
                <div class="health-con-time">{!! $news[0]->news_date !!}</div>
                <!--第一栏-->
                @foreach($news_details as $ke => $va)
                @if($va->news_text)
                <div class="health-con-item">
                    <div class="health-con-text">
                        <p>
                            {!! $va->news_text !!}
                        </p>
                    </div>
                </div>
                @elseif($va->news_pic_b)
                <div class="health-con-item">
                    <div class="health-c-img health-comment">
                        <div class="icon4"></div>
                        <div class="health-inner-img header-c-inner">
                            <img src="{{$va->news_pic_b}}" alt="">
                        </div>
                    </div>
                </div>
                @elseif($va->news_pic_s1)
                <div class="health-con-item">
                    <div class="health-comment health-clo-con">
                        <div class="icon3"></div>
                        <div class="health-inner-clo">
                            <ul>
                                <li>
                                    <img src="{{$va->news_pic_s1}}" alt="">
                                </li>
                                <li>
                                    <img src="{{$va->news_pic_s2}}" alt="">
                                </li>
                                <li>
                                    <img src="{{$va->news_pic_s3}}" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @elseif($va->news_video)
                <div class="health-con-item">
                    <div class="health-con-img health-comment">
                        <div class="icon1"></div>
                        <div class="inner-pop"></div>
                        <div class="health-inner-img">
                            <img src="{{$va->news_video_pic}}" alt="">
                        </div>
                        <div class="ion2" id="ion{{$va->id}}"></div>
                    </div>
                    <script>
                        $("#ion{{$va->id}}").on('click',function(){
                            $('<div class="video-pop" id="vid{{$va->id}}"><video id="myVideo1{{$va->id}}" class="video" src="{{$va->news_video}}" autoplay  controls></video></div>').appendTo('body');
                        });
                        $(document).on('click', '.video-pop', function() {
                            $('.video-pop').remove();
                        });
                        $(document).on('click', '.video', function(e) {
                            e.stopPropagation()
                        });
                        var audio1 = document.getElementById('myVideo1{{$va->id}}');
                        $("#vid{{$va->id}}").on('blur',function(){
                            $("#vid{{$va->id}}").hide();
                            audio1.pause();  //暂停
                        });
                    </script>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <!--内容 end-->
    <!--视频-->
    <!-- <div class="video-pop" style="display:none;">
        <video class="video" src="{{URL::asset('/video/video.mp4')}}" autoplay controls></video>
        <div class="close">x</div>
    </div> -->
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
</html>
