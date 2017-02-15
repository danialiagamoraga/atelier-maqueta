<?php require_once('header-in.php'); ?>
<section id="admin" class="content">

    <?php require_once('nav-ppal.php'); ?>
    <section id="index-nav">
        <?php require_once('breadcrumbs.php'); ?>
        <form id="form" action="#" class="wizard">
            <h1>Información Usuario</h1>
            <fieldset>
                <div class="col-6">
                    <div class="form-group">
                        <label>Nombre *</label>
                        <input id="userName" name="userName" type="text" class="form-control required">
                    </div>
                    <div class="form-group">
                        <label>Apellido *</label>
                        <input id="userName" name="userName" type="text" class="form-control required">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Nombre de Usuario</label>
                        <input id="alias" name="alias" type="text" class="form-control required">
                    </div>
                </div>

            </fieldset>
            <h1>Información de contacto</h1>
            <fieldset>
                <div class="col-6">
                    <div class="form-group phone-info">
                        <label>Telefono *</label>
                        <input id="tel" name="phone" type="tel" class="form-control required">
                    </div>
                    <div class="form-group phone-info">
                        <label>Email</label>
                        <input id="email" name="password" type="email" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Cumpleaños</label>
                            <input id="date" name="marriage" type="date" class="form-control">
                        </div>
                    </div>
                </div>
            </fieldset>
            <h1>Perfil</h1>
            <fieldset>
                <div class="col-6">
                    <div class="form-group">
                        <label>¿A qué área corresponde?</label>
                        <select id="perfil">
                            <option value="null">-</option>
                            <option value="admin">Administrador</option>
                            <option value="atelier">Taller</option>
                            <option value="seller">Vendedor</option>
                            <option value="design">Modista</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="title-description">Descripción Perfil</h3>
                    <div id="info-add">
                        <p>Selecciona el perfil de usuario que corresponda.</p>
                    </div>
                    <div id="info-admin">
                        <p>El usuario tendrá acceso total al panel de administración Atelier.</p>
                    </div>
                    <div id="info-taller">
                        <p>El usuario podrá añadir, modificar y eliminar el contenido, además tendrá acceso al inventario.</p>
                    </div>
                    <div id="info-seller">
                        <p>El usuario podrá añadir, modificar y eliminar el contenido.</p>
                    </div>
                    <div id="info-design">
                        <p>El usuario tendrá acceso a su propio calendario de citas.Si asignas este perfil.</p>
                    </div>
                </div>
            </fieldset>
        </form>

    </section>
    <!--/#index .col-8 -->
</section>
<!-- /admin -->
<?php require_once('footer.php'); ?>
