<?php require_once('header-in.php'); ?>
<section id="admin" class="content">

    <?php require_once('nav-ppal.php'); ?>
    <section id="index-nav">
        <?php require_once('breadcrumbs.php'); ?>
        <a href="users-table.php" class="col-4">
            <div class="user-list">
                <h3 class="index-title">Usuarios</h3>
                <p>Lista de usuarios</p>
            </div>
        </a>
        <!-- /col-4 index dress-->
        <a href="add-user.php" class="col-4">
            <div class="add">
                <h3 class="index-title">Crear usuario</h3>
                <p>+</p>
            </div>
        </a>
        <!-- /col-4 index size-->
    </section>
    <!--/#index-nav .col-8 -->
</section>
<!-- /admin -->
<?php require_once('footer.php'); ?>
