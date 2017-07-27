<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="ie6" lang="zh-cmn-Hans"> <![endif]-->

<!--[if IE 7]>         <html class="ie7" lang="zh-cmn-Hans"> <![endif]-->

<!--[if IE 8]>         <html class="ie8" lang="zh-cmn-Hans"> <![endif]-->

<!--[if IE 9]>         <html class="ie9" lang="zh-cmn-Hans"> <![endif]-->

<!--[if gt IE 9]><!--> <html lang="zh-cmn-Hans"><!--<![endif]-->

<head>

    <meta charset="utf-8">

<title>游戏直播_网络游戏直播_飞豪直播</title>
<base href="http://www.lives.com/home/">
<meta name="renderer" content="webkit">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="Keywords" content="热门游戏直播,高清游戏直播,游戏直播,网络游戏直播,手游直播,单机游戏直播,lol直播,dota2直播,飞豪直播"/>

<meta name="Description" content="飞豪为你提供高清游戏直播，包括LOL直播、dnf游戏直播、dota直播，24小时不间断直播更新，非一般游戏视觉与听觉体验尽在飞豪直播。"/>



<link rel='canonical' href='http://www.huya.com/g' />

    <link type="text/css" rel="stylesheet" href="css/pages_modules_edf5626.css">
<link type="text/css" rel="stylesheet" href="css/auto_combine_513d7_9d20a49.css">
<!--HEAD_END-->

    <script data-fixed="true">!function(n){n.loadScript(["http://szhuodong.duowan.com/feq/huya/yy-f2e-header-huya.min"])}(function(){function n(n){var e=t(n);document.write(e)}function t(n){for(var t,r="",c=0;t=n[c];c++)r+=e(t);return r}function e(n){var t=[unescape("%3Cscript%20type%3D%22text/javascript%22%20src%3D%22"),"",unescape("%22%3E%3C/script%3E")],e=new Date;return e.setSeconds(0),e.setMilliseconds(0),e=e.getTime(),n+="?t_="+e,t[1]=n,t.join("")}return{loadScript:function(t){t&&t.length&&t instanceof Array&&n(t)}}}());</script>

    <script data-fixed="true">

        var APP_URL = "http://www.huya.com/";

    </script>

</head>
@extends('home/common/header')  
  
@section('content')


@extends('home/common/left')  
  
@section('content1')

@stop 

    <div class="js-responded-list narrow">

        <div class="mod-list">

            <div class="box">

                <div class="box-hd clearfix">

                    <h2 class="title">

                        全部分类                    </h2>

                    <div class="filter">

                        <dl>

                            <dd bussType="0" class=" active all" ><a class="clickstat" href="http://www.lives.com/cate" eid="click/list/allgame/all"   eid_desc="点击/列表页/全部游戏/全部">全部</a></dd>
                            @foreach($res as $k)
                            <dd bussType="1" class="" ><a class="clickstat" href="http://www.lives.com/cate/{{$k->class_id}}" eid="click/list/allgame/online"   eid_desc="点击/列表页/全部游戏/网游竞技">{{$k->class_name}}</a></dd>
                            @endforeach
                        </dl>

                    </div>

                </div>

                <div class="box-bd">

                    <ul class="game-list clearfix" id="js-game-list">
                        @foreach($re as $kk)

                        <li class="game-list-item">

                        	<a target="_blank" href="http://www.lives.com/cate/{{$kk->class_id}}" class="pic new-clickstat" report='{"eid":"click/postion","position":"gameList/gameCard/1","game_id":"1"}'>

                            	<img class="pic-img" data-original="{{$kk->img}}" src="images/default_game_pc.jpg" alt="英雄联盟" title="英雄联盟" onerror="this.onerror='';this.src='images/default_game_pc.jpg'">

                            	<p class="title">{{$kk->class_name}}</p>

                            </a>

                        </li> 
                        @endforeach
                                                                                                            
                    </ul>

                </div>

            </div>

        </div>

    </div>
    <script src="js/jq_ud_mod_4de7709.js" data-fixed="true"></script>

    <script src="js/huyahiidoweb_err_monitor-min.js" id="huyahiido_err_monitor" act="webhuyaerror" pageview="gamelist" data-fixed="true"></script>

    <script src="js/headerFunction_b5d75de.js" data-fixed="true"></script>

    <script type="text/javascript" charset="utf-8" src="js/auto_combine_705f4_560ab05.js"></script>
