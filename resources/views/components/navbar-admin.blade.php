<!-- NAVBAR -->
<nav class="navbar p-3 opacity-75" data-bs-theme="dark" style="background-color: #003710;">
    <div class="d-flex">
        <a class="btn navbar-brand nav-link" type="button" href="/">ECOmmunity</a>
    </div>

    <!-- <form class="d-flex col-5" role="search">
        <input class="form-control me-2 bg-white" type="search" placeholder="" aria-label="Search">
        <button class="btn btn-success" type="submit">Buscar</button>
    </form> -->

    <div class="d-flex">
        <button class="btn navbar-brand" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
            aria-controls="offcanvasWithBothOptions">Menú</button>
    </div>
</nav>

<!-- SIDEBAR  -->
<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
        <h3 class="offcanvas-title fw-bold ms-3" id="offcanvasWithBothOptionsLabel">Menú</h3>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ol class="list-group list-group list-group-flush">

            <li class="list-group-item">
                <a class="btn btn-success my-3" href="{{route('usersList')}}">
                    <i class="bi bi-file-earmark-person-fill"></i>
                    Lista de usuarios</a>
            </li>

            <li class="list-group-item">
                <a class="btn btn-success my-3" href="{{route('companiesList')}}">
                    <i class="bi bi-building"></i>
                    Lista de empresas</a>
            </li>
            
            <li class="list-group-item">
                <a class="btn btn-success my-3" href="{{route('pickupPointsList')}}">
                    <i class="bi bi-geo-alt-fill"></i>
                    Puntos de recolección</a>
            </li>

            <li class="list-group-item">
                <a class="btn btn-danger my-3" href="{{route('logout')}}">
                    <i class="bi bi-box-arrow-right"></i>
                    Salir</a>
            </li>

        </ol>
    </div>
</div>