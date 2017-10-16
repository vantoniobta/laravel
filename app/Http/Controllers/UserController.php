<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
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

     public function update_avatar(Request $request) {
        //imagen change profile 
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time(). '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('profile', array('user' => Auth::user()));
     
     }
    
}
