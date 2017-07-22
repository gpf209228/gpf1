<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CateController extends Controller
{
	public function index()
    {
    	$re = DB::table('column')->select('class_id','class_t_id','img','class_name')->where('class_t_id','1')->get();
    	$res = DB::table('column')->select('class_id','class_t_id','img','class_name')->where('class_t_id','0')->get();
    	
    	return view('home/cate/index',['re' => $re,'res' => $res]);
    }

}