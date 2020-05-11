<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public function index(){
        $test_case = DB::table('TS_LOAI_TS')->get();
        dd($test_case);
        return view('welcome');
    }
}
