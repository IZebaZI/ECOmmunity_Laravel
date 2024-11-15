@extends('layouts/user-template')
@section('title', 'Community - Home')

@section('messages')

@endsection

@section('content')
<div class="mt-3 d-flex justify-content-center">
    <span class="h1 bg-success-subtle border rounded border-3 border-success p-1">Puntos de recolección</span>
</div>

<div class="p-3">

    <div class="d-flex justify-content-center">
        <div class="col-9 rounded-2 border border-2 border-success">
            {mapa|safe}
        </div>
    </div>

    
    <div class="row mt-5 justify-content-center flex">

        <div class="col-sm-5">
            <div class="card mb-3 rounded">
                <h5 class="card-header border border-success border-2 bg-success-subtle">{ punto[1]}</h5>
                <div class="card-body border border-success border-2 border-top-0">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <div class="d-flex">
                                <i class="bi bi-geo-alt-fill me-2"></i>
                                <span class="card-title me-2 fw-bold">Ubicación:</span>
                                <p class="card-text">{ punto[2] }</p>
                            </div>
                            <div class="d-flex">
                                <i class="bi bi-clock-fill me-2"></i>
                                <span class="card-title me-2 fw-bold">Horarios:</span>
                                <p class="card-text">
                                    {% for horario in horarios %}
                                        {% if punto.0 == horario.0 %}
                                            {horario.2} | {horario.3} - {horario.4}<br>
                                        {% endif %}
                                    {% endfor %}</p>
                            </div>
                            <!-- <div class="d-flex">
                                <i class="bi bi-calendar-event-fill me-2 "></i>
                                <span class="card-title me-2 fw-bold">Días de atención:</span>
                                <p class="card-text">{ punto[5] }</p>
                            </div> -->
                        </div>

                        <div class="flex justify-content-center row p-2 w-50">
                            
                            <form action="/puntosRecoleccion/{ punto[0] }" method="POST">

                                <input type="text" name="txtLong" value="{ punto[3] }" hidden>
                                <input type="text" name="txtLat" value="{ punto[4] }" hidden>
                                
                                <button class="btn text-danger botonMostrar ms-5" type="submit" id="{punto[0]}" >
                                    Mostrar en el mapa
                                    <i class="bi bi-box-arrow-up-right ms-2"></i>
                                </button>
                            </form>
                            
                                
                            <div class="d-flex justify-content-center align-text-bottom">
                                <a class="text-warning align-text-bottom" href='#' data-bs-toggle='modal' data-bs-target='#AgregarRecoleccion'>Agendar Recolección</a>
                                @include('components/modals/add/add-pickup')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection