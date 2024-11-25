@extends('layouts/admin-template')
@section('title', 'Administrador - Users')

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

@section('content')
<div class="my-4 d-flex justify-content-center">
    <span class="h1 bg-success-subtle border rounded border-3 border-success p-1">Lista de Usuarios</span>
</div>

<div class="m-3">
    <a class='btn btn-success m-2' href='#' data-bs-toggle='modal' data-bs-target='#AgregarUsuario'>Agregar Usuario</a>
    <div class="">
        <div class="d-flex">
            <table class="table table-success table-striped text-center table-bordered border-success">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Cooldown</th>
                        <th scope="col">Fecha de Creación</th>
                        <th scope="col">Fecha de Actualización</th>
                        <th scope="col"> ------- </th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach($users as $user)
                    @if($user->nombre == 'superadmin')
                        @continue
                    @endif
                        <tr>
                            <td>{{$user->nombre}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->ciudad}}</td>
                            <td>{{$user->rol}}</td>
                            <td>{{$user->estado}}</td>
                            <td>{{$user->cooldown}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td>
                                <div class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Opciones </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item text-warning" href="{{route('userProfile', ['id'=>$user->id])}}">Ver Perfil</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal' data-bs-target='#EditarUsuario{{$user->id}}'>Modificar</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal' data-bs-target='#EliminarUsuario{{$user->id}}'>Eliminar</a></li>
                                    </ul>
                                    @include('components/modals/edit/edit-user')
                                    @include('components/modals/delete/delete-user')
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @include('components/modals/add/add-user')
        </div>

        {{-- <div class="container col-3 align-self-start bg-success-subtle p-2 rounded-2">
            <div class="d-flex justify-content-center">
                <span class="h5 ">Agregados Recientemente</span>
            </div>
            <ol class="list-group list-group list-group-flush">
                {% for reciente in recientes %}
                <li class="list-group-item">
                    <span>{reciente.1}</span>
                </li>
                {% endfor %}
            </ol>
        </div> --}}
    </div>
</div>
@endsection