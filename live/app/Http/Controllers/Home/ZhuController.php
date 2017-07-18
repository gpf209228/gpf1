<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ZhuController extends Controller
{
	//个人中心
    public function index()
    {
    	return view('home/zhu/index');
    }
    //我的消息
    public function msg() {
    	return view('home/zhu/wodexiaoxi');
    }
    //我的财产
    public function money() {
    	return view('home/zhu/wodejiangpin');
    }
    //我的福利
    public function fuli() {
    	return view('home/zhu/wodefuli');
    }
    //成为主播
    public function go() {
    	return view('home/zhu/cwzhubo');
    }
    //订阅与查看历史
    public function sub() {
    	return view('home/zhu/dingyuelishi');
    }
   
    //认证教程@todo 没路由
    public function asd() {
    	return view('home/zhu/renzhengjiaocheng');
    }

     //@todo
    public function ass() {
    	return view('home/zhu/ruhechengzhang');
    }

}