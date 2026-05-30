<!DOCTYPE html>
<html lang="es">
<?php
require_once VIEWS_PATH . 'partials/head.php';
?>

<body>
    <?php require_once VIEWS_PATH . 'partials/footer.php' ?>
    <main class="login-main">
        <section class="container">
            <h1>Iniciar Sesión</h1>
            <form action="/api/login/validation" method="POST" class="login-form">
                <div class="form-group form-inputs">
                    <div class="email-group">
                        <label for="email"></label>
                        <input type="email" id="email" name="email" placeholder="correo electronico" require>
                    </div>
                    <div class="password-group">
                        <label for="password"></label>
                        <input type="password" name="password" id="password" placeholder="contraseña" require>
                        <button type="button" class="btn-view-password"></button>
                    </div>
                    <div class="recovery-group">
                        <a href="" class="href-recovery">¿Olvidaste tu contraseña?</a>
                    </div>

                </div>
                <div class="form-group submit-group">
                    <input type="submit" value="Ingresar">
                </div>
            </form>
        </section>
        <?php require_once VIEWS_PATH . 'partials/footer.php' ?>
    </main>
</body>

</html>