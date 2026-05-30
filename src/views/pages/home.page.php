<?php
require_once VIEWS_PATH . 'partials/head.php';
?>

<body>
    <?php require_once VIEWS_PATH . 'partials/header.php'; ?>
    <main class="home-main">
        <section class="poster main">
            <div class="background-item">
                <img src="/public/assets/img/home-page-nail.webp" alt="uñas nails acrilicas">
                <img src="/public/assets/img/home-page-nail-2.webp" alt="uñas nails acrilicas">
                <!--  <div class="mask"></div> -->
            </div>
            <img class="img-logo" src="/public/assets/img/logo_plain.webp" alt="Logo Sharnails">
            <a class="href-cursos" data-destino="Cursos" href="/cursos">VER CURSOS</a>
            <div class="redes-sociales">
                <ul>
                    <li>
                        <a href="https://www.tiktok.com/@sharnails_by_diana?lang=es" data-destino="tiktok - @Sharnails_By_Diana" target="_blank">
                            <div class="icon icon-tk"></div>
                            <small>Tiktok</small>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/sharnails_bydianapincay/" data-destino="Instagram - @Sharnails_By_DianaPincay" target="_blank">
                            <div class="icon icon-i"></div>
                            <small>Instagram</small>
                        </a>
                    </li>
                    <!--                     <li>
                        <a href="" target="_blank">
                            <div class="icon icon-yt"></div>
                            <small>YouTube</small>
                        </a>
                    </li> -->
                    <li>
                        <a href="https://nb-no.facebook.com/sharnails.bydianapincay/" data-destino="Facebook - @Sharnails_By_DianaPincay" target="_blank">
                            <div class="icon icon-fb"></div>
                            <small>Facebook</small>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="" target="_blank">
                            <div class="icon icon-pin"></div>
                            <small>Pinterest</small>
                        </a>
                    </li> -->
                </ul>
            </div>
        </section>
        <section class="poster formacion">
            <div class="image">
                <img loading="lazy" src="/public/assets/img/cursos/softgel.img.1.webp" alt="Curso nails experimentado">
            </div>
            <h2 class="title-poster">Formación Comprobada</h2>
            <div class="informacion">
                <p>
                    Convierte la teoría en ejecución técnica. Este curso <strong>100% asíncrono y pace-self</strong>
                    está construido sobre pilares de
                    práctica real y experiencia aplicada. He condensado años de formación directa en un programa basado
                    en desafíos y proyectos concretos. Está diseñado para que domines las herramientas mediante la
                    práctica constante, proporcionándote una estructura de resolución de problemas que te permitirá
                    avanzar con total autonomía y rigor profesional.
                <ul class="lista">
                    <li>
                        <?= SvgIcon::render('check-big', 20, 'var(--accent-color)') ?>
                        Aprendizaje práctico
                    </li>
                    <li>
                        <?= SvgIcon::render('check-big', 20, 'var(--accent-color)') ?>
                        Experiencia aplicada
                    </li>
                    <li>
                        <?= SvgIcon::render('check-big', 20, 'var(--accent-color)') ?>
                        Resultados reales
                    </li>
                    <li>
                        <?= SvgIcon::render('check-big', 20, 'var(--accent-color)') ?>
                        Formación paso a paso
                    </li>
                </ul>
                </p>
            </div>
        </section>
        <section class="poster acerca">
            <div class="informacion">
                <p>
                    Soy artista y formador creativo con más de 5 años de experiencia guiando a personas en el desarrollo
                    de técnicas manuales, expresión artística y creación de piezas únicas. Mi trabajo combina
                    creatividad, detalle y enseñanza práctica, transformando ideas en experiencias inspiradoras donde
                    cada alumno descubre su propio estilo y potencial creativo.
                </p>
                <a class="href-cursos" data-destino="Cursos" href="/cursos">VER CURSOS</a>
            </div>
            <div class="image">
                <img loading="lazy" src="/public/assets/img/cursos/softgel.img.1.webp" alt="Curso nails experimentado">
            </div>
        </section>
        <section class="poster curso-reciente">
            <h2 class="title-poster">Mantente Actualizada</h2>
            <articule class="curso-card">
                <div class="portada"> <img src="/public/assets/img/cursos/softgel.portada.webp"
                        alt="Cartel Portada de Curso SoftGel"> </div>
                <div class="informacion">
                    <h2 class="title-curso">SoftGel</h2>
                    <p class="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor iste
                        necessitatibus esse nisi. Possimus dolorum voluptatibus magnam reiciendis expedita, quidem
                        obcaecati, doloremque sit suscipit nam vero odit cupiditate ea vitae.</p> <a
                        class="href-cursos more-info" data-destino="Taller SoftGel" href="cursos/soft-gel">Más Información</a>
                </div>
            </articule>
        </section>
    </main>
    <?php require_once VIEWS_PATH . 'partials/loader.php'; ?>
    <?php require_once VIEWS_PATH . 'partials/footer.php'; ?>
</body>

</html>

<?php exit(); ?>