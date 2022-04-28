<?php

namespace App\Http\Controllers\Auth;

use App\Contracts\ISocialNetwork;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    /**
     * @param string $socialNetwork
     * @return RedirectResponse|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function index(string $socialNetwork)
    {
        return Socialite::driver($socialNetwork)->redirect();
    }

    /**
     * @param string $socialNetwork
     * @param ISocialNetwork $social
     * @return Application|RedirectResponse|Redirector
     */
    public function callback(string $socialNetwork, ISocialNetwork $social)
    {
        return redirect($social->authUser(
            Socialite::driver($socialNetwork)->user()
        ));
    }
}
