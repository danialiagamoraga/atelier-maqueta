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
                    <th>Perfil</th>
                    <th>Usuario</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tr class="dato-table" onClick="location.href='users-in.php'">
                    <td>Josefina Fierro</td>
                    <td> Administrador</td>
                    <td>jfierro</td>
                    <td>jfierro@gmail.com</td>
                </tr>
                <tr class="dato-table">
                    <td>Daniela Aliaga</td>
                    <td>Administrador</td>
                    <td>daliaga</td>
                    <td>raraliaga@gmail.com</td>
                </tr>
                <tr class="dato-table">
                    <td>Jeannette Campos</td>
                    <td>Vendedor</td>
                    <td>jcampos</td>
                    <td>soynovia@santoencanto.cl</td>
                </tr>
            </table>
        </div>
    </section>
    <!--/#index-nav .col-8 -->
</section>
<!-- /admin -->
<?php require_once('footer.php'); ?>
