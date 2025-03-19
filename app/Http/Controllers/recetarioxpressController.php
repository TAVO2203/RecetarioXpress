<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class recetarioxpressController extends Controller
{
    public function index(){
     return view ('welcome');   
    }

    public function registro(){
        return view('register');
    }



}
