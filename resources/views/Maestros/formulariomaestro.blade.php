@extends('livewire.plantilla-main')
 
@section('contenido')
<hr>
<h1>Nuevo Profesor</h1>
<form class="alert alert-secondary" action="{{url('/maestros/guardar/')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="idmaestro">Nombre:</label>
        <input style="width: 40%" type="text" class="form-control" name="nombremaestro" placeholder="Ingrese el nombre del maestro" required>
     </div>
        <div class="form-group">
            <label for="titulo">Titulo:</label>
            <select style="width: 20%" class="form-control" name="titulo" required>
                <option value="LIC" selected>LIC</option>
                <option value="ING">ING</option>
                <option value="DOC">DOC</option>
                <option value="MSC">MSC</option>
            </select>
        </div>
    <div class="form-group">
        <label for="apellidomaestro">apellido:</label>
        <input style="width: 40%" type="text" class="form-control" name="apellidomaestro" placeholder="Ingrese el apellido" required>
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
        <input  class="btn btn-success" type="submit" value="Agregar Maestro" name="addprof" required>
    </form>
@endsection