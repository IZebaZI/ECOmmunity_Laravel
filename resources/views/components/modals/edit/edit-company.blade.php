<div class="modal fade" id="EditarEmpresa">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Empresa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/editarEmpresa/{empresa.0}" method="POST">   
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Ubicación</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Teléfono</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" name="txtNombreEdit" required pattern="\S+.*" value="{empresa.1}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="txtUbicacionEdit" required pattern="\S+.*" value="{empresa.2}">
                                    </td>
                                    <td>
                                        <input type="email" class="form-control" name="txtCorreoEdit" required value="{empresa.3}">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" name="intTelefonoEdit" required minlength="10" value="{empresa.4}">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        {{-- {% set ns = namespace(lista_tipos = []) %}
                        {% for tipo in tipos %}
                            {% if tipo.2 == empresa.0 %}
                                {% set ns.lista_tipos = ns.lista_tipos + [tipo.1] %}
                                {% endif %}
                        {% endfor %}

                        {% set nsc = namespace(checkbox_counter = 1) %}
                        {% if ns.lista_tipos %} --}}
                            <h6>Tipos Seleccionados</h6>
                            {{-- {% for tipo in ns.lista_tipos %} --}}
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="{tipo}" name="editcheck{nsc.checkbox_counter}" checked>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {tipo}
                                    </label>
                                </div>
                                {{-- {% set nsc.checkbox_counter = nsc.checkbox_counter + 1 %}
                            {% endfor %}
                        {% endif %} --}}

                        <h6 class="mt-2">Tipos Disponibles</h6>
                        {{-- {% set tipos_disponibles = ['Papel/Cartón', 'Plástico', 'Vidrio', 'Textil', 'Residuos Orgánicos', 'Baterías', 'Metales/Chatarra', 'Tierra/Escombros', 'Aparatos Electrónicos', 'Otro'] %}

                        {% for tipo in tipos_disponibles %}
                            {% if tipo not in ns.lista_tipos %} --}}
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="{tipo}" name="editcheck{nsc.checkbox_counter}">
                                    <label class="form-check-label" for="flexCheckDefault">
                                            {tipo}
                                    </label>
                                </div>
                                {{-- {% set nsc.checkbox_counter = nsc.checkbox_counter + 1 %}
                            {% endif %}
                        {% endfor %} --}}
                    </div>
                </div>
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info" style="color: white;" name="btnActualizarMaterial">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
