<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//implementasi Livewire
Route::get('/livewire', function () {
    return view('livewire');
});

//Auth
Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('tampilRegistrasi');
Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('submitRegistrasi');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginsubmit', [AuthController::class, 'loginsubmit'])->name('loginsubmit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Proctacted(Midleware)
Route::middleware('auth')->group(function (): void {
    Route::get('/menu', [MenuController::class, 'index'])->name('menu');
    Route::get('/menu/create', [MenuController::class, 'create'])->name('menu.create');
    Route::get('/menu/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
    Route::get('/menu/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
    Route::get('/user', [UserController::class, 'user'])->name('user');
    Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
    Route::get('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
});

//menu post menu ke database
Route::post('/menu/submit', [MenuController::class, 'submit'])->name('menu.submit');
Route::post('/menu/update/{id}', [MenuController::class, 'update'])->name('menu.update');
Route::post('/menu/delete/{id}', [MenuController::class, 'delete'])->name('menu.delete');

//users
Route::post('/usersubmit', [UserController::class, 'usersubmit'])->name('usersubmit');
Route::post('/updatesubmit/{id}', [UserController::class, 'updatesubmit'])->name('update.submit');