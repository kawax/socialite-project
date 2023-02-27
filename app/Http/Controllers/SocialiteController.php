<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function login(string $provider): RedirectResponse
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback(Request $request, string $provider)
    {
        if ($request->filled('error')) {
            return redirect('/');
        }

        $user = Socialite::driver($provider)->user();
        dd($user);
    }
}
