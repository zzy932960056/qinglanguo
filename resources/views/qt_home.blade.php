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
        当前位置 ：<span><a href="javascript:;">青蓝果之家</a></span>><span>中心园</span>
    </div>
    <!--面包屑 end-->
    <!--内容-->
    <div class="culture-container home-box-inner">
        <div class="culture-home-tit"></div>
        <div class="culture-con-content home-con-content">
            <div class="culture-nav culture-home-nav">
                <ul class="culture-home-ul">
                    <li>
                        <i class="home-circle active"></i>
                        <img src="{{URL::asset('/images/home1.jpg')}}" alt="">
                    </li>
                    <li>
                        <i class="home-circle"></i>
                        <img src="{{URL::asset('/images/home2.jpg')}}" alt="">
                    </li>
                    <li>
                        <i class="home-circle"></i>
                        <img src="{{URL::asset('/images/home3.jpg')}}" alt="">
                    </li>
                    <li>
                        <i class="home-circle"></i>
                        <img src="{{URL::asset('/images/home4.jpg')}}" alt="">
                    </li>
                    <li>
                        <i class="home-circle"></i>
                        <img src="{{URL::asset('/images/home5.jpg')}}" alt="">
                    </li>
                </ul>
            </div>
            <div class="culture-idea-con home-con">
                <div class="home-warp-items" style="display:block;">
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
                                    青蓝果幼教集团前身为山东新华制药厂幼儿园，创建于1952年，是淄博市最早的托幼一体化幼儿园，2003年新华医药集团主辅分离，更名为淄博张店新华同力幼儿园。幼儿园注重内涵发展和师资培养，秉承“倾听世界，发现自我”的核心办园理念，培养儿童独立的人格和自由的精神，让教育回归本真，让本真滋养教育。
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item2">
                                <div class="idea-items-tit home-items-tit"><i></i>园所荣誉</div>
                                <div class="idea-items-con home-items-con">
                                    幼儿园首批进入山东省省级示范幼儿园、淄博市十佳幼儿园行列，是淄博市示范幼儿园、淄博市音乐教学示范基地，中国蒙台梭利协会基地幼儿园，全国蒙台梭利十佳幼儿园，2011年被评为全国学前教育先锋幼儿园。
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item3">
                                <div class="idea-items-tit home-items-tit"><i></i>园所环境</div>
                                <div class="idea-items-con home-items-con">
                                    <img src="{{URL::asset('/images/z1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item4">
                                <div class="idea-items-tit home-items-tit"><i></i>园所荣誉</div>
                                <div class="idea-items-con home-items-con">
                                    <p>联系人：李晓红园长</p>
                                    <p>联系方式：0533-2196829 2196838</p>
                                    <p>园所地址：山东省淄博市张店区东一路17号</p>
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
                                    青蓝果王舍幼儿园建于2000年5月8日，拥有科学的教育理念和多元化的教育课程，因材施教，结合当地特有的地方文化，进行传统文化课程以及节日节气活动教育等。同时园内拥有现代化的室内外硬件设施和健全的安全、卫生、消毒制度，配有专门的儿童营养师、专职厨师，每日食谱注重营养搭配，保证食品卫生安全。适宜的教学环境、专业的教师团队、细致的保育护理、严格的管理制度，有效的家园互动，使幼儿园成为周边家长们放心选择的幼儿园。
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item6">
                                <div class="idea-items-tit home-items-tit"><i></i>园所荣誉</div>
                                <div class="idea-items-con home-items-con">
                                    是全国蒙台梭利十佳幼儿园、每年都是卫生保健先进单位、食品等级B级单位。
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item7">
                                <div class="idea-items-tit home-items-tit"><i></i>园所环境</div>
                                <div class="idea-items-con home-items-con">
                                    <img src="{{URL::asset('/images/w1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item8">
                                <div class="idea-items-tit home-items-tit"><i></i>园所荣誉</div>
                                <div class="idea-items-con home-items-con">
                                    <p>联系人：王玉珍园长</p>
                                    <p>联系方式：0533-2399285 0533-2755606</p>
                                    <p>园所地址：山东省淄博市张店区王舍小区胜利桥综合楼1号</p>
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
                                    青蓝果南家幼儿园是第三所分园，2005年1月建园。依托集团优势，南家幼儿园规范管理、创新发展，让幼儿园教育教学立足于本土文化，让节气、节日贯穿于孩子的生活，让常青藤的教育理念浸润孩子的童年。
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item10">
                                <div class="idea-items-tit home-items-tit"><i></i>园所荣誉</div>
                                <div class="idea-items-con home-items-con">
                                    <p>幼儿园优良的环境、优质的教育、专业的团队、科学的管理，赢得了社会各界的认可、家长的信任。</p>
                                    <p>幼儿园先后荣获：</p>
                                    <p><span>2007.10</span>淄博市示范幼儿园</p>
                                    <p><span>2009.11</span>淄博市十佳幼儿园</p>
                                    <p><span>2009</span>全国蒙台梭利十佳幼儿园</p>
                                    <p><span>2009</span>中国蒙台梭利协会基地幼儿园</p>
                                    <p><span>2009.3</span>张店区绿色餐厅</p>
                                    <p><span>2011.3 </span>淄博市食品安全示范单位</p>
                                    <p><span>2016.7</span> 山东省示范幼儿园</p>
                                    <p><span>2018.7</span> 接待区政协调研</p>
                                    <p style="padding-left:100px;">联合张店区食药局进行家长食堂开放日 </p>
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item11">
                                <div class="idea-items-tit home-items-tit"><i></i>园所环境</div>
                                <div class="idea-items-con home-items-con">
                                    <img src="{{URL::asset('/images/n1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item12">
                                <div class="idea-items-tit home-items-tit"><i></i>园所荣誉</div>
                                <div class="idea-items-con home-items-con">
                                    <p>联系人：汪敏园长</p>
                                    <p>联系方式：0533-2852179 </p>
                                    <p>园所地址：山东省淄博市张店区南家小区院内28号楼西</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-warp-items">
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
                                    青蓝果芳草地幼儿园成立于2009年3月，有11个活动教室，并设有多功能活动室、美术馆、科学馆、绘本馆、保健室，孩子们的户外活动场地分为阳光前院、休闲后院、空中花园，为孩子们创设了丰富、多样的活动场所。幼儿园以绘本阅读为园本特色，在亲子共读中畅享书的魅力，感受成长的快乐，在读绘本中聊家教，提升绘本的价值！
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item14">
                                <div class="idea-items-tit home-items-tit"><i></i>园所荣誉</div>
                                <div class="idea-items-con home-items-con">
                                    幼儿园于2016年10月被评为淄博市示范幼儿园，师资力量雄厚，教师在淄博市网络课程资源大赛中分获一等奖、二等奖；在山东省教师舞蹈技能大赛中获一等奖；在淄博市教师技能大赛中获“舞蹈类”一等奖；在淄博市优质课评选中获得“语言类”二等奖；张店区优质课二等奖;淄博市微课设计大赛三等奖。
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item15">
                                <div class="idea-items-tit home-items-tit"><i></i>园所环境</div>
                                <div class="idea-items-con home-items-con">
                                    <img src="{{URL::asset('/images/f1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item16">
                                <div class="idea-items-tit home-items-tit"><i></i>园所荣誉</div>
                                <div class="idea-items-con home-items-con">
                                    <p>联系人：岳海莉园长 </p>
                                    <p>联系方式：0533-3166796 3191379</p>
                                    <p>地址：淄博市张店区景园路7甲5（中润大道时代名都南门对过）</p>
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
                                    青蓝果颐丰幼儿园2014年3月建园，建筑面积2753平方米，是一所环境优雅、高标准、高品质、高档次的幼儿园，有一支热爱生活、激情有活力、专业精干的教职工队伍，对学前教育拥有无限的爱和责任，以儿童为本，尊重孩子成长步调，顺应孩子成长的内生力量，点燃他们的生命力与创造力。
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item18">
                                <div class="idea-items-tit home-items-tit"><i></i>园所荣誉</div>
                                <div class="idea-items-con home-items-con">
                                    幼儿园凭借优良的环境、优质的教育、专业的团队、科学的管理，赢得了社会各界的认可和家长的信任，先后荣获中国蒙台梭利协会基地幼儿园、“全国美丽花故事妈妈义工团”绿色阅读基地、淄博市示范幼儿园、中国键盘合奏音乐研究理事会“杜氏教学法”实践基地、国际好家庭指导中心。
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item19">
                                <div class="idea-items-tit home-items-tit"><i></i>园所环境</div>
                                <div class="idea-items-con home-items-con">
                                    <img src="{{URL::asset('/images/y1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="culture-idea-items" id="item20">
                                <div class="idea-items-tit home-items-tit"><i></i>园所荣誉</div>
                                <div class="idea-items-con home-items-con">
                                    <p>联系人：宋娜园长</p>
                                    <p>联系方式：0533-3816679 </p>
                                    <p>园所地址：山东省淄博市张店区颐丰花园颐馨园9号楼</p>
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
</script>
</html>
