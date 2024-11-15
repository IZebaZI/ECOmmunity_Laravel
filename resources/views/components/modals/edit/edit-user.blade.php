<div class="modal fade" id="EditarUsuario">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar usuario</h5>
            </div>
            <div class="modal-body">
            <form action="/editarUsuario/{usuario.0}" method="POST">   
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Contraseña</th>
                                <th scope="col">Ubicación</th>
                                <th scope="col">Rol</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="txtNombreEdit" value="{usuario.1}" required pattern="\S+.*">
                                </td>

                                <td>
                                    <input type="email" class="form-control" name="txtCorreoEdit" value="{usuario.2}" required pattern="\S+.*">
                                </td>

                                <td>
                                    <input type="text" class="form-control" name="txtPasswordEdit" value="{usuario.3}" required pattern="\S+.*">
                                </td>

                                <td>
                                    <input type="text" class="form-control" name="txtUbicacionEdit" value="{usuario.4}" required pattern="\S+.*">
                                </td>

                                <td>
                                    {% if usuario.5 == "Usuario" %}
                                    <select class="form-select" name="txtRolEdit" required>
                                        <option selected value="Usuario">Usuario</option>
                                        <option value="Administrador">Administrador</option>
                                    </select>
                                    {% else %}
                                    <select class="form-select" name="txtRolEdit" required>
                                        <option value="Usuario">Usuario</option>
                                        <option selected value="Administrador">Administrador</option>
                                    </select>
                                    {% endif %}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> 
            </div>
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info" style="color: white;" name="btnActualizarMaterial">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>