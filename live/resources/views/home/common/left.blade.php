<html>
 <head></head>
 <body>
  @yield('content1')
<div class="mod-sidebar">

    <div class="sidebar-hide">

        <ul class="sidebar-icon-list">

            <li class="sidebar-icon-item">

                <a class="sidebar-icon-link clickstat js-sub" href="http://i.huya.com/index.php?m=Subscribe" title="订阅" target="_blank" eid="click/navi/zuoce/sub" eid_desc="点击/导航/左侧导航/我的订阅">

                    <i class="sidebar-icon-sub"></i>

                    <span class="sidebar-title">订阅</span>

                </a>

            </li>

            <li class="sidebar-icon-item">

                <a class="sidebar-icon-link clickstat" href="http://www.lives.com/live" title="直播" eid="click/navi/zuoce/live" eid_desc="点击/导航/左侧导航/全部直播">

                    <i class="sidebar-icon-live"></i>

                    <span class="sidebar-title">直播</span>

                </a>

            </li>

            <li class="sidebar-icon-item">

                <a class="sidebar-icon-link clickstat" href="http://www.lives.com/cate" title="分类" eid="click/navi/zuoce/gametype" eid_desc="点击/导航/左侧导航/全部游戏">

                    <i class="sidebar-icon-type"></i>

                    <span class="sidebar-title">分类</span>

                </a>

            </li>

                        <li class="sidebar-icon-item ">

                <a class="sidebar-icon-link clickstat" href="http://www.lives.com/cate/1" title="网游" eid="click/navi/zuoce/classify1" eid_desc="点击/导航/左侧导航/classify1">

                    <i style="background-image: url('http://huyaimg.dwstatic.com/cdnimage/sidebarNavGroup/phpz3aAZJ1488336152.png');"></i>

                    <span class="sidebar-title">网游</span>

                </a>

            </li>

                        <li class="sidebar-icon-item ">

                <a class="sidebar-icon-link clickstat" href="http://www.lives.com/cate/2" title="单机" eid="click/navi/zuoce/classify2" eid_desc="点击/导航/左侧导航/classify2">

                    <i style="background-image: url('http://huyaimg.dwstatic.com/cdnimage/sidebarNavGroup/phpuKzEv31488336851.png');"></i>

                    <span class="sidebar-title">单机</span>

                </a>

            </li>

                        <li class="sidebar-icon-item ">

                <a class="sidebar-icon-link clickstat" href="http://www.lives.com/cate/3" title="娱乐" eid="click/navi/zuoce/classify3" eid_desc="点击/导航/左侧导航/classify3">

                    <i style="background-image: url('http://huyaimg.dwstatic.com/cdnimage/sidebarNavGroup/phpNhPhI81488336174.png');"></i>

                    <span class="sidebar-title">娱乐</span>

                </a>

            </li>

                        <li class="sidebar-icon-item ">

                <a class="sidebar-icon-link clickstat" href="http://www.lives.com/cate/4" title="手游" eid="click/navi/zuoce/classify4" eid_desc="点击/导航/左侧导航/classify4">

                    <i style="background-image: url('http://huyaimg.dwstatic.com/cdnimage/sidebarNavGroup/phpJAXeoz1488336183.png');"></i>

                    <span class="sidebar-title">手游</span>

                </a>

            </li>

                    </ul>

        <span id="sidebar-show-btn" class="arrow-btn clickstat" eid="click/navi/zuoce/open"  eid_desc="点击/导航/左侧导航/展开"></span>

        <a target="_blank" class="sidebar-icon-author" href="http://www.huya.com/e/zhubo">

            <i></i>

            <span>开直播</span>

        </a>

        <a href="http://jb.ccm.gov.cn/" target="_blank" style=" position: absolute;bottom: 70px;width: 100%;text-align: center;" class="gov-jb sq-gov-jb">举报</a>

    </div>

    <div class="sidebar-show">

        <div id="sidebar-scroll">

            <div class="sidebar-show-nav">

                <a href="http://i.huya.com/index.php?m=Subscribe" class="clickstat sidebar-show-line js-sub" target="_blank" eid="click/navi/zuoce/sub" eid_desc="点击/导航/左侧导航/我的订阅"><i class="sidebar-icon-sub"></i>我的订阅<span class="subscribe-text"> (请登录)</span></a>

                <a href="http://www.lives.com/live" class="clickstat sidebar-show-line" eid="click/navi/zuoce/live" eid_desc="点击/导航/左侧导航/全部直播"><i class="sidebar-icon-live"></i> 全部直播</a>

                <a href="http://www.lives.com/cate" class="clickstat sidebar-show-line" eid="click/navi/zuoce/gametype" eid_desc="点击/导航/左侧导航/全部游戏"><i class="sidebar-icon-type"></i>全部分类</a>

            </div>


            <div class="sidebar-recom">
                <?php $catList = Illuminate\Support\Facades\DB::table('column')->select('class_id','class_t_id','img','class_name')->where('class_t_id','0')->get();?>
                @foreach($catList as $k)
                    <div class="m sidebar-show-line ">

                        <a class="m-title clickstat" href="http://www.lives.com/cate/{{$k->class_id}}" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1">

                            <i class="m-title-type" style="background-image: url('http://huyaimg.dwstatic.com/cdnimage/sidebarNavGroup/phpz3aAZJ1488336152.png');"></i>

                            <span class="m-title-span">{{$k->class_name}}</span>

                        </a>

                        <div class="m-bd">
                            <?php $catLists = Illuminate\Support\Facades\DB::table('column')->where('class_t_id',$k->class_id)->limit('11')->get();?>
                            <div class="recomend-list clearfix">
                                @foreach($catLists as $v)
                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1" href="http://www.huya.com/g/lol" title="{{$v->class_name}}">{{$v->class_name}}</a>            
                                @endforeach
                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1" href="http://www.lives.com/cate/{{$k->class_id}}" title="全部">全部</a>            

                            </div>

                        </div>

                    </div>
                @endforeach
            </div>

            <div class="sidebar-banner" style="display:none">

                <a target="_blank" class="sidebar-banner-link clickstat" id="sidebarBanner" eid="click/push/leftnaviad" eid_desc="点击/推荐/左侧导航推荐图">

                </a>

            </div>

        </div>

        <div class="sidebar-tool">

            <a target="_blank" class="download clickstat" eid="click/navi/zuoce/xiazai" eid_desc="点击/导航/左侧导航/客户端下载" href="http://www.huya.com/download/" title="下载客户端"></a>

            <a target="_blank" class="toAnchor clickstat" eid="click/navi/zuoce/zhubo" eid_desc="点击/导航/左侧导航/我要做主播" href="http://www.huya.com//e/zhubo" title="我要直播"></a>

        </div>

        <a target="_blank" class="gov-jb clickstat" eid="click/navi/zuoce/jubao" eid_desc="点击/导航/左侧导航/举报" href="http://jb.ccm.gov.cn/" style="position: absolute;left: 14px;bottom: 80px; left: 80px; bottom: 55px; color: #666;">12318举报</a>

        <span id="sidebar-hide-btn" class="arrow-btn clickstat" eid="click/navi/zuoce/close"  eid_desc="点击/导航/左侧导航/收起"></span>

    </div>
</div> 
 </body>
</html>