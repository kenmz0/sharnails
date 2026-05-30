<?php
/**
 * @var string $title Titlo de la pagina
 * @var int $id_curso Titlo de la pagina
 * @var array $galeria Mensaje de  Bienvenida     
 * @var string $title_window Titlo de la pagina
 * @var array $list_css Nombre de archivo css para esta pagina
 * @var string $url_template
 * @var array $curso_info
 */
?>

<?php
function LinksCss(array $list_css)
{
    foreach ($list_css as $file_css) {
        echo '<link rel="stylesheet" href="/assets/css/' . $file_css . '">';
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" loading="lazy" href="/assets/img/favicon.webp" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.payphonetodoesposible.com/box/v2.0/payphone-payment-box.css">
    <?php LinksCss($list_css); ?>
    <script type="module" src="https://cdn.payphonetodoesposible.com/box/v2.0/payphone-payment-box.js"></script>
    <title><?php echo $title_window; ?></title>
</head>

<body style="height: unset;">
    <?php require_once VIEWS_PATH . 'partials/header.php' ?>
    <?php require_once VIEWS_PATH . 'partials/dialog.form.acceso.php' ?>
    <main class="curso-softgel">
        <section class="poster main">
            <section class="portada">
                <ul class="lista-imagenes">
                    <?php
                    $i = 0;
                    foreach ($galeria as $img) {
                        $imagen = $img['public_id'];
                        $selected = $i == 0 ? 'class="selected"' : '';
                        echo '<li>';
                        echo '<div class="imagen-preview">';
                        echo '<img  loading="lazy" src="' . $url_template . $imagen . '" alt="">';
                        echo '</div>';
                        echo '</li>';
                        $i++;
                    }
                    ?>
                </ul>
                <div class="imagen-seleccionada">
                    <img loading="lazy" src="<?php echo $url_template . $galeria[0]['public_id']; ?> " alt="">
                </div>
            </section>
            <section class="informacion">
                <h1 class="title"><?= $curso_info['name'] ?></h1>
                <div class="precio-text">
                    <?php
                    if ($curso_info['discount'] && $curso_info['discount'] > 0) {
                        $subtotal = $curso_info['price'] * (100 - $curso_info['discount']) / 100;
                        echo '<span class="precio-value">$ ' . round($subtotal, 2) . '</span>';
                        echo '<span class="precio-anterior">$ ' . $curso_info['price'] . '</span>';
                        echo '<span class="precio-descuento"> ' . $curso_info['discount'] . ' % 🠟</span>';

                    } else {
                        echo '<span class="precio-value">$ ' . $curso_info['price'] . '</span>';
                    }
                    ?>
                </div>
                <!-- <a href="#pago" class="href-cursos slide-r">Comprar Taller</a> -->
                <button class="href-cursos slide-r" onclick="mostrarPopup()">Comprar Taller</button>
            </section>
            <section class="descripcion">
                <p><?= $curso_info['description'] ?></p>               
            </section>
        </section>
        <div id="popup">
            <button id="btn-cerrar" onclick="cerrarPopup()">Cerrar</button>
            <div id="pp-button"></div>
        </div>
    </main>
    <script src="/assets/scripts/utils/payphone.modal.js"></script>
    <script src="/assets/scripts/imagen.curso.js"></script>
    <?= require_once VIEWS_PATH . 'partials/loader.php' ?>
    <?php require_once VIEWS_PATH . 'partials/footer.php' ?>
</body>

</html>
