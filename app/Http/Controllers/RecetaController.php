<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recetas;
use Illuminate\Support\Facades\DB;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cocina = trim($request->get('cocina'));                                                                                                                                                                                                                                                                                                                                                                                                          
        $Recetas = DB::table('Recetas')
            ->select('id', 'Titulo', 'Instrucciones')
            ->where('Titulo', 'LIKE', '%' .$cocina. '%')
            ->orderBy('Titulo', 'asc')
            ->paginate(5);
        return view('Recetas.index' , compact('Recetas', 'cocina')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Recetas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Recetas = new Recetas();
        $Recetas->Titulo = $request->input('titulo');
        $Recetas->Instrucciones = $request->input('instrucciones');
        $Recetas->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $receta = Recetas::findOrFail($id);
        return view('Recetas.edit', compact('receta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $receta = Recetas::findOrFail($id);
        $receta->Titulo = $request->input('Titulo');
        $receta->Instrucciones = $request->input('Instrucciones');
        $receta->save();
        return redirect()->route('Recetas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $receta = Usuarios::findOrFail($id);
        $receta->delete();
        return redirect()->route('Recetas.index');
    }
}
