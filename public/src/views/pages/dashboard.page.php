<?php
require_once VIEWS_PATH . 'partials/head.php';
require_once VIEWS_PATH . 'partials/SvgIcon.php'
    ?>

<?php
/**
 * @var array $informacion_usuario Info que debe venir de la db
 */
?>

<body>
    <?php require_once VIEWS_PATH . 'partials/header.php' ?>
    <main>
        <section class="perfil-estudiante">
            <div class="datos">
                <div class="info-media">
                    <div class="avatar">
                        <img class="logo" src="/public/assets/img/logo_plain.webp" alt="">
                        <!-- <?= SvgIcon::render('circle-user-round', 60) ?> -->
                    </div>
                    <div class="tag">
                        Estudiante
                    </div>
                </div>
                <div class="dato configuracion">
                    <button>
                        <div class="icon-pencil">
                            <?= SvgIcon::render('square-pen', 15) ?>
                        </div>
                        <span>Editar información</span>
                    </button>
                    <a href="/api/signout">
                        <div class="icon-logout">
                            <?= SvgIcon::render('square-arrow-right-exit', 15) ?>
                        </div>
                        <span>Cerrar Sesión</span>
                    </a>
                </div>
                <div class="dato nombre">
                    <span><?= $informacion_usuario['nombre'] ?></span>
                </div>
                <div class="dato email">
                    <div class="icon icon-email">
                        <?= SvgIcon::render('mail', 15) ?>
                    </div>
                    <span><?= $informacion_usuario['email'] ?></span>
                    </button>
                </div>
                <div class="dato antiguedad">
                    <div class="icon icon-email">
                        <?= SvgIcon::render('calendar', 15) ?>
                    </div>
                    <span><?= $informacion_usuario['antiguedad'] ?></span>
                </div>
            </div>
            <div class="resumen">
                <div class="dato">
                    <div class="icon-container">
                        <div class="icon-book">
                            <?= SvgIcon::render('book', 30) ?>
                        </div>
                    </div>
                    <span class="valor">3</span>
                    <span class="descripcion">Cursos Totales</span>
                </div>
                <div class="dato">
                    <div class="icon-container">
                        <div class="icon-clock">
                            <?= SvgIcon::render('clock', 30) ?>
                        </div>
                    </div>
                    <span class="valor">1</span>
                    <span class="descripcion">En progeso</span>
                </div>
                <div class="dato">
                    <div class="icon-container">
                        <div class="icon-check-big">
                            <?= SvgIcon::render('check-big', 30) ?>
                        </div>
                    </div>
                    <span class="valor">1</span>
                    <span class="descripcion">Completados</span>
                </div>
                <div class="dato">
                    <div class="icon-container">
                        <div class="icon-badge">
                            <?= SvgIcon::render('badge', 30) ?>
                        </div>
                    </div>
                    <span class="valor">1</span>
                    <span class="descripcion">Certificados</span>
                </div>
            </div>
        </section>
        <section class="poster cursos">
            <h2 class="section-titulo">Mis Cursos</h2>
            <div class="filtros">
                <button class="filtro selected">
                    <div class="icon-book">
                        <?= SvgIcon::render('book', 10, 'white') ?>
                    </div>
                    <span class="descripcion">Todos</span>
                    <span class="valor">2</span>
                </button>
                <button class="filtro">
                    <div class="icon-book">
                        <?= SvgIcon::render('clock', 10, 'white') ?>
                    </div>
                    <span class="descripcion">En Curso</span>
                    <span class="valor">1</span>
                </button>
                <button class="filtro">
                    <div class="icon-book">
                        <?= SvgIcon::render('check-big', 10, 'white') ?>
                    </div>
                    <span class="descripcion">Completados</span>
                    <span class="valor">1</span>
                </button>
                <button class="filtro">
                    <div class="icon-book">
                        <?= SvgIcon::render('alert', 10, 'white') ?>
                    </div>
                    <span class="descripcion">Incompletos</span>
                    <span class="valor">1</span>
                </button>
            </div>
            <div class="lista">
                <ul>
                    <li>
                        <article class="curso">
                            <div class="estado completado">
                                <div class="icon icon-check">
                                    <?= SvgIcon::render('check-big', 15) ?>
                                </div>
                                <span class="descripcion">Completado</span>
                            </div>
                            <div class="portada">
                                <img src="/public/assets/img/cursos/softgel.img.1.webp" alt="">
                            </div>
                            <div class="card">
                                <h2 class="curso-nombre">Taller de SoftGel</h2>
                                <p class="curso-descripcion">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                                <div class="progeso">
                                    <div class="tiempo">
                                        <div class="icon icon-clock">
                                            <?= SvgIcon::render('clock-fading', 10, '#ccc') ?>
                                        </div>
                                        <span>Restan 0 horas</span>
                                    </div>
                                    <div class="porcentaje">
                                        <span>100% completado</span>
                                    </div>
                                    <div class="barra" role="progressbar">
                                        <div class="bar-progress" style="width: 100%;"></div>
                                    </div>
                                </div>
                                <a class="btn_action continuar" data-destino="Ver certificado"
                                    href="#certificado-softgel">
                                    <div class="icon icon-badge">
                                        <?= SvgIcon::render('badge', 12, 'white') ?>
                                    </div>
                                    <span>Ver en Certificados</span>
                                </a>
                            </div>
                        </article>
                    </li>

                    <li>
                        <article class="curso">
                            <div class="estado en-curso">
                                <div class="icon icon-clock">
                                    <?= SvgIcon::render('clock', 15) ?>
                                </div>
                                <span class="descripcion">En curso</span>
                            </div>
                            <div class="portada">
                                <img src="/public/assets/img/cursos/softgel.img.1.webp" alt="">
                            </div>
                            <div class="card">
                                <h2 class="curso-nombre">Taller de SoftGel</h2>
                                <p class="curso-descripcion">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                                <div class="progeso">
                                    <div class="tiempo">
                                        <div class="icon icon-clock">
                                            <?= SvgIcon::render('clock-fading', 12, '#ccc') ?>
                                        </div>
                                        <span>Restan 2 horas</span>
                                    </div>
                                    <div class="porcentaje">
                                        <span>75% completado</span>
                                    </div>
                                    <div class="barra" role="progressbar">
                                        <div class="bar-progress" style="width: 75%;"></div>
                                    </div>
                                </div>
                                <a href="/classroom/soft-gel" data-destino="Classroom - SoftGel"
                                    class="btn_action continuar">
                                    <div class="icon icon-play">
                                        <?= SvgIcon::render('circle-play', 12) ?>
                                    </div>
                                    <span>Continuar</span>
                                </a>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="curso">
                            <div class="estado incompleto">
                                <div class="icon icon-alert">
                                    <?= SvgIcon::render('alert', 15) ?>
                                </div>
                                <span class="descripcion">Incompleto</span>
                            </div>
                            <div class="portada">
                                <img src="/public/assets/img/cursos/softgel.img.1.webp" alt="">
                            </div>
                            <div class="card">
                                <h2 class="curso-nombre">Taller de SoftGel</h2>
                                <p class="curso-descripcion">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                                <div class="progeso">
                                    <div class="tiempo">

                                    </div>
                                    <div class="porcentaje">
                                        <span>35% completado</span>
                                    </div>
                                    <div class="barra" role="progressbar">
                                        <div class="bar-progress" style="width: 35%;"></div>
                                    </div>
                                </div>
                                <a href="/cursos/soft-gel" data-destino="Página de Taller SoftGel"
                                    class="btn_action continuar">
                                    <div class="icon icon-replay">
                                        <?= SvgIcon::render('rotate-ccw', 12) ?>
                                    </div>
                                    <span>Retomar Curso</span>
                                </a>
                            </div>
                        </article>
                    </li>

                </ul>
            </div>
        </section>
        <section class="poster certificados">
            <h2 class="section-titulo">Mis Certificados</h2>
            <div class="lista">
                <ul>
                    <li>
                        <article class="curso certificado" id="certificado-softgel">
                            <div class="estado certificado">
                                <div class="icon icon-badge">
                                    <?= SvgIcon::render('badge', 15) ?>
                                </div>
                                <span class="descripcion">Certificado</span>
                            </div>
                            <div class="portada">
                                <img src="/public/assets/img/cursos/softgel.img.1.webp" alt="">
                            </div>
                            <div class="card">
                                <h2 class="curso-nombre">Taller de SoftGel</h2>
                                <div class="certificado-descripcion">
                                    <div class="icon icon-calendar">
                                        <?= SvgIcon::render('calendar', 15, '#ccc') ?>
                                    </div>
                                    <span>Emitido el 15 de Marzo, 2026</span>
                                </div>
                                <button class="btn_action continuar" href="#certificado-softgel">
                                    <div class="icon eye">
                                        <?= SvgIcon::render('eye', 17) ?>
                                    </div>
                                    <span>Ver Certificado</span>
                                </button>
                                <button class="btn_action continuar" href="#certificado-softgel">
                                    <div class="icon icon-download">
                                        <?= SvgIcon::render('download', 17) ?>
                                    </div>
                                    <span>Descargar</span>
                                </button>
                            </div>
                        </article>
                    </li>
                </ul>
            </div>
        </section>
    </main>
    <?php require_once VIEWS_PATH . 'partials/loader.php'; ?>
    <?php require_once VIEWS_PATH . 'partials/footer.php'; ?>
</body>

</html>