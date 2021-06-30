<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;

class AulaController extends Controller
{
    public function mostrarlistaaulas()
    {
        $Aulas = Aula::all();
        return view('Aulas.listaaulas', compact('Aulas'));
    }

    public function formularioaulas(){
        $res = null;
        return view("Aulas.formularioaulas")->with('res',$res);
    }
}
