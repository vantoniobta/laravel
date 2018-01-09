<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use App\Postulate;
use Auth;
use Image;
use DB;

class WorkController extends Controller
{
    //
    public function index(){

    }

    public function info($id){
    	$work = DB::table('jobs')->where('id',$id)->first();
    	//dump($work);
    	return view('vacantes/info', ['work' => $work])->with('id', $id);
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

                       $postulate = New Postulate;
                       $postulate ->userId = $request->userId;
                       $postulate ->workId = $request->workId;
                       $postulate ->save();

                       // $data = ['userId' => $request->userId,
                       //          'workId' => $request->workId];


                      //DB::table('postulates')->insert($data);
                      $key = 'Te postulaste para '.$work->title.' exitosamente!';
                      return view('vacantes/save',compact('key'));

                       }else{

                        $key = "Ya te encuentra postulado en la vacante";
                      return view('vacantes/save', compact('key'));


                   }          


              //$data = ['userId' => $request->userId,
              //      'workId'=>$request->workId];
              //DB::table('postulates')->insert($data);
              //dump($data);
              
	    }

}

