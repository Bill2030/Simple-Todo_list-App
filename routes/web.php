<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListAppController;

Route::view('/', 'home');
Route::get('/', [ListAppController::class, 'home'])->name('home.home');
Route::post('/store', [ListAppController::class,'create'])->name('store');
