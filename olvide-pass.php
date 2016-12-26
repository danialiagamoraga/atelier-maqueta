
<?php require_once('header-login.php'); ?>
<section id="login">
  <h1 class="title">olvide mi contraseña</h1>
  <hr class="line-pink">
  <p class="description">Ingresa tu email de contacto y obtiene tu nueva contraseña.</p>
  <div class="content col-5">
    <form method="post" action="" id="acceso">
      <label class="label">email:</label>
      <input type="email" id="email" value="" placeholder="Ingresa tu email" name="email-access" class="inputs">
      <input type="submit" value="recuperar contraseña" class="send">
      <p class="recordatorio">¡Recordatorio de contraseña enviado!</p>
    </form>
  </div>
  <!-- /content col-6 --> 
</section>
<!-- /login -->
<?php require_once('rrss.php'); ?>
<?php require_once('footer.php'); ?>
