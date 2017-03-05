<div class="modal fade in" id="user-in-profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                </div>
                <form id="form" action="#" method="post">
                    <h1>Perfil</h1>
                    <hr>
                    <fieldset>
                        <div class="col-6">
                            <div class="form-group">
                                <label>¿A qué área corresponde?</label>
                                <select id="perfil">
                                    <option value="null">-</option>
                                    <option value="admin">Administrador</option>
                                    <option value="atelier">Taller</option>
                                    <option value="seller">Vendedor</option>
                                    <option value="design">Modista</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <h3 class="title-description">Descripción Perfil</h3>
                            <div id="info-add">
                                <p>Selecciona el perfil de usuario que corresponda.</p>
                            </div>
                            <div id="info-admin">
                                <p>El usuario tendrá acceso total al panel de administración Atelier.</p>
                            </div>
                            <div id="info-taller">
                                <p>El usuario podrá añadir, modificar y eliminar el contenido, además tendrá acceso al
                                    inventario.</p>
                            </div>
                            <div id="info-seller">
                                <p>El usuario podrá añadir, modificar y eliminar el contenido.</p>
                            </div>
                            <div id="info-design">
                                <p>El usuario tendrá acceso a su propio calendario de citas.</p>
                            </div>
                        </div>
                    </fieldset>
                    <div class="botonera">
                        <input type="submit" name="guardar" id="save" value="guardar">
                        <button type="button" name="cancelar" id="cancel" value="" data-dismiss="modal"
                                aria-label="Close">Cancelar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('#perfil').bind('change', function (e) {
        if ($('#perfil').val() == 'design') {
            $('#info-design').show();
            $('#info-admin, #info-seller, #info-add, #info-taller').hide();
        }
        else if ($('#perfil').val() == 'admin') {
            $('#info-admin').show();
            $('#info-add, #info-seller, #info-design, #info-taller').hide();
        }
        else if ($('#perfil').val() == 'seller') {
            $('#info-seller').show();
            $('#info-admin, #info-add, #info-design, #info-taller').hide();
        }
        else if ($('#perfil').val() == 'atelier') {
            $('#info-taller').show();
            $('#info-add, #info-seller, #info-design, #info-admin').hide();
        }
        else {
            $('#info-add').show();
            $('#info-admin, #info-seller, #info-design, #info-taller').hide();
        }
    });
</script>
