<?php

namespace App\Contracts;

use Laravel\Socialite\Contracts\User as SocialContract;

interface ISocialNetwork
{
    /**
     * @param SocialContract $socialUser
     * @return string
     */
    function authUser(SocialContract $socialUser): string;
}
