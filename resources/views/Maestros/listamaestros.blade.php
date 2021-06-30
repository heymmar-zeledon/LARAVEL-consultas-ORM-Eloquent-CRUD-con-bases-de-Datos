@extends('livewire.plantilla-main')
 
@section('contenido')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<a type="button" class="btn btn-success" href="{{url('/maestros/nuevo')}}">Nuevo</a>&nbsp;&nbsp;&nbsp;
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
        <a href="{{url('/maestros/eliminar/'.$profesor->id)}}" class="btn btn-danger">Borrar</a>&nbsp;<a href="{{url('/maestros/actualizar/'.$profesor->id)}}" class="btn btn-primary">Editar</a>
        </th>
    </tr>
    @empty
        <p>No hay Registros<p>
    @endforelse
</table>
@endsection