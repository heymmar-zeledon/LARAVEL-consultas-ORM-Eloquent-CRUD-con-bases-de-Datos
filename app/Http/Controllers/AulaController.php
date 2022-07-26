<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AulaController extends Controller
{
    public function mostrarlistaaulas()
    {
        $res = null;
        $Aulas = DB::table('aulas')->get();
        return view('Aulas.listaaulas', compact('Aulas'))->with('res',$res);
    }

    public function formularioaulas(){
        return view("Aulas.formularioaulas");
    }

    public function guardar(Request $request){

        if ($request->isMethod("post") && $request->has("addaula")){
            $nombre = $request->input('nombreaula');
            $ubicacion = $request->input('ubicacionaula');

            DB::table('aulas')->insert([
                'nombre' => $nombre,
                'ubicacion' => $ubicacion,
            ]);

            $res = "Se guardo una nueva aula con exito!!";

            $Aulas = DB::table('aulas')->get();
            return view('Aulas.listaaulas', compact('Aulas'))->with('res',$res);
        }
    }

    public function eliminar($idaeliminardeaula){
        $Auladelete = Aula::find($idaeliminardeaula);
        $Auladelete->delete();
        $Aulas = DB::table('aulas')->get();
        $res = "Se ha eliminado una aula";
        return view('Aulas.listaaulas', compact('Aulas'))->with('res',$res);
    }

    public function editar($idamostrar){
        $aula_edit = Aula::find($idamostrar);
        return view('Aulas.formularioaulasaeditar', compact('aula_edit'));
    }

    public function actualizar(Request $request, $idaactualizar){
        $nombre = $request->input('nombreaula');
        $ubicacion = $request->input('ubicacionaula');

        DB::table('aulas')->where('id',$idaactualizar)->update([
            'nombre' => $nombre,
            'ubicacion' => $ubicacion,
        ]);

        $res = "Se ha actualizado una aula";

        $Aulas = DB::table('aulas')->get();
        return view('Aulas.listaaulas', compact('Aulas'))->with('res',$res);
    }
}
