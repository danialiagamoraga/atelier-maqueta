<?php require_once('header-in.php'); ?>
<section id="admin" class="contenedor">

    <?php require_once('nav.php'); ?>
    <section id="index-nav" class="col-9 sub-nav">
        <?php require_once('breadcrumbs.php'); ?>
        <form method="post" id="balance">
            <div class="col-6">
                <label>¿Qué información deseas obtener?</label>
                <select id="excel">
                    <option value="null">-</option>
                    <option value="total">Registro completo</option>
                    <option value="annual">Información Anual</option>
                    <option value="month">Información Mensual</option>
                    <option value="others">Otro</option>
                </select>
                <div id="rango">
                    <label>Desde:</label>
                    <input id="date" name="since" type="date" class="form-control required">
                    <label>Hasta:</label>
                    <input id="date" name="until" type="date" class="form-control required">
                </div>
            </div>
            <div class="col-6">
                <h3 class="title-description">¿Qué información necesitas?</h3>
                <div id="default">
                    <p>Selecciona el tipo de archivo que necesitas.</p>
                </div>
                <div id="total">
                    <p>Genera un archivo xlsx con la información histórica.</p>
                </div>
                <div id="annual">
                    <p>Genera un archivo xlsx con la información anual.</p>
                </div>
                <div id="month">
                    <p>Genera un archivo xlsx con la información mensual.</p>
                </div>
                <div id="others">
                    <p>Selecciona el rango que necesitas.</p>
                </div>
            </div>
            <div class="col-12">
                <input type="submit" value="descargar">
            </div>
        </form>
    </section>
    <!--/#index .col-8 -->
</section>
<!-- /admin -->
<?php require_once('footer.php'); ?>
