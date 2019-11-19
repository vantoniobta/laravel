<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Work;
use App\Postulate;
use Storage;
use Auth;
use Image;
use DB;
use Alert;

class WorkController extends Controller
{
    //
    public function index(){

    }

    public function info($id){
    	$work = DB::table('articles')->where('url',$id)->first();
      if ($work == null) {
        return view('vacantes/error');
      }else{
          // if ($work->address == 'Monterrey') {
              return view('articulo/articulo',array('user' => Auth::user()), ['work' => $work])->with('id', $id);
          // }else{
          //     return view('cdmx/job',array('user' => Auth::user()), ['work' => $work])->with('id', $id);
          // }
      }
    }

	 public function save(Request $request) {
          $userId = $request->userId;
          $workId = $request->workId;
          $work   = DB::table('jobs')->where('id',$workId)->first();
          $users  = DB::table('postulates')->where([
                                          ['userId', '=', $userId],
                                          ['workId', '=', $workId],
                                          ])->get();

                           
                            $check_cv = DB::table('users')->where('id',$userId)->first();
                                if ($check_cv->cv == 'vacio.pdf') {  //verificamos si NO existe el cv
                                      Alert::error('Necesitas adjuntar tu CV para postularte')->persistent("Close");
                                      return back();
                                }else{
                                      //Alert::success('Gracias por postularte')->persistent("Close");
                                       $test=count($users);
                                         if ($test == '0') {
                                               $postulate = New Postulate;
                                               $postulate ->userId = $request->userId;
                                               $postulate ->workId = $request->workId;
                                               $postulate ->save();
                                               $key = 'Te postulaste para-'.$work->title.'';
                                                 Alert::success($key)->persistent("Close");
                                                   //return view('vacantes/save',compact('key'));
                                                      return back();
                                         }else{
                                                $key = 'Ya te encuentras postulado en la vacante';
                                                     Alert::error($key)->persistent("Close");
                                                         //return view('vacantes/save', compact('key'));
                                                       return back();

                                         }
                                  }         
	    }

}

