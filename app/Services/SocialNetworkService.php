<?php

namespace App\Services;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Contracts\User as SocialContract;

class SocialNetworkService implements \App\Contracts\ISocialNetwork
{
    /**
     * @param SocialContract $socialUser
     * @return string
     * @throws Exception
     */
    function authUser(SocialContract $socialUser): string
    {
        $user = User::where('email', $socialUser->getEmail())->first();

        if($user) {
            $user->name   = $socialUser->getName();
            $user->avatar = $socialUser->getAvatar();

            if($user->save()) {
                Auth::loginUsingId($user->id);
                return route('account.index');
            }

            throw new Exception("Wasn't auth user, we can try later");

        } else {
            return route('register');
        }
    }
}
