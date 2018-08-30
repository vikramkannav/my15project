<?php

namespace App\Http\Controllers;

use App\AuthenticationProvider;
use Illuminate\Http\Request;
use App\User;
use Socialite;
use Exception;
use Auth;


class AuthenticationProviderController extends BaseController
{

    public function redirect($provider_type)
    {
        return Socialite::driver($provider_type)->redirect();
    }


    public function callback($provider_type)
    {
       try {
            $user = Socialite::driver($provider_type)->user();
            $input['email'] = $user->getEmail();
            $input['provider_type'] = $provider_type;
            $input['social_id'] = $user->getId();
            $input['user_id'] = '2';

            $authUser = $this->findOrCreate($input);

            Auth::loginUsingId($authUser->id,true);
         //   Auth::user($input);
            return redirect()->route('home');


        } catch (Exception $e) {
            return redirect('auth/'.$provider_type);

        }
    }
    public function findOrCreate($input){

       $checkIfExist = AuthenticationProvider::where('provider_type',$input['provider_type'])
            ->where('social_id',$input['social_id'])
            ->first();

        if($checkIfExist){
            return $checkIfExist;
        }
          return AuthenticationProvider::create($input);
    }


}
