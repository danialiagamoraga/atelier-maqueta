<?php require_once('header-in.php'); ?>
<section id="admin" class="contenedor">
    <?php require_once('nav.php'); ?>
    <section id="index-nav" class="col-9">
        <?php require_once('breadcrumbs.php'); ?>
        <form id="form" action="#" class="wizard">
            <h1>Item</h1>
            <fieldset>
                <div class="col-6">
                    <div class="form-group">
                        <label>¿Qué item deseas añadir?</label>
                        <select id="item">
                            <option value="null">-</option>
                            <option value="dress">Vestido de Novia</option>
                            <option value="cloth">Tela</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="title-description">Descripción Perfil</h3>
                    <div class="def-info">
                        <p>Selecciona el item que necesitas añadir.</p>
                    </div>
                    <div class="add-dress">
                        <p>Ingresa un nuevo vestido de novia.</p>
                    </div>
                    <div class="add-cloths">
                        <p>Ingresa una nueva tela al inventario.</p>
                    </div>
                </div>
            </fieldset>
            <h1>Detalle</h1>
            <fieldset>
                <div id="wizard-select"></div>
            </fieldset>
            <h1>Guardar</h1>
            <fieldset>
                <p>Ingresarás nueva información al sistema, algunos de estos datos no  </p>
            </fieldset>
        </form>
    </section>
    <!-- Comentario de prueba -->
    <!--/#index .col-8 -->
</section>
<!-- /admin -->
<?php require_once('footer.php'); ?>
