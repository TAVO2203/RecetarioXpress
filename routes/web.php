<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\recetarioxpressController;

Route::get('/', [recetarioxpressController::class, 'index']);
Route::get('/', [recetarioxpressController::class, 'registro'])->name('registro');
Route::post('/', [recetarioxpressController::class, 'store'])->name('registro.store');


