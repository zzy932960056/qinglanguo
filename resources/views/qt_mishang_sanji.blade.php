<html>
<head>

<!-- content type -->
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">

<!-- viewport -->
<meta content="width=device-width,initial-scale=1" name="viewport">
   
<!-- title -->
<title>觅尚</title>
<link rel="shortcut icon" href="{{URL::asset('/images/meyoung.ico')}}">
<link rel="Bookmark" href="{{URL::asset('/images/meyoung.ico')}}">

<link href="{{URL::asset('/css2/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css2/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css2/index.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('/css2/style1.css')}}" rel="stylesheet" type="text/css">
<script src="{{URL::asset('/js2/jquery-2.1.1.min.js')}}"></script>
<script src="{{URL::asset('/js2/index_js.js')}}"></script>
<script src="{{URL::asset('/js2/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('/js2/wow.min.js')}}"></script>


			
<!-- add css -->
<link type="text/css" href="{{URL::asset('/css3/style.css')}}" rel="stylesheet">



<!-- add js -->
<script src="{{URL::asset('/js3/jquery.js')}}"></script>
<script src="{{URL::asset('/js3/turn.js')}}"></script>              
<script src="{{URL::asset('/js3/jquery.fullscreen.js')}}"></script>
<script src="{{URL::asset('/js3/jquery.address-1.6.min.js')}}"></script>
<script src="{{URL::asset('/js3/onload.js')}}"></script>


  
</head>



<body>  
    <?php error_reporting(0); ?>

<!--上下三角-->
<div class="container-fluid mibao_shang navbar-fixed-top">
        <div class="col-md-6 col-sm-6 col-xs-6 fadeInLeft animated" style="position:relative">
            <img src="{{URL::asset('/images/mishang_shangsnajiao.png')}}" class="img-responsive" style="width:100%">
            <a class="fanhuishouye" href="/"></a>
        </div>
    	<div class="col-md-6 col-sm-6 col-xs-6">
            <a href="/index/me_shang" class="mibao_fanhui animated fadeInDown" style="background:#fedd00"><b class="mibao_fanhui_b animated">返回<br>Back</b></a>
        </div>
</div>
<div class="container-fluid navbar-fixed-bottom fadeInRight animated" style="padding:0">
    	<div class="col-md-6 col-sm-6 col-xs-6 col-xs-offset-6" style="padding:0; position:relative">
            <img src="{{URL::asset('/images/mishang_xiasnajiao.png')}}" class="img-responsive" style="width:100%">
            <a href="javascript:;" id="toTop" title="回到顶部"></a><img src="{{URL::asset('/images/top.png')}}" class="img-responsive" id="top_huojian">
        </div>
