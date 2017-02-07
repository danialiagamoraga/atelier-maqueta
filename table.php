<?php require_once('header-in.php'); ?>
<section id="admin" class="content">

    <?php require_once('nav-ppal.php'); ?>
    <section id="index-nav" class="col-8">
        <?php require_once('breadcrumbs.php'); ?>
        <table id="activo">
            <tr class="encabezado">
                <th>Nombre</th>
                <th>Matrimonio</th>
                <th>Modelo</th>
                <th>Próxima cita</th>
            </tr>
            <tr class="filtro">
                <th>En confección</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr class="dato-table" onClick="location.href='info-bride.php'">
                <td>Josefina Fierro</td>
                <td> 11 / 03 / 2017</td>


                <td>Romané</td>
                <td> 15 / 12 / 2016</td>
            </tr>
            <tr class="dato-table">
                <td>Valentina Fierro</td>
                <td>11 / 03 / 2017</td>
                <td>Florecer</td>
                <td>11 / 03 / 2017</td>
            </tr>
            <tr class="dato-table">
                <td>Jeannette Campos</td>
                <td> 22 / 12 / 2017</td>
                <td>Clarisa</td>
                <td>10 / 09 / 2017</td>
            </tr>
        </table>

        <table id="pendiente">
            <tr class="filtro">
                <th>Pendientes</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr class="dato-table">
                <td>Silvia Mena</td>
                <td>25 / 01 / 2020</td>
                <td>Candelaria</td>
                <td>Por coordinar</td>
            </tr>
        </table>

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
