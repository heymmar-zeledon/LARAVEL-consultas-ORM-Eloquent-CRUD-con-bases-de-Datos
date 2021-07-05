@extends('livewire.plantilla-main')
 
@section('contenido')
<a type="button" class="btn btn-secondary" href="{{url('/maestros/relaciones/')}}">Regresar</a>
<hr>
<h1>Nueva Relacion</h1>
<form class="alert alert-secondary" action="{{url('/maestros/añadirRelacion/'.$profesorRelacion->id)}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nombremaestro">Nombre:</label>
        <input style="width: 40%" type="text" value="{{$profesorRelacion->id."- ".$profesorRelacion->nombre}}" class="form-control" name="nombremaestro" readonly required>
     </div>
    <div class="row">
        <div class="form-group col-sm-6 border border-secondary">
            <label>Clases:</label><br>
            <select style="width: 80%;" class="form-control" name="clase" required>
            @foreach ($clases as $clase) 
                <option value="{{$clase->id}}" selected>{{$clase->id}}-{{$clase->nombre}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group col-sm-6 border border-secondary pb-3">
            <label>Aulas:</label><br>
            <select style="width: 80%;" class="form-control" name="aula" required>
            @foreach ($aulas as $aula)
                <option value="{{$aula->id}}" selected>{{$aula->id}}-{{$aula->nombre}}</option>
            @endforeach
            </select>
        </div>
    </div>
        <input  class="btn btn-success" type="submit" value="Añadir relacion" name="addrelation" required>
    </form>
@endsection