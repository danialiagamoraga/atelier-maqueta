<div class="modal fade in" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                </div>
                <form id="form" action="#" method="post">
                    <h1>Confirmación</h1>
                    <hr>
                    <fieldset>
                        <div class="col-12">
                            <p>Esta acción es irreversible ¿Estás seguro de realizar esta acción?</p>
                        </div>
                    </fieldset>
                    <div class="botonera">
                        <input type="submit" name="guardar" id="save" value="eliminar">
                        <button type="button" name="cancelar" id="cancel" value="" data-dismiss="modal" aria-label="Close">Cancelar</button>
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