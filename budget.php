<?php require_once('header-in.php'); ?>
<section id="admin" class="contenedor">

    <?php require_once('nav.php'); ?>
    <section id="index-nav" class="col-9 sub-nav">
        <?php require_once('breadcrumbs.php'); ?>
        <div class="col-4">
            <a href="add-budget.php" class="budget">
                <h3 class="index-title">añadir cotización</h3>
                <p>ingresar nueva cotización</p>
            </a>
        </div>
        <!-- /col-4 index dress-->
        <div href="#" class="col-4">
            <a href="history-budget.php" class="record">
                <h3 class="index-title">Cotizaciones</h3>
                <p>Historial de cotizaciones</p>
            </a>
        </div>
    </section>
    <!--/#index .col-8 -->
</section>
<!-- /admin -->
<?php require_once('footer.php'); ?>
