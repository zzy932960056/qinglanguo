<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
        当前位置 ：<span><a href="/culture">青蓝果文化</a></span>><span>环境文化</span>
    </div>
    <!--面包屑 end-->
    <!--内容-->
    <div class="culture-container">
        <div class="culture-tit"></div>
        <div class="culture-con-content">
            <div class="culture-nav">
                <ul>
                    <li>
                        <a href="/culture">园所理念</a>
                    </li>
                    <li>
                        <a href="/culture_vi">视觉形象</a>
                    </li>
                    <li>
                        <a href="/culture_env" class="active">环境文化</a>
                    </li>
                    <li>
                        <a href="/culture_food">食育文化</a>
                    </li>
                </ul>
            </div>
            <div class="culture-ambient">
                <img src="{{$env[0]->env_pic1}}" alt="">
                <img src="{{$env[0]->env_pic2}}" alt="">
                <img src="{{$env[0]->env_pic3}}" alt="">
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
</html>
