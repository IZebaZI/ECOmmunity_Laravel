<div class="modal fade" id="CrearPuntoR">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Agregar Punto de Recolección</h5>
            </button>
            </div>
            <form action="/agregarPunto" method="POST">   
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Ubicación</th>
                                    <th scope="col">Latitud</th>
                                    <th scope="col">Longitud</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" name="txtNombreAdd" value="" required pattern="\S+.*">
                                    </td>

                                    <td>
                                        <input type="text" class="form-control" name="txtUbicacionAdd" value="" required pattern="\S+.*">
                                    </td>

                                    <td>
                                        <input type="number" step="any" class="form-control" name="floatLatitudAdd" value="" required pattern="\S+.*">
                                    </td>

                                    <td>
                                        <input type="number" step="any" class="form-control" name="floatLongitudAdd" value="" required pattern="\S+.*">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h5 class="text-center">Días</h5>
                    <div class="container">
                        <div class="row row-cols-3 gx-5">
                            <div class="col d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="Lunes" name="check1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Lunes
                                    </label>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="Martes" name="check2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Martes
                                    </label>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="Miércoles" name="check3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Miercoles
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-6 mb-4 gx-5">
                            <div class="col pe-1">
                                <input type="time" class="form-control" name="timeStart1" value="">
                            </div>
                            <div class="col ps-1">
                                <input type="time" class="form-control" name="timeEnd1" value="">
                            </div>
                            <div class="col pe-1">
                                <input type="time" class="form-control" name="timeStart2" value="">
                            </div>
                            <div class="col ps-1">
                                <input type="time" class="form-control" name="timeEnd2" value="">
                            </div>
                            <div class="col pe-1">
                                <input type="time" class="form-control" name="timeStart3" value="">
                            </div>
                            <div class="col ps-1">
                                <input type="time" class="form-control" name="timeEnd3" value="">
                            </div>
                        </div>


                        <div class="row row-cols-3 gx-5">
                            <div class="col d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="Jueves" name="check4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Jueves
                                    </label>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="Viernes" name="check5">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Viernes
                                    </label>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="Sábado" name="check6">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Sábado
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-6 mb-4 gx-5">
                            <div class="col pe-1">
                                <input type="time" class="form-control" name="timeStart4" value="">
                            </div>
                            <div class="col ps-1">
                                <input type="time" class="form-control" name="timeEnd4" value="">
                            </div>
                            <div class="col pe-1">
                                <input type="time" class="form-control" name="timeStart5" value="">
                            </div>
                            <div class="col ps-1">
                                <input type="time" class="form-control" name="timeEnd5" value="">
                            </div>
                            <div class="col pe-1">
                                <input type="time" class="form-control" name="timeStart6" value="">
                            </div>
                            <div class="col ps-1">
                                <input type="time" class="form-control" name="timeEnd6" value="">
                            </div>
                        </div>


                        <div class="row justify-content-center gx-5">
                            <div class="col-2 d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="Domingo" name="check7">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Domingo
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center gx-5">
                            <div class="col-2 pe-1">
                                <input type="time" class="form-control" name="timeStart7" value="">
                            </div>
                            <div class="col-2 ps-1">
                                <input type="time" class="form-control" name="timeEnd7" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info" style="color: white;" name="btnActualizarMaterial">Crear Punto de Recolección</button>
                </div>
            </form>
        </div>
    </div>
</div>