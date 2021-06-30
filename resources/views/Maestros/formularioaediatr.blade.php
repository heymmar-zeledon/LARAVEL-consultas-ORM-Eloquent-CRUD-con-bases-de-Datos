@extends('ejemploplantilla')
 
@section('contenido')
<hr>
<h1>Editar profesor</h1>
<form action="{{url('/maestros/actualizar/'.$profesor->id)}}" method="post">
    {{csrf_field()}}
        <h5 class="card-title">ID: {{$profesor->id}}</h5>
        Nombre: <input type="text" name="nombremaestro" value="{{$profesor->nombre}}"<?php echo "readonly"?> ><br><br>
        Apellido:<input type="text" name="apellidomaestro" value="{{$profesor->apellido}}"><br><br>
        <!--Titulo: <input type="text" name="titulomaestro" value="{{$profesor->titulo}}">&nbsp;&nbsp;&nbsp;-->

        <?php

        $tit = $profesor->titulo;

        ?>
        @switch($tit)

        @case("LIC")
        titulo: <select name="titulo" required>
            <option value="LIC" selected>LIC</option>
            <option value="ING">ING</option>
            <option value="DOC">DOC</option>
            <option value="MSC">MSC</option>
        </select>

        @break;

        @case("ING")
        titulo: <select name="titulo" required>
            <option value="LIC">LIC</option>
            <option value="ING" selected>ING</option>
            <option value="DOC">DOC</option>
            <option value="MSC">MSC</option>
        </select>
        @break;

        @case("DOC")
        titulo: <select name="titulo" required>
            <option value="LIC">LIC</option>
            <option value="ING">ING</option>
            <option value="DOC" selected>DOC</option>
            <option value="MSC">MSC</option>
        </select>
        @break;

        @case("MSC")
        titulo: <select name="titulo" required>
        <option value="LIC">LIC</option>
        <option value="ING">ING</option>
        <option value="DOC" >DOC</option>
        <option value="MSC" selected>MSC</option>
        </select>
        @break;

        @default
        "ERROR INESPERADISIMO!";
        @break;
        @endswitch
            <p class="card-text"> </p>
        <input class="btn btn-primary" type="submit" value="Actualizar maestro" name="addprof" required>

</form>
@endsection