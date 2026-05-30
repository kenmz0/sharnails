<?php
require_once VIEWS_PATH . 'partials/head.php';
?>

<body>
    <?php require_once VIEWS_PATH . 'partials/header.php' ?>
    <script src="/public/assets/scripts/signup.validation.form.js"></script>
    <main class="register-main">
        <section class="register-container">
            <h2>Crea tu cuenta</h2>
            <p class="subtitle">Únete a nuestra plataforma hoy mismo.</p>

            <form action="/api/register" method="POST" id="signup-form">

                <div class="form-row">
                    <div class="form-group">
                        <label for="firstname">Nombres</label>
                        <input type="text" id="first_name" name="first_name" placeholder="Ej: Juan" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Apellidos</label>
                        <input type="text" id="last_name" name="last_name" placeholder="Ej: Pérez" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="text" id="email" name="email" placeholder="correo@ejemplo.com" required>
                </div>

                <div class="form-group">
                    <label for="phone">Teléfono <span
                            style="font-weight: normal; color: #888;">(Opcional)</span></label>
                    <input type="tel" id="phone" name="phone_number" placeholder="+593 999 999 999">
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Mínimo 8 caracteres" required>
                </div>

                <div class="form-group">
                    <label for="confirm-password">Repetir contraseña</label>
                    <input type="password" id="confirm-password" name="confirm_password"
                        placeholder="Confirma tu contraseña" required>
                </div>

                <button type="submit">Registrarse</button>
            </form>

            <div class="login-footer">
                <p>¿Ya tienes una cuenta? <a href="/signin" data-destino="Ingresar">Inicia sesión</a></p>
            </div>
        </section>
    </main>
    <?php require_once VIEWS_PATH . 'partials/loader.php'; ?>
    <?php require_once VIEWS_PATH . 'partials/footer.php' ?>
</body>

</html>