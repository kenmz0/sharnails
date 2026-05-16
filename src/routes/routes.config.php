<?php
require_once BASE_DIR . 'src/middleware/auth.php';
// Definición de rutas
$router->get('/', function () {
    //AuthMiddleware::check();//!no aqui en el home
    (new HomeController)->index();
});
$router->get('/login', 'LoginController@index');
$router->get('/cursos', 'CursoController@index');
$router->get('/cursos/soft-gel', 'CursoController@softGel');
$router->get('/canjear', 'InscripcionController@canjear');
$router->post('/registro-inscripcion', 'InscripcionController@registrarInscripcion');
$router->get('/cart', 'CartController@index');
$router->get('/guia-inscripcion', 'InscripcionController@guide');
$router->get('/nosotros', 'AboutController@index');

$router->get('/api/login/validation', 'LoginController@validation');
$router->post('/api/cart/add-item', 'CartController@add');
//Todo: implementar metodo delete
$router->post('/api/cart/delete-item', 'CartController@delete');
//Todo: implementar metodo clear
$router->post('/api/cart/clear', 'CartController@clear');

?>