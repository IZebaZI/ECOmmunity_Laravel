<div class="modal fade" id="EliminarUsuario{{$user->id}}">
    <div class="modal-dialog modal-dialog-centered modal-m" role="dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Eliminar usuario</h5>
            </button>
            </div>
            <form action="{{route('deleteUser', ['id'=>$user->id])}}" method="POST">
                @csrf
                <div class="modal-body">
                    <span class="h5">¿Seguro que quieres eliminar el usuario {{$user->nombre}}?</span>
                </div>
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger" name="btnEliminarMaterial">Si</button>
                </div>
            </form>
        </div>
    </div>
</div>