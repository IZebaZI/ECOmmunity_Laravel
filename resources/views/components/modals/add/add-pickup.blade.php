<div class="modal fade" id="AgregarRecoleccion">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Agendar recoleccion</h5>
            </button>
            </div>
            <div class="modal-body">
            <form action="/agregarRecoleccion" method="POST">   
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Tipo</th>
                                <th scope="col">Punto de recolección</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Hora</th>
                                <th scope="col">Cantidad (KG)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select class="form-select" name="txtTipoAdd" required>
                                        <option value="Papel/Cartón">Papel/Cartón</option>
                                        <option value="Plástico">Plástico</option>
                                        <option value="Vidrio">Vidrio</option>
                                        <option value="Textil">Textil</option>
                                        <option value="Residuos Orgánicos">Residuos Orgánicos</option>
                                        <option value="Baterías">Baterías</option>
                                        <option value="Metales/Chatarra">Metales/Chatarra</option>
                                        <option value="Tierra/Escombros">Tierra/Escombros</option>
                                        <option value="Aparatos Electrónicos">Aparatos Electrónicos</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </td>

                                <td>
                                    
                                    <input name="idPuntoAdd" value="{punto.0}" hidden>

                                    <input class="form-control" value="{punto.1}" readonly>
                                    
                                </td>

                                <td>
                                    <input type="date" class="form-control" name="txtDiaAdd" value="" required>
                                </td>

                                <td>
                                    <input type="time" class="form-control" name="txtHoraAdd" value="" required>
                                </td>

                                <td>
                                    <input type="number" class="form-control" name="floatCantidadAdd" step="0.1" required>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div> 
            </div>
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info" style="color: white;" name="btnActualizarMaterial">Crear Recoleccion</button>
                </div>
            </form>
        </div>
    </div>
</div>