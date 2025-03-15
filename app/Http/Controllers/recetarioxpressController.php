<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class recetarioxpressController extends Controller
{
    public function index(){
     return view ('welcome');   
    }

    public function resgistro(){
        return view('resgister');
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:50',
            'email' => 'required|string|max:100',
            'password' => 'required|string|max:100',
        ]);
        usuarios::create([
            'nombre' => $request->Nombre,
            'email' => $request->Email,
            'password' => bcrypt($request->Password),

        ]);
        return redirect()->back()->with('success', 'Usuario registrado con éxito.');
    }

}
