@extends('livewire.plantilla-main')
 
@section('contenido')
<hr>
<h1>Nueva clase</h1>
<form class="alert alert-secondary" action="{{url('/clases/guardar')}}" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="nombreclase">Nombre:</label>
        <input style="width: 40%" type="text" class="form-control" name="nombreclase" placeholder="Ingrese el nombre de la clase" required>
     </div>
    <div class="form-group">
        <label for="creditoclase">Credito:</label>
        <input class="form-control"  name="creditoclase" type="number" style="width: 20%" min="1" max="10" placeholder="N° de creditos" required>
    </div>
        <input class="btn btn-success" type="submit" value="Agregar Clase" name="addclase" required>
    </form>
@endsection
