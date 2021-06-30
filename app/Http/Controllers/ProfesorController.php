<?php

namespace App\Http\Controllers;
use App\Models\Clase;
use App\Models\Aula;
use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    public function mostrarlista()
    {
        $Profesores = Profesor::all();
        return view('Maestros.listamaestros', compact('Profesores'));
    }
    public function formulariomaestro(){
        $res = null;
        $clases = Clase::all();
        $aulas = Aula::all();
        return view('Maestros.formulariomaestro',compact('clases','aulas'))->with('res',$res);
    }
    /*public function formularioMaestroRelacion(){
        $res = null;
        $Profesores = Profesor::all();
        $clases = Clase::all();
        $aulas = Aula::all();
        return view('Maestros.formularioMaestroRelacion',compact('clases','aulas','Profesores'))->with('res',$res);
    }*/
}