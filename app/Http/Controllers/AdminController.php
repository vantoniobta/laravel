<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        return view('admin');
    }

    public function redirect_jobs() {
        return view('admin/jobs_new');
    }


     public function save(Request $request) {


        $data = ['title' => $request->puesto,
                    'address'=>$request->lugar,
                    'time'=>$request->tiempo,
                    'abilities'=>$request->habilidades,
                    'benefits'=>$request->prestaciones,
                    'salary'=>$request->sueldo];

                    DB::table('jobs')->insert($data);
                    return view('admin');

        }
}
