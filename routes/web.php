<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/', [WelcomeController::class, 'welcome']);
Route::get('/home', [HomeController::class, 'home']);