<?php 
    @session_start();
?>
<div class="mobile">
    <form autocomplete="off">
        <input type="checkbox" id="tm" />
        <div class="daohang_daceng">
            <div class="row"><img src="{{URL::asset('/images_yd/index_tiao.png')}}" class="img-responsive" style="width:100%"></div>
            <div class="row"><a href="/"><img src="{{URL::asset('/images_yd/logo.png')}}" class="img-responsive" style="margin:40px auto"></a></div>
            <ul class="sidenav">
                <li><b><a href="/"><img src="{{URL::asset('/images_yd/daohang1.png')}}" class="img-responsive"></a></b></li>
                <li><b><a href="/index/me_wen"><img src="{{URL::asset('/images_yd/daohang2.png')}}" class="img-responsive"></a></b></li>
                <li><b><a href="/index/me_xiu"><img src="{{URL::asset('/images_yd/daohang3.png')}}" class="img-responsive"></a></b></li>
                <li><b><a href="/index/me_shang"><img src="{{URL::asset('/images_yd/daohang4.png')}}" class="img-responsive"></a></b></li>
                <li><b><a href="javascript:;" onclick="alert('店铺装修中,敬请期待')"><img src="{{URL::asset('/images_yd/daohang5.png')}}" class="img-responsive"></a></b></li>
                <li><b><a href="/index/me_bao"><img src="{{URL::asset('/images_yd/daohang6.png')}}" class="img-responsive"></a></b></li>
                <li><b><a href="/index/me_young"><img src="{{URL::asset('/images_yd/daohang7.png')}}" class="img-responsive"></a></b></li>
            </ul>
        </div>

        <section>
            <label for="tm">
                <span id="anniu_ceng1"><img src="http://ogqtpampu.bkt.clouddn.com/daohang_btn.png" id="anniu_tu1"></span>
                @if(isset($_SESSION['phone']))
                <a class="denglu_btn_btn2" href="javascript:logout()"><span><?=$_SESSION['phone']?></span></a>
                @else
                <a class="denglu_btn_btn" href="/index/login"><span>登录</span></a>
                @endif
            </label>
           
        </section>
     </form>
</div>
