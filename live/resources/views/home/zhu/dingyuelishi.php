<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" content="虎牙直播是国内领先的互动直播平台,900万人同时在线,提供高清、流畅的赛事直播和游戏直播.虎牙包含英雄联盟lol直播、dota2直播、穿越火线cf直播、dnf直播等热门游戏直播以及、美女主播、网络电视">
        <meta name="Keywords" content="lol直播,lol游戏直播,英雄联盟直播,dota2直播,dota直播,dnf直播,cf直播,游戏直播,赛事直播,YY直播,美女主播,虎牙,虎牙直播">
        <title>直播个人中心</title>
        <base href="http://www.live.com/home/">
        <link rel="stylesheet" href="css/admin.css">
        <style type="text/css">
        .main-col{*padding-bottom: 140px;}
        </style>
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script><script type="text/javascript">
    var dy;
    var liveUrl="http://www.huya.com/";
    var defaultProfile="images/default_profile.jpg";
    $(window).load(function(){
        dy = new activity_util.activity("http://www.huya.com/");
    });     
</script>
<style>
    .box {margin: auto;left: auto;top: auto;float: inherit;display: block;}
    .box .box-bd{background: none;}
</style>
<link rel="stylesheet" type="text/css" href="css/oldpop.css" />
<link rel="stylesheet" href="css/user_subscribe.css"> 
<link rel="stylesheet" type="text/css" href="css/new_sub.css">
<script type="text/javascript" src="js/jquery.dragndrop.min.js"></script>
<script type="text/javascript" src="js/jquery.msgbox.js"></script>
<script type="text/javascript" src="js/activity.js"></script>
<script src="js/js&amp;f=lego.popupbox.js,lego.switchable.js"></script>
</head>
<body>
    

<script src="js/header.js?hiido_no=0&hiido_wid=www,_22dfa14"></script>
    <div class="admin-wrap">
        <style type="text/css">
.nav-scroll-wrap .nav-section .icon-recommendtag{
    background-image: url(images/icon-recommendtag.png);
}
.nav-scroll-wrap .nav-section .icon-room{
    background-image: url(images/room_man_icon.png);
}
/*CDK兑换*/
.nav-scroll-wrap .nav-section .icon-CDKey_change {
    background-image: url(images/icon_CDKey.png);
}
/*中奖查询*/
.nav-scroll-wrap .nav-section .icon-maw {
    background-image: url(images/icon_my_awards.png);
}
/*虎牙认证*/
.nav-scroll-wrap .nav-section .icon-auth{background-image: url('images/auth_icon.png');}
/*广告推广*/
.nav-scroll-wrap .nav-section .icon-ad{
    background-image: url('images/icon-ad.png');
}
</style>
<script>
    var currentMenu = 'subscribe',
        indexUrl = "http://i.huya.com/",
        indexFile = "index.php";
