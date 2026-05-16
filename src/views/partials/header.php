<?php
/**
 * @var string $title_page Titlo de la pagina
 * @var string $mensaje Mensaje de  Bienvenida
 */
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $isActive = fn($path) => $uri === $path ? 'class="active"' : '';
?>

<header class="header">
    <h1 class="title-page"><?php echo $title_page ?></h1>
    <img class="img-logo" src="/public/assets/img/logo_plain.webp" alt="Logo Sharnails">
    <button class="button-menu-navegavion" style="display: none;">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 448 512"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
            <path
                d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z" />
        </svg>
    </button>
    <nav class="nav-item">
        <ul>
            <li>
                <a href="/" <?= $isActive('/') ?>>Inicio</a>
            </li>

            <li>
                <a href="/cursos" <?= $isActive('/cursos') ?>>Cursos</a>
            </li>
            <li>
                <a href="/nosotros" <?= $isActive('/nosotros') ?>>Nosotros</a>
            </li>
            <li>
                <a href="/perfil" <?= $isActive('/perfil') ?>>Mi cuenta</a>
            </li>
            <li>
                <a href="/guia-inscripcion" <?= $isActive('/guia-inscripcion') ?>>Guia de Inscripcion</a>
            </li>
        </ul>
    </nav>
</header>
<script src="/public/assets/scripts/header.effect.js"></script>