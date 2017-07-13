<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>首页</title>
    <base href="{{url('')}}">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/all.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
</head>
<body>
<div class="gy_box">
    <!-- header start -->
    <div id="gy_top_wper">
        <div class="gy_top px1000 clearfix">
            <div class="gy_top_l fl"><img src="images/service_pic.png" alt=""><span style="color:#999999;padding-left:10px;">在线客服:</span><img style="padding-left:10px;" src="images/service_photo.png" alt=""><span style="color: #5DB9E9;padding-left:10px;">客服热线：400-660-8612</span></div>
            <div class="gy_top_r fr clearfix">
                <a href="">登录</a><span>|</span>
                <a href="">注册</a><span>|</span>
                <a href="">新手指导</a><span>|</span>
                <a href="">帮助</a>
            </div>
        </div>
    </div>
    <!-- end top -->

    <div id="gy_nav_wper">
        <div class="gy_nav px1000 clearfix">
            <div class="gy_nav_l fl"><img src="images/gy_logo.png" alt=""></div>
            <ul class="gy_nav_c fr clearfix">
                <li><a href="{{url('')}}">首页</a></li>
                <li class="gy_nav_c_ts" style="z-index:1000;">
                    <a href="{{url('invest/index')}}"> 我要投资</a>
                    <ul class="gycf_perinfo">
                        <div class="gy_nav_c_cp"><img src="images/gy_down_cpr.png"></div>
                        <div class="gycf_perinfo_pic">
                            <img src="images/gy_cp_footer_wper_xiala_bor.png"></div>
                        <li><a href="">PPP信投</a></li>
                        <li><a href="">政府（存量）债</a></li>
                        <li><a href="">新手专享</a></li>
                        <li><a href="">新手专享</a></li>
                    </ul>
                </li>
                <li><a href="">活动专区</a></li>
                <li><a href="">业务模式</a></li>
                <li><a href="safe/index">安全保障</a></li>
                <li><a href="{{url('aboutus/index')}}">关于我们</a></li>
            </ul>
        </div>
    </div>
    <!-- header end -->

    @yield('content')

    <!--gy_guide_about_us -->
    <div id="gy_guide_about_us">
        <div class="px1000 clearfix">
            <div class="gy_guide_aus_left fl">
                <div class="gy_guide_aus_block fl">
                    <p class="gy_guide_aus_ccp"><b>关于我们</b></p>
                    <ul>
                        <li><a href="">荣誉奖项</a></li>
                        <li><a href="">发展历程</a></li>
                        <li><a href="">招贤纳士</a></li>
                        <li><a href="">联系我们</a></li>
                    </ul>
                </div>
                <div class="gy_guide_aus_block fl">
                    <p class="gy_guide_aus_ccp"><b>金融资讯</b></p>
                    <ul>
                        <li><a href="">金融帮助</a></li>
                        <li><a href="">行业资讯</a></li>
                    </ul>
                </div>
                <div class="gy_guide_aus_block fl">
                    <p class="gy_guide_aus_ccp"><b>业务信息</b></p>
                    <ul>
                        <li><a href="">我要投资</a></li>
                        <li><a href="">我要借款</a></li>
                    </ul>
                </div>
                <div class="gy_guide_aus_block fl">
                    <p class="gy_guide_aus_ccp"><b>帮助中心</b></p>
                    <ul>
                        <li><a href="">新手指引</a></li>
                        <li><a href="">安全保障</a></li>
                        <li><a href="">融资借款</a></li>
                        <li><a href="">实时财务</a></li>
                    </ul>
                </div>
            </div>

            <div class="gy_guide_aus_right fl">
                <div class="fl gy_guide_aus_r_le">
                    <div class="gy_guide_aus_r_ewm"><img src="images/gy_guide_aus_right_ewm.png"></div>
                    <div style="padding-left:20px;"><img src="images/gy_guide_aus_right_sys.png"></div>
                </div>
                <div class="fl gy_guide_aus_r_re">
                    <p class="gy_guide_aus_r_pad" style="font-size:20px"><b>客服热线</b></p>
                    <p class="gy_guide_aus_r_pad" style="font-size:24.26px;color:#29a7e1;">400-678-7677</p>
                    <p class="gy_guide_aus_r_pad" style="font-size:14px">(周一至周日 08:00 - 22:00)</p>
                    <p class="gy_guide_aus_r_pad">
						<span>
							<a href=""><img src="images/gy_guide_aus_right_xlwb.png"></a>
							<a href=""><img src="images/gy_guide_aus_right_wx.png"></a>
							<a href=""><img src="images/gy_guide_aus_right_zxkf.png"></a>
						</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--- footer start -->
    <div id="gy_footer_wper">
        <div class="gy_footer_xy px1000 clearfix">
            <div class="gy_footer_xy_picp">
                <img src="images/gy_cp_footer_wper_up01.jpg">
                <img src="images/gy_cp_footer_wper_up02.png">
                <img src="images/gy_cp_footer_wper_up03.png">
                <img src="images/gy_cp_footer_wper_up04.png">
                <img src="images/gy_cp_footer_wper_up05.png">
                <img src="images/gy_cp_footer_wper_up06.png">
            </div>
            <div class="gy_footer_xy_fonts">
                <p>©2014 亘元投资 All rights reserved 亘元投资金融有限公司 辽ICP备11046595号-6</p>
            </div>
            <div class="gy_footer_youqlj">
                <div class="fl">友情链接:</div>
                <div class="fl">
                    <ul class="gy_footer_youqlj_one">
                        <li><a href="">证券之星</a></li>
                        <li><a href="">南方财富网</a></li>
                        <li><a href="">蚂蚁财经</a></li>
                        <li><a href="">卡盟网</a></li>
                        <li><a href="" style="color:#5DB0D7">外汇理财</a></li>
                        <li><a href="">股市行情</a></li>
                        <li><a href="">P2P理财</a></li>
                        <li><a href="">白银理财</a></li>
                    </ul><br>
                    <ul id="unfold_show" class="gy_footer_youqlj_two" style="display:none;">
                        <li><a href="">证券之星</a></li>
                        <li><a href="">南方财富网</a></li>
                        <li><a href="">蚂蚁财经</a></li>
                        <li><a href="">卡盟网</a></li>
                        <li><a href="">外汇理财</a></li>
                        <li><a href="">股市行情</a></li>
                        <li><a href="">P2P理财</a></li>
                        <li><a href="">白银理财</a></li>
                    </ul><br>
                    <ul id="unfold_show" class="gy_footer_youqlj_three" style="display:none;">
                        <li><a href="">证券之星</a></li>
                        <li><a href="">南方财富网</a></li>
                        <li><a href="">蚂蚁财经</a></li>
                        <li><a href="">卡盟网</a></li>
                        <li><a href="">外汇理财</a></li>
                        <li><a href="">股市行情</a></li>
                        <li><a href="">P2P理财</a></li>
                        <li><a href="">白银理财</a></li>
                    </ul>
                </div>
                <div id="unfold" class="fl">
                    <span>展开</span>
                    <span><img src="images/gy_cp_footer_wper_down_zk.png"></span>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    function guideone(){
        document.getElementById("gy_guide_staten_xkds2").style.display="block";
        document.getElementById("gy_guide_staten_xkds5").style.display="none";
        document.getElementById("gy_guide_sarter1").style.background="url(images/gy_guide_sarter1.png) no-repeat";
        document.getElementById("gy_guide_sarter2").style.background="url(images/gy_guide_sarter2.png) no-repeat";
        document.getElementById("gy_guide_sarter1").style.color="#089ADC";
        document.getElementById("gy_guide_sarter2").style.color="#A2A2A2";
        document.getElementById("gy_guide_sarter1").style.padding="12px 35px 2px 35px";
        document.getElementById("gy_guide_sarter2").style.padding="12px 35px 1px 35px";
    }
    function guidetwo(){
        document.getElementById("gy_guide_staten_xkds2").style.display="none";
        document.getElementById("gy_guide_staten_xkds5").style.display="block";
        document.getElementById("gy_guide_sarter1").style.background="url(images/gy_guide_sarter2.png) no-repeat";
        document.getElementById("gy_guide_sarter2").style.background="url(images/gy_guide_sarter1.png) no-repeat";
        document.getElementById("gy_guide_sarter2").style.color="#089ADC";
        document.getElementById("gy_guide_sarter1").style.color="#A2A2A2";
        document.getElementById("gy_guide_sarter2").style.padding="12px 35px 2px 35px";
        document.getElementById("gy_guide_sarter1").style.padding="12px 35px 1px 35px";
    }
</script>

</body>
</html>