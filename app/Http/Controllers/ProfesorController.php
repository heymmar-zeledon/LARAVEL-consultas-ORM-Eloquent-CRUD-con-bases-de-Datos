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
        $res = null;
        $Profesores = Profesor::all();
        return view('Maestros.listamaestros', compact('Profesores'))->with('res',$res);
    }
    public function formulariomaestro(){
        $clases = Clase::all();
        $aulas = Aula::all();
        return view('Maestros.formulariomaestro',compact('clases','aulas'));
    }

    public function guardar(Request $request){

        if($request->isMethod("post") && $request->has("addprof")){
            
            $nombre = $request->input('nombremaestro');
            $apellido = $request->input('apellidomaestro');
            $titulo = $request->input('titulo');

            $new_profesor = Profesor::create([
                'nombre' => $nombre,
                'apellido' => $apellido,
                'titulo' => $titulo,
            ]);
            //agregando relacion
            $clase = $request->input('clase');
            $aula = $request->input('aula');
            $new_profesor->clases()->attach($clase,['aula_id' => $aula]);

            $res = "Se guardo un nuevo profesor con exito!!";

            $Profesores = Profesor::all();
            return view('Maestros.listamaestros', compact('Profesores'))->with('res',$res);
        }
    }

    public function eliminar($idealiminar){
        $Prof_delete = Profesor::find($idealiminar);
        $Prof_delete->clases()->detach();
        $Prof_delete->delete();
        $Profesores = Profesor::all();
        $res = "Se ha eliminado un profesor";
        return view('Maestros.listamaestros', compact('Profesores'))->with('res',$res);
    }

    public function editar($idx){
        $profesorEdit = Profesor::find($idx);
        return view('Maestros.formularioaediatr', compact('profesorEdit'));
    }

    public function actualizar(Request $request, $id){
        $profesor = Profesor::find($id);
        $nombre = $request->input('nombremaestro');
        $apellido = $request->input('apellidomaestro');
        $titulo = $request->input('titulo');
        $profesor->update([
            'nombre' => $nombre,
            'apellido' => $apellido,
            'titulo' => $titulo,
        ]);
        $Profesores = Profesor::all();
        $res = "Se ha actualizado un profesor";
        return view('Maestros.listamaestros', compact('Profesores'))->with('res',$res);
    }
}