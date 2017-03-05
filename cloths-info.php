<div class="modal fade in" id="telas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                </div>
                <form id="form" action="#" method="post">
                    <h1>Tela 1</h1>
                    <hr>
                    <fieldset>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Nombre *</label>
                                <input id="nameDress" name="nameDress" type="text" class="form-control required">
                            </div>

                            <div class="form-group">
                                <label>Color</label>
                                <select id="perfil">
                                    <option value="null">-</option>
                                    <option value="nacional">Blanco</option>
                                    <option value="importado">Marfil</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Cantidad</label>
                                <input id="busto" name="m-busto" type="number" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>ID</label>
                                <input id="id" name="id" type="text" class="form-control required " value="1312" disabled>
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
