@extends('livewire.plantilla-main')
@section('contenido')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<a type="button" class="btn btn-success" href="{{url('/aulas/nueva')}}">Nueva aula</a>&nbsp;&nbsp;&nbsp;
<hr>

<table class="table table-bordered text-center">
    <tr><th class="border border-primary" colspan="4"><h3>Aulas</h3></th></tr>
    <tr><th class="border border-success">IDs</th><th class="border border-success">Nombres</th><th class="border border-success">Ubicaciones</th><th class="border border-success">Operaciones</th></tr>
    @forelse($Aulas as $aula)
    <tr>
        <td class="border border-secondary">
            {{$aula->id}}
        </td>
        <td>
            {{$aula->nombre}}
        </td>
        <td> 
            {{$aula->ubicacion}}
        </td>
        <th class="border border-danger">
            <a href="{{url('/aulas/eliminar/'.$aula->id)}}" class="btn btn-danger">Borrar</a>&nbsp;&nbsp;
            <a href="{{url('/aulas/actualizar/'.$aula->id)}}" class="btn btn-primary">Editar</a>
        </th>
    </tr>
    @empty
        <p>No hay Registros<p>
    @endforelse
</table>
@endsection