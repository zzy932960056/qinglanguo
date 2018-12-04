<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>青蓝果动态</title>
    @include('qt_link')
    <link rel="stylesheet" href="{{URL::asset('/css_qt/base.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css_qt/main.css')}}">
    <script src="{{URL::asset('/js_qt/jquery-2.1.3.min.js')}}"></script>
    <script src="{{URL::asset('/js_qt/main.js')}}"></script>
</head>
<body>
<div class="cyanine-container">
    <!--header-->
    @include('qt_navigator')
    <!--header end-->
    <!--面包屑-->
    <div class="crumbs">
        当前位置 ：<span><a href="/news">青蓝果动态</a></span>><span>{!! $news[0]->news_sort !!}</span>
    </div>
    <!--面包屑 end-->
    <!--内容-->
    <div class="trends-container">
        <div class="trends-con-tit common-tit">
            <div class="trends-title-img">
                <img src="{{URL::asset('/images/d-tit.jpg')}}" alt="">
            </div>
            <div class="trends-ul-list">
                <div class="ul-other-img">
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
                <ul>
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
                <div class="health-con-item">
                    @foreach($news_details as $ke => $va)
                    @if($va->news_text)
                    <div class="health-con-text">
                        <p>
                            {!! $va->news_text !!}
                        </p>
                    </div>
                    @elseif($va->news_pic_b)
                    <div class="health-c-img health-comment">
                        <div class="icon4"></div>
                        <div class="health-inner-img header-c-inner">
                            <img src="{{$va->news_pic_b}}" alt="">
                        </div>
                    </div>
                    @elseif($va->news_pic_m1)
                    <div class="header-list-other">
                        <div class="icon4"></div>
                       <!-- <div class="health-inner-img header-c-inner">
                            <img src="images/img.jpg" alt="">
                        </div>-->
                        <div class="header-other-left">
                            <div class="header-other-img">
                                <img src="{{$va->news_pic_m1}}" alt="">
                            </div>
                        </div>
                        <div class="header-other-left">
                            <div class="header-other-img">
                                <img src="{{$va->news_pic_m2}}" alt="">
                            </div>
                        </div>
                    </div>
                    @elseif($va->news_pic_s1)
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
                    @elseif($va->news_video)
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
                            $('<div class="video-pop"><video class="video" src="{{$va->news_video}}" autoplay  controls></video></div>').appendTo('body');
                        })
                        $(document).on('click', '.video-pop', function() {
                            $('.video-pop').remove();
                        });
                        $(document).on('click', '.video', function(e) {
                            e.stopPropagation()
                        })
                    </script>
                    @endif
                    @endforeach
                </div>
            </div>
      </div>
    </div>
</div>
    <!--内容 end-->
    <!--视频-->
    <!--footer-->
    @include('qt_footer')
    <!--footer end-->
</div>
</body>
</html>
