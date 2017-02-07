<div class="modal fade in" id="medidas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                </div>
                <form id="form" action="#" class="wizard" method="post">
                    <h1>Medidas</h1>
                    <hr>
                    <fieldset>
                        <h2>- Contornos:</h2>
                        <div class="col-4 form-group add-symbol">
                            <label>Busto</label>
                            <input id="busto" name="m-busto" type="number" class="form-control">
                            <span class="symbol">cm</span>
                        </div>
                        <div class="col-4 form-group add-symbol">
                            <label>Sobre busto</label>
                            <input id="sobre-busto" name="m-sobrebusto" type="number" class="form-control">
                            <span class="symbol">cm</span>
                        </div>
                        <div class="col-4 form-group add-symbol">
                            <label>Bajo busto</label>
                            <input id="bajo-busto" name="m-bajobusto" type="number" class="form-control">
                            <span class="symbol">cm</span>
                        </div>
                        <div class="col-4 form-group add-symbol">
                            <label>Separación busto</label>
                            <input id="separacion-busto" name="m-sepbusto" type="number" class="form-control">
                            <span class="symbol">cm</span>
                        </div>
                        <div class="col-4 form-group add-symbol">
                            <label>Cintura</label>
                            <input id="cintura" name="m-cintura" type="number" class="form-control">
                            <span class="symbol">cm</span>
                        </div>
                        <div class="col-4 form-group add-symbol">
                            <label>Cadera alta</label>
                            <input id="cadera-alta" name="m-cadealta" type="number" class="form-control">
                            <span class="symbol">cm</span>
                        </div>

                        <div class="col-4 form-group add-symbol">
                            <label>Alto cadera alta</label>
                            <input id="a-cadera-alta" name="m-acadealta" type="number" class="form-control">
                            <span class="symbol">cm</span>
                        </div>
                        <div class="col-4 form-group add-symbol">
                            <label>Cadera baja</label>
                            <input id="cadera-baja" name="m-cadebaja" type="number" class="form-control">
                            <span class="symbol">cm</span>
                        </div>
                        <div class="col-4 form-group add-symbol">
                            <label>Alto cadera baja</label>
                            <input id="a-cadera-baja" name="m-acadebaja" type="number" class="form-control">
                            <span class="symbol">cm</span>
                        </div>
                        <div class="col-4 form-group add-symbol">
                            <label>Contorno brazo</label>
                            <input id="contorno-brazo" name="m-contobrazo" type="number" class="form-control">
                            <span class="symbol">cm</span>
                        </div>
                        <div class="col-4 form-group add-symbol">
                            <label>Ancho puño</label>
                            <input id="ancho-puño" name="m-anchopuno" type="number" class="form-control">
                            <span class="symbol">cm</span>
                        </div>
                        <div class="col-4 form-group add-symbol">
                            <label>Contorno cuello</label>
                            <input id="contorno-cuello" name="m-contocuello" type="number" class="form-control">
                            <span class="symbol">cm</span>
                        </div>
                        <h2>- Altos:</h2>
                        <div class="col-4 form-group add-symbol">
                            <label>Alto busto</label>
                            <input id="alto-busto" name="a-busto" type="number" class="form-control">
                            <span class="symbol">cm</span>
                        </div>
                        <div class="col-4 form-group add-symbol">
                            <label>Talle delantero</label>
                            <input id="talle-delantero" name="t-delantero" type="number" class="form-control">
                            <span class="symbol">cm</span>
                        </div>
                        <div class="col-4 form-group add-symbol">
                            <label>Largo total</label>
                            <input id="largo-total" name="l-total" type="number" class="form-control">
                            <span class="symbol">cm</span>
                        </div>
                        <div class="col-4 form-group add-symbol">
                            <label>Talle espalda</label>
                            <input id="talle-espalda" name="t-espalda" type="number" class="form-control">
                            <span class="symbol">cm</span>
                        </div>
                        <div class="col-4 form-group add-symbol">
                            <label>Largo manga</label>
                            <input id="largo-manga" name="l-manga" type="number" class="form-control">
                            <span class="symbol">cm</span>
                        </div>
                        <div class="col-4 form-group add-symbol">
                            <label>Alto costado</label>
                            <input id="alto-costado" name="a-costado" type="number" class="form-control">
                            <span class="symbol">cm</span>
                        </div>
                        <div class="col-4 form-group add-symbol">
                            <label>Ancho espalda</label>
                            <input id="ancho-espalda" name="a-espalda" type="number" class="form-control">
                            <span class="symbol">cm</span>
                        </div>
                        <div class="col-4 form-group add-symbol">
                            <label>Diag. escote delantero</label>
                            <input id="diag-delantero" name="d-delantero" type="number" class="form-control">
                            <span class="symbol">cm</span>
                        </div>
                        <div class="col-4 form-group add-symbol">
                            <label>Diag. escote espalda</label>
                            <input id="diag-espalda" name="d-espalda" type="number" class="form-control">
                            <span class="symbol">cm</span>
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
    });
</script>