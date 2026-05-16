<?php
function LinksCss(array $list_css)
{
    foreach ($list_css as $file_css) {
        echo '<link rel="stylesheet" href="/public/assets/css/' . $file_css . '">';
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" loading="lazy" href="/public/assets/img/favicon.webp" type="image/x-icon">
    <?php
    /**
     * @var string $title_window Titlo de la pagina
     * @var array $list_css Nombre de archivo css para esta pagina
     */
    LinksCss($list_css); ?>
    <title><?php echo $title_window; ?></title>
</head>