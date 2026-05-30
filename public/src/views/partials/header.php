<?php
/**
 * @var string $title_page Titlo de la pagina
 * @var string $mensaje Mensaje de  Bienvenida
 * @var boolean $user_session Booleano de session
 */
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$isActive = fn($path) => $uri === $path ? 'class="active"' : '';
require_once SRC_PATH . 'views/partials/SvgIcon.php';
?>

<header class="header">
    <h1 class="title-page"><?php echo $title_page ?></h1>
    <img class="img-logo" src="/public/assets/img/logo_plain.webp" alt="Logo Sharnails">
    <button class="button-menu-navegavion">
        <?= SvgIcon::render('menu', 25) ?>
    </button>
    <nav class="nav-item small-view">
        <ul>
            <li>
                <a data-destino="Inicio" href="/" <?= $isActive('/') ?>>Inicio</a>
            </li>

            <li>
                <a href="/cursos" data-destino="Cursos" <?= $isActive('/cursos') ?>>Cursos</a>
            </li>
            <li>
                <a href="/nosotros" data-destino="Sobre Nosotrros" <?= $isActive('/nosotros') ?>>Nosotros</a>
            </li>
            <?php
            if ($user_session === false) {
                if ($uri === '/signin') {
                    echo "<li><a class='href-signout' data-destino='Registro' href='/signup'>Registrarse</a></li>";
                } else {
                    echo "<li><a class='href-signout' data-destino='Ingresar' href='/signin'>Iniciar Sesión</a></li>";
                }
            } else {
                echo "<li><a data-destino='Mi Cuenta' href='/dashboard' " . $isActive('/dashboard') . ">Mi cuenta</a></li>";
                if($uri !== '/'){
                    echo "<li><a class='href-signout' data-destino='Cerrar Sesión' href='/api/signout' " . $isActive('/signout') . ">Cerrar Sesión</a></li>";
                }
            }
            ?>
        </ul>
    </nav>
</header>
<div class="header-backdrop">
    
</div>
<script src="/public/assets/scripts/header.effect.js"></script>