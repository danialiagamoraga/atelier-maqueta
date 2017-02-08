<?php require_once('header-in.php'); ?>
<section id="admin" class="content">

    <?php require_once('nav-ppal.php'); ?>
    <section id="index-nav" class="col-8">
        <?php require_once('breadcrumbs.php'); ?>
        <form id="form" action="#" class="wizard">
            <h1>Información Modista</h1>
            <fieldset>
                <div class="col-6">
                    <div class="form-group">
                        <label>Nombre *</label>
                        <input id="userName" name="userName" type="text" class="form-control required">
                    </div>
                    <div class="form-group phone-info">
                        <label>Telefono *</label>
                        <input id="tel" name="phone" type="tel" class="form-control required">
                    </div>
                    <div class="form-group">
                        <label>Cumpleaños</label>
                        <input id="date" name="marriage" type="date" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Alias *</label>
                        <input id="alias" name="alias" type="text" class="form-control required">
                    </div>
                    <div class="form-group phone-info">
                        <label>Email</label>
                        <input id="email" name="password" type="email" class="form-control">
                    </div>
                </div>

            </fieldset>
            <h1>Disponibilidad horaria</h1>
            <fieldset>
                <div class="col-6">
                    <div class="form-group">
                        <label>Días</label>
                        <select data-placeholder="-" class="chosen-select" multiple style="width:350px;" tabindex="4">
                            <option value="lu">Lunes</option>
                            <option value="ma">Martes</option>
                            <option value="mi">Miércoles</option>
                            <option value="ju">Jueves</option>
                            <option value="vi">Viernes</option>
                            <option value="sa">Sábado</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Horario</label>
                        <select data-placeholder="-" class="chosen-select" multiple style="width:350px;" tabindex="4">
                            <option value="mañana">11:00 a 13:00 hrs</option>
                            <option value="tarde">15:00 a 18:00 hrs</option>
                            <option value="mi">09:00 a 12:30 hrs</option>
                        </select>
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
