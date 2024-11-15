@extends('layouts/admin-template')
@section('title', 'Administrador - Users')

@section('messages')

@endsection

@section('content')
<div class="my-4 d-flex justify-content-center">
    <span class="h1 bg-success-subtle border rounded border-3 border-success p-1">Lista de Usuarios</span>
</div>

<div class="m-3">
    <a class='btn btn-success m-2' href='#' data-bs-toggle='modal' data-bs-target='#AgregarUsuario'>Agregar Usuario</a>
    <div class="d-flex">
        <div class="container col-9">
            <table class="table table-success table-striped text-center table-bordered border-success">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Ubicación</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Fecha de Creación</th>
                        <th scope="col"> ------- </th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    
                    <tr>
                        <td>{usuario.1}</td>
                        <td>{usuario.2}</td>
                        <td>{usuario.3}</td>
                        <td>{usuario.4}</td>
                        <td>{usuario.5}</td>
                        <td>{usuario.6}</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Opciones </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item text-warning" href="{{route('userProfile')}}">Ver Perfil</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal' data-bs-target='#EditarUsuario'>Modificar</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal' data-bs-target='#EliminarUsuario'>Eliminar</a></li>
                                </ul>
                                @include('components/modals/add/add-user')
                                @include('components/modals/edit/edit-user')
                                @include('components/modals/delete/delete-user')
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="container col-3 align-self-start bg-success-subtle p-2 rounded-2">
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
        </div>
    </div>
</div>
@endsection