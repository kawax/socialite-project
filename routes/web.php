<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});

Route::get('{provider}/login', function (string $provider) {
    return Socialite::driver($provider)->redirect();
});

Route::get('{provider}/callback', function (Request $request, string $provider) {
    if ($request->filled('error')) {
        dd($request);
    }

    $user = Socialite::driver($provider)->user();
    dd($user);
});
