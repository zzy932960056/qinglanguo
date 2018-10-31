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
    <title>青蓝果之家</title>
    <link rel="stylesheet" href="{{URL::asset('/css_qt/base.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css_qt/mobile.css')}}">
</head>
<body>
<div class="cyanine-mob-container">
    <!--header start-->
    @include('yd_navigator')
    <!--header end-->
    <!--面包屑 start-->
    <div class="cyanime-mob-crumbs">
        当前位置 ：<span><a href="/home">青蓝果之家</a></span>-<span id="gar">中心园</span>
    </div>
    <!--面包屑 end-->
    <!--内容 start-->
    <div class="home-mob-container">
        <div class="home-mob-tbg"></div>
        <div class="home-mob-nav">
            <ul class="home-nav-ul">
                <li class="home-nav-tit">
                    <img src="{{URL::asset('/images_yd/ho1-tit.png')}}" alt="" style="display: block">
                    <img src="{{URL::asset('/images_yd/ho2-tit.png')}}" alt="">
                    <img src="{{URL::asset('/images_yd/ho3-tit.png')}}" alt="">
                    <img src="{{URL::asset('/images_yd/ho4-tit.png')}}" alt="">
                    <img src="{{URL::asset('/images_yd/ho5-tit.png')}}" alt="">
                </li>
                <li class="home-nav-item" id="li1">
                    <i class="home-circle active"></i>
                    <img src="{{URL::asset('/images_yd/ho1.png')}}" alt="">
                </li>
                <li class="home-nav-item" id="li2">
                    <i class="home-circle"></i>
                    <img src="{{URL::asset('/images_yd/ho2.png')}}" alt="">
                </li>
                <li class="home-nav-item" id="li3">
                    <i class="home-circle"></i>
                    <img src="{{URL::asset('/images_yd/ho3.png')}}" alt="">
                </li>
                <li class="home-nav-item" id="li4">
                    <i class="home-circle"></i>
                    <img src="{{URL::asset('/images_yd/ho4.png')}}" alt="">
                </li>
                <li class="home-nav-item" id="li5">
                    <i class="home-circle"></i>
                    <img src="{{URL::asset('/images_yd/ho5.png')}}" alt="">
                </li>
            </ul>
        </div>
        <div class="home-mob-content">
            <div class="home-mob-items-list" style="display:block">
                <div class="home-mob-items">
                    <div class="home-items-tit">
                        <img src="{{URL::asset('/images_yd/sj.png')}}" alt="">
                        <span>园所概况</span>
                    </div>
                    <div class="home-items-con">
                        {!! $home[0]->home_survey !!}
                    </div>
                </div>
                <div class="home-mob-items">
                    <div class="home-items-tit">
                        <img src="{{URL::asset('/images_yd/sj.png')}}" alt="">
                        <span>园所荣誉</span>
                    </div>
                    <div class="home-items-con">
                        {!! $home[0]->home_honor !!}
                    </div>
                </div>
                <div class="home-mob-items">
                    <div class="home-items-tit">
                        <img src="{{URL::asset('/images_yd/sj.png')}}" alt="">
                        <span>园所环境</span>
                    </div>
                    <div class="home-items-con">
                        <img src="{{$home[0]->home_env}}" alt="" class="home-items-img">
                    </div>
                </div>
                <div class="home-mob-items">
                    <div class="home-items-tit">
                        <img src="{{URL::asset('/images_yd/sj.png')}}" alt="">
                        <span>联系方式</span>
                    </div>
                    <div class="home-items-con">
                        <p>联系人：{!! $home[0]->home_linkman !!}</p>
                        <p>联系方式：{!! $home[0]->home_tel !!}</p>
                        <p>园所地址：{!! $home[0]->home_add !!}</p>
                    </div>
                </div>
            </div>
            <div class="home-mob-items-list">
                <div class="home-mob-items">
                    <div class="home-items-tit">
                        <img src="{{URL::asset('/images_yd/sj.png')}}" alt="">
                        <span>园所概况</span>
                    </div>
                    <div class="home-items-con">
                        {!! $home[1]->home_survey !!}
                    </div>
                </div>
                <div class="home-mob-items">
                    <div class="home-items-tit">
                        <img src="{{URL::asset('/images_yd/sj.png')}}" alt="">
                        <span>园所荣誉</span>
                    </div>
                    <div class="home-items-con">
                        {!! $home[1]->home_honor !!}
                    </div>
                </div>
                <div class="home-mob-items">
                    <div class="home-items-tit">
                        <img src="{{URL::asset('/images_yd/sj.png')}}" alt="">
                        <span>园所环境</span>
                    </div>
                    <div class="home-items-con">
                        <img src="{{$home[1]->home_env}}" alt="" class="home-items-img">
                    </div>
                </div>
                <div class="home-mob-items">
                    <div class="home-items-tit">
                        <img src="{{URL::asset('/images_yd/sj.png')}}" alt="">
                        <span>联系方式</span>
                    </div>
                    <div class="home-items-con">
                        <p>联系人：{!! $home[1]->home_linkman !!}</p>
                        <p>联系方式：{!! $home[1]->home_tel !!}</p>
                        <p>园所地址：{!! $home[1]->home_add !!}</p>
                    </div>
                </div>
            </div>
            <div class="home-mob-items-list">
                <div class="home-mob-items">
                    <div class="home-items-tit">
                        <img src="{{URL::asset('/images_yd/sj.png')}}" alt="">
                        <span>园所概况</span>
                    </div>
                    <div class="home-items-con">
                        {!! $home[2]->home_survey !!}
                    </div>
                </div>
                <div class="home-mob-items">
                    <div class="home-items-tit">
                        <img src="{{URL::asset('/images_yd/sj.png')}}" alt="">
                        <span>园所荣誉</span>
                    </div>
                    <div class="home-items-con">
                       {!! $home[2]->home_honor !!}
                    </div>
                </div>
                <div class="home-mob-items">
                    <div class="home-items-tit">
                        <img src="{{URL::asset('/images_yd/sj.png')}}" alt="">
                        <span>园所环境</span>
                    </div>
                    <div class="home-items-con">
                        <img src="{{$home[2]->home_env}}" alt="" class="home-items-img">
                    </div>
                </div>
                <div class="home-mob-items">
                    <div class="home-items-tit">
                        <img src="{{URL::asset('/images_yd/sj.png')}}" alt="">
                        <span>联系方式</span>
                    </div>
                    <div class="home-items-con">
                        <p>联系人：{!! $home[2]->home_linkman !!}</p>
                        <p>联系方式：{!! $home[2]->home_tel !!}</p>
                        <p>园所地址：{!! $home[2]->home_add !!}</p>
                    </div>
                </div>
            </div>
            <div class="home-mob-items-list">
                <div class="home-mob-items">
                    <div class="home-items-tit">
                        <img src="{{URL::asset('/images_yd/sj.png')}}" alt="">
                        <span>园所概况</span>
                    </div>
                    <div class="home-items-con">
                        {!! $home[3]->home_survey !!}
                    </div>
                </div>
                <div class="home-mob-items">
                    <div class="home-items-tit">
                        <img src="{{URL::asset('/images_yd/sj.png')}}" alt="">
                        <span>园所荣誉</span>
                    </div>
                    <div class="home-items-con">
                        {!! $home[3]->home_honor !!}
                    </div>
                </div>
                <div class="home-mob-items">
                    <div class="home-items-tit">
                        <img src="{{URL::asset('/images_yd/sj.png')}}" alt="">
                        <span>园所环境</span>
                    </div>
                    <div class="home-items-con">
                        <img src="{{$home[3]->home_env}}" alt="" class="home-items-img">
                    </div>
                </div>
                <div class="home-mob-items">
                    <div class="home-items-tit">
                        <img src="{{URL::asset('/images_yd/sj.png')}}" alt="">
                        <span>联系方式</span>
                    </div>
                    <div class="home-items-con">
                        <p>联系人：{!! $home[3]->home_linkman !!}</p>
                        <p>联系方式：{!! $home[3]->home_tel !!}</p>
                        <p>地址：{!! $home[3]->home_add !!}</p>
                    </div>
                </div>
            </div>
            <div class="home-mob-items-list">
                <div class="home-mob-items">
                    <div class="home-items-tit">
                        <img src="{{URL::asset('/images_yd/sj.png')}}" alt="">
                        <span>园所概况</span>
                    </div>
                    <div class="home-items-con">
                        {!! $home[4]->home_survey !!}
                    </div>
                </div>
                <div class="home-mob-items">
                    <div class="home-items-tit">
                        <img src="{{URL::asset('/images_yd/sj.png')}}" alt="">
                        <span>园所荣誉</span>
                    </div>
                    <div class="home-items-con">
                        {!! $home[4]->home_honor !!}
                    </div>
                </div>
                <div class="home-mob-items">
                    <div class="home-items-tit">
                        <img src="{{URL::asset('/images_yd/sj.png')}}" alt="">
                        <span>园所环境</span>
                    </div>
                    <div class="home-items-con">
                        <img src="{{$home[4]->home_env}}" alt="" class="home-items-img">
                    </div>
                </div>
                <div class="home-mob-items">
                    <div class="home-items-tit">
                        <img src="{{URL::asset('/images_yd/sj.png')}}" alt="">
                        <span>联系方式</span>
                    </div>
                    <div class="home-items-con">
                        <p>联系人：{!! $home[4]->home_linkman !!}</p>
                        <p>联系方式：{!! $home[4]->home_tel !!}</p>
                        <p>园所地址：{!! $home[4]->home_add !!}</p>
                    </div>
                </div>
            </div>
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
    var homeItems=$(".home-nav-item");
    var homeImgs=$('.home-nav-tit img');
    var homeLists=$(".home-mob-items-list");
    homeItems.on('click',function () {
        var index=homeItems.index(this);
        homeItems.find('i').removeClass('active').eq(index).addClass('active');
        homeImgs.hide().eq(index).show();
        homeLists.hide().eq(index).show();
    })
    $("#li1").click(function(){
        $("#gar").html('中心园');
    })
    $("#li2").click(function(){
        $("#gar").html('王舍园');
    })
    $("#li3").click(function(){
        $("#gar").html('南家园');
    })
    $("#li4").click(function(){
        $("#gar").html('芳草园');
    })
    $("#li5").click(function(){
        $("#gar").html('颐丰园');
    })
</script>
</html>
