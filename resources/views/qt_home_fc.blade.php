<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>青蓝果之家</title>
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
        当前位置 ：<span><a href="/home">青蓝果之家</a></span>><span id="gar">芳草园</span>
    </div>
    <!--面包屑 end-->
    <!--内容-->
    <div class="culture-container home-box-inner">
        <div class="culture-home-tit"></div>
        <div class="culture-con-content home-con-content">
            <div class="culture-nav culture-home-nav">
                <ul class="culture-home-ul">
                    <li id="li1">
                        <i class="home-circle"></i>
                        <img src="{{URL::asset('/images/home1.jpg')}}" alt="">
                    </li>
                    <li id="li2">
                        <i class="home-circle"></i>
                        <img src="{{URL::asset('/images/home2.jpg')}}" alt="">
                    </li>
                    <li id="li3">
                        <i class="home-circle"></i>
                        <img src="{{URL::asset('/images/home3.jpg')}}" alt="">
                    </li>
                    <li id="li4">
                        <i class="home-circle active"></i>
                        <img src="{{URL::asset('/images/home4.jpg')}}" alt="">
                    </li>
                    <li id="li5">
                        <i class="home-circle"></i>
                        <img src="{{URL::asset('/images/home5.jpg')}}" alt="">
                    </li>
                </ul>
            </div>
            <div class="culture-idea-con home-con">
                <div class="home-warp-items">
                    <div class="culture-idea-left">
                        <div class="culture-idea-tit home-tit-left">
                            <img src="{{URL::asset('/images/home-z.jpg')}}" alt="">
                        </div>
                        <div class="culture-idea-nav culture-left-nav">
                            <ul class="culture-item-nav">
                                <li><a flag="item1" href="javascript:;" class="actives">园所概况</a></li>
                                <li><a flag="item2" href="javascript:;">园所荣誉</a></li>
                                <li><a flag="item3" href="javascript:;">园所环境</a></li>
                                <li><a flag="item4" href="javascript:;">联系方式</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="culture-idea-right culture-home-right">
                        <div class="culture-items-container">
                            <div class="culture-idea-items" id="item1">
                                <div class="idea-items-tit home-items-tit"><i></i>园所概况</div>
                                <div class="idea-items-con home-items-con">
                                    {!! $home[0]->home_survey !!}
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item2">
                                <div class="idea-items-tit home-items-tit"><i></i>园所荣誉</div>
                                <div class="idea-items-con home-items-con">
                                    {!! $home[0]->home_honor !!}
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item3">
                                <div class="idea-items-tit home-items-tit"><i></i>园所环境</div>
                                <div class="idea-items-con home-items-con">
                                    <img src="{{$home[0]->home_env}}" alt="">
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item4">
                                <div class="idea-items-tit home-items-tit"><i></i>联系方式</div>
                                <div class="idea-items-con home-items-con">
                                    <p>联系人：{!! $home[0]->home_linkman !!}</p>
                                    <p>联系方式：{!! $home[0]->home_tel !!}</p>
                                    <p>园所地址：{!! $home[0]->home_add !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-warp-items">
                    <div class="culture-idea-left">
                        <div class="culture-idea-tit home-tit-left">
                            <img src="{{URL::asset('/images/home-w.jpg')}}" alt="">
                        </div>
                        <div class="culture-idea-nav culture-left-nav">
                            <ul class="culture-item-nav">
                                <li><a flag="item1" href="javascript:;" class="actives">园所概况</a></li>
                                <li><a flag="item2" href="javascript:;">园所荣誉</a></li>
                                <li><a flag="item3" href="javascript:;">园所环境</a></li>
                                <li><a flag="item4" href="javascript:;">联系方式</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="culture-idea-right culture-home-right">
                        <div class="culture-items-container">
                            <div class="culture-idea-items" id="item5">
                                <div class="idea-items-tit home-items-tit"><i></i>园所概况</div>
                                <div class="idea-items-con home-items-con">
                                    {!! $home[1]->home_survey !!}
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item6">
                                <div class="idea-items-tit home-items-tit"><i></i>园所荣誉</div>
                                <div class="idea-items-con home-items-con">
                                    {!! $home[1]->home_honor !!}
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item7">
                                <div class="idea-items-tit home-items-tit"><i></i>园所环境</div>
                                <div class="idea-items-con home-items-con">
                                    <img src="{{$home[1]->home_env}}" alt="">
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item8">
                                <div class="idea-items-tit home-items-tit"><i></i>联系方式</div>
                                <div class="idea-items-con home-items-con">
                                    <p>联系人：{!! $home[1]->home_linkman !!}</p>
                                    <p>联系方式：{!! $home[1]->home_tel !!}</p>
                                    <p>园所地址：{!! $home[1]->home_add !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-warp-items">
                    <div class="culture-idea-left">
                        <div class="culture-idea-tit home-tit-left">
                            <img src="{{URL::asset('/images/home-n.jpg')}}" alt="">
                        </div>
                        <div class="culture-idea-nav culture-left-nav">
                            <ul class="culture-item-nav">
                                <li><a flag="item1" href="javascript:;" class="actives">园所概况</a></li>
                                <li><a flag="item2" href="javascript:;">园所荣誉</a></li>
                                <li><a flag="item3" href="javascript:;">园所环境</a></li>
                                <li><a flag="item4" href="javascript:;">联系方式</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="culture-idea-right culture-home-right">
                        <div class="culture-items-container">
                            <div class="culture-idea-items" id="item9">
                                <div class="idea-items-tit home-items-tit"><i></i>园所概况</div>
                                <div class="idea-items-con home-items-con">
                                    {!! $home[2]->home_survey !!}
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item10">
                                <div class="idea-items-tit home-items-tit"><i></i>园所荣誉</div>
                                <div class="idea-items-con home-items-con">
                                  {!! $home[2]->home_honor !!}
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item11">
                                <div class="idea-items-tit home-items-tit"><i></i>园所环境</div>
                                <div class="idea-items-con home-items-con">
                                    <img src="{{$home[2]->home_env}}" alt="">
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item12">
                                <div class="idea-items-tit home-items-tit"><i></i>联系方式</div>
                                <div class="idea-items-con home-items-con">
                                    <p>联系人：{!! $home[2]->home_linkman !!}</p>
                                    <p>联系方式：{!! $home[2]->home_tel !!}</p>
                                    <p>园所地址：{!! $home[2]->home_add !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-warp-items" style="display:block;">
                    <div class="culture-idea-left">
                        <div class="culture-idea-tit home-tit-left">
                            <img src="{{URL::asset('/images/home-f.jpg')}}" alt="">
                        </div>
                        <div class="culture-idea-nav culture-left-nav">
                            <ul class="culture-item-nav">
                                <li><a flag="item1" href="javascript:;" class="actives">园所概况</a></li>
                                <li><a flag="item2" href="javascript:;">园所荣誉</a></li>
                                <li><a flag="item3" href="javascript:;">园所环境</a></li>
                                <li><a flag="item4" href="javascript:;">联系方式</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="culture-idea-right culture-home-right">
                        <div class="culture-items-container">
                            <div class="culture-idea-items" id="item13">
                                <div class="idea-items-tit home-items-tit"><i></i>园所概况</div>
                                <div class="idea-items-con home-items-con">
                                    {!! $home[3]->home_survey !!}
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item14">
                                <div class="idea-items-tit home-items-tit"><i></i>园所荣誉</div>
                                <div class="idea-items-con home-items-con">
                                    {!! $home[3]->home_honor !!}
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item15">
                                <div class="idea-items-tit home-items-tit"><i></i>园所环境</div>
                                <div class="idea-items-con home-items-con">
                                    <img src="{{$home[3]->home_env}}" alt="">
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item16">
                                <div class="idea-items-tit home-items-tit"><i></i>联系方式</div>
                                <div class="idea-items-con home-items-con">
                                    <p>联系人：{!! $home[3]->home_linkman !!}</p>
                                    <p>联系方式：{!! $home[3]->home_tel !!}</p>
                                    <p>地址：{!! $home[3]->home_add !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-warp-items">
                    <div class="culture-idea-left">
                        <div class="culture-idea-tit home-tit-left">
                            <img src="{{URL::asset('/images/home-y.jpg')}}" alt="">
                        </div>
                        <div class="culture-idea-nav culture-left-nav">
                            <ul class="culture-item-nav">
                                <li><a flag="item1" href="javascript:;" class="actives">园所概况</a></li>
                                <li><a flag="item2" href="javascript:;">园所荣誉</a></li>
                                <li><a flag="item3" href="javascript:;">园所环境</a></li>
                                <li><a flag="item4" href="javascript:;">联系方式</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="culture-idea-right culture-home-right">
                        <div class="culture-items-container">
                            <div class="culture-idea-items" id="item17">
                                <div class="idea-items-tit home-items-tit"><i></i>园所概况</div>
                                <div class="idea-items-con home-items-con">
                                    {!! $home[4]->home_survey !!}
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item18">
                                <div class="idea-items-tit home-items-tit"><i></i>园所荣誉</div>
                                <div class="idea-items-con home-items-con">
                                    {!! $home[4]->home_honor !!}
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item19">
                                <div class="idea-items-tit home-items-tit"><i></i>园所环境</div>
                                <div class="idea-items-con home-items-con">
                                    <img src="{{$home[4]->home_env}}" alt="">
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item20">
                                <div class="idea-items-tit home-items-tit"><i></i>联系方式</div>
                                <div class="idea-items-con home-items-con">
                                    <p>联系人：{!! $home[4]->home_linkman !!}</p>
                                    <p>联系方式：{!! $home[4]->home_tel !!}</p>
                                    <p>园所地址：{!! $home[4]->home_add !!}</p>
                                </div>
                            </div>
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
<script>
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
