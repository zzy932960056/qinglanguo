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
    <title>青蓝果文化</title>
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
        当前位置 ：<span><a href="/culture">青蓝果文化</a></span>-<span id="cul">环境文化</span>
    </div>
    <!--面包屑 end-->
    <!--内容 start-->
    <div class="home-mob-container" style="background: #fefef3">
        <div class="du-culture-title">
            <img src="{{URL::asset('/images_yd/culture-title01.png')}}" alt="">
        </div>
        <div class="du-cul-nav">
            <div class="cul-nav-left">
                <img src="{{URL::asset('/images/idea-tit.jpg')}}" alt="" style="display:none">
                <img src="{{URL::asset('/images/sj.jpg')}}" alt="" style="display:none">
                <img src="{{URL::asset('/images_yd/hj.jpg')}}" alt="" style="display:inline !important">
                <img src="{{URL::asset('/images/food-tit.jpg')}}" alt="">
            </div>
            <ul class="cul-nav-right">
                <li id="li1">
                    园所理念
                </li>
                <li id="li2">
                    视觉形象
                </li>
                <li class="culActive" id="li3">
                    环境文化
                </li>
                <li id="li4">
                    食育文化
                </li>
            </ul>
        </div>
        <div class="cul-mob-con">
            <!--园所理念-->
            <div class="cul-mob-items cul-mob-idea">
                <div class="culture-idea-items" id="item1">
                    <div class="idea-items-tit"><i></i>青蓝果解析</div>
                    <div class="idea-items-con">
                        <div class="idea-items-img">
                            <img src="{{$analysis[0]->ana_pic}}" alt="">
                        </div>
                        <p>{!! $analysis[0]->ana_text1 !!}</p>
                        <p>{!! $analysis[0]->ana_text2 !!}</p>
                    </div>
                </div>
                <div class="culture-idea-items" id="item2">
                    <div class="idea-items-tit"><i></i>青蓝精神</div>
                    <div class="idea-items-con idea-custom">
                        <div class="idea-items-img idea-items-list">
                            <ul>
                                <li>
                                    <img src="{{$spirit[0]->spi_pic1}}" alt="">
                                </li>
                                <li>
                                    <img src="{{$spirit[0]->spi_pic2}}" alt="">
                                </li>
                                <li>
                                    <img src="{{$spirit[0]->spi_pic3}}" alt="">
                                </li>
                            </ul>
                        </div>
                        <p>{!! $spirit[0]->spi_text1 !!}</p>
                        <p class="font-s">{!! $spirit[0]->spi_text2 !!}</p>
                    </div>
                </div>
                <div class="culture-idea-items" id="item3">
                    <div class="idea-items-tit"><i></i>青蓝果标语</div>
                    <div class="idea-items-con idea-custom">
                        <div class="idea-items-img">
                            <img src="{{$slogan[0]->slo_pic1}}" alt="">
                        </div>
                        <p>{!! $slogan[0]->slo_text1 !!}</p>
                        <p class="font-s">{!! $slogan[0]->slo_text2 !!}</p>
                    </div>
                </div>
                <div class="culture-idea-items" id="item4">
                    <div class="idea-items-tit"><i></i>办园理念</div>
                    <div class="idea-items-con idea-custom">
                        <div class="idea-items-img idea-items-two">
                            <ul>
                                @foreach($idea as $ke => $va)
                                <li>
                                    <div class="items-two-img">
                                        <img src="{{$va->ide_pic}}" alt="">
                                    </div>
                                    <p class="two-p">{!! $va->ide_text1 !!} <i>{!! $va->ide_text2 !!}</i></p>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="culture-idea-items" id="item5">
                    <div class="idea-items-tit"><i></i>办园宗旨</div>
                    <div class="idea-items-con idea-custom">
                        <div class="idea-items-img idea-items-bottom">
                            <img src="{{$purpose[0]->pur_pic}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="culture-idea-items" id="item6">
                    <div class="idea-items-tit"><i></i>园训</div>
                    <div class="idea-items-con idea-custom">
                        <div class="idea-items-img idea-items-list">
                            <ul>
                                <li>
                                    <img src="{{$teach[0]->tea_pic1}}" alt="">
                                </li>
                                <li>
                                    <img src="{{$teach[0]->tea_pic2}}" alt="">
                                </li>
                                <li>
                                    <img src="{{$teach[0]->tea_pic3}}" alt="">
                                </li>
                            </ul>
                        </div>
                        <p>{!! $teach[0]->tea_text1 !!}</p>
                        <p class="font-s">{!! $teach[0]->tea_text2 !!}</p>
                    </div>
                </div>
                <div class="culture-idea-items" id="item7">
                    <div class="idea-items-tit"><i></i>团队文化</div>
                    <div class="idea-items-con">
                        <div class="idea-end-item">
                            <img src="{{$team[0]->team_pic}}" alt="">
                            <div class="idea-end-text">
                                <p>{!! $team[0]->team_text1 !!}</p>
                                <p>{!! $team[0]->team_text2 !!}</p>
                            </div>
                        </div>
                        <div class="idea-end-item">
                            <div class="idea-end-text">
                                <p>{!! $team[1]->team_text1 !!}</p>
                                <p>{!! $team[1]->team_text2 !!}</p>
                            </div>
                            <img src="{{$team[1]->team_pic}}" alt="">
                        </div>
                        <div class="idea-end-item">
                            <img src="{{$team[2]->team_pic}}" alt="">
                            <div class="idea-end-text">
                                <p>{!! $team[2]->team_text1 !!}</p>
                                <p>{!! $team[2]->team_text2 !!}</p>
                            </div>
                        </div>
                        <div class="idea-end-item">
                            <div class="idea-end-text">
                                <p>{!! $team[3]->team_text1 !!}</p>
                                <p>{!! $team[3]->team_text2 !!}</p>
                            </div>
                            <img src="{{$team[3]->team_pic}}" alt="">
                        </div>
                        <div class="idea-end-item">
                            <img src="{{$team[4]->team_pic}}" alt="">
                            <div class="idea-end-text">
                                <p>{!! $team[4]->team_text1 !!}</p>
                                <p>{!! $team[4]->team_text2 !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--视觉形象-->
            <div class="cul-mob-items cul-mob-idea">
                <div class="culture-idea-items" id="item8">
                    <div class="idea-items-tit"><i></i>标志</div>
                    <div class="idea-items-con vision-items-con">
                        <div class="idea-items-img">
                            <img src="{{$logo[0]->logo_pic}}" alt="">
                        </div>
                        <p>{!! $logo[0]->logo_text1 !!}</p>
                        <p>{!! $logo[0]->logo_text2 !!}</p>
                    </div>
                </div>
                <div class="culture-idea-items" id="item9">
                    <div class="idea-items-tit"><i></i>吉祥物</div>
                    <div class="idea-items-con vision-items-con">
                        <div class="idea-items-img">
                            <img src="{{$mascot[0]->mas_pic}}" alt="">
                        </div>
                        <p>{!! $mascot[0]->mas_text !!}</p>
                    </div>
                </div>
                <div class="culture-idea-items" id="item10">
                    <div class="idea-items-tit"><i></i>园服</div>
                    <div class="idea-items-con vision-items-con">
                        @foreach($clothes as $ke => $va)
                        @if($ke == 0)
                        <div class="idea-items-img">
                        @elseif($ke == 1)
                        <div class="idea-items-img" style="margin-top:50px;">
                        @endif
                            <img src="{{$va->clo_pic}}" alt="">
                        </div>
                        <div class="vision-clothes">{!! $va->clo_title1 !!}</div>
                        <p>{!! $va->clo_text1 !!}</p>
                        <div class="vision-clothes vision-clothes-sport">{!! $va->clo_title2 !!}</div>
                        <p>{!! $va->clo_text2 !!}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <!--环境文化-->
            <div class="cul-mob-items cul-mob-ambient" style="display:block;">
                <img src="{{$env[0]->env_pic1}}" alt="">
                <img src="{{$env[0]->env_pic2}}" alt="">
            </div>
            <!--食育文化-->
            <ul class="du-cul-content cul-mob-items">
                @foreach($food as $ke => $va)
                <li class="cul-content-item">
                    <div class="content-item_img">
                        <img src="{{$va->clock_pic}}" alt="" class="item_img_one">
                        <img src="{{$va->food_pic}}" alt="" class="item_img_two">
                    </div>
                    <div class="content-item_text">
                        <div class="item_text_time">
                            <span>{!! $va->food_title !!}</span>
                            <span>{!! $va->food_time !!}</span>
                        </div>
                        <p>{!! $va->food_text !!}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
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
    var culNavs=$(".cul-nav-right li");
    var culMobs=$('.cul-mob-items');
    var culImgs=$('.cul-nav-left img');
    culNavs.on('click',function () {
        var index=culNavs.index(this);
        culNavs.removeClass('culActive').eq(index).addClass('culActive');
        culMobs.hide().eq(index).show();
        culImgs.hide().eq(index).show();
    })
    $("#li1").click(function(){
        $("#cul").html('园所理念');
    })
    $("#li2").click(function(){
        $("#cul").html('视觉形象');
    })
    $("#li3").click(function(){
        $("#cul").html('环境文化');
    })
    $("#li4").click(function(){
        $("#cul").html('食育文化');
    })
</script>
</html>
