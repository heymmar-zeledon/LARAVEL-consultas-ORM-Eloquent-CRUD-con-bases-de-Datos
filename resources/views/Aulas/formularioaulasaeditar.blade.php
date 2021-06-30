    @extends('ejemploplantilla')
 
    @section('contenido')
    <hr>
    <h1>Editar aula</h1>
    <form action="{{url('/aulas/actualizar/'.$aula->id)}}" method="POST">
        {{csrf_field()}}
            <h5 class="card-title">ID: {{$aula->id}}</h5>
            <h3></h3>
            Nombre:  <input type="text" name="nombreaula" value="{{$aula->nombre}}"required><br><br>
            ubicacion:  <input type="text" name="ubicacionaula" value="{{$aula->ubicacion}}"required><br><br>
            <input class="btn btn-primary" type="submit" value="Actualizar Aula" name="addaula">
    </form>
    @endsection