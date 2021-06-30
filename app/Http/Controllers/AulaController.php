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

    public function guardar(Request $request){

        if ($request->isMethod("post") && $request->has("addaula")){
            $nombre = $request->input('nombreaula');
            $ubicacion = $request->input('ubicacionaula');

            $new_aula = Aula::create([
                'nombre' => $nombre,
                'ubicacion' => $ubicacion,
            ]);

            $res = "Se guardo una nueva aula con exito!!";

            $Aulas = Aula::all();
            return view('Aulas.listaaulas', compact('Aulas'))->with('res',$res);
        }
    }

    public function eliminar($idaeliminardeaula){
        $Auladelete = Aula::find($idaeliminardeaula);
        $Auladelete->delete();
        $Aulas = Aula::all();
        $res = "Se ha eliminado una aula";
        return view('Aulas.listaaulas', compact('Aulas'))->with('res',$res);
    }

    public function editar($idamostrar){
        $aula_edit = Aula::find($idamostrar);
        return view('Aulas.formularioaulasaeditar', compact('aula_edit'));
    }

    public function actualizar(Request $request, $idaactualizar){
        $Aula = Aula::find($idaactualizar);
        $nombre = $request->input('nombreaula');
        $ubicacion = $request->input('ubicacionaula');

        $Aula->update([
            'nombre' => $nombre,
            'ubicacion' => $ubicacion,
        ]);

        $res = "Se ha actualizado una aula";

        $Aulas = Aula::all();
        return view('Aulas.listaaulas', compact('Aulas'))->with('res',$res);
    }
}
