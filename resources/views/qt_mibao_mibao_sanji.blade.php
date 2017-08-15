<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>觅宝</title>
<link rel="shortcut icon" href="{{URL::asset('/images/favicon.ico')}}">
<link rel="Bookmark" href="{{URL::asset('/images/favicon.ico')}}">
<link href="{{URL::asset('/css2/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css2/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css2/index.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css2/style1.css')}}" rel="stylesheet" type="text/css">
<script src="{{URL::asset('/js2/jquery-2.1.1.min.js')}}"></script>
<script src="{{URL::asset('/js2/index_js.js')}}"></script>
<script src="{{URL::asset('/js2/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('/js2/wow.min.js')}}"></script>
</head>

<body>
<?php error_reporting(0); ?>
<!--上下三角-->
<div class="container-fluid mibao_shang navbar-fixed-top">
        <div class="col-md-6 col-sm-6 col-xs-6 fadeInLeft animated" style="position:relative">
            <img src="{{URL::asset('/images/mibao_shangsnajiao.png')}}" class="img-responsive" style="width:100%">
            <a class="fanhuishouye" href="/"></a>
        </div>
    	<div class="col-md-6 col-sm-6 col-xs-6">
            <a href="/index/me_bao" class="mibao_fanhui animated fadeInDown"><b class="mibao_fanhui_b animated">返回<br>Back</b></a>
        </div>
</div>
<div class="container-fluid navbar-fixed-bottom fadeInRight animated" style="padding:0">
    	<div class="col-md-6 col-sm-6 col-xs-6 col-xs-offset-6" style="padding:0; position:relative">
            <img src="{{URL::asset('/images/mibao_xiasnajiao.png')}}" class="img-responsive" style="width:100%">
            <a href="javascript:;" id="toTop" title="回到顶部"></a><img src="{{URL::asset('/images/top.png')}}" class="img-responsive" id="top_huojian">
        </div>
</div>