</div>


  
<!-- BEGIN FLIPBOOK STRUCTURE -->   
<div data-template="true" data-cat="book7" id="fb7-ajax" style="height:80vh; margin-top:10vh; position:relative; z-index:9999">  
  

         
    <!-- BEGIN HTML BOOK -->     
    <div data-current="book7" class="fb7" id="fb7">      
    
        <!-- preloader -->
        <div class="fb7-preloader">
            <div id="wBall_1" class="wBall">
            <div class="wInnerBall">
            </div>
            </div>
            <div id="wBall_2" class="wBall">
            <div class="wInnerBall">
            </div>
            </div>
            <div id="wBall_3" class="wBall">
            <div class="wInnerBall">
            </div>
            </div>
            <div id="wBall_4" class="wBall">
            <div class="wInnerBall">
            </div>
            </div>
            <div id="wBall_5" class="wBall">
            <div class="wInnerBall">
            </div>
            </div>
        </div>
              
        <!-- background for book -->  
        <div class="fb7-bcg-book"></div>               
      
        <!-- BEGIN CONTAINER BOOK -->
        <div id="fb7-container-book">
     
           <!-- BEGIN deep linking -->  
           <section id="fb7-deeplinking">
             <ul>
                @foreach($me_shang_pic as $key => $value)
                @if($key == 0)
                <li data-address="page1" data-page="1"></li>
                @else
                <li data-address="page{{$key+1}}-page{{$key+2}}" data-page="{{$key+1}}"></li>
                @endif
                @endforeach
                <li data-address="end" data-page="{{$key+1}}"></li>  
             </ul>
           </section>
           <!-- END deep linking -->  
        
            
           <!-- 杂志介绍 -->
           <section id="fb7-about" style="background:#FFF; padding-left:30px">
				<h1 style="color:#000; text-align:center; margin-bottom:30px">{{$me_shang['magazine_theme']}}</h1>
                @foreach($me_shang_text as $value)
                <p style="font-size:20px; color:#666; line-height:30px; letter-spacing:2px; margin-bottom:20px">{{$value->magazine_text}}</p>
                @endforeach
           </section>
           <!-- 杂志介绍结束 -->
    
    
            <!-- 杂志开始 -->
            <div id="fb7-book" style="background:#fff">       
              
                    @foreach($me_shang_pic as $key => $value)
                    @if($key == 0)
                    <!-- 第一页 -->          
                    <div style="background-image:url({{$value->magazine_pic}})" class="fb7-noshadow">
                           
                         <!-- begin container page book --> 
                         <div class="fb7-cont-page-book">
                           
                            <!-- description for page --> 
                            <div class="fb7-page-book">
                        
                            </div> 
                            
                            
                         </div>
                        <!-- end container page book --> 
                            
                    </div>
                    <!-- 第一页结束 -->
                      
                      
                    
                    @else
                    <!-- 第二页开始 -->         
                    <div style="background-image:url({{$value->magazine_pic}})" >
                           
                         <!-- begin container page book -->
                         <div class="fb7-cont-page-book">
                           
                             <!-- description for page  --> 
                            <div class="fb7-page-book">
                            
                            </div>                     
                                  
                                      
                            <!-- begin number page -->                
                            <div class="fb7-meta">                        
                                    <span class="fb7-num">{{$value->magazine_page}}</span>                         
                            </div>
                            <!-- end number page --> 
                             
                            
                            
                          </div>
                          <!-- end container page book -->
                            
                    </div>
                     <!-- 第二页结束 -->
                    @endif
                    @endforeach
                    
                    <!-- BEGIN PAGE 10 -->          
                    <div style="background-image:url()">
                           
                         <!-- begin container page book --> 
                         <div class="fb7-cont-page-book">
                           
                                <!-- description for page--> 
                                <div class="fb7-page-book">
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <h1 style="padding-left: 150px;">&nbsp;THE END</h1>                    
                                </div> 
                                    
                         </div>
                         <!-- end container page book -->
                            
                    </div>
                    <!-- END PAGE 10 -->
                                  
           
            
            </div>
            <!-- END PAGES -->
                       
            
            <!-- arrows -->
            <a class="fb7-nav-arrow prev"></a>
            <a class="fb7-nav-arrow next"></a>
                    
            <!-- shadow -->
            <div class="fb7-shadow"></div>
    
        </div>
        <!-- END CONTAINER BOOK -->
    
        <!-- BEGIN FOOTER -->
        <div id="fb7-footer">
        
            <div class="fb7-bcg-tools"></div>
            
            <div class="fb7-menu" id="fb7-center">
                <ul>
                
                    <!-- margin left -->
                    <li></li>
                            
                    <!-- icon download -->
                    <li>
                    </li>
                    <li>
                    </li>
                                            
                    
                    <!-- icon_zoom_in -->                         
                    <li>
                        <a title="放大" class="fb7-zoom-in"></a>
                    </li>
                                    
                    <!-- icon_zoom_out -->                 
                    <li>
                        <a title="缩小" class="fb7-zoom-out"></a>
                    </li>
                                    
                                                        
                    <!-- icon_allpages -->
                    <li>
                        <a title="显示所有页面" class="fb7-show-all"></a>
                    </li>
                                                    
                                    
                    <!-- icon fullscreen -->                 
                    <li>
                        <a title="全屏/半屏显示" class="fb7-fullscreen"></a>
                    </li>
                            
                    <!-- margin right -->                 
                    <li></li>

                    <li>
                    </li>
                    <li>
                    </li>
                    
                </ul>
            </div>
            
            <div class="fb7-menu" id="fb7-right">
                <ul>                              
                    <!-- icon page manager -->                 
                    <li class="fb7-goto" style="padding-top:20px;">
                        <label for="fb7-page-number" id="fb7-label-page-number"></label>
                        <input type="text" id="fb7-page-number">
                        <button type="button" style="top:21px; outline:none !important">Go</button>
                    </li>
         
                </ul>
            </div>     
                
        </div>
        <!-- END FOOTER -->
    
        <!-- 全部杂志展示页 -->
        <div id="fb7-all-pages" class="fb7-overlay">
    
          <section class="fb7-container-pages">
    
            <div id="fb7-menu-holder">
    
                <ul id="fb7-slider">
                        @foreach($me_shang_pic as $key => $value)
                        @if($key == 0)
                         <!-- PAGE 1 - THUMB -->
                        <li class="{{$key+1}}">
                           <img alt="" src="{{$value->magazine_pic}}">
                        </li>
                        @else
                         <!-- PAGE 2 - THUMB -->
                        <li class="{{$key+1}}">
                            <img alt="" src="{{$value->magazine_pic}}">
                        </li>
                        @endif
                        @endforeach
                </ul>
                
            </div>
    
        </section>
    
       </div>
        <!-- 结束 -->

   </div>
    <!-- END HTML BOOK -->    
    
    
</div>
<!-- END FLIPBOOK STRUCTURE --> 


<!-- CONFIGURATION FLIPBOOK -->    
<script>
jQuery('#fb7-ajax').data('config',
    {
		"page_width":"640",
		"page_height":"920",
		"go_to_page":"Page",
		"gotopage_width":"45",
		"zoom_double_click":"1",
		"zoom_step":"0.06",
		"tooltip_visible":"true",
		"toolbar_visible":"true",
		"deeplinking_enabled":"true",
		"double_click_enabled":"true",
		"rtl":"false"
     })
</script>


</body>
</html>
