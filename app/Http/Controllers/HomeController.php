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
    public function index() {
        $user_init  = Auth::user()->id;
        $all_jobs   = DB::table('jobs')->orderBy('created_at', 'desc')->limit(3)->get();
        $postulates = DB::table('postulates')->where('userId',$user_init)->orderBy('created_at', 'desc')->first();
            if ($postulates == null) {
                # code...
                $code = '0';
                  return view('home',['jobs' => $code], compact('all_jobs'));
                }
                else{
                    $code = DB::table('jobs')->where('id',$postulates->workId)->first();
                       return view('home',['jobs' => $code],compact('all_jobs'));
                }
    }
}
