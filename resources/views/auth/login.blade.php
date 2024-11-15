@extends('layouts/guest-template')
@section('title', 'Bienvenido a ECOmmunity')

@section('messages')

@endsection

@section('card-content')

<span class="h1 mt-2 justify-content-center">Inicio de Sesión</span>
<div class="mt-4">
    <form action="" method="POST">
        <div class="">
            <label for="email" class="mb-2">Correo</label>
            <div class="">
                <input id="email" type="email" class="form-control" name="txtEmail" value="" required autocomplete="email" autofocus>
            </div>
        </div>
    
        <div class="">
            <label for="password" class="mt-3">Contraseña</label>
    
            <div class="">
                <input id="password" type="password" class="form-control" name="txtPassword" required autocomplete="current-password">
            </div>
        </div>
    
        <div class="">
            <div class="d-flex justify-content-between">
                <a class="btn btn-link mt-3 start-0" href="">
                    ¿Olvidaste tu Contraseña?
                </a>
                
                <a class="btn btn-link mt-3 start-100" href="{{route('register')}}">
                    Regístrate
                </a>
            </div>
            
            <button type="submit" class="btn btn-success mt-3 w-100">
                Acceder
            </button>
        </div>
    </form>
</div>

@endsection