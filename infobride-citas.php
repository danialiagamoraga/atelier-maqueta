<div class="modal fade in" id="citas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                </div>
                <form id="form" action="#" class="wizard" method="post">
                    <h1>Citas</h1>
                    <hr>
                    <fieldset>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Modista asignada</label>
                                <select data-placeholder="Elige una modista" class="chosen-select" tabindex="2">
                                    <option value="">Elige una modita</option>
                                    <option value="Li">Li</option>
                                    <option value="Andrea">Andrea</option>
                                    <option value="Teresa">Teresa</option>
                                    <option value="Leo">Leo</option>
                                    <option value="Gloria">Gloria</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Entrega de telas</label>
                                <input id="date" name="telas" type="date" class="form-control">
                            </div>
                        </div>
                        <fieldset class="separador">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Primera cita</label>
                                    <input id="date" name="abono" type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input id="cita-pendiente" name="por-coordinar" type="checkbox" class="form-control"
                                           value="">
                                    <label>Por coordinar</label>
                                </div>
                            </div>
                            <div class="col-6">

                            </div>
                        </fieldset>
                    </fieldset>
                    <div class="botonera">
                        <input type="submit" name="guardar" id="save" value="guardar">
                        <button type="button" name="cancelar" id="cancel" value="">Cancelar</button>
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