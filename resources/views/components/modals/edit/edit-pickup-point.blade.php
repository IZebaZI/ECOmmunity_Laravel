<div class="modal fade" id="EditarPuntoR">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Punto de Recolección</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/editarPunto/{punto.0}" method="POST">
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
                                        <input type="text" class="form-control" name="txtNombreEdit" value="{punto.1}" required pattern="\S+.*">
                                    </td>

                                    <td>
                                        <input type="text" class="form-control" name="txtUbicacionEdit" value="{punto.2}" required pattern="\S+.*">
                                    </td>

                                    <td>
                                        <input type="number" step="any" class="form-control" name="floatLatitudEdit" value="{punto.3}" required pattern="\S+.*">
                                    </td>

                                    <td>
                                        <input type="number" step="any" class="form-control" name="floatLongitudEdit" value="{punto.4}" required pattern="\S+.*">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h5 class="text-center">Días</h5>
                    <div class="container">
                        {{-- {% set ns = namespace(dias = []) %}
                        {% for dia in horarios %}
                            {% if dia.0 == punto.0 %}
                                {% set ns.dias = ns.dias + [dia.2] %}
                            {% endif %}
                        {% endfor %}

                        {% set nsi = namespace(horarios = []) %}
                        {% for horario in horarios %}
                            {% if horario.0 == punto.0 %}
                                {% set nsi.horarios = nsi.horarios + [horario.3] %}
                            {% endif %}
                        {% endfor %}

                        {% set nsf = namespace(horarios = []) %}
                        {% for horario in horarios %}
                            {% if horario.0 == punto.0 %}
                                {% set nsf.horarios = nsf.horarios + [horario.4] %}
                            {% endif %}
                        {% endfor %}

                        {% set nsci = namespace(counter = 0) %}
                        {% set nscf = namespace(counter = 0) %} --}}
                        <div class="row row-cols-3 gx-5">
                            <div class="col d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    {% if "Lunes" in ns.dias %}
                                        <input class="form-check-input" type="checkbox" value="Lunes" name="check1" checked>
                                    {% else %}
                                        <input class="form-check-input" type="checkbox" value="Lunes" name="check1">
                                    {% endif %}
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Lunes
                                    </label>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    {% if "Martes" in ns.dias %}
                                        <input class="form-check-input" type="checkbox" value="Martes" name="check2" checked>
                                    {% else %}
                                        <input class="form-check-input" type="checkbox" value="Martes" name="check2">
                                    {% endif %}
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Martes
                                    </label>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    {% if "Miércoles" in ns.dias %}
                                        <input class="form-check-input" type="checkbox" value="Miércoles" name="check3" checked>
                                    {% else %}
                                        <input class="form-check-input" type="checkbox" value="Miércoles" name="check3">
                                    {% endif %}
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Miercoles
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-6 mb-4 gx-5">
                            <div class="col pe-1">
                                {% if "Lunes" in ns.dias %}
                                    <input type="time" class="form-control" name="timeStart1" value="{nsi.horarios[nsci.counter]}">
                                    {% set nsci.counter = nsci.counter + 1 %}
                                {% else %}
                                    <input type="time" class="form-control" name="timeStart1" value="">
                                {% endif %}
                            </div>
                            <div class="col ps-1">
                                {% if "Lunes" in ns.dias %}
                                    <input type="time" class="form-control" name="timeEnd1" value="{nsf.horarios[nscf.counter]}">
                                    {% set nscf.counter = nscf.counter + 1 %}
                                {% else %}
                                    <input type="time" class="form-control" name="timeEnd1" value="">
                                {% endif %}
                                
                            </div>
                            <div class="col pe-1">
                                {% if "Martes" in ns.dias %}
                                    <input type="time" class="form-control" name="timeStart2" value="{nsi.horarios[nsci.counter]}">
                                    {% set nsci.counter = nsci.counter + 1 %}
                                {% else %}
                                    <input type="time" class="form-control" name="timeStart2" value="">
                                {% endif %}
                            </div>
                            <div class="col ps-1">
                                {% if "Martes" in ns.dias %}
                                    <input type="time" class="form-control" name="timeEnd2" value="{nsf.horarios[nscf.counter]}">
                                    {% set nscf.counter = nscf.counter + 1 %}
                                {% else %}
                                    <input type="time" class="form-control" name="timeEnd2" value="">
                                {% endif %}
                            </div>
                            <div class="col pe-1">
                                {% if "Miércoles" in ns.dias %}
                                    <input type="time" class="form-control" name="timeStart3" value="{nsi.horarios[nsci.counter]}">
                                    {% set nsci.counter = nsci.counter + 1 %}
                                {% else %}
                                    <input type="time" class="form-control" name="timeStart3" value="">
                                {% endif %}
                            </div>
                            <div class="col ps-1">
                                {% if "Miércoles" in ns.dias %}
                                    <input type="time" class="form-control" name="timeEnd3" value="{nsf.horarios[nscf.counter]}">
                                    {% set nscf.counter = nscf.counter + 1 %}
                                {% else %}
                                    <input type="time" class="form-control" name="timeEnd3" value="">
                                {% endif %}
                            </div>
                        </div>


                        <div class="row row-cols-3 gx-5">
                            <div class="col d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    {% if "Jueves" in ns.dias %}
                                        <input class="form-check-input" type="checkbox" value="Jueves" name="check4" checked>
                                    {% else %}
                                        <input class="form-check-input" type="checkbox" value="Jueves" name="check4">
                                    {% endif %}
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Jueves
                                    </label>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    {% if "Viernes" in ns.dias %}
                                        <input class="form-check-input" type="checkbox" value="Viernes" name="check5" checked>
                                    {% else %}
                                        <input class="form-check-input" type="checkbox" value="Viernes" name="check5">
                                    {% endif %}
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Viernes
                                    </label>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    {% if "Sábado" in ns.dias %}
                                        <input class="form-check-input" type="checkbox" value="Sábado" name="check6" checked>
                                    {% else %}
                                        <input class="form-check-input" type="checkbox" value="Sábado" name="check6">
                                    {% endif %}
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Sábado
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-6 mb-4 gx-5">
                            <div class="col pe-1">
                                {% if "Jueves" in ns.dias %}
                                    <input type="time" class="form-control" name="timeStart4" value="{nsi.horarios[nsci.counter]}">
                                    {% set nsci.counter = nsci.counter + 1 %}
                                {% else %}
                                    <input type="time" class="form-control" name="timeStart4" value="">
                                {% endif %}
                            </div>
                            <div class="col ps-1">
                                {% if "Jueves" in ns.dias %}
                                    <input type="time" class="form-control" name="timeEnd4" value="{nsf.horarios[nscf.counter]}">
                                    {% set nscf.counter = nscf.counter + 1 %}
                                {% else %}
                                    <input type="time" class="form-control" name="timeEnd4" value="">
                                {% endif %}
                            </div>
                            <div class="col pe-1">
                                {% if "Viernes" in ns.dias %}
                                    <input type="time" class="form-control" name="timeStart5" value="{nsi.horarios[nsci.counter]}">
                                    {% set nsci.counter = nsci.counter + 1 %}
                                {% else %}
                                    <input type="time" class="form-control" name="timeStart5" value="">
                                {% endif %}
                            </div>
                            <div class="col ps-1">
                                {% if "Viernes" in ns.dias %}
                                    <input type="time" class="form-control" name="timeEnd5" value="{nsf.horarios[nscf.counter]}">
                                    {% set nscf.counter = nscf.counter + 1 %}
                                {% else %}
                                    <input type="time" class="form-control" name="timeEnd5" value="">
                                {% endif %}
                            </div>
                            <div class="col pe-1">
                                {% if "Sábado" in ns.dias %}
                                    <input type="time" class="form-control" name="timeStart6" value="{nsi.horarios[nsci.counter]}">
                                    {% set nsci.counter = nsci.counter + 1 %}
                                {% else %}
                                    <input type="time" class="form-control" name="timeStart6" value="">
                                {% endif %}
                            </div>
                            <div class="col ps-1">
                                {% if "Sábado" in ns.dias %}
                                    <input type="time" class="form-control" name="timeEnd6" value="{nsf.horarios[nscf.counter]}">
                                    {% set nscf.counter = nscf.counter + 1 %}
                                {% else %}
                                    <input type="time" class="form-control" name="timeEnd6" value="">
                                {% endif %}
                            </div>
                        </div>


                        <div class="row justify-content-center gx-5">
                            <div class="col-2 d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    {% if "Domingo" in ns.dias %}
                                        <input class="form-check-input" type="checkbox" value="Domingo" name="check7" checked>
                                    {% else %}
                                        <input class="form-check-input" type="checkbox" value="Domingo" name="check7">
                                    {% endif %}
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Domingo
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center gx-5">
                            <div class="col-2 pe-1">
                                {% if "Domingo" in ns.dias %}
                                    <input type="time" class="form-control" name="timeStart7" value="{nsi.horarios[nsci.counter]}">
                                    {% set nsci.counter = nsci.counter + 1 %}
                                {% else %}
                                    <input type="time" class="form-control" name="timeStart7" value="">
                                {% endif %}
                            </div>
                            <div class="col-2 ps-1">
                                {% if "Domingo" in ns.dias %}
                                    <input type="time" class="form-control" name="timeEnd7" value="{nsf.horarios[nscf.counter]}">
                                    {% set nscf.counter = nscf.counter + 1 %}
                                {% else %}
                                    <input type="time" class="form-control" name="timeEnd7" value="">
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info" style="color: white;" name="btnGuardarCambios">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
