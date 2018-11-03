<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Socialite;

class SocialiteController extends Controller
{
    public function login(string $provider)
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