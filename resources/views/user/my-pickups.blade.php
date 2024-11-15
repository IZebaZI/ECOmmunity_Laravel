@extends('layouts/user-template')
@section('title', 'Community - Home')

@section('messages')

@endsection

@section('content')
<div class="my-4 d-flex justify-content-center">
    <span class="h1 bg-success-subtle border rounded border-3 border-success p-1">Mis Recolecciones</span>
</div>

<div class="m-3">

    <div class="d-flex justify-content-center">

        <div class="vol align-self-start col-5 bg-success-subtle p-2 rounded-2">
            {mapa|safe}
        </div>
        
    </div>
</div>



<div class="container justify-content-center mb-5 d-flex">

    <div class="row col-4 px-2 col align-self-start">

        <div class="my-4 d-flex justify-content-center">
            <span class="h5 bg-success-subtle border rounded border-3 border-success p-1">Recolecciones Pendientes</span>
        </div>
        
            <div class="col-sm-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        
                        <h5 class="card-title">Fecha: {recoleccion.2} <br> Hora: {recoleccion.3}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Punto de recoleccion: {recoleccion.6}</h6>

                    <div class="d-flex align-middle mt-1">
                        <i class="fa-solid fa-bottle-water ms-1 me-2 mt-1"></i>
                        <span class="card-text fw-bold">Tipo: &nbsp;</span> 
                        <span class="card-text">{recoleccion.1}</span> 
                    </div>

                    <div class="d-flex align-middle mt-1">
                        <i class="bi bi-box-seam me-2"></i>
                        <span class="card-text fw-bold">Cantidad: &nbsp;</span> 
                        <span class="card-text ">{recoleccion.4} KG</span> 
                    </div>
                    
                    <div class="d-flex align-middle mt-1">
                        
                        <i class="bi bi-check-lg me-2"></i>
                        
                        
                            <span class="card-text fw-bold">Estado:</span>
                            
                            <span class="ms-2 card-text text-warning fw-bold dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">{ recoleccion[5] }</span> 

                            <ul class="dropdown-menu">
                                <form action="/editarEstadoRecoleccion/{'0'}" method="POST">
                                    <input type="text" hidden value="{ recoleccion[0] }" name="txtIdR">
                                    <li><button class="btn text-success fw-bold" type="submit">Realizada</button></li>
                                </form>

                                <form action="/editarEstadoRecoleccion/{'1'}" method="POST">
                                    <input type="text" hidden value="{ recoleccion[0]}" name="txtIdR">
                                    <li><button class="btn text-danger fw-bold" type="submit">Cancelada</button></li>
                                </form>
                            </ul>
                    </div>
                    
                    </div>
                </div>
            </div>
    </div>


    <div class="row col-4 px-2 col align-self-start">

        <div class="my-4 d-flex justify-content-center">
            <span class="h5 bg-success-subtle border rounded border-3 border-success p-1">Recolecciones Realizadas</span>
        </div>
            <div class="col-sm-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        
                        <h5 class="card-title">Fecha: {recoleccion.2} <br> Hora: {recoleccion.3}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Punto de recoleccion: {recoleccion.6}</h6>

                    <div class="d-flex align-middle mt-1">
                        <i class="fa-solid fa-bottle-water ms-1 me-2 mt-1"></i>
                        <span class="card-text fw-bold">Tipo: &nbsp;</span> 
                        <span class="card-text">{recoleccion.1}</span> 
                    </div>

                    <div class="d-flex align-middle mt-1">
                        <i class="bi bi-box-seam me-2"></i>
                        <span class="card-text fw-bold">Cantidad: &nbsp;</span> 
                        <span class="card-text ">{recoleccion.4} KG</span> 
                    </div>
                    
                    <div class="d-flex align-middle mt-1">
                        <i class="bi bi-check-lg me-2"></i>
                        <span class="card-text fw-bold">Estado: &nbsp;</span>
                        <span class="card-text text-success fw-bold">{recoleccion.5}</span> 
                    </div>
                    
                    </div>
                </div>
            </div>
    </div>


    <div class="row col-4 px-2 col align-self-start">

        <div class="my-4 d-flex justify-content-center">
            <span class="h5 bg-success-subtle border rounded border-3 border-success p-1">Recolecciones Canceladas</span>
        </div>

            <div class="col-sm-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        
                        <h5 class="card-title">Fecha: {recoleccion.2} <br> Hora: {recoleccion.3}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Punto de recoleccion: {recoleccion.6}</h6>

                    <div class="d-flex align-middle mt-1">
                        <i class="fa-solid fa-bottle-water ms-1 me-2 mt-1"></i>
                        <span class="card-text fw-bold">Tipo: &nbsp;</span> 
                        <span class="card-text">{recoleccion.1}</span> 
                    </div>

                    <div class="d-flex align-middle mt-1">
                        <i class="bi bi-box-seam me-2"></i>
                        <span class="card-text fw-bold">Cantidad: &nbsp;</span> 
                        <span class="card-text ">{recoleccion.4} KG</span> 
                    </div>
                    
                    <div class="d-flex align-middle mt-1">
                        <i class="bi bi-check-lg me-2"></i>
                        <span class="card-text fw-bold">Estado: &nbsp;</span>
                        <span class="card-text text-danger fw-bold">{recoleccion.5}</span> 
                    </div>
                    
                    </div>
                </div>
            </div>
            
    </div>
</div>
@endsection