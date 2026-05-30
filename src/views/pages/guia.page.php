<?php
require_once VIEWS_PATH . 'partials/head.php';
?>

<body>
    <?php require_once VIEWS_PATH . 'partials/header.php'; ?>
    <main class="guide-main">
        <section class="poster main">
            <div class="step-list">
            <a class="href-cursos" href="/cursos" style="width: 200px;">VER CURSOS</a>
            <br>
                <!-- PASO 1 -->
                <div class="step-item">
                    <div class="step-header">
                        <div class="step-number">1</div>
                        <div class="step-title">Completa el Formulario de Registro</div>
                    </div>
                    <div class="step-body">
                        <div class="step-detail"><span class="badge-action">¿Qué debes hacer?</span> Haz clic en el
                            botón de inscripción de la web y llena el formulario con tus datos reales.</div>
                        <div class="step-detail"><span class="badge-next">¿Qué pasará después?</span> La página
                            procesará tus datos y generará de forma automática un mensaje de confirmación listo para
                            enviar por WhatsApp.</div>
                    </div>
                </div>

                <!-- PASO 2 -->
                <div class="step-item">
                    <div class="step-header">
                        <div class="step-number">2</div>
                        <div class="step-title">Conéctate con nuestro Asesor</div>
                    </div>
                    <div class="step-body">
                        <div class="step-detail"><span class="badge-action">¿Qué debes hacer?</span> Presiona el
                            botón de WhatsApp en la pantalla. Se abrirá el chat con nuestro número de soporte y el
                            texto ya redactado. Solo debes presionar <strong>"Enviar"</strong>.</div>
                        <div class="step-detail"><span class="badge-next">¿Qué pasará después?</span> Tu preventa
                            quedará registrada internamente y un asesor humano tomará tu chat de inmediato o en
                            pocos minutos.</div>
                    </div>
                </div>

                <!-- PASO 3 -->
                <div class="step-item">
                    <div class="step-header">
                        <div class="step-number">3</div>
                        <div class="step-title">Recibe los Datos Bancarios</div>
                    </div>
                    <div class="step-body">
                        <div class="step-detail"><span class="badge-action">¿Qué debes hacer?</span> Espera la
                            respuesta en el chat. El asesor te enviará los números de cuenta, opciones de
                            transferencia o enlaces de pago alternativos.</div>
                        <div class="step-detail"><span class="badge-next">¿Qué pasará después?</span> Eliges la
                            opción que prefieras y realizas la transacción desde la app de tu banco o pasarela
                            externa de confianza.</div>
                    </div>
                </div>

                <!-- PASO 4 -->
                <div class="step-item">
                    <div class="step-header">
                        <div class="step-number">4</div>
                        <div class="step-title">Envía tu Comprobante de Pago</div>
                    </div>
                    <div class="step-body">
                        <div class="step-detail"><span class="badge-action">¿Qué debes hacer?</span> Toma una
                            captura de pantalla del recibo o comprobante exitoso y envíala adjunta en el mismo chat
                            de WhatsApp.</div>
                        <div class="step-detail"><span class="badge-next">¿Qué pasará después?</span> El asesor
                            validará el depósito. Al confirmarse, te enviaremos por correo y WhatsApp un
                            <strong>Código de Acceso Único</strong> junto al enlace de activación.
                        </div>
                    </div>
                </div>

                <!-- PASO 5 -->
                <div class="step-item">
                    <div class="step-header">
                        <div class="step-number">5</div>
                        <div class="step-title">Canjea tu Código y Crea tu Cuenta</div>
                    </div>
                    <div class="step-body">
                        <div class="step-detail"><span class="badge-action">¿Qué debes hacer?</span> Haz clic en el
                            enlace recibido (o ingresa directamente a
                            <code><a href="/canjear">www.sharnails.online/canjear</a></code>), introduce
                            tu código exclusivo y define el correo y contraseña para tu cuenta.
                        </div>
                        <div class="step-detail"><span class="badge-next">¿Qué pasará después?</span> El sistema
                            validará el código al instante, creando tu perfil de alumno y abriendo el acceso
                            inmediato al curso.</div>
                    </div>
                </div>
            </div>
            <a class="href-cursos" href="/cursos">VER CURSOS</a>
            <br>
        </section>
    </main>
    <?php require_once VIEWS_PATH . 'partials/footer.php'; ?>
</body>

</html>

<?php exit(); ?>