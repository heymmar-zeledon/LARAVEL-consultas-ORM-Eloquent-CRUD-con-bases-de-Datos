@extends('livewire.plantilla-main')
 
@section('contenido')
@if ($res != null)
    <div class="alert alert-danger" role="alert">
        {{$res}}
    </div>
@endif
<hr>
<h1>Nueva clase</h1>
<form class="alert alert-secondary" action="{{url('/aulas/guardar')}}" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="nombreaula">Nombre:</label>
        <input style="width: 40%" type="text" class="form-control" name="nombreaula" placeholder="Ingrese el nombre del aula" required>
     </div>
    <div class="form-group">
        <label for="ubicacionaula">Ubicacion:</label>
        <input class="form-control"  name="ubicacionaula" type="text" style="width: 40%" placeholder="Ingrese la ubicacion del aula" required>
    </div>
        <input class="btn btn-success" type="submit" value="Agregar Aula" name="addaula">
    </form>
@endsection