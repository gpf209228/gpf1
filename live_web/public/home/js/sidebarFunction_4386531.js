function CreateBanner(){this.initialize.apply(this,arguments)}function ModSidebar(){this.initialize.apply(this,arguments)}CreateBanner.prototype={initialize:function(i){var e=null,t=this;if(this.URL=window.APP_URL?window.APP_URL+"cache10min.php":"http://www.huya.com/cache10min.php",this.sidedar=i,e=window.localStorage.getItem("sidebar/ads"))try{e=JSON.parse(e),t.createImage(e)}catch(a){}$(window).on("load",function(){setTimeout(function(){t.ajaxGetAds()},500)})},createImage:function(i){$(".sidebar-banner").show(),$("#sidebarBanner").attr({href:i.link,title:i.title,target:"_blank"}).html('<img src="'+i.picUrl+'" alt="'+i.title+'" width="200" height="80">'),TT_RSC_EXPS({pos:"sidebar/banner",rsc:i.id}),this.sidedar.sidebarScrollFn()},ajaxGetAds:function(){$.ajax({url:this.URL,type:"GET",data:{m:"Ad","do":"ajaxGetAds",type:4,area:14,num:1},dataType:"json"}).done(function(i){if("1000"==i.status){var e=i.data[0];e?window.localStorage.setItem("sidebar/ads",JSON.stringify(e)):window.localStorage.removeItem("sidebar/ads")}else window.localStorage.removeItem("sidebar/ads")})}},ModSidebar.prototype={initialize:function(){var i=this;this.$modSidebar=$(".mod-sidebar"),this.$sidebarScroll=$("#sidebar-scroll"),this.$sidebarHide=$(".sidebar-hide"),this.$sidebarShow=$(".sidebar-show"),this.URL=window.APP_URL?window.APP_URL+"cache10min.php":"http://www.huya.com/cache10min.php",this.highlight(),this.sidebarScrollFn(),this.resizeFn(),this.bindEvent(),DUYA_SUB.subscribe("sidebarShow",function(){i.sidebarScrollFn()})},highlight:function(){var i=$(".sidebar-recom").find(".on").parents(".m");i.length>0&&i.addClass("m-on-bg");var e=$(".sidebar-icon-item"),t="http://"+window.location.host+window.location.pathname;$(".sidebar-show-nav").find("a").each(function(i){var a=$(this);a.attr("href")==t&&(a.addClass("on"),e.eq(i).addClass("on"))})},sidebarScrollFn:function(){var i=this,e=this.$sidebarScroll.data("jsp");if(this.$sidebarScroll.height(this.$sidebarShow.height()-130),e)return void e.reinitialise();if($.isFunction($.fn.jScrollPane))this.$sidebarScroll.jScrollPane({scrollbarWidth:6,mouseWheelSpeed:20,verticalGutter:0});else{var t="//a.dwstatic.com/huya/main/lib/scrollpane_51f7a10.js";$.ajax(t,{dataType:"script",cache:!0,success:function(){$.isFunction($.fn.jScrollPane)&&i.$sidebarScroll.jScrollPane({scrollbarWidth:6,mouseWheelSpeed:20,verticalGutter:0})}})}},resizeFn:function(){var i=$(".sidebar-icon-author"),e=$(".sq-gov-jb"),t=this,a=$(window);a.on("resize.sidebar",function(){t.sidebarScrollFn(),a.height()<620?(i.hide(),e.hide()):(i.show(),e.show())})},bindEvent:function(){NAV_UTIL.isLogin()?$(".subscribe-text").remove():$(".js-sub").on("click",function(){return NAV_UTIL.login(),!1})}},function(){var i=new ModSidebar;new CreateBanner(i),DUYA_SUB.subscribe("sidebarShow",function(){$("#J_mainWrap").css("padding-left",240)}),DUYA_SUB.subscribe("sidebarHide",function(){$("#J_mainWrap").css("padding-left",50)});var e=window.huya_sidebar={init:function(i){this.status=i,1===i||e.hide(),this.inited=!0},show:function(){1===this.status&&this.inited||(this.status=1,i.$sidebarHide.hide(),i.$sidebarShow.show(),DUYA_SUB.publish("sidebarShow"),DUYA_SUB.publish("resizeWide"))},hide:function(){0===this.status&&this.inited||(this.status=0,i.$sidebarHide.show(),i.$sidebarShow.hide(),DUYA_SUB.publish("sidebarHide"),DUYA_SUB.publish("resizeWide"))}};e.init("0"==window.localStorage.getItem("sidebar/status")?0:1),$("#sidebar-show-btn").on("click",function(){t=2333,e.show(),window.localStorage.setItem("sidebar/status",1)}),$("#sidebar-hide-btn").on("click",function(){t=2333,e.hide(),window.localStorage.setItem("sidebar/status",0)});var t=-1;!function(){function i(){-1===t&&(a.width()<=1366?e.hide():"0"!=window.localStorage.getItem("sidebar/status")&&e.show())}if(0!==$(".on-match").length){var a=$(window),s=null;i(),a.resize(function(){clearTimeout(s),s=setTimeout(function(){i()},60)})}}()}();