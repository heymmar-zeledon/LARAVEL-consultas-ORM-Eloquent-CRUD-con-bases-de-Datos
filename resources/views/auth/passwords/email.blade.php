@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Recuperar contraseña') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <p style="color:cadetblue">Para resetear tu contraseña favor de mandar un correo al administrador a la siguiente direccion:
                            Eliazithzeledon27@gmail.com por favor adjuntar en el mensaje la contraseña nueva y el usuario.
                        </p>
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" >
                                    <a class="nav-link" style="color:white;padding-right: 5px; padding-left: 5px" href="{{ route('login') }}">{{ __('Confirmar') }}</a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
