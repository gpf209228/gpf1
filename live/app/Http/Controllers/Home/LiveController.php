<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LiveController extends Controller
{
	//首页直播页面
    public function index()
    {
    	return view('home/live/zhibo');
    }
    //直播间
    public function room() {
    	return view('home/live/room');
    }
}