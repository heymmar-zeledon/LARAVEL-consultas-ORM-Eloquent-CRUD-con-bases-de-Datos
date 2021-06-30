@extends('livewire.plantilla-main')
 
@section('contenido')
<hr>
<h1>Editar Profesor</h1>
<form class="alert alert-secondary" action="{{url('/maestros/actualizar/'.$profesorEdit->id)}}" method="post">
    @csrf @method('patch')
    <div class="form-group">
        <label for="id">ID:</label>
        <input style="width: 10%" type="text" value="{{$profesorEdit->id}}" class="form-control" name="id" readonly required>
     </div>
     <div class="form-group">
        <label for="idmaestro">nombre:</label>
        <input style="width: 40%" type="text" value="{{$profesorEdit->nombre}}" class="form-control" placeholder="Ingrese el nombre del maestro" name="nombremaestro" required>
     </div>
        <div class="form-group">
            <label for="titulo">Titulo:</label>
            <select style="width: 20%" class="form-control" name="titulo" required>
                <option selected>{{$profesorEdit->titulo}}</option>
                <option value="LIC">LIC</option>
                <option value="ING">ING</option>
                <option value="DOC">DOC</option>
                <option value="MSC">MSC</option>
            </select>
        </div>
    <div class="form-group">
        <label for="apellidomaestro">apellido:</label>
        <input style="width: 40%" type="text" value="{{$profesorEdit->apellido}}" class="form-control" name="apellidomaestro" placeholder="Ingrese el apellido" required>
    </div>
    <input class="btn btn-primary" type="submit" value="Actualizar maestro" name="addprof" required>
</form>
@endsection