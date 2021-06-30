@extends('livewire.plantilla-main')
 
@section('contenido')
<hr>
<h1>Editar Aula</h1>
<form class="alert alert-secondary" action="{{url('/aulas/actualizar/'.$aula_edit->id)}}" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="idaula">ID:</label>
        <input style="width: 20%" type="text" value="{{$aula_edit->id}}" class="form-control" name="idaula" readonly required>
     </div>
    <div class="form-group">
        <label for="nombreaula">Nombre:</label>
        <input style="width: 40%" value="{{$aula_edit->nombre}}" type="text" class="form-control" name="nombreaula" placeholder="Ingrese el nombre de la aula" required>
     </div>
    <div class="form-group">
        <label for="creditoclase">Ubicacion:</label>
        <input class="form-control"  value="{{$aula_edit->ubicacion}}" name="ubicacionaula" type="text" style="width: 40%" placeholder="Ingrese la ubicacion" required>
    </div>
        <input class="btn btn-primary" type="submit" value="Actualizar Aula" name="addaula">
    </form>
@endsection