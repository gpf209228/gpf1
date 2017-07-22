<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{
	public function index()
    {
    
    	return view('home/common/index');
    }
}