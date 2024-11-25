@extends('layouts/user-template')
@section('title', 'Community - Home')

@section('messages')

@endsection

@section('content')
<div class="container px-2" id="custom-cards">
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch pt-4 pb-4 g-2">
        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg blog-img">
                <div class="d-flex d-flex align-items-start align flex-column h-100 p-3 pb-2 text-shadow-1">
                    <h3 class="mt-auto lh-1 p-3 fw-bold text-center text-black bg-success-subtle border border-3 border-success rounded-3">Blogs</h3>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg tutorial-img">
                <div class="d-flex d-flex align-items-center align flex-column h-100 p-3 pb-2 text-shadow-1">
                    <h3 class="mt-auto lh-1 p-3 fw-bold text-center text-black bg-success-subtle border border-3 border-success rounded-3">Tutoriales</h3>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg ideas-img">
                <div class="d-flex d-flex align-items-end align flex-column h-100 p-3 pb-2 text-shadow-1">
                    <h3 class="mt-auto lh-1 p-3 fw-bold text-center text-black bg-success-subtle border border-3 border-success rounded-3">Tips</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container d-flex mb-2">
    <button class="btn btn-light mb-1 me-3">Más Vistos</button>
    <button class="btn btn-light mb-1 me-3">Más Comentados</button>
    <button class="btn btn-light mb-1 me-3">Más Recientes</button>
    <button class="btn btn-success mb-1 ms-auto" data-bs-toggle="modal" data-bs-target="#crearPublicacion">+ Crear Publicación</button>
    @include('components/modals/add/add-post')
</div>

<div class="container">
    <div class="row d-flex justify-content-center gx-4">
        <div class="col-md-8 mb-4">
            <div class="card">
                <img>
                <div class="card-body d-flex bg-success-subtle">
                    <h5 class="card-title m-auto">Publicaciones</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('img/profile.jpg')}}" alt="" class="rounded-3" style="height: 40px; width: 40px;">
                            <b class="fs-5 text-success ms-3">Titulo Publicación - Usuario</b>
                            <p class="fs-5 text-secondary mb-0 ms-auto">Fecha</p>
                        </div>
                        <p class="d-flex"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quos repudiandae quam iste recusandae</p>
                        <i class="bi bi-plus-square-fill me-2 text-success fs-6"></i><a href="{{route('guestPostView')}}" class="card-link">Ver más</a>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex">
                            <img src="{{asset('img/profile.jpg')}}" alt="" class="rounded-3" style="height: 40px; width: 40px;">
                            <b class="fs-5 text-success ms-3">Titulo Publicación - Usuario</b>
                            <p class="fs-5 text-secondary mb-0 ms-auto">Fecha</p>
                        </div>
                        <p class="d-flex"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quos repudiandae quam iste recusandae</p>
                        <i class="bi bi-plus-square-fill me-2 text-success fs-6"></i><a href="{{route('guestPostView')}}" class="card-link">Ver más</a>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex">
                            <img src="{{asset('img/profile.jpg')}}" alt="" class="rounded-3" style="height: 40px; width: 40px;">
                            <b class="fs-5 text-success ms-3">Titulo Publicación - Usuario</b>
                            <p class="fs-5 text-secondary mb-0 ms-auto">Fecha</p>
                        </div>
                        <p class="d-flex"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quos repudiandae quam iste recusandae</p>
                        <i class="bi bi-plus-square-fill me-2 text-success fs-6"></i><a href="{{route('guestPostView')}}" class="card-link">Ver más</a>
                    </li>
                </ul>
                <div class="card-body text-center">
                    <a href="#" class="btn btn-info">Mostrar Más</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12">
            <div class="card mb-5">
                <img>
                <div class="card-body d-flex justify-content-between bg-success-subtle">
                    <h5 class="card-title m-auto">Mejores Publicaciones</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <b class="fs-5 text-success">Titulo Publicación</b>
                            <p class="fs-5 text-secondary">Fecha</p>
                        </div>
                        <p class="d-flex"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quos repudiandae quam iste recusandae
                        </p>
                        <a href="{{route('guestPostView')}}" class="card-link">Mostrar publicación</a>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <b class="fs-5 text-success">Titulo Publicación</b>
                            <p class="fs-5 text-secondary">Fecha</p>
                        </div>
                        <p class="d-flex"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quos repudiandae quam iste recusandae</p>
                        <a href="{{route('guestPostView')}}" class="card-link">Mostrar publicación</a>
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