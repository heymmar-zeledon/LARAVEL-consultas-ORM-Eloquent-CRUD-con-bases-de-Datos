<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;

class AulaController extends Controller
{
    public function mostrarlistaaulas()
    {
        $res = null;
        $Aulas = Aula::all();
        return view('Aulas.listaaulas', compact('Aulas'))->with('res',$res);
    }

    public function formularioaulas(){
        return view("Aulas.formularioaulas");
    }

    /*edit//para las aulas tomando referencia las clases.

    public function guardar(Request $request)
    {
        if ($request->isMethod("post") && $request->has("addclase")){
           
            $nombre = $request->input('nombreclase');
            $credito = $request->input('creditoclase');

            $new_clase = Clase::create([
                'nombre' => $nombre,
                'credito' => $credito,
            ]);

            $res = "Se guardo una nueva clase con exito!!";

            $Clases = Clase::all();
            return view('Clases.listaclases', compact('Clases'))->with('res',$res);
        }
    }

    public function eliminar($codclase){

        $class_delete = Clase::find($codclase);
        $class_delete->delete();
        $Clases = Clase::all();
        $res = "Se ha eliminado una clase";
        return view('Clases.listaclases', compact('Clases'))->with('res',$res);
    }

    public function actualizar(Request $request, $codclase){

        $Clase = Clase::find($codclase);
        $nombre = $request->input('nombreclase');
        $credito = $request->input('creditoclase');

        $Clase->update([
            'nombre' => $nombre,
            'credito' => $credito,
        ]);

        $res = "Se ha actualizado una clase";

        $Clases = Clase::all();
        return view('Clases.listaclases', compact('Clases'))->with('res',$res);

    }

    public function editar($codclaseamostrar){
        $clase = Clase::find($codclaseamostrar);
        return view('Clases.formularioeditarclase', compact('clase'));
    
    }*/
}
