<script type="text/javascript">  
    function getBrowser() {    
        var ua = window.navigator.userAgent;    
        var isIE = window.ActiveXObject != undefined && ua.indexOf("MSIE") != -1;    
        var isFirefox = ua.indexOf("Firefox") != -1;    
        var isOpera = window.opr != undefined;    
        var isChrome = ua.indexOf("Chrome") && window.chrome;    
        var isSafari = ua.indexOf("Safari") != -1 && ua.indexOf("Version") != -1;    
        if (isIE) {    
            return "IE";    
        } else if (isFirefox) {    
            return "Firefox";    
        } else if (isOpera) {    
            return "Opera";    
        } else if (isChrome) {    
            return "Chrome";    
        } else if (isSafari) {    
            return "Safari";    
        } else {    
            return "Unkown";    
        }    
    }  
      
    var linkNode = document.createElement("link"),scriptNode = document.createElement("script");  
    linkNode.setAttribute("rel","stylesheet");  
    linkNode.setAttribute("type","text/css");  
    scriptNode.setAttribute("type", "text/javascript");  
      
    if(getBrowser()=="IE"){  
        linkNode.setAttribute("href","{{URL::asset('/css2/ie.css')}}"); 
    }
    document.head.appendChild(linkNode);  
    document.head.appendChild(scriptNode);  
    document.getElementById("scroll-bar").innerHTML = "您的浏览器是："+getBrowser();  

</script>
<nav class="nav-lg hidden-xs">
    <div class="text-right">
      <a class="index_daohang" href="/culture">匠几文化<span class="index_daohang_span1"></span><span class="index_daohang_span2 animated">CULTURE</span></a>
      <span class="hidden-1200">&emsp;</span>
      <span class="hidden-1200">&emsp;</span>
      <span class="hidden-1200">&emsp;</span>
      <a class="index_daohang"  href="/service">匠几服务<span class="index_daohang_span1"></span><span class="index_daohang_span2 animated">SERVICE</span></a>
      <span class="hidden-1200">&emsp;</span>
      <span class="hidden-1200">&emsp;</span>
      <span class="hidden-1200">&emsp;</span>
      <a class="index_daohang"  href="/case">品牌案例<span class="index_daohang_span1"></span><span class="index_daohang_span2 animated">CASE</span></a>
    </div>
    <div class="hidden-1200" style="width: 25px;">
    </div>
    <div style="width: 250px;">
    </div>
    <div class="hidden-1200" style="width: 25px;">
    </div>
    <div class="clearfix"> 
      <p class="pull-left" style="margin: 0;">
        <a class="index_daohang"  href="/purchase">配套采购<span class="index_daohang_span1"></span><span class="index_daohang_span2 animated">PURCHASE</span></a>
      <span class="hidden-1200">&emsp;</span>
      <span class="hidden-1200">&emsp;</span>
      <span class="hidden-1200">&emsp;</span>
        <a class="index_daohang"  href="/news">匠几动态<span class="index_daohang_span1"></span><span class="index_daohang_span2 animated">NEWS</span></a>
        <span class="hidden-1200">&emsp;</span>
      <span class="hidden-1200">&emsp;</span>
      <span class="hidden-1200">&emsp;</span>
        <a class="index_daohang"  href="/contact">联系匠几<span class="index_daohang_span1"></span><span class="index_daohang_span2 animated">CONTACT</span></a>
      </p>
    </div>
</nav>