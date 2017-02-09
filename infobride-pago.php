<div class="modal fade in" id="abono" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                </div>
                <form id="form" action="#" method="post">
                    <h1>Detalle de Pago</h1>
                    <hr class="line-pink">
                    <fieldset>
                        <div class="col-6">
                                <div class="form-group">
                                    <label>Fecha*</label>
                                    <input id="date" name="abono" type="date" class="form-control required">
                                </div>
                                <div class="form-group add-symbol">
                                    <label>Total abono</label>
                                    <span>$</span>
                                    <input id="diag-delantero" name="d-delantero" type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input id="pendiente" name="pago-pendiente" type="checkbox" class="form-control">
                                    <label>Pago pendiente</label>
                                </div>
                            </div>
                        <div class="col-6">
                            <div class="form-group"><label>Medio de pago</label>
                                <select data-placeholder="Elige un vestido" class="chosen-select" tabindex="2">
                                    <option value="">Elige un medio de pago</option>
                                    <option value="transbank">Transbank</option>
                                    <option value="efectivo">Efectivo</option>
                                    <option value="cheque">Cheque</option>
                                    <option value="transferencia">Transferencia</option>
                                </select>
                            </div>
                            <div class="form-group add-symbol">
                                <label>Nº de boleta</label>
                                <span>Nº</span>
                                <input id="diag-delantero" name="d-delantero" type="number" class="form-control">
                            </div>
                            <!--<div class="form-group phone-botton">
                              <label>Añadir pago</label>
                              <button id="add-pay">+</button>
                            </div>-->
                            <div class="form-group add-here"></div>
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
    $('.label-radio').click(function () {
        if ($('#radio-3').is(':checked')) {
            $('#other').show();
        } else {
            $('#other').hide();
        }
    });</script>