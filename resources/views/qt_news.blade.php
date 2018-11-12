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
</head>
<body>
<div class="cyanine-container">
    <!--header-->
    @include('qt_navigator')
    <!--header end-->
    <!--面包屑-->
    <div class="crumbs">
        当前位置 ：<span><a href="/news">青蓝果动态</a></span>
    </div>
    <!--面包屑 end-->
    <!--内容-->
    <div class="trends-container">
        <div class="trends-con-tit common-tit">
            <div class="trends-title-img">
                <img src="{{URL::asset('/images/d-tit.jpg')}}" alt="">
            </div>
            <div class="trends-ul-list">
                    <div class="ul-other-img"><img src="{{URL::asset('/images/dt.jpg')}}" alt=""></div>
                <ul class="trends-nav-lists">
                    <li id="li1"><img id="img1" src="{{URL::asset('/images/top0.jpg')}}" alt=""></li>
                    <li id="li2"><img id="img2" src="{{URL::asset('/images/dc1.jpg')}}" alt=""></li>
                    <li id="li3"><img id="img3" src="{{URL::asset('/images/dc2.jpg')}}" alt=""></li>
                    <li id="li4"><img id="img4" src="{{URL::asset('/images/dc3.jpg')}}" alt=""></li>
                </ul>
            </div>
        </div>
        <div class="trends-con-content">
            <!-- 春 -->
            <ul class="trends-list-items" style="display:block;">
                <li class="trends-con-list" id="ys">
                    <div class="trends-list-tit">园所快报</div>
                    <div class="trends-con-contend">
                        <img src="{{$news_pic[0]->news_pic}}" alt="" class="trends-img">
                        <div class="trends-list-con">
                            @foreach($chun_ys as $k => $v)
                            @if($k == 0)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @elseif($k == 1)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @else
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="trends-con-list" id="jk">
                    <div class="trends-list-tit">健康护航</div>
                    <div class="trends-con-contend">
                        <img src="{{$news_pic[1]->news_pic}}" alt="" class="trends-img">
                        <div class="trends-list-con">
                            @foreach($chun_jk as $k => $v)
                            @if($k == 0)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @elseif($k == 1)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @else
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="trends-con-list" id="js">
                    <div class="trends-list-tit">金色时光</div>
                    <div class="trends-con-contend">
                        <img src="{{$news_pic[2]->news_pic}}" alt="" class="trends-img">
                        <div class="trends-list-con">
                            @foreach($chun_js as $k => $v)
                            @if($k == 0)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @elseif($k == 1)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @else
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="trends-con-list" id="zm">
                    <div class="trends-list-tit">最美芳华</div>
                    <div class="trends-con-contend">
                        <img src="{{$news_pic[3]->news_pic}}" alt="" class="trends-img">
                        <div class="trends-list-con">
                            @foreach($chun_zm as $k => $v)
                            @if($k == 0)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @elseif($k == 1)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @else
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="trends-con-list" id="wa">
                    <div class="trends-list-tit">为爱同行</div>
                    <div class="trends-con-contend">
                        <img src="{{$news_pic[4]->news_pic}}" alt="" class="trends-img">
                        <div class="trends-list-con">
                            @foreach($chun_wa as $k => $v)
                            @if($k == 0)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @elseif($k == 1)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @else
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
            </ul>
            <!-- 夏 -->
            <ul class="trends-list-items">
                <li class="trends-con-list">
                    <div class="trends-list-tit">园所快报</div>
                    <div class="trends-con-contend">
                        <img src="{{$news_pic[0]->news_pic}}" alt="" class="trends-img">
                        <div class="trends-list-con">
                            @foreach($xia_ys as $k => $v)
                            @if($k == 0)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @elseif($k == 1)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @else
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="trends-con-list">
                    <div class="trends-list-tit">健康护航</div>
                    <div class="trends-con-contend">
                        <img src="{{$news_pic[1]->news_pic}}" alt="" class="trends-img">
                        <div class="trends-list-con">
                            @foreach($xia_jk as $k => $v)
                            @if($k == 0)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @elseif($k == 1)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @else
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="trends-con-list">
                    <div class="trends-list-tit">金色时光</div>
                    <div class="trends-con-contend">
                        <img src="{{$news_pic[2]->news_pic}}" alt="" class="trends-img">
                        <div class="trends-list-con">
                            @foreach($xia_js as $k => $v)
                            @if($k == 0)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @elseif($k == 1)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @else
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="trends-con-list">
                    <div class="trends-list-tit">最美芳华</div>
                    <div class="trends-con-contend">
                        <img src="{{$news_pic[3]->news_pic}}" alt="" class="trends-img">
                        <div class="trends-list-con">
                            @foreach($xia_zm as $k => $v)
                            @if($k == 0)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @elseif($k == 1)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @else
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="trends-con-list">
                    <div class="trends-list-tit">为爱同行</div>
                    <div class="trends-con-contend">
                        <img src="{{$news_pic[4]->news_pic}}" alt="" class="trends-img">
                        <div class="trends-list-con">
                            @foreach($xia_wa as $k => $v)
                            @if($k == 0)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @elseif($k == 1)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @else
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
            </ul>
            <!-- 秋 -->
            <ul class="trends-list-items">
                <li class="trends-con-list">
                    <div class="trends-list-tit">园所快报</div>
                    <div class="trends-con-contend">
                        <img src="{{$news_pic[0]->news_pic}}" alt="" class="trends-img">
                        <div class="trends-list-con">
                            @foreach($qiu_ys as $k => $v)
                            @if($k == 0)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @elseif($k == 1)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @else
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="trends-con-list">
                    <div class="trends-list-tit">健康护航</div>
                    <div class="trends-con-contend">
                        <img src="{{$news_pic[1]->news_pic}}" alt="" class="trends-img">
                        <div class="trends-list-con">
                            @foreach($qiu_jk as $k => $v)
                            @if($k == 0)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @elseif($k == 1)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @else
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="trends-con-list">
                    <div class="trends-list-tit">金色时光</div>
                    <div class="trends-con-contend">
                        <img src="{{$news_pic[2]->news_pic}}" alt="" class="trends-img">
                        <div class="trends-list-con">
                            @foreach($qiu_js as $k => $v)
                            @if($k == 0)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @elseif($k == 1)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @else
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="trends-con-list">
                    <div class="trends-list-tit">最美芳华</div>
                    <div class="trends-con-contend">
                        <img src="{{$news_pic[3]->news_pic}}" alt="" class="trends-img">
                        <div class="trends-list-con">
                            @foreach($qiu_zm as $k => $v)
                            @if($k == 0)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @elseif($k == 1)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @else
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="trends-con-list">
                    <div class="trends-list-tit">为爱同行</div>
                    <div class="trends-con-contend">
                        <img src="{{$news_pic[4]->news_pic}}" alt="" class="trends-img">
                        <div class="trends-list-con">
                            @foreach($qiu_wa as $k => $v)
                            @if($k == 0)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @elseif($k == 1)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @else
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
            </ul>
            <!-- 冬 -->
            <ul class="trends-list-items">
                <li class="trends-con-list">
                    <div class="trends-list-tit">园所快报</div>
                    <div class="trends-con-contend">
                        <img src="{{$news_pic[0]->news_pic}}" alt="" class="trends-img">
                        <div class="trends-list-con">
                            @foreach($dong_ys as $k => $v)
                            @if($k == 0)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @elseif($k == 1)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @else
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="trends-con-list">
                    <div class="trends-list-tit">健康护航</div>
                    <div class="trends-con-contend">
                        <img src="{{$news_pic[1]->news_pic}}" alt="" class="trends-img">
                        <div class="trends-list-con">
                            @foreach($dong_jk as $k => $v)
                            @if($k == 0)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @elseif($k == 1)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @else
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="trends-con-list">
                    <div class="trends-list-tit">金色时光</div>
                    <div class="trends-con-contend">
                        <img src="{{$news_pic[2]->news_pic}}" alt="" class="trends-img">
                        <div class="trends-list-con">
                            @foreach($dong_js as $k => $v)
                            @if($k == 0)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @elseif($k == 1)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @else
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="trends-con-list">
                    <div class="trends-list-tit">最美芳华</div>
                    <div class="trends-con-contend">
                        <img src="{{$news_pic[3]->news_pic}}" alt="" class="trends-img">
                        <div class="trends-list-con">
                            @foreach($dong_zm as $k => $v)
                            @if($k == 0)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @elseif($k == 1)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @else
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="trends-con-list">
                    <div class="trends-list-tit">为爱同行</div>
                    <div class="trends-con-contend">
                        <img src="{{$news_pic[4]->news_pic}}" alt="" class="trends-img">
                        <div class="trends-list-con">
                            @foreach($dong_wa as $k => $v)
                            @if($k == 0)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @elseif($k == 1)
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <img src="{{URL::asset('/images/new.png')}}" alt="">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @else
                            <div class="trends-list-item">
                                <a href="/news/details/{{$v->id}}">
                                    <div class="trends-img-box">
                                        <span>{{$v->news_title}}</span>
                                    </div>
                                    <div class="trends-con-tiem">{{$v->news_date}}</div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
            </ul>
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
    $('.trends-nav-lists li').on('click',function(){
        var index= $('.trends-nav-lists li').index(this);
        var $Img=$(".trends-nav-lists img");
        $('.trends-list-items').hide().eq(index).show();
    })
    $('#li1').on('click',function(){
      $('#img1').attr("src","{{URL::asset('/images/top0.jpg')}}");
      $('#img2').attr("src","{{URL::asset('/images/dc1.jpg')}}");
      $('#img3').attr("src","{{URL::asset('/images/dc2.jpg')}}");
      $('#img4').attr("src","{{URL::asset('/images/dc3.jpg')}}");
    })
    $('#li2').on('click',function(){
      $('#img1').attr("src","{{URL::asset('/images/dc0.jpg')}}");
      $('#img2').attr("src","{{URL::asset('/images/top1.jpg')}}");
      $('#img3').attr("src","{{URL::asset('/images/dc2.jpg')}}");
      $('#img4').attr("src","{{URL::asset('/images/dc3.jpg')}}");
    })
    $('#li3').on('click',function(){
      $('#img1').attr("src","{{URL::asset('/images/dc0.jpg')}}");
      $('#img2').attr("src","{{URL::asset('/images/dc1.jpg')}}");
      $('#img3').attr("src","{{URL::asset('/images/top2.jpg')}}");
      $('#img4').attr("src","{{URL::asset('/images/dc3.jpg')}}");
    })
    $('#li4').on('click',function(){
      $('#img1').attr("src","{{URL::asset('/images/dc0.jpg')}}");
      $('#img2').attr("src","{{URL::asset('/images/dc1.jpg')}}");
      $('#img3').attr("src","{{URL::asset('/images/dc2.jpg')}}");
      $('#img4').attr("src","{{URL::asset('/images/top3.jpg')}}");
    })
</script>
</html>
