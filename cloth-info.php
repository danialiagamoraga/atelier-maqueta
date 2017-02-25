<div class="modal fade in" id="cloth" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                </div>
                <form id="form" action="#" method="post">
                    <h1>Telas</h1>
                    <fieldset>
                        <div class="col-12">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Entrega de telas</label>
                                    <input id="date" name="telas" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Añadir Tela</label>
                                    <button id="add-cloth" onclick="return false">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 cloth-info">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Tela <span class="num">1</span></label>
                                    <select data-placeholder="" class="chosen-select" tabindex="2">
                                        <option value="">Selecciona una tela</option>
                                        <option value="Li">Tela 1</option>
                                        <option value="Andrea">Tela 2</option>
                                        <option value="Teresa">Tela 3</option>
                                        <option value="Leo">Tela 4</option>
                                        <option value="Gloria">Tela 5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group add-symbol">
                                    <label>Cantidad</label>
                                    <input id="bajo-busto" name="m-bajobusto" type="number" class="form-control">
                                    <span class="symbol">mt</span>
                                </div>
                            </div>
                        </div>
                        <div class="add-cloth"></div>
                        <div class="form-group">
                            <input id="pendiente" name="telas-pendiente" type="checkbox" class="form-control">
                            <label style="display:inline-block;">En espera</label>
                        </div>
                    </fieldset>
                    <div class="botonera">
                        <input type="submit" name="guardar" id="save" value="guardar">
                        <button type="button" name="cancelar" id="cancel" value="" data-dismiss="modal"
                                aria-label="Close">Cancelar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('.label-radio').click(function () {
        if ($('#radio-3').is(':checked')) {
            $('#other').show();
        } else {
            $('#other').hide();
        }
    });
</script>