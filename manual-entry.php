<div class="modal fade in" id="entry" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                </div>
                <form id="form" action="#" method="post">
                    <h1>Entrada manual</h1>
                    <hr>
                    <fieldset>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Tela</label>
                                <select data-placeholder="" class="chosen-select" tabindex="2">
                                    <option value="">Selecciona la tela</option>
                                    <option value="1A13">Tul Bordado</option>
                                    <option value="Andrea">Andrea</option>
                                    <option value="Teresa">Teresa</option>
                                    <option value="Leo">Leo</option>
                                    <option value="Gloria">Gloria</option>
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
                    </fieldset>
                    <div class="botonera">
                        <input type="submit" name="guardar" id="save" value="guardar">
                        <button type="button" name="cancelar" id="cancel" value="" data-dismiss="modal" aria-label="Close">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('.chosen-select').chosen({width: "100%"});
    $('.label-radio').click(function () {
        if ($('#radio-3').is(':checked')) {
            $('#other').show();
        } else {
            $('#other').hide();
        }
    });
</script>