<div class="modal fade in" id="dress" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                </div>
                <form id="form" action="#" method="post">
                    <h1>Modelo Abelia</h1>
                    <hr>
                    <fieldset>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Modelo *</label>
                                <input id="nameDress" name="nameDress" type="text" class="form-control required">
                            </div>
                            <div class="form-group">
                                <label>Ingresado por:</label>
                                <input id="nameDress" name="nameDress" type="text" class="form-control required " value="daliaga" disabled>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Valor*</label>
                                <input id="price" name="price" type="number" class="form-control required">
                            </div>
                            <div class="form-group">
                                <label>Origen</label>
                                <select id="perfil">
                                    <option value="null">-</option>
                                    <option value="nacional">Nacional</option>
                                    <option value="importado">Importado</option>
                                </select>
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
