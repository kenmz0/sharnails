<?php
// src/middleware/auth.php
class AuthMiddleware {
    
    public static function check() {
        $inactividad = 600; // 10 minutos
        $now = time();

        // 1. ¿Está logueado?
        if (!isset($_SESSION['user_id'])) {
            self::unauthorized("Debes iniciar sesión para acceder.");
        }

        // 2. ¿Expiró por inactividad?
        if (isset($_SESSION['last_activity']) && ($now - $_SESSION['last_activity'] > $inactividad)) {
            self::terminateSession();
            self::unauthorized("Sesión expirada por inactividad.");
        }

        // 3. Actualizar actividad
        $_SESSION['last_activity'] = $now;
        
        // Si llega aquí, todo está OK. No hace nada y permite que el flujo siga.
    }

    private static function unauthorized($message) {
        // Detectamos si la petición es un Fetch/AJAX (JSON)
        $isAjax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) || 
                  (isset($_SERVER['HTTP_ACCEPT']) && str_contains($_SERVER['HTTP_ACCEPT'], 'application/json'));

        if ($isAjax) {
            header('Content-Type: application/json');
            http_response_code(401);
            echo json_encode(['status' => 'error', 'message' => $message]);
            exit;
        }

        // Si es una navegación normal
        header("Location: /login");
        exit;
    }

    private static function terminateSession() {
        session_unset();
        session_destroy();
    }
}