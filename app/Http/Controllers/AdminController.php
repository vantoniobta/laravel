<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Job;
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
        $jobs = DB::table('jobs')->paginate(10);
        return view('admin')->with('jobs', $jobs);
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
                     $jobs = DB::table('jobs')->paginate(10);
                    return redirect('admin')->with('jobs', $jobs);

        }
}
