<?php require_once('header-in.php'); ?>
<section id="admin" class="contenedor">

    <?php require_once('nav.php'); ?>
    <section id="index-nav" class="col-9">
        <?php require_once('breadcrumbs.php'); ?>
        <div class="table-container">
            <table id="activo">
                <thead>
                <tr class="encabezado">
                    <th>Nombre</th>
                    <th>Color</th>
                    <th>ID</th>
                    <th>Cantidad</th>
                </tr>
                <tr class="filtro">
                    <th>Por agotarse</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tr class="dato-table" onClick="location.href='cloth.php'">
                    <td>Tela 1</td>
                    <td>Marfil</td>
                    <td>1234</td>
                    <td>400 mts</td>
                </tr>
                <tr class="dato-table">
                    <td>Tela 2</td>
                    <td>Blanco</td>
                    <td>1234</td>
                    <td>200 mt</td>
                </tr>
                <tr class="dato-table">
                    <td>Tela 3</td>
                    <td>Marfil</td>
                    <td>1234</td>
                    <td>150 mt</td>
                </tr>
            </table>
            <table id="pendiente">
                <thead>
                <tr class="filtro">
                    <th>En stock</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tr class="dato-table">
                    <td>Tela 5</td>
                    <td>Marfil</td>
                    <td>1234</td>
                    <td>1000 mt</td>
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
