<?php

use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('{provider}/login', [SocialiteController::class, 'login']);
Route::get('{provider}/callback', [SocialiteController::class, 'callback']);
