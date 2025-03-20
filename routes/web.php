<?php

// Duplicate import removed
use App\Http\Controllers\recetarioxpressController;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\UsuariosController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); 
})->name('home'); 

Route::resource('/Usuarios', UsuariosController::class);
Route::get('/Usuarios/create', [UsuariosController::class, 'create'])->name('Usuarios.create');





