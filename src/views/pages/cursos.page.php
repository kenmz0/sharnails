<!DOCTYPE html>
<html lang="es">
<?php
require_once VIEWS_PATH . 'partials/head.php';
?>

<body>
    <?php require_once VIEWS_PATH . 'partials/header.php' ?>
    <main class="curso-main">
        <section class="curso-filtro">
            <div class="group-filter">
                <select id="filtro-tiempo" name="orden-tiempo">
                    <option value="">Ordenar por fecha:</option>
                    <option value="recientes">Más recientes primero</option>
                    <option value="antiguos">Más antiguos primero</option>
                </select>
            </div>
            <div class="group-filter">
                <select id="filtro-alfabetico" name="orden-alfabetico">
                    <option value="">Ordenar por nombre:</option>
                    <option value="asc">A - Z</option>
                    <option value="desc">Z - A</option>
                </select>
            </div>
        </section>

        <ul class="curso-lista">
            <!-- <div class="mask"></div> -->
            <li>
                <articule class="curso-card">
                    <div class="portada">
                        <img src="assets/img/cursos/softgel.portada.webp" alt="Cartel Portada de Cursolo SoftGel">
                    </div>
                    <div class="precio">
                        <h2 class="title-curso">Soft Gel</h2>
                        <div class="precio-text">
                            <span class="precio-value">$ 100</span>
                            <span class="precio-anterior">$ 100</span>
                            <span class="precio-descuento"> 25 % 🠟</span>
                        </div>
                        <a class="href-cursos more-info" href="cursos/soft-gel">Más Información</a>
                    </div>
                </articule>
            </li>
            <li>
                <articule class="curso-card">
                    <div class="portada">
                        <img src="assets/img/cursos/softgel.portada.webp" alt="Cartel Portada de Cursolo SoftGel">
                    </div>
                    <div class="precio">
                        <h2 class="title-curso">Soft Gel</h2>
                        <div class="precio-text">
                            <span class="precio-value">$ 100</span>
                            <span class="precio-anterior">$ 100</span>
                            <span class="precio-descuento"> 25 % 🠟</span>
                        </div>
                        <a class="href-cursos more-info" href="cursos/soft-gel">Más Información</a>
                    </div>
                </articule>
            </li>
            <li>
                <articule class="curso-card">
                    <div class="portada">
                        <img src="assets/img/cursos/softgel.portada.webp" alt="Cartel Portada de Cursolo SoftGel">
                    </div>
                    <div class="precio">
                        <h2 class="title-curso">Soft Gel</h2>
                        <div class="precio-text">
                            <span class="precio-value">$ 100</span>
                            <span class="precio-anterior">$ 100</span>
                            <span class="precio-descuento"> 25 % 🠟</span>
                        </div>
                        <a class="href-cursos more-info" href="cursos/soft-gel">Más Información</a>
                    </div>
                </articule>
            </li>
            <li>
                <articule class="curso-card">
                    <div class="portada">
                        <img src="assets/img/cursos/softgel.portada.webp" alt="Cartel Portada de Cursolo SoftGel">
                    </div>
                    <div class="precio">
                        <h2 class="title-curso">Soft Gel</h2>
                        <div class="precio-text">
                            <span class="precio-value">$ 100</span>
                            <span class="precio-anterior">$ 100</span>
                            <span class="precio-descuento"> 25 % 🠟</span>
                        </div>
                        <a class="href-cursos more-info" href="cursos/soft-gel">Más Información</a>
                    </div>
                </articule>
            </li>
        </ul>
    </main>
    <?php require_once VIEWS_PATH . 'partials/footer.php' ?>
</body>

</html>