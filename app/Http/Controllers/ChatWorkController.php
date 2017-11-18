<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Socialite;

class ChatWorkController extends Controller
{
    public function login()
    {
        return Socialite::driver('chatwork')->redirect();
    }

    public function callback(Request $request)
    {
        if ($request->filled('error')) {
            return redirect('/');
        }

        $user = Socialite::driver('chatwork')->user();
        dd($user);
    }
}
