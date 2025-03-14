@extends('layouts/user-template')
@section('title', 'Community - Home')

@section('messages')

@endsection

@section('content')
<div class="container-fluid p-5">
    <div class="row g-3">
        <div class="col-md-3 col-sm-5">
            <div class="card">
                <img>
                <div class="card-body text-center">
                    <img src="{{asset('img/profile.jpg')}}" class="card-img-top img-fluid p-3" alt="...">
                    <h5 class="card-title">Nombre de Usuario</h5>
                    <p class="card-text mb-1">Correo: usuario@correo.com</p>
                    <p class="card-text">Ciudad: Queretaro</p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><span class="badge text-bg-success fs-6">100 publicaciones</span></li>
                    <li class="list-group-item"><span class="badge text-bg-primary fs-6">Primera recolección</span></li>
                    <li class="list-group-item"><span class="badge text-bg-secondary fs-6">100 KG</span></li>
                </ul>
                <div class="card-body text-center bg-success-subtle">
                    <a href="#" class="card-link">Mostrar Más</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-7">
            <div class="card">
                <img>
                <form action="/editarMiPerfil/1" method="POST">
                <div class="card-body text-center bg-success-subtle">
                    <h5 class="card-title">Mis Datos</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Nombre</span>
                            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" required pattern="\S+.*">
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Correo</span>
                            <input type="email" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" required pattern="\S+.*">
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Ubicación</span>
                            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" required pattern="\S+.*">
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Contraseña</span>
                            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" required pattern="\S+.*" minlength="8">
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Confirmar Contraseña</span>
                            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" required pattern="\S+.*" minlength="8">
                        </div>
                    </li>
                </ul>
                <div class="card-body">
                    <button href="#" type="submit" class="btn btn-success">Confirmar Cambios</button>
                </div>
            </form>
            </div>
        </div>

        <div class="col-md-5 col-sm">
            <div class="card">
                <div class="card-body d-flex justify-content-between text-center bg-success-subtle">
                    <h5 class="card-title">Mis publicaciones</h5>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#crearPublicacion">+ Crear Publicación</button>
                    @include('components/modals/add/add-post')
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <b class="fs-5 text-success">Titulo</b>
                            <p class="fs-5 text-secondary">Tipo</p>
                            <p class="fs-5 text-secondary">Fecha</p>
                        </div>
                        <p class="d-flex"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quos repudiandae quam iste recusandae, numquam qui aut ipsum ipsam architecto omnis aspernatur magni saepe beatae ad velit libero excepturi unde.</p>
                        <a href="#" class="card-link">Mostrar Más</a>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <b class="fs-5 text-success">Titulo</b>
                            <p class="fs-5 text-secondary">Tipo</p>
                            <p class="fs-5 text-secondary">Fecha</p>
                        </div>
                        <p class="d-flex"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quos repudiandae quam iste recusandae, numquam qui aut ipsum ipsam architecto omnis aspernatur magni saepe beatae ad velit libero excepturi unde.</p>
                        <a href="#" class="card-link">Mostrar Más</a>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <b class="fs-5 text-success">Titulo</b>
                            <p class="fs-5 text-secondary">Tipo</p>
                            <p class="fs-5 text-secondary">Fecha</p>
                        </div>
                        <p class="d-flex"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quos repudiandae quam iste recusandae, numquam qui aut ipsum ipsam architecto omnis aspernatur magni saepe beatae ad velit libero excepturi unde.</p>
                        <a href="#" class="card-link">Mostrar Más</a>
                    </li>
                </ul>
                <div class="card-body text-center">
                    <a href="#" class="btn btn-info">Lista Completa</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection