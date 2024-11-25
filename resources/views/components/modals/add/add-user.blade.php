<div class="modal fade" id="AgregarUsuario">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Agregar usuario</h5>
            </div>
            <div class="modal-body">
            <form action="{{route('storeUser')}}" method="GET">
                @csrf
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Contraseña</th>
                                <th scope="col">Confirmar Contraseña</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Rol</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="txtNombreAdd" value="{{old('txtNombreAdd')}}" required pattern="\S+.*">
                                    <small class="text-danger fst-italic">{{$errors->first('txtNombreAdd')}}</small>
                                </td>

                                <td>
                                    <input type="email" class="form-control" name="txtEmailAdd" value="{{old('txtEmailAdd')}}" required pattern="\S+.*">
                                    <small class="text-danger fst-italic">{{$errors->first('txtEmailAdd')}}</small>
                                </td>

                                <td>
                                    <input type="password" class="form-control" name="txtPasswordAdd" value="{{old('txtPasswordAdd')}}" required pattern="\S+.*">
                                    <small class="text-danger fst-italic">{{$errors->first('txtPasswordAdd')}}</small>
                                </td>

                                <td>
                                    <input type="password" class="form-control" name="txtPasswordConfirmationAdd" value="{{old('txtPasswordConfirmationAdd')}}" required pattern="\S+.*">
                                    <small class="text-danger fst-italic">{{$errors->first('txtPasswordConfirmationAdd')}}</small>
                                </td>

                                <td>
                                    <input type="text" class="form-control" name="txtCiudadAdd" value="{{old('txtCiudadAdd')}}" required pattern="\S+.*">
                                    <small class="text-danger fst-italic">{{$errors->first('txtCiudadAdd')}}</small>
                                </td>

                                <td>
                                    <select class="form-select" name="txtRolAdd" required>
                                        <option selected value="usuario">Usuario</option>
                                        <option value="administrador">Administrador</option>
                                        <small class="text-danger fst-italic">{{$errors->first('txtRolAdd')}}</small>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> 
            </div>
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info" style="color: white;" name="btnActualizarMaterial">Crear Usuario</button>
                </div>
            </form>
        </div>
    </div>
</div>