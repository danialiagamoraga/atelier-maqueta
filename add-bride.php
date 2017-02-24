<?php require_once('header-in.php'); ?>
<section id="admin" class="contenedor">
    <?php require_once('nav.php'); ?>
    <section id="index-nav" class="col-9">
        <?php require_once('breadcrumbs.php'); ?>
        <form id="form" action="#" class="wizard">
           -<h1>Info Novia</h1>
            <fieldset>
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
                    <div class="form-group">
                        <input id="region" name="region" type="checkbox" class="form-control">
                        <label>¿Novia de región?</label>
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

            </fieldset>
            <h1>Detalle compra</h1>
            <fieldset>
                <div class="col-6">
                    <div class="form-group">
                        <label>Vendedora</label>
                        <select data-placeholder="-" class="chosen-select" multiple style="width:350px;" tabindex="4">
                            <option value="">-</option>
                            <option value="jcampos">Jeannette</option>
                            <option value="mcuevas">Mónica</option>
                            <option value="smena">Silvia</option>
                            <option value="vfierro">Valentina</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Modelo</label>
                        <select data-placeholder="Elige un vestido" class="chosen-select" tabindex="2">
                            <option value="">Elige un vestido</option>
                            <option value="Afrodita">Modelo Afrodita</option>
                            <option value="Alice">Modelo Alice</option>
                            <option value="Alondra">Modelo Alondra</option>
                            <option value="Amalia">Modelo Amalia</option>
                            <option value="Amatista">Modelo Amatista</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="block">Color</label>
                        <label class="label-radio">
                            <input id="radio-1" name="optionsRadios" type="radio" value="blanco" class="form-control">
                            Blanco</label>
                        <label class="label-radio">
                            <input id="radio-2" name="optionsRadios" type="radio" value="marfil" class="form-control">
                            Marfil</label>
                        <label class="label-radio">
                            <input id="radio-3" name="optionsRadios" type="radio" value="" class="form-control">
                            Otro</label>
                        <input id="other" name="color" type="text" class="form-control required">
                    </div>
                    <div class="form-group">
                        <label class="block">Descuento</label>
                        <label class="label-radio">
                            <input id="radio-4" name="discount" type="radio" value="5" class="form-control">
                            5%</label>
                        <label class="label-radio">
                            <input id="radio-5" name="discount" type="radio" value="10" class="form-control">
                            10%</label>
                        <label class="label-radio">
                            <input id="radio-5" name="discount" type="radio" value="15" class="form-control">
                            15%</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Otros</label>
                        <textarea></textarea>
                    </div>
                    <div class="form-group add-symbol">
                        <label>Total*</label>
                        <span>$</span>
                        <input id="price" name="total" type="text" class="form-control required">
                    </div>
                </div>
            </fieldset>
            <h1>Detalle pago</h1>
            <fieldset>
                <div class="col-6">
                    <div class="form-group">
                        <label>Fecha*</label>
                        <input id="date" name="abono" type="date" class="form-control required">
                    </div>
                    <div class="form-group add-symbol">
                        <label>Total abono</label>
                        <span>$</span>
                        <input id="diag-delantero" name="d-delantero" type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <input id="pendiente" name="pago-pendiente" type="checkbox" class="form-control">
                        <label style="display:inline-block;">Pago pendiente</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"><label>Medio de pago</label>
                        <select data-placeholder="Elige un vestido" class="chosen-select" tabindex="2">
                            <option value="">Elige un medio de pago</option>
                            <option value="transbank">Transbank</option>
                            <option value="efectivo">Efectivo</option>
                            <option value="cheque">Cheque</option>
                            <option value="transferencia">Transferencia</option>
                        </select>
                    </div>
                    <div class="form-group add-symbol">
                        <label>Nº de boleta</label>
                        <span>Nº</span>
                        <input id="diag-delantero" name="d-delantero" type="number" class="form-control">
                    </div>

                </div>
            </fieldset>
            <h1>Medidas</h1>
            <fieldset class="m-size">
                <h2 class="size-title">- Contornos:</h2>
                <div class="col-4 form-group add-symbol">
                    <label>Busto</label>
                    <input id="busto" name="m-busto" type="number" class="form-control">
                    <span class="symbol">cm</span>
                </div>
                <div class="col-4 form-group add-symbol">
                    <label>Sobre busto</label>
                    <input id="sobre-busto" name="m-sobrebusto" type="number" class="form-control">
                    <span class="symbol">cm</span>
                </div>
                <div class="col-4 form-group add-symbol">
                    <label>Bajo busto</label>
                    <input id="bajo-busto" name="m-bajobusto" type="number" class="form-control">
                    <span class="symbol">cm</span>
                </div>
                <div class="col-4 form-group add-symbol">
                    <label>Separación busto</label>
                    <input id="separacion-busto" name="m-sepbusto" type="number" class="form-control">
                    <span class="symbol">cm</span>
                </div>
                <div class="col-4 form-group add-symbol">
                    <label>Cintura</label>
                    <input id="cintura" name="m-cintura" type="number" class="form-control">
                    <span class="symbol">cm</span>
                </div>
                <div class="col-4 form-group add-symbol">
                    <label>Cadera alta</label>
                    <input id="cadera-alta" name="m-cadealta" type="number" class="form-control">
                    <span class="symbol">cm</span>
                </div>

                <div class="col-4 form-group add-symbol">
                    <label>Alto cadera alta</label>
                    <input id="a-cadera-alta" name="m-acadealta" type="number" class="form-control">
                    <span class="symbol">cm</span>
                </div>
                <div class="col-4 form-group add-symbol">
                    <label>Cadera baja</label>
                    <input id="cadera-baja" name="m-cadebaja" type="number" class="form-control">
                    <span class="symbol">cm</span>
                </div>
                <div class="col-4 form-group add-symbol">
                    <label>Alto cadera baja</label>
                    <input id="a-cadera-baja" name="m-acadebaja" type="number" class="form-control">
                    <span class="symbol">cm</span>
                </div>
                <div class="col-4 form-group add-symbol">
                    <label>Contorno brazo</label>
                    <input id="contorno-brazo" name="m-contobrazo" type="number" class="form-control">
                    <span class="symbol">cm</span>
                </div>
                <div class="col-4 form-group add-symbol">
                    <label>Ancho puño</label>
                    <input id="ancho-puño" name="m-anchopuno" type="number" class="form-control">
                    <span class="symbol">cm</span>
                </div>
                <div class="col-4 form-group add-symbol">
                    <label>Contorno cuello</label>
                    <input id="contorno-cuello" name="m-contocuello" type="number" class="form-control">
                    <span class="symbol">cm</span>
                </div>
                <h2 class="size-title">- Altos:</h2>
                <div class="col-4 form-group add-symbol">
                    <label>Alto busto</label>
                    <input id="alto-busto" name="a-busto" type="number" class="form-control">
                    <span class="symbol">cm</span>
                </div>
                <div class="col-4 form-group add-symbol">
                    <label>Talle delantero</label>
                    <input id="talle-delantero" name="t-delantero" type="number" class="form-control">
                    <span class="symbol">cm</span>
                </div>
                <div class="col-4 form-group add-symbol">
                    <label>Largo total</label>
                    <input id="largo-total" name="l-total" type="number" class="form-control">
                    <span class="symbol">cm</span>
                </div>
                <div class="col-4 form-group add-symbol">
                    <label>Talle espalda</label>
                    <input id="talle-espalda" name="t-espalda" type="number" class="form-control">
                    <span class="symbol">cm</span>
                </div>
                <div class="col-4 form-group add-symbol">
                    <label>Largo manga</label>
                    <input id="largo-manga" name="l-manga" type="number" class="form-control">
                    <span class="symbol">cm</span>
                </div>
                <div class="col-4 form-group add-symbol">
                    <label>Alto costado</label>
                    <input id="alto-costado" name="a-costado" type="number" class="form-control">
                    <span class="symbol">cm</span>
                </div>
                <div class="col-4 form-group add-symbol">
                    <label>Ancho espalda</label>
                    <input id="ancho-espalda" name="a-espalda" type="number" class="form-control">
                    <span class="symbol">cm</span>
                </div>
                <div class="col-4 form-group add-symbol">
                    <label>Diag. escote delantero</label>
                    <input id="diag-delantero" name="d-delantero" type="number" class="form-control">
                    <span class="symbol">cm</span>
                </div>
                <div class="col-4 form-group add-symbol">
                    <label>Diag. escote espalda</label>
                    <input id="diag-espalda" name="d-espalda" type="number" class="form-control">
                    <span class="symbol">cm</span>
                </div>
            </fieldset>
            <h1>Citas</h1>
            <fieldset>
                <div class="col-6">
                    <div class="form-group">
                        <label>Modista asignada</label>
                        <select data-placeholder="Elige una modista" class="chosen-select" tabindex="2">
                            <option value="">Elige una modista</option>
                            <option value="Li">Li</option>
                            <option value="Andrea">Andrea</option>
                            <option value="Teresa">Teresa</option>
                            <option value="Leo">Leo</option>
                            <option value="Gloria">Gloria</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input id="cita-pendiente" name="por-coordinar" type="checkbox" class="form-control" value="">
                        <label style="display:inline-block;">Por coordinar</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Primera cita</label>
                        <input id="date" name="abono" type="date" class="form-control">
                    </div>
                </div>
            </fieldset>
            <h1>Telas</h1>
            <fieldset>
                <div class="col-12">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Entrega de telas</label>
                            <input id="date" name="telas" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Añadir Tela</label>
                            <button id="add-cloth" onclick="return false">+</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 cloth-info">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Tela <span class="num">1</span></label>
                            <select data-placeholder="Selecciona una tela" class="chosen-select" tabindex="2">
                                <option value="">Selecciona una tela</option>
                                <option value="Li">Tela 1</option>
                                <option value="Andrea">Tela 2</option>
                                <option value="Teresa">Tela 3</option>
                                <option value="Leo">Tela 4</option>
                                <option value="Gloria">Tela 5</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group add-symbol">
                            <label>Cantidad</label>
                            <input id="bajo-busto" name="m-bajobusto" type="number" class="form-control">
                            <span class="symbol">mt</span>
                        </div>
                    </div>
                </div>
                <div class="add-cloth"></div>
                <div class="form-group">
                    <input id="pendiente" name="telas-pendiente" type="checkbox" class="form-control">
                    <label style="display:inline-block;">En espera</label>
                </div>
            </fieldset>
        </form>
    </section>
    <!-- Comentario de prueba -->
    <!--/#index .col-8 -->
</section>
<!-- /admin -->
<?php require_once('footer.php'); ?>
