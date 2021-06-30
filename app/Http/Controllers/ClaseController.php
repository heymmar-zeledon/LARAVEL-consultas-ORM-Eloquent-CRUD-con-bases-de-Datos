<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clase;

class ClaseController extends Controller
{
    public function mostrarlistaclases()
    {
        $Clases = Clase::all();
        return view('Clases.listaclases',compact('Clases'));
    }
}
