<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Job;
use App\Work;
use App\Postulate;
use Auth;

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
        $jobs  = DB::table('jobs')->paginate(10);
        return view('admin')->with('jobs', $jobs);
    }

    public function redirect_jobs() {
        return view('admin/jobs_new');
    }
     public function save(Request $request) {
                    $job = New Job;
                    $job ->title     = $request->puesto;
                    $job ->address   = $request->lugar;
                    $job ->time      = $request->tiempo;
                    $job ->abilities = $request->habilidades;
                    $job ->benefits  = $request->prestaciones;
                    $job ->salary    = $request->sueldo;
                    $job ->save();
                    $jobs = DB::table('jobs')->paginate(10);
                    return redirect('admin') ->with('jobs', $jobs);
    }

    public function postulates_get($id) {
        
        dump($id);
        $job   = DB::table('postulates')->where('workId',$id)->get();
         dump($job);

        //.........................................
            // $a = DB::table('users')
            // ->join('postulates', 'users.id', '=', 'postulates.userId')
            //  ->where('postulates.workId', '=', '3');

             // $a=DB::table('users')
             //    ->join('postulates', function ($join) {
             //        $join->on('users.id', '=', 'postulates.userId')
             //             ->where('postulates.workId', '>', '$id');
             //    })
             //    ->get();

               
        //.........................................
        //return view('admin/postulates',compact('job'));
    }
}
