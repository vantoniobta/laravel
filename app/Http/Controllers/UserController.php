<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller {

    public function index() {
    	
    }

    public function save(Request $request) {
    	$data = ['name'     => $request ->name,
    	         'email'    => $request ->email,
    	         'password' => $request ->password];
    	DB::table('users')  -> insert($data);
    	//dump($request->all());   
    	//return($request->all());
    }
    
}
