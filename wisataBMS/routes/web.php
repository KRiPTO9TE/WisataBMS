<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\KmenuController;
use App\Http\Controllers\FasilController;
use App\Http\Controllers\WgambarController;
use App\Http\Controllers\FgambarController;
use App\Http\Controllers\KgambarController;




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
    $wgambar = DB::table('wgambars')->get();
    return view('welcome',['wisata' => $wisata,'wgambar' => $wgambar]);
});


Route::get('wisata',[WisataController::class, 'userindex']);

Route::get('fasil',[FasilController::class, 'userindex']);
Route::get('kuliner',[KulinerController::class, 'userindex']);
Route::resource('wisatas', WisataController::class);
Route::resource('wgambars', WgambarController::class);
Route::resource('fgambars', FgambarController::class);
Route::resource('kgambars', KgambarController::class);
Route::get('wisatas/tambah-gambar/{id}',[WisataController::class, 'tambahgambar']);


Route::resource('kuliners', KulinerController::class);
Route::resource('kmenus', KmenuController::class);

Route::get('kuliners/menu/{id}',[KulinerController::class, 'tambahmenu']);
Route::get('lihat-kuliner/{kuliner}',[KulinerController::class, 'showmenu']);
//Route::get('lihat-kuliner/{kuliner}',[KmenuController::class, 'kasih']);
//Route::get('/kuliners/{id}',[App\Http\Controllers\KulinerController::class, 'show']);
//Route::get('/kuliners', [App\Http\Controllers\KulinerController::class, 'index']);
//Route::get('/kuliners/create', [App\Http\Controllers\KulinerController::class, 'create']);
//Route::get('/kuliners/{id}/edit', [App\Http\Controllers\KulinerController::class, 'edit']);
//Route::post('/kuliners', [App\Http\Controllers\KulinerController::class, 'store']);
//Route::put('/kuliners/{id}', [App\Http\Controllers\KulinerController::class, 'update']);
//Route::delete('/kuliners/{id}', [App\Http\Controllers\KulinerController::class, 'delete']);

Route::resource('fasils', FasilController::class);

