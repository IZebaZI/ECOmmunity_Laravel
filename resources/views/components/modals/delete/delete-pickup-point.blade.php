<div class="modal fade" id="EliminarPuntoR">
    <div class="modal-dialog modal-dialog-centered modal-m" role="dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Eliminar Punto de Recolección</h5>
            </button>
            </div>
            <form action="/eliminarPunto/{punto.0}" method="POST"> 
                <div class="modal-body">
                    <span class="h5">¿Seguro que quieres eliminar el punto de recolección {punto.1}?</span>
                </div>
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger" name="btnEliminarMaterial">Si</button>
                </div>
            </form>
        </div>
    </div>
</div>