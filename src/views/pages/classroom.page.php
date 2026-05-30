<?php
/**
 * @var string $modalidad Titlo de la pagina
 * @var string $curso_name
 * @var string $url_video
 * 
 */
?>

<?php
require_once VIEWS_PATH . 'partials/head.php';
require_once VIEWS_PATH . 'partials/SvgIcon.php'
    ?>

<body style="height: unset;">
    <?php require_once VIEWS_PATH . 'partials/header.php' ?>
    <main class="classroom home">
        <section class="container">
            <h1 class="container-title"><?= $modalidad ?> <?= $curso_name ?> </h1>
            <hr>
            <section class="classroom-content">
                <div class="menu-container">
                    <div class="menu active" id="classroom_menu">
                        <h2 class="title-menu">Información</h2>
                        <button class="btn_menu" id="btn_menu">
                        </button>
                        <section class="menu_content">
                            <div class="portada">
                                <img src="/public/assets/img/cursos/softgel.portada.webp" alt="">
                            </div>
                            <section class="progreso">
                                <div class="tiempo">
                                    <div class="icon icon-clock-alert">
                                        <?= SvgIcon::render('clock-alert', 13, '#dc3545') ?>
                                    </div>
                                    <span id="tiempo_expiracion_txt">Su acceso a este taller expira en 30 dias</span>
                                </div>
                                <div class="tiempo">
                                    <div class="icon icon-clock">
                                        <?= SvgIcon::render('clock-fading', 13, '#6b4488') ?>
                                    </div>
                                    <span id="tiempo_restante_txt">2 horas más para completar el curso</span>
                                </div>
                                <div class="porcentaje">
                                    <span id="porcentaje_txt"><strong>5%</strong> completado</span>
                                </div>
                                <div class="barra" role="progressbar">
                                    <div class="bar-progress" style="width: 5%;" id="el_progressbar"></div>
                                </div>
                            </section>
                        </section>
                    </div>
                    <div class="backdrop active">

                    </div>
                </div>
                <section class="contenido">
                    <h2 class="contenido-title">Contenido</h2>
                    <ul class="lista-bloque">
                        <li class="bloque">
                            <button data-bloque="1" class="titulo-bloque expanded"><span>Introduccion</span>
                                <div class="completados">1/1</div>
                                <div class="arrow"></div>
                            </button>
                            <ol class="items-bloque expanded" id="bloque_contenido_1">
                                <li>
                                    <button class="contenido-titulo" data-contenido="1" id="btn_contenido_1">
                                        <span>Bienvenida “Taller de Soft Gel”</span>
                                        <div class="duracion-contenido-bloque">
                                            1:30
                                        </div>
                                        <div>
                                            <?= SvgIcon::render('circle-check', 15, 'white', 'green') ?>
                                        </div>
                                    </button>
                                    <div class="contenido-pizarra" id="pizarra_contenido_1">
                                        <section id="video_contenido_1" class="video-container">
                                            <iframe width="100%" height="100%" src="<?= $url_video ?>"
                                                title="Pato caminando" frameborder="0" allow="accelerometer; 
                                                autoplay; 
                                                clipboard-write; 
                                                encrypted-media; 
                                                gyroscope; 
                                                picture-in-picture; 
                                                web-share" referrerpolicy="strict-origin-when-cross-origin"
                                                allowfullscreen>
                                            </iframe>
                                        </section>
                                        <section class="video-progreso">
                                            <button class="btn-fullscreen" data-contenido="1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-fullscreen-icon lucide-fullscreen">
                                                    <path d="M3 7V5a2 2 0 0 1 2-2h2" />
                                                    <path d="M17 3h2a2 2 0 0 1 2 2v2" />
                                                    <path d="M21 17v2a2 2 0 0 1-2 2h-2" />
                                                    <path d="M7 21H5a2 2 0 0 1-2-2v-2" />
                                                    <rect width="10" height="8" x="7" y="8" rx="1" />
                                                </svg>
                                            </button>
                                            <div class="porcentaje">
                                                <span id="porcentaje_txt">5%</span>
                                            </div>
                                            <div class="barra" role="progressbar">
                                                <div class="bar-progress" style="width: 5%;"
                                                    id="progressbar_contenido_1">
                                                </div>
                                            </div>
                                            <button class="btn_completed" data-contenido="1"
                                                id="btn_completed_contenido_1">
                                                Marcar como Completado
                                            </button>
                                        </section>
                                    </div>
                                </li>
                            </ol>
                        </li>
                        <li class="bloque">
                            <button data-bloque="2" class="titulo-bloque"><span>Contenido Teórico</span>
                                <div class="completados">0/10</div>
                                <div class="arrow"></div>
                            </button>
                            <ol class="items-bloque">
                                <li>Anatomía de la uña natural</li>
                                <li>Información complementaria sobre la uña natural</li>
                                <li>Pasos previos a la Manicura Combinada, reconocimiento del tipo de piel a trabajar
                                </li>
                                <li>Pasos previos a la Manicura Combinada, identificar el tipo de uña natural y analizar
                                    el procedimiento a seguir.</li>
                                <li>Características de los tips para Soft Gel</li>
                                <li>Ventajas y Desventajas del Sistema Soft Gel</li>
                                <li>Como elegir el tip correcto en base a cada uña natural</li>
                                <li>¿Se puede realizar o no Mantenimiento al Sistema Soft Gel?</li>
                                <li>Retiro del Sistema Soft Gel</li>
                                <li>Materiales y herramientas necesarias para realizar el Sistema Soft Gel</li>
                                <li>Procedimiento teórico de la manicura</li>
                            </ol>
                        </li>
                        <li class="bloque">
                            <button data-bloque="3" class="titulo-bloque"><span>Contenido Teórico</span>
                                <div class="completados">0/8</div>
                                <div class="arrow"></div>
                            </button>
                            <ol class="items-bloque">
                                <li>Manicura, preparación</li>
                                <li>Como medir el tip de Soft Gel correctamente y cuáles son los errores más comunes al
                                    aplicarlo</li>
                                <li>Preparación y adaptación del tip de Soft Gel </li>
                                <li>Aplicación del Tip Soft Gel en uña convexa</li>
                                <li>Aplicación del Tip Soft Gel en uña cóncava </li>
                                <li>Relleno y Nivelación con Base </li>
                                <li>Como lograr que no se transparente la uña natural para los esmaltados </li>
                                <li>Esmaltado perfecto</li>
                                <li>Babyglam con difuminado en punta </li>
                                <li>Encapsulado total del sistema (forma #1)</li>
                                <li>Encapsulado total del sistema (forma #2)</li>
                                <li>Babygltter con encapsulado en punta </li>
                                <li>Acabados finales</li>
                            </ol>
                        </li>
                        <li class="bloque">
                            <button data-bloque="4" class="titulo-bloque"><span>Contenido Teórico</span>
                                <div class="completados">0/1</div>
                                <div class="arrow"></div>
                            </button>
                            <ol class="items-bloque">
                                <li>
                                    Cierre del Taller,
                                </li>
                            </ol>
                        </li>
                        <li class="bloque">
                            <button data-bloque="5" class="titulo-bloque"><span>Contenido Teórico</span>
                                <div class="completados">0/5</div>
                                <div class="arrow"></div>
                            </button>
                            <ol class="items-bloque">
                                <li>Técnica de decoración: Flor en relieve</li>
                                <li>Técnica de decoración: Francés con difuminado</li>
                                <li>Técnica de decoración: Relieve </li>
                                <li>Técnica de decoración: Efecto concha </li>
                                <li>Técnica de decoración: Francés Encapsulado</li>
                                <li>Técnica de decoración: Francés Encapsulado</li>

                            </ol>
                        </li>
                    </ul>
                </section>
            </section>
        </section>
    </main>
    <script src="/public/assets/scripts/classroom.home.js"></script>
    <script src="/public/assets/scripts/utils/htx.min.js"></script>
    <dialog class="dialog_pizarra" id="dialog_pizarra" style="display: none;">
        <button class="btn_cerrarModal" id="cerrarModal">
            <?= SvgIcon::render('x', 15) ?>
        </button>
        <div class="dialog-content" id="dialog_content">

        </div>
    </dialog>
    <?php require_once VIEWS_PATH . 'partials/loader.php'; ?>
    <?php require_once VIEWS_PATH . 'partials/footer.php'; ?>
</body>

</html>