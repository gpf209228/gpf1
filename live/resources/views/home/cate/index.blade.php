@extends('home/common/common')  
@section('content')  

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
@stop