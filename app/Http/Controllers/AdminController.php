<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Job;
use App\Work;
use App\Postulate;
use Auth;
use Maatwebsite\Excel\Facades\Excel;

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
    public function index() { 
      
       // SELECT DISTINCT jobs.id, created_at,title,address,time,salary,
       // (SELECT COUNT(*) FROM postulates
       //          WHERE workId = jobs.id) AS postulados
       //  FROM jobs

        $data = DB::table("jobs")
                    ->select("jobs.id", "jobs.created_at","jobs.title","jobs.address","jobs.address","jobs.salary", DB::raw("COUNT(*) as postulados"))
                    ->join("postulates","postulates.workId","=","jobs.id")
                    ->where('jobs.status', '=', 'Activo')
                    ->groupBy("jobs.id")
                    ->get();

        $jobs   = DB::table('jobs')->where('status', '=', 'Activo')->orderBy('created_at', 'desc')->paginate(10);
        $jobs_x = DB::table('jobs')->where('status', '=', 'Inactivo')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin', compact('jobs_x', 'data'))->with('jobs', $jobs);
    }


    public function redirect_jobs_edit($id) {
         $jobs = DB::table('jobs')->where('id',$id)->first();
        return view('admin/jobs_edit',['jobs' => $jobs]);
    }


    public function redirect_jobs() {
        return view('admin/jobs_new');
    }
     public function save(Request $request) {
                    $job = New Job;
                    $job ->title     = $request->puesto;
                    $job ->url       = $request->url;
                    $job ->address   = $request->lugar;
                    $job ->time      = $request->tiempo;
                    $job ->abilities = $request->habilidades;
                    $job ->benefits  = $request->prestaciones;
                    $job ->salary    = $request->sueldo;
                    $job ->status    = $request->status;
                    $job ->save();
                    $jobs = DB::table('jobs')->paginate(10);
                    return redirect('admin') ->with('jobs', $jobs);
    }

    public function save_edit(Request $request,$id) {
            $title       = $request ->puesto;
            $address     = $request ->lugar;
            $time        = $request ->tiempo;
            $abilities   = $request ->habilidades;
            $benefits    = $request ->prestaciones;
            $salary      = $request ->sueldo;
            $status      = $request ->status;
                           DB::table('jobs')
                                   ->where('id', $id)
                                   ->update(['title'      => $title,
                                            'address'     => $address,
                                             'time'       => $time,
                                             'abilities'  => $abilities,
                                             'benefits'   => $benefits,
                                             'salary'     => $salary,
                                             'status'     => $status]);
                                     $jobs = DB::table('jobs')->paginate(10);
                    return redirect('admin') ->with('jobs', $jobs);

    }

    public function postulates_get($id) {
       $jobs = DB::table('jobs')->where('id',$id)->first();
       $data = DB::table('users')
                ->join('postulates', function ($join) use ($id){
                    $join->on('users.id', '=', 'postulates.userId')
                         ->where('postulates.workId', '=',$id);

                })
                ->get();               
                  return view('admin/postulates')
                  ->with('data', $data)
                  ->with('jobs', $jobs);
    }



       public function all_users(){
          $users = DB::table('users')->paginate(10);
          return view('admin/users')->with('users', $users);
       }


    public function activity_xlsx() {
                // $data = DB::table('userinformations')
                //             ->join('users', 'userinformations.user_id', '=', 'users.id')
                //             ->join('careers','careers.user_id','=','users.id')
                //             ->select('userinformations.*','users.*','careers.org_name','careers.post')
                //             ->where('userinformations.payment_status',1)
                //             ->groupBy('careers.user_id')
                //             ->get();

                $data   = DB::table('jobs')->where('status', '=', 'Activo')->orderBy('created_at', 'desc')->paginate(10);

                $items=array();
                foreach ($data as $key=>$d) {
                         $items[$key]['#']=++$key;
                         $items[$key]['title']=$d->title;
                         $items[$key]['time']=$d->time;
                         $items[$key]['salary']=$d->salary;
                         $items[$key]['url']=$d->url;
                }

              Excel::create('Member Paid List', function($excel) use($items) {
                     $excel->sheet('Paid List', function($sheet) use($items){
                     $sheet->fromArray($items);
                 });
               })->download('xls');

    }




}
