<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,shrink-to-fit=no">
    <meta http-equiv="Cache-Control" content="max-age=180">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="telephone=no">
    <title>青蓝果教育</title>
    <link rel="stylesheet" href="{{URL::asset('/css_qt/base.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css_qt/mobile.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css_qt/swiper.min.css')}}">
</head>
<body>
<div class="cyanine-mob-container">
    <!--header start-->
    @include('yd_navigator')
    <!--header end-->
    <!--面包屑 start-->
    <div class="cyanime-mob-crumbs">
        当前位置 ：<span><a href="/education">青蓝果教育</a></span>
    </div>
    <!--面包屑 end-->
    <!--内容 start-->
    <div class="home-mob-container">
        <div class="edu-title">
            <img src="{{URL::asset('/images_yd/edu-title01.png')}}" alt="">
        </div>
        <div class="edu-title-son">
            <img src="{{URL::asset('/images_yd/edu-title02.png')}}" alt="">
        </div>
        <ul class="edu-nav">
            <li class="edu-active">传统文化</li>
            <li>探究空间</li>
            <li>健康领动</li>
            <li>艺术创想</li>
            <li>社会链接</li>
            <li>师资力量</li>
        </ul>
        <ul class="edu-show">
            <li class="edu-show-item" id="item1">
                <div class="edu-show_title">传统文化</div>
                <div class="edu-show_content">
                    <div class="show_content_box">
                        <div class="show_content_left">
                            <img src="{{$edu_culture[0]->cul_pic1}}" alt="">
                        </div>
                        <div class="show_content_right">
                            <p>{!! $edu_culture[0]->cul_text1 !!}</p>
                        </div>
                    </div>
                    <div class="show_content_box">
                        <div class="show_content_right">
                            <p>{!! $edu_culture[0]->cul_text2 !!}</p>
                        </div>
                        <div class="show_content_left">
                            <img src="{{$edu_culture[0]->cul_pic2}}" alt="">
                        </div>
                    </div>
                </div>
            </li>
            <li class="edu-show-item" id="item2">
                <div class="edu-show_title">探究空间</div>
                <div class="edu-show_content">
                    <div class="show_content_box">
                        <div class="show_content_left">
                            <img src="{{$edu_space[0]->spa_pic1}}" alt="">
                        </div>
                        <div class="show_content_right">
                            <p>{!! $edu_space[0]->spa_text1 !!}</p>
                            <p>{!! $edu_space[0]->spa_text2 !!}</p>
                        </div>
                    </div>
                    <div class="show_content_box">
                        <div class="show_content_right">
                            <p>{!! $edu_space[0]->spa_text3 !!}</p>
                            <p>{!! $edu_space[0]->spa_text4 !!}</p>
                        </div>
                        <div class="show_content_left">
                            <img src="{{$edu_space[0]->spa_pic2}}" alt="">
                        </div>
                    </div>
                </div>
            </li>
            <li class="edu-show-item" id="item3">
                <div class="edu-show_title">健康领动</div>
                <div class="edu-show_content">
                    <div class="show_content_box">
                        <div class="show_content_left">
                            <img src="{{$edu_health[0]->hea_pic1}}" alt="">
                        </div>
                        <div class="show_content_right">
                            <p>{!! $edu_health[0]->hea_text1 !!}</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="edu-show-item" id="item4">
                <div class="edu-show_title">艺术创想</div>
                <div class="edu-show_content">
                    <div class="show_content_box">
                        <div class="show_content_left">
                            <img src="{{$edu_art[0]->art_pic1}}" alt="">
                        </div>
                        <div class="show_content_right">
                            <p>{!! $edu_art[0]->art_text1 !!}</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="edu-show-item" id="item5">
                <div class="edu-show_title">社会链接</div>
                <div class="edu-show_content">
                    <div class="show_content_box">
                        <div class="show_content_left">
                            <img src="{{$edu_social[0]->soc_pic1}}" alt="">
                        </div>
                        <div class="show_content_right">
                            <p>{!! $edu_social[0]->soc_text1 !!}</p>
                        </div>
                    </div>
                    <div class="show_content_box">
                        <div class="show_content_right">
                            <p>{!! $edu_social[0]->soc_text2 !!}</p>
                        </div>
                        <div class="show_content_left">
                            <img src="{{$edu_social[0]->soc_pic2}}" alt="">
                        </div>
                    </div>
                </div>
            </li>
            <li class="edu-show-item" id="item6">
                <div class="edu-show_title">师资力量</div>
                <div class="edu-show_content">
                    @foreach($edu_teach as $ke => $va)
                    <div class="people_pro">
                        <div class="people_pro_left">
                            <img src="{{$va->k_pic1}}" alt="">
                        </div>
                        <div class="people_pro_right">
                            <h3>{!! $va->k_name !!}</h3>
                            <div class="pro_summary">{!! $va->k_position !!}</div>
                            <p>{!! $va->k_text1 !!}</p>
                            <p>{!! $va->k_text2 !!}</p>
                        </div>
                    </div>
                    @if($ke == 0)
                    <div class="people_imgs">
                        <img src="{{$va->k_pic2}}" alt="" style="width:100%;">
                    </div>
                    @elseif($ke == 1)
                    <div class="people_imgs">
                        <img src="{{$va->k_pic2}}" alt="" style="width:5rem;">
                    </div>
                    @else
                    <div class="people_imgs">
                        <img src="{{$va->k_pic2}}" alt="" style="width:3.2rem;">
                    </div>
                    @endif
                    @endforeach
                </div>
            </li>
        </ul>
    </div>
    <!--内容 end-->
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
<script src="{{URL::asset('/js_qt/top.js')}}"></script>
<script>
    var eduNav=$(".edu-nav li");
    var eduShow=$(".edu-show li");
    var arr=[];//记录offsetTop
    $.each(eduShow,function () {
        arr.push($(this).offset().top);
    })
    eduNav.on('click',function () {
        var index=eduNav.index(this);
        eduNav.removeClass("edu-active").eq(index).addClass('edu-active');
        $('html,body').animate({scrollTop:arr[index]},300);
    })
</script>
</html>
