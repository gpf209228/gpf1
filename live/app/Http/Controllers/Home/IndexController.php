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
    	//全部文章
    	$re = DB::table('article')->select('article_id','article_title','article_time','article_name')->get();
    	//文章头条
    	$res = DB::table('article')->select('article_id','article_title', 'article_header')->where('article_header','1')->limit('1')->get();
    	//热门分类
    	$catList = DB::table('column')->select('class_id','class_name','img','class_t_id','is_hot')->where('is_hot','1')->where('class_t_id','>',0)->get();
    	// print_r($catList);die;
    	return view('home/index/index',['re' => $re, 'res' => $res,'catList' => $catList]);
    }
}