@extends('livewire.plantilla-main')

@section('contenido')
<a type="button" class="btn btn-success" href="{{url('/maestros/nuevo')}}">Nuevo</a>
<hr>

    <br/>
        <table class='table table-bordered'>
            <tr><th colspan="4"> <b><h4>Vista de Relaciones:</h4></b></th></tr>
            <tr>
            <th scope='col'> Profesor </th>
            <th scope='col'> Clases </th>
            <th scope='col'> Aula </th>
        </tr> 
        @forelse($Profesors as $profesor)
            <tr>
                <td align='center'> 
                <strong>{{$profesor->nombre}}<strong>
                </td>
                <td> 
                    @foreach ($profesor->clases as $clase)
                        <article>
                            <p>{{"-".$clase->nombre}}</p>
                        </article>
                    @endforeach
                </td>
                <td> 
                    @foreach ($profesor->aulas as $aula)
                        <article>
                            <p>{{"-".$aula->nombre}}</p>
                        </article>
                    @endforeach
                </td>
            </tr>
            @empty
            <p>!No hay Registros<p>
        @endforelse
    </table>
@endsection