@extends('layouts/admin-template')
@section('title', 'Administrador - Pickup Points')

@section('messages')

@endsection

@section('content')
<div class="my-4 d-flex justify-content-center">
    <span class="h1 bg-success-subtle border rounded border-3 border-success p-1">Puntos de recolección</span>
</div>

<div class="m-2">
    <div class="d-flex flex-row">
        <div class="container col-7 table-reponsive">
            <table class="table table-success table-striped text-center table-bordered border-success align-middle">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Ubicacion</th>
                        <th scope="col">Horario</th>
                        <th scope="col">Latitud</th>
                        <th scope="col">Longitud</th>
                        <th scope="col">-------</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    
                    <tr>
                        <td>{punto.1}</td>
                        <td>{punto.2}</td>
                        <td>
                            {% for horario in horarios %}
                                {% if punto.0 == horario.0 %}
                                {horario.2} | {horario.3} - {horario.4}<br>
                                {% endif %}
                            {% endfor %}
                        </td>
                        <td>{punto.3}</td>
                        <td>{punto.4}</td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Opciones </a>
                                <ul class="dropdown-menu">
                                    <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal' data-bs-target='#EditarPuntoR'>Modificar</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal' data-bs-target='#EliminarPuntoR'>Eliminar</a></li>
                                </ul>
                                @include('components/modals/add/add-pickup-point')
                                @include('components/modals/edit/edit-pickup-point')
                                @include('components/modals/delete/delete-pickup-point')
                            </div>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        
        <div class="col align-self-start col-5 ">
            <div class="bg-success-subtle p-2 rounded-2">
                {mapa|safe}
            </div>

            <a class='btn btn-success mt-3' href='#' data-bs-toggle='modal' data-bs-target='#CrearPuntoR'>Agregar Punto de Recolección</a>
        </div>
    </div>
</div>
@endsection