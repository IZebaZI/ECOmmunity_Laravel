@extends('layouts/admin-template')
@section('title', 'Administrador - Companies')

@section('messages')

@endsection

@section('content')
<div class="my-4 d-flex justify-content-center">
    <span class="h1 bg-success-subtle border rounded border-3 border-success p-1">Lista de Empresas</span>
</div>

<div class="m-3">
    <a class='btn btn-success m-2' href='#' data-bs-toggle='modal' data-bs-target='#CrearEmpresa'>Agregar Empresa</a>
    <div class="d-flex">
        <div class="container col-9">
            <table class="table table-success table-striped text-center table-bordered border-success">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tipos de Reciclaje</th>
                        <th scope="col">Ubicación</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Fecha de creación</th>
                        <th scope="col"> ------- </th>
                    </tr>
                </thead>
                <tbody class="text-center">

                    <tr>
                        <td>{empresa.1}</td>
                        <td>
                            {% for tipo in tipos %}
                                {% if tipo.2 == empresa.0 %}
                                    {tipo.1}<br>
                                {% endif %}
                            {% endfor %}
                        </td>
                        <td>{empresa.2}</td>
                        <td>{empresa.3}</td>
                        <td>{empresa.4}</td>
                        <td>{empresa.5}</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Opciones </a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal' data-bs-target='#EditarEmpresa'>Modificar</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal' data-bs-target='#EliminarEmpresa'>Eliminar</a></li>
                                </ul>
                                @include('components/modals/add/add-company')
                                @include('components/modals/edit/edit-company')
                                @include('components/modals/delete/delete-company')
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
        <div class="container col-3 align-self-start bg-success-subtle p-2 rounded-2">
            <div class="d-flex justify-content-center">
                <span class="h5 ">Agregadas Recientemente</span>
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