<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class UserController extends Controller {

    public function index() {
    	
    }


    //save form example
    public function save(Request $request) {
    	$data = ['name'     => $request ->name,
    	         'email'    => $request ->email,
    	         'password' => $request ->password];
    	DB::table('users')  -> insert($data);
    	dump($request->all());   
    	//return($request->all());
    }

    //add profile imagen function
    public function profile() {
        return view('profile', array('user' => Auth::user()));
    }
    
}
