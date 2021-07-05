@extends('livewire.plantilla-main')

@section('contenido')
@if ($res != null && $res =! "Se ha agregado una nueva relacion con exito!!")
    <div class="alert alert-danger" role="alert">
        {{$res}}
    </div>
@endif
@if ($res != null && $res == "Se ha agregado una nueva relacion con exito!!")
    <div class="alert alert-success" role="alert">
        {{$res}}
    </div>
@endif
<hr>
        <table class='table table-bordered'>
            <tr><th class="border border-secondary" colspan="5"> <b><h4>Vista de Relaciones:</h4></b></th></tr>
            <tr>
            <th class="border border-warning" scope='col'> Profesor </th>
            <th class="border border-warning" scope='col'> Clases </th>
            <th class="border border-warning" scope='col'> Aulas </th>
            <th class="border border-danger" scope='col'> Operaciones </th>
        </tr> 
        @forelse($Profesors as $profesor)
            <tr>
                <td class="border border-info"> 
                <strong>{{$profesor->id."- ".$profesor->nombre}}<strong>
                </td>
                <td class="border border-info"> 
                    @foreach ($profesor->clases as $clase)
                        <article>
                            <p>{{$clase->id."- ".$clase->nombre}}</p>
                        </article>
                    @endforeach
                </td>
                <td class="border border-info"> 
                    @foreach ($profesor->aulas as $aula)
                        <article>
                            <p>{{$aula->id."- ".$aula->nombre}}</p>
                        </article>
                    @endforeach
                </td>
                <td class="border border-danger text-center">
                    <a href="{{asset('/maestros/NuevaRelacion/'.$profesor->id)}}" class="btn btn-success">Nueva Relacion</a>
                </td>
            </tr>
            @empty
            <p>!No hay Registros<p>
        @endforelse
        <tr class="text-center">
            <td class="border border-success">
                <a href="{{asset('/maestros')}}" class="btn btn-primary">Ver profesores</a>
            </td>
            <td class="border border-success">
                <a href="{{asset('/clases')}}" class="btn btn-primary">Ver clases</a>
            </td>
            <td class="border border-success">
                <a href="{{asset('/aulas')}}" class="btn btn-primary">Ver aulas</a>
            </td>
            <td class="border border-danger">
                <a href="{{asset('/maestros/eliminarRelacion')}}" class="btn btn-danger">Eliminar Relacion</a>
            </td>
        </tr>
    </table>
@endsection