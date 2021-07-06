@extends('livewire.plantilla-main')

@section('contenido')
@if ($res != null && $res == "Relacion existente!! ingrese otra relacion diferente")
    <div class="alert alert-warning" role="alert">
        {{$res}}
    </div>
@endif
@if ($res != null && $res == "Se ha eliminado una relacion!!")
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
            <tr><th class="border border-secondary" colspan="6"> <b><h4>Vista de Relaciones:</h4></b></th></tr>
            <tr>
            <th class="border border-warning" scope='col'> Profesor </th>
            <th class="border border-warning" scope='col'> Clases </th>
            <th class="border border-warning" scope='col'> Aulas </th>
            <th class="border border-warning" scope='col'> Relacion </th>
        </tr> 
        @forelse($Profesors as $profesor)
            <tr>
                <td class="border border-info"> 
                <strong>{{$profesor->id."- ".$profesor->nombre}}<strong>
                <input type="hidden" name="profesor_id" value="{{$profesor->id}}">
                </td>
                <td class="border border-info"> 
                @php
                    $arr = array();
                @endphp
                    @foreach ($profesor->clases as $clase)
                        <article>
                            @php
                                array_push($arr,$clase->id);
                            @endphp
                            <p><strong>{{"N°".$clase->pivot->id }}</strong>{{"__".$clase->id."- ".$clase->nombre}}</p>
                        </article>
                    @endforeach
                </td>
                <td class="border border-info"> 
                    @php
                        $cont = 0;
                    @endphp
                    @foreach ($profesor->aulas as $aula)
                        <article>
                            <p><strong>{{"N°".$aula->pivot->id }}</strong>{{"__".$aula->id."- ".$aula->nombre}}&nbsp;&nbsp;<a href="{{asset('/maestros/eliminarRelacion/'.$profesor->id.'/'.$arr[$cont].'/'.$aula->id.'/'.$aula->pivot->id.'/')}}" class="text-danger">>>Eliminar Relacion</a></p>
                        </article>
                        @php
                            $cont++;
                        @endphp
                    @endforeach
                </td>
                <td class="border border-info text-center">
                    <a href="{{asset('/maestros/NuevaRelacion/'.$profesor->id)}}" class="btn btn-success">Nueva</a>
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
            <td class="border border-success">
                <a href="{{asset('/maestros')}}" class="btn btn-info">Home</a>
            </td>
        </tr>
    </table>
@endsection