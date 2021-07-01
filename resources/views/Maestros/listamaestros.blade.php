@extends('livewire.plantilla-main')
 
@section('contenido')
@if ($res == "Se guardo un nuevo profesor con exito!!")
    <div class="alert alert-success" role="alert">
        {{$res}}
    </div>
@endif
@if ($res == "Se ha eliminado un profesor")
    <div class="alert alert-danger" role="alert">
        {{$res}}
    </div>
@endif
@if ($res == "Se ha actualizado un profesor")
    <div class="alert alert-info" role="alert">
        {{$res}}
    </div>
@endif
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<a type="button" class="btn btn-success" href="{{url('/maestros/nuevo')}}">Nuevo maestro</a>
<a type="button" class="btn btn-info" href="{{url('/maestros/relaciones/')}}">Ver Relaciones</a>
<hr>

<table class="table table-bordered text-center">
    <tr><th class="border border-primary" colspan="5"><h3>Profesores</h3></th></tr>
    <tr><th class="border border-success">IDs</th><th class="border border-success">Nombres</th><th class="border border-success">Apellidos</th><th class="border border-success">Titulos</th><th class="border border-success">Operaciones</th></tr>
    @forelse($Profesores as $profesor)
    <tr>
        <td class="border border-secondary">
            {{$profesor->id}}
        </td>
        <td>
            {{$profesor->nombre}}
        </td>
        <td>
            {{$profesor->apellido}}
        </td>
        <td> 
            {{$profesor->titulo}}
        </td>
        <th class="border border-danger">
        <a href="{{url('/maestros/eliminar/'.$profesor->id)}}" class="btn btn-danger">Borrar</a>&nbsp;<a href="{{url('/maestros/editar/'.$profesor->id)}}" class="btn btn-primary">Editar</a>
        </th>
    </tr>
    @empty
        <p>No hay Registros<p>
    @endforelse
</table>
@endsection