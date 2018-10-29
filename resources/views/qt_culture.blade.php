<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>青蓝果文化</title>
    @include('qt_link')
    <link rel="stylesheet" href="{{URL::asset('/css_qt/base.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css_qt/main.css')}}">
</head>
<body>
<div class="cyanine-container">
    <!--header-->
    @include('qt_navigator')
    <!--header end-->
    <!--面包屑-->
    <div class="crumbs">
        当前位置 ：<span><a href="/culture">青蓝果文化</a></span>><span id="cul">园所理念</span>
    </div>
    <!--面包屑 end-->
    <!--内容-->
    <div  class="culture-container">
        <div class="culture-tit"></div>
        <div class="culture-con-content">
            <div class="culture-nav">
                <ul>
                    <li id="li1">
                        <a href="javascript:;"  class="active">园所理念</a>
                    </li>
                    <li id="li2">
                        <a href="javascript:;">视觉形象</a>
                    </li>
                    <li id="li3">
                        <a href="javascript:;">环境文化</a>
                    </li>
                    <li id="li4">
                        <a href="javascript:;">食育文化</a>
                    </li>
                </ul>
            </div>
            <div class="culture-big-box">
                <!--园所理念-->
                <div class="culture-idea-con culture-big-item" style="display:block;">
                    <div class="culture-idea-left ">
                        <div class="culture-idea-tit">
                            <img src="{{URL::asset('/images/idea-tit.jpg')}}" alt="">
                        </div>
                        <div class="culture-idea-nav">
                            <ul class="culture-item-nav">
                                <li><a flag="item1" href="javascript:;"  class="actives">青蓝果解析</a></li>
                                <li><a flag="item2" href="javascript:;">青蓝精神</a></li>
                                <li><a flag="item3" href="javascript:;" >青蓝果标语</a></li>
                                <li><a flag="item4" href="javascript:;" >办园理念</a></li>
                                <li><a flag="item5" href="javascript:;" >办园宗旨</a></li>
                                <li><a flag="item6" href="javascript:;" >园训</a></li>
                                <li><a flag="item7" href="javascript:;" >团队文化</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="culture-idea-right">
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
                                <ul class="idea-items-end">
                                    <li>
                                        <div class="idea-end-item">
                                            <img src="{{$team[0]->team_pic}}" alt="">
                                            <div class="idea-end-text">
                                                <p>{!! $team[0]->team_text1 !!}</p>
                                                <p>{!! $team[0]->team_text2 !!}</p>
                                            </div>
                                        </div>
                                        <div class="idea-end-item">
                                            <img src="{{$team[1]->team_pic}}" alt="">
                                            <div class="idea-end-text">
                                                <p>{!! $team[1]->team_text1 !!}</p>
                                                <p>{!! $team[1]->team_text2 !!}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="idea-end-item">
                                            <img src="{{$team[2]->team_pic}}" alt="">
                                            <div class="idea-end-text">
                                                <p>{!! $team[2]->team_text1 !!}</p>
                                                <p>{!! $team[2]->team_text2 !!}</p>
                                            </div>
                                        </div>
                                        <div class="idea-end-item">
                                            <img src="{{$team[3]->team_pic}}" alt="">
                                            <div class="idea-end-text">
                                                <p>{!! $team[3]->team_text1 !!}</p>
                                                <p>{!! $team[3]->team_text2 !!}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="idea-end-item">
                                            <img src="{{$team[4]->team_pic}}" alt="">
                                            <div class="idea-end-text">
                                                <p>{!! $team[4]->team_text1 !!}</p>
                                                <p>{!! $team[4]->team_text2 !!}</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--视觉形象-->
                <div class="culture-idea-con culture-big-item">
                    <div class="culture-idea-left">
                        <div class="culture-idea-tit">
                            <img src="{{URL::asset('/images/sj.jpg')}}" alt="">
                        </div>
                        <div class="culture-idea-nav culture-vision-nav">
                            <ul class="culture-item-nav">
                                <li><a flag="item8"  href="javascript:;" class="actives">标志</a></li>
                                <li><a flag="item9" href="javascript:;">吉祥物</a></li>
                                <li><a flag="item10" href="javascript:;">园服</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="culture-idea-right">
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
                </div>
                <!--环境文化-->
                <div class="culture-ambient culture-big-item">
                    <img src="{{$env[0]->env_pic1}}" alt="">
                    <img src="{{$env[0]->env_pic2}}" alt="">
                    <img src="{{$env[0]->env_pic3}}" alt="">
                </div>
                <!--食育文化-->
                <div class="culture-food culture-big-item">
                    <div class="culture-food-con">
                        <ul>
                            <li class="culture-food-tit">
                                <img src="{{URL::asset('/images/food-tit.jpg')}}" alt="">
                            </li>
                            @foreach($food as $ke => $va)
                            @if($ke == 0)
                            <li class="culture-food-start">
                                <div class="culture-food-img">
                                    <img src="{{$va->clock_pic}}" alt="" class="time">
                                    <img src="{{$va->food_pic}}" alt="" class="food-img-inner">
                                </div>
                                <div class="food-item-text">
                                    <div class="food-item-time">
                                        <span>{!! $va->food_title !!}</span>
                                        <span>{!! $va->food_time !!}</span>
                                    </div>
                                    <p>{!! $va->food_text !!}</p>
                                </div>
                            </li>
                            @elseif($ke == 11)
                            <li class="culture-food-end">
                                <img src="{{$va->clock_pic}}" alt="" class="time">
                                <div class="culture-food-img">
                                    <img src="{{$va->food_pic}}" alt="" class="food-img-inner">
                                </div>
                                <div class="food-item-text">
                                    <div class="food-item-time">
                                        <span>{!! $va->food_title !!}</span>
                                        <span>{!! $va->food_time !!}</span>
                                    </div>
                                    <p>{!! $va->food_text !!}</p>
                                </div>
                            </li>
                            @else
                            <li>
                                <img src="{{$va->clock_pic}}" alt="" class="time">
                                <div class="culture-food-img">
                                    <img src="{{$va->food_pic}}" alt="" class="food-img-inner">
                                </div>
                                <div class="food-item-text">
                                    <div class="food-item-time">
                                        <span>{!! $va->food_title !!}</span>
                                        <span>{!! $va->food_time !!}</span>
                                    </div>
                                    <p>{!! $va->food_text !!}</p>
                                </div>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--内容 end-->
    <!--footer-->
    @include('qt_footer')
    <!--footer end-->
</div>
</body>
<script src="{{URL::asset('/js_qt/jquery-2.1.3.min.js')}}"></script>
<script src="{{URL::asset('/js_qt/main.js')}}"></script>
<script src="{{URL::asset('/js_qt/scroll.js')}}"></script>
<script>
    $('.culture-nav ul li a').on('click',function(){
        var index=$('.culture-nav ul li a').index(this);
        $('.culture-nav ul li a').removeClass('active').eq(index).addClass('active');
        $('.culture-big-item').hide().eq(index).show()
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
