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

     public function update_avatar(Request $request, $id) {
         if($request->hasFile('avatar')){
                 $name     = $request ->name;
                 $lastname = $request ->lastname;
                 $phone    = $request ->phone;
                 $avatar   = $request->file('avatar');
                 $cv       = $request->file('cv');
                 $ingles   = $request ->ingles;

                $filename = time(). '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/' . $filename));

                    DB::table('users')
                         ->where('id', $id)
                         ->update(['name'     => $name,
                                  'lastname' => $lastname,
                                  'phone'    => $phone,
                                  'avatar'   => $filename,
                                  'cv'       => $cv,
                                  'ingles'   => $ingles]);
                }else{
                      $name     = $request ->name;
                     $lastname = $request ->lastname;
                     $phone    = $request ->phone;
                     $avatar   = $request->file('avatar');
                     $cv       = $request->file('cv');
                     $ingles   = $request ->ingles;

                         DB::table('users')
                             ->where('id', $id)
                             ->update(['name'     => $name,
                                      'lastname' => $lastname,
                                      'phone'    => $phone,
                                      'cv'       => $cv,
                                      'ingles'   => $ingles]);
                }

        return view('/home', array('user' => Auth::user()));
     
     }


    
}
