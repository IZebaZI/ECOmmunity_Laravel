@extends('layouts/user-template')
@section('title', 'Publicación [Nombre]')

@section('messages')

@endsection

@section('content')
<div class="d-flex mx-5 my-3">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-9 col-md-12 col-sm-12 mb-4">
            <div class="card">
                <img>
                <div class="card-body d-flex bg-success-subtle">
                    <b class="fs-5 text-dark">Titulo Publicación - Usuario</b>
                    <p class="fs-5 text-dark mb-0 ms-auto">Fecha</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <p class="d-flex fs-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum veniam delectus soluta ratione iste cupiditate nemo eaque reiciendis assumenda magnam a labore, at quaerat dicta pariatur. Eligendi totam ab minus! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur sapiente dolor aliquid porro deserunt voluptas nihil nam animi iure unde quidem facere aliquam, nemo similique id aperiam. Saepe, repellat nulla? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt provident maxime facere similique.
                        </p>
                        <div class="text-center">
                            <img src="{{asset('img/paisaje.jpg')}}" alt="" class="rounded-3" style="height: 50%; width: 50%;">
                        </div>
                    </li>
                    <div class="list-group-item">
                        <b class="fs-5 text-info ms-1 me-2">Links</b>
                        <a href="" class="ms-2 link-danger link-underline-opacity-25 link-underline-opacity-100-hover">Youtube</a>
                        <a href="" class="ms-2 link-info link-underline-opacity-25 link-underline-opacity-100-hover">Facebook</a>
                        <a href="" class="ms-2 link-secondary link-underline-opacity-25 link-underline-opacity-100-hover">TikTok</a>
                    </div>
                    
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-sm-4">
            <div class="card">
                <img>
                <div class="card-body text-center">
                    <img src="{{asset('img/profile.jpg')}}" class="card-img-top img-fluid p-3" alt="...">
                    <h5 class="card-title">Nombre de Usuario</h5>
                    <p class="card-text mb-2">Ciudad: Queretaro</p>
                    <b class="card-text mb-1">Redes Sociales:</b>
                    <p class="card-text mb-1"><i class="bi bi-facebook"></i> Facebook</p>
                    <p class="card-text mb-1"><i class="bi bi-instagram"></i> Instagram</p>
                    <p class="card-text mb-1"><i class="bi bi-twitter"></i> Twitter</p>
                </div>
                <div class="card-body text-center bg-success-subtle">
                    <a href="{{route('guestUserProfile')}}" class="card-link">Ver Perfil</a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-9 col-sm-8">
            <div class="card">
                <img>
                <div class="card-body d-flex bg-success-subtle">
                    <h5 class="card-title m-auto">Comentarios</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('img/profile.jpg')}}" alt="" class="rounded-3" style="height: 40px; width: 40px;">
                            <b class="fs-5 text-success ms-3">Usuario</b>
                            <p class="fs-5 text-secondary mb-0 ms-auto">Fecha</p>
                        </div>
                        <p class="d-flex"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quos repudiandae quam iste recusandae</p>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('img/profile.jpg')}}" alt="" class="rounded-3" style="height: 40px; width: 40px;">
                            <b class="fs-5 text-success ms-3">Usuario</b>
                            <p class="fs-5 text-secondary mb-0 ms-auto">Fecha</p>
                        </div>
                        <p class="d-flex"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quos repudiandae quam iste recusandae</p>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('img/profile.jpg')}}" alt="" class="rounded-3" style="height: 40px; width: 40px;">
                            <b class="fs-5 text-success ms-3">Usuario</b>
                            <p class="fs-5 text-secondary mb-0 ms-auto">Fecha</p>
                        </div>
                        <p class="d-flex"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quos repudiandae quam iste recusandae</p>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('img/profile.jpg')}}" alt="" class="rounded-3" style="height: 40px; width: 40px;">
                            <b class="fs-5 text-success ms-3">Usuario</b>
                            <p class="fs-5 text-secondary mb-0 ms-auto">Fecha</p>
                        </div>
                        <p class="d-flex"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quos repudiandae quam iste recusandae</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>
@endsection