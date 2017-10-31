<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use Auth;
use Image;
use DB;

class WorkController extends Controller
{
    //
    public function index(){

    }

    public function info($id){
    	$work = DB::table('works')->where('id',$id)->first();
    	//dump($work);
    	return view('vacantes/info', ['work' => $work])->with('id', $id);
    }

	 public function save(Request $request) {
          $userId = $request->userId;
          $workId = $request->workId;

           // $user = DB::table('postulates')
           //      ->where('userId', '=' , $userId)
           //      ->get();
        

                // $users = DB::table('postulates')->where([
                //     ['userId', '=', $userId],
                //     ['workId', '=', $workId],
                // ])->get();

              $users = DB::table('postulates')->where([
                  ['userId', '=', $userId],
                  ['workId', '=', $workId],
              ])->get();

              $test=count($users);
                   if ($test == '0') {
                     $data = ['userId' => $request->userId,
                              'workId'=>$request->workId];
                              DB::table('postulates')->insert($data);
                         return view('vacantes/save');
                       }else{
                        return view('home');
                   }


                    
                  

               





            


              //$data = ['userId' => $request->userId,
              //      'workId'=>$request->workId];
              //DB::table('postulates')->insert($data);
              //dump($data);
              
	    }

}

