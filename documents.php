<?php require_once('header-in.php'); ?>
<section id="admin" class="contenedor">

    <?php require_once('nav.php'); ?>
    <section id="index-nav" class="col-9 sub-nav">
        <?php require_once('breadcrumbs.php'); ?>
        <div class="col-4">
            <a href="balance.php" class="finance">
                <h3 class="index-title">Finanzas</h3>
                <p>Generar balance</p>
            </a>
        </div>
        <!-- /col-4 index dress-->
        <div href="#" class="col-4">
            <a href="#" class="inventory">
                <h3 class="index-title">Inventario</h3>
                <p>Descargar historial</p>
            </a>
        </div>
    </section>
    <!--/#index .col-8 -->
</section>
<!-- /admin -->
<?php require_once('footer.php'); ?>
