<div class="modal fade in" id="user-in-contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                </div>
                <form id="form" action="#" method="post">
                    <h1>Información de Contacto</h1>
                    <hr>
                    <fieldset>
                        <div class="col-6">
                            <div class="form-group phone-info">
                                <label>Telefono *</label>
                                <input id="tel" name="phone" type="tel" class="form-control required">
                            </div>
                            <div class="form-group phone-info">
                                <label>Email</label>
                                <input id="email" name="password" type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Cumpleaños</label>
                                    <input id="date" name="marriage" type="date" class="form-control">
                                </div>
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
