<?php
require_once VIEWS_PATH . 'partials/head.php';
?>

<body>
    <?php require_once VIEWS_PATH . 'partials/header.php' ?>
    <main class="curso-main">
        <ul class="curso-lista">
            <?php
            /** @var array $curso_list  
             * @var string $url_template
             */
            foreach ($curso_list as $curso) {
                $fullname = ''.$curso['modalidad'] . ' ' . $curso['name'];
                echo '<li>';
                echo '<articule class="curso-card">';
                echo '    <div class="portada">';
                echo '        <img src="' . $url_template . $curso['cover_url'] . '"';
                echo '            alt="Portada de ' . $fullname . '">';
                echo '    </div>';
                echo '    <div class="informacion">';
                echo '        <h2 class="title-curso">' . $curso['name'] . '</h2>';
                echo '        <p class="descripcion">' . $curso['description'] . '</p>';
                echo '        <a class="href-cursos more-info" data-destino="' . $fullname . '" href="cursos/{'. $curso['slug'].'}">Más Información </a>';
                echo '    </div>';
                echo '</articule>';
                echo '</li>';
            }
            ?>
        </ul>
    </main>
    <?php require_once VIEWS_PATH . 'partials/loader.php' ?>
    <?php require_once VIEWS_PATH . 'partials/footer.php' ?>
</body>

</html