<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\NeighborhoodController;
use App\Http\Controllers\UserController;

Route::get('/', function(){
    return view('auth/register');
});

// Definindo as rotas

Route::resource('/city', CityController::class);
Route::resource('/neighborhood', NeighborhoodController::class);
Route::resource('/user', UserController::class);

// Verificação login

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
});

require __DIR__.'/auth.php';
