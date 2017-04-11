<?php require_once('header-in.php'); ?>
<section id="admin" class="contenedor">

    <?php require_once('nav.php'); ?>
    <section id="index-nav" class="col-9">
        <?php require_once('breadcrumbs.php'); ?>
        <div class="nav-print">
            <ul>
                <li class=""><a href="workshop-in.php">volver atrás</a></li>
                <li class=""><a href="#" class="" id="manual-entry" data-target="#entry" data-toggle="modal">Añadir entrada manual</a></li>
            </ul>
        </div>
        <div class="table-container">
            <table id="activo">
                <thead>
                <tr class="encabezado">
                    <th>Accion</th>
                    <th>Fecha</th>
                    <th>Usuario</th>
                </tr>
                </thead>
                <tr class="dato-table">
                    <td>Añadió vestido Abelia</td>
                    <td>15 / 12 / 2016</td>
                    <td>daliaga</td>
                </tr>
                <tr class="dato-table">
                    <td>Añadió Tul Bordado marfil </td>
                    <td>11 / 03 / 2017</td>
                    <td>jcampos</td>
                </tr>
                <tr class="dato-table">
                    <td>Modifico vestido Tepa</td>
                    <td> 22 / 12 / 2017</td>
                    <td>jfierro</td>
                </tr>
                <tr class="dato-table">
                    <td>Actualizó macrame crudo</td>
                    <td> 22 / 12 / 2017</td>
                    <td>jfierro</td>
                </tr>
                <tr class="dato-table">
                    <td>Elimino vestido rosa</td>
                    <td> 22 / 12 / 2017</td>
                    <td>jfierro</td>
                </tr>
                <tr class="dato-table">
                    <td>Actualizó macrame crudo</td>
                    <td> 22 / 12 / 2017</td>
                    <td>jfierro</td>
                </tr>
                <tr class="dato-table">
                    <td>E.M: - 5mt de tela nº125 </td>
                    <td> 22 / 12 / 2017</td>
                    <td>jfierro</td>
                </tr>
            </table>
        </div>

        <div class="paginacion">
            <p>Mostrando 10 de 25</p>
            <ul>
                <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                <li>10 de 15</li>
                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <!--/paginacion -->
    </section>
    <!--/#index-nav .col-8 -->
</section>
<!-- /admin -->
<?php require_once('footer.php'); ?>
