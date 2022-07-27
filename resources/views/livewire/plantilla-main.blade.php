@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<div class="container">
    <div class="a1">
        <H4 class="border border-success" id="h4"> BASES DE DATOS RELACIONALES</H4>
        <a type="button" class="btn btn-primary" style="width:40%;" href="{{url('/')}}">Home</a>
    </div>
</div>
<br>
<div class="container flex">
        @yield('contenido')
</div>
@endsection
