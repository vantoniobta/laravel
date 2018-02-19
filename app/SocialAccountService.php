<?php

// namespace App;

// use Laravel\Socialite\Contracts\User as ProviderUser;

// class SocialAccountService
// {
//     public function createOrGetUser(ProviderUser $providerUser)
//     {
//         $account = SocialAccount::whereProvider('facebook')
//             ->whereProviderUserId($providerUser->getId())
//             ->first();

//         if ($account) {
//             return $account->user;
//         } else {

//             $account = new SocialAccount([
//                 'provider_user_id' => $providerUser->getId(),
//                 'provider' => 'facebook'
//             ]);

//             $user = User::whereEmail($providerUser->getEmail())->first();

//             if (!$user) {

//                 $user = User::create([
//                     'email' => $providerUser->getEmail(),
//                     'name' => $providerUser->getName(),
//                 ]);
//             }

//             $account->user()->associate($user);
//             $account->save();

//             return $user;

//         }

//     }
// }

namespace App;

use Laravel\Socialite\Contracts\Provider;
use Illuminate\Support\Facades\Redirect;


class SocialAccountService {
    
    public function createOrGetUser(Provider $provider) {

        $providerUser = $provider->user();  //datos de usuario
        $providerName = class_basename($provider); //de que red social proviene 
        $account      = SocialAccount::whereProvider($providerName)
                                      ->whereProviderUserId($providerUser->getId())
                                      ->first();

              if($account == null){
                 return false;
                 }else{
                      if ($account) {
                            return $account->user;
                        } else {
                            $account = new SocialAccount([
                                'provider_user_id' => $providerUser->getId(),
                                'provider' => $providerName
                            ]);
                            $user = User::whereEmail($providerUser->getEmail())->first();

                            if (!$user) {

                                $user = User::create([
                                    'email' => $providerUser->getEmail(),
                                    'name' => $providerUser->getName(),
                                ]);
                            }
                            $account->user()->associate($user);
                            $account->save();
                            return $user;
                        }
                  }


              //-------------------------------

            // if ($account) {
            //     return $account->user;
            // } else {
            //     $account = new SocialAccount([
            //         'provider_user_id' => $providerUser->getId(),
            //         'provider' => $providerName
            //     ]);
            //     $user = User::whereEmail($providerUser->getEmail())->first();

            //     if (!$user) {

            //         $user = User::create([
            //             'email' => $providerUser->getEmail(),
            //             'name' => $providerUser->getName(),
            //         ]);
            //     }

            //     $account->user()->associate($user);
            //     $account->save();

            //     return $user;

            // }

    }
}