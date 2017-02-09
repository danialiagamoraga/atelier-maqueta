<?php require_once('header-in.php'); ?>
<section id="admin" class="content">

    <?php require_once('nav-ppal.php'); ?>
    <section id="index-nav" class="col-8">
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
                            <option value="seller" id="end">Vendedor</option>
                            <option value="design" id="cancel">Modista</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="title-description">Descripción Perfil</h3>
                    <div id="info-add">
                        <p>Selecciona el perfil de usuario que corresponda.</p>
                    </div>
                    <div id="info-admin">
                        <p>Si asignas este perfil, el usuario tendrá acceso total al panel de administración Atelier.</p>
                    </div>
                    <div id="info-seller">
                        <p>Si asignas este perfil, el usuario podrá añadir, modificar y eliminar información de las novias.</p>
                    </div>
                    <div id="info-design">
                        <p>Si asignas este perfil, el usuario podrá visualizar su calendario de citas y libreta de contactos. </p>
                    </div>
                    <div id="info-design">
                        <p>Si asignas este perfil, el usuario podrá visualizar su calendario de citas y libreta de contactos. </p>
                    </div>
                </div>
            </fieldset>
            <h1>Añadir a contactos</h1>
            <fieldset>
                <div class="col-6">
                    <div class="form-group">
                        <label>¿Desea añadir a este contacto a tu libreta?</label>
                        <label class="label-radio">
                            <input id="radio-4" name="contacto" type="radio" value="yes" class="form-control">
                            Sí, deseo añadirlo a mis contactos</label>
                        <label class="label-radio">
                            <input id="radio-5" name="contacto" type="radio" value="no" class="form-control">
                            No, lo añadiré más tarde.</label>
                    </div>
                </div>
            </fieldset>
        </form>

    </section>
    <!--/#index .col-8 -->
</section>
<!-- /admin -->
<?php require_once('footer.php'); ?>
