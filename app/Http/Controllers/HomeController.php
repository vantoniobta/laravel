<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_init = Auth::user()->id;
        $postulates = DB::table('postulates')->where('userId',$user_init)->first();
            if ($postulates == null) {
                # code...
                $code = '0';
                return view('home',['jobs' => $code]);
                }
                else{
                    $jobs = DB::table('jobs')->where('id',$postulates->workId)->first();
                    return view('home',['jobs' => $jobs]);
                }


        // echo $postulates;
        // $jobs = DB::table('jobs')->where('id',$postulates->workId)->first();

        //return view('home',['jobs' => $jobs]);

        //return view('home');



    }
}
