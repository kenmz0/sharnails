<?php
/**
 * @var string $title Titlo de la pagina
 * @var int $id_curso Titlo de la pagina
 * @var array $imagenes Mensaje de  Bienvenida
 */
?>
<!DOCTYPE html>
<html lang="es">
<?php
require_once VIEWS_PATH . 'partials/head.php';
?>

<body style="height: unset;">
    <?php require_once VIEWS_PATH . 'partials/header.php' ?>
    <?php require_once VIEWS_PATH . 'partials/dialog.form.acceso.php' ?>
    <script src="/assets/scripts/imagen.curso.js"></script>
    <script src="/assets/scripts/form.inscripcion.js"></script>

    <main class="curso-softgel">
        <section class="poster main">
            <section class="portada">
                <div class="imagen-seleccionada">
                    <img loading="lazy" src="<?php echo $imagenes[0]; ?> " alt="">
                </div>
                <ul class="lista-imagenes">
                    <?php
                    for ($i = 0; $i < count($imagenes); $i++) {
                        $imagen = $imagenes[$i];
                        $selected = $i == 0 ? 'class="selected"' : '';
                        echo '<li>';
                        echo '<div class="imagen-preview">';
                        echo '<img  loading="lazy" src="' . $imagen . '" ' . $selected . ' alt="">';
                        echo '</div>';
                        echo '</li>';
                    }
                    ?>
                </ul>
            </section>
            <section class="informacion">
                <h1 class="title">Curso de Soft Gel Online</h1>
                <div class="precio-text">
                    <span class="precio-value">$ 100</span>
                    <span class="precio-anterior">$ 150</span>
                    <span class="precio-descuento"> 25 % 🠟</span>
                </div>
                <a href="#pago" class="href-cursos invert">OBTENER ACCESO</a>
                <div class="descripcion">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas tenetur autem numquam aliquam
                        labore, unde vitae, dolor quia tempore illum, nobis iste et culpa deleniti. Consequatur nulla
                        recusandae rem neque.</p>
                    <ul>
                        <li>Para ganar mas</li>
                        <li>porque yo lo digo</li>
                        <li>Porque te lo mereces</li>
                        <li>Para ganar mas</li>
                        <li>porque yo lo digo</li>
                        <li>Porque te lo mereces</li>
                        <li>Para ganar mas</li>
                        <li>porque yo lo digo</li>
                        <li>Porque te lo mereces</li>
                    </ul>
                </div>
            </section>
        </section>
        <section class="poster inscripcion" id="pago">
            <section class="contexto">
                <h2 class="title">
                    Guia de Inscripción
                </h2>
                <div class="step-list">

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
                                tu código exclusivo y define el correo y contraseña para tu cuenta.</div>
                            <div class="step-detail"><span class="badge-next">¿Qué pasará después?</span> El sistema
                                validará el código al instante, creando tu perfil de alumno y abriendo el acceso
                                inmediato al curso.</div>
                        </div>
                    </div>
                </div>

            </section>
            <section class="formulario-inscripcion">
                <div
                    style="max-width: 450px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; border: 1px solid #e2e8f0; padding: 32px; border-radius: 12px; background-color: #ffffff; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);">

                    <h2 style="font-size: 22px; color: #0f172a; margin-top: 0; margin-bottom: 6px; font-weight: 600;">
                        Inscríbete</h2>
                    <p style="font-size: 14px; color: #64748b; margin-bottom: 24px; margin-top: 0;">Completa tus datos
                        para continuar.</p>

                    <form id="formulario-inscripcion" action="/registar-inscripcion"
                        style="display: flex; flex-direction: column; gap: 18px;">

                        <div style="display: flex; flex-direction: column; gap: 6px;">
                            <label for="nombre_curso" style="font-size: 14px; font-weight: 500; color: #344054;">Taller</label>
                            <input type="text" id="nombre_curso" name="nombre_curso" required readonly value="Taller Soft Gel"
                                style="padding: 10px 14px; font-size: 15px; border: 1px solid #d0d5dd; border-radius: 8px; outline: none; color: #101828; transition: border-color 0.2s;"
                                onfocus="this.style.borderColor='#3b82f6'; this.style.boxShadow='0 0 0 4px rgba(59, 130, 246, 0.1)';"
                                onblur="this.style.borderColor='#d0d5dd'; this.style.boxShadow='none';">
                        </div>


                        <!-- Campo: Nombre -->
                        <div style="display: flex; flex-direction: column; gap: 6px;">
                            <label for="nombre" style="font-size: 14px; font-weight: 500; color: #344054;">Nombre
                                completo</label>
                            <input type="text" id="nombre" name="nombre" placeholder="Ej. Juan Pérez" required
                                style="padding: 10px 14px; font-size: 15px; border: 1px solid #d0d5dd; border-radius: 8px; outline: none; color: #101828; transition: border-color 0.2s;"
                                onfocus="this.style.borderColor='#3b82f6'; this.style.boxShadow='0 0 0 4px rgba(59, 130, 246, 0.1)';"
                                onblur="this.style.borderColor='#d0d5dd'; this.style.boxShadow='none';">
                        </div>

                        <!-- Campo: Email -->
                        <div style="display: flex; flex-direction: column; gap: 6px;">
                            <label for="email" style="font-size: 14px; font-weight: 500; color: #344054;">Correo
                                electrónico</label>
                            <input type="email" id="email" name="email" placeholder="juan@ejemplo.com" required
                                style="padding: 10px 14px; font-size: 15px; border: 1px solid #d0d5dd; border-radius: 8px; outline: none; color: #101828; transition: border-color 0.2s;"
                                onfocus="this.style.borderColor='#3b82f6'; this.style.boxShadow='0 0 0 4px rgba(59, 130, 246, 0.1)';"
                                onblur="this.style.borderColor='#d0d5dd'; this.style.boxShadow='none';">
                        </div>

                        <!-- Campo: Teléfono -->
                        <div style="display: flex; flex-direction: column; gap: 6px;">
                            <label for="telefono" style="font-size: 14px; font-weight: 500; color: #344054;">Teléfono
                                celular</label>
                            <input type="tel" id="telefono" name="telefono" placeholder="Ej. 0999999999" required
                                pattern="[0-9]{10}"
                                title="Por favor, ingrese exactamente 10 digitos"
                                style="padding: 10px 14px; font-size: 15px; border: 1px solid #d0d5dd; border-radius: 8px; outline: none; color: #101828; transition: border-color 0.2s;"
                                onfocus="this.style.borderColor='#3b82f6'; this.style.boxShadow='0 0 0 4px rgba(59, 130, 246, 0.1)';"
                                onblur="this.style.borderColor='#d0d5dd'; this.style.boxShadow='none';">
                        </div>

                        <!-- Botón Enviar -->
                        <button type="submit"
                            style="margin-top: 8px; padding: 12px; font-size: 15px; font-weight: 600; color: #ffffff; background-color: #1e293b; border: none; border-radius: 8px; cursor: pointer; transition: background-color 0.2s;"
                            onmouseover="this.style.backgroundColor='#0f172a';"
                            onmouseout="this.style.backgroundColor='#1e293b';">
                            Procesar Inscripción
                        </button>

                    </form>
                </div>
                </div>
            </section>
        </section>
        <section class="poster reclarmar-codigo">
            <h2>¿Ya tienes tu codigo de acceso?</h2>
            <a class="href-canjear" href="/canjear">Canjealo Aqui</a>
        </section>
    </main>
    <!-- VENTANA DIALOG MODERNA -->
    <dialog id="modalExito">
        <!-- Botón de cerrar (X) -->
        <button id="btnCerrarModal" class="btn-close" aria-label="Cerrar">&times;</button>

        <!-- Icono o Check visual opcional -->
        <div class="success-icon">✓</div>

        <h3>¡Registro Exitoso!</h3>
        <p id="modalMensaje">Tu pedido ha sido registrado. Haz clic abajo para enviar tu comprobante.</p>

        <!-- Botón de WhatsApp -->
        <a href="#" id="btnEnviarWS" target="_blank" class="btn-ws">
            Notificar por WhatsApp
        </a>
    </dialog>
    <style>
        /* Estilos para el Dialog */
        dialog {
            border: none;
            /* Elimina el borde por defecto del navegador */
            border-radius: 16px;
            /* Bordes bien redondeados y modernos */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            /* Sombra suave para dar profundidad */
            padding: 35px 25px;
            width: 90%;
            max-width: 400px;
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            position: relative;
            background-color: #ffffff;
        }

        /* El fondo oscuro detrás del modal */
        dialog::backdrop {
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(4px);
            /* Difumina ligeramente el fondo de tu web */
        }

        /* Botón de cerrar (X) */
        .btn-close {
            position: absolute;
            top: 15px;
            right: 15px;
            background: none;
            border: none;
            font-size: 24px;
            color: #999;
            cursor: pointer;
            line-height: 1;
            padding: 5px;
            transition: color 0.2s ease;
        }

        .btn-close:hover {
            color: #333;
            /* Se oscurece al pasar el mouse */
        }

        /* Icono de Check Verde */
        .success-icon {
            width: 60px;
            height: 60px;
            background-color: #e8f5e9;
            color: #4caf50;
            font-size: 30px;
            line-height: 60px;
            border-radius: 50%;
            margin: 0 auto 15px auto;
            font-weight: bold;
        }

        /* Textos dentro del modal */
        dialog h3 {
            margin: 0 0 10px 0;
            color: #2c3e50;
            font-size: 22px;
        }

        dialog p {
            margin: 0 0 25px 0;
            color: #7f8c8d;
            font-size: 15px;
            line-height: 1.5;
        }

        /* Botón de WhatsApp Premium */
        .btn-ws {
            display: block;
            background-color: #25D366;
            color: white;
            padding: 14px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3);
            transition: transform 0.2s ease, background-color 0.2s ease;
        }

        .btn-ws:hover {
            background-color: #20ba56;
            transform: translateY(-2px);
            /* Efecto sutil de levante */
        }

        .btn-ws:active {
            transform: translateY(0);
        }
    </style>
    <?php require_once VIEWS_PATH . 'partials/footer.php' ?>
</body>

</html>