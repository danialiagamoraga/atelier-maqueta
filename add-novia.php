<?php require_once('header-in.php'); ?>
<section id="admin" class="content">
  <?php require_once('nav-ppal.php'); ?>
  <section id="index-nav" class="col-8">
    <?php require_once('breadcrumbs.php'); ?>
    <form id="form" action="#" class="wizard">
      <h1>Información novia</h1>
      <fieldset>
        <div class="col-form">
          <div class="form-group">
            <label>Nombre *</label>
            <input id="userName" name="userName" type="text" class="form-control required">
          </div>
          <div class="form-group">
            <label>Email*</label>
            <input id="email" name="password" type="email" class="form-control required">
          </div>
          <div class="form-group">
            <label>Matrimonio*</label>
            <input id="date" name="marriage" type="date" class="form-control required">
          </div>
          <div class="form-group">
            <input id="region" name="region" type="checkbox" class="form-control">
            <label>¿Eres una novia de región?</label>
          </div>
        </div>
      <div class="col-form">
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
        <div class="col-form">
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
            <select data-placeholder="Elige un vestido" class="chosen-select"  tabindex="2">
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
        <div class="col-form"> 
          <div class="form-group">
            <label>Otros</label>
            <textarea></textarea>
          </div>
          <div class="form-group add-symbol">
            <label>Total*</label>
            <span class="symbol">$</span>
            <input id="total" name="total" type="text" class="form-control required">
          </div>
        </div>
      </fieldset>
      <h1>Medidas</h1>
      <fieldset class="m-size">
      <h2 class="size-title">Contornos</h2>
      <hr class="line-pink">
          <div class="form-group add-symbol col-4">
            <label>Busto</label>
            <input id="busto" name="m-busto" type="number" class="form-control">
            <span class="symbol">cm</span>
          </div>
          <div class="form-group add-symbol col-4">
            <label>Sobre busto</label>
            <input id="sobre-busto" name="m-sobrebusto" type="number" class="form-control">
            <span class="symbol">cm</span>
          </div>
          <div class="form-group add-symbol col-4">
            <label>Bajo busto</label>
            <input id="bajo-busto" name="m-bajobusto" type="number" class="form-control">
            <span class="symbol">cm</span>
          </div>
          <div class="form-group add-symbol col-4">
            <label>Separación busto</label>
            <input id="separacion-busto" name="m-sepbusto" type="number" class="form-control">
            <span class="symbol">cm</span>
          </div>
          <div class="form-group add-symbol col-4">
            <label>Cintura</label>
            <input id="cintura" name="m-cintura" type="number" class="form-control">
            <span class="symbol">cm</span>
          </div>
          <div class="form-group add-symbol col-4">
            <label>Cadera alta</label>
            <input id="cadera-alta" name="m-cadealta" type="number" class="form-control">
            <span class="symbol">cm</span>
          </div>
        
        <div class="form-group add-symbol col-4">
            <label>Alto cadera alta</label>
            <input id="a-cadera-alta" name="m-acadealta" type="number" class="form-control">
            <span class="symbol">cm</span>
          </div>
          <div class="form-group add-symbol col-4">
            <label>Cadera baja</label>
            <input id="cadera-baja" name="m-cadebaja" type="number" class="form-control">
            <span class="symbol">cm</span>
          </div>
          <div class="form-group add-symbol col-4">
            <label>Alto cadera baja</label>
            <input id="a-cadera-baja" name="m-acadebaja" type="number" class="form-control">
            <span class="symbol">cm</span>
          </div>
          <div class="form-group add-symbol col-4">
            <label>Contorno brazo</label>
            <input id="contorno-brazo" name="m-contobrazo" type="number" class="form-control">
            <span class="symbol">cm</span>
          </div>
          <div class="form-group add-symbol col-4">
            <label>Ancho puño</label>
            <input id="ancho-puño" name="m-anchopuno" type="number" class="form-control">
            <span class="symbol">cm</span>
          </div>
          <div class="form-group add-symbol col-4">
            <label>Contorno cuello</label>
            <input id="contorno-cuello" name="m-contocuello" type="number" class="form-control">
            <span class="symbol">cm</span>
          </div>
        <h2 class="size-title">Altos</h2>
      <hr class="line-pink">
          <div class="form-group add-symbol col-4">
            <label>Alto busto</label>
            <input id="alto-busto" name="a-busto" type="number" class="form-control">
            <span class="symbol">cm</span>
          </div>
          <div class="form-group add-symbol col-4">
            <label>Talle delantero</label>
            <input id="talle-delantero" name="t-delantero" type="number" class="form-control">
            <span class="symbol">cm</span>
          </div>
          <div class="form-group add-symbol col-4">
            <label>Largo total</label>
            <input id="largo-total" name="l-total" type="number" class="form-control">
            <span class="symbol">cm</span>
          </div>
          <div class="form-group add-symbol col-4">
            <label>Talle espalda</label>
            <input id="talle-espalda" name="t-espalda" type="number" class="form-control">
            <span class="symbol">cm</span>
          </div>
          <div class="form-group add-symbol col-4">
            <label>Largo manga</label>
            <input id="largo-manga" name="l-manga" type="number" class="form-control">
            <span class="symbol">cm</span>
          </div>
        <div class="form-group add-symbol col-4">
            <label>Alto costado</label>
            <input id="alto-costado" name="a-costado" type="number" class="form-control">
            <span class="symbol">cm</span>
          </div>
          <div class="form-group add-symbol col-4">
            <label>Ancho espalda</label>
            <input id="ancho-espalda" name="a-espalda" type="number" class="form-control">
            <span class="symbol">cm</span>
          </div>
          <div class="form-group add-symbol col-4">
            <label>Diag. escote delantero</label>
            <input id="diag-delantero" name="d-delantero" type="number" class="form-control">
            <span class="symbol">cm</span>
          </div>
          <div class="form-group add-symbol col-4">
            <label>Diag. escote espalda</label>
            <input id="diag-espalda" name="d-espalda" type="number" class="form-control">
            <span class="symbol">cm</span>	
          </div>
      </fieldset>
      <h1>Detalle pago</h1>
      <fieldset>
        <div class="col-form">
          <div class="form-group">
            <label>Fecha*</label>
            <input id="date" name="abono" type="date" class="form-control required">
          </div>
          <div class="form-group add-symbol">
            <label>Total abono</label>
            <span class="symbol">$</span>
            <input id="diag-delantero" name="d-delantero" type="number" class="form-control">
          </div>
          <div class="form-group">
            <input id="pendiente" name="pago-pendiente" type="checkbox" class="form-control">
            <label style="display:inline-block;">Pago pendiente</label>
          </div>
        </div>
        <div class="col-form">
        <div class="form-group"><label>Medio de pago</label>
            <select data-placeholder="Elige un vestido" class="chosen-select"  tabindex="2">
              <option value="">Elige un medio de pago</option>
              <option value="transbank">Transbank</option>
              <option value="efectivo">Efectivo</option>
              <option value="cheque">Cheque</option>
              <option value="transferencia">Transferencia</option>
            </select>
        </div>
         <div class="form-group add-symbol">
            <label>Nº de boleta</label>
            <span class="symbol">Nº</span>
            <input id="diag-delantero" name="d-delantero" type="number" class="form-control">
          </div>
          <!--<div class="form-group phone-botton">
            <label>Añadir pago</label>
            <button id="add-pay">+</button>
          </div>-->
        </div>
        <div class="form-group add-here"></div>
      </fieldset>
      <h1>Citas</h1>
      <fieldset>
        <div class="col-form">
          <div class="form-group">
            <label>Modista asignada</label>
            <select data-placeholder="Elige una modita" class="chosen-select"  tabindex="2">
              <option value="">Elige una modita</option>
              <option value="Li">Li</option>
              <option value="Andrea">Andrea</option>
              <option value="Teresa">Teresa</option>
              <option value="Leo">Leo</option>
              <option value="Gloria">Gloria</option>
            </select>
          </div>
          <div class="form-group">
<label>Primera cita</label>
            <input id="date" name="abono" type="date" class="form-control">
          </div>
          <div class="form-group">
            <input id="cita-pendiente" name="por-coordinar" type="checkbox" class="form-control" value="">
            <label style="display:inline-block;">Por coordinar</label>
          </div>
        </div>
        <div class="col-form">
          <div class="form-group">
           <label>Entrega de telas</label>
            <input id="date" name="telas" type="date" class="form-control">
          </div>
         
        </div>
      </fieldset>
    </form>
  </section>
  <!--/#index .col-8 --> 
</section>
<!-- /admin -->
<?php require_once('footer.php'); ?>
