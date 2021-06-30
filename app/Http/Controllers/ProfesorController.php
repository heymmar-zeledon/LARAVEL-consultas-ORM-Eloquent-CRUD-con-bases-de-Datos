<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    public function mostrarlista()
    {
        $Profesores = Profesor::all();
        return view('Maestros.listamaestros', compact('Profesores'));
    }
}