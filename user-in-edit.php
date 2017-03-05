<div class="modal fade in" id="user-in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                </div>
                <form id="form" action="#" method="post">
                    <h1>Información Usuario</h1>
                    <hr>
                    <fieldset>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Nombre *</label>
                                <input id="userName" name="userName" type="text" class="form-control required">
                            </div>
                            <div class="form-group">
                                <label>Apellido *</label>
                                <input id="userName" name="userName" type="text" class="form-control required">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Nombre de Usuario</label>
                                <input id="alias" name="alias" type="text" class="form-control required">
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