<script>

        require("app/game-list");

    </script>

    <!--BODY_END-->
<!-- S 页面公用功能 -->

    <script type="text/javascript" src="js/sidebarFunction_4386531.js" data-fixed="true"></script>

<script type="text/javascript" data-fixed="true">

    HUYA_UTIL.getScript('//a.dwstatic.com/huya/main/js/header_search_tip_420f603.js');

</script>

<!-- S 后台推送消息 -->

    <!--[if lte IE 7]>

    <script  type='text/javascript' src='http://www.huya.com/base/js/push/json3.min.js'></script>

    <![endif]-->

    <!--[if lte IE 9]>

    <script type='text/javascript' src='http://www.huya.com/base/js/push/jquery.xdomainrequest.min.js'></script>

    <![endif]-->

    <script data-fixed="true">

        var PUSH_PROXY_URL="http://channelproxy.huya.com/";

        var PUSH_ENABLE=true;//推送开关

        var matchNoticeData=[];//赛事直播间预告数据

    </script>

    <script type='text/javascript' src='js/push-min.js?t=20160907'></script>

    <script type='text/javascript' src='js/push.func-min.js?t=20161207'></script><!-- E 后台推送消息 -->    <!-- E 页面公用功能 -->

    <script id="_hiido_internal_script_id_" src="js/hiido_internal.js?siteid=www@huya" data-fixed="true"></script>

    <script type="text/javascript" src="js/ya-huya.min.js" data-fixed="true" pro="huya_web" noreport="" id="yaScript"></script>

    <script type="text/javascript" data-fixed="true">

        (function(win){

            var $win = $(win);

            var reportTimer = null;



            function report(){

                var oHref = parseQueryString(location.href);

                zhReport({

                    rso: oHref['rso'] || oHref['from'] || "",

                    rso_desc: oHref['rso_desc'] || "",

                    eid: "pageview/list",

                    eid_desc:"pageview/游戏列表"

                });

            }



            $win.on('load.report',function(){

                reportTimer && clearTimeout(reportTimer);

                report();

            });



            reportTimer = setTimeout(function(){

                $win.off('.report');

                report();

            }, 3500);



        })(window); 

    </script>

    <!-- S 通用底部 -->

    <script data-fixed="true">

var _hmt = _hmt || [];

(function() {

  var hm = document.createElement("script");

  hm.src = "//hm.baidu.com/hm.js?51700b6c722f5bb4cf39906a596ea41f";

  var s = document.getElementsByTagName("script")[0]; 

  s.parentNode.insertBefore(hm, s);

})();

</script>

    <!-- E 通用底部 -->

    <script data-fixed="true">navigator.userAgent.toLocaleLowerCase().indexOf("chrome")<0&&(window.onerror=function(){try{console.log.apply(console,arguments)}catch(e){}return TT.isProd}),!function(e){e.loadScript(["http://szhuodong.duowan.com/feq/huya/yy-f2e-huya.min"])}(function(){function e(t,n){var a=n[t];if(a){t++;var o=document.createElement("script");o.type="text/javascript",o.setAttribute("async","async"),o.onload=o.onreadystatechange=function(){return o.readyState&&"complete"!==o.readyState&&"loaded"!==o.readyState?!1:(o.onload=o.onreadystatechange=null,void e(t,n))};var r=new Date;r.setSeconds(0),r.setMilliseconds(0),r=r.getTime(),o.async=!0,o.src=a+"?_="+r,document.getElementsByTagName("head")[0].appendChild(o)}}return{loadScript:function(t){t&&t.length&&t instanceof Array&&e(0,t)}}}());</script>

</body>

</html>
@stop