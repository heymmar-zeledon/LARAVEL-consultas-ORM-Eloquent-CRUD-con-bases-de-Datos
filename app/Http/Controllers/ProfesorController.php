<?php

namespace App\Http\Controllers;
use App\Models\Clase;
use App\Models\Aula;
use Illuminate\Http\Request;
use App\Models\Profesor;
use Exception;
use PhpParser\Node\Stmt\TryCatch;

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

    public function mostrar_relaciones()
    {
        $Profesors = Profesor::all();
        $res = null;
        return view('ListaDetallada',compact('Profesors'))->with('res',$res);
    }

    public function NuevaRelacion($idrelacion)
    {
        $clases = Clase::all();
        $aulas = Aula::all();
        $profesorRelacion = Profesor::find($idrelacion);
        return view('RelacionNueva',compact('profesorRelacion','clases','aulas'));
    }

    public function añadirRelacion(Request $request, $idd)
    {
        if($request->isMethod("post") && $request->has("addrelation"))
        {
            $profesorNewRelation = Profesor::find($idd);
            $clase = $request->input('clase');
            $aula = $request->input('aula');
            $valclass = false;
            $valaula = false;
            foreach($profesorNewRelation->clases as $class)
            {
                if($class->id == $clase)
                {
                    $valclass = true;
                    break;
                }
            }
            foreach($profesorNewRelation->aulas as $auls)
            {
                if($auls->id == $aula)
                {
                    $valaula = true;
                    break;
                }
            }
            if($valclass == true && $valaula == true)
            {
                $r = "Relacion existente!! ingrese otra relacion diferente";
                $Profesors = Profesor::all();
                return view('ListaDetallada',compact('Profesors'))->with('res',$r);
            }
            else
            {
                try{
                    $profesorNewRelation->clases()->attach($clase,['aula_id' => $aula]);
                }catch(Exception $err)
                {
                    $Profesors = Profesor::all();
                    return view('ListaDetallada',compact('Profesors'))->with('res',$err);
                }
                $r = "Se ha agregado una nueva relacion con exito!!";
                $Profesors = Profesor::all();
                return view('ListaDetallada',compact('Profesors'))->with('res',$r);
            }
        }
    }

    public function EliminarRelacion($idprofesor, $idclase, $idaula, $id)
    {
        $prof = Profesor::find($idprofesor);
        $prof->clases()->where('clases.id',$idclase)->wherePivot('id',$id)->detach();
        $Profesors = Profesor::all();
        $r = "Se ha eliminado una relacion!!";
        return view('ListaDetallada',compact('Profesors'))->with('res',$r);
    }
}