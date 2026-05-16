<!DOCTYPE html>
<html lang="es">
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
            <a class="href-cursos" href="/cursos">VER CURSOS</a>
            <div class="redes-sociales">
                <ul>
                    <li>
                        <a href="https://www.tiktok.com/@sharnails_by_diana?lang=es" target="_blank">
                            <div class="icon icon-tk"></div>
                            <small>Tiktok</small>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/sharnails_bydianapincay/" target="_blank">
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
                        <a href="https://nb-no.facebook.com/sharnails.bydianapincay/" target="_blank">
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
            <div class="informacion">
                <h2>Formación Comprobada</h2>
                <p>
                    Convierte la teoría en ejecución técnica. Este curso <strong>100% asíncrono y pace-self</strong>
                    está construido sobre pilares de
                    práctica real y experiencia aplicada. He condensado años de formación directa en un programa basado
                    en desafíos y proyectos concretos. Está diseñado para que domines las herramientas mediante la
                    práctica constante, proporcionándote una estructura de resolución de problemas que te permitirá
                    avanzar con total autonomía y rigor profesional.
                <ul class="lista">
                    <li>
                        <div class="list-style-star"></div>
                        Aprendizaje práctico
                    </li>
                    <li>
                        <div class="list-style-star"></div>
                        Experiencia aplicada
                    </li>
                    <li>
                        <div class="list-style-star"></div>
                        Resultados reales
                    </li>
                    <li>
                        <div class="list-style-star"></div>
                        Formación paso a paso
                    </li>
                </ul>
                </p>
            </div>
        </section>
        <section class="poster acerca">
            <div class="informacion">
                <h2>Instructura y Formadora Especializada</h2>
                <p>
                    Soy artista y formador creativo con más de 5 años de experiencia guiando a personas en el desarrollo
                    de técnicas manuales, expresión artística y creación de piezas únicas. Mi trabajo combina
                    creatividad, detalle y enseñanza práctica, transformando ideas en experiencias inspiradoras donde
                    cada alumno descubre su propio estilo y potencial creativo.
                </p>
                <a class="href-cursos" href="/cursos">VER CURSOS</a>
            </div>
            <div class="image">
                <img loading="lazy" src="/public/assets/img/cursos/softgel.img.1.webp" alt="Curso nails experimentado">
            </div>
        </section>
        <section class="poster curso-reciente">
            <h2>Mantente Actualizada</h2>
            <div class="image">
                <img loading="lazy" src="/public/assets/img/cursos/softgel.img.1.webp" alt="Curso nails experimentado">
            </div>
            <div class="informacion">
                <a class="href-cursos invert" href="/cursos/soft-gel">Visitar CURSO</a>
            </div>
        </section>
    </main>
    <?php require_once VIEWS_PATH . 'partials/footer.php';?>
</body>

</html>

<?php exit();?>