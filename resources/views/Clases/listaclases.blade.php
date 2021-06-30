@extends('livewire.plantilla-main')
 
@section('contenido')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<a type="button" class="btn btn-success" href="{{url('/clases/nueva')}}">Nueva clase</a>&nbsp;&nbsp;&nbsp;
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
            <a href="{{url('/clases/eliminar/'.$clase->codclase)}}" class="btn btn-danger">Borrar</a>&nbsp;
            <a href="{{url('/clases/actualizar/'.$clase->codclase)}}" class="btn btn-primary">Editar</a>
        </th>
    </tr>
    @empty
        <p>No hay Registros<p>
    @endforelse
</table>
@endsection






