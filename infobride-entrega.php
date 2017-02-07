<div class="modal fade in" id="entrega" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                </div>
                <form id="form" action="#" class="wizard" method="post">
                    <h1>Entrega</h1>
                    <hr>
                    <fieldset>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Entrega</label>
                                <input id="date" name="abono" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Estado</label>
                                <select data-placeholder="Choose a Country..." class="chosen-select" id="proceso" tabindex="2">
                                    <option value="">-</option>
                                    <option value="play">En confección</option>
                                    <option value="end">Proceso finalizado</option>
                                    <option value="cancel" id="cancel">Cancelo servicio</option>
                                    <option value="pause">Postergó boda</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12" id="why">
                            <label>Motivo</label>
                            <textarea placeholder="Escribe el motivo de la cancelación"></textarea>
                        </div>
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
</script>