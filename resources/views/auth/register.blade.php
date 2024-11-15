@extends('layouts/guest-template')
@section('title', 'Bienvenido a ECOmmunity')

@section('messages')

@endsection

@section('card-content')

<span class="h1">Registrarse</span>
<div class="mt-2">
    <form action="" method="POST">
        <div class="">
            <label for="name" class="my-2">Nombre</label>
    
            <div class="">
                <input id="name" type="text" class="form-control" name="txtNombre" value="" required autocomplete="name" autofocus>
            </div>
        </div>

        <div class="">
            <label for="email" class="my-2">Correo</label>
    
            <div class="">
                <input id="email" type="email" class="form-control" name="txtEmail" value="" required autocomplete="email" autofocus>
            </div>
        </div>
        
        <div class="">
            <label for="ubicacion" class="my-2">Ubicacion</label>
    
            <div class="">
                <input id="ubicacion" type="text" class="form-control" name="txtUbicacion" required autocomplete="new-password">
            </div>
        </div>

        <div class="">
            <label for="password" class="my-2">Contraseña</label>
    
            <div class="">
                <input id="password" type="password" class="form-control" name="txtPassword" required autocomplete="new-password">
            </div>
        </div>

        <div class="">
            <label for="password-confirm" class="my-2">Confirmar Contraseña</label>
    
            <div class="">
                <input id="password-confirm" type="password" class="form-control" name="txtPasswordConfirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="">
            <div class="d-flex justify-content-center">
                
                <a class="btn btn-link mt-3 start-100" href="{{route('login')}}">
                    ¿Ya tienes una cuenta? Inicia sesión
                </a>
            </div>
            
            <button type="submit" class="btn btn-success mt-3 w-100">
                Registrarme
            </button>
        </div>
    </form>
</div>

@endsection