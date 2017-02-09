<?php require_once('header-in.php'); ?>
<section id="admin" class="content">

    <?php require_once('nav-ppal.php'); ?>
    <section id="index-nav" class="col-8">
        <?php require_once('breadcrumbs.php'); ?>
        <table id="activo">
            <tr class="encabezado">
                <th>Nombre</th>
                <th>Perfil</th>
                <th>Usuario</th>
                <th>Email</th>
            </tr>
            <tr class="dato-table" onClick="location.href='users-inside.php'">
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
    </section>
    <!--/#index-nav .col-8 -->
</section>
<!-- /admin -->
<?php require_once('footer.php'); ?>
