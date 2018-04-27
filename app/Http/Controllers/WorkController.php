<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Work;
use App\Postulate;
use Storage;
use Auth;
use Image;
use DB;

class WorkController extends Controller
{
    //
    public function index(){

    }

    public function info($id){
    	$work = DB::table('jobs')->where('url',$id)->first();
      if ($work == null) {
        //echo  '<h1>NOTHING :( </h1>';;
        return view('vacantes/error');
      }else{
        return view('vacantes/info',array('user' => Auth::user()), ['work' => $work])->with('id', $id);
      }
    	//return view('vacantes/info', ['work' => $work])->with('id', $id);
    }

	 public function save(Request $request) {
          $userId = $request->userId;
          $workId = $request->workId;
          $work   = DB::table('jobs')->where('id',$workId)->first();
          $users  = DB::table('postulates')->where([
                                          ['userId', '=', $userId],
                                          ['workId', '=', $workId],
                                          ])->get();
                   $test=count($users);
                      if ($test == '0') {
                            $check_cv = DB::table('users')->where('id',$userId)->first();
                            //dd($check_cv->cv);
                                if ($check_cv->cv == 'vacio.pdf') {
                                     $alert = 'Para poder Postularte necesitas subir tu CV en tu perfil';
                                    // Alert::success($alert)->persistent("Close");
                                      return back();
                                }else{
                                      $alert = 'Datos enviados con éxito.';
                                      // Alert::success($alert)->persistent("Close");
                                        return redirect()->back()->withInput();
                                  }
                        }else{

                        }

                   // if ($test == '0') {
                   //               $postulate = New Postulate;
                   //               $postulate ->userId = $request->userId;
                   //               $postulate ->workId = $request->workId;
                   //               $postulate ->save();
                   //               //DB::table('postulates')->insert($data);
                   //               $key = 'Te postulaste para-'.$work->title.'-Revisaremos tu CV!';
                   //                 Alert::success($key)->persistent("Close");
                   //                   //return view('vacantes/save',compact('key'));
                   //                      return back();
                   //        }else{
                   //              $key = 'Ya te encuentras postulado en la vacante';
                   //              Alert::success($key)->persistent("Close");
                   //                //return view('vacantes/save', compact('key'));
                   //              return back();
                   // }          
	    }

}

