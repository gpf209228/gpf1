//这个ow管理页面的一些方法
$(document).ready(function() {
    var tmp = window.location.href;
    var indexUrl = tmp.substr(0, tmp.lastIndexOf("\/") + 1);
    var SignInvite;
    var owLowestPercent = 10;
    var csrfToken = $('#csrfToken').val();
    ow_util = {
        ajaxDelProfile: function(channelId, yy_id) {
            var ajaxURL = indexUrl + 'index.php?m=Ow&do=delCommonProfile';
            $.getJSON(
                    ajaxURL,
                    {
                        "channelId": channelId,
                        'yy_id': yy_id,
                        'csrfToken':csrfToken
                    },
            function(response) {
                if (response.status) {
                    var successMsg = '提交成功';
                    if (response.msg != '' && response.msg != null && response.msg != undefined) {
                        successMsg = response.msg;
                    }
                    ow_util.displayInfo(true, successMsg, channelId);
                } else {
                    var failMsg = '提交失败';
                    if (response.msg != '' && response.msg != null && response.msg != undefined) {
                        failMsg = response.msg;
                    }
                    ow_util.displayInfo(false, failMsg, channelId);
                }
                return;
            });
        },
        displayInfo: function(type, msg, channelId, reload) {
            var str = '';
            if (type) {
                str = '<i class="icon icon-success"></i><span>' + msg + '</span>';
            } else {
                str = '<i class="icon icon-error"></i><span>' + msg + '</span>';
            }
            var url = indexUrl + 'index.php?m=Ow';
            if (channelId != '') {
                url = indexUrl + 'index.php?m=Ow#comm' + channelId;
            }
            var alice = LEGO.popupBox("#popup-win17", {
                ok: function(dt) {//确认后回调函数
                    if (type) {
                        //window.location.replace(url);
                        //window.location.reload();
                    } else {
                        //window.location.replace(url);
                    }
                    alice.close();
                },
                existMask: true, // 遮罩层，扩展参数existMask,默认为true
                cancle: function(dt) {
                    if (reload) {
                       // window.location.replace(url);
                       window.location.reload();
                    } else {
                      //  window.location.replace(url);
                    }
                }
            }, {});
            alice.content(str);
            alice.open();
        },
        noReflushDisplayInfo: function(msg, id) {
            $(id).html(msg);
            $(id).show();
            setTimeout(function() {
                $(id).hide();
            }, 10000);
        },
        delProfileWindow: function(yy_id, usename, channelId) {
            var alice = LEGO.popupBox("#popup-win2", {
                ok: function(dt) {//确认后回调函数
                    ow_util.ajaxDelProfile(channelId, yy_id);
                    ow_util.cleanvalue();
                },
                existMask: true, // 遮罩层，扩展参数existMask,默认为true
                cancle: function(dt) {
                }
            }, {});
            alice.open();
            alice.title('删除主播');
            alice.content('是否确认删除<strong>' + usename + '</strong>的主播权限？');
        },
        ajaxAddProfile: function(channelId) {
            var ajaxURL = indexUrl + 'index.php?m=Ow&do=addCommonProfile';
            var yy_id = $('#yy_id_value').val();
            if (yy_id == '') {
                return ow_util.displayInfo(false, '失败：该用户不存在', channelId);
            }
            $.post(
                    ajaxURL,
                    {
                        "channelId": channelId,
                        'yy_id': yy_id,
                        "csrfToken":csrfToken
                    },
            function(response, textStatus) {
                if (response.status) {
                    var successMsg = '提交成功';
                    if (response.msg != '' && response.msg != null && response.msg != undefined) {
                        //用于控制关闭弹窗是否刷新页面
                        window.close_reload = true;
                        //
                        successMsg = response.msg;
                    }
                    ow_util.displayInfo(true, successMsg, channelId);
                } else {
                    var failMsg = '提交失败';
                    if (response.msg != '' && response.msg != null && response.msg != undefined) {
                        failMsg = response.msg;
                    }
                    ow_util.displayInfo(false, failMsg, channelId);
                }
            }, "json");
        },
        insertvalue: function(obj) {
            var yyidValue = $.trim(obj.val());
            $("#yy_id_value").val(yyidValue);
        },
        insertselect: function(obj) {
            var selecttimeValue = $.trim(obj.val());
            $("#selecttime_value").val(selecttimeValue);
            $("#percent_tips").empty();
            switch (selecttimeValue) {
                case '1':
                    $("#percent_tips").html("最少10%，最大30%");
                    break;
                case '2':
                    $("#percent_tips").html("最少10%，最大30%");
                    break;
                case '3':
                    $("#percent_tips").html("最少10%，最大30%");
                    break;
                case '4':
                    $("#percent_tips").html("最少10%，最大30%");
                    break;
                default :
                    $("#percent_tips").html("出错，请刷新页面");
                    break;
            }
        },
        cleanvalue: function() {
            $("#yy_id_value").val('');
        },
        addProfileWindow: function(channelId) {
            var alice = LEGO.popupBox("#popup-win14", {
                ok: function(dt) {
                    ow_util.ajaxAddProfile(channelId);
                },
                existMask: true, 
                cancle: function(dt) {
                   alice.close();
                }
            }, {});
            alice.open();
            alice.title("添加主播");

            //按回车键的时候阻止键盘提交事件，转为ajax提交。
            $(document).off("keypress").on("keypress",function(event){
                if(event.keyCode == 13){
                    ow_util.ajaxAddProfile(channelId);
                    return false;
                }
            });
        },
        setDefaultPercentWindow: function(channelId,isCompanyPercent) {
            var alice = LEGO.popupBox("#popup-win16", {
                ok: function(dt) {//确认后回调函数
                    if(typeof(isCompanyPercent)!='undefined'&&isCompanyPercent){//有合约不允许修改
                        alice.close();
                    }else{
                        ow_util.ajaxSetDefaultPercent(channelId);
                    }
                },
                existMask: true, // 遮罩层，扩展参数existMask,默认为true
                cancle: function(dt) {
//                    alice.close();
                }
            }, {});
            if(typeof(isCompanyPercent)!='undefined'&&isCompanyPercent){
//                console.log($("#percent_input_1").attr("disabled"));
                 $("#percent_input_1").attr("disabled",true);
                 $("#percent_input_2").attr("disabled",true);
                 $("#percent_input_3").attr("disabled",true);
                 $("#percent_input_4").attr("disabled",true);
                 $("#inline-tips_1").empty();
                 $("#inline-tips_2").empty();
                 $("#inline-tips_3").empty();
                 $("#inline-tips_4").empty();
                 $("#setting_tips").html("后台已经设定提成比例,有疑问请联系YY官方人员");
            }
            $("#percent_input_1").val($("#percent_value_1").val());
            $("#percent_input_2").val($("#percent_value_2").val());
            $("#percent_input_3").val($("#percent_value_3").val());
            $("#percent_input_4").val($("#percent_value_4").val());
            alice.open();
        },
        ajaxSetDefaultPercent: function(channelId,isCompanyPercent) {
            var ajaxURL = indexUrl + 'index.php?m=Ow&do=setChannelDefaultPercent';
            var percent1 = $('#percent_value_1').val();
            var percent2 = $('#percent_value_2').val();
            var percent3 = $('#percent_value_3').val();
            var percent4 = $('#percent_value_4').val();
            var re = /^[0-9]+$/;

            if(typeof(isCompanyPercent)=='undefined'&&!isCompanyPercent){
                if (!re.test(percent4) || parseInt(percent4) < 10 || parseInt(percent4) > 30) {
                    return ow_util.displayInfo(false, '3个月比例输入错误，请输入10-30整数！', channelId);
                }

                if (!re.test(percent3) || parseInt(percent3) < 10 || parseInt(percent3) > 30) {
                    return ow_util.displayInfo(false, '6个月比例输入错误，请输入10-30整数！', channelId);
                }

                if (!re.test(percent2) || parseInt(percent2) < 10 || parseInt(percent2) > 30) {
                    return ow_util.displayInfo(false, '9个月比例输入错误，请输入10-30整数！', channelId);
                }

                if (!re.test(percent1) || parseInt(percent1) < 10 || parseInt(percent1) > 30) {
                    return ow_util.displayInfo(false, '1年比例输入错误，请输入10-30整数！', channelId);
                }
            }
            

            $.post(
                    ajaxURL,
                    {
                        "channelId": channelId,
                        'percent1': percent1,
                        'percent2': percent2,
                        'percent3': percent3,
                        'percent4': percent4,
                        'csrfToken':csrfToken
                    },
            function(response, textStatus) {
                if (response.status) {
                    var successMsg = '提交成功';
                    if (response.msg != '' && response.msg != null && response.msg != undefined) {
                        successMsg = response.msg;
                    }
                    ow_util.displayInfo(true, successMsg, "");
                } else {
                    var failMsg = '提交失败';
                    if (response.msg != '' && response.msg != null && response.msg != undefined) {
                        failMsg = response.msg;
                    }
                    ow_util.displayInfo(false, failMsg, channelId);
                }
            }, "json");
        },
        insertPercent: function(obj) {
            var percentValue = $.trim(obj.val());
            $("#percent_value").val(percentValue);
        },
        insertDefaultPercent: function(obj, type) {
            var percentValue = $.trim(obj.val());
            $("#percent_value_" + type).val(percentValue);
        },
        updateProfilePercentWindow: function(channelId, uid) {

            var alice = LEGO.popupBox("#popup-win25", {
                ok: function(dt) {//确认后回调函数
                    ow_util.ajaxUpdateProfilePercent(channelId, uid);
                    alice.close();
                },
                existMask: true, // 遮罩层，扩展参数existMask,默认为true
                cancle: function(dt) {
                    alice.close();
                }
            }, {});
            alice.open();
            alice.title("收入提成修改");
        },
        ajaxUpdateProfilePercent: function(channelId, uid) {
            var ajaxURL = indexUrl + 'index.php?m=Ow&do=updateProfilePercent';
            var percent = $('#percent_value').val();
            var re = /^[0-9]+$/;

            if (!re.test(percent)) {
                return ow_util.displayInfo(false, '提成输入错误，请输入整数', channelId);
            }

            $.post(
                    ajaxURL,
                    {
                        "channelId": channelId,
                        "uid": uid,
                        'percent': percent
                    },
            function(response, textStatus) {
                if (response.status) {
                    var successMsg = '提交成功';
                    if (response.msg != '' && response.msg != null && response.msg != undefined) {
                        successMsg = response.msg;
                    }
                    ow_util.displayInfo(true, successMsg, "");
                } else {
                    var failMsg = '提交失败';
                    if (response.msg != '' && response.msg != null && response.msg != undefined) {
                        failMsg = response.msg;
                    }
                    ow_util.displayInfo(false, failMsg, channelId);
                }
            }, "json");
        },
        signInviteWindow: function(channelId,isCompanyPercent) {
            var alice = LEGO.popupBox("#popup-win13", {
                ok: function(dt) {//确认后回调函数
                    ow_util.ajaxSignInvite(channelId,isCompanyPercent);
                },
                existMask: true, // 遮罩层，扩展参数existMask,默认为true
                cancle: function(dt) {
//                    alice.close();
                }
            }, {});
            
            if(typeof(isCompanyPercent)!='undefined'&&isCompanyPercent){
                 $("#percent_input").val($("#percent_value_1").val());
                 $("#percent_value").val($("#percent_value_1").val());
                 $("#percent_input").attr("disabled",true);
                 $("#percent_tips").empty();
            }
            alice.open();
        },
        ajaxSignInvite: function(channelId,isCompanyPercent) {
            var ajaxURL = indexUrl + 'index.php?m=Ow&do=signInvite';

            var yy_id = $('#yy_id_value').val();
            if (yy_id == "") {
                return ow_util.displayInfo(false, '请输入受邀人YY号！', "");
            }

            if (isNaN(yy_id)) {
                return ow_util.displayInfo(false, '请输入正确的YY号！', "");
            }

            var selecttime = $('#selecttime_value').val();
            if (isNaN(selecttime)) {
                return ow_util.displayInfo(false, '请选择签约时限！', "");
            }
            if (selecttime == '') {
                selecttime = 1;
            }
            
            owLowestPercent = '10';
            
            /*switch (selecttime) {
                case '1':
                    owLowestPercent = '5';
                    break;
                case '2':
                    owLowestPercent = '5';
                    break;
                case '3':
                    owLowestPercent = '5';
                    break;
                case '4':
                    owLowestPercent = '5';
                    break;
                default :
                    owLowestPercent = '5';
                    break;
            }*/



            var percent = $('#percent_value').val();
            
            if(typeof(isCompanyPercent)=='undefined'&&!isCompanyPercent){
                var re = /^[0-9]+$/;
                if (!re.test(percent) || parseInt(percent) < parseInt(owLowestPercent) || parseInt(percent) > 30) {
                    return ow_util.displayInfo(false, '提成输入错误，请输入' + owLowestPercent + '-30整数！', "");
                }
            }
            

            var message = $('#message_value').val();
            if (message == "") {
                message = "亲，快来做我们的签约主播吧，成功签约不仅可以获得精美主播名片及个人展示，还可有活动收入哦";
            }

            $('#popup-box-invite #popup-box-invite-yy').html(yy_id);
            $('#popup-box-invite #popup-box-invite-year').html(selecttime);
            $('#popup-box-invite #popup-box-invite-owtc').html(percent+'%');

            var alice = LEGO.popupBox("#popup-box-invite", {
                ok: function(dt) {//确认后回调函数
                    $.post(
                            ajaxURL,
                            {
                                "channelId": channelId,
                                "yy_id": yy_id,
                                "percent": percent,
                                "message": message,
                                "selecttime": selecttime,
                                "isCompanyPercent":isCompanyPercent,
                                'csrfToken':csrfToken
                            },
                    function(response, textStatus) {
                        if (response.status) {
                            var successMsg = '提交成功';
                            if (response.msg != '' && response.msg != null && response.msg != undefined) {
                                // 如果是主播招募页面则相应减少可邀请名额
                                if($('#inviteLastNum')[0]){
                                    var num = parseInt($('#inviteLastNum').html());
                                    --num;
                                    $('#inviteLastNum').html(num);
                                }

                                successMsg = response.msg;
                            }
        //                        ow_util.displayInfo(true, successMsg,"");
                            ow_util.successResponseSignInvite(successMsg);
                        } else {
                            var failMsg = '提交失败';
                            if (response.msg != '' && response.msg != null && response.msg != undefined) {
                                failMsg = response.msg;
                            }
                            ow_util.displayInfo(false, failMsg, "");
                        }
                    }, "json");

                    alice.close();
                },
                existMask: true, // 遮罩层，扩展参数existMask,默认为true
                cancle: function(dt) {
//                    alice.close();
                }
            }, {});
            alice.open();
        },
        successResponseSignInvite: function(successMsg) {
            var str = '<div class="form-group">'
                    + '<p class="tips-verify" style="text-align:center;">' + successMsg + '</p>'
                    + '</div>'
                    + '<div class="form-group"  style="margin: 11px 0px;">'
                    + '<label class="tit-i" style="width: auto;font-size: 12px;">你可以复制以下内容给主播：</label>'
                    + '<textarea id="message_output" rows="3" cols="30" onkeyup="ow_util.insertMessage();" style="width: 373px;">我已经邀请你当我频道的签约主播，你可以到消息中心处理签约请求：' + indexUrl + '/index.php?m=Msg&do=listMsg</textarea>'
                    + '</div>'
                    + '<p class="tips-m" id="copysuccessMsg" style="display: none;"><i class="icon-mini icon-notices"></i>复制成功</p>';
            SignInvite = null;
            SignInvite = LEGO.popupBox("#popup-win20", {
                ok: function(dt) {//确认后回调函数

                },
                existMask: true, // 遮罩层，扩展参数existMask,默认为true
                cancle: function(dt) {
                    SignInvite.close();
                }
            }, {});
            SignInvite.content(str);


//           SignInvite =  new $.msgbox({
//                height: '240',
//                width: '406',
//                title: '签约邀请',
//                content: '<div class="invite-form"><div class="input-yy" style="text-align:left;">'+successMsg+'</div><div class="input-yy" style="text-align:left;">你可以复制以下内容给主播：</div><div class="p"><textarea id="message_output" rows="3" cols="30" onkeyup="ow_util.insertMessage()">我已经邀请你当我频道的签约主播，你可以到消息中心处理签约请求：'+indexUrl+'/index.php?m=Msg&do=listMsg</textarea></div></div><div class="p"><span class="tips" id="copysuccessMsg" style="display: none;"><i></i>复制成功</span></div><div class="btns" id="testCopyMsg"><button class="btn-confirm" type="button" value=" 复制并关闭 " id="copySignMsg" onmousemove="ow_util.copySignInvite()"><span>复制并关闭</span></button>&nbsp;</div>'
//            });
            ow_util.successResponseSignInviteShow();
            ow_util.copySignInvite();
        },
        successResponseSignInviteShow: function() {
            SignInvite.open();
        },
        successResponseSignInviteClose: function() {
            SignInvite.close();
            // window.location.reload();
        },
        copySignInvite: function() {
            $('#testCopyMsg').zclip({
                path: indexUrl + '/base/js/ZeroClipboard.swf',
                copy: function() {
                    $('p#copysuccessMsg').show();
                    return $('#message_output').text();
                },
                afterCopy: function() {
                    ow_util.countClose(3);
                }
            });

        },
        insertMessage: function(obj) {
            var messageValue = $.trim(obj.val());
            $("#message_value").val(messageValue);
        },
        setUnSignVerifyValue: function(obj) {
            var value = $.trim($(obj).val());
            if (value == 1) {
                $("#force").hide();
                $("#consult").show();
            } else if (value == 2) {
                $("#force").show();
                $("#consult").hide();
            }
            $("#unSignVerify_value").val(value);
        },
        ajaxUnSignVerify: function(channelId, profileUid) {
            if (channelId == '' || profileUid == '') {
                ow_util.displayInfo(false, '参数错误', '');
                return;
            }
            var ajaxURL = indexUrl + 'index.php?m=Ow&do=unSignVerify';
            var type = $('#unSignVerify_value').val();
            if (type == '') {
                ow_util.displayInfo(false, '失败：请选择协议解约还是强制解约', channelId);
                return;
            }
            $.post(
                    ajaxURL,
                    {
                        "channelId": channelId,
                        'type': type,
                        "profileUid": profileUid
                    },
            function(response, textStatus) {
                if (response.status) {
                    var successMsg = '提交成功';
                    if (response.msg != '' && response.msg != null && response.msg != undefined) {
                        successMsg = response.msg;
                    }
                    ow_util.displayInfo(true, successMsg, '',true);
                } else {
                    var failMsg = '提交失败';
                    if (response.msg != '' && response.msg != null && response.msg != undefined) {
                        failMsg = response.msg;
                    }
                    ow_util.displayInfo(false, failMsg, '');
                }
            }, "json");
        },
        
        getDeductMoney: function(channelId, profileUid) {
            $('#check_status_'+profileUid).hide(); 
            $('#check_status__loading_'+profileUid).show();
            if (channelId == '' || profileUid == '') {
                ow_util.displayInfo(false, '参数错误', '');
                return;
            }
            var url = window.location.href;
            var ajaxURL = indexUrl + 'index.php?m=Ow&do=getDeductGoldbeanNum';
            $.post(
                    ajaxURL,
                    {
                        "profileUid": profileUid
                    },
            function(response, textStatus) {
                var goldbean = 0;
                $('#check_status__loading_'+profileUid).hide();
                $('#check_status_'+profileUid).show();
                if (response.status) {
                    goldbean = response.data;
                    $('#check_value_'+profileUid).html(goldbean);
                }else{
                    var alice = LEGO.popupBox("#popup-win17", {
                        ok: function(dt) {//确认后回调函数
    //                        ow_util.ajaxUnSignVerify(channelId, profileUid);
                            alice.close();
                        },
                        existMask: true, // 遮罩层，扩展参数existMask,默认为true
                        cancle: function(dt) {
    //                            alice.close();
                        }
                    }, {});
                    alice.content("&nbsp;&nbsp;&nbsp;&nbsp;" + response.msg + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
                    alice.open();
                }

            }, "json");

        },

        closeWindow: function(id) {
            var alice = LEGO.popupBox(id, {
                ok: function(dt) {//确认后回调函数
                    alice.close();
                },
                existMask: true, // 遮罩层，扩展参数existMask,默认为true
                cancle: function(dt) {
                }
            }, {});
            alice.close();
        },
        
        unSignVerifyWindow: function(channelId, profileUid) {
            if (channelId == '' || profileUid == '') {
                ow_util.displayInfo(false, '参数错误', '');
                return;
            }
            var url = window.location.href;

            var ajaxURL = indexUrl + 'index.php?m=Ow&do=checkChannelIsPlatinum';
            $.post(
                    ajaxURL,
                    {
                        "channelId": channelId
                    },
            function(response, textStatus) {
                if (response.status) {
                    if (response.isplatinum) {

                        var ajaxURL = indexUrl + 'index.php?m=Ow&do=getDeductGoldbean';
//                        var ajaxURL = indexUrl + 'index.php?m=Ow&do=getDeductGoldbeanNum';
                        $.post(
                                ajaxURL,
                                {
                                    "profileUid": profileUid
                                },
                        function(response, textStatus) {
                            var goldbean = 0;
                            if (response.status) {
                                goldbean = response.data;
                            }
                            var alice = LEGO.popupBox("#popup-win5", {
                                ok: function(dt) {//确认后回调函数
                                    ow_util.ajaxUnSignVerify(channelId, profileUid);
                                },
                                existMask: true, // 遮罩层，扩展参数existMask,默认为true
                                cancle: function(dt) {
//                            alice.close();
                                }
                            }, {});
                            alice.content("" + goldbean);
                            alice.open();
                            //$('#unSignVerifyTypeId').click();
                        }, "json");
                    } else {
                        $("#force").empty();
                        $("#consult").show();
                        var alice = LEGO.popupBox("#popup-win5", {
                            ok: function(dt) {//确认后回调函数
                                ow_util.ajaxUnSignVerify(channelId, profileUid);
                            },
                            existMask: true, // 遮罩层，扩展参数existMask,默认为true
                            cancle: function(dt) {
//                            alice.close();
                            }
                        }, {});
                        alice.open();
                        $('#unSignVerifyTypeId').click();
                    }
                } else {

                    //var ajaxURL = indexUrl + 'index.php?m=Ow&do=getDeductGoldbean';
                    var ajaxURL = indexUrl + 'index.php?m=Ow&do=getDeductGoldbeanNum';
                    $.post(
                            ajaxURL,
                            {
                                "profileUid": profileUid
                            },
                    function(response, textStatus) {
                        var goldbean = 0;
                        if (response.status) {
                            goldbean = response.data;
                        }
                        var alice = LEGO.popupBox("#popup-win5", {
                            ok: function(dt) {//确认后回调函数
                                ow_util.ajaxUnSignVerify(channelId, profileUid);
                            },
                            existMask: true, // 遮罩层，扩展参数existMask,默认为true
                            cancle: function(dt) {
//                            alice.close();
                            }
                        }, {});
                        alice.content("" + goldbean);
                        alice.open();

                    }, "json");
                }
            }, "json");

        },
        changeClass: function(type, channelId) {
            var signId = 'sign' + channelId;
            var commId = 'comm' + channelId;
            if (type == 'sign') {
                $("li#" + commId).removeClass('selected');
                $("li#" + signId).addClass('selected');
                $('#channelProfileNum' + channelId).hide();
            }
            if (type == 'comm') {
                $("li#" + signId).removeClass('selected');
                $("li#" + commId).addClass('selected');
                $('#channelProfileNum' + channelId).show();
                window.setTimeout("ow_util.onclickCopy('" + channelId + "')", 1000);
            }

        },
        getUrlHashChangeClass: function() {
            var hash = window.location.hash;
            if (hash != '') {
                var type = hash.substring(1, 5);
                var channelId = hash.substring(5);
                ow_util.changeClass(type, channelId);
            }

        },
        onclickCopy: function(channelId) {
            $('a#copy-dynamic' + channelId).zclip({
                path: indexUrl + '/base/js/ZeroClipboard.swf',
                copy: function() {
                    $('span#copysuccess' + channelId).show();
                    ow_util.countDown(5, 'copysuccess' + channelId);
                    return $('input#dynamic' + channelId).val();
                }
            });
        },
        doUpdate: function(num, ids) {
            if (num == 0) {
                $('#' + ids).hide();
            }
        },
        countDown: function(secs, ids) {
            var sec = secs; //倒计时的秒数   
            for (var i = sec; i >= 0; i--)
            {
                window.setTimeout("ow_util.doUpdate(" + i + ", '" + ids + "')", (sec - i) * 1000);
            }
        },
        countClose: function(secs) {
            var sec = secs; //倒计时的秒数   
            for (var i = sec; i >= 0; i--)
            {
                window.setTimeout("ow_util.doClose()", (sec - i) * 1000);
            }

        },
        doClose: function() {
            ow_util.successResponseSignInviteClose();
        },
        onMouse: function(id) {
            $('#delProfile' + id).show();
            $("#tronMouse" + id).bind("mouseleave", function() {
                $('#delProfile' + id).hide();
            });
        },
        sendAgreeContract: function() {
            var ajaxURL = indexUrl + 'index.php?m=Ow&do=agreeContract';
            $.getJSON(
                    ajaxURL, {},
                    function(response) {
                        if (response.status) {
                            var successMsg = '提交成功';
                            if (response.msg != '' && response.msg != null && response.msg != undefined) {
                                successMsg += ',' + response.msg;
                            }
                            ow_util.displayInfo(true, successMsg, '');
                        } else {
                            var failMsg = '失败:';
                            if (response.msg != '' && response.msg != null && response.msg != undefined) {
                                failMsg += response.msg;
                            }
                            ow_util.displayInfo(false, failMsg, '');
                        }
                        return;
                    });
        },
        changeDisplayAudit: function(uid, type) {
            if (type == 'pass') {
                $('div#reasondiv_' + uid).hide();
            } else {
                $('div#reasondiv_' + uid).show();
            }
        },
        owAuditRequest: function(uid) {
            var audit = $('input[name="result"]:checked').val();
//            console.log(audit);
            var reason = $("#reason").val();
            var type = $("#type").val();
            if (audit == 'fail' && reason == '') {
                $("#reason").css({
                    "border-color": "#CD0303"
                });
                return;
            }
            var url = indexUrl + 'index.php?m=Ow&do=auditProfile';
            $.getJSON(
                    url,
                    {
                        'uid': uid,
                        'result': audit,
                        'reason': reason,
                        'type': type
                    },
            function(response) {
//                    console.log(response);
                if (response.status) {
                    var successMsg = '保存成功';
                    ow_util.noReflushDisplayInfo(successMsg, "#detail-tip");
                    window.location.href = indexUrl + 'index.php?m=Ow&do=profileList';
                } else {
                    var failMsg = '保存失败:' + response.msg;
                    ow_util.noReflushDisplayInfo(failMsg, "#detail-tip");
                }
                return;
            });
        },
        errorDisplayInfo: function(content) {
            var url = indexUrl + 'index.php';
            var str = '<i class="icon icon-error"></i><span>' + content + '</span>';
            var alice = LEGO.popupBox("#popup-win17", {
                ok: function(dt) {//确认后回调函数
                    alice.close();
                },
                existMask: true, // 遮罩层，扩展参数existMask,默认为true
                cancle: function(dt) {
                    window.location.replace(url);
//                    alice.close();
                }
            }, {});
            alice.content(str);
            alice.open();
        },
        showImg: function(id) {
            var img = document.getElementById(id);
            if (img.style.display == "block") {
                document.getElementById(id).style.display = "none";
            } else if (document.getElementById(id).style.display == "none") {
                document.getElementById(id).style.display = "block";
            }
        },
        clickToRefresh: function() {
            window.location.reload();
            return false;
        },
        ajaxUAgreeUnSign: function(channelId, profileUid, reqId) {
            if (channelId == '' || profileUid == '' || reqId == '') {
                ow_util.displayInfo(false, '参数错误', '');
                return;
            }
            var url = indexUrl + 'index.php?m=Msg';
            var ajaxURL = indexUrl + 'index.php?m=Msg&do=agreeUnSign';
            var type = $('#unSignVerify_value').val();
            if (type == '') {
                ow_util.displayInfo(false, '失败：请选择是否同意协议解约', url);
                return;
            }
            $.post(
                    ajaxURL,
                    {
                        "channelId": channelId,
                        'type': type,
                        "profileUid": profileUid,
                        'reqId': reqId
                    },
            function(response, textStatus) {
                if (response.status) {
                    var successMsg = '提交成功';
                    if (response.msg != '' && response.msg != null && response.msg != undefined) {
                        successMsg = response.msg;
                    }
                    ow_util.msgDisplayInfo(true, successMsg, url);
                } else {
                    var failMsg = '提交失败';
                    if (response.msg != '' && response.msg != null && response.msg != undefined) {
                        failMsg = response.msg;
                    }
                    ow_util.msgDisplayInfo(false, failMsg, url);
                }
            }, "json");
        },

        //是否同意协议解约
        isAgreeUnSign: function(channelId, profileUid, reqId, whoAgree) {
            if (channelId == '' || profileUid == '' || reqId == '') {
                ow_util.displayInfo(false, '参数错误', '');
                return;
            }
            var url = indexUrl + 'index.php?m=Msg';
            var ajaxURL = indexUrl + 'index.php?m=Msg&do=checkUnSign';

            //先保存reqId,发送完验证码之后调用协议解约函数
            ow_util.unsignVerifyUtil.reqId = reqId;

            $.post(
                    ajaxURL,
                    {
                        "channelId": channelId,
                        "profileUid": profileUid,
                        'reqId': reqId
                    },
            function(response, textStatus) {
                if (response.status) {
                    var alice = LEGO.popupBox("#popup-win18", {
                        ok: function(dt) {//确认后回调函
                            //ow_util.ajaxUAgreeUnSign(channelId, profileUid, reqId);

                            //如果是ow发起解约，那消息就在主播端，那就不需要验证码了。
                            if(whoAgree == "profileAgree"){
                                 ow_util.ajaxUAgreeUnSign(channelId, profileUid, reqId);
                            }else if(whoAgree == "owAgree"){  //如果是主播发起解约，那消息就在OW端，那么需要验证码。

                                //设置验证码最长输入长度为10
                                $("#verify_code").on("keyup",function(){
                                    if($(this).val().length > 10){
                                        $(this).val($(this).val().substr(0,10));
                                    }
                                });

                                ow_util.unsignVerifyUtil.unsignChannelId = channelId;
                                ow_util.unsignVerifyUtil.unsignProfileUid = profileUid;
                                ow_util.unsignVerifyUtil.verifyAlice = LEGO.popupBox("#unsignVerify-popbox-4", {
                                    ok: function(dt) {
                                        ;
                                    },
                                    existMask: true,
                                    cancle: function(dt) {
                                        ;
                                    }
                                }, {});
                                ow_util.unsignVerifyUtil.verifyAlice.open();
                            }else{
                                ow_util.ajaxUAgreeUnSign(channelId, profileUid, reqId);
                            }
                            
                            //关闭遮罩层
                            alice.close();
                        },
                        existMask: true, // 遮罩层，扩展参数existMask,默认为true
                        cancle: function(dt) {
                            alice.close();
                        }
                    }, {});
                    alice.open();
                } else {
                    var failMsg = '提交失败';
                    if (response.msg != '' && response.msg != null && response.msg != undefined) {
                        failMsg = response.msg;
                    }
                    ow_util.msgDisplayInfo(false, failMsg, url);
                }
            }, "json");
        },

        //协议解约验证码弹窗工具
        unsignVerifyUtil: {
            unsignChannelId:0,
            unsignProfileUid:0,
            verifyAlice:null,
            reqId: 0,

            getVerify:function(){//获取验证码
                var ajaxURL = indexUrl + "index.php?m=Ow&do=sendCaptcha";

                $.get(""+ajaxURL, ow_util.unsignVerifyUtil.onGetVerifyBack);
            },

            onGetVerifyBack:function(data, status){//获取验证码返回
                var obj = $.parseJSON(data);

                alert(""+obj.msg);
            },

            sendVerify:function(){//发送验证码
                var ajaxURL = indexUrl + "index.php?m=Ow&do=ajaxForceUnsignByCaptcha";

                $.post(""+ajaxURL, {captcha:$("#verify_code").val()}, ow_util.unsignVerifyUtil.onSendVerifyBack);
            },

            onSendVerifyBack:function(data, status){//发送验证码返回
                var obj = $.parseJSON(data);

                if(obj.status){
                    ow_util.unsignVerifyUtil.verifyAlice.close();

                    //是否同意协议解约
                    ow_util.ajaxUAgreeUnSign(ow_util.unsignVerifyUtil.unsignChannelId, ow_util.unsignVerifyUtil.unsignProfileUid, ow_util.unsignVerifyUtil.reqId);
                }
                else
                    alert(""+obj.msg);
            }
        },

        unretrieveChannel: function(channelId) {
            if (channelId == '') {
                ow_util.displayInfo(false, '参数错误', '');
                return;
            }
            var url = indexUrl + 'index.php?m=Ow';
            var ajaxURL = indexUrl + 'index.php?m=Ow&do=unretrieveChannel';
            $.post(
                    ajaxURL,
                    {
                        'channelId': channelId
                    },
            function(response, textStatus) {
                if (response.status) {
                    var successMsg = '成功';
                    if (response.msg != '' && response.msg != null && response.msg != undefined) {
                        successMsg = response.msg;
                    }
                    ow_util.displayInfo(true, successMsg, url);
                } else {
                    var failMsg = '失败';
                    if (response.msg != '' && response.msg != null && response.msg != undefined) {
                        failMsg = response.msg;
                    }
                    ow_util.displayInfo(false, failMsg, url);
                }
            }, "json");
        },
        refreshShortChannel: function(channelId) {
            if (channelId == '') {
                ow_util.displayInfo(false, '参数错误', '');
                return;
            }
            var url = indexUrl + 'index.php?m=Ow';
            var ajaxURL = indexUrl + 'index.php?m=Ow&do=refreshShortChannel';
            $.post(
                    ajaxURL,
                    {
                        'channelId': channelId
                    },
            function(response, textStatus) {
                if (response.status) {
                    var successMsg = '成功';
                    if (response.msg != '' && response.msg != null && response.msg != undefined) {
                        successMsg = response.msg;
                    }
                    ow_util.displayInfo(true, successMsg, '');
                } else {
                    var failMsg = '失败';
                    if (response.msg != '' && response.msg != null && response.msg != undefined) {
                        failMsg = response.msg;
                    }
                    ow_util.displayInfo(false, failMsg, '');
                }
            }, "json");
        },
        msgDisplayInfo: function(type, msg, url) {
            var str = '';
            if (type) {
                str = '<i class="icon icon-success"></i><span>' + msg + '</span>';
            } else {
                str = '<i class="icon icon-error"></i><span>' + msg + '</span>';
            }
            if (url == '') {
                url = indexUrl + 'index.php?m=Profile&do=updateInfo';
            }
            var alice = LEGO.popupBox("#popup-win17", {
                ok: function(dt) {//确认后回调函数
                    if (type) {
                        window.location.replace(url);
                        window.location.reload();
                    } else {
                        window.location.replace(url);
                    }
                    alice.close();
                },
                existMask: true, // 遮罩层，扩展参数existMask,默认为true
                cancle: function(dt) {
                    if (type) {
                        window.location.replace(url);
                        window.location.reload();
                    } else {
                        window.location.replace(url);
                    }
//                    alice.close();
                }
            }, {});
            alice.content(str);
            alice.open();
        },
        tooltip: function() {
            var x = 10;
            var y = 20;
            $("a.tooltip").mouseover(function(e) {
                this.myTitle = this.title;
                this.title = "";
                var tooltip = "<div id='tooltip'>" + this.myTitle + "<\/div>"; //创建 div 元素
                $("body").append(tooltip);	//把它追加到文档中
                $("#tooltip")
                        .css({
                            "top": (e.pageY + y) + "px",
                            "left": (e.pageX + x) + "px"
                        }).show("fast");	  //设置x坐标和y坐标，并且显示
            }).mouseout(function() {
                this.title = this.myTitle;
                $("#tooltip").remove();   //移除 
            }).mousemove(function(e) {
                $("#tooltip")
                        .css({
                            "top": (e.pageY + y) + "px",
                            "left": (e.pageX + x) + "px"
                        });
            });
        },
        textdown: function(id, e) {
            textevent = e;
            if (textevent.keyCode == 8) {
                return;
            }
            if (document.getElementById(id).value.length >= 100) {
                if (!document.all) {
                    textevent.preventDefault();
                } else {
                    textevent.returnValue = false;
                }
            }
        },
        textup: function(id) {
            var s = document.getElementById(id).value;
            //判断ID为text的文本区域字数是否超过1000个 
            if (s.length > 100)
            {
                document.getElementById(id).value = s.substring(0, 100);
            }
        }


    };
    ow_util.getUrlHashChangeClass();
    ow_util.tooltip();
});