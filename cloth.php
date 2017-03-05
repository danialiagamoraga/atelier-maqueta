<?php require_once('header-in.php'); ?>
<section id="admin" class="contenedor">

    <?php require_once('nav.php'); ?>
    <section id="index-nav" class="col-9">
        <?php require_once('breadcrumbs.php'); ?>
        <div class="nav-print">
            <ul>
                <li class=""><a href="users-table.php">volver atrás</a></li>
                <li class=""><a href="#" class=""><i class="fa fa-trash-o" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <article class="info-novia">
            <h1>Tela 1 <a id="tela" href="#" data-target="#tela" data-toggle="modal"><span
                            class="edit">editar</span></a></h1>
            <hr>
            <div class="col-6">
                <p>Nombre: <span>Tela 1</span></p>
                <p>Cantidad: <span>300 mt</span></p>
                <p>Color: Marfil</p>
            </div>
            <!-- /col-6 -->
            <div class="col-6">
                <p>Ingresado por: daliaga</p>
                <p>Ingreso: 25/05/2014</p>
                <p>ID: 1234</p>
            </div>
            <!-- /col-6 -->
        </article>
        <!-- /info-novia -->
    </section>
    <!--/#index-nav .col-8 -->
</section>
<!-- /admin -->
<?php require_once('footer.php'); ?>
