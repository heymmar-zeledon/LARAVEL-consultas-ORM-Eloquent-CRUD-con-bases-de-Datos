@extends('ejemploplantilla')
 
@section('contenido')
@if ($res != null)
<div class="alert alert-danger" role="alert">
    {{$res}}
</div>
@endif
<hr>
<h1>Nueva clase </h1>
<form action="{{url('/clases/guardar')}}" method="POST">
    {{csrf_field()}}

    Codclase: <input type="text" name="codclase" required>
    Nombre: <input type="text" name="nombreclase" required>
    Credito: <input type="text" name="creditoclase" required>

    &nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn-success" type="submit" value="Agregar Clase" name="addclase" required>
</form>
@endsection