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
        当前位置 ：<span><a href="/culture">青蓝果文化</a></span>><span>视觉形象</span>
    </div>
    <!--面包屑 end-->
    <!--内容-->
    <div  class="culture-container">
        <div class="culture-tit"></div>
        <div class="culture-con-content">
            <div class="culture-nav">
                <ul>
                    <li>
                        <a href="/culture">园所理念</a>
                    </li>
                    <li>
                        <a href="/culture_vi" class="active">视觉形象</a>
                    </li>
                    <li>
                        <a href="/culture_env">环境文化</a>
                    </li>
                    <li>
                        <a href="/culture_food">食育文化</a>
                    </li>
                </ul>
            </div>
            <div class="culture-idea-con">
                <div class="culture-idea-left">
                    <div class="culture-idea-tit">
                        <img src="{{URL::asset('/images/idea-tit.jpg')}}" alt="">
                    </div>
                    <div class="culture-idea-nav culture-vision-nav">
                        <ul class="culture-item-nav">
                            <li><a flag="item1"  href="javascript:;" class="active">标志</a></li>
                            <li><a flag="item2" href="javascript:;">吉祥物</a></li>
                            <li><a flag="item3" href="javascript:;">园服</a></li>
                        </ul>
                    </div>
                </div>
                <div class="culture-idea-right">
                    <div class="culture-idea-items" id="item1">
                        <div class="idea-items-tit"><i></i>标志</div>
                        <div class="idea-items-con vision-items-con">
                            <div class="idea-items-img">
                                <img src="{{$logo[0]->logo_pic}}" alt="">
                            </div>
                            <p>{!! $logo[0]->logo_text1 !!}</p>
                            <p>{!! $logo[0]->logo_text2 !!}</p>
                        </div>
                    </div>
                    <div class="culture-idea-items" id="item2">
                        <div class="idea-items-tit"><i></i>吉祥物</div>
                        <div class="idea-items-con vision-items-con">
                            <div class="idea-items-img">
                                <img src="{{$mascot[0]->mas_pic}}" alt="">
                            </div>
                            <p>{!! $mascot[0]->mas_text !!}</p>
                        </div>
                    </div>
                    <div class="culture-idea-items" id="item3">
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
</html>
