<div class="modal fade in" id="entrega" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                </div>
                <form id="form" action="#" method="post">
                    <h1>Entrega</h1>
                    <hr>
                    <fieldset>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Entrega</label>
                                <input id="date" name="abono" type="date" class="form-control">
                            </div>
                            <div class="form-group" id="who">
                                <label>Vendedora</label>
                                <select id="entrega">
                                    <option value="null" selected="selected">-</option>
                                    <option value="jcampos">Jeannette</option>
                                    <option value="mcuevas">Mónica</option>
                                    <option value="smena">Silvia</option>
                                    <option value="vfierro">Valentina</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Estado</label>
                                <select id="estado">
                                    <option value="null">-</option>
                                    <option value="play">En confección</option>
                                    <option value="end">Proceso finalizado</option>
                                    <option value="cancel">Cancelo servicio</option>
                                    <option value="pause">Postergó boda</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-12" id="why">
                            <div class="form-group">
                                <label>Motivo</label>
                                <textarea placeholder="Escribe el motivo de la cancelación"></textarea>
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
</script>