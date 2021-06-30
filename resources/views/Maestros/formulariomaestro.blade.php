@extends('ejemploplantilla')
 
@section('contenido')
@if ($res != null)
    <div class="alert alert-danger" role="alert">
        {{$res}}
    </div>
@endif
<hr>
<h1>Nuevo Profesor</h1>
<form action="{{url('/maestros')}}" method="post">
    {{csrf_field()}}
        id: <input type="text" name="idmaestro" required>
        nombre: <input type="text" name="nombremaestro" required>
        apellido: <input type="text" name="apellidomaestro" required>
        titulo: <select name="titulo" required>
            <option value="LIC" selected>LIC</option>
            <option value="ING">ING</option>
            <option value="DOC">DOC</option>
            <option value="MSC">MSC</option>
        </select>
        <br>
        <br>
        <input  class="btn btn-success" type="submit" value="Agregar Maestro" name="addprof" required>
    </form>
@endsection