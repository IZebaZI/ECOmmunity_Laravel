@extends('layouts/admin-template')
@section('title', 'Administrador - User Profile')

@section('messages')

@endsection

@section('content')
<div class="container-fluid p-5">
    <div class="row g-3">
        <div class="col-md-3 col-sm-4">
            <div class="card">
                <img>
                <div class="card-body text-center">
                    <img src="{{asset('img/profile.jpg')}}" class="card-img-top img-fluid p-3" alt="...">
                    <h5 class="card-title">{{$userInfo->nombre}} [ID: {{$userInfo->id}}]</h5>

                    <p class="card-text mb-2">Ciudad: {{$userInfo->ciudad}}</p>
                    <p class="card-text mb-2">Fecha de Creación: {{$userInfo->created_at}}</p>
                    <b class="card-text mb-1">Redes Sociales:</b>
                    <p class="card-text mb-1"><i class="bi bi-facebook"></i> Facebook</p>
                    <p class="card-text mb-1"><i class="bi bi-instagram"></i> Instagram</p>
                    <p class="card-text mb-1"><i class="bi bi-twitter"></i> Twitter</p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><span class="badge text-bg-success fs-6">100 publicaciones</span></li>
                    <li class="list-group-item"><span class="badge text-bg-primary fs-6">Primera recolección</span></li>
                    <li class="list-group-item"><span class="badge text-bg-secondary fs-6">100 KG</span></li>
                </ul>
                <div class="card-body text-center bg-success-subtle">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Opciones </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-warning" href="#" >Ver Más Insignias</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class='dropdown-item text-info' href='#' data-bs-toggle='modal' data-bs-target='#razonSilenciar'>Silenciar</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="#" data-bs-toggle='modal' data-bs-target='#razonSuspender'>Suspender</a></li>
                        </ul>
                        @include('components/modals/admin/ban-reason')
                        @include('components/modals/admin/cooldown-reason')
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-8">
            <div class="card">
                <img>
                <div class="card-body d-flex justify-content-between bg-success-subtle">
                    <h5 class="card-title">Publicaciones del Usuario [Cantidad]</h5>
                    <a href=""><i class="bi bi-funnel-fill fs-5"></i></a>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <b class="fs-5 text-success">Titulo [ID_Publicación]</b>
                            <p class="fs-5 text-secondary">Tipo</p>
                            <p class="fs-5 text-secondary">Fecha</p>
                        </div>
                        <p class="d-flex"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quos repudiandae quam iste recusandae, numquam qui aut ipsum ipsam architecto omnis aspernatur magni saepe beatae ad velit libero excepturi unde.</p>
                        <a href="#" class="card-link">Mostrar Más</a>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <b class="fs-5 text-success">Titulo [ID_Publicación]</b>
                            <p class="fs-5 text-secondary">Tipo</p>
                            <p class="fs-5 text-secondary">Fecha</p>
                        </div>
                        <p class="d-flex"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quos repudiandae quam iste recusandae, numquam qui aut ipsum ipsam architecto omnis aspernatur magni saepe beatae ad velit libero excepturi unde.</p>
                        <a href="#" class="card-link">Mostrar Más</a>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <b class="fs-5 text-success">Titulo [ID_Publicación]</b>
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

        <div class="col-md-3 col-sm-12">
            <div class="card">
                <img>
                <div class="card-body d-flex justify-content-between bg-success-subtle">
                    <h5 class="card-title">Comentarios [Cantidad]</h5>
                    <a href=""><i class="bi bi-funnel-fill fs-5"></i></a>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <b class="fs-5 text-success">Titulo Publicación</b>
                            <p class="fs-5 text-secondary">Fecha</p>
                        </div>
                        <p class="d-flex"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quos repudiandae quam iste recusandae [ID_Comentario]</p>
                        <a href="#" class="card-link">Mostrar publicación</a>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <b class="fs-5 text-success">Titulo Publicación</b>
                            <p class="fs-5 text-secondary">Fecha</p>
                        </div>
                        <p class="d-flex"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quos repudiandae quam iste recusandae [ID_Comentario]
                        </p>
                        <a href="#" class="card-link">Mostrar publicación </a>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <b class="fs-5 text-success">Titulo Publicación</b>
                            <p class="fs-5 text-secondary">Fecha</p>
                        </div>
                        <p class="d-flex"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quos repudiandae quam iste recusandae [ID_Comentario]</p>
                        <a href="#" class="card-link">Mostrar publicación</a>
                    </li>
                </ul>
                <div class="card-body text-center">
                    <a href="#" class="btn btn-info">Ver Más</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection