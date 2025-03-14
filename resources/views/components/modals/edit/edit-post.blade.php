<div class="modal fade" id="editarPublicacion">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Publicación</h5>
            </div>
            <div class="modal-body">
            <form action="/editarPublicacion/1" method="POST">   
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Título</th>
                                <th scope="col">Tipo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="txtTitulo" value="" required pattern="\S+.*">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="txtTipo" value="" required pattern="\S+.*">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="mb-3 mx-2">
                        <label class="form-label"><b>Contenido</b></label>
                        <textarea class="form-control" rows="3"></textarea>
                        <label for="formFile" class="form-label mt-3" required pattern="\S+.*"><b>Archivos</b></label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div> 
            </div>
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info" style="color: white;" name="btnActualizarMaterial">Finalizar</button>
                </div>
            </form>
        </div>
    </div>
</div>