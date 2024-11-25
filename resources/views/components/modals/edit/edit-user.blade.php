<div class="modal fade" id="EditarUsuario{{$user->id}}">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar usuario</h5>
            </div>
            <div class="modal-body">
            <form action="{{route('updateUser', ['id'=>$user->id])}}" method="POST">
                @csrf
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Enfriamiento (Horas)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="txtNombreEdit" value="{{$user->nombre}}" required pattern="\S+.*">
                                    <small class="text-danger fst-italic">{{$errors->first('txtNombreEdit')}}</small>
                                </td>

                                <td>
                                    <input type="email" class="form-control" name="txtEmailEdit" value="{{$user->email}}" required pattern="\S+.*">
                                    <small class="text-danger fst-italic">{{$errors->first('txtEmailEdit')}}</small>
                                </td>

                                <td>
                                    <input type="text" class="form-control" name="txtCiudadEdit" value="{{$user->ciudad}}" required pattern="\S+.*">
                                    <small class="text-danger fst-italic">{{$errors->first('txtCiudadEdit')}}</small>
                                </td>

                                <td>
                                    <select class="form-select" name="txtRolEdit" required>
                                        @if($user->rol == 'usuario')
                                        <option selected value="usuario">Usuario</option>
                                        <option value="administrador">Administrador</option>
                                        @else
                                        <option value="usuario">Usuario</option>
                                        <option selected value="administrador">Administrador</option>
                                        @endif
                                    </select>
                                    <small class="text-danger fst-italic">{{$errors->first('txtRolEdit')}}</small>
                                </td>

                                <td>
                                    <select class="form-select" name="txtEstadoEdit" required>
                                        @if($user->estado == 'activo')
                                        <option selected value="activo">Activo</option>
                                        <option value="inactivo">Inactivo</option>
                                        @else
                                        <option value="activo">Activo</option>
                                        <option selected value="inactivo">Inactivo</option>
                                        @endif
                                    </select>
                                    <small class="text-danger fst-italic">{{$errors->first('txtEstadoEdit')}}</small>
                                </td>

                                <td>
                                    <input type="number" step="1" class="form-control" name="txtCooldownEdit" value="{{$user->cooldown}}" pattern="\S+.*">
                                    <small class="text-danger fst-italic">{{$errors->first('txtCooldownEdit')}}</small>
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