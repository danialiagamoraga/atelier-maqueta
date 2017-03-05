<?php require_once('header-in.php'); ?>
<section id="admin" class="contenedor">

    <?php require_once('nav.php'); ?>
    <section id="index-nav" class="col-9 sub-nav">
        <?php require_once('breadcrumbs.php'); ?>
        <div class="col-4">
            <a href="dress-stock.php" class="dress">
                <h3 class="index-title">Vestidos de novia</h3>
                <p>Stock de vestidos</p>
            </a>
        </div>
        <!-- /col-4 index dress-->
        <div class="col-4">
            <a href="cloth-stock.php" class="cloth">
                <h3 class="index-title">Telas</h3>
                <p>Stock de telas</p>
            </a>
        </div>
        <div class="col-4">
            <a href="add-item.php" class="add-item">
                <h3 class="index-title">ingresar item</h3>
                <p>Añadir vestido o tela</p>
            </a>
        </div>
    </section>
    <!--/#index .col-8 -->
</section>
<!-- /admin -->
<?php require_once('footer.php'); ?>
