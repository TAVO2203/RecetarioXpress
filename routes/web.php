<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\recetarioxpressController;

Route::get('/', [recetarioxpressController::class, 'index']);
Route::get('/registro', [recetarioxpressController::class, 'registro'])->name('register');


