<?php require_once('header-login.php'); ?>
<section id="login">
    <h1 class="title">iniciar sesión</h1>
    <hr class="line-pink">
    <p class="description">Ingresa tu email y contraseña.</p>
    <div class="col-5">
        <form method="post" action="home-admin.php" id="acceso">
            <label class="label">email:</label>
            <input type="email" id="email" value="" placeholder="Ingresa tu email" name="email-access" class="inputs">
            <label class="label">contraseña:</label>
            <input type="password" id="pass" value="" placeholder="Ingresa tu contraseña" name="pass-access"
                   class="inputs">
            <input type="submit" value="iniciar sesión" class="send">
            <p class="forget"><a href="olvide-pass.php">olvide mi contraseña</a></p>
            <p class="remember">
                <input type="checkbox" name="remember" value="recordar">
                Recuérdame</p>
        </form>
    </div>
    <!-- /content col-6 -->
</section>
<!-- /login -->
<?php require_once('rrss.php'); ?>
<?php require_once('footer.php'); ?>
