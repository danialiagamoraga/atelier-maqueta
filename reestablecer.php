
<?php require_once('header-login.php'); ?>
<section id="login">
  <h1 class="title">reestablecer contraseña</h1>
  <hr class="line-pink">
  <p class="description">Ingresa tu email de contacto y confirma tu cambio de contraseña.</p>
  <div class="contenedor col-5">
    <form method="post" action="" id="acceso">
      <label class="label">email:</label>
      <input type="email" id="email" value="" placeholder="Ingresa tu email" name="email-access" class="inputs">
      <label class="label">Nueva contraseña:</label>
      <input type="password" id="pass" value="" placeholder="Ingresa tu nueva contraseña" name="pass-access" class="inputs">
      <label class="label">Confirma contraseña:</label>
      <input type="password" id="pass-1" value="" placeholder="Ingresa tu contraseña nuevamente" name="pass-access" class="inputs">
      <input type="submit" value="reestablecer contraseña" class="send">
    </form>
  </div>
  <!-- /content col-6 --> 
</section>
<!-- /login -->
<?php require_once('rrss.php'); ?>
<?php require_once('footer.php'); ?>
