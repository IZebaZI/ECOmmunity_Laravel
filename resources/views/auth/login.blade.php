@extends('layouts/guest-template')
@section('title', 'Bienvenido a ECOmmunity')

@section('messages')
    @session('message')
    <div class="alert alert-success" role="alert">
        {{$value}}
    </div>
    @endsession
    @session('error')
    <div class="alert alert-danger" role="alert">
        {{$value}}
    </div>
    @endsession
@endsection

@section('card-content')

<span class="h1 mt-2 justify-content-center">Inicio de Sesión</span>
<div class="mt-4">
    <form action="{{route('access')}}" method="GET">
        <div class="">
            <label for="email" class="mb-2">Correo</label>
            <div class="">
                <input id="email" type="email" class="form-control" name="txtEmail" value="{{old('txtEmail')}}" required autocomplete="email" autofocus>
                <small class="text-danger fst-italic">{{$errors->first('txtEmail')}}</small>
            </div>
        </div>
    
        <div class="">
            <label for="password" class="mt-3">Contraseña</label>
    
            <div class="">
                <input id="password" type="password" class="form-control" name="txtPassword" value="{{old('txtPassword')}}" required autocomplete="current-password">
                <small class="text-danger fst-italic">{{$errors->first('txtPassword')}}</small>
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