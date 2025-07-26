<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/create', [UserController::class, 'store'])->name('users.store');
Route::get('/doctors/create', [DoctorController::class, 'create'])->name('doctors.create');
Route::post('/doctors/create', [DoctorController::class, 'store'])->name('doctors.store');
Route::get('/doctors/index', [DoctorController::class, 'index'])->name('doctors.index');

