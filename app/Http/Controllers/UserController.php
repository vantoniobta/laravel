<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Storage;
use Auth;
use Image;
use DB;
use Socialite;
use Alert;

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
                if ($request->hasFile('cv')) {
                  # code...
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

                                    if (!file_exists('uploads/cv/'.$id.'/')) {
                                              mkdir('uploads/cv/'.$id, 0777, true);
                                           $request->file('cv')->move(
                                               base_path() . '/public/uploads/cv/'.$id.'/', $pdfName);
                                          }else{
                                              $request->file('cv')->move(
                                               base_path() . '/public/uploads/cv/'.$id.'/', $pdfName);
                                          }
                                      }else{
                                             $name     = $request ->name;
                                             $lastname = $request ->lastname;
                                             $phone    = $request ->phone;
                                             $avatar   = $request->file('avatar');
                                             $ingles   = $request ->ingles;

                                            $filename = time(). '.' . $avatar->getClientOriginalExtension();
                                            Image::make($avatar)->resize(300,300)->save(public_path('uploads/avatars/' . $filename));

                                                DB::table('users')
                                                              ->where('id', $id)
                                                              ->update(['name'     => $name,
                                                                       'lastname' => $lastname,
                                                                       'phone'    => $phone,
                                                                       'avatar'   => $filename,
                                                                       'ingles'   => $ingles]);
                                           }
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

                                                                 if (!file_exists('uploads/cv/'.$id.'/')) {
                                                                          mkdir('uploads/cv/'.$id, 0777, true);
                                                                          $request->file('cv')->move(
                                                                              base_path() . '/public/uploads/cv/'.$id.'/', $pdfName);
                                                                          }else{
                                                                              $request->file('cv')->move(
                                                                              base_path() . '/public/uploads/cv/'.$id.'/', $pdfName);
                                                                          }

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

                                              }
                                               $user_init = Auth::user()->id;
                                                          $postulates = DB::table('postulates')->where('userId',$user_init)->first();
                                                              if ($postulates == null) {
                                                                  # code...
                                                                  $code = '0';
                                                                      Alert::success('Datos actualizados!')->persistent("Close");
                                                                      return back();
                                                                  }
                                                                  else{
                                                                        Alert::success('Datos actualizados!')->persistent("Close");
                                                                        return back();   
                                                                  }

                          
     }
}
