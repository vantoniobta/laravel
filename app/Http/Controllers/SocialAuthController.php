<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SocialAccountService;
use Socialite;
use Alert;

class SocialAuthController extends Controller {

    public function redirect($provider) {
     return Socialite::driver($provider)->redirect();    
   }

    public function callback(SocialAccountService $service, $provider) {
         $user = $service->createOrGetUser(Socialite::driver($provider));
         if ($user == null) {
            //Alert::info('Alparecer tu red social no cuenta con email o no se encuentra validada', 'Error Email!');
            Alert::success('Alparecer tu red social no cuenta con email o no se encuentra validada!')->persistent("Close");
            return redirect()->to('/login');     
         }else{
            auth()->login($user);
            return redirect()->to('/home');       
         }
          
    }
}