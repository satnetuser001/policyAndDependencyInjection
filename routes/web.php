<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'main'])->name('main');
Route::get('/{user}/with', [HomeController::class, 'with'])->name('with');
Route::get('/{user}/without', [HomeController::class, 'without'])->name('without');