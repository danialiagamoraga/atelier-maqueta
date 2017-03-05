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
            <h1>información Usuario <a id="user-edit" href="#" data-target="#info" data-toggle="modal"><span
                            class="edit">editar</span></a></h1>
            <hr>
            <div class="col-6">
                <p>Nombre: <span>Valentina Fierro Gutiérrez</span></p>
            </div>
            <!-- /col-6 -->
            <div class="col-6">
                <p>Nombre de Usuario: <span>vfierro</span></p>
            </div>
            <!-- /col-6 -->
        </article>
        <!-- /info-novia -->
        <article class="info-novia">
            <h1>Información de contacto <a id="user-contact" href="#" data-target="#compra" data-toggle="modal"><span
                            class="edit">editar</span></a></h1>
            <hr>
            <div class="col-6">
                <p>Email: valentina.fierro@gmail.com</p>
                <p>Teléfono: +569 50488001 / +569 1234567</p>
            </div>
            <!-- /col-6 -->
            <div class="col-6">
                <p>Cumpleaños: 12/03/1991</p>
            </div>
            <!-- /col-6 -->
        </article>
        <!-- /info-novia -->
        <article class="info-novia">
            <h1>Perfil <a id="user-profile" href="#" data-target="#compra" data-toggle="modal"><span
                            class="edit">editar</span></a></h1>
            <hr>
            <div class="col-6">
                <p>Perfil asignado: Vendedora</p>
            </div>
            <!-- /col-6 -->
        </article>
        <!-- /info-novia -->
    </section>
    <!--/#index-nav .col-8 -->
</section>
<!-- /admin -->
<?php require_once('footer.php'); ?>
