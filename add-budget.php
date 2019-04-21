<?php require_once('header-in.php'); ?>
<section id="admin" class="contenedor">

    <?php require_once('nav.php'); ?>
    <section id="index-nav" class="col-9 sub-nav">
        <?php require_once('breadcrumbs.php'); ?>
        <form id="form" action="#">
            <!-- <h1>Info Novia</h1>
            <<fieldset>
                <div class="col-6">
                    <div class="form-group">
                        <label>Nombre *</label>
                        <input id="userName" name="userName" type="text" class="form-control required">
                    </div>
                    <div class="form-group">
                        <label>Apelido*</label>
                        <input id="surname" name="surname" type="text" class="form-control required">
                    </div>
                    <div class="form-group">
                        <label>Matrimonio*</label>
                        <input id="date" name="marriage" type="date" class="form-control required">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Email*</label>
                        <input id="email" name="password" type="email" class="form-control required">
                    </div>
                    <div class="form-group phone-info">
                        <label>Telefono*</label>
                        <input id="tel" name="phone" type="tel" class="form-control required">
                    </div>
                    <div class="form-group add-here"></div>
                    <div class="form-group phone-botton">
                        <label>Añadir teléfono</label>
                        <button id="add-phone">+</button>
                    </div>
                </div>

            </fieldset>-->
            <h1>Datos cotización</h1>
            <fieldset>
                <div class="col-6">
                    <div class="form-group">
                        <label>Vendedora</label>

                        <select data-placeholder="Elige un vestido" class="chosen-select" tabindex="2">
                            <option value="">Elige una vendedora</option>
                            <option value="jcampos">Jeannette</option>
                            <option value="mcuevas">Mónica</option>
                            <option value="smena">Silvia</option>
                            <option value="vfierro">Valentina</option>
                            <option value="lramirez">Leyla</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Modelo</label>
                        <select data-placeholder="-" class="chosen-select" multiple style="width:350px;" tabindex="4">
                            <option value="">Elige un vestido</option>
                            <option value="Afrodita">Modelo Afrodita</option>
                            <option value="Alice">Modelo Alice</option>
                            <option value="Alondra">Modelo Alondra</option>
                            <option value="Amalia">Modelo Amalia</option>
                            <option value="Amatista">Modelo Amatista</option>
                        </select>
                    </div>
                </div>

            </fieldset>
        </form>
    </section>
    <!--/#index .col-8 -->
</section>
<!-- /admin -->
<?php require_once('footer.php'); ?>