</script>
<script type="text/javascript" src="js/main_menu.js"></script>
<script type="text/javascript" src="js/cookies.js"></script>
<div class="admin-menu">
    <div class="content">
        <div class="nav-scroll-wrap">
            <div class="scroll-content">
                <div class="nav-section" style="padding-bottom:0">
                    <h3 class="header">&nbsp;个人中心</h3>
                    <ul class="icon-filter">
                        <li>
                            <a menu="home" href="http://www.live.com/per">
                                <span class="icon icon-home"></span>
                                <span class="title">
                                    我的信息
                                </span>
                            </a>
                        </li>
                        <li>
                            <a menu="subscribe" href="http://www.live.com/sub">
                                <span class="icon icon-subscribe"></span>
                                <span class="title">
                                    订阅与历史
                                </span>
                            </a>
                        </li>
                        <li id="msg-li">
                            <a menu="msg" href="http://www.live.com/msg">
                                <span class="icon icon-msg"></span>
                                <span class="title">
                                    我的消息
                                </span>
                            </a>
                        </li>
                        <li>
                            <a menu="noble" href="http://www.live.com/sub">
                                <span class="icon icon-noble"></span>
                                <span class="title">
                                    我的贵族1
                                </span>
                            </a>
                        </li>
                        <!-- <li>
                                <a menu="myRoom" href="http://i.huya.com/index.php?m=MyRoomAuditor">
                                    <span class="icon icon-room"></span>
                                    <span class="title">
                                        房间管理
                                    </span>
                                </a>
                            </li> -->
                        <li>
                            <a menu="myRoom" href="http://i.huya.com/index.php?m=MyRoomAuditor">
                                <span class="icon icon-room"></span>
                                <span class="title">
                                    我的头衔1
                                </span>
                            </a>
                        </li>
                        <li>
                            <a menu="money" href="http://www.live.com/money">
                                <span class="icon icon-money"></span>
                                <span class="title">
                                    我的财产
                                </span>
                            </a>
                        </li>
                        <!-- <li>
                            <a menu="guess" href="http://i.huya.com/index.php?m=Guess">
                                <span class="icon icon-guess"></span>
                                <span class="title">
                                    我的竞猜
                                </span>
                            </a>
                        </li> -->
                        <!-- <li>
                            <a menu="texas" href="http://i.huya.com/index.php?m=Texas">
                                <span class="icon icon-teaxs"></span>
                                <span class="title">
                                    开心德州
                                </span>
                            </a>
                        </li> -->
                        <!--
                        <li>
                            <a menu="guard" href="http://i.huya.com/index.php?m=Guard&do=guardInfo">
                                <span class="icon icon-protect"></span>
                                <span class="title">
                                    主播守护
                                </span>
                            </a>
                        </li>
                      
                        <li>
                            <a menu="badge"  href="http://i.huya.com/index.php?m=Badge">
                                <span class="icon icon-badge"></span>
                                 <span class="title">
                                     我的徽章
                                 </span>
                            </a>
                        </li>
                        -->
                        <!--
                        <li>
                            <a menu="basesetting" href="http://i.huya.com/index.php?m=PopOptions&do=userOption">
                                <span class="icon icon-base"></span>
                                <span class="title">
                                    基础设置
                                </span>
                            </a>
                        </li>
                        -->
                        <!-- <li id="mygift-li">
                            <a menu="mygift" href="http://i.huya.com/index.php?m=MyGift&do=listMyGift">
                                <span class="icon icon-welfare"></span>
                                <span class="title">
                                    我的福利
                                </span>
                            </a>
                        </li> -->
                        <!-- <li id="maw-li">
                            <a menu="maw" href="http://i.huya.com/index.php?m=Maw">
                                <span class="icon icon-maw"></span>
                                <span class="title">
                                    中奖查询
                                </span>
                            </a>
                        </li> -->
                        <!-- <li id="interaction_game-li">
                            <a menu="interaction_game" href="http://i.huya.com/index.php?m=MonkeyTrick">
                                <span class="icon icon-interaction"></span>
                                <span class="title">
                                    互动游戏
                                </span>
                            </a>
                        </li> -->
                        <!-- <li id="mygift-li">
                            <a menu="userlevel" href="http://i.huya.com/index.php?m=UserLevel">
                                <span class="icon icon-power"></span>
                                <span class="title">
                                    等级特权
                                </span>
                            </a>
                        </li> -->
                        <li id="CDKey_change-li">
                            <a menu="cdkey" href="http://i.huya.com/index.php?m=CdKey">
                                <span class="icon icon-CDKey_change"></span>
                                <span class="title">
                                    CDKey兑换1
                                </span>
                            </a>
                        </li>
                        <li>
                            <a menu="auth" href="http://i.huya.com/index.php?m=ProfileAuth">
                                <span class="icon icon-auth"></span>
                                <span class="title">
                                    虎牙认证1
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                                               
                                
                    <div class="to-be-anchor">
                        <p>想成为万人敬仰的主播？</p>
                        <a href="http://www.huya.com/e/zhubo" target="_blank" class="btn btn-to-anchor">成为主播</a>
                    </div>
           
            </div>
        </div>
    </div>
