<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\FasilController;

  




Auth::routes();

Route::middleware(['auth'])->group(function () {
 
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
    Route::middleware(['admin'])->group(function () {
        Route::get('admin', [AdminController::class, 'index']);
    });
 
    Route::middleware(['user'])->group(function () {
        Route::get('user', [UserController::class, 'index']);
    });
 
    Route::get('/logout', function() {
        Auth::logout();
        redirect('/login');
    });
    
});

Route::get('/', function () {
    $wisata = DB::table('wisatas')->get();
    return view('welcome',['wisata' => $wisata]);
});
Route::get('wisata', function () {

    $wisata = DB::table('wisatas')->get();

    return view('wisata', ['wisata' => $wisata]);
});
Route::get('kuliner', function () {

    $kuliner = DB::table('kuliners')->get();

    return view('kuliner', ['kuliner' => $kuliner]);
});
Route::get('fasil', function () {

    $fasil = DB::table('fasils')->get();

    return view('fasil', ['fasil' => $fasil]);
});

Route::resource('wisatas', WisataController::class);
Route::resource('kuliners', KulinerController::class);
Route::resource('fasils', FasilController::class);
