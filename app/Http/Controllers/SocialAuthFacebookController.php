<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Socialite;

class SocialAuthFacebookController extends Controller
{
    //
    public function redirect(){
    	return Socialite::driver('facebook')->redirect();
    }

    public function callback(){
    	 // when facebook call us a with token
    }



}
