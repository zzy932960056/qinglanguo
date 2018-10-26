<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>青蓝果教育</title>
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
        当前位置 ：<span><a href="/education">青蓝果教育</a></span>
    </div>
    <!--面包屑 end-->
    <!--内容-->
    <div class="teach-container">
        <div class="teach-con-tit common-tit"></div>
        <div class="teach-con-box">
            <div class="teach-nav">
                <ul class="culture-item-nav">
                    <li><a flag="item1" href="javascript:;" class="active">传统文化</a></li>
                    <li><a flag="item2" href="javascript:;">探究空间</a></li>
                    <li><a flag="item3" href="javascript:;">健康领动</a></li>
                    <li><a flag="item4" href="javascript:;">艺术创想</a></li>
                    <li><a flag="item5" href="javascript:;">社会链接</a></li>
                    <li><a flag="item6" href="javascript:;">师资力量</a></li>
                </ul>
            </div>
            <div class="teach-nav-content">
                <div class="teach-con-list" id="item1">
                    <div class="teach-list-tit">传统文化</div>
                    <div class="teach-list-con">
                        <div class="teach-list-item">
                            <img src="{{$edu_culture[0]->cul_pic1}}" alt="">
                            <div class="teach-list-text">
                                <p>
                                    {!! $edu_culture[0]->cul_text1 !!}
                                </p>
                            </div>
                        </div>
                        <div class="teach-list-item">
                            <div class="teach-list-text">
                                <p>
                                    {!! $edu_culture[0]->cul_text2 !!}
                                </p>
                            </div>
                            <img src="{{$edu_culture[0]->cul_pic2}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="teach-con-list" id="item2">
                    <div class="teach-list-tit">探究空间</div>
                    <div class="teach-list-con">
                        <div class="teach-list-item">
                            <img src="{{$edu_space[0]->spa_pic1}}" alt="">
                            <div class="teach-list-text">
                                <p>
                                    {!! $edu_space[0]->spa_text1 !!}
                                </p>
                                <p>
                                    {!! $edu_space[0]->spa_text2 !!}
                                </p>
                            </div>
                        </div>
                        <div class="teach-list-item">
                            <div class="teach-list-text">
                                <p>
                                    {!! $edu_space[0]->spa_text3 !!}
                                </p>
                                <p>
                                    {!! $edu_space[0]->spa_text4 !!}
                                </p>
                            </div>
                            <img src="{{$edu_space[0]->spa_pic2}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="teach-con-list" id="item3">
                    <div class="teach-list-tit">健康领动</div>
                    <div class="teach-list-con">
                        <div class="teach-list-item">
                            <img src="{{$edu_health[0]->hea_pic1}}" alt="" class="teach-list-img">
                            <div class="teach-list-text">
                                <p>
                                    {!! $edu_health[0]->hea_text1 !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="teach-con-list" id="item4">
                    <div class="teach-list-tit">艺术创想</div>
                    <div class="teach-list-con">
                        <div class="teach-list-item">
                            <img src="{{$edu_art[0]->art_pic1}}" alt="" class="teach-list-img">
                            <div class="teach-list-text">
                                <p>
                                  {!! $edu_art[0]->art_text1 !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="teach-con-list" id="item5">
                    <div class="teach-list-tit">社会链接</div>
                    <div class="teach-list-con">
                        <div class="teach-list-item">
                            <img src="{{$edu_social[0]->soc_pic1}}" alt="">
                            <div class="teach-list-text">
                                <p>
                                    {!! $edu_social[0]->soc_text1 !!}
                                </p>
                            </div>
                        </div>
                        <div class="teach-list-item">
                            <div class="teach-list-text">
                                <p>
                                    {!! $edu_social[0]->soc_text2 !!}
                                </p>
                            </div>
                            <img src="{{$edu_social[0]->soc_pic2}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="teach-con-list" id="item6">
                    <div class="teach-list-tit">师资力量</div>
                    <div class="teach-opr-box">
                        @foreach($edu_teach as $ke => $va)
                        <div class="teach-opr-list">
                            <img src="{{$va->k_pic1}}" alt="" class="te{{$ke*2+1}}">
                            <div class="teach-opr-text">
                                <h3>{!! $va->k_name !!}</h3>
                                <p class="teach-zw">{!! $va->k_position !!}</p>
                                <div class="teach-text-item">
                                    <i></i>
                                    <div class="text-list">
                                        <p>{!! $va->k_text1 !!}</p>
                                    </div>
                                </div>
                                <div class="teach-text-item">
                                    <i></i>
                                    <div class="text-list">
                                        <p>{!! $va->k_text2 !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="teach-opr-img">
                            <img src="{{$va->k_pic2}}" alt="" class="te{{$ke*2+2}} tecom">
                        </div>
                        @endforeach
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
<script>
    $(window).scroll(function(){
        var navLeft=$('.teach-con-box').offset().top;
        var scrollTop=$(window).scrollTop();
        console.log(navLeft)
        console.log(scrollTop)
        if(scrollTop>=navLeft){
            $(".culture-item-nav").css({position:'relative',top:(scrollTop-navLeft-0)+"px"})
        }
    })
    $('.culture-item-nav li a').on("click",function(){
        var oA=$(this);
        var index=oA.parent().index();
        var h=$('.teach-con-list').eq(index).offset().top + 'px';

        if(oA.attr("class") != "active"){
            $(".active").removeClass("active");
            oA.addClass('active')
            $('html,body').animate({scrollTop:h},300);
        }
    })
</script>
</html>
