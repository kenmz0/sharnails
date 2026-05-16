<?php

class Router
{
    protected $routes = [];

    // Registra rutas GET
    public function get($uri, $route)
    {
        $this->routes['GET'][$uri] = $route;
    }

    // Registra rutas POST
    public function post($uri, $route)
    {
        $this->routes['POST'][$uri] = $route;
    }

    // Ejecuta la ruta solicitada
    public function dispatch($uri, $method)
    {
        $path = parse_url($uri, PHP_URL_PATH);

        $callback = $this->routes[$method][$path] ?? null;

        if (!$callback) {
            error_log("Ruta no encontrada: " . $path);
            http_response_code(404);
            echo "404 - Página no encontrada";
            return;
        }

        if (is_callable($callback)) {
            return $callback();
        }

        if (is_string($callback)) {
            return $this->callAction($callback);
        }
    }

    protected function callAction($handler)
    {
        // Separamos el Controlador del Método (ej: 'UserController@index')
        list($route, $method) = explode('@', $handler);

        require_once SRC_PATH . "controllers/{$route}.php";

        $routeInstance = new $route();
        $routeInstance->$method();
    }
}

?>