</div>
        <div class="main-col">
        <div class="scroll-content">
            <div class="mod mod-subscribe" id="subscribe_watch_wrap">
                <div class="mod-hd">
                    <h3>订阅与观看记录</h3>
                    <span style="left: 187px;">订阅了<i>2</i>个主播</span>
                </div>
                <div class="mod-bd">
                    <!-- 新修改 2014.10 {-->
                    <div class="mod-tab">
                        <div class="mod-tab-hd">
                            <ul class="mod-tab-trigger J_nav" id="subscribeWatchTab"> 
                                <li class="selected" ><a  href="javascript:void(0)">订阅</a></li>
                                <li class=""><a href="javascript:void(0)">观看记录</a></li>
                             </ul>
                        </div>
                        <!--订阅-->
                         <div class="mod-tab-bd J_content" style="display:block" >
                            <div class="sub_tab" id="subscribeTab">
                                <!-- <a class="cur" class="" href="javascript:void(0)">游戏</a> -->
                            </div>
                            <div id="subscribeCont">
                                <div class="mod-tab-content">
                                   <ul class="sub_wrap" id="subWrap">
                                                                               <li class="item_l" data-link="http://www.huya.com/saonan">
                                                                                        <span class="live_icon">直播中</span>
                                                                                        <div class="img_wrap">
                                                <img src="images/36b005e3ab0cac6636b54a550bb601_180_135.jpg" onerror="this.onerror='';this.src='images/default_profile.jpg'"/>
                                            </div>
                                            <div class="text_wrap">
                                                <p class="p_1">骚男</p>
                                                <p class="p_2">晚5-10点直播要来啊^_^</p>
                                                                                                <p class="p_3">直播：<span class="game">英雄联盟</span><span class="p_icon"></span><span>36.3万</span><span class="sub_num">订阅：1214.8万</span><a href="javascript:void(0);" class="cancel_sub" data-aid="11470554" title="取消订阅">取消订阅</a></p>
                                                                                            </div>
                                        </li>
                                                                                <li class="" data-link="http://www.huya.com/lpl">
                                                                                        <span class="live_icon">直播中</span>
                                                                                        <div class="img_wrap">
                                                <img src="images/3626ef611e990cbbcefab8e1bbc561_180_135.jpg" onerror="this.onerror='';this.src='images/default_profile.jpg'"/>
                                            </div>
                                            <div class="text_wrap">
                                                <p class="p_1">LPL英雄联盟职业联赛</p>
                                                <p class="p_2">LPL夏季赛DANvsSNG</p>
                                                                                                <p class="p_3">直播：<span class="game">英雄联盟</span><span class="p_icon"></span><span>73.7万</span><span class="sub_num">订阅：140.0万</span><a href="javascript:void(0);" class="cancel_sub" data-aid="22788248" title="取消订阅">取消订阅</a></p>
                                                                                            </div>
                                        </li>
                                                                            </ul>
                                    
                                                                                    <script type="text/javascript">

    $(document).ready(function(){

        var indexUrl = '';

        var tmp=window.location.href;        



        page_util = {

            gotopage: function (currentPage) {

                var form = document.getElementById('pageForm');

                form.action=indexUrl;

                document.getElementById('pageForm_page').value=currentPage;

                form.submit();

            }

        }

    });

</script> 



                                                                        </div>
                            </div>
                        </div>
                        <!--end订阅-->
                        <!--观看记录-->
                         <div class="mod-tab-bd J_content" id="watch_history" style="display:none">
                            <span class="trash_bar"><em class="ico_trash"></em><a href="#" class="trash">清除观看记录</a></span>
                            
                            <div class="loading" id="watch_history_loading"></div>
                            
                        </div>
                        <!--end 观看记录-->
                     </div>
                
                </div>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript" src="js/mtv.js"></script>
    <script>
        //订阅主播
        var userId = "1756633135";
        document.body.scrollTop=0;
        $(function(){
            $('#subWrap').on('click','li',function(e){
                var link = $(this).data('link');
                window.open(link);
            });
            $('.cancel_sub').on('click',function(e){
                var that = $(this),
                    aid = that.data('aid');
                dy.activitySubscribe(aid,'Cancel');
                e.stopPropagation && e.stopPropagation();
                e.cancelBubble && e.cancelBubble();
            })
        });
    </script>
    <script type="text/javascript" src="js/footer.js"></script>

<script src="js/js&f=main.js"></script>

<script type="text/javascript" src="js/ya-huya.min.js" data-fixed="true" pro="huya_web" noreport="" id="yaScript"></script>

<script type="text/javascript" src="js/report_info.js"></script>

<!--/footer-->

<!-- S 后台推送消息 -->

    <!--[if lte IE 7]>

    <script  type='text/javascript' src='http://i.huya.com/base/js/push/json3.min.js'></script>

    <![endif]-->

    <!--[if lte IE 9]>

    <script type='text/javascript' src='http://i.huya.com/base/js/push/jquery.xdomainrequest.min.js'></script>

    <![endif]-->

    <script data-fixed="true">

        var PUSH_PROXY_URL="http://channelproxy.huya.com/";

        var PUSH_ENABLE=true;//推送开关

    </script>

    <script type='text/javascript' src='js/push-min.js?t=20160907'></script>

    <script type='text/javascript' src='js/push.func-min.js?t=20161207'></script><!-- E 后台推送消息 -->

</body>

</html>