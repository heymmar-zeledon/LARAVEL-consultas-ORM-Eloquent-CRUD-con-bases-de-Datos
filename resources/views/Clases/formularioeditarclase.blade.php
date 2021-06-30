@extends('livewire.plantilla-main')
 
@section('contenido')
<hr>
<h1>Editar clase</h1>
<form class="alert alert-secondary" action="{{url('/clases/actualizar/'.$clase->id)}}" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="idclase">ID:</label>
        <input style="width: 20%" type="text" value="{{$clase->id}}" class="form-control" name="idclase" readonly required>
     </div>
    <div class="form-group">
        <label for="nombreclase">Nombre:</label>
        <input style="width: 40%" value="{{$clase->nombre}}" type="text" class="form-control" name="nombreclase" placeholder="Ingrese el nombre de la clase" required>
     </div>
    <div class="form-group">
        <label for="creditoclase">Credito:</label>
        <input class="form-control"  value="{{$clase->credito}}" name="creditoclase" type="number" style="width: 20%" min="1" max="10" placeholder="N° de creditos" required>
    </div>
        <input class="btn btn-primary" type="submit" value="Actualizar Clase" name="addclase" required>
    </form>
@endsection
