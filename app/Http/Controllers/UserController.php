<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Storage;
use Auth;
use Image;
use DB;

class UserController extends Controller {

    public function index() {
    	
    }

    public function save(Request $request) {
    	$data = ['name'     => $request ->name,
    	         'email'    => $request ->email,
    	         'password' => $request ->password];
    	DB::table('users')  -> insert($data);
    	dump($request->all());   
    	//return($request->all());
    }


    public function profile() {
        return view('profile', array('user' => Auth::user()));
    }

     public function update_avatar(Request $request, $id) {
         if($request->hasFile('avatar')){
                 $name     = $request ->name;
                 $lastname = $request ->lastname;
                 $phone    = $request ->phone;
                 $avatar   = $request->file('avatar');
                 $pdfName  = $request->file('cv')->getClientOriginalName();
                 $ingles   = $request ->ingles;

                $filename = time(). '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300,300)->save(public_path('uploads/avatars/' . $filename));

                    DB::table('users')
                         ->where('id', $id)
                         ->update(['name'     => $name,
                                  'lastname' => $lastname,
                                  'phone'    => $phone,
                                  'avatar'   => $filename,
                                  'cv'       => $pdfName,
                                  'ingles'   => $ingles]);
                                $request->file('cv')->move(
                                          base_path() . '/public/uploads/cv/', $pdfName);
                }else{

                    if ($request->hasFile('cv')) {
                     $name     = $request ->name;
                     $lastname = $request ->lastname;
                     $phone    = $request ->phone;
                     $avatar   = $request->file('avatar');
                     $ingles   = $request ->ingles;
                     $pdfName  = $request->file('cv')->getClientOriginalName();
                    
                    DB::table('users')
                             ->where('id', $id)
                             ->update(['name'     => $name,
                                      'lastname' => $lastname,
                                      'phone'    => $phone,
                                      'cv'       => $pdfName,
                                      'ingles'   => $ingles]);

                                $request->file('cv')->move(
                                          base_path() . '/public/uploads/cv/', $pdfName);


                    }else{
                             $name     = $request ->name;
                             $lastname = $request ->lastname;
                             $phone    = $request ->phone;
                             $avatar   = $request->file('avatar');
                             $ingles   = $request ->ingles;
                            
                            DB::table('users')
                                     ->where('id', $id)
                                     ->update(['name'     => $name,
                                              'lastname' => $lastname,
                                              'phone'    => $phone,
                                              'ingles'   => $ingles]);
                    }

                    //  $name     = $request ->name;
                    //  $lastname = $request ->lastname;
                    //  $phone    = $request ->phone;
                    //  $avatar   = $request->file('avatar');
                    //  $ingles   = $request ->ingles;
                    //  $pdfName  = $request->file('cv')->getClientOriginalName();
                    
                    // DB::table('users')
                    //          ->where('id', $id)
                    //          ->update(['name'     => $name,
                    //                   'lastname' => $lastname,
                    //                   'phone'    => $phone,
                    //                   'cv'       => $pdfName,
                    //                   'ingles'   => $ingles]);

                    //             $request->file('cv')->move(
                    //                       base_path() . '/public/uploads/cv/', $pdfName);






                 //Storage::put('uploads/cv/', $cv->getClientOriginalName());
                 // dump($cv);
                }

        return view('/home', array('user' => Auth::user()));
     
     }


    
}
