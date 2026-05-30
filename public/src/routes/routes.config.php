<?php
require_once BASE_DIR . 'src/middleware/auth.php';
// Definición de rutas
$router->get('/', 'HomeController@index');
$router->get('/signin', 'SessionController@signin');
$router->get('/signup', 'SessionController@signup');
$router->get('/dashboard', 'SessionController@dashboard');
$router->get('/cursos', 'CursoController@index');
$router->get('/cursos/{slug}', 'CursoController@curso');
$router->get('/canjear', 'InscripcionController@canjear');
$router->post('/registro-inscripcion', 'InscripcionController@registrarInscripcion');
$router->get('/cart', 'CartController@index');
$router->get('/guia-inscripcion', 'InscripcionController@guide');
$router->get('/nosotros', 'AboutController@index');

$router->get('/classroom/soft-gel', 'ClassroomController@SoftGelHome');
$router->get('/classroom/soft-gel/next-recurso', 'ClassroomController@renderNextRecurso');


$router->post('/api/signin', 'AuthController@signin');
$router->post('/api/signup', 'AuthController@signup');
$router->get('/api/signout', 'AuthController@signout');


$router->post('/api/cart/add-item', 'CartController@add');
//Todo: implementar metodo delete
$router->post('/api/cart/delete-item', 'CartController@delete');
//Todo: implementar metodo clear
$router->post('/api/cart/clear', 'CartController@clear');

?>