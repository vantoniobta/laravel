<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Work;
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

}