<!--觅宝-->
<div class="container-fluid" style="margin-top:20vh; margin-bottom:30vh">
	<div class="container">
    	<div class="row mibao_mibao_biaoti animated wow bounceIn" data-wow-duration="1s" data-wow-delay="1s"><img src="{{URL::asset('/images/mibao_biaoti.png')}}" class="img-responsive"></div>
        <div class="row mibao_sousuo">
        	<div class="col-md-1 col-sm-1 col-xs-1">
                <span class="animated wow fadeInRight" id="mibao_sousuo" data-wow-duration="1s" data-wow-delay=".2s">
                    <img src="{{URL::asset('/images/xiajiantou.png')}}" class="img-responsive" id="mibao_sousuojiantou">
                </span>
            </div>
            <div class="col-md-11 col-sm-11 col-xs-11" id="mibao_sousuo_ss">
                <span class="animated fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" id="mibao_diqu" style="background:rgba(40,247,167,1)">地区</span>
                <span class="animated fadeInRight" data-wow-duration="1s" data-wow-delay=".6s" id="mibao_nianling" style="background:rgba(40,247,167,0.8)">年龄</span>
                <span class="animated fadeInRight" data-wow-duration="1s" data-wow-delay=".8s" id="mibao_nan" style="background:rgba(40,247,167,0.5)">男生</span>
                <span class="animated fadeInRight" data-wow-duration="1s" data-wow-delay="1s" id="mibao_nv" style="background:rgba(40,247,167,0.3)">女生</span>
                <span class="animated fadeInRight" data-wow-duration="1s" data-wow-delay="1s" id="mibao_zonghe" style="background:none"><img src="{{URL::asset('/images/mibao_sousuo_btn.png')}}" class="img-responsive mibao_sousuo_btn"></span>
            </div>
        </div>
        <div class="row mibao_sousuo_diqu">
        	<div class="col-md-12 col-sm-12 col-xs-12 mibao_sousuo_diqu1" style="padding:0">
                <div class="col-md-5 col-sm-5 col-xs-5">
                    <label style="font-size:2.3rem; font-weight:600; margin-bottom:0;">搜索城市</label>
                    <form action="/index/me_bao/city_children" method="post">
                        <input type="text" name="city">
                        <input type="submit" style="width:15%; padding:0; line-height:3vh; background:#37bca7; border-radius:5px; border:none; color:#fff; outline:none" value="搜&nbsp;索">
                    </form>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-7">
                    <label style="font-size:1.8rem; font-weight:600; margin-bottom:0">热门</label>
                    <span class="city_name" style="cursor:pointer">北京</span>  <span class="city_name" style="cursor:pointer">上海</span>  <span class="city_name" style="cursor:pointer">广州</span>
                    <span class="city_name" style="cursor:pointer">深圳</span>  <span class="city_name" style="cursor:pointer">成都</span>  <span class="city_name" style="cursor:pointer">杭州</span>
                    <span class="city_name" style="cursor:pointer">南京</span> <span class="city_name" style="cursor:pointer">天津</span>  <span class="city_name" style="cursor:pointer">武汉</span>  <span class="city_name" style="cursor:pointer">重庆</span>
                </div>
        	</div>
        	<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0">
            	<p class="mibao_sousuo_diqu2">华东</P>
            	<p class="mibao_sousuo_diqu3">山东</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">青岛</span> <span class="city_name" style="cursor:pointer">济南</span> <span class="city_name" style="cursor:pointer">烟台</span> <span class="city_name" style="cursor:pointer">潍坊</span> 
                    <span class="city_name" style="cursor:pointer">临沂</span> <span class="city_name" style="cursor:pointer">淄博</span> <span class="city_name" style="cursor:pointer">济宁</span> <span class="city_name" style="cursor:pointer">泰安</span> 
                    <span class="city_name" style="cursor:pointer">聊城</span> <span class="city_name" style="cursor:pointer">威海</span> <span class="city_name" style="cursor:pointer">枣庄</span> <span class="city_name" style="cursor:pointer">德州</span> 
                    <span class="city_name" style="cursor:pointer">日照</span> <span class="city_name" style="cursor:pointer">东营</span> <span class="city_name" style="cursor:pointer">菏泽</span> <span class="city_name" style="cursor:pointer">滨州</span> 
                    <span class="city_name" style="cursor:pointer">莱芜</span> <span class="city_name" style="cursor:pointer">章丘</span> <span class="city_name" style="cursor:pointer">垦利</span> <span class="city_name" style="cursor:pointer">诸城寿</span> 
                    <span class="city_name" style="cursor:pointer">光龙口</span>
                </P>
            	<p class="mibao_sousuo_diqu3">江苏</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">苏州</span> <span class="city_name" style="cursor:pointer">南京</span> <span class="city_name" style="cursor:pointer">无锡</span> <span class="city_name" style="cursor:pointer">常州</span> 
                    <span class="city_name" style="cursor:pointer">徐州</span> <span class="city_name" style="cursor:pointer">南通</span> <span class="city_name" style="cursor:pointer">扬州</span> <span class="city_name" style="cursor:pointer">盐城</span> 
                    <span class="city_name" style="cursor:pointer">淮安</span> <span class="city_name" style="cursor:pointer">连云港</span> <span class="city_name" style="cursor:pointer">泰州</span> <span class="city_name" style="cursor:pointer">宿迁镇</span> 
                    <span class="city_name" style="cursor:pointer">江沭阳</span> <span class="city_name" style="cursor:pointer">大丰</span> <span class="city_name" style="cursor:pointer">如皋</span> <span class="city_name" style="cursor:pointer">启东</span> 
                    <span class="city_name" style="cursor:pointer">溧阳</span> <span class="city_name" style="cursor:pointer">海门</span> <span class="city_name" style="cursor:pointer">东海</span> <span class="city_name" style="cursor:pointer">扬中</span> 
                    <span class="city_name" style="cursor:pointer">兴化</span><span class="city_name" style="cursor:pointer">新沂</span><span class="city_name" style="cursor:pointer">泰兴</span><span class="city_name" style="cursor:pointer">如东</span>
                    <span class="city_name" style="cursor:pointer">邳州</span><span class="city_name" style="cursor:pointer">沛县</span><span class="city_name" style="cursor:pointer">靖江</span><br><span class="city_name" style="cursor:pointer">建湖</span>
                    <span class="city_name" style="cursor:pointer">海安</span><span class="city_name" style="cursor:pointer">东台</span><span class="city_name" style="cursor:pointer">丹阳</span>
                                                  
                </P>
            	<p class="mibao_sousuo_diqu3">浙江</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">杭州</span><span class="city_name" style="cursor:pointer">宁波</span><span class="city_name" style="cursor:pointer">温州</span><span class="city_name" style="cursor:pointer">金华</span>
                    <span class="city_name" style="cursor:pointer">嘉兴</span><span class="city_name" style="cursor:pointer">台州</span><span class="city_name" style="cursor:pointer">绍兴</span><span class="city_name" style="cursor:pointer">湖州</span>
                    <span class="city_name" style="cursor:pointer">丽水</span><span class="city_name" style="cursor:pointer">衢州</span><span class="city_name" style="cursor:pointer">舟山</span><span class="city_name" style="cursor:pointer">乐清</span>
                    <span class="city_name" style="cursor:pointer">瑞安</span><span class="city_name" style="cursor:pointer">义乌</span><span class="city_name" style="cursor:pointer">余姚</span><span class="city_name" style="cursor:pointer">诸暨</span>
                    <span class="city_name" style="cursor:pointer">象山</span><span class="city_name" style="cursor:pointer">温岭</span><span class="city_name" style="cursor:pointer">桐乡</span><span class="city_name" style="cursor:pointer">慈溪</span>
                    <span class="city_name" style="cursor:pointer">长兴</span><span class="city_name" style="cursor:pointer">嘉善</span><span class="city_name" style="cursor:pointer">海宁</span><span class="city_name" style="cursor:pointer">德清</span>
                    <span class="city_name" style="cursor:pointer">东阳</span>
                </P>
            	<p class="mibao_sousuo_diqu3">安徽</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">合肥</span><span class="city_name" style="cursor:pointer">芜湖</span><span class="city_name" style="cursor:pointer">蚌埠</span><span class="city_name" style="cursor:pointer">阜阳</span>
                    <span class="city_name" style="cursor:pointer">淮南</span><span class="city_name" style="cursor:pointer">安庆</span><span class="city_name" style="cursor:pointer">宿州</span><span class="city_name" style="cursor:pointer">六安</span>
                    <span class="city_name" style="cursor:pointer">淮北</span><span class="city_name" style="cursor:pointer">滁州</span><span class="city_name" style="cursor:pointer">马鞍山</span><span class="city_name" style="cursor:pointer">铜陵</span>
                    <span class="city_name" style="cursor:pointer">宣城</span><span class="city_name" style="cursor:pointer">亳州</span><span class="city_name" style="cursor:pointer">黄山</span><span class="city_name" style="cursor:pointer">池州</span>
                    <span class="city_name" style="cursor:pointer">巢湖</span><span class="city_name" style="cursor:pointer">和县</span><span class="city_name" style="cursor:pointer">霍邱</span><span class="city_name" style="cursor:pointer">桐城</span>
                    <span class="city_name" style="cursor:pointer">宁国</span><span class="city_name" style="cursor:pointer">天长</span>
                </P>




            	<p class="mibao_sousuo_diqu2">华南</P>
            	<p class="mibao_sousuo_diqu3">广东</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">深圳</span><span class="city_name" style="cursor:pointer">广州</span><span class="city_name" style="cursor:pointer">东莞</span><span class="city_name" style="cursor:pointer">佛山</span>
                    <span class="city_name" style="cursor:pointer">中山</span><span class="city_name" style="cursor:pointer">珠海</span><span class="city_name" style="cursor:pointer">惠州</span><span class="city_name" style="cursor:pointer">江门</span>
                    <span class="city_name" style="cursor:pointer">汕头</span><span class="city_name" style="cursor:pointer">湛江</span><span class="city_name" style="cursor:pointer">肇庆</span><span class="city_name" style="cursor:pointer">茂名</span>
                    <span class="city_name" style="cursor:pointer">揭阳</span><span class="city_name" style="cursor:pointer">梅州</span><span class="city_name" style="cursor:pointer">清远</span><span class="city_name" style="cursor:pointer">阳江</span>
                    <span class="city_name" style="cursor:pointer">韶关</span><span class="city_name" style="cursor:pointer">河源</span><span class="city_name" style="cursor:pointer">云浮</span><span class="city_name" style="cursor:pointer">汕尾</span>
                    <span class="city_name" style="cursor:pointer">潮州</span><span class="city_name" style="cursor:pointer">台山</span><span class="city_name" style="cursor:pointer">阳春</span><span class="city_name" style="cursor:pointer">顺德</span>
                    <span class="city_name" style="cursor:pointer">惠东</span><span class="city_name" style="cursor:pointer">博罗</span>
                </P>
            	<p class="mibao_sousuo_diqu3">福建</P>
            	<p class="mibao_sousuo_diqu4">

                    <span class="city_name" style="cursor:pointer">福州</span><span class="city_name" style="cursor:pointer">厦门</span><span class="city_name" style="cursor:pointer">泉州</span><span class="city_name" style="cursor:pointer">莆田</span>
                    <span class="city_name" style="cursor:pointer">漳州</span><span class="city_name" style="cursor:pointer">宁德</span><span class="city_name" style="cursor:pointer">三明</span><span class="city_name" style="cursor:pointer">南平</span>
                    <span class="city_name" style="cursor:pointer">龙岩</span><span class="city_name" style="cursor:pointer">武夷山</span><span class="city_name" style="cursor:pointer">石狮</span><span class="city_name" style="cursor:pointer">晋江</span>
                    <span class="city_name" style="cursor:pointer">南安</span>
                </P>
            	<p class="mibao_sousuo_diqu3">广西</P>
            	<p class="mibao_sousuo_diqu4">

                    <span class="city_name" style="cursor:pointer">南宁</span><span class="city_name" style="cursor:pointer">柳州</span><span class="city_name" style="cursor:pointer">桂林</span><span class="city_name" style="cursor:pointer">玉林</span>
                    <span class="city_name" style="cursor:pointer">梧州</span><span class="city_name" style="cursor:pointer">北海</span><span class="city_name" style="cursor:pointer">贵港</span><span class="city_name" style="cursor:pointer">钦州</span>
                    <span class="city_name" style="cursor:pointer">百色河</span><span class="city_name" style="cursor:pointer">池来</span><span class="city_name" style="cursor:pointer">宾贺</span><span class="city_name" style="cursor:pointer">州防</span>
                    <span class="city_name" style="cursor:pointer">城港</span><span class="city_name" style="cursor:pointer">崇左</span>
                </P>
            	<p class="mibao_sousuo_diqu3">海南</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">海口</span><span class="city_name" style="cursor:pointer">三亚</span><span class="city_name" style="cursor:pointer">五指山</span><span class="city_name" style="cursor:pointer">三沙</span>
                    <span class="city_name" style="cursor:pointer">琼海</span><span class="city_name" style="cursor:pointer">文昌</span><span class="city_name" style="cursor:pointer">万宁</span><span class="city_name" style="cursor:pointer">屯昌</span>
                    <span class="city_name" style="cursor:pointer">琼中</span><span class="city_name" style="cursor:pointer">陵水</span><span class="city_name" style="cursor:pointer">东方</span><span class="city_name" style="cursor:pointer">定安</span>
                    <span class="city_name" style="cursor:pointer">澄迈</span><span class="city_name" style="cursor:pointer">保亭</span><span class="city_name" style="cursor:pointer">白沙</span><span class="city_name" style="cursor:pointer">儋州</span>
                </P>
                
                
            	<p class="mibao_sousuo_diqu2">中南</P>
            	<p class="mibao_sousuo_diqu3">河南</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">郑州</span><span class="city_name" style="cursor:pointer">洛阳</span><span class="city_name" style="cursor:pointer">新乡</span><span class="city_name" style="cursor:pointer">南阳</span>
                    <span class="city_name" style="cursor:pointer">许昌</span><span class="city_name" style="cursor:pointer">平顶山</span><span class="city_name" style="cursor:pointer">安阳</span><span class="city_name" style="cursor:pointer">焦作</span>
                    <span class="city_name" style="cursor:pointer">商丘</span><span class="city_name" style="cursor:pointer">开封</span><span class="city_name" style="cursor:pointer">濮阳</span><span class="city_name" style="cursor:pointer">周口</span>
                    <span class="city_name" style="cursor:pointer">信阳</span><span class="city_name" style="cursor:pointer">驻马店</span><span class="city_name" style="cursor:pointer">漯河</span><span class="city_name" style="cursor:pointer">三门峡</span>
                    <span class="city_name" style="cursor:pointer">鹤壁</span><span class="city_name" style="cursor:pointer">济源</span><span class="city_name" style="cursor:pointer">明港</span><span class="city_name" style="cursor:pointer">鄢陵</span>
                    <span class="city_name" style="cursor:pointer">禹州</span><span class="city_name" style="cursor:pointer">长葛</span>
                </P>
            	<p class="mibao_sousuo_diqu3">湖北</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">武汉</span><span class="city_name" style="cursor:pointer">宜昌</span><span class="city_name" style="cursor:pointer">襄阳</span><span class="city_name" style="cursor:pointer">荆州</span>
                    <span class="city_name" style="cursor:pointer">十堰</span><span class="city_name" style="cursor:pointer">黄石</span><span class="city_name" style="cursor:pointer">孝感</span><span class="city_name" style="cursor:pointer">黄冈</span>
                    <span class="city_name" style="cursor:pointer">恩施</span><span class="city_name" style="cursor:pointer">荆门</span><span class="city_name" style="cursor:pointer">咸宁</span><span class="city_name" style="cursor:pointer">鄂州</span><span class="city_name" style="cursor:pointer">随州</span>
                    <span class="city_name" style="cursor:pointer">潜江</span><span class="city_name" style="cursor:pointer">天门</span><span class="city_name" style="cursor:pointer">仙桃</span><span class="city_name" style="cursor:pointer">神农架</span>
                    <span class="city_name" style="cursor:pointer">宜都</span>
                </P>
            	<p class="mibao_sousuo_diqu3">湖南</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">长沙</span><span class="city_name" style="cursor:pointer">株洲</span><span class="city_name" style="cursor:pointer">益阳</span><span class="city_name" style="cursor:pointer">常德</span>
                    <span class="city_name" style="cursor:pointer">衡阳</span><span class="city_name" style="cursor:pointer">湘潭</span><span class="city_name" style="cursor:pointer">岳阳</span><span class="city_name" style="cursor:pointer">郴州</span>
                    <span class="city_name" style="cursor:pointer">邵阳</span><span class="city_name" style="cursor:pointer">怀化</span><span class="city_name" style="cursor:pointer">永州</span><span class="city_name" style="cursor:pointer">娄底</span>
                    <span class="city_name" style="cursor:pointer">湘西</span><span class="city_name" style="cursor:pointer">张家界</span>
                </P>
            	<p class="mibao_sousuo_diqu3">江西</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">南昌</span><span class="city_name" style="cursor:pointer">赣州</span><span class="city_name" style="cursor:pointer">九江</span><span class="city_name" style="cursor:pointer">宜春</span>
                    <span class="city_name" style="cursor:pointer">吉安</span><span class="city_name" style="cursor:pointer">上饶</span><span class="city_name" style="cursor:pointer">萍乡</span><span class="city_name" style="cursor:pointer">抚州</span>
                    <span class="city_name" style="cursor:pointer">景德镇</span><span class="city_name" style="cursor:pointer">新余</span><span class="city_name" style="cursor:pointer">鹰潭</span><span class="city_name" style="cursor:pointer">永新</span>
                </P>


            	<p class="mibao_sousuo_diqu2">东北</P>
            	<p class="mibao_sousuo_diqu3">辽宁</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">沈阳</span><span class="city_name" style="cursor:pointer">大连</span><span class="city_name" style="cursor:pointer">鞍山</span><span class="city_name" style="cursor:pointer">锦州</span>
                    <span class="city_name" style="cursor:pointer">抚顺</span><span class="city_name" style="cursor:pointer">营口</span><span class="city_name" style="cursor:pointer">盘锦</span><span class="city_name" style="cursor:pointer">朝阳</span>
                    <span class="city_name" style="cursor:pointer">丹东</span><span class="city_name" style="cursor:pointer">辽阳</span><span class="city_name" style="cursor:pointer">本溪</span><span class="city_name" style="cursor:pointer">葫芦岛</span>
                    <span class="city_name" style="cursor:pointer">铁岭</span><span class="city_name" style="cursor:pointer">阜新</span><span class="city_name" style="cursor:pointer">庄河</span><span class="city_name" style="cursor:pointer">瓦房店</span>
                </P>
            	<p class="mibao_sousuo_diqu3">黑龙江</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">哈尔滨</span><span class="city_name" style="cursor:pointer">大庆</span><span class="city_name" style="cursor:pointer">齐齐哈尔</span><span class="city_name" style="cursor:pointer">牡丹江</span>
                    <span class="city_name" style="cursor:pointer">绥化</span><span class="city_name" style="cursor:pointer">佳木斯</span><span class="city_name" style="cursor:pointer">鸡西</span><span class="city_name" style="cursor:pointer">双鸭山</span>
                    <span class="city_name" style="cursor:pointer">鹤岗</span><span class="city_name" style="cursor:pointer">黑河</span><span class="city_name" style="cursor:pointer">伊春</span><span class="city_name" style="cursor:pointer">七台河</span>
                    <span class="city_name" style="cursor:pointer">大兴安岭</span>
                </P>
            	<p class="mibao_sousuo_diqu3">吉林</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">长春</span><span class="city_name" style="cursor:pointer">吉林</span><span class="city_name" style="cursor:pointer">四平</span><span class="city_name" style="cursor:pointer">延边</span>
                    <span class="city_name" style="cursor:pointer">松原</span><span class="city_name" style="cursor:pointer">白城</span><span class="city_name" style="cursor:pointer">通化</span><span class="city_name" style="cursor:pointer">白山</span>
                    <span class="city_name" style="cursor:pointer">辽源</span>
                </P>



            	<p class="mibao_sousuo_diqu2">西南</P>
            	<p class="mibao_sousuo_diqu3">四川</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">成都</span><span class="city_name" style="cursor:pointer">绵阳</span><span class="city_name" style="cursor:pointer">德阳</span><span class="city_name" style="cursor:pointer">南充</span>
                    <span class="city_name" style="cursor:pointer">宜宾</span><span class="city_name" style="cursor:pointer">自贡</span><span class="city_name" style="cursor:pointer">乐山</span><span class="city_name" style="cursor:pointer">泸州</span>
                    <span class="city_name" style="cursor:pointer">达州</span><span class="city_name" style="cursor:pointer">内江</span><span class="city_name" style="cursor:pointer">遂宁</span><span class="city_name" style="cursor:pointer">攀枝花</span>
                    <span class="city_name" style="cursor:pointer">眉山</span><span class="city_name" style="cursor:pointer">广安</span><span class="city_name" style="cursor:pointer">资阳</span><span class="city_name" style="cursor:pointer">凉山</span>
                    <span class="city_name" style="cursor:pointer">广元</span><span class="city_name" style="cursor:pointer">雅安</span><span class="city_name" style="cursor:pointer">巴中</span><span class="city_name" style="cursor:pointer">阿坝甘孜</span>
                </P>
            	<p class="mibao_sousuo_diqu3">云南</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">昆明</span><span class="city_name" style="cursor:pointer">曲靖</span><span class="city_name" style="cursor:pointer">大理</span><span class="city_name" style="cursor:pointer">红河</span>
                    <span class="city_name" style="cursor:pointer">玉溪</span><span class="city_name" style="cursor:pointer">丽江</span><span class="city_name" style="cursor:pointer">文山</span><span class="city_name" style="cursor:pointer">楚雄</span>
                    <span class="city_name" style="cursor:pointer">西双版纳</span><span class="city_name" style="cursor:pointer">昭通</span><span class="city_name" style="cursor:pointer">德宏</span><span class="city_name" style="cursor:pointer">普洱</span>
                    <span class="city_name" style="cursor:pointer">保山</span><span class="city_name" style="cursor:pointer">临沧</span><span class="city_name" style="cursor:pointer">迪庆</span><span class="city_name" style="cursor:pointer">怒江</span>
                </P>
            	<p class="mibao_sousuo_diqu3">贵州</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">贵阳</span><span class="city_name" style="cursor:pointer">遵义</span><span class="city_name" style="cursor:pointer">黔东南</span><span class="city_name" style="cursor:pointer">黔南</span>
                    <span class="city_name" style="cursor:pointer">六盘水</span><span class="city_name" style="cursor:pointer">毕节</span><span class="city_name" style="cursor:pointer">铜仁</span><span class="city_name" style="cursor:pointer">安顺</span><span class="city_name" style="cursor:pointer">黔西南</span>
                </P>
            	<p class="mibao_sousuo_diqu3">西藏</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">拉萨</span><span class="city_name" style="cursor:pointer">日喀则</span><span class="city_name" style="cursor:pointer">山南</span><span class="city_name" style="cursor:pointer">林芝</span>
                    <span class="city_name" style="cursor:pointer">昌都</span><span class="city_name" style="cursor:pointer">那曲</span><span class="city_name" style="cursor:pointer">阿里</span><span class="city_name" style="cursor:pointer">日土</span><span class="city_name" style="cursor:pointer">改则</span>
                </P>



            	<p class="mibao_sousuo_diqu2">华北</P>
            	<p class="mibao_sousuo_diqu3">河北</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">石家庄</span><span class="city_name" style="cursor:pointer">保定</span><span class="city_name" style="cursor:pointer">唐山</span><span class="city_name" style="cursor:pointer">廊坊</span>
                    <span class="city_name" style="cursor:pointer">邯郸</span><span class="city_name" style="cursor:pointer">秦皇岛</span><span class="city_name" style="cursor:pointer">沧州</span><span class="city_name" style="cursor:pointer">邢台</span>
                    <span class="city_name" style="cursor:pointer">衡水</span><span class="city_name" style="cursor:pointer">张家口</span><span class="city_name" style="cursor:pointer">承德</span><span class="city_name" style="cursor:pointer">定州</span>
                    <span class="city_name" style="cursor:pointer">馆陶</span><span class="city_name" style="cursor:pointer">张北</span><span class="city_name" style="cursor:pointer">赵县</span><span class="city_name" style="cursor:pointer">正定</span>
                </P>
            	<p class="mibao_sousuo_diqu3">山西</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">太原</span><span class="city_name" style="cursor:pointer">临汾</span><span class="city_name" style="cursor:pointer">大同</span><span class="city_name" style="cursor:pointer">运城</span>
                    <span class="city_name" style="cursor:pointer">晋中</span><span class="city_name" style="cursor:pointer">长治</span><span class="city_name" style="cursor:pointer">晋城</span><span class="city_name" style="cursor:pointer">阳泉</span>
                    <span class="city_name" style="cursor:pointer">吕梁</span><span class="city_name" style="cursor:pointer">忻州</span><span class="city_name" style="cursor:pointer">朔州</span><span class="city_name" style="cursor:pointer">临猗</span>
                    <span class="city_name" style="cursor:pointer">清徐</span>
                </P>
            	<p class="mibao_sousuo_diqu3">内蒙古</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">呼和浩特</span><span class="city_name" style="cursor:pointer">包头</span><span class="city_name" style="cursor:pointer">赤峰</span><span class="city_name" style="cursor:pointer">鄂尔多斯</span>
                    <span class="city_name" style="cursor:pointer">通辽</span><span class="city_name" style="cursor:pointer">呼伦贝尔</span><span class="city_name" style="cursor:pointer">巴彦淖尔市</span><span class="city_name" style="cursor:pointer">乌兰察布</span>
                    <span class="city_name" style="cursor:pointer">锡林郭勒</span><span class="city_name" style="cursor:pointer">兴安盟</span><span class="city_name" style="cursor:pointer">乌海</span><span class="city_name" style="cursor:pointer">阿拉善盟</span><span class="city_name" style="cursor:pointer">海拉尔</span>
                </P>



            	<p class="mibao_sousuo_diqu2">西北</P>
            	<p class="mibao_sousuo_diqu3">陕西</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">西安</span><span class="city_name" style="cursor:pointer">咸阳</span><span class="city_name" style="cursor:pointer">宝鸡</span><span class="city_name" style="cursor:pointer">渭南</span>
                    <span class="city_name" style="cursor:pointer">汉中</span><span class="city_name" style="cursor:pointer">榆林</span><span class="city_name" style="cursor:pointer">延安</span><span class="city_name" style="cursor:pointer">安康</span>
                    <span class="city_name" style="cursor:pointer">商洛</span><span class="city_name" style="cursor:pointer">铜川</span>
                </P>
            	<p class="mibao_sousuo_diqu3">新疆</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">乌鲁木齐</span><span class="city_name" style="cursor:pointer">昌吉</span><span class="city_name" style="cursor:pointer">巴音郭楞</span><span class="city_name" style="cursor:pointer">伊犁</span>
                    <span class="city_name" style="cursor:pointer">阿克苏</span><span class="city_name" style="cursor:pointer">喀什</span><span class="city_name" style="cursor:pointer">哈密</span><span class="city_name" style="cursor:pointer">克拉玛依</span>
                    <span class="city_name" style="cursor:pointer">博尔塔拉</span><span class="city_name" style="cursor:pointer">吐鲁番</span><span class="city_name" style="cursor:pointer">和田</span><span class="city_name" style="cursor:pointer">石河子</span>
                    <span class="city_name" style="cursor:pointer">克孜勒苏</span><span class="city_name" style="cursor:pointer">阿拉尔</span><span class="city_name" style="cursor:pointer">五家渠</span><span class="city_name" style="cursor:pointer">图木舒克</span>
                    <span class="city_name" style="cursor:pointer">库尔勒</span><span class="city_name" style="cursor:pointer">阿勒泰</span><span class="city_name" style="cursor:pointer">塔城</span>
                </P>
            	<p class="mibao_sousuo_diqu3">甘肃</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">兰州</span><span class="city_name" style="cursor:pointer">天水</span><span class="city_name" style="cursor:pointer">白银</span><span class="city_name" style="cursor:pointer">庆阳</span>
                    <span class="city_name" style="cursor:pointer">平凉</span><span class="city_name" style="cursor:pointer">酒泉</span><span class="city_name" style="cursor:pointer">张掖</span><span class="city_name" style="cursor:pointer">武威</span>
                    <span class="city_name" style="cursor:pointer">定西</span><span class="city_name" style="cursor:pointer">金昌</span><span class="city_name" style="cursor:pointer">陇南</span><span class="city_name" style="cursor:pointer">临夏</span>
                    <span class="city_name" style="cursor:pointer">嘉峪关</span><span class="city_name" style="cursor:pointer">甘南</span>
                </P>
            	<p class="mibao_sousuo_diqu3">宁夏</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">银川</span><span class="city_name" style="cursor:pointer">吴忠</span><span class="city_name" style="cursor:pointer">石嘴山</span><span class="city_name" style="cursor:pointer">中卫</span><span class="city_name" style="cursor:pointer">固原</span>
                </P>
            	<p class="mibao_sousuo_diqu3">青海</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">西宁</span><span class="city_name" style="cursor:pointer">海西</span><span class="city_name" style="cursor:pointer">海北</span><span class="city_name" style="cursor:pointer">果洛</span>
                    <span class="city_name" style="cursor:pointer">海东</span><span class="city_name" style="cursor:pointer">黄南</span><span class="city_name" style="cursor:pointer">玉树</span><span class="city_name" style="cursor:pointer">海南</span>
                </P>



            	<p class="mibao_sousuo_diqu2">其他</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">香港</span><span class="city_name" style="cursor:pointer">澳门</span><span class="city_name" style="cursor:pointer">台湾</span>
                </P>
                
            	<p class="mibao_sousuo_diqu2">海外</P>
                <p class="mibao_sousuo_diqu3">热门城市</P>
            	<p class="mibao_sousuo_diqu4">
                    <span class="city_name" style="cursor:pointer">洛杉矶</span><span class="city_name" style="cursor:pointer">旧金山</span><span class="city_name" style="cursor:pointer">纽约</span><span class="city_name" style="cursor:pointer">多伦多</span>
                    <span class="city_name" style="cursor:pointer">温哥华</span><span class="city_name" style="cursor:pointer">伦敦</span><span class="city_name" style="cursor:pointer">莫斯科</span><span class="city_name" style="cursor:pointer">首尔</span>
                    <span class="city_name" style="cursor:pointer">东京</span><span class="city_name" style="cursor:pointer">新加坡</span><span class="city_name" style="cursor:pointer">曼谷</span><span class="city_name" style="cursor:pointer">清迈</span>
                    <span class="city_name" style="cursor:pointer">迪拜</span><span class="city_name" style="cursor:pointer">奥克兰</span><span class="city_name" style="cursor:pointer">悉尼</span><span class="city_name" style="cursor:pointer">墨尔本</span>
                </P>
                <p class="mibao_sousuo_diqu3" style="color:#37bca7">其他海外城市</P>
                <p class="mibao_sousuo_diqu4">
                <p class="mibao_sousuo_diqu3">其他海外城市</P>
                    <span class="city_name" style="cursor:pointer">其他海外城市</span>
                </P>
			</div>        
        </div>
        
        <div class="row mibao_sousuo_nianling">
			<span class="nianling_soiusuo1">0~3</span>
			<span class="nianling_soiusuo2">4~6</span>
			<span class="nianling_soiusuo3">7~9</span>
			<span class="nianling_soiusuo4">10~12</span>
			<span class="nianling_soiusuo5">13~15</span>
        </div>        
        
        <div class="row mibao_sousuo_zonghe">
			<form action="/index/me_bao/select_children" method="post">
            	<p><label>性别</label><input type="radio" value="1" checked="checked" name="sex"><span>男宝</span><input type="radio" value="2" name="sex"><span>女宝</span></p>
            	<p><label>年龄</label>
                   <select name="age">
                   		<option value="1">0~3</option>
                   		<option value="2">4~6</option>
                   		<option value="3">7~9</option>
                   		<option value="4">10~12</option>
                   		<option value="5">13~15</option>
                   </select>
                </p>
                <p style="margin-bottom:0">
                   <label>地区</label>
                   <select name="area" class="liandong1">
                   		<option value="0">请选择</option>
                        <option value="1">华东</option>
                        <option value="2">华南</option>
                        <option value="3">中南</option>
                        <option value="4">东北</option>
                        <option value="5">西南</option>
                        <option value="6">华北</option>
                        <option value="7">西北</option>
                        <option value="8">其他</option>
                        <option value="9">海外</option>
                   </select>
                   <select name="province" class="liandong2">
                   		<option value="0">请选择省</option>
                   </select>
                   <select name="city" class="liandong3">
                   		<option value="0">请选择市</option>
                   </select>
                   <input type="submit" value="搜索" class="mibao_sousuo_zonghe_btn">
                </p>

                
            </form>


        </div>        
        
        <!-- 全部 -->
        <div class="row mibao_xiaohai" id="allchildren">
            @foreach($bao as $key => $value)
            @if(is_int($key/3))
            <a href="#" data-toggle="modal" data-target="#pic{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="0s">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="ke{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @elseif(is_int(($key-1)/3))
            <a href="#" data-toggle="modal" data-target="#pic{{$key}}">
            	<div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">
                	<img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="ke{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @elseif(is_int(($key+1)/3))
            <a href="#" data-toggle="modal" data-target="#pic{{$key}}">
            	<div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".4s" style="margin-right:0">
                	<img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="ke{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @endif
            @endforeach


            @foreach($bao as $ke => $va)
            <div class="modal fade" id="pic{{$ke}}" style="background:rgba(49,218,153,.6)">
                <div class="container" style="position:relative; height:100vh" id="mibao_xinxi">
                    <div class="modal-dialog mibao_mengceng">
                        <div class="row" style="height:60vh; overflow:hidden; margin-right:0">
                            <div class="col-md-7 col-sm-7 col-xs-7" style="padding-right:0"><img src="{{$va->picture_big}}" class="img-responsive" style="width:100%"></div>
                            <div class="col-md-5 col-sm-5 col-xs-5" style="height:100%; background:#fff; padding:0">
                                <div class="mibao_tanchu_biaoti">
                                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="clike{{$va->id}}">{{$va->like}}</span></p>
                                    <p style="padding-left:0; padding-right:10%; text-align:right">
                                        <button type="button" id="mibao_dianzan_btn" onclick="dodianzan(this)"><input type="hidden" name="hidden" value="{{$va->id}}"/><span class="dianzanqita{{$va->id}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;给&nbsp;我&nbsp;点&nbsp;赞！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><img src="{{URL::asset('/images/mibao_xin.png')}}" id="dianzanimg{{$va->id}}" class="mibao_dianzan"></button>
                                    </p>
                                </div>
                                <div class="mibao_tanchu_zhuti1">
                                    <p><label>姓名：</label><span>{{$va->name}}</span></p>
                                    <p style="margin-right:0"><label>性别：</label><span>{{$va->sex}}</span></p>
                                    <p><label>年龄：</label><span>{{$va->age}}</span></p>
                                    <p style="margin-right:0"><label>地区：</label><span>{{$va->region}}</span></p>
                                </div>
                                <div class="mibao_tanchu_zhuti2">
                                    <img src="{{URL::asset('/images/huaban.gif')}}" class="img-responsive">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach  
        </div>



        <!-- 女宝 -->
        <div class="row mibao_xiaohai" id="nvchildren">
            @foreach($nvbao as $key => $value)
            @if(is_int($key/3))
            <a href="#" data-toggle="modal" data-target="#picnv{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="0s">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="kenv{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @elseif(is_int(($key-1)/3))
            <a href="#" data-toggle="modal" data-target="#picnv{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="kenv{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @elseif(is_int(($key+1)/3))
            <a href="#" data-toggle="modal" data-target="#picnv{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".4s" style="margin-right:0">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="kenv{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @endif
            @endforeach


            @foreach($nvbao as $ke => $va)
            <div class="modal fade" id="picnv{{$ke}}" style="background:rgba(49,218,153,.6)">
                <div class="container" style="position:relative; height:100vh" id="mibao_xinxi">
                    <div class="modal-dialog mibao_mengceng">
                        <div class="row" style="height:60vh; overflow:hidden; margin-right:0">
                            <div class="col-md-7 col-sm-7 col-xs-7" style="padding-right:0"><img src="{{$va->picture_big}}" class="img-responsive" style="width:100%"></div>
                            <div class="col-md-5 col-sm-5 col-xs-5" style="height:100%; background:#fff; padding:0">
                                <div class="mibao_tanchu_biaoti">
                                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="clikenv{{$va->id}}">{{$va->like}}</span></p>
                                    <p style="padding-left:0; padding-right:10%; text-align:right">
                                        <button type="button" id="mibao_dianzan_btn" onclick="dodianzannv(this)"><input type="hidden" name="hidden" value="{{$va->id}}"/><span class="dianzanqita{{$va->id}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;给&nbsp;我&nbsp;点&nbsp;赞！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><img src="{{URL::asset('/images/mibao_xin.png')}}" id="dianzanimgnv{{$va->id}}" class="mibao_dianzan"></button>
                                    </p>
                                </div>
                                <div class="mibao_tanchu_zhuti1">
                                    <p><label>姓名：</label><span>{{$va->name}}</span></p>
                                    <p style="margin-right:0"><label>性别：</label><span>{{$va->sex}}</span></p>
                                    <p><label>年龄：</label><span>{{$va->age}}</span></p>
                                    <p style="margin-right:0"><label>地区：</label><span>{{$va->region}}</span></p>
                                </div>
                                <div class="mibao_tanchu_zhuti2">
                                    <img src="{{URL::asset('/images/huaban.gif')}}" class="img-responsive">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach  
        </div>

        <!-- 男宝 -->
        <div class="row mibao_xiaohai" id="nanchildren">
            @foreach($nanbao as $key => $value)
            @if(is_int($key/3))
            <a href="#" data-toggle="modal" data-target="#picnan{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="0s">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="kenan{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @elseif(is_int(($key-1)/3))
            <a href="#" data-toggle="modal" data-target="#picnan{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="kenan{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @elseif(is_int(($key+1)/3))
            <a href="#" data-toggle="modal" data-target="#picnan{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".4s" style="margin-right:0">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="kenan{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @endif
            @endforeach


            @foreach($nanbao as $ke => $va)
            <div class="modal fade" id="picnan{{$ke}}" style="background:rgba(49,218,153,.6)">
                <div class="container" style="position:relative; height:100vh" id="mibao_xinxi">
                    <div class="modal-dialog mibao_mengceng">
                        <div class="row" style="height:60vh; overflow:hidden; margin-right:0">
                            <div class="col-md-7 col-sm-7 col-xs-7" style="padding-right:0"><img src="{{$va->picture_big}}" class="img-responsive" style="width:100%"></div>
                            <div class="col-md-5 col-sm-5 col-xs-5" style="height:100%; background:#fff; padding:0">
                                <div class="mibao_tanchu_biaoti">
                                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="clikenan{{$va->id}}">{{$va->like}}</span></p>
                                    <p style="padding-left:0; padding-right:10%; text-align:right">
                                        <button type="button" id="mibao_dianzan_btn" onclick="dodianzannan(this)"><input type="hidden" name="hidden" value="{{$va->id}}"/><span class="dianzanqita{{$va->id}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;给&nbsp;我&nbsp;点&nbsp;赞！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><img src="{{URL::asset('/images/mibao_xin.png')}}" id="dianzanimgnan{{$va->id}}" class="mibao_dianzan"></button>
                                    </p>
                                </div>
                                <div class="mibao_tanchu_zhuti1">
                                    <p><label>姓名：</label><span>{{$va->name}}</span></p>
                                    <p style="margin-right:0"><label>性别：</label><span>{{$va->sex}}</span></p>
                                    <p><label>年龄：</label><span>{{$va->age}}</span></p>
                                    <p style="margin-right:0"><label>地区：</label><span>{{$va->region}}</span></p>
                                </div>
                                <div class="mibao_tanchu_zhuti2">
                                    <img src="{{URL::asset('/images/huaban.gif')}}" class="img-responsive">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach  
        </div>

        <!-- 1~3 -->
        <div class="row mibao_xiaohai" id="bao_age1children">
            @foreach($bao_age1 as $key => $value)
            @if(is_int($key/3))
            <a href="#" data-toggle="modal" data-target="#picbao_age1{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="0s">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="kebao_age1{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @elseif(is_int(($key-1)/3))
            <a href="#" data-toggle="modal" data-target="#picbao_age1{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="kebao_age1{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @elseif(is_int(($key+1)/3))
            <a href="#" data-toggle="modal" data-target="#picbao_age1{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".4s" style="margin-right:0">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="kebao_age1{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @endif
            @endforeach


            @foreach($bao_age1 as $ke => $va)
            <div class="modal fade" id="picbao_age1{{$ke}}" style="background:rgba(49,218,153,.6)">
                <div class="container" style="position:relative; height:100vh" id="mibao_xinxi">
                    <div class="modal-dialog mibao_mengceng">
                        <div class="row" style="height:60vh; overflow:hidden; margin-right:0">
                            <div class="col-md-7 col-sm-7 col-xs-7" style="padding-right:0"><img src="{{$va->picture_big}}" class="img-responsive" style="width:100%"></div>
                            <div class="col-md-5 col-sm-5 col-xs-5" style="height:100%; background:#fff; padding:0">
                                <div class="mibao_tanchu_biaoti">
                                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="clikebao_age1{{$va->id}}">{{$va->like}}</span></p>
                                    <p style="padding-left:0; padding-right:10%; text-align:right">
                                        <button type="button" id="mibao_dianzan_btn" onclick="dodianzanbao_age1(this)"><input type="hidden" name="hidden" value="{{$va->id}}"/><span class="dianzanqita{{$va->id}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;给&nbsp;我&nbsp;点&nbsp;赞！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><img src="{{URL::asset('/images/mibao_xin.png')}}" id="dianzanimgbao_age1{{$va->id}}" class="mibao_dianzan"></button>
                                    </p>
                                </div>
                                <div class="mibao_tanchu_zhuti1">
                                    <p><label>姓名：</label><span>{{$va->name}}</span></p>
                                    <p style="margin-right:0"><label>性别：</label><span>{{$va->sex}}</span></p>
                                    <p><label>年龄：</label><span>{{$va->age}}</span></p>
                                    <p style="margin-right:0"><label>地区：</label><span>{{$va->region}}</span></p>
                                </div>
                                <div class="mibao_tanchu_zhuti2">
                                    <img src="{{URL::asset('/images/huaban.gif')}}" class="img-responsive">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach  
        </div>


        <!-- 3~6 -->
        <div class="row mibao_xiaohai" id="bao_age2children">
            @foreach($bao_age2 as $key => $value)
            @if(is_int($key/3))
            <a href="#" data-toggle="modal" data-target="#picbao_age2{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="0s">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="kebao_age2{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @elseif(is_int(($key-1)/3))
            <a href="#" data-toggle="modal" data-target="#picbao_age2{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="kebao_age2{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @elseif(is_int(($key+1)/3))
            <a href="#" data-toggle="modal" data-target="#picbao_age2{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".4s" style="margin-right:0">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="kebao_age2{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @endif
            @endforeach


            @foreach($bao_age2 as $ke => $va)
            <div class="modal fade" id="picbao_age2{{$ke}}" style="background:rgba(49,218,153,.6)">
                <div class="container" style="position:relative; height:100vh" id="mibao_xinxi">
                    <div class="modal-dialog mibao_mengceng">
                        <div class="row" style="height:60vh; overflow:hidden; margin-right:0">
                            <div class="col-md-7 col-sm-7 col-xs-7" style="padding-right:0"><img src="{{$va->picture_big}}" class="img-responsive" style="width:100%"></div>
                            <div class="col-md-5 col-sm-5 col-xs-5" style="height:100%; background:#fff; padding:0">
                                <div class="mibao_tanchu_biaoti">
                                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="clikebao_age2{{$va->id}}">{{$va->like}}</span></p>
                                    <p style="padding-left:0; padding-right:10%; text-align:right">
                                        <button type="button" id="mibao_dianzan_btn" onclick="dodianzanbao_age2(this)"><input type="hidden" name="hidden" value="{{$va->id}}"/><span class="dianzanqita{{$va->id}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;给&nbsp;我&nbsp;点&nbsp;赞！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><img src="{{URL::asset('/images/mibao_xin.png')}}" id="dianzanimgbao_age2{{$va->id}}" class="mibao_dianzan"></button>
                                    </p>
                                </div>
                                <div class="mibao_tanchu_zhuti1">
                                    <p><label>姓名：</label><span>{{$va->name}}</span></p>
                                    <p style="margin-right:0"><label>性别：</label><span>{{$va->sex}}</span></p>
                                    <p><label>年龄：</label><span>{{$va->age}}</span></p>
                                    <p style="margin-right:0"><label>地区：</label><span>{{$va->region}}</span></p>
                                </div>
                                <div class="mibao_tanchu_zhuti2">
                                    <img src="{{URL::asset('/images/huaban.gif')}}" class="img-responsive">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach  
        </div>


        <!-- 6~12 -->
        <div class="row mibao_xiaohai" id="bao_age3children">
            @foreach($bao_age3 as $key => $value)
            @if(is_int($key/3))
            <a href="#" data-toggle="modal" data-target="#picbao_age3{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="0s">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="kebao_age3{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @elseif(is_int(($key-1)/3))
            <a href="#" data-toggle="modal" data-target="#picbao_age3{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="kebao_age3{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @elseif(is_int(($key+1)/3))
            <a href="#" data-toggle="modal" data-target="#picbao_age3{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".4s" style="margin-right:0">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="kebao_age3{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @endif
            @endforeach


            @foreach($bao_age3 as $ke => $va)
            <div class="modal fade" id="picbao_age3{{$ke}}" style="background:rgba(49,218,153,.6)">
                <div class="container" style="position:relative; height:100vh" id="mibao_xinxi">
                    <div class="modal-dialog mibao_mengceng">
                        <div class="row" style="height:60vh; overflow:hidden; margin-right:0">
                            <div class="col-md-7 col-sm-7 col-xs-7" style="padding-right:0"><img src="{{$va->picture_big}}" class="img-responsive" style="width:100%"></div>
                            <div class="col-md-5 col-sm-5 col-xs-5" style="height:100%; background:#fff; padding:0">
                                <div class="mibao_tanchu_biaoti">
                                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="clikebao_age3{{$va->id}}">{{$va->like}}</span></p>
                                    <p style="padding-left:0; padding-right:10%; text-align:right">
                                        <button type="button" id="mibao_dianzan_btn" onclick="dodianzanbao_age3(this)"><input type="hidden" name="hidden" value="{{$va->id}}"/><span class="dianzanqita{{$va->id}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;给&nbsp;我&nbsp;点&nbsp;赞！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><img src="{{URL::asset('/images/mibao_xin.png')}}" id="dianzanimgbao_age3{{$va->id}}" class="mibao_dianzan"></button>
                                    </p>
                                </div>
                                <div class="mibao_tanchu_zhuti1">
                                    <p><label>姓名：</label><span>{{$va->name}}</span></p>
                                    <p style="margin-right:0"><label>性别：</label><span>{{$va->sex}}</span></p>
                                    <p><label>年龄：</label><span>{{$va->age}}</span></p>
                                    <p style="margin-right:0"><label>地区：</label><span>{{$va->region}}</span></p>
                                </div>
                                <div class="mibao_tanchu_zhuti2">
                                    <img src="{{URL::asset('/images/huaban.gif')}}" class="img-responsive">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach  
        </div>

        <!-- 12~15 -->
        <div class="row mibao_xiaohai" id="bao_age4children">
            @foreach($bao_age4 as $key => $value)
            @if(is_int($key/3))
            <a href="#" data-toggle="modal" data-target="#picbao_age4{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="0s">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="kebao_age4{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @elseif(is_int(($key-1)/3))
            <a href="#" data-toggle="modal" data-target="#picbao_age4{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="kebao_age4{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @elseif(is_int(($key+1)/3))
            <a href="#" data-toggle="modal" data-target="#picbao_age4{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".4s" style="margin-right:0">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="kebao_age4{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @endif
            @endforeach


            @foreach($bao_age4 as $ke => $va)
            <div class="modal fade" id="picbao_age4{{$ke}}" style="background:rgba(49,218,153,.6)">
                <div class="container" style="position:relative; height:100vh" id="mibao_xinxi">
                    <div class="modal-dialog mibao_mengceng">
                        <div class="row" style="height:60vh; overflow:hidden; margin-right:0">
                            <div class="col-md-7 col-sm-7 col-xs-7" style="padding-right:0"><img src="{{$va->picture_big}}" class="img-responsive" style="width:100%"></div>
                            <div class="col-md-5 col-sm-5 col-xs-5" style="height:100%; background:#fff; padding:0">
                                <div class="mibao_tanchu_biaoti">
                                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="clikebao_age4{{$va->id}}">{{$va->like}}</span></p>
                                    <p style="padding-left:0; padding-right:10%; text-align:right">
                                        <button type="button" id="mibao_dianzan_btn" onclick="dodianzanbao_age4(this)"><input type="hidden" name="hidden" value="{{$va->id}}"/><span class="dianzanqita{{$va->id}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;给&nbsp;我&nbsp;点&nbsp;赞！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><img src="{{URL::asset('/images/mibao_xin.png')}}" id="dianzanimgbao_age4{{$va->id}}" class="mibao_dianzan"></button>
                                    </p>
                                </div>
                                <div class="mibao_tanchu_zhuti1">
                                    <p><label>姓名：</label><span>{{$va->name}}</span></p>
                                    <p style="margin-right:0"><label>性别：</label><span>{{$va->sex}}</span></p>
                                    <p><label>年龄：</label><span>{{$va->age}}</span></p>
                                    <p style="margin-right:0"><label>地区：</label><span>{{$va->region}}</span></p>
                                </div>
                                <div class="mibao_tanchu_zhuti2">
                                    <img src="{{URL::asset('/images/huaban.gif')}}" class="img-responsive">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach  
        </div>

        <!-- 15~18 -->
        <div class="row mibao_xiaohai" id="bao_age5children">
            @foreach($bao_age5 as $key => $value)
            @if(is_int($key/3))
            <a href="#" data-toggle="modal" data-target="#picbao_age5{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay="0s">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="kebao_age5{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @elseif(is_int(($key-1)/3))
            <a href="#" data-toggle="modal" data-target="#picbao_age5{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="kebao_age5{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @elseif(is_int(($key+1)/3))
            <a href="#" data-toggle="modal" data-target="#picbao_age5{{$key}}">
                <div class="col-md-4 col-xs-4 col-sm-4 animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".4s" style="margin-right:0">
                    <img src="{{$value->picture}}" class="img-responsive">
                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="kebao_age5{{$value->id}}">{{$value->like}}</span></p>
                </div>
            </a>
            @endif
            @endforeach


            @foreach($bao_age5 as $ke => $va)
            <div class="modal fade" id="picbao_age5{{$ke}}" style="background:rgba(49,218,153,.6)">
                <div class="container" style="position:relative; height:100vh" id="mibao_xinxi">
                    <div class="modal-dialog mibao_mengceng">
                        <div class="row" style="height:60vh; overflow:hidden; margin-right:0">
                            <div class="col-md-7 col-sm-7 col-xs-7" style="padding-right:0"><img src="{{$va->picture_big}}" class="img-responsive" style="width:100%"></div>
                            <div class="col-md-5 col-sm-5 col-xs-5" style="height:100%; background:#fff; padding:0">
                                <div class="mibao_tanchu_biaoti">
                                    <p><img src="{{URL::asset('/images/mibao_xin.png')}}" class="img-responsive"><span id="clikebao_age5{{$va->id}}">{{$va->like}}</span></p>
                                    <p style="padding-left:0; padding-right:10%; text-align:right">
                                        <button type="button" id="mibao_dianzan_btn" onclick="dodianzanbao_age5(this)"><input type="hidden" name="hidden" value="{{$va->id}}"/><span class="dianzanqita{{$va->id}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;给&nbsp;我&nbsp;点&nbsp;赞！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><img src="{{URL::asset('/images/mibao_xin.png')}}" id="dianzanimgbao_age5{{$va->id}}" class="mibao_dianzan"></button>
                                    </p>
                                </div>
                                <div class="mibao_tanchu_zhuti1">
                                    <p><label>姓名：</label><span>{{$va->name}}</span></p>
                                    <p style="margin-right:0"><label>性别：</label><span>{{$va->sex}}</span></p>
                                    <p><label>年龄：</label><span>{{$va->age}}</span></p>
                                    <p style="margin-right:0"><label>地区：</label><span>{{$va->region}}</span></p>
                                </div>
                                <div class="mibao_tanchu_zhuti2">
                                    <img src="{{URL::asset('/images/huaban.gif')}}" class="img-responsive">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach  
        </div>


    </div>
	
</div>

        
    </div>
</div>




</body>
<script>
    jQuery(document).ready(function(){
        $("#nvchildren").hide();
        $("#nanchildren").hide();
        $("#bao_age1children").hide();
        $("#bao_age2children").hide();
        $("#bao_age3children").hide();
        $("#bao_age4children").hide();
        $("#bao_age5children").hide();
    })
    //查询女宝
    $("#mibao_nv").click(function(){
        $(".mibao_sousuo_diqu").slideUp();
        $(".mibao_sousuo_nianling").slideUp();
        $(".mibao_sousuo_zonghe").slideUp();
        $(this).toggleClass("huaguobianda");
        $("#mibao_diqu").removeClass("huaguobianda");
        $("#mibao_nianling").removeClass("huaguobianda");
        $("#mibao_nan").removeClass("huaguobianda");
        $("#allchildren").hide();
        $("#nanchildren").hide();
        $("#bao_age1children").hide();
        $("#bao_age2children").hide();
        $("#bao_age3children").hide();
        $("#bao_age4children").hide();
        $("#bao_age5children").hide();
        $("#nvchildren").show();
    })
    //查询男宝
    $("#mibao_nan").click(function(){
        $(".mibao_sousuo_diqu").slideUp();
        $(".mibao_sousuo_nianling").slideUp();
        $(".mibao_sousuo_zonghe").slideUp();
        $(this).toggleClass("huaguobianda");
        $("#mibao_diqu").removeClass("huaguobianda");
        $("#mibao_nianling").removeClass("huaguobianda");
        $("#mibao_nv").removeClass("huaguobianda");
        $("#allchildren").hide();
        $("#nvchildren").hide();
        $("#bao_age1children").hide();
        $("#bao_age2children").hide();
        $("#bao_age3children").hide();
        $("#bao_age4children").hide();
        $("#bao_age5children").hide();
        $("#nanchildren").show();
        })
    //查询1~3
    $(".nianling_soiusuo1").click(function(){
        $("#allchildren").hide();
        $("#nvchildren").hide();
        $("#nanchildren").hide();
        $("#bao_age2children").hide();
        $("#bao_age3children").hide();
        $("#bao_age4children").hide();
        $("#bao_age5children").hide();
        $("#bao_age1children").show();
    })
    //查询3~6
    $(".nianling_soiusuo2").click(function(){
        $("#allchildren").hide();
        $("#nvchildren").hide();
        $("#nanchildren").hide();
        $("#bao_age1children").hide();
        $("#bao_age3children").hide();
        $("#bao_age4children").hide();
        $("#bao_age5children").hide();
        $("#bao_age2children").show();
    })
    //查询6~12
    $(".nianling_soiusuo3").click(function(){
        $("#allchildren").hide();
        $("#nvchildren").hide();
        $("#nanchildren").hide();
        $("#bao_age1children").hide();
        $("#bao_age2children").hide();
        $("#bao_age4children").hide();
        $("#bao_age5children").hide();
        $("#bao_age3children").show();
    })
    //查询12~15
    $(".nianling_soiusuo4").click(function(){
        $("#allchildren").hide();
        $("#nvchildren").hide();
        $("#nanchildren").hide();
        $("#bao_age1children").hide();
        $("#bao_age2children").hide();
        $("#bao_age3children").hide();
        $("#bao_age5children").hide();
        $("#bao_age4children").show();
    })
    //查询15~18
    $(".nianling_soiusuo5").click(function(){
        $("#allchildren").hide();
        $("#nvchildren").hide();
        $("#nanchildren").hide();
        $("#bao_age1children").hide();
        $("#bao_age2children").hide();
        $("#bao_age3children").hide();
        $("#bao_age4children").hide();
        $("#bao_age5children").show();
    })
    //do点赞
    function dodianzan(othis){
        var data = othis.firstChild.getAttribute('value');
        $("#dianzanimg"+data).toggleClass("mibao_dianzan2");
        var ctrldianzan = $("#ctrldianzan").attr('value');
        if(data != ''){
            $.ajax({
                url:"/index/me_bao/dodianzan",
                type:"post",
                data:{'cid':data},
                success:function(content){
                     if(content.msg == 'ok'){
                        var cl = 'clike'+data;
                        var like = $("#"+cl).html();
                        var like = parseInt(like) + 1;
                        var ke = 'ke'+data;
                        $("#"+cl).html(like);
                        $("#"+ke).html(like);
                        $(".dianzanqita"+data).html('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;么&nbsp;&nbsp;么&nbsp;&nbsp;哒&nbsp;&nbsp;!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
                     }else if(content.msg == 'no'){
                        alert('发生未知错误');
                     }
                },
                dataType:"json"
            })
        }
        othis.firstChild.setAttribute('value','');
    }

    //do点赞女宝
    function dodianzannv(othis){
        var data = othis.firstChild.getAttribute('value');
        $("#dianzanimgnv"+data).toggleClass("mibao_dianzan2");
        var ctrldianzan = $("#ctrldianzan").attr('value');
        if(data != ''){
            $.ajax({
                url:"/index/me_bao/dodianzan",
                type:"post",
                data:{'cid':data},
                success:function(content){
                     if(content.msg == 'ok'){
                        var cl = 'clikenv'+data;
                        var like = $("#"+cl).html();
                        var like = parseInt(like) + 1;
                        var ke = 'kenv'+data;
                        $("#"+cl).html(like);
                        $("#"+ke).html(like);
                        $(".dianzanqita"+data).html('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;么&nbsp;&nbsp;么&nbsp;&nbsp;哒&nbsp;&nbsp;!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
                     }else if(content.msg == 'no'){
                        alert('发生未知错误');
                     }
                },
                dataType:"json"
            })
        }
        othis.firstChild.setAttribute('value','');
    }

    //do点赞男宝
    function dodianzannan(othis){
        var data = othis.firstChild.getAttribute('value');
        $("#dianzanimgnan"+data).toggleClass("mibao_dianzan2");
        var ctrldianzan = $("#ctrldianzan").attr('value');
        if(data != ''){
            $.ajax({
                url:"/index/me_bao/dodianzan",
                type:"post",
                data:{'cid':data},
                success:function(content){
                     if(content.msg == 'ok'){
                        var cl = 'clikenan'+data;
                        var like = $("#"+cl).html();
                        var like = parseInt(like) + 1;
                        var ke = 'kenan'+data;
                        $("#"+cl).html(like);
                        $("#"+ke).html(like);
                        $(".dianzanqita"+data).html('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;么&nbsp;&nbsp;么&nbsp;&nbsp;哒&nbsp;&nbsp;!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
                     }else if(content.msg == 'no'){
                        alert('发生未知错误');
                     }
                },
                dataType:"json"
            })
        }
        othis.firstChild.setAttribute('value','');
    }

    //do点赞age1
    function dodianzanbao_age1(othis){
        var data = othis.firstChild.getAttribute('value');
        $("#dianzanimgbao_age1"+data).toggleClass("mibao_dianzan2");
        var ctrldianzan = $("#ctrldianzan").attr('value');
        if(data != ''){
            $.ajax({
                url:"/index/me_bao/dodianzan",
                type:"post",
                data:{'cid':data},
                success:function(content){
                     if(content.msg == 'ok'){
                        var cl = 'clikebao_age1'+data;
                        var like = $("#"+cl).html();
                        var like = parseInt(like) + 1;
                        var ke = 'kebao_age1'+data;
                        $("#"+cl).html(like);
                        $("#"+ke).html(like);
                        $(".dianzanqita"+data).html('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;么&nbsp;&nbsp;么&nbsp;&nbsp;哒&nbsp;&nbsp;!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
                     }else if(content.msg == 'no'){
                        alert('发生未知错误');
                     }
                },
                dataType:"json"
            })
        }
        othis.firstChild.setAttribute('value','');
    }

    //do点赞age2
    function dodianzanbao_age2(othis){
        var data = othis.firstChild.getAttribute('value');
        $("#dianzanimgbao_age2"+data).toggleClass("mibao_dianzan2");
        var ctrldianzan = $("#ctrldianzan").attr('value');
        if(data != ''){
            $.ajax({
                url:"/index/me_bao/dodianzan",
                type:"post",
                data:{'cid':data},
                success:function(content){
                     if(content.msg == 'ok'){
                        var cl = 'clikebao_age2'+data;
                        var like = $("#"+cl).html();
                        var like = parseInt(like) + 1;
                        var ke = 'kebao_age2'+data;
                        $("#"+cl).html(like);
                        $("#"+ke).html(like);
                        $(".dianzanqita"+data).html('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;么&nbsp;&nbsp;么&nbsp;&nbsp;哒&nbsp;&nbsp;!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
                     }else if(content.msg == 'no'){
                        alert('发生未知错误');
                     }
                },
                dataType:"json"
            })
        }
        othis.firstChild.setAttribute('value','');
    }


    //do点赞age3
    function dodianzanbao_age3(othis){
        var data = othis.firstChild.getAttribute('value');
        $("#dianzanimgbao_age3"+data).toggleClass("mibao_dianzan2");
        var ctrldianzan = $("#ctrldianzan").attr('value');
        if(data != ''){
            $.ajax({
                url:"/index/me_bao/dodianzan",
                type:"post",
                data:{'cid':data},
                success:function(content){
                     if(content.msg == 'ok'){
                        var cl = 'clikebao_age3'+data;
                        var like = $("#"+cl).html();
                        var like = parseInt(like) + 1;
                        var ke = 'kebao_age3'+data;
                        $("#"+cl).html(like);
                        $("#"+ke).html(like);
                        $(".dianzanqita"+data).html('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;么&nbsp;&nbsp;么&nbsp;&nbsp;哒&nbsp;&nbsp;!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
                     }else if(content.msg == 'no'){
                        alert('发生未知错误');
                     }
                },
                dataType:"json"
            })
        }
        othis.firstChild.setAttribute('value','');
    }


    //do点赞age4
    function dodianzanbao_age4(othis){
        var data = othis.firstChild.getAttribute('value');
        $("#dianzanimgbao_age4"+data).toggleClass("mibao_dianzan2");
        var ctrldianzan = $("#ctrldianzan").attr('value');
        if(data != ''){
            $.ajax({
                url:"/index/me_bao/dodianzan",
                type:"post",
                data:{'cid':data},
                success:function(content){
                     if(content.msg == 'ok'){
                        var cl = 'clikebao_age4'+data;
                        var like = $("#"+cl).html();
                        var like = parseInt(like) + 1;
                        var ke = 'kebao_age4'+data;
                        $("#"+cl).html(like);
                        $("#"+ke).html(like);
                        $(".dianzanqita"+data).html('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;么&nbsp;&nbsp;么&nbsp;&nbsp;哒&nbsp;&nbsp;!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
                     }else if(content.msg == 'no'){
                        alert('发生未知错误');
                     }
                },
                dataType:"json"
            })
        }
        othis.firstChild.setAttribute('value','');
    }

    //do点赞age5
    function dodianzanbao_age5(othis){
        var data = othis.firstChild.getAttribute('value');
        $("#dianzanimgbao_age5"+data).toggleClass("mibao_dianzan2");
        var ctrldianzan = $("#ctrldianzan").attr('value');
        if(data != ''){
            $.ajax({
                url:"/index/me_bao/dodianzan",
                type:"post",
                data:{'cid':data},
                success:function(content){
                     if(content.msg == 'ok'){
                        var cl = 'clikebao_age5'+data;
                        var like = $("#"+cl).html();
                        var like = parseInt(like) + 1;
                        var ke = 'kebao_age5'+data;
                        $("#"+cl).html(like);
                        $("#"+ke).html(like);
                        $(".dianzanqita"+data).html('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;么&nbsp;&nbsp;么&nbsp;&nbsp;哒&nbsp;&nbsp;!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
                     }else if(content.msg == 'no'){
                        alert('发生未知错误');
                     }
                },
                dataType:"json"
            })
        }
        othis.firstChild.setAttribute('value','');
    }


    $(".city_name").click(function(){
        var city_name = $(this).html();
        window.location.href="/index/me_bao/city_child/" + city_name; 
    })

    $(".liandong1").bind('change',function(){
        var $n = $(this).nextAll("select");
        $n.each(function() {
            this.options.length=1;
        })
        var $this = $(this);
        var $area = $this.val();
        if($area<=0) {
            return;
        }
        $.ajax({
                url:"/index/liandong",
                type:"post",
                data:{'cid':$area},
                success:function(content){
                     if(content){
                        var data = eval(content);
                        for(var i=0;i<data.length;i++){
                            $this.next().append('<option value="'+data[i]['province_id']+'">'+data[i]['province_name']+'</option>');
                        }
                     }
                },
                dataType:"json"
            })

    })

    $(".liandong2").bind('change',function(){
        var $n = $(this).nextAll("select");
        $n.each(function() {
            this.options.length=1;
        })
        var $this = $(this);
        var $province = $this.val();
        if($province<=0) {
            return;
        }
        $.ajax({
                url:"/index/liandong2",
                type:"post",
                data:{'cid':$province},
                success:function(content){
                     if(content){
                        var data = eval(content);
                        console.log(data);
                        for(var i=0;i<data.length;i++){
                            $this.next().append('<option value="'+data[i]['city_id']+'">'+data[i]['city_name']+'</option>');
                        }
                     }
                },
                dataType:"json"
            })

    })
</script>
</html>
