<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    @vite(['resources/css/app.css'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('title')</title>
</head>
<body class="bg-img">
    
    <div class="container d-flex justify-content-between vh-100 align-items-center">
        <div class="container col-5">
            <div class="card w-100 border border-success border-2" style="width: 18rem;">
                <div class="card-body">
                    @yield('messages')

                    <div class="d-flex justify-content-center">
                        <a> <img class="img-fluid mb-3 mt-3" src="{{asset('img/ecologo.png')}}" style="height:auto; width:32vh"> </a>
                    </div>
                    
                    @yield('card-content')
                </div>
            </div>
        </div>

        <div class="container col-5">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                        <img src="{{asset('img/carousel1.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-black">
                            <h5 class="bg-info-subtle border rounded border-3 border-primary p-1">¡Dato Curioso!</h5>
                            <p class="bg-info-subtle border rounded border-3 border-primary p-1">El vidrio es 100% reciclable y se puede utilizar una y otra vez. El reciclaje de vidrio se separa en colores porque el vidrio conserva su color incluso después de reciclado.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/carousel2.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-black">
                            <h5 class="bg-success-subtle border rounded border-3 border-success p-1">¡Otro Dato Curioso!</h5>
                            <p class="bg-success-subtle border rounded border-3 border-success p-1">La cantidad de madera y papel que se tira cada año es suficiente para calentar 50 millones de hogares durante 20 años.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/carousel3.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-black">
                            <h5 class="bg-warning-subtle border rounded border-3 border-warning p-1">¡Un Último Dato!</h5>
                            <p class="bg-warning-subtle border rounded border-3 border-warning p-1">Reciclando una lata de aluminio ayudamos a ahorrar energía suficiente para hacer funcionar un televisor durante 3 horas.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</body>
</html>