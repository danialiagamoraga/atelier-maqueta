<div class="modal fade in" id="compra" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                </div>
                <form id="form" action="#" class="wizard" method="post">
                    <h1>Detalle de compra</h1>
                    <hr>
                    <fieldset>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Vendedora</label>
                                <select data-placeholder="-" class="chosen-select" multiple style="width:350px;"
                                        tabindex="4">
                                    <option value="">-</option>
                                    <option value="jcampos">Jeannette</option>
                                    <option value="mcuevas">Mónica</option>
                                    <option value="smena">Silvia</option>
                                    <option value="vfierro">Valentina</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="form-6">
                                    <label>Modelo</label>
                                    <select data-placeholder="Elige un vestido" class="chosen-select" tabindex="2">
                                        <option value="">Elige un vestido</option>
                                        <option value="Afrodita">Modelo Afrodita</option>
                                        <option value="Alice">Modelo Alice</option>
                                        <option value="Alondra">Modelo Alondra</option>
                                        <option value="Amalia">Modelo Amalia</option>
                                        <option value="Amatista">Modelo Amatista</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="block">Color</label>
                                <label class="label-radio">
                                    <input id="radio-1" name="optionsRadios" type="radio" value="blanco"
                                           class="form-control">
                                    Blanco</label>
                                <label class="label-radio">
                                    <input id="radio-2" name="optionsRadios" type="radio" value="marfil"
                                           class="form-control">
                                    Marfil</label>
                                <label class="label-radio">
                                    <input id="radio-3" name="optionsRadios" type="radio" value="" class="form-control">
                                    Otro</label>
                                <input id="other" name="color" type="text" class="form-control required">
                            </div>
                            <div class="form-group">
                                <label class="block">Descuento</label>
                                <label class="label-radio">
                                    <input id="radio-4" name="discount" type="radio" value="5" class="form-control">
                                    5%</label>
                                <label class="label-radio">
                                    <input id="radio-5" name="discount" type="radio" value="10" class="form-control">
                                    10%</label>
                                <label class="label-radio">
                                    <input id="radio-5" name="discount" type="radio" value="15" class="form-control">
                                    15%</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Otros</label>
                                <textarea></textarea>
                            </div>
                            <div class="form-group add-symbol">
                                <label>Total*</label>
                                <span class="symbol">$</span>
                                <input id="total" name="total" type="text" class="form-control required">
                            </div>
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