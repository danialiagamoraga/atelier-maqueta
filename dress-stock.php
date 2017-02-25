<?php require_once('header-in.php'); ?>
<section id="admin" class="contenedor">

    <?php require_once('nav.php'); ?>
    <section id="index-nav" class="col-9">
        <?php require_once('breadcrumbs.php'); ?>
        <div class="table-container">
            <table>
                <thead>
                <tr class="encabezado">
                    <th>Listado de vestidos</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr class="filtro">
                    <th>Modelo</th>
                    <th>Origen</th>
                    <th>Valor</th>
                    <th>ID</th>
                </tr>
                </thead>
                <tr class="dato-table" onClick="location.href='dress.php'">
                    <td>Abelia</td>
                    <td>Nacional</td>
                    <td>$720.000</td>
                    <td>1324</td>
                </tr>
                <tr class="dato-table" onClick="">
                    <td>Afrodita</td>
                    <td>Nacional</td>
                    <td>$680.000</td>
                    <td>1325</td>
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
