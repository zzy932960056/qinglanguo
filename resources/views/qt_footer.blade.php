<div class="footer-container">
    <div class="footer-pos"></div>
    <div class="footer-titp">
        <div class="footer-top">
            <img src="{{URL::asset('/images/top.png')}}" alt="">
        </div>
    </div>
    <div class="footer-bg">
        <div class="footer-inner">
            <div class="footer-logo">
                <a href="/">
                    <img src="{{URL::asset('/images/footer-logo.png')}}" alt="">
                </a>
            </div>
            <div class="footer-content">
                <ul>
                    <li>
                        <a href="/home">
                            <img src="{{URL::asset('/images/footer1.png')}}" alt="">
                        </a>
                        <span><a href="/home">中心园</a></span>
                        <span><a href="/home_ws">王舍园</a></span>
                        <span><a href="/home_nj">南家园</a></span>
                        <span><a href="/home_fc">芳草园</a></span>
                        <span><a href="/home_yf">颐丰园</a></span>
                    </li>
                    <li>
                        <a href="/education">
                            <img src="{{URL::asset('/images/footer2.png')}}" alt="">
                        </a>
                        <span><a href="/education#item1">传统文化</a></span>
                        <span><a href="/education#item2">探究空间</a></span>
                        <span><a href="/education#item3">健康领动</a></span>
                        <span><a href="/education#item4">艺术创想</a></span>
                        <span><a href="/education#item5">社会链接</a></span>
                        <span><a href="/education#item6">师资力量</a></span>
                    </li>
                    <li>
                        <a href="/culture">
                            <img src="{{URL::asset('/images/footer3.png')}}" alt="">
                        </a>
                        <span><a href="/culture">园所理念</a></span>
                        <span><a href="/culture_vi">视觉形象</a></span>
                        <span><a href="/culture_env">环境文化</a></span>
                        <span><a href="/culture_food">食育文化</a></span>
                    </li>
                    <li>
                        <a href="/news">
                            <img src="{{URL::asset('/images/footer4.png')}}" alt="">
                        </a>
                        <span><a href="javascript:;">园所快报</a></span>
                        <span><a href="javascript:;">健康护航</a></span>
                        <span><a href="javascript:;">金色时光</a></span>
                        <span><a href="javascript:;">最美芳华</a></span>
                        <span><a href="javascript:;">为爱同行</a></span>
                    </li>
                </ul>
            </div>
        </div>
        <p class="footer-d">{{$company_info[0]->archival_info}}</p>
    </div>
</div>
