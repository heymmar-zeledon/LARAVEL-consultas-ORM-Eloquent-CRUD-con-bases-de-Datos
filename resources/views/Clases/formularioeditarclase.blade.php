@extends('ejemploplantilla')
 
@section('contenido')
<h1>Editar Clase</h1>
<form action="{{url('/clases/actualizar/'.$clase->codclase)}}" method="POST">
    {{csrf_field()}}
                <h6 class="card-title">Codigo de la clase: {{$clase->codclase}}</h6>
                Nombre: <input type="text" name="nombreclase" value="{{$clase->nombre}}" style="width: 40%;"><br><br>
                Credito:  <input type="text" name="creditoclase" value="{{$clase->credito}}"><br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn-primary" type="submit" value="Actualizar Clase" name="addclase" required>
</form>
@endsection