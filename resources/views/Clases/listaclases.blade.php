@extends('livewire.plantilla-main')
 
@section('contenido')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@if ($res == "Se guardo una nueva clase con exito!!")
    <div class="alert alert-success" role="alert">
        {{$res}}
    </div>
@endif
@if ($res == "Se ha eliminado una clase")
    <div class="alert alert-danger" role="alert">
        {{$res}}
    </div>
@endif
@if ($res == "Se ha actualizado una clase")
    <div class="alert alert-info" role="alert">
        {{$res}}
    </div>
@endif
<a type="button" class="btn btn-success" href="{{url('/clases/nueva')}}">Nueva clase</a>
<a type="button" class="btn btn-info" href="{{url('/maestros/relaciones/')}}">Ver Relaciones</a>
<hr>
<table class="table table-bordered text-center">
    <tr><th class="border border-primary" colspan="4"><h3>Clases</h3></th></tr>
    <tr><th class="border border-success">IDs clase</th><th class="border border-success">Nombres</th><th class="border border-success">creditos</th><th class="border border-success">Operaciones</th></tr>
    @forelse($Clases as $clase)
    <tr>
        <td class="border border-secondary">
            {{$clase->id}}
        </td>
        <td>
            {{$clase->nombre}}
        </td>
        <td> 
            {{$clase->credito}}
        </td>
        <th class="border border-danger">
            <a href="{{url('/clases/eliminar/'.$clase->id)}}" class="btn btn-danger">Borrar</a>&nbsp;
            <a href="{{url('/clases/editar/'.$clase->id)}}" class="btn btn-primary">Editar</a>
        </th>
    </tr>
    @empty
        <p>No hay Registros<p>
    @endforelse
</table>
@endsection






