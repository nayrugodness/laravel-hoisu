<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetaController extends Controller
{
    public function hola(Request $request){

        $recetas = ['recetas pizza', 'receta cafe', 'receta pasta'];

        return view('recetas.index')->with('recetas' , $recetas);
    }
}
