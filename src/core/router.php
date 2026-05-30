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

        if (isset($this->routes[$method][$path])) {
            $callback = $this->routes[$method][$path];
            return $this->callAction($callback);
        }

        if (isset($this->routes[$method])) {
            foreach ($this->routes[$method] as $route => $callback) {
                $pattern = preg_replace('/\{[a-zA-Z0-9_]+\}/', '([^/]+)', $route);
                $pattern = '#^' . $pattern . '$#';
                if (preg_match($pattern, $path, $matches)) {
                    array_shift($matches);
                    return $this->callAction($callback, $matches);
                }
            }
        }

        error_log("Ruta no encontrada: " . $path);
        http_response_code(404);
        echo "404 - Página no encontrada";
        return;
    }

    protected function callAction($callback, $params = [])
    {
        if (is_callable($callback)) {
            return call_user_func_array($callback, $params);
        }

        if (is_string($callback)) {
            list($route, $method) = explode('@', $callback);
            require_once SRC_PATH . "controllers/{$route}.php";
            $routeInstance = new $route();
            return call_user_func_array([$routeInstance, $method], $params);
        }
    }
}

?>