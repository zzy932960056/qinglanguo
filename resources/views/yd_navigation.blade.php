<div class="container-fluid" style="position:relative; padding:0">
    <div class="col-md-12 col-sm-12 col-xs-12 index_daohang">
        <div class="col-md-2 col-sm-2 col-xs-2" id="index_dengpao_anniu"><img src="{{URL::asset('/yd_images/dengpao.png')}}" class="img-responsive"></div>
        <div class="col-md-8 col-sm-8 col-xs-8 index_logoceng"><a href="/"><img src="{{URL::asset('/yd_images/logo.png')}}" class="img-responsive"></a></div>
        <span class="index_daohang_zhezhao"></span>
        <style>
            .dengpaoceng{width:100vw; height:100vh; position:fixed; top:0; left:0; padding-top:200px; display:none}
            .dengpaoceng_tuceng{position:relative; padding:0 45px}
            .dengpaoceng_cha{position:absolute; top:40px; right:85px; z-index:9999}
            .index_tanchuang_more{position:absolute; width:200px; height:50px; display:block; left:37%; bottom:5.5%}
        </style>
        <div class="container-fluid dengpaoceng">
            <div class="dengpaoceng_tuceng">
                <img src="{{$company_info->alert_info_mobile}}" class="img-responsive">
                <img src="{{URL::asset('/yd_images/index_tanchuang_cha.png')}}" class="img-responsive dengpaoceng_cha">
                <a href="/contact" class="index_tanchuang_more"></a>
            </div>
        </div>
    <!--侧滑导航-->
        <div class="mobile">
            <form autocomplete="off">
                <input type="checkbox" id="tm" />
                <div class="daohang_daceng">
                    <div class="col-md-12 col-sm-12 col-xs-12 index_daohang" style="background:#959595">
                        <div class="col-md-8 col-sm-8 col-xs-8 col-xs-offset-2 index_logoceng"><a href="/"><img src="{{URL::asset('/yd_images/logo.png')}}" class="img-responsive"></a></div>
                    </div>
                    <ul class="sidenav">
                        <a href="/culture" style="text-decoration:none;"><li>匠几文化<span>/CULTURE</span></li></a>
                        <a href="/service" style="text-decoration:none;"><li>匠几服务<span>/SERVICE</span></li></a>
                        <a href="/case" style="text-decoration:none;"><li>品牌案例<span>/BRAND CASE</span></li></a>
                        <a href="/purchase" style="text-decoration:none;"><li>配套采购<span>/PURCHASE</span></li></a>
                        <a href="/news" style="text-decoration:none;"><li>匠几动态<span>/NEWS</span></li></a>
                        <a href="/contact" style="text-decoration:none;"><li>联系匠几<span>/CONTACT</span></li></a>
                    </ul>
                </div>
                <section>
                    <div class="col-md-2 col-sm-2 col-xs-2 index_anniuceng">
                        <label for="tm" id="html">
                            <span id="anniu_ceng1"><img src="http://static.meyoungbaby.com/daohanganniu.png" id="anniu_tu1"></span>
                        </label>
                    </div>
                </section>
             </form>
        </div>         
    </div>
</div>