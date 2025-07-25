<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('register');
// });

Route::get('/users/create',[UserController::class,'create'])->name('users.create');
Route::post('/users/create',[UserController::class,'store'])->name('users.store');