<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clase;
use Illuminate\Support\Facades\DB;

class ClaseController extends Controller
{
    public function mostrarlistaclases()
    {
        $Clases = DB::table('clases')->get();
        $res = null;
        return view('Clases.listaclases',compact('Clases'))->with('res',$res);
    }

    public function formularioclases(){
        return view ('Clases.formularioclases');
    }

    public function guardar(Request $request)
    {
        if ($request->isMethod("post") && $request->has("addclase")){
           
            $nombre = $request->input('nombreclase');
            $credito = $request->input('creditoclase');

            DB::table('clases')->insert([
                'nombre' => $nombre,
                'credito' => $credito,
            ]);

            $res = "Se guardo una nueva clase con exito!!";

            $Clases = DB::table('clases')->get();
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

        $nombre = $request->input('nombreclase');
        $credito = $request->input('creditoclase');

        DB::table('clases')->where('id',$codclase)->update([
            'nombre' => $nombre,
            'credito' => $credito,
        ]);

        $res = "Se ha actualizado una clase";

        $Clases = DB::table('clases')->get();
        return view('Clases.listaclases', compact('Clases'))->with('res',$res);

    }

    public function editar($codclaseamostrar){
        $clase = Clase::find($codclaseamostrar);
        return view('Clases.formularioeditarclase', compact('clase'));
    
    }
}
