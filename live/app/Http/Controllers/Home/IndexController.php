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
    	$re = DB::table('article as a')->select('article_id','article_title','article_time','article_name','cat_name')->join('art_cate as c','c.cat_id','=','a.cat_id')->get();
        //文章头条
        $res = DB::table('article as a')->select('article_id','article_title', 'article_header','cat_name')->join('art_cate as c','c.cat_id','=','a.cat_id')->where('article_header','1')->limit('1')->get();
    	// print_r($res);die;
    	//热门分类
    	$catList = DB::table('column')->select('class_id','class_name','img','class_t_id','is_hot')->where('is_hot','1')->where('class_t_id','>',0)->get();
    	$count = count($catList);
        // print_r($count);die;
    	return view('home/index/index',['re' => $re, 'res' => $res,'catList' => $catList,'count' => $count]);
    }

    public function artDetails($id){
        $re = DB::table('article as a')->select('article_id','article_title','article_content','article_time','article_name','cat_name')->join('art_cate as c','c.cat_id','=','a.cat_id')->where('article_id',$id)->get();
        return view('home/article/artDetails',['$re' => $re]);
    }
}