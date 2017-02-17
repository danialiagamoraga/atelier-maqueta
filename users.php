<?php require_once('header-in.php'); ?>
<section id="admin" class="contenedor">

    <?php require_once('nav.php'); ?>
    <section id="index-nav" class="col-9 sub-nav">
        <?php require_once('breadcrumbs.php'); ?>
        <div href="users-table.php" class="col-4">
            <a href="users-table.php" class="user-list">
                <h3 class="index-title">Usuarios</h3>
                <p>Lista de usuarios</p>
            </a>
        </div>
        <!-- /col-4 index dress-->
        <div href="add-user.php" class="col-4">
            <a href="add-user.php" class="add">
                <h3 class="index-title">Crear usuario</h3>
                <p>+</p>
            </a>
        </div>
        <!-- /col-4 index size-->
    </section>
    <!--/#index-nav .col-8 -->
</section>
<!-- /admin -->
<?php require_once('footer.php'); ?>
