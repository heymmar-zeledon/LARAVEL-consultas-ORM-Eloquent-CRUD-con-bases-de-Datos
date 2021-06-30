    @extends('ejemploplantilla')
 
    @section('contenido')
    @if ($res != null)
        <div class="alert alert-danger" role="alert">
            {{$res}}
        </div>
    @endif
    <hr>
    <h1>Agregar aula</h1>
    <form action="{{url('/aulas/guardar')}}" method="POST">
        {{csrf_field()}}

        ID: <input type="text" name="idaula" required>
        Nombre: <input type="text" name="nombreaula" required>
        Ubicación: <input type="text" name="ubicacionaula" required>&nbsp;&nbsp;&nbsp;
       <input class="btn btn-success" type="submit" value="Agregar Aula" name="addaula">
    </form>
    @endsection