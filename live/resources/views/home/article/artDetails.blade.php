<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="description" content="">
    <meta name="keywords" content="">
	    <script type="text/javascript">
        	!function(t){t.loadScript(["http://szhuodong.duowan.com/feq/m_huya/yy-f2e-header-m_huya.min"])}(function(){function t(t){var e=n(t);document.write(e)}function n(t){for(var n,r="",c=0;n=t[c];c++)r+=e(n);return r}function e(t){var n=[unescape("%3Cscript%20type%3D%22text/javascript%22%20src%3D%22"),"",unescape("%22%3E%3C/script%3E")],e=new Date;return e.setSeconds(0),e.setMilliseconds(0),e=e.getTime(),t+="?t_="+e,n[1]=t,n.join("")}return{loadScript:function(n){n&&n.length&&n instanceof Array&&t(n)}}}())
        </script>
    <title>官方签约公会对公结算签订流程</title>
    <base href="http://www.lives.com/home/">
     <link href="css/global.css?20170227v1" rel="stylesheet"> 
        
    <script>
    var _hotwords = [];    </script>
    <style>.hotwords{border-bottom:#000000 1px dashed;}</style>
</head>
<body >
 
    <!-- 页头 -->
    <script src="js/header.js" charset="utf-8"></script>
    <header class="huya-header">
           <a class="logo clickstat" href="http://m.huya.com/" eid="click/nav1/icon" eid_desc="点击/列表导航/icon"></a>
           <a class="nav_text  on  clickstat" href="http://m.huya.com/" eid="click/nav1/shouye" eid_desc="点击/列表导航/首页">首页</a>
           <a class="nav_text  clickstat" eid="click/nav1/youxi" eid_desc="点击/列表导航/游戏" href="http://m.huya.com/g/100023">游戏</a>
           <a class="nav_text  clickstat" eid="click/nav1/yule" eid_desc="点击/列表导航/娱乐" href="http://m.huya.com/g/100022">娱乐 </a>
           <a class="header-serarch clickstat" href="http://m.huya.com/index.php?m=Search" eid="click/nav1/search" eid_desc="点击/列表导航/搜索"></a>
    </header>
    <!-- /页头 -->
    <div class="small_header clearfix">
        <a href="http://blog.huya.com/news"  >新闻</a>
        <a href="http://blog.huya.com/product"  >产品</a>
        <a href="http://blog.huya.com/policy"  class="active"  >政策</a>
    </div>
    <!-- /页头 -->
    <div class="wrap">
        <div class="header">
            <h2>官方资讯</h2>
            <ul class="header-nav">
                    <i > 
                        <a href="http://blog.huya.com/">首页</a>
                    </i>
                    <!-- @foreach($re as $k) -->
                    <i > 
                        <a href="http://blog.huya.com/news"></a>
                    </i> 
                    <!-- @endforeach -->
            </ul>
        </div>
        <div class="main clearfix">
            <div class="col-main">
                <div class="news-block">
                    <!-- 文章-->
                    @foreach($re as $k)
                    <div class="artcle">
                        <div class="artcle-hd">
                            <a href="http://blog.huya.com/policy/" class="back">&lt;&lt;返回政策列表</a>
                            <h1>{{$k->article_title}}</h1>
                            <span class="artcle-date"><i></i>{{date('Y-m-d',$k->article_time)}}</span>
                        </div>
                        <div class="artcle-bd">
                            <p>{{$k->article_content}}</p>
                                                    </div>
                    </div>
                    @endforeach
                    <!--/ 文章 -->
                </div>
            </div>
            <div class="col-side">
                <!-- 最近的新闻 -->
                <div class="box">
                    <div class="box-hd">
                        <i class="icon"></i><h3 class="title">最近的政策</h3>
                    </div>
                    <div class="box-bd">
                        <ul class="mod-art">
                                                                                                                                    
                            <li><span class="date"> 2017-07-19</span><a href="http://blog.huya.com/policy/396">官方签约公会对公结算签订流程</a></li>
                                                                                                                                            
                            <li><span class="date"> 2017-07-19</span><a href="http://blog.huya.com/policy/395">王者荣耀优质内容推荐位奖励方案（2017年7月19日更新）</a></li>
                                                                                                                                            
                            <li><span class="date"> 2017-07-13</span><a href="http://blog.huya.com/policy/394">《欢乐球吃球》专区大图推荐申请政策</a></li>
                                                                                                                                            
                            <li><span class="date"> 2017-07-12</span><a href="http://blog.huya.com/policy/393">逆战聚合推荐政策</a></li>
                                                                                                                                            
                            <li><span class="date"> 2017-07-12</span><a href="http://blog.huya.com/policy/392">CS:GO聚合推荐政策</a></li>
                                                                                                                        </ul>
                    </div>
                </div>
                <!--/ 最近的新闻 -->
                <!-- 联系我们 -->
                <div class="box contact-box">
                    <div class="box-hd">
                        <i class="icon"></i><h3 class="title">联系我们</h3>
                    </div>
                    <div class="box-bd">
                        <p class="p-txt">虎牙直播是国内领先的互动直播平台，每月超过千万的观众通过虎牙直播观看游戏直播。我们希望通过游戏链接自各地的游戏玩家，他们可以直播游戏、观看游戏、聊天。</p>
                        <ul class="sns-list clearfix">
                            <li><a href="http://bbs.huya.com"  target="_blank" ><img src="images/sns01.png" alt=""><span>社区</span></a></li>
                            <li><a href="http://help.huya.com/"  target="_blank" ><img src="images/sns02.png" alt=""><span>帮助</span></a></li>
                            <li><a href="http://weibo.com/90dwyy"  target="_blank" ><img src="images/sns03.png" alt=""><span>新浪微博</span></a></li>
                            <li><a href="http://t.qq.com/dwyy90"  target="_blank" ><img src="images/sns04.png" alt=""><span>腾讯微博</span></a></li>
                            <li><a href="http://kf.duowan.com/s/home/online-service.html?product=HUYA&source=YY"  target="_blank" ><img src="images/sns05.png" alt=""><span>客服</span></a></li>
                        </ul>
                        <div class="qrcode">
                            <img src="images/qr-code.jpg" alt="" class="pic">
                            <div class="panel">
                                <em class="title">微信公众号：<span>HUYAZHIBO</span></em>
                                <span class="txt">手机扫描二维码或输入虎牙直播微信账号来添加关注。</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ 联系我们 -->
            </div>
        </div>
    </div>
         <script src="js/news.js?20170303v1"></script>
    <!-- 页脚 -->
    <script type="text/javascript" src="js/ya-huya.min.js" data-fixed="true" pro="huya_web" noreport="" id="yaScript"></script>
    <script type="text/javascript">
        function report(obj){
            var obj = obj || {};
            var source = {
                pro : "huya_web",//产品给的
                pas : YA.cookie.get('username') || '',
                yyuid : YA.cookie.get('yyuid') || '',
                pageType : "root",
                rso : "",
                rso_desc : "",
                eid : "",
                eid_desc : ""
            }
            for(var property in obj){
               source[property] =  obj[property];
            }
            window.ya = new YA(source.pro,source.pas,{
               pageType: source.pageType,
               yyuid : source.yyuid
            });
            ya.reportProductStartUp({
                pro: source.pro,
                rso: source.rso,
                rso_desc: source.rso_desc
            });
            ya.startProductHeartbeat({
                pro: source.pro,
                rso: source.rso,
                rso_desc: source.rso_desc
            });
            ya.reportProductEvent({
                eid: source.eid,
                eid_desc: source.eid_desc
            })
        }
        var str = location.href;
        var id = str.substring(str.lastIndexOf('/') + 1 );
        report({
            rso: '', //外部来源
            rso_desc:'',//外部来源
            eid: "pageview/blog/notice/"+id,  //产品给的
            eid_desc:"pageview/博客/政策/"+id,  //产品给的
            pro:"huya_web"
        });
    </script>
    <script src="js/footer.js" charset="utf-8"></script>
    <!--/ 页脚 -->
    <!--[if gt IE 6]><!-->
<script type="text/javascript">
    window.onerror = function(a,b,c){ return true};!function(t){t.loadScript(["http://szhuodong.duowan.com/feq/m_huya/yy-f2e-m_huya.min"])}(function(){function t(e,a){var n=a[e];if(n){e++;var o=document.createElement("script");o.type="text/javascript",o.setAttribute("async","async"),o.onload=o.onreadystatechange=function(){return o.readyState&&"complete"!==o.readyState&&"loaded"!==o.readyState?!1:(o.onload=o.onreadystatechange=null,void t(e,a))};var c=new Date;c.setSeconds(0),c.setMilliseconds(0),c=c.getTime(),o.async=!0,o.src=n+"?_="+c,document.getElementsByTagName("head")[0].appendChild(o)}}return{loadScript:function(e){e&&e.length&&e instanceof Array&&t(0,e)}}}());
</script>
<!--<![endif]-->
</body>
</html>
