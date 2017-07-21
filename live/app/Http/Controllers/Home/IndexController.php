<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
    	$re = DB::table('article')->select('article_id','article_title','article_time','article_name')->get();
    	return view('home/index/index',['re' => $re]);
    }
}