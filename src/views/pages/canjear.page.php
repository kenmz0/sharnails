<!DOCTYPE html>
<html lang="es">
<?php
require_once VIEWS_PATH . 'partials/head.php';
?>

<body>
    <?php require_once VIEWS_PATH . 'partials/header.php' ?>
    <main>
        <section class="poster main">
            <div class="card">

                <!-- Headline / Encabezado -->
                <h3 class="title">
                    Ingresa tu código para
                    obtener acceso al curso.</h3>
                    <br>
                <from class="formulario">
                    <input type="text" id="codigo_canje" name="codigo_canje" placeholder="XXXX-XXXX">
    
                    <button type="submit">
                        Canjear
                    </button>
                    </form>
            </div>
        </section>
    </main>
    <?php require_once VIEWS_PATH . 'partials/footer.php' ?>
</body>

</html>